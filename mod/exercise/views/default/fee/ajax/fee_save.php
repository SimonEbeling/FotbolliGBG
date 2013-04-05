<?php

/**
 * Saves fee data
 */
 
$fee_json = (string) get_input('fee_json');
$guid = (int) get_input('guid');

$object = get_entity($guid);

$user = elgg_get_logged_in_user_entity ();

if($user->getOwnerGUID() == $object->owner_guid || $user->isAdmin()){
	$object->fee_data = $fee_json;
}



