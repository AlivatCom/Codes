<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_ABSTRACT_ODBC - BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_AUTOCOMMIT - int|bool php_database_abstract_odbc_odbc_autocommit(resource $odbc, bool $enable = null)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_BINMODE - bool php_database_abstract_odbc_odbc_binmode(resource $statement, int $mode)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CLOSE_ALL - void php_database_abstract_odbc_odbc_close_all()
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CLOSE - void php_database_abstract_odbc_odbc_close(resource $odbc)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COLUMNPRIVILEGES - resource|false php_database_abstract_odbc_odbc_columnprivileges(resource $odbc, string $catalog, string $schema, string $table, string $column)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COLUMNS - resource|false php_database_abstract_odbc_odbc_columns(resource $odbc, string $catalog = null, string $schema = null, string $table = null, string $column = null)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COMMIT - bool php_database_abstract_odbc_odbc_commit(resource $odbc)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECT - resource|false php_database_abstract_odbc_odbc_connect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER)
// OFFLINE | PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_IS_QUOTED - bool php_database_abstract_odbc_odbc_connection_string_is_quoted(string $str)
// OFFLINE | PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_QUOTE - string php_database_abstract_odbc_odbc_connection_string_quote(string $str)
// OFFLINE | PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_SHOULD_QUOTE - bool php_database_abstract_odbc_odbc_connection_string_should_quote(string $str)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CURSOR - string|false php_database_abstract_odbc_odbc_cursor(resource $statement)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_DATA_SOURCE - array|false php_database_abstract_odbc_odbc_data_source(resource $odbc, int $fetch_type)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_DO - resource|false php_database_abstract_odbc_odbc_do(resource $odbc, string $query)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ERROR - string php_database_abstract_odbc_odbc_error(resource $odbc = null)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ERRORMSG - string php_database_abstract_odbc_odbc_errormsg(resource $odbc = null)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_EXEC - resource|false php_database_abstract_odbc_odbc_exec(resource $odbc, string $query)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_EXECUTE - bool php_database_abstract_odbc_odbc_execute(resource $statement, array $params = array())
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_ARRAY - array|false php_database_abstract_odbc_odbc_fetch_array(resource $statement, int $row = -1)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_INTO - int|false php_database_abstract_odbc_odbc_fetch_into(resource $statement, array& $array, int $row = 0)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_OBJECT - stdClass|false php_database_abstract_odbc_odbc_fetch_object(resource $statement, int $row = -1)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_ROW - bool php_database_abstract_odbc_odbc_fetch_row(resource $statement, int $row = null)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_LEN - int|false php_database_abstract_odbc_odbc_field_len(resource $statement, int $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_NAME - string|false php_database_abstract_odbc_odbc_field_name(resource $statement, int $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_NUM - int|false php_database_abstract_odbc_odbc_field_num(resource $statement, string $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_PRECISION - int|false php_database_abstract_odbc_odbc_field_precision(resource $statement, int $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_SCALE - int|false php_database_abstract_odbc_odbc_field_scale(resource $statement, int $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_TYPE - string|false php_database_abstract_odbc_odbc_field_type(resource $statement, int $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FOREIGNKEYS - resource|false php_database_abstract_odbc_odbc_foreignkeys(resource $odbc, string $pk_catalog, string $pk_schema, string $pk_table, string $fk_catalog, string $fk_schema, string $fk_table)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FREE_RESULT - bool php_database_abstract_odbc_odbc_free_result(resource $statement)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_GETTYPEINFO - resource|false php_database_abstract_odbc_odbc_gettypeinfo(resource $odbc, int $data_type = 0)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_LONGREADLEN - bool php_database_abstract_odbc_odbc_longreadlen(resource $statement, int $length)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NEXT_RESULT - bool php_database_abstract_odbc_odbc_next_result(resource $statement)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NUM_FIELDS - int php_database_abstract_odbc_odbc_num_fields(resource $statement)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NUM_ROWS - int php_database_abstract_odbc_odbc_num_rows(resource $statement)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PCONNECT - resource|false php_database_abstract_odbc_odbc_pconnect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PREPARE - resource|false php_database_abstract_odbc_odbc_prepare(resource $odbc, string $query)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PRIMARYKEYS - resource|false php_database_abstract_odbc_odbc_primarykeys(resource $odbc, string $catalog, string $schema, string $table)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PROCEDURECOLUMNS - resource|false php_database_abstract_odbc_odbc_procedurecolumns(resource $odbc, string $catalog = null, string $schema = null, string $procedure = null, string $column = null)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PROCEDURES - resource|false php_database_abstract_odbc_odbc_procedures(resource $odbc, string $catalog = null, string $schema = null, string $procedure = null)
// OFFLINE | PHP_DATABASE_ABSTRACT_ODBC_ODBC_RESULT_ALL -  int|false php_database_abstract_odbc_odbc_result_all(resource $statement, string $format = "")
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_RESULT - string|bool|null php_database_abstract_odbc_odbc_result(resource $statement, string|int $field)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ROLLBACK - bool php_database_abstract_odbc_odbc_rollback(resource $odbc)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_SETOPTION - bool php_database_abstract_odbc_odbc_setoption(resource $odbc, int $which, int $option, int $value)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_SPECIALCOLUMNS - resource|false php_database_abstract_odbc_odbc_specialcolumns(resource $odbc, int $type, string $catalog, string $schema, string $table, int $scope, int $nullable)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_STATISTICS - resource|false php_database_abstract_odbc_odbc_statistics(resource $odbc, string $catalog, string $schema, string $table, int $unique, int $accuracy)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_TABLEPRIVILEGES - resource|false php_database_abstract_odbc_odbc_tableprivileges(resource $odbc, string $catalog, string $schema, string $table)
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_TABLES - resource|false php_database_abstract_odbc_odbc_tables(resource $odbc, string $catalog = null, string $schema = null, string $table = null, string $types = null)
// PHP_DATABASE_ABSTRACT_ODBC - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// NOT_BUNDLED (To access any of the supported databases you need to have the required libraries installed.)
// ============================== USING FUNCTIONS (48)
// odbc_autocommit() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_binmode() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_close_all() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_close() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_columnprivileges() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_columns() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_commit() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_connect() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | odbc_connection_string_is_quoted() - PHP_8 >= PHP_8_2_0
// OFFLINE | odbc_connection_string_quote() - PHP_8 >= PHP_8_2_0
// OFFLINE | odbc_connection_string_should_quote() - PHP_8 >= PHP_8_2_0
// odbc_cursor() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_data_source() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// odbc_do() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_error() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// odbc_errormsg() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// odbc_exec() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_execute() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_fetch_array() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// odbc_fetch_into() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_fetch_object() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// odbc_fetch_row() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_field_len() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_field_name() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_field_num() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_field_precision() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_field_scale() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_field_type() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_foreignkeys() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_free_result() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_gettypeinfo() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_longreadlen() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_next_result() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// odbc_num_fields() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_num_rows() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_pconnect() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_prepare() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_primarykeys() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_procedurecolumns() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_procedures() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | odbc_result_all() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_result() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_rollback() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_setoption() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_specialcolumns() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_statistics() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_tableprivileges() - PHP_4, PHP_5, PHP_7, PHP_8
// odbc_tables() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (9)
// int
// bool
// resource
// void
// false
// string
// array
// stdClass
// null
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_DATABASE_ABSTRACT_ODBC   
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Abstraction Layers / ODBC - ODBC (Unified)
// URL: https://www.php.net/manual/en/book.uodbc.php
// ============================== DESCRIPTION
// ODBC_UNIFIED
// 
// ODBC_UNIFIED - BEGIN
// ODBC (Unified)
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// ODBC_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// In addition to normal ODBC support, the Unified ODBC functions in PHP allow you to access several databases that have borrowed the semantics of the ODBC API to implement their own API. Instead of maintaining multiple database drivers that were all nearly identical, these drivers have been unified into a single set of ODBC functions.
// The following databases are supported by the Unified ODBC functions: > Adabas D, > IBM DB2, > iODBC, > Solid, and > Sybase SQL Anywhere.
// Note: With the exception of iODBC, there is no ODBC involved when connecting to the above databases. The functions that you use to speak natively to them just happen to share the same names and syntax as the ODBC functions. However, building PHP with iODBC support enables you to use any ODBC-compliant drivers with your PHP applications. More information on iODBC, is available at > www.iodbc.org with the alternative unixODBC available at > www.unixodbc.org.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/intro.uodbc.php
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
// To access any of the supported databases you need to have the required libraries installed.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/uodbc.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// --with-adabas[=DIR]      - Include Adabas D support. DIR is the Adabas base install directory, defaults to /usr/local.
// --with-sapdb[=DIR]       - Include SAP DB support. DIR is SAP DB base install directory, defaults to /usr/local.
// --with-solid[=DIR]       - Include Solid support. DIR is the Solid base install directory, defaults to /usr/local/solid.
// --with-ibm-db2[=DIR]     - Include IBM DB2 support. DIR is the DB2 base install directory, defaults to /home/db2inst1/sqllib.
// --with-empress[=DIR]     - Include Empress support. DIR is the Empress base install directory, defaults to $EMPRESSPATH. This option only supports Empress Version 8.60 and above.
// --with-empress-bcs[=DIR] - Include "Empress Local Access" support. DIR is the Empress base install directory, defaults to $EMPRESSPATH. This option only supports Empress Version 8.60 and above.
// --with-birdstep[=DIR]    - Include Birdstep support. DIR is the Birdstep base install directory, defaults to /usr/local/birdstep.
// --with-custom-odbc[=DIR] - Include a user defined ODBC support. The DIR is ODBC install base directory, which defaults to /usr/local. Make sure to define CUSTOM_ODBC_LIBS and have some odbc.h in your include dirs. E.g., you should define following for Sybase SQL Anywhere 5.5.00 on QNX, prior to run configure script:
//    CPPFLAGS="-DODBC_QNX -DSQLANY_BUG"
//    LDFLAGS=-lunix
//    CUSTOM_ODBC_LIBS="-ldblib -lodbc".
// --with-iodbc[=DIR]       - Include iODBC support. DIR is the iODBC base install directory, defaults to /usr/local.
// --with-esoob[=DIR]       - Include Easysoft OOB support. DIR is the OOB base install directory, defaults to /usr/local/easysoft/oob/client.
// --with-unixODBC[=DIR]    - Include unixODBC support. DIR is the unixODBC base install directory, defaults to /usr/local.
// --with-openlink[=DIR]    - Include OpenLink ODBC support. DIR is the OpenLink base install directory, defaults to /usr/local. This is the same as iODBC.
// --with-dbmaker[=DIR]     - Include DBMaker support. DIR is the DBMaker base install directory, defaults to where the latest version of DBMaker is installed (such as /home/dbmaker/3.6).
// 
// Windows users must enable php_odbc.dll in order to use this extension.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/odbc.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Unified ODBC Configuration Options
// Name                    | Default | Changeable | Changelog
// odbc.default_db *       | NULL    | INI_ALL    |
// odbc.default_user *     | NULL    | INI_ALL    |
// odbc.default_pw *       | NULL    | INI_ALL    |
// odbc.allow_persistent   | "1"     | INI_SYSTEM |
// odbc.check_persistent   | "1"     | INI_SYSTEM |
// odbc.max_persistent     | "-1"    | INI_SYSTEM |
// odbc.max_links          | "-1"    | INI_SYSTEM |
// odbc.defaultlrl         | "4096"  | INI_ALL    |
// odbc.defaultbinmode     | "1"     | INI_ALL    |
// odbc.default_cursortype | "3"     | INI_ALL    |
// Note: Entries marked with * are not implemented yet.
// 
// For further details and definitions of the INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// odbc.default_db string      - ODBC data source to use if none is specified in odbc_connect() or odbc_pconnect().
// odbc.default_user string    - User name to use if none is specified in odbc_connect() or odbc_pconnect().
// odbc.default_pw string      - Password to use if none is specified in odbc_connect() or odbc_pconnect().
// odbc.allow_persistent bool  - Whether to allow persistent ODBC connections.
// odbc.check_persistent bool  - Check that a connection is still valid before reuse.
// odbc.max_persistent int     - The maximum number of persistent ODBC connections per process.
// odbc.max_links int          - The maximum number of ODBC connections per process, including persistent connections.
// odbc.defaultlrl int         - Handling of LONG fields. Specifies the number of bytes returned to variables. See odbc_longreadlen() for details.
// When an int is used, the value is measured in bytes. Shorthand notation, as described in this FAQ, may also be used.
// odbc.defaultbinmode int     - Handling of binary data. See odbc_binmode() for details.
// odbc.default_cursortype int - Controls the ODBC cursor model. Possible values are SQL_CURSOR_FORWARD_ONLY, SQL_CURSOR_KEYSET_DRIVEN, SQL_CURSOR_DYNAMIC and SQL_CURSOR_STATIC (default).
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/odbc.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension defines two resource types: an ODBC connection identifier and an ODBC result identifier.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/uodbc.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/uodbc.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// ODBC_TYPE (string)
// ODBC_BINMODE_PASSTHRU (int)
// ODBC_BINMODE_RETURN (int)
// ODBC_BINMODE_CONVERT (int)
// SQL_ODBC_CURSORS (int)
// SQL_CUR_USE_DRIVER (int)
// SQL_CUR_USE_IF_NEEDED (int)
// SQL_CUR_USE_ODBC (int)
// SQL_CONCURRENCY (int)
// SQL_CONCUR_READ_ONLY (int)
// SQL_CONCUR_LOCK (int)
// SQL_CONCUR_ROWVER (int)
// SQL_CONCUR_VALUES (int)
// SQL_CURSOR_TYPE (int)
// SQL_CURSOR_FORWARD_ONLY (int)
// SQL_CURSOR_KEYSET_DRIVEN (int)
// SQL_CURSOR_DYNAMIC (int)
// SQL_CURSOR_STATIC (int)
// SQL_KEYSET_SIZE (int)
// SQL_CHAR (int)
// SQL_VARCHAR (int)
// SQL_LONGVARCHAR (int)
// SQL_DECIMAL (int)
// SQL_NUMERIC (int)
// SQL_BIT (int)
// SQL_TINYINT (int)
// SQL_SMALLINT (int)
// SQL_INTEGER (int)
// SQL_BIGINT (int)
// SQL_REAL (int)
// SQL_FLOAT (int)
// SQL_DOUBLE (int)
// SQL_BINARY (int)
// SQL_VARBINARY (int)
// SQL_LONGVARBINARY (int)
// SQL_DATE (int)
// SQL_TIME (int)
// SQL_TIMESTAMP (int)
// SQL_TYPE_DATE (int)
// SQL_TYPE_TIME (int)
// SQL_TYPE_TIMESTAMP (int)
// SQL_BEST_ROWID (int)
// SQL_ROWVER (int)
// SQL_SCOPE_CURROW (int)
// SQL_SCOPE_TRANSACTION (int)
// SQL_SCOPE_SESSION (int)
// SQL_NO_NULLS (int)
// SQL_NULLABLE (int)
// SQL_INDEX_UNIQUE (int)
// SQL_INDEX_ALL (int)
// SQL_ENSURE (int)
// SQL_QUICK (int)
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/uodbc.constants.php
// PREDEFINED_CONSTANTS - END
// 
// ODBC_FUNCTIONS - BEGIN
// ODBC Functions
// 
// Table of Contents
// * odbc_autocommit                     - Toggle autocommit behaviour
// * odbc_binmode                        - Handling of binary column data
// * odbc_close_all                      - Close all ODBC connections
// * odbc_close                          - Close an ODBC connection
// * odbc_columnprivileges               - Lists columns and associated privileges for the given table
// * odbc_columns                        - Lists the column names in specified tables
// * odbc_commit                         - Commit an ODBC transaction
// * odbc_connect                        - Connect to a datasource
// * odbc_connection_string_is_quoted    - Determines if an ODBC connection string value is quoted
// * odbc_connection_string_quote        - Quotes an ODBC connection string value
// * odbc_connection_string_should_quote - Determines if an ODBC connection string value should be quoted
// * odbc_cursor                         - Get cursorname
// * odbc_data_source                    - Returns information about available DSNs
// * odbc_do                             - Alias of odbc_exec
// * odbc_error                          - Get the last error code
// * odbc_errormsg                       - Get the last error message
// * odbc_exec                           - Directly execute an SQL statement
// * odbc_execute                        - Execute a prepared statement
// * odbc_fetch_array                    - Fetch a result row as an associative array
// * odbc_fetch_into                     - Fetch one result row into array
// * odbc_fetch_object                   - Fetch a result row as an object
// * odbc_fetch_row                      - Fetch a row
// * odbc_field_len                      - Get the length (precision) of a field
// * odbc_field_name                     - Get the columnname
// * odbc_field_num                      - Return column number
// * odbc_field_precision                - Alias of odbc_field_len
// * odbc_field_scale                    - Get the scale of a field
// * odbc_field_type                     - Datatype of a field
// * odbc_foreignkeys                    - Retrieves a list of foreign keys
// * odbc_free_result                    - Free resources associated with a result
// * odbc_gettypeinfo                    - Retrieves information about data types supported by the data source
// * odbc_longreadlen                    - Handling of LONG columns
// * odbc_next_result                    - Checks if multiple results are available
// * odbc_num_fields                     - Number of columns in a result
// * odbc_num_rows                       - Number of rows in a result
// * odbc_pconnect                       - Open a persistent database connection
// * odbc_prepare                        - Prepares a statement for execution
// * odbc_primarykeys                    - Gets the primary keys for a table
// * odbc_procedurecolumns               - Retrieve information about parameters to procedures
// * odbc_procedures                     - Get the list of procedures stored in a specific data source
// * odbc_result_all                     - Print result as HTML table
// * odbc_result                         - Get result data
// * odbc_rollback                       - Rollback a transaction
// * odbc_setoption                      - Adjust ODBC settings
// * odbc_specialcolumns                 - Retrieves special columns
// * odbc_statistics                     - Retrieve statistics about a table
// * odbc_tableprivileges                - Lists tables and the privileges associated with each table
// * odbc_tables                         - Get the list of table names stored in a specific data source
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/ref.uodbc.php
// ODBC_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/book.uodbc.php
// ODBC_UNIFIED - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_AUTOCOMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Toggle autocommit behaviour.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_autocommit() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_autocommit($odbc, $enable = null)
{
$return_odbc_autocommit = false;

// ========== ODBC_AUTOCOMMIT - BEGIN
// ===== ABOUT
// Toggle autocommit behaviour
// ===== DESCRIPTION
// Toggles autocommit behaviour.
// By default, auto-commit is on for a connection. Disabling auto-commit is equivalent with starting a transaction.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_autocommit(resource $odbc, bool $enable = null): int|bool
// ===== CODE
$return_odbc_autocommit = odbc_autocommit(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$enable // bool enable - If enable is true, auto-commit is enabled, if it is false auto-commit is disabled. If null is passed, this function returns the auto-commit status for odbc.

); // Return Values
// Without the enable parameter, this function returns auto-commit status for odbc. Non-zero is returned if auto-commit is on, 0 if it is off, or false if an error occurs.
// If enable is set, this function returns true on success and false on failure.
// 
// Changelog
// Version - Description
// 8.3.0   - enable is now nullable.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-autocommit.php
// ========== ODBC_AUTOCOMMIT - END

// SYNTAX:
// int|bool odbc_autocommit(resource $odbc, bool $enable = null)

return $return_odbc_autocommit; // int|bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_AUTOCOMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_BINMODE
// ============================== PUBLIC
// ============================== ABOUT
// Handling of binary column data.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_binmode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_binmode($statement, $mode)
{
$return_odbc_binmode = false;

// ========== ODBC_BINMODE - BEGIN
// ===== ABOUT
// Handling of binary column data
// ===== DESCRIPTION
// Controls handling of binary column data. ODBC SQL types affected are BINARY, VARBINARY, and LONGVARBINARY. The default mode can be set using the uodbc.defaultbinmode php.ini directive.
// When binary SQL data is converted to character C data (ODBC_BINMODE_CONVERT), each byte (8 bits) of source data is represented as two ASCII characters. These characters are the ASCII character representation of the number in its hexadecimal form. For example, a binary 00000001 is converted to "01" and a binary 11111111 is converted to "FF".
// While the handling of BINARY and VARBINARY columns only depend on the binmode, the handling of LONGVARBINARY columns also depends on the longreadlen as well:
// LONGVARBINARY handling
// binmode               | longreadlen | result
// ODBC_BINMODE_PASSTHRU | 0           | passthru
// ODBC_BINMODE_RETURN   | 0           | passthru
// ODBC_BINMODE_CONVERT  | 0           | passthru
// ODBC_BINMODE_PASSTHRU | >0          | passthru
// ODBC_BINMODE_RETURN   | >0          | return as is
// ODBC_BINMODE_CONVERT  | >0          | return as char
// If odbc_fetch_into() is used, passthru means that an empty string is returned for these columns. If odbc_result() is used, passthru means that the data are sent directly to the client (i.e. printed).
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_binmode(resource $statement, int $mode): bool
// ===== CODE
$return_odbc_binmode = odbc_binmode(

$statement, // resource statement - The result identifier.
// If statement is 0, the settings apply as default for new results.

$mode // int mode - Possible values for mode are:
// * ODBC_BINMODE_PASSTHRU: Passthru BINARY data
// * ODBC_BINMODE_RETURN: Return as is
// * ODBC_BINMODE_CONVERT: Convert to char and return
// Note: Handling of binary long columns is also affected by odbc_longreadlen().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-binmode.php
// ========== ODBC_BINMODE - END

// SYNTAX:
// bool odbc_binmode(resource $statement, int $mode)

return $return_odbc_binmode; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_BINMODE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CLOSE_ALL
// ============================== PUBLIC
// ============================== ABOUT
// Close all ODBC connections.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_close_all() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_close_all()
{

// ========== ODBC_CLOSE_ALL - BEGIN
// ===== ABOUT
// Close all ODBC connections
// ===== DESCRIPTION
// odbc_close_all() will close down all connections to database server(s).
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_close_all(): void
// ===== CODE
odbc_close_all(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// Notes
// Note: This function will fail if there are open transactions on a connection. This connection will remain open in this case.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-close-all.php
// ========== ODBC_CLOSE_ALL - END

// SYNTAX:
// void odbc_close_all()

// return: void
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CLOSE_ALL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close an ODBC connection.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_close() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_close($odbc)
{

// ========== ODBC_CLOSE - BEGIN
// ===== ABOUT
// Close an ODBC connection
// ===== DESCRIPTION
// Closes down the connection to the database server.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_close(resource $odbc): void
// ===== CODE
odbc_close(

$odbc // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

); // Return Values
// No value is returned.
// 
// Notes
// Note: This function will fail if there are open transactions on this connection. The connection will remain open in this case.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-close.php
// ========== ODBC_CLOSE - END

// SYNTAX:
// void odbc_close(resource $odbc)

// return: void
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COLUMNPRIVILEGES
// ============================== PUBLIC
// ============================== ABOUT
// Lists columns and associated privileges for the given table.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_columnprivileges() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_columnprivileges($odbc, $catalog, $schema, $table, $column)
{
$return_odbc_columnprivileges = false;

// ========== ODBC_COLUMNPRIVILEGES - BEGIN
// ===== ABOUT
// Lists columns and associated privileges for the given table
// ===== DESCRIPTION
// Lists columns and associated privileges for the given table.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_columnprivileges(
//    resource $odbc,
//    ?string $catalog,
//    string $schema,
//    string $table,
//    string $column
// ): resource|false
// ===== CODE
$return_odbc_columnprivileges = odbc_columnprivileges(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$table, // string table - The table name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$column // string column - The column name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

); // Return Values
// Returns an ODBC result identifier or false on failure. This result identifier can be used to fetch a list of columns and associated privileges.
// The result set has the following columns:
// * TABLE_CAT
// * TABLE_SCHEM
// * TABLE_NAME
// * COLUMN_NAME
// * GRANTOR
// * GRANTEE
// * PRIVILEGE
// * IS_GRANTABLE
// Drivers can report additional columns.
// The result set is ordered by TABLE_CAT, TABLE_SCHEM, TABLE_NAME, COLUMN_NAME and PRIVILEGE.
// 
// [examples]
// Examples
// [example]
// Example #1 List Privileges for a Column
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $privileges = odbc_columnprivileges($conn, 'TutorialDB', 'dbo', 'test', 'id');
// while (($row = odbc_fetch_array($privileges))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [TABLE_CAT] => TutorialDB
//     [TABLE_SCHEM] => dbo
//     [TABLE_NAME] => test
//     [COLUMN_NAME] => id
//     [GRANTOR] => dbo
//     [GRANTEE] => dbo
//     [PRIVILEGE] => INSERT
//     [IS_GRANTABLE] => YES
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-columnprivileges.php
// ========== ODBC_COLUMNPRIVILEGES - END

// SYNTAX:
// resource|false odbc_columnprivileges(resource $odbc, string $catalog, string $schema, string $table, string $column)

return $return_odbc_columnprivileges; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COLUMNPRIVILEGES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COLUMNS
// ============================== PUBLIC
// ============================== ABOUT
// Lists the column names in specified tables.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_columns() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_columns($odbc, $catalog = null, $schema = null, $table = null, $column = null)
{
$return_odbc_columns = false;

// ========== ODBC_COLUMNS - BEGIN
// ===== ABOUT
// Lists the column names in specified tables
// ===== DESCRIPTION
// Lists all columns in the requested range.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_columns(
//    resource $odbc,
//    ?string $catalog = null,
//    ?string $schema = null,
//    ?string $table = null,
//    ?string $column = null
// ): resource|false
// ===== CODE
$return_odbc_columns = odbc_columns(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$table, // string table - The table name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$column // string column - The column name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

); // Return Values
// Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * TABLE_CAT
// * TABLE_SCHEM
// * TABLE_NAME
// * COLUMN_NAME
// * DATA_TYPE
// * TYPE_NAME
// * COLUMN_SIZE
// * BUFFER_LENGTH
// * DECIMAL_DIGITS
// * NUM_PREC_RADIX
// * NULLABLE
// * REMARKS
// * COLUMN_DEF
// * SQL_DATA_TYPE
// * SQL_DATETIME_SUB
// * CHAR_OCTET_LENGTH
// * ORDINAL_POSITION
// * IS_NULLABLE
// Drivers can report additional columns.
// The result set is ordered by TABLE_CAT, TABLE_SCHEM, TABLE_NAME and ORDINAL_POSITION.
// 
// Changelog
// Version - Description
// 8.0.0   - schema, table and column are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 List Columns of a Table
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $columns = odbc_columns($conn, 'TutorialDB', 'dbo', 'test', '%');
// while (($row = odbc_fetch_array($columns))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [TABLE_CAT] => TutorialDB
//     [TABLE_SCHEM] => dbo
//     [TABLE_NAME] => TEST
//     [COLUMN_NAME] => id
//     [DATA_TYPE] => 4
//     [TYPE_NAME] => int
//     [COLUMN_SIZE] => 10
//     [BUFFER_LENGTH] => 4
//     [DECIMAL_DIGITS] => 0
//     [NUM_PREC_RADIX] => 10
//     [NULLABLE] => 0
//     [REMARKS] =>
//     [COLUMN_DEF] =>
//     [SQL_DATA_TYPE] => 4
 //    [SQL_DATETIME_SUB] =>
//     [CHAR_OCTET_LENGTH] =>
//     [ORDINAL_POSITION] => 1
//     [IS_NULLABLE] => NO
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-columns.php
// ========== ODBC_COLUMNS - END

// SYNTAX:
// resource|false odbc_columns(resource $odbc, string $catalog = null, string $schema = null, string $table = null, string $column = null)

return $return_odbc_columns; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COLUMNS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Commit an ODBC transaction.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_commit() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_commit($odbc)
{
$return_odbc_commit = false;

// ========== ODBC_COMMIT - BEGIN
// ===== ABOUT
// Commit an ODBC transaction
// ===== DESCRIPTION
// Commits all pending transactions on the connection.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_commit(resource $odbc): bool
// ===== CODE
$return_odbc_commit = odbc_commit(

$odbc // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-commit.php
// ========== ODBC_COMMIT - END

// SYNTAX:
// bool odbc_commit(resource $odbc)

return $return_odbc_commit; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_COMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Connect to a datasource.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_connect() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SQL_CUR_USE_DRIVER - odbc_connect()
// ============================== CODE
function php_database_abstract_odbc_odbc_connect($dsn, $user, $password, $cursor_option = SQL_CUR_USE_DRIVER)
{
$return_odbc_connect = false;

// ========== ODBC_CONNECT - BEGIN
// ===== ABOUT
// Connect to a datasource
// ===== DESCRIPTION
// The connection id returned by this functions is needed by other ODBC functions. You can have multiple connections open at once as long as they either use different db or different credentials.
// With some ODBC drivers, executing a complex stored procedure may fail with an error similar to: "Cannot open a cursor on a stored procedure that has anything other than a single select statement in it". Using SQL_CUR_USE_ODBC may avoid that error. Also, some drivers don't support the optional row_number parameter in odbc_fetch_row(). SQL_CUR_USE_ODBC might help in that case, too.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_connect(
//    string $dsn,
//    string $user,
//    string $password,
//    int $cursor_option = SQL_CUR_USE_DRIVER
// ): resource|false
// ===== CODE
$return_odbc_connect = odbc_connect(

$dsn, // string dsn - The database source name for the connection. Alternatively, a DSN-less connection string can be used.

$user, // string user - The username.

$password, // string password - The password.

$cursor_option // int cursor_option - This sets the type of cursor to be used for this connection. This parameter is not normally needed, but can be useful for working around problems with some ODBC drivers.
// The following constants are defined for cursortype:
// * SQL_CUR_USE_IF_NEEDED
// * SQL_CUR_USE_ODBC
// * SQL_CUR_USE_DRIVER

); // Return Values
// Returns an ODBC connection, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DSN-less connections
// [php]
// // Microsoft SQL Server using the SQL Native Client 10.0 ODBC Driver - allows connection to SQL 7, 2000, 2005 and 2008
// $connection = odbc_connect("Driver={SQL Server Native Client 10.0};Server=$server;Database=$database;", $user, $password);
// 
// // Microsoft Access
// $connection = odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=$mdbFilename", $user, $password);
// 
// // Microsoft Excel
// $excelFile = realpath('C:/ExcelData.xls');
// $excelDir = dirname($excelFile);
// $connection = odbc_connect("Driver={Microsoft Excel Driver (*.xls)};DriverId=790;Dbq=$excelFile;DefaultDir=$excelDir" , '', '');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-connect.php
// ========== ODBC_CONNECT - END

// SYNTAX:
// resource|false odbc_connect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER)

return $return_odbc_connect; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_IS_QUOTED
// ============================== OFFLINE
// ============================== ABOUT
// Determines if an ODBC connection string value is quoted.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_connection_string_is_quoted() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_database_abstract_odbc_odbc_connection_string_is_quoted($str)
{
$return_odbc_connection_string_is_quoted = false;

// ========== ODBC_CONNECTION_STRING_IS_QUOTED - BEGIN
// ===== ABOUT
// Determines if an ODBC connection string value is quoted
// ===== DESCRIPTION
// Determines if a string is properly quoted for an ODBC connection string value. ODBC connection string quoting is performed using curly braces, and ending braces within a string must be escaped through repeating them twice, similar to SQL quoting.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// odbc_connection_string_is_quoted(string $str): bool
// ===== CODE
$return_odbc_connection_string_is_quoted = odbc_connection_string_is_quoted(

$str // string str - The string to check for quoting.

); // Return Values
// true if quoted properly, false if not.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-10)
// URL: https://www.php.net/manual/en/function.odbc-connection-string-is-quoted.php
// ========== ODBC_CONNECTION_STRING_IS_QUOTED - END

// SYNTAX:
// bool odbc_connection_string_is_quoted(string $str)

return $return_odbc_connection_string_is_quoted; // bool
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_IS_QUOTED
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_QUOTE
// ============================== OFFLINE
// ============================== ABOUT
// Quotes an ODBC connection string value.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_connection_string_quote() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_database_abstract_odbc_odbc_connection_string_quote($str)
{
$return_odbc_connection_string_quote = null;

// ========== ODBC_CONNECTION_STRING_QUOTE - BEGIN
// ===== ABOUT
// Quotes an ODBC connection string value
// ===== DESCRIPTION
// Quotes a value for a connection string, according to ODBC rules. That is, it will be surrounded by quotes, and any ending curly braces will be escaped. This should be done for any connection string values that come from user input. Not doing so can lead to issues with parsing the connection string, or values being injected into the connection string.
// Note that this function does not check if the string is already quoted, nor if the string needs quoting. For that, call odbc_connection_string_is_quoted() and odbc_connection_string_should_quote().
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// odbc_connection_string_quote(string $str): string
// ===== CODE
$return_odbc_connection_string_quote = odbc_connection_string_quote(

$str // string str - The unquoted string.

); // Return Values
// A quoted string, surrounded by curly braces, and properly escaped.
// 
// [examples]
// Examples
// [example]
// Example #1 odbc_connection_string_quote() example
// This example quotes a string, then puts it in a connection string. Note that the string is quoted, and the ending quote character in the middle of the string has been escaped.
// [php]
// $value = odbc_connection_string_quote("foo}bar");
// $connection_string = "DSN=PHP;UserValue=$value";
// echo $connection_string;
// [/php]
// The above example will output something similar to:
// [result]
// DSN=PHP;UserValue={foo}}bar}
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-connection-string-quote.php
// ========== ODBC_CONNECTION_STRING_QUOTE - END

// SYNTAX:
// string odbc_connection_string_quote(string $str)

return $return_odbc_connection_string_quote; // string
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_QUOTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_SHOULD_QUOTE
// ============================== OFFLINE
// ============================== ABOUT
// Determines if an ODBC connection string value should be quoted.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_connection_string_should_quote() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_database_abstract_odbc_odbc_connection_string_should_quote($str)
{
$return_odbc_connection_string_should_quote = false;

// ========== ODBC_CONNECTION_STRING_SHOULD_QUOTE - BEGIN
// ===== ABOUT
// Determines if an ODBC connection string value should be quoted
// ===== DESCRIPTION
// Determines if a string needs to be quoted for an ODBC connection string value; that is, if it contains special characters.
// Note that this does not check if the string is already quoted; an already quoted string will contain characters that will make this function return true. You should call odbc_connection_string_is_quoted() to check.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// odbc_connection_string_should_quote(string $str): bool
// ===== CODE
$return_odbc_connection_string_should_quote = odbc_connection_string_should_quote(

$str // string str - The string to check for.

); // Return Values
// true if the string should be quoted; false otherwise.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-connection-string-should-quote.php
// ========== ODBC_CONNECTION_STRING_SHOULD_QUOTE - END

// SYNTAX:
// bool odbc_connection_string_should_quote(string $str)

return $return_odbc_connection_string_should_quote; // bool
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CONNECTION_STRING_SHOULD_QUOTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CURSOR
// ============================== PUBLIC
// ============================== ABOUT
// Get cursorname.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_cursor() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_cursor($statement)
{
$return_odbc_cursor = false;

// ========== ODBC_CURSOR - BEGIN
// ===== ABOUT
// Get cursorname
// ===== DESCRIPTION
// Gets the cursorname for the given result_id.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_cursor(resource $statement): string|false
// ===== CODE
$return_odbc_cursor = odbc_cursor(

$statement // resource statement - The result identifier.

); // Return Values
// Returns the cursor name, as a string, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-cursor.php
// ========== ODBC_CURSOR - END

// SYNTAX:
// string|false odbc_cursor(resource $statement)

return $return_odbc_cursor; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_CURSOR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_DATA_SOURCE
// ============================== PUBLIC
// ============================== ABOUT
// Returns information about available DSNs.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_data_source() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_data_source($odbc, $fetch_type)
{
$return_odbc_data_source = false;

// ========== ODBC_DATA_SOURCE - BEGIN
// ===== ABOUT
// Returns information about available DSNs
// ===== DESCRIPTION
// This function will return the list of available DSN (after calling it several times).
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_data_source(resource $odbc, int $fetch_type): array|false
// ===== CODE
$return_odbc_data_source = odbc_data_source(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$fetch_type // int fetch_type - The fetch_type can be one of two constant types: SQL_FETCH_FIRST, SQL_FETCH_NEXT. Use SQL_FETCH_FIRST the first time this function is called, thereafter use the SQL_FETCH_NEXT.

); // Return Values
// Returns false on error, an array upon success, and null after fetching the last available DSN.
// 
// [examples]
// Examples
// [example]
// Example #1 List available DSNs
// [php]
// $conn = odbc_connect('dsn', 'user', 'pass');
// $dsn_info = odbc_data_source($conn, SQL_FETCH_FIRST);
// while ($dsn_info) {
//     print_r($dsn_info);
//     $dsn_info = odbc_data_source($conn, SQL_FETCH_NEXT);
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [server] => dsn
//     [description] => ODBC Driver 17 for SQL Server
// )
// Array
// (
//     [server] => other_dsn
//     [description] => Microsoft Access Driver (*.mdb, *.accdb)
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-data-source.php
// ========== ODBC_DATA_SOURCE - END

// SYNTAX:
// array|false odbc_data_source(resource $odbc, int $fetch_type)

return $return_odbc_data_source; // array|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_DATA_SOURCE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_DO
// ============================== PUBLIC
// ============================== ABOUT
// odbc_do - Alias of odbc_exec().
// 
// Directly execute an SQL statement.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_do() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_do($odbc, $query)
{
$return_odbc_do = false;

// ========== ODBC_DO - BEGIN
// ===== ABOUT
// odbc_do - Alias of odbc_exec()
// ===== DESCRIPTION
// This function is an alias of: odbc_exec().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_odbc_do = odbc_do(

$odbc, // resource odbc

$query // string query

); // Return
// resource|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-do.php
// ========== ODBC_DO - END

// ========== ODBC_EXEC - BEGIN
// ===== ABOUT
// Directly execute an SQL statement
// ===== DESCRIPTION
// Sends an SQL statement to the database server.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_exec(resource $odbc, string $query): resource|false
// ===== CODE
// $return_odbc_exec = odbc_exec(

// $odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

// $query // string query - The SQL statement.

// ); // Return Values
// Returns an ODBC result identifier if the SQL command was executed successfully, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - flags was removed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-exec.php
// ========== ODBC_EXEC - END

// SYNTAX:
// resource|false odbc_do(resource $odbc, string $query)

return $return_odbc_do; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_DO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Get the last error code.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_error() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_error($odbc = null)
{
$return_odbc_error = null;

// ========== ODBC_ERROR - BEGIN
// ===== ABOUT
// Get the last error code
// ===== DESCRIPTION
// Returns a six-digit ODBC state, or an empty string if there has been no errors.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_error(?resource $odbc = null): string
// ===== CODE
$return_odbc_error = odbc_error(

$odbc // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

); // Return Values
// If odbc is specified, the last state of that connection is returned, else the last state of any connection is returned.
// This function returns meaningful value only if last odbc query failed (i.e. odbc_exec() returned false).
// 
// Changelog
// Version - Description
// 8.0.0   - odbc is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-error.php
// ========== ODBC_ERROR - END

// SYNTAX:
// string odbc_error(resource $odbc = null)

return $return_odbc_error; // string
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ERROR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ERRORMSG
// ============================== PUBLIC
// ============================== ABOUT
// Get the last error message.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_errormsg() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_errormsg($odbc = null)
{
$return_odbc_errormsg = null;

// ========== ODBC_ERRORMSG - BEGIN
// ===== ABOUT
// Get the last error message
// ===== DESCRIPTION
// Returns a string containing the last ODBC error message, or an empty string if there has been no errors.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_errormsg(?resource $odbc = null): string
// ===== CODE
$return_odbc_errormsg = odbc_errormsg(

$odbc // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

); // Return Values
// If odbc is specified, the last state of that connection is returned, else the last state of any connection is returned.
// This function returns meaningful value only if last odbc query failed (i.e. odbc_exec() returned false).
// 
// Changelog
// Version - Description
// 8.0.0   - odbc is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-errormsg.php
// ========== ODBC_ERRORMSG - END

// SYNTAX:
// string odbc_errormsg(resource $odbc = null)

return $return_odbc_errormsg; // string
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ERRORMSG
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_EXEC
// ============================== PUBLIC
// ============================== ABOUT
// Directly execute an SQL statement.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_exec() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_exec($odbc, $query)
{
$return_odbc_exec = false;

// ========== ODBC_EXEC - BEGIN
// ===== ABOUT
// Directly execute an SQL statement
// ===== DESCRIPTION
// Sends an SQL statement to the database server.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_exec(resource $odbc, string $query): resource|false
// ===== CODE
$return_odbc_exec = odbc_exec(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$query // string query - The SQL statement.

); // Return Values
// Returns an ODBC result identifier if the SQL command was executed successfully, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - flags was removed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-exec.php
// ========== ODBC_EXEC - END

// SYNTAX:
// resource|false odbc_exec(resource $odbc, string $query)

return $return_odbc_exec; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_EXEC
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_EXECUTE
// ============================== PUBLIC
// ============================== ABOUT
// Execute a prepared statement.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_execute() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_execute($statement, $params = array())
{
$return_odbc_execute = false;

// ========== ODBC_EXECUTE - BEGIN
// ===== ABOUT
// Execute a prepared statement
// ===== DESCRIPTION
// Executes a statement prepared with odbc_prepare().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_execute(resource $statement, array $params = []): bool
// ===== CODE
$return_odbc_execute = odbc_execute(

$statement, // resource statement - The result id resource, from odbc_prepare().

$params // array params - Parameters in params will be substituted for placeholders in the prepared statement in order. Elements of this array will be converted to strings by calling this function.
// Any parameters in params which start and end with single quotes will be taken as the name of a file to read and send to the database server as the data for the appropriate placeholder.
// If you wish to store a string which actually begins and ends with single quotes, you must add a space or other non-single-quote character to the beginning or end of the parameter, which will prevent the parameter from being taken as a file name. If this is not an option, then you must use another mechanism to store the string, such as executing the query directly with odbc_exec()).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 odbc_execute() and odbc_prepare() example
// In the following code, $success will only be true if all three parameters to myproc are IN parameters:
// [php]
// $a = 1;
// $b = 2;
// $c = 3;
// $stmt    = odbc_prepare($conn, 'CALL myproc(?,?,?)');
// $success = odbc_execute($stmt, array($a, $b, $c));
// [/php]
// If you need to call a stored procedure using INOUT or OUT parameters, the recommended workaround is to use a native extension for your database (for example, oci8 for Oracle).
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-execute.php
// ========== ODBC_EXECUTE - END

// SYNTAX:
// bool odbc_execute(resource $statement, array $params = array())

return $return_odbc_execute; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_EXECUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_ARRAY
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a result row as an associative array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_fetch_array() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_fetch_array($statement, $row = -1)
{
$return_odbc_fetch_array = false;

// ========== ODBC_FETCH_ARRAY - BEGIN
// ===== ABOUT
// Fetch a result row as an associative array
// ===== DESCRIPTION
// Fetch an associative array from an ODBC query.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_fetch_array(resource $statement, int $row = -1): array|false
// ===== CODE
$return_odbc_fetch_array = odbc_fetch_array(

$statement, // resource statement - The result resource from odbc_exec().

$row // int row - Optionally choose which row number to retrieve.

); // Return Values
// Returns an array that corresponds to the fetched row, or false if there are no more rows.
// 
// Notes
// Note: This function exists when compiled with DBMaker, IBM DB2 or UnixODBC support.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-fetch-array.php
// ========== ODBC_FETCH_ARRAY - END

// SYNTAX:
// array|false odbc_fetch_array(resource $statement, int $row = -1)

return $return_odbc_fetch_array; // array|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_ARRAY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_INTO
// ============================== PUBLIC
// ============================== ABOUT
// Fetch one result row into array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_fetch_into() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_fetch_into($statement, & $array, $row = 0)
{
$return_odbc_fetch_into = false;

// ========== ODBC_FETCH_INTO - BEGIN
// ===== ABOUT
// Fetch one result row into array
// ===== DESCRIPTION
// Fetch one result row into array.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_fetch_into(resource $statement, array &$array, int $row = 0): int|false
// ===== CODE
$return_odbc_fetch_into = odbc_fetch_into(

$statement, // resource statement - The result resource.

$array, // array& array - The result array that can be of any type since it will be converted to type array. The array will contain the column values starting at array index 0.

$row // int row - The row number.

); // Return Values
// Returns the number of columns in the result; false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 odbc_fetch_into() examples
// [php]
// $rc = odbc_fetch_into($res_id, $my_array);
// [/php]
// or
// [php]
// $rc = odbc_fetch_into($res_id, $my_array, 2);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-fetch-into.php
// ========== ODBC_FETCH_INTO - END

// SYNTAX:
// int|false odbc_fetch_into(resource $statement, array& $array, int $row = 0)

return $return_odbc_fetch_into; // int|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_INTO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_OBJECT
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a result row as an object.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_fetch_object() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_fetch_object($statement, $row = -1)
{
$return_odbc_fetch_object = false;

// ========== ODBC_FETCH_OBJECT - BEGIN
// ===== ABOUT
// Fetch a result row as an object
// ===== DESCRIPTION
// Fetch an object from an ODBC query.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_fetch_object(resource $statement, int $row = -1): stdClass|false
// ===== CODE
$return_odbc_fetch_object = odbc_fetch_object(

$statement, // resource statement - The result resource from odbc_exec().

$row // int row - Optionally choose which row number to retrieve.

); // Return Values
// Returns an object that corresponds to the fetched row, or false if there are no more rows.
// 
// Notes
// Note: This function exists when compiled with DBMaker, IBM DB2 or UnixODBC support.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-fetch-object.php
// ========== ODBC_FETCH_OBJECT - END

// SYNTAX:
// stdClass|false odbc_fetch_object(resource $statement, int $row = -1)

return $return_odbc_fetch_object; // stdClass|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_OBJECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_ROW
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a row.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_fetch_row() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_fetch_row($statement, $row = null)
{
$return_odbc_fetch_row = false;

// ========== ODBC_FETCH_ROW - BEGIN
// ===== ABOUT
// Fetch a row
// ===== DESCRIPTION
// Fetches a row of the data that was returned by odbc_do() or odbc_exec(). After odbc_fetch_row() is called, the fields of that row can be accessed with odbc_result().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_fetch_row(resource $statement, ?int $row = null): bool
// ===== CODE
$return_odbc_fetch_row = odbc_fetch_row(

$statement, // resource statement - The result identifier.

$row // int row - If row is not specified, odbc_fetch_row() will try to fetch the next row in the result set. Calls to odbc_fetch_row() with and without row can be mixed.
// To step through the result more than once, you can call odbc_fetch_row() with row 1, and then continue doing odbc_fetch_row() without row to review the result. If a driver doesn't support fetching rows by number, the row parameter is ignored.

); // Return Values
// Returns true if there was a row, false otherwise.
// 
// Changelog
// Version - Description
// 8.0.0   - row is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-fetch-row.php
// ========== ODBC_FETCH_ROW - END

// SYNTAX:
// bool odbc_fetch_row(resource $statement, int $row = null)

return $return_odbc_fetch_row; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FETCH_ROW
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_LEN
// ============================== PUBLIC
// ============================== ABOUT
// Get the length (precision) of a field.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_field_len() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_field_len($statement, $field)
{
$return_odbc_field_len = false;

// ========== ODBC_FIELD_LEN - BEGIN
// ===== ABOUT
// Get the length (precision) of a field
// ===== DESCRIPTION
// Gets the length of the field referenced by number in the given result identifier.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_field_len(resource $statement, int $field): int|false
// ===== CODE
$return_odbc_field_len = odbc_field_len(

$statement, // resource statement - The result identifier.

$field // int field - The field number. Field numbering starts at 1.

); // Return Values
// Returns the field length, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-len.php
// ========== ODBC_FIELD_LEN - END

// SYNTAX:
// int|false odbc_field_len(resource $statement, int $field)

return $return_odbc_field_len; // int|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_LEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Get the columnname.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_field_name() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_field_name($statement, $field)
{
$return_odbc_field_name = false;

// ========== ODBC_FIELD_NAME - BEGIN
// ===== ABOUT
// Get the columnname
// ===== DESCRIPTION
// Gets the name of the field occupying the given column number in the given result identifier.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_field_name(resource $statement, int $field): string|false
// ===== CODE
$return_odbc_field_name = odbc_field_name(

$statement, // resource statement - The result identifier.

$field // int field - The field number. Field numbering starts at 1.

); // Return Values
// Returns the field name as a string, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-name.php
// ========== ODBC_FIELD_NAME - END

// SYNTAX:
// string|false odbc_field_name(resource $statement, int $field)

return $return_odbc_field_name; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_NUM
// ============================== PUBLIC
// ============================== ABOUT
// Return column number.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_field_num() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_field_num($statement, $field)
{
$return_odbc_field_num = false;

// ========== ODBC_FIELD_NUM - BEGIN
// ===== ABOUT
// Return column number
// ===== DESCRIPTION
// Gets the number of the column slot that corresponds to the named field in the given result identifier.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_field_num(resource $statement, string $field): int|false
// ===== CODE
$return_odbc_field_num = odbc_field_num(

$statement, // resource statement - The result identifier.

$field // string field - The field name.

); // Return Values
// Returns the field number as a integer, or false on error. Field numbering starts at 1.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-num.php
// ========== ODBC_FIELD_NUM - END

// SYNTAX:
// int|false odbc_field_num(resource $statement, string $field)

return $return_odbc_field_num; // int|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_NUM
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_PRECISION
// ============================== PUBLIC
// ============================== ABOUT
// odbc_field_precision - Alias of odbc_field_len().
// 
// Get the length (precision) of a field.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_field_precision() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_field_precision($statement, $field)
{
$return_odbc_field_precision = false;

// ========== ODBC_FIELD_PRECISION - BEGIN
// ===== ABOUT
// odbc_field_precision - Alias of odbc_field_len()
// ===== DESCRIPTION
// This function is an alias of: odbc_field_len().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_odbc_field_precision = odbc_field_precision(

$statement, // resource statement

$field // int field

); // Return
// int|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-precision.php
// ========== ODBC_FIELD_PRECISION - END

// ========== ODBC_FIELD_LEN - BEGIN
// ===== ABOUT
// Get the length (precision) of a field
// ===== DESCRIPTION
// Gets the length of the field referenced by number in the given result identifier.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_field_len(resource $statement, int $field): int|false
// ===== CODE
// $return_odbc_field_len = odbc_field_len(

// $statement, // resource statement - The result identifier.

// $field // int field - The field number. Field numbering starts at 1.

// ); // Return Values
// Returns the field length, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-len.php
// ========== ODBC_FIELD_LEN - END

// SYNTAX:
// int|false odbc_field_precision(resource $statement, int $field)

return $return_odbc_field_precision; // int|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_PRECISION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_SCALE
// ============================== PUBLIC
// ============================== ABOUT
// Get the scale of a field.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_field_scale() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_field_scale($statement, $field)
{
$return_odbc_field_scale = false;

// ========== ODBC_FIELD_SCALE - BEGIN
// ===== ABOUT
// Get the scale of a field
// ===== DESCRIPTION
// Gets the scale of the field referenced by number in the given result identifier.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_field_scale(resource $statement, int $field): int|false
// ===== CODE
$return_odbc_field_scale = odbc_field_scale(

$statement, // resource statement - The result identifier.

$field // int field - The field number. Field numbering starts at 1.

); // Return Values
// Returns the field scale as a integer, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-scale.php
// ========== ODBC_FIELD_SCALE - END

// SYNTAX:
// int|false odbc_field_scale(resource $statement, int $field)

return $return_odbc_field_scale; // int|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_SCALE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_TYPE
// ============================== PUBLIC
// ============================== ABOUT
// Datatype of a field.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_field_type() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_field_type($statement, $field)
{
$return_odbc_field_type = false;

// ========== ODBC_FIELD_TYPE - BEGIN
// ===== ABOUT
// Datatype of a field
// ===== DESCRIPTION
// Gets the SQL type of the field referenced by number in the given result identifier.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_field_type(resource $statement, int $field): string|false
// ===== CODE
$return_odbc_field_type = odbc_field_type(

$statement, // resource statement - The result identifier.

$field // int field - The field number. Field numbering starts at 1.

); // Return Values
// Returns the field type as a string, or false on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-12)
// URL: https://www.php.net/manual/en/function.odbc-field-type.php
// ========== ODBC_FIELD_TYPE - END

// SYNTAX:
// string|false odbc_field_type(resource $statement, int $field)

return $return_odbc_field_type; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FIELD_TYPE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FOREIGNKEYS
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves a list of foreign keys.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_foreignkeys() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_foreignkeys($odbc, $pk_catalog, $pk_schema, $pk_table, $fk_catalog, $fk_schema, $fk_table)
{
$return_odbc_foreignkeys = false;

// ========== ODBC_FOREIGNKEYS - BEGIN
// ===== ABOUT
// Retrieves a list of foreign keys
// ===== DESCRIPTION
// Retrieves a list of foreign keys in the specified table or a list of foreign keys in other tables that refer to the primary key in the specified table
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_foreignkeys(
//    resource $odbc,
//    ?string $pk_catalog,
//    string $pk_schema,
//    string $pk_table,
//    string $fk_catalog,
//    string $fk_schema,
//    string $fk_table
// ): resource|false
// ===== CODE
$return_odbc_foreignkeys = odbc_foreignkeys(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$pk_catalog, // string pk_catalog - The catalog ('qualifier' in ODBC 2 parlance) of the primary key table.

$pk_schema, // string pk_schema - The schema ('owner' in ODBC 2 parlance) of the primary key table.

$pk_table, // string pk_table - The primary key table.

$fk_catalog, // string fk_catalog - The catalog ('qualifier' in ODBC 2 parlance) of the foreign key table.

$fk_schema, // string fk_schema - The schema ('owner' in ODBC 2 parlance) of the foreign key table.

$fk_table // string fk_table - The foreign key table.

); // Return Values
// Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * PKTABLE_CAT
// * PKTABLE_SCHEM
// * PKTABLE_NAME
// * PKCOLUMN_NAME
// * FKTABLE_CAT
// * FKTABLE_SCHEM
// * FKTABLE_NAME
// * FKCOLUMN_NAME
// * KEY_SEQ
// * UPDATE_RULE
// * DELETE_RULE
// * FK_NAME
// * PK_NAME
// * DEFERRABILITY
// Drivers can report additional columns.
// If the foreign keys associated with a primary key are requested, the result set is ordered by FKTABLE_CAT, FKTABLE_SCHEM, FKTABLE_NAME and KEY_SEQ. If the primary keys associated with a foreign key are requested, the result set is ordered by PKTABLE_CAT, PKTABLE_SCHEM, PKTABLE_NAME and KEY_SEQ.
// If pk_table contains a table name, odbc_foreignkeys() returns a result set containing the primary key of the specified table and all of the foreign keys that refer to it.
// If fk_table contains a table name, odbc_foreignkeys() returns a result set containing all of the foreign keys in the specified table and the primary keys (in other tables) to which they refer.
// If both pk_table and fk_table contain table names, odbc_foreignkeys() returns the foreign keys in the table specified in fk_table that refer to the primary key of the table specified in pk_table. This should be one key at most.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-foreignkeys.php
// ========== ODBC_FOREIGNKEYS - END

// SYNTAX:
// resource|false odbc_foreignkeys(resource $odbc, string $pk_catalog, string $pk_schema, string $pk_table, string $fk_catalog, string $fk_schema, string $fk_table)

return $return_odbc_foreignkeys; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FOREIGNKEYS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FREE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Free resources associated with a result.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_free_result() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_free_result($statement)
{
$return_odbc_free_result = false;

// ========== ODBC_FREE_RESULT - BEGIN
// ===== ABOUT
// Free resources associated with a result
// ===== DESCRIPTION
// Free resources associated with a result.
// odbc_free_result() only needs to be called if you are worried about using too much memory while your script is running. All result memory will automatically be freed when the script is finished.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_free_result(resource $statement): bool
// ===== CODE
$return_odbc_free_result = odbc_free_result(

$statement // resource statement - The result identifier.

); // Return Values
// Always returns true.
// 
// Notes
// Note: If auto-commit is disabled (see odbc_autocommit()) and you call odbc_free_result() before committing, all pending transactions are rolled back.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-free-result.php
// ========== ODBC_FREE_RESULT - END

// SYNTAX:
// bool odbc_free_result(resource $statement)

return $return_odbc_free_result; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_FREE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_GETTYPEINFO
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves information about data types supported by the data source.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_gettypeinfo() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_gettypeinfo($odbc, $data_type = 0)
{
$return_odbc_gettypeinfo = false;

// ========== ODBC_GETTYPEINFO - BEGIN
// ===== ABOUT
// Retrieves information about data types supported by the data source
// ===== DESCRIPTION
// Retrieves information about data types supported by the data source.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_gettypeinfo(resource $odbc, int $data_type = 0): resource|false
// ===== CODE
$return_odbc_gettypeinfo = odbc_gettypeinfo(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$data_type // int data_type - The data type, which can be used to restrict the information to a single data type.

); // Return Values
// Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * TYPE_NAME
// * DATA_TYPE
// * PRECISION
// * LITERAL_PREFIX
// * LITERAL_SUFFIX
// * CREATE_PARAMS
// * NULLABLE
// * CASE_SENSITIVE
// * SEARCHABLE
// * UNSIGNED_ATTRIBUTE
// * MONEY
// * AUTO_INCREMENT
// * LOCAL_TYPE_NAME
// * MINIMUM_SCALE
// * MAXIMUM_SCALE
// The result set is ordered by DATA_TYPE and TYPE_NAME.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-gettypeinfo.php
// ========== ODBC_GETTYPEINFO - END

// SYNTAX:
// resource|false odbc_gettypeinfo(resource $odbc, int $data_type = 0)

return $return_odbc_gettypeinfo; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_GETTYPEINFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_LONGREADLEN
// ============================== PUBLIC
// ============================== ABOUT
// Handling of LONG columns.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_longreadlen() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_longreadlen($statement, $length)
{
$return_odbc_longreadlen = false;

// ========== ODBC_LONGREADLEN - BEGIN
// ===== ABOUT
// Handling of LONG columns
// ===== DESCRIPTION
// Controls handling of LONG, LONGVARCHAR and LONGVARBINARY columns. The default length can be set using the uodbc.defaultlrl php.ini directive.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_longreadlen(resource $statement, int $length): bool
// ===== CODE
$return_odbc_longreadlen = odbc_longreadlen(

$statement, // resource statement - The result identifier.

$length // int length - The number of bytes returned to PHP is controlled by the parameter length. If it is set to 0, long column data is passed through to the client (i.e. printed) when retrieved with odbc_result().

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: Handling of LONGVARBINARY columns is also affected by odbc_binmode().
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-longreadlen.php
// ========== ODBC_LONGREADLEN - END

// SYNTAX:
// bool odbc_longreadlen(resource $statement, int $length)

return $return_odbc_longreadlen; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_LONGREADLEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NEXT_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Checks if multiple results are available.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_next_result() - PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_next_result($statement)
{
$return_odbc_next_result = false;

// ========== ODBC_NEXT_RESULT - BEGIN
// ===== ABOUT
// Checks if multiple results are available
// ===== DESCRIPTION
// Checks if there are more result sets available as well as allowing access to the next result set via odbc_fetch_array(), odbc_fetch_row(), odbc_result(), etc.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_5, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_next_result(resource $statement): bool
// ===== CODE
$return_odbc_next_result = odbc_next_result(

$statement // resource statement - The result identifier.

); // Return Values
// Returns true if there are more result sets, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 odbc_next_result()
// [php]
// $r_Connection = odbc_connect($dsn, $username, $password);
// 
// $s_SQL = <<<END_SQL
// SELECT 'A'
// SELECT 'B'
// SELECT 'C'
// END_SQL;
// 
// $r_Results = odbc_exec($r_Connection, $s_SQL);
// 
// $a_Row1 = odbc_fetch_array($r_Results);
// $a_Row2 = odbc_fetch_array($r_Results);
// echo "Dump first result set";
// var_dump($a_Row1, $a_Row2);
// 
// echo "Get second results set ";
// var_dump(odbc_next_result($r_Results));
// 
// $a_Row1 = odbc_fetch_array($r_Results);
// $a_Row2 = odbc_fetch_array($r_Results);
// echo "Dump second result set ";
// var_dump($a_Row1, $a_Row2);
// 
// echo "Get third results set ";
// var_dump(odbc_next_result($r_Results));
// 
// $a_Row1 = odbc_fetch_array($r_Results);
// $a_Row2 = odbc_fetch_array($r_Results);
// echo "Dump third result set ";
// var_dump($a_Row1, $a_Row2);
// 
// echo "Try for a fourth result set ";
// var_dump(odbc_next_result($r_Results));
// [/php]
// The above example will output:
// [result]
// Dump first result set array(1) {
//   ["A"]=>
//   string(1) "A"
// }
// bool(false)
// Get second results set bool(true)
// Dump second result set array(1) {
//   ["B"]=>
//   string(1) "B"
// }
// bool(false)
// Get third results set bool(true)
// Dump third result set array(1) {
//   ["C"]=>
//   string(1) "C"
// }
// bool(false)
// Try for a fourth result set bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-next-result.php
// ========== ODBC_NEXT_RESULT - END

// SYNTAX:
// bool odbc_next_result(resource $statement)

return $return_odbc_next_result; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NEXT_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NUM_FIELDS
// ============================== PUBLIC
// ============================== ABOUT
// Number of columns in a result.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_num_fields() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_num_fields($statement)
{
$return_odbc_num_fields = 0;

// ========== ODBC_NUM_FIELDS - BEGIN
// ===== ABOUT
// Number of columns in a result
// ===== DESCRIPTION
// Gets the number of fields (columns) in an ODBC result.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_num_fields(resource $statement): int
// ===== CODE
$return_odbc_num_fields = odbc_num_fields(

$statement // resource statement - The result identifier returned by odbc_exec().

); // Return Values
// Returns the number of fields, or -1 on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-num-fields.php
// ========== ODBC_NUM_FIELDS - END

// SYNTAX:
// int odbc_num_fields(resource $statement)

return $return_odbc_num_fields; // int
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NUM_FIELDS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NUM_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Number of rows in a result.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_num_rows() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_num_rows($statement)
{
$return_odbc_num_rows = 0;

// ========== ODBC_NUM_ROWS - BEGIN
// ===== ABOUT
// Number of rows in a result
// ===== DESCRIPTION
// Gets the number of rows in a result. For INSERT, UPDATE and DELETE statements odbc_num_rows() returns the number of rows affected. For a SELECT clause this can be the number of rows available.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_num_rows(resource $statement): int
// ===== CODE
$return_odbc_num_rows = odbc_num_rows(

$statement // resource statement - The result identifier returned by odbc_exec().

); // Return Values
// Returns the number of rows in an ODBC result. This function will return -1 on error.
// 
// Notes
// Note: Using odbc_num_rows() to determine the number of rows available after a SELECT will return -1 with many drivers.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-num-rows.php
// ========== ODBC_NUM_ROWS - END

// SYNTAX:
// int odbc_num_rows(resource $statement)

return $return_odbc_num_rows; // int
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_NUM_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PCONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Open a persistent database connection.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_pconnect() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SQL_CUR_USE_DRIVER - odbc_pconnect()
// ============================== CODE
function php_database_abstract_odbc_odbc_pconnect($dsn, $user, $password, $cursor_option = SQL_CUR_USE_DRIVER)
{
$return_odbc_pconnect = false;

// ========== ODBC_PCONNECT - BEGIN
// ===== ABOUT
// Open a persistent database connection
// ===== DESCRIPTION
// Opens a persistent database connection.
// This function is much like odbc_connect(), except that the connection is not really closed when the script has finished. Future requests for a connection with the same dsn, user, password combination (via odbc_connect() and odbc_pconnect()) can reuse the persistent connection.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_pconnect(
//    string $dsn,
//    string $user,
//    string $password,
//    int $cursor_option = SQL_CUR_USE_DRIVER
// ): resource|false
// ===== CODE
$return_odbc_pconnect = odbc_pconnect(

// See odbc_connect() for details.

$dsn, // string $dsn

$user, // string $user

$password, // string $password

$cursor_option // int $cursor_option

); // Return Values
// Returns an ODBC connection, or false on failure. error.
// 
// Notes
// Note: Persistent connections have no effect if PHP is used as a CGI program.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-pconnect.php
// ========== ODBC_PCONNECT - END

// SYNTAX:
// resource|false odbc_pconnect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER)

return $return_odbc_pconnect; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PCONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Prepares a statement for execution.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_prepare() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_prepare($odbc, $query)
{
$return_odbc_prepare = false;

// ========== ODBC_PREPARE - BEGIN
// ===== ABOUT
// Prepares a statement for execution
// ===== DESCRIPTION
// Prepares a statement for execution. The result identifier can be used later to execute the statement with odbc_execute().
// Some databases (such as IBM DB2, MS SQL Server, and Oracle) support stored procedures that accept parameters of type IN, INOUT, and OUT as defined by the ODBC specification. However, the Unified ODBC driver currently only supports parameters of type IN to stored procedures.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_prepare(resource $odbc, string $query): resource|false
// ===== CODE
$return_odbc_prepare = odbc_prepare(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$query // string query - The query string statement being prepared.

); // Return Values
// Returns an ODBC result identifier if the SQL command was prepared successfully. Returns false on error.
// 
// [examples]
// Examples
// [example]
// Example #1 odbc_execute() and odbc_prepare() example
// In the following code, $success will only be true if all three parameters to myproc are IN parameters:
// [php]
// $a = 1;
// $b = 2;
// $c = 3;
// $stmt    = odbc_prepare($conn, 'CALL myproc(?,?,?)');
// $success = odbc_execute($stmt, array($a, $b, $c));
// [/php]
// If you need to call a stored procedure using INOUT or OUT parameters, the recommended workaround is to use a native extension for your database (for example, oci8 for Oracle).
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-prepare.php
// ========== ODBC_PREPARE - END

// SYNTAX:
// resource|false odbc_prepare(resource $odbc, string $query)

return $return_odbc_prepare; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PRIMARYKEYS
// ============================== PUBLIC
// ============================== ABOUT
// Gets the primary keys for a table.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_primarykeys() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_primarykeys($odbc, $catalog, $schema, $table)
{
$return_odbc_primarykeys = false;

// ========== ODBC_PRIMARYKEYS - BEGIN
// ===== ABOUT
// Gets the primary keys for a table
// ===== DESCRIPTION
// Returns a result identifier that can be used to fetch the column names that comprise the primary key for a table.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_primarykeys(
//    resource $odbc,
//    ?string $catalog,
//    string $schema,
//    string $table
// ): resource|false
// ===== CODE
$return_odbc_primarykeys = odbc_primarykeys(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance).

$table // string table

); // Return Values
// Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * TABLE_CAT
// * TABLE_SCHEM
// * TABLE_NAME
// * COLUMN_NAME
// * KEY_SEQ
// * PK_NAME
// Drivers can report additional columns.
// The result set is ordered by TABLE_CAT, TABLE_SCHEM, TABLE_NAME and KEY_SEQ.
// 
// [examples]
// Examples
// [example]
// Example #1 List primary Keys of a Column
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $primarykeys = odbc_primarykeys($conn, 'TutorialDB', 'dbo', 'TEST');
// while (($row = odbc_fetch_array($primarykeys))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [TABLE_CAT] => TutorialDB
//     [TABLE_SCHEM] => dbo
//     [TABLE_NAME] => TEST
//     [COLUMN_NAME] => id
//     [KEY_SEQ] => 1
//     [PK_NAME] => PK__TEST__3213E83FE141F843
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-primarykeys.php
// ========== ODBC_PRIMARYKEYS - END

// SYNTAX:
// resource|false odbc_primarykeys(resource $odbc, string $catalog, string $schema, string $table)

return $return_odbc_primarykeys; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PRIMARYKEYS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PROCEDURECOLUMNS
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve information about parameters to procedures.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_procedurecolumns() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_procedurecolumns($odbc, $catalog = null, $schema = null, $procedure = null, $column = null)
{
$return_odbc_procedurecolumns = false;

// ========== ODBC_PROCEDURECOLUMNS - BEGIN
// ===== ABOUT
// Retrieve information about parameters to procedures
// ===== DESCRIPTION
// Retrieve information about parameters to procedures.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_procedurecolumns(
//    resource $odbc,
//    ?string $catalog = null,
//    ?string $schema = null,
//    ?string $procedure = null,
//    ?string $column = null
// ): resource|false
// ===== CODE
$return_odbc_procedurecolumns = odbc_procedurecolumns(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$procedure, // string procedure - The proc. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$column // string column - The column. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

); // Return Values
// Returns the list of input and output parameters, as well as the columns that make up the result set for the specified procedures. Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * PROCEDURE_CAT
// * PROCEDURE_SCHEM
// * PROCEDURE_NAME
// * COLUMN_NAME
// * COLUMN_TYPE
// * DATA_TYPE
// * TYPE_NAME
// * COLUMN_SIZE
// * BUFFER_LENGTH
// * DECIMAL_DIGITS
// * NUM_PREC_RADIX
// * NULLABLE
// * REMARKS
// * COLUMN_DEF
// * SQL_DATA_TYPE
// * SQL_DATETIME_SUB
// * CHAR_OCTET_LENGTH
// * ORDINAL_POSITION
// * IS_NULLABLE
// Drivers can report additional columns.
// The result set is ordered by PROCEDURE_CAT, PROCEDURE_SCHEM, PROCEDURE_NAME and COLUMN_TYPE.
// 
// Changelog
// Version - Description
// 8.0.0   - Prior to this version, the function could only be called with either one or five arguments.
// 
// [examples]
// Examples
// [example]
// Example #1 List Columns of a stored Procedure
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $columns = odbc_procedurecolumns($conn, 'TutorialDB', 'dbo', 'GetEmployeeSalesYTD;1', '%');
// while (($row = odbc_fetch_array($columns))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [PROCEDURE_CAT] => TutorialDB
//     [PROCEDURE_SCHEM] => dbo
//     [PROCEDURE_NAME] => GetEmployeeSalesYTD;1
//     [COLUMN_NAME] => @SalesPerson
//     [COLUMN_TYPE] => 1
//     [DATA_TYPE] => -9
//     [TYPE_NAME] => nvarchar
//     [COLUMN_SIZE] => 50
//     [BUFFER_LENGTH] => 100
//     [DECIMAL_DIGITS] =>
//     [NUM_PREC_RADIX] =>
//     [NULLABLE] => 1
//     [REMARKS] =>
//     [COLUMN_DEF] =>
//     [SQL_DATA_TYPE] => -9
//     [SQL_DATETIME_SUB] =>
//     [CHAR_OCTET_LENGTH] => 100
//     [ORDINAL_POSITION] => 1
//     [IS_NULLABLE] => YES
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-procedurecolumns.php
// ========== ODBC_PROCEDURECOLUMNS - END

// SYNTAX:
// resource|false odbc_procedurecolumns(resource $odbc, string $catalog = null, string $schema = null, string $procedure = null, string $column = null)

return $return_odbc_procedurecolumns; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PROCEDURECOLUMNS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PROCEDURES
// ============================== PUBLIC
// ============================== ABOUT
// Get the list of procedures stored in a specific data source.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_procedures() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_procedures($odbc, $catalog = null, $schema = null, $procedure = null)
{
$return_odbc_procedures = false;

// ========== ODBC_PROCEDURES - BEGIN
// ===== ABOUT
// Get the list of procedures stored in a specific data source
// ===== DESCRIPTION
// Lists all procedures in the requested range.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_procedures(
//    resource $odbc,
//    ?string $catalog = null,
//    ?string $schema = null,
//    ?string $procedure = null
// ): resource|false
// ===== CODE
$return_odbc_procedures = odbc_procedures(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$procedure // string procedure - The name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

); // Return Values
// Returns an ODBC result identifier containing the information or false on failure.
// The result set has the following columns:
// * PROCEDURE_CAT
// * PROCEDURE_SCHEM
// * PROCEDURE_NAME
// * NUM_INPUT_PARAMS
// * NUM_OUTPUT_PARAMS
// * NUM_RESULT_SETS
// * REMARKS
// * PROCEDURE_TYPE
// Drivers can report additional columns.
// The result set is ordered by PROCEDURE_CAT, PROCEDURE_SCHEMA and PROCEDURE_NAME.
// 
// Changelog
// Version - Description
// 8.0.0   - Prior to this version, the function could only be called with either one or four arguments.
// 
// [examples]
// Examples
// [example]
// Example #1 List stored Procedures of a Database
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $procedures = odbc_procedures($conn, $catalog, $schema, '%');
// while (($row = odbc_fetch_array($procedures))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [PROCEDURE_CAT] => TutorialDB
//     [PROCEDURE_SCHEM] => dbo
//     [PROCEDURE_NAME] => GetEmployeeSalesYTD;1
//     [NUM_INPUT_PARAMS] => -1
//     [NUM_OUTPUT_PARAMS] => -1
//     [NUM_RESULT_SETS] => -1
//     [REMARKS] =>
//     [PROCEDURE_TYPE] => 2
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-procedures.php
// ========== ODBC_PROCEDURES - END

// SYNTAX:
// resource|false odbc_procedures(resource $odbc, string $catalog = null, string $schema = null, string $procedure = null)

return $return_odbc_procedures; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_PROCEDURES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_RESULT_ALL
// ============================== OFFLINE
// ============================== ABOUT
// Print result as HTML table.
// 
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_result_all() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_database_abstract_odbc_odbc_result_all($statement, $format = "")
{
$return_odbc_result_all = false;

// ========== ODBC_RESULT_ALL - BEGIN
// ===== ABOUT
// Print result as HTML table
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// Prints all rows from a result identifier produced by odbc_exec(). The result is printed in HTML table format. The data is not escaped.
// This function is not supposed to be used in production environments; it is merely meant for development purposes, to get a result set quickly rendered.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_result_all(resource $statement, string $format = ""): int|false
// ===== CODE
$return_odbc_result_all = odbc_result_all(

$statement, // resource statement - The result identifier.

$format // string format - Additional overall table formatting.

); // Return Values
// Returns the number of rows in the result or false on error.
// 
// Changelog
// Version - Description
// 8.1.0   - This function has been deprecated.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-result-all.php
// ========== ODBC_RESULT_ALL - END

// SYNTAX:
// int|false odbc_result_all(resource $statement, string $format = "")

return $return_odbc_result_all; // int|false
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_RESULT_ALL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Get result data.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_result() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_result($statement, $field)
{
$return_odbc_result = false;

// ========== ODBC_RESULT - BEGIN
// ===== ABOUT
// Get result data
// ===== DESCRIPTION
// Get result data
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_result(resource $statement, string|int $field): string|bool|null
// ===== CODE
$return_odbc_result = odbc_result(

$statement, // resource statement - The ODBC resource.

$field // string|int field - The field name being retrieved. It can either be an integer containing the column number of the field you want; or it can be a string containing the name of the field.

); // Return Values
// Returns the string contents of the field, false on error, null for NULL data, or true for binary data.
// 
// [examples]
// Examples
// The first call to odbc_result() returns the value of the third field in the current record of the query result. The second function call to odbc_result() returns the value of the field whose field name is "val" in the current record of the query result. An error occurs if a column number parameter for a field is less than one or exceeds the number of columns (or fields) in the current record. Similarly, an error occurs if a field with a name that is not one of the fieldnames of the table(s) that is(are) being queried.
// [example]
// Example #1 odbc_result() examples
// [php]
// $item_3   = odbc_result($Query_ID, 3);
// $item_val = odbc_result($Query_ID, "val");
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Field indices start from 1. Regarding the way binary or long column data is returned refer to odbc_binmode() and odbc_longreadlen().
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-result.php
// ========== ODBC_RESULT - END

// SYNTAX:
// string|bool|null odbc_result(resource $statement, string|int $field)

return $return_odbc_result; // string|bool|null
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ROLLBACK
// ============================== PUBLIC
// ============================== ABOUT
// Rollback a transaction.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_rollback() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_rollback($odbc)
{
$return_odbc_rollback = false;

// ========== ODBC_ROLLBACK - BEGIN
// ===== ABOUT
// Rollback a transaction
// ===== DESCRIPTION
// Rolls back all pending statements on the connection.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_rollback(resource $odbc): bool
// ===== CODE
$return_odbc_rollback = odbc_rollback(

$odbc // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-rollback.php
// ========== ODBC_ROLLBACK - END

// SYNTAX:
// bool odbc_rollback(resource $odbc)

return $return_odbc_rollback; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_ROLLBACK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_SETOPTION
// ============================== PUBLIC
// ============================== ABOUT
// Adjust ODBC settings.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_setoption() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_setoption($odbc, $which, $option, $value)
{
$return_odbc_setoption = false;

// ========== ODBC_SETOPTION - BEGIN
// ===== ABOUT
// Adjust ODBC settings
// ===== DESCRIPTION
// This function allows fiddling with the ODBC options for a particular connection or query result. It was written to help find work around to problems in quirky ODBC drivers. You should probably only use this function if you are an ODBC programmer and understand the effects the various options will have. You will certainly need a good ODBC reference to explain all the different options and values that can be used. Different driver versions support different options.
// Because the effects may vary depending on the ODBC driver, use of this function in scripts to be made publicly available is strongly discouraged. Also, some ODBC options are not available to this function because they must be set before the connection is established or the query is prepared. However, if on a particular job it can make PHP work so your boss doesn't tell you to use a commercial product, that's all that really matters.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_setoption(
//    resource $odbc,
//    int $which,
//    int $option,
//    int $value
// ): bool
// ===== CODE
$return_odbc_setoption = odbc_setoption(

$odbc, // resource odbc - Is a connection id or result id on which to change the settings. For SQLSetConnectOption(), this is a connection id. For SQLSetStmtOption(), this is a result id.

$which, // int which - Is the ODBC function to use. The value should be 1 for SQLSetConnectOption() and 2 for SQLSetStmtOption().

$option, // int option - The option to set.

$value // int value - The value for the given option.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 odbc_setoption() examples
// [php]
// // 1. Option 102 of SQLSetConnectOption() is SQL_AUTOCOMMIT.
// //    Value 1 of SQL_AUTOCOMMIT is SQL_AUTOCOMMIT_ON.
// //    This example has the same effect as
// //    odbc_autocommit($conn, true);
// 
// odbc_setoption($conn, 1, 102, 1);
// 
// // 2. Option 0 of SQLSetStmtOption() is SQL_QUERY_TIMEOUT.
// //    This example sets the query to timeout after 30 seconds.
// 
// $result = odbc_prepare($conn, $sql);
// odbc_setoption($result, 2, 0, 30);
// odbc_execute($result);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-setoption.php
// ========== ODBC_SETOPTION - END

// SYNTAX:
// bool odbc_setoption(resource $odbc, int $which, int $option, int $value)

return $return_odbc_setoption; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_SETOPTION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_SPECIALCOLUMNS
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves special columns.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_specialcolumns() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_specialcolumns($odbc, $type, $catalog, $schema, $table, $scope, $nullable)
{
$return_odbc_specialcolumns = false;

// ========== ODBC_SPECIALCOLUMNS - BEGIN
// ===== ABOUT
// Retrieves special columns
// ===== DESCRIPTION
// Retrieves either the optimal set of columns that uniquely identifies a row in the table, or columns that are automatically updated when any value in the row is updated by a transaction.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_specialcolumns(
//    resource $odbc,
//    int $type,
//    ?string $catalog,
//    string $schema,
//    string $table,
//    int $scope,
//    int $nullable
// ): resource|false
// ===== CODE
$return_odbc_specialcolumns = odbc_specialcolumns(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$type, // int type - When the type argument is SQL_BEST_ROWID, odbc_specialcolumns() returns the column or columns that uniquely identify each row in the table. When the type argument is SQL_ROWVER, odbc_specialcolumns() returns the column or columns in the specified table, if any, that are automatically updated by the data source when any value in the row is updated by any transaction.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance).

$table, // string table - The table.

$scope, // int scope - The scope, which orders the result set. One of SQL_SCOPE_CURROW, SQL_SCOPE_TRANSACTION or SQL_SCOPE_SESSION.

$nullable // int nullable - Determines whether to return special columns that can have a NULL value. One of SQL_NO_NULLS or SQL_NULLABLE.

); // Return Values
// Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * SCOPE
// * COLUMN_NAME
// * DATA_TYPE
// * TYPE_NAME
// * COLUMN_SIZE
// * BUFFER_LENGTH
// * DECIMAL_DIGITS
// * PSEUDO_COLUMN
// Drivers can report additional columns.
// The result set is ordered by SCOPE.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-specialcolumns.php
// ========== ODBC_SPECIALCOLUMNS - END

// SYNTAX:
// resource|false odbc_specialcolumns(resource $odbc, int $type, string $catalog, string $schema, string $table, int $scope, int $nullable)

return $return_odbc_specialcolumns; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_SPECIALCOLUMNS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_STATISTICS
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve statistics about a table.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_statistics() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_statistics($odbc, $catalog, $schema, $table, $unique, $accuracy)
{
$return_odbc_statistics = false;

// ========== ODBC_STATISTICS - BEGIN
// ===== ABOUT
// Retrieve statistics about a table
// ===== DESCRIPTION
// Get statistics about a table and its indexes.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_statistics(
//    resource $odbc,
//    ?string $catalog,
//    string $schema,
//    string $table,
//    int $unique,
//    int $accuracy
// ): resource|false
// ===== CODE
$return_odbc_statistics = odbc_statistics(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance).

$table, // string table - The table name.

$unique, // int unique - The type of the index. One of SQL_INDEX_UNIQUE or SQL_INDEX_ALL.

$accuracy // int accuracy - One of SQL_ENSURE or SQL_QUICK. The latter requests that the driver retrieve the CARDINALITY and PAGES only if they are readily available from the server.

); // Return Values
// Returns an ODBC result identifier or false on failure.
// The result set has the following columns:
// * TABLE_CAT
// * TABLE_SCHEM
// * TABLE_NAME
// * NON_UNIQUE
// * INDEX_QUALIFIER
// * INDEX_NAME
// * TYPE
// * ORDINAL_POSITION
// * COLUMN_NAME
// * ASC_OR_DESC
// * CARDINALITY
// * PAGES
// * FILTER_CONDITION
// Drivers can report additional columns.
// The result set is ordered by NON_UNIQUE, TYPE, INDEX_QUALIFIER, INDEX_NAME and ORDINAL_POSITION.
// 
// [examples]
// Examples
// [example]
// Example #1 List Statistics of a Table
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $statistics = odbc_statistics($conn, 'TutorialDB', 'dbo', 'TEST', SQL_INDEX_UNIQUE, SQL_QUICK);
// while (($row = odbc_fetch_array($statistics))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [TABLE_CAT] => TutorialDB
//     [TABLE_SCHEM] => dbo
//     [TABLE_NAME] => TEST
//     [NON_UNIQUE] =>
//     [INDEX_QUALIFIER] =>
//     [INDEX_NAME] =>
//     [TYPE] => 0
//     [ORDINAL_POSITION] =>
//     [COLUMN_NAME] =>
//     [ASC_OR_DESC] =>
//     [CARDINALITY] => 15
//     [PAGES] => 3
//     [FILTER_CONDITION] =>
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-statistics.php
// ========== ODBC_STATISTICS - END

// SYNTAX:
// resource|false odbc_statistics(resource $odbc, string $catalog, string $schema, string $table, int $unique, int $accuracy)

return $return_odbc_statistics; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_STATISTICS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_TABLEPRIVILEGES
// ============================== PUBLIC
// ============================== ABOUT
// Lists tables and the privileges associated with each table.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_tableprivileges() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_tableprivileges($odbc, $catalog, $schema, $table)
{
$return_odbc_tableprivileges = false;

// ========== ODBC_TABLEPRIVILEGES - BEGIN
// ===== ABOUT
// Lists tables and the privileges associated with each table
// ===== DESCRIPTION
// Lists tables in the requested range and the privileges associated with each table.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_tableprivileges(
//    resource $odbc,
//    ?string $catalog,
//    string $schema,
//    string $table
// ): resource|false
// ===== CODE
$return_odbc_tableprivileges = odbc_tableprivileges(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$table // string table - The name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

); // Return Values
// An ODBC result identifier or false on failure.
// The result set has the following columns:
// * TABLE_CAT
// * TABLE_SCHEM
// * TABLE_NAME
// * GRANTOR
// * GRANTEE
// * PRIVILEGE
// * IS_GRANTABLE
// Drivers can report additional columns.
// The result set is ordered by TABLE_CAT, TABLE_SCHEM, TABLE_NAME, PRIVILEGE and GRANTEE.
// 
// [examples]
// Examples
// [example]
// Example #1 List Privileges of a Table
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $privileges = odbc_tableprivileges($conn, 'SalesOrders', 'dbo', 'Orders');
// while (($row = odbc_fetch_array($privileges))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [TABLE_CAT] => SalesOrders
//     [TABLE_SCHEM] => dbo
//     [TABLE_NAME] => Orders
//     [GRANTOR] => dbo
//     [GRANTEE] => dbo
//     [PRIVILEGE] => DELETE
//     [IS_GRANTABLE] => YES
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-tableprivileges.php
// ========== ODBC_TABLEPRIVILEGES - END

// SYNTAX:
// resource|false odbc_tableprivileges(resource $odbc, string $catalog, string $schema, string $table)

return $return_odbc_tableprivileges; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_TABLEPRIVILEGES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_TABLES
// ============================== PUBLIC
// ============================== ABOUT
// Get the list of table names stored in a specific data source.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// odbc_tables() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_odbc_odbc_tables($odbc, $catalog = null, $schema = null, $table = null, $types = null)
{
$return_odbc_tables = false;

// ========== ODBC_TABLES - BEGIN
// ===== ABOUT
// Get the list of table names stored in a specific data source
// ===== DESCRIPTION
// Lists all tables in the requested range.
// To support enumeration of qualifiers, owners, and table types, the following special semantics for the catalog, schema, table, and table_type are available:
// * If catalog is a single percent character (%) and schema and table are empty strings, then the result set contains a list of valid qualifiers for the data source. (All columns except the TABLE_QUALIFIER column contain NULLs.)
// * If schema is a single percent character (%) and catalog and table are empty strings, then the result set contains a list of valid owners for the data source. (All columns except the TABLE_OWNER column contain NULLs.)
// * If table_type is a single percent character (%) and catalog, schema and table are empty strings, then the result set contains a list of valid table types for the data source. (All columns except the TABLE_TYPE column contain NULLs.)
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// odbc_tables(
//    resource $odbc,
//    ?string $catalog = null,
//    ?string $schema = null,
//    ?string $table = null,
//    ?string $types = null
// ): resource|false
// ===== CODE
$return_odbc_tables = odbc_tables(

$odbc, // resource odbc - The ODBC connection identifier, see odbc_connect() for details.

$catalog, // string catalog - The catalog ('qualifier' in ODBC 2 parlance).

$schema, // string schema - The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$table, // string table - The name. This parameter accepts the following search patterns: % to match zero or more characters, and _ to match a single character.

$types // string types - If table_type is not an empty string, it must contain a list of comma-separated values for the types of interest; each value may be enclosed in single quotes (') or unquoted. For example, 'TABLE','VIEW' or TABLE, VIEW. If the data source does not support a specified table type, odbc_tables() does not return any results for that type.

); // Return Values
// Returns an ODBC result identifier containing the information or false on failure.
// The result set has the following columns:
// * TABLE_CAT
// * TABLE_SCHEM
// * TABLE_NAME
// * TABLE_TYPE
// * REMARKS
// Drivers can report additional columns.
// The result set is ordered by TABLE_TYPE, TABLE_CAT, TABLE_SCHEM and TABLE_NAME.
// 
// Changelog
// Version - Description
// 8.0.0   - schema, table and types are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 List Tables in a Catalog
// [php]
// $conn = odbc_connect($dsn, $user, $pass);
// $tables = odbc_tables($conn, 'SalesOrders', 'dbo', '%', 'TABLE');
// while (($row = odbc_fetch_array($tables))) {
//     print_r($row);
//     break; // further rows omitted for brevity
// }
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [TABLE_CAT] => SalesOrders
//     [TABLE_SCHEM] => dbo
//     [TABLE_NAME] => Orders
//     [TABLE_TYPE] => TABLE
//     [REMARKS] =>
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-13)
// URL: https://www.php.net/manual/en/function.odbc-tables.php
// ========== ODBC_TABLES - END

// SYNTAX:
// resource|false odbc_tables(resource $odbc, string $catalog = null, string $schema = null, string $table = null, string $types = null)

return $return_odbc_tables; // resource|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_ODBC_ODBC_TABLES
// ==============================


// ============================== END
//   PHP_DATABASE_ABSTRACT_ODBC   
// ==============================
?>