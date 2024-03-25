<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_FILESYSTEM_FILESYSTEM - BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILES_VARIABLE - array php_filesystem_filesystem_files_variable()
// PHP_FILESYSTEM_FILESYSTEM_BASENAME - string php_filesystem_filesystem_basename(string $path, string $suffix = "")
// PHP_FILESYSTEM_FILESYSTEM_CHGRP - bool php_filesystem_filesystem_chgrp(string $filename, string|int $group)
// PHP_FILESYSTEM_FILESYSTEM_CHMOD - bool php_filesystem_filesystem_chmod(string $filename, int $permissions)
// PHP_FILESYSTEM_FILESYSTEM_CHOWN - bool php_filesystem_filesystem_chown(string $filename, string|int $user)
// PHP_FILESYSTEM_FILESYSTEM_CLEARSTATCACHE - void php_filesystem_filesystem_clearstatcache(bool $clear_realpath_cache = false, string $filename = "")
// PHP_FILESYSTEM_FILESYSTEM_COPY - bool php_filesystem_filesystem_copy(string $from, string $to, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_DELETE - bool php_filesystem_filesystem_delete(string $filename, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_DIRNAME - string php_filesystem_filesystem_dirname(string $path, int $levels = 1)
// PHP_FILESYSTEM_FILESYSTEM_DISK_FREE_SPACE - float|false php_filesystem_filesystem_disk_free_space(string $directory)
// PHP_FILESYSTEM_FILESYSTEM_DISK_TOTAL_SPACE - float|false php_filesystem_filesystem_disk_total_space(string $directory)
// PHP_FILESYSTEM_FILESYSTEM_DISKFREESPACE - float|false php_filesystem_filesystem_diskfreespace(string $directory)
// PHP_FILESYSTEM_FILESYSTEM_FCLOSE - bool php_filesystem_filesystem_fclose(resource $stream)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_FDATASYNC - bool php_filesystem_filesystem_fdatasync(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_FEOF - bool php_filesystem_filesystem_feof(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_FFLUSH - bool php_filesystem_filesystem_fflush(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_FGETC - string|false php_filesystem_filesystem_fgetc(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_FGETCSV - array|false php_filesystem_filesystem_fgetcsv(resource $stream, int $length = null, string $separator = ",", string $enclosure = "\"", string $escape = "\\")
// PHP_FILESYSTEM_FILESYSTEM_FGETS - string|false php_filesystem_filesystem_fgets(resource $stream, int $length = null)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_FGETSS - string php_filesystem_filesystem_fgetss(resource $handle, int $length, string $allowable_tags)
// PHP_FILESYSTEM_FILESYSTEM_FILE_EXISTS - bool php_filesystem_filesystem_file_exists(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILE_GET_CONTENTS - string|false php_filesystem_filesystem_file_get_contents(string $filename, bool $use_include_path = false, resource $context = null, int $offset = 0, int $length = null)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_FILE_PUT_CONTENTS - int|false php_filesystem_filesystem_file_put_contents(string $filename, mixed $data, int $flags = 0, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_FILE - array|false php_filesystem_filesystem_file(string $filename, int $flags = 0, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_FILEATIME - int|false php_filesystem_filesystem_fileatime(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILECTIME - int|false php_filesystem_filesystem_filectime(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILEGROUP - int|false php_filesystem_filesystem_filegroup(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILEINODE - int|false php_filesystem_filesystem_fileinode(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILEMTIME - int|false php_filesystem_filesystem_filemtime(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILEOWNER - int|false php_filesystem_filesystem_fileowner(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILEPERMS - int|false php_filesystem_filesystem_fileperms(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILESIZE - int|false php_filesystem_filesystem_filesize(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FILETYPE - string|false php_filesystem_filesystem_filetype(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_FLOCK - bool php_filesystem_filesystem_flock(resource $stream, int $operation, int& $would_block)
// PHP_FILESYSTEM_FILESYSTEM_FNMATCH - bool php_filesystem_filesystem_fnmatch(string $pattern, string $filename, int $flags = 0)
// PHP_FILESYSTEM_FILESYSTEM_FOPEN - resource|false php_filesystem_filesystem_fopen(string $filename, string $mode, bool $use_include_path = false, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_FPASSTHRU - int php_filesystem_filesystem_fpassthru(resource $stream)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_FPUTCSV - int|false php_filesystem_filesystem_fputcsv(resource $stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n")
// PHP_FILESYSTEM_FILESYSTEM_FPUTS - int|false php_filesystem_filesystem_fputs(resource $stream, string $data, int $length = null)
// PHP_FILESYSTEM_FILESYSTEM_FREAD - string|false php_filesystem_filesystem_fread(resource $stream, int $length)
// PHP_FILESYSTEM_FILESYSTEM_FSCANF - array|int|false|null php_filesystem_filesystem_fscanf(resource $stream, string $format, mixed& $vars)
// PHP_FILESYSTEM_FILESYSTEM_FSEEK - int php_filesystem_filesystem_fseek(resource $stream, int $offset, int $whence = SEEK_SET)
// PHP_FILESYSTEM_FILESYSTEM_FSTAT - array|false php_filesystem_filesystem_fstat(resource $stream)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_FSYNC - bool php_filesystem_filesystem_fsync(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_FTELL - int|false php_filesystem_filesystem_ftell(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_FTRUNCATE - bool php_filesystem_filesystem_ftruncate(resource $stream, int $size)
// PHP_FILESYSTEM_FILESYSTEM_FWRITE - int|false php_filesystem_filesystem_fwrite(resource $stream, string $data, int $length = null)
// PHP_FILESYSTEM_FILESYSTEM_GLOB - array|false php_filesystem_filesystem_glob(string $pattern, int $flags = 0)
// PHP_FILESYSTEM_FILESYSTEM_IS_DIR - bool php_filesystem_filesystem_is_dir(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_EXECUTABLE - bool php_filesystem_filesystem_is_executable(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_FILE - bool php_filesystem_filesystem_is_file(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_LINK - bool php_filesystem_filesystem_is_link(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_READABLE - bool php_filesystem_filesystem_is_readable(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_UPLOADED_FILE - bool php_filesystem_filesystem_is_uploaded_file(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_WRITABLE - bool php_filesystem_filesystem_is_writable(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_IS_WRITEABLE - bool php_filesystem_filesystem_is_writeable(string $filename)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_LCHGRP - bool php_filesystem_filesystem_lchgrp(string $filename, string|int $group)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_LCHOWN - bool php_filesystem_filesystem_lchown(string $filename, string|int $user)
// PHP_FILESYSTEM_FILESYSTEM_LINK - bool php_filesystem_filesystem_link(string $target, string $link)
// PHP_FILESYSTEM_FILESYSTEM_LINKINFO - int|false php_filesystem_filesystem_linkinfo(string $path)
// PHP_FILESYSTEM_FILESYSTEM_LSTAT - array|false php_filesystem_filesystem_lstat(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_MKDIR - bool php_filesystem_filesystem_mkdir(string $directory, int $permissions = 0777, bool $recursive = false, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_MOVE_UPLOADED_FILE - bool php_filesystem_filesystem_move_uploaded_file(string $from, string $to)
// PHP_FILESYSTEM_FILESYSTEM_PARSE_INI_FILE - array|false php_filesystem_filesystem_parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_PARSE_INI_STRING - array|false php_filesystem_filesystem_parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL)
// PHP_FILESYSTEM_FILESYSTEM_PATHINFO - array|string php_filesystem_filesystem_pathinfo(string $path, int $flags = PATHINFO_ALL)
// PHP_FILESYSTEM_FILESYSTEM_PCLOSE - int php_filesystem_filesystem_pclose(resource $handle)
// PHP_FILESYSTEM_FILESYSTEM_POPEN - resource|false php_filesystem_filesystem_popen(string $command, string $mode)
// PHP_FILESYSTEM_FILESYSTEM_READFILE - int|false php_filesystem_filesystem_readfile(string $filename, bool $use_include_path = false, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_READLINK - string|false php_filesystem_filesystem_readlink(string $path)
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_REALPATH_CACHE_GET - array php_filesystem_filesystem_realpath_cache_get()
// OFFLINE | PHP_FILESYSTEM_FILESYSTEM_REALPATH_CACHE_SIZE - int php_filesystem_filesystem_realpath_cache_size()
// PHP_FILESYSTEM_FILESYSTEM_REALPATH - string|false php_filesystem_filesystem_realpath(string $path)
// PHP_FILESYSTEM_FILESYSTEM_RENAME - bool php_filesystem_filesystem_rename(string $from, string $to, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_REWIND - bool php_filesystem_filesystem_rewind(resource $stream)
// PHP_FILESYSTEM_FILESYSTEM_RMDIR - bool php_filesystem_filesystem_rmdir(string $directory, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM_SET_FILE_BUFFER - int php_filesystem_filesystem_set_file_buffer(resource $stream, int $size)
// PHP_FILESYSTEM_FILESYSTEM_STAT - array|false php_filesystem_filesystem_stat(string $filename)
// PHP_FILESYSTEM_FILESYSTEM_SYMLINK - bool php_filesystem_filesystem_symlink(string $target, string $link)
// PHP_FILESYSTEM_FILESYSTEM_TEMPNAM - string|false php_filesystem_filesystem_tempnam(string $directory, string $prefix)
// PHP_FILESYSTEM_FILESYSTEM_TMPFILE - resource|false php_filesystem_filesystem_tmpfile()
// PHP_FILESYSTEM_FILESYSTEM_TOUCH - bool php_filesystem_filesystem_touch(string $filename, int $mtime = null, int $atime = null)
// PHP_FILESYSTEM_FILESYSTEM_UMASK - int php_filesystem_filesystem_umask(int $mask = null)
// PHP_FILESYSTEM_FILESYSTEM_UNLINK - bool php_filesystem_filesystem_unlink(string $filename, resource $context = null)
// PHP_FILESYSTEM_FILESYSTEM - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING VARIABLES (1)
// $_FILES - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== USING FUNCTIONS (83)
// basename() - PHP_4, PHP_5, PHP_7, PHP_8
// chgrp() - PHP_4, PHP_5, PHP_7, PHP_8
// chmod() - PHP_4, PHP_5, PHP_7, PHP_8
// chown() - PHP_4, PHP_5, PHP_7, PHP_8
// clearstatcache() - PHP_4, PHP_5, PHP_7, PHP_8
// copy() - PHP_4, PHP_5, PHP_7, PHP_8
// delete - unlink()
// dirname() - PHP_4, PHP_5, PHP_7, PHP_8
// disk_free_space() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// disk_total_space() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// diskfreespace() - PHP_4, PHP_5, PHP_7, PHP_8
// fclose() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | fdatasync() - PHP_8 >= PHP_8_1_0
// feof() - PHP_4, PHP_5, PHP_7, PHP_8
// fflush() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// fgetc() - PHP_4, PHP_5, PHP_7, PHP_8
// fgetcsv() - PHP_4, PHP_5, PHP_7, PHP_8
// fgets() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | fgetss() - PHP_4, PHP_5, PHP_7
// file_exists() - PHP_4, PHP_5, PHP_7, PHP_8
// file_get_contents() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | file_put_contents() - PHP_5, PHP_7, PHP_8
// file() - PHP_4, PHP_5, PHP_7, PHP_8
// fileatime() - PHP_4, PHP_5, PHP_7, PHP_8
// filectime() - PHP_4, PHP_5, PHP_7, PHP_8
// filegroup() - PHP_4, PHP_5, PHP_7, PHP_8
// fileinode() - PHP_4, PHP_5, PHP_7, PHP_8
// filemtime() - PHP_4, PHP_5, PHP_7, PHP_8
// fileowner() - PHP_4, PHP_5, PHP_7, PHP_8
// fileperms() - PHP_4, PHP_5, PHP_7, PHP_8
// filesize() - PHP_4, PHP_5, PHP_7, PHP_8
// filetype() - PHP_4, PHP_5, PHP_7, PHP_8
// flock() - PHP_4, PHP_5, PHP_7, PHP_8
// fnmatch() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// fopen() - PHP_4, PHP_5, PHP_7, PHP_8
// fpassthru() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | fputcsv() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// fputs() - PHP_4, PHP_5, PHP_7, PHP_8
// fread() - PHP_4, PHP_5, PHP_7, PHP_8
// fscanf() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// fseek() - PHP_4, PHP_5, PHP_7, PHP_8
// fstat() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | fsync() - PHP_8 >= PHP_8_1_0
// ftell() - PHP_4, PHP_5, PHP_7, PHP_8
// ftruncate() - PHP_4, PHP_5, PHP_7, PHP_8
// fwrite() - PHP_4, PHP_5, PHP_7, PHP_8
// glob() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// is_dir() - PHP_4, PHP_5, PHP_7, PHP_8
// is_executable() - PHP_4, PHP_5, PHP_7, PHP_8
// is_file() - PHP_4, PHP_5, PHP_7, PHP_8
// is_link() - PHP_4, PHP_5, PHP_7, PHP_8
// is_readable() - PHP_4, PHP_5, PHP_7, PHP_8
// is_uploaded_file() - PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// is_writable() - PHP_4, PHP_5, PHP_7, PHP_8
// is_writeable() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | lchgrp() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// OFFLINE | lchown() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// link() - PHP_4, PHP_5, PHP_7, PHP_8
// linkinfo() - PHP_4, PHP_5, PHP_7, PHP_8
// lstat() - PHP_4, PHP_5, PHP_7, PHP_8
// mkdir() - PHP_4, PHP_5, PHP_7, PHP_8
// move_uploaded_file() - PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// parse_ini_file() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | parse_ini_string() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// pathinfo() - PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// pclose() - PHP_4, PHP_5, PHP_7, PHP_8
// popen() - PHP_4, PHP_5, PHP_7, PHP_8
// readfile() - PHP_4, PHP_5, PHP_7, PHP_8
// readlink() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | realpath_cache_get() - PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// OFFLINE | realpath_cache_size() - PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// realpath() - PHP_4, PHP_5, PHP_7, PHP_8
// rename() - PHP_4, PHP_5, PHP_7, PHP_8
// rewind() - PHP_4, PHP_5, PHP_7, PHP_8
// rmdir() - PHP_4, PHP_5, PHP_7, PHP_8
// set_file_buffer() - PHP_4, PHP_5, PHP_7, PHP_8
// stat() - PHP_4, PHP_5, PHP_7, PHP_8
// symlink() - PHP_4, PHP_5, PHP_7, PHP_8
// tempnam() - PHP_4, PHP_5, PHP_7, PHP_8
// tmpfile() - PHP_4, PHP_5, PHP_7, PHP_8
// touch() - PHP_4, PHP_5, PHP_7, PHP_8
// umask() - PHP_4, PHP_5, PHP_7, PHP_8
// unlink() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (10)
// array
// string
// bool
// int
// void
// resource
// float
// false
// mixed
// null
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_FILESYSTEM_FILESYSTEM   
// ============================== ABOUT
// PHP Manual / Function Reference / File System Related Extensions / Filesystem
// URL: https://www.php.net/manual/en/book.filesystem.php
// ============================== DESCRIPTION
// FILESYSTEM
// FEATURES_HANDLING_FILE_UPLOADS
// APPENDICES_PHP_INI_DIRECTIVES_DESCRIPTION_OF_CORE_PHP_INI_DIRECTIVES
// 
// FILESYSTEM - BEGIN
// Filesystem
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// FILESYSTEM_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// No external libraries are needed to build this extension, but if you want PHP to support LFS (large files) on Linux, then you need to have a recent glibc and you need compile PHP with the following compiler flags: -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/intro.filesystem.php
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
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/filesystem.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/filesystem.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Filesystem and Streams Configuration Options
// Name                     | Default | Changeable     | Changelog
// allow_url_fopen          | "1"     | PHP_INI_SYSTEM |
// allow_url_include        | "0"     | PHP_INI_SYSTEM | Deprecated as of PHP 7.4.0.
// user_agent               | NULL    | PHP_INI_ALL    |
// default_socket_timeout   | "60"    | PHP_INI_ALL    |
// from                     | ""      | PHP_INI_ALL    |
// auto_detect_line_endings | "0"     | PHP_INI_ALL    | Deprecated as of PHP 8.1.0.
// sys_temp_dir             | ""      | PHP_INI_SYSTEM |
// 
// Here's a short explanation of the configuration directives.
// 
// allow_url_fopen bool          - This option enables the URL-aware fopen wrappers that enable accessing URL object like files. Default wrappers are provided for the access of remote files using the ftp or http protocol, some extensions like zlib may register additional wrappers.
// allow_url_include bool        - This option allows the use of URL-aware fopen wrappers with the following functions: include, include_once, require, require_once.
// Note: This setting requires allow_url_fopen to be on.
// user_agent string             - Define the user agent for PHP to send.
// default_socket_timeout int    - Default timeout (in seconds) for socket based streams. Specifying a negative value means an infinite timeout.
// from string                   - The email address to be used on unauthenticated FTP connections and as the value of From header for HTTP connections, when using the ftp and http wrappers, respectively.
// auto_detect_line_endings bool - When turned on, PHP will examine the data read by fgets() and file() to see if it is using Unix, MS-Dos or Macintosh line-ending conventions.
// This enables PHP to interoperate with Macintosh systems, but defaults to Off, as there is a very small performance penalty when detecting the EOL conventions for the first line, and also because people using carriage-returns as item separators under Unix systems would experience non-backwards-compatible behaviour.
// sys_temp_dir string           -
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/filesystem.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// The file system uses streams as their resource type. Streams are documented in its own reference chapter, Streams.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/filesystem.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/filesystem.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// SEEK_SET (int)                -
// SEEK_CUR (int)                -
// SEEK_END (int)                -
// LOCK_SH (int)                 -
// LOCK_EX (int)                 -
// LOCK_UN (int)                 -
// LOCK_NB (int)                 -
// GLOB_BRACE (int)              -
// GLOB_ONLYDIR (int)            -
// GLOB_MARK (int)               -
// GLOB_NOSORT (int)             -
// GLOB_NOCHECK (int)            -
// GLOB_NOESCAPE (int)           -
// GLOB_AVAILABLE_FLAGS (int)    -
// PATHINFO_DIRNAME (int)        -
// PATHINFO_BASENAME (int)       -
// PATHINFO_EXTENSION (int)      -
// PATHINFO_FILENAME (int)       -
// FILE_USE_INCLUDE_PATH (int)   - Search for filename in include_path.
// FILE_NO_DEFAULT_CONTEXT (int) -
// FILE_APPEND (int)             - Append content to existing file.
// FILE_IGNORE_NEW_LINES (int)   - Strip EOL characters.
// FILE_SKIP_EMPTY_LINES (int)   - Skip empty lines.
// FILE_BINARY (int)             - Binary mode.
// Note: This constant has no effect, and is only available for forward compatibility.
// FILE_TEXT (int)               - Text mode.
// Note: This constant has no effect, and is only available for forward compatibility.
// INI_SCANNER_NORMAL (int)      - Normal INI scanner mode.
// INI_SCANNER_RAW (int)         - Raw INI scanner mode.
// INI_SCANNER_TYPED (int)       - Typed INI scanner mode.
// FNM_NOESCAPE (int)            - Disable backslash escaping.
// FNM_PATHNAME (int)            - Slash in string only matches slash in the given pattern.
// FNM_PERIOD (int)              - Leading period in string must be exactly matched by period in the given pattern.
// FNM_CASEFOLD (int)            - Caseless match. Part of the GNU extension.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/filesystem.constants.php
// PREDEFINED_CONSTANTS - END
// 
// FILESYSTEM_FUNCTIONS - BEGIN
// Filesystem Functions
// 
// See Also
// For related functions, see also the Directory and Program Execution sections.
// For a list and explanation of the various URL wrappers that can be used as remote files, see also Supported Protocols and Wrappers.
// 
// Table of Contents
// * basename            - Returns trailing name component of path
// * chgrp               - Changes file group
// * chmod               - Changes file mode
// * chown               - Changes file owner
// * clearstatcache      - Clears file status cache
// * copy                - Copies file
// * delete              - See unlink or unset
// * dirname             - Returns a parent directory's path
// * disk_free_space     - Returns available space on filesystem or disk partition
// * disk_total_space    - Returns the total size of a filesystem or disk partition
// * diskfreespace       - Alias of disk_free_space
// * fclose              - Closes an open file pointer
// * fdatasync           - Synchronizes data (but not meta-data) to the file
// * feof                - Tests for end-of-file on a file pointer
// * fflush              - Flushes the output to a file
// * fgetc               - Gets character from file pointer
// * fgetcsv             - Gets line from file pointer and parse for CSV fields
// * fgets               - Gets line from file pointer
// * fgetss              - Gets line from file pointer and strip HTML tags
// * file_exists         - Checks whether a file or directory exists
// * file_get_contents   - Reads entire file into a string
// * file_put_contents   - Write data to a file
// * file                - Reads entire file into an array
// * fileatime           - Gets last access time of file
// * filectime           - Gets inode change time of file
// * filegroup           - Gets file group
// * fileinode           - Gets file inode
// * filemtime           - Gets file modification time
// * fileowner           - Gets file owner
// * fileperms           - Gets file permissions
// * filesize            - Gets file size
// * filetype            - Gets file type
// * flock               - Portable advisory file locking
// * fnmatch             - Match filename against a pattern
// * fopen               - Opens file or URL
// * fpassthru           - Output all remaining data on a file pointer
// * fputcsv             - Format line as CSV and write to file pointer
// * fputs               - Alias of fwrite
// * fread               - Binary-safe file read
// * fscanf              - Parses input from a file according to a format
// * fseek               - Seeks on a file pointer
// * fstat               - Gets information about a file using an open file pointer
// * fsync               - Synchronizes changes to the file (including meta-data)
// * ftell               - Returns the current position of the file read/write pointer
// * ftruncate           - Truncates a file to a given length
// * fwrite              - Binary-safe file write
// * glob                - Find pathnames matching a pattern
// * is_dir              - Tells whether the filename is a directory
// * is_executable       - Tells whether the filename is executable
// * is_file             - Tells whether the filename is a regular file
// * is_link             - Tells whether the filename is a symbolic link
// * is_readable         - Tells whether a file exists and is readable
// * is_uploaded_file    - Tells whether the file was uploaded via HTTP POST
// * is_writable         - Tells whether the filename is writable
// * is_writeable        - Alias of is_writable
// * lchgrp              - Changes group ownership of symlink
// * lchown              - Changes user ownership of symlink
// * link                - Create a hard link
// * linkinfo            - Gets information about a link
// * lstat               - Gives information about a file or symbolic link
// * mkdir               - Makes directory
// * move_uploaded_file  - Moves an uploaded file to a new location
// * parse_ini_file      - Parse a configuration file
// * parse_ini_string    - Parse a configuration string
// * pathinfo            - Returns information about a file path
// * pclose              - Closes process file pointer
// * popen               - Opens process file pointer
// * readfile            - Outputs a file
// * readlink            - Returns the target of a symbolic link
// * realpath_cache_get  - Get realpath cache entries
// * realpath_cache_size - Get realpath cache size
// * realpath            - Returns canonicalized absolute pathname
// * rename              - Renames a file or directory
// * rewind              - Rewind the position of a file pointer
// * rmdir               - Removes directory
// * set_file_buffer     - Alias of stream_set_write_buffer
// * stat                - Gives information about a file
// * symlink             - Creates a symbolic link
// * tempnam             - Create file with unique file name
// * tmpfile             - Creates a temporary file
// * touch               - Sets access and modification time of file
// * umask               - Changes the current umask
// * unlink              - Deletes a file
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/ref.filesystem.php
// FILESYSTEM_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-12)
// URL: https://www.php.net/manual/en/book.filesystem.php
// FILESYSTEM - END
// 
// FEATURES_HANDLING_FILE_UPLOADS - BEGIN
// Handling file uploads (PHP Manual / Features / Handling file uploads)
// 
// POST_METHOD_UPLOADS
// ERROR_MESSAGES_EXPLAINED
// COMMON_PITFALLS
// UPLOADING_MULTIPLE_FILES
// PUT_METHOD_SUPPORT
// 
// Table of Contents
// * POST method uploads
// * Error Messages Explained
// * Common Pitfalls
// * Uploading multiple files
// * PUT method support
// 
// POST_METHOD_UPLOADS - BEGIN
// POST method uploads
// 
// This feature lets people upload both text and binary files. With PHP's authentication and file manipulation functions, you have full control over who is allowed to upload and what is to be done with the file once it has been uploaded.
// PHP is capable of receiving file uploads from any RFC-1867 compliant browser.
//  Note: Related Configurations Note
//  See also the file_uploads, upload_max_filesize, upload_tmp_dir, post_max_size and max_input_time directives in php.ini
// PHP also supports PUT-method file uploads as used by Netscape Composer and W3C's Amaya clients. See the PUT Method Support for more details.
// [example]
// Example #1 File Upload Form
// A file upload screen can be built by creating a special form which looks something like this:
// [code]
// <!-- The data encoding type, enctype, MUST be specified as below -->
// <form enctype="multipart/form-data" action="__URL__" method="POST">
//     <!-- MAX_FILE_SIZE must precede the file input field -->
//     <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
//     <!-- Name of input element determines name in $_FILES array -->
//     Send this file: <input name="userfile" type="file" />
//     <input type="submit" value="Send File" />
// </form>
// [/code]
// The __URL__ in the above example should be replaced, and point to a PHP file.
// The MAX_FILE_SIZE hidden field (measured in bytes) must precede the file input field, and its value is the maximum filesize accepted by PHP. This form element should always be used as it saves users the trouble of waiting for a big file being transferred only to find that it was too large and the transfer failed. Keep in mind: fooling this setting on the browser side is quite easy, so never rely on files with a greater size being blocked by this feature. It is merely a convenience feature for users on the client side of the application. The PHP settings (on the server side) for maximum-size, however, cannot be fooled.
// Note: Be sure your file upload form has attribute enctype="multipart/form-data" otherwise the file upload will not work.
// [/example]
// The global $_FILES will contain all the uploaded file information. Its contents from the example form is as follows. Note that this assumes the use of the file upload name userfile, as used in the example script above. This can be any name.
// $_FILES['userfile']['name']      - The original name of the file on the client machine.
// $_FILES['userfile']['type']      - The mime type of the file, if the browser provided this information. An example would be "image/gif". This mime type is however not checked on the PHP side and therefore don't take its value for granted.
// $_FILES['userfile']['size']      - The size, in bytes, of the uploaded file.
// $_FILES['userfile']['tmp_name']  - The temporary filename of the file in which the uploaded file was stored on the server.
// $_FILES['userfile']['error']     - The error code associated with this file upload.
// $_FILES['userfile']['full_path'] - The full path as submitted by the browser. This value does not always contain a real directory structure, and cannot be trusted. Available as of PHP 8.1.0.
// Files will, by default be stored in the server's default temporary directory, unless another location has been given with the upload_tmp_dir directive in php.ini. The server's default directory can be changed by setting the environment variable TMPDIR in the environment in which PHP runs. Setting it using putenv() from within a PHP script will not work. This environment variable can also be used to make sure that other operations are working on uploaded files, as well.
// [example]
// Example #2 Validating file uploads
// See also the function entries for is_uploaded_file() and move_uploaded_file() for further information. The following example will process the file upload that came from a form.
// [php]
// $uploaddir = '/var/www/uploads/';
// $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
// 
// echo '<pre>';
// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//     echo "File is valid, and was successfully uploaded.\n";
// } else {
//     echo "Possible file upload attack!\n";
// }
// 
// echo 'Here is some more debugging info:';
// print_r($_FILES);
// 
// print "</pre>";
// 
// [/php]
// The PHP script which receives the uploaded file should implement whatever logic is necessary for determining what should be done with the uploaded file. You can, for example, use the $_FILES['userfile']['size'] variable to throw away any files that are either too small or too big. You could use the $_FILES['userfile']['type'] variable to throw away any files that didn't match a certain type criteria, but use this only as first of a series of checks, because this value is completely under the control of the client and not checked on the PHP side. Also, you could use $_FILES['userfile']['error'] and plan your logic according to the error codes. Whatever the logic, you should either delete the file from the temporary directory or move it elsewhere.
// If no file is selected for upload in your form, PHP will return $_FILES['userfile']['size'] as 0, and $_FILES['userfile']['tmp_name'] as none.
// The file will be deleted from the temporary directory at the end of the request if it has not been moved away or renamed.
// [/example]
// [example]
// Example #3 Uploading array of files
// PHP supports HTML array feature even with files.
// [code]
// <form action="" method="post" enctype="multipart/form-data">
// <p>Pictures:
// <input type="file" name="pictures[]" />
// <input type="file" name="pictures[]" />
// <input type="file" name="pictures[]" />
// <input type="submit" value="Send" />
// </p>
// </form>
// [/code]
// [php]
// foreach ($_FILES["pictures"]["error"] as $key => $error) {
//     if ($error == UPLOAD_ERR_OK) {
//         $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
//         // basename() may prevent filesystem traversal attacks;
//         // further validation/sanitation of the filename may be appropriate
//         $name = basename($_FILES["pictures"]["name"][$key]);
//         move_uploaded_file($tmp_name, "data/$name");
//     }
// }
// [/php]
// [/example]
// File upload progress bar can be implemented using Session Upload Progress.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/features.file-upload.post-method.php
// POST_METHOD_UPLOADS - END

// ERROR_MESSAGES_EXPLAINED - BEGIN
// Error Messages Explained
// 
// PHP returns an appropriate error code along with the file array. The error code can be found in the error segment of the file array that is created during the file upload by PHP. In other words, the error might be found in $_FILES['userfile']['error'].
// UPLOAD_ERR_OK         - Value: 0; There is no error, the file uploaded with success.
// UPLOAD_ERR_INI_SIZE   - Value: 1; The uploaded file exceeds the upload_max_filesize directive in php.ini.
// UPLOAD_ERR_FORM_SIZE  - Value: 2; The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.
// UPLOAD_ERR_PARTIAL    - Value: 3; The uploaded file was only partially uploaded.
// UPLOAD_ERR_NO_FILE    - Value: 4; No file was uploaded.
// UPLOAD_ERR_NO_TMP_DIR - Value: 6; Missing a temporary folder.
// UPLOAD_ERR_CANT_WRITE - Value: 7; Failed to write file to disk.
// UPLOAD_ERR_EXTENSION  - Value: 8; A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop; examining the list of loaded extensions with phpinfo() may help.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-26)
// URL: https://www.php.net/manual/en/features.file-upload.errors.php
// ERROR_MESSAGES_EXPLAINED - END

// COMMON_PITFALLS - BEGIN
// Common Pitfalls
// 
// The MAX_FILE_SIZE item cannot specify a file size greater than the file size that has been set in the upload_max_filesize in the php.ini file. The default is 2 megabytes.
// If a memory limit is enabled, a larger memory_limit may be needed. Make sure you set memory_limit large enough.
// If max_execution_time is set too small, script execution may be exceeded by the value. Make sure you set max_execution_time large enough.
// Note: max_execution_time only affects the execution time of the script itself. Any time spent on activity that happens outside the execution of the script such as system calls using system(), the sleep() function, database queries, time taken by the file upload process, etc. is not included when determining the maximum time that the script has been running.
// Warning: max_input_time sets the maximum time, in seconds, the script is allowed to receive input; this includes file uploads. For large or multiple files, or users on slower connections, the default of 60 seconds may be exceeded.
// If post_max_size is set too small, large files cannot be uploaded. Make sure you set post_max_size large enough.
// The max_file_uploads configuration setting controls the maximum number of files that can uploaded in one request. If more files are uploaded than the limit, then $_FILES will stop processing files once the limit is reached. For example, if max_file_uploads is set to 10, then $_FILES will never contain more than 10 items.
// Not validating which file you operate on may mean that users can access sensitive information in other directories.
// Due to the large amount of directory listing styles we cannot guarantee that files with exotic names (like containing spaces) are handled properly.
// A developer may not mix normal input fields and file upload fields in the same form variable (by using an input name like foo[]).
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-26)
// URL: https://www.php.net/manual/en/features.file-upload.common-pitfalls.php
// COMMON_PITFALLS - END

// UPLOADING_MULTIPLE_FILES - BEGIN
// Uploading multiple files
// 
// Multiple files can be uploaded using different name for input.
// It is also possible to upload multiple files simultaneously and have the information organized automatically in arrays for you. To do so, you need to use the same array submission syntax in the HTML form as you do with multiple selects and checkboxes:
// [example]
// Example #1 Uploading multiple files
// [code]
// <form action="file-upload.php" method="post" enctype="multipart/form-data">
//   Send these files:<br />
//   <input name="userfile[]" type="file" /><br />
//   <input name="userfile[]" type="file" /><br />
//   <input type="submit" value="Send files" />
// </form>
// [/code]
// When the above form is submitted, the arrays $_FILES['userfile'], $_FILES['userfile']['name'], and $_FILES['userfile']['size'] will be initialized.
// For instance, assume that the filenames /home/test/review.html and /home/test/xwp.out are submitted. In this case, $_FILES['userfile']['name'][0] would contain the value review.html, and $_FILES['userfile']['name'][1] would contain the value xwp.out. Similarly, $_FILES['userfile']['size'][0] would contain review.html's file size, and so forth.
// $_FILES['userfile']['name'][0], $_FILES['userfile']['tmp_name'][0], $_FILES['userfile']['size'][0], and $_FILES['userfile']['type'][0] are also set.
// Warning: The max_file_uploads configuration setting acts as a limit on the number of files that can be uploaded in one request. You will need to ensure that your form does not try to upload more files in one request than this limit.
// [/example]
// [example]
// Example #2 Uploading an entire directory
// In HTML file upload fields, it is possible to upload an entire directory with the webkitdirectory attribute. This feature is supported in most modern browsers.
// With the full_path information, it is possible to store the relative paths, or reconstruct the same directory in the server.
// [code]
// <form action="file-upload.php" method="post" enctype="multipart/form-data">
//   Send this directory:<br />
//   <input name="userfile[]" type="file" webkitdirectory multiple />
//   <input type="submit" value="Send files" />
// </form>
// [/code]
//  Warning: The webkitdirectory attribute is non-standard and is not on a standards track. Do not use it on production sites facing the Web: it will not work for every user. There may also be large incompatibilities between implementations and the behavior may change in the future.
//  PHP only parses the relative path information submitted by the browser/user-agent, and passes that information to the $_FILES array. There is no guarantee that the values in the full_path array contains a real directory structure, and the PHP application must not trust this information.
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/features.file-upload.multiple.php
// UPLOADING_MULTIPLE_FILES - END

// PUT_METHOD_SUPPORT - BEGIN
// PUT method support
// 
// PHP provides support for the HTTP PUT method used by some clients to store files on a server. PUT requests are much simpler than a file upload using POST requests and they look something like this:
// [code]
// PUT /path/filename.html HTTP/1.1
// [/code]
// This would normally mean that the remote client would like to save the content that follows as: /path/filename.html in your web tree. It is obviously not a good idea for Apache or PHP to automatically let everybody overwrite any files in your web tree. So, to handle such a request you have to first tell your web server that you want a certain PHP script to handle the request. In Apache you do this with the Script directive. It can be placed almost anywhere in your Apache configuration file. A common place is inside a <Directory> block or perhaps inside a <VirtualHost> block. A line like this would do the trick:
// [code]
// Script PUT /put.php
// [/code]
// This tells Apache to send all PUT requests for URIs that match the context in which you put this line to the put.php script. This assumes, of course, that you have PHP enabled for the .php extension and PHP is active. The destination resource for all PUT requests to this script has to be the script itself, not a filename the uploaded file should have.
// With PHP you would then do something like the following in your put.php. This would copy the contents of the uploaded file to the file myputfile.ext on the server. You would probably want to perform some checks and/or authenticate the user before performing this file copy.
// [example]
// Example #1 Saving HTTP PUT files
// [php]
// // PUT data comes in on the stdin stream
// $putdata = fopen("php://input", "r");
// 
// // Open a file for writing
// $fp = fopen("myputfile.ext", "w");
// 
// // Read the data 1 KB at a time
// // and write to the file
// while ($data = fread($putdata, 1024))
//   fwrite($fp, $data);
// 
// // Close the streams
// fclose($fp);
// fclose($putdata);
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-26)
// URL: https://www.php.net/manual/en/features.file-upload.put-method.php
// PUT_METHOD_SUPPORT - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-26)
// URL: https://www.php.net/manual/en/features.file-upload.php
// FEATURES_HANDLING_FILE_UPLOADS - END
// 
// APPENDICES_PHP_INI_DIRECTIVES_DESCRIPTION_OF_CORE_PHP_INI_DIRECTIVES - BEGIN
// Description of core php.ini directives (PHP Manual / Appendices / php.ini directives / Description of core php.ini directives)
// 
// realpath_cache_size int - Determines the size of the realpath cache to be used by PHP. This value should be increased on systems where PHP opens many files, to reflect the quantity of the file operations performed.
// The size represents the total number of bytes in the path strings stored, plus the size of the data associated with the cache entry. This means that in order to store longer paths in the cache, the cache size must be larger. This value does not directly control the number of distinct paths that can be cached.
// The size required for the cache entry data is system dependent.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-14)
// URL: https://www.php.net/manual/en/ini.core.php#ini.realpath-cache-size
// APPENDICES_PHP_INI_DIRECTIVES_DESCRIPTION_OF_CORE_PHP_INI_DIRECTIVES - END
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILES_VARIABLE
// ============================== PUBLIC
// ============================== ABOUT
// HTTP File Upload variables.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING VARIABLES (1)
// $_FILES - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_files_variable()
{
$return_files = null;

// ========== $_FILES - BEGIN
// ===== ABOUT
// HTTP File Upload variables
// ===== DESCRIPTION
// An associative array of items uploaded to the current script via the HTTP POST method. The structure of this array is outlined in the POST method uploads section.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_files = $_FILES;
// Notes
// Note: This is a 'superglobal', or automatic global, variable. This simply means that it is available in all scopes throughout a script. There is no need to do global $variable; to access it within functions or methods.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-07-26)
// URL: https://www.php.net/manual/en/reserved.variables.files.php
// ========== $_FILES - END

// SYNTAX:
// array $_FILES

return $return_files; // array
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILES_VARIABLE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_BASENAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns trailing name component of path.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// basename() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_basename($path, $suffix = "")
{
$return_basename = null;

// ========== BASENAME - BEGIN
// ===== ABOUT
// Returns trailing name component of path
// ===== DESCRIPTION
// Given a string containing the path to a file or directory, this function will return the trailing name component.
// Note: basename() operates naively on the input string, and is not aware of the actual filesystem, or path components such as "..".
// Caution: basename() is locale aware, so for it to see the correct basename with multibyte character paths, the matching locale must be set using the setlocale() function. If path contains characters which are invalid for the current locale, the behavior of basename() is undefined.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// basename(string $path, string $suffix = ""): string
// ===== CODE
$return_basename = basename(

$path, // string path - A path.
// On Windows, both slash (/) and backslash (\) are used as directory separator character. In other environments, it is the forward slash (/).

$suffix // string suffix - If the name component ends in suffix this will also be cut off.

); // Return Values
// Returns the base name of the given path.
// 
// [examples]
// Examples
// [example]
// Example #1 basename() example
// [php]
// echo "1) ".basename("/etc/sudoers.d", ".d").PHP_EOL;
// echo "2) ".basename("/etc/sudoers.d").PHP_EOL;
// echo "3) ".basename("/etc/passwd").PHP_EOL;
// echo "4) ".basename("/etc/").PHP_EOL;
// echo "5) ".basename(".").PHP_EOL;
// echo "6) ".basename("/");
// [/php]
// The above example will output:
// [result]
// 1) sudoers
// 2) sudoers.d
// 3) passwd
// 4) etc
// 5) .
// 6) 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.basename.php
// ========== BASENAME - END

// SYNTAX:
// string basename(string $path, string $suffix = "")

return $return_basename; // string
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_BASENAME
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_CHGRP
// ============================== PUBLIC
// ============================== ABOUT
// Changes file group.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// chgrp() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_chgrp($filename, $group)
{
$return_chgrp = false;

// ========== CHGRP - BEGIN
// ===== ABOUT
// Changes file group
// ===== DESCRIPTION
// Attempts to change the group of the file filename to group.
// Only the superuser may change the group of a file arbitrarily; other users may change the group of a file to any group of which that user is a member.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// chgrp(string $filename, string|int $group): bool
// ===== CODE
$return_chgrp = chgrp(

$filename, // string filename - Path to the file.

$group // string|int group - A group name or number.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// Note: On Windows, this function fails silently when applied on a regular file.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-11)
// URL: https://www.php.net/manual/en/function.chgrp.php
// ========== CHGRP - END

// SYNTAX:
// bool chgrp(string $filename, string|int $group)

return $return_chgrp; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_CHGRP
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_CHMOD
// ============================== PUBLIC
// ============================== ABOUT
// Changes file mode.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// chmod() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_chmod($filename, $permissions)
{
$return_chmod = false;

// ========== CHMOD - BEGIN
// ===== ABOUT
// Changes file mode
// ===== DESCRIPTION
// Attempts to change the mode of the specified file to that given in permissions.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// chmod(string $filename, int $permissions): bool
// ===== CODE
$return_chmod = chmod(

$filename, // string filename - Path to the file.

$permissions // int permissions - Note that permissions is not automatically assumed to be an octal value, so to ensure the expected operation, you need to prefix permissions with a zero (0). Strings such as "g+w" will not work properly.
// [php]
// chmod("/somedir/somefile", 755);   // decimal; probably incorrect
// chmod("/somedir/somefile", "u+rwx,go+rx"); // string; incorrect
// chmod("/somedir/somefile", 0755);  // octal; correct value of mode
// [/php]
// The permissions parameter consists of three octal number components specifying access restrictions for the owner, the user group in which the owner is in, and to everybody else in this order. One component can be computed by adding up the needed permissions for that target user base. Number 1 means that you grant execute rights, number 2 means that you make the file writeable, number 4 means that you make the file readable. Add up these numbers to specify needed rights. You can also read more about modes on Unix systems with 'man 1 chmod' and 'man 2 chmod'.
// [php]
// // Read and write for owner, nothing for everybody else
// chmod("/somedir/somefile", 0600);
// 
// // Read and write for owner, read for everybody else
// chmod("/somedir/somefile", 0644);
// 
// // Everything for owner, read and execute for others
// chmod("/somedir/somefile", 0755);
// 
// // Everything for owner, read and execute for owner's group
// chmod("/somedir/somefile", 0750);
// [/php]

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// Notes
// Note: The current user is the user under which PHP runs. It is probably not the same user you use for normal shell or FTP access. The mode can be changed only by user who owns the file on most systems.
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.chmod.php
// ========== CHMOD - END

// SYNTAX:
// bool chmod(string $filename, int $permissions)

return $return_chmod; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_CHMOD
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_CHOWN
// ============================== PUBLIC
// ============================== ABOUT
// Changes file owner.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// chown() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_chown($filename, $user)
{
$return_chown = false;

// ========== CHOWN - BEGIN
// ===== ABOUT
// Changes file owner
// ===== DESCRIPTION
// Attempts to change the owner of the file filename to user user. Only the superuser may change the owner of a file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// chown(string $filename, string|int $user): bool
// ===== CODE
$return_chown = chown(

$filename, // string filename - Path to the file.

$user // string|int user - A user name or number.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Simple chown() usage
// [php]
// 
// // File name and username to use
// $file_name= "foo.php";
// $path = "/home/sites/php.net/public_html/sandbox/" . $file_name ;
// $user_name = "root";
// 
// // Set the user
// chown($path, $user_name);
// 
// // Check the result
// $stat = stat($path);
// print_r(posix_getpwuid($stat['uid']));
// 
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [name] => root
//     [passwd] => x
//     [uid] => 0
//     [gid] => 0
//     [gecos] => root
//     [dir] => /root
//     [shell] => /bin/bash
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// Note: On Windows, this function fails silently when applied on a regular file.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.chown.php
// ========== CHOWN - END

// SYNTAX:
// bool chown(string $filename, string|int $user)

return $return_chown; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_CHOWN
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_CLEARSTATCACHE
// ============================== PUBLIC
// ============================== ABOUT
// Clears file status cache.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// clearstatcache() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_clearstatcache($clear_realpath_cache = false, $filename = "")
{

// ========== CLEARSTATCACHE - BEGIN
// ===== ABOUT
// Clears file status cache
// ===== DESCRIPTION
// When you use stat(), lstat(), or any of the other functions listed in the affected functions list (below), PHP caches the information those functions return in order to provide faster performance. However, in certain cases, you may want to clear the cached information. For instance, if the same file is being checked multiple times within a single script, and that file is in danger of being removed or changed during that script's operation, you may elect to clear the status cache. In these cases, you can use the clearstatcache() function to clear the information that PHP caches about a file.
// You should also note that PHP doesn't cache information about non-existent files. So, if you call file_exists() on a file that doesn't exist, it will return false until you create the file. If you create the file, it will return true even if you then delete the file. However unlink() clears the cache automatically.
// Note: This function caches information about specific filenames, so you only need to call clearstatcache() if you are performing multiple operations on the same filename and require the information about that particular file to not be cached.
// Affected functions include stat(), lstat(), file_exists(), is_writable(), is_readable(), is_executable(), is_file(), is_dir(), is_link(), filectime(), fileatime(), filemtime(), fileinode(), filegroup(), fileowner(), filesize(), filetype(), and fileperms().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// clearstatcache(bool $clear_realpath_cache = false, string $filename = ""): void
// ===== CODE
clearstatcache(

$clear_realpath_cache, // bool clear_realpath_cache - Whether to also clear the realpath cache.

$filename // string filename - Clear the realpath cache for a specific filename only; only used if clear_realpath_cache is true.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 clearstatcache() example
// [php]
// $file = 'output_log.txt';
// 
// function get_owner($file)
// {
//     $stat = stat($file);
//     $user = posix_getpwuid($stat['uid']);
//     return $user['name'];
// }
// 
// $format = "UID @ %s: %s\n";
// 
// printf($format, date('r'), get_owner($file));
// 
// chown($file, 'ross');
// printf($format, date('r'), get_owner($file));
// 
// clearstatcache();
// printf($format, date('r'), get_owner($file));
// [/php]
// The above example will output something similar to:
// [result]
// UID @ Sun, 12 Oct 2008 20:48:28 +0100: root
// UID @ Sun, 12 Oct 2008 20:48:28 +0100: root
// UID @ Sun, 12 Oct 2008 20:48:28 +0100: ross
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.clearstatcache.php
// ========== CLEARSTATCACHE - END

// SYNTAX:
// void clearstatcache(bool $clear_realpath_cache = false, string $filename = "")

// Return: void
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_CLEARSTATCACHE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_COPY
// ============================== PUBLIC
// ============================== ABOUT
// Copies file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// copy() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_copy($from, $to, $context = null)
{
$return_copy = false;

// ========== COPY - BEGIN
// ===== ABOUT
// Copies file
// ===== DESCRIPTION
// Makes a copy of the file from to to.
// If you wish to move a file, use the rename() function.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// copy(string $from, string $to, ?resource $context = null): bool
// ===== CODE
$return_copy = copy(

$from, // string $from - Path to the source file.

$to, // string $to - The destination path. If to is a URL, the copy operation may fail if the wrapper does not support overwriting of existing files.
// Warning: If the destination file already exists, it will be overwritten.

$context // resource $context - A valid context resource created with stream_context_create().

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 copy() example
// [php]
// $file = 'example.txt';
// $newfile = 'example.txt.bak';
// 
// if (!copy($file, $newfile)) {
//     echo "failed to copy $file...\n";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.copy.php
// ========== COPY - END

// SYNTAX:
// bool copy(string $from, string $to, resource $context = null)

return $return_copy; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_COPY
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_DELETE
// ============================== PUBLIC
// ============================== ABOUT
// Deletes a file.
// 
// delete - See unlink() or unset().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// unlink() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_delete($filename, $context = null)
{
$return_delete = false;

// ========== DELETE - BEGIN
// ===== ABOUT
// delete - See unlink() or unset()
// ===== DESCRIPTION
// There is no delete keyword or function in the PHP language. If you arrived at this page seeking to delete a file, try unlink(). To delete a variable from the local scope, check out unset().
// ===== SUPPORTED
// ===== SYNTAX
// ===== CODE
$return_delete = unlink(

$filename, // string $filename

$context // resource $context

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.delete.php
// ========== DELETE - END

// ========== UNLINK - BEGIN
// ===== ABOUT
// Deletes a file
// ===== DESCRIPTION
// Deletes filename. Similar to the Unix C unlink() function. An E_WARNING level error will be generated on failure.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// unlink(string $filename, ?resource $context = null): bool
// ===== CODE
// $return_unlink = unlink(

// $filename, // string filename - Path to the file.
// If the file is a symlink, the symlink will be deleted. On Windows, to delete a symlink to a directory, rmdir() has to be used instead.

// $context // resource context - A context stream resource.

// ); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 7.3.0   - On Windows, it is now possible to unlink() files with handles in use, while formerly that would fail. However, it is still not possible to re-create the unlinked file, until all handles to it have been closed.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic unlink() usage
// [php]
// $fh = fopen('test.html', 'a');
// fwrite($fh, '<h1>Hello world!</h1>');
// fclose($fh);
// 
// unlink('test.html');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.unlink.php
// ========== UNLINK - END

// SYNTAX:
// bool unlink(string $filename, resource $context = null)
// * There is no delete keyword or function in the PHP language - To delete a variable from the local scope, check out unset().

return $return_delete; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_DELETE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_DIRNAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns a parent directory's path.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// dirname() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_dirname($path, $levels = 1)
{
$return_dirname = null;

// ========== DIRNAME - BEGIN
// ===== ABOUT
// Returns a parent directory's path
// ===== DESCRIPTION
// Given a string containing the path of a file or directory, this function will return the parent directory's path that is levels up from the current directory.
// Note: dirname() operates naively on the input string, and is not aware of the actual filesystem, or path components such as "..".
//  Caution:
//  On Windows, dirname() assumes the currently set codepage, so for it to see the correct directory name with multibyte character paths, the matching codepage must be set. If path contains characters which are invalid for the current codepage, the behavior of dirname() is undefined.
//  On other systems, dirname() assumes path to be encoded in an ASCII compatible encoding. Otherwise the behavior of the the function is undefined.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// dirname(string $path, int $levels = 1): string
// ===== CODE
$return_dirname = dirname(

$path, // string path - A path.
// On Windows, both slash (/) and backslash (\) are used as directory separator character. In other environments, it is the forward slash (/).

$levels // int levels - The number of parent directories to go up.
// This must be an integer greater than 0.

); // Return Values
// Returns the path of a parent directory. If there are no slashes in path, a dot ('.') is returned, indicating the current directory. Otherwise, the returned string is path with any trailing /component removed.
//  Caution:
//  Be careful when using this function in a loop that can reach the top-level directory as this can result in an infinite loop.
//  [php]
//  dirname('.');    // Will return '.'.
//  dirname('/');    // Will return `\` on Windows and '/' on *nix systems.
//  dirname('\\');   // Will return `\` on Windows and '.' on *nix systems.
//  dirname('C:\\'); // Will return 'C:\' on Windows and '.' on *nix systems.
//  [/php]
// 
// Changelog
// Version - Description
// 7.0.0   - Added the optional levels parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 dirname() example
// [php]
// echo dirname("/etc/passwd") . PHP_EOL;
// echo dirname("/etc/") . PHP_EOL;
// echo dirname(".") . PHP_EOL;
// echo dirname("C:\\") . PHP_EOL;
// echo dirname("/usr/local/lib", 2);
// [/php]
// The above example will output something similar to:
// [result]
// /etc
// / (or \ on Windows)
// .
// C:\
// /usr
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.dirname.php
// ========== DIRNAME - END

// SYNTAX:
// string dirname(string $path, int $levels = 1)

return $return_dirname; // string
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_DIRNAME
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_DISK_FREE_SPACE
// ============================== PUBLIC
// ============================== ABOUT
// Returns available space on filesystem or disk partition.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// disk_free_space() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_disk_free_space($directory)
{
$return_disk_free_space = false;

// ========== DISK_FREE_SPACE - BEGIN
// ===== ABOUT
// Returns available space on filesystem or disk partition
// ===== DESCRIPTION
// Given a string containing a directory, this function will return the number of bytes available on the corresponding filesystem or disk partition.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// disk_free_space(string $directory): float|false
// ===== CODE
$return_disk_free_space = disk_free_space(

$directory // string directory - A directory of the filesystem or disk partition.
// Note: Given a file name instead of a directory, the behaviour of the function is unspecified and may differ between operating systems and PHP versions.

); // Return Values
// Returns the number of available bytes as a float or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 disk_free_space() example
// [php]
// // $df contains the number of bytes available on "/"
// $df = disk_free_space("/");
// 
// // On Windows:
// $df_c = disk_free_space("C:");
// $df_d = disk_free_space("D:");
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.disk-free-space.php
// ========== DISK_FREE_SPACE - END

// SYNTAX:
// float|false disk_free_space(string $directory)

return $return_disk_free_space; // float|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_DISK_FREE_SPACE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_DISK_TOTAL_SPACE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the total size of a filesystem or disk partition.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// disk_total_space() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_disk_total_space($directory)
{
$return_disk_total_space = false;

// ========== DISK_TOTAL_SPACE - BEGIN
// ===== ABOUT
// Returns the total size of a filesystem or disk partition
// ===== DESCRIPTION
// Given a string containing a directory, this function will return the total number of bytes on the corresponding filesystem or disk partition.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// disk_total_space(string $directory): float|false
// ===== CODE
$return_disk_total_space = disk_total_space(

$directory // string directory - A directory of the filesystem or disk partition.

); // Return Values
// Returns the total number of bytes as a float or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 disk_total_space() example
// [php]
// // $ds contains the total number of bytes available on "/"
// $ds = disk_total_space("/");
// 
// // On Windows:
// $ds = disk_total_space("C:");
// $ds = disk_total_space("D:");
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.disk-total-space.php
// ========== DISK_TOTAL_SPACE - END

// SYNTAX:
// float|false disk_total_space(string $directory)

return $return_disk_total_space; // float|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_DISK_TOTAL_SPACE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_DISKFREESPACE
// ============================== PUBLIC
// ============================== ABOUT
// Returns available space on filesystem or disk partition.
// 
// diskfreespace - Alias of disk_free_space().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// diskfreespace() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_diskfreespace($directory)
{
$return_diskfreespace = false;

// ========== DISKFREESPACE - BEGIN
// ===== ABOUT
// diskfreespace - Alias of disk_free_space()
// ===== DESCRIPTION
// This function is an alias of: disk_free_space().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_diskfreespace = diskfreespace(

$directory // string $directory

); // Return
// float|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.diskfreespace.php
// ========== DISKFREESPACE - END

// ========== DISK_FREE_SPACE - BEGIN
// ===== ABOUT
// Returns available space on filesystem or disk partition
// ===== DESCRIPTION
// Given a string containing a directory, this function will return the number of bytes available on the corresponding filesystem or disk partition.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// disk_free_space(string $directory): float|false
// ===== CODE
// $return_disk_free_space = disk_free_space(

// $directory // string directory - A directory of the filesystem or disk partition.
// Note: Given a file name instead of a directory, the behaviour of the function is unspecified and may differ between operating systems and PHP versions.

// ); // Return Values
// Returns the number of available bytes as a float or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 disk_free_space() example
// [php]
// // $df contains the number of bytes available on "/"
// $df = disk_free_space("/");
// 
// // On Windows:
// $df_c = disk_free_space("C:");
// $df_d = disk_free_space("D:");
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.disk-free-space.php
// ========== DISK_FREE_SPACE - END

// SYNTAX:
// float|false diskfreespace(string $directory)

return $return_diskfreespace; // float|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_DISKFREESPACE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FCLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Closes an open file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fclose() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fclose($stream)
{
$return_fclose = false;

// ========== FCLOSE - BEGIN
// ===== ABOUT
// Closes an open file pointer
// ===== DESCRIPTION
// The file pointed to by stream is closed.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fclose(resource $stream): bool
// ===== CODE
$return_fclose = fclose(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen().

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A simple fclose() example
// [php]
// 
// $handle = fopen('somefile.txt', 'r');
// 
// fclose($handle);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fclose.php
// ========== FCLOSE - END

// SYNTAX:
// bool fclose(resource $stream)

return $return_fclose; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FCLOSE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FDATASYNC
// ============================== OFFLINE
// ============================== ABOUT
// Synchronizes data (but not meta-data) to the file.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// fdatasync() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_filesystem_filesystem_fdatasync($stream)
{
$return_fdatasync = false;

// ========== FDATASYNC - BEGIN
// ===== ABOUT
// Synchronizes data (but not meta-data) to the file
// ===== DESCRIPTION
// This function synchronizes stream contents to storage media, just like fsync() does, but it does not synchronize file meta-data. Note that this function is only effectively different in POSIX systems. In Windows, this function is aliased to fsync().
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// fdatasync(resource $stream): bool
// ===== CODE
$return_fdatasync = fdatasync(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 fdatasync() example
// [php]
// 
// $file = 'test.txt';
// 
// $stream = fopen($file, 'w');
// fwrite($stream, 'test data');
// fwrite($stream, "\r\n");
// fwrite($stream, 'additional data');
// 
// fdatasync($stream);
// fclose($stream);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fdatasync.php
// ========== FDATASYNC - END

// SYNTAX:
// bool fdatasync(resource $stream)

return $return_fdatasync; // bool
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FDATASYNC
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FEOF
// ============================== PUBLIC
// ============================== ABOUT
// Tests for end-of-file on a file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// feof() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_feof($stream)
{
$return_feof = false;

// ========== FEOF - BEGIN
// ===== ABOUT
// Tests for end-of-file on a file pointer
// ===== DESCRIPTION
// Tests for end-of-file on a file pointer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// feof(resource $stream): bool
// ===== CODE
$return_feof = feof(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

); // Return Values
// Returns true if the file pointer is at EOF or an error occurs (including socket timeout); otherwise returns false.
// 
// Notes
//  Warning: If a connection opened by fsockopen() wasn't closed by the server, feof() will hang. To workaround this, see below example:
//  Example #1 Handling timeouts with feof()
//  [php]
//  function safe_feof($fp, &$start = NULL) {
//   $start = microtime(true);
//  
//   return feof($fp);
//  }
//  
//  // Assuming $fp is previously opened by fsockopen()
//  
//  $start = NULL;
//  $timeout = ini_get('default_socket_timeout');
//  
//  while(!safe_feof($fp, $start) && (microtime(true) - $start) < $timeout)
//  {
//   // Handle
//  }
//  [/php]
//  Warning: If the passed file pointer is not valid you may get an infinite loop, because feof() fails to return true.
//  Example #2 feof() example with an invalid file pointer
//  [php]
//  // if file can not be read or doesn't exist fopen function returns FALSE
//  $file = @fopen("no_such_file", "r");
//  
//  // FALSE from fopen will issue warning and result in infinite loop here
//  while (!feof($file)) {
//  }
//  
//  fclose($file);
//  [/php]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.feof.php
// ========== FEOF - END

// SYNTAX:
// bool feof(resource $stream)

return $return_feof; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FEOF
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FFLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Flushes the output to a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fflush() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fflush($stream)
{
$return_fflush = false;

// ========== FFLUSH - BEGIN
// ===== ABOUT
// Flushes the output to a file
// ===== DESCRIPTION
// This function forces a write of all buffered output to the resource pointed to by the file stream.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fflush(resource $stream): bool
// ===== CODE
$return_fflush = fflush(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 File write example using fflush()
// [php]
// $filename = 'bar.txt';
// 
// $file = fopen($filename, 'r+');
// rewind($file);
// fwrite($file, 'Foo');
// fflush($file);
// ftruncate($file, ftell($file));
// fclose($file);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fflush.php
// ========== FFLUSH - END

// SYNTAX:
// bool fflush(resource $stream)

return $return_fflush; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FFLUSH
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FGETC
// ============================== PUBLIC
// ============================== ABOUT
// Gets character from file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fgetc() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fgetc($stream)
{
$return_fgetc = false;

// ========== FGETC - BEGIN
// ===== ABOUT
// Gets character from file pointer
// ===== DESCRIPTION
// Gets a character from the given file pointer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fgetc(resource $stream): string|false
// ===== CODE
$return_fgetc = fgetc(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

); // Return Values
// Returns a string containing a single character read from the file pointed to by stream. Returns false on EOF.
// Warning: This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.
// 
// [examples]
// Examples
// [example]
// Example #1 A fgetc() example
// [php]
// $fp = fopen('somefile.txt', 'r');
// if (!$fp) {
//     echo 'Could not open file somefile.txt';
// }
// while (false !== ($char = fgetc($fp))) {
//     echo "$char\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is binary-safe.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fgetc.php
// ========== FGETC - END

// SYNTAX:
// string|false fgetc(resource $stream)

return $return_fgetc; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FGETC
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FGETCSV
// ============================== PUBLIC
// ============================== ABOUT
// Gets line from file pointer and parse for CSV fields.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fgetcsv() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fgetcsv($stream, $length = null, $separator = ",", $enclosure = "\"", $escape = "\\")
{
$return_fgetcsv = false;

// ========== FGETCSV - BEGIN
// ===== ABOUT
// Gets line from file pointer and parse for CSV fields
// ===== DESCRIPTION
// Similar to fgets() except that fgetcsv() parses the line it reads for fields in CSV format and returns an array containing the fields read.
// Note: The locale settings are taken into account by this function. If LC_CTYPE is e.g. en_US.UTF-8, files in one-byte encodings may be read wrongly by this function.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fgetcsv(
//    resource $stream,
//    ?int $length = null,
//    string $separator = ",",
//    string $enclosure = "\"",
//    string $escape = "\\"
// ): array|false
// ===== CODE
$return_fgetcsv = fgetcsv(

$stream, // resource stream - A valid file pointer to a file successfully opened by fopen(), popen(), or fsockopen().

$length, // int length - Must be greater than the longest line (in characters) to be found in the CSV file (allowing for trailing line-end characters). Otherwise the line is split in chunks of length characters, unless the split would occur inside an enclosure.
// Omitting this parameter (or setting it to 0, or null in PHP 8.0.0 or later) the maximum line length is not limited, which is slightly slower.

$separator, // string separator - The optional separator parameter sets the field separator (one single-byte character only).

$enclosure, // string enclosure - The optional enclosure parameter sets the field enclosure character (one single-byte character only).

$escape // string escape - The optional escape parameter sets the escape character (at most one single-byte character). An empty string ("") disables the proprietary escape mechanism.
// Note: Usually an enclosure character is escaped inside a field by doubling it; however, the escape character can be used as an alternative. So for the default parameter values "" and \" have the same meaning. Other than allowing to escape the enclosure character the escape character has no special meaning; it isn't even meant to escape itself.

); // Return Values
// Returns an indexed array containing the fields read on success, or false on failure.
// Note: A blank line in a CSV file will be returned as an array comprising a single null field, and will not be treated as an error.
// Note: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.
// 
// Changelog
// Version - Description
// 8.0.0   - length is now nullable.
// 7.4.0   - The escape parameter now also accepts an empty string to disable the proprietary escape mechanism.
// 
// [examples]
// Examples
// [example]
// Example #1 Read and print the entire contents of a CSV file
// [php]
// $row = 1;
// if (($handle = fopen("test.csv", "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num fields in line $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "<br />\n";
//         }
//     }
//     fclose($handle);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fgetcsv.php
// ========== FGETCSV - END

// SYNTAX:
// array|false fgetcsv(resource $stream, int $length = null, string $separator = ",", string $enclosure = "\"", string $escape = "\\")

return $return_fgetcsv; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FGETCSV
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FGETS
// ============================== PUBLIC
// ============================== ABOUT
// Gets line from file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fgets() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fgets($stream, $length = null)
{
$return_fgets = false;

// ========== FGETS - BEGIN
// ===== ABOUT
// Gets line from file pointer
// ===== DESCRIPTION
// Gets a line from file pointer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fgets(resource $stream, ?int $length = null): string|false
// ===== CODE
$return_fgets = fgets(

$stream, // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

$length // int length - Reading ends when length - 1 bytes have been read, or a newline (which is included in the return value), or an EOF (whichever comes first). If no length is specified, it will keep reading from the stream until it reaches the end of the line.

); // Return Values
// Returns a string of up to length - 1 bytes read from the file pointed to by stream. If there is no more data to read in the file pointer, then false is returned.
// If an error occurs, false is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Reading a file line by line
// [php]
// $fp = @fopen("/tmp/inputfile.txt", "r");
// if ($fp) {
//     while (($buffer = fgets($fp, 4096)) !== false) {
//         echo $buffer;
//     }
//     if (!feof($fp)) {
//         echo "Error: unexpected fgets() fail\n";
//     }
//     fclose($fp);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.
// Note: People used to the 'C' semantics of fgets() should note the difference in how EOF is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fgets.php
// ========== FGETS - END

// SYNTAX:
// string|false fgets(resource $stream, int $length = null)

return $return_fgets; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FGETS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FGETSS
// ============================== OFFLINE
// ============================== ABOUT
// Gets line from file pointer and strip HTML tags.
// 
// Warning: This function has been DEPRECATED as of PHP 7.3.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_7
// ============================== USING FUNCTIONS (1)
// fgetss() - PHP_4, PHP_5, PHP_7
// ============================== CODE
/*
function php_filesystem_filesystem_fgetss($handle, $length, $allowable_tags)
{
$return_fgetss = null;

// ========== FGETSS - BEGIN
// ===== ABOUT
// Gets line from file pointer and strip HTML tags
// Warning: This function has been DEPRECATED as of PHP 7.3.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Identical to fgets(), except that fgetss() attempts to strip any NUL bytes, HTML and PHP tags from the text it reads. The function retains the parsing state from call to call, and as such is not equivalent to calling strip_tags() on the return value of fgets().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7
// ===== SYNTAX
// fgetss(resource $handle, int $length = ?, string $allowable_tags = ?): string
// ===== CODE
$return_fgetss = fgetss(

$handle, // resource handle - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

$length, // int length - Length of the data to be retrieved.

$allowable_tags // string allowable_tags - You can use the optional third parameter to specify tags which should not be stripped. See strip_tags() for details regarding allowable_tags.

); // Return Values
// Returns a string of up to length - 1 bytes read from the file pointed to by handle, with all HTML and PHP code stripped.
// If an error occurs, returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 Reading a PHP file line-by-line
// [php]
// $str = <<<EOD
// <html><body>
//  <p>Welcome! Today is the <?php echo(date('jS')); ?> of <?= date('F'); ?>.</p>
// </body></html>
// Text outside of the HTML block.
// EOD;
// file_put_contents('sample.php', $str);
// 
// $handle = @fopen("sample.php", "r");
// if ($handle) {
//     while (!feof($handle)) {
//         $buffer = fgetss($handle, 4096);
//         echo $buffer;
//     }
//     fclose($handle);
// }
// [/php]
The above example will output something similar to:
// [result]
//  Welcome! Today is the  of .
// 
// Text outside of the HTML block.
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fgetss.php
// ========== FGETSS - END

// SYNTAX:
// string fgetss(resource $handle, int $length, string $allowable_tags)

return $return_fgetss; // string
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FGETSS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILE_EXISTS
// ============================== PUBLIC
// ============================== ABOUT
// Checks whether a file or directory exists.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// file_exists() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_file_exists($filename)
{
$return_file_exists = false;

// ========== FILE_EXISTS - BEGIN
// ===== ABOUT
// Checks whether a file or directory exists
// ===== DESCRIPTION
// Checks whether a file or directory exists.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// file_exists(string $filename): bool
// ===== CODE
$return_file_exists = file_exists(

$filename // string $filename - Path to the file or directory.
// On windows, use //computername/share/filename or \\computername\share\filename to check files on network shares.

); // Return Values
// Returns true if the file or directory specified by filename exists; false otherwise.
// Note: This function will return false for symlinks pointing to non-existing files.
// Note: The check is done using the real UID/GID instead of the effective one.
// Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Testing whether a file exists
// [php]
// $filename = '/path/to/foo.txt';
// 
// if (file_exists($filename)) {
//     echo "The file $filename exists";
// } else {
//     echo "The file $filename does not exist";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.file-exists.php
// ========== FILE_EXISTS - END

// SYNTAX:
// bool file_exists(string $filename)

return $return_file_exists; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILE_EXISTS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILE_GET_CONTENTS
// ============================== PUBLIC
// ============================== ABOUT
// Reads entire file into a string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// file_get_contents() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_file_get_contents($filename, $use_include_path = false, $context = null, $offset = 0, $length = null)
{
$return_file_get_contents = false;

// ========== FILE_GET_CONTENTS - BEGIN
// ===== ABOUT
// Reads entire file into a string
// ===== DESCRIPTION
// This function is similar to file(), except that file_get_contents() returns the file in a string, starting at the specified offset up to length bytes. On failure, file_get_contents() will return false.
// file_get_contents() is the preferred way to read the contents of a file into a string. It will use memory mapping techniques if supported by your OS to enhance performance.
// Note: If you're opening a URI with special characters, such as spaces, you need to encode the URI with urlencode().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// file_get_contents(
//    string $filename,
//    bool $use_include_path = false,
//    ?resource $context = null,
//    int $offset = 0,
//    ?int $length = null
// ): string|false
// ===== CODE
$return_file_get_contents = file_get_contents(

$filename, // string filename - Name of the file to read.

$use_include_path, // bool use_include_path - 
// Note: The FILE_USE_INCLUDE_PATH constant can be used to trigger include path search. This is not possible if strict typing is enabled, since FILE_USE_INCLUDE_PATH is an int. Use true instead.

$context, // resource context - A valid context resource created with stream_context_create(). If you don't need to use a custom context, you can skip this parameter by null.

$offset, // int offset - The offset where the reading starts on the original stream. Negative offsets count from the end of the stream.
// Seeking (offset) is not supported with remote files. Attempting to seek on non-local files may work with small offsets, but this is unpredictable because it works on the buffered stream.

$length // int length - Maximum length of data read. The default is to read until end of file is reached. Note that this parameter is applied to the stream processed by the filters.

); // Return Values
// The function returns the read data or false on failure.
// Warning: This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.
// 
// Errors/Exceptions
// An E_WARNING level error is generated if filename cannot be found, length is less than zero, or if seeking to the specified offset in the stream fails.
// When file_get_contents() is called on a directory, an E_WARNING level error is generated on Windows, and as of PHP 7.4 on other operating systems as well.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now.
// 7.1.0   - Support for negative offsets has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 Get and output the source of the homepage of a website
// [php]
// $homepage = file_get_contents('http://www.example.com/');
// echo $homepage;
// [/php]
// [/example]
// [example]
// Example #2 Searching within the include_path
// [php]
// // If strict types are enabled i.e. declare(strict_types=1);
// $file = file_get_contents('./people.txt', true);
// // Otherwise
// $file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
// [/php]
// [/example]
// [example]
// Example #3 Reading a section of a file
// [php]
// // Read 14 characters starting from the 21st character
// $section = file_get_contents('./people.txt', FALSE, NULL, 20, 14);
// var_dump($section);
// [/php]
// The above example will output something similar to:
// [result]
// string(14) "lle Bjori Ro" 
// [/result]
// [/example]
// [example]
// Example #4 Using stream contexts
// [php]
// // Create a stream
// $opts = array(
//   'http'=>array(
//     'method'=>"GET",
//     'header'=>"Accept-language: en\r\n" .
//               "Cookie: foo=bar\r\n"
//   )
// );
// 
// $context = stream_context_create($opts);
// 
// // Open the file using the HTTP headers set above
// $file = file_get_contents('http://www.example.com/', false, $context);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is binary-safe.
// Tip: A URL can be used as a filename with this function if the fopen wrappers have been enabled. See fopen() for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.
// Warning: When using SSL, Microsoft IIS will violate the protocol by closing the connection without sending a close_notify indicator. PHP will report this as "SSL: Fatal Protocol Error" when you reach the end of the data. To work around this, the value of error_reporting should be lowered to a level that does not include warnings. PHP can detect buggy IIS server software when you open the stream using the https:// wrapper and will suppress the warning. When using fsockopen() to create an ssl:// socket, the developer is responsible for detecting and suppressing this warning.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.file-get-contents.php
// ========== FILE_GET_CONTENTS - END

// SYNTAX:
// string|false file_get_contents(string $filename, bool $use_include_path = false, resource $context = null, int $offset = 0, int $length = null)

return $return_file_get_contents; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILE_GET_CONTENTS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILE_PUT_CONTENTS
// ============================== PUBLIC
// ============================== ABOUT
// Write data to a file.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// file_put_contents() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_file_put_contents($filename, $data, $flags = 0, $context = null)
{
$return_file_put_contents = false;

// ========== FILE_PUT_CONTENTS - BEGIN
// ===== ABOUT
// Write data to a file
// ===== DESCRIPTION
// This function is identical to calling fopen(), fwrite() and fclose() successively to write data to a file.
// If filename does not exist, the file is created. Otherwise, the existing file is overwritten, unless the FILE_APPEND flag is set.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// file_put_contents(
//    string $filename,
//    mixed $data,
//    int $flags = 0,
//    ?resource $context = null
// ): int|false
// ===== CODE
$return_file_put_contents = file_put_contents(

$filename, // string filename - Path to the file where to write the data.

$data, // mixed data - The data to write. Can be either a string, an array or a stream resource.
// If data is a stream resource, the remaining buffer of that stream will be copied to the specified file. This is similar with using stream_copy_to_stream().
// You can also specify the data parameter as a single dimension array. This is equivalent to file_put_contents($filename, implode('', $array)).

$flags, // int flags - The value of flags can be any combination of the following flags, joined with the binary OR (|) operator.
// 
// Available flags
// Flag                  - Description
// FILE_USE_INCLUDE_PATH - Search for filename in the include directory. See include_path for more information.
// FILE_APPEND           - If file filename already exists, append the data to the file instead of overwriting it.
// LOCK_EX               - Acquire an exclusive lock on the file while proceeding to the writing. In other words, a flock() call happens between the fopen() call and the fwrite() call. This is not identical to an fopen() call with mode "x".

$context // resource context - A valid context resource created with stream_context_create().

); // Return Values
// This function returns the number of bytes that were written to the file, or false on failure.
// Warning: This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.
// 
// [examples]
// Examples
// [example]
// Example #1 Simple usage example
// [php]
// $file = 'people.txt';
// // Open the file to get existing content
// $current = file_get_contents($file);
// // Append a new person to the file
// $current .= "John Smith\n";
// // Write the contents back to the file
// file_put_contents($file, $current);
// [/php]
// [/example]
// [example]
// Example #2 Using flags
// [php]
// $file = 'people.txt';
// // The new person to add to the file
// $person = "John Smith\n";
// // Write the contents to the file, 
// // using the FILE_APPEND flag to append the content to the end of the file
// // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
// file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is binary-safe.
// Tip: A URL can be used as a filename with this function if the fopen wrappers have been enabled. See fopen() for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.file-put-contents.php
// ========== FILE_PUT_CONTENTS - END

// SYNTAX:
// int|false file_put_contents(string $filename, mixed $data, int $flags = 0, resource $context = null)

return $return_file_put_contents; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILE_PUT_CONTENTS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Reads entire file into an array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// file() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_file($filename, $flags = 0, $context = null)
{
$return_file = false;

// ========== FILE - BEGIN
// ===== ABOUT
// Reads entire file into an array
// ===== DESCRIPTION
// Reads an entire file into an array.
// Note: You can use file_get_contents() to return the contents of a file as a string.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// file(string $filename, int $flags = 0, ?resource $context = null): array|false
// ===== CODE
$return_file = file(

$filename, // string filename - Path to the file.
// Tip: A URL can be used as a filename with this function if the fopen wrappers have been enabled. See fopen() for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.

$flags, // int flags       - The optional parameter flags can be one, or more, of the following constants:
// FILE_USE_INCLUDE_PATH   - Search for the file in the include_path.
// FILE_IGNORE_NEW_LINES   - Omit newline at the end of each array element
// FILE_SKIP_EMPTY_LINES   - Skip empty lines
// FILE_NO_DEFAULT_CONTEXT - Don't use the default context

$context // resource context - A context stream resource.

); // Return Values
// Returns the file in an array. Each element of the array corresponds to a line in the file, with the newline still attached. Upon failure, file() returns false.
// Note: Each line in the resulting array will include the line ending, unless FILE_IGNORE_NEW_LINES is used.
// Note: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if the file does not exist.
// 
// [examples]
// Examples
// [example]
// Example #1 file() example
// [php]
// // Get a file into an array.  In this example we'll go through HTTP to get
// // the HTML source of a URL.
// $lines = file('http://www.example.com/');
// 
// // Loop through our array, show HTML source as HTML source; and line numbers too.
// foreach ($lines as $line_num => $line) {
//     echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
// }
// 
// // Using the optional flags parameter
// $trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: When using SSL, Microsoft IIS will violate the protocol by closing the connection without sending a close_notify indicator. PHP will report this as "SSL: Fatal Protocol Error" when you reach the end of the data. To work around this, the value of error_reporting should be lowered to a level that does not include warnings. PHP can detect buggy IIS server software when you open the stream using the https:// wrapper and will suppress the warning. When using fsockopen() to create an ssl:// socket, the developer is responsible for detecting and suppressing this warning.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.file.php
// ========== FILE - END

// SYNTAX:
// array|false file(string $filename, int $flags = 0, resource $context = null)

return $return_file; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILEATIME
// ============================== PUBLIC
// ============================== ABOUT
// Gets last access time of file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fileatime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fileatime($filename)
{
$return_fileatime = false;

// ========== FILEATIME - BEGIN
// ===== ABOUT
// Gets last access time of file
// ===== DESCRIPTION
// Gets the last access time of the given file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fileatime(string $filename): int|false
// ===== CODE
$return_fileatime = fileatime(

$filename // string filename - Path to the file.

); // Return Values
// Returns the time the file was last accessed, or false on failure. The time is returned as a Unix timestamp.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 fileatime() example
// [php]
// 
// // outputs e.g.  somefile.txt was last accessed: December 29 2002 22:16:23.
// 
// $filename = 'somefile.txt';
// if (file_exists($filename)) {
//     echo "$filename was last accessed: " . date("F d Y H:i:s.", fileatime($filename));
// }
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  The atime of a file is supposed to change whenever the data blocks of a file are being read. This can be costly performance-wise when an application regularly accesses a very large number of files or directories.
//  Some Unix filesystems can be mounted with atime updates disabled to increase the performance of such applications; USENET news spools are a common example. On such filesystems this function will be useless.
// Note: Note that time resolution may differ from one file system to another.
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fileatime.php
// ========== FILEATIME - END

// SYNTAX:
// int|false fileatime(string $filename)

return $return_fileatime; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILEATIME
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILECTIME
// ============================== PUBLIC
// ============================== ABOUT
// Gets inode change time of file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// filectime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_filectime($filename)
{
$return_filectime = false;

// ========== FILECTIME - BEGIN
// ===== ABOUT
// Gets inode change time of file
// ===== DESCRIPTION
// Gets the inode change time of a file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// filectime(string $filename): int|false
// ===== CODE
$return_filectime = filectime(

$filename // string filename - Path to the file.

); // Return Values
// Returns the time the file was last changed, or false on failure. The time is returned as a Unix timestamp.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 A filectime() example
// [php]
// 
// // outputs e.g.  somefile.txt was last changed: December 29 2002 22:16:23.
// 
// $filename = 'somefile.txt';
// if (file_exists($filename)) {
//     echo "$filename was last changed: " . date("F d Y H:i:s.", filectime($filename));
// }
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: In most Unix filesystems, a file is considered changed when its inode data is changed; that is, when the permissions, owner, group, or other metadata from the inode is updated. See also filemtime() (which is what you want to use when you want to create "Last Modified" footers on web pages) and fileatime().
// Note: Note also that in some Unix texts the ctime of a file is referred to as being the creation time of the file. This is wrong. There is no creation time for Unix files in most Unix filesystems.
// Note: Note that time resolution may differ from one file system to another.
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.filectime.php
// ========== FILECTIME - END

// SYNTAX:
// int|false filectime(string $filename)

return $return_filectime; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILECTIME
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILEGROUP
// ============================== PUBLIC
// ============================== ABOUT
// Gets file group.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// filegroup() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_filegroup($filename)
{
$return_filegroup = false;

// ========== FILEGROUP - BEGIN
// ===== ABOUT
// Gets file group
// ===== DESCRIPTION
// Gets the file group. The group ID is returned in numerical format, use posix_getgrgid() to resolve it to a group name.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// filegroup(string $filename): int|false
// ===== CODE
$return_filegroup = filegroup(

$filename // string filename - Path to the file.

); // Return Values
// Returns the group ID of the file, or false if an error occurs. The group ID is returned in numerical format, use posix_getgrgid() to resolve it to a group name. Upon failure, false is returned.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Finding the group of a file
// [php]
// $filename = 'index.php';
// print_r(posix_getgrgid(filegroup($filename)));
// [/php]
// [/example]
// [/examples]
// 
// Notes 
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.filegroup.php
// ========== FILEGROUP - END

// SYNTAX:
// int|false filegroup(string $filename)

return $return_filegroup; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILEGROUP
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILEINODE
// ============================== PUBLIC
// ============================== ABOUT
// Gets file inode.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fileinode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fileinode($filename)
{
$return_fileinode = false;

// ========== FILEINODE - BEGIN
// ===== ABOUT
// Gets file inode
// ===== DESCRIPTION
// Gets the file inode.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fileinode(string $filename): int|false
// ===== CODE
$return_fileinode = fileinode(

$filename // string filename - Path to the file.

); // Return Values
// Returns the inode number of the file, or false on failure.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Comparing the inode of a file with the current file
// [php]
// $filename = 'index.php';
// if (getmyinode() == fileinode($filename)) {
//     echo 'You are checking the current file.';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fileinode.php
// ========== FILEINODE - END

// SYNTAX:
// int|false fileinode(string $filename)

return $return_fileinode; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILEINODE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILEMTIME
// ============================== PUBLIC
// ============================== ABOUT
// Gets file modification time.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// filemtime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_filemtime($filename)
{
$return_filemtime = false;

// ========== FILEMTIME - BEGIN
// ===== ABOUT
// Gets file modification time
// ===== DESCRIPTION
// This function returns the time when the data blocks of a file were being written to, that is, the time when the content of the file was changed.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// filemtime(string $filename): int|false
// ===== CODE
$return_filemtime = filemtime(

$filename // string filename - Path to the file.

); // Return Values
// Returns the time the file was last modified, or false on failure. The time is returned as a Unix timestamp, which is suitable for the date() function.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 filemtime() example
// [php]
// // outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.
// 
// $filename = 'somefile.txt';
// if (file_exists($filename)) {
//     echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Note that time resolution may differ from one file system to another.
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.filemtime.php
// ========== FILEMTIME - END

// SYNTAX:
// int|false filemtime(string $filename)

return $return_filemtime; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILEMTIME
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILEOWNER
// ============================== PUBLIC
// ============================== ABOUT
// Gets file owner.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fileowner() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fileowner($filename)
{
$return_fileowner = false;

// ========== FILEOWNER - BEGIN
// ===== ABOUT
// Gets file owner
// ===== DESCRIPTION
// Gets the file owner.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fileowner(string $filename): int|false
// ===== CODE
$return_fileowner = fileowner(

$filename // string filename - Path to the file.

); // Return Values
// Returns the user ID of the owner of the file, or false on failure. The user ID is returned in numerical format, use posix_getpwuid() to resolve it to a username.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Finding the owner of a file
// [php]
// $filename = 'index.php';
// print_r(posix_getpwuid(fileowner($filename)));
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fileowner.php
// ========== FILEOWNER - END

// SYNTAX:
// int|false fileowner(string $filename)

return $return_fileowner; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILEOWNER
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILEPERMS
// ============================== PUBLIC
// ============================== ABOUT
// Gets file permissions.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fileperms() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fileperms($filename)
{
$return_fileperms = false;

// ========== FILEPERMS - BEGIN
// ===== ABOUT
// Gets file permissions
// ===== DESCRIPTION
// Gets permissions for the given file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fileperms(string $filename): int|false
// ===== CODE
$return_fileperms = fileperms(

$filename // string filename - Path to the file.

); // Return Values
// Returns the file's permissions as a numeric mode. Lower bits of this mode are the same as the permissions expected by chmod(), however on most platforms the return value will also include information on the type of file given as filename. The examples below demonstrate how to test the return value for specific permissions and file types on POSIX systems, including Linux and macOS.
// For local files, the specific return value is that of the st_mode member of the structure returned by the C library's stat() function. Exactly which bits are set can vary from platform to platform, and looking up your specific platform's documentation is recommended if parsing the non-permission bits of the return value is required.
// Returns false on failure.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Display permissions as an octal value
// [php]
// echo substr(sprintf('%o', fileperms('/tmp')), -4);
// echo substr(sprintf('%o', fileperms('/etc/passwd')), -4);
// [/php]
// The above example will output:
// [result]
// 1777
// 0644
// [/result]
// [/example]
// [example]
// Example #2 Display full permissions
// [php]
// $perms = fileperms('/etc/passwd');
// 
// switch ($perms & 0xF000) {
//     case 0xC000: // socket
//         $info = 's';
//         break;
//     case 0xA000: // symbolic link
//         $info = 'l';
//         break;
//     case 0x8000: // regular
//         $info = 'r';
//         break;
//     case 0x6000: // block special
//         $info = 'b';
//         break;
//     case 0x4000: // directory
//         $info = 'd';
//         break;
//     case 0x2000: // character special
//         $info = 'c';
//         break;
//     case 0x1000: // FIFO pipe
//         $info = 'p';
//         break;
//     default: // unknown
//         $info = 'u';
// }
// 
// // Owner
// $info .= (($perms & 0x0100) ? 'r' : '-');
// $info .= (($perms & 0x0080) ? 'w' : '-');
// $info .= (($perms & 0x0040) ?
//             (($perms & 0x0800) ? 's' : 'x' ) :
//             (($perms & 0x0800) ? 'S' : '-'));
// 
// // Group
// $info .= (($perms & 0x0020) ? 'r' : '-');
// $info .= (($perms & 0x0010) ? 'w' : '-');
// $info .= (($perms & 0x0008) ?
//             (($perms & 0x0400) ? 's' : 'x' ) :
//             (($perms & 0x0400) ? 'S' : '-'));
// 
// // World
// $info .= (($perms & 0x0004) ? 'r' : '-');
// $info .= (($perms & 0x0002) ? 'w' : '-');
// $info .= (($perms & 0x0001) ?
//             (($perms & 0x0200) ? 't' : 'x' ) :
//             (($perms & 0x0200) ? 'T' : '-'));
// 
// echo $info;
// [/php]
// The above example will output:
// [result]
// -rw-r--r--
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fileperms.php
// ========== FILEPERMS - END

// SYNTAX:
// int|false fileperms(string $filename)

return $return_fileperms; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILEPERMS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILESIZE
// ============================== PUBLIC
// ============================== ABOUT
// Gets file size.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// filesize() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_filesize($filename)
{
$return_filesize = 0;

// ========== FILESIZE - BEGIN
// ===== ABOUT
// Gets file size
// ===== DESCRIPTION
// Gets the size for the given file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// filesize(string $filename): int|false
// ===== CODE
$return_filesize = filesize(

$filename // string $filename - Path to the file.

); // Return Values
// Returns the size of the file in bytes, or false (and generates an error of level E_WARNING) in case of an error.
// Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 filesize() example
// [php]
// 
// // outputs e.g.  somefile.txt: 1024 bytes
// 
// $filename = 'somefile.txt';
// echo $filename . ': ' . filesize($filename) . ' bytes';
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.filesize.php
// ========== FILESIZE - END

// SYNTAX:
// int|false filesize(string $filename)

return $return_filesize; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILESIZE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FILETYPE
// ============================== PUBLIC
// ============================== ABOUT
// Gets file type.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// filetype() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_filetype($filename)
{
$return_filetype = false;

// ========== FILETYPE - BEGIN
// ===== ABOUT
// Gets file type
// ===== DESCRIPTION
// Returns the type of the given file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// filetype(string $filename): string|false
// ===== CODE
$return_filetype = filetype(

$filename // string filename - Path to the file.

); // Return Values
// Returns the type of the file. Possible values are fifo, char, dir, block, link, file, socket and unknown.
// Returns false if an error occurs. filetype() will also produce an E_NOTICE message if the stat call fails or if the file type is unknown.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 filetype() example
// [php]
// 
// echo filetype('/etc/passwd');
// echo "\n";
// echo filetype('/etc/');
// 
// [/php]
// The above example will output:
// [result]
// file
// dir
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.filetype.php
// ========== FILETYPE - END

// SYNTAX:
// string|false filetype(string $filename)

return $return_filetype; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FILETYPE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FLOCK
// ============================== PUBLIC
// ============================== ABOUT
// Portable advisory file locking.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// flock() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_flock($stream, $operation, & $would_block)
{
$return_flock = false;

// ========== FLOCK - BEGIN
// ===== ABOUT
// Portable advisory file locking
// ===== DESCRIPTION
// flock() allows you to perform a simple reader/writer model which can be used on virtually every platform (including most Unix derivatives and even Windows).
// The lock is released also by fclose(), or when stream is garbage collected.
// PHP supports a portable way of locking complete files in an advisory way (which means all accessing programs have to use the same way of locking or it will not work). By default, this function will block until the requested lock is acquired; this may be controlled with the LOCK_NB option documented below.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// flock(resource $stream, int $operation, int &$would_block = null): bool
// ===== CODE
$return_flock = flock(

$stream, // resource stream - A file system pointer resource that is typically created using fopen().

$operation, // int operation - operation is one of the following:
// * LOCK_SH to acquire a shared lock (reader).
// * LOCK_EX to acquire an exclusive lock (writer).
// * LOCK_UN to release a lock (shared or exclusive).
// It is also possible to add LOCK_NB as a bitmask to one of the above operations, if flock() should not block during the locking attempt.

$would_block // int& would_block - The optional third argument is set to 1 if the lock would block (EWOULDBLOCK errno condition).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 flock() example
// [php]
// 
// $fp = fopen("/tmp/lock.txt", "r+");
// 
// if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
//     ftruncate($fp, 0);      // truncate file
//     fwrite($fp, "Write something here\n");
//     fflush($fp);            // flush output before releasing the lock
//     flock($fp, LOCK_UN);    // release the lock
// } else {
//     echo "Couldn't get the lock!";
// }
// 
// fclose($fp);
// 
// [/php]
// [/example]
// [example]
// Example #2 flock() using the LOCK_NB option
// [php]
// $fp = fopen('/tmp/lock.txt', 'r+');
// 
// // Activate the LOCK_NB option on an LOCK_EX operation
// if(!flock($fp, LOCK_EX | LOCK_NB)) {
//     echo 'Unable to obtain lock';
//     exit(-1);
// }
// 
// // ...
// 
// fclose($fp);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: flock() uses mandatory locking instead of advisory locking on Windows. Mandatory locking is also supported on Linux and System V based operating systems via the usual mechanism supported by the fcntl() system call: that is, if the file in question has the setgid permission bit set and the group execution bit cleared. On Linux, the file system will also need to be mounted with the mand option for this to work.
// Note: Because flock() requires a file pointer, you may have to use a special lock file to protect access to a file that you intend to truncate by opening it in write mode (with a "w" or "w+" argument to fopen()).
// Note: May only be used on file pointers returned by fopen() for local files, or file pointers pointing to userspace streams that implement the streamWrapper::stream_lock() method.
// Warning: Assigning another value to stream argument in subsequent code will release the lock.
//  Warning:
//  On some operating systems flock() is implemented at the process level. When using a multithreaded server API you may not be able to rely on flock() to protect files against other PHP scripts running in parallel threads of the same server instance!
//  flock() is not supported on antiquated filesystems like FAT and its derivates and will therefore always return false under these environments.
// Note: On Windows, if the locking process opens the file a second time, it cannot access the file through this second handle until it unlocks the file.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.flock.php
// ========== FLOCK - END

// SYNTAX:
// bool flock(resource $stream, int $operation, int& $would_block)

return $return_flock; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FLOCK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FNMATCH
// ============================== PUBLIC
// ============================== ABOUT
// Match filename against a pattern.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fnmatch() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fnmatch($pattern, $filename, $flags = 0)
{
$return_fnmatch = false;

// ========== FNMATCH - BEGIN
// ===== ABOUT
// Match filename against a pattern
// ===== DESCRIPTION
// fnmatch() checks if the passed filename would match the given shell wildcard pattern.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fnmatch(string $pattern, string $filename, int $flags = 0): bool
// ===== CODE
$return_fnmatch = fnmatch(

$pattern, // string pattern - The shell wildcard pattern.

$filename, // string filename - The tested string. This function is especially useful for filenames, but may also be used on regular strings.
// The average user may be used to shell patterns or at least in their simplest form to '?' and '*' wildcards so using fnmatch() instead of preg_match() for frontend search expression input may be way more convenient for non-programming users.

$flags // int flags - The value of flags can be any combination of the following flags, joined with the binary OR (|) operator.
// 
// A list of possible flags for fnmatch()
// Flag         - Description
// FNM_NOESCAPE - Disable backslash escaping.
// FNM_PATHNAME - Slash in string only matches slash in the given pattern.
// FNM_PERIOD   - Leading period in string must be exactly matched by period in the given pattern.
// FNM_CASEFOLD - Caseless match. Part of the GNU extension.

); // Return Values
// Returns true if there is a match, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Checking a color name against a shell wildcard pattern
// [php]
// if (fnmatch("*gr[ae]y", $color)) {
//   echo "some form of gray ...";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: For now, this function is not available on non-POSIX compliant systems except Windows.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fnmatch.php
// ========== FNMATCH - END

// SYNTAX:
// bool fnmatch(string $pattern, string $filename, int $flags = 0)

return $return_fnmatch; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FNMATCH
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FOPEN
// ============================== PUBLIC
// ============================== ABOUT
// Opens file or URL.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fopen() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fopen($filename, $mode, $use_include_path = false, $context = null)
{
$return_fopen = false;

// ========== FOPEN - BEGIN
// ===== ABOUT
// Opens file or URL
// ===== DESCRIPTION
// fopen() binds a named resource, specified by filename, to a stream.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fopen(
//    string $filename,
//    string $mode,
//    bool $use_include_path = false,
//    ?resource $context = null
// ): resource|false
// ===== CODE
$return_fopen = fopen(

$filename, // string filename - If filename is of the form "scheme://...", it is assumed to be a URL and PHP will search for a protocol handler (also known as a wrapper) for that scheme. If no wrappers for that protocol are registered, PHP will emit a notice to help you track potential problems in your script and then continue as though filename specifies a regular file.
// If PHP has decided that filename specifies a local file, then it will try to open a stream on that file. The file must be accessible to PHP, so you need to ensure that the file access permissions allow this access. If you have enabled open_basedir further restrictions may apply.
// If PHP has decided that filename specifies a registered protocol, and that protocol is registered as a network URL, PHP will check to make sure that allow_url_fopen is enabled. If it is switched off, PHP will emit a warning and the fopen call will fail.
// Note: The list of supported protocols can be found in Supported Protocols and Wrappers. Some protocols (also referred to as wrappers) support context and/or php.ini options. Refer to the specific page for the protocol in use for a list of options which can be set. (e.g. php.ini value user_agent used by the http wrapper).
// On the Windows platform, be careful to escape any backslashes used in the path to the file, or use forward slashes.
// [php]
// $handle = fopen("c:\\folder\\resource.txt", "r");
// [/php]

$mode, // string mode - The mode parameter specifies the type of access you require to the stream. It may be any of the following:
// 
// A list of possible modes for fopen() using mode
// mode - Description
// 'r'  - Open for reading only; place the file pointer at the beginning of the file.
// 'r+' - Open for reading and writing; place the file pointer at the beginning of the file.
// 'w'  - Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
// 'w+' - Open for reading and writing; otherwise it has the same behavior as 'w'.
// 'a'  - Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
// 'a+' - Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
// 'x'  - Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning false and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
// 'x+' - Create and open for reading and writing; otherwise it has the same behavior as 'x'.
// 'c'  - Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
// 'c+' - Open the file for reading and writing; otherwise it has the same behavior as 'c'.
// 'e'  - Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.
//  Note:
//  Different operating system families have different line-ending conventions. When you write a text file and want to insert a line break, you need to use the correct line-ending character(s) for your operating system. Unix based systems use \n as the line ending character, Windows based systems use \r\n as the line ending characters and Macintosh based systems (Mac OS Classic) used \r as the line ending character.
//  If you use the wrong line ending characters when writing your files, you might find that other applications that open those files will "look funny".
//  Windows offers a text-mode translation flag ('t') which will transparently translate \n to \r\n when working with the file. In contrast, you can also use 'b' to force binary mode, which will not translate your data. To use these flags, specify either 'b' or 't' as the last character of the mode parameter.
//  The default translation mode is 'b'. You can use the 't' mode if you are working with plain-text files and you use \n to delimit your line endings in your script, but expect your files to be readable with applications such as old versions of notepad. You should use the 'b' in all other cases.
//  If you specify the 't' flag when working with binary files, you may experience strange problems with your data, including broken image files and strange problems with \r\n characters.
// Note: For portability, it is also strongly recommended that you re-write code that uses or relies upon the 't' mode so that it uses the correct line endings and 'b' mode instead.
// Note: The mode is ignored for php://output, php://input, php://stdin, php://stdout, php://stderr and php://fd stream wrappers.

$use_include_path, // bool use_include_path - The optional third use_include_path parameter can be set to '1' or true if you want to search for the file in the include_path, too.

$context // resource context - A context stream resource.

); // Return Values
// Returns a file pointer resource on success, or false on failure
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// Changelog
// Version       - Description
// 7.0.16, 7.1.2 - The 'e' option was added.
// 
// [examples]
// Examples
// [example]
// Example #1 fopen() examples
// [php]
// $handle = fopen("/home/rasmus/file.txt", "r");
// $handle = fopen("/home/rasmus/file.gif", "wb");
// $handle = fopen("http://www.example.com/", "r");
// $handle = fopen("ftp://user:password@example.com/somefile.txt", "w");
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: When using SSL, Microsoft IIS will violate the protocol by closing the connection without sending a close_notify indicator. PHP will report this as "SSL: Fatal Protocol Error" when you reach the end of the data. To work around this, the value of error_reporting should be lowered to a level that does not include warnings. PHP can detect buggy IIS server software when you open the stream using the https:// wrapper and will suppress the warning. When using fsockopen() to create an ssl:// socket, the developer is responsible for detecting and suppressing this warning.
// Note: If you are experiencing problems with reading and writing to files and you're using the server module version of PHP, remember to make sure that the files and directories you're using are accessible to the server process.
// Note: This function may also succeed when filename is a directory. If you are unsure whether filename is a file or a directory, you may need to use the is_dir() function before calling fopen().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fopen.php
// ========== FOPEN - END

// SYNTAX:
// resource|false fopen(string $filename, string $mode, bool $use_include_path = false, resource $context = null)

return $return_fopen; // resource|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FOPEN
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FPASSTHRU
// ============================== PUBLIC
// ============================== ABOUT
// Output all remaining data on a file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fpassthru() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fpassthru($stream)
{
$return_fpassthru = 0;

// ========== FPASSTHRU - BEGIN
// ===== ABOUT
// Output all remaining data on a file pointer
// ===== DESCRIPTION
// Reads to EOF on the given file pointer from the current position and writes the results to the output buffer.
// You may need to call rewind() to reset the file pointer to the beginning of the file if you have already written data to the file.
// If you just want to dump the contents of a file to the output buffer, without first modifying it or seeking to a particular offset, you may want to use the readfile(), which saves you the fopen() call.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fpassthru(resource $stream): int
// ===== CODE
$return_fpassthru = fpassthru(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

); // Return Values
// Returns the number of characters read from stream and passed through to the output.
// 
// [examples]
// Examples
// [example]
// Example #1 Using fpassthru() with binary files
// [php]
// 
// // open the file in a binary mode
// $name = './img/ok.png';
// $fp = fopen($name, 'rb');
// 
// // send the right headers
// header("Content-Type: image/png");
// header("Content-Length: " . filesize($name));
// 
// // dump the picture and stop the script
// fpassthru($fp);
// exit;
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  When using fpassthru() on a binary file on Windows systems, you should make sure to open the file in binary mode by appending a b to the mode used in the call to fopen().
//  You are encouraged to use the b flag when dealing with binary files, even if your system does not require it, so that your scripts will be more portable.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fpassthru.php
// ========== FPASSTHRU - END

// SYNTAX:
// int fpassthru(resource $stream)

return $return_fpassthru; // int
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FPASSTHRU
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FPUTCSV
// ============================== OFFLINE
// ============================== ABOUT
// Format line as CSV and write to file pointer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// fputcsv() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_filesystem_filesystem_fputcsv($stream, $fields, $separator = ",", $enclosure = "\"", $escape = "\\", $eol = "\n")
{
$return_fputcsv = false;

// ========== FPUTCSV - BEGIN
// ===== ABOUT
// Format line as CSV and write to file pointer
// ===== DESCRIPTION
// fputcsv() formats a line (passed as a fields array) as CSV and writes it (terminated by a newline) to the specified file stream.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// fputcsv(
//    resource $stream,
//    array $fields,
//    string $separator = ",",
//    string $enclosure = "\"",
//    string $escape = "\\",
//    string $eol = "\n"
// ): int|false
// ===== CODE
$return_fputcsv = fputcsv(

$stream, // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

$fields, // array fields - An array of strings.

$separator, // string separator - The optional separator parameter sets the field delimiter (one single-byte character only).

$enclosure, // string enclosure - The optional enclosure parameter sets the field enclosure (one single-byte character only).

$escape, // string escape - The optional escape parameter sets the escape character (at most one single-byte character). An empty string ("") disables the proprietary escape mechanism.

$eol // string eol - The optional eol parameter sets a custom End of Line sequence.
// Note: If an enclosure character is contained in a field, it will be escaped by doubling it, unless it is immediately preceded by an escape.

); // Return Values
// Returns the length of the written string or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The optional eol parameter has been added.
// 7.4.0   - The escape parameter now also accepts an empty string to disable the proprietary escape mechanism.
// 
// [examples]
// Examples
// [example]
// Example #1 fputcsv() example
// [php]
// 
// $list = array (
//     array('aaa', 'bbb', 'ccc', 'dddd'),
//     array('123', '456', '789'),
//     array('"aaa"', '"bbb"')
// );
// 
// $fp = fopen('file.csv', 'w');
// 
// foreach ($list as $fields) {
//     fputcsv($fp, $fields);
// }
// 
// fclose($fp);
// [/php]
// The above example will write the following to file.csv:
// [result]
// aaa,bbb,ccc,dddd
// 123,456,789
// """aaa""","""bbb"""
// 
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fputcsv.php
// ========== FPUTCSV - END

// SYNTAX:
// int|false fputcsv(resource $stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n")

return $return_fputcsv; // int|false
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FPUTCSV
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FPUTS
// ============================== PUBLIC
// ============================== ABOUT
// Binary-safe file write.
// 
// fputs - Alias of fwrite().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fputs() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fputs($stream, $data, $length = null)
{
$return_fputs = false;

// ========== FPUTS - BEGIN
// ===== ABOUT
// fputs - Alias of fwrite()
// ===== DESCRIPTION
// This function is an alias of: fwrite().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_fputs = fputs(

$stream, // resource $stream

$data, // string $data

$length // int $length

); // Return
// int|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fputs.php
// ========== FPUTS - END

// ========== FWRITE - BEGIN
// ===== ABOUT
// Binary-safe file write
// ===== DESCRIPTION
// fwrite() writes the contents of data to the file stream pointed to by stream.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fwrite(resource $stream, string $data, ?int $length = null): int|false
// ===== CODE
// $return_fwrite = fwrite(

// $stream, // resource stream - A file system pointer resource that is typically created using fopen().

// $data, // string data - The string that is to be written.

// $length // int length - If length is an int, writing will stop after length bytes have been written or the end of data is reached, whichever comes first.

// ); // Return Values
// fwrite() returns the number of bytes written, or false on failure.
// 
// Errors/Exceptions
// fwrite() raises E_WARNING on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A simple fwrite() example
// [php]
// $filename = 'test.txt';
// $somecontent = "Add this to the file\n";
// 
// // Let's make sure the file exists and is writable first.
// if (is_writable($filename)) {
// 
//     // In our example we're opening $filename in append mode.
//     // The file pointer is at the bottom of the file hence
//     // that's where $somecontent will go when we fwrite() it.
//     if (!$fp = fopen($filename, 'a')) {
//          echo "Cannot open file ($filename)";
//          exit;
//     }
// 
//     // Write $somecontent to our opened file.
//     if (fwrite($fp, $somecontent) === FALSE) {
//         echo "Cannot write to file ($filename)";
//         exit;
//     }
// 
//     echo "Success, wrote ($somecontent) to file ($filename)";
// 
//     fclose($fp);
// 
// } else {
//     echo "The file $filename is not writable";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  Writing to a network stream may end before the whole string is written. Return value of fwrite() may be checked:
//  [php]
//  function fwrite_stream($fp, $string) {
//      for ($written = 0; $written < strlen($string); $written += $fwrite) {
//          $fwrite = fwrite($fp, substr($string, $written));
//          if ($fwrite === false) {
//              return $written;
//          }
//      }
//      return $written;
//  }
//  [/php]
// Note: On systems which differentiate between binary and text files (i.e. Windows) the file must be opened with 'b' included in fopen() mode parameter.
// Note: If stream was fopen()ed in append mode, fwrite()s are atomic (unless the size of data exceeds the filesystem's block size, on some platforms, and as long as the file is on a local filesystem). That is, there is no need to flock() a resource before calling fwrite(); all of the data will be written without interruption.
//  Note:
//  If writing twice to the file pointer, then the data will be appended to the end of the file content:
//  [php]
//  $fp = fopen('data.txt', 'w');
//  fwrite($fp, '1');
//  fwrite($fp, '23');
//  fclose($fp);
//  
//  // the content of 'data.txt' is now 123 and not 23!
//  [/php]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fwrite.php
// ========== FWRITE - END

// int|false fputs(resource $stream, string $data, int $length = null)

return $return_fputs; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FPUTS
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FREAD
// ============================== PUBLIC
// ============================== ABOUT
// Binary-safe file read.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fread() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fread($stream, $length)
{
$return_fread = false;

// ========== FREAD - BEGIN
// ===== ABOUT
// Binary-safe file read
// ===== DESCRIPTION
// fread() reads up to length bytes from the file pointer referenced by stream. Reading stops as soon as one of the following conditions is met:
// * length bytes have been read
// * EOF (end of file) is reached
// * a packet becomes available or the socket timeout occurs (for network streams)
// * if the stream is read buffered and it does not represent a plain file, at most one read of up to a number of bytes equal to the chunk size (usually 8192) is made; depending on the previously buffered data, the size of the returned data may be larger than the chunk size.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fread(resource $stream, int $length): string|false
// ===== CODE
$return_fread = fread(

$stream, // resource stream - A file system pointer resource that is typically created using fopen().

$length // int length - Up to length number of bytes read.

); // Return Values
// Returns the read string or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A simple fread() example
// [php]
// get contents of a file into a string
// $filename = "/usr/local/something.txt";
// $handle = fopen($filename, "r");
// $contents = fread($handle, filesize($filename));
// fclose($handle);
// [/php]
// [/example]
// [example]
// Example #2 Binary fread() example
// Warning: On systems which differentiate between binary and text files (i.e. Windows) the file must be opened with 'b' included in fopen() mode parameter.
// [php]
// $filename = "c:\\files\\somepic.gif";
// $handle = fopen($filename, "rb");
// $contents = fread($handle, filesize($filename));
// fclose($handle);
// [/php]
// [/example]
// [example]
// Example #3 Remote fread() examples
// Warning: When reading from anything that is not a regular local file, such as streams returned when reading remote files or from popen() and fsockopen(), reading will stop after a packet is available. This means that you should collect the data together in chunks as shown in the examples below.
// [php]
// $handle = fopen("http://www.example.com/", "rb");
// $contents = stream_get_contents($handle);
// fclose($handle);
// [/php]
// 
// [php]
// $handle = fopen("http://www.example.com/", "rb");
// if (FALSE === $handle) {
//     exit("Failed to open stream to URL");
// }
// 
// $contents = '';
// 
// while (!feof($handle)) {
//     $contents .= fread($handle, 8192);
// }
// fclose($handle);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If you just want to get the contents of a file into a string, use file_get_contents() as it has much better performance than the code above.
// Note: Note that fread() reads from the current position of the file pointer. Use ftell() to find the current position of the pointer and rewind() to rewind the pointer position.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fread.php
// ========== FREAD - END

// SYNTAX:
// string|false fread(resource $stream, int $length)

return $return_fread; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FREAD
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FSCANF
// ============================== PUBLIC
// ============================== ABOUT
// Parses input from a file according to a format.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fscanf() - PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fscanf($stream, $format, $vars)
{
$return_fscanf = false;

// ========== FSCANF - BEGIN
// ===== ABOUT
// Parses input from a file according to a format
// ===== DESCRIPTION
// The function fscanf() is similar to sscanf(), but it takes its input from a file associated with stream and interprets the input according to the specified format.
// Any whitespace in the format string matches any whitespace in the input stream. This means that even a tab (\t) in the format string can match a single space character in the input stream.
// Each call to fscanf() reads one line from the file.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_1, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fscanf(resource $stream, string $format, mixed &...$vars): array|int|false|null
// ===== CODE
$return_fscanf = fscanf(

$stream, // resource stream - A file system pointer resource that is typically created using fopen().

$format, // string format - The interpreted format for string, which is described in the documentation for sprintf() with following differences:
// * Function is not locale-aware.
// * F, g, G and b are not supported.
// * D stands for decimal number.
// * i stands for integer with base detection.
// * n stands for number of characters processed so far.
// * s stops reading at any whitespace character.
// * * instead of argnum$ suppresses the assignment of this conversion specification.

$vars // mixed vars - The optional assigned values.

); // Return Values
// If only two parameters were passed to this function, the values parsed will be returned as an array. Otherwise, if optional parameters are passed, the function will return the number of assigned values. The optional parameters must be passed by reference.
// If there are more substrings expected in the format than there are available within string, null will be returned. On other errors, false will be returned.
// 
// [examples]
// Examples
// [example]
// Example #1 fscanf() Example
// [php]
// $handle = fopen("users.txt", "r");
// while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) {
//     list ($name, $profession, $countrycode) = $userinfo;
//     //... do something with the values
// }
// fclose($handle);
// [/php]
// [/example]
// [example]
// Example #2 Contents of users.txt
// [code]
// javier  argonaut        pe
// hiroshi sculptor        jp
// robert  slacker us
// luigi   florist it
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fscanf.php
// ========== FSCANF - END

// SYNTAX:
// array|int|false|null fscanf(resource $stream, string $format, mixed& $vars)

return $return_fscanf; // array|int|false|null
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FSCANF
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FSEEK
// ============================== PUBLIC
// ============================== ABOUT
// Seeks on a file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fseek() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SEEK_SET - fseek()
// ============================== CODE
function php_filesystem_filesystem_fseek($stream, $offset, $whence = SEEK_SET)
{
$return_fseek = 0;

// ========== FSEEK - BEGIN
// ===== ABOUT
// Seeks on a file pointer
// ===== DESCRIPTION
// Sets the file position indicator for the file referenced by stream. The new position, measured in bytes from the beginning of the file, is obtained by adding offset to the position specified by whence.
// In general, it is allowed to seek past the end-of-file; if data is then written, reads in any unwritten region between the end-of-file and the sought position will yield bytes with value 0. However, certain streams may not support this behavior, especially when they have an underlying fixed size storage.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fseek(resource $stream, int $offset, int $whence = SEEK_SET): int
// ===== CODE
$return_fseek = fseek(

$stream, // resource $stream - A file system pointer resource that is typically created using fopen().

$offset, // int $offset - The offset.
// To move to a position before the end-of-file, you need to pass a negative value in offset and set whence to SEEK_END.

$whence // int $whence - whence values are:
// * SEEK_SET - Set position equal to offset bytes.
// * SEEK_CUR - Set position to current location plus offset.
// * SEEK_END - Set position to end-of-file plus offset.

); // Return Values
// Upon success, returns 0; otherwise, returns -1.
// 
// [examples]
// Examples
// [example]
// Example #1 fseek() example
// [php]
// 
// $fp = fopen('somefile.txt', 'r');
// 
// // read some data
// $data = fgets($fp, 4096);
// 
// // move back to the beginning of the file
// // same as rewind($fp);
// fseek($fp, 0);
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If you have opened the file in append (a or a+) mode, any data you write to the file will always be appended, regardless of the file position, and the result of calling fseek() will be undefined.
// Note: Not all streams support seeking. For those that do not support seeking, forward seeking from the current position is accomplished by reading and discarding data; other forms of seeking will fail.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fseek.php
// ========== FSEEK - END

// SYNTAX:
// int fseek(resource $stream, int $offset, int $whence = SEEK_SET)

return $return_fseek; // int
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FSEEK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FSTAT
// ============================== PUBLIC
// ============================== ABOUT
// Gets information about a file using an open file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fstat() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fstat($stream)
{
$return_fstat = false;

// ========== FSTAT - BEGIN
// ===== ABOUT
// Gets information about a file using an open file pointer
// ===== DESCRIPTION
// Gathers the statistics of the file opened by the file pointer stream. This function is similar to the stat() function except that it operates on an open file pointer instead of a filename.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fstat(resource $stream): array|false
// ===== CODE
$return_fstat = fstat(

$stream // resource stream - A file system pointer resource that is typically created using fopen().

); // Return Values
// Returns an array with the statistics of the file; the format of the array is described in detail on the stat() manual page. Returns false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 fstat() example
// [php]
// 
// // open a file
// $fp = fopen("/etc/passwd", "r");
// 
// // gather statistics
// $fstat = fstat($fp);
// 
// // close the file
// fclose($fp);
// 
// // print only the associative part
// print_r(array_slice($fstat, 13));
// 
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [dev] => 771
//     [ino] => 488704
//     [mode] => 33188
//     [nlink] => 1
//     [uid] => 0
//     [gid] => 0
//     [rdev] => 0
//     [size] => 1114
//     [atime] => 1061067181
//     [mtime] => 1056136526
//     [ctime] => 1056136526
//     [blksize] => 4096
//     [blocks] => 8
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fstat.php
// ========== FSTAT - END

// SYNTAX:
// array|false fstat(resource $stream)

return $return_fstat; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FSTAT
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FSYNC
// ============================== OFFLINE
// ============================== ABOUT
// Synchronizes changes to the file (including meta-data).
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// fsync() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_filesystem_filesystem_fsync($stream)
{
$return_fsync = false;

// ========== FSYNC - BEGIN
// ===== ABOUT
// Synchronizes changes to the file (including meta-data)
// ===== DESCRIPTION
// This function synchronizes changes to the file, including its meta-data. This is similar to fflush(), but it also instructs the operating system to write to the storage media.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// fsync(resource $stream): bool
// ===== CODE
$return_fsync = fsync(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 fsync() example
// [php]
// 
// $file = 'test.txt';
// 
// $stream = fopen($file, 'w');
// fwrite($stream, 'test data');
// fwrite($stream, "\r\n");
// fwrite($stream, 'additional data');
// 
// fsync($stream);
// fclose($stream);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.fsync.php
// ========== FSYNC - END

// SYNTAX:
// bool fsync(resource $stream)

return $return_fsync; // bool
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FSYNC
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FTELL
// ============================== PUBLIC
// ============================== ABOUT
// Returns the current position of the file read/write pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ftell() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_ftell($stream)
{
$return_ftell = false;

// ========== FTELL - BEGIN
// ===== ABOUT
// Returns the current position of the file read/write pointer
// ===== DESCRIPTION
// Returns the position of the file pointer referenced by stream.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ftell(resource $stream): int|false
// ===== CODE
$return_ftell = ftell(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen() or popen(). ftell() gives undefined results for append-only streams (opened with "a" flag).

); // Return Values
// Returns the position of the file pointer referenced by stream as an integer; i.e., its offset into the file stream.
// If an error occurs, returns false.
// Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.
// 
// [examples]
// Examples
// [example]
// Example #1 ftell() example
// [php]
// 
// // opens a file and read some data
// $fp = fopen("/etc/passwd", "r");
// $data = fgets($fp, 12);
// 
// // where are we ?
// echo ftell($fp); // 11
// 
// fclose($fp);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.ftell.php
// ========== FTELL - END

// SYNTAX:
// int|false ftell(resource $stream)

return $return_ftell; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FTELL
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FTRUNCATE
// ============================== PUBLIC
// ============================== ABOUT
// Truncates a file to a given length.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ftruncate() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_ftruncate($stream, $size)
{
$return_ftruncate = false;

// ========== FTRUNCATE - BEGIN
// ===== ABOUT
// Truncates a file to a given length
// ===== DESCRIPTION
// Takes the filepointer, stream, and truncates the file to length, size.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ftruncate(resource $stream, int $size): bool
// ===== CODE
$return_ftruncate = ftruncate(

$stream, // resource $stream - The file pointer.
// Note: The stream must be open for writing.

$size // int $size - The size to truncate to.
//  Note:
//  If size is larger than the file then the file is extended with null bytes.
//  If size is smaller than the file then the file is truncated to that size.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 File truncation example
// [php]
// $filename = 'lorem_ipsum.txt';
// 
// $handle = fopen($filename, 'r+');
// ftruncate($handle, rand(1, filesize($filename)));
// rewind($handle);
// echo fread($handle, filesize($filename));
// fclose($handle);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The file pointer is not changed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.ftruncate.php
// ========== FTRUNCATE - END

// SYNTAX:
// bool ftruncate(resource $stream, int $size)

return $return_ftruncate; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FTRUNCATE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_FWRITE
// ============================== PUBLIC
// ============================== ABOUT
// Binary-safe file write.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// fwrite() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_fwrite($stream, $data, $length = null)
{
$return_fwrite = false;

// ========== FWRITE - BEGIN
// ===== ABOUT
// Binary-safe file write
// ===== DESCRIPTION
// fwrite() writes the contents of data to the file stream pointed to by stream.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// fwrite(resource $stream, string $data, ?int $length = null): int|false
// ===== CODE
$return_fwrite = fwrite(

$stream, // resource stream - A file system pointer resource that is typically created using fopen().

$data, // string data - The string that is to be written.

$length // int length - If length is an int, writing will stop after length bytes have been written or the end of data is reached, whichever comes first.

); // Return Values
// fwrite() returns the number of bytes written, or false on failure.
// 
// Errors/Exceptions
// fwrite() raises E_WARNING on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - length is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A simple fwrite() example
// [php]
// $filename = 'test.txt';
// $somecontent = "Add this to the file\n";
// 
// // Let's make sure the file exists and is writable first.
// if (is_writable($filename)) {
// 
//     // In our example we're opening $filename in append mode.
//     // The file pointer is at the bottom of the file hence
//     // that's where $somecontent will go when we fwrite() it.
//     if (!$fp = fopen($filename, 'a')) {
//          echo "Cannot open file ($filename)";
//          exit;
//     }
// 
//     // Write $somecontent to our opened file.
//     if (fwrite($fp, $somecontent) === FALSE) {
//         echo "Cannot write to file ($filename)";
//         exit;
//     }
// 
//     echo "Success, wrote ($somecontent) to file ($filename)";
// 
//     fclose($fp);
// 
// } else {
//     echo "The file $filename is not writable";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  Writing to a network stream may end before the whole string is written. Return value of fwrite() may be checked:
//  [php]
//  function fwrite_stream($fp, $string) {
//      for ($written = 0; $written < strlen($string); $written += $fwrite) {
//          $fwrite = fwrite($fp, substr($string, $written));
//          if ($fwrite === false) {
//              return $written;
//          }
//      }
//      return $written;
//  }
//  [/php]
// Note: On systems which differentiate between binary and text files (i.e. Windows) the file must be opened with 'b' included in fopen() mode parameter.
// Note: If stream was fopen()ed in append mode, fwrite()s are atomic (unless the size of data exceeds the filesystem's block size, on some platforms, and as long as the file is on a local filesystem). That is, there is no need to flock() a resource before calling fwrite(); all of the data will be written without interruption.
//  Note:
//  If writing twice to the file pointer, then the data will be appended to the end of the file content:
//  [php]
//  $fp = fopen('data.txt', 'w');
//  fwrite($fp, '1');
//  fwrite($fp, '23');
//  fclose($fp);
//  
//  // the content of 'data.txt' is now 123 and not 23!
//  [/php]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.fwrite.php
// ========== FWRITE - END

// SYNTAX:
// int|false fwrite(resource $stream, string $data, int $length = null)

return $return_fwrite; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_FWRITE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_GLOB
// ============================== PUBLIC
// ============================== ABOUT
// Find pathnames matching a pattern.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// glob() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_glob($pattern, $flags = 0)
{
$return_glob = false;

// ========== GLOB - BEGIN
// ===== ABOUT
// Find pathnames matching a pattern
// ===== DESCRIPTION
// The glob() function searches for all the pathnames matching pattern according to the rules used by the libc glob() function, which is similar to the rules used by common shells.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// glob(string $pattern, int $flags = 0): array|false
// ===== CODE
$return_glob = glob(

$pattern, // string $pattern - The pattern. No tilde expansion or parameter substitution is done.
// 
// Special characters:
// *     - Matches zero or more characters.
// ?     - Matches exactly one character (any character).
// [...] - Matches one character from a group of characters. If the first character is !, matches any character not in the group.
// \     - Escapes the following character, except when the GLOB_NOESCAPE flag is used.

$flags // int $flags - Valid flags:
// * GLOB_MARK     - Adds a slash (a backslash on Windows) to each directory returned
// * GLOB_NOSORT   - Return files as they appear in the directory (no sorting). When this flag is not used, the pathnames are sorted alphabetically
// * GLOB_NOCHECK  - Return the search pattern if no files matching it were found
// * GLOB_NOESCAPE - Backslashes do not quote metacharacters
// * GLOB_BRACE    - Expands {a,b,c} to match 'a', 'b', or 'c'
// * GLOB_ONLYDIR  - Return only directory entries which match the pattern
// * GLOB_ERR      - Stop on read errors (like unreadable directories), by default errors are ignored.
// Note: The GLOB_BRACE flag is not available on some non GNU systems, like Solaris or Alpine Linux.

); // Return Values
// Returns an array containing the matched files/directories, an empty array if no file matched or false on error.
// Note: On some systems it is impossible to distinguish between empty match and an error.
// 
// [examples]
// Examples
// [example]
// Example #1 Convenient way how glob() can replace opendir() and friends.
// [php]
// foreach (glob("*.txt") as $filename) {
//     echo "$filename size " . filesize($filename) . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// funclist.txt size 44686
// funcsummary.txt size 267625
// quickref.txt size 137820
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// Note: This function isn't available on some systems (e.g. old Sun OS).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.glob.php
// ========== GLOB - END

// SYNTAX:
// array|false glob(string $pattern, int $flags = 0)

return $return_glob; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_GLOB
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_DIR
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the filename is a directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_dir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_dir($filename)
{
$return_is_dir = false;

// ========== IS_DIR - BEGIN
// ===== ABOUT
// Tells whether the filename is a directory
// ===== DESCRIPTION
// Tells whether the given filename is a directory.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_dir(string $filename): bool
// ===== CODE
$return_is_dir = is_dir(

$filename // string $filename - Path to the file. If filename is a relative filename, it will be checked relative to the current working directory. If filename is a symbolic or hard link then the link will be resolved and checked. If you have enabled open_basedir further restrictions may apply.

); // Return Values
// Returns true if the filename exists and is a directory, false otherwise.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 is_dir() example
// [php]
// var_dump(is_dir('a_file.txt'));
// var_dump(is_dir('bogus_dir/abc'));
// 
// var_dump(is_dir('..')); //one dir up
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-dir.php
// ========== IS_DIR - END

// SYNTAX:
// bool is_dir(string $filename)

return $return_is_dir; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_DIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_EXECUTABLE
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the filename is executable.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_executable() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_executable($filename)
{
$return_is_executable = false;

// ========== IS_EXECUTABLE - BEGIN
// ===== ABOUT
// Tells whether the filename is executable
// ===== DESCRIPTION
// Tells whether the filename is executable.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_executable(string $filename): bool
// ===== CODE
$return_is_executable = is_executable(

$filename // string filename - Path to the file.

); // Return Values
// Returns true if the filename exists and is executable, or false on error. On POSIX systems, a file is executable if the executable bit of the file permissions is set. For Windows, see the note below.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 is_executable() example
// [php]
// 
// $file = '/home/vincent/somefile.sh';
// 
// if (is_executable($file)) {
//     echo $file.' is executable';
// } else {
//     echo $file.' is not executable';
// }
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// Note: On Windows, a file is considered executable, if it is a properly executable file as reported by the Win API GetBinaryType(); for BC reasons, files with a .bat or .cmd extension are also considered executable. Prior to PHP 7.4.0, any non-empty file with a .exe or .com extension was considered executable. Note that PATHEXT is irrelevant for is_executable().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-executable.php
// ========== IS_EXECUTABLE - END

// SYNTAX:
// bool is_executable(string $filename)

return $return_is_executable; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_EXECUTABLE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the filename is a regular file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_file() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_file($filename)
{
$return_is_file = false;

// ========== IS_FILE - BEGIN
// ===== ABOUT
// Tells whether the filename is a regular file
// ===== DESCRIPTION
// Tells whether the given file is a regular file.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_file(string $filename): bool
// ===== CODE
$return_is_file = is_file(

$filename // string filename - Path to the file.

); // Return Values
// Returns true if the filename exists and is a regular file, false otherwise.
// Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 is_file() example
// [php]
// var_dump(is_file('a_file.txt')) . "\n";
// var_dump(is_file('/usr/bin/')) . "\n";
// [/php]
// The above example will output:
// [result]
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-file.php
// ========== IS_FILE - END

// SYNTAX:
// bool is_file(string $filename)

return $return_is_file; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_LINK
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the filename is a symbolic link.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_link() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_link($filename)
{
$return_is_link = false;

// ========== IS_LINK - BEGIN
// ===== ABOUT
// Tells whether the filename is a symbolic link
// ===== DESCRIPTION
// Tells whether the given file is a symbolic link.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_link(string $filename): bool
// ===== CODE
$return_is_link = is_link(

$filename // string filename - Path to the file.

); // Return Values
// Returns true if the filename exists and is a symbolic link, false otherwise.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Create and confirm if a file is a symbolic link
// [php]
// $link = 'uploads';
// 
// if (is_link($link)) {
//     echo readlink($link);
// } else {
//     symlink('uploads.php', $link);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-link.php
// ========== IS_LINK - END

// SYNTAX:
// bool is_link(string $filename)

return $return_is_link; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_LINK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_READABLE
// ============================== PUBLIC
// ============================== ABOUT
// Returns true if file exists and file is readable.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_readable() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_readable($filename)
{
$return_is_readable = false;

// ========== IS_READABLE - BEGIN
// ===== ABOUT
// Tells whether a file exists and is readable
// ===== DESCRIPTION
// Tells whether a file exists and is readable.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_readable(string $filename): bool
// ===== CODE
$return_is_readable = is_readable(

$filename // string filename - Path to the file.

); // Return Values
// Returns true if the file or directory specified by filename exists and is readable, false otherwise.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 is_readable() example
// [php]
// $filename = 'test.txt';
// if (is_readable($filename)) {
//     echo 'The file is readable';
// } else {
//     echo 'The file is not readable';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Keep in mind that PHP may be accessing the file as the user id that the web server runs as (often 'nobody').
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// Note: The check is done using the real UID/GID instead of the effective one.
// This function may return true for directories. Use is_dir() to distinguish file and directory.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-readable.php
// ========== IS_READABLE - END

// SYNTAX:
// bool is_readable(string $filename)

return $return_is_readable; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_READABLE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_UPLOADED_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the file was uploaded via HTTP POST.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_uploaded_file() - PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_uploaded_file($filename)
{
$return_is_uploaded_file = false;

// ========== IS_UPLOADED_FILE - BEGIN
// ===== ABOUT
// Tells whether the file was uploaded via HTTP POST
// ===== DESCRIPTION
// Returns true if the file named by filename was uploaded via HTTP POST. This is useful to help ensure that a malicious user hasn't tried to trick the script into working on files upon which it should not be working--for instance, /etc/passwd.
// This sort of check is especially important if there is any chance that anything done with uploaded files could reveal their contents to the user, or even to other users on the same system.
// For proper working, the function is_uploaded_file() needs an argument like $_FILES['userfile']['tmp_name'], - the name of the uploaded file on the client's machine $_FILES['userfile']['name'] does not work.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_uploaded_file(string $filename): bool
// ===== CODE
$return_is_uploaded_file = is_uploaded_file(

$filename // string filename - The filename being checked.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 is_uploaded_file() example
// [php]
// 
// if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
//    echo "File ". $_FILES['userfile']['name'] ." uploaded successfully.\n";
//    echo "Displaying contents\n";
//    readfile($_FILES['userfile']['tmp_name']);
// } else {
//    echo "Possible file upload attack: ";
//    echo "filename '". $_FILES['userfile']['tmp_name'] . "'.";
// }
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-uploaded-file.php
// ========== IS_UPLOADED_FILE - END

// SYNTAX:
// bool is_uploaded_file(string $filename)

return $return_is_uploaded_file; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_UPLOADED_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_WRITABLE
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the filename is writable.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_writable() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_writable($filename)
{
$return_is_writable = false;

// ========== IS_WRITABLE - BEGIN
// ===== ABOUT
// Tells whether the filename is writable
// ===== DESCRIPTION
// Returns true if the filename exists and is writable. The filename argument may be a directory name allowing you to check if a directory is writable.
// Keep in mind that PHP may be accessing the file as the user id that the web server runs as (often 'nobody').
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_writable(string $filename): bool
// ===== CODE
$return_is_writable = is_writable(

$filename // string filename - The filename being checked.

); // Return Values
// Returns true if the filename exists and is writable.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 is_writable() example
// [php]
// $filename = 'test.txt';
// if (is_writable($filename)) {
//     echo 'The file is writable';
// } else {
//     echo 'The file is not writable';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-writable.php
// ========== IS_WRITABLE - END

// SYNTAX:
// bool is_writable(string $filename)

return $return_is_writable; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_WRITABLE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_IS_WRITEABLE
// ============================== PUBLIC
// ============================== ABOUT
// Tells whether the filename is writable.
// 
// is_writeable - Alias of is_writable().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// is_writeable() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_is_writeable($filename)
{
$return_is_writeable = false;

// ========== IS_WRITEABLE - BEGIN
// ===== ABOUT
// is_writeable - Alias of is_writable()
// ===== DESCRIPTION
// This function is an alias of: is_writable().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_is_writeable = is_writeable(

$filename // string $filename

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-writeable.php
// ========== IS_WRITEABLE - END

// ========== IS_WRITABLE - BEGIN
// ===== ABOUT
// Tells whether the filename is writable
// ===== DESCRIPTION
// Returns true if the filename exists and is writable. The filename argument may be a directory name allowing you to check if a directory is writable.
// Keep in mind that PHP may be accessing the file as the user id that the web server runs as (often 'nobody').
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// is_writable(string $filename): bool
// ===== CODE
// $return_is_writable = is_writable(

// $filename // string filename - The filename being checked.

// ); // Return Values
// Returns true if the filename exists and is writable.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 is_writable() example
// [php]
// $filename = 'test.txt';
// if (is_writable($filename)) {
//     echo 'The file is writable';
// } else {
//     echo 'The file is not writable';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.is-writable.php
// ========== IS_WRITABLE - END

// SYNTAX:
// bool is_writeable(string $filename)

return $return_is_writeable; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_IS_WRITEABLE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_LCHGRP
// ============================== OFFLINE
// ============================== ABOUT
// Changes group ownership of symlink.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// lchgrp() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ============================== CODE
/*
function php_filesystem_filesystem_lchgrp($filename, $group)
{
$return_lchgrp = false;

// ========== LCHGRP - BEGIN
// ===== ABOUT
// Changes group ownership of symlink
// ===== DESCRIPTION
// Attempts to change the group of the symlink filename to group.
// Only the superuser may change the group of a symlink arbitrarily; other users may change the group of a symlink to any group of which that user is a member.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ===== SYNTAX
// lchgrp(string $filename, string|int $group): bool
// ===== CODE
$return_lchgrp = lchgrp(

$filename, // string filename - Path to the symlink.

$group // string|int group - The group specified by name or number.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Changing the group of a symbolic link
// [php]
// $target = 'output.php';
// $link = 'output.html';
// symlink($target, $link);
// 
// lchgrp($link, 8);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// Note: This function is not implemented on Windows platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.lchgrp.php
// ========== LCHGRP - END

// SYNTAX:
// bool lchgrp(string $filename, string|int $group)

return $return_lchgrp; // bool
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_LCHGRP
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_LCHOWN
// ============================== OFFLINE
// ============================== ABOUT
// Changes user ownership of symlink.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// lchown() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ============================== CODE
/*
function php_filesystem_filesystem_lchown($filename, $user)
{
$return_lchown = false;

// ========== LCHOWN - BEGIN
// ===== ABOUT
// Changes user ownership of symlink
// ===== DESCRIPTION
// Attempts to change the owner of the symlink filename to user user.
// Only the superuser may change the owner of a symlink.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ===== SYNTAX
// lchown(string $filename, string|int $user): bool
// ===== CODE
$return_lchown = lchown(

$filename, // string filename - Path to the file.

$user // string|int user - User name or number.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Changing the owner of a symbolic link
// [php]
// $target = 'output.php';
// $link = 'output.html';
// symlink($target, $link);
// 
// lchown($link, 8);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// Note: This function is not implemented on Windows platforms.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.lchown.php
// ========== LCHOWN - END

// SYNTAX:
// bool lchown(string $filename, string|int $user)

return $return_lchown; // bool
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_LCHOWN
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_LINK
// ============================== PUBLIC
// ============================== ABOUT
// Create a hard link.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// link() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_link($target, $link)
{
$return_link = false;

// ========== LINK - BEGIN
// ===== ABOUT
// Create a hard link
// ===== DESCRIPTION
// link() creates a hard link.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// link(string $target, string $link): bool
// ===== CODE
$return_link = link(

$target, // string target - Target of the link.

$link // string link - The link name.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// The function fails, and issues E_WARNING, if link already exists, or if target does not exist.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating a simple hard link
// [php]
// $target = 'source.ext'; // This is the file that already exists
// $link = 'newfile.ext'; // This the filename that you want to link it to
// 
// link($target, $link);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function will not work on remote files as the file to be examined must be accessible via the server's filesystem.
// Note: For Windows only: This function requires PHP to run in an elevated mode or with the UAC disabled.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.link.php
// ========== LINK - END

// SYNTAX:
// bool link(string $target, string $link)

return $return_link; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_LINK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_LINKINFO
// ============================== PUBLIC
// ============================== ABOUT
// Gets information about a link.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// linkinfo() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_linkinfo($path)
{
$return_linkinfo = false;

// ========== LINKINFO - BEGIN
// ===== ABOUT
// Gets information about a link
// ===== DESCRIPTION
// Gets information about a link.
// This function is used to verify if a link (pointed to by path) really exists (using the same method as the S_ISLNK macro defined in stat.h).
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// linkinfo(string $path): int|false
// ===== CODE
$return_linkinfo = linkinfo(

$path // string path - Path to the link.

); // Return Values
// linkinfo() returns the st_dev field of the Unix C stat structure returned by the lstat system call. Returns a non-negative integer on success, -1 in case the link was not found, or false if an open.base_dir violation occurs.
// 
// [examples]
// Examples
// [example]
// Example #1 linkinfo() example
// [php]
// 
// echo linkinfo('/vmlinuz'); // 835
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.linkinfo.php
// ========== LINKINFO - END

// SYNTAX:
// int|false linkinfo(string $path)

return $return_linkinfo; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_LINKINFO
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_LSTAT
// ============================== PUBLIC
// ============================== ABOUT
// Gives information about a file or symbolic link.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// lstat() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_lstat($filename)
{
$return_lstat = false;

// ========== LSTAT - BEGIN
// ===== ABOUT
// Gives information about a file or symbolic link
// ===== DESCRIPTION
// Gathers the statistics of the file or symbolic link named by filename.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// lstat(string $filename): array|false
// ===== CODE
$return_lstat = lstat(

$filename // string filename - Path to a file or a symbolic link.

); // Return Values
// See the manual page for stat() for information on the structure of the array that lstat() returns. This function is identical to the stat() function except that if the filename parameter is a symbolic link, the status of the symbolic link is returned, not the status of the file pointed to by the symbolic link.
// On failure, false is returned.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Comparison of stat() and lstat()
// [php]
// symlink('uploads.php', 'uploads');
// 
// // Contrast information for uploads.php and uploads
// array_diff(stat('uploads'), lstat('uploads'));
// [/php]
// The above example will output something similar to:
// Information that differs between the two files.
// [result]
// Array
// (
//     [ino] => 97236376
//     [mode] => 33188
//     [size] => 34
//     [atime] => 1223580003
//     [mtime] => 1223581848
//     [ctime] => 1223581848
//     [blocks] => 8
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.lstat.php
// ========== LSTAT - END

// SYNTAX:
// array|false lstat(string $filename)

return $return_lstat; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_LSTAT
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_MKDIR
// ============================== PUBLIC
// ============================== ABOUT
// Makes directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// mkdir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_mkdir($directory, $permissions = 0777, $recursive = false, $context = null)
{
$return_mkdir = false;

// ========== MKDIR - BEGIN
// ===== ABOUT
// Makes directory
// ===== DESCRIPTION
// Attempts to create the directory specified by directory.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// mkdir(
//     string $directory,
//     int $permissions = 0777,
//     bool $recursive = false,
//     ?resource $context = null
// ): bool
// ===== CODE
$return_mkdir = mkdir(

$directory, // string $directory - The directory path.
// Tip: A URL can be used as a filename with this function if the fopen wrappers have been enabled. See fopen() for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.

$permissions, // int $permissions - The permissions are 0777 by default, which means the widest possible access. For more information on permissions, read the details on the chmod() page.
// Note: permissions is ignored on Windows.
// Note that you probably want to specify the permissions as an octal number, which means it should have a leading zero. The permissions is also modified by the current umask, which you can change using umask().

$recursive, // bool $recursive - If true, then any parent directories to the directory specified will also be created, with the same permissions.

$context // resource context - A context stream resource.

); // Return Values
// Returns true on success or false on failure.
// Note: If the directory to be created already exists, that is considered an error and false will still be returned. Use is_dir() or file_exists() to check if the directory already exists before trying to create it.
// 
// Errors/Exceptions
// Emits an E_WARNING level error if the directory already exists.
// Emits an E_WARNING level error if the relevant permissions prevent creating the directory.
// 
// [examples]
// Examples
// [example]
// Example #1 mkdir() example
// [php]
// mkdir("/path/to/my/dir", 0700);
// [/php]
// [/example]
// [example]
// Example #2 mkdir() using the recursive parameter
// [php]
// // Desired directory structure
// $structure = './depth1/depth2/depth3/';
// 
// // To create the nested structure, the $recursive parameter 
// // to mkdir() must be specified.
// 
// if (!mkdir($structure, 0777, true)) {
//     die('Failed to create directories...');
// }
// 
// // ...
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.mkdir.php
// ========== MKDIR - END

// SYNTAX:
// bool mkdir(string $directory, int $permissions = 0777, bool $recursive = false, resource $context = null)

return $return_mkdir; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_MKDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_MOVE_UPLOADED_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Moves an uploaded file to a new location.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// move_uploaded_file() - PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_move_uploaded_file($from, $to)
{
$return_move_uploaded_file = false;

// ========== MOVE_UPLOADED_FILE - BEGIN
// ===== ABOUT
// Moves an uploaded file to a new location
// ===== DESCRIPTION
// This function checks to ensure that the file designated by from is a valid upload file (meaning that it was uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given by to.
// This sort of check is especially important if there is any chance that anything done with uploaded files could reveal their contents to the user, or even to other users on the same system.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// move_uploaded_file(string $from, string $to): bool
// ===== CODE
$return_move_uploaded_file = move_uploaded_file(

$from, // string from - The filename of the uploaded file.

$to // string to - The destination of the moved file.

); // Return Values
// Returns true on success.
// If from is not a valid upload file, then no action will occur, and move_uploaded_file() will return false.
// If from is a valid upload file, but cannot be moved for some reason, no action will occur, and move_uploaded_file() will return false. Additionally, a warning will be issued.
// 
// [examples]
// Examples
// [example]
// Example #1 Uploading multiple files
// [php]
// $uploads_dir = '/uploads';
// foreach ($_FILES["pictures"]["error"] as $key => $error) {
//     if ($error == UPLOAD_ERR_OK) {
//         $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
//         // basename() may prevent filesystem traversal attacks;
//         // further validation/sanitation of the filename may be appropriate
//         $name = basename($_FILES["pictures"]["name"][$key]);
//         move_uploaded_file($tmp_name, "$uploads_dir/$name");
//     }
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: move_uploaded_file() is open_basedir aware. However, restrictions are placed only on the to path as to allow the moving of uploaded files in which from may conflict with such restrictions. move_uploaded_file() ensures the safety of this operation by allowing only those files uploaded through PHP to be moved.
// Warning: If the destination file already exists, it will be overwritten.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.move-uploaded-file.php
// ========== MOVE_UPLOADED_FILE - END

// SYNTAX:
// bool move_uploaded_file(string $from, string $to)

return $return_move_uploaded_file; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_MOVE_UPLOADED_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_PARSE_INI_FILE
// ============================== PUBLIC
// ============================== ABOUT
// Parse a configuration file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// parse_ini_file() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// INI_SCANNER_NORMAL - parse_ini_file()
// ============================== CODE
function php_filesystem_filesystem_parse_ini_file($filename, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL)
{
$return_parse_ini_file = false;

// ========== PARSE_INI_FILE - BEGIN
// ===== ABOUT
// Parse a configuration file
// ===== DESCRIPTION
// parse_ini_file() loads in the ini file specified in filename, and returns the settings in it in an associative array.
// The structure of the ini file is the same as the php.ini's.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false
// ===== CODE
$return_parse_ini_file = parse_ini_file(

$filename, // string filename - The filename of the ini file being parsed. If a relative path is used, it is evaluated relative to the current working directory, then the include_path.

$process_sections, // bool process_sections - By setting the process_sections parameter to true, you get a multidimensional array, with the section names and settings included. The default for process_sections is false

$scanner_mode // int scanner_mode - Can either be INI_SCANNER_NORMAL (default) or INI_SCANNER_RAW. If INI_SCANNER_RAW is supplied, then option values will not be parsed.
// As of PHP 5.6.1 can also be specified as INI_SCANNER_TYPED. In this mode boolean, null and integer types are preserved when possible. String values "true", "on" and "yes" are converted to true. "false", "off", "no" and "none" are considered false. "null" is converted to null in typed mode. Also, all numeric strings are converted to integer type if it is possible.

); // Return Values
// The settings are returned as an associative array on success, and false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Contents of sample.ini
// [code]
// ; This is a sample configuration file
// ; Comments start with ';', as in php.ini
// 
// [first_section]
// one = 1
// five = 5
// animal = BIRD
// 
// [second_section]
// path = "/usr/local/bin"
// URL = "http://www.example.com/~username"
// 
// [third_section]
// phpversion[] = "5.0"
// phpversion[] = "5.1"
// phpversion[] = "5.2"
// phpversion[] = "5.3"
// 
// urls[svn] = "http://svn.php.net"
// urls[git] = "http://git.php.net"
// [/code]
// [/example]
// [example]
// Example #2 parse_ini_file() example
// Constants (but not "magic constants" like __FILE__) may also be parsed in the ini file so if you define a constant as an ini value before running parse_ini_file(), it will be integrated into the results. Only ini values are evaluated, and the value must be just the constant. For example:
// [php]
// 
// define('BIRD', 'Dodo bird');
// 
// // Parse without sections
// $ini_array = parse_ini_file("sample.ini");
// print_r($ini_array);
// 
// // Parse with sections
// $ini_array = parse_ini_file("sample.ini", true);
// print_r($ini_array);
// 
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [one] => 1
//     [five] => 5
//     [animal] => Dodo bird
//     [path] => /usr/local/bin
//     [URL] => http://www.example.com/~username
//     [phpversion] => Array
//         (
//             [0] => 5.0
//             [1] => 5.1
//             [2] => 5.2
//             [3] => 5.3
//         )
// 
//     [urls] => Array
//         (
//             [svn] => http://svn.php.net
//             [git] => http://git.php.net
//         )
// 
// )
// Array
// (
//     [first_section] => Array
//         (
//             [one] => 1
//             [five] => 5
//             [animal] => Dodo bird
//         )
// 
//     [second_section] => Array
//         (
//             [path] => /usr/local/bin
//             [URL] => http://www.example.com/~username
//         )
// 
//     [third_section] => Array
//         (
//             [phpversion] => Array
//                 (
//                     [0] => 5.0
//                     [1] => 5.1
//                     [2] => 5.2
//                     [3] => 5.3
//                 )
// 
//             [urls] => Array
//                 (
//                     [svn] => http://svn.php.net
//                     [git] => http://git.php.net
//                 )
// 
//         )
// 
// )
// [/result]
// [/example]
// [example]
// Example #3 parse_ini_file() parsing a php.ini file
// [php]
// // A simple function used for comparing the results below
// function yesno($expression)
// {
//     return($expression ? 'Yes' : 'No');
// }
// 
// // Get the path to php.ini using the php_ini_loaded_file() function
// $ini_path = php_ini_loaded_file();
// 
// // Parse php.ini
// $ini = parse_ini_file($ini_path);
// 
// // Print and compare the values, note that using get_cfg_var()
// // will give the same results for parsed and loaded here
// echo '(parsed) magic_quotes_gpc = ' . yesno($ini['magic_quotes_gpc']) . PHP_EOL;
// echo '(loaded) magic_quotes_gpc = ' . yesno(get_cfg_var('magic_quotes_gpc')) . PHP_EOL;
// [/php]
// The above example will output something similar to:
// [result]
// (parsed) magic_quotes_gpc = Yes
// (loaded) magic_quotes_gpc = Yes
// [/result]
// [/example]
// [example]
// Example #4 Value Interpolation
// In addition to evaluating constants, certain characters have special meaning in an ini value. Additionally, environment variables and previously defined configuration options (see get_cfg_var()) may be read using ${} syntax.
// [code]
// ; | is used for bitwise OR
// three = 2|3
// 
// ; & is used for bitwise AND
// four = 6&5
// 
// ; ^ is used for bitwise XOR
// five = 3^6
// 
// ; ~ is used for bitwise negate
// negative_two = ~1
// 
// ; () is used for grouping
// seven = (8|7)&(6|5)
// 
// ; Interpolate the PATH environment variable
// path = ${PATH}
// 
// ; Interpolate the configuration option 'memory_limit'
// configured_memory_limit = ${memory_limit}
// [/code]
// [/example]
// [example]
// Example #5 Escaping Characters
// Some characters have special meaning in double-quoted strings and must be escaped by the backslash prefix. First of all, these are the double quote " as the boundary marker, and the backslash \ itself (if followed by one of the special characters):
// [code]
// quoted = "She said \"Exactly my point\"." ; Results in a string with quote marks in it.
// hint = "Use \\\" to escape double quote" ; Results in: Use \" to escape double quote
// [/code]
// There is an exception made for Windows-like paths: it's possible to not escape trailing backslash if the quoted string is directly followed by a linebreak:
// [code]
// save_path = "C:\Temp\"
// [/code]
// If one does need to escape double quote followed by linebreak in a multiline value, it's possible to use value concatenation in the following way (there is one double-quoted string directly followed by another one):
// [code]
// long_text = "Lorem \"ipsum\"""
//  dolor" ; Results in: Lorem "ipsum"\n dolor
// [/code]
// Another character with special meaning is $ (the dollar sign). It must be escaped if followed by the open curly brace:
// [code]
// code = "\${test}"
// [/code]
// Escaping characters is not supported in the INI_SCANNER_RAW mode (in this mode all characters are processed "as is").
// Note that the ini parser doesn't support standard escape sequences (\n, \t, etc.). If necessary, post-process the result of parse_ini_file() with stripcslashes() function.
// [/example]
// [/examples]
// 
// Notes
// Note: This function has nothing to do with the php.ini file. It is already processed by the time you run your script. This function can be used to read in your own application's configuration files.
// Note: If a value in the ini file contains any non-alphanumeric characters it needs to be enclosed in double-quotes (").
// Note: There are reserved words which must not be used as keys for ini files. These include: null, yes, no, true, false, on, off, none. Values null, off, no and false result in "", and values on, yes and true result in "1", unless INI_SCANNER_TYPED mode is used. Characters ?{}|&~!()^" must not be used anywhere in the key and have a special meaning in the value.
// Note: Entries without an equal sign are ignored. For example, "foo" is ignored whereas "bar =" is parsed and added with an empty value. For example, MySQL has a "no-auto-rehash" setting in my.cnf that does not take a value, so it is ignored.
// Note: ini files are generally treated as plain text by web servers and thus served to browsers if requested. That means for security you must either keep your ini files outside of your docroot or reconfigure your web server to not serve them. Failure to do either of those may introduce a security risk.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.parse-ini-file.php
// ========== PARSE_INI_FILE - END

// SYNTAX:
// array|false parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL)

return $return_parse_ini_file; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_PARSE_INI_FILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_PARSE_INI_STRING
// ============================== OFFLINE
// ============================== ABOUT
// Parse a configuration string.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// parse_ini_string() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// INI_SCANNER_NORMAL - parse_ini_string()
// ============================== CODE
/*
function php_filesystem_filesystem_parse_ini_string($ini_string, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL)
{
$return_parse_ini_string = false;

// ========== PARSE_INI_STRING - BEGIN
// ===== ABOUT
// Parse a configuration string
// ===== DESCRIPTION
// parse_ini_string() returns the settings in string ini_string in an associative array.
// The structure of the ini string is the same as the php.ini's.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false
// ===== CODE
$return_parse_ini_string = parse_ini_string(

$ini_string, // string ini_string - The contents of the ini file being parsed.

$process_sections, // bool process_sections - By setting the process_sections parameter to true, you get a multidimensional array, with the section names and settings included. The default for process_sections is false

$scanner_mode // int scanner_mode - Can either be INI_SCANNER_NORMAL (default) or INI_SCANNER_RAW. If INI_SCANNER_RAW is supplied, then option values will not be parsed.
// As of PHP 5.6.1 can also be specified as INI_SCANNER_TYPED. In this mode boolean, null and integer types are preserved when possible. String values "true", "on" and "yes" are converted to true. "false", "off", "no" and "none" are considered false. "null" is converted to null in typed mode. Also, all numeric strings are converted to integer type if it is possible.

); // Return Values
// The settings are returned as an associative array on success, and false on failure.
// 
// Notes
// Note: There are reserved words which must not be used as keys for ini files. These include: null, yes, no, true, false, on, off, none. Values null, off, no and false result in "", and values on, yes and true result in "1", unless INI_SCANNER_TYPED mode is used. Characters ?{}|&~![()^" must not be used anywhere in the key and have a special meaning in the value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.parse-ini-string.php
// ========== PARSE_INI_STRING - END

// SYNTAX:
// array|false parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL)

return $return_parse_ini_string; // array|false
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_PARSE_INI_STRING
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_PATHINFO
// ============================== PUBLIC
// ============================== ABOUT
// Returns information about a file path
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// pathinfo() - PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// PATHINFO_ALL - pathinfo()
// ============================== CODE
function php_filesystem_filesystem_pathinfo($path, $flags = PATHINFO_ALL)
{
$return_pathinfo = null;

// ========== PATHINFO - BEGIN
// ===== ABOUT
// Returns information about a file path
// ===== DESCRIPTION
// pathinfo() returns information about path: either an associative array or a string, depending on flags.
// Note: For information on retrieving the current path info, read the section on predefined reserved variables.
// Note: pathinfo() operates naively on the input string, and is not aware of the actual filesystem, or path components such as "..".
// Note: On Windows systems only, the \ character will be interpreted as a directory separator. On other systems it will be treated like any other character.
// Caution: pathinfo() is locale aware, so for it to parse a path containing multibyte characters correctly, the matching locale must be set using the setlocale() function.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_3, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// pathinfo(string $path, int $flags = PATHINFO_ALL): array|string
// ===== CODE
$return_pathinfo = pathinfo(

$path, // string $path - The path to be parsed.

$flags // int $flags - If present, specifies a specific element to be returned; one of PATHINFO_DIRNAME, PATHINFO_BASENAME, PATHINFO_EXTENSION or PATHINFO_FILENAME.
// If flags is not specified, returns all available elements.

); // Return Values
// If the flags parameter is not passed, an associative array containing the following elements is returned: dirname, basename, extension (if any), and filename.
// Note: If the path has more than one extension, PATHINFO_EXTENSION returns only the last one and PATHINFO_FILENAME only strips the last one. (see first example below).
// Note: If the path does not have an extension, no extension element will be returned (see second example below).
// Note: If the basename of the path starts with a dot, the following characters are interpreted as extension, and the filename is empty (see third example below).
// If flags is present, returns a string containing the requested element.
// 
// [examples]
// Examples
// [example]
// Example #1 pathinfo() Example
// [php]
// $path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');
// 
// echo $path_parts['dirname'], "\n";
// echo $path_parts['basename'], "\n";
// echo $path_parts['extension'], "\n";
// echo $path_parts['filename'], "\n";
// [/php]
// The above example will output:
// [result]
// /www/htdocs/inc
// lib.inc.php
// php
// lib.inc
// [/result]
// [/example]
// [example]
// Example #2 pathinfo() example showing difference between null and no extension
// [php]
// $path_parts = pathinfo('/path/emptyextension.');
// var_dump($path_parts['extension']);
// 
// $path_parts = pathinfo('/path/noextension');
// var_dump($path_parts['extension']);
// [/php]
// The above example will output something similar to:
// [result]
// string(0) ""
// 
// Notice: Undefined index: extension in test.php on line 6
// NULL
// [/result]
// [/example]
// [example]
// Example #3 pathinfo() example for a dot-file
// [php]
// print_r(pathinfo('/some/path/.test'));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [dirname] => /some/path
//     [basename] => .test
//     [extension] => test
//     [filename] =>
// )
// [/result]
// [/example]
// [example]
// Example #4 pathinfo() example with array dereferencing
// The flags parameter is not a bitmask. Only a single value may be provided. To select only a limited set of parsed values, use array destructuring like so:
// [php]
// ['basename' => $basename, 'dirname' => $dirname] = pathinfo('/www/htdocs/inc/lib.inc.php');
// 
// var_dump($basename, $dirname);
// [/php]
// The above example will output something similar to:
// [result]
// string(11) "lib.inc.php"
// string(15) "/www/htdocs/inc"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.pathinfo.php
// ========== PATHINFO - END

// SYNTAX:
// array|string pathinfo(string $path, int $flags = PATHINFO_ALL)

return $return_pathinfo; // array|string
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_PATHINFO
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_PCLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Closes process file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// pclose() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_pclose($handle)
{
$return_pclose = 0;

// ========== PCLOSE - BEGIN
// ===== ABOUT
// Closes process file pointer
// ===== DESCRIPTION
// Closes a file pointer to a pipe opened by popen().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// pclose(resource $handle): int
// ===== CODE
$return_pclose = pclose(

$handle // resource handle - The file pointer must be valid, and must have been returned by a successful call to popen().

); // Return Values
// Returns the termination status of the process that was run. In case of an error then -1 is returned.
// Note: If PHP has been compiled with --enable-sigchild, the return value of this function is undefined.
// 
// [examples]
// Examples
// [example]
// Example #1 pclose() example
// [php]
// $handle = popen('/bin/ls', 'r');
// pclose($handle);
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: Unix Only:
//  pclose() is internally implemented using the waitpid(3) system call. To obtain the real exit status code the pcntl_wexitstatus() function should be used.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.pclose.php
// ========== PCLOSE - END

// SYNTAX:
// int pclose(resource $handle)

return $return_pclose; // int
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_PCLOSE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_POPEN
// ============================== PUBLIC
// ============================== ABOUT
// Opens process file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// popen() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_popen($command, $mode)
{
$return_popen = false;

// ========== POPEN - BEGIN
// ===== ABOUT
// Opens process file pointer
// ===== DESCRIPTION
// Opens a pipe to a process executed by forking the command given by command.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// popen(string $command, string $mode): resource|false
// ===== CODE
$return_popen = popen(

$command, // string command - The command

$mode // string mode - The mode. Either 'r' for reading, or 'w' for writing.
// On Windows, popen() defaults to text mode, i.e. any \n characters written to or read from the pipe will be translated to \r\n. If this is not desired, binary mode can be enforced by setting mode to 'rb' and 'wb', respectively.

); // Return Values
// Returns a file pointer identical to that returned by fopen(), except that it is unidirectional (may only be used for reading or writing) and must be closed with pclose(). This pointer may be used with fgets(), fgetss(), and fwrite(). When the mode is 'r', the returned file pointer equals to the STDOUT of the command, when the mode is 'w', the returned file pointer equals to the STDIN of the command.
// If an error occurs, returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 popen() example
// [php]
// $handle = popen("/bin/ls", "r");
// [/php]
// If the command to be executed could not be found, a valid resource is returned. This may seem odd, but makes sense; it allows you to access any error message returned by the shell:
// [/example]
// [example]
// Example #2 popen() example
// [php]
// error_reporting(E_ALL);
// 
// // Add redirection so we can get stderr.
// $handle = popen('/path/to/executable 2>&1', 'r');
// echo "'$handle'; " . gettype($handle) . "\n";
// $read = fread($handle, 2096);
// echo $read;
// pclose($handle);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If you're looking for bi-directional support (two-way), use proc_open().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.popen.php
// ========== POPEN - END

// SYNTAX:
// resource|false popen(string $command, string $mode)

return $return_popen; // resource|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_POPEN
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_READFILE
// ============================== PUBLIC
// ============================== ABOUT
// Outputs a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// readfile() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_readfile($filename, $use_include_path = false, $context = null)
{
$return_readfile = false;

// ========== READFILE - BEGIN
// ===== ABOUT
// Outputs a file
// ===== DESCRIPTION
// Reads a file and writes it to the output buffer.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// readfile(string $filename, bool $use_include_path = false, ?resource $context = null): int|false
// ===== CODE
$return_readfile = readfile(

$filename, // string filename - The filename being read.

$use_include_path, // bool use_include_path - You can use the optional second parameter and set it to true, if you want to search for the file in the include_path, too.

$context // resource context - A context stream resource.

); // Return Values
// Returns the number of bytes read from the file on success, or false on failure
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// [examples]
// Examples
// [example]
// Example #1 Forcing a download using readfile()
// [php]
// $file = 'monkey.gif';
// 
// if (file_exists($file)) {
//     header('Content-Description: File Transfer');
//     header('Content-Type: application/octet-stream');
//     header('Content-Disposition: attachment; filename="'.basename($file).'"');
//     header('Expires: 0');
//     header('Cache-Control: must-revalidate');
//     header('Pragma: public');
//     header('Content-Length: ' . filesize($file));
//     readfile($file);
//     exit;
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: readfile() will not present any memory issues, even when sending large files, on its own. If you encounter an out of memory error ensure that output buffering is off with ob_get_level().
// Tip: A URL can be used as a filename with this function if the fopen wrappers have been enabled. See fopen() for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.readfile.php
// ========== READFILE - END

// SYNTAX:
// int|false readfile(string $filename, bool $use_include_path = false, resource $context = null)

return $return_readfile; // int|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_READFILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_READLINK
// ============================== PUBLIC
// ============================== ABOUT
// Returns the target of a symbolic link.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// readlink() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_readlink($path)
{
$return_readlink = false;

// ========== READLINK - BEGIN
// ===== ABOUT
// Returns the target of a symbolic link
// ===== DESCRIPTION
// readlink() does the same as the readlink C function.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// readlink(string $path): string|false
// ===== CODE
$return_readlink = readlink(

$path // string path - The symbolic link path.

); // Return Values
// Returns the contents of the symbolic link path or false on error.
// Note: The function fails if path is not a symlink, except on Windows, where the normalized path will be returned.
// 
// [examples]
// Examples
// [example]
// Example #1 readlink() example
// [php]
// 
// // output e.g. /boot/vmlinux-2.4.20-xfs
// echo readlink('/vmlinuz');
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.readlink.php
// ========== READLINK - END

// SYNTAX:
// string|false readlink(string $path)

return $return_readlink; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_READLINK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_REALPATH_CACHE_GET
// ============================== OFFLINE
// ============================== ABOUT
// Get realpath cache entries.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// realpath_cache_get() - PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_filesystem_filesystem_realpath_cache_get()
{
$return_realpath_cache_get = null;

// ========== REALPATH_CACHE_GET - BEGIN
// ===== ABOUT
// Get realpath cache entries
// ===== DESCRIPTION
// Get the contents of the realpath cache.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// ===== SYNTAX
// realpath_cache_get(): array
// ===== CODE
$return_realpath_cache_get = realpath_cache_get(

// This function has no parameters.

); // Return Values
// Returns an array of realpath cache entries. The keys are original path entries, and the values are arrays of data items, containing the resolved path, expiration date, and other options kept in the cache.
// 
// [examples]
// Examples
// [example]
// Example #1 realpath_cache_get() example
// [php]
// var_dump(realpath_cache_get());
// [/php]
// The above example will output something similar to:
// [result]
array(2) {
  ["/test"]=>
  array(4) {
    ["key"]=>
    int(123456789)
    ["is_dir"]=>
    bool(true)
    ["realpath"]=>
    string(5) "/test"
    ["expires"]=>
    int(1260318939)
  }
  ["/test/test.php"]=>
  array(4) {
    ["key"]=>
    int(987654321)
    ["is_dir"]=>
    bool(false)
    ["realpath"]=>
    string(12) "/root/test.php"
    ["expires"]=>
    int(1260318939)
  }
}
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.realpath-cache-get.php
// ========== REALPATH_CACHE_GET - END

// SYNTAX:
// array realpath_cache_get()

return $return_realpath_cache_get; // array
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_REALPATH_CACHE_GET
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_REALPATH_CACHE_SIZE
// ============================== OFFLINE
// ============================== ABOUT
// Get realpath cache size.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// realpath_cache_size() - PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_filesystem_filesystem_realpath_cache_size()
{
$return_realpath_cache_size = 0;

// ========== REALPATH_CACHE_SIZE - BEGIN
// ===== ABOUT
// Get realpath cache size
// ===== DESCRIPTION
// Get the amount of memory used by the realpath cache.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// ===== SYNTAX
// realpath_cache_size(): int
// ===== CODE
$return_realpath_cache_size = realpath_cache_size(

// This function has no parameters.

); // Return Values
// Returns how much memory realpath cache is using.
// 
// [examples]
// Examples
// [example]
// Example #1 realpath_cache_size() example
// [php]
// var_dump(realpath_cache_size());
// [/php]
// The above example will output something similar to:
// [result]
// int(412)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.realpath-cache-size.php
// ========== REALPATH_CACHE_SIZE - END

// SYNTAX:
// int realpath_cache_size()

return $return_realpath_cache_size; // int
}
*/
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_REALPATH_CACHE_SIZE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_REALPATH
// ============================== PUBLIC
// ============================== ABOUT
// Returns canonicalized absolute pathname.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// realpath() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_realpath($path)
{
$return_realpath = false;

// ========== REALPATH - BEGIN
// ===== ABOUT
// Returns canonicalized absolute pathname
// ===== DESCRIPTION
// realpath() expands all symbolic links and resolves references to /./, /../ and extra / characters in the input path and returns the canonicalized absolute pathname.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// realpath(string $path): string|false
// ===== CODE
$return_realpath = realpath(

$path // string path - The path being checked.
// Note: Whilst a path must be supplied, the value can be an empty string. In this case, the value is interpreted as the current directory.

); // Return Values
// Returns the canonicalized absolute pathname on success. The resulting path will have no symbolic link, /./ or /../ components. Trailing delimiters, such as \ and /, are also removed.
// realpath() returns false on failure, e.g. if the file does not exist.
// Note: The running script must have executable permissions on all directories in the hierarchy, otherwise realpath() will return false.
// Note: For case-insensitive filesystems realpath() may or may not normalize the character case.
// Note: The function realpath() will not work for a file which is inside a Phar as such path would be a virtual path, not a real one.
// Note: On Windows, junctions and symbolic links to directories are only expanded by one level.
// Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.
// 
// [examples]
// Examples
// [example]
// Example #1 realpath() example
// [php]
// chdir('/var/www/');
// echo realpath('./../../etc/passwd') . PHP_EOL;
// 
// echo realpath('/tmp/') . PHP_EOL;
// [/php]
// The above example will output:
// [result]
// /etc/passwd
// /tmp
// [/result]
// [/example]
// [example]
// Example #2 realpath() on Windows
// On windows realpath() will change unix style paths to windows style.
// [php]
// echo realpath('/windows/system32'), PHP_EOL;
// 
// echo realpath('C:\Program Files\\'), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// C:\WINDOWS\System32
// C:\Program Files
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.realpath.php
// ========== REALPATH - END

// SYNTAX:
// string|false realpath(string $path)

return $return_realpath; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_REALPATH
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_RENAME
// ============================== PUBLIC
// ============================== ABOUT
// Renames a file or directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rename() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_rename($from, $to, $context = null)
{
$return_rename = false;

// ========== RENAME - BEGIN
// ===== ABOUT
// Renames a file or directory
// ===== DESCRIPTION
// Attempts to rename from to to, moving it between directories if necessary. If renaming a file and to exists, it will be overwritten. If renaming a directory and to exists, this function will emit a warning.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rename(string $from, string $to, ?resource $context = null): bool
// ===== CODE
$return_rename = rename(

$from, // string $from - The old name.
// Note: The wrapper used in from must match the wrapper used in to.

$to, // string $to - The new name.
// Note: On Windows, if to already exists, it must be writable. Otherwise rename() fails and issues E_WARNING.

$context // resource $context - A context stream resource.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Example with rename()
// [php]
// rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.rename.php
// ========== RENAME - END

// SYNTAX:
// bool rename(string $from, string $to, resource $context = null)

return $return_rename; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_RENAME
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_REWIND
// ============================== PUBLIC
// ============================== ABOUT
// Rewind the position of a file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rewind() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_rewind($stream)
{
$return_rewind = false;

// ========== REWIND - BEGIN
// ===== ABOUT
// Rewind the position of a file pointer
// ===== DESCRIPTION
// Sets the file position indicator for stream to the beginning of the file stream.
// Note: If you have opened the file in append ("a" or "a+") mode, any data you write to the file will always be appended, regardless of the file pointer position.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rewind(resource $stream): bool
// ===== CODE
$return_rewind = rewind(

$stream // resource stream - The file pointer must be valid, and must point to a file successfully opened by fopen().

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 rewind() overwriting example
// [php]
// $handle = fopen('output.txt', 'r+');
// 
// fwrite($handle, 'Really long sentence.');
// rewind($handle);
// fwrite($handle, 'Foo');
// rewind($handle);
// 
// echo fread($handle, filesize('output.txt'));
// 
// fclose($handle);
// [/php]
// The above example will output something similar to:
// [result]
// Foolly long sentence.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.rewind.php
// ========== REWIND - END

// SYNTAX:
// bool rewind(resource $stream)

return $return_rewind; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_REWIND
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_RMDIR
// ============================== PUBLIC
// ============================== ABOUT
// Removes directory.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rmdir() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_rmdir($directory, $context = null)
{
$return_rmdir = false;

// ========== RMDIR - BEGIN
// ===== ABOUT
// Removes directory
// ===== DESCRIPTION
// Attempts to remove the directory named by directory. The directory must be empty, and the relevant permissions must permit this. A E_WARNING level error will be generated on failure.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rmdir(string $directory, ?resource $context = null): bool
// ===== CODE
$return_rmdir = rmdir(

$directory, // string $directory - Path to the directory.

$context // resource $context - A context stream resource.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 rmdir() example
// [php]
// if (!is_dir('examples')) {
//     mkdir('examples');
// }
// 
// rmdir('examples');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.rmdir.php
// ========== RMDIR - END

// SYNTAX:
// bool rmdir(string $directory, resource $context = null)

return $return_rmdir; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_RMDIR
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_SET_FILE_BUFFER
// ============================== PUBLIC
// ============================== ABOUT
// Sets write file buffering on the given stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// set_file_buffer() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_set_file_buffer($stream, $size)
{
$return_set_file_buffer = 0;

// ========== SET_FILE_BUFFER - BEGIN
// ===== ABOUT
// set_file_buffer - Alias of stream_set_write_buffer()
// ===== DESCRIPTION
// This function is an alias of: stream_set_write_buffer().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_set_file_buffer = set_file_buffer(

$stream, // resource stream

$size // int size

); // Return
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.set-file-buffer.php
// ========== SET_FILE_BUFFER - END

// ========== STREAM_SET_WRITE_BUFFER - BEGIN
// ===== ABOUT
// Sets write file buffering on the given stream
// ===== DESCRIPTION
// Sets the buffering for write operations on the given stream to size bytes.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_set_write_buffer(resource $stream, int $size): int
// ===== CODE
// $return_set_file_buffer = stream_set_write_buffer(

// $stream, // resource stream - The file pointer.

// $size // int size - The number of bytes to buffer. If size is 0 then write operations are unbuffered. This ensures that all writes with fwrite() are completed before other processes are allowed to write to that output stream.

// ); // Return Values
// Returns 0 on success, or another value if the request cannot be honored.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_set_write_buffer() example
// The following example demonstrates how to use stream_set_write_buffer() to create an unbuffered stream.
// [php]
// $fp = fopen($file, "w");
// if ($fp) {
//   if (stream_set_write_buffer($fp, 0) !== 0) {
//       // changing the buffering failed
//   }
//   fwrite($fp, $output);
//   fclose($fp);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.stream-set-write-buffer.php
// ========== STREAM_SET_WRITE_BUFFER - END

// SYNTAX:
// int set_file_buffer(resource $stream, int $size)

return $return_set_file_buffer; // int
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_SET_FILE_BUFFER
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_STAT
// ============================== PUBLIC
// ============================== ABOUT
// Gives information about a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stat() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_stat($filename)
{
$return_stat = false;

// ========== STAT - BEGIN
// ===== ABOUT
// Gives information about a file
// ===== DESCRIPTION
// Gathers the statistics of the file named by filename. If filename is a symbolic link, statistics are from the file itself, not the symlink. Prior to PHP 7.4.0, on Windows NTS builds the size, atime, mtime and ctime statistics have been from the symlink, in this case.
// lstat() is identical to stat() except it would instead be based off the symlinks status.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stat(string $filename): array|false
// ===== CODE
$return_stat = stat(

$filename // string filename - Path to the file.

); // Return Values
// stat() and fstat() result format
// Numeric | Associative - Description
// 0       | dev         - device number ***
// 1       | ino         - inode number ****
// 2       | mode        - inode protection mode *****
// 3       | nlink       - number of links
// 4       | uid         - userid of owner *
// 5       | gid         - groupid of owner *
// 6       | rdev        - device type, if inode device
// 7       | size        - size in bytes
// 8       | atime       - time of last access (Unix timestamp)
// 9       | mtime       - time of last modification (Unix timestamp)
// 10      | ctime       - time of last inode change (Unix timestamp)
// 11      | blksize     - blocksize of filesystem IO **
// 12      | blocks      - number of 512-byte blocks allocated **
// * On Windows this will always be 0.
// ** Only valid on systems supporting the st_blksize type - other systems (e.g. Windows) return -1.
// *** On Windows, as of PHP 7.4.0, this is the serial number of the volume that contains the file, which is a 64-bit unsigned integer, so may overflow. Previously, it was the numeric representation of the drive letter (e.g. 2 for C:) for stat(), and 0 for lstat().
// **** On Windows, as of PHP 7.4.0, this is the identifier associated with the file, which is a 64-bit unsigned integer, so may overflow. Previously, it was always 0.
// ***** On Windows, the writable permission bit is set according to the read-only file attribute, and the same value is reported for all users, group and owner. The ACL is not taken into account, contrary to is_writable().
// The value of mode contains information read by several functions. When written in octal, starting from the right, the first three digits are returned by chmod(). The next digit is ignored by PHP. The next two digits indicate the file type:
// mode file types
// mode in octal - Meaning
// 0140000       - socket
// 0120000       - link
// 0100000       - regular file
// 0060000       - block device
// 0040000       - directory
// 0020000       - character device
// 0010000       - fifo
// So for example a regular file could be 0100644 and a directory could be 0040755.
// In case of error, stat() returns false.
// Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB.
// 
// Errors/Exceptions
// Upon failure, an E_WARNING is emitted.
// 
// Changelog
// Version - Description
// 7.4.0   - On Windows, the device number is now the serial number of the volume that contains the file, and the inode number is the identifier associated with the file.
// 7.4.0   - The size, atime, mtime and ctime statistics of symlinks are always those of the target. This was previously not the case for NTS builds on Windows.
// 
// [examples]
// Examples
// [example]
// Example #1 stat() example
// [php]
// // Get file stat
// $stat = stat('C:\php\php.exe');
// 
// // 
// // Print file access time, this is the same 
// // as calling fileatime()
// // 
// echo 'Access time: ' . $stat['atime'];
// 
// // 
// // Print file modification time, this is the 
// // same as calling filemtime()
// // 
// echo 'Modification time: ' . $stat['mtime'];
// 
// // Print the device number
// echo 'Device number: ' . $stat['dev'];
// [/php]
// [/example]
// [example]
// Example #2 Using stat() information together with touch()
// [php]
// // Get file stat
// $stat = stat('C:\php\php.exe');
// 
// // Did we failed to get stat information?
// if (!$stat) {
//     echo 'stat() call failed...';
// } else {
//     // 
//     // We want the access time to be 1 week 
//     // after the current access time.
//     // 
//     $atime = $stat['atime'] + 604800;
// 
//     // Touch the file
//     if (!touch('some_file.txt', time(), $atime)) {
//         echo 'Failed to touch file...';
//     } else {
//         echo 'touch() returned success...';
//     }
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Note that time resolution may differ from one file system to another.
// Note: The results of this function are cached. See clearstatcache() for more details.
// Tip: As of PHP 5.0.0, this function can also be used with some URL wrappers. Refer to Supported Protocols and Wrappers to determine which wrappers support stat() family of functionality.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.stat.php
// ========== STAT - END

// SYNTAX:
// array|false stat(string $filename)

return $return_stat; // array|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_STAT
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_SYMLINK
// ============================== PUBLIC
// ============================== ABOUT
// Creates a symbolic link.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// symlink() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_symlink($target, $link)
{
$return_symlink = false;

// ========== SYMLINK - BEGIN
// ===== ABOUT
// Creates a symbolic link
// ===== DESCRIPTION
// symlink() creates a symbolic link to the existing target with the specified name link.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// symlink(string $target, string $link): bool
// ===== CODE
$return_symlink = symlink(

$target, // string target - Target of the link.

$link // string link - The link name.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// The function fails, and issues E_WARNING, if link already exists. On Windows, the function also fails, and issues E_WARNING, if target does not exist.
// 
// [examples]
// Examples
// [example]
// Example #1 Create a symbolic link
// [php]
// $target = 'uploads.php';
// $link = 'uploads';
// symlink($target, $link);
// 
// echo readlink($link);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.symlink.php
// ========== SYMLINK - END

// SYNTAX:
// bool symlink(string $target, string $link)

return $return_symlink; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_SYMLINK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_TEMPNAM
// ============================== PUBLIC
// ============================== ABOUT
// Create file with unique file name.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// tempnam() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_tempnam($directory, $prefix)
{
$return_tempnam = false;

// ========== TEMPNAM - BEGIN
// ===== ABOUT
// Create file with unique file name
// ===== DESCRIPTION
// Creates a file with a unique filename, with access permission set to 0600, in the specified directory. If the directory does not exist or is not writable, tempnam() may generate a file in the system's temporary directory, and return the full path to that file, including its name.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// tempnam(string $directory, string $prefix): string|false
// ===== CODE
$return_tempnam = tempnam(

$directory, // string directory - The directory where the temporary filename will be created.

$prefix // string prefix - The prefix of the generated temporary filename.
// Note: Only the first 63 characters of the prefix are used, the rest are ignored. Windows uses only the first three characters of the prefix.

); // Return Values
// Returns the new temporary filename (with path), or false on failure.
// 
// Changelog
// Version - Description
// 7.1.0   - tempnam() now emits a notice when falling back to the temp directory of the system.
// 
// [examples]
// Examples
// [example]
// Example #1 tempnam() example
// [php]
// $tmpfname = tempnam("/tmp", "FOO");
// 
// $handle = fopen($tmpfname, "w");
// fwrite($handle, "writing to tempfile");
// fclose($handle);
// 
// // do something here
// 
// unlink($tmpfname);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If PHP cannot create a file in the specified directory parameter, it falls back on the system default. On NTFS this also happens if the specified directory contains more than 65534 files.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.tempnam.php
// ========== TEMPNAM - END

// SYNTAX:
// string|false tempnam(string $directory, string $prefix)

return $return_tempnam; // string|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_TEMPNAM
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_TMPFILE
// ============================== PUBLIC
// ============================== ABOUT
// Creates a temporary file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// tmpfile() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_tmpfile()
{
$return_tmpfile = false;

// ========== TMPFILE - BEGIN
// ===== ABOUT
// Creates a temporary file
// ===== DESCRIPTION
// Creates a temporary file with a unique name in read-write-binary (w+b) mode and returns a file handle.
// The file is automatically removed when closed (for example, by calling fclose(), or when there are no remaining references to the file handle returned by tmpfile()), or when the script ends.
// Caution: If the script terminates unexpectedly, the temporary file may not be deleted.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// tmpfile(): resource|false
// ===== CODE
$return_tmpfile = tmpfile(

// This function has no parameters.

); // Return Values
// Returns a file handle, similar to the one returned by fopen(), for the new file or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 tmpfile() example
// [php]
// $temp = tmpfile();
// fwrite($temp, "writing to tempfile");
// fseek($temp, 0);
// echo fread($temp, 1024);
// fclose($temp); // this removes the file
// [/php]
// The above example will output:
// [result]
// writing to tempfile
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.tmpfile.php
// ========== TMPFILE - END

// SYNTAX:
// resource|false tmpfile()

return $return_tmpfile; // resource|false
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_TMPFILE
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_TOUCH
// ============================== PUBLIC
// ============================== ABOUT
// Sets access and modification time of file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// touch() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_touch($filename, $mtime = null, $atime = null)
{
$return_touch = false;

// ========== TOUCH - BEGIN
// ===== ABOUT
// Sets access and modification time of file
// ===== DESCRIPTION
// Attempts to set the access and modification times of the file named in the filename parameter to the value given in mtime. Note that the access time is always modified, regardless of the number of parameters.
// If the file does not exist, it will be created.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// touch(string $filename, ?int $mtime = null, ?int $atime = null): bool
// ===== CODE
$return_touch = touch(

$filename, // string filename - The name of the file being touched.

$mtime, // int mtime - The touch time. If mtime is null, the current system time() is used.

$atime // int atime - If not null, the access time of the given filename is set to the value of atime. Otherwise, it is set to the value passed to the mtime parameter. If both are null, the current system time is used.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - mtime and atime are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 touch() example
// [php]
// if (touch($filename)) {
//     echo $filename . ' modification time has been changed to present time';
// } else {
//     echo 'Sorry, could not change modification time of ' . $filename;
// }
// [/php]
// [/example]
// [example]
// Example #2 touch() using the mtime parameter
// [php]
// // This is the touch time, we'll set it to one hour in the past.
// $time = time() - 3600;
// 
// // Touch the file
// if (!touch('some_file.txt', $time)) {
//     echo 'Whoops, something went wrong...';
// } else {
//     echo 'Touched file with success';
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Note that time resolution may differ from one file system to another.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-31)
// URL: https://www.php.net/manual/en/function.touch.php
// ========== TOUCH - END

// SYNTAX:
// bool touch(string $filename, int $mtime = null, int $atime = null)

return $return_touch; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_TOUCH
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_UMASK
// ============================== PUBLIC
// ============================== ABOUT
// Changes the current umask.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// umask() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_umask($mask = null)
{
$return_umask = 0;

// ========== UMASK - BEGIN
// ===== ABOUT
// Changes the current umask
// ===== DESCRIPTION
// umask() sets PHP's umask to mask & 0777 and returns the old umask. When PHP is being used as a server module, the umask is restored when each request is finished.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// umask(?int $mask = null): int
// ===== CODE
$return_umask = umask(

$mask // int mask - The new umask.

); // Return Values
// If mask is null, umask() simply returns the current umask otherwise the old umask is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - mask is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 umask() example
// [php]
// $old = umask(0);
// chmod("/path/some_dir/some_file.txt", 0755);
// umask($old);
// 
// // Checking
// if ($old != umask()) {
//     die('An error occurred while changing back the umask');
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Avoid using this function in multithreaded webservers. It is better to change the file permissions with chmod() after creating the file. Using umask() can lead to unexpected behavior of concurrently running scripts and the webserver itself because they all use the same umask.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.umask.php
// ========== UMASK - END

// SYNTAX:
// int umask(int $mask = null)

return $return_umask; // int
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_UMASK
// ==============================


// ============================== BEGIN
// PHP_FILESYSTEM_FILESYSTEM_UNLINK
// ============================== PUBLIC
// ============================== ABOUT
// Deletes a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// unlink() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_filesystem_filesystem_unlink($filename, $context = null)
{
$return_unlink = false;

// ========== UNLINK - BEGIN
// ===== ABOUT
// Deletes a file
// ===== DESCRIPTION
// Deletes filename. Similar to the Unix C unlink() function. An E_WARNING level error will be generated on failure.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// unlink(string $filename, ?resource $context = null): bool
// ===== CODE
$return_unlink = unlink(

$filename, // string filename - Path to the file.
// If the file is a symlink, the symlink will be deleted. On Windows, to delete a symlink to a directory, rmdir() has to be used instead.

$context // resource context - A context stream resource.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 7.3.0   - On Windows, it is now possible to unlink() files with handles in use, while formerly that would fail. However, it is still not possible to re-create the unlinked file, until all handles to it have been closed.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic unlink() usage
// [php]
// $fh = fopen('test.html', 'a');
// fwrite($fh, '<h1>Hello world!</h1>');
// fclose($fh);
// 
// unlink('test.html');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-30)
// URL: https://www.php.net/manual/en/function.unlink.php
// ========== UNLINK - END

// SYNTAX:
// bool unlink(string $filename, resource $context = null)

return $return_unlink; // bool
}
// ============================== END
// PHP_FILESYSTEM_FILESYSTEM_UNLINK
// ==============================


// ============================== END
//   PHP_FILESYSTEM_FILESYSTEM   
// ==============================
?>