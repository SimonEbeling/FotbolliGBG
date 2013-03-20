<?php

	$swedish = array(
	
		/**
		 * Menu items and titles
		 */
	
			'messages' => "Meddelanden",
			'messages:back' => "till meddelanden",
			'messages:user' => "Din inkorg",
			'messages:sentMessages' => "Skickade meddelanden",
			'messages:posttitle' => "%ss meddelanden: %s",
			'messages:inbox' => "Inkorg",
			'messages:send' => "Skicka ett meddelande",
			'messages:sent' => "Skickade meddelanden",
			'messages:message' => "Meddelande",
			'messages:title' => "Rubrik",
			'messages:to' => "Till",
			'messages:from' => "Från",
			'messages:fly' => "Skicka iväg",
			'messages:replying' => "Meddelande som svar på",
			'messages:inbox' => "Inkorg",
			'messages:sendmessage' => "Skicka ett meddelande",
			'messages:compose' => "Skicka ett meddelande",
			'messages:sentmessages' => "Skickade meddelanden",
			'messages:recent' => "Senaste meddelanden",
			'messages:original' => "Ursprungligt meddelande",
			'messages:yours' => "Ditt meddelande",
			'messages:answer' => "Besvara",
			'messages:toggle' => 'Av-/Markera alla',
			'messages:markread' => 'Markera som lästa',
			
			'messages:new' => 'Nytt meddelande',
	
			'notification:method:site' => 'Webbplats',
	
			'messages:error' => 'Ett fel inträffande när ditt meddelande skulle sparas. Var god försök igen.',
	
			'item:object:messages' => 'Meddelanden',
	
		/**
		 * Status messages
		 */
	
			'messages:posted' => "Ditt meddelande har nu skickats.",
			'messages:deleted' => "Dina meddelanden är nu borttagna.",
			'messages:markedread' => "Dina meddelanden är nu markerade som lästa.",
	
		/**
		 * Email messages
		 */
	
			'messages:email:subject' => 'Du har ett nytt meddelande!',
			'messages:email:body' => "Du har ett nytt meddelande från %s. Det lyder som följer:
			
%s


För att se dina meddelanden, gå till:

	%s

För att skicka ett meddelande till %s, gå till:

	%s

Observera att du inte kan besvara detta meddelande.",
	
		/**
		 * Error messages
		 */
	
			'messages:blank' => "Ledsen, du behöver skriva något i meddelandets textfält innan vi kan spara något.",
			'messages:notfound' => "Ledsen, vi kunde inte hitta meddelandet du sökte.",
			'messages:notdeleted' => "Ledsen, vi kunde inte ta bort detta meddelande.",
			'messages:nopermission' => "Du har inte rättigheter nog att ändra i det meddelandet.",
			'messages:nomessages' => "Det finns inga meddelanden att visa.",
			'messages:user:nonexist' => "Vi kunde inte hitta mottagaren i användardatabasen.",
	
	);
					
	add_translation("sv",$swedish);

?>