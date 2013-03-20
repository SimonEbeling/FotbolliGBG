<?php
/**
 * exercise Swedish language file.
 *
 */

$swedish = array(
	'exercise' => 'Övning',
	'exercise:exercises' => 'Övningar',
	'exercise:revisions' => 'Revideringar',
	'exercise:archives' => 'Arkiv',
	'exercise:exercise' => 'Övning',
	'item:object:exercise' => 'Övning',

	'exercise:title:user_exercises' => '%s\'s övningar',
	'exercise:title:all_exercises' => 'Alla övningar',
	'exercise:title:friends' => 'Vänners övningar',

	'exercise:group' => 'Gruppövning',
	'exercise:enableexercise' => 'Aktivera gruppövning',
	'exercise:write' => 'Skriv en övning',

	// Editing
	'exercise:add' => 'Skapa en övning',
	'exercise:edit' => 'Redigera övning',
	'exercise:what' => 'Vad?',
	'exercise:what_description' => 'Wad kommer tärnas med denna övning?',		
	'exercise:why' => 'Varför?',
	'exercise:what_description' => 'Försök att skriva en så insäljande text som möjligt till varför denna övning ska göras.',	
	'exercise:how' => 'Hur?',
	'exercise:how_description' => 'Viktigast av allt, vilka inlärningspunkter ska tränaren trycka på. Rekommenderat 2-3 st.',	
	'exercise:body' => 'Praktisera',
	'exercise:execution' => 'Genomförande',	
	'exercise:save_status' => 'Senast sparad: ',
	'exercise:never' => 'Aldirg',

	// Statuses
	'exercise:status' => 'Status',
	'exercise:status:draft' => 'Utkast',
	'exercise:status:published' => 'Publiserad',
	'exercise:status:unsaved_draft' => 'Ej sparat utkast',

	'exercise:revision' => 'Revidering',
	'exercise:auto_saved_revision' => 'Autosparad revidering',

	// messages
	'exercise:message:saved' => 'övning sparad.',
	'exercise:error:cannot_save' => 'Kunde inte spara övning.',
	'exercise:error:cannot_write_to_container' => 'Inte tillräckligt med rättigheter för att spara övning i grupp.',
	'exercise:messages:warning:draft' => 'Det finns ett ej sparat utkast för detta övning!',
	'exercise:edit_revision_notice' => '(gammal version)',
	'exercise:message:deleted_post' => 'övning borttaget.',
	'exercise:error:cannot_delete_post' => 'Kan inte ta bort övning.',
	'exercise:none' => 'Ingen övning',
	'exercise:error:missing:title' => 'Var vänlig ange titel!',
	'exercise:error:missing:description' => 'Var vänlig ange texten för övninget!',
	'exercise:error:cannot_edit_post' => 'Denna övning finns antingen inte eller så har du inte rättigheter att redigera det.',
	'exercise:error:revision_not_found' => 'Kan inte hitta denna revidering.',

	// river
	'river:create:object:exercise' => '%s skapade övningen %s',
	'river:comment:object:exercise' => '%s kommenterade på övningen %s',

	// notifications
	'exercise:newpost' => 'En ny övning',
	'exercise:notification' =>
'
%s gjorde en ny övning

%s
%s

Se och kommentera den nya övningen:
%s
',

	// widget
	'exercise:widget:description' => 'Visa dina senaste övningar',
	'exercise:moreexercises' => 'Fler övningar',
	'exercise:numbertodisplay' => 'Antal övningar som ska visas',
	'exercise:noexercises' => 'Inga övningar'
);

add_translation('sv', $swedish);
