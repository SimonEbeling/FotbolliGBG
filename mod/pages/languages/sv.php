<?php
	/**
	 * Elgg pages plugin language pack
	 * 
	 * @package ElggPages
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$swedish = array(
	
		/**
		 * Menu items and titles
		 */
			
			'pages' => "Sidor",
			'pages:yours' => "Mina sidor",
			'pages:user' => "Sidor start",
			'pages:group' => "Gruppens sidor",
			'pages:all' => "Alla sidor",
			'pages:new' => "Ny sida",
			'pages:groupprofile' => "Gruppens sidor",
			'pages:edit' => "Redigera denna sida",
			'pages:delete' => "Ta bort denna sida",
			'pages:history' => "Sidhistorik",
			'pages:view' => "Visa sida",
			'pages:welcome' => "Redigera välkomstmeddelande",
			'pages:welcomeerror' => "Ett fel inträffade när ditt välkomstmeddelande skulle sparas",
			'pages:welcomeposted' => "Ditt välkomstmeddelande har publicerats",
			'pages:navigation' => "Sidnavigering",
			'pages:via' => "via sidor",
			'item:object:page_top' => 'Huvudsidor',
			'item:object:page' => 'Sidor',
			'item:object:pages_welcome' => 'Sidornas välkomstytor',
			'pages:nogroup' => 'Denna grupp har ännu inga sidor',
			'pages:more' => 'Fler sidor',
			
		/**
		* River
		**/
		
			'pages:river:annotate' => "en kommentar på denna sida",
			'pages:river:created' => "%s skrev",
			'pages:river:updated' => "%s uppdaterade",
			'pages:river:posted' => "%s publicerade",
			'pages:river:create' => "en ny sida kallad",
			'pages:river:update' => "en sida kallad",
			'page:river:annotate' => "en kommentar på denna sida",
			'page_top:river:annotate' => "en kommentar på denna sida",
	
		/**
		 * Form fields
		 */
	
			'pages:title' => 'Sidornas rubrik',
			'pages:description' => 'Din sidas innehåll',
			'pages:tags' => 'Taggar',	
			'pages:access_id' => 'Behörighet',
			'pages:write_access_id' => 'Behörighet att skriva och ändra',
		
		/**
		 * Status and error messages
		 */
			'pages:noaccess' => 'Ingen behörighet till sidan',
			'pages:cantedit' => 'Du kan inte redigera denna sida',
			'pages:saved' => 'Sidorna sparade',
			'pages:notsaved' => 'Sidan kunde inte sparas',
			'pages:notitle' => 'Du måste ange en rubrik för sidan.',
			'pages:delete:success' => 'Din sida är nu borttagen.',
			'pages:delete:failure' => 'Sidan kunde inte tas bort.',
	
		/**
		 * Page
		 */
			'pages:strapline' => 'Senast uppdaterad %s av %s',
	
		/**
		 * History
		 */
			'pages:revision' => 'Revision skapad %s av %s',
			
		/**
		 * Widget
		 **/
		 
			'pages:num' => 'Antal sidor att visa',
			'pages:widget:description' => "Detta är en lista över dina sidor.",
	
		/**
		 * Submenu items
		 */
			'pages:label:view' => "Visa sida",
			'pages:label:edit' => "Redigera sida",
			'pages:label:history' => "Sidhistorik",
	
		/**
		 * Sidebar items
		 */
			'pages:sidebar:this' => "Denna sida",
			'pages:sidebar:children' => "Undersidor",
			'pages:sidebar:parent' => "Överliggande",
	
			'pages:newchild' => "Skapa en undersida",
			'pages:backtoparent' => "Till '%s'",
	);
					
	add_translation("sv",$swedish);
?>