<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
 */
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
 */

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/* THEME */

//define('APP_THEME', 'OLD');
define('APP_THEME', 'LTE');

if($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "192.168.21.11" || $_SERVER['HTTP_HOST'] == "192.168.21.12")
    define('LTE', '/stvision/vision/lte/');
else
    define('LTE', '/vision_ag/lte/');

define('AGENT_SECTION', 'NEW'); // set this to "NEW" if you want to load new section for agents.

define('LTE_BOOTSTRAP', LTE . '/bootstrap/');
define('LTE_PLUGINS', LTE . '/plugins/');

/* INVOICE BOOKING PDF */
define('BOOKING_INVOICE_FILE', '../teacherApplications/bookinginvoice/');

/* Tuition specific CONSTANTS */
define('CONTRACT_PDF_FILE', '../teacherApplications/teachers/contracts/contract.pdf');
define('COURSE_DIRECTOR_HELP_DOCUMENT', '../teacherApplications/course_director/vision_tuition_guide_for_course_director.pdf');
define('ACADEMIC_CONTRACT_FILE_PATH', '../teacherApplications/academicContracts/');
define('CV_FILE_PATH', '../teacherApplications/cv/');
define('OTHER_FILE_PATH', '../teacherApplications/other/');
define('PASSPORT_ID_CARD_FILE', '../teacherApplications/passportidcard/');
define('OFFICE_OTHER_FILE_PATH', '../teacherApplications/office_other/');
define('SENT_JOB_OFFER_PATH', '../teacherApplications/pdf/');
define('JOB_OFFER_TERM_SPECIFICATION_PATH', '../teacherApplications/pdf/specification/');
define('PLUS_SENDER_EMAIL_ADDRESS', "recruitment@plus-ed.com");
define('PLUS_SELES_SENDER_EMAIL_ADDRESS', "sales@plus-ed.com");

define('CLASS_STUDENTS_AVALABILITY', 15);
define('NATIONALITY_FILES_PATH', "img/flags/nationality/");
/* End:Tuition specific CONTANTS */

/*Start: Constants for excursion export and import*/
define('EXPORT_TEMP_PATH', "/var/www/html/www.plus-ed.com/vision_ag/excel/"); //is the path for temporary storage of operator export files. Change according to server path
//define('EXPORT_TEMP_PATH',"D:/wamp/www/stvision/vision/excel/");//is the path for temporary storage of operator export files. Change according to server path
define('EXPORT_BACKUP_PATH', "/var/www/html/www.plus-ed.com/vision_ag/excel/backup/"); //is the path for storing backup files during import process. Change according to server path
//define('EXPORT_BACKUP_PATH',"D:/wamp/www/stvision/vision/excel/backup/");//is the path for storing backup files during import process. Change according to server path
define('EXPORT_TIME_LIMIT', 300); //is the additional time given for export/import process.
define('EXPORT_MEM_LIMIT', "256M"); //is the additional memory given for export/import process.
/*End: Constants for excursion export and import*/

/*Start : Constants for Rosters section*/
define('PLUS_ROOT', "/var/www/html/www.plus-ed.com/"); //is the root absolute path for plus-ed.com. Change according to server path
/*End : Constants for Rosters section*/

/*Start: constants for CM view*/
define('CMCSV_PATH', "/var/www/html/www.plus-ed.com/vision_ag/downloads/export_csv/" . time() . "_pax_list.csv"); //is the path for saving CM csv files
define('TICKET_CM_PATH', "/var/www/html/www.plus-ed.com/vision_ag/excel/"); //is the path for saving CM ticket attachments
define('TICKET_BO_PATH', "/var/www/html/www.plus-ed.com/vision_ag/excel/"); //is the path for saving backoffice ticket reply attachments
define('TICKET_CM_DWNLD', "http://www.plus-ed.com/vision_ag/excel/"); //is the path for downloading CM ticket attachments
define('TICKET_BO_DWNLD', "http://www.plus-ed.com/vision_ag/excel/"); //is the path for downloading backoffice ticket reply attachments
define('PAYMENT_CM_PATH', "/var/www/html/www.plus-ed.com/vision_ag/excel/cmDocuments/"); //is the path for saving CM payment documents
define('PAYMENT_CM_DWNLD', "http://www.plus-ed.com/vision_ag/excel/cmDocuments/"); //is the path for downloading CM payment documents
/*End: constants for CM view*/

/*Start: constants for Export GL Report view*/

define('BONUS_EXAM_AMOUNT', 20);
define('EXTRA_REIMBURSEMENT', 10);
define('BONUS_PRESENTAZIONE_PERCENT', 0.07);
define('FEE_ACCOMPAGNAMENTO',320);

/*End: constants for Export GL Report view*/

/* Start: constants for Campus */

define('CAMPUS_IMAGE_PATH', '../teacherApplications/campus/images/');
define('CAMPUS_PDF_PATH', '../teacherApplications/campus/pdf/');
define('CAMPUS_SINGLE_PDF_PATH', '../teacherApplications/campus/single_pdf/');
define('CAMPUS_PRICELIST_PDF_PATH', '../teacherApplications/campus/pricelist_pdf/');

define('EXCURSION_IMAGE_PATH', '../teacherApplications/excursion/images/');
// To upload pdf file for agents section.
define('CAMPUS_AGENTS_SINGLE_PDF_PATH', '../teacherApplications/campus/agents_single_pdf/');

/* End: constants for Campus */

/* Start: constants for Booking availability report */

define('AVAILABILITY_DWNLD', 'downloads/export_csv/allCSVAvailability.csv');
define('WEEKLY_AVAILABILITY_DWNLD', 'downloads/export_weekly_report');

/* End: constants for Booking availability report */

define('EXTRA_EXCURSIONS_AND_ATTRACTIONS_ZIP_FILE', 'downloads/agentsmanuals/Extra_Excursion_and_Attraction_Form.zip');

define('CONTRACT_EMPLOYMENT_SUMMER_STAFF','../teacherApplications/ContractofEmploymentSummerStaff.pdf');
define('NO_REPLY_EMAIL','noreply@plus-ed.com');

define('CATEGORY_PROGRAM_IMAGE_PATH','../teacherApplications/category_program/');
define('CROPPING_ASSETS_PATH','lte/cropping/');
define('CATEGORY_PROGRAM_WIDTH',500);
define('CATEGORY_PROGRAM_HEIGHT',500);
define('CATEGORY_PROGRAM_THUMB_WIDTH',100);
define('CATEGORY_PROGRAM_THUMB_HEIGHT',100);

class BookingStatus{
    static $TBC = 1; // TO BE CONFIRMED
    static $ACTIVE = 2; // ACTIVE
    static $CONFIRMED = 3; // confirmed
    static $REJECTED = 4; // rejected
    static $ELAPSED = 5; // elapsed
}

//Database table names
define('TABLE_USERS' , 'tbl_users');
define('TABLE_PROGRAM' , 'frontweb_program_banner');
define('TABLE_PROGRAM_LANGUAGE' , 'frontweb_program_banner_language');
define('TABLE_LANGUAGE' , 'tbl_language');
define('TABLE_COURSE_MASTER' , 'tbl_course_master');
define('TABLE_COURSE_LANGUAGE' , 'tbl_course_language');
define('TABLE_COURSE_SPECIFICATION' , 'tbl_course_specification');
define('TABLE_COURSE_FEATURE' , 'tbl_course_feature');
define('TABLE_REGION_MASTER' , 'tbl_region_master');
define('TABLE_CENTRE_MASTER' , 'tbl_centre_master');
define('TABLE_PROGRAM_COURSE' , 'tbl_program_course');
define('TABLE_JUNIOR_CENTRE' , 'tbl_junior_centre');
define('TABLE_JUNIOR_CENTRE_PROGRAM' , 'tbl_junior_centre_program');

//Define image location , height , width , thumb details for program banner module images
define('PROGRAM_IMAGE_PATH' , 'uploads/program/');
define('PROGRAM_WIDTH' , 1920);
define('PROGRAM_HEIGHT' , 500);
define('PROGRAM_THUMB_WIDTH' , 250);
define('PROGRAM_THUMB_HEIGHT' , 65);

/* End of file constants.php */
/* Location: ./system/application/config/constants.php */
