<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_VENDOR_MYSQL_MYSQL - BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_AFFECTED_ROWS - int php_database_vendor_mysql_mysql_mysql_affected_rows(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CLIENT_ENCODING - string php_database_vendor_mysql_mysql_mysql_client_encoding(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CLOSE - bool php_database_vendor_mysql_mysql_mysql_close(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CONNECT - resource|false php_database_vendor_mysql_mysql_mysql_connect(string $server, string $username, string $password, bool $new_link = false, int $client_flags = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CREATE_DB - bool php_database_vendor_mysql_mysql_mysql_create_db(string $database_name, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DATA_SEEK - bool php_database_vendor_mysql_mysql_mysql_data_seek(resource $result, int $row_number)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DB_NAME - string php_database_vendor_mysql_mysql_mysql_db_name(resource $result, int $row, mixed $field = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DB_QUERY - resource|bool php_database_vendor_mysql_mysql_mysql_db_query(string $database, string $query, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DROP_DB - bool php_database_vendor_mysql_mysql_mysql_drop_db(string $database_name, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ERRNO - int php_database_vendor_mysql_mysql_mysql_errno(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ERROR - string php_database_vendor_mysql_mysql_mysql_error(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ESCAPE_STRING - string php_database_vendor_mysql_mysql_mysql_escape_string(string $unescaped_string)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ARRAY - array php_database_vendor_mysql_mysql_mysql_fetch_array(resource $result, int $result_type = MYSQL_BOTH)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ASSOC - array php_database_vendor_mysql_mysql_mysql_fetch_assoc(resource $result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_FIELD - object php_database_vendor_mysql_mysql_mysql_fetch_field(resource $result, int $field_offset = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_LENGTHS - array|false php_database_vendor_mysql_mysql_mysql_fetch_lengths(resource $result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_OBJECT - object php_database_vendor_mysql_mysql_mysql_fetch_object(resource $result, string $class_name, array $params)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ROW - array php_database_vendor_mysql_mysql_mysql_fetch_row(resource $result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_FLAGS - string|false php_database_vendor_mysql_mysql_mysql_field_flags(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_LEN - int|false php_database_vendor_mysql_mysql_mysql_field_len(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_NAME - string|false php_database_vendor_mysql_mysql_mysql_field_name(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_SEEK - bool php_database_vendor_mysql_mysql_mysql_field_seek(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_TABLE - string php_database_vendor_mysql_mysql_mysql_field_table(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_TYPE - string php_database_vendor_mysql_mysql_mysql_field_type(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FREE_RESULT - bool php_database_vendor_mysql_mysql_mysql_free_result(resource $result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_CLIENT_INFO - string php_database_vendor_mysql_mysql_mysql_get_client_info()
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_HOST_INFO - string|false php_database_vendor_mysql_mysql_mysql_get_host_info(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_PROTO_INFO - int|false php_database_vendor_mysql_mysql_mysql_get_proto_info(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_SERVER_INFO - string|false php_database_vendor_mysql_mysql_mysql_get_server_info(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_INFO - string php_database_vendor_mysql_mysql_mysql_info(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_INSERT_ID - int php_database_vendor_mysql_mysql_mysql_insert_id(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_DBS - resource php_database_vendor_mysql_mysql_mysql_list_dbs(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_FIELDS - resource php_database_vendor_mysql_mysql_mysql_list_fields(string $database_name, string $table_name, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_PROCESSES - resource|false php_database_vendor_mysql_mysql_mysql_list_processes(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_TABLES - resource|false php_database_vendor_mysql_mysql_mysql_list_tables(string $database, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_NUM_FIELDS - int|false php_database_vendor_mysql_mysql_mysql_num_fields(resource $result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_NUM_ROWS - int|false php_database_vendor_mysql_mysql_mysql_num_rows(resource $result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_PCONNECT - resource php_database_vendor_mysql_mysql_mysql_pconnect(string $server, string $username, string $password, int $client_flags = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_PING - bool php_database_vendor_mysql_mysql_mysql_ping(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_QUERY - mixed php_database_vendor_mysql_mysql_mysql_query(string $query, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_REAL_ESCAPE_STRING - string php_database_vendor_mysql_mysql_mysql_real_escape_string(string $unescaped_string, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_RESULT - string php_database_vendor_mysql_mysql_mysql_result(resource $result, int $row, mixed $field = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_SELECT_DB - bool php_database_vendor_mysql_mysql_mysql_select_db(string $database_name, resource $link_identifier = NULL)
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_SET_CHARSET - bool php_database_vendor_mysql_mysql_mysql_set_charset(string $charset, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_STAT - string php_database_vendor_mysql_mysql_mysql_stat(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_TABLENAME - string|false php_database_vendor_mysql_mysql_mysql_tablename(resource $result, int $i)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_THREAD_ID - int|false php_database_vendor_mysql_mysql_mysql_thread_id(resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_UNBUFFERED_QUERY - resource php_database_vendor_mysql_mysql_mysql_unbuffered_query(string $query, resource $link_identifier = NULL)
// PHP_DATABASE_VENDOR_MYSQL_MYSQL - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== INSTALLATION
// NOT_BUNDLED (In order to have these functions available, you must compile PHP with MySQL support. For compiling, simply use the --with-mysql[=DIR] configuration option where the optional [DIR] points to the MySQL installation directory.)
// ============================== USING FUNCTIONS (48)
// mysql_affected_rows() - PHP_4, PHP_5
// mysql_client_encoding() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_close() - PHP_4, PHP_5
// mysql_connect() - PHP_4, PHP_5
// mysql_create_db() - PHP_4, PHP_5
// mysql_data_seek() - PHP_4, PHP_5
// mysql_db_name() - PHP_4, PHP_5
// mysql_db_query() - PHP_4, PHP_5
// mysql_drop_db() - PHP_4, PHP_5
// mysql_errno() - PHP_4, PHP_5
// mysql_error() - PHP_4, PHP_5
// mysql_escape_string() - PHP_4 >= PHP_4_0_3, PHP_5
// mysql_fetch_array() - PHP_4, PHP_5
// mysql_fetch_assoc() - PHP_4 >= PHP_4_0_3, PHP_5
// mysql_fetch_field() - PHP_4, PHP_5
// mysql_fetch_lengths() - PHP_4, PHP_5
// mysql_fetch_object() - PHP_4, PHP_5
// mysql_fetch_row() - PHP_4, PHP_5
// mysql_field_flags() - PHP_4, PHP_5
// mysql_field_len() - PHP_4, PHP_5
// mysql_field_name() - PHP_4, PHP_5
// mysql_field_seek() - PHP_4, PHP_5
// mysql_field_table() - PHP_4, PHP_5
// mysql_field_type() - PHP_4, PHP_5
// mysql_free_result() - PHP_4, PHP_5
// mysql_get_client_info() - PHP_4 >= PHP_4_0_5, PHP_5
// mysql_get_host_info() - PHP_4 >= PHP_4_0_5, PHP_5
// mysql_get_proto_info() - PHP_4 >= PHP_4_0_5, PHP_5
// mysql_get_server_info() - PHP_4 >= PHP_4_0_5, PHP_5
// mysql_info() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_insert_id() - PHP_4, PHP_5
// mysql_list_dbs() - PHP_4, PHP_5
// mysql_list_fields() - PHP_4, PHP_5
// mysql_list_processes() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_list_tables() - PHP_4, PHP_5
// mysql_num_fields() - PHP_4, PHP_5
// mysql_num_rows() - PHP_4, PHP_5
// mysql_pconnect() - PHP_4, PHP_5
// mysql_ping() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_query() - PHP_4, PHP_5
// mysql_real_escape_string() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_result() - PHP_4, PHP_5
// mysql_select_db() - PHP_4, PHP_5
// OFFLINE | mysql_set_charset() - PHP_5 >= PHP_5_2_3
// mysql_stat() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_tablename() - PHP_4, PHP_5
// mysql_thread_id() - PHP_4 >= PHP_4_3_0, PHP_5
// mysql_unbuffered_query() - PHP_4 >= PHP_4_0_6, PHP_5
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (8)
// int
// resource
// string
// bool
// false
// mixed
// array
// object
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Vendor Specific Database Extensions / MySQL - MySQL Drivers and Plugins / MySQL (Original) - Original MySQL API
// URL: https://www.php.net/manual/en/book.mysql.php
// ============================== DESCRIPTION
// ORIGINAL_MYSQL_API
// OVERVIEW_OF_THE_MYSQL_PHP_DRIVERS
// 10_10_SUPPORTED_CHARACTER_SETS_AND_COLLATIONS
// PERSISTENT_DATABASE_CONNECTIONS
// APPENDIX_B_ERROR_MESSAGES_AND_COMMON_PROBLEMS
// 
// ORIGINAL_MYSQL_API - BEGIN
// Original MySQL API
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// CHANGELOG
// PREDEFINED_CONSTANTS
// EXAMPLES
// MYSQL_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// This extension is deprecated as of PHP 5.5.0, and has been removed as of PHP 7.0.0. Instead, either the mysqli or PDO_MySQL extension should be used. See also the MySQL API Overview for further help while choosing a MySQL API.
// These functions allow you to access MySQL database servers. More information about MySQL can be found at > http://www.mysql.com/.
// Documentation for MySQL can be found at > http://dev.mysql.com/doc/.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/intro.mysql.php
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
// In order to have these functions available, you must compile PHP with MySQL support.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// For compiling, simply use the --with-mysql[=DIR] configuration option where the optional [DIR] points to the MySQL installation directory.
// Although this MySQL extension is compatible with MySQL 4.1.0 and greater, it doesn't support the extra functionality that these versions provide. For that, use the MySQLi extension.
// If you would like to install the mysql extension along with the mysqli extension you have to use the same client library to avoid any conflicts.
// 
// Installation on Linux Systems
// Note: [DIR] is the path to the MySQL client library files (headers and libraries), which can be downloaded from > MySQL.
// ext/mysql compile time support matrix
// PHP Version         ( Default , Configure Options: mysqlnd , Configure Options: libmysqlclient ) - Changelog
// 4.x.x               ( libmysqlclient , Not Available , --without-mysql to disable )              - MySQL enabled by default, MySQL client libraries are bundled
// 5.0.x, 5.1.x, 5.2.x ( libmysqlclient , Not Available , --with-mysql=[DIR] )                      - MySQL is no longer enabled by default, and the MySQL client libraries are no longer bundled
// 5.3.x               ( libmysqlclient , --with-mysql=mysqlnd , --with-mysql=[DIR] )               - mysqlnd is now available
// 5.4.x               ( mysqlnd , --with-mysql , --with-mysql=[DIR] )                              - mysqlnd is now the default
// 
// Installation on Windows Systems
// PHP 5.0.x, 5.1.x, 5.2.x
// MySQL is no longer enabled by default, so the php_mysql.dll DLL must be enabled inside of php.ini. Also, PHP needs access to the MySQL client library. A file named libmysql.dll is included in the Windows PHP distribution and in order for PHP to talk to MySQL this file needs to be available to the Windows systems PATH. See the FAQ titled "How do I add my PHP directory to the PATH on Windows" for information on how to do this. Although copying libmysql.dll to the Windows system directory also works (because the system directory is by default in the system's PATH), it's not recommended.
// As with enabling any PHP extension (such as php_mysql.dll), the PHP directive extension_dir should be set to the directory where the PHP extensions are located. See also the Manual Windows Installation Instructions. An example extension_dir value for PHP 5 is c:\php\ext
// Note: If when starting the web server an error similar to the following occurs: "Unable to load dynamic library './php_mysql.dll'", this is because php_mysql.dll and/or libmysql.dll cannot be found by the system.
// 
// PHP 5.3.0+
// The MySQL Native Driver is enabled by default. Include php_mysql.dll, but libmysql.dll is no longer required or used.
// 
// MySQL Installation Notes
// Warning: Crashes and startup problems of PHP may be encountered when loading this extension in conjunction with the recode extension. See the recode extension for more information.
// Note: If you need charsets other than latin (default), you have to install external (not bundled) libmysqlclient with compiled charset support.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// MySQL Configuration Options
// Name                     | Default | Changeable     | Changelog
// mysql.allow_local_infile | "1"     | PHP_INI_SYSTEM |
// mysql.allow_persistent   | "1"     | PHP_INI_SYSTEM |
// mysql.max_persistent     | "-1"    | PHP_INI_SYSTEM |
// mysql.max_links          | "-1"    | PHP_INI_SYSTEM |
// mysql.trace_mode         | "0"     | PHP_INI_ALL    |
// mysql.default_port       | NULL    | PHP_INI_ALL    |
// mysql.default_socket     | NULL    | PHP_INI_ALL    |
// mysql.default_host       | NULL    | PHP_INI_ALL    |
// mysql.default_user       | NULL    | PHP_INI_ALL    |
// mysql.default_password   | NULL    | PHP_INI_ALL    |
// mysql.connect_timeout    | "60"    | PHP_INI_ALL    |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// mysql.allow_local_infile int  - Allow accessing, from PHP's perspective, local files with LOAD DATA statements
// mysql.allow_persistent bool   - Whether to allow persistent connections to MySQL.
// mysql.max_persistent int      - The maximum number of persistent MySQL connections per process.
// mysql.max_links int           - The maximum number of MySQL connections per process, including persistent connections.
// mysql.trace_mode bool         - Trace mode. When mysql.trace_mode is enabled, warnings for table/index scans, non free result sets, and SQL-Errors will be displayed. (Introduced in PHP 4.3.0)
// mysql.default_port string     - The default TCP port number to use when connecting to the database server if no other port is specified. If no default is specified, the port will be obtained from the MYSQL_TCP_PORT environment variable, the mysql-tcp entry in /etc/services or the compile-time MYSQL_PORT constant, in that order. Win32 will only use the MYSQL_PORT constant.
// mysql.default_socket string   - The default socket name to use when connecting to a local database server if no other socket name is specified.
// mysql.default_host string     - The default server host to use when connecting to the database server if no other host is specified. Doesn't apply in SQL safe mode.
// mysql.default_user string     - The default user name to use when connecting to the database server if no other name is specified. Doesn't apply in SQL safe mode.
// mysql.default_password string - The default password to use when connecting to the database server if no other password is specified. Doesn't apply in SQL safe mode.
// mysql.connect_timeout int     - Connect timeout in seconds. On Linux this timeout is also used for waiting for the first answer from the server.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// There are two resource types used in the MySQL module. The first one is the link identifier for a database connection, the second a resource which holds the result of a query.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.setup.php
// INSTALLING_CONFIGURING - END
// 
// CHANGELOG - BEGIN
// Changelog
// 
// The following changes have been made to classes/functions/methods of this extension.
// 
// General Changelog for the ext/mysql extension
// This changelog references the ext/mysql extension.
// 
// Global ext/mysql changes
// The following is a list of changes to the entire ext/mysql extension.
// Version - Description
// 7.0.0   - This extension was removed from PHP. For details, see Choosing an API.
// 
// Changes to existing functions
// The following list is a compilation of changelog entries from the ext/mysql functions.
// Version - Function - Description
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/changelog.mysql.php
// CHANGELOG - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// It is possible to specify additional client flags for the mysql_connect() and mysql_pconnect() functions. The following constants are defined:
// 
// MySQL client constants
// Constant                  - Description
// MYSQL_CLIENT_COMPRESS     - Use compression protocol
// MYSQL_CLIENT_IGNORE_SPACE - Allow space after function names
// MYSQL_CLIENT_INTERACTIVE  - Allow interactive_timeout seconds (instead of wait_timeout) of inactivity before closing the connection.
// MYSQL_CLIENT_SSL          - Use SSL encryption. This flag is only available with version 4.x of the MySQL client library or newer. Version 3.23.x is bundled both with PHP 4 and Windows binaries of PHP 5.
// 
// The function mysql_fetch_array() uses a constant for the different types of result arrays. The following constants are defined:
// 
// MySQL fetch constants
// Constant    - Description
// MYSQL_ASSOC - Columns are returned into the array having the fieldname as the array index.
// MYSQL_BOTH  - Columns are returned into the array having both a numerical index and the fieldname as the array index.
// MYSQL_NUM   - Columns are returned into the array having a numerical index to the fields. This index starts with 0, the first field in the result.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// MYSQL_EXTENSION_OVERVIEW_EXAMPLE
// 
// MYSQL_EXTENSION_OVERVIEW_EXAMPLE - BEGIN
// MySQL extension overview example
// 
// This simple example shows how to connect, execute a query, print resulting rows and disconnect from a MySQL database.
// [example]
// Example #1 MySQL extension overview example
// [php]
// // Connecting, selecting database
// $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
//     or die('Could not connect: ' . mysql_error());
// echo 'Connected successfully';
// mysql_select_db('my_database') or die('Could not select database');
// 
// // Performing SQL query
// $query = 'SELECT * FROM my_table';
// $result = mysql_query($query) or die('Query failed: ' . mysql_error());
// 
// // Printing results in HTML
// echo "<table>\n";
// while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
//     echo "\t<tr>\n";
//     foreach ($line as $col_value) {
//         echo "\t\t<td>$col_value</td>\n";
//     }
//     echo "\t</tr>\n";
// }
// echo "</table>\n";
// 
// // Free resultset
// mysql_free_result($result);
// 
// // Closing connection
// mysql_close($link);
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysql.examples-basic.php
// MYSQL_EXTENSION_OVERVIEW_EXAMPLE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.examples.php
// EXAMPLES - END
// 
// MYSQL_FUNCTIONS - BEGIN
// MySQL Functions
// 
// Notes
// Note: Most MySQL functions accept link_identifier as the last optional parameter. If it is not provided, last opened connection is used. If it doesn't exist, connection is tried to establish with default parameters defined in php.ini. If it is not successful, functions return false.
// 
// Table of Contents
// * mysql_affected_rows      - Get number of affected rows in previous MySQL operation
// * mysql_client_encoding    - Returns the name of the character set
// * mysql_close              - Close MySQL connection
// * mysql_connect            - Open a connection to a MySQL Server
// * mysql_create_db          - Create a MySQL database
// * mysql_data_seek          - Move internal result pointer
// * mysql_db_name            - Retrieves database name from the call to mysql_list_dbs
// * mysql_db_query           - Selects a database and executes a query on it
// * mysql_drop_db            - Drop (delete) a MySQL database
// * mysql_errno              - Returns the numerical value of the error message from previous MySQL operation
// * mysql_error              - Returns the text of the error message from previous MySQL operation
// * mysql_escape_string      - Escapes a string for use in a mysql_query
// * mysql_fetch_array        - Fetch a result row as an associative array, a numeric array, or both
// * mysql_fetch_assoc        - Fetch a result row as an associative array
// * mysql_fetch_field        - Get column information from a result and return as an object
// * mysql_fetch_lengths      - Get the length of each output in a result
// * mysql_fetch_object       - Fetch a result row as an object
// * mysql_fetch_row          - Get a result row as an enumerated array
// * mysql_field_flags        - Get the flags associated with the specified field in a result
// * mysql_field_len          - Returns the length of the specified field
// * mysql_field_name         - Get the name of the specified field in a result
// * mysql_field_seek         - Set result pointer to a specified field offset
// * mysql_field_table        - Get name of the table the specified field is in
// * mysql_field_type         - Get the type of the specified field in a result
// * mysql_free_result        - Free result memory
// * mysql_get_client_info    - Get MySQL client info
// * mysql_get_host_info      - Get MySQL host info
// * mysql_get_proto_info     - Get MySQL protocol info
// * mysql_get_server_info    - Get MySQL server info
// * mysql_info               - Get information about the most recent query
// * mysql_insert_id          - Get the ID generated in the last query
// * mysql_list_dbs           - List databases available on a MySQL server
// * mysql_list_fields        - List MySQL table fields
// * mysql_list_processes     - List MySQL processes
// * mysql_list_tables        - List tables in a MySQL database
// * mysql_num_fields         - Get number of fields in result
// * mysql_num_rows           - Get number of rows in result
// * mysql_pconnect           - Open a persistent connection to a MySQL server
// * mysql_ping               - Ping a server connection or reconnect if there is no connection
// * mysql_query              - Send a MySQL query
// * mysql_real_escape_string - Escapes special characters in a string for use in an SQL statement
// * mysql_result             - Get result data
// * mysql_select_db          - Select a MySQL database
// * mysql_set_charset        - Sets the client character set
// * mysql_stat               - Get current system status
// * mysql_tablename          - Get table name of field
// * mysql_thread_id          - Return the current thread ID
// * mysql_unbuffered_query   - Send an SQL query to MySQL without fetching and buffering the result rows
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/ref.mysql.php
// MYSQL_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/book.mysql.php
// ORIGINAL_MYSQL_API - END
// 
// OVERVIEW_OF_THE_MYSQL_PHP_DRIVERS - BEGIN
// Overview of the MySQL PHP drivers
// 
// TERMINOLOGY_OVERVIEW
// CHOOSING_AN_API
// CHOOSING_A_LIBRARY
// CONCEPTS
// 
// Introduction
// There are several PHP APIs for accessing the MySQL database. Users can choose between the mysqli or PDO_MySQL extensions.
// This guide explains the terminology used to describe each API, information about choosing which API to use, and also information to help choose which MySQL library to use with the API.
// 
// TERMINOLOGY_OVERVIEW - BEGIN
// Terminology overview
// 
// This section provides an introduction to the options available to you when developing a PHP application that needs to interact with a MySQL database.
// 
// What is an API?
// An Application Programming Interface, or API, defines the classes, methods, functions and variables that your application will need to call in order to carry out its desired task. In the case of PHP applications that need to communicate with databases the necessary APIs are usually exposed via PHP extensions.
// APIs can be procedural or object-oriented. With a procedural API you call functions to carry out tasks, with the object-oriented API you instantiate classes and then call methods on the resulting objects. Of the two, the latter is usually the preferred interface, as it is more modern and leads to better organized code.
// When writing PHP applications that need to connect to the MySQL server there are several API options available. This document discusses what is available and how to select the best solution for your application.
// 
// What is a Connector?
// In the MySQL documentation, the term connector refers to a piece of software that allows your application to connect to the MySQL database server. MySQL provides connectors for a variety of languages, including PHP.
// If your PHP application needs to communicate with a database server you will need to write PHP code to perform such activities as connecting to the database server, querying the database and other database-related functions. Software is required to provide the API that your PHP application will use, and also handle the communication between your application and the database server, possibly using other intermediate libraries where necessary. This software is known generically as a connector, as it allows your application to connect to a database server.
// 
// What is a Driver?
// A driver is a piece of software designed to communicate with a specific type of database server. The driver may also call a library, such as the MySQL Client Library or the MySQL Native Driver. These libraries implement the low-level protocol used to communicate with the MySQL database server.
// By way of an example, the PHP Data Objects (PDO) database abstraction layer may use one of several database-specific drivers. One of the drivers it has available is the PDO MYSQL driver, which allows it to interface with the MySQL server.
// Sometimes people use the terms connector and driver interchangeably, this can be confusing. In the MySQL-related documentation the term driver is reserved for software that provides the database-specific part of a connector package.
// 
// What is an Extension?
// In the PHP documentation, you will come across another term - extension. The PHP code consists of a core, with optional extensions to the core functionality. PHP's MySQL-related extension, mysqli, is implemented using the PHP extension framework.
// An extension typically exposes an API to the PHP programmer, to allow its facilities to be used programmatically. However, some extensions which use the PHP extension framework do not expose an API to the PHP programmer.
// The PDO MySQL driver extension, for example, does not expose an API to the PHP programmer, but provides an interface to the PDO layer above it.
// The terms API and extension should not be taken to mean the same thing, as an extension may not necessarily expose an API to the programmer.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysqlinfo.terminology.php
// TERMINOLOGY_OVERVIEW - END
// 
// CHOOSING_AN_API - BEGIN
// Choosing an API
// 
// PHP offers different APIs to connect to MySQL. Below we show the APIs provided by the mysqli and PDO extensions. Each code snippet creates a connection to a MySQL server running on "example.com" using the username "user" and the password "password". And a query is run to greet the user.
// [example]
// Example #1 Comparing the MySQL APIs
// [php]
// // mysqli
// $mysqli = new mysqli("example.com", "user", "password", "database");
// $result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $result->fetch_assoc();
// echo htmlentities($row['_message']);
// 
// // PDO
// $pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
// $statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $statement->fetch(PDO::FETCH_ASSOC);
// echo htmlentities($row['_message']);
// [/php]
// [/example]
// [example]
// Example #2 Comparing prepared statements
// [php]
// // mysqli
// $mysqli = new mysqli("example.com", "user", "password", "database");
// $statement = $mysqli->prepare("SELECT District FROM City WHERE Name=?");
// $statement->execute(["Amersfoort"]);
// $result = $statement->get_result();
// $row = $result->fetch_assoc();
// echo htmlentities($row['District']);
// 
// // PDO
// $pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
// $statement = $pdo->prepare("SELECT District FROM City WHERE Name=?");
// $statement->execute(["Amersfoort"]);
// $row = $statement->fetch(PDO::FETCH_ASSOC);
// echo htmlentities($row['District']);
// [/php]
// [/example]
// 
// Feature comparison
// The overall performance of both extensions is considered to be about the same. Although the performance of the extension contributes only a fraction of the total run time of a PHP web request. Often, the impact is as low as 0.1%.
//                                                              | ext/mysqli | PDO_MySQL
// PHP version introduced                                       | 5.0        | 5.1
// Included with PHP 7.x and 8.x                                | Yes        | Yes
// Development status                                           | Active     | Active
// Lifecycle                                                    | Active     | Active
// Recommended for new projects                                 | Yes        | Yes
// OOP Interface                                                | Yes        | Yes
// Procedural Interface                                         | Yes        | No
// API supports non-blocking, asynchronous queries with mysqlnd | Yes        | No
// Persistent Connections                                       | Yes        | Yes
// API supports Charsets                                        | Yes        | Yes
// API supports server-side Prepared Statements                 | Yes        | Yes
// API supports client-side Prepared Statements                 | No         | Yes
// API supports Stored Procedures                               | Yes        | Yes
// API supports Multiple Statements                             | Yes        | Most
// API supports Transactions                                    | Yes        | Yes
// Transactions can be controlled with SQL                      | Yes        | Yes
// Supports all MySQL 5.1+ functionality                        | Yes        | Most
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysqlinfo.api.choosing.php
// CHOOSING_AN_API - END
// 
// CHOOSING_A_LIBRARY - BEGIN
// Choosing a library
// 
// The mysqli and PDO_MySQL PHP extensions are lightweight wrappers on top of a C client library. The extensions can either use the mysqlnd library or the libmysqlclient library. Choosing a library is a compile time decision.
// The mysqlnd library is part of the PHP distribution. It offers features like lazy connections and query caching, features that are not available with libmysqlclient, so using the built-in mysqlnd library is highly recommended. See the mysqlnd documentation for additional details, and a listing of features and functionality that it offers.
// [example]
// Example #1 Configure commands for using mysqlnd or libmysqlclient
// [code]
// // Recommended, compiles with mysqlnd
// $ ./configure --with-mysqli=mysqlnd --with-pdo-mysql=mysqlnd
// 
// // Alternatively recommended, compiles with mysqlnd
// $ ./configure --with-mysqli --with-pdo-mysql
// 
// // Not recommended, compiles with libmysqlclient
// $ ./configure --with-mysqli=/path/to/mysql_config --with-pdo-mysql=/path/to/mysql_config
// [/code]
// [/example]
// 
// Library feature comparison
// It is recommended to use the mysqlnd library instead of the MySQL Client Server library (libmysqlclient). Both libraries are supported and constantly being improved.
//                                                                   MySQL native driver (mysqlnd) | MySQL client server library (libmysqlclient)
// Part of the PHP distribution                                                 | Yes              | No
// PHP version introduced                                                       | 5.3.0            | N/A
// License                                                                      | PHP License 3.01 | Dual-License
// Development status                                                           | Active           | Active
// Lifecycle                                                                    | No end announced | No end announced
// Compile default (for all MySQL extensions)                                   | Yes              | No
// Compression protocol support                                                 | Yes              | Yes
// SSL support                                                                  | Yes              | Yes
// Named pipe support                                                           | Yes              | Yes
// Non-blocking, asynchronous queries                                           | Yes              | No
// Performance statistics                                                       | Yes              | No
// LOAD LOCAL INFILE respects the open_basedir directive                        | Yes              | No
// Uses PHP's native memory management system (e.g., follows PHP memory limits) | Yes              | No
// Return numeric column as double (COM_QUERY)                                  | Yes              | No
// Return numeric column as string (COM_QUERY)                                  | Yes              | Yes
// Plugin API                                                                   | Yes              | Limited
// Automatic reconnect                                                          | No               | Optional
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysqlinfo.library.choosing.php
// CHOOSING_A_LIBRARY - END
// 
// CONCEPTS - BEGIN
// Concepts
// 
// BUFFERED_AND_UNBUFFERED_QUERIES
// CHARACTER_SETS
// 
// These concepts are specific to the MySQL drivers for PHP.
// 
// BUFFERED_AND_UNBUFFERED_QUERIES - BEGIN
// Buffered and Unbuffered queries
// 
// Queries are using the buffered mode by default. This means that query results are immediately transferred from the MySQL Server to PHP and then are kept in the memory of the PHP process. This allows additional operations like counting the number of rows, and moving (seeking) the current result pointer. It also allows issuing further queries on the same connection while working on the result set. The downside of the buffered mode is that larger result sets might require quite a lot memory. The memory will be kept occupied till all references to the result set are unset or the result set was explicitly freed, which will automatically happen during request end at the latest. The terminology "store result" is also used for buffered mode, as the whole result set is stored at once.
// Note: When using libmysqlclient as library PHP's memory limit won't count the memory used for result sets unless the data is fetched into PHP variables. With mysqlnd the memory accounted for will include the full result set.
// Unbuffered MySQL queries execute the query and then wait for the data from the MySQL server to be fetched. This uses less memory on the PHP-side, but can increase the load on the server. Unless the full result set was fetched from the server no further queries can be sent over the same connection. Unbuffered queries can also be referred to as "use result". Once all rows in the result set are fetched, the result set is gone and it cannot be iterated again.
// Following these characteristics, unbuffered queries should be used only when a large result set is expected that will be processed sequentially. Unbuffered queries contain a number of pitfalls that makes it more difficult to use them, e.g. the number of rows in the result set is unknown until the last row is fetched. Buffered queries are the easier and more flexible way to process result sets.
// Because buffered queries are the default, the examples below will demonstrate how to execute unbuffered queries with each API.
// [example]
// Example #1 Unbuffered query example: mysqli
// [php]
// $mysqli  = new mysqli("localhost", "my_user", "my_password", "world");
// $unbufferedResult = $mysqli->query("SELECT Name FROM City", MYSQLI_USE_RESULT);
// 
// foreach ($unbufferedResult as $row) {
//     echo $row['Name'] . PHP_EOL;
// }
// [/php]
// [/example]
// [example]
// Example #2 Unbuffered query example: pdo_mysql
// [php]
// $pdo = new PDO("mysql:host=localhost;dbname=world", 'my_user', 'my_password');
// $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
// 
// $unbufferedResult = $pdo->query("SELECT Name FROM City");
// foreach ($unbufferedResult as $row) {
//     echo $row['Name'] . PHP_EOL;
// }
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysqlinfo.concepts.buffering.php
// BUFFERED_AND_UNBUFFERED_QUERIES - END

// CHARACTER_SETS - BEGIN
// Character sets
// 
// Ideally a proper character set will be set at the server level, and doing this is described within the > Character Set Configuration section of the MySQL Server manual. Alternatively, each MySQL API offers a method to set the character set at runtime.
//  Caution:
//  The character set and character escaping
//  The character set should be understood and defined, as it has an affect on every action, and includes security implications. For example, the escaping mechanism (e.g., mysqli_real_escape_string() for mysqli and PDO::quote() for PDO_MySQL) will adhere to this setting. It is important to realize that these functions will not use the character set that is defined with a query, so for example the following will not have an effect on them:
// [example]
// Example #1 Problems with setting the character set with SQL
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // Will NOT affect $mysqli->real_escape_string();
// $mysqli->query("SET NAMES utf8mb4");
// 
// // Will NOT affect $mysqli->real_escape_string();
// $mysqli->query("SET CHARACTER SET utf8mb4");
// 
// // But, this will affect $mysqli->real_escape_string();
// $mysqli->set_charset('utf8mb4');
// 
// // But, this will NOT affect it (UTF-8 vs utf8mb4) -- don't use dashes here
// $mysqli->set_charset('UTF-8');
// [/php]
// [/example]
// Below are examples that demonstrate how to properly alter the character set at runtime using each API.
//  Note: Possible UTF-8 confusion
//  Because character set names in MySQL do not contain dashes, the string "utf8" is valid in MySQL to set the character set to UTF-8 (up to 3 byte UTF-8 Unicode Encoding). The string "UTF-8" is not valid, as using "UTF-8" will fail to change the character set and will throw an error.
// [example]
// Example #2 Setting the character set example: mysqli
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// echo 'Initial character set: ' . $mysqli->character_set_name() . "\n";
// 
// if (!$mysqli->set_charset('utf8mb4')) {
//     printf("Error loading character set utf8mb4: %s\n", $mysqli->error);
//     exit;
// }
// 
// echo 'Your current character set is: ' . $mysqli->character_set_name() . "\n";
// [/php]
// [/example]
// [example]
// Example #3 Setting the character set example: pdo_mysql
// [php]
// $pdo = new PDO("mysql:host=localhost;dbname=world;charset=utf8mb4", 'my_user', 'my_pass');
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysqlinfo.concepts.charset.php
// CHARACTER_SETS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysqlinfo.concepts.php
// CONCEPTS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/mysql.php
// OVERVIEW_OF_THE_MYSQL_PHP_DRIVERS - END
// 
// 10_10_SUPPORTED_CHARACTER_SETS_AND_COLLATIONS - BEGIN
// 10.10 Supported Character Sets and Collations
// 
// 10_10_1_UNICODE_CHARACTER_SETS
// 10_10_2_WEST_EUROPEAN_CHARACTER_SETS
// 10_10_3_CENTRAL_EUROPEAN_CHARACTER_SETS
// 10_10_4_SOUTH_EUROPEAN_AND_MIDDLE_EAST_CHARACTER_SETS
// 10_10_5_BALTIC_CHARACTER_SETS
// 10_10_6_CYRILLIC_CHARACTER_SETS
// 10_10_7_ASIAN_CHARACTER_SETS
// 10_10_8_THE_BINARY_CHARACTER_SET
// 
// This section indicates which character sets MySQL supports. There is one subsection for each group of related character sets. For each character set, the permissible collations are listed.
// To list the available character sets and their default collations, use the SHOW CHARACTER SET statement or query the INFORMATION_SCHEMA CHARACTER_SETS table. For example:
// [code]
// mysql> SHOW CHARACTER SET;
// +----------+---------------------------------+---------------------+--------+
// | Charset  | Description                     | Default collation   | Maxlen |
// +----------+---------------------------------+---------------------+--------+
// | armscii8 | ARMSCII-8 Armenian              | armscii8_general_ci |      1 |
// | ascii    | US ASCII                        | ascii_general_ci    |      1 |
// | big5     | Big5 Traditional Chinese        | big5_chinese_ci     |      2 |
// | binary   | Binary pseudo charset           | binary              |      1 |
// | cp1250   | Windows Central European        | cp1250_general_ci   |      1 |
// | cp1251   | Windows Cyrillic                | cp1251_general_ci   |      1 |
// | cp1256   | Windows Arabic                  | cp1256_general_ci   |      1 |
// | cp1257   | Windows Baltic                  | cp1257_general_ci   |      1 |
// | cp850    | DOS West European               | cp850_general_ci    |      1 |
// | cp852    | DOS Central European            | cp852_general_ci    |      1 |
// | cp866    | DOS Russian                     | cp866_general_ci    |      1 |
// | cp932    | SJIS for Windows Japanese       | cp932_japanese_ci   |      2 |
// | dec8     | DEC West European               | dec8_swedish_ci     |      1 |
// | eucjpms  | UJIS for Windows Japanese       | eucjpms_japanese_ci |      3 |
// | euckr    | EUC-KR Korean                   | euckr_korean_ci     |      2 |
// | gb18030  | China National Standard GB18030 | gb18030_chinese_ci  |      4 |
// | gb2312   | GB2312 Simplified Chinese       | gb2312_chinese_ci   |      2 |
// | gbk      | GBK Simplified Chinese          | gbk_chinese_ci      |      2 |
// | geostd8  | GEOSTD8 Georgian                | geostd8_general_ci  |      1 |
// | greek    | ISO 8859-7 Greek                | greek_general_ci    |      1 |
// | hebrew   | ISO 8859-8 Hebrew               | hebrew_general_ci   |      1 |
// | hp8      | HP West European                | hp8_english_ci      |      1 |
// | keybcs2  | DOS Kamenicky Czech-Slovak      | keybcs2_general_ci  |      1 |
// | koi8r    | KOI8-R Relcom Russian           | koi8r_general_ci    |      1 |
// | koi8u    | KOI8-U Ukrainian                | koi8u_general_ci    |      1 |
// | latin1   | cp1252 West European            | latin1_swedish_ci   |      1 |
// | latin2   | ISO 8859-2 Central European     | latin2_general_ci   |      1 |
// | latin5   | ISO 8859-9 Turkish              | latin5_turkish_ci   |      1 |
// | latin7   | ISO 8859-13 Baltic              | latin7_general_ci   |      1 |
// | macce    | Mac Central European            | macce_general_ci    |      1 |
// | macroman | Mac West European               | macroman_general_ci |      1 |
// | sjis     | Shift-JIS Japanese              | sjis_japanese_ci    |      2 |
// | swe7     | 7bit Swedish                    | swe7_swedish_ci     |      1 |
// | tis620   | TIS620 Thai                     | tis620_thai_ci      |      1 |
// | ucs2     | UCS-2 Unicode                   | ucs2_general_ci     |      2 |
// | ujis     | EUC-JP Japanese                 | ujis_japanese_ci    |      3 |
// | utf16    | UTF-16 Unicode                  | utf16_general_ci    |      4 |
// | utf16le  | UTF-16LE Unicode                | utf16le_general_ci  |      4 |
// | utf32    | UTF-32 Unicode                  | utf32_general_ci    |      4 |
// | utf8mb3  | UTF-8 Unicode                   | utf8mb3_general_ci  |      3 |
// | utf8mb4  | UTF-8 Unicode                   | utf8mb4_0900_ai_ci  |      4 |
// +----------+---------------------------------+---------------------+--------+
// [/code]
// In cases where a character set has multiple collations, it might not be clear which collation is most suitable for a given application. To avoid choosing the wrong collation, it can be helpful to perform some comparisons with representative data values to make sure that a given collation sorts values the way you expect.
// 
// 10_10_1_UNICODE_CHARACTER_SETS - BEGIN
// 10.10.1 Unicode Character Sets
// 
// This section describes the collations available for Unicode character sets and their differentiating properties. For general information about Unicode, see Section 10.9, “Unicode Support”.
// MySQL supports multiple Unicode character sets:
// * utf8mb4 : A UTF-8 encoding of the Unicode character set using one to four bytes per character.
// * utf8mb3 : A UTF-8 encoding of the Unicode character set using one to three bytes per character. This character set is deprecated; please use utfmb4 instead.
// * utf8    : A deprecated alias for utf8mb3. Use utf8mb4 instead.
// Note: utf8 is expected in a future release to become an alias for utf8mb4.
// * ucs2    : The UCS-2 encoding of the Unicode character set using two bytes per character. Deprecated; expect support for this character set to be removed in a future version of MySQL.
// * utf16   : The UTF-16 encoding for the Unicode character set using two or four bytes per character. Like ucs2 but with an extension for supplementary characters.
// * utf16le : The UTF-16LE encoding for the Unicode character set. Like utf16 but little-endian rather than big-endian.
// * utf32   : The UTF-32 encoding for the Unicode character set using four bytes per character.
//  Note
//  The utf8mb3 character set is deprecated and you should expect it to be removed in a future MySQL release. Please use utf8mb4 instead. utf8 is currently an alias for utf8mb3, but it is now deprecated as such, and utf8 is expected subsequently to become a reference to utf8mb4. utf8mb3 is also displayed in place of utf8 in columns of Information Schema tables, and in the output of SQL SHOW statements.
//  To avoid ambiguity about the meaning of utf8, consider specifying utf8mb4 explicitly for character set references.
// utf8mb4, utf16, utf16le, and utf32 support Basic Multilingual Plane (BMP) characters and supplementary characters that lie outside the BMP. utf8mb3 and ucs2 support only BMP characters.
// Most Unicode character sets have a general collation (indicated by _general in the name or by the absence of a language specifier), a binary collation (indicated by _bin in the name), and several language-specific collations (indicated by language specifiers). For example, for utf8mb4, utf8mb4_general_ci and utf8mb4_bin are its general and binary collations, and utf8mb4_danish_ci is one of its language-specific collations.
// Most character sets have a single binary collation. utf8mb4 is an exception that has two: utf8mb4_bin and utf8mb4_0900_bin. These two binary collations have the same sort order but are distinguished by their pad attribute and collating weight characteristics. See Collation Pad Attributes, and Character Collating Weights.
// Collation support for utf16le is limited. The only collations available are utf16le_general_ci and utf16le_bin. These are similar to utf16_general_ci and utf16_bin.
// * Unicode Collation Algorithm (UCA) Versions
// * Collation Pad Attributes
// * Language-Specific Collations
// * _general_ci Versus _unicode_ci Collations
// * Character Collating Weights
// * Miscellaneous Information
// 
// Unicode Collation Algorithm (UCA) Versions
// MySQL implements the xxx_unicode_ci collations according to the Unicode Collation Algorithm (UCA) described at http://www.unicode.org/reports/tr10/. The collation uses the version-4.0.0 UCA weight keys: http://www.unicode.org/Public/UCA/4.0.0/allkeys-4.0.0.txt. The xxx_unicode_ci collations have only partial support for the Unicode Collation Algorithm. Some characters are not supported, and combining marks are not fully supported. This affects languages such as Vietnamese, Yoruba, and Navajo. A combined character is considered different from the same character written with a single unicode character in string comparisons, and the two characters are considered to have a different length (for example, as returned by the CHAR_LENGTH() function or in result set metadata).
// Unicode collations based on UCA versions higher than 4.0.0 include the version in the collation name. Examples:
// * utf8mb4_unicode_520_ci is based on UCA 5.2.0 weight keys (http://www.unicode.org/Public/UCA/5.2.0/allkeys.txt),
// * utf8mb4_0900_ai_ci is based on UCA 9.0.0 weight keys (http://www.unicode.org/Public/UCA/9.0.0/allkeys.txt).
// The LOWER() and UPPER() functions perform case folding according to the collation of their argument. A character that has uppercase and lowercase versions only in a Unicode version higher than 4.0.0 is converted by these functions only if the argument collation uses a high enough UCA version.
// 
// Collation Pad Attributes
// Collations based on UCA 9.0.0 and higher are faster than collations based on UCA versions prior to 9.0.0. They also have a pad attribute of NO PAD, in contrast to PAD SPACE as used in collations based on UCA versions prior to 9.0.0. For comparison of nonbinary strings, NO PAD collations treat spaces at the end of strings like any other character (see Trailing Space Handling in Comparisons).
// To determine the pad attribute for a collation, use the INFORMATION_SCHEMA COLLATIONS table, which has a PAD_ATTRIBUTE column. For example:
// [code]
// mysql> SELECT COLLATION_NAME, PAD_ATTRIBUTE
//        FROM INFORMATION_SCHEMA.COLLATIONS
//        WHERE CHARACTER_SET_NAME = 'utf8mb4';
// +----------------------------+---------------+
// | COLLATION_NAME             | PAD_ATTRIBUTE |
// +----------------------------+---------------+
// | utf8mb4_general_ci         | PAD SPACE     |
// | utf8mb4_bin                | PAD SPACE     |
// | utf8mb4_unicode_ci         | PAD SPACE     |
// | utf8mb4_icelandic_ci       | PAD SPACE     |
// ...
// | utf8mb4_0900_ai_ci         | NO PAD        |
// | utf8mb4_de_pb_0900_ai_ci   | NO PAD        |
// | utf8mb4_is_0900_ai_ci      | NO PAD        |
// ...
// | utf8mb4_ja_0900_as_cs      | NO PAD        |
// | utf8mb4_ja_0900_as_cs_ks   | NO PAD        |
// | utf8mb4_0900_as_ci         | NO PAD        |
// | utf8mb4_ru_0900_ai_ci      | NO PAD        |
// | utf8mb4_ru_0900_as_cs      | NO PAD        |
// | utf8mb4_zh_0900_as_cs      | NO PAD        |
// | utf8mb4_0900_bin           | NO PAD        |
// +----------------------------+---------------+
// [/code]
// Comparison of nonbinary string values (CHAR, VARCHAR, and TEXT) that have a NO PAD collation differ from other collations with respect to trailing spaces. For example, 'a' and 'a ' compare as different strings, not the same string. This can be seen using the binary collations for utf8mb4. The pad attribute for utf8mb4_bin is PAD SPACE, whereas for utf8mb4_0900_bin it is NO PAD. Consequently, operations involving utf8mb4_0900_bin do not add trailing spaces, and comparisons involving strings with trailing spaces may differ for the two collations:
// [code]
// mysql> CREATE TABLE t1 (c CHAR(10) COLLATE utf8mb4_bin);
// Query OK, 0 rows affected (0.03 sec)
// 
// mysql> INSERT INTO t1 VALUES('a');
// Query OK, 1 row affected (0.01 sec)
// 
// mysql> SELECT * FROM t1 WHERE c = 'a ';
// +------+
// | c    |
// +------+
// | a    |
// +------+
// 1 row in set (0.00 sec)
// 
// mysql> ALTER TABLE t1 MODIFY c CHAR(10) COLLATE utf8mb4_0900_bin;
// Query OK, 0 rows affected (0.02 sec)
// Records: 0  Duplicates: 0  Warnings: 0
// 
// mysql> SELECT * FROM t1 WHERE c = 'a ';
// Empty set (0.00 sec)
// [/code]
// 
// Language-Specific Collations
// MySQL implements language-specific Unicode collations if the ordering based only on the Unicode Collation Algorithm (UCA) does not work well for a language. Language-specific collations are UCA-based, with additional language tailoring rules. Examples of such rules appear later in this section. For questions about particular language orderings, unicode.org provides Common Locale Data Repository (CLDR) collation charts at http://www.unicode.org/cldr/charts/30/collation/index.html.
// For example, the nonlanguage-specific utf8mb4_0900_ai_ci and language-specific utf8mb4_LOCALE_0900_ai_ci Unicode collations each have these characteristics:
// * The collation is based on UCA 9.0.0 and CLDR v30, is accent-insensitive and case-insensitive. These characteristics are indicated by _0900, _ai, and _ci in the collation name. Exception: utf8mb4_la_0900_ai_ci is not based on CLDR because Classical Latin is not defined in CLDR.
// * The collation works for all characters in the range [U+0, U+10FFFF].
// * If the collation is not language specific, it sorts all characters, including supplementary characters, in default order (described following). If the collation is language specific, it sorts characters of the language correctly according to language-specific rules, and characters not in the language in default order.
// * By default, the collation sorts characters having a code point listed in the DUCET table (Default Unicode Collation Element Table) according to the weight value assigned in the table. The collation sorts characters not having a code point listed in the DUCET table using their implicit weight value, which is constructed according to the UCA.
// * For non-language-specific collations, characters in contraction sequences are treated as separate characters. For language-specific collations, contractions might change character sorting order.
// A collation name that includes a locale code or language name shown in the following table is a language-specific collation. Unicode character sets may include collations for one or more of these languages.
// 
// Table 10.3 Unicode Collation Language Specifiers
// Language                | Language Specifier
// Bosnian                 | bs
// Bulgarian               | bg
// Chinese                 | zh
// Classical Latin         | la or roman
// Croatian                | hr or croatian
// Czech                   | cs or czech
// Danish                  | da or danish
// Esperanto               | eo or esperanto
// Estonian                | et or estonian
// Galician                | gl
// German phone book order | de_pb or german2
// Hungarian               | hu or hungarian
// Icelandic               | is or icelandic
// Japanese                | ja
// Latvian                 | lv or latvian
// Lithuanian              | lt or lithuanian
// Mongolian               | mn
// Norwegian / Bokmål      | nb
// Norwegian / Nynorsk     | nn
// Persian                 | persian
// Polish                  | pl or polish
// Romanian                | ro or romanian
// Russian                 | ru
// Serbian                 | sr
// Sinhala                 | sinhala
// Slovak                  | sk or slovak
// Slovenian               | sl or slovenian
// Modern Spanish          | es or spanish
// Traditional Spanish     | es_trad or spanish2
// Swedish                 | sv or swedish
// Turkish                 | tr or turkish
// Vietnamese              | vi or vietnamese
// 
// MySQL provides the Bulgarian collations utf8mb4_bg_0900_ai_ci and utf8mb4_bg_0900_as_cs.
// Croatian collations are tailored for these Croatian letters: Č, Ć, Dž, Đ, Lj, Nj, Š, Ž.
// MySQL provides the utf8mb4_sr_latn_0900_ai_ci and utf8mb4_sr_latn_0900_as_cs collations for Serbian and the utf8mb4_bs_0900_ai_ci and utf8mb4_bs_0900_as_cs collations for Bosnian, when these languages are written with the Latin alphabet.
// MySQL provides collations for both major varieties of Norwegian: for Bokmål, you can use utf8mb4_nb_0900_ai_ci and utf8mb4_nb_0900_as_cs; for Nynorsk, MySQL now provides utf8mb4_nn_0900_ai_ci and utf8mb4_nn_0900_as_cs.
// For Japanese, the utf8mb4 character set includes utf8mb4_ja_0900_as_cs and utf8mb4_ja_0900_as_cs_ks collations. Both collations are accent-sensitive and case-sensitive. utf8mb4_ja_0900_as_cs_ks is also kana-sensitive and distinguishes Katakana characters from Hiragana characters, whereas utf8mb4_ja_0900_as_cs treats Katakana and Hiragana characters as equal for sorting. Applications that require a Japanese collation but not kana sensitivity may use utf8mb4_ja_0900_as_cs for better sort performance. utf8mb4_ja_0900_as_cs uses three weight levels for sorting; utf8mb4_ja_0900_as_cs_ks uses four.
// For Classical Latin collations that are accent-insensitive, I and J compare as equal, and U and V compare as equal. I and J, and U and V compare as equal on the base letter level. In other words, J is regarded as an accented I, and U is regarded as an accented V.
// MySQL provides collations for the Mongolian language when written with Cyrillic characters, utf8mb4_mn_cyrl_0900_ai_ci and utf8mb4_mn_cyrl_0900_as_cs.
// Spanish collations are available for modern and traditional Spanish. For both, ñ (n-tilde) is a separate letter between n and o. In addition, for traditional Spanish, ch is a separate letter between c and d, and ll is a separate letter between l and m.
// Traditional Spanish collations may also be used for Asturian and Galician. MySQL also provides utf8mb4_gl_0900_ai_ci and utf8mb4_gl_0900_as_cs collations for Galician. (These are the same collations as utf8mb4_es_0900_ai_ci and utf8mb4_es_0900_as_cs, respectively.)
// Swedish collations include Swedish rules. For example, in Swedish, the following relationship holds, which is not something expected by a German or French speaker:
// [code]
// Ü = Y < Ö
// [/code]
// 
// _general_ci Versus _unicode_ci Collations
// For any Unicode character set, operations performed using the xxx_general_ci collation are faster than those for the xxx_unicode_ci collation. For example, comparisons for the utf8mb4_general_ci collation are faster, but slightly less correct, than comparisons for utf8mb4_unicode_ci. The reason is that utf8mb4_unicode_ci supports mappings such as expansions; that is, when one character compares as equal to combinations of other characters. For example, ß is equal to ss in German and some other languages. utf8mb4_unicode_ci also supports contractions and ignorable characters. utf8mb4_general_ci is a legacy collation that does not support expansions, contractions, or ignorable characters. It can make only one-to-one comparisons between characters.
// To further illustrate, the following equalities hold in both utf8mb4_general_ci and utf8mb4_unicode_ci (for the effect of this in comparisons or searches, see Section 10.8.6, “Examples of the Effect of Collation”):
// [code]
// Ä = A
// Ö = O
// Ü = U
// [/code]
// A difference between the collations is that this is true for utf8mb4_general_ci:
// [code]
// ß = s
// [/code]
// Whereas this is true for utf8mb4_unicode_ci, which supports the German DIN-1 ordering (also known as dictionary order):
// [code]
// ß = ss
// [/code]
// MySQL implements language-specific Unicode collations if the ordering with utf8mb4_unicode_ci does not work well for a language. For example, utf8mb4_unicode_ci works fine for German dictionary order and French, so there is no need to create special utf8mb4 collations.
// utf8mb4_general_ci also is satisfactory for both German and French, except that ß is equal to s, and not to ss. If this is acceptable for your application, you should use utf8mb4_general_ci because it is faster. If this is not acceptable (for example, if you require German dictionary order), use utf8mb4_unicode_ci because it is more accurate.
// If you require German DIN-2 (phone book) ordering, use the utf8mb4_german2_ci collation, which compares the following sets of characters equal:
// [code]
// Ä = Æ = AE
// Ö = Œ = OE
// Ü = UE
// ß = ss
// [/code]
// utf8mb4_german2_ci is similar to latin1_german2_ci, but the latter does not compare Æ equal to AE or Œ equal to OE. There is no utf8mb4_german_ci corresponding to latin1_german_ci for German dictionary order because utf8mb4_general_ci suffices.
// 
// Character Collating Weights
// A character's collating weight is determined as follows:
// * For all Unicode collations except the _bin (binary) collations, MySQL performs a table lookup to find a character's collating weight.
// * For _bin collations except utf8mb4_0900_bin, the weight is based on the code point, possibly with leading zero bytes added.
// * For utf8mb4_0900_bin, the weight is the utf8mb4 encoding bytes. The sort order is the same as for utf8mb4_bin, but much faster.
// Collating weights can be displayed using the WEIGHT_STRING() function. (See Section 12.8, “String Functions and Operators”.) If a collation uses a weight lookup table, but a character is not in the table (for example, because it is a “new” character), collating weight determination becomes more complex:
// * For BMP characters in general collations (xxx_general_ci), the weight is the code point.
// * For BMP characters in UCA collations (for example, xxx_unicode_ci and language-specific collations), the following algorithm applies:
// [code]
// if (code >= 0x3400 && code <= 0x4DB5)
//   base= 0xFB80; /* CJK Ideograph Extension */
// else if (code >= 0x4E00 && code <= 0x9FA5)
//   base= 0xFB40; /* CJK Ideograph */
// else
//   base= 0xFBC0; /* All other characters */
// aaaa= base +  (code >> 15);
// bbbb= (code & 0x7FFF) | 0x8000;
// [/code]
// The result is a sequence of two collating elements, aaaa followed by bbbb. For example:
// [code]
// mysql> SELECT HEX(WEIGHT_STRING(_ucs2 0x04CF COLLATE ucs2_unicode_ci));
// +----------------------------------------------------------+
// | HEX(WEIGHT_STRING(_ucs2 0x04CF COLLATE ucs2_unicode_ci)) |
// +----------------------------------------------------------+
// | FBC084CF                                                 |
// +----------------------------------------------------------+
// [/code]
// Thus, U+04cf CYRILLIC SMALL LETTER PALOCHKA (ӏ) is, with all UCA 4.0.0 collations, greater than U+04c0 CYRILLIC LETTER PALOCHKA (Ӏ). With UCA 5.2.0 collations, all palochkas sort together.
// * For supplementary characters in general collations, the weight is the weight for 0xfffd REPLACEMENT CHARACTER. For supplementary characters in UCA 4.0.0 collations, their collating weight is 0xfffd. That is, to MySQL, all supplementary characters are equal to each other, and greater than almost all BMP characters.
// An example with Deseret characters and COUNT(DISTINCT):
// [code]
// CREATE TABLE t (s1 VARCHAR(5) CHARACTER SET utf32 COLLATE utf32_unicode_ci);
// INSERT INTO t VALUES (0xfffd);   /* REPLACEMENT CHARACTER */
// INSERT INTO t VALUES (0x010412); /* DESERET CAPITAL LETTER BEE */
// INSERT INTO t VALUES (0x010413); /* DESERET CAPITAL LETTER TEE */
// SELECT COUNT(DISTINCT s1) FROM t;
// [/code]
// The result is 2 because in the MySQL xxx_unicode_ci collations, the replacement character has a weight of 0x0dc6, whereas Deseret Bee and Deseret Tee both have a weight of 0xfffd. (Were the utf32_general_ci collation used instead, the result is 1 because all three characters have a weight of 0xfffd in that collation.)
// An example with cuneiform characters and WEIGHT_STRING():
// [code]
// /*
// The four characters in the INSERT string are
// 00000041  # LATIN CAPITAL LETTER A
// 0001218F  # CUNEIFORM SIGN KAB
// 000121A7  # CUNEIFORM SIGN KISH
// 00000042  # LATIN CAPITAL LETTER B
// */
// CREATE TABLE t (s1 CHAR(4) CHARACTER SET utf32 COLLATE utf32_unicode_ci);
// INSERT INTO t VALUES (0x000000410001218f000121a700000042);
// SELECT HEX(WEIGHT_STRING(s1)) FROM t;
// [/code]
// The result is:
// [result]
// 0E33 FFFD FFFD 0E4A
// [/result]
// 0E33 and 0E4A are primary weights as in UCA 4.0.0. FFFD is the weight for KAB and also for KISH.
// The rule that all supplementary characters are equal to each other is nonoptimal but is not expected to cause trouble. These characters are very rare, so it is very rare that a multi-character string consists entirely of supplementary characters. In Japan, since the supplementary characters are obscure Kanji ideographs, the typical user does not care what order they are in, anyway. If you really want rows sorted by the MySQL rule and secondarily by code point value, it is easy:
// [code]
// ORDER BY s1 COLLATE utf32_unicode_ci, s1 COLLATE utf32_bin
// [/code]
// * For supplementary characters based on UCA versions higher than 4.0.0 (for example, xxx_unicode_520_ci), supplementary characters do not necessarily all have the same collating weight. Some have explicit weights from the UCA allkeys.txt file. Others have weights calculated from this algorithm:
// [code]
// aaaa= base +  (code >> 15);
// bbbb= (code & 0x7FFF) | 0x8000;
// [/code]
// There is a difference between “ordering by the character's code value” and “ordering by the character's binary representation,” a difference that appears only with utf16_bin, because of surrogates.
// Suppose that utf16_bin (the binary collation for utf16) was a binary comparison “byte by byte” rather than “character by character.” If that were so, the order of characters in utf16_bin would differ from the order in utf8mb4_bin. For example, the following chart shows two rare characters. The first character is in the range E000-FFFF, so it is greater than a surrogate but less than a supplementary. The second character is a supplementary.
// [code]
// Code point  Character                    utf8mb4      utf16
// ----------  ---------                    -------      -----
// 0FF9D       HALFWIDTH KATAKANA LETTER N  EF BE 9D     FF 9D
// 10384       UGARITIC LETTER DELTA        F0 90 8E 84  D8 00 DF 84
// [/code]
// The two characters in the chart are in order by code point value because 0xff9d < 0x10384. And they are in order by utf8mb4 value because 0xef < 0xf0. But they are not in order by utf16 value, if we use byte-by-byte comparison, because 0xff > 0xd8.
// So MySQL's utf16_bin collation is not “byte by byte.” It is “by code point.” When MySQL sees a supplementary-character encoding in utf16, it converts to the character's code-point value, and then compares. Therefore, utf8mb4_bin and utf16_bin are the same ordering. This is consistent with the SQL:2008 standard requirement for a UCS_BASIC collation: “UCS_BASIC is a collation in which the ordering is determined entirely by the Unicode scalar values of the characters in the strings being sorted. It is applicable to the UCS character repertoire. Since every character repertoire is a subset of the UCS repertoire, the UCS_BASIC collation is potentially applicable to every character set. NOTE 11: The Unicode scalar value of a character is its code point treated as an unsigned integer.”
// If the character set is ucs2, comparison is byte-by-byte, but ucs2 strings should not contain surrogates, anyway.
//
// Miscellaneous Information
// The xxx_general_mysql500_ci collations preserve the pre-5.1.24 ordering of the original xxx_general_ci collations and permit upgrades for tables created before MySQL 5.1.24 (Bug #27877).
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-unicode-sets.html
// 10_10_1_UNICODE_CHARACTER_SETS - END

// 10_10_2_WEST_EUROPEAN_CHARACTER_SETS - BEGIN
// 10.10.2 West European Character Sets
// 
// Western European character sets cover most West European languages, such as French, Spanish, Catalan, Basque, Portuguese, Italian, Albanian, Dutch, German, Danish, Swedish, Norwegian, Finnish, Faroese, Icelandic, Irish, Scottish, and English.
// * ascii (US ASCII) collations:
//  * ascii_bin
//  * ascii_general_ci (default)
// * cp850 (DOS West European) collations:
//  * cp850_bin
//  * cp850_general_ci (default)
// * dec8 (DEC Western European) collations:
//  * dec8_bin
//  * dec8_swedish_ci (default)
// The dec character set is deprecated; expect support for it to be removed in a subsequent MySQL release.
// * hp8 (HP Western European) collations:
//  * hp8_bin
//  * hp8_english_ci (default)
// The hp8 character set is deprecated; expect support for it to be removed in a subsequent MySQL release.
// * latin1 (cp1252 West European) collations:
//  * latin1_bin
//  * latin1_danish_ci
//  * latin1_general_ci
//  * latin1_general_cs
//  * latin1_german1_ci
//  * latin1_german2_ci
//  * latin1_spanish_ci
//  * latin1_swedish_ci (default)
//  MySQL's latin1 is the same as the Windows cp1252 character set. This means it is the same as the official ISO 8859-1 or IANA (Internet Assigned Numbers Authority) latin1, except that IANA latin1 treats the code points between 0x80 and 0x9f as “undefined,” whereas cp1252, and therefore MySQL's latin1, assign characters for those positions. For example, 0x80 is the Euro sign. For the “undefined” entries in cp1252, MySQL translates 0x81 to Unicode 0x0081, 0x8d to 0x008d, 0x8f to 0x008f, 0x90 to 0x0090, and 0x9d to 0x009d.
//  The latin1_swedish_ci collation is the default that probably is used by the majority of MySQL customers. Although it is frequently said that it is based on the Swedish/Finnish collation rules, there are Swedes and Finns who disagree with this statement.
//  The latin1_german1_ci and latin1_german2_ci collations are based on the DIN-1 and DIN-2 standards, where DIN stands for Deutsches Institut für Normung (the German equivalent of ANSI). DIN-1 is called the “dictionary collation” and DIN-2 is called the “phone book collation.” For an example of the effect this has in comparisons or when doing searches, see Section 10.8.6, “Examples of the Effect of Collation”.
//  * latin1_german1_ci (dictionary) rules:
// [code]
//  Ä = A
//  Ö = O
//  Ü = U
//  ß = s
// [/code]
//  * latin1_german2_ci (phone-book) rules:
// [code]
//  Ä = AE
//  Ö = OE
//  Ü = UE
//  ß = ss
// [/code]
//  In the latin1_spanish_ci collation, ñ (n-tilde) is a separate letter between n and o.
// * macroman (Mac West European) collations:
//  * macroman_bin
//  * macroman_general_ci (default)
//  macroroman is deprecated; expect support for it to be removed in a subsequent MySQL release.
// * swe7 (7bit Swedish) collations:
//  * swe7_bin
//  * swe7_swedish_ci (default)
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-we-sets.html
// 10_10_2_WEST_EUROPEAN_CHARACTER_SETS - END

// 10_10_3_CENTRAL_EUROPEAN_CHARACTER_SETS - BEGIN
// 10.10.3 Central European Character Sets
// 
// MySQL provides some support for character sets used in the Czech Republic, Slovakia, Hungary, Romania, Slovenia, Croatia, Poland, and Serbia (Latin).
// * cp1250 (Windows Central European) collations:
//  * cp1250_bin
//  * cp1250_croatian_ci
//  * cp1250_czech_cs
//  * cp1250_general_ci (default)
//  * cp1250_polish_ci
// * cp852 (DOS Central European) collations:
//  * cp852_bin
//  * cp852_general_ci (default)
// * keybcs2 (DOS Kamenicky Czech-Slovak) collations:
//  * keybcs2_bin
//  * keybcs2_general_ci (default)
// * latin2 (ISO 8859-2 Central European) collations:
//  * latin2_bin
//  * latin2_croatian_ci
//  * latin2_czech_cs
//  * latin2_general_ci (default)
//  * latin2_hungarian_ci
// * macce (Mac Central European) collations:
//  * macce_bin
//  * macce_general_ci (default)
//  macce is deprecated; expect support for it to be removed in a subsequent MySQL release.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-ce-sets.html
// 10_10_3_CENTRAL_EUROPEAN_CHARACTER_SETS - END

// 10_10_4_SOUTH_EUROPEAN_AND_MIDDLE_EAST_CHARACTER_SETS - BEGIN
// 10.10.4 South European and Middle East Character Sets
// 
// South European and Middle Eastern character sets supported by MySQL include Armenian, Arabic, Georgian, Greek, Hebrew, and Turkish.
// * armscii8 (ARMSCII-8 Armenian) collations:
//  * armscii8_bin
//  * armscii8_general_ci (default)
// * cp1256 (Windows Arabic) collations:
//  * cp1256_bin
//  * cp1256_general_ci (default)
// * geostd8 (GEOSTD8 Georgian) collations:
//  * geostd8_bin
//  * geostd8_general_ci (default)
// * greek (ISO 8859-7 Greek) collations:
//  * greek_bin
//  * greek_general_ci (default)
// * hebrew (ISO 8859-8 Hebrew) collations:
//  * hebrew_bin
//  * hebrew_general_ci (default)
// * latin5 (ISO 8859-9 Turkish) collations:
//  * latin5_bin
//  * latin5_turkish_ci (default)
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-se-me-sets.html
// 10_10_4_SOUTH_EUROPEAN_AND_MIDDLE_EAST_CHARACTER_SETS - END

// 10_10_5_BALTIC_CHARACTER_SETS - BEGIN
// 10.10.5 Baltic Character Sets
// 
// The Baltic character sets cover Estonian, Latvian, and Lithuanian languages.
// * cp1257 (Windows Baltic) collations:
//  * cp1257_bin
//  * cp1257_general_ci (default)
//  * cp1257_lithuanian_ci
// * latin7 (ISO 8859-13 Baltic) collations:
//  * latin7_bin
//  * latin7_estonian_cs
//  * latin7_general_ci (default)
//  * latin7_general_cs
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-baltic-sets.html
// 10_10_5_BALTIC_CHARACTER_SETS - END

// 10_10_6_CYRILLIC_CHARACTER_SETS - BEGIN
// 10.10.6 Cyrillic Character Sets
// 
// The Cyrillic character sets and collations are for use with Belarusian, Bulgarian, Russian, Ukrainian, and Serbian (Cyrillic) languages.
// * cp1251 (Windows Cyrillic) collations:
//  * cp1251_bin
//  * cp1251_bulgarian_ci
//  * cp1251_general_ci (default)
//  * cp1251_general_cs
//  * cp1251_ukrainian_ci
// * cp866 (DOS Russian) collations:
//  * cp866_bin
//  * cp866_general_ci (default)
// * koi8r (KOI8-R Relcom Russian) collations:
//  * koi8r_bin
//  * koi8r_general_ci (default)
// * koi8u (KOI8-U Ukrainian) collations:
//  * koi8u_bin
//  * koi8u_general_ci (default)
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-cyrillic-sets.html
// 10_10_6_CYRILLIC_CHARACTER_SETS - END

// 10_10_7_ASIAN_CHARACTER_SETS - BEGIN
// 10.10.7 Asian Character Sets
// 
// 10_10_7_1_THE_CP932_CHARACTER_SET
// 10_10_7_2_THE_GB18030_CHARACTER_SET
// 
// The Asian character sets that we support include Chinese, Japanese, Korean, and Thai. These can be complicated. For example, the Chinese sets must allow for thousands of different characters. See Section 10.10.7.1, “The cp932 Character Set”, for additional information about the cp932 and sjis character sets. See Section 10.10.7.2, “The gb18030 Character Set”, for additional information about character set support for the Chinese National Standard GB 18030.
// For answers to some common questions and problems relating support for Asian character sets in MySQL, see Section A.11, “MySQL 8.1 FAQ: MySQL Chinese, Japanese, and Korean Character Sets”.
// * big5 (Big5 Traditional Chinese) collations:
//  * big5_bin
//  * big5_chinese_ci (default)
// * cp932 (SJIS for Windows Japanese) collations:
//  * cp932_bin
//  * cp932_japanese_ci (default)
// * eucjpms (UJIS for Windows Japanese) collations:
//  * eucjpms_bin
//  * eucjpms_japanese_ci (default)
// * euckr (EUC-KR Korean) collations:
//  * euckr_bin
//  * euckr_korean_ci (default)
// * gb2312 (GB2312 Simplified Chinese) collations:
//  * gb2312_bin
//  * gb2312_chinese_ci (default)
// * gbk (GBK Simplified Chinese) collations:
//  * gbk_bin
//  * gbk_chinese_ci (default)
// * gb18030 (China National Standard GB18030) collations:
//  * gb18030_bin
//  * gb18030_chinese_ci (default)
//  * gb18030_unicode_520_ci
// * sjis (Shift-JIS Japanese) collations:
//  * sjis_bin
//  * sjis_japanese_ci (default)
// * tis620 (TIS620 Thai) collations:
//  * tis620_bin
//  * tis620_thai_ci (default)
// * ujis (EUC-JP Japanese) collations:
//  * ujis_bin
//  * ujis_japanese_ci (default)
// The big5_chinese_ci collation sorts on number of strokes.
// 
// 10_10_7_1_THE_CP932_CHARACTER_SET - BEGIN
// 10.10.7.1 The cp932 Character Set
// 
// Why is cp932 needed?
// In MySQL, the sjis character set corresponds to the Shift_JIS character set defined by IANA, which supports JIS X0201 and JIS X0208 characters. (See http://www.iana.org/assignments/character-sets.)
// However, the meaning of “SHIFT JIS” as a descriptive term has become very vague and it often includes the extensions to Shift_JIS that are defined by various vendors.
// For example, “SHIFT JIS” used in Japanese Windows environments is a Microsoft extension of Shift_JIS and its exact name is Microsoft Windows Codepage : 932 or cp932. In addition to the characters supported by Shift_JIS, cp932 supports extension characters such as NEC special characters, NEC selected—IBM extended characters, and IBM selected characters.
// Many Japanese users have experienced problems using these extension characters. These problems stem from the following factors:
// * MySQL automatically converts character sets.
// * Character sets are converted using Unicode (ucs2).
// * The sjis character set does not support the conversion of these extension characters.
// * There are several conversion rules from so-called “SHIFT JIS” to Unicode, and some characters are converted to Unicode differently depending on the conversion rule. MySQL supports only one of these rules (described later).
// The MySQL cp932 character set is designed to solve these problems.
// Because MySQL supports character set conversion, it is important to separate IANA Shift_JIS and cp932 into two different character sets because they provide different conversion rules.
// 
// How does cp932 differ from sjis?
// The cp932 character set differs from sjis in the following ways:
// * cp932 supports NEC special characters, NEC selected—IBM extended characters, and IBM selected characters.
// * Some cp932 characters have two different code points, both of which convert to the same Unicode code point. When converting from Unicode back to cp932, one of the code points must be selected. For this “round trip conversion,” the rule recommended by Microsoft is used. (See http://support.microsoft.com/kb/170559/EN-US/.)
//  The conversion rule works like this:
//  * If the character is in both JIS X 0208 and NEC special characters, use the code point of JIS X 0208.
//  * If the character is in both NEC special characters and IBM selected characters, use the code point of NEC special characters.
//  * If the character is in both IBM selected characters and NEC selected—IBM extended characters, use the code point of IBM extended characters.
//  The table shown at https://msdn.microsoft.com/en-us/goglobal/cc305152.aspx provides information about the Unicode values of cp932 characters. For cp932 table entries with characters under which a four-digit number appears, the number represents the corresponding Unicode (ucs2) encoding. For table entries with an underlined two-digit value appears, there is a range of cp932 character values that begin with those two digits. Clicking such a table entry takes you to a page that displays the Unicode value for each of the cp932 characters that begin with those digits.
//  The following links are of special interest. They correspond to the encodings for the following sets of characters:
//  * NEC special characters (lead byte 0x87):
//  [code]
//  https://msdn.microsoft.com/en-us/goglobal/gg674964
//  [/code]
//  * NEC selected—IBM extended characters (lead byte 0xED and 0xEE):
//  [code]
//  https://msdn.microsoft.com/en-us/goglobal/gg671837
//  https://msdn.microsoft.com/en-us/goglobal/gg671838
//  [/code]
//  * IBM selected characters (lead byte 0xFA, 0xFB, 0xFC):
//  [code]
//  https://msdn.microsoft.com/en-us/goglobal/gg671839
//  https://msdn.microsoft.com/en-us/goglobal/gg671840
//  https://msdn.microsoft.com/en-us/goglobal/gg671841
//  [/code]
// * cp932 supports conversion of user-defined characters in combination with eucjpms, and solves the problems with sjis/ujis conversion. For details, please refer to http://www.sljfaq.org/afaq/encodings.html.
// For some characters, conversion to and from ucs2 is different for sjis and cp932. The following tables illustrate these differences.
// 
// Conversion to ucs2:
// sjis/cp932 Value | sjis -> ucs2 Conversion | cp932 -> ucs2 Conversion
// 5C               | 005C                    | 005C
// 7E               | 007E                    | 007E
// 815C             | 2015                    | 2015
// 815F             | 005C                    | FF3C
// 8160             | 301C                    | FF5E
// 8161             | 2016                    | 2225
// 817C             | 2212                    | FF0D
// 8191             | 00A2                    | FFE0
// 8192             | 00A3                    | FFE1
// 81CA             | 00AC                    | FFE2
// 
// Conversion from ucs2:
// ucs2 value | ucs2 -> sjis Conversion | ucs2 -> cp932 Conversion
// 005C       | 815F                    | 5C
// 007E       | 7E                      | 7E
// 00A2       | 8191                    | 3F
// 00A3       | 8192                    | 3F
// 00AC       | 81CA                    | 3F
// 2015       | 815C                    | 815C
// 2016       | 8161                    | 3F
// 2212       | 817C                    | 3F
// 2225       | 3F                      | 8161
// 301C       | 8160                    | 3F
// FF0D       | 3F                      | 817C
// FF3C       | 3F                      | 815F
// FF5E       | 3F                      | 8160
// FFE0       | 3F                      | 8191
// FFE1       | 3F                      | 8192
// FFE2       | 3F                      | 81CA
// Users of any Japanese character sets should be aware that using --character-set-client-handshake (or --skip-character-set-client-handshake) has an important effect. See Section 5.1.7, “Server Command Options”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-cp932.html
// 10_10_7_1_THE_CP932_CHARACTER_SET - END

// 10_10_7_2_THE_GB18030_CHARACTER_SET - BEGIN
// 10.10.7.2 The gb18030 Character Set
// 
// In MySQL, the gb18030 character set corresponds to the “Chinese National Standard GB 18030-2005: Information technology — Chinese coded character set”, which is the official character set of the People's Republic of China (PRC).
// 
// Characteristics of the MySQL gb18030 Character Set
// * Supports all code points defined by the GB 18030-2005 standard. Unassigned code points in the ranges (GB+8431A439, GB+90308130) and (GB+E3329A36, GB+EF39EF39) are treated as '?' (0x3F). Conversion of unassigned code points return '?'.
// * Supports UPPER and LOWER conversion for all GB18030 code points. Case folding defined by Unicode is also supported (based on CaseFolding-6.3.0.txt).
// * Supports Conversion of data to and from other character sets.
// * Supports SQL statements such as SET NAMES.
// * Supports comparison between gb18030 strings, and between gb18030 strings and strings of other character sets. There is a conversion if strings have different character sets. Comparisons that include or ignore trailing spaces are also supported.
// * The private use area (U+E000, U+F8FF) in Unicode is mapped to gb18030.
// * There is no mapping between (U+D800, U+DFFF) and GB18030. Attempted conversion of code points in this range returns '?'.
// * If an incoming sequence is illegal, an error or warning is returned. If an illegal sequence is used in CONVERT(), an error is returned. Otherwise, a warning is returned.
// * For consistency with utf8mb3 and utf8mb4, UPPER is not supported for ligatures.
// * Searches for ligatures also match uppercase ligatures when using the gb18030_unicode_520_ci collation.
// * If a character has more than one uppercase character, the chosen uppercase character is the one whose lowercase is the character itself.
// * The minimum multibyte length is 1 and the maximum is 4. The character set determines the length of a sequence using the first 1 or 2 bytes.
// 
// Supported Collations
// * gb18030_bin: A binary collation.
// * gb18030_chinese_ci: The default collation, which supports Pinyin. Sorting of non-Chinese characters is based on the order of the original sort key. The original sort key is GB(UPPER(ch)) if UPPER(ch) exists. Otherwise, the original sort key is GB(ch). Chinese characters are sorted according to the Pinyin collation defined in the Unicode Common Locale Data Repository (CLDR 24). Non-Chinese characters are sorted before Chinese characters with the exception of GB+FE39FE39, which is the code point maximum.
// * gb18030_unicode_520_ci: A Unicode collation. Use this collation if you need to ensure that ligatures are sorted correctly.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-gb18030.html
// 10_10_7_2_THE_GB18030_CHARACTER_SET - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-asian-sets.html
// 10_10_7_ASIAN_CHARACTER_SETS - END

// 10_10_8_THE_BINARY_CHARACTER_SET - BEGIN
// 10.10.8 The Binary Character Set
// 
// The binary character set is the character set for binary strings, which are sequences of bytes. The binary character set has one collation, also named binary. Comparison and sorting are based on numeric byte values, rather than on numeric character code values (which for multibyte characters differ from numeric byte values). For information about the differences between the binary collation of the binary character set and the _bin collations of nonbinary character sets, see Section 10.8.5, “The binary Collation Compared to _bin Collations”.
// For the binary character set, the concepts of lettercase and accent equivalence do not apply:
// * For single-byte characters stored as binary strings, character and byte boundaries are the same, so lettercase and accent differences are significant in comparisons. That is, the binary collation is case-sensitive and accent-sensitive.
// [code]
// mysql> SET NAMES 'binary';
// mysql> SELECT CHARSET('abc'), COLLATION('abc');
// +----------------+------------------+
// | CHARSET('abc') | COLLATION('abc') |
// +----------------+------------------+
// | binary         | binary           |
// +----------------+------------------+
// mysql> SELECT 'abc' = 'ABC', 'a' = 'ä';
// +---------------+------------+
// | 'abc' = 'ABC' | 'a' = 'ä'  |
// +---------------+------------+
// |             0 |          0 |
// +---------------+------------+
// [/code]
// * For multibyte characters stored as binary strings, character and byte boundaries differ. Character boundaries are lost, so comparisons that depend on them are not meaningful.
// To perform lettercase conversion of a binary string, first convert it to a nonbinary string using a character set appropriate for the data stored in the string:
// [code]
// mysql> SET @str = BINARY 'New York';
// mysql> SELECT LOWER(@str), LOWER(CONVERT(@str USING utf8mb4));
// +-------------+------------------------------------+
// | LOWER(@str) | LOWER(CONVERT(@str USING utf8mb4)) |
// +-------------+------------------------------------+
// | New York    | new york                           |
// +-------------+------------------------------------+
// [/code]
// To convert a string expression to a binary string, these constructs are equivalent:
// [code]
// BINARY expr
// CAST(expr AS BINARY)
// CONVERT(expr USING BINARY)
// [/code]
// If a value is a character string literal, the _binary introducer may be used to designate it as a binary string. For example:
// [code]
// _binary 'a'
// [/code]
// The _binary introducer is permitted for hexadecimal literals and bit-value literals as well, but unnecessary; such literals are binary strings by default.
// For more information about introducers, see Section 10.3.8, “Character Set Introducers”.
// Note: Within the mysql client, binary strings display using hexadecimal notation, depending on the value of the --binary-as-hex. For more information about that option, see Section 4.5.1, “mysql - The MySQL Command-Line Client”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-binary-set.html
// 10_10_8_THE_BINARY_CHARACTER_SET - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-28)
// URL: https://dev.mysql.com/doc/refman/8.1/en/charset-charsets.html
// 10_10_SUPPORTED_CHARACTER_SETS_AND_COLLATIONS - END
// 
// PERSISTENT_DATABASE_CONNECTIONS - BEGIN
// Persistent Database Connections
// 
// Persistent connections are links that do not close when the execution of your script ends. When a persistent connection is requested, PHP checks if there's already an identical persistent connection (that remained open from earlier) - and if it exists, it uses it. If it does not exist, it creates the link. An 'identical' connection is a connection that was opened to the same host, with the same username and the same password (where applicable).
// People who aren't thoroughly familiar with the way web servers work and distribute the load may mistake persistent connects for what they're not. In particular, they do not give you an ability to open 'user sessions' on the same link, they do not give you an ability to build up a transaction efficiently, and they don't do a whole lot of other things. In fact, to be extremely clear about the subject, persistent connections don't give you any functionality that wasn't possible with their non-persistent brothers.
// Why?
// This has to do with the way web servers work. There are three ways in which your web server can utilize PHP to generate web pages.
// The first method is to use PHP as a CGI "wrapper". When run this way, an instance of the PHP interpreter is created and destroyed for every page request (for a PHP page) to your web server. Because it is destroyed after every request, any resources that it acquires (such as a link to an SQL database server) are closed when it is destroyed. In this case, you do not gain anything from trying to use persistent connections -- they simply don't persist.
// The second, and most popular, method is to run PHP as a module in a multiprocess web server, which currently only includes Apache. A multiprocess server typically has one process (the parent) which coordinates a set of processes (its children) who actually do the work of serving up web pages. When a request comes in from a client, it is handed off to one of the children that is not already serving another client. This means that when the same client makes a second request to the server, it may be served by a different child process than the first time. When opening a persistent connection, every following page requesting SQL services can reuse the same established connection to the SQL server.
// The last method is to use PHP as a plug-in for a multithreaded web server. Currently PHP has support for WSAPI, and NSAPI (on Windows), which all allow PHP to be used as a plug-in on multithreaded servers like Netscape FastTrack (iPlanet), Microsoft's Internet Information Server (IIS), and O'Reilly's WebSite Pro. The behavior is essentially the same as for the multiprocess model described before.
// If persistent connections don't have any added functionality, what are they good for?
// The answer here is extremely simple -- efficiency. Persistent connections are good if the overhead to create a link to your SQL server is high. Whether or not this overhead is really high depends on many factors. Like, what kind of database it is, whether or not it sits on the same computer on which your web server sits, how loaded the machine the SQL server sits on is and so forth. The bottom line is that if that connection overhead is high, persistent connections help you considerably. They cause the child process to simply connect only once for its entire lifespan, instead of every time it processes a page that requires connecting to the SQL server. This means that for every child that opened a persistent connection will have its own open persistent connection to the server. For example, if you had 20 different child processes that ran a script that made a persistent connection to your SQL server, you'd have 20 different connections to the SQL server, one from each child.
// Note, however, that this can have some drawbacks if you are using a database with connection limits that are exceeded by persistent child connections. If your database has a limit of 16 simultaneous connections, and in the course of a busy server session, 17 child threads attempt to connect, one will not be able to. If there are bugs in your scripts which do not allow the connections to shut down (such as infinite loops), the database with only 16 connections may be rapidly swamped. Check your database documentation for information on handling abandoned or idle connections.
// Warning: There are a couple of additional caveats to keep in mind when using persistent connections. One is that when using table locking on a persistent connection, if the script for whatever reason cannot release the lock, then subsequent scripts using the same connection will block indefinitely and may require that you either restart the httpd server or the database server. Another is that when using transactions, a transaction block will also carry over to the next script which uses that connection if script execution ends before the transaction block does. In either case, you can use register_shutdown_function() to register a simple cleanup function to unlock your tables or roll back your transactions. Better yet, avoid the problem entirely by not using persistent connections in scripts which use table locks or transactions (you can still use them elsewhere).
// An important summary. Persistent connections were designed to have one-to-one mapping to regular connections. That means that you should always be able to replace persistent connections with non-persistent connections, and it won't change the way your script behaves. It may (and probably will) change the efficiency of the script, but not its behavior!
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-08-29)
// URL: https://www.php.net/manual/en/features.persistent-connections.php
// PERSISTENT_DATABASE_CONNECTIONS - END
// 
// APPENDIX_B_ERROR_MESSAGES_AND_COMMON_PROBLEMS - BEGIN
// Appendix B Error Messages and Common Problems
// 
// B_1_ERROR_MESSAGE_SOURCES_AND_ELEMENTS
// B_2_ERROR_INFORMATION_INTERFACES
// B_3_PROBLEMS_AND_COMMON_ERRORS
// 
// This appendix describes the types of error information MySQL provides and how to obtain information about them. The final section is for troubleshooting. It describes common problems and errors that may occur and potential resolutions.
// 
// Additional Resources
// Other error-related documentation includes:
// * Information about configuring where and how the server writes the error log: Section 5.4.2, “The Error Log”
// * Information about the character set used for error messages: Section 10.6, “Error Message Character Set”
// * Information about the language used for error messages: Section 10.12, “Setting the Error Message Language”
// * Information about errors related to InnoDB: Section 15.21.5, “InnoDB Error Handling”
// * Information about errors specific to NDB Cluster: NDB Cluster API Errors; see also NDB API Errors and Error Handling, and MGM API Errors
// * Descriptions of the error messages that the MySQL server and client programs generate: MySQL 8.1 Error Message Reference
// 
// B_1_ERROR_MESSAGE_SOURCES_AND_ELEMENTS - BEGIN
// B.1 Error Message Sources and Elements
// 
// This section discusses how error messages originate within MySQL and the elements they contain.
// * Error Message Sources
// * Error Message Elements
// * Error Code Ranges
// 
// Error Message Sources
// Error messages can originate on the server side or the client side:
// * On the server side, error messages may occur during the startup and shutdown processes, as a result of issues that occur during SQL statement execution, and so forth.
//  * The MySQL server writes some error messages to its error log. These indicate issues of interest to database administrators or that require DBA action.
//  * The server sends other error messages to client programs. These indicate issues pertaining only to a particular client. The MySQL client library takes errors received from the server and makes them available to the host client program.
// * Client-side error messages are generated from within the MySQL client library, usually involving problems communicating with the server.
// Example server-side error messages written to the error log:
// * This message produced during the startup process provides a status or progress indicator:
//  [code]
//  2018-10-28T13:01:32.735983Z 0 [Note] [MY-010303] [Server] Skipping
//  generation of SSL certificates as options related to SSL are specified.
//  [/code]
// * This message indicates an issue that requires DBA action:
//  [code]
//  2018-10-02T03:20:39.410387Z 768 [ERROR] [MY-010045] [Server] Event Scheduler:
//  [evtuser@localhost][myschema.e_daily] Unknown database 'mydb'
//  [/code]
// Example server-side error message sent to client programs, as displayed by the mysql client:
//  [code]
//  mysql> SELECT * FROM no_such_table;
//  ERROR 1146 (42S02): Table 'test.no_such_table' doesn't exist
//  [/code]
// Example client-side error message originating from within the client library, as displayed by the mysql client:
//  [code]
//  $> mysql -h no-such-host
//  ERROR 2005 (HY000): Unknown MySQL server host 'no-such-host' (-2)
//  [/code]
// Whether an error originates from within the client library or is received from the server, a MySQL client program may respond in varying ways. As just illustrated, the client may display the error message so the user can take corrective measures. The client may instead internally attempt to resolve or retry a failed operation, or take other action.
// 
// Error Message Elements
// When an error occurs, error information includes several elements: an error code, SQLSTATE value, and message string. These elements have the following characteristics:
// * Error code: This value is numeric. It is MySQL-specific and is not portable to other database systems.
// Each error number has a corresponding symbolic value. Examples:
//  * The symbol for server error number 1146 is ER_NO_SUCH_TABLE.
//  * The symbol for client error number 2005 is CR_UNKNOWN_HOST.
//  The set of error codes used in error messages is partitioned into distinct ranges; see Error Code Ranges.
//  Error codes are stable across General Availability (GA) releases of a given MySQL series. Before a series reaches GA status, new codes may still be under development and are subject to change.
// * SQLSTATE value: This value is a five-character string (for example, '42S02'). SQLSTATE values are taken from ANSI SQL and ODBC and are more standardized than the numeric error codes. The first two characters of an SQLSTATE value indicate the error class:
//  * Class = '00' indicates success.
//  * Class = '01' indicates a warning.
//  * Class = '02' indicates “not found.” This is relevant within the context of cursors and is used to control what happens when a cursor reaches the end of a data set. This condition also occurs for SELECT ... INTO var_list statements that retrieve no rows.
//  * Class > '02' indicates an exception.
// For server-side errors, not all MySQL error numbers have corresponding SQLSTATE values. In these cases, 'HY000' (general error) is used.
// For client-side errors, the SQLSTATE value is always 'HY000' (general error), so it is not meaningful for distinguishing one client error from another.
// * Message string: This string provides a textual description of the error.
// 
// Error Code Ranges
// The set of error codes used in error messages is partitioned into distinct ranges, each with its own purpose:
// * 1 to 999: Global error codes. This error code range is called “global” because it is a shared range that is used by the server as well as by clients.
// When an error in this range originates on the server side, the server writes it to the error log, padding the error code with leading zeros to six digits and adding a prefix of MY-.
// When an error in this range originates on the client side, the client library makes it available to the client program with no zero-padding or prefix.
// * 1,000 to 1,999  : Server error codes reserved for messages sent to clients.
// * 2,000 to 2,999  : Client error codes reserved for use by the client library.
// * 3,000 to 4,999  : Server error codes reserved for messages sent to clients.
// * 5,000 to 5,999  : Error codes reserved for use by X Plugin for messages sent to clients.
// * 10,000 to 49,999: Server error codes reserved for messages to be written to the error log (not sent to clients).
// When an error in this range occurs, the server writes it to the error log, padding the error code with leading zeros to six digits and adding a prefix of MY-.
// * 50,000 to 51,999: Error codes reserved for use by third parties.
// The server handles error messages written to the error log differently from error messages sent to clients:
// * When the server writes a message to the error log, it pads the error code with leading zeros to six digits and adds a prefix of MY- (examples: MY-000022, MY-010048).
// * When the server sends a message to a client program, it adds no zero-padding or prefix to the error code (examples: 1036, 3013).
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/error-message-elements.html
// B_1_ERROR_MESSAGE_SOURCES_AND_ELEMENTS - END

// B_2_ERROR_INFORMATION_INTERFACES - BEGIN
// B.2 Error Information Interfaces
// 
// Error messages can originate on the server side or the client side, and each error message includes an error code, SQLSTATE value, and message string, as described in Section B.1, “Error Message Sources and Elements”. For lists of server-side, client-side, and global (shared between server and clients) errors, see MySQL 8.1 Error Message Reference.
// For error checking from within programs, use error code numbers or symbols, not error message strings. Message strings do not change often, but it is possible. Also, if the database administrator changes the language setting, that affects the language of message strings; see Section 10.12, “Setting the Error Message Language”.
// Error information in MySQL is available in the server error log, at the SQL level, from within client programs, and at the command line.
// * Error Log
// * SQL Error Message Interface
// * Client Error Message Interface
// * Command-Line Error Message Interface
// 
// Error Log
// On the server side, some messages are intended for the error log. For information about configuring where and how the server writes the log, see Section 5.4.2, “The Error Log”.
// Other server error messages are intended to be sent to client programs and are available as described in Client Error Message Interface.
// The range within which a particular error code lies determines whether the server writes an error message to the error log or sends it to clients. For information about these ranges, see Error Code Ranges.
// 
// SQL Error Message Interface
// At the SQL level, there are several sources of error information in MySQL:
// * SQL statement warning and error information is available through the SHOW WARNINGS and SHOW ERRORS statements. The warning_count system variable indicates the number of errors, warnings, and notes (with notes excluded if the sql_notes system variable is disabled). The error_count system variable indicates the number of errors. Its value excludes warnings and notes.
// * The GET DIAGNOSTICS statement may be used to inspect the diagnostic information in the diagnostics area. See Section 13.6.7.3, “GET DIAGNOSTICS Statement”.
// * SHOW REPLICA STATUS statement output includes information about replication errors occurring on replica servers.
// * SHOW ENGINE INNODB STATUS statement output includes information about the most recent foreign key error if a CREATE TABLE statement for an InnoDB table fails.
// 
// Client Error Message Interface
// Client programs receive errors from two sources:
// * Errors that originate on the client side from within the MySQL client library.
// * Errors that originate on the server side and are sent to the client by the server. These are received within the client library, which makes them available to the host client program.
// The range within which a particular error code lies determines whether it originated from within the client library or was received by the client from the server. For information about these ranges, see Error Code Ranges.
// Regardless of whether an error originates from within the client library or is received from the server, a MySQL client program obtains the error code, SQLSTATE value, message string, and other related information by calling C API functions in the client library:
// * mysql_errno() returns the MySQL error code.
// * mysql_sqlstate() returns the SQLSTATE value.
// * mysql_error() returns the message string.
// * mysql_stmt_errno(), mysql_stmt_sqlstate(), and mysql_stmt_error() are the corresponding error functions for prepared statements.
// * mysql_warning_count() returns the number of errors, warnings, and notes for the most recent statement.
// For descriptions of the client library error functions, see MySQL 8.1 C API Developer Guide.
// A MySQL client program may respond to an error in varying ways. The client may display the error message so the user can take corrective measures, internally attempt to resolve or retry a failed operation, or take other action. For example, (using the mysql client), a failure to connect to the server might result in this message:
// [code]
// $> mysql -h no-such-host
// ERROR 2005 (HY000): Unknown MySQL server host 'no-such-ho
// [/code]
// 
// Command-Line Error Message Interface
// The perror program provides information from the command line about error numbers. See Section 4.8.2, “perror - Display MySQL Error Message Information”.
// [code]
// $> perror 1231
// MySQL error code MY-001231 (ER_WRONG_VALUE_FOR_VAR): Variable '%-.64s'
// can't be set to the value of '%-.200s'
// [/code]
// For MySQL NDB Cluster errors, use ndb_perror. See Section 23.5.16, “ndb_perror - Obtain NDB Error Message Information”.
// [code]
// $> ndb_perror 323
// NDB error code 323: Invalid nodegroup id, nodegroup already existing:
// Permanent error: Application error
// [/code]
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/error-interfaces.html
// B_2_ERROR_INFORMATION_INTERFACES - END

// B_3_PROBLEMS_AND_COMMON_ERRORS - BEGIN
// B.3 Problems and Common Errors
// 
// B_3_1_HOW_TO_DETERMINE_WHAT_IS_CAUSING_A_PROBLEM
// B_3_2_COMMON_ERRORS_WHEN_USING_MYSQL_PROGRAMS
// B_3_3_ADMINISTRATION_RELATED_ISSUES
// B_3_4_QUERY_RELATED_ISSUES
// B_3_5_OPTIMIZER_RELATED_ISSUES
// B_3_6_TABLE_DEFINITION_RELATED_ISSUES
// B_3_7_KNOWN_ISSUES_IN_MYSQL
// 
// This section lists some common problems and error messages that you may encounter. It describes how to determine the causes of the problems and what to do to solve them.
// 
// B_3_1_HOW_TO_DETERMINE_WHAT_IS_CAUSING_A_PROBLEM - BEGIN
// B.3.1 How to Determine What Is Causing a Problem
// 
// When you run into a problem, the first thing you should do is to find out which program or piece of equipment is causing it:
// * If you have one of the following symptoms, then it is probably a hardware problems (such as memory, motherboard, CPU, or hard disk) or kernel problem:
//  * The keyboard does not work. This can normally be checked by pressing the Caps Lock key. If the Caps Lock light does not change, you have to replace your keyboard. (Before doing this, you should try to restart your computer and check all cables to the keyboard.)
//  * The mouse pointer does not move.
//  * The machine does not answer to a remote machine's pings.
//  * Other programs that are not related to MySQL do not behave correctly.
//  * Your system restarted unexpectedly. (A faulty user-level program should never be able to take down your system.)
// In this case, you should start by checking all your cables and run some diagnostic tool to check your hardware! You should also check whether there are any patches, updates, or service packs for your operating system that could likely solve your problem. Check also that all your libraries (such as glibc) are up to date.
// It is always good to use a machine with ECC memory to discover memory problems early.
// * If your keyboard is locked up, you may be able to recover by logging in to your machine from another machine and executing kbd_mode -a.
// * Please examine your system log file (/var/log/messages or similar) for reasons for your problem. If you think the problem is in MySQL, you should also examine MySQL's log files. See Section 5.4, “MySQL Server Logs”.
// * If you do not think you have hardware problems, you should try to find out which program is causing problems. Try using top, ps, Task Manager, or some similar program, to check which program is taking all CPU or is locking the machine.
// * Use top, df, or a similar program to check whether you are out of memory, disk space, file descriptors, or some other critical resource.
// * If the problem is some runaway process, you can always try to kill it. If it does not want to die, there is probably a bug in the operating system.
// If you have examined all other possibilities and concluded that the MySQL server or a MySQL client is causing the problem, it is time to create a bug report, see Section 1.5, “How to Report Bugs or Problems”. In the bug report, try to give a complete description of how the system is behaving and what you think is happening. Also state why you think that MySQL is causing the problem. Take into consideration all the situations described in this chapter. State any problems exactly how they appear when you examine your system. Use the “copy and paste” method for any output and error messages from programs and log files.
// Try to describe in detail which program is not working and all symptoms you see. We have in the past received many bug reports that state only “the system does not work.” This provides us with no information about what could be the problem.
// If a program fails, it is always useful to know the following information:
// * Has the program in question made a segmentation fault (did it dump core)?
// * Is the program taking up all available CPU time? Check with top. Let the program run for a while, it may simply be evaluating something computationally intensive.
// * If the mysqld server is causing problems, can you get any response from it with mysqladmin -u root ping or mysqladmin -u root processlist?
// * What does a client program say when you try to connect to the MySQL server? (Try with mysql, for example.) Does the client jam? Do you get any output from the program?
// When sending a bug report, you should follow the outline described in Section 1.5, “How to Report Bugs or Problems”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/what-is-crashing.html
// B_3_1_HOW_TO_DETERMINE_WHAT_IS_CAUSING_A_PROBLEM - END

// B_3_2_COMMON_ERRORS_WHEN_USING_MYSQL_PROGRAMS - BEGIN
// B.3.2 Common Errors When Using MySQL Programs
// 
// B_3_2_1_ACCESS_DENIED
// B_3_2_2_CANT_CONNECT_TO_LOCAL_MYSQL_SERVER
// B_3_2_3_LOST_CONNECTION_TO_MYSQL_SERVER
// B_3_2_4_PASSWORD_FAILS_WHEN_ENTERED_INTERACTIVELY
// B_3_2_5_TOO_MANY_CONNECTIONS
// B_3_2_6_OUT_OF_MEMORY
// B_3_2_7_MYSQL_SERVER_HAS_GONE_AWAY
// B_3_2_8_PACKET_TOO_LARGE
// B_3_2_9_COMMUNICATION_ERRORS_AND_ABORTED_CONNECTIONS
// B_3_2_10_THE_TABLE_IS_FULL
// B_3_2_11_CANT_CREATE_WRITE_TO_FILE
// B_3_2_12_COMMANDS_OUT_OF_SYNC
// B_3_2_13_IGNORING_USER
// B_3_2_14_TABLE_TBL_NAME_DOESNT_EXIST
// B_3_2_15_CANT_INITIALIZE_CHARACTER_SET
// B_3_2_16_FILE_NOT_FOUND_AND_SIMILAR_ERRORS
// B_3_2_17_TABLE_CORRUPTION_ISSUES
// 
// This section lists some errors that users frequently encounter when running MySQL programs. Although the problems show up when you try to run client programs, the solutions to many of the problems involves changing the configuration of the MySQL server.
// 
// B_3_2_1_ACCESS_DENIED - BEGIN
// B.3.2.1 Access denied
// 
// An Access denied error can have many causes. Often the problem is related to the MySQL accounts that the server permits client programs to use when connecting. See Section 6.2, “Access Control and Account Management”, and Section 6.2.22, “Troubleshooting Problems Connecting to MySQL”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/error-access-denied.html
// B_3_2_1_ACCESS_DENIED - END

// B_3_2_2_CANT_CONNECT_TO_LOCAL_MYSQL_SERVER - BEGIN
// B.3.2.2 Can't connect to [local] MySQL server
// 
// A MySQL client on Unix can connect to the mysqld server in two different ways: By using a Unix socket file to connect through a file in the file system (default /tmp/mysql.sock), or by using TCP/IP, which connects through a port number. A Unix socket file connection is faster than TCP/IP, but can be used only when connecting to a server on the same computer. A Unix socket file is used if you do not specify a host name or if you specify the special host name localhost.
// If the MySQL server is running on Windows, you can connect using TCP/IP. If the server is started with the named_pipe system variable enabled, you can also connect with named pipes if you run the client on the host where the server is running. The name of the named pipe is MySQL by default. If you do not give a host name when connecting to mysqld, a MySQL client first tries to connect to the named pipe. If that does not work, it connects to the TCP/IP port. You can force the use of named pipes on Windows by using . as the host name.
// The error (2002) Can't connect to ... normally means that there is no MySQL server running on the system or that you are using an incorrect Unix socket file name or TCP/IP port number when trying to connect to the server. You should also check that the TCP/IP port you are using has not been blocked by a firewall or port blocking service.
// The error (2003) Can't connect to MySQL server on 'server' (10061) indicates that the network connection has been refused. You should check that there is a MySQL server running, that it has network connections enabled, and that the network port you specified is the one configured on the server.
// Start by checking whether there is a process named mysqld running on your server host. (Use ps xa | grep mysqld on Unix or the Task Manager on Windows.) If there is no such process, you should start the server. See Section 2.9.2, “Starting the Server”.
// If a mysqld process is running, you can check it by trying the following commands. The port number or Unix socket file name might be different in your setup. host_ip represents the IP address of the machine where the server is running.
// [code]
// $> mysqladmin version
// $> mysqladmin variables
// $> mysqladmin -h `hostname` version variables
// $> mysqladmin -h `hostname` --port=3306 version
// $> mysqladmin -h host_ip version
// $> mysqladmin --protocol=SOCKET --socket=/tmp/mysql.sock version
// [/code]
// Note the use of backticks rather than forward quotation marks with the hostname command; these cause the output of hostname (that is, the current host name) to be substituted into the mysqladmin command. If you have no hostname command or are running on Windows, you can manually type the host name of your machine (without backticks) following the -h option. You can also try -h 127.0.0.1 to connect with TCP/IP to the local host.
// Make sure that the server has not been configured to ignore network connections or (if you are attempting to connect remotely) that it has not been configured to listen only locally on its network interfaces. If the server was started with the skip_networking system variable enabled, it cannot accept TCP/IP connections at all. If the server was started with the bind_address system variable set to 127.0.0.1, it listens for TCP/IP connections only locally on the loopback interface and does not accept remote connections.
// Check to make sure that there is no firewall blocking access to MySQL. Your firewall may be configured on the basis of the application being executed, or the port number used by MySQL for communication (3306 by default). Under Linux or Unix, check your IP tables (or similar) configuration to ensure that the port has not been blocked. Under Windows, applications such as ZoneAlarm or Windows Firewall may need to be configured not to block the MySQL port.
// Here are some reasons the Can't connect to local MySQL server error might occur:
// * mysqld is not running on the local host. Check your operating system's process list to ensure the mysqld process is present.
// * You're running a MySQL server on Windows with many TCP/IP connections to it. If you're experiencing that quite often your clients get that error, you can find a workaround here: Section B.3.2.2.1, “Connection to MySQL Server Failing on Windows”.
// * Someone has removed the Unix socket file that mysqld uses (/tmp/mysql.sock by default). For example, you might have a cron job that removes old files from the /tmp directory. You can always run mysqladmin version to check whether the Unix socket file that mysqladmin is trying to use really exists. The fix in this case is to change the cron job to not remove mysql.sock or to place the socket file somewhere else. See Section B.3.3.6, “How to Protect or Change the MySQL Unix Socket File”.
// * You have started the mysqld server with the --socket=/path/to/socket option, but forgotten to tell client programs the new name of the socket file. If you change the socket path name for the server, you must also notify the MySQL clients. You can do this by providing the same --socket option when you run client programs. You also need to ensure that clients have permission to access the mysql.sock file. To find out where the socket file is, you can do:
// [code]
// $> netstat -ln | grep mysql
// [/code]
//  See Section B.3.3.6, “How to Protect or Change the MySQL Unix Socket File”.
// * You are using Linux and one server thread has died (dumped core). In this case, you must kill the other mysqld threads (for example, with kill) before you can restart the MySQL server. See Section B.3.3.3, “What to Do If MySQL Keeps Crashing”.
// * The server or client program might not have the proper access privileges for the directory that holds the Unix socket file or the socket file itself. In this case, you must either change the access privileges for the directory or socket file so that the server and clients can access them, or restart mysqld with a --socket option that specifies a socket file name in a directory where the server can create it and where client programs can access it.
// If you get the error message Can't connect to MySQL server on some_host, you can try the following things to find out what the problem is:
// * Check whether the server is running on that host by executing telnet some_host 3306 and pressing the Enter key a couple of times. (3306 is the default MySQL port number. Change the value if your server is listening to a different port.) If there is a MySQL server running and listening to the port, you should get a response that includes the server's version number. If you get an error such as telnet: Unable to connect to remote host: Connection refused, then there is no server running on the given port.
// * If the server is running on the local host, try using mysqladmin -h localhost variables to connect using the Unix socket file. Verify the TCP/IP port number that the server is configured to listen to (it is the value of the port variable.)
// * If you are running under Linux and Security-Enhanced Linux (SELinux) is enabled, see Section 6.7, “SELinux”.
// 
// B.3.2.2.1 Connection to MySQL Server Failing on Windows
// When you're running a MySQL server on Windows with many TCP/IP connections to it, and you're experiencing that quite often your clients get a Can't connect to MySQL server error, the reason might be that Windows does not allow for enough ephemeral (short-lived) ports to serve those connections.
// The purpose of TIME_WAIT is to keep a connection accepting packets even after the connection has been closed. This is because Internet routing can cause a packet to take a slow route to its destination and it may arrive after both sides have agreed to close. If the port is in use for a new connection, that packet from the old connection could break the protocol or compromise personal information from the original connection. The TIME_WAIT delay prevents this by ensuring that the port cannot be reused until after some time has been permitted for those delayed packets to arrive.
// It is safe to reduce TIME_WAIT greatly on LAN connections because there is little chance of packets arriving at very long delays, as they could through the Internet with its comparatively large distances and latencies.
// Windows permits ephemeral (short-lived) TCP ports to the user. After any port is closed, it remains in a TIME_WAIT status for 120 seconds. The port is not available again until this time expires. The default range of port numbers depends on the version of Windows, with a more limited number of ports in older versions:
// * Windows through Server 2003: Ports in range 1025–5000
// * Windows Vista, Server 2008, and newer: Ports in range 49152–65535
// With a small stack of available TCP ports (5000) and a high number of TCP ports being open and closed over a short period of time along with the TIME_WAIT status you have a good chance for running out of ports. There are two ways to address this problem:
// * Reduce the number of TCP ports consumed quickly by investigating connection pooling or persistent connections where possible
// * Tune some settings in the Windows registry (see below)
//  Important
//  The following procedure involves modifying the Windows registry. Before you modify the registry, make sure to back it up and make sure that you understand how to restore it if a problem occurs. For information about how to back up, restore, and edit the registry, view the following article in the Microsoft Knowledge Base: http://support.microsoft.com/kb/256986/EN-US/.
//  1. Start Registry Editor (Regedt32.exe).
//  2. Locate the following key in the registry:
//  [code]
//  HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters
//  [/code]
//  3. On the Edit menu, click Add Value, and then add the following registry value:
//  [code]
//  Value Name: MaxUserPort
//  Data Type: REG_DWORD
//  Value: 65534
//  [/code]
//  This sets the number of ephemeral ports available to any user. The valid range is between 5000 and 65534 (decimal). The default value is 0x1388 (5000 decimal).
//  4. On the Edit menu, click Add Value, and then add the following registry value:
//  [code]
//  Value Name: TcpTimedWaitDelay
//  Data Type: REG_DWORD
//  Value: 30
//  [/code]
//  This sets the number of seconds to hold a TCP port connection in TIME_WAIT state before closing. The valid range is between 30 and 300 decimal, although you may wish to check with Microsoft for the latest permitted values. The default value is 0x78 (120 decimal).
//  5. Quit Registry Editor.
//  6. Reboot the machine.
// Note: Undoing the above should be as simple as deleting the registry entries you've created.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/can-not-connect-to-server.html
// B_3_2_2_CANT_CONNECT_TO_LOCAL_MYSQL_SERVER - END

// B_3_2_3_LOST_CONNECTION_TO_MYSQL_SERVER - BEGIN
// B.3.2.3 Lost connection to MySQL server
// 
// There are three likely causes for this error message.
// Usually it indicates network connectivity trouble and you should check the condition of your network if this error occurs frequently. If the error message includes “during query,” this is probably the case you are experiencing.
// Sometimes the “during query” form happens when millions of rows are being sent as part of one or more queries. If you know that this is happening, you should try increasing net_read_timeout from its default of 30 seconds to 60 seconds or longer, sufficient for the data transfer to complete.
// More rarely, it can happen when the client is attempting the initial connection to the server. In this case, if your connect_timeout value is set to only a few seconds, you may be able to resolve the problem by increasing it to ten seconds, perhaps more if you have a very long distance or slow connection. You can determine whether you are experiencing this more uncommon cause by using SHOW GLOBAL STATUS LIKE 'Aborted_connects'. It increases by one for each initial connection attempt that the server aborts. You may see “reading authorization packet” as part of the error message; if so, that also suggests that this is the solution that you need.
// If the cause is none of those just described, you may be experiencing a problem with BLOB values that are larger than max_allowed_packet, which can cause this error with some clients. Sometime you may see an ER_NET_PACKET_TOO_LARGE error, and that confirms that you need to increase max_allowed_packet.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/error-lost-connection.html
// B_3_2_3_LOST_CONNECTION_TO_MYSQL_SERVER - END

// B_3_2_4_PASSWORD_FAILS_WHEN_ENTERED_INTERACTIVELY - BEGIN
// B.3.2.4 Password Fails When Entered Interactively
// 
// MySQL client programs prompt for a password when invoked with a --password or -p option that has no following password value:
// [code]
// $> mysql -u user_name -p
// Enter password:
// [/code]
// On some systems, you may find that your password works when specified in an option file or on the command line, but not when you enter it interactively at the Enter password: prompt. This occurs when the library provided by the system to read passwords limits password values to a small number of characters (typically eight). That is a problem with the system library, not with MySQL. To work around it, change your MySQL password to a value that is eight or fewer characters long, or put your password in an option file.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/password-too-long.html
// B_3_2_4_PASSWORD_FAILS_WHEN_ENTERED_INTERACTIVELY - END

// B_3_2_5_TOO_MANY_CONNECTIONS - BEGIN
// B.3.2.5 Too many connections
// 
// If clients encounter Too many connections errors when attempting to connect to the mysqld server, all available connections are in use by other clients.
// The permitted number of connections is controlled by the max_connections system variable. To support more connections, set max_connections to a larger value.
// mysqld actually permits max_connections + 1 client connections. The extra connection is reserved for use by accounts that have the CONNECTION_ADMIN privilege (or the deprecated SUPER privilege). By granting the privilege to administrators and not to normal users (who should not need it), an administrator can connect to the server and use SHOW PROCESSLIST to diagnose problems even if the maximum number of unprivileged clients are connected. See Section 13.7.7.30, “SHOW PROCESSLIST Statement”.
// The server also permits administrative connections on a dedicated interface. For more information about how the server handles client connections, see Section 5.1.12.1, “Connection Interfaces”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/too-many-connections.html
// B_3_2_5_TOO_MANY_CONNECTIONS - END

// B_3_2_6_OUT_OF_MEMORY - BEGIN
// B.3.2.6 Out of memory
// 
// If you issue a query using the mysql client program and receive an error like the following one, it means that mysql does not have enough memory to store the entire query result:
// [code]
// mysql: Out of memory at line 42, 'malloc.c'
// mysql: needed 8136 byte (8k), memory in use: 12481367 bytes (12189k)
// ERROR 2008: MySQL client ran out of memory
// [/code]
// To remedy the problem, first check whether your query is correct. Is it reasonable that it should return so many rows? If not, correct the query and try again. Otherwise, you can invoke mysql with the --quick option. This causes it to use the mysql_use_result() C API function to retrieve the result set, which places less of a load on the client (but more on the server).
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/out-of-memory.html
// B_3_2_6_OUT_OF_MEMORY - END

// B_3_2_7_MYSQL_SERVER_HAS_GONE_AWAY - BEGIN
// B.3.2.7 MySQL server has gone away
// 
// This section also covers the related Lost connection to server during query error.
// The most common reason for the MySQL server has gone away error is that the server timed out and closed the connection. In this case, you normally get one of the following error codes (which one you get is operating system-dependent).
// Error Code           | Description
// CR_SERVER_GONE_ERROR | The client couldn't send a question to the server.
// CR_SERVER_LOST       | The client didn't get an error when writing to the server, but it didn't get a full answer (or any answer) to the question.
// By default, the server closes the connection after eight hours if nothing has happened. You can change the time limit by setting the wait_timeout variable when you start mysqld. See Section 5.1.8, “Server System Variables”.
// If you have a script, you just have to issue the query again for the client to do an automatic reconnection. This assumes that you have automatic reconnection in the client enabled (which is the default for the mysql command-line client).
// Some other common reasons for the MySQL server has gone away error are:
// * You (or the db administrator) has killed the running thread with a KILL statement or a mysqladmin kill command.
// * You tried to run a query after closing the connection to the server. This indicates a logic error in the application that should be corrected.
// * A client application running on a different host does not have the necessary privileges to connect to the MySQL server from that host.
// * You got a timeout from the TCP/IP connection on the client side. This may happen if you have been using the commands: mysql_options(..., MYSQL_OPT_READ_TIMEOUT,...) or mysql_options(..., MYSQL_OPT_WRITE_TIMEOUT,...). In this case increasing the timeout may help solve the problem.
// * You have encountered a timeout on the server side and the automatic reconnection in the client is disabled (the reconnect flag in the MYSQL structure is equal to 0).
// You are using a Windows client and the server had dropped the connection (probably because wait_timeout expired) before the command was issued.
// The problem on Windows is that in some cases MySQL does not get an error from the OS when writing to the TCP/IP connection to the server, but instead gets the error when trying to read the answer from the connection.
// The solution to this is to either do a mysql_ping() on the connection if there has been a long time since the last query (this is what Connector/ODBC does) or set wait_timeout on the mysqld server so high that it in practice never times out.
// * You can also get these errors if you send a query to the server that is incorrect or too large. If mysqld receives a packet that is too large or out of order, it assumes that something has gone wrong with the client and closes the connection. If you need big queries (for example, if you are working with big BLOB columns), you can increase the query limit by setting the server's max_allowed_packet variable, which has a default value of 64MB. You may also need to increase the maximum packet size on the client end. More information on setting the packet size is given in Section B.3.2.8, “Packet Too Large”.
// An INSERT or REPLACE statement that inserts a great many rows can also cause these sorts of errors. Either one of these statements sends a single request to the server irrespective of the number of rows to be inserted; thus, you can often avoid the error by reducing the number of rows sent per INSERT or REPLACE.
// * It is also possible to see this error if host name lookups fail (for example, if the DNS server on which your server or network relies goes down). This is because MySQL is dependent on the host system for name resolution, but has no way of knowing whether it is working—from MySQL's point of view the problem is indistinguishable from any other network timeout.
// You may also see the MySQL server has gone away error if MySQL is started with the skip_networking system variable enabled.
// Another networking issue that can cause this error occurs if the MySQL port (default 3306) is blocked by your firewall, thus preventing any connections at all to the MySQL server.
// * You can also encounter this error with applications that fork child processes, all of which try to use the same connection to the MySQL server. This can be avoided by using a separate connection for each child process.
// * You have encountered a bug where the server died while executing the query.
// You can check whether the MySQL server died and restarted by executing mysqladmin version and examining the server's uptime. If the client connection was broken because mysqld crashed and restarted, you should concentrate on finding the reason for the crash. Start by checking whether issuing the query again kills the server again. See Section B.3.3.3, “What to Do If MySQL Keeps Crashing”.
// You can obtain more information about lost connections by starting mysqld with the log_error_verbosity system variable set to 3. This logs some of the disconnection messages in the hostname.err file. See Section 5.4.2, “The Error Log”.
// If you want to create a bug report regarding this problem, be sure that you include the following information:
// * Indicate whether the MySQL server died. You can find information about this in the server error log. See Section B.3.3.3, “What to Do If MySQL Keeps Crashing”.
// * If a specific query kills mysqld and the tables involved were checked with CHECK TABLE before you ran the query, can you provide a reproducible test case? See Section 5.9, “Debugging MySQL”.
// * What is the value of the wait_timeout system variable in the MySQL server? (mysqladmin variables gives you the value of this variable.)
// * Have you tried to run mysqld with the general query log enabled to determine whether the problem query appears in the log? (See Section 5.4.3, “The General Query Log”.)
// See also Section B.3.2.9, “Communication Errors and Aborted Connections”, and Section 1.5, “How to Report Bugs or Problems”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/gone-away.html
// B_3_2_7_MYSQL_SERVER_HAS_GONE_AWAY - END

// B_3_2_8_PACKET_TOO_LARGE - BEGIN
// B.3.2.8 Packet Too Large
// 
// A communication packet is a single SQL statement sent to the MySQL server, a single row that is sent to the client, or a binary log event sent from a replication source server to a replica.
// The largest possible packet that can be transmitted to or from a MySQL 8.1 server or client is 1GB.
// When a MySQL client or the mysqld server receives a packet bigger than max_allowed_packet bytes, it issues an ER_NET_PACKET_TOO_LARGE error and closes the connection. With some clients, you may also get a Lost connection to MySQL server during query error if the communication packet is too large.
// Both the client and the server have their own max_allowed_packet variable, so if you want to handle big packets, you must increase this variable both in the client and in the server.
// If you are using the mysql client program, its default max_allowed_packet variable is 16MB. To set a larger value, start mysql like this:
// [code]
// $> mysql --max_allowed_packet=32M
// [/code]
// That sets the packet size to 32MB.
// The server's default max_allowed_packet value is 64MB. You can increase this if the server needs to handle big queries (for example, if you are working with big BLOB columns). For example, to set the variable to 128MB, start the server like this:
// [code]
// $> mysqld --max_allowed_packet=128M
// [/code]
// You can also use an option file to set max_allowed_packet. For example, to set the size for the server to 128MB, add the following lines in an option file:
// [code]
// [mysqld]
// max_allowed_packet=128M
// [/code]
// It is safe to increase the value of this variable because the extra memory is allocated only when needed. For example, mysqld allocates more memory only when you issue a long query or when mysqld must return a large result row. The small default value of the variable is a precaution to catch incorrect packets between the client and server and also to ensure that you do not run out of memory by using large packets accidentally.
// You can also get strange problems with large packets if you are using large BLOB values but have not given mysqld access to enough memory to handle the query. If you suspect this is the case, try adding ulimit -d 256000 to the beginning of the mysqld_safe script and restarting mysqld.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/packet-too-large.html
// B_3_2_8_PACKET_TOO_LARGE - END

// B_3_2_9_COMMUNICATION_ERRORS_AND_ABORTED_CONNECTIONS - BEGIN
// B.3.2.9 Communication Errors and Aborted Connections
// 
// If connection problems occur such as communication errors or aborted connections, use these sources of information to diagnose problems:
// * The error log. See Section 5.4.2, “The Error Log”.
// * The general query log. See Section 5.4.3, “The General Query Log”.
// * The Aborted_xxx and Connection_errors_xxx status variables. See Section 5.1.10, “Server Status Variables”.
// * The host cache, which is accessible using the Performance Schema host_cache table. See Section 5.1.12.3, “DNS Lookups and the Host Cache”, and Section 27.12.21.3, “The host_cache Table”.
// If the log_error_verbosity system variable is set to 3, you might find messages like this in your error log:
// [result]
// [Note] Aborted connection 854 to db: 'employees' user: 'josh'
// [/result]
// If a client is unable even to connect, the server increments the Aborted_connects status variable. Unsuccessful connection attempts can occur for the following reasons:
// * A client attempts to access a database but has no privileges for it.
// * A client uses an incorrect password.
// * A connection packet does not contain the right information.
// * It takes more than connect_timeout seconds to obtain a connect packet. See Section 5.1.8, “Server System Variables”.
// If these kinds of things happen, it might indicate that someone is trying to break into your server! If the general query log is enabled, messages for these types of problems are logged to it.
// If a client successfully connects but later disconnects improperly or is terminated, the server increments the Aborted_clients status variable, and logs an Aborted connection message to the error log. The cause can be any of the following:
// * The client program did not call mysql_close() before exiting.
// * The client had been sleeping more than wait_timeout or interactive_timeout seconds without issuing any requests to the server. See Section 5.1.8, “Server System Variables”.
// * The client program ended abruptly in the middle of a data transfer.
// Other reasons for problems with aborted connections or aborted clients:
// * The max_allowed_packet variable value is too small or queries require more memory than you have allocated for mysqld. See Section B.3.2.8, “Packet Too Large”.
// * Use of Ethernet protocol with Linux, both half and full duplex. Some Linux Ethernet drivers have this bug. You should test for this bug by transferring a huge file using FTP between the client and server machines. If a transfer goes in burst-pause-burst-pause mode, you are experiencing a Linux duplex syndrome. Switch the duplex mode for both your network card and hub/switch to either full duplex or to half duplex and test the results to determine the best setting.
// * A problem with the thread library that causes interrupts on reads.
// * Badly configured TCP/IP.
// * Faulty Ethernets, hubs, switches, cables, and so forth. This can be diagnosed properly only by replacing hardware.
// See also Section B.3.2.7, “MySQL server has gone away”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/communication-errors.html
// B_3_2_9_COMMUNICATION_ERRORS_AND_ABORTED_CONNECTIONS - END

// B_3_2_10_THE_TABLE_IS_FULL - BEGIN
// B.3.2.10 The table is full
// 
// If a table-full error occurs, it may be that the disk is full or that the table has reached its maximum size. The effective maximum table size for MySQL databases is usually determined by operating system constraints on file sizes, not by MySQL internal limits. See Section 8.4.6, “Limits on Table Size”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/full-table.html
// B_3_2_10_THE_TABLE_IS_FULL - END

// B_3_2_11_CANT_CREATE_WRITE_TO_FILE - BEGIN
// B.3.2.11 Can't create/write to file
// 
// If you get an error of the following type for some queries, it means that MySQL cannot create a temporary file for the result set in the temporary directory:
// [result]
// Can't create/write to file '\\sqla3fe_0.ism'.
// [/result]
// The preceding error is a typical message for Windows; the Unix message is similar.
// One fix is to start mysqld with the --tmpdir option or to add the option to the [mysqld] section of your option file. For example, to specify a directory of C:\temp, use these lines:
// [code]
// [mysqld]
// tmpdir=C:/temp
// [/code]
// The C:\temp directory must exist and have sufficient space for the MySQL server to write to. See Section 4.2.2.2, “Using Option Files”.
// Another cause of this error can be permissions issues. Make sure that the MySQL server can write to the tmpdir directory.
// Check also the error code that you get with perror. One reason the server cannot write to a table is that the file system is full:
// [code]
// $> perror 28
// OS error code  28:  No space left on device
// [/code]
// If you get an error of the following type during startup, it indicates that the file system or directory used for storing data files is write protected. Provided that the write error is to a test file, the error is not serious and can be safely ignored.
// [result]
// Can't create test file /usr/local/mysql/data/master.lower-test
// [/result]
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/cannot-create.html
// B_3_2_11_CANT_CREATE_WRITE_TO_FILE - END

// B_3_2_12_COMMANDS_OUT_OF_SYNC - BEGIN
// B.3.2.12 Commands out of sync
// 
// If you get Commands out of sync; you can't run this command now in your client code, you are calling client functions in the wrong order.
// This can happen, for example, if you are using mysql_use_result() and try to execute a new query before you have called mysql_free_result(). It can also happen if you try to execute two queries that return data without calling mysql_use_result() or mysql_store_result() in between.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/commands-out-of-sync.html
// B_3_2_12_COMMANDS_OUT_OF_SYNC - END

// B_3_2_13_IGNORING_USER - BEGIN
// B.3.2.13 Ignoring user
// 
// If you get the following error, it means that when mysqld was started or when it reloaded the grant tables, it found an account in the user table that had an invalid password.
// [result]
// Found wrong password for user 'some_user'@'some_host'; ignoring user
// [/result]
// As a result, the account is simply ignored by the permission system. To fix this problem, assign a new, valid password to the account.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/ignoring-user.html
// B_3_2_13_IGNORING_USER - END

// B_3_2_14_TABLE_TBL_NAME_DOESNT_EXIST - BEGIN
// B.3.2.14 Table 'tbl_name' doesn't exist
// 
// If you get either of the following errors, it usually means that no table exists in the default database with the given name:
// [result]
// Table 'tbl_name' doesn't exist
// Can't find file: 'tbl_name' (errno: 2)
// [/result]
// In some cases, it may be that the table does exist but that you are referring to it incorrectly:
// * Because MySQL uses directories and files to store databases and tables, database and table names are case-sensitive if they are located on a file system that has case-sensitive file names.
// * Even for file systems that are not case-sensitive, such as on Windows, all references to a given table within a query must use the same lettercase.
// You can check which tables are in the default database with SHOW TABLES. See Section 13.7.7, “SHOW Statements”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/cannot-find-table.html
// B_3_2_14_TABLE_TBL_NAME_DOESNT_EXIST - END

// B_3_2_15_CANT_INITIALIZE_CHARACTER_SET - BEGIN
// B.3.2.15 Can't initialize character set
// 
// You might see an error like this if you have character set problems:
// [result]
// MySQL Connection Failed: Can't initialize character set charset_name
// [/result]
// This error can have any of the following causes:
// * The character set is a multibyte character set and you have no support for the character set in the client. In this case, you need to recompile the client by running CMake with the -DDEFAULT_CHARSET=charset_name option. See Section 2.8.7, “MySQL Source-Configuration Options”.
// All standard MySQL binaries are compiled with support for all multibyte character sets.
// * The character set is a simple character set that is not compiled into mysqld, and the character set definition files are not in the place where the client expects to find them.
// In this case, you need to use one of the following methods to solve the problem:
//  * Recompile the client with support for the character set. See Section 2.8.7, “MySQL Source-Configuration Options”.
//  * Specify to the client the directory where the character set definition files are located. For many clients, you can do this with the --character-sets-dir option.
//  * Copy the character definition files to the path where the client expects them to be.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/cannot-initialize-character-set.html
// B_3_2_15_CANT_INITIALIZE_CHARACTER_SET - END

// B_3_2_16_FILE_NOT_FOUND_AND_SIMILAR_ERRORS - BEGIN
// B.3.2.16 File Not Found and Similar Errors
// 
// If you get ERROR 'file_name' not found (errno: 23), Can't open file: file_name (errno: 24), or any other error with errno 23 or errno 24 from MySQL, it means that you have not allocated enough file descriptors for the MySQL server. You can use the perror utility to get a description of what the error number means:
// [result]
// $> perror 23
// OS error code  23:  File table overflow
// $> perror 24
// OS error code  24:  Too many open files
// $> perror 11
// OS error code  11:  Resource temporarily unavailable
// [/result]
// The problem here is that mysqld is trying to keep open too many files simultaneously. You can either tell mysqld not to open so many files at once or increase the number of file descriptors available to mysqld.
// To tell mysqld to keep open fewer files at a time, you can make the table cache smaller by reducing the value of the table_open_cache system variable (the default value is 64). This may not entirely prevent running out of file descriptors because in some circumstances the server may attempt to extend the cache size temporarily, as described in Section 8.4.3.1, “How MySQL Opens and Closes Tables”. Reducing the value of max_connections also reduces the number of open files (the default value is 100).
// To change the number of file descriptors available to mysqld, you can use the --open-files-limit option to mysqld_safe or set the open_files_limit system variable. See Section 5.1.8, “Server System Variables”. The easiest way to set these values is to add an option to your option file. See Section 4.2.2.2, “Using Option Files”. If you have an old version of mysqld that does not support setting the open files limit, you can edit the mysqld_safe script. There is a commented-out line ulimit -n 256 in the script. You can remove the # character to uncomment this line, and change the number 256 to set the number of file descriptors to be made available to mysqld.
// --open-files-limit and ulimit can increase the number of file descriptors, but only up to the limit imposed by the operating system. There is also a “hard” limit that can be overridden only if you start mysqld_safe or mysqld as root (just remember that you also need to start the server with the --user option in this case so that it does not continue to run as root after it starts up). If you need to increase the operating system limit on the number of file descriptors available to each process, consult the documentation for your system.
// Note: If you run the tcsh shell, ulimit does not work! tcsh also reports incorrect values when you ask for the current limits. In this case, you should start mysqld_safe using sh.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/not-enough-file-handles.html
// B_3_2_16_FILE_NOT_FOUND_AND_SIMILAR_ERRORS - END

// B_3_2_17_TABLE_CORRUPTION_ISSUES - BEGIN
// B.3.2.17 Table-Corruption Issues
// 
// If you have started mysqld with the myisam_recover_options system variable set, MySQL automatically checks and tries to repair MyISAM tables if they are marked as 'not closed properly' or 'crashed'. If this happens, MySQL writes an entry in the hostname.err file 'Warning: Checking table ...' which is followed by Warning: Repairing table if the table needs to be repaired. If you get a lot of these errors, without mysqld having died unexpectedly just before, then something is wrong and needs to be investigated further.
// When the server detects MyISAM table corruption, it writes additional information to the error log, such as the name and line number of the source file, and the list of threads accessing the table. Example: Got an error from thread_id=1, mi_dynrec.c:368. This is useful information to include in bug reports.
// See also Section 5.1.7, “Server Command Options”, and Section 5.9.1.7, “Making a Test Case If You Experience Table Corruption”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/table-corruption.html
// B_3_2_17_TABLE_CORRUPTION_ISSUES - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/common-errors.html
// B_3_2_COMMON_ERRORS_WHEN_USING_MYSQL_PROGRAMS - END
// 
// B_3_3_ADMINISTRATION_RELATED_ISSUES - BEGIN
// B.3.3 Administration-Related Issues
// 
// B_3_3_1_PROBLEMS_WITH_FILE_PERMISSIONS
// B_3_3_2_HOW_TO_RESET_THE_ROOT_PASSWORD
// B_3_3_3_WHAT_TO_DO_IF_MYSQL_KEEPS_CRASHING
// B_3_3_4_HOW_MYSQL_HANDLES_A_FULL_DISK
// B_3_3_5_WHERE_MYSQL_STORES_TEMPORARY_FILES
// B_3_3_6_HOW_TO_PROTECT_OR_CHANGE_THE_MYSQL_UNIX_SOCKET_FILE
// B_3_3_7_TIME_ZONE_PROBLEMS
// 
// B_3_3_1_PROBLEMS_WITH_FILE_PERMISSIONS - BEGIN
// B.3.3.1 Problems with File Permissions
// 
// If you have problems with file permissions, the UMASK or UMASK_DIR environment variable might be set incorrectly when mysqld starts. For example, mysqld might issue the following error message when you create a table:
// [result]
// ERROR: Can't find file: 'path/with/file_name' (Errcode: 13)
// [/result]
// The default UMASK and UMASK_DIR values are 0640 and 0750, respectively. mysqld assumes that the value for UMASK or UMASK_DIR is in octal if it starts with a zero. For example, setting UMASK=0600 is equivalent to UMASK=384 because 0600 octal is 384 decimal.
// Assuming that you start mysqld using mysqld_safe, change the default UMASK value as follows:
// [code]
// UMASK=384  # = 600 in octal
// export UMASK
// mysqld_safe &
// [/code]
// Note: An exception applies for the error log file if you start mysqld using mysqld_safe, which does not respect UMASK: mysqld_safe may create the error log file if it does not exist prior to starting mysqld, and mysqld_safe uses a umask set to a strict value of 0137. If this is unsuitable, create the error file manually with the desired access mode prior to executing mysqld_safe.
// By default, mysqld creates database directories with an access permission value of 0750. To modify this behavior, set the UMASK_DIR variable. If you set its value, new directories are created with the combined UMASK and UMASK_DIR values. For example, to give group access to all new directories, start mysqld_safe as follows:
// [code]
// UMASK_DIR=504  # = 770 in octal
// export UMASK_DIR
// mysqld_safe &
// [/code]
// For additional details, see Section 4.9, “Environment Variables”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/file-permissions.html
// B_3_3_1_PROBLEMS_WITH_FILE_PERMISSIONS - END

// B_3_3_2_HOW_TO_RESET_THE_ROOT_PASSWORD - BEGIN
// B.3.3.2 How to Reset the Root Password
// 
// If you have never assigned a root password for MySQL, the server does not require a password at all for connecting as root. However, this is insecure. For instructions on assigning a password, see Section 2.9.4, “Securing the Initial MySQL Account”.
// If you know the root password and want to change it, see Section 13.7.1.1, “ALTER USER Statement”, and Section 13.7.1.10, “SET PASSWORD Statement”.
// If you assigned a root password previously but have forgotten it, you can assign a new password. The following sections provide instructions for Windows and Unix and Unix-like systems, as well as generic instructions that apply to any system.
// 
// B.3.3.2.1 Resetting the Root Password: Windows Systems
// On Windows, use the following procedure to reset the password for the MySQL 'root'@'localhost' account. To change the password for a root account with a different host name part, modify the instructions to use that host name.
//  1. Log on to your system as Administrator.
//  2. Stop the MySQL server if it is running. For a server that is running as a Windows service, go to the Services manager: From the Start menu, select Control Panel, then Administrative Tools, then Services. Find the MySQL service in the list and stop it.
//  If your server is not running as a service, you may need to use the Task Manager to force it to stop.
//  3. Create a text file containing the password-assignment statement on a single line. Replace the password with the password that you want to use.
//  [code]
//  ALTER USER 'root'@'localhost' IDENTIFIED BY 'MyNewPass';
//  [/code]
//  4. Save the file. This example assumes that you name the file C:\mysql-init.txt.
//  5. Open a console window to get to the command prompt: From the Start menu, select Run, then enter cmd as the command to be run.
//  6. Start the MySQL server with the init_file system variable set to name the file (notice that the backslash in the option value is doubled):
//  [code]
//  C:\> cd "C:\Program Files\MySQL\MySQL Server 8.1\bin"
//  C:\> mysqld --init-file=C:\\mysql-init.txt
//  [/code]
//  If you installed MySQL to a different location, adjust the cd command accordingly.
//  The server executes the contents of the file named by the init_file system variable at startup, changing the 'root'@'localhost' account password.
//  To have server output to appear in the console window rather than in a log file, add the --console option to the mysqld command.
//  If you installed MySQL using the MySQL Installation Wizard, you may need to specify a --defaults-file option. For example:
//  [code]
//  C:\> mysqld
//  --defaults-file="C:\\ProgramData\\MySQL\\MySQL Server 8.1\\my.ini"
//  --init-file=C:\\mysql-init.txt
//  [/code]
//  The appropriate --defaults-file setting can be found using the Services Manager: From the Start menu, select Control Panel, then Administrative Tools, then Services. Find the MySQL service in the list, right-click it, and choose the Properties option. The Path to executable field contains the --defaults-file setting.
//  7. After the server has started successfully, delete C:\mysql-init.txt.
// You should now be able to connect to the MySQL server as root using the new password. Stop the MySQL server and restart it normally. If you run the server as a service, start it from the Windows Services window. If you start the server manually, use whatever command you normally use.
// 
// B.3.3.2.2 Resetting the Root Password: Unix and Unix-Like Systems
// On Unix, use the following procedure to reset the password for the MySQL 'root'@'localhost' account. To change the password for a root account with a different host name part, modify the instructions to use that host name.
// The instructions assume that you start the MySQL server from the Unix login account that you normally use for running it. For example, if you run the server using the mysql login account, you should log in as mysql before using the instructions. Alternatively, you can log in as root, but in this case you must start mysqld with the --user=mysql option. If you start the server as root without using --user=mysql, the server may create root-owned files in the data directory, such as log files, and these may cause permission-related problems for future server startups. If that happens, you must either change the ownership of the files to mysql or remove them.
//  1. Log on to your system as the Unix user that the MySQL server runs as (for example, mysql).
//  2. Stop the MySQL server if it is running. Locate the .pid file that contains the server's process ID. The exact location and name of this file depend on your distribution, host name, and configuration. Common locations are /var/lib/mysql/, /var/run/mysqld/, and /usr/local/mysql/data/. Generally, the file name has an extension of .pid and begins with either mysqld or your system's host name.
//  Stop the MySQL server by sending a normal kill (not kill -9) to the mysqld process. Use the actual path name of the .pid file in the following command:
//  [code]
//  $> kill `cat /mysql-data-directory/host_name.pid`
//  [/code]
//  Use backticks (not forward quotation marks) with the cat command. These cause the output of cat to be substituted into the kill command.
//  3. Create a text file containing the password-assignment statement on a single line. Replace the password with the password that you want to use.
//  [code]
//  ALTER USER 'root'@'localhost' IDENTIFIED BY 'MyNewPas
//  [/code]
//  4. Save the file. This example assumes that you name the file /home/me/mysql-init. The file contains the password, so do not save it where it can be read by other users. If you are not logged in as mysql (the user the server runs as), make sure that the file has permissions that permit mysql to read it.
//  5. Start the MySQL server with the init_file system variable set to name the file:
//  [code]
//  $> mysqld --init-file=/home/me/mysql-init &
//  [/code]
//  The server executes the contents of the file named by the init_file system variable at startup, changing the 'root'@'localhost' account password.
//  Other options may be necessary as well, depending on how you normally start your server. For example, --defaults-file may be needed before the init_file argument.
//  6. After the server has started successfully, delete /home/me/mysql-init.
// You should now be able to connect to the MySQL server as root using the new password. Stop the server and restart it normally.
// 
// B.3.3.2.3 Resetting the Root Password: Generic Instructions
// The preceding sections provide password-resetting instructions specifically for Windows and Unix and Unix-like systems. Alternatively, on any platform, you can reset the password using the mysql client (but this approach is less secure):
//  1. Stop the MySQL server if necessary, then restart it with the --skip-grant-tables option. This enables anyone to connect without a password and with all privileges, and disables account-management statements such as ALTER USER and SET PASSWORD. Because this is insecure, if the server is started with the --skip-grant-tables option, it also disables remote connections by enabling skip_networking.
//  2. Connect to the MySQL server using the mysql client; no password is necessary because the server was started with --skip-grant-tables:
//  [code]
//  $> mysql
//  [/code]
//  3. In the mysql client, tell the server to reload the grant tables so that account-management statements work:
//  [code]
//  mysql> FLUSH PRIVILEGES;
//  [/code]
//  Then change the 'root'@'localhost' account password. Replace the password with the password that you want to use. To change the password for a root account with a different host name part, modify the instructions to use that host name.
//  [code]
//  mysql> ALTER USER 'root'@'localhost' IDENTIFIED BY 'MyNewPass';
//  [/code]
// You should now be able to connect to the MySQL server as root using the new password. Stop the server and restart it normally (without the --skip-grant-tables option and without enabling the skip_networking system variable).
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/resetting-permissions.html
// B_3_3_2_HOW_TO_RESET_THE_ROOT_PASSWORD - END

// B_3_3_3_WHAT_TO_DO_IF_MYSQL_KEEPS_CRASHING - BEGIN
// B.3.3.3 What to Do If MySQL Keeps Crashing
// 
// Each MySQL version is tested on many platforms before it is released. This does not mean that there are no bugs in MySQL, but if there are bugs, they should be very few and can be hard to find. If you have a problem, it always helps if you try to find out exactly what crashes your system, because you have a much better chance of getting the problem fixed quickly.
// First, you should try to find out whether the problem is that the mysqld server dies or whether your problem has to do with your client. You can check how long your mysqld server has been up by executing mysqladmin version. If mysqld has died and restarted, you may find the reason by looking in the server's error log. See Section 5.4.2, “The Error Log”.
// On some systems, you can find in the error log a stack trace of where mysqld died. Note that the variable values written in the error log may not always be 100% correct.
// If you find that mysqld fails at startup during InnoDB recovery, refer to Section 15.21.2, “Troubleshooting Recovery Failures”.
// Many unexpected server exits are caused by corrupted data files or index files. MySQL updates the files on disk with the write() system call after every SQL statement and before the client is notified about the result. (This is not true if you are running with the delay_key_write system variable enabled, in which case data files are written but not index files.) This means that data file contents are safe even if mysqld crashes, because the operating system ensures that the unflushed data is written to disk. You can force MySQL to flush everything to disk after every SQL statement by starting mysqld with the --flush option.
// The preceding means that normally you should not get corrupted tables unless one of the following happens:
// * The MySQL server or the server host was killed in the middle of an update.
// * You have found a bug in mysqld that caused it to die in the middle of an update.
// * Some external program is manipulating data files or index files at the same time as mysqld without locking the table properly.
// * You are running many mysqld servers using the same data directory on a system that does not support good file system locks (normally handled by the lockd lock manager), or you are running multiple servers with external locking disabled.
// * You have a crashed data file or index file that contains very corrupt data that confused mysqld.
// * You have found a bug in the data storage code. This isn't likely, but it is at least possible. In this case, you can try to change the storage engine to another engine by using ALTER TABLE on a repaired copy of the table.
// Because it is very difficult to know why something is crashing, first try to check whether things that work for others result in an unexpected exit for you. Try the following things:
// * Stop the mysqld server with mysqladmin shutdown, run myisamchk --silent --force */*.MYI from the data directory to check all MyISAM tables, and restart mysqld. This ensures that you are running from a clean state. See Chapter 5, MySQL Server Administration.
// * Start mysqld with the general query log enabled (see Section 5.4.3, “The General Query Log”). Then try to determine from the information written to the log whether some specific query kills the server. About 95% of all bugs are related to a particular query. Normally, this is one of the last queries in the log file just before the server restarts. See Section 5.4.3, “The General Query Log”. If you can repeatedly kill MySQL with a specific query, even when you have checked all tables just before issuing it, then you have isolated the bug and should submit a bug report for it. See Section 1.5, “How to Report Bugs or Problems”.
// * Try to make a test case that we can use to repeat the problem. See Section 5.9, “Debugging MySQL”.
// * Try the fork_big.pl script. (It is located in the tests directory of source distributions.)
// * Configuring MySQL for debugging makes it much easier to gather information about possible errors if something goes wrong. Reconfigure MySQL with the -DWITH_DEBUG=1 option to CMake and then recompile. See Section 5.9, “Debugging MySQL”.
// * Make sure that you have applied the latest patches for your operating system.
// * Use the --skip-external-locking option to mysqld. On some systems, the lockd lock manager does not work properly; the --skip-external-locking option tells mysqld not to use external locking. (This means that you cannot run two mysqld servers on the same data directory and that you must be careful if you use myisamchk. Nevertheless, it may be instructive to try the option as a test.)
// * If mysqld appears to be running but not responding, try mysqladmin -u root processlist. Sometimes mysqld is not hung even though it seems unresponsive. The problem may be that all connections are in use, or there may be some internal lock problem. mysqladmin -u root processlist usually is able to make a connection even in these cases, and can provide useful information about the current number of connections and their status.
// * Run the command mysqladmin -i 5 status or mysqladmin -i 5 -r status in a separate window to produce statistics while running other queries.
// * Try the following:
//  a. Start mysqld from gdb (or another debugger). See Section 5.9, “Debugging MySQL”.
//  b. Run your test scripts.
//  c. Print the backtrace and the local variables at the three lowest levels. In gdb, you can do this with the following commands when mysqld has crashed inside gdb:
//   [code]
//   backtrace
//   info local
//   up
//   info local
//   up
//   info local
//   [/code]
//   With gdb, you can also examine which threads exist with info threads and switch to a specific thread with thread N, where N is the thread ID.
//  * Try to simulate your application with a Perl script to force MySQL to exit or misbehave.
//  * Send a normal bug report. See Section 1.5, “How to Report Bugs or Problems”. Be even more detailed than usual. Because MySQL works for many people, the crash might result from something that exists only on your computer (for example, an error that is related to your particular system libraries).
//  * If you have a problem with tables containing dynamic-length rows and you are using only VARCHAR columns (not BLOB or TEXT columns), you can try to change all VARCHAR to CHAR with ALTER TABLE. This forces MySQL to use fixed-size rows. Fixed-size rows take a little extra space, but are much more tolerant to corruption.
//  The current dynamic row code has been in use for several years with very few problems, but dynamic-length rows are by nature more prone to errors, so it may be a good idea to try this strategy to see whether it helps.
//  * Consider the possibility of hardware faults when diagnosing problems. Defective hardware can be the cause of data corruption. Pay particular attention to your memory and disk subsystems when troubleshooting hardware.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/crashing.html
// B_3_3_3_WHAT_TO_DO_IF_MYSQL_KEEPS_CRASHING - END

// B_3_3_4_HOW_MYSQL_HANDLES_A_FULL_DISK - BEGIN
// B.3.3.4 How MySQL Handles a Full Disk
// 
// This section describes how MySQL responds to disk-full errors (such as “no space left on device”), and to quota-exceeded errors (such as “write failed” or “user block limit reached”).
// This section is relevant for writes to MyISAM tables. It also applies for writes to binary log files and binary log index file, except that references to “row” and “record” should be understood to mean “event.”
// When a disk-full condition occurs, MySQL does the following:
// * It checks once every minute to see whether there is enough space to write the current row. If there is enough space, it continues as if nothing had happened.
// * Every 10 minutes it writes an entry to the log file, warning about the disk-full condition.
// To alleviate the problem, take the following actions:
// * To continue, you only have to free enough disk space to insert all records.
// * Alternatively, to abort the thread, use mysqladmin kill. The thread is aborted the next time it checks the disk (in one minute).
// * Other threads might be waiting for the table that caused the disk-full condition. If you have several “locked” threads, killing the one thread that is waiting on the disk-full condition enables the other threads to continue.
// Exceptions to the preceding behavior are when you use REPAIR TABLE or OPTIMIZE TABLE or when the indexes are created in a batch after LOAD DATA or after an ALTER TABLE statement. All of these statements may create large temporary files that, if left to themselves, would cause big problems for the rest of the system. If the disk becomes full while MySQL is doing any of these operations, it removes the big temporary files and mark the table as crashed. The exception is that for ALTER TABLE, the old table is left unchanged.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/full-disk.html
// B_3_3_4_HOW_MYSQL_HANDLES_A_FULL_DISK - END

// B_3_3_5_WHERE_MYSQL_STORES_TEMPORARY_FILES - BEGIN
// B.3.3.5 Where MySQL Stores Temporary Files
// 
// On Unix, MySQL uses the value of the TMPDIR environment variable as the path name of the directory in which to store temporary files. If TMPDIR is not set, MySQL uses the system default, which is usually /tmp, /var/tmp, or /usr/tmp.
// On Windows, MySQL checks in order the values of the TMPDIR, TEMP, and TMP environment variables. For the first one found to be set, MySQL uses it and does not check those remaining. If none of TMPDIR, TEMP, or TMP are set, MySQL uses the Windows system default, which is usually C:\windows\temp\.
// If the file system containing your temporary file directory is too small, you can use the mysqld --tmpdir option to specify a directory in a file system where you have enough space.
// The --tmpdir option can be set to a list of several paths that are used in round-robin fashion. Paths should be separated by colon characters (:) on Unix and semicolon characters (;) on Windows.
// Note: To spread the load effectively, these paths should be located on different physical disks, not different partitions of the same disk.
// If the MySQL server is acting as a replica, you can set the system variable replica_load_tmpdir to specify a separate directory for holding temporary files when replicating LOAD DATA statements. This directory should be in a disk-based file system (not a memory-based file system) so that the temporary files used to replicate LOAD DATA can survive machine restarts. The directory also should not be one that is cleared by the operating system during the system startup process. However, replication can now continue after a restart if the temporary files have been removed.
// MySQL arranges that temporary files are removed if mysqld is terminated. On platforms that support it (such as Unix), this is done by unlinking the file after opening it. The disadvantage of this is that the name does not appear in directory listings and you do not see a big temporary file that fills up the file system in which the temporary file directory is located. (In such cases, lsof +L1 may be helpful in identifying large files associated with mysqld.)
// When sorting (ORDER BY or GROUP BY), MySQL normally uses one or two temporary files. The maximum disk space required is determined by the following expression:
// [code]
// (length of what is sorted + sizeof(row pointer))
// * number of matched rows
// * 2
// [/code]
// The row pointer size is usually four bytes, but may grow in the future for really big tables.
// For some statements, MySQL creates temporary SQL tables that are not hidden and have names that begin with #sql.
// Some SELECT queries creates temporary SQL tables to hold intermediate results.
// DDL operations that rebuild the table and are not performed online using the ALGORITHM=INPLACE technique create a temporary copy of the original table in the same directory as the original table.
// Online DDL operations may use temporary log files for recording concurrent DML, temporary sort files when creating an index, and temporary intermediate tables files when rebuilding the table. For more information, see Section 15.12.3, “Online DDL Space Requirements”.
// InnoDB user-created temporary tables and on-disk internal temporary tables are created in a temporary tablespace file named ibtmp1 in the MySQL data directory. For more information, see Section 15.6.3.5, “Temporary Tablespaces”.
// See also Section 15.15.7, “InnoDB INFORMATION_SCHEMA Temporary Table Info Table”.
// The optional EXTENDED modifier causes SHOW TABLES to list hidden tables created by failed ALTER TABLE statements. See Section 13.7.7.40, “SHOW TABLES Statement”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/temporary-files.html
// B_3_3_5_WHERE_MYSQL_STORES_TEMPORARY_FILES - END

// B_3_3_6_HOW_TO_PROTECT_OR_CHANGE_THE_MYSQL_UNIX_SOCKET_FILE - BEGIN
// B.3.3.6 How to Protect or Change the MySQL Unix Socket File
// 
// The default location for the Unix socket file that the server uses for communication with local clients is /tmp/mysql.sock. (For some distribution formats, the directory might be different, such as /var/lib/mysql for RPMs.)
// On some versions of Unix, anyone can delete files in the /tmp directory or other similar directories used for temporary files. If the socket file is located in such a directory on your system, this might cause problems.
// On most versions of Unix, you can protect your /tmp directory so that files can be deleted only by their owners or the superuser (root). To do this, set the sticky bit on the /tmp directory by logging in as root and using the following command:
// [code]
// $> chmod +t /tmp
// [/code]
// You can check whether the sticky bit is set by executing ls -ld /tmp. If the last permission character is t, the bit is set.
// Another approach is to change the place where the server creates the Unix socket file. If you do this, you should also let client programs know the new location of the file. You can specify the file location in several ways:
// * Specify the path in a global or local option file. For example, put the following lines in /etc/my.cnf:
// [code]
// [mysqld]
// socket=/path/to/socket
// 
// [client]
// socket=/path/to/socket
// [/code]
// See Section 4.2.2.2, “Using Option Files”.
// * Specify a --socket option on the command line to mysqld_safe and when you run client programs.
// * Set the MYSQL_UNIX_PORT environment variable to the path of the Unix socket file.
// * Recompile MySQL from source to use a different default Unix socket file location. Define the path to the file with the MYSQL_UNIX_ADDR option when you run CMake. See Section 2.8.7, “MySQL Source-Configuration Options”.
// You can test whether the new socket location works by attempting to connect to the server with this command:
// [code]
// $> mysqladmin --socket=/path/to/socket version
// [/code]
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/problems-with-mysql-sock.html
// B_3_3_6_HOW_TO_PROTECT_OR_CHANGE_THE_MYSQL_UNIX_SOCKET_FILE - END

// B_3_3_7_TIME_ZONE_PROBLEMS - BEGIN
// B.3.3.7 Time Zone Problems
// 
// If you have a problem with SELECT NOW() returning values in UTC and not your local time, you have to tell the server your current time zone. The same applies if UNIX_TIMESTAMP() returns the wrong value. This should be done for the environment in which the server runs (for example, in mysqld_safe or mysql.server). See Section 4.9, “Environment Variables”.
// You can set the time zone for the server with the --timezone=timezone_name option to mysqld_safe. You can also set it by setting the TZ environment variable before you start mysqld.
// The permissible values for --timezone or TZ are system dependent. Consult your operating system documentation to see what values are acceptable.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/timezone-problems.html
// B_3_3_7_TIME_ZONE_PROBLEMS - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/administration-issues.html
// B_3_3_ADMINISTRATION_RELATED_ISSUES - END
// 
// B_3_4_QUERY_RELATED_ISSUES - BEGIN
// B.3.4 Query-Related Issues
// 
// B_3_4_1_CASE_SENSITIVITY_IN_STRING_SEARCHES
// B_3_4_2_PROBLEMS_USING_DATE_COLUMNS
// B_3_4_3_PROBLEMS_WITH_NULL_VALUES
// B_3_4_4_PROBLEMS_WITH_COLUMN_ALIASES
// B_3_4_5_ROLLBACK_FAILURE_FOR_NONTRANSACTIONAL_TABLES
// B_3_4_6_DELETING_ROWS_FROM_RELATED_TABLES
// B_3_4_7_SOLVING_PROBLEMS_WITH_NO_MATCHING_ROWS
// B_3_4_8_PROBLEMS_WITH_FLOATING_POINT_VALUES
// 
// B_3_4_1_CASE_SENSITIVITY_IN_STRING_SEARCHES - BEGIN
// B.3.4.1 Case Sensitivity in String Searches
// 
// For nonbinary strings (CHAR, VARCHAR, TEXT), string searches use the collation of the comparison operands. For binary strings (BINARY, VARBINARY, BLOB), comparisons use the numeric values of the bytes in the operands; this means that for alphabetic characters, comparisons are case-sensitive.
// A comparison between a nonbinary string and binary string is treated as a comparison of binary strings.
// Simple comparison operations (>=, >, =, <, <=, sorting, and grouping) are based on each character's “sort value.” Characters with the same sort value are treated as the same character. For example, if e and é have the same sort value in a given collation, they compare as equal.
// The default character set and collation are utf8mb4 and utf8mb4_0900_ai_ci, so nonbinary string comparisons are case-insensitive by default. This means that if you search with col_name LIKE 'a%', you get all column values that start with A or a. To make this search case-sensitive, make sure that one of the operands has a case-sensitive or binary collation. For example, if you are comparing a column and a string that both have the utf8mb4 character set, you can use the COLLATE operator to cause either operand to have the utf8mb4_0900_as_cs or utf8mb4_bin collation:
// [code]
// col_name COLLATE utf8mb4_0900_as_cs LIKE 'a%'
// col_name LIKE 'a%' COLLATE utf8mb4_0900_as_cs
// col_name COLLATE utf8mb4_bin LIKE 'a%'
// col_name LIKE 'a%' COLLATE utf8mb4_bin
// [/code]
// If you want a column always to be treated in case-sensitive fashion, declare it with a case-sensitive or binary collation. See Section 13.1.20, “CREATE TABLE Statement”.
// To cause a case-sensitive comparison of nonbinary strings to be case-insensitive, use COLLATE to name a case-insensitive collation. The strings in the following example normally are case-sensitive, but COLLATE changes the comparison to be case-insensitive:
// [code]
// mysql> SET NAMES 'utf8mb4';
// mysql> SET @s1 = 'MySQL' COLLATE utf8mb4_bin,
//            @s2 = 'mysql' COLLATE utf8mb4_bin;
// mysql> SELECT @s1 = @s2;
// +-----------+
// | @s1 = @s2 |
// +-----------+
// |         0 |
// +-----------+
// mysql> SELECT @s1 COLLATE utf8mb4_0900_ai_ci = @s2;
// +--------------------------------------+
// | @s1 COLLATE utf8mb4_0900_ai_ci = @s2 |
// +--------------------------------------+
// |                                    1 |
// +--------------------------------------+
// [/code]
// A binary string is case-sensitive in comparisons. To compare the string as case-insensitive, convert it to a nonbinary string and use COLLATE to name a case-insensitive collation:
// [code]
// mysql> SET @s = BINARY 'MySQL';
// mysql> SELECT @s = 'mysql';
// +--------------+
// | @s = 'mysql' |
// +--------------+
// |            0 |
// +--------------+
// mysql> SELECT CONVERT(@s USING utf8mb4) COLLATE utf8mb4_0900_ai_ci = 'mysql';
// +----------------------------------------------------------------+
// | CONVERT(@s USING utf8mb4) COLLATE utf8mb4_0900_ai_ci = 'mysql' |
// +----------------------------------------------------------------+
// |                                                              1 |
// +----------------------------------------------------------------+
// [/code]
// To determine whether a value is compared as a nonbinary or binary string, use the COLLATION() function. This example shows that VERSION() returns a string that has a case-insensitive collation, so comparisons are case-insensitive:
// [code]
// mysql> SELECT COLLATION(VERSION());
// +----------------------+
// | COLLATION(VERSION()) |
// +----------------------+
// | utf8mb3_general_ci   |
// +----------------------+
// [/code]
// For binary strings, the collation value is binary, so comparisons are case sensitive. One context in which you can expect to see binary is for compression functions, which return binary strings as a general rule: string:
// [code]
// mysql> SELECT COLLATION(COMPRESS('x'));
// +--------------------------+
// | COLLATION(COMPRESS('x')) |
// +--------------------------+
// | binary                   |
// +--------------------------+
// [/code]
// To check the sort value of a string, the WEIGHT_STRING() may be helpful. See Section 12.8, “String Functions and Operators”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/case-sensitivity.html
// B_3_4_1_CASE_SENSITIVITY_IN_STRING_SEARCHES - END

// B_3_4_2_PROBLEMS_USING_DATE_COLUMNS - BEGIN
// B.3.4.2 Problems Using DATE Columns
// 
// The format of a DATE value is 'YYYY-MM-DD'. According to standard SQL, no other format is permitted. You should use this format in UPDATE expressions and in the WHERE clause of SELECT statements. For example:
// [code]
// SELECT * FROM t1 WHERE date >= '2003-05-05';
// [/code]
// As a convenience, MySQL automatically converts a date to a number if the date is used in numeric context and vice versa. MySQL also permits a “relaxed” string format when updating and in a WHERE clause that compares a date to a DATE, DATETIME, or TIMESTAMP column. “Relaxed” format means that any punctuation character may be used as the separator between parts. For example, '2004-08-15' and '2004#08#15' are equivalent. MySQL can also convert a string containing no separators (such as '20040815'), provided it makes sense as a date.
// When you compare a DATE, TIME, DATETIME, or TIMESTAMP to a constant string with the <, <=, =, >=, >, or BETWEEN operators, MySQL normally converts the string to an internal long integer for faster comparison (and also for a bit more “relaxed” string checking). However, this conversion is subject to the following exceptions:
// * When you compare two columns
// * When you compare a DATE, TIME, DATETIME, or TIMESTAMP column to an expression
// * When you use any comparison method other than those just listed, such as IN or STRCMP().
// For those exceptions, the comparison is done by converting the objects to strings and performing a string comparison.
// To be on the safe side, assume that strings are compared as strings and use the appropriate string functions if you want to compare a temporal value to a string.
// The special “zero” date '0000-00-00' can be stored and retrieved as '0000-00-00'. When a '0000-00-00' date is used through Connector/ODBC, it is automatically converted to NULL because ODBC cannot handle that kind of date.
// Because MySQL performs the conversions just described, the following statements work (assume that idate is a DATE column):
// [code]
// INSERT INTO t1 (idate) VALUES (19970505);
// INSERT INTO t1 (idate) VALUES ('19970505');
// INSERT INTO t1 (idate) VALUES ('97-05-05');
// INSERT INTO t1 (idate) VALUES ('1997.05.05');
// INSERT INTO t1 (idate) VALUES ('1997 05 05');
// INSERT INTO t1 (idate) VALUES ('0000-00-00');
// 
// SELECT idate FROM t1 WHERE idate >= '1997-05-05';
// SELECT idate FROM t1 WHERE idate >= 19970505;
// SELECT MOD(idate,100) FROM t1 WHERE idate >= 19970505;
// SELECT idate FROM t1 WHERE idate >= '19970505';
// [/code]
// However, the following statement does not work:
// [code]
// SELECT idate FROM t1 WHERE STRCMP(idate,'20030505')=0;
// [/code]
// STRCMP() is a string function, so it converts idate to a string in 'YYYY-MM-DD' format and performs a string comparison. It does not convert '20030505' to the date '2003-05-05' and perform a date comparison.
// If you enable the ALLOW_INVALID_DATES SQL mode, MySQL permits you to store dates that are given only limited checking: MySQL requires only that the day is in the range from 1 to 31 and the month is in the range from 1 to 12. This makes MySQL very convenient for Web applications where you obtain year, month, and day in three different fields and you want to store exactly what the user inserted (without date validation).
// MySQL permits you to store dates where the day or month and day are zero. This is convenient if you want to store a birthdate in a DATE column and you know only part of the date. To disallow zero month or day parts in dates, enable the NO_ZERO_IN_DATE mode.
// MySQL permits you to store a “zero” value of '0000-00-00' as a “dummy date.” This is in some cases more convenient than using NULL values. If a date to be stored in a DATE column cannot be converted to any reasonable value, MySQL stores '0000-00-00'. To disallow '0000-00-00', enable the NO_ZERO_DATE mode.
// To have MySQL check all dates and accept only legal dates (unless overridden by IGNORE), set the sql_mode system variable to "NO_ZERO_IN_DATE,NO_ZERO_DATE".
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/using-date.html
// B_3_4_2_PROBLEMS_USING_DATE_COLUMNS - END

// B_3_4_3_PROBLEMS_WITH_NULL_VALUES - BEGIN
// B.3.4.3 Problems with NULL Values
// 
// The concept of the NULL value is a common source of confusion for newcomers to SQL, who often think that NULL is the same thing as an empty string ''. This is not the case. For example, the following statements are completely different:
// [code]
// mysql> INSERT INTO my_table (phone) VALUES (NULL);
// mysql> INSERT INTO my_table (phone) VALUES ('');
// [/code]
// Both statements insert a value into the phone column, but the first inserts a NULL value and the second inserts an empty string. The meaning of the first can be regarded as “phone number is not known” and the meaning of the second can be regarded as “the person is known to have no phone, and thus no phone number.”
// To help with NULL handling, you can use the IS NULL and IS NOT NULL operators and the IFNULL() function.
// In SQL, the NULL value is never true in comparison to any other value, even NULL. An expression that contains NULL always produces a NULL value unless otherwise indicated in the documentation for the operators and functions involved in the expression. All columns in the following example return NULL:
// [code]
// mysql> SELECT NULL, 1+NULL, CONCAT('Invisible',NULL);
// [/code]
// To search for column values that are NULL, you cannot use an expr = NULL test. The following statement returns no rows, because expr = NULL is never true for any expression:
// [code]
// mysql> SELECT * FROM my_table WHERE phone = NULL;
// [/code]
// To look for NULL values, you must use the IS NULL test. The following statements show how to find the NULL phone number and the empty phone number:
// [code]
// mysql> SELECT * FROM my_table WHERE phone IS NULL;
// mysql> SELECT * FROM my_table WHERE phone = '';
// [/code]
// See Section 3.3.4.6, “Working with NULL Values”, for additional information and examples.
// You can add an index on a column that can have NULL values if you are using the MyISAM, InnoDB, or MEMORY storage engine. Otherwise, you must declare an indexed column NOT NULL, and you cannot insert NULL into the column.
// When reading data with LOAD DATA, empty or missing columns are updated with ''. To load a NULL value into a column, use \N in the data file. The literal word NULL may also be used under some circumstances. See Section 13.2.9, “LOAD DATA Statement”.
// When using DISTINCT, GROUP BY, or ORDER BY, all NULL values are regarded as equal.
// When using ORDER BY, NULL values are presented first, or last if you specify DESC to sort in descending order.
// Aggregate (group) functions such as COUNT(), MIN(), and SUM() ignore NULL values. The exception to this is COUNT(*), which counts rows and not individual column values. For example, the following statement produces two counts. The first is a count of the number of rows in the table, and the second is a count of the number of non-NULL values in the age column:
// [code]
// mysql> SELECT COUNT(*), COUNT(age) FROM person;
// [/code]
// For some data types, MySQL handles NULL values in special ways. For example, if you insert NULL into an integer or floating-point column that has the AUTO_INCREMENT attribute, the next number in the sequence is inserted. Under certain conditions, if you insert NULL into a TIMESTAMP column, the current date and time is inserted; this behavior depends in part on the server SQL mode (see Section 5.1.11, “Server SQL Modes”) as well as the value of the explicit_defaults_for_timestamp system variable.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/problems-with-null.html
// B_3_4_3_PROBLEMS_WITH_NULL_VALUES - END

// B_3_4_4_PROBLEMS_WITH_COLUMN_ALIASES - BEGIN
// B.3.4.4 Problems with Column Aliases
// 
// An alias can be used in a query select list to give a column a different name. You can use the alias in GROUP BY, ORDER BY, or HAVING clauses to refer to the column:
// [code]
// SELECT SQRT(a*b) AS root FROM tbl_name
//   GROUP BY root HAVING root > 0;
// SELECT id, COUNT(*) AS cnt FROM tbl_name
//   GROUP BY id HAVING cnt > 0;
// SELECT id AS 'Customer identity' FROM tbl_name;
// [/code]
// Standard SQL disallows references to column aliases in a WHERE clause. This restriction is imposed because when the WHERE clause is evaluated, the column value may not yet have been determined. For example, the following query is illegal:
// [code]
// SELECT id, COUNT(*) AS cnt FROM tbl_name
//   WHERE cnt > 0 GROUP BY id;
// [/code]
// The WHERE clause determines which rows should be included in the GROUP BY clause, but it refers to the alias of a column value that is not known until after the rows have been selected, and grouped by the GROUP BY.
// In the select list of a query, a quoted column alias can be specified using identifier or string quoting characters:
// [code]
// SELECT 1 AS `one`, 2 AS 'two';
// [/code]
// Elsewhere in the statement, quoted references to the alias must use identifier quoting or the reference is treated as a string literal. For example, this statement groups by the values in column id, referenced using the alias `a`:
// [code]
// SELECT id AS 'a', COUNT(*) AS cnt FROM tbl_name
//   GROUP BY `a`;
// [/code]
// This statement groups by the literal string 'a' and does not work as you may expect:
// [code]
// SELECT id AS 'a', COUNT(*) AS cnt FROM tbl_name
//   GROUP BY 'a';
// [/code]
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/problems-with-alias.html
// B_3_4_4_PROBLEMS_WITH_COLUMN_ALIASES - END

// B_3_4_5_ROLLBACK_FAILURE_FOR_NONTRANSACTIONAL_TABLES - BEGIN
// B.3.4.5 Rollback Failure for Nontransactional Tables
// 
// If you receive the following message when trying to perform a ROLLBACK, it means that one or more of the tables you used in the transaction do not support transactions:
// [result]
// Warning: Some non-transactional changed tables couldn't be rolled back
// [/result]
// These nontransactional tables are not affected by the ROLLBACK statement.
// If you were not deliberately mixing transactional and nontransactional tables within the transaction, the most likely cause for this message is that a table you thought was transactional actually is not. This can happen if you try to create a table using a transactional storage engine that is not supported by your mysqld server (or that was disabled with a startup option). If mysqld does not support a storage engine, it instead creates the table as a MyISAM table, which is nontransactional.
// You can check the storage engine for a table by using either of these statements:
// [code]
// SHOW TABLE STATUS LIKE 'tbl_name';
// SHOW CREATE TABLE tbl_name;
// [/code]
// See Section 13.7.7.39, “SHOW TABLE STATUS Statement”, and Section 13.7.7.10, “SHOW CREATE TABLE Statement”.
// To check which storage engines your mysqld server supports, use this statement:
// [code]
// SHOW ENGINES;
// [/code]
// See Section 13.7.7.16, “SHOW ENGINES Statement” for full details.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/nontransactional-tables.html
// B_3_4_5_ROLLBACK_FAILURE_FOR_NONTRANSACTIONAL_TABLES - END

// B_3_4_6_DELETING_ROWS_FROM_RELATED_TABLES - BEGIN
// B.3.4.6 Deleting Rows from Related Tables
// 
// If the total length of the DELETE statement for related_table is more than the default value of the max_allowed_packet system variable, you should split it into smaller parts and execute multiple DELETE statements. You probably get the fastest DELETE by specifying only 100 to 1,000 related_column values per statement if the related_column is indexed. If the related_column isn't indexed, the speed is independent of the number of arguments in the IN clause.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/deleting-from-related-tables.html
// B_3_4_6_DELETING_ROWS_FROM_RELATED_TABLES - END

// B_3_4_7_SOLVING_PROBLEMS_WITH_NO_MATCHING_ROWS - BEGIN
// B.3.4.7 Solving Problems with No Matching Rows
// 
// If you have a complicated query that uses many tables but that returns no rows, you should use the following procedure to find out what is wrong:
// 1. Test the query with EXPLAIN to check whether you can find something that is obviously wrong. See Section 13.8.2, “EXPLAIN Statement”.
// 2. Select only those columns that are used in the WHERE clause.
// 3. Remove one table at a time from the query until it returns some rows. If the tables are large, it is a good idea to use LIMIT 10 with the query.
// 4. Issue a SELECT for the column that should have matched a row against the table that was last removed from the query.
// 5. If you are comparing FLOAT or DOUBLE columns with numbers that have decimals, you cannot use equality (=) comparisons. This problem is common in most computer languages because not all floating-point values can be stored with exact precision. In some cases, changing the FLOAT to a DOUBLE fixes this. See Section B.3.4.8, “Problems with Floating-Point Values”.
// 6. If you still cannot figure out what is wrong, create a minimal test that can be run with mysql test < query.sql that shows your problems. You can create a test file by dumping the tables with mysqldump --quick db_name tbl_name_1 ... tbl_name_n > query.sql. Open the file in an editor, remove some insert lines (if there are more than needed to demonstrate the problem), and add your SELECT statement at the end of the file.
// Verify that the test file demonstrates the problem by executing these commands:
// [code]
// $> mysqladmin create test2
// $> mysql test2 < query.sql
// [/code]
// Attach the test file to a bug report, which you can file using the instructions in Section 1.5, “How to Report Bugs or Problems”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/no-matching-rows.html
// B_3_4_7_SOLVING_PROBLEMS_WITH_NO_MATCHING_ROWS - END

// B_3_4_8_PROBLEMS_WITH_FLOATING_POINT_VALUES - BEGIN
// B.3.4.8 Problems with Floating-Point Values
// 
// Floating-point numbers sometimes cause confusion because they are approximate and not stored as exact values. A floating-point value as written in an SQL statement may not be the same as the value represented internally. Attempts to treat floating-point values as exact in comparisons may lead to problems. They are also subject to platform or implementation dependencies. The FLOAT and DOUBLE data types are subject to these issues. For DECIMAL columns, MySQL performs operations with a precision of 65 decimal digits, which should solve most common inaccuracy problems.
// The following example uses DOUBLE to demonstrate how calculations that are done using floating-point operations are subject to floating-point error.
// [code]
// mysql> CREATE TABLE t1 (i INT, d1 DOUBLE, d2 DOUBLE);
// mysql> INSERT INTO t1 VALUES (1, 101.40, 21.40), (1, -80.00, 0.00),
//     -> (2, 0.00, 0.00), (2, -13.20, 0.00), (2, 59.60, 46.40),
//     -> (2, 30.40, 30.40), (3, 37.00, 7.40), (3, -29.60, 0.00),
//     -> (4, 60.00, 15.40), (4, -10.60, 0.00), (4, -34.00, 0.00),
//     -> (5, 33.00, 0.00), (5, -25.80, 0.00), (5, 0.00, 7.20),
//     -> (6, 0.00, 0.00), (6, -51.40, 0.00);
// 
// mysql> SELECT i, SUM(d1) AS a, SUM(d2) AS b
//     -> FROM t1 GROUP BY i HAVING a <> b;
// 
// +------+-------+------+
// | i    | a     | b    |
// +------+-------+------+
// |    1 |  21.4 | 21.4 |
// |    2 |  76.8 | 76.8 |
// |    3 |   7.4 |  7.4 |
// |    4 |  15.4 | 15.4 |
// |    5 |   7.2 |  7.2 |
// |    6 | -51.4 |    0 |
// +------+-------+------+
// [/code]
// The result is correct. Although the first five records look like they should not satisfy the comparison (the values of a and b do not appear to be different), they may do so because the difference between the numbers shows up around the tenth decimal or so, depending on factors such as computer architecture or the compiler version or optimization level. For example, different CPUs may evaluate floating-point numbers differently.
// If columns d1 and d2 had been defined as DECIMAL rather than DOUBLE, the result of the SELECT query would have contained only one row—the last one shown above.
// The correct way to do floating-point number comparison is to first decide on an acceptable tolerance for differences between the numbers and then do the comparison against the tolerance value. For example, if we agree that floating-point numbers should be regarded the same if they are same within a precision of one in ten thousand (0.0001), the comparison should be written to find differences larger than the tolerance value:
// [code]
// mysql> SELECT i, SUM(d1) AS a, SUM(d2) AS b FROM t1
//     -> GROUP BY i HAVING ABS(a - b) > 0.0001;
// +------+-------+------+
// | i    | a     | b    |
// +------+-------+------+
// |    6 | -51.4 |    0 |
// +------+-------+------+
// 1 row in set (0.00 sec)
// [/code]
// Conversely, to get rows where the numbers are the same, the test should find differences within the tolerance value:
// [code]
// mysql> SELECT i, SUM(d1) AS a, SUM(d2) AS b FROM t1
//     -> GROUP BY i HAVING ABS(a - b) <= 0.0001;
// +------+------+------+
// | i    | a    | b    |
// +------+------+------+
// |    1 | 21.4 | 21.4 |
// |    2 | 76.8 | 76.8 |
// |    3 |  7.4 |  7.4 |
// |    4 | 15.4 | 15.4 |
// |    5 |  7.2 |  7.2 |
// +------+------+------+
// 5 rows in set (0.03 sec)
// [/code]
// Floating-point values are subject to platform or implementation dependencies. Suppose that you execute the following statements:
// [code]
// CREATE TABLE t1(c1 FLOAT(53,0), c2 FLOAT(53,0));
// INSERT INTO t1 VALUES('1e+52','-1e+52');
// SELECT * FROM t1;
// [/code]
// On some platforms, the SELECT statement returns inf and -inf. On others, it returns 0 and -0.
// An implication of the preceding issues is that if you attempt to create a replica by dumping table contents with mysqldump on the source and reloading the dump file into the replica, tables containing floating-point columns might differ between the two hosts.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/problems-with-float.html
// B_3_4_8_PROBLEMS_WITH_FLOATING_POINT_VALUES - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/query-issues.html
// B_3_4_QUERY_RELATED_ISSUES - END
// 
// B_3_5_OPTIMIZER_RELATED_ISSUES - BEGIN
// B.3.5 Optimizer-Related Issues
// 
// MySQL uses a cost-based optimizer to determine the best way to resolve a query. In many cases, MySQL can calculate the best possible query plan, but sometimes MySQL does not have enough information about the data at hand and has to make “educated” guesses about the data.
// For the cases when MySQL does not do the "right" thing, tools that you have available to help MySQL are:
// * Use the EXPLAIN statement to get information about how MySQL processes a query. To use it, just add the keyword EXPLAIN to the front of your SELECT statement:
// [code]
// mysql> EXPLAIN SELECT * FROM t1, t2 WHERE t1.i = t2.i;
// [/code]
// EXPLAIN is discussed in more detail in Section 13.8.2, “EXPLAIN Statement”.
// * Use ANALYZE TABLE tbl_name to update the key distributions for the scanned table. See Section 13.7.3.1, “ANALYZE TABLE Statement”.
// * Use FORCE INDEX for the scanned table to tell MySQL that table scans are very expensive compared to using the given index:
// [code]
// SELECT * FROM t1, t2 FORCE INDEX (index_for_column)
// WHERE t1.col_name=t2.col_name;
// [/code]
// USE INDEX and IGNORE INDEX may also be useful. See Section 8.9.4, “Index Hints”.
// * Global and table-level STRAIGHT_JOIN. See Section 13.2.13, “SELECT Statement”.
// * You can tune global or thread-specific system variables. For example, start mysqld with the --max-seeks-for-key=1000 option or use SET max_seeks_for_key=1000 to tell the optimizer to assume that no key scan causes more than 1,000 key seeks. See Section 5.1.8, “Server System Variables”.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/optimizer-issues.html
// B_3_5_OPTIMIZER_RELATED_ISSUES - END

// B_3_6_TABLE_DEFINITION_RELATED_ISSUES - BEGIN
// B.3.6 Table Definition-Related Issues
// 
// B_3_6_1_PROBLEMS_WITH_ALTER_TABLE
// B_3_6_2_TEMPORARY_TABLE_PROBLEMS
// 
// B_3_6_1_PROBLEMS_WITH_ALTER_TABLE - BEGIN
// B.3.6.1 Problems with ALTER TABLE
// 
// If you get a duplicate-key error when using ALTER TABLE to change the character set or collation of a character column, the cause is either that the new column collation maps two keys to the same value or that the table is corrupted. In the latter case, you should run REPAIR TABLE on the table. REPAIR TABLE works for MyISAM, ARCHIVE, and CSV tables.
// If you use ALTER TABLE on a transactional table or if you are using Windows, ALTER TABLE unlocks the table if you had done a LOCK TABLE on it. This is done because InnoDB and these operating systems cannot drop a table that is in use.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/alter-table-problems.html
// B_3_6_1_PROBLEMS_WITH_ALTER_TABLE - END

// B_3_6_2_TEMPORARY_TABLE_PROBLEMS - BEGIN
// B.3.6.2 TEMPORARY Table Problems
// 
// Temporary tables created with CREATE TEMPORARY TABLE have the following limitations:
// * TEMPORARY tables are supported only by the InnoDB, MEMORY, MyISAM, and MERGE storage engines.
// * Temporary tables are not supported for NDB Cluster.
// * The SHOW TABLES statement does not list TEMPORARY tables.
// * To rename TEMPORARY tables, RENAME TABLE does not work. Use ALTER TABLE instead:
// [code]
// ALTER TABLE old_name RENAME new_name;
// [/code]
// * You cannot refer to a TEMPORARY table more than once in the same query. For example, the following does not work:
// [code]
// SELECT * FROM temp_table JOIN temp_table AS t2;
// [/code]
// The statement produces this error:
// [result]
// ERROR 1137: Can't reopen table: 'temp_table'
// [/result]
// You can work around this issue if your query permits use of a common table expression (CTE) rather than a TEMPORARY table. For example, this fails with the Can't reopen table error:
// [code]
// CREATE TEMPORARY TABLE t SELECT 1 AS col_a, 2 AS col_b;
// SELECT * FROM t AS t1 JOIN t AS t2;
// [/code]
// To avoid the error, use a WITH clause that defines a CTE, rather than the TEMPORARY table:
// [code]
// WITH cte AS (SELECT 1 AS col_a, 2 AS col_b)
// SELECT * FROM cte AS t1 JOIN cte AS t2;
// [/code]
// * The Can't reopen table error also occurs if you refer to a temporary table multiple times in a stored function under different aliases, even if the references occur in different statements within the function. It may occur for temporary tables created outside stored functions and referred to across multiple calling and callee functions.
// * If a TEMPORARY is created with the same name as an existing non-TEMPORARY table, the non-TEMPORARY table is hidden until the TEMPORARY table is dropped, even if the tables use different storage engines.
// * There are known issues in using temporary tables with replication. See Section 17.5.1.31, “Replication and Temporary Tables”, for more information.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/temporary-table-problems.html
// B_3_6_2_TEMPORARY_TABLE_PROBLEMS - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/table-definition-issues.html
// B_3_6_TABLE_DEFINITION_RELATED_ISSUES - END
// 
// B_3_7_KNOWN_ISSUES_IN_MYSQL - BEGIN
// B.3.7 Known Issues in MySQL
// 
// This section lists known issues in recent versions of MySQL.
// For information about platform-specific issues, see the installation and debugging instructions in Section 2.1, “General Installation Guidance”, and Section 5.9, “Debugging MySQL”.
// The following problems are known:
// * Subquery optimization for IN is not as effective as for =.
// * Even if you use lower_case_table_names=2 (which enables MySQL to remember the case used for databases and table names), MySQL does not remember the case used for database names for the function DATABASE() or within the various logs (on case-insensitive systems).
// * Dropping a FOREIGN KEY constraint does not work in replication because the constraint may have another name on the replica.
// * REPLACE (and LOAD DATA with the REPLACE option) does not trigger ON DELETE CASCADE.
// * DISTINCT with ORDER BY does not work inside GROUP_CONCAT() if you do not use all and only those columns that are in the DISTINCT list.
// * When inserting a big integer value (between 263 and 264−1) into a decimal or string column, it is inserted as a negative value because the number is evaluated in signed integer context.
// * With statement-based binary logging, the source server writes the executed queries to the binary log. This is a very fast, compact, and efficient logging method that works perfectly in most cases. However, it is possible for the data on the source and replica to become different if a query is designed in such a way that the data modification is nondeterministic (generally not a recommended practice, even outside of replication).
// For example:
//  * CREATE TABLE ... SELECT or INSERT ... SELECT statements that insert zero or NULL values into an AUTO_INCREMENT column.
//  * DELETE if you are deleting rows from a table that has foreign keys with ON DELETE CASCADE properties.
//  * REPLACE ... SELECT, INSERT IGNORE ... SELECT if you have duplicate key values in the inserted data.
// If and only if the preceding queries have no ORDER BY clause guaranteeing a deterministic order.
// For example, for INSERT ... SELECT with no ORDER BY, the SELECT may return rows in a different order (which results in a row having different ranks, hence getting a different number in the AUTO_INCREMENT column), depending on the choices made by the optimizers on the source and replica.
// A query is optimized differently on the source and replica only if:
//  * The table is stored using a different storage engine on the source than on the replica. (It is possible to use different storage engines on the source and replica. For example, you can use InnoDB on the source, but MyISAM on the replica if the replica has less available disk space.)
//  * MySQL buffer sizes (key_buffer_size, and so on) are different on the source and replica.
//  * The source and replica run different MySQL versions, and the optimizer code differs between these versions.
// This problem may also affect database restoration using mysqlbinlog|mysql.
// The easiest way to avoid this problem is to add an ORDER BY clause to the aforementioned nondeterministic queries to ensure that the rows are always stored or modified in the same order. Using row-based or mixed logging format also avoids the problem.
// * Log file names are based on the server host name if you do not specify a file name with the startup option. To retain the same log file names if you change your host name to something else, you must explicitly use options such as --log-bin=old_host_name-bin. See Section 5.1.7, “Server Command Options”. Alternatively, rename the old files to reflect your host name change. If these are binary logs, you must edit the binary log index file and fix the binary log file names there as well. (The same is true for the relay logs on a replica.)
// * mysqlbinlog does not delete temporary files left after a LOAD DATA statement. See Section 4.6.9, “mysqlbinlog - Utility for Processing Binary Log Files”.
// * RENAME does not work with TEMPORARY tables or tables used in a MERGE table.
// * When using SET CHARACTER SET, you cannot use translated characters in database, table, and column names.
// * The server uses only the first max_sort_length bytes when comparing data values. This means that values cannot reliably be used in GROUP BY, ORDER BY, or DISTINCT if they differ only after the first max_sort_length bytes. To work around this, increase the variable value. The default value of max_sort_length is 1024 and can be changed at server startup time or at runtime.
// * Numeric calculations are done with BIGINT or DOUBLE (both are normally 64 bits long). Which precision you get depends on the function. The general rule is that bit functions are performed with BIGINT precision, IF() and ELT() with BIGINT or DOUBLE precision, and the rest with DOUBLE precision. You should try to avoid using unsigned long long values if they resolve to be larger than 63 bits (9223372036854775807) for anything other than bit fields.
// * You can have up to 255 ENUM and SET columns in one table.
// * In MIN(), MAX(), and other aggregate functions, MySQL currently compares ENUM and SET columns by their string value rather than by the string's relative position in the set.
// * In an UPDATE statement, columns are updated from left to right. If you refer to an updated column, you get the updated value instead of the original value. For example, the following statement increments KEY by 2, not 1:
// [code]
// mysql> UPDATE tbl_name SET KEY=KEY+1,KEY=KEY+1;
// [/code]
// * You can refer to multiple temporary tables in the same query, but you cannot refer to any given temporary table more than once. For example, the following does not work:
// [code]
// mysql> SELECT * FROM temp_table, temp_table AS t2;
// ERROR 1137: Can't reopen table: 'temp_table'
// [/code]
// * The optimizer may handle DISTINCT differently when you are using “hidden” columns in a join than when you are not. In a join, hidden columns are counted as part of the result (even if they are not shown), whereas in normal queries, hidden columns do not participate in the DISTINCT comparison.
// An example of this is:
// [code]
// SELECT DISTINCT mp3id FROM band_downloads
//        WHERE userid = 9 ORDER BY id DESC;
// [/code]
// and
// [code]
// SELECT DISTINCT band_downloads.mp3id
//        FROM band_downloads,band_mp3
//        WHERE band_downloads.userid = 9
//        AND band_mp3.id = band_downloads.mp3id
//        ORDER BY band_downloads.id DESC;
// [/code]
// In the second case, you may get two identical rows in the result set (because the values in the hidden id column may differ).
// Note that this happens only for queries that do not have the ORDER BY columns in the result.
// * If you execute a PROCEDURE on a query that returns an empty set, in some cases the PROCEDURE does not transform the columns.
// * Creation of a table of type MERGE does not check whether the underlying tables are compatible types.
// * If you use ALTER TABLE to add a UNIQUE index to a table used in a MERGE table and then add a normal index on the MERGE table, the key order is different for the tables if there was an old, non-UNIQUE key in the table. This is because ALTER TABLE puts UNIQUE indexes before normal indexes to be able to detect duplicate keys as early as possible.
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/known-issues.html
// B_3_7_KNOWN_ISSUES_IN_MYSQL - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/problems.html
// B_3_PROBLEMS_AND_COMMON_ERRORS - END
// 
// LITERATURE_SOURCES
// * MYSQL_COM (2023-08-29)
// URL: https://dev.mysql.com/doc/refman/8.1/en/error-handling.html
// APPENDIX_B_ERROR_MESSAGES_AND_COMMON_PROBLEMS - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_AFFECTED_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Get number of affected rows in previous MySQL operation.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_affected_rows()
// * PDOStatement::rowCount()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_affected_rows() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_affected_rows($link_identifier = NULL)
{
$return_mysql_affected_rows = 0;

// ========== MYSQL_AFFECTED_ROWS - BEGIN
// ===== ABOUT
// Get number of affected rows in previous MySQL operation
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_affected_rows()
//  * PDOStatement::rowCount()
// ===== DESCRIPTION
// Get the number of affected rows by the last INSERT, UPDATE, REPLACE or DELETE query associated with link_identifier.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_affected_rows(resource $link_identifier = NULL): int
// ===== CODE
$return_mysql_affected_rows = mysql_affected_rows(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the number of affected rows on success, and -1 if the last query failed.
// If the last query was a DELETE query with no WHERE clause, all of the records will have been deleted from the table but this function will return zero with MySQL versions prior to 4.1.2.
// When using UPDATE, MySQL will not update columns where the new value is the same as the old value. This creates the possibility that mysql_affected_rows() may not actually equal the number of rows matched, only the number of rows that were literally affected by the query.
// The REPLACE statement first deletes the record with the same primary key and then inserts the new record. This function returns the number of deleted records plus the number of inserted records.
// In the case of "INSERT ... ON DUPLICATE KEY UPDATE" queries, the return value will be 1 if an insert was performed, or 2 for an update of an existing row.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_affected_rows() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// mysql_select_db('mydb');
// 
// // this should return the correct numbers of deleted records
// mysql_query('DELETE FROM mytable WHERE id < 10');
// printf("Records deleted: %d\n", mysql_affected_rows());
// 
// // with a where clause that is never true, it should return 0
// mysql_query('DELETE FROM mytable WHERE 0');
// printf("Records deleted: %d\n", mysql_affected_rows());
// [/php]
// The above example will output something similar to:
// [result]
// Records deleted: 10
// Records deleted: 0
// [/result]
// [/example]
// [example]
// Example #2 mysql_affected_rows() example using transactions
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// mysql_select_db('mydb');
// 
// // Update records
// mysql_query("UPDATE mytable SET used=1 WHERE id < 10");
// printf ("Updated records: %d\n", mysql_affected_rows());
// mysql_query("COMMIT");
// [/php]
// The above example will output something similar to:
// [result]
// Updated Records: 10
// [/result]
// [/example]
// [/examples]
// 
// Notes
//  Note: Transactions
//  If you are using transactions, you need to call mysql_affected_rows() after your INSERT, UPDATE, or DELETE query, not after the COMMIT.
//  Note: SELECT Statements
//  To retrieve the number of rows returned by a SELECT, it is possible to use mysql_num_rows().
//  Note: Cascaded Foreign Keys
//  mysql_affected_rows() does not count rows affected implicitly through the use of ON DELETE CASCADE and/or ON UPDATE CASCADE in foreign key constraints.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-affected-rows.php
// ========== MYSQL_AFFECTED_ROWS - END

// SYNTAX:
// int mysql_affected_rows(resource $link_identifier = NULL)

return $return_mysql_affected_rows; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_AFFECTED_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CLIENT_ENCODING
// ============================== PUBLIC
// ============================== ABOUT
// Returns the name of the character set.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_character_set_name()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_client_encoding() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_client_encoding($link_identifier = NULL)
{
$return_mysql_client_encoding = null;

// ========== MYSQL_CLIENT_ENCODING - BEGIN
// ===== ABOUT
// Returns the name of the character set
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_character_set_name()
// ===== DESCRIPTION
// Retrieves the character_set variable from MySQL.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_client_encoding(resource $link_identifier = NULL): string
// ===== CODE
$return_mysql_client_encoding = mysql_client_encoding(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the default character set name for the current connection.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_client_encoding() example
// [php]
// $link    = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// $charset = mysql_client_encoding($link);
// 
// echo "The current character set is: $charset\n";
// [/php]
// The above example will output something similar to:
// [result]
// The current character set is: latin1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-client-encoding.php
// ========== MYSQL_CLIENT_ENCODING - END

// SYNTAX:
// string mysql_client_encoding(resource $link_identifier = NULL)

return $return_mysql_client_encoding; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CLIENT_ENCODING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close MySQL connection.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_close()
// * PDO: Assign the value of null to the PDO object
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_close() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_close($link_identifier = NULL)
{
$return_mysql_close = false;

// ========== MYSQL_CLOSE - BEGIN
// ===== ABOUT
// Close MySQL connection
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_close()
//  * PDO: Assign the value of null to the PDO object
// ===== DESCRIPTION
// mysql_close() closes the non-persistent connection to the MySQL server that's associated with the specified link identifier. If link_identifier isn't specified, the last opened link is used.
// Open non-persistent MySQL connections and result sets are automatically destroyed when a PHP script finishes its execution. So, while explicitly closing open connections and freeing result sets is optional, doing so is recommended. This will immediately return resources to PHP and MySQL, which can improve performance. For related information, see freeing resources
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_close(resource $link_identifier = NULL): bool
// ===== CODE
$return_mysql_close = mysql_close(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_close() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);
// [/php]
// The above example will output:
// [result]
// Connected successfully
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: mysql_close() will not close persistent links created by mysql_pconnect(). For additional details, see the manual page on persistent connections.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-close.php
// ========== MYSQL_CLOSE - END

// SYNTAX:
// bool mysql_close(resource $link_identifier = NULL)

return $return_mysql_close; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Open a connection to a MySQL Server.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_connect()
// * PDO::__construct()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_connect() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_connect($server, $username, $password, $new_link = false, $client_flags = 0)
{
$return_mysql_connect = false;

// ========== MYSQL_CONNECT - BEGIN
// ===== ABOUT
// Open a connection to a MySQL Server
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_connect()
//  * PDO::__construct()
// ===== DESCRIPTION
// Opens or reuses a connection to a MySQL server.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_connect(
//    string $server = ini_get("mysql.default_host"),
//    string $username = ini_get("mysql.default_user"),
//    string $password = ini_get("mysql.default_password"),
//    bool $new_link = false,
//    int $client_flags = 0
// ): resource|false
// ===== CODE
$return_mysql_connect = mysql_connect(

$server, // string server - The MySQL server. It can also include a port number. e.g. "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for the localhost.
// If the PHP directive mysql.default_host is undefined (default), then the default value is 'localhost:3306'. In SQL safe mode, this parameter is ignored and value 'localhost:3306' is always used.

$username, // string username - The username. Default value is defined by mysql.default_user. In SQL safe mode, this parameter is ignored and the name of the user that owns the server process is used.

$password, // string password - The password. Default value is defined by mysql.default_password. In SQL safe mode, this parameter is ignored and empty password is used.

$new_link, // bool new_link - If a second call is made to mysql_connect() with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned. The new_link parameter modifies this behavior and makes mysql_connect() always open a new link, even if mysql_connect() was called before with the same parameters. In SQL safe mode, this parameter is ignored.

$client_flags // int client_flags - The client_flags parameter can be a combination of the following constants: 128 (enable LOAD DATA LOCAL handling), MYSQL_CLIENT_SSL, MYSQL_CLIENT_COMPRESS, MYSQL_CLIENT_IGNORE_SPACE or MYSQL_CLIENT_INTERACTIVE. Read the section about MySQL client constants for further information. In SQL safe mode, this parameter is ignored.

); // Return Values
// Returns a MySQL link identifier on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_connect() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);
// [/php]
// [/example]
// [example]
// Example #2 mysql_connect() example using hostname:port syntax
// [php]
// // we connect to example.com and port 3307
// $link = mysql_connect('example.com:3307', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);
// 
// // we connect to localhost at port 3307
// $link = mysql_connect('127.0.0.1:3307', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);
// [/php]
// [/example]
// [example]
// Example #3 mysql_connect() example using ":/path/to/socket" syntax
// [php]
// // we connect to localhost and socket e.g. /tmp/mysql.sock
// 
// // variant 1: omit localhost
// $link = mysql_connect(':/tmp/mysql', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);
// 
// 
// // variant 2: with localhost
// $link = mysql_connect('localhost:/tmp/mysql.sock', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_close($link);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Whenever you specify "localhost" or "localhost:port" as server, the MySQL client library will override this and try to connect to a local socket (named pipe on Windows). If you want to use TCP/IP, use "127.0.0.1" instead of "localhost". If the MySQL client library tries to connect to the wrong local socket, the correct path should be set as mysql.default_host in php.ini and the server field left blank.
// Note: The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling mysql_close().
// Note: Error "Can't create TCP/IP socket (10106)" usually means that the variables_order configure directive doesn't contain character E. On Windows, if the environment is not copied the SYSTEMROOT environment variable won't be available and PHP will have problems loading Winsock.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-connect.php
// ========== MYSQL_CONNECT - END

// SYNTAX:
// resource|false mysql_connect(string $server, string $username, string $password, bool $new_link = false, int $client_flags = 0)

return $return_mysql_connect; // resource|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CREATE_DB
// ============================== PUBLIC
// ============================== ABOUT
// Create a MySQL database.
// 
// Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_query()
// * PDO::query()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_create_db() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_create_db($database_name, $link_identifier = NULL)
{
$return_mysql_create_db = false;

// ========== MYSQL_CREATE_DB - BEGIN
// ===== ABOUT
// Create a MySQL database
//  Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_query()
//  * PDO::query()
// ===== DESCRIPTION
// mysql_create_db() attempts to create a new database on the server associated with the specified link identifier.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_create_db(string $database_name, resource $link_identifier = NULL): bool
// ===== CODE
$return_mysql_create_db = mysql_create_db(

$database_name, // string database_name - The name of the database being created.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_create_db() alternative example
// The function mysql_create_db() is deprecated. It is preferable to use mysql_query() to issue an sql CREATE DATABASE statement instead.
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// 
// $sql = 'CREATE DATABASE my_db';
// if (mysql_query($sql, $link)) {
//     echo "Database my_db created successfully\n";
// } else {
//     echo 'Error creating database: ' . mysql_error() . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Database my_db created successfully
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_createdb()
// Note: This function will not be available if the MySQL extension was built against a MySQL 4.x client library.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-create-db.php
// ========== MYSQL_CREATE_DB - END

// SYNTAX:
// bool mysql_create_db(string $database_name, resource $link_identifier = NULL)

return $return_mysql_create_db; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_CREATE_DB
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DATA_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Move internal result pointer.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_data_seek()
// * PDO::FETCH_ORI_ABS
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_data_seek() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_data_seek($result, $row_number)
{
$return_mysql_data_seek = false;

// ========== MYSQL_DATA_SEEK - BEGIN
// ===== ABOUT
// Move internal result pointer
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_data_seek()
//  * PDO::FETCH_ORI_ABS
// ===== DESCRIPTION
// mysql_data_seek() moves the internal row pointer of the MySQL result associated with the specified result identifier to point to the specified row number. The next call to a MySQL fetch function, such as mysql_fetch_assoc(), would return that row.
// row_number starts at 0. The row_number should be a value in the range from 0 to mysql_num_rows() - 1. However if the result set is empty (mysql_num_rows() == 0), a seek to 0 will fail with an E_WARNING and mysql_data_seek() will return false.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_data_seek(resource $result, int $row_number): bool
// ===== CODE
$return_mysql_data_seek = mysql_data_seek(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$row_number // int row_number - The desired row number of the new result pointer.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_data_seek() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// $db_selected = mysql_select_db('sample_db');
// if (!$db_selected) {
//     die('Could not select database: ' . mysql_error());
// }
// $query = 'SELECT last_name, first_name FROM friends';
// $result = mysql_query($query);
// if (!$result) {
//     die('Query failed: ' . mysql_error());
// }
// // fetch rows in reverse order
// for ($i = mysql_num_rows($result) - 1; $i >= 0; $i--) {
//     if (!mysql_data_seek($result, $i)) {
//         echo "Cannot seek to row $i: " . mysql_error() . "\n";
//         continue;
//     }
// 
//     if (!($row = mysql_fetch_assoc($result))) {
//         continue;
//     }
// 
//     echo $row['last_name'] . ' ' . $row['first_name'] . "<br />\n";
// }
// 
// mysql_free_result($result);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The function mysql_data_seek() can be used in conjunction only with mysql_query(), not with mysql_unbuffered_query().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-data-seek.php
// ========== MYSQL_DATA_SEEK - END

// SYNTAX:
// bool mysql_data_seek(resource $result, int $row_number)

return $return_mysql_data_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DATA_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DB_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves database name from the call to mysql_list_dbs().
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * Query: SELECT DATABASE()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_db_name() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_db_name($result, $row, $field = NULL)
{
$return_mysql_db_name = null;

// ========== MYSQL_DB_NAME - BEGIN
// ===== ABOUT
// Retrieves database name from the call to mysql_list_dbs()
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * Query: SELECT DATABASE()
// ===== DESCRIPTION
// Retrieve the database name from a call to mysql_list_dbs().
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_db_name(resource $result, int $row, mixed $field = NULL): string
// ===== CODE
$return_mysql_db_name = mysql_db_name(

$result, // resource result - The result pointer from a call to mysql_list_dbs().

$row, // int row - The index into the result set.

$field // mixed field - The field name.

); // Return Values
// Returns the database name on success, and false on failure. If false is returned, use mysql_error() to determine the nature of the error.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_db_name() example
// [php]
// error_reporting(E_ALL);
// 
// $link = mysql_connect('dbhost', 'username', 'password');
// $db_list = mysql_list_dbs($link);
// 
// $i = 0;
// $cnt = mysql_num_rows($db_list);
// while ($i < $cnt) {
//     echo mysql_db_name($db_list, $i) . "\n";
//     $i++;
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_dbname()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-db-name.php
// ========== MYSQL_DB_NAME - END

// SYNTAX:
// string mysql_db_name(resource $result, int $row, mixed $field = NULL)

return $return_mysql_db_name; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DB_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DB_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Selects a database and executes a query on it.
// 
// Warning: This function was deprecated in PHP 5.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_select_db() then the query
// * PDO::__construct()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_db_query() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_db_query($database, $query, $link_identifier = NULL)
{
$return_mysql_db_query = false;

// ========== MYSQL_DB_QUERY - BEGIN
// ===== ABOUT
// Selects a database and executes a query on it
//  Warning: This function was deprecated in PHP 5.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_select_db() then the query
//  * PDO::__construct()
// ===== DESCRIPTION
// mysql_db_query() selects a database, and executes a query on it.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_db_query(string $database, string $query, resource $link_identifier = NULL): resource|bool
// ===== CODE
$return_mysql_db_query = mysql_db_query(

$database, // string database - The name of the database that will be selected.

$query, // string query - The MySQL query.
// Data inside the query should be properly escaped.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns a positive MySQL result resource to the query result, or false on error. The function also returns true/false for INSERT/UPDATE/DELETE queries to indicate success/failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_db_query() alternative example
// [php]
// 
// if (!$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
//     echo 'Could not connect to mysql';
//     exit;
// }
// 
// if (!mysql_select_db('mysql_dbname', $link)) {
//     echo 'Could not select database';
//     exit;
// }
// 
// $sql    = 'SELECT foo FROM bar WHERE id = 42';
// $result = mysql_query($sql, $link);
// 
// if (!$result) {
//     echo "DB Error, could not query the database\n";
//     echo 'MySQL Error: ' . mysql_error();
//     exit;
// }
// 
// while ($row = mysql_fetch_assoc($result)) {
//     echo $row['foo'];
// }
// 
// mysql_free_result($result);
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Be aware that this function does NOT switch back to the database you were connected before. In other words, you can't use this function to temporarily run a sql query on another database, you would have to manually switch back. Users are strongly encouraged to use the database.table syntax in their sql queries or mysql_select_db() instead of this function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-db-query.php
// ========== MYSQL_DB_QUERY - END

// SYNTAX:
// resource|bool mysql_db_query(string $database, string $query, resource $link_identifier = NULL)

return $return_mysql_db_query; // resource|bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DB_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DROP_DB
// ============================== PUBLIC
// ============================== ABOUT
// Drop (delete) a MySQL database.
// 
// Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * Execute a DROP DATABASE query
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_drop_db() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_drop_db($database_name, $link_identifier = NULL)
{
$return_mysql_drop_db = false;

// ========== MYSQL_DROP_DB - BEGIN
// ===== ABOUT
// Drop (delete) a MySQL database
//  Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * Execute a DROP DATABASE query
// ===== DESCRIPTION
// mysql_drop_db() attempts to drop (remove) an entire database from the server associated with the specified link identifier. This function is deprecated, it is preferable to use mysql_query() to issue an sql DROP DATABASE statement instead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_drop_db(string $database_name, resource $link_identifier = NULL): bool
// ===== CODE
$return_mysql_drop_db = mysql_drop_db(

$database_name, // string database_name - The name of the database that will be deleted.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_drop_db() alternative example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// 
// $sql = 'DROP DATABASE my_db';
// if (mysql_query($sql, $link)) {
//     echo "Database my_db was successfully dropped\n";
// } else {
//     echo 'Error dropping database: ' . mysql_error() . "\n";
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: This function will not be available if the MySQL extension was built against a MySQL 4.x client library.
// Note: For backward compatibility, the following deprecated alias may be used: mysql_dropdb()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-drop-db.php
// ========== MYSQL_DROP_DB - END

// SYNTAX:
// bool mysql_drop_db(string $database_name, resource $link_identifier = NULL)

return $return_mysql_drop_db; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_DROP_DB
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ERRNO
// ============================== PUBLIC
// ============================== ABOUT
// Returns the numerical value of the error message from previous MySQL operation.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_errno()
// * PDO::errorCode()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_errno() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_errno($link_identifier = NULL)
{
$return_mysql_errno = 0;

// ========== MYSQL_ERRNO - BEGIN
// ===== ABOUT
// Returns the numerical value of the error message from previous MySQL operation
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_errno()
//  * PDO::errorCode()
// ===== DESCRIPTION
// Returns the error number from the last MySQL function.
// Errors coming back from the MySQL database backend no longer issue warnings. Instead, use mysql_errno() to retrieve the error code. Note that this function only returns the error code from the most recently executed MySQL function (not including mysql_error() and mysql_errno()), so if you want to use it, make sure you check the value before calling another MySQL function.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_errno(resource $link_identifier = NULL): int
// ===== CODE
$return_mysql_errno = mysql_errno(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the error number from the last MySQL function, or 0 (zero) if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_errno() example
// [php]
// $link = mysql_connect("localhost", "mysql_user", "mysql_password");
// 
// if (!mysql_select_db("nonexistentdb", $link)) {
//     echo mysql_errno($link) . ": " . mysql_error($link). "\n";
// }
// 
// mysql_select_db("kossu", $link);
// if (!mysql_query("SELECT * FROM nonexistenttable", $link)) {
//     echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// 1049: Unknown database 'nonexistentdb'
// 1146: Table 'kossu.nonexistenttable' doesn't exist
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-errno.php
// ========== MYSQL_ERRNO - END

// SYNTAX:
// int mysql_errno(resource $link_identifier = NULL)

return $return_mysql_errno; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ERRNO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Returns the text of the error message from previous MySQL operation.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_error()
// * PDO::errorInfo()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_error() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_error($link_identifier = NULL)
{
$return_mysql_error = null;

// ========== MYSQL_ERROR - BEGIN
// ===== ABOUT
// Returns the text of the error message from previous MySQL operation
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_error()
//  * PDO::errorInfo()
// ===== DESCRIPTION
// Returns the error text from the last MySQL function. Errors coming back from the MySQL database backend no longer issue warnings. Instead, use mysql_error() to retrieve the error text. Note that this function only returns the error text from the most recently executed MySQL function (not including mysql_error() and mysql_errno()), so if you want to use it, make sure you check the value before calling another MySQL function.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_error(resource $link_identifier = NULL): string
// ===== CODE
$return_mysql_error = mysql_error(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the error text from the last MySQL function, or '' (empty string) if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_error() example
// [php]
// $link = mysql_connect("localhost", "mysql_user", "mysql_password");
// 
// mysql_select_db("nonexistentdb", $link);
// echo mysql_errno($link) . ": " . mysql_error($link). "\n";
// 
// mysql_select_db("kossu", $link);
// mysql_query("SELECT * FROM nonexistenttable", $link);
// echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 1049: Unknown database 'nonexistentdb'
// 1146: Table 'kossu.nonexistenttable' doesn't exist
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-error.php
// ========== MYSQL_ERROR - END

// SYNTAX:
// string mysql_error(resource $link_identifier = NULL)

return $return_mysql_error; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ERROR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ESCAPE_STRING
// ============================== PUBLIC
// ============================== ABOUT
// Escapes a string for use in a mysql_query.
// 
// Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_escape_string()
// * PDO::quote()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_escape_string() - PHP_4 >= PHP_4_0_3, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_escape_string($unescaped_string)
{
$return_mysql_escape_string = null;

// ========== MYSQL_ESCAPE_STRING - BEGIN
// ===== ABOUT
// Escapes a string for use in a mysql_query
//  Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_escape_string()
//  * PDO::quote()
// ===== DESCRIPTION
// This function will escape the unescaped_string, so that it is safe to place it in a mysql_query(). This function is deprecated.
// This function is identical to mysql_real_escape_string() except that mysql_real_escape_string() takes a connection handler and escapes the string according to the current character set. mysql_escape_string() does not take a connection argument and does not respect the current charset setting.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_3, PHP_5
// ===== SYNTAX
// mysql_escape_string(string $unescaped_string): string
// ===== CODE
$return_mysql_escape_string = mysql_escape_string(

$unescaped_string // string unescaped_string - The string that is to be escaped.

); // Return Values
// Returns the escaped string.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_escape_string() example
// [php]
// $item = "Zak's Laptop";
// $escaped_item = mysql_escape_string($item);
// printf("Escaped string: %s\n", $escaped_item);
// [/php]
// The above example will output:
// [result]
// Escaped string: Zak\'s Laptop
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: mysql_escape_string() does not escape % and _.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-escape-string.php
// ========== MYSQL_ESCAPE_STRING - END

// SYNTAX:
// string mysql_escape_string(string $unescaped_string)

return $return_mysql_escape_string; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_ESCAPE_STRING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ARRAY
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a result row as an associative array, a numeric array, or both.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_array()
// * PDOStatement::fetch()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_fetch_array() - PHP_4, PHP_5
// ============================== USING CONSTANTS (1)
// MYSQL_BOTH - mysql_fetch_array()
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_fetch_array($result, $result_type = MYSQL_BOTH)
{
$return_mysql_fetch_array = null;

// ========== MYSQL_FETCH_ARRAY - BEGIN
// ===== ABOUT
// Fetch a result row as an associative array, a numeric array, or both
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_array()
//  * PDOStatement::fetch()
// ===== DESCRIPTION
// Returns an array that corresponds to the fetched row and moves the internal data pointer ahead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_fetch_array(resource $result, int $result_type = MYSQL_BOTH): array
// ===== CODE
$return_mysql_fetch_array = mysql_fetch_array(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$result_type // int result_type - The type of array that is to be fetched. It's a constant and can take the following values: MYSQL_ASSOC, MYSQL_NUM, and MYSQL_BOTH.

); // Return Values
// Returns an array of strings that corresponds to the fetched row, or false if there are no more rows. The type of returned array depends on how result_type is defined. By using MYSQL_BOTH (default), you'll get an array with both associative and number indices. Using MYSQL_ASSOC, you only get associative indices (as mysql_fetch_assoc() works), using MYSQL_NUM, you only get number indices (as mysql_fetch_row() works).
// If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you must use the numeric index of the column or make an alias for the column. For aliased columns, you cannot access the contents with the original column name.
// 
// [examples]
// Examples
// [example]
// Example #1 Query with aliased duplicate field names
// [code]
// SELECT table1.field AS foo, table2.field AS bar FROM table1, table2
// [/code]
// [/example]
// [example]
// Example #2 mysql_fetch_array() with MYSQL_NUM
// [php]
// mysql_connect("localhost", "mysql_user", "mysql_password") or
//     die("Could not connect: " . mysql_error());
// mysql_select_db("mydb");
// 
// $result = mysql_query("SELECT id, name FROM mytable");
// 
// while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
//     printf("ID: %s  Name: %s", $row[0], $row[1]);  
// }
// 
// mysql_free_result($result);
// [/php]
// [/example]
// [example]
// Example #3 mysql_fetch_array() with MYSQL_ASSOC
// [php]
// mysql_connect("localhost", "mysql_user", "mysql_password") or
//     die("Could not connect: " . mysql_error());
// mysql_select_db("mydb");
// 
// $result = mysql_query("SELECT id, name FROM mytable");
// 
// while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
//     printf("ID: %s  Name: %s", $row["id"], $row["name"]);
// }
// 
// mysql_free_result($result);
// [/php]
// [/example]
// [example]
// Example #4 mysql_fetch_array() with MYSQL_BOTH
// [php]
// mysql_connect("localhost", "mysql_user", "mysql_password") or
//     die("Could not connect: " . mysql_error());
// mysql_select_db("mydb");
// 
// $result = mysql_query("SELECT id, name FROM mytable");
// 
// while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
//     printf ("ID: %s  Name: %s", $row[0], $row["name"]);
// }
// 
// mysql_free_result($result);
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: Performance
//  An important thing to note is that using mysql_fetch_array() is not significantly slower than using mysql_fetch_row(), while it provides a significant added value.
// Note: Field names returned by this function are case-sensitive.
// Note: This function sets NULL fields to the PHP null value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-fetch-array.php
// ========== MYSQL_FETCH_ARRAY - END

// SYNTAX:
// array mysql_fetch_array(resource $result, int $result_type = MYSQL_BOTH)

return $return_mysql_fetch_array; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ARRAY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ASSOC
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a result row as an associative array.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_assoc()
// * PDOStatement::fetch(PDO::FETCH_ASSOC)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_fetch_assoc() - PHP_4 >= PHP_4_0_3, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_fetch_assoc($result)
{
$return_mysql_fetch_assoc = null;

// ========== MYSQL_FETCH_ASSOC - BEGIN
// ===== ABOUT
// Fetch a result row as an associative array
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_assoc()
//  * PDOStatement::fetch(PDO::FETCH_ASSOC)
// ===== DESCRIPTION
// Returns an associative array that corresponds to the fetched row and moves the internal data pointer ahead. mysql_fetch_assoc() is equivalent to calling mysql_fetch_array() with MYSQL_ASSOC for the optional second parameter. It only returns an associative array.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_3, PHP_5
// ===== SYNTAX
// mysql_fetch_assoc(resource $result): array
// ===== CODE
$return_mysql_fetch_assoc = mysql_fetch_assoc(

$result // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

); // Return Values
// Returns an associative array of strings that corresponds to the fetched row, or false if there are no more rows.
// If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you either need to access the result with numeric indices by using mysql_fetch_row() or add alias names. See the example at the mysql_fetch_array() description about aliases.
// 
// [examples]
// Examples
// [example]
// Example #1 An expanded mysql_fetch_assoc() example
// [php]
// 
// $conn = mysql_connect("localhost", "mysql_user", "mysql_password");
// 
// if (!$conn) {
//     echo "Unable to connect to DB: " . mysql_error();
//     exit;
// }
// 
// if (!mysql_select_db("mydbname")) {
//     echo "Unable to select mydbname: " . mysql_error();
//     exit;
// }
// 
// $sql = "SELECT id as userid, fullname, userstatus
//         FROM   sometable
//         WHERE  userstatus = 1";
// 
// $result = mysql_query($sql);
// 
// if (!$result) {
//     echo "Could not successfully run query ($sql) from DB: " . mysql_error();
//     exit;
// }
// 
// if (mysql_num_rows($result) == 0) {
//     echo "No rows found, nothing to print so am exiting";
//     exit;
// }
// 
// // While a row of data exists, put that row in $row as an associative array
// // Note: If you're expecting just one row, no need to use a loop
// // Note: If you put extract($row); inside the following loop, you'll
// //       then create $userid, $fullname, and $userstatus
// while ($row = mysql_fetch_assoc($result)) {
//     echo $row["userid"];
//     echo $row["fullname"];
//     echo $row["userstatus"];
// }
// 
// mysql_free_result($result);
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: Performance
//  An important thing to note is that using mysql_fetch_assoc() is not significantly slower than using mysql_fetch_row(), while it provides a significant added value.
// Note: Field names returned by this function are case-sensitive.
// Note: This function sets NULL fields to the PHP null value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-fetch-assoc.php
// ========== MYSQL_FETCH_ASSOC - END

// SYNTAX:
// array mysql_fetch_assoc(resource $result)

return $return_mysql_fetch_assoc; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ASSOC
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_FIELD
// ============================== PUBLIC
// ============================== ABOUT
// Get column information from a result and return as an object.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_field()
// * PDOStatement::getColumnMeta()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_fetch_field() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_fetch_field($result, $field_offset = 0)
{
$return_mysql_fetch_field = null;

// ========== MYSQL_FETCH_FIELD - BEGIN
// ===== ABOUT
// Get column information from a result and return as an object
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_field()
//  * PDOStatement::getColumnMeta()
// ===== DESCRIPTION
// Returns an object containing field information. This function can be used to obtain information about fields in the provided query result.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_fetch_field(resource $result, int $field_offset = 0): object
// ===== CODE
$return_mysql_fetch_field = mysql_fetch_field(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. If the field offset is not specified, the next field that was not yet retrieved by this function is retrieved. The field_offset starts at 0.

); // Return Values
// Returns an object containing field information. The properties of the object are:
// * name         - column name
// * table        - name of the table the column belongs to, which is the alias name if one is defined
// * max_length   - maximum length of the column
// * not_null     - 1 if the column cannot be null
// * primary_key  - 1 if the column is a primary key
// * unique_key   - 1 if the column is a unique key
// * multiple_key - 1 if the column is a non-unique key
// * numeric      - 1 if the column is numeric
// * blob         - 1 if the column is a BLOB
// * type         - the type of the column
// * unsigned     - 1 if the column is unsigned
// * zerofill     - 1 if the column is zero-filled
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_fetch_field() example
// [php]
// $conn = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$conn) {
//     die('Could not connect: ' . mysql_error());
// }
// mysql_select_db('database');
// $result = mysql_query('select * from table');
// if (!$result) {
//     die('Query failed: ' . mysql_error());
// }
// // get column metadata
// $i = 0;
// while ($i < mysql_num_fields($result)) {
//     echo "Information for column $i:<br />\n";
//     $meta = mysql_fetch_field($result, $i);
//     if (!$meta) {
//         echo "No information available<br />\n";
//     }
//     echo "<pre>
// blob:         $meta->blob
// max_length:   $meta->max_length
// multiple_key: $meta->multiple_key
// name:         $meta->name
// not_null:     $meta->not_null
// numeric:      $meta->numeric
// primary_key:  $meta->primary_key
// table:        $meta->table
// type:         $meta->type
// unique_key:   $meta->unique_key
// unsigned:     $meta->unsigned
// zerofill:     $meta->zerofill
// </pre>";
//     $i++;
// }
// mysql_free_result($result);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Field names returned by this function are case-sensitive.
// Note: If field or tablenames are aliased in the SQL query the aliased name will be returned. The original name can be retrieved for instance by using mysqli_result::fetch_field().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-fetch-field.php
// ========== MYSQL_FETCH_FIELD - END

// SYNTAX:
// object mysql_fetch_field(resource $result, int $field_offset = 0)

return $return_mysql_fetch_field; // object
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_FIELD
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_LENGTHS
// ============================== PUBLIC
// ============================== ABOUT
// Get the length of each output in a result.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_lengths()
// * PDOStatement::getColumnMeta()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_fetch_lengths() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_fetch_lengths($result)
{
$return_mysql_fetch_lengths = false;

// ========== MYSQL_FETCH_LENGTHS - BEGIN
// ===== ABOUT
// Get the length of each output in a result
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_lengths()
//  * PDOStatement::getColumnMeta()
// ===== DESCRIPTION
// Returns an array that corresponds to the lengths of each field in the last row fetched by MySQL.
// mysql_fetch_lengths() stores the lengths of each result column in the last row returned by mysql_fetch_row(), mysql_fetch_assoc(), mysql_fetch_array(), and mysql_fetch_object() in an array, starting at offset 0.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_fetch_lengths(resource $result): array|false
// ===== CODE
$return_mysql_fetch_lengths = mysql_fetch_lengths(

$result // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

); // Return Values
// An array of lengths on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysql_fetch_lengths() example
// [php]
// $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $row     = mysql_fetch_assoc($result);
// $lengths = mysql_fetch_lengths($result);
// 
// print_r($row);
// print_r($lengths);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [id] => 42
//     [email] => user@example.com
// )
// Array
// (
//     [0] => 2
//     [1] => 16
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-fetch-lengths.php
// ========== MYSQL_FETCH_LENGTHS - END

// SYNTAX:
// array|false mysql_fetch_lengths(resource $result)

return $return_mysql_fetch_lengths; // array|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_LENGTHS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_OBJECT
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a result row as an object.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_object()
// * PDOStatement::fetch(PDO::FETCH_OBJ)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_fetch_object() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_fetch_object($result, $class_name, $params)
{
$return_mysql_fetch_object = null;

// ========== MYSQL_FETCH_OBJECT - BEGIN
// ===== ABOUT
// Fetch a result row as an object
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_object()
//  * PDOStatement::fetch(PDO::FETCH_OBJ)
// ===== DESCRIPTION
// Returns an object with properties that correspond to the fetched row and moves the internal data pointer ahead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_fetch_object(resource $result, string $class_name = ?, array $params = ?): object
// ===== CODE
$return_mysql_fetch_object = mysql_fetch_object(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$class_name, // string class_name - The name of the class to instantiate, set the properties of and return. If not specified, a stdClass object is returned.

$params // array params - An optional array of parameters to pass to the constructor for class_name objects.

); // Return Values
// Returns an object with string properties that correspond to the fetched row, or false if there are no more rows.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_fetch_object() example
// [php]
// mysql_connect("hostname", "user", "password");
// mysql_select_db("mydb");
// $result = mysql_query("select * from mytable");
// while ($row = mysql_fetch_object($result)) {
//     echo $row->user_id;
//     echo $row->fullname;
// }
// mysql_free_result($result);
// [/php]
// [/example]
// [example]
// Example #2 mysql_fetch_object() example
// [php]
// class foo {
//     public $name;
// }
// 
// mysql_connect("hostname", "user", "password");
// mysql_select_db("mydb");
// 
// $result = mysql_query("select name from mytable limit 1");
// $obj = mysql_fetch_object($result, 'foo');
// var_dump($obj);
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: Performance
//  Speed-wise, the function is identical to mysql_fetch_array(), and almost as quick as mysql_fetch_row() (the difference is insignificant).
//  Note:
//  mysql_fetch_object() is similar to mysql_fetch_array(), with one difference - an object is returned, instead of an array. Indirectly, that means that you can only access the data by the field names, and not by their offsets (numbers are illegal property names).
// Note: Field names returned by this function are case-sensitive.
// Note: This function sets NULL fields to the PHP null value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-fetch-object.php
// ========== MYSQL_FETCH_OBJECT - END

// SYNTAX:
// object mysql_fetch_object(resource $result, string $class_name, array $params)

return $return_mysql_fetch_object; // object
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_OBJECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ROW
// ============================== PUBLIC
// ============================== ABOUT
// Get a result row as an enumerated array.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_row()
// * PDOStatement::fetch(PDO::FETCH_NUM)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_fetch_row() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_fetch_row($result)
{
$return_mysql_fetch_row = null;

// ========== MYSQL_FETCH_ROW - BEGIN
// ===== ABOUT
// Get a result row as an enumerated array
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_row()
//  * PDOStatement::fetch(PDO::FETCH_NUM)
// ===== DESCRIPTION
// Returns a numerical array that corresponds to the fetched row and moves the internal data pointer ahead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_fetch_row(resource $result): array
// ===== CODE
$return_mysql_fetch_row = mysql_fetch_row(

$result // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

); // Return Values
// Returns an numerical array of strings that corresponds to the fetched row, or false if there are no more rows.
// mysql_fetch_row() fetches one row of data from the result associated with the specified result identifier. The row is returned as an array. Each result column is stored in an array offset, starting at offset 0.
// 
// [examples]
// Examples
// [example]
// Example #1 Fetching one row with mysql_fetch_row()
// [php]
// $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $row = mysql_fetch_row($result);
// 
// echo $row[0]; // 42
// echo $row[1]; // the email value
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function sets NULL fields to the PHP null value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-fetch-row.php
// ========== MYSQL_FETCH_ROW - END

// SYNTAX:
// array mysql_fetch_row(resource $result)

return $return_mysql_fetch_row; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FETCH_ROW
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_FLAGS
// ============================== PUBLIC
// ============================== ABOUT
// Get the flags associated with the specified field in a result.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_field_direct() [flags]
// * PDOStatement::getColumnMeta() [flags]
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_field_flags() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_field_flags($result, $field_offset)
{
$return_mysql_field_flags = false;

// ========== MYSQL_FIELD_FLAGS - BEGIN
// ===== ABOUT
// Get the flags associated with the specified field in a result
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_field_direct() [flags]
//  * PDOStatement::getColumnMeta() [flags]
// ===== DESCRIPTION
// mysql_field_flags() returns the field flags of the specified field. The flags are reported as a single word per flag separated by a single space, so that you can split the returned value using explode().
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_field_flags(resource $result, int $field_offset): string|false
// ===== CODE
$return_mysql_field_flags = mysql_field_flags(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// Returns a string of flags associated with the result or false on failure.
// The following flags are reported, if your version of MySQL is current enough to support them: "not_null", "primary_key", "unique_key", "multiple_key", "blob", "unsigned", "zerofill", "binary", "enum", "auto_increment" and "timestamp".
// 
// [examples]
// Examples
// [example]
// Example #1 A mysql_field_flags() example
// [php]
// $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $flags = mysql_field_flags($result, 0);
// 
// echo $flags;
// print_r(explode(' ', $flags));
// [/php]
// The above example will output something similar to:
// [result]
// not_null primary_key auto_increment
// Array
// (
//     [0] => not_null
//     [1] => primary_key
//     [2] => auto_increment
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_fieldflags()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-field-flags.php
// ========== MYSQL_FIELD_FLAGS - END

// SYNTAX:
// string|false mysql_field_flags(resource $result, int $field_offset)

return $return_mysql_field_flags; // string|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_FLAGS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_LEN
// ============================== PUBLIC
// ============================== ABOUT
// Returns the length of the specified field.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_field_direct() [length]
// * PDOStatement::getColumnMeta() [len]
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_field_len() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_field_len($result, $field_offset)
{
$return_mysql_field_len = false;

// ========== MYSQL_FIELD_LEN - BEGIN
// ===== ABOUT
// Returns the length of the specified field
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_field_direct() [length]
//  * PDOStatement::getColumnMeta() [len]
// ===== DESCRIPTION
// mysql_field_len() returns the length of the specified field.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_field_len(resource $result, int $field_offset): int|false
// ===== CODE
$return_mysql_field_len = mysql_field_len(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// The length of the specified field index on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_field_len() example
// [php]
// $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// 
// // Will get the length of the id field as specified in the database
// // schema. 
// $length = mysql_field_len($result, 0);
// echo $length;
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_fieldlen()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-field-len.php
// ========== MYSQL_FIELD_LEN - END

// SYNTAX:
// int|false mysql_field_len(resource $result, int $field_offset)

return $return_mysql_field_len; // int|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_LEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Get the name of the specified field in a result.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_field_direct() [name] or [orgname]
// * PDOStatement::getColumnMeta() [name]
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_field_name() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_field_name($result, $field_offset)
{
$return_mysql_field_name = false;

// ========== MYSQL_FIELD_NAME - BEGIN
// ===== ABOUT
// Get the name of the specified field in a result
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_field_direct() [name] or [orgname]
//  * PDOStatement::getColumnMeta() [name]
// ===== DESCRIPTION
// mysql_field_name() returns the name of the specified field index.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_field_name(resource $result, int $field_offset): string|false
// ===== CODE
$return_mysql_field_name = mysql_field_name(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// The name of the specified field index on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_field_name() example
// [php]
// // The users table consists of three fields:
// //   user_id
// //   username
// //   password.
// //
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect to MySQL server: ' . mysql_error());
// }
// $dbname = 'mydb';
// $db_selected = mysql_select_db($dbname, $link);
// if (!$db_selected) {
//     die("Could not set $dbname: " . mysql_error());
// }
// $res = mysql_query('select * from users', $link);
// 
// echo mysql_field_name($res, 0) . "\n";
// echo mysql_field_name($res, 2);
// [/php]
// The above example will output:
// [result]
// user_id
// password
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Field names returned by this function are case-sensitive.
// Note: For backward compatibility, the following deprecated alias may be used: mysql_fieldname()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-field-name.php
// ========== MYSQL_FIELD_NAME - END

// SYNTAX:
// string|false mysql_field_name(resource $result, int $field_offset)

return $return_mysql_field_name; // string|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Set result pointer to a specified field offset.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_field_seek()
// * PDOStatement::fetch() using the cursor_orientation and offset parameters
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_field_seek() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_field_seek($result, $field_offset)
{
$return_mysql_field_seek = false;

// ========== MYSQL_FIELD_SEEK - BEGIN
// ===== ABOUT
// Set result pointer to a specified field offset
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_field_seek()
//  * PDOStatement::fetch() using the cursor_orientation and offset parameters
// ===== DESCRIPTION
// Seeks to the specified field offset. If the next call to mysql_fetch_field() doesn't include a field offset, the field offset specified in mysql_field_seek() will be returned.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_field_seek(resource $result, int $field_offset): bool
// ===== CODE
$return_mysql_field_seek = mysql_field_seek(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-field-seek.php
// ========== MYSQL_FIELD_SEEK - END

// SYNTAX:
// bool mysql_field_seek(resource $result, int $field_offset)

return $return_mysql_field_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_TABLE
// ============================== PUBLIC
// ============================== ABOUT
// Get name of the table the specified field is in.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_field_direct() [table] or [orgtable]
// * PDOStatement::getColumnMeta() [table]
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_field_table() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_field_table($result, $field_offset)
{
$return_mysql_field_table = null;

// ========== MYSQL_FIELD_TABLE - BEGIN
// ===== ABOUT
// Get name of the table the specified field is in
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_field_direct() [table] or [orgtable]
//  * PDOStatement::getColumnMeta() [table]
// ===== DESCRIPTION
// Returns the name of the table that the specified field is in.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_field_table(resource $result, int $field_offset): string
// ===== CODE
$return_mysql_field_table = mysql_field_table(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// The name of the table on success.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysql_field_table() example
// [php]
// $query = "SELECT account.*, country.* FROM account, country WHERE country.name = 'Portugal' AND account.country_id = country.id";
// 
// // get the result from the DB
// $result = mysql_query($query);
// 
// // Lists the table name and then the field name
// for ($i = 0; $i < mysql_num_fields($result); ++$i) {
//     $table = mysql_field_table($result, $i);
//     $field = mysql_field_name($result, $i);
// 
//     echo  "$table: $field\n";
// }
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_fieldtable()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-field-table.php
// ========== MYSQL_FIELD_TABLE - END

// SYNTAX:
// string mysql_field_table(resource $result, int $field_offset)

return $return_mysql_field_table; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_TABLE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_TYPE
// ============================== PUBLIC
// ============================== ABOUT
// Get the type of the specified field in a result.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_fetch_field_direct() [type]
// * PDOStatement::getColumnMeta() [driver:decl_type] or [pdo_type]
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_field_type() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_field_type($result, $field_offset)
{
$return_mysql_field_type = null;

// ========== MYSQL_FIELD_TYPE - BEGIN
// ===== ABOUT
// Get the type of the specified field in a result
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_fetch_field_direct() [type]
//  * PDOStatement::getColumnMeta() [driver:decl_type] or [pdo_type]
// ===== DESCRIPTION
// mysql_field_type() is similar to the mysql_field_name() function. The arguments are identical, but the field type is returned instead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_field_type(resource $result, int $field_offset): string
// ===== CODE
$return_mysql_field_type = mysql_field_type(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// The returned field type will be one of "int", "real", "string", "blob", and others as detailed in the » MySQL documentation.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_field_type() example
// [php]
// mysql_connect("localhost", "mysql_username", "mysql_password");
// mysql_select_db("mysql");
// $result = mysql_query("SELECT * FROM func");
// $fields = mysql_num_fields($result);
// $rows   = mysql_num_rows($result);
// $table  = mysql_field_table($result, 0);
// echo "Your '" . $table . "' table has " . $fields . " fields and " . $rows . " record(s)\n";
// echo "The table has the following fields:\n";
// for ($i=0; $i < $fields; $i++) {
//     $type  = mysql_field_type($result, $i);
//     $name  = mysql_field_name($result, $i);
//     $len   = mysql_field_len($result, $i);
//     $flags = mysql_field_flags($result, $i);
//     echo $type . " " . $name . " " . $len . " " . $flags . "\n";
// }
// mysql_free_result($result);
// mysql_close();
// [/php]
// The above example will output something similar to:
// [result]
// Your 'func' table has 4 fields and 1 record(s)
// The table has the following fields:
// string name 64 not_null primary_key binary
// int ret 1 not_null
// string dl 128 not_null
// string type 9 not_null enum
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_fieldtype()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-field-type.php
// ========== MYSQL_FIELD_TYPE - END

// SYNTAX:
// string mysql_field_type(resource $result, int $field_offset)

return $return_mysql_field_type; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FIELD_TYPE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FREE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Free result memory.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_free_result()
// * Assign the value of null to the PDO object, or PDOStatement::closeCursor()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_free_result() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_free_result($result)
{
$return_mysql_free_result = false;

// ========== MYSQL_FREE_RESULT - BEGIN
// ===== ABOUT
// Free result memory
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_free_result()
//  * Assign the value of null to the PDO object, or PDOStatement::closeCursor()
// ===== DESCRIPTION
// mysql_free_result() will free all memory associated with the result identifier result.
// mysql_free_result() only needs to be called if you are concerned about how much memory is being used for queries that return large result sets. All associated result memory is automatically freed at the end of the script's execution.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_free_result(resource $result): bool
// ===== CODE
$return_mysql_free_result = mysql_free_result(

$result // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

); // Return Values
// Returns true on success or false on failure.
// If a non-resource is used for the result, an error of level E_WARNING will be emitted. It's worth noting that mysql_query() only returns a resource for SELECT, SHOW, EXPLAIN, and DESCRIBE queries.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysql_free_result() example
// [php]
// $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// // Use the result, assuming we're done with it afterwards
// $row = mysql_fetch_assoc($result);
// 
// // Now we free up the result and continue on with our script
// mysql_free_result($result);
// 
// echo $row['id'];
// echo $row['email'];
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_freeresult()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-free-result.php
// ========== MYSQL_FREE_RESULT - END

// SYNTAX:
// bool mysql_free_result(resource $result)

return $return_mysql_free_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_FREE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_CLIENT_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Get MySQL client info.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_get_client_info()
// * PDO::getAttribute(PDO::ATTR_CLIENT_VERSION)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_get_client_info() - PHP_4 >= PHP_4_0_5, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_get_client_info()
{
$return_mysql_get_client_info = null;

// ========== MYSQL_GET_CLIENT_INFO - BEGIN
// ===== ABOUT
// Get MySQL client info
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_get_client_info()
//  * PDO::getAttribute(PDO::ATTR_CLIENT_VERSION)
// ===== DESCRIPTION
// mysql_get_client_info() returns a string that represents the client library version.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5
// ===== SYNTAX
// mysql_get_client_info(): string
// ===== CODE
$return_mysql_get_client_info = mysql_get_client_info(

// This function has no parameters.

); // Return Values
// The MySQL client version.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_get_client_info() example
// [php]
// printf("MySQL client info: %s\n", mysql_get_client_info());
// [/php]
// The above example will output something similar to:
// [result]
// MySQL client info: 3.23.39
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-get-client-info.php
// ========== MYSQL_GET_CLIENT_INFO - END

// SYNTAX:
// string mysql_get_client_info()

return $return_mysql_get_client_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_CLIENT_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_HOST_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Get MySQL host info.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_get_host_info()
// * PDO::getAttribute(PDO::ATTR_CONNECTION_STATUS)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_get_host_info() - PHP_4 >= PHP_4_0_5, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_get_host_info($link_identifier = NULL)
{
$return_mysql_get_host_info = false;

// ========== MYSQL_GET_HOST_INFO - BEGIN
// ===== ABOUT
// Get MySQL host info
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_get_host_info()
//  * PDO::getAttribute(PDO::ATTR_CONNECTION_STATUS)
// ===== DESCRIPTION
// Describes the type of connection in use for the connection, including the server host name.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5
// ===== SYNTAX
// mysql_get_host_info(resource $link_identifier = NULL): string|false
// ===== CODE
$return_mysql_get_host_info = mysql_get_host_info(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns a string describing the type of MySQL connection in use for the connection or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_get_host_info() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// printf("MySQL host info: %s\n", mysql_get_host_info());
// [/php]
// The above example will output something similar to:
// [result]
// MySQL host info: Localhost via UNIX socket
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-get-host-info.php
// ========== MYSQL_GET_HOST_INFO - END

// SYNTAX:
// string|false mysql_get_host_info(resource $link_identifier = NULL)

return $return_mysql_get_host_info; // string|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_HOST_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_PROTO_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Get MySQL protocol info.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_get_proto_info()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_get_proto_info() - PHP_4 >= PHP_4_0_5, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_get_proto_info($link_identifier = NULL)
{
$return_mysql_get_proto_info = false;

// ========== MYSQL_GET_PROTO_INFO - BEGIN
// ===== ABOUT
// Get MySQL protocol info
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_get_proto_info()
// ===== DESCRIPTION
// Retrieves the MySQL protocol.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5
// ===== SYNTAX
// mysql_get_proto_info(resource $link_identifier = NULL): int|false
// ===== CODE
$return_mysql_get_proto_info = mysql_get_proto_info(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the MySQL protocol on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_get_proto_info() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// printf("MySQL protocol version: %s\n", mysql_get_proto_info());
// [/php]
// The above example will output something similar to:
// [result]
// MySQL protocol version: 10
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-get-proto-info.php
// ========== MYSQL_GET_PROTO_INFO - END

// SYNTAX:
// int|false mysql_get_proto_info(resource $link_identifier = NULL)

return $return_mysql_get_proto_info; // int|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_PROTO_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_SERVER_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Get MySQL server info.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_get_server_info()
// * PDO::getAttribute(PDO::ATTR_SERVER_VERSION)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_get_server_info() - PHP_4 >= PHP_4_0_5, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_get_server_info($link_identifier = NULL)
{
$return_mysql_get_server_info = false;

// ========== MYSQL_GET_SERVER_INFO - BEGIN
// ===== ABOUT
// Get MySQL server info
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_get_server_info()
//  * PDO::getAttribute(PDO::ATTR_SERVER_VERSION)
// ===== DESCRIPTION
// Retrieves the MySQL server version.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5
// ===== SYNTAX
// mysql_get_server_info(resource $link_identifier = NULL): string|false
// ===== CODE
$return_mysql_get_server_info = mysql_get_server_info(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the MySQL server version on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_get_server_info() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// printf("MySQL server version: %s\n", mysql_get_server_info());
// [/php]
// The above example will output something similar to:
// [result]
// MySQL server version: 4.0.1-alpha
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-get-server-info.php
// ========== MYSQL_GET_SERVER_INFO - END

// SYNTAX:
// string|false mysql_get_server_info(resource $link_identifier = NULL)

return $return_mysql_get_server_info; // string|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_GET_SERVER_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Get information about the most recent query.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_info()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_info() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_info($link_identifier = NULL)
{
$return_mysql_info = null;

// ========== MYSQL_INFO - BEGIN
// ===== ABOUT
// Get information about the most recent query
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_info()
// ===== DESCRIPTION
// Returns detailed information about the last query.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_info(resource $link_identifier = NULL): string
// ===== CODE
$return_mysql_info = mysql_info(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns information about the statement on success, or false on failure. See the example below for which statements provide information, and what the returned value may look like. Statements that are not listed will return false.
// 
// [examples]
// Examples
// [example]
// Example #1 Relevant MySQL Statements
// Statements that return string values. The numbers are only for illustrating purpose; their values will correspond to the query.
// [code]
// INSERT INTO ... SELECT ...
// String format: Records: 23 Duplicates: 0 Warnings: 0 
// INSERT INTO ... VALUES (...),(...),(...)...
// String format: Records: 37 Duplicates: 0 Warnings: 0 
// LOAD DATA INFILE ...
// String format: Records: 42 Deleted: 0 Skipped: 0 Warnings: 0 
// ALTER TABLE
// String format: Records: 60 Duplicates: 0 Warnings: 0 
// UPDATE
// String format: Rows matched: 65 Changed: 65 Warnings: 0
// [/code]
// [/example]
// [/examples]
// 
// Notes
// Note: mysql_info() returns a non-false value for the INSERT ... VALUES statement only if multiple value lists are specified in the statement.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-info.php
// ========== MYSQL_INFO - END

// SYNTAX:
// string mysql_info(resource $link_identifier = NULL)

return $return_mysql_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_INSERT_ID
// ============================== PUBLIC
// ============================== ABOUT
// Get the ID generated in the last query.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_insert_id()
// * PDO::lastInsertId()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_insert_id() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_insert_id($link_identifier = NULL)
{
$return_mysql_insert_id = 0;

// ========== MYSQL_INSERT_ID - BEGIN
// ===== ABOUT
// Get the ID generated in the last query
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_insert_id()
//  * PDO::lastInsertId()
// ===== DESCRIPTION
// Retrieves the ID generated for an AUTO_INCREMENT column by the previous query (usually INSERT).
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_insert_id(resource $link_identifier = NULL): int
// ===== CODE
$return_mysql_insert_id = mysql_insert_id(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// The ID generated for an AUTO_INCREMENT column by the previous query on success, 0 if the previous query does not generate an AUTO_INCREMENT value, or false if no MySQL connection was established.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_insert_id() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// mysql_select_db('mydb');
// 
// mysql_query("INSERT INTO mytable (product) values ('kossu')");
// printf("Last inserted record has id %d\n", mysql_insert_id());
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Caution: mysql_insert_id() will convert the return type of the native MySQL C API function mysql_insert_id() to a type of long (named int in PHP). If your AUTO_INCREMENT column has a column type of BIGINT (64 bits) the conversion may result in an incorrect value. Instead, use the internal MySQL SQL function LAST_INSERT_ID() in an SQL query. For more information about PHP's maximum integer values, please see the integer documentation.
// Note: Because mysql_insert_id() acts on the last performed query, be sure to call mysql_insert_id() immediately after the query that generates the value.
// Note: The value of the MySQL SQL function LAST_INSERT_ID() always contains the most recently generated AUTO_INCREMENT value, and is not reset between queries.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-insert-id.php
// ========== MYSQL_INSERT_ID - END

// SYNTAX:
// int mysql_insert_id(resource $link_identifier = NULL)

return $return_mysql_insert_id; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_INSERT_ID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_DBS
// ============================== PUBLIC
// ============================== ABOUT
// List databases available on a MySQL server.
// 
// Warning: This function was deprecated in PHP 5.4.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * SQL Query: SHOW DATABASES
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_list_dbs() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_list_dbs($link_identifier = NULL)
{
$return_mysql_list_dbs = null;

// ========== MYSQL_LIST_DBS - BEGIN
// ===== ABOUT
// List databases available on a MySQL server
//  Warning: This function was deprecated in PHP 5.4.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * SQL Query: SHOW DATABASES
// ===== DESCRIPTION
// Returns a result pointer containing the databases available from the current mysql daemon.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_list_dbs(resource $link_identifier = NULL): resource
// ===== CODE
$return_mysql_list_dbs = mysql_list_dbs(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns a result pointer resource on success, or false on failure. Use the mysql_tablename() function to traverse this result pointer, or any function for result tables, such as mysql_fetch_array().
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_list_dbs() example
// [php]
// // Usage without mysql_list_dbs()
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// $res = mysql_query("SHOW DATABASES");
// 
// while ($row = mysql_fetch_assoc($res)) {
//     echo $row['Database'] . "\n";
// }
// 
// // Deprecated as of PHP 5.4.0
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// $db_list = mysql_list_dbs($link);
// 
// while ($row = mysql_fetch_object($db_list)) {
//      echo $row->Database . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// database1
// database2
// database3
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_listdbs()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-list-dbs.php
// ========== MYSQL_LIST_DBS - END

// SYNTAX:
// resource mysql_list_dbs(resource $link_identifier = NULL)

return $return_mysql_list_dbs; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_DBS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_FIELDS
// ============================== PUBLIC
// ============================== ABOUT
// List MySQL table fields.
// 
// Warning: This function was deprecated in PHP 5.4.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * SQL Query: SHOW COLUMNS FROM sometable
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_list_fields() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_list_fields($database_name, $table_name, $link_identifier = NULL)
{
$return_mysql_list_fields = null;

// ========== MYSQL_LIST_FIELDS - BEGIN
// ===== ABOUT
// List MySQL table fields
//  Warning: This function was deprecated in PHP 5.4.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * SQL Query: SHOW COLUMNS FROM sometable
// ===== DESCRIPTION
// Retrieves information about the given table name.
// This function is deprecated. It is preferable to use mysql_query() to issue an SQL SHOW COLUMNS FROM table [LIKE 'name'] statement instead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_list_fields(string $database_name, string $table_name, resource $link_identifier = NULL): resource
// ===== CODE
$return_mysql_list_fields = mysql_list_fields(

$database_name, // string database_name - The name of the database that's being queried.

$table_name, // string table_name - The name of the table that's being queried.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// A result pointer resource on success, or false on failure.
// The returned result can be used with mysql_field_flags(), mysql_field_len(), mysql_field_name() and mysql_field_type().
// 
// [examples]
// Examples
// [example]
// Example #1 Alternate to deprecated mysql_list_fields()
// [php]
// $result = mysql_query("SHOW COLUMNS FROM sometable");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// if (mysql_num_rows($result) > 0) {
//     while ($row = mysql_fetch_assoc($result)) {
//         print_r($row);
//     }
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [Field] => id
//     [Type] => int(7)
//     [Null] =>  
//     [Key] => PRI
//     [Default] =>
//     [Extra] => auto_increment
// )
// Array
// (
//     [Field] => email
//     [Type] => varchar(100)
//     [Null] =>
//     [Key] =>
//     [Default] =>
//     [Extra] =>
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_listfields()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-list-fields.php
// ========== MYSQL_LIST_FIELDS - END

// SYNTAX:
// resource mysql_list_fields(string $database_name, string $table_name, resource $link_identifier = NULL)

return $return_mysql_list_fields; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_FIELDS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_PROCESSES
// ============================== PUBLIC
// ============================== ABOUT
// List MySQL processes.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_thread_id()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_list_processes() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_list_processes($link_identifier = NULL)
{
$return_mysql_list_processes = false;

// ========== MYSQL_LIST_PROCESSES - BEGIN
// ===== ABOUT
// List MySQL processes
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_thread_id()
// ===== DESCRIPTION
// Retrieves the current MySQL server threads.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_list_processes(resource $link_identifier = NULL): resource|false
// ===== CODE
$return_mysql_list_processes = mysql_list_processes(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// A result pointer resource on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_list_processes() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// 
// $result = mysql_list_processes($link);
// while ($row = mysql_fetch_assoc($result)){
//     printf("%s %s %s %s %s\n", $row["Id"], $row["Host"], $row["db"],
//         $row["Command"], $row["Time"]);
// }
// mysql_free_result($result);
// [/php]
// The above example will output something similar to:
// [result]
// 1 localhost test Processlist 0
// 4 localhost mysql sleep 5
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-list-processes.php
// ========== MYSQL_LIST_PROCESSES - END

// SYNTAX:
// resource|false mysql_list_processes(resource $link_identifier = NULL)

return $return_mysql_list_processes; // resource|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_PROCESSES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_TABLES
// ============================== PUBLIC
// ============================== ABOUT
// List tables in a MySQL database.
// 
// Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
// * SQL Query: SHOW TABLES FROM dbname
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_list_tables() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_list_tables($database, $link_identifier = NULL)
{
$return_mysql_list_tables = false;

// ========== MYSQL_LIST_TABLES - BEGIN
// ===== ABOUT
// List tables in a MySQL database
//  Warning: This function was deprecated in PHP 4.3.0, and it and the entire original MySQL extension was removed in PHP 7.0.0. Instead, use either the actively developed MySQLi or PDO_MySQL extensions. See also the MySQL: choosing an API guide. Alternatives to this function include:
//  * SQL Query: SHOW TABLES FROM dbname
// ===== DESCRIPTION
// Retrieves a list of table names from a MySQL database.
// This function is deprecated. It is preferable to use mysql_query() to issue an SQL SHOW TABLES [FROM db_name] [LIKE 'pattern'] statement instead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_list_tables(string $database, resource $link_identifier = NULL): resource|false
// ===== CODE
$return_mysql_list_tables = mysql_list_tables(

$database, // string database - The name of the database

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// A result pointer resource on success or false on failure.
// Use the mysql_tablename() function to traverse this result pointer, or any function for result tables, such as mysql_fetch_array().
// 
// Changelog
// Version - Description
// 4.3.7   - This function became deprecated.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_list_tables() alternative example
// [php]
// $dbname = 'mysql_dbname';
// 
// if (!mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
//     echo 'Could not connect to mysql';
//     exit;
// }
// 
// $sql = "SHOW TABLES FROM $dbname";
// $result = mysql_query($sql);
// 
// if (!$result) {
//     echo "DB Error, could not list tables\n";
//     echo 'MySQL Error: ' . mysql_error();
//     exit;
// }
// 
// while ($row = mysql_fetch_row($result)) {
//     echo "Table: {$row[0]}\n";
// }
// 
// mysql_free_result($result);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_listtables()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-list-tables.php
// ========== MYSQL_LIST_TABLES - END

// SYNTAX:
// resource|false mysql_list_tables(string $database, resource $link_identifier = NULL)

return $return_mysql_list_tables; // resource|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_LIST_TABLES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_NUM_FIELDS
// ============================== PUBLIC
// ============================== ABOUT
// Get number of fields in result.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_num_fields()
// * PDOStatement::columnCount()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_num_fields() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_num_fields($result)
{
$return_mysql_num_fields = false;

// ========== MYSQL_NUM_FIELDS - BEGIN
// ===== ABOUT
// Get number of fields in result
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_num_fields()
//  * PDOStatement::columnCount()
// ===== DESCRIPTION
// Retrieves the number of fields from a query.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_num_fields(resource $result): int|false
// ===== CODE
$return_mysql_num_fields = mysql_num_fields(

$result // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

); // Return Values
// Returns the number of fields in the result set resource on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysql_num_fields() example
// [php]
// $result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// 
// // returns 2 because id,email === two fields
// echo mysql_num_fields($result);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_numfields()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-num-fields.php
// ========== MYSQL_NUM_FIELDS - END

// SYNTAX:
// int|false mysql_num_fields(resource $result)

return $return_mysql_num_fields; // int|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_NUM_FIELDS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_NUM_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Get number of rows in result.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_num_rows()
// * mysqli_stmt_num_rows()
// * PDOStatement::rowCount()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_num_rows() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_num_rows($result)
{
$return_mysql_num_rows = false;

// ========== MYSQL_NUM_ROWS - BEGIN
// ===== ABOUT
// Get number of rows in result
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_num_rows()
//  * mysqli_stmt_num_rows()
//  * PDOStatement::rowCount()
// ===== DESCRIPTION
// Retrieves the number of rows from a result set. This command is only valid for statements like SELECT or SHOW that return an actual result set. To retrieve the number of rows affected by a INSERT, UPDATE, REPLACE or DELETE query, use mysql_affected_rows().
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_num_rows(resource $result): int|false
// ===== CODE
$return_mysql_num_rows = mysql_num_rows(

$result // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

); // Return Values
// The number of rows in a result set on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_num_rows() example
// [php]
// 
// $link = mysql_connect("localhost", "mysql_user", "mysql_password");
// mysql_select_db("database", $link);
// 
// $result = mysql_query("SELECT * FROM table1", $link);
// $num_rows = mysql_num_rows($result);
// 
// echo "$num_rows Rows\n";
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If you use mysql_unbuffered_query(), mysql_num_rows() will not return the correct value until all the rows in the result set have been retrieved.
// Note: For backward compatibility, the following deprecated alias may be used: mysql_numrows()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-num-rows.php
// ========== MYSQL_NUM_ROWS - END

// SYNTAX:
// int|false mysql_num_rows(resource $result)

return $return_mysql_num_rows; // int|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_NUM_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_PCONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Open a persistent connection to a MySQL server.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_connect() with p: host prefix
// * PDO::__construct() with PDO::ATTR_PERSISTENT as a driver option
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_pconnect() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_pconnect($server, $username, $password, $client_flags = 0)
{
$return_mysql_pconnect = null;

// ========== MYSQL_PCONNECT - BEGIN
// ===== ABOUT
// Open a persistent connection to a MySQL server
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_connect() with p: host prefix
//  * PDO::__construct() with PDO::ATTR_PERSISTENT as a driver option
// ===== DESCRIPTION
// Establishes a persistent connection to a MySQL server.
// mysql_pconnect() acts very much like mysql_connect() with two major differences.
// First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, username and password. If one is found, an identifier for it will be returned instead of opening a new connection.
// Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (mysql_close() will not close links established by mysql_pconnect()).
// This type of link is therefore called 'persistent'.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_pconnect(
//    string $server = ini_get("mysql.default_host"),
//    string $username = ini_get("mysql.default_user"),
//    string $password = ini_get("mysql.default_password"),
//    int $client_flags = 0
// ): resource
// ===== CODE
$return_mysql_pconnect = mysql_pconnect(

$server, // string server - The MySQL server. It can also include a port number. e.g. "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for the localhost.
// If the PHP directive mysql.default_host is undefined (default), then the default value is 'localhost:3306'

$username, // string username - The username. Default value is the name of the user that owns the server process.

$password, // password password - The password. Default value is an empty password.

$client_flags // int client_flags - The client_flags parameter can be a combination of the following constants: 128 (enable LOAD DATA LOCAL handling), MYSQL_CLIENT_SSL, MYSQL_CLIENT_COMPRESS, MYSQL_CLIENT_IGNORE_SPACE or MYSQL_CLIENT_INTERACTIVE.

); // Return Values
// Returns a MySQL persistent link identifier on success, or false on failure.
// 
// Notes
// Note: Note, that these kind of links only work if you are using a module version of PHP. See the Persistent Database Connections section for more information.
// Warning: Using persistent connections can require a bit of tuning of your Apache and MySQL configurations to ensure that you do not exceed the number of connections allowed by MySQL.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-30)
// URL: https://www.php.net/manual/en/function.mysql-pconnect.php
// ========== MYSQL_PCONNECT - END

// SYNTAX:
// resource mysql_pconnect(string $server, string $username, string $password, int $client_flags = 0)

return $return_mysql_pconnect; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_PCONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_PING
// ============================== PUBLIC
// ============================== ABOUT
// Ping a server connection or reconnect if there is no connection.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_ping()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_ping() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_ping($link_identifier = NULL)
{
$return_mysql_ping = false;

// ========== MYSQL_PING - BEGIN
// ===== ABOUT
// Ping a server connection or reconnect if there is no connection
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_ping()
// ===== DESCRIPTION
// Checks whether or not the connection to the server is working. If it has gone down, an automatic reconnection is attempted. This function can be used by scripts that remain idle for a long while, to check whether or not the server has closed the connection and reconnect if necessary.
// Note: Automatic reconnection is disabled by default in versions of MySQL >= 5.0.3.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_ping(resource $link_identifier = NULL): bool
// ===== CODE
$return_mysql_ping = mysql_ping(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns true if the connection to the server MySQL server is working, otherwise false.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysql_ping() example
// [php]
// set_time_limit(0);
// 
// $conn = mysql_connect('localhost', 'mysqluser', 'mypass');
// $db   = mysql_select_db('mydb');
// 
// // Assuming this query will take a long time
// $result = mysql_query($sql);
// if (!$result) {
//     echo 'Query #1 failed, exiting.';
//     exit;
// }
// 
// // Make sure the connection is still alive, if not, try to reconnect
// if (!mysql_ping($conn)) {
//     echo 'Lost connection, exiting after query #1';
//     exit;
// }
// mysql_free_result($result);
// 
// // So the connection is still alive, let's run another query
// $result2 = mysql_query($sql2);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-ping.php
// ========== MYSQL_PING - END

// SYNTAX:
// bool mysql_ping(resource $link_identifier = NULL)

return $return_mysql_ping; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_PING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Send a MySQL query.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_query()
// * PDO::query()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_query() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_query($query, $link_identifier = NULL)
{
$return_mysql_query = null;

// ========== MYSQL_QUERY - BEGIN
// ===== ABOUT
// Send a MySQL query
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_query()
//  * PDO::query()
// ===== DESCRIPTION
// mysql_query() sends a unique query (multiple queries are not supported) to the currently active database on the server that's associated with the specified link_identifier.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_query(string $query, resource $link_identifier = NULL): mixed
// ===== CODE
$return_mysql_query = mysql_query(

$query, // string query - An SQL query
// The query string should not end with a semicolon. Data inside the query should be properly escaped.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset, mysql_query() returns a resource on success, or false on error.
// For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc, mysql_query() returns true on success or false on error.
// The returned result resource should be passed to mysql_fetch_array(), and other functions for dealing with result tables, to access the returned data.
// Use mysql_num_rows() to find out how many rows were returned for a SELECT statement or mysql_affected_rows() to find out how many rows were affected by a DELETE, INSERT, REPLACE, or UPDATE statement.
// mysql_query() will also fail and return false if the user does not have permission to access the table(s) referenced by the query.
// 
// [examples]
// Examples
// [example]
// Example #1 Invalid Query
// The following query is syntactically invalid, so mysql_query() fails and returns false.
// [php]
// $result = mysql_query('SELECT * WHERE 1=1');
// if (!$result) {
//     die('Invalid query: ' . mysql_error());
// }
// 
// [/php]
// [/example]
// [example]
// Example #2 Valid Query
// The following query is valid, so mysql_query() returns a resource.
// [php]
// // This could be supplied by a user, for example
// $firstname = 'fred';
// $lastname  = 'fox';
// 
// // Formulate Query
// // This is the best way to perform an SQL query
// // For more examples, see mysql_real_escape_string()
// $query = sprintf("SELECT firstname, lastname, address, age FROM friends 
//     WHERE firstname='%s' AND lastname='%s'",
//     mysql_real_escape_string($firstname),
//     mysql_real_escape_string($lastname));
// 
// // Perform Query
// $result = mysql_query($query);
// 
// // Check result
// // This shows the actual query sent to MySQL, and the error. Useful for debugging.
// if (!$result) {
//     $message  = 'Invalid query: ' . mysql_error() . "\n";
//     $message .= 'Whole query: ' . $query;
//     die($message);
// }
// 
// // Use result
// // Attempting to print $result won't allow access to information in the resource
// // One of the mysql result functions must be used
// // See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
// while ($row = mysql_fetch_assoc($result)) {
//     echo $row['firstname'];
//     echo $row['lastname'];
//     echo $row['address'];
//     echo $row['age'];
// }
// 
// // Free the resources associated with the result set
// // This is done automatically at the end of the script
// mysql_free_result($result);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-query.php
// ========== MYSQL_QUERY - END

// SYNTAX:
// mixed mysql_query(string $query, resource $link_identifier = NULL)

return $return_mysql_query; // mixed
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_REAL_ESCAPE_STRING
// ============================== PUBLIC
// ============================== ABOUT
// Escapes special characters in a string for use in an SQL statement.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_real_escape_string()
// * PDO::quote()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_real_escape_string() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_real_escape_string($unescaped_string, $link_identifier = NULL)
{
$return_mysql_real_escape_string = null;

// ========== MYSQL_REAL_ESCAPE_STRING - BEGIN
// ===== ABOUT
// Escapes special characters in a string for use in an SQL statement
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_real_escape_string()
//  * PDO::quote()
// ===== DESCRIPTION
// Escapes special characters in the unescaped_string, taking into account the current character set of the connection so that it is safe to place it in a mysql_query(). If binary data is to be inserted, this function must be used.
// mysql_real_escape_string() calls MySQL's library function mysql_real_escape_string, which prepends backslashes to the following characters: \x00, \n, \r, \, ', " and \x1a.
// This function must always (with few exceptions) be used to make data safe before sending a query to MySQL.
//  Caution:
//  Security: the default character set
//  The character set must be set either at the server level, or with the API function mysql_set_charset() for it to affect mysql_real_escape_string(). See the concepts section on character sets for more information.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_real_escape_string(string $unescaped_string, resource $link_identifier = NULL): string
// ===== CODE
$return_mysql_real_escape_string = mysql_real_escape_string(

$unescaped_string, // string unescaped_string - The string that is to be escaped.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns the escaped string, or false on error.
// 
// Errors/Exceptions
// Executing this function without a MySQL connection present will also emit E_WARNING level PHP errors. Only execute this function with a valid MySQL connection present.
// 
// [examples]
// Examples
// [example]
// Example #1 Simple mysql_real_escape_string() example
// [php]
// // Connect
// $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
//     OR die(mysql_error());
// 
// // Query
// $query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
//             mysql_real_escape_string($user),
//             mysql_real_escape_string($password));
// [/php]
// [/example]
// [example]
// Example #2 mysql_real_escape_string() requires a connection example
// This example demonstrates what happens if a MySQL connection is not present when calling this function.
// [php]
// // We have not connected to MySQL
// 
// $lastname  = "O'Reilly";
// $_lastname = mysql_real_escape_string($lastname);
// 
// $query = "SELECT * FROM actors WHERE last_name = '$_lastname'";
// 
// var_dump($_lastname);
// var_dump($query);
// [/php]
// The above example will output something similar to:
// [result]
// Warning: mysql_real_escape_string(): No such file or directory in /this/test/script.php on line 5
// Warning: mysql_real_escape_string(): A link to the server could not be established in /this/test/script.php on line 5
// 
// bool(false)
// string(41) "SELECT * FROM actors WHERE last_name = ''"
// [/result]
// [/example]
// [example]
// Example #3 An example SQL Injection Attack
// [php]
// // We didn't check $_POST['password'], it could be anything the user wanted! For example:
// $_POST['username'] = 'aidan';
// $_POST['password'] = "' OR ''='";
// 
// // Query database to check if there are any matching users
// $query = "SELECT * FROM users WHERE user='{$_POST['username']}' AND password='{$_POST['password']}'";
// mysql_query($query);
// 
// // This means the query sent to MySQL would be:
// echo $query;
// [/php]
// The query sent to MySQL:
// [result]
// SELECT * FROM users WHERE user='aidan' AND password='' OR ''=''
// [/result]
// This would allow anyone to log in without a valid password.
// [/example]
// [/examples]
// 
// Notes
// Note: A MySQL connection is required before using mysql_real_escape_string() otherwise an error of level E_WARNING is generated, and false is returned. If link_identifier isn't defined, the last MySQL connection is used.
// Note: If this function is not used to escape data, the query is vulnerable to SQL Injection Attacks.
// Note: mysql_real_escape_string() does not escape % and _. These are wildcards in MySQL if combined with LIKE, GRANT, or REVOKE.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-real-escape-string.php
// ========== MYSQL_REAL_ESCAPE_STRING - END

// SYNTAX:
// string mysql_real_escape_string(string $unescaped_string, resource $link_identifier = NULL)

return $return_mysql_real_escape_string; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_REAL_ESCAPE_STRING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Get result data.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_data_seek() in conjunction with mysqli_field_seek() and mysqli_fetch_field()
// * PDOStatement::fetchColumn()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_result() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_result($result, $row, $field = 0)
{
$return_mysql_result = null;

// ========== MYSQL_RESULT - BEGIN
// ===== ABOUT
// Get result data
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_data_seek() in conjunction with mysqli_field_seek() and mysqli_fetch_field()
//  * PDOStatement::fetchColumn()
// ===== DESCRIPTION
// Retrieves the contents of one cell from a MySQL result set.
// When working on large result sets, you should consider using one of the functions that fetch an entire row (specified below). As these functions return the contents of multiple cells in one function call, they're MUCH quicker than mysql_result(). Also, note that specifying a numeric offset for the field argument is much quicker than specifying a fieldname or tablename.fieldname argument.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_result(resource $result, int $row, mixed $field = 0): string
// ===== CODE
$return_mysql_result = mysql_result(

$result, // resource result - The result resource that is being evaluated. This result comes from a call to mysql_query().

$row, // int row - The row number from the result that's being retrieved. Row numbers start at 0.

$field // mixed field - The name or offset of the field being retrieved.
// It can be the field's offset, the field's name, or the field's table dot field name (tablename.fieldname). If the column name has been aliased ('select foo as bar from...'), use the alias instead of the column name. If undefined, the first field is retrieved.

); // Return Values
// The contents of one cell from a MySQL result set on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_result() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// if (!mysql_select_db('database_name')) {
//     die('Could not select database: ' . mysql_error());
// }
// $result = mysql_query('SELECT name FROM work.employee');
// if (!$result) {
//     die('Could not query:' . mysql_error());
// }
// echo mysql_result($result, 2); // outputs third employee's name
// 
// mysql_close($link);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Calls to mysql_result() should not be mixed with calls to other functions that deal with the result set.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-result.php
// ========== MYSQL_RESULT - END

// SYNTAX:
// string mysql_result(resource $result, int $row, mixed $field = 0)

return $return_mysql_result; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_SELECT_DB
// ============================== PUBLIC
// ============================== ABOUT
// Select a MySQL database.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_select_db()
// * PDO::__construct() (part of dsn)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_select_db() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_select_db($database_name, $link_identifier = NULL)
{
$return_mysql_select_db = false;

// ========== MYSQL_SELECT_DB - BEGIN
// ===== ABOUT
// Select a MySQL database
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_select_db()
//  * PDO::__construct() (part of dsn)
// ===== DESCRIPTION
// Sets the current active database on the server that's associated with the specified link identifier. Every subsequent call to mysql_query() will be made on the active database.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_select_db(string $database_name, resource $link_identifier = NULL): bool
// ===== CODE
$return_mysql_select_db = mysql_select_db(

$database_name, // string database_name - The name of the database that is to be selected.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_select_db() example
// [php]
// 
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// if (!$link) {
//     die('Not connected : ' . mysql_error());
// }
// 
// // make foo the current db
// $db_selected = mysql_select_db('foo', $link);
// if (!$db_selected) {
//     die ('Can\'t use foo : ' . mysql_error());
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: mysql_selectdb()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-select-db.php
// ========== MYSQL_SELECT_DB - END

// SYNTAX:
// bool mysql_select_db(string $database_name, resource $link_identifier = NULL)

return $return_mysql_select_db; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_SELECT_DB
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_SET_CHARSET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the client character set.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_set_charset()
// * PDO: Add charset to the connection string, such as charset=utf8
// ============================== SUPPORT
// PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_set_charset() - PHP_5 >= PHP_5_2_3
// ============================== CODE
/*
function php_database_vendor_mysql_mysql_mysql_set_charset($charset, $link_identifier = NULL)
{
$return_mysql_set_charset = false;

// ========== MYSQL_SET_CHARSET - BEGIN
// ===== ABOUT
// Sets the client character set
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_set_charset()
//  * PDO: Add charset to the connection string, such as charset=utf8
// ===== DESCRIPTION
// Sets the default character set for the current connection.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_3
// ===== SYNTAX
// mysql_set_charset(string $charset, resource $link_identifier = NULL): bool
// ===== CODE
$return_mysql_set_charset = mysql_set_charset(

$charset, // string charset - A valid character set name.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: This function requires MySQL 5.0.7 or later.
// Note: This is the preferred way to change the charset. Using mysql_query() to set it (such as SET NAMES utf8) is not recommended. See the MySQL character set concepts section for more information.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-08-27)
// URL: https://www.php.net/manual/en/function.mysql-set-charset.php
// ========== MYSQL_SET_CHARSET - END

// SYNTAX:
// bool mysql_set_charset(string $charset, resource $link_identifier = NULL)

return $return_mysql_set_charset; // bool
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_SET_CHARSET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_STAT
// ============================== PUBLIC
// ============================== ABOUT
// Get current system status.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_stat()
// * PDO::getAttribute(PDO::ATTR_SERVER_INFO)
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_stat() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_stat($link_identifier = NULL)
{
$return_mysql_stat = null;

// ========== MYSQL_STAT - BEGIN
// ===== ABOUT
// Get current system status
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_stat()
//  * PDO::getAttribute(PDO::ATTR_SERVER_INFO)
// ===== DESCRIPTION
// mysql_stat() returns the current server status.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_stat(resource $link_identifier = NULL): string
// ===== CODE
$return_mysql_stat = mysql_stat(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// Returns a string with the status for uptime, threads, queries, open tables, flush tables and queries per second. For a complete list of other status variables, you have to use the SHOW STATUS SQL command. If link_identifier is invalid, null is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_stat() example
// [php]
// $link   = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// $status = explode('  ', mysql_stat($link));
// print_r($status);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Uptime: 5380
//     [1] => Threads: 2
//     [2] => Questions: 1321299
//     [3] => Slow queries: 0
//     [4] => Opens: 26
//     [5] => Flush tables: 1
//     [6] => Open tables: 17
//     [7] => Queries per second avg: 245.595
// )
// [/result]
// [/example]
// [example]
// Example #2 Alternative mysql_stat() example
// [php]
// $link   = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// $result = mysql_query('SHOW STATUS', $link);
// while ($row = mysql_fetch_assoc($result)) {
//     echo $row['Variable_name'] . ' = ' . $row['Value'] . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// back_log = 50
// basedir = /usr/local/
// bdb_cache_size = 8388600
// bdb_log_buffer_size = 32768
// bdb_home = /var/db/mysql/
// bdb_max_lock = 10000
// bdb_logdir =
// bdb_shared_data = OFF
// bdb_tmpdir = /var/tmp/
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-stat.php
// ========== MYSQL_STAT - END

// SYNTAX:
// string mysql_stat(resource $link_identifier = NULL)

return $return_mysql_stat; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_STAT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_TABLENAME
// ============================== PUBLIC
// ============================== ABOUT
// Get table name of field.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * SQL Query: SHOW TABLES
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_tablename() - PHP_4, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_tablename($result, $i)
{
$return_mysql_tablename = false;

// ========== MYSQL_TABLENAME - BEGIN
// ===== ABOUT
// Get table name of field
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * SQL Query: SHOW TABLES
// ===== DESCRIPTION
// Retrieves the table name from a result.
// This function is deprecated. It is preferable to use mysql_query() to issue an SQL SHOW TABLES [FROM db_name] [LIKE 'pattern'] statement instead.
// ===== SUPPORTED
// PHP_4, PHP_5
// ===== SYNTAX
// mysql_tablename(resource $result, int $i): string|false
// ===== CODE
$return_mysql_tablename = mysql_tablename(

$result, // resource result - A result pointer resource that's returned from mysql_list_tables().

$i // int i - The integer index (row/table number)

); // Return Values
// The name of the table on success or false on failure.
// Use the mysql_tablename() function to traverse this result pointer, or any function for result tables, such as mysql_fetch_array().
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_tablename() example
// [php]
// mysql_connect("localhost", "mysql_user", "mysql_password");
// $result = mysql_list_tables("mydb");
// $num_rows = mysql_num_rows($result);
// for ($i = 0; $i < $num_rows; $i++) {
//     echo "Table: ", mysql_tablename($result, $i), "\n";
// }
// 
// mysql_free_result($result);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The mysql_num_rows() function may be used to determine the number of tables in the result pointer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-tablename.php
// ========== MYSQL_TABLENAME - END

// SYNTAX:
// string|false mysql_tablename(resource $result, int $i)

return $return_mysql_tablename; // string|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_TABLENAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_THREAD_ID
// ============================== PUBLIC
// ============================== ABOUT
// Return the current thread ID.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * mysqli_thread_id()
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_thread_id() - PHP_4 >= PHP_4_3_0, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_thread_id($link_identifier = NULL)
{
$return_mysql_thread_id = false;

// ========== MYSQL_THREAD_ID - BEGIN
// ===== ABOUT
// Return the current thread ID
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * mysqli_thread_id()
// ===== DESCRIPTION
// Retrieves the current thread ID. If the connection is lost, and a reconnect with mysql_ping() is executed, the thread ID will change. This means only retrieve the thread ID when needed.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5
// ===== SYNTAX
// mysql_thread_id(resource $link_identifier = NULL): int|false
// ===== CODE
$return_mysql_thread_id = mysql_thread_id(

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// The thread ID on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysql_thread_id() example
// [php]
// $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
// $thread_id = mysql_thread_id($link);
// if ($thread_id){
//     printf("current thread id is %d\n", $thread_id);
// }
// [/php]
// The above example will output something similar to:
// [result]
// current thread id is 73
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysql-thread-id.php
// ========== MYSQL_THREAD_ID - END

// SYNTAX:
// int|false mysql_thread_id(resource $link_identifier = NULL)

return $return_mysql_thread_id; // int|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_THREAD_ID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_UNBUFFERED_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Send an SQL query to MySQL without fetching and buffering the result rows.
// 
// Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
// * See: Buffered and Unbuffered queries
// ============================== SUPPORT
// PHP_4 - PHP_5
// ============================== USING FUNCTIONS (1)
// mysql_unbuffered_query() - PHP_4 >= PHP_4_0_6, PHP_5
// ============================== CODE
function php_database_vendor_mysql_mysql_mysql_unbuffered_query($query, $link_identifier = NULL)
{
$return_mysql_unbuffered_query = null;

// ========== MYSQL_UNBUFFERED_QUERY - BEGIN
// ===== ABOUT
// Send an SQL query to MySQL without fetching and buffering the result rows
//  Warning: This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0. Instead, the MySQLi or PDO_MySQL extension should be used. See also MySQL: choosing an API guide. Alternatives to this function include:
//  * See: Buffered and Unbuffered queries
// ===== DESCRIPTION
// mysql_unbuffered_query() sends the SQL query query to MySQL without automatically fetching and buffering the result rows as mysql_query() does. This saves a considerable amount of memory with SQL queries that produce large result sets, and you can start working on the result set immediately after the first row has been retrieved as you don't have to wait until the complete SQL query has been performed. To use mysql_unbuffered_query() while multiple database connections are open, you must specify the optional parameter link_identifier to identify which connection you want to use.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_6, PHP_5
// ===== SYNTAX
// mysql_unbuffered_query(string $query, resource $link_identifier = NULL): resource
// ===== CODE
$return_mysql_unbuffered_query = mysql_unbuffered_query(

$query, // string query - The SQL query to execute.
// Data inside the query should be properly escaped.

$link_identifier // resource link_identifier - The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

); // Return Values
// For SELECT, SHOW, DESCRIBE or EXPLAIN statements, mysql_unbuffered_query() returns a resource on success, or false on error.
// For other type of SQL statements, UPDATE, DELETE, DROP, etc, mysql_unbuffered_query() returns true on success or false on error.
// 
// Notes
// Note: The benefits of mysql_unbuffered_query() come at a cost: you cannot use mysql_num_rows() and mysql_data_seek() on a result set returned from mysql_unbuffered_query(), until all rows are fetched. You also have to fetch all result rows from an unbuffered SQL query before you can send a new SQL query to MySQL, using the same link_identifier.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/function.mysql-unbuffered-query.php
// ========== MYSQL_UNBUFFERED_QUERY - END

// SYNTAX:
// resource mysql_unbuffered_query(string $query, resource $link_identifier = NULL)

return $return_mysql_unbuffered_query; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL_MYSQL_UNBUFFERED_QUERY
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQL
// ==============================
?>