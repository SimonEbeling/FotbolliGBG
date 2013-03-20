<?php

	$swedish = array(
	
		/**
		 * Menu items and titles
		 */
	
			'messageboard:board' => "Anslagstavla",
			'messageboard:messageboard' => "anslagstavla",
			'messageboard:viewall' => "Visa alla",
			'messageboard:postit' => "Skicka det",
			'messageboard:history' => "historik",
			'messageboard:none' => "Det finns inget på denna anslagstavla ännu",
			'messageboard:num_display' => "Antal meddelanden som ska visas",
			'messageboard:desc' => "Detta är en anslagstavla som du kan placera på din profilsida där andra användare kan kommentera.",
	
			'messageboard:user' => "%ss anslagstavla",
	
			'messageboard:history' => "Historik",
			
         /**
	     * Message board widget river
	     **/
	        
			'messageboard:river:annotate' => "%s har fått en ny kommentar på sin anslagstavla.",
			'messageboard:river:create' => "%s lade till anslagstavla-applikationen.",
			'messageboard:river:update' => "%s uppdaterade sin anslagstavla-applikation.",
			'messageboard:river:added' => "%s skre på",
			'messageboard:river:messageboard' => "anslagstavla",

			
		/**
		 * Status messages
		 */
	
			'messageboard:posted' => "Du har nu skrivit på anslagstavlan.",
			'messageboard:deleted' => "Du har nu tagit bort meddelandet.",
	
		/**
		 * Email messages
		 */
	
			'messageboard:email:subject' => 'Du har en ny kommentar på din anslagstavla!',
			'messageboard:email:body' => "Du har en ny kommentar på din anslagstavla från %s. Det lyder som följer:
			
%s


För att se dina kommentarer på anslagstavlan, gå till:

	%s

För att se %ss profil, gå till:

	%s

Observera att du inte kan besvara detta meddelande.",
	
		/**
		 * Error messages
		 */
	
			'messageboard:blank' => "Ledsen, du behöver skriva ett meddelande för att vi ska kunna spara något.",
			'messageboard:notfound' => "Ledsen, vi kunde inte hitta vad du sökte.",
			'messageboard:notdeleted' => "Ledsen, vi kunde inte ta bort detta meddelande.",
			'messageboard:somethingwentwrong' => "Något gick fel när vi skulle spara ditt meddelande, se till att du verkligen skrev något.",
	     
			'messageboard:failure' => "Ett oväntat fel inträffade när ditt meddelande skulle läggas till. Var god försök igen.",
	
	);
					
	add_translation("sv",$swedish);

?>