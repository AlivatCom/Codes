<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_CRYPTOGRAPHY_HASH - BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_ALGOS - array php_cryptography_hash_hash_algos()
// PHP_CRYPTOGRAPHY_HASH_HASH_COPY - HashContext php_cryptography_hash_hash_copy(HashContext $context)
// PHP_CRYPTOGRAPHY_HASH_HASH_EQUALS - bool php_cryptography_hash_hash_equals(string $known_string, string $user_string)
// PHP_CRYPTOGRAPHY_HASH_HASH_FILE - string|false php_cryptography_hash_hash_file(string $algo, string $filename, bool $binary = false, array $options = array())
// PHP_CRYPTOGRAPHY_HASH_HASH_FINAL - string php_cryptography_hash_hash_final(HashContext $context, bool $binary = false)
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASH_HKDF - string|false php_cryptography_hash_hash_hkdf(string $algo, string $key, int $length = 0, string $info = "", string $salt = "")
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASH_HMAC_ALGOS - array php_cryptography_hash_hash_hmac_algos()
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC_FILE - string|false php_cryptography_hash_hash_hmac_file(string $algo, string $filename, string $key, bool $binary = false)
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC - string|false php_cryptography_hash_hash_hmac(string $algo, string $data, string $key, bool $binary = false)
// PHP_CRYPTOGRAPHY_HASH_HASH_INIT - HashContext php_cryptography_hash_hash_init(string $algo, int $flags = 0, string $key = "", array $options = array())
// PHP_CRYPTOGRAPHY_HASH_HASH_PBKDF2 - string|false php_cryptography_hash_hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false)
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE_FILE - bool php_cryptography_hash_hash_update_file(HashContext $context, string $filename, resource $stream_context = null)
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE_STREAM - int php_cryptography_hash_hash_update_stream(HashContext $context, resource $stream, int $length = -1)
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE - bool php_cryptography_hash_hash_update(HashContext $context, string $data)
// PHP_CRYPTOGRAPHY_HASH_HASH - string|false php_cryptography_hash_hash(string $algo, string $data, bool $binary = false, array $options = array())
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT - HashContext|array|void _CONSTRUCT, _SERIALIZE, _UNSERIALIZE
// PHP_CRYPTOGRAPHY_HASH - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== INSTALLATION
// BUNDLED (As of PHP 5.1.2, the Hash extension is bundled and compiled into PHP by default. As of PHP 7.4.0, the Hash extension is a core PHP extension, so it is always enabled.)
// ============================== USING FUNCTIONS (15)
// hash_algos() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_copy() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// hash_equals() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// hash_file() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_final() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// OFFLINE | hash_hkdf() - PHP_7 >= PHP_7_1_2, PHP_8
// OFFLINE | hash_hmac_algos() - PHP_7 >= PHP_7_2_0, PHP_8
// hash_hmac_file() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_hmac() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_init() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_pbkdf2() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// hash_update_file() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_update_stream() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash_update() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// hash() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== USING CLASSES (1)
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT - PHP_7 - PHP_8
// ============================== USING DATA_TYPES (8)
// array
// OFFLINE | HashContext - PHP_7 >= PHP_7_2_0, PHP_8
// bool
// string
// false
// int
// resource
// void
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//     PHP_CRYPTOGRAPHY_HASH     
// ============================== ABOUT
// PHP Manual / Function Reference / Cryptography Extensions / Hash - HASH Message Digest Framework
// URL: https://www.php.net/manual/en/book.hash.php
// ============================== DESCRIPTION
// HASH_MESSAGE_DIGEST_FRAMEWORK
// RFC_5869_HMAC_BASED_EXTRACT_AND_EXPAND_KEY_DERIVATION_FUNCTION
// 
// HASH_MESSAGE_DIGEST_FRAMEWORK - BEGIN
// HASH Message Digest Framework
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// THE_HASHCONTEXT_CLASS
// HASH_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Message Digest (hash) engine. Allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/intro.hash.php
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
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/hash.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// As of PHP 5.1.2, the Hash extension is bundled and compiled into PHP by default.
// It may be explicitly disabled by using the --disable-hash switch to configure. Earlier versions of PHP may incorporate the Hash extension by installing the > PECL module.
// As of PHP 7.4.0, the Hash extension is a core PHP extension, so it is always enabled.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/hash.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/hash.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension defines a Hashing Context resource returned by hash_init().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/hash.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/hash.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// HASH_HMAC (int) - Optional flag for hash_init(). Indicates that the HMAC digest-keying algorithm should be applied to the current hashing context.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/hash.constants.php
// PREDEFINED_CONSTANTS - END
// 
// THE_HASHCONTEXT_CLASS - BEGIN
// The HashContext class
// 
// PHP_7 >= PHP_7_2_0, PHP_8
// 
// Introduction
// 
// Class synopsis
// [code]
// final class HashContext {
// 
//    /* Methods */
//    private __construct()
//    public __serialize(): array
//    public __unserialize(array $data): void
// }
// [/code]
// 
// Table of Contents
// * HashContext::__construct   - Private constructor to disallow direct instantiation
// * HashContext::__serialize   - Serializes the HashContext object
// * HashContext::__unserialize - Deserializes the data parameter into a HashContext object
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/class.hashcontext.php
// THE_HASHCONTEXT_CLASS - END
// 
// HASH_FUNCTIONS - BEGIN
// Hash Functions
// 
// Table of Contents
// * hash_algos         - Return a list of registered hashing algorithms
// * hash_copy          - Copy hashing context
// * hash_equals        - Timing attack safe string comparison
// * hash_file          - Generate a hash value using the contents of a given file
// * hash_final         - Finalize an incremental hash and return resulting digest
// * hash_hkdf          - Generate a HKDF key derivation of a supplied key input
// * hash_hmac_algos    - Return a list of registered hashing algorithms suitable for hash_hmac
// * hash_hmac_file     - Generate a keyed hash value using the HMAC method and the contents of a given file
// * hash_hmac          - Generate a keyed hash value using the HMAC method
// * hash_init          - Initialize an incremental hashing context
// * hash_pbkdf2        - Generate a PBKDF2 key derivation of a supplied password
// * hash_update_file   - Pump data into an active hashing context from a file
// * hash_update_stream - Pump data into an active hashing context from an open stream
// * hash_update        - Pump data into an active hashing context
// * hash               - Generate a hash value (message digest)
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/ref.hash.php
// HASH_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/book.hash.php
// HASH_MESSAGE_DIGEST_FRAMEWORK - END
// 
// RFC_5869_HMAC_BASED_EXTRACT_AND_EXPAND_KEY_DERIVATION_FUNCTION - BEGIN
// RFC 5869 - HMAC-based Extract-and-Expand Key Derivation Function
// 
// Internet Engineering Task Force (IETF)                       H. Krawczyk
// Request for Comments: 5869                                  IBM Research
// Category: Informational                                        P. Eronen
// ISSN: 2070-1721                                                    Nokia
//                                                                 May 2010
// 
//       HMAC-based Extract-and-Expand Key Derivation Function (HKDF)
// 
// Abstract
// 
//    This document specifies a simple Hashed Message Authentication Code
//    (HMAC)-based key derivation function (HKDF), which can be used as a
//    building block in various protocols and applications.  The key
//    derivation function (KDF) is intended to support a wide range of
//    applications and requirements, and is conservative in its use of
//    cryptographic hash functions.
// 
// Status of This Memo
// 
//    This document is not an Internet Standards Track specification; it is
//    published for informational purposes.
// 
//    This document is a product of the Internet Engineering Task Force
//    (IETF).  It represents the consensus of the IETF community.  It has
//    received public review and has been approved for publication by the
//    Internet Engineering Steering Group (IESG).  Not all documents
//    approved by the IESG are a candidate for any level of Internet
//    Standard; see Section 2 of RFC 5741.
// 
//    Information about the current status of this document, any errata,
//    and how to provide feedback on it may be obtained at
//    http://www.rfc-editor.org/info/rfc5869.
// 
// Copyright Notice
// 
//    Copyright (c) 2010 IETF Trust and the persons identified as the
//    document authors.  All rights reserved.
// 
//    This document is subject to BCP 78 and the IETF Trust's Legal
//    Provisions Relating to IETF Documents
//    (http://trustee.ietf.org/license-info) in effect on the date of
//    publication of this document.  Please review these documents
//    carefully, as they describe your rights and restrictions with respect
//    to this document.  Code Components extracted from this document must
//    include Simplified BSD License text as described in Section 4.e of
//    the Trust Legal Provisions and are provided without warranty as
//    described in the Simplified BSD License.
// 
// 1.  Introduction
// 
//    A key derivation function (KDF) is a basic and essential component of
//    cryptographic systems.  Its goal is to take some source of initial
//    keying material and derive from it one or more cryptographically
//    strong secret keys.
// 
//    This document specifies a simple HMAC-based [HMAC] KDF, named HKDF,
//    which can be used as a building block in various protocols and
//    applications, and is already used in several IETF protocols,
//    including [IKEv2], [PANA], and [EAP-AKA].  The purpose is to document
//    this KDF in a general way to facilitate adoption in future protocols
//    and applications, and to discourage the proliferation of multiple KDF
//    mechanisms.  It is not intended as a call to change existing
//    protocols and does not change or update existing specifications using
//    this KDF.
// 
//    HKDF follows the "extract-then-expand" paradigm, where the KDF
//    logically consists of two modules.  The first stage takes the input
//    keying material and "extracts" from it a fixed-length pseudorandom
//    key K.  The second stage "expands" the key K into several additional
//    pseudorandom keys (the output of the KDF).
// 
//    In many applications, the input keying material is not necessarily
//    distributed uniformly, and the attacker may have some partial
//    knowledge about it (for example, a Diffie-Hellman value computed by a
//    key exchange protocol) or even partial control of it (as in some
//    entropy-gathering applications).  Thus, the goal of the "extract"
//    stage is to "concentrate" the possibly dispersed entropy of the input
//    keying material into a short, but cryptographically strong,
//    pseudorandom key.  In some applications, the input may already be a
//    good pseudorandom key; in these cases, the "extract" stage is not
//    necessary, and the "expand" part can be used alone.
// 
//    The second stage "expands" the pseudorandom key to the desired
//    length; the number and lengths of the output keys depend on the
//    specific cryptographic algorithms for which the keys are needed.
// 
//    Note that some existing KDF specifications, such as NIST Special
//    Publication 800-56A [800-56A], NIST Special Publication 800-108
//    [800-108] and IEEE Standard 1363a-2004 [1363a], either only consider
//    the second stage (expanding a pseudorandom key), or do not explicitly
//    differentiate between the "extract" and "expand" stages, often
//    resulting in design shortcomings.  The goal of this specification is
//    to accommodate a wide range of KDF requirements while minimizing the
//    assumptions about the underlying hash function.  The "extract-then-
//    expand" paradigm supports well this goal (see [HKDF-paper] for more
//    information about the design rationale).
// 
// ===== LITERATURE_SOURCES
// * RFC (2023-08-03)
// URL: http://www.faqs.org/rfcs/rfc5869.html
// RFC_5869_HMAC_BASED_EXTRACT_AND_EXPAND_KEY_DERIVATION_FUNCTION - END
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_ALGOS
// ============================== PUBLIC
// ============================== ABOUT
// Return a list of registered hashing algorithms.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_algos() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_algos()
{
$return_hash_algos = null;

// ========== HASH_ALGOS - BEGIN
// ===== ABOUT
// Return a list of registered hashing algorithms
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_algos(): array
// ===== CODE
$return_hash_algos = hash_algos(

// This function has no parameters.

); // Return Values
// Returns a numerically indexed array containing the list of supported hashing algorithms.
// 
// Changelog
// Version - Description
// 8.1.0   - Support for MurmurHash3 and xxHash algorithms has been added.
// 7.4.0   - Support for crc32c has been added.
// 7.1.0   - Support for sha512/224, sha512/256, sha3-224, sha3-256, sha3-384 and sha3-512 has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_algos() example
// As of PHP 8.1.0, hash_algos() will return the following list of algorithm names.
// [php]
// print_r(hash_algos());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => md2
//     [1] => md4
//     [2] => md5
//     [3] => sha1
//     [4] => sha224
//     [5] => sha256
//     [6] => sha384
//     [7] => sha512/224
//     [8] => sha512/256
//     [9] => sha512
//     [10] => sha3-224
//     [11] => sha3-256
//     [12] => sha3-384
//     [13] => sha3-512
//     [14] => ripemd128
//     [15] => ripemd160
//     [16] => ripemd256
//     [17] => ripemd320
//     [18] => whirlpool
//     [19] => tiger128,3
//     [20] => tiger160,3
//     [21] => tiger192,3
//     [22] => tiger128,4
//     [23] => tiger160,4
//     [24] => tiger192,4
//     [25] => snefru
//     [26] => snefru256
//     [27] => gost
//     [28] => gost-crypto
//     [29] => adler32
//     [30] => crc32
//     [31] => crc32b
//     [32] => crc32c
//     [33] => fnv132
//     [34] => fnv1a32
//     [35] => fnv164
//     [36] => fnv1a64
//     [37] => joaat
//     [38] => murmur3a
//     [39] => murmur3c
//     [40] => murmur3f
//     [41] => xxh32
//     [42] => xxh64
//     [43] => xxh3
//     [44] => xxh128
//     [45] => haval128,3
//     [46] => haval160,3
//     [47] => haval192,3
//     [48] => haval224,3
//     [49] => haval256,3
//     [50] => haval128,4
//     [51] => haval160,4
//     [52] => haval192,4
//     [53] => haval224,4
//     [54] => haval256,4
//     [55] => haval128,5
//     [56] => haval160,5
//     [57] => haval192,5
//     [58] => haval224,5
//     [59] => haval256,5
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-algos.php
// ========== HASH_ALGOS - END

// SYNTAX:
// array hash_algos()

return $return_hash_algos; // array
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_ALGOS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_COPY
// ============================== PUBLIC
// ============================== ABOUT
// Copy hashing context.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// hash_copy() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_hash_hash_copy($context)
{
$return_hash_copy = null;

// ========== HASH_COPY - BEGIN
// ===== ABOUT
// Copy hashing context
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// hash_copy(HashContext $context): HashContext
// ===== CODE
$return_hash_copy = hash_copy(

$context // HashContext context - Hashing context returned by hash_init().

); // Return Values
// Returns a copy of Hashing Context.
// 
// Changelog
// Version - Description
// 7.2.0   - Accept and return HashContext instead of resource.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_copy() example
// [php]
// $context = hash_init("sha256");
// hash_update($context, "The quick brown fox ");
// 
// // copy context to be able to continue using it
// $copy_context = hash_copy($context);
// 
// echo hash_final($context), "\n";
// 
// hash_update($copy_context, "jumped over the lazy dog.");
// echo hash_final($copy_context), "\n";
// [/php]
// The above example will output:
// [result]
// b29d66e56ed90cce9b0165c43fedec612b60a071974d8be4513e18580d55b5bd
// 68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-copy.php
// ========== HASH_COPY - END

// SYNTAX:
// HashContext hash_copy(HashContext $context)

return $return_hash_copy; // HashContext
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_COPY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_EQUALS
// ============================== PUBLIC
// ============================== ABOUT
// Timing attack safe string comparison.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// hash_equals() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_hash_hash_equals($known_string, $user_string)
{
$return_hash_equals = false;

// ========== HASH_EQUALS - BEGIN
// ===== ABOUT
// Timing attack safe string comparison
// ===== DESCRIPTION
// Checks whether two strings are equal without leaking information about the contents of known_string via the execution time.
// This function can be used to mitigate timing attacks. Performing a regular comparison with === will take more or less time to execute depending on whether the two values are different or not and at which position the first difference can be found, thus leaking information about the contents of the secret known_string.
// Caution: It is important to provide the user-supplied string as the second parameter, rather than the first.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// hash_equals(string $known_string, string $user_string): bool
// ===== CODE
$return_hash_equals = hash_equals(

$known_string, // string known_string - The known string that must be kept secret.

$user_string // string user_string - The user-supplied string to compare against.

); // Return Values
// Returns true when the two strings are equal, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_equals() example
// [php]
// $secretKey = '8uRhAeH89naXfFXKGOEj';
// 
// // Value and signature are provided by the user, e.g. within the URL
// // and retrieved using $_GET.
// $value = 'username=rasmuslerdorf';
// $signature = '8c35009d3b50caf7f5d2c1e031842e6b7823a1bb781d33c5237cd27b57b5f327';
// 
// if (hash_equals(hash_hmac('sha256', $value, $secretKey), $signature)) {
//     echo "The value is correctly signed.", PHP_EOL;
// } else {
//     echo "The value was tampered with.", PHP_EOL;
// }
// [/php]
// The above example will output:
// [result]
// The value is correctly signed.
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Both arguments must be of the same length to be compared successfully. When arguments of differing length are supplied, false is returned immediately and the length of the known string may be leaked in case of a timing attack.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-equals.php
// ========== HASH_EQUALS - END

// SYNTAX:
// bool hash_equals(string $known_string, string $user_string)

return $return_hash_equals; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_EQUALS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Generate a hash value using the contents of a given file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_file() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_file($algo, $filename, $binary = false, $options = array())
{
$return_hash_file = false;

// ========== HASH_FILE - BEGIN
// ===== ABOUT
// Generate a hash value using the contents of a given file
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_file(
//    string $algo,
//    string $filename,
//    bool $binary = false,
//    array $options = []
// ): string|false
// ===== CODE
$return_hash_file = hash_file(

$algo, // string algo - Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see hash_algos().

$filename, // string filename - URL describing location of file to be hashed; Supports fopen wrappers.

$binary, // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

$options // array options - An array of options for the various hashing algorithms. Currently, only the "seed" parameter is supported by the MurmurHash variants.

); // Return Values
// Returns a string containing the calculated message digest as lowercase hexits unless binary is set to true in which case the raw binary representation of the message digest is returned.
// 
// Changelog
// Version - Description
// 8.1.0   - The options parameter has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 Using hash_file()
// [php]
// // Create a file to calculate hash of
// file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');
// 
// echo hash_file('sha256', 'example.txt');
// [/php]
// The above example will output:
// [result]
// 68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-file.php
// ========== HASH_FILE - END

// SYNTAX:
// string|false hash_file(string $algo, string $filename, bool $binary = false, array $options = array())

return $return_hash_file; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_FINAL
// ============================== PUBLIC
// ============================== ABOUT
// Finalize an incremental hash and return resulting digest.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_final() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_final($context, $binary = false)
{
$return_hash_final = null;

// ========== HASH_FINAL - BEGIN
// ===== ABOUT
// Finalize an incremental hash and return resulting digest
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_final(HashContext $context, bool $binary = false): string
// ===== CODE
$return_hash_final = hash_final(

$context, // HashContext context - Hashing context returned by hash_init().

$binary // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

); // Return Values
// Returns a string containing the calculated message digest as lowercase hexits unless binary is set to true in which case the raw binary representation of the message digest is returned.
// 
// Changelog
// Version - Description
// 7.2.0   - Accept HashContext instead of resource.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-02)
// URL: https://www.php.net/manual/en/function.hash-final.php
// ========== HASH_FINAL - END

// SYNTAX:
// string hash_final(HashContext $context, bool $binary = false)

return $return_hash_final; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_FINAL
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_HKDF
// ============================== OFFLINE
// ============================== ABOUT
// Generate a HKDF key derivation of a supplied key input.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// hash_hkdf() - PHP_7 >= PHP_7_1_2, PHP_8
// ============================== CODE
/*
function php_cryptography_hash_hash_hkdf($algo, $key, $length = 0, $info = "", $salt = "")
{
$return_hash_hkdf = false;

// ========== HASH_HKDF - BEGIN
// ===== ABOUT
// Generate a HKDF key derivation of a supplied key input
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_7 >= PHP_7_1_2, PHP_8
// ===== SYNTAX
// hash_hkdf(
//    string $algo,
//    string $key,
//    int $length = 0,
//    string $info = "",
//    string $salt = ""
// ): string
// ===== CODE
$return_hash_hkdf = hash_hkdf(

$algo, // string algo - Name of selected hashing algorithm (i.e. "sha256", "sha512", "haval160,4", etc..) See hash_algos() for a list of supported algorithms.
// Note: Non-cryptographic hash functions are not allowed.

$key, // string key - Input keying material (raw binary). Cannot be empty.

$length, // int length - Desired output length in bytes. Cannot be greater than 255 times the chosen hash function size.
// If length is 0, the output length will default to the chosen hash function size.

$info, // string info - Application/context-specific info string.

$salt // string salt - Salt to use during derivation.
// While optional, adding random salt significantly improves the strength of HKDF.

); // Return Values
// Returns a string containing a raw binary representation of the derived key (also known as output keying material - OKM).
// 
// Errors/Exceptions
// Throws a ValueError exception if key is empty, algo is unknown/non-cryptographic, length is less than 0 or too large (greater than 255 times the size of the hash function).
// 
// Changelog
// Version - Description
// 8.0.0   - Now throws a ValueError exception on error. Previously, false was returned and an E_WARNING message was emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_hkdf() example
// [php]
// Generate a random key, and salt to strengthen it during derivation.
$inputKey = random_bytes(32);
$salt = random_bytes(16);

// Derive a pair of separate keys, using the same input created above.
$encryptionKey = hash_hkdf('sha256', $inputKey, 32, 'aes-256-encryption', $salt);
$authenticationKey = hash_hkdf('sha256', $inputKey, 32, 'sha-256-authentication', $salt);

var_dump($encryptionKey !== $authenticationKey); // bool(true)
// [/php]
The above example produces a pair of separate keys, suitable for creation of an encrypt-then-HMAC construct, using AES-256 and SHA-256 for encryption and authentication respectively.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-hkdf.php
// ========== HASH_HKDF - END

// SYNTAX:
// string|false hash_hkdf(string $algo, string $key, int $length = 0, string $info = "", string $salt = "")
// v8.0.0 - Previously, false was returned.

return $return_hash_hkdf; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_HKDF
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC_ALGOS
// ============================== OFFLINE
// ============================== ABOUT
// Return a list of registered hashing algorithms suitable for hash_hmac.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// hash_hmac_algos() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_cryptography_hash_hash_hmac_algos()
{
$return_hash_hmac_algos = null;

// ========== HASH_HMAC_ALGOS - BEGIN
// ===== ABOUT
// Return a list of registered hashing algorithms suitable for hash_hmac
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// hash_hmac_algos(): array
// ===== CODE
$return_hash_hmac_algos = hash_hmac_algos(

// This function has no parameters.

); // Return Values
// Returns a numerically indexed array containing the list of supported hashing algorithms suitable for hash_hmac().
// 
// [examples]
// Examples
// [example]
// Example #1 hash_hmac_algos() example
// [php]
// print_r(hash_hmac_algos());
// [/php]
The above example will output something similar to:
// [result]
// Array
// (
//     [0] => md2
//     [1] => md4
//     [2] => md5
//     [3] => sha1
//     [4] => sha224
//     [5] => sha256
//     [6] => sha384
//     [7] => sha512/224
//     [8] => sha512/256
//     [9] => sha512
//     [10] => sha3-224
//     [11] => sha3-256
//     [12] => sha3-384
//     [13] => sha3-512
//     [14] => ripemd128
//     [15] => ripemd160
//     [16] => ripemd256
//     [17] => ripemd320
//     [18] => whirlpool
//     [19] => tiger128,3
//     [20] => tiger160,3
//     [21] => tiger192,3
//     [22] => tiger128,4
//     [23] => tiger160,4
//     [24] => tiger192,4
//     [25] => snefru
//     [26] => snefru256
//     [27] => gost
//     [28] => gost-crypto
//     [29] => haval128,3
//     [30] => haval160,3
//     [31] => haval192,3
//     [32] => haval224,3
//     [33] => haval256,3
//     [34] => haval128,4
//     [35] => haval160,4
//     [36] => haval192,4
//     [37] => haval224,4
//     [38] => haval256,4
//     [39] => haval128,5
//     [40] => haval160,5
//     [41] => haval192,5
//     [42] => haval224,5
//     [43] => haval256,5
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Before PHP 7.2.0 the only means to get a list of supported hash algorithms has been to call hash_algos() which also returns hash algorithms that are not suitable for hash_hmac().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-hmac-algos.php
// ========== HASH_HMAC_ALGOS - END

// SYNTAX:
// array hash_hmac_algos()

return $return_hash_hmac_algos; // array
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC_ALGOS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Generate a keyed hash value using the HMAC method and the contents of a given file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_hmac_file() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_hmac_file($algo, $filename, $key, $binary = false)
{
$return_hash_hmac_file = false;

// ========== HASH_HMAC_FILE - BEGIN
// ===== ABOUT
// Generate a keyed hash value using the HMAC method and the contents of a given file
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_hmac_file(
//    string $algo,
//    string $filename,
//    string $key,
//    bool $binary = false
// ): string|false
// ===== CODE
$return_hash_hmac_file = hash_hmac_file(

$algo, // string algo - Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See hash_hmac_algos() for a list of supported algorithms.

$filename, // string filename - URL describing location of file to be hashed; Supports fopen wrappers.

$key, // string key - Shared secret key used for generating the HMAC variant of the message digest.

$binary // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

); // Return Values
// Returns a string containing the calculated message digest as lowercase hexits unless binary is set to true in which case the raw binary representation of the message digest is returned. Returns false if the file filename cannot be read.
// 
// Errors/Exceptions
// Throws a ValueError exception if algo is unknown or is a non-cryptographic hash function.
// 
// Changelog
// Version - Description
// 8.0.0   - Now throws a ValueError exception if algo is unknown or is a non-cryptographic hash function; previously, false was returned instead.
// 7.2.0   - Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.

// [examples]
// Examples
// [example]
// Example #1 hash_hmac_file() example
// [php]
// // Create a file to calculate hash of */
// file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');
// 
// echo hash_hmac_file('sha256', 'example.txt', 'secret');
// [/php]
// The above example will output:
// [result]
// 9c5c42422b03f0ee32949920649445e417b2c634050833c5165704b825c2a53b
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-hmac-file.php
// ========== HASH_HMAC_FILE - END

// SYNTAX:
// string|false hash_hmac_file(string $algo, string $filename, string $key, bool $binary = false)

return $return_hash_hmac_file; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC
// ============================== PUBLIC
// ============================== ABOUT
// Generate a keyed hash value using the HMAC method.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_hmac() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_hmac($algo, $data, $key, $binary = false)
{
$return_hash_hmac = false;

// ========== HASH_HMAC - BEGIN
// ===== ABOUT
// Generate a keyed hash value using the HMAC method
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_hmac(
//    string $algo,
//    string $data,
//    string $key,
//    bool $binary = false
// ): string
// ===== CODE
$return_hash_hmac = hash_hmac(

$algo, // string algo - Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See hash_hmac_algos() for a list of supported algorithms.

$data, // string data - Message to be hashed.

$key, // string key - Shared secret key used for generating the HMAC variant of the message digest.

$binary // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

); // Return Values
// Returns a string containing the calculated message digest as lowercase hexits unless binary is set to true in which case the raw binary representation of the message digest is returned.
// 
// Errors/Exceptions
// Throws a ValueError exception if algo is unknown or is a non-cryptographic hash function.
// 
// Changelog
// Version - Description
// 8.0.0   - Now throws a ValueError exception if algo is unknown or is a non-cryptographic hash function; previously, false was returned instead.
// 7.2.0   - Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_hmac() example
// [php]
// echo hash_hmac('sha256', 'The quick brown fox jumped over the lazy dog.', 'secret');
// [/php]
// The above example will output:
// [result]
// 9c5c42422b03f0ee32949920649445e417b2c634050833c5165704b825c2a53b
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-hmac.php
// ========== HASH_HMAC - END

// SYNTAX:
// string|false hash_hmac(string $algo, string $data, string $key, bool $binary = false)

return $return_hash_hmac; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_HMAC
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_INIT
// ============================== PUBLIC
// ============================== ABOUT
// Initialize an incremental hashing context.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_init() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_init($algo, $flags = 0, $key = "", $options = array())
{
$return_hash_init = null;

// ========== HASH_INIT - BEGIN
// ===== ABOUT
// Initialize an incremental hashing context
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_init(
//    string $algo,
//    int $flags = 0,
//    string $key = "",
//    array $options = []
// ): HashContext
// ===== CODE
$return_hash_init = hash_init(

$algo, // string algo - Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see hash_algos().

$flags, // int flags - Optional settings for hash generation, currently supports only one option: HASH_HMAC. When specified, the key must be specified.

$key, // string key - When HASH_HMAC is specified for flags, a shared secret key to be used with the HMAC hashing method must be supplied in this parameter.

$options // array options - An array of options for the various hashing algorithms. Currently, only the "seed" parameter is supported by the MurmurHash variants.

); // Return Values
// Returns a Hashing Context for use with hash_update(), hash_update_stream(), hash_update_file(), and hash_final().
// 
// Errors/Exceptions
// Throws a ValueError exception if algo is unknown or is a non-cryptographic hash function, or if key is empty.
// 
// Changelog
// Version - Description
// 8.1.0   - The options parameter has been added.
// 8.0.0   - Now throws an ValueError exception if the algo is unknown or is a non-cryptographic hash function, or if key is empty. Previously, false was returned and an E_WARNING message was emitted.
// 7.2.0   - Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) with HASH_HMAC was disabled.
// 7.2.0   - Return HashContext instead of resource.
// 
// [examples]
// Examples
// [example]
// Example #1 Incremental hashing example
// [php]
// $hash = hash('sha256', 'The quick brown fox jumped over the lazy dog.');
// 
// $ctx = hash_init('sha256');
// hash_update($ctx, 'The quick brown fox ');
// hash_update($ctx, 'jumped over the lazy dog.');
// $incremental_hash = hash_final($ctx);
// 
// echo $incremental_hash, PHP_EOL;
// var_dump($hash === $incremental_hash);
// [/php]
// The above example will output:
// [result]
// 68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-init.php
// ========== HASH_INIT - END

// SYNTAX:
// HashContext hash_init(string $algo, int $flags = 0, string $key = "", array $options = array())

return $return_hash_init; // HashContext
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_INIT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_PBKDF2
// ============================== PUBLIC
// ============================== ABOUT
// Generate a PBKDF2 key derivation of a supplied password.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// hash_pbkdf2() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_hash_hash_pbkdf2($algo, $password, $salt, $iterations, $length = 0, $binary = false)
{
$return_hash_pbkdf2 = false;

// ========== HASH_PBKDF2 - BEGIN
// ===== ABOUT
// Generate a PBKDF2 key derivation of a supplied password
// ===== DESCRIPTION
// ===== SUPPORTED
// hash_pbkdf2(
//    string $algo,
//    string $password,
//    string $salt,
//    int $iterations,
//    int $length = 0,
//    bool $binary = false
// ): string
// ===== SYNTAX
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== CODE
$return_hash_pbkdf2 = hash_pbkdf2(

$algo, // string algo - Name of selected hashing algorithm (i.e. md5, sha256, haval160,4, etc..) See hash_algos() for a list of supported algorithms.

$password, // string password - The password to use for the derivation.

$salt, // string salt - The salt to use for the derivation. This value should be generated randomly.

$iterations, // int iterations - The number of internal iterations to perform for the derivation.

$length, // int length - The length of the output string. If binary is true this corresponds to the byte-length of the derived key, if binary is false this corresponds to twice the byte-length of the derived key (as every byte of the key is returned as two hexits).
// If 0 is passed, the entire output of the supplied algorithm is used.

$binary // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

); // Return Values
// Returns a string containing the derived key as lowercase hexits unless binary is set to true in which case the raw binary representation of the derived key is returned.
// 
// Errors/Exceptions
// Throws a ValueError exception if the algorithm is unknown, the iterations parameter is less than or equal to 0, the length is less than 0 or the salt is too long (greater than INT_MAX - 4).
// 
// Changelog
// Version - Description
// 8.0.0   - Now throws a ValueError exception on error. Previously, false was returned and an E_WARNING message was emitted.
// 7.2.0   - Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_pbkdf2() example, basic usage
// [php]
// $password = "password";
// $iterations = 600000;
// 
// // Generate a cryptographically secure random salt using random_bytes()
// $salt = random_bytes(16);
// 
// $hash = hash_pbkdf2("sha256", $password, $salt, $iterations, 20);
// var_dump($hash);
// 
// // for raw binary, the $length needs to be halved for equivalent results
// $hash = hash_pbkdf2("sha256", $password, $salt, $iterations, 10, true);
// var_dump(bin2hex($hash));
// [/php]
// The above example will output something similar to:
// [result]
// string(20) "120fb6cffcf8b32c43e7"
// string(20) "120fb6cffcf8b32c43e7"
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Caution: The PBKDF2 method can be used for hashing passwords for storage. However, it should be noted that password_hash() or crypt() with CRYPT_BLOWFISH are better suited for password storage.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-pbkdf2.php
// ========== HASH_PBKDF2 - END

// SYNTAX:
// string|false hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false)
// v8.0.0 - Previously, false was returned.

return $return_hash_pbkdf2; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_PBKDF2
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Pump data into an active hashing context from a file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_update_file() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_update_file($context, $filename, $stream_context = null)
{
$return_hash_update_file = false;

// ========== HASH_UPDATE_FILE - BEGIN
// ===== ABOUT
// Pump data into an active hashing context from a file
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_update_file(HashContext $context, string $filename, ?resource $stream_context = null): bool
// ===== CODE
$return_hash_update_file = hash_update_file(

$context, // HashContext context - Hashing context returned by hash_init().

$filename, // string filename - URL describing location of file to be hashed; Supports fopen wrappers.

$stream_context // resource stream_context - Stream context as returned by stream_context_create().

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - stream_context is now nullable.
// 7.2.0   - Accept HashContext instead of resource.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-02)
// URL: https://www.php.net/manual/en/function.hash-update-file.php
// ========== HASH_UPDATE_FILE - END

// SYNTAX:
// bool hash_update_file(HashContext $context, string $filename, resource $stream_context = null)

return $return_hash_update_file; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE_STREAM
// ============================== PUBLIC
// ============================== ABOUT
// Pump data into an active hashing context from an open stream.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_update_stream() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_update_stream($context, $stream, $length = -1)
{
$return_hash_update_stream = -1;

// ========== HASH_UPDATE_STREAM - BEGIN
// ===== ABOUT
// Pump data into an active hashing context from an open stream
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_update_stream(HashContext $context, resource $stream, int $length = -1): int
// ===== CODE
$return_hash_update_stream = hash_update_stream(

$context, // HashContext context - Hashing context returned by hash_init().

$stream, // resource stream - Open file handle as returned by any stream creation function.

$length // int length - Maximum number of characters to copy from stream into the hashing context.

); // Return Values
// Actual number of bytes added to the hashing context from stream.
// 
// Changelog
// Version - Description
// 7.2.0   - Accept HashContext instead of resource.
// 
// [examples]
// Examples
// [example]
// Example #1 hash_update_stream() example
// [php]
// $fp = tmpfile();
// fwrite($fp, 'jumped over the lazy dog.');
// rewind($fp);
// 
// $ctx = hash_init('sha256');
// hash_update($ctx, 'The quick brown fox ');
// hash_update_stream($ctx, $fp);
// echo hash_final($ctx);
// [/php]
// The above example will output:
// [result]
// 68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash-update-stream.php
// ========== HASH_UPDATE_STREAM - END

// SYNTAX:
// int hash_update_stream(HashContext $context, resource $stream, int $length = -1)

return $return_hash_update_stream; // int
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE_STREAM
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE
// ============================== PUBLIC
// ============================== ABOUT
// Pump data into an active hashing context.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash_update() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash_update($context, $data)
{
$return_hash_update = false;

// ========== HASH_UPDATE - BEGIN
// ===== ABOUT
// Pump data into an active hashing context
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash_update(HashContext $context, string $data): bool
// ===== CODE
$return_hash_update = hash_update(

$context, // HashContext context - Hashing context returned by hash_init().

$data // string data - Message to be included in the hash digest.

); // Return Values
// Returns true.
// 
// Changelog
// Version - Description
// 7.2.0   - Accept HashContext instead of resource.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-02)
// URL: https://www.php.net/manual/en/function.hash-update.php
// ========== HASH_UPDATE - END

// SYNTAX:
// bool hash_update(HashContext $context, string $data)

return $return_hash_update; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASH_UPDATE
// ==============================


// ============================== BEGIN
//   PHP_CRYPTOGRAPHY_HASH_HASH   
// ============================== PUBLIC
// ============================== ABOUT
// Generate a hash value (message digest).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_hash_1_1
// ============================== USING FUNCTIONS (1)
// hash() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ============================== CODE
function php_cryptography_hash_hash($algo, $data, $binary = false, $options = array())
{
$return_hash = false;

// ========== HASH - BEGIN
// ===== ABOUT
// Generate a hash value (message digest)
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_hash >= PECL_hash_1_1
// ===== SYNTAX
// hash(
//    string $algo,
//    string $data,
//    bool $binary = false,
//    array $options = []
// ): string
// ===== CODE
$return_hash = hash(

$algo, // string algo - Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see hash_algos().

$data, // string data - Message to be hashed.

$binary, // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

$options // array options - An array of options for the various hashing algorithms. Currently, only the "seed" parameter is supported by the MurmurHash variants.

); // Return Values
// Returns a string containing the calculated message digest as lowercase hexits unless binary is set to true in which case the raw binary representation of the message digest is returned.
// 
// Changelog
// Version - Description
// 8.1.0   - The options parameter has been added.
// 8.0.0   - hash() now throws a ValueError exception if algo is unknown; previously, false was returned instead.

// [examples]
// Examples
// [example]
// Example #1 A hash() example
// [php]
// echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
// [/php]
// The above example will output:
// [result]
// 68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.hash.php
// ========== HASH - END

// SYNTAX:
// string|false hash(string $algo, string $data, bool $binary = false, array $options = array())
// v8.0.0 - Previously, false was returned.

return $return_hash; // string|false
}
// ============================== END
//   PHP_CRYPTOGRAPHY_HASH_HASH   
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT
// ============================== OFFLINE
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_CONSTRUCT - HashContext php_cryptography_hash_hashcontext_construct()
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_SERIALIZE - array php_cryptography_hash_hashcontext_serialize(HashContext $hashcontext)
// OFFLINE | PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_UNSERIALIZE - void php_cryptography_hash_hashcontext_unserialize(HashContext $hashcontext, array $data)
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (3)
// OFFLINE | HashContext::__construct() - PHP_7 >= PHP_7_2_0, PHP_8
// OFFLINE | HashContext::__serialize() - PHP_8
// OFFLINE | HashContext::__unserialize() - PHP_8
// ============================== USING DATA_TYPES (3)
// OFFLINE | HashContext - PHP_7 >= PHP_7_2_0, PHP_8
// array
// void
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Private constructor to disallow direct instantiation.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// HashContext::__construct() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_cryptography_hash_hashcontext_construct()
{
$return_hashcontext_construct = null;

// ========== HASHCONTEXT_CONSTRUCT - BEGIN
// ===== ABOUT
// Private constructor to disallow direct instantiation
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// private HashContext::__construct()
// ===== CODE
$return_hashcontext_construct = new HashContext(

// This function has no parameters.

); // Return
// HashContext
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/hashcontext.construct.php
// ========== HASHCONTEXT_CONSTRUCT - END

// SYNTAX:
// HashContext HashContext::__construct()

return $return_hashcontext_construct; // HashContext
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_SERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Serializes the HashContext object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// HashContext::__serialize() - PHP_8
// ============================== CODE
/*
function php_cryptography_hash_hashcontext_serialize($hashcontext)
{
$return_hashcontext_serialize = null;

// ========== HASHCONTEXT_SERIALIZE - BEGIN
// ===== ABOUT
// Serializes the HashContext object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public HashContext::__serialize(): array
// ===== CODE
$return_hashcontext_serialize = $hashcontext->__serialize(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/hashcontext.serialize.php
// ========== HASHCONTEXT_SERIALIZE - END

// SYNTAX:
// array HashContext::__serialize()

return $return_hashcontext_serialize; // array
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_SERIALIZE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_UNSERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Deserializes the data parameter into a HashContext object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// HashContext::__unserialize() - PHP_8
// ============================== CODE
/*
function php_cryptography_hash_hashcontext_unserialize($hashcontext, $data)
{

// ========== HASHCONTEXT_UNSERIALIZE - BEGIN
// ===== ABOUT
// Deserializes the data parameter into a HashContext object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public HashContext::__unserialize(array $data): void
// ===== CODE
$hashcontext->__unserialize(

$data // array data - The value being deserialized.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/hashcontext.unserialize.php
// ========== HASHCONTEXT_UNSERIALIZE - END

// SYNTAX:
// void HashContext::__unserialize(array $data)

// return: void
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT_UNSERIALIZE
// ==============================


// ============================== END
// PHP_CRYPTOGRAPHY_HASH_HASHCONTEXT
// ==============================


// ============================== END
//     PHP_CRYPTOGRAPHY_HASH     
// ==============================
?>