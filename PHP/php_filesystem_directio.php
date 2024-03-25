<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_FILESYSTEM_DIRECTIO - BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_CLOSE - void php_filesystem_directio_dio_close(resource $fd)
// PHP_FILESYSTEM_DIRECTIO_DIO_FCNTL - mixed php_filesystem_directio_dio_fcntl(resource $fd, int $cmd, mixed $args)
// PHP_FILESYSTEM_DIRECTIO_DIO_OPEN - resource php_filesystem_directio_dio_open(string $filename, int $flags, int $mode = 0)
// PHP_FILESYSTEM_DIRECTIO_DIO_READ - string php_filesystem_directio_dio_read(resource $fd, int $len = 1024)
// PHP_FILESYSTEM_DIRECTIO_DIO_SEEK - int php_filesystem_directio_dio_seek(resource $fd, int $pos, int $whence = SEEK_SET)
// PHP_FILESYSTEM_DIRECTIO_DIO_STAT - array php_filesystem_directio_dio_stat(resource $fd)
// PHP_FILESYSTEM_DIRECTIO_DIO_TCSETATTR - bool php_filesystem_directio_dio_tcsetattr(resource $fd, array $options)
// PHP_FILESYSTEM_DIRECTIO_DIO_TRUNCATE - bool php_filesystem_directio_dio_truncate(resource $fd, int $offset)
// PHP_FILESYSTEM_DIRECTIO_DIO_WRITE - int php_filesystem_directio_dio_write(resource $fd, string $data, int $len = 0)
// PHP_FILESYSTEM_DIRECTIO - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== INSTALLATION
// NOT_BUNDLED (This > PECL extension is not bundled with PHP.)
// ============================== USING FUNCTIONS (9)
// dio_close() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_fcntl() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_open() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_read() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_seek() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_stat() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_tcsetattr() - PHP_4 >= PHP_4_3_0, PHP_5 < PHP_5_1_0
// dio_truncate() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// dio_write() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (7)
// void
// resource
// mixed
// int
// string
// array
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//    PHP_FILESYSTEM_DIRECTIO    
// ============================== ABOUT
// PHP Manual / Function Reference / File System Related Extensions / Direct IO
// URL: https://www.php.net/manual/en/book.dio.php
// ============================== DESCRIPTION
// DIRECT_IO
// 
// DIRECT_IO - BEGIN
// Direct IO
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// DIRECT_IO_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// PHP supports the direct io functions as described in the Posix Standard (Section 6) for performing I/O functions at a lower level than the C-Language stream I/O functions (fopen(), fread(),..). The use of the DIO functions should be considered only when direct control of a device is needed. In all other cases, the standard filesystem functions are more than adequate.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/intro.dio.php
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
// URL: https://www.php.net/manual/en/dio.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This > PECL extension is not bundled with PHP.
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/dio.
// A DLL for this PECL extension is currently unavailable. See also the building on Windows section.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dio.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dio.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// One resource type is defined by this extension: a file descriptor returned by dio_open().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dio.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dio.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// F_DUPFD (int)    -
// F_GETFD (int)    -
// F_GETFL (int)    -
// F_GETLK (int)    -
// F_GETOWN (int)   -
// F_RDLCK (int)    -
// F_SETFL (int)    -
// F_SETLK (int)    -
// F_SETLKW (int)   -
// F_SETOWN (int)   -
// F_UNLCK (int)    -
// F_WRLCK (int)    -
// O_APPEND (int)   -
// O_ASYNC (int)    -
// O_CREAT (int)    -
// O_EXCL (int)     -
// O_NDELAY (int)   -
// O_NOCTTY (int)   -
// O_NONBLOCK (int) -
// O_RDONLY (int)   -
// O_RDWR (int)     -
// O_SYNC (int)     -
// O_TRUNC (int)    -
// O_WRONLY (int)   -
// S_IRGRP (int)    -
// S_IROTH (int)    -
// S_IRUSR (int)    -
// S_IRWXG (int)    -
// S_IRWXO (int)    -
// S_IRWXU (int)    -
// S_IWGRP (int)    -
// S_IWOTH (int)    -
// S_IWUSR (int)    -
// S_IXGRP (int)    -
// S_IXOTH (int)    -
// S_IXUSR (int)    -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/dio.constants.php
// PREDEFINED_CONSTANTS - END
// 
// DIRECT_IO_FUNCTIONS - BEGIN
// Direct IO Functions
// 
// Table of Contents
// * dio_close     - Closes the file descriptor given by fd
// * dio_fcntl     - Performs a c library fcntl on fd
// * dio_open      - Opens a file (creating it if necessary) at a lower level than the C library input/ouput stream functions allow
// * dio_read      - Reads bytes from a file descriptor
// * dio_seek      - Seeks to pos on fd from whence
// * dio_stat      - Gets stat information about the file descriptor fd
// * dio_tcsetattr - Sets terminal attributes and baud rate for a serial port
// * dio_truncate  - Truncates file descriptor fd to offset bytes
// * dio_write     - Writes data to fd with optional truncation at length
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/ref.dio.php
// DIRECT_IO_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/book.dio.php
// DIRECT_IO - END
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Closes the file descriptor given by fd.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_close() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_close($fd)
{

// ========== DIO_CLOSE - BEGIN
// ===== ABOUT
// Closes the file descriptor given by fd
// ===== DESCRIPTION
// The function dio_close() closes the file descriptor fd.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_close(resource $fd): void
// ===== CODE
dio_close(

$fd // resource fd - The file descriptor returned by dio_open().

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Closing an open file descriptor
// [php]
// $fd = dio_open('/dev/ttyS0', O_RDWR);
// 
// dio_close($fd);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-29)
// URL: https://www.php.net/manual/en/function.dio-close.php
// ========== DIO_CLOSE - END

// SYNTAX:
// void dio_close(resource $fd)

// Return: void
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_CLOSE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_FCNTL
// ============================== PUBLIC
// ============================== ABOUT
// Performs a c library fcntl on fd.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_fcntl() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_fcntl($fd, $cmd, $args)
{
$return_dio_fcntl = null;

// ========== DIO_FCNTL - BEGIN
// ===== ABOUT
// Performs a c library fcntl on fd
// ===== DESCRIPTION
// The dio_fcntl() function performs the operation specified by cmd on the file descriptor fd. Some commands require additional arguments args to be supplied.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_fcntl(resource $fd, int $cmd, mixed $args = ?): mixed
// ===== CODE
$return_dio_fcntl = dio_fcntl(

$fd, // resource fd - The file descriptor returned by dio_open().

$cmd, // int cmd - Can be one of the following operations:
// * F_SETLK  - Lock is set or cleared. If the lock is held by someone else dio_fcntl() returns -1.
// * F_SETLKW - like F_SETLK, but in case the lock is held by someone else, dio_fcntl() waits until the lock is released.
// * F_GETLK  - dio_fcntl() returns an associative array (as described below) if someone else prevents lock. If there is no obstruction key "type" will set to F_UNLCK.
// * F_DUPFD  - finds the lowest numbered available file descriptor greater than or equal to args and returns them.
// * F_SETFL  - Sets the file descriptors flags to the value specified by args, which can be O_APPEND, O_NONBLOCK or O_ASYNC. To use O_ASYNC you will need to use the PCNTL extension.

$args // mixed args - args is an associative array, when cmd is F_SETLK or F_SETLLW, with the following keys:
// * start  - offset where lock begins
// * length - size of locked area. zero means to end of file
// * whence - Where l_start is relative to: can be SEEK_SET, SEEK_END and SEEK_CUR
// * type   - type of lock: can be F_RDLCK (read lock), F_WRLCK (write lock) or F_UNLCK (unlock)

); // Return Values
// Returns the result of the C call.
// 
// [examples]
// Examples
// [example]
// Example #1 Setting and clearing a lock
// [php]
// 
// $fd = dio_open('/dev/ttyS0', O_RDWR);
// 
// if (dio_fcntl($fd, F_SETLK, Array("type"=>F_WRLCK)) == -1) {
//    // the file descriptor appears locked
//    echo "The lock can not be cleared. It is held by someone else.";
// } else {
//    echo "Lock successfully set/cleared";
// }
// 
// dio_close($fd);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is not implemented on Windows platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-29)
// URL: https://www.php.net/manual/en/function.dio-fcntl.php
// ========== DIO_FCNTL - END

// SYNTAX:
// mixed dio_fcntl(resource $fd, int $cmd, mixed $args)

return $return_dio_fcntl; // mixed
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_FCNTL
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Opens a file (creating it if necessary) at a lower level than the C library input/ouput stream functions allow.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_open() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_open($filename, $flags, $mode = 0)
{
$return_dio_open = null;

// ========== DIO_OPEN - BEGIN
// ===== ABOUT
// Opens a file (creating it if necessary) at a lower level than the C library input/ouput stream functions allow
// ===== DESCRIPTION
// dio_open() opens a file and returns a new file descriptor for it.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_open(string $filename, int $flags, int $mode = 0): resource
// ===== CODE
$return_dio_open = dio_open(

$filename, // string filename - The pathname of the file to open.

$flags, // int flags - The flags parameter is a bitwise-ORed value comprising flags from the following list. This value must include one of O_RDONLY, O_WRONLY, or O_RDWR. Additionally, it may include any combination of the other flags from this list.
// * O_RDONLY   - opens the file for read access.
// * O_WRONLY   - opens the file for write access.
// * O_RDWR     - opens the file for both reading and writing.
// * O_CREAT    - creates the file, if it doesn't already exist.
// * O_EXCL     - if both O_CREAT and O_EXCL are set and the file already exists, dio_open() will fail.
// * O_TRUNC    - if the file exists and is opened for write access, the file will be truncated to zero length.
// * O_APPEND   - write operations write data at the end of the file.
// * O_NONBLOCK - sets non blocking mode.
// * O_NOCTTY   - prevent the OS from assigning the opened file as the process's controlling terminal when opening a TTY device file.

$mode // int mode - If flags contains O_CREAT, mode will set the permissions of the file (creation permissions). mode is required for correct operation when O_CREAT is specified in flags and is ignored otherwise.
// The actual permissions assigned to the created file will be affected by the process's umask setting as per usual.

); // Return Values
// A file descriptor or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 Opening a file descriptor
// [php]
// 
// $fd = dio_open('/dev/ttyS0', O_RDWR | O_NOCTTY | O_NONBLOCK);
// 
// dio_close($fd);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-29)
// URL: https://www.php.net/manual/en/function.dio-open.php
// ========== DIO_OPEN - END

// SYNTAX:
// resource dio_open(string $filename, int $flags, int $mode = 0)

return $return_dio_open; // resource
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_OPEN
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_READ
// ============================== PUBLIC
// ============================== ABOUT
// Reads bytes from a file descriptor.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_read() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_read($fd, $len = 1024)
{
$return_dio_read = null;

// ========== DIO_READ - BEGIN
// ===== ABOUT
// Reads bytes from a file descriptor
// ===== DESCRIPTION
// The function dio_read() reads and returns len bytes from file with descriptor fd.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_read(resource $fd, int $len = 1024): string
// ===== CODE
$return_dio_read = dio_read(

$fd, // resource fd - The file descriptor returned by dio_open().

$len // int len - The number of bytes to read. If not specified, dio_read() reads 1K sized block.

); // Return Values
// The bytes read from fd.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.dio-read.php
// ========== DIO_READ - END

// SYNTAX:
// string dio_read(resource $fd, int $len = 1024)

return $return_dio_read; // string
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_READ
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Seeks to pos on fd from whence.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_seek() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== USING CONSTANTS (1)
// SEEK_SET - dio_seek()
// ============================== CODE
function php_filesystem_directio_dio_seek($fd, $pos, $whence = SEEK_SET)
{
$return_dio_seek = 0;

// ========== DIO_SEEK - BEGIN
// ===== ABOUT
// Seeks to pos on fd from whence
// ===== DESCRIPTION
// The function dio_seek() is used to change the file position of the given file descriptor.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_seek(resource $fd, int $pos, int $whence = SEEK_SET): int
// ===== CODE
$return_dio_seek = dio_seek(

$fd, // resource fd - The file descriptor returned by dio_open().

$pos, // int pos - The new position.

$whence // int whence - Specifies how the position pos should be interpreted:
// * SEEK_SET (default) - specifies that pos is specified from the beginning of the file.
// * SEEK_CUR           - Specifies that pos is a count of characters from the current file position. This count may be positive or negative.
// * SEEK_END           - Specifies that pos is a count of characters from the end of the file. A negative count specifies a position within the current extent of the file; a positive count specifies a position past the current end. If you set the position past the current end, and actually write data, you will extend the file with zeros up to that position.

); // Return Values
// int
// 
// [examples]
// Examples
// [example]
// Example #1 Positioning in a file
// [php]
// 
// $fd = dio_open('/dev/ttyS0', O_RDWR);
// 
// dio_seek($fd, 10, SEEK_SET);
// // position is now at 10 characters from the start of the file
// 
// dio_seek($fd, -2, SEEK_CUR);
// // position is now at 8 characters from the start of the file
// 
// dio_seek($fd, -5, SEEK_END);
// // position is now at 5 characters from the end of the file
// 
// dio_seek($fd, 10, SEEK_END);
// // position is now at 10 characters past the end of the file. 
// // The 10 characters between the end of the file and the current
// // position are filled with zeros.
// 
// dio_close($fd);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-29)
// URL: https://www.php.net/manual/en/function.dio-seek.php
// ========== DIO_SEEK - END

// SYNTAX:
// int dio_seek(resource $fd, int $pos, int $whence = SEEK_SET)

return $return_dio_seek; // int
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_SEEK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_STAT
// ============================== PUBLIC
// ============================== ABOUT
// Gets stat information about the file descriptor fd.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_stat() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_stat($fd)
{
$return_dio_stat = null;

// ========== DIO_STAT - BEGIN
// ===== ABOUT
// Gets stat information about the file descriptor fd
// ===== DESCRIPTION
// dio_stat() returns information about the given file descriptor.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_stat(resource $fd): array
// ===== CODE
$return_dio_stat = dio_stat(

$fd // resource fd - The file descriptor returned by dio_open().

); // Return Values
// Returns an associative array with the following keys:
// * "device"      - device
// * "inode"       - inode
// * "mode"        - mode
// * "nlink"       - number of hard links
// * "uid"         - user id
// * "gid"         - group id
// * "device_type" - device type (if inode device)
// * "size"        - total size in bytes
// * "blocksize"   - blocksize
// * "blocks"      - number of blocks allocated
// * "atime"       - time of last access
// * "mtime"       - time of last modification
// * "ctime"       - time of last change
// On error dio_stat() returns null.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.dio-stat.php
// ========== DIO_STAT - END

// SYNTAX:
// array dio_stat(resource $fd)

return $return_dio_stat; // array
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_STAT
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_TCSETATTR
// ============================== PUBLIC
// ============================== ABOUT
// Sets terminal attributes and baud rate for a serial port.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_tcsetattr() - PHP_4 >= PHP_4_3_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_tcsetattr($fd, $options)
{
$return_dio_tcsetattr = false;

// ========== DIO_TCSETATTR - BEGIN
// ===== ABOUT
// Sets terminal attributes and baud rate for a serial port
// ===== DESCRIPTION
// dio_tcsetattr() sets the terminal attributes and baud rate of the open fd.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_tcsetattr(resource $fd, array $options): bool
// ===== CODE
$return_dio_tcsetattr = dio_tcsetattr(

$fd, // resource fd - The file descriptor returned by dio_open().

$options // array options - The currently available options are:
// * 'baud'   - baud rate of the port - can be 38400,19200,9600,4800,2400,1800, 1200,600,300,200,150,134,110,75 or 50, default value is 9600.
// * 'bits'   - data bits - can be 8,7,6 or 5. Default value is 8.
// * 'stop'   - stop bits - can be 1 or 2. Default value is 1.
// * 'parity' - can be 0,1 or 2. Default value is 0.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Setting the baud rate on a serial port
// [php]
// 
// $fd = dio_open('/dev/ttyS0', O_RDWR | O_NOCTTY | O_NONBLOCK);
// 
// dio_fcntl($fd, F_SETFL, O_SYNC);
// 
// dio_tcsetattr($fd, array(
//   'baud' => 9600,
//   'bits' => 8,
//   'stop'  => 1,
//   'parity' => 0
// )); 
// 
// while (1) {
// 
//   $data = dio_read($fd, 256);
// 
//   if ($data) {
//       echo $data;
//   }
// } 
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is not implemented on Windows platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-29)
// URL: https://www.php.net/manual/en/function.dio-tcsetattr.php
// ========== DIO_TCSETATTR - END

// SYNTAX:
// bool dio_tcsetattr(resource $fd, array $options)

return $return_dio_tcsetattr; // bool
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_TCSETATTR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_TRUNCATE
// ============================== PUBLIC
// ============================== ABOUT
// Truncates file descriptor fd to offset bytes.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_truncate() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_truncate($fd, $offset)
{
$return_dio_truncate = false;

// ========== DIO_TRUNCATE - BEGIN
// ===== ABOUT
// Truncates file descriptor fd to offset bytes
// ===== DESCRIPTION
// dio_truncate() truncates a file to at most offset bytes in size.
// If the file previously was larger than this size, the extra data is lost. If the file previously was shorter, it is unspecified whether the file is left unchanged or is extended. In the latter case the extended part reads as zero bytes.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_truncate(resource $fd, int $offset): bool
// ===== CODE
$return_dio_truncate = dio_truncate(

$fd, // resource fd - The file descriptor returned by dio_open().

$offset // int offset - The offset in bytes.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: This function is not implemented on Windows platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.dio-truncate.php
// ========== DIO_TRUNCATE - END

// SYNTAX:
// bool dio_truncate(resource $fd, int $offset)

return $return_dio_truncate; // bool
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_TRUNCATE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_DIRECTIO_DIO_WRITE
// ============================== PUBLIC
// ============================== ABOUT
// Writes data to fd with optional truncation at length.
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// dio_write() - PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ============================== CODE
function php_filesystem_directio_dio_write($fd, $data, $len = 0)
{
$return_dio_write = 0;

// ========== DIO_WRITE - BEGIN
// ===== ABOUT
// Writes data to fd with optional truncation at length
// ===== DESCRIPTION
// dio_write() writes up to len bytes from data to file fd.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5 < PHP_5_1_0
// ===== SYNTAX
// dio_write(resource $fd, string $data, int $len = 0): int
// ===== CODE
$return_dio_write = dio_write(

$fd, // resource fd - The file descriptor returned by dio_open().

$data, // string data - The written data.

$len // int len - The length of data to write in bytes. If not specified, the function writes all the data to the specified file.

); // Return Values
// Returns the number of bytes written to fd.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/function.dio-write.php
// ========== DIO_WRITE - END

// SYNTAX:
// int dio_write(resource $fd, string $data, int $len = 0)

return $return_dio_write; // int
}
// ============================== END
// PHP_FILESYSTEM_DIRECTIO_DIO_WRITE
// ==============================


// ============================== END
//    PHP_FILESYSTEM_DIRECTIO    
// ==============================
?>