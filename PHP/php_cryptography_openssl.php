<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_CRYPTOGRAPHY_OPENSSL - BEGIN
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CIPHER_IV_LENGTH - int|false php_cryptography_openssl_openssl_cipher_iv_length(string $cipher_algo)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CIPHER_KEY_LENGTH - int|false php_cryptography_openssl_openssl_cipher_key_length(string $cipher_algo)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_DECRYPT - bool php_cryptography_openssl_openssl_cms_decrypt(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key = null, int $encoding = OPENSSL_ENCODING_SMIME)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_ENCRYPT - bool php_cryptography_openssl_openssl_cms_encrypt(string $input_filename, string $output_filename, OpenSSLCertificate|array|string $certificate, array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_READ - bool php_cryptography_openssl_openssl_cms_read(string $input_filename, array& $certificates)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_SIGN - bool php_cryptography_openssl_openssl_cms_sign(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, string $untrusted_certificates_filename = null)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_VERIFY - bool php_cryptography_openssl_openssl_cms_verify(string $input_filename, int $flags = 0, string $certificates = null, array $ca_info = array(), string $untrusted_certificates_filename = null, string $content = null, string $pk7 = null, string $sigfile = null, int $encoding = OPENSSL_ENCODING_SMIME)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_EXPORT_TO_FILE - bool php_cryptography_openssl_openssl_csr_export_to_file(OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_EXPORT - bool php_cryptography_openssl_openssl_csr_export(OpenSSLCertificateSigningRequest|string $csr, string& $output, bool $no_text = true)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_GET_PUBLIC_KEY - OpenSSLAsymmetricKey|false php_cryptography_openssl_openssl_csr_get_public_key(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_GET_SUBJECT - array|false php_cryptography_openssl_openssl_csr_get_subject(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_NEW - OpenSSLCertificateSigningRequest|false php_cryptography_openssl_openssl_csr_new(array $distinguished_names, OpenSSLAsymmetricKey& $private_key, array $options = null, array $extra_attributes = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_SIGN - OpenSSLCertificate|false php_cryptography_openssl_openssl_csr_sign(OpenSSLCertificateSigningRequest|string $csr, OpenSSLCertificate|string|null $ca_certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $days, array $options, int $serial)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DECRYPT - string|false php_cryptography_openssl_openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", string $tag = null, string $aad = "")
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DH_COMPUTE_KEY - string|false php_cryptography_openssl_openssl_dh_compute_key(string $public_key, OpenSSLAsymmetricKey $private_key)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DIGEST - string|false php_cryptography_openssl_openssl_digest(string $data, string $digest_algo, bool $binary = false)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_ENCRYPT - string|false php_cryptography_openssl_openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", string& $tag, string $aad, int $tag_length)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_ERROR_STRING - string|false php_cryptography_openssl_openssl_error_string()
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_FREE_KEY - void php_cryptography_openssl_openssl_free_key(OpenSSLAsymmetricKey $key)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CERT_LOCATIONS - array php_cryptography_openssl_openssl_get_cert_locations()
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CIPHER_METHODS - array php_cryptography_openssl_openssl_get_cipher_methods(bool $aliases = false)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CURVE_NAMES - array|false php_cryptography_openssl_openssl_get_curve_names()
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_MD_METHODS - array php_cryptography_openssl_openssl_get_md_methods(bool $aliases = false)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_PRIVATEKEY - OpenSSLAsymmetricKey|false php_cryptography_openssl_openssl_get_privatekey(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_PUBLICKEY - OpenSSLAsymmetricKey|false php_cryptography_openssl_openssl_get_publickey(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_OPEN - bool php_cryptography_openssl_openssl_open(string $data, string& $output, string $encrypted_key, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $cipher_algo, string $iv = null)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PBKDF2 - string|false php_cryptography_openssl_openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1")
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_EXPORT_TO_FILE - bool php_cryptography_openssl_openssl_pkcs12_export_to_file(OpenSSLCertificate|string $x509, string $output_filename, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase, array $options = array())
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_EXPORT - bool php_cryptography_openssl_openssl_pkcs12_export(OpenSSLCertificate|string $x509, string& $output, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase, array $options = array())
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_READ - bool php_cryptography_openssl_openssl_pkcs12_read(string $pkcs12, array& $certificates, string $passphrase)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_DECRYPT - bool php_cryptography_openssl_openssl_pkcs7_decrypt(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_ENCRYPT - bool php_cryptography_openssl_openssl_pkcs7_encrypt(string $input_filename, string $output_filename, OpenSSLCertificate|array|string $certificate, array $headers, int $flags = 0, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_READ - bool php_cryptography_openssl_openssl_pkcs7_read(string $data, array& $certificates)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_SIGN - bool php_cryptography_openssl_openssl_pkcs7_sign(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, array $headers, int $flags, string $untrusted_certificates_filename)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_VERIFY - bool|int php_cryptography_openssl_openssl_pkcs7_verify(string $input_filename, int $flags, string $signers_certificates_filename = null, array $ca_info = array(), string $untrusted_certificates_filename = null, string $content = null, string $output_filename = null)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_DERIVE - string|false php_cryptography_openssl_openssl_pkey_derive(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $key_length = 0)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_EXPORT_TO_FILE - bool php_cryptography_openssl_openssl_pkey_export_to_file(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key, string $output_filename, string $passphrase = null, array $options = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_EXPORT - bool php_cryptography_openssl_openssl_pkey_export(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key, string& $output, string $passphrase = null, array $options = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_FREE - void php_cryptography_openssl_openssl_pkey_free(OpenSSLAsymmetricKey $key)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_DETAILS - array|false php_cryptography_openssl_openssl_pkey_get_details(OpenSSLAsymmetricKey $key)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_PRIVATE - OpenSSLAsymmetricKey|false php_cryptography_openssl_openssl_pkey_get_private(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_PUBLIC - OpenSSLAsymmetricKey|false php_cryptography_openssl_openssl_pkey_get_public(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_NEW - OpenSSLAsymmetricKey|false php_cryptography_openssl_openssl_pkey_new(array $options = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PRIVATE_DECRYPT - bool php_cryptography_openssl_openssl_private_decrypt(string $data, string& $decrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $padding = OPENSSL_PKCS1_PADDING)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PRIVATE_ENCRYPT - bool php_cryptography_openssl_openssl_private_encrypt(string $data, string& $encrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $padding = OPENSSL_PKCS1_PADDING)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PUBLIC_DECRYPT - bool php_cryptography_openssl_openssl_public_decrypt(string $data, string& $decrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, int $padding = OPENSSL_PKCS1_PADDING)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PUBLIC_ENCRYPT - bool php_cryptography_openssl_openssl_public_encrypt(string $data, string& $encrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, int $padding = OPENSSL_PKCS1_PADDING)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_RANDOM_PSEUDO_BYTES - string php_cryptography_openssl_openssl_random_pseudo_bytes(int $length, bool& $strong_result)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SEAL - int|false php_cryptography_openssl_openssl_seal(string $data, string& $sealed_data, array& $encrypted_keys, array $public_key, string $cipher_algo, string& $iv)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SIGN - bool php_cryptography_openssl_openssl_sign(string $data, string& $signature, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_EXPORT_CHALLENGE - string|false php_cryptography_openssl_openssl_spki_export_challenge(string $spki)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_EXPORT - string|false php_cryptography_openssl_openssl_spki_export(string $spki)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_NEW - string|false php_cryptography_openssl_openssl_spki_new(OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = OPENSSL_ALGO_MD5)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_VERIFY - bool php_cryptography_openssl_openssl_spki_verify(string $spki)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_VERIFY - int|false php_cryptography_openssl_openssl_verify(string $data, string $signature, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_CHECK_PRIVATE_KEY - bool php_cryptography_openssl_openssl_x509_check_private_key(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_CHECKPURPOSE - bool|int php_cryptography_openssl_openssl_x509_checkpurpose(OpenSSLCertificate|string $certificate, int $purpose, array $ca_info = array(), string $untrusted_certificates_file = null)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_EXPORT_TO_FILE - bool php_cryptography_openssl_openssl_x509_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_EXPORT - bool php_cryptography_openssl_openssl_x509_export(OpenSSLCertificate|string $certificate, string& $output, bool $no_text = true)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_FINGERPRINT - string|false php_cryptography_openssl_openssl_x509_fingerprint(OpenSSLCertificate|string $certificate, string $digest_algo = "sha1", bool $binary = false)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_FREE - void php_cryptography_openssl_openssl_x509_free(OpenSSLCertificate $certificate)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_PARSE - array|false php_cryptography_openssl_openssl_x509_parse(OpenSSLCertificate|string $certificate, bool $short_names = true)
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_READ - OpenSSLCertificate|false php_cryptography_openssl_openssl_x509_read(OpenSSLCertificate|string $certificate)
// OFFLINE | PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_VERIFY - int php_cryptography_openssl_openssl_x509_verify(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)
// PHP_CRYPTOGRAPHY_OPENSSL - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// NOT_BUNDLED (In order to use the OpenSSL functions you need to install the > OpenSSL library. PHP 7.0 requires OpenSSL >= 0.9.8, < 1.2. PHP 7.1-8.0 requires OpenSSL >= 1.0.1, < 3.0. PHP >= 8.1 requires OpenSSL >= 1.0.2, < 4.0.)
// ============================== USING FUNCTIONS (64)
// OFFLINE | openssl_cipher_iv_length() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// OFFLINE | openssl_cipher_key_length() - PHP_8 >= PHP_8_2_0
// OFFLINE | openssl_cms_decrypt() - PHP_8
// OFFLINE | openssl_cms_encrypt() - PHP_8
// OFFLINE | openssl_cms_read() - PHP_8
// OFFLINE | openssl_cms_sign() - PHP_8
// OFFLINE | openssl_cms_verify() - PHP_8
// openssl_csr_export_to_file() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_csr_export() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_csr_get_public_key() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | openssl_csr_get_subject() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// openssl_csr_new() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_csr_sign() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_decrypt() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | openssl_dh_compute_key() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | openssl_digest() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | openssl_encrypt() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// openssl_error_string() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_free_key() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_get_cert_locations() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | openssl_get_cipher_methods() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | openssl_get_curve_names() - PHP_7 >= PHP_7_1_0, PHP_8
// OFFLINE | openssl_get_md_methods() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// openssl_get_privatekey() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// openssl_get_publickey() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// openssl_open() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_pbkdf2() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | openssl_pkcs12_export_to_file() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// OFFLINE | openssl_pkcs12_export() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// OFFLINE | openssl_pkcs12_read() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// openssl_pkcs7_decrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_pkcs7_encrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_pkcs7_read() - PHP_7 >= PHP_7_2_0, PHP_8
// openssl_pkcs7_sign() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_pkcs7_verify() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_pkey_derive() - PHP_7 >= PHP_7_3_0, PHP_8
// openssl_pkey_export_to_file() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_pkey_export() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_pkey_free() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_pkey_get_details() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// openssl_pkey_get_private() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_pkey_get_public() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_pkey_new() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_private_decrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_private_encrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_public_decrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_public_encrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_random_pseudo_bytes() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// openssl_seal() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// openssl_sign() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_spki_export_challenge() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | openssl_spki_export() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | openssl_spki_new() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | openssl_spki_verify() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// openssl_verify() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// openssl_x509_check_private_key() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_x509_checkpurpose() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_x509_export_to_file() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// openssl_x509_export() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_x509_fingerprint() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// openssl_x509_free() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_x509_parse() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// openssl_x509_read() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// OFFLINE | openssl_x509_verify() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (10)
// int
// false
// string
// bool
// OFFLINE | OpenSSLCertificate - PHP_8
// OFFLINE | OpenSSLAsymmetricKey - PHP_8
// array
// null
// OFFLINE | OpenSSLCertificateSigningRequest - PHP_8
// void
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//    PHP_CRYPTOGRAPHY_OPENSSL    
// ============================== ABOUT
// PHP Manual / Function Reference / Cryptography Extensions / OpenSSL
// URL: https://www.php.net/manual/en/book.openssl.php
// ============================== DESCRIPTION
// OPENSSL
// 
// OPENSSL - BEGIN
// OpenSSL
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// KEY_CERTIFICATE_PARAMETERS
// CERTIFICATE_VERIFICATION
// OPENSSL_FUNCTIONS
// THE_OPENSSLCERTIFICATE_CLASS
// THE_OPENSSLCERTIFICATESIGNINGREQUEST_CLASS
// THE_OPENSSLASYMMETRICKEY_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// This extension binds functions of > OpenSSL library for symmetric and asymmetric encryption and decryption, PBKDF2, PKCS7, PKCS12, X509 and other crypto operations. In addition to that it provides implementation of TLS streams.
// OpenSSL offers many features that this module currently doesn't support. Some of these may be added in the future.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/intro.openssl.php
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
// In order to use the OpenSSL functions you need to install the > OpenSSL library. PHP 7.0 requires OpenSSL >= 0.9.8, < 1.2. PHP 7.1-8.0 requires OpenSSL >= 1.0.1, < 3.0. PHP >= 8.1 requires OpenSSL >= 1.0.2, < 4.0.
// Warning: You are strongly encouraged to use a maintained OpenSSL version, otherwise your web server could be vulnerable to attack.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// To use PHP's OpenSSL support you must also compile PHP --with-openssl[=DIR].
// The OpenSSL library also has additional requirements for normal operation at run-time. Most notably, OpenSSL requires access to a random or pseudo-random number generator; on most Unix and Unix-like platforms (including Linux), this means that it must have access to a /dev/urandom or /dev/random device.
// The configure option --with-system-ciphers is available which causes PHP to use the system cipher list instead of a hard-coded default.
//  Note: Note to Win32 Users:
//  In order for this extension to work, there are DLL files that must be available to the Windows system PATH. For information on how to do this, see the FAQ entitled "How do I add my PHP directory to the PATH on Windows". Although copying DLL files from the PHP folder into the Windows system directory also works (because the system directory is by default in the system's PATH), this is not recommended. This extension requires the following files to be in the PATH: libeay32.dll, or, as of OpenSSL 1.1, libcrypto-*.dll
//  Additionally, if you are planning to use the key generation and certificate signing functions, you will need to install a valid openssl.cnf file on your system. We include a sample configuration file in our win32 binary distributions, in the extras/ssl directory.
//  PHP will search for the openssl.cnf using the following logic:
//  * the OPENSSL_CONF environmental variable, if set, will be used as the path (including filename) of the configuration file.
//  * the SSLEAY_CONF environmental variable, if set, will be used as the path (including filename) of the configuration file.
//  * The file openssl.cnf will be assumed to be found in the default certificate area, as configured at the time that the openssl DLL was compiled. This is usually means that the default filename is C:\Program Files\Common Files\SSL\openssl.cnf (x64) or C:\Program Files (x86)\Common Files\SSL\openssl.cnf (x86), or, prior to PHP 7.4.0, C:\usr\local\ssl\openssl.cnf.
//  In your installation, you need to decide whether to install the configuration file in the default path or whether to install it someplace else and use environmental variables (possibly on a per-virtual-host basis) to locate the configuration file. Note that it is possible to override the default path from the script using the options of the functions that require a configuration file.
//  Caution: Ensure that non-privileged users are not allowed to modify openssl.cnf.
// 
// Changelog
// Version - Description
// 7.4.0   - The OpenSSL default config path has been changed from C:\usr\local\ssl to C:\Program Files\Common Files\SSL and C:\Program Files (x86)\Common Files\SSL, respectively.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// openssl Configure Options
// Name           | Default | Changeable     | Changelog
// openssl.cafile | ""      | PHP_INI_PERDIR |
// openssl.capath | ""      | PHP_INI_PERDIR |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// openssl.cafile string - Location of Certificate Authority file on local filesystem which should be used with the verify_peer context option to authenticate the identity of the remote peer.
// openssl.capath string - If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory.
// See also the SSL stream context options.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// Prior to PHP 8.0.0, there were 3 resource types defined in the OpenSSL module:
// * OpenSSL key
// * OpenSSL X.509
// * OpenSSL X.509 CSR
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// PURPOSE_CHECKING_FLAGS
// PADDING_FLAGS_FOR_ASYMMETRIC_ENCRYPTION
// KEY_TYPES
// PKCS7_FLAGS_CONSTANTS
// CMS_FLAGS_CONSTANTS
// SIGNATURE_ALGORITHMS
// CIPHERS
// VERSION_CONSTANTS
// SERVER_NAME_INDICATION_CONSTANTS
// OTHER_CONSTANTS
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// PURPOSE_CHECKING_FLAGS - BEGIN
// Purpose checking flags
// 
// X509_PURPOSE_SSL_CLIENT (int)    -
// X509_PURPOSE_SSL_SERVER (int)    -
// X509_PURPOSE_NS_SSL_SERVER (int) -
// X509_PURPOSE_SMIME_SIGN (int)    -
// X509_PURPOSE_SMIME_ENCRYPT (int) -
// X509_PURPOSE_CRL_SIGN (int)      -
// X509_PURPOSE_ANY (int)           -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.purpose-check.php
// PURPOSE_CHECKING_FLAGS - END
// 
// PADDING_FLAGS_FOR_ASYMMETRIC_ENCRYPTION - BEGIN
// Padding flags for asymmetric encryption
// 
// OPENSSL_PKCS1_PADDING (int)      -
// OPENSSL_SSLV23_PADDING (int)     -
// OPENSSL_NO_PADDING (int)         -
// OPENSSL_PKCS1_OAEP_PADDING (int) -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.padding.php
// PADDING_FLAGS_FOR_ASYMMETRIC_ENCRYPTION - END
// 
// KEY_TYPES - BEGIN
// Key types
// 
// OPENSSL_KEYTYPE_RSA (int) -
// OPENSSL_KEYTYPE_DSA (int) -
// OPENSSL_KEYTYPE_DH (int)  -
// OPENSSL_KEYTYPE_EC (int)  - This constant is only available when PHP is compiled with OpenSSL 0.9.8+.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.key-types.php
// KEY_TYPES - END
// 
// PKCS7_FLAGS_CONSTANTS - BEGIN
// PKCS7 Flags/Constants
// 
// The S/MIME functions make use of flags which are specified using a bitfield which can include one or more of the following values:
// 
// PKCS7 CONSTANTS
// Constant            - Description
// PKCS7_TEXT          - Adds text/plain content type headers to encrypted/signed message. If decrypting or verifying, it strips those headers from the output - if the decrypted or verified message is not of MIME type text/plain then an error will occur.
// PKCS7_BINARY        - Normally the input message is converted to "canonical" format which is effectively using CR and LF as end of line: as required by the S/MIME specification. When this option is present, no translation occurs. This is useful when handling binary data which may not be in MIME format.
// PKCS7_NOINTERN      - When verifying a message, certificates (if any) included in the message are normally searched for the signing certificate. With this option only the certificates specified in the extracerts parameter of openssl_pkcs7_verify() are used. The supplied certificates can still be used as untrusted CAs however.
// PKCS7_NOVERIFY      - Do not verify the signers certificate of a signed message.
// PKCS7_NOCHAIN       - Do not chain verification of signers certificates: that is don't use the certificates in the signed message as untrusted CAs.
// PKCS7_NOCERTS       - When signing a message the signer's certificate is normally included - with this option it is excluded. This will reduce the size of the signed message but the verifier must have a copy of the signers certificate available locally (passed using the extracerts to openssl_pkcs7_verify() for example).
// PKCS7_NOATTR        - Normally when a message is signed, a set of attributes are included which include the signing time and the supported symmetric algorithms. With this option they are not included.
// PKCS7_DETACHED      - When signing a message, use cleartext signing with the MIME type "multipart/signed". This is the default if you do not specify any flags to openssl_pkcs7_sign(). If you turn this option off, the message will be signed using opaque signing, which is more resistant to translation by mail relays but cannot be read by mail agents that do not support S/MIME.
// PKCS7_NOSIGS        - Don't try and verify the signatures on a message
// PKCS7_NOOLDMIMETYPE - Available as of PHP 8.3.0. Sets the content-type to application/pkcs7-mime instead of application/x-pkcs7-mime to encrypt a message.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.pkcs7.flags.php
// PKCS7_FLAGS_CONSTANTS - END
// 
// CMS_FLAGS_CONSTANTS - BEGIN
// CMS Flags/Constants
// 
// The CMS functions make use of flags which are specified using a bitfield which can include one or more of the following values:
// 
// CMS CONSTANTS
// Constant                - Description
// OPENSSL_CMS_TEXT        - Adds text/plain content type headers to encrypted/signed message. If decrypting or verifying, it strips those headers from the output - if the decrypted or verified message is not of MIME type text/plain then an error will occur.
// OPENSSL_CMS_BINARY      - Normally the input message is converted to "canonical" format which is effectively using CR and LF as end of line: as required by the CMS specification. When this option is present, no translation occurs. This is useful when handling binary data which may not be in CMS format.
// OPENSSL_CMS_NOINTERN    - When verifying a message, certificates (if any) included in the message are normally searched for the signing certificate. With this option only the certificates specified in the untrusted_certificates_filename parameter of openssl_cms_verify() are used. The supplied certificates can still be used as untrusted CAs however.
// OPENSSL_CMS_NOVERIFY    - Do not verify the signers certificate of a signed message.
// OPENSSL_CMS_NOCERTS     - When signing a message the signer's certificate is normally included - with this option it is excluded. This will reduce the size of the signed message but the verifier must have a copy of the signers certificate available locally (passed using the untrusted_certificates_filename to openssl_cms_verify() for example).
// OPENSSL_CMS_NOATTR      - Normally when a message is signed, a set of attributes are included which include the signing time and the supported symmetric algorithms. With this option they are not included.
// OPENSSL_CMS_DETACHED    - When signing a message, use cleartext signing with the MIME type "multipart/signed". This is the default if you do not specify any flags to openssl_cms_sign(). If you turn this option off, the message will be signed using opaque signing, which is more resistant to translation by mail relays but cannot be read by mail agents that do not support S/MIME.
// OPENSSL_CMS_NOSIGS      - Don't try and verify the signatures on a message
// OPENSSL_CMS_OLDMIMETYPE - Available as of PHP 8.3.0. Sets the content-type to application/x-pkcs7-mime instead of application/pkcs7-mime to encrypt a message.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.cms.flags.php
// CMS_FLAGS_CONSTANTS - END
// 
// SIGNATURE_ALGORITHMS - BEGIN
// Signature Algorithms
// 
// OPENSSL_ALGO_DSS1 (int)   -
// OPENSSL_ALGO_SHA1 (int)   - Used as default algorithm by openssl_sign() and openssl_verify().
// OPENSSL_ALGO_SHA224 (int) -
// OPENSSL_ALGO_SHA256 (int) -
// OPENSSL_ALGO_SHA384 (int) -
// OPENSSL_ALGO_SHA512 (int) -
// OPENSSL_ALGO_RMD160 (int) -
// OPENSSL_ALGO_MD5 (int)    -
// OPENSSL_ALGO_MD4 (int)    -
// OPENSSL_ALGO_MD2 (int)    - This constant is only available if PHP is compiled with MD2 support. This requires passing in the -DHAVE_OPENSSL_MD2_H CFLAG when compiling PHP, and enable-md2 when compiling OpenSSL 1.0.0+.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.signature-algos.php
// SIGNATURE_ALGORITHMS - END
// 
// CIPHERS - BEGIN
// Ciphers
// 
// OPENSSL_CIPHER_RC2_40 (int)      -
// OPENSSL_CIPHER_RC2_128 (int)     -
// OPENSSL_CIPHER_RC2_64 (int)      -
// OPENSSL_CIPHER_DES (int)         -
// OPENSSL_CIPHER_3DES (int)        -
// OPENSSL_CIPHER_AES_128_CBC (int) -
// OPENSSL_CIPHER_AES_192_CBC (int) -
// OPENSSL_CIPHER_AES_256_CBC (int) -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.ciphers.php
// CIPHERS - END
// 
// VERSION_CONSTANTS - BEGIN
// Version constants
// 
// OPENSSL_VERSION_TEXT (string) -
// OPENSSL_VERSION_NUMBER (int)  -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.constversion.php
// VERSION_CONSTANTS - END
// 
// SERVER_NAME_INDICATION_CONSTANTS - BEGIN
// Server Name Indication constants
// 
// OPENSSL_TLSEXT_SERVER_NAME (string) - Whether SNI support is available or not.
// Note: This constant requires PHP to be built with OpenSSL 0.9.8j or greater.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.constsni.php
// SERVER_NAME_INDICATION_CONSTANTS - END
// 
// OTHER_CONSTANTS - BEGIN
// Other Constants
// 
// OPENSSL_RAW_DATA (bool)      - If OPENSSL_RAW_DATA is set in the openssl_encrypt() or openssl_decrypt(), the returned data is returned as-is. When it is not specified, Base64 encoded data is returned to the caller.
// OPENSSL_ZERO_PADDING (bool)  - By default encryption operations are padded using standard block padding and the padding is checked and removed when decrypting. If OPENSSL_ZERO_PADDING is set in the openssl_encrypt() or openssl_decrypt() options then no padding is performed, the total amount of data encrypted or decrypted must then be a multiple of the block size or an error will occur.
// OPENSSL_ENCODING_SMIME (int) - Indicates that encoding is S/MIME.
// OPENSSL_ENCODING_DER (int)   - Indicates that encoding is DER (Distinguished Encoding Rules).
// OPENSSL_ENCODING_PEM (int)   - Indicates that encoding is PEM (Privacy-Enhanced Mail).
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.constants.other.php
// OTHER_CONSTANTS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.constants.php
// PREDEFINED_CONSTANTS - END
// 
// KEY_CERTIFICATE_PARAMETERS - BEGIN
// Key/Certificate parameters
// 
// Quite a few of the openssl functions require a key or a certificate parameter. Following methods may be used to get them:
// * Certificates
//  1. An OpenSSLCertificate instance (or prior to PHP 8.0.0, a resource of type OpenSSL X.509) returned from openssl_x509_read()
//  2. A string having the format file://path/to/cert.pem; the named file must contain a PEM encoded certificate
//  3. A string containing the content of a certificate, PEM encoded, may start with -----BEGIN CERTIFICATE-----
// * Certificate Signing Requests (CSRs)
//  1. An OpenSSLCertificateSigningRequest instance (or prior to PHP 8.0.0, a resource of type OpenSSL X.509 CSR) returned from openssl_csr_new()
//  2. A string having the format file://path/to/csr.pem; the named file must contain a PEM encoded CSR
//  3. A string containing the content of a CSR, PEM encoded, may start with -----BEGIN CERTIFICATE REQUEST-----
// * Public/Private Keys
//  1. An OpenSSLAsymmetricKey instance (or prior to PHP 8.0.0, a resource of type OpenSSL key) returned from openssl_get_publickey() or openssl_get_privatekey()
//  2. For public keys only: an OpenSSLCertificate instance (or prior to PHP 8.0.0, a resource of type OpenSSL X.509)
//  3. A string having the format file://path/to/file.pem - the named file must contain a PEM encoded certificate/private key (it may contain both)
//  4. A string containing the content of a certificate/key, PEM encoded, may start with -----BEGIN PUBLIC KEY-----
//  5. For private keys, you may also use the syntax array($key, $passphrase) where $key represents a key specified using the file:// or textual content notation above, and $passphrase represents a string containing the passphrase for that private key
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.certparams.php
// KEY_CERTIFICATE_PARAMETERS - END
// 
// CERTIFICATE_VERIFICATION - BEGIN
// Certificate Verification
// 
// When calling a function that will verify a signature/certificate, the ca_info parameter is an array containing file and directory names that specify the locations of trusted CA files. If a directory is specified, then it must be a correctly formed hashed directory as the openssl command would use.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/openssl.cert.verification.php
// CERTIFICATE_VERIFICATION - END
// 
// OPENSSL_FUNCTIONS - BEGIN
// OpenSSL Functions
// 
// Table of Contents
// * openssl_cipher_iv_length       - Gets the cipher iv length
// * openssl_cipher_key_length      - Gets the cipher key length
// * openssl_cms_decrypt            - Decrypt a CMS message
// * openssl_cms_encrypt            - Encrypt a CMS message
// * openssl_cms_read               - Export the CMS file to an array of PEM certificates
// * openssl_cms_sign               - Sign a file
// * openssl_cms_verify             - Verify a CMS signature
// * openssl_csr_export_to_file     - Exports a CSR to a file
// * openssl_csr_export             - Exports a CSR as a string
// * openssl_csr_get_public_key     - Returns the public key of a CSR
// * openssl_csr_get_subject        - Returns the subject of a CSR
// * openssl_csr_new                - Generates a CSR
// * openssl_csr_sign               - Sign a CSR with another certificate (or itself) and generate a certificate
// * openssl_decrypt                - Decrypts data
// * openssl_dh_compute_key         - Computes shared secret for public value of remote DH public key and local DH key
// * openssl_digest                 - Computes a digest
// * openssl_encrypt                - Encrypts data
// * openssl_error_string           - Return openSSL error message
// * openssl_free_key               - Free key resource
// * openssl_get_cert_locations     - Retrieve the available certificate locations
// * openssl_get_cipher_methods     - Gets available cipher methods
// * openssl_get_curve_names        - Gets list of available curve names for ECC
// * openssl_get_md_methods         - Gets available digest methods
// * openssl_get_privatekey         - Alias of openssl_pkey_get_private
// * openssl_get_publickey          - Alias of openssl_pkey_get_public
// * openssl_open                   - Open sealed data
// * openssl_pbkdf2                 - Generates a PKCS5 v2 PBKDF2 string
// * openssl_pkcs12_export_to_file  - Exports a PKCS#12 Compatible Certificate Store File
// * openssl_pkcs12_export          - Exports a PKCS#12 Compatible Certificate Store File to variable
// * openssl_pkcs12_read            - Parse a PKCS#12 Certificate Store into an array
// * openssl_pkcs7_decrypt          - Decrypts an S/MIME encrypted message
// * openssl_pkcs7_encrypt          - Encrypt an S/MIME message
// * openssl_pkcs7_read             - Export the PKCS7 file to an array of PEM certificates
// * openssl_pkcs7_sign             - Sign an S/MIME message
// * openssl_pkcs7_verify           - Verifies the signature of an S/MIME signed message
// * openssl_pkey_derive            - Computes shared secret for public value of remote and local DH or ECDH key
// * openssl_pkey_export_to_file    - Gets an exportable representation of a key into a file
// * openssl_pkey_export            - Gets an exportable representation of a key into a string
// * openssl_pkey_free              - Frees a private key
// * openssl_pkey_get_details       - Returns an array with the key details
// * openssl_pkey_get_private       - Get a private key
// * openssl_pkey_get_public        - Extract public key from certificate and prepare it for use
// * openssl_pkey_new               - Generates a new private key
// * openssl_private_decrypt        - Decrypts data with private key
// * openssl_private_encrypt        - Encrypts data with private key
// * openssl_public_decrypt         - Decrypts data with public key
// * openssl_public_encrypt         - Encrypts data with public key
// * openssl_random_pseudo_bytes    - Generate a pseudo-random string of bytes
// * openssl_seal                   - Seal (encrypt) data
// * openssl_sign                   - Generate signature
// * openssl_spki_export_challenge  - Exports the challenge associated with a signed public key and challenge
// * openssl_spki_export            - Exports a valid PEM formatted public key signed public key and challenge
// * openssl_spki_new               - Generate a new signed public key and challenge
// * openssl_spki_verify            - Verifies a signed public key and challenge
// * openssl_verify                 - Verify signature
// * openssl_x509_check_private_key - Checks if a private key corresponds to a certificate
// * openssl_x509_checkpurpose      - Verifies if a certificate can be used for a particular purpose
// * openssl_x509_export_to_file    - Exports a certificate to file
// * openssl_x509_export            - Exports a certificate as a string
// * openssl_x509_fingerprint       - Calculates the fingerprint, or digest, of a given X.509 certificate
// * openssl_x509_free              - Free certificate resource
// * openssl_x509_parse             - Parse an X509 certificate and return the information as an array
// * openssl_x509_read              - Parse an X.509 certificate and return an object for it
// * openssl_x509_verify            - Verifies digital signature of x509 certificate against a public key
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/ref.openssl.php
// OPENSSL_FUNCTIONS - END
// 
// THE_OPENSSLCERTIFICATE_CLASS - BEGIN
// The OpenSSLCertificate class
// 
// PHP_8
// 
// Introduction
// A fully opaque class which replaces OpenSSL X.509 resources as of PHP 8.0.0.
// 
// Class synopsis
// [code]
// final class OpenSSLCertificate {
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/class.opensslcertificate.php
// THE_OPENSSLCERTIFICATE_CLASS - END
// 
// THE_OPENSSLCERTIFICATESIGNINGREQUEST_CLASS - BEGIN
// The OpenSSLCertificateSigningRequest class
// 
// PHP_8
// 
// Introduction
// A fully opaque class which replaces OpenSSL X.509 CSR resources as of PHP 8.0.0.
// 
// Class synopsis
// [code]
// final class OpenSSLCertificateSigningRequest {
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/class.opensslcertificatesigningrequest.php
// THE_OPENSSLCERTIFICATESIGNINGREQUEST_CLASS - END
// 
// THE_OPENSSLASYMMETRICKEY_CLASS - BEGIN
// The OpenSSLAsymmetricKey class
// 
// PHP_8
// 
// Introduction
// A fully opaque class which replaces OpenSSL key resources as of PHP 8.0.0.
// 
// Class synopsis
// [code]
// final class OpenSSLAsymmetricKey {
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/class.opensslasymmetrickey.php
// THE_OPENSSLASYMMETRICKEY_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/book.openssl.php
// OPENSSL - END
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CIPHER_IV_LENGTH
// ============================== OFFLINE
// ============================== ABOUT
// Gets the cipher iv length.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cipher_iv_length() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cipher_iv_length($cipher_algo)
{
$return_openssl_cipher_iv_length = false;

// ========== OPENSSL_CIPHER_IV_LENGTH - BEGIN
// ===== ABOUT
// Gets the cipher iv length
// ===== DESCRIPTION
// Gets the cipher initialization vector (iv) length.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ===== SYNTAX
// openssl_cipher_iv_length(string $cipher_algo): int|false
// ===== CODE
$return_openssl_cipher_iv_length = openssl_cipher_iv_length(

$cipher_algo // string cipher_algo - The cipher method, see openssl_get_cipher_methods() for a list of potential values.

); // Return Values
// Returns the cipher length on success, or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error when the cipher algorithm is unknown.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_cipher_iv_length() example
// [php]
// $method = 'AES-128-CBC';
// $ivlen = openssl_cipher_iv_length($method);
// 
// echo $ivlen;
// [/php]
// The above example will output something similar to:
// [result]
// 16
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-cipher-iv-length.php
// ========== OPENSSL_CIPHER_IV_LENGTH - END

// SYNTAX:
// int|false openssl_cipher_iv_length(string $cipher_algo)

return $return_openssl_cipher_iv_length; // int|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CIPHER_IV_LENGTH
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CIPHER_KEY_LENGTH
// ============================== OFFLINE
// ============================== ABOUT
// Gets the cipher key length.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cipher_key_length() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cipher_key_length($cipher_algo)
{
$return_openssl_cipher_key_length = false;

// ========== OPENSSL_CIPHER_KEY_LENGTH - BEGIN
// ===== ABOUT
// Gets the cipher key length
// ===== DESCRIPTION
// Gets the cipher key length.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// openssl_cipher_key_length(string $cipher_algo): int|false
// ===== CODE
$return_openssl_cipher_key_length = openssl_cipher_key_length(

$cipher_algo // string cipher_algo - The cipher method, see openssl_get_cipher_methods() for a list of potential values.

); // Return Values
// Returns the cipher length on success, or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error when the cipher algorithm is unknown.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_cipher_key_length() example
// [php]
// $method = 'AES-128-CBC';
// 
// var_dump(openssl_cipher_key_length($method));
// [/php]
The above example will output something similar to:
// [result]
// int(16)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-cipher-key-length.php
// ========== OPENSSL_CIPHER_KEY_LENGTH - END

// SYNTAX:
// int|false openssl_cipher_key_length(string $cipher_algo)

return $return_openssl_cipher_key_length; // int|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CIPHER_KEY_LENGTH
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_DECRYPT
// ============================== OFFLINE
// ============================== ABOUT
// Decrypt a CMS message.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cms_decrypt() - PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_ENCODING_SMIME - openssl_cms_decrypt()
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cms_decrypt($input_filename, $output_filename, $certificate, $private_key = null, $encoding = OPENSSL_ENCODING_SMIME)
{
$return_openssl_cms_decrypt = false;

// ========== OPENSSL_CMS_DECRYPT - BEGIN
// ===== ABOUT
// Decrypt a CMS message
// ===== DESCRIPTION
// Decrypts a CMS message.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// openssl_cms_decrypt(
//    string $input_filename,
//    string $output_filename,
//    OpenSSLCertificate|string $certificate,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key = null,
//    int $encoding = OPENSSL_ENCODING_SMIME
// ): bool
// ===== CODE
$return_openssl_cms_decrypt = openssl_cms_decrypt(

$input_filename, // string input_filename - The name of a file containing encrypted content.

$output_filename, // string output_filename - The name of the file to deposit the decrypted content.

$certificate, // OpenSSLCertificate|string certificate - The name of the file containing a certificate of the recipient.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null private_key - The name of the file containing a PKCS#8 key.

$encoding // int encoding - The encoding of the input file. One of OPENSSL_ENCODING_SMIME, OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/function.openssl-cms-decrypt.php
// ========== OPENSSL_CMS_DECRYPT - END

// SYNTAX:
// bool openssl_cms_decrypt(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key = null, int $encoding = OPENSSL_ENCODING_SMIME)

return $return_openssl_cms_decrypt; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_DECRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_ENCRYPT
// ============================== OFFLINE
// ============================== ABOUT
// Encrypt a CMS message.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cms_encrypt() - PHP_8
// ============================== USING CONSTANTS (2)
// OPENSSL_ENCODING_SMIME - openssl_cms_encrypt()
// OPENSSL_CIPHER_AES_128_CBC - openssl_cms_encrypt()
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cms_encrypt($input_filename, $output_filename, $certificate, $headers, $flags = 0, $encoding = OPENSSL_ENCODING_SMIME, $cipher_algo = OPENSSL_CIPHER_AES_128_CBC)
{
$return_openssl_cms_encrypt = false;

// ========== OPENSSL_CMS_ENCRYPT - BEGIN
// ===== ABOUT
// Encrypt a CMS message
// ===== DESCRIPTION
// This function encrypts content to one or more recipients, based on the certificates that are passed to it.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// openssl_cms_encrypt(
//    string $input_filename,
//    string $output_filename,
//    OpenSSLCertificate|array|string $certificate,
//    ?array $headers,
//    int $flags = 0,
//    int $encoding = OPENSSL_ENCODING_SMIME,
//    int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC
// ): bool
// ===== CODE
$return_openssl_cms_encrypt = openssl_cms_encrypt(

$input_filename, // string input_filename - The file to be encrypted.

$output_filename, // string output_filename - The output file.

$certificate, // OpenSSLCertificate|array|string certificate - Recipients to encrypt to.

$array, // ?array headers - Headers to include when S/MIME is used.

$flags, // int flags - Flags to be passed to CMS_sign.

$encoding, // int encoding - An encoding to output. One of OPENSSL_ENCODING_SMIME, OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM.

$cipher_algo // int cipher_algo - A cypher to use.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The default cipher algorithm (cipher_algo) is now AES-128-CBC (OPENSSL_CIPHER_AES_128_CBC). Previously, PKCS7/CMS was used (OPENSSL_CIPHER_RC2_40).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/function.openssl-cms-encrypt.php
// ========== OPENSSL_CMS_ENCRYPT - END

// SYNTAX:
// bool openssl_cms_encrypt(string $input_filename, string $output_filename, OpenSSLCertificate|array|string $certificate, array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC)

return $return_openssl_cms_encrypt; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_ENCRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_READ
// ============================== OFFLINE
// ============================== ABOUT
// Export the CMS file to an array of PEM certificates.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cms_read() - PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cms_read($input_filename, & $certificates)
{
$return_openssl_cms_read = false;

// ========== OPENSSL_CMS_READ - BEGIN
// ===== ABOUT
// Export the CMS file to an array of PEM certificates
// ===== DESCRIPTION
// Performs the exact analog to openssl_pkcs7_read().
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// openssl_cms_read(string $input_filename, array &$certificates): bool
// ===== CODE
$return_openssl_cms_read = openssl_cms_read(

// string input_filename

// array certificates

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-03)
// URL: https://www.php.net/manual/en/function.openssl-cms-read.php
// ========== OPENSSL_CMS_READ - END

// SYNTAX:
// bool openssl_cms_read(string $input_filename, array& $certificates)

return $return_openssl_cms_read; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_READ
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_SIGN
// ============================== OFFLINE
// ============================== ABOUT
// Sign a file.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cms_sign() - PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_ENCODING_SMIME - openssl_cms_sign()
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cms_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags = 0, $encoding = OPENSSL_ENCODING_SMIME, $untrusted_certificates_filename = null)
{
$return_openssl_cms_sign = false;

// ========== OPENSSL_CMS_SIGN - BEGIN
// ===== ABOUT
// Sign a file
// ===== DESCRIPTION
// This function signs a file with an X.509 certificate and key.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// openssl_cms_sign(
//    string $input_filename,
//    string $output_filename,
//    OpenSSLCertificate|string $certificate,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    ?array $headers,
//    int $flags = 0,
//    int $encoding = OPENSSL_ENCODING_SMIME,
//    ?string $untrusted_certificates_filename = null
// ): bool
// ===== CODE
$return_openssl_cms_sign = openssl_cms_sign(

$input_filename, // string input_filename - The name of the file to be signed.

$output_filename, // string output_filename - The name of the file to deposit the results.

$certificate, // OpenSSLCertificate|string certificate - The signing certificate. See Key/Certificate parameters for a list of valid values.
 
$private_key,// OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - The key associated with certificate. See Key/Certificate parameters for a list of valid values.

$headers, // ?array headers - An array of headers to be included in S/MIME output.

$flags, // int flags - Flags to be passed to cms_sign().

$encoding, // int encoding - The encoding of the output file. One of OPENSSL_ENCODING_SMIME, OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM.

$untrusted_certificates_filename // ?string untrusted_certificates_filename - Intermediate certificates to be included in the signature.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_cms_sign() example
// [php]
// 
// openssl_cms_sign('input.txt', 'output.txt', 'file://cert.pem', 'file://privkey.pem', null, OPENSSL_CMS_BINARY, OPENSSL_ENCODING_DER, 'chain.pem');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-cms-sign.php
// ========== OPENSSL_CMS_SIGN - END

// SYNTAX:
// bool openssl_cms_sign(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, string $untrusted_certificates_filename = null)

return $return_openssl_cms_sign; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_SIGN
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_VERIFY
// ============================== OFFLINE
// ============================== ABOUT
// Verify a CMS signature.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_cms_verify() - PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_ENCODING_SMIME - openssl_cms_verify()
// ============================== CODE
/*
function php_cryptography_openssl_openssl_cms_verify($input_filename, $flags = 0, $certificates = null, $ca_info = array(), $untrusted_certificates_filename = null, $content = null, $pk7 = null, $sigfile = null, $encoding = OPENSSL_ENCODING_SMIME)
{
$return_openssl_cms_verify = false;

// ========== OPENSSL_CMS_VERIFY - BEGIN
// ===== ABOUT
// Verify a CMS signature
// ===== DESCRIPTION
// This function verifies a CMS signature, either attached or detached, with the specified encoding.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// openssl_cms_verify(
//    string $input_filename,
//    int $flags = 0,
//    ?string $certificates = null,
//    array $ca_info = [],
//    ?string $untrusted_certificates_filename = null,
//    ?string $content = null,
//    ?string $pk7 = null,
//    ?string $sigfile = null,
//    int $encoding = OPENSSL_ENCODING_SMIME
// ): bool
// ===== CODE
$return_openssl_cms_verify = openssl_cms_verify(

$input_filename, // string input_filename - The input file.

$flags, // int flags - Flags to pass to cms_verify().

$certificates, // string certificates - A file with the signer certificate and optionally intermediate certificates.

$ca_info, // array ca_info - An array containing self-signed certificate authority certificates.

$untrusted_certificates_filename, // string untrusted_certificates_filename - A file containing additional intermediate certificates.

$content, // string content - A file pointing to the content when signatures are detached.

$pk7, // string pk7

$sigfile, // string sigfile - A file to save the signature to.

$encoding // int encoding - The encoding of the input file. One of OPENSSL_ENCODING_SMIME, OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-08)
// URL: https://www.php.net/manual/en/function.openssl-cms-verify.php
// ========== OPENSSL_CMS_VERIFY - END

// SYNTAX:
// bool openssl_cms_verify(string $input_filename, int $flags = 0, string $certificates = null, array $ca_info = array(), string $untrusted_certificates_filename = null, string $content = null, string $pk7 = null, string $sigfile = null, int $encoding = OPENSSL_ENCODING_SMIME)

return $return_openssl_cms_verify; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CMS_VERIFY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_EXPORT_TO_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Exports a CSR to a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_csr_export_to_file() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_csr_export_to_file($csr, $output_filename, $no_text)
{
$return_openssl_csr_export_to_file = false;

// ========== OPENSSL_CSR_EXPORT_TO_FILE - BEGIN
// ===== ABOUT
// Exports a CSR to a file
// ===== DESCRIPTION
// openssl_csr_export_to_file() takes the Certificate Signing Request represented by csr and saves it in PEM format into the file named by output_filename.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_csr_export_to_file(OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text = true): bool
// ===== CODE
$return_openssl_csr_export_to_file = openssl_csr_export_to_file(

$csr, // OpenSSLCertificateSigningRequest|string csr - See CSR parameters for a list of valid values.

$output_filename, // string output_filename - Path to the output file.

$no_text // bool no_text - The optional parameter notext affects the verbosity of the output; if it is false, then additional human-readable information is included in the output. The default value of notext is true.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - csr accepts an OpenSSLCertificateSigningRequest instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_csr_export_to_file() example
// [php]
// $subject = array(
//     "commonName" => "example.com",
// );
// $private_key = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// $csr = openssl_csr_new($subject, $private_key, array('digest_alg' => 'sha384') );
// openssl_pkey_export_to_file($private_key, 'example-priv.key');
// // Along with the subject, the CSR contains the public key corresponding to the private key
// openssl_csr_export_to_file($csr, 'example-csr.pem');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-csr-export-to-file.php
// ========== OPENSSL_CSR_EXPORT_TO_FILE - END

// SYNTAX:
// bool openssl_csr_export_to_file(OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text = true)

return $return_openssl_csr_export_to_file; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_EXPORT_TO_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_EXPORT
// ============================== PUBLIC
// ============================== ABOUT
// Exports a CSR as a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_csr_export() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_csr_export($csr, & $output, $no_text = true)
{
$return_openssl_csr_export = false;

// ========== OPENSSL_CSR_EXPORT - BEGIN
// ===== ABOUT
// Exports a CSR as a string
// ===== DESCRIPTION
// openssl_csr_export() takes the Certificate Signing Request represented by csr and stores it in PEM format in output, which is passed by reference.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_csr_export(OpenSSLCertificateSigningRequest|string $csr, string &$output, bool $no_text = true): bool
// ===== CODE
$return_openssl_csr_export = openssl_csr_export(

$csr, // OpenSSLCertificateSigningRequest|string csr - See CSR parameters for a list of valid values.

$output, // string output - on success, this string will contain the PEM encoded CSR

$no_text // bool no_text - The optional parameter notext affects the verbosity of the output; if it is false, then additional human-readable information is included in the output. The default value of notext is true.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - csr accepts an OpenSSLCertificateSigningRequest instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_csr_export() example
// [php]
// $subject = array(
//     "commonName" => "example.com",
// );
// $private_key = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// $configargs = array(
//     'digest_alg' => 'sha256WithRSAEncryption'
// );
// $csr = openssl_csr_new($subject, $private_key, $configargs);
// openssl_csr_export($csr, $csr_string);
// echo $csr_string;
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-csr-export.php
// ========== OPENSSL_CSR_EXPORT - END

// SYNTAX:
// bool openssl_csr_export(OpenSSLCertificateSigningRequest|string $csr, string& $output, bool $no_text = true)

return $return_openssl_csr_export; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_EXPORT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_GET_PUBLIC_KEY
// ============================== OFFLINE
// ============================== ABOUT
// Returns the public key of a CSR.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_csr_get_public_key() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_csr_get_public_key($csr, $short_names = true)
{
$return_openssl_csr_get_public_key = false;

// ========== OPENSSL_CSR_GET_PUBLIC_KEY - BEGIN
// ===== ABOUT
// Returns the public key of a CSR
// ===== DESCRIPTION
// openssl_csr_get_public_key() extracts the public key from csr and prepares it for use by other functions.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_csr_get_public_key(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): OpenSSLAsymmetricKey|false
// ===== CODE
$return_openssl_csr_get_public_key = openssl_csr_get_public_key(

$csr, // OpenSSLCertificateSigningRequest|string csr - See CSR parameters for a list of valid values.

$short_names // bool short_names - Warning: This parameter is ignored

); // Return Values
// Returns an OpenSSLAsymmetricKey on success, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was returned.
// 8.0.0   - csr accepts an OpenSSLCertificateSigningRequest instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_csr_get_public_key() example
// [php]
// $subject = array(
//     "commonName" => "example.com",
// );
// $private_key = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// $csr = openssl_csr_new($subject, $private_key, array('digest_alg' => 'sha256') );
// $public_key = openssl_csr_get_public_key($csr);
// $info = openssl_pkey_get_details($public_key);
// echo $info['key'];
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-csr-get-public-key.php
// ========== OPENSSL_CSR_GET_PUBLIC_KEY - END

// SYNTAX:
// OpenSSLAsymmetricKey|false openssl_csr_get_public_key(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true)

return $return_openssl_csr_get_public_key; // OpenSSLAsymmetricKey|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_GET_PUBLIC_KEY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_GET_SUBJECT
// ============================== OFFLINE
// ============================== ABOUT
// Returns the subject of a CSR.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_csr_get_subject() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_csr_get_subject($csr, $short_names = true)
{
$return_openssl_csr_get_subject = false;

// ========== OPENSSL_CSR_GET_SUBJECT - BEGIN
// ===== ABOUT
// Returns the subject of a CSR
// ===== DESCRIPTION
// openssl_csr_get_subject() returns subject distinguished name information encoded in the csr including fields commonName (CN), organizationName (O), countryName (C) etc.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_csr_get_subject(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): array|false
// ===== CODE
$return_openssl_csr_get_subject = openssl_csr_get_subject(

$csr, // OpenSSLCertificateSigningRequest|string csr - See CSR parameters for a list of valid values.

$short_names // bool short_names - shortnames controls how the data is indexed in the array - if shortnames is true (the default) then fields will be indexed with the short name form, otherwise, the long name form will be used - e.g.: CN is the shortname form of commonName.

); // Return Values
// Returns an associative array with subject description, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - csr accepts an OpenSSLCertificateSigningRequest instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_csr_get_subject() example
// [php]
// $subject = array(
//     "countryName" => "CA",
//     "stateOrProvinceName" => "Alberta",
//     "localityName" => "Calgary",
//     "organizationName" => "XYZ Widgets Inc",
//     "organizationalUnitName" => "PHP Documentation Team",
//     "commonName" => "Wez Furlong",
//     "emailAddress" => "wez@example.com",
// );
// $private_key = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// $configargs = array(
//     'digest_alg' => 'sha512WithRSAEncryption'
// );
// $csr = openssl_csr_new($subject, $privkey, $configargs);
// print_r(openssl_csr_get_subject($csr));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [C] => CA
//     [ST] => Alberta
//     [L] => Calgary
//     [O] => XYZ Widgets Inc
//     [OU] => PHP Documentation Team
//     [CN] => Wez Furlong
//     [emailAddress] => wez@example.com
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-csr-get-subject.php
// ========== OPENSSL_CSR_GET_SUBJECT - END

// SYNTAX:
// array|false openssl_csr_get_subject(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true)

return $return_openssl_csr_get_subject; // array|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_GET_SUBJECT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_NEW
// ============================== PUBLIC
// ============================== ABOUT
// Generates a CSR.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_csr_new() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_csr_new($distinguished_names, & $private_key, $options = null, $extra_attributes = null)
{
$return_openssl_csr_new = false;

// ========== OPENSSL_CSR_NEW - BEGIN
// ===== ABOUT
// Generates a CSR
// ===== DESCRIPTION
// openssl_csr_new() generates a new CSR based on the information provided by distinguished_names.
// Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_csr_new(
//    array $distinguished_names,
//    OpenSSLAsymmetricKey &$private_key,
//    ?array $options = null,
//    ?array $extra_attributes = null
// ): OpenSSLCertificateSigningRequest|false
// ===== CODE
$return_openssl_csr_new = openssl_csr_new(

$distinguished_names, // array distinguished_names - The Distinguished Name or subject fields to be used in the certificate.

$private_key, // OpenSSLAsymmetricKey private_key - private_key should be set to a private key that was previously generated by openssl_pkey_new() (or otherwise obtained from the other openssl_pkey family of functions). The corresponding public portion of the key will be used to sign the CSR.

$options, // array options - By default, the information in your system openssl.conf is used to initialize the request; you can specify a configuration file section by setting the config_section_section key of options. You can also specify an alternative openssl configuration file by setting the value of the config key to the path of the file you want to use. The following keys, if present in options behave as their equivalents in the openssl.conf, as listed in the table below.
// Configuration overrides
// options key        (type   | openssl.conf equivalent) - description
// digest_alg         (string | default_md)              - Digest method or signature hash, usually one of openssl_get_md_methods()
// x509_extensions    (string | x509_extensions)         - Selects which extensions should be used when creating an x509 certificate
// req_extensions     (string | req_extensions)          - Selects which extensions should be used when creating a CSR
// private_key_bits   (int    | default_bits)            - Specifies how many bits should be used to generate a private key
// private_key_type   (int    | none)                    - Specifies the type of private key to create. This can be one of OPENSSL_KEYTYPE_DSA, OPENSSL_KEYTYPE_DH, OPENSSL_KEYTYPE_RSA or OPENSSL_KEYTYPE_EC. The default value is OPENSSL_KEYTYPE_RSA.
// encrypt_key        (bool   | encrypt_key)             - Should an exported key (with passphrase) be encrypted?
// encrypt_key_cipher (int    | none)                    - One of cipher constants.
// curve_name         (string | none)                    - One of openssl_get_curve_names().
// config             (string | N/A)                     - Path to your own alternative openssl.conf file.

$extra_attributes // array extra_attributes - extra_attributes is used to specify additional configuration options for the CSR. Both distinguished_names and extra_attributes are associative arrays whose keys are converted to OIDs and applied to the relevant part of the request.

); // Return Values
// Returns the CSR or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLCertificateSigningRequest instance now; previously, a resource of type OpenSSL X.509 CSR was returned.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was accepted.
// 7.1.0   - options now also supports curve_name.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating a self-signed certificate
// [php]
// // for SSL server certificates the commonName is the domain name to be secured
// // for S/MIME email certificates the commonName is the owner of the email address
// // location and identification fields refer to the owner of domain or email subject to be secured
// $dn = array(
//     "countryName" => "GB",
//     "stateOrProvinceName" => "Somerset",
//     "localityName" => "Glastonbury",
//     "organizationName" => "The Brain Room Limited",
//     "organizationalUnitName" => "PHP Documentation Team",
//     "commonName" => "Wez Furlong",
//     "emailAddress" => "wez@example.com"
// );
// 
// // Generate a new private (and public) key pair
// $privkey = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// 
// // Generate a certificate signing request
// $csr = openssl_csr_new($dn, $privkey, array('digest_alg' => 'sha256'));
// 
// // Generate a self-signed cert, valid for 365 days
// $x509 = openssl_csr_sign($csr, null, $privkey, $days=365, array('digest_alg' => 'sha256'));
// 
// // Save your private key, CSR and self-signed cert for later use
// openssl_csr_export($csr, $csrout) and var_dump($csrout);
// openssl_x509_export($x509, $certout) and var_dump($certout);
// openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);
// 
// // Show any errors that occurred here
// while (($e = openssl_error_string()) !== false) {
//     echo $e . "\n";
// }
// [/php]
// [example]
// [/example]
// Example #2 Creating a self-signed ECC certificate (as of PHP 7.1.0)
// [php]
// $subject = array(
//     "commonName" => "docs.php.net",
// );
// 
// // Generate a new private (and public) key pair
// $private_key = openssl_pkey_new(array(
//     "private_key_type" => OPENSSL_KEYTYPE_EC,
//     "curve_name" => 'prime256v1',
// ));
// 
// // Generate a certificate signing request
// $csr = openssl_csr_new($subject, $private_key, array('digest_alg' => 'sha384'));
// 
// // Generate self-signed EC cert
// $x509 = openssl_csr_sign($csr, null, $private_key, $days=365, array('digest_alg' => 'sha384'));
// openssl_x509_export_to_file($x509, 'ecc-cert.pem');
// openssl_pkey_export_to_file($private_key, 'ecc-private.key');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-csr-new.php
// ========== OPENSSL_CSR_NEW - END

// SYNTAX:
// OpenSSLCertificateSigningRequest|false openssl_csr_new(array $distinguished_names, OpenSSLAsymmetricKey& $private_key, array $options = null, array $extra_attributes = null)

return $return_openssl_csr_new; // OpenSSLCertificateSigningRequest|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_NEW
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_SIGN
// ============================== PUBLIC
// ============================== ABOUT
// Sign a CSR with another certificate (or itself) and generate a certificate.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_csr_sign() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_csr_sign($csr, $ca_certificate, $private_key, $days, $options, $serial)
{
$return_openssl_csr_sign = false;

// ========== OPENSSL_CSR_SIGN - BEGIN
// ===== ABOUT
// Sign a CSR with another certificate (or itself) and generate a certificate
// ===== DESCRIPTION
// openssl_csr_sign() generates an x509 certificate from the given CSR.
// Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_csr_sign(
//    OpenSSLCertificateSigningRequest|string $csr,
//    OpenSSLCertificate|string|null $ca_certificate,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    int $days,
//    ?array $options = null,
//    int $serial = 0
// ): OpenSSLCertificate|false
// ===== CODE
$return_openssl_csr_sign = openssl_csr_sign(

$csr, // OpenSSLCertificateSigningRequest|string csr - A CSR previously generated by openssl_csr_new(). It can also be the path to a PEM encoded CSR when specified as file://path/to/csr or an exported string generated by openssl_csr_export().

$ca_certificate, // OpenSSLCertificate|string|null ca_certificate - The generated certificate will be signed by ca_certificate. If ca_certificate is null, the generated certificate will be a self-signed certificate.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - private_key is the private key that corresponds to ca_certificate.

$days, // int days - days specifies the length of time for which the generated certificate will be valid, in days.

$options, // array options - You can finetune the CSR signing by options. See openssl_csr_new() for more information about options.

$serial // int serial - An optional the serial number of issued certificate. If not specified it will default to 0.

); // Return Values
// Returns an OpenSSLCertificate on success, false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was returned.
// 8.0.0   - csr accepts an OpenSSLCertificateSigningRequest instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 8.0.0   - ca_certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_csr_sign() example - signing a CSR (how to implement your own CA)
// [php]
// // Let's assume that this script is set to receive a CSR that has
// // been pasted into a textarea from another page
// $csrdata = $_POST["CSR"];
// 
// // We will sign the request using our own "certificate authority"
// // certificate.  You can use any certificate to sign another, but
// // the process is worthless unless the signing certificate is trusted
// // by the software/users that will deal with the newly signed certificate
// 
// // We need our CA cert and its private key
// $cacert = "file://path/to/ca.crt";
// $privkey = array("file://path/to/ca.key", "your_ca_key_passphrase");
// 
// $usercert = openssl_csr_sign($csrdata, $cacert, $privkey, 365, array('digest_alg'=>'sha256') );
// 
// // Now display the generated certificate so that the user can
// // copy and paste it into their local configuration (such as a file
// // to hold the certificate for their SSL server)
// openssl_x509_export($usercert, $certout);
// echo $certout;
// 
// // Show any errors that occurred here
// while (($e = openssl_error_string()) !== false) {
//     echo $e . "\n";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-csr-sign.php
// ========== OPENSSL_CSR_SIGN - END

// SYNTAX:
// OpenSSLCertificate|false openssl_csr_sign(OpenSSLCertificateSigningRequest|string $csr, OpenSSLCertificate|string|null $ca_certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $days, array $options = null, int $serial = 0)

return $return_openssl_csr_sign; // OpenSSLCertificate|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_CSR_SIGN
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DECRYPT
// ============================== OFFLINE
// ============================== ABOUT
// Decrypts data.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_decrypt() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_decrypt($data, $cipher_algo, $passphrase, $options = 0, $iv = "", $tag = null, $aad = "")
{
$return_openssl_decrypt = false;

// ========== OPENSSL_DECRYPT - BEGIN
// ===== ABOUT
// Decrypts data
// ===== DESCRIPTION
// Takes a raw or base64 encoded string and decrypts it using a given method and key.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_decrypt(
//    string $data,
//    string $cipher_algo,
//    string $passphrase,
//    int $options = 0,
//    string $iv = "",
//    ?string $tag = null,
//    string $aad = ""
// ): string|false
// ===== CODE
$return_openssl_decrypt = openssl_decrypt(

$data, // string data - The encrypted message to be decrypted.

$cipher_algo, // string cipher_algo - The cipher method. For a list of available cipher methods, use openssl_get_cipher_methods().

$passphrase, // string passphrase - The key.

$options, // int options - options can be one of OPENSSL_RAW_DATA, OPENSSL_ZERO_PADDING.

$iv, // string iv - A non-NULL Initialization Vector.

$tag, // string tag - The authentication tag in AEAD cipher mode. If it is incorrect, the authentication fails and the function returns false.
// Caution: The length of the tag is not checked by the function. It is the caller's responsibility to ensure that the length of the tag matches the length of the tag retrieved when openssl_encrypt() has been called. Otherwise the decryption may succeed if the given tag only matches the start of the proper tag.

$aad // string aad - Additional authenticated data.

); // Return Values
// The decrypted string on success or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an unknown cipher algorithm is passed via the cipher_algo parameter.
// Emits an E_WARNING level error if an empty value is passed in via the iv parameter.
// 
// Changelog
// Version - Description
// 8.1.0   - tag is now nullable.
// 7.1.0   - The tag and aad parameters were added.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-09)
// URL: https://www.php.net/manual/en/function.openssl-decrypt.php
// ========== OPENSSL_DECRYPT - END

// SYNTAX:
// string|false openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", string $tag = null, string $aad = "")

return $return_openssl_decrypt; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DECRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DH_COMPUTE_KEY
// ============================== OFFLINE
// ============================== ABOUT
// Computes shared secret for public value of remote DH public key and local DH key.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_dh_compute_key() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_dh_compute_key($public_key, $private_key)
{
$return_openssl_dh_compute_key = false;

// ========== OPENSSL_DH_COMPUTE_KEY - BEGIN
// ===== ABOUT
// Computes shared secret for public value of remote DH public key and local DH key
// ===== DESCRIPTION
// The shared secret returned by openssl_dh_compute_key() is often used as an encryption key to secretly communicate with a remote party. This is known as the Diffie-Hellman key exchange.
// Note: ECDH is only supported as of PHP 8.1.0 and OpenSSL 3.0.0.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_dh_compute_key(string $public_key, OpenSSLAsymmetricKey $private_key): string|false
// ===== CODE
$return_openssl_dh_compute_key = openssl_dh_compute_key(

$public_key, // string public_key - DH Public key of the remote party.

$private_key // OpenSSLAsymmetricKey private_key - A local DH private key, corresponding to the public key to be shared with the remote party.

); // Return Values
// Returns shared secret on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey now; previously, a resource of type OpenSSL key was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 Compute a shared secret
// First generate a public/private DH keypair locally, and have the remote party do the same. We need to use the openssl command-line utility.
// [code]
// # generate private/public key keypair
// openssl dhparam -out dhparam.pem 2048
// openssl genpkey -paramfile dhparam.pem -out privatekey.pem
// 
// # extract public key only
// openssl pkey -in privatekey.pem -pubout -out publickey.pem
// [/code]
// Next, send your public key to the remote party. Use the openssl pkey command to view the public key you will be sent from the remote party.
// [code]
// openssl pkey -pubin -in remotepublickey.pem -text -noout
// [/code]
// The above example will output something similar to:
// [result]
// PKCS#3 DH Public-Key: (2048 bit)
//     public-key:
//         67:e5:e5:fa:e0:7b:0f:96:2c:dc:96:44:5f:50:02:
//         9e:8d:c2:6c:04:68:b0:d1:1d:75:66:fc:63:f5:e3:
//         42:30:b8:96:c1:45:cc:08:60:b4:21:3b:dd:ee:66:
//         88:db:77:d9:1e:11:89:d4:5c:f2:7a:f2:f1:fe:1c:
//         77:9d:6f:13:b8:b2:56:00:ef:cb:3b:60:79:74:02:
//         98:f5:f9:8e:3e:b5:62:08:de:ca:8c:c3:40:4a:80:
//         79:d5:43:06:17:a8:19:56:af:cc:95:5e:e2:32:2d:
//         d2:14:7b:76:5a:9a:f1:3c:76:76:35:cc:7b:c1:a5:
//         f4:39:e5:b6:ca:71:3f:7c:3f:97:e5:ab:86:c1:cd:
//         0e:e6:ee:04:c9:e6:2d:80:7e:59:c0:49:eb:b6:64:
//         4f:a8:f9:bb:a3:87:b3:3d:76:01:9e:2b:16:94:a4:
//         37:30:fb:35:e2:63:be:23:90:b9:ef:3f:46:46:04:
//         94:8f:60:79:7a:51:55:d6:1a:1d:f5:d9:7f:4a:3e:
//         aa:ac:b0:d0:82:cc:c2:e0:94:e0:54:c1:17:83:0b:
//         74:08:4d:5a:79:ae:ff:7f:1c:04:ab:23:39:4a:ae:
//         87:83:55:43:ab:7a:7c:04:9d:20:80:bb:af:5f:16:
//         a3:e3:20:b9:21:47:8c:f8:7f:a8:60:80:9e:61:77:
//         36
//  [...abbreviated...]
// [/result]
// Use this public key as a parameter to openssl_dh_compute_key() in order to compute the shared secret.
// [php]
// $remote_public_key = '67e5e5fae07b0f962cdc96445f50029e8dc26c0468b0d11d7566fc63f5e34230b896c145cc0860b4213bddee6688db77d91e1189d45cf27af2f1fe1c779d6f13b8b25600efcb3b6079740298f5f98e3eb56208deca8cc3404a8079d5430617a81956afcc955ee2322dd2147b765a9af13c767635cc7bc1a5f439e5b6ca713f7c3f97e5ab86c1cd0ee6ee04c9e62d807e59c049ebb6644fa8f9bba387b33d76019e2b1694a43730fb35e263be2390b9ef3f464604948f60797a5155d61a1df5d97f4a3eaaacb0d082ccc2e094e054c117830b74084d5a79aeff7f1c04ab23394aae87835543ab7a7c049d2080bbaf5f16a3e320b921478cf87fa860809e617736';
// 
// $local_priv_key = openssl_pkey_get_private('file://privatekey.pem');
// 
// $shared_secret = openssl_dh_compute_key(hex2bin($remote_public_key), $local_priv_key);
// echo bin2hex($shared_secret)."\n";
// [/php]
// [/example]
// [example]
// Example #2 Generate a DH public/private keypair in php
// First, generate the DH prime number
// [code]
// openssl dhparam -out dhparam.pem 2048
// openssl dh -in dhparam.pem -noout  -text
// [/code]
// The above example will output something similar to:
// [result]
//     PKCS#3 DH Parameters: (2048 bit)
//         prime:
//             00:a3:25:1e:73:3f:44:b9:2b:ee:f4:9d:9f:37:6a:
//             4b:fd:1d:bd:f4:af:da:c8:10:77:59:41:c6:5f:73:
//             d2:88:29:39:cd:1c:5f:c3:9f:0f:22:d2:9c:20:c1:
//             e4:c0:18:03:b8:b6:d8:da:ad:3b:39:a6:da:8e:fe:
//             12:30:e9:03:5d:22:ba:ef:18:d2:7b:69:f9:5b:cb:
//             78:c6:0c:8c:6b:f2:49:92:c2:49:e0:45:77:72:b3:
//             55:36:30:f2:40:17:89:18:50:03:fa:2d:54:7a:7f:
//             34:4c:73:32:b6:88:14:51:14:be:80:57:95:e6:a3:
//             f6:51:ff:17:47:4f:15:d6:0e:6c:47:53:72:2c:2a:
//             4c:21:cb:7d:f3:49:97:c9:47:5e:40:33:7b:99:52:
//             7e:7a:f3:52:27:80:de:1b:26:6b:40:bb:14:11:0b:
//             fb:e6:d8:2f:cf:a0:06:2f:96:b9:1c:0b:b4:cb:d3:
//             a6:62:9c:48:67:f6:81:f2:c6:ff:45:03:0a:9d:67:
//             9d:ce:27:d9:6b:48:5d:ca:fb:c2:5d:84:9b:8b:cb:
//             40:c7:a4:0c:8a:6e:f4:ab:ba:b6:10:c3:b8:25:4d:
//             cf:60:96:f4:db:e8:00:1c:58:47:7a:fb:51:86:d1:
//             22:d7:4e:94:31:7a:d5:da:3d:53:de:da:bb:64:8d:
//             62:6b
//         generator: 2 (0x2)
// [/result]
// Prime and generator values ares passed as p and g into openssl_pkey_new()
// [php]
// $configargs = array();
// $configargs['p'] = hex2bin('00a3251e733f44b92beef49d9f376a4bfd1dbdf4afdac810775941c65f73d2882939cd1c5fc39f0f22d29c20c1e4c01803b8b6d8daad3b39a6da8efe1230e9035d22baef18d27b69f95bcb78c60c8c6bf24992c249e0457772b3553630f2401789185003fa2d547a7f344c7332b688145114be805795e6a3f651ff17474f15d60e6c4753722c2a4c21cb7df34997c9475e40337b99527e7af3522780de1b266b40bb14110bfbe6d82fcfa0062f96b91c0bb4cbd3a6629c4867f681f2c6ff45030a9d679dce27d96b485dcafbc25d849b8bcb40c7a40c8a6ef4abbab610c3b8254dcf6096f4dbe8001c58477afb5186d122d74e94317ad5da3d53dedabb648d626b');
// $configargs['g'] = hex2bin('02');
// $private_key = openssl_pkey_new(array('dh' => $configargs));
// openssl_pkey_export_to_file($private_key,'privatekey.pem',$passphrase='y0urp@s5phr@se');
// 
// $details = openssl_pkey_get_details($private_key);
// $local_pub_key = $details['dh']['pub_key'];
// echo bin2hex($local_pub_key)."\n";//you can send your public key to the remote party
// 
// $details = openssl_pkey_get_details(openssl_pkey_get_public("file://remotepublickey.pem"));
// $remote_public_key = $details['dh']['pub_key'];
// $shared_secret = openssl_dh_compute_key($remote_public_key, $private_key);
// echo bin2hex($shared_secret)."\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-dh-compute-key.php
// ========== OPENSSL_DH_COMPUTE_KEY - END

// SYNTAX:
// string|false openssl_dh_compute_key(string $public_key, OpenSSLAsymmetricKey $private_key)

return $return_openssl_dh_compute_key; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DH_COMPUTE_KEY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DIGEST
// ============================== OFFLINE
// ============================== ABOUT
// Computes a digest.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_digest() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_digest($data, $digest_algo, $binary = false)
{
$return_openssl_digest = false;

// ========== OPENSSL_DIGEST - BEGIN
// ===== ABOUT
// Computes a digest
// ===== DESCRIPTION
// Computes a digest hash value for the given data using a given method, and returns a raw or binhex encoded string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_digest(string $data, string $digest_algo, bool $binary = false): string|false
// ===== CODE
$return_openssl_digest = openssl_digest(

$data, // string data - The data.

$digest_algo, // string digest_algo - The digest method to use, e.g. "sha256", see openssl_get_md_methods() for a list of available digest methods.

$binary // bool binary - Setting to true will return as raw output data, otherwise the return value is binhex encoded.

); // Return Values
// Returns the digested hash value on success or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an unknown signature algorithm is passed via the digest_algo parameter.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-digest.php
// ========== OPENSSL_DIGEST - END

// SYNTAX:
// string|false openssl_digest(string $data, string $digest_algo, bool $binary = false)

return $return_openssl_digest; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_DIGEST
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_ENCRYPT
// ============================== OFFLINE
// ============================== ABOUT
// Encrypts data.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_encrypt() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_encrypt($data, $cipher_algo, $passphrase, $options = 0, $iv = "", & $tag, $aad, $tag_length)
{
$return_openssl_encrypt = false;

// ========== OPENSSL_ENCRYPT - BEGIN
// ===== ABOUT
// Encrypts data
// ===== DESCRIPTION
// Encrypts given data with given method and key, returns a raw or base64 encoded string
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_encrypt(
//    string $data,
//    string $cipher_algo,
//    string $passphrase,
//    int $options = 0,
//    string $iv = "",
//    string &$tag = null,
//    string $aad = "",
//    int $tag_length = 16
// ): string|false
// ===== CODE
$return_openssl_encrypt = openssl_encrypt(

$data, // data - The plaintext message data to be encrypted.

$cipher_algo, // cipher_algo - The cipher method. For a list of available cipher methods, use openssl_get_cipher_methods().

$passphrase, // passphrase - The passphrase. If the passphrase is shorter than expected, it is silently padded with NUL characters; if the passphrase is longer than expected, it is silently truncated.

$options, // options - options is a bitwise disjunction of the flags OPENSSL_RAW_DATA and OPENSSL_ZERO_PADDING.

$iv, // iv - A non-NULL Initialization Vector.

$tag, // tag - The authentication tag passed by reference when using AEAD cipher mode (GCM or CCM).

$aad, // aad - Additional authenticated data.

$tag_length // tag_length - The length of the authentication tag. Its value can be between 4 and 16 for GCM mode.

); // Return Values
// Returns the encrypted string on success or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an unknown cipher algorithm is passed in via the cipher_algo parameter.
// Emits an E_WARNING level error if an empty value is passed in via the iv parameter.
// 
// Changelog
// Version - Description
// 7.1.0   - The tag, aad and tag_length parameters were added.
// 
// [examples]
// Examples
// [example]
// Example #1 AES Authenticated Encryption in GCM mode example for PHP 7.1+
// [php]
// //$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
// $plaintext = "message to be encrypted";
// $cipher = "aes-128-gcm";
// if (in_array($cipher, openssl_get_cipher_methods()))
// {
//     $ivlen = openssl_cipher_iv_length($cipher);
//     $iv = openssl_random_pseudo_bytes($ivlen);
//     $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
//     //store $cipher, $iv, and $tag for decryption later
//     $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
//     echo $original_plaintext."\n";
// }
// [/php]
// [/example]
// [example]
// Example #2 AES Authenticated Encryption example prior to PHP 7.1
// [php]
// //$key previously generated safely, ie: openssl_random_pseudo_bytes
// $plaintext = "message to be encrypted";
// $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
// $iv = openssl_random_pseudo_bytes($ivlen);
// $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
// $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
// $ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );
// 
// //decrypt later....
// $c = base64_decode($ciphertext);
// $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
// $iv = substr($c, 0, $ivlen);
// $hmac = substr($c, $ivlen, $sha2len=32);
// $ciphertext_raw = substr($c, $ivlen+$sha2len);
// $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
// $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
// if (hash_equals($hmac, $calcmac))// timing attack safe comparison
// {
//     echo $original_plaintext."\n";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-encrypt.php
// ========== OPENSSL_ENCRYPT - END

// SYNTAX:
// string|false openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", string& $tag, string $aad, int $tag_length)

return $return_openssl_encrypt; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_ENCRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_ERROR_STRING
// ============================== PUBLIC
// ============================== ABOUT
// Return openSSL error message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_error_string() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_error_string()
{
$return_openssl_error_string = false;

// ========== OPENSSL_ERROR_STRING - BEGIN
// ===== ABOUT
// Return openSSL error message
// ===== DESCRIPTION
// openssl_error_string() returns the last error from the openSSL library. Error messages are queued, so this function should be called multiple times to collect all of the information. The last error will be the most recent one.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_error_string(): string|false
// ===== CODE
$return_openssl_error_string = openssl_error_string(

// This function has no parameters.

); // Return Values
// Returns an error message string, or false if there are no more error messages to return.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_error_string() example
// [php]
// // lets assume you just called an openssl function that failed
// while ($msg = openssl_error_string())
//     echo $msg . "<br />\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-error-string.php
// ========== OPENSSL_ERROR_STRING - END

// SYNTAX:
// string|false openssl_error_string()

return $return_openssl_error_string; // string|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_ERROR_STRING
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_FREE_KEY
// ============================== PUBLIC
// ============================== ABOUT
// Free key resource.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_free_key() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_free_key($key)
{
// ========== OPENSSL_FREE_KEY - BEGIN
// ===== ABOUT
// Free key resource
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// openssl_free_key() frees the key associated with the specified key from memory.
// ===== SUPPORTED
// openssl_free_key(OpenSSLAsymmetricKey $key): void
// ===== SYNTAX
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== CODE
openssl_free_key(

$key // OpenSSLAsymmetricKey key

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is now deprecated as it doesn't have an effect anymore.
// 8.0.0   - key accepts an OpenSSLAsymmetricKey now; previously, a resource of type OpenSSL key was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-free-key.php
// ========== OPENSSL_FREE_KEY - END

// SYNTAX:
// void openssl_free_key(OpenSSLAsymmetricKey $key)

// Return: void
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_FREE_KEY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CERT_LOCATIONS
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve the available certificate locations.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_get_cert_locations() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_get_cert_locations()
{
$return_openssl_get_cert_locations = null;

// ========== OPENSSL_GET_CERT_LOCATIONS - BEGIN
// ===== ABOUT
// Retrieve the available certificate locations
// ===== DESCRIPTION
// openssl_get_cert_locations() returns an array with information about the available certificate locations that will be searched for SSL certificates.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_get_cert_locations(): array
// ===== CODE
$return_openssl_get_cert_locations = openssl_get_cert_locations(

// This function has no parameters.

); // Return Values
// Returns an array with the available certificate locations.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_get_cert_locations() example
// [php]
// var_dump(openssl_get_cert_locations());
// [/php]
// The above example will output:
// [result]
// array(8) {
//   ["default_cert_file"]=>
//   string(21) "/usr/lib/ssl/cert.pem"
//   ["default_cert_file_env"]=>
//   string(13) "SSL_CERT_FILE"
//   ["default_cert_dir"]=>
//   string(18) "/usr/lib/ssl/certs"
//   ["default_cert_dir_env"]=>
//   string(12) "SSL_CERT_DIR"
//   ["default_private_dir"]=>
//   string(20) "/usr/lib/ssl/private"
//   ["default_default_cert_area"]=>
//   string(12) "/usr/lib/ssl"
//   ["ini_cafile"]=>
//   string(0) ""
//   ["ini_capath"]=>
//   string(0) ""
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-get-cert-locations.php
// ========== OPENSSL_GET_CERT_LOCATIONS - END

// SYNTAX:
// array openssl_get_cert_locations()

return $return_openssl_get_cert_locations; // array
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CERT_LOCATIONS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CIPHER_METHODS
// ============================== OFFLINE
// ============================== ABOUT
// Gets available cipher methods.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_get_cipher_methods() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_get_cipher_methods($aliases = false)
{
$return_openssl_get_cipher_methods = null;

// ========== OPENSSL_GET_CIPHER_METHODS - BEGIN
// ===== ABOUT
// Gets available cipher methods
// ===== DESCRIPTION
// Gets a list of available cipher methods.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_get_cipher_methods(bool $aliases = false): array
// ===== CODE
$return_openssl_get_cipher_methods = openssl_get_cipher_methods(

$aliases // bool aliases - Set to true if cipher aliases should be included within the returned array.

); // Return Values
// An array of available cipher methods. Note that prior to OpenSSL 1.1.1, the cipher methods have been returned in upper case and lower case spelling; as of OpenSSL 1.1.1 only the lower case variants are returned.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_get_cipher_methods() example
// Shows how the available ciphers might look, and also which aliases might be available.
// [php]
// $ciphers             = openssl_get_cipher_methods();
// $ciphers_and_aliases = openssl_get_cipher_methods(true);
// $cipher_aliases      = array_diff($ciphers_and_aliases, $ciphers);
// 
// //ECB mode should be avoided
// $ciphers = array_filter( $ciphers, function($n) { return stripos($n,"ecb")===FALSE; } );
// 
// //At least as early as Aug 2016, Openssl declared the following weak: RC2, RC4, DES, 3DES, MD5 based
// $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"des")===FALSE; } );
// $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"rc2")===FALSE; } );
// $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"rc4")===FALSE; } );
// $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"md5")===FALSE; } );
// $cipher_aliases = array_filter($cipher_aliases,function($c) { return stripos($c,"des")===FALSE; } );
// $cipher_aliases = array_filter($cipher_aliases,function($c) { return stripos($c,"rc2")===FALSE; } );
// 
// print_r($ciphers);
// print_r($cipher_aliases);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => aes-128-cbc
//     [1] => aes-128-cbc-hmac-sha1
//     [2] => aes-128-cbc-hmac-sha256
//     [3] => aes-128-ccm
//     [4] => aes-128-cfb
//     [5] => aes-128-cfb1
//     [6] => aes-128-cfb8
//     [7] => aes-128-ctr
//     [9] => aes-128-gcm
//     [10] => aes-128-ocb
//     [11] => aes-128-ofb
//     [12] => aes-128-xts
//     [13] => aes-192-cbc
//     [14] => aes-192-ccm
//     [15] => aes-192-cfb
//     [16] => aes-192-cfb1
//     [17] => aes-192-cfb8
//     [18] => aes-192-ctr
//     [20] => aes-192-gcm
//     [21] => aes-192-ocb
//     [22] => aes-192-ofb
//     [23] => aes-256-cbc
//     [24] => aes-256-cbc-hmac-sha1
//     [25] => aes-256-cbc-hmac-sha256
//     [26] => aes-256-ccm
//     [27] => aes-256-cfb
//     [28] => aes-256-cfb1
//     [29] => aes-256-cfb8
//     [30] => aes-256-ctr
//     [32] => aes-256-gcm
//     [33] => aes-256-ocb
//     [34] => aes-256-ofb
//     [35] => aes-256-xts
//     [36] => aria-128-cbc
//     [37] => aria-128-ccm
//     [38] => aria-128-cfb
//     [39] => aria-128-cfb1
//     [40] => aria-128-cfb8
//     [41] => aria-128-ctr
//     [43] => aria-128-gcm
//     [44] => aria-128-ofb
//     [45] => aria-192-cbc
//     [46] => aria-192-ccm
//     [47] => aria-192-cfb
//     [48] => aria-192-cfb1
//     [49] => aria-192-cfb8
//     [50] => aria-192-ctr
//     [52] => aria-192-gcm
//     [53] => aria-192-ofb
//     [54] => aria-256-cbc
//     [55] => aria-256-ccm
//     [56] => aria-256-cfb
//     [57] => aria-256-cfb1
//     [58] => aria-256-cfb8
//     [59] => aria-256-ctr
//     [61] => aria-256-gcm
//     [62] => aria-256-ofb
//     [63] => bf-cbc
//     [64] => bf-cfb
//     [66] => bf-ofb
//     [67] => camellia-128-cbc
//     [68] => camellia-128-cfb
//     [69] => camellia-128-cfb1
//     [70] => camellia-128-cfb8
//     [71] => camellia-128-ctr
//     [73] => camellia-128-ofb
//     [74] => camellia-192-cbc
//     [75] => camellia-192-cfb
//     [76] => camellia-192-cfb1
//     [77] => camellia-192-cfb8
//     [78] => camellia-192-ctr
//     [80] => camellia-192-ofb
//     [81] => camellia-256-cbc
//     [82] => camellia-256-cfb
//     [83] => camellia-256-cfb1
//     [84] => camellia-256-cfb8
//     [85] => camellia-256-ctr
//     [87] => camellia-256-ofb
//     [88] => cast5-cbc
//     [89] => cast5-cfb
//     [91] => cast5-ofb
//     [92] => chacha20
//     [93] => chacha20-poly1305
//     [111] => id-aes128-CCM
//     [112] => id-aes128-GCM
//     [113] => id-aes128-wrap
//     [114] => id-aes128-wrap-pad
//     [115] => id-aes192-CCM
//     [116] => id-aes192-GCM
//     [117] => id-aes192-wrap
//     [118] => id-aes192-wrap-pad
//     [119] => id-aes256-CCM
//     [120] => id-aes256-GCM
//     [121] => id-aes256-wrap
//     [122] => id-aes256-wrap-pad
//     [124] => idea-cbc
//     [125] => idea-cfb
//     [127] => idea-ofb
//     [137] => seed-cbc
//     [138] => seed-cfb
//     [140] => seed-ofb
//     [141] => sm4-cbc
//     [142] => sm4-cfb
//     [143] => sm4-ctr
//     [145] => sm4-ofb
// )
// Array
// (
//     [36] => aes128
//     [37] => aes128-wrap
//     [38] => aes192
//     [39] => aes192-wrap
//     [40] => aes256
//     [41] => aes256-wrap
//     [69] => aria128
//     [70] => aria192
//     [71] => aria256
//     [72] => bf
//     [77] => blowfish
//     [99] => camellia128
//     [100] => camellia192
//     [101] => camellia256
//     [102] => cast
//     [103] => cast-cbc
//     [146] => idea
//     [164] => seed
//     [169] => sm4
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-get-cipher-methods.php
// ========== OPENSSL_GET_CIPHER_METHODS - END

// SYNTAX:
// array openssl_get_cipher_methods(bool $aliases = false)

return $return_openssl_get_cipher_methods; // array
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CIPHER_METHODS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CURVE_NAMES
// ============================== OFFLINE
// ============================== ABOUT
// Gets list of available curve names for ECC.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_get_curve_names() - PHP_7 >= PHP_7_1_0, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_get_curve_names()
{
$return_openssl_get_curve_names = false;

// ========== OPENSSL_GET_CURVE_NAMES - BEGIN
// ===== ABOUT
// Gets list of available curve names for ECC
// ===== DESCRIPTION
// Gets the list of available curve names for use in Elliptic curve cryptography (ECC) for public/private key operations. The two most widely standardized/supported curves are prime256v1 (NIST P-256) and secp384r1 (NIST P-384).
// 
// Approximate Equivalancies of AES, RSA, DSA and ECC Keysizes
// AES Symmetric Keysize (Bits) | RSA and DSA Keysize (Bits) | ECC Keysize (Bits)
// 80                           | 1024                       | 160
// 112                          | 2048                       | 224
// 128                          | 3072                       | 256
// 192                          | 7680                       | 384
// 256                          | 15360                      | 512
// NIST recommends using ECC curves with at least 256 bits.
// http://dx.doi.org/10.6028/NIST.SP.800-57pt1r4
// ===== SUPPORTED
// PHP_7 >= PHP_7_1_0, PHP_8
// ===== SYNTAX
// openssl_get_curve_names(): array|false
// ===== CODE
$return_openssl_get_curve_names = openssl_get_curve_names(

// This function has no parameters.

); // Return Values
// An array of available curve names, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_get_curve_names() example
// [php]
// $curve_names = openssl_get_curve_names();
// print_r($curve_names);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => secp112r1
//     [1] => secp112r2
//     [2] => secp128r1
//     [3] => secp128r2
//     [4] => secp160k1
//     [5] => secp160r1
//     [6] => secp160r2
//     [7] => secp192k1
//     [8] => secp224k1
//     [9] => secp224r1
//     [10] => secp256k1
//     [11] => secp384r1
//     [12] => secp521r1
//     [13] => prime192v1
//     [14] => prime192v2
//     [15] => prime192v3
//     [16] => prime239v1
//     [17] => prime239v2
//     [18] => prime239v3
//     [19] => prime256v1
//     [20] => sect113r1
//     [21] => sect113r2
//     [22] => sect131r1
//     [23] => sect131r2
//     [24] => sect163k1
//     [25] => sect163r1
//     [26] => sect163r2
//     [27] => sect193r1
//     [28] => sect193r2
//     [29] => sect233k1
//     [30] => sect233r1
//     [31] => sect239k1
//     [32] => sect283k1
//     [33] => sect283r1
//     [34] => sect409k1
//     [35] => sect409r1
//     [36] => sect571k1
//     [37] => sect571r1
//     [38] => c2pnb163v1
//     [39] => c2pnb163v2
//     [40] => c2pnb163v3
//     [41] => c2pnb176v1
//     [42] => c2tnb191v1
//     [43] => c2tnb191v2
//     [44] => c2tnb191v3
//     [45] => c2pnb208w1
//     [46] => c2tnb239v1
//     [47] => c2tnb239v2
//     [48] => c2tnb239v3
//     [49] => c2pnb272w1
//     [50] => c2pnb304w1
//     [51] => c2tnb359v1
//     [52] => c2pnb368w1
//     [53] => c2tnb431r1
//     [54] => wap-wsg-idm-ecid-wtls1
//     [55] => wap-wsg-idm-ecid-wtls3
//     [56] => wap-wsg-idm-ecid-wtls4
//     [57] => wap-wsg-idm-ecid-wtls5
//     [58] => wap-wsg-idm-ecid-wtls6
//     [59] => wap-wsg-idm-ecid-wtls7
//     [60] => wap-wsg-idm-ecid-wtls8
//     [61] => wap-wsg-idm-ecid-wtls9
//     [62] => wap-wsg-idm-ecid-wtls10
//     [63] => wap-wsg-idm-ecid-wtls11
//     [64] => wap-wsg-idm-ecid-wtls12
//     [65] => Oakley-EC2N-3
//     [66] => Oakley-EC2N-4
//     [67] => brainpoolP160r1
//     [68] => brainpoolP160t1
//     [69] => brainpoolP192r1
//     [70] => brainpoolP192t1
//     [71] => brainpoolP224r1
//     [72] => brainpoolP224t1
//     [73] => brainpoolP256r1
//     [74] => brainpoolP256t1
//     [75] => brainpoolP320r1
//     [76] => brainpoolP320t1
//     [77] => brainpoolP384r1
//     [78] => brainpoolP384t1
//     [79] => brainpoolP512r1
//     [80] => brainpoolP512t1
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-get-curve-names.php
// ========== OPENSSL_GET_CURVE_NAMES - END

// SYNTAX:
// openssl_get_curve_names(): array|false

return $return_openssl_get_curve_names; // array|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_CURVE_NAMES
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_MD_METHODS
// ============================== OFFLINE
// ============================== ABOUT
// Gets available digest methods.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_get_md_methods() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_get_md_methods($aliases = false)
{
$return_openssl_get_md_methods = null;

// ========== OPENSSL_GET_MD_METHODS - BEGIN
// ===== ABOUT
// Gets available digest methods
// ===== DESCRIPTION
// Gets a list of available digest methods.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_get_md_methods(bool $aliases = false): array
// ===== CODE
$return_openssl_get_md_methods = openssl_get_md_methods(

$aliases // bool aliases - Set to true if digest aliases should be included within the returned array.

); // Return Values
// An array of available digest methods.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_get_md_methods() example
// Shows how the available digests might look, and also which aliases might be available.
// [php]
// $digests             = openssl_get_md_methods();
// $digests_and_aliases = openssl_get_md_methods(true);
// $digest_aliases      = array_diff($digests_and_aliases, $digests);
// 
// print_r($digests);
// 
// print_r($digest_aliases);
// 
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => DSA
//     [1] => DSA-SHA
//     [2] => MD2
//     [3] => MD4
//     [4] => MD5
//     [5] => RIPEMD160
//     [6] => SHA
//     [7] => SHA1
//     [8] => SHA224
//     [9] => SHA256
//     [10] => SHA384
//     [11] => SHA512
//     [12] => dsaEncryption
//     [13] => dsaWithSHA
//     [14] => ecdsa-with-SHA1
//     [15] => md2
//     [16] => md4
//     [17] => md5
//     [18] => ripemd160
//     [19] => sha
//     [20] => sha1
//     [21] => sha224
//     [22] => sha256
//     [23] => sha384
//     [24] => sha512
// )
// Array
// (
//     [2] => DSA-SHA1
//     [3] => DSA-SHA1-old
//     [4] => DSS1
//     [9] => RSA-MD2
//     [10] => RSA-MD4
//     [11] => RSA-MD5
//     [12] => RSA-RIPEMD160
//     [13] => RSA-SHA
//     [14] => RSA-SHA1
//     [15] => RSA-SHA1-2
//     [16] => RSA-SHA224
//     [17] => RSA-SHA256
//     [18] => RSA-SHA384
//     [19] => RSA-SHA512
//     [28] => dsaWithSHA1
//     [29] => dss1
//     [32] => md2WithRSAEncryption
//     [34] => md4WithRSAEncryption
//     [36] => md5WithRSAEncryption
//     [37] => ripemd
//     [39] => ripemd160WithRSA
//     [40] => rmd160
//     [43] => sha1WithRSAEncryption
//     [45] => sha224WithRSAEncryption
//     [47] => sha256WithRSAEncryption
//     [49] => sha384WithRSAEncryption
//     [51] => sha512WithRSAEncryption
//     [52] => shaWithRSAEncryption
//     [53] => ssl2-md5
//     [54] => ssl3-md5
//     [55] => ssl3-sha1
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-get-md-methods.php
// ========== OPENSSL_GET_MD_METHODS - END

// SYNTAX:
// array openssl_get_md_methods(bool $aliases = false)

return $return_openssl_get_md_methods; // array
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_MD_METHODS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_PRIVATEKEY
// ============================== PUBLIC
// ============================== ABOUT
// Get a private key.
// 
// Alias of openssl_pkey_get_private().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_get_privatekey() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_get_privatekey($private_key, $passphrase = null)
{
$return_openssl_get_privatekey = false;

// ========== OPENSSL_GET_PRIVATEKEY - BEGIN
// ===== ABOUT
// Alias of openssl_pkey_get_private()
// ===== DESCRIPTION
// This function is an alias of: openssl_pkey_get_private().
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_openssl_get_privatekey = openssl_get_privatekey(

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key

$passphrase // string $passphrase

); // Return
// OpenSSLAsymmetricKey|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-get-privatekey.php
// ========== OPENSSL_GET_PRIVATEKEY - END

// ========== OPENSSL_PKEY_GET_PRIVATE - BEGIN
// ===== ABOUT
// Get a private key
// ===== DESCRIPTION
// openssl_pkey_get_private() parses private_key and prepares it for use by other functions.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_get_private(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, ?string $passphrase = null): OpenSSLAsymmetricKey|false
// ===== CODE
// $return_openssl_pkey_get_private = openssl_pkey_get_private(

// $private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - private_key can be one of the following:
// 1. a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/private key (it may contain both).
// 2. A PEM formatted private key.

// $passphrase // string passphrase - The optional parameter passphrase must be used if the specified key is encrypted (protected by a passphrase).

// ); // Return Values
// Returns an OpenSSLAsymmetricKey instance on success, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was returned.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// 8.0.0   - passphrase is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-pkey-get-private.php
// ========== OPENSSL_PKEY_GET_PRIVATE - END

// SYNTAX:
// OpenSSLAsymmetricKey|false openssl_get_privatekey(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase = null)

return $return_openssl_get_privatekey; // OpenSSLAsymmetricKey|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_PRIVATEKEY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_PUBLICKEY
// ============================== PUBLIC
// ============================== ABOUT
// Extract public key from certificate and prepare it for use.
// 
// Alias of openssl_pkey_get_public().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_get_publickey() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_get_publickey($public_key)
{
$return_openssl_get_publickey = false;

// ========== OPENSSL_GET_PUBLICKEY - BEGIN
// ===== ABOUT
// Alias of openssl_pkey_get_public()
// ===== DESCRIPTION
// This function is an alias of: openssl_pkey_get_public().
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_openssl_get_publickey = openssl_get_publickey(

$public_key // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key

); // Return
// OpenSSLAsymmetricKey|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-get-publickey.php
// ========== OPENSSL_GET_PUBLICKEY - END

// ========== OPENSSL_PKEY_GET_PUBLIC - BEGIN
// ===== ABOUT
// Extract public key from certificate and prepare it for use
// ===== DESCRIPTION
// openssl_pkey_get_public() extracts the public key from public_key and prepares it for use by other functions.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_get_public(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key): OpenSSLAsymmetricKey|false
// ===== CODE
// $return_openssl_pkey_get_public = openssl_pkey_get_public(

// $public_key // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - public_key can be one of the following:
// 1. an OpenSSLAsymmetricKey instance
// 2. a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/public key (it may contain both).
// 3. A PEM formatted public key.

// ); // Return Values
// Returns an OpenSSLAsymmetricKey instance on success, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was returned.
// 8.0.0   - public_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-pkey-get-public.php
// ========== OPENSSL_PKEY_GET_PUBLIC - END

// SYNTAX:
// OpenSSLAsymmetricKey|false openssl_get_publickey(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)

return $return_openssl_get_publickey; // OpenSSLAsymmetricKey|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_GET_PUBLICKEY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Open sealed data.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_open() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_open($data, & $output, $encrypted_key, $private_key, $cipher_algo, $iv = null)
{
$return_openssl_open = false;

// ========== OPENSSL_OPEN - BEGIN
// ===== ABOUT
// Open sealed data
// ===== DESCRIPTION
// openssl_open() opens (decrypts) data using the private key associated with the key identifier private_key and the envelope key encrypted_key, and fills output with the decrypted data. The envelope key is generated when the data are sealed and can only be used by one specific private key. See openssl_seal() for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_open(
//    string $data,
//    string &$output,
//    string $encrypted_key,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    string $cipher_algo,
//    ?string $iv = null
// ): bool
// ===== CODE
$return_openssl_open = openssl_open(

$data, // string data

$output, // string output - If the call is successful the opened data is returned in this parameter.

$encrypted_key, // string encrypted_key

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key

$cipher_algo, // string cipher_algo - The cipher method.
// Caution: The default value ('RC4') is considered insecure. It is strongly recommended to explicitly specify a secure cipher method.

$iv // string iv - The initialization vector.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 CSR was accepted.
// 8.0.0   - cipher_algo is no longer an optional parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_open() example
// [php]
// // $sealed and $env_key are assumed to contain the sealed data
// // and our envelope key, both given to us by the sealer.
// 
// // fetch private key from file and ready it
// $fp = fopen("/src/openssl-0.9.6/demos/sign/key.pem", "r");
// $priv_key = fread($fp, 8192);
// fclose($fp);
// $pkeyid = openssl_get_privatekey($priv_key);
// 
// // decrypt the data and store it in $open
// if (openssl_open($sealed, $open, $env_key, $pkeyid)) {
//     echo "here is the opened data: ", $open;
// } else {
//     echo "failed to open data";
// }
// 
// // free the private key from memory
// openssl_free_key($pkeyid);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-open.php
// ========== OPENSSL_OPEN - END

// SYNTAX:
// bool openssl_open(string $data, string& $output, string $encrypted_key, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $cipher_algo, string $iv = null)

return $return_openssl_open; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_OPEN
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PBKDF2
// ============================== OFFLINE
// ============================== ABOUT
// Generates a PKCS5 v2 PBKDF2 string.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pbkdf2() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algo = "sha1")
{
$return_openssl_pbkdf2 = false;

// ========== OPENSSL_PBKDF2 - BEGIN
// ===== ABOUT
// Generates a PKCS5 v2 PBKDF2 string
// ===== DESCRIPTION
// openssl_pbkdf2() computes PBKDF2 (Password-Based Key Derivation Function 2), a key derivation function defined in PKCS5 v2.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pbkdf2(
//    string $password,
//    string $salt,
//    int $key_length,
//    int $iterations,
//    string $digest_algo = "sha1"
// ): string|false
// ===== CODE
$return_openssl_pbkdf2 = openssl_pbkdf2(

$password, // string password - Password from which the derived key is generated.

$salt, // string salt - PBKDF2 recommends a crytographic salt of at least 64 bits (8 bytes).

$key_length, // int key_length - Length of desired output key.

$iterations, // int iterations - The number of iterations desired. > NIST recommends at least 10,000.

$digest_algo // string digest_algo - Optional hash or digest algorithm from openssl_get_md_methods(). Defaults to SHA-1.

); // Return Values
// Returns raw binary string or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_pbkdf2() example
// [php]
// $password = 'password';
// $salt = openssl_random_pseudo_bytes(16);
// $keyLength = 20;
// $iterations = 600000;
// $generated_key = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha256');
// echo bin2hex($generated_key)."\n";
// echo base64_encode($generated_key)."\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pbkdf2.php
// ========== OPENSSL_PBKDF2 - END

// SYNTAX:
// string|false openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1")

return $return_openssl_pbkdf2; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PBKDF2
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_EXPORT_TO_FILE
// ============================== OFFLINE
// ============================== ABOUT
// Exports a PKCS#12 Compatible Certificate Store File.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs12_export_to_file() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pkcs12_export_to_file($x509, $output_filename, $private_key, $passphrase, $options = array())
{
$return_openssl_pkcs12_export_to_file = false;

// ========== OPENSSL_PKCS12_EXPORT_TO_FILE - BEGIN
// ===== ABOUT
// Exports a PKCS#12 Compatible Certificate Store File
// ===== DESCRIPTION
// openssl_pkcs12_export_to_file() stores certificate into a file named by output_filename in a PKCS#12 file format.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs12_export_to_file(
//    OpenSSLCertificate|string $certificate,
//    string $output_filename,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    string $passphrase,
//    array $options = []
// ): bool
// ===== CODE
$return_openssl_pkcs12_export_to_file = openssl_pkcs12_export_to_file(

$x509, // OpenSSLCertificate|string x509 - See Key/Certificate parameters for a list of valid values.

$output_filename, // string output_filename - Path to the output file.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - Private key component of PKCS#12 file. See Public/Private Key parameters for a list of valid values.

$passphrase, // string passphrase - Encryption password for unlocking the PKCS#12 file.

$options // array options - Optional array, other keys will be ignored.
// Key            - Description
// "extracerts"   - array of extra certificates or a single certificate to be included in the PKCS#12 file.
// "friendlyname" - string to be used for the supplied certificate and key

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-11)
// URL: https://www.php.net/manual/en/function.openssl-pkcs12-export-to-file.php
// ========== OPENSSL_PKCS12_EXPORT_TO_FILE - END

// SYNTAX:
// bool openssl_pkcs12_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase, array $options = array())

return $return_openssl_pkcs12_export_to_file; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_EXPORT_TO_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_EXPORT
// ============================== OFFLINE
// ============================== ABOUT
// Exports a PKCS#12 Compatible Certificate Store File to variable.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs12_export() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pkcs12_export($x509, & $output, $private_key, $passphrase, $options = array())
{
$return_openssl_pkcs12_export = false;

// ========== OPENSSL_PKCS12_EXPORT - BEGIN
// ===== ABOUT
// Exports a PKCS#12 Compatible Certificate Store File to variable
// ===== DESCRIPTION
// openssl_pkcs12_export() stores certificate into a string named by output in a PKCS#12 file format.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs12_export(
//    OpenSSLCertificate|string $certificate,
//    string &$output,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    string $passphrase,
//    array $options = []
// ): bool
// ===== CODE
$return_openssl_pkcs12_export = openssl_pkcs12_export(

$x509, // OpenSSLCertificate|string x509 - See Key/Certificate parameters for a list of valid values.

$output, // string output - On success, this will hold the PKCS#12.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - Private key component of PKCS#12 file. See Public/Private Key parameters for a list of valid values.

$passphrase, // string passphrase - Encryption password for unlocking the PKCS#12 file.

$options // array options - Optional array, other keys will be ignored.
// Key            - Description
// "extracerts"   - array of extra certificates or a single certificate to be included in the PKCS#12 file.
// "friendlyname" - string to be used for the supplied certificate and key

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-12)
// URL: https://www.php.net/manual/en/function.openssl-pkcs12-export.php
// ========== OPENSSL_PKCS12_EXPORT - END

// SYNTAX:
// bool openssl_pkcs12_export(OpenSSLCertificate|string $certificate, string& $output, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase, array $options = array())

return $return_openssl_pkcs12_export; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_EXPORT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_READ
// ============================== OFFLINE
// ============================== ABOUT
// Parse a PKCS#12 Certificate Store into an array.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs12_read() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pkcs12_read($pkcs12, & $certificates, $passphrase)
{
$return_openssl_pkcs12_read = false;

// ========== OPENSSL_PKCS12_READ - BEGIN
// ===== ABOUT
// Parse a PKCS#12 Certificate Store into an array
// ===== DESCRIPTION
// openssl_pkcs12_read() parses the PKCS#12 certificate store supplied by pkcs12 into a array named certificates.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs12_read(string $pkcs12, array &$certificates, string $passphrase): bool
// ===== CODE
$return_openssl_pkcs12_read = openssl_pkcs12_read(

$pkcs12, // string pkcs12 - The certificate store contents, not its file name.

$certificates, // array certificates - On success, this will hold the Certificate Store Data.

$passphrase // string passphrase - Encryption password for unlocking the PKCS#12 file.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_pkcs12_read() example
// [php]
// if (!$cert_store = file_get_contents("/certs/file.p12")) {
//     echo "Error: Unable to read the cert file\n";
//     exit;
// }
// 
// if (openssl_pkcs12_read($cert_store, $cert_info, "my_secret_pass")) {
//     echo "Certificate Information\n";
//     print_r($cert_info);
// } else {
//     echo "Error: Unable to read the cert store.\n";
//     exit;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkcs12-read.php
// ========== OPENSSL_PKCS12_READ - END

// SYNTAX:
// bool openssl_pkcs12_read(string $pkcs12, array& $certificates, string $passphrase)

return $return_openssl_pkcs12_read; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS12_READ
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_DECRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Decrypts an S/MIME encrypted message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs7_decrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkcs7_decrypt($input_filename, $output_filename, $certificate, $private_key = null)
{
$return_openssl_pkcs7_decrypt = false;

// ========== OPENSSL_PKCS7_DECRYPT - BEGIN
// ===== ABOUT
// Decrypts an S/MIME encrypted message
// ===== DESCRIPTION
// Decrypts the S/MIME encrypted message contained in the file specified by input_filename using the certificate and its associated private key specified by certificate and private_key.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs7_decrypt(
//    string $input_filename,
//    string $output_filename,
//    OpenSSLCertificate|string $certificate,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key = null
// ): bool
// ===== CODE
$return_openssl_pkcs7_decrypt = openssl_pkcs7_decrypt(

$input_filename, // string input_filename

$output_filename, // string output_filename - The decrypted message is written to the file specified by output_filename.

$certificate, // OpenSSLCertificate|string certificate

$private_key // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null private_key

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_pkcs7_decrypt() example
// [php]
// // $cert and $key are assumed to contain your personal certificate and private
// // key pair, and that you are the recipient of an S/MIME message
// $infilename = "encrypted.msg";  // this file holds your encrypted message
// $outfilename = "decrypted.msg"; // make sure you can write to this file
// 
// if (openssl_pkcs7_decrypt($infilename, $outfilename, $cert, $key)) {
//     echo "decrypted!";
// } else {
//     echo "failed to decrypt!";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkcs7-decrypt.php
// ========== OPENSSL_PKCS7_DECRYPT - END

// SYNTAX:
// bool openssl_pkcs7_decrypt(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key = null)

return $return_openssl_pkcs7_decrypt; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_DECRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_ENCRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Encrypt an S/MIME message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs7_encrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_CIPHER_AES_128_CBC - openssl_pkcs7_encrypt()
// ============================== CODE
function php_cryptography_openssl_openssl_pkcs7_encrypt($input_filename, $output_filename, $certificate, $headers, $flags = 0, $cipher_algo = OPENSSL_CIPHER_AES_128_CBC)
{
$return_openssl_pkcs7_encrypt = false;

// ========== OPENSSL_PKCS7_ENCRYPT - BEGIN
// ===== ABOUT
// Encrypt an S/MIME message
// ===== DESCRIPTION
// openssl_pkcs7_encrypt() takes the contents of the file named input_filename and encrypts them using an RC2 40-bit cipher so that they can only be read by the intended recipients specified by certificate.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs7_encrypt(
// openssl_pkcs7_encrypt(
//    string $input_filename,
//    string $output_filename,
//    OpenSSLCertificate|array|string $certificate,
//    ?array $headers,
//    int $flags = 0,
//    int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC
// ): bool
// ===== CODE
$return_openssl_pkcs7_encrypt = openssl_pkcs7_encrypt(

$input_filename, // string input_filename

$output_filename, // string output_filename

$certificate, // OpenSSLCertificate|array|string certificate - Either a lone X.509 certificate, or an array of X.509 certificates.

$headers, // array headers - headers is an array of headers that will be prepended to the data after it has been encrypted.
// headers can be either an associative array keyed by header name, or an indexed array, where each element contains a single header line.

$flags, // int flags - flags can be used to specify options that affect the encoding process - see PKCS7 constants.

$cipher_algo // int cipher_algo - One of cipher constants.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The default cipher algorithm (cipher_algo) is now AES-128-CBC (OPENSSL_CIPHER_AES_128_CBC). Previously, PKCS7/CMS was used (OPENSSL_CIPHER_RC2_40).
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_pkcs7_encrypt() example
// [php]
// // the message you want to encrypt and send to your secret agent
// // in the field, known as nighthawk.  You have his certificate
// // in the file nighthawk.pem
// $data = <<<EOD
// Nighthawk,
// 
// Top secret, for your eyes only!
// 
// The enemy is closing in! Meet me at the cafe at 8.30am
// to collect your forged passport!
// 
// HQ
// EOD;
// 
// // load key
// $key = file_get_contents("nighthawk.pem");
// 
// // save message to file
// $fp = fopen("msg.txt", "w");
// fwrite($fp, $data);
// fclose($fp);
// 
// // encrypt it
// if (openssl_pkcs7_encrypt("msg.txt", "enc.txt", $key,
//     array("To" => "nighthawk@example.com", // keyed syntax
//           "From: HQ <hq@example.com>", // indexed syntax
//           "Subject" => "Eyes only"))) {
//     // message encrypted - send it!
//     exec(ini_get("sendmail_path") . " < enc.txt");
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkcs7-encrypt.php
// ========== OPENSSL_PKCS7_ENCRYPT - END

// SYNTAX:
// bool openssl_pkcs7_encrypt(string $input_filename, string $output_filename, OpenSSLCertificate|array|string $certificate, array $headers, int $flags = 0, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC)

return $return_openssl_pkcs7_encrypt; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_ENCRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_READ
// ============================== OFFLINE
// ============================== ABOUT
// Export the PKCS7 file to an array of PEM certificates.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs7_read() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pkcs7_read($data, & $certificates)
{
$return_openssl_pkcs7_read = false;

// ========== OPENSSL_PKCS7_READ - BEGIN
// ===== ABOUT
// Export the PKCS7 file to an array of PEM certificates
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// openssl_pkcs7_read(string $data, array &$certificates): bool
// ===== CODE
$return_openssl_pkcs7_read = openssl_pkcs7_read(

$data, // string data - The string of data you wish to parse (p7b format).

$certificates // array certificates - The array of PEM certificates from the p7b input data.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Get a PEM array from a P7B file
// [php]
// 
// $file = 'certs.p7b';
// 
// $f = file_get_contents($file);
// $p7 = array();
// $r = openssl_pkcs7_read($f, $p7);
// 
// if ($r === false) {
//     printf("ERROR: %s is not a proper p7b file".PHP_EOL, $file);
//         for($e = openssl_error_string(), $i = 0; $e; $e = openssl_error_string(), $i++)
//             printf("SSL l%d: %s".PHP_EOL, $i, $e);
//     exit(1);
// }
// 
// print_r($p7);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkcs7-read.php
// ========== OPENSSL_PKCS7_READ - END

// SYNTAX:
// bool openssl_pkcs7_read(string $data, array& $certificates)

return $return_openssl_pkcs7_read; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_READ
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_SIGN
// ============================== PUBLIC
// ============================== ABOUT
// Sign an S/MIME message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs7_sign() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// PKCS7_DETACHED - openssl_pkcs7_sign()
// ============================== CODE
function php_cryptography_openssl_openssl_pkcs7_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags = PKCS7_DETACHED, $untrusted_certificates_filename = null)
{
$return_openssl_pkcs7_sign = false;

// ========== OPENSSL_PKCS7_SIGN - BEGIN
// ===== ABOUT
// Sign an S/MIME message
// ===== DESCRIPTION
// openssl_pkcs7_sign() takes the contents of the file named input_filename and signs them using the certificate and its matching private key specified by certificate and private_key parameters.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs7_sign(
//    string $input_filename,
//    string $output_filename,
//    OpenSSLCertificate|string $certificate,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    ?array $headers,
//    int $flags = PKCS7_DETACHED,
//    ?string $untrusted_certificates_filename = null
// ): bool
// ===== CODE
$return_openssl_pkcs7_sign = openssl_pkcs7_sign(

$input_filename, // string input_filename - The input file you are intending to digitally sign.

$output_filename, // string output_filename - The file which the digital signature will be written to.

$certificate, // OpenSSLCertificate|string certificate - The X.509 certificate used to digitally sign input_filename. See Key/Certificate parameters for a list of valid values.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - private_key is the private key corresponding to certificate. See Public/Private Key parameters for a list of valid values.

$headers, // array headers - headers is an array of headers that will be prepended to the data after it has been signed (see openssl_pkcs7_encrypt() for more information about the format of this parameter).

$flags, // int flags - flags can be used to alter the output - see PKCS7 constants.

$untrusted_certificates_filename // string untrusted_certificates_filename - untrusted_certificates_filename specifies the name of a file containing a bunch of extra certificates to include in the signature which can for example be used to help the recipient to verify the certificate that you used.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 CSR was accepted.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 CSR was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_pkcs7_sign() example
// [php]
// // the message you want to sign so that recipient can be sure it was you that
// // sent it
// $data = <<<EOD
// 
// You have my authorization to spend $10,000 on dinner expenses.
// 
// The CEO
// EOD;
// // save message to file
// $fp = fopen("msg.txt", "w");
// fwrite($fp, $data);
// fclose($fp);
// // encrypt it
// if (openssl_pkcs7_sign("msg.txt", "signed.txt", "file://mycert.pem",
//     array("file://mycert.pem", "mypassphrase"),
//     array("To" => "joes@example.com", // keyed syntax
//           "From: HQ <ceo@example.com>", // indexed syntax
//           "Subject" => "Eyes only")
//     )) {
//     // message signed - send it!
//     exec(ini_get("sendmail_path") . " < signed.txt");
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkcs7-sign.php
// ========== OPENSSL_PKCS7_SIGN - END

// SYNTAX:
// bool openssl_pkcs7_sign(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, array $headers, int $flags = PKCS7_DETACHED, string $untrusted_certificates_filename = null)

return $return_openssl_pkcs7_sign; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_SIGN
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_VERIFY
// ============================== PUBLIC
// ============================== ABOUT
// Verifies the signature of an S/MIME signed message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkcs7_verify() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkcs7_verify($input_filename, $flags, $signers_certificates_filename = null, $ca_info = array(), $untrusted_certificates_filename = null, $content = null, $output_filename = null)
{
$return_openssl_pkcs7_verify = false;

// ========== OPENSSL_PKCS7_VERIFY - BEGIN
// ===== ABOUT
// Verifies the signature of an S/MIME signed message
// ===== DESCRIPTION
// openssl_pkcs7_verify() reads the S/MIME message contained in the given file and examines the digital signature.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkcs7_verify(
//    string $input_filename,
//    int $flags,
//    ?string $signers_certificates_filename = null,
//    array $ca_info = [],
//    ?string $untrusted_certificates_filename = null,
//    ?string $content = null,
//    ?string $output_filename = null
// ): bool|int
// ===== CODE
$return_openssl_pkcs7_verify = openssl_pkcs7_verify(

$input_filename, // string input_filename - Path to the message.

$flags, // int flags - flags can be used to affect how the signature is verified - see PKCS7 constants for more information.

$signers_certificates_filename, // string signers_certificates_filename - If the signers_certificates_filename is specified, it should be a string holding the name of a file into which the certificates of the persons that signed the messages will be stored in PEM format.

$ca_info, // array ca_info - If the ca_info is specified, it should hold information about the trusted CA certificates to use in the verification process - see certificate verification for more information about this parameter.

$untrusted_certificates_filename, // string untrusted_certificates_filename - If the untrusted_certificates_filename is specified, it is the filename of a file containing a bunch of certificates to use as untrusted CAs.

$content, // string content - You can specify a filename with content that will be filled with the verified data, but with the signature information stripped.

$output_filename // string output_filename

); // Return Values
// Returns true if the signature is verified, false if it is not correct (the message has been tampered with, or the signing certificate is invalid), or -1 on error.
// 
// Changelog
// Version - Description
// 8.0.0   - signers_certificates_filename, untrusted_certificates_filename, content and output_filename are nullable now.
// 7.2.0   - The output_filename parameter was added.
// 
// Notes
// Note: As specified in RFC 2045, lines may not be longer than 76 characters in the input_filename parameter.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-12)
// URL: https://www.php.net/manual/en/function.openssl-pkcs7-verify.php
// ========== OPENSSL_PKCS7_VERIFY - END

// SYNTAX:
// bool|int openssl_pkcs7_verify(string $input_filename, int $flags, string $signers_certificates_filename = null, array $ca_info = array(), string $untrusted_certificates_filename = null, string $content = null, string $output_filename = null)

return $return_openssl_pkcs7_verify; // bool|int
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKCS7_VERIFY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_DERIVE
// ============================== OFFLINE
// ============================== ABOUT
// Computes shared secret for public value of remote and local DH or ECDH key.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_derive() - PHP_7 >= PHP_7_3_0, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pkey_derive($public_key, $private_key, $key_length = 0)
{
$return_openssl_pkey_derive = false;

// ========== OPENSSL_PKEY_DERIVE - BEGIN
// ===== ABOUT
// Computes shared secret for public value of remote and local DH or ECDH key
// ===== DESCRIPTION
// openssl_pkey_derive() takes a set of a public_key and private_key and derives a shared secret, for either DH or EC keys.
// ===== SUPPORTED
// PHP_7 >= PHP_7_3_0, PHP_8
// ===== SYNTAX
// openssl_pkey_derive(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $key_length = 0): string|false
// ===== CODE
$return_openssl_pkey_derive = openssl_pkey_derive(

$public_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - public_key is the public key for the derivation. See Public/Private Key parameters for a list of valid values.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - private_key is the private key for the derivation. See Public/Private Key parameters for a list of valid values.

$key_length // int key_length - If not zero, will set the desired length of the derived secret.

); // Return Values
// The derived secret on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_pkey_derive() example
// [php]
// // Load in private key
// $priv = openssl_pkey_get_private("-----BEGIN PRIVATE KEY-----
// MIICJgIBADCCARcGCSqGSIb3DQEDATCCAQgCggEBAJLxRCaZ933uW+AXmabHFDDy
// upojBIRlbmQLJZfigDaSA1f9YOTsIv+WwVFTX/J1mtCyx9uBcz0Nt2kmVwxWuc2f
// VtCEMPsmLsVXX7xRUFLpyX1Y1IYGBVXQOoOvLWYQjpZgnx47Pkh1Ok1+smffztfC
// 0DCNt4KorWrbsPcmqBejXHN79KvWFjZmXOksRiNu/Bn76RiqvofC4z8Ri3kHXQG2
// 197JGZzzFXHadGC3xbkg8UxsNbYhVMKbm0iANfafUH7/hoS9UjAVQYtvwe7YNiW/
// HnyfVCrKwcc7sadd8Iphh+3lf5P1AhaQEAMytanrzq9RDXKBxuvpSJifRYasZYsC
// AQIEggEEAoIBAGwAYC2E81Y1U2Aox0U7u1+vBcbht/OO87tutMvc4NTLf6NLPHsW
// cPqBixs+3rSn4fADzAIvdLBmogjtiIZoB6qyHrllF/2xwTVGEeYaZIupQH3bMK2b
// 6eUvnpuu4Ytksiz6VpXBBRMrIsj3frM+zUtnq8vKUr+TbjV2qyKR8l3eNDwzqz30
// dlbKh9kIhZafclHfRVfyp+fVSKPfgrRAcLUgAbsVjOjPeJ90xQ4DTMZ6vjiv6tHM
// hkSjJIcGhRtSBzVF/cT38GyCeTmiIA/dRz2d70lWrqDQCdp9ArijgnpjNKAAulSY
// CirnMsGZTDGmLOHg4xOZ5FEAzZI2sFNLlcw=
// -----END PRIVATE KEY-----
// ");
// 
// // Load in public key
// $pub = openssl_pkey_get_public("-----BEGIN PUBLIC KEY-----
// MIICJDCCARcGCSqGSIb3DQEDATCCAQgCggEBAJLxRCaZ933uW+AXmabHFDDyupoj
// BIRlbmQLJZfigDaSA1f9YOTsIv+WwVFTX/J1mtCyx9uBcz0Nt2kmVwxWuc2fVtCE
// MPsmLsVXX7xRUFLpyX1Y1IYGBVXQOoOvLWYQjpZgnx47Pkh1Ok1+smffztfC0DCN
// t4KorWrbsPcmqBejXHN79KvWFjZmXOksRiNu/Bn76RiqvofC4z8Ri3kHXQG2197J
// GZzzFXHadGC3xbkg8UxsNbYhVMKbm0iANfafUH7/hoS9UjAVQYtvwe7YNiW/Hnyf
// VCrKwcc7sadd8Iphh+3lf5P1AhaQEAMytanrzq9RDXKBxuvpSJifRYasZYsCAQID
// ggEFAAKCAQAiCSBpxvGgsTorxAWtcAlSmzAJnJxFgSPef0g7OjhESytnc8G2QYmx
// ovMt5KVergcitztWh08hZQUdAYm4rI+zMlAFDdN8LWwBT/mGKSzRkWeprd8E7mvy
// ucqC1YXCMqmIwPySvLQUB/Dl8kgau7BLAnIJm8VP+MVrn8g9gghD0qRCgPgtEaDV
// vocfgnOU43rhKnIgO0cHOKtw2qybSFB8QuZrYugq4j8Bwkrzh6rdMMeyMl/ej5Aj
// c0wamOzuBDtXt0T9+Fx3khHaowjCc7xJZRgZCxg43SbqMWJ9lUg94I7+LTX61Gyv
// dtlkbGbtoDOnxeNnN93gwQZngGYZYciu
// -----END PUBLIC KEY-----
// ");
// 
// // Outputs the hex version of the derived key
// echo bin2hex(openssl_pkey_derive($pub,$priv));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkey-derive.php
// ========== OPENSSL_PKEY_DERIVE - END

// SYNTAX:
// string|false openssl_pkey_derive(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $key_length = 0)

return $return_openssl_pkey_derive; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_DERIVE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_EXPORT_TO_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Gets an exportable representation of a key into a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_export_to_file() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkey_export_to_file($key, $output_filename, $passphrase = null, $options = null)
{
$return_openssl_pkey_export_to_file = false;

// ========== OPENSSL_PKEY_EXPORT_TO_FILE - BEGIN
// ===== ABOUT
// Gets an exportable representation of a key into a file
// ===== DESCRIPTION
// openssl_pkey_export_to_file() saves an ascii-armoured (PEM encoded) rendition of key into the file named by output_filename.
// Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_export_to_file(
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key,
//    string $output_filename,
//    ?string $passphrase = null,
//    ?array $options = null
// ): bool
// ===== CODE
$return_openssl_pkey_export_to_file = openssl_pkey_export_to_file(

$key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string key

$output_filename, // string output_filename - Path to the output file.

$passphrase, // string passphrase - The key can be optionally protected by a passphrase.

$options // array options - options can be used to fine-tune the export process by specifying and/or overriding options for the openssl configuration file. See openssl_csr_new() for more information about options.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-13)
// URL: https://www.php.net/manual/en/function.openssl-pkey-export-to-file.php
// ========== OPENSSL_PKEY_EXPORT_TO_FILE - END

// SYNTAX:
// bool openssl_pkey_export_to_file(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key, string $output_filename, string $passphrase = null, array $options = null)

return $return_openssl_pkey_export_to_file; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_EXPORT_TO_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_EXPORT
// ============================== PUBLIC
// ============================== ABOUT
// Gets an exportable representation of a key into a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_export() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkey_export($key, & $output, $passphrase = null, $options = null)
{
$return_openssl_pkey_export = false;

// ========== OPENSSL_PKEY_EXPORT - BEGIN
// ===== ABOUT
// Gets an exportable representation of a key into a string
// ===== DESCRIPTION
// openssl_pkey_export() exports key as a PEM encoded string and stores it into output (which is passed by reference).
// Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_export(
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key,
//    string &$output,
//    ?string $passphrase = null,
//    ?array $options = null
// ): bool
// ===== CODE
$return_openssl_pkey_export = openssl_pkey_export(

$key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string key

$output, // string output

$passphrase, // string passphrase - The key is optionally protected by passphrase.

$options // array options - options can be used to fine-tune the export process by specifying and/or overriding options for the openssl configuration file. See openssl_csr_new() for more information about options.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-13)
// URL: https://www.php.net/manual/en/function.openssl-pkey-export.php
// ========== OPENSSL_PKEY_EXPORT - END

// SYNTAX:
// bool openssl_pkey_export(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key, string& $output, string $passphrase = null, array $options = null)

return $return_openssl_pkey_export; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_EXPORT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_FREE
// ============================== PUBLIC
// ============================== ABOUT
// Frees a private key.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_free() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkey_free($key)
{
// ========== OPENSSL_PKEY_FREE - BEGIN
// ===== ABOUT
// Frees a private key
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Note: This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.
// This function frees a private key created by openssl_pkey_new().
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_free(OpenSSLAsymmetricKey $key): void
// ===== CODE
openssl_pkey_free(

$key // OpenSSLAsymmetricKey key - Resource holding the key.

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is now deprecated as it doesn't have an effect anymore.
// 8.0.0   - key accepts an OpenSSLAsymmetricKey now; previously, a resource of type OpenSSL key was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-13)
// URL: https://www.php.net/manual/en/function.openssl-pkey-free.php
// ========== OPENSSL_PKEY_FREE - END

// SYNTAX:
// void openssl_pkey_free(OpenSSLAsymmetricKey $key)

// Return: void
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_FREE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_DETAILS
// ============================== OFFLINE
// ============================== ABOUT
// Returns an array with the key details.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_get_details() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_pkey_get_details($key)
{
$return_openssl_pkey_get_details = false;

// ========== OPENSSL_PKEY_GET_DETAILS - BEGIN
// ===== ABOUT
// Returns an array with the key details
// ===== DESCRIPTION
// This function returns the key details (bits, key, type).
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_get_details(OpenSSLAsymmetricKey $key): array|false
// ===== CODE
$return_openssl_pkey_get_details = openssl_pkey_get_details(

$key // OpenSSLAsymmetricKey key - Resource holding the key.

); // Return Values
// Returns an array with the key details on success or false on failure. Returned array has indexes bits (number of bits), key (string representation of the public key) and type (type of the key which is one of OPENSSL_KEYTYPE_RSA, OPENSSL_KEYTYPE_DSA, OPENSSL_KEYTYPE_DH, OPENSSL_KEYTYPE_EC or -1 meaning unknown).
// Depending on the key type used, additional details may be returned. Note that some elements may not always be available.
// * OPENSSL_KEYTYPE_RSA, an additional array key named "rsa", containing the key data is returned.
// Key    - Description
// "n"    - modulus
// "e"    - public exponent
// "d"    - private exponent
// "p"    - prime 1
// "q"    - prime 2
// "dmp1" - exponent1, d mod (p-1)
// "dmq1" - exponent2, d mod (q-1)
// "iqmp" - coefficient, (inverse of q) mod p
// * OPENSSL_KEYTYPE_DSA, an additional array key named "dsa", containing the key data is returned.
// Key        - Description
// "p"        - prime number (public)
// "q"        - 160-bit subprime, q | p-1 (public)
// "g"        - generator of subgroup (public)
// "priv_key" - private key x
// "pub_key"  - public key y = g^x
// * OPENSSL_KEYTYPE_DH, an additional array key named "dh", containing the key data is returned.
// Key        - Description
// "p"        - prime number (shared)
// "g"        - generator of Z_p (shared)
// "priv_key" - private DH value x
// "pub_key"  - public DH value g^x
// * OPENSSL_KEYTYPE_EC, an additional array key named "ec", containing the key data is returned.
// Key          - Description
// "curve_name" - name of curve, see openssl_get_curve_names()
// "curve_oid"  - ASN1 Object identifier (OID) for EC curve.
// "x"          - x coordinate (public)
// "y"          - y coordinate (public)
// "d"          - private key
// 
// Changelog
// Version - Description
// 8.0.0   - key accepts an OpenSSLAsymmetricKey now; previously, a resource of type OpenSSL key was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-14)
// URL: https://www.php.net/manual/en/function.openssl-pkey-get-details.php
// ========== OPENSSL_PKEY_GET_DETAILS - END

// SYNTAX:
// array|false openssl_pkey_get_details(OpenSSLAsymmetricKey $key)

return $return_openssl_pkey_get_details; // array|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_DETAILS
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_PRIVATE
// ============================== PUBLIC
// ============================== ABOUT
// Get a private key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_get_private() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkey_get_private($private_key, $passphrase = null)
{
$return_openssl_pkey_get_private = false;

// ========== OPENSSL_PKEY_GET_PRIVATE - BEGIN
// ===== ABOUT
// Get a private key
// ===== DESCRIPTION
// openssl_pkey_get_private() parses private_key and prepares it for use by other functions.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_get_private(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, ?string $passphrase = null): OpenSSLAsymmetricKey|false
// ===== CODE
$return_openssl_pkey_get_private = openssl_pkey_get_private(

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - private_key can be one of the following:
// 1. a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/private key (it may contain both).
// 2. A PEM formatted private key.

$passphrase // string passphrase - The optional parameter passphrase must be used if the specified key is encrypted (protected by a passphrase).

); // Return Values
// Returns an OpenSSLAsymmetricKey instance on success, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was returned.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// 8.0.0   - passphrase is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-pkey-get-private.php
// ========== OPENSSL_PKEY_GET_PRIVATE - END

// SYNTAX:
// OpenSSLAsymmetricKey|false openssl_pkey_get_private(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string $passphrase = null)

return $return_openssl_pkey_get_private; // OpenSSLAsymmetricKey|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_PRIVATE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_PUBLIC
// ============================== PUBLIC
// ============================== ABOUT
// Extract public key from certificate and prepare it for use.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_get_public() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkey_get_public($public_key)
{
$return_openssl_pkey_get_public = false;

// ========== OPENSSL_PKEY_GET_PUBLIC - BEGIN
// ===== ABOUT
// Extract public key from certificate and prepare it for use
// ===== DESCRIPTION
// openssl_pkey_get_public() extracts the public key from public_key and prepares it for use by other functions.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_get_public(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key): OpenSSLAsymmetricKey|false
// ===== CODE
$return_openssl_pkey_get_public = openssl_pkey_get_public(

$public_key // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - public_key can be one of the following:
// 1. an OpenSSLAsymmetricKey instance
// 2. a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/public key (it may contain both).
// 3. A PEM formatted public key.

); // Return Values
// Returns an OpenSSLAsymmetricKey instance on success, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was returned.
// 8.0.0   - public_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-10)
// URL: https://www.php.net/manual/en/function.openssl-pkey-get-public.php
// ========== OPENSSL_PKEY_GET_PUBLIC - END

// SYNTAX:
// OpenSSLAsymmetricKey|false openssl_pkey_get_public(OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)

return $return_openssl_pkey_get_public; // OpenSSLAsymmetricKey|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_GET_PUBLIC
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_NEW
// ============================== PUBLIC
// ============================== ABOUT
// Generates a new private key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_pkey_new() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_pkey_new($options = null)
{
$return_openssl_pkey_new = false;

// ========== OPENSSL_PKEY_NEW - BEGIN
// ===== ABOUT
// Generates a new private key
// ===== DESCRIPTION
// openssl_pkey_new() generates a new private key. How to obtain the public component of the key is shown in an example below.
// Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_pkey_new(?array $options = null): OpenSSLAsymmetricKey|false
// ===== CODE
$return_openssl_pkey_new = openssl_pkey_new(

$options // array options - You can finetune the key generation (such as specifying the number of bits) using options. See openssl_csr_new() for more information about options.

); // Return Values
// Returns an OpenSSLAsymmetricKey instance for the pkey on success, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was returned.
// 7.1.0   - The curve_name option was added to make it possible to create EC keys.
// 
// [examples]
// Examples
// [example]
// Example #1 Obtain the public key from a private key
// [php]
// $private_key = openssl_pkey_new();
// $public_key_pem = openssl_pkey_get_details($private_key)['key'];
// echo $public_key_pem;
// $public_key = openssl_pkey_get_public($public_key_pem);
// var_dump($public_key);
// [/php]
// The above example will output something similar to:
// [result]
// -----BEGIN PUBLIC KEY-----
// MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArZFsmN2P6rx1Xt7YV95o
// gcdlal0k3ryiIhFNzjwtRNNTXfEfBr6lUuaIJYQ8/XqEBX0hpcfuuF6tTRlonA3t
// WLME0QFD93YVsAaXcy76YqjjqcRRodIBphAbYyyMI/lXkQAdn7kbAmr7neSOsMYJ
// El9Wo4Hl4oG6e52ZnYHyqW9dxh4hX93eupR2TmcCdVf+r9xoHewP0KJYSHt7vDUX
// AQlWYcQiWHIadFsmL0orr6mutlXFReoHbesgKY9/3YLOu0JfxflSjIZ2JeL1NTl1
// MsmODsUwgAUrwnWKKx+eQUP5g3GnSB3dPkRh9zRVRiLNWbCugyjrf3e6DgQWrW7j
// pwIDAQAB
// -----END PUBLIC KEY-----
// resource(5) of type (OpenSSL key)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-pkey-new.php
// ========== OPENSSL_PKEY_NEW - END

// SYNTAX:
// OpenSSLAsymmetricKey|false openssl_pkey_new(array $options = null)

return $return_openssl_pkey_new; // OpenSSLAsymmetricKey|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PKEY_NEW
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PRIVATE_DECRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Decrypts data with private key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_private_decrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_PKCS1_PADDING - openssl_private_decrypt()
// ============================== CODE
function php_cryptography_openssl_openssl_private_decrypt($data, & $decrypted_data, $private_key, $padding = OPENSSL_PKCS1_PADDING)
{
$return_openssl_private_decrypt = false;

// ========== OPENSSL_PRIVATE_DECRYPT - BEGIN
// ===== ABOUT
// Decrypts data with private key
// ===== DESCRIPTION
// openssl_private_decrypt() decrypts data that was previously encrypted via openssl_public_encrypt() and stores the result into decrypted_data.
// You can use this function e.g. to decrypt data which is supposed to only be available to you.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_private_decrypt(
//    string $data,
//    string &$decrypted_data,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    int $padding = OPENSSL_PKCS1_PADDING
// ): bool
// ===== CODE
$return_openssl_private_decrypt = openssl_private_decrypt(

$data, // string data

$decrypted_data, // string decrypted_data

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - private_key must be the private key corresponding that was used to encrypt the data.

$padding // int padding - padding can be one of OPENSSL_PKCS1_PADDING, OPENSSL_SSLV23_PADDING, OPENSSL_PKCS1_OAEP_PADDING, OPENSSL_NO_PADDING.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-15)
// URL: https://www.php.net/manual/en/function.openssl-private-decrypt.php
// ========== OPENSSL_PRIVATE_DECRYPT - END

// SYNTAX:
// bool openssl_private_decrypt(string $data, string& $decrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $padding = OPENSSL_PKCS1_PADDING)

return $return_openssl_private_decrypt; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PRIVATE_DECRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PRIVATE_ENCRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Encrypts data with private key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_private_encrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_PKCS1_PADDING - openssl_private_encrypt()
// ============================== CODE
function php_cryptography_openssl_openssl_private_encrypt($data, & $encrypted_data, $private_key, $padding = OPENSSL_PKCS1_PADDING)
{
$return_openssl_private_encrypt = false;

// ========== OPENSSL_PRIVATE_ENCRYPT - BEGIN
// ===== ABOUT
// Encrypts data with private key
// ===== DESCRIPTION
// openssl_private_encrypt() encrypts data with private private_key and stores the result into encrypted_data. Encrypted data can be decrypted via openssl_public_decrypt().
// This function can be used e.g. to sign data (or its hash) to prove that it is not written by someone else.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_private_encrypt(
//    string $data,
//    string &$encrypted_data,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    int $padding = OPENSSL_PKCS1_PADDING
// ): bool
// ===== CODE
$return_openssl_private_encrypt = openssl_private_encrypt(

$data, // string data

$encrypted_data, // string encrypted_data

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key

$padding // int padding - padding can be one of OPENSSL_PKCS1_PADDING, OPENSSL_NO_PADDING.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-15)
// URL: https://www.php.net/manual/en/function.openssl-private-encrypt.php
// ========== OPENSSL_PRIVATE_ENCRYPT - END

// SYNTAX:
// bool openssl_private_encrypt(string $data, string& $encrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, int $padding = OPENSSL_PKCS1_PADDING)

return $return_openssl_private_encrypt; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PRIVATE_ENCRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PUBLIC_DECRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Decrypts data with public key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_public_decrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_PKCS1_PADDING - openssl_public_decrypt()
// ============================== CODE
function php_cryptography_openssl_openssl_public_decrypt($data, & $decrypted_data, $public_key, $padding = OPENSSL_PKCS1_PADDING)
{
$return_openssl_public_decrypt = false;

// ========== OPENSSL_PUBLIC_DECRYPT - BEGIN
// ===== ABOUT
// Decrypts data with public key
// ===== DESCRIPTION
// openssl_public_decrypt() decrypts data that was previous encrypted via openssl_private_encrypt() and stores the result into decrypted_data.
// You can use this function e.g. to check if the message was written by the owner of the private key.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_public_decrypt(
//    string $data,
//    string &$decrypted_data,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key,
//    int $padding = OPENSSL_PKCS1_PADDING
// ): bool
// ===== CODE
$return_openssl_public_decrypt = openssl_public_decrypt(

$data, // string data

$decrypted_data, // string decrypted_data

$public_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - public_key must be the public key corresponding that was used to encrypt the data.

$padding // int padding - padding can be one of OPENSSL_PKCS1_PADDING, OPENSSL_NO_PADDING.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - public_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-15)
// URL: https://www.php.net/manual/en/function.openssl-public-decrypt.php
// ========== OPENSSL_PUBLIC_DECRYPT - END

// SYNTAX:
// bool openssl_public_decrypt(string $data, string& $decrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, int $padding = OPENSSL_PKCS1_PADDING)

return $return_openssl_public_decrypt; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PUBLIC_DECRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PUBLIC_ENCRYPT
// ============================== PUBLIC
// ============================== ABOUT
// Encrypts data with public key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_public_encrypt() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_PKCS1_PADDING - openssl_public_encrypt()
// ============================== CODE
function php_cryptography_openssl_openssl_public_encrypt($data, & $encrypted_data, $public_key, $padding = OPENSSL_PKCS1_PADDING)
{
$return_openssl_public_encrypt = false;

// ========== OPENSSL_PUBLIC_ENCRYPT - BEGIN
// ===== ABOUT
// Encrypts data with public key
// ===== DESCRIPTION
// openssl_public_encrypt() encrypts data with public public_key and stores the result into encrypted_data. Encrypted data can be decrypted via openssl_private_decrypt().
// This function can be used e.g. to encrypt message which can be then read only by owner of the private key. It can be also used to store secure data in database.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_public_encrypt(
//    string $data,
//    string &$encrypted_data,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key,
//    int $padding = OPENSSL_PKCS1_PADDING
// ): bool
// ===== CODE
$return_openssl_public_encrypt = openssl_public_encrypt(

$data, // string data

$encrypted_data, // string encrypted_data - This will hold the result of the encryption.

$public_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - The public key.

$padding // int padding - padding can be one of OPENSSL_PKCS1_PADDING, OPENSSL_SSLV23_PADDING, OPENSSL_PKCS1_OAEP_PADDING, OPENSSL_NO_PADDING.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - public_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-15)
// URL: https://www.php.net/manual/en/function.openssl-public-encrypt.php
// ========== OPENSSL_PUBLIC_ENCRYPT - END

// SYNTAX:
// bool openssl_public_encrypt(string $data, string& $encrypted_data, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, int $padding = OPENSSL_PKCS1_PADDING)

return $return_openssl_public_encrypt; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_PUBLIC_ENCRYPT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_RANDOM_PSEUDO_BYTES
// ============================== OFFLINE
// ============================== ABOUT
// Generate a pseudo-random string of bytes.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_random_pseudo_bytes() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_random_pseudo_bytes($length, & $strong_result)
{
$return_openssl_random_pseudo_bytes = null;

// ========== OPENSSL_RANDOM_PSEUDO_BYTES - BEGIN
// ===== ABOUT
// Generate a pseudo-random string of bytes
// ===== DESCRIPTION
// Generates a string of pseudo-random bytes, with the number of bytes determined by the length parameter.
// It also indicates if a cryptographically strong algorithm was used to produce the pseudo-random bytes, and does this via the optional strong_result parameter. It's rare for this to be false, but some systems may be broken or old.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_random_pseudo_bytes(int $length, bool &$strong_result = null): string
// ===== CODE
$return_openssl_random_pseudo_bytes = openssl_random_pseudo_bytes(

$length, // int length - The length of the desired string of bytes. Must be a positive integer less than or equal to 2147483647. PHP will try to cast this parameter to a non-null integer to use it.

$strong_result // bool strong_result - If passed into the function, this will hold a bool value that determines if the algorithm used was "cryptographically strong", e.g., safe for usage with GPG, passwords, etc. true if it did, otherwise false

); // Return Values
// Returns the generated string of bytes.
// 
// Errors/Exceptions
// openssl_random_pseudo_bytes() throws an Exception on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - strong_result is nullable now.
// 7.4.0   - The function no longer returns false on failure, but throws an Exception instead.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_random_pseudo_bytes() example
// [php]
// for ($i = 1; $i <= 4; $i++) {
//     $bytes = openssl_random_pseudo_bytes($i, $cstrong);
//     $hex   = bin2hex($bytes);
// 
//     echo "Lengths: Bytes: $i and Hex: " . strlen($hex) . PHP_EOL;
//     var_dump($hex);
//     var_dump($cstrong);
//     echo PHP_EOL;
// }
// [/php]
// The above example will output something similar to:
// [result]
// Lengths: Bytes: 1 and Hex: 2
// string(2) "42"
// bool(true)
// 
// Lengths: Bytes: 2 and Hex: 4
// string(4) "dc6e"
// bool(true)
// 
// Lengths: Bytes: 3 and Hex: 6
// string(6) "288591"
// bool(true)
// 
// Lengths: Bytes: 4 and Hex: 8
// string(8) "ab86d144"
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php
// ========== OPENSSL_RANDOM_PSEUDO_BYTES - END

// SYNTAX:
// string openssl_random_pseudo_bytes(int $length, bool& $strong_result)

return $return_openssl_random_pseudo_bytes; // string
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_RANDOM_PSEUDO_BYTES
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SEAL
// ============================== PUBLIC
// ============================== ABOUT
// Seal (encrypt) data.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_seal() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_seal($data, & $sealed_data, & $encrypted_keys, $public_key, $cipher_algo, & $iv)
{
$return_openssl_seal = false;

// ========== OPENSSL_SEAL - BEGIN
// ===== ABOUT
// Seal (encrypt) data
// ===== DESCRIPTION
// openssl_seal() seals (encrypts) data by using the given cipher_algo with a randomly generated secret key. The key is encrypted with each of the public keys associated with the identifiers in public_key and each encrypted key is returned in encrypted_keys. This means that one can send sealed data to multiple recipients (provided one has obtained their public keys). Each recipient must receive both the sealed data and the envelope key that was encrypted with the recipient's public key.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_seal(
//    string $data,
//    string &$sealed_data,
//    array &$encrypted_keys,
//    array $public_key,
//    string $cipher_algo,
//    string &$iv = null
// ): int|false
// ===== CODE
$return_openssl_seal = openssl_seal(

$data, // string data - The data to seal.

$sealed_data, // string sealed_data - The sealed data.

$encrypted_keys, // array encrypted_keys - Array of encrypted keys.

$public_key, // array public_key - Array of OpenSSLAsymmetricKey instances containing public keys.

$cipher_algo, // string cipher_algo - The cipher method.
// Caution: The default value ('RC4') is considered insecure. It is strongly recommended to explicitly specify a secure cipher method.

$iv // string iv - The initialization vector.

); // Return Values
// Returns the length of the sealed data on success, or false on error. If successful the sealed data is returned in sealed_data, and the envelope keys in encrypted_keys.
// 
// Changelog
// Version - Description
// 8.0.0   - public_key accepts an array of OpenSSLAsymmetricKey instances now; previously, an array of resources of type OpenSSL key was accepted.
// 8.0.0   - cipher_algo is no longer an optional parameter.
// 8.0.0   - iv is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_seal() example
// [php]
// // $data is assumed to contain the data to be sealed
// 
// // fetch public keys for our recipients, and ready them
// $fp = fopen("/src/openssl-0.9.6/demos/maurice/cert.pem", "r");
// $cert = fread($fp, 8192);
// fclose($fp);
// $pk1 = openssl_get_publickey($cert);
// // Repeat for second recipient
// $fp = fopen("/src/openssl-0.9.6/demos/sign/cert.pem", "r");
// $cert = fread($fp, 8192);
// fclose($fp);
// $pk2 = openssl_get_publickey($cert);
// 
// // seal message, only owners of $pk1 and $pk2 can decrypt $sealed with keys
// // $ekeys[0] and $ekeys[1] respectively.
// openssl_seal($data, $sealed, $ekeys, array($pk1, $pk2));
// 
// // free the keys from memory
// openssl_free_key($pk1);
// openssl_free_key($pk2);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-seal.php
// ========== OPENSSL_SEAL - END

// SYNTAX:
// int|false openssl_seal(string $data, string& $sealed_data, array& $encrypted_keys, array $public_key, string $cipher_algo, string& $iv)

return $return_openssl_seal; // int|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SEAL
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SIGN
// ============================== PUBLIC
// ============================== ABOUT
// Generate signature.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_sign() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_ALGO_SHA1 - openssl_sign()
// ============================== CODE
function php_cryptography_openssl_openssl_sign($data, & $signature, $private_key, $algorithm = OPENSSL_ALGO_SHA1)
{
$return_openssl_sign = false;

// ========== OPENSSL_SIGN - BEGIN
// ===== ABOUT
// Generate signature
// ===== DESCRIPTION
// openssl_sign() computes a signature for the specified data by generating a cryptographic digital signature using the private key associated with private_key. Note that the data itself is not encrypted.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_sign(
//    string $data,
//    string &$signature,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key,
//    string|int $algorithm = OPENSSL_ALGO_SHA1
// ): bool
// ===== CODE
$return_openssl_sign = openssl_sign(

$data, // string data - The string of data you wish to sign

$signature, // string signature - If the call was successful the signature is returned in signature.

$private_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - OpenSSLAsymmetricKey - a key, returned by openssl_get_privatekey()
// string - a PEM formatted key

$algorithm // string|int algorithm - int - one of these Signature Algorithms.
// string - a valid string returned by openssl_get_md_methods() example, "sha256WithRSAEncryption" or "sha384".

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_sign() example
// [php]
// // $data is assumed to contain the data to be signed
// 
// // fetch private key from file and ready it
// $pkeyid = openssl_pkey_get_private("file://src/openssl-0.9.6/demos/sign/key.pem");
// 
// // compute signature
// openssl_sign($data, $signature, $pkeyid);
// 
// // free the key from memory
// openssl_free_key($pkeyid);
// [/php]
// [/example]
// [example]
// Example #2 openssl_sign() example
// [php]
// //data you want to sign
// $data = 'my data';
// 
// //create new private and public key
// $new_key_pair = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// openssl_pkey_export($new_key_pair, $private_key_pem);
// 
// $details = openssl_pkey_get_details($new_key_pair);
// $public_key_pem = $details['key'];
// 
// //create signature
// openssl_sign($data, $signature, $private_key_pem, OPENSSL_ALGO_SHA256);
// 
// //save for later
// file_put_contents('private_key.pem', $private_key_pem);
// file_put_contents('public_key.pem', $public_key_pem);
// file_put_contents('signature.dat', $signature);
// 
// //verify signature
// $r = openssl_verify($data, $signature, $public_key_pem, "sha256WithRSAEncryption");
// var_dump($r);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-sign.php
// ========== OPENSSL_SIGN - END

// SYNTAX:
// bool openssl_sign(string $data, string& $signature, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1)

return $return_openssl_sign; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SIGN
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_EXPORT_CHALLENGE
// ============================== OFFLINE
// ============================== ABOUT
// Exports the challenge associated with a signed public key and challenge.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_spki_export_challenge() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_spki_export_challenge($spki)
{
$return_openssl_spki_export_challenge = false;

// ========== OPENSSL_SPKI_EXPORT_CHALLENGE - BEGIN
// ===== ABOUT
// Exports the challenge associated with a signed public key and challenge
// ===== DESCRIPTION
// Exports challenge from encoded signed public key and challenge
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_spki_export_challenge(string $spki): string|false
// ===== CODE
$return_openssl_spki_export_challenge = openssl_spki_export_challenge(

$spki // string spki - Expects a valid signed public key and challenge

); // Return Values
// Returns the associated challenge string or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an invalid argument is passed via the spki parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_spki_export_challenge() example
// Extracts the associated challenge string or NULL on failure.
// [php]
// $pkey = openssl_pkey_new('secret password');
// $spkac = openssl_spki_new($pkey, 'challenge string');
// $challenge = openssl_spki_export_challenge(preg_replace('/SPKAC=/', '', $spkac));
// [/php]
// [/example]
// [example]
// Example #2 openssl_spki_export_challenge() example from <keygen>
// Extracts the associated challenge string issued from the <keygen> element
// [code]
// [php]
// $challenge = openssl_spki_export_challenge(preg_replace('/SPKAC=/', '', $_POST['spkac']));
// [/php]
// <keygen name="spkac" challenge="challenge string" keytype="RSA">
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-spki-export-challenge.php
// ========== OPENSSL_SPKI_EXPORT_CHALLENGE - END

// SYNTAX:
// string|false openssl_spki_export_challenge(string $spki)

return $return_openssl_spki_export_challenge; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_EXPORT_CHALLENGE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_EXPORT
// ============================== OFFLINE
// ============================== ABOUT
// Exports a valid PEM formatted public key signed public key and challenge.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_spki_export() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_spki_export($spki)
{
$return_openssl_spki_export = false;

// ========== OPENSSL_SPKI_EXPORT - BEGIN
// ===== ABOUT
// Exports a valid PEM formatted public key signed public key and challenge
// ===== DESCRIPTION
// Exports PEM formatted public key from encoded signed public key and challenge
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_spki_export(string $spki): string|false
// ===== CODE
$return_openssl_spki_export = openssl_spki_export(

$spki // string spki - Expects a valid signed public key and challenge

); // Return Values
// Returns the associated PEM formatted public key or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an invalid argument is passed via the spki parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_spki_export() example
// Extracts the associated PEM formatted public key or null on failure.
// [php]
// $pkey = openssl_pkey_new('secret password');
// $spkac = openssl_spki_new($pkey, 'challenge string');
// $pubKey = openssl_spki_export(preg_replace('/SPKAC=/', '', $spkac));
// 
// if ($pubKey) {
//     echo $pubKey;
// }
// [/php]
// [/example]
// [example]
// Example #2 openssl_spki_export() example from <keygen>
// Extracts the associated PEM formatted public key issued from the <keygen> element
// [code]
// [php]
// $spkac = openssl_spki_export(preg_replace('/SPKAC=/', '', $_POST['spkac']));
// if ($spkac != NULL) {
//     echo $spkac;
// } else {
//     echo "Extraction of pub key failed";
// }
// [/php]
// <keygen name="spkac" challenge="challenge string" keytype="RSA">
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-spki-export.php
// ========== OPENSSL_SPKI_EXPORT - END

// SYNTAX:
// string|false openssl_spki_export(string $spki)

return $return_openssl_spki_export; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_EXPORT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_NEW
// ============================== OFFLINE
// ============================== ABOUT
// Generate a new signed public key and challenge.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_spki_new() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_ALGO_MD5 - openssl_spki_new()
// ============================== CODE
/*
function php_cryptography_openssl_openssl_spki_new($private_key, $challenge, $digest_algo = OPENSSL_ALGO_MD5)
{
$return_openssl_spki_new = false;

// ========== OPENSSL_SPKI_NEW - BEGIN
// ===== ABOUT
// Generate a new signed public key and challenge
// ===== DESCRIPTION
// Generates a signed public key and challenge using specified hashing algorithm
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_spki_new(OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = OPENSSL_ALGO_MD5): string|false
// ===== CODE
$return_openssl_spki_new = openssl_spki_new(

$private_key, // OpenSSLAsymmetricKey private_key - private_key should be set to a private key that was previously generated by openssl_pkey_new() (or otherwise obtained from the other openssl_pkey family of functions). The corresponding public portion of the key will be used to sign the CSR.

$challenge, // string challenge - The challenge associated to associate with the SPKAC

$digest_algo // int digest_algo - The digest algorithm. See openssl_get_md_method().

); // Return Values
// Returns a signed public key and challenge string or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an unknown signature algorithm is passed via the digest_algo parameter.
// 
// Changelog
// Version - Description
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey instance now; previously, a resource of type OpenSSL key was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_spki_new() example
// Generate a new SPKAC with the default digest (MD5)
// [php]
// $pkey = openssl_pkey_new('secret password');
// $spkac = openssl_spki_new($pkey, 'testing');
// 
// if ($spkac !== NULL) {
//     echo $spkac;
// } else {
//     echo "SPKAC generation failed";
// }
// [/php]
// The above example will output something similar to:
// [result]
// MIICRzCCAS8wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDM3V3sS4o4
// mB9dczziRnjGAmSp+JwPrHoYMAFGvDNmZGyiWfU586X4BKs++BAj7e/FsAfno0Hd
// hN9FwpCNFSox30L03nQvLYJE7f/WqigwBeMRT7Op/xvFks4sT70xP2HRYv4KqP9a
// WRcKU6cFH8VxhFhqM2txEIxZKdFLaL28yT7bEDmcglf4JLDdgNMb9rET1dkgtKE6
// dOaJHPGjf1uvnOH4YwkQr7n4sLUR3Kdbh0ZJAFuQVDZulo+LLzxBBkqJJcB6FhF+
// oXCdHTKZnqAhpWDz+NXYytAmevab6IYm5TWPWsJUv1YKJA5lg2mXbbloIZlN9Mgc
// i9fi03bdw+crAgMBAAEWB3Rlc3RpbmcwDQYJKoZIhvcNAQEEBQADggEBALyUvP/o
// pPSoWBlorFyZ2RnGwKf9qMpE0q2IJP7G3oDR4LyK/m933DUiZ+YnqThrH/CWb4Ek
// y5I3OCyl3S4wCuU1ibZZwDVwYShr5ELp0J9PEf7qMQZOhNsizoC7k+Czb2xB6hYW
// sKfsfTKm3cXBtH3fdgc/Z1Z7VSWnAzYo38snqm72NTf5yFRnrQdphNNXi+kn1zHA
// lxXRyFDXHOcYsOnwAWfyXFA4QDHQ0ezz0UoCY8gJXovcZb4GRYqOLUAsF2HcNboy
// 29WN8VqE29sL9QxVZFlwMcqyoLcNnyw38GvNvAGqSvzzbnEFP2MAQXJVe0H0hdp/
// MML5G2iNVgNozAo=
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-spki-new.php
// ========== OPENSSL_SPKI_NEW - END

// SYNTAX:
// string|false openssl_spki_new(OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = OPENSSL_ALGO_MD5)

return $return_openssl_spki_new; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_NEW
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_VERIFY
// ============================== OFFLINE
// ============================== ABOUT
// Verifies a signed public key and challenge.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_spki_verify() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_spki_verify($spki)
{
$return_openssl_spki_verify = false;

// ========== OPENSSL_SPKI_VERIFY - BEGIN
// ===== ABOUT
// Verifies a signed public key and challenge
// ===== DESCRIPTION
// Validates the supplied signed public key and challenge
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_spki_verify(string $spki): bool
// ===== CODE
$return_openssl_spki_verify = openssl_spki_verify(

$spki // string spki - Expects a valid signed public key and challenge

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if an invalid argument is passed via the spki parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_spki_verify() example
// Validates an existing signed public key and challenge
// [php]
// $pkey = openssl_pkey_new('secret password');
// $spkac = openssl_spki_new($pkey, 'challenge string');
// 
// if (openssl_spki_verify(preg_replace('/SPKAC=/', '', $spkac))) {
//     echo $spkac;
// } else {
//     echo "SPKAC validation failed";
// }
// [/php]
// [/example]
// [example]
// Example #2 openssl_spki_verify() example from <keygen>
// Validates an existing signed public key and challenge issued from the <keygen> element
// [code]
// [php]
// if (openssl_spki_verify(preg_replace('/SPKAC=/', '', $_POST['spkac']))) {
//     echo $spkac;
// } else {
//     echo "SPKAC validation failed";
// }
// [/php]
// <keygen name="spkac" challenge="challenge string" keytype="RSA">
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-spki-verify.php
// ========== OPENSSL_SPKI_VERIFY - END

// SYNTAX:
// bool openssl_spki_verify(string $spki)

return $return_openssl_spki_verify; // bool
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_SPKI_VERIFY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_VERIFY
// ============================== PUBLIC
// ============================== ABOUT
// Verify signature.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_verify() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// OPENSSL_ALGO_SHA1 - openssl_verify()
// ============================== CODE
function php_cryptography_openssl_openssl_verify($data, $signature, $public_key, $algorithm = OPENSSL_ALGO_SHA1)
{
$return_openssl_verify = false;

// ========== OPENSSL_VERIFY - BEGIN
// ===== ABOUT
// Verify signature
// ===== DESCRIPTION
// openssl_verify() verifies that the signature is correct for the specified data using the public key associated with public_key. This must be the public key corresponding to the private key used for signing.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_verify(
//    string $data,
//    string $signature,
//    OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key,
//    string|int $algorithm = OPENSSL_ALGO_SHA1
// ): int|false
// ===== CODE
$return_openssl_verify = openssl_verify(

$data, // string data - The string of data used to generate the signature previously

$signature, // string signature - A raw binary string, generated by openssl_sign() or similar means

$public_key, // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - OpenSSLAsymmetricKey - a key, returned by openssl_get_publickey()
// string - a PEM formatted key (e.g. -----BEGIN PUBLIC KEY----- MIIBCgK...)

$algorithm // string|int algorithm - int - one of these Signature Algorithms.
// string - a valid string returned by openssl_get_md_methods() example, "sha1WithRSAEncryption" or "sha512".

); // Return Values
// Returns 1 if the signature is correct, 0 if it is incorrect, and -1 or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - public_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_verify() example
// [php]
// // $data and $signature are assumed to contain the data and the signature
// 
// // fetch public key from certificate and ready it
// $pubkeyid = openssl_pkey_get_public("file://src/openssl-0.9.6/demos/sign/cert.pem");
// 
// // state whether signature is okay or not
// $ok = openssl_verify($data, $signature, $pubkeyid);
// if ($ok == 1) {
//     echo "good";
// } elseif ($ok == 0) {
//     echo "bad";
// } else {
//     echo "ugly, error checking signature";
// }
// // free the key from memory
// openssl_free_key($pubkeyid);
// [/php]
// [/example]
// [example]
// Example #2 openssl_verify() example
// [php]
// //data you want to sign
// $data = 'my data';
// 
// //create new private and public key
// $private_key_res = openssl_pkey_new(array(
//     "private_key_bits" => 2048,
//     "private_key_type" => OPENSSL_KEYTYPE_RSA,
// ));
// $details = openssl_pkey_get_details($private_key_res);
// $public_key_res = openssl_pkey_get_public($details['key']);
// 
// //create signature
// openssl_sign($data, $signature, $private_key_res, "sha256WithRSAEncryption");
// 
// //verify signature
// $ok = openssl_verify($data, $signature, $public_key_res, OPENSSL_ALGO_SHA256);
// if ($ok == 1) {
//     echo "valid";
// } elseif ($ok == 0) {
//     echo "invalid";
// } else {
//     echo "error: ".openssl_error_string();
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-verify.php
// ========== OPENSSL_VERIFY - END

// SYNTAX:
// int|false openssl_verify(string $data, string $signature, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1)

return $return_openssl_verify; // int|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_VERIFY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_CHECK_PRIVATE_KEY
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a private key corresponds to a certificate.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_check_private_key() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_check_private_key($certificate, $private_key)
{
$return_openssl_x509_check_private_key = false;

// ========== OPENSSL_X509_CHECK_PRIVATE_KEY - BEGIN
// ===== ABOUT
// Checks if a private key corresponds to a certificate
// ===== DESCRIPTION
// Checks whether the given private_key is the private key that corresponds to certificate.
//  Warning:
//  The function does not check if private_key is indeed a private key or not. It merely compares the public materials (e.g. exponent and modulus of an RSA key) and/or key parameters (e.g. EC params of an EC key) of a key pair.
//  This means, for example, that a public key could be given for private_key and the function may return true.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_check_private_key(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key): bool
// ===== CODE
$return_openssl_x509_check_private_key = openssl_x509_check_private_key(

$certificate, // OpenSSLCertificate|string certificate - The certificate.

$private_key // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string private_key - The private key.

); // Return Values
// Returns true if private_key is the private key that corresponds to certificate, or false otherwise.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// 8.0.0   - private_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-18)
// URL: https://www.php.net/manual/en/function.openssl-x509-check-private-key.php
// ========== OPENSSL_X509_CHECK_PRIVATE_KEY - END

// SYNTAX:
// bool openssl_x509_check_private_key(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key)

return $return_openssl_x509_check_private_key; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_CHECK_PRIVATE_KEY
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_CHECKPURPOSE
// ============================== PUBLIC
// ============================== ABOUT
// Verifies if a certificate can be used for a particular purpose.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_checkpurpose() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_checkpurpose($certificate, $purpose, $ca_info = array(), $untrusted_certificates_file = null)
{
$return_openssl_x509_checkpurpose = false;

// ========== OPENSSL_X509_CHECKPURPOSE - BEGIN
// ===== ABOUT
// Verifies if a certificate can be used for a particular purpose
// ===== DESCRIPTION
// openssl_x509_checkpurpose() examines a certificate to see if it can be used for the specified purpose.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_checkpurpose(
//    OpenSSLCertificate|string $certificate,
//    int $purpose,
//    array $ca_info = [],
//    ?string $untrusted_certificates_file = null
// ): bool|int
// ===== CODE
$return_openssl_x509_checkpurpose = openssl_x509_checkpurpose(

$certificate, // OpenSSLCertificate|string certificate - The examined certificate.

$purpose, // int purpose - openssl_x509_checkpurpose() purposes
// Constant                   - Description
// X509_PURPOSE_SSL_CLIENT    - Can the certificate be used for the client side of an SSL connection?
// X509_PURPOSE_SSL_SERVER    - Can the certificate be used for the server side of an SSL connection?
// X509_PURPOSE_NS_SSL_SERVER - Can the cert be used for Netscape SSL server?
// X509_PURPOSE_SMIME_SIGN    - Can the cert be used to sign S/MIME email?
// X509_PURPOSE_SMIME_ENCRYPT - Can the cert be used to encrypt S/MIME email?
// X509_PURPOSE_CRL_SIGN      - Can the cert be used to sign a certificate revocation list (CRL)?
// X509_PURPOSE_ANY           - Can the cert be used for Any/All purposes?
// These options are not bitfields - you may specify one only!

$ca_info, // array ca_info - ca_info should be an array of trusted CA files/dirs as described in Certificate Verification.

$untrusted_certificates_file // string untrusted_certificates_file - If specified, this should be the name of a PEM encoded file holding certificates that can be used to help verify the certificate, although no trust is placed in the certificates that come from that file.

); // Return Values
// Returns true if the certificate can be used for the intended purpose, false if it cannot, or -1 on error.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// 8.0.0   - untrusted_certificates_file is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-checkpurpose.php
// ========== OPENSSL_X509_CHECKPURPOSE - END

// SYNTAX:
// bool|int openssl_x509_checkpurpose(OpenSSLCertificate|string $certificate, int $purpose, array $ca_info = array(), string $untrusted_certificates_file = null)

return $return_openssl_x509_checkpurpose; // bool|int
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_CHECKPURPOSE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_EXPORT_TO_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Exports a certificate to file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_export_to_file() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_export_to_file($certificate, $output_filename, $no_text = true)
{
$return_openssl_x509_export_to_file = false;

// ========== OPENSSL_X509_EXPORT_TO_FILE - BEGIN
// ===== ABOUT
// Exports a certificate to file
// ===== DESCRIPTION
// openssl_x509_export_to_file() stores certificate into a file named by output_filename in a PEM encoded format.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true): bool
// ===== CODE
$return_openssl_x509_export_to_file = openssl_x509_export_to_file(

$certificate, // OpenSSLCertificate|string x509 - See Key/Certificate parameters for a list of valid values.

$output_filename, // string output_filename - Path to the output file.

$no_text // bool no_text - The optional parameter notext affects the verbosity of the output; if it is false, then additional human-readable information is included in the output. The default value of notext is true.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-export-to-file.php
// ========== OPENSSL_X509_EXPORT_TO_FILE - END

// SYNTAX:
// bool openssl_x509_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true)

return $return_openssl_x509_export_to_file; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_EXPORT_TO_FILE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_EXPORT
// ============================== PUBLIC
// ============================== ABOUT
// Exports a certificate as a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_export() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_export($certificate, & $output, $no_text = true)
{
$return_openssl_x509_export = false;

// ========== OPENSSL_X509_EXPORT - BEGIN
// ===== ABOUT
// Exports a certificate as a string
// ===== DESCRIPTION
// openssl_x509_export() stores certificate into a string named by output in a PEM encoded format.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_export(OpenSSLCertificate|string $certificate, string &$output, bool $no_text = true): bool
// ===== CODE
$return_openssl_x509_export = openssl_x509_export(

$certificate, // OpenSSLCertificate|string x509 - See Key/Certificate parameters for a list of valid values.

$output, // string output - On success, this will hold the PEM.

$no_text // bool no_text - The optional parameter notext affects the verbosity of the output; if it is false, then additional human-readable information is included in the output. The default value of notext is true.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-export.php
// ========== OPENSSL_X509_EXPORT - END

// SYNTAX:
// bool openssl_x509_export(OpenSSLCertificate|string $certificate, string& $output, bool $no_text = true)

return $return_openssl_x509_export; // bool
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_EXPORT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_FINGERPRINT
// ============================== OFFLINE
// ============================== ABOUT
// Calculates the fingerprint, or digest, of a given X.509 certificate.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_fingerprint() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_x509_fingerprint($certificate, $digest_algo = "sha1", $binary = false)
{
$return_openssl_x509_fingerprint = false;

// ========== OPENSSL_X509_FINGERPRINT - BEGIN
// ===== ABOUT
// Calculates the fingerprint, or digest, of a given X.509 certificate
// ===== DESCRIPTION
// openssl_x509_fingerprint() returns the digest of certificate as a string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_fingerprint(OpenSSLCertificate|string $certificate, string $digest_algo = "sha1", bool $binary = false): string|false
// ===== CODE
$return_openssl_x509_fingerprint = openssl_x509_fingerprint(

$certificate, // OpenSSLCertificate|string x509 - See Key/Certificate parameters for a list of valid values.

$digest_algo, // string digest_algo - The digest method or hash algorithm to use, e.g. "sha256", one of openssl_get_md_methods().

$binary // bool binary - When set to true, outputs raw binary data. false outputs lowercase hexits.

); // Return Values
// Returns a string containing the calculated certificate fingerprint as lowercase hexits unless binary is set to true in which case the raw binary representation of the message digest is returned.
// Returns false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-fingerprint.php
// ========== OPENSSL_X509_FINGERPRINT - END

// SYNTAX:
// string|false openssl_x509_fingerprint(OpenSSLCertificate|string $certificate, string $digest_algo = "sha1", bool $binary = false)

return $return_openssl_x509_fingerprint; // string|false
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_FINGERPRINT
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_FREE
// ============================== PUBLIC
// ============================== ABOUT
// Free certificate resource.
// 
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_free() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_free($certificate)
{

// ========== OPENSSL_X509_FREE - BEGIN
// ===== ABOUT
// Free certificate resource
// Warning: This function has been DEPRECATED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Note: This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.
// openssl_x509_free() frees the certificate associated with the specified certificate resource from memory.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_free(OpenSSLCertificate $certificate): void
// ===== CODE
openssl_x509_free(

$certificate // OpenSSLCertificate certificate

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - This function is now deprecated as it doesn't have an effect anymore.
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-free.php
// ========== OPENSSL_X509_FREE - END

// SYNTAX:
// void openssl_x509_free(OpenSSLCertificate $certificate)

// Return: void
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_FREE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_PARSE
// ============================== PUBLIC
// ============================== ABOUT
// Parse an X509 certificate and return the information as an array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_parse() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_parse($certificate, $short_names = true)
{
$return_openssl_x509_parse = false;

// ========== OPENSSL_X509_PARSE - BEGIN
// ===== ABOUT
// Parse an X509 certificate and return the information as an array
// ===== DESCRIPTION
// openssl_x509_parse() returns information about the supplied certificate, including fields such as subject name, issuer name, purposes, valid from and valid to dates etc.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_parse(OpenSSLCertificate|string $certificate, bool $short_names = true): array|false
// ===== CODE
$return_openssl_x509_parse = openssl_x509_parse(

$certificate, // OpenSSLCertificate|string certificate - X509 certificate. See Key/Certificate parameters for a list of valid values.

$short_names // bool short_names - short_names controls how the data is indexed in the array - if short_names is true (the default) then fields will be indexed with the short name form, otherwise, the long name form will be used - e.g.: CN is the shortname form of commonName.

); // Return Values
// The structure of the returned data is (deliberately) not yet documented, as it is still subject to change.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-parse.php
// ========== OPENSSL_X509_PARSE - END

// SYNTAX:
// array|false openssl_x509_parse(OpenSSLCertificate|string $certificate, bool $short_names = true)

return $return_openssl_x509_parse; // array|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_PARSE
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_READ
// ============================== PUBLIC
// ============================== ABOUT
// Parse an X.509 certificate and return an object for it.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_read() - PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_cryptography_openssl_openssl_x509_read($certificate)
{
$return_openssl_x509_read = false;

// ========== OPENSSL_X509_READ - BEGIN
// ===== ABOUT
// Parse an X.509 certificate and return an object for it
// ===== DESCRIPTION
// openssl_x509_read() parses the certificate supplied by certificate and returns an OpenSSLCertificate object for it.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// openssl_x509_read(OpenSSLCertificate|string $certificate): OpenSSLCertificate|false
// ===== CODE
$return_openssl_x509_read = openssl_x509_read(

$certificate // OpenSSLCertificate|string certificate - X509 certificate. See Key/Certificate parameters for a list of valid values.

); // Return Values
// Returns an OpenSSLCertificate on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - On success, this function returns an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was returned.
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-19)
// URL: https://www.php.net/manual/en/function.openssl-x509-read.php
// ========== OPENSSL_X509_READ - END

// SYNTAX:
// OpenSSLCertificate|false openssl_x509_read(OpenSSLCertificate|string $certificate)

return $return_openssl_x509_read; // OpenSSLCertificate|false
}
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_READ
// ==============================


// ============================== BEGIN
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_VERIFY
// ============================== OFFLINE
// ============================== ABOUT
// Verifies digital signature of x509 certificate against a public key.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// openssl_x509_verify() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
/*
function php_cryptography_openssl_openssl_x509_verify(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)
{
$return_openssl_x509_verify = -1;

// ========== OPENSSL_X509_VERIFY - BEGIN
// ===== ABOUT
// Verifies digital signature of x509 certificate against a public key
// ===== DESCRIPTION
// openssl_x509_verify() verifies that the certificate certificate was signed by the private key corresponding to public key public_key.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// openssl_x509_verify(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key): int
// ===== CODE
$return_openssl_x509_verify = openssl_x509_verify(

$certificate, // OpenSSLCertificate|string x509 - See Key/Certificate parameters for a list of valid values.

$public_key // OpenSSLAsymmetricKey|OpenSSLCertificate|array|string public_key - OpenSSLAsymmetricKey - a key, returned by openssl_get_publickey()
// string - a PEM formatted key (e.g. -----BEGIN PUBLIC KEY----- MIIBCgK...)

); // Return Values
// Returns 1 if the signature is correct, 0 if it is incorrect, and -1 on error.
// 
// Changelog
// Version - Description
// 8.0.0   - certificate accepts an OpenSSLCertificate instance now; previously, a resource of type OpenSSL X.509 was accepted.
// 8.0.0   - public_key accepts an OpenSSLAsymmetricKey or OpenSSLCertificate instance now; previously, a resource of type OpenSSL key or OpenSSL X.509 was accepted.
// 
// [examples]
// Examples
// [example]
// Example #1 openssl_x509_verify() example
// [php]
// $hostname = "news.php.net";
// $ssloptions = array(
//     "capture_peer_cert" => true, 
//     "capture_peer_cert_chain" => true, 
//     "allow_self_signed"=> false, 
//     "CN_match" => $hostname,
//     "verify_peer" => true,
//     "SNI_enabled" => true,
//     "SNI_server_name" => $hostname,
// );
//  
// $ctx = stream_context_create( array("ssl" => $ssloptions) );
// $result = stream_socket_client("ssl://$hostname:443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $ctx);
// $cont = stream_context_get_params($result);
// $x509 = $cont["options"]["ssl"]["peer_certificate"];
// $certparsed = openssl_x509_parse($x509);
// 
// foreach($cont["options"]["ssl"]["peer_certificate_chain"] as $chaincert)
// {
//     $chainparsed = openssl_x509_parse($chaincert);
//     $chain_public_key = openssl_get_publickey($chaincert);
//     $r = openssl_x509_verify($x509, $chain_public_key);   
//     if ($r==1)
//     {
//         echo $certparsed['subject']['CN'];
//         echo " was digitally signed by ";
//         echo $chainparsed['subject']['CN']."\n";
//     }
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-22)
// URL: https://www.php.net/manual/en/function.openssl-x509-verify.php
// ========== OPENSSL_X509_VERIFY - END

// SYNTAX:
// int openssl_x509_verify(OpenSSLCertificate|string $certificate, OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key)

return $return_openssl_x509_verify; // int
}
*/
// ============================== END
// PHP_CRYPTOGRAPHY_OPENSSL_OPENSSL_X509_VERIFY
// ==============================


// ============================== END
//    PHP_CRYPTOGRAPHY_OPENSSL    
// ==============================
?>