<?php
/**
 * The Wire Swedish language file
 */

$swedish = array(

	/**
	 * Menu items and titles
	 */
	'thewire' => "Passning",
	'thewire:everyone' => "Alla passningar",
	'thewire:user' => "%ss passningar",
	'thewire:friends' => "Vänners passningar",
	'thewire:reply' => "Passa tillbaka",
	'thewire:replying' => "Svara %s (@%s) som skrev",
	'thewire:thread' => "Passningstråd",
	'thewire:charleft' => "Tecken kvar",
	'thewire:tags' => "Passningar taggade med '%s'",
	'thewire:noposts' => "Inga passningar ännu",
	'item:object:thewire' => "Passning",
	'thewire:update' => 'Uppdatera',
	'thewire:by' => 'Passningar av %s',

	'thewire:previous' => "Tidigare",
	'thewire:hide' => "Göm",
	'thewire:previous:help' => "Se tidigare passningar",
	'thewire:hide:help' => "Göm tidigare passningar",

	/**
	 * The wire river
	 */
	'river:create:object:thewire' => "%s slog en %s",
	'thewire:wire' => 'passning',

	/**
	 * Wire widget
	 */
	'thewire:widget:desc' => 'Visa dina senaste passningar',
	'thewire:num' => 'Antal passningar som visas',
	'thewire:moreposts' => 'Fler passningar',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Din passning slogs.",
	'thewire:deleted' => "passningen togs bort.",
	'thewire:blank' => "passningen behöver innehålla något för att kunna slås.",
	'thewire:notfound' => "Tyvärr kunde inte den specifika passningen hittas.",
	'thewire:notdeleted' => "Tyvärr så gick det inte att ta bort passningen.",

	/**
	 * Notifications
	 */
	'thewire:notify:subject' => "Inga passningar",
	'thewire:notify:reply' => '%s passade tillbaka till %s:',
	'thewire:notify:post' => '%s slog passningen:',

);

add_translation("sv", $swedish);
