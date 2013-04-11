<?php
/**
 * exercises
 *
*/

elgg_register_event_handler('init', 'system', 'exercise_init');

/**
 * Init exercise plugin.
 */
function exercise_init() {

	elgg_register_library('elgg:exercise', elgg_get_plugins_path() . 'exercise/lib/exercise.php');

	// add a site navigation item
	$item = new ElggMenuItem('exercise', elgg_echo('exercise:exercises'), 'exercise/all');
	elgg_register_menu_item('site', $item);

	elgg_register_event_handler('upgrade', 'upgrade', 'exercise_run_upgrades');

	// add to the main css
	elgg_extend_view('css/elgg', 'exercise/css');
	
	// register the exercise's fee style
	$fee_css = 'mod/exercise/views/default/fee/css/style.css';
	elgg_register_css('elgg.feeCSS', $fee_css);		

	// register the exercise's JavaScript
	$exercise_js = elgg_get_simplecache_url('js', 'exercise/save_draft');
	elgg_register_simplecache_view('js/exercise/save_draft');
	elgg_register_js('elgg.exercise', $exercise_js);
	
	// register the exercise's fee JavaScript
	$fee_js = 'mod/exercise/views/default/fee/js/exercise.js';
	elgg_register_js('elgg.fee', $fee_js);
	
	// register the exercise's fee JavaScript
	$exerciseFilter_js = 'mod/exercise/views/default/js/exercise/exerciseFilter.js';
	elgg_register_js('elgg.exerciseFilter', $exerciseFilter_js);	
	
	// register the exercise's fee JavaScript
	$fee_view_js = 'mod/exercise/views/default/fee/js/exercise_viewer.js';
	elgg_register_js('elgg.feeView', $fee_view_js);	
	
	// register the raphael JavaScript
	$raphael_js = 'mod/exercise/views/default/fee/js/raphael.js';
	elgg_register_js('elgg.raphael', $raphael_js);

	// register the raphaelJson JavaScript
	$raphael_json_js = 'mod/exercise/views/default/fee/js/raphael.json.js';
	elgg_register_js('elgg.raphaelJson', $raphael_json_js);

	elgg_register_ajax_view('fee/ajax/fee_load');
	elgg_register_ajax_view('fee/ajax/fee_save');	

	// routing of urls
	elgg_register_page_handler('exercise', 'exercise_page_handler');

	// override the default url to view a exercise object
	elgg_register_entity_url_handler('object', 'exercise', 'exercise_url_handler');

	// notifications - need to register for unique event because of draft/published status
	elgg_register_event_handler('publish', 'object', 'object_notifications');
	elgg_register_plugin_hook_handler('notify:entity:message', 'object', 'exercise_notify_message');

	// add exercise link to
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'exercise_owner_block_menu');

	// pingbacks
	//elgg_register_event_handler('create', 'object', 'exercise_incoming_ping');
	//elgg_register_plugin_hook_handler('pingback:object:subtypes', 'object', 'exercise_pingback_subtypes');

	// Register for search.
	elgg_register_entity_type('object', 'exercise');

	// Add group option
	add_group_tool_option('exercise', elgg_echo('exercise:enableexercise'), true);
	elgg_extend_view('groups/tool_latest', 'exercise/group_module');

	// add a exercise widget
	elgg_register_widget_type('exercise', elgg_echo('exercise'), elgg_echo('exercise:widget:description'));

	// register actions
	$action_path = elgg_get_plugins_path() . 'exercise/actions/exercise';
	elgg_register_action('exercise/save', "$action_path/save.php");
	elgg_register_action('exercise/auto_save_revision', "$action_path/auto_save_revision.php");
	elgg_register_action('exercise/delete', "$action_path/delete.php");

	// entity menu
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'exercise_entity_menu_setup');

	// ecml
	elgg_register_plugin_hook_handler('get_views', 'ecml', 'exercise_ecml_views_hook');
}

/**
 * Dispatches exercise pages.
 * URLs take the form of
 *  All exercises:       exercise/all
 *  User's exercises:    exercise/owner/<username>
 *  Friends' exercise:   exercise/friends/<username>
 *  User's archives: exercise/archives/<username>/<time_start>/<time_stop>
 *  exercise post:       exercise/view/<guid>/<title>
 *  New post:        exercise/add/<guid>
 *  Edit post:       exercise/edit/<guid>/<revision>
 *  Preview post:    exercise/preview/<guid>
 *  Group exercise:      exercise/group/<guid>/all
 *
 * Title is ignored
 *
 * @todo no archives for all exercise or friends
 *
 * @param array $page
 * @return bool
 */
function exercise_page_handler($page) {

	elgg_load_library('elgg:exercise');

	// forward to correct URL for exercise pages pre-1.8
	exercise_url_forwarder($page);

	// push all exercises breadcrumb
	elgg_push_breadcrumb(elgg_echo('exercise:exercises'), "exercise/all");

	if (!isset($page[0])) {
		$page[0] = 'all';
	}

	$page_type = $page[0];
	switch ($page_type) {
		case 'owner':
			$user = get_user_by_username($page[1]);
			$params = exercise_get_page_content_list($user->guid);
			break;
		case 'friends':
			$user = get_user_by_username($page[1]);
			$params = exercise_get_page_content_friends($user->guid);
			break;
		case 'archive':
			$user = get_user_by_username($page[1]);
			$params = exercise_get_page_content_archive($user->guid, $page[2], $page[3]);
			break;
		case 'view':
			$params = exercise_get_page_content_read($page[1]);
			break;
		case 'read': // Elgg 1.7 compatibility
			register_error(elgg_echo("changebookmark"));
			forward("exercise/view/{$page[1]}");
			break;
		case 'add':
			gatekeeper();
			$params = exercise_get_page_content_edit($page_type, $page[1]);
			break;
		case 'edit':
			gatekeeper();
			$params = exercise_get_page_content_edit($page_type, $page[1], $page[2]);
			break;
		case 'group':
			if ($page[2] == 'all') {
				$params = exercise_get_page_content_list($page[1]);
			} else {
				$params = exercise_get_page_content_archive($page[1], $page[3], $page[4]);
			}
			break;
		case 'all':
			$params = exercise_get_page_content_list();
			break;
		default:
			return false;
	}

	if (isset($params['sidebar'])) {
		$params['sidebar'] .= elgg_view('exercise/sidebar', array('page' => $page_type));
	} else {
		$params['sidebar'] = elgg_view('exercise/sidebar', array('page' => $page_type));
	}

	$body = elgg_view_layout('content', $params);

	echo elgg_view_page($params['title'], $body);
	return true;
}

/**
 * Format and return the URL for exercises.
 *
 * @param ElggObject $entity exercise object
 * @return string URL of exercise.
 */
function exercise_url_handler($entity) {
	if (!$entity->getOwnerEntity()) {
		// default to a standard view if no owner.
		return FALSE;
	}

	$friendly_title = elgg_get_friendly_title($entity->title);

	return "exercise/view/{$entity->guid}/$friendly_title";
}

/**
 * Add a menu item to an ownerblock
 */
function exercise_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "exercise/owner/{$params['entity']->username}";
		$item = new ElggMenuItem('exercise', elgg_echo('exercise'), $url);
		$return[] = $item;
	} else {
		if ($params['entity']->exercise_enable != "no") {
			$url = "exercise/group/{$params['entity']->guid}/all";
			$item = new ElggMenuItem('exercise', elgg_echo('exercise:group'), $url);
			$return[] = $item;
		}
	}

	return $return;
}

/**
 * Add particular exercise links/info to entity menu
 */
function exercise_entity_menu_setup($hook, $type, $return, $params) {
	if (elgg_in_context('widgets')) {
		return $return;
	}

	$entity = $params['entity'];
	$handler = elgg_extract('handler', $params, false);
	if ($handler != 'exercise') {
		return $return;
	}

	if ($entity->status != 'published') {
		// draft status replaces access
		foreach ($return as $index => $item) {
			if ($item->getName() == 'access') {
				unset($return[$index]);
			}
		}

		$status_text = elgg_echo("exercise:status:{$entity->status}");
		$options = array(
			'name' => 'published_status',
			'text' => "<span>$status_text</span>",
			'href' => false,
			'priority' => 150,
		);
		$return[] = ElggMenuItem::factory($options);
	}

	return $return;
}

/**
 * Set the notification message body
 * 
 * @param string $hook    Hook name
 * @param string $type    Hook type
 * @param string $message The current message body
 * @param array  $params  Parameters about the exercise posted
 * @return string
 */
function exercise_notify_message($hook, $type, $message, $params) {
	$entity = $params['entity'];
	$to_entity = $params['to_entity'];
	$method = $params['method'];
	if (elgg_instanceof($entity, 'object', 'exercise')) {
		$descr = $entity->excerpt;
		$title = $entity->title;
		$owner = $entity->getOwnerEntity();
		return elgg_echo('exercise:notification', array(
			$owner->name,
			$title,
			$descr,
			$entity->getURL()
		));
	}
	return null;
}

/**
 * Register exercises with ECML.
 */
function exercise_ecml_views_hook($hook, $entity_type, $return_value, $params) {
	$return_value['object/exercise'] = elgg_echo('exercise:exercises');

	return $return_value;
}

/**
 * Upgrade from 1.7 to 1.8.
 */
function exercise_run_upgrades($event, $type, $details) {
	$exercise_upgrade_version = elgg_get_plugin_setting('upgrade_version', 'exercises');

	if (!$exercise_upgrade_version) {
		 // When upgrading, check if the ElggExercise class has been registered as this
		 // was added in Elgg 1.8
		if (!update_subtype('object', 'exercise', 'ElggExercise')) {
			add_subtype('object', 'exercise', 'ElggExercise');
		}

		elgg_set_plugin_setting('upgrade_version', 1, 'exercises');
	}
}
