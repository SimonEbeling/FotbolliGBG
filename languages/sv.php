<?php
/**
 * Core Swedish Language
 *
 * @package Elgg 1.8.14
 * @subpackage Core
 *
 * @By: Simon Ebeling
 * @Credit: www.joshi.se
 */

$swedish = array(
/**
 * Sites
 */

	'item:site' => 'Platser',

/**
 * Sessions
 */

	'login' => "Logga in",
	'loginok' => "Du har blivit inloggad.",
	'loginerror' => "Det gick inte att logga in. Se över din inloggningsuppgifter.",
	'login:empty' => "Användarnamn/Email och lösenord krävs.",
	'login:baduser' => "Gick inte att ladda ditt användarkonto",
	'auth:nopams' => "Internt fel. Ingen autentisieringsmetod installerad.",

	'logout' => "Logga ut",
	'logoutok' => "Du har blivit utloggad.",
	'logouterror' => "Gick inte att logga ut dig, vänligen försök igen.",

	'loggedinrequired' => "Du måste vara inloggad för att se denna sidan.",
	'adminrequired' => "Du måste vara administratör för att se denna sidan.",
	'membershiprequired' => "Du måste vara medlem av gruppen för att se denna sidan.",


/**
 * Errors
 */
	'exception:title' => "Fatal Error.",
	'exception:contact_admin' => 'An unrecoverable error has occurred and has been logged. Contact the site administrator with the following information:',

	'actionundefined' => "The requested action (%s) was not defined in the system.",
	'actionnotfound' => "The action file for %s was not found.",
	'actionloggedout' => "Sorry, you cannot perform this action while logged out.",
	'actionunauthorized' => 'You are unauthorized to perform this action',

	'InstallationException:SiteNotInstalled' => 'Unable to handle this request. This site '
		. ' is not configured or the database is down.',
	'InstallationException:MissingLibrary' => 'Could not load %s',
	'InstallationException:CannotLoadSettings' => 'Elgg could not load the settings file. It does not exist or there is a file permissions issue.',

	'SecurityException:Codeblock' => "Denied access to execute privileged code block",
	'DatabaseException:WrongCredentials' => "Elgg couldn't connect to the database using the given credentials. Check the settings file.",
	'DatabaseException:NoConnect' => "Elgg couldn't select the database '%s', please check that the database is created and you have access to it.",
	'SecurityException:FunctionDenied' => "Access to privileged function '%s' is denied.",
	'DatabaseException:DBSetupIssues' => "There were a number of issues: ",
	'DatabaseException:ScriptNotFound' => "Elgg couldn't find the requested database script at %s.",
	'DatabaseException:InvalidQuery' => "Invalid query",
	'DatabaseException:InvalidDBLink' => "Connection to database was lost.",

	'IOException:FailedToLoadGUID' => "Failed to load new %s from GUID:%d",
	'InvalidParameterException:NonElggObject' => "Passing a non-ElggObject to an ElggObject constructor!",
	'InvalidParameterException:UnrecognisedValue' => "Unrecognised value passed to constuctor.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d is not a valid %s",

	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) is a misconfigured plugin. It has been disabled. Please search the Elgg wiki for possible causes (http://docs.elgg.org/wiki/).",
	'PluginException:CannotStart' => '%s (guid: %s) cannot start and has been deactivated.  Reason: %s',
	'PluginException:InvalidID' => "%s is an invalid plugin ID.",
	'PluginException:InvalidPath' => "%s is an invalid plugin path.",
	'PluginException:InvalidManifest' => 'Invalid manifest file for plugin %s',
	'PluginException:InvalidPlugin' => '%s is not a valid plugin.',
	'PluginException:InvalidPlugin:Details' => '%s is not a valid plugin: %s',
	'PluginException:NullInstantiated' => 'ElggPlugin cannot be null instantiated. You must pass a GUID, a plugin ID, or a full path.',

	'ElggPlugin:MissingID' => 'Missing plugin ID (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => 'Missing ElggPluginPackage for plugin ID %s (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'The required file "%s" is missing.',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Its manifest contains an invalid dependency type "%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Its manifest contains an invalid provides type "%s".',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'There is an invalid %s dependency "%s" in plugin %s.  Plugins cannot conflict with or require something they provide!',

	'ElggPlugin:Exception:CannotIncludeFile' => 'Cannot include %s for plugin %s (guid: %s) at %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Cannot open views dir for plugin %s (guid: %s) at %s.',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Cannot register languages for plugin %s (guid: %s) at %s.',
	'ElggPlugin:Exception:NoID' => 'No ID for plugin guid %s!',

	'PluginException:ParserError' => 'Error parsing manifest with API version %s in plugin %s.',
	'PluginException:NoAvailableParser' => 'Cannot find a parser for manifest API version %s in plugin %s.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Missing required '%s' attribute in manifest for plugin %s.",

	'ElggPlugin:Dependencies:Requires' => 'Requires',
	'ElggPlugin:Dependencies:Suggests' => 'Suggests',
	'ElggPlugin:Dependencies:Conflicts' => 'Conflicts',
	'ElggPlugin:Dependencies:Conflicted' => 'Conflicted',
	'ElggPlugin:Dependencies:Provides' => 'Provides',
	'ElggPlugin:Dependencies:Priority' => 'Priority',

	'ElggPlugin:Dependencies:Elgg' => 'Elgg version',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP extension: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP ini setting: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'After %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Before %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s is not installed',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Missing',

	'ElggPlugin:InvalidAndDeactivated' => '%s is an invalid plugin and has been deactivated.',

	'InvalidParameterException:NonElggUser' => "Passing a non-ElggUser to an ElggUser constructor!",

	'InvalidParameterException:NonElggSite' => "Passing a non-ElggSite to an ElggSite constructor!",

	'InvalidParameterException:NonElggGroup' => "Passing a non-ElggGroup to an ElggGroup constructor!",

	'IOException:UnableToSaveNew' => "Unable to save new %s",

	'InvalidParameterException:GUIDNotForExport' => "GUID has not been specified during export, this should never happen.",
	'InvalidParameterException:NonArrayReturnValue' => "Entity serialisation function passed a non-array returnvalue parameter",

	'ConfigurationException:NoCachePath' => "Cache path set to nothing!",
	'IOException:NotDirectory' => "%s is not a directory.",

	'IOException:BaseEntitySaveFailed' => "Unable to save new object's base entity information!",
	'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",
	'InvalidParameterException:EntityTypeNotSet' => "Entity type must be set.",

	'ClassException:ClassnameNotClass' => "%s is not a %s.",
	'ClassNotFoundException:MissingClass' => "Class '%s' was not found, missing plugin?",
	'InstallationException:TypeNotSupported' => "Type %s is not supported. This indicates an error in your installation, most likely caused by an incomplete upgrade.",

	'ImportException:ImportFailed' => "Could not import element %d",
	'ImportException:ProblemSaving' => "There was a problem saving %s",
	'ImportException:NoGUID' => "New entity created but has no GUID, this should not happen.",

	'ImportException:GUIDNotFound' => "Entity '%d' could not be found.",
	'ImportException:ProblemUpdatingMeta' => "There was a problem updating '%s' on entity '%d'",

	'ExportException:NoSuchEntity' => "No such entity GUID:%d",

	'ImportException:NoODDElements' => "No OpenDD elements found in import data, import failed.",
	'ImportException:NotAllImported' => "Not all elements were imported.",

	'InvalidParameterException:UnrecognisedFileMode' => "Unrecognised file mode '%s'",
	'InvalidParameterException:MissingOwner' => "File %s (file guid:%d) (owner guid:%d) is missing an owner!",
	'IOException:CouldNotMake' => "Could not make %s",
	'IOException:MissingFileName' => "You must specify a name before opening a file.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Unable to load filestore class %s for file %u",
	'NotificationException:NoNotificationMethod' => "No notification method specified.",
	'NotificationException:NoHandlerFound' => "No handler found for '%s' or it was not callable.",
	'NotificationException:ErrorNotifyingGuid' => "There was an error while notifying %d",
	'NotificationException:NoEmailAddress' => "Could not get the email address for GUID:%d",
	'NotificationException:MissingParameter' => "Missing a required parameter, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",
	'DatabaseException:UnspecifiedQueryType' => "Unrecognised or unspecified query type.",
	'DatabaseException:NoTablesSpecified' => "No tables specified for query.",
	'DatabaseException:NoACL' => "No access control was provided on query",

	'InvalidParameterException:NoEntityFound' => "No entity found, it either doesn't exist or you don't have access to it.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s could not be found, or you can not access it.",
	'InvalidParameterException:IdNotExistForGUID' => "Sorry, '%s' does not exist for guid:%d",
	'InvalidParameterException:CanNotExportType' => "Sorry, I don't know how to export '%s'",
	'InvalidParameterException:NoDataFound' => "Could not find any data.",
	'InvalidParameterException:DoesNotBelong' => "Does not belong to entity.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Does not belong to entity or refer to entity.",
	'InvalidParameterException:MissingParameter' => "Missing parameter, you need to provide a GUID.",
	'InvalidParameterException:LibraryNotRegistered' => '%s is not a registered library',
	'InvalidParameterException:LibraryNotFound' => 'Could not load the %s library from %s',

	'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.",
	'ConfigurationException:NoSiteID' => "No site ID has been specified.",
	'SecurityException:APIAccessDenied' => "Sorry, API access has been disabled by the administrator.",
	'SecurityException:NoAuthMethods' => "No authentication methods were found that could authenticate this API request.",
	'SecurityException:ForwardFailedToRedirect' => 'Redirect could not be issued due to headers already being sent. Halting execution for security. Search http://docs.elgg.org/ for more information.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Method or function not set in call in expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Parameters array structure is incorrect for call to expose method '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Unrecognised http method %s for api method '%s'",
	'APIException:MissingParameterInMethod' => "Missing parameter %s in method %s",
	'APIException:ParameterNotArray' => "%s does not appear to be an array.",
	'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
	'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
	'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
	'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
	'APIException:APIAuthenticationFailed' => "Method call failed the API Authentication",
	'APIException:UserAuthenticationFailed' => "Method call failed the User Authentication",
	'SecurityException:AuthTokenExpired' => "Authentication token either missing, invalid or expired.",
	'CallException:InvalidCallMethod' => "%s must be called using '%s'",
	'APIException:MethodCallNotImplemented' => "Method call '%s' has not been implemented.",
	'APIException:FunctionDoesNotExist' => "Function for method '%s' is not callable",
	'APIException:AlgorithmNotSupported' => "Algorithm '%s' is not supported or has been disabled.",
	'ConfigurationException:CacheDirNotSet' => "Cache directory 'cache_path' not set.",
	'APIException:NotGetOrPost' => "Request method must be GET or POST",
	'APIException:MissingAPIKey' => "Missing API key",
	'APIException:BadAPIKey' => "Bad API key",
	'APIException:MissingHmac' => "Missing X-Elgg-hmac header",
	'APIException:MissingHmacAlgo' => "Missing X-Elgg-hmac-algo header",
	'APIException:MissingTime' => "Missing X-Elgg-time header",
	'APIException:MissingNonce' => "Missing X-Elgg-nonce header",
	'APIException:TemporalDrift' => "X-Elgg-time is too far in the past or future. Epoch fail.",
	'APIException:NoQueryString' => "No data on the query string",
	'APIException:MissingPOSTHash' => "Missing X-Elgg-posthash header",
	'APIException:MissingPOSTAlgo' => "Missing X-Elgg-posthash_algo header",
	'APIException:MissingContentType' => "Missing content type for post data",
	'SecurityException:InvalidPostHash' => "POST data hash is invalid - Expected %s but got %s.",
	'SecurityException:DupePacket' => "Packet signature already seen.",
	'SecurityException:InvalidAPIKey' => "Invalid or missing API Key.",
	'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC method call '%s' not implemented.",
	'InvalidParameterException:UnexpectedReturnFormat' => "Call to method '%s' returned an unexpected result.",
	'CallException:NotRPCCall' => "Call does not appear to be a valid XML-RPC call",

	'PluginException:NoPluginName' => "The plugin name could not be found",

	'SecurityException:authenticationfailed' => "User could not be authenticated",

	'CronException:unknownperiod' => '%s is not a recognised period.',

	'SecurityException:deletedisablecurrentsite' => 'You can not delete or disable the site you are currently viewing!',

	'RegistrationException:EmptyPassword' => 'The password fields cannot be empty',
	'RegistrationException:PasswordMismatch' => 'Passwords must match',
	'LoginException:BannedUser' => 'You have been banned from this site and cannot log in',
	'LoginException:UsernameFailure' => 'We could not log you in. Please check your username/email and password.',
	'LoginException:PasswordFailure' => 'We could not log you in. Please check your username/email and password.',
	'LoginException:AccountLocked' => 'Your account has been locked for too many log in failures.',
	'LoginException:ChangePasswordFailure' => 'Failed current password check.',
	'LoginException:Unknown' => 'We could not log you in due to an unknown error.',

	'deprecatedfunction' => 'Warning: This code uses the deprecated function \'%s\' and is not compatible with this version of Elgg',

	'pageownerunavailable' => 'Warning: The page owner %d is not accessible!',
	'viewfailure' => 'There was an internal failure in the view %s',
	'changebookmark' => 'Please change your bookmark for this page',
	'noaccess' => 'You need to login to view this content or the content has been removed or you do not have permission to view it.',
	'error:missing_data' => 'There was some data missing in your request',

	'error:default' => 'Oops...something went wrong.',
	'error:404' => 'Sorry. We could not find the page that you requested.',

/**
 * API
 */
	'system.api.list' => "List all available API calls on the system.",
	'auth.gettoken' => "This API call lets a user obtain a user authentication token which can be used for authenticating future API calls. Pass it as the parameter auth_token",

/**
 * User details
 */

	'name' => "Namn",
	'email' => "E-mail",
	'username' => "Användarnamn",
	'loginusername' => "Användarnamn eller e-mail",
	'password' => "Lösenord",
	'passwordagain' => "Lösenord (upprepa för bekräftelse)",
	'admin_option' => "Gör användaren till admin?",

/**
 * Access
 */

	'PRIVATE' => "Privat",
	'LOGGED_IN' => "Inloggade användare",
	'PUBLIC' => "Publik",
	'access:friends:label' => "Vänner",
	'access' => "Åtkomst",
	'access:limited:label' => "Begränsad",
	'access:help' => "Åtkomst-nivå",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Kontrollpanel",
	'dashboard:nowidgets' => "Kontrollpanelen låter dig dig följa all aktivitet på denna webbplats som berör dig.",

	'widgets:add' => 'Lägg till widget',
	'widgets:add:description' => "Klicka på någon av widget-knapparna nedan föra tt lägga till på sidan.",
	'widgets:position:fixed' => '(Bestämd position på sidan)',
	'widget:unavailable' => 'Du har redan lagt till denna widget',
	'widget:numbertodisplay' => 'Antal poster att visa',

	'widget:delete' => 'Ta bort %s',
	'widget:edit' => 'Ordna denna widget',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "Widgeten är sparad.",
	'widgets:save:failure' => "Det gick inte att spara din widget.",
	'widgets:add:success' => "Widgeten är tillagd",
	'widgets:add:failure' => "Det gick inte att lägga till din widget",
	'widgets:move:failure' => "Det gick inte att spara den nya widgetpositionen.",
	'widgets:remove:failure' => "Det gick inte att ta bort widgeten",

/**
 * Groups
 */

	'group' => "Grupp",
	'item:group' => "Grupper",

/**
 * Users
 */

	'user' => "Användare",
	'item:user' => "Användare",

/**
 * Friends
 */

	'friends' => "Vänner",
	'friends:yours' => "Dina vänner",
	'friends:owned' => "%s's vänner",
	'friend:add' => "Lägg till vän",
	'friend:remove' => "Ta bort vän",

	'friends:add:successful' => "Du har lagt till %s som vän.",
	'friends:add:failure' => "Det gick inte att lägga till %s som vän.",

	'friends:remove:successful' => "Du har tagit bort %s från dina vänner.",
	'friends:remove:failure' => "Det gick inte att ta bort %s från dina vänner.",

	'friends:none' => "Inga vänner ännu.",
	'friends:none:you' => "Du har inga vänner ännu.",

	'friends:none:found' => "Inga vänner hittades.",

	'friends:of:none' => "Ingen har lagt till denna användare som vän ännu.",
	'friends:of:none:you' => "Ingen har lagt till dig som vän ännu. Börja publicera inlägg och fyll i din profil så folk hittar dig!",

	'friends:of:owned' => "Personer som har gjort %s till vän",

	'friends:of' => "Vänner till",
	'friends:collections' => "Samlingar med vänner",
	'collections:add' => "Ny samling",
	'friends:collections:add' => "Ny samling med vänner",
	'friends:addfriends' => "Välj vänner",
	'friends:collectionname' => "Samlingsnamn",
	'friends:collectionfriends' => "Vänner i denna samling",
	'friends:collectionedit' => "Redigera denna samling",
	'friends:nocollections' => "Du har inga samlingar ännu.",
	'friends:collectiondeleted' => "Din samling har tagits bort.",
	'friends:collectiondeletefailed' => "Det gick inte att ta bort samlingen. Antingen har du inte tillåtelse eller så uppstod ett annat fel.",
	'friends:collectionadded' => "Din samling skapades",
	'friends:nocollectionname' => "Du behöver namnge din samling innan den kan skapas.",
	'friends:collections:members' => "Samlingsmedlemmar",
	'friends:collections:edit' => "Redigera samling",
	'friends:collections:edited' => "Sparad samling",
	'friends:collection:edit_failed' => 'Gick inte att spara samling.',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => 'Avatar',
	'avatar:create' => 'Skapa din avatar',
	'avatar:edit' => 'Redigera avatar',
	'avatar:preview' => 'förhandsvisning',
	'avatar:upload' => 'Ladda upp en ny avatar',
	'avatar:current' => 'Nuvarande avatar',
	'avatar:remove' => 'Ta bort din avatar och använda standardikonen',
	'avatar:crop:title' => 'Avatar beskärningsverktyg',
	'avatar:upload:instructions' => "Din avatar visas nu på allt ditt innehåll. Du kan ändra den så ofta du vill. (Accepterade filformat: GIF, JPG eller PNG)",
	'avatar:create:instructions' => 'Klicka och dra en box nedan för att beskära din avatar. En förhandsvisning kommer visas till höger. När du är nöjd med förhandsvisningen klicka då på \'Skapa din avatar\'. Denna beskärda version kommer sedan användas som din avatar.',
	'avatar:upload:success' => 'Avatar är uppladdad',
	'avatar:upload:fail' => 'Avatar misslyckades att laddas upp',
	'avatar:resize:fail' => 'Storleksanpassning misslyckades av avatar',
	'avatar:crop:success' => 'Beskärning av avatar lyckades',
	'avatar:crop:fail' => 'Beskärning av avatar misslyckades',
	'avatar:remove:success' => 'Borttagningen av avatar lyckades',
	'avatar:remove:fail' => 'Borttagningen av avatar misslyckades',

	'profile:edit' => 'Redigera profil',
	'profile:aboutme' => "Om mig",
	'profile:description' => "Om mig",
	'profile:briefdescription' => "Kort beskrivning",
	'profile:location' => "Plats",
	'profile:skills' => "Koompetenser",
	'profile:interests' => "Intressen",
	'profile:contactemail' => "E-mail",
	'profile:phone' => "Telefon",
	'profile:mobile' => "Mobiltelefon",
	'profile:website' => "Webbplats",
	'profile:twitter' => "Twitter användarnamn",
	'profile:saved' => "Din profil har sparats.",

	'profile:field:text' => 'Kort text',
	'profile:field:longtext' => 'Lång text',
	'profile:field:tags' => 'Taggar',
	'profile:field:url' => 'Webbadress',
	'profile:field:email' => 'E-mailadress',
	'profile:field:location' => 'Plats',
	'profile:field:date' => 'Födelsedatum',

	'admin:appearance:profile_fields' => 'Redigera profilfält',
	'profile:edit:default' => 'Redigera profilfält',
	'profile:label' => "Profiletikett",
	'profile:type' => "Profiltyp",
	'profile:editdefault:delete:fail' => 'Gick inte att ta bort standard profilfält',
	'profile:editdefault:delete:success' => 'Profilfält togs bort.',
	'profile:defaultprofile:reset' => 'Profilfälten återställdes till systemstandard',
	'profile:resetdefault' => 'Återställ profilfälten till systemstandard',
	'profile:resetdefault:confirm' => 'Är du säker på att du vill ta bort dina profilfält?',
	'profile:explainchangefields' => "Du kan ersätta befintliga rofilfält med dina egna i formuläret nedan. \n\n Ge det nya profilfältet ett namn, t.ex. 'Favoritlag', välj sen sedan vilken profiltyp (ex. text, url, taggar), och klicka på 'Lägg till'-knappen. För att organisera fälten dra då i handtaget intil namnet. För att redigera fältnamnet - Klicka på namnets text föra tt göra det redigeringsbart. \n\n Du kan alltid återställa till standard profilinställning, men du kommer då förlora information som är inlaggt i dina egna profilfält.",
	'profile:editdefault:success' => 'Nytt profilfält är tillagt',
	'profile:editdefault:fail' => 'Standard profil kunde inte sparas',
	'profile:field_too_long' => 'Kan inte spara din profil för att "%s" sektionen är för lång.',
	'profile:noaccess' => "Du har inte behörighet att redigera denna profil.",


/**
 * Feeds
 */
	'feed:rss' => 'RSS-flöde för denna sida',
/**
 * Links
 */
	'link:view' => 'Se länk',
	'link:view:all' => 'Se alla',


/**
 * River
 */
	'river' => "Flöde",
	'river:friend:user:default' => "%s är nu vän med %s",
	'river:update:user:avatar' => '%s har ny avatar',
	'river:update:user:profile' => '%s har uppdaterat sin profil',
	'river:noaccess' => 'Du har inte behörighet att se denna post.',
	'river:posted:generic' => '%s postad',
	'riveritem:single:user' => 'En användare',
	'riveritem:plural:user' => 'Några användare',
	'river:ingroup' => 'i gruppen %s',
	'river:none' => 'Ingen aktivitet',
	'river:update' => 'Uppdatering för %s',
	'river:delete:success' => 'Flödesposten har tagits bort',
	'river:delete:fail' => 'Flödesposten kunde inte tas bort',

	'river:widget:title' => "Aktivitet",
	'river:widget:description' => "Visa senaste aktiviteten",
	'river:widget:type' => "Typ av aktivitet",
	'river:widgets:friends' => 'Vänaktivitet',
	'river:widgets:all' => 'All aktivitet',

/**
 * Notifications
 */
	'notifications:usersettings' => "Notifikationsinställning",
	'notifications:methods' => "Välj dina notifikationsinställningar.",
	'notification:method:email' => 'E-mail',

	'notifications:usersettings:save:ok' => "Dina notifikationsinställningar är sparade.",
	'notifications:usersettings:save:fail' => "Det gick inte att spara dina notifikationsinställningar.",

	'user.notification.get' => 'Återställ notifikationsinställningar för användaren.',
	'user.notification.set' => 'Ställ in notifikationsinställningar för användaren.',
/**
 * Search
 */

	'search' => "Sök",
	'searchtitle' => "Sök: %s",
	'users:searchtitle' => "Söker på användare: %s",
	'groups:searchtitle' => "Söker på grupp: %s",
	'advancedsearchtitle' => "%s med träffar på %s",
	'notfound' => "Inga träffar",
	'next' => "Nästa",
	'previous' => "Tidigare",

	'viewtype:change' => "Ändra listtyp",
	'viewtype:list' => "List vy",
	'viewtype:gallery' => "Gallerie",

	'tag:search:startblurb' => "Poster med taggarna '%s':",

	'user:search:startblurb' => "Användare innehållandes '%s':",
	'user:search:finishblurb' => "För att se, klicka här.",

	'group:search:startblurb' => "Grupper innehållandes '%s':",
	'group:search:finishblurb' => "För att se mer, klicka här.",
	'search:go' => 'Kör',
	'userpicker:only_friends' => 'Bara vänner',

/**
 * Account
 */

	'account' => "Konto",
	'settings' => "Inställningar",
	'tools' => "Verktyg",
	'settings:edit' => 'Redigera inställningar',

	'register' => "Registrera",
	'registerok' => "Du har registrerat %s.",
	'registerbad' => "Det gick inte att registrera på grund av ett oväntat fel.",
	'registerdisabled' => "Registrering är avstängd av systemadministratorn",
	'register:fields' => 'Alla fält är obligatoriska',

	'registration:notemail' => 'Du måste ange en korrekt e-mailadress.',
	'registration:userexists' => 'Användarnamnet använts redan',
	'registration:usernametooshort' => 'Användarnamner måste vara minst %u tecken långt.',
	'registration:usernametoolong' => 'Användarnamnet är för långt. Det får vara max %u tecken.',
	'registration:passwordtooshort' => 'Lösenordet måster vara minst %u tecken långt.',
	'registration:dupeemail' => 'Denna e-mailadress finns redan registrerad, välj en annan.',
	'registration:invalidchars' => 'Tyvärr så innehåller användarnamnet %s vilket är otillåtna tecken. Följande tecken är tillåtna: %s',
	'registration:emailnotvalid' => 'Tyvärr så är den angivna e-mailadress inte tillåten i detta system',
	'registration:passwordnotvalid' => 'Tyvärr så är det angivna lösenordet inte tillåtet i detta system',
	'registration:usernamenotvalid' => 'Tyvärr så är det angivna användarnamnet inte tillåtet i detta system',

	'adduser' => "Lägg till användare",
	'adduser:ok' => "Du har lagt till en ny användare.",
	'adduser:bad' => "Användaren kunde inte skapas.",

	'user:set:name' => "Inställningar för Kontonamn",
	'user:name:label' => "Mitt namn",
	'user:name:success' => "Du har ändrat ditt namn.",
	'user:name:fail' => "Det gick inte att ändra ditt namn. Söver så att namnet inte är för långt och försök igen.",

	'user:set:password' => "Lösenord för kontot",
	'user:current_password:label' => 'Nuvarande lösenord',
	'user:password:label' => "Nytt lösenord",
	'user:password2:label' => "Upprepa nytt lösenord",
	'user:password:success' => "lösenord ändrat",
	'user:password:fail' => "Det gick inte att ändra lösenord.",
	'user:password:fail:notsame' => "lösenorden överenstämmer inte!",
	'user:password:fail:tooshort' => "lösenordet är för kort!",
	'user:password:fail:incorrect_current_password' => 'Det angivna lösenordet är inkorrekt.',
	'user:resetpassword:unknown_user' => 'Felaktig användare.',
	'user:resetpassword:reset_password_confirm' => 'Vid återställning av lösenord kommer ett nytt lösenord skicka till din angivna e-mailadress.',

	'user:set:language' => "Språkinställning",
	'user:language:label' => "Ditt språk",
	'user:language:success' => "Dina språkinställningar har uppdaterats.",
	'user:language:fail' => "Dina språkinställningar kunde inte sparas.",

	'user:username:notfound' => 'Användare %s kunde inte hittas.',

	'user:password:lost' => 'Borttappat lösenord',
	'user:password:resetreq:success' => 'Ett nytt löseonrd är beställt, e-mail har skickats',
	'user:password:resetreq:fail' => 'Gick inte att beställa nytt lösenord',

	'user:password:text' => 'För att beställa nytt löseonrd, ange ditt användarnamn eller e-mailadress nedan och klicka på beställ.',

	'user:persistent' => 'Kom ihåg mig',

	'walled_garden:welcome' => 'Välkommen till',

/**
 * Administration
 */
	'menu:page:header:administer' => 'Administrera',
	'menu:page:header:configure' => 'Konfigurera',
	'menu:page:header:develop' => 'Utveckla',
	'menu:page:header:default' => 'Övrigt',

	'admin:view_site' => 'Se webbplats',
	'admin:loggedin' => 'Inloggad som %s',
	'admin:menu' => 'Meny',

	'admin:configuration:success' => "Dina inställningar har sparats.",
	'admin:configuration:fail' => "Dina inställningar kunde inte sparas.",
	'admin:configuration:dataroot:relative_path' => 'Kunde inte ange "%s" som datarot på grund av att det är en absolut sökväg.',

	'admin:unknown_section' => 'Otillåten admin avdelning.',

	'admin' => "Administration",
	'admin:description' => "Administrationspanelen tillåter dig att kontrollera hela systemet, från användarhantering till hur plugins ska bete sig. Välj ett alternativ nedan för att starta.",

	'admin:statistics' => "Statistik",
	'admin:statistics:overview' => 'Översikt',
	'admin:statistics:server' => 'Serverinfo',

	'admin:appearance' => 'Utseende',
	'admin:administer_utilities' => 'Hjälpprogram',
	'admin:develop_utilities' => 'Hjälpprogram',

	'admin:users' => "Användare",
	'admin:users:online' => 'Nu Online',
	'admin:users:newest' => 'Nyaste',
	'admin:users:admins' => 'Administratorer',
	'admin:users:add' => 'Lägg till nya användare',
	'admin:users:description' => "Denna administrationspanel tillåter dig att kontrollera webbplatsen. Välj ett alternativ nedan för att starta.",
	'admin:users:adduser:label' => "Klicka här för att lägga till en ny användare...",
	'admin:users:opt:linktext' => "Konfigurera användare...",
	'admin:users:opt:description' => "Konfigurera användare och kontoinformation. ",
	'admin:users:find' => 'Hitta',

	'admin:settings' => 'Inställningar',
	'admin:settings:basic' => 'Grundläggande inställningar',
	'admin:settings:advanced' => 'Avancerade inställningar',
	'admin:site:description' => "Denna administrationspanel tillåter dig att kontrollera globala inställningar för din webbplats. Välj ett alternativ nedan för att starta.",
	'admin:site:opt:linktext' => "Konfigurera webbplatsen...",
	'admin:site:access:warning' => "Ändring av åtkomstinställningarna kommer bara påverka framtida innehåll.",

	'admin:dashboard' => 'Kontrollpanel',
	'admin:widget:online_users' => 'Användare Online',
	'admin:widget:online_users:help' => 'Listar nuvarande användare på denna webbplats',
	'admin:widget:new_users' => 'Nya användare',
	'admin:widget:new_users:help' => 'Listar de nyaste användarna',
	'admin:widget:content_stats' => 'Innehållsstatistik',
	'admin:widget:content_stats:help' => 'Håll koll på innehålla skapat av dina användare',
	'widget:content_stats:type' => 'Innehållstyp',
	'widget:content_stats:number' => 'Antal',

	'admin:widget:admin_welcome' => 'Välkommen',
	'admin:widget:admin_welcome:help' => "En kort beskrivning av Ellgs administrationsavdelning",
	'admin:widget:admin_welcome:intro' =>
'Välkommen till Elgg! Du ser nu administrationens kontrollpanel. Den ger dig möjlighet att följa vad som händer på webbplatsen.',

	'admin:widget:admin_welcome:admin_overview' =>
"Navigationen för administrationsavdelningen görs via menyn till höger. Den är organiserad i"
. " tre avdelningar:
	<dl>
		<dt>Administrera</dt><dd>Dagliga uppgifter som övervakande av innehåll, vem som är online och statistik.</dd>
		<dt>Konfigurera</dt><dd>Enstaka uppgifter som webbplatsens namn och aktivering av plugins.</dd>
		<dt>Utveckla</dt><dd>För utvecklare som skapar plugins eller teman. (Kräver ett developer-plugin.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Se till att kolla upp länkarna i botten av sidan och tack för att du använder Elgg!',

	'admin:widget:control_panel' => 'Hantering',
	'admin:widget:control_panel:help' => "Ger en enkel åtkomst till vanliga kontroller",

	'admin:cache:flush' => 'Spola chachen',
	'admin:cache:flushed' => "Webbplatsens chache har spolats",

	'admin:footer:faq' => 'Administration FAQ',
	'admin:footer:manual' => 'Administrationsmanual',
	'admin:footer:community_forums' => 'Elgg Community Forum',
	'admin:footer:blog' => 'Elgg Blog',

	'admin:plugins:category:all' => 'Alla plugins',
	'admin:plugins:category:active' => 'Aktiverade plugins',
	'admin:plugins:category:inactive' => 'Inaktiverade plugins',
	'admin:plugins:category:admin' => 'Admin',
	'admin:plugins:category:bundled' => 'Bundled',
	'admin:plugins:category:nonbundled' => 'icke-bundled',
	'admin:plugins:category:content' => 'Innehåll',
	'admin:plugins:category:development' => 'Utveckling',
	'admin:plugins:category:enhancement' => 'Förbättringar',
	'admin:plugins:category:api' => 'Service/API',
	'admin:plugins:category:communication' => 'Kommunikation',
	'admin:plugins:category:security' => 'Säkerhet och Spam',
	'admin:plugins:category:social' => 'Socialt',
	'admin:plugins:category:multimedia' => 'Multimedia',
	'admin:plugins:category:theme' => 'Teman',
	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Hjälpprogram',

	'admin:plugins:sort:priority' => 'Prioritet',
	'admin:plugins:sort:alpha' => 'Alfabetisk',
	'admin:plugins:sort:date' => 'Nyaste',

	'admin:plugins:markdown:unknown_plugin' => 'Okänd plugin.',
	'admin:plugins:markdown:unknown_file' => 'Okänd file.',


	'admin:notices:could_not_delete' => 'Kunde inte ta bort notis.',
	'item:object:admin_notice' => 'Admin notis',

	'admin:options' => 'Admin inställningar',


/**
 * Plugins
 */
	'plugins:disabled' => 'Plugins blir inte aktiverade för att en fil vid namn "disabled" finns i mod-katalogen.',
	'plugins:settings:save:ok' => "Inställningar för %s pluginet har sparats.",
	'plugins:settings:save:fail' => "Det uppstod ett problem när %s pluginet skulle sparas.",
	'plugins:usersettings:save:ok' => "Användarinställningar för %s pluginet har sparats.",
	'plugins:usersettings:save:fail' => "Det uppstod ett problem när användarinställningarna för %s pluginet skulle sparas.",
	'item:object:plugin' => 'Plugins',

	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Aktivera alla',
	'admin:plugins:deactivate_all' => 'Avaktivera alla',
	'admin:plugins:activate' => 'Aktivera',
	'admin:plugins:deactivate' => 'Avaktivera',
	'admin:plugins:description' => "Denna admin panel tillåter dig att kontrollera och konfigurera verktyg som är installerade på din webbplats.",
	'admin:plugins:opt:linktext' => "Konfigureringsverktyg...",
	'admin:plugins:opt:description' => "Konfigurera verktygen som är installerade på webbplatsen. ",
	'admin:plugins:label:author' => "Författare",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Kategorier',
	'admin:plugins:label:licence' => "Licenser",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:repository' => "Kod",
	'admin:plugins:label:bugtracker' => "Rapportera problem",
	'admin:plugins:label:donate' => "Donera",
	'admin:plugins:label:moreinfo' => 'mer info',
	'admin:plugins:label:version' => 'Version',
	'admin:plugins:label:location' => 'Plats',
	'admin:plugins:label:dependencies' => 'Beroendeförhållande',

	'admin:plugins:warning:elgg_version_unknown' => 'Detta plugin har inte anget någon kompabilitetsversion med Elgg. Det kommer toligtvis inte fungera!',
	'admin:plugins:warning:unmet_dependencies' => 'Detta plugin bemöter inte beroendeförhållandena och kan inte aktiveras. Se över beroendeförhållandena under mer info.',
	'admin:plugins:warning:invalid' => 'Detta plugin är skadat: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Se <a href="http://docs.elgg.org/Invalid_Plugin">Elgg documentationen</a> för felsökning.',
	'admin:plugins:cannot_activate' => 'Kan inte aktivera',

	'admin:plugins:set_priority:yes' => "Omorganiserade %s.",
	'admin:plugins:set_priority:no' => "Kunde inte omorganisera %s.",
	'admin:plugins:set_priority:no_with_msg' => "Kunde inte omorganisera %s. Fel: %s",
	'admin:plugins:deactivate:yes' => "Avaktiverade %s.",
	'admin:plugins:deactivate:no' => "Kunde inte avaktivera %s.",
	'admin:plugins:deactivate:no_with_msg' => "Kunde inte avaktivera %s. Fel: %s",
	'admin:plugins:activate:yes' => "Aktiverade %s.",
	'admin:plugins:activate:no' => "Kunde inte aktivera %s.",
	'admin:plugins:activate:no_with_msg' => "Kunde inte aktivera %s. Fel: %s",
	'admin:plugins:categories:all' => 'Alla kategorier',
	'admin:plugins:plugin_website' => 'Pluginwebbplats',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Version %s',
	'admin:plugin_settings' => 'Plugininställningar',
	'admin:plugins:warning:unmet_dependencies_active' => 'Detta plugin är aktiverat men bemöter inte beroendeförhållandena. Det kan uppstå problem. Se "mer info" nedan för detaljer.',

	'admin:plugins:dependencies:type' => 'Typ',
	'admin:plugins:dependencies:name' => 'Namn',
	'admin:plugins:dependencies:expected_value' => 'Förväntad värde',
	'admin:plugins:dependencies:local_value' => 'Faktiskt värde',
	'admin:plugins:dependencies:comment' => 'Kommentar',

	'admin:statistics:description' => "Detta är en överblick för statistiken på din webbplats. Om du behöver mer detaljerad statistik, en profisionell administration-feature finns tillgänglig.",
	'admin:statistics:opt:description' => "Se statistisk information om dina användare och objekt på din webbplats.",
	'admin:statistics:opt:linktext' => "Se statistik...",
	'admin:statistics:label:basic' => "Grundläggande statistik",
	'admin:statistics:label:numentities' => "Entities på webbplatsen",
	'admin:statistics:label:numusers' => "Antal användare",
	'admin:statistics:label:numonline' => "Antal användare online",
	'admin:statistics:label:onlineusers' => "Användare som är online nu",
	'admin:statistics:label:admins' => "Adminstartörer",
	'admin:statistics:label:version' => "Elgg version",
	'admin:statistics:label:version:release' => "Utgåva",
	'admin:statistics:label:version:version' => "Version",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Webbserver',
	'admin:server:label:server' => 'Server',
	'admin:server:label:log_location' => 'Log plats',
	'admin:server:label:php_version' => 'PHP version',
	'admin:server:label:php_ini' => 'PHP ini fil plats',
	'admin:server:label:php_log' => 'PHP Log',
	'admin:server:label:mem_avail' => 'Minne tillgängligt',
	'admin:server:label:mem_used' => 'Minne använt',
	'admin:server:error_log' => "Webbserver fel log",
	'admin:server:label:post_max_size' => 'POST maxstorlek',
	'admin:server:label:upload_max_filesize' => 'Uppladdning maxstorlek',
	'admin:server:warning:post_max_too_small' => '(Notering: post_max_size måste vara större än detta värde för uppladdning ska vara möjligt på webbplatsen)',

	'admin:user:label:search' => "Hitta användare:",
	'admin:user:label:searchbutton' => "Sök",

	'admin:user:ban:no' => "Kan inte blockera användare",
	'admin:user:ban:yes' => "Användare är blockerad.",
	'admin:user:self:ban:no' => "Du kan inte blockera dig själv",
	'admin:user:unban:no' => "Kan inte häva blockering på användare",
	'admin:user:unban:yes' => "Hävd blockering på användare",
	'admin:user:delete:no' => "Kan inte ta bort användare",
	'admin:user:delete:yes' => "Användare %s har tagits bort",
	'admin:user:self:delete:no' => "Du kan inte ta bort dig själv",

	'admin:user:resetpassword:yes' => "Lösenord återställt, användare meddelad.",
	'admin:user:resetpassword:no' => "Lösenord kunde inte återställas.",

	'admin:user:makeadmin:yes' => "Användaren är nu administratör.",
	'admin:user:makeadmin:no' => "Det gick inte att göra användaren till administratör.",

	'admin:user:removeadmin:yes' => "Användaren är inte längre administratör.",
	'admin:user:removeadmin:no' => "Det gick inte att ta bort adimistratörsrättigheterna för denna användaren.",
	'admin:user:self:removeadmin:no' => "Du kan inte ta bort dina egna administratörsrättigheter.",

	'admin:appearance:menu_items' => 'Menypost',
	'admin:menu_items:configure' => 'Konfigurera huvudmenyposter',
	'admin:menu_items:description' => 'Välj vilken menypost du vill ska visas. Oanvända poster kommer läggas till under "Mer" i slutet på listan.',
	'admin:menu_items:hide_toolbar_entries' => 'Ta bort länk från verktygsfältet?',
	'admin:menu_items:saved' => 'Menypost sparad.',
	'admin:add_menu_item' => 'Lägg till en egen menypost',
	'admin:add_menu_item:description' => 'Fyll i namn och url till din egna menypost i navigationsmenyn.',

	'admin:appearance:default_widgets' => 'Standard widgets',
	'admin:default_widgets:unknown_type' => 'Okänd widgettyp',
	'admin:default_widgets:instructions' => 'Lägg till, ta bort, positionera och konfigurera standardwidgets för den valda widgetsidan.'
		. '  Detta kommer bara påverka nya användare på webbplatsen.',

/**
 * User settings
 */
	'usersettings:description' => "Användarpanel tillåter dig att kontrollera dina personliga inställningar. Välj ett alternativ nedan för att starta.",

	'usersettings:statistics' => "Din statistik",
	'usersettings:statistics:opt:description' => "Se statistik för användare och objekt på din webbplats",
	'usersettings:statistics:opt:linktext' => "Konto statistik",

	'usersettings:user' => "Dina inställningar",
	'usersettings:user:opt:description' => "Detta tillåter dig att kontrollera användarinställningar.",
	'usersettings:user:opt:linktext' => "Ändra dina inställningar",

	'usersettings:plugins' => "Verktyg",
	'usersettings:plugins:opt:description' => "Konfigurera inställningarna för dina aktiva verktyg.",
	'usersettings:plugins:opt:linktext' => "Konfigurera dina verktyg",

	'usersettings:plugins:description' => "Denna panel tillåter dig att kontrollera och konfigurera personliga inställningar för de verktyg som är installerade av administratören.",
	'usersettings:statistics:label:numentities' => "Ditt innehåll",

	'usersettings:statistics:yourdetails' => "Dina detaljer",
	'usersettings:statistics:label:name' => "Hela namet",
	'usersettings:statistics:label:email' => "E-mail",
	'usersettings:statistics:label:membersince' => "Medlem sen",
	'usersettings:statistics:label:lastlogin' => "Senast inloggad",

/**
 * Activity river
 */
	'river:all' => 'All aktivitet',
	'river:mine' => 'Min aktivitet',
	'river:friends' => 'Vänners aktivitet',
	'river:select' => 'Visa %s',
	'river:comments:more' => '+%u mer',
	'river:generic_comment' => 'Kommenterade på %s %s',

	'friends:widget:description' => "Visa några av mina vänner.",
	'friends:num_display' => "Antal vänner som ska visas",
	'friends:icon_size' => "Ikonstorlek",
	'friends:tiny' => "pytteliten",
	'friends:small' => "liten",

/**
 * Generic action words
 */

	'save' => "Spara",
	'reset' => 'Återställ',
	'publish' => "Publisera",
	'cancel' => "Avbryt",
	'saving' => "Sprara ...",
	'update' => "Uppdatera",
	'preview' => "Förhansvisning",
	'edit' => "Redigera",
	'delete' => "Ta bort",
	'accept' => "Acceptera",
	'load' => "Ladda",
	'upload' => "Ladda upp",
	'ban' => "Blockera",
	'unban' => "Häv block",
	'banned' => "Blockerad",
	'enable' => "Aktivera",
	'disable' => "Avaktivera",
	'request' => "Begär",
	'complete' => "Komplett",
	'open' => 'Öppen',
	'close' => 'Stängd',
	'reply' => "Svara",
	'more' => 'Mer',
	'comments' => 'Kommentarer',
	'import' => 'Importera',
	'export' => 'Exportera',
	'untitled' => 'Utan titel',
	'help' => 'Hjälp',
	'send' => 'Skicka',
	'post' => 'Skicka',
	'submit' => 'Skicka',
	'comment' => 'Kommentera',
	'upgrade' => 'Uppgradera',
	'sort' => 'Sortera',
	'filter' => 'Filtrera',
	'new' => 'Ny',
	'add' => 'Lägg till',
	'create' => 'Skapa',
	'remove' => 'Ta bort',
	'revert' => 'Återgå',

	'site' => 'Webbplats',
	'activity' => 'Aktivitet',
	'members' => 'Medlemmar',

	'up' => 'Upp',
	'down' => 'Ner',
	'top' => 'Topp',
	'bottom' => 'Botten',
	'back' => 'Bakåt',

	'invite' => "Bjud in",

	'resetpassword' => "Återställ lösenord",
	'makeadmin' => "Gör till administratör",
	'removeadmin' => "Ta bort som administratör",

	'option:yes' => "Ja",
	'option:no' => "Nej",

	'unknown' => 'Okänd',

	'active' => 'Aktiv',
	'total' => 'Total',

	'learnmore' => "Klicka här för att se mer.",

	'content' => "innehåll",
	'content:latest' => 'Senaste aktivitet',
	'content:latest:blurb' => 'Alternativt, klicka här för att se det senaste innehållet på hela webbplatsen.',

	'link:text' => 'Se länk',
/**
 * Generic questions
 */

	'question:areyousure' => 'Är du säker?',

/**
 * Generic data words
 */

	'title' => "Titel",
	'description' => "Beskrivning",
	'tags' => "Taggar",
	'spotlight' => "hederplats",
	'all' => "Alla",
	'mine' => "Mina",

	'by' => 'av',
	'none' => 'ingen',

	'annotations' => "Not",
	'relationships' => "Relation",
	'metadata' => "Metadata",
	'tagcloud' => "Taggmoln",
	'tagcloud:allsitetags' => "Alla taggar",

	'on' => 'På',
	'off' => 'Av',

/**
 * Entity actions
 */
	'edit:this' => 'Redigera detta',
	'delete:this' => 'Ta bort detta',
	'comment:this' => 'Kommentera detta',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Är du säker på att du vill ta bort denna post?",
	'deleteconfirm:plural' => "Är du säker på att du vill ta bort dessa poster?",
	'fileexists' => "En fil har redan laddats upp. För att ersätta den, välj den nedan:",

/**
 * User add
 */

	'useradd:subject' => 'Användarkonto skapat',
	'useradd:body' => '
%s,

Ett användarkonto har skapats för dig på %s. För att logga in, gå till:

%s

Och logga in med dessa uppgifter:

Användarnamn: %s
Lösenord: %s

När du väl loggat in ändra då ditt lösenord till något eget.
',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "Klicka för att avfärda",


/**
 * Import / export
 */
	'importsuccess' => "Importering av data lyckades",
	'importfail' => "OpenDD importering av data misslyckades.",

/**
 * Time
 */

	'friendlytime:justnow' => "just nu",
	'friendlytime:minutes' => "%s minuter sen",
	'friendlytime:minutes:singular' => "en minut sen",
	'friendlytime:hours' => "%s timmar sen",
	'friendlytime:hours:singular' => "en timme sen",
	'friendlytime:days' => "%s dagar sen",
	'friendlytime:days:singular' => "igår",
	'friendlytime:date_format' => 'j/n Y @ G:i',

	'date:month:01' => 'Januari %s',
	'date:month:02' => 'Februari %s',
	'date:month:03' => 'Mars %s',
	'date:month:04' => 'April %s',
	'date:month:05' => 'Maj %s',
	'date:month:06' => 'Juni %s',
	'date:month:07' => 'Juli %s',
	'date:month:08' => 'Augusti %s',
	'date:month:09' => 'September %s',
	'date:month:10' => 'Oktober %s',
	'date:month:11' => 'November %s',
	'date:month:12' => 'December %s',


/**
 * System settings
 */

	'installation:sitename' => "Namnet på din webbplats:",
	'installation:sitedescription' => "Kort beskrivning av din webbplats (frivillig):",
	'installation:wwwroot' => "Webbplats URL:",
	'installation:path' => "Hela sökvägen för Elgg installationen:",
	'installation:dataroot' => "Hela sökvägen för data-katalogen:",
	'installation:dataroot:warning' => "Du måste skapa denna katalog manuellt. Den ska vara utanför din Elgg installation.",
	'installation:sitepermissions' => "Standard för åtkomst:",
	'installation:language' => "Standardspråk för din webbplats:",
	'installation:debug' => "Debug-läge ger extra information vid olika typer av fel, som kan var till hjälp vid felsökning. Men det drar ner prestandan och ska bara användas vid problem:",
	'installation:debug:none' => 'Stäng av debug-läge (rekommenderas)',
	'installation:debug:error' => 'Visa bara kritiska fel',
	'installation:debug:warning' => 'Visa fel och varningar',
	'installation:debug:notice' => 'Logga alla fel, varningar och notiser',

	// Walled Garden support
	'installation:registration:description' => 'Användarregistrering är aktiverad som standard. Avaktivera denna om du inte vill att användare ska kunna registrera sig själva.',
	'installation:registration:label' => 'Tillåt nya användare att registrera sig',
	'installation:walled_garden:description' => 'Aktivera webbplatsen att köras som ett privat nätverka. Detta ger bara inloggade användare åtkomst till sidorna på webbplatsen om inte de är markerad som publika.',
	'installation:walled_garden:label' => 'Begränsa sidor bara till inloggade användare',

	'installation:httpslogin' => "Aktviera detta för så att anävndare loggar in via HTTPS. Det krävs att du har https aktiverat på din server för att detta ska fungera.",
	'installation:httpslogin:label' => "Aktivera HTTPS-inloggning",
	'installation:view' => "Ange vilke vy som ska användas som standard för din webbplats eller lämna tom för standardvy (Om du inte vet, lämna tom):",

	'installation:siteemail' => "Webbplats e-mailadress (Används när systemmeddelanden skickas):",

	'installation:disableapi' => "Elgg tillhandahåller ett API för att bygga webb services så att externa applikationer kan interagera med din webbplats.",
	'installation:disableapi:label' => "Aktivera Elgg webb service API",

	'installation:allow_user_default_access:description' => "Om vald, då kan individuella användare välja att ställa in deras egna åtkomstnivå som då överskriver systemets standard åtkomstnivå.",
	'installation:allow_user_default_access:label' => "Till användare att välja åtkomstnivå",

	'installation:simplecache:description' => "Simple cache ökar prestanda genom att cacha statiskt innehåll inklusive vissa CSS och JavaScript-filer. Normalt vill du ha den på.",
	'installation:simplecache:label' => "Använd simple cache (rekommenderas)",

	'installation:systemcache:description' => "System cache minskar laddningstiden för Elgg motorn genom cachning av data till filer.",
	'installation:systemcache:label' => "Använd system cache (rekommenderas)",

	'upgrading' => 'Uppgraderar...',
	'upgrade:db' => 'Din databas har uppgraderats.',
	'upgrade:core' => 'Din Elgg installation är uppgraderad.',
	'upgrade:unlock' => 'Lås upp uppgradering',
	'upgrade:unlock:confirm' => "Databasen är låst för en annan uppgradering. Att köra konkurerande uppgraderingar är farligt. Du ska bara fortsätta om du vet att en anna uppgradering INTE körs. Lås upp?",
	'upgrade:locked' => "Kan inte uppgradera. En annan uppgradering körs. För att ta bort uppgraderingslåset gå till adminpanelen.",
	'upgrade:unlock:success' => "Uppgradering låstes upp.",
	'upgrade:unable_to_upgrade' => 'Avaktiverea för att uppgradera.',
	'upgrade:unable_to_upgrade_info' =>
		'Denna installation kan inte uppgraderas eftersom äldre vyer
		upptäcktes i Elgg kärnan. Dessa vyer har föråldrat och måste
		bort för att Elgg ska kunna fungera fullständigt. Om du inte har gjort ändringar i Elgg kärna, kan du
		bara ta bort vyerna från katalogen och ersätta den med nyare versioner från det senaste Elgg-paketet som finns här <a href="http://elgg.org">elgg.org</a>.<br /><br />

		Om du behvöer mera information gå in på <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Elgg uppgraderingsdokumentation</a>. Om du behöver assistans, gör då ett inlägg på 
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',

	'update:twitter_api:deactivated' => 'Twitter API (tidigare Twitter Service) blev avaktiverat under uppgraderingen. Vänligen aktivera det manuellt om nödvändigt.',
	'update:oauth_api:deactivated' => 'OAuth API (tidigare OAuth Lib) blev avaktiverat under uppgraderingen. Vänligen aktivera det manuellt om nödvändigt.',

	'deprecated:function' => '%s() var föråldrat enligt %s()',

/**
 * Welcome
 */

	'welcome' => "Välkommen",
	'welcome:user' => 'Välkommen %s',

/**
 * Emails
 */
	'email:settings' => "E-mail inställningar",
	'email:address:label' => "Din e-mailadress",

	'email:save:success' => "Ny e-mailadress sparad.",
	'email:save:fail' => "Din nya e-mailadress kunde inte sparas.",

	'friend:newfriend:subject' => "%s har lagt till dig som vän!",
	'friend:newfriend:body' => "%s har lagt till dig som vän!

För att se dennes profil, klicka här:

%s

Du kan inte svara på detta mail.",



	'email:resetpassword:subject' => "Lösenord återställt!",
	'email:resetpassword:body' => "Hej %s,

Ditt lösenord har återställts till: %s",


	'email:resetreq:subject' => "Begäran om nytt lösenord.",
	'email:resetreq:body' => "Hej %s,

Någon (från denna IP adress %s) har begärt ett nytt lösenord för dennes konto.

Om du begärde detta, klicka då på länken nedan. Annars ignorera detta mail.

%s
",

/**
 * user default access
 */

	'default_access:settings' => "Din åtkomstnivå",
	'default_access:label' => "Standardåtkomst",
	'user:default_access:success' => "Dina nya åtkomstnivå är sparad",
	'user:default_access:failure' => " Din nya åtkomstnivå kunde inte sparas.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Inputdata saknas",

/**
 * Comments
 */

	'comments:count' => "%s kommentarer",

	'river:comment:object:default' => '%s kommenterade på %s',

	'generic_comments:add' => "Skriv en kommentar",
	'generic_comments:post' => "skicka kommentar",
	'generic_comments:text' => "Kommentera",
	'generic_comments:latest' => "Senaste kommentarer",
	'generic_comment:posted' => "Din kommentar har postats.",
	'generic_comment:deleted' => "Kommentaren har tagits bort.",
	'generic_comment:blank' => "Du behöver skriva något för att kunna posta kommentaren.",
	'generic_comment:notfound' => "Tyvärr kunde inte den specifika posten hittas.",
	'generic_comment:notdeleted' => "Tyvärr kunde inte kommentarens tas bort.",
	'generic_comment:failure' => "Ett oväntat fel uppstod när kommentaren skulle postas.",
	'generic_comment:none' => 'Inga kommentarer',
	'generic_comment:title' => 'Kommentar av %s',
	'generic_comment:on' => '%s på %s',

	'generic_comment:email:subject' => 'Du har en ny kommentar!',
	'generic_comment:email:body' => "Du har en ny kommentar på \"%s\" från %s. Den säger:


%s


För att svara eller se, klicka här:

%s

För att sew %s's profil, klicka här:

%s

Du kan inte svara på detta mail.",

/**
 * Entities
 */
	'byline' => 'Av %s',
	'entity:default:strapline' => 'Skapat %s av %s',
	'entity:default:missingsupport:popup' => 'Denna entity kan inte visas korrekt. Det kan bero på att den kräver support från ett plugin som inte längre är installerat.',

	'entity:delete:success' => 'Entity %s har tagits bort',
	'entity:delete:fail' => 'Entity %s kunde inte tas bort',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
	'actiongatekeeper:tokeninvalid' => "Sidan du använder har gått på en promenad. Försök igen.",
	'actiongatekeeper:timeerror' => 'Sidan du använder har gått på en promenad. Vänligen uppdatera och försök igen.',
	'actiongatekeeper:pluginprevents' => 'En förlängning har hindrat detta formulär från att skickas.',
	'actiongatekeeper:uploadexceeded' => 'Filstorleken är över maxgränsen satt av administratör',


/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Taggar',
	'tags:site_cloud' => 'Taggmoln',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Misslyckades att kontakta %s. Du kommer nog uppleva problem med att spara innehåll. Vänligen uppdatera denna sida.',
	'js:security:token_refreshed' => 'Kontakt med %s återupprättade!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinese",
	"zu" => "Zulu",
);

add_translation("sv",$swedish);
