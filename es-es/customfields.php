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
	// ======= BEGIN NEW V4 LOCALES =======
	'tabgeneral' => 'General',
	'insertcfgrouptitle' => 'Inserted Custom Field Group "%s"',
	'insertcfgroupmsg' => 'Successfully inserted custom field group "<b>%s</b>" into the database.<br><b>Title:</b> %s<br><b>Type:</b> %s<br><b>Display Order:</b> %s',
	'updatecfgrouptitle' => 'Updated Custom Field Group "%s"',
	'updatecfgroupmsg' => 'Successfully updated custom field group "<b>%s</b>".<br><b>Title:</b> %s<br><b>Type:</b> %s<br><b>Display Order:</b> %s',
	'wineditcfgroup' => 'Edit Custom Field Group: %s',
	'titledelcfgroup' => 'Deleted "%d" Custom Field Group(s)',
	'msgdelcfgroup' => 'Successfully deleted the following Custom Field Groups from the database:<br>%s',
	'buttonnext' => 'Next',
	'encryptindb' => 'Encrypt Value in Database',
	'desc_encryptindb' => 'If enabled, the value stored in the database will be encrypted using the unique installation hash. Field values for the password field are encrypted by default.',
	'tabdepartments' => 'Departments',
	'assigneddepartments' => 'Assigned Departments',
	'titleunproc' => 'Unable to Proceed',
	'msgunproc' => 'You need to create at least one custom field group to add a new custom field.',
	'taboptions' => 'Options',
	'tablanguages' => 'Languages: Translation',
	'tabpermissions' => 'Permissions',
	'field_date' => 'Date',
	'desc_field_date' => 'This field type allows you to create a drop down date picker control field.',
	'field_linkedselect' => 'Linked Select',
	'desc_field_linkedselect' => 'Select this Field Type to create a Linked Select input box.',
	'cfteampermissions' => 'Permissions: Team',
	'cfstaffpermissions' => 'Permissions: Staff (Overrides Team Permissions)',
	'notset' => 'Not Set',
	'insertcfieldtitle' => 'Inserted Custom Field "%s"',
	'insertcfieldmsg' => 'Successfully inserted custom field "<b>%s</b>" into the database.<br>',
	'updatecfieldtitle' => 'Updated Custom Field "%s"',
	'updatecfieldmsg' => 'Successfully updated custom field "<b>%s</b>".<br>',
	'wineditcfield' => 'Edit Custom Field: %s',
	'titledelcfields' => 'Deleted "%d" Custom Field(s)',
	'msgdelcfields' => 'Successfully deleted the following Custom Field(s) from the database:<br>%s',
	// ======= END NEW V4 LOCALES =======

	'grouptitle' => 'Group Title',
	'desc_grouptitle' => '',
	'grouptype' => 'Group Type',
	'desc_grouptype' => 'Custom fields must belong to a <b>custom field group</b>, which is further bound to an area of the product, such as ticket creation, live chat, user, user group etc.',
	'displayorder' => 'Display Order',
	'desc_displayorder' => 'If there are multiple groups within an area, they are sorted using the display order (ascending) specified here.',
	'customfields' => 'Custom Fields',
	'managegroups' => 'Manage Groups',
	'desc_customfieldgroups' => '',
	'grouplist' => 'Custom Field Groups',
	'insertgroup' => 'Insert Group',
	'cfgroupdetails' => 'Custom field group details',
	'grouptypeuser' => 'User',
	'grouptypeknowledgebase' => 'Knowledgebase Articles',
	'grouptypenews' => 'News Articles',
	'grouptypetroubleshooter' => 'Troubleshooter Steps',
	'grouptypedownloads' => 'Download Files',
	'grouptypeuserorganization' => 'User Organization',
	'grouptypestaffticket' => 'Staff Ticket Creation',
	'grouptypeuserticket' => 'User Ticket Creation',
	'grouptypestaffuserticket' => 'Staff & User Ticket Creation',//Mahesh Slaria: Staff & user ticket creation
	'grouptypetimetrack' => 'Ticket Time Tracking',
	'grouptypecontact' => 'Teamwork Contact',
	'grouptypeevent' => 'Teamwork Event',
	'grouptypetask' => 'Teamwork Task',
	'grouptypelivesupportpre' => 'Live Chat - Pre Chat',
	'grouptypelivesupportpost' => 'Live Chat - Post Chat',
	'insertgroup' => 'Insert Group',
	'updategroup' => 'Update Group',
	'cfgroupinsertconfirm' => 'Custom field group "%s" inserted successfully',
	'addfield' => 'Add Field',
	'cfgroupdelconfirm' => 'Custom field group(s) deleted successfully',
	'cfgroupactconfirm' => 'Are you sure you wish to delete this custom field group? Deleting a group will result in the permanent deletion of all custom fields and all of their respective stored values.  This action is irreversible!',
	'editgroup' => 'Edit Group',
	'invalidcfgroup' => 'Invalid custom field group',
	'usergroups' => 'User Groups',
	'desc_usergroups' => 'Select the user groups that the custom field group should be available to. For example, you can have two different user groups and you may wish to have this custom field group available to only one of them.',
	'cfgroupupdateconfirm' => 'Custom field group "%s" updated successfully',
	'selectoneusergroup' => 'ERROR: You need to select at least one user group',
	'insertfield' => 'Insert Field',
	'desc_customfields' => '',
	'next' => 'Next &raquo;',
	'selectcftype' => 'Select Custom Field Type',
	'insertfieldstep1' => 'Insert Field: Step 1',
	'insertfieldstep2' => 'Insert Field: Step 2',
	'fielddetails' => 'Field Details',
	'customfieldgroup' => 'Custom Field Group',
	'desc_customfieldgroup' => '',
	'fieldtype' => 'Field Type',
	'erroraddcfgroup' => 'ERROR: You need to create at least one custom field group to add a custom field',
	'nogroupadded' => '-- No Custom Field Group Available --',
	'fieldtitle' => 'Field Title',
	'desc_fieldtitle' => 'The field title is displayed beside each field in the user and staff interfaces to describe what each field is for.',
	'fieldname' => 'Field Name',
	'desc_fieldname' => '',
	'isrequired' => 'Is Required?',
	'desc_isrequired' => 'Whether or not the field is required. If enabled, the user will be required to fill in the field before the data can be processed.',
	'usereditable' => 'User Editable',
	'desc_usereditable' => 'Whether or not the user can modify the field information',
	'staffeditable' => 'Staff Editable',
	'desc_staffeditable' => 'Whether or not staff users can modify the field information',
	'regexpvalidate' => 'Regular Expression Validation',
	'desc_regexpvalidate' => 'Here you can specify a regular expression to validate the field input.',
	'defaultvalue' => 'Default Value',
	'desc_defaultvalue' => 'If specified, the default value of the field will be set to the value entered here.',
	'description' => 'Field Description',
	'desc_description' => 'A description of the field.',
	'fielddisplayorder' => 'Display Order',
	'desc_fielddisplayorder' => 'If there are multiple fields within a group, they are sorted using the display order (ascending) specified here',
	'fieldoptions' => 'Field Options',
	'optionvalues' => 'Option Values',
	'optiondisplayorder' => 'Display Order',
	'optionisselected' => 'Is Selected?',
	'cfieldinsertconfirm' => 'Custom field "%s" inserted successfully',
	'cfdepartments' => 'Departments',
	'desc_cfdepartments' => 'Select the department(s) that the custom field is bound to. You can use this feature to display different custom fields for different departments.',
	'cfgroupd' => 'Custom Field Group',
	'desc_cfgroupd' => 'Select the custom field group for this custom field.',

	// Manage Fields
	'managefields' => 'Manage Fields',
	'desc_customfields' => '',
	'fieldlist' => 'Field List',
	'cfdelconfirm' => 'Custom field deleted successfully',
	'cfdelconfirmmsg' => 'Are you sure you wish to delete this custom field? Deleting a custom field will result in the permanent deletion of the field and all its respective stored values.  This action is irreversible!',

	// Edit Custom Field
	'invalidcustomfield' => 'Invalid Custom Field',
	'editcfield' => 'Edit Custom Field',
	'updatefield' => 'Update Field',
	'cfieldupdateconfirm' => 'Custom field "%s" updated successfully',

	// Field List
	'field_text' => 'Text',
	'desc_field_text' => 'Select this field type to create a text input field.',
	'field_textarea' => 'Text Area',
	'desc_field_textarea' => 'Select this field type to create a multi-line text input field.',
	'field_password' => 'Password',
	'desc_field_password' => 'Select this field type to create a password input field (masked text area).',
	'field_checkbox' => 'Checkbox',
	'desc_field_checkbox' => 'Select this field type to create a list of check boxes (multiple selection possible).',
	'field_radio' => 'Radio',
	'desc_field_radio' => 'Select this field type to create a list of radio buttons (single selection only).',
	'field_select' => 'Select',
	'desc_field_select' => 'Select this field type to create a drop-down list field (single selection only).',
	'field_file' => 'File',
	'desc_field_file' => 'Select this field type to create a file upload field (single file upload only).',
	'field_selectmultiple' => 'Select Multiple',
	'desc_field_selectmultiple' => 'Select this field type to create a multi-selection list field (multiple selection possible).',
	'field_custom' => 'Custom',
	'desc_field_custom' => 'Select this field type to create a generic entry for custom fields in ' . SWIFT_PRODUCT . '. However you will have to add the required HTML code yourself in the ticket submit templates. This type of custom field only provides a pathway and storage area for the data - you must code the corresponding HTML for a user to input the data.',
);
?>