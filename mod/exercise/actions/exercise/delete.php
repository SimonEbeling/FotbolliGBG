<?php
/**
 * Delete exercise entity
 *
 * @package exercise
 */

$exercise_guid = get_input('guid');
$exercise = get_entity($exercise_guid);

if (elgg_instanceof($exercise, 'object', 'exercise') && $exercise->canEdit()) {
	$container = get_entity($exercise->container_guid);
	if ($exercise->delete()) {
		system_message(elgg_echo('exercise:message:deleted_post'));
		if (elgg_instanceof($container, 'group')) {
			forward("exercise/group/$container->guid/all");
		} else {
			forward("exercise/owner/$container->username");
		}
	} else {
		register_error(elgg_echo('exercise:error:cannot_delete_post'));
	}
} else {
	register_error(elgg_echo('exercise:error:post_not_found'));
}

forward(REFERER);