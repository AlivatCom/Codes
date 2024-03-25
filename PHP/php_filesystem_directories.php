<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_FILESYSTEM_DIRECTORIES - BEGIN
// PHP_FILESYSTEM_DIRECTORIES_CHDIR - bool php_filesystem_directories_chdir(string $directory)
// PHP_FILESYSTEM_DIRECTORIES_CHROOT - bool php_filesystem_directories_chroot(string $directory)
// PHP_FILESYSTEM_DIRECTORIES_CLOSEDIR - void php_filesystem_directories_closedir(resource $dir_handle = null)
// PHP_FILESYSTEM_DIRECTORIES_DIR - Directory|false php_filesystem_directories_dir(string $directory, resource $context = null)
// PHP_FILESYSTEM_DIRECTORIES_GETCWD - string|false php_filesystem_directories_getcwd()
// PHP_FILESYSTEM_DIRECTORIES_OPENDIR - resource|false php_filesystem_directories_opendir(string $directory, resource $context = null)
// PHP_FILESYSTEM_DIRECTORIES_READDIR - string|false php_filesystem_directories_readdir(resource $dir_handle = null)
// PHP_FILESYSTEM_DIRECTORIES_REWINDDIR - void php_filesystem_directories_rewinddir(resource $dir_handle = null)
// OFFLINE | PHP_FILESYSTEM_DIRECTORIES_SCANDIR - array|false php_filesystem_directories_scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, resource $context = null)
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY - void|Directory|string|false _CLOSE, _READ, _REWIND
// PHP_FILESYSTEM_DIRECTORIES - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (9)
// chdir() - PHP_4, PHP_5, PHP_7, PHP_8
// chroot() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// closedir() - PHP_4, PHP_5, PHP_7, PHP_8
// dir() - PHP_4, PHP_5, PHP_7, PHP_8
// getcwd() - PHP_4, PHP_5, PHP_7, PHP_8
// opendir() - PHP_4, PHP_5, PHP_7, PHP_8
// readdir() - PHP_4, PHP_5, PHP_7, PHP_8
// rewinddir() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | scandir() - PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (1)
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY - PHP_4 - PHP_8
// ============================== USING DATA_TYPES (8)
// bool
// string
// void
// resource
// Directory - PHP_4, PHP_5, PHP_7, PHP_8
// false
// array
// int
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_FILESYSTEM_DIRECTORIES   
// ============================== ABOUT
// PHP Manual / Function Reference / File System Related Extensions / Directories
// URL: https://www.php.net/manual/en/book.dir.php
// ============================== DESCRIPTION
// DIRECTORIES
// 
// DIRECTORIES - BEGIN
// Directories
// 
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// THE_DIRECTORY_CLASS
// DIRECTORY_FUNCTIONS
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
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dir.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dir.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dir.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dir.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dir.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// DIRECTORY_SEPARATOR (string)  -
// PATH_SEPARATOR (string)       - Semicolon on Windows, colon otherwise.
// SCANDIR_SORT_ASCENDING (int)  -
// SCANDIR_SORT_DESCENDING (int) -
// SCANDIR_SORT_NONE (int)       -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dir.constants.php
// PREDEFINED_CONSTANTS - END
// 
// THE_DIRECTORY_CLASS - BEGIN
// The Directory class
// 
// PHP_4, PHP_5, PHP_7, PHP_8
// 
// Introduction
// Instances of Directory are created by calling the dir() function, not by the new operator.
// 
// Class synopsis
// [code]
// class Directory {
// 
//    /* Properties */
//    public readonly string $path;
//    public readonly resource $handle;
// 
//    /* Methods */
//    public close(): void
//    public read(): string|false
//    public rewind(): void
// }
// [/code]
// 
// Properties
// path   - The directory that was opened.
// handle - Can be used with other directory functions such as readdir(), rewinddir() and closedir().
// 
// Changelog
// Version - Description
// 8.1.0   - The path and handle properties are now readonly.
// 
// Table of Contents
// * Directory::close  - Close directory handle
// * Directory::read   - Read entry from directory handle
// * Directory::rewind - Rewind directory handle
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/class.directory.php
// THE_DIRECTORY_CLASS - END
// 
// DIRECTORY_FUNCTIONS - BEGIN
// Directory Functions
// 
// See Also
// For related functions such as dirname(), is_dir(), mkdir(), and rmdir(), see the Filesystem section.
// 
// Table of Contents
// * chdir     - Change directory
// * chroot    - Change the root directory
// * closedir  - Close directory handle
// * dir       - Return an instance of the Directory class
// * getcwd    - Gets the current working directory
// * opendir   - Open directory handle
// * readdir   - Read entry from directory handle
// * rewinddir - Rewind directory handle
// * scandir   - List files and directories inside the specified path
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/ref.dir.php
// DIRECTORY_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/book.dir.php
// DIRECTORIES - END
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_CHDIR
// ============================== PUBLIC
// ============================== ABOUT
// Change directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// chdir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_chdir($directory)
{
$return_chdir = false;

// ========== CHDIR - BEGIN
// ===== ABOUT
// Change directory
// ===== DESCRIPTION
// Changes PHP's current directory to directory.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// chdir(string $directory): bool
// ===== CODE
$return_chdir = chdir(

$directory // string directory - The new current directory

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws an error of level E_WARNING on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 chdir() example
// [php]
// 
// // current directory
// echo getcwd() . "\n";
// 
// chdir('public_html');
// 
// // current directory
// echo getcwd() . "\n";
// 
// [/php]
// The above example will output something similar to:
// [result]
// /home/vincent
// /home/vincent/public_html
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Caution: If the PHP interpreter has been built with ZTS (Zend Thread Safety) enabled, any changes to the current directory made through chdir() will be invisible to the operating system. All built-in PHP functions will still respect the change in current directory; but external library functions called using FFI will not. You can tell whether your copy of PHP was built with ZTS enabled using php -i or the built-in constant PHP_ZTS.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.chdir.php
// ========== CHDIR - END

// SYNTAX:
// bool chdir(string $directory)

return $return_chdir; // bool
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_CHDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_CHROOT
// ============================== PUBLIC
// ============================== ABOUT
// Change the root directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// chroot() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_chroot($directory)
{
$return_chroot = false;

// ========== CHROOT - BEGIN
// ===== ABOUT
// Change the root directory
// ===== DESCRIPTION
// Changes the root directory of the current process to directory, and changes the current working directory to "/".
// This function is only available to GNU and BSD systems, and only when using the CLI, CGI or Embed SAPI. Also, this function requires root privileges.
// Calling this function does not change the values of the __DIR__ and __FILE__ magic constants.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// chroot(string $directory): bool
// ===== CODE
$return_chroot = chroot(

$directory // string directory - The path to change the root directory to.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 chroot() example
// [php]
// chroot("/path/to/your/chroot/");
// echo getcwd();
// [/php]
// The above example will output:
// [result]
// /
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is not implemented on Windows platforms.
// Note: This function is not available in PHP interpreters built with ZTS (Zend Thread Safety) enabled. To check whether your copy of PHP was built with ZTS enabled, use php -i or test the built-in constant PHP_ZTS.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.chroot.php
// ========== CHROOT - END

// SYNTAX:
// bool chroot(string $directory)

return $return_chroot; // bool
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_CHROOT
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_CLOSEDIR
// ============================== PUBLIC
// ============================== ABOUT
// Close directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// closedir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_closedir($dir_handle = null)
{

// ========== CLOSEDIR - BEGIN
// ===== ABOUT
// Close directory handle
// ===== DESCRIPTION
// Closes the directory stream indicated by dir_handle. The stream must have previously been opened by opendir().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// closedir(?resource $dir_handle = null): void
// ===== CODE
closedir(

$dir_handle // resource dir_handle - The directory handle resource previously opened with opendir(). If the directory handle is not specified, the last link opened by opendir() is assumed.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 closedir() example
// [php]
// $dir = "/etc/php5/";
// 
// // Open a known directory, read directory into variable and then close
// if (is_dir($dir)) {
//     if ($dh = opendir($dir)) {
//         $directory = readdir($dh);
//         closedir($dh);
//     }
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.closedir.php
// ========== CLOSEDIR - END

// SYNTAX:
// void closedir(resource $dir_handle = null)

// Return: void
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_CLOSEDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_DIR
// ============================== PUBLIC
// ============================== ABOUT
// Return an instance of the Directory class.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_dir($directory, $context = null)
{
$return_dir = false;

// ========== DIR - BEGIN
// ===== ABOUT
// Return an instance of the Directory class
// ===== DESCRIPTION
// A pseudo-object-oriented mechanism for reading a directory. The given directory is opened.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dir(string $directory, ?resource $context = null): Directory|false
// ===== CODE
$return_dir = dir(

$directory, // string directory - Directory to open

$context // resource context - A context stream resource.

); // Return Values
// Returns an instance of Directory, or false in case of error.
// 
// Changelog
// Version - Description
// 8.0.0   - context is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 dir() example
// Please note the fashion in which Directory::read()'s return value is checked in the example below. We are explicitly testing whether the return value is identical to (equal to and of the same type as - see Comparison Operators for more information) false since otherwise, any directory entry whose name evaluates to false will stop the loop.
// [php]
// $d = dir("/etc/php5");
// echo "Handle: " . $d->handle . "\n";
// echo "Path: " . $d->path . "\n";
// while (false !== ($entry = $d->read())) {
//    echo $entry."\n";
// }
// $d->close();
// [/php]
// The above example will output something similar to:
// [result]
// Handle: Resource id #2
// Path: /etc/php5
// .
// ..
// apache
// cgi
// cli
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The order in which directory entries are returned by the read method is system-dependent.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.dir.php
// ========== DIR - END

// SYNTAX:
// Directory|false dir(string $directory, resource $context = null)

return $return_dir; // Directory|false
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_DIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_GETCWD
// ============================== PUBLIC
// ============================== ABOUT
// Gets the current working directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getcwd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_getcwd()
{
$return_getcwd = false;

// ========== GETCWD - BEGIN
// ===== ABOUT
// Gets the current working directory
// ===== DESCRIPTION
// Gets the current working directory.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getcwd(): string|false
// ===== CODE
$return_getcwd = getcwd(

// This function has no parameters.

); // Return Values
// Returns the current working directory on success, or false on failure.
// On some Unix variants, getcwd() will return false if any one of the parent directories does not have the readable or search mode set, even if the current directory does. See chmod() for more information on modes and permissions.
// 
// [examples]
// Examples
// [example]
// Example #1 getcwd() example
// [php]
// 
// // current directory
// echo getcwd() . "\n";
// 
// chdir('cvs');
// 
// // current directory
// echo getcwd() . "\n";
// 
// [/php]
// The above example will output something similar to:
// [result]
// /home/didou
// /home/didou/cvs
// [/result]
// [/example]
// [/examples]
// 
// Caution: If the PHP interpreter has been built with ZTS (Zend Thread Safety) enabled, the current working directory returned by getcwd() may be different from that returned by operating system interfaces. External libraries (invoked through FFI) which depend on the current working directory will be affected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.getcwd.php
// ========== GETCWD - END

// SYNTAX:
// string|false getcwd()

return $return_getcwd; // string|false
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_GETCWD
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_OPENDIR
// ============================== PUBLIC
// ============================== ABOUT
// Open directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// opendir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_opendir($directory, $context = null)
{
$return_opendir = false;

// ========== OPENDIR - BEGIN
// ===== ABOUT
// Open directory handle
// ===== DESCRIPTION
// Opens up a directory handle to be used in subsequent closedir(), readdir(), and rewinddir() calls.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// opendir(string $directory, ?resource $context = null): resource|false
// ===== CODE
$return_opendir = opendir(

$directory, // string directory - The directory path that is to be opened

$context // resource context - For a description of the context parameter, refer to the streams section of the manual.

); // Return Values
// Returns a directory handle resource on success, or false on failure
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// This may happen if directory is not a valid directory, the directory can not be opened due to permission restrictions, or due to filesystem errors.
// 
// Changelog
// Version - Description
// 8.0.0   - context is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 opendir() example
// [php]
// $dir = "/etc/php5/";
// 
// // Open a known directory, and proceed to read its contents
// if (is_dir($dir)) {
//     if ($dh = opendir($dir)) {
//         while (($file = readdir($dh)) !== false) {
//             echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
//         }
//         closedir($dh);
//     }
// }
// [/php]
// The above example will output something similar to:
// [result]
// filename: . : filetype: dir
// filename: .. : filetype: dir
// filename: apache : filetype: dir
// filename: cgi : filetype: dir
// filename: cli : filetype: dir
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.opendir.php
// ========== OPENDIR - END

// SYNTAX:
// resource|false opendir(string $directory, resource $context = null)

return $return_opendir; // resource|false
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_OPENDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_READDIR
// ============================== PUBLIC
// ============================== ABOUT
// Read entry from directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// readdir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_readdir($dir_handle = null)
{
$return_readdir = false;

// ========== READDIR - BEGIN
// ===== ABOUT
// Read entry from directory handle
// ===== DESCRIPTION
// Returns the name of the next entry in the directory. The entries are returned in the order in which they are stored by the filesystem.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// readdir(?resource $dir_handle = null): string|false
// ===== CODE
$return_readdir = readdir(

$dir_handle // resource dir_handle - The directory handle resource previously opened with opendir(). If the directory handle is not specified, the last link opened by opendir() is assumed.

); // Return Values
// Returns the entry name on success or false on failure.
// Warning: This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.
// 
// Changelog
// Version - Description
// 8.0.0   - dir_handle is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 List all entries in a directory
// Please note the fashion in which readdir()'s return value is checked in the examples below. We are explicitly testing whether the return value is identical to (equal to and of the same type as--see Comparison Operators for more information) false since otherwise, any directory entry whose name evaluates to false will stop the loop (e.g. a directory named "0").
// [php]
// 
// if ($handle = opendir('/path/to/files')) {
//     echo "Directory handle: $handle\n";
//     echo "Entries:\n";
// 
//     // This is the correct way to loop over the directory.
//     while (false !== ($entry = readdir($handle))) {
//         echo "$entry\n";
//     }
// 
//     // This is the WRONG way to loop over the directory.
//     while ($entry = readdir($handle)) {
//         echo "$entry\n";
//     }
// 
//     closedir($handle);
// }
// [/php]
// [/example]
// [example]
// Example #2 List all entries in the current directory and strip out . and ..
// [php]
// if ($handle = opendir('.')) {
//     while (false !== ($entry = readdir($handle))) {
//         if ($entry != "." && $entry != "..") {
//             echo "$entry\n";
//         }
//     }
//     closedir($handle);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.readdir.php
// ========== READDIR - END

// SYNTAX:
// string|false readdir(resource $dir_handle = null)

return $return_readdir; // string|false
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_READDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_REWINDDIR
// ============================== PUBLIC
// ============================== ABOUT
// Rewind directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rewinddir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_rewinddir($dir_handle = null)
{

// ========== REWINDDIR - BEGIN
// ===== ABOUT
// Rewind directory handle
// ===== DESCRIPTION
// Resets the directory stream indicated by dir_handle to the beginning of the directory.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rewinddir(?resource $dir_handle = null): void
// ===== CODE
rewinddir(

$dir_handle // resource dir_handle - The directory handle resource previously opened with opendir(). If the directory handle is not specified, the last link opened by opendir() is assumed.

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - dir_handle is now nullable.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.rewinddir.php
// ========== REWINDDIR - END

// SYNTAX:
// void rewinddir(resource $dir_handle = null)

// Return: void
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_REWINDDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_SCANDIR
// ============================== OFFLINE
// ============================== ABOUT
// List files and directories inside the specified path.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// scandir() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SCANDIR_SORT_ASCENDING - scandir()
// ============================== CODE
/*
function php_filesystem_directories_scandir($directory, $sorting_order = SCANDIR_SORT_ASCENDING, $context = null)
{
$return_scandir = false;

// ========== SCANDIR - BEGIN
// ===== ABOUT
// List files and directories inside the specified path
// ===== DESCRIPTION
// Returns an array of files and directories from the directory.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, ?resource $context = null): array|false
// ===== CODE
$return_scandir = scandir(

$directory, // string directory - The directory that will be scanned.

$sorting_order, // int sorting_order - By default, the sorted order is alphabetical in ascending order. If the optional sorting_order is set to SCANDIR_SORT_DESCENDING, then the sort order is alphabetical in descending order. If it is set to SCANDIR_SORT_NONE then the result is unsorted.

$context // resource context - For a description of the context parameter, refer to the streams section of the manual.

); // Return Values
// Returns an array of filenames on success, or false on failure. If directory is not a directory, then boolean false is returned, and an error of level E_WARNING is generated.
// 
// Changelog
// Version - Description
// 8.0.0   - context is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A simple scandir() example
// [php]
// $dir    = '/tmp';
// $files1 = scandir($dir);
// $files2 = scandir($dir, SCANDIR_SORT_DESCENDING);
// 
// print_r($files1);
// print_r($files2);
// [/php]
The above example will output something similar to:
// [result]
Array
(
    [0] => .
    [1] => ..
    [2] => bar.php
    [3] => foo.txt
    [4] => somedir
)
Array
(
    [0] => somedir
    [1] => foo.txt
    [2] => bar.php
    [3] => ..
    [4] => .
)
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Tip: A URL can be used as a filename with this function if the fopen wrappers have been enabled. See fopen() for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.scandir.php
// ========== SCANDIR - END

// SYNTAX:
// array|false scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, resource $context = null)

return $return_scandir; // array|false
}
*/
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_SCANDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY
// ============================== PUBLIC
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_CLOSE - void php_filesystem_directories_directory_close(Directory $directory)
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_READ - string|false php_filesystem_directories_directory_read(Directory $directory)
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_REWIND - void php_filesystem_directories_directory_rewind(Directory $directory)
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (3)
// Directory::close() - PHP_4, PHP_5, PHP_7, PHP_8
// Directory::read() - PHP_4, PHP_5, PHP_7, PHP_8
// Directory::rewind() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (4)
// void
// Directory - PHP_4, PHP_5, PHP_7, PHP_8
// string
// false
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// Directory::close() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_directory_close($directory)
{

// ========== DIRECTORY_CLOSE - BEGIN
// ===== ABOUT
// Close directory handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public Directory::close(): void
// ===== CODE
$directory->close(

); // Return
// void
// 
// Changelog
// Version - Description
// 8.0.0   - No parameter is accepted. Previously, a directory handle could be passed as argument.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/directory.close.php
// ========== DIRECTORY_CLOSE - END

// SYNTAX:
// void Directory::close()

// Return: void
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_CLOSE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_READ
// ============================== PUBLIC
// ============================== ABOUT
// Read entry from directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// Directory::read() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_directory_read($directory)
{
$return_directory_read = false;

// ========== DIRECTORY_READ - BEGIN
// ===== ABOUT
// Read entry from directory handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public Directory::read(): string|false
// ===== CODE
$return_directory_read = $directory->read(

); // Return
// string|false
// 
// Changelog
// Version - Description
// 8.0.0   - No parameter is accepted. Previously, a directory handle could be passed as argument.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/directory.read.php
// ========== DIRECTORY_READ - END

// SYNTAX:
// string|false Directory::read()

return $return_directory_read; // string|false
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_READ
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_REWIND
// ============================== PUBLIC
// ============================== ABOUT
// Rewind directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// Directory::rewind() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_directories_directory_rewind($directory)
{

// ========== DIRECTORY_REWIND - BEGIN
// ===== ABOUT
// Rewind directory handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public Directory::rewind(): void
// ===== CODE
$directory->rewind(

); // Return
// void
// 
// Changelog
// Version - Description
// 8.0.0   - No parameter is accepted. Previously, a directory handle could be passed as argument.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/directory.rewind.php
// ========== DIRECTORY_REWIND - END

// SYNTAX:
// void Directory::rewind()

// Return: void
}
// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY_REWIND
// ==============================


// ============================== END
// PHP_FILESYSTEM_DIRECTORIES_DIRECTORY
// ==============================


// ============================== END
//   PHP_FILESYSTEM_DIRECTORIES   
// ==============================
?>