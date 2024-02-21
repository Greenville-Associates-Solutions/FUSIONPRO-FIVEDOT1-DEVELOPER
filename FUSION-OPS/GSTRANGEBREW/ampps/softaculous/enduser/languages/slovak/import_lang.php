<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor IMPORT FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre importovanie softvéru.';
$l['disable_import'] = 'Import feature has been disabled by admin';
$l['invalid_script'] = 'Invalid Script ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importovať softvér';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím vyberte doménu, kde je softvér už nainštalovaný.';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej doméne. napr. Pre importovanie softvéru z http://mojadomena/dir napíšte len <b>dir</b>. Pre importovanie softvéru inštalovaného v http://mojadomena/ nechajte toto prázdne.';
$l['softsubmit'] = 'Import';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne importovaný';
$l['succesful'] = 'bol úspešne importovaný do';
$l['admin_url'] = 'URL správcu';
$l['enjoy'] = 'Dúfame, že proces importu bol jednoduchý.';
$l['import_notes'] = 'Nasledujú dôležité poznámky. Výrazne odporúčame prečítať si toto:';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba auto inštalátor a neposkytuje žiadnu podporu pre softvérové balíčky. Prosím, navštívte stránky skriptu alebo softvéru pre akúkoľvek podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';

$l['choose_protocol'] = 'Vybrať protokol';
$l['choose_protocol_exp'] = 'Ak vaša stránka má SSL, tak, prosím, vyberte HTTPS protokol.';
$l['no_https'] = 'Dôveryhodný SSL certifikát nebol nájdený';
$l['wrong_softdomain'] = 'Cesta k doméne, ktorú ste označili nebola nájdená.';

//remote import
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';
$l['protocol'] = 'Protocol';
$l['protocol_exp'] = 'Select the protocol by which Softaculous will communicate';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Enter a valid domain name. e.g. mydomain.com';
$l['ftp_user'] = 'Username';
$l['ftp_user_exp'] = 'The username of your FTP Account';
$l['ftp_pass'] = 'Password';
$l['ftp_pass_exp'] = 'The Password of your FTP account';
$l['ftp_path'] = 'Path';
$l['ftp_path_exp'] = 'Relative path to web accessible directory of user. e.g. /public_html';
$l['Installed_path'] = 'Installation Directory (Optional)';
$l['Installed_path_exp'] = 'Installation directory e.g. blog if you have installed the script at /public_html/blog';
$l['wrong_ftp_path'] = 'Specified FTP Path does not exist';
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';
$l['imp_err'] = 'There were some errors while importing the software installed at &soft-1;';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be imported in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['remote_import'] = 'The import process of your installation has started in the background. You will receive an email notification about the status once the import process is completed.';
$l['db_err'] = 'Could not connect to the database';
$l['remote_dir_err'] = 'Remote installation directory does not exist';
$l['err_db_create'] = 'Error occured while creating the database';
$l['dest_dir_err'] = 'Destination directory already exists';
$l['source'] = 'Source';
$l['destination'] = 'Destination';
$l['auth_password'] = 'Authentication method'; 
$l['auth_password_exp'] = 'Select the authentication method'; 
$l['private_key'] = 'Private Key';
$l['private_key_exp'] = 'Paste the private key here';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase for encrypted private key(optional)';
$l['database_name'] = 'Database Name';
$l['database_name_exp'] = 'Type the name of the database to be created for the installation';
$l['database_exists'] = 'The database already exists. Please choose a different name';
$l['databaseuser_exists'] = 'Database user already exists';
$l['db_limit_crossed'] = 'The maximum number of databases you can create has been reached, so import cannot proceed';
$l['empty_db'] = 'Database name field is empty. Please enter database name';
$l['adv_option'] = 'Advanced Options';
$l['database_name'] = 'Database Name';
$l['database_name_exp'] = 'Type the name of the database to be created for the installation';
$l['db_name_long'] = 'The database name cannot be greater than 7 letters. Please choose a shorter database name';
$l['db_alpha_num'] = 'Only alpha numeric characters are allowed for the Database name';
$l['remote_btn'] = 'From Remote Server';
$l['local_btn'] = 'From This server';
$l['checking_data'] = 'Checking the submitted data';
$l['fetching_remote_db'] = 'Fetching database details from remote server';
$l['create_db'] = 'Creating the database';
$l['fetching_remote_files'] = 'Importing files from remote server';
$l['import_complete'] = 'Import completed';
$l['import_script'] = 'Importing';
$l['no_remote_import'] = 'Remote Import is not supported for this script';
$l['overwrite'] = 'Overwrite Files';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['sftp_path'] = 'SFTP Path';
$l['sftp_path_exp'] = 'Absolute path to web directory of user. e.g. /home/USERNAME/public_html';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['no_db'] = 'Please enter your Database Name';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['finishing_process'] = 'Finishing Import';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Import has been pushed in background';