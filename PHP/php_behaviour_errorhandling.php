<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_ERRORHANDLING - BEGIN
// OFFLINE | PHP_BEHAVIOUR_ERRORHANDLING_PHP_ERRORMSG_VARIABLE - string php_behaviour_errorhandling_php_errormsg_variable()
// PHP_BEHAVIOUR_ERRORHANDLING_DEBUG_BACKTRACE - array php_behaviour_errorhandling_debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0)
// OFFLINE | PHP_BEHAVIOUR_ERRORHANDLING_DEBUG_PRINT_BACKTRACE - void php_behaviour_errorhandling_debug_print_backtrace(int $options = 0, int $limit = 0)
// OFFLINE | PHP_BEHAVIOUR_ERRORHANDLING_ERROR_CLEAR_LAST - void php_behaviour_errorhandling_error_clear_last()
// OFFLINE | PHP_BEHAVIOUR_ERRORHANDLING_ERROR_GET_LAST - array php_behaviour_errorhandling_error_get_last()
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_LOG - bool php_behaviour_errorhandling_error_log(string $message, int $message_type = 0, string $destination = null, string $additional_headers = null)
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_REPORTING - int php_behaviour_errorhandling_error_reporting(int $error_level = null)
// PHP_BEHAVIOUR_ERRORHANDLING_RESTORE_ERROR_HANDLER - bool php_behaviour_errorhandling_restore_error_handler()
// OFFLINE | PHP_BEHAVIOUR_ERRORHANDLING_RESTORE_EXCEPTION_HANDLER - bool php_behaviour_errorhandling_restore_exception_handler()
// PHP_BEHAVIOUR_ERRORHANDLING_SET_ERROR_HANDLER - callable php_behaviour_errorhandling_set_error_handler(callable $callback, int $error_levels = E_ALL)
// OFFLINE | PHP_BEHAVIOUR_ERRORHANDLING_SET_EXCEPTION_HANDLER - callable php_behaviour_errorhandling_set_exception_handler(callable $callback)
// PHP_BEHAVIOUR_ERRORHANDLING_TRIGGER_ERROR - bool php_behaviour_errorhandling_trigger_error(string $message, int $error_level = E_USER_NOTICE)
// PHP_BEHAVIOUR_ERRORHANDLING_USER_ERROR - bool php_behaviour_errorhandling_user_error(string $message, int $error_level = E_USER_NOTICE)
// PHP_BEHAVIOUR_ERRORHANDLING - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING VARIABLES (1)
// OFFLINE | $php_errormsg - PHP_4, PHP_5, PHP_7
// ============================== USING FUNCTIONS (12)
// debug_backtrace() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | debug_print_backtrace() - PHP_5, PHP_7, PHP_8
// OFFLINE | error_clear_last() - PHP_7, PHP_8
// OFFLINE | error_get_last() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// error_log() - PHP_4, PHP_5, PHP_7, PHP_8
// error_reporting() - PHP_4, PHP_5, PHP_7, PHP_8
// restore_error_handler() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// OFFLINE | restore_exception_handler() - PHP_5, PHP_7, PHP_8
// set_error_handler() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// OFFLINE | set_exception_handler() - PHP_5, PHP_7, PHP_8
// trigger_error() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// user_error() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (6)
// string
// array
// int
// void
// bool
// callable
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_ERRORHANDLING  
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / Error Handling - Error Handling and Logging
// URL: https://www.php.net/manual/en/book.errorfunc.php
// ============================== DESCRIPTION
// ERROR_HANDLING_AND_LOGGING
// 
// ERROR_HANDLING_AND_LOGGING - BEGIN
// Error Handling and Logging
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// ERROR_HANDLING_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// These are functions dealing with error handling and logging. They allow you to define your own error handling rules, as well as modify the way the errors can be logged. This allows you to change and enhance error reporting to suit your needs.
// With the logging functions, you can send messages directly to other machines, to an email (or email to pager gateway!), to system logs, etc., so you can selectively log and monitor the most important parts of your applications and websites.
// The error reporting functions allow you to customize what level and kind of error feedback is given, ranging from simple notices to customized functions returned during errors.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/intro.errorfunc.php
// INTRODUCTION - END
// 
// INSTALLING_CONFIGURING - BEGIN
// Installing/Configuring
// 
// REQUIREMENTS
// INSTALLATION
// RUNTIME_CONFIGURATION
// RESOURCE_TYPES
// 
// REQUIREMENTS - BEGIN
// Requirements
// 
// No external libraries are needed to build this extension.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Errors and Logging Configuration Options
// Name                   | Default    | Changeable     | Changelog
// error_reporting        | NULL       | PHP_INI_ALL    |
// display_errors         | "1"        | PHP_INI_ALL    |
// display_startup_errors | "1"        | PHP_INI_ALL    | Prior to PHP 8.0.0, the default value was "0".
// log_errors             | "0"        | PHP_INI_ALL    |
// log_errors_max_len     | "1024"     | PHP_INI_ALL    | Had no effect as of PHP 8.0.0, removed as of PHP 8.1.0.
// ignore_repeated_errors | "0"        | PHP_INI_ALL    |
// ignore_repeated_source | "0"        | PHP_INI_ALL    |
// report_memleaks        | "1"        | PHP_INI_ALL    |
// track_errors           | "0"        | PHP_INI_ALL    | Deprecated as of PHP 7.2.0, removed as of PHP 8.0.0.
// html_errors            | "1"        | PHP_INI_ALL    |
// xmlrpc_errors          | "0"        | PHP_INI_SYSTEM |
// xmlrpc_error_number    | "0"        | PHP_INI_ALL    |
// docref_root            | ""         | PHP_INI_ALL    |
// docref_ext             | ""         | PHP_INI_ALL    |
// error_prepend_string   | NULL       | PHP_INI_ALL    |
// error_append_string    | NULL       | PHP_INI_ALL    |
// error_log              | NULL       | PHP_INI_ALL    |
// error_log_mode         | 0o644      | PHP_INI_ALL    | Available as of PHP 8.2.0
// syslog.facility        | "LOG_USER" | PHP_INI_SYSTEM | Available as of PHP 7.3.0.
// syslog.filter          | "no-ctrl"  | PHP_INI_ALL    | Available as of PHP 7.3.0.
// syslog.ident           | "php"      | PHP_INI_SYSTEM | Available as of PHP 7.3.0.
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// error_reporting int         - Set the error reporting level. The parameter is either an integer representing a bit field, or named constants. The error_reporting levels and constants are described in Predefined Constants, and in php.ini. To set at runtime, use the error_reporting() function. See also the display_errors directive.
// The default value is E_ALL.
// Prior to PHP 8.0.0, the default value was: E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED. This means diagnostics of level E_NOTICE, E_STRICT and E_DEPRECATED were not shown.
//  Note: PHP Constants outside of PHP
//  Using PHP Constants outside of PHP, like in httpd.conf, will have no useful meaning so in such cases the int values are required. And since error levels will be added over time, the maximum value (for E_ALL) will likely change. So in place of E_ALL consider using a larger value to cover all bit fields from now and well into the future, a numeric value like 2147483647 (includes all errors, not just E_ALL).
// display_errors string       - This determines whether errors should be printed to the screen as part of the output or if they should be hidden from the user.
// Value "stderr" sends the errors to stderr instead of stdout.
// Note: This is a feature to support your development and should never be used on production systems (e.g. systems connected to the internet).
// Note: Although display_errors may be set at runtime (with ini_set()), it won't have any effect if the script has fatal errors. This is because the desired runtime action does not get executed.
// display_startup_errors bool - Even when display_errors is on, errors that occur during PHP's startup sequence are not displayed. It's strongly recommended to keep display_startup_errors off, except for debugging.
// log_errors bool             - Tells whether script error messages should be logged to the server's error log or error_log. This option is thus server-specific.
// Note: You're strongly advised to use error logging in place of error displaying on production web sites.
// log_errors_max_len int      - Set the maximum length of log_errors in bytes. In error_log information about the source is added. The default is 1024 and 0 allows to not apply any maximum length at all. This length is applied to logged errors, displayed errors and also to $php_errormsg, but not to explicitly called functions such as error_log().
// When an int is used, the value is measured in bytes. Shorthand notation, as described in this FAQ, may also be used.
// ignore_repeated_errors bool - Do not log repeated messages. Repeated errors must occur in the same file on the same line unless ignore_repeated_source is set true.
// ignore_repeated_source bool - Ignore source of message when ignoring repeated messages. When this setting is On you will not log errors with repeated messages from different files or sourcelines.
// report_memleaks bool        - If this parameter is set to On (the default), this parameter will show a report of memory leaks detected by the Zend memory manager. This report will be sent to stderr on Posix platforms. On Windows, it will be sent to the debugger using OutputDebugString() and can be viewed with tools like > DbgView. This parameter only has effect in a debug build and if error_reporting includes E_WARNING in the allowed list.
// track_errors bool           - If enabled, the last error message will always be present in the variable $php_errormsg.
// html_errors bool            - If enabled, error messages will include HTML tags. The format for HTML errors produces clickable messages that direct the user to a page describing the error or function in causing the error. These references are affected by docref_root and docref_ext.
// If disabled, error message will be solely plain text.
// xmlrpc_errors bool          - If enabled, turns off normal error reporting and formats errors as XML-RPC error message.
// xmlrpc_error_number int     - Used as the value of the XML-RPC faultCode element.
// docref_root string          - The new error format contains a reference to a page describing the error or function causing the error. In case of manual pages you can download the manual in your language and set this ini directive to the URL of your local copy. If your local copy of the manual can be reached by "/manual/" you can simply use docref_root=/manual/. Additional you have to set docref_ext to match the fileextensions of your copy docref_ext=.html. It is possible to use external references. For example you can use docref_root=http://manual/en/ or docref_root="http://landonize.it/?how=url&theme=classic&filter=Landon &url=http%3A%2F%2Fwww.php.net%2F"
// Most of the time you want the docref_root value to end with a slash "/". But see the second example above which does not have nor need it.
// Note: This is a feature to support your development since it makes it easy to lookup a function description. However it should never be used on production systems (e.g. systems connected to the internet).
// docref_ext string           - See docref_root.
// Note: The value of docref_ext must begin with a dot ".".
// error_prepend_string string - String to output before an error message. Only used when the error message is displayed on screen. The main purpose is to be able to prepend additional HTML markup to the error message.
// error_append_string string  - String to output after an error message. Only used when the error message is displayed on screen. The main purpose is to be able to append additional HTML markup to the error message.
// error_log string            - Name of the file where script errors should be logged. The file should be writable by the web server's user. If the special value syslog is used, the errors are sent to the system logger instead. On Unix, this means syslog(3) and on Windows it means the event log. See also: syslog(). If this directive is not set, errors are sent to the SAPI error logger. For example, it is an error log in Apache or stderr in CLI. See also error_log().
// error_log_mode int          - File mode for the file described set in error_log.
// syslog.facility string      - Specifies what type of program is logging the message. Only effective if error_log is set to "syslog".
// syslog.filter string        - Specifies the filter type to filter the logged messages. Allowed characters are passed unmodified; all others are written in their hexadecimal representation prefixed with \x.
// * all     – the logged string will be split at newline characters, and all characters are passed unaltered
// * ascii   – the logged string will be split at newline characters, and any non-printable 7-bit ASCII characters will be escaped
// * no-ctrl – the logged string will be split at newline characters, and any non-printable characters will be escaped
// * raw     – all characters are passed to the system logger unaltered, without splitting at newlines (identical to PHP before 7.3)
// This setting will affect logging via error_log set to "syslog" and calls to syslog().
// Note: The raw filter type is available as of PHP 7.3.8 and PHP 7.4.0.
// This directive is not supported on Windows.
// syslog.ident string         – Specifies the ident string which is prepended to every message. Only effective if error_log is set to "syslog".
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are always available as part of the PHP core.
// Note: You may use these constant names in php.ini but not outside of PHP, like in httpd.conf, where you'd use the bitmask values instead.
// 
// Errors and Logging
// Value  | Constant                  - Description                                                ; Note
// 1      | E_ERROR (int)             - Fatal run-time errors. These indicate errors that can not be recovered from, such as a memory allocation problem. Execution of the script is halted. ;
// 2      | E_WARNING (int)           - Run-time warnings (non-fatal errors). Execution of the script is not halted. ;
// 4      | E_PARSE (int)             - Compile-time parse errors. Parse errors should only be generated by the parser. ;
// 8      | E_NOTICE (int)            - Run-time notices. Indicate that the script encountered something that could indicate an error, but could also happen in the normal course of running a script. ;
// 16     | E_CORE_ERROR (int)        - Fatal errors that occur during PHP's initial startup. This is like an E_ERROR, except it is generated by the core of PHP. ;
// 32     | E_CORE_WARNING (int)      - Warnings (non-fatal errors) that occur during PHP's initial startup. This is like an E_WARNING, except it is generated by the core of PHP. ;
// 64     | E_COMPILE_ERROR (int)     - Fatal compile-time errors. This is like an E_ERROR, except it is generated by the Zend Scripting Engine. ;
// 128    | E_COMPILE_WARNING (int)   - Compile-time warnings (non-fatal errors). This is like an E_WARNING, except it is generated by the Zend Scripting Engine. ;
// 256    | E_USER_ERROR (int)        - User-generated error message. This is like an E_ERROR, except it is generated in PHP code by using the PHP function trigger_error(). ;
// 512    | E_USER_WARNING (int)      - User-generated warning message. This is like an E_WARNING, except it is generated in PHP code by using the PHP function trigger_error(). ;
// 1024   | E_USER_NOTICE (int)       - User-generated notice message. This is like an E_NOTICE, except it is generated in PHP code by using the PHP function trigger_error(). ;
// 2048   | E_STRICT (int)            - Enable to have PHP suggest changes to your code which will ensure the best interoperability and forward compatibility of your code. ;
// 4096   | E_RECOVERABLE_ERROR (int) - Catchable fatal error. It indicates that a probably dangerous error occurred, but did not leave the Engine in an unstable state. If the error is not caught by a user defined handle (see also set_error_handler()), the application aborts as it was an E_ERROR. ;
// 8192   | E_DEPRECATED (int)        - Run-time notices. Enable this to receive warnings about code that will not work in future versions. ;
// 16384  | E_USER_DEPRECATED (int)   - User-generated warning message. This is like an E_DEPRECATED, except it is generated in PHP code by using the PHP function trigger_error(). ;
// 32767  | E_ALL (int)               - All errors, warnings, and notices.                         ;
// 
// The above values (either numerical or symbolic) are used to build up a bitmask that specifies which errors to report. You can use the bitwise operators to combine these values or mask out certain types of errors. Note that only '|', '~', '!', '^' and '&' will be understood within php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// Below we can see an example of using the error handling capabilities in PHP. We define an error handling function which logs the information into a file (using an XML format), and e-mails the developer if a critical error in the logic happens.
// 
// [example]
// Example #1 Using error handling in a script
// [php]
// // we will do our own error handling
// error_reporting(0);
// 
// // user defined error handling function
// function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars) 
// {
//     // timestamp for the error entry
//     $dt = date("Y-m-d H:i:s (T)");
// 
//     // define an assoc array of error string
//     // in reality the only entries we should
//     // consider are E_WARNING, E_NOTICE, E_USER_ERROR,
//     // E_USER_WARNING and E_USER_NOTICE
//     $errortype = array (
//                 E_ERROR              => 'Error',
//                 E_WARNING            => 'Warning',
//                 E_PARSE              => 'Parsing Error',
//                 E_NOTICE             => 'Notice',
//                 E_CORE_ERROR         => 'Core Error',
//                 E_CORE_WARNING       => 'Core Warning',
//                 E_COMPILE_ERROR      => 'Compile Error',
//                 E_COMPILE_WARNING    => 'Compile Warning',
//                 E_USER_ERROR         => 'User Error',
//                 E_USER_WARNING       => 'User Warning',
//                 E_USER_NOTICE        => 'User Notice',
//                 E_STRICT             => 'Runtime Notice',
//                 E_RECOVERABLE_ERROR  => 'Catchable Fatal Error'
//                 );
//     // set of errors for which a var trace will be saved
//     $user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);
//     
//     $err = "<errorentry>\n";
//     $err .= "\t<datetime>" . $dt . "</datetime>\n";
//     $err .= "\t<errornum>" . $errno . "</errornum>\n";
//     $err .= "\t<errortype>" . $errortype[$errno] . "</errortype>\n";
//     $err .= "\t<errormsg>" . $errmsg . "</errormsg>\n";
//     $err .= "\t<scriptname>" . $filename . "</scriptname>\n";
//     $err .= "\t<scriptlinenum>" . $linenum . "</scriptlinenum>\n";
// 
//     if (in_array($errno, $user_errors)) {
//         $err .= "\t<vartrace>" . wddx_serialize_value($vars, "Variables") . "</vartrace>\n";
//     }
//     $err .= "</errorentry>\n\n";
//     
//     // for testing
//     // echo $err;
// 
//     // save to the error log, and e-mail me if there is a critical user error
//     error_log($err, 3, "/usr/local/php4/error.log");
//     if ($errno == E_USER_ERROR) {
//         mail("phpdev@example.com", "Critical User Error", $err);
//     }
// }
// 
// 
// function distance($vect1, $vect2) 
// {
//     if (!is_array($vect1) || !is_array($vect2)) {
//         trigger_error("Incorrect parameters, arrays expected", E_USER_ERROR);
//         return NULL;
//     }
// 
//     if (count($vect1) != count($vect2)) {
//         trigger_error("Vectors need to be of the same size", E_USER_ERROR);
//         return NULL;
//     }
// 
//     for ($i=0; $i<count($vect1); $i++) {
//         $c1 = $vect1[$i]; $c2 = $vect2[$i];
//         $d = 0.0;
//         if (!is_numeric($c1)) {
//             trigger_error("Coordinate $i in vector 1 is not a number, using zero", 
//                             E_USER_WARNING);
//             $c1 = 0.0;
//         }
//         if (!is_numeric($c2)) {
//             trigger_error("Coordinate $i in vector 2 is not a number, using zero", 
//                             E_USER_WARNING);
//             $c2 = 0.0;
//         }
//         $d += $c2*$c2 - $c1*$c1;
//     }
//     return sqrt($d);
// }
// 
// $old_error_handler = set_error_handler("userErrorHandler");
// 
// // undefined constant, generates a warning
// $t = I_AM_NOT_DEFINED;
// 
// // define some "vectors"
// $a = array(2, 3, "foo");
// $b = array(5.5, 4.3, -1.6);
// $c = array(1, -3);
// 
// // generate a user error
// $t1 = distance($c, $b) . "\n";
// 
// // generate another user error
// $t2 = distance($b, "i am not an array") . "\n";
// 
// // generate a warning
// $t3 = distance($a, $b) . "\n";
// 
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/errorfunc.examples.php
// EXAMPLES - END
// 
// ERROR_HANDLING_FUNCTIONS - BEGIN
// Error Handling Functions
// 
// Table of Contents
// * debug_backtrace           - Generates a backtrace
// * debug_print_backtrace     - Prints a backtrace
// * error_clear_last          - Clear the most recent error
// * error_get_last            - Get the last occurred error
// * error_log                 - Send an error message to the defined error handling routines
// * error_reporting           - Sets which PHP errors are reported
// * restore_error_handler     - Restores the previous error handler function
// * restore_exception_handler - Restores the previously defined exception handler function
// * set_error_handler         - Sets a user-defined error handler function
// * set_exception_handler     - Sets a user-defined exception handler function
// * trigger_error             - Generates a user-level error/warning/notice message
// * user_error                - Alias of trigger_error
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/ref.errorfunc.php
// ERROR_HANDLING_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/book.errorfunc.php
// ERROR_HANDLING_AND_LOGGING - END
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_PHP_ERRORMSG_VARIABLE
// ============================== OFFLINE
// ============================== ABOUT
// The previous error message.
// 
// Warning: This feature has been DEPRECATED as of PHP 7.2.0. Relying on this feature is highly discouraged.
// 
// Use error_get_last() instead.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// $php_errormsg - PHP_4, PHP_5, PHP_7
// ============================== CODE
/*
function php_behaviour_errorhandling_php_errormsg_variable()
{
$return_php_errormsg = null;

// ========== PHP_ERRORMSG - BEGIN
// ===== ABOUT
// The previous error message
// Warning: This feature has been DEPRECATED as of PHP 7.2.0. Relying on this feature is highly discouraged.
// Use error_get_last() instead.
// ===== DESCRIPTION
// $php_errormsg is a variable containing the text of the last error message generated by PHP. This variable will only be available within the scope in which the error occurred, and only if the track_errors configuration option is turned on (it defaults to off).
// Warning: If a user defined error handler (set_error_handler()) is set $php_errormsg is only set if the error handler returns false.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7
// ===== SYNTAX
// ===== CODE
$return_php_errormsg = $php_errormsg;

// Changelog
// Version - Description
// 8.0.0   - Directive track_errors which caused $php_errormsg to be available has been removed.
// 7.2.0   - Directive track_errors which caused $php_errormsg to be available has been deprecated.
// 
// [examples]
// Examples
// [example]
// Example #1 $php_errormsg example
// [php]
// @strpos();
// echo $php_errormsg;
// [/php]
// The above example will output something similar to:
// [result]
// Wrong parameter count for strpos()
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/reserved.variables.phperrormsg.php
// ========== PHP_ERRORMSG - END

// SYNTAX:
// string $php_errormsg

return $return_php_errormsg; // string
}
*/
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_PHP_ERRORMSG_VARIABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_DEBUG_BACKTRACE
// ============================== PUBLIC
// ============================== ABOUT
// Generates a backtrace.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// debug_backtrace() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// DEBUG_BACKTRACE_PROVIDE_OBJECT - debug_backtrace()
// ============================== CODE
function php_behaviour_errorhandling_debug_backtrace($options = DEBUG_BACKTRACE_PROVIDE_OBJECT, $limit = 0)
{
$return_debug_backtrace = null;

// ========== DEBUG_BACKTRACE - BEGIN
// ===== ABOUT
// Generates a backtrace
// ===== DESCRIPTION
// debug_backtrace() generates a PHP backtrace.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array
// ===== CODE
$return_debug_backtrace = debug_backtrace(

$options, // int options - This parameter is a bitmask for the following options:
// debug_backtrace() options
// DEBUG_BACKTRACE_PROVIDE_OBJECT - Whether or not to populate the "object" index.
// DEBUG_BACKTRACE_IGNORE_ARGS    - Whether or not to omit the "args" index, and thus all the function/method arguments, to save memory.
//  Note:
//  There are four possible combinations:
//  debug_backtrace() options
//  debug_backtrace()	                                                          | Populates both indexes
//  debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT)                               |
//  debug_backtrace(1)                                                            |
//  debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS & DEBUG_BACKTRACE_PROVIDE_OBJECT) | Omits index "object".
//  debug_backtrace(0)                                                            |
//  debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)                                  | Omits index "object" and index "args".
//  debug_backtrace(2)                                                            |

$limit // int limit - This parameter can be used to limit the number of stack frames returned. By default (limit=0) it returns all stack frames.

); // Return Values
// Returns an array of associative arrays. The possible returned elements are as follows:
// Possible returned elements from debug_backtrace()
// Name     | Type   | Description
// function | string | The current function name. See also __FUNCTION__.
// line     | int    | The current line number. See also __LINE__.
// file     | string | The current file name. See also __FILE__.
// class    | string | The current class name. See also __CLASS__
// object   | object | The current object.
// type     | string | The current call type. If a method call, "->" is returned. If a static method call, "::" is returned. If a function call, nothing is returned.
// args     | array  | If inside a function, this lists the functions arguments. If inside an included file, this lists the included file name(s).
// 
// [examples]
// Examples
// [example]
// Example #1 debug_backtrace() example
// [code]
// [php]
// filename: /tmp/a.php
// 
// function a_test($str)
// {
//     echo "\nHi: $str";
//     var_dump(debug_backtrace());
// }
// 
// a_test('friend');
// [/php]
// [php]
// filename: /tmp/b.php
// include_once '/tmp/a.php';
// [/php]
// [/code]
// Results similar to the following when executing /tmp/b.php:
// [result]
// Hi: friend
// array(2) {
// [0]=>
// array(4) {
//     ["file"] => string(10) "/tmp/a.php"
//     ["line"] => int(10)
//     ["function"] => string(6) "a_test"
//     ["args"]=>
//     array(1) {
//       [0] => &string(6) "friend"
//     }
// }
// [1]=>
// array(4) {
//     ["file"] => string(10) "/tmp/b.php"
//     ["line"] => int(2)
//     ["args"] =>
//     array(1) {
//       [0] => string(10) "/tmp/a.php"
//     }
//     ["function"] => string(12) "include_once"
//   }
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.debug-backtrace.php
// ========== DEBUG_BACKTRACE - END

// SYNTAX:
// array debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0)

return $return_debug_backtrace; // array
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_DEBUG_BACKTRACE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_DEBUG_PRINT_BACKTRACE
// ============================== OFFLINE
// ============================== ABOUT
// Prints a backtrace.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// debug_print_backtrace() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_errorhandling_debug_print_backtrace($options = 0, $limit = 0)
{

// ========== DEBUG_PRINT_BACKTRACE - BEGIN
// ===== ABOUT
// Prints a backtrace
// ===== DESCRIPTION
// debug_print_backtrace() prints a PHP backtrace. It prints the function calls, included/required files and eval()ed stuff.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// debug_print_backtrace(int $options = 0, int $limit = 0): void
// ===== CODE
debug_print_backtrace(

$options, // int options - This parameter is a bitmask for the following options:
// debug_print_backtrace() options
// DEBUG_BACKTRACE_IGNORE_ARGS - Whether or not to omit the "args" index, and thus all the function/method arguments, to save memory.

$limit // int limit - This parameter can be used to limit the number of stack frames printed. By default (limit=0) it prints all stack frames.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 debug_print_backtrace() example
// [code]
// [php]
// // include.php file
// 
// function a() {
//     b();
// }
// 
// function b() {
//     c();
// }
// 
// function c(){
//     debug_print_backtrace();
// }
// 
// a();
// 
// [/php]
// [php]
// // test.php file
// // this is the file you should run
// 
// include 'include.php';
// [/php]
// [/code]
// The above example will output something similar to:
// [result]
// #0  c() called at [/tmp/include.php:10]
// #1  b() called at [/tmp/include.php:6]
// #2  a() called at [/tmp/include.php:17]
// #3  include(/tmp/include.php) called at [/tmp/test.php:3]
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.debug-print-backtrace.php
// ========== DEBUG_PRINT_BACKTRACE - END

// SYNTAX:
// void debug_print_backtrace(int $options = 0, int $limit = 0)

// Return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_DEBUG_PRINT_BACKTRACE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_CLEAR_LAST
// ============================== OFFLINE
// ============================== ABOUT
// Clear the most recent error.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// error_clear_last() - PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_errorhandling_error_clear_last()
{

// ========== ERROR_CLEAR_LAST - BEGIN
// ===== ABOUT
// Clear the most recent error
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// error_clear_last(): void
// ===== CODE
error_clear_last(

// This function has no parameters.

); // Return Values
// Clears the most recent errors, making it unable to be retrieved with error_get_last().
// 
// [examples]
// Examples
// [example]
// Example #1 An error_clear_last() example
// [php]
// var_dump(error_get_last());
// error_clear_last();
// var_dump(error_get_last());
// 
// @$a = $b;
// 
// var_dump(error_get_last());
// error_clear_last();
// var_dump(error_get_last());
// [/php]
// The above example will output something similar to:
// [result]
// NULL
// NULL
// array(4) {
//   ["type"]=>
//   int(8)
//   ["message"]=>
//   string(21) "Undefined variable: b"
//   ["file"]=>
//   string(9) "%s"
//   ["line"]=>
//   int(6)
// }
// NULL
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.error-clear-last.php
// ========== ERROR_CLEAR_LAST - END

// SYNTAX:
// void error_clear_last()

// Return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_CLEAR_LAST
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_GET_LAST
// ============================== OFFLINE
// ============================== ABOUT
// Get the last occurred error.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// error_get_last() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_errorhandling_error_get_last()
{
$return_error_get_last = null;

// ========== ERROR_GET_LAST - BEGIN
// ===== ABOUT
// Get the last occurred error
// ===== DESCRIPTION
// Gets information about the last error that occurred.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// error_get_last(): ?array
// ===== CODE
$return_error_get_last = error_get_last(

// This function has no parameters.

); // Return Values
// Returns an associative array describing the last error with keys "type", "message", "file" and "line". If the error has been caused by a PHP internal function then the "message" begins with its name. Returns null if there hasn't been an error yet.
// 
// [examples]
// Examples
// [example]
// Example #1 An error_get_last() example
// [php]
// echo $a;
// print_r(error_get_last());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [type] => 8
//     [message] => Undefined variable: a
//     [file] => C:\WWW\index.php
//     [line] => 2
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.error-get-last.php
// ========== ERROR_GET_LAST - END

// SYNTAX:
// array error_get_last()

return $return_error_get_last; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_GET_LAST
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_LOG
// ============================== PUBLIC
// ============================== ABOUT
// Send an error message to the defined error handling routines.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// error_log() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_errorhandling_error_log($message, $message_type = 0, $destination = null, $additional_headers = null)
{
$return_error_log = false;

// ========== ERROR_LOG - BEGIN
// ===== ABOUT
// Send an error message to the defined error handling routines
// ===== DESCRIPTION
// Sends an error message to the web server's error log or to a file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// error_log(
//    string $message,
//    int $message_type = 0,
//    ?string $destination = null,
//    ?string $additional_headers = null
// ): bool
// ===== CODE
$return_error_log = error_log(

$message, // string message - The error message that should be logged.

$message_type, // int message_type - Says where the error should go. The possible message types are as follows:
// 
// error_log() log types
// 0 - message is sent to PHP's system logger, using the Operating System's system logging mechanism or a file, depending on what the error_log configuration directive is set to. This is the default option.
// 1 - message is sent by email to the address in the destination parameter. This is the only message type where the fourth parameter, additional_headers is used.
// 2 - No longer an option.
// 3 - message is appended to the file destination. A newline is not automatically added to the end of the message string.
// 4 - message is sent directly to the SAPI logging handler.

$destination, // string destination - The destination. Its meaning depends on the message_type parameter as described above.

$additional_headers // string additional_headers - The extra headers. It's used when the message_type parameter is set to 1. This message type uses the same internal function as mail() does.

); // Return Values
// Returns true on success or false on failure. If message_type is zero, this function always returns true, regardless of whether the error could be logged or not.
// 
// Changelog
// Version - Description
// 8.0.0   - destination and additional_headers are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 error_log() examples
// [php]
// // Send notification through the server log if we can not
// // connect to the database.
// if (!Ora_Logon($username, $password)) {
//     error_log("Oracle database not available!", 0);
// }
// 
// // Notify administrator by email if we run out of FOO
// if (!($foo = allocate_new_foo())) {
//     error_log("Big trouble, we're all out of FOOs!", 1,
//                "operator@example.com");
// }
// 
// // another way to call error_log():
// error_log("You messed up!", 3, "/var/tmp/my-errors.log");
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: error_log() is not binary safe. message will be truncated by null character.
// Tip: message should not contain null character. Note that message may be sent to file, mail, syslog, etc. Use appropriate conversion/escape function, base64_encode(), rawurlencode() or addslashes() before calling error_log().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.error-log.php
// ========== ERROR_LOG - END

// SYNTAX:
// bool error_log(string $message, int $message_type = 0, string $destination = null, string $additional_headers = null)

return $return_error_log; // bool
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_LOG
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_REPORTING
// ============================== PUBLIC
// ============================== ABOUT
// Sets which PHP errors are reported.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// error_reporting() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_errorhandling_error_reporting($error_level = null)
{
$return_error_reporting = 0;

// ========== ERROR_REPORTING - BEGIN
// ===== ABOUT
// Sets which PHP errors are reported
// ===== DESCRIPTION
// The error_reporting() function sets the error_reporting directive at runtime. PHP has many levels of errors, using this function sets that level for the duration (runtime) of your script. If the optional error_level is not set, error_reporting() will just return the current error reporting level.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// error_reporting(?int $error_level = null): int
// ===== CODE
$return_error_reporting = error_reporting(

$error_level // int error_level - The new error_reporting level. It takes on either a bitmask, or named constants. Using named constants is strongly encouraged to ensure compatibility for future versions. As error levels are added, the range of integers increases, so older integer-based error levels will not always behave as expected.
// The available error level constants and the actual meanings of these error levels are described in the predefined constants.

); // Return Values
// Returns the error_reporting level, before it is changed to error_level.
// Note: The error control @-operator changes the error_level during error handling.
// 
// Changelog
// Version - Description
// 8.0.0   - error_level is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 error_reporting() examples
// [php]
// 
// // Turn off all error reporting
// error_reporting(0);
// 
// // Report simple running errors
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// 
// // Reporting E_NOTICE can be good too (to report uninitialized
// // variables or catch variable name misspellings ...)
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
// 
// // Report all errors except E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);
// 
// // Report all PHP errors
// error_reporting(E_ALL);
// 
// // Report all PHP errors
// error_reporting(-1);
// 
// // Same as error_reporting(E_ALL);
// ini_set('error_reporting', E_ALL);
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Tip: Passing in the value -1 will show every possible error, even when new levels and constants are added in future PHP versions. The behavior is equivalent to passing E_ALL constant.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.error-reporting.php
// ========== ERROR_REPORTING - END

// SYNTAX:
// int error_reporting(int $error_level = null)

return $return_error_reporting; // int
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_ERROR_REPORTING
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_RESTORE_ERROR_HANDLER
// ============================== PUBLIC
// ============================== ABOUT
// Restores the previous error handler function.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// restore_error_handler() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_errorhandling_restore_error_handler()
{
$return_restore_error_handler = false;

// ========== RESTORE_ERROR_HANDLER - BEGIN
// ===== ABOUT
// Restores the previous error handler function
// ===== DESCRIPTION
// Used after changing the error handler function using set_error_handler(), to revert to the previous error handler (which could be the built-in or a user defined function).
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// restore_error_handler(): true
// ===== CODE
$return_restore_error_handler = restore_error_handler(

// This function has no parameters.

); // Return Values
// Always returns true.
// 
// [examples]
// Examples
// [example]
// Example #1 restore_error_handler() example
// Decide if unserialize() caused an error, then restore the original error handler.
// [php]
// function unserialize_handler($errno, $errstr)
// {
//     echo "Invalid serialized value.\n";
// }
// 
// $serialized = 'foo';
// set_error_handler('unserialize_handler');
// $original = unserialize($serialized);
// restore_error_handler();
// [/php]
// The above example will output:
// [result]
// Invalid serialized value.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.restore-error-handler.php
// ========== RESTORE_ERROR_HANDLER - END

// SYNTAX:
// bool restore_error_handler()

return $return_restore_error_handler; // bool
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_RESTORE_ERROR_HANDLER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_RESTORE_EXCEPTION_HANDLER
// ============================== OFFLINE
// ============================== ABOUT
// Restores the previously defined exception handler function.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// restore_exception_handler() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_errorhandling_restore_exception_handler()
{
$return_restore_exception_handler = false;

// ========== RESTORE_EXCEPTION_HANDLER - BEGIN
// ===== ABOUT
// Restores the previously defined exception handler function
// ===== DESCRIPTION
// Used after changing the exception handler function using set_exception_handler(), to revert to the previous exception handler (which could be the built-in or a user defined function).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// restore_exception_handler(): true
// ===== CODE
$return_restore_exception_handler = restore_exception_handler(

// This function has no parameters.

); // Return Values
// Always returns true.
// 
// [examples]
// Examples
// [example]
// Example #1 restore_exception_handler() example
// [php]
//     function exception_handler_1(Exception $e)
//     {
//         echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
//     }
// 
//     function exception_handler_2(Exception $e)
//     {
//         echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
//     }
// 
//     set_exception_handler('exception_handler_1');
//     set_exception_handler('exception_handler_2');
// 
//     restore_exception_handler();
// 
//     throw new Exception('This triggers the first exception handler...');
// [/php]
// The above example will output:
// [result]
// [exception_handler_1] This triggers the first exception handler...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.restore-exception-handler.php
// ========== RESTORE_EXCEPTION_HANDLER - END

// SYNTAX:
// bool restore_exception_handler()

return $return_restore_exception_handler; // bool
}
*/
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_RESTORE_EXCEPTION_HANDLER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_SET_ERROR_HANDLER
// ============================== PUBLIC
// ============================== ABOUT
// Sets a user-defined error handler function.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// set_error_handler() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// E_ALL - set_error_handler()
// ============================== CODE
function php_behaviour_errorhandling_set_error_handler($callback, $error_levels = E_ALL)
{
$return_set_error_handler = null;

// ========== SET_ERROR_HANDLER - BEGIN
// ===== ABOUT
// Sets a user-defined error handler function
// ===== DESCRIPTION
// Sets a user function (callback) to handle errors in a script.
// This function can be used to define custom error handlers during runtime, for example in applications which need to do file/data cleanup when a critical error happens, or when triggering an error in response to certain conditions (using trigger_error()).
// It is important to remember that the standard PHP error handler is completely bypassed for the error types specified by error_levels unless the callback function returns false. error_reporting() settings will have no effect and the error handler will be called regardless - however, it's still possible to read the current value of error_reporting and act appropriately.
// Also note that it is the handler's responsibility to stop the script's execution if necessary by calling exit(). If the error-handler function returns, script execution will continue with the next statement after the one that caused an error.
// The following error types cannot be handled with a user defined function: E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING independent of where they were raised, and most of E_STRICT raised in the file where set_error_handler() is called.
// If errors occur before the script is executed (e.g. on file uploads) the custom error handler cannot be called since it is not registered at that time.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// set_error_handler(?callable $callback, int $error_levels = E_ALL): ?callable
// ===== CODE
$return_set_error_handler = set_error_handler(

$callback, // callable callback - If null is passed, the handler is reset to its default state. Otherwise, the handler is a callback with the following signature:
//  handler(
//      int $errno,
//      string $errstr,
//      string $errfile = ?,
//      int $errline = ?,
//      array $errcontext = ?
//  ): bool
//  errno      - The first parameter, errno, will be passed the level of the error raised, as an integer.
//  errstr     - The second parameter, errstr, will be passed the error message, as a string.
//  errfile    - If the callback accepts a third parameter, errfile, it will be passed the filename that the error was raised in, as a string.
//  errline    - If the callback accepts a fourth parameter, errline, it will be passed the line number where the error was raised, as an integer.
//  errcontext - If the callback accepts a fifth parameter, errcontext, it will be passed an array that points to the active symbol table at the point the error occurred. In other words, errcontext will contain an array of every variable that existed in the scope the error was triggered in. User error handlers must not modify the error context.
//  Warning: This parameter has been DEPRECATED as of PHP 7.2.0, and REMOVED as of PHP 8.0.0. If the function defines this parameter without a default, an error of "too few arguments" will be raised when it is called.
//  If the function returns false then the normal error handler continues.

$error_levels // int error_levels - Can be used to mask the triggering of the callback function just like the error_reporting ini setting controls which errors are shown. Without this mask set the callback will be called for every error regardless to the setting of the error_reporting setting.

); // Return Values
// Returns the previously defined error handler (if any). If the built-in error handler is used null is returned. If the previous error handler was a class method, this function will return an indexed array with the class and the method name.
// 
// Changelog
// Version - Description
// 8.0.0   - errcontext was removed, and will no longer be passed to user callbacks.
// 7.2.0   - errcontext became deprecated. Usage of this parameter now emits an E_DEPRECATED notice.
// 
// [examples]
// Examples
// [example]
// Example #1 Error handling with set_error_handler() and trigger_error()
// The example below shows the handling of internal exceptions by triggering errors and handling them with a user defined function:
// [php]
// // error handler function
// function myErrorHandler($errno, $errstr, $errfile, $errline)
// {
//     if (!(error_reporting() & $errno)) {
//         // This error code is not included in error_reporting, so let it fall
//         // through to the standard PHP error handler
//         return false;
//     }
// 
//     // $errstr may need to be escaped:
//     $errstr = htmlspecialchars($errstr);
// 
//     switch ($errno) {
//     case E_USER_ERROR:
//         echo "<b>My ERROR</b> [$errno] $errstr<br />\n";
//         echo "  Fatal error on line $errline in file $errfile";
//         echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
//         echo "Aborting...<br />\n";
//         exit(1);
// 
//     case E_USER_WARNING:
//         echo "<b>My WARNING</b> [$errno] $errstr<br />\n";
//         break;
// 
//     case E_USER_NOTICE:
//         echo "<b>My NOTICE</b> [$errno] $errstr<br />\n";
//         break;
// 
//     default:
//         echo "Unknown error type: [$errno] $errstr<br />\n";
//         break;
//     }
// 
//     /* Don't execute PHP internal error handler */
//     return true;
// }
// 
// // function to test the error handling
// function scale_by_log($vect, $scale)
// {
//     if (!is_numeric($scale) || $scale <= 0) {
//         trigger_error("log(x) for x <= 0 is undefined, you used: scale = $scale", E_USER_ERROR);
//     }
// 
//     if (!is_array($vect)) {
//         trigger_error("Incorrect input vector, array of values expected", E_USER_WARNING);
//         return null;
//     }
// 
//     $temp = array();
//     foreach($vect as $pos => $value) {
//         if (!is_numeric($value)) {
//             trigger_error("Value at position $pos is not a number, using 0 (zero)", E_USER_NOTICE);
//             $value = 0;
//         }
//         $temp[$pos] = log($scale) * $value;
//     }
// 
//     return $temp;
// }
// 
// // set to the user defined error handler
// $old_error_handler = set_error_handler("myErrorHandler");
// 
// // trigger some errors, first define a mixed array with a non-numeric item
// echo "vector a\n";
// $a = array(2, 3, "foo", 5.5, 43.3, 21.11);
// print_r($a);
// 
// // now generate second array
// echo "----\nvector b - a notice (b = log(PI) * a)\n";
// /* Value at position $pos is not a number, using 0 (zero) */
// $b = scale_by_log($a, M_PI);
// print_r($b);
// 
// // this is trouble, we pass a string instead of an array
// echo "----\nvector c - a warning\n";
// /* Incorrect input vector, array of values expected */
// $c = scale_by_log("not array", 2.3);
// var_dump($c); // NULL
// 
// // this is a critical error, log of zero or negative number is undefined
// echo "----\nvector d - fatal error\n";
// /* log(x) for x <= 0 is undefined, you used: scale = $scale" */
// $d = scale_by_log($a, -2.5);
// var_dump($d); // Never reached
// [/php]
// The above example will output something similar to:
// [result]
// vector a
// Array
// (
//     [0] => 2
//     [1] => 3
//     [2] => foo
//     [3] => 5.5
//     [4] => 43.3
//     [5] => 21.11
// )
// ----
// vector b - a notice (b = log(PI) * a)
// <b>My NOTICE</b> [1024] Value at position 2 is not a number, using 0 (zero)<br />
// Array
// (
//     [0] => 2.2894597716988
//     [1] => 3.4341896575482
//     [2] => 0
//     [3] => 6.2960143721717
//     [4] => 49.566804057279
//     [5] => 24.165247890281
// )
// ----
// vector c - a warning
// <b>My WARNING</b> [512] Incorrect input vector, array of values expected<br />
// NULL
// ----
// vector d - fatal error
// <b>My ERROR</b> [256] log(x) for x <= 0 is undefined, you used: scale = -2.5<br />
//   Fatal error on line 35 in file trigger_error.php, PHP 5.2.1 (FreeBSD)<br />
// Aborting...<br />
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.set-error-handler.php
// ========== SET_ERROR_HANDLER - END

// SYNTAX:
// callable set_error_handler(callable $callback, int $error_levels = E_ALL)

return $return_set_error_handler; // callable
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_SET_ERROR_HANDLER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_SET_EXCEPTION_HANDLER
// ============================== OFFLINE
// ============================== ABOUT
// Sets a user-defined exception handler function.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// set_exception_handler() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_errorhandling_set_exception_handler($callback)
{
$return_set_exception_handler = null;

// ========== SET_EXCEPTION_HANDLER - BEGIN
// ===== ABOUT
// Sets a user-defined exception handler function
// ===== DESCRIPTION
// Sets the default exception handler if an exception is not caught within a try/catch block. Execution will stop after the callback is called.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// set_exception_handler(?callable $callback): ?callable
// ===== CODE
$return_set_exception_handler = set_exception_handler(

$callback // callable callback - The function to be called when an uncaught exception occurs. This handler function needs to accept one parameter, which will be the Throwable object that was thrown. Both Error and Exception implement the Throwable interface. This is the handler signature:
// handler(Throwable $ex): void
// null may be passed instead, to reset this handler to its default state.

); // Return Values
// Returns the previously defined exception handler, or null on error. If no previous handler was defined, null is also returned.
// 
// [examples]
// Examples
// [example]
// Example #1 set_exception_handler() example
// [php]
// function exception_handler(Throwable $exception) {
//   echo "Uncaught exception: " , $exception->getMessage(), "\n";
// }
// 
// set_exception_handler('exception_handler');
// 
// throw new Exception('Uncaught Exception');
// echo "Not Executed\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.set-exception-handler.php
// ========== SET_EXCEPTION_HANDLER - END

// SYNTAX:
// callable set_exception_handler(callable $callback)

return $return_set_exception_handler; // callable
}
*/
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_SET_EXCEPTION_HANDLER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_TRIGGER_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Generates a user-level error/warning/notice message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// trigger_error() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// E_USER_NOTICE - trigger_error()
// ============================== CODE
function php_behaviour_errorhandling_trigger_error($message, $error_level = E_USER_NOTICE)
{
$return_trigger_error = false;

// ========== TRIGGER_ERROR - BEGIN
// ===== ABOUT
// Generates a user-level error/warning/notice message
// ===== DESCRIPTION
// Used to trigger a user error condition, it can be used in conjunction with the built-in error handler, or with a user defined function that has been set as the new error handler (set_error_handler()).
// This function is useful when you need to generate a particular response to an exception at runtime.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// trigger_error(string $message, int $error_level = E_USER_NOTICE): bool
// ===== CODE
$return_trigger_error = trigger_error(

$message, // string message - The designated error message for this error. It's limited to 1024 bytes in length. Any additional characters beyond 1024 bytes will be truncated.

$error_level // int error_level - The designated error type for this error. It only works with the E_USER family of constants, and will default to E_USER_NOTICE.

); // Return Values
// This function returns false if wrong error_level is specified, true otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 trigger_error() example
// See set_error_handler() for a more extensive example.
// [php]
// if ($divisor == 0) {
//     trigger_error("Cannot divide by zero", E_USER_ERROR);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: HTML entities in message are not escaped. Use htmlentities() on the message if the error is to be displayed in a browser.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.trigger-error.php
// ========== TRIGGER_ERROR - END

// SYNTAX:
// bool trigger_error(string $message, int $error_level = E_USER_NOTICE)

return $return_trigger_error; // bool
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_TRIGGER_ERROR
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_ERRORHANDLING_USER_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Generates a user-level error/warning/notice message.
// 
// user_error - Alias of trigger_error().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// user_error() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// E_USER_NOTICE - user_error()
// ============================== CODE
function php_behaviour_errorhandling_user_error($message, $error_level = E_USER_NOTICE)
{
$return_user_error = false;

// ========== USER_ERROR - BEGIN
// ===== ABOUT
// user_error - Alias of trigger_error()
// ===== DESCRIPTION
// This function is an alias of: trigger_error().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_user_error = user_error(

$message, // string message

$error_level // int error_level

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.user-error.php
// ========== USER_ERROR - END

// ========== TRIGGER_ERROR - BEGIN
// ===== ABOUT
// Generates a user-level error/warning/notice message
// ===== DESCRIPTION
// Used to trigger a user error condition, it can be used in conjunction with the built-in error handler, or with a user defined function that has been set as the new error handler (set_error_handler()).
// This function is useful when you need to generate a particular response to an exception at runtime.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// trigger_error(string $message, int $error_level = E_USER_NOTICE): bool
// ===== CODE
// $return_trigger_error = trigger_error(

// $message, // string message - The designated error message for this error. It's limited to 1024 bytes in length. Any additional characters beyond 1024 bytes will be truncated.

// $error_level // int error_level - The designated error type for this error. It only works with the E_USER family of constants, and will default to E_USER_NOTICE.

// ); // Return Values
// This function returns false if wrong error_level is specified, true otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 trigger_error() example
// See set_error_handler() for a more extensive example.
// [php]
// if ($divisor == 0) {
//     trigger_error("Cannot divide by zero", E_USER_ERROR);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: HTML entities in message are not escaped. Use htmlentities() on the message if the error is to be displayed in a browser.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-25)
// URL: https://www.php.net/manual/en/function.trigger-error.php
// ========== TRIGGER_ERROR - END

// SYNTAX:
// bool user_error(string $message, int $error_level = E_USER_NOTICE)

return $return_user_error; // bool
}
// ============================== END
// PHP_BEHAVIOUR_ERRORHANDLING_USER_ERROR
// ==============================


// ============================== END
//  PHP_BEHAVIOUR_ERRORHANDLING  
// ==============================
?>