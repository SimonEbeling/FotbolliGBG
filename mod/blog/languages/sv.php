<?php
/**
 * Blog Swedish language file.
 *
 */

$swedish = array(
	'blog' => 'Inlägg',
	'blog:blogs' => 'Inlägg',
	'blog:revisions' => 'Revideringar',
	'blog:archives' => 'Arkiv',
	'blog:blog' => 'Inlägg',
	'item:object:blog' => 'Inlägg',

	'blog:title:user_blogs' => '%s\'s inlägg',
	'blog:title:all_blogs' => 'Alla inlägg',
	'blog:title:friends' => 'Vänners inlägg',

	'blog:group' => 'Gruppinlägg',
	'blog:enableblog' => 'Aktivera gruppinlägg',
	'blog:write' => 'Skriv ett inlägg',

	// Editing
	'blog:add' => 'Gör ett inlägg',
	'blog:edit' => 'Redigera inlägg',
	'blog:excerpt' => 'Utdrag',
	'blog:body' => 'Text',
	'blog:save_status' => 'Senast sparad: ',
	'blog:never' => 'Aldirg',

	// Statuses
	'blog:status' => 'Status',
	'blog:status:draft' => 'Utkast',
	'blog:status:published' => 'Publiserad',
	'blog:status:unsaved_draft' => 'Ej sparat utkast',

	'blog:revision' => 'Revidering',
	'blog:auto_saved_revision' => 'Autosparad revidering',

	// messages
	'blog:message:saved' => 'Inlägg sparat.',
	'blog:error:cannot_save' => 'Kunde inte spara inlägg.',
	'blog:error:cannot_write_to_container' => 'Inte tillräckligt med rättigheter för att spara inlägg i grupp.',
	'blog:messages:warning:draft' => 'Det finns ett ej sparat utkast för detta inlägg!',
	'blog:edit_revision_notice' => '(gammal version)',
	'blog:message:deleted_post' => 'Inlägg borttaget.',
	'blog:error:cannot_delete_post' => 'Kan inte ta bort inlägg.',
	'blog:none' => 'Inga inlägg',
	'blog:error:missing:title' => 'Var vänlig ange titel!',
	'blog:error:missing:description' => 'Var vänlig ange texten för inlägget!',
	'blog:error:cannot_edit_post' => 'Detta inlägg finns antingen inte eller så har du inte rättigheter att redigera det.',
	'blog:error:revision_not_found' => 'Kan inte hitta denna revidering.',

	// river
	'river:create:object:blog' => '%s gjorde ett inlägg %s',
	'river:comment:object:blog' => '%s kommenterade på inlägget %s',

	// notifications
	'blog:newpost' => 'Ett nytt inlägg',
	'blog:notification' =>
'
%s gjorde ett nytt inlägg

%s
%s

Se och kommentera det nya inlägget:
%s
',

	// widget
	'blog:widget:description' => 'Visa dina senaste inlägg',
	'blog:moreblogs' => 'Fler inlägg',
	'blog:numbertodisplay' => 'Antal inlägg som ska visas',
	'blog:noblogs' => 'Inga inlägg'
);

add_translation('sv', $swedish);
