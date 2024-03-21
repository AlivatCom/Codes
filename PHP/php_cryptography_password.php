<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_CRYPTOGRAPHY_PASSWORD - BEGIN
// OFFLINE | PHP_CRYPTOGRAPHY_PASSWORD_ALGOS - array php_cryptography_password_algos()
// PHP_CRYPTOGRAPHY_PASSWORD_GET_INFO - array php_cryptography_password_get_info(string $hash)
// PHP_CRYPTOGRAPHY_PASSWORD_HASH - string php_cryptography_password_hash(string $password, string|int|null $algo, array $options = array())
// PHP_CRYPTOGRAPHY_PASSWORD_NEEDS_REHASH - bool php_cryptography_password_needs_rehash(string $hash, string|int|null $algo, array $options = array())
// PHP_CRYPTOGRAPHY_PASSWORD_VERIFY - bool php_cryptography_password_verify(string $password, string $hash)
// PHP_CRYPTOGRAPHY_PASSWORD - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== INSTALLATION
// BUNDLED (There is no installation needed to use these functions; they are part of the PHP core. To enable Argon2 password hashing, however, PHP must be built with libargon2 support using the --with-password-argon2 configure option.)
// ============================== USING FUNCTIONS (5)
// OFFLINE | password_algos() - PHP_7 >= PHP_7_4_0, PHP_8
// password_get_info() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// password_hash() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// password_needs_rehash() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// password_verify() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (5)
// array
// string
// int
// null
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_CRYPTOGRAPHY_PASSWORD   
// ============================== ABOUT
// PHP Manual / Function Reference / Cryptography Extensions / Password Hashing
// URL: https://www.php.net/manual/en/book.password.php
// ============================== DESCRIPTION
// PASSWORD_HASHING
// 
// PASSWORD_HASHING - BEGIN
// Password Hashing
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// PASSWORD_HASHING_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The password hashing API provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/intro.password.php
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
// For Argon2 password hashing, > libargon2 is required, though. As of PHP 7.3.0, libargon2 version 20161029 or later is required.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/password.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// To enable Argon2 password hashing, however, PHP must be built with libargon2 support using the --with-password-argon2 configure option.
// Prior to PHP 8.1.0, it was possible to specify the argon2 directory with --with-password-argon2[=DIR].
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/password.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/password.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/password.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/password.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are always available as part of the PHP core.
// PASSWORD_BCRYPT (string)                  - PASSWORD_BCRYPT is used to create new password hashes using the CRYPT_BLOWFISH algorithm.
// This will always result in a hash using the "$2y$" crypt format, which is always 60 characters wide.
// Supported Options:
// * salt (string) - to manually provide a salt to use when hashing the password. Note that this will override and prevent a salt from being automatically generated.
// If omitted, a random salt will be generated by password_hash() for each password hashed. This is the intended mode of operation and as of PHP 7.0.0 the salt option has been deprecated.
// * cost (int)    - which denotes the algorithmic cost that should be used. Examples of these values can be found on the crypt() page.
// If omitted, a default value of 10 will be used. This is a good baseline cost, but you may want to consider increasing it depending on your hardware.
// PASSWORD_ARGON2I (string)                 - PASSWORD_ARGON2I is used to create new password hashes using the Argon2i algorithm.
// Supported Options:
// * memory_cost (int) - Maximum memory (in kibibytes) that may be used to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_MEMORY_COST.
// * time_cost (int)   - Maximum amount of time it may take to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_TIME_COST.
// * threads (int)     - Number of threads to use for computing the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_THREADS. Only available with libargon2, not with libsodium implementation.
// Available as of PHP 7.2.0.
// PASSWORD_ARGON2ID (string)                - PASSWORD_ARGON2ID is used to create new password hashes using the Argon2id algorithm. It supports the same options as PASSWORD_ARGON2I.
// Available as of PHP 7.3.0.
// PASSWORD_ARGON2_DEFAULT_MEMORY_COST (int) - Default amount of memory in bytes that will be used while trying to compute a hash.
// Available as of PHP 7.2.0.
// PASSWORD_ARGON2_DEFAULT_TIME_COST (int)   - Default amount of time that will be spent trying to compute a hash.
// Available as of PHP 7.2.0.
// PASSWORD_ARGON2_DEFAULT_THREADS (int)     - Default number of threads that Argon2lib will use. Not available with libsodium implementation.
// Available as of PHP 7.2.0.
// PASSWORD_DEFAULT (mixed)                  - The default algorithm to use for hashing if no algorithm is provided. This may change in newer PHP releases when newer, stronger hashing algorithms are supported.
// It is worth noting that over time this constant can (and likely will) change. Therefore you should be aware that the length of the resulting hash can change. Therefore, if you use PASSWORD_DEFAULT you should store the resulting hash in a way that can store more than 60 characters (255 is the recommended width).
// Values for this constant:
// * PHP 5.5.0 - PASSWORD_BCRYPT
// 
// Changelog
// Version - Description
// 7.4.0   - The values of the password algo IDs (PASSWORD_BCRYPT, PASSWORD_ARGON2I, PASSWORD_ARGON2ID and PASSWORD_DEFAULT) are now strings. Previously, they have been ints.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/password.constants.php
// PREDEFINED_CONSTANTS - END
// 
// PASSWORD_HASHING_FUNCTIONS - BEGIN
// Password Hashing Functions
// 
// Table of Contents
// * password_algos        - Get available password hashing algorithm IDs
// * password_get_info     - Returns information about the given hash
// * password_hash         - Creates a password hash
// * password_needs_rehash - Checks if the given hash matches the given options
// * password_verify       - Verifies that a password matches a hash
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/ref.password.php
// PASSWORD_HASHING_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/book.password.php
// PASSWORD_HASHING - END
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_PASSWORD_ALGOS
// ============================== OFFLINE
// ============================== ABOUT
// Get available password hashing algorithm IDs.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// password_algos() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
/*
function php_cryptography_password_algos()
{
$return_password_algos = null;

// ========== PASSWORD_ALGOS - BEGIN
// ===== ABOUT
// Get available password hashing algorithm IDs
// ===== DESCRIPTION
// Returns a complete list of all registered password hashing algorithm IDs as an array of strings.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// password_algos(): array
// ===== CODE
$return_password_algos = password_algos(

// This function has no parameters.

); // Return Values
// Returns the available password hashing algorithm IDs.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic password() usage
// [php]
// print_r(password_algos());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => 2y
//     [1] => argon2i
//     [2] => argon2id
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.password-algos.php
// ========== PASSWORD_ALGOS - END

// SYNTAX:
// array password_algos()

return $return_password_algos; // array
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_PASSWORD_ALGOS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_PASSWORD_GET_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Returns information about the given hash.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// password_get_info() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_password_get_info($hash)
{
$return_password_get_info = null;

// ========== PASSWORD_GET_INFO - BEGIN
// ===== ABOUT
// Returns information about the given hash
// ===== DESCRIPTION
// When passed in a valid hash created by an algorithm supported by password_hash(), this function will return an array of information about that hash.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// password_get_info(string $hash): array
// ===== CODE
$return_password_get_info = password_get_info(

$hash // string hash - A hash created by password_hash().

); // Return Values
// Returns an associative array with three elements:
// * algo, which will match a password algorithm constant
// * algoName, which has the human readable name of the algorithm
// * options, which includes the options provided when calling password_hash()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-02)
// URL: https://www.php.net/manual/en/function.password-get-info.php
// ========== PASSWORD_GET_INFO - END

// SYNTAX:
// array password_get_info(string $hash)

return $return_password_get_info; // array
}
// ============================== END
// PHP_CRYPTOGRAPHY_PASSWORD_GET_INFO
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_PASSWORD_HASH
// ============================== PUBLIC
// ============================== ABOUT
// Creates a password hash.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// password_hash() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_password_hash($password, $algo, $options = array())
{
$return_password_hash = null;

// ========== PASSWORD_HASH - BEGIN
// ===== ABOUT
// Creates a password hash
// ===== DESCRIPTION
// password_hash() creates a new password hash using a strong one-way hashing algorithm.
// 
// The following algorithms are currently supported:
// * PASSWORD_DEFAULT  - Use the bcrypt algorithm (default as of PHP 5.5.0). Note that this constant is designed to change over time as new and stronger algorithms are added to PHP. For that reason, the length of the result from using this identifier can change over time. Therefore, it is recommended to store the result in a database column that can expand beyond 60 characters (255 characters would be a good choice).
// * PASSWORD_BCRYPT   - Use the CRYPT_BLOWFISH algorithm to create the hash. This will produce a standard crypt() compatible hash using the "$2y$" identifier. The result will always be a 60 character string, or false on failure.
// * PASSWORD_ARGON2I  - Use the Argon2i hashing algorithm to create the hash. This algorithm is only available if PHP has been compiled with Argon2 support.
// * PASSWORD_ARGON2ID - Use the Argon2id hashing algorithm to create the hash. This algorithm is only available if PHP has been compiled with Argon2 support.
// 
// Supported options for PASSWORD_BCRYPT:
// * salt (string)     - to manually provide a salt to use when hashing the password. Note that this will override and prevent a salt from being automatically generated.
// If omitted, a random salt will be generated by password_hash() for each password hashed. This is the intended mode of operation.
// Warning: The salt option is deprecated. It is now preferred to simply use the salt that is generated by default. As of PHP 8.0.0, an explicitly given salt is ignored.
// * cost (int)        - which denotes the algorithmic cost that should be used. Examples of these values can be found on the crypt() page.
// If omitted, a default value of 10 will be used. This is a good baseline cost, but you may want to consider increasing it depending on your hardware.
// 
// Supported options for PASSWORD_ARGON2I and PASSWORD_ARGON2ID:
// * memory_cost (int) - Maximum memory (in kibibytes) that may be used to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_MEMORY_COST.
// * time_cost (int)   - Maximum amount of time it may take to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_TIME_COST.
// * threads (int)     - Number of threads to use for computing the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_THREADS.
// Warning: Only available when PHP uses libargon2, not with libsodium implementation.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// password_hash(string $password, string|int|null $algo, array $options = []): string
// ===== CODE
$return_password_hash = password_hash(

$password, // string password - The user's password.
// Caution: Using the PASSWORD_BCRYPT as the algorithm, will result in the password parameter being truncated to a maximum length of 72 bytes.

$algo, // string|int|null algo - A password algorithm constant denoting the algorithm to use when hashing the password.

$options // array options - An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.
// If omitted, a random salt will be created and the default cost will be used.

); // Return Values
// Returns the hashed password.
// The used algorithm, cost and salt are returned as part of the hash. Therefore, all information that's needed to verify the hash is included in it. This allows the password_verify() function to verify the hash without needing separate storage for the salt or algorithm information.
// 
// Changelog
// Version - Description
// 8.0.0   - password_hash() no longer returns false on failure, instead a ValueError will be thrown if the password hashing algorithm is not valid, or an Error if the password hashing failed for an unknown error.
// 8.0.0   - The algo parameter is nullable now.
// 7.4.0   - The algo parameter expects a string now, but still accepts ints for backward compatibility.
// 7.4.0   - The sodium extension provides an alternative implementation for Argon2 passwords.
// 7.3.0   - Support for Argon2id passwords using PASSWORD_ARGON2ID was added.
// 7.2.0   - Support for Argon2i passwords using PASSWORD_ARGON2I was added.
// 
// [examples]
// Examples
// [example]
// Example #1 password_hash() example
// [php]
// //
// // We just want to hash our password using the current DEFAULT algorithm.
// // This is presently BCRYPT, and will produce a 60 character result.
// //
// // Beware that DEFAULT may change over time, so you would want to prepare
// // By allowing your storage to expand past 60 characters (255 would be good)
// //
// echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
// [/php]
// The above example will output something similar to:
// [result]
// $2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a
// [/result]
// [/example]
// [example]
// Example #2 password_hash() example setting cost manually
// [php]
// //
// // In this case, we want to increase the default cost for BCRYPT to 12.
// // Note that we also switched to BCRYPT, which will always be 60 characters.
// //
// $options = [
//     'cost' => 12,
// ];
// echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
// [/php]
// The above example will output something similar to:
// [result]
// $2y$12$QjSH496pcT5CEbzjD/vtVeH03tfHKFy36d4J0Ltp3lRtee9HDxY3K
// [/result]
// [/example]
// [example]
// Example #3 password_hash() example finding a good cost
// [php]
// //
// // This code will benchmark your server to determine how high of a cost you can
// // afford. You want to set the highest cost that you can without slowing down
// // you server too much. 10 is a good baseline, and more is good if your servers
// // are fast enough. The code below aims for ≤ 350 milliseconds stretching time,
// // which is an appropriate delay for systems handling interactive logins.
// //
// $timeTarget = 0.350; // 350 milliseconds
// 
// $cost = 10;
// do {
//     $cost++;
//     $start = microtime(true);
//     password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
//     $end = microtime(true);
// } while (($end - $start) < $timeTarget);
// 
// echo "Appropriate Cost Found: " . $cost;
// [/php]
// The above example will output something similar to:
// [result]
// Appropriate Cost Found: 12
// [/result]
// [/example]
// [example]
// Example #4 password_hash() example using Argon2i
// [php]
// echo 'Argon2i hash: ' . password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
// [/php]
// The above example will output something similar to:
// [result]
// Argon2i hash: $argon2i$v=19$m=1024,t=2,p=2$YzJBSzV4TUhkMzc3d3laeg$zqU/1IN0/AogfP4cmSJI1vc8lpXRW9/S0sYY2i2jHT0
// [/result]
// [/example]
// [/examples]
// 
// Notes
//  Caution:
//  It is strongly recommended that you do not generate your own salt for this function. It will create a secure salt automatically for you if you do not specify one.
//  As noted above, providing the salt option in PHP 7.0 will generate a deprecation warning. Support for providing a salt manually has been removed in PHP 8.0.
// Note: It is recommended that you test this function on your servers, and adjust the cost parameter so that execution of the function takes less than 350 milliseconds on interactive systems. The script in the above example will help you choose a good cost value for your hardware.
//  Note:
//  Updates to supported algorithms by this function (or changes to the default one) must follow the following rules:
//  * Any new algorithm must be in core for at least 1 full release of PHP prior to becoming default. So if, for example, a new algorithm is added in 7.5.5, it would not be eligible for default until 7.7 (since 7.6 would be the first full release). But if a different algorithm was added in 7.6.0, it would also be eligible for default at 7.7.0.
//  * The default should only change in a full release (7.3.0, 8.0.0, etc) and not in a revision release. The only exception to this is in an emergency when a critical security flaw is found in the current default.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.password-hash.php
// ========== PASSWORD_HASH - END

// SYNTAX:
// string password_hash(string $password, string|int|null $algo, array $options = array())

return $return_password_hash; // string
}
// ============================== END
// PHP_CRYPTOGRAPHY_PASSWORD_HASH
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_PASSWORD_NEEDS_REHASH
// ============================== PUBLIC
// ============================== ABOUT
// Checks if the given hash matches the given options.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// password_needs_rehash() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_password_needs_rehash($hash, $algo, $options = array())
{
$return_password_needs_rehash = false;

// ========== PASSWORD_NEEDS_REHASH - BEGIN
// ===== ABOUT
// Checks if the given hash matches the given options
// ===== DESCRIPTION
// This function checks to see if the supplied hash implements the algorithm and options provided. If not, it is assumed that the hash needs to be rehashed.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// password_needs_rehash(string $hash, string|int|null $algo, array $options = []): bool
// ===== CODE
$return_password_needs_rehash = password_needs_rehash(

$hash, // string hash - A hash created by password_hash().

$algo, // string|int|null algo - A password algorithm constant denoting the algorithm to use when hashing the password.

$options // array options - An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.

); // Return Values
// Returns true if the hash should be rehashed to match the given algo and options, or false otherwise.
// 
// Changelog
// Version - Description
// 7.4.0   - The algo parameter expects a string now, but still accepts ints for backward compatibility.
// 
// [examples]
// Examples
// [example]
// Example #1 Usage of password_needs_rehash()
// [php]
// 
// $password = 'rasmuslerdorf';
// $hash = '$2y$10$YCFsG6elYca568hBi2pZ0.3LDL5wjgxct1N8w/oLR/jfHsiQwCqTS';
// 
// $algorithm = PASSWORD_BCRYPT;
// // bcrypt's cost parameter can change over time as hardware improves
// $options = ['cost' => 12];
// 
// // Verify stored hash against plain-text password
// if (password_verify($password, $hash)) {
//     // Check if either the algorithm or the options have changed
//     if (password_needs_rehash($hash, $algorithm, $options)) {
//         // If so, create a new hash, and replace the old one
//         $newHash = password_hash($password, $algorithm, $options);
// 
//         // Update the user record with the $newHash
//     }
// 
//     // Perform the login.
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.password-needs-rehash.php
// ========== PASSWORD_NEEDS_REHASH - END

// SYNTAX:
// bool password_needs_rehash(string $hash, string|int|null $algo, array $options = array())

return $return_password_needs_rehash; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_PASSWORD_NEEDS_REHASH
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_PASSWORD_VERIFY
// ============================== PUBLIC
// ============================== ABOUT
// Verifies that a password matches a hash.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// password_verify() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_password_verify($password, $hash)
{
$return_password_verify = false;

// ========== PASSWORD_VERIFY - BEGIN
// ===== ABOUT
// Verifies that a password matches a hash
// ===== DESCRIPTION
// Verifies that the given hash matches the given password. password_verify() is compatible with crypt(). Therefore, password hashes created by crypt() can be used with password_verify().
// Note that password_hash() returns the algorithm, cost and salt as part of the returned hash. Therefore, all information that's needed to verify the hash is included in it. This allows the verify function to verify the hash without needing separate storage for the salt or algorithm information.
// This function is safe against timing attacks.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// password_verify(string $password, string $hash): bool
// ===== CODE
$return_password_verify = password_verify(

$password, // string password - The user's password.

$hash // string hash - A hash created by password_hash().

); // Return Values
// Returns true if the password and hash match, or false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 password_verify() example
// This is a simplified example; it is recommended to rehash a correct password if necessary; see password_needs_rehash() for an example.
// [php]
// // See the password_hash() example to see where this came from.
// $hash = '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a';
// 
// if (password_verify('rasmuslerdorf', $hash)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
// [/php]
// The above example will output:
// [result]
// Password is valid!
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.password-verify.php
// ========== PASSWORD_VERIFY - END

// SYNTAX:
// bool password_verify(string $password, string $hash)

return $return_password_verify; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_PASSWORD_VERIFY
// ==============================


// ============================== END
//   PHP_CRYPTOGRAPHY_PASSWORD   
// ==============================
?>