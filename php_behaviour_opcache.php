<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_OPCACHE - BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_COMPILE_FILE - bool php_behaviour_opcache_opcache_compile_file(string $filename)
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_GET_CONFIGURATION - array|false php_behaviour_opcache_opcache_get_configuration()
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_GET_STATUS - array|false php_behaviour_opcache_opcache_get_status(bool $include_scripts = true)
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_INVALIDATE - bool php_behaviour_opcache_opcache_invalidate(string $filename, bool $force = false)
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_IS_SCRIPT_CACHED - bool php_behaviour_opcache_opcache_is_script_cached(string $filename)
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_RESET - bool php_behaviour_opcache_opcache_reset()
// PHP_BEHAVIOUR_OPCACHE - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_4
// ============================== INSTALLATION
// BUNDLED (OPcache can only be compiled as a shared extension. If you have disabled the building of default extensions with --disable-all, you must compile PHP with the --enable-opcache option for OPcache to be available.)
// ============================== USING FUNCTIONS (6)
// opcache_compile_file() - PHP_5 >= PHP_5_5_5, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// opcache_get_configuration() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// opcache_get_status() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// opcache_invalidate() - PHP_5 >= 5_5_0, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_0
// opcache_is_script_cached() - PHP_5 >= PHP_5_5_11, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_4
// opcache_reset() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_0
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (4)
// bool
// string
// array
// false
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//     PHP_BEHAVIOUR_OPCACHE     
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / OPcache
// URL: https://www.php.net/manual/en/book.opcache.php
// ============================== DESCRIPTION
// OPCACHE
// 
// OPCACHE - BEGIN
// OPcache
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PRELOADING
// OPCACHE_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// OPcache improves PHP performance by storing precompiled script bytecode in shared memory, thereby removing the need for PHP to load and parse scripts on each request.
// This extension is bundled with PHP 5.5.0 and later, and is > available in PECL for PHP versions 5.2, 5.3 and 5.4.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/intro.opcache.php
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
// URL: https://www.php.net/manual/en/opcache.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// OPcache can only be compiled as a shared extension. If you have disabled the building of default extensions with --disable-all, you must compile PHP with the --enable-opcache option for OPcache to be available.
// Once compiled, you can use the zend_extension configuration directive to load the OPcache extension into PHP. This can be done with zend_extension=/full/path/to/opcache.so on non-Windows platforms, and zend_extension=C:\path\to\php_opcache.dll on Windows.
// Note: If you want to use OPcache with > Xdebug, you must load OPcache before Xdebug.
// 
// Recommended php.ini settings
// The following settings are generally recommended as providing good performance:
// [code]
// opcache.memory_consumption=128
// opcache.interned_strings_buffer=8
// opcache.max_accelerated_files=4000
// opcache.revalidate_freq=60
// opcache.fast_shutdown=1 ; prior to PHP 7.2.0
// opcache.enable_cli=1
// [/code]
// You may also want to consider disabling opcache.save_comments and enabling opcache.enable_file_override, however note that you will have to test your code before using these in production as they are known to break some frameworks and applications, particularly in cases where documentation comment annotations are used.
// On Windows, opcache.file_cache_fallback should be enabled, and opcache.file_cache should be set to an already existing and writable directory.
// A full list of configuration directives supported by OPcache is also available.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/opcache.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// OPcache configuration options
// Name                                  | Default      | Changeable     | Changelog
// opcache.enable                        | "1"          | PHP_INI_ALL    |
// opcache.enable_cli                    | "0"          | PHP_INI_SYSTEM | Between PHP 7.1.2 and 7.1.6 inclusive, the default was "1"
// opcache.memory_consumption            | "128"        | PHP_INI_SYSTEM |
// opcache.interned_strings_buffer       | "8"          | PHP_INI_SYSTEM |
// opcache.max_accelerated_files         | "10000"      | PHP_INI_SYSTEM |
// opcache.max_wasted_percentage         | "5"          | PHP_INI_SYSTEM |
// opcache.use_cwd                       | "1"          | PHP_INI_SYSTEM |
// opcache.validate_timestamps           | "1"          | PHP_INI_ALL    |
// opcache.revalidate_freq               | "2"          | PHP_INI_ALL    |
// opcache.revalidate_path               | "0"          | PHP_INI_ALL    |
// opcache.save_comments                 | "1"          | PHP_INI_SYSTEM |
// opcache.fast_shutdown                 | "0"          | PHP_INI_SYSTEM | Removed in PHP 7.2.0
// opcache.enable_file_override          | "0"          | PHP_INI_SYSTEM |
// opcache.optimization_level            | "0x7FFEBFFF" | PHP_INI_SYSTEM | Changed from 0x7FFFBFFF in PHP 7.3.0
// opcache.inherited_hack                | "1"          | PHP_INI_SYSTEM | Removed in PHP 7.3.0
// opcache.dups_fix                      | "0"          | PHP_INI_ALL    |
// opcache.blacklist_filename            | ""           | PHP_INI_SYSTEM |
// opcache.max_file_size                 | "0"          | PHP_INI_SYSTEM |
// opcache.consistency_checks            | "0"          | PHP_INI_ALL    | Disabled as of 8.1.18 and 8.2.5. Removed as of PHP 8.3.0.
// opcache.force_restart_timeout         | "180"        | PHP_INI_SYSTEM |
// opcache.error_log                     | ""           | PHP_INI_SYSTEM |
// opcache.log_verbosity_level           | "1"          | PHP_INI_SYSTEM |
// opcache.record_warnings               | "0"          | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.preferred_memory_model        | ""           | PHP_INI_SYSTEM |
// opcache.protect_memory                | "0"          | PHP_INI_SYSTEM |
// opcache.mmap_base                     | null         | PHP_INI_SYSTEM |
// opcache.restrict_api                  | ""           | PHP_INI_SYSTEM |
// opcache.file_update_protection        | "2"          | PHP_INI_ALL    |
// opcache.huge_code_pages               | "0"          | PHP_INI_SYSTEM |
// opcache.lockfile_path                 | "/tmp"       | PHP_INI_SYSTEM |
// opcache.opt_debug_level               | "0"          | PHP_INI_SYSTEM | Available as of PHP 7.1.0
// opcache.file_cache                    | NULL         | PHP_INI_SYSTEM |
// opcache.file_cache_only               | "0"          | PHP_INI_SYSTEM |
// opcache.file_cache_consistency_checks | "1"          | PHP_INI_SYSTEM |
// opcache.file_cache_fallback           | "1"          | PHP_INI_SYSTEM | Windows only.
// opcache.validate_permission           | "0"          | PHP_INI_SYSTEM | Available as of PHP 7.0.14
// opcache.validate_root                 | "0"          | PHP_INI_SYSTEM | Available as of PHP 7.0.14
// opcache.preload                       | ""           | PHP_INI_SYSTEM | Available as of PHP 7.4.0
// opcache.preload_user                  | ""           | PHP_INI_SYSTEM | Available as of PHP 7.4.0
// opcache.cache_id                      | ""           | PHP_INI_SYSTEM | Windows only. Available as of PHP 7.4.0
// opcache.jit                           | "tracing"    | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_buffer_size               | "0"          | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_debug                     | "0"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_bisect_limit              | "0"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_prof_threshold            | "0.005"      | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_max_root_traces           | "1024"       | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_max_side_traces           | "128"        | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_max_exit_counters         | "8192"       | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_hot_loop                  | "64"         | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_hot_func                  | "127"        | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_hot_return                | "8"          | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_hot_side_exit             | "8"          | PHP_INI_SYSTEM | Available as of PHP 8.0.0
// opcache.jit_blacklist_root_trace      | "16"         | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_blacklist_side_trace      | "8"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_max_loop_unrolls          | "8"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_max_recursive_calls       | "2"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_max_recursive_returns     | "2"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// opcache.jit_max_polymorphic_calls     | "2"          | PHP_INI_ALL    | Available as of PHP 8.0.0
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// opcache.enable bool                        - Enables the opcode cache. When disabled, code is not optimised or cached. The setting opcache.enable can not be enabled at runtime through ini_set(), it can only be disabled. Trying to enable it in a script will generate a warning.
// opcache.enable_cli bool                    - Enables the opcode cache for the CLI version of PHP.
// opcache.memory_consumption int             - The size of the shared memory storage used by OPcache, in megabytes. The minimum permissible value is "8", which is enforced if a smaller value is set.
// opcache.interned_strings_buffer int        - The amount of memory used to store interned strings, in megabytes.
// opcache.max_accelerated_files int          - The maximum number of keys (and therefore scripts) in the OPcache hash table. The actual value used will be the first number in the set of prime numbers { 223, 463, 983, 1979, 3907, 7963, 16229, 32531, 65407, 130987, 262237, 524521, 1048793 } that is greater than or equal to the configured value. The minimum value is 200. The maximum value is 1000000. Values outside of this range are clamped to the permissible range.
// opcache.max_wasted_percentage int          - The maximum percentage of wasted memory that is allowed before a restart is scheduled, if there is insufficient free memory. The maximum permissible value is "50", which is enforced if a larger value is set.
// opcache.use_cwd bool                       - If enabled, OPcache appends the current working directory to the script key, thereby eliminating possible collisions between files with the same base name. Disabling this directive improves performance, but may break existing applications.
// opcache.validate_timestamps bool           - If enabled, OPcache will check for updated scripts every opcache.revalidate_freq seconds. When this directive is disabled, you must reset OPcache manually via opcache_reset(), opcache_invalidate() or by restarting the Web server for changes to the filesystem to take effect.
// Note: OPcache may still validate the timestamp of a file at compile-time if opcache.file_update_protection or opcache.max_file_size options are set to non-zero values.
// opcache.revalidate_freq int                - How often to check script timestamps for updates, in seconds. 0 will result in OPcache checking for updates on every request.
// This configuration directive is ignored if opcache.validate_timestamps is disabled.
// opcache.revalidate_path bool               - If disabled, existing cached files using the same include_path will be reused. Thus, if a file with the same name is elsewhere in the include_path, it won't be found.
// opcache.save_comments bool                 - If disabled, all documentation comments will be discarded from the opcode cache to reduce the size of the optimised code. Disabling this configuration directive may break applications and frameworks that rely on comment parsing for annotations, including Doctrine, Zend Framework 2 and PHPUnit.
// opcache.fast_shutdown bool                 - If enabled, a fast shutdown sequence is used that doesn't free each allocated block, but relies on the Zend Engine memory manager to deallocate the entire set of request variables en masse.
// This directive has been removed in PHP 7.2.0. A variant of the fast shutdown sequence has been integrated into PHP and will be automatically used if possible.
// opcache.enable_file_override bool          - When enabled, the opcode cache will be checked for whether a file has already been cached when file_exists(), is_file() and is_readable() are called. This may increase performance in applications that check the existence and readability of PHP scripts, but risks returning stale data if opcache.validate_timestamps is disabled.
// opcache.optimization_level int             - A bitmask that controls which optimisation passes are executed. The default is to apply all safe optimizations. Changing the default is mostly useful for debugging/developing the optimizer (see also opcache.opt_debug_level).
// opcache.inherited_hack bool                - This configuration directive is ignored.
// opcache.dups_fix bool                      - This hack should only be enabled to work around "Cannot redeclare class" errors.
// opcache.blacklist_filename string          - The location of the OPcache blacklist file. A blacklist file is a text file containing the names of files that should not be accelerated, one per line. Wildcards are allowed, and prefixes can also be provided. Lines starting with a semi-colon are ignored as comments.
// A simple blacklist file might look as follows:
// [code]
// ; Matches a specific file.
// /var/www/broken.php
// ; A prefix that matches all files starting with x.
// /var/www/x
// ; A wildcard match.
// /var/www/*-broken.php
// [/code]
// opcache.max_file_size int                  - The maximum file size that will be cached, in bytes. If this is 0, all files will be cached.
// opcache.consistency_checks int             - If non-zero, OPcache will verify the cache checksum every N requests, where N is the value of this configuration directive. This should only be enabled when debugging, as it will impair performance.
// Note: Disabled as of 8.1.18 and 8.2.5. Removed as of PHP 8.3.0.
// opcache.force_restart_timeout int          - The length of time to wait for a scheduled restart to begin if the cache isn't active, in seconds. If the timeout is hit, then OPcache assumes that something is wrong and will kill the processes holding locks on the cache to permit a restart.
// If opcache.log_verbosity_level is set to 2 or above, a warning will be recorded in the error log when this occurs.
// This directive is not supported on Windows.
// opcache.error_log string                   - The error log for OPcache errors. An empty string is treated the same as stderr, and will result in logs being sent to standard error (which will be the Web server error log in most cases).
// opcache.log_verbosity_level int            - The log verbosity level. By default, only fatal errors (level 0) and errors (level 1) are logged. Other levels available are warnings (level 2), information messages (level 3) and debug messages (level 4).
// opcache.record_warnings bool               - If enabled, OPcache will record compile-time warnings and replay them on the next include, even if it is served from cache.
// opcache.preferred_memory_model string      - The preferred memory model for OPcache to use. If left empty, OPcache will choose the most appropriate model, which is the correct behaviour in virtually all cases.
// Possible values include mmap, shm, posix and win32.
// opcache.protect_memory bool                - Protects shared memory from unexpected writes while executing scripts. This is useful for internal debugging only.
// opcache.mmap_base string                   - The base used for shared memory segments on Windows. All PHP processes have to map shared memory into the same address space. Using this directive allows "Unable to reattach to base address" errors to be fixed.
// opcache.restrict_api string                - Allows calling OPcache API functions only from PHP scripts which path is started from specified string. The default "" means no restriction.
// opcache.file_update_protection string      - Prevents caching files that are less than this number of seconds old. It protects from caching of incompletely updated files. In case all file updates are atomic, performance can be increased by setting this to 0. This will allow files to be cached immediately.
// opcache.huge_code_pages bool               - Enables or disables copying of PHP code (text segment) into HUGE PAGES. This should improve performance, but requires appropriate OS configuration. Available on Linux as of PHP 7.0.0, and on FreeBSD as of PHP 7.4.0.
// opcache.lockfile_path string               - Absolute path used to store shared lockfiles (for *nix only)
// opcache.opt_debug_level string             - Produces opcode dumps for debugging different stages of optimizations. 0x10000 will output opcodes as the compiler produced them before any optimization occurs while 0x20000 will output optimized codes.
// opcache.file_cache string                  - Enables and sets the second level cache directory. It should improve performance when SHM memory is full, at server restart or SHM reset. The default "" disables file based caching.
// opcache.file_cache_only bool               - Enables or disables opcode caching in shared memory.
// Note: Prior to PHP 8.1.0, disabling this directive with an already populated file cache required to manually clear the file cache.
// opcache.file_cache_consistency_checks bool - Enables or disables checksum validation when script loaded from file cache.
// opcache.file_cache_fallback bool           - Implies opcache.file_cache_only=1 for a certain process that failed to reattach to the shared memory (for Windows only). Explicitly enabled file cache is required.
// Caution: Disabling this configuration option may prevent processes to start, and is therefore discouraged.
// opcache.validate_permission bool           - Validates the cached file permissions against the current user.
// opcache.validate_root bool                 - Prevents name collisions in chroot'ed environments. This should be enabled in all chroot'ed environments to prevent access to files outside the chroot.
// opcache.preload string                     - Specifies a PHP script that is going to be compiled and executed at server start-up, and which may preload other files, either by includeing them or by using the opcache_compile_file() function. All the entities (e.g. functions and classes) defined in these files will be available to requests out of the box, until the server is shut down.
// Note: Preloading is not supported on Windows.
// opcache.preload_user string                - Lets the preloading to be run as the specified system user. This is useful for servers that startup as root before switching to an unprivileged system user. Preloading as root is not allowed by default for security reasons, unless this directive is explicitly set to root.
// opcache.cache_id string                    - On Windows, all processes running the same PHP SAPI under the same user account having the same cache ID share a single OPcache instance. The value of the cache ID can be freely chosen.
// Tip: For IIS, different application pools can have their own OPcache instance by using the environment variable APP_POOL_ID as opcache.cache_id.
// opcache.jit string|int                     - For typical usage, this option accepts one of four string values:
// * disable: Completely disabled, cannot be enabled at runtime.
// * off: Disabled, but can be enabled at runtime.
// * tracing/on: Use tracing JIT. Enabled by default and recommended for most users.
// * function: Use function JIT.
// For advanced usage, this option accepts a 4-digit integer CRTO, where the digits mean:
// C (CPU-specific optimization flags)
//  * 0: Disable CPU-specific optimization.
//  * 1: Enable use of AVX, if the CPU supports it.
// R (register allocation)
//  * 0: Don't perform register allocation.
//  * 1: Perform block-local register allocation.
//  * 2: Perform global register allocation.
// T (trigger)
//  * 0: Compile all functions on script load.
//  * 1: Compile functions on first execution.
//  * 2: Profile functions on first request and compile the hottest functions afterwards.
//  * 3: Profile on the fly and compile hot functions.
//  * 4: Currently unused.
//  * 5: Use tracing JIT. Profile on the fly and compile traces for hot code segments.
// O (optimization level)
//  * 0: No JIT.
//  * 1: Minimal JIT (call standard VM handlers).
//  * 2: Inline VM handlers.
//  * 3: Use type inference.
//  * 4: Use call graph.
//  * 5: Optimize whole script.
// The "tracing" mode corresponds to CRTO = 1254, the "function" mode corresponds to CRTO = 1205.
// opcache.jit_buffer_size int                - The amount of shared memory to reserve for compiled JIT code. A zero value disables the JIT.
// When an int is used, the value is measured in bytes. Shorthand notation, as described in this FAQ, may also be used.
// opcache.jit_debug int                      - A bit mask specifying which JIT debug output to enable. For possible values, please consult > zend_jit.h (search for macro definitions beginning with ZEND_JIT_DEBUG).
// opcache.jit_bisect_limit int               - Debugging option that disables JIT compilation after compiling a certain number of functions. This may be helpful to bisect the source of a JIT miscompilation. Note: this option only works when JIT trigger is set to 0 (compile on script load) or 1 (compile on first execution), e.g., opcache.jit=1215. See more in opcache.jit option.
// opcache.jit_prof_threshold float           - When using the "profile on first request" trigger mode, this threshold determines whether a function is considered hot. The number of calls to the function divided by the number of calls to all functions must be above the threshold. For example, a threshold of 0.005 means that functions that made up more than 0.5% of all calls will be JIT compiled.
// opcache.jit_max_root_traces int            - Maximum number of root traces. The root trace is an execution flow taking one path through the code firstly, which is a unit of JIT compilation. JIT will not compile new code if it reaches this limit.
// opcache.jit_max_side_traces int            - Maximum number of side traces a root trace may have. The side trace is another execution flow that does not follow the path of compiled root trace. Side traces belonging to the same root trace will not be compiled if it reaches this limit.
// opcache.jit_max_exit_counters int          - Maximum number of side trace exit counters. This limits the total number of side traces there may be, across all root traces.
// opcache.jit_hot_loop int                   - After how many iterations a loop is considered hot. Valid value range is [0,255]; for any setting out of this range, e.g., -1 or 256, default value will be used instead. Specially, a zero value will disable JIT to trace and compile any loops.
// opcache.jit_hot_func int                   - After how many calls a function is considered hot. Valid value range is [0,255]; for any setting out of this range, e.g., -1 or 256, default value will be used instead. Specially, a zero value will disable JIT to trace and compile any functions.
// opcache.jit_hot_return int                 - After how many returns a return is considered hot. Valid value range is [0,255]; for any setting out of this range, e.g., -1 or 256, default value will be used instead. Specially, a zero value will disable JIT to trace and compile any returns.
// opcache.jit_hot_side_exit int              - After how many exits a side exit is considered hot. Valid value range is [0,255]; for any setting out of this range, e.g., -1 or 256, default value will be used instead. Specially, a zero value will disable JIT to trace and compile any side exits.
// opcache.jit_blacklist_root_trace int       - Maximum number of times the compilation of a root trace is attempted before it is blacklisted.
// opcache.jit_blacklist_side_trace int       - Maximum number of times the compilation of a side trace is attempted before it is blacklisted.
// opcache.jit_max_loop_unrolls int           - Maximum number of attempts to unroll a loop in a side trace, trying to reach the root trace and close the outer loop.
// opcache.jit_max_recursive_calls int        - Maximum number of unrolled recursive call loops.
// opcache.jit_max_recursive_returns int      - Maximum number of unrolled recursive return loops.
// opcache.jit_max_polymorphic_calls int      - Maximum number of attempts to inline polymorphic (dynamic or method) calls. Calls above this limit are treated as megamorphic and are not inlined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/opcache.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/opcache.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/opcache.setup.php
// INSTALLING_CONFIGURING - END
// 
// PRELOADING - BEGIN
// Preloading
// 
// As of PHP 7.4.0, PHP can be configured to preload scripts into the opcache when the engine starts. Any functions, classes, interfaces, or traits (but not constants) in those files will then become globally available for all requests without needing to be explicitly included. That trades convenience and performance (because the code is always available) for baseline memory usage. It also requires restarting the PHP process to clear pre-loaded scripts, meaning this feature is only practical to use in production, not in a development environment.
// Note that the optimal tradeoff between performance and memory may vary with the application. "Preload everything" may be the easiest strategy, but not necessarily the best strategy. Additionally, preloading is only useful when there is a persistent process from one request to another. That means while it can work in a CLI script if the opcache is enabled, it's generally pointless. The exception is when using preloading on FFI libraries.
// Note: Preloading is not supported on Windows.
// Configuring preloading involves two steps, and requires that the opcache be enabled. First, set the opcache.preload value in php.ini:
// [code]
// opcache.preload=preload.php
// [/code]
// preload.php is an arbitrary file that will run once at server startup (PHP-FPM, mod_php, etc.) and load code into persistent memory. In servers that startup as root before switching to an unprivileged system user, or if PHP will be run as root (not recommended), the opcache.preload_user value can specify the system user to run the preloading. Running preloading as root is not allowed by default. Set opcache.preload_user=root to explicitly allow it.
// In the preload.php script, any file referenced by include, include_once, require, require_once, or opcache_compile_file() will be parsed into persistent memory. In the following example, all .php files in the src directory will be preloaded, unless they are a Test file.
// [php]
// $directory = new RecursiveDirectoryIterator(__DIR__ . '/src');
// $fullTree = new RecursiveIteratorIterator($directory);
// $phpFiles = new RegexIterator($fullTree, '/.+((?<!Test)+\.php$)/i', RecursiveRegexIterator::GET_MATCH);
// 
// foreach ($phpFiles as $key => $file) {
//     require_once($file[0]);
// }
// [/php]
// Both include and opcache_compile_file() will work, but have different implications for how code gets handled.
// * include will execute code in the file, while opcache_compile_file() will not. That means only the former supports conditional declaration (functions declared inside an if-block).
// * Because include will execute code, nested included files will also be parsed and their declarations preloaded.
// * opcache_compile_file() can load files in any order. That is, if a.php defines class A and b.php defines class B that extends A, then opcache_compile_file() can load those two files in any order. When using include, however, a.php must be included first.
// * In either case, if a later script includes a file that has already been preloaded then its contents will still execute, but any symbols it defines will not be re-defined. Using include_once will not prevent the file from being included a second time. It may be necessary to load a file again in order to include global constants defined in it, as those are not handled by preloading.
// Which approach is better therefore depends on the desired behavior. With code that would otherwise use an autoloader, opcache_compile_file() allows for greater flexibility. With code that would otherwise be loaded manually, include will be more robust.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/opcache.preloading.php
// PRELOADING - END
// 
// OPCACHE_FUNCTIONS - BEGIN
// OPcache Functions
// 
// Table of Contents
// * opcache_compile_file      - Compiles and caches a PHP script without executing it
// * opcache_get_configuration - Get configuration information about the cache
// * opcache_get_status        - Get status information about the cache
// * opcache_invalidate        - Invalidates a cached script
// * opcache_is_script_cached  - Tells whether a script is cached in OPCache
// * opcache_reset             - Resets the contents of the opcode cache
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ref.opcache.php
// OPCACHE_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/book.opcache.php
// OPCACHE - END
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_COMPILE_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Compiles and caches a PHP script without executing it.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_2
// ============================== USING FUNCTIONS (1)
// opcache_compile_file() - PHP_5 >= PHP_5_5_5, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// ============================== CODE
function php_behaviour_opcache_opcache_compile_file($filename)
{
$return_opcache_compile_file = false;

// ========== OPCACHE_COMPILE_FILE - BEGIN
// ===== ABOUT
// Compiles and caches a PHP script without executing it
// ===== DESCRIPTION
// This function compiles a PHP script and adds it to the opcode cache without executing it. This can be used to prime the cache after a Web server restart by pre-caching files that will be included in later requests.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_5, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// ===== SYNTAX
// opcache_compile_file(string $filename): bool
// ===== CODE
$return_opcache_compile_file = opcache_compile_file(

$filename // string filename - The path to the PHP script to be compiled.

); // Return Values
// Returns true if filename was compiled successfully or false on failure.
// 
// Errors/Exceptions
// If filename cannot be loaded or compiled, an error of level E_WARNING is generated. You may use @ to suppress this warning.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.opcache-compile-file.php
// ========== OPCACHE_COMPILE_FILE - END

// SYNTAX:
// bool opcache_compile_file(string $filename)

return $return_opcache_compile_file; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_COMPILE_FILE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_GET_CONFIGURATION
// ============================== PUBLIC
// ============================== ABOUT
// Get configuration information about the cache.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_2
// ============================== USING FUNCTIONS (1)
// opcache_get_configuration() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// ============================== CODE
function php_behaviour_opcache_opcache_get_configuration()
{
$return_opcache_get_configuration = false;

// ========== OPCACHE_GET_CONFIGURATION - BEGIN
// ===== ABOUT
// Get configuration information about the cache
// ===== DESCRIPTION
// This function returns configuration information about the cache instance
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// ===== SYNTAX
// opcache_get_configuration(): array|false
// ===== CODE
$return_opcache_get_configuration = opcache_get_configuration(

// This function has no parameters.

); // Return Values
// Returns an array of information, including ini, blacklist and version
// 
// Errors/Exceptions
// If opcache.restrict_api is in use and the current path is in violation of the rule, an E_WARNING will be raised; no status information will be returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.opcache-get-configuration.php
// ========== OPCACHE_GET_CONFIGURATION - END

// SYNTAX:
// array|false opcache_get_configuration()

return $return_opcache_get_configuration; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_GET_CONFIGURATION
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_GET_STATUS
// ============================== PUBLIC
// ============================== ABOUT
// Get status information about the cache.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_2
// ============================== USING FUNCTIONS (1)
// opcache_get_status() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// ============================== CODE
function php_behaviour_opcache_opcache_get_status($include_scripts = true)
{
$return_opcache_get_status = false;

// ========== OPCACHE_GET_STATUS - BEGIN
// ===== ABOUT
// Get status information about the cache
// ===== DESCRIPTION
// This function returns state information about the in-memory cache instance. It will not return any information about the file cache.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache > PECL_ZendOpcache_7_0_2
// ===== SYNTAX
// opcache_get_status(bool $include_scripts = true): array|false
// ===== CODE
$return_opcache_get_status = opcache_get_status(

$include_scripts // bool include_scripts - Include script specific state information

); // Return Values
// Returns an array of information, optionally containing script specific state information, or false on failure.
// 
// Errors/Exceptions
// If opcache.restrict_api is in use and the current path is in violation of the rule, an E_WARNING will be raised; no status information will be returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.opcache-get-status.php
// ========== OPCACHE_GET_STATUS - END

// SYNTAX:
// array|false opcache_get_status(bool $include_scripts = true)

return $return_opcache_get_status; // array|false
}
// ============================== END
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_GET_STATUS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_INVALIDATE
// ============================== PUBLIC
// ============================== ABOUT
// Invalidates a cached script.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_0
// ============================== USING FUNCTIONS (1)
// opcache_invalidate() - PHP_5 >= 5_5_0, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_0
// ============================== CODE
function php_behaviour_opcache_opcache_invalidate($filename, $force = false)
{
$return_opcache_invalidate = false;

// ========== OPCACHE_INVALIDATE - BEGIN
// ===== ABOUT
// Invalidates a cached script
// ===== DESCRIPTION
// This function invalidates a particular script from the opcode cache. If force is unset or false, the script will only be invalidated if the modification time of the script is newer than the cached opcodes. This function only invalidates in-memory cache and not file cache.
// ===== SUPPORTED
// PHP_5 >= 5_5_0, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_0
// ===== SYNTAX
// opcache_invalidate(string $filename, bool $force = false): bool
// ===== CODE
$return_opcache_invalidate = opcache_invalidate(

$filename, // string filename - The path to the script being invalidated.

$force // bool force - If set to true, the script will be invalidated regardless of whether invalidation is necessary.

); // Return Values
// Returns true if the opcode cache for filename was invalidated or if there was nothing to invalidate, or false if the opcode cache is disabled.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.opcache-invalidate.php
// ========== OPCACHE_INVALIDATE - END

// SYNTAX:
// bool opcache_invalidate(string $filename, bool $force = false)

return $return_opcache_invalidate; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_INVALIDATE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_IS_SCRIPT_CACHED
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether a script is cached in OPCache.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_4
// ============================== USING FUNCTIONS (1)
// opcache_is_script_cached() - PHP_5 >= PHP_5_5_11, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_4
// ============================== CODE
function php_behaviour_opcache_opcache_is_script_cached($filename)
{
$return_opcache_is_script_cached = false;

// ========== OPCACHE_IS_SCRIPT_CACHED - BEGIN
// ===== ABOUT
// Tells whether a script is cached in OPCache
// ===== DESCRIPTION
// This function checks if a PHP script has been cached in OPCache. This can be used to more easily detect the "warming" of the cache for a particular script. This function only checks in-memory cache, not file cache.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_11, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_4
// ===== SYNTAX
// opcache_is_script_cached(string $filename): bool
// ===== CODE
$return_opcache_is_script_cached = opcache_is_script_cached(

$filename // string filename - The path to the PHP script to be checked.

); // Return Values
// Returns true if filename is cached in OPCache, false otherwise.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.opcache-is-script-cached.php
// ========== OPCACHE_IS_SCRIPT_CACHED - END

// SYNTAX:
// bool opcache_is_script_cached(string $filename)

return $return_opcache_is_script_cached; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_IS_SCRIPT_CACHED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_RESET
// ============================== PUBLIC
// ============================== ABOUT
// Resets the contents of the opcode cache.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_ZendOpcache_7_0_0
// ============================== USING FUNCTIONS (1)
// opcache_reset() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_0
// ============================== CODE
function php_behaviour_opcache_opcache_reset()
{
$return_opcache_reset = false;

// ========== OPCACHE_RESET - BEGIN
// ===== ABOUT
// Resets the contents of the opcode cache
// ===== DESCRIPTION
// This function resets the entire opcode cache. After calling opcache_reset(), all scripts will be reloaded and reparsed the next time they are hit. This function only resets in-memory cache, not the file cache.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8, PECL_ZendOpcache >= PECL_ZendOpcache_7_0_0
// ===== SYNTAX
// opcache_reset(): bool
// ===== CODE
$return_opcache_reset = opcache_reset(

// This function has no parameters.

); // Return Values
// Returns true if the opcode cache was reset, or false if the opcode cache is disabled or the restart is pending or in progress (see opcache_get_status()).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/function.opcache-reset.php
// ========== OPCACHE_RESET - END

// SYNTAX:
// bool opcache_reset()

return $return_opcache_reset; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OPCACHE_OPCACHE_RESET
// ==============================


// ============================== END
//     PHP_BEHAVIOUR_OPCACHE     
// ==============================
?>