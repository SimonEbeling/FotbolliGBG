<?php
/**
 * Register the ElggBlog class for the object/exercise subtype
 */

if (get_subtype_id('object', 'exercise')) {
	update_subtype('object', 'exercise', 'ElggExercise');
} else {
	add_subtype('object', 'exercise', 'ElggExercise');
}
