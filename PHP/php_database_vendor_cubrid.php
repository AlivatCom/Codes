<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_VENDOR_CUBRID - BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_BIND - bool php_database_vendor_cubrid_cubrid_bind(resource $req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_PREPARE - bool php_database_vendor_cubrid_cubrid_close_prepare(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_REQUEST - bool php_database_vendor_cubrid_cubrid_close_request(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_GET - array php_database_vendor_cubrid_cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_SIZE - int php_database_vendor_cubrid_cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_NAMES - array php_database_vendor_cubrid_cubrid_column_names(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_TYPES - array php_database_vendor_cubrid_cubrid_column_types(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COMMIT - bool php_database_vendor_cubrid_cubrid_commit(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT_WITH_URL - resource php_database_vendor_cubrid_cubrid_connect_with_url(string $conn_url, string $userid, string $passwd, bool $new_link = false)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT - resource php_database_vendor_cubrid_cubrid_connect(string $host, int $port, string $dbname, string $userid, string $passwd, bool $new_link = false)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CURRENT_OID - string php_database_vendor_cubrid_cubrid_current_oid(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DISCONNECT - bool php_database_vendor_cubrid_cubrid_disconnect(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DROP - bool php_database_vendor_cubrid_cubrid_drop(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE_FACILITY - int php_database_vendor_cubrid_cubrid_error_code_facility()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE - int php_database_vendor_cubrid_cubrid_error_code()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_MSG - string php_database_vendor_cubrid_cubrid_error_msg()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_EXECUTE - resource php_database_vendor_cubrid_cubrid_execute(resource $conn_identifier, string $sql, int $option = 0)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH - mixed php_database_vendor_cubrid_cubrid_fetch(resource $result, int $type = CUBRID_BOTH)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FREE_RESULT - bool php_database_vendor_cubrid_cubrid_free_result(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_AUTOCOMMIT - bool php_database_vendor_cubrid_cubrid_get_autocommit(resource $conn_identifier)

// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CHARSET

// PHP_DATABASE_VENDOR_CUBRID - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PECL_CUBRID_8_4_0
// ============================== USING FUNCTIONS (20)
// cubrid_bind() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_close_prepare() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_close_request() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_col_get() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_col_size() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_column_names() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_column_types() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_commit() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_connect_with_url() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_connect() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_current_oid() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_disconnect() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_error_code_facility() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_error_code() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_error_msg() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_execute() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_fetch() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_free_result() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get_autocommit() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// ============================== END
//          REQUIREMENTS          
// ==============================


// CUBRID_FUNCTIONS
// * cubrid_bind                - Bind variables to a prepared statement as parameters
// * cubrid_close_prepare       - Close the request handle
// * cubrid_close_request       - Close the request handle
// * cubrid_col_get             - Get contents of collection type column using OID
// * cubrid_col_size            - Get the number of elements in collection type column using OID
// * cubrid_column_names        - Get the column names in result
// * cubrid_column_types        - Get column types in result
// * cubrid_commit              - Commit a transaction
// * cubrid_connect_with_url    - Establish the environment for connecting to CUBRID server
// * cubrid_connect             - Open a connection to a CUBRID Server
// * cubrid_current_oid         - Get OID of the current cursor location
// * cubrid_disconnect          - Close a database connection
// * cubrid_drop                - Delete an instance using OID
// * cubrid_error_code_facility - Get the facility code of error
// * cubrid_error_code          - Get error code for the most recent function call
// * cubrid_error_msg           - Get last error message for the most recent function call
// * cubrid_execute             - Execute a prepared SQL statement
// * cubrid_fetch               - Fetch the next row from a result set
// * cubrid_free_result         - Free the memory occupied by the result data
// * cubrid_get_autocommit      - Get auto-commit mode of the connection

// * cubrid_get_charset         - Return the current CUBRID connection charset
// * cubrid_get_class_name      - Get the class name using OID
// * cubrid_get_client_info     - Return the client library version
// * cubrid_get_db_parameter    - Returns the CUBRID database parameters
// * cubrid_get_query_timeout   - Get the query timeout value of the request
// * cubrid_get_server_info     - Return the CUBRID server version
// * cubrid_get                 - Get a column using OID
// * cubrid_insert_id           - Return the ID generated for the last updated AUTO_INCREMENT column
// * cubrid_is_instance         - Check whether the instance pointed by OID exists
// * cubrid_lob_close           - Close BLOB/CLOB data
// * cubrid_lob_export          - Export BLOB/CLOB data to file
// * cubrid_lob_get             - Get BLOB/CLOB data
// * cubrid_lob_send            - Read BLOB/CLOB data and send straight to browser
// * cubrid_lob_size            - Get BLOB/CLOB data size
// * cubrid_lob2_bind           - Bind a lob object or a string as a lob object to a prepared statement as parameters
// * cubrid_lob2_close          - Close LOB object
// * cubrid_lob2_export         - Export the lob object to a file
// * cubrid_lob2_import         - Import BLOB/CLOB data from a file
// * cubrid_lob2_new            - Create a lob object
// * cubrid_lob2_read           - Read from BLOB/CLOB data
// * cubrid_lob2_seek64         - Move the cursor of a lob object
// * cubrid_lob2_seek           - Move the cursor of a lob object
// * cubrid_lob2_size64         - Get a lob object's size
// * cubrid_lob2_size           - Get a lob object's size
// * cubrid_lob2_tell64         - Tell the cursor position of the LOB object
// * cubrid_lob2_tell           - Tell the cursor position of the LOB object
// * cubrid_lob2_write          - Write to a lob object
// * cubrid_lock_read           - Set a read lock on the given OID
// * cubrid_lock_write          - Set a write lock on the given OID
// * cubrid_move_cursor         - Move the cursor in the result
// * cubrid_next_result         - Get result of next query when executing multiple SQL statements
// * cubrid_num_cols            - Return the number of columns in the result set
// * cubrid_num_rows            - Get the number of rows in the result set
// * cubrid_pconnect_with_url   - Open a persistent connection to CUBRID server
// * cubrid_pconnect            - Open a persistent connection to a CUBRID server
// * cubrid_prepare             - Prepare a SQL statement for execution
// * cubrid_put                 - Update a column using OID
// * cubrid_rollback            - Roll back a transaction
// * cubrid_schema              - Get the requested schema information
// * cubrid_seq_drop            - Delete an element from sequence type column using OID
// * cubrid_seq_insert          - Insert an element to a sequence type column using OID
// * cubrid_seq_put             - Update the element value of sequence type column using OID
// * cubrid_set_add             - Insert a single element to set type column using OID
// * cubrid_set_autocommit      - Set autocommit mode of the connection
// * cubrid_set_db_parameter    - Sets the CUBRID database parameters
// * cubrid_set_drop            - Delete an element from set type column using OID
// * cubrid_set_query_timeout   - Set the timeout time of query execution
// * cubrid_version             - Get the CUBRID PHP module's version


// ============================== BEGIN
//   PHP_DATABASE_VENDOR_CUBRID   
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Vendor Specific Database Extensions / CUBRID
// URL: https://www.php.net/manual/en/book.cubrid.php
// ============================== DESCRIPTION
// CUBRID
// 
// CUBRID - BEGIN
// CUBRID
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// CUBRID_FUNCTIONS
// CUBRID_MYSQL_COMPATIBILITY_FUNCTIONS
// CUBRID_OBSOLETE_ALIASES_AND_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// These functions allow you to access CUBRID database servers. More information about CUBRID can be found at » CUBRID.
// Documentation for CUBRID can be found at » CUBRID Documentation.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/book.cubrid.php
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
// In order to have these functions available, you must install CUBRID, and compile CUBRID PHP Library with CUBRID support.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: » https://pecl.php.net/package/cubrid.
// A DLL for this PECL extension is currently unavailable. See also the building on Windows section.
// For information about manual installation on Linux and Windows systems, please read the file build-guide.html included in the package.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// There is no runtime configuration now.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// There are four resource types used in CUBRID. The first one is the link identifier for a database connection, the second is the a resource which holds the result of a query, and the last two a resource which holds the query results of BLOB/CLOB data types.
// 
// connection identifier - A connection identifier returned by cubrid_connect(), cubrid_connect_with_url(), cubrid_pconnect() and cubrid_pconnect_with_url().
// request identifier    - A request identifier returned by cubrid_prepare() and cubrid_execute().
// LOB identifier        - A LOB identifier returned by cubrid_lob_get().
// LOB2 identifier       - A LOB identifier returned by cubrid_lob2_new() or get from the result set.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// The following constants can be used when executing SQL statement. They can be passed to cubrid_prepare() and cubrid_execute().
// 
// CUBRID SQL execution flags
// Constant              - Description
// CUBRID_INCLUDE_OID    - Determine whether to get OID during query execution.
// CUBRID_ASYNC          - Execute the query in asynchronous mode.
// CUBRID_EXEC_QUERY_ALL - Execute the query in synchronous mode. This flag must be set when executing multiple SQL statements.
// 
// The following constants can be used when fetching the results to specify fetch behaviour. They can be passed to cubrid_fetch() and cubrid_fetch_array().
// 
// CUBRID fetch flags
// Constant      - Description
// CUBRID_NUM    - Get query result as a numeric array (0-default).
// CUBRID_ASSOC  - Get query result as an associative array.
// CUBRID_BOTH   - Get query result as both numeric and associative arrays (default value).
// CUBRID_OBJECT - Get query result an object.
// CUBRID_LOB    - The constant CUBRID_LOB can be used when you want to operate the lob object. It can be passed to cubrid_fetch(), cubrid_fetch_row(), cubrid_fetch_array(), cubrid_fetch_assoc() and cubrid_fetch_object().
// 
// The following constants can be used when positioning the cursor in query results. They can be passed to or returned by cubrid_move_cursor().
// 
// CUBRID cursor position flags
// Constant              - Description
// CUBRID_CURSOR_FIRST   - Move current cursor to the first position in the result.
// CUBRID_CURSOR_CURRENT - Move current cursor as a default value if the origin is not specified.
// CUBRID_CURSOR_LAST    - Move current cursor to the last position in the result.
// CUBRID_CURSOR_SUCCESS - Returned value of cubrid_move_cursor() function in case of success. This flag has been removed from 8.4.1.
// CUBRID_NO_MORE_DATA   - Returned value of cubrid_move_cursor() function in case of failure. This flag has been removed from 8.4.1.
// CUBRID_CURSOR_ERROR   - Returned value of cubrid_move_cursor() function in case of failure. This flag has been removed from 8.4.1.
// 
// The following constants can be used when setting the auto-commit mode for the database connection. They can be passed to cubrid_set_autocommit() or returned by cubrid_get_autocommit().
// 
// CUBRID auto-commit mode flags
// Constant                - Description
// CUBRID_AUTOCOMMIT_TRUE  - Enable the auto-commit mode.
// CUBRID_AUTOCOMMIT_FALSE - Disable the auto-commit mode.
// 
// The following constants can be used when setting the database parameter. They can be passed to cubrid_set_db_parameter().
// 
// CUBRID parameter flags
// Constant                     - Description
// CUBRID_PARAM_ISOLATION_LEVEL - Transaction isolation level for the database connection.
// CUBRID_PARAM_LOCK_TIMEOUT    - Transaction timeout in seconds.
// 
// The following constants can be used when setting the transaction isolation level. They can be passed to cubrid_set_db_parameter() or returned by cubrid_get_db_parameter().
// 
// CUBRID isolation level flags
// Constant                            - Description
// TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE - The lowest isolation level (1). A dirty, non-repeatable or phantom read may occur for the tuple and a non-repeatable read may occur for the table as well.
// TRAN_COMMIT_CLASS_COMMIT_INSTANCE   - A relatively low isolation level (2). A dirty read does not occur, but non-repeatable or phantom read may occur.
// TRAN_REP_CLASS_UNCOMMIT_INSTANCE    - The default isolation of CUBRID (3). A dirty, non-repeatable or phantom read may occur for the tuple, but repeatable read is ensured for the table.
// TRAN_REP_CLASS_COMMIT_INSTANCE      - A relatively low isolation level (4). A dirty read does not occur, but non-repeatable or phantom read may.
// TRAN_REP_CLASS_REP_INSTANCE         - A relatively high isolation level (5). A dirty or non-repeatable read does not occur, but a phantom read may.
// TRAN_SERIALIZABLE                   - The highest isolation level (6). Problems concerning concurrency (e.g. dirty read, non-repeatable read, phantom read, etc.) do not occur.
// 
// The following constants can be used when getting schema information. They can be passed to cubrid_schema().
// 
// CUBRID schema flags
// Constant                      - Description
// CUBRID_SCH_CLASS              - Get name and type of table in CUBRID.
// CUBRID_SCH_VCLASS             - Get name and type of view in CUBRID.
// CUBRID_SCH_QUERY_SPEC         - Get the query definition of view.
// CUBRID_SCH_ATTRIBUTE          - Get the attributes of table column.
// CUBRID_SCH_CLASS_ATTRIBUTE    - Get the attributes of table.
// CUBRID_SCH_METHOD             - Get the instance method. The instance method is a method called by a class instance. It is used more often than the class method because most operations are executed in the instance.
// CUBRID_SCH_CLASS_METHOD       - Get the class method. The class method is a method called by a class object. It is usually used to create a new class instance or to initialize it. It is also used to access or update class attributes.
// CUBRID_SCH_METHOD_FILE        - Get the information of the file where the method of the table is defined.
// CUBRID_SCH_SUPERCLASS         - Get the name and type of table which table inherites attributes from.
// CUBRID_SCH_SUBCLASS           - Get the name and type of table which inherites attributes from this table.
// CUBRID_SCH_CONSTRAINT         - Get the table constraints.
// CUBRID_SCH_TRIGGER            - Get the table triggers.
// CUBRID_SCH_CLASS_PRIVILEGE    - Get the privilege information of table.
// CUBRID_SCH_ATTR_PRIVILEGE     - Get the privilege information of column.
// CUBRID_SCH_DIRECT_SUPER_CLASS - Get the direct super table of table.
// CUBRID_SCH_PRIMARY_KEY        - Get the table primary key.
// CUBRID_SCH_IMPORTED_KEYS      - Get imported keys of table.
// CUBRID_SCH_EXPORTED_KEYS      - Get exported keys of table.
// CUBRID_SCH_CROSS_REFERENCE    - Get reference relationship of tow tables.
// 
// The following constants can be used when reporting errors. They can be returned from cubrid_error_code_facility().
// 
// CUBRID error facility code
// Constant               - Description
// CUBRID_FACILITY_DBMS   - The error occurred in CUBRID dbms.
// CUBRID_FACILITY_CAS    - The error occurred in CUBRID broker cas.
// CUBRID_FACILITY_CCI    - The error occurred in CUBRID cci.
// CUBRID_FACILITY_CLIENT - The error occurred in CUBRID PHP client.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples 
// 
// The following is a simple example that establishes a connection between PHP and CUBRID. This section will cover the most basic and notable features. The following code required to connect to CUBRID database, which means CUBRID Server and CUBRID Broker have to be running.
// The example below uses the demodb database as an examples. By default it is created during the installation. Make sure it has been created.
// [example]
// Example #1 Example of Data Retrieval
// [code]
// <html>
//     <head>
//     <meta http-equiv="content-type" content="text/html; charset=euc-kr">
//     </head>
//     <body>
//     <center>
//     <table border=2>
// [php]
//         /**
//          * Set server information for CUBRID connection. host_ip is the IP
//          * address where the CUBRID Broker is installed (localhost in this
//          * example), and host_port is the port number of the CUBRID Broker.
//          * The port number is the default given during the installation.
//          * For details, see "Administrator's Guide."
//          */
//         $host_ip = "localhost";
//         $host_port = 33000;
//         $db_name = "demodb";
//         /**
//          * Connect to CUBRID Server. Do not make the actual connection, but
//          * only retain the connection information. The reason for not making
//          * the actual connection is to handle transaction more efficiently
//          * in the 3-tier architecture. 
//          */
//         $cubrid_con = @cubrid_connect($host_ip, $host_port, $db_name);
//  
//         if (!$cubrid_con) {
//             echo "Database Connection Error";
//             exit;
//         }
// [/php]
// [php]
//         $sql = "select sports, count(players) as players from event group by sports";
//         /**
//          * Request the CUBRID Server for the results of the SQL statement.
//          * Now make the actual connection to the CUBRID Server.
//          */
//         $result = cubrid_execute($cubrid_con, $sql);
//  
//         if ($result) {
//             /**
//              * Get the column names from the result set created by the SQL query.
//              */
//             $columns = cubrid_column_names($result);
//             /**
//              * Get the number of columns in the result set created by the SQL query.
//              */
//             $num_fields = cubrid_num_cols($result);
//             /**
//              * List the column names of the result set on the screen. 
//              */
//             echo "<tr>";
//  
//             while (list($key, $colname) = each($columns)) {
//                 echo "<td align=center>$colname</td>";
//             }
//  
//             echo "</tr>";
//  
//             /**
//              * Get the results from the result set.
//              */
//             while ($row = cubrid_fetch($result)) {
//                 echo "<tr>";
//  
//                 for ($i = 0; $i < $num_fields; $i++) {
//                     echo "<td align=center>";
//                     echo $row[$i];
//                     echo "</td>";
//                 }
//  
//                 echo "</tr>";
//             }
//         }
//         /**
//          * The PHP module in the CUBRID runs in a 3-tier architecture. Even when
//          * calling SELECT for transaction processing, it is processed as a part
//          * of the transaction. Therefore, the transaction needs to be rolled back
//          * by calling commit or rollback even though SELECT was called for smooth
//          * performance.
//          */
//         cubrid_commit($cubrid_con);
//         cubrid_disconnect($cubrid_con);
// [/php]
//     </body>
//     </html>
// [/code]
// [/example]
// [example]
// Example #2 Example of Data Insertion
// [code]
// <html>
//     <head>
//     <meta http-equiv="content-type" content="text/html; charset=euc- kr">
//     </head>
//     <body>
//     <center>
//     <table border=2>
// [php]
//         /**
//          * host_ip is the IP address where the CUBRID Broker is installed
//          * host_port is the port number of the CUBRID Broker
//          * db_name is the name of CUBRID Database
//          */
//         $host_ip = "localhost";
//         $host_port = 33000;
//         $db_name = "demodb";
//         $cubrid_con = @cubrid_connect($host_ip, $host_port, $db_name);
//  
//         if (!$cubrid_con) {
//             echo "Database Connection Error";
//             exit;
//         }
// [/php]
// [php]
//         $sql = "insert into olympic (host_year,host_nation,host_city,"
//             . "opening_date,closing_date) values (2008, 'China', 'Beijing',"
//             . "to_date('08-08-2008','mm-dd- yyyy'),to_date('08-24-2008','mm-dd-yyyy')) ;";
//         $result = cubrid_execute($cubrid_con, $sql);
//         if ($result) {
//             /**
//              * Handled successfully, so commit.
//              */
//             cubrid_commit($cubrid_con);
//             echo "Inserted successfully ";
//         } else {
//             /**
//              * Error occurred, so the error message is output and rollback is called.
//              */
//             echo cubrid_error_msg();
//             cubrid_rollback($cubrid_con);
//         }
//         cubrid_disconnect($cubrid_con);
// [/php]
//     </body>
//     </html>
// [/code]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.examples.php
// EXAMPLES - END
// 
// CUBRID_FUNCTIONS - BEGIN
// CUBRID Functions
// 
// Table of Contents
// * cubrid_bind                - Bind variables to a prepared statement as parameters
// * cubrid_close_prepare       - Close the request handle
// * cubrid_close_request       - Close the request handle
// * cubrid_col_get             - Get contents of collection type column using OID
// * cubrid_col_size            - Get the number of elements in collection type column using OID
// * cubrid_column_names        - Get the column names in result
// * cubrid_column_types        - Get column types in result
// * cubrid_commit              - Commit a transaction
// * cubrid_connect_with_url    - Establish the environment for connecting to CUBRID server
// * cubrid_connect             - Open a connection to a CUBRID Server
// * cubrid_current_oid         - Get OID of the current cursor location
// * cubrid_disconnect          - Close a database connection
// * cubrid_drop                - Delete an instance using OID
// * cubrid_error_code_facility - Get the facility code of error
// * cubrid_error_code          - Get error code for the most recent function call
// * cubrid_error_msg           - Get last error message for the most recent function call
// * cubrid_execute             - Execute a prepared SQL statement
// * cubrid_fetch               - Fetch the next row from a result set
// * cubrid_free_result         - Free the memory occupied by the result data
// * cubrid_get_autocommit      - Get auto-commit mode of the connection
// * cubrid_get_charset         - Return the current CUBRID connection charset
// * cubrid_get_class_name      - Get the class name using OID
// * cubrid_get_client_info     - Return the client library version
// * cubrid_get_db_parameter    - Returns the CUBRID database parameters
// * cubrid_get_query_timeout   - Get the query timeout value of the request
// * cubrid_get_server_info     - Return the CUBRID server version
// * cubrid_get                 - Get a column using OID
// * cubrid_insert_id           - Return the ID generated for the last updated AUTO_INCREMENT column
// * cubrid_is_instance         - Check whether the instance pointed by OID exists
// * cubrid_lob_close           - Close BLOB/CLOB data
// * cubrid_lob_export          - Export BLOB/CLOB data to file
// * cubrid_lob_get             - Get BLOB/CLOB data
// * cubrid_lob_send            - Read BLOB/CLOB data and send straight to browser
// * cubrid_lob_size            - Get BLOB/CLOB data size
// * cubrid_lob2_bind           - Bind a lob object or a string as a lob object to a prepared statement as parameters
// * cubrid_lob2_close          - Close LOB object
// * cubrid_lob2_export         - Export the lob object to a file
// * cubrid_lob2_import         - Import BLOB/CLOB data from a file
// * cubrid_lob2_new            - Create a lob object
// * cubrid_lob2_read           - Read from BLOB/CLOB data
// * cubrid_lob2_seek64         - Move the cursor of a lob object
// * cubrid_lob2_seek           - Move the cursor of a lob object
// * cubrid_lob2_size64         - Get a lob object's size
// * cubrid_lob2_size           - Get a lob object's size
// * cubrid_lob2_tell64         - Tell the cursor position of the LOB object
// * cubrid_lob2_tell           - Tell the cursor position of the LOB object
// * cubrid_lob2_write          - Write to a lob object
// * cubrid_lock_read           - Set a read lock on the given OID
// * cubrid_lock_write          - Set a write lock on the given OID
// * cubrid_move_cursor         - Move the cursor in the result
// * cubrid_next_result         - Get result of next query when executing multiple SQL statements
// * cubrid_num_cols            - Return the number of columns in the result set
// * cubrid_num_rows            - Get the number of rows in the result set
// * cubrid_pconnect_with_url   - Open a persistent connection to CUBRID server
// * cubrid_pconnect            - Open a persistent connection to a CUBRID server
// * cubrid_prepare             - Prepare a SQL statement for execution
// * cubrid_put                 - Update a column using OID
// * cubrid_rollback            - Roll back a transaction
// * cubrid_schema              - Get the requested schema information
// * cubrid_seq_drop            - Delete an element from sequence type column using OID
// * cubrid_seq_insert          - Insert an element to a sequence type column using OID
// * cubrid_seq_put             - Update the element value of sequence type column using OID
// * cubrid_set_add             - Insert a single element to set type column using OID
// * cubrid_set_autocommit      - Set autocommit mode of the connection
// * cubrid_set_db_parameter    - Sets the CUBRID database parameters
// * cubrid_set_drop            - Delete an element from set type column using OID
// * cubrid_set_query_timeout   - Set the timeout time of query execution
// * cubrid_version             - Get the CUBRID PHP module's version
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/ref.cubrid.php
// CUBRID_FUNCTIONS - END
// 
// CUBRID_MYSQL_COMPATIBILITY_FUNCTIONS - BEGIN
// CUBRID MySQL Compatibility Functions
// 
// Table of Contents
// * cubrid_affected_rows      - Return the number of rows affected by the last SQL statement
// * cubrid_client_encoding    - Return the current CUBRID connection charset
// * cubrid_close              - Close CUBRID connection
// * cubrid_data_seek          - Move the internal row pointer of the CUBRID result
// * cubrid_db_name            - Get db name from results of cubrid_list_dbs
// * cubrid_errno              - Return the numerical value of the error message from previous CUBRID operation
// * cubrid_error              - Get the error message
// * cubrid_fetch_array        - Fetch a result row as an associative array, a numeric array, or both
// * cubrid_fetch_assoc        - Return the associative array that corresponds to the fetched row
// * cubrid_fetch_field        - Get column information from a result and return as an object
// * cubrid_fetch_lengths      - Return an array with the lengths of the values of each field from the current row
// * cubrid_fetch_object       - Fetch the next row and return it as an object
// * cubrid_fetch_row          - Return a numerical array with the values of the current row
// * cubrid_field_flags        - Return a string with the flags of the given field offset
// * cubrid_field_len          - Get the maximum length of the specified field
// * cubrid_field_name         - Return the name of the specified field index
// * cubrid_field_seek         - Move the result set cursor to the specified field offset
// * cubrid_field_table        - Return the name of the table of the specified field
// * cubrid_field_type         - Return the type of the column corresponding to the given field offset
// * cubrid_list_dbs           - Return an array with the list of all existing CUBRID databases
// * cubrid_num_fields         - Return the number of columns in the result set
// * cubrid_ping               - Ping a server connection or reconnect if there is no connection
// * cubrid_query              - Send a CUBRID query
// * cubrid_real_escape_string - Escape special characters in a string for use in an SQL statement
// * cubrid_result             - Return the value of a specific field in a specific row
// * cubrid_unbuffered_query   - Perform a query without fetching the results into memory
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubridmysql.cubrid.php
// CUBRID_MYSQL_COMPATIBILITY_FUNCTIONS - END
// 
// CUBRID_OBSOLETE_ALIASES_AND_FUNCTIONS - BEGIN
// CUBRID Obsolete Aliases and Functions
// 
// Table of Contents
// * cubrid_load_from_glo - Read data from a GLO instance and save it in a file
// * cubrid_new_glo       - Create a glo instance
// * cubrid_save_to_glo   - Save requested file in a GLO instance
// * cubrid_send_glo      - Read data from glo and send it to std output
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/oldaliases.cubrid.php
// CUBRID_OBSOLETE_ALIASES_AND_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/book.cubrid.php
// CUBRID - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_BIND
// ============================== PUBLIC
// ============================== ABOUT
// Bind variables to a prepared statement as parameters.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_bind() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_bind($req_identifier, $bind_index, $bind_value, $bind_value_type)
{
$return_cubrid_bind = false;

// ========== CUBRID_BIND - BEGIN
// ===== ABOUT
// Bind variables to a prepared statement as parameters
// ===== DESCRIPTION
// The cubrid_bind() function is used to bind values to a corresponding named or question mark placeholder in the SQL statement that was passed to cubrid_prepare(). If bind_value_type is not given, string will be the default.
//  Note: If the type of data to be bound is BLOB/CLOB, CUBRID will try to map the data as a PHP stream. If the actually bind value type is not stream, CUBRID will convert it to string, and use it as the full path and file name of a file on the client filesystem.
//  If the type of data to be bound explicitly is ENUM, the bind_value argument should be the enum element which is in string format.
//  In CUBRID shard envrioment, the bind_value_type must be included in the cubrid_bind() function.
// The following table shows the types of substitute values.
// CUBRID Bind Date Types
// Support       | Bind Type         | Corresponding SQL Type
// Supported     | STRING            | CHAR, VARCHAR
//               | NCHAR             | NCHAR, NVARCHAR
//               | BIT               | BIT, VARBIT
//               | NUMERIC or NUMBER | SHORT, INT, NUMERIC
//               | FLOAT             | FLOAT
//               | DOUBLE            | DOUBLE
//               | TIME              | TIME
//               | DATE              | DATE
//               | TIMESTAMP         | TIMESTAMP
//               | OBJECT            | OBJECT
//               | ENUM              | ENUM
//               | BLOB              | BLOB
//               | CLOB              | CLOB
//               | NULL              | NULL
// Not supported | SET               | SET
//               | MULTISET          | MULTISET
//               | SEQUENCE          | SEQUENCE
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_bind(
//    resource $req_identifier,
//    int $bind_index,
//    mixed $bind_value,
//    string $bind_value_type = ?
// ): bool
// ===== CODE
$return_cubrid_bind = cubrid_bind(

$req_identifier, // resource req_identifier - Request identifier as a result of cubrid_prepare().

$bind_index, // int bind_index - Location of binding parameters. It starts with 1.

$bind_value, // mixed bind_value - Actual value for binding.

$bind_value_type // string bind_value_type - A type of the value to bind. (It is omitted by default. Thus, the system internally uses string by default. However, you need to specify the exact type of the value as an argument when they are NCHAR, BIT, or BLOB/CLOB).

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.3.1   - Added BLOB/CLOB data types support.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_bind() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $result = cubrid_execute($conn, "SELECT code FROM event WHERE sports='Basketball' and gender='M'");
// $row = cubrid_fetch_array($result, CUBRID_ASSOC);
// $event_code = $row["code"];
// 
// cubrid_close_request($result);
// 
// $game_req = cubrid_prepare($conn, "SELECT athlete_code FROM game WHERE host_year=1992 and event_code=? and nation_code='USA'");
// cubrid_bind($game_req, 1, $event_code, "number");
// cubrid_execute($game_req);
// 
// printf("--- Dream Team (1992 United States men's Olympic basketball team) ---\n");
// while ($athlete_code = cubrid_fetch_array($game_req, CUBRID_NUM)) {
//     $athlete_req = cubrid_prepare($conn, "SELECT name FROM athlete WHERE code=? AND nation_code='USA' AND event='Basketball' AND gender='M'");
//     cubrid_bind($athlete_req, 1, $athlete_code[0], "number");
//     cubrid_execute($athlete_req);
//     $row = cubrid_fetch_assoc($athlete_req);
//     printf("%s\n", $row["name"]);
// }
// 
// cubrid_close_request($game_req);
// cubrid_close_request($athlete_req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// --- Dream Team (1992 United States men's Olympic basketball team) ---
// Stockton John
// Robinson David
// Pippen Scottie
// Mullin C.
// Malone Karl
// Laettner C.
// Jordan Michael
// Johnson Earvin
// Ewing Patrick
// Drexler Clyde
// Bird Larry
// Barkley Charles
// [/result]
// [/example]
// [example]
// Example #2 cubrid_bind() BLOB/CLOB example
// [php]
// $con = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//     cubrid_execute($con,"DROP TABLE if exists php_cubrid_lob_test");
//     cubrid_execute($con,"CREATE TABLE php_cubrid_lob_test (doc_content CLOB)");
//     $sql = "INSERT INTO php_cubrid_lob_test(doc_content) VALUES(?)"; 
//     $req = cubrid_prepare($con, $sql); 
// 
//     $fp = fopen("book.txt", "rb");
// 
//     cubrid_bind($req, 1, $fp, "clob"); 
//     cubrid_execute($req);  
// }
// [/php]
// [/example]
// [example]
// Example #3 cubrid_bind() BLOB/CLOB example
// [php]
// $con = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//     cubrid_execute($con,"DROP TABLE if exists php_cubrid_lob_test");
//     cubrid_execute($con,"CREATE TABLE php_cubrid_lob_test (image BLOB)");
//     $sql = "INSERT INTO php_cubrid_lob_test(image) VALUES(?)"; 
//     $req = cubrid_prepare($con, $sql); 
// 
//     cubrid_bind($req, 1, "cubrid_logo.png", "blob"); 
//     cubrid_execute($req);  
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/function.cubrid-bind.php
// ========== CUBRID_BIND - END

// SYNTAX:
// bool cubrid_bind(resource $req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type)

return $return_cubrid_bind; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_BIND
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Close the request handle.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_close_prepare() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_close_prepare($req_identifier)
{
$return_cubrid_close_prepare = false;

// ========== CUBRID_CLOSE_PREPARE - BEGIN
// ===== ABOUT
// Close the request handle
// ===== DESCRIPTION
// The cubrid_close_prepare() function closes the request handle given by the req_identifier argument, and releases the memory region related to the handle. It is an alias of cubrid_close_request().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_close_prepare(resource $req_identifier): bool
// ===== CODE
$return_cubrid_close_prepare = cubrid_close_prepare(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Return true on success.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_close_prepare() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//    echo "connected successfully";
//    $req = cubrid_execute ( $con, "select * from members", 
//                            CUBRID_INCLUDE_OID | CUBRID_ASYNC);
//    if ($req) {
//       while ( list ($id, $name) = cubrid_fetch ($req) ){
//          echo $id;
//          echo $name;
//       } 
//       cubrid_close_prepare($req); // or you can use cubrid_close_request($req)
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/function.cubrid-close-prepare.php
// ========== CUBRID_CLOSE_PREPARE - END

// SYNTAX:
// bool cubrid_close_prepare(resource $req_identifier)

return $return_cubrid_close_prepare; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_REQUEST
// ============================== PUBLIC
// ============================== ABOUT
// Close the request handle.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_close_request() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_close_request($req_identifier)
{
$return_cubrid_close_request = false;

// ========== CUBRID_CLOSE_REQUEST - BEGIN
// ===== ABOUT
// Close the request handle
// ===== DESCRIPTION
// The cubrid_close_request() function closes the request handle given by the req_identifier argument, and releases the memory region related to the handle. It is an alias of cubrid_close_prepare().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_close_request(resource $req_identifier): bool
// ===== CODE
$return_cubrid_close_request = cubrid_close_request(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Return true on success.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_close_request() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//    echo "connected successfully";
//    $req = cubrid_execute ( $con, "select * from members", 
//                            CUBRID_INCLUDE_OID | CUBRID_ASYNC);
//    if ($req) {
//       while ( list ($id, $name) = cubrid_fetch ($req) ){
//          echo $id;
//          echo $name;
//       } 
//       cubrid_close_request($req); // or you can use cubrid_close_prepare($req)
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-close-request.php
// ========== CUBRID_CLOSE_REQUEST - END

// SYNTAX:
// bool cubrid_close_request(resource $req_identifier)

return $return_cubrid_close_request; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_REQUEST
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_GET
// ============================== PUBLIC
// ============================== ABOUT
// Get contents of collection type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_col_get() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_col_get($conn_identifier, $oid, $attr_name)
{
$return_cubrid_col_get = null;

// ========== CUBRID_COL_GET - BEGIN
// ===== ABOUT
// Get contents of collection type column using OID
// ===== DESCRIPTION
// The cubrid_col_get() function is used to get contents of the elements of the collection type (set, multiset, sequence) attribute you requested as an array.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name): array
// ===== CODE
$return_cubrid_col_get = cubrid_col_get(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance that you want to read.

$attr_name // string attr_name - Attribute name that you want to read from the instance.

); // Return Values
// Array (0-based numerical array) containing the elements you requested, when process is successful;
// false (to distinguish the error from the situation of attribute having empty collection or NULL, in case of error, a warning message is shown; in such case you can check the error by using cubrid_error_code()), when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_col_get() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// $size = cubrid_col_size($conn, $oid, "b");
// var_dump($size);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// int(3)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-col-get.php
// ========== CUBRID_COL_GET - END

// SYNTAX:
// array cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name)

return $return_cubrid_col_get; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_GET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get the number of elements in collection type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_col_size() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_col_size($conn_identifier, $oid, $attr_name)
{
$return_cubrid_col_size = 0;

// ========== CUBRID_COL_SIZE - BEGIN
// ===== ABOUT
// Get the number of elements in collection type column using OID
// ===== DESCRIPTION
// The cubrid_col_size() function is used to get the number of elements in a collection type (set, multiset, sequence) attribute.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name): int
// ===== CODE
$return_cubrid_col_size = cubrid_col_size(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID the instance that you want to work with.

$attr_name // string attr_name - Name of the attribute that you want to work with.

); // Return Values
// Number of elements, when process is successful, or false on failure.
// 
// Changelog
// Version - Description
// 8.3.1   - Change return value: when process is unsuccessful, return false, not -1.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_col_size() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// $size = cubrid_col_size($conn, $oid, "b");
// var_dump($size);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// int(3)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-col-size.php
// ========== CUBRID_COL_SIZE - END

// SYNTAX:
// int cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name)

return $return_cubrid_col_size; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_SIZE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_NAMES
// ============================== PUBLIC
// ============================== ABOUT
// Get the column names in result.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_column_names() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_column_names($req_identifier)
{
$return_cubrid_column_names = null;

// ========== CUBRID_COLUMN_NAMES - BEGIN
// ===== ABOUT
// Get the column names in result
// ===== DESCRIPTION
// The cubrid_column_names() function is used to get the column names of the query result by using req_identifier.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_column_names(resource $req_identifier): array
// ===== CODE
$return_cubrid_column_names = cubrid_column_names(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Array of string values containing the column names, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_column_names() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $column_names = cubrid_column_names($result);
// $column_types = cubrid_column_types($result);
// 
// printf("%-30s %-30s %-15s\n", "Column Names", "Column Types", "Column Maxlen");
// for($i = 0, $size = count($column_names); $i < $size; $i++) {
//     $column_len = cubrid_field_len($result, $i);
//     printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Column Names                   Column Types                   Column Maxlen  
// host_year                      integer                        11             
// event_code                     integer                        11             
// athlete_code                   integer                        11             
// stadium_code                   integer                        11             
// nation_code                    char                           3              
// medal                          char                           1              
// game_date                      date                           10             
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-column-names.php
// ========== CUBRID_COLUMN_NAMES - END

// SYNTAX:
// array cubrid_column_names(resource $req_identifier)

return $return_cubrid_column_names; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_NAMES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_TYPES
// ============================== PUBLIC
// ============================== ABOUT
// Get column types in result.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_column_types() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_column_types($req_identifier)
{
$return_cubrid_column_types = null;

// ========== CUBRID_COLUMN_TYPES - BEGIN
// ===== ABOUT
// Get column types in result
// ===== DESCRIPTION
// The cubrid_column_types() function gets column types of query results by using req_identifier.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_column_types(resource $req_identifier): array
// ===== CODE
$return_cubrid_column_types = cubrid_column_types(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Array of string values containing the column types, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_column_types() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $column_names = cubrid_column_names($result);
// $column_types = cubrid_column_types($result);
// 
// printf("%-30s %-30s %-15s\n", "Column Names", "Column Types", "Column Maxlen");
// for($i = 0, $size = count($column_names); $i < $size; $i++) {
//     $column_len = cubrid_field_len($result, $i);
//     printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Column Names                   Column Types                   Column Maxlen  
// host_year                      integer                        11             
// event_code                     integer                        11             
// athlete_code                   integer                        11             
// stadium_code                   integer                        11             
// nation_code                    char                           3              
// medal                          char                           1              
// game_date                      date                           10             
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-column-types.php
// ========== CUBRID_COLUMN_TYPES - END

// SYNTAX:
// array cubrid_column_types(resource $req_identifier)

return $return_cubrid_column_types; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_TYPES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Commit a transaction.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_commit() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_commit($conn_identifier)
{
$return_cubrid_commit = false;

// ========== CUBRID_COMMIT - BEGIN
// ===== ABOUT
// Commit a transaction
// ===== DESCRIPTION
// The cubrid_commit() function is used to execute commit on the transaction pointed by conn_identifier, currently in progress. Connection to the server is closed after the cubrid_commit() function is called; However, the connection handle is still valid.
// In CUBRID PHP, auto-commit mode is disabled by default for transaction management. You can set it by using cubrid_set_autocommit(). You can get its status by using cubrid_get_autocommit(). Before you start a transaction, remember to disable the auto-commit mode.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_commit(resource $conn_identifier): bool
// ===== CODE
$return_cubrid_commit = cubrid_commit(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_commit() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba"// );
// 
// @cubrid_execute($conn, "DROP TABLE publishers");
// 
// $sql = <<<EOD
// CREATE TABLE publishers(
// pub_id CHAR(3), 
// pub_name VARCHAR(20), 
// city VARCHAR(15), 
// state CHAR(2), 
// country VARCHAR(15)
// )
// EOD;
// cubrid_set_autocommit($conn,false);
// if (!cubrid_execute($conn, $sql)) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// 
// $req = cubrid_prepare($conn, "INSERT INTO publishers VALUES(?, ?, ?, ?, ?)");
// 
// $id_list = array("P01", "P02", "P03", "P04");
// $name_list = array("Abatis Publishers", "Core Dump Books", "Schadenfreude Press", "Tenterhooks Press");
// $city_list = array("New York", "San Francisco", "Hamburg", "Berkeley");
// $state_list = array("NY", "CA", NULL, "CA");
// $country_list = array("USA", "USA", "Germany", "USA");
// 
// for ($i = 0, $size = count($id_list); $i < $size; $i++) {
//     cubrid_bind($req, 1, $id_list[$i]);
//     cubrid_bind($req, 2, $name_list[$i]);
//     cubrid_bind($req, 3, $city_list[$i]);
//     cubrid_bind($req, 4, $state_list[$i]);
//     cubrid_bind($req, 5, $country_list[$i]);
// 
//     if (!($ret = cubrid_execute($req))) {
//         break;
//     }
// }
// 
// if (!$ret) {
//     cubrid_rollback($conn);
// } else {
//     cubrid_commit($conn);
// 
//     $req = cubrid_execute($conn, "SELECT * FROM publishers");
//     while ($result = cubrid_fetch_assoc($req)) {
//         printf("%-3s %-20s %-15s %-3s %-15s\n", 
//             $result["pub_id"], $result["pub_name"], $result["city"], $result["state"], $result["country"]);
//     }
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// P01 Abatis Publishers    New York        NY  USA            
// P02 Core Dump Books      San Francisco   CA  USA            
// P03 Schadenfreude Press  Hamburg             Germany        
// P04 Tenterhooks Press    Berkeley        CA  USA            
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-commit.php
// ========== CUBRID_COMMIT - END

// SYNTAX:
// bool cubrid_commit(resource $conn_identifier)

return $return_cubrid_commit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT_WITH_URL
// ============================== PUBLIC
// ============================== ABOUT
// Establish the environment for connecting to CUBRID server.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_connect_with_url() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_connect_with_url($conn_url, $userid, $passwd, $new_link = false)
{
$return_cubrid_connect_with_url = null;

// ========== CUBRID_CONNECT_WITH_URL - BEGIN
// ===== ABOUT
// Establish the environment for connecting to CUBRID server
// ===== DESCRIPTION
// The cubrid_connect_with_url() function is used to establish the environment for connecting to your server by using connection information passed with an url string argument. If the HA feature is enabled in CUBRID, you must specify the connection information of the standby server, which is used for failover when failure occurs, in the url string argument of this function. If the user name and password is not given, then the "PUBLIC" connection will be made by default.
// <url> ::= CUBRID:<host>:<db_name>:<db_user>:<db_password>:[?<properties>]
// <properties> ::= <property> [&<property>]
// <properties> ::= alhosts=<alternative_hosts>[ &rctime=<time>]
// <properties> ::= login_timeout=<milli_sec>
// <properties> ::= query_timeout=<milli_sec>
// <properties> ::= disconnect_on_query_timeout=true|false
// <alternative_hosts> ::= <standby_broker1_host>:<port> [,<standby_broker2_host>:<port>]
// <host> := HOSTNAME | IP_ADDR
// <time> := SECOND
// <milli_sec> := MILLI SECOND
// * host : A host name or IP address of the master database
// * db_name : A name of the database
// * db_user : A name of the database user
// * db_password : A database user password
// * alhosts : Specifies the broker information of the standby server, which is used for failover when it is impossible to connect to the active server. You can specify multiple brokers for failover, and the connection to the brokers is attempted in the order listed in alhosts
// * rctime : An interval between the attempts to connect to the active broker in which failure occurred. After a failure occurs, the system connects to the broker specified by althosts (failover), terminates the transaction, and then attempts to connect to the active broker of the master database at every rctime. The default value is 600 seconds.
// * login_timeout : Timeout value (unit: msec.) for database login. The default value is 0, which means infinite postponement.
// * query_timeout : Timeout value (unit: msec.) for query request. Upon timeout, a message to cancel requesting a query transferred to server is sent. The return value can depend on the disconnect_on_query_timeout configuration; even though the message to cancel a request is sent to server, that request may succeed.
// * disconnect_on_query_timeout : Configures a value whether to immediately return an error of function being executed upon timeout. The default value is false.
//  Note: ? and : that are used as identifiers in PHP connection URL can't be included in the password. The following is an example of a password that is invalid to use as connection URL because it contains "?:".
//  [code]
//  $url = "CUBRID:localhost:33000:tdb:dba:12?:?login_timeout=100";
//  [/code]
//  Passwords that contain ? or : may be passed as a separate parameter.
//  [code]
//  $url = "CUBRID:localhost:33000:tbd:::?login_timeout=100";
//  $conn = cubrid_connect_with_url($url, "dba", "12?");
//  [/code]
//  If user or password is empty,you can't delete ":",the following is an example.
//  [code]
//  $url = "CUBRID:localhost:33000:demodb:::";
//  [/code]
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_connect_with_url(
//    string $conn_url,
//    string $userid = ?,
//    string $passwd = ?,
//    bool $new_link = false
// ): resource
// ===== CODE
$return_cubrid_connect_with_url = cubrid_connect_with_url(

$conn_url, // string conn_url - A character string that contains server connection information.

$userid, // string userid - User name for the database.

$passwd, // string passwd - User password.

$new_link // bool new_link - If a second call is made to cubrid_connect_with_url() with the same arguments, no new connection will be established, but instead, the connection identifier of the already opened connection will be returned. The new_link parameter modifies this behavior and makes cubrid_connect_with_url() always open a new connection, even if cubrid_connect_with_url() was called before with the same parameters.

); // Return Values
// Connection identifier, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_connect_with_url() url without properties example
// [php]
// $conn_url = "CUBRID:localhost:33000:demodb:dba::";
// $con = cubrid_connect_with_url($conn_url);
// 
// if ($con) {
//    echo "connected successfully";
//    cubrid_execute($con, "create table person(id int,name char(16))");
//    $req =cubrid_execute($con, "insert into person values(1,'James')");
// 
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [example]
// Example #2 cubrid_connect_with_url() url with properties example
// [php]
// $conn_url = "CUBRID:127.0.0.1:33000:demodb:dba::?login_timeout=100";
// $con = cubrid_connect_with_url ($conn_url);
// 
// if ($con) {
//    echo "connected successfully";
//    cubrid_execute($con, "create table person(id int,name char(16))");
//    $req =cubrid_execute($con, "insert into person values(1,'James')");
// 
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-connect-with-url.php
// ========== CUBRID_CONNECT_WITH_URL - END

// SYNTAX:
// resource cubrid_connect_with_url(string $conn_url, string $userid, string $passwd, bool $new_link = false)

return $return_cubrid_connect_with_url; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT_WITH_URL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Open a connection to a CUBRID Server.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_connect() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_connect($host, $port, $dbname, $userid, $passwd, $new_link = false)
{
$return_cubrid_connect = null;

// ========== CUBRID_CONNECT - BEGIN
// ===== ABOUT
// Open a connection to a CUBRID Server
// ===== DESCRIPTION
// The cubrid_connect() function is used to establish the environment for connecting to your server by using your server address, port number, database name, user name, and password. If the user name and password is not given, then the "PUBLIC" connection will be made by default.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_connect(
//    string $host,
//    int $port,
//    string $dbname,
//    string $userid = ?,
//    string $passwd = ?,
//    bool $new_link = false
// ): resource
// ===== CODE
$return_cubrid_connect = cubrid_connect(

$host, // string host - Host name or IP address of CUBRID CAS server.

$port, // int port - Port number of CUBRID CAS server (BROKER_PORT configured in $CUBRID/conf/cubrid_broker.conf).

$dbname, // string dbname - Name of database.

$userid, // string userid - User name for the database. If not given, the default value is "public".

$passwd, // string passwd - User password. If not given, the default value is "".

$new_link // bool new_link - If a second call is made to cubrid_connect() with the same arguments, no new connection will be established, but instead, the connection identifier of the already opened connection will be returned. The new_link parameter modifies this behavior and makes cubrid_connect() always open a new connection, even if cubrid_connect() was called before with the same parameters.

); // Return Values
// Connection identifier, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_connect() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-connect.php
// ========== CUBRID_CONNECT - END

// SYNTAX:
// resource cubrid_connect(string $host, int $port, string $dbname, string $userid, string $passwd, bool $new_link = false)

return $return_cubrid_connect; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CURRENT_OID
// ============================== PUBLIC
// ============================== ABOUT
// Get OID of the current cursor location.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_current_oid() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_current_oid($req_identifier)
{
$return_cubrid_current_oid = null;

// ========== CUBRID_CURRENT_OID - BEGIN
// ===== ABOUT
// Get OID of the current cursor location
// ===== DESCRIPTION
// The cubrid_current_oid() function is used to get the oid of the current cursor location from the query result. To use cubrid_current_oid(), the query executed must be a updatable query, and the CUBRID_INCLUDE_OID option must be included during the query execution.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_current_oid(resource $req_identifier): string
// ===== CODE
$return_cubrid_current_oid = cubrid_current_oid(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Oid of current cursor location, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_current_oid() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code", CUBRID_INCLUDE_OID);
// $oid = cubrid_current_oid($req);
// $res = cubrid_get($conn, $oid);
// 
// print_r($res);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [s_name] => X
//     [f_name] => Mixed
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-current-oid.php
// ========== CUBRID_CURRENT_OID - END

// SYNTAX:
// string cubrid_current_oid(resource $req_identifier)

return $return_cubrid_current_oid; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CURRENT_OID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DISCONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Close a database connection.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_disconnect() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_disconnect($conn_identifier)
{
$return_cubrid_disconnect = false;

// ========== CUBRID_DISCONNECT - BEGIN
// ===== ABOUT
// Close a database connection
// ===== DESCRIPTION
// The cubrid_disconnect() function closes the connection handle and disconnects from server. If any request handle is not closed at this point, it will be closed. It is similar to the CUBRID MySQL compatible function cubrid_close().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_disconnect(resource $conn_identifier = ?): bool
// ===== CODE
$return_cubrid_disconnect = cubrid_disconnect(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_disconnect() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb");
// if ($con) {
//    echo "connected successfully";
//    
//    $req = cubrid_execute( $con, "create table person(id int,name char(10))");
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    
//    $req = cubrid_execute( $con, "insert into person values(1,'James')");
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-disconnect.php
// ========== CUBRID_DISCONNECT - END

// SYNTAX:
// bool cubrid_disconnect(resource $conn_identifier)

return $return_cubrid_disconnect; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DISCONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DROP
// ============================== PUBLIC
// ============================== ABOUT
// Delete an instance using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_drop($conn_identifier, $oid)
{
$return_cubrid_drop = false;

// ========== CUBRID_DROP - BEGIN
// ===== ABOUT
// Delete an instance using OID
// ===== DESCRIPTION
// The cubrid_drop() function is used to delete an instance from database by using the oid of the instance.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_drop(resource $conn_identifier, string $oid): bool
// ===== CODE
$return_cubrid_drop = cubrid_drop(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - Oid of the instance that you want to delete.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_drop() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// printf("--- Before Drop: ---\n");
// $attr = cubrid_get($conn, $oid);
// var_dump($attr);
// 
// if (cubrid_drop($conn, $oid)) {
//     cubrid_commit($conn);
// } else {
//     cubrid_rollback($conn);
// }
// 
// cubrid_close_request($req);
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// printf("\n--- After Drop: ---\n");
// $attr = cubrid_get($conn, $oid);
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// --- Before Drop: ---
// array(4) {
//   ["a"]=>
//   string(1) "1"
//   ["b"]=>
//   array(3) {
//     [0]=>
//     string(1) "1"
//     [1]=>
//     string(1) "2"
//     [2]=>
//     string(1) "3"
//   }
//   ["c"]=>
//   array(4) {
//     [0]=>
//     string(2) "11"
//     [1]=>
//     string(2) "22"
//     [2]=>
//     string(2) "33"
//     [3]=>
//     string(3) "333"
//   }
//   ["d"]=>
//   string(10) "a         "
// }
// 
// --- After Drop: ---
// array(4) {
//   ["a"]=>
//   string(1) "2"
//   ["b"]=>
//   array(3) {
//     [0]=>
//     string(1) "4"
//     [1]=>
//     string(1) "5"
//     [2]=>
//     string(1) "7"
//   }
//   ["c"]=>
//   array(4) {
//     [0]=>
//     string(2) "44"
//     [1]=>
//     string(2) "55"
//     [2]=>
//     string(2) "66"
//     [3]=>
//     string(3) "666"
//   }
//   ["d"]=>
//   string(10) "b         "
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-drop.php
// ========== CUBRID_DROP - END

// SYNTAX:
// bool cubrid_drop(resource $conn_identifier, string $oid)

return $return_cubrid_drop; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DROP
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE_FACILITY
// ============================== PUBLIC
// ============================== ABOUT
// Get the facility code of error.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_error_code_facility() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error_code_facility()
{
$return_cubrid_error_code_facility = 0;

// ========== CUBRID_ERROR_CODE_FACILITY - BEGIN
// ===== ABOUT
// Get the facility code of error
// ===== DESCRIPTION
// The cubrid_error_code_facility() function is used to get the facility code (level in which the error occurred) from the error code of the error that occurred during the API execution. Usually, you can get the error code when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_error_code_facility(): int
// ===== CODE
$return_cubrid_error_code_facility = cubrid_error_code_facility(

// This function has no parameters.

); // Return Values
// Facility code of the error code that occurred: CUBRID_FACILITY_DBMS, CUBRID_FACILITY_CAS, CUBRID_FACILITY_CCI, CUBRID_FACILITY_CLIENT.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error_code_facility() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = @cubrid_execute($conn, "SELECT * FROM unknown");
// if (!$req) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", 
//         cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// [/php]
// The above example will output:
// [result]
// Error facility: 1
// Error code: -493
// Error msg: Syntax: In line 1, column 15 before END OF STATEMENT
// Syntax error: unexpected 'unknown'
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-error-code-facility.php
// ========== CUBRID_ERROR_CODE_FACILITY - END

// SYNTAX:
// int cubrid_error_code_facility()

return $return_cubrid_error_code_facility; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE_FACILITY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE
// ============================== PUBLIC
// ============================== ABOUT
// Get error code for the most recent function call.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_error_code() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error_code()
{
$return_cubrid_error_code = 0;

// ========== CUBRID_ERROR_CODE - BEGIN
// ===== ABOUT
// Get error code for the most recent function call
// ===== DESCRIPTION
// The cubrid_error_code() function is used to get the error code of the error that occurred during the API execution. Usually, it gets the error code when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_error_code(): int
// ===== CODE
$return_cubrid_error_code = cubrid_error_code(

// This function has no parameters.

); // Return Values
// Error code of the error that occurred, or 0 (zero) if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error_code() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_prepare($conn , "SELECT * FROM code WHERE s_name=?");
// 
// $req = @cubrid_execute($req);
// if (!$req) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", 
//         cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// [/php]
// The above example will output:
// [result]
// Error facility: 4
// Error code: -30015
// Error msg: Some parameter not binded
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-error-code.php
// ========== CUBRID_ERROR_CODE - END

// SYNTAX:
// int cubrid_error_code()

return $return_cubrid_error_code; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_MSG
// ============================== PUBLIC
// ============================== ABOUT
// Get last error message for the most recent function call.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_error_msg() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error_msg()
{
$return_cubrid_error_msg = null;

// ========== CUBRID_ERROR_MSG - BEGIN
// ===== ABOUT
// Get last error message for the most recent function call
// ===== DESCRIPTION
// The cubrid_error_msg() function is used to get the error message that occurred during the use of CUBRID API. Usually, it gets error message when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_error_msg(): string
// ===== CODE
$return_cubrid_error_msg = cubrid_error_msg(

// This function has no parameters.

); // Return Values
// Error message that occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error_msg() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// if (!@cubrid_schema($conn, 100000)) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", 
//         cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// [/php]
// The above example will output:
// [result]
// Error facility: 2
// Error code: -10015
// Error msg: Invalid T_CCI_SCH_TYPE value
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-error-msg.php
// ========== CUBRID_ERROR_MSG - END

// SYNTAX:
// string cubrid_error_msg()

return $return_cubrid_error_msg; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_MSG
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_EXECUTE
// ============================== PUBLIC
// ============================== ABOUT
// Execute a prepared SQL statement.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_execute() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_execute($conn_identifier, $sql, $option = 0)
{
$return_cubrid_execute = null;

// ========== CUBRID_EXECUTE - BEGIN
// ===== ABOUT
// Execute a prepared SQL statement
// ===== DESCRIPTION
// The cubrid_execute() function is used to execute the given SQL statement. It executes the query by using conn_identifier and SQL, and then returns the request identifier created. It is used for simple execution of query, where the parameter binding is not needed. In addition, the cubrid_execute() function is used to execute the prepared statement by means of cubrid_prepare() and cubrid_bind(). At this time, you need to specify arguments of request_identifier and option.
// The option is used to determine whether to get OID after query execution and whether to execute the query in synchronous or asynchronous mode. CUBRID_INCLUDE_OID and CUBRID_ASYNC (or CUBRID_EXEC_QUERY_ALL if you want to execute multiple SQL statements) can be specified by using a bitwise OR operator. If not specified, neither of them isselected. If the flag CUBRID_EXEC_QUERY_ALL is set, a synchronous mode (sync_mode) is used to retrieve query results, and in such cases the following rules are applied:
//  * The return value is the result of the first query.
//  * If an error occurs in any query, the execution is processed as a failure.
//  * In a query composed of q1 q2 q3, if an error occurs in q2 after q1 succeeds the execution, the result of q1 remains valid. That is, the previous successful query executions are not rolled back when an error occurs.
//  * If a query is executed successfully, the result of the second query can be obtained using cubrid_next_result().
// If the first argument is request_identifier to execute the cubrid_prepare() function, you can specify an option, CUBRID_ASYNC only.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_execute(resource $conn_identifier, string $sql, int $option = 0): resource
// 
// cubrid_execute(resource $request_identifier, int $option = 0): bool
// ===== CODE
$return_cubrid_execute = cubrid_execute(

$conn_identifier, // resource conn_identifier - Connection identifier.

$sql, // string sql - SQL to be executed.

$option // int option - Query execution option CUBRID_INCLUDE_OID, CUBRID_ASYNC, CUBRID_EXEC_QUERY_ALL.

// resource request_identifier - cubrid_prepare() identifier.

); // Return Values
// Request identifier, when process is successful and first param is conn_identifier; true, when process is successful and first argument is request_identifier, or false on failure.
// 
// Changelog
// Version - Description
// 8.4.0   - Add new option CUBRID_EXEC_QUERY_ALL.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_execute() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $result = cubrid_execute($conn, "SELECT code FROM event WHERE name='100m Butterfly' and gender='M'", CUBRID_ASYNC);
// $row = cubrid_fetch_array($result, CUBRID_ASSOC);
// $event_code = $row["code"];
// 
// cubrid_close_request($result);
// 
// $history_req = cubrid_prepare($conn, "SELECT * FROM history WHERE event_code=?");
// cubrid_bind($history_req, 1, $event_code, "number");
// cubrid_execute($history_req);
// 
// printf("%-20s %-9s %-10s %-5s\n", "athlete", "host_year", "score", "unit");
// while ($row = cubrid_fetch_array($history_req, CUBRID_ASSOC)) {
//     printf("%-20s %-9s %-10s %-5s\n", 
//         $row["athlete"], $row["host_year"], $row["score"], $row["unit"]);
// }
// 
// cubrid_close_request($history_req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// athlete              host_year score      unit 
// Phelps Michael       2004      51.25      time 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-execute.php
// ========== CUBRID_EXECUTE - END

// SYNTAX:
// resource cubrid_execute(resource $conn_identifier, string $sql, int $option = 0)

return $return_cubrid_execute; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_EXECUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row from a result set.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== USING CONSTANTS (1)
// CUBRID_BOTH - cubrid_fetch()
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch($result, $type = CUBRID_BOTH)
{
$return_cubrid_fetch = null;

// ========== CUBRID_FETCH - BEGIN
// ===== ABOUT
// Fetch the next row from a result set
// ===== DESCRIPTION
// The cubrid_fetch() function is used to get a single row from the query result. The cursor automatically moves to the next row after getting the result.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch(resource $result, int $type = CUBRID_BOTH): mixed
// ===== CODE
$return_cubrid_fetch = cubrid_fetch(

$result, // resource result - result comes from a call to cubrid_execute()

$type // int type - Array type of the fetched result CUBRID_NUM, CUBRID_ASSOC, CUBRID_BOTH, CUBRID_OBJECT. If you want to operate the lob object, you can use CUBRID_LOB.

); // Return Values
// Result array or object, when process is successful.
// false, when there are no more rows; NULL, when process is unsuccessful.
// The result can be received either as an array or as an object, and you can decide which data type to use by setting the type argument. The type variable can be set to one of the following values:
// * CUBRID_NUM : Numerical array (0-based)
// * CUBRID_ASSOC : Associative array
// * CUBRID_BOTH : Numerical & Associative array (default)
// * CUBRID_OBJECT : object that has the attribute name as the column name of query result
// When type argument is omitted, the result will be received using CUBRID_BOTH option as default. When you want to receive query result in object data type, the column name of the result must obey the naming rules for identifiers in PHP. For example, column name such as "count(*)" cannot be received in object type.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT * FROM stadium WHERE nation_code='GRE' AND seats > 10000");
// 
// printf("%-40s %-10s %-6s %-20s\n", "name", "area", "seats", "address");
// while ($row = cubrid_fetch($req)) {
//     printf("%-40s %-10s %-6s %-20s\n", 
//         $row["name"], $row["area"], $row["seats"], $row["address"]);
// }
// 
// // if you want to operate lob object, you can use cubrid_fetch($req, CUBRID_LOB)
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// name                                     area       seats  address             
// Panathinaiko Stadium                     86300.00   50000  Athens, Greece      
// Olympic Stadium                          54700.00   13000  Athens, Greece      
// Olympic Indoor Hall                      34100.00   18800  Athens, Greece      
// Olympic Hall                             52400.00   21000  Athens, Greece      
// Olympic Aquatic Centre                   42500.00   11500  Athens, Greece      
// Markopoulo Olympic Equestrian Centre     64000.00   15000  Markopoulo, Athens, Greece
// Faliro Coastal Zone Olympic Complex      34650.00   12171  Faliro, Athens, Greece
// Athens Olympic Stadium                   120400.00  71030  Maroussi, Athens, Greece 
// Ano Liossia                              34000.00   12000  Ano Liosia, Athens, Greece
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-fetch.php
// ========== CUBRID_FETCH - END

// SYNTAX:
// mixed cubrid_fetch(resource $result, int $type = CUBRID_BOTH)

return $return_cubrid_fetch; // mixed
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FREE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Free the memory occupied by the result data.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_free_result() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_free_result($req_identifier)
{
$return_cubrid_free_result = false;

// ========== CUBRID_FREE_RESULT - BEGIN
// ===== ABOUT
// Free the memory occupied by the result data
// ===== DESCRIPTION
// This function frees the memory occupied by the result data. It returns true on success or false on failure. Note that it can only frees the client fetch buffer now, and if you want free all memory, use function cubrid_close_request().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_free_result(resource $req_identifier): bool
// ===== CODE
$return_cubrid_free_result = cubrid_free_result(

$req_identifier // resource req_identifier - This is the request identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_free_result() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $req = cubrid_execute($conn, "SELECT * FROM history WHERE host_year=2004 ORDER BY event_code");
// $row = cubrid_fetch_assoc($req);
// var_dump($row);
// 
// cubrid_free_result($req);
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(5) {
//   ["event_code"]=>
//   string(5) "20005"
//   ["athlete"]=>
//   string(12) "Hayes Joanna"
//   ["host_year"]=>
//   string(4) "2004"
//   ["score"]=>
//   string(5) "12.37"
//   ["unit"]=>
//   string(4) "time"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-18)
// URL: https://www.php.net/manual/en/function.cubrid-free-result.php
// ========== CUBRID_FREE_RESULT - END

// SYNTAX:
// bool cubrid_free_result(resource $req_identifier)

return $return_cubrid_free_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FREE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_AUTOCOMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Get auto-commit mode of the connection.
// ============================== SUPPORT
// PECL_CUBRID_8_4_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_autocommit() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_autocommit($conn_identifier)
{
$return_cubrid_get_autocommit = false;

// ========== CUBRID_GET_AUTOCOMMIT - BEGIN
// ===== ABOUT
// Get auto-commit mode of the connection
// ===== DESCRIPTION
// The cubrid_get_autocommit() function is used to get the status of CUBRID database connection auto-commit mode.
// For CUBRID 8.4.0, auto-commit mode is disabled by default for transaction management.
// For CUBRID 8.4.1, auto-commit mode is enabled by default for transaction management.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_0
// ===== SYNTAX
// cubrid_get_autocommit(resource $conn_identifier): bool
// ===== CODE
$return_cubrid_get_autocommit = cubrid_get_autocommit(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// true, when auto-commit is on.
// false, when auto-commit is off.
// null on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-18)
// URL: https://www.php.net/manual/en/function.cubrid-get-autocommit.php
// ========== CUBRID_GET_AUTOCOMMIT - END

// SYNTAX:
// bool cubrid_get_autocommit(resource $conn_identifier)

return $return_cubrid_get_autocommit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_AUTOCOMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CHARSET
// ============================== PUBLIC
// ============================== ABOUT
// 
// ============================== SUPPORT
// 
// ============================== USING FUNCTIONS (1)
// 
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_charset($text)
{
$return_cubrid_get_charset = false;

// ========== CUBRID_GET_CHARSET - BEGIN
// ===== ABOUT
// Return the current CUBRID connection charset
// ===== DESCRIPTION
// This function returns the current CUBRID connection charset and is similar to the CUBRID MySQL compatible function cubrid_client_encoding().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get_charset(resource $conn_identifier): string
// ===== CODE
$return_cubrid_get_charset = cubrid_get_charset(

$conn_identifier // resource conn_identifier - The CUBRID connection.

);

// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-18)
// URL: https://www.php.net/manual/en/function.cubrid-get-charset.php
// ========== CUBRID_GET_CHARSET - END

// SYNTAX:
// int|float abs(int|float $num)

return $return_cubrid_get_charset; // array|null
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CHARSET
// ==============================


// ============================== END
//   PHP_DATABASE_VENDOR_CUBRID   
// ==============================
?>