<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_COMPRESSION_LZF - BEGIN
// PHP_COMPRESSION_LZF_LZF_COMPRESS - string php_compression_lzf_lzf_compress(string $data)
// PHP_COMPRESSION_LZF_LZF_DECOMPRESS - string php_compression_lzf_lzf_decompress(string $data)
// PHP_COMPRESSION_LZF_LZF_OPTIMIZED_FOR - int php_compression_lzf_lzf_optimized_for()
// PHP_COMPRESSION_LZF - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PECL_lzf_1_0_0
// ============================== INSTALLATION
// NOT_BUNDLED (This extension is using > liblzf library by Marc Lehmann for its operations.)
// ============================== USING FUNCTIONS (3)
// lzf_compress() - PECL_lzf >= PECL_lzf_0_1_0
// lzf_decompress() - PECL_lzf >= PECL_lzf_0_1_0
// lzf_optimized_for() - PECL_lzf >= PECL_lzf_1_0_0
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (2)
// string
// int
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_COMPRESSION_LZF      
// ============================== ABOUT
// PHP Manual / Function Reference / Compression and Archive Extensions / LZF
// URL: https://www.php.net/manual/en/book.lzf.php
// ============================== DESCRIPTION
// LZF
// 
// LZF - BEGIN
// LZF
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// LZF_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// LZF is a very fast compression algorithm, ideal for saving space with only slight speed cost. It can be optimized for speed or space at the time of compilation. This extension is using > liblzf library by Marc Lehmann for its operations.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/intro.lzf.php
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
// URL: https://www.php.net/manual/en/lzf.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This > PECL extension is not bundled with PHP. Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/lzf.
// In order to use these functions you must compile PHP with lzf support by using the --with-lzf[=DIR] configure option. You may also pass --enable-lzf-better-compression to optimize LZF for space rather than speed.
// Windows users will enable php_lzf.dll inside of php.ini in order to use these functions. A DLL for this PECL extension is currently unavailable. See also the building on Windows section.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/lzf.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/lzf.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/lzf.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/lzf.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// This extension has no constants defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/lzf.constants.php
// PREDEFINED_CONSTANTS - END
// 
// LZF_FUNCTIONS - BEGIN
// LZF Functions
// 
// Table of Contents
// * lzf_compress      - LZF compression
// * lzf_decompress    - LZF decompression
// * lzf_optimized_for - Determines what LZF extension was optimized for
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/ref.lzf.php
// LZF_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/book.lzf.php
// LZF - END
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_LZF_LZF_COMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// LZF compression.
// ============================== SUPPORT
// PECL_lzf_0_1_0
// ============================== USING FUNCTIONS (1)
// lzf_compress() - PECL_lzf >= PECL_lzf_0_1_0
// ============================== CODE
function php_compression_lzf_lzf_compress($data)
{
$return_lzf_compress = null;

// ========== LZF_COMPRESS - BEGIN
// ===== ABOUT
// LZF compression
// ===== DESCRIPTION
// lzf_compress() compresses the given data string using LZF encoding.
// ===== SUPPORTED
// PECL_lzf >= PECL_lzf_0_1_0
// ===== SYNTAX
// lzf_compress(string $data): string
// ===== CODE
$return_lzf_compress = lzf_compress(

$data // string data - The string to compress.

); // Return Values
// Returns the compressed data or false if an error occurred.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.lzf-compress.php
// ========== LZF_COMPRESS - END

// SYNTAX:
// string lzf_compress(string $data)

return $return_lzf_compress; // string
}
// ============================== END
// PHP_COMPRESSION_LZF_LZF_COMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_LZF_LZF_DECOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// LZF decompression.
// ============================== SUPPORT
// PECL_lzf_0_1_0
// ============================== USING FUNCTIONS (1)
// lzf_decompress() - PECL_lzf >= PECL_lzf_0_1_0
// ============================== CODE
function php_compression_lzf_lzf_decompress($data)
{
$return_lzf_decompress = null;

// ========== LZF_DECOMPRESS - BEGIN
// ===== ABOUT
// LZF decompression
// ===== DESCRIPTION
// lzf_compress() decompresses the given data string containing lzf encoded data.
// ===== SUPPORTED
// PECL_lzf >= PECL_lzf_0_1_0
// ===== SYNTAX
// lzf_decompress(string $data): string
// ===== CODE
$return_lzf_decompress = lzf_decompress(

$data // string data - The compressed string.

); // Return Values
// Returns the decompressed data or false if an error occurred.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.lzf-decompress.php
// ========== LZF_DECOMPRESS - END

// SYNTAX:
// string lzf_decompress(string $data)

return $return_lzf_decompress; // string
}
// ============================== END
// PHP_COMPRESSION_LZF_LZF_DECOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_LZF_LZF_OPTIMIZED_FOR
// ============================== PUBLIC
// ============================== ABOUT
// Determines what LZF extension was optimized for.
// ============================== SUPPORT
// PECL_lzf_1_0_0
// ============================== USING FUNCTIONS (1)
// lzf_optimized_for() - PECL_lzf >= PECL_lzf_1_0_0
// ============================== CODE
function php_compression_lzf_lzf_optimized_for()
{
$return_lzf_optimized_for = 0;

// ========== LZF_OPTIMIZED_FOR - BEGIN
// ===== ABOUT
// Determines what LZF extension was optimized for
// ===== DESCRIPTION
// Determines what was LZF extension optimized for during compilation.
// ===== SUPPORTED
// PECL_lzf >= PECL_lzf_1_0_0
// ===== SYNTAX
// lzf_optimized_for(): int
// ===== CODE
$return_lzf_optimized_for = lzf_optimized_for(

// This function has no parameters.

); // Return Values
// Returns 1 if LZF was optimized for speed, 0 for compression.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/function.lzf-optimized-for.php
// ========== LZF_OPTIMIZED_FOR - END

// SYNTAX:
// int lzf_optimized_for()

return $return_lzf_optimized_for; // int
}
// ============================== END
// PHP_COMPRESSION_LZF_LZF_OPTIMIZED_FOR
// ==============================


// ============================== END
//      PHP_COMPRESSION_LZF      
// ==============================
?>