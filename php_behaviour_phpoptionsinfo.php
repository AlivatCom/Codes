<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_PHPOPTIONSINFO - BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ENV_VARIABLE - array php_behaviour_phpoptionsinfo_env_variable()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ARGC_VARIABLE - int php_behaviour_phpoptionsinfo_argc_variable()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ARGV_VARIABLE - array php_behaviour_phpoptionsinfo_argv_variable()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ASSERT_OPTIONS - mixed php_behaviour_phpoptionsinfo_assert_options(int $option, mixed $value)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ASSERT_ASSERT - bool php_behaviour_phpoptionsinfo_assert_assert(mixed $assertion, Throwable|string|null $description = null)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_CLI_GET_PROCESS_TITLE - string php_behaviour_phpoptionsinfo_cli_get_process_title()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_CLI_SET_PROCESS_TITLE - bool php_behaviour_phpoptionsinfo_cli_set_process_title(string $title)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_DL - bool php_behaviour_phpoptionsinfo_dl(string $extension_filename)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_EXTENSION_LOADED - bool php_behaviour_phpoptionsinfo_extension_loaded(string $extension)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_COLLECT_CYCLES - int php_behaviour_phpoptionsinfo_gc_collect_cycles()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_DISABLE - void php_behaviour_phpoptionsinfo_gc_disable()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_ENABLE - void php_behaviour_phpoptionsinfo_gc_enable()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_ENABLED - bool php_behaviour_phpoptionsinfo_gc_enabled()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_MEM_CACHES - int php_behaviour_phpoptionsinfo_gc_mem_caches()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_STATUS - array php_behaviour_phpoptionsinfo_gc_status()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_CFG_VAR - string|array|false php_behaviour_phpoptionsinfo_get_cfg_var(string $option)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_CURRENT_USER - string php_behaviour_phpoptionsinfo_get_current_user()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_DEFINED_CONSTANTS - array php_behaviour_phpoptionsinfo_get_defined_constants(bool $categorize = false)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_EXTENSION_FUNCS - array|false php_behaviour_phpoptionsinfo_get_extension_funcs(string $extension)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_INCLUDE_PATH - string|false php_behaviour_phpoptionsinfo_get_include_path()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_INCLUDED_FILES - array php_behaviour_phpoptionsinfo_get_included_files()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_LOADED_EXTENSIONS - array php_behaviour_phpoptionsinfo_get_loaded_extensions(bool $zend_extensions = false)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_MAGIC_QUOTES_GPC - bool php_behaviour_phpoptionsinfo_get_magic_quotes_gpc()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_MAGIC_QUOTES_RUNTIME - bool php_behaviour_phpoptionsinfo_get_magic_quotes_runtime()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_REQUIRED_FILES - array php_behaviour_phpoptionsinfo_get_required_files()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_RESOURCES - array php_behaviour_phpoptionsinfo_get_resources(string $type = null)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETENV - string|array|false php_behaviour_phpoptionsinfo_getenv(string $name = null, bool $local_only = false)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETLASTMOD - int|false php_behaviour_phpoptionsinfo_getlastmod()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYGID - int|false php_behaviour_phpoptionsinfo_getmygid()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYINODE - int|false php_behaviour_phpoptionsinfo_getmyinode()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYPID - int|false php_behaviour_phpoptionsinfo_getmypid()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYUID - int|false php_behaviour_phpoptionsinfo_getmyuid()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETOPT - array|false php_behaviour_phpoptionsinfo_getopt(string $short_options, array $long_options, int& $rest_index)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETRUSAGE - array|false php_behaviour_phpoptionsinfo_getrusage(int $mode = 0)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_ALTER - string|false php_behaviour_phpoptionsinfo_ini_alter(string $option, string|int|float|bool|null $value)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_GET_ALL - array|false php_behaviour_phpoptionsinfo_ini_get_all(string $extension = null, bool $details = true)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_GET - string|false php_behaviour_phpoptionsinfo_ini_get(string $option)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_PARSE_QUANTITY - int php_behaviour_phpoptionsinfo_ini_parse_quantity(string $shorthand)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_RESTORE - void php_behaviour_phpoptionsinfo_ini_restore(string $option)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_SET - string|false php_behaviour_phpoptionsinfo_ini_set(string $option, string|int|float|bool|null $value)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_GET_PEAK_USAGE - int php_behaviour_phpoptionsinfo_memory_get_peak_usage(bool $real_usage = false)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_GET_USAGE - int php_behaviour_phpoptionsinfo_memory_get_usage(bool $real_usage = false)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_RESET_PEAK_USAGE - void php_behaviour_phpoptionsinfo_memory_reset_peak_usage()
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_INI_LOADED_FILE - string|false php_behaviour_phpoptionsinfo_php_ini_loaded_file()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_INI_SCANNED_FILES - string|false php_behaviour_phpoptionsinfo_php_ini_scanned_files()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_SAPI_NAME - string|false php_behaviour_phpoptionsinfo_php_sapi_name()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_UNAME - string php_behaviour_phpoptionsinfo_php_uname(string $mode = "a")
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPCREDITS - bool php_behaviour_phpoptionsinfo_phpcredits(int $flags = CREDITS_ALL)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPINFO - bool php_behaviour_phpoptionsinfo_phpinfo(int $flags = INFO_ALL)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPVERSION - string|false php_behaviour_phpoptionsinfo_phpversion(string $extension = null)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PUTENV - bool php_behaviour_phpoptionsinfo_putenv(string $assignment)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_RESTORE_INCLUDE_PATH - void php_behaviour_phpoptionsinfo_restore_include_path()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SET_INCLUDE_PATH - string|false php_behaviour_phpoptionsinfo_set_include_path(string $include_path)
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SET_TIME_LIMIT - bool php_behaviour_phpoptionsinfo_set_time_limit(int $seconds)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_SYS_GET_TEMP_DIR - string php_behaviour_phpoptionsinfo_sys_get_temp_dir()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_VERSION_COMPARE - int|bool php_behaviour_phpoptionsinfo_version_compare(string $version1, string $version2, string $operator = null)
// OFFLINE | PHP_BEHAVIOUR_PHPOPTIONSINFO_ZEND_THREAD_ID - int php_behaviour_phpoptionsinfo_zend_thread_id()
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ZEND_VERSION - string php_behaviour_phpoptionsinfo_zend_version()
// PHP_BEHAVIOUR_PHPOPTIONSINFO - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING VARIABLES (3)
// $_ENV - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// $argc - PHP_4, PHP_5, PHP_7, PHP_8
// $argv - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING FUNCTIONS (55)
// assert_options() - PHP_4, PHP_5, PHP_7, PHP_8
// assert() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | cli_get_process_title() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | cli_set_process_title() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// dl() - PHP_4, PHP_5, PHP_7, PHP_8
// extension_loaded() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | gc_collect_cycles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | gc_disable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | gc_enable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | gc_enabled() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | gc_mem_caches() - PHP_7, PHP_8
// OFFLINE | gc_status() - PHP_7 >= PHP_7_3_0, PHP_8
// get_cfg_var() - PHP_4, PHP_5, PHP_7, PHP_8
// get_current_user() - PHP_4, PHP_5, PHP_7, PHP_8
// get_defined_constants() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// get_extension_funcs() - PHP_4, PHP_5, PHP_7, PHP_8
// get_include_path() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// get_included_files() - PHP_4, PHP_5, PHP_7, PHP_8
// get_loaded_extensions() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | get_magic_quotes_gpc() - PHP_4, PHP_5, PHP_7
// OFFLINE | get_magic_quotes_runtime() - PHP_4, PHP_5, PHP_7
// get_required_files() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | get_resources() - PHP_7, PHP_8
// getenv() - PHP_4, PHP_5, PHP_7, PHP_8
// getlastmod() - PHP_4, PHP_5, PHP_7, PHP_8
// getmygid() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// getmyinode() - PHP_4, PHP_5, PHP_7, PHP_8
// getmypid() - PHP_4, PHP_5, PHP_7, PHP_8
// getmyuid() - PHP_4, PHP_5, PHP_7, PHP_8
// getopt() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// getrusage() - PHP_4, PHP_5, PHP_7, PHP_8
// ini_alter() - PHP_4, PHP_5, PHP_7, PHP_8
// ini_get_all() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ini_get() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | ini_parse_quantity() - PHP_8 >= PHP_8_2_0
// ini_restore() - PHP_4, PHP_5, PHP_7, PHP_8
// ini_set() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | memory_get_peak_usage() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// memory_get_usage() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// OFFLINE | memory_reset_peak_usage() - PHP_8 >= PHP_8_2_0
// OFFLINE | php_ini_loaded_file() - PHP_5 >= PHP_5_2_4, PHP_7, PHP_8
// php_ini_scanned_files() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// php_sapi_name() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// php_uname() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// phpcredits() - PHP_4, PHP_5, PHP_7, PHP_8
// phpinfo() - PHP_4, PHP_5, PHP_7, PHP_8
// phpversion() - PHP_4, PHP_5, PHP_7, PHP_8
// putenv() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | restore_include_path() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7
// set_include_path() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// set_time_limit() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | sys_get_temp_dir() - PHP_5 >= PHP_5_2_1, PHP_7, PHP_8
// version_compare() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// OFFLINE | zend_thread_id() - PHP_5, PHP_7, PHP_8
// zend_version() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (10)
// array
// int
// mixed
// bool
// Throwable
// string
// null
// void
// false
// float
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_PHPOPTIONSINFO  
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / PHP Options/Info - PHP Options and Information
// URL: https://www.php.net/manual/en/book.info.php
// ============================== DESCRIPTION
// PHP_OPTIONS_AND_INFORMATION
// INSTALLATION_AND_CONFIGURATION_RUNTIME_CONFIGURATION
// FEATURES_GARBAGE_COLLECTION
// 
// PHP_OPTIONS_AND_INFORMATION - BEGIN
// PHP Options and Information
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// PHP_OPTIONS_INFO_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// This functions enable you to get a lot of information about PHP itself, e.g. runtime configuration, loaded extensions, version and much more. You'll also find functions to set options for your running PHP. The probably best known function of PHP - phpinfo() - can be found here.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/intro.info.php
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
// URL: https://www.php.net/manual/en/info.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/info.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// PHP Options/Info Configuration Options
// Name                    | Default | Changeable     | Changelog
// assert.active           | "1"     | PHP_INI_ALL    |
// assert.bail             | "0"     | PHP_INI_ALL    |
// assert.warning          | "1"     | PHP_INI_ALL    |
// assert.callback         | NULL    | PHP_INI_ALL    |
// assert.quiet_eval       | "0"     | PHP_INI_ALL    | Removed as of PHP 8.0.0
// assert.exception        | "1"     | PHP_INI_ALL    | Prior to PHP 8.0.0, defaults to "0"
// enable_dl               | "1"     | PHP_INI_SYSTEM | This deprecated feature will certainly be removed in the future.
// max_execution_time      | "30"    | PHP_INI_ALL    |
// max_input_time          | "-1"    | PHP_INI_PERDIR |
// max_input_nesting_level | "64"    | PHP_INI_PERDIR |
// max_input_vars          | 1000    | PHP_INI_PERDIR |
// zend.enable_gc          | "1"     | PHP_INI_ALL    |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// assert.active bool          - Enable assert() evaluation. zend.assertions should be used instead to control the behaviour of assert().
// assert.bail bool            - Terminate script execution on failed assertions.
// assert.warning bool         - Issue a PHP warning for each failed assertion.
// assert.callback string      - User function to call on failed assertions.
// assert.quiet_eval bool      - Warning: This feature was REMOVED as of PHP 8.0.0.
// Use the current setting of error_reporting() during assertion expression evaluation. If enabled, no errors are shown (implicit error_reporting(0)) while evaluation. If disabled, errors are shown according to the settings of error_reporting()
// assert.exception bool       - Issue an AssertionError exception for the failed assertion.
// enable_dl bool              - This directive allows to turn dynamic loading of PHP extensions with dl() on and off.
// The main reason for turning dynamic loading off is security. With dynamic loading, it's possible to ignore all open_basedir restrictions. The default is to allow dynamic loading.
// max_execution_time int      - This sets the maximum time in seconds a script is allowed to run before it is terminated by the parser. This helps prevent poorly written scripts from tying up the server. The default setting is 30. When running PHP from the command line the default setting is 0.
// On non Windows systems, the maximum execution time is not affected by system calls, stream operations etc. Please see the set_time_limit() function for more details.
// Your web server can have other timeout configurations that may also interrupt PHP execution. Apache has a Timeout directive and IIS has a CGI timeout function. Both default to 300 seconds. See your web server documentation for specific details.
// max_input_time int          - This sets the maximum time in seconds a script is allowed to parse input data, like POST and GET. Timing begins at the moment PHP is invoked at the server and ends when execution begins. The default setting is -1, which means that max_execution_time is used instead. Set to 0 to allow unlimited time.
// max_input_nesting_level int - Sets the max nesting depth of input variables (i.e. $_GET, $_POST.)
// max_input_vars int          - How many input variables may be accepted (limit is applied to $_GET, $_POST and $_COOKIE superglobal separately). Use of this directive mitigates the possibility of denial of service attacks which use hash collisions. If there are more input variables than specified by this directive, an E_WARNING is issued, and further input variables are truncated from the request.
// zend.enable_gc bool         - Enables or disables the circular reference collector.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/info.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/info.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/info.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are always available as part of the PHP core.
// 
// Pre-defined phpcredits() constants
// Constants        | Value | Description
// CREDITS_GROUP    | 1     | A list of the core developers
// CREDITS_GENERAL  | 2     | General credits: Language design and concept, PHP authors and SAPI module.
// CREDITS_SAPI     | 4     | A list of the server API modules for PHP, and their authors.
// CREDITS_MODULES  | 8     | A list of the extension modules for PHP, and their authors.
// CREDITS_DOCS     | 16    | The credits for the documentation team.
// CREDITS_FULLPAGE | 32    | Usually used in combination with the other flags. Indicates that a complete stand-alone HTML page needs to be printed including the information indicated by the other flags.
// CREDITS_QA       | 64    | The credits for the quality assurance team.
// CREDITS_ALL      | -1    | All the credits, equivalent to using: CREDITS_DOCS + CREDITS_GENERAL + CREDITS_GROUP + CREDITS_MODULES + CREDITS_QA CREDITS_FULLPAGE. It generates a complete stand-alone HTML page with the appropriate tags. This is the default value.
// 
// phpinfo() constants
// Constants          | Value | Description
// INFO_GENERAL       | 1     | The configuration line, php.ini location, build date, Web Server, System and more.
// INFO_CREDITS       | 2     | PHP Credits. See also phpcredits().
// INFO_CONFIGURATION | 4     | Current Local and Master values for PHP directives. See also ini_get().
// INFO_MODULES       | 8     | Loaded modules and their respective settings.
// INFO_ENVIRONMENT   | 16    | Environment Variable information that's also available in $_ENV.
// INFO_VARIABLES     | 32    | Shows all predefined variables from EGPCS (Environment, GET, POST, Cookie, Server).
// INFO_LICENSE       | 64    | PHP License information. See also the > license faq.
// INFO_ALL           | -1    | Shows all of the above. This is the default value.
// 
// INI constants
// Constants  | Value | Description
// INI_USER   | 1     | Unused
// INI_PERDIR | 2     | Unused
// INI_SYSTEM | 4     | Unused
// INI_ALL    | 7     | Unused
// Assert constants, these values are used to set the assertion options in assert_options().
// 
// assert() constants
// Constants         | INI Setting       | Description
// ASSERT_ACTIVE     | assert.active     | Enable assert() evaluation.
// ASSERT_CALLBACK   | assert.callback   | Callback to call on failed assertions.
// ASSERT_BAIL       | assert.bail       | Terminate execution on failed assertions.
// ASSERT_EXCEPTION  | assert.exception  | Issues a PHP warning for each failed assertion
// ASSERT_WARNING    | assert.warning    | Issues a PHP warning for each failed assertion
// ASSERT_QUIET_EVAL | assert.quiet_eval | Disable error_reporting during assertion expression evaluation. Removed as of PHP 8.0.0.
// 
// The following constants are only available if the host operating system is Windows, and can tell different versioning information so its possible to detect various features and make use of them. They are all available as of PHP 5.3.0.
// 
// Windows specific constants
// Constant                         - Description
// PHP_WINDOWS_VERSION_MAJOR        - The major version of Windows, this can be either 4 (NT4/Me/98/95), 5 (XP/2003 R2/2003/2000) or 6 (Vista/2008/7/8/8.1).
// PHP_WINDOWS_VERSION_MINOR        - The minor version of Windows, this can be either 0 (Vista/2008/2000/NT4/95), 1 (XP), 2 (2003 R2/2003/XP x64), 10 (98) or 90 (ME).
// PHP_WINDOWS_VERSION_BUILD        - The Windows build number (for example, Windows Vista with SP1 applied is build 6001)
// PHP_WINDOWS_VERSION_PLATFORM     - The platform that PHP currently is running on, this value is 2 on Windows Vista/XP/2000/NT4, Server 2008/2003 and on Windows ME/98/95 this value is 1.
// PHP_WINDOWS_VERSION_SP_MAJOR     - The major version of the service pack installed, this value is 0 if no service pack is installed. For example, Windows XP with service pack 3 installed will make this value 3.
// PHP_WINDOWS_VERSION_SP_MINOR     - The minor version of the service pack installed, this value is 0 if no service pack is installed.
// PHP_WINDOWS_VERSION_SUITEMASK    - The suitemask is a bitmask that can tell if various features of Windows is installed, see the table below for possible bitfield values.
// PHP_WINDOWS_VERSION_PRODUCTTYPE  - This contains the value used to determine the PHP_WINDOWS_NT_* constants. This value may be one of the PHP_WINDOWS_NT_* constants indicating the platform type.
// PHP_WINDOWS_NT_DOMAIN_CONTROLLER - This is a domain controller
// PHP_WINDOWS_NT_SERVER - This is a server system (eg. Server 2008/2003/2000), note that if this is a domain controller its reported as PHP_WINDOWS_NT_DOMAIN_CONTROLLER.
// PHP_WINDOWS_NT_WORKSTATION       - This is a workstation system (eg. Vista/XP/2000/NT4)
// 
// This table shows a list of features that can be checked for using the PHP_WINDOWS_VERSION_SUITEMASK bitmask.
// 
// Windows suitemask bitfields
// Bits       - Description
// 0x00000004 - Microsoft BackOffice components are installed.
// 0x00000400 - Windows Server 2003, Web Edition is installed.
// 0x00004000 - Windows Server 2003, Compute Cluster Edition is installed.
// 0x00000080 - Windows Server 2008 Datacenter, Windows Server 2003, Datacenter Edition or Windows 2000 Datacenter Server is installed.
// 0x00000002 - Windows Server 2008 Enterprise, Windows Server 2003, Enterprise Edition, Windows 2000 Advanced Server, or Windows NT Server 4.0 Enterprise Edition is installed.
// 0x00000040 - Windows XP Embedded is installed.
// 0x00000200 - Windows Vista Home Premium, Windows Vista Home Basic, or Windows XP Home Edition is installed.
// 0x00000100 - Remote Desktop is supported, but only one interactive session is supported. This value is set unless the system is running in application server mode.
// 0x00000001 - Microsoft Small Business Server was once installed on the system, but may have been upgraded to another version of Windows.
// 0x00000020 - Microsoft Small Business Server is installed with the restrictive client license in force.
// 0x00002000 - Windows Storage Server 2003 R2 or Windows Storage Server 2003 is installed.
// 0x00000010 - Terminal Services is installed. This value is always set. If this value is set but 0x00000100 is not set, then the system is running in application server mode.
// 0x00008000 - Windows Home Server is installed.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/info.constants.php
// PREDEFINED_CONSTANTS - END
// 
// PHP_OPTIONS_INFO_FUNCTIONS - BEGIN
// PHP Options/Info Functions
// 
// Table of Contents
// * assert_options           - Set/get the various assert flags
// * assert                   - Checks an assertion
// * cli_get_process_title    - Returns the current process title
// * cli_set_process_title    - Sets the process title
// * dl                       - Loads a PHP extension at runtime
// * extension_loaded         - Find out whether an extension is loaded
// * gc_collect_cycles        - Forces collection of any existing garbage cycles
// * gc_disable               - Deactivates the circular reference collector
// * gc_enable                - Activates the circular reference collector
// * gc_enabled               - Returns status of the circular reference collector
// * gc_mem_caches            - Reclaims memory used by the Zend Engine memory manager
// * gc_status                - Gets information about the garbage collector
// * get_cfg_var              - Gets the value of a PHP configuration option
// * get_current_user         - Gets the name of the owner of the current PHP script
// * get_defined_constants    - Returns an associative array with the names of all the constants and their values
// * get_extension_funcs      - Returns an array with the names of the functions of a module
// * get_include_path         - Gets the current include_path configuration option
// * get_included_files       - Returns an array with the names of included or required files
// * get_loaded_extensions    - Returns an array with the names of all modules compiled and loaded
// * get_magic_quotes_gpc     - Gets the current configuration setting of magic_quotes_gpc
// * get_magic_quotes_runtime - Gets the current active configuration setting of magic_quotes_runtime
// * get_required_files       - Alias of get_included_files
// * get_resources            - Returns active resources
// * getenv                   - Gets the value of a single or all environment variables
// * getlastmod               - Gets time of last page modification
// * getmygid                 - Get PHP script owner's GID
// * getmyinode               - Gets the inode of the current script
// * getmypid                 - Gets PHP's process ID
// * getmyuid                 - Gets PHP script owner's UID
// * getopt                   - Gets options from the command line argument list
// * getrusage                - Gets the current resource usages
// * ini_alter                - Alias of ini_set
// * ini_get_all              - Gets all configuration options
// * ini_get                  - Gets the value of a configuration option
// * ini_parse_quantity       - Get interpreted size from ini shorthand syntax
// * ini_restore              - Restores the value of a configuration option
// * ini_set                  - Sets the value of a configuration option
// * memory_get_peak_usage    - Returns the peak of memory allocated by PHP
// * memory_get_usage         - Returns the amount of memory allocated to PHP
// * memory_reset_peak_usage  - Reset the peak memory usage
// * php_ini_loaded_file      - Retrieve a path to the loaded php.ini file
// * php_ini_scanned_files    - Return a list of .ini files parsed from the additional ini dir
// * php_sapi_name            - Returns the type of interface between web server and PHP
// * php_uname                - Returns information about the operating system PHP is running on
// * phpcredits               - Prints out the credits for PHP
// * phpinfo                  - Outputs information about PHP's configuration
// * phpversion               - Gets the current PHP version
// * putenv                   - Sets the value of an environment variable
// * restore_include_path     - Restores the value of the include_path configuration option
// * set_include_path         - Sets the include_path configuration option
// * set_time_limit           - Limits the maximum execution time
// * sys_get_temp_dir         - Returns directory path used for temporary files
// * version_compare          - Compares two "PHP-standardized" version number strings
// * zend_thread_id           - Returns a unique identifier for the current thread
// * zend_version             - Gets the version of the current Zend engine
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/ref.info.php
// PHP_OPTIONS_INFO_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/book.info.php
// PHP_OPTIONS_AND_INFORMATION - END
// 
// INSTALLATION_AND_CONFIGURATION_RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration (PHP Manual / Installation and Configuration / Runtime Configuration)
// 
// THE_CONFIGURATION_FILE
// USER_INI_FILES
// WHERE_A_CONFIGURATION_SETTING_MAY_BE_SET
// HOW_TO_CHANGE_CONFIGURATION_SETTINGS
// 
// THE_CONFIGURATION_FILE - BEGIN
// The configuration file
// 
// The configuration file (php.ini) is read when PHP starts up. For the server module versions of PHP, this happens only once when the web server is started. For the CGI and CLI versions, it happens on every invocation.
// 
// php.ini is searched for in these locations (in order):
// * SAPI module specific location (PHPIniDir directive in Apache 2, -c command line option in CGI and CLI)
// * The PHPRC environment variable.
// * The location of the php.ini file can be set for different versions of PHP. The root of the registry keys depends on 32- or 64-bitness of the installed OS and PHP. For 32-bit PHP on a 32-bit OS or a 64-bit PHP on a 64-bit OS use [(HKEY_LOCAL_MACHINE\SOFTWARE\PHP] for 32-bit version of PHP on a 64-bit OS use [HKEY_LOCAL_MACHINE\SOFTWARE\WOW6432Node\PHP]] instead. For same bitness installation the following registry keys are examined in order: [HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y.z], [HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y] and [HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x], where x, y and z mean the PHP major, minor and release versions. For 32 bit versions of PHP on a 64 bit OS the following registry keys are examined in order: [HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x.y.z], [HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x.y] and [HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x], where x, y and z mean the PHP major, minor and release versions. If there is a value for IniFilePath in any of these keys, the first one found will be used as the location of the php.ini (Windows only).
// * [HKEY_LOCAL_MACHINE\SOFTWARE\PHP] or [HKEY_LOCAL_MACHINE\SOFTWARE\WOW6432Node\PHP], value of IniFilePath (Windows only).
// * Current working directory (except CLI).
// * The web server's directory (for SAPI modules), or directory of PHP (otherwise in Windows).
// * Windows directory (C:\windows or C:\winnt) (for Windows), or --with-config-file-path compile time option.
// 
// If php-SAPI.ini exists (where SAPI is the SAPI in use, so, for example, php-cli.ini or php-apache.ini), it is used instead of php.ini. The SAPI name can be determined with php_sapi_name().
// Note: The Apache web server changes the directory to root at startup, causing PHP to attempt to read php.ini from the root filesystem if it exists.
// Using environment variables can be used in php.ini as shown below.
// 
// [example]
// Example #1 php.ini Environment Variables
// [code]
// ; PHP_MEMORY_LIMIT is taken from environment
// memory_limit = ${PHP_MEMORY_LIMIT}
// [/code]
// The php.ini directives handled by extensions are documented on the respective pages of the extensions themselves. A list of the core directives is available in the appendix. Not all PHP directives are necessarily documented in this manual: for a complete list of directives available in your PHP version, please read your well commented php.ini file. Alternatively, you may find > the latest php.ini from Git helpful too.
// [/example]
// [example]
// Example #2 php.ini example
// [code]
// ; any text on a line after an unquoted semicolon (;) is ignored
// [php] ; section markers (text within square brackets) are also ignored
// ; Boolean values can be set to either:
// ;    true, on, yes
// ; or false, off, no, none
// register_globals = off
// track_errors = yes
// 
// ; you can enclose strings in double-quotes
// include_path = ".:/usr/local/lib/php"
// 
// ; backslashes are treated the same as any other character
// include_path = ".;c:\php\lib"
// [/code]
// It is possible to refer to existing .ini variables from within .ini files. Example: open_basedir = ${open_basedir} ":/new/dir".
// [/example]
// 
// Scan directories
// It is possible to configure PHP to scan for .ini files in a directory after reading php.ini. This can be done at compile time by setting the --with-config-file-scan-dir option. The scan directory can then be overridden at run time by setting the PHP_INI_SCAN_DIR environment variable.
// It is possible to scan multiple directories by separating them with the platform-specific path separator (; on Windows, NetWare and RISC OS; : on all other platforms; the value PHP is using is available as the PATH_SEPARATOR constant). If a blank directory is given in PHP_INI_SCAN_DIR, PHP will also scan the directory given at compile time via --with-config-file-scan-dir.
// Within each directory, PHP will scan all files ending in .ini in alphabetical order. A list of the files that were loaded, and in what order, is available by calling php_ini_scanned_files(), or by running PHP with the --ini option.
// [code]
// Assuming PHP is configured with --with-config-file-scan-dir=/etc/php.d,
// and that the path separator is :...
// 
// $ php
//   PHP will load all files in /etc/php.d/*.ini as configuration files.
// 
// $ PHP_INI_SCAN_DIR=/usr/local/etc/php.d php
//   PHP will load all files in /usr/local/etc/php.d/*.ini as
//   configuration files.
// 
// $ PHP_INI_SCAN_DIR=:/usr/local/etc/php.d php
//   PHP will load all files in /etc/php.d/*.ini, then
//   /usr/local/etc/php.d/*.ini as configuration files.
// 
// $ PHP_INI_SCAN_DIR=/usr/local/etc/php.d: php
//   PHP will load all files in /usr/local/etc/php.d/*.ini, then
//   /etc/php.d/*.ini as configuration files.
// [/code]
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/configuration.file.php
// THE_CONFIGURATION_FILE - END
// 
// USER_INI_FILES - BEGIN
// .user.ini files
// 
// PHP includes support for configuration INI files on a per-directory basis. These files are processed only by the CGI/FastCGI SAPI. This functionality obsoletes the PECL htscanner extension. If you are running PHP as Apache module, use .htaccess files for the same effect.
// In addition to the main php.ini file, PHP scans for INI files in each directory, starting with the directory of the requested PHP file, and working its way up to the current document root (as set in $_SERVER['DOCUMENT_ROOT']). In case the PHP file is outside the document root, only its directory is scanned.
// Only INI settings with the modes PHP_INI_PERDIR and PHP_INI_USER will be recognized in .user.ini-style INI files.
// Two new INI directives, user_ini.filename and user_ini.cache_ttl control the use of user INI files.
// user_ini.filename sets the name of the file PHP looks for in each directory; if set to an empty string, PHP doesn't scan at all. The default is .user.ini.
// user_ini.cache_ttl controls how often user INI files are re-read. The default is 300 seconds (5 minutes).
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/configuration.file.per-user.php
// USER_INI_FILES - END
// 
// WHERE_A_CONFIGURATION_SETTING_MAY_BE_SET - BEGIN
// Where a configuration setting may be set
// 
// These modes determine when and where a PHP directive may or may not be set, and each directive within the manual refers to one of these modes. For example, some settings may be set within a PHP script using ini_set(), whereas others may require php.ini or httpd.conf.
// For example, the output_buffering setting is PHP_INI_PERDIR therefore it may not be set using ini_set(). However, the display_errors directive is PHP_INI_ALL therefore it may be set anywhere, including with ini_set().
// 
// Definition of PHP_INI_* modes
// Mode           - Meaning
// PHP_INI_USER   - Entry can be set in user scripts (like with ini_set()) or in the Windows registry. Entry can be set in .user.ini
// PHP_INI_PERDIR - Entry can be set in php.ini, .htaccess, httpd.conf or .user.ini
// PHP_INI_SYSTEM - Entry can be set in php.ini or httpd.conf
// PHP_INI_ALL    - Entry can be set anywhere
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/configuration.changes.modes.php
// WHERE_A_CONFIGURATION_SETTING_MAY_BE_SET - END
// 
// HOW_TO_CHANGE_CONFIGURATION_SETTINGS - BEGIN
// How to change configuration settings
// 
// Running PHP as an Apache module
// When using PHP as an Apache module, you can also change the configuration settings using directives in Apache configuration files (e.g. httpd.conf) and .htaccess files. You will need "AllowOverride Options" or "AllowOverride All" privileges to do so.
// There are several Apache directives that allow you to change the PHP configuration from within the Apache configuration files. For a listing of which directives are PHP_INI_ALL, PHP_INI_PERDIR, or PHP_INI_SYSTEM, have a look at the List of php.ini directives appendix.
// php_value name value       - Sets the value of the specified directive. Can be used only with PHP_INI_ALL and PHP_INI_PERDIR type directives. To clear a previously set value use none as the value.
// Note: Don't use php_value to set boolean values. php_flag (see below) should be used instead.
// php_flag name on|off       - Used to set a boolean configuration directive. Can be used only with PHP_INI_ALL and PHP_INI_PERDIR type directives.
// php_admin_value name value - Sets the value of the specified directive. This can not be used in .htaccess files. Any directive type set with php_admin_value can not be overridden by .htaccess or ini_set(). To clear a previously set value use none as the value.
// php_admin_flag name on|off - Used to set a boolean configuration directive. This can not be used in .htaccess files. Any directive type set with php_admin_flag can not be overridden by .htaccess or ini_set().
// 
// [example]
// Example #1 Apache configuration example
// [code]
// <IfModule mod_php5.c>
//   php_value include_path ".:/usr/local/lib/php"
//   php_admin_flag engine on
// </IfModule>
// <IfModule mod_php4.c>
//   php_value include_path ".:/usr/local/lib/php"
//   php_admin_flag engine on
// </IfModule>
// [/code]
// Caution: PHP constants do not exist outside of PHP. For example, in httpd.conf you can not use PHP constants such as E_ALL or E_NOTICE to set the error_reporting directive as they will have no meaning and will evaluate to 0. Use the associated bitmask values instead. These constants can be used in php.ini
// [/example]
// 
// Changing PHP configuration via the Windows registry
// When running PHP on Windows, the configuration values can be modified on a per-directory basis using the Windows registry. The configuration values are stored in the registry key HKLM\SOFTWARE\PHP\Per Directory Values, in the sub-keys corresponding to the path names. For example, configuration values for the directory c:\inetpub\wwwroot would be stored in the key HKLM\SOFTWARE\PHP\Per Directory Values\c\inetpub\wwwroot. The settings for the directory would be active for any script running from this directory or any subdirectory of it. The values under the key should have the name of the PHP configuration directive and the string value. PHP constants in the values are not parsed. However, only configuration values changeable in PHP_INI_USER can be set this way, PHP_INI_PERDIR values can not, because these configuration values are re-read for each request.
// 
// Other interfaces to PHP
// Regardless of how you run PHP, you can change certain values at runtime of your scripts through ini_set(). See the documentation on the ini_set() page for more information.
// If you are interested in a complete list of configuration settings on your system with their current values, you can execute the phpinfo() function, and review the resulting page. You can also access the values of individual configuration directives at runtime using ini_get() or get_cfg_var().
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/configuration.changes.php
// HOW_TO_CHANGE_CONFIGURATION_SETTINGS - END
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/configuration.php
// INSTALLATION_AND_CONFIGURATION_RUNTIME_CONFIGURATION - END
// 
// FEATURES_GARBAGE_COLLECTION - BEGIN
// Garbage Collection (PHP Manual / Features / Garbage Collection)
// 
// REFERENCE_COUNTING_BASICS
// COLLECTING_CYCLES
// PERFORMANCE_CONSIDERATIONS
// 
// This section explains the merits of the new Garbage Collection (also known as GC) mechanism that is part of PHP 5.3.
// 
// REFERENCE_COUNTING_BASICS - BEGIN
// Reference Counting Basics
// 
// A PHP variable is stored in a container called a "zval". A zval container contains, besides the variable's type and value, two additional bits of information. The first is called "is_ref" and is a boolean value indicating whether or not the variable is part of a "reference set". With this bit, PHP's engine knows how to differentiate between normal variables and references. Since PHP allows user-land references, as created by the & operator, a zval container also has an internal reference counting mechanism to optimize memory usage. This second piece of additional information, called "refcount", contains how many variable names (also called symbols) point to this one zval container. All symbols are stored in a symbol table, of which there is one per scope. There is a scope for the main script (i.e., the one requested through the browser), as well as one for every function or method.
// A zval container is created when a new variable is created with a constant value, such as:
// 
// [example]
// Example #1 Creating a new zval container
// [php]
// $a = "new string";
// [/php]
// In this case, the new symbol name, a, is created in the current scope, and a new variable container is created with the type string and the value new string. The "is_ref" bit is by default set to false because no user-land reference has been created. The "refcount" is set to 1 as there is only one symbol that makes use of this variable container. Note that references (i.e. "is_ref" is true) with "refcount" 1, are treated as if they are not references (i.e. as "is_ref" was false). If you have > Xdebug installed, you can display this information by calling xdebug_debug_zval().
// [/example]
// [example]
// Example #2 Displaying zval information
// [php]
// $a = "new string";
// xdebug_debug_zval('a');
// [/php]
// The above example will output:
// [result]
// a: (refcount=1, is_ref=0)='new string'
// [/result]
// Assigning this variable to another variable name will increase the refcount.
// [/example]
// [example]
// Example #3 Increasing refcount of a zval
// [php]
// $a = "new string";
// $b = $a;
// xdebug_debug_zval( 'a' );
// [/php]
// The above example will output:
// [result]
// a: (refcount=2, is_ref=0)='new string'
// [/result]
// [/example]
// The refcount is 2 here, because the same variable container is linked with both a and b. PHP is smart enough not to copy the actual variable container when it is not necessary. Variable containers get destroyed when the "refcount" reaches zero. The "refcount" gets decreased by one when any symbol linked to the variable container leaves the scope (e.g. when the function ends) or when a symbol is unassigned (e.g. by calling unset()). The following example shows this:
// [example]
// Example #4 Decreasing zval refcount
// [php]
// $a = "new string";
// $c = $b = $a;
// xdebug_debug_zval( 'a' );
// $b = 42;
// xdebug_debug_zval( 'a' );
// unset( $c );
// xdebug_debug_zval( 'a' );
// [/php]
// The above example will output:
// [result]
// a: (refcount=3, is_ref=0)='new string'
// a: (refcount=2, is_ref=0)='new string'
// a: (refcount=1, is_ref=0)='new string'
// [/result]
// If we now call unset($a);, the variable container, including the type and value, will be removed from memory.
// [/example]
// 
// Compound Types
// Things get a tad more complex with compound types such as arrays and objects. As opposed to scalar values, arrays and objects store their properties in a symbol table of their own. This means that the following example creates three zval containers:
// [example]
// Example #5 Creating a array zval
// [php]
// $a = array( 'meaning' => 'life', 'number' => 42 );
// xdebug_debug_zval( 'a' );
// [/php]
// The above example will output something similar to:
// [result]
// a: (refcount=1, is_ref=0)=array (
//    'meaning' => (refcount=1, is_ref=0)='life',
//    'number' => (refcount=1, is_ref=0)=42
// )
// [/result]
// [/example]
// The three zval containers are: a, meaning, and number. Similar rules apply for increasing and decreasing "refcounts". Below, we add another element to the array, and set its value to the contents of an already existing element:
// [example]
// Example #6 Adding already existing element to an array
// [php]
// $a = array( 'meaning' => 'life', 'number' => 42 );
// $a['life'] = $a['meaning'];
// xdebug_debug_zval( 'a' );
// [/php]
// The above example will output something similar to:
// [result]
// a: (refcount=1, is_ref=0)=array (
//    'meaning' => (refcount=2, is_ref=0)='life',
//    'number' => (refcount=1, is_ref=0)=42,
//    'life' => (refcount=2, is_ref=0)='life'
// )
// [/result]
// [/example]
// From the above Xdebug output, we see that both the old and new array elements now point to a zval container whose "refcount" is 2. Although Xdebug's output shows two zval containers with value 'life', they are the same one. The xdebug_debug_zval() function does not show this, but you could see it by also displaying the memory pointer.
// Removing an element from the array is like removing a symbol from a scope. By doing so, the "refcount" of a container that an array element points to is decreased. Again, when the "refcount" reaches zero, the variable container is removed from memory. Again, an example to show this:
// [example]
// Example #7 Removing an element from an array
// [php]
// $a = array( 'meaning' => 'life', 'number' => 42 );
// $a['life'] = $a['meaning'];
// unset( $a['meaning'], $a['number'] );
// xdebug_debug_zval( 'a' );
// [/php]
// The above example will output something similar to:
// [result]
// a: (refcount=1, is_ref=0)=array (
//    'life' => (refcount=1, is_ref=0)='life'
// )
// [/result]
// [/example]
// Now, things get interesting if we add the array itself as an element of the array, which we do in the next example, in which we also sneak in a reference operator, since otherwise PHP would create a copy:
// [example]
// Example #8 Adding the array itself as an element of it self
// [php]
// $a = array( 'one' );
// $a[] =& $a;
// xdebug_debug_zval( 'a' );
// [/php]
// The above example will output something similar to:
// [result]
// a: (refcount=2, is_ref=1)=array (
//    0 => (refcount=1, is_ref=0)='one',
//    1 => (refcount=2, is_ref=1)=...
// )
// [/result]
// [/example]
// You can see that the array variable (a) as well as the second element (1) now point to a variable container that has a "refcount" of 2. The "..." in the display above shows that there is recursion involved, which, of course, in this case means that the "..." points back to the original array.
// Just like before, unsetting a variable removes the symbol, and the reference count of the variable container it points to is decreased by one. So, if we unset variable $a after running the above code, the reference count of the variable container that $a and element "1" point to gets decreased by one, from "2" to "1". This can be represented as:
// [example]
// Example #9 Unsetting $a
// [code]
// (refcount=1, is_ref=1)=array (
//    0 => (refcount=1, is_ref=0)='one',
//    1 => (refcount=1, is_ref=1)=...
// )
// [/code]
// [/example]
// 
// Cleanup Problems
// Although there is no longer a symbol in any scope pointing to this structure, it cannot be cleaned up because the array element "1" still points to this same array. Because there is no external symbol pointing to it, there is no way for a user to clean up this structure; thus you get a memory leak. Fortunately, PHP will clean up this data structure at the end of the request, but before then, this is taking up valuable space in memory. This situation happens often if you're implementing parsing algorithms or other things where you have a child point back at a "parent" element. The same situation can also happen with objects of course, where it actually is more likely to occur, as objects are always implicitly used by reference.
// This might not be a problem if this only happens once or twice, but if there are thousands, or even millions, of these memory losses, this obviously starts being a problem. This is especially problematic in long running scripts, such as daemons where the request basically never ends, or in large sets of unit tests. The latter caused problems while running the unit tests for the Template component of the eZ Components library. In some cases, it would require over 2 GB of memory, which the test server didn't quite have.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/features.gc.refcounting-basics.php
// REFERENCE_COUNTING_BASICS - END
// 
// COLLECTING_CYCLES - BEGIN
// Collecting Cycles
// 
// Traditionally, reference counting memory mechanisms, such as that used previously by PHP, fail to address circular reference memory leaks; however, as of 5.3.0, PHP implements the synchronous algorithm from the > Concurrent Cycle Collection in Reference Counted Systems paper which addresses that issue.
// A full explanation of how the algorithm works would be slightly beyond the scope of this section, but the basics are explained here. First of all, we have to establish a few ground rules. If a refcount is increased, it's still in use and therefore, not garbage. If the refcount is decreased and hits zero, the zval can be freed. This means that garbage cycles can only be created when a refcount argument is decreased to a non-zero value. Secondly, in a garbage cycle, it is possible to discover which parts are garbage by checking whether it is possible to decrease their refcount by one, and then checking which of the zvals have a refcount of zero.
// When the garbage collector is turned on, the cycle-finding algorithm as described above is executed whenever the root buffer runs full. The root buffer has a fixed size of 10,000 possible roots (although you can alter this by changing the GC_THRESHOLD_DEFAULT constant in Zend/zend_gc.c in the PHP source code, and re-compiling PHP). When the garbage collector is turned off, the cycle-finding algorithm will never run. However, possible roots will always be recorded in the root buffer, no matter whether the garbage collection mechanism has been activated with this configuration setting.
// If the root buffer becomes full with possible roots while the garbage collection mechanism is turned off, further possible roots will simply not be recorded. Those possible roots that are not recorded will never be analyzed by the algorithm. If they were part of a circular reference cycle, they would never be cleaned up and would create a memory leak.
// The reason why possible roots are recorded even if the mechanism has been disabled is because it's faster to record possible roots than to have to check whether the mechanism is turned on every time a possible root could be found. The garbage collection and analysis mechanism itself, however, can take a considerable amount of time.
// Besides changing the zend.enable_gc configuration setting, it is also possible to turn the garbage collecting mechanism on and off by calling gc_enable() or gc_disable() respectively. Calling those functions has the same effect as turning on or off the mechanism with the configuration setting. It is also possible to force the collection of cycles even if the possible root buffer is not full yet. For this, you can use the gc_collect_cycles() function. This function will return how many cycles were collected by the algorithm.
// The rationale behind the ability to turn the mechanism on and off, and to initiate cycle collection yourself, is that some parts of your application could be highly time-sensitive. In those cases, you might not want the garbage collection mechanism to kick in. Of course, by turning off the garbage collection for certain parts of your application, you do risk creating memory leaks because some possible roots might not fit into the limited root buffer. Therefore, it is probably wise to call gc_collect_cycles() just before you call gc_disable() to free up the memory that could be lost through possible roots that are already recorded in the root buffer. This then leaves an empty buffer so that there is more space for storing possible roots while the cycle collecting mechanism is turned off.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/features.gc.collecting-cycles.php
// COLLECTING_CYCLES - END
// 
// PERFORMANCE_CONSIDERATIONS - BEGIN
// Performance Considerations
// 
// We have already mentioned in the previous section that simply collecting the possible roots had a very tiny performance impact, but this is when you compare PHP 5.2 against PHP 5.3. Although the recording of possible roots compared to not recording them at all, like in PHP 5.2, is slower, other changes to the PHP runtime in PHP 5.3 prevented this particular performance loss from even showing.
// There are two major areas in which performance is affected. The first area is reduced memory usage, and the second area is run-time delay when the garbage collection mechanism performs its memory cleanups. We will look at both of those issues.
// 
// Reduced Memory Usage
// First of all, the whole reason for implementing the garbage collection mechanism is to reduce memory usage by cleaning up circular-referenced variables as soon as the prerequisites are fulfilled. In PHP's implementation, this happens as soon as the root-buffer is full, or when the function gc_collect_cycles() is called. In the graph below, we display the memory usage of the script below, in both PHP 5.2 and PHP 5.3, excluding the base memory that PHP itself uses when starting up.
// [example]
// Example #1 Memory usage example
// [php]
// class Foo
// {
//     public $var = '3.14159265359';
//     public $self;
// }
// 
// $baseMemory = memory_get_usage();
// 
// for ( $i = 0; $i <= 100000; $i++ )
// {
//     $a = new Foo;
//     $a->self = $a;
//     if ( $i % 500 === 0 )
//     {
//         echo sprintf( '%8d: ', $i ), memory_get_usage() - $baseMemory, "\n";
//     }
// }
// [/php]
// [/example]
// 
// Run-Time Slowdowns
// The second area where the garbage collection mechanism influences performance is the time taken when the garbage collection mechanism kicks in to free the "leaked" memory. In order to see how much this is, we slightly modify the previous script to allow for a larger number of iterations and the removal of the intermediate memory usage figures. The second script is here:
// [example]
// Example #2 GC performance influences
// [php]
// class Foo
// {
//     public $var = '3.14159265359';
//     public $self;
// }
// 
// for ( $i = 0; $i <= 1000000; $i++ )
// {
//     $a = new Foo;
//     $a->self = $a;
// }
// 
// echo memory_get_peak_usage(), "\n";
// [/php]
// [/example]
// We will run this script two times, once with the zend.enable_gc setting turned on, and once with it turned off:
// [example]
// Example #3 Running the above script
// [code]
// time php -dzend.enable_gc=0 -dmemory_limit=-1 -n example2.php
// # and
// time php -dzend.enable_gc=1 -dmemory_limit=-1 -n example2.php
// [/code]
// On my machine, the first command seems to take consistently about 10.7 seconds, whereas the second command takes about 11.4 seconds. This is a slowdown of about 7%. However, the maximum amount of memory used by the script is reduced by 98% from 931Mb to 10Mb. This benchmark is not very scientific, or even representative of real-life applications, but it does demonstrate the memory usage benefits that this garbage collection mechanism provides. The good thing is that the slowdown is always the same 7%, for this particular script, while the memory saving capabilities save more and more memory as more circular references are found during script execution.
// [/example]
// 
// PHP's Internal GC Statistics
// It is possible to coax a little bit more information about how the garbage collection mechanism is run from within PHP. But in order to do so, you will have to re-compile PHP to enable the benchmark and data-collecting code. You will have to set the CFLAGS environment variable to -DGC_BENCH=1 prior to running ./configure with your desired options. The following sequence should do the trick:
// [example]
// Example #4 Recompiling PHP to enable GC benchmarking
// [code]
// export CFLAGS=-DGC_BENCH=1
// ./config.nice
// make clean
// make
// [/code]
// [/example]
// When you run the above example code again with the newly built PHP binary, you will see the following being shown after PHP has finished execution:
// [example]
// Example #5 GC statistics
// [code]
// GC Statistics
// -------------
// Runs:               110
// Collected:          2072204
// Root buffer length: 0
// Root buffer peak:   10000
// 
//       Possible            Remove from  Marked
//         Root    Buffered     buffer     grey
//       --------  --------  -----------  ------
// ZVAL   7175487   1491291    1241690   3611871
// ZOBJ  28506264   1527980     677581   1025731
// [/code]
// The most informative statistics are displayed in the first block. You can see here that the garbage collection mechanism ran 110 times, and in total, more than 2 million memory allocations were freed during those 110 runs. As soon as the garbage collection mechanism has run at least one time, the "Root buffer peak" is always 10000.
// [/example]
// 
// Conclusion
// In general the garbage collector in PHP will only cause a slowdown when the cycle collecting algorithm actually runs, whereas in normal (smaller) scripts there should be no performance hit at all.
// However, in the cases where the cycle collection mechanism does run for normal scripts, the memory reduction it will provide allows more of those scripts to run concurrently on your server, since not so much memory is used in total.
// The benefits are most apparent for longer-running scripts, such as lengthy test suites or daemon scripts. Also, for > PHP-GTK applications that generally tend to run longer than scripts for the Web, the new mechanism should make quite a bit of a difference regarding memory leaks creeping in over time.
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/features.gc.performance-considerations.php
// PERFORMANCE_CONSIDERATIONS - END
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/features.gc.php
// FEATURES_GARBAGE_COLLECTION - END
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ENV_VARIABLE
// ============================== PUBLIC
// ============================== ABOUT
// Environment variables.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// $_ENV - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_env_variable()
{
$return_env = null;

// ========== _ENV - BEGIN
// ===== ABOUT
// Environment variables
// ===== DESCRIPTION
// An associative array of variables passed to the current script via the environment method.
// These variables are imported into PHP's global namespace from the environment under which the PHP parser is running. Many are provided by the shell under which PHP is running and different systems are likely running different kinds of shells, a definitive list is impossible. Please see your shell's documentation for a list of defined environment variables.
// Other environment variables include the CGI variables, placed there regardless of whether PHP is running as a server module or CGI processor.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_env = $_ENV;
// [examples]
// Examples
// [example]
// Example #1 $_ENV example
// [php]
// echo 'My username is ' .$_ENV["USER"] . '!';
// [/php]
// Assuming "bjori" executes this script
// The above example will output something similar to:
// [result]
// My username is bjori!
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This is a 'superglobal', or automatic global, variable. This simply means that it is available in all scopes throughout a script. There is no need to do global $variable; to access it within functions or methods.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/reserved.variables.environment.php
// ========== _ENV - END

// SYNTAX:
// array $_ENV

return $return_env; // array
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ENV_VARIABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ARGC_VARIABLE
// ============================== PUBLIC
// ============================== ABOUT
// The number of arguments passed to script.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// $argc - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_argc_variable()
{
$return_argc = 0;

// ========== ARGC - BEGIN
// ===== ABOUT
// The number of arguments passed to script
// ===== DESCRIPTION
// Contains the number of arguments passed to the current script when running from the command line.
// Note: The script's filename is always passed as an argument to the script, therefore the minimum value of $argc is 1.
// Note: This variable is not available when register_argc_argv is disabled.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_argc = $argc;
// [examples]
// Examples
// [example]
// Example #1 $argc example
// [php]
// var_dump($argc);
// [/php]
// When executing the example with: php script.php arg1 arg2 arg3
// The above example will output something similar to:
// [result]
// int(4)
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This is also available as $_SERVER['argc'].
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/reserved.variables.argc.php
// ========== ARGC - END

// SYNTAX:
// int $argc

return $return_argc; // int
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ARGC_VARIABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ARGV_VARIABLE
// ============================== PUBLIC
// ============================== ABOUT
// Array of arguments passed to script.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// $argv - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_argv_variable()
{
$return_argv = null;

// ========== ARGV - BEGIN
// ===== ABOUT
// Array of arguments passed to script
// ===== DESCRIPTION
// Contains an array of all the arguments passed to the script when running from the command line.
// Note: The first argument $argv[0] is always the name that was used to run the script.
// Note: This variable is not available when register_argc_argv is disabled.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_argv = $argv;
// [examples]
// Examples
// [example]
// Example #1 $argv example
// [php]
// var_dump($argv);
// [/php]
// When executing the example with: php script.php arg1 arg2 arg3
// The above example will output something similar to:
// [result]
// array(4) {
//   [0]=>
//   string(10) "script.php"
//   [1]=>
//   string(4) "arg1"
//   [2]=>
//   string(4) "arg2"
//   [3]=>
//   string(4) "arg3"
// }
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This is also available as $_SERVER['argv'].
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/reserved.variables.argv.php
// ========== ARGV - END

// SYNTAX:
// array $argv

return $return_argv; // array
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ARGV_VARIABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ASSERT_OPTIONS
// ============================== PUBLIC
// ============================== ABOUT
// Set/get the various assert flags.
// 
// Warning: This function has been DEPRECATED as of PHP 8.3.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// assert_options() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_assert_options($option, $value)
{
$return_assert_options = null;

// ========== ASSERT_OPTIONS - BEGIN
// ===== ABOUT
// Set/get the various assert flags
// Warning: This function has been DEPRECATED as of PHP 8.3.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Set the various assert() control options or just query their current settings.
// Note: The use of assert_options() is discouraged in favor of setting and getting the php.ini directives zend.assertions and assert.exception with ini_set() and ini_get(), respectively.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// assert_options(int $option, mixed $value = ?): mixed
// ===== CODE
$return_assert_options = assert_options(

$option, // int option - Assert Options
// Option            | INI Setting       | Default value | Description
// ASSERT_ACTIVE     | assert.active     | 1             | enable assert() evaluation
// ASSERT_EXCEPTION  | assert.exception  | 1             | throws an AssertionError for each failed assertions
// ASSERT_WARNING    | assert.warning    | 1             | issue a PHP warning for each failed assertion
// ASSERT_BAIL       | assert.bail       | 0             | terminate execution on failed assertions
// ASSERT_QUIET_EVAL | assert.quiet_eval | 0             | disable error_reporting during assertion expression evaluation. Removed as of PHP 8.0.0.
// ASSERT_CALLBACK   | assert.callback   | (null)        | Callback to call on failed assertions

$value // mixed value - An optional new value for the option.
// The callback function set via ASSERT_CALLBACK or assert.callback should have the following signature:
// assert_callback(
//     string $file,
//     int $line,
//     ?string $assertion,
//     string $description = ?
// ): void
// string file        - The file where assert() has been called.
// int line           - The line where assert() has been called.
// string assertion   - Prior to PHP 8.0.0, the assertion which has been passed to assert(), but only when the assertion is given as a string. (If the assertion is a boolean condition, this parameter will be an empty string.) As of PHP 8.0.0, this parameter is always null.
// string description - The description that has been passed to assert().

// Passing an empty string as value resets the assert callback.

); // Return Values
// Returns the original setting of any option.
// 
// Errors/Exceptions
// If option is not a valid option a ValueError is thrown.
// 
// Changelog
// Version - Description
// 8.3.0   - assert_option() is now deprecated.
// 8.0.0   - If option is not a valid option, a ValueError is now thrown. Previously false was returned.
// 
// [examples]
// Examples
// [example]
// Example #1 assert_options() example
// [php]
// // This is our function to handle 
// // assert failures
// function assert_failure($file, $line, $assertion, $message)
// {
//     echo "The assertion $assertion in $file on line $line has failed: $message";
// }
// 
// // This is our test function
// function test_assert($parameter)
// {
//     assert(is_bool($parameter));
// }
// 
// // Set our assert options
// assert_options(ASSERT_ACTIVE,   true);
// assert_options(ASSERT_BAIL,     true);
// assert_options(ASSERT_WARNING,  false);
// assert_options(ASSERT_CALLBACK, 'assert_failure');
// 
// // Make an assert that would fail
// test_assert(1);
// 
// // This is never reached due to ASSERT_BAIL 
// // being true
// echo 'Never reached';
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.assert-options.php
// ========== ASSERT_OPTIONS - END

// SYNTAX:
// mixed assert_options(int $option, mixed $value)

return $return_assert_options; // mixed
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ASSERT_OPTIONS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ASSERT_ASSERT
// ============================== PUBLIC
// ============================== ABOUT
// Checks an assertion.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// assert() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_assert_assert($assertion, $description = null)
{
$return_assert = false;

// ========== ASSERT - BEGIN
// ===== ABOUT
// Checks an assertion
// ===== DESCRIPTION
// assert() allows for the definition of expectations: assertions that take effect in development and testing environments, but are optimised away to have zero cost in production.
// Assertions should be used as a debugging feature only. One use case for them is to act as sanity-checks for preconditions that should always be true and that if they aren't upheld this indicates some programming errors. Another use case is to ensure the presence of certain features like extension functions or certain system limits and features.
// As assertions can be configured to be eliminated, they should not be used for normal runtime operations like input parameter checks. As a rule of thumb code should behave as expected even if assertion checking is deactivated.
// assert() will check that the expectation given in assertion holds. If not, and thus the result is false, it will take the appropriate action depending on how assert() was configured.
// 
// The behaviour of assert() is dictated by the following INI settings:
// Assert Configure Options
// Name             (Default) - Description ; Changelog
// zend.assertions  (1)       - 
// * 1  : generate and execute code (development mode)
// * 0  : generate code but jump around it at runtime
// * -1 : do not generate code (production mode) ;
// assert.active    (true)    - If false, assert() does not check the expectation and returns true, unconditionally. ; Deprecated as of PHP 8.3.0.
// assert.callback  (null)    - A user defined function to call when an assertion fails. It's signature should be:
// assert_callback(
//    string $file,
//    int $line,
//    null $assertion,
//    string $description = ?
// ): void
// ; Prior to PHP 8.0.0, the signature of the callback should be:
// assert_callback(
//    string $file,
//    int $line,
//    string $assertion,
//    string $description = ?
// ): void
// Deprecated as of PHP 8.3.0.
// assert.exception (true)    - If true will throw an AssertionError if the expectation isn't upheld. ; Deprecated as of PHP 8.3.0.
// assert.bail      (false)   - If true will abort execution of the PHP script if the expectation isn't upheld. ; Deprecated as of PHP 8.3.0.
// assert.warning   (true)    - If true, will emit an E_WARNING if the expectation isn't upheld. This INI setting is ineffective if assert.exception is enabled. ; Deprecated as of PHP 8.3.0.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// assert(mixed $assertion, Throwable|string|null $description = null): bool
// ===== CODE
$return_assert = assert(

$assertion, // mixed assertion - This is any expression that returns a value, which will be executed and the result is used to indicate whether the assertion succeeded or failed.
// Warning: Prior to PHP 8.0.0, if assertion was a string it was interpreted as PHP code and executed via eval(). This string would be passed to the callback as the third argument. This behaviour was DEPRECATED in PHP 7.2.0, and REMOVED in PHP 8.0.0.

$description // Throwable|string|null description - If description is an instance of Throwable, it will be thrown only if the assertion is executed and fails.
// Note: As of PHP 8.0.0, this is done prior to calling the potentially defined assertion callback.
// Note: As of PHP 8.0.0, the object will be thrown regardless of the configuration of assert.exception.
// Note: As of PHP 8.0.0, the assert.bail setting has no effect in this case.
// If description is a string this message will be used if an exception or a warning is emitted. An optional description that will be included in the failure message if the assertion fails.
// If description is omitted. A default description equal to the source code for the invocation of assert() is created at compile time.

); // Return Values
// assert() will always return true if at least one of the following is true:
// * zend.assertions=0
// * zend.assertions=-1
// * assert.exception=1
// * assert.bail=1
// * A custom exception object is passed to description.
// If none of the conditions are true assert() will return true if assertion is truthy and false otherwise.
// 
// Changelog
// Version - Description
// 8.3.0   - All assert. INI settings have been deprecated.
// 8.0.0   - assert() will no longer evaluate string arguments, instead they will be treated like any other argument. assert($a == $b) should be used instead of assert('$a == $b'). The assert.quiet_eval php.ini directive and the ASSERT_QUIET_EVAL constant have also been removed, as they would no longer have any effect.
// 8.0.0   - If description is an instance of Throwable, the object is thrown if the assertion fails, regardless of the value of assert.exception.
// 8.0.0   - If description is an instance of Throwable, no user callback is called even if it set.
// 8.0.0   - Declaring a function called assert() inside a namespace is no longer allowed, and issues E_COMPILE_ERROR.
// 7.3.0   - Declaring a function called assert() inside a namespace became deprecated. Such declaration now emits an E_DEPRECATED.
// 7.2.0   - Usage of a string as the assertion became deprecated. It now emits an E_DEPRECATED notice when both assert.active and zend.assertions are set to 1.
// 
// [examples]
// Examples
// [example]
// Example #1 assert() example
// [php]
// assert(1 > 2);
// echo 'Hi!';
// [/php]
// If assertions are enabled (zend.assertions=1) the above example will output:
// [result]
// Fatal error: Uncaught AssertionError: assert(1 > 2) in example.php:2
// Stack trace:
// #0 example.php(2): assert(false, 'assert(1 > 2)')
// #1 {main}
//   thrown in example.php on line 2
// [/result]
// If assertions are disabled (zend.assertions=0 or zend.assertions=-1) the above example will output:
// [result]
// Hi!
// [/result]
// [/example]
// [example]
// Example #2 Using a custom message
// [php]
// assert(1 > 2, "Expected one to be greater than two");
// echo 'Hi!';
// [/php]
// If assertions are enabled the above example will output:
// [result]
// Fatal error: Uncaught AssertionError: Expected one to be greater than two in example.php:2
// Stack trace:
// #0 example.php(2): assert(false, 'Expected one to...')
// #1 {main}
//   thrown in example.php on line 2
// [/result]
// If assertions are disabled the above example will output:
// [result]
// Hi!
// [/result]
// [/example]
// [example]
// Example #3 Using a custom exception class
// [php]
// class ArithmeticAssertionError extends AssertionError {}
// 
// assert(1 > 2, new ArithmeticAssertionError("Expected one to be greater than two"));
// echo 'Hi!';
// [/php]
// If assertions are enabled the above example will output:
// [result]
// Fatal error: Uncaught ArithmeticAssertionError: Expected one to be greater than two in example.php:4
// Stack trace:
// #0 {main}
//   thrown in example.php on line 4
// [/result]
// If assertions are disabled the above example will output:
// [result]
// Hi!
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.assert.php
// ========== ASSERT - END

// SYNTAX:
// bool assert(mixed $assertion, Throwable|string|null $description = null)

return $return_assert; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ASSERT_ASSERT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_CLI_GET_PROCESS_TITLE
// ============================== OFFLINE
// ============================== ABOUT
// Returns the current process title.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// cli_get_process_title() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_cli_get_process_title()
{
$return_cli_get_process_title = null;

// ========== CLI_GET_PROCESS_TITLE - BEGIN
// ===== ABOUT
// Returns the current process title
// ===== DESCRIPTION
// Returns the current process title, as set by cli_set_process_title(). Note that this may not exactly match what is shown in ps or top, depending on your operating system.
// This function is available only in CLI mode.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// cli_get_process_title(): ?string
// ===== CODE
$return_cli_get_process_title = cli_get_process_title(

// This function has no parameters.

); // Return Values
// Return a string with the current process title or null on error.
// 
// Errors/Exceptions
// An E_WARNING will be generated if the operating system is unsupported.
// 
// [examples]
// Examples
// [example]
// Example #1 cli_get_process_title() example
// [php]
// echo "Process title: " . cli_get_process_title() . "\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.cli-get-process-title.php
// ========== CLI_GET_PROCESS_TITLE - END

// SYNTAX:
// string cli_get_process_title()

return $return_cli_get_process_title; // string
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_CLI_GET_PROCESS_TITLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_CLI_SET_PROCESS_TITLE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the process title.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// cli_set_process_title() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_cli_set_process_title($title)
{
$return_cli_set_process_title = false;

// ========== CLI_SET_PROCESS_TITLE - BEGIN
// ===== ABOUT
// Sets the process title
// ===== DESCRIPTION
// Sets the process title visible in tools such as top and ps. This function is available only in CLI mode.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// cli_set_process_title(string $title): bool
// ===== CODE
$return_cli_set_process_title = cli_set_process_title(

$title // string title - The new title.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// An E_WARNING will be generated if the operating system is unsupported.
// 
// [examples]
// Examples
// [example]
// Example #1 cli_set_process_title() example
// [php]
// $title = "My Amazing PHP Script";
// $pid = getmypid(); // you can use this to see your process title in ps
// 
// if (!cli_set_process_title($title)) {
//     echo "Unable to set process title for PID $pid...\n";
//     exit(1);
// } else {
//     echo "The process title '$title' for PID $pid has been set for your process!\n";
//     sleep(5);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.cli-set-process-title.php
// ========== CLI_SET_PROCESS_TITLE - END

// SYNTAX:
// bool cli_set_process_title(string $title)

return $return_cli_set_process_title; // bool
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_CLI_SET_PROCESS_TITLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_DL
// ============================== PUBLIC
// ============================== ABOUT
// Loads a PHP extension at runtime.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dl() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_dl($extension_filename)
{
$return_dl = false;

// ========== DL - BEGIN
// ===== ABOUT
// Loads a PHP extension at runtime
// ===== DESCRIPTION
// Loads the PHP extension given by the parameter extension_filename.
// Use extension_loaded() to test whether a given extension is already available or not. This works on both built-in extensions and dynamically loaded ones (either through php.ini or dl()).
// Warning: This function is only available for the CLI and embed SAPIs, and the CGI SAPI when run from the command line.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dl(string $extension_filename): bool
// ===== CODE
$return_dl = dl(

$extension_filename // string extension_filename - This parameter is only the filename of the extension to load which also depends on your platform. For example, the sockets extension (if compiled as a shared module, not the default!) would be called sockets.so on Unix platforms whereas it is called php_sockets.dll on the Windows platform.
// The directory where the extension is loaded from depends on your platform:
// Windows - If not explicitly set in the php.ini, the extension is loaded from C:\php5\ by default.
// Unix    - If not explicitly set in the php.ini, the default extension directory depends on
// * whether PHP has been built with --enable-debug or not
// * whether PHP has been built with ZTS (Zend Thread Safety) support or not
// * the current internal ZEND_MODULE_API_NO (Zend internal module API number, which is basically the date on which a major module API change happened, e.g. 20010901)
// Taking into account the above, the directory then defaults to <install-dir>/lib/php/extensions/ <debug-or-not>-<zts-or-not>-ZEND_MODULE_API_NO, e.g. /usr/local/php/lib/php/extensions/debug-non-zts-20010901 or /usr/local/php/lib/php/extensions/no-debug-zts-20010901.

); // Return Values
// Returns true on success or false on failure. If the functionality of loading modules is not available or has been disabled (by setting enable_dl off in php.ini) an E_ERROR is emitted and execution is stopped. If dl() fails because the specified library couldn't be loaded, in addition to false an E_WARNING message is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 dl() examples
// [php]
// // Example loading an extension based on OS
// if (!extension_loaded('sqlite')) {
//     if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
//         dl('php_sqlite.dll');
//     } else {
//         dl('sqlite.so');
//     }
// }
// 
// // Or using PHP_SHLIB_SUFFIX constant
// if (!extension_loaded('sqlite')) {
//     $prefix = (PHP_SHLIB_SUFFIX === 'dll') ? 'php_' : '';
//     dl($prefix . 'sqlite.' . PHP_SHLIB_SUFFIX);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: dl() is case sensitive on Unix platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.dl.php
// ========== DL - END

// SYNTAX:
// bool dl(string $extension_filename)

return $return_dl; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_DL
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_EXTENSION_LOADED
// ============================== PUBLIC
// ============================== ABOUT
// Find out whether an extension is loaded.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// extension_loaded() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_extension_loaded($extension)
{
$return_extension_loaded = false;

// ========== EXTENSION_LOADED - BEGIN
// ===== ABOUT
// Find out whether an extension is loaded
// ===== DESCRIPTION
// Finds out whether the extension is loaded.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// extension_loaded(string $extension): bool
// ===== CODE
$return_extension_loaded = extension_loaded(

$extension // string extension - The extension name. This parameter is case-insensitive.
// You can see the names of various extensions by using phpinfo() or if you're using the CGI or CLI version of PHP you can use the -m switch to list all available extensions:
// [code]
// $ php -m
// [PHP Modules]
// xml
// tokenizer
// standard
// sockets
// session
// posix
// pcre
// overload
// mysql
// mbstring
// ctype
// 
// [Zend Modules]
// [/code]

); // Return Values
// Returns true if the extension identified by extension is loaded, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 extension_loaded() example
// [php]
// if (!extension_loaded('gd')) {
//     if (!dl('gd.so')) {
//         exit;
//     }
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.extension-loaded.php
// ========== EXTENSION_LOADED - END

// SYNTAX:
// bool extension_loaded(string $extension)

return $return_extension_loaded; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_EXTENSION_LOADED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_COLLECT_CYCLES
// ============================== OFFLINE
// ============================== ABOUT
// Forces collection of any existing garbage cycles.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// gc_collect_cycles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_gc_collect_cycles()
{
$return_gc_collect_cycles = 0;

// ========== GC_COLLECT_CYCLES - BEGIN
// ===== ABOUT
// Forces collection of any existing garbage cycles
// ===== DESCRIPTION
// Forces collection of any existing garbage cycles.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// gc_collect_cycles(): int
// ===== CODE
$return_gc_collect_cycles = gc_collect_cycles(

// This function has no parameters.

); // Return Values
// Returns number of collected cycles.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.gc-collect-cycles.php
// ========== GC_COLLECT_CYCLES - END

// SYNTAX:
// int gc_collect_cycles()

return $return_gc_collect_cycles; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_COLLECT_CYCLES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_DISABLE
// ============================== OFFLINE
// ============================== ABOUT
// Deactivates the circular reference collector.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// gc_disable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_gc_disable()
{

// ========== GC_DISABLE - BEGIN
// ===== ABOUT
// Deactivates the circular reference collector
// ===== DESCRIPTION
// Deactivates the circular reference collector, setting zend.enable_gc to 0.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// gc_disable(): void
// ===== CODE
gc_disable(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.gc-disable.php
// ========== GC_DISABLE - END

// SYNTAX:
// void gc_disable()

// Return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_DISABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_ENABLE
// ============================== OFFLINE
// ============================== ABOUT
// Activates the circular reference collector.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// gc_enable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_gc_enable()
{

// ========== GC_ENABLE - BEGIN
// ===== ABOUT
// Activates the circular reference collector
// ===== DESCRIPTION
// Activates the circular reference collector, setting zend.enable_gc to 1.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// gc_enable(): void
// ===== CODE
gc_enable(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.gc-enable.php
// ========== GC_ENABLE - END

// SYNTAX:
// void gc_enable()

// Return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_ENABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_ENABLED
// ============================== OFFLINE
// ============================== ABOUT
// Returns status of the circular reference collector.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// gc_enabled() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_gc_enabled()
{
$return_gc_enabled = false;

// ========== GC_ENABLED - BEGIN
// ===== ABOUT
// Returns status of the circular reference collector
// ===== DESCRIPTION
// Returns status of the circular reference collector.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// gc_enabled(): bool
// ===== CODE
$return_gc_enabled = gc_enabled(

// This function has no parameters.

); // Return Values
// Returns true if the garbage collector is enabled, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 A gc_enabled() example
// [php]
// if(gc_enabled()) gc_collect_cycles();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.gc-enabled.php
// ========== GC_ENABLED - END

// SYNTAX:
// bool gc_enabled()

return $return_gc_enabled; // bool
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_ENABLED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_MEM_CACHES
// ============================== OFFLINE
// ============================== ABOUT
// Reclaims memory used by the Zend Engine memory manager.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// gc_mem_caches() - PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_gc_mem_caches()
{
$return_gc_mem_caches = 0;

// ========== GC_MEM_CACHES - BEGIN
// ===== ABOUT
// Reclaims memory used by the Zend Engine memory manager
// ===== DESCRIPTION
// Reclaims memory used by the Zend Engine memory manager.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// gc_mem_caches(): int
// ===== CODE
$return_gc_mem_caches = gc_mem_caches(

// This function has no parameters.

); // Return Values
// Returns the number of bytes freed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.gc-mem-caches.php
// ========== GC_MEM_CACHES - END

// SYNTAX:
// int gc_mem_caches()

return $return_gc_mem_caches; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_MEM_CACHES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_STATUS
// ============================== OFFLINE
// ============================== ABOUT
// Gets information about the garbage collector.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// gc_status() - PHP_7 >= PHP_7_3_0, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_gc_status()
{
$return_gc_status = null;

// ========== GC_STATUS - BEGIN
// ===== ABOUT
// Gets information about the garbage collector
// ===== DESCRIPTION
// Gets information about the current state of the garbage collector.
// ===== SUPPORTED
// PHP_7 >= PHP_7_3_0, PHP_8
// ===== SYNTAX
// gc_status(): array
// ===== CODE
$return_gc_status = gc_status(

// This function has no parameters.

); // Return Values
// Returns an associative array with the following elements:
// * "runs"
// * "collected"
// * "threshold"
// * "roots"
// 
// [examples]
// Examples
// [example]
// Example #1 gc_status() Usage
// [php]
// 
// // create object tree that needs gc collection
// $a = new stdClass();
// $a->b = [];
// for ($i = 0; $i < 100000; $i++) {
//     $b = new stdClass();
//     $b->a = $a;
//     $a->b[] = $b;
// }
// unset($a);
// unset($b);
// gc_collect_cycles();
// 
// var_dump(gc_status());
// [/php]
// The above example will output something similar to:
// [result]
// array(4) {
//   ["runs"]=>
//   int(5)
//   ["collected"]=>
//   int(100002)
//   ["threshold"]=>
//   int(50001)
//   ["roots"]=>
//   int(0)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.gc-status.php
// ========== GC_STATUS - END

// SYNTAX:
// array gc_status()

return $return_gc_status; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GC_STATUS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_CFG_VAR
// ============================== PUBLIC
// ============================== ABOUT
// Gets the value of a PHP configuration option.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_cfg_var() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_cfg_var($option)
{
$return_get_cfg_var = false;

// ========== GET_CFG_VAR - BEGIN
// ===== ABOUT
// Gets the value of a PHP configuration option
// ===== DESCRIPTION
// Gets the value of a PHP configuration option.
// This function will not return configuration information set when the PHP was compiled, or read from an Apache configuration file.
// To check whether the system is using a configuration file, try retrieving the value of the cfg_file_path configuration setting. If this is available, a configuration file is being used.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_cfg_var(string $option): string|array|false
// ===== CODE
$return_get_cfg_var = get_cfg_var(

$option // string option - The configuration option name.

); // Return Values
// Returns the current value of the PHP configuration variable specified by option, or false if an error occurs.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.get-cfg-var.php
// ========== GET_CFG_VAR - END

// SYNTAX:
// string|array|false get_cfg_var(string $option)

return $return_get_cfg_var; // string|array|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_CFG_VAR
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_CURRENT_USER
// ============================== PUBLIC
// ============================== ABOUT
// Gets the name of the owner of the current PHP script.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_current_user() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_current_user()
{
$return_get_current_user = null;

// ========== GET_CURRENT_USER - BEGIN
// ===== ABOUT
// Gets the name of the owner of the current PHP script
// ===== DESCRIPTION
// Returns the name of the owner of the current PHP script.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_current_user(): string
// ===== CODE
$return_get_current_user = get_current_user(

// This function has no parameters.

); // Return Values
// Returns the username as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 get_current_user() example
// [php]
// echo 'Current script owner: ' . get_current_user();
// [/php]
// The above example will output something similar to:
// [result]
// Current script owner: SYSTEM
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-current-user.php
// ========== GET_CURRENT_USER - END

// SYNTAX:
// string get_current_user()

return $return_get_current_user; // string
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_CURRENT_USER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_DEFINED_CONSTANTS
// ============================== PUBLIC
// ============================== ABOUT
// Returns an associative array with the names of all the constants and their values.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_defined_constants() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_defined_constants($categorize = false)
{
$return_get_defined_constants = null;

// ========== GET_DEFINED_CONSTANTS - BEGIN
// ===== ABOUT
// Returns an associative array with the names of all the constants and their values
// ===== DESCRIPTION
// Returns the names and values of all the constants currently defined. This includes those created by extensions as well as those created with the define() function.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_defined_constants(bool $categorize = false): array
// ===== CODE
$return_get_defined_constants = get_defined_constants(

$categorize // bool categorize - Causing this function to return a multi-dimensional array with categories in the keys of the first dimension and constants and their values in the second dimension.
// [php]
// define("MY_CONSTANT", 1);
// print_r(get_defined_constants(true));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [Core] => Array
//         (
//             [E_ERROR] => 1
//             [E_WARNING] => 2
//             [E_PARSE] => 4
//             [E_NOTICE] => 8
//             [E_CORE_ERROR] => 16
//             [E_CORE_WARNING] => 32
//             [E_COMPILE_ERROR] => 64
//             [E_COMPILE_WARNING] => 128
//             [E_USER_ERROR] => 256
//             [E_USER_WARNING] => 512
//             [E_USER_NOTICE] => 1024
//             [E_ALL] => 2047
//             [TRUE] => 1
//         )
// 
//     [pcre] => Array
//         (
//             [PREG_PATTERN_ORDER] => 1
//             [PREG_SET_ORDER] => 2
//             [PREG_OFFSET_CAPTURE] => 256
//             [PREG_SPLIT_NO_EMPTY] => 1
//             [PREG_SPLIT_DELIM_CAPTURE] => 2
//             [PREG_SPLIT_OFFSET_CAPTURE] => 4
//             [PREG_GREP_INVERT] => 1
//         )
// 
//     [user] => Array
//         (
//             [MY_CONSTANT] => 1
//         )
// 
// )
// [/result]

); // Return Values
// Returns an array of constant name => constant value array, optionally groupped by extension name registering the constant.
// 
// [examples]
// Examples
// [example]
// Example #1 get_defined_constants() Example
// [php]
// print_r(get_defined_constants());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [E_ERROR] => 1
//     [E_WARNING] => 2
//     [E_PARSE] => 4
//     [E_NOTICE] => 8
//     [E_CORE_ERROR] => 16
//     [E_CORE_WARNING] => 32
//     [E_COMPILE_ERROR] => 64
//     [E_COMPILE_WARNING] => 128
//     [E_USER_ERROR] => 256
//     [E_USER_WARNING] => 512
//     [E_USER_NOTICE] => 1024
//     [E_ALL] => 2047
//     [TRUE] => 1
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-defined-constants.php
// ========== GET_DEFINED_CONSTANTS - END

// SYNTAX:
// array get_defined_constants(bool $categorize = false)

return $return_get_defined_constants; // array
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_DEFINED_CONSTANTS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_EXTENSION_FUNCS
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array with the names of the functions of a module.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_extension_funcs() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_extension_funcs($extension)
{
$return_get_extension_funcs = false;

// ========== GET_EXTENSION_FUNCS - BEGIN
// ===== ABOUT
// Returns an array with the names of the functions of a module
// ===== DESCRIPTION
// This function returns the names of all the functions defined in the module indicated by extension.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_extension_funcs(string $extension): array|false
// ===== CODE
$return_get_extension_funcs = get_extension_funcs(

$extension // string extension - The module name.
// Note: This parameter must be in lowercase.

); // Return Values
// Returns an array with all the functions, or false if extension is not a valid extension.
// 
// [examples]
// Examples
// [example]
// Example #1 Prints the XML functions
// [php]
// print_r(get_extension_funcs("xml"));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => xml_parser_create
//     [1] => xml_parser_create_ns
//     [2] => xml_set_object
//     [3] => xml_set_element_handler
//     [4] => xml_set_character_data_handler
//     [5] => xml_set_processing_instruction_handler
//     [6] => xml_set_default_handler
//     [7] => xml_set_unparsed_entity_decl_handler
//     [8] => xml_set_notation_decl_handler
//     [9] => xml_set_external_entity_ref_handler
//     [10] => xml_set_start_namespace_decl_handler
//     [11] => xml_set_end_namespace_decl_handler
//     [12] => xml_parse
//     [13] => xml_parse_into_struct
//     [14] => xml_get_error_code
//     [15] => xml_error_string
//     [16] => xml_get_current_line_number
//     [17] => xml_get_current_column_number
//     [18] => xml_get_current_byte_index
//     [19] => xml_parser_free
//     [20] => xml_parser_set_option
//     [21] => xml_parser_get_option
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-extension-funcs.php
// ========== GET_EXTENSION_FUNCS - END

// SYNTAX:
// array|false get_extension_funcs(string $extension)

return $return_get_extension_funcs; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_EXTENSION_FUNCS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_INCLUDE_PATH
// ============================== PUBLIC
// ============================== ABOUT
// Gets the current include_path configuration option.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_include_path() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_include_path()
{
$return_get_include_path = false;

// ========== GET_INCLUDE_PATH - BEGIN
// ===== ABOUT
// Gets the current include_path configuration option
// ===== DESCRIPTION
// Gets the current include_path configuration option value.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_include_path(): string|false
// ===== CODE
$return_get_include_path = get_include_path(

// This function has no parameters.

); // Return Values
// Returns the path, as a string, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 get_include_path() example
// [php]
// echo get_include_path();
// 
// // Or using ini_get()
// echo ini_get('include_path');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-include-path.php
// ========== GET_INCLUDE_PATH - END

// SYNTAX:
// string|false get_include_path()

return $return_get_include_path; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_INCLUDE_PATH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_INCLUDED_FILES
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array with the names of included or required files.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_included_files() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_included_files()
{
$return_get_included_files = null;

// ========== GET_INCLUDED_FILES - BEGIN
// ===== ABOUT
// Returns an array with the names of included or required files
// ===== DESCRIPTION
// Gets the names of all files that have been included using include, include_once, require or require_once.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_included_files(): array
// ===== CODE
$return_get_included_files = get_included_files(

// This function has no parameters.

); // Return Values
// Returns an array of the names of all files.
// The script originally called is considered an "included file," so it will be listed together with the files referenced by include and family.
// Files that are included or required multiple times only show up once in the returned array.
// 
// [examples]
// Examples
// [example]
// Example #1 get_included_files() example
// [php]
// This file is abc.php
// 
// include 'test1.php';
// include_once 'test2.php';
// require 'test3.php';
// require_once 'test4.php';
// 
// $included_files = get_included_files();
// 
// foreach ($included_files as $filename) {
//     echo "$filename\n";
// }
// 
// [/php]
// The above example will output:
// [result]
// /path/to/abc.php
// /path/to/test1.php
// /path/to/test2.php
// /path/to/test3.php
// /path/to/test4.php
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-included-files.php
// ========== GET_INCLUDED_FILES - END

// SYNTAX:
// array get_included_files()

return $return_get_included_files; // array
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_INCLUDED_FILES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_LOADED_EXTENSIONS
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array with the names of all modules compiled and loaded.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_loaded_extensions() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_loaded_extensions($zend_extensions = false)
{
$return_get_loaded_extensions = null;

// ========== GET_LOADED_EXTENSIONS - BEGIN
// ===== ABOUT
// Returns an array with the names of all modules compiled and loaded
// ===== DESCRIPTION
// This function returns the names of all the modules compiled and loaded in the PHP interpreter.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_loaded_extensions(bool $zend_extensions = false): array
// ===== CODE
$return_get_loaded_extensions = get_loaded_extensions(

$zend_extensions // bool zend_extensions - Only return Zend extensions, if not then regular extensions, like mysqli are listed. Defaults to false (return regular extensions).

); // Return Values
// Returns an indexed array of all the modules names.
// 
// [examples]
// Examples
// [example]
// Example #1 get_loaded_extensions() Example
// [php]
// print_r(get_loaded_extensions());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Core
//     [1] => date
//     [2] => libxml
//     [3] => pcre
//     [4] => sqlite3
//     [5] => zlib
//     [6] => ctype
//     [7] => dom
//     [8] => fileinfo
//     [9] => filter
//     [10] => hash
//     [11] => json
//     [12] => mbstring
//     [13] => SPL
//     [14] => PDO
//     [15] => session
//     [16] => posix
//     [17] => Reflection
//     [18] => standard
//     [19] => SimpleXML
//     [20] => pdo_sqlite
//     [21] => Phar
//     [22] => tokenizer
//     [23] => xml
//     [24] => xmlreader
//     [25] => xmlwriter
//     [26] => gmp
//     [27] => iconv
//     [28] => intl
//     [29] => bcmath
//     [30] => sodium
//     [31] => Zend OPcache
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-loaded-extensions.php
// ========== GET_LOADED_EXTENSIONS - END

// SYNTAX:
// array get_loaded_extensions(bool $zend_extensions = false)

return $return_get_loaded_extensions; // array
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_LOADED_EXTENSIONS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_MAGIC_QUOTES_GPC
// ============================== OFFLINE
// ============================== ABOUT
// Gets the current configuration setting of magic_quotes_gpc.
// 
// Warning: This function has been DEPRECATED as of PHP 7.4.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// get_magic_quotes_gpc() - PHP_4, PHP_5, PHP_7
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_get_magic_quotes_gpc()
{
$return_get_magic_quotes_gpc = false;

// ========== GET_MAGIC_QUOTES_GPC - BEGIN
// ===== ABOUT
// Gets the current configuration setting of magic_quotes_gpc
// Warning: This function has been DEPRECATED as of PHP 7.4.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Always returns false.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7
// ===== SYNTAX
// get_magic_quotes_gpc(): false
// ===== CODE
$return_get_magic_quotes_gpc = get_magic_quotes_gpc(

// This function has no parameters.

); // Return Values
// Always returns false.
// 
// Changelog
// Version - Description
// 7.4.0   - This function has been deprecated.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.get-magic-quotes-gpc.php
// ========== GET_MAGIC_QUOTES_GPC - END

// SYNTAX:
// bool get_magic_quotes_gpc()

return $return_get_magic_quotes_gpc; // bool
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_MAGIC_QUOTES_GPC
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_MAGIC_QUOTES_RUNTIME
// ============================== OFFLINE
// ============================== ABOUT
// Gets the current active configuration setting of magic_quotes_runtime.
// 
// Warning: This function has been DEPRECATED as of PHP 7.4.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// get_magic_quotes_runtime() - PHP_4, PHP_5, PHP_7
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_get_magic_quotes_runtime()
{
$return_get_magic_quotes_runtime = false;

// ========== GET_MAGIC_QUOTES_RUNTIME - BEGIN
// ===== ABOUT
// Gets the current active configuration setting of magic_quotes_runtime
// Warning: This function has been DEPRECATED as of PHP 7.4.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Always returns false.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7
// ===== SYNTAX
// get_magic_quotes_runtime(): false
// ===== CODE
$return_get_magic_quotes_runtime = get_magic_quotes_runtime(

// This function has no parameters.

); // Return Values
// Always returns false.
// 
// Changelog
// Version - Description
// 7.4.0   - This function has been deprecated.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.get-magic-quotes-runtime.php
// ========== GET_MAGIC_QUOTES_RUNTIME - END

// SYNTAX:
// bool get_magic_quotes_runtime()

return $return_get_magic_quotes_runtime; // bool
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_MAGIC_QUOTES_RUNTIME
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_REQUIRED_FILES
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array with the names of included or required files.
// 
// get_required_files - Alias of get_included_files()
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_required_files() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_get_required_files()
{
$return_get_required_files = null;

// ========== GET_REQUIRED_FILES - BEGIN
// ===== ABOUT
// get_required_files - Alias of get_included_files()
// ===== DESCRIPTION
// This function is an alias of: get_included_files().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_get_required_files = get_required_files(

// This function has no parameters.

); // Return
// array
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.get-required-files.php
// ========== GET_REQUIRED_FILES - END

// ========== GET_INCLUDED_FILES - BEGIN
// ===== ABOUT
// Returns an array with the names of included or required files
// ===== DESCRIPTION
// Gets the names of all files that have been included using include, include_once, require or require_once.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_included_files(): array
// ===== CODE
$return_get_included_files = get_included_files(

// This function has no parameters.

); // Return Values
// Returns an array of the names of all files.
// The script originally called is considered an "included file," so it will be listed together with the files referenced by include and family.
// Files that are included or required multiple times only show up once in the returned array.
// 
// [examples]
// Examples
// [example]
// Example #1 get_included_files() example
// [php]
// // This file is abc.php
// 
// include 'test1.php';
// include_once 'test2.php';
// require 'test3.php';
// require_once 'test4.php';
// 
// $included_files = get_included_files();
// 
// foreach ($included_files as $filename) {
//     echo "$filename\n";
// }
// 
// [/php]
// The above example will output:
// [result]
// /path/to/abc.php
// /path/to/test1.php
// /path/to/test2.php
// /path/to/test3.php
// /path/to/test4.php
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-included-files.php
// ========== GET_INCLUDED_FILES - END

// SYNTAX:
// array get_required_files()

return $return_get_required_files; // array
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_REQUIRED_FILES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_RESOURCES
// ============================== OFFLINE
// ============================== ABOUT
// Returns active resources.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_resources() - PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_get_resources($type = null)
{
$return_get_resources = null;

// ========== GET_RESOURCES - BEGIN
// ===== ABOUT
// Returns active resources
// ===== DESCRIPTION
// Returns an array of all currently active resources, optionally filtered by resource type.
// Note: This function is meant for debugging and testing purposes. It is not supposed to be used in production environments, especially not to access or even manipulate resources which are normally not accessible (e.g. the underlying stream resource of SplFileObject instances).
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// get_resources(?string $type = null): array
// ===== CODE
$return_get_resources = get_resources(

$type // string type - If defined, this will cause get_resources() to only return resources of the given type. A list of resource types is available.
// If the string Unknown is provided as the type, then only resources that are of an unknown type will be returned.
// If omitted, all resources will be returned.

); // Return Values
// Returns an array of currently active resources, indexed by resource number.
// 
// Changelog
// Version - Description
// 8.0.0   - type is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 Unfiltered get_resources()
// [php]
// $fp = tmpfile();
// var_dump(get_resources());
// [/php]
// The above example will output something similar to:
// [result]
// array(1) {
//   [1]=>
//   resource(1) of type (stream)
// }
// [/result]
// [/example]
// [example]
// Example #2 Filtered get_resources()
// [php]
// $fp = tmpfile();
// var_dump(get_resources('stream'));
// var_dump(get_resources('curl'));
// [/php]
// The above example will output something similar to:
// [result]
// array(1) {
//   [1]=>
//   resource(1) of type (stream)
// }
// array(0) {
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.get-resources.php
// ========== GET_RESOURCES - END

// SYNTAX:
// array get_resources(string $type = null)

return $return_get_resources; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GET_RESOURCES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETENV
// ============================== PUBLIC
// ============================== ABOUT
// Gets the value of a single or all environment variables.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getenv() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getenv($name = null, $local_only = false)
{
$return_getenv = false;

// ========== GETENV - BEGIN
// ===== ABOUT
// Gets the value of a single or all environment variables
// ===== DESCRIPTION
// Gets the value of a single or all environment variables.
// You can see a list of all the environmental variables by using phpinfo(). Many of these variables are listed within > RFC 3875, specifically section 4.1, "Request Meta-Variables".
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getenv(?string $name = null, bool $local_only = false): string|array|false
// ===== CODE
$return_getenv = getenv(

$name, // string name - The variable name as a string or null.

$local_only // bool local_only - When set to true, only local environment variables are returned, set by the operating system or putenv. It only has an effect when name is a string.

); // Return Values
// Returns the value of the environment variable name, or false if the environment variable name does not exist. If name is null, all environment variables are returned as an associative array.
// 
// Changelog
// Version - Description
// 8.0.0   - The name is now nullable.
// 7.1.0   - The name can now be omitted to retrieve an associative array of all environment variables.
// 7.0.9   - The local_only parameter has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 getenv() Example
// [php]
// // Example use of getenv()
// $ip = getenv('REMOTE_ADDR');
// 
// // Or simply use a Superglobal ($_SERVER or $_ENV)
// $ip = $_SERVER['REMOTE_ADDR'];
// 
// // Safely get the value of an environment variable, ignoring whether 
// // or not it was set by a SAPI or has been changed with putenv
// $ip = getenv('REMOTE_ADDR', true) ?: getenv('REMOTE_ADDR')
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: If PHP is running in a SAPI such as Fast CGI, this function will always return the value of an environment variable set by the SAPI, even if putenv() has been used to set a local environment variable of the same name. Use the local_only parameter to return the value of locally-set environment variables.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.getenv.php
// ========== GETENV - END

// SYNTAX:
// string|array|false getenv(string $name = null, bool $local_only = false)

return $return_getenv; // string|array|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETENV
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETLASTMOD
// ============================== PUBLIC
// ============================== ABOUT
// Gets time of last page modification.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getlastmod() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getlastmod()
{
$return_getlastmod = false;

// ========== GETLASTMOD - BEGIN
// ===== ABOUT
// Gets time of last page modification
// ===== DESCRIPTION
// Gets the time of the last modification of the main script of execution.
// If you're interested in getting the last modification time of a different file, consider using filemtime().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getlastmod(): int|false
// ===== CODE
$return_getlastmod = getlastmod(

// This function has no parameters.

); // Return Values
// Returns the time of the last modification of the current page. The value returned is a Unix timestamp, suitable for feeding to date(). Returns false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 getlastmod() example
// [php]
// // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
// echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.getlastmod.php
// ========== GETLASTMOD - END

// SYNTAX:
// int|false getlastmod()

return $return_getlastmod; // int|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETLASTMOD
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYGID
// ============================== PUBLIC
// ============================== ABOUT
// Get PHP script owner's GID.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getmygid() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getmygid()
{
$return_getmygid = false;

// ========== GETMYGID - BEGIN
// ===== ABOUT
// Get PHP script owner's GID
// ===== DESCRIPTION
// Gets the group ID of the current script.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getmygid(): int|false
// ===== CODE
$return_getmygid = getmygid(

// This function has no parameters.

); // Return Values
// Returns the group ID of the current script, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.getmygid.php
// ========== GETMYGID - END

// SYNTAX:
// int|false getmygid()

return $return_getmygid; // int|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYGID
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYINODE
// ============================== PUBLIC
// ============================== ABOUT
// Gets the inode of the current script.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getmyinode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getmyinode()
{
$return_getmyinode = false;

// ========== GETMYINODE - BEGIN
// ===== ABOUT
// Gets the inode of the current script
// ===== DESCRIPTION
// Gets the inode of the current script.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getmyinode(): int|false
// ===== CODE
$return_getmyinode = getmyinode(

// This function has no parameters.

); // Return Values
// Returns the current script's inode as an integer, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.getmyinode.php
// ========== GETMYINODE - END

// SYNTAX:
// int|false getmyinode()

return $return_getmyinode; // int|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYINODE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYPID
// ============================== PUBLIC
// ============================== ABOUT
// Gets PHP's process ID.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getmypid() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getmypid()
{
$return_getmypid = false;

// ========== GETMYPID - BEGIN
// ===== ABOUT
// Gets PHP's process ID
// ===== DESCRIPTION
// Gets the current PHP process ID.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getmypid(): int|false
// ===== CODE
$return_getmypid = getmypid(

// This function has no parameters.

); // Return Values
// Returns the current PHP process ID, or false on error.
// 
// Notes
// Warning: Process IDs are not unique, thus they are a weak entropy source. We recommend against relying on pids in security-dependent contexts.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.getmypid.php
// ========== GETMYPID - END

// SYNTAX:
// int|false getmypid()

return $return_getmypid; // int|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYPID
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYUID
// ============================== PUBLIC
// ============================== ABOUT
// Gets PHP script owner's UID.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getmyuid() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getmyuid()
{
$return_getmyuid = false;

// ========== GETMYUID - BEGIN
// ===== ABOUT
// Gets PHP script owner's UID
// ===== DESCRIPTION
// Gets the user ID of the current script.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getmyuid(): int|false
// ===== CODE
$return_getmyuid = getmyuid(

// This function has no parameters.

); // Return Values
// Returns the user ID of the current script, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.getmyuid.php
// ========== GETMYUID - END

// SYNTAX:
// int|false getmyuid()

return $return_getmyuid; // int|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETMYUID
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETOPT
// ============================== PUBLIC
// ============================== ABOUT
// Gets options from the command line argument list.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getopt() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getopt($short_options, $long_options, & $rest_index)
{
$return_getopt = false;

// ========== GETOPT - BEGIN
// ===== ABOUT
// Gets options from the command line argument list
// ===== DESCRIPTION
// Parses options passed to the script.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getopt(string $short_options, array $long_options = [], int &$rest_index = null): array|false
// ===== CODE
$return_getopt = getopt(

$short_options, // string short_options - Each character in this string will be used as option characters and matched against options passed to the script starting with a single hyphen (-). For example, an option string "x" recognizes an option -x. Only a-z, A-Z and 0-9 are allowed.

$long_options, // array long_options - An array of options. Each element in this array will be used as option strings and matched against options passed to the script starting with two hyphens (--). For example, an longopts element "opt" recognizes an option --opt.

$rest_index // int& rest_index - If the rest_index parameter is present, then the index where argument parsing stopped will be written to this variable.
// 
// The short_options parameter may contain the following elements:
// * Individual characters (do not accept values)
// * Characters followed by a colon (parameter requires value)
// * Characters followed by two colons (optional value)
// Option values are the first argument after the string. If a value is required, it does not matter whether the value has leading white space or not. See note.
// Note: Optional values do not accept " " (space) as a separator.
// 
// The long_options array values may contain:
// * String (parameter does not accept any value)
// * String followed by a colon (parameter requires value)
// * String followed by two colons (optional value)
// Note: The format for the short_options and long_options is almost the same, the only difference is that long_options takes an array of options (where each element is the option) whereas short_options takes a string (where each character is the option).

); // Return Values
// This function will return an array of option / argument pairs, or false on failure.
// Note: The parsing of options will end at the first non-option found, anything that follows is discarded.
// 
// Changelog
// Version - Description
// 7.1.0   - Added the rest_index parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 getopt() example: The basics
// [php]
// // Script example.php
// $options = getopt("f:hp:");
// var_dump($options);
// [/php]
// [code]
// shell> php example.php -fvalue -h
// [/code]
// The above example will output:
// [result]
// array(2) {
//   ["f"]=>
//   string(5) "value"
//   ["h"]=>
//   bool(false)
// }
// [/result]
// [/example]
// [example]
// Example #2 getopt() example: Introducing long options
// [php]
// // Script example.php
// $shortopts  = "";
// $shortopts .= "f:";  // Required value
// $shortopts .= "v::"; // Optional value
// $shortopts .= "abc"; // These options do not accept values
// 
// $longopts  = array(
//     "required:",     // Required value
//     "optional::",    // Optional value
//     "option",        // No value
//     "opt",           // No value
// );
// $options = getopt($shortopts, $longopts);
// var_dump($options);
// [/php]
// [code]
// shell> php example.php -f "value for f" -v -a --required value --optional="optional value" --option
// [/code]
// The above example will output:
// [result]
// array(6) {
//   ["f"]=>
//   string(11) "value for f"
//   ["v"]=>
//   bool(false)
//   ["a"]=>
//   bool(false)
//   ["required"]=>
//   string(5) "value"
//   ["optional"]=>
//   string(14) "optional value"
//   ["option"]=>
//   bool(false)
// }
// [/result]
// [/example]
// [example]
// Example #3 getopt() example: Passing multiple options as one
// [php]
// // Script example.php
// $options = getopt("abc");
// var_dump($options);
// [/php]
// [code]
// shell> php example.php -aaac
// [/code]
// The above example will output:
// [result]
// array(2) {
//   ["a"]=>
//   array(3) {
//     [0]=>
//     bool(false)
//     [1]=>
//     bool(false)
//     [2]=>
//     bool(false)
//   }
//   ["c"]=>
//   bool(false)
// }
// [/result]
// [/example]
// [example]
// Example #4 getopt() example: Using rest_index
// [php]
// // Script example.php
// $rest_index = null;
// $opts = getopt('a:b:', [], $rest_index);
// $pos_args = array_slice($argv, $rest_index);
// var_dump($pos_args);
// [/php]
// [code]
// shell> php example.php -a 1 -b 2 -- test
// [/code]
// The above example will output:
// [result]
// array(1) {
//   [0]=>
//   string(4) "test"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.getopt.php
// ========== GETOPT - END

// SYNTAX:
// array|false getopt(string $short_options, array $long_options, int& $rest_index)

return $return_getopt; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETOPT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETRUSAGE
// ============================== PUBLIC
// ============================== ABOUT
// Gets the current resource usages.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getrusage() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_getrusage($mode = 0)
{
$return_getrusage = false;

// ========== GETRUSAGE - BEGIN
// ===== ABOUT
// Gets the current resource usages
// ===== DESCRIPTION
// This is an interface to getrusage(2). It gets data returned from the system call.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getrusage(int $mode = 0): array|false
// ===== CODE
$return_getrusage = getrusage(

$mode // int mode - If mode is 1, getrusage will be called with RUSAGE_CHILDREN.

); // Return Values
// Returns an associative array containing the data returned from the system call. All entries are accessible by using their documented field names. Returns false on failure.
// 
// Changelog
// Version - Description
// 7.0.0   - This function is now supported on Windows.
// 
// [examples]
// Examples
// [example]
// Example #1 getrusage() example
// [php]
// $dat = getrusage();
// echo $dat["ru_oublock"];       // number of block output operations
// echo $dat["ru_inblock"];       // number of block input operations
// echo $dat["ru_msgsnd"];        // number of IPC messages sent
// echo $dat["ru_msgrcv"];        // number of IPC messages received
// echo $dat["ru_maxrss"];        // maximum resident set size
// echo $dat["ru_ixrss"];         // integral shared memory size
// echo $dat["ru_idrss"];         // integral unshared data size
// echo $dat["ru_minflt"];        // number of page reclaims (soft page faults)
// echo $dat["ru_majflt"];        // number of page faults (hard page faults)
// echo $dat["ru_nsignals"];      // number of signals received
// echo $dat["ru_nvcsw"];         // number of voluntary context switches
// echo $dat["ru_nivcsw"];        // number of involuntary context switches
// echo $dat["ru_nswap"];         // number of swaps
// echo $dat["ru_utime.tv_usec"]; // user time used (microseconds)
// echo $dat["ru_utime.tv_sec"];  // user time used (seconds)
// echo $dat["ru_stime.tv_usec"]; // system time used (microseconds)
// echo $dat["ru_stime.tv_sec"];  // system time used (seconds)
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  On Windows getrusage() will only return the following members:
//  * "ru_stime.tv_sec"
//  * "ru_stime.tv_usec"
//  * "ru_utime.tv_sec"
//  * "ru_utime.tv_usec"
//  * "ru_majflt" (only if mode is RUSAGE_SELF)
//  * "ru_maxrss" (only if mode is RUSAGE_SELF)
//  If getrusage() is called with mode set to 1 (RUSAGE_CHILDREN), then resource usage for threads are collected (meaning that internally the function is called with RUSAGE_THREAD).
//  Note:
//  on BeOS 2000, only the following members are returned:
//  * "ru_stime.tv_sec"
//  * "ru_stime.tv_usec"
//  * "ru_utime.tv_sec"
//  * "ru_utime.tv_usec"
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.getrusage.php
// ========== GETRUSAGE - END

// SYNTAX:
// array|false getrusage(int $mode = 0)

return $return_getrusage; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_GETRUSAGE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_ALTER
// ============================== PUBLIC
// ============================== ABOUT
// Sets the value of a configuration option.
// 
// ini_alter - Alias of ini_set().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ini_alter() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_ini_alter($option, $value)
{
$return_ini_alter = false;

// ========== INI_ALTER - BEGIN
// ===== ABOUT
// ini_alter - Alias of ini_set()
// ===== DESCRIPTION
// This function is an alias of: ini_set().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_ini_alter = ini_alter(

$option, // string option

$value // string|int|float|bool|null value

); // Return
// string|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.ini-alter.php
// ========== INI_ALTER - END

// ========== INI_SET - BEGIN
// ===== ABOUT
// Sets the value of a configuration option
// ===== DESCRIPTION
// Sets the value of the given configuration option. The configuration option will keep this new value during the script's execution, and will be restored at the script's ending.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ini_set(string $option, string|int|float|bool|null $value): string|false
// ===== CODE
// $return_ini_set = ini_set(

// $option, // string option - Not all the available options can be changed using ini_set(). There is a list of all available options in the appendix.

// $value // string|int|float|bool|null value - The new value for the option.

// ); // Return Values
// Returns the old value on success, false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - value now accepts any scalar type (including null). Previously, only string values were accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 Setting an ini option
// [php]
// echo ini_get('display_errors');
// 
// if (!ini_get('display_errors')) {
//     ini_set('display_errors', '1');
// }
// 
// echo ini_get('display_errors');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.ini-set.php
// ========== INI_SET - END

// SYNTAX:
// string|false ini_alter(string $option, string|int|float|bool|null $value)

return $return_ini_alter; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_ALTER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_GET_ALL
// ============================== PUBLIC
// ============================== ABOUT
// Gets all configuration options.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ini_get_all() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_ini_get_all($extension = null, $details = true)
{
$return_ini_get_all = false;

// ========== INI_GET_ALL - BEGIN
// ===== ABOUT
// Gets all configuration options
// ===== DESCRIPTION
// Returns all the registered configuration options.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ini_get_all(?string $extension = null, bool $details = true): array|false
// ===== CODE
$return_ini_get_all = ini_get_all(

$extension, // string extension - An optional extension name. If not null or the string core, the function returns only options specific for that extension.

$details // bool details - Retrieve details settings or only the current value for each setting. Default is true (retrieve details).

); // Return Values
// Returns an associative array with directive name as the array key. Returns false and raises an E_WARNING level error if the extension doesn't exist.
// When details is true (default) the array will contain global_value (set in php.ini), local_value (perhaps set with ini_set() or .htaccess), and access (the access level).
// When details is false the value will be the current value of the option.
// See the manual section for information on what access levels mean.
// Note: It's possible for a directive to have multiple access levels, which is why access shows the appropriate bitmask values.
// 
// [examples]
// Examples
// [example]
// Example #1 ini_get_all() examples
// [php]
// print_r(ini_get_all("pcre"));
// print_r(ini_get_all());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [pcre.backtrack_limit] => Array
//         (
//             [global_value] => 100000
//             [local_value] => 100000
//             [access] => 7
//         )
// 
//     [pcre.recursion_limit] => Array
//         (
//             [global_value] => 100000
//             [local_value] => 100000
//             [access] => 7
//         )
// 
// )
// Array
// (
//     [allow_call_time_pass_reference] => Array
//         (
//             [global_value] => 0
//             [local_value] => 0
//             [access] => 6
//         )
// 
//     [allow_url_fopen] => Array
//         (
//             [global_value] => 1
//             [local_value] => 1
//             [access] => 4
//         )
// 
//     ...
// 
// )
// [/result]
// [/example]
// [example]
// Example #2 Disabling details
// [php]
// print_r(ini_get_all("pcre", false)); // Added in PHP 5.3.0
// print_r(ini_get_all(null, false)); // Added in PHP 5.3.0
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [pcre.backtrack_limit] => 100000
//     [pcre.recursion_limit] => 100000
// )
// Array
// (
//     [allow_call_time_pass_reference] => 0
//     [allow_url_fopen] => 1
//     ...
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: ini_get_all() ignores "array" ini options such as pdo.dsn.*.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.ini-get-all.php
// ========== INI_GET_ALL - END

// SYNTAX:
// array|false ini_get_all(string $extension = null, bool $details = true)

return $return_ini_get_all; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_GET_ALL
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_GET
// ============================== PUBLIC
// ============================== ABOUT
// Gets the value of a configuration option.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ini_get() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_ini_get($option)
{
$return_ini_get = false;

// ========== INI_GET - BEGIN
// ===== ABOUT
// Gets the value of a configuration option
// ===== DESCRIPTION
// Returns the value of the configuration option on success.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ini_get(string $option): string|false
// ===== CODE
$return_ini_get = ini_get(

$option // string option - The configuration option name.

); // Return Values
// Returns the value of the configuration option as a string on success, or an empty string for null values. Returns false if the configuration option doesn't exist.
// 
// [examples]
// Examples
// [example]
// Example #1 A few ini_get() examples
// [php]
// /*
// Our php.ini contains the following settings:
// 
// display_errors = On
// register_globals = Off
// post_max_size = 8M
// */
// 
// echo 'display_errors = ' . ini_get('display_errors') . "\n";
// echo 'register_globals = ' . ini_get('register_globals') . "\n";
// echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
// echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
// echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));
// 
// function return_bytes($val) {
//     $val = trim($val);
//     $last = strtolower($val[strlen($val)-1]);
//     switch($last) {
//         // The 'G' modifier is available
//         case 'g':
//             $val *= 1024;
//         case 'm':
//             $val *= 1024;
//         case 'k':
//             $val *= 1024;
//     }
// 
//     return $val;
// }
// 
// [/php]
// The above example will output something similar to:
// [result]
// display_errors = 1
// register_globals = 0
// post_max_size = 8M
// post_max_size+1 = 9
// post_max_size in bytes = 8388608
// [/result]
// [/example]
// [/examples]
// 
// Notes
//  Note: When querying boolean values
//  A boolean ini value of off will be returned as an empty string or "0" while a boolean ini value of on will be returned as "1". The function can also return the literal string of INI value.
//  Note: When querying memory size values
//  Many ini memory size values, such as upload_max_filesize, are stored in the php.ini file in shorthand notation. ini_get() will return the exact string stored in the php.ini file and NOT its int equivalent. Attempting normal arithmetic functions on these values will not have otherwise expected results. The example above shows one way to convert shorthand notation into bytes, much like how the PHP source does it.
// Note: ini_get() can't read "array" ini options such as pdo.dsn.*, and returns false in this case.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.ini-get.php
// ========== INI_GET - END

// SYNTAX:
// string|false ini_get(string $option)

return $return_ini_get; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_GET
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_PARSE_QUANTITY
// ============================== OFFLINE
// ============================== ABOUT
// Get interpreted size from ini shorthand syntax.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// ini_parse_quantity() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_ini_parse_quantity($shorthand)
{
$return_ini_parse_quantity = 0;

// ========== INI_PARSE_QUANTITY - BEGIN
// ===== ABOUT
// Get interpreted size from ini shorthand syntax
// ===== DESCRIPTION
// Returns the interpreted size in bytes on success from an ini shorthand.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// ini_parse_quantity(string $shorthand): int
// ===== CODE
$return_ini_parse_quantity = ini_parse_quantity(

$shorthand // string shorthand - Ini shorthand to parse, must be a number followed by an optional multiplier. The following multipliers are supported: k/K (1024), m/M (1048576), g/G (1073741824). The number can be a decimal, hex (prefixed with 0x or 0X), octal (prefixed with 0o, 0O or 0) or binary (prefixed with 0b or 0B)

); // Return Values
// Returns the interpreted size in bytes as an int.
// 
// Errors/Exceptions
// If the value cannot be parsed, or an invalid multiplier is used, an E_WARNING is raised.
// 
// [examples]
// Examples
// [example]
// Example #1 A few ini_parse_quantity() examples
// [php]
// 
// var_dump(ini_parse_quantity('1024'));
// var_dump(ini_parse_quantity('1024M'));
// var_dump(ini_parse_quantity('512K'));
// var_dump(ini_parse_quantity('0xFFk'));
// var_dump(ini_parse_quantity('0b1010k'));
// var_dump(ini_parse_quantity('0o1024'));
// var_dump(ini_parse_quantity('01024'));
// var_dump(ini_parse_quantity('Foobar'));
// var_dump(ini_parse_quantity('10F'));
// 
// [/php]
// The above example will output something similar to:
// [result]
// 
// int(1024)
// int(1073741824)
// int(524288)
// int(261120)
// int(10240)
// int(532)
// int(532)
// 
// Warning: Invalid quantity "Foobar": no valid leading digits, interpreting as "0" for backwards compatibility
// int(0)
// 
// Warning: Invalid quantity "10F": unknown multiplier "F", interpreting as "10" for backwards compatibility
// int(10)
// 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.ini-parse-quantity.php
// ========== INI_PARSE_QUANTITY - END

// SYNTAX:
// int ini_parse_quantity(string $shorthand)

return $return_ini_parse_quantity; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_PARSE_QUANTITY
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_RESTORE
// ============================== PUBLIC
// ============================== ABOUT
// Restores the value of a configuration option.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ini_restore() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_ini_restore($option)
{

// ========== INI_RESTORE - BEGIN
// ===== ABOUT
// Restores the value of a configuration option
// ===== DESCRIPTION
// Restores a given configuration option to its original value.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ini_restore(string $option): void
// ===== CODE
ini_restore(

$option // string option - The configuration option name.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 ini_restore() example
// [php]
// $setting = 'html_errors';
// 
// echo 'Current value for \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;
// 
// ini_set($setting, ini_get($setting) ? 0 : 1);
// echo 'New value for \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;
// 
// ini_restore($setting);
// echo 'Original value for \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// Current value for 'html_errors': 1
// New value for 'html_errors': 0
// Original value for 'html_errors': 1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.ini-restore.php
// ========== INI_RESTORE - END

// SYNTAX:
// void ini_restore(string $option)

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_RESTORE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_SET
// ============================== PUBLIC
// ============================== ABOUT
// Sets the value of a configuration option.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ini_set() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_ini_set($option, $value)
{
$return_ini_set = false;

// ========== INI_SET - BEGIN
// ===== ABOUT
// Sets the value of a configuration option
// ===== DESCRIPTION
// Sets the value of the given configuration option. The configuration option will keep this new value during the script's execution, and will be restored at the script's ending.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ini_set(string $option, string|int|float|bool|null $value): string|false
// ===== CODE
$return_ini_set = ini_set(

$option, // string option - Not all the available options can be changed using ini_set(). There is a list of all available options in the appendix.

$value // string|int|float|bool|null value - The new value for the option.

); // Return Values
// Returns the old value on success, false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - value now accepts any scalar type (including null). Previously, only string values were accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 Setting an ini option
// [php]
// echo ini_get('display_errors');
// 
// if (!ini_get('display_errors')) {
//     ini_set('display_errors', '1');
// }
// 
// echo ini_get('display_errors');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.ini-set.php
// ========== INI_SET - END

// SYNTAX:
// string|false ini_set(string $option, string|int|float|bool|null $value)

return $return_ini_set; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_INI_SET
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_GET_PEAK_USAGE
// ============================== OFFLINE
// ============================== ABOUT
// Returns the peak of memory allocated by PHP.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// memory_get_peak_usage() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_memory_get_peak_usage($real_usage = false)
{
$return_memory_get_peak_usage = 0;

// ========== MEMORY_GET_PEAK_USAGE - BEGIN
// ===== ABOUT
// Returns the peak of memory allocated by PHP
// ===== DESCRIPTION
// Returns the peak of memory, in bytes, that's been allocated to your PHP script.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// memory_get_peak_usage(bool $real_usage = false): int
// ===== CODE
$return_memory_get_peak_usage = memory_get_peak_usage(

$real_usage // bool real_usage - Set this to true to get the real size of memory allocated from system. If not set or false only the memory used by emalloc() is reported.

); // Return Values
// Returns the memory peak in bytes.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.memory-get-peak-usage.php
// ========== MEMORY_GET_PEAK_USAGE - END

// SYNTAX:
// int memory_get_peak_usage(bool $real_usage = false)

return $return_memory_get_peak_usage; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_GET_PEAK_USAGE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_GET_USAGE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the amount of memory allocated to PHP.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// memory_get_usage() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_memory_get_usage($real_usage = false)
{
$return_memory_get_usage = 0;

// ========== MEMORY_GET_USAGE - BEGIN
// ===== ABOUT
// Returns the amount of memory allocated to PHP
// ===== DESCRIPTION
// Returns the amount of memory, in bytes, that's currently being allocated to your PHP script.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// memory_get_usage(bool $real_usage = false): int
// ===== CODE
$return_memory_get_usage = memory_get_usage(

$real_usage // bool real_usage - Set this to true to get total memory allocated from system, including unused pages. If not set or false only the used memory is reported.
// Note: PHP does not track memory that is not allocated by emalloc()

); // Return Values
// Returns the memory amount in bytes.
// 
// [examples]
// Examples
// [example]
// Example #1 A memory_get_usage() example
// [php]
// // This is only an example, the numbers below will
// // differ depending on your system
// 
// echo memory_get_usage() . "\n"; // 36640
// 
// $a = str_repeat("Hello", 4242);
// 
// echo memory_get_usage() . "\n"; // 57960
// 
// unset($a);
// 
// echo memory_get_usage() . "\n"; // 36744
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.memory-get-usage.php
// ========== MEMORY_GET_USAGE - END

// SYNTAX:
// int memory_get_usage(bool $real_usage = false)

return $return_memory_get_usage; // int
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_GET_USAGE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_RESET_PEAK_USAGE
// ============================== OFFLINE
// ============================== ABOUT
// Reset the peak memory usage.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// memory_reset_peak_usage() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_memory_reset_peak_usage()
{

// ========== MEMORY_RESET_PEAK_USAGE - BEGIN
// ===== ABOUT
// Reset the peak memory usage
// ===== DESCRIPTION
// Resets the peak memory usage returned by the memory_get_peak_usage() function.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// memory_reset_peak_usage(): void
// ===== CODE
memory_reset_peak_usage(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 memory_reset_peak_usage() example
// [php]
// 
// var_dump(memory_get_peak_usage());
// 
// $a = str_repeat("Hello", 424242);
// var_dump(memory_get_peak_usage());
// 
// unset($a);
// memory_reset_peak_usage();
// 
// $a = str_repeat("Hello", 2424);
// var_dump(memory_get_peak_usage());
// 
// [/php]
// The above example will output something similar to:
// [result]
// int(422440)
// int(2508672)
// int(399208)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.memory-reset-peak-usage.php
// ========== MEMORY_RESET_PEAK_USAGE - END

// SYNTAX:
// void memory_reset_peak_usage()

// Return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_MEMORY_RESET_PEAK_USAGE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_INI_LOADED_FILE
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve a path to the loaded php.ini file.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// php_ini_loaded_file() - PHP_5 >= PHP_5_2_4, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_php_ini_loaded_file()
{
$return_php_ini_loaded_file = false;

// ========== PHP_INI_LOADED_FILE - BEGIN
// ===== ABOUT
// Retrieve a path to the loaded php.ini file
// ===== DESCRIPTION
// Check if a php.ini file is loaded, and retrieve its path.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_4, PHP_7, PHP_8
// ===== SYNTAX
// php_ini_loaded_file(): string|false
// ===== CODE
$return_php_ini_loaded_file = php_ini_loaded_file(

// This function has no parameters.

); // Return Values
// The loaded php.ini path, or false if one is not loaded.
// 
// [examples]
// Examples
// [example]
// Example #1 memory_reset_peak_usage() example
// [php]
// 
// var_dump(memory_get_peak_usage());
// 
// $a = str_repeat("Hello", 424242);
// var_dump(memory_get_peak_usage());
// 
// unset($a);
// memory_reset_peak_usage();
// 
// $a = str_repeat("Hello", 2424);
// var_dump(memory_get_peak_usage());
// 
// [/php]
// The above example will output something similar to:
// [result]
// int(422440)
// int(2508672)
// int(399208)
// [/result]
// [/example]
// [examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.php-ini-loaded-file.php
// ========== PHP_INI_LOADED_FILE - END

// SYNTAX:
// string|false php_ini_loaded_file()

return $return_php_ini_loaded_file; // string|false
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_INI_LOADED_FILE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_INI_SCANNED_FILES
// ============================== PUBLIC
// ============================== ABOUT
// Return a list of .ini files parsed from the additional ini dir.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// php_ini_scanned_files() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_php_ini_scanned_files()
{
$return_php_ini_scanned_files = false;

// ========== PHP_INI_SCANNED_FILES - BEGIN
// ===== ABOUT
// Return a list of .ini files parsed from the additional ini dir
// ===== DESCRIPTION
// php_ini_scanned_files() returns a comma-separated list of configuration files parsed after php.ini. The directories searched are set by a compile time option and, optionally, by an environment variable at run time: more information can be found in the installation guide.
// The returned configuration files include the full path.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// php_ini_scanned_files(): string|false
// ===== CODE
$return_php_ini_scanned_files = php_ini_scanned_files(

// This function has no parameters.

); // Return Values
// Returns a comma-separated string of .ini files on success. Each comma is followed by a newline. If the configure directive --with-config-file-scan-dir wasn't set and the PHP_INI_SCAN_DIR environment variable isn't set, false is returned. If it was set and the directory was empty, an empty string is returned. If a file is unrecognizable, the file will still make it into the returned string but a PHP error will also result. This PHP error will be seen both at compile time and while using php_ini_scanned_files().
// 
// [examples]
// Examples
// [example]
// Example #1 A simple example to list the returned ini files
// [php]
// if ($filelist = php_ini_scanned_files()) {
//     if (strlen($filelist) > 0) {
//         $files = explode(',', $filelist);
// 
//         foreach ($files as $file) {
//             echo "<li>" . trim($file) . "</li>\n";
//         }
//     }
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.php-ini-scanned-files.php
// ========== PHP_INI_SCANNED_FILES - END

// SYNTAX:
// string|false php_ini_scanned_files()

return $return_php_ini_scanned_files; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_INI_SCANNED_FILES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_SAPI_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns the type of interface between web server and PHP.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// php_sapi_name() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_php_sapi_name()
{
$return_php_sapi_name = false;

// ========== PHP_SAPI_NAME - BEGIN
// ===== ABOUT
// Returns the type of interface between web server and PHP
// ===== DESCRIPTION
// Returns a lowercase string that describes the type of interface (the Server API, SAPI) that PHP is using. For example, in CLI PHP this string will be "cli" whereas with Apache it may have several different values depending on the exact SAPI used. Possible values are listed below.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// php_sapi_name(): string|false
// ===== CODE
$return_php_sapi_name = php_sapi_name(

// This function has no parameters.

); // Return Values
// Returns the interface type, as a lowercase string, or false on failure.
// Although not exhaustive, the possible return values include apache, apache2handler, cgi (until PHP 5.3), cgi-fcgi, cli, cli-server, embed, fpm-fcgi, litespeed, phpdbg.
// 
// [examples]
// Examples
// [example]
// Example #1 php_sapi_name() example
// This example checks for the substring cgi because it may also be cgi-fcgi.
// [php]
// $sapi_type = php_sapi_name();
// if (substr($sapi_type, 0, 3) == 'cgi') {
//     echo "You are using CGI PHP\n";
// } else {
//     echo "You are not using CGI PHP\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: An alternative approach
//  The PHP constant PHP_SAPI has the same value as php_sapi_name().
//  Tip: A potential gotcha
//  The defined SAPI may not be obvious, because for example instead of apache it may be defined as apache2handler.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.php-sapi-name.php
// ========== PHP_SAPI_NAME - END

// SYNTAX:
// string|false php_sapi_name()

return $return_php_sapi_name; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_SAPI_NAME
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_UNAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns information about the operating system PHP is running on.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// php_uname() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_php_uname($mode = "a")
{
$return_php_uname = null;

// ========== PHP_UNAME - BEGIN
// ===== ABOUT
// Returns information about the operating system PHP is running on
// ===== DESCRIPTION
// php_uname() returns a description of the operating system PHP is running on. This is the same string you see at the very top of the phpinfo() output. For the name of just the operating system, consider using the PHP_OS constant, but keep in mind this constant will contain the operating system PHP was built on.
// On some older UNIX platforms, it may not be able to determine the current OS information in which case it will revert to displaying the OS PHP was built on. This will only happen if your uname() library call either doesn't exist or doesn't work.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// php_uname(string $mode = "a"): string
// ===== CODE
$return_php_uname = php_uname(

$mode // string mode - mode is a single character that defines what information is returned:
// * 'a': This is the default. Contains all modes in the sequence "s n r v m".
// * 's': Operating system name. eg. FreeBSD.
// * 'n': Host name. eg. localhost.example.com.
// * 'r': Release name. eg. 5.1.2-RELEASE.
// * 'v': Version information. Varies a lot between operating systems.
// * 'm': Machine type. eg. i386.

); // Return Values
// Returns the description, as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 Some php_uname() examples
// [php]
// echo php_uname();
// echo PHP_OS;
// 
// /* Some possible outputs:
// Linux localhost 2.4.21-0.13mdk #1 Fri Mar 14 15:08:06 EST 2003 i686
// Linux
// 
// FreeBSD localhost 3.2-RELEASE #15: Mon Dec 17 08:46:02 GMT 2001
// FreeBSD
// 
// Windows NT XN1 5.1 build 2600
// WINNT
// */
// 
// if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
//     echo 'This is a server using Windows!';
// } else {
//     echo 'This is a server not using Windows!';
// }
// 
// [/php]
// There are also some related Predefined PHP constants that may come in handy, for example:
// [/example]
// [example]
// Example #2 A few OS related constant examples
// [php]
// // *nix
// echo DIRECTORY_SEPARATOR; // /
// echo PHP_SHLIB_SUFFIX;    // so
// echo PATH_SEPARATOR;      // :
// 
// // Win*
// echo DIRECTORY_SEPARATOR; // \
// echo PHP_SHLIB_SUFFIX;    // dll
// echo PATH_SEPARATOR;      // ;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.php-uname.php
// ========== PHP_UNAME - END

// SYNTAX:
// string php_uname(string $mode = "a")

return $return_php_uname; // string
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHP_UNAME
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPCREDITS
// ============================== PUBLIC
// ============================== ABOUT
// Prints out the credits for PHP.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpcredits() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// CREDITS_ALL - phpcredits()
// ============================== CODE
function php_behaviour_phpoptionsinfo_phpcredits($flags = CREDITS_ALL)
{
$return_phpcredits = false;

// ========== PHPCREDITS - BEGIN
// ===== ABOUT
// Prints out the credits for PHP
// ===== DESCRIPTION
// This function prints out the credits listing the PHP developers, modules, etc. It generates the appropriate HTML codes to insert the information in a page.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// phpcredits(int $flags = CREDITS_ALL): true
// ===== CODE
$return_phpcredits = phpcredits(

$flags // int flags - To generate a custom credits page, you may want to use the flags parameter.
// 
// Pre-defined phpcredits() flags
// name             - description
// CREDITS_ALL      - All the credits, equivalent to using: CREDITS_DOCS + CREDITS_GENERAL + CREDITS_GROUP + CREDITS_MODULES + CREDITS_FULLPAGE. It generates a complete stand-alone HTML page with the appropriate tags.
// CREDITS_DOCS     - The credits for the documentation team
// CREDITS_FULLPAGE - Usually used in combination with the other flags. Indicates that a complete stand-alone HTML page needs to be printed including the information indicated by the other flags.
// CREDITS_GENERAL  - General credits: Language design and concept, PHP authors and SAPI module.
// CREDITS_GROUP    - A list of the core developers
// CREDITS_MODULES  - A list of the extension modules for PHP, and their authors
// CREDITS_SAPI     - A list of the server API modules for PHP, and their authors

); // Return Values
// Always returns true.
// 
// [examples]
// Examples
// [example]
// Example #1 Prints the general credits
// [php]
// phpcredits(CREDITS_GENERAL);
// [/php]
// [/example]
// [example]
// Example #2 Prints the core developers and the documentation group
// [php]
// phpcredits(CREDITS_GROUP | CREDITS_DOCS | CREDITS_FULLPAGE);
// [/php]
// [/example]
// [example]
// Example #3 Printing all the credits
// [code]
// <html>
//  <head>
//   <title>My credits page</title>
//  </head>
//  <body>
// [php]
// // some code of your own
// phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
// // some more code
// [/php]
//  </body>
// </html>
// [/code]
// [/example]
// [/examples]
// 
// Notes
// Note: phpcredits() outputs plain text instead of HTML when using the CLI mode.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.phpcredits.php
// ========== PHPCREDITS - END

// SYNTAX:
// bool phpcredits(int $flags = CREDITS_ALL)

return $return_phpcredits; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPCREDITS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPINFO
// ============================== PUBLIC
// ============================== ABOUT
// Outputs information about PHP's configuration.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpinfo() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// INFO_ALL - phpinfo()
// ============================== CODE
function php_behaviour_phpoptionsinfo_phpinfo($flags = INFO_ALL)
{
$return_phpinfo = false;

// ========== PHPINFO - BEGIN
// ===== ABOUT
// Outputs information about PHP's configuration
// ===== DESCRIPTION
// Outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment (if compiled as a module), the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.
// Because every system is setup differently, phpinfo() is commonly used to check configuration settings and for available predefined variables on a given system.
// phpinfo() is also a valuable debugging tool as it contains all EGPCS (Environment, GET, POST, Cookie, Server) data.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// phpinfo(int $flags = INFO_ALL): true
// ===== CODE
$return_phpinfo = phpinfo(

$flags // int flags - The output may be customized by passing one or more of the following constants bitwise values summed together in the optional flags parameter. One can also combine the respective constants or bitwise values together with the bitwise or operator.
// phpinfo() options
// Name (constant)    (Value) - Description
// INFO_GENERAL       (1)     - The configuration line, php.ini location, build date, Web Server, System and more.
// INFO_CREDITS       (2)     - PHP Credits. See also phpcredits().
// INFO_CONFIGURATION (4)     - Current Local and Master values for PHP directives. See also ini_get().
// INFO_MODULES       (8)     - Loaded modules and their respective settings. See also get_loaded_extensions().
// INFO_ENVIRONMENT   (16)    - Environment Variable information that's also available in $_ENV.
// INFO_VARIABLES     (32)    - Shows all predefined variables from EGPCS (Environment, GET, POST, Cookie, Server).
// INFO_LICENSE       (64)    - PHP License information. See also the > license FAQ.
// INFO_ALL           (-1)    - Shows all of the above.

); // Return Values
// Always returns true.
// 
// [examples]
// Examples
// [example]
// Example #1 phpinfo() Example
// [php]
// 
// // Show all information, defaults to INFO_ALL
// phpinfo();
// 
// // Show just the module information.
// // phpinfo(8) yields identical results.
// phpinfo(INFO_MODULES);
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: In versions of PHP before 5.5, parts of the information displayed are disabled when the expose_php configuration setting is set to off. This includes the PHP and Zend logos, and the credits.
// Note: phpinfo() outputs plain text instead of HTML when using the CLI mode.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.phpinfo.php
// ========== PHPINFO - END

// SYNTAX:
// bool phpinfo(int $flags = INFO_ALL)

return $return_phpinfo; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPINFO
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPVERSION
// ============================== PUBLIC
// ============================== ABOUT
// Gets the current PHP version.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpversion() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_phpversion($extension = null)
{
$return_phpversion = false;

// ========== PHPVERSION - BEGIN
// ===== ABOUT
// Gets the current PHP version
// ===== DESCRIPTION
// Returns a string containing the version of the currently running PHP parser or extension.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// phpversion(?string $extension = null): string|false
// ===== CODE
$return_phpversion = phpversion(

$extension // string extension - An optional extension name.

); // Return Values
// Returns the current PHP version as a string. If a string argument is provided for extension parameter, phpversion() returns the version of that extension, or false if there is no version information associated or the extension isn't enabled.
// 
// Changelog
// Version - Description
// 8.0.0   - extension is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 phpversion() example
// [php]
// // prints e.g. 'Current PHP version: 4.1.1'
// echo 'Current PHP version: ' . phpversion();
// 
// // prints e.g. '2.0' or nothing if the extension isn't enabled
// echo phpversion('tidy');
// [/php]
// [/example]
// [example]
// Example #2 PHP_VERSION_ID example and usage
// [php]
// // PHP_VERSION_ID is available as of PHP 5.2.7, if our 
// // version is lower than that, then emulate it
// if (!defined('PHP_VERSION_ID')) {
//     $version = explode('.', PHP_VERSION);
// 
//     define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
// }
// 
// // PHP_VERSION_ID is defined as a number, where the higher the number 
// // is, the newer a PHP version is used. It's defined as used in the above 
// // expression:
// //
// // $version_id = $major_version * 10000 + $minor_version * 100 + $release_version;
// //
// // Now with PHP_VERSION_ID we can check for features this PHP version 
// // may have, this doesn't require to use version_compare() everytime 
// // you check if the current PHP version may not support a feature.
// //
// // For example, we may here define the PHP_VERSION_* constants thats 
// // not available in versions prior to 5.2.7
// 
// if (PHP_VERSION_ID < 50207) {
//     define('PHP_MAJOR_VERSION',   $version[0]);
//     define('PHP_MINOR_VERSION',   $version[1]);
//     define('PHP_RELEASE_VERSION', $version[2]);
// 
//     // and so on, ...
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This information is also available in the predefined constant PHP_VERSION. More versioning information is available using the PHP_VERSION_* constants.
// Note: Some extensions may define their own version number. However, most bundled extension will use the PHP version as their version number.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.phpversion.php
// ========== PHPVERSION - END

// SYNTAX:
// string|false phpversion(string $extension = null)

return $return_phpversion; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PHPVERSION
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PUTENV
// ============================== PUBLIC
// ============================== ABOUT
// Sets the value of an environment variable.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// putenv() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_putenv($assignment)
{
$return_putenv = false;

// ========== PUTENV - BEGIN
// ===== ABOUT
// Sets the value of an environment variable
// ===== DESCRIPTION
// Adds assignment to the server environment. The environment variable will only exist for the duration of the current request. At the end of the request the environment is restored to its original state.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// putenv(string $assignment): bool
// ===== CODE
$return_putenv = putenv(

$assignment // string assignment - The setting, like "FOO=BAR"

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Setting an environment variable
// [php]
// putenv("UNIQID=$uniqid");
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.putenv.php
// ========== PUTENV - END

// SYNTAX:
// bool putenv(string $assignment)

return $return_putenv; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_PUTENV
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_RESTORE_INCLUDE_PATH
// ============================== OFFLINE
// ============================== ABOUT
// Restores the value of the include_path configuration option.
// 
// Warning: This function has been DEPRECATED as of PHP 7.4.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// restore_include_path() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_restore_include_path()
{

// ========== RESTORE_INCLUDE_PATH - BEGIN
// ===== ABOUT
// Restores the value of the include_path configuration option
// Warning: This function has been DEPRECATED as of PHP 7.4.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Restores the include_path configuration option back to its original master value as set in php.ini
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7
// ===== SYNTAX
// restore_include_path(): void
// ===== CODE
restore_include_path(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 restore_include_path() example
// [php]
// 
// echo get_include_path();  // .:/usr/local/lib/php
// 
// set_include_path('/inc');
// 
// echo get_include_path();  // /inc
// 
// restore_include_path();
// 
// // Or using ini_restore()
// ini_restore('include_path');
// 
// echo get_include_path();  // .:/usr/local/lib/php
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.restore-include-path.php
// ========== RESTORE_INCLUDE_PATH - END

// SYNTAX:
// void restore_include_path()

// Return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_RESTORE_INCLUDE_PATH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SET_INCLUDE_PATH
// ============================== PUBLIC
// ============================== ABOUT
// Sets the include_path configuration option.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// set_include_path() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_set_include_path($include_path)
{
$return_set_include_path = false;

// ========== SET_INCLUDE_PATH - BEGIN
// ===== ABOUT
// Sets the include_path configuration option
// ===== DESCRIPTION
// Sets the include_path configuration option for the duration of the script.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// set_include_path(string $include_path): string|false
// ===== CODE
$return_set_include_path = set_include_path(

$include_path // string include_path - The new value for the include_path

); // Return Values
// Returns the old include_path on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 set_include_path() example
// [php]
// set_include_path('/usr/lib/pear');
// 
// // Or using ini_set()
// ini_set('include_path', '/usr/lib/pear');
// [/php]
// [/example]
// [example]
// Example #2 Adding to the include path
// Making use of the PATH_SEPARATOR constant, it is possible to extend the include path regardless of the operating system.
// In this example we add /usr/lib/pear to the end of the existing include_path.
// [php]
// $path = '/usr/lib/pear';
// set_include_path(get_include_path() . PATH_SEPARATOR . $path);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-29)
// URL: https://www.php.net/manual/en/function.set-include-path.php
// ========== SET_INCLUDE_PATH - END

// SYNTAX:
// string|false set_include_path(string $include_path)

return $return_set_include_path; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SET_INCLUDE_PATH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SET_TIME_LIMIT
// ============================== PUBLIC
// ============================== ABOUT
// Limits the maximum execution time.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// set_time_limit() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_set_time_limit($seconds)
{
$return_set_time_limit = false;

// ========== SET_TIME_LIMIT - BEGIN
// ===== ABOUT
// Limits the maximum execution time
// ===== DESCRIPTION
// Set the number of seconds a script is allowed to run. If this is reached, the script returns a fatal error. The default limit is 30 seconds or, if it exists, the max_execution_time value defined in the php.ini.
// When called, set_time_limit() restarts the timeout counter from zero. In other words, if the timeout is the default 30 seconds, and 25 seconds into script execution a call such as set_time_limit(20) is made, the script will run for a total of 45 seconds before timing out.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// set_time_limit(int $seconds): bool
// ===== CODE
$return_set_time_limit = set_time_limit(

$seconds // int seconds - The maximum execution time, in seconds. If set to zero, no time limit is imposed.

); // Return Values
// Returns true on success, or false on failure.
// 
// Notes
// Note: The set_time_limit() function and the configuration directive max_execution_time only affect the execution time of the script itself. Any time spent on activity that happens outside the execution of the script such as system calls using system(), stream operations, database queries, etc. is not included when determining the maximum time that the script has been running. This is not true on Windows where the measured time is real.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.set-time-limit.php
// ========== SET_TIME_LIMIT - END

// SYNTAX:
// bool set_time_limit(int $seconds)

return $return_set_time_limit; // bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SET_TIME_LIMIT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SYS_GET_TEMP_DIR
// ============================== OFFLINE
// ============================== ABOUT
// Returns directory path used for temporary files.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// sys_get_temp_dir() - PHP_5 >= PHP_5_2_1, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_sys_get_temp_dir()
{
$return_sys_get_temp_dir = null;

// ========== SYS_GET_TEMP_DIR - BEGIN
// ===== ABOUT
// Returns directory path used for temporary files
// ===== DESCRIPTION
// Returns the path of the directory PHP stores temporary files in by default.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_1, PHP_7, PHP_8
// ===== SYNTAX
// sys_get_temp_dir(): string
// ===== CODE
$return_sys_get_temp_dir = sys_get_temp_dir(

// This function has no parameters.

); // Return Values
// Returns the path of the temporary directory.
// 
// [examples]
// Examples
// [example]
// Example #1 sys_get_temp_dir() example
// [php]
// // Create a temporary file in the temporary 
// // files directory using sys_get_temp_dir()
// $temp_file = tempnam(sys_get_temp_dir(), 'Tux');
// 
// echo $temp_file;
// [/php]
// The above example will output something similar to:
// [result]
// C:\Windows\Temp\TuxA318.tmp
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.sys-get-temp-dir.php
// ========== SYS_GET_TEMP_DIR - END

// SYNTAX:
// string sys_get_temp_dir()

return $return_sys_get_temp_dir; // string
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_SYS_GET_TEMP_DIR
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_VERSION_COMPARE
// ============================== PUBLIC
// ============================== ABOUT
// Compares two "PHP-standardized" version number strings.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// version_compare() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_version_compare($version1, $version2, $operator = null)
{
$return_version_compare = false;

// ========== VERSION_COMPARE - BEGIN
// ===== ABOUT
// Compares two "PHP-standardized" version number strings
// ===== DESCRIPTION
// version_compare() compares two "PHP-standardized" version number strings.
// The function first replaces _, - and + with a dot . in the version strings and also inserts dots . before and after any non number so that for example '4.3.2RC1' becomes '4.3.2.RC.1'. Then it compares the parts starting from left to right. If a part contains special version strings these are handled in the following order: any string not found in this list < dev < alpha = a < beta = b < RC = rc < # < pl = p. This way not only versions with different levels like '4.1' and '4.1.2' can be compared but also any PHP specific version containing development state.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// version_compare(string $version1, string $version2, ?string $operator = null): int|bool
// ===== CODE
$return_version_compare = version_compare(

$version1, // string version1 - First version number.

$version2, // string version2 - Second version number.

$operator // string operator - An optional operator. The possible operators are: <, lt, <=, le, >, gt, >=, ge, ==, =, eq, !=, <>, ne respectively.
// This parameter is case-sensitive, values should be lowercase.

); // Return Values
// By default, version_compare() returns -1 if the first version is lower than the second, 0 if they are equal, and 1 if the second is lower.
// When using the optional operator argument, the function will return true if the relationship is the one specified by the operator, false otherwise.
// 
// [examples]
// Examples
// [example]
// The examples below use the PHP_VERSION constant, because it contains the value of the PHP version that is executing the code.
// Example #1 version_compare() examples
// [php]
// if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
//     echo 'I am at least PHP version 7.0.0, my version: ' . PHP_VERSION . "\n";
// }
// 
// if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
//     echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
// }
// 
// if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
//     echo 'I am at least PHP version 5.0.0, my version: ' . PHP_VERSION . "\n";
// }
// 
// if (version_compare(PHP_VERSION, '5.0.0', '<')) {
//     echo 'I am still PHP 4, my version: ' . PHP_VERSION . "\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The PHP_VERSION constant holds current PHP version.
// Note: Note that pre-release versions, such as 5.3.0-dev, are considered lower than their final release counterparts (like 5.3.0).
// Note: Special version strings such as alpha and beta are case sensitive. Version strings from arbitrary sources that do not adhere to the PHP standard may need to be lowercased via strtolower() before calling version_compare().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.version-compare.php
// ========== VERSION_COMPARE - END

// SYNTAX:
// int|bool version_compare(string $version1, string $version2, string $operator = null)

return $return_version_compare; // int|bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_VERSION_COMPARE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ZEND_THREAD_ID
// ============================== OFFLINE
// ============================== ABOUT
// Returns a unique identifier for the current thread.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// zend_thread_id() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpoptionsinfo_zend_thread_id()
{
$return_zend_thread_id = 0;

// ========== ZEND_THREAD_ID - BEGIN
// ===== ABOUT
// Returns a unique identifier for the current thread
// ===== DESCRIPTION
// This function returns a unique identifier for the current thread.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// zend_thread_id(): int
// ===== CODE
$return_zend_thread_id = zend_thread_id(

// This function has no parameters.

); // Return Values
// Returns the thread id as an integer.
// 
// [examples]
// Examples
// [example]
// Example #1 zend_thread_id() example
// [php]
// $thread_id = zend_thread_id();
// 
// echo 'Current thread id is: ' . $thread_id;
// [/php]
// The above example will output something similar to:
// [result]
// Current thread id is: 7864
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is only available if PHP has been built with ZTS (Zend Thread Safety) support and debug mode (--enable-debug).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.zend-thread-id.php
// ========== ZEND_THREAD_ID - END

// SYNTAX:
// int zend_thread_id()

return $return_zend_thread_id; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ZEND_THREAD_ID
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ZEND_VERSION
// ============================== PUBLIC
// ============================== ABOUT
// Gets the version of the current Zend engine.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// zend_version() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpoptionsinfo_zend_version()
{
$return_zend_version = null;

// ========== ZEND_VERSION - BEGIN
// ===== ABOUT
// Gets the version of the current Zend engine
// ===== DESCRIPTION
// Returns a string containing the version of the currently running Zend Engine.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// zend_version(): string
// ===== CODE
$return_zend_version = zend_version(

// This function has no parameters.

); // Return Values
// Returns the Zend Engine version number, as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 zend_version() example
// [php]
// echo "Zend engine version: " . zend_version();
// [/php]
// The above example will output something similar to:
// [result]
// Zend engine version: 2.2.0
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-30)
// URL: https://www.php.net/manual/en/function.zend-version.php
// ========== ZEND_VERSION - END

// SYNTAX:
// string zend_version()

return $return_zend_version; // string
}
// ============================== END
// PHP_BEHAVIOUR_PHPOPTIONSINFO_ZEND_VERSION
// ==============================


// ============================== END
//  PHP_BEHAVIOUR_PHPOPTIONSINFO  
// ==============================
?>