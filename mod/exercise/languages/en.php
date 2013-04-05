<?php
/**
 * exercise English language file.
 *
 */

$english = array(
	'exercise' => 'exercises',
	'exercise:exercises' => 'exercises',
	'exercise:revisions' => 'Revisions',
	'exercise:archives' => 'Archives',
	'exercise:exercise' => 'exercise',
	'item:object:exercise' => 'exercises',

	'exercise:title:user_exercises' => '%s\'s exercises',
	'exercise:title:all_exercises' => 'All site exercises',
	'exercise:title:friends' => 'Friends\' exercises',

	'exercise:group' => 'Group exercise',
	'exercise:enableexercise' => 'Enable group exercise',
	'exercise:write' => 'Write a exercise post',

	// Editing
	'exercise:add' => 'Add exercise post',
	'exercise:edit' => 'Edit exercise post',
	'exercise:tags' => 'What?',
	'exercise:tag_description' => 'Write keywords about the content of the exercise, seperated whith a comma (,)',
	'exercise:tag_example' => 'Examples',
	'exercise:tag_tooltip' => 'Shot, Pass, Header, Playable, Crossball..',	
	'exercise:reason' => 'Why?',
	'exercise:reason_description' => 'Write why this exercise is going to be performed, the purpose of it.',	
	'exercise:execution' => 'How?',
	'exercise:execution_description' => 'Write the most important learning instructions for the individual player. 2-3 item recommended.',		
	'exercise:body' => 'Body',
	'exercise:description_description' => 'Write the organisation and step-by-spep instructions for the exercise.',	
	'exercise:save_status' => 'Last saved: ',
	'exercise:never' => 'Never',

	// Statuses
	'exercise:status' => 'Status',
	'exercise:status:draft' => 'Draft',
	'exercise:status:published' => 'Published',
	'exercise:status:unsaved_draft' => 'Unsaved Draft',

	'exercise:revision' => 'Revision',
	'exercise:auto_saved_revision' => 'Auto Saved Revision',

	// messages
	'exercise:message:saved' => 'exercise post saved.',
	'exercise:error:cannot_save' => 'Cannot save exercise post.',
	'exercise:error:cannot_write_to_container' => 'Insufficient access to save exercise to group.',
	'exercise:messages:warning:draft' => 'There is an unsaved draft of this post!',
	'exercise:edit_revision_notice' => '(Old version)',
	'exercise:message:deleted_post' => 'exercise post deleted.',
	'exercise:error:cannot_delete_post' => 'Cannot delete exercise post.',
	'exercise:none' => 'No exercise posts',
	'exercise:error:missing:title' => 'Please enter a exercise title!',
	'exercise:error:missing:description' => 'Please enter the body of your exercise!',
	'exercise:error:cannot_edit_post' => 'This post may not exist or you may not have permissions to edit it.',
	'exercise:error:revision_not_found' => 'Cannot find this revision.',

	// river
	'river:create:object:exercise' => '%s published a exercise post %s',
	'river:comment:object:exercise' => '%s commented on the exercise %s',

	// notifications
	'exercise:newpost' => 'A new exercise post',
	'exercise:notification' =>
'
%s made a new exercise post.

%s
%s

View and comment on the new exercise post:
%s
',

	// widget
	'exercise:widget:description' => 'Display your latest exercise posts',
	'exercise:moreexercises' => 'More exercise posts',
	'exercise:numbertodisplay' => 'Number of exercise posts to display',
	'exercise:noexercises' => 'No exercise posts',
	
	// Football exercise editor
	'exercise:fee' => 'Graphics'
	
);

add_translation('en', $english);
