<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_COMPRESSION_BZIP2 - BEGIN
// PHP_COMPRESSION_BZIP2_BZCLOSE - bool php_compression_bzip2_bzclose(resource $bz)
// PHP_COMPRESSION_BZIP2_BZCOMPRESS - string|int php_compression_bzip2_bzcompress(string $data, int $block_size = 4, int $work_factor = 0)
// PHP_COMPRESSION_BZIP2_BZDECOMPRESS - string|int|false php_compression_bzip2_bzdecompress(string $data, bool $use_less_memory = false)
// PHP_COMPRESSION_BZIP2_BZERRNO - int php_compression_bzip2_bzerrno(resource $bz)
// PHP_COMPRESSION_BZIP2_BZERROR - array php_compression_bzip2_bzerror(resource $bz)
// PHP_COMPRESSION_BZIP2_BZERRSTR - string php_compression_bzip2_bzerrstr(resource $bz)
// PHP_COMPRESSION_BZIP2_BZFLUSH - bool php_compression_bzip2_bzflush(resource $bz)
// PHP_COMPRESSION_BZIP2_BZOPEN - resource|false php_compression_bzip2_bzopen(string|resource $file, string $mode)
// PHP_COMPRESSION_BZIP2_BZREAD - string|false php_compression_bzip2_bzread(resource $bz, int $length = 1024)
// PHP_COMPRESSION_BZIP2_BZWRITE - int|false php_compression_bzip2_bzwrite(resource $bz, string $data, int $length = null)
// PHP_COMPRESSION_BZIP2 - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// NOT_BUNDLED (This module uses the functions of the > bzip2 library by Julian Seward. This module requires bzip2/libbzip2 version >= 1.0.x.)
// ============================== USING FUNCTIONS (10)
// bzclose() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzcompress() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzdecompress() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzerrno() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzerror() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzerrstr() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzflush() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzopen() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzread() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// bzwrite() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (6)
// bool
// resource
// string
// int
// false
// array
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//     PHP_COMPRESSION_BZIP2     
// ============================== ABOUT
// PHP Manual / Function Reference / Compression and Archive Extensions / Bzip2
// URL: https://www.php.net/manual/en/book.bzip2.php
// ============================== DESCRIPTION
// BZIP2
// 
// BZIP2 - BEGIN
// Bzip2
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// BZIP2_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The bzip2 functions are used to transparently read and write bzip2 (.bz2) compressed files.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/intro.bzip2.php
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
// This module uses the functions of the > bzip2 library by Julian Seward. This module requires bzip2/libbzip2 version >= 1.0.x.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Bzip2 support in PHP is not enabled by default. You will need to use the --with-bz2[=DIR] configuration option when compiling PHP to enable bzip2 support.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension defines one resource type: a file pointer identifying the bz2-file to work on.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// This extension has no constants defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// This example opens a temporary file and writes a test string to it, then prints out the contents of the file.
// 
// [example]
// Example #1 Small bzip2 Example
// [php]
// 
// $filename = "/tmp/testfile.bz2";
// $str = "This is a test string.\n";
// 
// // open file for writing
// $bz = bzopen($filename, "w");
// 
// // write string to file
// bzwrite($bz, $str);
// 
// // close file
// bzclose($bz);
// 
// // open file for reading
// $bz = bzopen($filename, "r");
// 
// // read 10 characters
// echo bzread($bz, 10);
// 
// // output until end of the file (or the next 1024 char) and close it.  
// echo bzread($bz);
// 
// bzclose($bz);
// 
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/bzip2.examples.php
// EXAMPLES - END
// 
// BZIP2_FUNCTIONS - BEGIN
// Bzip2 Functions
// 
// Table of Contents
// * bzclose      - Close a bzip2 file
// * bzcompress   - Compress a string into bzip2 encoded data
// * bzdecompress - Decompresses bzip2 encoded data
// * bzerrno      - Returns a bzip2 error number
// * bzerror      - Returns the bzip2 error number and error string in an array
// * bzerrstr     - Returns a bzip2 error string
// * bzflush      - Do nothing
// * bzopen       - Opens a bzip2 compressed file
// * bzread       - Binary safe bzip2 file read
// * bzwrite      - Binary safe bzip2 file write
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/ref.bzip2.php
// BZIP2_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/book.bzip2.php
// BZIP2 - END
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZCLOSE 
// ============================== PUBLIC
// ============================== ABOUT
// Close a bzip2 file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzclose() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzclose($bz)
{
$return_bzclose = false;

// ========== BZCLOSE - BEGIN
// ===== ABOUT
// Close a bzip2 file
// ===== DESCRIPTION
// Closes the given bzip2 file pointer.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzclose(resource $bz): bool
// ===== CODE
$return_bzclose = bzclose(

$bz // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzclose.php
// ========== BZCLOSE - END

// SYNTAX:
// bool bzclose(resource $bz)

return $return_bzclose; // bool
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZCLOSE 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZCOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Compress a string into bzip2 encoded data.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzcompress() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzcompress($data, $block_size = 4, $work_factor = 0)
{
$return_bzcompress = null;

// ========== BZCOMPRESS - BEGIN
// ===== ABOUT
// Compress a string into bzip2 encoded data
// ===== DESCRIPTION
// bzcompress() compresses the given string and returns it as bzip2 encoded data.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzcompress(string $data, int $block_size = 4, int $work_factor = 0): string|int
// ===== CODE
$return_bzcompress = bzcompress(

$data, // string data - The string to compress.

$block_size, // int block_size - Specifies the blocksize used during compression and should be a number from 1 to 9 with 9 giving the best compression, but using more resources to do so.

$work_factor // int work_factor - Controls how the compression phase behaves when presented with worst case, highly repetitive, input data. The value can be between 0 and 250 with 0 being a special case.
// Regardless of the work_factor, the generated output is the same.

); // Return Values
// The compressed string, or an error number if an error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 Compressing data
// [php]
// $str = "sample data";
// $bzstr = bzcompress($str, 9);
// echo $bzstr;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzcompress.php
// ========== BZCOMPRESS - END

// SYNTAX:
// string|int bzcompress(string $data, int $block_size = 4, int $work_factor = 0)

return $return_bzcompress; // string|int
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZCOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZDECOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Decompresses bzip2 encoded data.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzdecompress() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzdecompress($data, $use_less_memory = false)
{
$return_bzdecompress = false;

// ========== BZDECOMPRESS - BEGIN
// ===== ABOUT
// Decompresses bzip2 encoded data
// ===== DESCRIPTION
// bzdecompress() decompresses the given string containing bzip2 encoded data.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzdecompress(string $data, bool $use_less_memory = false): string|int|false
// ===== CODE
$return_bzdecompress = bzdecompress(

$data, // string data - The string to decompress.

$use_less_memory // bool use_less_memory - If true, an alternative decompression algorithm will be used which uses less memory (the maximum memory requirement drops to around 2300K) but works at roughly half the speed.
// See the > bzip2 documentation for more information about this feature.

); // Return Values
// The decompressed string, or false or an error number if an error occurred.
// 
// Changelog
// Version - Description
// 8.0.0   - The type of use_less_memory has been changed from int to bool. Previously, the default value was 0.
// 
// [examples]
// Examples
// [example]
// Example #1 Decompressing a String
// [php]
// $start_str = "This is not an honest face?";
// $bzstr = bzcompress($start_str);
// 
// echo "Compressed String: ";
// echo $bzstr;
// echo "\n<br />\n";
// 
// $str = bzdecompress($bzstr);
// echo "Decompressed String: ";
// echo $str;
// echo "\n<br />\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzdecompress.php
// ========== BZDECOMPRESS - END

// SYNTAX:
// string|int|false bzdecompress(string $data, bool $use_less_memory = false)

return $return_bzdecompress; // string|int|false
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZDECOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZERRNO 
// ============================== PUBLIC
// ============================== ABOUT
// Returns a bzip2 error number.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzerrno() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzerrno($bz)
{
$return_bzerrno = 0;

// ========== BZERRNO - BEGIN
// ===== ABOUT
// Returns a bzip2 error number
// ===== DESCRIPTION
// Returns the error number of any bzip2 error returned by the given file pointer.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzerrno(resource $bz): int
// ===== CODE
$return_bzerrno = bzerrno(

$bz // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

); // Return Values
// Returns the error number as an integer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzerrno.php
// ========== BZERRNO - END

// SYNTAX:
// int bzerrno(resource $bz)

return $return_bzerrno; // int
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZERRNO 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZERROR 
// ============================== PUBLIC
// ============================== ABOUT
// Returns the bzip2 error number and error string in an array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzerror() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzerror($bz)
{
$return_bzerror = null;

// ========== BZERROR - BEGIN
// ===== ABOUT
// Returns the bzip2 error number and error string in an array
// ===== DESCRIPTION
// Returns the error number and error string of any bzip2 error returned by the given file pointer.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzerror(resource $bz): array
// ===== CODE
$return_bzerror = bzerror(

$bz // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

); // Return Values
// Returns an associative array, with the error code in the errno entry, and the error message in the errstr entry.
// 
// [examples]
// Examples
// [example]
// Example #1 bzerror() example
// [php]
// $error = bzerror($bz);
// 
// echo $error["errno"];
// echo $error["errstr"];
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzerror.php
// ========== BZERROR - END

// SYNTAX:
// array bzerror(resource $bz)

return $return_bzerror; // array
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZERROR 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZERRSTR
// ============================== PUBLIC
// ============================== ABOUT
// Returns a bzip2 error string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzerrstr() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzerrstr($bz)
{
$return_bzerrstr = null;

// ========== BZERRSTR - BEGIN
// ===== ABOUT
// Returns a bzip2 error string
// ===== DESCRIPTION
// Gets the error string of any bzip2 error returned by the given file pointer.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzerrstr(resource $bz): string
// ===== CODE
$return_bzerrstr = bzerrstr(

$bz // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

); // Return Values
// Returns a string containing the error message.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzerrstr.php
// ========== BZERRSTR - END

// SYNTAX:
// string bzerrstr(resource $bz)

return $return_bzerrstr; // string
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZERRSTR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZFLUSH 
// ============================== PUBLIC
// ============================== ABOUT
// Do nothing.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzflush() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzflush($bz)
{
$return_bzflush = false;

// ========== BZFLUSH - BEGIN
// ===== ABOUT
// Do nothing
// ===== DESCRIPTION
// This function is supposed to force a write of all buffered bzip2 data for the file pointer bz, but is implemented as null function in libbz2, and as such does nothing.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzflush(resource $bz): bool
// ===== CODE
$return_bzflush = bzflush(

$bz // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzflush.php
// ========== BZFLUSH - END

// SYNTAX:
// bool bzflush(resource $bz)

return $return_bzflush; // bool
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZFLUSH 
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_BZIP2_BZOPEN  
// ============================== PUBLIC
// ============================== ABOUT
// Opens a bzip2 compressed file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzopen() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzopen($file, $mode)
{
$return_bzopen = false;

// ========== BZOPEN - BEGIN
// ===== ABOUT
// Opens a bzip2 compressed file
// ===== DESCRIPTION
// bzopen() opens a bzip2 (.bz2) file for reading or writing.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzopen(string|resource $file, string $mode): resource|false
// ===== CODE
$return_bzopen = bzopen(

$file, // string|resource file - The name of the file to open, or an existing stream resource.

$mode // string mode - The modes 'r' (read), and 'w' (write) are supported. Everything else will cause bzopen() to return false.

); // Return Values
// If the open fails, bzopen() returns false, otherwise it returns a pointer to the newly opened file.
// 
// [examples]
// Examples
// [example]
// Example #1 bzopen() example
// [php]
// 
// $file = "/tmp/foo.bz2";
// $bz = bzopen($file, "r") or die("Couldn't open $file for reading");
// 
// bzclose($bz);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzopen.php
// ========== BZOPEN - END

// SYNTAX:
// resource|false bzopen(string|resource $file, string $mode)

return $return_bzopen; // resource|false
}
// ============================== END
//  PHP_COMPRESSION_BZIP2_BZOPEN  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_BZIP2_BZREAD  
// ============================== PUBLIC
// ============================== ABOUT
// Binary safe bzip2 file read.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzread() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzread($bz, $length = 1024)
{
$return_bzread = false;

// ========== BZREAD - BEGIN
// ===== ABOUT
// Binary safe bzip2 file read
// ===== DESCRIPTION
// bzread() reads from the given bzip2 file pointer.
// Reading stops when length (uncompressed) bytes have been read or EOF is reached, whichever comes first.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzread(resource $bz, int $length = 1024): string|false
// ===== CODE
$return_bzread = bzread(

$bz, // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

$length // int length - If not specified, bzread() will read 1024 (uncompressed) bytes at a time. A maximum of 8192 uncompressed bytes will be read at a time.

); // Return Values
// Returns the uncompressed data, or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 bzread() example
// [php]
// 
// $file = "/tmp/foo.bz2";
// $bz = bzopen($file, "r") or die("Couldn't open $file");
// 
// $decompressed_file = '';
// while (!feof($bz)) {
//   $decompressed_file .= bzread($bz, 4096);
// }
// bzclose($bz);
// 
// echo "The contents of $file are: <br />\n";
// echo $decompressed_file;
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzread.php
// ========== BZREAD - END

// SYNTAX:
// string|false bzread(resource $bz, int $length = 1024)

return $return_bzread; // string|false
}
// ============================== END
//  PHP_COMPRESSION_BZIP2_BZREAD  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_BZIP2_BZWRITE 
// ============================== PUBLIC
// ============================== ABOUT
// Binary safe bzip2 file write.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// bzwrite() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_bzip2_bzwrite($bz, $data, $length = null)
{
$return_bzwrite = false;

// ========== BZWRITE - BEGIN
// ===== ABOUT
// Binary safe bzip2 file write
// ===== DESCRIPTION
// bzwrite() writes a string into the given bzip2 file stream.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// bzwrite(resource $bz, string $data, ?int $length = null): int|false
// ===== CODE
$return_bzwrite = bzwrite(

$bz, // resource bz - The file pointer. It must be valid and must point to a file successfully opened by bzopen().

$data, // string data - The written data.

$length // int length - If supplied, writing will stop after length (uncompressed) bytes have been written or the end of data is reached, whichever comes first.

); // Return Values
// Returns the number of bytes written, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 bzwrite() example
// [php]
// $str = "uncompressed data";
// $bz = bzopen("/tmp/foo.bz2", "w");
// bzwrite($bz, $str, strlen($str));
// bzclose($bz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.bzwrite.php
// ========== BZWRITE - END

// SYNTAX:
// int|false bzwrite(resource $bz, string $data, int $length = null)

return $return_bzwrite; // int|false
}
// ============================== END
// PHP_COMPRESSION_BZIP2_BZWRITE 
// ==============================


// ============================== END
//     PHP_COMPRESSION_BZIP2     
// ==============================
?>