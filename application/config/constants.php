<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('BASE_URL', "http://".$_SERVER['HTTP_HOST']."/mcaes/");
define('WEBSITE_URL', "http://".$_SERVER['HTTP_HOST']."/mcaesweb/");

define('PROGRAM_NAME', "MCAES");
define('COMPANY_SHORT_NAME', "MCAES");
define('COMPANY_LONG_NAME', "Manila Cordage Company");
define('COMPANY_ADDRESS', "116 Progress Ave., Carmelray Industial Park 1 Canlubang, Calamba City, Laguna, Philippines 4028");
define('COMPANY_ICON', "");
define('COMPANY_LOGO', "");

define('SIGNATORY_1', "Juan Dela Cruz");
define('SIGNATORY_POS_1', "President");
define('SIGNATORY_2', "Juan Dela Cruz Jr");
define('SIGNATORY_POS_2', "Director");
define('AGENCY_BOX_NO', "00");

define('EMAIL_VALIDATION_PASSWORD_DEFAULT', "mcaes_user");
define('SUPPORT_EMAIL', "admin@mcaes.com.ph");
define('SUPPORT_NAME', "Admin Ako");

define('MR_REQUIRED', TRUE);
define('ENABLE_JAP_PROFILE', TRUE);

/*SMS*/
// define('SMS_PROVIDER', 'globe');
// define('SMS_APP_ID', 'Eez6fkLa8RfA7cxXqqTa6zfazeeMfyBy');
// define('SMS_APP_SECRET', '078ae6b1fdf025d32f8dc60a3cb3eea486a6167ea9e560cbbbd0bc4a668c4e73');
// define('SMS_SHORT_CODE', '21589777');
// define('SMS_SHORT_CODE_ALL', '225659777');
// define('SMS_ACC_TOKEN_URL', 'https://developer.globelabs.com.ph/oauth/access_token');
// define('SMS_WEB_SUB_URL', 'http://developer.globelabs.com.ph/dialog/oauth/'.SMS_APP_ID);
// define('SMS_SENDING_URL', 'https://devapi.globelabs.com.ph/smsmessaging/v1/outbound/'.SMS_SHORT_CODE.'/requests?access_token=');
// define('SMS_CHAR_LIMIT', 160);
// define('SMS_FOOTER', 'To reply, type {username} [space] your message and send to '.SMS_SHORT_CODE_ALL);

/*SMS ALBATRA*/
// define('SMS_PROVIDER', 'globe');
// define('SMS_APP_ID', 'pRkxsGLeEgCMLiKnR9ceqkCGeRXks8pj');
// define('SMS_APP_SECRET', 'cff94d67a7224909cab75cef52bc6c8ac81050a9383aa5955bc34e2ccd910e2c');
// define('SMS_SHORT_CODE', '21586228');
// define('SMS_SHORT_CODE_ALL', '225656228');
// define('SMS_ACC_TOKEN_URL', 'https://developer.globelabs.com.ph/oauth/access_token');
// define('SMS_WEB_SUB_URL', 'http://developer.globelabs.com.ph/dialog/oauth/'.SMS_APP_ID);
// define('SMS_SENDING_URL', 'https://devapi.globelabs.com.ph/smsmessaging/v1/outbound/'.SMS_SHORT_CODE.'/requests?access_token=');
// define('SMS_CHAR_LIMIT', 160);
// define('SMS_FOOTER', 'To reply, type {username} [space] your message and send to '.SMS_SHORT_CODE_ALL);