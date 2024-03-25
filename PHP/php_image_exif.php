<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_IMAGE_EXIF - BEGIN
// PHP_IMAGE_EXIF_EXIF_IMAGETYPE - int|false php_image_exif_exif_imagetype(string $filename)
// PHP_IMAGE_EXIF_EXIF_READ_DATA - array|false php_image_exif_exif_read_data(resource|string $file, string $required_sections = null, bool $as_arrays = false, bool $read_thumbnail = false)
// OFFLINE | PHP_IMAGE_EXIF_READ_EXIF_DATA - array|false php_image_exif_read_exif_data(resource|string $file, string $required_sections = null, bool $as_arrays = false, bool $read_thumbnail = false)
// PHP_IMAGE_EXIF_EXIF_TAGNAME - string|false php_image_exif_exif_tagname(int $index)
// PHP_IMAGE_EXIF_EXIF_THUMBNAIL - string|false php_image_exif_exif_thumbnail(resource|string $file, int& $width, int& $height, int& $image_type)
// PHP_IMAGE_EXIF - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// BUNDLED (To enable exif-support configure PHP with --enable-exif. PHP does not require any additional library for the exif module.)
// ============================== USING FUNCTIONS (5)
// exif_imagetype() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// exif_read_data() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// OFFLINE | read_exif_data() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7
// exif_tagname() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// exif_thumbnail() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (6)
// int
// false
// string
// array
// resource
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//         PHP_IMAGE_EXIF         
// ============================== ABOUT
// PHP Manual / Function Reference / Image Processing and Generation / Exif - Exchangeable image information
// URL: https://www.php.net/manual/en/book.exif.php
// ============================== DESCRIPTION
// EXCHANGEABLE_IMAGE_INFORMATION
// EXIF_TAGS
// 
// EXCHANGEABLE_IMAGE_INFORMATION - BEGIN
// Exchangeable image information
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXIF_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// With the exif extension you are able to work with image meta data. For example, you may use exif functions to read meta data of pictures taken from digital cameras by working with information stored in the headers. These are commonly found in JPEG and TIFF images.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/intro.exif.php
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
// Your PHP must be compiled in with --enable-exif. To enable multibyte support in EXIF tags, the mbstring extension must be enabled by compiling PHP with --enable-mbstring. PHP does not require any additional library for the exif module.
// Windows only: The mbstring extension must always be enabled. Note that mbstring extension must be loaded prior to EXIF in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/exif.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// To enable exif-support configure PHP with --enable-exif
// Windows users must enable both the php_mbstring.dll and php_exif.dll DLL's in php.ini. The php_mbstring.dll DLL must be loaded before the php_exif.dll DLL so adjust your php.ini accordingly.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/exif.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Exif supports automatically conversion for Unicode and JIS character encodings of user comments when module mbstring is available. This is done by first decoding the comment using the specified characterset. The result is then encoded with another characterset which should match your HTTP output.
// 
// Exif configuration options
// Name                         | Default       | Changeable  | Changelog
// exif.encode_unicode          | "ISO-8859-15" | PHP_INI_ALL |
// exif.decode_unicode_motorola | "UCS-2BE"     | PHP_INI_ALL |
// exif.decode_unicode_intel    | "UCS-2LE"     | PHP_INI_ALL |
// exif.encode_jis              | ""            | PHP_INI_ALL |
// exif.decode_jis_motorola     | "JIS          | PHP_INI_ALL |
// exif.decode_jis_intel        | "JIS"         | PHP_INI_ALL |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// exif.encode_unicode string          - exif.encode_unicode defines the characterset UNICODE user comments are handled. This defaults to ISO-8859-15 which should work for most non Asian countries. The setting can be empty or must be an encoding supported by mbstring. If it is empty the current internal encoding of mbstring is used.
// exif.decode_unicode_motorola string - exif.decode_unicode_motorola defines the image internal characterset for Unicode encoded user comments if image is in motorola byte order (big-endian). This setting cannot be empty but you can specify a list of encodings supported by mbstring. The default is UCS-2BE.
// exif.decode_unicode_intel string    - exif.decode_unicode_intel defines the image internal characterset for Unicode encoded user comments if image is in intel byte order (little-endian). This setting cannot be empty but you can specify a list of encodings supported by mbstring. The default is UCS-2LE.
// exif.encode_jis string              - exif.encode_jis defines the characterset JIS user comments are handled. This defaults to an empty value which forces the functions to use the current internal encoding of mbstring.
// exif.decode_jis_motorola string     - exif.decode_jis_motorola defines the image internal characterset for JIS encoded user comments if image is in motorola byte order (big-endian). This setting cannot be empty but you can specify a list of encodings supported by mbstring. The default is JIS.
// exif.decode_jis_intel string        - exif.decode_jis_intel defines the image internal characterset for JIS encoded user comments if image is in intel byte order (little-endian). This setting cannot be empty but you can specify a list of encodings supported by mbstring. The default is JIS.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/exif.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/exif.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/exif.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// EXIF_USE_MBSTRING (int) - This constant has a value of 1 if the mbstring is enabled, otherwise it has a value of 0.
// The exif_imagetype() lists several related built-in constants.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/exif.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXIF_FUNCTIONS - BEGIN
// Exif Functions
// 
// Table of Contents
// * exif_imagetype - Determine the type of an image
// * exif_read_data - Reads the EXIF headers from an image file
// * exif_tagname   - Get the header name for an index
// * exif_thumbnail - Retrieve the embedded thumbnail of an image
// * read_exif_data - Alias of exif_read_data
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/ref.exif.php
// EXIF_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-15)
// URL: https://www.php.net/manual/en/book.exif.php
// EXCHANGEABLE_IMAGE_INFORMATION - END
// 
// EXIF_TAGS - BEGIN
// EXIF Tags
// 
// EXIF stands for "Exchangeable Image File Format". This type of information is formatted according to the TIFF specification, and may be found in JPG, TIFF, PNG, JP2, PGF, MIFF, HDP, PSP and XCF images, as well as many TIFF-based RAW images, and even some AVI and MOV videos.
// The EXIF meta information is organized into different Image File Directories (IFD's) within an image. The names of these IFD's correspond to the ExifTool family 1 group names. When writing EXIF information, the default Group listed below is used unless another group is specified.
// Mandatory tags (indicated by a colon after the Writable type) may be added automatically with default values when creating a new IFD, and the IFD is removed automatically when deleting tags if only default-valued mandatory tags remain.
// 
// LITERATURE_SOURCES
// * EXIFTOOL_ORG (2023-09-15)
// URL: https://exiftool.org/TagNames/EXIF.html
// EXIF_TAGS - END
// ==============================


// ============================== BEGIN
// PHP_IMAGE_EXIF_EXIF_IMAGETYPE 
// ============================== PUBLIC
// ============================== ABOUT
// Determine the type of an image.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// exif_imagetype() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_image_exif_exif_imagetype($filename)
{
$return_exif_imagetype = false;

// ========== EXIF_IMAGETYPE - BEGIN
// ===== ABOUT
// Determine the type of an image
// ===== DESCRIPTION
// exif_imagetype() reads the first bytes of an image and checks its signature.
// exif_imagetype() can be used to avoid calls to other exif functions with unsupported file types or in conjunction with $_SERVER['HTTP_ACCEPT'] to check whether or not the viewer is able to see a specific image in the browser.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exif_imagetype(string $filename): int|false
// ===== CODE
$return_exif_imagetype = exif_imagetype(

$filename // string filename - The image being checked.

); // Return Values
// When a correct signature is found, the appropriate constant value will be returned otherwise the return value is false. The return value is the same value that getimagesize() returns in index 2 but exif_imagetype() is much faster.
// The following constants are defined, and represent possible exif_imagetype() return values:
// Imagetype Constants
// Value - Constant
// 1     - IMAGETYPE_GIF
// 2     - IMAGETYPE_JPEG
// 3     - IMAGETYPE_PNG
// 4     - IMAGETYPE_SWF
// 5     - IMAGETYPE_PSD
// 6     - IMAGETYPE_BMP
// 7     - IMAGETYPE_TIFF_II (intel byte order)
// 8     - IMAGETYPE_TIFF_MM (motorola byte order)
// 9     - IMAGETYPE_JPC
// 10    - IMAGETYPE_JP2
// 11    - IMAGETYPE_JPX
// 12    - IMAGETYPE_JB2
// 13    - IMAGETYPE_SWC
// 14    - IMAGETYPE_IFF
// 15    - IMAGETYPE_WBMP
// 16    - IMAGETYPE_XBM
// 17    - IMAGETYPE_ICO
// 18    - IMAGETYPE_WEBP
// 19    - IMAGETYPE_AVIF
// Note: exif_imagetype() will emit an E_NOTICE and return false if it is unable to read enough bytes from the file to determine the image type.
// 
// Changelog
// Version - Description
// 7.1.0   - Added WebP support.
// 8.1.0   - Added AVIF support.
// 
// [examples]
// Examples
// [example]
// Example #1 exif_imagetype() example
// [php]
// if (exif_imagetype('image.gif') != IMAGETYPE_GIF) {
//     echo 'The picture is not a gif';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.exif-imagetype.php
// ========== EXIF_IMAGETYPE - END

// SYNTAX:
// int|false exif_imagetype(string $filename)

return $return_exif_imagetype; // int|false
}
// ============================== END
// PHP_IMAGE_EXIF_EXIF_IMAGETYPE 
// ==============================


// ============================== BEGIN
// PHP_IMAGE_EXIF_EXIF_READ_DATA 
// ============================== PUBLIC
// ============================== ABOUT
// Reads the EXIF headers from an image file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// exif_read_data() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_image_exif_exif_read_data($file, $required_sections = null, $as_arrays = false, $read_thumbnail = false)
{
$return_exif_read_data = false;

// ========== EXIF_READ_DATA - BEGIN
// ===== ABOUT
// Reads the EXIF headers from an image file
// ===== DESCRIPTION
// exif_read_data() reads the EXIF headers from an image file. This way you can read meta data generated by digital cameras.
// EXIF headers tend to be present in JPEG/TIFF images generated by digital cameras, but unfortunately each digital camera maker has a different idea of how to actually tag their images, so you can't always rely on a specific Exif header being present.
// Height and Width are computed the same way getimagesize() does so their values must not be part of any header returned. Also, html is a height/width text string to be used inside normal HTML.
// When an Exif header contains a Copyright note, this itself can contain two values. As the solution is inconsistent in the Exif 2.10 standard, the COMPUTED section will return both entries Copyright.Photographer and Copyright.Editor while the IFD0 sections contains the byte array with the NULL character that splits both entries. Or just the first entry if the datatype was wrong (normal behaviour of Exif). The COMPUTED will also contain the entry Copyright which is either the original copyright string, or a comma separated list of the photo and editor copyright.
// The tag UserComment has the same problem as the Copyright tag. It can store two values. First the encoding used, and second the value itself. If so the IFD section only contains the encoding or a byte array. The COMPUTED section will store both in the entries UserCommentEncoding and UserComment. The entry UserComment is available in both cases so it should be used in preference to the value in IFD0 section.
// exif_read_data() also validates EXIF data tags according to the EXIF specification (> http://exif.org/Exif2-2.PDF, page 20).
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exif_read_data(
//    resource|string $file,
//    ?string $required_sections = null,
//    bool $as_arrays = false,
//    bool $read_thumbnail = false
// ): array|false
// ===== CODE
$return_exif_read_data = exif_read_data(

$file, // resource|string file - The location of the image file. This can either be a path to the file (stream wrappers are also supported as usual) or a stream resource.

$required_sections, // ?string required_sections - Is a comma separated list of sections that need to be present in file to produce a result array. If none of the requested sections could be found the return value is false.
// FILE      - FileName, FileSize, FileDateTime, SectionsFound
// COMPUTED  - html, Width, Height, IsColor, and more if available. Height and Width are computed the same way getimagesize() does so their values must not be part of any header returned. Also, html is a height/width text string to be used inside normal HTML.
// ANY_TAG   - Any information that has a Tag e.g. IFD0, EXIF, ...
// IFD0      - All tagged data of IFD0. In normal imagefiles this contains image size and so forth.
// THUMBNAIL - A file is supposed to contain a thumbnail if it has a second IFD. All tagged information about the embedded thumbnail is stored in this section.
// COMMENT   - Comment headers of JPEG images.
// EXIF      - The EXIF section is a sub section of IFD0. It contains more detailed information about an image. Most of these entries are digital camera related.

$as_arrays, // bool as_arrays - Specifies whether or not each section becomes an array. The required_sections COMPUTED, THUMBNAIL, and COMMENT always become arrays as they may contain values whose names conflict with other sections.

$read_thumbnail // bool read_thumbnail - When set to true the thumbnail itself is read. Otherwise, only the tagged data is read.

); // Return Values
// It returns an associative array where the array indexes are the header names and the array values are the values associated with those headers. If no data can be returned, exif_read_data() will return false.
// 
// Errors/Exceptions
// Errors of level E_WARNING and/or E_NOTICE may be raised for unsupported tags or other potential error conditions, but the function still tries to read all comprehensible information.
// 
// Changelog
// Version - Description
// 8.0.0   - required_sections is nullable now.
// 7.2.0   - The file parameter now supports both local files and stream resources.
// 7.2.0   - Support for the following EXIF formats were added:
// * Samsung
// * DJI
// * Panasonic
// * Sony
// * Pentax
// * Minolta
// * Sigma/Foveon
// * AGFA
// * Kyocera
// * Ricoh
// * Epson
// 
// [examples]
// Examples
// [example]
// Example #1 exif_read_data() example
// [php]
// echo "test1.jpg:<br />\n";
// $exif = exif_read_data('tests/test1.jpg', 'IFD0');
// echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";
// 
// $exif = exif_read_data('tests/test2.jpg', 0, true);
// echo "test2.jpg:<br />\n";
// foreach ($exif as $key => $section) {
//     foreach ($section as $name => $val) {
//         echo "$key.$name: $val<br />\n";
//     }
// }
// [/php]
// The first call fails because the image has no header information.
// The above example will output something similar to:
// [result]
// test1.jpg:
// No header data found.
// test2.jpg:
// FILE.FileName: test2.jpg
// FILE.FileDateTime: 1017666176
// FILE.FileSize: 1240
// FILE.FileType: 2
// FILE.SectionsFound: ANY_TAG, IFD0, THUMBNAIL, COMMENT
// COMPUTED.html: width="1" height="1"
// COMPUTED.Height: 1
// COMPUTED.Width: 1
// COMPUTED.IsColor: 1
// COMPUTED.ByteOrderMotorola: 1
// COMPUTED.UserComment: Exif test image.
// COMPUTED.UserCommentEncoding: ASCII
// COMPUTED.Copyright: Photo (c) M.Boerger, Edited by M.Boerger.
// COMPUTED.Copyright.Photographer: Photo (c) M.Boerger
// COMPUTED.Copyright.Editor: Edited by M.Boerger.
// IFD0.Copyright: Photo (c) M.Boerger
// IFD0.UserComment: ASCII
// THUMBNAIL.JPEGInterchangeFormat: 134
// THUMBNAIL.JPEGInterchangeFormatLength: 523
// COMMENT.0: Comment #1.
// COMMENT.1: Comment #2.
// COMMENT.2: Comment #3end
// THUMBNAIL.JPEGInterchangeFormat: 134
// THUMBNAIL.Thumbnail.Height: 1
// THUMBNAIL.Thumbnail.Height: 1
// [/result]
// [/example]
// [example]
// Example #2 exif_read_data() with streams available as of PHP 7.2.0
// [php]
// // Open a the file, this should be in binary mode
// $fp = fopen('/path/to/image.jpg', 'rb');
// 
// if (!$fp) {
//     echo 'Error: Unable to open image for reading';
//     exit;
// }
// 
// // Attempt to read the exif headers
// $headers = exif_read_data($fp);
// 
// if (!$headers) {
//     echo 'Error: Unable to read exif headers';
//     exit;
// }
// 
// // Print the 'COMPUTED' headers
// echo 'EXIF Headers:' . PHP_EOL;
// 
// foreach ($headers['COMPUTED'] as $header => $value) {
//     printf(' %s => %s%s', $header, $value, PHP_EOL);
// }
// [/php]
// The above example will output something similar to:
// [result]
// EXIF Headers:
//  Height => 576
//  Width => 1024
//  IsColor => 1
//  ByteOrderMotorola => 0
//  ApertureFNumber => f/5.6
//  UserComment =>
//  UserCommentEncoding => UNDEFINED
//  Copyright => Denis
//  Thumbnail.FileType => 2
//  Thumbnail.MimeType => image/jpeg
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: If mbstring is enabled, exif will attempt to process the unicode and pick a charset as specified by exif.decode_unicode_motorola and exif.decode_unicode_intel. The exif extension will not attempt to figure out the encoding on its own, and it is up to the user to properly specify the encoding for which to use for decoding by setting one of these two ini directives prior to calling exif_read_data().
// Note: If the file is used to pass a stream to this function, then the stream must be seekable. Note that the file pointer position is not changed after this function returns.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-01)
// URL: https://www.php.net/manual/en/function.exif-read-data.php
// ========== EXIF_READ_DATA - END

// SYNTAX:
// array|false exif_read_data(resource|string $file, string $required_sections = null, bool $as_arrays = false, bool $read_thumbnail = false)

return $return_exif_read_data; // array|false
}
// ============================== END
// PHP_IMAGE_EXIF_EXIF_READ_DATA 
// ==============================


// ============================== BEGIN
// PHP_IMAGE_EXIF_READ_EXIF_DATA 
// ============================== OFFLINE
// ============================== ABOUT
// Reads the EXIF headers from an image file.
// 
// read_exif_data - Alias of exif_read_data().

// Warning: This alias was DEPRECATED in PHP 7.2.0, and REMOVED as of PHP 8.0.0.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// read_exif_data() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7
// ============================== CODE
/*
function php_image_exif_read_exif_data($file, $required_sections = null, $as_arrays = false, $read_thumbnail = false)
{
$return_read_exif_data = false;

// ========== READ_EXIF_DATA - BEGIN
// ===== ABOUT
// read_exif_data - Alias of exif_read_data()
// Warning: This alias was DEPRECATED in PHP 7.2.0, and REMOVED as of PHP 8.0.0.
// ===== DESCRIPTION
// This function is an alias of: exif_read_data().
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7
// ===== SYNTAX
// ===== CODE
$return_read_exif_data = read_exif_data(

$file, // resource|string $file

$required_sections, // string $required_sections

$as_arrays, // bool $as_arrays

$read_thumbnail // bool $read_thumbnail

); // Return
// array|false
// 
// Changelog
// Version - Description
// 7.2.0   - This function alias was deprecated.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-01)
// URL: https://www.php.net/manual/en/function.read-exif-data.php
// ========== READ_EXIF_DATA - END

// ========== EXIF_READ_DATA - BEGIN
// ===== ABOUT
// Reads the EXIF headers from an image file
// ===== DESCRIPTION
// exif_read_data() reads the EXIF headers from an image file. This way you can read meta data generated by digital cameras.
// EXIF headers tend to be present in JPEG/TIFF images generated by digital cameras, but unfortunately each digital camera maker has a different idea of how to actually tag their images, so you can't always rely on a specific Exif header being present.
// Height and Width are computed the same way getimagesize() does so their values must not be part of any header returned. Also, html is a height/width text string to be used inside normal HTML.
// When an Exif header contains a Copyright note, this itself can contain two values. As the solution is inconsistent in the Exif 2.10 standard, the COMPUTED section will return both entries Copyright.Photographer and Copyright.Editor while the IFD0 sections contains the byte array with the NULL character that splits both entries. Or just the first entry if the datatype was wrong (normal behaviour of Exif). The COMPUTED will also contain the entry Copyright which is either the original copyright string, or a comma separated list of the photo and editor copyright.
// The tag UserComment has the same problem as the Copyright tag. It can store two values. First the encoding used, and second the value itself. If so the IFD section only contains the encoding or a byte array. The COMPUTED section will store both in the entries UserCommentEncoding and UserComment. The entry UserComment is available in both cases so it should be used in preference to the value in IFD0 section.
// exif_read_data() also validates EXIF data tags according to the EXIF specification (> http://exif.org/Exif2-2.PDF, page 20).
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exif_read_data(
//    resource|string $file,
//    ?string $required_sections = null,
//    bool $as_arrays = false,
//    bool $read_thumbnail = false
// ): array|false
// ===== CODE
// $return_exif_read_data = exif_read_data(

// $file, // resource|string file - The location of the image file. This can either be a path to the file (stream wrappers are also supported as usual) or a stream resource.

// $required_sections, // ?string required_sections - Is a comma separated list of sections that need to be present in file to produce a result array. If none of the requested sections could be found the return value is false.
// FILE      - FileName, FileSize, FileDateTime, SectionsFound
// COMPUTED  - html, Width, Height, IsColor, and more if available. Height and Width are computed the same way getimagesize() does so their values must not be part of any header returned. Also, html is a height/width text string to be used inside normal HTML.
// ANY_TAG   - Any information that has a Tag e.g. IFD0, EXIF, ...
// IFD0      - All tagged data of IFD0. In normal imagefiles this contains image size and so forth.
// THUMBNAIL - A file is supposed to contain a thumbnail if it has a second IFD. All tagged information about the embedded thumbnail is stored in this section.
// COMMENT   - Comment headers of JPEG images.
// EXIF      - The EXIF section is a sub section of IFD0. It contains more detailed information about an image. Most of these entries are digital camera related.

// $as_arrays, // bool as_arrays - Specifies whether or not each section becomes an array. The required_sections COMPUTED, THUMBNAIL, and COMMENT always become arrays as they may contain values whose names conflict with other sections.

// $read_thumbnail // bool read_thumbnail - When set to true the thumbnail itself is read. Otherwise, only the tagged data is read.

// ); // Return Values
// It returns an associative array where the array indexes are the header names and the array values are the values associated with those headers. If no data can be returned, exif_read_data() will return false.
// 
// Errors/Exceptions
// Errors of level E_WARNING and/or E_NOTICE may be raised for unsupported tags or other potential error conditions, but the function still tries to read all comprehensible information.
// 
// Changelog
// Version - Description
// 8.0.0   - required_sections is nullable now.
// 7.2.0   - The file parameter now supports both local files and stream resources.
// 7.2.0   - Support for the following EXIF formats were added:
// * Samsung
// * DJI
// * Panasonic
// * Sony
// * Pentax
// * Minolta
// * Sigma/Foveon
// * AGFA
// * Kyocera
// * Ricoh
// * Epson
// 
// [examples]
// Examples
// [example]
// Example #1 exif_read_data() example
// [php]
// echo "test1.jpg:<br />\n";
// $exif = exif_read_data('tests/test1.jpg', 'IFD0');
// echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";
// 
// $exif = exif_read_data('tests/test2.jpg', 0, true);
// echo "test2.jpg:<br />\n";
// foreach ($exif as $key => $section) {
//     foreach ($section as $name => $val) {
//         echo "$key.$name: $val<br />\n";
//     }
// }
// [/php]
// The first call fails because the image has no header information.
// The above example will output something similar to:
// [result]
// test1.jpg:
// No header data found.
// test2.jpg:
// FILE.FileName: test2.jpg
// FILE.FileDateTime: 1017666176
// FILE.FileSize: 1240
// FILE.FileType: 2
// FILE.SectionsFound: ANY_TAG, IFD0, THUMBNAIL, COMMENT
// COMPUTED.html: width="1" height="1"
// COMPUTED.Height: 1
// COMPUTED.Width: 1
// COMPUTED.IsColor: 1
// COMPUTED.ByteOrderMotorola: 1
// COMPUTED.UserComment: Exif test image.
// COMPUTED.UserCommentEncoding: ASCII
// COMPUTED.Copyright: Photo (c) M.Boerger, Edited by M.Boerger.
// COMPUTED.Copyright.Photographer: Photo (c) M.Boerger
// COMPUTED.Copyright.Editor: Edited by M.Boerger.
// IFD0.Copyright: Photo (c) M.Boerger
// IFD0.UserComment: ASCII
// THUMBNAIL.JPEGInterchangeFormat: 134
// THUMBNAIL.JPEGInterchangeFormatLength: 523
// COMMENT.0: Comment #1.
// COMMENT.1: Comment #2.
// COMMENT.2: Comment #3end
// THUMBNAIL.JPEGInterchangeFormat: 134
// THUMBNAIL.Thumbnail.Height: 1
// THUMBNAIL.Thumbnail.Height: 1
// [/result]
// [/example]
// [example]
// Example #2 exif_read_data() with streams available as of PHP 7.2.0
// [php]
// // Open a the file, this should be in binary mode
// $fp = fopen('/path/to/image.jpg', 'rb');
// 
// if (!$fp) {
//     echo 'Error: Unable to open image for reading';
//     exit;
// }
// 
// // Attempt to read the exif headers
// $headers = exif_read_data($fp);
// 
// if (!$headers) {
//     echo 'Error: Unable to read exif headers';
//     exit;
// }
// 
// // Print the 'COMPUTED' headers
// echo 'EXIF Headers:' . PHP_EOL;
// 
// foreach ($headers['COMPUTED'] as $header => $value) {
//     printf(' %s => %s%s', $header, $value, PHP_EOL);
// }
// [/php]
// The above example will output something similar to:
// [result]
// EXIF Headers:
//  Height => 576
//  Width => 1024
//  IsColor => 1
//  ByteOrderMotorola => 0
//  ApertureFNumber => f/5.6
//  UserComment =>
//  UserCommentEncoding => UNDEFINED
//  Copyright => Denis
//  Thumbnail.FileType => 2
//  Thumbnail.MimeType => image/jpeg
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: If mbstring is enabled, exif will attempt to process the unicode and pick a charset as specified by exif.decode_unicode_motorola and exif.decode_unicode_intel. The exif extension will not attempt to figure out the encoding on its own, and it is up to the user to properly specify the encoding for which to use for decoding by setting one of these two ini directives prior to calling exif_read_data().
// Note: If the file is used to pass a stream to this function, then the stream must be seekable. Note that the file pointer position is not changed after this function returns.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-01)
// URL: https://www.php.net/manual/en/function.exif-read-data.php
// ========== EXIF_READ_DATA - END

// SYNTAX:
// array|false read_exif_data(resource|string $file, string $required_sections = null, bool $as_arrays = false, bool $read_thumbnail = false)

return $return_read_exif_data; // array|false
}
*/
// ============================== END
// PHP_IMAGE_EXIF_READ_EXIF_DATA 
// ==============================


// ============================== BEGIN
//  PHP_IMAGE_EXIF_EXIF_TAGNAME  
// ============================== PUBLIC
// ============================== ABOUT
// Get the header name for an index.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// exif_tagname() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_image_exif_exif_tagname($index)
{
$return_exif_tagname = false;

// ========== EXIF_TAGNAME - BEGIN
// ===== ABOUT
// Get the header name for an index
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exif_tagname(int $index): string|false
// ===== CODE
$return_exif_tagname = exif_tagname(

$index // int index - The Tag ID for which a Tag Name will be looked up.

); // Return Values
// Returns the header name, or false if index is not a defined EXIF tag id.
// 
// [examples]
// Examples
// [example]
// Example #1 exif_tagname() example
// [php]
// echo "256: ".exif_tagname(256).PHP_EOL;
// echo "257: ".exif_tagname(257).PHP_EOL;
// [/php]
// The above example will output:
// [result]
// 256: ImageWidth
// 257: ImageLength
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-01)
// URL: https://www.php.net/manual/en/function.exif-tagname.php
// ========== EXIF_TAGNAME - END

// SYNTAX:
// string|false exif_tagname(int $index)

return $return_exif_tagname; // string|false
}
// ============================== END
//  PHP_IMAGE_EXIF_EXIF_TAGNAME  
// ==============================


// ============================== BEGIN
// PHP_IMAGE_EXIF_EXIF_THUMBNAIL 
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve the embedded thumbnail of an image.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// exif_thumbnail() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_image_exif_exif_thumbnail($file, & $width, & $height, & $image_type)
{
$return_exif_thumbnail = false;

// ========== EXIF_THUMBNAIL - BEGIN
// ===== ABOUT
// Retrieve the embedded thumbnail of an image
// ===== DESCRIPTION
// exif_thumbnail() reads the embedded thumbnail of an image.
// If you want to deliver thumbnails through this function, you should send the mimetype information using the header() function.
// It is possible that exif_thumbnail() cannot create an image but can determine its size. In this case, the return value is false but width and height are set.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// exif_thumbnail(
//    resource|string $file,
//    int &$width = null,
//    int &$height = null,
//    int &$image_type = null
// ): string|false
// ===== CODE
$return_exif_thumbnail = exif_thumbnail(

$file, // resource|string file - The location of the image file. This can either be a path to the file or a stream resource.

$width, // int width - The return width of the returned thumbnail.

$height, // int height - The returned height of the returned thumbnail.

$image_type // int image_type - The returned image type of the returned thumbnail. This is either TIFF or JPEG.

); // Return Values
// Returns the embedded thumbnail, or false if the image contains no thumbnail.
// 
// Changelog
// Version - Description
// 7.2.0   - The file parameter now supports both local files and stream resources.
// 
// [examples]
// Examples
// [example]
// Example #1 exif_thumbnail() example
// [php]
// $image = exif_thumbnail('/path/to/image.jpg', $width, $height, $type);
// 
// if ($image!==false) {
//     header('Content-type: ' .image_type_to_mime_type($type));
//     echo $image;
//     exit;
// } else {
//     // no thumbnail available, handle the error here
//     echo 'No thumbnail available';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If the file is used to pass a stream to this function, then the stream must be seekable. Note that the file pointer position is not changed after this function returns.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-01)
// URL: https://www.php.net/manual/en/function.exif-thumbnail.php
// ========== EXIF_THUMBNAIL - END

// SYNTAX:
// string|false exif_thumbnail(resource|string $file, int& $width, int& $height, int& $image_type)

return $return_exif_thumbnail; // string|false
}
// ============================== END
// PHP_IMAGE_EXIF_EXIF_THUMBNAIL 
// ==============================


// ============================== END
//         PHP_IMAGE_EXIF         
// ==============================
?>