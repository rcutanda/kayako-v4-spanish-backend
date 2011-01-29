<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'titleduplicatesgroup' => 'Duplicate Team Title',
	'msgduplicatesgroup' => SWIFT_PRODUCT . ' is unable to insert the team as another team with the same title already exists.',
	'depnotassigned' => '(Not Assigned)',
	'tabskills' => 'Skills',
	'noskillstodisplay' => 'No skills available. Goto Live Chat &gt; Insert Skill to add skills.',
	'titleextinvalid' => 'Invalid Extension',
	'msgextinvalid' => 'You have entered an invalid extension. Please make sure that the extension you have specified is numeric and does not contain any special characters.',
	'livechatoptions' => 'Live Chat Settings',
	'lcgreeting' => 'Auto Greeting',
	'desc_lcgreeting' => 'Enter the greeting message that will be dispatched automatically whenever this staff accepts a chat from a client.',
	'titleinvalidfileext' => 'Invalid Image File Extension',
	'msginvalidfileext' => 'The profile image file has an invalid extension. Allowed extensions are: gif, jpeg, jpg, png',
	'rrenabled' => 'Is RingRoute Enabled',
	'desc_rrenabled' => 'Specify whether the RingRoute functionality should be enabled for this Staff',
	'rrextension' => 'RingRoute Extension',
	'desc_rrextension' => 'Enter the RingRoute extension number for this Staff.',
	'personalizeoptions' => 'Personalize',
	'generaloptions' => 'General Settings',
	'staffprofileimage' => 'Profile Image',
	'desc_staffprofileimage' => 'Upload the Staff Profile Image. This image will appear below all ticket posts and in the live chat window.',
	'ringrouteoptions' => 'RingRoute Settings',
	'tabprofile' => 'Profile',
	'stafffirstname' => 'First Name',
	'desc_stafffirstname' => '',
	'stafflastname' => 'Last Name',
	'desc_stafflastname' => '',
	'staffdesignation' => 'Title/Position',
	'desc_staffdesignation' => 'Enter the title/position of the staff, this will be visible below the ticket replies and in live chat. Example: CEO, Support Manager, Sales Executive',
	'titleemailqueuematch' => 'Email address conflict',
	'msgemailqueuematch' => 'The email address "%s" is already being used as an email queue address.',
	'titlemobilenumberinvalid' => 'Invalid mobile phone number',
	'msgmobilenumberinvalid' => 'The mobile phone number entered is invalid. Please enter digits only, without the + prefix or number separators.',
	'copyfrom' => 'Copy Permissions',
	'titleinsertstaff' => 'Inserted Staff "%s" (%s)',
	'msginsertstaff' => 'Successfully inserted staff user "<b>%s</b>"<br /><b>Fullname:</b> %s<br /><b>Username:</b> %s<br /><b>Email:</b> %s<br /><b>Team:</b> %s<br /><b>Is Enabled:</b> %s<br /><b>Mobile Number:</b> %s<br /><b>Use Team Departments?:</b> %s',
	'titleupdatestaff' => 'Updated Staff "%s" (%s)',
	'msgupdatestaff' => 'Successfully updated staff user "<b>%s</b>"<br /><b>Fullname:</b> %s<br /><b>Username:</b> %s<br /><b>Email:</b> %s<br /><b>Team:</b> %s<br /><b>Is Enabled:</b> %s<br /><b>Mobile Number:</b> %s<br /><b>Use Team Departments?:</b> %s',
	'titlepwnomatch' => 'Invalid Password',
	'msgpwnomatch' => 'The password specified for the staff user does not match.',
	'titlenodep' => 'No Department Assigned',
	'msgnodep' => 'Please select the assigned departments for this user under the Departments tab.',
	'titleusernameexists' => 'Username Mismatch',
	'msgusernameexists' => 'The username "%s" is already assigned to the "%s" staff. Please enter a different username to proceed.',
	'titlegrouperror' => 'Team error, Unable to proceed.',
	'msggrouperror' => 'You cannot change the team to a Non-Admin Team as this Staff is the only one with admin privileges.',
	'titlestaffdelsame' => 'Unable to delete',
	'msgstaffdelsame' => 'Cannot delete the currently logged in staff user. Please login using different staff credentials in order to delete the staff user "%s".',
	'titledelstaffmul' => 'Deleted "%d" Staff',
	'msgdelstaffmul' => 'Successfully deleted the following Staff Users from the database:<br />%s',
	'titledelstaff' => 'Deleted Staff User "%s" (%s)',
	'msgdelstaff' => 'Successfully deleted the staff user "%s" (%s) from the database.',
	'titleinsertstaffgroup' => 'Inserted Team "%s"',
	'msginsertstaffgroup' => 'Successfully inserted team "<b>%s</b>"<br /><b>Title:</b> %s<br /><b>Is Admin:</b> %s<br /><b>Assigned Departments:</b> %s',
	'titleupdatestaffgroup' => 'Updated Team "%s"',
	'msgupdatestaffgroup' => 'Successfully updated team "<b>%s</b>"<br /><b>Title:</b> %s<br /><b>Is Admin:</b> %s<br /><b>Assigned Departments:</b> %s',
	'titlestaffgroupdelsame' => 'Unable to delete',
	'msgstaffgroupdelsame' => 'Cannot delete the selected team as it is assigned to the currently logged in user. Please login using different staff credentials in order to delete the team "%s".',
	'titledelstaffteammul' => 'Deleted "%d" Team(s)',
	'msgdelstaffteammul' => 'Successfully deleted the following team(s) from the database:<br />%s',
	'titledelstaffteam' => 'Deleted Team "%s"',
	'msgdelstaffteam' => 'Successfully deleted the team "%s" (%s) from the database.',
	'loginshare' => 'LoginShare',
	'tabsettings' => 'Settings',
	'tabplugins' => 'Plugins',
	'ls_module' => 'LoginShare Plugins',
	'wineditls' => 'Edit LoginShare Settings: %s',
	'lsnotitle' => 'No Settings Available',
	'lsnomsg' => 'There are no settings available for the LoginShare plugin <b>"%s"</b>.',
	'tabmassmail' => 'Mass Mail',
	'tabfilter' => 'Filter',
	'filterbyteams' => 'Filter by Teams',
	'filterbystaff' => 'Filter by Staff Users',
	'send' => 'Send',
	'isenabled' => 'Is Enabled?',
	'desc_isenabled' => 'Toggle the state of staff user. Disabled staff users cannot login to the staff control panel or carry out any related actions.',
	'assigneddepartments' => 'Assigned Departments',
	'titlenoenable' => 'Cannot Disable "%s"',
	'msgnoenable' => 'You cannot disable the currently logged in user "%s". Please login using different staff credentials to disable this staff user.',
	'titledisablestaff' => 'Disabled "%d" Staff',
	'msgdisablestaff' => 'Successfully disabled the following staff users:<br />%s',
	'titleenablestaff' => 'Enabled "%d" Staff',
	'msgenablestaff' => 'Successfully enabled the following staff users:<br />%s',
	'titleupdatedsettings' => 'Updated "%s" Settings',
	'msgupdatedsettings' => 'Successfully updated all settings for category "%s" under "%s"',
	'titleselectonerecord' => 'No Staff/Team Selected',
	'msgselectonerecord' => 'You need to select atleast one Staff User/Team to dispatch a Mass Mail.',
	'titlemassmailsent' => 'Dispatched Mail to "%d" Staff',
	'msgmassmailsent' => 'Successfully dispatched Mass Mail to the following Staff Users:',
	'attachments' => 'Attachments',
	'tabimport' => 'Import',
	'loginsharefile' => 'LoginShare XML File',
	'desc_loginsharefile' => 'Upload the LoginShare XML File',
	'ignoreversion' => 'Ignore Version',
	'desc_ignoreversion' => 'If selected, the import file version will be ignored. It is recommended that you do not enable this option as it can result in problems in the Client Support Center.',
	'import' => 'Import',
	'titlenoelevatedls' => 'Unable to Import Staff LoginShare XML',
	'msgnoelevatedls' => SWIFT_PRODUCT.' is unabled to import the Staff LoginShare XML file as it is required that you login with a staff user that has elevated rights. You can add your user to elevated right list in config/config.php file of the package.',
	'titlelsversioncheckfail' => 'Version Check Failed',
	'msglsversioncheckfail' => SWIFT_PRODUCT. ' is unable to import the Staff LoginShare Plugin as the plugin was created for an older version of '.SWIFT_PRODUCT,
	'titlelsinvaliduniqueid' => 'Duplicate Unique ID Error',
	'msglsinvaliduniqueid' => SWIFT_PRODUCT .' is unable to import the Staff LoginShare Plugin due to a conflict in Unique ID. This usually means that the plugin has already been imported into the database.',
	'titlelsinvalidxml' => 'Invalid XML File',
	'msglsinvalidxml' => SWIFT_PRODUCT .' is unable to import the Staff LoginShare Plugin as the XML file corrupt or contains invalid data.',
	'titlelsimported' => 'Imported Staff LoginShare Plugin',
	'msglsimported' => SWIFT_PRODUCT .' has successfully imported the "%s" Staff LoginShare Plugin.',
	'titlelsdeleted' => 'Deleted Staff LoginShare Plugin',
	'msglsdeleted' => 'Successfully deleted the "%s" Staff LoginShare Plugin from the database.',
	'invalidloginshareplugin' => 'Invalid LoginShare Plugin, Please make sure the LoginShare plugin exists in the database.',
	'titleupdatedls' => 'Updated Staff LoginShare Settings',
	'msgupdatedls' => 'Successfully updated the settings for "%s" Staff LoginShare Plugin',
	'tabpermissionsstaff' => 'Permissions: Staff',
	'tabpermissionsadmin' => 'Permissions: Admin',
	'iprestriction' => 'Restrict to IP',
	'desc_iprestriction' => 'You may restrict login locations for this staff member to selected IP address(es) or subnet(s). Separate multiple values using a comma \',\'. Examples of usage:<BR /><i> * <b>202.1.192.0-202.1.192.255</b>: A range of IPs<BR /> * <b>200.36.161.0/24</b>: A range of IPs by using net masking<BR /> * <b>200.36.161/24</b>: A shortened syntax similar to the above.</i>',
	'tzusedefault' => '-- Use System Default --',
	'stafftimezone' => 'Time Zone',
	'desc_stafftimezone' => 'Select the appropriate time zone for the staff. If you choose a time zone here, it will override the default time zone for the staff.',
	'staffenabledst' => 'Enable Daylight Savings',
	'desc_staffenabledst' => 'Select whether or not you wish to enable Daylight Savings Time.',
	// ======= END v4 LOCALES =======
	'staff' => 'Staff',
	'desc_staff' => '',
	'managestaff' => 'Manage Staff',

	// Staff List
	'stafflist' => 'Staff List',
	'fullname' => 'Full Name',
	'staffgroup' => 'Team',
	'staffdeletefailedsame' => 'You cannot delete your own staff user account. Please log in using different staff user credentials in order to delete "%s"',
	'staffdeleteconfirm' => 'Staff user "%s" deleted successfully',
	'wineditstaff' => 'Edit Staff',
	'tabedit' => 'Edit',
	'tabinsert' => 'Insert',
	'tabdepartments' => 'Assigned Departments',
	'taboptions' => 'Options',
	'permissions' => 'Permissions',
	'wineditteam' => 'Edit Team',

	// Staff Group
	'staffgroups' => 'Teams',
	'managegroups' => 'Manage Teams',
	'isadmin' => 'Is Administrator?',
	'sgroupdeletefailedsame' => 'You cannot delete the team to which your staff user account belongs. Please log in using different staff user credentials in order to delete "%s"',
	'sgroupdeleteconfirm' => 'Team "%s" deleted successfully',
	'sgroupactionconfirm' => 'IMPORTANT: Deleting a team results in the deletion of all the staff user accounts under that team! Are you sure you wish to delete?',

	// Insert Staff
	'insertstaff' => 'Insert Staff',
	'staffdetails' => 'Staff Details',
	'stafffullname' => 'Full Name',
	'desc_stafffullname' => 'The full name of the staff user (e.g. <i>Joe Bloggs</i>).',
	'staffusername' => 'Username',
	'desc_staffusername' => 'A username for the staff user. This will be used to login to the control panel(s).',
	'staffpassword' => 'Password',
	'desc_staffpassword' => 'A password for the staff user account.',
	'staffpasswordconfirm' => 'Re-enter Password',
	'desc_staffpasswordconfirm' => 'For confirmation, re-enter the password.',
	'staffemail' => 'Email',
	'desc_staffemail' => 'The staff user\'s email address. All alerts sent to this user will be sent to this address.',
	'staffgroup' => 'Team',
	'desc_staffgroup' => 'Specify the team to which this staff user will be assigned. All permissions for the chosen team will be inherited.',
	'optionalfields' => 'Optional Fields',
	'staffmobilenumber' => 'Mobile Phone Number',
	'desc_staffmobilenumber' => 'If this staff user is to receive SMS alerts, enter their mobile phone number. Note: Enter only the telephone number without spaces, dashes or other symbols.<br/>Example: <i>\'18005551212\'</i> ',
	'staffsignature' => 'Signature',
	'desc_staffsignature' => 'Enter the staff user\'s signature. The signature will be appended to all outgoing email messages sent by this user.',
	'staffassigneddep' => 'Assigned Departments',
	'usegroupdep' => 'Use Team Departments',
	'desc_usegroupdep' => 'If enabled, the department permissions of the selected team will be inherited by this staff user.',
	'assigneddep' => 'Assigned Departments',
	'desc_assigneddep' => 'Specify individual department permissions if the team access option (above) is not enabled.',
	'passworddontmatch' => 'The passwords entered do not match',
	'usernameexists' => 'This staff username already exists',
	'selectdepartment' => 'You must assign the staff user to at least one department',
	'redirect_staffinsert' => 'Staff inserted successfully',
	'staffinsertconfirm' => 'Staff "%s" inserted successfully',

	// Edit Staff
	'updatestaff' => 'Update Staff',
	'editstaff' => 'Edit Staff',
	'invalidstaff' => 'ERROR: Invalid staff ID',
	'desc_staffpasswordedit' => 'If you wish to change the password, enter a new one here.',

	// Insert Staff Group
	'insertstaffgroup' => 'Insert Team',
	'staffgroupdetails' => 'Team Details',
	'generalfields' => 'General Fields',
	'grouptitle' => 'Title',
	'desc_grouptitle' => 'Enter a title for the team.',
	'groupisadmin' => 'Administrator',
	'desc_groupisadmin' => 'If enabled, this team will be an administrator team and will thus have access to <b>this</b> control panel and will be able to make system-wide setting changes.',
	'groupassigneddep' => 'Assigned Departments',
	'desc_groupassigneddep' => 'Select the department(s) to which the staff users under this team will be assigned.',
	'redirect_staffgroupinsert' => 'Team inserted successfully',
	'staffgroupinsertconfirm' => 'Team "%s" inserted successfully',

	// Edit Staff
	'staffupdateconfirm' => 'Staff Member "%s" updated successfully',
	'grouperror' => 'You cannot change the team to a non-administrator team as it is the only one remaining with administrator privileges',

	// Edit Staff Group
	'editstaffgroup' => 'Edit Team',
	'invalidstaffgroup' => 'Invalid team',
	'staffgroupupdateconfirm' => 'Group "%s" updated successfully',
	'groupadminerror' => 'You cannot disable administrator privileges for this team as it is the only one remaining with administrator privileges',

	// Mass Mail
	'massmail' => 'Mass Mail',
	'subject' => 'Subject',
	'desc_subject' => '',
	'send' => 'Send',
	'mailcontents' => 'Mail Contents',
	'mailstaffgroup' => 'Team',
	'desc_mailstaffgroup' => '',
	'selectonegroup' => 'ERROR: Please select at least one team',
	'sentmailconfirm' => 'Dispatched email to %s staff members',
	'mmcontents' => 'Mail Contents',

	// License
	'titlestafflicense' => 'License Limit Exceeded',
	'msgstafflicense' => SWIFT_PRODUCT . ' is unable to insert a new staff as you have reached the limit allowed by your license. Please contact Kayako Support at <a href="https://my.kayako.com" target="_blank">https://my.kayako.com</a> for further assistance.',

);

?>