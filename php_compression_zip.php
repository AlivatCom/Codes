<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_COMPRESSION_ZIP - BEGIN
// PHP_COMPRESSION_ZIP_ZIP_CLOSE - void php_compression_zip_zip_close(resource $zip)
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_CLOSE - bool php_compression_zip_zip_entry_close(resource $zip_entry)
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_COMPRESSEDSIZE - int|false php_compression_zip_zip_entry_compressedsize(resource $zip_entry)
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_COMPRESSIONMETHOD - string|false php_compression_zip_zip_entry_compressionmethod(resource $zip_entry)
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_FILESIZE - int|false php_compression_zip_zip_entry_filesize(resource $zip_entry)
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_NAME - string|false php_compression_zip_zip_entry_name(resource $zip_entry)
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_OPEN - bool php_compression_zip_zip_entry_open(resource $zip_dp, resource $zip_entry, string $mode = "rb")
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_READ - string|false php_compression_zip_zip_entry_read(resource $zip_entry, int $len = 1024)
// PHP_COMPRESSION_ZIP_ZIP_OPEN - resource|int|false php_compression_zip_zip_open(string $filename)
// PHP_COMPRESSION_ZIP_ZIP_READ - resource|false php_compression_zip_zip_read(resource $zip)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE - bool|ZipArchive|string|int|array|false|null|resource|callable|float _ADDEMPTYDIR, _ADDFILE, _ADDFROMSTRING, _ADDGLOB, _ADDPATTERN, _CLEARERROR, _CLOSE, _COUNT, _DELETEINDEX, _DELETENAME, _EXTRACTTO, _GETARCHIVECOMMENT, _GETARCHIVEFLAG, _GETCOMMENTINDEX, _GETCOMMENTNAME, _GETEXTERNALATTRIBUTESINDEX, _GETEXTERNALATTRIBUTESNAME, _GETFROMINDEX, _GETFROMNAME, _GETNAMEINDEX, _GETSTATUSSTRING, _GETSTREAM, _GETSTREAMINDEX, _GETSTREAMNAME, _ISCOMPRESSIONMETHODSUPPORTED, _ISENCRYPTIONMETHODSUPPORTED, _LOCATENAME, _OPEN, _REGISTERCANCELCALLBACK, _REGISTERPROGRESSCALLBACK, _RENAMEINDEX, _RENAMENAME, _REPLACEFILE, _SETARCHIVECOMMENT, _SETARCHIVEFLAG, _SETCOMMENTINDEX, _SETCOMMENTNAME, _SETCOMPRESSIONINDEX, _SETCOMPRESSIONNAME, _SETENCRYPTIONINDEX, _SETENCRYPTIONNAME, _SETEXTERNALATTRIBUTESINDEX, _SETEXTERNALATTRIBUTESNAME, _SETMTIMEINDEX, _SETMTIMENAME, _SETPASSWORD, _STATINDEX, _STATNAME, _UNCHANGEALL, _UNCHANGEARCHIVE, _UNCHANGEINDEX, _UNCHANGENAME
// PHP_COMPRESSION_ZIP - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_22_0
// ============================== INSTALLATION
// NOT_BUNDLED (This extension requires > libzip. Version 1.1.2 was bundled in PHP until version 7.3.)
// ============================== USING FUNCTIONS (10)
// zip_close() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_close() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_compressedsize() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_compressionmethod() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_filesize() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_name() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_open() - PHP_4 >= 4_1_0, PHP_5 >= 5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_entry_read() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_open() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// zip_read() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== USING CLASSES (1)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE - PHP_5 - PHP_8, PECL_zip_1_22_0
// ============================== USING DATA_TYPES (11)
// void
// resource
// bool
// int
// false
// string
// OFFLINE | ZipArchive - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// array
// null
// callable
// float
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_COMPRESSION_ZIP      
// ============================== ABOUT
// PHP Manual / Function Reference / Compression and Archive Extensions / Zip
// URL: https://www.php.net/manual/en/book.zip.php
// ============================== DESCRIPTION
// ZIP
// 
// ZIP - BEGIN
// Zip
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// THE_ZIPARCHIVE_CLASS
// ZIP_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// This extension enables you to transparently read or write ZIP compressed archives and the files inside them.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/intro.zip.php
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
// This extension requires > libzip. Version 1.1.2 was bundled in PHP until version 7.3.
// 
// Minimal supported version is 0.11, but higher is highly recommended.
// * Version 1.2 required for encryption support, see ZipArchive::setEncryptionIndex()
// * Version 1.3 required for progress support, see ZipArchive::registerProgressCallback()
// * Version 1.6 required for cancel support, see ZipArchive::registerCancelCallback()
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation 
// 
// Linux systems
// As of PHP 7.4.0, in order to use these functions you must compile PHP with zip support by using the --with-zip configure option. Previously, zip support had to be enabled by using the --enable-zip configure option. As of PHP 7.4.0, the bundled libzip is removed.
// As of PHP 7.3.0, building against the bundled libzip is discouraged, but still possible by adding --without-libzip to the configuration.
// A --with-libzip=DIR configure option has been added to use a system libzip installation. libzip version 0.11 is required, with 0.11.2 or later recommended.
// 
// Windows
// As of PHP 8.2.0, php_zip.dll DLL must be enabled in php.ini. Previously, this extension was built-in.
// 
// Installation via PECL
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/zip.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// There are two resource types used in the Zip module. The first one is the Zip directory for the Zip archive, the second Zip Entry for the archive entries.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// ZipArchive uses class constants. There are various types of constants, main are: Flags (prefixed with FL_), Global flags (prefixed with AFL_), errors (prefixed with ER_) and mode (no prefix).
// 
// Archive open modes
// ZipArchive::CREATE (int)              - Create the archive if it does not exist.
// ZipArchive::OVERWRITE (int)           - If archive exists, ignore its current contents. In other words, handle it the same way as an empty archive.
// ZipArchive::EXCL (int)                - Error if archive already exists.
// ZipArchive::RDONLY (int)              - Open archive in read only mode. Available as of PHP 7.4.3 and PECL zip 1.17.1, respectively, if built against libzip ≥ 1.0.0.
// ZipArchive::CHECKCONS (int)           - Perform additional consistency checks on the archive, and error if they fail.
// 
// Archive global flags
// ZipArchive::AFL_RDONLY (int)          - Archive is read only, cannot be cleared. Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively, if built against libzip ≥ 1.10.0.
// ZipArchive::AFL_IS_TORRENTZIP (int)   - Current archive is torrentzipped. Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively, if built against libzip ≥ 1.10.0.
// ZipArchive::AFL_WANT_TORRENTZIP (int) - Write archive in torrentzip format. Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively, if built against libzip ≥ 1.10.0.
// ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE (int) - Don't remove file if archive is empty. Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively, if built against libzip ≥ 1.10.0.
// 
// Archive flags
// ZipArchive::FL_NOCASE (int)           - Ignore case on name lookup
// ZipArchive::FL_NODIR (int)            - Ignore directory component
// ZipArchive::FL_COMPRESSED (int)       - Read compressed data
// ZipArchive::FL_UNCHANGED (int)        - Use original data, ignoring changes.
// ZipArchive::FL_RECOMPRESS (int)       - Force recompression of data. Available as of PHP 8.0.0 and PECL zip 1.18.0. Deprecated as of PHP 8.3.0 and PECL zip 1.22.1, will be removed in a future version of libzip.
// ZipArchive::FL_ENCRYPTED (int)        - Read encrypted data (implies FL_COMPRESSED). Available as of PHP 8.0.0 and PECL zip 1.18.0.
// ZipArchive::FL_OVERWRITE (int)        - If file with name exists, overwrite (replace) it. Available as of PHP 8.0.0 and PECL zip 1.18.0.
// ZipArchive::FL_LOCAL (int)            - In local header. Available as of PHP 8.0.0 and PECL zip 1.18.0.
// ZipArchive::FL_CENTRAL (int)          - In central directory. Available as of PHP 8.0.0 and PECL zip 1.18.0.
// ZipArchive::FL_ENC_GUESS (int)        - Guess string encoding (is default). Available as of PHP 7.0.8.
// ZipArchive::FL_ENC_RAW (int)          - Get unmodified string. Available as of PHP 7.0.8.
// ZipArchive::FL_ENC_STRICT (int)       - Follow specification strictly. Available as of PHP 7.0.8.
// ZipArchive::FL_ENC_UTF_8 (int)        - String is UTF-8 encoded. Available as of PHP 7.0.8.
// ZipArchive::FL_ENC_CP437 (int)        - String is CP437 encoded. Available as of PHP 7.0.8.
// ZipArchive::FL_OPEN_FILE_NOW (int)    - Open the file when added instead of waiting for archive to be closed. Be aware of file descriptors consumption. Available as of PHP 8.3.0 and PECL zip 1.22.1.
// 
// Compression modes
// ZipArchive::CM_DEFAULT (int)          - better of deflate or store.
// ZipArchive::CM_STORE (int)            - stored (uncompressed).
// ZipArchive::CM_SHRINK (int)           - shrunk
// ZipArchive::CM_REDUCE_1 (int)         - reduced with factor 1
// ZipArchive::CM_REDUCE_2 (int)         - reduced with factor 2
// ZipArchive::CM_REDUCE_3 (int)         - reduced with factor 3
// ZipArchive::CM_REDUCE_4 (int)         - reduced with factor 4
// ZipArchive::CM_IMPLODE (int)          - imploded
// ZipArchive::CM_DEFLATE (int)          - deflated
// ZipArchive::CM_DEFLATE64 (int)        - deflate64
// ZipArchive::CM_PKWARE_IMPLODE (int)   - PKWARE imploding
// ZipArchive::CM_BZIP2 (int)            - BZIP2 algorithm
// ZipArchive::CM_LZMA (int)             - LZMA algorithm
// ZipArchive::CM_LZMA2 (int)            - LZMA2 algorithm. Available as of PHP 7.4.3 and PECL zip 1.16.0, respectively, if built against libzip ≥ 1.6.0.
// ZipArchive::CM_ZSTD (int)             - Zstandard algorithm. Available as of PHP 8.0.0 and PECL zip 1.19.1, respectively, if built against libzip ≥ 1.8.0.
// ZipArchive::CM_XZ (int)               - XZ algorithm. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip ≥ 1.6.0.
// ZipArchive::CM_TERSE (int)            - ZipArchive::CM_LZ77 (int)
// ZipArchive::CM_WAVPACK (int)          - ZipArchive::CM_PPMD (int)
// 
// Errors
// ZipArchive::ER_OK (int)               - No error.
// ZipArchive::ER_MULTIDISK (int)        - Multi-disk zip archives not supported.
// ZipArchive::ER_RENAME (int)           - Renaming temporary file failed.
// ZipArchive::ER_CLOSE (int)            - Closing zip archive failed
// ZipArchive::ER_SEEK (int)             - Seek error
// ZipArchive::ER_READ (int)             - Read error
// ZipArchive::ER_WRITE (int)            - Write error
// ZipArchive::ER_CRC (int)              - CRC error
// ZipArchive::ER_ZIPCLOSED (int)        - Containing zip archive was closed
// ZipArchive::ER_NOENT (int)            - No such file.
// ZipArchive::ER_EXISTS (int)           - File already exists
// ZipArchive::ER_OPEN (int)             - Can't open file
// ZipArchive::ER_TMPOPEN (int)          - Failure to create temporary file.
// ZipArchive::ER_ZLIB (int)             - Zlib error
// ZipArchive::ER_MEMORY (int)           - Memory allocation failure
// ZipArchive::ER_CHANGED (int)          - Entry has been changed
// ZipArchive::ER_COMPNOTSUPP (int)      - Compression method not supported.
// ZipArchive::ER_EOF (int)              - Premature EOF
// ZipArchive::ER_INVAL (int)            - Invalid argument
// ZipArchive::ER_NOZIP (int)            - Not a zip archive
// ZipArchive::ER_INTERNAL (int)         - Internal error
// ZipArchive::ER_INCONS (int)           - Zip archive inconsistent
// ZipArchive::ER_REMOVE (int)           - Can't remove file
// ZipArchive::ER_DELETED (int)          - Entry has been deleted
// ZipArchive::ER_ENCRNOTSUPP (int)      - Encryption method not supported. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
// ZipArchive::ER_RDONLY (int)           - Read-only archive. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
// ZipArchive::ER_NOPASSWD (int)         - No password provided. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
// ZipArchive::ER_WRONGPASSWD (int)      - Wrong password provided. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
// ZipArchive::ER_OPNOTSUPP (int)        - Operation not supported. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip ≥ 1.0.0.
// ZipArchive::ER_INUSE (int)            - Resource still in use. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip ≥ 1.0.0.
// ZipArchive::ER_TELL (int)             - Tell error. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip ≥ 1.0.0.
// ZipArchive::ER_COMPRESSED_DATA (int)  - Compressed data invalid. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip ≥ 1.6.0.
// ZipArchive::ER_CANCELLED (int)        - Operation cancelled. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip ≥ 1.6.0.
// ZipArchive::ER_DATA_LENGTH (int)      - Unexpected length of data. Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively, if built against libzip ≥ 1.10.0.
// ZipArchive::ER_NOT_ALLOWED (int)      - Not allowed in torrentzip. Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively, if built against libzip ≥ 1.10.0.
// 
// Encryption modes
// ZipArchive::EM_NONE (int)             - No encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively.
// ZipArchive::EM_TRAD_PKWARE (int)      - Traditional PKWARE encryption. Available as of PHP 8.0.0 and PECL zip 1.19.0, respectively.
// ZipArchive::EM_AES_128 (int)          - AES 128 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively, if built against libzip ≥ 1.2.0.
// ZipArchive::EM_AES_192 (int)          - AES 192 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively, if built against libzip ≥ 1.2.0.
// ZipArchive::EM_AES_256 (int)          - AES 256 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively, if built against libzip ≥ 1.2.0.
// ZipArchive::EM_UNKNOWN (int)          - Unknown encryption algorithm. Available as of PHP 8.0.0 and PECL zip 1.19.0, respectively.
// 
// Length parameter constants
// ZipArchive::LENGTH_TO_END (int)       - Use file size, if the file grows additionnal data is ignored, if the file shrinks an error is raised (ZipArchive::ER_DATA_LENGTH). Available as of PHP 8.3.0 and PECL zip 1.22.2.
// ZipArchive::LENGTH_UNCHECKED (int)    - Use all available data. Available as of PHP 8.3.0 and PECL zip 1.22.2, if built against libzip ≥ 1.10.1.
// 
// Other constants
// ZipArchive::LIBZIP_VERSION (string)   - Zip library version. Available as of PHP 7.4.3 and PECL zip 1.16.0.
// 
// Operating system constants for external attributes
// ZipArchive::OPSYS_DOS (int)           -
// ZipArchive::OPSYS_AMIGA (int)         -
// ZipArchive::OPSYS_OPENVMS (int)       -
// ZipArchive::OPSYS_UNIX (int)          -
// ZipArchive::OPSYS_VM_CMS (int)        -
// ZipArchive::OPSYS_ATARI_ST (int)      -
// ZipArchive::OPSYS_OS_2 (int)          -
// ZipArchive::OPSYS_MACINTOSH (int)     -
// ZipArchive::OPSYS_Z_SYSTEM (int)      -
// ZipArchive::OPSYS_CPM (int)           -
// ZipArchive::OPSYS_WINDOWS_NTFS (int)  -
// ZipArchive::OPSYS_MVS (int)           -
// ZipArchive::OPSYS_VSE (int)           -
// ZipArchive::OPSYS_ACORN_RISC (int)    -
// ZipArchive::OPSYS_VFAT (int)          -
// ZipArchive::OPSYS_ALTERNATE_MVS (int) -
// ZipArchive::OPSYS_BEOS (int)          -
// ZipArchive::OPSYS_TANDEM (int)        -
// ZipArchive::OPSYS_OS_400 (int)        -
// ZipArchive::OPSYS_OS_X (int)          -
// ZipArchive::OPSYS_DEFAULT (int)       - Since PECL zip 1.12.4
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// [example]
// Example #1 Create a Zip archive
// [php]
// 
// $zip = new ZipArchive();
// $filename = "./test112.zip";
// 
// if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
//     exit("cannot open <$filename>\n");
// }
// 
// $zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
// $zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
// $zip->addFile($thisdir . "/too.php","/testfromfile.php");
// echo "numfiles: " . $zip->numFiles . "\n";
// echo "status:" . $zip->status . "\n";
// $zip->close();
// [/php]
// [/example]
// [example]
// Example #2 Dump the archive details and listing
// [php]
// $za = new ZipArchive();
// 
// $za->open('test_with_comment.zip');
// print_r($za);
// var_dump($za);
// echo "numFiles: " . $za->numFiles . "\n";
// echo "status: " . $za->status  . "\n";
// echo "statusSys: " . $za->statusSys . "\n";
// echo "filename: " . $za->filename . "\n";
// echo "comment: " . $za->comment . "\n";
// 
// for ($i=0; $i<$za->numFiles;$i++) {
//     echo "index: $i\n";
//     print_r($za->statIndex($i));
// }
// echo "numFile:" . $za->numFiles . "\n";
// [/php]
// [/example]
// [example]
// Example #3 Zip stream wrapper, read an OpenOffice meta info
// [php]
// $reader = new XMLReader();
// 
// $reader->open('zip://' . dirname(__FILE__) . '/test.odt#meta.xml');
// $odt_meta = array();
// while ($reader->read()) {
//     if ($reader->nodeType == XMLREADER::ELEMENT) {
//         $elm = $reader->name;
//     } else {
//         if ($reader->nodeType == XMLREADER::END_ELEMENT && $reader->name == 'office:meta') {
//             break;
//         }
//         if (!trim($reader->value)) {
//             continue;
//         }
//         $odt_meta[$elm] = $reader->value;
//     }
// }
// print_r($odt_meta);
// [/php]
// This example uses the old API (PHP 4), it opens a ZIP file archive, reads each file in the archive and prints out its contents. The test2.zip archive used in this example is one of the test archives in the ZZIPlib source distribution.
// [/example]
// [example]
// Example #4 Zip Usage Example
// [php]
// 
// $zip = zip_open("/tmp/test2.zip");
// 
// if ($zip) {
//     while ($zip_entry = zip_read($zip)) {
//         echo "Name:               " . zip_entry_name($zip_entry) . "\n";
//         echo "Actual Filesize:    " . zip_entry_filesize($zip_entry) . "\n";
//         echo "Compressed Size:    " . zip_entry_compressedsize($zip_entry) . "\n";
//         echo "Compression Method: " . zip_entry_compressionmethod($zip_entry) . "\n";
// 
//         if (zip_entry_open($zip, $zip_entry, "r")) {
//             echo "File Contents:\n";
//             $buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
//             echo "$buf\n";
// 
//             zip_entry_close($zip_entry);
//         }
//         echo "\n";
// 
//     }
// 
//     zip_close($zip);
// 
// }
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/zip.examples.php
// EXAMPLES - END
// 
// THE_ZIPARCHIVE_CLASS - BEGIN
// The ZipArchive class
// 
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// 
// Introduction
// A file archive, compressed with Zip.
// 
// Class synopsis
// [code]
// class ZipArchive implements Countable {
// 
//    /* Constants */
//    public const int CREATE;
//    public const int EXCL;
//    public const int CHECKCONS;
//    public const int OVERWRITE;
//    public const int RDONLY;
//    public const int FL_NOCASE;
//    public const int FL_NODIR;
//    public const int FL_COMPRESSED;
//    public const int FL_UNCHANGED;
//    public const int FL_RECOMPRESS;
//    public const int FL_ENCRYPTED;
//    public const int FL_OVERWRITE;
//    public const int FL_LOCAL;
//    public const int FL_CENTRAL;
//    public const int FL_ENC_GUESS;
//    public const int FL_ENC_RAW;
//    public const int FL_ENC_STRICT;
//    public const int FL_ENC_UTF_8;
//    public const int FL_ENC_CP437;
//    public const int CM_DEFAULT;
//    public const int CM_STORE;
//    public const int CM_SHRINK;
//    public const int CM_REDUCE_1;
//    public const int CM_REDUCE_2;
//    public const int CM_REDUCE_3;
//    public const int CM_REDUCE_4;
//    public const int CM_IMPLODE;
//    public const int CM_DEFLATE;
//    public const int CM_DEFLATE64;
//    public const int CM_PKWARE_IMPLODE;
//    public const int CM_BZIP2;
//    public const int CM_LZMA;
//    public const int CM_LZMA2;
//    public const int CM_ZSTD;
//    public const int CM_XZ;
//    public const int CM_TERSE;
//    public const int CM_LZ77;
//    public const int CM_WAVPACK;
//    public const int CM_PPMD;
//    public const int ER_OK;
//    public const int ER_MULTIDISK;
//    public const int ER_RENAME;
//    public const int ER_CLOSE;
//    public const int ER_SEEK;
//    public const int ER_READ;
//    public const int ER_WRITE;
//    public const int ER_CRC;
//    public const int ER_ZIPCLOSED;
//    public const int ER_NOENT;
//    public const int ER_EXISTS;
//    public const int ER_OPEN;
//    public const int ER_TMPOPEN;
//    public const int ER_ZLIB;
//    public const int ER_MEMORY;
//    public const int ER_CHANGED;
//    public const int ER_COMPNOTSUPP;
//    public const int ER_EOF;
//    public const int ER_INVAL;
//    public const int ER_NOZIP;
//    public const int ER_INTERNAL;
//    public const int ER_INCONS;
//    public const int ER_REMOVE;
//    public const int ER_DELETED;
//    public const int ER_ENCRNOTSUPP;
//    public const int ER_RDONLY;
//    public const int ER_NOPASSWD;
//    public const int ER_WRONGPASSWD;
//    public const int ER_OPNOTSUPP;
//    public const int ER_INUSE;
//    public const int ER_TELL;
//    public const int ER_COMPRESSED_DATA;
//    public const int ER_CANCELLED;
//    public const int OPSYS_DOS;
//    public const int OPSYS_AMIGA;
//    public const int OPSYS_OPENVMS;
//    public const int OPSYS_UNIX;
//    public const int OPSYS_VM_CMS;
//    public const int OPSYS_ATARI_ST;
//    public const int OPSYS_OS_2;
//    public const int OPSYS_MACINTOSH;
//    public const int OPSYS_Z_SYSTEM;
//    public const int OPSYS_CPM;
//    public const int OPSYS_WINDOWS_NTFS;
//    public const int OPSYS_MVS;
//    public const int OPSYS_VSE;
//    public const int OPSYS_ACORN_RISC;
//    public const int OPSYS_VFAT;
//    public const int OPSYS_ALTERNATE_MVS;
//    public const int OPSYS_BEOS;
//    public const int OPSYS_TANDEM;
//    public const int OPSYS_OS_400;
//    public const int OPSYS_OS_X;
//    public const int OPSYS_DEFAULT;
//    public const int EM_NONE;
//    public const int EM_TRAD_PKWARE;
//    public const int EM_AES_128;
//    public const int EM_AES_192;
//    public const int EM_AES_256;
//    public const int EM_UNKNOWN;
//    public const string LIBZIP_VERSION;
// 
//    /* Properties */
//    public readonly int $lastId;
//    public readonly int $status;
//    public readonly int $statusSys;
//    public readonly int $numFiles;
//    public readonly string $filename;
//    public readonly string $comment;
// 
//    /* Methods */
//    public addEmptyDir(string $dirname, int $flags = 0): bool
//    public addFile(
//        string $filepath,
//        string $entryname = "",
//        int $start = 0,
//        int $length = ZipArchive::LENGTH_TO_END,
//        int $flags = ZipArchive::FL_OVERWRITE
//    ): bool
//    public addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE): bool
//    public addGlob(string $pattern, int $flags = 0, array $options = []): array|false
//    public addPattern(string $pattern, string $path = ".", array $options = []): array|false
//    public clearError(): void
//    public close(): bool
//    public count(): int
//    public deleteIndex(int $index): bool
//    public deleteName(string $name): bool
//    public extractTo(string $pathto, array|string|null $files = null): bool
//    public getArchiveComment(int $flags = 0): string|false
//    public getArchiveFlag(int $flag = 0, int $flags = 0): int
//    public getCommentIndex(int $index, int $flags = 0): string|false
//    public getCommentName(string $name, int $flags = 0): string|false
//    public getExternalAttributesIndex(
//        int $index,
//        int &$opsys,
//        int &$attr,
//        int $flags = 0
//    ): bool
//    public getExternalAttributesName(
//        string $name,
//        int &$opsys,
//        int &$attr,
//        int $flags = 0
//    ): bool
//    public getFromIndex(int $index, int $len = 0, int $flags = 0): string|false
//    public getFromName(string $name, int $len = 0, int $flags = 0): string|false
//    public getNameIndex(int $index, int $flags = 0): string|false
//    public getStatusString(): string
//    public getStream(string $name): resource|false
//    public getStreamIndex(int $index, int $flags = 0): resource|false
//    public getStreamName(string $name, int $flags = 0): resource|false
//    public static isCompressionMethodSupported(int $method, bool $enc = true): bool
//    public static isEncryptionMethodSupported(int $method, bool $enc = true): bool
//    public locateName(string $name, int $flags = 0): int|false
//    public open(string $filename, int $flags = 0): bool|int
//    public registerCancelCallback(callable $callback): bool
//    public registerProgressCallback(float $rate, callable $callback): bool
//    public renameIndex(int $index, string $new_name): bool
//    public renameName(string $name, string $new_name): bool
//    public replaceFile(
//        string $filepath,
//        int $index,
//        int $start = 0,
//        int $length = ZipArchive::LENGTH_TO_END,
//        int $flags = 0
//    ): bool
//    public setArchiveComment(string $comment): bool
//    public setArchiveFlag(int $flag, int $value): bool
//    public setCommentIndex(int $index, string $comment): bool
//    public setCommentName(string $name, string $comment): bool
//    public setCompressionIndex(int $index, int $method, int $compflags = 0): bool
//    public setCompressionName(string $name, int $method, int $compflags = 0): bool
//    public setEncryptionIndex(int $index, int $method, ?string $password = null): bool
//    public setEncryptionName(string $name, int $method, ?string $password = null): bool
//    public setExternalAttributesIndex(
//        int $index,
//        int $opsys,
//        int $attr,
//        int $flags = 0
//    ): bool
//    public setExternalAttributesName(
//        string $name,
//        int $opsys,
//        int $attr,
//        int $flags = 0
//    ): bool
//    public setMtimeIndex(int $index, int $timestamp, int $flags = 0): bool
//    public setMtimeName(string $name, int $timestamp, int $flags = 0): bool
//    public setPassword(string $password): bool
//    public statIndex(int $index, int $flags = 0): array|false
//    public statName(string $name, int $flags = 0): array|false
//    public unchangeAll(): bool
//    public unchangeArchive(): bool
//    public unchangeIndex(int $index): bool
//    public unchangeName(string $name): bool
// }
// [/code]
// 
// Properties
// lastId    - Index value of last added entry (file or directory). Available as of PHP 8.0.0 and PECL zip 1.18.0.
// status    - Status of the Zip Archive. Available for closed archive, as of PHP 8.0.0 and PECL zip 1.18.0.
// statusSys - System status of the Zip Archive. Available for closed archive, as of PHP 8.0.0 and PECL zip 1.18.0.
// numFiles  - Number of files in archive
// filename  - File name in the file system
// comment   - Comment for the archive
// 
// Table of Contents
// * ZipArchive::addEmptyDir                  - Add a new directory
// * ZipArchive::addFile                      - Adds a file to a ZIP archive from the given path
// * ZipArchive::addFromString                - Add a file to a ZIP archive using its contents
// * ZipArchive::addGlob                      - Add files from a directory by glob pattern
// * ZipArchive::addPattern                   - Add files from a directory by PCRE pattern
// * ZipArchive::clearError                   - Clear the status error message, system and/or zip messages
// * ZipArchive::close                        - Close the active archive (opened or newly created)
// * ZipArchive::count                        - Counts the number of files in the archive
// * ZipArchive::deleteIndex                  - Delete an entry in the archive using its index
// * ZipArchive::deleteName                   - Delete an entry in the archive using its name
// * ZipArchive::extractTo                    - Extract the archive contents
// * ZipArchive::getArchiveComment            - Returns the Zip archive comment
// * ZipArchive::getArchiveFlag               - Returns the value of a Zip archive global flag
// * ZipArchive::getCommentIndex              - Returns the comment of an entry using the entry index
// * ZipArchive::getCommentName               - Returns the comment of an entry using the entry name
// * ZipArchive::getExternalAttributesIndex   - Retrieve the external attributes of an entry defined by its index
// * ZipArchive::getExternalAttributesName    - Retrieve the external attributes of an entry defined by its name
// * ZipArchive::getFromIndex                 - Returns the entry contents using its index
// * ZipArchive::getFromName                  - Returns the entry contents using its name
// * ZipArchive::getNameIndex                 - Returns the name of an entry using its index
// * ZipArchive::getStatusString              - Returns the status error message, system and/or zip messages
// * ZipArchive::getStream                    - Get a file handler to the entry defined by its name (read only)
// * ZipArchive::getStreamIndex               - Get a file handler to the entry defined by its index (read only)
// * ZipArchive::getStreamName                - Get a file handler to the entry defined by its name (read only)
// * ZipArchive::isCompressionMethodSupported - Check if a compression method is supported by libzip
// * ZipArchive::isEncryptionMethodSupported  - Check if a encryption method is supported by libzip
// * ZipArchive::locateName                   - Returns the index of the entry in the archive
// * ZipArchive::open                         - Open a ZIP file archive
// * ZipArchive::registerCancelCallback       - Register a callback to allow cancellation during archive close.
// * ZipArchive::registerProgressCallback     - Register a callback to provide updates during archive close.
// * ZipArchive::renameIndex                  - Renames an entry defined by its index
// * ZipArchive::renameName                   - Renames an entry defined by its name
// * ZipArchive::replaceFile                  - Replace file in ZIP archive with a given path
// * ZipArchive::setArchiveComment            - Set the comment of a ZIP archive
// * ZipArchive::setArchiveFlag               - Set a global flag of a ZIP archive
// * ZipArchive::setCommentIndex              - Set the comment of an entry defined by its index
// * ZipArchive::setCommentName               - Set the comment of an entry defined by its name
// * ZipArchive::setCompressionIndex          - Set the compression method of an entry defined by its index
// * ZipArchive::setCompressionName           - Set the compression method of an entry defined by its name
// * ZipArchive::setEncryptionIndex           - Set the encryption method of an entry defined by its index
// * ZipArchive::setEncryptionName            - Set the encryption method of an entry defined by its name
// * ZipArchive::setExternalAttributesIndex   - Set the external attributes of an entry defined by its index
// * ZipArchive::setExternalAttributesName    - Set the external attributes of an entry defined by its name
// * ZipArchive::setMtimeIndex                - Set the modification time of an entry defined by its index
// * ZipArchive::setMtimeName                 - Set the modification time of an entry defined by its name
// * ZipArchive::setPassword                  - Set the password for the active archive
// * ZipArchive::statIndex                    - Get the details of an entry defined by its index
// * ZipArchive::statName                     - Get the details of an entry defined by its name
// * ZipArchive::unchangeAll                  - Undo all changes done in the archive
// * ZipArchive::unchangeArchive              - Revert all global changes done in the archive
// * ZipArchive::unchangeIndex                - Revert all changes done to an entry at the given index
// * ZipArchive::unchangeName                 - Revert all changes done to an entry with the given name
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/class.ziparchive.php
// THE_ZIPARCHIVE_CLASS - END
// 
// ZIP_FUNCTIONS - BEGIN
// Zip Functions
// 
// Warning: The procedural API is deprecated as of PHP 8.0.0. ZipArchive should be used instead.
// 
// Table of Contents
// * zip_close                   - Close a ZIP file archive
// * zip_entry_close             - Close a directory entry
// * zip_entry_compressedsize    - Retrieve the compressed size of a directory entry
// * zip_entry_compressionmethod - Retrieve the compression method of a directory entry
// * zip_entry_filesize          - Retrieve the actual file size of a directory entry
// * zip_entry_name              - Retrieve the name of a directory entry
// * zip_entry_open              - Open a directory entry for reading
// * zip_entry_read              - Read from an open directory entry
// * zip_open                    - Open a ZIP file archive
// * zip_read                    - Read next entry in a ZIP file archive
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/ref.zip.php
// ZIP_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/intro.misc.php
// ZIP - END
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_CLOSE 
// ============================== PUBLIC
// ============================== ABOUT
// Close a ZIP file archive.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_close() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_close($zip)
{

// ========== ZIP_CLOSE - BEGIN
// ===== ABOUT
// Close a ZIP file archive
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Closes the given ZIP file archive.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_close(resource $zip): void
// ===== CODE
zip_close(

$zip // resource zip - A ZIP file previously opened with zip_open().

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::close().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/function.zip-close.php
// ========== ZIP_CLOSE - END

// SYNTAX:
// void zip_close(resource $zip)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_CLOSE 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close a directory entry.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_close() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_close($zip_entry)
{
$return_zip_entry_close = false;

// ========== ZIP_ENTRY_CLOSE - BEGIN
// ===== ABOUT
// Close a directory entry
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Closes the specified directory entry.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_close(resource $zip_entry): bool
// ===== CODE
$return_zip_entry_close = zip_entry_close(

$zip_entry // resource zip_entry - A directory entry previously opened zip_entry_open().

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/function.zip-entry-close.php
// ========== ZIP_ENTRY_CLOSE - END

// SYNTAX:
// bool zip_entry_close(resource $zip_entry)

return $return_zip_entry_close; // bool
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_CLOSE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_COMPRESSEDSIZE
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve the compressed size of a directory entry.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_compressedsize() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_compressedsize($zip_entry)
{
$return_zip_entry_compressedsize = false;

// ========== ZIP_ENTRY_COMPRESSEDSIZE - BEGIN
// ===== ABOUT
// Retrieve the compressed size of a directory entry
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Returns the compressed size of the specified directory entry.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_compressedsize(resource $zip_entry): int|false
// ===== CODE
$return_zip_entry_compressedsize = zip_entry_compressedsize(

$zip_entry // resource zip_entry - A directory entry returned by zip_read().

); // Return Values
// The compressed size, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::statIndex().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/function.zip-entry-compressedsize.php
// ========== ZIP_ENTRY_COMPRESSEDSIZE - END

// SYNTAX:
// int|false zip_entry_compressedsize(resource $zip_entry)

return $return_zip_entry_compressedsize; // int|false
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_COMPRESSEDSIZE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_COMPRESSIONMETHOD
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve the compression method of a directory entry.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_compressionmethod() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_compressionmethod($zip_entry)
{
$return_zip_entry_compressionmethod = false;

// ========== ZIP_ENTRY_COMPRESSIONMETHOD - BEGIN
// ===== ABOUT
// Retrieve the compression method of a directory entry
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Returns the compression method of the directory entry specified by zip_entry.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_compressionmethod(resource $zip_entry): string|false
// ===== CODE
$return_zip_entry_compressionmethod = zip_entry_compressionmethod(

$zip_entry // resource zip_entry - A directory entry returned by zip_read().

); // Return Values
// The compression method, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::statIndex().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/function.zip-entry-compressionmethod.php
// ========== ZIP_ENTRY_COMPRESSIONMETHOD - END

// SYNTAX:
// string|false zip_entry_compressionmethod(resource $zip_entry)

return $return_zip_entry_compressionmethod; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_COMPRESSIONMETHOD
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_FILESIZE
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve the actual file size of a directory entry.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_filesize() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_filesize($zip_entry)
{
$return_zip_entry_filesize = false;

// ========== ZIP_ENTRY_FILESIZE - BEGIN
// ===== ABOUT
// Retrieve the actual file size of a directory entry
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Returns the actual size of the specified directory entry.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_filesize(resource $zip_entry): int|false
// ===== CODE
$return_zip_entry_filesize = zip_entry_filesize(

$zip_entry // resource zip_entry - A directory entry returned by zip_read().

); // Return Values
// The size of the directory entry, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::statIndex().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-11)
// URL: https://www.php.net/manual/en/function.zip-entry-filesize.php
// ========== ZIP_ENTRY_FILESIZE - END

// SYNTAX:
// int|false zip_entry_filesize(resource $zip_entry)

return $return_zip_entry_filesize; // int|false
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_FILESIZE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve the name of a directory entry.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
//PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_name() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_name($zip_entry)
{
$return_zip_entry_name = false;

// ========== ZIP_ENTRY_NAME - BEGIN
// ===== ABOUT
// Retrieve the name of a directory entry
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Returns the name of the specified directory entry.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_name(resource $zip_entry): string|false
// ===== CODE
$return_zip_entry_name = zip_entry_name(

$zip_entry // resource zip_entry - A directory entry returned by zip_read().

); // Return Values
// The name of the directory entry, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::statIndex().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zip-entry-name.php
// ========== ZIP_ENTRY_NAME - END

// SYNTAX:
// string|false zip_entry_name(resource $zip_entry)

return $return_zip_entry_name; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_NAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Open a directory entry for reading.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_open() - PHP_4 >= 4_1_0, PHP_5 >= 5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_open($zip_dp, $zip_entry, $mode = "rb")
{
$return_zip_entry_open = false;

// ========== ZIP_ENTRY_OPEN - BEGIN
// ===== ABOUT
// Open a directory entry for reading
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Opens a directory entry in a zip file for reading.
// ===== SUPPORTED
// PHP_4 >= 4_1_0, PHP_5 >= 5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_open(resource $zip_dp, resource $zip_entry, string $mode = "rb"): bool
// ===== CODE
$return_zip_entry_open = zip_entry_open(

$zip_dp, // resource zip_dp - A valid resource handle returned by zip_open().

$zip_entry, // resource zip_entry - A directory entry returned by zip_read().

$mode // string mode - Any of the modes specified in the documentation of fopen().
// Note: Currently, mode is ignored and is always "rb". This is due to the fact that zip support in PHP is read only access.

); // Return Values
// Returns true on success or false on failure.
// Note: Unlike fopen() and other similar functions, the return value of zip_entry_open() only indicates the result of the operation and is not needed for reading or closing the directory entry.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zip-entry-open.php
// ========== ZIP_ENTRY_OPEN - END

// SYNTAX:
// bool zip_entry_open(resource $zip_dp, resource $zip_entry, string $mode = "rb")

return $return_zip_entry_open; // bool
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_OPEN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_READ
// ============================== PUBLIC
// ============================== ABOUT
// Read from an open directory entry.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_entry_read() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_entry_read($zip_entry, $len = 1024)
{
$return_zip_entry_read = false;

// ========== ZIP_ENTRY_READ - BEGIN
// ===== ABOUT
// Read from an open directory entry
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Reads from an open directory entry.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_entry_read(resource $zip_entry, int $len = 1024): string|false
// ===== CODE
$return_zip_entry_read = zip_entry_read(

$zip_entry, // resource zip_entry - A directory entry returned by zip_read().

$len // int len - The number of bytes to return.
// Note: This should be the uncompressed length you wish to read.

); // Return Values
// Returns the data read, empty string on end of a file, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::getFromIndex().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zip-entry-read.php
// ========== ZIP_ENTRY_READ - END

// SYNTAX:
// string|false zip_entry_read(resource $zip_entry, int $len = 1024)

return $return_zip_entry_read; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZIP_ZIP_ENTRY_READ
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZIP_ZIP_OPEN  
// ============================== PUBLIC
// ============================== ABOUT
// Open a ZIP file archive.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_open() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_open($filename)
{
$return_zip_open = false;

// ========== ZIP_OPEN - BEGIN
// ===== ABOUT
// Open a ZIP file archive
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Opens a new zip archive for reading.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_open(string $filename): resource|int|false
// ===== CODE
$return_zip_open = zip_open(

$filename // string filename - The file name of the ZIP archive to open.

); // Return Values
// Returns a resource handle for later use with zip_read() and zip_close() or returns either false or the number of error if filename does not exist or in case of other error.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::open().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zip-open.php
// ========== ZIP_OPEN - END

// SYNTAX:
// resource|int|false zip_open(string $filename)

return $return_zip_open; // resource|int|false
}
// ============================== END
//  PHP_COMPRESSION_ZIP_ZIP_OPEN  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZIP_ZIP_READ  
// ============================== PUBLIC
// ============================== ABOUT
// Read next entry in a ZIP file archive.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8, PECL_zip_1_0_0
// ============================== USING FUNCTIONS (1)
// zip_read() - PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ============================== CODE
function php_compression_zip_zip_read($zip)
{
$return_zip_read = false;

// ========== ZIP_READ - BEGIN
// ===== ABOUT
// Read next entry in a ZIP file archive
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Reads the next entry in a zip file archive.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_0_0
// ===== SYNTAX
// zip_read(resource $zip): resource|false
// ===== CODE
$return_zip_read = zip_read(

$zip // resource zip - A ZIP file previously opened with zip_open().

); // Return Values
// Returns a directory entry resource for later use with the zip_entry_... functions, or false if there are no more entries to read, or an error code if an error occurred.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is deprecated in favor of the Object API, see ZipArchive::statIndex().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zip-read.php
// ========== ZIP_READ - END

// SYNTAX:
// resource|false zip_read(resource $zip)

return $return_zip_read; // resource|false
}
// ============================== END
//  PHP_COMPRESSION_ZIP_ZIP_READ  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE
// ============================== OFFLINE
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDEMPTYDIR - bool php_compression_zip_ziparchive_addemptydir(ZipArchive $ziparchive, string $dirname, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDFILE - bool php_compression_zip_ziparchive_addfile(ZipArchive $ziparchive, string $filepath, string $entryname = "", int $start = 0, int $length = ZipArchive::LENGTH_TO_END, int $flags = ZipArchive::FL_OVERWRITE)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDFROMSTRING - bool php_compression_zip_ziparchive_addfromstring(ZipArchive $ziparchive, string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDGLOB - array|false php_compression_zip_ziparchive_addglob(ZipArchive $ziparchive, string $pattern, int $flags = 0, array $options = array())
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDPATTERN - array|false php_compression_zip_ziparchive_addpattern(ZipArchive $ziparchive, string $pattern, string $path = ".", array $options = array())
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_CLEARERROR - void php_compression_zip_ziparchive_clearerror(ZipArchive $ziparchive)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_CLOSE - bool php_compression_zip_ziparchive_close(ZipArchive $ziparchive)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_COUNT - int php_compression_zip_ziparchive_count(ZipArchive $ziparchive)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_DELETEINDEX - bool php_compression_zip_ziparchive_deleteindex(ZipArchive $ziparchive, int $index)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_DELETENAME - bool php_compression_zip_ziparchive_deletename(ZipArchive $ziparchive, string $name)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_EXTRACTTO - bool php_compression_zip_ziparchive_extractto(ZipArchive $ziparchive, string $pathto, array|string|null $files = null)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETARCHIVECOMMENT - string|false php_compression_zip_ziparchive_getarchivecomment(ZipArchive $ziparchive, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETARCHIVEFLAG - int php_compression_zip_ziparchive_getarchiveflag(ZipArchive $ziparchive, int $flag = 0, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETCOMMENTINDEX - string|false php_compression_zip_ziparchive_getcommentindex(ZipArchive $ziparchive, int $index, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETCOMMENTNAME - string|false php_compression_zip_ziparchive_getcommentname(ZipArchive $ziparchive, string $name, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETEXTERNALATTRIBUTESINDEX - bool php_compression_zip_ziparchive_getexternalattributesindex(ZipArchive $ziparchive, int $index, int& $opsys, int& $attr, int $flags)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETEXTERNALATTRIBUTESNAME - bool php_compression_zip_ziparchive_getexternalattributesname(ZipArchive $ziparchive, string $name, int& $opsys, int& $attr, int $flags)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETFROMINDEX - string|false php_compression_zip_ziparchive_getfromindex(ZipArchive $ziparchive, int $index, int $len = 0, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETFROMNAME - string|false php_compression_zip_ziparchive_getfromname(ZipArchive $ziparchive, string $name, int $len = 0, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETNAMEINDEX - string|false php_compression_zip_ziparchive_getnameindex(ZipArchive $ziparchive, int $index, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTATUSSTRING - string php_compression_zip_ziparchive_getstatusstring(ZipArchive $ziparchive)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAM - resource|false php_compression_zip_ziparchive_getstream(ZipArchive $ziparchive, string $name)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAMINDEX - resource|false php_compression_zip_ziparchive_getstreamindex(ZipArchive $ziparchive, int $index, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAMNAME - resource|false php_compression_zip_ziparchive_getstreamname(ZipArchive $ziparchive, string $name, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ISCOMPRESSIONMETHODSUPPORTED - bool php_compression_zip_ziparchive_iscompressionmethodsupported(ZipArchive $ziparchive, int $method, bool $enc = true)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_ISENCRYPTIONMETHODSUPPORTED - bool php_compression_zip_ziparchive_isencryptionmethodsupported(ZipArchive $ziparchive, int $method, bool $enc = true)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_LOCATENAME - int|false php_compression_zip_ziparchive_locatename(ZipArchive $ziparchive, string $name, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_OPEN - bool|int php_compression_zip_ziparchive_open(ZipArchive $ziparchive, string $filename, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_REGISTERCANCELCALLBACK - bool php_compression_zip_ziparchive_registercancelcallback(ZipArchive $ziparchive, callable $callback)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_REGISTERPROGRESSCALLBACK - bool php_compression_zip_ziparchive_registerprogresscallback(ZipArchive $ziparchive, float $rate, callable $callback)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_RENAMEINDEX - bool php_compression_zip_ziparchive_renameindex(ZipArchive $ziparchive, int $index, string $new_name)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_RENAMENAME - bool php_compression_zip_ziparchive_renamename(ZipArchive $ziparchive, string $name, string $new_name)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_REPLACEFILE - bool php_compression_zip_ziparchive_replacefile(ZipArchive $ziparchive, string $filepath, int $index, int $start = 0, int $length = ZipArchive::LENGTH_TO_END, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETARCHIVECOMMENT - bool php_compression_zip_ziparchive_setarchivecomment(ZipArchive $ziparchive, string $comment)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETARCHIVEFLAG - bool php_compression_zip_ziparchive_setarchiveflag(ZipArchive $ziparchive, int $flag, int $value)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMMENTINDEX - bool php_compression_zip_ziparchive_setcommentindex(ZipArchive $ziparchive, int $index, string $comment)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMMENTNAME - bool php_compression_zip_ziparchive_setcommentname(ZipArchive $ziparchive, string $name, string $comment)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMPRESSIONINDEX - bool php_compression_zip_ziparchive_setcompressionindex(ZipArchive $ziparchive, int $index, int $method, int $compflags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMPRESSIONNAME - bool php_compression_zip_ziparchive_setcompressionname(ZipArchive $ziparchive, string $name, int $method, int $compflags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETENCRYPTIONINDEX - bool php_compression_zip_ziparchive_setencryptionindex(ZipArchive $ziparchive, int $index, int $method, string $password = null)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETENCRYPTIONNAME - bool php_compression_zip_ziparchive_setencryptionname(ZipArchive $ziparchive, string $name, int $method, string $password = null)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETEXTERNALATTRIBUTESINDEX - bool php_compression_zip_ziparchive_setexternalattributesindex(ZipArchive $ziparchive, int $index, int $opsys, int $attr, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETEXTERNALATTRIBUTESNAME - bool php_compression_zip_ziparchive_setexternalattributesname(ZipArchive $ziparchive, string $name, int $opsys, int $attr, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETMTIMEINDEX - bool php_compression_zip_ziparchive_setmtimeindex(ZipArchive $ziparchive, int $index, int $timestamp, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETMTIMENAME - bool php_compression_zip_ziparchive_setmtimename(ZipArchive $ziparchive, string $name, int $timestamp, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETPASSWORD - bool php_compression_zip_ziparchive_setpassword(ZipArchive $ziparchive, string $password)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_STATINDEX - array|false php_compression_zip_ziparchive_statindex(ZipArchive $ziparchive, int $index, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_STATNAME - array|false php_compression_zip_ziparchive_statname(ZipArchive $ziparchive, string $name, int $flags = 0)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEALL - bool php_compression_zip_ziparchive_unchangeall(ZipArchive $ziparchive)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEARCHIVE - bool php_compression_zip_ziparchive_unchangearchive(ZipArchive $ziparchive)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEINDEX - bool php_compression_zip_ziparchive_unchangeindex(ZipArchive $ziparchive, int $index)
// OFFLINE | PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGENAME - bool php_compression_zip_ziparchive_unchangename(ZipArchive $ziparchive, string $name)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_22_0
// ============================== USING SUBCLASSES (52)
// OFFLINE | ZipArchive::addEmptyDir() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_8_0
// OFFLINE | ZipArchive::addFile() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::addFromString() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::addGlob() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_9_0
// OFFLINE | ZipArchive::addPattern() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_9_0
// OFFLINE | ZipArchive::clearError() - PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// OFFLINE | ZipArchive::close() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::count() - PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_15_0
// OFFLINE | ZipArchive::deleteIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::deleteName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::extractTo() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::getArchiveComment() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::getArchiveFlag() - PHP_8 >= PHP_8_3_0, PECL_zip >= PECL_zip_1_22_0
// OFFLINE | ZipArchive::getCommentIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// OFFLINE | ZipArchive::getCommentName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// OFFLINE | ZipArchive::getExternalAttributesIndex() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// OFFLINE | ZipArchive::getExternalAttributesName() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// OFFLINE | ZipArchive::getFromIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::getFromName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::getNameIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::getStatusString() - PHP_5 >= PHP_5_2_7, PHP_7, PHP_8
// OFFLINE | ZipArchive::getStream() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::getStreamIndex() - PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// OFFLINE | ZipArchive::getStreamName() - PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// OFFLINE | ZipArchive::isCompressionMethodSupported() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_19_0
// OFFLINE | ZipArchive::isEncryptionMethodSupported() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_19_0
// OFFLINE | ZipArchive::locateName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::open() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::registerCancelCallback() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_17_0
// OFFLINE | ZipArchive::registerProgressCallback() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_17_0
// OFFLINE | ZipArchive::renameIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::renameName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::replaceFile() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_18_0
// OFFLINE | ZipArchive::setArchiveComment() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// OFFLINE | ZipArchive::setArchiveFlag() - PHP_8 >= PHP_8_3_0, PECL_zip >= PECL_zip_1_22_0
// OFFLINE | ZipArchive::setCommentIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// OFFLINE | ZipArchive::setCommentName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// OFFLINE | ZipArchive::setCompressionIndex() - PHP_7, PHP_8, PECL_zip >= PECL_zip_1_13_0
// OFFLINE | ZipArchive::setCompressionName() - PHP_7, PHP_8, PECL_zip >= PECL_zip_1_13_0
// OFFLINE | ZipArchive::setEncryptionIndex() - PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_14_0
// OFFLINE | ZipArchive::setEncryptionName() - PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_14_0
// OFFLINE | ZipArchive::setExternalAttributesIndex() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// OFFLINE | ZipArchive::setExternalAttributesName() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// OFFLINE | ZipArchive::setMtimeIndex() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_16_0
// OFFLINE | ZipArchive::setMtimeName() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_16_0
// OFFLINE | ZipArchive::setPassword() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// OFFLINE | ZipArchive::statIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::statName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// OFFLINE | ZipArchive::unchangeAll() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::unchangeArchive() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::unchangeIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// OFFLINE | ZipArchive::unchangeName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== USING DATA_TYPES (10)
// bool
// OFFLINE | ZipArchive - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// string
// int
// array
// false
// null
// resource
// callable
// float
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDEMPTYDIR
// ============================== OFFLINE
// ============================== ABOUT
// Add a new directory.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_8_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::addEmptyDir() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_8_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_addemptydir($ziparchive, $dirname, $flags = 0)
{
$return_ziparchive_addemptydir = false;

// ========== ZIPARCHIVE_ADDEMPTYDIR - BEGIN
// ===== ABOUT
// Add a new directory
// ===== DESCRIPTION
// Adds an empty directory in the archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_8_0
// ===== SYNTAX
// public ZipArchive::addEmptyDir(string $dirname, int $flags = 0): bool
// ===== CODE
$return_ziparchive_addemptydir = $ziparchive->addEmptyDir(

$dirname, // string dirname - The directory to add.

$flags // int flags - Bitmask consisting of ZipArchive::FL_ENC_GUESS, ZipArchive::FL_ENC_UTF_8, ZipArchive::FL_ENC_CP437. The behaviour of these constants is described on the ZIP constants page.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version        - Description
// 8.0.0 / 1.18.0 - flags was added.
// 
// [examples]
// Examples
// [example]
// Example #1 Create a new directory in an archive
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     if($zip->addEmptyDir('newDirectory')) {
//         echo 'Created a new root directory';
//     } else {
//         echo 'Could not create the directory';
//     }
//     $zip->close();
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.addemptydir.php
// ========== ZIPARCHIVE_ADDEMPTYDIR - END

// SYNTAX:
// bool ZipArchive::addEmptyDir(string $dirname, int $flags = 0)

return $return_ziparchive_addemptydir; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDEMPTYDIR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDFILE
// ============================== OFFLINE
// ============================== ABOUT
// Adds a file to a ZIP archive from the given path.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::addFile() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== USING CONSTANTS (2)
// ZipArchive::LENGTH_TO_END - ZipArchive::addFile()
// ZipArchive::FL_OVERWRITE - ZipArchive::addFile()
// ============================== CODE
/*
function php_compression_zip_ziparchive_addfile($ziparchive, $filepath, $entryname = "", $start = 0, $length = ZipArchive::LENGTH_TO_END, $flags = ZipArchive::FL_OVERWRITE)
{
$return_ziparchive_addfile = false;

// ========== ZIPARCHIVE_ADDFILE - BEGIN
// ===== ABOUT
// Adds a file to a ZIP archive from the given path
// ===== DESCRIPTION
// Adds a file to a ZIP archive from a given path.
// Note: For maximum portability, it is recommended to always use forward slashes (/) as directory separator in ZIP filenames.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::addFile(
//     string $filepath,
//     string $entryname = "",
//     int $start = 0,
//     int $length = ZipArchive::LENGTH_TO_END,
//     int $flags = ZipArchive::FL_OVERWRITE
// ): bool
// ===== CODE
$return_ziparchive_addfile = $ziparchive->addFile(

$filepath, // string filepath - The path to the file to add.

$entryname, // string entryname - If supplied and not empty, this is the local name inside the ZIP archive that will override the filepath.

$start, // int start - For partial copy, start position.

$length, // int length - For partial copy, length to be copied, if ZipArchive::LENGTH_TO_END (0) the file size is used, if ZipArchive::LENGTH_UNCHECKED the whole file is used (starting from start).

$flags // int flags - Bitmask consisting of ZipArchive::FL_OVERWRITE, ZipArchive::FL_ENC_GUESS, ZipArchive::FL_ENC_UTF_8, ZipArchive::FL_ENC_CP437, ZipArchive::FL_OPEN_FILE_NOW. The behaviour of these constants is described on the ZIP constants page.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version        - Description
// 8.0.0 / 1.18.0 - flags was added.
// 8.3.0 / 1.22.1 - ZipArchive::FL_OPEN_FILE_NOW was added.
// 8.3.0 / 1.22.2 - ZipArchive::LENGTH_TO_END and ZipArchive::LENGTH_UNCHECKED were added.
// 
// [examples]
// Examples
// [example]
// This example opens a ZIP file archive test.zip and add the file /path/to/index.txt. as newname.txt.
// Example #1 Open and add
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     $zip->addFile('/path/to/index.txt', 'newname.txt');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: When a file is set to be added to the archive, PHP will lock the file. The lock is only released once the ZipArchive object has been closed, either via ZipArchive::close() or the ZipArchive object being destroyed. This may prevent you from being able to delete the file being added until after the lock has been released.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.addfile.php
// ========== ZIPARCHIVE_ADDFILE - END

// SYNTAX:
// bool ZipArchive::addFile(string $filepath, string $entryname = "", int $start = 0, int $length = ZipArchive::LENGTH_TO_END, int $flags = ZipArchive::FL_OVERWRITE)

return $return_ziparchive_addfile; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDFILE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDFROMSTRING
// ============================== OFFLINE
// ============================== ABOUT
// Add a file to a ZIP archive using its contents.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::addFromString() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== USING CONSTANTS (1)
// ZipArchive::FL_OVERWRITE - ZipArchive::addFromString()
// ============================== CODE
/*
function php_compression_zip_ziparchive_addfromstring($ziparchive, $name, $content, $flags = ZipArchive::FL_OVERWRITE)
{
$return_ziparchive_addfromstring = false;

// ========== ZIPARCHIVE_ADDFROMSTRING - BEGIN
// ===== ABOUT
// Add a file to a ZIP archive using its contents
// ===== DESCRIPTION
// Add a file to a ZIP archive using its contents.
// Note: For maximum portability, it is recommended to always use forward slashes (/) as directory separator in ZIP filenames.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE): bool
// ===== CODE
$return_ziparchive_addfromstring = $ziparchive->addFromString(

$name, // string name - The name of the entry to create.

$content, // string content - The contents to use to create the entry. It is used in a binary safe mode.

$flags // int flags - Bitmask consisting of ZipArchive::FL_OVERWRITE, ZipArchive::FL_ENC_GUESS, ZipArchive::FL_ENC_UTF_8, ZipArchive::FL_ENC_CP437. The behaviour of these constants is described on the ZIP constants page.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version        - Description
// 8.0.0 / 1.18.0 - flags was added.
// 
// [examples]
// Examples
// [example]
// Example #1 Add an entry to a new archive
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('test.txt', 'file content goes here');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [example]
// Example #2 Add file to a directory inside an archive
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     $zip->addFromString('dir/test.txt', 'file content goes here');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.addfromstring.php
// ========== ZIPARCHIVE_ADDFROMSTRING - END

// SYNTAX:
// bool ZipArchive::addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE)

return $return_ziparchive_addfromstring; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDFROMSTRING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDGLOB
// ============================== OFFLINE
// ============================== ABOUT
// Add files from a directory by glob pattern.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_9_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::addGlob() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_9_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_addglob($ziparchive, $pattern, $flags = 0, $options = array())
{
$return_ziparchive_addglob = false;

// ========== ZIPARCHIVE_ADDGLOB - BEGIN
// ===== ABOUT
// Add files from a directory by glob pattern
// ===== DESCRIPTION
// Add files from a directory which match the glob pattern.
// Note: For maximum portability, it is recommended to always use forward slashes (/) as directory separator in ZIP filenames.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_9_0
// ===== SYNTAX
// public ZipArchive::addGlob(string $pattern, int $flags = 0, array $options = []): array|false
// ===== CODE
$return_ziparchive_addglob = $ziparchive->addGlob(

$pattern, // string pattern - A glob() pattern against which files will be matched.

$flags, // int flags - A bit mask of glob() flags.

$options // array options - An associative array of options. Available options are:
// * "add_path"        - Prefix to prepend when translating to the local path of the file within the archive. This is applied after any remove operations defined by the "remove_path" or "remove_all_path" options.
// * "remove_path"     - Prefix to remove from matching file paths before adding to the archive.
// * "remove_all_path" - true to use the file name only and add to the root of the archive.
// * "flags"           - Bitmask consisting of ZipArchive::FL_OVERWRITE, ZipArchive::FL_ENC_GUESS, ZipArchive::FL_ENC_UTF_8, ZipArchive::FL_ENC_CP437, ZipArchive::FL_OPEN_FILE_NOW. The behaviour of these constants is described on the ZIP constants page.
// * "comp_method"     - Compression method, one of the ZipArchive::CM_* constants, see ZIP constants page.
// * "comp_flags"      - Compression level.
// * "enc_method"      - Encryption method, one of the ZipArchive::EM_* constants, see ZIP constants page.
// * "enc_password"    - Password used for encryption.

); // Return Values
// An array of added files on success or false on failure
// 
// Changelog
// Version        - Description
// 8.0.0 / 1.18.0 - "flags" in options was added.
// 8.0.0 / 1.18.1 - "comp_method", "comp_flags", "enc_method" and "enc_password" in options were added.
// 8.3.0 / 1.22.1 - ZipArchive::FL_OPEN_FILE_NOW was added.
// 
// [examples]
// Examples
// [example]
// Example #1 ZipArchive::addGlob() example
// Add all php scripts and text files from current working directory
// [php]
// $zip = new ZipArchive();
// $ret = $zip->open('application.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
// if ($ret !== TRUE) {
//     printf('Failed with code %d', $ret);
// } else {
//     $options = array('add_path' => 'sources/', 'remove_all_path' => TRUE);
//     $zip->addGlob('*.{php,txt}', GLOB_BRACE, $options);
//     $zip->close();
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.addglob.php
// ========== ZIPARCHIVE_ADDGLOB - END

// SYNTAX:
// array|false ZipArchive::addGlob(string $pattern, int $flags = 0, array $options = array())

return $return_ziparchive_addglob; // array|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDGLOB
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDPATTERN
// ============================== OFFLINE
// ============================== ABOUT
// Add files from a directory by PCRE pattern.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_9_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::addPattern() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_9_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_addpattern($ziparchive, $pattern, $path = ".", $options = array())
{
$return_ziparchive_addpattern = false;

// ========== ZIPARCHIVE_ADDPATTERN - BEGIN
// ===== ABOUT
// Add files from a directory by PCRE pattern
// ===== DESCRIPTION
// Add files from a directory which match the regular expression pattern. The operation is not recursive. The pattern will be matched against the file name only.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_9_0
// ===== SYNTAX
// public ZipArchive::addPattern(string $pattern, string $path = ".", array $options = []): array|false
// ===== CODE
$return_ziparchive_addpattern = $ziparchive->addPattern(

$pattern, // string pattern - A PCRE pattern against which files will be matched.

$path, // string path - The directory that will be scanned. Defaults to the current working directory.

$options // array options - An associative array of options accepted by ZipArchive::addGlob().

); // Return Values
// An array of added files on success or false on failure
// 
// [examples]
// Examples
// [example]
// Example #1 ZipArchive::addPattern() example
// Add all php scripts and text files from current directory
// [php]
// $zip = new ZipArchive();
// $ret = $zip->open('application.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
// if ($ret !== TRUE) {
//     printf('Failed with code %d', $ret);
// } else {
//     $directory = realpath('.');
//     $options = array('add_path' => 'sources/', 'remove_path' => $directory);
//     $zip->addPattern('/\.(?:php|txt)$/', $directory, $options);
//     $zip->close();
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.addpattern.php
// ========== ZIPARCHIVE_ADDPATTERN - END

// SYNTAX:
// array|false ZipArchive::addPattern(string $pattern, string $path = ".", array $options = array())

return $return_ziparchive_addpattern; // array|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ADDPATTERN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_CLEARERROR
// ============================== OFFLINE
// ============================== ABOUT
// Clear the status error message, system and/or zip messages.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_20_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::clearError() - PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_clearerror($ziparchive)
{

// ========== ZIPARCHIVE_CLEARERROR - BEGIN
// ===== ABOUT
// Clear the status error message, system and/or zip messages
// ===== DESCRIPTION
// Clear the status error message, system and/or zip messages.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// ===== SYNTAX
// public ZipArchive::clearError(): void
// ===== CODE
$ziparchive->clearError(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.clearerror.php
// ========== ZIPARCHIVE_CLEARERROR - END

// SYNTAX:
// void ZipArchive::clearError()

// Return: void
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_CLEARERROR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_CLOSE
// ============================== OFFLINE
// ============================== ABOUT
// Close the active archive (opened or newly created).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::close() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_close($ziparchive)
{
$return_ziparchive_close = false;

// ========== ZIPARCHIVE_CLOSE - BEGIN
// ===== ABOUT
// Close the active archive (opened or newly created)
// ===== DESCRIPTION
// Close opened or created archive and save changes. This method is automatically called at the end of the script.
// If the archive contains no files, the file is completely removed by default (no empty archive is written) according to the value of the ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE global flag.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::close(): bool
// ===== CODE
$return_ziparchive_close = $ziparchive->close(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.close.php
// ========== ZIPARCHIVE_CLOSE - END

// SYNTAX:
// bool ZipArchive::close()

return $return_ziparchive_close; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_CLOSE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_COUNT
// ============================== OFFLINE
// ============================== ABOUT
// Counts the number of files in the archive.
// ============================== SUPPORT
// PHP_7 - PHP_8, PECL_zip_1_15_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::count() - PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_15_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_count($ziparchive)
{
$return_ziparchive_count = 0;

// ========== ZIPARCHIVE_COUNT - BEGIN
// ===== ABOUT
// Counts the number of files in the archive
// ===== DESCRIPTION
// This function has no parameters.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_15_0
// ===== SYNTAX
// public ZipArchive::count(): int
// ===== CODE
$return_ziparchive_count = $ziparchive->count(

// This function has no parameters.

); // Return Values
// Returns the number of files in the archive.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.count.php
// ========== ZIPARCHIVE_COUNT - END

// SYNTAX:
// int ZipArchive::count()

return $return_ziparchive_count; // int
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_COUNT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_DELETEINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Delete an entry in the archive using its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::deleteIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_deleteindex($ziparchive, $index)
{
$return_ziparchive_deleteindex = false;

// ========== ZIPARCHIVE_DELETEINDEX - BEGIN
// ===== ABOUT
// Delete an entry in the archive using its index
// ===== DESCRIPTION
// Delete an entry in the archive using its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::deleteIndex(int $index): bool
// ===== CODE
$return_ziparchive_deleteindex = $ziparchive->deleteIndex(

$index // int index - Index of the entry to delete.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Delete file from archive using its index
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     $zip->deleteIndex(2);
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.deleteindex.php
// ========== ZIPARCHIVE_DELETEINDEX - END

// SYNTAX:
// bool ZipArchive::deleteIndex(int $index)

return $return_ziparchive_deleteindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_DELETEINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_DELETENAME
// ============================== OFFLINE
// ============================== ABOUT
// Delete an entry in the archive using its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::deleteName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_deletename($ziparchive, $name)
{
$return_ziparchive_deletename = false;

// ========== ZIPARCHIVE_DELETENAME - BEGIN
// ===== ABOUT
// Delete an entry in the archive using its name
// ===== DESCRIPTION
// Delete an entry in the archive using its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::deleteName(string $name): bool
// ===== CODE
$return_ziparchive_deletename = $ziparchive->deleteName(

$name // string name - Name of the entry to delete.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Deleting a file and directory from an archive, using names
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test1.zip') === TRUE) {
//     $zip->deleteName('testfromfile.php');
//     $zip->deleteName('testDir/');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.deletename.php
// ========== ZIPARCHIVE_DELETENAME - END

// SYNTAX:
// bool ZipArchive::deleteName(string $name)

return $return_ziparchive_deletename; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_DELETENAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_EXTRACTTO
// ============================== OFFLINE
// ============================== ABOUT
// Extract the archive contents.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::extractTo() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_extractto($ziparchive, $pathto, $files = null)
{
$return_ziparchive_extractto = false;

// ========== ZIPARCHIVE_EXTRACTTO - BEGIN
// ===== ABOUT
// Extract the archive contents
// ===== DESCRIPTION
// Extract the complete archive or the given files to the specified destination.
//  Warning:
//  The default permissions for extracted files and directories give the widest possible access. This can be restricted by setting the current umask, which can be changed using umask().
//  For security reasons, the original permissions are not restored. For an example of how to restore them, see the code sample on the ZipArchive::getExternalAttributesIndex() page.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::extractTo(string $pathto, array|string|null $files = null): bool
// ===== CODE
$return_ziparchive_extractto = $ziparchive->extractTo(

$pathto, // string pathto - Location where to extract the files.

$files // array|string|null files - The entries to extract. It accepts either a single entry name or an array of names.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract all entries
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     $zip->extractTo('/my/destination/dir/');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [example]
// Example #2 Extract two entries
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test_im.zip');
// if ($res === TRUE) {
//     $zip->extractTo('/my/destination/dir/', array('pear_item.gif', 'testfromfile.php'));
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Windows NTFS file systems do not support some characters in filenames, namely <|>*?":. Filenames with a trailing dot are not supported either. Contrary to some extraction tools, this method does not replace these characters with an underscore, but instead fails to extract such files.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.extractto.php
// ========== ZIPARCHIVE_EXTRACTTO - END

// SYNTAX:
// bool ZipArchive::extractTo(string $pathto, array|string|null $files = null)

return $return_ziparchive_extractto; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_EXTRACTTO
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETARCHIVECOMMENT
// ============================== OFFLINE
// ============================== ABOUT
// Returns the Zip archive comment.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getArchiveComment() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getarchivecomment($ziparchive, $flags = 0)
{
$return_ziparchive_getarchivecomment = false;

// ========== ZIPARCHIVE_GETARCHIVECOMMENT - BEGIN
// ===== ABOUT
// Returns the Zip archive comment
// ===== DESCRIPTION
// Returns the Zip archive comment.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::getArchiveComment(int $flags = 0): string|false
// ===== CODE
$return_ziparchive_getarchivecomment = $ziparchive->getArchiveComment(

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged comment is returned.

); // Return Values
// Returns the Zip archive comment or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Dump an archive comment
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test_with_comment.zip');
// if ($res === TRUE) {
//     var_dump($zip->getArchiveComment());
//     // Or using the archive property
//     var_dump($zip->comment);
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getarchivecomment.php
// ========== ZIPARCHIVE_GETARCHIVECOMMENT - END

// SYNTAX:
// string|false ZipArchive::getArchiveComment(int $flags = 0)

return $return_ziparchive_getarchivecomment; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETARCHIVECOMMENT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETARCHIVEFLAG
// ============================== OFFLINE
// ============================== ABOUT
// Returns the value of a Zip archive global flag.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_22_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getArchiveFlag() - PHP_8 >= PHP_8_3_0, PECL_zip >= PECL_zip_1_22_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getarchiveflag($ziparchive, $flag = 0, $flags = 0)
{
$return_ziparchive_getarchiveflag = 0;

// ========== ZIPARCHIVE_GETARCHIVEFLAG - BEGIN
// ===== ABOUT
// Returns the value of a Zip archive global flag
// ===== DESCRIPTION
// Returns a Zip archive global flag value.
// ===== SUPPORTED
// PHP_8 >= PHP_8_3_0, PECL_zip >= PECL_zip_1_22_0
// ===== SYNTAX
// public ZipArchive::getArchiveFlag(int $flag = 0, int $flags = 0): int
// ===== CODE
$return_ziparchive_getarchiveflag = $ziparchive->getArchiveFlag(

$flag, // int flag - The global flag to retrieve, among AFL_* constants:
// * ZipArchive::AFL_RDONLY
// * ZipArchive::AFL_IS_TORRENTZIP
// * ZipArchive::AFL_WANT_TORRENTZIP
// * ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged flag is returned.

); // Return Values
// Returns 1 if flag is set for archive, 0 if not, and -1 if an error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 Test if archive is a torrentzip format
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     var_dump($zip->getArchiveFlag(ZipArchive::AFL_IS_TORRENTZIP));
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getarchiveflag.php
// ========== ZIPARCHIVE_GETARCHIVEFLAG - END

// SYNTAX:
// int ZipArchive::getArchiveFlag(int $flag = 0, int $flags = 0)

return $return_ziparchive_getarchiveflag; // int
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETARCHIVEFLAG
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETCOMMENTINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Returns the comment of an entry using the entry index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_4_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getCommentIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getcommentindex($ziparchive, $index, $flags = 0)
{
$return_ziparchive_getcommentindex = false;

// ========== ZIPARCHIVE_GETCOMMENTINDEX - BEGIN
// ===== ABOUT
// Returns the comment of an entry using the entry index
// ===== DESCRIPTION
// Returns the comment of an entry using the entry index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ===== SYNTAX
// public ZipArchive::getCommentIndex(int $index, int $flags = 0): string|false
// ===== CODE
$return_ziparchive_getcommentindex = $ziparchive->getCommentIndex(

$index, // int index - Index of the entry

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged comment is returned.

); // Return Values
// Returns the comment on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Dump an entry comment
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test1.zip');
// if ($res === TRUE) {
//     var_dump($zip->getCommentIndex(1));
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getcommentindex.php
// ========== ZIPARCHIVE_GETCOMMENTINDEX - END

// SYNTAX:
// string|false ZipArchive::getCommentIndex(int $index, int $flags = 0)

return $return_ziparchive_getcommentindex; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETCOMMENTINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETCOMMENTNAME
// ============================== OFFLINE
// ============================== ABOUT
// Returns the comment of an entry using the entry name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_4_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getCommentName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getcommentname($ziparchive, $name, $flags = 0)
{
$return_ziparchive_getcommentname = false;

// ========== ZIPARCHIVE_GETCOMMENTNAME - BEGIN
// ===== ABOUT
// Returns the comment of an entry using the entry name
// ===== DESCRIPTION
// Returns the comment of an entry using the entry name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ===== SYNTAX
// public ZipArchive::getCommentName(string $name, int $flags = 0): string|false
// ===== CODE
$return_ziparchive_getcommentname = $ziparchive->getCommentName(

$name, // string name - Name of the entry

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged comment is returned.

); // Return Values
// Returns the comment on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Dump an entry comment
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test1.zip');
// if ($res === TRUE) {
//     var_dump($zip->getCommentName('test/entry1.txt'));
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getcommentname.php
// ========== ZIPARCHIVE_GETCOMMENTNAME - END

// SYNTAX:
// string|false ZipArchive::getCommentName(string $name, int $flags = 0)

return $return_ziparchive_getcommentname; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETCOMMENTNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETEXTERNALATTRIBUTESINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve the external attributes of an entry defined by its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_12_4
// ============================== USING SUBCLASSES (1)
// ZipArchive::getExternalAttributesIndex() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ============================== CODE
/*
function php_compression_zip_ziparchive_getexternalattributesindex($ziparchive, $index, & $opsys, & $attr, $flags)
{
$return_ziparchive_getexternalattributesindex = false;

// ========== ZIPARCHIVE_GETEXTERNALATTRIBUTESINDEX - BEGIN
// ===== ABOUT
// Retrieve the external attributes of an entry defined by its index
// ===== DESCRIPTION
// Retrieve the external attributes of an entry defined by its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ===== SYNTAX
// public ZipArchive::getExternalAttributesIndex(
//    int $index,
//    int &$opsys,
//    int &$attr,
//    int $flags = 0
// ): bool
// ===== CODE
$return_ziparchive_getexternalattributesindex = $ziparchive->getExternalAttributesIndex(

$index, // int index - Index of the entry.

$opsys, // int& opsys - On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.

$attr, // int& attr - On success, receive the external attributes. Value depends on operating system.

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged attributes are returned.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// This example extract all the entries of a ZIP archive test.zip and set the Unix rights from external attributes.
// Example #1 Extract all entries with Unix rights
// [php]
// $zip = new ZipArchive();
// if ($zip->open('test.zip') === TRUE) {
//     for ($idx=0 ; $s = $zip->statIndex($idx) ; $idx++) {
//         if ($zip->extractTo('.', $s['name'])) {
//             if ($zip->getExternalAttributesIndex($idx, $opsys, $attr) 
//                 && $opsys==ZipArchive::OPSYS_UNIX) {
//                chmod($s['name'], ($attr >> 16) & 0777);
//             }
//         }
//     }
//     $zip->close();
//     echo "Ok\n";
// } else {
//     echo "KO\n";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getexternalattributesindex.php
// ========== ZIPARCHIVE_GETEXTERNALATTRIBUTESINDEX - END

// SYNTAX:
// bool ZipArchive::getExternalAttributesIndex(int $index, int &$opsys, int &$attr, int $flags = 0)

return $return_ziparchive_getexternalattributesindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETEXTERNALATTRIBUTESINDEX 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETEXTERNALATTRIBUTESNAME
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve the external attributes of an entry defined by its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_12_4
// ============================== USING SUBCLASSES (1)
// ZipArchive::getExternalAttributesName() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ============================== CODE
/*
function php_compression_zip_ziparchive_getexternalattributesname($ziparchive, $name, & $opsys, & $attr, $flags)
{
$return_ziparchive_getexternalattributesname = false;

// ========== ZIPARCHIVE_GETEXTERNALATTRIBUTESNAME - BEGIN
// ===== ABOUT
// Retrieve the external attributes of an entry defined by its name
// ===== DESCRIPTION
// Retrieve the external attributes of an entry defined by its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ===== SYNTAX
// public ZipArchive::getExternalAttributesName(
//    string $name,
//    int &$opsys,
//    int &$attr,
//    int $flags = 0
// ): bool
// ===== CODE
$return_ziparchive_getexternalattributesname = $ziparchive->getExternalAttributesName(

$name, // string name - Name of the entry.

$opsys, // int& opsys - On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.

$attr, // int& attr - On success, receive the external attributes. Value depends on operating system.

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged attributes are returned.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getexternalattributesname.php
// ========== ZIPARCHIVE_GETEXTERNALATTRIBUTESNAME - END

// SYNTAX:
// bool ZipArchive::getExternalAttributesName(string $name, int& $opsys, int& $attr, int $flags)

return $return_ziparchive_getexternalattributesname; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETEXTERNALATTRIBUTESNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETFROMINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Returns the entry contents using its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getFromIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getfromindex($ziparchive, $index, $len = 0, $flags = 0)
{
$return_ziparchive_getfromindex = false;

// ========== ZIPARCHIVE_GETFROMINDEX - BEGIN
// ===== ABOUT
// Returns the entry contents using its index
// ===== DESCRIPTION
// Returns the entry contents using its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::getFromIndex(int $index, int $len = 0, int $flags = 0): string|false
// ===== CODE
$return_ziparchive_getfromindex = $ziparchive->getFromIndex(

$index, // int index - Index of the entry

$len, // int len - The length to be read from the entry. If 0, then the entire entry is read.

$flags // int flags - The flags to use to open the archive. the following values may be ORed to it.
// * ZipArchive::FL_UNCHANGED
// * ZipArchive::FL_COMPRESSED

); // Return Values
// Returns the contents of the entry on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Get the file contents
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     echo $zip->getFromIndex(2);
//     $zip->close();
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getfromindex.php
// ========== ZIPARCHIVE_GETFROMINDEX - END

// SYNTAX:
// string|false ZipArchive::getFromIndex(int $index, int $len = 0, int $flags = 0)

return $return_ziparchive_getfromindex; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETFROMINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETFROMNAME
// ============================== OFFLINE
// ============================== ABOUT
// Returns the entry contents using its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getFromName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getfromname($ziparchive, $name, $len = 0, $flags = 0)
{
$return_ziparchive_getfromname = false;

// ========== ZIPARCHIVE_GETFROMNAME - BEGIN
// ===== ABOUT
// Returns the entry contents using its name
// ===== DESCRIPTION
// Returns the entry contents using its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::getFromName(string $name, int $len = 0, int $flags = 0): string|false
// ===== CODE
$return_ziparchive_getfromname = $ziparchive->getFromName(

$name, // string name - Name of the entry

$len, // int len - The length to be read from the entry. If 0, then the entire entry is read.

$flags // int flags - The flags to use to find the entry. The following values may be ORed.
// * ZipArchive::FL_UNCHANGED
// * ZipArchive::FL_COMPRESSED
// * ZipArchive::FL_NOCASE

); // Return Values
// Returns the contents of the entry on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Get the file contents
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test1.zip') === TRUE) {
//     echo $zip->getFromName('testfromfile.php');
//     $zip->close();
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [example]
// Example #2 Convert an image from a zip entry
// [php]
// $z = new ZipArchive();
// if ($z->open(dirname(__FILE__) . '/test_im.zip')) {
//     $im_string = $z->getFromName("pear_item.gif");
//     $im = imagecreatefromstring($im_string);
//     imagepng($im, 'b.png');
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getfromname.php
// ========== ZIPARCHIVE_GETFROMNAME - END

// SYNTAX:
// string|false ZipArchive::getFromName(string $name, int $len = 0, int $flags = 0)

return $return_ziparchive_getfromname; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETFROMNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETNAMEINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Returns the name of an entry using its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getNameIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getnameindex($ziparchive, $index, $flags = 0)
{
$return_ziparchive_getnameindex = false;

// ========== ZIPARCHIVE_GETNAMEINDEX - BEGIN
// ===== ABOUT
// Returns the name of an entry using its index
// ===== DESCRIPTION
// Returns the name of an entry using its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::getNameIndex(int $index, int $flags = 0): string|false
// ===== CODE
$return_ziparchive_getnameindex = $ziparchive->getNameIndex(

$index, // int index - Index of the entry.

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged name is returned.

); // Return Values
// Returns the name on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 ZipArchive::getNameIndex() example
// [php]
// if ($zip->open('test.zip') == TRUE) {
//  for ($i = 0; $i < $zip->numFiles; $i++) {
//      $filename = $zip->getNameIndex($i);
//      // ...
//  }
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getnameindex.php
// ========== ZIPARCHIVE_GETNAMEINDEX - END

// SYNTAX:
// string|false ZipArchive::getNameIndex(int $index, int $flags = 0)

return $return_ziparchive_getnameindex; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETNAMEINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTATUSSTRING
// ============================== OFFLINE
// ============================== ABOUT
// Returns the status error message, system and/or zip messages.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// ZipArchive::getStatusString() - PHP_5 >= PHP_5_2_7, PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zip_ziparchive_getstatusstring($ziparchive)
{
$return_ziparchive_getstatusstring = null;

// ========== ZIPARCHIVE_GETSTATUSSTRING - BEGIN
// ===== ABOUT
// Returns the status error message, system and/or zip messages
// ===== DESCRIPTION
// Returns the status error message, system and/or zip messages.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_7, PHP_7, PHP_8
// ===== SYNTAX
// public ZipArchive::getStatusString(): string
// ===== CODE
$return_ziparchive_getstatusstring = $ziparchive->getStatusString(

// This function has no parameters.

); // Return Values
// Returns a string with the status message.
// 
// Changelog
// Version        - Description
// 8.0.0 / 1.18.0 - This method can be called on closed archive.
// 8.0.0 / 1.18.0 - This method no longer returns false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getstatusstring.php
// ========== ZIPARCHIVE_GETSTATUSSTRING - END

// SYNTAX:
// string ZipArchive::getStatusString()

return $return_ziparchive_getstatusstring; // string
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTATUSSTRING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAM
// ============================== OFFLINE
// ============================== ABOUT
// Get a file handler to the entry defined by its name (read only).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getStream() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getstream($ziparchive, $name)
{
$return_ziparchive_getstream = false;

// ========== ZIPARCHIVE_GETSTREAM - BEGIN
// ===== ABOUT
// Get a file handler to the entry defined by its name (read only)
// ===== DESCRIPTION
// Get a file handler to the entry defined by its name. For now, it only supports read operations.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::getStream(string $name): resource|false
// ===== CODE
$return_ziparchive_getstream = $ziparchive->getStream(

$name // string name - The name of the entry to use.

); // Return Values
// Returns a file pointer (resource) on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Get the entry contents with fread() and store it
// [php]
// $contents = '';
// $z = new ZipArchive();
// if ($z->open('test.zip')) {
//     $fp = $z->getStream('test');
//     if(!$fp) exit("failed\n");
// 
//     while (!feof($fp)) {
//         $contents .= fread($fp, 2);
//     }
// 
//     fclose($fp);
//     file_put_contents('t',$contents);
//     echo "done.\n";
// }
// [/php]
// [/example]
// [example]
// Example #2 Same as the previous example but with fopen() and the zip stream wrapper
// [php]
// $contents = '';
// $fp = fopen('zip://' . dirname(__FILE__) . '/test.zip#test', 'r');
// if (!$fp) {
//     exit("cannot open\n");
// }
// while (!feof($fp)) {
//     $contents .= fread($fp, 2);
// }
// echo "$contents\n";
// fclose($fp);
// echo "done.\n";
// [/php]
// [/example]
// [example]
// Example #3 Stream wrapper and image, can be used with the xml function as well
// [php]
// $im = imagecreatefromgif('zip://' . dirname(__FILE__) . '/test_im.zip#pear_item.gif');
// imagepng($im, 'a.png');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getstream.php
// ========== ZIPARCHIVE_GETSTREAM - END

// SYNTAX:
// resource|false ZipArchive::getStream(string $name)

return $return_ziparchive_getstream; // resource|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAM
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAMINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Get a file handler to the entry defined by its index (read only).
// ============================== SUPPORT
// PHP_8, PECL_zip_1_20_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getStreamIndex() - PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getstreamindex($ziparchive, $index, $flags = 0)
{
$return_ziparchive_getstreamindex = false;

// ========== ZIPARCHIVE_GETSTREAMINDEX - BEGIN
// ===== ABOUT
// Get a file handler to the entry defined by its index (read only)
// ===== DESCRIPTION
// Get a file handler to the entry defined by its index. For now, it only supports read operations.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// ===== SYNTAX
// public ZipArchive::getStreamIndex(int $index, int $flags = 0): resource|false
// ===== CODE
$return_ziparchive_getstreamindex = $ziparchive->getStreamIndex(

$index, // int index - Index of the entry

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged stream is returned.

); // Return Values
// Returns a file pointer (resource) on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Get the entry contents with fread() and store it
// [php]
// $contents = '';
// $z = new ZipArchive();
// if ($z->open('test.zip')) {
//     $fp = $z->getStreamIndex(1, ZipArchive::FL_UNCHANGED);
//     if(!$fp) die($z->getStatusString());
// 
//     echo stream_get_contents($fp);
// 
//     fclose($fp);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getstreamindex.php
// ========== ZIPARCHIVE_GETSTREAMINDEX - END

// SYNTAX:
// resource|false ZipArchive::getStreamIndex(int $index, int $flags = 0)

return $return_ziparchive_getstreamindex; // resource|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAMINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAMNAME
// ============================== OFFLINE
// ============================== ABOUT
// Get a file handler to the entry defined by its name (read only).
// ============================== SUPPORT
// PHP_8, PECL_zip_1_20_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::getStreamName() - PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_getstreamname($ziparchive, $name, $flags = 0)
{
$return_ziparchive_getstreamname = false;

// ========== ZIPARCHIVE_GETSTREAMNAME - BEGIN
// ===== ABOUT
// Get a file handler to the entry defined by its name (read only)
// ===== DESCRIPTION
// Get a file handler to the entry defined by its name. For now, it only supports read operations.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0, PECL_zip >= PECL_zip_1_20_0
// ===== SYNTAX
// public ZipArchive::getStreamName(string $name, int $flags = 0): resource|false
// ===== CODE
$return_ziparchive_getstreamname = $ziparchive->getStreamName(

$name, // string name - The name of the entry to use.

$flags // int flags - If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged stream is returned.

); // Return Values
// Returns a file pointer (resource) on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Get the entry contents with fread() and store it
// [php]
// $contents = '';
// $z = new ZipArchive();
// if ($z->open('test.zip')) {
//     $fp = $z->getStreamName('test', ZipArchive::FL_UNCHANGED);
//     if(!$fp) die($z->getStatusString());
// 
//     echo stream_get_contents($fp);
// 
//     fclose($fp);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.getstreamname.php
// ========== ZIPARCHIVE_GETSTREAMNAME - END

// SYNTAX:
// resource|false ZipArchive::getStreamName(string $name, int $flags = 0)

return $return_ziparchive_getstreamname; // resource|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_GETSTREAMNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ISCOMPRESSIONMETHODSUPPORTED
// ============================== OFFLINE
// ============================== ABOUT
// Check if a compression method is supported by libzip.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_19_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::isCompressionMethodSupported() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_19_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_iscompressionmethodsupported($ziparchive, $method, $enc = true)
{
$return_ziparchive_iscompressionmethodsupported = false;

// ========== ZIPARCHIVE_ISCOMPRESSIONMETHODSUPPORTED - BEGIN
// ===== ABOUT
// Check if a compression method is supported by libzip
// ===== DESCRIPTION
// Check if a compression method is supported by libzip.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_19_0
// ===== SYNTAX
// public static ZipArchive::isCompressionMethodSupported(int $method, bool $enc = true): bool
// ===== CODE
$return_ziparchive_iscompressionmethodsupported = $ziparchive->isCompressionMethodSupported(

$method, // int method - The compression method, one of the ZipArchive::CM_* constants.

$enc // bool enc - If true check for compression, else check for decompression.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.7.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.iscompressionmethoddupported.php
// ========== ZIPARCHIVE_ISCOMPRESSIONMETHODSUPPORTED - END

// SYNTAX:
// bool ZipArchive::isCompressionMethodSupported(int $method, bool $enc = true)

return $return_ziparchive_iscompressionmethodsupported; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ISCOMPRESSIONMETHODSUPPORTED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ISENCRYPTIONMETHODSUPPORTED
// ============================== OFFLINE
// ============================== ABOUT
// Check if a encryption method is supported by libzip.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_19_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::isEncryptionMethodSupported() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_19_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_isencryptionmethodsupported($ziparchive, $method, $enc = true)
{
$return_ziparchive_isencryptionmethodsupported = false;

// ========== ZIPARCHIVE_ISENCRYPTIONMETHODSUPPORTED - BEGIN
// ===== ABOUT
// Check if a encryption method is supported by libzip
// ===== DESCRIPTION
// Check if a compression method is supported by libzip.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_19_0
// ===== SYNTAX
// public static ZipArchive::isEncryptionMethodSupported(int $method, bool $enc = true): bool
// ===== CODE
$return_ziparchive_isencryptionmethodsupported = $ziparchive->isEncryptionMethodSupported(

$method, // int method - The encryption method, one of the ZipArchive::EM_* constants.

$enc // bool enc - If true check for encryption, else check for decryption.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.7.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.isencryptionmethoddupported.php
// ========== ZIPARCHIVE_ISENCRYPTIONMETHODSUPPORTED - END

// SYNTAX:
// bool ZipArchive::isEncryptionMethodSupported(int $method, bool $enc = true)

return $return_ziparchive_isencryptionmethodsupported; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_ISENCRYPTIONMETHODSUPPORTED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_LOCATENAME
// ============================== OFFLINE
// ============================== ABOUT
// Returns the index of the entry in the archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::locateName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_locatename($ziparchive, $name, $flags = 0)
{
$return_ziparchive_locatename = false;

// ========== ZIPARCHIVE_LOCATENAME - BEGIN
// ===== ABOUT
// Returns the index of the entry in the archive
// ===== DESCRIPTION
// Locates an entry using its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::locateName(string $name, int $flags = 0): int|false
// ===== CODE
$return_ziparchive_locatename = $ziparchive->locateName(

$name, // string name - The name of the entry to look up

$flags // int flags - The flags are specified by ORing the following values, or 0 for none of them.
// * ZipArchive::FL_NOCASE
// * ZipArchive::FL_NODIR

); // Return Values
// Returns the index of the entry on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Create an archive and then use it with ZipArchive::locateName()
// [php]
// $file = 'testlocate.zip';
// 
// $zip = new ZipArchive;
// if ($zip->open($file, ZipArchive::CREATE) !== TRUE) {
//     exit('failed');
// }
// 
// $zip->addFromString('entry1.txt', 'entry #1');
// $zip->addFromString('entry2.txt', 'entry #2');
// $zip->addFromString('dir/entry2d.txt', 'entry #2');
// 
// if ($zip->status !== ZipArchive::ER_OK) {
//     echo "failed to write zip\n";
// }
// $zip->close();
// 
// if ($zip->open($file) !== TRUE) {
//     exit('failed');
// }
// 
// echo $zip->locateName('entry1.txt') . "\n";
// echo $zip->locateName('eNtry2.txt') . "\n";
// echo $zip->locateName('eNtry2.txt', ZipArchive::FL_NOCASE) . "\n";
// echo $zip->locateName('enTRy2d.txt', ZipArchive::FL_NOCASE|ZipArchive::FL_NODIR) . "\n";
// $zip->close();
// 
// [/php]
// The above example will output:
// [result]
// 0
// 
// 1
// 2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.locatename.php
// ========== ZIPARCHIVE_LOCATENAME - END

// SYNTAX:
// int|false ZipArchive::locateName(string $name, int $flags = 0)

return $return_ziparchive_locatename; // int|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_LOCATENAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_OPEN
// ============================== OFFLINE
// ============================== ABOUT
// Open a ZIP file archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::open() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_open($ziparchive, $filename, $flags = 0)
{
$return_ziparchive_open = false;

// ========== ZIPARCHIVE_OPEN - BEGIN
// ===== ABOUT
// Open a ZIP file archive
// ===== DESCRIPTION
// Opens a new or existing zip archive for reading, writing or modifying.
// Since libzip 1.6.0, an empty file is not a valid archive any longer.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::open(string $filename, int $flags = 0): bool|int
// ===== CODE
$return_ziparchive_open = $ziparchive->open(

$filename, // string filename - The file name of the ZIP archive to open.

$flags // int flags - The mode to use to open the archive.
// * ZipArchive::OVERWRITE
// * ZipArchive::CREATE
// * ZipArchive::RDONLY
// * ZipArchive::EXCL
// * ZipArchive::CHECKCONS

); // Return Values
// Returns true on success, false or one of the following error codes on error:
// ZipArchive::ER_EXISTS - File already exists.
// ZipArchive::ER_INCONS - Zip archive inconsistent.
// ZipArchive::ER_INVAL  - Invalid argument.
// ZipArchive::ER_MEMORY - Malloc failure.
// ZipArchive::ER_NOENT  - No such file.
// ZipArchive::ER_NOZIP  - Not a zip archive.
// ZipArchive::ER_OPEN   - Can't open file.
// ZipArchive::ER_READ   - Read error.
// ZipArchive::ER_SEEK   - Seek error.
// 
// [examples]
// Examples
// [example]
// Example #1 Open and extract
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     echo 'ok';
//     $zip->extractTo('test');
//     $zip->close();
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [example]
// Example #2 Create an archive
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('test.txt', 'file content goes here');
//     $zip->addFile('data.txt', 'entryname.txt');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [example]
// Example #3 Create an temporary archive
// [php]
// $name = tempnam(sys_get_temp_dir(), "FOO");
// $zip = new ZipArchive;
// $res = $zip->open($name, ZipArchive::OVERWRITE); // truncate as empty file is not valid
// if ($res === TRUE) {
//     $zip->addFile('data.txt', 'entryname.txt');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.open.php
// ========== ZIPARCHIVE_OPEN - END

// SYNTAX:
// bool|int ZipArchive::open(string $filename, int $flags = 0)

return $return_ziparchive_open; // bool|int
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_OPEN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_REGISTERCANCELCALLBACK
// ============================== OFFLINE
// ============================== ABOUT
// Register a callback to allow cancellation during archive close.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_17_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::registerCancelCallback() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_17_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_registercancelcallback($ziparchive, $callback)
{
$return_ziparchive_registercancelcallback = false;

// ========== ZIPARCHIVE_REGISTERCANCELCALLBACK - BEGIN
// ===== ABOUT
// Register a callback to allow cancellation during archive close.
// ===== DESCRIPTION
// Register a callback function to allow cancellation during archive close.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_17_0
// ===== SYNTAX
// public ZipArchive::registerCancelCallback(callable $callback): bool
// ===== CODE
$return_ziparchive_registercancelcallback = $ziparchive->registerCancelCallback(

$callback // callable callback - If this function return 0 operation will continue, other value it will be cancelled.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// This example creates a ZIP file archive php.zip and cancel operation on some run condition.
// Example #1 Archive a file
// [php]
// $zip = new ZipArchive();
// if ($zip->open('php.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
//     $zip->addFile(PHP_BINARY, 'php');
//     $zip->registerCancelCallback(function () {
//         return ($someruncondition ? -1 : 0);
//     });
//     $zip->close();
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.6.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.registercancelcallback.php
// ========== ZIPARCHIVE_REGISTERCANCELCALLBACK - END

// SYNTAX:
// bool ZipArchive::registerCancelCallback(callable $callback)

return $return_ziparchive_registercancelcallback; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_REGISTERCANCELCALLBACK
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_REGISTERPROGRESSCALLBACK
// ============================== OFFLINE
// ============================== ABOUT
// Register a callback to provide updates during archive close.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_17_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::registerProgressCallback() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_17_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_registerprogresscallback($ziparchive, $rate, $callback)
{
$return_ziparchive_registerprogresscallback = false;

// ========== ZIPARCHIVE_REGISTERPROGRESSCALLBACK - BEGIN
// ===== ABOUT
// Register a callback to provide updates during archive close.
// ===== DESCRIPTION
// Register a callback function to provide updates during archive close.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_17_0
// ===== SYNTAX
// public ZipArchive::registerProgressCallback(float $rate, callable $callback): bool
// ===== CODE
$return_ziparchive_registerprogresscallback = $ziparchive->registerProgressCallback(

$rate, // float rate - Change between each call of the callback (from 0.0 to 1.0).

$callback // callable callback - This function will receive the current state as a float (from 0.0 to 1.0).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// This example creates a ZIP file archive php.zip and show progression.
// Example #1 Archive a file
// [code]
// $zip = new ZipArchive();
// if ($zip->open('php.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
//     $zip->addFile(PHP_BINARY, 'php');
//     $zip->registerProgressCallback(0.05, function ($r) {
//         printf("%d%%\n", $r * 100);
//     });
//     $zip->close();
// }
// [/code]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.3.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.registerprogresscallback.php
// ========== ZIPARCHIVE_REGISTERPROGRESSCALLBACK - END

// SYNTAX:
// bool ZipArchive::registerProgressCallback(float $rate, callable $callback)

return $return_ziparchive_registerprogresscallback; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_REGISTERPROGRESSCALLBACK
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_RENAMEINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Renames an entry defined by its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::renameIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_renameindex($ziparchive, $index, $new_name)
{
$return_ziparchive_renameindex = false;

// ========== ZIPARCHIVE_RENAMEINDEX - BEGIN
// ===== ABOUT
// Renames an entry defined by its index
// ===== DESCRIPTION
// Renames an entry defined by its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::renameIndex(int $index, string $new_name): bool
// ===== CODE
$return_ziparchive_renameindex = $ziparchive->renameIndex(

$index, // int index - Index of the entry to rename.

$new_name // string new_name - New name.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Rename one entry
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     $zip->renameIndex(2,'newname.txt');
//     $zip->close();
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.renameindex.php
// ========== ZIPARCHIVE_RENAMEINDEX - END

// SYNTAX:
// bool ZipArchive::renameIndex(int $index, string $new_name)

return $return_ziparchive_renameindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_RENAMEINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_RENAMENAME
// ============================== OFFLINE
// ============================== ABOUT
// Renames an entry defined by its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::renameName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_renamename($ziparchive, $name, $new_name)
{
$return_ziparchive_renamename = false;

// ========== ZIPARCHIVE_RENAMENAME - BEGIN
// ===== ABOUT
// Renames an entry defined by its name
// ===== DESCRIPTION
// Renames an entry defined by its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::renameName(string $name, string $new_name): bool
// ===== CODE
$return_ziparchive_renamename = $ziparchive->renameName(

$name, // string name - Name of the entry to rename.

$new_name // string new_name - New name.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Rename one entry
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     $zip->renameName('currentname.txt','newname.txt');
//     $zip->close();
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.renamename.php
// ========== ZIPARCHIVE_RENAMENAME - END

// SYNTAX:
// bool ZipArchive::renameName(string $name, string $new_name)

return $return_ziparchive_renamename; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_RENAMENAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_REPLACEFILE
// ============================== OFFLINE
// ============================== ABOUT
// Replace file in ZIP archive with a given path.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_18_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::replaceFile() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_18_0
// ============================== USING CONSTANTS (1)
// ZipArchive::LENGTH_TO_END - ZipArchive::replaceFile()
// ============================== CODE
/*
function php_compression_zip_ziparchive_replacefile($ziparchive, $filepath, $index, $start = 0, $length = ZipArchive::LENGTH_TO_END, $flags = 0)
{
$return_ziparchive_replacefile = false;

// ========== ZIPARCHIVE_REPLACEFILE - BEGIN
// ===== ABOUT
// Replace file in ZIP archive with a given path
// ===== DESCRIPTION
// Replace file in ZIP archive with a given path.
// Note: For maximum portability, it is recommended to always use forward slashes (/) as directory separator in ZIP filenames.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_18_0
// ===== SYNTAX
// public ZipArchive::replaceFile(
//    string $filepath,
//    int $index,
//    int $start = 0,
//    int $length = ZipArchive::LENGTH_TO_END,
//    int $flags = 0
// ): bool
// ===== CODE
$return_ziparchive_replacefile = $ziparchive->replaceFile(

$filepath, // string filepath - The path to the file to add.

$index, // int index - The index of the file to be replaced, its name is unchanged.

$start, // int start - For partial copy, start position.

$length, // int length - For partial copy, length to be copied, if ZipArchive::LENGTH_TO_END (0) the file size is used, if ZipArchive::LENGTH_UNCHECKED the whole file is used (starting from start).

$flags // int flags - Bitmask consisting of ZipArchive::FL_ENC_GUESS, ZipArchive::FL_ENC_UTF_8, ZipArchive::FL_ENC_CP437, ZipArchive::FL_OPEN_FILE_NOW. The behaviour of these constants is described on the ZIP constants page.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version        - Description
// 8.3.0 / 1.22.1 - ZipArchive::FL_OPEN_FILE_NOW was added.
// 8.3.0 / 1.22.2 - ZipArchive::LENGTH_TO_END and ZipArchive::LENGTH_UNCHECKED were added.
// 
// [examples]
// Examples
// [example]
// This example opens a ZIP file archive test.zip and replaces index 1 entry with /path/to/index.txt.
// Example #1 Open and replace
// [php]
// $zip = new ZipArchive;
// if ($zip->open('test.zip') === TRUE) {
//     $zip->replaceFile('/path/to/index.txt', 1);
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.replacefile.php
// ========== ZIPARCHIVE_REPLACEFILE - END

// SYNTAX:
// bool ZipArchive::replaceFile(string $filepath, int $index, int $start = 0, int $length = ZipArchive::LENGTH_TO_END, int $flags = 0)

return $return_ziparchive_replacefile; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_REPLACEFILE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETARCHIVECOMMENT
// ============================== OFFLINE
// ============================== ABOUT
// Set the comment of a ZIP archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_4_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setArchiveComment() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setarchivecomment($ziparchive, $comment)
{
$return_ziparchive_setarchivecomment = false;

// ========== ZIPARCHIVE_SETARCHIVECOMMENT - BEGIN
// ===== ABOUT
// Set the comment of a ZIP archive
// ===== DESCRIPTION
// Set the comment of a ZIP archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ===== SYNTAX
// public ZipArchive::setArchiveComment(string $comment): bool
// ===== CODE
$return_ziparchive_setarchivecomment = $ziparchive->setArchiveComment(

$comment // string comment - The contents of the comment.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Create an archive and set a comment
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('test.txt', 'file content goes here');
//     $zip->setArchiveComment('new archive comment');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setarchivecomment.php
// ========== ZIPARCHIVE_SETARCHIVECOMMENT - END

// SYNTAX:
// bool ZipArchive::setArchiveComment(string $comment)

return $return_ziparchive_setarchivecomment; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETARCHIVECOMMENT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETARCHIVEFLAG
// ============================== OFFLINE
// ============================== ABOUT
// Set a global flag of a ZIP archive.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_22_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setArchiveFlag() - PHP_8 >= PHP_8_3_0, PECL_zip >= PECL_zip_1_22_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setarchiveflag($ziparchive, $flag, $value)
{
$return_ziparchive_setarchiveflag = false;

// ========== ZIPARCHIVE_SETARCHIVEFLAG - BEGIN
// ===== ABOUT
// Set a global flag of a ZIP archive
// ===== DESCRIPTION
// Set a global flag of a ZIP archive.
// ===== SUPPORTED
// public ZipArchive::setArchiveFlag(int $flag, int $value): bool
// ===== SYNTAX
// PHP_8 >= PHP_8_3_0, PECL_zip >= PECL_zip_1_22_0
// ===== CODE
$return_ziparchive_setarchiveflag = $ziparchive->setArchiveFlag(

$flag, // int flag - The global flag to change, among AFL_* constants.
// * ZipArchive::AFL_WANT_TORRENTZIP
// * ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE

$value // int value - The new value of the flag.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Create a torrentzip archive
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->setArchiveFlag(ZipArchive::AFL_WANT_TORRENTZIP, 1);
//     $zip->addFromString('test.txt', 'file content goes here');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setarchiveflag.php
// ========== ZIPARCHIVE_SETARCHIVEFLAG - END

// SYNTAX:
// bool ZipArchive::setArchiveFlag(int $flag, int $value)

return $return_ziparchive_setarchiveflag; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETARCHIVEFLAG
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMMENTINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Set the comment of an entry defined by its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_4_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setCommentIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setcommentindex($ziparchive, $index, $comment)
{
$return_ziparchive_setcommentindex = false;

// ========== ZIPARCHIVE_SETCOMMENTINDEX - BEGIN
// ===== ABOUT
// Set the comment of an entry defined by its index
// ===== DESCRIPTION
// Set the comment of an entry defined by its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ===== SYNTAX
// public ZipArchive::setCommentIndex(int $index, string $comment): bool
// ===== CODE
$return_ziparchive_setcommentindex = $ziparchive->setCommentIndex(

$index, // int index - Index of the entry.

$comment // string comment - The contents of the comment.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Open an archive and set a comment for an entry
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     $zip->setCommentIndex(2, 'new entry comment');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setcommentindex.php
// ========== ZIPARCHIVE_SETCOMMENTINDEX - END

// SYNTAX:
// bool ZipArchive::setCommentIndex(int $index, string $comment)

return $return_ziparchive_setcommentindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMMENTINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMMENTNAME
// ============================== OFFLINE
// ============================== ABOUT
// Set the comment of an entry defined by its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_4_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setCommentName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setcommentname($ziparchive, $name, $comment)
{
$return_ziparchive_setcommentname = false;

// ========== ZIPARCHIVE_SETCOMMENTNAME - BEGIN
// ===== ABOUT
// Set the comment of an entry defined by its name
// ===== DESCRIPTION
// Set the comment of an entry defined by its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_4_0
// ===== SYNTAX
// public ZipArchive::setCommentName(string $name, string $comment): bool
// ===== CODE
$return_ziparchive_setcommentname = $ziparchive->setCommentName(

$name, // string name - Name of the entry.

$comment // string comment - The contents of the comment.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Open an archive and set a comment for an entry
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     $zip->setCommentName('entry1.txt', 'new entry comment');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setcommentname.php
// ========== ZIPARCHIVE_SETCOMMENTNAME - END

// SYNTAX:
// bool ZipArchive::setCommentName(string $name, string $comment)

return $return_ziparchive_setcommentname; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMMENTNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMPRESSIONINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Set the compression method of an entry defined by its index.
// ============================== SUPPORT
// PHP_7 - PHP_8, PECL_zip_1_13_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setCompressionIndex() - PHP_7, PHP_8, PECL_zip >= PECL_zip_1_13_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setcompressionindex($ziparchive, $index, $method, $compflags = 0)
{
$return_ziparchive_setcompressionindex = false;

// ========== ZIPARCHIVE_SETCOMPRESSIONINDEX - BEGIN
// ===== ABOUT
// Set the compression method of an entry defined by its index
// ===== DESCRIPTION
// Set the compression method of an entry defined by its index.
// ===== SUPPORTED
// PHP_7, PHP_8, PECL_zip >= PECL_zip_1_13_0
// ===== SYNTAX
// public ZipArchive::setCompressionIndex(int $index, int $method, int $compflags = 0): bool
// ===== CODE
$return_ziparchive_setcompressionindex = $ziparchive->setCompressionIndex(

$index, // int index - Index of the entry.

$method, // int method - The compression method, one of the ZipArchive::CM_* constants.

$compflags // int compflags - Compression level.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Add files with different compression methods to an archive
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('foo', 'Some text');
//     $zip->addFromString('bar', 'Some other text');
//     $zip->setCompressionIndex(0, ZipArchive::CM_STORE);
//     $zip->setCompressionIndex(1, ZipArchive::CM_DEFLATE);
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setcompressionindex.php
// ========== ZIPARCHIVE_SETCOMPRESSIONINDEX - END

// SYNTAX:
// bool ZipArchive::setCompressionIndex(int $index, int $method, int $compflags = 0)

return $return_ziparchive_setcompressionindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMPRESSIONINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMPRESSIONNAME
// ============================== OFFLINE
// ============================== ABOUT
// Set the compression method of an entry defined by its name.
// ============================== SUPPORT
// PHP_7 - PHP_8, PECL_zip_1_13_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setCompressionName() - PHP_7, PHP_8, PECL_zip >= PECL_zip_1_13_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setcompressionname($ziparchive, $name, $method, $compflags = 0)
{
$return_ziparchive_setcompressionname = false;

// ========== ZIPARCHIVE_SETCOMPRESSIONNAME - BEGIN
// ===== ABOUT
// Set the compression method of an entry defined by its name
// ===== DESCRIPTION
// Set the compression method of an entry defined by its name.
// ===== SUPPORTED
// PHP_7, PHP_8, PECL_zip >= PECL_zip_1_13_0
// ===== SYNTAX
// public ZipArchive::setCompressionName(string $name, int $method, int $compflags = 0): bool
// ===== CODE
$return_ziparchive_setcompressionname = $ziparchive->setCompressionName(

$name, // string name - Name of the entry.

$method, // int method - The compression method, one of the ZipArchive::CM_* constants.

$compflags // int compflags - Compression level.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Add files with different compression methods to an archive
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('foo', 'Some text');
//     $zip->addFromString('bar', 'Some other text');
//     $zip->setCompressionName('foo', ZipArchive::CM_STORE);
//     $zip->setCompressionName('bar', ZipArchive::CM_DEFLATE);
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [example]
// Example #2 Add file and set compression method
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFile('foo.jpg', 'bar.jpg');
//     $zip->setCompressionName('bar.jpg', ZipArchive::CM_XZ);
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setcompressionname.php
// ========== ZIPARCHIVE_SETCOMPRESSIONNAME - END

// SYNTAX:
// bool ZipArchive::setCompressionName(string $name, int $method, int $compflags = 0)

return $return_ziparchive_setcompressionname; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETCOMPRESSIONNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETENCRYPTIONINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Set the encryption method of an entry defined by its index.
// ============================== SUPPORT
// PHP_7 - PHP_8, PECL_zip_1_14_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setEncryptionIndex() - PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_14_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setencryptionindex($ziparchive, $index, $method, $password = null)
{
$return_ziparchive_setencryptionindex = false;

// ========== ZIPARCHIVE_SETENCRYPTIONINDEX - BEGIN
// ===== ABOUT
// Set the encryption method of an entry defined by its index
// ===== DESCRIPTION
// Set the encryption method of an entry defined by its index.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_14_0
// ===== SYNTAX
// public ZipArchive::setEncryptionIndex(int $index, int $method, ?string $password = null): bool
// ===== CODE
$return_ziparchive_setencryptionindex = $ziparchive->setEncryptionIndex(

$index, // int index - Index of the entry.

$method, // int method - The encryption method defined by one of the ZipArchive::EM_ constants.

$password // string password - Optional password, default used when missing.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - password is now nullable.
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.2.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setencryptionindex.php
// ========== ZIPARCHIVE_SETENCRYPTIONINDEX - END

// SYNTAX:
// bool ZipArchive::setEncryptionIndex(int $index, int $method, string $password = null)

return $return_ziparchive_setencryptionindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETENCRYPTIONINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETENCRYPTIONNAME
// ============================== OFFLINE
// ============================== ABOUT
// Set the encryption method of an entry defined by its name.
// ============================== SUPPORT
// PHP_7 - PHP_8, PECL_zip_1_14_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setEncryptionName() - PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_14_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setencryptionname($ziparchive, $name, $method, $password = null)
{
$return_ziparchive_setencryptionname = false;

// ========== ZIPARCHIVE_SETENCRYPTIONNAME - BEGIN
// ===== ABOUT
// Set the encryption method of an entry defined by its name
// ===== DESCRIPTION
// Set the encryption method of an entry defined by its name.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8, PECL_zip >= PECL_zip_1_14_0
// ===== SYNTAX
// public ZipArchive::setEncryptionName(string $name, int $method, ?string $password = null): bool
// ===== CODE
$return_ziparchive_setencryptionname = $ziparchive->setEncryptionName(

$name, // string name - Name of the entry.

$method, // int method - The encryption method defined by one of the ZipArchive::EM_ constants.

$password // string password - Optional password, default used when missing.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - password is now nullable.
// 
// [examples]
// Examples
// [example]
// This example creates a ZIP file archive test.zip and add the file test.txt encrypted using the AES 256 method.
// Example #1 Archive and encrypt a file
// [php]
// $zip = new ZipArchive();
// if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
//     $zip->setPassword('secret');
//     $zip->addFile('text.txt');
//     $zip->setEncryptionName('text.txt', ZipArchive::EM_AES_256);
//     $zip->close();
//     echo "Ok\n";
// } else {
//     echo "KO\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.2.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setencryptionname.php
// ========== ZIPARCHIVE_SETENCRYPTIONNAME - END

// SYNTAX:
// bool ZipArchive::setEncryptionName(string $name, int $method, string $password = null)

return $return_ziparchive_setencryptionname; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETENCRYPTIONNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETEXTERNALATTRIBUTESINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Set the external attributes of an entry defined by its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_12_4
// ============================== USING SUBCLASSES (1)
// ZipArchive::setExternalAttributesIndex() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ============================== CODE
/*
function php_compression_zip_ziparchive_setexternalattributesindex($ziparchive, $index, $opsys, $attr, $flags = 0)
{
$return_ziparchive_setexternalattributesindex = false;

// ========== ZIPARCHIVE_SETEXTERNALATTRIBUTESINDEX - BEGIN
// ===== ABOUT
// Set the external attributes of an entry defined by its index
// ===== DESCRIPTION
// Set the external attributes of an entry defined by its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ===== SYNTAX
// public ZipArchive::setExternalAttributesIndex(
//    int $index,
//    int $opsys,
//    int $attr,
//    int $flags = 0
// ): bool
// ===== CODE
$return_ziparchive_setexternalattributesindex = $ziparchive->setExternalAttributesIndex(

$index, // int index - Index of the entry.

$opsys, // int opsys - The operating system code defined by one of the ZipArchive::OPSYS_ constants.

$attr, // int attr - The external attributes. Value depends on operating system.

$flags // int flags - Optional flags. Currently unused.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setexternalattributesindex.php
// ========== ZIPARCHIVE_SETEXTERNALATTRIBUTESINDEX - END

// SYNTAX:
// bool ZipArchive::setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0)

return $return_ziparchive_setexternalattributesindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETEXTERNALATTRIBUTESINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETEXTERNALATTRIBUTESNAME
// ============================== OFFLINE
// ============================== ABOUT
// Set the external attributes of an entry defined by its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_12_4
// ============================== USING SUBCLASSES (1)
// ZipArchive::setExternalAttributesName() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ============================== CODE
/*
function php_compression_zip_ziparchive_setexternalattributesname($ziparchive, $name, $opsys, $attr, $flags = 0)
{
$return_ziparchive_setexternalattributesname = false;

// ========== ZIPARCHIVE_SETEXTERNALATTRIBUTESNAME - BEGIN
// ===== ABOUT
// Set the external attributes of an entry defined by its name
// ===== DESCRIPTION
// Set the external attributes of an entry defined by its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ===== SYNTAX
// public ZipArchive::setExternalAttributesName(
//    string $name,
//    int $opsys,
//    int $attr,
//    int $flags = 0
// ): bool
// ===== CODE
$return_ziparchive_setexternalattributesname = $ziparchive->setExternalAttributesName(

$name, // string name - Name of the entry.

$opsys, // int opsys - The operating system code defined by one of the ZipArchive::OPSYS_ constants.

$attr, // int attr - The external attributes. Value depends on operating system.

$flags // int flags - Optional flags. Currently unused.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// This example opens a ZIP file archive test.zip and add the file test.txt with its Unix rights as external attributes.
// Example #1 Archive a file, with its Unix rights
// [php]
// $zip = new ZipArchive();
// $stat = stat($filename='test.txt');
// if (is_array($stat) && $zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
//     $zip->addFile($filename);
//     $zip->setExternalAttributesName($filename, ZipArchive::OPSYS_UNIX, $stat['mode'] << 16);
//     $zip->close();
//     echo "Ok\n";
// } else {
//     echo "KO\n";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setexternalattributesname.php
// ========== ZIPARCHIVE_SETEXTERNALATTRIBUTESNAME - END

// SYNTAX:
// bool ZipArchive::setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0)

return $return_ziparchive_setexternalattributesname; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETEXTERNALATTRIBUTESNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETMTIMEINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Set the modification time of an entry defined by its index.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_16_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setMtimeIndex() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_16_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setmtimeindex($ziparchive, $index, $timestamp, $flags = 0)
{
$return_ziparchive_setmtimeindex = false;

// ========== ZIPARCHIVE_SETMTIMEINDEX - BEGIN
// ===== ABOUT
// Set the modification time of an entry defined by its index
// ===== DESCRIPTION
// Set the modification time of an entry defined by its index.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_16_0
// ===== SYNTAX
// public ZipArchive::setMtimeIndex(int $index, int $timestamp, int $flags = 0): bool
// ===== CODE
$return_ziparchive_setmtimeindex = $ziparchive->setMtimeIndex(

$index, // int index - Index of the entry.

$timestamp, // int timestamp - The modification time (unix timestamp) of the file.

$flags // int flags - Optional flags, unused for now.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// This example creates a ZIP file archive test.zip and add the file test.txt with its modification date.
// Example #1 Archive a file
// [php]
// $zip = new ZipArchive();
// if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
//     $zip->addFile('text.txt');
//     $zip->setMtimeIndex(0, mktime(0,0,0,12,25,2019));
//     $zip->close();
//     echo "Ok\n";
// } else {
//     echo "KO\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.0.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setmtimeindex.php
// ========== ZIPARCHIVE_SETMTIMEINDEX - END

// SYNTAX:
// bool ZipArchive::setMtimeIndex(int $index, int $timestamp, int $flags = 0)

return $return_ziparchive_setmtimeindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETMTIMEINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETMTIMENAME
// ============================== OFFLINE
// ============================== ABOUT
// Set the modification time of an entry defined by its name.
// ============================== SUPPORT
// PHP_8, PECL_zip_1_16_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::setMtimeName() - PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_16_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_setmtimename($ziparchive, $name, $timestamp, $flags = 0)
{
$return_ziparchive_setmtimename = false;

// ========== ZIPARCHIVE_SETMTIMENAME - BEGIN
// ===== ABOUT
// Set the modification time of an entry defined by its name
// ===== DESCRIPTION
// Set the modification time of an entry defined by its name.
// ===== SUPPORTED
// PHP_8 >= PHP_8_0_0, PECL_zip >= PECL_zip_1_16_0
// ===== SYNTAX
// public ZipArchive::setMtimeName(string $name, int $timestamp, int $flags = 0): bool
// ===== CODE
$return_ziparchive_setmtimename = $ziparchive->setMtimeName(

$name, // string name - Name of the entry.

$timestamp, // int timestamp - The modification time (unix timestamp) of the file.

$flags // int flags - Optional flags, unused for now.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// This example creates a ZIP file archive test.zip and add the file test.txt with its modification date.
// Example #1 Archive a file
// [php]
// $zip = new ZipArchive();
// if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
//     $zip->addFile('text.txt');
//     $zip->setMtimeName('text.txt', mktime(0,0,0,12,25,2019));
//     $zip->close();
//     echo "Ok\n";
// } else {
//     echo "KO\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is only available if built against libzip ≥ 1.0.0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setmtimename.php
// ========== ZIPARCHIVE_SETMTIMENAME - END

// SYNTAX:
// bool ZipArchive::setMtimeName(string $name, int $timestamp, int $flags = 0)

return $return_ziparchive_setmtimename; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETMTIMENAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETPASSWORD
// ============================== OFFLINE
// ============================== ABOUT
// Set the password for the active archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_12_4
// ============================== USING SUBCLASSES (1)
// ZipArchive::setPassword() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ============================== CODE
/*
function php_compression_zip_ziparchive_setpassword($ziparchive, $password)
{
$return_ziparchive_setpassword = false;

// ========== ZIPARCHIVE_SETPASSWORD - BEGIN
// ===== ABOUT
// Set the password for the active archive
// ===== DESCRIPTION
// Sets the password for the active archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_12_4
// ===== SYNTAX
// public ZipArchive::setPassword(string $password): bool
// ===== CODE
$return_ziparchive_setpassword = $ziparchive->setPassword(

$password // string password - The password to be used for the archive.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: As of PHP 7.2.0 and libzip 1.2.0 the password is used to decompress the archive, and is also the default password for ZipArchive::setEncryptionName() and ZipArchive::setEncryptionIndex(). Formerly, this function only set the password to be used to decompress the archive; it did not turn a non-password-protected ZipArchive into a password-protected ZipArchive.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.setpassword.php
// ========== ZIPARCHIVE_SETPASSWORD - END

// SYNTAX:
// bool ZipArchive::setPassword(string $password)

return $return_ziparchive_setpassword; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_SETPASSWORD
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_STATINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Get the details of an entry defined by its index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::statIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_statindex($ziparchive, $index, $flags = 0)
{
$return_ziparchive_statindex = false;

// ========== ZIPARCHIVE_STATINDEX - BEGIN
// ===== ABOUT
// Get the details of an entry defined by its index
// ===== DESCRIPTION
// The function obtains information about the entry defined by its index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::statIndex(int $index, int $flags = 0): array|false
// ===== CODE
$return_ziparchive_statindex = $ziparchive->statIndex(

$index, // int index - Index of the entry

$flags // int flags - ZipArchive::FL_UNCHANGED may be ORed to it to request information about the original file in the archive, ignoring any changes made.

); // Return Values
// Returns an array containing the entry details or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Dump the stat info of an entry
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     print_r($zip->statIndex(3));
//     $zip->close();
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [name] => foobar/baz
//     [index] => 3
//     [crc] => 499465816
//     [size] => 27
//     [mtime] => 1123164748
//     [comp_size] => 24
//     [comp_method] => 8
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.statindex.php
// ========== ZIPARCHIVE_STATINDEX - END

// SYNTAX:
// array|false ZipArchive::statIndex(int $index, int $flags = 0)

return $return_ziparchive_statindex; // array|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_STATINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_STATNAME
// ============================== OFFLINE
// ============================== ABOUT
// Get the details of an entry defined by its name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::statName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_statname($ziparchive, $name, $flags = 0)
{
$return_ziparchive_statname = false;

// ========== ZIPARCHIVE_STATNAME - BEGIN
// ===== ABOUT
// Get the details of an entry defined by its name
// ===== DESCRIPTION
// The function obtains information about the entry defined by its name.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::statName(string $name, int $flags = 0): array|false
// ===== CODE
$return_ziparchive_statname = $ziparchive->statName(

$name, // string name - Name of the entry

$flags // int flags - The flags argument specifies how the name lookup should be done. Also, ZipArchive::FL_UNCHANGED may be ORed to it to request information about the original file in the archive, ignoring any changes made.
// * ZipArchive::FL_NOCASE
// * ZipArchive::FL_NODIR
// * ZipArchive::FL_UNCHANGED

); // Return Values
// Returns an array containing the entry details or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Dump the stat info of an entry
// [php]
// $zip = new ZipArchive;
// $res = $zip->open('test.zip');
// if ($res === TRUE) {
//     print_r($zip->statName('foobar/baz'));
//     $zip->close();
// } else {
//     echo 'failed, code:' . $res;
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [name] => foobar/baz
//     [index] => 3
//     [crc] => 499465816
//     [size] => 27
//     [mtime] => 1123164748
//     [comp_size] => 24
//     [comp_method] => 8
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.statname.php
// ========== ZIPARCHIVE_STATNAME - END

// SYNTAX:
// array|false ZipArchive::statName(string $name, int $flags = 0)

return $return_ziparchive_statname; // array|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_STATNAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEALL
// ============================== OFFLINE
// ============================== ABOUT
// Undo all changes done in the archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::unchangeAll() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_unchangeall($ziparchive)
{
$return_ziparchive_unchangeall = false;

// ========== ZIPARCHIVE_UNCHANGEALL - BEGIN
// ===== ABOUT
// Undo all changes done in the archive
// ===== DESCRIPTION
// Undo all changes done in the archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::unchangeAll(): bool
// ===== CODE
$return_ziparchive_unchangeall = $ziparchive->unchangeAll(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.unchangeall.php
// ========== ZIPARCHIVE_UNCHANGEALL - END

// SYNTAX:
// bool ZipArchive::unchangeAll()

return $return_ziparchive_unchangeall; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEALL
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEARCHIVE
// ============================== OFFLINE
// ============================== ABOUT
// Revert all global changes done in the archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::unchangeArchive() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_unchangearchive($ziparchive)
{
$return_ziparchive_unchangearchive = false;

// ========== ZIPARCHIVE_UNCHANGEARCHIVE - BEGIN
// ===== ABOUT
// Revert all global changes done in the archive
// ===== DESCRIPTION
// Revert all global changes to the archive. For now, this only reverts archive comment changes.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::unchangeArchive(): bool
// ===== CODE
$return_ziparchive_unchangearchive = $ziparchive->unchangeArchive(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.unchangearchive.php
// ========== ZIPARCHIVE_UNCHANGEARCHIVE - END

// SYNTAX:
// bool ZipArchive::unchangeArchive()

return $return_ziparchive_unchangearchive; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEARCHIVE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEINDEX
// ============================== OFFLINE
// ============================== ABOUT
// Revert all changes done to an entry at the given index.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_1_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::unchangeIndex() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_unchangeindex($ziparchive, $index)
{
$return_ziparchive_unchangeindex = false;

// ========== ZIPARCHIVE_UNCHANGEINDEX - BEGIN
// ===== ABOUT
// Revert all changes done to an entry at the given index
// ===== DESCRIPTION
// Revert all changes done to an entry at the given index.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_1_0
// ===== SYNTAX
// public ZipArchive::unchangeIndex(int $index): bool
// ===== CODE
$return_ziparchive_unchangeindex = $ziparchive->unchangeIndex(

$index // int index - Index of the entry.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.unchangeindex.php
// ========== ZIPARCHIVE_UNCHANGEINDEX - END

// SYNTAX:
// bool ZipArchive::unchangeIndex(int $index)

return $return_ziparchive_unchangeindex; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGEINDEX
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGENAME
// ============================== OFFLINE
// ============================== ABOUT
// Revert all changes done to an entry with the given name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_zip_1_5_0
// ============================== USING SUBCLASSES (1)
// ZipArchive::unchangeName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ============================== CODE
/*
function php_compression_zip_ziparchive_unchangename($ziparchive, $name)
{
$return_ziparchive_unchangename = false;

// ========== ZIPARCHIVE_UNCHANGENAME - BEGIN
// ===== ABOUT
// Revert all changes done to an entry with the given name
// ===== DESCRIPTION
// Revert all changes done to an entry.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8, PECL_zip >= PECL_zip_1_5_0
// ===== SYNTAX
// public ZipArchive::unchangeName(string $name): bool
// ===== CODE
$return_ziparchive_unchangename = $ziparchive->unchangeName(

$name // string name - Name of the entry.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/ziparchive.unchangename.php
// ========== ZIPARCHIVE_UNCHANGENAME - END

// SYNTAX:
// bool ZipArchive::unchangeName(string $name)

return $return_ziparchive_unchangename; // bool
}
*/
// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE_UNCHANGENAME
// ==============================


// ============================== END
// PHP_COMPRESSION_ZIP_ZIPARCHIVE
// ==============================


// ============================== END
//      PHP_COMPRESSION_ZIP      
// ==============================
?>