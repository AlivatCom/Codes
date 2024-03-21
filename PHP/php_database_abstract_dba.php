<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_ABSTRACT_DBA - BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_CLOSE - void php_database_abstract_dba_dba_close(resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_DELETE - bool php_database_abstract_dba_dba_delete(string|array $key, resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_EXISTS - bool php_database_abstract_dba_dba_exists(string|array $key, resource $dba)
// OFFLINE | PHP_DATABASE_ABSTRACT_DBA_DBA_FETCH - string php_database_abstract_dba_dba_fetch(string|array $key, int $skip, resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_FIRSTKEY - string|false php_database_abstract_dba_dba_firstkey(resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_HANDLERS - array php_database_abstract_dba_dba_handlers(bool $full_info = false)
// PHP_DATABASE_ABSTRACT_DBA_DBA_INSERT - bool php_database_abstract_dba_dba_insert(string|array $key, string $value, resource $dba)
// OFFLINE | PHP_DATABASE_ABSTRACT_DBA_DBA_KEY_SPLIT - array|false php_database_abstract_dba_dba_key_split(string|false|null $key)
// PHP_DATABASE_ABSTRACT_DBA_DBA_LIST - array php_database_abstract_dba_dba_list()
// PHP_DATABASE_ABSTRACT_DBA_DBA_NEXTKEY - string|false php_database_abstract_dba_dba_nextkey(resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_OPEN - resource|false php_database_abstract_dba_dba_open(string $path, string $mode, string $handler = null, int $permission = 0644, int $map_size = 0, int $flags = null)
// PHP_DATABASE_ABSTRACT_DBA_DBA_OPTIMIZE - bool php_database_abstract_dba_dba_optimize(resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_POPEN - resource|false php_database_abstract_dba_dba_popen(string $path, string $mode, string $handler = null, int $permission = 0644, int $map_size = 0, int $flags = null)
// PHP_DATABASE_ABSTRACT_DBA_DBA_REPLACE - bool php_database_abstract_dba_dba_replace(string|array $key, string $value, resource $dba)
// PHP_DATABASE_ABSTRACT_DBA_DBA_SYNC - bool php_database_abstract_dba_dba_sync(resource $dba)
// PHP_DATABASE_ABSTRACT_DBA - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// BUNDLED (By using the --enable-dba=shared configuration option you can build a dynamic loadable module to enable PHP for basic support of dbm-style databases. You also have to add support for at least one of the following handlers by specifying the --with-XXXX or --enable-XXXX configure switch to your PHP configure line.)
// ============================== USING FUNCTIONS (15)
// dba_close() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_delete() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_exists() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | dba_fetch() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_firstkey() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_handlers() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// dba_insert() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | dba_key_split() - PHP_5, PHP_7, PHP_8
// dba_list() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// dba_nextkey() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_open() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_optimize() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_popen() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_replace() - PHP_4, PHP_5, PHP_7, PHP_8
// dba_sync() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (8)
// void
// resource
// bool
// string
// array
// int
// false
// null
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_DATABASE_ABSTRACT_DBA   
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Abstraction Layers / DBA - Database (dbm-style) Abstraction Layer
// URL: https://www.php.net/manual/en/book.dba.php
// ============================== DESCRIPTION
// DATABASE_DBM_STYLE_ABSTRACTION_LAYER
// 
// DATABASE_DBM_STYLE_ABSTRACTION_LAYER - BEGIN
// Database (dbm-style) Abstraction Layer
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// DBA_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// These functions build the foundation for accessing Berkeley DB style databases.
// This is a general abstraction layer for several file-based databases. As such, functionality is limited to a common subset of features supported by modern databases such as > Oracle Berkeley DB.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/intro.dba.php
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
// The behaviour of various aspects depends on the implementation of the underlying database. Functions such as dba_optimize() and dba_sync() will do what they promise for one database and will do nothing for others. You have to download and install supported dba-Handlers.
// 
// List of DBA handlers
// Handler  - Notes
// dbm      - Dbm is the oldest (original) type of Berkeley DB style databases. You should avoid it, if possible. We do not support the compatibility functions built into DB2 and gdbm, because they are only compatible on the source code level, but cannot handle the original dbm format.
// ndbm     - Ndbm is a newer type and more flexible than dbm. It still has most of the arbitrary limits of dbm (therefore it is deprecated).
// gdbm     - Gdbm is the > GNU database manager.
// db2      - DB2 is for > Oracle Berkeley DB 2. It is described as "a programmatic toolkit that provides high-performance built-in database support for both standalone and client/server applications."
// db3      - DB3 is for > Oracle Berkeley DB 3.
// db4      - DB4 is for > Oracle Berkeley DB 4 or 5. This option can be used with BDB 5 as of PHP 5.3.3.
// cdb      - Cdb is "a fast, reliable, lightweight package for creating and reading constant databases." It is from the author of qmail and can be found at > http://cr.yp.to/cdb.html. Since it is constant, we support only reading operations. We support writing (not updating) through the internal cdb library.
// cdb_make - We support creation (not updating) of cdb files when the bundled cdb library is used.
// flatfile - This is available for compatibility with the deprecated dbm extension only and should be avoided. However you may use this where files were created in this format. That happens when configure could not find any external library.
// inifile  - This is available to be able to modify php.ini files from within PHP scripts. When working with ini files you can pass arrays of the form array(0=>group,1=>value_name) or strings of the form "[group]value_name" where group is optional. As the functions dba_firstkey() and dba_nextkey() return string representations of the key there is the function dba_key_split() which allows to convert the string keys into array keys without loosing false.
// qdbm     - The qdbm library can be downloaded from > http://fallabs.com/qdbm/index.html.
// tcadb    - The Tokyo Cabinet library can be downloaded from > http://fallabs.com/tokyocabinet/.
// lmdb     - This is available since PHP 7.2.0. The Lightning Memory-Mapped Database library can be downloaded from > https://symas.com/lmdb/.
// 
// When invoking the dba_open() or dba_popen() functions, one of the handler names must be supplied as an argument. The actually available list of handlers is displayed by invoking phpinfo() or dba_handlers().
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// By using the --enable-dba=shared configuration option you can build a dynamic loadable module to enable PHP for basic support of dbm-style databases. You also have to add support for at least one of the following handlers by specifying the --with-XXXX or --enable-XXXX configure switch to your PHP configure line.
// Warning: After configuring and compiling PHP you must execute the following test from commandline: php run-tests.php ext/dba. This shows whether your combination of handlers works. Most problematic are dbm and ndbm which conflict with many installations. The reason for this is that on several systems these libraries are part of more than one other library. The configuration test only prevents you from configuring malfunctioning single handlers but not combinations.
// 
// Supported DBA handlers
// Handler  - Configure Switch
// dbm      - To enable support for dbm add --with-dbm[=DIR].
// Note: dbm normally is a wrapper which often results in failures. This means you should only use dbm if you are sure it works and if you really need this format.
// ndbm     - To enable support for ndbm add --with-ndbm[=DIR].
// Note: ndbm normally is a wrapper which often results in failures. This means you should only use ndbm if you are sure it works and if you really need this format.
// gdbm     - To enable support for gdbm add --with-gdbm[=DIR].
// db2      - To enable support for Oracle Berkeley DB 2 add --with-db2[=DIR].
// Note: db2 conflicts with db3 and db4.
// db3      - To enable support for Oracle Berkeley DB 3 add --with-db3[=DIR].
// Note:db3 conflicts with db2 and db4.
// db4      - To enable support for Oracle Berkeley DB 4 or 5 add --with-db4[=DIR].
// Note:db4 conflicts with db2 and db3.
// Note: The db libraries with versions 4.1 through 4.1.24 cannot be used in any PHP version.
// Support for BDB 5 was added in PHP 5.3.3.
// cdb      - To enable support for cdb add --with-cdb[=DIR].
// Note: You can omit DIR to use the bundled cdb library that adds the cdb_make handler which allows creation of cdb files and allows to access cdb files on the network using PHP's streams.
// flatfile - To enable support for flatfile add --enable-flatfile. Before PHP 5.2.1 the --with-flatfile had to be used instead.
// Note: This was added to add compatibility with deprecated dbm extension. Use this handler only when you cannot install one of the libraries required by the other handlers and when you cannot use bundled cdb handler.
// inifile  - To enable support for inifile add --enable-inifile. Before PHP 5.2.1 the --with-inifile had to be used instead.
// Note: This was added to allow to read and set microsoft style .ini files (like the php.ini file).
// qdbm     - To enable support for qdbm add --with-qdbm[=DIR].
// Note: qdbm conflicts with dbm and gdbm.
// Note: The qdbm library can be downloaded from > http://fallabs.com/qdbm/index.html.
// tcadb    - To enable support for Tokyo Cabinet add --with-tcadb[=DIR].
// Note: The Tokyo Cabinet library can be downloaded from > http://fallabs.com/tokyocabinet/.
// lmdb     - To enable support for the Lightning Memory-Mapped Database add --with-lmdb[=DIR].
// Note: This was added in PHP 7.2.0. The Lightning Memory-Mapped Database library can be downloaded from > https://symas.com/lmdb/.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// DBA Configure Options
// Name                | Default     | Changeable | Changelog
// dba.default_handler | DBA_DEFAULT | INI_ALL    |
// 
// Here's a short explanation of the configuration directives.
// dba.default_handler string - The name of the default handler
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// The functions dba_open() and dba_popen() return a handle to the specified database file to access which is used by all other dba-function calls.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// DBA_LMDB_USE_SUB_DIR (int) - LMDB Driver flag to allow the creation of a subdirectory for the database files. Available as of PHP 8.2.0.
// DBA_LMDB_NO_SUB_DIR (int)  - LMDB Driver flag to disallow the creation of a subdirectory for the database files. Available as of PHP 8.2.0.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// BASIC_USAGE
// 
// BASIC_USAGE - BEGIN
// Basic usage
// 
// [example]
// Example #1 DBA example
// [php]
// 
// $id = dba_open("/tmp/test.db", "n", "db2");
// 
// if (!$id) {
//     echo "dba_open failed\n";
//     exit;
// }
// 
// dba_replace("key", "This is an example!", $id);
// 
// if (dba_exists("key", $id)) {
//     echo dba_fetch("key", $id);
//     dba_delete("key", $id);
// }
// 
// dba_close($id);
// [/php]
// DBA is binary safe and does not have any arbitrary limits. However, it inherits all limits set by the underlying database implementation.
// All file-based databases must provide a way of setting the file mode of a new created database, if that is possible at all. The file mode is commonly passed as the fourth argument to dba_open() or dba_popen().
// You can access all entries of a database in a linear way by using the dba_firstkey() and dba_nextkey() functions. You may not change the database while traversing it.
// [/example]
// [example]
// Example #2 Traversing a database
// [php]
// 
// // ...open database...
// 
// $key = dba_firstkey($id);
// 
// while ($key !== false) {
//     if (true) {          // remember the key to perform some action later
//         $handle_later[] = $key;
//     }
//     $key = dba_nextkey($id);
// }
// 
// foreach ($handle_later as $val) {
//     dba_delete($val, $id);
// }
// 
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.example.php
// BASIC_USAGE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/dba.examples.php
// EXAMPLES - END
// 
// DBA_FUNCTIONS - BEGIN
// DBA Functions
// 
// Table of Contents
// * dba_close     - Close a DBA database
// * dba_delete    - Delete DBA entry specified by key
// * dba_exists    - Check whether key exists
// * dba_fetch     - Fetch data specified by key
// * dba_firstkey  - Fetch first key
// * dba_handlers  - List all the handlers available
// * dba_insert    - Insert entry
// * dba_key_split - Splits a key in string representation into array representation
// * dba_list      - List all open database files
// * dba_nextkey   - Fetch next key
// * dba_open      - Open database
// * dba_optimize  - Optimize database
// * dba_popen     - Open database persistently
// * dba_replace   - Replace or insert entry
// * dba_sync      - Synchronize database
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/ref.dba.php
// DBA_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/book.dba.php
// DATABASE_DBM_STYLE_ABSTRACTION_LAYER - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close a DBA database.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_close() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_close($dba)
{

// ========== DBA_CLOSE - BEGIN
// ===== ABOUT
// Close a DBA database
// ===== DESCRIPTION
// dba_close() closes the established database and frees all resources of the specified database handle.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_close(resource $dba): void
// ===== CODE
dba_close(

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-close.php
// ========== DBA_CLOSE - END

// SYNTAX:
// void dba_close(resource $dba)

// return: void
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_DELETE
// ============================== PUBLIC
// ============================== ABOUT
// Delete DBA entry specified by key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_delete() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_delete($key, $dba)
{
$return_dba_delete = false;

// ========== DBA_DELETE - BEGIN
// ===== ABOUT
// Delete DBA entry specified by key
// ===== DESCRIPTION
// dba_delete() deletes the specified entry from the database.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_delete(string|array $key, resource $dba): bool
// ===== CODE
$return_dba_delete = dba_delete(

$key, // string|array key - The key of the entry which is deleted.

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-delete.php
// ========== DBA_DELETE - END

// SYNTAX:
// bool dba_delete(string|array $key, resource $dba)

return $return_dba_delete; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_DELETE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_EXISTS
// ============================== PUBLIC
// ============================== ABOUT
// Check whether key exists.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_exists() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_exists($key, $dba)
{
$return_dba_exists = false;

// ========== DBA_EXISTS - BEGIN
// ===== ABOUT
// Check whether key exists
// ===== DESCRIPTION
// dba_exists() checks whether the specified key exists in the database.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_exists(string|array $key, resource $dba): bool
// ===== CODE
$return_dba_exists = dba_exists(

$key, // string|array key - The key the check is performed for.

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns true if the key exists, false otherwise.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-exists.php
// ========== DBA_EXISTS - END

// SYNTAX:
// bool dba_exists(string|array $key, resource $dba)

return $return_dba_exists; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_EXISTS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_FETCH
// ============================== OFFLINE
// ============================== ABOUT
// Fetch data specified by key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_fetch() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_database_abstract_dba_dba_fetch($key, $skip, $dba)
{
$return_dba_fetch = null;

// ========== DBA_FETCH - BEGIN
// ===== ABOUT
// Fetch data specified by key
// ===== DESCRIPTION
// dba_fetch() fetches the data specified by key from the database specified with dba.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_fetch(string|array $key, resource $dba, int $skip = 0): string|false
// 
// Overloaded signature deprecated as of 8.3.0:
// dba_fetch(string|array $key, int $skip, resource $dba): string
// ===== CODE
$return_dba_fetch = dba_fetch(

$key, // string|array key - The key the data is specified by.
// Note: When working with inifiles this function accepts arrays as keys where index 0 is the group and index 1 is the value name. See: dba_key_split().

$skip, // int skip

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

// int skip - The number of key-value pairs to ignore when using cdb databases. This value is ignored for all other databases which do not support multiple keys with the same name.

); // Return Values
// Returns the associated string if the key/data pair is found, false otherwise.
// 
// Changelog
// Version - Description
// 8.3.0   - Calling dba_fetch() with dba as the 3rd argument is now deprecated.
// 8.2.0   - dba_fetch()'s optional skip argument is now at the end in line with PHP userland semantics. The previously overloaded signature is still accepted but discouraged.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-fetch.php
// ========== DBA_FETCH - END

// SYNTAX:
// string dba_fetch(string|array $key, int $skip, resource $dba)

// * PHP 8.2.0
// string|false dba_fetch(string|array $key, resource $dba, int $skip = 0)

return $return_dba_fetch; // string
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_FETCH
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_FIRSTKEY
// ============================== PUBLIC
// ============================== ABOUT
// Fetch first key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_firstkey() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_firstkey($dba)
{
$return_dba_firstkey = false;

// ========== DBA_FIRSTKEY - BEGIN
// ===== ABOUT
// Fetch first key
// ===== DESCRIPTION
// dba_firstkey() returns the first key of the database and resets the internal key pointer. This permits a linear search through the whole database.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_firstkey(resource $dba): string|false
// ===== CODE
$return_dba_firstkey = dba_firstkey(

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns the key on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-firstkey.php
// ========== DBA_FIRSTKEY - END

// SYNTAX:
// string|false dba_firstkey(resource $dba)

return $return_dba_firstkey; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_FIRSTKEY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_HANDLERS
// ============================== PUBLIC
// ============================== ABOUT
// List all the handlers available.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_handlers() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_handlers($full_info = false)
{
$return_dba_handlers = null;

// ========== DBA_HANDLERS - BEGIN
// ===== ABOUT
// List all the handlers available
// ===== DESCRIPTION
// dba_handlers() list all the handlers supported by this extension.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_handlers(bool $full_info = false): array
// ===== CODE
$return_dba_handlers = dba_handlers(

$full_info // bool full_info - Turns on/off full information display in the result.

); // Return Values
// Returns an array of database handlers. If full_info is set to true, the array will be associative with the handlers names as keys, and their version information as value. Otherwise, the result will be an indexed array of handlers names.
// Note: When the internal cdb library is used you will see cdb and cdb_make.
// 
// [examples]
// Examples
// [example]
// Example #1 dba_handlers() Example
// [php]
// 
// echo "Available DBA handlers:\n";
// foreach (dba_handlers(true) as $handler_name => $handler_version) {
//   // clean the versions
//   $handler_version = str_replace('$', '', $handler_version);
//   echo " - $handler_name: $handler_version\n";
// }
// 
// [/php]
// The above example will output something similar to:
// [result]
// Available DBA handlers:
//  - cdb: 0.75, Revision: 1.3.2.3 
//  - cdb_make: 0.75, Revision: 1.2.2.4 
//  - db2: Sleepycat Software: Berkeley DB 2.7.7: (08/20/99)
//  - inifile: 1.0, Revision: 1.6.2.3 
//  - flatfile: 1.0, Revision: 1.5.2.4 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-handlers.php
// ========== DBA_HANDLERS - END

// SYNTAX:
// array dba_handlers(bool $full_info = false)

return $return_dba_handlers; // array
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_HANDLERS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_INSERT
// ============================== PUBLIC
// ============================== ABOUT
// Insert entry.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_insert() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_insert($key, $value, $dba)
{
$return_dba_insert = false;

// ========== DBA_INSERT - BEGIN
// ===== ABOUT
// Insert entry
// ===== DESCRIPTION
// dba_insert() inserts the entry described with key and value into the database.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_insert(string|array $key, string $value, resource $dba): bool
// ===== CODE
$return_dba_insert = dba_insert(

$key, // string|array key - The key of the entry to be inserted. If this key already exist in the database, this function will fail. Use dba_replace() if you need to replace an existent key.

$value, // string value - The value to be inserted.

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-insert.php
// ========== DBA_INSERT - END

// SYNTAX:
// bool dba_insert(string|array $key, string $value, resource $dba)

return $return_dba_insert; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_INSERT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_KEY_SPLIT
// ============================== OFFLINE
// ============================== ABOUT
// Splits a key in string representation into array representation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_key_split() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_database_abstract_dba_dba_key_split($key)
{
$return_dba_key_split = false;

// ========== DBA_KEY_SPLIT - BEGIN
// ===== ABOUT
// Splits a key in string representation into array representation
// ===== DESCRIPTION
// dba_key_split() splits a key (string representation) into an array representation.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_key_split(string|false|null $key): array|false
// ===== CODE
$return_dba_key_split = dba_key_split(

$key // string|false|null key - The key in string representation.

); // Return Values
// Returns an array of the form array(0 => group, 1 => value_name). This function will return false if key is null or false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-key-split.php
// ========== DBA_KEY_SPLIT - END

// SYNTAX:
// array|false dba_key_split(string|false|null $key)

return $return_dba_key_split; // array|false
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_KEY_SPLIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_LIST
// ============================== PUBLIC
// ============================== ABOUT
// List all open database files.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_list() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_list()
{
$return_dba_list = null;

// ========== DBA_LIST - BEGIN
// ===== ABOUT
// List all open database files
// ===== DESCRIPTION
// dba_list() list all open database files.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_list(): array
// ===== CODE
$return_dba_list = dba_list(

// This function has no parameters.

); // Return Values
// An associative array, in the form resourceid => filename.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-list.php
// ========== DBA_LIST - END

// SYNTAX:
// array dba_list()

return $return_dba_list; // array
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_LIST
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_NEXTKEY
// ============================== PUBLIC
// ============================== ABOUT
// Fetch next key.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_nextkey() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_nextkey($dba)
{
$return_dba_nextkey = false;

// ========== DBA_NEXTKEY - BEGIN
// ===== ABOUT
// Fetch next key
// ===== DESCRIPTION
// dba_nextkey() returns the next key of the database and advances the internal key pointer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_nextkey(resource $dba): string|false
// ===== CODE
$return_dba_nextkey = dba_nextkey(

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns the key on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-nextkey.php
// ========== DBA_NEXTKEY - END

// SYNTAX:
// string|false dba_nextkey(resource $dba)

return $return_dba_nextkey; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_NEXTKEY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Open database.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_open() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_open($path, $mode, $handler = null, $permission = 0644, $map_size = 0, $flags = null)
{
$return_dba_open = false;

// ========== DBA_OPEN - BEGIN
// ===== ABOUT
// Open database
// ===== DESCRIPTION
// dba_open() establishes a database instance for path with mode using handler.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_open(
//    string $path,
//    string $mode,
//    ?string $handler = null,
//    int $permission = 0644,
//    int $map_size = 0,
//    ?int $flags = null
// ): resource|false
// ===== CODE
$return_dba_open = dba_open(

$path, // string path - Commonly a regular path in your filesystem.

$mode, // string mode - It is r for read access, w for read/write access to an already existing database, c for read/write access and database creation if it doesn't currently exist, and n for create, truncate and read/write access. The database is created in BTree mode, other modes (like Hash or Queue) are not supported.
// Additionally you can set the database lock method with the next char. Use l to lock the database with a .lck file or d to lock the databasefile itself. It is important that all of your applications do this consistently.
// If you want to test the access and do not want to wait for the lock you can add t as third character. When you are absolutely sure that you do not require database locking you can do so by using - instead of l or d. When none of d, l or - is used, dba will lock on the database file as it would with d.
//  Note: There can only be one writer for one database file. When you use dba on a web server and more than one request requires write operations they can only be done one after another. Also read during write is not allowed. The dba extension uses locks to prevent this. See the following table:
//  DBA locking
//  already open | mode = "rl" | mode = "rlt" | mode = "wl" | mode = "wlt" | mode = "rd" | mode = "rdt" | mode = "wd" | mode = "wdt"
//  not open     | ok          | ok           | ok          | ok           | ok          | ok           | ok          | ok
//  mode = "rl"  | ok          | ok           | wait        | false        | illegal     | illegal      | illegal     | illegal
//  mode = "wl"  | wait        | false        | wait        | false        | illegal     | illegal      | illegal     | illegal
//  mode = "rd"  | illegal     | illegal      | illegal     | illegal      | ok          | ok           | wait        | false
//  mode = "wd"  | illegal     | illegal      | illegal     | illegal      | wait        | false        | wait        | false
//  * ok: the second call will be successful.
//  * wait: the second call waits until dba_close() is called for the first.
//  * false: the second call returns false.
//  * illegal: you must not mix "l" and "d" modifiers for mode parameter.

$handler, // string handler - The name of the handler which shall be used for accessing path. It is passed all optional parameters given to dba_open() and can act on behalf of them. If handler is null, then the default handler is invoked.

$permission, // int permission - Optional int parameter which is passed to the driver. It has the same meaning as the permissions parameter of chmod(), and defaults to 0644.
// The db1, db2, db3, db4, dbm, gdbm, ndbm, and lmdb drivers support the permission parameter.

$map_size, // int map_size - Optional int parameter which is passed to the driver. Its value should be a multiple of the page size of the OS, or zero, to use the default map size.
// Only the lmdb driver accepts the map_size parameter.

$flags // int flags - Flags to pass to the database drivers. If null the default flags will be provided. Currently, only the LMDB driver supports the following flags DBA_LMDB_USE_SUB_DIR and DBA_LMDB_NO_SUB_DIR.

); // Return Values
// Returns a positive handle on success or false on failure.
// 
// Errors/Exceptions
// false is returned and an E_WARNING level error is issued when handler is null, but there is no default handler.
// 
// Changelog
// Version       - Description
// 8.2.0         - flags is added.
// 8.2.0         - handler is now nullable.
// 7.3.14, 7.4.2 - The lmdb driver now supports an additional map_size parameter.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-open.php
// ========== DBA_OPEN - END

// SYNTAX:
// resource|false dba_open(string $path, string $mode, string $handler = null, int $permission = 0644, int $map_size = 0, int $flags = null)

return $return_dba_open; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_OPEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_OPTIMIZE
// ============================== PUBLIC
// ============================== ABOUT
// Optimize database.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_optimize() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_optimize($dba)
{
$return_dba_optimize = false;

// ========== DBA_OPTIMIZE - BEGIN
// ===== ABOUT
// Optimize database
// ===== DESCRIPTION
// dba_optimize() optimizes the underlying database.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_optimize(resource $dba): bool
// ===== CODE
$return_dba_optimize = dba_optimize(

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-optimize.php
// ========== DBA_OPTIMIZE - END

// SYNTAX:
// bool dba_optimize(resource $dba)

return $return_dba_optimize; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_OPTIMIZE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_POPEN
// ============================== PUBLIC
// ============================== ABOUT
// Open database persistently.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_popen() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_popen($path, $mode, $handler = null, $permission = 0644, $map_size = 0, $flags = null)
{
$return_dba_popen = false;

// ========== DBA_POPEN - BEGIN
// ===== ABOUT
// Open database persistently
// ===== DESCRIPTION
// dba_popen() establishes a persistent database instance for path with mode using handler.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_popen(
//    string $path,
//    string $mode,
//    ?string $handler = null,
//    int $permission = 0644,
//    int $map_size = 0,
//    ?int $flags = null
// ): resource|false
// ===== CODE
$return_dba_popen = dba_popen(

$path, // string path - Commonly a regular path in your filesystem.

$mode, // string mode - It is r for read access, w for read/write access to an already existing database, c for read/write access and database creation if it doesn't currently exist, and n for create, truncate and read/write access.

$handler, // string handler - The name of the handler which shall be used for accessing path. It is passed all optional parameters given to dba_popen() and can act on behalf of them. If handler is null, then the default handler is invoked.

$permission, // int permission - Optional int parameter which is passed to the driver. It has the same meaning as the permissions parameter of chmod(), and defaults to 0644.
// The db1, db2, db3, db4, dbm, gdbm, ndbm, and lmdb drivers support the permission parameter.

$map_size, // int map_size - Optional int parameter which is passed to the driver. Its value should be a multiple of the page size of the OS, or zero, to use the default mapsize.
// The lmdb driver accepts the map_size parameter.

$flags // int flags - Allows to pass flags to the DB drivers. Currently, only LMDB with DBA_LMDB_USE_SUB_DIR and DBA_LMDB_NO_SUB_DIR are supported.

); // Return Values
// Returns a positive handle on success or false on failure.
// 
// Errors/Exceptions
// false is returned and an E_WARNING level error is issued when handler is null, but there is no default handler.
// 
// Changelog
// Version       - Description
// 8.2.0         - flags is added.
// 8.1.0         - handler is now nullable.
// 7.3.14, 7.4.2 - The lmdb driver now supports an additional map_size parameter.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-popen.php
// ========== DBA_POPEN - END

// SYNTAX:
// resource|false dba_popen(string $path, string $mode, string $handler = null, int $permission = 0644, int $map_size = 0, int $flags = null)

return $return_dba_popen; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_POPEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_REPLACE
// ============================== PUBLIC
// ============================== ABOUT
// Replace or insert entry.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_replace() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_replace($key, $value, $dba)
{
$return_dba_replace = false;

// ========== DBA_REPLACE - BEGIN
// ===== ABOUT
// Replace or insert entry
// ===== DESCRIPTION
// dba_replace() replaces or inserts the entry described with key and value into the database specified by dba.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_replace(string|array $key, string $value, resource $dba): bool
// ===== CODE
$return_dba_replace = dba_replace(

$key, // string|array key - The key of the entry to be replaced.

$value, // string value - The value to be replaced.

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-replace.php
// ========== DBA_REPLACE - END

// SYNTAX:
// bool dba_replace(string|array $key, string $value, resource $dba)

return $return_dba_replace; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_REPLACE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_DBA_DBA_SYNC
// ============================== PUBLIC
// ============================== ABOUT
// Synchronize database.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dba_sync() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_dba_dba_sync($dba)
{
$return_dba_sync = false;

// ========== DBA_SYNC - BEGIN
// ===== ABOUT
// Synchronize database
// ===== DESCRIPTION
// dba_sync() synchronizes the database. This will probably trigger a physical write to the disk, if supported.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dba_sync(resource $dba): bool
// ===== CODE
$return_dba_sync = dba_sync(

$dba // resource dba - The database handler, returned by dba_open() or dba_popen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.dba-sync.php
// ========== DBA_SYNC - END

// SYNTAX:
// bool dba_sync(resource $dba)

return $return_dba_sync; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_DBA_DBA_SYNC
// ==============================


// ============================== END
//   PHP_DATABASE_ABSTRACT_DBA   
// ==============================
?>