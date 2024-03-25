<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_FILESYSTEM_FILEINFO - BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_BUFFER - string|false php_filesystem_fileinfo_finfo_buffer(finfo $finfo, string $string, int $flags = FILEINFO_NONE, resource $context = null)
// PHP_FILESYSTEM_FILEINFO_FINFO_CLOSE - bool php_filesystem_fileinfo_finfo_close(finfo $finfo)
// PHP_FILESYSTEM_FILEINFO_FINFO_FILE - string|false php_filesystem_fileinfo_finfo_file(finfo $finfo, string $filename, int $flags = FILEINFO_NONE, resource $context = null)
// PHP_FILESYSTEM_FILEINFO_FINFO_OPEN - finfo|false php_filesystem_fileinfo_finfo_open(int $flags = FILEINFO_NONE, string $magic_database = null)
// PHP_FILESYSTEM_FILEINFO_FINFO_SET_FLAGS - bool php_filesystem_fileinfo_finfo_set_flags(finfo $finfo, int $flags)
// PHP_FILESYSTEM_FILEINFO_MIME_CONTENT_TYPE - string|false php_filesystem_fileinfo_mime_content_type(resource|string $filename)
// PHP_FILESYSTEM_FILEINFO_FINFO - string|false|finfo|int|resource|bool _BUFFER, _CONSTRUCT, _FILE, _SET_FLAGS
// PHP_FILESYSTEM_FILEINFO - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== INSTALLATION
// BUNDLED (No external libraries are needed to build this extension. This extension is enabled by default.)
// ============================== USING FUNCTIONS (6)
// finfo_buffer() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// finfo_close() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// finfo_file() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// finfo_open() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// finfo_set_flags() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// mime_content_type() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (1)
// PHP_FILESYSTEM_FILEINFO_FINFO - PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING DATA_TYPES (6)
// string
// false
// finfo - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// int
// resource
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//    PHP_FILESYSTEM_FILEINFO    
// ============================== ABOUT
// PHP Manual / Function Reference / File System Related Extensions / Fileinfo - File Information
// URL: https://www.php.net/manual/en/book.fileinfo.php
// ============================== DESCRIPTION
// FILE_INFORMATION
// 
// FILE_INFORMATION - BEGIN
// File Information
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// FILEINFO_FUNCTIONS
// THE_FINFO_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction 
// 
// The functions in this module try to guess the content type and encoding of a file by looking for certain magic byte sequences at specific positions within the file. While this is not a bullet proof approach the heuristics used do a very good job.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/intro.fileinfo.php
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
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/fileinfo.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This extension is enabled by default.
// Windows users must include the bundled php_fileinfo.dll DLL file in php.ini to enable this extension.
// The libmagic library is bundled with PHP, but includes PHP specific changes. A patch against libmagic named libmagic.patch is maintained and may be found within the PHP fileinfo extensions source.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/fileinfo.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/fileinfo.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// Prior to PHP 8.1.0, there was one resource used in the Fileinfo extension: a magic database descriptor returned by finfo_open().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/fileinfo.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/fileinfo.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// FILEINFO_NONE (int)           - No special handling.
// FILEINFO_SYMLINK (int)        - Follow symlinks.
// FILEINFO_MIME_TYPE (int)      - Return the mime type.
// FILEINFO_MIME_ENCODING (int)  - Return the mime encoding of the file.
// FILEINFO_MIME (int)           - Return the mime type and mime encoding as defined by RFC 2045.
// FILEINFO_COMPRESS (int)       - Decompress compressed files. Disabled due to thread safety issues.
// FILEINFO_DEVICES (int)        - Look at the contents of blocks or character special devices.
// FILEINFO_CONTINUE (int)       - Return all matches, not just the first.
// FILEINFO_PRESERVE_ATIME (int) - If possible preserve the original access time.
// FILEINFO_RAW (int)            - Don't translate unprintable characters to a \ooo octal representation.
// FILEINFO_EXTENSION (int)      - Returns the file extension appropriate for the MIME type detected in the file. For types that commonly have multiple file extensions, such as JPEG images, then the return value is multiple extensions separated by a forward slash e.g.: "jpeg/jpg/jpe/jfif". For unknown types not available in the magic.mime database, then return value is "???". Available since PHP 7.2.0.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/fileinfo.constants.php
// PREDEFINED_CONSTANTS - END
// 
// FILEINFO_FUNCTIONS - BEGIN
// Table of Contents
// 
// * finfo_buffer      - Return information about a string buffer
// * finfo_close       - Close finfo instance
// * finfo_file        - Return information about a file
// * finfo_open        - Create a new finfo instance
// * finfo_set_flags   - Set libmagic configuration options
// * mime_content_type - Detect MIME Content-type for a file
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/ref.fileinfo.php
// FILEINFO_FUNCTIONS - END
// 
// THE_FINFO_CLASS - BEGIN
// The finfo class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// 
// Introduction
// This class provides an object-oriented interface into the fileinfo functions.
// 
// Class synopsis
// [code]
// class finfo {
// 
//    /* Methods */
//    public __construct(int $flags = FILEINFO_NONE, ?string $magic_database = null)
//    public buffer(string $string, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
//    public file(string $filename, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
//    public set_flags(int $flags): bool
// }
// [/code]
// 
// Table of Contents
// * finfo::buffer      - Alias of finfo_buffer()
// * finfo::__construct - Alias of finfo_open
// * finfo::file        - Alias of finfo_file()
// * finfo::set_flags   - Alias of finfo_set_flags()
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.finfo.php
// THE_FINFO_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/book.fileinfo.php
// FILE_INFORMATION - END
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_BUFFER
// ============================== PUBLIC
// ============================== ABOUT
// Return information about a string buffer.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING FUNCTIONS (1)
// finfo_buffer() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING CONSTANTS (1)
// FILEINFO_NONE - finfo_buffer()
// ============================== CODE
function php_filesystem_fileinfo_finfo_buffer($finfo, $string, $flags = FILEINFO_NONE, $context = null)
{
$return_finfo_buffer = false;

// ========== FINFO_BUFFER - BEGIN
// ===== ABOUT
// Return information about a string buffer
// ===== DESCRIPTION
// This function is used to get information about binary data in a string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_buffer(
//    finfo $finfo,
//    string $string,
//    int $flags = FILEINFO_NONE,
//    ?resource $context = null
// ): string|false
// 
// Object-oriented style
// public finfo::buffer(string $string, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
// ===== CODE
$return_finfo_buffer = finfo_buffer(

$finfo, // finfo finfo - An finfo instance, returned by finfo_open().

$string, // string string - Content of a file to be checked.

$flags, // int flags - One or disjunction of more Fileinfo constants.

$context // resource context

); // Return Values
// Returns a textual description of the string argument, or false if an error occurred.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// 8.0.0   - context is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A finfo_buffer() example
// [php]
// $finfo = new finfo(FILEINFO_MIME);
// echo $finfo->buffer($_POST["script"]) . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// application/x-sh; charset=us-ascii
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.finfo-buffer.php
// ========== FINFO_BUFFER - END

// SYNTAX:
// string|false finfo_buffer(finfo $finfo, string $string, int $flags = FILEINFO_NONE, resource $context = null)

return $return_finfo_buffer; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_BUFFER
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close finfo instance.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING FUNCTIONS (1)
// finfo_close() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== CODE
function php_filesystem_fileinfo_finfo_close($finfo)
{
$return_finfo_close = false;

// ========== FINFO_CLOSE - BEGIN
// ===== ABOUT
// Close finfo instance
// ===== DESCRIPTION
// This function closes the instance opened by finfo_open().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// finfo_close(finfo $finfo): bool
// ===== CODE
$return_finfo_close = finfo_close(

$finfo // finfo finfo - An finfo instance, returned by finfo_open().

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-07-30)
// URL: https://www.php.net/manual/en/function.finfo-close.php
// ========== FINFO_CLOSE - END

// SYNTAX:
// bool finfo_close(finfo $finfo)

return $return_finfo_close; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_CLOSE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Return information about a file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING FUNCTIONS (1)
// finfo_file() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING CONSTANTS (1)
// FILEINFO_NONE - finfo_file()
// ============================== CODE
function php_filesystem_fileinfo_finfo_file($finfo, $filename, $flags = FILEINFO_NONE, $context = null)
{
$return_finfo_file = false;

// ========== FINFO_FILE - BEGIN
// ===== ABOUT
// Return information about a file
// ===== DESCRIPTION
// This function is used to get information about a file.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_file(
//    finfo $finfo,
//    string $filename,
//    int $flags = FILEINFO_NONE,
//    ?resource $context = null
// ): string|false
// 
// Object-oriented style
// public finfo::file(string $filename, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
// ===== CODE
$return_finfo_file = finfo_file(

$finfo, // finfo finfo - An finfo instance, returned by finfo_open().

$filename, // string filename - Name of a file to be checked.

$flags, // int flags - One or disjunction of more Fileinfo constants.

$context // resource context - For a description of contexts, refer to Stream Functions.

); // Return Values
// Returns a textual description of the contents of the filename argument, or false if an error occurred.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// 8.0.0   - context is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A finfo_file() example
// [php]
// $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type aka mimetype extension
// foreach (glob("*") as $filename) {
//     echo finfo_file($finfo, $filename) . "\n";
// }
// finfo_close($finfo);
// [/php]
// The above example will output something similar to:
// [result]
// text/html
// image/gif
// application/vnd.ms-excel
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.finfo-file.php
// ========== FINFO_FILE - END

// SYNTAX:
// string|false finfo_file(finfo $finfo, string $filename, int $flags = FILEINFO_NONE, resource $context = null)

return $return_finfo_file; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Create a new finfo instance.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING FUNCTIONS (1)
// finfo_open() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING CONSTANTS (1)
// FILEINFO_NONE - finfo_open()
// ============================== CODE
function php_filesystem_fileinfo_finfo_open($flags = FILEINFO_NONE, $magic_database = null)
{
$return_finfo_open = false;

// ========== FINFO_OPEN - BEGIN
// ===== ABOUT
// Create a new finfo instance
// ===== DESCRIPTION
// This function opens a magic database and returns its instance.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): finfo|false
// 
// Object-oriented style (constructor):
// public finfo::__construct(int $flags = FILEINFO_NONE, ?string $magic_database = null)
// ===== CODE
$return_finfo_open = finfo_open(

$flags, // int flags - One or disjunction of more Fileinfo constants.

$magic_database // string magic_database - Name of a magic database file, usually something like /path/to/magic.mime. If not specified, the MAGIC environment variable is used. If the environment variable isn't set, then PHP's bundled magic database will be used.
// Passing null or an empty string will be equivalent to the default value.

); // Return Values
// (Procedural style only) Returns an finfo instance on success, or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - Returns an finfo instance now; previously, a resource was returned.
// 8.0.3   - magic_database is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $finfo = new finfo(FILEINFO_MIME, "/usr/share/misc/magic"); // return mime type ala mimetype extension
// 
// // get mime-type for a specific file
// $filename = "/usr/local/something.txt";
// echo $finfo->file($filename);
// 
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $finfo = finfo_open(FILEINFO_MIME, "/usr/share/misc/magic"); // return mime type ala mimetype extension
// 
// if (!$finfo) {
//     echo "Opening fileinfo database failed";
//     exit();
// }
// 
// // get mime-type for a specific file
// $filename = "/usr/local/something.txt";
// echo finfo_file($finfo, $filename);
// 
// // close connection
// finfo_close($finfo);
// [/php]
// The above example will output:
// [result]
// text/plain; charset=us-ascii
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Generally, using the bundled magic database (by leaving magic_database and the MAGIC environment variables unset) is the best course of action unless you specifically need a custom magic database.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.finfo-open.php
// ========== FINFO_OPEN - END

// SYNTAX:
// finfo|false finfo_open(int $flags = FILEINFO_NONE, string $magic_database = null)

return $return_finfo_open; // finfo|false
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_OPEN
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_SET_FLAGS
// ============================== PUBLIC
// ============================== ABOUT
// Set libmagic configuration options.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING FUNCTIONS (1)
// finfo_set_flags() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== CODE
function php_filesystem_fileinfo_finfo_set_flags($finfo, $flags)
{
$return_finfo_set_flags = false;

// ========== FINFO_SET_FLAGS - BEGIN
// ===== ABOUT
// Set libmagic configuration options
// ===== DESCRIPTION
// This function sets various Fileinfo options. Options can be set also directly in finfo_open() or other Fileinfo functions.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_set_flags(finfo $finfo, int $flags): bool
// 
// Object-oriented style
// public finfo::set_flags(int $flags): bool
// ===== CODE
$return_finfo_set_flags = finfo_set_flags(

$finfo, // finfo finfo - An finfo instance, returned by finfo_open().

$flags // int flags - One or disjunction of more Fileinfo constants.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.finfo-set-flags.php
// ========== FINFO_SET_FLAGS - END

// SYNTAX:
// bool finfo_set_flags(finfo $finfo, int $flags)

return $return_finfo_set_flags; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_SET_FLAGS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_MIME_CONTENT_TYPE
// ============================== PUBLIC
// ============================== ABOUT
// Detect MIME Content-type for a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// mime_content_type() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_fileinfo_mime_content_type($filename)
{
$return_mime_content_type = false;

// ========== MIME_CONTENT_TYPE - BEGIN
// ===== ABOUT
// Detect MIME Content-type for a file
// ===== DESCRIPTION
// Returns the MIME content type for a file as determined by using information from the magic.mime file.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// mime_content_type(resource|string $filename): string|false
// ===== CODE
$return_mime_content_type = mime_content_type(

$filename // resource|string filename - Path to the tested file.

); // Return Values
// Returns the content type in MIME format, like text/plain or application/octet-stream, or false on failure.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 mime_content_type() Example
// [php]
// echo mime_content_type('php.gif') . "\n";
// echo mime_content_type('test.php');
// [/php]
// The above example will output:
// [result]
// image/gif
// text/plain
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.mime-content-type.php
// ========== MIME_CONTENT_TYPE - END

// SYNTAX:
// string|false mime_content_type(resource|string $filename)

return $return_mime_content_type; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_MIME_CONTENT_TYPE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO 
// ============================== PUBLIC
// OFFLINE | PHP_FILESYSTEM_FILEINFO_FINFO_BUFFER - string|false php_filesystem_fileinfo_finfo_buffer(finfo $finfo, string $string, int $flags = FILEINFO_NONE, resource $context = null)
// PHP_FILESYSTEM_FILEINFO_FINFO_CONSTRUCT - finfo php_filesystem_fileinfo_finfo_construct(int $flags = FILEINFO_NONE, string $magic_database = null)
// OFFLINE | PHP_FILESYSTEM_FILEINFO_FINFO_FILE - string|false php_filesystem_fileinfo_finfo_file(finfo $finfo, string $filename, int $flags = FILEINFO_NONE, resource $context = null)
// OFFLINE | PHP_FILESYSTEM_FILEINFO_FINFO_SET_FLAGS - bool php_filesystem_fileinfo_finfo_set_flags(finfo $finfo, int $flags)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING SUBCLASSES (4)
// OFFLINE | finfo::buffer() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// finfo::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// OFFLINE | finfo::file() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// OFFLINE | finfo::set_flags() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING DATA_TYPES (6)
// string
// false
// finfo - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// int
// resource
// bool
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_BUFFER
// ============================== OFFLINE
// ============================== ABOUT
// Return information about a string buffer.
// 
// finfo::buffer - Alias of finfo_buffer().
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING SUBCLASSES (1)
// finfo::buffer() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING CONSTANTS (1)
// FILEINFO_NONE - finfo::buffer()
// ============================== CODE
/*
function php_filesystem_fileinfo_finfo_buffer($finfo, $string, $flags = FILEINFO_NONE, $context = null)
{
$return_finfo_buffer = false;

// ========== FINFO_BUFFER - BEGIN
// ===== ABOUT
// finfo::buffer - Alias of finfo_buffer()
// ===== DESCRIPTION
// This function is an alias of: finfo_buffer()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// public finfo::buffer(string $string, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
// ===== CODE
$return_finfo_buffer = $finfo->buffer(

$string, // string $string

$flags, // int $flags

$context // resource $context

); // Return
// string|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/finfo.buffer.php
// ========== FINFO_BUFFER - END

// ========== FINFO_BUFFER - BEGIN
// ===== ABOUT
// Return information about a string buffer
// ===== DESCRIPTION
// This function is used to get information about binary data in a string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_buffer(
//    finfo $finfo,
//    string $string,
//    int $flags = FILEINFO_NONE,
//    ?resource $context = null
// ): string|false
// 
// Object-oriented style
// public finfo::buffer(string $string, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
// ===== CODE
// $return_finfo_buffer = finfo_buffer(

// $finfo, // finfo finfo - An finfo instance, returned by finfo_open().

// $string, // string string - Content of a file to be checked.

// $flags, // int flags - One or disjunction of more Fileinfo constants.

// $context // resource context

// ); // Return Values
// Returns a textual description of the string argument, or false if an error occurred.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// 8.0.0   - context is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A finfo_buffer() example
// [php]
// $finfo = new finfo(FILEINFO_MIME);
// echo $finfo->buffer($_POST["script"]) . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// application/x-sh; charset=us-ascii
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.finfo-buffer.php
// ========== FINFO_BUFFER - END

// SYNTAX:
// string|false finfo::buffer(string $string, int $flags = FILEINFO_NONE, resource $context = null)

return $return_finfo_buffer; // string|false
}
*/
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_BUFFER
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Create a new finfo instance.
// 
// finfo::__construct - Alias of finfo_open().
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING SUBCLASSES (1)
// finfo::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING CONSTANTS (1)
// FILEINFO_NONE - finfo::__construct()
// ============================== CODE
function php_filesystem_fileinfo_finfo_construct($flags = FILEINFO_NONE, $magic_database = null)
{
$return_finfo_construct = null;

// ========== FINFO_CONSTRUCT - BEGIN
// ===== ABOUT
// finfo::__construct - Alias of finfo_open()
// ===== DESCRIPTION
// This function is an alias of: finfo_open()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// public finfo::__construct(int $flags = FILEINFO_NONE, ?string $magic_database = null)
// ===== CODE
$return_finfo_construct = new finfo(

$flags, // int $flags

$magic_database // string $magic_database

); // Return
// finfo
// 
// Changelog
// Version - Description
// 8.0.3   - magic_database is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/finfo.construct.php
// ========== FINFO_CONSTRUCT - END

// ========== FINFO_OPEN - BEGIN
// ===== ABOUT
// Create a new finfo instance
// ===== DESCRIPTION
// This function opens a magic database and returns its instance.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): finfo|false
// 
// Object-oriented style (constructor):
// public finfo::__construct(int $flags = FILEINFO_NONE, ?string $magic_database = null)
// ===== CODE
// $return_finfo_open = finfo_open(

// $flags, // int flags - One or disjunction of more Fileinfo constants.

// $magic_database // string magic_database - Name of a magic database file, usually something like /path/to/magic.mime. If not specified, the MAGIC environment variable is used. If the environment variable isn't set, then PHP's bundled magic database will be used.
// Passing null or an empty string will be equivalent to the default value.

// ); // Return Values
// (Procedural style only) Returns an finfo instance on success, or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - Returns an finfo instance now; previously, a resource was returned.
// 8.0.3   - magic_database is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $finfo = new finfo(FILEINFO_MIME, "/usr/share/misc/magic"); // return mime type ala mimetype extension
// 
// // get mime-type for a specific file
// $filename = "/usr/local/something.txt";
// echo $finfo->file($filename);
// 
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $finfo = finfo_open(FILEINFO_MIME, "/usr/share/misc/magic"); // return mime type ala mimetype extension
// 
// if (!$finfo) {
//     echo "Opening fileinfo database failed";
//     exit();
// }
// 
// // get mime-type for a specific file
// $filename = "/usr/local/something.txt";
// echo finfo_file($finfo, $filename);
// 
// // close connection
// finfo_close($finfo);
// [/php]
// The above example will output:
// [result]
// text/plain; charset=us-ascii
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Generally, using the bundled magic database (by leaving magic_database and the MAGIC environment variables unset) is the best course of action unless you specifically need a custom magic database.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.finfo-open.php
// ========== FINFO_OPEN - END

// SYNTAX:
// finfo finfo::__construct(int $flags = FILEINFO_NONE, string $magic_database = null)

return $return_finfo_construct; // finfo
}
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_FILE
// ============================== OFFLINE
// ============================== ABOUT
// Return information about a file.
// 
// finfo::file - Alias of finfo_file().
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING SUBCLASSES (1)
// finfo::file() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== USING CONSTANTS (1)
// FILEINFO_NONE - finfo::file()
// ============================== CODE
/*
function php_filesystem_fileinfo_finfo_file($finfo, $filename, $flags = FILEINFO_NONE, $context = null)
{
$return_finfo_file = false;

// ========== FINFO_FILE - BEGIN
// ===== ABOUT
// finfo::file - Alias of finfo_file()
// ===== DESCRIPTION
// This function is an alias of: finfo_file()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// public finfo::file(string $filename, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
// ===== CODE
$return_finfo_file = $finfo->file(

$filename, // string $filename

$flags, // int $flags

$context // resource $context

); // Return
// string|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/finfo.file.php
// ========== FINFO_FILE - END

// ========== FINFO_FILE - BEGIN
// ===== ABOUT
// Return information about a file
// ===== DESCRIPTION
// This function is used to get information about a file.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_file(
//    finfo $finfo,
//    string $filename,
//    int $flags = FILEINFO_NONE,
//    ?resource $context = null
// ): string|false
// 
// Object-oriented style
// public finfo::file(string $filename, int $flags = FILEINFO_NONE, ?resource $context = null): string|false
// ===== CODE
// $return_finfo_file = finfo_file(

// $finfo, // finfo finfo - An finfo instance, returned by finfo_open().

// $filename, // string filename - Name of a file to be checked.

// $flags, // int flags - One or disjunction of more Fileinfo constants.

// $context // resource context - For a description of contexts, refer to Stream Functions.

// ); // Return Values
// Returns a textual description of the contents of the filename argument, or false if an error occurred.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// 8.0.0   - context is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A finfo_file() example
// [php]
// $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type aka mimetype extension
// foreach (glob("*") as $filename) {
//     echo finfo_file($finfo, $filename) . "\n";
// }
// finfo_close($finfo);
// [/php]
// The above example will output something similar to:
// [result]
// text/html
// image/gif
// application/vnd.ms-excel
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.finfo-file.php
// ========== FINFO_FILE - END

// SYNTAX:
// string|false finfo::file(string $filename, int $flags = FILEINFO_NONE, resource $context = null)

return $return_finfo_file; // string|false
}
*/
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILEINFO_FINFO_SET_FLAGS
// ============================== OFFLINE
// ============================== ABOUT
// Set libmagic configuration options.
// 
// finfo::set_flags - Alias of finfo_set_flags().
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_fileinfo_0_1_0
// ============================== USING SUBCLASSES (1)
// finfo::set_flags() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ============================== CODE
/*
function php_filesystem_fileinfo_finfo_set_flags($finfo, $flags)
{
$return_finfo_set_flags = false;

// ========== FINFO_SET_FLAGS - BEGIN
// ===== ABOUT
// finfo::set_flags - Alias of finfo_set_flags()
// ===== DESCRIPTION
// This function is an alias of: finfo_set_flags()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// public finfo::set_flags(int $flags): bool
// ===== CODE
$return_finfo_set_flags = $finfo->set_flags(

$flags // int $flags

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/finfo.set-flags.php
// ========== FINFO_SET_FLAGS - END

// ========== FINFO_SET_FLAGS - BEGIN
// ===== ABOUT
// Set libmagic configuration options
// ===== DESCRIPTION
// This function sets various Fileinfo options. Options can be set also directly in finfo_open() or other Fileinfo functions.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_fileinfo >= PECL_fileinfo_0_1_0
// ===== SYNTAX
// Procedural style
// finfo_set_flags(finfo $finfo, int $flags): bool
// 
// Object-oriented style
// public finfo::set_flags(int $flags): bool
// ===== CODE
// $return_finfo_set_flags = finfo_set_flags(

// $finfo, // finfo finfo - An finfo instance, returned by finfo_open().

// $flags // int flags - One or disjunction of more Fileinfo constants.

// ); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The finfo parameter expects an finfo instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.finfo-set-flags.php
// ========== FINFO_SET_FLAGS - END

// SYNTAX:
// bool finfo::set_flags(int $flags)

return $return_finfo_set_flags; // bool
}
*/
// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO_SET_FLAGS
// ==============================


// ============================== END
// PHP_FILESYSTEM_FILEINFO_FINFO 
// ==============================


// ============================== END
//    PHP_FILESYSTEM_FILEINFO    
// ==============================
?>