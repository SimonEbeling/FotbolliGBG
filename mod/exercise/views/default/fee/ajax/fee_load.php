<?php

/**
 * Loades fee data
 */
 
$guid = (int) get_input('guid');

$object = get_entity($guid);

echo $object->fee_data;
