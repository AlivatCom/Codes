<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BASIC_MISC - BEGIN
// PHP_BASIC_MISC_CONNECTION_ABORTED - int php_basic_misc_connection_aborted()
// PHP_BASIC_MISC_CONNECTION_STATUS - int php_basic_misc_connection_status()
// PHP_BASIC_MISC_CONSTANT - mixed php_basic_misc_constant(string $name)
// PHP_BASIC_MISC_DEFINE - bool php_basic_misc_define(string $constant_name, mixed $value, bool $case_insensitive = false)
// PHP_BASIC_MISC_DEFINED - bool php_basic_misc_defined(string $constant_name)
// PHP_BASIC_MISC_DIE - void php_basic_misc_die(string|int $status)
// PHP_BASIC_MISC_EVAL - mixed php_basic_misc_eval(string $code)
// PHP_BASIC_MISC_EXIT - void php_basic_misc_exit(string|int $status)
// PHP_BASIC_MISC_GET_BROWSER - object|array|false php_basic_misc_get_browser(string $user_agent = null, bool $return_array = false)
// OFFLINE | PHP_BASIC_MISC___HALT_COMPILER - void php_basic_misc___halt_compiler()
// PHP_BASIC_MISC_HIGHLIGHT_FILE - string|bool php_basic_misc_highlight_file(string $filename, bool $return = false)
// PHP_BASIC_MISC_HIGHLIGHT_STRING - string|bool php_basic_misc_highlight_string(string $string, bool $return = false)
// OFFLINE | PHP_BASIC_MISC_HRTIME - array|int|float|false php_basic_misc_hrtime(bool $as_number = false)
// PHP_BASIC_MISC_IGNORE_USER_ABORT - int php_basic_misc_ignore_user_abort(bool $enable = null)
// PHP_BASIC_MISC_PACK - string php_basic_misc_pack(string $format, mixed $values)
// OFFLINE | PHP_BASIC_MISC_PHP_STRIP_WHITESPACE - string php_basic_misc_php_strip_whitespace(string $filename)
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_CP_CONV - string php_basic_misc_sapi_windows_cp_conv(int|string $in_codepage, int|string $out_codepage, string $subject)
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_CP_GET - int php_basic_misc_sapi_windows_cp_get(string $kind = "")
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_CP_IS_UTF8 - bool php_basic_misc_sapi_windows_cp_is_utf8()
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_CP_SET - bool php_basic_misc_sapi_windows_cp_set(int $codepage)
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_GENERATE_CTRL_EVENT - bool php_basic_misc_sapi_windows_generate_ctrl_event(int $event, int $pid = 0)
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_SET_CTRL_HANDLER - bool php_basic_misc_sapi_windows_set_ctrl_handler(callable $handler, bool $add = true)
// OFFLINE | PHP_BASIC_MISC_SAPI_WINDOWS_VT100_SUPPORT - bool php_basic_misc_sapi_windows_vt100_support(resource $stream, bool $enable = null)
// PHP_BASIC_MISC_SHOW_SOURCE - string|bool php_basic_misc_show_source(string $filename, bool $return = false)
// PHP_BASIC_MISC_SLEEP - int php_basic_misc_sleep(int $seconds)
// OFFLINE | PHP_BASIC_MISC_SYS_GETLOADAVG - array|false php_basic_misc_sys_getloadavg()
// OFFLINE | PHP_BASIC_MISC_TIME_NANOSLEEP - array|bool php_basic_misc_time_nanosleep(int $seconds, int $nanoseconds)
// OFFLINE | PHP_BASIC_MISC_TIME_SLEEP_UNTIL - bool php_basic_misc_time_sleep_until(float $timestamp)
// PHP_BASIC_MISC_UNIQID - string php_basic_misc_uniqid(string $prefix = "", bool $more_entropy = false)
// PHP_BASIC_MISC_UNPACK - array|false php_basic_misc_unpack(string $format, string $string, int $offset = 0)
// PHP_BASIC_MISC_USLEEP - void php_basic_misc_usleep(int $microseconds)
// PHP_BASIC_MISC - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (31)
// connection_aborted() - PHP_4, PHP_5, PHP_7, PHP_8
// connection_status() - PHP_4, PHP_5, PHP_7, PHP_8
// constant() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// define() - PHP_4, PHP_5, PHP_7, PHP_8
// defined() - PHP_4, PHP_5, PHP_7, PHP_8
// die() - PHP_4, PHP_5, PHP_7, PHP_8
// eval() - PHP_4, PHP_5, PHP_7, PHP_8
// exit() - PHP_4, PHP_5, PHP_7, PHP_8
// get_browser() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | __halt_compiler() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// highlight_file() - PHP_4, PHP_5, PHP_7, PHP_8
// highlight_string() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | hrtime() - PHP_7 >= PHP_7_3_0, PHP_8
// ignore_user_abort() - PHP_4, PHP_5, PHP_7, PHP_8
// pack() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | php_strip_whitespace() - PHP_5, PHP_7, PHP_8
// OFFLINE | sapi_windows_cp_conv() - PHP_7 >= PHP_7_1_0, PHP_8
// OFFLINE | sapi_windows_cp_get() - PHP_7 >= PHP_7_1_0, PHP_8
// OFFLINE | sapi_windows_cp_is_utf8() - PHP_7 >= PHP_7_1_0, PHP_8
// OFFLINE | sapi_windows_cp_set() - PHP_7 >= PHP_7_1_0, PHP_8
// OFFLINE | sapi_windows_generate_ctrl_event() - PHP_7 >= PHP_7_4_0, PHP_8
// OFFLINE | sapi_windows_set_ctrl_handler() - PHP_7 >= PHP_7_4_0, PHP_8
// OFFLINE | sapi_windows_vt100_support() - PHP_7 >= PHP_7_2_0, PHP_8
// show_source() - PHP_4, PHP_5, PHP_7, PHP_8
// sleep() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | sys_getloadavg() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// OFFLINE | time_nanosleep() - PHP_5, PHP_7, PHP_8
// OFFLINE | time_sleep_until - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// uniqid() - PHP_4, PHP_5, PHP_7, PHP_8
// unpack() - PHP_4, PHP_5, PHP_7, PHP_8
// usleep() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (11)
// int
// mixed
// string
// bool
// void
// object
// array
// false
// float
// callable
// resource
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//         PHP_BASIC_MISC         
// ============================== ABOUT
// PHP Manual / Function Reference / Other Basic Extensions / Misc. - Miscellaneous Functions
// URL: https://www.php.net/manual/en/book.misc.php
// ============================== DESCRIPTION
// MISCELLANEOUS_FUNCTIONS
// FEATURES_CONNECTION_HANDLING
// LANGUAGE_REFERENCE_CONSTANTS
// APPENDICES_LIST_OF_RESERVED_WORDS_PREDEFINED_CONSTANTS
// 
// MISCELLANEOUS_FUNCTIONS - BEGIN
// Miscellaneous Functions
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// MISC_FUNCTIONS
// CHANGELOG
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// These functions were placed here because none of the other categories seemed to fit.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/intro.misc.php
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
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/misc.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation 
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/misc.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Misc. Configuration Options
// Name              | Default   | Changeable     | Changelog
// ignore_user_abort | "0"       | PHP_INI_ALL    |
// highlight.string  | "#DD0000" | PHP_INI_ALL    |
// highlight.comment | "#FF8000" | PHP_INI_ALL    |
// highlight.keyword | "#007700" | PHP_INI_ALL    |
// highlight.default | "#0000BB" | PHP_INI_ALL    |
// highlight.html    | "#000000" | PHP_INI_ALL    |
// browscap          | NULL      | PHP_INI_SYSTEM |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// ignore_user_abort bool   - false by default. If changed to true scripts will not be terminated after a client has aborted their connection.
// See also ignore_user_abort().
// highlight.bg string      -
// highlight.comment string -
// highlight.default string -
// highlight.html string    -
// highlight.keyword string -
// highlight.string string  - Colors for Syntax Highlighting mode. Anything that's acceptable in <font color="??????"> would work.
// browscap string          - Name (e.g.: browscap.ini) and location of browser capabilities file. See also get_browser().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/misc.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/misc.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/misc.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// CONNECTION_ABORTED (int)       -
// CONNECTION_NORMAL (int)        -
// CONNECTION_TIMEOUT (int)       -
// __COMPILER_HALT_OFFSET__ (int) -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/misc.constants.php
// PREDEFINED_CONSTANTS - END
// 
// MISC_FUNCTIONS - BEGIN
// Misc. Functions
// 
// Table of Contents
// * connection_aborted               - Check whether client disconnected
// * connection_status                - Returns connection status bitfield
// * constant                         - Returns the value of a constant
// * define                           - Defines a named constant
// * defined                          - Checks whether a given named constant exists
// * die                              - Equivalent to exit
// * eval                             - Evaluate a string as PHP code
// * exit                             - Output a message and terminate the current script
// * get_browser                      - Tells what the user's browser is capable of
// * __halt_compiler                  - Halts the compiler execution
// * highlight_file                   - Syntax highlighting of a file
// * highlight_string                 - Syntax highlighting of a string
// * hrtime                           - Get the system's high resolution time
// * ignore_user_abort                - Set whether a client disconnect should abort script execution
// * pack                             - Pack data into binary string
// * php_strip_whitespace             - Return source with stripped comments and whitespace
// * sapi_windows_cp_conv             - Convert string from one codepage to another
// * sapi_windows_cp_get              - Get current codepage
// * sapi_windows_cp_is_utf8          - Indicates whether the codepage is UTF-8 compatible
// * sapi_windows_cp_set              - Set process codepage
// * sapi_windows_generate_ctrl_event - Send a CTRL event to another process
// * sapi_windows_set_ctrl_handler    - Set or remove a CTRL event handler
// * sapi_windows_vt100_support       - Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
// * show_source                      - Alias of highlight_file
// * sleep                            - Delay execution
// * sys_getloadavg                   - Gets system load average
// * time_nanosleep                   - Delay for a number of seconds and nanoseconds
// * time_sleep_until                 - Make the script sleep until the specified time
// * uniqid                           - Generate a unique ID
// * unpack                           - Unpack data from binary string
// * usleep                           - Delay execution in microseconds
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/ref.misc.php
// MISC_FUNCTIONS - END
// 
// CHANGELOG - BEGIN
// Changelog
// 
// The following changes have been made to classes/functions/methods of this extension.
// 
// Version      | Function                   | Description
// 8.0.0        | constant                   | If the constant is not defined, constant now throws an Error exception; previously an E_WARNING was generated, and null was returned.
//              | define                     | Passing true to case_insensitive now emits an E_WARNING. Passing false is still allowed.
//              | ignore_user_abort          | enable is nullable now.
//              | pack                       | This function no longer returns false on failure.
//              | sapi_windows_vt100_support | enable is now nullable.
//              | sleep                      | The function throws a ValueError on negative seconds; previously, an E_WARNING was raised instead, and the function returned false.
// 7.3.0        | define                     | case_insensitive has been deprecated and will be removed in version 8.0.0.
// 7.2.0        | pack                       | float and double types supports both Big Endian and Little Endian.
//              | unpack                     | float and double types supports both Big Endian and Little Endian.
// 7.1.0        | unpack                     | The optional offset has been added.
// 7.0.15,7.1.1 | pack                       | The "e", "E", "g" and "G" codes were added to enable byte order support for float and double.
// 7.0.0        | define                     | array values are allowed.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/changelog.misc.php
// CHANGELOG - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/book.misc.php
// MISCELLANEOUS_FUNCTIONS - END
// 
// FEATURES_CONNECTION_HANDLING - BEGIN
// Connection handling (PHP Manual / Features / Connection handling)
// 
// Internally in PHP a connection status is maintained. There are 4 possible states:
// * 0 - NORMAL
// * 1 - ABORTED
// * 2 - TIMEOUT
// * 3 - ABORTED and TIMEOUT
// 
// When a PHP script is running normally, the NORMAL state is active. If the remote client disconnects, the ABORTED state flag is turned on. A remote client disconnect is usually caused by users hitting their STOP button. If the PHP-imposed time limit (see set_time_limit()) is hit, the TIMEOUT state flag is turned on.
// You can decide whether or not you want a client disconnect to cause your script to be aborted. Sometimes it is handy to always have your scripts run to completion even if there is no remote browser receiving the output. The default behaviour is however for your script to be aborted when the remote client disconnects. This behaviour can be set via the ignore_user_abort php.ini directive as well as through the corresponding php_value ignore_user_abort Apache httpd.conf directive or with the ignore_user_abort() function. If you do not tell PHP to ignore a user abort and the user aborts, your script will terminate. The one exception is if you have registered a shutdown function using register_shutdown_function(). With a shutdown function, when the remote user hits his STOP button, the next time your script tries to output something PHP will detect that the connection has been aborted and the shutdown function is called. This shutdown function will also get called at the end of your script terminating normally, so to do something different in case of a client disconnect you can use the connection_aborted() function. This function will return true if the connection was aborted.
// Your script can also be terminated by the built-in script timer. The default timeout is 30 seconds. It can be changed using the max_execution_time php.ini directive or the corresponding php_value max_execution_time Apache httpd.conf directive as well as with the set_time_limit() function. When the timer expires the script will be aborted and as with the above client disconnect case, if a shutdown function has been registered it will be called. Within this shutdown function you can check to see if a timeout caused the shutdown function to be called by calling the connection_status() function. This function will return 2 if a timeout caused the shutdown function to be called.
// One thing to note is that both the ABORTED and the TIMEOUT states can be active at the same time. This is possible if you tell PHP to ignore user aborts. PHP will still note the fact that a user may have broken the connection, but the script will keep running. If it then hits the time limit it will be aborted and your shutdown function, if any, will be called. At this point you will find that connection_status() returns 3.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/features.connection-handling.php
// FEATURES_CONNECTION_HANDLING - END
// 
// LANGUAGE_REFERENCE_CONSTANTS - BEGIN
// Constants (PHP Manual / Language Reference / Constants)
// 
// SYNTAX
// PREDEFINED_CONSTANTS
// MAGIC_CONSTANTS
// 
// Table of Contents
// * Syntax
// * Predefined constants
// * Magic constants
// 
// A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). Constants are case-sensitive. By convention, constant identifiers are always uppercase.
// Note: Prior to PHP 8.0.0, constants defined using the define() function may be case-insensitive.
// The name of a constant follows the same rules as any label in PHP. A valid constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thusly: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$
// It is possible to define() constants with reserved or even invalid names, whose value can only be retrieved with the constant() function. However, doing so is not recommended.
// Tip: See also the Userland Naming Guide.
// 
// [example]
// Example #1 Valid and invalid constant names
// [php]
// 
// // Valid constant names
// define("FOO",     "something");
// define("FOO2",    "something else");
// define("FOO_BAR", "something more");
// 
// // Invalid constant names
// define("2FOO",    "something");
// 
// // This is valid, but should be avoided:
// // PHP may one day provide a magical constant
// // that will break your script
// define("__FOO__", "something"); 
// 
// [/php]
// [/example]
// 
// Note: For our purposes here, a letter is a-z, A-Z, and the ASCII characters from 128 through 255 (0x80-0xff).
// Like superglobals, the scope of a constant is global. Constants can be accessed from anywhere in a script without regard to scope. For more information on scope, read the manual section on variable scope.
// Note: As of PHP 7.1.0, class constant may declare a visibility of protected or private, making them only available in the hierarchical scope of the class in which it is defined.
// 
// SYNTAX - BEGIN
// Syntax
// 
// Constants can be defined using the const keyword, or by using the define()-function. While define() allows a constant to be defined to an arbitrary expression, the const keyword has restrictions as outlined in the next paragraph. Once a constant is defined, it can never be changed or undefined.
// When using the const keyword, only scalar (bool, int, float and string) expressions and constant arrays containing only scalar expressions are accepted. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.
// The value of a constant is accessed simply by specifying its name. Unlike variables, a constant is not prepended with a $. It is also possible to use the constant() function to read a constant's value if the constant's name is obtained dynamically. Use get_defined_constants() to get a list of all defined constants.
// Note: Constants and (global) variables are in a different namespace. This implies that for example true and $TRUE are generally different.
// If an undefined constant is used an Error is thrown. Prior to PHP 8.0.0, undefined constants would be interpreted as a bare word string, i.e. (CONSTANT vs "CONSTANT"). This fallback is deprecated as of PHP 7.2.0, and an error of level E_WARNING is issued when it happens. Prior to PHP 7.2.0, an error of level E_NOTICE has been issued instead. See also the manual entry on why $foo[bar] is wrong (unless bar is a constant). This does not apply to (fully) qualified constants, which will always raise a Error if undefined.
// Note: To check if a constant is set, use the defined() function.
// 
// These are the differences between constants and variables:
// * Constants do not have a dollar sign ($) before them;
// * Constants may be defined and accessed anywhere without regard to variable scoping rules;
// * Constants may not be redefined or undefined once they have been set; and
// * Constants may only evaluate to scalar values or arrays.
// 
// [example]
// Example #1 Defining Constants
// [php]
// define("CONSTANT", "Hello world.");
// echo CONSTANT; // outputs "Hello world."
// echo Constant; // Emits an Error: Undefined constant "Constant"
//                // Prior to PHP 8.0.0, outputs "Constant" and issues a warning.
// [/php]
// [/example]
// [example]
// Example #2 Defining Constants using the const keyword
// [php]
// // Simple scalar value
// const CONSTANT = 'Hello World';
// 
// echo CONSTANT;
// 
// // Scalar expression
// const ANOTHER_CONST = CONSTANT.'; Goodbye World';
// echo ANOTHER_CONST;
// 
// const ANIMALS = array('dog', 'cat', 'bird');
// echo ANIMALS[1]; // outputs "cat"
// 
// // Constant arrays
// define('ANIMALS', array(
//     'dog',
//     'cat',
//     'bird'
// ));
// echo ANIMALS[1]; // outputs "cat"
// [/php]
// [/example]
// Note: As opposed to defining constants using define(), constants defined using the const keyword must be declared at the top-level scope because they are defined at compile-time. This means that they cannot be declared inside functions, loops, if statements or try/catch blocks.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/language.constants.syntax.php
// SYNTAX - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined constants
// 
// PHP provides a large number of predefined constants to any script which it runs. Many of these constants, however, are created by various extensions, and will only be present when those extensions are available, either via dynamic loading or because they have been compiled in.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/language.constants.predefined.php
// PREDEFINED_CONSTANTS - END
// 
// MAGIC_CONSTANTS - BEGIN
// Magic constants
// 
// There are nine magical constants that change depending on where they are used. For example, the value of __LINE__ depends on the line that it's used on in your script. All these "magical" constants are resolved at compile time, unlike regular constants, which are resolved at runtime. These special constants are case-insensitive and are as follows:
// 
// PHP's magic constants
// Name             - Description
// __LINE__         - The current line number of the file.
// __FILE__         - The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
// __DIR__          - The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
// __FUNCTION__     - The function name, or {closure} for anonymous functions.
// __CLASS__        - The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
// __TRAIT__        - The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
// __METHOD__       - The class method name.
// __NAMESPACE__    - The name of the current namespace.
// ClassName::class - The fully qualified class name.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/language.constants.magic.php
// MAGIC_CONSTANTS - END
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/language.constants.php
// LANGUAGE_REFERENCE_CONSTANTS - END

// APPENDICES_LIST_OF_RESERVED_WORDS_PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants (PHP Manual / Appendices / List of Reserved Words / Predefined Constants)
// 
// Core Predefined Constants
// These constants are defined by the PHP core. This includes PHP, the Zend engine, and SAPI modules.
// PHP_VERSION (string)               - The current PHP version as a string in "major.minor.release[extra]" notation.
// PHP_MAJOR_VERSION (int)            - The current PHP "major" version as an integer (e.g., int(5) from version "5.2.7-extra").
// PHP_MINOR_VERSION (int)            - The current PHP "minor" version as an integer (e.g., int(2) from version "5.2.7-extra").
// PHP_RELEASE_VERSION (int)          - The current PHP "release" version as an integer (e.g., int(7) from version "5.2.7-extra").
// PHP_VERSION_ID (int)               - The current PHP version as an integer, useful for version comparisons (e.g., int(50207) from version "5.2.7-extra").
// PHP_EXTRA_VERSION (string)         - The current PHP "extra" version as a string (e.g., '-extra' from version "5.2.7-extra"). Often used by distribution vendors to indicate a package version.
// PHP_ZTS (int)                      -
// PHP_DEBUG (int)                    -
// PHP_MAXPATHLEN (int)               - The maximum length of filenames (including path) supported by this build of PHP.
// PHP_OS (string)                    - The operating system PHP was built for.
// PHP_OS_FAMILY (string)             - The operating system family PHP was built for. One of 'Windows', 'BSD', 'Darwin', 'Solaris', 'Linux' or 'Unknown'. Available as of PHP 7.2.0.
// PHP_SAPI (string)                  - The Server API for this build of PHP. See also php_sapi_name().
// PHP_EOL (string)                   - The correct 'End Of Line' symbol for this platform.
// PHP_INT_MAX (int)                  - The largest integer supported in this build of PHP. Usually int(2147483647) in 32 bit systems and int(9223372036854775807) in 64 bit systems.
// PHP_INT_MIN (int)                  - The smallest integer supported in this build of PHP. Usually int(-2147483648) in 32 bit systems and int(-9223372036854775808) in 64 bit systems. Usually, PHP_INT_MIN === ~PHP_INT_MAX.
// PHP_INT_SIZE (int)                 - The size of an integer in bytes in this build of PHP.
// PHP_FLOAT_DIG (int)                - Number of decimal digits that can be rounded into a float and back without precision loss. Available as of PHP 7.2.0.
// PHP_FLOAT_EPSILON (float)          - Smallest representable positive number x, so that x + 1.0 != 1.0. Available as of PHP 7.2.0.
// PHP_FLOAT_MIN (float)              - Smallest representable positive floating point number. If you need the smallest representable negative floating point number, use - PHP_FLOAT_MAX. Available as of PHP 7.2.0.
// PHP_FLOAT_MAX (float)              - Largest representable floating point number. Available as of PHP 7.2.0.
// DEFAULT_INCLUDE_PATH (string)      -
// PEAR_INSTALL_DIR (string)          -
// PEAR_EXTENSION_DIR (string)        -
// PHP_EXTENSION_DIR (string)         - The default directory where to look for dynamically loadable extensions (unless overridden by extension_dir). Defaults to PHP_PREFIX (or PHP_PREFIX . "\\ext" on Windows).
// PHP_PREFIX (string)                - The value --prefix was set to at configure. On Windows, it is the value --with-prefix was set to at configure.
// PHP_BINDIR (string)                - The value --bindir was set to at configure. On Windows, it is the value --with-prefix was set to at configure.
// PHP_BINARY (string)                - Specifies the PHP binary path during script execution.
// PHP_MANDIR (string)                - Specifies where the manpages were installed into.
// PHP_LIBDIR (string)                -
// PHP_DATADIR (string)               -
// PHP_SYSCONFDIR (string)            -
// PHP_LOCALSTATEDIR (string)         -
// PHP_CONFIG_FILE_PATH (string)      -
// PHP_CONFIG_FILE_SCAN_DIR (string)  -
// PHP_SHLIB_SUFFIX (string)          - The build-platform's shared library suffix, such as "so" (most Unixes) or "dll" (Windows).
// PHP_FD_SETSIZE (int)               - The maximum number of file descriptors for select system calls. Available as of PHP 7.1.0.
// E_ERROR (int)                      - Error reporting constant
// E_WARNING (int)                    - Error reporting constant
// E_PARSE (int)                      - Error reporting constant
// E_NOTICE (int)                     - Error reporting constant
// E_CORE_ERROR (int)                 - Error reporting constant
// E_CORE_WARNING (int)               - Error reporting constant
// E_COMPILE_ERROR (int)              - Error reporting constant
// E_COMPILE_WARNING (int)            - Error reporting constant
// E_USER_ERROR (int)                 - Error reporting constant
// E_USER_WARNING (int)               - Error reporting constant
// E_USER_NOTICE (int)                - Error reporting constant
// E_RECOVERABLE_ERROR (int)          - Error reporting constant.
// E_DEPRECATED (int)                 - Error reporting constant.
// E_USER_DEPRECATED (int)            - Error reporting constant.
// E_ALL (int)                        - Error reporting constant
// E_STRICT (int)                     - Error reporting constant
// __COMPILER_HALT_OFFSET__ (int)     - 
//                                      true (bool)  - See Booleans.
//                                      false (bool) - See Booleans.
//                                      null (null)  - See Null.
// PHP_WINDOWS_EVENT_CTRL_C (int)     - A Windows CTRL+C event. Available as of PHP 7.4.0 (Windows only).
// PHP_WINDOWS_EVENT_CTRL_BREAK (int) - A Windows CTRL+BREAK event. Available as of PHP 7.4.0 (Windows only).
// See also: Magic constants.
// 
// Standard Predefined Constants
// All constants from core extensions are defined in PHP by default.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/reserved.constants.php
// APPENDICES_LIST_OF_RESERVED_WORDS_PREDEFINED_CONSTANTS - END
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_CONNECTION_ABORTED
// ============================== PUBLIC
// ============================== ABOUT
// Check whether client disconnected.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// connection_aborted() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_connection_aborted()
{
$return_connection_aborted = 0;

// ========== CONNECTION_ABORTED - BEGIN
// ===== ABOUT
// Check whether client disconnected
// ===== DESCRIPTION
// Checks whether the client disconnected.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// connection_aborted(): int
// ===== CODE
$return_connection_aborted = connection_aborted(

// This function has no parameters.

); // Return Values
// Returns 1 if client disconnected, 0 otherwise.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/function.connection-aborted.php
// ========== CONNECTION_ABORTED - END

// SYNTAX:
// int connection_aborted()

return $return_connection_aborted; // int
}
// ============================== END
// PHP_BASIC_MISC_CONNECTION_ABORTED
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_CONNECTION_STATUS
// ============================== PUBLIC
// ============================== ABOUT
// Returns connection status bitfield.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// connection_status() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_connection_status()
{
$return_connection_status = 0;

// ========== CONNECTION_STATUS - BEGIN
// ===== ABOUT
// Returns connection status bitfield
// ===== DESCRIPTION
// Gets the connection status bitfield.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// connection_status(): int
// ===== CODE
$return_connection_status = connection_status(

// This function has no parameters.

); // Return Values
// Returns the connection status bitfield, which can be used against the CONNECTION_XXX constants to determine the connection status.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.connection-status.php
// ========== CONNECTION_STATUS - END

// SYNTAX:
// int connection_status()

return $return_connection_status; // int
}
// ============================== END
// PHP_BASIC_MISC_CONNECTION_STATUS
// ==============================


// ============================== BEGIN
//    PHP_BASIC_MISC_CONSTANT    
// ============================== PUBLIC
// ============================== ABOUT
// Returns the value of a constant.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// constant() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_constant($name)
{
$return_constant = null;

// ========== CONSTANT - BEGIN
// ===== ABOUT
// Returns the value of a constant
// ===== DESCRIPTION
// Return the value of the constant indicated by name.
// constant() is useful if you need to retrieve the value of a constant, but do not know its name. I.e. it is stored in a variable or returned by a function.
// This function works also with class constants and enum cases.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// constant(string $name): mixed
// ===== CODE
$return_constant = constant(

$name // string name - The constant name.

); // Return Values
// Returns the value of the constant.
// 
// Errors/Exceptions
// If the constant is not defined, an Error exception is thrown. Prior to PHP 8.0.0, an E_WARNING level error was generated in that case.
// 
// Changelog
// Version - Description
// 8.0.0   - If the constant is not defined, constant() now throws an Error exception; previously an E_WARNING was generated, and null was returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Using constant() with Constants
// [php]
// 
// define("MAXSIZE", 100);
// 
// echo MAXSIZE;
// echo constant("MAXSIZE"); // same thing as the previous line
// 
// 
// interface bar {
//     const test = 'foobar!';
// }
// 
// class foo {
//     const test = 'foobar!';
// }
// 
// $const = 'test';
// 
// var_dump(constant('bar::'. $const)); // string(7) "foobar!"
// var_dump(constant('foo::'. $const)); // string(7) "foobar!"
// 
// [/php]
// [/example]
// [example]
// Example #2 Using constant() with Enum Cases (as of PHP 8.1.0)
// [php]
// 
// enum Suit
// {
//     case Hearts;
//     case Diamonds;
//     case Clubs;
//     case Spades;
// }
// 
// $case = 'Hearts';
// 
// var_dump(constant('Suit::'. $case)); // enum(Suit::Hearts)
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.constant.php
// ========== CONSTANT - END

// SYNTAX:
// mixed constant(string $name)

return $return_constant; // mixed
}
// ============================== END
//    PHP_BASIC_MISC_CONSTANT    
// ==============================


// ============================== BEGIN
//     PHP_BASIC_MISC_DEFINE     
// ============================== PUBLIC
// ============================== ABOUT
// Defines a named constant.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// define() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_define($constant_name, $value, $case_insensitive = false)
{
$return_define = false;

// ========== DEFINE - BEGIN
// ===== ABOUT
// Defines a named constant
// ===== DESCRIPTION
// Defines a named constant at runtime.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// define(string $constant_name, mixed $value, bool $case_insensitive = false): bool
// ===== CODE
$return_define = define(

$constant_name, // string constant_name - The name of the constant.
// Note: It is possible to define() constants with reserved or even invalid names, whose value can (only) be retrieved with constant(). However, doing so is not recommended.

$value, // mixed value - The value of the constant. In PHP 5, value must be a scalar value (int, float, string, bool, or null). In PHP 7, array values are also accepted.
// Warning: While it is possible to define resource constants, it is not recommended and may cause unpredictable behavior.

$case_insensitive // bool case_insensitive - If set to true, the constant will be defined case-insensitive. The default behavior is case-sensitive; i.e. CONSTANT and Constant represent different values.
// Warning: Defining case-insensitive constants is deprecated as of PHP 7.3.0. As of PHP 8.0.0, only false is an acceptable value, passing true will produce a warning.
// Note: Case-insensitive constants are stored as lower-case.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - Passing true to case_insensitive now emits an E_WARNING. Passing false is still allowed.
// 7.3.0   - case_insensitive has been deprecated and will be removed in version 8.0.0.
// 7.0.0   - array values are allowed.
// 
// [examples]
// Examples
// [example]
// Example #1 Defining Constants
// [php]
// define("CONSTANT", "Hello world.");
// echo CONSTANT; // outputs "Hello world."
// echo Constant; // outputs "Constant" and issues a notice.
// 
// define("GREETING", "Hello you.", true);
// echo GREETING; // outputs "Hello you."
// echo Greeting; // outputs "Hello you."
// 
// // Works as of PHP 7
// define('ANIMALS', array(
//     'dog',
//     'cat',
//     'bird'
// ));
// echo ANIMALS[1]; // outputs "cat"
// 
// [/php]
// [/example]
// [example]
// Example #2 Constants with Reserved Names
// This example illustrates the possibility to define a constant with the same name as a magic constant. Since the resulting behavior is obviously confusing, it is not recommended to do this in practise, though.
// [php]
// var_dump(defined('__LINE__'));
// var_dump(define('__LINE__', 'test'));
// var_dump(constant('__LINE__'));
// var_dump(__LINE__);
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// string(4) "test"
// int(5)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.define.php
// ========== DEFINE - END

// SYNTAX:
// bool define(string $constant_name, mixed $value, bool $case_insensitive = false)

return $return_define; // bool
}
// ============================== END
//     PHP_BASIC_MISC_DEFINE     
// ==============================


// ============================== BEGIN
//     PHP_BASIC_MISC_DEFINED     
// ============================== PUBLIC
// ============================== ABOUT
// Checks whether a given named constant exists.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// defined() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_defined($constant_name)
{
$return_defined = false;

// ========== DEFINED - BEGIN
// ===== ABOUT
// Checks whether a given named constant exists
// ===== DESCRIPTION
// Checks whether the given constant exists and is defined.
// This function works also with class constants and enum cases.
// Note: If you want to see if a variable exists, use isset() as defined() only applies to constants. If you want to see if a function exists, use function_exists().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// defined(string $constant_name): bool
// ===== CODE
$return_defined = defined(

$constant_name // string constant_name - The constant name.

); // Return Values
// Returns true if the named constant given by constant_name has been defined, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Checking Constants
// [php]
// 
// // Note the use of quotes, this is important. This example is checking
// // if the string 'TEST' is the name of a constant named TEST
// if (defined('TEST')) {
//     echo TEST;
// }
// 
// 
// interface bar {
//     const test = 'foobar!';
// }
// 
// class foo {
//     const test = 'foobar!';
// }
// 
// var_dump(defined('bar::test')); // bool(true)
// var_dump(defined('foo::test')); // bool(true)
// 
// [/php]
// [/example]
// [example]
// Example #2 Checking Enum Cases (as of PHP 8.1.0)
// [php]
// 
// enum Suit
// {
//     case Hearts;
//     case Diamonds;
//     case Clubs;
//     case Spades;
// }
// 
// var_dump(defined('Suit::Hearts')); // bool(true)
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.defined.php
// ========== DEFINED - END

// SYNTAX:
// bool defined(string $constant_name)

return $return_defined; // bool
}
// ============================== END
//     PHP_BASIC_MISC_DEFINED     
// ==============================


// ============================== BEGIN
//       PHP_BASIC_MISC_DIE       
// ============================== PUBLIC
// ============================== ABOUT
// Output a message and terminate the current script.
// 
// Equivalent to exit.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// die() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_die($status)
{

// ========== DIE - BEGIN
// ===== ABOUT
// Equivalent to exit
// ===== DESCRIPTION
// This language construct is equivalent to exit().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
die(

$status // string|int status

); // Return Values
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.die.php
// ========== DIE - END

// ========== EXIT - BEGIN
// ===== ABOUT
// Output a message and terminate the current script
// ===== DESCRIPTION
// Terminates execution of the script. Shutdown functions and object destructors will always be executed even if exit is called.
// exit is a language construct and it can be called without parentheses if no status is passed.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exit(string $status = ?): void
// exit(int $status): void
// ===== CODE
// exit(

// $status // string|int status - If status is a string, this function prints the status just before exiting.
// If status is an int, that value will be used as the exit status and not printed. Exit statuses should be in the range 0 to 254, the exit status 255 is reserved by PHP and shall not be used. The status 0 is used to terminate the program successfully.

// ); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 exit example
// [php]
// 
// $filename = '/path/to/data-file';
// $file = fopen($filename, 'r')
//     or exit("unable to open file ($filename)");
// 
// [/php]
// [/example]
// [example]
// Example #2 exit status example
// [php]
// 
// //exit program normally
// exit;
// exit();
// exit(0);
// 
// //exit with an error code
// exit(1);
// exit(0376); //octal
// 
// [/php]
// [/example]
// [example]
// Example #3 Shutdown functions and destructors run regardless
// [php]
// class Foo
// {
//     public function __destruct()
//     {
//         echo 'Destruct: ' . __METHOD__ . '()' . PHP_EOL;
//     }
// }
// 
// function shutdown()
// {
//     echo 'Shutdown: ' . __FUNCTION__ . '()' . PHP_EOL;
// }
// 
// $foo = new Foo();
// register_shutdown_function('shutdown');
// 
// exit();
// echo 'This will not be output.';
// [/php]
// The above example will output:
// [result]
// Shutdown: shutdown()
// Destruct: Foo::__destruct()
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Because this is a language construct and not a function, it cannot be called using variable functions, or named arguments.
// Note: This language construct is equivalent to die().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.exit.php
// ========== EXIT - END

// SYNTAX:
// void exit(string|int $status)

// Return: void
}
// ============================== END
//       PHP_BASIC_MISC_DIE       
// ==============================


// ============================== BEGIN
//      PHP_BASIC_MISC_EVAL      
// ============================== PUBLIC
// ============================== ABOUT
// Evaluate a string as PHP code.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// eval() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_eval($code)
{
$return_eval = null;

// ========== EVAL - BEGIN
// ===== ABOUT
// Evaluate a string as PHP code
// ===== DESCRIPTION
// Evaluates the given code as PHP.
// The code being evaluated inherits the variable scope of the line on which the eval() call occurs. Any variables available at that line will be available for reading and modification in the evaluated code. However, all functions and classes defined will be defined in the global namespace. In other words, the compiler considers the evaluated code as if it were a separate included file.
// Caution: The eval() language construct is very dangerous because it allows execution of arbitrary PHP code. Its use thus is discouraged. If you have carefully verified that there is no other option than to use this construct, pay special attention not to pass any user provided data into it without properly validating it beforehand.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// eval(string $code): mixed
// ===== CODE
$return_eval = eval(

$code // string code - Valid PHP code to be evaluated.
// The code must not be wrapped in opening and closing PHP tags, i.e. 'echo "Hi!";' must be passed instead of '[php] echo "Hi!"; [/php]'. It is still possible to leave and re-enter PHP mode though using the appropriate PHP tags, e.g. [php]'echo "In PHP mode!"; [/php]In HTML mode![php] echo "Back in PHP mode!";'[/php].
// Apart from that the passed code must be valid PHP. This includes that all statements must be properly terminated using a semicolon. 'echo "Hi!"' for example will cause a parse error, whereas 'echo "Hi!";' will work.
// A return statement will immediately terminate the evaluation of the code.
// The code will be executed in the scope of the code calling eval(). Thus any variables defined or changed in the eval() call will remain visible after it terminates.

); // Return Values
// eval() returns null unless return is called in the evaluated code, in which case the value passed to return is returned. As of PHP 7, if there is a parse error in the evaluated code, eval() throws a ParseError exception. Before PHP 7, in this case eval() returned false and execution of the following code continued normally. It is not possible to catch a parse error in eval() using set_error_handler().
// 
// [examples]
// Examples
// [example]
// Example #1 eval() example - simple text merge
// [php]
// $string = 'cup';
// $name = 'coffee';
// $str = 'This is a $string with my $name in it.';
// echo $str. "\n";
// eval("\$str = \"$str\";");
// echo $str. "\n";
// [/php]
// The above example will output:
// [result]
// This is a $string with my $name in it.
// This is a cup with my coffee in it.
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Because this is a language construct and not a function, it cannot be called using variable functions, or named arguments.
// Tip: As with anything that outputs its result directly to the browser, the output-control functions can be used to capture the output of this function, and save it in a string (for example).
// Note: In case of a fatal error in the evaluated code, the whole script exits.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.eval.php
// ========== EVAL - END

// SYNTAX:
// mixed eval(string $code)

return $return_eval; // mixed
}
// ============================== END
//      PHP_BASIC_MISC_EVAL      
// ==============================


// ============================== BEGIN
//      PHP_BASIC_MISC_EXIT      
// ============================== PUBLIC
// ============================== ABOUT
// Output a message and terminate the current script.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// exit() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_exit($status)
{

// ========== EXIT - BEGIN
// ===== ABOUT
// Output a message and terminate the current script
// ===== DESCRIPTION
// Terminates execution of the script. Shutdown functions and object destructors will always be executed even if exit is called.
// exit is a language construct and it can be called without parentheses if no status is passed.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exit(string $status = ?): void
// exit(int $status): void
// ===== CODE
exit(

$status // string|int status - If status is a string, this function prints the status just before exiting.
// If status is an int, that value will be used as the exit status and not printed. Exit statuses should be in the range 0 to 254, the exit status 255 is reserved by PHP and shall not be used. The status 0 is used to terminate the program successfully.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 exit example
// [php]
// 
// $filename = '/path/to/data-file';
// $file = fopen($filename, 'r')
//     or exit("unable to open file ($filename)");
// 
// [/php]
// [/example]
// [example]
// Example #2 exit status example
// [php]
// 
// //exit program normally
// exit;
// exit();
// exit(0);
// 
// //exit with an error code
// exit(1);
// exit(0376); //octal
// 
// [/php]
// [/example]
// [example]
// Example #3 Shutdown functions and destructors run regardless
// [php]
// class Foo
// {
//     public function __destruct()
//     {
//         echo 'Destruct: ' . __METHOD__ . '()' . PHP_EOL;
//     }
// }
// 
// function shutdown()
// {
//     echo 'Shutdown: ' . __FUNCTION__ . '()' . PHP_EOL;
// }
// 
// $foo = new Foo();
// register_shutdown_function('shutdown');
// 
// exit();
// echo 'This will not be output.';
// [/php]
// The above example will output:
// [result]
// Shutdown: shutdown()
// Destruct: Foo::__destruct()
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Because this is a language construct and not a function, it cannot be called using variable functions, or named arguments.
// Note: This language construct is equivalent to die().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.exit.php
// ========== EXIT - END

// SYNTAX:
// void exit(string|int $status)

// Return: void
}
// ============================== END
//      PHP_BASIC_MISC_EXIT      
// ==============================


// ============================== BEGIN
//   PHP_BASIC_MISC_GET_BROWSER   
// ============================== PUBLIC
// ============================== ABOUT
// Tells what the user's browser is capable of.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_browser() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_get_browser($user_agent = null, $return_array = false)
{
$return_get_browser = false;

// ========== GET_BROWSER - BEGIN
// ===== ABOUT
// Tells what the user's browser is capable of
// ===== DESCRIPTION
// Attempts to determine the capabilities of the user's browser, by looking up the browser's information in the browscap.ini file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_browser(?string $user_agent = null, bool $return_array = false): object|array|false
// ===== CODE
$return_get_browser = get_browser(

$user_agent, // string user_agent - The User Agent to be analyzed. By default, the value of HTTP User-Agent header is used; however, you can alter this (i.e., look up another browser's info) by passing this parameter.
// You can bypass this parameter with a null value.

$return_array // bool return_array - If set to true, this function will return an array instead of an object.

); // Return Values
// The information is returned in an object or an array which will contain various data elements representing, for instance, the browser's major and minor version numbers and ID string; true/false values for features such as frames, JavaScript, and cookies; and so forth.
// The cookies value simply means that the browser itself is capable of accepting cookies and does not mean the user has enabled the browser to accept cookies or not. The only way to test if cookies are accepted is to set one with setcookie(), reload, and check for the value.
// Returns false when no information can be retrieved, such as when the browscap configuration setting in php.ini has not been set.
// 
// [examples]
// Examples
// [example]
// Example #1 Listing all information about the users browser
// [php]
// echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
// 
// $browser = get_browser(null, true);
// print_r($browser);
// [/php]
// The above example will output something similar to:
// [result]
// Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040803 Firefox/0.9.3
// 
// Array
// (
//     [browser_name_regex] => ^mozilla/5\.0 (windows; .; windows nt 5\.1; .*rv:.*) gecko/.* firefox/0\.9.*$
//     [browser_name_pattern] => Mozilla/5.0 (Windows; ?; Windows NT 5.1; *rv:*) Gecko/* Firefox/0.9*
//     [parent] => Firefox 0.9
//     [platform] => WinXP
//     [browser] => Firefox
//     [version] => 0.9
//     [majorver] => 0
//     [minorver] => 9
//     [cssversion] => 2
//     [frames] => 1
//     [iframes] => 1
//     [tables] => 1
//     [cookies] => 1
//     [backgroundsounds] =>
//     [vbscript] =>
//     [javascript] => 1
//     [javaapplets] => 1
//     [activexcontrols] =>
//     [cdf] =>
//     [aol] =>
//     [beta] => 1
//     [win16] =>
//     [crawler] =>
//     [stripper] =>
//     [wap] =>
//     [netclr] =>
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  In order for this to work, your browscap configuration setting in php.ini must point to the correct location of the browscap.ini file on your system.
//  browscap.ini is not bundled with PHP, but you may find an up-to-date > php_browscap.ini file here.
//  While browscap.ini contains information on many browsers, it relies on user updates to keep the database current. The format of the file is fairly self-explanatory.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.get-browser.php
// ========== GET_BROWSER - END

// SYNTAX:
// object|array|false get_browser(string $user_agent = null, bool $return_array = false)

return $return_get_browser; // object|array|false
}
// ============================== END
//   PHP_BASIC_MISC_GET_BROWSER   
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC___HALT_COMPILER
// ============================== OFFLINE
// ============================== ABOUT
// Halts the compiler execution.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// __halt_compiler() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_misc___halt_compiler()
{

// ========== __HALT_COMPILER - BEGIN
// ===== ABOUT
// Halts the compiler execution
// ===== DESCRIPTION
// Halts the execution of the compiler. This can be useful to embed data in PHP scripts, like the installation files.
// Byte position of the data start can be determined by the __COMPILER_HALT_OFFSET__ constant which is defined only if there is a __halt_compiler() presented in the file.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// __halt_compiler(): void
// ===== CODE
__halt_compiler(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 A __halt_compiler() example
// [php]
// 
// // open this file
// $fp = fopen(__FILE__, 'r');
// 
// // seek file pointer to data
// fseek($fp, __COMPILER_HALT_OFFSET__);
// 
// // and output it
// var_dump(stream_get_contents($fp));
// 
// // the end of the script execution
// __halt_compiler(); the installation data (eg. tar, gz, PHP, etc.)
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: __halt_compiler() can only be used from the outermost scope.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.halt-compiler.php
// ========== __HALT_COMPILER - END

// SYNTAX:
// void __halt_compiler()

// Return: void
}
*/
// ============================== END
// PHP_BASIC_MISC___HALT_COMPILER
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_HIGHLIGHT_FILE 
// ============================== PUBLIC
// ============================== ABOUT
// Syntax highlighting of a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// highlight_file() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_highlight_file($filename, $return = false)
{
$return_highlight_file = false;

// ========== HIGHLIGHT_FILE - BEGIN
// ===== ABOUT
// Syntax highlighting of a file
// ===== DESCRIPTION
// Prints out or returns a syntax highlighted version of the code contained in filename using the colors defined in the built-in syntax highlighter for PHP.
// Many servers are configured to automatically highlight files with a phps extension. For example, example.phps when viewed will show the syntax highlighted source of the file. To enable this, add this line to the httpd.conf:
// [code]
// AddType application/x-httpd-php-source .phps
// [/code]
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// highlight_file(string $filename, bool $return = false): string|bool
// ===== CODE
$return_highlight_file = highlight_file(

$filename, // string filename - Path to the PHP file to be highlighted.

$return // bool return - Set this parameter to true to make this function return the highlighted code.

); // Return Values
// If return is set to true, returns the highlighted code as a string instead of printing it out. Otherwise, it will return true on success, false on failure.
// 
// Notes
// Caution: Care should be taken when using the highlight_file() function to make sure that you do not inadvertently reveal sensitive information such as passwords or any other type of information that might create a potential security risk.
// Note: When the return parameter is used, this function uses internal output buffering so it cannot be used inside an ob_start() callback function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.highlight-file.php
// ========== HIGHLIGHT_FILE - END

// SYNTAX:
// string|bool highlight_file(string $filename, bool $return = false)

return $return_highlight_file; // string|bool
}
// ============================== END
// PHP_BASIC_MISC_HIGHLIGHT_FILE 
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_HIGHLIGHT_STRING
// ============================== PUBLIC
// ============================== ABOUT
// Syntax highlighting of a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// highlight_string() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_highlight_string($string, $return = false)
{
$return_highlight_string = false;

// ========== HIGHLIGHT_STRING - BEGIN
// ===== ABOUT
// Syntax highlighting of a string
// ===== DESCRIPTION
// Outputs or returns html markup for a syntax highlighted version of the given PHP code using the colors defined in the built-in syntax highlighter for PHP.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// highlight_string(string $string, bool $return = false): string|bool
// ===== CODE
$return_highlight_string = highlight_string(

$string, // string string - The PHP code to be highlighted. This should include the opening tag.

$return // bool return - Set this parameter to true to make this function return the highlighted code.

); // Return Values
// If return is set to true, returns the highlighted code as a string instead of printing it out. Otherwise, it will return true on success, false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 highlight_string() example
// [php]
// highlight_string(' phpinfo(); ');
// [/php]
// The above example will output:
// [result]
// <code><span style="color: #000000">
// <span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span>
// </span>
// </code>
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: When the return parameter is used, this function uses internal output buffering so it cannot be used inside an ob_start() callback function.
// The HTML markup generated is subject to change.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.highlight-string.php
// ========== HIGHLIGHT_STRING - END

// SYNTAX:
// string|bool highlight_string(string $string, bool $return = false)

return $return_highlight_string; // string|bool
}
// ============================== END
// PHP_BASIC_MISC_HIGHLIGHT_STRING
// ==============================


// ============================== BEGIN
//     PHP_BASIC_MISC_HRTIME     
// ============================== OFFLINE
// ============================== ABOUT
// Get the system's high resolution time.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// hrtime() - PHP_7 >= PHP_7_3_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_hrtime($as_number = false)
{
$return_hrtime = false;

// ========== HRTIME - BEGIN
// ===== ABOUT
// Get the system's high resolution time
// ===== DESCRIPTION
// Returns the system's high resolution time, counted from an arbitrary point in time. The delivered timestamp is monotonic and can not be adjusted.
// ===== SUPPORTED
// PHP_7 >= PHP_7_3_0, PHP_8
// ===== SYNTAX
// hrtime(bool $as_number = false): array|int|float|false
// ===== CODE
$return_hrtime = hrtime(

$as_number // bool as_number - Whether the high resolution time should be returned as array or number.

); // Return Values
// Returns an array of integers in the form [seconds, nanoseconds], if the parameter as_number is false. Otherwise the nanoseconds are returned as int (64bit platforms) or float (32bit platforms). Returns false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 hrtime() usage
// [php]
// echo hrtime(true), PHP_EOL;
// print_r(hrtime());
// [/php]
// The above example will output something similar to:
// [result]
// 10444739687370679
// Array
// (
//     [0] => 10444739
//     [1] => 687464812
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.hrtime.php
// ========== HRTIME - END

// SYNTAX:
// array|int|float|false hrtime(bool $as_number = false)

return $return_hrtime; // array|int|float|false
}
*/
// ============================== END
//     PHP_BASIC_MISC_HRTIME     
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_IGNORE_USER_ABORT
// ============================== PUBLIC
// ============================== ABOUT
// Set whether a client disconnect should abort script execution.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ignore_user_abort() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_ignore_user_abort($enable = null)
{
$return_ignore_user_abort = 0;

// ========== IGNORE_USER_ABORT - BEGIN
// ===== ABOUT
// Set whether a client disconnect should abort script execution
// ===== DESCRIPTION
// Sets whether a client disconnect should cause a script to be aborted.
// When running PHP as a command line script, and the script's tty goes away without the script being terminated then the script will die the next time it tries to write anything, unless enable is set to true
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ignore_user_abort(?bool $enable = null): int
// ===== CODE
$return_ignore_user_abort = ignore_user_abort(

$enable // bool enable - If set and not null, this function will set the ignore_user_abort ini setting to the given enable. Otherwise, this function will only return the previous setting without changing it.

); // Return Values
// Returns the previous setting, as an integer.
// 
// Changelog
// Version - Description
// 8.0.0   - enable is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A ignore_user_abort() example
// [php]
// // Ignore user aborts and allow the script
// // to run forever
// ignore_user_abort(true);
// set_time_limit(0);
// 
// echo 'Testing connection handling in PHP';
// 
// // Run a pointless loop that sometime 
// // hopefully will make us click away from 
// // page or click the "Stop" button.
// while(1)
// {
//     // Did the connection fail?
//     if(connection_status() != CONNECTION_NORMAL)
//     {
//         break;
//     }
// 
//     // Sleep for 10 seconds
//     sleep(10);
// }
// 
// // If this is reached, then the 'break' 
// // was triggered from inside the while loop
// 
// // So here we can log, or perform any other tasks
// // we need without actually being dependent on the 
// // browser.
// [/php]
// [/example]
// [/examples]
// 
// Notes
// PHP will not detect that the user has aborted the connection until an attempt is made to send information to the client. Simply using an echo statement does not guarantee that information is sent, see flush().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.ignore-user-abort.php
// ========== IGNORE_USER_ABORT - END

// SYNTAX:
// int ignore_user_abort(bool $enable = null)

return $return_ignore_user_abort; // int
}
// ============================== END
// PHP_BASIC_MISC_IGNORE_USER_ABORT
// ==============================


// ============================== BEGIN
//      PHP_BASIC_MISC_PACK      
// ============================== PUBLIC
// ============================== ABOUT
// Pack data into binary string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// pack() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_pack($format, $values)
{
$return_pack = null;

// ========== PACK - BEGIN
// ===== ABOUT
// Pack data into binary string
// ===== DESCRIPTION
// Pack given arguments into a binary string according to format.
// The idea for this function was taken from Perl and all formatting codes work the same as in Perl. However, there are some formatting codes that are missing such as Perl's "u" format code.
// Note that the distinction between signed and unsigned values only affects the function unpack(), where as function pack() gives the same result for signed and unsigned format codes.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// pack(string $format, mixed ...$values): string
// ===== CODE
$return_pack = pack(

$format, // string format - The format string consists of format codes followed by an optional repeater argument. The repeater argument can be either an integer value or * for repeating to the end of the input data. For a, A, h, H the repeat count specifies how many characters of one data argument are taken, for @ it is the absolute position where to put the next data, for everything else the repeat count specifies how many data arguments are consumed and packed into the resulting binary string.
// 
// Currently implemented formats are:
// pack() format characters
// Code - Description
// a    - NUL-padded string
// A    - SPACE-padded string
// h    - Hex string, low nibble first
// H    - Hex string, high nibble first
// c    - signed char
// C    - unsigned char
// s    - signed short (always 16 bit, machine byte order)
// S    - unsigned short (always 16 bit, machine byte order)
// n    - unsigned short (always 16 bit, big endian byte order)
// v    - unsigned short (always 16 bit, little endian byte order)
// i    - signed integer (machine dependent size and byte order)
// I    - unsigned integer (machine dependent size and byte order)
// l    - signed long (always 32 bit, machine byte order)
// L    - unsigned long (always 32 bit, machine byte order)
// N    - unsigned long (always 32 bit, big endian byte order)
// V    - unsigned long (always 32 bit, little endian byte order)
// q    - signed long long (always 64 bit, machine byte order)
// Q    - unsigned long long (always 64 bit, machine byte order)
// J    - unsigned long long (always 64 bit, big endian byte order)
// P    - unsigned long long (always 64 bit, little endian byte order)
// f    - float (machine dependent size and representation)
// g    - float (machine dependent size, little endian byte order)
// G    - float (machine dependent size, big endian byte order)
// d    - double (machine dependent size and representation)
// e    - double (machine dependent size, little endian byte order)
// E    - double (machine dependent size, big endian byte order)
// x    - NUL byte
// X    - Back up one byte
// Z    - NUL-padded string
// @    - NUL-fill to absolute position

$values // mixed values

); // Return Values
// Returns a binary string containing data.
// 
// Changelog
// Version      - Description
// 8.0.0        - This function no longer returns false on failure.
// 7.2.0        - float and double types supports both Big Endian and Little Endian.
// 7.0.15,7.1.1 - The "e", "E", "g" and "G" codes were added to enable byte order support for float and double.
// 
// [examples]
// Examples
// [example]
// Example #1 pack() example
// [php]
// $binarydata = pack("nvc*", 0x1234, 0x5678, 65, 66);
// [/php]
// The resulting binary string will be 6 bytes long and contain the byte sequence 0x12, 0x34, 0x78, 0x56, 0x41, 0x42.
// [/example]
// [/examples]
// 
// Notes
//  Caution:
//  Note that PHP internally stores int values as signed values of a machine-dependent size (C type long). Integer literals and operations that yield numbers outside the bounds of the int type will be stored as float. When packing these floats as integers, they are first cast into the integer type. This may or may not result in the desired byte pattern.
//  The most relevant case is when packing unsigned numbers that would be representable with the int type if it were unsigned. In systems where the int type has a 32-bit size, the cast usually results in the same byte pattern as if the int were unsigned (although this relies on implementation-defined unsigned to signed conversions, as per the C standard). In systems where the int type has 64-bit size, the float most likely does not have a mantissa large enough to hold the value without loss of precision. If those systems also have a native 64-bit C int type (most UNIX-like systems don't), the only way to use the I pack format in the upper range is to create int negative values with the same byte representation as the desired unsigned value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.pack.php
// ========== PACK - END

// SYNTAX:
// string pack(string $format, mixed $values)

return $return_pack; // string
}
// ============================== END
//      PHP_BASIC_MISC_PACK      
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_PHP_STRIP_WHITESPACE
// ============================== OFFLINE
// ============================== ABOUT
// Return source with stripped comments and whitespace.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// php_strip_whitespace() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_misc_php_strip_whitespace($filename)
{
$return_php_strip_whitespace = null;

// ========== PHP_STRIP_WHITESPACE - BEGIN
// ===== ABOUT
// Return source with stripped comments and whitespace
// ===== DESCRIPTION
// Returns the PHP source code in filename with PHP comments and whitespace removed. This may be useful for determining the amount of actual code in your scripts compared with the amount of comments. This is similar to using php -w from the commandline.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// php_strip_whitespace(string $filename): string
// ===== CODE
$return_php_strip_whitespace = php_strip_whitespace(

$filename // string filename - Path to the PHP file.

); // Return Values
// The stripped source code will be returned on success, or an empty string on failure.
// Note: This function respects the value of the short_open_tag ini directive.
// 
// [examples]
// Examples
// [example]
// Example #1 php_strip_whitespace() example
// [php]
// // PHP comment here
// 
// //
// // Another PHP comment
//  //
// 
// echo        php_strip_whitespace(__FILE__);
// // Newlines are considered whitespace, and are removed too:
// do_nothing();
// [/php]
// The above example will output:
// [result]
// 
// echo php_strip_whitespace(__FILE__); do_nothing();
// [/result]
// Notice the PHP comments are gone, as are the whitespace and newline after the first echo statement.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.php-strip-whitespace.php
// ========== PHP_STRIP_WHITESPACE - END

// SYNTAX:
// string php_strip_whitespace(string $filename)

return $return_php_strip_whitespace; // string
}
*/
// ============================== END
// PHP_BASIC_MISC_PHP_STRIP_WHITESPACE
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_CONV
// ============================== OFFLINE
// ============================== ABOUT
// Convert string from one codepage to another.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_cp_conv() - PHP_7 >= PHP_7_1_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_cp_conv($in_codepage, $out_codepage, $subject)
{
$return_sapi_windows_cp_conv = null;

// ========== SAPI_WINDOWS_CP_CONV - BEGIN
// ===== ABOUT
// Convert string from one codepage to another
// ===== DESCRIPTION
// Convert string from one codepage to another.
// ===== SUPPORTED
// PHP_7 >= PHP_7_1_0, PHP_8
// ===== SYNTAX
// sapi_windows_cp_conv(int|string $in_codepage, int|string $out_codepage, string $subject): ?string
// ===== CODE
$return_sapi_windows_cp_conv = sapi_windows_cp_conv(

$in_codepage, // int|string in_codepage - The codepage of the subject string. Either the codepage name or identifier.

$out_codepage, // int|string out_codepage - The codepage to convert the subject string to. Either the codepage name or identifier.

$subject // string subject - The string to convert.

); // Return Values
// The subject string converted to out_codepage, or null on failure.
// 
// Errors/Exceptions
// This function issues E_WARNING level errors, if invalid codepages are given, or if the subject is not valid for in_codepage.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sapi-windows-cp-conv.php
// ========== SAPI_WINDOWS_CP_CONV - END

// SYNTAX:
// string sapi_windows_cp_conv(int|string $in_codepage, int|string $out_codepage, string $subject)

return $return_sapi_windows_cp_conv; // string
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_CONV
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_GET
// ============================== OFFLINE
// ============================== ABOUT
// Get current codepage.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_cp_get() - PHP_7 >= PHP_7_1_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_cp_get($kind = "")
{
$return_sapi_windows_cp_get = 0;

// ========== SAPI_WINDOWS_CP_GET - BEGIN
// ===== ABOUT
// Get current codepage
// ===== DESCRIPTION
// Gets the current codepage.
// ===== SUPPORTED
// PHP_7 >= PHP_7_1_0, PHP_8
// ===== SYNTAX
// sapi_windows_cp_get(string $kind = ""): int
// ===== CODE
$return_sapi_windows_cp_get = sapi_windows_cp_get(

$kind // string kind - The kind of operating system codepage to get, either 'ansi' or 'oem'. Any other value refers to the current codepage of the process.

); // Return Values
// If kind is 'ansi', the current ANSI code page of the operating system is returned. If kind is 'oem', the current OEM code page of the operating system is returned. Otherwise, the current codepage of the process is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sapi-windows-cp-get.php
// ========== SAPI_WINDOWS_CP_GET - END

// SYNTAX:
// int sapi_windows_cp_get(string $kind = "")

return $return_sapi_windows_cp_get; // int
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_GET
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_IS_UTF8
// ============================== OFFLINE
// ============================== ABOUT
// Indicates whether the codepage is UTF-8 compatible.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_cp_is_utf8() - PHP_7 >= PHP_7_1_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_cp_is_utf8()
{
$return_sapi_windows_cp_is_utf8 = false;

// ========== SAPI_WINDOWS_CP_IS_UTF8 - BEGIN
// ===== ABOUT
// Indicates whether the codepage is UTF-8 compatible
// ===== DESCRIPTION
// Indicates whether the codepage of the current process is UTF-8 compatible.
// ===== SUPPORTED
// PHP_7 >= PHP_7_1_0, PHP_8
// ===== SYNTAX
// sapi_windows_cp_is_utf8(): bool
// ===== CODE
$return_sapi_windows_cp_is_utf8 = sapi_windows_cp_is_utf8(

// This function has no parameters.

); // Return Values
// Returns whether the codepage of the current process is UTF-8 compatible.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sapi-windows-cp-is-utf8.php
// ========== SAPI_WINDOWS_CP_IS_UTF8 - END

// SYNTAX:
// bool sapi_windows_cp_is_utf8()

return $return_sapi_windows_cp_is_utf8; // bool
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_IS_UTF8
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_SET
// ============================== OFFLINE
// ============================== ABOUT
// Set process codepage.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_cp_set() - PHP_7 >= PHP_7_1_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_cp_set($codepage)
{
$return_sapi_windows_cp_set = false;

// ========== SAPI_WINDOWS_CP_SET - BEGIN
// ===== ABOUT
// Set process codepage
// ===== DESCRIPTION
// Set the codepage of the current process.
// ===== SUPPORTED
// PHP_7 >= PHP_7_1_0, PHP_8
// ===== SYNTAX
// sapi_windows_cp_set(int $codepage): bool
// ===== CODE
$return_sapi_windows_cp_set = sapi_windows_cp_set(

$codepage // int codepage - A codepage identifier.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.sapi-windows-cp-set.php
// ========== SAPI_WINDOWS_CP_SET - END

// SYNTAX:
// bool sapi_windows_cp_set(int $codepage)

return $return_sapi_windows_cp_set; // bool
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_CP_SET
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_GENERATE_CTRL_EVENT
// ============================== OFFLINE
// ============================== ABOUT
// Send a CTRL event to another process.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_generate_ctrl_event() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_generate_ctrl_event($event, $pid = 0)
{
$return_sapi_windows_generate_ctrl_event = false;

// ========== SAPI_WINDOWS_GENERATE_CTRL_EVENT - BEGIN
// ===== ABOUT
// Send a CTRL event to another process
// ===== DESCRIPTION
// Sends a CTRL event to another process in the same process group.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// sapi_windows_generate_ctrl_event(int $event, int $pid = 0): bool
// ===== CODE
$return_sapi_windows_generate_ctrl_event = sapi_windows_generate_ctrl_event(

$event, // int event - The CTRL event to send; either PHP_WINDOWS_EVENT_CTRL_C or PHP_WINDOWS_EVENT_CTRL_BREAK.

$pid // int pid - The ID of the process to which to send the event to. If 0 is given, the event is sent to all processes of the process group.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic sapi_windows_generate_ctrl_event() Usage
// This example shows how to pass along CTRL+BREAK events to a child process. In this case the child process echoes I'm still alive every second, until the user presses CTRL+BREAK, what causes only the child process to be terminated.
// [php]
// // forward CTRL+BREAK events to the child process
// sapi_windows_set_ctrl_handler('sapi_windows_generate_ctrl_event');
// 
// // create a child process which echoes every second
// $cmd = ['php', '-r', 'while (true) { echo "I\'m still alive\n"; sleep(1); }'];
// $descspec = array(['pipe', 'r'], ['pipe', 'w'], ['pipe', 'w']);
// $options = ['create_process_group' => true];
// $proc = proc_open($cmd, $descspec, $pipes, null, null, $options);
// while (true) {
//     echo fgets($pipes[1]);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sapi-windows-generate-ctrl-event.php
// ========== SAPI_WINDOWS_GENERATE_CTRL_EVENT - END

// SYNTAX:
// bool sapi_windows_generate_ctrl_event(int $event, int $pid = 0)

return $return_sapi_windows_generate_ctrl_event; // bool
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_GENERATE_CTRL_EVENT
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_SET_CTRL_HANDLER
// ============================== OFFLINE
// ============================== ABOUT
// Set or remove a CTRL event handler.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_set_ctrl_handler() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_set_ctrl_handler($handler, $add = true)
{
$return_sapi_windows_set_ctrl_handler = false;

// ========== SAPI_WINDOWS_SET_CTRL_HANDLER - BEGIN
// ===== ABOUT
// Set or remove a CTRL event handler
// ===== DESCRIPTION
// Sets or removes a CTRL event handler, which allows Windows CLI processes to intercept or ignore CTRL+C and CTRL+BREAK events. Note that in multithreaded environments, this is only possible when called from the main thread.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// sapi_windows_set_ctrl_handler(?callable $handler, bool $add = true): bool
// ===== CODE
$return_sapi_windows_set_ctrl_handler = sapi_windows_set_ctrl_handler(

$handler, // callable handler - A callback function to set or remove. If set, this function will be called whenever a CTRL+C or CTRL+BREAK event occurs. The function is supposed to have the following signature:
//  handler(int $event): void
//  event - The CTRL event which has been received; either PHP_WINDOWS_EVENT_CTRL_C or PHP_WINDOWS_EVENT_CTRL_BREAK.
// Setting a null handler causes the process to ignore CTRL+C events, but not CTRL+BREAK events.

$add // bool add - If true, the handler is set. If false, the handler is removed.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic sapi_windows_set_ctrl_handler() Usage
// This example shows how to intercept CTRL events.
// [php]
// function ctrl_handler(int $event)
// {
//     switch ($event) {
//         case PHP_WINDOWS_EVENT_CTRL_C:
//             echo "You have pressed CTRL+C\n";
//             break;
//         case PHP_WINDOWS_EVENT_CTRL_BREAK:
//             echo "You have pressed CTRL+BREAK\n";
//             break;
//     }
// }
// 
// sapi_windows_set_ctrl_handler('ctrl_handler');
// while (true); // infinite loop, so the handler can be triggered
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sapi-windows-set-ctrl-handler.php
// ========== SAPI_WINDOWS_SET_CTRL_HANDLER - END

// SYNTAX:
// bool sapi_windows_set_ctrl_handler(callable $handler, bool $add = true)

return $return_sapi_windows_set_ctrl_handler; // bool
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_SET_CTRL_HANDLER
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SAPI_WINDOWS_VT100_SUPPORT
// ============================== OFFLINE
// ============================== ABOUT
// Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// sapi_windows_vt100_support() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_basic_misc_sapi_windows_vt100_support($stream, $enable = null)
{
$return_sapi_windows_vt100_support = false;

// ========== SAPI_WINDOWS_VT100_SUPPORT - BEGIN
// ===== ABOUT
// Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
// ===== DESCRIPTION
// If enable is null, the function returns true if the stream stream has VT100 control codes enabled, false otherwise.
// If enable is a bool, the function will try to enable or disable the VT100 features of the stream stream. If the feature has been successfully enabled (or disabled), the function will return true, or false otherwise.
// At startup, PHP tries to enable the VT100 feature of the STDOUT/STDERR streams. By the way, if those streams are redirected to a file, the VT100 features may not be enabled.
// If VT100 support is enabled, it is possible to use control sequences as they are known from the VT100 terminal. They allow the modification of the terminal's output. On Windows these sequences are called Console Virtual Terminal Sequences.
// Warning: This function uses the ENABLE_VIRTUAL_TERMINAL_PROCESSING flag implemented in the Windows 10 API, so the VT100 feature may not be available on older Windows versions.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// sapi_windows_vt100_support(resource $stream, ?bool $enable = null): bool
// ===== CODE
$return_sapi_windows_vt100_support = sapi_windows_vt100_support(

$stream, // resource stream - The stream on which the function will operate.

$enable // bool enable - If bool, the VT100 feature will be enabled (if true) or disabled (if false).

); // Return Values
// If enable is null: returns true if the VT100 feature is enabled, false otherwise.
// If enable is a bool: Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - enable is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 sapi_windows_vt100_support() default state
// By default, STDOUT and STDERR have the VT100 feature enabled.
// [code]
// php -r "var_export(sapi_windows_vt100_support(STDOUT));echo ' ';var_export(sapi_windows_vt100_support(STDERR));"
// [/code]
// The above example will output something similar to:
// [result]
// true true
// [/result]
// By the way, if a stream is redirected, the VT100 feature will not be enabled:
// [code]
// php -r "var_export(sapi_windows_vt100_support(STDOUT));echo ' ';var_export(sapi_windows_vt100_support(STDERR));" 2>NUL
// [/code]
// The above example will output something similar to:
// [result]
// true false
// [/result]
// [/example]
// [example]
// Example #2 sapi_windows_vt100_support() changing state
// You won't be able to enable the VT100 feature of STDOUT or STDERR if the stream is redirected.
// [code]
// php -r "var_export(sapi_windows_vt100_support(STDOUT, true));echo ' ';var_export(sapi_windows_vt100_support(STDERR, true));" 2>NUL
// [/code]
// The above example will output something similar to:
// [result]
// true false
// [/result]
// [/example]
// [example]
// Example #3 Example usage of VT100 support enabled
// [php]
// $out = fopen('php://stdout','w');
// fwrite($out, 'Just forgot a lettr.');
// // Moves the cursor two characters backwards
// fwrite($out, "\033[2D");
// // Inserts one blank, shifting existing text to the right -> Just forgot a lett r.
// fwrite($out, "\033[1@");
// fwrite($out, 'e');
// [/php]
// The above example will output:
// [result]
// Just forgot a letter.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sapi-windows-vt100-support.php
// ========== SAPI_WINDOWS_VT100_SUPPORT - END

// SYNTAX:
// bool sapi_windows_vt100_support(resource $stream, bool $enable = null)

return $return_sapi_windows_vt100_support; // bool
}
*/
// ============================== END
// PHP_BASIC_MISC_SAPI_WINDOWS_VT100_SUPPORT
// ==============================


// ============================== BEGIN
//   PHP_BASIC_MISC_SHOW_SOURCE   
// ============================== PUBLIC
// ============================== ABOUT
// Syntax highlighting of a file.
// 
// show_source - Alias of highlight_file().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// show_source() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_show_source($filename, $return = false)
{
$return_show_source = false;

// ========== SHOW_SOURCE - BEGIN
// ===== ABOUT
// show_source - Alias of highlight_file()
// ===== DESCRIPTION
// This function is an alias of: highlight_file().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_show_source = show_source(

$filename, // string filename

$return // bool return

); // Return
// string|bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.show-source.php
// ========== SHOW_SOURCE - END

// ========== HIGHLIGHT_FILE - BEGIN
// ===== ABOUT
// Syntax highlighting of a file
// ===== DESCRIPTION
// Prints out or returns a syntax highlighted version of the code contained in filename using the colors defined in the built-in syntax highlighter for PHP.
// Many servers are configured to automatically highlight files with a phps extension. For example, example.phps when viewed will show the syntax highlighted source of the file. To enable this, add this line to the httpd.conf:
// [code]
// AddType application/x-httpd-php-source .phps
// [/code]
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// highlight_file(string $filename, bool $return = false): string|bool
// ===== CODE
// $return_highlight_file = highlight_file(

// $filename, // string filename - Path to the PHP file to be highlighted.

// $return // bool return - Set this parameter to true to make this function return the highlighted code.

// ); // Return Values
// If return is set to true, returns the highlighted code as a string instead of printing it out. Otherwise, it will return true on success, false on failure.
// 
// Notes
// Caution: Care should be taken when using the highlight_file() function to make sure that you do not inadvertently reveal sensitive information such as passwords or any other type of information that might create a potential security risk.
// Note: When the return parameter is used, this function uses internal output buffering so it cannot be used inside an ob_start() callback function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.highlight-file.php
// ========== HIGHLIGHT_FILE - END

// SYNTAX:
// string|bool show_source(string $filename, bool $return = false)

return $return_show_source; // string|bool
}
// ============================== END
//   PHP_BASIC_MISC_SHOW_SOURCE   
// ==============================


// ============================== BEGIN
//      PHP_BASIC_MISC_SLEEP      
// ============================== PUBLIC
// ============================== ABOUT
// Delay execution.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// sleep() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_sleep($seconds)
{
$return_sleep = 0;

// ========== SLEEP - BEGIN
// ===== ABOUT
// Delay execution
// ===== DESCRIPTION
// Delays the program execution for the given number of seconds.
// Note: In order to delay program execution for a fraction of a second, use usleep() as the sleep() function expects an int. For example, sleep(0.25) will pause program execution for 0 seconds.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// sleep(int $seconds): int
// ===== CODE
$return_sleep = sleep(

$seconds // int seconds - Halt time in seconds (must be greater than or equal to 0).

); // Return Values
// Returns zero on success.
// If the call was interrupted by a signal, sleep() returns a non-zero value. On Windows, this value will always be 192 (the value of the WAIT_IO_COMPLETION constant within the Windows API). On other platforms, the return value will be the number of seconds left to sleep.
// 
// Errors/Exceptions
// If the specified number of seconds is negative, this function will throw a ValueError.
// 
// Changelog
// Version - Description
// 8.0.0   - The function throws a ValueError on negative seconds; previously, an E_WARNING was raised instead, and the function returned false.
// 
// [examples]
// Examples
// [example]
// Example #1 sleep() example
// [php]
// 
// // current time
// echo date('h:i:s') . "\n";
// 
// // sleep for 10 seconds
// sleep(10);
// 
// // wake up !
// echo date('h:i:s') . "\n";
// 
// [/php]
// This example will output (after 10 seconds)
// [result]
// 05:31:23
// 05:31:33
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sleep.php
// ========== SLEEP - END

// SYNTAX:
// int sleep(int $seconds)

return $return_sleep; // int
}
// ============================== END
//      PHP_BASIC_MISC_SLEEP      
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_SYS_GETLOADAVG 
// ============================== OFFLINE
// ============================== ABOUT
// Gets system load average.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// sys_getloadavg() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_misc_sys_getloadavg()
{
$return_sys_getloadavg = false;

// ========== SYS_GETLOADAVG - BEGIN
// ===== ABOUT
// Gets system load average
// ===== DESCRIPTION
// Returns three samples representing the average system load (the number of processes in the system run queue) over the last 1, 5 and 15 minutes, respectively. Returns false on failure.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ===== SYNTAX
// sys_getloadavg(): array|false
// ===== CODE
$return_sys_getloadavg = sys_getloadavg(

// This function has no parameters.

); // Return Values
// Returns an array with three samples (last 1, 5 and 15 minutes).
// 
// [examples]
// Examples
// [example]
// Example #1 A sys_getloadavg() example
// [php]
// $load = sys_getloadavg();
// if ($load[0] > 0.80) {
//     header('HTTP/1.1 503 Too busy, try again later');
//     die('Server too busy. Please try again later.');
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is not implemented on Windows platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.sys-getloadavg.php
// ========== SYS_GETLOADAVG - END

// SYNTAX:
// array|false sys_getloadavg()

return $return_sys_getloadavg; // array|false
}
*/
// ============================== END
// PHP_BASIC_MISC_SYS_GETLOADAVG 
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_TIME_NANOSLEEP 
// ============================== OFFLINE
// ============================== ABOUT
// Delay for a number of seconds and nanoseconds.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// time_nanosleep() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_misc_time_nanosleep($seconds, $nanoseconds)
{
$return_time_nanosleep = false;

// ========== TIME_NANOSLEEP - BEGIN
// ===== ABOUT
// Delay for a number of seconds and nanoseconds
// ===== DESCRIPTION
// Delays program execution for the given number of seconds and nanoseconds.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// time_nanosleep(int $seconds, int $nanoseconds): array|bool
// ===== CODE
$return_time_nanosleep = time_nanosleep(

$seconds, // int seconds - Must be a non-negative integer.

$nanoseconds // int nanoseconds - Must be a non-negative integer less than 1 billion.
// Note: On Windows, the system may sleep longer that the given number of nanoseconds, depending on the hardware.

); // Return Values
// Returns true on success or false on failure.
// If the delay was interrupted by a signal, an associative array will be returned with the components:
// * seconds     - number of seconds remaining in the delay
// * nanoseconds - number of nanoseconds remaining in the delay
// 
// [examples]
// Examples
// [example]
// Example #1 time_nanosleep() example
// [php]
// // Careful! This won't work as expected if an array is returned
// if (time_nanosleep(0, 500000000)) {
//     echo "Slept for half a second.\n";
// }
// 
// // This is better:
// if (time_nanosleep(0, 500000000) === true) {
//     echo "Slept for half a second.\n";
// }
// 
// // And this is the best:
// $nano = time_nanosleep(2, 100000);
// 
// if ($nano === true) {
//     echo "Slept for 2 seconds, 100 microseconds.\n";
// } elseif ($nano === false) {
//     echo "Sleeping failed.\n";
// } elseif (is_array($nano)) {
//     $seconds = $nano['seconds'];
//     $nanoseconds = $nano['nanoseconds'];
//     echo "Interrupted by a signal.\n";
//     echo "Time remaining: $seconds seconds, $nanoseconds nanoseconds.";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.time-nanosleep.php
// ========== TIME_NANOSLEEP - END

// SYNTAX:
// array|bool time_nanosleep(int $seconds, int $nanoseconds)

return $return_time_nanosleep; // array|bool
}
*/
// ============================== END
// PHP_BASIC_MISC_TIME_NANOSLEEP 
// ==============================


// ============================== BEGIN
// PHP_BASIC_MISC_TIME_SLEEP_UNTIL
// ============================== OFFLINE
// ============================== ABOUT
// Make the script sleep until the specified time.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// time_sleep_until - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_misc_time_sleep_until($timestamp)
{
$return_time_sleep_until = false;

// ========== TIME_SLEEP_UNTIL - BEGIN
// ===== ABOUT
// Make the script sleep until the specified time
// ===== DESCRIPTION
// Makes the script sleep until the specified timestamp.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// time_sleep_until(float $timestamp): bool
// ===== CODE
$return_time_sleep_until = time_sleep_until(

$timestamp // float timestamp - The timestamp when the script should wake.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If the specified timestamp is in the past, this function will generate a E_WARNING.
// 
// [examples]
// Examples
// [example]
// Example #1 A time_sleep_until() example
// [php]
// 
// //returns false and generates a warning
// var_dump(time_sleep_until(time()-1));
// 
// // may only work on faster computers, will sleep up to 0.2 seconds
// var_dump(time_sleep_until(microtime(true)+0.2));
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: All signals will be delivered after the script wakes up.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.time-sleep-until.php
// ========== TIME_SLEEP_UNTIL - END

// SYNTAX:
// bool time_sleep_until(float $timestamp)

return $return_time_sleep_until; // bool
}
*/
// ============================== END
// PHP_BASIC_MISC_TIME_SLEEP_UNTIL
// ==============================


// ============================== BEGIN
//     PHP_BASIC_MISC_UNIQID     
// ============================== PUBLIC
// ============================== ABOUT
// Generate a unique ID.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// uniqid() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_uniqid($prefix = "", $more_entropy = false)
{
$return_uniqid = null;

// ========== UNIQID - BEGIN
// ===== ABOUT
// Generate a unique ID
// ===== DESCRIPTION
// Gets a prefixed unique identifier based on the current time in microseconds.
//  Caution:
//  This function does not generate cryptographically secure values, and must not be used for cryptographic purposes, or purposes that require returned values to be unguessable.
//  If cryptographically secure randomness is required, the Random\Randomizer may be used with the Random\Engine\Secure engine. For simple use cases, the random_int() and random_bytes() functions provide a convenient and secure API that is backed by the operating system’s CSPRNG.
// Warning: This function does not guarantee uniqueness of return value. Since most systems adjust system clock by NTP or like, system time is changed constantly. Therefore, it is possible that this function does not return unique ID for the process/thread. Use more_entropy to increase likelihood of uniqueness.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// uniqid(string $prefix = "", bool $more_entropy = false): string
// ===== CODE
$return_uniqid = uniqid(

$prefix, // string prefix - Can be useful, for instance, if you generate identifiers simultaneously on several hosts that might happen to generate the identifier at the same microsecond.
// With an empty prefix, the returned string will be 13 characters long. If more_entropy is true, it will be 23 characters.

$more_entropy // bool more_entropy - If set to true, uniqid() will add additional entropy (using the combined linear congruential generator) at the end of the return value, which increases the likelihood that the result will be unique.

); // Return Values
// Returns timestamp based unique identifier as a string.
// Warning: This function tries to create unique identifier, but it does not guarantee 100% uniqueness of return value.
// 
// [examples]
// Examples
// [example]
// Example #1 uniqid() Example
// [php]
// // A uniqid, like: 4b3403665fea6
// printf("uniqid(): %s\r\n", uniqid());
// 
// // We can also prefix the uniqid, this the same as 
// // doing:
// //
// // $uniqid = $prefix . uniqid();
// // $uniqid = uniqid($prefix);
//  //
// printf("uniqid('php_'): %s\r\n", uniqid('php_'));
// 
// // We can also activate the more_entropy parameter, which is 
// // required on some systems, like Cygwin. This makes uniqid()
// // produce a value like: 4b340550242239.64159797
//  //
// printf("uniqid('', true): %s\r\n", uniqid('', true));
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Under Cygwin, the more_entropy must be set to true for this function to work.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.uniqid.php
// ========== UNIQID - END

// SYNTAX:
// string uniqid(string $prefix = "", bool $more_entropy = false)

return $return_uniqid; // string
}
// ============================== END
//     PHP_BASIC_MISC_UNIQID     
// ==============================


// ============================== BEGIN
//     PHP_BASIC_MISC_UNPACK     
// ============================== PUBLIC
// ============================== ABOUT
// Unpack data from binary string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// unpack() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_unpack($format, $string, $offset = 0)
{
$return_unpack = false;

// ========== UNPACK - BEGIN
// ===== ABOUT
// Unpack data from binary string
// ===== DESCRIPTION
// Unpacks from a binary string into an array according to the given format.
// The unpacked data is stored in an associative array. To accomplish this you have to name the different format codes and separate them by a slash /. If a repeater argument is present, then each of the array keys will have a sequence number behind the given name.
// 
// Changes were made to bring this function into line with Perl:
// * The "a" code now retains trailing NULL bytes.
// * The "A" code now strips all trailing ASCII whitespace (spaces, tabs, newlines, carriage returns, and NULL bytes).
// * The "Z" code was added for NULL-padded strings, and removes trailing NULL bytes.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// unpack(string $format, string $string, int $offset = 0): array|false
// ===== CODE
$return_unpack = unpack(

$format, // string format - See pack() for an explanation of the format codes.

$string, // string string - The packed data.

$offset // int offset - The offset to begin unpacking from.

); // Return Values
// Returns an associative array containing unpacked elements of binary string, or false on failure.
// 
// Changelog
// Version - Description
// 7.2.0   - float and double types supports both Big Endian and Little Endian.
// 7.1.0   - The optional offset has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 unpack() example
// [php]
// $binarydata = "\x04\x00\xa0\x00";
// $array = unpack("cchars/nint", $binarydata);
// print_r($array);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [chars] => 4
//     [int] => 160
// )
// [/result]
// [/example]
// [example]
// Example #2 unpack() example with a repeater
// [php]
// $binarydata = "\x04\x00\xa0\x00";
// $array = unpack("c2chars/nint", $binarydata);
// print_r($array);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [chars1] => 4
//     [chars2] => 0
//     [int] => 40960
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Caution: Note that PHP internally stores integral values as signed. If you unpack a large unsigned long and it is of the same size as PHP internally stored values the result will be a negative number even though unsigned unpacking was specified.
//  Caution:
//  If you do not name an element, numeric indices starting from 1 are used. Be aware that if you have more than one unnamed element, some data is overwritten because the numbering restarts from 1 for each element.
//  [example]
//  Example #3 unpack() example with unnamed keys
//  [php]
//  $binarydata = "\x32\x42\x00\xa0";
//  $array = unpack("c2/n", $binarydata);
//  var_dump($array);
//  [/php]
//  The above example will output:
//  [result]
//  array(2) {
//    [1]=>
//    int(160)
//    [2]=>
//    int(66)
//  }
//  [/result]
//  Note that the first value from the c specifier is overwritten by the first value from the n specifier.
//  [/example]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.unpack.php
// ========== UNPACK - END

// SYNTAX:
// array|false unpack(string $format, string $string, int $offset = 0)

return $return_unpack; // array|false
}
// ============================== END
//     PHP_BASIC_MISC_UNPACK     
// ==============================


// ============================== BEGIN
//     PHP_BASIC_MISC_USLEEP     
// ============================== PUBLIC
// ============================== ABOUT
// Delay execution in microseconds.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// usleep() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_misc_usleep($microseconds)
{

// ========== USLEEP - BEGIN
// ===== ABOUT
// Delay execution in microseconds
// ===== DESCRIPTION
// Delays program execution for the given number of microseconds.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// usleep(int $microseconds): void
// ===== CODE
usleep(

$microseconds // int microseconds - Halt time in microseconds. A microsecond is one millionth of a second.
// Note: Values larger than 1000000 (i.e. sleeping for more than a second) may not be supported by the operating system. Use sleep() instead.
// Note: The sleep may be lengthened slightly (i.e. may be longer than microseconds) by any system activity or by the time spent processing the call or by the granularity of system timers.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 usleep() example
// [php]
// 
// // Current time
// echo (new DateTime('now'))->format('H:i:s.v'), "\n";
// 
// // wait for 2 milliseconds
// usleep(2000);
// 
// // back!
// echo (new DateTime('now'))->format('H:i:s.v'), "\n";
// 
// // wait for 30 milliseconds
// usleep(30000);
// 
// // back again!
// echo (new DateTime('now'))->format('H:i:s.v'), "\n";
// 
// [/php]
// The above example will output:
// [result]
// 11:13:28.005
// 11:13:28.007
// 11:13:28.037
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.usleep.php
// ========== USLEEP - END

// SYNTAX:
// void usleep(int $microseconds)

// Return: void
}
// ============================== END
//     PHP_BASIC_MISC_USLEEP     
// ==============================


// ============================== END
//         PHP_BASIC_MISC         
// ==============================
?>