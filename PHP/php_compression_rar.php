<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_COMPRESSION_RAR - BEGIN
// PHP_COMPRESSION_RAR_RAR_WRAPPER_CACHE_STATS - string php_compression_rar_rar_wrapper_cache_stats()
// PHP_COMPRESSION_RAR_RARARCHIVE - bool|RarArchive|string|array|false|RarEntry|callable _CLOSE, _GETCOMMENT, _GETENTRIES, _GETENTRY, _ISBROKEN, _ISSOLID, _OPEN, _SETALLOWBROKEN, _TOSTRING
// PHP_COMPRESSION_RAR_RARENTRY - bool|RarEntry|string|int|resource|false _EXTRACT, _GETATTR, _GETCRC, _GETFILETIME, _GETHOSTOS, _GETMETHOD, _GETNAME, _GETPACKEDSIZE, _GETSTREAM, _GETUNPACKEDSIZE, _GETVERSION, _ISDIRECTORY, _ISENCRYPTED, _TOSTRING
// PHP_COMPRESSION_RAR_RAREXCEPTION - bool|RarException|void _ISUSINGEXCEPTIONS, _SETUSINGEXCEPTIONS
// PHP_COMPRESSION_RAR - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PECL_rar_3_0_0
// ============================== INSTALLATION
// NOT_BUNDLED (Rar is currently available through PECL > https://pecl.php.net/package/rar.)
// ============================== USING FUNCTIONS (1)
// rar_wrapper_cache_stats() - PECL_rar >= PECL_rar_3_0_0
// ============================== USING CLASSES (3)
// PHP_COMPRESSION_RAR_RARARCHIVE - PECL_rar_3_0_0
// PHP_COMPRESSION_RAR_RARENTRY - PECL_rar_2_0_0
// PHP_COMPRESSION_RAR_RAREXCEPTION - PECL_rar_2_0_0
// ============================== USING DATA_TYPES (11)
// string
// bool
// RarArchive - PECL_rar >= PECL_rar_2_0_0
// array
// false
// RarEntry - PECL_rar >= PECL_rar_0_1
// callable
// int
// resource
// RarException - PECL_rar >= PECL_rar_2_0_0
// void
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_COMPRESSION_RAR      
// ============================== ABOUT
// PHP Manual / Function Reference / Compression and Archive Extensions / Rar - Rar Archiving
// URL: https://www.php.net/manual/en/book.rar.php
// ============================== DESCRIPTION
// RAR_ARCHIVING
// 
// RAR_ARCHIVING - BEGIN
// Rar Archiving
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// RAR_FUNCTIONS
// THE_RARARCHIVE_CLASS
// THE_RARENTRY_CLASS
// THE_RAREXCEPTION_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Rar is a powerful and effective archiver created by Eugene Roshal. This extension gives you possibility to read Rar archives but doesn't support writing Rar archives, because this is not supported by the UnRar library and is directly prohibited by its license.
// More information about Rar and UnRar can be found at > http://www.rarlabs.com/.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/intro.rar.php
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
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Rar is currently available through PECL > https://pecl.php.net/package/rar.
// Also you can use the PECL installer to install the Rar extension, using the following command: pecl -v install rar.
// [example]
// You can always download the tar.gz package and install Rar by hand:
// Example #1 Rar installation
// [code]
// gunzip rar-xxx.tgz
// tar -xvf rar-xxx.tar
// cd rar-xxx
// phpize
// ./configure && make && make install
// [/code]
// [/example]
// 
// Windows users will enable php_rar.dll inside of php.ini in order to use these functions. A DLL for this PECL extension is currently unavailable. See also the building on Windows section.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration 
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension registers three internal classes: the archive representations returned by rar_open() – RarArchive, the entry representations returned by rar_list() and rar_entry_get() – RarEntry and the exception type RarException.
// This extension also register a stream resource, called "rar" and a URL wrapper called "rar wrapper" and registered under the prefix "rar".
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// RAR_HOST_MSDOS (int) - Use RarEntry::HOST_MSDOS instead.
// RAR_HOST_OS2 (int)   - Use RarEntry::HOST_OS2 instead.
// RAR_HOST_WIN32 (int) - Use RarEntry::HOST_WIN32 instead.
// RAR_HOST_UNIX (int)  - Use RarEntry::HOST_UNIX instead.
// RAR_HOST_BEOS (int)  - Use RarEntry::HOST_BEOS instead.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// See also the examples under rar:// wrapper.
// 
// [example]
// Example #1 On-the-fly decompression
// [php]
// 
// if (!array_key_exists("i", $_GET) || !is_numeric($_GET["i"]))
//     die("Index unspecified or non-numeric");
// $index = (int) $_GET["i"];
//     
// $arch = RarArchive::open("example.rar");
// if ($arch === FALSE)
//     die("Cannot open example.rar");
// 
// $entries = $arch->getEntries();
// if ($entries === FALSE)
//     die("Cannot retrieve entries");
// 
// if (!array_key_exists($index, $entries))
//     die("No such index: $index");
// 
// $orfilename = $entries[$index]->getName(); //UTF-8 encoded
// 
// $filesize = $entries[$index]->getUnpackedSize();
// 
// /* you could check HTTP_IF_MODIFIED_SINCE here and compare with
//  * $entries[$index]->getFileTime(). You could also send a
//  * "Last modified" header */
// 
// $fp = $entries[$index]->getStream();
// if ($fp === FALSE)
//     die("Cannot open file with index $index insided the archive.");
// 
// $arch->close(); //no longer needed; stream is independent
// 
// function detectUserAgent() {
//     if (!array_key_exists('HTTP_USER_AGENT', $_SERVER))
//         return "Other";
//     
//     $uas = $_SERVER['HTTP_USER_AGENT'];
//     if (preg_match("@Opera/@", $uas))
//         return "Opera";
//     if (preg_match("@Firefox/@", $uas))
//         return "Firefox";
//     if (preg_match("@Chrome/@", $uas))
//         return "Chrome";
//     if (preg_match("@MSIE ([0-9.]+);@", $uas, $matches)) {
//         if (((float)$matches[1]) >= 7.0)
//             return "IE";
//     }
//     
//     return "Other";
// }
// 
// /*
//  * We have 3 options:
//  * - For FF and Opera, which support RFC 2231, use that format.
//  * - For IE and Chrome, use attwithfnrawpctenclong
//  *   (http://greenbytes.de/tech/tc2231/#attwithfnrawpctenclong)
//  * - For the others, convert to ISO-8859-1, if possible
//  */
// $formatRFC2231 = 'Content-Disposition: attachment; filename*=UTF-8\'\'%s';
// $formatDef = 'Content-Disposition: attachment; filename="%s"';
// 
// switch (detectUserAgent()) {
//     case "Opera":
//     case "Firefox":
//         $orfilename = rawurlencode($orfilename);
//         $format = $formatRFC2231;
//         break;
// 
//     case "IE":
//     case "Chrome":
//         $orfilename = rawurlencode($orfilename);
//         $format = $formatDef;
//         break;
//     default:
//         if (function_exists('iconv'))
//             $orfilename =
//                 @iconv("UTF-8", "ISO-8859-1//TRANSLIT", $orfilename);
//         $format = $formatDef;
// }
// 
// header(sprintf($format, $orfilename));
// //cannot send error messages from now on (headers already sent)
// 
// //replace by real content type, perhaps infering from the file extension
// $contentType = "application/octet-stream";
// header("Content-Type: $contentType");
// 
// header("Content-Transfer-Encoding: binary");
// 
// header("Content-Length: $filesize");
// 
// if ($_SERVER['REQUEST_METHOD'] == "HEAD")
//     die();
//     
// while (!feof($fp)) {
//     $s = @fread($fp, 8192);
//     if ($s === false)
//         break; //useless to send error messages
//   
//     echo $s;
// }
// [/php]
// [/example]
// This example opens a RAR file and presents the requested file inside the RAR archive for download to the client.
// [example]
// Example #2 RAR extension filesystem extraction example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Can't open Rar archive");
// 
// $entries = rar_list($rar_file);
// 
// foreach ($entries as $entry) {
//     echo 'Filename: ' . $entry->getName() . "\n";
//     echo 'Packed size: ' . $entry->getPackedSize() . "\n";
//     echo 'Unpacked size: ' . $entry->getUnpackedSize() . "\n";
// 
//     $entry->extract('/dir/extract/to/');
// }
// 
// rar_close($rar_file);
// 
// [/php]
// [/example]
// This example opens a RAR file archive and extracts each entry to the specified directory.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/rar.examples.php
// EXAMPLES - END
// 
// RAR_FUNCTIONS - BEGIN
// Rar Functions
// 
// Table of Contents
// * rar_wrapper_cache_stats - Cache hits and misses for the URL wrapper
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/ref.rar.php
// RAR_FUNCTIONS - END
// 
// THE_RARARCHIVE_CLASS - BEGIN
// The RarArchive class
// 
// PECL_rar >= PECL_rar_2_0_0
// 
// Introduction
// This class represents a RAR archive, which may be formed by several volumes (parts) and which contains a number of RAR entries (i.e., files, directories and other special objects such as symbolic links).
// Objects of this class can be traversed, yielding the entries stored in the respective RAR archive. Those entries can also be obtained through RarArchive::getEntry() and RarArchive::getEntries().
// 
// Class synopsis
// [code]
// final class RarArchive implements Traversable {
// 
//    /* Methods */
//    public close(): bool
//    public getComment(): string
//    public getEntries(): array|false
//    public getEntry(string $entryname): RarEntry|false
//    public isBroken(): bool
//    public isSolid(): bool
//    public static open(string $filename, string $password = NULL, callable $volume_callback = NULL): RarArchive|false
//    public setAllowBroken(bool $allow_broken): bool
//    public __toString(): string
// }
// [/code]
// 
// Table of Contents
// * RarArchive::close          - Close RAR archive and free all resources
// * RarArchive::getComment     - Get comment text from the RAR archive
// * RarArchive::getEntries     - Get full list of entries from the RAR archive
// * RarArchive::getEntry       - Get entry object from the RAR archive
// * RarArchive::isBroken       - Test whether an archive is broken (incomplete)
// * RarArchive::isSolid        - Check whether the RAR archive is solid
// * RarArchive::open           - Open RAR archive
// * RarArchive::setAllowBroken - Whether opening broken archives is allowed
// * RarArchive::__toString     - Get text representation
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.rararchive.php
// THE_RARARCHIVE_CLASS - END
// 
// THE_RARENTRY_CLASS - BEGIN
// The RarEntry class
// 
// PECL_rar >= PECL_rar_0_1
// 
// Introduction
// A RAR entry, representing a directory or a compressed file inside a RAR archive.
// 
// Class synopsis
// [code]
// final class RarEntry {
// 
//    /* Constants */
//    const int HOST_MSDOS = 0;
//    const int HOST_OS2 = 1;
//    const int HOST_WIN32 = 2;
//    const int HOST_UNIX = 3;
//    const int HOST_MACOS = 4;
//    const int HOST_BEOS = 5;
//    const int ATTRIBUTE_WIN_READONLY = 1;
//    const int ATTRIBUTE_WIN_HIDDEN = 2;
//    const int ATTRIBUTE_WIN_SYSTEM = 4;
//    const int ATTRIBUTE_WIN_DIRECTORY = 16;
//    const int ATTRIBUTE_WIN_ARCHIVE = 32;
//    const int ATTRIBUTE_WIN_DEVICE = 64;
//    const int ATTRIBUTE_WIN_NORMAL = 128;
//    const int ATTRIBUTE_WIN_TEMPORARY = 256;
//    const int ATTRIBUTE_WIN_SPARSE_FILE = 512;
//    const int ATTRIBUTE_WIN_REPARSE_POINT = 1024;
//    const int ATTRIBUTE_WIN_COMPRESSED = 2048;
//    const int ATTRIBUTE_WIN_OFFLINE = 4096;
//    const int ATTRIBUTE_WIN_NOT_CONTENT_INDEXED = 8192;
//    const int ATTRIBUTE_WIN_ENCRYPTED = 16384;
//    const int ATTRIBUTE_WIN_VIRTUAL = 65536;
//    const int ATTRIBUTE_UNIX_WORLD_EXECUTE = 1;
//    const int ATTRIBUTE_UNIX_WORLD_WRITE = 2;
//    const int ATTRIBUTE_UNIX_WORLD_READ = 4;
//    const int ATTRIBUTE_UNIX_GROUP_EXECUTE = 8;
//    const int ATTRIBUTE_UNIX_GROUP_WRITE = 16;
//    const int ATTRIBUTE_UNIX_GROUP_READ = 32;
//    const int ATTRIBUTE_UNIX_OWNER_EXECUTE = 64;
//    const int ATTRIBUTE_UNIX_OWNER_WRITE = 128;
//    const int ATTRIBUTE_UNIX_OWNER_READ = 256;
//    const int ATTRIBUTE_UNIX_STICKY = 512;
//    const int ATTRIBUTE_UNIX_SETGID = 1024;
//    const int ATTRIBUTE_UNIX_SETUID = 2048;
//    const int ATTRIBUTE_UNIX_FINAL_QUARTET = 61440;
//    const int ATTRIBUTE_UNIX_FIFO = 4096;
//    const int ATTRIBUTE_UNIX_CHAR_DEV = 8192;
//    const int ATTRIBUTE_UNIX_DIRECTORY = 16384;
//    const int ATTRIBUTE_UNIX_BLOCK_DEV = 24576;
//    const int ATTRIBUTE_UNIX_REGULAR_FILE = 32768;
//    const int ATTRIBUTE_UNIX_SYM_LINK = 40960;
//    const int ATTRIBUTE_UNIX_SOCKET = 49152;
// 
//    /* Methods */
//    public extract(
//        string $dir,
//        string $filepath = "",
//        string $password = NULL,
//        bool $extended_data = false
//    ): bool
//    public getAttr(): int
//    public getCrc(): string
//    public getFileTime(): string
//    public getHostOs(): int
//    public getMethod(): int
//    public getName(): string
//    public getPackedSize(): int
//    public getStream(string $password = ?): resource|false
//    public getUnpackedSize(): int
//    public getVersion(): int
//    public isDirectory(): bool
//    public isEncrypted(): bool
//    public __toString(): string
// }
// [/code]
// 
// Predefined Constants
// RarEntry::HOST_MSDOS                        - If the return value of RarEntry::getHostOs() equals this constant, MS-DOS was used to add this entry. Use instead of RAR_HOST_MSDOS.
// RarEntry::HOST_OS2                          - If the return value of RarEntry::getHostOs() equals this constant, OS/2 was used to add this entry. Intended to replace RAR_HOST_OS2.
// RarEntry::HOST_WIN32                        - If the return value of RarEntry::getHostOs() equals this constant, Microsoft Windows was used to add this entry. Intended to replace RAR_HOST_WIN32.
// RarEntry::HOST_UNIX                         - If the return value of RarEntry::getHostOs() equals this constant, an unspecified UNIX OS was used to add this entry. Intended to replace RAR_HOST_UNIX.
// RarEntry::HOST_MACOS                        - If the return value of RarEntry::getHostOs() equals this constant, Mac OS was used to add this entry.
// RarEntry::HOST_BEOS                         - If the return value of RarEntry::getHostOs() equals this constant, BeOS was used to add this entry. Intended to replace RAR_HOST_BEOS.
// RarEntry::ATTRIBUTE_WIN_READONLY            - Bit that represents a Windows entry with a read-only attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_HIDDEN              - Bit that represents a Windows entry with a hidden attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_SYSTEM              - Bit that represents a Windows entry with a system attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_DIRECTORY           - Bit that represents a Windows entry with a directory attribute (entry is a directory). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows. See also RarEntry::isDirectory(), which also works with entries that were not added in WinRAR.
// RarEntry::ATTRIBUTE_WIN_ARCHIVE             - Bit that represents a Windows entry with an archive attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_DEVICE              - Bit that represents a Windows entry with a device attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_NORMAL              - Bit that represents a Windows entry with a normal file attribute (entry is NOT a directory). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows. See also RarEntry::isDirectory(), which also works with entries that were not added in WinRAR.
// RarEntry::ATTRIBUTE_WIN_TEMPORARY           - Bit that represents a Windows entry with a temporary attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_SPARSE_FILE         - Bit that represents a Windows entry with a sparse file attribute (file is an NTFS sparse file). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_REPARSE_POINT       - Bit that represents a Windows entry with a reparse point attribute (entry is an NTFS reparse point, e.g. a directory junction or a mount file system). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_COMPRESSED          - Bit that represents a Windows entry with a compressed attribute (NTFS only). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_OFFLINE             - Bit that represents a Windows entry with an offline attribute (entry is offline and not accessible). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_NOT_CONTENT_INDEXED - Bit that represents a Windows entry with a not content indexed attribute (entry is to be indexed). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_ENCRYPTED           - Bit that represents a Windows entry with an encrypted attribute (NTFS only). To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_WIN_VIRTUAL             - Bit that represents a Windows entry with a virtual attribute. To be used with RarEntry::getAttr() on entries whose host OS is Microsoft Windows.
// RarEntry::ATTRIBUTE_UNIX_WORLD_EXECUTE      - Bit that represents a UNIX entry that is world executable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_WORLD_WRITE        - Bit that represents a UNIX entry that is world writable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_WORLD_READ         - Bit that represents a UNIX entry that is world readable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_GROUP_EXECUTE      - Bit that represents a UNIX entry that is group executable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_GROUP_WRITE        - Bit that represents a UNIX entry that is group writable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_GROUP_READ         - Bit that represents a UNIX entry that is group readable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_OWNER_EXECUTE      - Bit that represents a UNIX entry that is owner executable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_OWNER_WRITE        - Bit that represents a UNIX entry that is owner writable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_OWNER_READ         - Bit that represents a UNIX entry that is owner readable. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_STICKY             - Bit that represents the UNIX sticky bit. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_SETGID             - Bit that represents the UNIX setgid attribute. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_SETUID             - Bit that represents the UNIX setuid attribute. To be used with RarEntry::getAttr() on entries whose host OS is UNIX.
// RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET      - Mask to isolate the last four bits (nibble) of UNIX attributes (_S_IFMT, the type of file mask). To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constants RarEntry::ATTRIBUTE_UNIX_FIFO, RarEntry::ATTRIBUTE_UNIX_CHAR_DEV, RarEntry::ATTRIBUTE_UNIX_DIRECTORY, RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV, RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE, RarEntry::ATTRIBUTE_UNIX_SYM_LINK and RarEntry::ATTRIBUTE_UNIX_SOCKET.
// RarEntry::ATTRIBUTE_UNIX_FIFO               - Unix FIFOs will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET.
// RarEntry::ATTRIBUTE_UNIX_CHAR_DEV           - Unix character devices will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET.
// RarEntry::ATTRIBUTE_UNIX_DIRECTORY          - Unix directories will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET. See also RarEntry::isDirectory(), which also works with entries that were added in other operating systems.
// RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV          - Unix block devices will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET.
// RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE       - Unix regular files (not directories) will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET. See also RarEntry::isDirectory(), which also works with entries that were added in other operating systems.
// RarEntry::ATTRIBUTE_UNIX_SYM_LINK           - Unix symbolic links will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET.
// RarEntry::ATTRIBUTE_UNIX_SOCKET             - Unix sockets will have attributes whose last four bits have this value. To be used with RarEntry::getAttr() on entries whose host OS is UNIX and with the constant RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET.
// 
// Table of Contents
// * RarEntry::extract         - Extract entry from the archive
// * RarEntry::getAttr         - Get attributes of the entry
// * RarEntry::getCrc          - Get CRC of the entry
// * RarEntry::getFileTime     - Get entry last modification time
// * RarEntry::getHostOs       - Get entry host OS
// * RarEntry::getMethod       - Get pack method of the entry
// * RarEntry::getName         - Get name of the entry
// * RarEntry::getPackedSize   - Get packed size of the entry
// * RarEntry::getStream       - Get file handler for entry
// * RarEntry::getUnpackedSize - Get unpacked size of the entry
// * RarEntry::getVersion      - Get minimum version of RAR program required to unpack the entry
// * RarEntry::isDirectory     - Test whether an entry represents a directory
// * RarEntry::isEncrypted     - Test whether an entry is encrypted
// * RarEntry::__toString      - Get text representation of entry
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.rarentry.php
// THE_RARENTRY_CLASS - END
// 
// THE_RAREXCEPTION_CLASS - BEGIN
// The RarException class
// 
// PECL_rar >= PECL_rar_2_0_0
// 
// Introduction
// This class serves two purposes: it is the type of the exceptions thrown by the RAR extension functions and methods and it allows, through static methods to query and define the error behaviour of the extension, i.e., whether exceptions are thrown or only warnings are emitted.
// The following error codes are used:
// * -1 - error outside UnRAR library
// * 11 - insufficient memory
// * 12 - bad data
// * 13 - bad archive
// * 14 - unknown format
// * 15 - file open error
// * 16 - file create error
// * 17 - file close error
// * 18 - read error
// * 19 - write error
// * 20 - buffer too small
// * 21 - unknown RAR error
// * 22 - password required but not given
// 
// Class synopsis
// [code]
// final class RarException extends Exception {
// 
//    /* Methods */
//    public static isUsingExceptions(): bool
//    public static setUsingExceptions(bool $using_exceptions): void
// 
//    /* Inherited methods */
//    final public Exception::getMessage(): string
//    final public Exception::getPrevious(): ?Throwable
//    final public Exception::getCode(): int
//    final public Exception::getFile(): string
//    final public Exception::getLine(): int
//    final public Exception::getTrace(): array
//    final public Exception::getTraceAsString(): string
//    public Exception::__toString(): string
//    private Exception::__clone(): void
// }
// [/code]
// 
// Table of Contents
// * RarException::isUsingExceptions  - Check whether error handling with exceptions is in use
// * RarException::setUsingExceptions - Activate and deactivate error handling with exceptions
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.rarexception.php
// THE_RAREXCEPTION_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/book.rar.php
// RAR_ARCHIVING - END
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RAR_WRAPPER_CACHE_STATS
// ============================== PUBLIC
// ============================== ABOUT
// Cache hits and misses for the URL wrapper.
// ============================== SUPPORT
// PECL_rar_3_0_0
// ============================== USING FUNCTIONS (1)
// rar_wrapper_cache_stats() - PECL_rar >= PECL_rar_3_0_0
// ============================== CODE
function php_compression_rar_rar_wrapper_cache_stats()
{
$return_rar_wrapper_cache_stats = null;

// ========== RAR_WRAPPER_CACHE_STATS - BEGIN
// ===== ABOUT
// Cache hits and misses for the URL wrapper
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_3_0_0
// ===== SYNTAX
// rar_wrapper_cache_stats(): string
// ===== CODE
$return_rar_wrapper_cache_stats = rar_wrapper_cache_stats(

// This function has no parameters.

); // Return Values
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.rar-wrapper-cache-stats.php
// ========== RAR_WRAPPER_CACHE_STATS - END

// SYNTAX:
// string rar_wrapper_cache_stats()

return $return_rar_wrapper_cache_stats; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RAR_WRAPPER_CACHE_STATS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE
// ============================== PUBLIC
// PHP_COMPRESSION_RAR_RARARCHIVE_CLOSE - bool php_compression_rar_rararchive_close(RarArchive $rararchive)
// PHP_COMPRESSION_RAR_RARARCHIVE_GETCOMMENT - string php_compression_rar_rararchive_getcomment(RarArchive $rararchive)
// PHP_COMPRESSION_RAR_RARARCHIVE_GETENTRIES - array|false php_compression_rar_rararchive_getentries(RarArchive $rararchive)
// PHP_COMPRESSION_RAR_RARARCHIVE_GETENTRY - RarEntry|false php_compression_rar_rararchive_getentry(RarArchive $rararchive, string $entryname)
// PHP_COMPRESSION_RAR_RARARCHIVE_ISBROKEN - bool php_compression_rar_rararchive_isbroken(RarArchive $rararchive)
// PHP_COMPRESSION_RAR_RARARCHIVE_ISSOLID - bool php_compression_rar_rararchive_issolid(RarArchive $rararchive)
// PHP_COMPRESSION_RAR_RARARCHIVE_OPEN - RarArchive|false php_compression_rar_rararchive_open(RarArchive $rararchive, string $filename, string $password = NULL, callable $volume_callback = NULL)
// PHP_COMPRESSION_RAR_RARARCHIVE_SETALLOWBROKEN - bool php_compression_rar_rararchive_setallowbroken(RarArchive $rararchive, bool $allow_broken)
// PHP_COMPRESSION_RAR_RARARCHIVE_TOSTRING - string php_compression_rar_rararchive_tostring(RarArchive $rararchive)
// ============================== SUPPORT
// PECL_rar_3_0_0
// ============================== USING SUBCLASSES (9)
// RarArchive::close() - PECL_rar >= PECL_rar_2_0_0
// RarArchive::getComment() - PECL_rar >= PECL_rar_2_0_0
// RarArchive::getEntries() - PECL_rar >= PECL_rar_2_0_0
// RarArchive::getEntry() - PECL_rar >= PECL_rar_2_0_0
// RarArchive::isBroken() - PECL_rar >= PECL_rar_3_0_0
// RarArchive::isSolid() - PECL_rar >= PECL_rar_2_0_0
// RarArchive::open() - PECL_rar >= PECL_rar_2_0_0
// RarArchive::setAllowBroken() - PECL_rar >= PECL_rar_3_0_0
// RarArchive::__toString() - PECL_rar >= PECL_rar_2_0_0
// ============================== USING DATA_TYPES (7)
// bool
// RarArchive - PECL_rar >= PECL_rar_2_0_0
// string
// array
// false
// RarEntry - PECL_rar >= PECL_rar_0_1
// callable
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close RAR archive and free all resources.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::close() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_close($rararchive)
{
$return_rararchive_close = false;

// ========== RARARCHIVE_CLOSE - BEGIN
// ===== ABOUT
// Close RAR archive and free all resources
// ===== DESCRIPTION
// Close RAR archive and free all allocated resources.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::close(): bool
// 
// Procedural style:
// rar_close(RarArchive $rarfile): bool
// ===== CODE
$return_rararchive_close = $rararchive->close(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version        - Description
// PECL rar 2.0.0 - The RAR entries returned by RarArchive::getEntry() and RarArchive::getEntries() are now invalidated when calling this method. This means that all instance methods called for such entries and not guaranteed to succeed.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $rar_arch = RarArchive::open('latest_winrar.rar');
// echo $rar_arch."\n";
// $rar_arch->close();
// echo $rar_arch."\n";
// [/php]
// The above example will output something similar to:
// [result]
// RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar"
// RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar" (closed)
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $rar_arch = rar_open('latest_winrar.rar');
// echo $rar_arch."\n";
// rar_close($rar_arch);
// echo $rar_arch."\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.close.php
// ========== RARARCHIVE_CLOSE - END

// SYNTAX:
// bool RarArchive::close()

return $return_rararchive_close; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_CLOSE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_GETCOMMENT
// ============================== PUBLIC
// ============================== ABOUT
// Get comment text from the RAR archive.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::getComment() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_getcomment($rararchive)
{
$return_rararchive_getcomment = null;

// ========== RARARCHIVE_GETCOMMENT - BEGIN
// ===== ABOUT
// Get comment text from the RAR archive
// ===== DESCRIPTION
// Get the (global) comment stored in the RAR archive. It may be up to 64 KiB long.
// Note: This extension does not support comments at the entry level.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::getComment(): string
// 
// Procedural style:
// rar_comment_get(RarArchive $rarfile): string
// ===== CODE
$return_rararchive_getcomment = $rararchive->getComment(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

); // Return Values
// Returns the comment or null if there is none.
// Note: RAR has currently no support for unicode comments. The encoding of the result of this function is not specified, but it will probably be Windows-1252.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $rar_arch = RarArchive::open('commented.rar'); 
// echo $rar_arch->getComment();
// [/php]
// The above example will output something similar to:
// [result]
// This is the comment of the file commented.rar.
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $rar_arch = rar_open('commented.rar'); 
// echo rar_comment_get($rar_arch);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.getcomment.php
// ========== RARARCHIVE_GETCOMMENT - END

// SYNTAX:
// string RarArchive::getComment()

return $return_rararchive_getcomment; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_GETCOMMENT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_GETENTRIES
// ============================== PUBLIC
// ============================== ABOUT
// Get full list of entries from the RAR archive.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::getEntries() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_getentries($rararchive)
{
$return_rararchive_getentries = false;

// ========== RARARCHIVE_GETENTRIES - BEGIN
// ===== ABOUT
// Get full list of entries from the RAR archive
// ===== DESCRIPTION
// Get entries list (files and directories) from the RAR archive.
// Note: If the archive has entries with the same name, this method, together with RarArchive foreach iteration and array-like access with numeric indexes, are the only ones to access all the entries (i.e., RarArchive::getEntry() and the rar:// wrapper are insufficient).
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::getEntries(): array|false
// 
// Procedural style:
// rar_list(RarArchive $rarfile): array|false
// ===== CODE
$return_rararchive_getentries = $rararchive->getEntries(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

); // Return Values
// rar_list() returns array of RarEntry objects or false on failure.
// 
// Changelog
// Version        - Description
// PECL rar 3.0.0 - Support for RAR archives with repeated entry names is no longer defective.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $rar_arch = RarArchive::open('solid.rar');
// if ($rar_arch === FALSE)
//     die("Could not open RAR archive.");
// 
// $rar_entries = $rar_arch->getEntries();
// if ($rar_entries === FALSE)
//     die("Could not retrieve entries.");
// 
// echo "Found " . count($rar_entries) . " entries.\n";
// 
// foreach ($rar_entries as $e) {
//     echo $e;
//     echo "\n";
// }
// $rar_arch->close();
// [/php]
// The above example will output something similar to:
// [result]
// Found 2 entries.
// RarEntry for file "tese.txt" (23b93a7a)
// RarEntry for file "unrardll.txt" (2ed64b6e)
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $rar_arch = rar_open('solid.rar');
// if ($rar_arch === FALSE)
//     die("Could not open RAR archive.");
// 
// $rar_entries = rar_list($rar_arch);
// if ($rar_entries === FALSE)
//     die("Could retrieve entries.");
// 
// echo "Found " . count($rar_entries) . " entries.\n";
// 
// foreach ($rar_entries as $e) {
//     echo $e;
//     echo "\n";
// }
// rar_close($rar_arch);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.getentries.php
// ========== RARARCHIVE_GETENTRIES - END

// SYNTAX:
// array|false RarArchive::getEntries()

return $return_rararchive_getentries; // array|false
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_GETENTRIES
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_GETENTRY
// ============================== PUBLIC
// ============================== ABOUT
// Get entry object from the RAR archive.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::getEntry() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_getentry($rararchive, $entryname)
{
$return_rararchive_getentry = false;

// ========== RARARCHIVE_GETENTRY - BEGIN
// ===== ABOUT
// Get entry object from the RAR archive
// ===== DESCRIPTION
// Get entry object (file or directory) from the RAR archive.
//  Note:
//  You can also get entry objects using RarArchive::getEntries().
//  Note that a RAR archive can have multiple entries with the same name; this method will retrieve only the first.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::getEntry(string $entryname): RarEntry|false
// 
// Procedural style:
// rar_entry_get(RarArchive $rarfile, string $entryname): RarEntry|false
// ===== CODE
$return_rararchive_getentry = $rararchive->getEntry(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

$entryname // string entryname - Path to the entry within the RAR archive.
// Note: The path must be the same returned by RarEntry::getName().

); // Return Values
// Returns the matching RarEntry object or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $rar_arch = RarArchive::open('solid.rar');
// if ($rar_arch === FALSE)
//     die("Could not open RAR archive.");
// $rar_entry = $rar_arch->getEntry('tese.txt');
// if ($rar_entry === FALSE)
//     die("Could not get such entry");
// echo get_class($rar_entry)."\n";
// echo $rar_entry;
// $rar_arch->close();
// [/php]
// The above example will output something similar to:
// [result]
// RarEntry
// RarEntry for file "tese.txt" (23b93a7a)
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $rar_arch = rar_open('solid.rar');
// if ($rar_arch === FALSE)
//     die("Could not open RAR archive.");
// $rar_entry = rar_entry_get($rar_arch, 'tese.txt');
// if ($rar_entry === FALSE)
//     die("Could not get such entry");
// echo get_class($rar_entry)."\n";
// echo $rar_entry;
// rar_close($rar_arch);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.getentry.php
// ========== RARARCHIVE_GETENTRY - END

// SYNTAX:
// RarEntry|false RarArchive::getEntry(string $entryname)

return $return_rararchive_getentry; // RarEntry|false
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_GETENTRY
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_ISBROKEN
// ============================== PUBLIC
// ============================== ABOUT
// Test whether an archive is broken (incomplete).
// ============================== SUPPORT
// PECL_rar_3_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::isBroken() - PECL_rar >= PECL_rar_3_0_0
// ============================== CODE
function php_compression_rar_rararchive_isbroken($rararchive)
{
$return_rararchive_isbroken = false;

// ========== RARARCHIVE_ISBROKEN - BEGIN
// ===== ABOUT
// Test whether an archive is broken (incomplete)
// ===== DESCRIPTION
// This function determines whether an archive is incomplete, i.e., if a volume is missing or a volume is truncated.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_3_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::isBroken(): bool
// 
// Procedural style:
// rar_broken_is(RarArchive $rarfile): bool
// ===== CODE
$return_rararchive_isbroken = $rararchive->isBroken(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

); // Return Values
// Returns true if the archive is broken, false otherwise. This function may also return false if the passed file has already been closed. The only way to tell the two cases apart is to enable exceptions with RarException::setUsingExceptions(); however, this should be unnecessary as a program should not operate on closed files.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// function retnull() { return null; }
// $file = dirname(__FILE__) . "/multi_broken.part1.rar";
// // Third argument is used to omit notice
// $arch = RarArchive::open($file, null, 'retnull');
// var_dump($arch->isBroken());
// [/php]
// The above example will output something similar to:
// [result]
// bool(true)
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// function retnull() { return null; }
// $file = dirname(__FILE__) . "/multi_broken.part1.rar";
// // Third argument is used to omit notice
// $arch = rar_open($file, null, 'retnull');
// var_dump(rar_broken_is($arch));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.isbroken.php
// ========== RARARCHIVE_ISBROKEN - END

// SYNTAX:
// bool RarArchive::isBroken()

return $return_rararchive_isbroken; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_ISBROKEN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_ISSOLID
// ============================== PUBLIC
// ============================== ABOUT
// Check whether the RAR archive is solid.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::isSolid() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_issolid($rararchive)
{
$return_rararchive_issolid = false;

// ========== RARARCHIVE_ISSOLID - BEGIN
// ===== ABOUT
// Check whether the RAR archive is solid
// ===== DESCRIPTION
// Check whether the RAR archive is solid. Individual file extraction is slower on solid archives.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::isSolid(): bool
// 
// Procedural style:
// rar_solid_is(RarArchive $rarfile): bool
// ===== CODE
$return_rararchive_issolid = $rararchive->isSolid(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

); // Return Values
// Returns true if the archive is solid, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $arch1 = RarArchive::open("store_method.rar");
// $arch2 = RarArchive::open("solid.rar");
// echo "$arch1: " . ($arch1->isSolid()?'yes':'no') ."\n";
// echo "$arch2: " . ($arch2->isSolid()?'yes':'no') . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// RAR Archive "C:\php_rar\trunk\tests\store_method.rar": no
// RAR Archive "C:\php_rar\trunk\tests\solid.rar": yes
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $arch1 = rar_open("store_method.rar");
// $arch2 = rar_open("solid.rar");
// echo "$arch1: " . (rar_solid_is($arch1)?'yes':'no') ."\n";
// echo "$arch2: " . (rar_solid_is($arch2)?'yes':'no') . "\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.issolid.php
// ========== RARARCHIVE_ISSOLID - END

// SYNTAX:
// bool RarArchive::isSolid()

return $return_rararchive_issolid; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_ISSOLID
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Open RAR archive.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::open() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_open($rararchive, $filename, $password = NULL, $volume_callback = NULL)
{
$return_rararchive_open = false;

// ========== RARARCHIVE_OPEN - BEGIN
// ===== ABOUT
// Open RAR archive
// ===== DESCRIPTION
// Open specified RAR archive and return RarArchive instance representing it.
// Note: If opening a multi-volume archive, the path of the first volume should be passed as the first parameter. Otherwise, not all files will be shown. This is by design.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public static RarArchive::open(string $filename, string $password = NULL, callable $volume_callback = NULL): RarArchive|false
// 
// Procedural style:
// rar_open(string $filename, string $password = NULL, callable $volume_callback = NULL): RarArchive|false
// ===== CODE
$return_rararchive_open = $rararchive->open(

$filename, // string filename - Path to the Rar archive.

$password, // string password - A plain password, if needed to decrypt the headers. It will also be used by default if encrypted files are found. Note that the files may have different passwords in respect to the headers and among them.

$volume_callback // callable volume_callback - A function that receives one parameter – the path of the volume that was not found – and returns a string with the correct path for such volume or null if such volume does not exist or is not known. The programmer should ensure the passed function doesn't cause loops as this function is called repeatedly if the path returned in a previous call did not correspond to the needed volume. Specifying this parameter omits the notice that would otherwise be emitted whenever a volume is not found; an implementation that only returns null can therefore be used to merely omit such notices.
// Warning: Prior to version 2.0.0, this function would not handle relative paths correctly. Use realpath() as a workaround.

); // Return Values
// Returns the requested RarArchive instance or false on failure.
// 
// Changelog
// Version        - Description
// PECL rar 3.0.0 - volume_callback was added.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $rar_arch = RarArchive::open('encrypted_headers.rar', 'samplepassword');
// if ($rar_arch === FALSE)
//     die("Failed opening file");
//     
// $entries = $rar_arch->getEntries();
// if ($entries === FALSE)
//     die("Failed fetching entries");
// 
// echo "Found " . count($entries) . " files.\n";
// 
// if (empty($entries))
//     die("No valid entries found.");
//     
// $stream = reset($entries)->getStream();
// if ($stream === FALSE)
//     die("Failed opening first file");
// 
// $rar_arch->close();
// 
// echo "Content of first one follows:\n";
// echo stream_get_contents($stream);
// 
// fclose($stream);
// [/php]
// The above example will output something similar to:
// [result]
// Found 2 files.
// Content of first one follows:
// Encrypted file 1 contents.
// [/result]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $rar_arch = rar_open('encrypted_headers.rar', 'samplepassword');
// if ($rar_arch === FALSE)
//     die("Failed opening file");
//     
// $entries = rar_list($rar_arch);
// if ($entries === FALSE)
//     die("Failed fetching entries");
// 
// echo "Found " . count($entries) . " files.\n";
// 
// if (empty($entries))
//     die("No valid entries found.");
//     
// $stream = reset($entries)->getStream();
// if ($stream === FALSE)
//     die("Failed opening first file");
// 
// rar_close($rar_arch);
// 
// echo "Content of first one follows:\n";
// echo stream_get_contents($stream);
// 
// fclose($stream);
// [/php]
// [/example]
// [example]
// Example #3 Volume Callback
// [php]
// // In this example, there's a volume named multi_broken.part1.rar
// // whose next volume is named multi.part2.rar
// function resolve($vol) {
//     if (preg_match('/_broken/', $vol))
//         return str_replace('_broken', '', $vol);
//     else
//         return null;
// }
// $rar_file1 = rar_open(dirname(__FILE__).'/multi_broken.part1.rar', null, 'resolve');
// $entry = $rar_file1->getEntry('file2.txt');
// $entry->extract(null, dirname(__FILE__) . "/temp_file2.txt");
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.open.php
// ========== RARARCHIVE_OPEN - END

// SYNTAX:
// RarArchive|false RarArchive::open(string $filename, string $password = NULL, callable $volume_callback = NULL)

return $return_rararchive_open; // RarArchive|false
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_OPEN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_SETALLOWBROKEN
// ============================== PUBLIC
// ============================== ABOUT
// Whether opening broken archives is allowed.
// ============================== SUPPORT
// PECL_rar_3_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::setAllowBroken() - PECL_rar >= PECL_rar_3_0_0
// ============================== CODE
function php_compression_rar_rararchive_setallowbroken($rararchive, $allow_broken)
{
$return_rararchive_setallowbroken = false;

// ========== RARARCHIVE_SETALLOWBROKEN - BEGIN
// ===== ABOUT
// Whether opening broken archives is allowed
// ===== DESCRIPTION
// This method defines whether broken archives can be read or all the operations that attempt to extract the archive entries will fail. Broken archives are archives for which no error is detected when the file is opened but an error occurs when reading the entries.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_3_0_0
// ===== SYNTAX
// Object-oriented style (method):
// public RarArchive::setAllowBroken(bool $allow_broken): bool
// 
// Procedural style:
// rar_allow_broken_set(RarArchive $rarfile, bool $allow_broken): bool
// ===== CODE
$return_rararchive_setallowbroken = $rararchive->setAllowBroken(

// RarArchive rarfile - A RarArchive object, opened with rar_open().

$allow_broken // bool allow_broken - Whether to allow reading broken files (true) or not (false).

); // Return Values
// Returns true or false on failure. It will only fail if the file has already been closed.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// function retnull() { return null; }
// $file = dirname(__FILE__) . "/multi_broken.part1.rar";
// // Third argument omits "volume not found" message
// $a = RarArchive::open($file, null, 'retnull');
// $a->setAllowBroken(true);
// foreach ($a->getEntries() as $e) {
//     echo "$e\n";
// }
// var_dump(count($a));
// [/php]
// The above example will output something similar to:
// [result]
// RarEntry for file "file1.txt" (52b28202)
// int(1)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.setallowbroken.php
// ========== RARARCHIVE_SETALLOWBROKEN - END

// SYNTAX:
// bool RarArchive::setAllowBroken(bool $allow_broken)

return $return_rararchive_setallowbroken; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_SETALLOWBROKEN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARARCHIVE_TOSTRING
// ============================== PUBLIC
// ============================== ABOUT
// Get text representation.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarArchive::__toString() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rararchive_tostring($rararchive)
{
$return_rararchive_tostring = null;

// ========== RARARCHIVE_TOSTRING - BEGIN
// ===== ABOUT
// Get text representation
// ===== DESCRIPTION
// Provides a string representation for this RarArchive object. It currently shows the full path name of the archive volume that was opened and whether the resource is valid or was already closed through a call to RarArchive::close().
// This method may be used only for debugging purposes, as there are no guarantees as to which information the result contains or how it is formatted.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public RarArchive::__toString(): string
// ===== CODE
$return_rararchive_tostring = $rararchive->__toString(

// This function has no parameters.

); // Return Values
// A textual representation of this RarArchive object. The content of this representation is unspecified.
// 
// [examples]
// Examples
// [example]
// Example #1 RarArchive::__toString() example
// [php]
// $rar_arch = RarArchive::open('latest_winrar.rar');
// echo $rar_arch."\n";
// $rar_arch->close();
// echo $rar_arch."\n";
// [/php]
// The above example will output something similar to:
// [result]
// RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar"
// RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar" (closed)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rararchive.tostring.php
// ========== RARARCHIVE_TOSTRING - END

// SYNTAX:
// string RarArchive::__toString()

return $return_rararchive_tostring; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE_TOSTRING
// ==============================


// ============================== END
// PHP_COMPRESSION_RAR_RARARCHIVE
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_RAR_RARENTRY  
// ============================== PUBLIC
// PHP_COMPRESSION_RAR_RARENTRY_EXTRACT - bool php_compression_rar_rarentry_extract(RarEntry $rarentry, string $dir, string $filepath = "", string $password = NULL, bool $extended_data = false)
// PHP_COMPRESSION_RAR_RARENTRY_GETATTR - int php_compression_rar_rarentry_getattr(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETCRC - string php_compression_rar_rarentry_getcrc(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETFILETIME - string php_compression_rar_rarentry_getfiletime(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETHOSTOS - int php_compression_rar_rarentry_gethostos(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETMETHOD - int php_compression_rar_rarentry_getmethod(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETNAME - string php_compression_rar_rarentry_getname(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETPACKEDSIZE - int php_compression_rar_rarentry_getpackedsize(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETSTREAM - resource|false php_compression_rar_rarentry_getstream(RarEntry $rarentry, string $password)
// PHP_COMPRESSION_RAR_RARENTRY_GETUNPACKEDSIZE - int php_compression_rar_rarentry_getunpackedsize(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_GETVERSION - int php_compression_rar_rarentry_getversion(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_ISDIRECTORY - bool php_compression_rar_rarentry_isdirectory(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_ISENCRYPTED - bool php_compression_rar_rarentry_isencrypted(RarEntry $rarentry)
// PHP_COMPRESSION_RAR_RARENTRY_TOSTRING - string php_compression_rar_rarentry_tostring(RarEntry $rarentry)
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (14)
// RarEntry::extract() - PECL_rar >= PECL_rar_0_1
// RarEntry::getAttr() - PECL_rar >= PECL_rar_0_1
// RarEntry::getCrc() - PECL_rar >= PECL_rar_0_1
// RarEntry::getFileTime() - PECL_rar >= PECL_rar_0_1
// RarEntry::getHostOs() - PECL_rar >= PECL_rar_0_1
// RarEntry::getMethod() - PECL_rar >= PECL_rar_0_1
// RarEntry::getName() - PECL_rar >= PECL_rar_0_1
// RarEntry::getPackedSize() - PECL_rar >= PECL_rar_0_1
// RarEntry::getStream() - PECL_rar >= PECL_rar_2_0_0
// RarEntry::getUnpackedSize() - PECL_rar >= PECL_rar_0_1
// RarEntry::getVersion() - PECL_rar >= PECL_rar_0_1
// RarEntry::isDirectory() - PECL_rar >= PECL_rar_2_0_0
// RarEntry::isEncrypted() - PECL_rar >= PECL_rar_2_0_0
// RarEntry::__toString() - PECL_rar >= PECL_rar_2_0_0
// ============================== USING DATA_TYPES (6)
// bool
// RarEntry - PECL_rar >= PECL_rar_0_1
// string
// int
// resource
// false
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_EXTRACT
// ============================== PUBLIC
// ============================== ABOUT
// Extract entry from the archive.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::extract() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_extract($rarentry, $dir, $filepath = "", $password = NULL, $extended_data = false)
{
$return_rarentry_extract = false;

// ========== RARENTRY_EXTRACT - BEGIN
// ===== ABOUT
// Extract entry from the archive
// ===== DESCRIPTION
// RarEntry::extract() extracts the entry's data. It will create new file in the specified dir with the name identical to the entry's name, unless the second argument is specified. See below for more information.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::extract(
//     string $dir,
//     string $filepath = "",
//     string $password = NULL,
//     bool $extended_data = false
// ): bool
// ===== CODE
$return_rarentry_extract = $rarentry->extract(

$dir, // string dir - Path to the directory where files should be extracted. This parameter is considered if and only if filepath is not. If both parameters are empty an extraction to the current directory will be attempted.

$filepath, // string filepath - Path (relative or absolute) containing the directory and filename of the extracted file. This parameter overrides both the parameter dir and the original file name.

$password, // string password - The password used to encrypt this entry. If the entry is not encrypted, this value will not be used and can be omitted. If this parameter is omitted and the entry is encrypted, the password given to rar_open(), if any, will be used. If a wrong password is given, either explicitly or implicitly via rar_open(), CRC checking will fail and this method will fail and return false. If no password is given and one is required, this method will fail and return false. You can check whether an entry is encrypted with RarEntry::isEncrypted().

$extended_data // bool extended_data - If true, extended information such as NTFS ACLs and Unix owner information will be set in the extract files, as long as it's present in the archive.
// Warning: Prior to version 2.0.0, this function would not handle relative paths correctly. Use realpath() as a workaround.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version        - Description
// PECL rar 3.0.0 - extended_data was added.
// PECL rar 3.0.0 - Support for RAR archives with repeated entry names is no longer defective.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::extract() example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// $entry->extract('/dir/to'); // create /dir/to/Dir/file.txt
// $entry->extract(false, '/dir/to/new_name.txt'); // create /dir/to/new_name.txt
// 
// [/php]
// [/example]
// [example]
// Example #2 How to extract all files in archive:
// [php]
// 
// // example by Erik Jenssen aka erix
// 
// $filename = "foobar.rar";
// $filepath = "/home/foo/bar/";
// 
// $rar_file = rar_open($filepath.$filename);
// $list = rar_list($rar_file);
// foreach($list as $file) {
//     $entry = rar_entry_get($rar_file, $file);
//     $entry->extract("."); // extract to the current dir
// }
// rar_close($rar_file);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.extract.php
// ========== RARENTRY_EXTRACT - END

// SYNTAX:
// bool RarEntry::extract(string $dir, string $filepath = "", string $password = NULL, bool $extended_data = false)

return $return_rarentry_extract; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_EXTRACT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETATTR
// ============================== PUBLIC
// ============================== ABOUT
// Get attributes of the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getAttr() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getattr($rarentry)
{
$return_rarentry_getattr = 0;

// ========== RARENTRY_GETATTR - BEGIN
// ===== ABOUT
// Get attributes of the entry
// ===== DESCRIPTION
// Returns the OS-dependent attributes of the archive entry.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getAttr(): int
// ===== CODE
$return_rarentry_getattr = $rarentry->getAttr(

// This function has no parameters.

); // Return Values
// Returns the attributes or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getAttr() example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Can't open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'dir/in/the/archive') or die("Can't find such entry");
// 
// $host_os = $entry->getHostOs();
// $attr = $entry->getAttr();
// 
// switch($host_os) {
//     case RAR_HOST_MSDOS:
//     case RAR_HOST_OS2:
//     case RAR_HOST_WIN32:
//     case RAR_HOST_MACOS:
//         printf("%c%c%c%c%c%c\n",
//                 ($attr & 0x08) ? 'V' : '.',
//                 ($attr & 0x10) ? 'D' : '.',
//                 ($attr & 0x01) ? 'R' : '.',
//                 ($attr & 0x02) ? 'H' : '.',
//                 ($attr & 0x04) ? 'S' : '.',
//                 ($attr & 0x20) ? 'A' : '.');
//         break;
//     case RAR_HOST_UNIX:
//     case RAR_HOST_BEOS:
//         switch ($attr & 0xF000)
//         {
//             case 0x4000:
//                 printf("d");
//                 break;
//             case 0xA000:
//                 printf("l");
//                 break;
//             default:
//                 printf("-");
//                 break;
//         }
//         printf("%c%c%c%c%c%c%c%c%c\n",
//                 ($attr & 0x0100) ? 'r' : '-',
//                 ($attr & 0x0080) ? 'w' : '-',
//                 ($attr & 0x0040) ? (($attr & 0x0800) ? 's':'x'):(($attr & 0x0800) ? 'S':'-'),
//                 ($attr & 0x0020) ? 'r' : '-',
//                 ($attr & 0x0010) ? 'w' : '-',
//                 ($attr & 0x0008) ? (($attr & 0x0400) ? 's':'x'):(($attr & 0x0400) ? 'S':'-'),
//                 ($attr & 0x0004) ? 'r' : '-',
//                 ($attr & 0x0002) ? 'w' : '-',
//                 ($attr & 0x0001) ? 'x' : '-');
//         break;
// }
// 
// rar_close($rar_file);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getattr.php
// ========== RARENTRY_GETATTR - END

// SYNTAX:
// int RarEntry::getAttr()

return $return_rarentry_getattr; // int
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETATTR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETCRC
// ============================== PUBLIC
// ============================== ABOUT
// Get CRC of the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getCrc() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getcrc($rarentry)
{
$return_rarentry_getcrc = null;

// ========== RARENTRY_GETCRC - BEGIN
// ===== ABOUT
// Get CRC of the entry
// ===== DESCRIPTION
// Returns an hexadecimal string representation of the CRC of the archive entry.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getCrc(): string
// ===== CODE
$return_rarentry_getcrc = $rarentry->getCrc(

// This function has no parameters.

); // Return Values
// Returns the CRC of the archive entry or false on error.
// 
// Changelog
// Version        - Description
// PECL rar 2.0.0 - This method now returns correct values for multiple volume archives.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getcrc.php
// ========== RARENTRY_GETCRC - END

// SYNTAX:
// string RarEntry::getCrc()

return $return_rarentry_getcrc; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETCRC
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETFILETIME
// ============================== PUBLIC
// ============================== ABOUT
// Get entry last modification time.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getFileTime() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getfiletime($rarentry)
{
$return_rarentry_getfiletime = null;

// ========== RARENTRY_GETFILETIME - BEGIN
// ===== ABOUT
// Get entry last modification time
// ===== DESCRIPTION
// Gets entry last modification time.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getFileTime(): string
// ===== CODE
$return_rarentry_getfiletime = $rarentry->getFileTime(

// This function has no parameters.

); // Return Values
// Returns entry last modification time as string in format YYYY-MM-DD HH:II:SS, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getfiletime.php
// ========== RARENTRY_GETFILETIME - END

// SYNTAX:
// string RarEntry::getFileTime()

return $return_rarentry_getfiletime; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETFILETIME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETHOSTOS
// ============================== PUBLIC
// ============================== ABOUT
// Get entry host OS.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getHostOs() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_gethostos($rarentry)
{
$return_rarentry_gethostos = 0;

// ========== RARENTRY_GETHOSTOS - BEGIN
// ===== ABOUT
// Get entry host OS
// ===== DESCRIPTION
// Returns the code of the host OS of the archive entry.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getHostOs(): int
// ===== CODE
$return_rarentry_gethostos = $rarentry->getHostOs(

// This function has no parameters.

); // Return Values
// Returns the code of the host OS, or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getHostOs() example (version >= 2.0.0)
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// switch ($entry->getHostOs()) {
//     case RarEntry::HOST_MSDOS:
//         echo "MS-DOS\n";
//         break;
//     case RarEntry::HOST_OS2:
//         echo "OS2\n";
//         break;
//     case RarEntry::HOST_WIN32:
//         echo "Win32\n";
//         break;
//     case RarEntry::HOST_MACOS:
//         echo "MacOS\n";
//         break;
//     case RarEntry::HOST_UNIX:
//         echo "Unix/Linux\n";
//         break;
//     case RarEntry::HOST_BEOS:
//         echo "BeOS\n";
//         break;
// }
// 
// [/php]
// [/example]
// [example]
// Example #2 RarEntry::getHostOs() example (version <= 1.0.0)
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// switch ($entry->getHostOs()) {
//     case RAR_HOST_MSDOS:
//         echo "MS-DOS\n";
//         break;
//     case RAR_HOST_OS2:
//         echo "OS2\n";
//         break;
//     case RAR_HOST_WIN32:
//         echo "Win32\n";
//         break;
//     case RAR_HOST_MACOS:
//         echo "MacOS\n";
//         break;
//     case RAR_HOST_UNIX:
//         echo "Unix/Linux\n";
//         break;
//     case RAR_HOST_BEOS:
//         echo "BeOS\n";
//         break;
// }
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.gethostos.php
// ========== RARENTRY_GETHOSTOS - END

// SYNTAX:
// int RarEntry::getHostOs()

return $return_rarentry_gethostos; // int
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETHOSTOS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETMETHOD
// ============================== PUBLIC
// ============================== ABOUT
// Get pack method of the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getMethod() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getmethod($rarentry)
{
$return_rarentry_getmethod = 0;

// ========== RARENTRY_GETMETHOD - BEGIN
// ===== ABOUT
// Get pack method of the entry
// ===== DESCRIPTION
// RarEntry::getMethod() returns number of the method used when adding current archive entry.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getMethod(): int
// ===== CODE
$return_rarentry_getmethod = $rarentry->getMethod(

// This function has no parameters.

); // Return Values
// Returns the method number or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getMethod() example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// echo "Method number: " . $entry->getMethod();
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getmethod.php
// ========== RARENTRY_GETMETHOD - END

// SYNTAX:
// int RarEntry::getMethod()

return $return_rarentry_getmethod; // int
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETMETHOD
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETNAME
// ============================== PUBLIC
// ============================== ABOUT
// Get name of the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getName() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getname($rarentry)
{
$return_rarentry_getname = null;

// ========== RARENTRY_GETNAME - BEGIN
// ===== ABOUT
// Get name of the entry
// ===== DESCRIPTION
// Returns the name (with path) of the archive entry.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getName(): string
// ===== CODE
$return_rarentry_getname = $rarentry->getName(

// This function has no parameters.

); // Return Values
// Returns the entry name as a string, or false on error.
// 
// Changelog
// Version        - Description
// PECL rar 2.0.0 - As of version 2.0.0, the returned string is encoded in Unicode/UTF-8.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getName() example
// [php]
// 
// //this example is safe even in pages not encoded in UTF-8
// //for those encoded in UTF-8, the call to mb_convert_encoding is unnecessary
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// echo "Entry name: " . mb_convert_encoding(
//     htmlentities(
//         $entry->getName(),
//         ENT_COMPAT,
//         "UTF-8"
//     ),
//     "HTML-ENTITIES",
//     "UTF-8"
// );
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getname.php
// ========== RARENTRY_GETNAME - END

// SYNTAX:
// string RarEntry::getName()

return $return_rarentry_getname; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETPACKEDSIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get packed size of the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getPackedSize() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getpackedsize($rarentry)
{
$return_rarentry_getpackedsize = 0;

// ========== RARENTRY_GETPACKEDSIZE - BEGIN
// ===== ABOUT
// Get packed size of the entry
// ===== DESCRIPTION
// Get packed size of the archive entry.
// Note: Note that on platforms with 32-bit longs (that includes Windows x64), the maximum size returned is capped at 2 GiB. Check the constant PHP_INT_MAX.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getPackedSize(): int
// ===== CODE
$return_rarentry_getpackedsize = $rarentry->getPackedSize(

// This function has no parameters.

); // Return Values
// Returns the packed size, or false on error.
// 
// Changelog
// Version        - Description
// PECL rar 2.0.0 - This method now returns correct values of packed sizes bigger than 2 GiB on platforms with 64-bit ints and never returns negative values on other platforms.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getPackedSize() example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// echo "Packed size of " . $entry->getName() . " = " . $entry->getPackedSize() . " bytes";
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getpackedsize.php
// ========== RARENTRY_GETPACKEDSIZE - END

// SYNTAX:
// int RarEntry::getPackedSize()

return $return_rarentry_getpackedsize; // int
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETPACKEDSIZE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETSTREAM
// ============================== PUBLIC
// ============================== ABOUT
// Get file handler for entry.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarEntry::getStream() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rarentry_getstream($rarentry, $password)
{
$return_rarentry_getstream = false;

// ========== RARENTRY_GETSTREAM - BEGIN
// ===== ABOUT
// Get file handler for entry
// ===== DESCRIPTION
// Returns a file handler that supports read operations. This handler provides on-the-fly decompression for this entry.
// The handler is not invalidated by calling rar_close().
// Warning: The resulting stream has no integrity verification. In particular, file corruption and decryption with a wrong a key will not be detected. It is the programmer's responsability to use the entry's CRC to check for integrity, if he so wishes.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public RarEntry::getStream(string $password = ?): resource|false
// ===== CODE
$return_rarentry_getstream = $rarentry->getStream(

$password // string password - The password used to encrypt this entry. If the entry is not encrypted, this value will not be used and can be omitted. If this parameter is omitted and the entry is encrypted, the password given to rar_open(), if any, will be used. If a wrong password is given, either explicitly or implicitly via rar_open(), this method's resulting stream will produce wrong output. If no password is given and one is required, this method will fail and return false. You can check whether an entry is encrypted with RarEntry::isEncrypted().

); // Return Values
// The file handler or false on failure.
// 
// Changelog
// Version        - Description
// PECL rar 3.0.0 - Support for RAR archives with repeated entry names is no longer defective.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getStream() example
// [php]
// 
// $rar_file = rar_open('example.rar');
// if ($rar_file === false)
//     die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt');
// if ($entry === false)
//     die("Failed to find such entry");
// 
// $stream = $entry->getStream();
// if ($stream === false)
//     die("Failed to obtain stream.");
// 
// rar_close($rar_file); //stream is independent from file
// 
// while (!feof($stream)) {
//     $buff = fread($stream, 8192);
//     if ($buff !== false)
//         echo $buff;
//     else
//         break; //fread error
// }
// 
// fclose($stream);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getstream.php
// ========== RARENTRY_GETSTREAM - END

// SYNTAX:
// resource|false RarEntry::getStream(string $password)

return $return_rarentry_getstream; // resource|false
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETSTREAM
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETUNPACKEDSIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get unpacked size of the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getUnpackedSize() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getunpackedsize($rarentry)
{
$return_rarentry_getunpackedsize = 0;

// ========== RARENTRY_GETUNPACKEDSIZE - BEGIN
// ===== ABOUT
// Get unpacked size of the entry
// ===== DESCRIPTION
// Get unpacked size of the archive entry.
// Note: Note that on platforms with 32-bit longs (that includes Windows x64), the maximum size returned is capped at 2 GiB. Check the constant PHP_INT_MAX.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getUnpackedSize(): int
// ===== CODE
$return_rarentry_getunpackedsize = $rarentry->getUnpackedSize(

// This function has no parameters.

); // Return Values
// Returns the unpacked size, or false on error.
// 
// Changelog
// Version        - Description
// PECL rar 2.0.0 - This method now returns correct values of unpacked sizes bigger than 2 GiB on platforms with 64-bit ints and never returns negative values on other platforms.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getUnpackedSize() example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// echo "Unpacked size of " . $entry->getName() . " = " . $entry->getPackedSize() . " bytes";
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getunpackedsize.php
// ========== RARENTRY_GETUNPACKEDSIZE - END

// SYNTAX:
// int RarEntry::getUnpackedSize()

return $return_rarentry_getunpackedsize; // int
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETUNPACKEDSIZE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_GETVERSION
// ============================== PUBLIC
// ============================== ABOUT
// Get minimum version of RAR program required to unpack the entry.
// ============================== SUPPORT
// PECL_rar_0_1
// ============================== USING SUBCLASSES (1)
// RarEntry::getVersion() - PECL_rar >= PECL_rar_0_1
// ============================== CODE
function php_compression_rar_rarentry_getversion($rarentry)
{
$return_rarentry_getversion = 0;

// ========== RARENTRY_GETVERSION - BEGIN
// ===== ABOUT
// Get minimum version of RAR program required to unpack the entry
// ===== DESCRIPTION
// Returns minimum version of RAR program (e.g. WinRAR) required to unpack the entry. It is encoded as 10 * major version + minor version.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_0_1
// ===== SYNTAX
// public RarEntry::getVersion(): int
// ===== CODE
$return_rarentry_getversion = $rarentry->getVersion(

// This function has no parameters.

); // Return Values
// Returns the version or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 RarEntry::getVersion() example
// [php]
// 
// $rar_file = rar_open('example.rar') or die("Failed to open Rar archive");
// 
// $entry = rar_entry_get($rar_file, 'Dir/file.txt') or die("Failed to find such entry");
// 
// echo "Rar version required for unpacking: " . $entry->getVersion();
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.getversion.php
// ========== RARENTRY_GETVERSION - END

// SYNTAX:
// int RarEntry::getVersion()

return $return_rarentry_getversion; // int
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_GETVERSION
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_ISDIRECTORY
// ============================== PUBLIC
// ============================== ABOUT
// Test whether an entry represents a directory.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarEntry::isDirectory() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rarentry_isdirectory($rarentry)
{
$return_rarentry_isdirectory = false;

// ========== RARENTRY_ISDIRECTORY - BEGIN
// ===== ABOUT
// Test whether an entry represents a directory
// ===== DESCRIPTION
// Tests whether the current entry is a directory.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public RarEntry::isDirectory(): bool
// ===== CODE
$return_rarentry_isdirectory = $rarentry->isDirectory(

// This function has no parameters.

); // Return Values
// Returns true if this entry is a directory and false otherwise.
// 
// Notes
// This function is only available starting with version 2.0.0, but one can also test whether an entry is a directory by checking the entry attributes, like this (only works for files compressed in RAR for Windows or Unix):
// [php]
// //...
// //Open file, get entry and store in variable $e...
// //...
// 
// $isDirectory = (bool) ((($e->getHostOs() == RAR_HOST_WIN32) && ($e->getAttr() & 0x10)) ||
//     (($e->getHostOs() == RAR_HOST_UNIX) && (($e->getAttr() & 0xf000) == 0x4000)));
// [/php]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.isdirectory.php
// ========== RARENTRY_ISDIRECTORY - END

// SYNTAX:
// bool RarEntry::isDirectory()

return $return_rarentry_isdirectory; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_ISDIRECTORY
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_ISENCRYPTED
// ============================== PUBLIC
// ============================== ABOUT
// Test whether an entry is encrypted.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarEntry::isEncrypted() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rarentry_isencrypted($rarentry)
{
$return_rarentry_isencrypted = false;

// ========== RARENTRY_ISENCRYPTED - BEGIN
// ===== ABOUT
// Test whether an entry is encrypted
// ===== DESCRIPTION
// Tests whether the current entry contents are encrypted.
// Note: The password used may differ between files inside the same RAR archive.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public RarEntry::isEncrypted(): bool
// ===== CODE
$return_rarentry_isencrypted = $rarentry->isEncrypted(

// This function has no parameters.

); // Return Values
// Returns true if the current entry is encrypted and false otherwise.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.isencrypted.php
// ========== RARENTRY_ISENCRYPTED - END

// SYNTAX:
// bool RarEntry::isEncrypted()

return $return_rarentry_isencrypted; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_ISENCRYPTED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RARENTRY_TOSTRING
// ============================== PUBLIC
// ============================== ABOUT
// Get text representation of entry.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarEntry::__toString() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rarentry_tostring($rarentry)
{
$return_rarentry_tostring = null;

// ========== RARENTRY_TOSTRING - BEGIN
// ===== ABOUT
// Get text representation of entry
// ===== DESCRIPTION
// RarEntry::__toString() returns a textual representation for this entry. It includes whether the entry is a file or a directory (symbolic links and other special objects will be treated as files), the UTF-8 name of the entry and its CRC. The form and content of this representation may be changed in the future, so they cannot be relied upon.
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public RarEntry::__toString(): string
// ===== CODE
$return_rarentry_tostring = $rarentry->__toString(

// This function has no parameters.

); // Return Values
// A textual representation for the entry.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarentry.tostring.php
// ========== RARENTRY_TOSTRING - END

// SYNTAX:
// string RarEntry::__toString()

return $return_rarentry_tostring; // string
}
// ============================== END
// PHP_COMPRESSION_RAR_RARENTRY_TOSTRING
// ==============================


// ============================== END
//  PHP_COMPRESSION_RAR_RARENTRY  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RAREXCEPTION
// ============================== PUBLIC
// PHP_COMPRESSION_RAR_RAREXCEPTION_ISUSINGEXCEPTIONS - bool php_compression_rar_rarexception_isusingexceptions(RarException $rarexception)
// PHP_COMPRESSION_RAR_RAREXCEPTION_SETUSINGEXCEPTIONS - void php_compression_rar_rarexception_setusingexceptions(RarException $rarexception, bool $using_exceptions)
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (2)
// RarException::isUsingExceptions() - PECL_rar >= PECL_rar_2_0_0
// RarException::setUsingExceptions() - PECL_rar >= PECL_rar_2_0_0
// ============================== USING DATA_TYPES (3)
// bool
// RarException - PECL_rar >= PECL_rar_2_0_0
// void
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RAREXCEPTION_ISUSINGEXCEPTIONS
// ============================== PUBLIC
// ============================== ABOUT
// Check whether error handling with exceptions is in use.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarException::isUsingExceptions() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rarexception_isusingexceptions($rarexception)
{
$return_rarexception_isusingexceptions = false;

// ========== RAREXCEPTION_ISUSINGEXCEPTIONS - BEGIN
// ===== ABOUT
// Check whether error handling with exceptions is in use
// ===== DESCRIPTION
// Checks whether the RAR functions will emit warnings and return error values or whether they will throw exceptions in most of the circumstances (does not include some programmatic errors such as passing the wrong type of arguments).
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public static RarException::isUsingExceptions(): bool
// ===== CODE
$return_rarexception_isusingexceptions = $rarexception->isUsingExceptions(

// This function has no parameters.

); // Return Values
// Returns true if exceptions are being used, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 RarException::isUsingExceptions() example
// [php]
// //The default is not to use exceptions
// var_dump(RarException::isUsingExceptions());
// [/php]
// The above example will output something similar to:
// [result]
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarexception.isusingexceptions.php
// ========== RAREXCEPTION_ISUSINGEXCEPTIONS - END

// SYNTAX:
// bool RarException::isUsingExceptions()

return $return_rarexception_isusingexceptions; // bool
}
// ============================== END
// PHP_COMPRESSION_RAR_RAREXCEPTION_ISUSINGEXCEPTIONS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_RAR_RAREXCEPTION_SETUSINGEXCEPTIONS
// ============================== PUBLIC
// ============================== ABOUT
// Activate and deactivate error handling with exceptions.
// ============================== SUPPORT
// PECL_rar_2_0_0
// ============================== USING SUBCLASSES (1)
// RarException::setUsingExceptions() - PECL_rar >= PECL_rar_2_0_0
// ============================== CODE
function php_compression_rar_rarexception_setusingexceptions($rarexception, $using_exceptions)
{

// ========== RAREXCEPTION_SETUSINGEXCEPTIONS - BEGIN
// ===== ABOUT
// Activate and deactivate error handling with exceptions
// ===== DESCRIPTION
// If and only if the argument is true, then, instead of emitting warnings and returning a special value indicating error when the UnRAR library encounters an error, an exception of type RarException will be thrown.
// Exceptions will also be thrown for the following errors, which occur outside the library (their error code will be -1):
// * attempting some operations on a closed RarArchive object or a RarEntry object relative to the first;
// * attempting to get an entry that does not exist with RarArchive::getEntry().
// ===== SUPPORTED
// PECL_rar >= PECL_rar_2_0_0
// ===== SYNTAX
// public static RarException::setUsingExceptions(bool $using_exceptions): void
// ===== CODE
$rarexception->setUsingExceptions(

$using_exceptions // bool using_exceptions - Should be true to activate exception throwing, false to deactivate (the default).

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 RarException::setUsingExceptions() example
// [php]
// var_dump(RarException::isUsingExceptions());
// $arch = RarArchive::open("does_not_exist.rar");
// var_dump($arch);
// 
// RarException::setUsingExceptions(true);
// var_dump(RarException::isUsingExceptions());
// $arch = RarArchive::open("does_not_exist.rar");
// var_dump($arch); //not reached
// [/php]
// The above example will output something similar to:
// [result]
// bool(false)
// 
// Warning: RarArchive::open(): Failed to open does_not_exist.rar: ERAR_EOPEN (file open error) in C:\php_rar\trunk\tests\test.php on line 3
// bool(false)
// bool(true)
// 
// Fatal error: Uncaught exception 'RarException' with message 'unRAR internal error: Failed to open does_not_exist.rar: ERAR_EOPEN (file open error)' in C:\php_rar\trunk\tests\test.php:8
// Stack trace:
// #0 C:\php_rar\trunk\tests\test.php(8): RarArchive::open('does_not_exist....')
// #1 {main}
//   thrown in C:\php_rar\trunk\tests\test.php on line 8
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/rarexception.setusingexceptions.php
// ========== RAREXCEPTION_SETUSINGEXCEPTIONS - END

// SYNTAX:
// void RarException::setUsingExceptions(bool $using_exceptions)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_RAR_RAREXCEPTION_SETUSINGEXCEPTIONS
// ==============================


// ============================== END
// PHP_COMPRESSION_RAR_RAREXCEPTION
// ==============================


// ============================== END
//      PHP_COMPRESSION_RAR      
// ==============================
?>