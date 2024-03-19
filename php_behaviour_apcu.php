<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_APCU - BEGIN
// PHP_BEHAVIOUR_APCU_APCU_ADD - bool php_behaviour_apcu_apcu_add(string $key, mixed $var, int $ttl = 0)
// PHP_BEHAVIOUR_APCU_APCU_CACHE_INFO - array|false php_behaviour_apcu_apcu_cache_info(bool $limited = false)
// PHP_BEHAVIOUR_APCU_APCU_CAS - bool php_behaviour_apcu_apcu_cas(string $key, int $old, int $new)
// PHP_BEHAVIOUR_APCU_APCU_CLEAR_CACHE - bool php_behaviour_apcu_apcu_clear_cache()
// PHP_BEHAVIOUR_APCU_APCU_DEC - int|false php_behaviour_apcu_apcu_dec(string $key, int $step, bool& $success, int $ttl = 0)
// PHP_BEHAVIOUR_APCU_APCU_DELETE - mixed php_behaviour_apcu_apcu_delete(mixed $key)
// PHP_BEHAVIOUR_APCU_APCU_ENABLED - bool php_behaviour_apcu_apcu_enabled()
// PHP_BEHAVIOUR_APCU_APCU_ENTRY - mixed php_behaviour_apcu_apcu_entry(string $key, callable $generator, int $ttl = 0)
// PHP_BEHAVIOUR_APCU_APCU_EXISTS - mixed php_behaviour_apcu_apcu_exists(mixed $keys)
// PHP_BEHAVIOUR_APCU_APCU_FETCH - mixed php_behaviour_apcu_apcu_fetch(mixed $key, bool& $success)
// PHP_BEHAVIOUR_APCU_APCU_INC - int|false php_behaviour_apcu_apcu_inc(string $key, int $step, bool& $success, int $ttl = 0)
// OFFLINE | PHP_BEHAVIOUR_APCU_APCU_KEY_INFO - array php_behaviour_apcu_apcu_key_info(string $key)
// PHP_BEHAVIOUR_APCU_APCU_SMA_INFO - array|false php_behaviour_apcu_apcu_sma_info(bool $limited = false)
// PHP_BEHAVIOUR_APCU_APCU_STORE - bool php_behaviour_apcu_apcu_store(string $key, mixed $var, int $ttl = 0)
// PHP_BEHAVIOUR_APCU_APCUITERATOR - APCUIterator|array|string|null|int|mixed|bool|void _CONSTRUCT, _CURRENT, _GETTOTALCOUNT, _GETTOTALHITS, _GETTOTALSIZE, _KEY, _NEXT, _REWIND, _VALID
// PHP_BEHAVIOUR_APCU - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PECL_apcu_5_1_0
// ============================== INSTALLATION
// NOT_BUNDLED (Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions.)
// ============================== USING FUNCTIONS (14)
// apcu_add() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_cache_info() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_cas() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_clear_cache() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_dec() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_delete() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_enabled() - PECL_apcu >= PECL_apcu_4_0_3
// apcu_entry() - PECL_apcu >= PECL_apcu_5_1_0
// apcu_exists() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_fetch() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_inc() - PECL_apcu >= PECL_apcu_4_0_0
// OFFLINE | apcu_key_info() - UNKNOWN
// apcu_sma_info() - PECL_apcu >= PECL_apcu_4_0_0
// apcu_store() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== USING CLASSES (1)
// PHP_BEHAVIOUR_APCU_APCUITERATOR - PECL_apcu_5_0_0
// ============================== USING DATA_TYPES (10)
// bool
// string
// mixed
// int
// array
// false
// callable
// APCUIterator - PECL_apcu >= PECL_apcu_5_0_0
// null
// void
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//       PHP_BEHAVIOUR_APCU       
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / APCu - APC User Cache
// URL: https://www.php.net/manual/en/book.apcu.php
// ============================== DESCRIPTION
// APC_USER_CACHE
// 
// APC_USER_CACHE - BEGIN
// APC User Cache
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// APCU_FUNCTIONS
// THE_APCUITERATOR_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// APCu is an in-memory key-value store for PHP. Keys are of type string and values can be any PHP variables. APCu only supports userland caching of variables.
// The APCu cache is per-process on Windows, so when using a process-based (rather than thread-based) SAPI, it will not be shared between different processes.
// APCu is APC stripped of opcode caching.
// The first APCu codebase was versioned 4.0.0, it was forked from the head of the APC master branch at the time. PHP 7 support is available as of APCu 5.0.0. PHP 8 support is available as of APCu 5.1.19.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/intro.apcu.php
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
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/apcu.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/apcu.
//  Tip: PHP 7 has a separate module (> apcu-bc) for backwards compatibility with APC.
//  In backward compatibility mode, APCu registers the applicable APC functions with backward compatible prototypes.
//  Where an APC function accepted cache_type, it is simply ignored by the backward compatible version, and omitted from the prototype for the APCu version.
// Warning: As of PHP 8.0.0, apcu-bc is no longer supported.
// Note: On Windows, APCu needs a temp path to exist, and be writable by the web server. It checks the TMP, TEMP and USERPROFILE environment variables in that order and finally tries the WINDOWS directory if none of those are set.
// Note: For more in-depth, highly technical implementation details, see the >  developer-supplied TECHNOTES file .
// APCu sources can be found > here.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/apcu.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// Although the default APCu settings are fine for many installations, serious users should consider tuning the following parameters.
// There is one decision to be made configuring APCu. How much memory is going to be allocated to APCu. The ini directive that controls this is apc.shm_size Read the sections on this carefully below.
// Once the server is running, the apc.php script that is bundled with the extension should be copied somewhere into the docroot and viewed with a browser as it provides a detailed analysis of the internal workings of APCu. If GD is enabled in PHP, it will even display some interesting graphs.
// If APCu is working, the Cache full count number (on the left) will display the number of times the cache has reached maximum capacity and has had to evict entries to free up memory. During eviction, if apc.ttl was specified, APCu will first attempt to remove expired entries, i.e. entries whose TTL has either expired, or entries that have no TTL set and haven't been accessed in the last apc.ttl seconds. If apc.ttl was not set, or removing expired entries did not free up enough space, APCu will clear the entire cache.
// The number of evictions should be minimal in a well-configured cache. If the cache is constantly being filled, and thusly forcefully freed, the resulting churning will have disparaging effects on script performance. The easiest way to minimize this number is to allocate more memory for APCu.
// When APCu is compiled with mmap support (Memory Mapping), it will use only one memory segment, unlike when APCu is built with SHM (SysV Shared Memory) support that uses multiple memory segments. MMAP does not have a maximum limit like SHM does in /proc/sys/kernel/shmmax. In general MMAP support is recommended because it will reclaim the memory faster when the webserver is restarted and all in all reduces memory allocation impact at startup.
// 
// APCu configuration options
// Name                 | Default | Changeable     | Changelog
// apc.enabled          | "1"     | PHP_INI_SYSTEM |
// apc.shm_segments     | "1"     | PHP_INI_SYSTEM |
// apc.shm_size         | "32M"   | PHP_INI_SYSTEM |
// apc.entries_hint     | "4096"  | PHP_INI_SYSTEM |
// apc.ttl              | "0"     | PHP_INI_SYSTEM |
// apc.gc_ttl           | "3600"  | PHP_INI_SYSTEM |
// apc.mmap_file_mask   | NULL    | PHP_INI_SYSTEM |
// apc.slam_defense     | "1"     | PHP_INI_SYSTEM |
// apc.enable_cli       | "0"     | PHP_INI_SYSTEM |
// apc.use_request_time | "0"     | PHP_INI_ALL    | Prior to APCu 5.1.19, the default was "1".
// apc.serializer       | "php"   | PHP_INI_SYSTEM | Prior to APCu 5.1.15, the default was "default".
// apc.coredump_unmap   | "0"     | PHP_INI_SYSTEM |
// apc.preload_path     | NULL    | PHP_INI_SYSTEM |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// apc.enabled bool          - apc.enabled can be set to 0 to disable APC. This is primarily useful when APC is statically compiled into PHP, since there is no other way to disable it (when compiled as a DSO, the extension line in php.ini can just be commented-out).
// apc.shm_segments int      - The number of shared memory segments to allocate for the compiler cache. If APC is running out of shared memory but apc.shm_size is set as high as the system allows, raising this value might prevent APC from exhausting its memory.
// apc.shm_size string       - The size of each shared memory segment given by a shorthand notation as described in this FAQ. By default, some systems (including most BSD variants) have very low limits on the size of a shared memory segment.
// apc.entries_hint int      - A "hint" about the number of distinct variables that might be stored. Set to zero or omit if not sure.
// apc.ttl int               - Consider cache entries without an explicit TTL to be expired if they have not been accessed in this many seconds. Effectively, this allows such entries to be removed opportunistically during a cache insert, or prior to a full expunge. Note that because removal is opportunistic, entries can still be readable even if they are older than apc.ttl seconds. This setting has no effect on cache entries that have an explicit TTL specified.
// apc.gc_ttl int            - The number of seconds that a cache entry may remain on the garbage-collection list. This value provides a fail-safe in the event that a server process dies while executing a cached source file; if that source file is modified, the memory allocated for the old version will not be reclaimed until this TTL reached. Set to zero to disable this feature.
// apc.mmap_file_mask string - If compiled with MMAP support by using --enable-mmap this is the mktemp-style file_mask to pass to the mmap module for determining whether your mmap'ed memory region is going to be file-backed or shared memory backed. For straight file-backed mmap, set it to something like /tmp/apc.XXXXXX (exactly 6 Xs). To use POSIX-style shm_open/mmap put a .shm somewhere in your mask. e.g. /apc.shm.XXXXXX You can also set it to /dev/zero to use your kernel's /dev/zero interface to anonymous mmap'ed memory. Leaving it undefined will force an anonymous mmap.
// apc.slam_defense int      - On very busy servers whenever you start the server or modify files you can create a race of many processes all trying to cache the same file at the same time. This option sets the percentage of processes that will skip trying to cache an uncached file. Or think of it as the probability of a single process to skip caching. For example, setting apc.slam_defense to 75 would mean that there is a 75% chance that the process will not cache an uncached file. So, the higher the setting the greater the defense against cache slams. Setting this to 0 disables this feature.
// apc.enable_cli int        - Mostly for testing and debugging. Setting this enables APC for the CLI version of PHP. Under normal circumstances, it is not ideal to create, populate and destroy the APC cache on every CLI request, but for various test scenarios it is useful to be able to enable APC for the CLI version of PHP easily.
// apc.serializer string     - Used to configure APC to use a third party serializer.
// apc.coredump_unmap bool   - Enables APC handling of signals, such as SIGSEGV, that write core files when signaled. When these signals are received, APC will attempt to unmap the shared memory segment in order to exclude it from the core file. This setting may improve system stability when fatal signals are received and a large APC shared memory segment is configured.
// Warning: This feature is potentially dangerous. Unmapping the shared memory segment in a fatal signal handler may cause undefined behaviour if a fatal error occurs.
// Note: Although some kernels may provide a facility to ignore various types of shared memory when generating a core dump file, these implementations may also ignore important shared memory segments such as the Apache scoreboard.
// apc.preload_path string   - Optionally, set a path to the directory that APC will load cache data at startup.
// apc.use_request_time bool - Use the SAPI request start time for TTL.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/apcu.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/apcu.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/apcu.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// APC_ITER_ALL (int)      -
// APC_ITER_ATIME (int)    -
// APC_ITER_CTIME (int)    -
// APC_ITER_DEVICE (int)   -
// APC_ITER_DTIME (int)    -
// APC_ITER_FILENAME (int) -
// APC_ITER_INODE (int)    -
// APC_ITER_KEY (int)      -
// APC_ITER_MD5 (int)      -
// APC_ITER_MEM_SIZE (int) -
// APC_ITER_MTIME (int)    -
// APC_ITER_NONE (int)     -
// APC_ITER_NUM_HITS (int) -
// APC_ITER_REFCOUNT (int) -
// APC_ITER_TTL (int)      -
// APC_ITER_TYPE (int)     -
// APC_ITER_VALUE (int)    -
// APC_LIST_ACTIVE (int)   -
// APC_LIST_DELETED (int)  -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/apcu.constants.php
// PREDEFINED_CONSTANTS - END
// 
// APCU_FUNCTIONS - BEGIN
// APCu Functions
// 
// Table of Contents
// * apcu_add         - Cache a new variable in the data store
// * apcu_cache_info  - Retrieves cached information from APCu's data store
// * apcu_cas         - Updates an old value with a new value
// * apcu_clear_cache - Clears the APCu cache
// * apcu_dec         - Decrease a stored number
// * apcu_delete      - Removes a stored variable from the cache
// * apcu_enabled     - Whether APCu is usable in the current environment
// * apcu_entry       - Atomically fetch or generate a cache entry
// * apcu_exists      - Checks if entry exists
// * apcu_fetch       - Fetch a stored variable from the cache
// * apcu_inc         - Increase a stored number
// * apcu_key_info    - Get detailed information about the cache key
// * apcu_sma_info    - Retrieves APCu Shared Memory Allocation information
// * apcu_store       - Cache a variable in the data store
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ref.apcu.php
// APCU_FUNCTIONS - END
// 
// THE_APCUITERATOR_CLASS - BEGIN
// The APCUIterator class
// 
// PECL_apcu >= PECL_apcu_5_0_0
// 
// Introduction
// The APCUIterator class makes it easier to iterate over large APCu caches. This is helpful as it allows iterating over large caches in steps, while grabbing a defined number of entries per lock instance, so it frees the cache locks for other activities rather than hold up the entire cache to grab 100 (the default) entries. Also, using regular expression matching is more efficient as it's been moved to the C level.
// 
// Class synopsis
// [code]
// class APCUIterator implements Iterator {
// 
//    /* Methods */
//    public __construct(
//        array|string|null $search = null,
//        int $format = APC_ITER_ALL,
//        int $chunk_size = 100,
//        int $list = APC_LIST_ACTIVE
//    )
//    public current(): mixed
//    public getTotalCount(): int
//    public getTotalHits(): int
//    public getTotalSize(): int
//    public key(): string
//    public next(): bool
//    public rewind(): void
//    public valid(): bool
// }
// [/code]
// 
// Table of Contents
// * APCUIterator::__construct   - Constructs an APCUIterator iterator object
// * APCUIterator::current       - Get current item
// * APCUIterator::getTotalCount - Get total count
// * APCUIterator::getTotalHits  - Get total cache hits
// * APCUIterator::getTotalSize  - Get total cache size
// * APCUIterator::key           - Get iterator key
// * APCUIterator::next          - Move pointer to next item
// * APCUIterator::rewind        - Rewinds iterator
// * APCUIterator::valid         - Checks if current position is valid
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.apcuiterator.php
// THE_APCUITERATOR_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/book.apcu.php
// APC_USER_CACHE - END
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_APCU_APCU_ADD  
// ============================== PUBLIC
// ============================== ABOUT
// Cache a new variable in the data store.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_add() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_add($key, $var, $ttl = 0)
{
$return_apcu_add = false;

// ========== APCU_ADD - BEGIN
// ===== ABOUT
// Cache a new variable in the data store
// ===== DESCRIPTION
// Caches a variable in the data store, only if it's not already stored.
// Note: Unlike many other mechanisms in PHP, variables stored using apcu_add() will persist between requests (until the value is removed from the cache).
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_add(string $key, mixed $var, int $ttl = 0): bool
// 
// apcu_add(array $values, mixed $unused = NULL, int $ttl = 0): array
// ===== CODE
$return_apcu_add = apcu_add(

$key, // array key - Store the variable using this name. keys are cache-unique, so attempting to use apcu_add() to store data with a key that already exists will not overwrite the existing data, and will instead return false. (This is the only difference between apcu_add() and apcu_store().)

$var, // mixed var - The variable to store

$ttl // int ttl - Time To Live; store var in the cache for ttl seconds. After the ttl has passed, the stored variable will be expunged from the cache (on the next request). If no ttl is supplied (or if the ttl is 0), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).

// array values - Names in key, variables in value.

); // Return Values
// Returns TRUE if something has effectively been added into the cache, FALSE otherwise. Second syntax returns array with error keys.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_add() example
// [php]
// $bar = 'BAR';
// apcu_add('foo', $bar);
// var_dump(apcu_fetch('foo'));
// echo "\n";
// $bar = 'NEVER GETS SET';
// apcu_add('foo', $bar);
// var_dump(apcu_fetch('foo'));
// echo "\n";
// [/php]
// The above example will output:
// [result]
// string(3) "BAR"
// string(3) "BAR"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.apcu-add.php
// ========== APCU_ADD - END

// SYNTAX:
// bool apcu_add(string $key, mixed $var, int $ttl = 0)

return $return_apcu_add; // bool
}
// ============================== END
//  PHP_BEHAVIOUR_APCU_APCU_ADD  
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_CACHE_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves cached information from APCu's data store.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_cache_info() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_cache_info($limited = false)
{
$return_apcu_cache_info = false;

// ========== APCU_CACHE_INFO - BEGIN
// ===== ABOUT
// Retrieves cached information from APCu's data store
// ===== DESCRIPTION
// Retrieves cached information and meta-data from APC's data store.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_cache_info(bool $limited = false): array|false
// ===== CODE
$return_apcu_cache_info = apcu_cache_info(

$limited // bool limited - If limited is true, the return value will exclude the individual list of cache entries. This is useful when trying to optimize calls for statistics gathering.

); // Return Values
// Array of cached data (and meta-data) or false on failure
// Note: apcu_cache_info() will raise a warning if it is unable to retrieve APC cache data. This typically occurs when APC is not enabled.
// 
// Changelog
// Version          - Description
// PECL apcu 3.0.11 - The limited parameter was introduced.
// PECL apcu 3.0.16 - The "filehits" option for the cache_type parameter was introduced.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_cache_info() example
// [php]
// print_r(apcu_cache_info());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [num_slots] => 2000
//     [ttl] => 0
//     [num_hits] => 9
//     [num_misses] => 3
//     [start_time] => 1123958803
//     [cache_list] => Array
//         (
//             [0] => Array
//                 (
//                     [filename] => /path/to/apcu_test.php
//                     [device] => 29954
//                     [inode] => 1130511
//                     [type] => file
//                     [num_hits] => 1
//                     [mtime] => 1123960686
//                     [creation_time] => 1123960696
//                     [deletion_time] => 0
//                     [access_time] => 1123962864
//                     [ref_count] => 1
//                     [mem_size] => 677
//                 )
//             [1] => Array (...iterates for each cached file)
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.apcu-cache-info.php
// ========== APCU_CACHE_INFO - END

// SYNTAX:
// array|false apcu_cache_info(bool $limited = false)

return $return_apcu_cache_info; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_CACHE_INFO
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_APCU_APCU_CAS  
// ============================== PUBLIC
// ============================== ABOUT
// Updates an old value with a new value.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_cas() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_cas($key, $old, $new)
{
$return_apcu_cas = false;

// ========== APCU_CAS - BEGIN
// ===== ABOUT
// Updates an old value with a new value
// ===== DESCRIPTION
// apcu_cas() updates an already existing integer value if the old parameter matches the currently stored value with the value of the new parameter.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_cas(string $key, int $old, int $new): bool
// ===== CODE
$return_apcu_cas = apcu_cas(

$key, // string key - The key of the value being updated.

$old, // int old - The old value (the value currently stored).

$new // int new - The new value to update to.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 apcu_cas() example
// [php]
// apcu_store('foobar', 2);
// echo '$foobar = 2', PHP_EOL;
// echo '$foobar == 1 ? 2 : 1 = ', (apcu_cas('foobar', 1, 2) ? 'ok' : 'fail'), PHP_EOL;
// echo '$foobar == 2 ? 1 : 2 = ', (apcu_cas('foobar', 2, 1) ? 'ok' : 'fail'), PHP_EOL;
// 
// echo '$foobar = ', apcu_fetch('foobar'), PHP_EOL;
// 
// echo '$f__bar == 1 ? 2 : 1 = ', (apcu_cas('f__bar', 1, 2) ? 'ok' : 'fail'), PHP_EOL;
// 
// apcu_store('perfection', 'xyz');
// echo '$perfection == 2 ? 1 : 2 = ', (apcu_cas('perfection', 2, 1) ? 'ok' : 'epic fail'), PHP_EOL;
// 
// echo '$foobar = ', apcu_fetch('foobar'), PHP_EOL;
// [/php]
// The above example will output something similar to:
// [result]
// $foobar = 2
// $foobar == 1 ? 2 : 1 = fail
// $foobar == 2 ? 1 : 2 = ok
// $foobar = 1
// $f__bar == 1 ? 2 : 1 = fail
// $perfection == 2 ? 1 : 2 = epic fail
// $foobar = 1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.apcu-cas.php
// ========== APCU_CAS - END

// SYNTAX:
// bool apcu_cas(string $key, int $old, int $new)

return $return_apcu_cas; // bool
}
// ============================== END
//  PHP_BEHAVIOUR_APCU_APCU_CAS  
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_CLEAR_CACHE
// ============================== PUBLIC
// ============================== ABOUT
// Clears the APCu cache.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_clear_cache() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_clear_cache()
{
$return_apcu_clear_cache = false;

// ========== APCU_CLEAR_CACHE - BEGIN
// ===== ABOUT
// Clears the APCu cache
// ===== DESCRIPTION
// Clears the cache.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_clear_cache(): bool
// ===== CODE
$return_apcu_clear_cache = apcu_clear_cache(

// This function has no parameters.

); // Return Values
// Returns true always
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-13)
// URL: https://www.php.net/manual/en/function.apcu-clear-cache.php
// ========== APCU_CLEAR_CACHE - END

// SYNTAX:
// bool apcu_clear_cache()

return $return_apcu_clear_cache; // bool
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_CLEAR_CACHE
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_APCU_APCU_DEC  
// ============================== PUBLIC
// ============================== ABOUT
// Decrease a stored number.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_dec() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_dec($key, $step, & $success, $ttl = 0)
{
$return_apcu_dec = false;

// ========== APCU_DEC - BEGIN
// ===== ABOUT
// Decrease a stored number
// ===== DESCRIPTION
// Decreases a stored integer value.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_dec(
//    string $key,
//    int $step = 1,
//    bool &$success = ?,
//    int $ttl = 0
// ): int|false
// ===== CODE
$return_apcu_dec = apcu_dec(

$key, // string key - The key of the value being decreased.

$step, // int step - The step, or value to decrease.

$success, // bool& success - Optionally pass the success or fail boolean value to this referenced variable.

$ttl // int ttl - TTL to use if the operation inserts a new value (rather than decrementing an existing one).

); // Return Values
// Returns the current value of key's value on success, or false on failure
// 
// [examples]
// Examples
// [example]
// Example #1 apcu_dec() example
// [php]
// echo "Let's do something with success", PHP_EOL;
// 
// apcu_store('anumber', 42);
// 
// echo apcu_fetch('anumber'), PHP_EOL;
// 
// echo apcu_dec('anumber'), PHP_EOL;
// echo apcu_dec('anumber', 10), PHP_EOL;
// echo apcu_dec('anumber', 10, $success), PHP_EOL;
// 
// var_dump($success);
// 
// echo "Now, let's fail", PHP_EOL, PHP_EOL;
// 
// apcu_store('astring', 'foo');
// 
// $ret = apcu_dec('astring', 1, $fail);
// 
// var_dump($ret);
// var_dump($fail);
// [/php]
// The above example will output something similar to:
// [result]
// Let's do something with success
// 42
// 41
// 31
// 21
// bool(true)
// Now, let's fail
// 
// bool(false)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-dec.php
// ========== APCU_DEC - END

// SYNTAX:
// int|false apcu_dec(string $key, int $step, bool& $success, int $ttl = 0)

return $return_apcu_dec; // int|false
}
// ============================== END
//  PHP_BEHAVIOUR_APCU_APCU_DEC  
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_DELETE
// ============================== PUBLIC
// ============================== ABOUT
// Removes a stored variable from the cache.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_delete() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_delete($key)
{
$return_apcu_delete = null;

// ========== APCU_DELETE - BEGIN
// ===== ABOUT
// Removes a stored variable from the cache
// ===== DESCRIPTION
// Removes a stored variable from the cache.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_delete(mixed $key): mixed
// ===== CODE
$return_apcu_delete = apcu_delete(

$key // mixed key - A key used to store the value as a string for a single key, or as an array of strings for several keys, or as an APCUIterator object.

); // Return Values
// If key is an array, an indexed array of the keys is returned. Otherwise true is returned on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_delete() example
// [php]
// $bar = 'BAR';
// apcu_store('foo', $bar);
// apcu_delete('foo');
// // this is obviously useless in this form
// 
// // Alternatively delete multiple keys.
// apcu_delete(['foo', 'bar', 'baz']);
// 
// // Or use an Iterator with a regular expression.
// apcu_delete(new APCUIterator('#^myprefix_#'));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-delete.php
// ========== APCU_DELETE - END

// SYNTAX:
// mixed apcu_delete(mixed $key)

return $return_apcu_delete; // mixed
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_DELETE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_ENABLED
// ============================== PUBLIC
// ============================== ABOUT
// Whether APCu is usable in the current environment.
// ============================== SUPPORT
// PECL_apcu_4_0_3
// ============================== USING FUNCTIONS (1)
// apcu_enabled() - PECL_apcu >= PECL_apcu_4_0_3
// ============================== CODE
function php_behaviour_apcu_apcu_enabled()
{
$return_apcu_enabled = false;

// ========== APCU_ENABLED - BEGIN
// ===== ABOUT
// Whether APCu is usable in the current environment
// ===== DESCRIPTION
// Returns whether APCu is usable in the current environment.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_3
// ===== SYNTAX
// apcu_enabled(): bool
// ===== CODE
$return_apcu_enabled = apcu_enabled(

// This function has no parameters.

); // Return Values
// Returns true when APCu is usable in the current environment, false otherwise.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-enabled.php
// ========== APCU_ENABLED - END

// SYNTAX:
// bool apcu_enabled()

return $return_apcu_enabled; // bool
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_ENABLED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_ENTRY 
// ============================== PUBLIC
// ============================== ABOUT
// Atomically fetch or generate a cache entry.
// ============================== SUPPORT
// PECL_apcu_5_1_0
// ============================== USING FUNCTIONS (1)
// apcu_entry() - PECL_apcu >= PECL_apcu_5_1_0
// ============================== CODE
function php_behaviour_apcu_apcu_entry($key, $generator, $ttl = 0)
{
$return_apcu_entry = null;

// ========== APCU_ENTRY - BEGIN
// ===== ABOUT
// Atomically fetch or generate a cache entry
// ===== DESCRIPTION
// Atomically attempts to find key in the cache, if it cannot be found generator is called, passing key as the only argument. The return value of the call is then cached with the optionally specified ttl, and returned.
// Note: When control enters apcu_entry() the lock for the cache is acquired exclusively, it is released when control leaves apcu_entry(): In effect, this turns the body of generator into a critical section, disallowing two processes from executing the same code paths concurrently. In addition, it prohibits the concurrent execution of any other APCu functions, since they will acquire the same lock.
// Warning: The only APCu function that can be called safely by generator is apcu_entry().
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_1_0
// ===== SYNTAX
// apcu_entry(string $key, callable $generator, int $ttl = 0): mixed
// ===== CODE
$return_apcu_entry = apcu_entry(

$key, // string key - Identity of cache entry

$generator, // callable generator - A callable that accepts key as the only argument and returns the value to cache.

$ttl // int ttl - Time To Live; store var in the cache for ttl seconds. After the ttl has passed, the stored variable will be expunged from the cache (on the next request). If no ttl is supplied (or if the ttl is 0), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).

); // Return Values
// Returns the cached value
// 
// [examples]
// Examples
// [example]
// Example #1 An apcu_entry() example
// [php]
// $config = apcu_entry("config", function($key) {
//  return [
//    "fruit" => apcu_entry("config.fruit", function($key){
//      return [
//        "apples",
//        "pears"
//      ];
//    }), 
//    "people" => apcu_entry("config.people", function($key){
//      return [
//       "bob",
//       "joe",
//       "niki"
//      ];
//    })
//  ];
// });
// 
// var_dump($config);
// [/php]
// The above example will output:
// [result]
// array(2) {
//   ["fruit"]=>
//   array(2) {
//     [0]=>
//     string(6) "apples"
//     [1]=>
//     string(5) "pears"
//   }
//   ["people"]=>
//   array(3) {
//     [0]=>
//     string(3) "bob"
//     [1]=>
//     string(3) "joe"
//     [2]=>
//     string(4) "niki"
//   }
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-entry.php
// ========== APCU_ENTRY - END

// SYNTAX:
// mixed apcu_entry(string $key, callable $generator, int $ttl = 0)

return $return_apcu_entry; // mixed
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_ENTRY 
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_EXISTS
// ============================== PUBLIC
// ============================== ABOUT
// Checks if entry exists.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_exists() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_exists($keys)
{
$return_apcu_exists = null;

// ========== APCU_EXISTS - BEGIN
// ===== ABOUT
// Checks if entry exists
// ===== DESCRIPTION
// Checks if one or more APCu entries exist.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_exists(mixed $keys): mixed
// ===== CODE
$return_apcu_exists = apcu_exists(

$keys // mixed keys - A string, or an array of strings, that contain keys.

); // Return Values
// Returns true if the key exists, otherwise false Or if an array was passed to keys, then an array is returned that contains all existing keys, or an empty array if none exist.
// 
// [examples]
// Examples
// [example]
// Example #1 apcu_exists() example
// [php]
// $fruit  = 'apple';
// $veggie = 'carrot';
// 
// apcu_store('foo', $fruit);
// apcu_store('bar', $veggie);
// 
// if (apcu_exists('foo')) {
//     echo "Foo exists: ";
//     echo apcu_fetch('foo');
// } else {
//     echo "Foo does not exist";
// }
// 
// echo PHP_EOL;
// if (apcu_exists('baz')) {
//     echo "Baz exists.";
// } else {
//     echo "Baz does not exist";
// }
// 
// echo PHP_EOL;
// 
// $ret = apcu_exists(array('foo', 'donotexist', 'bar'));
// var_dump($ret);
// 
// [/php]
// The above example will output something similar to:
// [result]
// Foo exists: apple
// Baz does not exist
// array(2) {
//   ["foo"]=>
//   bool(true)
//   ["bar"]=>
//   bool(true)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-exists.php
// ========== APCU_EXISTS - END

// SYNTAX:
// mixed apcu_exists(mixed $keys)

return $return_apcu_exists; // mixed
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_EXISTS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_FETCH 
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a stored variable from the cache.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_fetch() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_fetch($key, & $success)
{
$return_apcu_fetch = null;

// ========== APCU_FETCH - BEGIN
// ===== ABOUT
// Fetch a stored variable from the cache
// ===== DESCRIPTION
// Fetches an entry from the cache.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_fetch(mixed $key, bool &$success = ?): mixed
// ===== CODE
$return_apcu_fetch = apcu_fetch(

$key, // mixed key - The key used to store the value (with apcu_store()). If an array is passed then each element is fetched and returned.

$success // bool& success - Set to true in success and false in failure.

); // Return Values
// The stored variable or array of variables on success; false on failure
// 
// Changelog
// Version          - Description
// PECL apcu 3.0.17 - The success parameter was added.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_fetch() example
// [php]
// $bar = 'BAR';
// apcu_store('foo', $bar);
// var_dump(apcu_fetch('foo'));
// [/php]
// The above example will output:
// [result]
// string(3) "BAR"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-fetch.php
// ========== APCU_FETCH - END

// SYNTAX:
// mixed apcu_fetch(mixed $key, bool& $success)

return $return_apcu_fetch; // mixed
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_FETCH 
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_APCU_APCU_INC  
// ============================== PUBLIC
// ============================== ABOUT
// Increase a stored number.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_inc() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_inc($key, $step, & $success, $ttl = 0)
{
$return_apcu_inc = false;

// ========== APCU_INC - BEGIN
// ===== ABOUT
// Increase a stored number
// ===== DESCRIPTION
// Increases a stored number.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_inc(
//    string $key,
//    int $step = 1,
//    bool &$success = ?,
//    int $ttl = 0
// ): int|false
// ===== CODE
$return_apcu_inc = apcu_inc(

$key, // string key - The key of the value being increased.

$step, // int step - The step, or value to increase.

$success, // bool& success - Optionally pass the success or fail boolean value to this referenced variable.

$ttl // int ttl - TTL to use if the operation inserts a new value (rather than incrementing an existing one).

); // Return Values
// Returns the current value of key's value on success, or false on failure
// 
// [examples]
// Examples
// [example]
// Example #1 apcu_inc() example
// [php]
// echo "Let's do something with success", PHP_EOL;
// 
// apcu_store('anumber', 42);
// 
// echo apcu_fetch('anumber'), PHP_EOL;
// 
// echo apcu_inc('anumber'), PHP_EOL;
// echo apcu_inc('anumber', 10), PHP_EOL;
// echo apcu_inc('anumber', 10, $success), PHP_EOL;
// 
// var_dump($success);
// 
// echo "Now, let's fail", PHP_EOL, PHP_EOL;
// 
// apcu_store('astring', 'foo');
// 
// $ret = apcu_inc('astring', 1, $fail);
// 
// var_dump($ret);
// var_dump($fail);
// [/php]
// The above example will output something similar to:
// [result]
// Let's do something with success
// 42
// 43
// 53
// 63
// bool(true)
// Now, let's fail
// 
// bool(false)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-inc.php
// ========== APCU_INC - END

// SYNTAX:
// int|false apcu_inc(string $key, int $step, bool& $success, int $ttl = 0)

return $return_apcu_inc; // int|false
}
// ============================== END
//  PHP_BEHAVIOUR_APCU_APCU_INC  
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_KEY_INFO
// ============================== OFFLINE
// ============================== ABOUT
// Get detailed information about the cache key.
// ============================== SUPPORT
// UNKNOWN
// ============================== USING FUNCTIONS (1)
// apcu_key_info() - UNKNOWN
// ============================== CODE
/*
function php_behaviour_apcu_apcu_key_info($key)
{
$return_apcu_key_info = null;

// ========== APCU_KEY_INFO - BEGIN
// ===== ABOUT
// Get detailed information about the cache key
// ===== DESCRIPTION
// Get detailed information about the cache key
// ===== SUPPORTED
// UNKNOWN (No version information available, might only be in Git)
// ===== SYNTAX
// apcu_key_info(string $key): ?array
// ===== CODE
$return_apcu_key_info = apcu_key_info(

$key // string key - Get detailed information about the cache key

); // Return Values
// An array containing the detailed information about the cache key, or null if the key does not exist.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_key_info() example
// [php]
// apcu_add('a','b');
// var_dump(apcu_key_info('a'));
// [/php]
// The above example will output:
// [result]
// array(7) {
//   ["hits"]=>
//   int(0)
//   ["access_time"]=>
//   int(1606701783)
//   ["mtime"]=>
//   int(1606701783)
//   ["creation_time"]=>
//   int(1606701783)
//   ["deletion_time"]=>
//   int(0)
//   ["ttl"]=>
//   int(0)
//   ["refs"]=>
//   int(0)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-key-info.php
// ========== APCU_KEY_INFO - END

// SYNTAX:
// array apcu_key_info(string $key)

return $return_apcu_key_info; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_KEY_INFO
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_SMA_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves APCu Shared Memory Allocation information.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_sma_info() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_sma_info($limited = false)
{
$return_apcu_sma_info = false;

// ========== APCU_SMA_INFO - BEGIN
// ===== ABOUT
// Retrieves APCu Shared Memory Allocation information
// ===== DESCRIPTION
// Retrieves APCu Shared Memory Allocation information.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_sma_info(bool $limited = false): array|false
// ===== CODE
$return_apcu_sma_info = apcu_sma_info(

$limited // bool limited - When set to false (default) apcu_sma_info() will return a detailed information about each segment.

); // Return Values
// Array of Shared Memory Allocation data; false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_sma_info() example
// [php]
// print_r(apcu_sma_info());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [num_seg] => 1
//     [seg_size] => 31457280
//     [avail_mem] => 31448408
//     [block_lists] => Array
//         (
//             [0] => Array
//                 (
//                     [0] => Array
//                         (
//                             [size] => 31448408
//                             [offset] => 8864
//                         )
// 
//                 )
// 
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-sma-info.php
// ========== APCU_SMA_INFO - END

// SYNTAX:
// array|false apcu_sma_info(bool $limited = false)

return $return_apcu_sma_info; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_SMA_INFO
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCU_STORE 
// ============================== PUBLIC
// ============================== ABOUT
// Cache a variable in the data store.
// ============================== SUPPORT
// PECL_apcu_4_0_0
// ============================== USING FUNCTIONS (1)
// apcu_store() - PECL_apcu >= PECL_apcu_4_0_0
// ============================== CODE
function php_behaviour_apcu_apcu_store($key, $var, $ttl = 0)
{
$return_apcu_store = false;

// ========== APCU_STORE - BEGIN
// ===== ABOUT
// Cache a variable in the data store
// ===== DESCRIPTION
// Cache a variable in the data store.
// Note: Unlike many other mechanisms in PHP, variables stored using apcu_store() will persist between requests (until the value is removed from the cache).
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_4_0_0
// ===== SYNTAX
// apcu_store(string $key, mixed $var, int $ttl = 0): bool
// 
// apcu_store(array $values, mixed $unused = NULL, int $ttl = 0): array
// ===== CODE
$return_apcu_store = apcu_store(

$key, // string key - Store the variable using this name. keys are cache-unique, so storing a second value with the same key will overwrite the original value.

$var, // mixed var - The variable to store

$ttl // int ttl - Time To Live; store var in the cache for ttl seconds. After the ttl has passed, the stored variable will be expunged from the cache (on the next request). If no ttl is supplied (or if the ttl is 0), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).

// array values - Names in key, variables in value.

); // Return Values
// Returns true on success or false on failure. Second syntax returns array with error keys.
// 
// [examples]
// Examples
// [example]
// Example #1 A apcu_store() example
// [php]
// $bar = 'BAR';
// apcu_store('foo', $bar);
// var_dump(apcu_fetch('foo'));
// [/php]
// The above example will output:
// [result]
// string(3) "BAR"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.apcu-store.php
// ========== APCU_STORE - END

// SYNTAX:
// bool apcu_store(string $key, mixed $var, int $ttl = 0)

return $return_apcu_store; // bool
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCU_STORE 
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR
// ============================== PUBLIC
// PHP_BEHAVIOUR_APCU_APCUITERATOR_CONSTRUCT - APCUIterator php_behaviour_apcu_apcuiterator_construct(array|string|null $search = null, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_CURRENT - mixed php_behaviour_apcu_apcuiterator_current(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALCOUNT - int php_behaviour_apcu_apcuiterator_gettotalcount(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALHITS - int php_behaviour_apcu_apcuiterator_gettotalhits(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALSIZE - int php_behaviour_apcu_apcuiterator_gettotalsize(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_KEY - string php_behaviour_apcu_apcuiterator_key(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_NEXT - bool php_behaviour_apcu_apcuiterator_next(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_REWIND - void php_behaviour_apcu_apcuiterator_rewind(APCUIterator $apcuiterator)
// PHP_BEHAVIOUR_APCU_APCUITERATOR_VALID - bool php_behaviour_apcu_apcuiterator_valid(APCUIterator $apcuiterator)
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (9)
// APCUIterator::__construct() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::current() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::getTotalCount() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::getTotalHits() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::getTotalSize() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::key() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::next() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::rewind() - PECL_apcu >= PECL_apcu_5_0_0
// APCUIterator::valid() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== USING DATA_TYPES (8)
// APCUIterator - PECL_apcu >= PECL_apcu_5_0_0
// array
// string
// null
// int
// mixed
// bool
// void
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Constructs an APCUIterator iterator object.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::__construct() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== USING CONSTANTS (2)
// APC_ITER_ALL - APCUIterator::__construct()
// APC_LIST_ACTIVE - APCUIterator::__construct()
// ============================== CODE
function php_behaviour_apcu_apcuiterator_construct($search = null, $format = APC_ITER_ALL, $chunk_size = 100, $list = APC_LIST_ACTIVE)
{
$return_apcuiterator_construct = null;

// ========== APCUITERATOR_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs an APCUIterator iterator object
// ===== DESCRIPTION
// Constructs an APCUIterator object.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::__construct(
//    array|string|null $search = null,
//    int $format = APC_ITER_ALL,
//    int $chunk_size = 100,
//    int $list = APC_LIST_ACTIVE
// )
// ===== CODE
$return_apcuiterator_construct = new APCUIterator(

$search, // array|string|null search - Either a PCRE regular expression that matches against APCu key names, given as a string. Or an array of strings with APCu key names. Or, optionally null to skip the search.

$format, // int format - The desired format, as configured with one or more of the APC_ITER_* constants.

$chunk_size, // int chunk_size - The chunk size. Must be a value greater than 0. The default value is 100.

$list // int list - The type to list. Either pass in APC_LIST_ACTIVE or APC_LIST_DELETED.

); // Return
// APCUIterator
// 
// [examples]
// Examples
// [example]
// Example #1 A APCUIterator::__construct() example
// [php]
// foreach (new APCUIterator('/^counter\./') as $counter) {
//     echo "$counter[key]: $counter[value]\n";
//     apc_dec($counter['key'], $counter['value']);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/apcuiterator.construct.php
// ========== APCUITERATOR_CONSTRUCT - END

// SYNTAX:
// APCUIterator APCUIterator::__construct(array|string|null $search = null, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE)

return $return_apcuiterator_construct; // APCUIterator
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_CURRENT
// ============================== PUBLIC
// ============================== ABOUT
// Get current item.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::current() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_current($apcuiterator)
{
$return_apcuiterator_current = null;

// ========== APCUITERATOR_CURRENT - BEGIN
// ===== ABOUT
// Get current item
// ===== DESCRIPTION
// Gets the current item from the APCUIterator stack.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::current(): mixed
// ===== CODE
$return_apcuiterator_current = $apcuiterator->current(

// This function has no parameters.

); // Return Values
// Returns the current item on success, or false if no more items or exist, or on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.current.php
// ========== APCUITERATOR_CURRENT - END

// SYNTAX:
// mixed APCUIterator::current()

return $return_apcuiterator_current; // mixed
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_CURRENT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALCOUNT
// ============================== PUBLIC
// ============================== ABOUT
// Get total count.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::getTotalCount() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_gettotalcount($apcuiterator)
{
$return_apcuiterator_gettotalcount = 0;

// ========== APCUITERATOR_GETTOTALCOUNT - BEGIN
// ===== ABOUT
// Get total count
// ===== DESCRIPTION
// Get the total count.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::getTotalCount(): int
// ===== CODE
$return_apcuiterator_gettotalcount = $apcuiterator->getTotalCount(

// This function has no parameters.

); // Return Values
// The total count.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.gettotalcount.php
// ========== APCUITERATOR_GETTOTALCOUNT - END

// SYNTAX:
// int APCUIterator::getTotalCount()

return $return_apcuiterator_gettotalcount; // int
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALCOUNT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALHITS
// ============================== PUBLIC
// ============================== ABOUT
// Get total cache hits.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::getTotalHits() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_gettotalhits($apcuiterator)
{
$return_apcuiterator_gettotalhits = 0;

// ========== APCUITERATOR_GETTOTALHITS - BEGIN
// ===== ABOUT
// Get total cache hits
// ===== DESCRIPTION
// Gets the total number of cache hits.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::getTotalHits(): int
// ===== CODE
$return_apcuiterator_gettotalhits = $apcuiterator->getTotalHits(

// This function has no parameters.

); // Return Values
// The number of hits on success, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.gettotalhits.php
// ========== APCUITERATOR_GETTOTALHITS - END

// SYNTAX:
// int APCUIterator::getTotalHits()

return $return_apcuiterator_gettotalhits; // int
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALHITS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALSIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get total cache size.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::getTotalSize() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_gettotalsize($apcuiterator)
{
$return_apcuiterator_gettotalsize = 0;

// ========== APCUITERATOR_GETTOTALSIZE - BEGIN
// ===== ABOUT
// Get total cache size
// ===== DESCRIPTION
// Gets the total cache size.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::getTotalSize(): int
// ===== CODE
$return_apcuiterator_gettotalsize = $apcuiterator->getTotalSize(

// This function has no parameters.

); // Return Values
// The total cache size.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.gettotalsize.php
// ========== APCUITERATOR_GETTOTALSIZE - END

// SYNTAX:
// int APCUIterator::getTotalSize()

return $return_apcuiterator_gettotalsize; // int
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_GETTOTALSIZE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_KEY
// ============================== PUBLIC
// ============================== ABOUT
// Get iterator key.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::key() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_key($apcuiterator)
{
$return_apcuiterator_key = null;

// ========== APCUITERATOR_KEY - BEGIN
// ===== ABOUT
// Get iterator key
// ===== DESCRIPTION
// Gets the current iterator key.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::key(): string
// ===== CODE
$return_apcuiterator_key = $apcuiterator->key(

// This function has no parameters.

); // Return Values
// Returns the key on success, or false upon failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.key.php
// ========== APCUITERATOR_KEY - END

// SYNTAX:
// string APCUIterator::key()

return $return_apcuiterator_key; // string
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_KEY
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_NEXT
// ============================== PUBLIC
// ============================== ABOUT
// Move pointer to next item.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::next() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_next($apcuiterator)
{
$return_apcuiterator_next = false;

// ========== APCUITERATOR_NEXT - BEGIN
// ===== ABOUT
// Move pointer to next item
// ===== DESCRIPTION
// Moves the iterator pointer to the next element.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::next(): bool
// ===== CODE
$return_apcuiterator_next = $apcuiterator->next(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.next.php
// ========== APCUITERATOR_NEXT - END

// SYNTAX:
// bool APCUIterator::next()

return $return_apcuiterator_next; // bool
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_NEXT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_REWIND
// ============================== PUBLIC
// ============================== ABOUT
// Rewinds iterator.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::rewind() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_rewind($apcuiterator)
{

// ========== APCUITERATOR_REWIND - BEGIN
// ===== ABOUT
// Rewinds iterator
// ===== DESCRIPTION
// Rewinds back the iterator to the first element.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::rewind(): void
// ===== CODE
$apcuiterator->rewind(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.rewind.php
// ========== APCUITERATOR_REWIND - END

// SYNTAX:
// void APCUIterator::rewind()

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_REWIND
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_APCU_APCUITERATOR_VALID
// ============================== PUBLIC
// ============================== ABOUT
// Checks if current position is valid.
// ============================== SUPPORT
// PECL_apcu_5_0_0
// ============================== USING SUBCLASSES (1)
// APCUIterator::valid() - PECL_apcu >= PECL_apcu_5_0_0
// ============================== CODE
function php_behaviour_apcu_apcuiterator_valid($apcuiterator)
{
$return_apcuiterator_valid = false;

// ========== APCUITERATOR_VALID - BEGIN
// ===== ABOUT
// Checks if current position is valid
// ===== DESCRIPTION
// Checks if the current iterator position is valid.
// ===== SUPPORTED
// PECL_apcu >= PECL_apcu_5_0_0
// ===== SYNTAX
// public APCUIterator::valid(): bool
// ===== CODE
$return_apcuiterator_valid = $apcuiterator->valid(

// This function has no parameters.

); // Return Values
// Returns true if the current iterator position is valid, otherwise false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/apcuiterator.valid.php
// ========== APCUITERATOR_VALID - END

// SYNTAX:
// bool APCUIterator::valid()

return $return_apcuiterator_valid; // bool
}
// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR_VALID
// ==============================


// ============================== END
// PHP_BEHAVIOUR_APCU_APCUITERATOR
// ==============================


// ============================== END
//       PHP_BEHAVIOUR_APCU       
// ==============================
?>