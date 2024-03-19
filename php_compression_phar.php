<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_COMPRESSION_PHAR - BEGIN
// PHP_COMPRESSION_PHAR_PHAR - void|Phar|string|array|Traversable|bool|int|PharData|null|mixed|false|SplFileInfo|resource|callable _ADDEMPTYDIR, _ADDFILE, _ADDFROMSTRING, _APIVERSION, _BUILDFROMDIRECTORY, _BUILDFROMITERATOR, _CANCOMPRESS, _CANWRITE, _COMPRESS, _COMPRESSFILES, _CONSTRUCT, _CONVERTTODATA, _CONVERTTOEXECUTABLE, _COPY, _COUNT, _CREATEDEFAULTSTUB, _DECOMPRESS, _DECOMPRESSFILES, _DELMETADATA, _DELETE, _DESTRUCT, _EXTRACTTO, _GETALIAS, _GETMETADATA, _GETMODIFIED, _GETPATH, _GETSIGNATURE, _GETSTUB, _GETSUPPORTEDCOMPRESSION, _GETSUPPORTEDSIGNATURES, _GETVERSION, _HASMETADATA, _INTERCEPTFILEFUNCS, _ISBUFFERING, _ISCOMPRESSED, _ISFILEFORMAT, _ISVALIDPHARFILENAME, _ISWRITABLE, _LOADPHAR, _MAPPHAR, _MOUNT, _MUNGSERVER, _OFFSETEXISTS, _OFFSETGET, _OFFSETSET, _OFFSETUNSET, _RUNNING, _SETALIAS, _SETDEFAULTSTUB, _SETMETADATA, _SETSIGNATUREALGORITHM, _SETSTUB, _STARTBUFFERING, _STOPBUFFERING, _UNLINKARCHIVE, _WEBPHAR
// PHP_COMPRESSION_PHAR_PHARDATA - void|PharData|string|array|Traversable|int|Phar|bool|null|resource|mixed _ADDEMPTYDIR, _ADDFILE, _ADDFROMSTRING, _BUILDFROMDIRECTORY, _BUILDFROMITERATOR, _COMPRESS, _COMPRESSFILES, _CONSTRUCT, _CONVERTTODATA, _CONVERTTOEXECUTABLE, _COPY, _DECOMPRESS, _DECOMPRESSFILES, _DELMETADATA, _DELETE, _DESTRUCT, _EXTRACTTO, _ISWRITABLE, _OFFSETSET, _OFFSETUNSET, _SETALIAS, _SETDEFAULTSTUB, _SETMETADATA, _SETSIGNATUREALGORITHM, _SETSTUB
// PHP_COMPRESSION_PHAR_PHARFILEINFO - void|PharFileInfo|int|bool|string|mixed _CHMOD, _COMPRESS, _CONSTRUCT, _DECOMPRESS, _DELMETADATA, _DESTRUCT, _GETCRC32, _GETCOMPRESSEDSIZE, _GETCONTENT, _GETMETADATA, _GETPHARFLAGS, _HASMETADATA, _ISCRCCHECKED, _ISCOMPRESSED, _SETMETADATA
// PHP_COMPRESSION_PHAR - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== INSTALLATION
// BUNDLED (The Phar extension is bundled with PHP, and enabled by default. To disable Phar support, use --disable-phar.)
// ============================== USING FUNCTIONS (0)
// ============================== USING CLASSES (3)
// PHP_COMPRESSION_PHAR_PHAR - PHP_5 - PHP_8, PECL_phar_2_0_0
// PHP_COMPRESSION_PHAR_PHARDATA - PHP_5 - PHP_8, PECL_phar_2_0_0
// PHP_COMPRESSION_PHAR_PHARFILEINFO - PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING DATA_TYPES (15)
// void
// Phar - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// string
// array
// Traversable
// bool
// int
// PharData - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// null
// mixed
// false
// SplFileInfo
// resource
// callable
// PharFileInfo - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_COMPRESSION_PHAR      
// ============================== ABOUT
// PHP Manual / Function Reference / Compression and Archive Extensions / Phar
// URL: https://www.php.net/manual/en/book.phar.php
// ============================== DESCRIPTION
// PHAR
// 
// PHAR - BEGIN
// Phar
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// USING_PHAR_ARCHIVES
// CREATING_PHAR_ARCHIVES
// WHAT_MAKES_A_PHAR_A_PHAR_AND_NOT_A_TAR_OR_A_ZIP
// THE_PHAR_CLASS
// THE_PHARDATA_CLASS
// THE_PHARFILEINFO_CLASS
// THE_PHAREXCEPTION_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The phar extension provides a way to put entire PHP applications into a single file called a "phar" (PHP Archive) for easy distribution and installation. In addition to providing this service, the phar extension also provides a file-format abstraction method for creating and manipulating tar and zip files through the PharData class, much as PDO provides a unified interface for accessing different databases. Unlike PDO, which cannot convert between different databases, Phar also can convert between tar, zip and phar file formats with a single line of code. see Phar::convertToExecutable() for one example.
// What is phar? Phar archives are best characterized as a convenient way to group several files into a single file. As such, a phar archive provides a way to distribute a complete PHP application in a single file and run it from that file without the need to extract it to disk. Additionally, phar archives can be executed by PHP as easily as any other file, both on the commandline and from a web server. Phar is kind of like a thumb drive for PHP applications.
// [example]
// Phar implements this functionality through a Stream Wrapper. Normally, to use an external file within a PHP script, you would use include:
// Example #1 Using an external file
// [php]
// include '/path/to/external/file.php';
// [/php]
// PHP can be thought of as actually translating /path/to/external/file.php into a stream wrapper as file:///path/to/external/file.php, and under the hood it does in fact use the plain file stream wrapper stream functions to access all local files.
// [/example]
// [example]
// To use a file named file.php contained with a phar archive /path/to/myphar.phar, the syntax is very similar to the file:// syntax above.
// Example #2 Using a file within a phar archive
// [php]
// include 'phar:///path/to/myphar.phar/file.php';
// [/php]
// In fact, one can treat a phar archive exactly as if it were an external disk, using any of fopen()-related functions, opendir() and mkdir()-related functions to read, change, or create new files and directories within the phar archive. This allows complete PHP applications to be distributed in a single file and run directly from that file.
// The most common usage for a phar archive is to distribute a complete application in a single file. For instance, the PEAR Installer that is bundled with PHP versions is distributed as a phar archive. To use a phar archive distributed in this way, the archive can be executed on the command-line or via a web server.
// Phar archives can be distributed as tar archives, zip archives, or as the custom phar file format designed specifically for the phar extension. Each file format has advantages and disadvantages. The tar and zip file formats can be read or extracted by any third-party tool that can read the format, but require the phar extension in order to run with PHP. The phar file format is customized and unique to the phar extension, and can only be created by the phar extension or the PEAR package > PHP_Archive, but has the advantage that applications created in this format will run even if the phar extension is not enabled.
// In other words, even with the phar extension disabled, one can execute or include a phar-based archive. Accessing individual files within a phar archive is only possible with the phar extension unless the phar archive was created by PHP_Archive.
// [/example]
// [example]
// The phar extension is also capable of converting a phar archive from tar to zip or to phar file format in a single command:
// Example #3 Converting a phar archive from phar to tar file format
// [php]
//  $phar = new Phar('myphar.phar');
//  $pgz = $phar->convertToExecutable(Phar::TAR, Phar::GZ); // makes myphar.phar.tar.gz
// [/php]
// [/example]
// Phar can compress individual files or an entire archive using gzip compression or bzip2 compression, and can verify archive integrity automatically through the use of MD5, SHA-1, SHA-256 or SHA-512 signatures.
// Lastly, the Phar extension is security-conscious, and disables write access to executable phar archives by default, and requires system-level disabling of the phar.readonly php.ini setting in order to create or modify phar archives. Normal tar and zip archives without an executable stub can always be created or modified using the PharData class.
// If you are creating applications for distribution, you will want to read How to create Phar Archives. If you want more information on the differences between the three file formats that phar supports, you should read Phar, Tar and Zip.
// If you are using phar applications, there are helpful tips in How to use Phar Archives.
// The word phar is a portmanteau of PHP and Archive and is based loosely on the jar (Java Archive) familiar to Java developers.
// The implementation for Phar archives is based on the PEAR package > PHP_Archive, and the implementation details are similar, although the Phar extension is much more powerful. In addition, the Phar extension allows most PHP applications to be run unmodified while PHP_Archive-based phar archives often require extensive modification in order to work.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/intro.phar.php
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
// You may optionally wish to enable the zlib and bzip2 extensions to take advantage of compressed phar support. In addition, to take advantage of OpenSSL signing, the OpenSSL extension must be enabled.
// If zend.multibyte is enabled, zend.detect_unicode must be enabled as well.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// The Phar extension is bundled with PHP, and enabled by default. To disable Phar support, use --disable-phar.
// Phar may be installed via the PECL extension with previous PHP versions, and the > Phar PECL page contains further information and history.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration 
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Filesystem and Streams Configuration Options
// Name              | Default | Changeable     | Changelog
// phar.readonly     | "1"     | PHP_INI_ALL    |
// phar.require_hash | "1"     | PHP_INI_ALL    |
// phar.cache_list   | ""      | PHP_INI_SYSTEM |
// 
// Here's a short explanation of the configuration directives.
// 
// phar.readonly bool     - This option disables creation or modification of Phar archives using the phar stream or Phar object's write support. This setting should always be enabled on production machines, as the phar extension's convenient write support could allow straightforward creation of a php-based virus when coupled with other common security vulnerabilities.
// Note: This setting can only be unset in php.ini due to security reasons. If phar.readonly is disabled in php.ini, the user may enable phar.readonly in a script or disable it later. If phar.readonly is enabled in php.ini, a script may harmlessly "re-enable" the INI variable, but may not disable it.
// phar.require_hash bool - This option will force all opened Phar archives to contain some kind of signature (currently MD5, SHA1, SHA256, SHA512 and OpenSSL are supported), and will refuse to process any Phar archive that does not contain a signature.
//  Note:
//  This setting can only be unset in php.ini. If phar.require_hash is disabled in php.ini, the user may enable phar.require_hash in a script or disable it later. If phar.require_hash is enabled in php.ini, a script may harmlessly "re-enable" the INI variable, but may not disable it.
//  This setting does not affect reading plain tar files with the PharData class.
// Caution: phar.require_hash does not provide any security per se, it is merely a measure against running accidentially corrupted Phar archives, because anyone who would be able to tamper with the Phar could easily fix the signature afterwards.
// phar.cache_list string - Allows mapping phar archives to be pre-parsed at web server startup, providing a performance improvement that brings running files out of a phar archive very close to the speed of running those files from a traditional disk-based installation.
// [example]
// Example #1 phar.cache_list usage example
// [code]
// in php.ini (windows):
// phar.cache_list =C:\path\to\phar1.phar;C:\path\to\phar2.phar
// in php.ini (unix):
// phar.cache_list =/path/to/phar1.phar:/path/to/phar2.phar
// [/code]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// The Phar extension provides the phar stream, which allows accessing files contained within a phar transparently. See also the description of the Phar file format.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// Phar compression constants
// Constant               | Value      | Description
// Phar::NONE (int)       | 0x00000000 | no compression
// Phar::COMPRESSED (int) | 0x0000F000 | bitmask that can be used with file flags to determine if any compression is present
// Phar::GZ (int)         | 0x00001000 | zlib (gzip) compression
// Phar::BZ2 (int)        | 0x00002000 | bzip2 compression
// 
// Phar file format constants
// Constant         | Value | Description
// Phar::PHAR (int) | 1     | phar file format
// Phar::TAR (int)  | 2     | tar file format
// Phar::ZIP (int)  | 3     | zip file format
// 
// Phar signature constants
// Constant                   | Value  | Description
// Phar::MD5 (int)            | 0x0001 | signature with md5 hash algorithm
// Phar::SHA1 (int)           | 0x0002 | signature with sha1 hash algorithm
// Phar::SHA256 (int)         | 0x0003 | signature with sha256 hash algorithm (requires hash extension)
// Phar::SHA512 (int)         | 0x0004 | signature with sha512 hash algorithm (requires hash extension)
// Phar::OPENSSL (int)        | 0x0010 | signature with OpenSSL public/private key pair. This is a true, asymmetric key signature.
// Phar::OPENSSL_SHA256 (int) |        |
// Phar::OPENSSL_SHA512 (int) |        |
// 
// Phar webPhar mime override constants
// Constant         | Value | Description
// Phar::PHP (int)  | 0     | used to instruct the mimeoverrides parameter of Phar::webPhar() that the extension should be parsed as a PHP file
// Phar::PHPS (int) | 1     | used to instruct the mimeoverrides parameter of Phar::webPhar() that the extension should be parsed as a PHP source file through highlight_file()
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.constants.php
// PREDEFINED_CONSTANTS - END
// 
// USING_PHAR_ARCHIVES - BEGIN
// Using Phar Archives
// 
// USING_PHAR_ARCHIVES_INTRODUCTION
// USING_PHAR_ARCHIVES_THE_PHAR_STREAM_WRAPPER
// USING_PHAR_ARCHIVES_THE_PHAR_AND_PHARDATA_CLASS
// 
// Table of Contents
// * Using Phar Archives: Introduction
// * Using Phar Archives: the phar stream wrapper
// * Using Phar Archives: the Phar and PharData class
// 
// USING_PHAR_ARCHIVES_INTRODUCTION - BEGIN
// Using Phar Archives: Introduction
// 
// Phar archives are similar in concept to Java JAR archives, but are tailored to the needs and to the flexibility of PHP applications. A Phar archive is used to distribute a complete PHP application or library in a single file. A Phar archive application is used exactly like any other PHP application:
// [code]
// php coolapplication.phar
// [/code]
// Using a Phar archive library is identical to using any other PHP library:
// [php]
// include 'coollibrary.phar';
// 
// [/php]
// The phar stream wrapper provides the core of the phar extension, and is explained in detail here. The phar stream wrapper allows accessing the files within a phar archive using PHP's standard file functions fopen(), opendir(), and others that work on regular files. The phar stream wrapper supports all read/write operations on both files and directories.
// [php]
// include 'phar://coollibrary.phar/internal/file.php';
// header('Content-type: image/jpeg');
// // phars can be accessed by full path or by alias
// echo file_get_contents('phar:///fullpath/to/coollibrary.phar/images/wow.jpg');
// [/php]
// The Phar class implements advanced functionality for accessing files and for creating phar archives. The Phar class is explained in detail here.
// [php]
// try {
//     // open an existing phar
//     $p = new Phar('coollibrary.phar', 0);
//     // Phar extends SPL's DirectoryIterator class
//     foreach (new RecursiveIteratorIterator($p) as $file) {
//         // $file is a PharFileInfo class, and inherits from SplFileInfo
//         echo $file->getFileName() . "\n";
//         echo file_get_contents($file->getPathName()) . "\n"; // display contents;
//     }
//     if (isset($p['internal/file.php'])) {
//         var_dump($p['internal/file.php']->getMetadata());
//     }
// 
//     // create a new phar - phar.readonly must be 0 in php.ini
//     // phar.readonly is enabled by default for security reasons.
//     // On production servers, Phars need never be created,
//     // only executed.
//     if (Phar::canWrite()) {
//         $p = new Phar('newphar.tar.phar', 0, 'newphar.tar.phar');
//         // make this a tar-based phar archive, compressed with gzip compression (.tar.gz)
//         $p = $p->convertToExecutable(Phar::TAR, Phar::GZ);
// 
//         // create transaction - nothing is written to newphar.phar
//         // until stopBuffering() is called, although temporary storage is needed
//         $p->startBuffering();
//         // add all files in /path/to/project, saving in the phar with the prefix "project"
//         $p->buildFromIterator(new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/path/to/project')), '/path/to/');
// 
//         // add a new file via the array access API
//         $p['file1.txt'] = 'Information';
//         $fp = fopen('hugefile.dat', 'rb');
//         // copy all data from the stream
//         $p['data/hugefile.dat'] = $fp;
// 
//         if (Phar::canCompress(Phar::GZ)) {
//             $p['data/hugefile.dat']->compress(Phar::GZ);
//         }
// 
//         $p['images/wow.jpg'] = file_get_contents('images/wow.jpg');
//         // any value can be saved as file-specific meta-data
//         $p['images/wow.jpg']->setMetadata(array('mime-type' => 'image/jpeg'));
//         $p['index.php'] = file_get_contents('index.php');
//         $p->setMetadata(array('bootstrap' => 'index.php'));
// 
//         // save the phar archive to disk
//         $p->stopBuffering();
//     }
// } catch (Exception $e) {
//     echo 'Could not open Phar: ', $e;
// }
// [/php]
// In addition, verification of phar file contents can be done using any of the supported symmetric hash algorithms (MD5, SHA1, SHA256 and SHA512 if ext/hash is enabled) and using asymmetric public/private key signing using OpenSSL. To take advantage of OpenSSL signing, you need to generate a public/private key pair, and use the private key to set the signature using Phar::setSignatureAlgorithm(). In addition, the public key as extracted using this code:
// [php]
// $public = openssl_get_publickey(file_get_contents('private.pem'));
// $pkey = '';
// openssl_pkey_export($public, $pkey);
// [/php]
// must be saved adjacent to the phar archive it verifies. If the phar archive is saved as /path/to/my.phar, the public key must be saved as /path/to/my.phar.pubkey, or phar will be unable to verify the OpenSSL signature.
// The Phar class also provides 3 static methods, Phar::webPhar(), Phar::mungServer() and Phar::interceptFileFuncs() that are crucial to packaging up PHP applications designed for usage on regular filesystems and for web-based applications. Phar::webPhar() implements a front controller that routes HTTP calls to the correct location within the phar archive. Phar::mungServer() is used to modify the values of the $_SERVER array to trick applications that process these values. Phar::interceptFileFuncs() instructs Phar to intercept calls to fopen(), file_get_contents(), opendir(), and all of the stat-based functions (file_exists(), is_readable() and so on) and route all relative paths to locations within the phar archive.
// As an example, packaging up a release of the popular phpMyAdmin application for use as a phar archive requires only this simple script and then phpMyAdmin.phar.tar.php can be accessed as a regular file from your web server after modifying the user/password:
// [php]
// @unlink('phpMyAdmin.phar.tar.php');
// copy('phpMyAdmin-2.11.3-english.tar.gz', 'phpMyAdmin.phar.tar.php');
// $a = new Phar('phpMyAdmin.phar.tar.php');
// $a->startBuffering();
// $a["phpMyAdmin-2.11.3-english/config.inc.php"] = '<?php
// /* Servers configuration */
// $i = 0;
// 
// /* Server localhost (config:root) [1] */
// $i++;
// $cfg[\'Servers\'][$i][\'host\'] = \'localhost\';
// $cfg[\'Servers\'][$i][\'extension\'] = \'mysqli\';
// $cfg[\'Servers\'][$i][\'connect_type\'] = \'tcp\';
// $cfg[\'Servers\'][$i][\'compress\'] = false;
// $cfg[\'Servers\'][$i][\'auth_type\'] = \'config\';
// $cfg[\'Servers\'][$i][\'user\'] = \'root\';
// $cfg[\'Servers\'][$i][\'password\'] = \'\';
// 
// 
// /* End of servers configuration */
// if (strpos(PHP_OS, \'WIN\') !== false) {
//     $cfg[\'UploadDir\'] = getcwd();
// } else {
//     $cfg[\'UploadDir\'] = \'/tmp/pharphpmyadmin\';
//     @mkdir(\'/tmp/pharphpmyadmin\');
//     @chmod(\'/tmp/pharphpmyadmin\', 0777);
// }';
// $a->setStub('<?php
// Phar::interceptFileFuncs();
// Phar::webPhar("phpMyAdmin.phar", "phpMyAdmin-2.11.3-english/index.php");
// echo "phpMyAdmin is intended to be executed from a web browser\n";
// exit -1;
// __HALT_COMPILER();
// ');
// $a->stopBuffering();
// [/php]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.using.intro.php
// USING_PHAR_ARCHIVES_INTRODUCTION - END
// 
// USING_PHAR_ARCHIVES_THE_PHAR_STREAM_WRAPPER - BEGIN
// Using Phar Archives: the phar stream wrapper
// 
// The Phar stream wrapper fully supports fopen() for read and write (not append), unlink(), stat(), fstat(), fseek(), rename() and directory stream operations opendir() and rmdir() and mkdir().
// Individual file compression and per-file metadata can also be manipulated in a Phar archive using stream contexts:
// [php]
// $context = stream_context_create(array('phar' =>
//                                     array('compress' => Phar::GZ)),
//                                     array('metadata' => array('user' => 'cellog')));
// file_put_contents('phar://my.phar/somefile.php', 0, $context);
// [/php]
// The phar stream wrapper does not operate on remote files, and cannot operate on remote files, and so is allowed even when the allow_url_fopen and allow_url_include INI options are disabled.
// Although it is possible to create phar archives from scratch just using stream operations, it is best to use the functionality built into the Phar class. The stream wrapper is best used for read-only operations.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.using.stream.php
// USING_PHAR_ARCHIVES_THE_PHAR_STREAM_WRAPPER - END
// 
// USING_PHAR_ARCHIVES_THE_PHAR_AND_PHARDATA_CLASS - BEGIN
// Using Phar Archives: the Phar and PharData class
// 
// The Phar class supports reading and manipulation of Phar archives, as well as iteration through inherited functionality of the RecursiveDirectoryIterator class. With support for the ArrayAccess interface, files inside a Phar archive can be accessed as if they were part of an associative array.
// The PharData class extends the Phar, and allows creating and modifying non-executable (data) tar and zip archives even if phar.readonly=1 in php.ini. As such, PharData::setAlias() and PharData::setStub() are both disabled as the concept of alias and stub are unique to executable phar archives.
// It is important to note that when creating a Phar archive, the full path should be passed to the Phar object constructor. Relative paths will fail to initialize.
// Assuming that $p is a Phar object initialized as follows:
// [php]
// $p = new Phar('/path/to/myphar.phar', 0, 'myphar.phar');
// [/php]
// An empty Phar archive will be created at /path/to/myphar.phar, or if /path/to/myphar.phar already exists, it will be opened again. The literal myphar.phar demonstrates the concept of an alias that can be used to reference /path/to/myphar.phar in URLs as in:
// [php]
// // these two calls to file_get_contents() are equivalent if
// // /path/to/myphar.phar has an explicit alias of "myphar.phar"
// // in its manifest, or if the phar was initialized with the
// // previous example's Phar object setup
// $f = file_get_contents('phar:///path/to/myphar.phar/whatever.txt');
// $f = file_get_contents('phar://myphar.phar/whatever.txt');
// [/php]
// With the newly created $p Phar object, the following is possible:
// * $a = $p['file.php'] creates a PharFileInfo class that refers to the contents of phar://myphar.phar/file.php
// * $p['file.php'] = $v creates a new file (phar://myphar.phar/file.php), or overwrites an existing file within myphar.phar. $v can be either a string or an open file pointer, in which case the entire contents of the file will be used to create the new file. Note that $p->addFromString('file.php', $v) is functionally equivalent to the above. Also possible is to add the contents of a file with $p->addFile('/path/to/file.php', 'file.php'). Lastly, an empty directory can be created with $p->addEmptyDir('empty').
// * isset($p['file.php']) can be used to determine whether phar://myphar.phar/file.php exists within myphar.phar.
// * unset($p['file.php']) erases phar://myphar.phar/file.php from myphar.phar.
// In addition, the Phar object is the only way to access Phar-specific metadata, through Phar::getMetadata(), and the only way to set or retrieve a Phar archive's PHP loader stub through Phar::getStub() and Phar::setStub(). Additionally, compression for the entire Phar archive at once can only be manipulated using the Phar class.
// The full list of Phar object functionality is documented below.
// The PharFileInfo class extends the SplFileInfo class, and adds several methods for manipulating Phar-specific details of a file contained within a Phar, such as manipulating compression and metadata.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.using.object.php
// USING_PHAR_ARCHIVES_THE_PHAR_AND_PHARDATA_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.using.php
// USING_PHAR_ARCHIVES - END
// 
// CREATING_PHAR_ARCHIVES - BEGIN
// Creating Phar Archives
// 
// CREATING_PHAR_ARCHIVES_INTRODUCTION
// 
// Table of Contents
// * Creating Phar Archives: Introduction
// 
// CREATING_PHAR_ARCHIVES_INTRODUCTION - BEGIN
// Creating Phar Archives: Introduction
// 
// To be written fully in the near future. Before reading this, be sure to read How to use Phar Archives.
// A great place to start is by reading about Phar::buildFromIterator(), and the specifics of the file format choices available for archives. A healthy understanding of what a stub is and does is crucial to phar archive creation, and so Phar::setStub() and Phar::createDefaultStub() are good places to start as well. If you are distributing a web-based application, it is crucial to know about Phar::webPhar() and related method Phar::mungServer(). Any application that accesses its own files should also consider using Phar::interceptFileFuncs().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.creating.intro.php
// CREATING_PHAR_ARCHIVES_INTRODUCTION - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.creating.php
// CREATING_PHAR_ARCHIVES - END
// 
// WHAT_MAKES_A_PHAR_A_PHAR_AND_NOT_A_TAR_OR_A_ZIP - BEGIN
// What makes a phar a phar and not a tar or a zip?
// 
// INGREDIENTS_OF_ALL_PHAR_ARCHIVES_INDEPENDENT_OF_FILE_FORMAT
// PHAR_FILE_STUB
// HEAD_TO_HEAD_COMPARISON_OF_PHAR_TAR_AND_ZIP
// TAR_BASED_PHARS
// ZIP_BASED_PHARS
// PHAR_FILE_FORMAT
// GLOBAL_PHAR_BITMAPPED_FLAGS
// PHAR_MANIFEST_FILE_ENTRY_DEFINITION
// PHAR_SIGNATURE_FORMAT
// 
// Table of Contents
// * Ingredients of all Phar archives, independent of file format
// * Phar file stub
// * Head-to-head comparison of Phar, Tar and Zip
// * Tar-based phars
// * Zip-based phars
// * Phar File Format
// * Global Phar bitmapped flags
// * Phar manifest file entry definition
// * Phar Signature format
// 
// INGREDIENTS_OF_ALL_PHAR_ARCHIVES_INDEPENDENT_OF_FILE_FORMAT - BEGIN
// Ingredients of all Phar archives, independent of file format
// 
// All Phar archives contain three to four sections:
// 1. a stub
// 2. a manifest describing the contents
// 3. the file contents
// 4. [optional] a signature for verifying Phar integrity (phar file format only)
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.ingredients.php
// INGREDIENTS_OF_ALL_PHAR_ARCHIVES_INDEPENDENT_OF_FILE_FORMAT - END
// 
// PHAR_FILE_STUB - BEGIN
// Phar file stub
// 
// A Phar's stub is a simple PHP file. The smallest possible stub follows:
// [php]
//  __HALT_COMPILER();
// [/php]
// A stub must contain as a minimum, the __HALT_COMPILER(); token at its conclusion. Typically, a stub will contain loader functionality like so:
// [php]
// Phar::mapPhar();
// include 'phar://myphar.phar/index.php';
// __HALT_COMPILER();
// [/php]
// There are no restrictions on the contents of a Phar stub, except for the requirement that it conclude with __HALT_COMPILER();. The closing PHP tag
// ? >
// may be included or omitted, but there can be no more than 1 space between the ; and the close tag
// ? >
// or the phar extension will be unable to process the Phar archive's manifest.
// In a tar or zip-based phar archive, the stub is stored in the .phar/stub.php file. The default stub for phar-based Phar archives contains approximately 7k of code to extract the contents of the phar and execute them. See Phar::createDefaultStub() for more detail.
// The phar alias is stored in a tar or zip-based phar archive in the .phar/alias.txt file as plain text.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.stub.php
// PHAR_FILE_STUB - END
// 
// HEAD_TO_HEAD_COMPARISON_OF_PHAR_TAR_AND_ZIP - BEGIN
// Head-to-head comparison of Phar, Tar and Zip
// 
// What are the good and the bad things about the three supported file formats in the phar extension? This table attempts to address that question.
// 
// Feature matrix: Phar vs. Tar vs. Zip
// Feature                                             | Phar | Tar | Zip
// Standard File Format                                | No   | Yes | Yes
// Can be executed without the Phar Extension [1]      | Yes  | No  | No
// Per-file compression                                | Yes  | No  | Yes
// Whole-archive compression                           | Yes  | Yes | No
// Whole-archive signature validation                  | Yes  | Yes | Yes
// Web-specific application support                    | Yes  | Yes | Yes
// Per-file Meta-data                                  | Yes  | Yes | Yes
// Whole-Archive Meta-data                             | Yes  | Yes | Yes
// Archive creation/modification [2]                   | Yes  | Yes | Yes
// Full support for all stream wrapper functions       | Yes  | Yes | Yes
// Can be created/modified even if phar.readonly=1 [3] | No   | Yes | Yes
// 
// Tip: [1] PHP can only directly access the contents of a Phar archive without the Phar extension if it is using a stub that extracts the contents of the phar archive. The stub created by Phar::createDefaultStub() extracts the phar archive and runs its contents from a temporary directory if no phar extension is found.
// Tip: [2] All write access requires phar.readonly to be disabled in php.ini or on the command-line directly.
// Tip: [3] Only tar and zip archives without .phar in their filename and without an executable stub .phar/stub.php can be created if phar.readonly=1.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.comparison.php
// HEAD_TO_HEAD_COMPARISON_OF_PHAR_TAR_AND_ZIP - END
// 
// TAR_BASED_PHARS - BEGIN
// Tar-based phars
// 
// Archives based on the tar file format follow the more modern USTAR file format. The design of the tar file header makes them more efficient to access than the zip file format, and almost as efficient as the phar file format. File names are limited to 255 bytes, including full path within the phar archive. There is no limit on the number of files within a tar-based phar archive. These archives can fully compressed in gzip or bzip2 format and still be executed by the Phar extension.
// There is limited support for reading tarballs in pax interchange format, but all recognized pax headers (currently, typeflag x and g) are silently ignored. There is also limited support for GNU Tar Archives; currently, ././@LongLink headers are resolved.
// To compress an entire archive, use Phar::compress(). To decompress an entire archive, use Phar::decompress().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.tar.php
// TAR_BASED_PHARS - END
// 
// ZIP_BASED_PHARS - BEGIN
// Zip-based phars
// 
// Archives based on the zip file format support several features built into the zip file format. Per-file and whole-archive metadata is stored in the zip file comment and zip archive comment as a serialized string. Pre-existing zip comments will be successfully read as a string. Per-file compression read/write is supported with zlib DEFLATE compression, and read access is supported with bzip2 compression. There is no limit on the number of files within a zip-based phar archive. Empty directories are stored in the zip archive as files with a trailing slash like my/directory/
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.zip.php
// ZIP_BASED_PHARS - END
// 
// PHAR_FILE_FORMAT - BEGIN
// Phar File Format
// 
// The phar file format is literally laid out as stub/manifest/contents/signature, and stores the crucial information of what is included in the phar archive in its manifest.
// The Phar manifest is a highly optimized format that allows per-file specification of file compression, file permissions, and even user-defined meta-data such as file user or group. All values greater than 1 byte are stored in little-endian byte order, with the exception of the API version, which for historical reasons is stored as 3 nibbles in big-endian order.
// All unused flags are reserved for future use, and must not be used to store custom information. Use the per-file meta-data facility to store customized information about particular files.
// The basic file format of a Phar archive manifest is as follows:
// 
// Global Phar manifest format
// Size in bytes                         - Description
// 4 bytes                               - Length of manifest in bytes (1 MB limit)
// 4 bytes                               - Number of files in the Phar
// 2 bytes                               - API version of the Phar manifest (currently 1.0.0)
// 4 bytes                               - Global Phar bitmapped flags
// 4 bytes                               - Length of Phar alias
// ??                                    - Phar alias (length based on previous)
// 4 bytes                               - Length of Phar metadata (0 for none)
// ??                                    - Serialized Phar Meta-data, stored in serialize() format
// at least 24 * number of entries bytes - entries for each file
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.phar.php
// PHAR_FILE_FORMAT - END
// 
// GLOBAL_PHAR_BITMAPPED_FLAGS - BEGIN
// Global Phar bitmapped flags
// 
// Here are the bitmapped flags currently recognized by the Phar extension for the global Phar flat bitmap:
// 
// Bitmap values recognized
// Value      - Description
// 0x00010000 - If set, this Phar contains a verification signature
// 0x00001000 - If set, this Phar contains at least 1 file that is compressed with zlib DEFLATE compression
// 0x00002000 - If set, this Phar contains at least 1 file that is compressed with bzip2 compression
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.flags.php
// GLOBAL_PHAR_BITMAPPED_FLAGS - END
// 
// PHAR_MANIFEST_FILE_ENTRY_DEFINITION - BEGIN
// Phar manifest file entry definition
// 
// Each file in the manifest contains the following information:
// 
// Phar Manifest file entry
// Size in bytes - Description
// 4 bytes       - Filename length in bytes
// ??            - Filename (length specified in previous)
// 4 bytes       - Un-compressed file size in bytes
// 4 bytes       - Unix timestamp of file
// 4 bytes       - Compressed file size in bytes
// 4 bytes       - CRC32 checksum of un-compressed file contents
// 4 bytes       - Bit-mapped File-specific flags
// 4 bytes       - Serialized File Meta-data length (0 for none)
// ??            - Serialized File Meta-data, stored in serialize() format
// 
// Note that as of API version 1.1.1, empty directories are stored as filenames with a trailing slash like my/directory/
// The File-specific bitmap values recognized are:
// 
// Bitmap values recognized
// Value      - Description
// 0x000001FF - These bits are reserved for defining specific file permissions of a file. Permissions are used for fstat() and can be used to recreate desired permissions upon extraction.
// 0x00001000 - If set, this file is compressed with zlib DEFLATE compression
// 0x00002000 - If set, this file is compressed with bzip2 compression
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.manifestfile.php
// PHAR_MANIFEST_FILE_ENTRY_DEFINITION - END
// 
// PHAR_SIGNATURE_FORMAT - BEGIN
// Phar Signature format
// 
// Phars containing a signature always have the signature appended to the end of the Phar archive after the loader, manifest, and file contents. The signature formats supported at this time are MD5, SHA1, SHA256, SHA512, and OPENSSL.
// 
// Signature format
// Length in bytes - Description
// varying         - The actual signature, 20 bytes for an SHA1 signature, 16 bytes for an MD5 signature, 32 bytes for an SHA256 signature, and 64 bytes for an SHA512 signature. The length of an OPENSSL signature depends on the size of the private key.
// 4 bytes         - Signature flags. 0x0001 is used to define an MD5 signature, 0x0002 is used to define an SHA1 signature, 0x0003 is used to define an SHA256 signature, and 0x0004 is used to define an SHA512 signature. The SHA256 and SHA512 signature support is available as of API version 1.1.0. 0x0010 is used to define an OPENSSL signature, what is available as of API version 1.1.1, if OpenSSL is available.
// 4 bytes         - Magic GBMB used to define the presence of a signature.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.signature.php
// PHAR_SIGNATURE_FORMAT - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/phar.fileformat.php
// WHAT_MAKES_A_PHAR_A_PHAR_AND_NOT_A_TAR_OR_A_ZIP - END
// 
// THE_PHAR_CLASS - BEGIN
// The Phar class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// 
// Introduction
// The Phar class provides a high-level interface to accessing and creating phar archives.
// 
// Class synopsis
// [code]
// class Phar extends RecursiveDirectoryIterator implements Countable, ArrayAccess {
// 
//    /* Inherited constants */
//    public const int FilesystemIterator::CURRENT_MODE_MASK;
//    public const int FilesystemIterator::CURRENT_AS_PATHNAME;
//    public const int FilesystemIterator::CURRENT_AS_FILEINFO;
//    public const int FilesystemIterator::CURRENT_AS_SELF;
//    public const int FilesystemIterator::KEY_MODE_MASK;
//    public const int FilesystemIterator::KEY_AS_PATHNAME;
//    public const int FilesystemIterator::FOLLOW_SYMLINKS;
//    public const int FilesystemIterator::KEY_AS_FILENAME;
//    public const int FilesystemIterator::NEW_CURRENT_AND_KEY;
//    public const int FilesystemIterator::OTHER_MODE_MASK;
//    public const int FilesystemIterator::SKIP_DOTS;
//    public const int FilesystemIterator::UNIX_PATHS;
// 
//    /* Constants */
//    const int BZ2;
//    const int GZ;
//    const int NONE;
//    const int PHAR;
//    const int TAR;
//    const int ZIP;
//    const int COMPRESSED;
//    const int PHP;
//    const int PHPS;
//    const int MD5;
//    const int OPENSSL;
//    const int OPENSSL_SHA256;
//    const int OPENSSL_SHA512;
//    const int SHA1;
//    const int SHA256;
//    const int SHA512;
// 
//    /* Methods */
//    public __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null)
//    public addEmptyDir(string $directory): void
//    public addFile(string $filename, ?string $localName = null): void
//    public addFromString(string $localName, string $contents): void
//    final public static apiVersion(): string
//    public buildFromDirectory(string $directory, string $pattern = ""): array
//    public buildFromIterator(Traversable $iterator, ?string $baseDirectory = null): array
//    final public static canCompress(int $compression = 0): bool
//    final public static canWrite(): bool
//    public compress(int $compression, ?string $extension = null): ?Phar
//    public compressFiles(int $compression): void
//    public convertToData(?int $format = null, ?int $compression = null, ?string $extension = null): ?PharData
//    public convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null): ?Phar
//    public copy(string $from, string $to): bool
//    public count(int $mode = COUNT_NORMAL): int
//    final public static createDefaultStub(?string $index = null, ?string $webIndex = null): string
//    public decompress(?string $extension = null): ?Phar
//    public decompressFiles(): bool
//    public delMetadata(): bool
//    public delete(string $localName): bool
//    public extractTo(string $directory, array|string|null $files = null, bool $overwrite = false): bool
//    public getAlias(): ?string
//    public getMetadata(array $unserializeOptions = []): mixed
//    public getModified(): bool
//    public getPath(): string
//    public getSignature(): array|false
//    public getStub(): string
//    final public static getSupportedCompression(): array
//    final public static getSupportedSignatures(): array
//    public getVersion(): string
//    public hasMetadata(): bool
//    final public static interceptFileFuncs(): void
//    public isBuffering(): bool
//    public isCompressed(): int|false
//    public isFileFormat(int $format): bool
//    final public static isValidPharFilename(string $filename, bool $executable = true): bool
//    public isWritable(): bool
//    final public static loadPhar(string $filename, ?string $alias = null): bool
//    final public static mapPhar(?string $alias = null, int $offset = 0): bool
//    final public static mount(string $pharPath, string $externalPath): void
//    final public static mungServer(array $variables): void
//    public offsetExists(string $localName): bool
//    public offsetGet(string $localName): SplFileInfo
//    public offsetSet(string $localName, resource|string $value): void
//    public offsetUnset(string $localName): void
//    final public static running(bool $returnPhar = true): string
//    public setAlias(string $alias): bool
//    public setDefaultStub(?string $index = null, ?string $webIndex = null): bool
//    public setMetadata(mixed $metadata): void
//    public setSignatureAlgorithm(int $algo, ?string $privateKey = null): void
//    public setStub(resource|string $stub, int $length = -1): bool
//    public startBuffering(): void
//    public stopBuffering(): void
//    final public static unlinkArchive(string $filename): bool
//    final public static webPhar(
//        ?string $alias = null,
//        ?string $index = null,
//        ?string $fileNotFoundScript = null,
//        array $mimeTypes = [],
//        ?callable $rewrite = null
//    ): void
//    public __destruct()
// 
//    /* Inherited methods */
//    public RecursiveDirectoryIterator::getChildren(): RecursiveDirectoryIterator
//    public RecursiveDirectoryIterator::getSubPath(): string
//    public RecursiveDirectoryIterator::getSubPathname(): string
//    public RecursiveDirectoryIterator::hasChildren(bool $allowLinks = false): bool
//    public RecursiveDirectoryIterator::key(): string
//    public RecursiveDirectoryIterator::next(): void
//    public RecursiveDirectoryIterator::rewind(): void
//    public FilesystemIterator::current(): string|SplFileInfo|FilesystemIterator
//    public FilesystemIterator::getFlags(): int
//    public FilesystemIterator::key(): string
//    public FilesystemIterator::next(): void
//    public FilesystemIterator::rewind(): void
//    public FilesystemIterator::setFlags(int $flags): void
//    public DirectoryIterator::current(): mixed
//    public DirectoryIterator::getBasename(string $suffix = ""): string
//    public DirectoryIterator::getExtension(): string
//    public DirectoryIterator::getFilename(): string
//    public DirectoryIterator::isDot(): bool
//    public DirectoryIterator::key(): mixed
//    public DirectoryIterator::next(): void
//    public DirectoryIterator::rewind(): void
//    public DirectoryIterator::seek(int $offset): void
//    public DirectoryIterator::__toString(): string
//    public DirectoryIterator::valid(): bool
//    public SplFileInfo::getATime(): int|false
//    public SplFileInfo::getBasename(string $suffix = ""): string
//    public SplFileInfo::getCTime(): int|false
//    public SplFileInfo::getExtension(): string
//    public SplFileInfo::getFileInfo(?string $class = null): SplFileInfo
//    public SplFileInfo::getFilename(): string
//    public SplFileInfo::getGroup(): int|false
//    public SplFileInfo::getInode(): int|false
//    public SplFileInfo::getLinkTarget(): string|false
//    public SplFileInfo::getMTime(): int|false
//    public SplFileInfo::getOwner(): int|false
//    public SplFileInfo::getPath(): string
//    public SplFileInfo::getPathInfo(?string $class = null): ?SplFileInfo
//    public SplFileInfo::getPathname(): string
//    public SplFileInfo::getPerms(): int|false
//    public SplFileInfo::getRealPath(): string|false
//    public SplFileInfo::getSize(): int|false
//    public SplFileInfo::getType(): string|false
//    public SplFileInfo::isDir(): bool
//    public SplFileInfo::isExecutable(): bool
//    public SplFileInfo::isFile(): bool
//    public SplFileInfo::isLink(): bool
//    public SplFileInfo::isReadable(): bool
//    public SplFileInfo::isWritable(): bool
//    public SplFileInfo::openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): SplFileObject
//    public SplFileInfo::setFileClass(string $class = SplFileObject::class): void
//    public SplFileInfo::setInfoClass(string $class = SplFileInfo::class): void
//    public SplFileInfo::__toString(): string
// }
// [/code]
// 
// Table of Contents
// * Phar::addEmptyDir             - Add an empty directory to the phar archive
// * Phar::addFile                 - Add a file from the filesystem to the phar archive
// * Phar::addFromString           - Add a file from a string to the phar archive
// * Phar::apiVersion              - Returns the api version
// * Phar::buildFromDirectory      - Construct a phar archive from the files within a directory
// * Phar::buildFromIterator       - Construct a phar archive from an iterator
// * Phar::canCompress             - Returns whether phar extension supports compression using either zlib or bzip2
// * Phar::canWrite                - Returns whether phar extension supports writing and creating phars
// * Phar::compress                - Compresses the entire Phar archive using Gzip or Bzip2 compression
// * Phar::compressFiles           - Compresses all files in the current Phar archive
// * Phar::__construct             - Construct a Phar archive object
// * Phar::convertToData           - Convert a phar archive to a non-executable tar or zip file
// * Phar::convertToExecutable     - Convert a phar archive to another executable phar archive file format
// * Phar::copy                    - Copy a file internal to the phar archive to another new file within the phar
// * Phar::count                   - Returns the number of entries (files) in the Phar archive
// * Phar::createDefaultStub       - Create a phar-file format specific stub
// * Phar::decompress              - Decompresses the entire Phar archive
// * Phar::decompressFiles         - Decompresses all files in the current Phar archive
// * Phar::delMetadata             - Deletes the global metadata of the phar
// * Phar::delete                  - Delete a file within a phar archive
// * Phar::__destruct              - Destructs a Phar archive object
// * Phar::extractTo               - Extract the contents of a phar archive to a directory
// * Phar::getAlias                - Get the alias for Phar
// * Phar::getMetadata             - Returns phar archive meta-data
// * Phar::getModified             - Return whether phar was modified
// * Phar::getPath                 - Get the real path to the Phar archive on disk
// * Phar::getSignature            - Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
// * Phar::getStub                 - Return the PHP loader or bootstrap stub of a Phar archive
// * Phar::getSupportedCompression - Return array of supported compression algorithms
// * Phar::getSupportedSignatures  - Return array of supported signature types
// * Phar::getVersion              - Return version info of Phar archive
// * Phar::hasMetadata             - Returns whether phar has global meta-data
// * Phar::interceptFileFuncs      - Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
// * Phar::isBuffering             - Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
// * Phar::isCompressed            - Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
// * Phar::isFileFormat            - Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
// * Phar::isValidPharFilename     - Returns whether the given filename is a valid phar filename
// * Phar::isWritable              - Returns true if the phar archive can be modified
// * Phar::loadPhar                - Loads any phar archive with an alias
// * Phar::mapPhar                 - Reads the currently executed file (a phar) and registers its manifest
// * Phar::mount                   - Mount an external path or file to a virtual location within the phar archive
// * Phar::mungServer              - Defines a list of up to 4 $_SERVER variables that should be modified for execution
// * Phar::offsetExists            - Determines whether a file exists in the phar
// * Phar::offsetGet               - Gets a PharFileInfo object for a specific file
// * Phar::offsetSet               - Set the contents of an internal file to those of an external file
// * Phar::offsetUnset             - Remove a file from a phar
// * Phar::running                 - Returns the full path on disk or full phar URL to the currently executing Phar archive
// * Phar::setAlias                - Set the alias for the Phar archive
// * Phar::setDefaultStub          - Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
// * Phar::setMetadata             - Sets phar archive meta-data
// * Phar::setSignatureAlgorithm   - Set the signature algorithm for a phar and apply it
// * Phar::setStub                 - Used to set the PHP loader or bootstrap stub of a Phar archive
// * Phar::startBuffering          - Start buffering Phar write operations, do not modify the Phar object on disk
// * Phar::stopBuffering           - Stop buffering write requests to the Phar archive, and save changes to disk
// * Phar::unlinkArchive           - Completely remove a phar archive from disk and from memory
// * Phar::webPhar                 - Routes a request from a web browser to an internal file within the phar archive
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.phar.php
// THE_PHAR_CLASS - END
// 
// THE_PHARDATA_CLASS - BEGIN
// The PharData class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar2_0_0
// 
// Introduction
// The PharData class provides a high-level interface to accessing and creating non-executable tar and zip archives. Because these archives do not contain a stub and cannot be executed by the phar extension, it is possible to create and manipulate regular zip and tar files using the PharData class even if phar.readonly php.ini setting is 1.
// 
// Class synopsis
// [code]
// class PharData extends RecursiveDirectoryIterator implements Countable, ArrayAccess {
// 
//    /* Inherited constants */
//    public const int FilesystemIterator::CURRENT_MODE_MASK;
//    public const int FilesystemIterator::CURRENT_AS_PATHNAME;
//    public const int FilesystemIterator::CURRENT_AS_FILEINFO;
//    public const int FilesystemIterator::CURRENT_AS_SELF;
//    public const int FilesystemIterator::KEY_MODE_MASK;
//    public const int FilesystemIterator::KEY_AS_PATHNAME;
//    public const int FilesystemIterator::FOLLOW_SYMLINKS;
//    public const int FilesystemIterator::KEY_AS_FILENAME;
//    public const int FilesystemIterator::NEW_CURRENT_AND_KEY;
//    public const int FilesystemIterator::OTHER_MODE_MASK;
//    public const int FilesystemIterator::SKIP_DOTS;
//    public const int FilesystemIterator::UNIX_PATHS;
// 
//    /* Methods */
//    public __construct(
//        string $filename,
//        int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS,
//        ?string $alias = null,
//        int $format = 0
//    )
//    public addEmptyDir(string $directory): void
//    public addFile(string $filename, ?string $localName = null): void
//    public addFromString(string $localName, string $contents): void
//    public buildFromDirectory(string $directory, string $pattern = ""): array
//    public buildFromIterator(Traversable $iterator, ?string $baseDirectory = null): array
//    public compress(int $compression, ?string $extension = null): ?PharData
//    public compressFiles(int $compression): void
//    public convertToData(?int $format = null, ?int $compression = null, ?string $extension = null): ?PharData
//    public convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null): ?Phar
//    public copy(string $from, string $to): bool
//    public decompress(?string $extension = null): ?PharData
//    public decompressFiles(): bool
//    public delMetadata(): bool
//    public delete(string $localName): bool
//    public extractTo(string $directory, array|string|null $files = null, bool $overwrite = false): bool
//    public isWritable(): bool
//    public offsetSet(string $localName, resource|string $value): void
//    public offsetUnset(string $localName): void
//    public setAlias(string $alias): bool
//    public setDefaultStub(?string $index = null, ?string $webIndex = null): bool
//    public setMetadata(mixed $metadata): void
//    public setSignatureAlgorithm(int $algo, ?string $privateKey = null): void
//    public setStub(string $stub, int $len = -1): bool
//    public __destruct()
// 
//    /* Inherited methods */
//    public RecursiveDirectoryIterator::getChildren(): RecursiveDirectoryIterator
//    public RecursiveDirectoryIterator::getSubPath(): string
//    public RecursiveDirectoryIterator::getSubPathname(): string
//    public RecursiveDirectoryIterator::hasChildren(bool $allowLinks = false): bool
//    public RecursiveDirectoryIterator::key(): string
//    public RecursiveDirectoryIterator::next(): void
//    public RecursiveDirectoryIterator::rewind(): void
//    public FilesystemIterator::current(): string|SplFileInfo|FilesystemIterator
//    public FilesystemIterator::getFlags(): int
//    public FilesystemIterator::key(): string
//    public FilesystemIterator::next(): void
//    public FilesystemIterator::rewind(): void
//    public FilesystemIterator::setFlags(int $flags): void
//    public DirectoryIterator::current(): mixed
//    public DirectoryIterator::getBasename(string $suffix = ""): string
//    public DirectoryIterator::getExtension(): string
//    public DirectoryIterator::getFilename(): string
//    public DirectoryIterator::isDot(): bool
//    public DirectoryIterator::key(): mixed
//    public DirectoryIterator::next(): void
//    public DirectoryIterator::rewind(): void
//    public DirectoryIterator::seek(int $offset): void
//    public DirectoryIterator::__toString(): string
//    public DirectoryIterator::valid(): bool
//    public SplFileInfo::getATime(): int|false
//    public SplFileInfo::getBasename(string $suffix = ""): string
//    public SplFileInfo::getCTime(): int|false
//    public SplFileInfo::getExtension(): string
//    public SplFileInfo::getFileInfo(?string $class = null): SplFileInfo
//    public SplFileInfo::getFilename(): string
//    public SplFileInfo::getGroup(): int|false
//    public SplFileInfo::getInode(): int|false
//    public SplFileInfo::getLinkTarget(): string|false
//    public SplFileInfo::getMTime(): int|false
//    public SplFileInfo::getOwner(): int|false
//    public SplFileInfo::getPath(): string
//    public SplFileInfo::getPathInfo(?string $class = null): ?SplFileInfo
//    public SplFileInfo::getPathname(): string
//    public SplFileInfo::getPerms(): int|false
//    public SplFileInfo::getRealPath(): string|false
//    public SplFileInfo::getSize(): int|false
//    public SplFileInfo::getType(): string|false
//    public SplFileInfo::isDir(): bool
//    public SplFileInfo::isExecutable(): bool
//    public SplFileInfo::isFile(): bool
//    public SplFileInfo::isLink(): bool
//    public SplFileInfo::isReadable(): bool
//    public SplFileInfo::isWritable(): bool
//    public SplFileInfo::openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): SplFileObject
//    public SplFileInfo::setFileClass(string $class = SplFileObject::class): void
//    public SplFileInfo::setInfoClass(string $class = SplFileInfo::class): void
//    public SplFileInfo::__toString(): string
// }
// [/code]
// 
// Table of Contents
// * PharData::addEmptyDir           - Add an empty directory to the tar/zip archive
// * PharData::addFile               - Add a file from the filesystem to the tar/zip archive
// * PharData::addFromString         - Add a file from a string to the tar/zip archive
// * PharData::buildFromDirectory    - Construct a tar/zip archive from the files within a directory
// * PharData::buildFromIterator     - Construct a tar or zip archive from an iterator
// * PharData::compress              - Compresses the entire tar/zip archive using Gzip or Bzip2 compression
// * PharData::compressFiles         - Compresses all files in the current tar/zip archive
// * PharData::__construct           - Construct a non-executable tar or zip archive object
// * PharData::convertToData         - Convert a phar archive to a non-executable tar or zip file
// * PharData::convertToExecutable   - Convert a non-executable tar/zip archive to an executable phar archive
// * PharData::copy                  - Copy a file internal to the phar archive to another new file within the phar
// * PharData::decompress            - Decompresses the entire Phar archive
// * PharData::decompressFiles       - Decompresses all files in the current zip archive
// * PharData::delMetadata           - Deletes the global metadata of a zip archive
// * PharData::delete                - Delete a file within a tar/zip archive
// * PharData::__destruct            - Destructs a non-executable tar or zip archive object
// * PharData::extractTo             - Extract the contents of a tar/zip archive to a directory
// * PharData::isWritable            - Returns true if the tar/zip archive can be modified
// * PharData::offsetSet             - Set the contents of a file within the tar/zip to those of an external file or string
// * PharData::offsetUnset           - Remove a file from a tar/zip archive
// * PharData::setAlias              - Dummy function (Phar::setAlias is not valid for PharData)
// * PharData::setDefaultStub        - Dummy function (Phar::setDefaultStub is not valid for PharData)
// * PharData::setMetadata           - Sets phar archive meta-data
// * PharData::setSignatureAlgorithm - Set the signature algorithm for a phar and apply it
// * PharData::setStub               - Dummy function (Phar::setStub is not valid for PharData)
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.phardata.php
// THE_PHARDATA_CLASS - END
// 
// THE_PHARFILEINFO_CLASS - BEGIN
// The PharFileInfo class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// 
// Introduction
// The PharFileInfo class provides a high-level interface to the contents and attributes of a single file within a phar archive.
// 
// Class synopsis
// [code]
// class PharFileInfo extends SplFileInfo {
// 
//    /* Methods */
//    public __construct(string $filename)
//    public chmod(int $perms): void
//    public compress(int $compression): bool
//    public decompress(): bool
//    public delMetadata(): bool
//    public getCRC32(): int
//    public getCompressedSize(): int
//    public getContent(): string
//    public getMetadata(array $unserializeOptions = []): mixed
//    public getPharFlags(): int
//    public hasMetadata(): bool
//    public isCRCChecked(): bool
//    public isCompressed(?int $compression = null): bool
//    public setMetadata(mixed $metadata): void
//    public __destruct()
// 
//    /* Inherited methods */
//    public SplFileInfo::getATime(): int|false
//    public SplFileInfo::getBasename(string $suffix = ""): string
//    public SplFileInfo::getCTime(): int|false
//    public SplFileInfo::getExtension(): string
//    public SplFileInfo::getFileInfo(?string $class = null): SplFileInfo
//    public SplFileInfo::getFilename(): string
//    public SplFileInfo::getGroup(): int|false
//    public SplFileInfo::getInode(): int|false
//    public SplFileInfo::getLinkTarget(): string|false
//    public SplFileInfo::getMTime(): int|false
//    public SplFileInfo::getOwner(): int|false
//    public SplFileInfo::getPath(): string
//    public SplFileInfo::getPathInfo(?string $class = null): ?SplFileInfo
//    public SplFileInfo::getPathname(): string
//    public SplFileInfo::getPerms(): int|false
//    public SplFileInfo::getRealPath(): string|false
//    public SplFileInfo::getSize(): int|false
//    public SplFileInfo::getType(): string|false
//    public SplFileInfo::isDir(): bool
//    public SplFileInfo::isExecutable(): bool
//    public SplFileInfo::isFile(): bool
//    public SplFileInfo::isLink(): bool
//    public SplFileInfo::isReadable(): bool
//    public SplFileInfo::isWritable(): bool
//    public SplFileInfo::openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): SplFileObject
//    public SplFileInfo::setFileClass(string $class = SplFileObject::class): void
//    public SplFileInfo::setInfoClass(string $class = SplFileInfo::class): void
//    public SplFileInfo::__toString(): string
// }
// [/code]
// 
// Table of Contents
// * PharFileInfo::chmod             - Sets file-specific permission bits
// * PharFileInfo::compress          - Compresses the current Phar entry with either zlib or bzip2 compression
// * PharFileInfo::__construct       - Construct a Phar entry object
// * PharFileInfo::decompress        - Decompresses the current Phar entry within the phar
// * PharFileInfo::delMetadata       - Deletes the metadata of the entry
// * PharFileInfo::__destruct        - Destructs a Phar entry object
// * PharFileInfo::getCRC32          - Returns CRC32 code or throws an exception if CRC has not been verified
// * PharFileInfo::getCompressedSize - Returns the actual size of the file (with compression) inside the Phar archive
// * PharFileInfo::getContent        - Get the complete file contents of the entry
// * PharFileInfo::getMetadata       - Returns file-specific meta-data saved with a file
// * PharFileInfo::getPharFlags      - Returns the Phar file entry flags
// * PharFileInfo::hasMetadata       - Returns the metadata of the entry
// * PharFileInfo::isCRCChecked      - Returns whether file entry has had its CRC verified
// * PharFileInfo::isCompressed      - Returns whether the entry is compressed
// * PharFileInfo::setMetadata       - Sets file-specific meta-data saved with a file
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.pharfileinfo.php
// THE_PHARFILEINFO_CLASS - END
// 
// THE_PHAREXCEPTION_CLASS - BEGIN
// The PharException class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// 
// Introduction
// The PharException class provides a phar-specific exception class for try/catch blocks.
// 
// Class synopsis
// [code]
// class PharException extends Exception {
// 
//    /* Inherited properties */
//    protected string $message = "";
//    private string $string = "";
//    protected int $code;
//    protected string $file = "";
//    protected int $line;
//    private array $trace = [];
//    private ?Throwable $previous = null;
// 
//    /* Inherited methods */
//    public Exception::__construct(string $message = "", int $code = 0, ?Throwable $previous = null)
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
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/class.pharexception.php
// THE_PHAREXCEPTION_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-12)
// URL: https://www.php.net/manual/en/book.phar.php
// PHAR - END
// ==============================


// ============================== BEGIN
//   PHP_COMPRESSION_PHAR_PHAR   
// ============================== PUBLIC
// PHP_COMPRESSION_PHAR_PHAR_ADDEMPTYDIR - void php_compression_phar_phar_addemptydir(Phar $phar, string $directory)
// PHP_COMPRESSION_PHAR_PHAR_ADDFILE - void php_compression_phar_phar_addfile(Phar $phar, string $filename, string $localName = null)
// PHP_COMPRESSION_PHAR_PHAR_ADDFROMSTRING - void php_compression_phar_phar_addfromstring(Phar $phar, string $localName, string $contents)
// PHP_COMPRESSION_PHAR_PHAR_APIVERSION - string php_compression_phar_phar_apiversion(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_BUILDFROMDIRECTORY - array php_compression_phar_phar_buildfromdirectory(Phar $phar, string $directory, string $pattern = "")
// PHP_COMPRESSION_PHAR_PHAR_BUILDFROMITERATOR - array php_compression_phar_phar_buildfromiterator(Phar $phar, Traversable $iterator, string $baseDirectory = null)
// PHP_COMPRESSION_PHAR_PHAR_CANCOMPRESS - bool php_compression_phar_phar_cancompress(Phar $phar, int $compression = 0)
// PHP_COMPRESSION_PHAR_PHAR_CANWRITE - bool php_compression_phar_phar_canwrite(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_COMPRESS - Phar php_compression_phar_phar_compress(Phar $phar, int $compression, string $extension = null)
// PHP_COMPRESSION_PHAR_PHAR_COMPRESSFILES - void php_compression_phar_phar_compressfiles(Phar $phar, int $compression)
// PHP_COMPRESSION_PHAR_PHAR_CONSTRUCT - Phar php_compression_phar_phar_construct(string $filename, int $flags, string $alias = null)
// PHP_COMPRESSION_PHAR_PHAR_CONVERTTODATA - PharData php_compression_phar_phar_converttodata(Phar $phar, int $format = null, int $compression = null, string $extension = null)
// PHP_COMPRESSION_PHAR_PHAR_CONVERTTOEXECUTABLE - Phar php_compression_phar_phar_converttoexecutable(Phar $phar, int $format = null, int $compression = null, string $extension = null)
// PHP_COMPRESSION_PHAR_PHAR_COPY - bool php_compression_phar_phar_copy(Phar $phar, string $from, string $to)
// PHP_COMPRESSION_PHAR_PHAR_COUNT - int php_compression_phar_phar_count(Phar $phar, int $mode = COUNT_NORMAL)
// PHP_COMPRESSION_PHAR_PHAR_CREATEDEFAULTSTUB - string php_compression_phar_phar_createdefaultstub(Phar $phar, string $index = null, string $webIndex = null)
// PHP_COMPRESSION_PHAR_PHAR_DECOMPRESS - Phar php_compression_phar_phar_decompress(Phar $phar, string $extension = null)
// PHP_COMPRESSION_PHAR_PHAR_DECOMPRESSFILES - bool php_compression_phar_phar_decompressfiles(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_DELMETADATA - bool php_compression_phar_phar_delmetadata(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_DELETE - bool php_compression_phar_phar_delete(Phar $phar, string $localName)
// PHP_COMPRESSION_PHAR_PHAR_DESTRUCT - Phar php_compression_phar_phar_destruct(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_EXTRACTTO - bool php_compression_phar_phar_extractto(Phar $phar, string $directory, array|string|null $files = null, bool $overwrite = false)
// PHP_COMPRESSION_PHAR_PHAR_GETALIAS - string php_compression_phar_phar_getalias(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETMETADATA - mixed php_compression_phar_phar_getmetadata(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETMODIFIED - bool php_compression_phar_phar_getmodified(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETPATH - string php_compression_phar_phar_getpath(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETSIGNATURE - array|false php_compression_phar_phar_getsignature(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETSTUB - string php_compression_phar_phar_getstub(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETSUPPORTEDCOMPRESSION - array php_compression_phar_phar_getsupportedcompression(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETSUPPORTEDSIGNATURES - array php_compression_phar_phar_getsupportedsignatures(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_GETVERSION - string php_compression_phar_phar_getversion(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_HASMETADATA - bool php_compression_phar_phar_hasmetadata(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_INTERCEPTFILEFUNCS - void php_compression_phar_phar_interceptfilefuncs(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_ISBUFFERING - bool php_compression_phar_phar_isbuffering(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_ISCOMPRESSED - int|false php_compression_phar_phar_iscompressed(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_ISFILEFORMAT - bool php_compression_phar_phar_isfileformat(Phar $phar, int $format)
// PHP_COMPRESSION_PHAR_PHAR_ISVALIDPHARFILENAME - bool php_compression_phar_phar_isvalidpharfilename(Phar $phar, string $filename, bool $executable = true)
// PHP_COMPRESSION_PHAR_PHAR_ISWRITABLE - bool php_compression_phar_phar_iswritable(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_LOADPHAR - bool php_compression_phar_phar_loadphar(Phar $phar, string $filename, string $alias = null)
// PHP_COMPRESSION_PHAR_PHAR_MAPPHAR - bool php_compression_phar_phar_mapphar(Phar $phar, string $alias = null, int $offset = 0)
// PHP_COMPRESSION_PHAR_PHAR_MOUNT - void php_compression_phar_phar_mount(Phar $phar, string $pharPath, string $externalPath)
// PHP_COMPRESSION_PHAR_PHAR_MUNGSERVER - void php_compression_phar_phar_mungserver(Phar $phar, array $variables)
// PHP_COMPRESSION_PHAR_PHAR_OFFSETEXISTS - bool php_compression_phar_phar_offsetexists(Phar $phar, string $localName)
// PHP_COMPRESSION_PHAR_PHAR_OFFSETGET - SplFileInfo php_compression_phar_phar_offsetget(Phar $phar, string $localName)
// PHP_COMPRESSION_PHAR_PHAR_OFFSETSET - void php_compression_phar_phar_offsetset(Phar $phar, string $localName, resource|string $value)
// PHP_COMPRESSION_PHAR_PHAR_OFFSETUNSET - void php_compression_phar_phar_offsetunset(Phar $phar, string $localName)
// PHP_COMPRESSION_PHAR_PHAR_RUNNING - string php_compression_phar_phar_running(Phar $phar, bool $returnPhar = true)
// PHP_COMPRESSION_PHAR_PHAR_SETALIAS - bool php_compression_phar_phar_setalias(Phar $phar, string $alias)
// PHP_COMPRESSION_PHAR_PHAR_SETDEFAULTSTUB - bool php_compression_phar_phar_setdefaultstub(Phar $phar, string $index = null, string $webIndex = null)
// PHP_COMPRESSION_PHAR_PHAR_SETMETADATA - void php_compression_phar_phar_setmetadata(Phar $phar, mixed $metadata)
// PHP_COMPRESSION_PHAR_PHAR_SETSIGNATUREALGORITHM - void php_compression_phar_phar_setsignaturealgorithm(Phar $phar, int $algo, string $privateKey = null)
// PHP_COMPRESSION_PHAR_PHAR_SETSTUB - bool php_compression_phar_phar_setstub(Phar $phar, resource|string $stub, int $length = -1)
// PHP_COMPRESSION_PHAR_PHAR_STARTBUFFERING - void php_compression_phar_phar_startbuffering(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_STOPBUFFERING - void php_compression_phar_phar_stopbuffering(Phar $phar)
// PHP_COMPRESSION_PHAR_PHAR_UNLINKARCHIVE - bool php_compression_phar_phar_unlinkarchive(Phar $phar, string $filename)
// PHP_COMPRESSION_PHAR_PHAR_WEBPHAR - void php_compression_phar_phar_webphar(Phar $phar, string $alias = null, string $index = null, string $fileNotFoundScript = null, array $mimeTypes = array(), callable $rewrite = null)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (56)
// Phar::addEmptyDir() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::addFile() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::addFromString() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::apiVersion() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::buildFromDirectory() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::buildFromIterator() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::canCompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::canWrite() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::compress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::compressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::convertToData() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::convertToExecutable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::copy() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::count() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::createDefaultStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::decompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::decompressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::delMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// Phar::delete() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::__destruct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::extractTo() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::getAlias() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_1
// Phar::getMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::getModified() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::getPath() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// Phar::getSignature() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::getStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::getSupportedCompression() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// Phar::getSupportedSignatures() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_1_0
// Phar::getVersion() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::hasMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// Phar::interceptFileFuncs() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::isBuffering() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::isCompressed() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::isFileFormat() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::isValidPharFilename() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// Phar::isWritable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::loadPhar() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::mapPhar() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::mount() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::mungServer() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::offsetExists() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::offsetGet() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::offsetSet() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::offsetUnset() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::running() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::setAlias() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_1
// Phar::setDefaultStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::setMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::setSignatureAlgorithm() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_1_0
// Phar::setStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::startBuffering() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::stopBuffering() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// Phar::unlinkArchive() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// Phar::webPhar() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== USING DATA_TYPES (14)
// void
// Phar - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// string
// array
// Traversable
// bool
// int
// PharData - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// null
// mixed
// false
// SplFileInfo
// resource
// callable
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ADDEMPTYDIR
// ============================== PUBLIC
// ============================== ABOUT
// Add an empty directory to the phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::addEmptyDir() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_addemptydir($phar, $directory)
{

// ========== PHAR_ADDEMPTYDIR - BEGIN
// ===== ABOUT
// Add an empty directory to the phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// With this method, an empty directory is created with path dirname. This method is similar to ZipArchive::addEmptyDir().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::addEmptyDir(string $directory): void
// ===== CODE
$phar->addEmptyDir(

$directory // string directory - The name of the empty directory to create in the phar archive

); // Return Values
// no return value, exception is thrown on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::addEmptyDir() example
// [php]
// try {
//     $a = new Phar('/path/to/phar.phar');
// 
//     $a->addEmptyDir('/full/path/to/file');
//     // demonstrates how this file is stored
//     $b = $a['full/path/to/file']->isDir();
// } catch (Exception $e) {
//     // handle errors here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.addemptydir.php
// ========== PHAR_ADDEMPTYDIR - END

// SYNTAX:
// void Phar::addEmptyDir(string $directory)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ADDEMPTYDIR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ADDFILE
// ============================== PUBLIC
// ============================== ABOUT
// Add a file from the filesystem to the phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::addFile() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_addfile($phar, $filename, $localName = null)
{

// ========== PHAR_ADDFILE - BEGIN
// ===== ABOUT
// Add a file from the filesystem to the phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// With this method, any file or URL can be added to the phar archive. If the optional second parameter localName is a string, the file will be stored in the archive with that name, otherwise the file parameter is used as the path to store within the archive. URLs must have a localname or an exception is thrown. This method is similar to ZipArchive::addFile().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::addFile(string $filename, ?string $localName = null): void
// ===== CODE
$phar->addFile(

$filename, // string filename - Full or relative path to a file on disk to be added to the phar archive.

$localName // string localName - Path that the file will be stored in the archive.

); // Return Values
// no return value, exception is thrown on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - localName is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::addFile() example
// [php]
// try {
//     $a = new Phar('/path/to/phar.phar');
// 
//     $a->addFile('/full/path/to/file');
//     // demonstrates how this file is stored
//     $b = $a['full/path/to/file']->getContent();
// 
//     $a->addFile('/full/path/to/file', 'my/file.txt');
//     $c = $a['my/file.txt']->getContent();
// 
//     // demonstrate URL usage
//     $a->addFile('http://www.example.com', 'example.html');
// } catch (Exception $e) {
//     // handle errors here
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Phar::addFile(), Phar::addFromString() and Phar::offsetSet() save a new phar archive each time they are called. If performance is a concern, Phar::buildFromDirectory() or Phar::buildFromIterator() should be used instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.addfile.php
// ========== PHAR_ADDFILE - END

// SYNTAX:
// void Phar::addFile(string $filename, string $localName = null)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ADDFILE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ADDFROMSTRING
// ============================== PUBLIC
// ============================== ABOUT
// Add a file from a string to the phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::addFromString() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_addfromstring($phar, $localName, $contents)
{

// ========== PHAR_ADDFROMSTRING - BEGIN
// ===== ABOUT
// Add a file from a string to the phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// With this method, any string can be added to the phar archive. The file will be stored in the archive with localname as its path. This method is similar to ZipArchive::addFromString().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::addFromString(string $localName, string $contents): void
// ===== CODE
$phar->addFromString(

$localName, // string localName - Path that the file will be stored in the archive.

$contents // string contents - The file contents to store

); // Return Values
// no return value, exception is thrown on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::addFromString() example
// [php]
// try {
//     $a = new Phar('/path/to/phar.phar');
// 
//     $a->addFromString('path/to/file.txt', 'my simple file');
//     $b = $a['path/to/file.txt']->getContent();
// 
//     // to add contents from a stream handle for large files, use offsetSet()
//     $c = fopen('/path/to/hugefile.bin');
//     $a['largefile.bin'] = $c;
//     fclose($c);
// } catch (Exception $e) {
//     // handle errors here
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Phar::addFile(), Phar::addFromString() and Phar::offsetSet() save a new phar archive each time they are called. If performance is a concern, Phar::buildFromDirectory() or Phar::buildFromIterator() should be used instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.addfromstring.php
// ========== PHAR_ADDFROMSTRING - END

// SYNTAX:
// void Phar::addFromString(string $localName, string $contents)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ADDFROMSTRING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_APIVERSION
// ============================== PUBLIC
// ============================== ABOUT
// Returns the api version.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::apiVersion() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_apiversion($phar)
{
$return_phar_apiversion = null;

// ========== PHAR_APIVERSION - BEGIN
// ===== ABOUT
// Returns the api version
// ===== DESCRIPTION
// Return the API version of the phar file format that will be used when creating phars. The Phar extension supports reading API version 1.0.0 or newer. API version 1.1.0 is required for SHA-256 and SHA-512 hash, and API version 1.1.1 is required to store empty directories.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// final public static Phar::apiVersion(): string
// ===== CODE
$return_phar_apiversion = $phar->apiVersion(

); // Return Values
// The API version string as in "1.0.0".
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::apiVersion() example
// [php]
// echo Phar::apiVersion();
// [/php]
// The above example will output:
// [result]
// 1.1.1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.apiversion.php
// ========== PHAR_APIVERSION - END

// SYNTAX:
// string Phar::apiVersion()

return $return_phar_apiversion; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_APIVERSION
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_BUILDFROMDIRECTORY
// ============================== PUBLIC
// ============================== ABOUT
// Construct a phar archive from the files within a directory.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::buildFromDirectory() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_buildfromdirectory($phar, $directory, $pattern = "")
{
$return_phar_buildfromdirectory = null;

// ========== PHAR_BUILDFROMDIRECTORY - BEGIN
// ===== ABOUT
// Construct a phar archive from the files within a directory
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Populate a phar archive from directory contents. The optional second parameter is a regular expression (pcre) that is used to exclude files. Any filename that matches the regular expression will be included, all others will be excluded. For more fine-grained control, use Phar::buildFromIterator().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::buildFromDirectory(string $directory, string $pattern = ""): array
// ===== CODE
$return_phar_buildfromdirectory = $phar->buildFromDirectory(

$directory, // string directory - The full or relative path to the directory that contains all files to add to the archive.

$pattern // string pattern - An optional pcre regular expression that is used to filter the list of files. Only file paths matching the regular expression will be included in the archive.

); // Return Values
// Phar::buildFromDirectory() returns an associative array mapping internal path of file to the full path of the file on the filesystem.
// 
// Errors/Exceptions
// This method throws BadMethodCallException when unable to instantiate the internal directory iterators, or a PharException if there were errors saving the phar archive.
// 
// Changelog
// Version - Description
// 8.1.0   - Phar::buildFromDirectory() no longer returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::buildFromDirectory() example
// [php]
// // create with alias "project.phar"
// $phar = new Phar('project.phar', 0, 'project.phar');
// // add all files in the project
// $phar->buildFromDirectory(dirname(__FILE__) . '/project');
// $phar->setStub($phar->createDefaultStub('cli/index.php', 'www/index.php'));
// 
// $phar2 = new Phar('project2.phar', 0, 'project2.phar');
// // add all files in the project, only include php files
// $phar2->buildFromDirectory(dirname(__FILE__) . '/project', '/\.php$/');
// $phar2->setStub($phar->createDefaultStub('cli/index.php', 'www/index.php'));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.buildfromdirectory.php
// ========== PHAR_BUILDFROMDIRECTORY - END

// SYNTAX:
// array Phar::buildFromDirectory(string $directory, string $pattern = "")

return $return_phar_buildfromdirectory; // array
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_BUILDFROMDIRECTORY
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_BUILDFROMITERATOR
// ============================== PUBLIC
// ============================== ABOUT
// Construct a phar archive from an iterator.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::buildFromIterator() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_buildfromiterator($phar, $iterator, $baseDirectory = null)
{
$return_phar_buildfromiterator = null;

// ========== PHAR_BUILDFROMITERATOR - BEGIN
// ===== ABOUT
// Construct a phar archive from an iterator
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Populate a phar archive from an iterator. Two styles of iterators are supported, iterators that map the filename within the phar to the name of a file on disk, and iterators like DirectoryIterator that return SplFileInfo objects. For iterators that return SplFileInfo objects, the second parameter is required.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::buildFromIterator(Traversable $iterator, ?string $baseDirectory = null): array
// ===== CODE
$return_phar_buildfromiterator = $phar->buildFromIterator(

$iterator, // Traversable iterator - Any iterator that either associatively maps phar file to location or returns SplFileInfo objects

$baseDirectory // string baseDirectory - For iterators that return SplFileInfo objects, the portion of each file's full path to remove when adding to the phar archive

); // Return Values
// Phar::buildFromIterator() returns an associative array mapping internal path of file to the full path of the file on the filesystem.
// 
// Errors/Exceptions
// This method returns UnexpectedValueException when the iterator returns incorrect values, such as an integer key instead of a string, a BadMethodCallException when an SplFileInfo-based iterator is passed without a baseDirectory parameter, or a PharException if there were errors saving the phar archive.
// 
// Changelog
// Version - Description
// 8.1.0   - Phar::buildFromIterator() no longer returns false.
// 8.0.0   - baseDirectory is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::buildFromIterator() with SplFileInfo
// For most phar archives, the archive will reflect an actual directory layout, and the second style is the most useful. For instance, to create a phar archive containing the files in this sample directory layout:
// [code]
// /path/to/project/
//                  config/
//                         dist.xml
//                         debug.xml
//                  lib/
//                      file1.php
//                      file2.php
//                  src/
//                      processthing.php
//                  www/
//                      index.php
//                  cli/
//                      index.php
// [/code]
// This code could be used to add these files to the "project.phar" phar archive:
// [php]
// // create with alias "project.phar"
// $phar = new Phar('project.phar', 0, 'project.phar');
// $phar->buildFromIterator(
//     new RecursiveIteratorIterator(
//      new RecursiveDirectoryIterator('/path/to/project')),
//     '/path/to/project');
// $phar->setStub($phar->createDefaultStub('cli/index.php', 'www/index.php'));
// [/php]
// The file project.phar can then be used immediately. Phar::buildFromIterator() does not set values such as compression, metadata, and this can be done after creating the phar archive.
// As an interesting note, Phar::buildFromIterator() can also be used to copy the contents of an existing phar archive, as the Phar object descends from DirectoryIterator:
// [php]
// // create with alias "project.phar"
// $phar = new Phar('project.phar', 0, 'project.phar');
// $phar->buildFromIterator(
//     new RecursiveIteratorIterator(
//      new Phar('/path/to/anotherphar.phar')),
//     'phar:///path/to/anotherphar.phar/path/to/project');
// $phar->setStub($phar->createDefaultStub('cli/index.php', 'www/index.php'));
// [/php]
// [/example]
// [example]
// Example #2 A Phar::buildFromIterator() with other iterators
// The second form of the iterator can be used with any iterator that returns a key => value mapping, such as an ArrayIterator:
// [php]
// // create with alias "project.phar"
// $phar = new Phar('project.phar', 0, 'project.phar');
// $phar->buildFromIterator(
//     new ArrayIterator(
//      array(
//         'internal/file.php' => dirname(__FILE__) . '/somefile.php',
//         'another/file.jpg' => fopen('/path/to/bigfile.jpg', 'rb'),
//      )));
// $phar->setStub($phar->createDefaultStub('cli/index.php', 'www/index.php'));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.buildfromiterator.php
// ========== PHAR_BUILDFROMITERATOR - END

// SYNTAX:
// array Phar::buildFromIterator(Traversable $iterator, string $baseDirectory = null)

return $return_phar_buildfromiterator; // array
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_BUILDFROMITERATOR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_CANCOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether phar extension supports compression using either zlib or bzip2.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::canCompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_cancompress($phar, $compression = 0)
{
$return_phar_cancompress = false;

// ========== PHAR_CANCOMPRESS - BEGIN
// ===== ABOUT
// Returns whether phar extension supports compression using either zlib or bzip2
// ===== DESCRIPTION
// This should be used to test whether compression is possible prior to loading a phar archive containing compressed files.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// final public static Phar::canCompress(int $compression = 0): bool
// ===== CODE
$return_phar_cancompress = $phar->canCompress(

$compression // int compression - Either Phar::GZ or Phar::BZ2 can be used to test whether compression is possible with a specific compression algorithm (zlib or bzip2).

); // Return Values
// true if compression/decompression is available, false if not.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::canCompress() example
// [php]
// if (Phar::canCompress()) {
//     echo file_get_contents('phar://compressedphar.phar/internal/file.txt');
// } else {
//     echo 'no compression available';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.cancompress.php
// ========== PHAR_CANCOMPRESS - END

// SYNTAX:
// bool Phar::canCompress(int $compression = 0)

return $return_phar_cancompress; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_CANCOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_CANWRITE
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether phar extension supports writing and creating phars.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::canWrite() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_canwrite($phar)
{
$return_phar_canwrite = false;

// ========== PHAR_CANWRITE - BEGIN
// ===== ABOUT
// Returns whether phar extension supports writing and creating phars
// ===== DESCRIPTION
// This static method determines whether write access has been disabled in the system php.ini via the phar.readonly ini variable.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// final public static Phar::canWrite(): bool
// ===== CODE
$return_phar_canwrite = $phar->canWrite(

); // Return Values
// true if write access is enabled, false if it is disabled.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::canWrite() example
// [php]
// if (Phar::canWrite()) {
//     file_put_contents('phar://myphar.phar/file.txt', 'hi there');
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.canwrite.php
// ========== PHAR_CANWRITE - END

// SYNTAX:
// bool Phar::canWrite()

return $return_phar_canwrite; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_CANWRITE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_COMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Compresses the entire Phar archive using Gzip or Bzip2 compression.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::compress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_compress($phar, $compression, $extension = null)
{
$return_phar_compress = null;

// ========== PHAR_COMPRESS - BEGIN
// ===== ABOUT
// Compresses the entire Phar archive using Gzip or Bzip2 compression
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// For tar-based and phar-based phar archives, this method compresses the entire archive using gzip compression or bzip2 compression. The resulting file can be processed with the gunzip command/bunzip command, or accessed directly and transparently with the Phar extension.
// For Zip-based phar archives, this method fails with an exception. The zlib extension must be enabled to compress with gzip compression, the bzip2 extension must be enabled in order to compress with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.
// In addition, this method automatically renames the archive, appending .gz, .bz2 or removing the extension if passed Phar::NONE to remove compression. Alternatively, a file extension may be specified with the second parameter.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::compress(int $compression, ?string $extension = null): ?Phar
// ===== CODE
$return_phar_compress = $phar->compress(

$compression, // int compression - Compression must be one of Phar::GZ, Phar::BZ2 to add compression, or Phar::NONE to remove compression.

$extension // string extension - By default, the extension is .phar.gz or .phar.bz2 for compressing phar archives, and .phar.tar.gz or .phar.tar.bz2 for compressing tar archives. For decompressing, the default file extensions are .phar and .phar.tar.

); // Return Values
// Returns a Phar object, or null on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, the zlib extension is not available, or the bzip2 extension is not enabled.
// 
// Changelog
// Version - Description
// 8.0.0   - extension is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::compress() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// $p1 = $p->compress(Phar::GZ); // copies to /path/to/my.phar.gz
// $p2 = $p->compress(Phar::BZ2); // copies to /path/to/my.phar.bz2
// $p3 = $p2->compress(Phar::NONE); // exception: /path/to/my.phar already exists
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.compress.php
// ========== PHAR_COMPRESS - END

// SYNTAX:
// Phar Phar::compress(int $compression, string $extension = null)

return $return_phar_compress; // Phar
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_COMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_COMPRESSFILES
// ============================== PUBLIC
// ============================== ABOUT
// Compresses all files in the current Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::compressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_compressfiles($phar, $compression)
{

// ========== PHAR_COMPRESSFILES - BEGIN
// ===== ABOUT
// Compresses all files in the current Phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// For tar-based phar archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use Phar::compress() to compress an entire tar-based phar archive.
// For Zip-based and phar-based phar archives, this method compresses all files in the Phar archive using the specified compression. The zlib or bzip2 extensions must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2/zlib compression, the respective extension must be enabled in order to decompress the files prior to re-compressing. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::compressFiles(int $compression): void
// ===== CODE
$phar->compressFiles(

$compression // int compression - Compression must be one of Phar::GZ, Phar::BZ2 to add compression, or Phar::NONE to remove compression.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, the zlib extension is not available, or if any files are compressed using bzip2 compression and the bzip2 extension is not enabled.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::compressFiles() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// $p->compressFiles(Phar::GZ);
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// [/php]
// The above example will output:
// [result]
// string(10) "myfile.txt"
// bool(false)
// bool(false)
// bool(false)
// string(11) "myfile2.txt"
// bool(false)
// bool(false)
// bool(false)
// string(10) "myfile.txt"
// int(4096)
// bool(false)
// bool(true)
// string(11) "myfile2.txt"
// int(4096)
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.compressfiles.php
// ========== PHAR_COMPRESSFILES - END

// SYNTAX:
// void Phar::compressFiles(int $compression)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_COMPRESSFILES
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Construct a Phar archive object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_construct($filename, $flags, $alias = null)
{
$return_phar_construct = null;

// ========== PHAR_CONSTRUCT - BEGIN
// ===== ABOUT
// Construct a Phar archive object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::__construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null)
// ===== CODE
$return_phar_construct = new Phar(

$filename, // string filename - Path to an existing Phar archive or to-be-created archive. The file name's extension must contain .phar.

$flags, // int flags - Flags to pass to parent class RecursiveDirectoryIterator.

$alias // string alias - Alias with which this Phar archive should be referred to in calls to stream functionality.

); // Return
// Phar
// 
// Errors/Exceptions
// Throws BadMethodCallException if called twice, UnexpectedValueException if the phar archive can't be opened.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::__construct() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,
//                   'my.phar');
// } catch (UnexpectedValueException $e) {
//     die('Could not open my.phar');
// } catch (BadMethodCallException $e) {
//     echo 'technically, this cannot happen';
// }
// // this works now
// echo file_get_contents('phar://my.phar/example.txt');
// // and works as if we had typed
// echo file_get_contents('phar:///path/to/my.phar/example.txt');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.construct.php
// ========== PHAR_CONSTRUCT - END

// SYNTAX:
// Phar Phar::__construct(string $filename, int $flags, string $alias = null)

return $return_phar_construct; // Phar
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_CONVERTTODATA
// ============================== PUBLIC
// ============================== ABOUT
// Convert a phar archive to a non-executable tar or zip file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::convertToData() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_converttodata($phar, $format = null, $compression = null, $extension = null)
{
$return_phar_converttodata = null;

// ========== PHAR_CONVERTTODATA - BEGIN
// ===== ABOUT
// Convert a phar archive to a non-executable tar or zip file
// ===== DESCRIPTION
// This method is used to convert an executable phar archive to either a tar or zip file. To make the tar or zip non-executable, the phar stub and phar alias files are removed from the newly created archive.
// If no changes are specified, this method throws a BadMethodCallException if the archive is in phar file format. For archives in tar or zip file format, this method converts the archive to a non-executable archive.
// If successful, the method creates a new archive on disk and returns a PharData object. The old archive is not removed from disk, and should be done manually after the process has finished.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::convertToData(?int $format = null, ?int $compression = null, ?string $extension = null): ?PharData
// ===== CODE
$return_phar_converttodata = $phar->convertToData(

$format, // int format - This should be one of Phar::TAR or Phar::ZIP. If set to null, the existing file format will be preserved.

$compression, // int compression - This should be one of Phar::NONE for no whole-archive compression, Phar::GZ for zlib-based compression, and Phar::BZ2 for bzip-based compression.

$extension // string extension - This parameter is used to override the default file extension for a converted archive. Note that .phar cannot be used anywhere in the filename for a non-executable tar or zip archive.
// If converting to a tar-based phar archive, the default extensions are .tar, .tar.gz, and .tar.bz2 depending on specified compression. For zip-based archives, the default extension is .zip.

); // Return Values
// The method returns a PharData object on success, or null on failure.
// 
// Errors/Exceptions
// This method throws BadMethodCallException when unable to compress, an unknown compression method has been specified, the requested archive is buffering with Phar::startBuffering() and has not concluded with Phar::stopBuffering(), and a PharException if any problems are encountered during the phar creation process.
// 
// Changelog
// Version - Description
// 8.0.0   - format, compression, and extension are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::convertToData() example
// Using Phar::convertToData():
// [php]
// try {
//     $tarphar = new Phar('myphar.phar.tar');
//     // note that myphar.phar.tar is *not* unlinked
//     // convert it to the non-executable tar file format
//     // creates myphar.tar
//     $tar = $tarphar->convertToData();
//     // convert to non-executable zip format, creates myphar.zip
//     $zip = $tarphar->convertToData(Phar::ZIP);
//     // create myphar.tbz
//     $tgz = $tarphar->convertToData(Phar::TAR, Phar::BZ2, '.tbz');
//     // creates myphar.phar.tgz
//     $phar = $tarphar->convertToData(Phar::PHAR); // throws exception
// } catch (Exception $e) {
//     // handle the error here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.converttodata.php
// ========== PHAR_CONVERTTODATA - END

// SYNTAX:
// PharData Phar::convertToData(int $format = null, int $compression = null, string $extension = null)

return $return_phar_converttodata; // PharData
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_CONVERTTODATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_CONVERTTOEXECUTABLE
// ============================== PUBLIC
// ============================== ABOUT
// Convert a phar archive to another executable phar archive file format.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::convertToExecutable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_converttoexecutable($phar, $format = null, $compression = null, $extension = null)
{
$return_phar_converttoexecutable = null;

// ========== PHAR_CONVERTTOEXECUTABLE - BEGIN
// ===== ABOUT
// Convert a phar archive to another executable phar archive file format
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// This method is used to convert a phar archive to another file format. For instance, it can be used to create a tar-based executable phar archive from a zip-based executable phar archive, or from an executable phar archive in the phar file format. In addition, it can be used to apply whole-archive compression to a tar or phar-based archive.
// If no changes are specified, this method throws a BadMethodCallException.
// If successful, the method creates a new archive on disk and returns a Phar object. The old archive is not removed from disk, and should be done manually after the process has finished.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null): ?Phar
// ===== CODE
$return_phar_converttoexecutable = $phar->convertToExecutable(

$format, // int format - This should be one of Phar::PHAR, Phar::TAR, or Phar::ZIP. If set to null, the existing file format will be preserved.

$compression, // int compression - This should be one of Phar::NONE for no whole-archive compression, Phar::GZ for zlib-based compression, and Phar::BZ2 for bzip-based compression.

$extension // string extension - This parameter is used to override the default file extension for a converted archive. Note that all zip- and tar-based phar archives must contain .phar in their file extension in order to be processed as a phar archive.
// If converting to a phar-based archive, the default extensions are .phar, .phar.gz, or .phar.bz2 depending on the specified compression. For tar-based phar archives, the default extensions are .phar.tar, .phar.tar.gz, and .phar.tar.bz2. For zip-based phar archives, the default extension is .phar.zip.

); // Return Values
// The method returns a Phar object on success, or null on failure.
// 
// Errors/Exceptions
// This method throws BadMethodCallException when unable to compress, an unknown compression method has been specified, the requested archive is buffering with Phar::startBuffering() and has not concluded with Phar::stopBuffering(), an UnexpectedValueException if write support is disabled, and a PharException if any problems are encountered during the phar creation process.
// 
// Changelog
// Version - Description
// 8.0.0   - format, compression, and extension are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::convertToExecutable() example
// Using Phar::convertToExecutable():
// [php]
// try {
//     $tarphar = new Phar('myphar.phar.tar');
//     // convert it to the phar file format
//     // note that myphar.phar.tar is *not* unlinked
//     $phar = $tarphar->convertToExecutable(Phar::PHAR); // creates myphar.phar
//     $phar->setStub($phar->createDefaultStub('cli.php', 'web/index.php'));
//     // creates myphar.phar.tgz
//     $compressed = $phar->convertToExecutable(Phar::TAR, Phar::GZ, '.phar.tgz');
// } catch (Exception $e) {
//     // handle the error here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.converttoexecutable.php
// ========== PHAR_CONVERTTOEXECUTABLE - END

// SYNTAX:
// Phar Phar::convertToExecutable(int $format = null, int $compression = null, string $extension = null)

return $return_phar_converttoexecutable; // Phar
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_CONVERTTOEXECUTABLE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_COPY
// ============================== PUBLIC
// ============================== ABOUT
// Copy a file internal to the phar archive to another new file within the phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::copy() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_copy($phar, $from, $to)
{
$return_phar_copy = false;

// ========== PHAR_COPY - BEGIN
// ===== ABOUT
// Copy a file internal to the phar archive to another new file within the phar
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Copy a file internal to the phar archive to another new file within the phar. This is an object-oriented alternative to using copy() with the phar stream wrapper.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::copy(string $from, string $to): bool
// ===== CODE
$return_phar_copy = $phar->copy(

$from, // string $from

$to // string $to

); // Return Values
// returns true on success, but it is safer to encase method call in a try/catch block and assume success if no exception is thrown.
// 
// Errors/Exceptions
// throws UnexpectedValueException if the source file does not exist, the destination file already exists, write access is disabled, opening either file fails, reading the source file fails, or a PharException if writing the changes to the phar fails.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::copy() example
// This example shows using Phar::copy() and the equivalent stream wrapper performance of the same thing. The primary difference between the two approaches is error handling. All Phar methods throw exceptions, whereas the stream wrapper uses trigger_error().
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     $phar['a'] = 'hi';
//     $phar->copy('a', 'b');
//     echo $phar['b']; // outputs "hi"
// } catch (Exception $e) {
//     // handle error
// }
// 
// // the stream wrapper equivalent of the above code.
// // E_WARNINGS are triggered on error rather than exceptions.
// copy('phar://myphar.phar/a', 'phar//myphar.phar/c');
// echo file_get_contents('phar://myphar.phar/c'); // outputs "hi"
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.copy.php
// ========== PHAR_COPY - END

// SYNTAX:
// bool Phar::copy(string $from, string $to)

return $return_phar_copy; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_COPY
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of entries (files) in the Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::count() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== USING CONSTANTS (1)
// COUNT_NORMAL - Phar::count()
// ============================== CODE
function php_compression_phar_phar_count($phar, $mode = COUNT_NORMAL)
{
$return_phar_count = 0;

// ========== PHAR_COUNT - BEGIN
// ===== ABOUT
// Returns the number of entries (files) in the Phar archive
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::count(int $mode = COUNT_NORMAL): int
// ===== CODE
$return_phar_count = $phar->count(

$mode // int mode - mode is an integer value specifying the counting mode to be used. By default, it is set to COUNT_NORMAL, which counts only the number of items in the archive that have not been deleted or hidden. When set to COUNT_RECURSIVE, it counts all items in the archive, including those that have been deleted or hidden.

); // Return Values
// The number of files contained within this phar, or 0 (the number zero) if none.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::count() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
// } catch (Exception $e) {
//     echo 'Could not create phar:', $e;
// }
// echo 'The new phar has ' . $p->count() . " entries\n";
// $p['file.txt'] = 'hi';
// echo 'The new phar has ' . $p->count() . " entries\n";
// [/php]
// The above example will output:
// [result]
// The new phar has 0 entries
// The new phar has 1 entries
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.count.php
// ========== PHAR_COUNT - END

// SYNTAX:
// int Phar::count(int $mode = COUNT_NORMAL)

return $return_phar_count; // int
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_COUNT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_CREATEDEFAULTSTUB
// ============================== PUBLIC
// ============================== ABOUT
// Create a phar-file format specific stub.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::createDefaultStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_createdefaultstub($phar, $index = null, $webIndex = null)
{
$return_phar_createdefaultstub = null;

// ========== PHAR_CREATEDEFAULTSTUB - BEGIN
// ===== ABOUT
// Create a phar-file format specific stub
// ===== DESCRIPTION
// This method is intended for creation of phar-file format-specific stubs, and is not intended for use with tar- or zip-based phar archives.
// Phar archives contain a bootstrap loader, or stub written in PHP that is executed when the archive is executed in PHP either via include:
// [php]
// include 'myphar.phar';
// [/php]
// or by simple execution:
// [code]
// php myphar.phar
//     
// [/code]
// This method provides a simple and easy method to create a stub that will run a startup file from the phar archive. In addition, different files can be specified for running the phar archive from the command line versus through a web server. The loader stub also calls Phar::interceptFileFuncs() to allow easy bundling of a PHP application that accesses the file system. If the phar extension is not present, the loader stub will extract the phar archive to a temporary directory and then operate on the files. A shutdown function erases the temporary files on exit.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::createDefaultStub(?string $index = null, ?string $webIndex = null): string
// ===== CODE
$return_phar_createdefaultstub = $phar->createDefaultStub(

$index, // string index - Relative path within the phar archive to run if accessed on the command-line

$webIndex // string webIndex - Relative path within the phar archive to run if accessed through a web browser

); // Return Values
// Returns a string containing the contents of a customized bootstrap loader (stub) that allows the created Phar archive to work with or without the Phar extension enabled.
// 
// Errors/Exceptions
// Throws UnexpectedValueException if either parameter is longer than 400 bytes.
// 
// Changelog
// Version - Description
// 8.0.0   - index and webIndex are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::createDefaultStub() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     $phar->setStub($phar->createDefaultStub('cli.php', 'web/index.php'));
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.createdefaultstub.php
// ========== PHAR_CREATEDEFAULTSTUB - END

// SYNTAX:
// string Phar::createDefaultStub(string $index = null, string $webIndex = null)

return $return_phar_createdefaultstub; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_CREATEDEFAULTSTUB
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_DECOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Decompresses the entire Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::decompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_decompress($phar, $extension = null)
{
$return_phar_decompress = null;

// ========== PHAR_DECOMPRESS - BEGIN
// ===== ABOUT
// Decompresses the entire Phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// For tar-based and phar-based phar archives, this method decompresses the entire archive.
// For Zip-based phar archives, this method fails with an exception. The zlib extension must be enabled to decompress an archive compressed with gzip compression, and the bzip2 extension must be enabled in order to decompress an archive compressed with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.
// In addition, this method automatically changes the file extension of the archive, .phar by default for phar archives, or .phar.tar for tar-based phar archives. Alternatively, a file extension may be specified with the second parameter.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::decompress(?string $extension = null): ?Phar
// ===== CODE
$return_phar_decompress = $phar->decompress(

$extension // string extension - For decompressing, the default file extensions are .phar and .phar.tar. Use this parameter to specify another file extension. Be aware that all executable phar archives must contain .phar in their filename.

); // Return Values
// A Phar object is returned on success, and null on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, the zlib extension is not available, or the bzip2 extension is not enabled.
// 
// Changelog
// Version - Description
// 8.0.0   - extension is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::decompress() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar.gz');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// $p3 = $p2->decompress(); // creates /path/to/my.phar
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.decompress.php
// ========== PHAR_DECOMPRESS - END

// SYNTAX:
// Phar Phar::decompress(string $extension = null)

return $return_phar_decompress; // Phar
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_DECOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_DECOMPRESSFILES
// ============================== PUBLIC
// ============================== ABOUT
// Decompresses all files in the current Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::decompressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_decompressfiles($phar)
{
$return_phar_decompressfiles = false;

// ========== PHAR_DECOMPRESSFILES - BEGIN
// ===== ABOUT
// Decompresses all files in the current Phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// For tar-based phar archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use Phar::compress() to compress an entire tar-based phar archive.
// For Zip-based and phar-based phar archives, this method decompresses all files in the Phar archive. The zlib or bzip2 extensions must be enabled to take advantage of this feature if any files are compressed using bzip2/zlib compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::decompressFiles(): bool
// ===== CODE
$return_phar_decompressfiles = $phar->decompressFiles(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, the zlib extension is not available, or if any files are compressed using bzip2 compression and the bzip2 extension is not enabled.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::decompressFiles() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// $p->compressFiles(Phar::GZ);
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// $p->decompressFiles();
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// [/php]
// The above example will output:
// [result]
// string(10) "myfile.txt"
// int(4096)
// bool(false)
// bool(true)
// string(11) "myfile2.txt"
// int(4096)
// bool(false)
// bool(true)
// string(10) "myfile.txt"
// bool(false)
// bool(false)
// bool(false)
// string(11) "myfile2.txt"
// bool(false)
// bool(false)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.decompressfiles.php
// ========== PHAR_DECOMPRESSFILES - END

// SYNTAX:
// bool Phar::decompressFiles()

return $return_phar_decompressfiles; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_DECOMPRESSFILES
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_DELMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Deletes the global metadata of the phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_0
// ============================== USING SUBCLASSES (1)
// Phar::delMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ============================== CODE
function php_compression_phar_phar_delmetadata($phar)
{
$return_phar_delmetadata = false;

// ========== PHAR_DELMETADATA - BEGIN
// ===== ABOUT
// Deletes the global metadata of the phar
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Deletes the global metadata of the phar
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ===== SYNTAX
// public Phar::delMetadata(): bool
// ===== CODE
$return_phar_delmetadata = $phar->delMetadata(

); // Return Values
// returns true on success, but it is better to check for thrown exception, and assume success if none is thrown.
// 
// Errors/Exceptions
// Throws PharException if errors occur while flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::delMetaData() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     var_dump($phar->getMetadata());
//     $phar->setMetadata("hi there");
//     var_dump($phar->getMetadata());
//     $phar->delMetadata();
//     var_dump($phar->getMetadata());
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// The above example will output:
// [result]
// NULL
// string(8) "hi there"
// NULL
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.delmetadata.php
// ========== PHAR_DELMETADATA - END

// SYNTAX:
// bool Phar::delMetadata()

return $return_phar_delmetadata; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_DELMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_DELETE
// ============================== PUBLIC
// ============================== ABOUT
// Delete a file within a phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::delete() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_delete($phar, $localName)
{
$return_phar_delete = false;

// ========== PHAR_DELETE - BEGIN
// ===== ABOUT
// Delete a file within a phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Delete a file within an archive. This is the functional equivalent of calling unlink() on the stream wrapper equivalent, as shown in the example below.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::delete(string $localName): bool
// ===== CODE
$return_phar_delete = $phar->delete(

$localName // string localName - Path within an archive to the file to delete.

); // Return Values
// returns true on success, but it is better to check for thrown exception, and assume success if none is thrown.
// 
// Errors/Exceptions
// Throws PharException if errors occur while flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::delete() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     $phar->delete('unlink/me.php');
//     // this is equivalent to:
//     unlink('phar://myphar.phar/unlink/me.php');
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.delete.php
// ========== PHAR_DELETE - END

// SYNTAX:
// bool Phar::delete(string $localName)

return $return_phar_delete; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_DELETE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_DESTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Destructs a Phar archive object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::__destruct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_destruct($phar)
{
$return_phar_destruct = null;

// ========== PHAR_DESTRUCT - BEGIN
// ===== ABOUT
// Destructs a Phar archive object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::__destruct()
// ===== CODE
$return_phar_destruct = $phar->__destruct(

// This function has no parameters.

); // Return
// Phar
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.destruct.php
// ========== PHAR_DESTRUCT - END

// SYNTAX:
// Phar Phar::__destruct()

return $return_phar_destruct; // Phar
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_DESTRUCT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_EXTRACTTO
// ============================== PUBLIC
// ============================== ABOUT
// Extract the contents of a phar archive to a directory.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::extractTo() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_extractto($phar, $directory, $files = null, $overwrite = false)
{
$return_phar_extractto = false;

// ========== PHAR_EXTRACTTO - BEGIN
// ===== ABOUT
// Extract the contents of a phar archive to a directory
// ===== DESCRIPTION
// Extract all files within a phar archive to disk. Extracted files and directories preserve permissions as stored in the archive. The optional parameters allow optional control over which files are extracted, and whether existing files on disk can be overwritten. The second parameter files can be either the name of a file or directory to extract, or an array of names of files and directories to extract. By default, this method will not overwrite existing files, the third parameter can be set to true to enable overwriting of files. This method is similar to ZipArchive::extractTo().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::extractTo(string $directory, array|string|null $files = null, bool $overwrite = false): bool
// ===== CODE
$return_phar_extractto = $phar->extractTo(

$directory, // string directory - Path to extract the given files to

$files, // array|string|null files - The name of a file or directory to extract, or an array of files/directories to extract, null to skip this param

$overwrite // bool overwrite - Set to true to enable overwriting existing files

); // Return Values
// returns true on success, but it is better to check for thrown exception, and assume success if none is thrown.
// 
// Errors/Exceptions
// Throws PharException if errors occur while flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::extractTo() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     $phar->extractTo('/full/path'); // extract all files
//     $phar->extractTo('/another/path', 'file.txt'); // extract only file.txt
//     $phar->extractTo('/this/path',
//         array('file1.txt', 'file2.txt')); // extract 2 files only
//     $phar->extractTo('/third/path', null, true); // extract all files, and overwrite
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Windows NTFS file systems do not support some characters in filenames, namely <|>*?":. Filenames with a trailing dot are not supported either. Contrary to some extraction tools, this method does not replace these characters with an underscore, but instead fails to extract such files.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.extractto.php
// ========== PHAR_EXTRACTTO - END

// SYNTAX:
// bool Phar::extractTo(string $directory, array|string|null $files = null, bool $overwrite = false)

return $return_phar_extractto; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_EXTRACTTO
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETALIAS
// ============================== PUBLIC
// ============================== ABOUT
// Get the alias for Phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_1
// ============================== USING SUBCLASSES (1)
// Phar::getAlias() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_1
// ============================== CODE
function php_compression_phar_phar_getalias($phar)
{
$return_phar_getalias = null;

// ========== PHAR_GETALIAS - BEGIN
// ===== ABOUT
// Get the alias for Phar
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_1
// ===== SYNTAX
// public Phar::getAlias(): ?string
// ===== CODE
$return_phar_getalias = $phar->getAlias(

// This function has no parameters.

); // Return Values
// Returns the alias or null if there's no alias.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getalias.php
// ========== PHAR_GETALIAS - END

// SYNTAX:
// string Phar::getAlias()

return $return_phar_getalias; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETALIAS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Returns phar archive meta-data.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::getMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_getmetadata($phar)
{
$return_phar_getmetadata = null;

// ========== PHAR_GETMETADATA - BEGIN
// ===== ABOUT
// Returns phar archive meta-data
// ===== DESCRIPTION
// Retrieve archive meta-data. Meta-data can be any PHP variable that can be serialized.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::getMetadata(array $unserializeOptions = []): mixed
// ===== CODE
$return_phar_getmetadata = $phar->getMetadata(

// No parameters.

); // Return Values
// Any PHP value that can be serialized and is stored as meta-data for the Phar archive, or null if no meta-data is stored.
// 
// Changelog
// Version - Description
// 8.0.0   - The parameter unserializeOptions has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::getMetadata() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['file.php'] = '<?php echo "hello";';
//     $p->setMetadata(array('bootstrap' => 'file.php'));
//     var_dump($p->getMetadata());
// } catch (Exception $e) {
//     echo 'Could not modify phar:', $e;
// }
// [/php]
// The above example will output:
// [result]
// array(1) {
//   ["bootstrap"]=>
//   string(8) "file.php"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getmetadata.php
// ========== PHAR_GETMETADATA - END

// SYNTAX:
// mixed Phar::getMetadata()

return $return_phar_getmetadata; // mixed
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETMODIFIED
// ============================== PUBLIC
// ============================== ABOUT
// Return whether phar was modified.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::getModified() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_getmodified($phar)
{
$return_phar_getmodified = false;

// ========== PHAR_GETMODIFIED - BEGIN
// ===== ABOUT
// Return whether phar was modified
// ===== DESCRIPTION
// This method can be used to determine whether a phar has either had an internal file deleted, or contents of a file changed in some way.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::getModified(): bool
// ===== CODE
$return_phar_getmodified = $phar->getModified(

// No parameters.

); // Return Values
// true if the phar has been modified since opened, false if not.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getmodified.php
// ========== PHAR_GETMODIFIED - END

// SYNTAX:
// bool Phar::getModified()

return $return_phar_getmodified; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETMODIFIED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETPATH
// ============================== PUBLIC
// ============================== ABOUT
// Get the real path to the Phar archive on disk.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// Phar::getPath() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_compression_phar_phar_getpath($phar)
{
$return_phar_getpath = null;

// ========== PHAR_GETPATH - BEGIN
// ===== ABOUT
// Get the real path to the Phar archive on disk
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public Phar::getPath(): string
// ===== CODE
$return_phar_getpath = $phar->getPath(

// This function has no parameters.

); // Return Values
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getpath.php
// ========== PHAR_GETPATH - END

// SYNTAX:
// string Phar::getPath()

return $return_phar_getpath; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETPATH
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETSIGNATURE
// ============================== PUBLIC
// ============================== ABOUT
// Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::getSignature() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_getsignature($phar)
{
$return_phar_getsignature = false;

// ========== PHAR_GETSIGNATURE - BEGIN
// ===== ABOUT
// Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
// ===== DESCRIPTION
// Returns the verification signature of a phar archive in a hexadecimal string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::getSignature(): array|false
// ===== CODE
$return_phar_getsignature = $phar->getSignature(

); // Return Values
// Array with the opened archive's signature in hash key and MD5, SHA-1, SHA-256, SHA-512, or OpenSSL in hash_type. This signature is a hash calculated on the entire phar's contents, and may be used to verify the integrity of the archive. A valid signature is absolutely required of all executable phar archives if the phar.require_hash INI variable is set to true. If there is no signature, the function returns false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getsignature.php
// ========== PHAR_GETSIGNATURE - END

// SYNTAX:
// array|false Phar::getSignature()

return $return_phar_getsignature; // array|false
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETSIGNATURE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETSTUB
// ============================== PUBLIC
// ============================== ABOUT
// Return the PHP loader or bootstrap stub of a Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::getStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_getstub($phar)
{
$return_phar_getstub = null;

// ========== PHAR_GETSTUB - BEGIN
// ===== ABOUT
// Return the PHP loader or bootstrap stub of a Phar archive
// ===== DESCRIPTION
// Phar archives contain a bootstrap loader, or stub written in PHP that is executed when the archive is executed in PHP either via include:
// [php]
// include 'myphar.phar';
// [/php]
// or by simple execution:
// [code]
// php myphar.phar
//     
// [/code]
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::getStub(): string
// ===== CODE
$return_phar_getstub = $phar->getStub(

// This function has no parameters.

); // Return Values
// Returns a string containing the contents of the bootstrap loader (stub) of the current Phar archive.
// 
// Errors/Exceptions
// Throws RuntimeException if it is not possible to read the stub from the Phar archive.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::getStub() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// echo $p->getStub();
// echo "==NEXT==\n";
// $p->setStub("< ?php
// function __autoload($class)
// {
//     include 'phar://' . str_replace('_', '/', $class);
// }
// Phar::mapPhar('myphar.phar');
// include 'phar://myphar.phar/startup.php';
// __HALT_COMPILER(); ? >");
// echo $p->getStub();
// [/php]
// The above example will output:
// [result]
// < ?php __HALT_COMPILER(); ? >
// ==NEXT==
// < ?php
// function __autoload($class)
// {
//     include 'phar://' . str_replace('_', '/', $class);
// }
// Phar::mapPhar('myphar.phar');
// include 'phar://myphar.phar/startup.php';
// __HALT_COMPILER(); ? >
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getstub.php
// ========== PHAR_GETSTUB - END

// SYNTAX:
// string Phar::getStub()

return $return_phar_getstub; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETSTUB
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETSUPPORTEDCOMPRESSION
// ============================== PUBLIC
// ============================== ABOUT
// Return array of supported compression algorithms.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_0
// ============================== USING SUBCLASSES (1)
// Phar::getSupportedCompression() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ============================== CODE
function php_compression_phar_phar_getsupportedcompression($phar)
{
$return_phar_getsupportedcompression = null;

// ========== PHAR_GETSUPPORTEDCOMPRESSION - BEGIN
// ===== ABOUT
// Return array of supported compression algorithms
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ===== SYNTAX
// final public static Phar::getSupportedCompression(): array
// ===== CODE
$return_phar_getsupportedcompression = $phar->getSupportedCompression(

// No parameters.

); // Return Values
// Returns an array containing any of Phar::GZ or Phar::BZ2, depending on the availability of the zlib extension or the bz2 extension.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-13)
// URL: https://www.php.net/manual/en/phar.getsupportedcompression.php
// ========== PHAR_GETSUPPORTEDCOMPRESSION - END

// SYNTAX:
// array Phar::getSupportedCompression()

return $return_phar_getsupportedcompression; // array
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETSUPPORTEDCOMPRESSION
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETSUPPORTEDSIGNATURES
// ============================== PUBLIC
// ============================== ABOUT
// Return array of supported signature types.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_1_0
// ============================== USING SUBCLASSES (1)
// Phar::getSupportedSignatures() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_1_0
// ============================== CODE
function php_compression_phar_phar_getsupportedsignatures($phar)
{
$return_phar_getsupportedsignatures = null;

// ========== PHAR_GETSUPPORTEDSIGNATURES - BEGIN
// ===== ABOUT
// Return array of supported signature types
// ===== DESCRIPTION
// Return array of supported signature types
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_1_0
// ===== SYNTAX
// final public static Phar::getSupportedSignatures(): array
// ===== CODE
$return_phar_getsupportedsignatures = $phar->getSupportedSignatures(

// No parameters.

); // Return Values
// Returns an array containing any of MD5, SHA-1, SHA-256, SHA-512, or OpenSSL.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.getsupportedsignatures.php
// ========== PHAR_GETSUPPORTEDSIGNATURES - END

// SYNTAX:
// array Phar::getSupportedSignatures()

return $return_phar_getsupportedsignatures; // array
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETSUPPORTEDSIGNATURES
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_GETVERSION
// ============================== PUBLIC
// ============================== ABOUT
// Return version info of Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::getVersion() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_getversion($phar)
{
$return_phar_getversion = null;

// ========== PHAR_GETVERSION - BEGIN
// ===== ABOUT
// Return version info of Phar archive
// ===== DESCRIPTION
// Returns the API version of an opened Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::getVersion(): string
// ===== CODE
$return_phar_getversion = $phar->getVersion(

); // Return Values
// The opened archive's API version. This is not to be confused with the API version that the loaded phar extension will use to create new phars. Each Phar archive has the API version hard-coded into its manifest. See Phar file format documentation for more information.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.getversion.php
// ========== PHAR_GETVERSION - END

// SYNTAX:
// string Phar::getVersion()

return $return_phar_getversion; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_GETVERSION
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_HASMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether phar has global meta-data.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_0
// ============================== USING SUBCLASSES (1)
// Phar::hasMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ============================== CODE
function php_compression_phar_phar_hasmetadata($phar)
{
$return_phar_hasmetadata = false;

// ========== PHAR_HASMETADATA - BEGIN
// ===== ABOUT
// Returns whether phar has global meta-data
// ===== DESCRIPTION
// Returns whether phar has global meta-data set.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ===== SYNTAX
// public Phar::hasMetadata(): bool
// ===== CODE
$return_phar_hasmetadata = $phar->hasMetadata(

// No parameters.

); // Return Values
// Returns true if meta-data has been set, and false if not.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::hasMetadata() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     var_dump($phar->hasMetadata());
//     $phar->setMetadata(array('thing' => 'hi'));
//     var_dump($phar->hasMetadata());
//     $phar->delMetadata();
//     var_dump($phar->hasMetadata());
// } catch (Exception $e) {
//     // handle error
// }
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.hasmetadata.php
// ========== PHAR_HASMETADATA - END

// SYNTAX:
// bool Phar::hasMetadata()

return $return_phar_hasmetadata; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_HASMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_INTERCEPTFILEFUNCS
// ============================== PUBLIC
// ============================== ABOUT
// Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::interceptFileFuncs() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_interceptfilefuncs($phar)
{

// ========== PHAR_INTERCEPTFILEFUNCS - BEGIN
// ===== ABOUT
// Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
// ===== DESCRIPTION
// instructs phar to intercept fopen(), readfile(), file_get_contents(), opendir(), and all of the stat-related functions. If any of these functions is called from within a phar archive with a relative path, the call is modified to access a file within the phar archive. Absolute paths are assumed to be attempts to load external files from the filesystem.
// This function makes it possible to run PHP applications designed to run off of a hard disk as a phar application.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::interceptFileFuncs(): void
// ===== CODE
$phar->interceptFileFuncs(

// No parameters.

); // Return Values
// void
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::interceptFileFuncs() example
// [php]
// Phar::interceptFileFuncs();
// include 'phar://' . __FILE__ . '/file.php';
// [/php]
// [/example]
// [example]
// Assuming that this phar is at /path/to/myphar.phar and it contains file.php and file2.txt, if file.php contains this code:
// Example #2 A Phar::interceptFileFuncs() example
// [php]
// echo file_get_contents('file2.txt');
// [/php]
// Normally PHP would search the current directory for file2.txt, which would translate as the directory of file.php, or the current directory of a command-line user. Phar::interceptFileFuncs() instructs PHP to consider the current directory to be phar:///path/to/myphar.phar/ and so opens phar:///path/to/myphar.phar/file2.txt in the above example code.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.interceptfilefuncs.php
// ========== PHAR_INTERCEPTFILEFUNCS - END

// SYNTAX:
// void Phar::interceptFileFuncs()

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_INTERCEPTFILEFUNCS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ISBUFFERING
// ============================== PUBLIC
// ============================== ABOUT
// Used to determine whether Phar write operations are being buffered, or are flushing directly to disk.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::isBuffering() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_isbuffering($phar)
{
$return_phar_isbuffering = false;

// ========== PHAR_ISBUFFERING - BEGIN
// ===== ABOUT
// Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
// ===== DESCRIPTION
// This method can be used to determine whether a Phar will save changes to disk immediately, or whether a call to Phar::stopBuffering() is needed to enable saving changes.
// Phar write buffering is per-archive, buffering active for the foo.phar Phar archive does not affect changes to the bar.phar Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::isBuffering(): bool
// ===== CODE
$return_phar_isbuffering = $phar->isBuffering(

// This function has no parameters.

); // Return Values
// Returns true if the write operations are being buffer, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::isBuffering() example
// [code]
// [php]
// $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
// $p2 = new Phar('existingphar.phar');
// $p['file1.txt'] = 'hi';
// var_dump($p->isBuffering());
// var_dump($p2->isBuffering());
// [/php]
// =2=
// [php]
// $p->startBuffering();
// var_dump($p->isBuffering());
// var_dump($p2->isBuffering());
// $p->stopBuffering();
// [/php]
// =3=
// [php]
// var_dump($p->isBuffering());
// var_dump($p2->isBuffering());
// [/php]
// [/code]
// The above example will output:
// [result]
// bool(false)
// bool(false)
// =2=
// bool(true)
// bool(false)
// =3=
// bool(false)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.isbuffering.php
// ========== PHAR_ISBUFFERING - END

// SYNTAX:
// bool Phar::isBuffering()

return $return_phar_isbuffering; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ISBUFFERING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ISCOMPRESSED
// ============================== PUBLIC
// ============================== ABOUT
// Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::isCompressed() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_iscompressed($phar)
{
$return_phar_iscompressed = false;

// ========== PHAR_ISCOMPRESSED - BEGIN
// ===== ABOUT
// Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on). Zip-based phar archives cannot be compressed as a file, and so this method will always return false if a zip-based phar archive is queried.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::isCompressed(): int|false
// ===== CODE
$return_phar_iscompressed = $phar->isCompressed(

// No parameters.

); // Return Values
// Phar::GZ, Phar::BZ2 or false.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::isCompressed() example
// [php]
// try {
//     $phar1 = new Phar('myphar.zip.phar');
//     var_dump($phar1->isCompressed());
//     $phar2 = new Phar('myuncompressed.tar.phar');
//     var_dump($phar2->isCompressed());
//     $phar2->compress(Phar::GZ);
//     var_dump($phar2->isCompressed() == Phar::GZ);
// } catch (Exception $e) {
// }
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.iscompressed.php
// ========== PHAR_ISCOMPRESSED - END

// SYNTAX:
// int|false Phar::isCompressed()

return $return_phar_iscompressed; // int|false
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ISCOMPRESSED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ISFILEFORMAT
// ============================== PUBLIC
// ============================== ABOUT
// Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::isFileFormat() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_isfileformat($phar, $format)
{
$return_phar_isfileformat = false;

// ========== PHAR_ISFILEFORMAT - BEGIN
// ===== ABOUT
// Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::isFileFormat(int $format): bool
// ===== CODE
$return_phar_isfileformat = $phar->isFileFormat(

$format // int format - Either Phar::PHAR, Phar::TAR, or Phar::ZIP to test for the format of the archive.

); // Return Values
// Returns true if the phar archive matches the file format requested by the parameter
// 
// Errors/Exceptions
// PharException is thrown if the parameter is an unknown file format specifier.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.isfileformat.php
// ========== PHAR_ISFILEFORMAT - END

// SYNTAX:
// bool Phar::isFileFormat(int $format)

return $return_phar_isfileformat; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ISFILEFORMAT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ISVALIDPHARFILENAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether the given filename is a valid phar filename.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_0
// ============================== USING SUBCLASSES (1)
// Phar::isValidPharFilename() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ============================== CODE
function php_compression_phar_phar_isvalidpharfilename($phar, $filename, $executable = true)
{
$return_phar_isvalidpharfilename = false;

// ========== PHAR_ISVALIDPHARFILENAME - BEGIN
// ===== ABOUT
// Returns whether the given filename is a valid phar filename
// ===== DESCRIPTION
// Returns whether the given filename is a valid phar filename that will be recognized as a phar archive by the phar extension. This can be used to test a name without having to instantiate a phar archive and catch the inevitable Exception that will be thrown if an invalid name is specified.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ===== SYNTAX
// final public static Phar::isValidPharFilename(string $filename, bool $executable = true): bool
// ===== CODE
$return_phar_isvalidpharfilename = $phar->isValidPharFilename(

$filename, // string filename - The name or full path to a phar archive not yet created

$executable // bool executable - This parameter determines whether the filename should be treated as a phar executable archive, or a data non-executable archive

); // Return Values
// Returns true if the filename is valid, false if not.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.isvalidpharfilename.php
// ========== PHAR_ISVALIDPHARFILENAME - END

// SYNTAX:
// bool Phar::isValidPharFilename(string $filename, bool $executable = true)

return $return_phar_isvalidpharfilename; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ISVALIDPHARFILENAME
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_ISWRITABLE
// ============================== PUBLIC
// ============================== ABOUT
// Returns true if the phar archive can be modified.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::isWritable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_iswritable($phar)
{
$return_phar_iswritable = false;

// ========== PHAR_ISWRITABLE - BEGIN
// ===== ABOUT
// Returns true if the phar archive can be modified
// ===== DESCRIPTION
// This method returns true if phar.readonly is 0, and the actual phar archive on disk is not read-only.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::isWritable(): bool
// ===== CODE
$return_phar_iswritable = $phar->isWritable(

// No parameters.

); // Return Values
// Returns true if the phar archive can be modified
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.iswritable.php
// ========== PHAR_ISWRITABLE - END

// SYNTAX:
// bool Phar::isWritable()

return $return_phar_iswritable; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_ISWRITABLE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_LOADPHAR
// ============================== PUBLIC
// ============================== ABOUT
// Loads any phar archive with an alias.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::loadPhar() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_loadphar($phar, $filename, $alias = null)
{
$return_phar_loadphar = false;

// ========== PHAR_LOADPHAR - BEGIN
// ===== ABOUT
// Loads any phar archive with an alias
// ===== DESCRIPTION
// This can be used to read the contents of an external Phar archive. This is most useful for assigning an alias to a phar so that subsequent references to the phar can use the shorter alias, or for loading Phar archives that only contain data and are not intended for execution/inclusion in PHP scripts.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// final public static Phar::loadPhar(string $filename, ?string $alias = null): bool
// ===== CODE
$return_phar_loadphar = $phar->loadPhar(

$filename, // string filename - the full or relative path to the phar archive to open

$alias // string alias - The alias that may be used to refer to the phar archive. Note that many phar archives specify an explicit alias inside the phar archive, and a PharException will be thrown if a new alias is specified in this case.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// PharException is thrown if an alias is passed in and the phar archive already has an explicit alias
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::loadPhar() example
// Phar::loadPhar can be used anywhere to load an external Phar archive, whereas Phar::mapPhar should be used in a loader stub for a Phar.
// [php]
// try {
//     Phar::loadPhar('/path/to/phar.phar', 'my.phar');
//     echo file_get_contents('phar://my.phar/file.txt');
// } catch (PharException $e) {
//     echo $e;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.loadphar.php
// ========== PHAR_LOADPHAR - END

// SYNTAX:
// bool Phar::loadPhar(string $filename, string $alias = null)

return $return_phar_loadphar; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_LOADPHAR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_MAPPHAR
// ============================== PUBLIC
// ============================== ABOUT
// Reads the currently executed file (a phar) and registers its manifest.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::mapPhar() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_mapphar($phar, $alias = null, $offset = 0)
{
$return_phar_mapphar = false;

// ========== PHAR_MAPPHAR - BEGIN
// ===== ABOUT
// Reads the currently executed file (a phar) and registers its manifest
// ===== DESCRIPTION
// This static method can only be used inside a Phar archive's loader stub in order to initialize the phar when it is directly executed, or when it is included in another script.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// final public static Phar::mapPhar(?string $alias = null, int $offset = 0): bool
// ===== CODE
$return_phar_mapphar = $phar->mapPhar(

$alias, // string alias - The alias that can be used in phar:// URLs to refer to this archive, rather than its full path.

$offset // int offset - Unused variable, here for compatibility with PEAR's PHP_Archive.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// PharException is thrown if not called directly within PHP execution, if no __HALT_COMPILER(); token is found in the current source file, or if the file cannot be opened for reading.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::mapPhar() example
// mapPhar should be used only inside a phar's loader stub. Use loadPhar to load an external phar into memory.
// Here is a sample Phar loader stub that uses mapPhar.
// [php]
// function __autoload($class)
// {
//     include 'phar://me.phar/' . str_replace('_', '/', $class) . '.php';
// }
// try {
//     Phar::mapPhar('me.phar');
//     include 'phar://me.phar/startup.php';
// } catch (PharException $e) {
//     echo $e->getMessage();
//     die('Cannot initialize Phar');
// }
// __HALT_COMPILER();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.mapphar.php
// ========== PHAR_MAPPHAR - END

// SYNTAX:
// bool Phar::mapPhar(string $alias = null, int $offset = 0)

return $return_phar_mapphar; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_MAPPHAR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_MOUNT
// ============================== PUBLIC
// ============================== ABOUT
// Mount an external path or file to a virtual location within the phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::mount() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_mount($phar, $pharPath, $externalPath)
{

// ========== PHAR_MOUNT - BEGIN
// ===== ABOUT
// Mount an external path or file to a virtual location within the phar archive
// ===== DESCRIPTION
// Much like the unix file system concept of mounting external devices to paths within the directory tree, Phar::mount() allows referring to external files and directories as if they were inside of an archive. This allows powerful abstraction such as referring to external configuration files as if they were inside the archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::mount(string $pharPath, string $externalPath): void
// ===== CODE
$phar->mount(

$pharPath, // string pharPath - The internal path within the phar archive to use as the mounted path location. This must be a relative path within the phar archive, and must not already exist.

$externalPath // string externalPath - A path or URL to an external file or directory to mount within the phar archive

); // Return Values
// No return. PharException is thrown on failure.
// 
// Errors/Exceptions
// Throws PharException if any problems occur mounting the path.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::mount() example
// The following example shows accessing an external configuration file as if it were a path within a phar archive.
// First, the code inside of a phar archive:
// [php]
// $configuration = simplexml_load_string(file_get_contents(
//     Phar::running(false) . '/config.xml'));
// [/php]
// Next the external code used to mount the configuration file:
// [php]
// // first set up the association between the abstract config.xml
// // and the actual one on disk
// Phar::mount('phar://config.xml', '/home/example/config.xml');
// // now run the application
// include '/path/to/archive.phar';
// [/php]
// Another method is to put the mounting code inside the stub of the phar archive. Here is an example of setting up a default configuration file if no user configuration is specified:
// [php]
// // first set up the association between the abstract config.xml
// // and the actual one on disk
// if (defined('EXTERNAL_CONFIG')) {
//     Phar::mount('config.xml', EXTERNAL_CONFIG);
//     if (file_exists(__DIR__ . '/extra_config.xml')) {
//         Phar::mount('extra.xml', __DIR__ . '/extra_config.xml');
//     }
// } else {
//     Phar::mount('config.xml', 'phar://' . __FILE__ . '/default_config.xml');
//     Phar::mount('extra.xml', 'phar://' . __FILE__ . '/default_extra.xml');
// }
// // now run the application
// include 'phar://' . __FILE__ . '/index.php';
// __HALT_COMPILER();
// [/php]
// ...and the code externally to load this phar archive:
// [php]
// define('EXTERNAL_CONFIG', '/home/example/config.xml');
// // now run the application
// include '/path/to/archive.phar';
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.mount.php
// ========== PHAR_MOUNT - END

// SYNTAX:
// void Phar::mount(string $pharPath, string $externalPath)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_MOUNT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_MUNGSERVER
// ============================== PUBLIC
// ============================== ABOUT
// Defines a list of up to 4 $_SERVER variables that should be modified for execution.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::mungServer() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_mungserver($phar, $variables)
{

// ========== PHAR_MUNGSERVER - BEGIN
// ===== ABOUT
// Defines a list of up to 4 $_SERVER variables that should be modified for execution
// ===== DESCRIPTION
// Phar::mungServer() should only be called within the stub of a phar archive.
// Defines a list of up to 4 $_SERVER variables that should be modified for execution. Variables that can be modified to remove traces of phar execution are REQUEST_URI, PHP_SELF, SCRIPT_NAME and SCRIPT_FILENAME.
// On its own, this method does nothing. Only when combined with Phar::webPhar() does it take effect, and only when the requested file is a PHP file to be parsed. Note that the PATH_INFO and PATH_TRANSLATED variables are always modified.
// The original values of variables that are modified are stored in the SERVER array with PHAR_ prepended, so for instance SCRIPT_NAME would be saved as PHAR_SCRIPT_NAME.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::mungServer(array $variables): void
// ===== CODE
$phar->mungServer(

$variables // array variables - An array of any of the strings REQUEST_URI, PHP_SELF, SCRIPT_NAME and SCRIPT_FILENAME. Other values trigger an exception, and Phar::mungServer() is case-sensitive.

); // Return Values
// No return.
// 
// Errors/Exceptions
// Throws UnexpectedValueException if any problems are found with the passed in data.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::mungServer() example
// [php]
// // example stub
// Phar::mungServer(array('REQUEST_URI'));
// Phar::webPhar();
// __HALT_COMPILER();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.mungserver.php
// ========== PHAR_MUNGSERVER - END

// SYNTAX:
// void Phar::mungServer(array $variables)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_MUNGSERVER
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_OFFSETEXISTS
// ============================== PUBLIC
// ============================== ABOUT
// Determines whether a file exists in the phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::offsetExists() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_offsetexists($phar, $localName)
{
$return_phar_offsetexists = false;

// ========== PHAR_OFFSETEXISTS - BEGIN
// ===== ABOUT
// Determines whether a file exists in the phar
// ===== DESCRIPTION
// This is an implementation of the ArrayAccess interface allowing direct manipulation of the contents of a Phar archive using array access brackets.
// offsetExists() is called whenever isset() is called.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::offsetExists(string $localName): bool
// ===== CODE
$return_phar_offsetexists = $phar->offsetExists(

$localName // string localName - The filename (relative path) to look for in a Phar.

); // Return Values
// Returns true if the file exists within the phar, or false if not.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::offsetExists() example
// [php]
// $p = new Phar(dirname(__FILE__) . '/my.phar', 0, 'my.phar');
// $p['firstfile.txt'] = 'first file';
// $p['secondfile.txt'] = 'second file';
// // the next set of lines call offsetExists() indirectly
// var_dump(isset($p['firstfile.txt']));
// var_dump(isset($p['nothere.txt']));
// [/php]
// The above example will output:
// [result]
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.offsetexists.php
// ========== PHAR_OFFSETEXISTS - END

// SYNTAX:
// bool Phar::offsetExists(string $localName)

return $return_phar_offsetexists; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_OFFSETEXISTS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_OFFSETGET
// ============================== PUBLIC
// ============================== ABOUT
// Gets a PharFileInfo object for a specific file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::offsetGet() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_offsetget($phar, $localName)
{
$return_phar_offsetget = null;

// ========== PHAR_OFFSETGET - BEGIN
// ===== ABOUT
// Gets a PharFileInfo object for a specific file
// ===== DESCRIPTION
// This is an implementation of the ArrayAccess interface allowing direct manipulation of the contents of a Phar archive using array access brackets. Phar::offsetGet() is used for retrieving files from a Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::offsetGet(string $localName): SplFileInfo
// ===== CODE
$return_phar_offsetget = $phar->offsetGet(

$localName // string localName - The filename (relative path) to look for in a Phar.

); // Return Values
// A PharFileInfo object is returned that can be used to iterate over a file's contents or to retrieve information about the current file.
// 
// Errors/Exceptions
// This method throws BadMethodCallException if the file does not exist in the Phar archive.
// 
// [examples]
// Examples
// [example]
// Example #1 Phar::offsetGet() example
// As with all classes that implement the ArrayAccess interface, Phar::offsetGet() is automatically called when using the [] angle bracket operator.
// [php]
// $p = new Phar(dirname(__FILE__) . '/myphar.phar', 0, 'myphar.phar');
// $p['exists.txt'] = "file exists\n";
// try {
//     // automatically calls offsetGet()
//     echo $p['exists.txt'];
//     echo $p['doesnotexist.txt'];
// } catch (BadMethodCallException $e) {
//     echo $e;
// }
// [/php]
// The above example will output:
// [result]
// file exists
// Entry doesnotexist.txt does not exist
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.offsetget.php
// ========== PHAR_OFFSETGET - END

// SYNTAX:
// SplFileInfo Phar::offsetGet(string $localName)

return $return_phar_offsetget; // SplFileInfo
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_OFFSETGET
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_OFFSETSET
// ============================== PUBLIC
// ============================== ABOUT
// Set the contents of an internal file to those of an external file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::offsetSet() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_offsetset($phar, $localName, $value)
{

// ========== PHAR_OFFSETSET - BEGIN
// ===== ABOUT
// Set the contents of an internal file to those of an external file
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// This is an implementation of the ArrayAccess interface allowing direct manipulation of the contents of a Phar archive using array access brackets. offsetSet is used for modifying an existing file, or adding a new file to a Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::offsetSet(string $localName, resource|string $value): void
// ===== CODE
$phar->offsetSet(

$localName, // string localName - The filename (relative path) to modify in a Phar.

$value // resource|string value - Content of the file.

); // Return Values
// No return values.
// 
// Errors/Exceptions
// if phar.readonly is 1, BadMethodCallException is thrown, as modifying a Phar is only allowed when phar.readonly is set to 0. Throws PharException if there are any problems flushing changes made to the Phar archive to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::offsetSet() example
// offsetSet should not be accessed directly, but instead used via array access with the [] operator.
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// try {
//     // calls offsetSet
//     $p['file.txt'] = 'Hi there';
// } catch (Exception $e) {
//     echo 'Could not modify file.txt:', $e;
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Phar::addFile(), Phar::addFromString() and Phar::offsetSet() save a new phar archive each time they are called. If performance is a concern, Phar::buildFromDirectory() or Phar::buildFromIterator() should be used instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.offsetset.php
// ========== PHAR_OFFSETSET - END

// SYNTAX:
// void Phar::offsetSet(string $localName, resource|string $value)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_OFFSETSET
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_OFFSETUNSET
// ============================== PUBLIC
// ============================== ABOUT
// Remove a file from a phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::offsetUnset() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_offsetunset($phar, $localName)
{

// ========== PHAR_OFFSETUNSET - BEGIN
// ===== ABOUT
// Remove a file from a phar
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// This is an implementation of the ArrayAccess interface allowing direct manipulation of the contents of a Phar archive using array access brackets. offsetUnset is used for deleting an existing file, and is called by the unset() language construct.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::offsetUnset(string $localName): void
// ===== CODE
$phar->offsetUnset(

$localName // string localName - The filename (relative path) to modify in a Phar.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// if phar.readonly is 1, BadMethodCallException is thrown, as modifying a Phar is only allowed when phar.readonly is set to 0. Throws PharException if there are any problems flushing changes made to the Phar archive to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::offsetUnset() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// try {
//     // deletes file.txt from my.phar by calling offsetUnset
//     unset($p['file.txt']);
// } catch (Exception $e) {
//     echo 'Could not delete file.txt: ', $e;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.offsetunset.php
// ========== PHAR_OFFSETUNSET - END

// SYNTAX:
// void Phar::offsetUnset(string $localName)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_OFFSETUNSET
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_RUNNING
// ============================== PUBLIC
// ============================== ABOUT
// Returns the full path on disk or full phar URL to the currently executing Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::running() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_running($phar, $returnPhar = true)
{
$return_phar_running = null;

// ========== PHAR_RUNNING - BEGIN
// ===== ABOUT
// Returns the full path on disk or full phar URL to the currently executing Phar archive
// ===== DESCRIPTION
// Returns the full path to the running phar archive. This is intended for use much like the __FILE__ magic constant, and only has effect inside an executing phar archive.
// Inside the stub of an archive, Phar::running() returns "". Simply use __FILE__ to access the current running phar inside a stub.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::running(bool $returnPhar = true): string
// ===== CODE
$return_phar_running = $phar->running(

$returnPhar // bool returnPhar - If false, the full path on disk to the phar archive is returned. If true, a full phar URL is returned.

); // Return Values
// Returns the filename if valid, empty string otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::running() example
// For the following example, assume the phar archive is located at /path/to/phar/my.phar.
// [php]
// $a = Phar::running(); // $a is "phar:///path/to/my.phar"
// $b = Phar::running(false); // $b is "/path/to/my.phar"
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.running.php
// ========== PHAR_RUNNING - END

// SYNTAX:
// string Phar::running(bool $returnPhar = true)

return $return_phar_running; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_RUNNING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_SETALIAS
// ============================== PUBLIC
// ============================== ABOUT
// Set the alias for the Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_1
// ============================== USING SUBCLASSES (1)
// Phar::setAlias() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_1
// ============================== CODE
function php_compression_phar_phar_setalias($phar, $alias)
{
$return_phar_setalias = false;

// ========== PHAR_SETALIAS - BEGIN
// ===== ABOUT
// Set the alias for the Phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Set the alias for the Phar archive, and write it as the permanent alias for this phar archive. An alias can be used internally to a phar archive to ensure that use of the phar stream wrapper to access internal files always works regardless of the location of the phar archive on the filesystem. Another alternative is to rely upon Phar's interception of include or to use Phar::interceptFileFuncs() and use relative paths.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_1
// ===== SYNTAX
// public Phar::setAlias(string $alias): bool
// ===== CODE
$return_phar_setalias = $phar->setAlias(

$alias // string alias - A shorthand string that this archive can be referred to in phar stream wrapper access.

); // Return Values
// bool
// 
// Errors/Exceptions
// Throws UnexpectedValueException when write access is disabled, and PharException if the alias is already in use or any problems were encountered flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::setAlias() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     $phar->setAlias('myp.phar');
// } catch (Exception $e) {
//     // handle error
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.setalias.php
// ========== PHAR_SETALIAS - END

// SYNTAX:
// bool Phar::setAlias(string $alias)

return $return_phar_setalias; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_SETALIAS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_SETDEFAULTSTUB
// ============================== PUBLIC
// ============================== ABOUT
// Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::setDefaultStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_setdefaultstub($phar, $index = null, $webIndex = null)
{
$return_phar_setdefaultstub = false;

// ========== PHAR_SETDEFAULTSTUB - BEGIN
// ===== ABOUT
// Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// This method is a convenience method that combines the functionality of Phar::createDefaultStub() and Phar::setStub().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public Phar::setDefaultStub(?string $index = null, ?string $webIndex = null): bool
// ===== CODE
$return_phar_setdefaultstub = $phar->setDefaultStub(

$index, // string index - Relative path within the phar archive to run if accessed on the command-line

$webIndex // string webIndex - Relative path within the phar archive to run if accessed through a web browser

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// UnexpectedValueException is thrown if phar.readonly is enabled in php.ini. PharException is thrown if any problems are encountered flushing changes to disk.
// 
// Changelog
// Version - Description
// 8.0.0   - webIndex is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::setDefaultStub() example
// [php]
// try {
//     $phar = new Phar('myphar.phar');
//     $phar->setDefaultStub('cli.php', 'web/index.php');
//     // this is the same as:
//     // $phar->setStub($phar->createDefaultStub('cli.php', 'web/index.php'));
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.setdefaultstub.php
// ========== PHAR_SETDEFAULTSTUB - END

// SYNTAX:
// bool Phar::setDefaultStub(string $index = null, string $webIndex = null)

return $return_phar_setdefaultstub; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_SETDEFAULTSTUB
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_SETMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Sets phar archive meta-data.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::setMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_setmetadata($phar, $metadata)
{

// ========== PHAR_SETMETADATA - BEGIN
// ===== ABOUT
// Sets phar archive meta-data
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Phar::setMetadata() should be used to store customized data that describes something about the phar archive as a complete entity. PharFileInfo::setMetadata() should be used for file-specific meta-data. Meta-data can slow down the performance of loading a phar archive if the data is large.
// Some possible uses for meta-data include specifying which file within the archive should be used to bootstrap the archive, or the location of a file manifest like > PEAR's package.xml file. However, any useful data that describes the phar archive may be stored.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::setMetadata(mixed $metadata): void
// ===== CODE
$phar->setMetadata(

$metadata // mixed metadata - Any PHP variable containing information to store that describes the phar archive

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::setMetadata() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['file.php'] = '<?php echo "hello"';
//     $p->setMetadata(array('bootstrap' => 'file.php'));
//     var_dump($p->getMetadata());
// } catch (Exception $e) {
//     echo 'Could not create and/or modify phar:', $e;
// }
// [/php]
// The above example will output:
// [result]
// array(1) {
//   ["bootstrap"]=>
//   string(8) "file.php"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.setmetadata.php
// ========== PHAR_SETMETADATA - END

// SYNTAX:
// void Phar::setMetadata(mixed $metadata)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_SETMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_SETSIGNATUREALGORITHM
// ============================== PUBLIC
// ============================== ABOUT
// Set the signature algorithm for a phar and apply it.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_1_0
// ============================== USING SUBCLASSES (1)
// Phar::setSignatureAlgorithm() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_1_0
// ============================== CODE
function php_compression_phar_phar_setsignaturealgorithm($phar, $algo, $privateKey = null)
{

// ========== PHAR_SETSIGNATUREALGORITHM - BEGIN
// ===== ABOUT
// Set the signature algorithm for a phar and apply it
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// set the signature algorithm for a phar and apply it. The signature algorithm must be one of Phar::MD5, Phar::SHA1, Phar::SHA256, Phar::SHA512, or Phar::OPENSSL.
// Note that all executable phar archives have a signature created automatically, SHA1 by default. data tar- or zip-based archives (archives created with the PharData class) must have their signature created and set explicitly via Phar::setSignatureAlgorithm().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_1_0
// ===== SYNTAX
// public Phar::setSignatureAlgorithm(int $algo, ?string $privateKey = null): void
// ===== CODE
$phar->setSignatureAlgorithm(

$algo, // int algo - One of Phar::MD5, Phar::SHA1, Phar::SHA256, Phar::SHA512, or Phar::OPENSSL

$privateKey // string privateKey - The contents of an OpenSSL private key, as extracted from a certificate or OpenSSL key file:
// [php]
// $private = openssl_get_privatekey(file_get_contents('private.pem'));
// $pkey = '';
// openssl_pkey_export($private, $pkey);
// $p->setSignatureAlgorithm(Phar::OPENSSL, $pkey);
// [/php]
// See phar introduction for instructions on naming and placement of the public key file.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// Throws UnexpectedValueException for many errors, and a PharException if any problems occur flushing changes to disk.
// 
// Changelog
// Version - Description
// 8.0.0   - privateKey is now nullable.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.setsignaturealgorithm.php
// ========== PHAR_SETSIGNATUREALGORITHM - END

// SYNTAX:
// void Phar::setSignatureAlgorithm(int $algo, string $privateKey = null)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_SETSIGNATUREALGORITHM
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_SETSTUB
// ============================== PUBLIC
// ============================== ABOUT
// Used to set the PHP loader or bootstrap stub of a Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::setStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_setstub($phar, $stub, $length = -1)
{
$return_phar_setstub = false;

// ========== PHAR_SETSTUB - BEGIN
// ===== ABOUT
// Used to set the PHP loader or bootstrap stub of a Phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// This method is used to add a PHP bootstrap loader stub to a new Phar archive, or to replace the loader stub in an existing Phar archive.
// The loader stub for a Phar archive is used whenever an archive is included directly as in this example:
// [php]
// include 'myphar.phar';
// [/php]
// The loader is not accessed when including a file through the phar stream wrapper like so:
// [php]
// include 'phar://myphar.phar/somefile.php';
// [/php]
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::setStub(resource|string $stub, int $length = -1): bool
// ===== CODE
$return_phar_setstub = $phar->setStub(

$stub, // resource|string stub - A string or an open stream handle to use as the executable stub for this phar archive.

$length // int length

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// UnexpectedValueException is thrown if phar.readonly is enabled in php.ini. PharException is thrown if any problems are encountered flushing changes to disk.
// 
// Changelog
// Version - Description
// 8.3.0   - Calling Phar::setStub() with a resource and a length is now deprecated. Such calls should be replaced by: $phar->setStub(stream_get_contents($resource));
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::setStub() example
// [php]
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['a.php'] = '< ?php var_dump("Hello");';
//     $p->setStub('< ?php var_dump("First"); Phar::mapPhar("brandnewphar.phar"); __HALT_COMPILER(); ? >');
//     include 'phar://brandnewphar.phar/a.php';
//     var_dump($p->getStub());
//     $p['b.php'] = '< ?php var_dump("World");';
//     $p->setStub('< ?php var_dump("Second"); Phar::mapPhar("brandnewphar.phar"); __HALT_COMPILER(); ? >');
//     include 'phar://brandnewphar.phar/b.php';
//     var_dump($p->getStub());
// } catch (Exception $e) {
//     echo 'Write operations failed on brandnewphar.phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// string(5) "Hello"
// string(82) "< ?php var_dump("First"); Phar::mapPhar("brandnewphar.phar"); __HALT_COMPILER(); ? >"
// string(5) "World"
// string(83) "< ?php var_dump("Second"); Phar::mapPhar("brandnewphar.phar"); __HALT_COMPILER(); ? >"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.setstub.php
// ========== PHAR_SETSTUB - END

// SYNTAX:
// bool Phar::setStub(resource|string $stub, int $length = -1)

return $return_phar_setstub; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_SETSTUB
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_STARTBUFFERING
// ============================== PUBLIC
// ============================== ABOUT
// Start buffering Phar write operations, do not modify the Phar object on disk.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::startBuffering() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_startbuffering($phar)
{

// ========== PHAR_STARTBUFFERING - BEGIN
// ===== ABOUT
// Start buffering Phar write operations, do not modify the Phar object on disk
// ===== DESCRIPTION
// Although technically unnecessary, the Phar::startBuffering() method can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.
// However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. the Phar::startBuffering()/Phar::stopBuffering() pair of methods is provided for this purpose.
// Phar write buffering is per-archive, buffering active for the foo.phar Phar archive does not affect changes to the bar.phar Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::startBuffering(): void
// ===== CODE
$phar->startBuffering(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::startBuffering() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
// } catch (Exception $e) {
//     echo 'Could not create phar:', $e;
// }
// echo 'The new phar has ' . $p->count() . " entries\n";
// $p->startBuffering();
// $p['file.txt'] = 'hi';
// $p['file2.txt'] = 'there';
// $p['file2.txt']->setCompressedGZ();
// $p['file3.txt'] = 'babyface';
// $p['file3.txt']->setMetadata(42);
// $p->setStub("< ?php
// function __autoload($class)
// {
//     include 'phar://myphar.phar/' . str_replace('_', '/', $class) . '.php';
// }
// Phar::mapPhar('myphar.phar');
// // include 'phar://myphar.phar/startup.php';
// __HALT_COMPILER();");
// $p->stopBuffering();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.startbuffering.php
// ========== PHAR_STARTBUFFERING - END

// SYNTAX:
// void Phar::startBuffering()

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_STARTBUFFERING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_STOPBUFFERING
// ============================== PUBLIC
// ============================== ABOUT
// Stop buffering write requests to the Phar archive, and save changes to disk.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// Phar::stopBuffering() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_phar_stopbuffering($phar)
{

// ========== PHAR_STOPBUFFERING - BEGIN
// ===== ABOUT
// Stop buffering write requests to the Phar archive, and save changes to disk
// ===== DESCRIPTION
// Phar::stopBuffering() is used in conjunction with the Phar::startBuffering() method. Phar::startBuffering() can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.
// However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. The Phar::startBuffering()/Phar::stopBuffering() pair of methods is provided for this purpose.
// Phar write buffering is per-archive, buffering active for the foo.phar Phar archive does not affect changes to the bar.phar Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public Phar::stopBuffering(): void
// ===== CODE
$phar->stopBuffering(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// PharException is thrown if any problems are encountered flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::stopBuffering() example
// [php]
// $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
// $p['file1.txt'] = 'hi';
// $p->startBuffering();
// var_dump($p->getStub());
// $p->setStub("<?php
// function __autoload(\$class)
// {
//     include 'phar://brandnewphar.phar/' . str_replace('_', '/', \$class) . '.php';
// }
// Phar::mapPhar('brandnewphar.phar');
// include 'phar://brandnewphar.phar/startup.php';
// __HALT_COMPILER();");
// $p->stopBuffering();
// var_dump($p->getStub());
// [/php]
// The above example will output:
// [result]
// string(24) "<?php __HALT_COMPILER();"
// string(195) "<?php
// function __autoload($class)
// {
//     include 'phar://' . str_replace('_', '/', $class);
// }
// Phar::mapPhar('brandnewphar.phar');
// include 'phar://brandnewphar.phar/startup.php';
// __HALT_COMPILER();"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.stopbuffering.php
// ========== PHAR_STOPBUFFERING - END

// SYNTAX:
// void Phar::stopBuffering()

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_STOPBUFFERING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_UNLINKARCHIVE
// ============================== PUBLIC
// ============================== ABOUT
// Completely remove a phar archive from disk and from memory.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::unlinkArchive() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_unlinkarchive($phar, $filename)
{
$return_phar_unlinkarchive = false;

// ========== PHAR_UNLINKARCHIVE - BEGIN
// ===== ABOUT
// Completely remove a phar archive from disk and from memory
// ===== DESCRIPTION
// Removes a phar archive from disk and memory.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::unlinkArchive(string $filename): bool
// ===== CODE
$return_phar_unlinkarchive = $phar->unlinkArchive(

$filename // string filename - The path on disk to the phar archive.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// PharException is thrown if there are any open file pointers to the phar archive, or any existing Phar, PharData, or PharFileInfo objects referring to the phar archive.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::unlinkArchive() example
// [php]
// // simple usage
// Phar::unlinkArchive('/path/to/my.phar');
// 
// // more common example:
// $p = new Phar('my.phar');
// $fp = fopen('phar://my.phar/file.txt', 'r');
// // this creates 'my.phar.gz'
// $gp = $p->compress(Phar::GZ);
// // remove all references to the archive
// unset($p);
// fclose($fp);
// // now remove all traces of the archive
// Phar::unlinkArchive('my.phar');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.unlinkarchive.php
// ========== PHAR_UNLINKARCHIVE - END

// SYNTAX:
// bool Phar::unlinkArchive(string $filename)

return $return_phar_unlinkarchive; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_UNLINKARCHIVE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHAR_WEBPHAR
// ============================== PUBLIC
// ============================== ABOUT
// Routes a request from a web browser to an internal file within the phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// Phar::webPhar() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phar_webphar($phar, $alias = null, $index = null, $fileNotFoundScript = null, $mimeTypes = array(), $rewrite = null)
{

// ========== PHAR_WEBPHAR - BEGIN
// ===== ABOUT
// Routes a request from a web browser to an internal file within the phar archive
// ===== DESCRIPTION
// Phar::webPhar() serves as Phar::mapPhar() for web-based phars. This method parses $_SERVER['REQUEST_URI'] and routes a request from a web browser to an internal file within the phar archive. It simulates a web server, routing requests to the correct file, echoing the correct headers and parsing PHP files as needed. Combined with Phar::mungServer() and Phar::interceptFileFuncs(), any web application can be used unmodified from a phar archive.
// Phar::webPhar() should only be called from the stub of a phar archive (see here for more information on what a stub is).
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// final public static Phar::webPhar(
//     ?string $alias = null,
//     ?string $index = null,
//     ?string $fileNotFoundScript = null,
//     array $mimeTypes = [],
//     ?callable $rewrite = null
// ): void
// ===== CODE
$phar->webPhar(

$alias, // string alias - The alias that can be used in phar:// URLs to refer to this archive, rather than its full path.

$index, // string index - The location within the phar of the directory index.

$fileNotFoundScript, // string fileNotFoundScript - The location of the script to run when a file is not found. This script should output the proper HTTP 404 headers.

$mimeTypes, // array mimeTypes - An array mapping additional file extensions to MIME type. If the default mapping is sufficient, pass an empty array. By default, these extensions are mapped to these MIME types:
// [php]
// $mimes = array(
//     'phps' => Phar::PHPS, // pass to highlight_file()
//     'c' => 'text/plain',
//     'cc' => 'text/plain',
//     'cpp' => 'text/plain',
//     'c++' => 'text/plain',
//     'dtd' => 'text/plain',
//     'h' => 'text/plain',
//     'log' => 'text/plain',
//     'rng' => 'text/plain',
//     'txt' => 'text/plain',
//     'xsd' => 'text/plain',
//     'php' => Phar::PHP, // parse as PHP
//     'inc' => Phar::PHP, // parse as PHP
//     'avi' => 'video/avi',
//     'bmp' => 'image/bmp',
//     'css' => 'text/css',
//     'gif' => 'image/gif',
//     'htm' => 'text/html',
//     'html' => 'text/html',
//     'htmls' => 'text/html',
//     'ico' => 'image/x-ico',
//     'jpe' => 'image/jpeg',
//     'jpg' => 'image/jpeg',
//     'jpeg' => 'image/jpeg',
//     'js' => 'application/x-javascript',
//     'midi' => 'audio/midi',
//     'mid' => 'audio/midi',
//     'mod' => 'audio/mod',
//     'mov' => 'movie/quicktime',
//     'mp3' => 'audio/mp3',
//     'mpg' => 'video/mpeg',
//     'mpeg' => 'video/mpeg',
//     'pdf' => 'application/pdf',
//     'png' => 'image/png',
//     'swf' => 'application/shockwave-flash',
//     'tif' => 'image/tiff',
//     'tiff' => 'image/tiff',
//     'wav' => 'audio/wav',
//     'xbm' => 'image/xbm',
//     'xml' => 'text/xml',
// );
// [/php]

$rewrite // callable rewrite - The rewrites function is passed a string as its only parameter and must return a string or false.
// If you are using fast-cgi or cgi then the parameter passed to the function is the value of the $_SERVER['PATH_INFO'] variable. Otherwise, the parameter passed to the function is the value of the $_SERVER['REQUEST_URI'] variable.
// If a string is returned it is used as the internal file path. If false is returned then webPhar() will send a HTTP 403 Denied Code.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// Throws PharException when unable to open the internal file to output, or if called from a non-stub. If an invalid array value is passed into mimeTypes or an invalid callback is passed into rewrite, then UnexpectedValueException is thrown.
// 
// Changelog
// Version - Description
// 8.0.0   - fileNotFoundScript and rewrite are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::webPhar() example
// With the example below, the created phar will display Hello World if one browses to /myphar.phar/index.php or to /myphar.phar, and will display the source of index.phps if one browses to /myphar.phar/index.phps.
// [php]
// // creating the phar archive:
// try {
//     $phar = new Phar('myphar.phar');
//     $phar['index.php'] = '<? php echo "Hello World"; ? >';
//     $phar['index.phps'] = '<? php echo "Hello World"; ? >';
//     $phar->setStub('< ?php
// Phar::webPhar();
// __HALT_COMPILER(); ? >');
// } catch (Exception $e) {
//     // handle error here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phar.webphar.php
// ========== PHAR_WEBPHAR - END

// SYNTAX:
// void Phar::webPhar(string $alias = null, string $index = null, string $fileNotFoundScript = null, array $mimeTypes = array(), callable $rewrite = null)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHAR_WEBPHAR
// ==============================


// ============================== END
//   PHP_COMPRESSION_PHAR_PHAR   
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA 
// ============================== PUBLIC
// PHP_COMPRESSION_PHAR_PHARDATA_ADDEMPTYDIR - void php_compression_phar_phardata_addemptydir(PharData $phardata, string $directory)
// PHP_COMPRESSION_PHAR_PHARDATA_ADDFILE - void php_compression_phar_phardata_addfile(PharData $phardata, string $filename, string $localName = null)
// PHP_COMPRESSION_PHAR_PHARDATA_ADDFROMSTRING - void php_compression_phar_phardata_addfromstring(PharData $phardata, string $localName, string $contents)
// PHP_COMPRESSION_PHAR_PHARDATA_BUILDFROMDIRECTORY - array php_compression_phar_phardata_buildfromdirectory(PharData $phardata, string $directory, string $pattern = "")
// PHP_COMPRESSION_PHAR_PHARDATA_BUILDFROMITERATOR - array php_compression_phar_phardata_buildfromiterator(PharData $phardata, Traversable $iterator, string $baseDirectory = null)
// PHP_COMPRESSION_PHAR_PHARDATA_COMPRESS - PharData php_compression_phar_phardata_compress(PharData $phardata, int $compression, string $extension = null)
// PHP_COMPRESSION_PHAR_PHARDATA_COMPRESSFILES - void php_compression_phar_phardata_compressfiles(PharData $phardata, int $compression)
// PHP_COMPRESSION_PHAR_PHARDATA_CONSTRUCT - PharData php_compression_phar_phardata_construct(string $filename, int $flags, string $alias = null, int $format = 0)
// PHP_COMPRESSION_PHAR_PHARDATA_CONVERTTODATA - PharData php_compression_phar_phardata_converttodata(PharData $phardata, int $format = null, int $compression = null, string $extension = null)
// PHP_COMPRESSION_PHAR_PHARDATA_CONVERTTOEXECUTABLE - Phar php_compression_phar_phardata_converttoexecutable(PharData $phardata, int $format = null, int $compression = null, string $extension = null)
// PHP_COMPRESSION_PHAR_PHARDATA_COPY - bool php_compression_phar_phardata_copy(PharData $phardata, string $from, string $to)
// PHP_COMPRESSION_PHAR_PHARDATA_DECOMPRESS - PharData php_compression_phar_phardata_decompress(PharData $phardata, string $extension = null)
// PHP_COMPRESSION_PHAR_PHARDATA_DECOMPRESSFILES - bool php_compression_phar_phardata_decompressfiles(PharData $phardata)
// PHP_COMPRESSION_PHAR_PHARDATA_DELMETADATA - bool php_compression_phar_phardata_delmetadata(PharData $phardata)
// PHP_COMPRESSION_PHAR_PHARDATA_DELETE - bool php_compression_phar_phardata_delete(PharData $phardata, string $localName)
// PHP_COMPRESSION_PHAR_PHARDATA_DESTRUCT - void php_compression_phar_phardata_destruct(PharData $PharData)
// PHP_COMPRESSION_PHAR_PHARDATA_EXTRACTTO - bool php_compression_phar_phardata_extractto(PharData $phardata, string $directory, array|string|null $files = null, bool $overwrite = false)
// PHP_COMPRESSION_PHAR_PHARDATA_ISWRITABLE - bool php_compression_phar_phardata_iswritable(PharData $phardata)
// PHP_COMPRESSION_PHAR_PHARDATA_OFFSETSET - void php_compression_phar_phardata_offsetset(PharData $phardata, string $localName, resource|string $value)
// PHP_COMPRESSION_PHAR_PHARDATA_OFFSETUNSET - void php_compression_phar_phardata_offsetunset(PharData $phardata, string $localName)
// PHP_COMPRESSION_PHAR_PHARDATA_SETALIAS - bool php_compression_phar_phardata_setalias(PharData $phardata, string $alias)
// PHP_COMPRESSION_PHAR_PHARDATA_SETDEFAULTSTUB - bool php_compression_phar_phardata_setdefaultstub(PharData $phardata, string $index = null, string $webIndex = null)
// PHP_COMPRESSION_PHAR_PHARDATA_SETMETADATA - void php_compression_phar_phardata_setmetadata(PharData $phardata, mixed $metadata)
// PHP_COMPRESSION_PHAR_PHARDATA_SETSIGNATUREALGORITHM - void php_compression_phar_phardata_setsignaturealgorithm(PharData $phardata, int $algo, string $privateKey = null)
// PHP_COMPRESSION_PHAR_PHARDATA_SETSTUB - bool php_compression_phar_phardata_setstub(PharData $phardata, string $stub, int $len = -1)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (25)
// PharData::addEmptyDir() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::addFile() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::addFromString() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::buildFromDirectory() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::buildFromIterator() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::compress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::compressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::convertToData() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::convertToExecutable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::copy() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::decompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::decompressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::delMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::delete() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::__destruct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::extractTo() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::isWritable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::offsetSet() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::offsetUnset() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::setAlias() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::setDefaultStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharData::setMetadata() - UNKNOWN
// PharData::setSignatureAlgorithm() - UNKNOWN
// PharData::setStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== USING DATA_TYPES (11)
// void
// PharData - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// string
// array
// Traversable
// int
// Phar - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// bool
// null
// resource
// mixed
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_ADDEMPTYDIR
// ============================== PUBLIC
// ============================== ABOUT
// Add an empty directory to the tar/zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::addEmptyDir() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_addemptydir($phardata, $directory)
{

// ========== PHARDATA_ADDEMPTYDIR - BEGIN
// ===== ABOUT
// Add an empty directory to the tar/zip archive
// ===== DESCRIPTION
// With this method, an empty directory is created with path dirname. This method is similar to ZipArchive::addEmptyDir().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::addEmptyDir(string $directory): void
// ===== CODE
$phardata->addEmptyDir(

$directory // string directory - The name of the empty directory to create in the phar archive

); // Return Values
// no return value, exception is thrown on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::addEmptyDir() example
// [php]
// try {
//     $a = new PharData('/path/to/my.tar');
// 
//     $a->addEmptyDir('/full/path/to/file');
//     // demonstrates how this file is stored
//     $b = $a['full/path/to/file']->isDir();
// } catch (Exception $e) {
//     // handle errors here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.addemptydir.php
// ========== PHARDATA_ADDEMPTYDIR - END

// SYNTAX:
// void PharData::addEmptyDir(string $directory)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_ADDEMPTYDIR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_ADDFILE
// ============================== PUBLIC
// ============================== ABOUT
// Add a file from the filesystem to the tar/zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::addFile() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_addfile($phardata, $filename, $localName = null)
{

// ========== PHARDATA_ADDFILE - BEGIN
// ===== ABOUT
// Add a file from the filesystem to the tar/zip archive
// ===== DESCRIPTION
// With this method, any file or URL can be added to the tar/zip archive. If the optional second parameter localname is specified, the file will be stored in the archive with that name, otherwise the file parameter is used as the path to store within the archive. URLs must have a localname or an exception is thrown. This method is similar to ZipArchive::addFile().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::addFile(string $filename, ?string $localName = null): void
// ===== CODE
$phardata->addFile(

$filename, // string filename - Full or relative path to a file on disk to be added to the phar archive.

$localName // string localName - Path that the file will be stored in the archive.

); // Return Values
// no return value, exception is thrown on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - localName is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::addFile() example
// [php]
// try {
//     $a = new PharData('/path/to/my.tar');
// 
//     $a->addFile('/full/path/to/file');
//     // demonstrates how this file is stored
//     $b = $a['full/path/to/file']->getContent();
// 
//     $a->addFile('/full/path/to/file', 'my/file.txt');
//     $c = $a['my/file.txt']->getContent();
// 
//     // demonstrate URL usage
//     $a->addFile('http://www.example.com', 'example.html');
// } catch (Exception $e) {
//     // handle errors here
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: PharData::addFile(), PharData::addFromString() and PharData::offsetSet() save a new phar archive each time they are called. If performance is a concern, PharData::buildFromDirectory() or PharData::buildFromIterator() should be used instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.addfile.php
// ========== PHARDATA_ADDFILE - END

// SYNTAX:
// void PharData::addFile(string $filename, string $localName = null)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_ADDFILE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_ADDFROMSTRING
// ============================== PUBLIC
// ============================== ABOUT
// Add a file from a string to the tar/zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::addFromString() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_addfromstring($phardata, $localName, $contents)
{

// ========== PHARDATA_ADDFROMSTRING - BEGIN
// ===== ABOUT
// Add a file from a string to the tar/zip archive
// ===== DESCRIPTION
// With this method, any string can be added to the tar/zip archive. The file will be stored in the archive with localname as its path. This method is similar to ZipArchive::addFromString().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::addFromString(string $localName, string $contents): void
// ===== CODE
$phardata->addFromString(

$localName, // string localName - Path that the file will be stored in the archive.

$contents // string contents - The file contents to store

); // Return Values
// no return value, exception is thrown on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::addFromString() example
// [php]
// try {
//     $a = new PharData('/path/to/my.tar');
// 
//     $a->addFromString('path/to/file.txt', 'my simple file');
//     $b = $a['path/to/file.txt']->getContent();
// 
//     // to add contents from a stream handle for large files, use offsetSet()
//     $c = fopen('/path/to/hugefile.bin');
//     $a['largefile.bin'] = $c;
//     fclose($c);
// } catch (Exception $e) {
//     // handle errors here
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: PharData::addFile(), PharData::addFromString() and PharData::offsetSet() save a new phar archive each time they are called. If performance is a concern, PharData::buildFromDirectory() or PharData::buildFromIterator() should be used instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.addfromstring.php
// ========== PHARDATA_ADDFROMSTRING - END

// SYNTAX:
// void PharData::addFromString(string $localName, string $contents)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_ADDFROMSTRING
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_BUILDFROMDIRECTORY
// ============================== PUBLIC
// ============================== ABOUT
// Construct a tar/zip archive from the files within a directory.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::buildFromDirectory() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_buildfromdirectory($phardata, $directory, $pattern = "")
{
$return_phardata_buildfromdirectory = null;

// ========== PHARDATA_BUILDFROMDIRECTORY - BEGIN
// ===== ABOUT
// Construct a tar/zip archive from the files within a directory
// ===== DESCRIPTION
// Populate a tar/zip archive from directory contents. The optional second parameter is a regular expression (pcre) that is used to exclude files. Any filename that matches the regular expression will be included, all others will be excluded. For more fine-grained control, use PharData::buildFromIterator().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::buildFromDirectory(string $directory, string $pattern = ""): array
// ===== CODE
$return_phardata_buildfromdirectory = $phardata->buildFromDirectory(

$directory, // string directory - The full or relative path to the directory that contains all files to add to the archive.

$pattern // string pattern - An optional pcre regular expression that is used to filter the list of files. Only file paths matching the regular expression will be included in the archive.

); // Return Values
// Phar::buildFromDirectory() returns an associative array mapping internal path of file to the full path of the file on the filesystem, or false on failure.
// 
// Errors/Exceptions
// This method throws BadMethodCallException when unable to instantiate the internal directory iterators, or a PharException if there were errors saving the phar archive.
// 
// Changelog
// Version - Description
// 8.1.0   - PharData::buildFromDirectory() no longer returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::buildFromDirectory() example
// [php]
// $phar = new PharData('project.tar');
// // add all files in the project
// $phar->buildFromDirectory(dirname(__FILE__) . '/project');
// 
// $phar2 = new PharData('project2.zip');
// // add all files in the project, only include php files
// $phar2->buildFromDirectory(dirname(__FILE__) . '/project', '/\.php$/');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.buildfromdirectory.php
// ========== PHARDATA_BUILDFROMDIRECTORY - END

// SYNTAX:
// array PharData::buildFromDirectory(string $directory, string $pattern = "")

return $return_phardata_buildfromdirectory; // array
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_BUILDFROMDIRECTORY
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_BUILDFROMITERATOR
// ============================== PUBLIC
// ============================== ABOUT
// Construct a tar or zip archive from an iterator.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::buildFromIterator() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_buildfromiterator($phardata, $iterator, $baseDirectory = null)
{
$return_phardata_buildfromiterator = null;

// ========== PHARDATA_BUILDFROMITERATOR - BEGIN
// ===== ABOUT
// Construct a tar or zip archive from an iterator
// ===== DESCRIPTION
// Populate a tar or zip archive from an iterator. Two styles of iterators are supported, iterators that map the filename within the tar/zip to the name of a file on disk, and iterators like DirectoryIterator that return SplFileInfo objects. For iterators that return SplFileInfo objects, the second parameter is required.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::buildFromIterator(Traversable $iterator, ?string $baseDirectory = null): array
// ===== CODE
$return_phardata_buildfromiterator = $phardata->buildFromIterator(

$iterator, // Traversable iterator - Any iterator that either associatively maps tar/zip file to location or returns SplFileInfo objects

$baseDirectory // string baseDirectory - For iterators that return SplFileInfo objects, the portion of each file's full path to remove when adding to the tar/zip archive

); // Return Values
// PharData::buildFromIterator() returns an associative array mapping internal path of file to the full path of the file on the filesystem.
// 
// Errors/Exceptions
// This method returns UnexpectedValueException when the iterator returns incorrect values, such as an integer key instead of a string, a BadMethodCallException when an SplFileInfo-based iterator is passed without a baseDirectory parameter, or a PharException if there were errors saving the phar archive.
// 
// Changelog
// Version - Description
// 8.1.0   - PharData::buildFromIterator() no longer returns false.
// 8.0.0   - baseDirectory is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::buildFromIterator() with SplFileInfo
// For most tar/zip archives, the archive will reflect an actual directory layout, and the second style is the most useful. For instance, to create a tar/zip archive containing the files in this sample directory layout:
// [code]
// /path/to/project/
//                  config/
//                         dist.xml
//                         debug.xml
//                  lib/
//                      file1.php
//                      file2.php
//                  src/
//                      processthing.php
//                  www/
//                      index.php
//                  cli/
//                      index.php
// [/code]
// This code could be used to add these files to the "project.tar" tar archive:
// [php]
// $phar = new PharData('project.tar');
// $phar->buildFromIterator(
//     new RecursiveIteratorIterator(
//      new RecursiveDirectoryIterator('/path/to/project')),
//     '/path/to/project');
// [/php]
// The file project.tar can then be used immediately. PharData::buildFromIterator() does not set values such as compression, metadata, and this can be done after creating the tar/zip archive.
// As an interesting note, PharData::buildFromIterator() can also be used to copy the contents of an existing phar, tar or zip archive, as the PharData object descends from DirectoryIterator:
// [php]
// $phar = new PharData('project.tar');
// $phar->buildFromIterator(
//     new RecursiveIteratorIterator(
//      new Phar('/path/to/anotherphar.phar')),
//     'phar:///path/to/anotherphar.phar/path/to/project');
// $phar->setStub($phar->createDefaultStub('cli/index.php', 'www/index.php'));
// [/php]
// [/example]
// [example]
// Example #2 A PharData::buildFromIterator() with other iterators
// The second form of the iterator can be used with any iterator that returns a key => value mapping, such as an ArrayIterator:
// [php]
// $phar = new PharData('project.tar');
// $phar->buildFromIterator(
//     new ArrayIterator(
//      array(
//         'internal/file.php' => dirname(__FILE__) . '/somefile.php',
//         'another/file.jpg' => fopen('/path/to/bigfile.jpg', 'rb'),
//      )));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.buildfromiterator.php
// ========== PHARDATA_BUILDFROMITERATOR - END

// SYNTAX:
// array PharData::buildFromIterator(Traversable $iterator, string $baseDirectory = null)

return $return_phardata_buildfromiterator; // array
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_BUILDFROMITERATOR
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_COMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Compresses the entire tar/zip archive using Gzip or Bzip2 compression.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::compress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_compress($phardata, $compression, $extension = null)
{
$return_phardata_compress = null;

// ========== PHARDATA_COMPRESS - BEGIN
// ===== ABOUT
// Compresses the entire tar/zip archive using Gzip or Bzip2 compression
// ===== DESCRIPTION
// For tar archives, this method compresses the entire archive using gzip compression or bzip2 compression. The resulting file can be processed with the gunzip command/bunzip command, or accessed directly and transparently with the Phar extension.
// For zip archives, this method fails with an exception. The zlib extension must be enabled to compress with gzip compression, the bzip2 extension must be enabled in order to compress with bzip2 compression.
// In addition, this method automatically renames the archive, appending .gz, .bz2 or removing the extension if passed Phar::NONE to remove compression. Alternatively, a file extension may be specified with the second parameter.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::compress(int $compression, ?string $extension = null): ?PharData
// ===== CODE
$return_phardata_compress = $phardata->compress(

$compression, // int compression - Compression must be one of Phar::GZ, Phar::BZ2 to add compression, or Phar::NONE to remove compression.

$extension // string extension - By default, the extension is .tar.gz or .tar.bz2 for compressing a tar, and .tar for decompressing.

); // Return Values
// A PharData object is returned on success, or null on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the zlib extension is not available, or the bzip2 extension is not enabled.
// 
// Changelog
// Version - Description
// 8.0.0   - extension is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::compress() example
// [php]
// $p = new PharData('/path/to/my.tar');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// $p1 = $p->compress(Phar::GZ); // copies to /path/to/my.tar.gz
// $p2 = $p->compress(Phar::BZ2); // copies to /path/to/my.tar.bz2
// $p3 = $p2->compress(Phar::NONE); // exception: /path/to/my.tar already exists
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.compress.php
// ========== PHARDATA_COMPRESS - END

// SYNTAX:
// PharData PharData::compress(int $compression, string $extension = null)

return $return_phardata_compress; // PharData
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_COMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_COMPRESSFILES
// ============================== PUBLIC
// ============================== ABOUT
// Compresses all files in the current tar/zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::compressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_compressfiles($phardata, $compression)
{

// ========== PHARDATA_COMPRESSFILES - BEGIN
// ===== ABOUT
// Compresses all files in the current tar/zip archive
// ===== DESCRIPTION
// For tar-based archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use PharData::compress() to compress an entire tar-based archive.
// For Zip-based archives, this method compresses all files in the archive using the specified compression. The zlib or bzip2 extensions must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2/zlib compression, the respective extension must be enabled in order to decompress the files prior to re-compressing.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::compressFiles(int $compression): void
// ===== CODE
$phardata->compressFiles(

$compression // int compression - Compression must be one of Phar::GZ, Phar::BZ2 to add compression, or Phar::NONE to remove compression.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, the zlib extension is not available, or if any files are compressed using bzip2 compression and the bzip2 extension is not enabled.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::compressFiles() example
// [php]
// $p = new Phar('/path/to/my.phar', 0, 'my.phar');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// $p->compressFiles(Phar::GZ);
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// [/php]
// The above example will output:
// [result]
// string(10) "myfile.txt"
// bool(false)
// bool(false)
// bool(false)
// string(11) "myfile2.txt"
// bool(false)
// bool(false)
// bool(false)
// string(10) "myfile.txt"
// int(4096)
// bool(false)
// bool(true)
// string(11) "myfile2.txt"
// int(4096)
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.compressfiles.php
// ========== PHARDATA_COMPRESSFILES - END

// SYNTAX:
// void PharData::compressFiles(int $compression)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_COMPRESSFILES
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Construct a non-executable tar or zip archive object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_construct($filename, $flags, $alias = null, $format = 0)
{
$return_phardata_construct = null;

// ========== PHARDATA_CONSTRUCT - BEGIN
// ===== ABOUT
// Construct a non-executable tar or zip archive object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::__construct(
//    string $filename,
//    int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS,
//    ?string $alias = null,
//    int $format = 0
// )
// ===== CODE
$return_phardata_construct = new PharData(

$filename, // string filename - Path to an existing tar/zip archive or to-be-created archive

$flags, // int flags - Flags to pass to Phar parent class RecursiveDirectoryIterator.

$alias, // string alias - Alias with which this Phar archive should be referred to in calls to stream functionality.

$format // int format - One of the file format constants available within the Phar class.

); // Return
// PharData
// 
// Errors/Exceptions
// Throws BadMethodCallException if called twice; UnexpectedValueException if the Phar archive can't be opened.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::__construct() example
// [php]
// try {
//     $p = new PharData('/path/to/my.tar', Phar::CURRENT_AS_FILEINFO | Phar::KEY_AS_FILENAME);
// } catch (UnexpectedValueException $e) {
//     die('Could not open my.tar');
// } catch (BadMethodCallException $e) {
//     echo 'technically, this cannot happen';
// }
// echo file_get_contents('phar:///path/to/my.tar/example.txt');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.construct.php
// ========== PHARDATA_CONSTRUCT - END

// SYNTAX:
// PharData PharData::__construct(string $filename, int $flags, string $alias = null, int $format = 0)

return $return_phardata_construct; // PharData
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_CONVERTTODATA
// ============================== PUBLIC
// ============================== ABOUT
// Convert a phar archive to a non-executable tar or zip file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::convertToData() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_converttodata($phardata, $format = null, $compression = null, $extension = null)
{
$return_phardata_converttodata = null;

// ========== PHARDATA_CONVERTTODATA - BEGIN
// ===== ABOUT
// Convert a phar archive to a non-executable tar or zip file
// ===== DESCRIPTION
// This method is used to convert a non-executable tar or zip archive to another non-executable format.
// If no changes are specified, this method throws a BadMethodCallException. This method should be used to convert a tar archive to zip format or vice-versa. Although it is possible to simply change the compression of a tar archive using this method, it is better to use the PharData::compress() method for logical consistency.
// If successful, the method creates a new archive on disk and returns a PharData object. The old archive is not removed from disk, and should be done manually after the process has finished.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::convertToData(?int $format = null, ?int $compression = null, ?string $extension = null): ?PharData
// ===== CODE
$return_phardata_converttodata = $phardata->convertToData(
$format, // int format - This should be one of Phar::TAR or Phar::ZIP. If set to null, the existing file format will be preserved.

$compression, // int compression - This should be one of Phar::NONE for no whole-archive compression, Phar::GZ for zlib-based compression, and Phar::BZ2 for bzip-based compression.

$extension // string extension - This parameter is used to override the default file extension for a converted archive. Note that .phar cannot be used anywhere in the filename for a non-executable tar or zip archive.
// If converting to a tar-based phar archive, the default extensions are .tar, .tar.gz, and .tar.bz2 depending on specified compression. For zip-based archives, the default extension is .zip.

); // Return Values
// The method returns a PharData object on success, or null on failure.
// 
// Errors/Exceptions
// This method throws BadMethodCallException when unable to compress, an unknown compression method has been specified, the requested archive is buffering with Phar::startBuffering() and has not concluded with Phar::stopBuffering(), and a PharException if any problems are encountered during the phar creation process.
// 
// Changelog
// Version - Description
// 8.0.0   - format, compression, and extension are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::convertToData() example
// Using PharData::convertToData():
// [php]
// try {
//     $tarphar = new PharData('myphar.tar');
//     // note that myphar.tar is *not* unlinked
//     // convert it to the non-executable tar file format
//     // creates myphar.zip
//     $zip = $tarphar->convertToData(Phar::ZIP);
//     // create myphar.tbz
//     $tgz = $zip->convertToData(Phar::TAR, Phar::BZ2, '.tbz');
//     // creates myphar.phar.tgz
//     $phar = $tarphar->convertToData(Phar::PHAR); // throws exception
// } catch (Exception $e) {
//     // handle the error here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.converttodata.php
// ========== PHARDATA_CONVERTTODATA - END

// SYNTAX:
// PharData PharData::convertToData(int $format = null, int $compression = null, string $extension = null)

return $return_phardata_converttodata; // PharData
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_CONVERTTODATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_CONVERTTOEXECUTABLE
// ============================== PUBLIC
// ============================== ABOUT
// Convert a non-executable tar/zip archive to an executable phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::convertToExecutable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_converttoexecutable($phardata, $format = null, $compression = null, $extension = null)
{
$return_phardata_converttoexecutable = null;

// ========== PHARDATA_CONVERTTOEXECUTABLE - BEGIN
// ===== ABOUT
// Convert a non-executable tar/zip archive to an executable phar archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// This method is used to convert a non-executable tar or zip archive to an executable phar archive. Any of the three executable file formats (phar, tar or zip) can be used, and whole-archive compression can also be performed.
// If no changes are specified, this method throws a BadMethodCallException.
// If successful, the method creates a new archive on disk and returns a Phar object. The old archive is not removed from disk, and should be done manually after the process has finished.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null): ?Phar
// ===== CODE
$return_phardata_converttoexecutable = $phardata->convertToExecutable(

$format, // int format - This should be one of Phar::PHAR, Phar::TAR, or Phar::ZIP. If set to null, the existing file format will be preserved.

$compression, // int compression - This should be one of Phar::NONE for no whole-archive compression, Phar::GZ for zlib-based compression, and Phar::BZ2 for bzip-based compression.

$extension // string extension - This parameter is used to override the default file extension for a converted archive. Note that all zip- and tar-based phar archives must contain .phar in their file extension in order to be processed as a phar archive.
// If converting to a phar-based archive, the default extensions are .phar, .phar.gz, or .phar.bz2 depending on the specified compression. For tar-based phar archives, the default extensions are .phar.tar, .phar.tar.gz, and .phar.tar.bz2. For zip-based phar archives, the default extension is .phar.zip.

); // Return Values
// The method returns a Phar object on success, or null on failure.
// 
// Errors/Exceptions
// This method throws BadMethodCallException when unable to compress, an unknown compression method has been specified, the requested archive is buffering with Phar::startBuffering() and has not concluded with Phar::stopBuffering(), an UnexpectedValueException if write support is disabled, and a PharException if any problems are encountered during the phar creation process.
// 
// Changelog
// Version - Description
// 8.0.0   - format, compression, and localName are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::convertToExecutable() example
// Using PharData::convertToExecutable():
// [php]
// try {
//     $tarphar = new PharData('myphar.tar');
//     // convert it to the phar file format
//     // note that myphar.tar is *not* unlinked
//     $phar = $tarphar->convertToExecutable(Phar::PHAR); // creates myphar.phar
//     $phar->setStub($phar->createDefaultStub('cli.php', 'web/index.php'));
//     // creates myphar.phar.tgz
//     $compressed = $tarphar->convertToExecutable(Phar::TAR, Phar::GZ, '.phar.tgz');
// } catch (Exception $e) {
//     // handle the error here
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.converttoexecutable.php
// ========== PHARDATA_CONVERTTOEXECUTABLE - END

// SYNTAX:
// Phar PharData::convertToExecutable(int $format = null, int $compression = null, string $extension = null)

return $return_phardata_converttoexecutable; // Phar
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_CONVERTTOEXECUTABLE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_COPY
// ============================== PUBLIC
// ============================== ABOUT
// Copy a file internal to the phar archive to another new file within the phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::copy() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_copy($phardata, $from, $to)
{
$return_phardata_copy = false;

// ========== PHARDATA_COPY - BEGIN
// ===== ABOUT
// Copy a file internal to the phar archive to another new file within the phar
// ===== DESCRIPTION
// Copy a file internal to the tar/zip archive to another new file within the same archive. This is an object-oriented alternative to using copy() with the phar stream wrapper.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::copy(string $from, string $to): bool
// ===== CODE
$return_phardata_copy = $phardata->copy(

$from, // string from

$to // string to

); // Return Values
// returns true on success, but it is safer to encase method call in a try/catch block and assume success if no exception is thrown.
// 
// Errors/Exceptions
// throws UnexpectedValueException if the source file does not exist, the destination file already exists, write access is disabled, opening either file fails, reading the source file fails, or a PharException if writing the changes to the phar fails.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::copy() example
// This example shows using PharData::copy() and the equivalent stream wrapper performance of the same thing. The primary difference between the two approaches is error handling. All PharData methods throw exceptions, whereas the stream wrapper uses trigger_error().
// [php]
// try {
//     $phar = new PharData('myphar.tar');
//     $phar['a'] = 'hi';
//     $phar->copy('a', 'b');
//     echo $phar['b']; // outputs "phar://myphar.tar/b"
// } catch (Exception $e) {
//     // handle error
// }
// 
// // the stream wrapper equivalent of the above code.
// // E_WARNINGS are triggered on error rather than exceptions.
// copy('phar://myphar.tar/a', 'phar//myphar.tar/c');
// echo file_get_contents('phar://myphar.tar/c'); // outputs "hi"
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.copy.php
// ========== PHARDATA_COPY - END

// SYNTAX:
// bool PharData::copy(string $from, string $to)

return $return_phardata_copy; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_COPY
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_DECOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Decompresses the entire Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::decompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_decompress($phardata, $extension = null)
{
$return_phardata_decompress = null;

// ========== PHARDATA_DECOMPRESS - BEGIN
// ===== ABOUT
// Decompresses the entire Phar archive
// ===== DESCRIPTION
// For tar-based archives, this method decompresses the entire archive.
// For Zip-based archives, this method fails with an exception. The zlib extension must be enabled to decompress an archive compressed with gzip compression, and the bzip2 extension must be enabled in order to decompress an archive compressed with bzip2 compression.
// In addition, this method automatically renames the file extension of the archive, .tar by default. Alternatively, a file extension may be specified with the extension parameter.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::decompress(?string $extension = null): ?PharData
// ===== CODE
$return_phardata_decompress = $phardata->decompress(

$extension // string extension - For decompressing, the default file extension is .tar. Use this parameter to specify another file extension. Be aware that only executable archives can contain .phar in their filename.

); // Return Values
// A PharData object is returned on success, or null on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the zlib extension is not available, or the bzip2 extension is not enabled.
// 
// Changelog
// Version - Description
// 8.0.0   - extension is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::decompress() example
// [php]
// $p = new PharData('/path/to/my.tar.gz');
// $p->decompress(); // creates /path/to/my.tar
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.decompress.php
// ========== PHARDATA_DECOMPRESS - END

// SYNTAX:
// PharData PharData::decompress(string $extension = null)

return $return_phardata_decompress; // PharData
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_DECOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_DECOMPRESSFILES
// ============================== PUBLIC
// ============================== ABOUT
// Decompresses all files in the current zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::decompressFiles() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_decompressfiles($phardata)
{
$return_phardata_decompressfiles = false;

// ========== PHARDATA_DECOMPRESSFILES - BEGIN
// ===== ABOUT
// Decompresses all files in the current zip archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// For tar-based archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use PharData::compress() to compress an entire tar-based archive.
// For Zip-based archives, this method decompresses all files in the archive. The zlib or bzip2 extensions must be enabled to take advantage of this feature if any files are compressed using bzip2/zlib compression.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::decompressFiles(): bool
// ===== CODE
$return_phardata_decompressfiles = $phardata->decompressFiles(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the zlib extension is not available, or if any files are compressed using bzip2 compression and the bzip2 extension is not enabled.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::decompressFiles() example
// [php]
// $p = new PharData('/path/to/my.zip');
// $p['myfile.txt'] = 'hi';
// $p['myfile2.txt'] = 'hi';
// $p->compressFiles(Phar::GZ);
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// $p->decompressFiles();
// foreach ($p as $file) {
//     var_dump($file->getFileName());
//     var_dump($file->isCompressed());
//     var_dump($file->isCompressed(Phar::BZ2));
//     var_dump($file->isCompressed(Phar::GZ));
// }
// [/php]
// The above example will output:
// [result]
// string(10) "myfile.txt"
// int(4096)
// bool(false)
// bool(true)
// string(11) "myfile2.txt"
// int(4096)
// bool(false)
// bool(true)
// string(10) "myfile.txt"
// bool(false)
// bool(false)
// bool(false)
// string(11) "myfile2.txt"
// bool(false)
// bool(false)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.decompressfiles.php
// ========== PHARDATA_DECOMPRESSFILES - END

// SYNTAX:
// bool PharData::decompressFiles()

return $return_phardata_decompressfiles; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_DECOMPRESSFILES
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_DELMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Deletes the global metadata of a zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::delMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_delmetadata($phardata)
{
$return_phardata_delmetadata = false;

// ========== PHARDATA_DELMETADATA - BEGIN
// ===== ABOUT
// Deletes the global metadata of a zip archive
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Deletes the global metadata of the zip archive
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::delMetadata(): bool
// ===== CODE
$return_phardata_delmetadata = $phardata->delMetadata(

); // Return Values
// returns true on success, but it is better to check for thrown exception, and assume success if none is thrown.
// 
// Errors/Exceptions
// Throws PharException if errors occur while flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::delMetaData() example
// [php]
// try {
//     $phar = new PharData('myphar.zip');
//     var_dump($phar->getMetadata());
//     $phar->setMetadata("hi there");
//     var_dump($phar->getMetadata());
//     $phar->delMetadata();
//     var_dump($phar->getMetadata());
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// The above example will output:
// [result]
// NULL
// string(8) "hi there"
// NULL
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.delmetadata.php
// ========== PHARDATA_DELMETADATA - END

// SYNTAX:
// bool PharData::delMetadata()

return $return_phardata_delmetadata; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_DELMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_DELETE
// ============================== PUBLIC
// ============================== ABOUT
// Delete a file within a tar/zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::delete() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_delete($phardata, $localName)
{
$return_phardata_delete = false;

// ========== PHARDATA_DELETE - BEGIN
// ===== ABOUT
// Delete a file within a tar/zip archive
// ===== DESCRIPTION
// Delete a file within an archive. This is the functional equivalent of calling unlink() on the stream wrapper equivalent, as shown in the example below.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::delete(string $localName): bool
// ===== CODE
$return_phardata_delete = $phardata->delete(

$localName // string localName - Path within an archive to the file to delete.

); // Return Values
// returns true on success, but it is better to check for thrown exception, and assume success if none is thrown.
// 
// Errors/Exceptions
// Throws PharException if errors occur while flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::delete() example
// [php]
// try {
//     $phar = new PharData('myphar.zip');
//     $phar->delete('unlink/me.php');
//     // this is equivalent to:
//     unlink('phar://myphar.phar/unlink/me.php');
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.delete.php
// ========== PHARDATA_DELETE - END

// SYNTAX:
// bool PharData::delete(string $localName)

return $return_phardata_delete; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_DELETE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_DESTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Destructs a non-executable tar or zip archive object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::__destruct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_destruct($PharData)
{

// ========== PHARDATA_DESTRUCT - BEGIN
// ===== ABOUT
// Destructs a non-executable tar or zip archive object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::__destruct()
// ===== CODE
$phardata->__destruct(

// This function has no parameters.

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.destruct.php
// ========== PHARDATA_DESTRUCT - END

// SYNTAX:
// void PharData::__destruct()

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_DESTRUCT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_EXTRACTTO
// ============================== PUBLIC
// ============================== ABOUT
// Extract the contents of a tar/zip archive to a directory.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::extractTo() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_extractto($phardata, $directory, $files = null, $overwrite = false)
{
$return_phardata_extractto = false;

// ========== PHARDATA_EXTRACTTO - BEGIN
// ===== ABOUT
// Extract the contents of a tar/zip archive to a directory
// ===== DESCRIPTION
// Extract all files within a tar/zip archive to disk. Extracted files and directories preserve permissions as stored in the archive. The optional parameters allow optional control over which files are extracted, and whether existing files on disk can be overwritten. The second parameter files can be either the name of a file or directory to extract, or an array of names of files and directories to extract. By default, this method will not overwrite existing files, the third parameter can be set to true to enable overwriting of files. This method is similar to ZipArchive::extractTo().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::extractTo(string $directory, array|string|null $files = null, bool $overwrite = false): bool
// ===== CODE
$return_phardata_extractto = $phardata->extractTo(

$directory, // string directory - Path to extract the given files to

$files, // array|string|null files - The name of a file or directory to extract, or an array of files/directories to extract

$overwrite // bool overwrite - Set to true to enable overwriting existing files

); // Return Values
// returns true on success, but it is better to check for thrown exception, and assume success if none is thrown.
// 
// Errors/Exceptions
// Throws PharException if errors occur while flushing changes to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::extractTo() example
// [php]
// try {
//     $phar = new PharData('myphar.tar');
//     $phar->extractTo('/full/path'); // extract all files
//     $phar->extractTo('/another/path', 'file.txt'); // extract only file.txt
//     $phar->extractTo('/this/path',
//         array('file1.txt', 'file2.txt')); // extract 2 files only
//     $phar->extractTo('/third/path', null, true); // extract all files, and overwrite
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Windows NTFS file systems do not support some characters in filenames, namely <|>*?":. Filenames with a trailing dot are not supported either. Contrary to some extraction tools, this method does not replace these characters with an underscore, but instead fails to extract such files.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.extractto.php
// ========== PHARDATA_EXTRACTTO - END

// SYNTAX:
// bool PharData::extractTo(string $directory, array|string|null $files = null, bool $overwrite = false)

return $return_phardata_extractto; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_EXTRACTTO
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_ISWRITABLE
// ============================== PUBLIC
// ============================== ABOUT
// Returns true if the tar/zip archive can be modified.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::isWritable() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_iswritable($phardata)
{
$return_phardata_iswritable = false;

// ========== PHARDATA_ISWRITABLE - BEGIN
// ===== ABOUT
// Returns true if the tar/zip archive can be modified
// ===== DESCRIPTION
// This method returns true if the tar/zip archive on disk is not read-only. Unlike Phar::isWritable(), data-only tar/zip archives can be modified even if phar.readonly is set to 1.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::isWritable(): bool
// ===== CODE
$return_phardata_iswritable = $phardata->isWritable(

// No parameters.

); // Return Values
// Returns true if the tar/zip archive can be modified
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.iswritable.php
// ========== PHARDATA_ISWRITABLE - END

// SYNTAX:
// bool PharData::isWritable()

return $return_phardata_iswritable; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_ISWRITABLE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_OFFSETSET
// ============================== PUBLIC
// ============================== ABOUT
// Set the contents of a file within the tar/zip to those of an external file or string.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::offsetSet() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_offsetset($phardata, $localName, $value)
{

// ========== PHARDATA_OFFSETSET - BEGIN
// ===== ABOUT
// Set the contents of a file within the tar/zip to those of an external file or string
// ===== DESCRIPTION
// This is an implementation of the ArrayAccess interface allowing direct manipulation of the contents of a tar/zip archive using array access brackets. offsetSet is used for modifying an existing file, or adding a new file to a tar/zip archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::offsetSet(string $localName, resource|string $value): void
// ===== CODE
$phardata->offsetSet(

$localName, // string localName - The filename (relative path) to modify in a tar or zip archive.

$value // resource|string value - Content of the file.

); // Return Values
// No return values.
// 
// Errors/Exceptions
// Throws PharException if there are any problems flushing changes made to the tar/zip archive to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::offsetSet() example
// offsetSet should not be accessed directly, but instead used via array access with the [] operator.
// [php]
// $p = new PharData('/path/to/my.tar');
// try {
//     // calls offsetSet
//     $p['file.txt'] = 'Hi there';
// } catch (Exception $e) {
//     echo 'Could not modify file.txt:', $e;
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: PharData::addFile(), PharData::addFromString() and PharData::offsetSet() save a new phar archive each time they are called. If performance is a concern, PharData::buildFromDirectory() or PharData::buildFromIterator() should be used instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.offsetset.php
// ========== PHARDATA_OFFSETSET - END

// SYNTAX:
// void PharData::offsetSet(string $localName, resource|string $value)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_OFFSETSET
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_OFFSETUNSET
// ============================== PUBLIC
// ============================== ABOUT
// Remove a file from a tar/zip archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::offsetUnset() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_offsetunset($phardata, $localName)
{

// ========== PHARDATA_OFFSETUNSET - BEGIN
// ===== ABOUT
// Remove a file from a tar/zip archive
// ===== DESCRIPTION
// This is an implementation of the ArrayAccess interface allowing direct manipulation of the contents of a tar/zip archive using array access brackets. offsetUnset is used for deleting an existing file, and is called by the unset() language construct.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::offsetUnset(string $localName): void
// ===== CODE
$phardata->offsetUnset(

$localName // string localName - The filename (relative path) to modify in the tar/zip archive.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// Throws PharException if there are any problems flushing changes made to the tar/zip archive to disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharData::offsetUnset() example
// [php]
// $p = new PharData('/path/to/my.zip');
// try {
//     // deletes file.txt from my.zip by calling offsetUnset
//     unset($p['file.txt']);
// } catch (Exception $e) {
//     echo 'Could not delete file.txt: ', $e;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.offsetunset.php
// ========== PHARDATA_OFFSETUNSET - END

// SYNTAX:
// void PharData::offsetUnset(string $localName)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_OFFSETUNSET
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_SETALIAS
// ============================== PUBLIC
// ============================== ABOUT
// Dummy function (Phar::setAlias is not valid for PharData).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::setAlias() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_setalias($phardata, $alias)
{
$return_phardata_setalias = false;

// ========== PHARDATA_SETALIAS - BEGIN
// ===== ABOUT
// Dummy function (Phar::setAlias is not valid for PharData)
// ===== DESCRIPTION
// Non-executable tar/zip archives cannot have an alias, so this method simply throws an exception.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::setAlias(string $alias): bool
// ===== CODE
$return_phardata_setalias = $phardata->setAlias(

$alias // string alias - A shorthand string that this archive can be referred to in phar stream wrapper access. This parameter is ignored.

); // Return Values
// bool
// 
// Errors/Exceptions
// Throws PharException on all method calls
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.setalias.php
// ========== PHARDATA_SETALIAS - END

// SYNTAX:
// bool PharData::setAlias(string $alias)

return $return_phardata_setalias; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_SETALIAS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_SETDEFAULTSTUB
// ============================== PUBLIC
// ============================== ABOUT
// Dummy function (Phar::setDefaultStub is not valid for PharData).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::setDefaultStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_setdefaultstub($phardata, $index = null, $webIndex = null)
{
$return_phardata_setdefaultstub = false;

// ========== PHARDATA_SETDEFAULTSTUB - BEGIN
// ===== ABOUT
// Dummy function (Phar::setDefaultStub is not valid for PharData)
// ===== DESCRIPTION
// Non-executable tar/zip archives cannot have a stub, so this method simply throws an exception.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::setDefaultStub(?string $index = null, ?string $webIndex = null): bool
// ===== CODE
$return_phardata_setdefaultstub = $phardata->setDefaultStub(

$index, // string index - Relative path within the phar archive to run if accessed on the command-line

$webIndex // string webIndex - Relative path within the phar archive to run if accessed through a web browser

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws PharException on all method calls
// 
// Changelog
// Version - Description
// 8.0.0   - webIndex is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.setdefaultstub.php
// ========== PHARDATA_SETDEFAULTSTUB - END

// SYNTAX:
// bool PharData::setDefaultStub(string $index = null, string $webIndex = null)

return $return_phardata_setdefaultstub; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_SETDEFAULTSTUB
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_SETMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Sets phar archive meta-data.
// ============================== SUPPORT
// UNKNOWN
// ============================== USING SUBCLASSES (1)
// PharData::setMetadata() - UNKNOWN
// ============================== CODE
function php_compression_phar_phardata_setmetadata($phardata, $metadata)
{

// ========== PHARDATA_SETMETADATA - BEGIN
// ===== ABOUT
// Sets phar archive meta-data
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Phar::setMetadata() should be used to store customized data that describes something about the phar archive as a complete entity. PharFileInfo::setMetadata() should be used for file-specific meta-data. Meta-data can slow down the performance of loading a phar archive if the data is large.
// Some possible uses for meta-data include specifying which file within the archive should be used to bootstrap the archive, or the location of a file manifest like > PEAR's package.xml file. However, any useful data that describes the phar archive may be stored.
// ===== SUPPORTED
// No version information available, might only be in Git
// ===== SYNTAX
// public PharData::setMetadata(mixed $metadata): void
// ===== CODE
$phardata->setMetadata(

$metadata // mixed metadata - Any PHP variable containing information to store that describes the phar archive

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 A Phar::setMetadata() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['file.php'] = '<?php echo "hello"';
//     $p->setMetadata(array('bootstrap' => 'file.php'));
//     var_dump($p->getMetadata());
// } catch (Exception $e) {
//     echo 'Could not create and/or modify phar:', $e;
// }
// [/php]
// The above example will output:
// [result]
// array(1) {
//   ["bootstrap"]=>
//   string(8) "file.php"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.setmetadata.php
// ========== PHARDATA_SETMETADATA - END

// SYNTAX:
// void PharData::setMetadata(mixed $metadata)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_SETMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_SETSIGNATUREALGORITHM
// ============================== PUBLIC
// ============================== ABOUT
// Set the signature algorithm for a phar and apply it.
// ============================== SUPPORT
// UNKNOWN
// ============================== USING SUBCLASSES (1)
// PharData::setSignatureAlgorithm() - UNKNOWN
// ============================== CODE
function php_compression_phar_phardata_setsignaturealgorithm($phardata, $algo, $privateKey = null)
{

// ========== PHARDATA_SETSIGNATUREALGORITHM - BEGIN
// ===== ABOUT
// Set the signature algorithm for a phar and apply it
// ===== DESCRIPTION
// Note: This method requires the php.ini setting phar.readonly to be set to 0 in order to work for Phar objects. Otherwise, a PharException will be thrown.
// Set the signature algorithm for a phar and apply it. The signature algorithm must be one of Phar::MD5, Phar::SHA1, Phar::SHA256, Phar::SHA512, or Phar::OPENSSL.
// ===== SUPPORTED
// No version information available, might only be in Git
// ===== SYNTAX
// public PharData::setSignatureAlgorithm(int $algo, ?string $privateKey = null): void
// ===== CODE
$phardata->setSignatureAlgorithm(

$algo, // int algo - One of Phar::MD5, Phar::SHA1, Phar::SHA256, Phar::SHA512, or Phar::OPENSSL

$privateKey // string $privateKey

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// Throws UnexpectedValueException for many errors, BadMethodCallException if called for a zip- or a tar-based phar archive, and a PharException if any problems occur flushing changes to disk.
// 
// Changelog
// Version - Description
// 8.0.0   - privateKey is now nullable.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.setsignaturealgorithm.php
// ========== PHARDATA_SETSIGNATUREALGORITHM - END

// SYNTAX:
// void PharData::setSignatureAlgorithm(int $algo, string $privateKey = null)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_SETSIGNATUREALGORITHM
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARDATA_SETSTUB
// ============================== PUBLIC
// ============================== ABOUT
// Dummy function (Phar::setStub is not valid for PharData).
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharData::setStub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_phardata_setstub($phardata, $stub, $len = -1)
{
$return_phardata_setstub = false;

// ========== PHARDATA_SETSTUB - BEGIN
// ===== ABOUT
// Dummy function (Phar::setStub is not valid for PharData)
// ===== DESCRIPTION
// Non-executable tar/zip archives cannot have a stub, so this method simply throws an exception.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharData::setStub(string $stub, int $len = -1): bool
// ===== CODE
$return_phardata_setstub = $phardata->setStub(

$stub, // string stub - A string or an open stream handle to use as the executable stub for this phar archive. This parameter is ignored.

$len // int len

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws PharException on all method calls
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/phardata.setstub.php
// ========== PHARDATA_SETSTUB - END

// SYNTAX:
// bool PharData::setStub(string $stub, int $len = -1)

return $return_phardata_setstub; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA_SETSTUB
// ==============================


// ============================== END
// PHP_COMPRESSION_PHAR_PHARDATA 
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO
// ============================== PUBLIC
// PHP_COMPRESSION_PHAR_PHARFILEINFO_CHMOD - void php_compression_phar_pharfileinfo_chmod(PharFileInfo $pharfileinfo, int $perms)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_COMPRESS - bool php_compression_phar_pharfileinfo_compress(PharFileInfo $pharfileinfo, int $compression)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_CONSTRUCT - PharFileInfo php_compression_phar_pharfileinfo_construct(string $filename)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DECOMPRESS - bool php_compression_phar_pharfileinfo_decompress(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DELMETADATA - bool php_compression_phar_pharfileinfo_delmetadata(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DESTRUCT - void php_compression_phar_pharfileinfo_destruct(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCRC32 - int php_compression_phar_pharfileinfo_getcrc32(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCOMPRESSEDSIZE - int php_compression_phar_pharfileinfo_getcompressedsize(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCONTENT - string php_compression_phar_pharfileinfo_getcontent(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETMETADATA - mixed php_compression_phar_pharfileinfo_getmetadata(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETPHARFLAGS - int php_compression_phar_pharfileinfo_getpharflags(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_HASMETADATA - bool php_compression_phar_pharfileinfo_hasmetadata(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_ISCRCCHECKED - bool php_compression_phar_pharfileinfo_iscrcchecked(PharFileInfo $pharfileinfo)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_ISCOMPRESSED - bool php_compression_phar_pharfileinfo_iscompressed(PharFileInfo $pharfileinfo, int $compression = null)
// PHP_COMPRESSION_PHAR_PHARFILEINFO_SETMETADATA - void php_compression_phar_pharfileinfo_setmetadata(PharFileInfo $pharfileinfo, mixed $metadata)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (15)
// PharFileInfo::chmod() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::compress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharFileInfo::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::decompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// PharFileInfo::delMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// PharFileInfo::__destruct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::getCRC32() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::getCompressedSize() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::getContent() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// PharFileInfo::getMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::getPharFlags() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::hasMetadata() - PHP_5 >= PHP_5_3_0, PHP 7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// PharFileInfo::isCRCChecked() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::isCompressed() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// PharFileInfo::setMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== USING DATA_TYPES (6)
// void
// PharFileInfo - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// int
// bool
// string
// mixed
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_CHMOD
// ============================== PUBLIC
// ============================== ABOUT
// Sets file-specific permission bits.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::chmod() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_chmod($pharfileinfo, $perms)
{

// ========== PHARFILEINFO_CHMOD - BEGIN
// ===== ABOUT
// Sets file-specific permission bits
// ===== DESCRIPTION
// PharFileInfo::chmod() allows setting of the executable file permissions bit, as well as read-only bits. Writeable bits are ignored, and set at runtime based on the phar.readonly INI variable. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::chmod(int $perms): void
// ===== CODE
$pharfileinfo->chmod(

$perms // int perms - permissions (see chmod())

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::chmod() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar('brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['file.sh'] = '#!/usr/local/lib/php
//     < ?php echo "hi"; ? >';
//     // set executable bit
//     $p['file.sh']->chmod(0555);
//     var_dump($p['file.sh']->isExecutable());
// } catch (Exception $e) {
//     echo 'Could not create/modify phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.chmod.php
// ========== PHARFILEINFO_CHMOD - END

// SYNTAX:
// void PharFileInfo::chmod(int $perms)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_CHMOD
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_COMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Compresses the current Phar entry with either zlib or bzip2 compression.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::compress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_compress($pharfileinfo, $compression)
{
$return_pharfileinfo_compress = false;

// ========== PHARFILEINFO_COMPRESS - BEGIN
// ===== ABOUT
// Compresses the current Phar entry with either zlib or bzip2 compression
// ===== DESCRIPTION
// This method compresses the file inside the Phar archive using either bzip2 compression or zlib compression. The bzip2 or zlib extension must be enabled to take advantage of this feature. In addition, if the file is already compressed, the respective extension must be enabled in order to decompress the file. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharFileInfo::compress(int $compression): bool
// ===== CODE
$return_pharfileinfo_compress = $pharfileinfo->compress(

$compression // int compression - Compression must be Phar::GZ or Phar::BZ2.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, or if the bzip2/zlib extension is not available.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::compress() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $file = $p['myfile.txt'];
//     var_dump($file->isCompressed(Phar::BZ2));
//     $p['myfile.txt']->compress(Phar::BZ2);
//     var_dump($file->isCompressed(Phar::BZ2));
// } catch (Exception $e) {
//     echo 'Create/modify operations on my.phar failed: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.compress.php
// ========== PHARFILEINFO_COMPRESS - END

// SYNTAX:
// bool PharFileInfo::compress(int $compression)

return $return_pharfileinfo_compress; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_COMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Construct a Phar entry object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_construct($filename)
{
$return_pharfileinfo_construct = null;

// ========== PHARFILEINFO_CONSTRUCT - BEGIN
// ===== ABOUT
// Construct a Phar entry object
// ===== DESCRIPTION
// This should not be called directly. Instead, a PharFileInfo object is initialized by calling Phar::offsetGet() through array access.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::__construct(string $filename)
// ===== CODE
$return_pharfileinfo_construct = new PharFileInfo(

$filename // string filename - The full url to retrieve a file. If you wish to retrieve the information for the file my/file.php from the phar boo.phar, the entry should be phar://boo.phar/my/file.php.

); // Return
// PharFileInfo
// 
// Errors/Exceptions
// Throws BadMethodCallException if __construct() is called twice. Throws UnexpectedValueException if the phar URL requested is malformed, the requested phar cannot be opened, or the file can't be found within the phar.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::__construct() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['testfile.txt'] = "hi\nthere\ndude";
//     $file = $p['testfile.txt'];
//     foreach ($file as $line => $text) {
//         echo "line number $line: $text";
//     }
//     // this also works
//     $file = new PharFileInfo('phar:///path/to/my.phar/testfile.txt');
//     foreach ($file as $line => $text) {
//         echo "line number $line: $text";
//     }
// } catch (Exception $e) {
//     echo 'Phar operations failed: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// line number 1: hi
// line number 2: there
// line number 3: dude
// line number 1: hi
// line number 2: there
// line number 3: dude
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.construct.php
// ========== PHARFILEINFO_CONSTRUCT - END

// SYNTAX:
// PharFileInfo PharFileInfo::__construct(string $filename)

return $return_pharfileinfo_construct; // PharFileInfo
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DECOMPRESS
// ============================== PUBLIC
// ============================== ABOUT
// Decompresses the current Phar entry within the phar.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_2_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::decompress() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_decompress($pharfileinfo)
{
$return_pharfileinfo_decompress = false;

// ========== PHARFILEINFO_DECOMPRESS - BEGIN
// ===== ABOUT
// Decompresses the current Phar entry within the phar
// ===== DESCRIPTION
// This method decompresses the file inside the Phar archive. Depending on how the file is compressed, the bzip2 or zlib extensions must be enabled to take advantage of this feature. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_2_0_0
// ===== SYNTAX
// public PharFileInfo::decompress(): bool
// ===== CODE
$return_pharfileinfo_decompress = $pharfileinfo->decompress(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the phar.readonly INI variable is on, or if the bzip2/zlib extension is not available.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::decompress() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $file = $p['myfile.txt'];
//     $file->compress(Phar::GZ);
//     var_dump($file->isCompressed());
//     $p['myfile.txt']->decompress();
//     var_dump($file->isCompressed());
// } catch (Exception $e) {
//     echo 'Create/modify failed for my.phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// int(4096)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.decompress.php
// ========== PHARFILEINFO_DECOMPRESS - END

// SYNTAX:
// bool PharFileInfo::decompress()

return $return_pharfileinfo_decompress; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DECOMPRESS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DELMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Deletes the metadata of the entry.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::delMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ============================== CODE
function php_compression_phar_pharfileinfo_delmetadata($pharfileinfo)
{
$return_pharfileinfo_delmetadata = false;

// ========== PHARFILEINFO_DELMETADATA - BEGIN
// ===== ABOUT
// Deletes the metadata of the entry
// ===== DESCRIPTION
// Deletes the metadata of the entry, if any.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ===== SYNTAX
// public PharFileInfo::delMetadata(): bool
// ===== CODE
$return_pharfileinfo_delmetadata = $pharfileinfo->delMetadata(

// No parameters.

); // Return Values
// Returns true if successful, false if the entry had no metadata. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.
// 
// Errors/Exceptions
// Throws PharException if errors occurred while flushing changes to disk, and BadMethodCallException if write access is disabled.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::delMetaData() example
// [php]
// try {
//     $a = new Phar('myphar.phar');
//     $a['hi'] = 'hi';
//     var_dump($a['hi']->delMetadata());
//     $a['hi']->setMetadata('there');
//     var_dump($a['hi']->delMetadata());
//     var_dump($a['hi']->delMetadata());
// } catch (Exception $e) {
//     // handle errors
// }
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.delmetadata.php
// ========== PHARFILEINFO_DELMETADATA - END

// SYNTAX:
// bool PharFileInfo::delMetadata()

return $return_pharfileinfo_delmetadata; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DELMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DESTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Destructs a Phar entry object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::__destruct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_destruct($pharfileinfo)
{

// ========== PHARFILEINFO_DESTRUCT - BEGIN
// ===== ABOUT
// Destructs a Phar entry object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::__destruct()
// ===== CODE
$pharfileinfo->__destruct(

// This function has no parameters.

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.destruct.php
// ========== PHARFILEINFO_DESTRUCT - END

// SYNTAX:
// void PharFileInfo::__destruct()

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_DESTRUCT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCRC32
// ============================== PUBLIC
// ============================== ABOUT
// Returns CRC32 code or throws an exception if CRC has not been verified.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::getCRC32() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_getcrc32($pharfileinfo)
{
$return_pharfileinfo_getcrc32 = 0;

// ========== PHARFILEINFO_GETCRC32 - BEGIN
// ===== ABOUT
// Returns CRC32 code or throws an exception if CRC has not been verified
// ===== DESCRIPTION
// This returns the crc32() checksum of the file within the Phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::getCRC32(): int
// ===== CODE
$return_pharfileinfo_getcrc32 = $pharfileinfo->getCRC32(

// This function has no parameters.

); // Return Values
// The crc32() checksum of the file within the Phar archive.
// 
// Errors/Exceptions
// Throws BadMethodCallException if the file has not yet had its CRC32 verified. This should be impossible with normal use, as the CRC is verified upon opening the file for reading or writing.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::getCRC32() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $file = $p['myfile.txt'];
//     echo $file->getCRC32();
// } catch (Exception $e) {
//     echo 'Write operations on my.phar.phar failed: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// 3633523372
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.getcrc32.php
// ========== PHARFILEINFO_GETCRC32 - END

// SYNTAX:
// int PharFileInfo::getCRC32()

return $return_pharfileinfo_getcrc32; // int
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCRC32
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCOMPRESSEDSIZE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the actual size of the file (with compression) inside the Phar archive.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::getCompressedSize() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_getcompressedsize($pharfileinfo)
{
$return_pharfileinfo_getcompressedsize = 0;

// ========== PHARFILEINFO_GETCOMPRESSEDSIZE - BEGIN
// ===== ABOUT
// Returns the actual size of the file (with compression) inside the Phar archive
// ===== DESCRIPTION
// This returns the size of the file within the Phar archive. Uncompressed files will return the same value for getCompressedSize as they will with filesize()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::getCompressedSize(): int
// ===== CODE
$return_pharfileinfo_getcompressedsize = $pharfileinfo->getCompressedSize(

// This function has no parameters.

); // Return Values
// The size in bytes of the file within the Phar archive on disk.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::getCompressedSize() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $file = $p['myfile.txt'];
//     echo $file->getCompressedSize();
// } catch (Exception $e) {
//     echo 'Write operations failed on my.phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// 2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.getcompressedsize.php
// ========== PHARFILEINFO_GETCOMPRESSEDSIZE - END

// SYNTAX:
// int PharFileInfo::getCompressedSize()

return $return_pharfileinfo_getcompressedsize; // int
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCOMPRESSEDSIZE
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCONTENT
// ============================== PUBLIC
// ============================== ABOUT
// Get the complete file contents of the entry.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// PharFileInfo::getContent() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_compression_phar_pharfileinfo_getcontent($pharfileinfo)
{
$return_pharfileinfo_getcontent = null;

// ========== PHARFILEINFO_GETCONTENT - BEGIN
// ===== ABOUT
// Get the complete file contents of the entry
// ===== DESCRIPTION
// This function behaves like file_get_contents() but for Phar.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public PharFileInfo::getContent(): string
// ===== CODE
$return_pharfileinfo_getcontent = $pharfileinfo->getContent(

// This function has no parameters.

); // Return Values
// Returns the file contents.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.getcontent.php
// ========== PHARFILEINFO_GETCONTENT - END

// SYNTAX:
// string PharFileInfo::getContent()

return $return_pharfileinfo_getcontent; // string
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETCONTENT
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Returns file-specific meta-data saved with a file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::getMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_getmetadata($pharfileinfo)
{
$return_pharfileinfo_getmetadata = null;

// ========== PHARFILEINFO_GETMETADATA - BEGIN
// ===== ABOUT
// Returns file-specific meta-data saved with a file
// ===== DESCRIPTION
// Return meta-data that was saved in the Phar archive's manifest for this file.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::getMetadata(array $unserializeOptions = []): mixed
// ===== CODE
$return_pharfileinfo_getmetadata = $pharfileinfo->getMetadata(

); // Return Values
// any PHP variable that can be serialized and is stored as meta-data for the file, or null if no meta-data is stored.
// 
// Changelog
// Version - Description
// 8.0.0   - The parameter unserializeOptions has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::getMetadata() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['file.txt'] = 'hello';
//     $p['file.txt']->setMetadata(array('user' => 'bill', 'mime-type' => 'text/plain'));
//     var_dump($p['file.txt']->getMetadata());
// } catch (Exception $e) {
//     echo 'Could not create/modify brandnewphar.phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// array(2) {
//   ["user"]=>
//   string(4) "bill"
//   ["mime-type"]=>
//   string(10) "text/plain"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.getmetadata.php
// ========== PHARFILEINFO_GETMETADATA - END

// SYNTAX:
// mixed PharFileInfo::getMetadata()

return $return_pharfileinfo_getmetadata; // mixed
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETPHARFLAGS
// ============================== PUBLIC
// ============================== ABOUT
// Returns the Phar file entry flags.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::getPharFlags() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_getpharflags($pharfileinfo)
{
$return_pharfileinfo_getpharflags = 0;

// ========== PHARFILEINFO_GETPHARFLAGS - BEGIN
// ===== ABOUT
// Returns the Phar file entry flags
// ===== DESCRIPTION
// This returns the flags set in the manifest for a Phar. This will always return 0 in the current implementation.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::getPharFlags(): int
// ===== CODE
$return_pharfileinfo_getpharflags = $pharfileinfo->getPharFlags(

// This function has no parameters.

); // Return Values
// The Phar flags (always 0 in the current implementation)
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::getPharFlags() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $file = $p['myfile.txt'];
//     var_dump($file->getPharFlags());
// } catch (Exception $e) {
//     echo 'Could not create/modify my.phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// int(0)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.getpharflags.php
// ========== PHARFILEINFO_GETPHARFLAGS - END

// SYNTAX:
// int PharFileInfo::getPharFlags()

return $return_pharfileinfo_getpharflags; // int
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_GETPHARFLAGS
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_HASMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Returns the metadata of the entry.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_2_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::hasMetadata() - PHP_5 >= PHP_5_3_0, PHP 7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ============================== CODE
function php_compression_phar_pharfileinfo_hasmetadata($pharfileinfo)
{
$return_pharfileinfo_hasmetadata = false;

// ========== PHARFILEINFO_HASMETADATA - BEGIN
// ===== ABOUT
// Returns the metadata of the entry
// ===== DESCRIPTION
// Returns the metadata of a file within a phar archive.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP 7, PHP_8, PECL_phar >= PECL_phar_1_2_0
// ===== SYNTAX
// public PharFileInfo::hasMetadata(): bool
// ===== CODE
$return_pharfileinfo_hasmetadata = $pharfileinfo->hasMetadata(

// No parameters.

); // Return Values
// Returns false if no metadata is set or is null, true if metadata is not null
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.hasmetadata.php
// ========== PHARFILEINFO_HASMETADATA - END

// SYNTAX:
// bool PharFileInfo::hasMetadata()

return $return_pharfileinfo_hasmetadata; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_HASMETADATA
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_ISCRCCHECKED
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether file entry has had its CRC verified.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::isCRCChecked() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_iscrcchecked($pharfileinfo)
{
$return_pharfileinfo_iscrcchecked = false;

// ========== PHARFILEINFO_ISCRCCHECKED - BEGIN
// ===== ABOUT
// Returns whether file entry has had its CRC verified
// ===== DESCRIPTION
// This returns whether a file within a Phar archive has had its CRC verified.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::isCRCChecked(): bool
// ===== CODE
$return_pharfileinfo_iscrcchecked = $pharfileinfo->isCRCChecked(

// This function has no parameters.

); // Return Values
// true if the file has had its CRC verified, false if not.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::isCRCChecked() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $file = $p['myfile.txt'];
//     var_dump($file->isCRCChecked());
// } catch (Exception $e) {
//     echo 'Create/modify operations failed on my.phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.iscrcchecked.php
// ========== PHARFILEINFO_ISCRCCHECKED - END

// SYNTAX:
// bool PharFileInfo::isCRCChecked()

return $return_pharfileinfo_iscrcchecked; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_ISCRCCHECKED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_ISCOMPRESSED
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether the entry is compressed.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::isCompressed() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_iscompressed($pharfileinfo, $compression = null)
{
$return_pharfileinfo_iscompressed = false;

// ========== PHARFILEINFO_ISCOMPRESSED - BEGIN
// ===== ABOUT
// Returns whether the entry is compressed
// ===== DESCRIPTION
// This returns whether a file is compressed within a Phar archive with either Gzip or Bzip2 compression.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::isCompressed(?int $compression = null): bool
// ===== CODE
$return_pharfileinfo_iscompressed = $pharfileinfo->isCompressed(

$compression // int compression - One of Phar::GZ or Phar::BZ2, defaults to any compression.

); // Return Values
// true if the file is compressed within the Phar archive, false if not.
// 
// Changelog
// Version - Description
// 8.0.0   - compression is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::isCompressed() example
// [php]
// try {
//     $p = new Phar('/path/to/my.phar', 0, 'my.phar');
//     $p['myfile.txt'] = 'hi';
//     $p['myfile2.txt'] = 'hi';
//     $p['myfile2.txt']->setCompressedGZ();
//     $file = $p['myfile.txt'];
//     $file2 = $p['myfile2.txt'];
//     var_dump($file->isCompressed());
//     var_dump($file2->isCompressed());
// } catch (Exception $e) {
//     echo 'Create/modify on phar my.phar failed: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.iscompressed.php
// ========== PHARFILEINFO_ISCOMPRESSED - END

// SYNTAX:
// bool PharFileInfo::isCompressed(int $compression = null)

return $return_pharfileinfo_iscompressed; // bool
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_ISCOMPRESSED
// ==============================


// ============================== BEGIN
// PHP_COMPRESSION_PHAR_PHARFILEINFO_SETMETADATA
// ============================== PUBLIC
// ============================== ABOUT
// Sets file-specific meta-data saved with a file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_phar_1_0_0
// ============================== USING SUBCLASSES (1)
// PharFileInfo::setMetadata() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ============================== CODE
function php_compression_phar_pharfileinfo_setmetadata($pharfileinfo, $metadata)
{

// ========== PHARFILEINFO_SETMETADATA - BEGIN
// ===== ABOUT
// Sets file-specific meta-data saved with a file
// ===== DESCRIPTION
// PharFileInfo::setMetadata() should only be used to store customized data in a file that cannot be represented with existing information stored with a file. Meta-data can significantly slow down the performance of loading a phar archive if the data is large, or if there are many files containing meta-data. It is important to note that file permissions are natively supported inside a phar; it is possible to set them with the PharFileInfo::chmod() method. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.
// Some possible uses for meta-data include passing a user/group that should be set when a file is extracted from the phar to disk. Other uses could include explicitly specifying a MIME type to return. However, any useful data that describes a file, but should not be contained inside of it may be stored.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8, PECL_phar >= PECL_phar_1_0_0
// ===== SYNTAX
// public PharFileInfo::setMetadata(mixed $metadata): void
// ===== CODE
$pharfileinfo->setMetadata(

$metadata // mixed metadata - Any PHP variable containing information to store alongside a file

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 A PharFileInfo::setMetadata() example
// [php]
// // make sure it doesn't exist
// @unlink('brandnewphar.phar');
// try {
//     $p = new Phar(dirname(__FILE__) . '/brandnewphar.phar', 0, 'brandnewphar.phar');
//     $p['file.txt'] = 'hello';
//     $p['file.txt']->setMetadata(array('user' => 'bill', 'mime-type' => 'text/plain'));
//     var_dump($p['file.txt']->getMetaData());
// } catch (Exception $e) {
//     echo 'Could not create/modify phar: ', $e;
// }
// [/php]
// The above example will output:
// [result]
// array(2) {
//   ["user"]=>
//   string(4) "bill"
//   ["mime-type"]=>
//   string(10) "text/plain"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-16)
// URL: https://www.php.net/manual/en/pharfileinfo.setmetadata.php
// ========== PHARFILEINFO_SETMETADATA - END

// SYNTAX:
// void PharFileInfo::setMetadata(mixed $metadata)

// Return: void
}
// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO_SETMETADATA
// ==============================


// ============================== END
// PHP_COMPRESSION_PHAR_PHARFILEINFO
// ==============================


// ============================== END
//      PHP_COMPRESSION_PHAR      
// ==============================
?>