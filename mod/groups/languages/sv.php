<?php
	/**
	 * Elgg groups plugin language pack
	 * 
	 * @package ElggGroups
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$swedish = array(
	
		/**
		 * Menu items and titles
		 */
			
			'groups' => "Grupper",
			'groups:owned' => "Grupper you own",
			'groups:yours' => "Mina grupper",
			'groups:user' => "%ss grupper",
			'groups:all' => "Alla grupper",
			'groups:new' => "Skapa en ny grupp",
			'groups:edit' => "Redigera grupp",
			'groups:delete' => 'Ta bort grupp',
			'groups:membershiprequests' => 'Hantera förfrågningar om att gå med',
	
			'groups:icon' => 'Gruppens ikon (lämna tom för att låta vara oförändrad)',
			'groups:name' => 'Gruppens namn',
			'groups:username' => 'Gruppens kortnamn (visas i länkar, måste bestå av enbart bokstäver och/eller siffror)',
			'groups:description' => 'Beskrivning',
			'groups:briefdescription' => 'Kort beskrivning',
			'groups:interests' => 'Intressen',
			'groups:website' => 'Hemsida',
			'groups:members' => 'Gruppens medlemmar',
			'groups:membership' => "Behörighet för medlemskap i gruppen",
			'groups:access' => "Behörighetsinställningar",
			'groups:owner' => "Ägare",
			'groups:widget:num_display' => 'Antal grupper som ska visas',
			'groups:widget:membership' => 'Gruppmedlemskap',
			'groups:widgets:description' => 'Visa de grupper du är medlem i på din profilsida',
			'groups:noaccess' => 'Ingen behörighet till gruppen',
			'groups:cantedit' => 'Du kan inte redigera denna grupp',
			'groups:saved' => 'Gruppen sparad',
			'groups:featured' => 'Grupper i fokus',
			'groups:makeunfeatured' => 'Ta bort som puff',
			'groups:makefeatured' => 'Puffa för denna grupp',
			'groups:featuredon' => 'Du har puffat för denna grupp.',
			'groups:unfeature' => 'Du har tagit bort denna grupp från puffarna',
			'groups:joinrequest' => 'Ansök om medlemskap',
			'groups:join' => 'Gå med i grupp',
			'groups:leave' => 'Lämna grupp',
			'groups:invite' => 'Bjud in vänner',
			'groups:inviteto' => "Bjud in vänner till '%s'",
			'groups:nofriends' => "Du har inga återstående vänner som inte redan blivit inbjudna till denn grupp.",
			'groups:viagroups' => "via grupper",
			'groups:group' => "grupp",
	
			'groups:notfound' => "Gruppen kunde inte hittas",
			'groups:notfound:details' => "Den sökta gruppen finns antingen inte eller så har du inte tillgång till den",
			
			'groups:requests:none' => 'Det finns inga ansökningar om medlemskap för tillfället.',
	
			'item:object:groupforumtopic' => "Diskussionsforum",
	
			'groupforumtopic:new' => "Nytt inlägg i diskussionen",
			
			'groups:count' => "grupper skapade",
			'groups:open' => "öppen grupp",
			'groups:closed' => "stängd grupp",
			'groups:member' => "medlemmar",
			'groups:searchtag' => "Sök efter grupper med hjälp av taggar",
	
			
			/*
			 * Access
			 */
			'groups:access:private' => 'Stängd - Användare måste bjudas in',
			'groups:access:public' => 'Öppen - Alla användare kan gå med',
			'groups:closedgroup' => 'Denna grupp har stängt medlemskap. För att skicka en begäran om att gå med, använd "Ansök om medlemskap"-länken.',
	
			/*
			   Group tools
			*/
			'groups:enablepages' => 'Aktivera gruppsidor',
			'groups:enableforum' => 'Aktivera gruppdiskussioner',
			'groups:enablefiles' => 'Aktivera gruppfiler',
			'groups:yes' => 'ja',
			'groups:no' => 'nej',
	
			'group:created' => 'Skapad %s med %d inlägg',
			'groups:lastupdated' => 'Senast uppdaterad %s av %s',
			'groups:pages' => 'Gruppsidor',
			'groups:files' => 'Gruppfiler',
	
			/*
			  Group forum strings
			*/
			
			'group:replies' => 'Svar',
			'groups:forum' => 'Gruppdiskussion',
			'groups:addtopic' => 'Lägg till ett diskussionsforum',
			'groups:forumlatest' => 'Senaste diskussionsforumet',
			'groups:latestdiscussion' => 'Senaste diskussionen',
			'groups:newest' => 'Nyast',
			'groups:popular' => 'Populärast',
			'groupspost:success' => 'Din kommentar har nu publicerats',
			'groups:alldiscussion' => 'Senaste diskussionen',
			'groups:edittopic' => 'Redigera diskussionsforum',
			'groups:topicmessage' => 'Ämnets meddelande',
			'groups:topicstatus' => 'Ämnets status',
			'groups:reply' => 'Skriv en kommentar',
			'groups:topic' => 'Ämne',
			'groups:posts' => 'Inlägg',
			'groups:lastperson' => 'Senaste personen',
			'groups:when' => 'När',
			'grouptopic:notcreated' => 'Inga forum har skapats.',
			'groups:topicopen' => 'Öppet',
			'groups:topicclosed' => 'Stängt',
			'groups:topicresolved' => 'Hanterat',
			'grouptopic:created' => 'Ditt diskussionsforum har nu skapats.',
			'groupstopic:deleted' => 'Diskussionsforumet är nu borttaget.',
			'groups:topicsticky' => 'Låt stå',
			'groups:topicisclosed' => 'Detta diskussionsforum är stängt.',
			'groups:topiccloseddesc' => 'Detta diskussionsforum har nu stängts och tar inte emot fler kommentarer.',
			'grouptopic:error' => 'Ditt diskussionsforum kunde inte skapas. Var god försök igen eller kontakta en administratör.',
			'groups:forumpost:edited' => "Du har nu redigerat foruminlägget.",
			'groups:forumpost:error' => "Ett problem inträffade när foruminlägget skulle redigeras.",
			'groups:privategroup' => 'Denna grupp är privat, begäran om medlemskap krävs.',
			'groups:notitle' => 'Grupper måste ha en rubrik',
			'groups:cantjoin' => 'Kan inte gå med i gruppen',
			'groups:cantleave' => 'Kunde inte lämna gruppen',
			'groups:addedtogroup' => 'Användaren har nu lagts till i gruppen',
			'groups:joinrequestnotmade' => 'Ansökan om medlemskap kunde inte göras',
			'groups:joinrequestmade' => 'Ansökan om medlemskap i gruppen är nu gjord',
			'groups:joined' => 'Du har nu gått med i gruppen!',
			'groups:left' => 'Du har nu lämnat gruppen',
			'groups:notowner' => 'Ledsen, du äger inte denna grupp.',
			'groups:alreadymember' => 'Du är redan medlem i denna grupp!',
			'groups:userinvited' => 'Användaren har bjudits in.',
			'groups:usernotinvited' => 'Användaren kunde inte bjudas in.',
			'groups:useralreadyinvited' => 'Användaren har redan bjudits in',
			'groups:updated' => "Senaste kommentaren",
			'groups:invite:subject' => "%s, du har bjudits in till att gå med i %s!",
			'groups:started' => "Startad av",
			'groups:joinrequest:remove:check' => 'Är du säker på att du vill ta bort denna inbjudan?',
			'groups:invite:body' => "Hej %s,

Du har bjudits in till att gå med i gruppen '%s', gå till adressen nedan för att bekräfta:

%s",

			'groups:welcome:subject' => "Välkommen till gruppen %s!",
			'groups:welcome:body' => "Hej %s,

Du är nu medlem i gruppen '%s'! Gå till adressen nedan för att börja diskutera!

%s",
	
			'groups:request:subject' => "%s har ansökt om att gå med i %s",
			'groups:request:body' => "Hej %s,

%s har ansökt om att gå med i gruppen '%s', gå till adressen nedan för att se hennes/hans profilsida:

%s

...eller välj nedan för att godkänna ansökan:

%s",
	
			/*
			  Forum river items
			*/
	
			'groups:river:member' => 'är nu medlem i',
			'groupforum:river:updated' => '%s har uppdaterat',
			'groupforum:river:update' => 'detta diskussionsforum',
			'groupforum:river:created' => '%s har skapat',
			'groupforum:river:create' => 'ett nytt diskussionsforum kallat',
			'groupforum:river:posted' => '%s har skrivit en ny kommentar',
			'groupforum:river:annotate:create' => 'i detta diskussionsforum',
			'groupforum:river:postedtopic' => '%s har startat ett nytt diskussionsforum kallat',
			'groups:river:member' => '%s är nu medlem i',
	
			'groups:nowidgets' => 'Inga appliktaioner har angetts för denna grupp.',
	
	
			'groups:widgets:members:title' => 'Gruppmedlemmar',
			'groups:widgets:members:description' => 'Lista medlemmar i en grupp.',
			'groups:widgets:members:label:displaynum' => 'Lista medlemmarna i en grupp.',
			'groups:widgets:members:label:pleaseedit' => 'Var god ställ in denna applikation.',
	
			'groups:widgets:entities:title' => "Objekt i gruppen",
			'groups:widgets:entities:description' => "Lista objekt i denna grupp",
			'groups:widgets:entities:label:displaynum' => 'Lista en grupps olika objekt.',
			'groups:widgets:entities:label:pleaseedit' => 'Var god ställ in denna applikation.',
		
			'groups:forumtopic:edited' => 'Diskussionsforumet är nu redigerat.',
	
			/**
			 * Action messages
			 */
			'group:deleted' => 'Gruppen och dess innehåll har nu tagits bort',
			'group:notdeleted' => 'Gruppen kunde inte tas bort',
	
			'grouppost:deleted' => 'Gruppens inlägg är nu borttagna',
			'grouppost:notdeleted' => 'Gruppens inlägg kunde inte tas bort',
			'groupstopic:deleted' => 'Diskussionsforumet har tagits bort',
			'groupstopic:notdeleted' => 'Diskussionsforumet inte borttaget',
			'grouptopic:blank' => 'Inga diskussionsforum',
			'groups:deletewarning' => "Är du säker på att du vill ta bort denna grupp? Det går inte att ångra!",
	
			'groups:joinrequestkilled' => 'Ansökan om medlemskap har tagits bort.',
	);
					
	add_translation("sv",$swedish);
?>