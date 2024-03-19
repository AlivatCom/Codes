<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_COMPRESSION_ZLIB - BEGIN
// OFFLINE | PHP_COMPRESSION_ZLIB_DEFLATE_ADD - string|false php_compression_zlib_deflate_add(DeflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH)
// OFFLINE | PHP_COMPRESSION_ZLIB_DEFLATE_INIT - DeflateContext|false php_compression_zlib_deflate_init(int $encoding, array $options = array())
// PHP_COMPRESSION_ZLIB_GZCLOSE - bool php_compression_zlib_gzclose(resource $stream)
// PHP_COMPRESSION_ZLIB_GZCOMPRESS - string|false php_compression_zlib_gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE)
// OFFLINE | PHP_COMPRESSION_ZLIB_GZDECODE - string|false php_compression_zlib_gzdecode(string $data, int $max_length = 0)
// PHP_COMPRESSION_ZLIB_GZDEFLATE - string|false php_compression_zlib_gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW)
// PHP_COMPRESSION_ZLIB_GZENCODE - string|false php_compression_zlib_gzencode(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_GZIP)
// PHP_COMPRESSION_ZLIB_GZEOF - bool php_compression_zlib_gzeof(resource $stream)
// PHP_COMPRESSION_ZLIB_GZFILE - array|false php_compression_zlib_gzfile(string $filename, int $use_include_path = 0)
// PHP_COMPRESSION_ZLIB_GZGETC - string|false php_compression_zlib_gzgetc(resource $stream)
// PHP_COMPRESSION_ZLIB_GZGETS - string|false php_compression_zlib_gzgets(resource $stream, int $length = null)
// OFFLINE | PHP_COMPRESSION_ZLIB_GZGETSS - string php_compression_zlib_gzgetss(resource $zp, int $length, string $allowable_tags)
// PHP_COMPRESSION_ZLIB_GZINFLATE - string|false php_compression_zlib_gzinflate(string $data, int $max_length = 0)
// PHP_COMPRESSION_ZLIB_GZOPEN - resource|false php_compression_zlib_gzopen(string $filename, string $mode, int $use_include_path = 0)
// PHP_COMPRESSION_ZLIB_GZPASSTHRU - int php_compression_zlib_gzpassthru(resource $stream)
// PHP_COMPRESSION_ZLIB_GZPUTS - int|false php_compression_zlib_gzputs(resource $stream, string $data, int $length = null)
// PHP_COMPRESSION_ZLIB_GZREAD - string|false php_compression_zlib_gzread(resource $stream, int $length)
// PHP_COMPRESSION_ZLIB_GZREWIND - bool php_compression_zlib_gzrewind(resource $stream)
// PHP_COMPRESSION_ZLIB_GZSEEK - int php_compression_zlib_gzseek(resource $stream, int $offset, int $whence = SEEK_SET)
// PHP_COMPRESSION_ZLIB_GZTELL - int|false php_compression_zlib_gztell(resource $stream)
// PHP_COMPRESSION_ZLIB_GZUNCOMPRESS - string|false php_compression_zlib_gzuncompress(string $data, int $max_length = 0)
// PHP_COMPRESSION_ZLIB_GZWRITE - int|false php_compression_zlib_gzwrite(resource $stream, string $data, int $length = null)
// OFFLINE | PHP_COMPRESSION_ZLIB_INFLATE_ADD - string|false php_compression_zlib_inflate_add(InflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH)
// OFFLINE | PHP_COMPRESSION_ZLIB_INFLATE_GET_READ_LEN - int php_compression_zlib_inflate_get_read_len(InflateContext $context)
// OFFLINE | PHP_COMPRESSION_ZLIB_INFLATE_GET_STATUS - int php_compression_zlib_inflate_get_status(InflateContext $context)
// OFFLINE | PHP_COMPRESSION_ZLIB_INFLATE_INIT - InflateContext|false php_compression_zlib_inflate_init(int $encoding, array $options = array())
// PHP_COMPRESSION_ZLIB_READGZFILE - int|false php_compression_zlib_readgzfile(string $filename, int $use_include_path = 0)
// OFFLINE | PHP_COMPRESSION_ZLIB_ZLIB_DECODE - string|false php_compression_zlib_zlib_decode(string $data, int $max_length = 0)
// OFFLINE | PHP_COMPRESSION_ZLIB_ZLIB_ENCODE - string|false php_compression_zlib_zlib_encode(string $data, int $encoding, int $level = -1)
// PHP_COMPRESSION_ZLIB_ZLIB_GET_CODING_TYPE - string|false php_compression_zlib_zlib_get_coding_type()
// PHP_COMPRESSION_ZLIB - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// BUNDLED (Zlib support in PHP is not enabled by default. You will need to configure PHP --with-zlib[=DIR])
// ============================== USING FUNCTIONS (30)
// OFFLINE | deflate_add() - PHP_7, PHP_8
// OFFLINE | deflate_init() - PHP_7, PHP_8
// gzclose() - PHP_4, PHP_5, PHP_7, PHP_8
// gzcompress() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// OFFLINE | gzdecode() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// gzdeflate() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// gzencode() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// gzeof() - PHP_4, PHP_5, PHP_7, PHP_8
// gzfile() - PHP_4, PHP_5, PHP_7, PHP_8
// gzgetc() - PHP_4, PHP_5, PHP_7, PHP_8
// gzgets() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | gzgetss() - PHP_4, PHP_5, PHP_7
// gzinflate() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// gzopen() - PHP_4, PHP_5, PHP_7, PHP_8
// gzpassthru() - PHP_4, PHP_5, PHP_7, PHP_8
// gzputs() - PHP_4, PHP_5, PHP_7, PHP_8
// gzread() - PHP_4, PHP_5, PHP_7, PHP_8
// gzrewind() - PHP_4, PHP_5, PHP_7, PHP_8
// gzseek() - PHP_4, PHP_5, PHP_7, PHP_8
// gztell() - PHP_4, PHP_5, PHP_7, PHP_8
// gzuncompress() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// gzwrite() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | inflate_add() - PHP_7, PHP_8
// OFFLINE | inflate_get_read_len() - PHP_7 >= PHP_7_2_0, PHP_8
// OFFLINE | inflate_get_status() - PHP_7 >= PHP_7_2_0, PHP_8
// OFFLINE | inflate_init() - PHP_7, PHP_8
// readgzfile() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | zlib_decode() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// OFFLINE | zlib_encode() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// zlib_get_coding_type() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (8)
// string
// false
// OFFLINE | DeflateContext - PHP_8
// int
// array
// bool
// resource
// OFFLINE | InflateContext - PHP_8
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_COMPRESSION_ZLIB      
// ============================== ABOUT
// PHP Manual / Function Reference / Compression and Archive Extensions / Zlib - Zlib Compression
// URL: https://www.php.net/manual/en/book.zlib.php
// ============================== DESCRIPTION
// ZLIB_COMPRESSION
// RFC_1950_ZLIB_COMPRESSED_DATA_FORMAT_SPECIFICATION
// RFC_1951_DEFLATE_COMPRESSED_DATA_FORMAT_SPECIFICATION
// RFC_1952_GZIP_FILE_FORMAT_SPECIFICATION
// 
// ZLIB_COMPRESSION - BEGIN
// Zlib Compression
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// ZLIB_FUNCTIONS
// THE_DEFLATECONTEXT_CLASS
// THE_INFLATECONTEXT_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// This module enables you to transparently read and write gzip (.gz) compressed files, through versions of most of the filesystem functions which work with gzip-compressed files (and uncompressed files, too, but not with sockets).
// Note: PHP comes with a fopen-wrapper for .gz-files. More information is available in the section about zlib://.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/intro.zlib.php
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
// This module uses the functions of > zlib by Jean-loup Gailly and Mark Adler. You have to use a zlib version >= 1.2.0.4 with this module.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation 
// 
// Zlib support in PHP is not enabled by default. You will need to configure PHP --with-zlib[=DIR]
// The Windows version of PHP has built-in support for this extension. You do not need to load any additional extensions in order to use these functions.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// The zlib extension offers the option to transparently compress your pages on-the-fly, if the requesting browser supports this. Therefore there are three options in the configuration file php.ini.
// 
// Zlib Configuration Options
// Name                          | Default | Changeable  | Changelog
// zlib.output_compression       | "0"     | PHP_INI_ALL |
// zlib.output_compression_level | "-1"    | PHP_INI_ALL |
// zlib.output_handler           | ""      | PHP_INI_ALL |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// zlib.output_compression bool/int  - Whether to transparently compress pages. If this option is set to "On" in php.ini or the Apache configuration, pages are compressed if the browser sends an "Accept-Encoding: gzip" or "deflate" header. "Content-Encoding: gzip" (respectively "deflate") and "Vary: Accept-Encoding" headers are added to the output. In runtime, it can be set only before sending any output.
// This option also accepts integer values instead of boolean "On"/"Off", using this you can set the output buffer size (default is 4KB).
// Note: output_handler must be empty if this is set 'On' ! Instead you must use zlib.output_handler.
// zlib.output_compression_level int - Compression level used for transparent output compression. Specify a value between 0 (no compression) to 9 (most compression). The default value, -1, lets the server decide which level to use.
// zlib.output_handler string        - You cannot specify additional output handlers if zlib.output_compression is activated here. This setting does the same as output_handler but in a different order.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension defines a file pointer resource returned by gzopen(). Prior to PHP 8.0.0, zlib.deflate and zlib.inflate resources were also defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// FORCE_GZIP (int)            -
// FORCE_DEFLATE (int)         -
// ZLIB_ENCODING_RAW (int)     - DEFLATE algorithm as per RFC 1951.
// ZLIB_ENCODING_DEFLATE (int) - ZLIB compression algorithm as per RFC 1950.
// ZLIB_ENCODING_GZIP (int)    - GZIP algorithm as per RFC 1952.
// ZLIB_FILTERED (int)         -
// ZLIB_HUFFMAN_ONLY (int)     -
// ZLIB_FIXED (int)            -
// ZLIB_RLE (int)              -
// ZLIB_DEFAULT_STRATEGY (int) -
// ZLIB_BLOCK (int)            -
// ZLIB_NO_FLUSH (int)         -
// ZLIB_PARTIAL_FLUSH (int)    -
// ZLIB_SYNC_FLUSH (int)       -
// ZLIB_FULL_FLUSH (int)       -
// ZLIB_FINISH (int)           -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples 
// 
// This example opens a temporary file and writes a test string to it, then it prints out the content of this file twice.
// 
// [example]
// Example #1 Small Zlib Example
// [php]
// 
// $filename = tempnam('/tmp', 'zlibtest') . '.gz';
// echo "<html>\n<head></head>\n<body>\n<pre>\n";
// $s = "Only a test, test, test, test, test, test, test, test!\n";
// 
// // open file for writing with maximum compression
// $zp = gzopen($filename, "w9");
// 
// // write string to file
// gzwrite($zp, $s);
// 
// // close file
// gzclose($zp);
// 
// // open file for reading
// $zp = gzopen($filename, "r");
// 
// // read 3 char
// echo gzread($zp, 3);
// 
// // output until end of the file and close it.
// gzpassthru($zp);
// gzclose($zp);
// 
// echo "\n";
// 
// // open file and print content (the 2nd time).
// if (readgzfile($filename) != strlen($s)) {
//         echo "Error with zlib functions!";
// }
// unlink($filename);
// echo "</pre>\n</body>\n</html>\n";
// 
// [/php]
// [/example]
// [example]
// Example #2 Working with the incremental compression and decompression API
// [php]
// // Perform GZIP compression:
// $deflateContext = deflate_init(ZLIB_ENCODING_GZIP);
// $compressed = deflate_add($deflateContext, "Data to compress", ZLIB_NO_FLUSH);
// $compressed .= deflate_add($deflateContext, ", more data", ZLIB_NO_FLUSH);
// $compressed .= deflate_add($deflateContext, ", and even more data!", ZLIB_FINISH);
// 
// // Perform GZIP decompression:
// $inflateContext = inflate_init(ZLIB_ENCODING_GZIP);
// $uncompressed = inflate_add($inflateContext, $compressed, ZLIB_NO_FLUSH);
// $uncompressed .= inflate_add($inflateContext, NULL, ZLIB_FINISH);
// echo $uncompressed;
// [/php]
// The above example will output:
// [result]
// Data to compress, more data, and even more data!
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/zlib.examples.php
// EXAMPLES - END
// 
// ZLIB_FUNCTIONS - BEGIN
// Zlib Functions
// 
// Table of Contents
// * deflate_add          - Incrementally deflate data
// * deflate_init         - Initialize an incremental deflate context
// * gzclose              - Close an open gz-file pointer
// * gzcompress           - Compress a string
// * gzdecode             - Decodes a gzip compressed string
// * gzdeflate            - Deflate a string
// * gzencode             - Create a gzip compressed string
// * gzeof                - Test for EOF on a gz-file pointer
// * gzfile               - Read entire gz-file into an array
// * gzgetc               - Get character from gz-file pointer
// * gzgets               - Get line from file pointer
// * gzgetss              - Get line from gz-file pointer and strip HTML tags
// * gzinflate            - Inflate a deflated string
// * gzopen               - Open gz-file
// * gzpassthru           - Output all remaining data on a gz-file pointer
// * gzputs               - Alias of gzwrite
// * gzread               - Binary-safe gz-file read
// * gzrewind             - Rewind the position of a gz-file pointer
// * gzseek               - Seek on a gz-file pointer
// * gztell               - Tell gz-file pointer read/write position
// * gzuncompress         - Uncompress a compressed string
// * gzwrite              - Binary-safe gz-file write
// * inflate_add          - Incrementally inflate encoded data
// * inflate_get_read_len - Get number of bytes read so far
// * inflate_get_status   - Get decompression status
// * inflate_init         - Initialize an incremental inflate context
// * readgzfile           - Output a gz-file
// * zlib_decode          - Uncompress any raw/gzip/zlib encoded data
// * zlib_encode          - Compress data with the specified encoding
// * zlib_get_coding_type - Returns the coding type used for output compression
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/ref.zlib.php
// ZLIB_FUNCTIONS - END
// 
// THE_DEFLATECONTEXT_CLASS - BEGIN
// The DeflateContext class
// 
// PHP_8
// 
// Introduction
// A fully opaque class which replaces zlib.deflate resources as of PHP 8.0.0.
// 
// Class synopsis
// [code]
// final class DeflateContext {
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.deflatecontext.php
// THE_DEFLATECONTEXT_CLASS - END
// 
// THE_INFLATECONTEXT_CLASS - BEGIN
// The InflateContext class
// 
// PHP_8
// 
// Introduction
// A fully opaque class which replaces zlib.inflate resources as of PHP 8.0.0.
// 
// Class synopsis
// [code]
// final class InflateContext {
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.inflatecontext.php
// THE_INFLATECONTEXT_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/book.zlib.php
// ZLIB_COMPRESSION - END
// 
// RFC_1950_ZLIB_COMPRESSED_DATA_FORMAT_SPECIFICATION - BEGIN
// RFC 1950 - ZLIB Compressed Data Format Specification version 3.3
// 
// Network Working Group                                         P. Deutsch
// Request for Comments: 1950                           Aladdin Enterprises
// Category: Informational                                      J-L. Gailly
//                                                                 Info-ZIP
//                                                                 May 1996
// 
//          ZLIB Compressed Data Format Specification version 3.3
// 
// Status of This Memo
// 
//    This memo provides information for the Internet community.  This memo
//    does not specify an Internet standard of any kind.  Distribution of
//    this memo is unlimited.
// 
// IESG Note:
// 
//    The IESG takes no position on the validity of any Intellectual
//    Property Rights statements contained in this document.
// 
// Notices
// 
//    Copyright (c) 1996 L. Peter Deutsch and Jean-Loup Gailly
// 
//    Permission is granted to copy and distribute this document for any
//    purpose and without charge, including translations into other
//    languages and incorporation into compilations, provided that the
//    copyright notice and this notice are preserved, and that any
//    substantive changes or deletions from the original are clearly
//    marked.
// 
//    A pointer to the latest version of this and related documentation in
//    HTML format can be found at the URL
//    <ftp://ftp.uu.net/graphics/png/documents/zlib/zdoc-index.html>.
// 
// Abstract
// 
//    This specification defines a lossless compressed data format.  The
//    data can be produced or consumed, even for an arbitrarily long
//    sequentially presented input data stream, using only an a priori
//    bounded amount of intermediate storage.  The format presently uses
//    the DEFLATE compression method but can be easily extended to use
//    other compression methods.  It can be implemented readily in a manner
//    not covered by patents.  This specification also defines the ADLER-32
//    checksum (an extension and improvement of the Fletcher checksum),
//    used for detection of data corruption, and provides an algorithm for
//    computing it.
// 
// Table of Contents
// 
//    1. Introduction ................................................... 2
//       1.1. Purpose ................................................... 2
//       1.2. Intended audience ......................................... 3
//       1.3. Scope ..................................................... 3
//       1.4. Compliance ................................................ 3
//       1.5.  Definitions of terms and conventions used ................ 3
//       1.6. Changes from previous versions ............................ 3
//    2. Detailed specification ......................................... 3
//       2.1. Overall conventions ....................................... 3
//       2.2. Data format ............................................... 4
//       2.3. Compliance ................................................ 7
//    3. References ..................................................... 7
//    4. Source code .................................................... 8
//    5. Security Considerations ........................................ 8
//    6. Acknowledgements ............................................... 8
//    7. Authors' Addresses ............................................. 8
//    8. Appendix: Rationale ............................................ 9
//    9. Appendix: Sample code ..........................................10
// 
// ===== LITERATURE_SOURCES
// * RFC (2023-11-12)
// URL: http://www.faqs.org/rfcs/rfc1950.html
// RFC_1950_ZLIB_COMPRESSED_DATA_FORMAT_SPECIFICATION - END
// 
// RFC_1951_DEFLATE_COMPRESSED_DATA_FORMAT_SPECIFICATION - BEGIN
// RFC 1951 - DEFLATE Compressed Data Format Specification version
// 
// Network Working Group                                         P. Deutsch
// Request for Comments: 1951                           Aladdin Enterprises
// Category: Informational                                         May 1996
// 
//         DEFLATE Compressed Data Format Specification version 1.3
// 
// Status of This Memo
// 
//    This memo provides information for the Internet community.  This memo
//    does not specify an Internet standard of any kind.  Distribution of
//    this memo is unlimited.
// 
// IESG Note:
// 
//    The IESG takes no position on the validity of any Intellectual
//    Property Rights statements contained in this document.
// 
// Notices
// 
//    Copyright (c) 1996 L. Peter Deutsch
// 
//    Permission is granted to copy and distribute this document for any
//    purpose and without charge, including translations into other
//    languages and incorporation into compilations, provided that the
//    copyright notice and this notice are preserved, and that any
//    substantive changes or deletions from the original are clearly
//    marked.
// 
//    A pointer to the latest version of this and related documentation in
//    HTML format can be found at the URL
//    <ftp://ftp.uu.net/graphics/png/documents/zlib/zdoc-index.html>.
// 
// Abstract
// 
//    This specification defines a lossless compressed data format that
//    compresses data using a combination of the LZ77 algorithm and Huffman
//    coding, with efficiency comparable to the best currently available
//    general-purpose compression methods.  The data can be produced or
//    consumed, even for an arbitrarily long sequentially presented input
//    data stream, using only an a priori bounded amount of intermediate
//    storage.  The format can be implemented readily in a manner not
//    covered by patents.
// 
// Table of Contents
// 
//    1. Introduction ................................................... 2
//       1.1. Purpose ................................................... 2
//       1.2. Intended audience ......................................... 3
//       1.3. Scope ..................................................... 3
//       1.4. Compliance ................................................ 3
//       1.5.  Definitions of terms and conventions used ................ 3
//       1.6. Changes from previous versions ............................ 4
//    2. Compressed representation overview ............................. 4
//    3. Detailed specification ......................................... 5
//       3.1. Overall conventions ....................................... 5
//           3.1.1. Packing into bytes .................................. 5
//       3.2. Compressed block format ................................... 6
//           3.2.1. Synopsis of prefix and Huffman coding ............... 6
//           3.2.2. Use of Huffman coding in the "deflate" format ....... 7
//           3.2.3. Details of block format ............................. 9
//           3.2.4. Non-compressed blocks (BTYPE=00) ................... 11
//           3.2.5. Compressed blocks (length and distance codes) ...... 11
//           3.2.6. Compression with fixed Huffman codes (BTYPE=01) .... 12
//           3.2.7. Compression with dynamic Huffman codes (BTYPE=10) .. 13
//       3.3. Compliance ............................................... 14
//    4. Compression algorithm details ................................. 14
//    5. References .................................................... 16
//    6. Security Considerations ....................................... 16
//    7. Source code ................................................... 16
//    8. Acknowledgements .............................................. 16
//    9. Author's Address .............................................. 17
// 
// ===== LITERATURE_SOURCES
// * RFC (2023-11-12)
// URL: http://www.faqs.org/rfcs/rfc1951.html
// RFC_1951_DEFLATE_COMPRESSED_DATA_FORMAT_SPECIFICATION - END
// 
// RFC_1952_GZIP_FILE_FORMAT_SPECIFICATION - BEGIN
// RFC 1952 - GZIP file format specification version 4.3
// 
// Network Working Group                                         P. Deutsch
// Request for Comments: 1952                           Aladdin Enterprises
// Category: Informational                                         May 1996
// 
//                GZIP file format specification version 4.3
// 
// Status of This Memo
// 
//    This memo provides information for the Internet community.  This memo
//    does not specify an Internet standard of any kind.  Distribution of
//    this memo is unlimited.
// 
// IESG Note:
// 
//    The IESG takes no position on the validity of any Intellectual
//    Property Rights statements contained in this document.
// 
// Notices
// 
//    Copyright (c) 1996 L. Peter Deutsch
// 
//    Permission is granted to copy and distribute this document for any
//    purpose and without charge, including translations into other
//    languages and incorporation into compilations, provided that the
//    copyright notice and this notice are preserved, and that any
//    substantive changes or deletions from the original are clearly
//    marked.
// 
//    A pointer to the latest version of this and related documentation in
//    HTML format can be found at the URL
//    <ftp://ftp.uu.net/graphics/png/documents/zlib/zdoc-index.html>.
// 
// Abstract
// 
//    This specification defines a lossless compressed data format that is
//    compatible with the widely used GZIP utility.  The format includes a
//    cyclic redundancy check value for detecting data corruption.  The
//    format presently uses the DEFLATE method of compression but can be
//    easily extended to use other compression methods.  The format can be
//    implemented readily in a manner not covered by patents.
// 
// Table of Contents
// 
//    1. Introduction ................................................... 2
//       1.1. Purpose ................................................... 2
//       1.2. Intended audience ......................................... 3
//       1.3. Scope ..................................................... 3
//       1.4. Compliance ................................................ 3
//       1.5. Definitions of terms and conventions used ................. 3
//       1.6. Changes from previous versions ............................ 3
//    2. Detailed specification ......................................... 4
//       2.1. Overall conventions ....................................... 4
//       2.2. File format ............................................... 5
//       2.3. Member format ............................................. 5
//           2.3.1. Member header and trailer ........................... 6
//               2.3.1.1. Extra field ................................... 8
//               2.3.1.2. Compliance .................................... 9
//       3. References .................................................. 9
//       4. Security Considerations .................................... 10
//       5. Acknowledgements ........................................... 10
//       6. Author's Address ........................................... 10
//       7. Appendix: Jean-Loup Gailly's gzip utility .................. 11
//       8. Appendix: Sample CRC Code .................................. 11
// 
// ===== LITERATURE_SOURCES
// * RFC (2023-11-12)
// URL: http://www.faqs.org/rfcs/rfc1952.html
// RFC_1952_GZIP_FILE_FORMAT_SPECIFICATION - END
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_DEFLATE_ADD
// ============================== OFFLINE
// ============================== ABOUT
// Incrementally deflate data.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// deflate_add() - PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// ZLIB_SYNC_FLUSH - deflate_add()
// ============================== CODE
/*
function php_compression_zlib_deflate_add($context, $data, $flush_mode = ZLIB_SYNC_FLUSH)
{
$return_deflate_add = false;

// ========== DEFLATE_ADD - BEGIN
// ===== ABOUT
// Incrementally deflate data
// ===== DESCRIPTION
// Incrementally deflates data in the specified context.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// deflate_add(DeflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string|false
// ===== CODE
$return_deflate_add = deflate_add(

$context, // DeflateContext context - A context created with deflate_init().

$data, // string data - A chunk of data to compress.

$flush_mode // int flush_mode - One of ZLIB_BLOCK, ZLIB_NO_FLUSH, ZLIB_PARTIAL_FLUSH, ZLIB_SYNC_FLUSH (default), ZLIB_FULL_FLUSH, ZLIB_FINISH. Normally you will want to set ZLIB_NO_FLUSH to maximize compression, and ZLIB_FINISH to terminate with the last chunk of data. See the > zlib manual for a detailed description of these constants.

); // Return Values
// Returns a chunk of compressed data, or false on failure.
// 
// Errors/Exceptions
// If invalid arguments are given, an error of level E_WARNING is generated.
// 
// Changelog
// Version - Description
// 8.0.0   - context expects a DeflateContext instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.deflate-add.php
// ========== DEFLATE_ADD - END

// SYNTAX:
// string|false deflate_add(DeflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH)

return $return_deflate_add; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_DEFLATE_ADD
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_DEFLATE_INIT
// ============================== OFFLINE
// ============================== ABOUT
// Initialize an incremental deflate context.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// deflate_init() - PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zlib_deflate_init($encoding, $options = array())
{
$return_deflate_init = false;

// ========== DEFLATE_INIT - BEGIN
// ===== ABOUT
// Initialize an incremental deflate context
// ===== DESCRIPTION
// Initializes an incremental deflate context using the specified encoding.
// Note that the window option here only sets the window size of the algorithm, differently from the zlib filters where the same parameter also sets the encoding to use; the encoding must be set with the encoding parameter.
// Limitation: there is currently no way to set the header information on a GZIP compressed stream, which are set as follows: GZIP signature (\x1f\x8B); compression method (\x08 == DEFLATE); 6 zero bytes; the operating system set to the current system (\x00 = Windows, \x03 = Unix, etc.)
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// deflate_init(int $encoding, array $options = []): DeflateContext|false
// ===== CODE
$return_deflate_init = deflate_init(

$encoding, // int encoding - One of the ZLIB_ENCODING_* constants.

$options // array options - An associative array which may contain the following elements:
//  level - The compression level in range -1..9; defaults to -1.
//  memory - The compression memory level in range 1..9; defaults to 8.
//  window - The zlib window size (logarithmic) in range 8..15; defaults to 15. zlib changes a window size of 8 to 9, and as of zlib 1.2.8 fails with a warning, if a window size of 8 is requested for ZLIB_ENCODING_RAW or ZLIB_ENCODING_GZIP.
//  strategy - One of ZLIB_FILTERED, ZLIB_HUFFMAN_ONLY, ZLIB_RLE, ZLIB_FIXED or ZLIB_DEFAULT_STRATEGY (the default).
//  dictionary - A string or an array of strings of the preset dictionary (default: no preset dictionary).

); // Return Values
// Returns a deflate context resource (zlib.deflate) on success, or false on failure.
// 
// Errors/Exceptions
// If an invalid option is passed to options or the context couldn't be created, an error of level E_WARNING is generated.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns a DeflateContext instance now; previously, a resource was returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.deflate-init.php
// ========== DEFLATE_INIT - END

// SYNTAX:
// DeflateContext|false deflate_init(int $encoding, array $options = array())

return $return_deflate_init; // DeflateContext|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_DEFLATE_INIT
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZCLOSE  
// ============================== PUBLIC
// ============================== ABOUT
// Close an open gz-file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzclose() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzclose($stream)
{
$return_gzclose = false;

// ========== GZCLOSE - BEGIN
// ===== ABOUT
// Close an open gz-file pointer
// ===== DESCRIPTION
// Closes the given gz-file pointer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzclose(resource $stream): bool
// ===== CODE
$return_gzclose = gzclose(

$stream // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 gzclose() example
// [php]
// $gz = gzopen('somefile.gz','w9');
// gzputs ($gz, 'I was added to somefile.gz');
// gzclose($gz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzclose.php
// ========== GZCLOSE - END

// SYNTAX:
// bool gzclose(resource $stream)

return $return_gzclose; // bool
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZCLOSE  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZCOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Compress a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzcompress() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// ZLIB_ENCODING_DEFLATE - gzcompress()
// ============================== CODE
function php_compression_zlib_gzcompress($data, $level = -1, $encoding = ZLIB_ENCODING_DEFLATE)
{
$return_gzcompress = false;

// ========== GZCOMPRESS - BEGIN
// ===== ABOUT
// Compress a string
// ===== DESCRIPTION
// This function compresses the given string using the ZLIB data format.
// For details on the ZLIB compression algorithm see the document "> ZLIB Compressed Data Format Specification version 3.3" (RFC 1950).
// Note: This is not the same as gzip compression, which includes some header data. See gzencode() for gzip compression.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE): string|false
// ===== CODE
$return_gzcompress = gzcompress(

$data, // string data - The data to compress.

$level, // int level - The level of compression. Can be given as 0 for no compression up to 9 for maximum compression.
// If -1 is used, the default compression of the zlib library is used which is 6.

$encoding // int encoding - One of ZLIB_ENCODING_* constants.

); // Return Values
// The compressed string or false if an error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 gzcompress() example
// [php]
// $compressed = gzcompress('Compress me', 9);
// echo $compressed;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzcompress.php
// ========== GZCOMPRESS - END

// SYNTAX:
// string|false gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE)

return $return_gzcompress; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZCOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZDECODE 
// ============================== OFFLINE
// ============================== ABOUT
// Decodes a gzip compressed string.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzdecode() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zlib_gzdecode($data, $max_length = 0)
{
$return_gzdecode = false;

// ========== GZDECODE - BEGIN
// ===== ABOUT
// Decodes a gzip compressed string
// ===== DESCRIPTION
// This function returns a decoded version of the input data.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// gzdecode(string $data, int $max_length = 0): string|false
// ===== CODE
$return_gzdecode = gzdecode(

$data, // string data - The data to decode, encoded by gzencode().

$max_length // int max_length - The maximum length of data to decode.

); // Return Values
// The decoded string, or or false on failure.
// 
// Errors/Exceptions
// In case of failure, an E_WARNING level error is issued.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzdecode.php
// ========== GZDECODE - END

// SYNTAX:
// string|false gzdecode(string $data, int $max_length = 0)

return $return_gzdecode; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_GZDECODE 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZDEFLATE
// ============================== PUBLIC
// ============================== ABOUT
// Deflate a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzdeflate() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// ZLIB_ENCODING_RAW - gzdeflate()
// ============================== CODE
function php_compression_zlib_gzdeflate($data, $level = -1, $encoding = ZLIB_ENCODING_RAW)
{
$return_gzdeflate = false;

// ========== GZDEFLATE - BEGIN
// ===== ABOUT
// Deflate a string
// ===== DESCRIPTION
// This function compresses the given string using the DEFLATE data format.
// For details on the DEFLATE compression algorithm see the document "> DEFLATE Compressed Data Format Specification version 1.3" (RFC 1951).
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW): string|false
// ===== CODE
$return_gzdeflate = gzdeflate(

$data, // string data - The data to deflate.

$level, // int level - The level of compression. Can be given as 0 for no compression up to 9 for maximum compression. If not given, the default compression level will be the default compression level of the zlib library.

$encoding // int encoding - One of ZLIB_ENCODING_* constants.

); // Return Values
// The deflated string or false if an error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 gzdeflate() example
// [php]
// $compressed = gzdeflate('Compress me', 9);
// echo $compressed;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzdeflate.php
// ========== GZDEFLATE - END

// SYNTAX:
// string|false gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW)

return $return_gzdeflate; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZDEFLATE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZENCODE 
// ============================== PUBLIC
// ============================== ABOUT
// Create a gzip compressed string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzencode() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// ZLIB_ENCODING_GZIP - gzencode()
// ============================== CODE
function php_compression_zlib_gzencode($data, $level = -1, $encoding = ZLIB_ENCODING_GZIP)
{
$return_gzencode = false;

// ========== GZENCODE - BEGIN
// ===== ABOUT
// Create a gzip compressed string
// ===== DESCRIPTION
// This function returns a compressed version of the input data compatible with the output of the gzip program.
// For more information on the GZIP file format, see the document: > GZIP file format specification version 4.3 (RFC 1952).
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzencode(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_GZIP): string|false
// ===== CODE
$return_gzencode = gzencode(

$data, // string data - The data to encode.

$level, // int level - The level of compression. Can be given as 0 for no compression up to 9 for maximum compression. If not given, the default compression level will be the default compression level of the zlib library.

$encoding // int encoding - The encoding mode. Can be FORCE_GZIP (the default) or FORCE_DEFLATE.
// FORCE_DEFLATE generates RFC 1950 compliant output, consisting of a zlib header, the deflated data, and an Adler checksum.

); // Return Values
// The encoded string, or false if an error occurred.
// 
// [examples]
// Examples
// [example]
// The resulting data contains the appropriate headers and data structure to make a standard .gz file, e.g.:
// Example #1 Creating a gzip file
// [php]
// $data = file_get_contents("bigfile.txt");
// $gzdata = gzencode($data, 9);
// file_put_contents("bigfile.txt.gz", $gzdata);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzencode.php
// ========== GZENCODE - END

// SYNTAX:
// string|false gzencode(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_GZIP)

return $return_gzencode; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZENCODE 
// ==============================


// ============================== BEGIN
//   PHP_COMPRESSION_ZLIB_GZEOF   
// ============================== PUBLIC
// ============================== ABOUT
// Test for EOF on a gz-file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzeof() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzeof($stream)
{
$return_gzeof = false;

// ========== GZEOF - BEGIN
// ===== ABOUT
// Test for EOF on a gz-file pointer
// ===== DESCRIPTION
// Tests the given GZ file pointer for EOF.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzeof(resource $stream): bool
// ===== CODE
$return_gzeof = gzeof(

$stream // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

); // Return Values
// Returns true if the gz-file pointer is at EOF or an error occurs; otherwise returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 gzeof() example
// [php]
// $gz = gzopen('somefile.gz', 'r');
// while (!gzeof($gz)) {
//   echo gzgetc($gz);
// }
// gzclose($gz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzeof.php
// ========== GZEOF - END

// SYNTAX:
// bool gzeof(resource $stream)

return $return_gzeof; // bool
}
// ============================== END
//   PHP_COMPRESSION_ZLIB_GZEOF   
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZFILE  
// ============================== PUBLIC
// ============================== ABOUT
// Read entire gz-file into an array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzfile() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzfile($filename, $use_include_path = 0)
{
$return_gzfile = false;

// ========== GZFILE - BEGIN
// ===== ABOUT
// Read entire gz-file into an array
// ===== DESCRIPTION
// This function is identical to readgzfile(), except that it returns the file in an array.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzfile(string $filename, int $use_include_path = 0): array|false
// ===== CODE
$return_gzfile = gzfile(

$filename, // string filename - The file name.

$use_include_path // int use_include_path - You can set this optional parameter to 1, if you want to search for the file in the include_path too.

); // Return Values
// An array containing the file, one line per cell, empty lines included, and with newlines still attached, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 gzfile() example
// [php]
// $lines = gzfile('somefile.gz');
// foreach ($lines as $line) {
//     echo $line;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzfile.php
// ========== GZFILE - END

// SYNTAX:
// array|false gzfile(string $filename, int $use_include_path = 0)

return $return_gzfile; // array|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZFILE  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZGETC  
// ============================== PUBLIC
// ============================== ABOUT
// Get character from gz-file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzgetc() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzgetc($stream)
{
$return_gzgetc = false;

// ========== GZGETC - BEGIN
// ===== ABOUT
// Get character from gz-file pointer
// ===== DESCRIPTION
// Returns a string containing a single (uncompressed) character read from the given gz-file pointer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzgetc(resource $stream): string|false
// ===== CODE
$return_gzgetc = gzgetc(

$stream // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

); // Return Values
// The uncompressed character or false on EOF (unlike gzeof()).
// 
// [examples]
// Examples
// [example]
// Example #1 gzgetc() example
// [php]
// $gz = gzopen('somefile.gz', 'r');
// while (!gzeof($gz)) {
//   echo gzgetc($gz);
// }
// gzclose($gz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzgetc.php
// ========== GZGETC - END

// SYNTAX:
// string|false gzgetc(resource $stream)

return $return_gzgetc; // string|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZGETC  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZGETS  
// ============================== PUBLIC
// ============================== ABOUT
// Get line from file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzgets() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzgets($stream, $length = null)
{
$return_gzgets = false;

// ========== GZGETS - BEGIN
// ===== ABOUT
// Get line from file pointer
// ===== DESCRIPTION
// Gets a (uncompressed) string of up to length - 1 bytes read from the given file pointer. Reading ends when length - 1 bytes have been read, on a newline, or on EOF (whichever comes first).
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzgets(resource $stream, ?int $length = null): string|false
// ===== CODE
$return_gzgets = gzgets(

$stream, // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

$length // int length - The length of data to get.

); // Return Values
// The uncompressed string, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now; previously, the default was 1024.
// 
// [examples]
// Examples
// [example]
// Example #1 gzgets() example
// [php]
// $handle = gzopen('somefile.gz', 'r');
// while (!gzeof($handle)) {
//    $buffer = gzgets($handle, 4096);
//    echo $buffer;
// }
// gzclose($handle);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzgets.php
// ========== GZGETS - END

// SYNTAX:
// string|false gzgets(resource $stream, int $length = null)

return $return_gzgets; // string|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZGETS  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZGETSS  
// ============================== OFFLINE
// ============================== ABOUT
// Get line from gz-file pointer and strip HTML tags.
// 
// Warning: This function has been DEPRECATED as of PHP 7.3.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// gzgetss() - PHP_4, PHP_5, PHP_7
// ============================== CODE
/*
function php_compression_zlib_gzgetss($zp, $length, $allowable_tags)
{
$return_gzgetss = null;

// ========== GZGETSS - BEGIN
// ===== ABOUT
// Get line from gz-file pointer and strip HTML tags
// Warning: This function has been DEPRECATED as of PHP 7.3.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Identical to gzgets(), except that gzgetss() attempts to strip any HTML and PHP tags from the text it reads.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7
// ===== SYNTAX
// gzgetss(resource $zp, int $length, string $allowable_tags = ?): string
// ===== CODE
$return_gzgetss = gzgetss(

$zp, // resource zp - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

$length, // int length - The length of data to get.

$allowable_tags // string allowable_tags - You can use this optional parameter to specify tags which should not be stripped.

); // Return Values
// The uncompressed and stripped string, or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 gzgetss() example
// [php]
// $handle = gzopen('somefile.gz', 'r');
// while (!gzeof($handle)) {
//    $buffer = gzgetss($handle, 4096);
//    echo $buffer;
// }
// gzclose($handle);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzgetss.php
// ========== GZGETSS - END

// SYNTAX:
// string gzgetss(resource $zp, int $length, string $allowable_tags)

return $return_gzgetss; // string
}
*/
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZGETSS  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZINFLATE
// ============================== PUBLIC
// ============================== ABOUT
// Inflate a deflated string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzinflate() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzinflate($data, $max_length = 0)
{
$return_gzinflate = false;

// ========== GZINFLATE - BEGIN
// ===== ABOUT
// Inflate a deflated string
// ===== DESCRIPTION
// This function inflates a deflated string.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzinflate(string $data, int $max_length = 0): string|false
// ===== CODE
$return_gzinflate = gzinflate(

$data, // string data - The data compressed by gzdeflate().

$max_length // int max_length - The maximum length of decoded data.

); // Return Values
// The original uncompressed data or false on error.
// The function will return an error if the uncompressed data is more than 32768 times the length of the compressed input data or, unless max_length is 0, more than the optional parameter max_length.
// 
// [examples]
// Examples
// [example]
// Example #1 gzinflate() example
// [php]
// $compressed   = gzdeflate('Compress me', 9);
// $uncompressed = gzinflate($compressed);
// echo $uncompressed;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.gzinflate.php
// ========== GZINFLATE - END

// SYNTAX:
// string|false gzinflate(string $data, int $max_length = 0)

return $return_gzinflate; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZINFLATE
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZOPEN  
// ============================== PUBLIC
// ============================== ABOUT
// Open gz-file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzopen() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzopen($filename, $mode, $use_include_path = 0)
{
$return_gzopen = false;

// ========== GZOPEN - BEGIN
// ===== ABOUT
// Open gz-file
// ===== DESCRIPTION
// Opens a gzip (.gz) file for reading or writing.
// gzopen() can be used to read a file which is not in gzip format; in this case gzread() will directly read from the file without decompression.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzopen(string $filename, string $mode, int $use_include_path = 0): resource|false
// ===== CODE
$return_gzopen = gzopen(

$filename, // string filename - The file name.

$mode, // string mode - As in fopen() (rb or wb) but can also include a compression level (wb9) or a strategy: f for filtered data as in wb6f, h for Huffman only compression as in wb1h. (See the description of deflateInit2 in zlib.h for more information about the strategy parameter.)

$use_include_path // int use_include_path - You can set this optional parameter to 1, if you want to search for the file in the include_path too.

); // Return Values
// Returns a file pointer to the file opened, after that, everything you read from this file descriptor will be transparently decompressed and what you write gets compressed.
// If the open fails, the function returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 gzopen() Example
// [php]
// $fp = gzopen("/tmp/file.gz", "r");
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzopen.php
// ========== GZOPEN - END

// SYNTAX:
// resource|false gzopen(string $filename, string $mode, int $use_include_path = 0)

return $return_gzopen; // resource|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZOPEN  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZPASSTHRU
// ============================== PUBLIC
// ============================== ABOUT
// Output all remaining data on a gz-file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzpassthru() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzpassthru($stream)
{
$return_gzpassthru = 0;

// ========== GZPASSTHRU - BEGIN
// ===== ABOUT
// Output all remaining data on a gz-file pointer
// ===== DESCRIPTION
// Reads to EOF on the given gz-file pointer from the current position and writes the (uncompressed) results to standard output.
// Note: You may need to call gzrewind() to reset the file pointer to the beginning of the file if you have already written data to it.
// Tip: If you just want to dump the contents of a file to the output buffer, without first modifying it or seeking to a particular offset, you may want to use the readgzfile() function, which saves you the gzopen() call.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzpassthru(resource $stream): int
// ===== CODE
$return_gzpassthru = gzpassthru(

$stream // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

); // Return Values
// The number of uncompressed characters read from gz and passed through to the input.
// 
// [examples]
// Examples
// [example]
// Example #1 gzpassthru() example
// [php]
// $fp = gzopen('file.gz', 'r');
// gzpassthru($fp);
// gzclose($fp);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzpassthru.php
// ========== GZPASSTHRU - END

// SYNTAX:
// int gzpassthru(resource $stream)

return $return_gzpassthru; // int
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZPASSTHRU
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZPUTS  
// ============================== PUBLIC
// ============================== ABOUT
// Binary-safe gz-file write.
// 
// Alias of gzwrite().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzputs() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzputs($stream, $data, $length = null)
{
$return_gzputs = false;

// ========== GZPUTS - BEGIN
// ===== ABOUT
// Alias of gzwrite()
// ===== DESCRIPTION
// This function is an alias of: gzwrite().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_gzputs = gzputs(

$stream, // resource stream

$data, // string data

$length // int length

); // Return
// int|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.gzputs.php
// ========== GZPUTS - END

// ========== GZWRITE - BEGIN
// ===== ABOUT
// Binary-safe gz-file write
// ===== DESCRIPTION
// gzwrite() writes the contents of data to the given gz-file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzwrite(resource $stream, string $data, ?int $length = null): int|false
// ===== CODE
// $return_gzwrite = gzwrite(

// $stream, // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

// $data, // string data - The string to write.

// $length // int length - The number of uncompressed bytes to write. If supplied, writing will stop after length (uncompressed) bytes have been written or the end of data is reached, whichever comes first.

// ); // Return Values
// Returns the number of (uncompressed) bytes written to the given gz-file stream, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now; previously, the default was 0.
// 7.4.0   - This functions returns false on failure now; previously 0 was returned.
// 
// [examples]
// Examples
// [example]
// Example #1 gzwrite() example
// [php]
// $string = 'Some information to compress';
// $gz = gzopen('somefile.gz','w9');
// gzwrite($gz, $string);
// gzclose($gz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.gzwrite.php
// ========== GZWRITE - END

// SYNTAX:
// int|false gzputs(resource $stream, string $data, int $length = null)

return $return_gzputs; // int|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZPUTS  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZREAD  
// ============================== PUBLIC
// ============================== ABOUT
// Binary-safe gz-file read.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzread() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzread($stream, $length)
{
$return_gzread = false;

// ========== GZREAD - BEGIN
// ===== ABOUT
// Binary-safe gz-file read
// ===== DESCRIPTION
// gzread() reads up to length bytes from the given gz-file pointer. Reading stops when length (uncompressed) bytes have been read or EOF is reached, whichever comes first.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzread(resource $stream, int $length): string|false
// ===== CODE
$return_gzread = gzread(

$stream, // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

$length // int length - The number of bytes to read.

); // Return Values
// The data that have been read, or false on failure.
// 
// Changelog
// Version - Description
// 7.4.0   - This functions returns false on failure now; previously 0 was returned.
// 
// [examples]
// Examples
// [example]
// Example #1 gzread() example
// [php]
// // get contents of a gz-file into a string
// $filename = "/usr/local/something.txt.gz";
// $zd = gzopen($filename, "r");
// $contents = gzread($zd, 10000);
// gzclose($zd);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzread.php
// ========== GZREAD - END

// SYNTAX:
// string|false gzread(resource $stream, int $length)

return $return_gzread; // string|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZREAD  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZREWIND 
// ============================== PUBLIC
// ============================== ABOUT
// Rewind the position of a gz-file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzrewind() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzrewind($stream)
{
$return_gzrewind = false;

// ========== GZREWIND - BEGIN
// ===== ABOUT
// Rewind the position of a gz-file pointer
// ===== DESCRIPTION
// Sets the file position indicator of the given gz-file pointer to the beginning of the file stream.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzrewind(resource $stream): bool
// ===== CODE
$return_gzrewind = gzrewind(

$stream // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzrewind.php
// ========== GZREWIND - END

// SYNTAX:
// bool gzrewind(resource $stream)

return $return_gzrewind; // bool
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZREWIND 
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZSEEK  
// ============================== PUBLIC
// ============================== ABOUT
// Seek on a gz-file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzseek() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SEEK_SET - gzseek()
// ============================== CODE
function php_compression_zlib_gzseek($stream, $offset, $whence = SEEK_SET)
{
$return_gzseek = 0;

// ========== GZSEEK - BEGIN
// ===== ABOUT
// Seek on a gz-file pointer
// ===== DESCRIPTION
// Sets the file position indicator for the given file pointer to the given offset byte into the file stream. Equivalent to calling (in C) gzseek(zp, offset, SEEK_SET).
// If the file is opened for reading, this function is emulated but can be extremely slow. If the file is opened for writing, only forward seeks are supported; gzseek() then compresses a sequence of zeroes up to the new starting position.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzseek(resource $stream, int $offset, int $whence = SEEK_SET): int
// ===== CODE
$return_gzseek = gzseek(

$stream, // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

$offset, // int offset - The seeked offset.

$whence // int whence - whence values are:
// * SEEK_SET - Set position equal to offset bytes.
// * SEEK_CUR - Set position to current location plus offset.
// If whence is not specified, it is assumed to be SEEK_SET.

); // Return Values
// Upon success, returns 0; otherwise, returns -1. Note that seeking past EOF is not considered an error.
// 
// [examples]
// Examples
// [example]
// Example #1 gzseek() example
// [php]
// $gz = gzopen('somefile.gz', 'r');
// gzseek($gz,2);
// echo gzgetc($gz);
// gzclose($gz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzseek.php
// ========== GZSEEK - END

// SYNTAX:
// int gzseek(resource $stream, int $offset, int $whence = SEEK_SET)

return $return_gzseek; // int
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZSEEK  
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZTELL  
// ============================== PUBLIC
// ============================== ABOUT
// Tell gz-file pointer read/write position.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gztell() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gztell($stream)
{
$return_gztell = false;

// ========== GZTELL - BEGIN
// ===== ABOUT
// Tell gz-file pointer read/write position
// ===== DESCRIPTION
// Gets the position of the given file pointer; i.e., its offset into the uncompressed file stream.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gztell(resource $stream): int|false
// ===== CODE
$return_gztell = gztell(

$stream // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

); // Return Values
// The position of the file pointer or false if an error occurs.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gztell.php
// ========== GZTELL - END

// SYNTAX:
// int|false gztell(resource $stream)

return $return_gztell; // int|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZTELL  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_GZUNCOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Uncompress a compressed string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzuncompress() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzuncompress($data, $max_length = 0)
{
$return_gzuncompress = false;

// ========== GZUNCOMPRESS - BEGIN
// ===== ABOUT
// Uncompress a compressed string
// ===== DESCRIPTION
// This function uncompress a compressed string.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzuncompress(string $data, int $max_length = 0): string|false
// ===== CODE
$return_gzuncompress = gzuncompress(

$data, // string data - The data compressed by gzcompress().

$max_length // int max_length - The maximum length of data to decode.

); // Return Values
// The original uncompressed data or false on error.
// The function will return an error if the uncompressed data is more than 32768 times the length of the compressed input data or more than the optional parameter max_length.
// 
// [examples]
// Examples
// [example]
// Example #1 gzuncompress() example
// [php]
// $compressed   = gzcompress('Compress me', 9);
// $uncompressed = gzuncompress($compressed);
// echo $uncompressed;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzuncompress.php
// ========== GZUNCOMPRESS - END

// SYNTAX:
// string|false gzuncompress(string $data, int $max_length = 0)

return $return_gzuncompress; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_GZUNCOMPRESS
// ==============================


// ============================== BEGIN
//  PHP_COMPRESSION_ZLIB_GZWRITE  
// ============================== PUBLIC
// ============================== ABOUT
// Binary-safe gz-file write.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gzwrite() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_gzwrite($stream, $data, $length = null)
{
$return_gzwrite = false;

// ========== GZWRITE - BEGIN
// ===== ABOUT
// Binary-safe gz-file write
// ===== DESCRIPTION
// gzwrite() writes the contents of data to the given gz-file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gzwrite(resource $stream, string $data, ?int $length = null): int|false
// ===== CODE
$return_gzwrite = gzwrite(

$stream, // resource stream - The gz-file pointer. It must be valid, and must point to a file successfully opened by gzopen().

$data, // string data - The string to write.

$length // int length - The number of uncompressed bytes to write. If supplied, writing will stop after length (uncompressed) bytes have been written or the end of data is reached, whichever comes first.

); // Return Values
// Returns the number of (uncompressed) bytes written to the given gz-file stream, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now; previously, the default was 0.
// 7.4.0   - This functions returns false on failure now; previously 0 was returned.
// 
// [examples]
// Examples
// [example]
// Example #1 gzwrite() example
// [php]
// $string = 'Some information to compress';
// $gz = gzopen('somefile.gz','w9');
// gzwrite($gz, $string);
// gzclose($gz);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.gzwrite.php
// ========== GZWRITE - END

// SYNTAX:
// int|false gzwrite(resource $stream, string $data, int $length = null)

return $return_gzwrite; // int|false
}
// ============================== END
//  PHP_COMPRESSION_ZLIB_GZWRITE  
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_INFLATE_ADD
// ============================== OFFLINE
// ============================== ABOUT
// Incrementally inflate encoded data.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// inflate_add() - PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zlib_inflate_add($context, $data, $flush_mode = ZLIB_SYNC_FLUSH)
{
$return_inflate_add = false;

// ========== INFLATE_ADD - BEGIN
// ===== ABOUT
// Incrementally inflate encoded data
// ===== DESCRIPTION
// Incrementally inflates encoded data in the specified context.
// Limitation: header information from GZIP compressed data are not made available.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// inflate_add(InflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string|false
// ===== CODE
$return_inflate_add = inflate_add(

$context, // InflateContext context - A context created with inflate_init().

$data, // string data - A chunk of compressed data.

$flush_mode // int flush_mode - One of ZLIB_BLOCK, ZLIB_NO_FLUSH, ZLIB_PARTIAL_FLUSH, ZLIB_SYNC_FLUSH (default), ZLIB_FULL_FLUSH, ZLIB_FINISH. Normally you will want to set ZLIB_NO_FLUSH to maximize compression, and ZLIB_FINISH to terminate with the last chunk of data. See the > zlib manual for a detailed description of these constants.

); // Return Values
// Returns a chunk of uncompressed data, or false on failure.
// 
// Errors/Exceptions
// If invalid parameters are given, inflating the data requires a preset dictionary, but none is specified, the compressed stream is corrupt or has an invalid checksum, an error of level E_WARNING is generated.
// 
// Changelog
// Version - Description
// 8.0.0   - context expects an InflateContext instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.inflate-add.php
// ========== INFLATE_ADD - END

// SYNTAX:
// string|false inflate_add(InflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH)

return $return_inflate_add; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_INFLATE_ADD
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_INFLATE_GET_READ_LEN
// ============================== OFFLINE
// ============================== ABOUT
// Get number of bytes read so far.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// inflate_get_read_len() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_compression_zlib_inflate_get_read_len($context)
{
$return_inflate_get_read_len = 0;

// ========== INFLATE_GET_READ_LEN - BEGIN
// ===== ABOUT
// Get number of bytes read so far
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// inflate_get_read_len(InflateContext $context): int
// ===== CODE
$return_inflate_get_read_len = inflate_get_read_len(

$context // InflateContext context

); // Return Values
// Returns number of bytes read so far or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - context expects an InflateContext instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.inflate-get-read-len.php
// ========== INFLATE_GET_READ_LEN - END

// SYNTAX:
// int inflate_get_read_len(InflateContext $context)

return $return_inflate_get_read_len; // int
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_INFLATE_GET_READ_LEN
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_INFLATE_GET_STATUS
// ============================== OFFLINE
// ============================== ABOUT
// Get decompression status.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// inflate_get_status() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_compression_zlib_inflate_get_status($context)
{
$return_inflate_get_status = 0;

// ========== INFLATE_GET_STATUS - BEGIN
// ===== ABOUT
// Get decompression status
// ===== DESCRIPTION
// Usually returns either ZLIB_OK or ZLIB_STREAM_END.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// inflate_get_status(InflateContext $context): int
// ===== CODE
$return_inflate_get_status = inflate_get_status(

$context // InflateContext $context

); // Return Values
// Returns decompression status.
// 
// Changelog
// Version - Description
// 8.0.0   - context expects an InflateContext instance now; previously, a resource was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.inflate-get-status.php
// ========== INFLATE_GET_STATUS - END

// SYNTAX:
// int inflate_get_status(InflateContext $context)

return $return_inflate_get_status; // int
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_INFLATE_GET_STATUS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_INFLATE_INIT
// ============================== OFFLINE
// ============================== ABOUT
// Initialize an incremental inflate context.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// inflate_init() - PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zlib_inflate_init($encoding, $options = array())
{
$return_inflate_init = false;

// ========== INFLATE_INIT - BEGIN
// ===== ABOUT
// Initialize an incremental inflate context
// ===== DESCRIPTION
// Initialize an incremental inflate context with the specified encoding.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// inflate_init(int $encoding, array $options = []): InflateContext|false
// ===== CODE
$return_inflate_init = inflate_init(

$encoding, // int encoding - One of the ZLIB_ENCODING_* constants.

$options // array options - An associative array which may contain the following elements:
//  level      - The compression level in range -1..9; defaults to -1.
//  memory     - The compression memory level in range 1..9; defaults to 8.
//  window     - The zlib window size (logarithmic) in range 8..15; defaults to 15.
//  strategy   - One of ZLIB_FILTERED, ZLIB_HUFFMAN_ONLY, ZLIB_RLE, ZLIB_FIXED or ZLIB_DEFAULT_STRATEGY (the default).
//  dictionary - A string or an array of strings of the preset dictionary (default: no preset dictionary).

); // Return Values
// Returns an inflate context resource (zlib.inflate) on success, or false on failure.
// 
// Errors/Exceptions
// If an invalid encoding or option is passed to options, or the context couldn't be created, an error of level E_WARNING is generated.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an InflateContext instance now; previously, a resource was returned.
// 
// Notes
// Caution: Unlike gzinflate(), incremental inflate contexts do not constrain the length of the decoded data, so provide no automatic protection against Zip bombs.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.inflate-init.php
// ========== INFLATE_INIT - END

// SYNTAX:
// InflateContext|false inflate_init(int $encoding, array $options = array())

return $return_inflate_init; // InflateContext|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_INFLATE_INIT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_READGZFILE
// ============================== PUBLIC
// ============================== ABOUT
// Output a gz-file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// readgzfile() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_readgzfile($filename, $use_include_path = 0)
{
$return_readgzfile = false;

// ========== READGZFILE - BEGIN
// ===== ABOUT
// Output a gz-file
// ===== DESCRIPTION
// Reads a file, decompresses it and writes it to standard output.
// readgzfile() can be used to read a file which is not in gzip format; in this case readgzfile() will directly read from the file without decompression.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// readgzfile(string $filename, int $use_include_path = 0): int|false
// ===== CODE
$return_readgzfile = readgzfile(

$filename, // string filename - The file name. This file will be opened from the filesystem and its contents written to standard output.

$use_include_path // int use_include_path - You can set this optional parameter to 1, if you want to search for the file in the include_path too.

); // Return Values
// Returns the number of (uncompressed) bytes read from the file on success, or false on failure
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.readgzfile.php
// ========== READGZFILE - END

// SYNTAX:
// int|false readgzfile(string $filename, int $use_include_path = 0)

return $return_readgzfile; // int|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_READGZFILE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_ZLIB_DECODE
// ============================== OFFLINE
// ============================== ABOUT
// Uncompress any raw/gzip/zlib encoded data.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// zlib_decode() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zlib_zlib_decode($data, $max_length = 0)
{
$return_zlib_decode = false;

// ========== ZLIB_DECODE - BEGIN
// ===== ABOUT
// Uncompress any raw/gzip/zlib encoded data
// ===== DESCRIPTION
// Uncompress any raw/gzip/zlib encoded data.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// zlib_decode(string $data, int $max_length = 0): string|false
// ===== CODE
$return_zlib_decode = zlib_decode(

$data, // string $data

$max_length // int $max_length

); // Return Values
// Returns the uncompressed data, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zlib-decode.php
// ========== ZLIB_DECODE - END

// SYNTAX:
// string|false zlib_decode(string $data, int $max_length = 0)

return $return_zlib_decode; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_ZLIB_DECODE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_ZLIB_ENCODE
// ============================== OFFLINE
// ============================== ABOUT
// Compress data with the specified encoding.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// zlib_encode() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_compression_zlib_zlib_encode($data, $encoding, $level = -1)
{
$return_zlib_encode = false;

// ========== ZLIB_ENCODE - BEGIN
// ===== ABOUT
// Compress data with the specified encoding
// ===== DESCRIPTION
// Compress data with the specified encoding.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// zlib_encode(string $data, int $encoding, int $level = -1): string|false
// ===== CODE
$return_zlib_encode = zlib_encode(

$data, // string data - The data to compress.

$encoding, // int encoding - The compression algorithm. Either ZLIB_ENCODING_RAW, ZLIB_ENCODING_DEFLATE or ZLIB_ENCODING_GZIP.

$level // int level

); // Return Values
// string|false
// 
// [examples]
// Examples
// [example]
// Example #1 zlib_encode() example
// [php]
// $str = 'hello world';
// $enc = zlib_encode($str, ZLIB_ENCODING_DEFLATE);
// echo bin2hex($enc);
// [/php]
// The above example will output:
// [result]
// 789ccb48cdc9c95728cf2fca4901001a0b045d
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zlib-encode.php
// ========== ZLIB_ENCODE - END

// SYNTAX:
// string|false zlib_encode(string $data, int $encoding, int $level = -1)

return $return_zlib_encode; // string|false
}
*/
// ============================== END
// PHP_COMPRESSION_ZLIB_ZLIB_ENCODE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_ZLIB_ZLIB_GET_CODING_TYPE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the coding type used for output compression.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// zlib_get_coding_type() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_compression_zlib_zlib_get_coding_type()
{
$return_zlib_get_coding_type = false;

// ========== ZLIB_GET_CODING_TYPE - BEGIN
// ===== ABOUT
// Returns the coding type used for output compression
// ===== DESCRIPTION
// Returns the coding type used for output compression.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// zlib_get_coding_type(): string|false
// ===== CODE
$return_zlib_get_coding_type = zlib_get_coding_type(

// This function has no parameters.

); // Return Values
// Possible return values are gzip, deflate, or false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.zlib-get-coding-type.php
// ========== ZLIB_GET_CODING_TYPE - END

// SYNTAX:
// string|false zlib_get_coding_type()

return $return_zlib_get_coding_type; // string|false
}
// ============================== END
// PHP_COMPRESSION_ZLIB_ZLIB_GET_CODING_TYPE
// ==============================


// ============================== END
//      PHP_COMPRESSION_ZLIB      
// ==============================
?>