<?php
	/**
	 * Elgg log rotator language pack.
	 * 
	 * @package ElggLogRotate
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$swedish = array(
		'logrotate:period' => 'Hur ofta ska systemloggen arkiveras?',
	
		'logrotate:weekly' => 'En gång i veckan',
		'logrotate:monthly' => 'En gång i månaden',
		'logrotate:yearly' => 'En gång om året',
	
		'logrotate:logrotated' => "Loggen roterades\n",
		'logrotate:lognotrotated' => "Fel i loggrotationen\n",
	);
					
	add_translation("sv",$swedish);
?>