<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI - BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT - mysqli|false php_database_vendor_mysql_mysqli_mysqli_connect(string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ESCAPE_STRING - string php_database_vendor_mysql_mysqli_mysqli_escape_string(mysqli $mysqli, string $string)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_EXECUTE - bool php_database_vendor_mysql_mysqli_mysqli_execute(mysqli_stmt $statement, array $params = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CLIENT_STATS - array php_database_vendor_mysql_mysqli_mysqli_get_client_stats()
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_LINKS_STATS - array php_database_vendor_mysql_mysqli_mysqli_get_links_stats()
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REPORT - bool php_database_vendor_mysql_mysqli_mysqli_report(int $flags)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SET_OPT - bool php_database_vendor_mysql_mysqli_mysqli_set_opt(mysqli $mysqli, int $option, string|int $value)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI - int|string|$mysqli|bool|mysqli|array|mysqli_result|object|mysqli_warning|false|mysqli_stmt _AFFECTED_ROWS, _AUTOCOMMIT, _BEGIN_TRANSACTION, _CHANGE_USER, _CHARACTER_SET_NAME, _CLOSE, _COMMIT, _CONNECT_ERRNO, _CONNECT_ERROR, _CONSTRUCT, _DEBUG, _DUMP_DEBUG_INFO, _ERRNO, _ERROR_LIST, _ERROR, _FIELD_COUNT, _GET_CHARSET, _CLIENT_INFO, _CLIENT_VERSION, _GET_CONNECTION_STATS, _HOST_INFO, _PROTOCOL_VERSION, _SERVER_INFO, _SERVER_VERSION, _GET_WARNINGS, _INFO, _INIT, _INSERT_ID, _KILL, _MORE_RESULTS, _MULTI_QUERY, _NEXT_RESULT, _OPTIONS, _PING, _POLL, _PREPARE, _QUERY, _REAL_CONNECT, _REAL_ESCAPE_STRING, _REAL_QUERY, _REAP_ASYNC_QUERY, _REFRESH, _RELEASE_SAVEPOINT, _ROLLBACK, _SAVEPOINT, _SELECT_DB, _SET_CHARSET, _SQLSTATE, _SSL_SET, _STAT, _STMT_INIT, _STORE_RESULT, _THREAD_ID, _THREAD_SAFE, _USE_RESULT, _WARNING_COUNT
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT - int|string|$mysqli_stmt|mysqli_stmt|bool|mixed|mysqli|void|array|mysqli_result|false|mysqli_warning _AFFECTED_ROWS, _ATTR_GET, _ATTR_SET, _BIND_PARAM, _BIND_RESULT, _CLOSE, _CONSTRUCT, _DATA_SEEK, _ERRNO, _ERROR_LIST, _ERROR, _EXECUTE, _FETCH, _FIELD_COUNT, _FREE_RESULT, _GET_RESULT, _GET_WARNINGS, _INSERT_ID, _MORE_RESULTS, _NEXT_RESULT, _NUM_ROWS, _PARAM_COUNT, _PREPARE, _RESET, _RESULT_METADATA, _SEND_LONG_DATA, _SQLSTATE, _STORE_RESULT
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT - mysqli_result|mysqli|int|$mysqli_result|bool|array|null|false|float|string|object|void|Iterator _CONSTRUCT, _CURRENT_FIELD, _DATA_SEEK, _FETCH_ALL, _FETCH_ARRAY, _FETCH_ASSOC, _FETCH_FIELD_DIRECT, _FETCH_FIELD, _FETCH_FIELDS, _FETCH_OBJECT, _FETCH_ROW, _FIELD_COUNT, _FIELD_SEEK, _FREE, _LENGTHS, _NUM_ROWS
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER - void|mysqli_driver|bool|int|array|$mysqli_driver _REPORT_MODE
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING - mysqli_warning|bool _CONSTRUCT, _NEXT
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION - string|mysqli_sql_exception _GETSQLSTATE
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== INSTALLATION
// NOT_BUNDLED (In order to have these functions available, you must compile PHP with support for the mysqli extension. The mysqli extension was introduced with PHP version 5.0.0. The MySQL Native Driver was included in PHP version 5.3.0.)
// ============================== USING FUNCTIONS (5)
// mysqli_connect() - PHP_5, PHP_7, PHP_8
// mysqli_execute() - PHP_5, PHP_7, PHP_8
// mysqli_get_client_stats() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli_get_links_stats() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// mysqli_report() - PHP_5, PHP_7, PHP_8
// ============================== USING SUBCLASSES (2)
// mysqli::escape_string() - PHP_5, PHP_7, PHP_8
// mysqli::set_opt() - PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (6)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI - PHP_5 - PHP_8
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT - PHP_5 - PHP_8
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT - PHP_5 - PHP_8
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER - PHP_5 - PHP_8
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING - PHP_5 - PHP_8
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION - PHP_8
// ============================== USING DATA_TYPES (21)
// mysqli - PHP_5, PHP_7, PHP_8
// false
// string
// int
// $mysqli - mysqli
// bool
// mysqli_stmt - PHP_5, PHP_7, PHP_8
// array
// mysqli_result - PHP_5, PHP_7, PHP_8
// object
// mysqli_warning - PHP_5, PHP_7, PHP_8
// $mysqli_stmt - mysqli_stmt
// mixed
// void
// $mysqli_result - mysqli_result
// null
// float
// Iterator
// mysqli_driver - PHP_5, PHP_7, PHP_8
// $mysqli_driver - mysqli_driver
// mysqli_sql_exception - PHP_5, PHP_7, PHP_8
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Vendor Specific Database Extensions / MySQL - MySQL Drivers and Plugins / MySQLi - MySQL Improved Extension
// URL: https://www.php.net/manual/en/book.mysqli.php
// ============================== DESCRIPTION
// MYSQL_IMPROVED_EXTENSION
// 
// MYSQL_IMPROVED_EXTENSION - BEGIN
// MySQL Improved Extension
// 
// INTRODUCTION
// OVERVIEW
// QUICK_START_GUIDE
// INSTALLING_CONFIGURING
// THE_MYSQLI_EXTENSION_AND_PERSISTENT_CONNECTIONS
// PREDEFINED_CONSTANTS
// NOTES
// THE_MYSQLI_EXTENSION_FUNCTION_SUMMARY
// THE_MYSQLI_CLASS
// THE_MYSQLI_STMT_CLASS
// THE_MYSQLI_RESULT_CLASS
// THE_MYSQLI_DRIVER_CLASS
// THE_MYSQLI_WARNING_CLASS
// THE_MYSQLI_SQL_EXCEPTION_CLASS
// ALIASES_AND_DEPRECATED_MYSQLI_FUNCTIONS
// CHANGELOG
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The mysqli extension allows you to access the functionality provided by MySQL 4.1 and above. More information about the MySQL Database server can be found at > http://www.mysql.com/
// An overview of software available for using MySQL from PHP can be found at Overview
// Documentation for MySQL can be found at > http://dev.mysql.com/doc/.
// Parts of this documentation included from MySQL manual with permissions of Oracle Corporation.
// Examples use either the > world or > sakila database, which are freely available.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/intro.mysqli.php
// INTRODUCTION - END
// 
// OVERVIEW - BEGIN
// Overview
// 
// This section provides an introduction to the options available to you when developing a PHP application that needs to interact with a MySQL database.
// 
// What is an API?
// An Application Programming Interface, or API, defines the classes, methods, functions and variables that your application will need to call in order to carry out its desired task. In the case of PHP applications that need to communicate with databases the necessary APIs are usually exposed via PHP extensions.
// APIs can be procedural or object-oriented. With a procedural API, you call functions to carry out tasks, with the object-oriented API you instantiate classes and then call methods on the resulting objects. Of the two, the latter is usually the preferred interface, as it is more modern and leads to better-organized code.
// When writing PHP applications that need to connect to the MySQL server there are several API options available. This document discusses what is available and how to select the best solution for your application.
// 
// What is a Connector?
// In the MySQL documentation, the term connector refers to a piece of software that allows your application to connect to the MySQL database server. MySQL provides connectors for a variety of languages, including PHP.
// If your PHP application needs to communicate with a database server you will need to write PHP code to perform such activities as connecting to the database server, querying the database, and other database-related functions. Software is required to provide the API that your PHP application will use, and also handle the communication between your application and the database server, possibly using other intermediate libraries where necessary. This software is known generically as a connector, as it allows your application to connect to a database server.
// 
// What is a Driver?
// A driver is a piece of software designed to communicate with a specific type of database server. The driver may also call a library, such as the MySQL Client Library or the MySQL Native Driver. These libraries implement the low-level protocol used to communicate with the MySQL database server.
// By way of an example, the PHP Data Objects (PDO) database abstraction layer may use one of several database-specific drivers. One of the drivers it has available is the PDO MYSQL driver, which allows it to interface with the MySQL server.
// Sometimes people use the terms connector and driver interchangeably, this can be confusing. In the MySQL-related documentation the term driver is reserved for software that provides the database-specific part of a connector package.
// 
// What is an Extension?
// In the PHP documentation you will come across another term - extension. The PHP code consists of a core, with optional extensions to the core functionality. PHP's MySQL-related extensions, such as the mysqli extension, and the PDO MySQL driver extension, are implemented using the PHP extension framework.
// An extension typically exposes an API to the PHP programmer, to allow its facilities to be used programmatically. However, some extensions which use the PHP extension framework do not expose an API to the PHP programmer.
// The PDO MySQL driver extension, for example, does not expose an API to the PHP programmer, but provides an interface to the PDO layer above it.
// The terms API and extension should not be taken to mean the same thing, as an extension may not necessarily expose an API to the programmer.
// 
// What are the main PHP API offerings for using MySQL?
// There are two main API options when considering connecting to a MySQL database server:
// * PHP's mysqli Extension
// * PHP Data Objects (PDO)
// Each has its own advantages and disadvantages. The following discussion aims to give a brief introduction to the key aspects of each API.
// 
// What is PHP's mysqli Extension?
// The mysqli extension, or as it is sometimes known, the MySQL improved extension, was developed to take advantage of new features found in MySQL systems versions 4.1.3 and newer. The mysqli extension is included with PHP versions 5 and later.
// The mysqli extension has a number of benefits, the key enhancements over the mysql extension being:
// * Object-oriented interface
// * Support for Prepared Statements
// * Support for Multiple Statements
// * Support for Transactions
// * Enhanced debugging capabilities
// As well as the object-oriented interface the extension also provides a procedural interface.
// The mysqli extension is built using the PHP extension framework, its source code is located in the directory ext/mysqli.
// For further information on the mysqli extension, see MySQLi.
// 
// What is PDO?
// PHP Data Objects, or PDO, is a database abstraction layer specifically for PHP applications. PDO provides a consistent API for your PHP application regardless of the type of database server your application will connect to. In theory, if you are using the PDO API, you could switch the database server you used, from say Firebird to MySQL, and only need to make minor changes to your PHP code.
// Other examples of database abstraction layers include JDBC for Java applications and DBI for Perl.
// While PDO has its advantages, such as a clean, simple, portable API, its main disadvantage is that it doesn't allow you to use all of the advanced features that are available in the latest versions of MySQL server. For example, PDO does not allow you to use MySQL's support for Multiple Statements.
// PDO is implemented using the PHP extension framework, its source code is located in the directory ext/pdo.
// For further information on PDO, see the PDO.
// 
// What is the PDO MYSQL driver?
// The PDO MYSQL driver is not an API as such, at least from the PHP programmer's perspective. In fact, the PDO MYSQL driver sits in the layer below PDO itself and provides MySQL-specific functionality. The programmer still calls the PDO API, but PDO uses the PDO MYSQL driver to carry out communication with the MySQL server.
// The PDO MYSQL driver is one of several available PDO drivers. Other PDO drivers available include those for the Firebird and PostgreSQL database servers.
// The PDO MYSQL driver is implemented using the PHP extension framework. Its source code is located in the directory ext/pdo_mysql. It does not expose an API to the PHP programmer.
// For further information on the PDO MYSQL driver, see MySQL (PDO).
// 
// What is PHP's MySQL Native Driver?
// In order to communicate with the MySQL database server, mysqli and the PDO MYSQL driver each use a low-level library that implements the required protocol. In the past, the only available library was the MySQL Client Library, otherwise known as libmysqlclient.
// However, the interface presented by libmysqlclient was not optimized for communication with PHP applications, as libmysqlclient was originally designed with C applications in mind. For this reason, the MySQL Native Driver, mysqlnd, was developed as an alternative to libmysqlclient for PHP applications.
// Both, the mysqli extension and the PDO MySQL driver can each be individually configured to use either libmysqlclient or mysqlnd. As mysqlnd is designed specifically to be utilised in the PHP system it has numerous memory and speed enhancements over libmysqlclient. You are strongly encouraged to take advantage of these improvements.
// The MySQL Native Driver is implemented using the PHP extension framework. The source code is located in ext/mysqlnd. It does not expose an API to the PHP programmer.
// 
// Comparison of Features
// The following table compares the functionality of the main methods of connecting to MySQL from PHP:
// 
// Comparison of MySQL API options for PHP
//                                              | PHP's mysqli Extension | PDO (Using PDO MySQL Driver and MySQL Native Driver)
// PHP version introduced                       | 5.0                    | 5.0
// MySQL development status                     | Active development     | Active development
// API supports Charsets                        | Yes                    | Yes
// API supports server-side Prepared Statements | Yes                    | Yes
// API supports client-side Prepared Statements | No                     | Yes
// API supports Stored Procedures               | Yes                    | Yes
// API supports Multiple Statements             | Yes                    | Most
// Supports all MySQL 4.1+ functionality        | Yes                    | Most
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.overview.php
// OVERVIEW - END
// 
// QUICK_START_GUIDE - BEGIN
// Quick start guide
// 
// DUAL_PROCEDURAL_AND_OBJECT_ORIENTED_INTERFACE
// CONNECTIONS
// EXECUTING_STATEMENTS
// PREPARED_STATEMENTS
// STORED_PROCEDURES
// MULTIPLE_STATEMENTS
// API_SUPPORT_FOR_TRANSACTIONS
// METADATA
// 
// This quick start guide will help with choosing and gaining familiarity with the PHP MySQL API.
// This quick start gives an overview on the mysqli extension. Code examples are provided for all major aspects of the API. Database concepts are explained to the degree needed for presenting concepts specific to MySQL.
// Required: A familiarity with the PHP programming language, the SQL language, and basic knowledge of the MySQL server.
// 
// DUAL_PROCEDURAL_AND_OBJECT_ORIENTED_INTERFACE - BEGIN
// Dual procedural and object-oriented interface
// 
// The mysqli extension features a dual interface. It supports the procedural and object-oriented programming paradigm.
// Users migrating from the old mysql extension may prefer the procedural interface. The procedural interface is similar to that of the old mysql extension. In many cases, the function names differ only by prefix. Some mysqli functions take a connection handle as their first argument, whereas matching functions in the old mysql interface take it as an optional last argument.
// [example]
// Example #1 Easy migration from the old mysql extension
// [php]
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $result = mysqli_query($mysqli, "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($result);
// echo $row['_msg'];
// 
// $mysql = mysql_connect("example.com", "user", "password");
// mysql_select_db("test");
// $result = mysql_query("SELECT 'Use the mysqli extension instead.' AS _msg FROM DUAL", $mysql);
// $row = mysql_fetch_assoc($result);
// echo $row['_msg'];
// [/php]
// The above example will output:
// [result]
// Please do not use the deprecated mysql extension for new development. Use the mysqli extension instead.
// [/result]
// [/example]
// 
// The object-oriented interface
// In addition to the classical procedural interface, users can choose to use the object-oriented interface. The documentation is organized using the object-oriented interface. The object-oriented interface shows functions grouped by their purpose, making it easier to get started. The reference section gives examples for both syntax variants.
// [example]
// Example #2 Object-oriented and procedural interface
// [php]
// 
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// 
// $result = mysqli_query($mysqli, "SELECT 'A world full of ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($result);
// echo $row['_msg'];
// 
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $result = $mysqli->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");
// $row = $result->fetch_assoc();
// echo $row['_msg'];
// [/php]
// The above example will output:
// [result]
// A world full of choices to please everybody.
// [/result]
// [/example]
// The object-oriented interface is used for the quickstart because the reference section is organized that way.
// 
// Mixing styles
// It is possible to switch between styles at any time. Mixing both styles is not recommended for code clarity and coding style reasons.
// [example]
// Example #3 Bad coding style
// [php]
// 
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $result = mysqli_query($mysqli, "SELECT 'Possible but bad style.' AS _msg FROM DUAL");
// 
// if ($row = $result->fetch_assoc()) {
//     echo $row['_msg'];
// }
// [/php]
// The above example will output:
// [result]
// Possible but bad style.
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.dual-interface.php
// DUAL_PROCEDURAL_AND_OBJECT_ORIENTED_INTERFACE - END
// 
// CONNECTIONS - BEGIN
// Connections
// 
// The MySQL server supports the use of different transport layers for connections. Connections use TCP/IP, Unix domain sockets or Windows named pipes.
// The hostname localhost has a special meaning. It is bound to the use of Unix domain sockets. To open a TCP/IP connection to the localhost, 127.0.0.1 must be used instead of the hostname localhost.
// [example]
// Example #1 Special meaning of localhost
// [php]
// 
// $mysqli = new mysqli("localhost", "user", "password", "database");
// 
// echo $mysqli->host_info . "\n";
// 
// $mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
// 
// echo $mysqli->host_info . "\n";
// [/php]
// The above example will output:
// [result]
// Localhost via UNIX socket
// 127.0.0.1 via TCP/IP
// [/result]
// [/example]
// 
// Connection parameter defaults
// Depending on the connection function used, assorted parameters can be omitted. If a parameter is not provided, then the extension attempts to use the default values that are set in the PHP configuration file.
// [example]
// Example #2 Setting defaults
// [code]
// mysqli.default_host=192.168.2.27
// mysqli.default_user=root
// mysqli.default_pw=""
// mysqli.default_port=3306
// mysqli.default_socket=/tmp/mysql.sock
// [/code]
// [/example]
// The resulting parameter values are then passed to the client library that is used by the extension. If the client library detects empty or unset parameters, then it may default to the library built-in values.
// 
// Built-in connection library defaults
// If the host value is unset or empty, then the client library will default to a Unix socket connection on localhost. If socket is unset or empty, and a Unix socket connection is requested, then a connection to the default socket on /tmp/mysql.sock is attempted.
// On Windows systems, the host name . is interpreted by the client library as an attempt to open a Windows named pipe based connection. In this case the socket parameter is interpreted as the pipe name. If not given or empty, then the socket (pipe name) defaults to \\.\pipe\MySQL.
// If neither a Unix domain socket based not a Windows named pipe based connection is to be established and the port parameter value is unset, the library will default to port 3306.
// The mysqlnd library and the MySQL Client Library (libmysqlclient) implement the same logic for determining defaults.
// 
// Connection options
// Connection options are available to, for example, set init commands which are executed upon connect, or for requesting use of a certain charset. Connection options must be set before a network connection is established.
// For setting a connection option, the connect operation has to be performed in three steps: creating a connection handle with mysqli_init() or mysqli::__construct(), setting the requested options using mysqli::options(), and establishing the network connection with mysqli::real_connect().
// 
// Connection pooling
// The mysqli extension supports persistent database connections, which are a special kind of pooled connections. By default, every database connection opened by a script is either explicitly closed by the user during runtime or released automatically at the end of the script. A persistent connection is not. Instead it is put into a pool for later reuse, if a connection to the same server using the same username, password, socket, port and default database is opened. Reuse saves connection overhead.
// Every PHP process is using its own mysqli connection pool. Depending on the web server deployment model, a PHP process may serve one or multiple requests. Therefore, a pooled connection may be used by one or more scripts subsequently.
// 
// Persistent connection
// If an unused persistent connection for a given combination of host, username, password, socket, port and default database cannot be found in the connection pool, then mysqli opens a new connection. The use of persistent connections can be enabled and disabled using the PHP directive mysqli.allow_persistent. The total number of connections opened by a script can be limited with mysqli.max_links. The maximum number of persistent connections per PHP process can be restricted with mysqli.max_persistent. Please note that the web server may spawn many PHP processes.
// A common complain about persistent connections is that their state is not reset before reuse. For example, open and unfinished transactions are not automatically rolled back. But also, authorization changes which happened in the time between putting the connection into the pool and reusing it are not reflected. This may be seen as an unwanted side-effect. On the contrary, the name persistent may be understood as a promise that the state is persisted.
// The mysqli extension supports both interpretations of a persistent connection: state persisted, and state reset before reuse. The default is reset. Before a persistent connection is reused, the mysqli extension implicitly calls mysqli::change_user() to reset the state. The persistent connection appears to the user as if it was just opened. No artifacts from previous usages are visible.
// The mysqli::change_user() call is an expensive operation. For best performance, users may want to recompile the extension with the compile flag MYSQLI_NO_CHANGE_USER_ON_PCONNECT being set.
// It is left to the user to choose between safe behavior and best performance. Both are valid optimization goals. For ease of use, the safe behavior has been made the default at the expense of maximum performance.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.connections.php
// CONNECTIONS - END
// 
// EXECUTING_STATEMENTS - BEGIN
// Executing statements
// 
// Statements can be executed with the mysqli::query(), mysqli::real_query() and mysqli::multi_query(). The mysqli::query() function is the most common, and combines the executing statement with a buffered fetch of its result set, if any, in one call. Calling mysqli::query() is identical to calling mysqli::real_query() followed by mysqli::store_result().
// [example]
// Example #1 Executing queries
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// [/php]
// [/example]
// 
// Buffered result sets
// After statement execution, results can be either retrieved all at once or read row by row from the server. Client-side result set buffering allows the server to free resources associated with the statement's results as early as possible. Generally speaking, clients are slow consuming result sets. Therefore, it is recommended to use buffered result sets. mysqli::query() combines statement execution and result set buffering.
// PHP applications can navigate freely through buffered results. Navigation is fast because the result sets are held in client memory. Please, keep in mind that it is often easier to scale by client than it is to scale the server.
// [example]
// Example #2 Navigation through buffered results
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// $mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
// 
// $result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");
// 
// echo "Reverse order...\n";
// for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
//     $result->data_seek($row_no);
//     $row = $result->fetch_assoc();
//     echo " id = " . $row['id'] . "\n";
// }
// 
// echo "Result set order...\n";
// foreach ($result as $row) {
//     echo " id = " . $row['id'] . "\n";
// }
// [/php]
// The above example will output:
// [result]
// Reverse order...
//  id = 3
//  id = 2
//  id = 1
// Result set order...
//  id = 1
//  id = 2
//  id = 3
// [/result]
// [/example]
// 
// Unbuffered result sets
// If client memory is a short resource and freeing server resources as early as possible to keep server load low is not needed, unbuffered results can be used. Scrolling through unbuffered results is not possible before all rows have been read.
// [example]
// Example #3 Navigation through unbuffered results
// [php]
// 
// $mysqli->real_query("SELECT id FROM test ORDER BY id ASC");
// $result = $mysqli->use_result();
// 
// echo "Result set order...\n";
// foreach ($result as $row) {
//     echo " id = " . $row['id'] . "\n";
// }
// [/php]
// [/example]
// 
// Result set values data types
// The mysqli::query(), mysqli::real_query() and mysqli::multi_query() functions are used to execute non-prepared statements. At the level of the MySQL Client Server Protocol, the command COM_QUERY and the text protocol are used for statement execution. With the text protocol, the MySQL server converts all data of a result sets into strings before sending. This conversion is done regardless of the SQL result set column data type. The mysql client libraries receive all column values as strings. No further client-side casting is done to convert columns back to their native types. Instead, all values are provided as PHP strings.
// [example]
// Example #4 Text protocol returns strings by default
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
// $mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");
// 
// $result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
// $row = $result->fetch_assoc();
// 
// printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
// printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
// [/php]
// The above example will output:
// [result]
// id = 1 (string)
// label = a (string)
// It is possible to convert integer and float columns back to PHP numbers by setting the MYSQLI_OPT_INT_AND_FLOAT_NATIVE connection option, if using the mysqlnd library. If set, the mysqlnd library will check the result set meta data column types and convert numeric SQL columns to PHP numbers, if the PHP data type value range allows for it. This way, for example, SQL INT columns are returned as integers.
// [/result]
// [/example]
// [example]
// Example #5 Native data types with mysqlnd and connection option
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = new mysqli();
// $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
// $mysqli->real_connect("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
// $mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");
// 
// $result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
// $row = $result->fetch_assoc();
// 
// printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
// printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
// [/php]
// The above example will output:
// [result]
// id = 1 (integer)
// label = a (string)
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.statements.php
// EXECUTING_STATEMENTS - END
// 
// PREPARED_STATEMENTS - BEGIN
// Prepared Statements
// 
// The MySQL database supports prepared statements. A prepared statement or a parameterized statement is used to execute the same statement repeatedly with high efficiency and protect against SQL injections.
// 
// Basic workflow
// The prepared statement execution consists of two stages: prepare and execute. At the prepare stage a statement template is sent to the database server. The server performs a syntax check and initializes server internal resources for later use.
// The MySQL server supports using anonymous, positional placeholder with ?.
// Prepare is followed by execute. During execute the client binds parameter values and sends them to the server. The server executes the statement with the bound values using the previously created internal resources.
// [example]
// Example #1 Prepared statement
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Non-prepared statement
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");
// 
// // Prepared statement, stage 1: prepare
// $stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");
// 
// // Prepared statement, stage 2: bind and execute
// $id = 1;
// $label = 'PHP';
// $stmt->bind_param("is", $id, $label); // "is" means that $id is bound as an integer and $label as a string
// 
// $stmt->execute();
// [/php]
// [/example]
// 
// Repeated execution
// A prepared statement can be executed repeatedly. Upon every execution the current value of the bound variable is evaluated and sent to the server. The statement is not parsed again. The statement template is not transferred to the server again.
// [example]
// Example #2 INSERT prepared once, executed multiple times
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Non-prepared statement
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");
// 
// // Prepared statement, stage 1: prepare
// $stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");
// 
// // Prepared statement, stage 2: bind and execute
// $stmt->bind_param("is", $id, $label); // "is" means that $id is bound as an integer and $label as a string
// 
// $data = [
//     1 => 'PHP',
//     2 => 'Java',
//     3 => 'C++'
// ];
// foreach ($data as $id => $label) {
//     $stmt->execute();
// }
// 
// $result = $mysqli->query('SELECT id, label FROM test');
// var_dump($result->fetch_all(MYSQLI_ASSOC));
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   array(2) {
//     ["id"]=>
//     string(1) "1"
//     ["label"]=>
//     string(3) "PHP"
//   }
//   [1]=>
//   array(2) {
//     ["id"]=>
//     string(1) "2"
//     ["label"]=>
//     string(4) "Java"
//   }
//   [2]=>
//   array(2) {
//     ["id"]=>
//     string(1) "3"
//     ["label"]=>
//     string(3) "C++"
//   }
// }
// [/result]
// [/example]
// Every prepared statement occupies server resources. Statements should be closed explicitly immediately after use. If not done explicitly, the statement will be closed when the statement handle is freed by PHP.
// Using a prepared statement is not always the most efficient way of executing a statement. A prepared statement executed only once causes more client-server round-trips than a non-prepared statement. This is why the SELECT is not run as a prepared statement above.
// Also, consider the use of the MySQL multi-INSERT SQL syntax for INSERTs. For the example, multi-INSERT requires fewer round-trips between the server and client than the prepared statement shown above.
// [example]
// Example #3 Less round trips using multi-INSERT SQL
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// 
// $values = [1, 2, 3, 4];
// 
// $stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?), (?), (?), (?)");
// $stmt->bind_param('iiii', ...$values);
// $stmt->execute();
// [/php]
// [/example]
// 
// Result set values data types
// The MySQL Client Server Protocol defines a different data transfer protocol for prepared statements and non-prepared statements. Prepared statements are using the so called binary protocol. The MySQL server sends result set data "as is" in binary format. Results are not serialized into strings before sending. Client libraries receive binary data and try to convert the values into appropriate PHP data types. For example, results from an SQL INT column will be provided as PHP integer variables.
// [example]
// Example #4 Native datatypes
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Non-prepared statement
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");
// $mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");
// 
// $stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();
// 
// printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
// printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
// [/php]
// The above example will output:
// [result]
// id = 1 (integer)
// label = PHP (string)
// [/result]
// [/example]
// This behavior differs from non-prepared statements. By default, non-prepared statements return all results as strings. This default can be changed using a connection option. If the connection option is used, there are no differences.
// 
// Fetching results using bound variables
// Results from prepared statements can either be retrieved by binding output variables, or by requesting a mysqli_result object.
// Output variables must be bound after statement execution. One variable must be bound for every column of the statements result set.
// [example]
// Example #5 Output variable binding
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Non-prepared statement
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");
// $mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");
// 
// $stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
// $stmt->execute();
// 
// $stmt->bind_result($out_id, $out_label);
// 
// while ($stmt->fetch()) {
//     printf("id = %s (%s), label = %s (%s)\n", $out_id, gettype($out_id), $out_label, gettype($out_label));
// }
// [/php]
// The above example will output:
// [result]
// id = 1 (integer), label = PHP (string)
// [/result]
// [/example]
// Prepared statements return unbuffered result sets by default. The results of the statement are not implicitly fetched and transferred from the server to the client for client-side buffering. The result set takes server resources until all results have been fetched by the client. Thus it is recommended to consume results timely. If a client fails to fetch all results or the client closes the statement before having fetched all data, the data has to be fetched implicitly by mysqli.
// It is also possible to buffer the results of a prepared statement using mysqli_stmt::store_result().
// 
// Fetching results using mysqli_result interface
// Instead of using bound results, results can also be retrieved through the mysqli_result interface. mysqli_stmt::get_result() returns a buffered result set.
// [example]
// Example #6 Using mysqli_result to fetch results
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Non-prepared statement
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");
// $mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");
// 
// $stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
// $stmt->execute();
// 
// $result = $stmt->get_result();
// 
// var_dump($result->fetch_all(MYSQLI_ASSOC));
// [/php]
// The above example will output:
// [result]
// array(1) {
//   [0]=>
//   array(2) {
//     ["id"]=>
//     int(1)
//     ["label"]=>
//     string(3) "PHP"
//   }
// }
// [/result]
// [/example]
// Using the mysqli_result interface offers the additional benefit of flexible client-side result set navigation.
// [example]
// Example #7 Buffered result set for flexible read out
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Non-prepared statement
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");
// $mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP'), (2, 'Java'), (3, 'C++')");
// 
// $stmt = $mysqli->prepare("SELECT id, label FROM test");
// $stmt->execute();
// 
// $result = $stmt->get_result();
// 
// for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
//     $result->data_seek($row_no);
//     var_dump($result->fetch_assoc());
// }
// [/php]
// The above example will output:
// [result]
// array(2) {
//   ["id"]=>
//   int(3)
//   ["label"]=>
//   string(3) "C++"
// }
// array(2) {
//   ["id"]=>
//   int(2)
//   ["label"]=>
//   string(4) "Java"
// }
// array(2) {
//   ["id"]=>
//   int(1)
//   ["label"]=>
//   string(3) "PHP"
// }
// [/result]
// [/example]
// 
// Escaping and SQL injection
// Bound variables are sent to the server separately from the query and thus cannot interfere with it. The server uses these values directly at the point of execution, after the statement template is parsed. Bound parameters do not need to be escaped as they are never substituted into the query string directly. A hint must be provided to the server for the type of bound variable, to create an appropriate conversion. See the mysqli_stmt::bind_param() function for more information.
// Such a separation sometimes considered as the only security feature to prevent SQL injection, but the same degree of security can be achieved with non-prepared statements, if all the values are formatted correctly. It should be noted that correct formatting is not the same as escaping and involves more logic than simple escaping. Thus, prepared statements are simply a more convenient and less error-prone approach to this element of database security.
// 
// Client-side prepared statement emulation
// The API does not include emulation for client-side prepared statement emulation.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php
// PREPARED_STATEMENTS - END
// 
// STORED_PROCEDURES - BEGIN
// Stored Procedures
// 
// The MySQL database supports stored procedures. A stored procedure is a subroutine stored in the database catalog. Applications can call and execute the stored procedure. The CALL SQL statement is used to execute a stored procedure.
// 
// Parameter
// Stored procedures can have IN, INOUT and OUT parameters, depending on the MySQL version. The mysqli interface has no special notion for the different kinds of parameters.
// 
// IN parameter
// Input parameters are provided with the CALL statement. Please, make sure values are escaped correctly.
// [example]
// Example #1 Calling a stored procedure
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// 
// $mysqli->query("DROP PROCEDURE IF EXISTS p");
// $mysqli->query("CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;");
// 
// $mysqli->query("CALL p(1)");
// 
// $result = $mysqli->query("SELECT id FROM test");
// 
// var_dump($result->fetch_assoc());
// [/php]
// The above example will output:
// [result]
// array(1) {
//   ["id"]=>
//   string(1) "1"
// }
// [/result]
// INOUT/OUT parameter
// The values of INOUT/OUT parameters are accessed using session variables.
// [/example]
// [example]
// Example #2 Using session variables
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP PROCEDURE IF EXISTS p");
// $mysqli->query('CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "Hi!" INTO msg; END;');
// 
// $mysqli->query("SET @msg = ''");
// $mysqli->query("CALL p(@msg)");
// 
// $result = $mysqli->query("SELECT @msg as _p_out");
// 
// $row = $result->fetch_assoc();
// echo $row['_p_out'];
// [/php]
// The above example will output:
// [result]
// Hi!
// [/result]
// Application and framework developers may be able to provide a more convenient API using a mix of session variables and databased catalog inspection. However, please note the possible performance impact of a custom solution based on catalog inspection.
// [/example]
// 
// Handling result sets
// Stored procedures can return result sets. Result sets returned from a stored procedure cannot be fetched correctly using mysqli::query(). The mysqli::query() function combines statement execution and fetching the first result set into a buffered result set, if any. However, there are additional stored procedure result sets hidden from the user which cause mysqli::query() to fail returning the user expected result sets.
// Result sets returned from a stored procedure are fetched using mysqli::real_query() or mysqli::multi_query(). Both functions allow fetching any number of result sets returned by a statement, such as CALL. Failing to fetch all result sets returned by a stored procedure causes an error.
// [example]
// Example #3 Fetching results from stored procedures
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// $mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
// 
// $mysqli->query("DROP PROCEDURE IF EXISTS p");
// $mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');
// 
// $mysqli->multi_query("CALL p()");
// 
// do {
//     if ($result = $mysqli->store_result()) {
//         printf("---\n");
//         var_dump($result->fetch_all());
//         $result->free();
//     }
// } while ($mysqli->next_result());
// [/php]
// The above example will output:
// [result]
// ---
// array(3) {
//   [0]=>
//   array(1) {
//     [0]=>
//     string(1) "1"
//   }
//   [1]=>
//   array(1) {
//     [0]=>
//     string(1) "2"
//   }
//   [2]=>
//   array(1) {
//     [0]=>
//     string(1) "3"
//   }
// }
// ---
// array(3) {
//   [0]=>
//   array(1) {
//     [0]=>
//     string(1) "2"
//   }
//   [1]=>
//   array(1) {
//     [0]=>
//     string(1) "3"
//   }
//   [2]=>
//   array(1) {
//     [0]=>
//     string(1) "4"
//   }
// }
// [/result]
// [/example]
// 
// Use of prepared statements
// No special handling is required when using the prepared statement interface for fetching results from the same stored procedure as above. The prepared statement and non-prepared statement interfaces are similar. Please note, that not every MYSQL server version may support preparing the CALL SQL statement.
// [example]
// Example #4 Stored Procedures and Prepared Statements
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// $mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
// 
// $mysqli->query("DROP PROCEDURE IF EXISTS p");
// $mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');
// 
// $stmt = $mysqli->prepare("CALL p()");
// 
// $stmt->execute();
// 
// do {
//     if ($result = $stmt->get_result()) {
//         printf("---\n");
//         var_dump($result->fetch_all());
//         $result->free();
//     }
// } while ($stmt->next_result());
// [/php]
// The above example will output:
// [result]
// ---
// array(3) {
//   [0]=>
//   array(1) {
//     [0]=>
//     int(1)
//   }
//   [1]=>
//   array(1) {
//     [0]=>
//     int(2)
//   }
//   [2]=>
//   array(1) {
//     [0]=>
//     int(3)
//   }
// }
// ---
// array(3) {
//   [0]=>
//   array(1) {
//     [0]=>
//     int(2)
//   }
//   [1]=>
//   array(1) {
//     [0]=>
//     int(3)
//   }
//   [2]=>
//   array(1) {
//     [0]=>
//     int(4)
//   }
// }
// [/result]
// [/example]
// Of course, use of the bind API for fetching is supported as well.
// [example]
// Example #5 Stored Procedures and Prepared Statements using bind API
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// $mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
// 
// $mysqli->query("DROP PROCEDURE IF EXISTS p");
// $mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');
// 
// $stmt = $mysqli->prepare("CALL p()");
// 
// $stmt->execute();
// 
// do {
//     if ($stmt->store_result()) {
//         $stmt->bind_result($id_out);
//         while ($stmt->fetch()) {
//             echo "id = $id_out\n";
//         }
//     }
// } while ($stmt->next_result());
// [/php]
// The above example will output:
// [result]
// id = 1
// id = 2
// id = 3
// id = 2
// id = 3
// id = 4
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php
// STORED_PROCEDURES - END
// 
// MULTIPLE_STATEMENTS - BEGIN
// Multiple Statements
// 
// MySQL optionally allows having multiple statements in one statement string, but it requires special handling.
// Multiple statements or multi queries must be executed with mysqli::multi_query(). The individual statements of the statement string are separated by semicolon. Then, all result sets returned by the executed statements must be fetched.
// The MySQL server allows having statements that do return result sets and statements that do not return result sets in one multiple statement.
// [example]
// Example #1 Multiple Statements
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT)");
// 
// $sql = "SELECT COUNT(*) AS _num FROM test;
//         INSERT INTO test(id) VALUES (1); 
//         SELECT COUNT(*) AS _num FROM test; ";
// 
// $mysqli->multi_query($sql);
// 
// do {
//     if ($result = $mysqli->store_result()) {
//         var_dump($result->fetch_all(MYSQLI_ASSOC));
//         $result->free();
//     }
// } while ($mysqli->next_result());
// [/php]
// The above example will output:
// [result]
// array(1) {
//   [0]=>
//   array(1) {
//     ["_num"]=>
//     string(1) "0"
//   }
// }
// array(1) {
//   [0]=>
//   array(1) {
//     ["_num"]=>
//     string(1) "1"
//   }
// }
// [/result]
// [/example]
// 
// Security considerations
// The API functions mysqli::query() and mysqli::real_query() do not set a connection flag necessary for activating multi queries in the server. An extra API call is used for multiple statements to reduce the damage of accidental SQL injection attacks. An attacker may try to add statements such as ; DROP DATABASE mysql or ; SELECT SLEEP(999). If the attacker succeeds in adding SQL to the statement string but mysqli::multi_query() is not used, the server will not execute the injected and malicious SQL statement.
// [example]
// Example #2 SQL Injection
// [php]
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// $result = $mysqli->query("SELECT 1; DROP TABLE mysql.user");
// [/php]
// The above example will output:
// [result]
// PHP Fatal error:  Uncaught mysqli_sql_exception: You have an error in your SQL syntax; 
// check the manual that corresponds to your MySQL server version for the right syntax to 
// use near 'DROP TABLE mysql.user' at line 1
// [/result]
// [/example]
// 
// Prepared statements
// Use of the multiple statement with prepared statements is not supported.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php
// MULTIPLE_STATEMENTS - END
// 
// API_SUPPORT_FOR_TRANSACTIONS - BEGIN
// API support for transactions
// 
// The MySQL server supports transactions depending on the storage engine used. Since MySQL 5.5, the default storage engine is InnoDB. InnoDB has full ACID transaction support.
// Transactions can either be controlled using SQL or API calls. It is recommended to use API calls for enabling and disabling the autocommit mode and for committing and rolling back transactions.
// [example]
// Example #1 Setting autocommit mode with SQL and through the API
// [php]
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// // Recommended: using API to control transactional settings
// $mysqli->autocommit(false);
// 
// // Won't be monitored and recognized by the replication and the load balancing plugin
// $mysqli->query('SET AUTOCOMMIT = 0');
// [/php]
// [/example]
// Optional feature packages, such as the replication and load balancing plugin, can easily monitor API calls. The replication plugin offers transaction aware load balancing, if transactions are controlled with API calls. Transaction aware load balancing is not available if SQL statements are used for setting autocommit mode, committing or rolling back a transaction.
// [example]
// Example #2 Commit and rollback
// [php]
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// $mysqli->autocommit(false);
// 
// $mysqli->query("INSERT INTO test(id) VALUES (1)");
// $mysqli->rollback();
// 
// $mysqli->query("INSERT INTO test(id) VALUES (2)");
// $mysqli->commit();
// [/php]
// [/example]
// Please note, that the MySQL server cannot roll back all statements. Some statements cause an implicit commit.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.transactions.php
// API_SUPPORT_FOR_TRANSACTIONS - END
// 
// METADATA - BEGIN
// Metadata
// 
// A MySQL result set contains metadata. The metadata describes the columns found in the result set. All metadata sent by MySQL is accessible through the mysqli interface. The extension performs no or negligible changes to the information it receives. Differences between MySQL server versions are not aligned.
// Meta data is access through the mysqli_result interface.
// [example]
// Example #1 Accessing result set meta data
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $result = $mysqli->query("SELECT 1 AS _one, 'Hello' AS _two FROM DUAL");
// var_dump($result->fetch_fields());
// [/php]
// The above example will output:
// [result]
// array(2) {
//   [0]=>
//   object(stdClass)#3 (13) {
//     ["name"]=>
//     string(4) "_one"
//     ["orgname"]=>
//     string(0) ""
//     ["table"]=>
//     string(0) ""
//     ["orgtable"]=>
//     string(0) ""
//     ["def"]=>
//     string(0) ""
//     ["db"]=>
//     string(0) ""
//     ["catalog"]=>
//     string(3) "def"
//     ["max_length"]=>
//     int(1)
//     ["length"]=>
//     int(1)
//     ["charsetnr"]=>
//     int(63)
//     ["flags"]=>
//     int(32897)
//     ["type"]=>
//     int(8)
//     ["decimals"]=>
//     int(0)
//   }
//   [1]=>
//   object(stdClass)#4 (13) {
//     ["name"]=>
//     string(4) "_two"
//     ["orgname"]=>
//     string(0) ""
//     ["table"]=>
//     string(0) ""
//     ["orgtable"]=>
//     string(0) ""
//     ["def"]=>
//     string(0) ""
//     ["db"]=>
//     string(0) ""
//     ["catalog"]=>
//     string(3) "def"
//     ["max_length"]=>
//     int(5)
//     ["length"]=>
//     int(5)
//     ["charsetnr"]=>
//     int(8)
//     ["flags"]=>
//     int(1)
//     ["type"]=>
//     int(253)
//     ["decimals"]=>
//     int(31)
//   }
// }
// [/result]
// [/example]
// 
// Prepared statements
// Meta data of result sets created using prepared statements are accessed the same way. A suitable mysqli_result handle is returned by mysqli_stmt::result_metadata().
// [example]
// Example #2 Prepared statements metadata
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("example.com", "user", "password", "database");
// 
// $stmt = $mysqli->prepare("SELECT 1 AS _one, 'Hello' AS _two FROM DUAL");
// $stmt->execute();
// $result = $stmt->result_metadata();
// var_dump($result->fetch_fields());
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.metadata.php
// METADATA - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.quickstart.php
// QUICK_START_GUIDE - END
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
// In order to have these functions available, you must compile PHP with support for the mysqli extension.
// 
// MySQL 8
// When running a PHP version before 7.1.16, or PHP 7.2 before 7.2.4, set MySQL 8 Server's default password plugin to mysql_native_password or else you will see errors similar to The server requested authentication method unknown to the client [caching_sha2_password] even when caching_sha2_password is not used.
// This is because MySQL 8 defaults to caching_sha2_password, a plugin that is not recognized by the older PHP (mysqlnd) releases. Instead, change it by setting default_authentication_plugin=mysql_native_password in my.cnf. The caching_sha2_password plugin will be supported in a future PHP release. In the meantime, the mysql_xdevapi extension does support it.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// The mysqli extension was introduced with PHP version 5.0.0. The MySQL Native Driver was included in PHP version 5.3.0.
// 
// Installation on Linux
// The common Unix distributions include binary versions of PHP that can be installed. Although these binary versions are typically built with support for the MySQL extensions, the extension libraries themselves may need to be installed using an additional package. Check the package manager that comes with your chosen distribution for availability.
// For example, on Ubuntu the php5-mysql package installs the ext/mysql, ext/mysqli, and pdo_mysql PHP extensions. On CentOS, the php-mysql package also installs these three PHP extensions.
// Alternatively, you can compile this extension yourself. Building PHP from source allows you to specify the MySQL extensions you want to use, as well as your choice of client library for each extension.
// The MySQL Native Driver is the recommended client library option, as it results in improved performance and gives access to features not available when using the MySQL Client Library. Refer to What is PHP's MySQL Native Driver? for a brief overview of the advantages of MySQL Native Driver.
// The /path/to/mysql_config represents the location of the mysql_config program that comes with MySQL Server.
// 
// mysqli compile time support matrix
// PHP Version         ( Default | Configure Options: mysqlnd | Configure Options: libmysqlclient )   - Changelog
// 5.4.x and above     (mysqlnd | --with-mysqli | --with-mysqli=/path/to/mysql_config)                - mysqlnd is the default
// 5.3.x               (libmysqlclient | --with-mysqli=mysqlnd | --with-mysqli=/path/to/mysql_config) - mysqlnd is supported
// 5.0.x, 5.1.x, 5.2.x (libmysqlclient | Not Available | --with-mysqli=/path/to/mysql_config)         - mysqlnd is not supported
// Note that it is possible to freely mix MySQL extensions and client libraries. For example, it is possible to enable the MySQL extension to use the MySQL Client Library (libmysqlclient), while configuring the mysqli extension to use the MySQL Native Driver. However, all permutations of extension and client library are possible.
// 
// Installation on Windows Systems
// On Windows, php_mysqli.dll DLL must be enabled in php.ini.
// As with enabling any PHP extension (such as php_mysqli.dll), the PHP directive extension_dir should be set to the directory where the PHP extensions are located. See also the Manual Windows Installation Instructions. An example extension_dir value is c:\php\ext.
// Note: If when starting the web server an error similar to the following occurs: "Unable to load dynamic library './php_mysqli.dll'", this is because php_mysqli.dll cannot be found by the system.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// MySQLi Configuration Options
// Name                            | Default | Changeable      | Changelog
// mysqli.allow_local_infile       | "0"     | PHP_INI_SYSTEM  | Before PHP 7.2.16 and 7.3.3 the default was "1".
// mysqli.local_infile_directory   |         | PHP_INI_SYSTEM  | Available as of PHP 8.1.0.
// mysqli.allow_persistent         | "1"     | PHP_INI_SYSTEM  |
// mysqli.max_persistent           | "-1"    | PHP_INI_SYSTEM  |
// mysqli.max_links                | "-1"    | PHP_INI_SYSTEM  |
// mysqli.default_port             | "3306"  | PHP_INI_ALL     |
// mysqli.default_socket           | NULL    | PHP_INI_ALL     |
// mysqli.default_host             | NULL    | PHP_INI_ALL     |
// mysqli.default_user             | NULL    | PHP_INI_ALL     |
// mysqli.default_pw               | NULL    | PHP_INI_ALL     |
// mysqli.reconnect                | "0"     | PHP_INI_SYSTEM  | Removed as of PHP 8.2.0
// mysqli.rollback_on_cached_plink | "0"     | PHP_INI_SYSTEM  |
// 
// For further details and definitions of the preceding PHP_INI_* constants, see the chapter on configuration changes.
// Here's a short explanation of the configuration directives.
// 
// mysqli.allow_local_infile int        - Allow accessing, from PHP's perspective, local files with LOAD DATA statements
// mysqli.local_infile_directory string - Allows restricting LOCAL DATA loading to files located in this designated directory.
// mysqli.allow_persistent int          - Enable the ability to create persistent connections using mysqli_connect().
// mysqli.max_persistent int            - Maximum of persistent connections that can be made. Set to 0 for unlimited.
// mysqli.max_links int                 - The maximum number of MySQL connections per process.
// mysqli.default_port int              - The default TCP port number to use when connecting to the database server if no other port is specified. If no default is specified, the port will be obtained from the MYSQL_TCP_PORT environment variable, the mysql-tcp entry in /etc/services or the compile-time MYSQL_PORT constant, in that order. Win32 will only use the MYSQL_PORT constant.
// mysqli.default_socket string         - The default socket name to use when connecting to a local database server if no other socket name is specified.
// mysqli.default_host string           - The default server host to use when connecting to the database server if no other host is specified.
// mysqli.default_user string           - The default user name to use when connecting to the database server if no other name is specified.
// mysqli.default_pw string             - The default password to use when connecting to the database server if no other password is specified.
// mysqli.reconnect int                 - Automatically reconnect if the connection was lost.
// Note: This php.ini setting had been ignored by the mysqlnd driver, and was removed as of PHP 8.2.0.
// mysqli.rollback_on_cached_plink bool - If this option is enabled, closing a persistent connection will rollback any pending transactions of this connection before it is put back into the persistent connection pool. Otherwise, pending transactions will be rolled back only when the connection is reused, or when it is actually closed.
// Users cannot set MYSQL_OPT_READ_TIMEOUT through an API call or runtime configuration setting. Note that if it were possible there would be differences between how libmysqlclient and streams would interpret the value of MYSQL_OPT_READ_TIMEOUT.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.setup.php
// INSTALLING_CONFIGURING - END
// 
// THE_MYSQLI_EXTENSION_AND_PERSISTENT_CONNECTIONS - BEGIN
// The mysqli Extension and Persistent Connections
// 
// The idea behind persistent connections is that a connection between a client process and a database can be reused by a client process, rather than being created and destroyed multiple times. This reduces the overhead of creating fresh connections every time one is required, as unused connections are cached and ready to be reused.
// Unlike the mysql extension, mysqli does not provide a separate function for opening persistent connections. To open a persistent connection you must prepend p: to the hostname when connecting.
// The problem with persistent connections is that they can be left in unpredictable states by clients. For example, a table lock might be activated before a client terminates unexpectedly. A new client process reusing this persistent connection will get the connection as is. Any cleanup would need to be done by the new client process before it could make good use of the persistent connection, increasing the burden on the programmer.
// The persistent connection of the mysqli extension however provides built-in cleanup handling code. The cleanup carried out by mysqli includes:
// * Rollback active transactions
// * Close and drop temporary tables
// * Unlock tables
// * Reset session variables
// * Close prepared statements (always happens with PHP)
// * Close handler
// * Release locks acquired with GET_LOCK()
// This ensures that persistent connections are in a clean state on return from the connection pool, before the client process uses them.
// The mysqli extension does this cleanup by automatically calling the C-API function mysql_change_user().
// The automatic cleanup feature has advantages and disadvantages though. The advantage is that the programmer no longer needs to worry about adding cleanup code, as it is called automatically. However, the disadvantage is that the code could potentially be a little slower, as the code to perform the cleanup needs to run each time a connection is returned from the connection pool.
// It is possible to switch off the automatic cleanup code, by compiling PHP with MYSQLI_NO_CHANGE_USER_ON_PCONNECT defined.
// Note: The mysqli extension supports persistent connections when using either MySQL Native Driver or MySQL Client Library.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.persistconns.php
// THE_MYSQLI_EXTENSION_AND_PERSISTENT_CONNECTIONS - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// MYSQLI_READ_DEFAULT_GROUP                 - Read options from the named group from my.cnf or the file specified with MYSQLI_READ_DEFAULT_FILE
// MYSQLI_READ_DEFAULT_FILE                  - Read options from the named option file instead of from my.cnf
// MYSQLI_OPT_CONNECT_TIMEOUT                - Connect timeout in seconds
// MYSQLI_OPT_READ_TIMEOUT                   - Command execution result timeout in seconds. Available as of PHP 7.2.0.
// MYSQLI_OPT_LOCAL_INFILE                   - Enables command LOAD LOCAL INFILE
// MYSQLI_OPT_INT_AND_FLOAT_NATIVE           - Convert integer and float columns back to PHP numbers. Only valid for mysqlnd.
// MYSQLI_OPT_NET_CMD_BUFFER_SIZE            - The size of the internal command/network buffer. Only valid for mysqlnd.
// MYSQLI_OPT_NET_READ_BUFFER_SIZE           - Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.
// MYSQLI_OPT_SSL_VERIFY_SERVER_CERT         - Requires MySQL 5.1.10 and up
// MYSQLI_INIT_COMMAND                       - Command to execute when connecting to MySQL server. Will automatically be re-executed when reconnecting.
// MYSQLI_CLIENT_SSL                         - Use SSL (encrypted protocol). This option should not be set by application programs; it is set internally in the MySQL client library
// MYSQLI_CLIENT_COMPRESS                    - Use compression protocol
// MYSQLI_CLIENT_INTERACTIVE                 - Allow interactive_timeout seconds (instead of wait_timeout seconds) of inactivity before closing the connection. The client's session wait_timeout variable will be set to the value of the session interactive_timeout variable.
// MYSQLI_CLIENT_IGNORE_SPACE                - Allow spaces after function names. Makes all functions names reserved words.
// MYSQLI_CLIENT_NO_SCHEMA                   - Don't allow the db_name.tbl_name.col_name syntax.
// MYSQLI_CLIENT_MULTI_QUERIES               - Allows multiple semicolon-delimited queries in a single mysqli_query() call.
// MYSQLI_STORE_RESULT                       - For using buffered result sets. It has a value of 0.
// MYSQLI_USE_RESULT                         - For using unbuffered result sets. It has a value of 1.
// MYSQLI_ASSOC                              - Columns are returned into the array having the fieldname as the array index.
// MYSQLI_NUM                                - Columns are returned into the array having an enumerated index.
// MYSQLI_BOTH                               - Columns are returned into the array having both a numerical index and the fieldname as the associative index.
// MYSQLI_NOT_NULL_FLAG                      - Indicates that a field is defined as NOT NULL
// MYSQLI_PRI_KEY_FLAG                       - Field is part of a primary index
// MYSQLI_UNIQUE_KEY_FLAG                    - Field is part of a unique index.
// MYSQLI_MULTIPLE_KEY_FLAG                  - Field is part of an index.
// MYSQLI_BLOB_FLAG                          - Field is defined as BLOB
// MYSQLI_UNSIGNED_FLAG                      - Field is defined as UNSIGNED
// MYSQLI_ZEROFILL_FLAG                      - Field is defined as ZEROFILL
// MYSQLI_AUTO_INCREMENT_FLAG                - Field is defined as AUTO_INCREMENT
// MYSQLI_TIMESTAMP_FLAG                     - Field is defined as TIMESTAMP
// MYSQLI_SET_FLAG                           - Field is defined as SET
// MYSQLI_NUM_FLAG                           - Field is defined as NUMERIC
// MYSQLI_PART_KEY_FLAG                      - Field is part of an multi-index
// MYSQLI_GROUP_FLAG                         - Field is part of GROUP BY
// MYSQLI_TYPE_DECIMAL                       - Field is defined as DECIMAL
// MYSQLI_TYPE_NEWDECIMAL                    - Precision math DECIMAL or NUMERIC field (MySQL 5.0.3 and up)
// MYSQLI_TYPE_BIT                           - Field is defined as BIT (MySQL 5.0.3 and up)
// MYSQLI_TYPE_TINY                          - Field is defined as TINYINT
// MYSQLI_TYPE_SHORT                         - Field is defined as SMALLINT
// MYSQLI_TYPE_LONG                          - Field is defined as INT
// MYSQLI_TYPE_FLOAT                         - Field is defined as FLOAT
// MYSQLI_TYPE_DOUBLE                        - Field is defined as DOUBLE
// MYSQLI_TYPE_NULL                          - Field is defined as DEFAULT NULL
// MYSQLI_TYPE_TIMESTAMP                     - Field is defined as TIMESTAMP
// MYSQLI_TYPE_LONGLONG                      - Field is defined as BIGINT
// MYSQLI_TYPE_INT24                         - Field is defined as MEDIUMINT
// MYSQLI_TYPE_DATE                          - Field is defined as DATE
// MYSQLI_TYPE_TIME                          - Field is defined as TIME
// MYSQLI_TYPE_DATETIME                      - Field is defined as DATETIME
// MYSQLI_TYPE_YEAR                          - Field is defined as YEAR
// MYSQLI_TYPE_NEWDATE                       - Field is defined as DATE
// MYSQLI_TYPE_INTERVAL                      - Field is defined as INTERVAL
// MYSQLI_TYPE_ENUM                          - Field is defined as ENUM
// MYSQLI_TYPE_SET                           - Field is defined as SET
// MYSQLI_TYPE_TINY_BLOB                     - Field is defined as TINYBLOB
// MYSQLI_TYPE_MEDIUM_BLOB                   - Field is defined as MEDIUMBLOB
// MYSQLI_TYPE_LONG_BLOB                     - Field is defined as LONGBLOB
// MYSQLI_TYPE_BLOB                          - Field is defined as BLOB
// MYSQLI_TYPE_VAR_STRING                    - Field is defined as VARCHAR
// MYSQLI_TYPE_STRING                        - Field is defined as CHAR or BINARY
// MYSQLI_TYPE_CHAR                          - Field is defined as TINYINT. For CHAR, see MYSQLI_TYPE_STRING
// MYSQLI_TYPE_GEOMETRY                      - Field is defined as GEOMETRY
// MYSQLI_TYPE_JSON                          - Field is defined as JSON. Only valid for mysqlnd and MySQL 5.7.8 and up.
// MYSQLI_NEED_DATA                          - More data available for bind variable
// MYSQLI_NO_DATA                            - No more data available for bind variable
// MYSQLI_DATA_TRUNCATED                     - Data truncation occurred. Available since MySQL 5.0.5.
// MYSQLI_ENUM_FLAG                          - Field is defined as ENUM.
// MYSQLI_BINARY_FLAG                        - Field is defined as BINARY.
// MYSQLI_CURSOR_TYPE_FOR_UPDATE             -
// MYSQLI_CURSOR_TYPE_NO_CURSOR              -
// MYSQLI_CURSOR_TYPE_READ_ONLY              -
// MYSQLI_CURSOR_TYPE_SCROLLABLE             -
// MYSQLI_STMT_ATTR_CURSOR_TYPE              -
// MYSQLI_STMT_ATTR_PREFETCH_ROWS            -
// MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH        -
// MYSQLI_SET_CHARSET_NAME                   -
// MYSQLI_REPORT_INDEX                       - Report if no index or bad index was used in a query.
// MYSQLI_REPORT_ERROR                       - Report errors from mysqli function calls.
// MYSQLI_REPORT_STRICT                      - Throw a mysqli_sql_exception for errors instead of warnings.
// MYSQLI_REPORT_ALL                         - Set all options on (report all).
// MYSQLI_REPORT_OFF                         - Turns reporting off.
// MYSQLI_DEBUG_TRACE_ENABLED                - Is set to 1 if mysqli_debug() functionality is enabled.
// MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED    -
// MYSQLI_SERVER_QUERY_NO_INDEX_USED         -
// MYSQLI_SERVER_PUBLIC_KEY                  -
// MYSQLI_REFRESH_GRANT                      - Refreshes the grant tables.
// MYSQLI_REFRESH_LOG                        - Flushes the logs, like executing the FLUSH LOGS SQL statement.
// MYSQLI_REFRESH_TABLES                     - Flushes the table cache, like executing the FLUSH TABLES SQL statement.
// MYSQLI_REFRESH_HOSTS                      - Flushes the host cache, like executing the FLUSH HOSTS SQL statement.
// MYSQLI_REFRESH_REPLICA                    - Alias of MYSQLI_REFRESH_SLAVE constant. Available as of PHP 8.1.0.
// MYSQLI_REFRESH_STATUS                     - Reset the status variables, like executing the FLUSH STATUS SQL statement.
// MYSQLI_REFRESH_THREADS                    - Flushes the thread cache.
// MYSQLI_REFRESH_SLAVE                      - On a slave replication server: resets the master server information, and restarts the slave. Like executing the RESET SLAVE SQL statement.
// MYSQLI_REFRESH_MASTER                     - On a master replication server: removes the binary log files listed in the binary log index, and truncates the index file. Like executing the RESET MASTER SQL statement.
// MYSQLI_TRANS_COR_AND_CHAIN                - Appends "AND CHAIN" to mysqli_commit() or mysqli_rollback().
// MYSQLI_TRANS_COR_AND_NO_CHAIN             - Appends "AND NO CHAIN" to mysqli_commit() or mysqli_rollback().
// MYSQLI_TRANS_COR_RELEASE                  - Appends "RELEASE" to mysqli_commit() or mysqli_rollback().
// MYSQLI_TRANS_COR_NO_RELEASE               - Appends "NO RELEASE" to mysqli_commit() or mysqli_rollback().
// MYSQLI_TRANS_START_READ_ONLY              - Start the transaction as "START TRANSACTION READ ONLY" with mysqli_begin_transaction().
// MYSQLI_TRANS_START_READ_WRITE             - Start the transaction as "START TRANSACTION READ WRITE" with mysqli_begin_transaction().
// MYSQLI_TRANS_START_CONSISTENT_SNAPSHOT    - Start the transaction as "START TRANSACTION WITH CONSISTENT SNAPSHOT" with mysqli_begin_transaction().
// MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT - Requires MySQL 5.6.5 and up.
// MYSQLI_IS_MARIADB                         - Whether the mysqli extension has been built against a MariaDB client library. Available as of PHP 8.1.2.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.constants.php
// PREDEFINED_CONSTANTS - END
// 
// NOTES - BEGIN
// Notes
// 
// Some implementation notes:
// 1. Support was added for MYSQL_TYPE_GEOMETRY to the MySQLi extension in PHP 5.3.
// 2. Note there are different internal implementations within libmysqlclient and mysqlnd for handling columns of type MYSQL_TYPE_GEOMETRY. Generally speaking, mysqlnd will allocate significantly less memory. For example, if there is a POINT column in a result set, libmysqlclient may pre-allocate up to 4GB of RAM although less than 50 bytes are needed for holding a POINT column in memory. Memory allocation is much lower, less than 50 bytes, if using mysqlnd.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.notes.php
// NOTES - END
// 
// THE_MYSQLI_EXTENSION_FUNCTION_SUMMARY - BEGIN
// The MySQLi Extension Function Summary
// 
// Summary of mysqli methods
// mysqli Class
// OOP Interface                   | Procedural Interface          | Alias (Do not use) - Description
// Properties
// $mysqli::affected_rows          | mysqli_affected_rows()        | N/A - Gets the number of affected rows in a previous MySQL operation
// $mysqli::client_info            | mysqli_get_client_info()      | N/A - Returns the MySQL client version as a string
// $mysqli::client_version         | mysqli_get_client_version()   | N/A - Returns MySQL client version info as an integer
// $mysqli::connect_errno          | mysqli_connect_errno()        | N/A - Returns the error code from last connect call
// $mysqli::connect_error          | mysqli_connect_error()        | N/A - Returns a string description of the last connect error
// $mysqli::errno                  | mysqli_errno()                | N/A - Returns the error code for the most recent function call
// $mysqli::error                  | mysqli_error()                | N/A - Returns a string description of the last error
// $mysqli::field_count            | mysqli_field_count()          | N/A - Returns the number of columns for the most recent query
// $mysqli::host_info              | mysqli_get_host_info()        | N/A - Returns a string representing the type of connection used
// $mysqli::protocol_version       | mysqli_get_proto_info()       | N/A - Returns the version of the MySQL protocol used
// $mysqli::server_info            | mysqli_get_server_info()      | N/A - Returns the version of the MySQL server
// $mysqli::server_version         | mysqli_get_server_version()   | N/A - Returns the version of the MySQL server as an integer
// $mysqli::info                   | mysqli_info()                 | N/A - Retrieves information about the most recently executed query
// $mysqli::insert_id              | mysqli_insert_id()            | N/A - Returns the auto generated id used in the last query
// $mysqli::sqlstate               | mysqli_sqlstate()             | N/A - Returns the SQLSTATE error from previous MySQL operation
// $mysqli::warning_count          | mysqli_warning_count()        | N/A - Returns the number of warnings from the last query for the given link
// Methods
// mysqli::autocommit()            | mysqli_autocommit()           | N/A - Turns on or off auto-committing database modifications
// mysqli::change_user()           | mysqli_change_user()          | N/A - Changes the user of the specified database connection
// mysqli::character_set_name()    | mysqli_character_set_name()   | N/A - Returns the default character set for the database connection
// mysqli::close()                 | mysqli_close()                | N/A - Closes a previously opened database connection
// mysqli::commit()                | mysqli_commit()               | N/A - Commits the current transaction
// mysqli::__construct()           | mysqli_connect()              | N/A - Open a new connection to the MySQL server [Note: static (i.e. class) method]
// mysqli::debug()                 | mysqli_debug()                | N/A - Performs debugging operations
// mysqli::dump_debug_info()       | mysqli_dump_debug_info()      | N/A - Dump debugging information into the log
// mysqli::get_charset()           | mysqli_get_charset()          | N/A - Returns a character set object
// mysqli::get_connection_stats()  | mysqli_get_connection_stats() | N/A - Returns client connection statistics. Available only with mysqlnd.
// mysqli::get_client_info()       | mysqli_get_client_info()      | N/A - Returns the MySQL client version as a string
// N/A                             | mysqli_get_client_stats()     | N/A - Returns client per-process statistics. Available only with mysqlnd.
// mysqli::get_server_info()       | mysqli_get_server_info()      | N/A - Returns a string representing the version of the MySQL server that the MySQLi extension is connected to
// mysqli::get_warnings()          | mysqli_get_warnings()         | N/A - NOT DOCUMENTED
// mysqli::init()                  | mysqli_init()                 | N/A - Initializes MySQLi and returns an object for use with mysqli_real_connect.
// mysqli::kill()                  | mysqli_kill()                 | N/A - Asks the server to kill a MySQL thread
// mysqli::more_results()          | mysqli_more_results()         | N/A - Check if there are any more query results from a multi query
// mysqli::multi_query()           | mysqli_multi_query()          | N/A - Performs a query on the database
// mysqli::next_result()           | mysqli_next_result()          | N/A - Prepare next result from multi_query
// mysqli::options()               | mysqli_options()              | mysqli_set_opt() - Set options
// mysqli::ping()                  | mysqli_ping()                 | N/A - Pings a server connection, or tries to reconnect if the connection has gone down
// mysqli::prepare()               | mysqli_prepare()              | N/A - Prepare an SQL statement for execution
// mysqli::query()                 | mysqli_query()                | N/A - Performs a query on the database
// mysqli::real_connect()          | mysqli_real_connect()         | N/A - Opens a connection to a mysql server
// mysqli::real_escape_string(), mysqli::escape_string() | mysqli_real_escape_string() | mysqli_escape_string() - Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
// mysqli::real_query()            | mysqli_real_query()           | N/A - Execute an SQL query
// mysqli::refresh()               | mysqli_refresh()              | N/A - Flushes tables or caches, or resets the replication server information
// mysqli::rollback()              | mysqli_rollback()             | N/A - Rolls back current transaction
// mysqli::select_db()             | mysqli_select_db()            | N/A - Selects the default database for database queries
// mysqli::set_charset()           | mysqli_set_charset()          | N/A - Sets the default client character set
// mysqli::ssl_set()               | mysqli_ssl_set()              | N/A - Used for establishing secure connections using SSL
// mysqli::stat()                  | mysqli_stat()                 | N/A - Gets the current system status
// mysqli::stmt_init()             | mysqli_stmt_init()            | N/A - Initializes a statement and returns an object for use with mysqli_stmt_prepare
// mysqli::store_result()          | mysqli_store_result()         | N/A - Transfers a result set from the last query
// mysqli::thread_id()             | mysqli_thread_id()            | N/A - Returns the thread ID for the current connection
// mysqli::thread_safe()           | mysqli_thread_safe()          | N/A - Returns whether thread safety is given or not
// mysqli::use_result()            | mysqli_use_result()           | N/A - Initiate a result set retrieval
// 
// Summary of mysqli_stmt methods
// MySQL_STMT
// OOP Interface                  | Procedural Interface          | Alias (Do not use) - Description
// Properties
// $mysqli_stmt::affected_rows    | mysqli_stmt_affected_rows()   | N/A - Returns the total number of rows changed, deleted, or inserted by the last executed statement
// $mysqli_stmt::errno            | mysqli_stmt_errno()           | N/A - Returns the error code for the most recent statement call
// $mysqli_stmt::error            | mysqli_stmt_error()           | N/A - Returns a string description for last statement error
// $mysqli_stmt::field_count      | mysqli_stmt_field_count()     | N/A - Returns the number of field in the given statement - not documented
// $mysqli_stmt::insert_id        | mysqli_stmt_insert_id()       | N/A - Get the ID generated from the previous INSERT operation
// $mysqli_stmt::num_rows         | mysqli_stmt_num_rows()        | N/A - Return the number of rows in statements result set
// $mysqli_stmt::param_count      | mysqli_stmt_param_count()     | N/A - Returns the number of parameter for the given statement
// $mysqli_stmt::sqlstate         | mysqli_stmt_sqlstate()        | N/A - Returns SQLSTATE error from previous statement operation
// Methods
// mysqli_stmt::attr_get()        | mysqli_stmt_attr_get()        | N/A - Used to get the current value of a statement attribute
// mysqli_stmt::attr_set()        | mysqli_stmt_attr_set()        | N/A - Used to modify the behavior of a prepared statement
// mysqli_stmt::bind_param()      | mysqli_stmt_bind_param()      | N/A - Binds variables to a prepared statement as parameters
// mysqli_stmt::bind_result()     | mysqli_stmt_bind_result()     | N/A - Binds variables to a prepared statement for result storage
// mysqli_stmt::close()           | mysqli_stmt_close()           | N/A - Closes a prepared statement
// mysqli_stmt::data_seek()       | mysqli_stmt_data_seek()       | N/A - Seeks to an arbitrary row in statement result set
// mysqli_stmt::execute()         | mysqli_stmt_execute()         | mysqli_execute() - Executes a prepared Query
// mysqli_stmt::fetch()           | mysqli_stmt_fetch()           | N/A - Fetch results from a prepared statement into the bound variables
// mysqli_stmt::free_result()     | mysqli_stmt_free_result()     | N/A - Frees stored result memory for the given statement handle
// mysqli_stmt::get_result()      | mysqli_stmt_get_result()      | N/A - Gets a result set from a prepared statement. Available only with mysqlnd.
// mysqli_stmt::get_warnings()    | mysqli_stmt_get_warnings()    | N/A - NOT DOCUMENTED
// mysqli_stmt::more_results()    | mysqli_stmt_more_results()    | N/A - Checks if there are more query results from a multiple query
// mysqli_stmt::next_result()     | mysqli_stmt_next_result()     | N/A - Reads the next result from a multiple query
// mysqli_stmt::num_rows()        | mysqli_stmt_num_rows()        | N/A - See also property $mysqli_stmt::num_rows
// mysqli_stmt::prepare()         | mysqli_stmt_prepare()         | N/A - Prepare an SQL statement for execution
// mysqli_stmt::reset()           | mysqli_stmt_reset()           | N/A - Resets a prepared statement
// mysqli_stmt::result_metadata() | mysqli_stmt_result_metadata() | N/A - Returns result set metadata from a prepared statement
// mysqli_stmt::send_long_data()  | mysqli_stmt_send_long_data()  | N/A - Send data in blocks
// mysqli_stmt::store_result()    | mysqli_stmt_store_result()    | N/A - Transfers a result set from a prepared statement
// 
// Summary of mysqli_result methods
// mysqli_result
// OOP Interface                       | Procedural Interface        | Alias (Do not use) - Description
// Properties
// $mysqli_result::current_field       | mysqli_field_tell()         | N/A - Get current field offset of a result pointer
// $mysqli_result::field_count         | mysqli_num_fields()         | N/A - Get the number of fields in a result
// $mysqli_result::lengths             | mysqli_fetch_lengths()      | N/A - Returns the lengths of the columns of the current row in the result set
// $mysqli_result::num_rows            | mysqli_num_rows()           | N/A - Gets the number of rows in a result
// Methods
// mysqli_result::data_seek()          | mysqli_data_seek()          | N/A - Adjusts the result pointer to an arbitrary row in the result
// mysqli_result::fetch_all()          | mysqli_fetch_all()          | N/A - Fetches all result rows and returns the result set as an associative array, a numeric array, or both. Available only with mysqlnd.
// mysqli_result::fetch_array()        | mysqli_fetch_array()        | N/A - Fetch a result row as an associative, a numeric array, or both
// mysqli_result::fetch_assoc()        | mysqli_fetch_assoc()        | N/A - Fetch a result row as an associative array
// mysqli_result::fetch_column()       | mysqli_fetch_column()       | N/A - Fetch a single column from the next row of a result set
// mysqli_result::fetch_field_direct() | mysqli_fetch_field_direct() | N/A - Fetch meta-data for a single field
// mysqli_result::fetch_field()        | mysqli_fetch_field()        | N/A - Returns the next field in the result set
// mysqli_result::fetch_fields()       | mysqli_fetch_fields()       | N/A - Returns an array of objects representing the fields in a result set
// mysqli_result::fetch_object()       | mysqli_fetch_object()       | N/A - Returns the current row of a result set as an object
// mysqli_result::fetch_row()          | mysqli_fetch_row()          | N/A - Get a result row as an enumerated array
// mysqli_result::field_seek()         | mysqli_field_seek()         | N/A - Set result pointer to a specified field offset
// mysqli_result::free(), mysqli_result::close, mysqli_result::free_result | mysqli_free_result() | N/A - Frees the memory associated with a result
// 
// Summary of mysqli_driver methods
// MySQL_Driver
// OOP Interface                          | Procedural Interface           | Alias (Do not use) - Description
// Properties
// $mysqli_driver::mysqli_report          | mysqli_report()                | N/A - Sets mysqli error reporting mode
// Methods
// mysqli_driver::embedded_server_end()   | mysqli_embedded_server_end()   | N/A - NOT DOCUMENTED
// mysqli_driver::embedded_server_start() | mysqli_embedded_server_start() | N/A - NOT DOCUMENTED
// Note: Alias functions are provided for backward compatibility purposes only. Do not use them in new projects.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.summary.php
// THE_MYSQLI_EXTENSION_FUNCTION_SUMMARY - END
// 
// THE_MYSQLI_CLASS - BEGIN
// The mysqli class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// Represents a connection between PHP and a MySQL database.
// 
// Class synopsis
// [code]
// class mysqli {
// 
//    /* Properties */
//    public readonly int|string $affected_rows;
//    public readonly string $client_info;
//    public readonly int $client_version;
//    public readonly int $connect_errno;
//    public readonly ?string $connect_error;
//    public readonly int $errno;
//    public readonly string $error;
//    public readonly array $error_list;
//    public readonly int $field_count;
//    public readonly string $host_info;
//    public readonly ?string $info;
//    public readonly int|string $insert_id;
//    public readonly string $server_info;
//    public readonly int $server_version;
//    public readonly string $sqlstate;
//    public readonly int $protocol_version;
//    public readonly int $thread_id;
//    public readonly int $warning_count;
// 
//    /* Methods */
//    public __construct(
//        ?string $hostname = null,
//        ?string $username = null,
//        ?string $password = null,
//        ?string $database = null,
//        ?int $port = null,
//        ?string $socket = null
//    )
//    public autocommit(bool $enable): bool
//    public begin_transaction(int $flags = 0, ?string $name = null): bool
//    public change_user(string $username, string $password, ?string $database): bool
//    public character_set_name(): string
//    public close(): true
//    public commit(int $flags = 0, ?string $name = null): bool
//    public connect(
//        ?string $hostname = null,
//        ?string $username = null,
//        ?string $password = null,
//        ?string $database = null,
//        ?int $port = null,
//        ?string $socket = null
//    ): bool
//    public debug(string $options): true
//    public dump_debug_info(): bool
//    public execute_query(string $query, ?array $params = null): mysqli_result|bool
//    public get_charset(): ?object
//    public get_client_info(): string
//    public get_connection_stats(): array
//    public get_server_info(): string
//    public get_warnings(): mysqli_warning|false
//    public init(): ?bool
//    public kill(int $process_id): bool
//    public more_results(): bool
//    public multi_query(string $query): bool
//    public next_result(): bool
//    public options(int $option, string|int $value): bool
//    public ping(): bool
//    public static poll(
//        ?array &$read,
//        ?array &$error,
//        array &$reject,
//        int $seconds,
//        int $microseconds = 0
//    ): int|false
//    public prepare(string $query): mysqli_stmt|false
//    public query(string $query, int $result_mode = MYSQLI_STORE_RESULT): mysqli_result|bool
//    public real_connect(
//        ?string $hostname = null,
//        ?string $username = null,
//        ?string $password = null,
//        ?string $database = null,
//        ?int $port = null,
//        ?string $socket = null,
//        int $flags = 0
//    ): bool
//    public real_escape_string(string $string): string
//    public real_query(string $query): bool
//    public reap_async_query(): mysqli_result|bool
//    public refresh(int $flags): bool
//    public release_savepoint(string $name): bool
//    public rollback(int $flags = 0, ?string $name = null): bool
//    public savepoint(string $name): bool
//    public select_db(string $database): bool
//    public set_charset(string $charset): bool
//    public ssl_set(
//        ?string $key,
//        ?string $certificate,
//        ?string $ca_certificate,
//        ?string $ca_path,
//        ?string $cipher_algos
//    ): true
//    public stat(): string|false
//    public stmt_init(): mysqli_stmt|false
//    public store_result(int $mode = 0): mysqli_result|false
//    public thread_safe(): bool
//    public use_result(): mysqli_result|false
// }
// [/code]
// 
// Table of Contents
// * mysqli::$affected_rows       - Gets the number of affected rows in a previous MySQL operation
// * mysqli::autocommit           - Turns on or off auto-committing database modifications
// * mysqli::begin_transaction    - Starts a transaction
// * mysqli::change_user          - Changes the user of the specified database connection
// * mysqli::character_set_name   - Returns the current character set of the database connection
// * mysqli::close                - Closes a previously opened database connection
// * mysqli::commit               - Commits the current transaction
// * mysqli::$connect_errno       - Returns the error code from last connect call
// * mysqli::$connect_error       - Returns a description of the last connection error
// * mysqli::__construct          - Open a new connection to the MySQL server
// * mysqli::debug                - Performs debugging operations
// * mysqli::dump_debug_info      - Dump debugging information into the log
// * mysqli::$errno               - Returns the error code for the most recent function call
// * mysqli::$error_list          - Returns a list of errors from the last command executed
// * mysqli::$error               - Returns a string description of the last error
// * mysqli::execute_query        - Prepares, binds parameters, and executes SQL statement
// * mysqli::$field_count         - Returns the number of columns for the most recent query
// * mysqli::get_charset          - Returns a character set object
// * mysqli::$client_info         - Get MySQL client info
// * mysqli::$client_version      - Returns the MySQL client version as an integer
// * mysqli::get_connection_stats - Returns statistics about the client connection
// * mysqli::$host_info           - Returns a string representing the type of connection used
// * mysqli::$protocol_version    - Returns the version of the MySQL protocol used
// * mysqli::$server_info         - Returns the version of the MySQL server
// * mysqli::$server_version      - Returns the version of the MySQL server as an integer
// * mysqli::get_warnings         - Get result of SHOW WARNINGS
// * mysqli::$info                - Retrieves information about the most recently executed query
// * mysqli::init                 - Initializes MySQLi and returns an object for use with mysqli_real_connect()
// * mysqli::$insert_id           - Returns the value generated for an AUTO_INCREMENT column by the last query
// * mysqli::kill                 - Asks the server to kill a MySQL thread
// * mysqli::more_results         - Check if there are any more query results from a multi query
// * mysqli::multi_query          - Performs one or more queries on the database
// * mysqli::next_result          - Prepare next result from multi_query
// * mysqli::options              - Set options
// * mysqli::ping                 - Pings a server connection, or tries to reconnect if the connection has gone down
// * mysqli::poll                 - Poll connections
// * mysqli::prepare              - Prepares an SQL statement for execution
// * mysqli::query                - Performs a query on the database
// * mysqli::real_connect         - Opens a connection to a mysql server
// * mysqli::real_escape_string   - Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
// * mysqli::real_query           - Execute an SQL query
// * mysqli::reap_async_query     - Get result from async query
// * mysqli::refresh              - Refreshes
// * mysqli::release_savepoint    - Removes the named savepoint from the set of savepoints of the current transaction
// * mysqli::rollback             - Rolls back current transaction
// * mysqli::savepoint            - Set a named transaction savepoint
// * mysqli::select_db            - Selects the default database for database queries
// * mysqli::set_charset          - Sets the client character set
// * mysqli::$sqlstate            - Returns the SQLSTATE error from previous MySQL operation
// * mysqli::ssl_set              - Used for establishing secure connections using SSL
// * mysqli::stat                 - Gets the current system status
// * mysqli::stmt_init            - Initializes a statement and returns an object for use with mysqli_stmt_prepare
// * mysqli::store_result         - Transfers a result set from the last query
// * mysqli::$thread_id           - Returns the thread ID for the current connection
// * mysqli::thread_safe          - Returns whether thread safety is given or not
// * mysqli::use_result           - Initiate a result set retrieval
// * mysqli::$warning_count       - Returns the number of warnings from the last query for the given link
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/class.mysqli.php
// THE_MYSQLI_CLASS - END
// 
// THE_MYSQLI_STMT_CLASS - BEGIN
// The mysqli_stmt class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// Represents a prepared statement.
// 
// Class synopsis
// [code]
// class mysqli_stmt {
// 
//    /* Properties */
//    public readonly int|string $affected_rows;
//    public readonly int|string $insert_id;
//    public readonly int|string $num_rows;
//    public readonly int $param_count;
//    public readonly int $field_count;
//    public readonly int $errno;
//    public readonly string $error;
//    public readonly array $error_list;
//    public readonly string $sqlstate;
//    public int $id;
// 
//    /* Methods */
//    public __construct(mysqli $mysql, ?string $query = null)
//    public attr_get(int $attribute): int
//    public attr_set(int $attribute, int $value): bool
//    public bind_param(string $types, mixed &$var, mixed &...$vars): bool
//    public bind_result(mixed &$var, mixed &...$vars): bool
//    public close(): true
//    public data_seek(int $offset): void
//    public execute(?array $params = null): bool
//    public fetch(): ?bool
//    public free_result(): void
//    public get_result(): mysqli_result|false
//    public get_warnings(): mysqli_warning|false
//    public more_results(): bool
//    public next_result(): bool
//    public num_rows(): int|string
//    public prepare(string $query): bool
//    public reset(): bool
//    public result_metadata(): mysqli_result|false
//    public send_long_data(int $param_num, string $data): bool
//    public store_result(): bool
// }
// [/code]
// 
// Properties
// id - Stores the statement ID.
// 
// Table of Contents
// * mysqli_stmt::$affected_rows  - Returns the total number of rows changed, deleted, inserted, or matched by the last statement executed
// * mysqli_stmt::attr_get        - Used to get the current value of a statement attribute
// * mysqli_stmt::attr_set        - Used to modify the behavior of a prepared statement
// * mysqli_stmt::bind_param      - Binds variables to a prepared statement as parameters
// * mysqli_stmt::bind_result     - Binds variables to a prepared statement for result storage
// * mysqli_stmt::close           - Closes a prepared statement
// * mysqli_stmt::__construct     - Constructs a new mysqli_stmt object
// * mysqli_stmt::data_seek       - Adjusts the result pointer to an arbitrary row in the buffered result
// * mysqli_stmt::$errno          - Returns the error code for the most recent statement call
// * mysqli_stmt::$error_list     - Returns a list of errors from the last statement executed
// * mysqli_stmt::$error          - Returns a string description for last statement error
// * mysqli_stmt::execute         - Executes a prepared statement
// * mysqli_stmt::fetch           - Fetch results from a prepared statement into the bound variables
// * mysqli_stmt::$field_count    - Returns the number of columns in the given statement
// * mysqli_stmt::free_result     - Frees stored result memory for the given statement handle
// * mysqli_stmt::get_result      - Gets a result set from a prepared statement as a mysqli_result object
// * mysqli_stmt::get_warnings    - Get result of SHOW WARNINGS
// * mysqli_stmt::$insert_id      - Get the ID generated from the previous INSERT operation
// * mysqli_stmt::more_results    - Check if there are more query results from a multiple query
// * mysqli_stmt::next_result     - Reads the next result from a multiple query
// * mysqli_stmt::$num_rows       - Returns the number of rows fetched from the server
// * mysqli_stmt::$param_count    - Returns the number of parameters for the given statement
// * mysqli_stmt::prepare         - Prepares an SQL statement for execution
// * mysqli_stmt::reset           - Resets a prepared statement
// * mysqli_stmt::result_metadata - Returns result set metadata from a prepared statement
// * mysqli_stmt::send_long_data  - Send data in blocks
// * mysqli_stmt::$sqlstate       - Returns SQLSTATE error from previous statement operation
// * mysqli_stmt::store_result    - Stores a result set in an internal buffer
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/class.mysqli-stmt.php
// THE_MYSQLI_STMT_CLASS - END
// 
// THE_MYSQLI_RESULT_CLASS - BEGIN
// The mysqli_result class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// Represents the result set obtained from a query against the database.
// 
// Class synopsis
// [code]
// class mysqli_result implements IteratorAggregate {
// 
//    /* Properties */
//    public readonly int $current_field;
//    public readonly int $field_count;
//    public readonly ?array $lengths;
//    public readonly int|string $num_rows;
//    public int $type;
// 
//    /* Methods */
//    public __construct(mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT)
//    public data_seek(int $offset): bool
//    public fetch_all(int $mode = MYSQLI_NUM): array
//    public fetch_array(int $mode = MYSQLI_BOTH): array|null|false
//    public fetch_assoc(): array|null|false
//    public fetch_column(int $column = 0): null|int|float|string|false
//    public fetch_field_direct(int $index): object|false
//    public fetch_field(): object|false
//    public fetch_fields(): array
//    public fetch_object(string $class = "stdClass", array $constructor_args = []): object|null|false
//    public fetch_row(): array|null|false
//    public field_seek(int $index): bool
//    public free(): void
//    public close(): void
//    public free_result(): void
//    public getIterator(): Iterator
// }
// [/code]
//
// Properties
// type - Stores whether the result is buffered or unbuffered as an int (MYSQLI_STORE_RESULT or MYSQLI_USE_RESULT, respectively).
// 
// Changelog
// Version - Description
// 8.0.0   - mysqli_result implements IteratorAggregate now. Previously, Traversable was implemented instead.
// 
// Table of Contents
// * mysqli_result::__construct        - Constructs a mysqli_result object
// * mysqli_result::$current_field     - Get current field offset of a result pointer
// * mysqli_result::data_seek          - Adjusts the result pointer to an arbitrary row in the result
// * mysqli_result::fetch_all          - Fetch all result rows as an associative array, a numeric array, or both
// * mysqli_result::fetch_array        - Fetch the next row of a result set as an associative, a numeric array, or both
// * mysqli_result::fetch_assoc        - Fetch the next row of a result set as an associative array
// * mysqli_result::fetch_column       - Fetch a single column from the next row of a result set
// * mysqli_result::fetch_field_direct - Fetch meta-data for a single field
// * mysqli_result::fetch_field        - Returns the next field in the result set
// * mysqli_result::fetch_fields       - Returns an array of objects representing the fields in a result set
// * mysqli_result::fetch_object       - Fetch the next row of a result set as an object
// * mysqli_result::fetch_row          - Fetch the next row of a result set as an enumerated array
// * mysqli_result::$field_count       - Gets the number of fields in the result set
// * mysqli_result::field_seek         - Set result pointer to a specified field offset
// * mysqli_result::free               - Frees the memory associated with a result
// * mysqli_result::getIterator        - Retrieve an external iterator
// * mysqli_result::$lengths           - Returns the lengths of the columns of the current row in the result set
// * mysqli_result::$num_rows          - Gets the number of rows in the result set
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/class.mysqli-result.php
// THE_MYSQLI_RESULT_CLASS - END
// 
// THE_MYSQLI_DRIVER_CLASS - BEGIN
// The mysqli_driver class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// The mysqli_driver class is an instance of the monostate pattern, i.e. there is only one driver which can be accessed though an arbitrary amount of mysqli_driver instances.
// 
// Class synopsis
// [code]
// final class mysqli_driver {
// 
//    /* Properties */
//    public readonly string $client_info;
//    public readonly int $client_version;
//    public readonly int $driver_version;
//    public int $report_mode;
// }
// [/code]
// 
// Properties
// client_info    - The Client API header version
// client_version - The Client version
// driver_version - The MySQLi Driver version
// Warning: This property has been deprecated as of PHP 8.1.0. Relying on this property is highly discouraged.
// embedded       - Whether MySQLi Embedded support is enabled
// Warning: This property has been removed as of PHP 8.0.0.
// reconnect      - Allow or prevent reconnect (see the mysqli.reconnect INI directive)
// Warning: This property has been removed along with the mysqli.reconnect INI directive as of PHP 8.2.0.
// report_mode    - Set to MYSQLI_REPORT_OFF, MYSQLI_REPORT_ALL or any combination of MYSQLI_REPORT_STRICT (throw Exceptions for errors), MYSQLI_REPORT_ERROR (report errors) and MYSQLI_REPORT_INDEX (errors regarding indexes). See also mysqli_report().

// Changelog
// Version - Description
// 8.2.0   - mysqli_driver::$reconnect was removed.
// 8.1.0   - mysqli_driver::$driver_version has been deprecated.
// 8.0.0   - mysqli_driver::$embedded was removed.
// 7.4.0   - mysqli_driver::embedded_server_start() and mysqli_driver:embedded_server_end() were removed.
// 
// Table of Contents
// * mysqli_driver::embedded_server_end   - Stop embedded server
// * mysqli_driver::embedded_server_start - Initialize and start embedded server
// * mysqli_driver::$report_mode          - Sets mysqli error reporting mode
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/class.mysqli-driver.php
// THE_MYSQLI_DRIVER_CLASS - END
// 
// THE_MYSQLI_WARNING_CLASS - BEGIN
// The mysqli_warning class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// Represents a MySQL warning.
// 
// Class synopsis
// [code]
// final class mysqli_warning {
// 
//    /* Properties */
//    public string $message;
//    public string $sqlstate;
//    public int $errno;
// 
//    /* Methods */
//    private __construct()
//    public next(): bool
// }
// [/code]
// 
// Properties
// message  - Message string
// sqlstate - SQL state
// errno    - Error number
// 
// Table of Contents
// mysqli_warning::__construct - Private constructor to disallow direct instantiation
// mysqli_warning::next        - Fetch next warning
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/class.mysqli-warning.php
// THE_MYSQLI_WARNING_CLASS - END
// 
// THE_MYSQLI_SQL_EXCEPTION_CLASS - BEGIN
// The mysqli_sql_exception class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// The mysqli exception handling class.
// 
// Class synopsis
// [code]
// final class mysqli_sql_exception extends RuntimeException {
// 
//    /* Properties */
//    protected string $sqlstate = "00000";
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
//    /* Methods */
//    public getSqlState(): string
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
// Properties
// sqlstate - The sql state with the error.
// 
// Table of Contents
// * mysqli_sql_exception::getSqlState - Returns the SQLSTATE error code
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/class.mysqli-sql-exception.php
// THE_MYSQLI_SQL_EXCEPTION_CLASS - END
// 
// ALIASES_AND_DEPRECATED_MYSQLI_FUNCTIONS - BEGIN
// Aliases and deprecated Mysqli Functions
// 
// Table of Contents
// * mysqli_connect          - Alias of mysqli::__construct
// * mysqli::escape_string   - Alias of mysqli_real_escape_string
// * mysqli_execute          - Alias of mysqli_stmt_execute
// * mysqli_get_client_stats - Returns client per-process statistics
// * mysqli_get_links_stats  - Return information about open and cached links
// * mysqli_report           - Alias of mysqli_driver->report_mode
// * mysqli::set_opt         - Alias of mysqli_options
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/ref.mysqli.php
// ALIASES_AND_DEPRECATED_MYSQLI_FUNCTIONS - END
// 
// CHANGELOG - BEGIN
// Changelog
// 
// The following changes have been made to classes/functions/methods of this extension.
// 
// Version | Function                    - Description
// 8.1.0   | mysqli_driver::$report_mode - The default value is now MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT. Previously, it was MYSQLI_REPORT_OFF.
//         | mysqli_result::fetch_all    - Now also available when linking against libmysqlclient.
//         | mysqli_stmt::execute        - The optional params parameter has been added.
//         | mysqli_stmt::next_result    - Now also available when linking against libmysqlclient.
//         | mysqli::__construct         - mysqli::connect now returns true instead of null on success.
//         | mysqli::$client_info        - Calling mysqli_get_client_info with the mysql argument has been deprecated. This function never required a parameter, but incorrectly allowed it as an optional parameter.
//         | mysqli::$client_info        - The object-oriented style mysqli::get_client_info has been deprecated.
//         | mysqli::init                - The object-oriented style mysqli::init method has been deprecated. Replace calls to parent::init with parent::__construct.
// 8.0.0   | mysqli_result::fetch_object - constructor_args now accepts [] for constructors with 0 parameters; previously an exception was thrown.
//         | mysqli_result::field_seek   - This function now always returns true. Previously it returned false on failure.
//         | mysqli_stmt::close          - This function now always returns true. Previously it returned false on failure.
//         | mysqli_stmt::__construct    - query is now nullable.
//         | mysqli::begin_transaction   - name is now nullable.
//         | mysqli::close               - This function now always returns true. Previously it returned false on failure.
//         | mysqli::commit              - name is now nullable.
//         | mysqli::debug               - This function now always returns true. Previously it returned false on failure.
//         | mysqli::rollback            - name is now nullable.
// 7.4.0   | mysqli::__construct         - All parameters are now nullable.
//         | mysqli::real_connect        - All parameters are now nullable.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/changelog.mysqli.php
// CHANGELOG - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/book.mysqli.php
// MYSQL_IMPROVED_EXTENSION - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT
// ============================== PUBLIC
// ============================== ABOUT
// mysqli_connect - Alias of mysqli::__construct()
// 
// Open a new connection to the MySQL server.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_connect() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_connect($hostname = null, $username = null, $password = null, $database = null, $port = null, $socket = null)
{
$return_mysqli_connect = false;

// ========== MYSQLI_CONNECT - BEGIN
// ===== ABOUT
// mysqli_connect - Alias of mysqli::__construct()
// ===== DESCRIPTION
// This function is an alias of: mysqli::__construct()
// Note: If mysqli exception mode is not enabled and a connection fails, then mysqli_connect() returns false instead of an object. The mysqli_connect_error() function can be used to fetch the connection error.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_mysqli_connect = mysqli_connect(

$hostname, // string hostname

$username, // string username

$password, // string password

$database, // string database

$port, // int port

$socket // string socket

); // Return
// mysqli|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysqli-connect.php
// ========== MYSQLI_CONNECT - END

// ========== MYSQLI_CONSTRUCT - BEGIN
// ===== ABOUT
// Open a new connection to the MySQL server
// ===== DESCRIPTION
// Opens a connection to the MySQL Server.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::__construct(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null
// )
// public mysqli::connect(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null
// ): bool
// 
// Procedural style
// mysqli_connect(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null
// ): mysqli|false
// ===== CODE
// $return_mysqli_construct = new mysqli(

// $hostname, // string hostname - Can be either a host name or an IP address. When passing null, the value is retrieved from mysqli.default_host. When possible, pipes will be used instead of the TCP/IP protocol. The TCP/IP protocol is used if a host name and port number are provided together e.g. localhost:3308.
// Prepending host by p: opens a persistent connection. mysqli_change_user() is automatically called on connections opened from the connection pool.

// $username, // string username - The MySQL username or null to assume the username based on the mysqli.default_user ini option.

// $password, // string password - The MySQL password or null to assume the password based on the mysqli.default_pw ini option.

// $database, // string database - The default database to be used when performing queries or null.

// $port, // int port - The port number to attempt to connect to the MySQL server or null to assume the port based on the mysqli.default_port ini option.

// $socket // string socket - The socket or named pipe that should be used or null to assume the socket based on the mysqli.default_socket ini option.
// Note: Specifying the socket parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the hostname parameter.

// ); // Return Values
// mysqli_connect() returns an object which represents the connection to a MySQL Server, or false on failure.
// mysqli::connect() returns true on success or false on failure. Prior to PHP 8.1.0, returns null on success.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.1.0   - mysqli::connect() now returns true instead of null on success.
// 7.4.0   - All parameters are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::__construct() example
// Object-oriented style
// [php]
// // You should enable error reporting for mysqli before attempting to make a connection */
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
// 
// // Set the desired charset after establishing a connection
// $mysqli->set_charset('utf8mb4');
// 
// printf("Success... %s\n", $mysqli->host_info);
// [/php]
// Procedural style
// [php]
// 
// // You should enable error reporting for mysqli before attempting to make a connection
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
// 
// // Set the desired charset after establishing a connection
// mysqli_set_charset($mysqli, 'utf8mb4');
// 
// printf("Success... %s\n", mysqli_get_host_info($mysqli));
// [/php]
// The above examples will output something similar to:
// [result]
// Success... localhost via TCP/IP
// [/result]
// [/example]
// [example]
// Example #2 Extending mysqli class
// [php]
// 
// class FooMysqli extends mysqli {
//     public function __construct($host, $user, $pass, $db, $port, $socket, $charset) {
//         mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//         parent::__construct($host, $user, $pass, $db, $port, $socket);
//         $this->set_charset($charset);
//     }
// }
// 
// $db = new FooMysqli('localhost', 'my_user', 'my_password', 'my_db', 3306, null, 'utf8mb4');
// [/php]
// [/example]
// [example]
// Example #3 Manual error handling
// If error reporting is disabled, the developer is responsible for checking and handling failures
// Object-oriented style
// [php]
// 
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_OFF);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
// if ($mysqli->connect_errno) {
//     throw new RuntimeException('mysqli connection error: ' . $mysqli->connect_error);
// }
// 
// // Set the desired charset after establishing a connection
// $mysqli->set_charset('utf8mb4');
// if ($mysqli->errno) {
//     throw new RuntimeException('mysqli error: ' . $mysqli->error);
// }
// [/php]
// Procedural style
// [php]
// 
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_OFF);
// $mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
// if (mysqli_connect_errno()) {
//     throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
// }
// 
// // Set the desired charset after establishing a connection
// mysqli_set_charset($mysqli, 'utf8mb4');
// if (mysqli_errno($mysqli)) {
//     throw new RuntimeException('mysqli error: ' . mysqli_error($mysqli));
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  MySQLnd always assumes the server default charset. This charset is sent during connection hand-shake/authentication, which mysqlnd will use.
//  Libmysqlclient uses the default charset set in the my.cnf or by an explicit call to mysqli_options() prior to calling mysqli_real_connect(), but after mysqli_init().
// Note: Object-oriented style only: If the connection fails, an object is still returned. To check whether the connection failed, use either the mysqli_connect_error() function or the mysqli->connect_error property as in the preceding examples.
// Note: If it is necessary to set options, such as the connection timeout, mysqli_real_connect() must be used instead.
// Note: Calling the constructor with no parameters is the same as calling mysqli_init().
// Note: Error "Can't create TCP/IP socket (10106)" usually means that the variables_order configure directive doesn't contain character E. On Windows, if the environment is not copied the SYSTEMROOT environment variable won't be available and PHP will have problems loading Winsock.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.construct.php
// ========== MYSQLI_CONSTRUCT - END

// SYNTAX:
// mysqli|false mysqli_connect(string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null)

return $return_mysqli_connect; // mysqli|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ESCAPE_STRING
// ============================== PUBLIC
// ============================== ABOUT
// mysqli::escape_string -- mysqli_escape_string - Alias of mysqli_real_escape_string().
// 
// Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli::escape_string() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_escape_string($mysqli, $string)
{
$return_mysqli_escape_string = null;

// ========== MYSQLI_ESCAPE_STRING - BEGIN
// ===== ABOUT
// mysqli::escape_string -- mysqli_escape_string - Alias of mysqli_real_escape_string()
// ===== DESCRIPTION
// This function is an alias of: mysqli_real_escape_string().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_mysqli_escape_string = $mysqli->escape_string(

// mysqli mysql

$string // string string

); // Return
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/function.mysqli-escape-string.php
// ========== MYSQLI_ESCAPE_STRING - END

// ========== MYSQLI_REAL_ESCAPE_STRING - BEGIN
// ===== ABOUT
// Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
// ===== DESCRIPTION
// This function is used to create a legal SQL string that you can use in an SQL statement. The given string is encoded to produce an escaped SQL string, taking into account the current character set of the connection.
//  Caution:
//  Security: the default character set
//  The character set must be set either at the server level, or with the API function mysqli_set_charset() for it to affect mysqli_real_escape_string(). See the concepts section on character sets for more information.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::real_escape_string(string $string): string
// 
// Procedural style
// mysqli_real_escape_string(mysqli $mysql, string $string): string
// ===== CODE
// $return_mysqli_real_escape_string = $mysqli->real_escape_string(

// // mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

// $string // string string - The string to be escaped.
// Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and CTRL+Z.

// ); // Return Values
// Returns an escaped string.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::real_escape_string() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $city = "'s-Hertogenbosch";
// 
// // this query with escaped $city will work
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'",
//     $mysqli->real_escape_string($city));
// $result = $mysqli->query($query);
// printf("Select returned %d rows.\n", $result->num_rows);
// 
// // this query will fail, because we didn't escape $city
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
// $result = $mysqli->query($query);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $city = "'s-Hertogenbosch";
// 
// // this query with escaped $city will work
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'",
//     mysqli_real_escape_string($mysqli, $city));
// $result = mysqli_query($mysqli, $query);
// printf("Select returned %d rows.\n", mysqli_num_rows($result));
// 
// // this query will fail, because we didn't escape $city
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
// $result = mysqli_query($mysqli, $query);
// [/php]
// The above examples will output something similar to:
// [result]
// Select returned 1 rows.
// 
// Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 's-Hertogenbosch'' at line 1 in...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.real-escape-string.php
// ========== MYSQLI_REAL_ESCAPE_STRING - END

// SYNTAX:
// string mysqli::escape_string(string $string)

return $return_mysqli_escape_string; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ESCAPE_STRING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_EXECUTE
// ============================== PUBLIC
// ============================== ABOUT
// Executes a prepared statement.
// 
// Alias of mysqli_stmt_execute().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_execute() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_execute($statement, $params = null)
{
$return_mysqli_execute = false;

// ========== MYSQLI_EXECUTE - BEGIN
// ===== ABOUT
// mysqli_execute - Alias of mysqli_stmt_execute()
// ===== DESCRIPTION
// This function is an alias of: mysqli_stmt_execute().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_mysqli_execute = mysqli_execute(

$statement, // mysqli_stmt $statement

$params // array $params

); // Return
// bool
// 
// Notes
// Note: mysqli_execute() is deprecated and will be removed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/function.mysqli-execute.php
// ========== MYSQLI_EXECUTE - END

// ========== MYSQLI_STMT_EXECUTE - BEGIN
// ===== ABOUT
// Executes a prepared statement
// ===== DESCRIPTION
// Executes previously prepared statement. The statement must be successfully prepared prior to execution, using either the mysqli_prepare() or mysqli_stmt_prepare() function, or by passing the second argument to mysqli_stmt::__construct().
// If the statement is UPDATE, DELETE, or INSERT, the total number of affected rows can be determined by using the mysqli_stmt_affected_rows() function. If the query yields a result set, it can be fetched using mysqli_stmt_get_result() function or by fetching it row by row directly from the statement using mysqli_stmt_fetch() function.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::execute(?array $params = null): bool
// 
// Procedural style
// mysqli_stmt_execute(mysqli_stmt $statement, ?array $params = null): bool
// ===== CODE
// $return_mysqli_stmt_execute = mysqli_stmt_execute(

// $statement, // mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

// $params // array params - An optional list array with as many elements as there are bound parameters in the SQL statement being executed. Each value is treated as a string.

// ); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.1.0   - The optional params parameter has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 Execute a prepared statement with bound variables
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City");
// 
// // Prepare an insert statement
// $stmt = $mysqli->prepare("INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");
// 
// // Bind variables to parameters
// $stmt->bind_param("sss", $val1, $val2, $val3);
// 
// $val1 = 'Stuttgart';
// $val2 = 'DEU';
// $val3 = 'Baden-Wuerttemberg';
// 
// // Execute the statement
// $stmt->execute();
// 
// $val1 = 'Bordeaux';
// $val2 = 'FRA';
// $val3 = 'Aquitaine';
// 
// // Execute the statement
// $stmt->execute();
// 
// // Retrieve all rows from myCity
// $query = "SELECT Name, CountryCode, District FROM myCity";
// $result = $mysqli->query($query);
// while ($row = $result->fetch_row()) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City");
// 
// // Prepare an insert statement
// $stmt = mysqli_prepare($link, "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");
// 
// // Bind variables to parameters
// mysqli_stmt_bind_param($stmt, "sss", $val1, $val2, $val3);
// 
// $val1 = 'Stuttgart';
// $val2 = 'DEU';
// $val3 = 'Baden-Wuerttemberg';
// 
// // Execute the statement
// mysqli_stmt_execute($stmt);
// 
// $val1 = 'Bordeaux';
// $val2 = 'FRA';
// $val3 = 'Aquitaine';
// 
// // Execute the statement
// mysqli_stmt_execute($stmt);
// 
// // Retrieve all rows from myCity
// $query = "SELECT Name, CountryCode, District FROM myCity";
// $result = mysqli_query($link, $query);
// while ($row = mysqli_fetch_row($result)) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// The above examples will output:
// [result]
// Stuttgart (DEU,Baden-Wuerttemberg)
// Bordeaux (FRA,Aquitaine)
// [/result]
// [/example]
// [example]
// Example #2 Execute a prepared statement with an array of values
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');
// 
// $mysqli->query('CREATE TEMPORARY TABLE myCity LIKE City');
// 
// // Prepare an insert statement
// $stmt = $mysqli->prepare('INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');
// 
// // Execute the statement
// $stmt->execute(['Stuttgart', 'DEU', 'Baden-Wuerttemberg']);
// 
// // Retrieve all rows from myCity
// $query = 'SELECT Name, CountryCode, District FROM myCity';
// $result = $mysqli->query($query);
// while ($row = $result->fetch_row()) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');
// 
// mysqli_query($link, 'CREATE TEMPORARY TABLE myCity LIKE City');
// 
// // Prepare an insert statement
// $stmt = mysqli_prepare($link, 'INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');
// 
// // Execute the statement
// mysqli_stmt_execute($stmt, ['Stuttgart', 'DEU', 'Baden-Wuerttemberg']);
// 
// // Retrieve all rows from myCity
// $query = 'SELECT Name, CountryCode, District FROM myCity';
// $result = mysqli_query($link, $query);
// while ($row = mysqli_fetch_row($result)) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// The above examples will output:
// [result]
// Stuttgart (DEU,Baden-Wuerttemberg)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli-stmt.execute.php
// ========== MYSQLI_STMT_EXECUTE - END

// SYNTAX:
// bool mysqli_execute(mysqli_stmt $statement, array $params = null)

return $return_mysqli_execute; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_EXECUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CLIENT_STATS
// ============================== PUBLIC
// ============================== ABOUT
// Returns client per-process statistics.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_get_client_stats() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_get_client_stats()
{
$return_mysqli_get_client_stats = null;

// ========== MYSQLI_GET_CLIENT_STATS - BEGIN
// ===== ABOUT
// Returns client per-process statistics
// ===== DESCRIPTION
// Returns client per-process statistics.
// Note: Available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// mysqli_get_client_stats(): array
// ===== CODE
$return_mysqli_get_client_stats = mysqli_get_client_stats(

); // Return Values
// Returns an array with client stats.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysqli_get_client_stats() example
// [php]
// $link = mysqli_connect();
// print_r(mysqli_get_client_stats());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [bytes_sent] => 43
//     [bytes_received] => 80
//     [packets_sent] => 1
//     [packets_received] => 2
//     [protocol_overhead_in] => 8
//     [protocol_overhead_out] => 4
//     [bytes_received_ok_packet] => 11
//     [bytes_received_eof_packet] => 0
//     [bytes_received_rset_header_packet] => 0
//     [bytes_received_rset_field_meta_packet] => 0
//     [bytes_received_rset_row_packet] => 0
//     [bytes_received_prepare_response_packet] => 0
//     [bytes_received_change_user_packet] => 0
//     [packets_sent_command] => 0
//     [packets_received_ok] => 1
//     [packets_received_eof] => 0
//     [packets_received_rset_header] => 0
//     [packets_received_rset_field_meta] => 0
//     [packets_received_rset_row] => 0
//     [packets_received_prepare_response] => 0
//     [packets_received_change_user] => 0
//     [result_set_queries] => 0
//     [non_result_set_queries] => 0
//     [no_index_used] => 0
//     [bad_index_used] => 0
//     [slow_queries] => 0
//     [buffered_sets] => 0
//     [unbuffered_sets] => 0
//     [ps_buffered_sets] => 0
//     [ps_unbuffered_sets] => 0
//     [flushed_normal_sets] => 0
//     [flushed_ps_sets] => 0
//     [ps_prepared_never_executed] => 0
//     [ps_prepared_once_executed] => 0
//     [rows_fetched_from_server_normal] => 0
//     [rows_fetched_from_server_ps] => 0
//     [rows_buffered_from_client_normal] => 0
//     [rows_buffered_from_client_ps] => 0
//     [rows_fetched_from_client_normal_buffered] => 0
//     [rows_fetched_from_client_normal_unbuffered] => 0
//     [rows_fetched_from_client_ps_buffered] => 0
//     [rows_fetched_from_client_ps_unbuffered] => 0
//     [rows_fetched_from_client_ps_cursor] => 0
//     [rows_skipped_normal] => 0
//     [rows_skipped_ps] => 0
//     [copy_on_write_saved] => 0
//     [copy_on_write_performed] => 0
//     [command_buffer_too_small] => 0
//     [connect_success] => 1
//     [connect_failure] => 0
//     [connection_reused] => 0
//     [reconnect] => 0
//     [pconnect_success] => 0
//     [active_connections] => 1
//     [active_persistent_connections] => 0
//     [explicit_close] => 0
//     [implicit_close] => 0
//     [disconnect_close] => 0
//     [in_middle_of_command_close] => 0
//     [explicit_free_result] => 0
//     [implicit_free_result] => 0
//     [explicit_stmt_close] => 0
//     [implicit_stmt_close] => 0
//     [mem_emalloc_count] => 0
//     [mem_emalloc_ammount] => 0
//     [mem_ecalloc_count] => 0
//     [mem_ecalloc_ammount] => 0
//     [mem_erealloc_count] => 0
//     [mem_erealloc_ammount] => 0
//     [mem_efree_count] => 0
//     [mem_malloc_count] => 0
//     [mem_malloc_ammount] => 0
//     [mem_calloc_count] => 0
//     [mem_calloc_ammount] => 0
//     [mem_realloc_count] => 0
//     [mem_realloc_ammount] => 0
//     [mem_free_count] => 0
//     [proto_text_fetched_null] => 0
//     [proto_text_fetched_bit] => 0
//     [proto_text_fetched_tinyint] => 0
//     [proto_text_fetched_short] => 0
//     [proto_text_fetched_int24] => 0
//     [proto_text_fetched_int] => 0
//     [proto_text_fetched_bigint] => 0
//     [proto_text_fetched_decimal] => 0
//     [proto_text_fetched_float] => 0
//     [proto_text_fetched_double] => 0
//     [proto_text_fetched_date] => 0
//     [proto_text_fetched_year] => 0
//     [proto_text_fetched_time] => 0
//     [proto_text_fetched_datetime] => 0
//     [proto_text_fetched_timestamp] => 0
//     [proto_text_fetched_string] => 0
//     [proto_text_fetched_blob] => 0
//     [proto_text_fetched_enum] => 0
//     [proto_text_fetched_set] => 0
//     [proto_text_fetched_geometry] => 0
//     [proto_text_fetched_other] => 0
//     [proto_binary_fetched_null] => 0
//     [proto_binary_fetched_bit] => 0
//     [proto_binary_fetched_tinyint] => 0
//     [proto_binary_fetched_short] => 0
//     [proto_binary_fetched_int24] => 0
//     [proto_binary_fetched_int] => 0
//     [proto_binary_fetched_bigint] => 0
//     [proto_binary_fetched_decimal] => 0
//     [proto_binary_fetched_float] => 0
//     [proto_binary_fetched_double] => 0
//     [proto_binary_fetched_date] => 0
//     [proto_binary_fetched_year] => 0
//     [proto_binary_fetched_time] => 0
//     [proto_binary_fetched_datetime] => 0
//     [proto_binary_fetched_timestamp] => 0
//     [proto_binary_fetched_string] => 0
//     [proto_binary_fetched_blob] => 0
//     [proto_binary_fetched_enum] => 0
//     [proto_binary_fetched_set] => 0
//     [proto_binary_fetched_geometry] => 0
//     [proto_binary_fetched_other] => 0
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/function.mysqli-get-client-stats.php
// ========== MYSQLI_GET_CLIENT_STATS - END

// SYNTAX:
// array mysqli_get_client_stats()

return $return_mysqli_get_client_stats; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CLIENT_STATS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_LINKS_STATS
// ============================== PUBLIC
// ============================== ABOUT
// Return information about open and cached links.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_get_links_stats() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_get_links_stats()
{
$return_mysqli_get_links_stats = null;

// ========== MYSQLI_GET_LINKS_STATS - BEGIN
// ===== ABOUT
// Return information about open and cached links
// ===== DESCRIPTION
// mysqli_get_links_stats() returns information about open and cached MySQL links.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// mysqli_get_links_stats(): array
// ===== CODE
$return_mysqli_get_links_stats = mysqli_get_links_stats(

// This function has no parameters.

); // Return Values
// mysqli_get_links_stats() returns an associative array with three elements, keyed as follows:
// total         - An int indicating the total number of open links in any state.
// active_plinks - An int representing the number of active persistent connections.
// cached_plinks - An int representing the number of inactive persistent connections.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-05)
// URL: https://www.php.net/manual/en/function.mysqli-get-links-stats.php
// ========== MYSQLI_GET_LINKS_STATS - END

// SYNTAX:
// array mysqli_get_links_stats()

return $return_mysqli_get_links_stats; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_LINKS_STATS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REPORT
// ============================== PUBLIC
// ============================== ABOUT
// Sets mysqli error reporting mode.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_report() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_report($flags)
{
$return_mysqli_report = false;

// ========== MYSQLI_REPORT - BEGIN
// ===== ABOUT
// mysqli_report - Alias of mysqli_driver->report_mode
// ===== DESCRIPTION
// This function is an alias of: mysqli_driver->report_mode
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_mysqli_report = mysqli_report(

$flags // int flags - Supported flags

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/function.mysqli-report.php
// ========== MYSQLI_REPORT - END

// ========== MYSQLI_DRIVER_REPORT_MODE - BEGIN
// ===== ABOUT
// Sets mysqli error reporting mode
// ===== DESCRIPTION
// Depending on the flags, it sets mysqli error reporting mode to exception, warning or none. When set to MYSQLI_REPORT_ALL or MYSQLI_REPORT_INDEX it will also inform about queries that don't use an index (or use a bad index).
// As of PHP 8.1.0, the default setting is MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT. Previously, it was MYSQLI_REPORT_OFF.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_driver->report_mode;
// 
// Procedural style
// mysqli_report(int $flags): bool
// ===== CODE
// $return_mysqli_driver_report_mode = $mysqli_driver->report_mode(

// $flags // int flags - Supported flags
// Name                 - Description
// MYSQLI_REPORT_OFF    - Turns reporting off
// MYSQLI_REPORT_ERROR  - Report errors from mysqli function calls
// MYSQLI_REPORT_STRICT - Throw mysqli_sql_exception for errors instead of warnings
// MYSQLI_REPORT_INDEX  - Report if no index or bad index was used in a query
// MYSQLI_REPORT_ALL    - Set all options (report all)

// ); // Return Values
// Returns true.
// 
// Changelog
// Version - Description
// 8.1.0   - The default value is now MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT. Previously, it was MYSQLI_REPORT_OFF.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// // activate reporting
// $driver = new mysqli_driver();
// $driver->report_mode = MYSQLI_REPORT_ALL;
// 
// try {
//     // if the connection fails, a mysqli_sql_exception will be thrown
//     $mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");
// 
//     // this query should report an error
//     $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");
// 
//     // this query should report a bad index if the column population doesn't have an index
//     $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");
// } catch (mysqli_sql_exception $e) {
//     error_log($e->__toString());
// }
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// // activate reporting
// mysqli_report(MYSQLI_REPORT_ALL);
// 
// try {
//     // if the connection fails, a mysqli_sql_exception will be thrown
//     $link = mysqli_connect("localhost", "my_user", "my_password", "my_db");
// 
//     // this query should report an error
//     $result = mysqli_query($link, "SELECT Name FROM Nonexistingtable WHERE population > 50000");
// 
//     // this query should report a bad index if the column population doesn't have an index
//     $result = mysqli_query($link, "SELECT Name FROM City WHERE population > 50000");
// } catch (mysqli_sql_exception $e) {
//     error_log($e->__toString());
// }
// [/php]
// [/example]
// [example]
// Example #3 Error reporting except bad index errors
// [php]
// 
// // activate reporting
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// try {
//     // if the connection fails, a mysqli_sql_exception will be thrown */
//     $mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");
// 
//     // this query should report an error
//     $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");
// 
//     // this WILL NOT report any errors even if index is not available
//     $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");
// } catch (mysqli_sql_exception $e) {
//     error_log($e->__toString());
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli-driver.report-mode.php
// ========== MYSQLI_DRIVER_REPORT_MODE - END

// SYNTAX:
// bool mysqli_report(int $flags)

return $return_mysqli_report; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REPORT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SET_OPT
// ============================== PUBLIC
// ============================== ABOUT
// Set options.
// 
// Alias of mysqli_options().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::set_opt() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_set_opt($mysqli, $option, $value)
{
$return_mysqli_set_opt = false;

// ========== MYSQLI_SET_OPT - BEGIN
// ===== ABOUT
// mysqli::set_opt -- mysqli_set_opt - Alias of mysqli_options()
// ===== DESCRIPTION
// This function is an alias of: mysqli_options().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_mysqli_set_opt = $mysqli->set_opt(

// mysqli $mysql

$option, // int $option

$value // string|int $value

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/function.mysqli-set-opt.php
// ========== MYSQLI_SET_OPT - END

// ========== MYSQLI_OPTIONS - BEGIN
// ===== ABOUT
// Set options
// ===== DESCRIPTION
// Used to set extra connect options and affect behavior for a connection.
// This function may be called multiple times to set several options.
// mysqli_options() should be called after mysqli_init() and before mysqli_real_connect().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::options(int $option, string|int $value): bool
// 
// Procedural style
// mysqli_options(mysqli $mysql, int $option, string|int $value): bool
// ===== CODE
// $return_mysqli_options = mysqli_options(

// $mysql, // mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

// $option, // int option - The option that you want to set. It can be one of the following values:
// Valid options
// Name                              - Description
// MYSQLI_OPT_CONNECT_TIMEOUT        - Connection timeout in seconds
// MYSQLI_OPT_READ_TIMEOUT           - Command execution result timeout in seconds. Available as of PHP 7.2.0.
// MYSQLI_OPT_LOCAL_INFILE           - Enable/disable use of LOAD LOCAL INFILE
// MYSQLI_INIT_COMMAND               - Command to execute after when connecting to MySQL server
// MYSQLI_SET_CHARSET_NAME           - 	The charset to be set as default.
// MYSQLI_READ_DEFAULT_FILE          - Read options from named option file instead of my.cnf Not supported by mysqlnd.
// MYSQLI_READ_DEFAULT_GROUP         - Read options from the named group from my.cnf or the file specified with MYSQL_READ_DEFAULT_FILE. Not supported by mysqlnd.
// MYSQLI_SERVER_PUBLIC_KEY          - RSA public key file used with the SHA-256 based authentication.
// MYSQLI_OPT_NET_CMD_BUFFER_SIZE    - The size of the internal command/network buffer. Only valid for mysqlnd.
// MYSQLI_OPT_NET_READ_BUFFER_SIZE   - Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.
// MYSQLI_OPT_INT_AND_FLOAT_NATIVE   - Convert integer and float columns back to PHP numbers when using non-prepared statements. Only valid for mysqlnd.
// MYSQLI_OPT_SSL_VERIFY_SERVER_CERT - Whether to verify server certificate or not.

// $value // string|int value - The value for the option.

// ); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// See mysqli_real_connect().
// [/examples]
// 
// Notes
//  Note:
//  MySQLnd always assumes the server default charset. This charset is sent during connection hand-shake/authentication, which mysqlnd will use.
//  Libmysqlclient uses the default charset set in the my.cnf or by an explicit call to mysqli_options() prior to calling mysqli_real_connect(), but after mysqli_init().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.options.php
// ========== MYSQLI_OPTIONS - END

// SYNTAX:
// bool mysqli::set_opt(int $option, string|int $value)

return $return_mysqli_set_opt; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SET_OPT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI
// ============================== PUBLIC
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_AFFECTED_ROWS - int|string php_database_vendor_mysql_mysqli_mysqli_affected_rows($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_AUTOCOMMIT - bool php_database_vendor_mysql_mysqli_mysqli_autocommit(mysqli $mysqli, bool $enable)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_BEGIN_TRANSACTION - bool php_database_vendor_mysql_mysqli_mysqli_begin_transaction(mysqli $mysqli, int $flags = 0, string $name = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CHANGE_USER - bool php_database_vendor_mysql_mysqli_mysqli_change_user(mysqli $mysqli, string $username, string $password, string $database)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CHARACTER_SET_NAME - string php_database_vendor_mysql_mysqli_mysqli_character_set_name(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLOSE - bool php_database_vendor_mysql_mysqli_mysqli_close(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_COMMIT - bool php_database_vendor_mysql_mysqli_mysqli_commit(mysqli $mysqli, int $flags = 0, string $name = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT_ERRNO - int php_database_vendor_mysql_mysqli_mysqli_connect_errno($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT_ERROR - string php_database_vendor_mysql_mysqli_mysqli_connect_error($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONSTRUCT - mysqli php_database_vendor_mysql_mysqli_mysqli_construct(string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DEBUG - bool php_database_vendor_mysql_mysqli_mysqli_debug(mysqli $mysqli, string $options)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DUMP_DEBUG_INFO - bool php_database_vendor_mysql_mysqli_mysqli_dump_debug_info(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERRNO - int php_database_vendor_mysql_mysqli_mysqli_errno($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERROR_LIST - array php_database_vendor_mysql_mysqli_mysqli_error_list($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERROR - string php_database_vendor_mysql_mysqli_mysqli_error($mysqli $mysqli)
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_EXECUTE_QUERY - mysqli_result|bool php_database_vendor_mysql_mysqli_mysqli_execute_query(mysqli $mysqli, string $query, array $params = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_FIELD_COUNT - int php_database_vendor_mysql_mysqli_mysqli_field_count($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CHARSET - object php_database_vendor_mysql_mysqli_mysqli_get_charset(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLIENT_INFO - string php_database_vendor_mysql_mysqli_mysqli_client_info($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLIENT_VERSION - int php_database_vendor_mysql_mysqli_mysqli_client_version($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CONNECTION_STATS - array php_database_vendor_mysql_mysqli_mysqli_get_connection_stats(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_HOST_INFO - string php_database_vendor_mysql_mysqli_mysqli_host_info($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PROTOCOL_VERSION - int php_database_vendor_mysql_mysqli_mysqli_protocol_version($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SERVER_INFO - string php_database_vendor_mysql_mysqli_mysqli_server_info($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SERVER_VERSION - int php_database_vendor_mysql_mysqli_mysqli_server_version($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_WARNINGS - mysqli_warning|false php_database_vendor_mysql_mysqli_mysqli_get_warnings(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INFO - string php_database_vendor_mysql_mysqli_mysqli_info($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INIT - bool php_database_vendor_mysql_mysqli_mysqli_init(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INSERT_ID - int|string php_database_vendor_mysql_mysqli_mysqli_insert_id($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_KILL - bool php_database_vendor_mysql_mysqli_mysqli_kill(mysqli $mysqli, int $process_id)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_MORE_RESULTS - bool php_database_vendor_mysql_mysqli_mysqli_more_results(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_MULTI_QUERY - bool php_database_vendor_mysql_mysqli_mysqli_multi_query(mysqli $mysqli, string $query)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_NEXT_RESULT - bool php_database_vendor_mysql_mysqli_mysqli_next_result(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_OPTIONS - bool php_database_vendor_mysql_mysqli_mysqli_options(mysqli $mysqli, int $option, string|int $value)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PING - bool php_database_vendor_mysql_mysqli_mysqli_ping(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_POLL - int|false php_database_vendor_mysql_mysqli_mysqli_poll(mysqli $mysqli, array& $read, array& $error, array& $reject, int $seconds, int $microseconds = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PREPARE - mysqli_stmt|false php_database_vendor_mysql_mysqli_mysqli_prepare(mysqli $mysqli, string $query)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_QUERY - mysqli_result|bool php_database_vendor_mysql_mysqli_mysqli_query(mysqli $mysqli, string $query, int $result_mode = MYSQLI_STORE_RESULT)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_CONNECT - bool php_database_vendor_mysql_mysqli_mysqli_real_connect(mysqli $mysqli, string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null, int $flags = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_ESCAPE_STRING - string php_database_vendor_mysql_mysqli_mysqli_real_escape_string(mysqli $mysqli, string $string)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_QUERY - bool php_database_vendor_mysql_mysqli_mysqli_real_query(mysqli $mysqli, string $query)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAP_ASYNC_QUERY - mysqli_result|bool php_database_vendor_mysql_mysqli_mysqli_reap_async_query(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REFRESH - bool php_database_vendor_mysql_mysqli_mysqli_refresh(mysqli $mysqli, int $flags)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RELEASE_SAVEPOINT - bool php_database_vendor_mysql_mysqli_mysqli_release_savepoint(mysqli $mysqli, string $name)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ROLLBACK - bool php_database_vendor_mysql_mysqli_mysqli_rollback(mysqli $mysqli, int $flags = 0, string $name = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SAVEPOINT - bool php_database_vendor_mysql_mysqli_mysqli_savepoint(mysqli $mysqli, string $name)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SELECT_DB - bool php_database_vendor_mysql_mysqli_mysqli_select_db(mysqli $mysqli, string $database)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SET_CHARSET - bool php_database_vendor_mysql_mysqli_mysqli_set_charset(mysqli $mysqli, string $charset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQLSTATE - string php_database_vendor_mysql_mysqli_mysqli_sqlstate($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SSL_SET - bool php_database_vendor_mysql_mysqli_mysqli_ssl_set(mysqli $mysqli, string $key, string $certificate, string $ca_certificate, string $ca_path, string $cipher_algos)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STAT - string|false php_database_vendor_mysql_mysqli_mysqli_stat(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_INIT - mysqli_stmt|false php_database_vendor_mysql_mysqli_mysqli_stmt_init(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STORE_RESULT - mysqli_result|false php_database_vendor_mysql_mysqli_mysqli_store_result(mysqli $mysqli, int $mode = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_THREAD_ID - int php_database_vendor_mysql_mysqli_mysqli_thread_id($mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_THREAD_SAFE - bool php_database_vendor_mysql_mysqli_mysqli_thread_safe(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_USE_RESULT - mysqli_result|false php_database_vendor_mysql_mysqli_mysqli_use_result(mysqli $mysqli)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_COUNT - int php_database_vendor_mysql_mysqli_mysqli_warning_count($mysqli $mysqli)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (57)
// $mysqli::affected_rows() - PHP_5, PHP_7, PHP_8
// mysqli::autocommit() - PHP_5, PHP_7, PHP_8
// mysqli::begin_transaction() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// mysqli::change_user() - PHP_5, PHP_7, PHP_8
// mysqli::character_set_name() - PHP_5, PHP_7, PHP_8
// mysqli::close() - PHP_5, PHP_7, PHP_8
// mysqli::commit() - PHP_5, PHP_7, PHP_8
// $mysqli::connect_errno() - PHP_5, PHP_7, PHP_8
// $mysqli::connect_error() - PHP_5, PHP_7, PHP_8
// mysqli::__construct() - PHP_5, PHP_7, PHP_8
// mysqli::debug() - PHP_5, PHP_7, PHP_8
// mysqli::dump_debug_info() - PHP_5, PHP_7, PHP_8
// $mysqli::errno() - PHP_5, PHP_7, PHP_8
// $mysqli::error_list() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// $mysqli::error() - PHP_5, PHP_7, PHP_8
// OFFLINE | mysqli::execute_query() - PHP_8 >= PHP_8_2_0
// $mysqli::field_count() - PHP_5, PHP_7, PHP_8
// mysqli::get_charset() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// $mysqli::client_info() - PHP_5, PHP_7, PHP_8
// $mysqli::client_version() - PHP_5, PHP_7, PHP_8
// mysqli::get_connection_stats() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// $mysqli::host_info() - PHP_5, PHP_7, PHP_8
// $mysqli::protocol_version() - PHP_5, PHP_7, PHP_8
// $mysqli::server_info() - PHP_5, PHP_7, PHP_8
// $mysqli::server_version() - PHP_5, PHP_7, PHP_8
// mysqli::get_warnings() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// $mysqli::info() - PHP_5, PHP_7, PHP_8
// mysqli::init() - PHP_5, PHP_7, PHP_8
// $mysqli::insert_id() - PHP_5, PHP_7, PHP_8
// mysqli::kill() - PHP_5, PHP_7, PHP_8
// mysqli::more_results() - PHP_5, PHP_7, PHP_8
// mysqli::multi_query() - PHP_5, PHP_7, PHP_8
// mysqli::next_result() - PHP_5, PHP_7, PHP_8
// mysqli::options() - PHP_5, PHP_7, PHP_8
// mysqli::ping() - PHP_5, PHP_7, PHP_8
// mysqli::poll() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli::prepare() - PHP_5, PHP_7, PHP_8
// mysqli::query() - PHP_5, PHP_7, PHP_8
// mysqli::real_connect() - PHP_5, PHP_7, PHP_8
// mysqli::real_escape_string() - PHP_5, PHP_7, PHP_8
// mysqli::real_query() - PHP_5, PHP_7, PHP_8
// mysqli::reap_async_query() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli::refresh() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli::release_savepoint() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// mysqli::rollback() - PHP_5, PHP_7, PHP_8
// mysqli::savepoint() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// mysqli::select_db() - PHP_5, PHP_7, PHP_8
// mysqli::set_charset() - PHP_5 >= PHP_5_0_5, PHP_7, PHP_8
// $mysqli::sqlstate() - PHP_5, PHP_7, PHP_8
// mysqli::ssl_set() - PHP_5, PHP_7, PHP_8
// mysqli::stat() - PHP_5, PHP_7, PHP_8
// mysqli::stmt_init() - PHP_5, PHP_7, PHP_8
// mysqli::store_result() - PHP_5, PHP_7, PHP_8
// $mysqli::thread_id() - PHP_5, PHP_7, PHP_8
// mysqli::thread_safe() - PHP_5, PHP_7, PHP_8
// mysqli::use_result() - PHP_5, PHP_7, PHP_8
// $mysqli::warning_count() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (11)
// int
// string
// $mysqli - mysqli
// bool
// mysqli - PHP_5, PHP_7, PHP_8
// array
// mysqli_result - PHP_5, PHP_7, PHP_8
// object
// mysqli_warning - PHP_5, PHP_7, PHP_8
// false
// mysqli_stmt - PHP_5, PHP_7, PHP_8
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_AFFECTED_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Gets the number of affected rows in a previous MySQL operation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::affected_rows() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_affected_rows($mysqli)
{
$return_mysqli_affected_rows = 0;

// ========== MYSQLI_AFFECTED_ROWS - BEGIN
// ===== ABOUT
// Gets the number of affected rows in a previous MySQL operation
// ===== DESCRIPTION
// Returns the number of rows affected by the last INSERT, UPDATE, REPLACE or DELETE query. Works like mysqli_num_rows() for SELECT statements.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int|string $mysqli->affected_rows;
// 
// Procedural style
// mysqli_affected_rows(mysqli $mysql): int|string
// ===== CODE
$return_mysqli_affected_rows = $mysqli->affected_rows(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records were updated for an UPDATE statement, no rows matched the WHERE clause in the query or that no query has yet been executed. -1 indicates that the query returned an error or that mysqli_affected_rows() was called for an unbuffered SELECT query.
// Note: If the number of affected rows is greater than the maximum int value (PHP_INT_MAX), the number of affected rows will be returned as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->affected_rows example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* Insert rows */
// $mysqli->query("CREATE TABLE Language SELECT * from CountryLanguage");
// printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
// 
// $mysqli->query("ALTER TABLE Language ADD Status int default 0");
// 
// /* update rows */
// $mysqli->query("UPDATE Language SET Status=1 WHERE Percentage > 50");
// printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);
// 
// /* delete rows */
// $mysqli->query("DELETE FROM Language WHERE Percentage < 50");
// printf("Affected rows (DELETE): %d\n", $mysqli->affected_rows);
// 
// /* select all rows */
// $result = $mysqli->query("SELECT CountryCode FROM Language");
// printf("Affected rows (SELECT): %d\n", $mysqli->affected_rows);
// 
// /* Delete table Language */
// $mysqli->query("DROP TABLE Language");
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* Insert rows */
// mysqli_query($link, "CREATE TABLE Language SELECT * from CountryLanguage");
// printf("Affected rows (INSERT): %d\n", mysqli_affected_rows($link));
// 
// mysqli_query($link, "ALTER TABLE Language ADD Status int default 0");
// 
// /* update rows */
// mysqli_query($link, "UPDATE Language SET Status=1 WHERE Percentage > 50");
// printf("Affected rows (UPDATE): %d\n", mysqli_affected_rows($link));
// 
// /* delete rows */
// mysqli_query($link, "DELETE FROM Language WHERE Percentage < 50");
// printf("Affected rows (DELETE): %d\n", mysqli_affected_rows($link));
// 
// /* select all rows */
// $result = mysqli_query($link, "SELECT CountryCode FROM Language");
// printf("Affected rows (SELECT): %d\n", mysqli_affected_rows($link));
// 
// /* Delete table Language */
// mysqli_query($link, "DROP TABLE Language");
// [/php]
// The above examples will output:
// [result]
// Affected rows (INSERT): 984
// Affected rows (UPDATE): 168
// Affected rows (DELETE): 815
// Affected rows (SELECT): 169
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/mysqli.affected-rows.php
// ========== MYSQLI_AFFECTED_ROWS - END

// SYNTAX:
// int|string $mysqli::affected_rows()

return $return_mysqli_affected_rows; // int|string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_AFFECTED_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_AUTOCOMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Turns on or off auto-committing database modifications.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::autocommit() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_autocommit($mysqli, $enable)
{
$return_mysqli_autocommit = false;

// ========== MYSQLI_AUTOCOMMIT - BEGIN
// ===== ABOUT
// Turns on or off auto-committing database modifications
// ===== DESCRIPTION
// Turns on or off auto-commit mode on queries for the database connection.
// To determine the current state of autocommit use the SQL command SELECT @@autocommit.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::autocommit(bool $enable): bool
// 
// Procedural style
// mysqli_autocommit(mysqli $mysql, bool $enable): bool
// ===== CODE
$return_mysqli_autocommit = $mysqli->autocommit(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$enable // bool enable - Whether to turn on auto-commit or not.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::autocommit() example
// Object-oriented style
// [php]
// 
// // Tell mysqli to throw an exception if an error occurs
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // The table engine has to support transactions
// $mysqli->query("CREATE TABLE IF NOT EXISTS language (
//     Code text NOT NULL,
//     Speakers int(11) NOT NULL
//     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
// 
// // Turn autocommit off
// $mysqli->autocommit(false);
// 
// $result = $mysqli->query("SELECT @@autocommit");
// $row = $result->fetch_row();
// printf("Autocommit is %s\n", $row[0]);
// 
// try {
//     // Prepare insert statement
//     $stmt = $mysqli->prepare('INSERT INTO language(Code, Speakers) VALUES (?,?)');
//     $stmt->bind_param('ss', $language_code, $native_speakers);
// 
//     // Insert some values
//     $language_code = 'DE';
//     $native_speakers = 50_123_456;
//     $stmt->execute();
//     $language_code = 'FR';
//     $native_speakers = 40_546_321;
//     $stmt->execute();
// 
//     // Commit the data in the database. This doesn't set autocommit=true
//     $mysqli->commit();
//     print "Committed 2 rows in the database\n";
// 
//     $result = $mysqli->query("SELECT @@autocommit");
//     $row = $result->fetch_row();
//     printf("Autocommit is %s\n", $row[0]);
// 
//     // Try to insert more values
//     $language_code = 'PL';
//     $native_speakers = 30_555_444;
//     $stmt->execute();
//     $language_code = 'DK';
//     $native_speakers = 5_222_444;
//     $stmt->execute();
// 
//     // Setting autocommit=true will trigger a commit
//     $mysqli->autocommit(true);
// 
//     print "Committed 2 row in the database\n";
// } catch (mysqli_sql_exception $exception) {
//     $mysqli->rollback();
// 
//     throw $exception;
// }
// [/php]
// Procedural style
// [php]
// 
// // Tell mysqli to throw an exception if an error occurs
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // The table engine has to support transactions
// mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS language (
//     Code text NOT NULL,
//     Speakers int(11) NOT NULL
//     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
// 
// // Turn autocommit off
// mysqli_autocommit($mysqli, false);
// 
// $result = mysqli_query($mysqli, "SELECT @@autocommit");
// $row = mysqli_fetch_row($result);
// printf("Autocommit is %s\n", $row[0]);
// 
// try {
//     // Prepare insert statement
//     $stmt = mysqli_prepare($mysqli, 'INSERT INTO language(Code, Speakers) VALUES (?,?)');
//     mysqli_stmt_bind_param($stmt, 'ss', $language_code, $native_speakers);
// 
//     // Insert some values
//     $language_code = 'DE';
//     $native_speakers = 50_123_456;
//     mysqli_stmt_execute($stmt);
//     $language_code = 'FR';
//     $native_speakers = 40_546_321;
//     mysqli_stmt_execute($stmt);
// 
//     // Commit the data in the database. This doesn't set autocommit=true
//     mysqli_commit($mysqli);
//     print "Committed 2 rows in the database\n";
// 
//     $result = mysqli_query($mysqli, "SELECT @@autocommit");
//     $row = mysqli_fetch_row($result);
//     printf("Autocommit is %s\n", $row[0]);
// 
//     // Try to insert more values
//     $language_code = 'PL';
//     $native_speakers = 30_555_444;
//     mysqli_stmt_execute($stmt);
//     $language_code = 'DK';
//     $native_speakers = 5_222_444;
//     mysqli_stmt_execute($stmt);
// 
//     // Setting autocommit=true will trigger a commit
//     mysqli_autocommit($mysqli, true);
// 
//     print "Committed 2 row in the database\n";
// } catch (mysqli_sql_exception $exception) {
//     mysqli_rollback($mysqli);
// 
//     throw $exception;
// }
// [/php]
// The above examples will output:
// [result]
// Autocommit is 0
// Committed 2 rows in the database
// Autocommit is 0
// Committed 2 row in the database
// Autocommit is 0
// Committed 2 rows in the database
// Autocommit is 0
// Committed 2 row in the database
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function does not work with non transactional table types (like MyISAM or ISAM).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.autocommit.php
// ========== MYSQLI_AUTOCOMMIT - END

// SYNTAX:
// bool mysqli::autocommit(bool $enable)

return $return_mysqli_autocommit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_AUTOCOMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_BEGIN_TRANSACTION
// ============================== PUBLIC
// ============================== ABOUT
// Starts a transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::begin_transaction() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_begin_transaction($mysqli, $flags = 0, $name = null)
{
$return_mysqli_begin_transaction = false;

// ========== MYSQLI_BEGIN_TRANSACTION - BEGIN
// ===== ABOUT
// Starts a transaction
// ===== DESCRIPTION
// Begins a transaction. Requires the InnoDB engine (it is enabled by default). For additional details about how MySQL transactions work, see > http://dev.mysql.com/doc/mysql/en/commit.html.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::begin_transaction(int $flags = 0, ?string $name = null): bool
// 
// Procedural style:
// mysqli_begin_transaction(mysqli $mysql, int $flags = 0, ?string $name = null): bool
// ===== CODE
$return_mysqli_begin_transaction = $mysqli->begin_transaction(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$flags, // int flags - Valid flags are:
// * MYSQLI_TRANS_START_READ_ONLY                : Start the transaction as "START TRANSACTION READ ONLY". Requires MySQL 5.6 and above.
// * MYSQLI_TRANS_START_READ_WRITE               : Start the transaction as "START TRANSACTION READ WRITE". Requires MySQL 5.6 and above.
// * MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT : Start the transaction as "START TRANSACTION WITH CONSISTENT SNAPSHOT".

$name // string name - Savepoint name for the transaction.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - name is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::begin_transaction() example
// Object-oriented style
// [php]
// 
// // Tell mysqli to throw an exception if an error occurs
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // The table engine has to support transactions
// $mysqli->query("CREATE TABLE IF NOT EXISTS language (
//     Code text NOT NULL,
//     Speakers int(11) NOT NULL
//     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
// 
// // Start transaction
// $mysqli->begin_transaction();
// 
// try {
//     // Insert some values
//     $mysqli->query("INSERT INTO language(Code, Speakers) VALUES ('DE', 42000123)");
// 
//     // Try to insert invalid values
//     $language_code = 'FR';
//     $native_speakers = 'Unknown';
//     $stmt = $mysqli->prepare('INSERT INTO language(Code, Speakers) VALUES (?,?)');
//     $stmt->bind_param('ss', $language_code, $native_speakers);
//     $stmt->execute();
// 
//     // If code reaches this point without errors then commit the data in the database
//     $mysqli->commit();
// } catch (mysqli_sql_exception $exception) {
//     $mysqli->rollback();
// 
//     throw $exception;
// }
// [/php]
// Procedural style
// [php]
// 
// // Tell mysqli to throw an exception if an error occurs
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // The table engine has to support transactions
// mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS language (
//     Code text NOT NULL,
//     Speakers int(11) NOT NULL
//     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
// 
// // Start transaction
// mysqli_begin_transaction($mysqli);
// 
// try {
//     // Insert some values
//     mysqli_query($mysqli, "INSERT INTO language(Code, Speakers) VALUES ('DE', 42000123)");
// 
//     // Try to insert invalid values
//     $language_code = 'FR';
//     $native_speakers = 'Unknown';
//     $stmt = mysqli_prepare($mysqli, 'INSERT INTO language(Code, Speakers) VALUES (?,?)');
//     mysqli_stmt_bind_param($stmt, 'ss', $language_code, $native_speakers);
//     mysqli_stmt_execute($stmt);
// 
//     // If code reaches this point without errors then commit the data in the database
//     mysqli_commit($mysqli);
// } catch (mysqli_sql_exception $exception) {
//     mysqli_rollback($mysqli);
// 
//     throw $exception;
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function does not work with non transactional table types (like MyISAM or ISAM).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.begin-transaction.php
// ========== MYSQLI_BEGIN_TRANSACTION - END

// SYNTAX:
// bool mysqli::begin_transaction(int $flags = 0, string $name = null)

return $return_mysqli_begin_transaction; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_BEGIN_TRANSACTION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CHANGE_USER
// ============================== PUBLIC
// ============================== ABOUT
// Changes the user of the specified database connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::change_user() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_change_user($mysqli, $username, $password, $database)
{
$return_mysqli_change_user = false;

// ========== MYSQLI_CHANGE_USER - BEGIN
// ===== ABOUT
// Changes the user of the specified database connection
// ===== DESCRIPTION
// Changes the user of the specified database connection and sets the current database.
// In order to successfully change users a valid username and password parameters must be provided and that user must have sufficient permissions to access the desired database. If for any reason authorization fails, the current user authentication will remain.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::change_user(string $username, string $password, ?string $database): bool
// 
// Procedural style
// mysqli_change_user(
//    mysqli $mysql,
//    string $username,
//    string $password,
//    ?string $database
// ): bool
// ===== CODE
$return_mysqli_change_user = $mysqli->change_user(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$username, // string username - The MySQL user name.

$password, // string password - The MySQL password.

$database // string database - The database to change to.
// If desired, the null value may be passed resulting in only changing the user and not selecting a database. To select a database in this case use the mysqli_select_db() function.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::change_user() example
// Object-oriented style
// [php]
// 
// // connect database test
// $mysqli = new mysqli("localhost", "my_user", "my_password", "test");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// // Set Variable a
// $mysqli->query("SET @a:=1");
// 
// // reset all and select a new database
// $mysqli->change_user("my_user", "my_password", "world");
// 
// if ($result = $mysqli->query("SELECT DATABASE()")) {
//     $row = $result->fetch_row();
//     printf("Default database: %s\n", $row[0]);
//     $result->close();
// }
// 
// if ($result = $mysqli->query("SELECT @a")) {
//     $row = $result->fetch_row();
//     if ($row[0] === NULL) {
//         printf("Value of variable a is NULL\n");
//     }
//     $result->close();
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// // connect database test
// $link = mysqli_connect("localhost", "my_user", "my_password", "test");
// 
// // check connection
// if (!$link) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// // Set Variable a
// mysqli_query($link, "SET @a:=1");
// 
// // reset all and select a new database
// mysqli_change_user($link, "my_user", "my_password", "world");
// 
// if ($result = mysqli_query($link, "SELECT DATABASE()")) {
//     $row = mysqli_fetch_row($result);
//     printf("Default database: %s\n", $row[0]);
//     mysqli_free_result($result);
// }
// 
// if ($result = mysqli_query($link, "SELECT @a")) {
//     $row = mysqli_fetch_row($result);
//     if ($row[0] === NULL) {
//         printf("Value of variable a is NULL\n");
//     }
//     mysqli_free_result($result);
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Default database: world
// Value of variable a is NULL
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Using this command will always cause the current database connection to behave as if was a completely new database connection, regardless of if the operation was completed successfully. This reset includes performing a rollback on any active transactions, closing all temporary tables, and unlocking all locked tables.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.change-user.php
// ========== MYSQLI_CHANGE_USER - END

// SYNTAX:
// bool mysqli::change_user(string $username, string $password, string $database)

return $return_mysqli_change_user; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CHANGE_USER
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CHARACTER_SET_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Returns the current character set of the database connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::character_set_name() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_character_set_name($mysqli)
{
$return_mysqli_character_set_name = null;

// ========== MYSQLI_CHARACTER_SET_NAME - BEGIN
// ===== ABOUT
// Returns the current character set of the database connection
// ===== DESCRIPTION
// Returns the current character set of the database connection.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::character_set_name(): string
// 
// Procedural style
// mysqli_character_set_name(mysqli $mysql): string
// ===== CODE
$return_mysqli_character_set_name = $mysqli->character_set_name(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// The current character set of the connection
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::character_set_name() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // Set the default character set
// $mysqli->set_charset('utf8mb4');
// 
// // Print current character set
// $charset = $mysqli->character_set_name();
// printf("Current character set is %s\n", $charset);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // Set the default character set
// mysqli_set_charset($mysqli, 'utf8mb4');
// 
// // Print current character set
// $charset = mysqli_character_set_name($mysqli);
// printf("Current character set is %s\n", $charset);
// [/php]
// The above examples will output:
// [result]
// Current character set is utf8mb4
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.character-set-name.php
// ========== MYSQLI_CHARACTER_SET_NAME - END

// SYNTAX:
// string mysqli::character_set_name()

return $return_mysqli_character_set_name; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CHARACTER_SET_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Closes a previously opened database connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::close() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_close($mysqli)
{
$return_mysqli_close = false;

// ========== MYSQLI_CLOSE - BEGIN
// ===== ABOUT
// Closes a previously opened database connection
// ===== DESCRIPTION
// Closes a previously opened database connection.
// Open non-persistent MySQL connections and result sets are automatically closed when their objects are destroyed. Explicitly closing open connections and freeing result sets is optional. However, it's a good idea to close the connection as soon as the script finishes performing all of its database operations, if it still has a lot of processing to do after getting the results.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::close(): true
// 
// Procedural style
// mysqli_close(mysqli $mysql): true
// ===== CODE
$return_mysqli_close = $mysqli->close(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Always returns true.
// 
// Changelog
// Version - Description
// 8.0.0   - This function now always returns true. Previously it returned false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::close() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $result = $mysqli->query("SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");
// 
// // Close the connection as soon as it's no longer needed
// $mysqli->close();
// 
// foreach ($result as $row) {
//     // Processing of the data retrieved from the database
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $result = mysqli_query($mysqli, "SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");
// 
// // Close the connection as soon as it's no longer needed
// mysqli_close($mysqli);
// 
// foreach ($result as $row) {
//     // Processing of the data retrieved from the database
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: mysqli_close() will not close persistent connections. For additional details, see the manual page on persistent connections.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.close.php
// ========== MYSQLI_CLOSE - END

// SYNTAX:
// bool mysqli::close()

return $return_mysqli_close; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_COMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Commits the current transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::commit() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_commit($mysqli, $flags = 0, $name = null)
{
$return_mysqli_commit = false;

// ========== MYSQLI_COMMIT - BEGIN
// ===== ABOUT
// Commits the current transaction
// ===== DESCRIPTION
// Commits the current transaction for the database connection.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::commit(int $flags = 0, ?string $name = null): bool
// 
// Procedural style
// mysqli_commit(mysqli $mysql, int $flags = 0, ?string $name = null): bool
// ===== CODE
$return_mysqli_commit = $mysqli->commit(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$flags, // int flags - A bitmask of MYSQLI_TRANS_COR_* constants.

$name // string name - If provided then COMMIT/*name*/ is executed.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.0.0   - name is now nullable.
// 
// [examples]
// Examples
// See the mysqli::begin_transaction() example.
// [/examples]
// 
// Notes
// Note: This function does not work with non transactional table types (like MyISAM or ISAM).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.commit.php
// ========== MYSQLI_COMMIT - END

// SYNTAX:
// bool mysqli::commit(int $flags = 0, string $name = null)

return $return_mysqli_commit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_COMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT_ERRNO
// ============================== PUBLIC
// ============================== ABOUT
// Returns the error code from last connect call.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::connect_errno() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_connect_errno($mysqli)
{
$return_mysqli_connect_errno = 0;

// ========== MYSQLI_CONNECT_ERRNO - BEGIN
// ===== ABOUT
// Returns the error code from last connect call
// ===== DESCRIPTION
// Returns the error code from the last connection attempt.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->connect_errno;
// 
// Procedural style
// mysqli_connect_errno(): int
// ===== CODE
$return_mysqli_connect_errno = $mysqli->connect_errno(

// This function has no parameters.

); // Return Values
// An error code for the last connection attempt, if it failed. Zero means no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->connect_errno example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_OFF);
// /* @ is used to suppress warnings */
// $mysqli = @new mysqli('localhost', 'fake_user', 'wrong_password', 'does_not_exist');
// if ($mysqli->connect_errno) {
// //     /* Use your preferred error logging method here */
//     error_log('Connection error: ' . $mysqli->connect_errno);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_OFF);
// /* @ is used to suppress warnings */
// $link = @mysqli_connect('localhost', 'fake_user', 'wrong_password', 'does_not_exist');
// if (!$link) {
//     /* Use your preferred error logging method here */
//     error_log('Connection error: ' . mysqli_connect_errno());
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/mysqli.connect-errno.php
// ========== MYSQLI_CONNECT_ERRNO - END

// SYNTAX:
// int $mysqli::connect_errno()

return $return_mysqli_connect_errno; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT_ERRNO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Returns a description of the last connection error.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::connect_error() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_connect_error($mysqli)
{
$return_mysqli_connect_error = null;

// ========== MYSQLI_CONNECT_ERROR - BEGIN
// ===== ABOUT
// Returns a description of the last connection error
// ===== DESCRIPTION
// Returns the error message from the last connection attempt.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// ?string $mysqli->connect_error;
// 
// Procedural style
// mysqli_connect_error(): ?string
// ===== CODE
$return_mysqli_connect_error = $mysqli->connect_error(

// This function has no parameters.

); // Return Values
// A string that describes the error. null is returned if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->connect_error example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_OFF);
// /* @ is used to suppress warnings */
// $mysqli = @new mysqli('localhost', 'fake_user', 'wrong_password', 'does_not_exist');
// if ($mysqli->connect_error) {
//     /* Use your preferred error logging method here */
//     error_log('Connection error: ' . $mysqli->connect_error);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_OFF);
// /* @ is used to suppress warnings */
// $link = @mysqli_connect('localhost', 'fake_user', 'wrong_password', 'does_not_exist');
// if (!$link) {
//     /* Use your preferred error logging method here */
//     error_log('Connection error: ' . mysqli_connect_error());
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/mysqli.connect-error.php
// ========== MYSQLI_CONNECT_ERROR - END

// SYNTAX:
// string $mysqli::connect_error()

return $return_mysqli_connect_error; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONNECT_ERROR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Open a new connection to the MySQL server.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::__construct() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_construct($hostname = null, $username = null, $password = null, $database = null, $port = null, $socket = null)
{
$return_mysqli_construct = false;

// ========== MYSQLI_CONSTRUCT - BEGIN
// ===== ABOUT
// Open a new connection to the MySQL server
// ===== DESCRIPTION
// Opens a connection to the MySQL Server.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::__construct(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null
// )
// public mysqli::connect(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null
// ): bool
// 
// Procedural style
// mysqli_connect(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null
// ): mysqli|false
// ===== CODE
$return_mysqli_construct = new mysqli(

$hostname, // string hostname - Can be either a host name or an IP address. When passing null, the value is retrieved from mysqli.default_host. When possible, pipes will be used instead of the TCP/IP protocol. The TCP/IP protocol is used if a host name and port number are provided together e.g. localhost:3308.
// Prepending host by p: opens a persistent connection. mysqli_change_user() is automatically called on connections opened from the connection pool.

$username, // string username - The MySQL username or null to assume the username based on the mysqli.default_user ini option.

$password, // string password - The MySQL password or null to assume the password based on the mysqli.default_pw ini option.

$database, // string database - The default database to be used when performing queries or null.

$port, // int port - The port number to attempt to connect to the MySQL server or null to assume the port based on the mysqli.default_port ini option.

$socket // string socket - The socket or named pipe that should be used or null to assume the socket based on the mysqli.default_socket ini option.
// Note: Specifying the socket parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the hostname parameter.

); // Return Values
// mysqli_connect() returns an object which represents the connection to a MySQL Server, or false on failure.
// mysqli::connect() returns true on success or false on failure. Prior to PHP 8.1.0, returns null on success.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.1.0   - mysqli::connect() now returns true instead of null on success.
// 7.4.0   - All parameters are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::__construct() example
// Object-oriented style
// [php]
// // You should enable error reporting for mysqli before attempting to make a connection */
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
// 
// // Set the desired charset after establishing a connection
// $mysqli->set_charset('utf8mb4');
// 
// printf("Success... %s\n", $mysqli->host_info);
// [/php]
// Procedural style
// [php]
// 
// // You should enable error reporting for mysqli before attempting to make a connection
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// $mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
// 
// // Set the desired charset after establishing a connection
// mysqli_set_charset($mysqli, 'utf8mb4');
// 
// printf("Success... %s\n", mysqli_get_host_info($mysqli));
// [/php]
// The above examples will output something similar to:
// [result]
// Success... localhost via TCP/IP
// [/result]
// [/example]
// [example]
// Example #2 Extending mysqli class
// [php]
// 
// class FooMysqli extends mysqli {
//     public function __construct($host, $user, $pass, $db, $port, $socket, $charset) {
//         mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//         parent::__construct($host, $user, $pass, $db, $port, $socket);
//         $this->set_charset($charset);
//     }
// }
// 
// $db = new FooMysqli('localhost', 'my_user', 'my_password', 'my_db', 3306, null, 'utf8mb4');
// [/php]
// [/example]
// [example]
// Example #3 Manual error handling
// If error reporting is disabled, the developer is responsible for checking and handling failures
// Object-oriented style
// [php]
// 
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_OFF);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
// if ($mysqli->connect_errno) {
//     throw new RuntimeException('mysqli connection error: ' . $mysqli->connect_error);
// }
// 
// // Set the desired charset after establishing a connection
// $mysqli->set_charset('utf8mb4');
// if ($mysqli->errno) {
//     throw new RuntimeException('mysqli error: ' . $mysqli->error);
// }
// [/php]
// Procedural style
// [php]
// 
// error_reporting(0);
// mysqli_report(MYSQLI_REPORT_OFF);
// $mysqli = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
// if (mysqli_connect_errno()) {
//     throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
// }
// 
// // Set the desired charset after establishing a connection
// mysqli_set_charset($mysqli, 'utf8mb4');
// if (mysqli_errno($mysqli)) {
//     throw new RuntimeException('mysqli error: ' . mysqli_error($mysqli));
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  MySQLnd always assumes the server default charset. This charset is sent during connection hand-shake/authentication, which mysqlnd will use.
//  Libmysqlclient uses the default charset set in the my.cnf or by an explicit call to mysqli_options() prior to calling mysqli_real_connect(), but after mysqli_init().
// Note: Object-oriented style only: If the connection fails, an object is still returned. To check whether the connection failed, use either the mysqli_connect_error() function or the mysqli->connect_error property as in the preceding examples.
// Note: If it is necessary to set options, such as the connection timeout, mysqli_real_connect() must be used instead.
// Note: Calling the constructor with no parameters is the same as calling mysqli_init().
// Note: Error "Can't create TCP/IP socket (10106)" usually means that the variables_order configure directive doesn't contain character E. On Windows, if the environment is not copied the SYSTEMROOT environment variable won't be available and PHP will have problems loading Winsock.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.construct.php
// ========== MYSQLI_CONSTRUCT - END

// SYNTAX:
// mysqli mysqli::__construct(string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null)

return $return_mysqli_construct; // mysqli
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DEBUG
// ============================== PUBLIC
// ============================== ABOUT
// Performs debugging operations.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::debug() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_debug($mysqli, $options)
{
$return_mysqli_debug = false;

// ========== MYSQLI_DEBUG - BEGIN
// ===== ABOUT
// Performs debugging operations
// ===== DESCRIPTION
// Performs debugging operations using the Fred Fish debugging library.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::debug(string $options): true
// 
// Procedural style
// mysqli_debug(string $options): true
// ===== CODE
$return_mysqli_debug = $mysqli->debug(

$options // string options - A string representing the debugging operation to perform
// The debug control string is a sequence of colon separated fields as follows:
// <field_1>:<field_2>:<field_N>
// Each field consists of a mandatory flag character followed by an optional , and comma separated list of modifiers:
// flag[,modifier,modifier,...,modifier]
// 
// Recognized Flag Characters
// option character - Description
// O                - MYSQLND_DEBUG_FLUSH
// A/a              - MYSQLND_DEBUG_APPEND
// F                - MYSQLND_DEBUG_DUMP_FILE
// i                - MYSQLND_DEBUG_DUMP_PID
// L                - MYSQLND_DEBUG_DUMP_LINE
// m                - MYSQLND_DEBUG_TRACE_MEMORY_CALLS
// n                - MYSQLND_DEBUG_DUMP_LEVEL
// o                - output to file
// T                - MYSQLND_DEBUG_DUMP_TIME
// t                - MYSQLND_DEBUG_DUMP_TRACE
// x                - MYSQLND_DEBUG_PROFILE_CALLS

); // Return Values
// Always returns true.
// 
// Changelog
// Version - Description
// 8.0.0   - This function now always returns true. Previously it returned false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Generating a Trace File
// [php]
// 
// // Create a trace file in '/tmp/client.trace' on the local (client) machine:
// mysqli_debug("d:t:o,/tmp/client.trace");
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: To use the mysqli_debug() function you must compile the MySQL client library to support debugging.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.debug.php
// ========== MYSQLI_DEBUG - END

// SYNTAX:
// bool mysqli::debug(string $options)

return $return_mysqli_debug; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DEBUG
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DUMP_DEBUG_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Dump debugging information into the log.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::dump_debug_info() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_dump_debug_info($mysqli)
{
$return_mysqli_dump_debug_info = false;

// ========== MYSQLI_DUMP_DEBUG_INFO - BEGIN
// ===== ABOUT
// Dump debugging information into the log
// ===== DESCRIPTION
// This function is designed to be executed by an user with the SUPER privilege and is used to dump debugging information into the log for the MySQL Server relating to the connection.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::dump_debug_info(): bool
// 
// Procedural style
// mysqli_dump_debug_info(mysqli $mysql): bool
// ===== CODE
$return_mysqli_dump_debug_info = $mysqli->dump_debug_info(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-04)
// URL: https://www.php.net/manual/en/mysqli.dump-debug-info.php
// ========== MYSQLI_DUMP_DEBUG_INFO - END

// SYNTAX:
// bool mysqli::dump_debug_info()

return $return_mysqli_dump_debug_info; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DUMP_DEBUG_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERRNO
// ============================== PUBLIC
// ============================== ABOUT
// Returns the error code for the most recent function call.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::errno() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_errno($mysqli)
{
$return_mysqli_errno = 0;

// ========== MYSQLI_ERRNO - BEGIN
// ===== ABOUT
// Returns the error code for the most recent function call
// ===== DESCRIPTION
// Returns the last error code for the most recent MySQLi function call that can succeed or fail.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->errno;
// 
// Procedural style
// mysqli_errno(mysqli $mysql): int
// ===== CODE
$return_mysqli_errno = $mysqli->errno(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// An error code value for the last call, if it failed. zero means no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->errno example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }
// 
// if (!$mysqli->query("SET a=1")) {
//     printf("Errorcode: %d\n", $mysqli->errno);
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// if (!mysqli_query($link, "SET a=1")) {
//     printf("Errorcode: %d\n", mysqli_errno($link));
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Errorcode: 1193
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/mysqli.errno.php
// ========== MYSQLI_ERRNO - END

// SYNTAX:
// int $mysqli::errno()

return $return_mysqli_errno; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERRNO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERROR_LIST
// ============================== PUBLIC
// ============================== ABOUT
// Returns a list of errors from the last command executed.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::error_list() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_error_list($mysqli)
{
$return_mysqli_error_list = null;

// ========== MYSQLI_ERROR_LIST - BEGIN
// ===== ABOUT
// Returns a list of errors from the last command executed
// ===== DESCRIPTION
// Returns a array of errors for the most recent MySQLi function call that can succeed or fail.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// array $mysqli->error_list;
// 
// Procedural style
// mysqli_error_list(mysqli $mysql): array
// ===== CODE
$return_mysqli_error_list = $mysqli->error_list(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// A list of errors, each as an associative array containing the errno, error, and sqlstate.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->error_list example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "nobody", "");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// if (!$mysqli->query("SET a=1")) {
//     print_r($mysqli->error_list);
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// if (!mysqli_query($link, "SET a=1")) {
//     print_r(mysqli_error_list($link));
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [errno] => 1193
//             [sqlstate] => HY000
//             [error] => Unknown system variable 'a'
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/mysqli.error-list.php
// ========== MYSQLI_ERROR_LIST - END

// SYNTAX:
// array $mysqli::error_list()

return $return_mysqli_error_list; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERROR_LIST
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Returns a string description of the last error.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::error() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_error($mysqli)
{
$return_mysqli_error = null;

// ========== MYSQLI_ERROR - BEGIN
// ===== ABOUT
// Returns a string description of the last error
// ===== DESCRIPTION
// Returns the last error message for the most recent MySQLi function call that can succeed or fail.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli->error;
// 
// Procedural style
// mysqli_error(mysqli $mysql): string
// ===== CODE
$return_mysqli_error = $mysqli->error(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// A string that describes the error. An empty string if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->error example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }
// 
// if (!$mysqli->query("SET a=1")) {
//     printf("Error message: %s\n", $mysqli->error);
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// if (!mysqli_query($link, "SET a=1")) {
//     printf("Error message: %s\n", mysqli_error($link));
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error message: Unknown system variable 'a'
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/mysqli.error.php
// ========== MYSQLI_ERROR - END

// SYNTAX:
// string $mysqli::error()

return $return_mysqli_error; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ERROR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_EXECUTE_QUERY
// ============================== OFFLINE
// ============================== ABOUT
// Prepares, binds parameters, and executes SQL statement.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::execute_query() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_database_vendor_mysql_mysqli_mysqli_execute_query($mysqli, $query, $params = null)
{
$return_mysqli_execute_query = false;

// ========== MYSQLI_EXECUTE_QUERY - BEGIN
// ===== ABOUT
// Prepares, binds parameters, and executes SQL statement
// ===== DESCRIPTION
// Prepares the SQL query, binds parameters, and executes it. The mysqli::execute_query() method is a shortcut for mysqli::prepare(), mysqli_stmt::bind_param(), mysqli_stmt::execute(), and mysqli_stmt::get_result().
// The statement template can contain zero or more question mark (?) parameter markers⁠-also called placeholders. The parameter values must be provided as an array using params parameter.
// A prepared statement is created under the hood but it's never exposed outside of the function. It's impossible to access properties of the statement as one would do with the mysqli_stmt object. Due to this limitation, the status information is copied to the mysqli object and is available using its methods, e.g. mysqli_affected_rows() or mysqli_error().
//  Note:
//  In the case where a statement is passed to mysqli_execute_query() that is longer than max_allowed_packet of the server, the returned error codes are different depending on the operating system. The behavior is as follows:
//  * On Linux returns an error code of 1153. The error message means got a packet bigger than max_allowed_packet bytes.
//  * On Windows returns an error code 2006. This error message means server has gone away.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// Object-oriented style
// public mysqli::execute_query(string $query, ?array $params = null): mysqli_result|bool
// 
// Procedural style
// mysqli_execute_query(mysqli $mysql, string $query, ?array $params = null): mysqli_result|bool
// ===== CODE
$return_mysqli_execute_query = $mysqli->execute_query(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$query, // string query - The query, as a string. It must consist of a single SQL statement.
// The SQL statement may contain zero or more parameter markers represented by question mark (?) characters at the appropriate positions.
// Note: The markers are legal only in certain places in SQL statements. For example, they are permitted in the VALUES() list of an INSERT statement (to specify column values for a row), or in a comparison with a column in a WHERE clause to specify a comparison value. However, they are not permitted for identifiers (such as table or column names).

$params // array params - An optional list array with as many elements as there are bound parameters in the SQL statement being executed. Each value is treated as a string.

); // Return Values
// Returns false on failure. For successful queries which produce a result set, such as SELECT, SHOW, DESCRIBE or EXPLAIN, returns a mysqli_result object. For other successful queries, returns true.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::execute_query() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');
// 
// $query = 'SELECT Name, District FROM City WHERE CountryCode=? ORDER BY Name LIMIT 5';
// $result = $mysqli->execute_query($query, ['DEU']);
// foreach ($result as $row) {
//     printf("%s (%s)\n", $row["Name"], $row["District"]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = 'SELECT Name, District FROM City WHERE CountryCode=? ORDER BY Name LIMIT 5';
// $result = mysqli_execute_query($link, $query, ['DEU']);
// foreach ($result as $row) {
//     printf("%s (%s)\n", $row["Name"], $row["District"]);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Aachen (Nordrhein-Westfalen)
// Augsburg (Baijeri)
// Bergisch Gladbach (Nordrhein-Westfalen)
// Berlin (Berliini)
// Bielefeld (Nordrhein-Westfalen)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.execute-query.php
// ========== MYSQLI_EXECUTE_QUERY - END

// SYNTAX:
// mysqli_result|bool mysqli::execute_query(string $query, array $params = null)

return $return_mysqli_execute_query; // mysqli_result|bool
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_EXECUTE_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_FIELD_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of columns for the most recent query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::field_count() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_field_count($mysqli)
{
$return_mysqli_field_count = 0;

// ========== MYSQLI_FIELD_COUNT - BEGIN
// ===== ABOUT
// Returns the number of columns for the most recent query
// ===== DESCRIPTION
// Returns the number of columns for the most recent query on the connection represented by the mysql parameter. This function can be useful when using the mysqli_store_result() function to determine if the query should have produced a non-empty result set or not without knowing the nature of the query.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->field_count;
// 
// Procedural style
// mysqli_field_count(mysqli $mysql): int
// ===== CODE
$return_mysqli_field_count = $mysqli->field_count(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// An integer representing the number of fields in a result set.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->field_count example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "test");
// 
// $mysqli->query( "DROP TABLE IF EXISTS friends");
// $mysqli->query( "CREATE TABLE friends (id int, name varchar(20))");
// 
// $mysqli->query( "INSERT INTO friends VALUES (1,'Hartmut'), (2, 'Ulf')");
// 
// 
// $mysqli->real_query("SELECT * FROM friends");
// 
// if ($mysqli->field_count) {
//     /* this was a select/show or describe query */
//     $result = $mysqli->store_result();
// 
//     /* process resultset */
//     $row = $result->fetch_row();
// 
//     /* free resultset */
//     $result->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "test");
// 
// mysqli_query($link, "DROP TABLE IF EXISTS friends");
// mysqli_query($link, "CREATE TABLE friends (id int, name varchar(20))");
// 
// mysqli_query($link, "INSERT INTO friends VALUES (1,'Hartmut'), (2, 'Ulf')");
// 
// mysqli_real_query($link, "SELECT * FROM friends");
// 
// if (mysqli_field_count($link)) {
//     /* this was a select/show or describe query */
//     $result = mysqli_store_result($link);
// 
//     /* process resultset */
//     $row = mysqli_fetch_row($result);
// 
//     /* free resultset */
//     mysqli_free_result($result);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-26)
// URL: https://www.php.net/manual/en/function.abs.php
// ========== MYSQLI_FIELD_COUNT - END

// SYNTAX:
// int $mysqli::field_count()

return $return_mysqli_field_count; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_FIELD_COUNT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CHARSET
// ============================== PUBLIC
// ============================== ABOUT
// Returns a character set object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::get_charset() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_get_charset($mysqli)
{
$return_mysqli_get_charset = null;

// ========== MYSQLI_GET_CHARSET - BEGIN
// ===== ABOUT
// Returns a character set object
// ===== DESCRIPTION
// Returns a character set object providing several properties of the current active character set.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::get_charset(): ?object
// 
// Procedural style
// mysqli_get_charset(mysqli $mysql): ?object
// ===== CODE
$return_mysqli_get_charset = $mysqli->get_charset(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// The function returns a character set object with the following properties:
// charset    - Character set name
// collation  - Collation name
// dir        - Directory the charset description was fetched from (?) or "" for built-in character sets
// min_length - Minimum character length in bytes
// max_length - Maximum character length in bytes
// number     - Internal character set number
// state      - Character set status (?)
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::get_charset() example
// Object-oriented style
// [php]
//   $db = mysqli_init();
//   $db->real_connect("localhost","root","","test");
//   var_dump($db->get_charset());
// [/php]
// Procedural style
// [php]
//   $db = mysqli_init();
//   mysqli_real_connect($db, "localhost","root","","test");
//   var_dump(mysqli_get_charset($db));
// [/php]
// The above examples will output:
// [result]
// object(stdClass)#2 (7) {
//   ["charset"]=>
//   string(6) "latin1"
//   ["collation"]=>
//   string(17) "latin1_swedish_ci"
//   ["dir"]=>
//   string(0) ""
//   ["min_length"]=>
//   int(1)
//   ["max_length"]=>
//   int(1)
//   ["number"]=>
//   int(8)
//   ["state"]=>
//   int(801)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.get-charset.php
// ========== MYSQLI_GET_CHARSET - END

// SYNTAX:
// object mysqli::get_charset()

return $return_mysqli_get_charset; // object
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CHARSET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLIENT_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Get MySQL client info.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::client_info() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_client_info($mysqli)
{
$return_mysqli_client_info = null;

// ========== MYSQLI_CLIENT_INFO - BEGIN
// ===== ABOUT
// Get MySQL client info
// ===== DESCRIPTION
// Returns a string that represents the MySQL client library version.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli->client_info;
// public mysqli::get_client_info(): string
// 
// Procedural style
// mysqli_get_client_info(?mysqli $mysql = null): string
// ===== CODE
$return_mysqli_client_info = $mysqli->client_info(

// This function has no parameters.

); // Return Values
// A string that represents the MySQL client library version.
// 
// Changelog
// Version - Description
// 8.1.0   - Calling mysqli_get_client_info() with the mysql argument has been deprecated. This function never required a parameter, but incorrectly allowed it as an optional parameter.
// 8.1.0   - The object-oriented style mysqli::get_client_info() has been deprecated.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_get_client_info
// [php]
// 
// // We don't need a connection to determine
// // the version of mysql client library
// 
// printf("Client library version: %s\n", mysqli_get_client_info());
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.get-client-info.php
// ========== MYSQLI_CLIENT_INFO - END

// SYNTAX:
// string $mysqli::client_info()

return $return_mysqli_client_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLIENT_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLIENT_VERSION
// ============================== PUBLIC
// ============================== ABOUT
// Returns the MySQL client version as an integer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::client_version() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_client_version($mysqli)
{
$return_mysqli_client_version = 0;

// ========== MYSQLI_CLIENT_VERSION - BEGIN
// ===== ABOUT
// Returns the MySQL client version as an integer
// ===== DESCRIPTION
// Returns client version number as an integer.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->client_version;
// 
// Procedural style
// mysqli_get_client_version(): int
// ===== CODE
$return_mysqli_client_version = $mysqli->client_version(

// This function has no parameters.

); // Return Values
// A number that represents the MySQL client library version in format: main_version*10000 + minor_version *100 + sub_version. For example, 4.1.0 is returned as 40100.
// This is useful to quickly determine the version of the client library to know if some capability exists.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_get_client_version
// [php]
// 
// // We don't need a connection to determine
// // the version of mysql client library
// 
// printf("Client library version: %d\n", mysqli_get_client_version());
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.get-client-version.php
// ========== MYSQLI_CLIENT_VERSION - END

// SYNTAX:
// int $mysqli::client_version()

return $return_mysqli_client_version; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_CLIENT_VERSION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CONNECTION_STATS
// ============================== PUBLIC
// ============================== ABOUT
// Returns statistics about the client connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::get_connection_stats() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_get_connection_stats($mysqli)
{
$return_mysqli_get_connection_stats = null;

// ========== MYSQLI_GET_CONNECTION_STATS - BEGIN
// ===== ABOUT
// Returns statistics about the client connection
// ===== DESCRIPTION
// Returns statistics about the client connection.
// Note: Available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::get_connection_stats(): array
// 
// Procedural style
// mysqli_get_connection_stats(mysqli $mysql): array
// ===== CODE
$return_mysqli_get_connection_stats = $mysqli->get_connection_stats(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns an array with connection stats.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysqli_get_connection_stats() example
// [php]
// $link = mysqli_connect();
// print_r(mysqli_get_connection_stats($link));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [bytes_sent] => 43
//     [bytes_received] => 80
//     [packets_sent] => 1
//     [packets_received] => 2
//     [protocol_overhead_in] => 8
//     [protocol_overhead_out] => 4
//     [bytes_received_ok_packet] => 11
//     [bytes_received_eof_packet] => 0
//     [bytes_received_rset_header_packet] => 0
//     [bytes_received_rset_field_meta_packet] => 0
//     [bytes_received_rset_row_packet] => 0
//     [bytes_received_prepare_response_packet] => 0
//     [bytes_received_change_user_packet] => 0
//     [packets_sent_command] => 0
//     [packets_received_ok] => 1
//     [packets_received_eof] => 0
//     [packets_received_rset_header] => 0
//     [packets_received_rset_field_meta] => 0
//     [packets_received_rset_row] => 0
//     [packets_received_prepare_response] => 0
//     [packets_received_change_user] => 0
//     [result_set_queries] => 0
//     [non_result_set_queries] => 0
//     [no_index_used] => 0
//     [bad_index_used] => 0
//     [slow_queries] => 0
//     [buffered_sets] => 0
//     [unbuffered_sets] => 0
//     [ps_buffered_sets] => 0
//     [ps_unbuffered_sets] => 0
//     [flushed_normal_sets] => 0
//     [flushed_ps_sets] => 0
//     [ps_prepared_never_executed] => 0
//     [ps_prepared_once_executed] => 0
//     [rows_fetched_from_server_normal] => 0
//     [rows_fetched_from_server_ps] => 0
//     [rows_buffered_from_client_normal] => 0
//     [rows_buffered_from_client_ps] => 0
//     [rows_fetched_from_client_normal_buffered] => 0
//     [rows_fetched_from_client_normal_unbuffered] => 0
//     [rows_fetched_from_client_ps_buffered] => 0
//     [rows_fetched_from_client_ps_unbuffered] => 0
//     [rows_fetched_from_client_ps_cursor] => 0
//     [rows_skipped_normal] => 0
//     [rows_skipped_ps] => 0
//     [copy_on_write_saved] => 0
//     [copy_on_write_performed] => 0
//     [command_buffer_too_small] => 0
//     [connect_success] => 1
//     [connect_failure] => 0
//     [connection_reused] => 0
//     [reconnect] => 0
//     [pconnect_success] => 0
//     [active_connections] => 1
//     [active_persistent_connections] => 0
//     [explicit_close] => 0
//     [implicit_close] => 0
//     [disconnect_close] => 0
//     [in_middle_of_command_close] => 0
//     [explicit_free_result] => 0
//     [implicit_free_result] => 0
//     [explicit_stmt_close] => 0
//     [implicit_stmt_close] => 0
//     [mem_emalloc_count] => 0
//     [mem_emalloc_ammount] => 0
//     [mem_ecalloc_count] => 0
//     [mem_ecalloc_ammount] => 0
//     [mem_erealloc_count] => 0
//     [mem_erealloc_ammount] => 0
//     [mem_efree_count] => 0
//     [mem_malloc_count] => 0
//     [mem_malloc_ammount] => 0
//     [mem_calloc_count] => 0
//     [mem_calloc_ammount] => 0
//     [mem_realloc_count] => 0
//     [mem_realloc_ammount] => 0
//     [mem_free_count] => 0
//     [proto_text_fetched_null] => 0
//     [proto_text_fetched_bit] => 0
//     [proto_text_fetched_tinyint] => 0
//     [proto_text_fetched_short] => 0
//     [proto_text_fetched_int24] => 0
//     [proto_text_fetched_int] => 0
//     [proto_text_fetched_bigint] => 0
//     [proto_text_fetched_decimal] => 0
//     [proto_text_fetched_float] => 0
//     [proto_text_fetched_double] => 0
//     [proto_text_fetched_date] => 0
//     [proto_text_fetched_year] => 0
//     [proto_text_fetched_time] => 0
//     [proto_text_fetched_datetime] => 0
//     [proto_text_fetched_timestamp] => 0
//     [proto_text_fetched_string] => 0
//     [proto_text_fetched_blob] => 0
//     [proto_text_fetched_enum] => 0
//     [proto_text_fetched_set] => 0
//     [proto_text_fetched_geometry] => 0
//     [proto_text_fetched_other] => 0
//     [proto_binary_fetched_null] => 0
//     [proto_binary_fetched_bit] => 0
//     [proto_binary_fetched_tinyint] => 0
//     [proto_binary_fetched_short] => 0
//     [proto_binary_fetched_int24] => 0
//     [proto_binary_fetched_int] => 0
//     [proto_binary_fetched_bigint] => 0
//     [proto_binary_fetched_decimal] => 0
//     [proto_binary_fetched_float] => 0
//     [proto_binary_fetched_double] => 0
//     [proto_binary_fetched_date] => 0
//     [proto_binary_fetched_year] => 0
//     [proto_binary_fetched_time] => 0
//     [proto_binary_fetched_datetime] => 0
//     [proto_binary_fetched_timestamp] => 0
//     [proto_binary_fetched_string] => 0
//     [proto_binary_fetched_blob] => 0
//     [proto_binary_fetched_enum] => 0
//     [proto_binary_fetched_set] => 0
//     [proto_binary_fetched_geometry] => 0
//     [proto_binary_fetched_other] => 0
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.get-connection-stats.php
// ========== MYSQLI_GET_CONNECTION_STATS - END

// SYNTAX:
// array mysqli::get_connection_stats()

return $return_mysqli_get_connection_stats; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_CONNECTION_STATS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_HOST_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Returns a string representing the type of connection used.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::host_info() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_host_info($mysqli)
{
$return_mysqli_host_info = null;

// ========== MYSQLI_HOST_INFO - BEGIN
// ===== ABOUT
// Returns a string representing the type of connection used
// ===== DESCRIPTION
// Returns a string describing the connection represented by the mysql parameter (including the server host name).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli->host_info;
// 
// Procedural style
// mysqli_get_host_info(mysqli $mysql): string
// ===== CODE
$return_mysqli_host_info = $mysqli->host_info(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// A character string representing the server hostname and the connection type.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->host_info example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* print host information */
// printf("Host info: %s\n", $mysqli->host_info);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* print host information */
// printf("Host info: %s\n", mysqli_get_host_info($link));
// [/php]
// The above examples will output:
// [result]
// Host info: Localhost via UNIX socket
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.get-host-info.php
// ========== MYSQLI_HOST_INFO - END

// SYNTAX:
// string $mysqli::host_info()

return $return_mysqli_host_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_HOST_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PROTOCOL_VERSION
// ============================== PUBLIC
// ============================== ABOUT
// Returns the version of the MySQL protocol used.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::protocol_version() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_protocol_version($mysqli)
{
$return_mysqli_protocol_version = 0;

// ========== MYSQLI_PROTOCOL_VERSION - BEGIN
// ===== ABOUT
// Returns the version of the MySQL protocol used
// ===== DESCRIPTION
// Returns an integer representing the MySQL protocol version used by the connection represented by the mysql parameter.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->protocol_version;
// 
// Procedural style
// mysqli_get_proto_info(mysqli $mysql): int
// ===== CODE
$return_mysqli_protocol_version = $mysqli->protocol_version(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns an integer representing the protocol version.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->protocol_version example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password");
// 
// /* print protocol version */
// printf("Protocol version: %d\n", $mysqli->protocol_version);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password");
// 
// /* print protocol version */
// printf("Protocol version: %d\n", mysqli_get_proto_info($link));
// [/php]
// The above examples will output:
// [result]
// Protocol version: 10
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.get-proto-info.php
// ========== MYSQLI_PROTOCOL_VERSION - END

// SYNTAX:
// int $mysqli::protocol_version()

return $return_mysqli_protocol_version; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PROTOCOL_VERSION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SERVER_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Returns the version of the MySQL server.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::server_info() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_server_info($mysqli)
{
$return_mysqli_server_info = null;

// ========== MYSQLI_SERVER_INFO - BEGIN
// ===== ABOUT
// Returns the version of the MySQL server
// ===== DESCRIPTION
// Returns a string representing the version of the MySQL server that the MySQLi extension is connected to.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli->server_info;
// public mysqli::get_server_info(): string
// 
// Procedural style
// mysqli_get_server_info(mysqli $mysql): string
// ===== CODE
$return_mysqli_server_info = $mysqli->server_info(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// A character string representing the server version.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->server_info example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password");
// 
// /* print server version */
// printf("Server version: %s\n", $mysqli->server_info);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password");
// 
// /* print server version */
// printf("Server version: %s\n", mysqli_get_server_info($link));
// [/php]
// The above examples will output something similar to:
// [result]
// Server version: 8.0.21
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.get-server-info.php
// ========== MYSQLI_SERVER_INFO - END

// SYNTAX:
// string $mysqli::server_info()

return $return_mysqli_server_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SERVER_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SERVER_VERSION
// ============================== PUBLIC
// ============================== ABOUT
// Returns the version of the MySQL server as an integer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::server_version() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_server_version($mysqli)
{
$return_mysqli_server_version = 0;

// ========== MYSQLI_SERVER_VERSION - BEGIN
// ===== ABOUT
// Returns the version of the MySQL server as an integer
// ===== DESCRIPTION
// The mysqli_get_server_version() function returns the version of the server connected to (represented by the mysql parameter) as an integer.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->server_version;
// 
// Procedural style
// mysqli_get_server_version(mysqli $mysql): int
// ===== CODE
$return_mysqli_server_version = $mysqli->server_version(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// An integer representing the server version.
// The form of this version number is main_version * 10000 + minor_version * 100 + sub_version (i.e. version 4.1.0 is 40100).
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->server_version example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password");
// 
// /* print server version */
// printf("Server version: %d\n", $mysqli->server_version);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password");
// 
// /* print server version */
// printf("Server version: %d\n", mysqli_get_server_version($link));
// [/php]
// The above examples will output something similar to:
// [result]
// Server version: 80021
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.get-server-version.php
// ========== MYSQLI_SERVER_VERSION - END

// SYNTAX:
// int $mysqli::server_version()

return $return_mysqli_server_version; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SERVER_VERSION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_WARNINGS
// ============================== PUBLIC
// ============================== ABOUT
// Get result of SHOW WARNINGS.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::get_warnings() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_get_warnings($mysqli)
{
$return_mysqli_get_warnings = false;

// ========== MYSQLI_GET_WARNINGS - BEGIN
// ===== ABOUT
// Get result of SHOW WARNINGS
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::get_warnings(): mysqli_warning|false
// 
// Procedural style
// mysqli_get_warnings(mysqli $mysql): mysqli_warning|false
// ===== CODE
$return_mysqli_get_warnings = $mysqli->get_warnings(

// mysqli $mysql

); // Return
// mysqli_warning|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-02)
// URL: https://www.php.net/manual/en/mysqli.get-warnings.php
// ========== MYSQLI_GET_WARNINGS - END

// SYNTAX:
// mysqli_warning|false mysqli::get_warnings()

return $return_mysqli_get_warnings; // mysqli_warning|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_GET_WARNINGS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves information about the most recently executed query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::info() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_info($mysqli)
{
$return_mysqli_info = null;

// ========== MYSQLI_INFO - BEGIN
// ===== ABOUT
// Retrieves information about the most recently executed query
// ===== DESCRIPTION
// The mysqli_info() function returns a string providing information about the last query executed. The nature of this string is provided below:
// Possible mysqli_info return values
// Query type                             - Example result string
// INSERT INTO...SELECT...                - Records: 100 Duplicates: 0 Warnings: 0
// INSERT INTO...VALUES (...),(...),(...) - Records: 3 Duplicates: 0 Warnings: 0
// LOAD DATA INFILE ...                   - Records: 1 Deleted: 0 Skipped: 0 Warnings: 0
// ALTER TABLE ...                        - Records: 3 Duplicates: 0 Warnings: 0
// UPDATE ...                             - Rows matched: 40 Changed: 40 Warnings: 0
// Note: Queries which do not fall into one of the preceding formats are not supported. In these situations, mysqli_info() will return an empty string.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// ?string $mysqli->info;
// 
// Procedural style
// mysqli_info(mysqli $mysql): ?string
// ===== CODE
$return_mysqli_info = $mysqli->info(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// A character string representing additional information about the most recently executed query.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->info example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $mysqli->query("CREATE TEMPORARY TABLE t1 LIKE City");
// 
// /* INSERT INTO ... SELECT */
// $mysqli->query("INSERT INTO t1 SELECT * FROM City ORDER BY ID LIMIT 150");
// printf("%s\n", $mysqli->info);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// mysqli_query($link, "CREATE TEMPORARY TABLE t1 LIKE City");
// 
// /* INSERT INTO ... SELECT */
// mysqli_query($link, "INSERT INTO t1 SELECT * FROM City ORDER BY ID LIMIT 150");
// printf("%s\n", mysqli_info($link));
// [/php]
// The above examples will output:
// [result]
// Records: 150  Duplicates: 0  Warnings: 0
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.info.php
// ========== MYSQLI_INFO - END

// SYNTAX:
// string $mysqli::info()

return $return_mysqli_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INIT
// ============================== PUBLIC
// ============================== ABOUT
// Initializes MySQLi and returns an object for use with mysqli_real_connect().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::init() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_init($mysqli)
{
$return_mysqli_init = false;

// ========== MYSQLI_INIT - BEGIN
// ===== ABOUT
// Initializes MySQLi and returns an object for use with mysqli_real_connect()
// ===== DESCRIPTION
// Allocates or initializes a MYSQL object suitable for mysqli_options() and mysqli_real_connect().
// Note: Any subsequent calls to any mysqli function (except mysqli_options() and mysqli_ssl_set()) will fail until mysqli_real_connect() was called.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::init(): ?bool
// 
// Procedural style
// mysqli_init(): mysqli|false
// ===== CODE
$return_mysqli_init = $mysqli->init(

// This function has no parameters.

); // Return Values
// mysqli::init() returns null on success, or false on failure. mysqli_init() returns an object on success, or false on failure.
// 
// Changelog
// Version - Description
// 8.1.0   - The object-oriented style mysqli::init() method has been deprecated. Replace calls to parent::init() with parent::__construct().
// 
// [examples]
// Examples
// See mysqli_real_connect().
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.init.php
// ========== MYSQLI_INIT - END

// SYNTAX:
// bool mysqli::init()

return $return_mysqli_init; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INSERT_ID
// ============================== PUBLIC
// ============================== ABOUT
// Returns the value generated for an AUTO_INCREMENT column by the last query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::insert_id() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_insert_id($mysqli)
{
$return_mysqli_insert_id = 0;

// ========== MYSQLI_INSERT_ID - BEGIN
// ===== ABOUT
// Returns the value generated for an AUTO_INCREMENT column by the last query
// ===== DESCRIPTION
// Returns the ID generated by an INSERT or UPDATE query on a table with a column having the AUTO_INCREMENT attribute. In the case of a multiple-row INSERT statement, it returns the first automatically generated value that was successfully inserted.
// Performing an INSERT or UPDATE statement using the LAST_INSERT_ID() MySQL function will also modify the value returned by mysqli_insert_id(). If LAST_INSERT_ID(expr) was used to generate the value of AUTO_INCREMENT, it returns the value of the last expr instead of the generated AUTO_INCREMENT value.
// Returns 0 if the previous statement did not change an AUTO_INCREMENT value. mysqli_insert_id() must be called immediately after the statement that generated the value.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int|string $mysqli->insert_id;
// 
// Procedural style
// mysqli_insert_id(mysqli $mysql): int|string
// ===== CODE
$return_mysqli_insert_id = $mysqli->insert_id(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// The value of the AUTO_INCREMENT field that was updated by the previous query. Returns zero if there was no previous query on the connection or if the query did not update an AUTO_INCREMENT value.
// Only statements issued using the current connection affect the return value. The value is not affected by statements issued using other connections or clients.
// Note: If the number is greater than the maximum int value, it will be returned as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->insert_id example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $mysqli->query("CREATE TABLE myCity LIKE City");
// 
// $query = "INSERT INTO myCity VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
// $mysqli->query($query);
// 
// printf("New record has ID %d.\n", $mysqli->insert_id);
// 
// /* drop table */
// $mysqli->query("DROP TABLE myCity");
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// mysqli_query($link, "CREATE TABLE myCity LIKE City");
// 
// $query = "INSERT INTO myCity VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
// mysqli_query($link, $query);
// 
// printf("New record has ID %d.\n", mysqli_insert_id($link));
// 
// /* drop table */
// mysqli_query($link, "DROP TABLE myCity");
// [/php]
// The above examples will output:
// [result]
// New record has ID 1.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-27)
// URL: https://www.php.net/manual/en/mysqli.insert-id.php
// ========== MYSQLI_INSERT_ID - END

// SYNTAX:
// int|string $mysqli::insert_id()

return $return_mysqli_insert_id; // int|string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_INSERT_ID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_KILL
// ============================== PUBLIC
// ============================== ABOUT
// Asks the server to kill a MySQL thread.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::kill() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_kill($mysqli, $process_id)
{
$return_mysqli_kill = false;

// ========== MYSQLI_KILL - BEGIN
// ===== ABOUT
// Asks the server to kill a MySQL thread
// ===== DESCRIPTION
// This function is used to ask the server to kill a MySQL thread specified by the process_id parameter. This value must be retrieved by calling the mysqli_thread_id() function.
// To stop a running query you should use the SQL command KILL QUERY processid.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::kill(int $process_id): bool
// 
// Procedural style
// mysqli_kill(mysqli $mysql, int $process_id): bool
// ===== CODE
$return_mysqli_kill = $mysqli->kill(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$process_id // int $process_id

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::kill() example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// // determine our thread id
// $thread_id = $mysqli->thread_id;
// 
// // Kill connection
// $mysqli->kill($thread_id);
// 
// // This should produce an error
// if (!$mysqli->query("CREATE TABLE myCity LIKE City")) {
//     printf("Error: %s\n", $mysqli->error);
//     exit;
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// // determine our thread id
// $thread_id = mysqli_thread_id($link);
// 
// // Kill connection
// mysqli_kill($link, $thread_id);
// 
// // This should produce an error
// if (!mysqli_query($link, "CREATE TABLE myCity LIKE City")) {
//     printf("Error: %s\n", mysqli_error($link));
//     exit;
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error: MySQL server has gone away
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/mysqli.kill.php
// ========== MYSQLI_KILL - END

// SYNTAX:
// bool mysqli::kill(int $process_id)

return $return_mysqli_kill; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_KILL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_MORE_RESULTS
// ============================== PUBLIC
// ============================== ABOUT
// Check if there are any more query results from a multi query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::more_results() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_more_results($mysqli)
{
$return_mysqli_more_results = false;

// ========== MYSQLI_MORE_RESULTS - BEGIN
// ===== ABOUT
// Check if there are any more query results from a multi query
// ===== DESCRIPTION
// Indicates if one or more result sets are available from a previous call to mysqli_multi_query().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::more_results(): bool
// 
// Procedural style
// mysqli_more_results(mysqli $mysql): bool
// ===== CODE
$return_mysqli_more_results = $mysqli->more_results(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns true if one or more result sets (including errors) are available from a previous call to mysqli_multi_query(), otherwise false.
// 
// [examples]
// Examples
// See mysqli_multi_query().
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.more-results.php
// ========== MYSQLI_MORE_RESULTS - END

// SYNTAX:
// bool mysqli::more_results()

return $return_mysqli_more_results; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_MORE_RESULTS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_MULTI_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Performs one or more queries on the database.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::multi_query() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_multi_query($mysqli, $query)
{
$return_mysqli_multi_query = false;

// ========== MYSQLI_MULTI_QUERY - BEGIN
// ===== ABOUT
// Performs one or more queries on the database
// ===== DESCRIPTION
// Executes one or multiple queries which are concatenated by a semicolon.
//  Warning:
//  Security warning: SQL injection
//  If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the mysqli_real_escape_string() function.
// Queries are sent asynchronously in a single call to the database, but the database processes them sequentially. mysqli_multi_query() waits for the first query to complete before returning control to PHP. The MySQL server will then process the next query in the sequence. Once the next result is ready, MySQL will wait for the next execution of mysqli_next_result() from PHP.
// It is recommended to use do-while to process multiple queries. The connection will be busy until all queries have completed and their results are fetched to PHP. No other statement can be issued on the same connection until all queries are processed. To proceed to the next query in the sequence, use mysqli_next_result(). If the next result is not ready yet, mysqli will wait for the response from the MySQL server. To check if there are more results, use mysqli_more_results().
// For queries which produce a result set, such as SELECT, SHOW, DESCRIBE or EXPLAIN, mysqli_use_result() or mysqli_store_result() can be used to retrieve the result set. For queries which do not produce a result set, the same functions can be used to retrieve information such as the number of affected rows.
// Tip: Executing CALL statements for stored procedures can produce multiple result sets. If the stored procedure contains SELECT statements, the result sets are returned in the order that they are produced as the procedure executes. In general, the caller cannot know how many result sets a procedure will return and must be prepared to retrieve multiple results. The final result from the procedure is a status result that includes no result set. The status indicates whether the procedure succeeded or an error occurred.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::multi_query(string $query): bool
// 
// Procedural style
// mysqli_multi_query(mysqli $mysql, string $query): bool
// ===== CODE
$return_mysqli_multi_query = $mysqli->multi_query(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$query // string query - A string containing the queries to be executed. Multiple queries must be separated by a semicolon.

); // Return Values
// Returns false if the first statement failed. To retrieve subsequent errors from other statements you have to call mysqli_next_result() first.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::multi_query() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT CURRENT_USER();";
// $query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";
// 
// // execute multi query
// $mysqli->multi_query($query);
// do {
//     /* store the result set in PHP */
//     if ($result = $mysqli->store_result()) {
//         while ($row = $result->fetch_row()) {
//             printf("%s\n", $row[0]);
//         }
//     }
//     // print divider
//     if ($mysqli->more_results()) {
//         printf("-----------------\n");
//     }
// } while ($mysqli->next_result());
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT CURRENT_USER();";
// $query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";
// 
// // execute multi query
// mysqli_multi_query($link, $query);
// do {
//     // store the result set in PHP
//     if ($result = mysqli_store_result($link)) {
//         while ($row = mysqli_fetch_row($result)) {
//             printf("%s\n", $row[0]);
//         }
//     }
//     // print divider
//     if (mysqli_more_results($link)) {
//         printf("-----------------\n");
//     }
// } while (mysqli_next_result($link));
// [/php]
// The above examples will output something similar to:
// [result]
// my_user@localhost
// -----------------
// Amersfoort
// Maastricht
// Dordrecht
// Leiden
// Haarlemmermeer
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.multi-query.php
// ========== MYSQLI_MULTI_QUERY - END

// SYNTAX:
// bool mysqli::multi_query(string $query)

return $return_mysqli_multi_query; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_MULTI_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_NEXT_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Prepare next result from multi_query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::next_result() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_next_result($mysqli)
{
$return_mysqli_next_result = false;

// ========== MYSQLI_NEXT_RESULT - BEGIN
// ===== ABOUT
// Prepare next result from multi_query
// ===== DESCRIPTION
// Prepares next result set from a previous call to mysqli_multi_query() which can be retrieved by mysqli_store_result() or mysqli_use_result().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::next_result(): bool
// 
// Procedural style
// mysqli_next_result(mysqli $mysql): bool
// ===== CODE
$return_mysqli_next_result = $mysqli->next_result(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns true on success or false on failure. Also returns false if the next statement resulted in an error, unlike mysqli_more_results().
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// See mysqli_multi_query().
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.next-result.php
// ========== MYSQLI_NEXT_RESULT - END

// SYNTAX:
// bool mysqli::next_result()

return $return_mysqli_next_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_NEXT_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_OPTIONS
// ============================== PUBLIC
// ============================== ABOUT
// Set options.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::options() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_options($mysqli, $option, $value)
{
$return_mysqli_options = false;

// ========== MYSQLI_OPTIONS - BEGIN
// ===== ABOUT
// Set options
// ===== DESCRIPTION
// Used to set extra connect options and affect behavior for a connection.
// This function may be called multiple times to set several options.
// mysqli_options() should be called after mysqli_init() and before mysqli_real_connect().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::options(int $option, string|int $value): bool
// 
// Procedural style
// mysqli_options(mysqli $mysql, int $option, string|int $value): bool
// ===== CODE
$return_mysqli_options = $mysqli->options(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$option, // int option - The option that you want to set. It can be one of the following values:
// Valid options
// Name                              - Description
// MYSQLI_OPT_CONNECT_TIMEOUT        - Connection timeout in seconds
// MYSQLI_OPT_READ_TIMEOUT           - Command execution result timeout in seconds. Available as of PHP 7.2.0.
// MYSQLI_OPT_LOCAL_INFILE           - Enable/disable use of LOAD LOCAL INFILE
// MYSQLI_INIT_COMMAND               - Command to execute after when connecting to MySQL server
// MYSQLI_SET_CHARSET_NAME           - The charset to be set as default.
// MYSQLI_READ_DEFAULT_FILE          - Read options from named option file instead of my.cnf Not supported by mysqlnd.
// MYSQLI_READ_DEFAULT_GROUP         - Read options from the named group from my.cnf or the file specified with MYSQL_READ_DEFAULT_FILE. Not supported by mysqlnd.
// MYSQLI_SERVER_PUBLIC_KEY          - RSA public key file used with the SHA-256 based authentication.
// MYSQLI_OPT_NET_CMD_BUFFER_SIZE    - The size of the internal command/network buffer. Only valid for mysqlnd.
// MYSQLI_OPT_NET_READ_BUFFER_SIZE   - Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.
// MYSQLI_OPT_INT_AND_FLOAT_NATIVE   - Convert integer and float columns back to PHP numbers when using non-prepared statements. Only valid for mysqlnd.
// MYSQLI_OPT_SSL_VERIFY_SERVER_CERT - Whether to verify server certificate or not.

$value // string|int value - The value for the option.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// See mysqli_real_connect().
// [/examples]
// 
// Notes
//  Note:
//  MySQLnd always assumes the server default charset. This charset is sent during connection hand-shake/authentication, which mysqlnd will use.
//  Libmysqlclient uses the default charset set in the my.cnf or by an explicit call to mysqli_options() prior to calling mysqli_real_connect(), but after mysqli_init().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.options.php
// ========== MYSQLI_OPTIONS - END

// SYNTAX:
// bool mysqli::options(int $option, string|int $value)

return $return_mysqli_options; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_OPTIONS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PING
// ============================== PUBLIC
// ============================== ABOUT
// Pings a server connection, or tries to reconnect if the connection has gone down.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::ping() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_ping($mysqli)
{
$return_mysqli_ping = false;

// ========== MYSQLI_PING - BEGIN
// ===== ABOUT
// Pings a server connection, or tries to reconnect if the connection has gone down
// ===== DESCRIPTION
// Checks whether the connection to the server is working. If it has gone down and global option mysqli.reconnect is enabled, an automatic reconnection is attempted.
// Note: The php.ini setting mysqli.reconnect is ignored by the mysqlnd driver, so automatic reconnection is never attempted.
// This function can be used by clients that remain idle for a long while, to check whether the server has closed the connection and reconnect if necessary.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::ping(): bool
// 
// Procedural style
// mysqli_ping(mysqli $mysql): bool
// ===== CODE
$return_mysqli_ping = $mysqli->ping(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::ping() example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }
// 
// // check if server is alive
// if ($mysqli->ping()) {
//     printf ("Our connection is ok!\n");
// } else {
//     printf ("Error: %s\n", $mysqli->error);
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// // check if server is alive
// if (mysqli_ping($link)) {
//     printf ("Our connection is ok!\n");
// } else {
//     printf ("Error: %s\n", mysqli_error($link));
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Our connection is ok!
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.ping.php
// ========== MYSQLI_PING - END

// SYNTAX:
// bool mysqli::ping()

return $return_mysqli_ping; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_POLL
// ============================== PUBLIC
// ============================== ABOUT
// Poll connections.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::poll() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_poll($mysqli, & $read, & $error, & $reject, $seconds, $microseconds = 0)
{
$return_mysqli_poll = false;

// ========== MYSQLI_POLL - BEGIN
// ===== ABOUT
// Poll connections
// ===== DESCRIPTION
// Poll connections. The method can be used as static.
// Note: Available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static mysqli::poll(
//    ?array &$read,
//    ?array &$error,
//    array &$reject,
//    int $seconds,
//    int $microseconds = 0
// ): int|false
// 
// Procedural style
// mysqli_poll(
//    ?array &$read,
//    ?array &$error,
//    array &$reject,
//    int $seconds,
//    int $microseconds = 0
// ): int|false
// ===== CODE
$return_mysqli_poll = $mysqli->poll(

$read, // array& read - List of connections to check for outstanding results that can be read.

$error, // array& error - List of connections on which an error occurred, for example, query failure or lost connection.

$reject, // array& reject - List of connections rejected because no asynchronous query has been run on for which the function could poll results.

$seconds, // int seconds - Maximum number of seconds to wait, must be non-negative.

$microseconds // int microseconds - Maximum number of microseconds to wait, must be non-negative.

); // Return Values
// Returns number of ready connections upon success, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 A mysqli_poll() example
// [php]
// $link1 = mysqli_connect();
// $link1->query("SELECT 'test'", MYSQLI_ASYNC);
// $all_links = array($link1);
// $processed = 0;
// do {
//     $links = $errors = $reject = array();
//     foreach ($all_links as $link) {
//         $links[] = $errors[] = $reject[] = $link;
//     }
//     if (!mysqli_poll($links, $errors, $reject, 1)) {
//         continue;
//     }
//     foreach ($links as $link) {
//         if ($result = $link->reap_async_query()) {
//             print_r($result->fetch_row());
//             if (is_object($result))
//                 mysqli_free_result($result);
//         } else die(sprintf("MySQLi Error: %s", mysqli_error($link)));
//         $processed++;
//     }
// } while ($processed < count($all_links));
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [0] => test
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.poll.php
// ========== MYSQLI_POLL - END

// SYNTAX:
// int|false mysqli::poll(array& $read, array& $error, array& $reject, int $seconds, int $microseconds = 0)

return $return_mysqli_poll; // int|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_POLL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Prepares an SQL statement for execution.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::prepare() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_prepare($mysqli, $query)
{
$return_mysqli_prepare = false;

// ========== MYSQLI_PREPARE - BEGIN
// ===== ABOUT
// Prepares an SQL statement for execution
// ===== DESCRIPTION
// Prepares the SQL query, and returns a statement handle to be used for further operations on the statement. The query must consist of a single SQL statement.
// The statement template can contain zero or more question mark (?) parameter markers⁠-also called placeholders. The parameter markers must be bound to application variables using mysqli_stmt_bind_param() before executing the statement.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::prepare(string $query): mysqli_stmt|false
// 
// Procedural style
// mysqli_prepare(mysqli $mysql, string $query): mysqli_stmt|false
// ===== CODE
$return_mysqli_prepare = $mysqli->prepare(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$query // string query - The query, as a string. It must consist of a single SQL statement.
// The SQL statement may contain zero or more parameter markers represented by question mark (?) characters at the appropriate positions.
// Note: The markers are legal only in certain places in SQL statements. For example, they are permitted in the VALUES() list of an INSERT statement (to specify column values for a row), or in a comparison with a column in a WHERE clause to specify a comparison value. However, they are not permitted for identifiers (such as table or column names).

); // Return Values
// mysqli_prepare() returns a statement object or false if an error occurred.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::prepare() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $city = "Amersfoort";
// 
// // create a prepared statement
// $stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?");
// 
// // bind parameters for markers
// $stmt->bind_param("s", $city);
// 
// // execute query
// $stmt->execute();
// 
// // bind result variables
// $stmt->bind_result($district);
// 
// // fetch value
// $stmt->fetch();
// 
// printf("%s is in district %s\n", $city, $district);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $city = "Amersfoort";
// 
// // create a prepared statement
// $stmt = mysqli_prepare($link, "SELECT District FROM City WHERE Name=?");
// 
// // bind parameters for markers
// mysqli_stmt_bind_param($stmt, "s", $city);
// 
// // execute query
// mysqli_stmt_execute($stmt);
// 
// // bind result variables
// mysqli_stmt_bind_result($stmt, $district);
// 
// // fetch value
// mysqli_stmt_fetch($stmt);
// 
// printf("%s is in district %s\n", $city, $district);
// [/php]
// The above examples will output:
// [result]
// Amersfoort is in district Utrecht
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.prepare.php
// ========== MYSQLI_PREPARE - END

// SYNTAX:
// mysqli_stmt|false mysqli::prepare(string $query)

return $return_mysqli_prepare; // mysqli_stmt|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Performs a query on the database.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::query() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// MYSQLI_STORE_RESULT - mysqli::query()
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_query($mysqli, $query, $result_mode = MYSQLI_STORE_RESULT)
{
$return_mysqli_query = false;

// ========== MYSQLI_QUERY - BEGIN
// ===== ABOUT
// Performs a query on the database
// ===== DESCRIPTION
// Performs a query against the database.
//  Warning:
//  Security warning: SQL injection
//  If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the mysqli_real_escape_string() function.
// For non-DML queries (not INSERT, UPDATE or DELETE), this function is similar to calling mysqli_real_query() followed by either mysqli_use_result() or mysqli_store_result().
//  Note:
//  In the case where a statement is passed to mysqli_query() that is longer than max_allowed_packet of the server, the returned error codes are different depending on whether you are using MySQL Native Driver (mysqlnd) or MySQL Client Library (libmysqlclient). The behavior is as follows:
//  * mysqlnd on Linux returns an error code of 1153. The error message means got a packet bigger than max_allowed_packet bytes.
//  * mysqlnd on Windows returns an error code 2006. This error message means server has gone away.
//  * libmysqlclient on all platforms returns an error code 2006. This error message means server has gone away.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::query(string $query, int $result_mode = MYSQLI_STORE_RESULT): mysqli_result|bool
// 
// Procedural style
// mysqli_query(mysqli $mysql, string $query, int $result_mode = MYSQLI_STORE_RESULT): mysqli_result|bool
// ===== CODE
$return_mysqli_query = $mysqli->query(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$query, // string query - The query string.

$result_mode // int result_mode - The result mode can be one of 3 constants indicating how the result will be returned from the MySQL server.
// MYSQLI_STORE_RESULT (default)         - returns a mysqli_result object with buffered result set.
// MYSQLI_USE_RESULT                     - returns a mysqli_result object with unbuffered result set. As long as there are pending records waiting to be fetched, the connection line will be busy and all subsequent calls will return error Commands out of sync. To avoid the error all records must be fetched from the server or the result set must be discarded by calling mysqli_free_result().
// MYSQLI_ASYNC (available with mysqlnd) - the query is performed asynchronously and no result set is immediately returned. mysqli_poll() is then used to get results from such queries. Used in combination with either MYSQLI_STORE_RESULT or MYSQLI_USE_RESULT constant.

); // Return Values
// Returns false on failure. For successful queries which produce a result set, such as SELECT, SHOW, DESCRIBE or EXPLAIN, mysqli_query() will return a mysqli_result object. For other successful queries, mysqli_query() will return true.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::query() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // Create table doesn't return a resultset
// $mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City");
// printf("Table myCity successfully created.\n");
// 
// // Select queries return a resultset
// $result = $mysqli->query("SELECT Name FROM City LIMIT 10");
// printf("Select returned %d rows.\n", $result->num_rows);
// 
// // If we have to retrieve large amount of data we use MYSQLI_USE_RESULT
// $result = $mysqli->query("SELECT * FROM City", MYSQLI_USE_RESULT);
// 
// // Note, that we can't execute any functions which interact with the
// // server until all records have been fully retrieved or the result
// // set was closed. All calls will return an 'out of sync' error
// $mysqli->query("SET @a:='this will not work'");
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // Create table doesn't return a resultset
// mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City");
// printf("Table myCity successfully created.\n");
// 
// // Select queries return a resultset
// $result = mysqli_query($link, "SELECT Name FROM City LIMIT 10");
// printf("Select returned %d rows.\n", mysqli_num_rows($result));
// 
// // If we have to retrieve large amount of data we use MYSQLI_USE_RESULT
// $result = mysqli_query($link, "SELECT * FROM City", MYSQLI_USE_RESULT);
// 
// // Note, that we can't execute any functions which interact with the
// // server until all records have been fully retrieved or the result
// // set was closed. All calls will return an 'out of sync' error
// mysqli_query($link, "SET @a:='this will not work'");
// [/php]
// The above examples will output something similar to:
// [result]
// Table myCity successfully created.
// Select returned 10 rows.
// 
// Fatal error: Uncaught mysqli_sql_exception: Commands out of sync; you can't run this command now in...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.query.php
// ========== MYSQLI_QUERY - END

// SYNTAX:
// mysqli_result|bool mysqli::query(string $query, int $result_mode = MYSQLI_STORE_RESULT)

return $return_mysqli_query; // mysqli_result|bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_CONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Opens a connection to a mysql server.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::real_connect() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_real_connect($mysqli, $hostname = null, $username = null, $password = null, $database = null, $port = null, $socket = null, $flags = 0)
{
$return_mysqli_real_connect = false;

// ========== MYSQLI_REAL_CONNECT - BEGIN
// ===== ABOUT
// Opens a connection to a mysql server
// ===== DESCRIPTION
// Establish a connection to a MySQL database engine.
// This function differs from mysqli_connect():
// * mysqli_real_connect() needs a valid object which has to be created by function mysqli_init().
// * With the mysqli_options() function you can set various options for connection.
// * There is a flags parameter.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::real_connect(
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null,
//    int $flags = 0
// ): bool
// 
// Procedural style
// mysqli_real_connect(
//    mysqli $mysql,
//    ?string $hostname = null,
//    ?string $username = null,
//    ?string $password = null,
//    ?string $database = null,
//    ?int $port = null,
//    ?string $socket = null,
//    int $flags = 0
// ): bool
// ===== CODE
$return_mysqli_real_connect = $mysqli->real_connect(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$hostname, // string hostname - Can be either a host name or an IP address. When passing null, the value is retrieved from mysqli.default_host. When possible, pipes will be used instead of the TCP/IP protocol. The TCP/IP protocol is used if a host name and port number are provided together e.g. localhost:3308.

$username, // string username - The MySQL username or null to assume the username based on the mysqli.default_user ini option.

$password, // string password - The MySQL password or null to assume the password based on the mysqli.default_pw ini option.

$database, // string database - The default database to be used when performing queries or null.

$port, // int port - The port number to attempt to connect to the MySQL server or null to assume the port based on the mysqli.default_port ini option.

$socket, // string socket - The socket or named pipe that should be used or null to assume the socket based on the mysqli.default_socket ini option.
// Note: Specifying the socket parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the hostname parameter.

$flags // int flags - With the parameter flags you can set different connection options:
// Supported flags
// Name                                      - Description
// MYSQLI_CLIENT_COMPRESS                    - Use compression protocol
// MYSQLI_CLIENT_FOUND_ROWS                  - return number of matched rows, not the number of affected rows
// MYSQLI_CLIENT_IGNORE_SPACE                - Allow spaces after function names. Makes all function names reserved words.
// MYSQLI_CLIENT_INTERACTIVE                 - Allow interactive_timeout seconds (instead of wait_timeout seconds) of inactivity before closing the connection
// MYSQLI_CLIENT_SSL                         - 	Use SSL (encryption)
// MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT - Like MYSQLI_CLIENT_SSL, but disables validation of the provided SSL certificate. This is only for installations using MySQL Native Driver and MySQL 5.6 or later.
// Note: For security reasons the MULTI_STATEMENT flag is not supported in PHP. If you want to execute multiple queries use the mysqli_multi_query() function.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 7.4.0   - All parameters are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::real_connect() example
// Object-oriented style
// [php]
// 
// $mysqli = mysqli_init();
// if (!$mysqli) {
//     die('mysqli_init failed');
// }
// 
// if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
//     die('Setting MYSQLI_INIT_COMMAND failed');
// }
// 
// if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
//     die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
// }
// 
// if (!$mysqli->real_connect('localhost', 'my_user', 'my_password', 'my_db')) {
//     die('Connect Error (' . mysqli_connect_errno() . ') '
//             . mysqli_connect_error());
// }
// 
// echo 'Success... ' . $mysqli->host_info . "\n";
// 
// $mysqli->close();
// [/php]
// Object-oriented style when extending mysqli class
// [php]
// 
// class foo_mysqli extends mysqli {
//     public function __construct($host, $user, $pass, $db) {
//         parent::__construct();
// 
//         if (!parent::options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
//             die('Setting MYSQLI_INIT_COMMAND failed');
//         }
// 
//         if (!parent::options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
//             die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
//         }
// 
//         if (!parent::real_connect($host, $user, $pass, $db)) {
//             die('Connect Error (' . mysqli_connect_errno() . ') '
//                     . mysqli_connect_error());
//         }
//     }
// }
// 
// $db = new foo_mysqli('localhost', 'my_user', 'my_password', 'my_db');
// 
// echo 'Success... ' . $db->host_info . "\n";
// 
// $db->close();
// [/php]
// Procedural style
// [php]
// 
// $link = mysqli_init();
// if (!$link) {
//     die('mysqli_init failed');
// }
// 
// if (!mysqli_options($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
//     die('Setting MYSQLI_INIT_COMMAND failed');
// }
// 
// if (!mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
//     die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
// }
// 
// if (!mysqli_real_connect($link, 'localhost', 'my_user', 'my_password', 'my_db')) {
//     die('Connect Error (' . mysqli_connect_errno() . ') '
//             . mysqli_connect_error());
// }
// 
// echo 'Success... ' . mysqli_get_host_info($link) . "\n";
// 
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Success... MySQL host info: localhost via TCP/IP
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note:
//  MySQLnd always assumes the server default charset. This charset is sent during connection hand-shake/authentication, which mysqlnd will use.
//  Libmysqlclient uses the default charset set in the my.cnf or by an explicit call to mysqli_options() prior to calling mysqli_real_connect(), but after mysqli_init().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.real-connect.php
// ========== MYSQLI_REAL_CONNECT - END

// SYNTAX:
// bool mysqli::real_connect(string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null, int $flags = 0)

return $return_mysqli_real_connect; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_CONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_ESCAPE_STRING
// ============================== PUBLIC
// ============================== ABOUT
// Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::real_escape_string() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_real_escape_string($mysqli, $string)
{
$return_mysqli_real_escape_string = null;

// ========== MYSQLI_REAL_ESCAPE_STRING - BEGIN
// ===== ABOUT
// Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
// ===== DESCRIPTION
// This function is used to create a legal SQL string that you can use in an SQL statement. The given string is encoded to produce an escaped SQL string, taking into account the current character set of the connection.
//  Caution:
//  Security: the default character set
//  The character set must be set either at the server level, or with the API function mysqli_set_charset() for it to affect mysqli_real_escape_string(). See the concepts section on character sets for more information.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::real_escape_string(string $string): string
// 
// Procedural style
// mysqli_real_escape_string(mysqli $mysql, string $string): string
// ===== CODE
$return_mysqli_real_escape_string = $mysqli->real_escape_string(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$string // string string - The string to be escaped.
// Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and CTRL+Z.

); // Return Values
// Returns an escaped string.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::real_escape_string() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $city = "'s-Hertogenbosch";
// 
// // this query with escaped $city will work
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'",
//     $mysqli->real_escape_string($city));
// $result = $mysqli->query($query);
// printf("Select returned %d rows.\n", $result->num_rows);
// 
// // this query will fail, because we didn't escape $city
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
// $result = $mysqli->query($query);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $city = "'s-Hertogenbosch";
// 
// // this query with escaped $city will work
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'",
//     mysqli_real_escape_string($mysqli, $city));
// $result = mysqli_query($mysqli, $query);
// printf("Select returned %d rows.\n", mysqli_num_rows($result));
// 
// // this query will fail, because we didn't escape $city
// $query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
// $result = mysqli_query($mysqli, $query);
// [/php]
// The above examples will output something similar to:
// [result]
// Select returned 1 rows.
// 
// Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 's-Hertogenbosch'' at line 1 in...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.real-escape-string.php
// ========== MYSQLI_REAL_ESCAPE_STRING - END

// SYNTAX:
// string mysqli::real_escape_string(string $string)

return $return_mysqli_real_escape_string; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_ESCAPE_STRING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Execute an SQL query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::real_query() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_real_query($mysqli, $query)
{
$return_mysqli_real_query = false;

// ========== MYSQLI_REAL_QUERY - BEGIN
// ===== ABOUT
// Execute an SQL query
// ===== DESCRIPTION
// Executes a single query against the database whose result can then be retrieved or stored using the mysqli_store_result() or mysqli_use_result() functions.
//  Warning:
//  Security warning: SQL injection
//  If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the mysqli_real_escape_string() function.
// In order to determine if a given query should return a result set or not, see mysqli_field_count().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::real_query(string $query): bool
// 
// Procedural style
// mysqli_real_query(mysqli $mysql, string $query): bool
// ===== CODE
$return_mysqli_real_query = $mysqli->real_query(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$query // string query - The query string.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-05)
// URL: https://www.php.net/manual/en/mysqli.real-query.php
// ========== MYSQLI_REAL_QUERY - END

// SYNTAX:
// bool mysqli::real_query(string $query)

return $return_mysqli_real_query; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAL_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAP_ASYNC_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Get result from async query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::reap_async_query() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_reap_async_query($mysqli)
{
$return_mysqli_reap_async_query = false;

// ========== MYSQLI_REAP_ASYNC_QUERY - BEGIN
// ===== ABOUT
// Get result from async query
// ===== DESCRIPTION
// Get result from async query.
// Note: Available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::reap_async_query(): mysqli_result|bool
// 
// Procedural style
// mysqli_reap_async_query(mysqli $mysql): mysqli_result|bool
// ===== CODE
$return_mysqli_reap_async_query = $mysqli->reap_async_query(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns false on failure. For successful queries which produce a result set, such as SELECT, SHOW, DESCRIBE or EXPLAIN, mysqli_reap_async_query() will return a mysqli_result object. For other successful queries, mysqli_reap_async_query() will return true.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-05)
// URL: https://www.php.net/manual/en/mysqli.reap-async-query.php
// ========== MYSQLI_REAP_ASYNC_QUERY - END

// SYNTAX:
// mysqli_result|bool mysqli::reap_async_query()

return $return_mysqli_reap_async_query; // mysqli_result|bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REAP_ASYNC_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REFRESH
// ============================== PUBLIC
// ============================== ABOUT
// Refreshes.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::refresh() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_refresh($mysqli, $flags)
{
$return_mysqli_refresh = false;

// ========== MYSQLI_REFRESH - BEGIN
// ===== ABOUT
// Refreshes
// ===== DESCRIPTION
// Flushes tables or caches, or resets the replication server information.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::refresh(int $flags): bool
// 
// Procedural style
// mysqli_refresh(mysqli $mysql, int $flags): bool
// ===== CODE
$return_mysqli_refresh = $mysqli->refresh(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$flags // int flags - The options to refresh, using the MYSQLI_REFRESH_* constants as documented within the MySQLi constants documentation.
// See also the official > MySQL Refresh documentation.

); // Return Values
// true if the refresh was a success, otherwise false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.refresh.php
// ========== MYSQLI_REFRESH - END

// SYNTAX:
// bool mysqli::refresh(int $flags)

return $return_mysqli_refresh; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_REFRESH
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RELEASE_SAVEPOINT
// ============================== PUBLIC
// ============================== ABOUT
// Removes the named savepoint from the set of savepoints of the current transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::release_savepoint() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_release_savepoint($mysqli, $name)
{
$return_mysqli_release_savepoint = false;

// ========== MYSQLI_RELEASE_SAVEPOINT - BEGIN
// ===== ABOUT
// Removes the named savepoint from the set of savepoints of the current transaction
// ===== DESCRIPTION
// This function is identical to executing $mysqli->query("RELEASE SAVEPOINT `$name`");. This function does not trigger commit or rollback.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::release_savepoint(string $name): bool
// 
// Procedural style:
// mysqli_release_savepoint(mysqli $mysql, string $name): bool
// ===== CODE
$return_mysqli_release_savepoint = $mysqli->release_savepoint(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$name // string name - The identifier of the savepoint.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/mysqli.release-savepoint.php
// ========== MYSQLI_RELEASE_SAVEPOINT - END

// SYNTAX:
// bool mysqli::release_savepoint(string $name)

return $return_mysqli_release_savepoint; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RELEASE_SAVEPOINT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ROLLBACK
// ============================== PUBLIC
// ============================== ABOUT
// Rolls back current transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::rollback() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_rollback($mysqli, $flags = 0, $name = null)
{
$return_mysqli_rollback = false;

// ========== MYSQLI_ROLLBACK - BEGIN
// ===== ABOUT
// Rolls back current transaction
// ===== DESCRIPTION
// Rollbacks the current transaction for the database.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::rollback(int $flags = 0, ?string $name = null): bool
// 
// Procedural style
// mysqli_rollback(mysqli $mysql, int $flags = 0, ?string $name = null): bool
// ===== CODE
$return_mysqli_rollback = $mysqli->rollback(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$flags, // int flags - A bitmask of MYSQLI_TRANS_COR_* constants.

$name // string name - If provided then ROLLBACK/*name*/ is executed.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.0.0   - name is now nullable.
// 
// [examples]
// Examples
// See the mysqli::begin_transaction() example.
// [/examples]
// 
// Notes
// Note: This function does not work with non transactional table types (like MyISAM or ISAM).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli.rollback.php
// ========== MYSQLI_ROLLBACK - END

// SYNTAX:
// bool mysqli::rollback(int $flags = 0, string $name = null)

return $return_mysqli_rollback; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_ROLLBACK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SAVEPOINT
// ============================== PUBLIC
// ============================== ABOUT
// Set a named transaction savepoint.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::savepoint() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_savepoint($mysqli, $name)
{
$return_mysqli_savepoint = false;

// ========== MYSQLI_SAVEPOINT - BEGIN
// ===== ABOUT
// Set a named transaction savepoint
// ===== DESCRIPTION
// This function is identical to executing $mysqli->query("SAVEPOINT `$name`");
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::savepoint(string $name): bool
// 
// Procedural style:
// mysqli_savepoint(mysqli $mysql, string $name): bool
// ===== CODE
$return_mysqli_savepoint = $mysqli->savepoint(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$name // string name - The identifier of the savepoint.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/mysqli.savepoint.php
// ========== MYSQLI_SAVEPOINT - END

// SYNTAX:
// bool mysqli::savepoint(string $name)

return $return_mysqli_savepoint; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SAVEPOINT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SELECT_DB
// ============================== PUBLIC
// ============================== ABOUT
// Selects the default database for database queries.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::select_db() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_select_db($mysqli, $database)
{
$return_mysqli_select_db = false;

// ========== MYSQLI_SELECT_DB - BEGIN
// ===== ABOUT
// Selects the default database for database queries
// ===== DESCRIPTION
// Selects the default database to be used when performing queries against the database connection.
// Note: This function should only be used to change the default database for the connection. You can select the default database with 4th parameter in mysqli_connect().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::select_db(string $database): bool
// 
// Procedural style
// mysqli_select_db(mysqli $mysql, string $database): bool
// ===== CODE
$return_mysqli_select_db = $mysqli->select_db(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$database // string database - The database name.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::select_db() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "test");
// 
// // get the name of the current default database
// $result = $mysqli->query("SELECT DATABASE()");
// $row = $result->fetch_row();
// printf("Default database is %s.\n", $row[0]);
// 
// // change default database to "world"
// $mysqli->select_db("world");
// 
// // get the name of the current default database
// $result = $mysqli->query("SELECT DATABASE()");
// $row = $result->fetch_row();
// printf("Default database is %s.\n", $row[0]);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "test");
// 
// // get the name of the current default database
// $result = mysqli_query($link, "SELECT DATABASE()");
// $row = mysqli_fetch_row($result);
// printf("Default database is %s.\n", $row[0]);
// 
// // change default database to "world"
// mysqli_select_db($link, "world");
// 
// // get the name of the current default database
// $result = mysqli_query($link, "SELECT DATABASE()");
// $row = mysqli_fetch_row($result);
// printf("Default database is %s.\n", $row[0]);
// [/php]
// The above examples will output:
// [result]
// Default database is test.
// Default database is world.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.select-db.php
// ========== MYSQLI_SELECT_DB - END

// SYNTAX:
// bool mysqli::select_db(string $database)

return $return_mysqli_select_db; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SELECT_DB
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SET_CHARSET
// ============================== PUBLIC
// ============================== ABOUT
// Sets the client character set.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::set_charset() - PHP_5 >= PHP_5_0_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_set_charset($mysqli, $charset)
{
$return_mysqli_set_charset = false;

// ========== MYSQLI_SET_CHARSET - BEGIN
// ===== ABOUT
// Sets the client character set
// ===== DESCRIPTION
// Sets the character set to be used when sending data from and to the database server.
// ===== SUPPORTED
// PHP_5 >= PHP_5_0_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::set_charset(string $charset): bool
// 
// Procedural style
// mysqli_set_charset(mysqli $mysql, string $charset): bool
// ===== CODE
$return_mysqli_set_charset = $mysqli->set_charset(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$charset // string charset - The desired character set.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::set_charset() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "test");
// 
// printf("Initial character set: %s\n", $mysqli->character_set_name());
// 
// // change character set to utf8mb4
// $mysqli->set_charset("utf8mb4");
// 
// printf("Current character set: %s\n", $mysqli->character_set_name());
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect('localhost', 'my_user', 'my_password', 'test');
// 
// printf("Initial character set: %s\n", mysqli_character_set_name($link));
// 
// // change character set to utf8mb4
// mysqli_set_charset($link, "utf8mb4");
// 
// printf("Current character set: %s\n", mysqli_character_set_name($link));
// [/php]
// The above examples will output something similar to:
// [result]
// Initial character set: latin1
// Current character set: utf8mb4
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: To use this function on a Windows platform you need MySQL client library version 4.1.11 or above (for MySQL 5.0 you need 5.0.6 or above).
// Note: This is the preferred way to change the charset. Using mysqli_query() to set it (such as SET NAMES utf8) is not recommended. See the MySQL character set concepts section for more information.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.set-charset.php
// ========== MYSQLI_SET_CHARSET - END

// SYNTAX:
// bool mysqli::set_charset(string $charset)

return $return_mysqli_set_charset; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SET_CHARSET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQLSTATE
// ============================== PUBLIC
// ============================== ABOUT
// Returns the SQLSTATE error from previous MySQL operation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::sqlstate() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_sqlstate($mysqli)
{
$return_mysqli_sqlstate = null;

// ========== MYSQLI_SQLSTATE - BEGIN
// ===== ABOUT
// Returns the SQLSTATE error from previous MySQL operation
// ===== DESCRIPTION
// Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. '00000' means no error. The values are specified by ANSI SQL and ODBC. For a list of possible values, see > http://dev.mysql.com/doc/mysql/en/error-handling.html.
// Note: Note that not all MySQL errors are yet mapped to SQLSTATE's. The value HY000 (general error) is used for unmapped errors.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli->sqlstate;
// 
// Procedural style
// mysqli_sqlstate(mysqli $mysql): string
// ===== CODE
$return_mysqli_sqlstate = $mysqli->sqlstate(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. '00000' means no error.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->sqlstate example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // Table City already exists, so we should get an error
// try {
//     $mysqli->query("CREATE TABLE City (ID INT, Name VARCHAR(30))");
// } catch (mysqli_sql_exception) {
//     printf("Error - SQLSTATE %s.\n", $mysqli->sqlstate);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // Table City already exists, so we should get an error
// try {
//     mysqli_query($link, "CREATE TABLE City (ID INT, Name VARCHAR(30))");
// } catch (mysqli_sql_exception) {
//     printf("Error - SQLSTATE %s.\n", mysqli_sqlstate($link));
// }
// [/php]
// The above examples will output:
// [result]
// Error - SQLSTATE 42S01.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli.sqlstate.php
// ========== MYSQLI_SQLSTATE - END

// SYNTAX:
// string $mysqli::sqlstate()

return $return_mysqli_sqlstate; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQLSTATE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SSL_SET
// ============================== PUBLIC
// ============================== ABOUT
// Used for establishing secure connections using SSL.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::ssl_set() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_ssl_set($mysqli, $key, $certificate, $ca_certificate, $ca_path, $cipher_algos)
{
$return_mysqli_ssl_set = false;

// ========== MYSQLI_SSL_SET - BEGIN
// ===== ABOUT
// Used for establishing secure connections using SSL
// ===== DESCRIPTION
// Used for establishing secure connections using SSL. It must be called before mysqli_real_connect(). This function does nothing unless OpenSSL support is enabled.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::ssl_set(
//    ?string $key,
//    ?string $certificate,
//    ?string $ca_certificate,
//    ?string $ca_path,
//    ?string $cipher_algos
// ): true
// 
// Procedural style
// mysqli_ssl_set(
//    mysqli $mysql,
//    ?string $key,
//    ?string $certificate,
//    ?string $ca_certificate,
//    ?string $ca_path,
//    ?string $cipher_algos
// ): true
// ===== CODE
$return_mysqli_ssl_set = $mysqli->ssl_set(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$key, // string key - The path name to the key file.

$certificate, // string certificate - The path name to the certificate file.

$ca_certificate, // string ca_certificate - The path name to the certificate authority file.

$ca_path, // string ca_path - The pathname to a directory that contains trusted SSL CA certificates in PEM format.

$cipher_algos // string cipher_algos - A list of allowable ciphers to use for SSL encryption.

); // Return Values
// Always returns true. If SSL setup is incorrect mysqli_real_connect() will return an error when you attempt to connect.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.ssl-set.php
// ========== MYSQLI_SSL_SET - END

// SYNTAX:
// bool mysqli::ssl_set(string $key, string $certificate, string $ca_certificate, string $ca_path, string $cipher_algos)

return $return_mysqli_ssl_set; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SSL_SET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STAT
// ============================== PUBLIC
// ============================== ABOUT
// Gets the current system status.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::stat() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stat($mysqli)
{
$return_mysqli_stat = false;

// ========== MYSQLI_STAT - BEGIN
// ===== ABOUT
// Gets the current system status
// ===== DESCRIPTION
// mysqli_stat() returns a string containing information similar to that provided by the 'mysqladmin status' command. This includes uptime in seconds and the number of running threads, questions, reloads, and open tables.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::stat(): string|false
// 
// Procedural style
// mysqli_stat(mysqli $mysql): string|false
// ===== CODE
$return_mysqli_stat = $mysqli->stat(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// A string describing the server status. false if an error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::stat() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// printf("System status: %s\n", $mysqli->stat());
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// printf("System status: %s\n", mysqli_stat($link));
// [/php]
// The above examples will output:
// [result]
// System status: Uptime: 272  Threads: 1  Questions: 5340  Slow queries: 0
// Opens: 13  Flush tables: 1  Open tables: 0  Queries per second avg: 19.632
// Memory in use: 8496K  Max memory used: 8560K
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.stat.php
// ========== MYSQLI_STAT - END

// SYNTAX:
// string|false mysqli::stat()

return $return_mysqli_stat; // string|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STAT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_INIT
// ============================== PUBLIC
// ============================== ABOUT
// Initializes a statement and returns an object for use with mysqli_stmt_prepare.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::stmt_init() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_init($mysqli)
{
$return_mysqli_stmt_init = false;

// ========== MYSQLI_STMT_INIT - BEGIN
// ===== ABOUT
// Initializes a statement and returns an object for use with mysqli_stmt_prepare
// ===== DESCRIPTION
// Allocates and initializes a statement object suitable for mysqli_stmt_prepare().
// Note: Any subsequent calls to any mysqli_stmt function will fail until mysqli_stmt_prepare() was called.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::stmt_init(): mysqli_stmt|false
// 
// Procedural style
// mysqli_stmt_init(mysqli $mysql): mysqli_stmt|false
// ===== CODE
$return_mysqli_stmt_init = $mysqli->stmt_init(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns an object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli.stmt-init.php
// ========== MYSQLI_STMT_INIT - END

// SYNTAX:
// mysqli_stmt|false mysqli::stmt_init()

return $return_mysqli_stmt_init; // mysqli_stmt|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_INIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STORE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Transfers a result set from the last query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::store_result() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_store_result($mysqli, $mode = 0)
{
$return_mysqli_store_result = false;

// ========== MYSQLI_STORE_RESULT - BEGIN
// ===== ABOUT
// Transfers a result set from the last query
// ===== DESCRIPTION
// Transfers the result set from the last query on the database connection represented by the mysql parameter to be used with the mysqli_data_seek() function.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::store_result(int $mode = 0): mysqli_result|false
// 
// Procedural style
// mysqli_store_result(mysqli $mysql, int $mode = 0): mysqli_result|false
// ===== CODE
$return_mysqli_store_result = $mysqli->store_result(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$mode // int mode - The option that you want to set. As of PHP 8.1, this parameter has no effect. It can be one of the following values:
// 
// Valid options
// MYSQLI_STORE_RESULT_COPY_DATA - Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default, mysqlnd will use a reference logic to avoid copying and duplicating results held in memory. For certain result sets, for example, result sets with many small rows, the copy approach can reduce the overall memory usage because PHP variables holding results may be released earlier (available with mysqlnd only)

); // Return Values
// Returns a buffered result object or false if an error occurred.
// Note: mysqli_store_result() returns false in case the query didn't return a result set (if the query was, for example an INSERT statement). This function also returns false if the reading of the result set failed. You can check if you have got an error by checking if mysqli_error() doesn't return an empty string, if mysqli_errno() returns a non zero value, or if mysqli_field_count() returns a non zero value. Also possible reason for this function returning false after successful call to mysqli_query() can be too large result set (memory for it cannot be allocated). If mysqli_field_count() returns a non-zero value, the statement should have produced a non-empty result set.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// See mysqli_multi_query().
// [/examples]
// 
// Notes
// Note: Although it is always good practice to free the memory used by the result of a query using the mysqli_free_result() function, when transferring large result sets using the mysqli_store_result() this becomes particularly important.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.store-result.php
// ========== MYSQLI_STORE_RESULT - END

// SYNTAX:
// mysqli_result|false mysqli::store_result(int $mode = 0)

return $return_mysqli_store_result; // mysqli_result|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STORE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_THREAD_ID
// ============================== PUBLIC
// ============================== ABOUT
// Returns the thread ID for the current connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::thread_id() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_thread_id($mysqli)
{
$return_mysqli_thread_id = 0;

// ========== MYSQLI_THREAD_ID - BEGIN
// ===== ABOUT
// Returns the thread ID for the current connection
// ===== DESCRIPTION
// The mysqli_thread_id() function returns the thread ID for the current connection which can then be killed using the mysqli_kill() function. If the connection is lost and you reconnect with mysqli_ping(), the thread ID will be other. Therefore you should get the thread ID only when you need it.
//  Note:
//  The thread ID is assigned on a connection-by-connection basis. Hence, if the connection is broken and then re-established a new thread ID will be assigned.
//  To kill a running query you can use the SQL command KILL QUERY processid.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->thread_id;
// 
// Procedural style
// mysqli_thread_id(mysqli $mysql): int
// ===== CODE
$return_mysqli_thread_id = $mysqli->thread_id(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Returns the Thread ID for the current connection.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->thread_id example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// /* determine our thread id */
// $thread_id = $mysqli->thread_id;
// 
// /* Kill connection */
// $mysqli->kill($thread_id);
// 
// /* This should produce an error */
// if (!$mysqli->query("CREATE TABLE myCity LIKE City")) {
//     printf("Error: %s\n", $mysqli->error);
//     exit;
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// /* determine our thread id */
// $thread_id = mysqli_thread_id($link);
// 
// /* Kill connection */
// mysqli_kill($link, $thread_id);
// 
// /* This should produce an error */
// if (!mysqli_query($link, "CREATE TABLE myCity LIKE City")) {
//     printf("Error: %s\n", mysqli_error($link));
//     exit;
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error: MySQL server has gone away
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli.thread-id.php
// ========== MYSQLI_THREAD_ID - END

// SYNTAX:
// int $mysqli::thread_id()

return $return_mysqli_thread_id; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_THREAD_ID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_THREAD_SAFE
// ============================== PUBLIC
// ============================== ABOUT
// Returns whether thread safety is given or not.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::thread_safe() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_thread_safe($mysqli)
{
$return_mysqli_thread_safe = false;

// ========== MYSQLI_THREAD_SAFE - BEGIN
// ===== ABOUT
// Returns whether thread safety is given or not
// ===== DESCRIPTION
// Tells whether the client library is compiled as thread-safe.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::thread_safe(): bool
// 
// Procedural style
// mysqli_thread_safe(): bool
// ===== CODE
$return_mysqli_thread_safe = $mysqli->thread_safe(

// This function has no parameters.

); // Return Values
// true if the client library is thread-safe, otherwise false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-05)
// URL: https://www.php.net/manual/en/mysqli.thread-safe.php
// ========== MYSQLI_THREAD_SAFE - END

// SYNTAX:
// bool mysqli::thread_safe()

return $return_mysqli_thread_safe; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_THREAD_SAFE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_USE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Initiate a result set retrieval.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli::use_result() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_use_result($mysqli)
{
$return_mysqli_use_result = false;

// ========== MYSQLI_USE_RESULT - BEGIN
// ===== ABOUT
// Initiate a result set retrieval
// ===== DESCRIPTION
// Used to initiate the retrieval of a result set from the last query executed using the mysqli_real_query() function on the database connection.
// Either this or the mysqli_store_result() function must be called before the results of a query can be retrieved, and one or the other must be called to prevent the next query on that database connection from failing.
// Note: The mysqli_use_result() function does not transfer the entire result set from the database and hence cannot be used functions such as mysqli_data_seek() to move to a particular row within the set. To use this functionality, the result set must be stored using mysqli_store_result(). One should not use mysqli_use_result() if a lot of processing on the client side is performed, since this will tie up the server and prevent other threads from updating any tables from which the data is being fetched.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli::use_result(): mysqli_result|false
// 
// Procedural style
// mysqli_use_result(mysqli $mysql): mysqli_result|false
// ===== CODE
$return_mysqli_use_result = $mysqli->use_result(

// This function has no parameters.

// mysqli $mysql

); // Return Values
// Returns an unbuffered result object or false if an error occurred.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::use_result() example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query  = "SELECT CURRENT_USER();";
// $query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";
// 
// // execute multi query
// if ($mysqli->multi_query($query)) {
//     do {
//         // store first result set
//         if ($result = $mysqli->use_result()) {
//             while ($row = $result->fetch_row()) {
//                 printf("%s\n", $row[0]);
//             }
//             $result->close();
//         }
//         // print divider
//         if ($mysqli->more_results()) {
//             printf("-----------------\n");
//         }
//     } while ($mysqli->next_result());
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query  = "SELECT CURRENT_USER();";
// $query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";
// 
// // execute multi query
// if (mysqli_multi_query($link, $query)) {
//     do {
//         // store first result set
//         if ($result = mysqli_use_result($link)) {
//             while ($row = mysqli_fetch_row($result)) {
//                 printf("%s\n", $row[0]);
//             }
//             mysqli_free_result($result);
//         }
//         // print divider
//         if (mysqli_more_results($link)) {
//             printf("-----------------\n");
//         }
//     } while (mysqli_next_result($link));
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// my_user@localhost
// -----------------
// Amersfoort
// Maastricht
// Dordrecht
// Leiden
// Haarlemmermeer
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-23)
// URL: https://www.php.net/manual/en/mysqli.use-result.php
// ========== MYSQLI_USE_RESULT - END

// SYNTAX:
// mysqli_result|false mysqli::use_result()

return $return_mysqli_use_result; // mysqli_result|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_USE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of warnings from the last query for the given link.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli::warning_count() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_warning_count($mysqli)
{
$return_mysqli_warning_count = 0;

// ========== MYSQLI_WARNING_COUNT - BEGIN
// ===== ABOUT
// Returns the number of warnings from the last query for the given link
// ===== DESCRIPTION
// Returns the number of warnings from the last query in the connection.
// Note: For retrieving warning messages you can use the SQL command SHOW WARNINGS [limit row_count].
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli->warning_count;
// 
// Procedural style
// mysqli_warning_count(mysqli $mysql): int
// ===== CODE
$return_mysqli_warning_count = $mysqli->warning_count(

// mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

); // Return Values
// Number of warnings or zero if there are no warnings.
// 
// [examples]
// Examples
// [example]
// Example #1 $mysqli->warning_count example
// Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $mysqli->query("CREATE TABLE myCity LIKE City");
// 
// /* a remarkable city in Wales */
// $query = "INSERT INTO myCity (CountryCode, Name) VALUES('GBR',
//         'Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch')";
// 
// $mysqli->query($query);
// 
// if ($mysqli->warning_count) {
//     if ($result = $mysqli->query("SHOW WARNINGS")) {
//         $row = $result->fetch_row();
//         printf("%s (%d): %s\n", $row[0], $row[1], $row[2]);
//         $result->close();
//     }
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// mysqli_query($link, "CREATE TABLE myCity LIKE City");
// 
// /* a remarkable long city name in Wales */
// $query = "INSERT INTO myCity (CountryCode, Name) VALUES('GBR',
//         'Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch')";
// 
// mysqli_query($link, $query);
// 
// if (mysqli_warning_count($link)) {
//     if ($result = mysqli_query($link, "SHOW WARNINGS")) {
//         $row = mysqli_fetch_row($result);
//         printf("%s (%d): %s\n", $row[0], $row[1], $row[2]);
//         mysqli_free_result($result);
//     }
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Warning (1264): Data truncated for column 'Name' at row 1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli.warning-count.php
// ========== MYSQLI_WARNING_COUNT - END

// SYNTAX:
// int $mysqli::warning_count()

return $return_mysqli_warning_count; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_COUNT
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT
// ============================== PUBLIC
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_AFFECTED_ROWS - int|string php_database_vendor_mysql_mysqli_mysqli_stmt_affected_rows($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ATTR_GET - int php_database_vendor_mysql_mysqli_mysqli_stmt_attr_get(mysqli_stmt $mysqli_stmt, int $attribute)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ATTR_SET - bool php_database_vendor_mysql_mysqli_mysqli_stmt_attr_set(mysqli_stmt $mysqli_stmt, int $attribute, int $value)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_BIND_PARAM - bool php_database_vendor_mysql_mysqli_mysqli_stmt_bind_param(mysqli_stmt $mysqli_stmt, string $types, mixed& $var, mixed& $vars)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_BIND_RESULT - bool php_database_vendor_mysql_mysqli_mysqli_stmt_bind_result(mysqli_stmt $mysqli_stmt, mixed& $var, mixed& $vars)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_CLOSE - bool php_database_vendor_mysql_mysqli_mysqli_stmt_close(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_CONSTRUCT - mysqli_stmt php_database_vendor_mysql_mysqli_mysqli_stmt_construct(mysqli $mysql, string $query = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_DATA_SEEK - void php_database_vendor_mysql_mysqli_mysqli_stmt_data_seek(mysqli_stmt $mysqli_stmt, int $offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERRNO - int php_database_vendor_mysql_mysqli_mysqli_stmt_errno($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERROR_LIST - array php_database_vendor_mysql_mysqli_mysqli_stmt_error_list($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERROR - string php_database_vendor_mysql_mysqli_mysqli_stmt_error($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_EXECUTE - bool php_database_vendor_mysql_mysqli_mysqli_stmt_execute(mysqli_stmt $mysqli_stmt, array $params = null)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FETCH - bool php_database_vendor_mysql_mysqli_mysqli_stmt_fetch(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FIELD_COUNT - int php_database_vendor_mysql_mysqli_mysqli_stmt_field_count($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FREE_RESULT - void php_database_vendor_mysql_mysqli_mysqli_stmt_free_result(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_GET_RESULT - mysqli_result|false php_database_vendor_mysql_mysqli_mysqli_stmt_get_result(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_GET_WARNINGS - mysqli_warning|false php_database_vendor_mysql_mysqli_mysqli_stmt_get_warnings(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_INSERT_ID - int|string php_database_vendor_mysql_mysqli_mysqli_stmt_insert_id($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_MORE_RESULTS - bool php_database_vendor_mysql_mysqli_mysqli_stmt_more_results(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_NEXT_RESULT - bool php_database_vendor_mysql_mysqli_mysqli_stmt_next_result(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_NUM_ROWS - int|string php_database_vendor_mysql_mysqli_mysqli_stmt_num_rows($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_PARAM_COUNT - int php_database_vendor_mysql_mysqli_mysqli_stmt_param_count($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_PREPARE - bool php_database_vendor_mysql_mysqli_mysqli_stmt_prepare(mysqli_stmt $mysqli_stmt, string $query)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_RESET - bool php_database_vendor_mysql_mysqli_mysqli_stmt_reset(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_RESULT_METADATA - mysqli_result|false php_database_vendor_mysql_mysqli_mysqli_stmt_result_metadata(mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_SEND_LONG_DATA - bool php_database_vendor_mysql_mysqli_mysqli_stmt_send_long_data(mysqli_stmt $mysqli_stmt, int $param_num, string $data)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_SQLSTATE - string php_database_vendor_mysql_mysqli_mysqli_stmt_sqlstate($mysqli_stmt $mysqli_stmt)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_STORE_RESULT - bool php_database_vendor_mysql_mysqli_mysqli_stmt_store_result(mysqli_stmt $mysqli_stmt)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (28)
// $mysqli_stmt::affected_rows() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::attr_get() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::attr_set() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::bind_param() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::bind_result() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::close() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::__construct() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::data_seek() - PHP_5, PHP_7, PHP_8
// $mysqli_stmt::errno() - PHP_5, PHP_7, PHP_8
// $mysqli_stmt::error_list() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// $mysqli_stmt::error() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::execute() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::fetch() - PHP_5, PHP_7, PHP_8
// $mysqli_stmt::field_count() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::free_result() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::get_result() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli_stmt::get_warnings() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// $mysqli_stmt::insert_id() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::more_results() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli_stmt::next_result() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// $mysqli_stmt::num_rows() - PHP_5, PHP_7, PHP_8
// $mysqli_stmt::param_count() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::prepare() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::reset() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::result_metadata() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::send_long_data() - PHP_5, PHP_7, PHP_8
// $mysqli_stmt::sqlstate() - PHP_5, PHP_7, PHP_8
// mysqli_stmt::store_result() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (12)
// int
// string
// $mysqli_stmt - mysqli_stmt
// mysqli_stmt - PHP_5, PHP_7, PHP_8
// bool
// mixed
// mysqli - PHP_5, PHP_7, PHP_8
// void
// array
// mysqli_result - PHP_5, PHP_7, PHP_8
// false
// mysqli_warning - PHP_5, PHP_7, PHP_8
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_AFFECTED_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Returns the total number of rows changed, deleted, inserted, or matched by the last statement executed.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::affected_rows() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_affected_rows($mysqli_stmt)
{
$return_mysqli_stmt_affected_rows = 0;

// ========== MYSQLI_STMT_AFFECTED_ROWS - BEGIN
// ===== ABOUT
// Returns the total number of rows changed, deleted, inserted, or matched by the last statement executed
// ===== DESCRIPTION
// Returns the number of rows affected by INSERT, UPDATE, or DELETE query. Works like mysqli_stmt_num_rows() for SELECT statements.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int|string $mysqli_stmt->affected_rows;
// 
// Procedural style
// mysqli_stmt_affected_rows(mysqli_stmt $statement): int|string
// ===== CODE
$return_mysqli_stmt_affected_rows = $mysqli_stmt->affected_rows(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records were updated for an UPDATE statement, no rows matched the WHERE clause in the query or that no query has yet been executed. -1 indicates that the query returned an error or that, for a SELECT query, mysqli_stmt_affected_rows() was called prior to calling mysqli_stmt_store_result().
// Note: If the number of affected rows is greater than maximum PHP int value, the number of affected rows will be returned as a string value.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_stmt_affected_rows() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* create temp table */
// $mysqli->query("CREATE TEMPORARY TABLE myCountry LIKE Country");
// 
// $query = "INSERT INTO myCountry SELECT * FROM Country WHERE Code LIKE ?";
// 
// /* prepare statement */
// $stmt = $mysqli->prepare($query);
// 
// /* Bind variable for placeholder */
// $code = 'A%';
// $stmt->bind_param("s", $code);
// 
// /* execute statement */
// $stmt->execute();
// 
// printf("Rows inserted: %d\n", $stmt->affected_rows);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* create temp table */
// mysqli_query($link, "CREATE TEMPORARY TABLE myCountry LIKE Country");
// 
// $query = "INSERT INTO myCountry SELECT * FROM Country WHERE Code LIKE ?";
// 
// /* prepare statement */
// $stmt = mysqli_prepare($link, $query);
// 
// /* Bind variable for placeholder */
// $code = 'A%';
// mysqli_stmt_bind_param($stmt, "s", $code);
// 
// /* execute statement */
// mysqli_stmt_execute($stmt);
// 
// printf("Rows inserted: %d\n", mysqli_stmt_affected_rows($stmt));
// [/php]
// The above examples will output:
// [result]
// Rows inserted: 17
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli-stmt.affected-rows.php
// ========== MYSQLI_STMT_AFFECTED_ROWS - END

// SYNTAX:
// int|string $mysqli_stmt::affected_rows()

return $return_mysqli_stmt_affected_rows; // int|string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_AFFECTED_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ATTR_GET
// ============================== PUBLIC
// ============================== ABOUT
// Used to get the current value of a statement attribute.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::attr_get() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_attr_get($mysqli_stmt, $attribute)
{
$return_mysqli_stmt_attr_get = 0;

// ========== MYSQLI_STMT_ATTR_GET - BEGIN
// ===== ABOUT
// Used to get the current value of a statement attribute
// ===== DESCRIPTION
// Gets the current value of a statement attribute.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::attr_get(int $attribute): int
// 
// Procedural style
// mysqli_stmt_attr_get(mysqli_stmt $statement, int $attribute): int
// ===== CODE
$return_mysqli_stmt_attr_get = $mysqli_stmt->attr_get(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$attribute // int attribute - The attribute that you want to get.

); // Return Values
// Returns the value of the attribute.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-stmt.attr-get.php
// ========== MYSQLI_STMT_ATTR_GET - END

// SYNTAX:
// int mysqli_stmt::attr_get(int $attribute)

return $return_mysqli_stmt_attr_get; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ATTR_GET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ATTR_SET
// ============================== PUBLIC
// ============================== ABOUT
// Used to modify the behavior of a prepared statement
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::attr_set() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_attr_set($mysqli_stmt, $attribute, $value)
{
$return_mysqli_stmt_attr_set = false;

// ========== MYSQLI_STMT_ATTR_SET - BEGIN
// ===== ABOUT
// Used to modify the behavior of a prepared statement
// ===== DESCRIPTION
// Used to modify the behavior of a prepared statement. This function may be called multiple times to set several attributes.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::attr_set(int $attribute, int $value): bool
// 
// Procedural style
// mysqli_stmt_attr_set(mysqli_stmt $statement, int $attribute, int $value): bool
// ===== CODE
$return_mysqli_stmt_attr_set = $mysqli_stmt->attr_set(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$attribute, // int attribute - The attribute that you want to set. It can have one of the following values:
// Attribute values
// Character                          - Description
// MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH - Setting to true causes mysqli_stmt_store_result() to update the metadata MYSQL_FIELD->max_length value.
// MYSQLI_STMT_ATTR_CURSOR_TYPE       - Type of cursor to open for statement when mysqli_stmt_execute() is invoked. value can be MYSQLI_CURSOR_TYPE_NO_CURSOR (the default) or MYSQLI_CURSOR_TYPE_READ_ONLY.
// MYSQLI_STMT_ATTR_PREFETCH_ROWS     - Number of rows to fetch from server at a time when using a cursor. value can be in the range from 1 to the maximum value of unsigned long. The default is 1.
// If you use the MYSQLI_STMT_ATTR_CURSOR_TYPE option with MYSQLI_CURSOR_TYPE_READ_ONLY, a cursor is opened for the statement when you invoke mysqli_stmt_execute(). If there is already an open cursor from a previous mysqli_stmt_execute() call, it closes the cursor before opening a new one. mysqli_stmt_reset() also closes any open cursor before preparing the statement for re-execution. mysqli_stmt_free_result() closes any open cursor.
// If you open a cursor for a prepared statement, mysqli_stmt_store_result() is unnecessary.

$value // int value - The value to assign to the attribute.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-stmt.attr-set.php
// ========== MYSQLI_STMT_ATTR_SET - END

// SYNTAX:
// bool mysqli_stmt::attr_set(int $attribute, int $value)

return $return_mysqli_stmt_attr_set; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ATTR_SET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_BIND_PARAM
// ============================== PUBLIC
// ============================== ABOUT
// Binds variables to a prepared statement as parameters.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::bind_param() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_bind_param($mysqli_stmt, $types, & $var, & $vars)
{
$return_mysqli_stmt_bind_param = false;

// ========== MYSQLI_STMT_BIND_PARAM - BEGIN
// ===== ABOUT
// Binds variables to a prepared statement as parameters
// ===== DESCRIPTION
// Bind variables for the parameter markers in the SQL statement prepared by mysqli_prepare() or mysqli_stmt_prepare().
// Note: If data size of a variable exceeds max. allowed packet size (max_allowed_packet), you have to specify b in types and use mysqli_stmt_send_long_data() to send the data in packets.
// Note: Care must be taken when using mysqli_stmt_bind_param() in conjunction with call_user_func_array(). Note that mysqli_stmt_bind_param() requires parameters to be passed by reference, whereas call_user_func_array() can accept as a parameter a list of variables that can represent references or values.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::bind_param(string $types, mixed &$var, mixed &...$vars): bool
// 
// Procedural style
// mysqli_stmt_bind_param(
//    mysqli_stmt $statement,
//    string $types,
//    mixed &$var,
//    mixed &...$vars
// ): bool
// ===== CODE
$return_mysqli_stmt_bind_param = $mysqli_stmt->bind_param(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$types, // string types - A string that contains one or more characters which specify the types for the corresponding bind variables:
// 
// Type specification chars
// Character - Description
// i         - corresponding variable has type int
// d         - corresponding variable has type float
// s         - corresponding variable has type string
// b         - corresponding variable is a blob and will be sent in packets

$var, // mixed& var

$vars // mixed& vars - The number of variables and length of string types must match the parameters in the statement.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_stmt::bind_param() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');
// 
// $stmt = $mysqli->prepare("INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
// $stmt->bind_param('sssd', $code, $language, $official, $percent);
// 
// $code = 'DEU';
// $language = 'Bavarian';
// $official = "F";
// $percent = 11.2;
// 
// $stmt->execute();
// 
// printf("%d row inserted.\n", $stmt->affected_rows);
// 
// // Clean up table CountryLanguage
// $mysqli->query("DELETE FROM CountryLanguage WHERE Language='Bavarian'");
// printf("%d row deleted.\n", $mysqli->affected_rows);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');
// 
// $stmt = mysqli_prepare($link, "INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
// mysqli_stmt_bind_param($stmt, 'sssd', $code, $language, $official, $percent);
// 
// $code = 'DEU';
// $language = 'Bavarian';
// $official = "F";
// $percent = 11.2;
// 
// mysqli_stmt_execute($stmt);
// 
// printf("%d row inserted.\n", mysqli_stmt_affected_rows($stmt));
// 
// // Clean up table CountryLanguage
// mysqli_query($link, "DELETE FROM CountryLanguage WHERE Language='Bavarian'");
// printf("%d row deleted.\n", mysqli_affected_rows($link));
// [/php]
// The above examples will output:
// [result]
// 1 row inserted.
// 1 row deleted.
// [/result]
// [/example]
// [example]
// Example #2 Using ... to provide arguments
// The ... operator can be used to provide variable-length argument list, e.g. in a WHERE IN clause.
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');
// 
// $stmt = $mysqli->prepare("SELECT Language FROM CountryLanguage WHERE CountryCode IN (?, ?)");
// // Using ... to provide arguments
// $stmt->bind_param('ss', ...['DEU', 'POL']);
// $stmt->execute();
// $stmt->store_result();
// 
// printf("%d rows found.\n", $stmt->num_rows());
// [/php]
// The above examples will output:
// [result]
// 10 rows found.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli-stmt.bind-param.php
// ========== MYSQLI_STMT_BIND_PARAM - END

// SYNTAX:
// bool mysqli_stmt::bind_param(string $types, mixed& $var, mixed& $vars)

return $return_mysqli_stmt_bind_param; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_BIND_PARAM
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_BIND_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Binds variables to a prepared statement for result storage.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::bind_result() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_bind_result($mysqli_stmt, & $var, & $vars)
{
$return_mysqli_stmt_bind_result = false;

// ========== MYSQLI_STMT_BIND_RESULT - BEGIN
// ===== ABOUT
// Binds variables to a prepared statement for result storage
// ===== DESCRIPTION
// Binds columns in the result set to variables.
// When mysqli_stmt_fetch() is called to fetch data, the MySQL client/server protocol places the data for the bound columns into the specified variables var/vars.
// A column can be bound or rebound at any time, even after a result set has been partially retrieved. The new binding takes effect the next time mysqli_stmt_fetch() is called.
// Note: All columns must be bound after mysqli_stmt_execute() and prior to calling mysqli_stmt_fetch().
// Note: Depending on column types bound variables can silently change to the corresponding PHP type.
// Tip: This function is useful for simple results. To retrieve iterable result set, or fetch each row as an array or object, use mysqli_stmt_get_result().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::bind_result(mixed &$var, mixed &...$vars): bool
// 
// Procedural style
// mysqli_stmt_bind_result(mysqli_stmt $statement, mixed &$var, mixed &...$vars): bool
// ===== CODE
$return_mysqli_stmt_bind_result = $mysqli_stmt->bind_result(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$var, // mixed& var - The first variable to be bound.

$vars // mixed& vars - Further variables to be bound.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // prepare statement
// $stmt = $mysqli->prepare("SELECT Code, Name FROM Country ORDER BY Name LIMIT 5");
// $stmt->execute();
// 
// // bind variables to prepared statement
// $stmt->bind_result($col1, $col2);
// 
// // fetch values
// while ($stmt->fetch()) {
//     printf("%s %s\n", $col1, $col2);
// }
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // prepare statement
// $stmt = mysqli_prepare($link, "SELECT Code, Name FROM Country ORDER BY Name LIMIT 5");
// mysqli_stmt_execute($stmt);
// 
// // bind variables to prepared statement
// mysqli_stmt_bind_result($stmt, $col1, $col2);
// 
// // fetch values
// while (mysqli_stmt_fetch($stmt)) {
//     printf("%s %s\n", $col1, $col2);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// AFG Afghanistan
// ALB Albania
// DZA Algeria
// ASM American Samoa
// AND Andorra
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli-stmt.bind-result.php
// ========== MYSQLI_STMT_BIND_RESULT - END

// SYNTAX:
// bool mysqli_stmt::bind_result(mixed& $var, mixed& $vars)

return $return_mysqli_stmt_bind_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_BIND_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Closes a prepared statement.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::close() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_close($mysqli_stmt)
{
$return_mysqli_stmt_close = false;

// ========== MYSQLI_STMT_CLOSE - BEGIN
// ===== ABOUT
// Closes a prepared statement
// ===== DESCRIPTION
// Closes a prepared statement. mysqli_stmt_close() also deallocates the statement handle. If the current statement has pending or unread results, this function cancels them so that the next query can be executed.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::close(): true
// 
// Procedural style
// mysqli_stmt_close(mysqli_stmt $statement): true
// ===== CODE
$return_mysqli_stmt_close = $mysqli_stmt->close(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Always returns true.
// 
// Changelog
// Version - Description
// 8.0.0   - This function now always returns true. Previously it returned false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-stmt.close.php
// ========== MYSQLI_STMT_CLOSE - END

// SYNTAX:
// bool mysqli_stmt::close()

return $return_mysqli_stmt_close; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Constructs a new mysqli_stmt object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli_stmt::__construct() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_construct($mysql, $query = null)
{
$return_mysqli_stmt_construct = null;

// ========== MYSQLI_STMT_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new mysqli_stmt object
// ===== DESCRIPTION
// This method constructs a new mysqli_stmt object.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public mysqli_stmt::__construct(mysqli $mysql, ?string $query = null)
// ===== CODE
$return_mysqli_stmt_construct = new mysqli_stmt(

$mysql, // mysqli link - A valid mysqli object.

$query // string query - The query, as a string. If this parameter is null, then the constructor behaves identically to mysqli_stmt_init(), otherwise it behaves as per mysqli_prepare().

); // Return
// mysqli_stmt
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.0.0   - query is now nullable.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli-stmt.construct.php
// ========== MYSQLI_STMT_CONSTRUCT - END

// SYNTAX:
// mysqli_stmt mysqli_stmt::__construct(mysqli $mysql, string $query = null)

return $return_mysqli_stmt_construct; // mysqli_stmt
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_DATA_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Adjusts the result pointer to an arbitrary row in the buffered result.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::data_seek() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_data_seek($mysqli_stmt, $offset)
{

// ========== MYSQLI_STMT_DATA_SEEK - BEGIN
// ===== ABOUT
// Adjusts the result pointer to an arbitrary row in the buffered result
// ===== DESCRIPTION
// This function moves the result set pointer of the buffered result set to an arbitrary row specified by the offset parameter.
// This function works only on the buffered internal result set. mysqli_stmt_store_result() must be called prior to mysqli_stmt_data_seek().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::data_seek(int $offset): void
// 
// Procedural style
// mysqli_stmt_data_seek(mysqli_stmt $statement, int $offset): void
// ===== CODE
$mysqli_stmt->data_seek(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$offset // int offset - Must be between zero and the total number of rows minus one (0.. mysqli_stmt_num_rows() - 1).

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name";
// $stmt = $mysqli->prepare($query);
// $stmt->execute();
// 
// $stmt->bind_result($name, $code);
// 
// $stmt->store_result();
// 
// // seek to row no. 400
// $stmt->data_seek(399);
// 
// $stmt->fetch();
// 
// printf("City: %s  Countrycode: %s\n", $name, $code);
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name";
// $stmt = mysqli_prepare($link, $query);
// 
// mysqli_stmt_execute($stmt);
// 
// mysqli_stmt_bind_result($stmt, $name, $code);
// 
// mysqli_stmt_store_result($stmt);
// 
// // seek to row no. 400
// mysqli_stmt_data_seek($stmt, 399);
// 
// mysqli_stmt_fetch($stmt);
// 
// printf("City: %s  Countrycode: %s\n", $name, $code);
// [/php]
// The above examples will output:
// [result]
// City: Benin City  Countrycode: NGA
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli-stmt.data-seek.php
// ========== MYSQLI_STMT_DATA_SEEK - END

// SYNTAX:
// void mysqli_stmt::data_seek(int $offset)

// Return: void
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_DATA_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERRNO
// ============================== PUBLIC
// ============================== ABOUT
// Returns the error code for the most recent statement call.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::errno() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_errno($mysqli_stmt)
{
$return_mysqli_stmt_errno = 0;

// ========== MYSQLI_STMT_ERRNO - BEGIN
// ===== ABOUT
// Returns the error code for the most recent statement call
// ===== DESCRIPTION
// Returns the error code for the most recently invoked statement function that can succeed or fail.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_stmt->errno;
// 
// Procedural style
// mysqli_stmt_errno(mysqli_stmt $statement): int
// ===== CODE
$return_mysqli_stmt_errno = $mysqli_stmt->errno(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// An error code value. Zero means no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// /* Open a connection */
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $mysqli->query("CREATE TABLE myCountry LIKE Country");
// $mysqli->query("INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = $mysqli->prepare($query)) {
// 
//     /* drop table */
//     $mysqli->query("DROP TABLE myCountry");
// 
//     /* execute query */
//     $stmt->execute();
// 
//     printf("Error: %d.\n", $stmt->errno);
// 
//     /* close statement */
//     $stmt->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// /* Open a connection */
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// mysqli_query($link, "CREATE TABLE myCountry LIKE Country");
// mysqli_query($link, "INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = mysqli_prepare($link, $query)) {
// 
//     /* drop table */
//     mysqli_query($link, "DROP TABLE myCountry");
// 
//     /* execute query */
//     mysqli_stmt_execute($stmt);
// 
//     printf("Error: %d.\n", mysqli_stmt_errno($stmt));
// 
//     /* close statement */
//     mysqli_stmt_close($stmt);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error: 1146.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli-stmt.errno.php
// ========== MYSQLI_STMT_ERRNO - END

// SYNTAX:
// int $mysqli_stmt::errno()

return $return_mysqli_stmt_errno; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERRNO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERROR_LIST
// ============================== PUBLIC
// ============================== ABOUT
// Returns a list of errors from the last statement executed.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::error_list() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_error_list($mysqli_stmt)
{
$return_mysqli_stmt_error_list = null;

// ========== MYSQLI_STMT_ERROR_LIST - BEGIN
// ===== ABOUT
// Returns a list of errors from the last statement executed
// ===== DESCRIPTION
// Returns an array of errors for the most recently invoked statement function that can succeed or fail.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// array $mysqli_stmt->error_list;
// 
// Procedural style
// mysqli_stmt_error_list(mysqli_stmt $statement): array
// ===== CODE
$return_mysqli_stmt_error_list = $mysqli_stmt->error_list(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// A list of errors, each as an associative array containing the errno, error, and sqlstate.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// /* Open a connection */
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $mysqli->query("CREATE TABLE myCountry LIKE Country");
// $mysqli->query("INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = $mysqli->prepare($query)) {
// 
//     /* drop table */
//     $mysqli->query("DROP TABLE myCountry");
// 
//     /* execute query */
//     $stmt->execute();
//     
//     echo "Error:\n";
//     print_r($stmt->error_list);
// 
//     /* close statement */
//     $stmt->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// /* Open a connection */
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// mysqli_query($link, "CREATE TABLE myCountry LIKE Country");
// mysqli_query($link, "INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = mysqli_prepare($link, $query)) {
// 
//     /* drop table */
//     mysqli_query($link, "DROP TABLE myCountry");
// 
//     /* execute query */
//     mysqli_stmt_execute($stmt);
//     
//     echo "Error:\n";
//     print_r(mysql_stmt_error_list($stmt));
// 
//     /* close statement */
//     mysqli_stmt_close($stmt);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error:
// Array
// (
//     [0] => Array
//         (
//             [errno] => 1146
//             [sqlstate] => 42S02
//             [error] => Table 'world.myCountry' doesn't exist
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli-stmt.error-list.php
// ========== MYSQLI_STMT_ERROR_LIST - END

// SYNTAX:
// array $mysqli_stmt::error_list()

return $return_mysqli_stmt_error_list; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERROR_LIST
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Returns a string description for last statement error.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::error() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_error($mysqli_stmt)
{
$return_mysqli_stmt_error = null;

// ========== MYSQLI_STMT_ERROR - BEGIN
// ===== ABOUT
// Returns a string description for last statement error
// ===== DESCRIPTION
// Returns a string containing the error message for the most recently invoked statement function that can succeed or fail.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli_stmt->error;
// 
// Procedural style
// mysqli_stmt_error(mysqli_stmt $statement): string
// ===== CODE
$return_mysqli_stmt_error = $mysqli_stmt->error(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// A string that describes the error. An empty string if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// /* Open a connection */
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $mysqli->query("CREATE TABLE myCountry LIKE Country");
// $mysqli->query("INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = $mysqli->prepare($query)) {
// 
//     /* drop table */
//     $mysqli->query("DROP TABLE myCountry");
// 
//     /* execute query */
//     $stmt->execute();
// 
//     printf("Error: %s.\n", $stmt->error);
// 
//     /* close statement */
//     $stmt->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// /* Open a connection */
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// mysqli_query($link, "CREATE TABLE myCountry LIKE Country");
// mysqli_query($link, "INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = mysqli_prepare($link, $query)) {
// 
//     /* drop table */
//     mysqli_query($link, "DROP TABLE myCountry");
// 
//     /* execute query */
//     mysqli_stmt_execute($stmt);
// 
//     printf("Error: %s.\n", mysqli_stmt_error($stmt));
// 
//     /* close statement */
//     mysqli_stmt_close($stmt);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error: Table 'world.myCountry' doesn't exist.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli-stmt.error.php
// ========== MYSQLI_STMT_ERROR - END

// SYNTAX:
// string $mysqli_stmt::error()

return $return_mysqli_stmt_error; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_ERROR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_EXECUTE
// ============================== PUBLIC
// ============================== ABOUT
// Executes a prepared statement.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::execute() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_execute($mysqli_stmt, $params = null)
{
$return_mysqli_stmt_execute = false;

// ========== MYSQLI_STMT_EXECUTE - BEGIN
// ===== ABOUT
// Executes a prepared statement
// ===== DESCRIPTION
// Executes previously prepared statement. The statement must be successfully prepared prior to execution, using either the mysqli_prepare() or mysqli_stmt_prepare() function, or by passing the second argument to mysqli_stmt::__construct().
// If the statement is UPDATE, DELETE, or INSERT, the total number of affected rows can be determined by using the mysqli_stmt_affected_rows() function. If the query yields a result set, it can be fetched using mysqli_stmt_get_result() function or by fetching it row by row directly from the statement using mysqli_stmt_fetch() function.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::execute(?array $params = null): bool
// 
// Procedural style
// mysqli_stmt_execute(mysqli_stmt $statement, ?array $params = null): bool
// ===== CODE
$return_mysqli_stmt_execute = $mysqli_stmt->execute(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$params // array params - An optional list array with as many elements as there are bound parameters in the SQL statement being executed. Each value is treated as a string.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.1.0   - The optional params parameter has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 Execute a prepared statement with bound variables
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City");
// 
// // Prepare an insert statement
// $stmt = $mysqli->prepare("INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");
// 
// // Bind variables to parameters
// $stmt->bind_param("sss", $val1, $val2, $val3);
// 
// $val1 = 'Stuttgart';
// $val2 = 'DEU';
// $val3 = 'Baden-Wuerttemberg';
// 
// // Execute the statement
// $stmt->execute();
// 
// $val1 = 'Bordeaux';
// $val2 = 'FRA';
// $val3 = 'Aquitaine';
// 
// // Execute the statement
// $stmt->execute();
// 
// // Retrieve all rows from myCity
// $query = "SELECT Name, CountryCode, District FROM myCity";
// $result = $mysqli->query($query);
// while ($row = $result->fetch_row()) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City");
// 
// // Prepare an insert statement
// $stmt = mysqli_prepare($link, "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");
// 
// // Bind variables to parameters
// mysqli_stmt_bind_param($stmt, "sss", $val1, $val2, $val3);
// 
// $val1 = 'Stuttgart';
// $val2 = 'DEU';
// $val3 = 'Baden-Wuerttemberg';
// 
// // Execute the statement
// mysqli_stmt_execute($stmt);
// 
// $val1 = 'Bordeaux';
// $val2 = 'FRA';
// $val3 = 'Aquitaine';
// 
// // Execute the statement
// mysqli_stmt_execute($stmt);
// 
// // Retrieve all rows from myCity
// $query = "SELECT Name, CountryCode, District FROM myCity";
// $result = mysqli_query($link, $query);
// while ($row = mysqli_fetch_row($result)) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// The above examples will output:
// [result]
// Stuttgart (DEU,Baden-Wuerttemberg)
// Bordeaux (FRA,Aquitaine)
// [/result]
// [/example]
// [example]
// Example #2 Execute a prepared statement with an array of values
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');
// 
// $mysqli->query('CREATE TEMPORARY TABLE myCity LIKE City');
// 
// // Prepare an insert statement
// $stmt = $mysqli->prepare('INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');
// 
// // Execute the statement
// $stmt->execute(['Stuttgart', 'DEU', 'Baden-Wuerttemberg']);
// 
// // Retrieve all rows from myCity
// $query = 'SELECT Name, CountryCode, District FROM myCity';
// $result = $mysqli->query($query);
// while ($row = $result->fetch_row()) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');
// 
// mysqli_query($link, 'CREATE TEMPORARY TABLE myCity LIKE City');
// 
// // Prepare an insert statement
// $stmt = mysqli_prepare($link, 'INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)');
// 
// // Execute the statement
// mysqli_stmt_execute($stmt, ['Stuttgart', 'DEU', 'Baden-Wuerttemberg']);
// 
// // Retrieve all rows from myCity
// $query = 'SELECT Name, CountryCode, District FROM myCity';
// $result = mysqli_query($link, $query);
// while ($row = mysqli_fetch_row($result)) {
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// [/php]
// The above examples will output:
// [result]
// Stuttgart (DEU,Baden-Wuerttemberg)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-24)
// URL: https://www.php.net/manual/en/mysqli-stmt.execute.php
// ========== MYSQLI_STMT_EXECUTE - END

// SYNTAX:
// bool mysqli_stmt::execute(array $params = null)

return $return_mysqli_stmt_execute; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_EXECUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FETCH
// ============================== PUBLIC
// ============================== ABOUT
// Fetch results from a prepared statement into the bound variables.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::fetch() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_fetch($mysqli_stmt)
{
$return_mysqli_stmt_fetch = false;

// ========== MYSQLI_STMT_FETCH - BEGIN
// ===== ABOUT
// Fetch results from a prepared statement into the bound variables
// ===== DESCRIPTION
// Fetch the result from a prepared statement into the variables bound by mysqli_stmt_bind_result().
// Note: Note that all columns must be bound by the application before calling mysqli_stmt_fetch().
// Note: Data are transferred unbuffered without calling mysqli_stmt_store_result() which can decrease performance (but reduces memory cost).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::fetch(): ?bool
// 
// Procedural style
// mysqli_stmt_fetch(mysqli_stmt $statement): ?bool
// ===== CODE
$return_mysqli_stmt_fetch = $mysqli_stmt->fetch(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Return Values
// Value  - Description
// true   - Success. Data has been fetched
// false  - Error occurred
// null   - No more rows/data exists or data truncation occurred
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";
// 
// if ($stmt = $mysqli->prepare($query)) {
// 
//     // execute statement
//     $stmt->execute();
// 
//     // bind result variables
//     $stmt->bind_result($name, $code);
// 
//     // fetch values
//     while ($stmt->fetch()) {
//         printf ("%s (%s)\n", $name, $code);
//     }
// 
//     // close statement
//     $stmt->close();
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5";
// 
// if ($stmt = mysqli_prepare($link, $query)) {
// 
//     // execute statement
//     mysqli_stmt_execute($stmt);
// 
//     // bind result variables
//     mysqli_stmt_bind_result($stmt, $name, $code);
// 
//     // fetch values
//     while (mysqli_stmt_fetch($stmt)) {
//         printf ("%s (%s)\n", $name, $code);
//     }
// 
//     // close statement
//     mysqli_stmt_close($stmt);
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Rockford (USA)
// Tallahassee (USA)
// Salinas (USA)
// Santa Clarita (USA)
// Springfield (USA)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-stmt.fetch.php
// ========== MYSQLI_STMT_FETCH - END

// SYNTAX:
// bool mysqli_stmt::fetch()

return $return_mysqli_stmt_fetch; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FETCH
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FIELD_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of columns in the given statement.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::field_count() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_field_count($mysqli_stmt)
{
$return_mysqli_stmt_field_count = 0;

// ========== MYSQLI_STMT_FIELD_COUNT - BEGIN
// ===== ABOUT
// Returns the number of columns in the given statement
// ===== DESCRIPTION
// Returns the number of columns in the prepared statement.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_stmt->field_count;
// 
// Procedural style
// mysqli_stmt_field_count(mysqli_stmt $statement): int
// ===== CODE
$return_mysqli_stmt_field_count = $mysqli_stmt->field_count(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns an integer representing the number of columns.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $code = 'FR';
// 
// $stmt = $mysqli->prepare("SELECT Name FROM Country WHERE Code=?");
// $stmt->bind_param('s', $code);
// $stmt->execute();
// $row = $stmt->get_result()->fetch_row();
// for ($i = 0; $i < $stmt->field_count; $i++) {
//     printf("Value of column number %d is %s", $i, $row[$i]);
// }
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $code = 'FR';
// 
// $stmt = mysqli_prepare($mysqli, "SELECT Name FROM Country WHERE Code=?");
// mysqli_stmt_bind_param($stmt, 's', $code);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);
// $row = mysqli_fetch_row($result);
// for ($i = 0; $i < mysqli_stmt_field_count($stmt); $i++) {
//     printf("Value of column number %d is %s", $i, $row[$i]);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Value of column number 0 is France
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-28)
// URL: https://www.php.net/manual/en/mysqli-stmt.field-count.php
// ========== MYSQLI_STMT_FIELD_COUNT - END

// SYNTAX:
// int $mysqli_stmt::field_count()

return $return_mysqli_stmt_field_count; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FIELD_COUNT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FREE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Frees stored result memory for the given statement handle.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::free_result() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_free_result($mysqli_stmt)
{

// ========== MYSQLI_STMT_FREE_RESULT - BEGIN
// ===== ABOUT
// Frees stored result memory for the given statement handle
// ===== DESCRIPTION
// Frees the result memory associated with the statement, which was allocated by mysqli_stmt_store_result().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::free_result(): void
// 
// Procedural style
// mysqli_stmt_free_result(mysqli_stmt $statement): void
// ===== CODE
$mysqli_stmt->free_result(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-stmt.free-result.php
// ========== MYSQLI_STMT_FREE_RESULT - END

// SYNTAX:
// void mysqli_stmt::free_result()

// Return: void
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_FREE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_GET_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Gets a result set from a prepared statement as a mysqli_result object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::get_result() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_get_result($mysqli_stmt)
{
$return_mysqli_stmt_get_result = false;

// ========== MYSQLI_STMT_GET_RESULT - BEGIN
// ===== ABOUT
// Gets a result set from a prepared statement as a mysqli_result object
// ===== DESCRIPTION
// Retrieves a result set from a prepared statement as a mysqli_result object. The data will be fetched from the MySQL server to PHP. This method should be called only for queries which produce a result set.
// Note: Available only with mysqlnd.
// Note: This function cannot be used together with mysqli_stmt_store_result(). Both of these functions retrieve the full result set from the MySQL server.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::get_result(): mysqli_result|false
// 
// Procedural style
// mysqli_stmt_get_result(mysqli_stmt $statement): mysqli_result|false
// ===== CODE
$return_mysqli_stmt_get_result = $mysqli_stmt->get_result(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns false on failure. For successful queries which produce a result set, such as SELECT, SHOW, DESCRIBE or EXPLAIN, mysqli_stmt_get_result() will return a mysqli_result object. For other successful queries, mysqli_stmt_get_result() will return false. The mysqli_stmt_errno() function can be used to distinguish between the two reasons for false; due to a bug, prior to PHP 7.4.13, mysqli_errno() had to be used for this purpose.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, Population, Continent FROM Country WHERE Continent=? ORDER BY Name LIMIT 1";
// 
// $stmt = $mysqli->prepare($query);
// $stmt->bind_param("s", $continent);
// 
// $continentList = array('Europe', 'Africa', 'Asia', 'North America');
// 
// foreach ($continentList as $continent) {
//     $stmt->execute();
//     $result = $stmt->get_result();
//     while ($row = $result->fetch_array(MYSQLI_NUM)) {
//         foreach ($row as $r) {
//             print "$r ";
//         }
//         print "\n";
//     }
// }
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, Population, Continent FROM Country WHERE Continent=? ORDER BY Name LIMIT 1";
// 
// $stmt = mysqli_prepare($link, $query);
// mysqli_stmt_bind_param($stmt, "s", $continent);
// 
// $continentList= array('Europe', 'Africa', 'Asia', 'North America');
// 
// foreach ($continentList as $continent) {
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
//         foreach ($row as $r) {
//             print "$r ";
//         }
//         print "\n";
//     }
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Albania 3401200 Europe 
// Algeria 31471000 Africa 
// Afghanistan 22720000 Asia 
// Anguilla 8000 North America 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-stmt.get-result.php
// ========== MYSQLI_STMT_GET_RESULT - END

// SYNTAX:
// mysqli_result|false mysqli_stmt::get_result()

return $return_mysqli_stmt_get_result; // mysqli_result|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_GET_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_GET_WARNINGS
// ============================== PUBLIC
// ============================== ABOUT
// Get result of SHOW WARNINGS.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::get_warnings() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_get_warnings($mysqli_stmt)
{
$return_mysqli_stmt_get_warnings = false;

// ========== MYSQLI_STMT_GET_WARNINGS - BEGIN
// ===== ABOUT
// Get result of SHOW WARNINGS
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::get_warnings(): mysqli_warning|false
// 
// Procedural style
// mysqli_stmt_get_warnings(mysqli_stmt $statement): mysqli_warning|false
// ===== CODE
$return_mysqli_stmt_get_warnings = $mysqli_stmt->get_warnings(

// mysqli_stmt $statement

); // Return
// mysqli_warning|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-stmt.get-warnings.php
// ========== MYSQLI_STMT_GET_WARNINGS - END

// SYNTAX:
// mysqli_warning|false mysqli_stmt::get_warnings()

return $return_mysqli_stmt_get_warnings; // mysqli_warning|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_GET_WARNINGS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_INSERT_ID
// ============================== PUBLIC
// ============================== ABOUT
// Get the ID generated from the previous INSERT operation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::insert_id() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_insert_id($mysqli_stmt)
{
$return_mysqli_stmt_insert_id = 0;

// ========== MYSQLI_STMT_INSERT_ID - BEGIN
// ===== ABOUT
// Get the ID generated from the previous INSERT operation
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int|string $mysqli_stmt->insert_id;
// 
// Procedural style
// mysqli_stmt_insert_id(mysqli_stmt $statement): int|string
// ===== CODE
$return_mysqli_stmt_insert_id = $mysqli_stmt->insert_id(

// mysqli_stmt $statement

); // Return
// int|string
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-29)
// URL: https://www.php.net/manual/en/mysqli-stmt.insert-id.php
// ========== MYSQLI_STMT_INSERT_ID - END

// SYNTAX:
// int|string $mysqli_stmt::insert_id()

return $return_mysqli_stmt_insert_id; // int|string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_INSERT_ID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_MORE_RESULTS
// ============================== PUBLIC
// ============================== ABOUT
// Check if there are more query results from a multiple query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::more_results() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_more_results($mysqli_stmt)
{
$return_mysqli_stmt_more_results = false;

// ========== MYSQLI_STMT_MORE_RESULTS - BEGIN
// ===== ABOUT
// Check if there are more query results from a multiple query
// ===== DESCRIPTION
// Checks if there are more query results from a multiple query.
// Note: Available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::more_results(): bool
// 
// Procedural style:
// mysqli_stmt_more_results(mysqli_stmt $statement): bool
// ===== CODE
$return_mysqli_stmt_more_results = $mysqli_stmt->more_results(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns true if more results exist, otherwise false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-04)
// URL: https://www.php.net/manual/en/mysqli-stmt.more-results.php
// ========== MYSQLI_STMT_MORE_RESULTS - END

// SYNTAX:
// bool mysqli_stmt::more_results()

return $return_mysqli_stmt_more_results; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_MORE_RESULTS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_NEXT_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Reads the next result from a multiple query.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::next_result() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_next_result($mysqli_stmt)
{
$return_mysqli_stmt_next_result = false;

// ========== MYSQLI_STMT_NEXT_RESULT - BEGIN
// ===== ABOUT
// Reads the next result from a multiple query
// ===== DESCRIPTION
// Reads the next result from a multiple query.
// Note: Prior to PHP 8.1.0, available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::next_result(): bool
// 
// Procedural style:
// mysqli_stmt_next_result(mysqli_stmt $statement): bool
// ===== CODE
$return_mysqli_stmt_next_result = $mysqli_stmt->next_result(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// Changelog
// Version - Description
// 8.1.0   - Now also available when linking against libmysqlclient.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-stmt.next-result.php
// ========== MYSQLI_STMT_NEXT_RESULT - END

// SYNTAX:
// bool mysqli_stmt::next_result()

return $return_mysqli_stmt_next_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_NEXT_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_NUM_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of rows fetched from the server.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::num_rows() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_num_rows($mysqli_stmt)
{
$return_mysqli_stmt_num_rows = 0;

// ========== MYSQLI_STMT_NUM_ROWS - BEGIN
// ===== ABOUT
// Returns the number of rows fetched from the server
// ===== DESCRIPTION
// Returns the number of rows buffered in the statement. This function will only work after mysqli_stmt_store_result() is called to buffer the entire result set in the statement handle.
// This function returns 0 unless all rows have been fetched from the server.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int|string $mysqli_stmt->num_rows;
// public mysqli_stmt::num_rows(): int|string
// 
// Procedural style
// mysqli_stmt_num_rows(mysqli_stmt $statement): int|string
// ===== CODE
$return_mysqli_stmt_num_rows = $mysqli_stmt->num_rows(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// An int representing the number of buffered rows. Returns 0 in unbuffered mode unless all rows have been fetched from the server.
// Note: If the number of rows is greater than PHP_INT_MAX, the number will be returned as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
// $stmt = $mysqli->prepare($query);
// $stmt->execute();
// 
// /* store the result in an internal buffer */
// $stmt->store_result();
// 
// printf("Number of rows: %d.\n", $stmt->num_rows);
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
// $stmt = mysqli_prepare($link, $query);
// mysqli_stmt_execute($stmt);
// 
// /* store the result in an internal buffer */
// mysqli_stmt_store_result($stmt);
// 
// printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));
// [/php]
// The above examples will output:
// [result]
// Number of rows: 20.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-29)
// URL: https://www.php.net/manual/en/mysqli-stmt.num-rows.php
// ========== MYSQLI_STMT_NUM_ROWS - END

// SYNTAX:
// int|string $mysqli_stmt::num_rows()

return $return_mysqli_stmt_num_rows; // int|string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_NUM_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_PARAM_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of parameters for the given statement.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::param_count() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_param_count($mysqli_stmt)
{
$return_mysqli_stmt_param_count = 0;

// ========== MYSQLI_STMT_PARAM_COUNT - BEGIN
// ===== ABOUT
// Returns the number of parameters for the given statement
// ===== DESCRIPTION
// Returns the number of parameter markers present in the prepared statement.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_stmt->param_count;
// 
// Procedural style
// mysqli_stmt_param_count(mysqli_stmt $statement): int
// ===== CODE
$return_mysqli_stmt_param_count = $mysqli_stmt->param_count(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns an integer representing the number of parameters.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// if ($stmt = $mysqli->prepare("SELECT Name FROM Country WHERE Name=? OR Code=?")) {
// 
//     $marker = $stmt->param_count;
//     printf("Statement has %d markers.\n", $marker);
// 
//     /* close statement */
//     $stmt->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// if ($stmt = mysqli_prepare($link, "SELECT Name FROM Country WHERE Name=? OR Code=?")) {
// 
//     $marker = mysqli_stmt_param_count($stmt);
//     printf("Statement has %d markers.\n", $marker);
// 
//     /* close statement */
//     mysqli_stmt_close($stmt);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Statement has 2 markers.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-29)
// URL: https://www.php.net/manual/en/mysqli-stmt.param-count.php
// ========== MYSQLI_STMT_PARAM_COUNT - END

// SYNTAX:
// int $mysqli_stmt::param_count()

return $return_mysqli_stmt_param_count; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_PARAM_COUNT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Prepares an SQL statement for execution.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::prepare() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_prepare($mysqli_stmt, $query)
{
$return_mysqli_stmt_prepare = false;

// ========== MYSQLI_STMT_PREPARE - BEGIN
// ===== ABOUT
// Prepares an SQL statement for execution
// ===== DESCRIPTION
// Prepares a statement for execution. The query must consist of a single SQL statement.
// The statement template can contain zero or more question mark (?) parameter markers⁠-also called placeholders. The parameter markers must be bound to application variables using mysqli_stmt_bind_param() before executing the statement.
//  Note:
//  In the case where a statement is passed to mysqli_stmt_prepare() that is longer than max_allowed_packet of the server, the returned error codes are different depending on whether you are using MySQL Native Driver (mysqlnd) or MySQL Client Library (libmysqlclient). The behavior is as follows:
//  * mysqlnd on Linux returns an error code of 1153. The error message means got a packet bigger than max_allowed_packet bytes.
//  * mysqlnd on Windows returns an error code 2006. This error message means server has gone away.
//  * libmysqlclient on all platforms returns an error code 2006. This error message means server has gone away.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::prepare(string $query): bool
// 
// Procedural style
// mysqli_stmt_prepare(mysqli_stmt $statement, string $query): bool
// ===== CODE
$return_mysqli_stmt_prepare = $mysqli_stmt->prepare(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$query // string query - The query, as a string. It must consist of a single SQL statement.
// The SQL statement may contain zero or more parameter markers represented by question mark (?) characters at the appropriate positions.
// Note: The markers are legal only in certain places in SQL statements. For example, they are permitted in the VALUES() list of an INSERT statement (to specify column values for a row), or in a comparison with a column in a WHERE clause to specify a comparison value. However, they are not permitted for identifiers (such as table or column names).

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_stmt::prepare() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $city = "Amersfoort";
// 
// // create a prepared statement
// $stmt = $mysqli->stmt_init();
// $stmt->prepare("SELECT District FROM City WHERE Name=?");
// 
// // bind parameters for markers
// $stmt->bind_param("s", $city);
// 
// // execute query
// $stmt->execute();
// 
// // bind result variables
// $stmt->bind_result($district);
// 
// // fetch value
// $stmt->fetch();
// 
// printf("%s is in district %s\n", $city, $district);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $city = "Amersfoort";
// 
// // create a prepared statement
// $stmt = mysqli_stmt_init($link);
// mysqli_stmt_prepare($stmt, "SELECT District FROM City WHERE Name=?");
// 
// // bind parameters for markers
// mysqli_stmt_bind_param($stmt, "s", $city);
// 
// // execute query
// mysqli_stmt_execute($stmt);
// 
// // bind result variables
// mysqli_stmt_bind_result($stmt, $district);
// 
// // fetch value
// mysqli_stmt_fetch($stmt);
// 
// printf("%s is in district %s\n", $city, $district);
// [/php]
// The above examples will output:
// [result]
// Amersfoort is in district Utrecht
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-stmt.prepare.php
// ========== MYSQLI_STMT_PREPARE - END

// SYNTAX:
// bool mysqli_stmt::prepare(string $query)

return $return_mysqli_stmt_prepare; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_RESET
// ============================== PUBLIC
// ============================== ABOUT
// Resets a prepared statement.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::reset() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_reset($mysqli_stmt)
{
$return_mysqli_stmt_reset = false;

// ========== MYSQLI_STMT_RESET - BEGIN
// ===== ABOUT
// Resets a prepared statement
// ===== DESCRIPTION
// Resets a prepared statement on client and server to state after prepare.
// It resets the statement on the server, data sent using mysqli_stmt_send_long_data(), unbuffered result sets and current errors. It does not clear bindings or stored result sets. Stored result sets will be cleared when executing the prepared statement (or closing it).
// To prepare a statement with another query use function mysqli_stmt_prepare().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::reset(): bool
// 
// Procedural style
// mysqli_stmt_reset(mysqli_stmt $statement): bool
// ===== CODE
$return_mysqli_stmt_reset = $mysqli_stmt->reset(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-04)
// URL: https://www.php.net/manual/en/mysqli-stmt.reset.php
// ========== MYSQLI_STMT_RESET - END

// SYNTAX:
// bool mysqli_stmt::reset()

return $return_mysqli_stmt_reset; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_RESET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_RESULT_METADATA
// ============================== PUBLIC
// ============================== ABOUT
// Returns result set metadata from a prepared statement.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::result_metadata() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_result_metadata($mysqli_stmt)
{
$return_mysqli_stmt_result_metadata = false;

// ========== MYSQLI_STMT_RESULT_METADATA - BEGIN
// ===== ABOUT
// Returns result set metadata from a prepared statement
// ===== DESCRIPTION
// If a statement passed to mysqli_prepare() is one that produces a result set, mysqli_stmt_result_metadata() returns the result object that can be used to process the meta information such as total number of fields and individual field information.
//  Note:
//  This result set pointer can be passed as an argument to any of the field-based functions that process result set metadata, such as:
//  * mysqli_num_fields()
//  * mysqli_fetch_field()
//  * mysqli_fetch_field_direct()
//  * mysqli_fetch_fields()
//  * mysqli_field_count()
//  * mysqli_field_seek()
//  * mysqli_field_tell()
//  * mysqli_free_result()
// The result set structure should be freed when you are done with it, which you can do by passing it to mysqli_free_result()
// Note: The result set returned by mysqli_stmt_result_metadata() contains only metadata. It does not contain any row results. The rows are obtained by using the statement handle with mysqli_stmt_fetch().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::result_metadata(): mysqli_result|false
// 
// Procedural style
// mysqli_stmt_result_metadata(mysqli_stmt $statement): mysqli_result|false
// ===== CODE
$return_mysqli_stmt_result_metadata = $mysqli_stmt->result_metadata(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns a result object or false if an error occurred.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "test");
// 
// $mysqli->query("DROP TABLE IF EXISTS friends");
// $mysqli->query("CREATE TABLE friends (id int, name varchar(20))");
// 
// $mysqli->query("INSERT INTO friends VALUES (1,'Hartmut'), (2, 'Ulf')");
// 
// $stmt = $mysqli->prepare("SELECT id, name FROM friends");
// $stmt->execute();
// 
// // get resultset for metadata
// $result = $stmt->result_metadata();
// 
// // retrieve field information from metadata result set
// $field = $result->fetch_field();
// 
// printf("Fieldname: %s\n", $field->name);
// 
// // close resultset
// $result->close();
// 
// // close connection
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "test");
// 
// mysqli_query($link, "DROP TABLE IF EXISTS friends");
// mysqli_query($link, "CREATE TABLE friends (id int, name varchar(20))");
// 
// mysqli_query($link, "INSERT INTO friends VALUES (1,'Hartmut'), (2, 'Ulf')");
// 
// $stmt = mysqli_prepare($link, "SELECT id, name FROM friends");
// mysqli_stmt_execute($stmt);
// 
// // get resultset for metadata
// $result = mysqli_stmt_result_metadata($stmt);
// 
// // retrieve field information from metadata result set
// $field = mysqli_fetch_field($result);
// 
// printf("Fieldname: %s\n", $field->name);
// 
// // close resultset
// mysqli_free_result($result);
// 
// // close connection
// mysqli_close($link);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-stmt.result-metadata.php
// ========== MYSQLI_STMT_RESULT_METADATA - END

// SYNTAX:
// mysqli_result|false mysqli_stmt::result_metadata()

return $return_mysqli_stmt_result_metadata; // mysqli_result|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_RESULT_METADATA
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_SEND_LONG_DATA
// ============================== PUBLIC
// ============================== ABOUT
// Send data in blocks.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::send_long_data() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_send_long_data($mysqli_stmt, $param_num, $data)
{
$return_mysqli_stmt_send_long_data = false;

// ========== MYSQLI_STMT_SEND_LONG_DATA - BEGIN
// ===== ABOUT
// Send data in blocks
// ===== DESCRIPTION
// Allows to send parameter data to the server in pieces (or chunks), e.g. if the size of a blob exceeds the size of max_allowed_packet. This function can be called multiple times to send the parts of a character or binary data value for a column, which must be one of the TEXT or BLOB datatypes.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::send_long_data(int $param_num, string $data): bool
// 
// Procedural style
// mysqli_stmt_send_long_data(mysqli_stmt $statement, int $param_num, string $data): bool
// ===== CODE
$return_mysqli_stmt_send_long_data = $mysqli_stmt->send_long_data(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

$param_num, // int param_num - Indicates which parameter to associate the data with. Parameters are numbered beginning with 0.

$data // string data - A string containing data to be sent.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $stmt = $mysqli->prepare("INSERT INTO messages (message) VALUES (?)");
// $null = NULL;
// $stmt->bind_param("b", $null);
// $fp = fopen("messages.txt", "r");
// while (!feof($fp)) {
//     $stmt->send_long_data(0, fread($fp, 8192));
// }
// fclose($fp);
// $stmt->execute();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-stmt.send-long-data.php
// ========== MYSQLI_STMT_SEND_LONG_DATA - END

// SYNTAX:
// bool mysqli_stmt::send_long_data(int $param_num, string $data)

return $return_mysqli_stmt_send_long_data; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_SEND_LONG_DATA
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_SQLSTATE
// ============================== PUBLIC
// ============================== ABOUT
// Returns SQLSTATE error from previous statement operation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_stmt::sqlstate() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_sqlstate($mysqli_stmt)
{
$return_mysqli_stmt_sqlstate = null;

// ========== MYSQLI_STMT_SQLSTATE - BEGIN
// ===== ABOUT
// Returns SQLSTATE error from previous statement operation
// ===== DESCRIPTION
// Returns a string containing the SQLSTATE error code for the most recently invoked prepared statement function that can succeed or fail. The error code consists of five characters. '00000' means no error. The values are specified by ANSI SQL and ODBC. For a list of possible values, see > http://dev.mysql.com/doc/mysql/en/error-handling.html.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// string $mysqli_stmt->sqlstate;
// 
// Procedural style
// mysqli_stmt_sqlstate(mysqli_stmt $statement): string
// ===== CODE
$return_mysqli_stmt_sqlstate = $mysqli_stmt->sqlstate(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. '00000' means no error.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// /* Open a connection */
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $mysqli->query("CREATE TABLE myCountry LIKE Country");
// $mysqli->query("INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = $mysqli->prepare($query)) {
// 
//     /* drop table */
//     $mysqli->query("DROP TABLE myCountry");
// 
//     /* execute query */
//     $stmt->execute();
// 
//     printf("Error: %s.\n", $stmt->sqlstate);
// 
//     /* close statement */
//     $stmt->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// /* Open a connection */
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// mysqli_query($link, "CREATE TABLE myCountry LIKE Country");
// mysqli_query($link, "INSERT INTO myCountry SELECT * FROM Country");
// 
// 
// $query = "SELECT Name, Code FROM myCountry ORDER BY Name";
// if ($stmt = mysqli_prepare($link, $query)) {
// 
//     /* drop table */
//     mysqli_query($link, "DROP TABLE myCountry");
// 
//     /* execute query */
//     mysqli_stmt_execute($stmt);
// 
//     printf("Error: %s.\n", mysqli_stmt_sqlstate($stmt));
// 
//     /* close statement */
//     mysqli_stmt_close($stmt);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Error: 42S02.
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: Note that not all MySQL errors are yet mapped to SQLSTATE's. The value HY000 (general error) is used for unmapped errors.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-29)
// URL: https://www.php.net/manual/en/mysqli-stmt.sqlstate.php
// ========== MYSQLI_STMT_SQLSTATE - END

// SYNTAX:
// string $mysqli_stmt::sqlstate()

return $return_mysqli_stmt_sqlstate; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_SQLSTATE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_STORE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Stores a result set in an internal buffer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_stmt::store_result() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_stmt_store_result($mysqli_stmt)
{
$return_mysqli_stmt_store_result = false;

// ========== MYSQLI_STMT_STORE_RESULT - BEGIN
// ===== ABOUT
// Stores a result set in an internal buffer
// ===== DESCRIPTION
// This function should be called for queries that successfully produce a result set (e.g. SELECT, SHOW, DESCRIBE, EXPLAIN) only if the complete result set needs to be buffered in PHP. Each subsequent mysqli_stmt_fetch() call will return buffered data.
// Note: It is unnecessary to call mysqli_stmt_store_result() for other queries, but if you do, it will not harm or cause any notable performance loss in all cases. You can detect whether the query produced a result set by checking if mysqli_stmt_result_metadata() returns false.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_stmt::store_result(): bool
// 
// Procedural style
// mysqli_stmt_store_result(mysqli_stmt $statement): bool
// ===== CODE
$return_mysqli_stmt_store_result = $mysqli_stmt->store_result(

// mysqli_stmt statement - Procedural style only: A mysqli_stmt object returned by mysqli_stmt_init().

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
// $stmt = $mysqli->prepare($query);
// $stmt->execute();
// 
// // store the result in an internal buffer
// $stmt->store_result();
// 
// printf("Number of rows: %d.\n", $stmt->num_rows);
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20";
// $stmt = mysqli_prepare($link, $query);
// mysqli_stmt_execute($stmt);
// 
// // store the result in an internal buffer
// mysqli_stmt_store_result($stmt);
// 
// printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));
// [/php]
// The above examples will output:
// [result]
// Number of rows: 20.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-stmt.store-result.php
// ========== MYSQLI_STMT_STORE_RESULT - END

// SYNTAX:
// bool mysqli_stmt::store_result()

return $return_mysqli_stmt_store_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT_STORE_RESULT
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_STMT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT
// ============================== PUBLIC
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_CONSTRUCT - mysqli_result php_database_vendor_mysql_mysqli_mysqli_result_construct(mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_CURRENT_FIELD - int php_database_vendor_mysql_mysqli_mysqli_result_current_field($mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_DATA_SEEK - bool php_database_vendor_mysql_mysqli_mysqli_result_data_seek(mysqli_result $mysqli_result, int $offset)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ALL - array php_database_vendor_mysql_mysqli_mysqli_result_fetch_all(mysqli_result $mysqli_result, int $mode = MYSQLI_NUM)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_RESULT_MYSQLI_FETCH_ARRAY - array|null|false php_database_vendor_mysql_mysqli_result_mysqli_fetch_array(mysqli_result $mysqli_result, int $mode = MYSQLI_BOTH)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ASSOC - array|null|false php_database_vendor_mysql_mysqli_mysqli_result_fetch_assoc(mysqli_result $mysqli_result)
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_COLUMN - null|int|float|string|false php_database_vendor_mysql_mysqli_mysqli_result_fetch_column(mysqli_result $mysqli_result, int $column = 0)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELD_DIRECT - object|false php_database_vendor_mysql_mysqli_mysqli_result_fetch_field_direct(mysqli_result $mysqli_result, int $index)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELD - object|false php_database_vendor_mysql_mysqli_mysqli_result_fetch_field(mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELDS - array php_database_vendor_mysql_mysqli_mysqli_result_fetch_fields(mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_OBJECT - object|null|false php_database_vendor_mysql_mysqli_mysqli_result_fetch_object(mysqli_result $mysqli_result, string $class = "stdClass", array $constructor_args = array())
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ROW - array|null|false php_database_vendor_mysql_mysqli_mysqli_result_fetch_row(mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FIELD_COUNT - int php_database_vendor_mysql_mysqli_mysqli_result_field_count($mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FIELD_SEEK - bool php_database_vendor_mysql_mysqli_mysqli_result_field_seek(mysqli_result $mysqli_result, int $index)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FREE - void php_database_vendor_mysql_mysqli_mysqli_result_free(mysqli_result $mysqli_result)
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_GETITERATOR - Iterator php_database_vendor_mysql_mysqli_mysqli_result_getiterator(mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_LENGTHS - array php_database_vendor_mysql_mysqli_mysqli_result_lengths($mysqli_result $mysqli_result)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_NUM_ROWS - int|string php_database_vendor_mysql_mysqli_mysqli_result_num_rows($mysqli_result $mysqli_result)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (18)
// mysqli_result::__construct() - PHP_5, PHP_7, PHP_8
// $mysqli_result::current_field() - PHP_5, PHP_7, PHP_8
// mysqli_result::data_seek() - PHP_5, PHP_7, PHP_8
// mysqli_result::fetch_all() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// mysqli_result::fetch_array() - PHP_5, PHP_7, PHP_8
// mysqli_result::fetch_assoc() - PHP_5, PHP_7, PHP_8
// OFFLINE | mysqli_result::fetch_column() - PHP_8 >= PHP_8_1_0
// mysqli_result::fetch_field_direct() - PHP_5, PHP_7, PHP_8
// mysqli_result::fetch_field() - PHP_5, PHP_7, PHP_8
// mysqli_result::fetch_fields() - PHP_5, PHP_7, PHP_8
// mysqli_result::fetch_object() - PHP_5, PHP_7, PHP_8
// mysqli_result::fetch_row() - PHP_5, PHP_7, PHP_8
// $mysqli_result::field_count() - PHP_5, PHP_7, PHP_8
// mysqli_result::field_seek() - PHP_5, PHP_7, PHP_8
// mysqli_result::free() - PHP_5, PHP_7, PHP_8
// OFFLINE | mysqli_result::getIterator() - PHP_8
// $mysqli_result::lengths() - PHP_5, PHP_7, PHP_8
// $mysqli_result::num_rows() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (13)
// mysqli_result - PHP_5, PHP_7, PHP_8
// mysqli - PHP_5, PHP_7, PHP_8
// int
// $mysqli_result - mysqli_result
// bool
// array
// null
// false
// float
// string
// object
// void
// Iterator
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Constructs a mysqli_result object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli_result::__construct() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// MYSQLI_STORE_RESULT - mysqli_result::__construct()
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_construct($mysql, $result_mode = MYSQLI_STORE_RESULT)
{
$return_mysqli_result_construct = null;

// ========== MYSQLI_RESULT_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a mysqli_result object
// ===== DESCRIPTION
// This method constructs a new mysqli_result object.
// It can be used to create the mysqli_result object after calling the mysqli_real_query() or mysqli_multi_query() function. Constructing the object manually is equivalent to calling the mysqli_store_result() or mysqli_use_result() function.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public mysqli_result::__construct(mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT)
// ===== CODE
$return_mysqli_result_construct = new mysqli_result(

$mysql, // mysqli mysql - Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()

$result_mode // int result_mode - The result mode can be one of 2 constants indicating how the result will be returned from the MySQL server.
// MYSQLI_STORE_RESULT (default) - creates a mysqli_result object with buffered result set.
// MYSQLI_USE_RESULT - creates a mysqli_result object with unbuffered result set. As long as there are pending records waiting to be fetched, the connection line will be busy and all subsequent calls will return error Commands out of sync. To avoid the error all records must be fetched from the server or the result set must be discarded by calling mysqli_free_result(). The connection must remain open for the rows to be fetched.

); // Return
// mysqli_result
// 
// Errors/Exceptions
// If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated. If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
// 
// [examples]
// Examples
// [example]
// Example #1 Creation of a mysqli_result object
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* Select queries return a result set */
// $mysqli->real_query("SELECT Name FROM City LIMIT 10");
// 
// $result = new mysqli_result($mysqli);
// printf("Select returned %d rows.\n", $result->num_rows);
// [/php]
// The above examples will output something similar to:
// [result]
// Select returned 10 rows.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-result.construct.php
// ========== MYSQLI_RESULT_CONSTRUCT - END

// SYNTAX:
// mysqli_result mysqli_result::__construct(mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT)

return $return_mysqli_result_construct; // mysqli_result
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_CURRENT_FIELD
// ============================== PUBLIC
// ============================== ABOUT
// Get current field offset of a result pointer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_result::current_field() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_current_field($mysqli_result)
{
$return_mysqli_result_current_field = 0;

// ========== MYSQLI_RESULT_CURRENT_FIELD - BEGIN
// ===== ABOUT
// Get current field offset of a result pointer
// ===== DESCRIPTION
// Returns the position of the field cursor used for the last mysqli_fetch_field() call. This value can be used as an argument to mysqli_field_seek().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_result->current_field;
// 
// Procedural style
// mysqli_field_tell(mysqli_result $result): int
// ===== CODE
$return_mysqli_result_current_field = $mysqli_result->current_field(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// Returns current offset of field cursor.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";
// 
// if ($result = $mysqli->query($query)) {
// 
//     /* Get field information for all columns */
//     while ($finfo = $result->fetch_field()) {
// 
//         /* get fieldpointer offset */
//         $currentfield = $result->current_field;
// 
//         printf("Column %d:\n", $currentfield);
//         printf("Name:     %s\n", $finfo->name);
//         printf("Table:    %s\n", $finfo->table);
//         printf("max. Len: %d\n", $finfo->max_length);
//         printf("Flags:    %d\n", $finfo->flags);
//         printf("Type:     %d\n\n", $finfo->type);
//     }
//     $result->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";
// 
// if ($result = mysqli_query($link, $query)) {
// 
//     /* Get field information for all fields */
//     while ($finfo = mysqli_fetch_field($result)) {
// 
//         /* get fieldpointer offset */
//         $currentfield = mysqli_field_tell($result);
// 
//         printf("Column %d:\n", $currentfield);
//         printf("Name:     %s\n", $finfo->name);
//         printf("Table:    %s\n", $finfo->table);
//         printf("max. Len: %d\n", $finfo->max_length);
//         printf("Flags:    %d\n", $finfo->flags);
//         printf("Type:     %d\n\n", $finfo->type);
//     }
//     mysqli_free_result($result);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Column 1:
// Name:     Name
// Table:    Country
// max. Len: 11
// Flags:    1
// Type:     254
// 
// Column 2:
// Name:     SurfaceArea
// Table:    Country
// max. Len: 10
// Flags:    32769
// Type:     4
// 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-result.current-field.php
// ========== MYSQLI_RESULT_CURRENT_FIELD - END

// SYNTAX:
// int $mysqli_result::current_field()

return $return_mysqli_result_current_field; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_CURRENT_FIELD
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_DATA_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Adjusts the result pointer to an arbitrary row in the result.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::data_seek() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_data_seek($mysqli_result, $offset)
{
$return_mysqli_result_data_seek = false;

// ========== MYSQLI_RESULT_DATA_SEEK - BEGIN
// ===== ABOUT
// Adjusts the result pointer to an arbitrary row in the result
// ===== DESCRIPTION
// The mysqli_data_seek() function seeks to an arbitrary result pointer specified by the offset in the result set.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::data_seek(int $offset): bool
// 
// Procedural style
// mysqli_data_seek(mysqli_result $result, int $offset): bool
// ===== CODE
$return_mysqli_result_data_seek = $mysqli_result->data_seek(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$offset // int offset - The row offset. Must be between zero and the total number of rows minus one (0..mysqli_num_rows() - 1).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli::data_seek() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name";
// $result = $mysqli->query($query);
// 
// // Seek to row no. 401
// $result->data_seek(400);
// 
// // Fetch single row
// $row = $result->fetch_row();
// 
// printf("City: %s  Countrycode: %s\n", $row[0], $row[1]);
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name";
// 
// $result = mysqli_query($link, $query);
// 
// // Seek to row no. 401
// mysqli_data_seek($result, 400);
// 
// // Fetch single row
// $row = mysqli_fetch_row($result);
// 
// printf ("City: %s  Countrycode: %s\n", $row[0], $row[1]);
// [/php]
// The above examples will output:
// [result]
// City: Benin City  Countrycode: NGA
// [/result]
// [/example]
// [example]
// Example #2 Adjusting the result pointer when iterating
// This function can be useful when iterating over the result set to impose a custom order or rewind the result set when iterating multiple times.
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 15,4";
// $result = $mysqli->query($query);
// 
// // Iterate the result set in reverse order
// for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
//     $result->data_seek($row_no);
// 
//     // Fetch single row
//     $row = $result->fetch_row();
// 
//     printf("City: %s  Countrycode: %s\n", $row[0], $row[1]);
// }
// 
// // Reset pointer to the beginning of the result set
// $result->data_seek(0);
// 
// print "\n";
// 
// // Iterate the same result set again
// while ($row = $result->fetch_row()) {
//     printf("City: %s  Countrycode: %s\n", $row[0], $row[1]);
// }
// [/php]
// The above examples will output:
// [result]
// City: Acmbaro  Countrycode: MEX
// City: Abuja  Countrycode: NGA
// City: Abu Dhabi  Countrycode: ARE
// City: Abottabad  Countrycode: PAK
// 
// City: Abottabad  Countrycode: PAK
// City: Abu Dhabi  Countrycode: ARE
// City: Abuja  Countrycode: NGA
// City: Acmbaro  Countrycode: MEX
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function can only be used with buffered results attained from the use of the mysqli_store_result(), mysqli_query() or mysqli_stmt_get_result() functions.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.data-seek.php
// ========== MYSQLI_RESULT_DATA_SEEK - END

// SYNTAX:
// bool mysqli_result::data_seek(int $offset)

return $return_mysqli_result_data_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_DATA_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ALL
// ============================== PUBLIC
// ============================== ABOUT
// Fetch all result rows as an associative array, a numeric array, or both.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_all() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// MYSQLI_NUM - mysqli_result::fetch_all()
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_all($mysqli_result, $mode = MYSQLI_NUM)
{
$return_mysqli_result_fetch_all = null;

// ========== MYSQLI_RESULT_FETCH_ALL - BEGIN
// ===== ABOUT
// Fetch all result rows as an associative array, a numeric array, or both
// ===== DESCRIPTION
// Returns a two-dimensional array of all result rows as an associative array, a numeric array, or both.
// Note: Prior to PHP 8.1.0, available only with mysqlnd.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_all(int $mode = MYSQLI_NUM): array
// 
// Procedural style
// mysqli_fetch_all(mysqli_result $result, int $mode = MYSQLI_NUM): array
// ===== CODE
$return_mysqli_result_fetch_all = $mysqli_result->fetch_all(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$mode // int mode - This optional parameter is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH.

); // Return Values
// Returns an array of associative or numeric arrays holding result rows.
// 
// Changelog
// Version - Description
// 8.1.0   - Now also available when linking against libmysqlclient.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_result::fetch_all() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $result = $mysqli->query("SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");
// 
// $rows = $result->fetch_all(MYSQLI_ASSOC);
// foreach ($rows as $row) {
//     printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $result = mysqli_query($mysqli, "SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");
// 
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
// foreach ($rows as $row) {
//     printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// }
// [/php]
// The above examples will output:
// [result]
// Kabul (AFG)
// Qandahar (AFG)
// Herat (AFG)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-all.php
// ========== MYSQLI_RESULT_FETCH_ALL - END

// SYNTAX:
// array mysqli_result::fetch_all(int $mode = MYSQLI_NUM)

return $return_mysqli_result_fetch_all; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ALL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_RESULT_MYSQLI_FETCH_ARRAY
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row of a result set as an associative, a numeric array, or both.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_array() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// MYSQLI_BOTH - mysqli_result::fetch_array()
// ============================== CODE
function php_database_vendor_mysql_mysqli_result_mysqli_fetch_array($mysqli_result, $mode = MYSQLI_BOTH)
{
$return_mysqli_result_fetch_array = false;

// ========== MYSQLI_RESULT_FETCH_ARRAY - BEGIN
// ===== ABOUT
// Fetch the next row of a result set as an associative, a numeric array, or both
// ===== DESCRIPTION
// Fetches one row of data from the result set and returns it as an array. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.
// In addition to storing the data in the numeric indices of the result array, this function can also store the data in associative indices by using the field names of the result set as keys.
// If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, the numerically indexed version of the row must be used.
// Note: Field names returned by this function are case-sensitive.
// Note: This function sets NULL fields to the PHP null value.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_array(int $mode = MYSQLI_BOTH): array|null|false
// 
// Procedural style
// mysqli_fetch_array(mysqli_result $result, int $mode = MYSQLI_BOTH): array|null|false
// ===== CODE
$return_mysqli_result_fetch_array = $mysqli_result->fetch_array(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$mode // int mode - This optional parameter is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH.
// By using the MYSQLI_ASSOC constant this function will behave identically to the mysqli_fetch_assoc(), while MYSQLI_NUM will behave identically to the mysqli_fetch_row() function. The final option MYSQLI_BOTH will create a single array with the attributes of both.

); // Return Values
// Returns an array representing the fetched row, null if there are no more rows in the result set, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_result::fetch_array() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3";
// $result = $mysqli->query($query);
// 
// // numeric array
// $row = $result->fetch_array(MYSQLI_NUM);
// printf("%s (%s)\n", $row[0], $row[1]);
// 
// // associative array
// $row = $result->fetch_array(MYSQLI_ASSOC);
// printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// 
// // associative and numeric array
// $row = $result->fetch_array(MYSQLI_BOTH);
// printf("%s (%s)\n", $row[0], $row["CountryCode"]);
// [/php]
// [/example]
// [example]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER by ID LIMIT 3";
// $result = mysqli_query($mysqli, $query);
// 
// // numeric array
// $row = mysqli_fetch_array($result, MYSQLI_NUM);
// printf("%s (%s)\n", $row[0], $row[1]);
// 
// // associative array
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// 
// // associative and numeric array
// $row = mysqli_fetch_array($result, MYSQLI_BOTH);
// printf("%s (%s)\n", $row[0], $row["CountryCode"]);
// [/php]
// The above examples will output something similar to:
// [result]
// Kabul (AFG)
// Qandahar (AFG)
// Herat (AFG)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-array.php
// ========== MYSQLI_RESULT_FETCH_ARRAY - END

// SYNTAX:
// array|null|false mysqli_result::fetch_array(int $mode = MYSQLI_BOTH)

return $return_mysqli_result_fetch_array; // array|null|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_RESULT_MYSQLI_FETCH_ARRAY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ASSOC
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row of a result set as an associative array.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_assoc() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_assoc($mysqli_result)
{
$return_mysqli_result_fetch_assoc = false;

// ========== MYSQLI_RESULT_FETCH_ASSOC - BEGIN
// ===== ABOUT
// Fetch the next row of a result set as an associative array
// ===== DESCRIPTION
// Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.
// If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, mysqli_fetch_row() may be used to fetch the numerically indexed array, or aliases may be used in the SQL query select list to give columns different names.
// Note: Field names returned by this function are case-sensitive.
// Note: This function sets NULL fields to the PHP null value.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_assoc(): array|null|false
// 
// Procedural style
// mysqli_fetch_assoc(mysqli_result $result): array|null|false
// ===== CODE
$return_mysqli_result_fetch_assoc = $mysqli_result->fetch_assoc(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// Returns an associative array representing the fetched row, where each key in the array represents the name of one of the result set's columns, null if there are no more rows in the result set, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_result::fetch_assoc() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
// 
// $result = $mysqli->query($query);
// 
// // fetch associative array
// while ($row = $result->fetch_assoc()) {
//     printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
// 
// $result = mysqli_query($mysqli, $query);
// 
// // fetch associative array
// while ($row = mysqli_fetch_assoc($result)) {
//     printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Pueblo (USA)
// Arvada (USA)
// Cape Coral (USA)
// Green Bay (USA)
// Santa Clara (USA)
// [/result]
// [/example]
// [example]
// Example #2 Comparison of mysqli_result iterator and mysqli_result::fetch_assoc() usage
// mysqli_result can be iterated using foreach. The result set will always be iterated from the first row, regardless of the current position.
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = 'SELECT Name, CountryCode FROM City ORDER BY ID DESC';
// 
// // Using iterators
// $result = $mysqli->query($query);
// foreach ($result as $row) {
//     printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// }
// 
// echo "\n==================\n";
// 
// // Not using iterators
// $result = $mysqli->query($query);
// while ($row = $result->fetch_assoc()) {
//     printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
// }
// [/php]
// The above example will output something similar to:
// [result]
// Pueblo (USA)
// Arvada (USA)
// Cape Coral (USA)
// Green Bay (USA)
// Santa Clara (USA)
// 
// ==================
// Pueblo (USA)
// Arvada (USA)
// Cape Coral (USA)
// Green Bay (USA)
// Santa Clara (USA)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-assoc.php
// ========== MYSQLI_RESULT_FETCH_ASSOC - END

// SYNTAX:
// array|null|false mysqli_result::fetch_assoc()

return $return_mysqli_result_fetch_assoc; // array|null|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ASSOC
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_COLUMN
// ============================== OFFLINE
// ============================== ABOUT
// Fetch a single column from the next row of a result set.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_column() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_column($mysqli_result, $column = 0)
{
$return_mysqli_result_fetch_column = false;

// ========== MYSQLI_RESULT_FETCH_COLUMN - BEGIN
// ===== ABOUT
// Fetch a single column from the next row of a result set
// ===== DESCRIPTION
// Fetches one row of data from the result set and returns the 0-indexed column. Each subsequent call to this function will return the value from the next row within the result set, or false if there are no more rows.
// Note: This function sets NULL fields to the PHP null value.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_column(int $column = 0): null|int|float|string|false
// 
// Procedural style
// mysqli_fetch_column(mysqli_result $result, int $column = 0): null|int|float|string|false
// ===== CODE
$return_mysqli_result_fetch_column = $mysqli_result->fetch_column(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$column // int column - 0-indexed number of the column you wish to retrieve from the row. If no value is supplied, the first column will be returned.

); // Return Values
// Returns a single column from the next row of a result set or false if there are no more rows.
// Warning: There is no way to return another column from the same row if you use this function to retrieve data.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_result::fetch_column() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT CountryCode, Name FROM City ORDER BY ID DESC LIMIT 5";
// 
// $result = $mysqli->query($query);
// 
// // fetch a single value from the second column
// while ($Name = $result->fetch_column(1)) {
//     printf("%s\n", $Name);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT CountryCode, Name FROM City ORDER BY ID DESC LIMIT 5";
// 
// $result = mysqli_query($mysqli, $query);
// 
// // fetch a single value from the second column
// while ($Name = mysqli_fetch_column($result, 1)) {
//     printf("%s\n", $Name);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Rafah
// Nablus
// Jabaliya
// Hebron
// Khan Yunis
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-column.php
// ========== MYSQLI_RESULT_FETCH_COLUMN - END

// SYNTAX:
// null|int|float|string|false mysqli_result::fetch_column(int $column = 0)

return $return_mysqli_result_fetch_column; // null|int|float|string|false
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_COLUMN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELD_DIRECT
// ============================== PUBLIC
// ============================== ABOUT
// Fetch meta-data for a single field.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_field_direct() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_field_direct($mysqli_result, $index)
{
$return_mysqli_result_fetch_field_direct = false;

// ========== MYSQLI_RESULT_FETCH_FIELD_DIRECT - BEGIN
// ===== ABOUT
// Fetch meta-data for a single field
// ===== DESCRIPTION
// Returns an object which contains field definition information from the specified result set.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_field_direct(int $index): object|false
// 
// Procedural style
// mysqli_fetch_field_direct(mysqli_result $result, int $index): object|false
// ===== CODE
$return_mysqli_result_fetch_field_direct = $mysqli_result->fetch_field_direct(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$index // int index - The field number. This value must be in the range from 0 to number of fields - 1.

); // Return Values
// Returns an object which contains field definition information or false if no field information for specified index is available.
// Object attributes
// Attribute  - Description
// name       - The name of the column
// orgname    - Original column name if an alias was specified
// table      - The name of the table this field belongs to (if not calculated)
// orgtable   - Original table name if an alias was specified
// def        - The default value for this field, represented as a string
// max_length - The maximum width of the field for the result set. As of PHP 8.1, this value is always 0.
// length     - The width of the field, as specified in the table definition.
// charsetnr  - The character set number for the field.
// flags      - An integer representing the bit-flags for the field.
// type       - The data type used for this field
// decimals   - The number of decimals used (for numeric fields)
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Name LIMIT 5";
// 
// if ($result = $mysqli->query($query)) {
// 
//     // Get field information for column 'SurfaceArea'
//     $finfo = $result->fetch_field_direct(1);
// 
//     printf("Name:     %s\n", $finfo->name);
//     printf("Table:    %s\n", $finfo->table);
//     printf("max. Len: %d\n", $finfo->max_length);
//     printf("Flags:    %d\n", $finfo->flags);
//     printf("Type:     %d\n", $finfo->type);
// 
//     $result->close();
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Name LIMIT 5";
// 
// if ($result = mysqli_query($link, $query)) {
// 
//     // Get field information for column 'SurfaceArea'
//     $finfo = mysqli_fetch_field_direct($result, 1);
// 
//     printf("Name:     %s\n", $finfo->name);
//     printf("Table:    %s\n", $finfo->table);
//     printf("max. Len: %d\n", $finfo->max_length);
//     printf("Flags:    %d\n", $finfo->flags);
//     printf("Type:     %d\n", $finfo->type);
// 
//     mysqli_free_result($result);
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Name:     SurfaceArea
// Table:    Country
// max. Len: 10
// Flags:    32769
// Type:     4
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php
// ========== MYSQLI_RESULT_FETCH_FIELD_DIRECT - END

// SYNTAX:
// object|false mysqli_result::fetch_field_direct(int $index)

return $return_mysqli_result_fetch_field_direct; // object|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELD_DIRECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELD
// ============================== PUBLIC
// ============================== ABOUT
// Returns the next field in the result set.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_field() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_field($mysqli_result)
{
$return_mysqli_result_fetch_field = false;

// ========== MYSQLI_RESULT_FETCH_FIELD - BEGIN
// ===== ABOUT
// Returns the next field in the result set
// ===== DESCRIPTION
// Returns the definition of one column of a result set as an object. Call this function repeatedly to retrieve information about all columns in the result set.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_field(): object|false
// 
// Procedural style
// mysqli_fetch_field(mysqli_result $result): object|false
// ===== CODE
$return_mysqli_result_fetch_field = $mysqli_result->fetch_field(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// Returns an object which contains field definition information or false if no field information is available.
// Object properties
// Property   - Description
// name       - The name of the column
// orgname    - Original column name if an alias was specified
// table      - The name of the table this field belongs to (if not calculated)
// orgtable   - Original table name if an alias was specified
// def        - Reserved for default value, currently always ""
// db         - The name of the database
// catalog    - The catalog name, always "def"
// max_length - The maximum width of the field for the result set.
// length     - The width of the field, as specified in the table definition.
// charsetnr  - The character set number for the field.
// flags      - An integer representing the bit-flags for the field.
// type       - The data type used for this field
// decimals   - The number of decimals used (for integer fields)
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";
// 
// if ($result = $mysqli->query($query)) {
// 
//     // Get field information for all columns
//     while ($finfo = $result->fetch_field()) {
// 
//         printf("Name:     %s\n", $finfo->name);
//         printf("Table:    %s\n", $finfo->table);
//         printf("max. Len: %d\n", $finfo->max_length);
//         printf("Flags:    %d\n", $finfo->flags);
//         printf("Type:     %d\n\n", $finfo->type);
//     }
//     $result->close();
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";
// 
// if ($result = mysqli_query($link, $query)) {
// 
//     // Get field information for all fields
//     while ($finfo = mysqli_fetch_field($result)) {
// 
//         printf("Name:     %s\n", $finfo->name);
//         printf("Table:    %s\n", $finfo->table);
//         printf("max. Len: %d\n", $finfo->max_length);
//         printf("Flags:    %d\n", $finfo->flags);
//         printf("Type:     %d\n\n", $finfo->type);
//     }
//     mysqli_free_result($result);
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Name:     Name
// Table:    Country
// max. Len: 11
// Flags:    1
// Type:     254
// 
// Name:     SurfaceArea
// Table:    Country
// max. Len: 10
// Flags:    32769
// Type:     4
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-field.php
// ========== MYSQLI_RESULT_FETCH_FIELD - END

// SYNTAX:
// object|false mysqli_result::fetch_field()

return $return_mysqli_result_fetch_field; // object|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELD
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELDS
// ============================== PUBLIC
// ============================== ABOUT
// Returns an array of objects representing the fields in a result set.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_fields() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_fields($mysqli_result)
{
$return_mysqli_result_fetch_fields = null;

// ========== MYSQLI_RESULT_FETCH_FIELDS - BEGIN
// ===== ABOUT
// Returns an array of objects representing the fields in a result set
// ===== DESCRIPTION
// This function serves an identical purpose to the mysqli_fetch_field() function with the single difference that, instead of returning one object at a time for each field, the columns are returned as an array of objects.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_fields(): array
// 
// Procedural style
// mysqli_fetch_fields(mysqli_result $result): array
// ===== CODE
$return_mysqli_result_fetch_fields = $mysqli_result->fetch_fields(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// Returns an array of objects containing field definition information.
// Object properties
// Property   - Description
// name       - The name of the column
// orgname    - Original column name if an alias was specified
// table      - The name of the table this field belongs to (if not calculated)
// orgtable   - Original table name if an alias was specified
// max_length - The maximum width of the field for the result set. As of PHP 8.1, this value is always 0.
// length     - The width of the field, in bytes, as specified in the table definition. Note that this number (bytes) might differ from your table definition value (characters), depending on the character set you use. For example, the character set utf8 has 3 bytes per character, so varchar(10) will return a length of 30 for utf8 (10*3), but return 10 for latin1 (10*1).
// charsetnr  - The character set number (id) for the field.
// flags      - An integer representing the bit-flags for the field.
// type       - The data type used for this field
// decimals   - The number of decimals used (for integer fields)
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("127.0.0.1", "root", "foofoo", "sakila");
// 
// // check connection
// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }
// 
// foreach (array('latin1', 'utf8') as $charset) {
// 
//     // Set character set, to show its impact on some values (e.g., length in bytes)
//     $mysqli->set_charset($charset);
// 
//     $query = "SELECT actor_id, last_name from actor ORDER BY actor_id";
// 
//     echo "======================\n";
//     echo "Character Set: $charset\n";
//     echo "======================\n";
//     
//     if ($result = $mysqli->query($query)) {
// 
//         // Get field information for all columns
//         $finfo = $result->fetch_fields();
// 
//         foreach ($finfo as $val) {
//             printf("Name:      %s\n",   $val->name);
//             printf("Table:     %s\n",   $val->table);
//             printf("Max. Len:  %d\n",   $val->max_length);
//             printf("Length:    %d\n",   $val->length);
//             printf("charsetnr: %d\n",   $val->charsetnr);
//             printf("Flags:     %d\n",   $val->flags);
//             printf("Type:      %d\n\n", $val->type);
//         }
//         $result->free();
//     }
// }
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("127.0.0.1", "my_user", "my_password", "sakila");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// foreach (array('latin1', 'utf8') as $charset) {
// 
//     // Set character set, to show its impact on some values (e.g., length in bytes)
//     mysqli_set_charset($link, $charset);
// 
//     $query = "SELECT actor_id, last_name from actor ORDER BY actor_id";
// 
//     echo "======================\n";
//     echo "Character Set: $charset\n";
//     echo "======================\n";
// 
//     if ($result = mysqli_query($link, $query)) {
// 
//         // Get field information for all columns
//         $finfo = mysqli_fetch_fields($result);
// 
//         foreach ($finfo as $val) {
//             printf("Name:      %s\n",   $val->name);
//             printf("Table:     %s\n",   $val->table);
//             printf("Max. Len:  %d\n",   $val->max_length);
//             printf("Length:    %d\n",   $val->length);
//             printf("charsetnr: %d\n",   $val->charsetnr);
//             printf("Flags:     %d\n",   $val->flags);
//             printf("Type:      %d\n\n", $val->type);
//         }
//         mysqli_free_result($result);
//     }
// }
// 
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// ======================
// Character Set: latin1
// ======================
// Name:      actor_id
// Table:     actor
// Max. Len:  3
// Length:    5
// charsetnr: 63
// Flags:     49699
// Type:      2
// 
// Name:      last_name
// Table:     actor
// Max. Len:  12
// Length:    45
// charsetnr: 8
// Flags:     20489
// Type:      253
// 
// ======================
// Character Set: utf8
// ======================
// Name:      actor_id
// Table:     actor
// Max. Len:  3
// Length:    5
// charsetnr: 63
// Flags:     49699
// Type:      2
// 
// Name:      last_name
// Table:     actor
// Max. Len:  12
// Length:    135
// charsetnr: 33
// Flags:     20489
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-fields.php
// ========== MYSQLI_RESULT_FETCH_FIELDS - END

// SYNTAX:
// array mysqli_result::fetch_fields()

return $return_mysqli_result_fetch_fields; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_FIELDS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_OBJECT
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row of a result set as an object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_object() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_object($mysqli_result, $class = "stdClass", $constructor_args = array())
{
$return_mysqli_result_fetch_object = false;

// ========== MYSQLI_RESULT_FETCH_OBJECT - BEGIN
// ===== ABOUT
// Fetch the next row of a result set as an object
// ===== DESCRIPTION
// Fetches one row of data from the result set and returns it as an object, where each property represents the name of the result set's column. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.
// If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, mysqli_fetch_row() may be used to fetch the numerically indexed array, or aliases may be used in the SQL query select list to give columns different names.
// Note: This function sets the properties of the object before calling the object constructor.
// Note: Field names returned by this function are case-sensitive.
// Note: This function sets NULL fields to the PHP null value.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_object(string $class = "stdClass", array $constructor_args = []): object|null|false
// 
// Procedural style
// mysqli_fetch_object(mysqli_result $result, string $class = "stdClass", array $constructor_args = []): object|null|false
// ===== CODE
$return_mysqli_result_fetch_object = $mysqli_result->fetch_object(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$class, // string class - The name of the class to instantiate, set the properties of and return. If not specified, a stdClass object is returned.

$constructor_args // array constructor_args - An optional array of parameters to pass to the constructor for class objects.

); // Return Values
// Returns an object representing the fetched row, where each property represents the name of the result set's column, null if there are no more rows in the result set, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - constructor_args now accepts [] for constructors with 0 parameters; previously an exception was thrown.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_result::fetch_object() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
//  
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
// 
// $result = $mysqli->query($query);
// 
// // fetch object array
// while ($obj = $result->fetch_object()) {
//     printf("%s (%s)\n", $obj->Name, $obj->CountryCode);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
// 
// $result = mysqli_query($link, $query);
// 
// // fetch associative array
// while ($obj = mysqli_fetch_object($result)) {
//     printf("%s (%s)\n", $obj->Name, $obj->CountryCode);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Pueblo (USA)
// Arvada (USA)
// Cape Coral (USA)
// Green Bay (USA)
// Santa Clara (USA)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-object.php
// ========== MYSQLI_RESULT_FETCH_OBJECT - END

// SYNTAX:
// object|null|false mysqli_result::fetch_object(string $class = "stdClass", array $constructor_args = array())

return $return_mysqli_result_fetch_object; // object|null|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_OBJECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ROW
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row of a result set as an enumerated array.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::fetch_row() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_fetch_row($mysqli_result)
{
$return_mysqli_result_fetch_row = false;

// ========== MYSQLI_RESULT_FETCH_ROW - BEGIN
// ===== ABOUT
// Fetch the next row of a result set as an enumerated array
// ===== DESCRIPTION
// Fetches one row of data from the result set and returns it as an enumerated array, where each column is stored in an array offset starting from 0 (zero). Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.
// Note: This function sets NULL fields to the PHP null value.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::fetch_row(): array|null|false
// 
// Procedural style
// mysqli_fetch_row(mysqli_result $result): array|null|false
// ===== CODE
$return_mysqli_result_fetch_row = $mysqli_result->fetch_row(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// Returns an enumerated array representing the fetched row, null if there are no more rows in the result set, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 mysqli_result::fetch_row() example
// Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
// 
// $result = $mysqli->query($query);
// 
// // fetch object array
// while ($row = $result->fetch_row()) {
//     printf("%s (%s)\n", $row[0], $row[1]);
// }
// [/php]
// Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";
// 
// $result = mysqli_query($mysqli, $query);
// 
// // fetch associative array
// while ($row = mysqli_fetch_row($result)) {
//     printf("%s (%s)\n", $row[0], $row[1]);
// }
// [/php]
// The above examples will output something similar to:
// [result]
// Pueblo (USA)
// Arvada (USA)
// Cape Coral (USA)
// Green Bay (USA)
// Santa Clara (USA)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.fetch-row.php
// ========== MYSQLI_RESULT_FETCH_ROW - END

// SYNTAX:
// array|null|false mysqli_result::fetch_row()

return $return_mysqli_result_fetch_row; // array|null|false
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FETCH_ROW
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FIELD_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Gets the number of fields in the result set.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_result::field_count() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_field_count($mysqli_result)
{
$return_mysqli_result_field_count = 0;

// ========== MYSQLI_RESULT_FIELD_COUNT - BEGIN
// ===== ABOUT
// Gets the number of fields in the result set
// ===== DESCRIPTION
// Returns the number of fields in the result set.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_result->field_count;
// 
// Procedural style
// mysqli_num_fields(mysqli_result $result): int
// ===== CODE
$return_mysqli_result_field_count = $mysqli_result->field_count(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// An int representing the number of fields.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $result = $mysqli->query("SELECT Name, CountryCode, District, Population FROM City ORDER BY ID LIMIT 1");
// 
// /* Get the number of fields in the result set */
// $field_cnt = $result->field_count;
// 
// printf("Result set has %d fields.\n", $field_cnt);
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $result = mysqli_query($link, "SELECT Name, CountryCode, District, Population FROM City ORDER BY ID LIMIT 1");
// 
// /* Get the number of fields in the result set */
// $field_cnt = mysqli_num_fields($result);
// 
// printf("Result set has %d fields.\n", $field_cnt);
// [/php]
// The above examples will output:
// [result]
// Result set has 4 fields.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-result.field-count.php
// ========== MYSQLI_RESULT_FIELD_COUNT - END

// SYNTAX:
// int $mysqli_result::field_count()

return $return_mysqli_result_field_count; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FIELD_COUNT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FIELD_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Set result pointer to a specified field offset.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::field_seek() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_field_seek($mysqli_result, $index)
{
$return_mysqli_result_field_seek = false;

// ========== MYSQLI_RESULT_FIELD_SEEK - BEGIN
// ===== ABOUT
// Set result pointer to a specified field offset
// ===== DESCRIPTION
// Sets the field cursor to the given offset. The next call to mysqli_fetch_field() will retrieve the field definition of the column associated with that offset.
// Note: To seek to the beginning of a row, pass an offset value of zero.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::field_seek(int $index): bool
// 
// Procedural style
// mysqli_field_seek(mysqli_result $result, int $index): bool
// ===== CODE
$return_mysqli_result_field_seek = $mysqli_result->field_seek(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

$index // int index - The field number. This value must be in the range from 0 to number of fields - 1.

); // Return Values
// Always returns true.
// 
// Changelog
// Version - Description
// 8.0.0   - This function now always returns true. Previously it returned false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";
// 
// if ($result = $mysqli->query($query)) {
// 
//     // Get field information for 2nd column
//     $result->field_seek(1);
//     $finfo = $result->fetch_field();
// 
//     printf("Name:     %s\n", $finfo->name);
//     printf("Table:    %s\n", $finfo->table);
//     printf("max. Len: %d\n", $finfo->max_length);
//     printf("Flags:    %d\n", $finfo->flags);
//     printf("Type:     %d\n\n", $finfo->type);
// 
//     $result->close();
// }
// 
// // close connection
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// // check connection
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";
// 
// if ($result = mysqli_query($link, $query)) {
// 
//     // Get field information for 2nd column
//     mysqli_field_seek($result, 1);
//     $finfo = mysqli_fetch_field($result);
// 
//     printf("Name:     %s\n", $finfo->name);
//     printf("Table:    %s\n", $finfo->table);
//     printf("max. Len: %d\n", $finfo->max_length);
//     printf("Flags:    %d\n", $finfo->flags);
//     printf("Type:     %d\n\n", $finfo->type);
// 
//     mysqli_free_result($result);
// }
// 
// // close connection
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Name:     SurfaceArea
// Table:    Country
// max. Len: 10
// Flags:    32769
// Type:     4
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-result.field-seek.php
// ========== MYSQLI_RESULT_FIELD_SEEK - END

// SYNTAX:
// bool mysqli_result::field_seek(int $index)

return $return_mysqli_result_field_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FIELD_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FREE
// ============================== PUBLIC
// ============================== ABOUT
// Frees the memory associated with a result.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// mysqli_result::free() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_free($mysqli_result)
{
// ========== MYSQLI_RESULT_FREE - BEGIN
// ===== ABOUT
// Frees the memory associated with a result
// ===== DESCRIPTION
// Frees the memory associated with the result.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public mysqli_result::free(): void
// public mysqli_result::close(): void
// public mysqli_result::free_result(): void
// 
// Procedural style
// mysqli_free_result(mysqli_result $result): void
// ===== CODE
$mysqli_result->free(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-result.free.php
// ========== MYSQLI_RESULT_FREE - END

// SYNTAX:
// void mysqli_result::free()

// Return: void
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_FREE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_GETITERATOR
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve an external iterator.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli_result::getIterator() - PHP_8
// ============================== CODE
/*
function php_database_vendor_mysql_mysqli_mysqli_result_getiterator($mysqli_result)
{
$return_mysqli_result_getiterator = null;

// ========== MYSQLI_RESULT_GETITERATOR - BEGIN
// ===== ABOUT
// Retrieve an external iterator
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public mysqli_result::getIterator(): Iterator
// ===== CODE
$return_mysqli_result_getiterator = $mysqli_result->getIterator(

// This function has no parameters.

); // Return Values
// Iterator
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-result.getiterator.php
// ========== MYSQLI_RESULT_GETITERATOR - END

// SYNTAX:
// Iterator mysqli_result::getIterator()

return $return_mysqli_result_getiterator; // Iterator
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_GETITERATOR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_LENGTHS
// ============================== PUBLIC
// ============================== ABOUT
// Returns the lengths of the columns of the current row in the result set.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_result::lengths() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_lengths($mysqli_result)
{
$return_mysqli_result_lengths = null;

// ========== MYSQLI_RESULT_LENGTHS - BEGIN
// ===== ABOUT
// Returns the lengths of the columns of the current row in the result set
// ===== DESCRIPTION
// The mysqli_fetch_lengths() function returns an array containing the lengths of every column of the current row within the result set.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// ?array $mysqli_result->lengths;
// 
// Procedural style
// mysqli_fetch_lengths(mysqli_result $result): array|false
// ===== CODE
$return_mysqli_result_lengths = $mysqli_result->lengths(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// An array of integers representing the size of each column (not including any terminating null characters). false if an error occurred.
// mysqli_fetch_lengths() is valid only for the current row of the result set. It returns false if you call it before calling mysqli_fetch_row/array/object or after retrieving all rows in the result.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT * from Country ORDER BY Code LIMIT 1";
// 
// if ($result = $mysqli->query($query)) {
// 
//     $row = $result->fetch_row();
// 
//     /* display column lengths */
//     foreach ($result->lengths as $i => $val) {
//         printf("Field %2d has Length %2d\n", $i+1, $val);
//     }
//     $result->close();
// }
// 
// /* close connection */
// $mysqli->close();
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }
// 
// $query = "SELECT * from Country ORDER BY Code LIMIT 1";
// 
// if ($result = mysqli_query($link, $query)) {
// 
//     $row = mysqli_fetch_row($result);
// 
//     /* display column lengths */
//     foreach (mysqli_fetch_lengths($result) as $i => $val) {
//         printf("Field %2d has Length %2d\n", $i+1, $val);
//     }
//     mysqli_free_result($result);
// }
// 
// /* close connection */
// mysqli_close($link);
// [/php]
// The above examples will output:
// [result]
// Field  1 has Length  3
// Field  2 has Length  5
// Field  3 has Length 13
// Field  4 has Length  9
// Field  5 has Length  6
// Field  6 has Length  1
// Field  7 has Length  6
// Field  8 has Length  4
// Field  9 has Length  6
// Field 10 has Length  6
// Field 11 has Length  5
// Field 12 has Length 44
// Field 13 has Length  7
// Field 14 has Length  3
// Field 15 has Length  2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-result.lengths.php
// ========== MYSQLI_RESULT_LENGTHS - END

// SYNTAX:
// array $mysqli_result::lengths()

return $return_mysqli_result_lengths; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_LENGTHS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_NUM_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Gets the number of rows in the result set.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_result::num_rows() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_result_num_rows($mysqli_result)
{
$return_mysqli_result_num_rows = 0;

// ========== MYSQLI_RESULT_NUM_ROWS - BEGIN
// ===== ABOUT
// Gets the number of rows in the result set
// ===== DESCRIPTION
// Returns the number of rows in the result set.
// The behaviour of mysqli_num_rows() depends on whether buffered or unbuffered result sets are being used. This function returns 0 for unbuffered result sets unless all rows have been fetched from the server.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int|string $mysqli_result->num_rows;
// 
// Procedural style
// mysqli_num_rows(mysqli_result $result): int|string
// ===== CODE
$return_mysqli_result_num_rows = $mysqli_result->num_rows(

// mysqli_result result - Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().

); // Return Values
// An int representing the number of fetched rows. Returns 0 in unbuffered mode unless all rows have been fetched from the server.
// Note: If the number of rows is greater than PHP_INT_MAX, the number will be returned as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
// 
// $result = $mysqli->query("SELECT Code, Name FROM Country ORDER BY Name");
// 
// /* Get the number of rows in the result set */
// $row_cnt = $result->num_rows;
// 
// printf("Result set has %d rows.\n", $row_cnt);
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");
// 
// $result = mysqli_query($link, "SELECT Code, Name FROM Country ORDER BY Name");
// 
// /* Get the number of rows in the result set */
// $row_cnt = mysqli_num_rows($result);
// 
// printf("Result set has %d rows.\n", $row_cnt);
// [/php]
// The above examples will output:
// [result]
// Result set has 239 rows.
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: In contrast to the mysqli_stmt_num_rows() function, this function doesn't have object-oriented method variant. In the object-oriented style, use the getter property.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-result.num-rows.php
// ========== MYSQLI_RESULT_NUM_ROWS - END

// SYNTAX:
// int|string $mysqli_result::num_rows()

return $return_mysqli_result_num_rows; // int|string
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT_NUM_ROWS
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER
// ============================== PUBLIC
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_EMBEDDED_SERVER_END - void php_database_vendor_mysql_mysqli_mysqli_driver_embedded_server_end(mysqli_driver $mysqli_driver)
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_EMBEDDED_SERVER_START - bool php_database_vendor_mysql_mysqli_mysqli_driver_embedded_server_start(mysqli_driver $mysqli_driver, int $start, array $arguments, array $groups)
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_REPORT_MODE - int php_database_vendor_mysql_mysqli_mysqli_driver_report_mode($mysqli_driver $mysqli_driver)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (3)
// OFFLINE | mysqli_driver::embedded_server_end() - PHP_5 >= PHP_5_1_0, PHP_7 < PHP_7_4_0
// OFFLINE | mysqli_driver::embedded_server_start() - PHP_5 >= PHP_5_1_0, PHP_7 < PHP_7_4_0
// $mysqli_driver::report_mode() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (6)
// void
// mysqli_driver - PHP_5, PHP_7, PHP_8
// bool
// int
// array
// $mysqli_driver - mysqli_driver
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_EMBEDDED_SERVER_END
// ============================== OFFLINE
// ============================== ABOUT
// Stop embedded server.
// 
// Warning: This function was REMOVED in PHP 7.4.0.
// ============================== SUPPORT
// PHP_5 - PHP_7
// ============================== USING FUNCTIONS (1)
// mysqli_driver::embedded_server_end() - PHP_5 >= PHP_5_1_0, PHP_7 < PHP_7_4_0
// ============================== CODE
/*
function php_database_vendor_mysql_mysqli_mysqli_driver_embedded_server_end($mysqli_driver)
{

// ========== MYSQLI_DRIVER_EMBEDDED_SERVER_END - BEGIN
// ===== ABOUT
// Stop embedded server
// Warning: This function was REMOVED in PHP 7.4.0.
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7 < PHP_7_4_0
// ===== SYNTAX
// Object-oriented style
// public mysqli_driver::embedded_server_end(): void
// 
// Procedural style
// mysqli_embedded_server_end(): void
// ===== CODE
$mysqli_driver->embedded_server_end(

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-driver.embedded-server-end.php
// ========== MYSQLI_DRIVER_EMBEDDED_SERVER_END - END

// SYNTAX:
// void mysqli_driver::embedded_server_end()

// Return: void
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_EMBEDDED_SERVER_END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_EMBEDDED_SERVER_START
// ============================== OFFLINE
// ============================== ABOUT
// Initialize and start embedded server.
// 
// Warning: This function was REMOVED in PHP 7.4.0
// ============================== SUPPORT
// PHP_5 - PHP_7
// ============================== USING FUNCTIONS (1)
// mysqli_driver::embedded_server_start() - PHP_5 >= PHP_5_1_0, PHP_7 < PHP_7_4_0
// ============================== CODE
/*
function php_database_vendor_mysql_mysqli_mysqli_driver_embedded_server_start($mysqli_driver, $start, $arguments, $groups)
{
$return_mysqli_driver_embedded_server_start = false;

// ========== MYSQLI_DRIVER_EMBEDDED_SERVER_START - BEGIN
// ===== ABOUT
// Initialize and start embedded server
// Warning: This function was REMOVED in PHP 7.4.0
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7 < PHP_7_4_0
// ===== SYNTAX
// Object-oriented style
// public mysqli_driver::embedded_server_start(int $start, array $arguments, array $groups): bool
// 
// Procedural style
// mysqli_embedded_server_start(int $start, array $arguments, array $groups): bool
// ===== CODE
$return_mysqli_driver_embedded_server_start = $mysqli_driver->embedded_server_start(

$start, // int $start

$arguments, // array $arguments

$groups // array $groups

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-03)
// URL: https://www.php.net/manual/en/mysqli-driver.embedded-server-start.php
// ========== MYSQLI_DRIVER_EMBEDDED_SERVER_START - END

// SYNTAX:
// bool mysqli_driver::embedded_server_start(int $start, array $arguments, array $groups)

return $return_mysqli_driver_embedded_server_start; // bool
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_EMBEDDED_SERVER_START
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_REPORT_MODE
// ============================== PUBLIC
// ============================== ABOUT
// Sets mysqli error reporting mode.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// $mysqli_driver::report_mode() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_driver_report_mode($mysqli_driver)
{
$return_mysqli_driver_report_mode = 0;

// ========== MYSQLI_DRIVER_REPORT_MODE - BEGIN
// ===== ABOUT
// Sets mysqli error reporting mode
// ===== DESCRIPTION
// Depending on the flags, it sets mysqli error reporting mode to exception, warning or none. When set to MYSQLI_REPORT_ALL or MYSQLI_REPORT_INDEX it will also inform about queries that don't use an index (or use a bad index).
// As of PHP 8.1.0, the default setting is MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT. Previously, it was MYSQLI_REPORT_OFF.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// int $mysqli_driver->report_mode;
// 
// Procedural style
// mysqli_report(int $flags): bool
// ===== CODE
$return_mysqli_driver_report_mode = $mysqli_driver->report_mode(

// flags - 
// Supported flags
// Name                 - Description
// MYSQLI_REPORT_OFF    - Turns reporting off
// MYSQLI_REPORT_ERROR  - Report errors from mysqli function calls
// MYSQLI_REPORT_STRICT - Throw mysqli_sql_exception for errors instead of warnings
// MYSQLI_REPORT_INDEX  - Report if no index or bad index was used in a query
// MYSQLI_REPORT_ALL    - Set all options (report all)

); // Return Values
// Returns true.
// 
// Changelog
// Version - Description
// 8.1.0   - The default value is now MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT. Previously, it was MYSQLI_REPORT_OFF.
// 
// [examples]
// Examples
// [example]
// Example #1 Object-oriented style
// [php]
// 
// /* activate reporting */
// $driver = new mysqli_driver();
// $driver->report_mode = MYSQLI_REPORT_ALL;
// 
// try {
//     /* if the connection fails, a mysqli_sql_exception will be thrown */
//     $mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");
// 
//     /* this query should report an error */
//     $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");
// 
//     /* this query should report a bad index if the column population doesn't have an index */
//     $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");
// } catch (mysqli_sql_exception $e) {
//     error_log($e->__toString());
// }
// [/php]
// [/example]
// [example]
// Example #2 Procedural style
// [php]
// 
// /* activate reporting */
// mysqli_report(MYSQLI_REPORT_ALL);
// 
// try {
//     /* if the connection fails, a mysqli_sql_exception will be thrown */
//     $link = mysqli_connect("localhost", "my_user", "my_password", "my_db");
// 
//     /* this query should report an error */
//     $result = mysqli_query($link, "SELECT Name FROM Nonexistingtable WHERE population > 50000");
// 
//     /* this query should report a bad index if the column population doesn't have an index */
//     $result = mysqli_query($link, "SELECT Name FROM City WHERE population > 50000");
// } catch (mysqli_sql_exception $e) {
//     error_log($e->__toString());
// }
// [/php]
// [/example]
// [example]
// Example #3 Error reporting except bad index errors
// [php]
// 
// /* activate reporting */
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// 
// try {
//     /* if the connection fails, a mysqli_sql_exception will be thrown */
//     $mysqli = new mysqli("localhost", "my_user", "my_password", "my_db");
// 
//     /* this query should report an error */
//     $result = $mysqli->query("SELECT Name FROM Nonexistingtable WHERE population > 50000");
// 
//     /* this WILL NOT report any errors even if index is not available */
//     $result = $mysqli->query("SELECT Name FROM City WHERE population > 50000");
// } catch (mysqli_sql_exception $e) {
//     error_log($e->__toString());
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-01-30)
// URL: https://www.php.net/manual/en/mysqli-driver.report-mode.php
// ========== MYSQLI_DRIVER_REPORT_MODE - END

// SYNTAX:
// int $mysqli_driver::report_mode()

return $return_mysqli_driver_report_mode; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER_REPORT_MODE
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_DRIVER
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING
// ============================== PUBLIC
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_CONSTRUCT - mysqli_warning php_database_vendor_mysql_mysqli_mysqli_warning_construct()
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_NEXT - bool php_database_vendor_mysql_mysqli_mysqli_warning_next(mysqli_warning $mysqli_warning)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (2)
// mysqli_warning::__construct() - PHP_5, PHP_7, PHP_8
// mysqli_warning::next() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (2)
// mysqli_warning - PHP_5, PHP_7, PHP_8
// bool
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Private constructor to disallow direct instantiation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli_warning::__construct() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_warning_construct()
{
$return_mysqli_warning_construct = null;

// ========== MYSQLI_WARNING_CONSTRUCT - BEGIN
// ===== ABOUT
// Private constructor to disallow direct instantiation
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// private mysqli_warning::__construct()
// ===== CODE
$return_mysqli_warning_construct = new mysqli_warning(

// This function has no parameters.

); // Return
// mysqli_warning
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-warning.construct.php
// ========== MYSQLI_WARNING_CONSTRUCT - END

// SYNTAX:
// mysqli_warning mysqli_warning::__construct()

return $return_mysqli_warning_construct; // mysqli_warning
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_NEXT
// ============================== PUBLIC
// ============================== ABOUT
// Fetch next warning.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli_warning::next() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_database_vendor_mysql_mysqli_mysqli_warning_next($mysqli_warning)
{
$return_mysqli_warning_next = false;

// ========== MYSQLI_WARNING_NEXT - BEGIN
// ===== ABOUT
// Fetch next warning
// ===== DESCRIPTION
// Change warning information to the next warning if possible.
// Once the warning has been set to the next warning, new values of properties message, sqlstate and errno of mysqli_warning are available.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public mysqli_warning::next(): bool
// ===== CODE
$return_mysqli_warning_next = $mysqli_warning->next(

// This function has no parameters.

); // Return Values
// Returns true if next warning was fetched successfully. If there are no more warnings, it will return false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-warning.next.php
// ========== MYSQLI_WARNING_NEXT - END

// SYNTAX:
// bool mysqli_warning::next()

return $return_mysqli_warning_next; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING_NEXT
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_WARNING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION
// ============================== OFFLINE
// OFFLINE | PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION_GETSQLSTATE - string php_database_vendor_mysql_mysqli_mysqli_sql_exception_getsqlstate(mysqli_sql_exception $mysqli_sql_exception)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// OFFLINE | mysqli_sql_exception::getSqlState() - PHP_8 >= PHP_8_1_2
// ============================== USING DATA_TYPES (2)
// string
// mysqli_sql_exception - PHP_5, PHP_7, PHP_8
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION_GETSQLSTATE
// ============================== OFFLINE
// ============================== ABOUT
// Returns the SQLSTATE error code.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// mysqli_sql_exception::getSqlState() - PHP_8 >= PHP_8_1_2
// ============================== CODE
/*
function php_database_vendor_mysql_mysqli_mysqli_sql_exception_getsqlstate($mysqli_sql_exception)
{
$return_mysqli_sql_exception_getsqlstate = null;

// ========== MYSQLI_SQL_EXCEPTION_GETSQLSTATE - BEGIN
// ===== ABOUT
// Returns the SQLSTATE error code
// ===== DESCRIPTION
// Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. The values are specified by ANSI SQL and ODBC. For a list of possible values, see > http://dev.mysql.com/doc/mysql/en/error-handling.html.
// Note: Note that not all MySQL errors are yet mapped to SQLSTATE's. The value HY000 (general error) is used for unmapped errors.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_2
// ===== SYNTAX
// public mysqli_sql_exception::getSqlState(): string
// ===== CODE
$return_mysqli_sql_exception_getsqlstate = $mysqli_sql_exception->getSqlState(

// This function has no parameters.

); // Return Values
// Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/mysqli-sql-exception.getsqlstate.php
// ========== MYSQLI_SQL_EXCEPTION_GETSQLSTATE - END

// SYNTAX:
// string mysqli_sql_exception::getSqlState()

return $return_mysqli_sql_exception_getsqlstate; // string
}
*/
// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION_GETSQLSTATE
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI_MYSQLI_SQL_EXCEPTION
// ==============================


// ============================== END
// PHP_DATABASE_VENDOR_MYSQL_MYSQLI
// ==============================
?>