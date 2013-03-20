<?php
	/**
	 * Email user validation plugin language pack.
	 * 
	 * @package ElggUserValidationByEmail
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$swedish = array(
	
		'email:validate:subject' => "%s, var god bekräfta ding e-postadress!",
		'email:validate:body' => "Hej %s,

Var god bekräfta din e-postadress genom att besöka länken nedan:

%s
",
		'email:validate:success:subject' => "E-postadress bekräftad %s!",
		'email:validate:success:body' => "Hej %s,
			
Grattis, du har nu bekräftat din e-postadress.",
	
		
		'email:confirm:success' => "Du har bekräftat din e-postadress!",
		'email:confirm:fail' => "Din e-postadress kunde inte bekräftas.",
	
		'uservalidationbyemail:registerok' => "För att aktivera ditt konto, var god bekräfta din e-postadress genom att följa länken vi just skickade dig."
	
	);
					
	add_translation("sv",$swedish);
?>