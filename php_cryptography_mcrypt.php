<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_CRYPTOGRAPHY_MCRYPT - BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_CREATE_IV - string php_cryptography_mcrypt_mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_DECRYPT - string|false php_cryptography_mcrypt_mcrypt_decrypt(string $cipher, string $key, string $data, string $mode, string $iv)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_ALGORITHMS_NAME - string php_cryptography_mcrypt_mcrypt_enc_get_algorithms_name(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_BLOCK_SIZE - int php_cryptography_mcrypt_mcrypt_enc_get_block_size(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_IV_SIZE - int php_cryptography_mcrypt_mcrypt_enc_get_iv_size(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_KEY_SIZE - int php_cryptography_mcrypt_mcrypt_enc_get_key_size(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_MODES_NAME - string php_cryptography_mcrypt_mcrypt_enc_get_modes_name(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_SUPPORTED_KEY_SIZES - array php_cryptography_mcrypt_mcrypt_enc_get_supported_key_sizes(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_ALGORITHM_MODE - bool php_cryptography_mcrypt_mcrypt_enc_is_block_algorithm_mode(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_ALGORITHM - bool php_cryptography_mcrypt_mcrypt_enc_is_block_algorithm(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_MODE - bool php_cryptography_mcrypt_mcrypt_enc_is_block_mode(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_SELF_TEST - int php_cryptography_mcrypt_mcrypt_enc_self_test(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENCRYPT - string|false php_cryptography_mcrypt_mcrypt_encrypt(string $cipher, string $key, string $data, string $mode, string $iv)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC_DEINIT - bool php_cryptography_mcrypt_mcrypt_generic_deinit(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC_INIT - int php_cryptography_mcrypt_mcrypt_generic_init(resource $td, string $key, string $iv)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC - string php_cryptography_mcrypt_mcrypt_generic(resource $td, string $data)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_BLOCK_SIZE - int|false php_cryptography_mcrypt_mcrypt_get_block_size(string $cipher, string $mode)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_CIPHER_NAME - string php_cryptography_mcrypt_mcrypt_get_cipher_name(string $cipher)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_IV_SIZE - int php_cryptography_mcrypt_mcrypt_get_iv_size(string $cipher, string $mode)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_KEY_SIZE - int|false php_cryptography_mcrypt_mcrypt_get_key_size(string $cipher, string $mode)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_LIST_ALGORITHMS - array php_cryptography_mcrypt_mcrypt_list_algorithms(string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_LIST_MODES - array php_cryptography_mcrypt_mcrypt_list_modes(string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_CLOSE - bool php_cryptography_mcrypt_mcrypt_module_close(resource $td)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_ALGO_BLOCK_SIZE - int php_cryptography_mcrypt_mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_ALGO_KEY_SIZE - int php_cryptography_mcrypt_mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_SUPPORTED_KEY_SIZES - array php_cryptography_mcrypt_mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_ALGORITHM_MODE - bool php_cryptography_mcrypt_mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_ALGORITHM - bool php_cryptography_mcrypt_mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_MODE - bool php_cryptography_mcrypt_mcrypt_module_is_block_mode(string $mode, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_OPEN - resource php_cryptography_mcrypt_mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory)
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_SELF_TEST - bool php_cryptography_mcrypt_mcrypt_module_self_test(string $algorithm, string $lib_dir)
// PHP_CRYPTOGRAPHY_MCRYPT_MDECRYPT_GENERIC - string php_cryptography_mcrypt_mdecrypt_generic(resource $td, string $data)
// PHP_CRYPTOGRAPHY_MCRYPT - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== INSTALLATION
// NOT_BUNDLED (This extension has been moved to the > PECL repository and is no longer bundled with PHP as of PHP 7.2.0)
// ============================== USING FUNCTIONS (32)
// mcrypt_create_iv() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_decrypt() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_get_algorithms_name() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_get_block_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_get_iv_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_get_key_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_get_modes_name() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_get_supported_key_sizes() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_is_block_algorithm_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_is_block_algorithm() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_is_block_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_enc_self_test() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_encrypt() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_generic_deinit() - PHP_4 >= PHP_4_0_7, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_generic_init() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_generic() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_get_block_size() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_get_cipher_name() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_get_iv_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_get_key_size() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_list_algorithms() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_list_modes() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_close() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_get_algo_block_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_get_algo_key_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_get_supported_key_sizes() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_is_block_algorithm_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_is_block_algorithm() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_is_block_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_open() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mcrypt_module_self_test() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// mdecrypt_generic() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (6)
// string
// int
// false
// resource
// array
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//    PHP_CRYPTOGRAPHY_MCRYPT    
// ============================== ABOUT
// PHP Manual / Function Reference / Cryptography Extensions / Mcrypt
// URL: https://www.php.net/manual/en/book.mcrypt.php
// ============================== DESCRIPTION
// MCRYPT
// 
// MCRYPT - BEGIN
// Mcrypt
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// MCRYPT_CIPHERS
// MCRYPT_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Warning: This feature was DEPRECATED in PHP 7.1.0, and REMOVED in PHP 7.2.0.
// Alternatives to this feature include:
// * Sodium (available as of PHP 7.2.0)
// * OpenSSL
// Note: This extension has been moved to the > PECL repository and is no longer bundled with PHP as of PHP 7.2.0.
// This is an interface to the mcrypt library, which supports a wide variety of block algorithms such as DES, TripleDES, Blowfish (default), 3-WAY, SAFER-SK64, SAFER-SK128, TWOFISH, TEA, RC2 and GOST in CBC, OFB, CFB and ECB cipher modes. Additionally, it supports RC6 and IDEA which are considered "non-free". CFB/OFB are 8bit by default.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/intro.mcrypt.php
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
// These functions work using > mcrypt. To use it, download libmcrypt-x.x.tar.gz from > http://mcrypt.sourceforge.net/ and follow the included installation instructions.
// libmcrypt Version 2.5.6 or greater is required.
// Windows users will find the library is the PHP 5.2 Windows binaries release. PHP 5.3 Windows binaries uses the static version of the MCrypt library, no DLL are needed.
// If you linked against libmcrypt 2.4.x or higher, the following additional block algorithms are supported: CAST, LOKI97, RIJNDAEL, SAFERPLUS, SERPENT and the following stream ciphers: ENIGMA (crypt), PANAMA, RC4 and WAKE. With libmcrypt 2.4.x or higher another cipher mode is also available; nOFB.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This extension has been moved to the > PECL repository and is no longer bundled with PHP as of PHP 7.2.0
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/mcrypt.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Mcrypt configuration options
// Name (Default)               | Changeable  | Changelog
// mcrypt.algorithms_dir (null) | PHP_INI_ALL |
// mcrypt.modes_dir (null)      | PHP_INI_ALL |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// mcrypt.algorithms_dir string - The directory that contains the algorithms. Defaults to the directories compiled within libmcrypt, which is typically /usr/local/lib/libmcrypt. See mcrypt_list_algorithms() for additional details.
// mcrypt.modes_dir string      - The directory that contains the modes. Defaults to the directories compiled within libmcrypt, which is typically /usr/local/lib/libmcrypt. See mcrypt_list_modes() for additional details.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// mcrypt_module_open() returns an encryption descriptor.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// Mcrypt can operate in four block cipher modes (CBC, OFB, CFB, and ECB). If linked against libmcrypt-2.4.x or higher the functions can also operate in the block cipher mode nOFB and in STREAM mode. Below you find a list with all supported encryption modes together with the constants that are defined for the encryption mode. For a more complete reference and discussion see Applied Cryptography by Schneier (ISBN 0-471-11709-9).
// * MCRYPT_MODE_ECB    - (electronic codebook) is a block cipher mode that is generally unsuitable for most purposes. The use of this mode is not recommended.
// * MCRYPT_MODE_CBC    - (cipher block chaining) is a block cipher mode that is significantly more secure than ECB mode.
// * MCRYPT_MODE_CFB    - (cipher feedback, in 8-bit mode) is a stream cipher mode. It is recommended to use NCFB mode rather than CFB mode.
// * MCRYPT_MODE_OFB    - (output feedback, in 8-bit mode) is a stream cipher mode comparable to CFB, but can be used in applications where error propagation cannot be tolerated. It is recommended to use NOFB mode rather than OFB mode.
// * MCRYPT_MODE_NOFB   - (output feedback, in n-bit mode) is comparable to OFB mode, but operates on the full block size of the algorithm.
// * MCRYPT_MODE_STREAM - is an extra mode to include some stream algorithms like "WAKE" or "RC4".
// 
// Mcrypt supports some other modes of operation for which there are no predefined constants. They can be utilised by passing a string in place of the missing constants.
// * "ctr"  - (counter mode) is a stream cipher mode.
// * "ncfb" - (cipher feedback, in n-bit mode) is comparable to CFB mode, but operates on the full block size of the algorithm.
// 
// Some other mode and random device constants:
// * MCRYPT_ENCRYPT (int)     -
// * MCRYPT_DECRYPT (int)     -
// * MCRYPT_DEV_RANDOM (int)  -
// * MCRYPT_DEV_URANDOM (int) -
// * MCRYPT_RAND (int)        -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.constants.php
// PREDEFINED_CONSTANTS - END
// 
// MCRYPT_CIPHERS - BEGIN
// Mcrypt ciphers
// 
// Here is a list of ciphers which are currently supported by the mcrypt extension. For a complete list of supported ciphers, see the defines at the end of mcrypt.h. The general rule with the mcrypt-2.2.x API is that you can access the cipher from PHP with MCRYPT_ciphername. With the libmcrypt-2.4.x and libmcrypt-2.5.x API these constants also work, but it is possible to specify the name of the cipher as a string with a call to mcrypt_module_open().
// * MCRYPT_3DES
// * MCRYPT_ARCFOUR_IV (libmcrypt > 2.4.x only)
// * MCRYPT_ARCFOUR (libmcrypt > 2.4.x only)
// * MCRYPT_BLOWFISH
// * MCRYPT_CAST_128
// * MCRYPT_CAST_256
// * MCRYPT_CRYPT
// * MCRYPT_DES
// * MCRYPT_DES_COMPAT (libmcrypt 2.2.x only)
// * MCRYPT_ENIGMA (libmcrypt > 2.4.x only, alias for MCRYPT_CRYPT)
// * MCRYPT_GOST
// * MCRYPT_IDEA (non-free)
// * MCRYPT_LOKI97 (libmcrypt > 2.4.x only)
// * MCRYPT_MARS (libmcrypt > 2.4.x only, non-free)
// * MCRYPT_PANAMA (libmcrypt > 2.4.x only)
// * MCRYPT_RIJNDAEL_128 (libmcrypt > 2.4.x only)
// * MCRYPT_RIJNDAEL_192 (libmcrypt > 2.4.x only)
// * MCRYPT_RIJNDAEL_256 (libmcrypt > 2.4.x only)
// * MCRYPT_RC2
// * MCRYPT_RC4 (libmcrypt 2.2.x only)
// * MCRYPT_RC6 (libmcrypt > 2.4.x only)
// * MCRYPT_RC6_128 (libmcrypt 2.2.x only)
// * MCRYPT_RC6_192 (libmcrypt 2.2.x only)
// * MCRYPT_RC6_256 (libmcrypt 2.2.x only)
// * MCRYPT_SAFER64
// * MCRYPT_SAFER128
// * MCRYPT_SAFERPLUS (libmcrypt > 2.4.x only)
// * MCRYPT_SERPENT(libmcrypt > 2.4.x only)
// * MCRYPT_SERPENT_128 (libmcrypt 2.2.x only)
// * MCRYPT_SERPENT_192 (libmcrypt 2.2.x only)
// * MCRYPT_SERPENT_256 (libmcrypt 2.2.x only)
// * MCRYPT_SKIPJACK (libmcrypt > 2.4.x only)
// * MCRYPT_TEAN (libmcrypt 2.2.x only)
// * MCRYPT_THREEWAY
// * MCRYPT_TRIPLEDES (libmcrypt > 2.4.x only)
// * MCRYPT_TWOFISH (for older mcrypt 2.x versions, or mcrypt > 2.4.x )
// * MCRYPT_TWOFISH128 (TWOFISHxxx are available in newer 2.x versions, but not in the 2.4.x versions)
// * MCRYPT_TWOFISH192
// * MCRYPT_TWOFISH256
// * MCRYPT_WAKE (libmcrypt > 2.4.x only)
// * MCRYPT_XTEA (libmcrypt > 2.4.x only)
// You must (in CFB and OFB mode) or can (in CBC mode) supply an initialization vector (IV) to the respective cipher function. The IV must be unique and must be the same when decrypting/encrypting. With data which is stored encrypted, you can take the output of a function of the index under which the data is stored (e.g. the MD5 key of the filename). Alternatively, you can transmit the IV together with the encrypted data (see chapter 9.3 of Applied Cryptography by Schneier (ISBN 0-471-11709-9) for a discussion of this topic).
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/mcrypt.ciphers.php
// MCRYPT_CIPHERS - END
// 
// MCRYPT_FUNCTIONS - BEGIN
// Mcrypt Functions
// 
// Table of Contents
// * mcrypt_create_iv                      - Creates an initialization vector (IV) from a random source
// * mcrypt_decrypt                        - Decrypts crypttext with given parameters
// * mcrypt_enc_get_algorithms_name        - Returns the name of the opened algorithm
// * mcrypt_enc_get_block_size             - Returns the blocksize of the opened algorithm
// * mcrypt_enc_get_iv_size                - Returns the size of the IV of the opened algorithm
// * mcrypt_enc_get_key_size               - Returns the maximum supported keysize of the opened mode
// * mcrypt_enc_get_modes_name             - Returns the name of the opened mode
// * mcrypt_enc_get_supported_key_sizes    - Returns an array with the supported keysizes of the opened algorithm
// * mcrypt_enc_is_block_algorithm_mode    - Checks whether the encryption of the opened mode works on blocks
// * mcrypt_enc_is_block_algorithm         - Checks whether the algorithm of the opened mode is a block algorithm
// * mcrypt_enc_is_block_mode              - Checks whether the opened mode outputs blocks
// * mcrypt_enc_self_test                  - Runs a self test on the opened module
// * mcrypt_encrypt                        - Encrypts plaintext with given parameters
// * mcrypt_generic_deinit                 - This function deinitializes an encryption module
// * mcrypt_generic_init                   - This function initializes all buffers needed for encryption
// * mcrypt_generic                        - This function encrypts data
// * mcrypt_get_block_size                 - Gets the block size of the specified cipher
// * mcrypt_get_cipher_name                - Gets the name of the specified cipher
// * mcrypt_get_iv_size                    - Returns the size of the IV belonging to a specific cipher/mode combination
// * mcrypt_get_key_size                   - Gets the key size of the specified cipher
// * mcrypt_list_algorithms                - Gets an array of all supported ciphers
// * mcrypt_list_modes                     - Gets an array of all supported modes
// * mcrypt_module_close                   - Closes the mcrypt module
// * mcrypt_module_get_algo_block_size     - Returns the blocksize of the specified algorithm
// * mcrypt_module_get_algo_key_size       - Returns the maximum supported keysize of the opened mode
// * mcrypt_module_get_supported_key_sizes - Returns an array with the supported keysizes of the opened algorithm
// * mcrypt_module_is_block_algorithm_mode - Returns if the specified module is a block algorithm or not
// * mcrypt_module_is_block_algorithm      - This function checks whether the specified algorithm is a block algorithm
// * mcrypt_module_is_block_mode           - Returns if the specified mode outputs blocks or not
// * mcrypt_module_open                    - Opens the module of the algorithm and the mode to be used
// * mcrypt_module_self_test               - This function runs a self test on the specified module
// * mdecrypt_generic                      - Decrypts data
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/ref.mcrypt.php
// MCRYPT_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-06)
// URL: https://www.php.net/manual/en/book.mcrypt.php
// MCRYPT - END
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_CREATE_IV
// ============================== PUBLIC
// ============================== ABOUT
// Creates an initialization vector (IV) from a random source.
// 
// Warning: This function was DEPRECATED in PHP 7.1.0, and REMOVED in PHP 7.2.0.
// Alternatives to this function include:
// * random_bytes()
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_create_iv() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== USING CONSTANTS (1)
// MCRYPT_DEV_URANDOM - mcrypt_create_iv()
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_create_iv($size, $source = MCRYPT_DEV_URANDOM)
{
$return_mcrypt_create_iv = null;

// ========== MCRYPT_CREATE_IV - BEGIN
// ===== ABOUT
// Creates an initialization vector (IV) from a random source
// Warning: This function was DEPRECATED in PHP 7.1.0, and REMOVED in PHP 7.2.0.
// Alternatives to this function include:
// * random_bytes()
// ===== DESCRIPTION
// Creates an initialization vector (IV) from a random source.
// The IV is only meant to give an alternative seed to the encryption routines. This IV does not need to be secret at all, though it can be desirable. You even can send it along with your ciphertext without losing security.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM): string
// ===== CODE
$return_mcrypt_create_iv = mcrypt_create_iv(

$size, // int size - The size of the IV.

$source // int source - The source of the IV. The source can be MCRYPT_RAND (system random number generator), MCRYPT_DEV_RANDOM (read data from /dev/random) and MCRYPT_DEV_URANDOM (read data from /dev/urandom). Prior to 5.3.0, MCRYPT_RAND was the only one supported on Windows.
// Note that the default value of this parameter was MCRYPT_DEV_RANDOM prior to PHP 5.6.0.
// Note: Note that MCRYPT_DEV_RANDOM may block until more entropy is available.

); // Return Values
// Returns the initialization vector, or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_create_iv() Example
// [php]
//     $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
//     $iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-create-iv.php
// ========== MCRYPT_CREATE_IV - END

// SYNTAX:
// string mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM)

return $return_mcrypt_create_iv; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_CREATE_IV
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_DECRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Decrypts crypttext with given parameters.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_decrypt() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_decrypt($cipher, $key, $data, $mode, $iv)
{
$return_mcrypt_decrypt = false;

// ========== MCRYPT_DECRYPT - BEGIN
// ===== ABOUT
// Decrypts crypttext with given parameters
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Decrypts the data and returns the unencrypted data.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_decrypt(
//    string $cipher,
//    string $key,
//    string $data,
//    string $mode,
//    string $iv = ?
// ): string|false
// ===== CODE
$return_mcrypt_decrypt = mcrypt_decrypt(

$cipher, // string cipher - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$key, // string key - The key with which the data was encrypted. If the provided key size is not supported by the cipher, the function will emit a warning and return false

$data, // string data - The data that will be decrypted with the given cipher and mode. If the size of the data is not n * blocksize, the data will be padded with '\0'.

$mode, // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".

$iv // string iv - Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return false.

); // Return Values
// Returns the decrypted data as a string or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-decrypt.php
// ========== MCRYPT_DECRYPT - END

// SYNTAX:
// string|false mcrypt_decrypt(string $cipher, string $key, string $data, string $mode, string $iv)

return $return_mcrypt_decrypt; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_DECRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_ALGORITHMS_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns the name of the opened algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_get_algorithms_name() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_get_algorithms_name($td)
{
$return_mcrypt_enc_get_algorithms_name = null;

// ========== MCRYPT_ENC_GET_ALGORITHMS_NAME - BEGIN
// ===== ABOUT
// Returns the name of the opened algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function returns the name of the algorithm.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_get_algorithms_name(resource $td): string
// ===== CODE
$return_mcrypt_enc_get_algorithms_name = mcrypt_enc_get_algorithms_name(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns the name of the opened algorithm as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_enc_get_algorithms_name() example
// [php]
// $td = mcrypt_module_open(MCRYPT_CAST_256, '', MCRYPT_MODE_CFB, '');
// echo mcrypt_enc_get_algorithms_name($td). "\n";
// 
// $td = mcrypt_module_open('cast-256', '', MCRYPT_MODE_CFB, '');
// echo mcrypt_enc_get_algorithms_name($td). "\n";
// [/php]
// The above example will output:
// [result]
// CAST-256
// CAST-256
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-get-algorithms-name.php
// ========== MCRYPT_ENC_GET_ALGORITHMS_NAME - END

// SYNTAX:
// string mcrypt_enc_get_algorithms_name(resource $td)

return $return_mcrypt_enc_get_algorithms_name; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_ALGORITHMS_NAME
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_BLOCK_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the blocksize of the opened algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_get_block_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_get_block_size($td)
{
$return_mcrypt_enc_get_block_size = 0;

// ========== MCRYPT_ENC_GET_BLOCK_SIZE - BEGIN
// ===== ABOUT
// Returns the blocksize of the opened algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the blocksize of the opened algorithm.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_get_block_size(resource $td): int
// ===== CODE
$return_mcrypt_enc_get_block_size = mcrypt_enc_get_block_size(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns the block size of the specified algorithm in bytes.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-get-block-size.php
// ========== MCRYPT_ENC_GET_BLOCK_SIZE - END

// SYNTAX:
// int mcrypt_enc_get_block_size(resource $td)

return $return_mcrypt_enc_get_block_size; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_BLOCK_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_IV_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the size of the IV of the opened algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_get_iv_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_get_iv_size($td)
{
$return_mcrypt_enc_get_iv_size = 0;

// ========== MCRYPT_ENC_GET_IV_SIZE - BEGIN
// ===== ABOUT
// Returns the size of the IV of the opened algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function returns the size of the IV of the algorithm specified by the encryption descriptor in bytes. An IV is used in cbc, cfb and ofb modes, and in some algorithms in stream mode.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_get_iv_size(resource $td): int
// ===== CODE
$return_mcrypt_enc_get_iv_size = mcrypt_enc_get_iv_size(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns the size of the IV, or 0 if the IV is ignored by the algorithm.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-get-iv-size.php
// ========== MCRYPT_ENC_GET_IV_SIZE - END

// SYNTAX:
// int mcrypt_enc_get_iv_size(resource $td)

return $return_mcrypt_enc_get_iv_size; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_IV_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_KEY_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the maximum supported keysize of the opened mode
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_get_key_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_get_key_size($td)
{
$return_mcrypt_enc_get_key_size = 0;

// ========== MCRYPT_ENC_GET_KEY_SIZE - BEGIN
// ===== ABOUT
// Returns the maximum supported keysize of the opened mode
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the maximum supported key size of the algorithm in bytes.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_get_key_size(resource $td): int
// ===== CODE
$return_mcrypt_enc_get_key_size = mcrypt_enc_get_key_size(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns the maximum supported key size of the algorithm in bytes.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-get-key-size.php
// ========== MCRYPT_ENC_GET_KEY_SIZE - END

// SYNTAX:
// int mcrypt_enc_get_key_size(resource $td)

return $return_mcrypt_enc_get_key_size; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_KEY_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_MODES_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns the name of the opened mode.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_get_modes_name() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_get_modes_name($td)
{
$return_mcrypt_enc_get_modes_name = null;

// ========== MCRYPT_ENC_GET_MODES_NAME - BEGIN
// ===== ABOUT
// Returns the name of the opened mode
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function returns the name of the mode.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_get_modes_name(resource $td): string
// ===== CODE
$return_mcrypt_enc_get_modes_name = mcrypt_enc_get_modes_name(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns the name as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_enc_get_modes_name() example
// [php]
// $td = mcrypt_module_open (MCRYPT_CAST_256, '', MCRYPT_MODE_CFB, '');
// echo mcrypt_enc_get_modes_name($td). "\n";
// 
// $td = mcrypt_module_open ('cast-256', '', 'ecb', '');
// echo mcrypt_enc_get_modes_name($td). "\n";
// [/php]
// The above example will output:
// [result]
// CFB
// ECB
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-get-modes-name.php
// ========== MCRYPT_ENC_GET_MODES_NAME - END

// SYNTAX:
// string mcrypt_enc_get_modes_name(resource $td)

return $return_mcrypt_enc_get_modes_name; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_MODES_NAME
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_SUPPORTED_KEY_SIZES
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array with the supported keysizes of the opened algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_get_supported_key_sizes() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_get_supported_key_sizes($td)
{
$return_mcrypt_enc_get_supported_key_sizes = null;

// ========== MCRYPT_ENC_GET_SUPPORTED_KEY_SIZES - BEGIN
// ===== ABOUT
// Returns an array with the supported keysizes of the opened algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the supported key sizes of the opened algorithm.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_get_supported_key_sizes(resource $td): array
// ===== CODE
$return_mcrypt_enc_get_supported_key_sizes = mcrypt_enc_get_supported_key_sizes(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns an array with the key sizes supported by the algorithm specified by the encryption descriptor. If it returns an empty array then all key sizes between 1 and mcrypt_enc_get_key_size() are supported by the algorithm.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_enc_get_supported_key_sizes() example
// [php]
//     $td = mcrypt_module_open('rijndael-256', '', 'ecb', '');
//     var_dump(mcrypt_enc_get_supported_key_sizes($td));
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   int(16)
//   [1]=>
//   int(24)
//   [2]=>
//   int(32)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-get-supported-key-sizes.php
// ========== MCRYPT_ENC_GET_SUPPORTED_KEY_SIZES - END

// SYNTAX:
// array mcrypt_enc_get_supported_key_sizes(resource $td)

return $return_mcrypt_enc_get_supported_key_sizes; // array
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_GET_SUPPORTED_KEY_SIZES
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_ALGORITHM_MODE
// ============================== PUBLIC
// ============================== ABOUT
// Checks whether the encryption of the opened mode works on blocks.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_is_block_algorithm_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_is_block_algorithm_mode($td)
{
$return_mcrypt_enc_is_block_algorithm_mode = false;

// ========== MCRYPT_ENC_IS_BLOCK_ALGORITHM_MODE - BEGIN
// ===== ABOUT
// Checks whether the encryption of the opened mode works on blocks
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Tells whether the algorithm of the opened mode works on blocks (e.g. false for stream, and true for cbc, cfb, ofb)..
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_is_block_algorithm_mode(resource $td): bool
// ===== CODE
$return_mcrypt_enc_is_block_algorithm_mode = mcrypt_enc_is_block_algorithm_mode(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns true if the mode is for use with block algorithms, otherwise it returns false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-is-block-algorithm-mode.php
// ========== MCRYPT_ENC_IS_BLOCK_ALGORITHM_MODE - END

// SYNTAX:
// bool mcrypt_enc_is_block_algorithm_mode(resource $td)

return $return_mcrypt_enc_is_block_algorithm_mode; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_ALGORITHM_MODE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_ALGORITHM
// ============================== PUBLIC
// ============================== ABOUT
// Checks whether the algorithm of the opened mode is a block algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_is_block_algorithm() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_is_block_algorithm($td)
{
$return_mcrypt_enc_is_block_algorithm = false;

// ========== MCRYPT_ENC_IS_BLOCK_ALGORITHM - BEGIN
// ===== ABOUT
// Checks whether the algorithm of the opened mode is a block algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Tells whether the algorithm of the opened mode is a block algorithm.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_is_block_algorithm(resource $td): bool
// ===== CODE
$return_mcrypt_enc_is_block_algorithm = mcrypt_enc_is_block_algorithm(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns true if the algorithm is a block algorithm or false if it is a stream one.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-is-block-algorithm.php
// ========== MCRYPT_ENC_IS_BLOCK_ALGORITHM - END

// SYNTAX:
// bool mcrypt_enc_is_block_algorithm(resource $td)

return $return_mcrypt_enc_is_block_algorithm; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_ALGORITHM
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_MODE
// ============================== PUBLIC
// ============================== ABOUT
// Checks whether the opened mode outputs blocks.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_is_block_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_is_block_mode($td)
{
$return_mcrypt_enc_is_block_mode = false;

// ========== MCRYPT_ENC_IS_BLOCK_MODE - BEGIN
// ===== ABOUT
// Checks whether the opened mode outputs blocks
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Tells whether the opened mode outputs blocks (e.g. true for cbc and ecb, and false for cfb and stream).
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_is_block_mode(resource $td): bool
// ===== CODE
$return_mcrypt_enc_is_block_mode = mcrypt_enc_is_block_mode(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns true if the mode outputs blocks of bytes, or false if it outputs just bytes.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-is-block-mode.php
// ========== MCRYPT_ENC_IS_BLOCK_MODE - END

// SYNTAX:
// bool mcrypt_enc_is_block_mode(resource $td)

return $return_mcrypt_enc_is_block_mode; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_IS_BLOCK_MODE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_SELF_TEST
// ============================== PUBLIC
// ============================== ABOUT
// Runs a self test on the opened module.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_enc_self_test() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_enc_self_test($td)
{
$return_mcrypt_enc_self_test = 0;

// ========== MCRYPT_ENC_SELF_TEST - BEGIN
// ===== ABOUT
// Runs a self test on the opened module
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function runs the self test on the algorithm specified by the descriptor td.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_enc_self_test(resource $td): int
// ===== CODE
$return_mcrypt_enc_self_test = mcrypt_enc_self_test(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns 0 on success and a negative int on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-enc-self-test.php
// ========== MCRYPT_ENC_SELF_TEST - END

// SYNTAX:
// int mcrypt_enc_self_test(resource $td)

return $return_mcrypt_enc_self_test; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENC_SELF_TEST
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENCRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Encrypts plaintext with given parameters.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_encrypt() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_encrypt($cipher, $key, $data, $mode, $iv)
{
$return_mcrypt_encrypt = false;

// ========== MCRYPT_ENCRYPT - BEGIN
// ===== ABOUT
// Encrypts plaintext with given parameters
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Encrypts the data and returns it.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_encrypt(
//    string $cipher,
//    string $key,
//    string $data,
//    string $mode,
//    string $iv = ?
// ): string|false
// ===== CODE
$return_mcrypt_encrypt = mcrypt_encrypt(

$cipher, // string cipher - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$key, // string key - The key with which the data will be encrypted. If the provided key size is not supported by the cipher, the function will emit a warning and return false

$data, // string data - The data that will be encrypted with the given cipher and mode. If the size of the data is not n * blocksize, the data will be padded with '\0'.
// The returned crypttext can be larger than the size of the data that was given by data.

$mode, // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".

$iv // string iv - Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return false.

); // Return Values
// Returns the encrypted data as a string or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_encrypt() Example
// [php]
//     # --- ENCRYPTION ---
// 
//     # the key should be random binary, use scrypt, bcrypt or PBKDF2 to
//     # convert a string into a key
//     # key is specified using hexadecimal
//     $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
//     
//     # show key size use either 16, 24 or 32 byte keys for AES-128, 192
//     # and 256 respectively
//     $key_size =  strlen($key);
//     echo "Key size: " . $key_size . "\n";
//     
//     $plaintext = "This string was AES-256 / CBC / ZeroBytePadding encrypted.";
// 
//     # create a random IV to use with CBC encoding
//     $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
//     $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
//     
//     # creates a cipher text compatible with AES (Rijndael block size = 128)
//     # to keep the text confidential 
//     # only suitable for encoded input that never ends with value 00h
//     # (because of default zero padding)
//     $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
//                                  $plaintext, MCRYPT_MODE_CBC, $iv);
// 
//     # prepend the IV for it to be available for decryption
//     $ciphertext = $iv . $ciphertext;
//     
//     # encode the resulting cipher text so it can be represented by a string
//     $ciphertext_base64 = base64_encode($ciphertext);
// 
//     echo  $ciphertext_base64 . "\n";
// 
//     # === WARNING ===
// 
//     # Resulting cipher text has no integrity or authenticity added
//     # and is not protected against padding oracle attacks.
//     
//     # --- DECRYPTION ---
//     
//     $ciphertext_dec = base64_decode($ciphertext_base64);
//     
//     # retrieves the IV, iv_size should be created using mcrypt_get_iv_size()
//     $iv_dec = substr($ciphertext_dec, 0, $iv_size);
//     
//     # retrieves the cipher text (everything except the $iv_size in the front)
//     $ciphertext_dec = substr($ciphertext_dec, $iv_size);
// 
//     # may remove 00h valued characters from end of plain text
//     $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
//                                     $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
//     
//     echo  $plaintext_dec . "\n";
// [/php]
// The above example will output:
// [result]
// Key size: 32
// ENJW8mS2KaJoNB5E5CoSAAu0xARgsR1bdzFWpEn+poYw45q+73az5kYi4j+0haevext1dGrcW8Qi59txfCBV8BBj3bzRP3dFCp3CPQSJ8eU=
// This string was AES-256 / CBC / ZeroBytePadding encrypted.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-encrypt.php
// ========== MCRYPT_ENCRYPT - END

// SYNTAX:
// string|false mcrypt_encrypt(string $cipher, string $key, string $data, string $mode, string $iv)

return $return_mcrypt_encrypt; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_ENCRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC_DEINIT
// ============================== PUBLIC
// ============================== ABOUT
// This function deinitializes an encryption module.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_generic_deinit() - PHP_4 >= PHP_4_0_7, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_generic_deinit($td)
{
$return_mcrypt_generic_deinit = false;

// ========== MCRYPT_GENERIC_DEINIT - BEGIN
// ===== ABOUT
// This function deinitializes an encryption module
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function terminates encryption specified by the encryption descriptor (td). It clears all buffers, but does not close the module. You need to call mcrypt_module_close() yourself. (But PHP does this for you at the end of the script.)
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_7, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_generic_deinit(resource $td): bool
// ===== CODE
$return_mcrypt_generic_deinit = mcrypt_generic_deinit(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-generic-deinit.php
// ========== MCRYPT_GENERIC_DEINIT - END

// SYNTAX:
// bool mcrypt_generic_deinit(resource $td)

return $return_mcrypt_generic_deinit; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC_DEINIT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC_INIT
// ============================== PUBLIC
// ============================== ABOUT
// This function initializes all buffers needed for encryption.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_generic_init() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_generic_init($td, $key, $iv)
{
$return_mcrypt_generic_init = 0;

// ========== MCRYPT_GENERIC_INIT - BEGIN
// ===== ABOUT
// This function initializes all buffers needed for encryption
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// You need to call this function before every call to mcrypt_generic() or mdecrypt_generic().
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_generic_init(resource $td, string $key, string $iv): int
// ===== CODE
$return_mcrypt_generic_init = mcrypt_generic_init(

$td, // resource td - The encryption descriptor.

$key, // string key - The maximum length of the key should be the one obtained by calling mcrypt_enc_get_key_size() and every value smaller than this is legal.

$iv // string iv - The IV should normally have the size of the algorithms block size, but you must obtain the size by calling mcrypt_enc_get_iv_size(). IV is ignored in ECB. IV MUST exist in CFB, CBC, STREAM, nOFB and OFB modes. It needs to be random and unique (but not secret). The same IV must be used for encryption/decryption. If you do not want to use it you should set it to zeros, but this is not recommended.

); // Return Values
// The function returns a negative value on error: -3 when the key length was incorrect, -4 when there was a memory allocation problem and any other return value is an unknown error. If an error occurs a warning will be displayed accordingly. false is returned if incorrect parameters were passed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-generic-init.php
// ========== MCRYPT_GENERIC_INIT - END

// SYNTAX:
// int mcrypt_generic_init(resource $td, string $key, string $iv)

return $return_mcrypt_generic_init; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC_INIT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC
// ============================== PUBLIC
// ============================== ABOUT
// This function encrypts data.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_generic() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_generic($td, $data)
{
$return_mcrypt_generic = null;

// ========== MCRYPT_GENERIC - BEGIN
// ===== ABOUT
// This function encrypts data
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function encrypts data. The data is padded with "\0" to make sure the length of the data is n * blocksize. This function returns the encrypted data. Note that the length of the returned string can in fact be longer than the input, due to the padding of the data.
// If you want to store the encrypted data in a database make sure to store the entire string as returned by mcrypt_generic, or the string will not entirely decrypt properly. If your original string is 10 characters long and the block size is 8 (use mcrypt_enc_get_block_size() to determine the blocksize), you would need at least 16 characters in your database field. Note the string returned by mdecrypt_generic() will be 16 characters as well...use rtrim($str, "\0") to remove the padding.
// If you are for example storing the data in a MySQL database remember that varchar fields automatically have trailing spaces removed during insertion. As encrypted data can end in a space (ASCII 32), the data will be damaged by this removal. Store data in a tinyblob/tinytext (or larger) field instead.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_generic(resource $td, string $data): string
// ===== CODE
$return_mcrypt_generic = mcrypt_generic(

$td, // resource td - The encryption descriptor.
// The encryption handle should always be initialized with mcrypt_generic_init() with a key and an IV before calling this function. Where the encryption is done, you should free the encryption buffers by calling mcrypt_generic_deinit(). See mcrypt_module_open() for an example.

$data // string data - The data to encrypt.

); // Return Values
// Returns the encrypted data.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-generic.php
// ========== MCRYPT_GENERIC - END

// SYNTAX:
// string mcrypt_generic(resource $td, string $data)

return $return_mcrypt_generic; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GENERIC
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_BLOCK_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Gets the block size of the specified cipher.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_get_block_size() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_get_block_size($cipher, $mode)
{
$return_mcrypt_get_block_size = false;

// ========== MCRYPT_GET_BLOCK_SIZE - BEGIN
// ===== ABOUT
// Gets the block size of the specified cipher
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or 2.5.x.
// mcrypt_get_block_size() is used to get the size of a block of the specified cipher (in combination with an encryption mode).
// It is more useful to use the mcrypt_enc_get_block_size() function as this uses the resource returned by mcrypt_module_open().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_get_block_size(int $cipher): int|false
// 
// mcrypt_get_block_size(string $cipher, string $mode): int|false
// ===== CODE
$return_mcrypt_get_block_size = mcrypt_get_block_size(

$cipher, // string cipher - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$mode // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".

); // Return Values
// Returns the algorithm block size in bytes or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_get_block_size() example
// This example shows how to use this function when linked against libmcrypt 2.4.x and 2.5.x.
// [php]
// 
// echo mcrypt_get_block_size('tripledes', 'ecb'); // 8
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-get-block-size.php
// ========== MCRYPT_GET_BLOCK_SIZE - END

// SYNTAX:
// int|false mcrypt_get_block_size(string $cipher, string $mode)

return $return_mcrypt_get_block_size; // int|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_BLOCK_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_CIPHER_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Gets the name of the specified cipher.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_get_cipher_name() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_get_cipher_name($cipher)
{
$return_mcrypt_get_cipher_name = null;

// ========== MCRYPT_GET_CIPHER_NAME - BEGIN
// ===== ABOUT
// Gets the name of the specified cipher
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// mcrypt_get_cipher_name() is used to get the name of the specified cipher.
// mcrypt_get_cipher_name() takes the cipher number as an argument (libmcrypt 2.2.x) or takes the cipher name as an argument (libmcrypt 2.4.x or higher) and returns the name of the cipher or false, if the cipher does not exist.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_get_cipher_name(int $cipher): string
// 
// mcrypt_get_cipher_name(string $cipher): string
// ===== CODE
$return_mcrypt_get_cipher_name = mcrypt_get_cipher_name(

$cipher // string cipher - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

); // Return Values
// This function returns the name of the cipher or false if the cipher does not exist.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_get_cipher_name() Example
// [php]
//    $cipher = MCRYPT_TripleDES;
// 
//    echo mcrypt_get_cipher_name($cipher);
// [/php]
// The above example will output:
// [result]
// 3DES
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-get-cipher-name.php
// ========== MCRYPT_GET_CIPHER_NAME - END

// SYNTAX:
// string mcrypt_get_cipher_name(string $cipher)

return $return_mcrypt_get_cipher_name; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_CIPHER_NAME
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_IV_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the size of the IV belonging to a specific cipher/mode combination.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_get_iv_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_get_iv_size($cipher, $mode)
{
$return_mcrypt_get_iv_size = 0;

// ========== MCRYPT_GET_IV_SIZE - BEGIN
// ===== ABOUT
// Returns the size of the IV belonging to a specific cipher/mode combination
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the size of the IV belonging to a specific cipher/mode combination.
// It is more useful to use the mcrypt_enc_get_iv_size() function as this uses the resource returned by mcrypt_module_open().
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_get_iv_size(string $cipher, string $mode): int
// ===== CODE
$return_mcrypt_get_iv_size = mcrypt_get_iv_size(

$cipher, // string cipher - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$mode // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
// The IV is ignored in ECB mode as this mode does not require it. You will need to have the same IV (think: starting point) both at encryption and decryption stages, otherwise your encryption will fail.

); // Return Values
// Returns the size of the Initialization Vector (IV) in bytes. On error the function returns false. If the IV is ignored in the specified cipher/mode combination zero is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_get_iv_size() Example
// [php]
//     echo mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB) . "\n";
// 
//     echo mcrypt_get_iv_size('des', 'ecb') . "\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-get-iv-size.php
// ========== MCRYPT_GET_IV_SIZE - END

// SYNTAX:
// int mcrypt_get_iv_size(string $cipher, string $mode)

return $return_mcrypt_get_iv_size; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_IV_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_KEY_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Gets the key size of the specified cipher.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_get_key_size() - PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_get_key_size($cipher, $mode)
{
$return_mcrypt_get_key_size = false;

// ========== MCRYPT_GET_KEY_SIZE - BEGIN
// ===== ABOUT
// Gets the key size of the specified cipher
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or 2.5.x.
// mcrypt_get_key_size() is used to get the size of a key of the specified cipher (in combination with an encryption mode).
// It is more useful to use the mcrypt_enc_get_key_size() function as this uses the resource returned by mcrypt_module_open().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_get_key_size(int $cipher): int|false
// 
// mcrypt_get_key_size(string $cipher, string $mode): int|false
// ===== CODE
$return_mcrypt_get_key_size = mcrypt_get_key_size(

$cipher, // string cipher - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$mode // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".

); // Return Values
// Returns the maximum supported key size of the algorithm in bytes or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_get_key_size() Example
// [php]
//     echo mcrypt_get_key_size('tripledes', 'ecb');
// [/php]
// The example above shows how to use this function when linked against libmcrypt 2.4.x or 2.5.x.
// The above example will output:
// [result]
// 24
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-get-key-size.php
// ========== MCRYPT_GET_KEY_SIZE - END

// SYNTAX:
// int|false mcrypt_get_key_size(string $cipher, string $mode)

return $return_mcrypt_get_key_size; // int|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_GET_KEY_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_LIST_ALGORITHMS
// ============================== PUBLIC
// ============================== ABOUT
// Gets an array of all supported ciphers.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_list_algorithms() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_list_algorithms($lib_dir)
{
$return_mcrypt_list_algorithms = null;

// ========== MCRYPT_LIST_ALGORITHMS - BEGIN
// ===== ABOUT
// Gets an array of all supported ciphers
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the list of all supported algorithms in the lib_dir parameter.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_list_algorithms(string $lib_dir = ini_get("mcrypt.algorithms_dir")): array
// ===== CODE
$return_mcrypt_list_algorithms = mcrypt_list_algorithms(

$lib_dir // string lib_dir - Specifies the directory where all algorithms are located. If not specified, the value of the mcrypt.algorithms_dir php.ini directive is used.

); // Return Values
// Returns an array with all the supported algorithms.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_list_algorithms() Example
// [php]
// $algorithms = mcrypt_list_algorithms();
// print_r($algorithms);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => cast-128
//     [1] => gost
//     [2] => rijndael-128
//     [3] => twofish
//     [4] => arcfour
//     [5] => cast-256
//     [6] => loki97
//     [7] => rijndael-192
//     [8] => saferplus
//     [9] => wake
//     [10] => blowfish-compat
//     [11] => des
//     [12] => rijndael-256
//     [13] => serpent
//     [14] => xtea
//     [15] => blowfish
//     [16] => enigma
//     [17] => rc2
//     [18] => tripledes
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-list-algorithms.php
// ========== MCRYPT_LIST_ALGORITHMS - END

// SYNTAX:
// array mcrypt_list_algorithms(string $lib_dir)

return $return_mcrypt_list_algorithms; // array
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_LIST_ALGORITHMS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_LIST_MODES
// ============================== PUBLIC
// ============================== ABOUT
// Gets an array of all supported modes.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_list_modes() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_list_modes($lib_dir)
{
$return_mcrypt_list_modes = null;

// ========== MCRYPT_LIST_MODES - BEGIN
// ===== ABOUT
// Gets an array of all supported modes
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the list of all supported modes in the lib_dir parameter.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_list_modes(string $lib_dir = ini_get("mcrypt.modes_dir")): array
// ===== CODE
$return_mcrypt_list_modes = mcrypt_list_modes(

$lib_dir // string lib_dir - Specifies the directory where all modes are located. If not specified, the value of the mcrypt.modes_dir php.ini directive is used.

); // Return Values
// Returns an array with all the supported modes.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_list_modes() Example
// [php]
//     $modes = mcrypt_list_modes();
// 
//     foreach ($modes as $mode) {
//         echo "$mode <br />\n";
//     }
// [/php]
// The example above will produce a list with all supported algorithms in the default mode directory. If it is not set with the mcrypt.modes_dir php.ini directive, the default directory of mcrypt is used (which is /usr/local/lib/libmcrypt).
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-list-modes.php
// ========== MCRYPT_LIST_MODES - END

// SYNTAX:
// array mcrypt_list_modes(string $lib_dir)

return $return_mcrypt_list_modes; // array
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_LIST_MODES
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Closes the mcrypt module.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7 < PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_close() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_close($td)
{
$return_mcrypt_module_close = false;

// ========== MCRYPT_MODULE_CLOSE - BEGIN
// ===== ABOUT
// Closes the mcrypt module
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Closes the specified encryption handle.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_close(resource $td): bool
// ===== CODE
$return_mcrypt_module_close = mcrypt_module_close(

$td // resource td - The encryption descriptor.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-close.php
// ========== MCRYPT_MODULE_CLOSE - END

// SYNTAX:
// bool mcrypt_module_close(resource $td)

return $return_mcrypt_module_close; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_CLOSE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_ALGO_BLOCK_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the blocksize of the specified algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_get_algo_block_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_get_algo_block_size($algorithm, $lib_dir)
{
$return_mcrypt_module_get_algo_block_size = 0;

// ========== MCRYPT_MODULE_GET_ALGO_BLOCK_SIZE - BEGIN
// ===== ABOUT
// Returns the blocksize of the specified algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the blocksize of the specified algorithm.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir = ?): int
// ===== CODE
$return_mcrypt_module_get_algo_block_size = mcrypt_module_get_algo_block_size(

$algorithm, // string algorithm - The algorithm name.

$lib_dir // string lib_dir - This optional parameter can contain the location where the mode module is on the system.

); // Return Values
// Returns the block size of the algorithm specified in bytes.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-get-algo-block-size.php
// ========== MCRYPT_MODULE_GET_ALGO_BLOCK_SIZE - END

// SYNTAX:
// int mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir)

return $return_mcrypt_module_get_algo_block_size; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_ALGO_BLOCK_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_ALGO_KEY_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the maximum supported keysize of the opened mode.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_get_algo_key_size() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_get_algo_key_size($algorithm, $lib_dir)
{
$return_mcrypt_module_get_algo_key_size = 0;

// ========== MCRYPT_MODULE_GET_ALGO_KEY_SIZE - BEGIN
// ===== ABOUT
// Returns the maximum supported keysize of the opened mode
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Gets the maximum supported keysize of the opened mode.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir = ?): int
// ===== CODE
$return_mcrypt_module_get_algo_key_size = mcrypt_module_get_algo_key_size(

$algorithm, // string algorithm - The algorithm name.

$lib_dir // string lib_dir - This optional parameter can contain the location where the mode module is on the system.

); // Return Values
// This function returns the maximum supported key size of the algorithm specified in bytes.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-get-algo-key-size.php
// ========== MCRYPT_MODULE_GET_ALGO_KEY_SIZE - END

// SYNTAX:
// int mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir)

return $return_mcrypt_module_get_algo_key_size; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_ALGO_KEY_SIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_SUPPORTED_KEY_SIZES
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array with the supported keysizes of the opened algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_get_supported_key_sizes() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir)
{
$return_mcrypt_module_get_supported_key_sizes = null;

// ========== MCRYPT_MODULE_GET_SUPPORTED_KEY_SIZES - BEGIN
// ===== ABOUT
// Returns an array with the supported keysizes of the opened algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Returns an array with the key sizes supported by the specified algorithm. If it returns an empty array then all key sizes between 1 and mcrypt_module_get_algo_key_size() are supported by the algorithm.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir = ?): array
// ===== CODE
$return_mcrypt_module_get_supported_key_sizes = mcrypt_module_get_supported_key_sizes(

$algorithm, // string algorithm - The algorithm to be used.

$lib_dir // string lib_dir - The optional lib_dir parameter can contain the location where the algorithm module is on the system.

); // Return Values
// Returns an array with the key sizes supported by the specified algorithm. If it returns an empty array then all key sizes between 1 and mcrypt_module_get_algo_key_size() are supported by the algorithm.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-get-supported-key-sizes.php
// ========== MCRYPT_MODULE_GET_SUPPORTED_KEY_SIZES - END

// SYNTAX:
// array mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir)

return $return_mcrypt_module_get_supported_key_sizes; // array
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_GET_SUPPORTED_KEY_SIZES
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_ALGORITHM_MODE
// ============================== PUBLIC
// ============================== ABOUT
// Returns if the specified module is a block algorithm or not.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_is_block_algorithm_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_is_block_algorithm_mode($mode, $lib_dir)
{
$return_mcrypt_module_is_block_algorithm_mode = false;

// ========== MCRYPT_MODULE_IS_BLOCK_ALGORITHM_MODE - BEGIN
// ===== ABOUT
// Returns if the specified module is a block algorithm or not
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function returns true if the mode is for use with block algorithms, otherwise it returns false. (e.g. false for stream, and true for cbc, cfb, ofb).
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir = ?): bool
// ===== CODE
$return_mcrypt_module_is_block_algorithm_mode = mcrypt_module_is_block_algorithm_mode(

$mode, // string mode - The mode to check.

$lib_dir // string lib_dir - The optional lib_dir parameter can contain the location where the algorithm module is on the system.

); // Return Values
// This function returns true if the mode is for use with block algorithms, otherwise it returns false. (e.g. false for stream, and true for cbc, cfb, ofb).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-is-block-algorithm-mode.php
// ========== MCRYPT_MODULE_IS_BLOCK_ALGORITHM_MODE - END

// SYNTAX:
// bool mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir)

return $return_mcrypt_module_is_block_algorithm_mode; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_ALGORITHM_MODE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_ALGORITHM
// ============================== PUBLIC
// ============================== ABOUT
// This function checks whether the specified algorithm is a block algorithm.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_is_block_algorithm() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_is_block_algorithm($algorithm, $lib_dir)
{
$return_mcrypt_module_is_block_algorithm = false;

// ========== MCRYPT_MODULE_IS_BLOCK_ALGORITHM - BEGIN
// ===== ABOUT
// This function checks whether the specified algorithm is a block algorithm
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function returns true if the specified algorithm is a block algorithm, or false if it is a stream one.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir = ?): bool
// ===== CODE
$return_mcrypt_module_is_block_algorithm = mcrypt_module_is_block_algorithm(

$algorithm, // string algorithm - The algorithm to check.

$lib_dir // string lib_dir - The optional lib_dir parameter can contain the location where the algorithm module is on the system.

); // Return Values
// This function returns true if the specified algorithm is a block algorithm, or false if it is a stream one.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-is-block-algorithm.php
// ========== MCRYPT_MODULE_IS_BLOCK_ALGORITHM - END

// SYNTAX:
// bool mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir)

return $return_mcrypt_module_is_block_algorithm; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_ALGORITHM
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_MODE
// ============================== PUBLIC
// ============================== ABOUT
// Returns if the specified mode outputs blocks or not.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_is_block_mode() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_is_block_mode($mode, $lib_dir)
{
$return_mcrypt_module_is_block_mode = false;

// ========== MCRYPT_MODULE_IS_BLOCK_MODE - BEGIN
// ===== ABOUT
// Returns if the specified mode outputs blocks or not
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function returns true if the mode outputs blocks of bytes or false if it outputs just bytes. (e.g. true for cbc and ecb, and false for cfb and stream).
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_is_block_mode(string $mode, string $lib_dir = ?): bool
// ===== CODE
$return_mcrypt_module_is_block_mode = mcrypt_module_is_block_mode(

$mode, // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".

$lib_dir // string lib_dir - The optional lib_dir parameter can contain the location where the algorithm module is on the system.

); // Return Values
// This function returns true if the mode outputs blocks of bytes or false if it outputs just bytes. (e.g. true for cbc and ecb, and false for cfb and stream).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mcrypt-module-is-block-mode.php
// ========== MCRYPT_MODULE_IS_BLOCK_MODE - END

// SYNTAX:
// bool mcrypt_module_is_block_mode(string $mode, string $lib_dir)

return $return_mcrypt_module_is_block_mode; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_IS_BLOCK_MODE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Opens the module of the algorithm and the mode to be used.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_open() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_open($algorithm, $algorithm_directory, $mode, $mode_directory)
{
$return_mcrypt_module_open = null;

// ========== MCRYPT_MODULE_OPEN - BEGIN
// ===== ABOUT
// Opens the module of the algorithm and the mode to be used
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function opens the module of the algorithm and the mode to be used. The name of the algorithm is specified in algorithm, e.g. "twofish" or is one of the MCRYPT_ciphername constants. The module is closed by calling mcrypt_module_close().
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_open(
//    string $algorithm,
//    string $algorithm_directory,
//    string $mode,
//    string $mode_directory
// ): resource
// ===== CODE
$return_mcrypt_module_open = mcrypt_module_open(

$algorithm, // string algorithm - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$algorithm_directory, // string algorithm_directory - The algorithm_directory parameter is used to locate the encryption module. When you supply a directory name, it is used. When you set it to an empty string (""), the value set by the mcrypt.algorithms_dir php.ini directive is used. When it is not set, the default directory that is used is the one that was compiled into libmcrypt (usually /usr/local/lib/libmcrypt).

$mode, // string mode - One of the MCRYPT_MODE_modename constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".

$mode_directory // string mode_directory - The mode_directory parameter is used to locate the encryption module. When you supply a directory name, it is used. When you set it to an empty string (""), the value set by the mcrypt.modes_dir php.ini directive is used. When it is not set, the default directory that is used is the one that was compiled-in into libmcrypt (usually /usr/local/lib/libmcrypt).

); // Return Valuess
// Normally it returns an encryption descriptor, or false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_module_open() Examples
// [php]
//     $td = mcrypt_module_open(MCRYPT_DES, '',
//         MCRYPT_MODE_ECB, '/usr/lib/mcrypt-modes');
// 
//     $td = mcrypt_module_open('rijndael-256', '', 'ofb', '');
// [/php]
// [/example]
// The first line in the example above will try to open the DES cipher from the default directory and the ECB mode from the directory /usr/lib/mcrypt-modes. The second example uses strings as name for the cipher and mode, this only works when the extension is linked against libmcrypt 2.4.x or 2.5.x.
// [example]
// Example #2 Using mcrypt_module_open() in encryption
// [php]
//     // Open the cipher
//     $td = mcrypt_module_open('rijndael-256', '', 'ofb', '');
// 
//     // Create the IV and determine the keysize length, use MCRYPT_RAND
//     // on Windows instead
//     $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_DEV_RANDOM);
//     $ks = mcrypt_enc_get_key_size($td);
// 
//     // Create key
//     $key = substr(md5('very secret key'), 0, $ks);
// 
//     // Intialize encryption
//     mcrypt_generic_init($td, $key, $iv);
// 
//     // Encrypt data
//     $encrypted = mcrypt_generic($td, 'This is very important data');
// 
//     // Terminate encryption handler
//     mcrypt_generic_deinit($td);
// 
//     // Initialize encryption module for decryption
//     mcrypt_generic_init($td, $key, $iv);
// 
//     // Decrypt encrypted string
//     $decrypted = mdecrypt_generic($td, $encrypted);
// 
//     // Terminate decryption handle and close module
//     mcrypt_generic_deinit($td);
//     mcrypt_module_close($td);
// 
//     // Show string
//     echo trim($decrypted) . "\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-module-open.php
// ========== MCRYPT_MODULE_OPEN - END

// SYNTAX:
// resource mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory)

return $return_mcrypt_module_open; // resource
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_OPEN
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_SELF_TEST
// ============================== PUBLIC
// ============================== ABOUT
// This function runs a self test on the specified module.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mcrypt_module_self_test() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mcrypt_module_self_test($algorithm, $lib_dir)
{
$return_mcrypt_module_self_test = false;

// ========== MCRYPT_MODULE_SELF_TEST - BEGIN
// ===== ABOUT
// This function runs a self test on the specified module
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function runs the self test on the algorithm specified.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mcrypt_module_self_test(string $algorithm, string $lib_dir = ?): bool
// ===== CODE
$return_mcrypt_module_self_test = mcrypt_module_self_test(

$algorithm, // string algorithm - One of the MCRYPT_ciphername constants, or the name of the algorithm as string.

$lib_dir // string lib_dir - The optional lib_dir parameter can contain the location where the algorithm module is on the system.

); // Return Values
// The function returns true if the self test succeeds, or false when it fails.
// 
// [examples]
// Examples
// [example]
// Example #1 mcrypt_module_self_test() example
// [php]
// var_dump(mcrypt_module_self_test(MCRYPT_RIJNDAEL_128)) . "\n";
// var_dump(mcrypt_module_self_test(MCRYPT_BOGUS_CYPHER));
// [/php]
// The above example will output:
// [result]
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mcrypt-module-self-test.php
// ========== MCRYPT_MODULE_SELF_TEST - END

// SYNTAX:
// bool mcrypt_module_self_test(string $algorithm, string $lib_dir)

return $return_mcrypt_module_self_test; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MCRYPT_MODULE_SELF_TEST
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_MCRYPT_MDECRYPT_GENERIC
// ============================== PUBLIC
// ============================== ABOUT
// Decrypts data.
// 
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7, PECL_mcrypt_1_0_0
// ============================== USING FUNCTIONS (1)
// mdecrypt_generic() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ============================== CODE
function php_cryptography_mcrypt_mdecrypt_generic($td, $data)
{
$return_mdecrypt_generic = null;

// ========== MDECRYPT_GENERIC - BEGIN
// ===== ABOUT
// Decrypts data
// Warning: This function has been DEPRECATED as of PHP 7.1.0 and REMOVED as of PHP 7.2.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// This function decrypts data. Note that the length of the returned string can in fact be longer than the unencrypted string, due to the padding of the data.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7 < PHP_7_2_0, PECL_mcrypt >= PECL_mcrypt_1_0_0
// ===== SYNTAX
// mdecrypt_generic(resource $td, string $data): string
// ===== CODE
$return_mdecrypt_generic = mdecrypt_generic(

$td, // resource td - An encryption descriptor returned by mcrypt_module_open()

$data // string data - Encrypted data.

); // Return Values
// Returns decrypted string.
// 
// [examples]
// Examples
// [example]
// Example #1 mdecrypt_generic() Example
// [php]
//     // Data
//     $key = 'this is a very long key, even too long for the cipher';
//     $plain_text = 'very important data';
// 
//     // Open module, and create IV
//     $td = mcrypt_module_open('des', '', 'ecb', '');
//     $key = substr($key, 0, mcrypt_enc_get_key_size($td));
//     $iv_size = mcrypt_enc_get_iv_size($td);
//     $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
// 
//     // Initialize encryption handle
//     if (mcrypt_generic_init($td, $key, $iv) != -1) {
// 
//         // Encrypt data
//         $c_t = mcrypt_generic($td, $plain_text);
//         mcrypt_generic_deinit($td);
// 
//         // Reinitialize buffers for decryption
//         mcrypt_generic_init($td, $key, $iv);
//         $p_t = mdecrypt_generic($td, $c_t);
// 
//         // Clean up
//         mcrypt_generic_deinit($td);
//         mcrypt_module_close($td);
//     }
// 
//     if (strncmp($p_t, $plain_text, strlen($plain_text)) == 0) {
//         echo "ok\n";
//     } else {
//         echo "error\n";
//     }
// [/php]
// The example above shows how to check if the data before the encryption is the same as the data after the decryption. It is very important to reinitialize the encryption buffer with mcrypt_generic_init() before you try to decrypt the data.
// The decryption handle should always be initialized with mcrypt_generic_init() with a key and an IV before calling this function. Where the encryption is done, you should free the encryption buffers by calling mcrypt_generic_deinit(). See mcrypt_module_open() for an example.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.mdecrypt-generic.php
// ========== MDECRYPT_GENERIC - END

// SYNTAX:
// string mdecrypt_generic(resource $td, string $data)

return $return_mdecrypt_generic; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_MCRYPT_MDECRYPT_GENERIC
// ==============================


// ============================== END
//    PHP_CRYPTOGRAPHY_MCRYPT    
// ==============================
?>