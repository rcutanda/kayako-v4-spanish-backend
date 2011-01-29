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
	// ======= BEGIN v3 IMPORT =======
	'serrornoquery' => '0 matching results found',
	'updatedtickets' => 'Tickets updated since last login',
	'unknownstaff' => 'Unknown staff member',
	'ptimebillable' => 'Billable: ',
	'forwarderror' => 'ERROR: Unable to forward "%s." Make sure to fill in the contents field and ensure that the destination email address is valid.',
	'followupmins' => 'In n minutes',
	'followuphours' => 'In n hours',
	'followupdays' => 'In n days',
	'followupweeks' => 'In n weeks',
	'followupmonths' => 'In n months',
	'followupcustom' => 'Custom',
	'nofilterticket' => 'No ticket found that matches filter criteria',
	'followup_willrunattime' => 'Will run follow-up at',
	'followup_willchangeownerto' => 'Will change ticket owner to',
	'followup_willchangedepartmentto' => 'Will change department to',
	'followup_willchangestatusto' => 'Will change status to',
	'followup_willchangepriorityto' => 'Will change priority to',
	'followup_willchangeduedateto' => 'Will set the due date to',
	'followup_willsettooverdue' => 'Will mark this ticket as overdue',
	'followup_willaddstaffnotes' => 'Will add a ticket note',
	'followup_willaddusernotes' => 'Will add a note across each ticket for this user',
	'followup_willaddareply' => 'Will add a pre-written reply to this ticket',
	'followup_willforwardto' => 'Will forward this ticket to',
	'followup_title' => '<b>Current follow-ups for this ticket:</b>',
	'followup_showhide' => 'Show/Hide',
	'followup_delete_areyousure' => 'Are you sure you want to delete this followup?  This is not reversible.',
	'followup_deleted' => 'The follow-up was deleted',
	'followup_notdeleted_invalid_id' => 'The follow-up ID given is not valid',
	'followup_delete_labeltext' => 'delete',
	'followup_nextexecution' => 'next follow-up execution',
	'followup_removeowner' => 'Will remove this ticket\'s owner',
	// ======= END v3 IMPORT =======

	'tickets' => 'Tickets',
	'filtertickets' => 'Filter Tickets',
	'manage' => 'Manage',
	'newview' => 'New View',
	'viewoptions' => 'View Options',
	'editview' => 'Edit View',
	'deleteview' => 'Delete View',
	'views' => 'Views',
	'alldepartments' => 'View All',
	'lookup' => 'Lookup',
	'labels' => 'Labels',
	'filters' => 'Filters',
	'editlabel' => 'Edit Label',
	'newlabel' => 'New Label',
	'nolabel' => '-- No Label --',

	'overdue' => 'Overdue',
	'bandelete' => 'Ban & Delete',
	'markasdue' => 'Mark as Due',
	'markduein24hrs' => 'Mark Due in 24 Hours',
	'mergetickets' => 'Merge Tickets',
	'maprint' => 'Mass Print',
	'massreply' => 'Mass Reply',
	'massaction' => 'Mass Action',
	'maticketstatus' => '-- Status --',
	'maowner' => '-- Assign To --',
	'maticketpriority' => '-- Priority --',
	'madepartments' => '-- Move --',
	'maoptions' => '-- Options --',
	'noflag' => '-- No Flag --',
	'go' =>'Go',
	'rssfeed' => 'RSS Feed',
	'qquote' => 'Quote',
	'qquoteall' => 'Quote All Posts',
	'qquoteclient' => 'Quote Client Posts',

	'gopenewwin' => 'Open Tickets In A Separate Window',
	'desc_gopenewwin' => 'If enabled, tickets will be opened in a new browser window.',
	'arnoref' => '-- Disable Auto Refresh --',
	'ar30sec' => 'Every 30 Seconds',
	'ar1min' => 'Every 1 Minute',
	'ar5min' => 'Every 5 Minutes',
	'ar15min' => 'Every 15 Minutes',
	'ar30min' => 'Every 30 Minutes',
	'ar1hr' => 'Every 1 Hour',
	'gautorefresh' => 'Auto Refresh Grid',
	'notreplied' => 'Not Replied',
	'desc_gautorefresh' => 'The ticket listing can be set to automatically refresh after a certain interval of time.',
	'postreplyoptions' => 'Post Reply Options',
	'rnticketlist' => 'Ticket List',
	'rnticket' => 'Ticket',
	'rnnextticket' => 'Next Ticket',
	'loading' => 'Loading...',
	'replynav' => 'After Replying Take Me To',
	'desc_replynav' => 'Select the area that ' . SWIFT_PRODUCT . ' should take you to after you replying to a ticket.',
	'rnticketstatus' => 'Default Ticket Status When Replying',
	'desc_rnticketstatus' => 'Select the status to which tickets should be set to after you have made a reply.<br/><br/><i>Note:</i> This setting does <b>not</b> apply to replies made from your email client.',
	'unspecified' => '-- Unspecified --',
	'rnsetowner' => 'Select Owner As Current User',
	'desc_rnsetowner' => 'If enabled, the ticket will automatically be assigned to the last staff user to reply.',
	'tabchats' => 'Chats%s',
	'strchats' => 'Chats',

	// Grid Titles
	'f_ticketid' => 'Ticket ID',
	'f_ticketmaskid' => 'Ticket Mask',
	'f_subject' => 'Subject',
	'f_queue' => 'Email Queue',
	'f_department' => 'Department',
	'f_ticketstatus' => 'Status',
	'f_duedate' => 'Due',
	'f_lastactivity' => 'Last Activity',
	'f_date' => 'Date',
	'f_owner' => 'Owner',
	'f_priority' => 'Priority',
	'f_lastreplier' => 'Last Replier',
	'f_fullname' => 'Full Name',
	'f_timeworked' => 'Time Worked',
	'f_email' => 'Email',
	'f_totalreplies' => 'Replies',
	'f_assignstatus' => 'Assigned',
	'f_flagtype' => 'Flag Type',
	'f_hasnotes' => 'Has Notes',
	'f_dateicon' => 'Date Icon',
	'f_avgresponse' => 'Avg Response',
	'f_resolution' => 'Resolution',
	'f_staffworked' => 'Staff Worked',
	'f_laststaffreply' => 'Last Staff Reply',
	'snoreply' => '- Not Replied -',
	'f_slaplan' => 'SLA Plan',
	'f_rule' => 'Rule Title',
	'f_tgroup' => 'Template Group',

	// Search stuff
	's_ticketid' => 'Ticket ID',
	's_ticketmask' => 'Ticket Mask',
	's_fullname' => 'Full Name',
	's_lastreplier' => 'Last Replier',
	's_subject' => 'Subject',
	's_messages' => 'Messages',
	'ticketslist' => 'Ticket List (%s)',
	'serrorticketid' => '0 matching results found for "%s"',
	'serrorfullname' => '0 matching results found for "%s"',
	'serrorlastreplier' => '0 matching results found "%s"',
	'serrorquery' => '0 matching results found for "%s"',
	'searchqresult' => '%s results found (in %s seconds)',
	'searchkeyw' => 'Search query: %s',
	'rejectedwords' => 'The following words were not included in the search: <span class="tabletitle">%s</span>',
	'newtickets' => 'New tickets since last login',

	'massactionconfirm' => 'Action(s) successfully carried out on selected tickets.',
	'viewinsertconfirm' => 'New ticket view "%s" inserted successfully',
	'vieweditconfirm' => 'Ticket view "%s" updated successfully',
	'viewdelconfirm' => 'Ticket view "%s" deleted successfully',
	'rssfeedmsg' => 'ERROR: You need to use a staff username and password in order to access this RSS feed',
	'ticketrssfeed' => 'Ticket RSS Feed',
	'rsstitleformat' => '%s: %s',
	'rssseterror' => 'ERROR: Ticket view RSS syndication is disabled under <i>Settings > Tickets</i> (in the administrator control panel)',
	'invalidview' => 'Invalid View',

	// Ticket Viewing
	'searchquery' => 'Search',
	'invalidticket' => 'ERROR: Unable to load the ticket. You either do not have <b>permissions</b> to the department the ticket resides in or the ticket does <b>not exist</b>',
	'tabgeneral' => 'General',
	'tabfollowup' => 'Follow-Up',
	'tabpostreply' => 'Post Reply',
	'tabforward' => 'Forward',
	'tabaddnotes' => 'Add Notes',
	'tabtimetracking' => 'Time Tracking',
	'tabhistory' => 'History',
	'tabhistorycnt' => 'History%s',
	'tablog' => 'Audit Log',
	'tabedit' => 'Edit',
	'ticketoptions' => 'Ticket Options',
	'flagticket' => 'Flag Ticket',
	'slalink' => 'SLA Plan',
	'markdue' => 'Mark Due',
	'export' => 'Export',
	'purpleflag' => 'Purple Flag',
	'redflag' => 'Red Flag',
	'orangeflag' => 'Orange Flag',
	'yellowflag' => 'Yellow Flag',
	'blueflag' => 'Blue Flag',
	'greenflag' => 'Green Flag',
	'exportpdf' => 'Export PDF',
	'exportxml' => 'Export XML',
	'printticket' => 'Print Ticket',
	'mergeticket' => 'Merge Ticket',
	'ban' => 'Ban',
	'delete' => 'Delete',
	'markasdue' => 'Mark Due',
	'markduetf' => 'Mark Due in 24 Hrs',
	'flagconfirm' => 'Ticket "%s" flagged successfully',
	'errorexport' => 'ERROR: Unable to export the ticket. You either do not have <b>permissions</b> to the department the ticket resides in or the ticket does <b>not exist</b>',
	'errordue' => 'ERROR: Cannot mark the ticket as due. You either do not have <b>permissions</b> to the department the ticket resides in or the ticket does <b>not exist</b>',
	'erroroption' => 'ERROR: Cannot run the ticket Option. You either do not have <b>permissions</b> to the department the ticket resides in or the ticket does <b>not exist</b>',
	'errorticketaccess' => 'ERROR: You either do not have <b>permissions</b> to the department the ticket resides in or the ticket does <b>not exist</b>',
	'delconfirm' => 'Ticket "%s" deleted successfully',
	'noteconfirm' => 'Note added for ticket "%s" successfully',
	'noteconfirmuser' => 'Successfully added note added for user "%s".',
	'banconfirm' => 'User "%s" banned successfully',
	'bandconfirm' => 'User "%s" banned and the ticket deleted successfully',
	'dueconfirm' => 'Ticket ID "%s" due time has been set successfully',
	'clearflag' => 'Clear Flag',
	'timeline' => 'Timeline',
	'attachfilen' => 'File %s',
	'entrytype' => 'Entry Type',
	'alparser' => 'Parser',
	'alstaff' => 'Staff',
	'alclient' => 'Client',
	'alsystem' => 'System',
	'alescalation' => 'Escalation',
	'notetype' => 'Note Type',
	'desc_notetype' => '<i>Ticket Notes:</i> Visible to staff users only on this ticket.<br><br><i>User Notes:</i> Visible to staff users on every ticket created by the user.',
	'ticket' => 'Ticket',
	'user' => 'User',
	'noteoptions' => 'Note Options',
	'forstaffnote' => 'Visible To',
	'desc_forstaffnote' => 'The ticket note can be made visible to a specific staff user only.',
	'noteallstaff' => '-- All Staff Users --',
	'addnote' => 'Add Note',
	'notetitleformat' => 'Note by %s - %s (%s)',
	'usergroup' => 'User Group',
	'slatconfirm' => 'SLA Plan assigned to ticket "%s"',
	'slauconfirm' => 'SLA Plan assigned to user "%s"',
	'notedconfirm' => 'Ticket note deleted successfully',
	'cfdelconfirm' => 'Custom field value deleted successfully',
	'unassigned' => '-- Unassigned --',
	'tassigned' => 'Assigned',
	'tunassigned' => 'Unassigned',
	'cancel' => 'Cancel',
	'tcconfirm' => '"%s" Ticket changes executed successfully',
	'nextticket' => 'Next Ticket &raquo;',
	'previousticket' => '&laquo; Previous Ticket',
	'tremail' => 'Email: %s',
	'trtoemail' => 'Forwarded To: %s',
	'trip' => 'IP: %s',
	'trdate' => 'Posted on: %s',
	'pdfrow' => '%s - %s',
	'staff' => 'Staff',
	'startprint' => 'Start Print',
	'delpostconfirm' => 'Ticket post for "%s" deleted successfully',
	'delpostfail' => 'Error deleting the ticket post. Make sure that the ticket post is not the <b>first post</b> and that you have permission to delete it',
	'postdelmsg' => 'Are you sure you wish to delete this Ticket Post? Once deleted, the post cannot be recovered.',
	'viewheaders' => 'View Email Headers',
	'printpost' => 'Print Ticket Post',
	'deletepost' => 'Delete Ticket Post',
	'editpost' => 'Edit Ticket Post',
	'billing' => 'Billing',
	'tabrelease' => 'Release',
	'quickinsert' => 'Quick Insert',
	'qpredefinedreplies' => 'Predefined Replies',
	'qknowledgebase' => 'Knowledgebase',
	'qdownloads' => 'Downloads',
	'properties' => 'Properties',
	'qowner' => 'Owner: ',
	'qdepartment' => 'Department: ',
	'qstatus' => 'Status: ',
	'qpriority' => 'Priority: ',
	'reply' => 'Reply Contents',
	'saveasdraft' => 'Save as Draft',
	'send' => 'Send',
	'addnote' => 'Add Note',
	'emailoptions' => 'Email Options',
	'eocc' => 'CC',
	'eobcc' => 'BCC',
	'addtorecp' => 'Add to Recipients',
	'attachfile' => 'Attach Files',
	'file1' => 'File 1',
	'file2' => 'File 2',
	'file3' => 'File 3',
	'optpred' => 'Predefined',
	'optkb' => 'Knowledgebase',
	'optsendemail' => 'Send Email',
	'pdue' => 'Due: ',
	'inminutes' => '(in minutes)',
	'ptimeworked' => 'Time Worked: ',
	'author' => 'Author',
	'from' => 'From',
	'attachments' => 'Attachments',
	'replyerror' => 'ERROR: Unable to reply to "%s." Make sure you have entered your reply content in the reply field',
	'removefile' => 'Remove File',
	'spellcheck' => 'Spell Check',
	'to' => 'To',
	'ticketrecipients' => 'Ticket Recipients',
	'dticketrecipients' => 'Ticket recipients receive all the email correspondence sent by staff users. The option to add ticket recipients is available when sending a CC, BCC, or forwarding a ticket. There are three types of recipient:<br><br><i>Third Party:</i> A third party recipient added to a ticket is carbon copied all replies sent by a staff user. A third party is able to send email replies and have them appended to the ticket that was not originally created by them.<br><br><i>CC Users:</i> A CC user who has been added to a ticket is carbon copied all replies sent by a staff user.<br><br><i>BCC Users:</i> A BCC user who has been added to a ticket is blind-carbon copied all replies sent by a staff user.',
	'arecipient' => 'Add New Recipient',
	'desc_arecipient' => 'You can add a new recipient by selecting the recipient type and an email address. The added recipient will receive staff replies automatically, but will not have access to view the ticket online, via the client support interface.',
	'rthirdparty' => 'Third Party Recipient',
	'rccuser' => 'CC User',
	'rbccuser' => 'BCC User',
	'summary' => 'Summary',
	'worker' => 'Worker',
	'billdate' => 'Bill Date',
	'timespent' => 'Time Spent',
	'tworked' => 'Worked: ',
	'tbillable' => 'Billable: ',
	'tdesc' => '(in minutes)',
	'billtitleformat' => 'Billing entry for: %s on %s',
	'ttotalworked' => 'Total Time Worked:',
	'ttotalbilled' => 'Total Time Billed:',
	'trphone' => 'Phone #: %s',
	'linkcfgroup' => 'Link Custom Field Group',
	'linkwithcfg' => 'Link With Custom Field Group',
	'desc_linkwithcfg' => 'A ticket can be manually linked to a custom field group. Once linked, the custom fields can be edited under the <b>Edit</b> tab.',
	'cfnolink' => '-- Do Not Link --',
	'mergeticket' => 'Merge Ticket',
	'mergewith' => 'Merge With Ticket ID',
	'desc_mergewith' => 'Enter the ticket ID with which this ticket should be merged. Any replies received under this ticket will be merged chronologically.',
	'lastedited' => 'Last edited by: %s On: %s',
	'editpost' => 'Edit Ticket Post',
	'quote' => 'Quote',
	'lockmsg' => '%s is viewing the ticket (last update: %s)',
	'ticketproperties' => 'Ticket Properties',
	'charsetdiff' => 'The character set of this email is different than the default character set. The contents may not display properly. If you wish to change the character set, click here.',
	'deletelabel' => 'Delete Label',
	'ticketlabeldelconfirm' => 'Ticket label deleted successfully',
	'slalabel' => 'SLA: %s',
	'tgroup' => 'Template Group: %s',

	// New Ticket
	'newticket' => 'New Ticket',
	'invaliddepartment' => 'Invalid department specified',
	'foemail' => 'User Email Address',
	'fophone' => 'User Phone #',
	'dnewticket' => 'New Ticket: %s',
	'noptional' => '(Optional)',
	'phonefieldempty' => 'ERROR: Phone field is empty',
	'emailfieldempty' => 'ERROR: Email field is empty',
	'newticketfailed' => 'ERROR: Failed to create a new ticket',
	'tdispatch' => 'Email:',
	'tnautores' => 'Autoresponder',
	'tncontents' => 'Contents',
	'forwardattach' => 'Attachments:',

	'followupsuccess' => 'Follow-Up action(s) added to Queue',
	'followupfail' => 'Failed to add follow-up action(s). Please ensure that all fields were filled in',
	'followupnochange' => '-- No Change --',
	'followupformerror' => 'One of the required field(s) is empty',

	// Ticket Post Lock
	'postlockdesc' => '%s is replying to the ticket (last update: %s)',
	'invalidemailspecified' => 'Invalid email address entered',

	// Misc
	'invaliduser' => 'Invalid User Specified. Unable to continue.',
	'billingoptions' => 'Billing Options',
);
?>