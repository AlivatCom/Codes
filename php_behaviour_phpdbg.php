<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_PHPDBG - BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_FILE - void php_behaviour_phpdbg_phpdbg_break_file(string $file, int $line)
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_FUNCTION - void php_behaviour_phpdbg_phpdbg_break_function(string $function)
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_METHOD - void php_behaviour_phpdbg_phpdbg_break_method(string $class, string $method)
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_NEXT - void php_behaviour_phpdbg_phpdbg_break_next()
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_CLEAR - void php_behaviour_phpdbg_phpdbg_clear()
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_COLOR - void php_behaviour_phpdbg_phpdbg_color(int $element, string $color)
// OFFLINE | PHP_BEHAVIOUR_PHPDBG_PHPDBG_END_OPLOG - array php_behaviour_phpdbg_phpdbg_end_oplog(array $options = array())
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_EXEC - string|bool php_behaviour_phpdbg_phpdbg_exec(string $context)
// OFFLINE | PHP_BEHAVIOUR_PHPDBG_PHPDBG_GET_EXECUTABLE - array php_behaviour_phpdbg_phpdbg_get_executable(array $options = array())
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_PROMPT - void php_behaviour_phpdbg_phpdbg_prompt(string $string)
// OFFLINE | PHP_BEHAVIOUR_PHPDBG_PHPDBG_START_OPLOG - void php_behaviour_phpdbg_phpdbg_start_oplog()
// PHP_BEHAVIOUR_PHPDBG - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== INSTALLATION
// UNKNOWN (Implemented as a SAPI module, phpdbg can exert complete control over the environment without impacting the functionality or performance of your code.)
// ============================== USING FUNCTIONS (11)
// phpdbg_break_file() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// phpdbg_break_function() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// phpdbg_break_method() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// phpdbg_break_next() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// phpdbg_clear() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// phpdbg_color() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | phpdbg_end_oplog() - PHP_7, PHP_8
// phpdbg_exec() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | phpdbg_get_executable() - PHP_7, PHP_8
// phpdbg_prompt() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | phpdbg_start_oplog() - PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (5)
// void
// string
// int
// array
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_BEHAVIOUR_PHPDBG      
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / phpdbg - Interactive PHP Debugger
// URL: https://www.php.net/manual/en/book.phpdbg.php
// ============================== DESCRIPTION
// INTERACTIVE_PHP_DEBUGGER
// 
// INTERACTIVE_PHP_DEBUGGER - BEGIN
// Interactive PHP Debugger
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// PHPDBG_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Implemented as a SAPI module, phpdbg can exert complete control over the environment without impacting the functionality or performance of your code.
// phpdbg aims to be a lightweight, powerful, easy to use debugging platform for PHP. It offers the following features:
// * Step-Through Debugging
// * Flexible Breakpoints (Class Method, Function, File:Line, Address, Opcode)
// * Easy Access to PHP with built-in eval()
// * Userland API
// * SAPI Agnostic - Easily Integrated
// * PHP Configuration File Support
// * JIT Super Globals - Set Your Own !!
// * Optional readline Support - Comfortable Terminal Operation
// * Easy Operation - See Help :)
// 
// Command line options
// Option | Example Argument  | Description
// -c     | -c/my/php.ini     | Set php.ini file to load
// -d     | -dmemory_limit=4G | Set a php.ini directive
// -n     |                   | Disable default php.ini
// -q     |                   | Suppress welcome banner
// -v     |                   | Enable oplog output
// -b     |                   | Disable color
// -i     | -imy.init         | Set .phpdbginit file
// -I     |                   | Ignore default .phpdbginit
// -O     | -Omy.oplog        | Set oplog output file
// -r     |                   | Run execution context
// -rr    |                   | Run execution context and quit after execution (not respecting breakpoints)
// -e     |                   | Generate extended information for debugger/profiler
// -E     |                   | Enable step through eval, careful!
// -s     | -s=, -s=foo       | Read code to execute from stdin with an optional delimiter
// -S     | -Scli             | Override SAPI name, careful!
//        |                   | 
// -l     | -l4000            | Setup remote console ports
// -a     | -a192.168.0.3     | Setup remote console bind address
// -x     |                   | Enable xml output (instead of normal text output)
// -p     | -p, -p=func, -p*  | Output opcodes and quit
// -h     |                   | Print the help overview
// -V     |                   | Print version number
// --     | -- arg1 arg2      | Use to delimit phpdbg arguments and php $argv; append any $argv argument after it
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/intro.phpdbg.php
// INTRODUCTION - END
// 
// INSTALLING_CONFIGURING - BEGIN
// Installing/Configuring
// 
// RUNTIME_CONFIGURATION
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// phpdbg Configure Options
// Name        | Default | Changeable | Changelog
// phpdbg.eol  | 2       | INI_ALL    | Removed as of PHP 8.1.0
// phpdbg.path |         | 6          | Removed as of PHP 8.1.0
// 
// Here's a short explanation of the configuration directives.
// phpdbg.eol mixed - The kind of line ending to use for output. For setting the value, one of the string aliases must be used.
// int Value | string Alias
// 0         | CRLF, crlf, DOS, dos
// 1         | LF, lf, UNIX, unix
// 2         | CR, cr, MAC, mac
// phpdbg.path string
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/phpdbg.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/phpdbg.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// PHPDBG_VERSION (string)   -
// PHPDBG_FILE (int)         - Removed as of PHP 7.3.0.
// PHPDBG_METHOD (int)       - Removed as of PHP 7.3.0.
// PHPDBG_LINENO (int)       - Removed as of PHP 7.3.0.
// PHPDBG_FUNC (int)         - Removed as of PHP 7.3.0.
// PHPDBG_COLOR_PROMPT (int) -
// PHPDBG_COLOR_NOTICE (int) -
// PHPDBG_COLOR_ERROR (int)  -
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/phpdbg.constants.php
// PREDEFINED_CONSTANTS - END
// 
// PHPDBG_FUNCTIONS - BEGIN
// phpdbg Functions
// 
// Table of Contents
// * phpdbg_break_file     - Inserts a breakpoint at a line in a file
// * phpdbg_break_function - Inserts a breakpoint at entry to a function
// * phpdbg_break_method   - Inserts a breakpoint at entry to a method
// * phpdbg_break_next     - Inserts a breakpoint at the next opcode
// * phpdbg_clear          - Clears all breakpoints
// * phpdbg_color          - Sets the color of certain elements
// * phpdbg_end_oplog      - Description
// * phpdbg_exec           - Attempts to set the execution context
// * phpdbg_get_executable - Description
// * phpdbg_prompt         - Sets the command prompt
// * phpdbg_start_oplog    - Description
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/ref.phpdbg.php
// PHPDBG_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/book.phpdbg.php
// INTERACTIVE_PHP_DEBUGGER - END
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Inserts a breakpoint at a line in a file.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_break_file() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_break_file($file, $line)
{

// ========== PHPDBG_BREAK_FILE - BEGIN
// ===== ABOUT
// Inserts a breakpoint at a line in a file
// ===== DESCRIPTION
// Insert a breakpoint at the given line in the given file.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_break_file(string $file, int $line): void
// ===== CODE
phpdbg_break_file(

$file, // string file - The name of the file.

$line // int line - The line number.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-break-file.php
// ========== PHPDBG_BREAK_FILE - END

// SYNTAX:
// void phpdbg_break_file(string $file, int $line)

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_FILE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_FUNCTION
// ============================== PUBLIC
// ============================== ABOUT
// Inserts a breakpoint at entry to a function.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_break_function() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_break_function($function)
{

// ========== PHPDBG_BREAK_FUNCTION - BEGIN
// ===== ABOUT
// Inserts a breakpoint at entry to a function
// ===== DESCRIPTION
// Insert a breakpoint at the entry to the given function.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_break_function(string $function): void
// ===== CODE
phpdbg_break_function(

$function // string function - The name of the function.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-break-function.php
// ========== PHPDBG_BREAK_FUNCTION - END

// SYNTAX:
// void phpdbg_break_function(string $function)

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_FUNCTION
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_METHOD
// ============================== PUBLIC
// ============================== ABOUT
// Inserts a breakpoint at entry to a method.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_break_method() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_break_method($class, $method)
{

// ========== PHPDBG_BREAK_METHOD - BEGIN
// ===== ABOUT
// Inserts a breakpoint at entry to a method
// ===== DESCRIPTION
// Insert a breakpoint at the entry to the given method of the given class.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_break_method(string $class, string $method): void
// ===== CODE
phpdbg_break_method(

$class, // string class - The name of the class.

$method // string method - The name of the method.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-break-method.php
// ========== PHPDBG_BREAK_METHOD - END

// SYNTAX:
// void phpdbg_break_method(string $class, string $method)

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_METHOD
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_NEXT
// ============================== PUBLIC
// ============================== ABOUT
// Inserts a breakpoint at the next opcode.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_break_next() - PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_break_next()
{

// ========== PHPDBG_BREAK_NEXT - BEGIN
// ===== ABOUT
// Inserts a breakpoint at the next opcode
// ===== DESCRIPTION
// Insert a breakpoint at the next opcode.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_3, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_break_next(): void
// ===== CODE
phpdbg_break_next(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-break-next.php
// ========== PHPDBG_BREAK_NEXT - END

// SYNTAX:
// void phpdbg_break_next()

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_BREAK_NEXT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_CLEAR
// ============================== PUBLIC
// ============================== ABOUT
// Clears all breakpoints.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_clear() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_clear()
{

// ========== PHPDBG_CLEAR - BEGIN
// ===== ABOUT
// Clears all breakpoints
// ===== DESCRIPTION
// Clear all breakpoints that have been set, either via one of the phpdbg_break_*() functions or interactively in the console.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_clear(): void
// ===== CODE
phpdbg_clear(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-clear.php
// ========== PHPDBG_CLEAR - END

// SYNTAX:
// void phpdbg_clear()

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_CLEAR
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_COLOR
// ============================== PUBLIC
// ============================== ABOUT
// Sets the color of certain elements.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_color() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_color($element, $color)
{

// ========== PHPDBG_COLOR - BEGIN
// ===== ABOUT
// Sets the color of certain elements
// ===== DESCRIPTION
// Set the color of the given element.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_color(int $element, string $color): void
// ===== CODE
phpdbg_color(

$element, // int element - One of the PHPDBG_COLOR_* constants.

$color // string color - The name of the color. One of white, red, green, yellow, blue, purple, cyan or black, optionally with either a trailing -bold or -underline, for instance, white-bold or green-underline.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-color.php
// ========== PHPDBG_COLOR - END

// SYNTAX:
// void phpdbg_color(int $element, string $color)

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_COLOR
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_END_OPLOG
// ============================== OFFLINE
// ============================== ABOUT
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_end_oplog() - PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpdbg_phpdbg_end_oplog($options = array())
{
$return_phpdbg_end_oplog = null;

// ========== PHPDBG_END_OPLOG - BEGIN
// ===== ABOUT
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_end_oplog(array $options = []): ?array
// ===== CODE
$return_phpdbg_end_oplog = phpdbg_end_oplog(

$options // array options

); // Return Values
// array
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-end-oplog.php
// ========== PHPDBG_END_OPLOG - END

// SYNTAX:
// array phpdbg_end_oplog(array $options = array())

return $return_phpdbg_end_oplog; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_END_OPLOG
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_EXEC
// ============================== PUBLIC
// ============================== ABOUT
// Attempts to set the execution context.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_exec() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_exec($context)
{
$return_phpdbg_exec = null;

// ========== PHPDBG_EXEC - BEGIN
// ===== ABOUT
// Attempts to set the execution context
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_exec(string $context): string|bool
// ===== CODE
$return_phpdbg_exec = phpdbg_exec(

$context // string $context

); // Return Values
// If the execution context was set previously it is returned. If the execution context was not set previously true is returned. If the request to set the context fails, false is returned, and an E_WARNING raised.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-exec.php
// ========== PHPDBG_EXEC - END

// SYNTAX:
// string|bool phpdbg_exec(string $context)

return $return_phpdbg_exec; // string|bool
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_EXEC
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_GET_EXECUTABLE
// ============================== OFFLINE
// ============================== ABOUT
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_get_executable() - PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpdbg_phpdbg_get_executable($options = array())
{
$return_phpdbg_get_executable = null;

// ========== PHPDBG_GET_EXECUTABLE - BEGIN
// ===== ABOUT
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_get_executable(array $options = []): array
// ===== CODE
$return_phpdbg_get_executable = phpdbg_get_executable(

$options // array $options

); // Return Values
// array
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-get-executable.php
// ========== PHPDBG_GET_EXECUTABLE - END

// SYNTAX:
// array phpdbg_get_executable(array $options = array())

return $return_phpdbg_get_executable; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_GET_EXECUTABLE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_PROMPT
// ============================== PUBLIC
// ============================== ABOUT
// Sets the command prompt.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_prompt() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_phpdbg_phpdbg_prompt($string)
{

// ========== PHPDBG_PROMPT - BEGIN
// ===== ABOUT
// Sets the command prompt
// ===== DESCRIPTION
// Set the command prompt to the given string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_prompt(string $string): void
// ===== CODE
phpdbg_prompt(

$string // string string - The string to use as command prompt.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-prompt.php
// ========== PHPDBG_PROMPT - END

// SYNTAX:
// void phpdbg_prompt(string $string)

// return: void
}
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_PROMPT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_START_OPLOG
// ============================== OFFLINE
// ============================== ABOUT
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// phpdbg_start_oplog() - PHP_7, PHP_8
// ============================== CODE
/*
function php_behaviour_phpdbg_phpdbg_start_oplog()
{

// ========== PHPDBG_START_OPLOG - BEGIN
// ===== ABOUT
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// phpdbg_start_oplog(): void
// ===== CODE
phpdbg_start_oplog(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-09)
// URL: https://www.php.net/manual/en/function.phpdbg-start-oplog.php
// ========== PHPDBG_START_OPLOG - END

// SYNTAX:
// void phpdbg_start_oplog()

// return: void
}
*/
// ============================== END
// PHP_BEHAVIOUR_PHPDBG_PHPDBG_START_OPLOG
// ==============================


// ============================== END
//      PHP_BEHAVIOUR_PHPDBG      
// ==============================
?>