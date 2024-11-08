<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('DE DE', 'German', 'Deutsch', [
	'AuthentToken:CopyToken' => 'Die Anmeldedaten (Token), die Sie angeben müssen, lauten: <p>auth_token=<a>%1$s</a></p>Bitte notieren Sie sie jetzt, Sie können sie später nicht mehr anzeigen!',
	'AuthentToken:Message:DeleteTokenConfirmation' => 'Möchten Sie das Token <a>%1$s</a> löschen?',
	'AuthentToken:RebuildToken' => 'Token neu erstellen',
	'AuthentToken:RebuildToken+' => 'Das Authentifizierungs-Token wird neu erstellt, VORSICHT, das vorherige Token geht verloren.',
	'AuthentToken:Title:DeleteTokenConfirmation' => 'Bestätigen',
	'Class:PersonalToken' => 'Persönlicher Token',
	'Class:PersonalToken+' => 'Persönliches Token für den Zugriff '.ITOP_APPLICATION_SHORT.' Webdienste, Import, Export, REST und Datensynchronisation',
	'Class:PersonalToken/Attribute:application' => 'Anwendung',
	'Class:PersonalToken/Attribute:application+' => 'Logischer Bezeichner, um den Grund für die Erstellung dieses Tokens festzuhalten.',
	'Class:PersonalToken/Attribute:auth_token' => 'Authentifizierungs-Token',
	'Class:PersonalToken/Attribute:auth_token+' => 'Nur während der Generierung lesbar',
	'Class:PersonalToken/Attribute:expiration_date' => 'Ablaufdatum',
	'Class:PersonalToken/Attribute:expiration_date+' => '',
	'Class:PersonalToken/Attribute:last_use_date' => 'Letzte Verwendung',
	'Class:PersonalToken/Attribute:last_use_date+' => '',
	'Class:PersonalToken/Attribute:org_id' => 'Organisation',
	'Class:PersonalToken/Attribute:org_id+' => 'Organisation, die vom zugehörigen Benutzer übernommen wurde',
	'Class:PersonalToken/Attribute:scope' => 'Scope',
	'Class:PersonalToken/Attribute:scope+' => 'In welchem Kontext dieses Token verwendet werden darf',
	'Class:PersonalToken/Attribute:scope/Value:Export' => 'Export',
	'Class:PersonalToken/Attribute:scope/Value:Export+' => '',
	'Class:PersonalToken/Attribute:scope/Value:Import' => 'Import',
	'Class:PersonalToken/Attribute:scope/Value:Import+' => '',
	'Class:PersonalToken/Attribute:scope/Value:REST/JSON' => 'REST/JSON',
	'Class:PersonalToken/Attribute:scope/Value:REST/JSON+' => '',
	'Class:PersonalToken/Attribute:scope/Value:Synchro' => 'Synchro',
	'Class:PersonalToken/Attribute:scope/Value:Synchro+' => '',
	'Class:PersonalToken/Attribute:use_count' => 'Anmeldungen',
	'Class:PersonalToken/Attribute:use_count+' => 'Anzahl an Anmeldungen mit diesem Token',
	'Class:PersonalToken/Attribute:user_id' => 'Benutzer',
	'Class:PersonalToken/Attribute:user_id+' => 'Zugeordneter Benutzer',
	'Class:User/Attribute:tokens_list' => 'Persönliche Tokens',
	'Class:UserToken' => 'Token-basierter Nutzer',
	'Class:UserToken+' => 'Benutzer für den Zugriff auf Remote-Anwendungen '.ITOP_APPLICATION_SHORT.' Webdienste',
	'Class:UserToken/Attribute:auth_token' => 'Authentifizierungs-Token',
	'Class:UserToken/Attribute:auth_token+' => 'Nur während der Generierung lesbar',
	'Class:UserToken/Attribute:login' => 'Remote-Anwendung',
	'Class:UserToken/Attribute:login+' => 'Identifizierungs-String der Remote-Anwendung',
	'Class:UserToken/Attribute:scope' => 'Scope',
	'Class:UserToken/Attribute:scope+' => 'In welchem Kontext dieses Token verwendet werden darf',
	'Class:UserToken/Attribute:scope/Value:Export' => 'Export',
	'Class:UserToken/Attribute:scope/Value:Export+' => '',
	'Class:UserToken/Attribute:scope/Value:Import' => 'Import',
	'Class:UserToken/Attribute:scope/Value:Import+' => '',
	'Class:UserToken/Attribute:scope/Value:REST/JSON' => 'REST/JSON',
	'Class:UserToken/Attribute:scope/Value:REST/JSON+' => '',
	'Class:UserToken/Attribute:scope/Value:Synchro' => 'Synchro',
	'Class:UserToken/Attribute:scope/Value:Synchro+' => '',
	'Menu:SearchPersonalTokens' => 'Persönliche Tokens',
	'Menu:SearchPersonalTokens+' => 'Persönliche Tokens, verwendbar für Webdienste, Import, Export, REST und Datensynchronisation',
	'MyAccount:SubTitle:contact' => 'Mein Kontakt',
	'MyAccount:SubTitle:PersonalTokens' => 'Meine persönlichen Token',
	'MyAccount:SubTitle:user' => 'Mein Benutzer',
	'UI:Datatables:Column:RowActions:Description' => '',
	'UI:Datatables:Column:RowActions:Label' => '',
	'UI:Links:ActionRow:AddToken' => 'Neuen Token hinzufügen',
	'UI:Links:ActionRow:DeleteToken' => 'Token löschen',
	'UI:Links:ActionRow:Edit' => 'Bearbeiten',
	'UI:Links:ActionRow:EditToken' => 'Token bearbeiten',
	'UI:Links:ActionRow:SaveToken' => 'Token speichern',
	'UI:MyAccount' => 'Mein Konto',
	'authent-token/Operation:MainPage/Title' => 'Mein Konto',
]);
