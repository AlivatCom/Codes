<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_ABSTRACT_PDO - BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO - bool|PDO|string|array|int|false|mixed|PDOStatement _BEGINTRANSACTION, _COMMIT, _CONSTRUCT, _ERRORCODE, _ERRORINFO, _EXEC, _GETATTRIBUTE, _GETAVAILABLEDRIVERS, _INTRANSACTION, _LASTINSERTID, _PREPARE, _QUERY, _QUOTE, _ROLLBACK, _SETATTRIBUTE
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT - bool|PDOStatement|string|int|mixed|array|object|false|Iterator _BINDCOLUMN, _BINDPARAM, _BINDVALUE, _CLOSECURSOR, _COLUMNCOUNT, _DEBUGDUMPPARAMS, _ERRORCODE, _ERRORINFO, _EXECUTE, _FETCH, _FETCHALL, _FETCHCOLUMN, _FETCHOBJECT, _GETATTRIBUTE, _GETCOLUMNMETA, _NEXTROWSET, _ROWCOUNT, _SETATTRIBUTE, _SETFETCHMODE
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID - array|PDO|int|string _PDO_CUBRID_SCHEMA
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL - bool|PDO|string|array|false|int|resource _PDO_PGSQLCOPYFROMARRAY, _PDO_PGSQLCOPYFROMFILE, _PDO_PGSQLCOPYTOARRAY, _PDO_PGSQLCOPYTOFILE, _PDO_PGSQLGETNOTIFY, _PDO_PGSQLGETPID
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE - bool|PDO|string|callable|int _PDO_SQLITECREATEAGGREGATE, _PDO_SQLITECREATECOLLATION, _PDO_SQLITECREATEFUNCTION
// PHP_DATABASE_ABSTRACT_PDO - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_1_0_3
// ============================== INSTALLATION
// BUNDLED (No external libraries are needed to build this extension. PDO and the PDO_SQLITE driver is enabled by default.)
// ============================== USING FUNCTIONS (0)
// ============================== USING CLASSES (5)
// PHP_DATABASE_ABSTRACT_PDO_PDO - PHP_5 - PHP_8, PECL_pdo_1_0_3
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT - PHP_5 - PHP_8, PECL_pdo_1_0_0
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID - PECL_pdo_0_1_0, PECL_PDO_CUBRID_8_3_0_0001
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL - PHP_5 - PHP_8, PECL_pdo_0_1_0
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE - PHP_5 - PHP_8, PECL_pdo_0_1_0, PECL_pdo_sqlite_1_0_0
// ============================== USING DATA_TYPES (12)
// bool
// PDO - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// string
// array
// int
// false
// mixed
// PDOStatement - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// object
// Iterator
// resource
// callable
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_DATABASE_ABSTRACT_PDO   
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Abstraction Layers / PDO - PHP Data Objects
// URL: https://www.php.net/manual/en/book.pdo.php
// ============================== DESCRIPTION
// PHP_DATA_OBJECTS
// 
// PHP_DATA_OBJECTS - BEGIN
// PHP Data Objects
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// CONNECTIONS_AND_CONNECTION_MANAGEMENT
// TRANSACTIONS_AND_AUTO_COMMIT
// PREPARED_STATEMENTS_AND_STORED_PROCEDURES
// ERRORS_AND_ERROR_HANDLING
// LARGE_OBJECTS_LOBS
// THE_PDO_CLASS
// THE_PDOSTATEMENT_CLASS
// THE_PDOROW_CLASS
// THE_PDOEXCEPTION_CLASS
// PDO_DRIVERS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. Note that you cannot perform any database functions using the PDO extension by itself; you must use a database-specific PDO driver to access a database server.
// PDO provides a data-access abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data. PDO does not provide a database abstraction; it doesn't rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility.
// PDO ships with PHP.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/intro.pdo.php
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
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Installing PDO on Unix systems
// 1. PDO and the PDO_SQLITE driver is enabled by default. You may need to enable the PDO driver for your database of choice; consult the documentation for database-specific PDO drivers to find out more about that.
// Note: When building PDO as a shared extension (not recommended) then all PDO drivers must be loaded after PDO itself.
// 2. When installing PDO as a shared module, the php.ini file needs to be updated so that the PDO extension will be loaded automatically when PHP runs. You will also need to enable any database specific drivers there too; make sure that they are listed after the pdo.so line, as PDO must be initialized before the database-specific extensions can be loaded. If you built PDO and the database-specific extensions statically, you can skip this step.
// [code]
// extension=pdo.so
// [/code]
// 
// Windows users
// 1. Choose the other database-specific DLL files and either use dl() to load them at runtime, or enable them in php.ini below php_pdo.dll. For example:
// [code]
// extension=php_pdo.dll
// extension=php_pdo_firebird.dll
// extension=php_pdo_informix.dll
// extension=php_pdo_mssql.dll
// extension=php_pdo_mysql.dll
// extension=php_pdo_oci.dll
// extension=php_pdo_oci8.dll
// extension=php_pdo_odbc.dll
// extension=php_pdo_pgsql.dll
// extension=php_pdo_sqlite.dll  
// [/code]
// These DLLs should exist in the system's extension_dir.
// Note: Remember that after making changes to your php.ini file you will need to restart PHP for your new configuration directives to take effect.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// PDO Configuration Options
// Name      | Default | Changeable   | Changelog
// pdo.dsn.* |         | php.ini only |
// 
// Here's a short explanation of the configuration directives.
// 
// pdo.dsn.* string - Defines DSN alias. See PDO::__construct() for thorough explanation.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// PDO::PARAM_BOOL (int)               - Represents a boolean data type.
// PDO::PARAM_NULL (int)               - Represents the SQL NULL data type.
// PDO::PARAM_INT (int)                - Represents the SQL INTEGER data type.
// PDO::PARAM_STR (int)                - Represents the SQL CHAR, VARCHAR, or other string data type.
// PDO::PARAM_STR_NATL (int)           - Flag to denote a string uses the national character set. Available since PHP 7.2.0
// PDO::PARAM_STR_CHAR (int)           - Flag to denote a string uses the regular character set. Available since PHP 7.2.0
// PDO::PARAM_LOB (int)                - Represents the SQL large object data type.
// PDO::PARAM_STMT (int)               - Represents a recordset type. Not currently supported by any drivers.
// PDO::PARAM_INPUT_OUTPUT (int)       - Specifies that the parameter is an INOUT parameter for a stored procedure. You must bitwise-OR this value with an explicit PDO::PARAM_* data type.
// PDO::FETCH_DEFAULT (int)            - Specifies that the default fetch mode shall be used. Available as of PHP 8.0.7.
// PDO::FETCH_LAZY (int)               - Specifies that the fetch method shall return each row as an object with property names that correspond to the column names returned in the result set. PDO::FETCH_LAZY returns a PDORow object which creates the object property names as they are accessed. Not valid inside PDOStatement::fetchAll().
// PDO::FETCH_ASSOC (int)              - Specifies that the fetch method shall return each row as an array indexed by column name as returned in the corresponding result set. If the result set contains multiple columns with the same name, PDO::FETCH_ASSOC returns only a single value per column name.
// PDO::FETCH_NAMED (int)              - Specifies that the fetch method shall return each row as an array indexed by column name as returned in the corresponding result set. If the result set contains multiple columns with the same name, PDO::FETCH_NAMED returns an array of values per column name.
// PDO::FETCH_NUM (int)                - Specifies that the fetch method shall return each row as an array indexed by column number as returned in the corresponding result set, starting at column 0.
// PDO::FETCH_BOTH (int)               - Specifies that the fetch method shall return each row as an array indexed by both column name and number as returned in the corresponding result set, starting at column 0.
// PDO::FETCH_OBJ (int)                - Specifies that the fetch method shall return each row as an object with property names that correspond to the column names returned in the result set.
// PDO::FETCH_BOUND (int)              - Specifies that the fetch method shall return TRUE and assign the values of the columns in the result set to the PHP variables to which they were bound with the PDOStatement::bindParam() or PDOStatement::bindColumn() methods.
// PDO::FETCH_COLUMN (int)             - Specifies that the fetch method shall return only a single requested column from the next row in the result set.
// PDO::FETCH_CLASS (int)              - Specifies that the fetch method shall return a new instance of the requested class, mapping the columns to named properties in the class.
// Note: The magic __set() method is called if the property doesn't exist in the requested class
// PDO::FETCH_INTO (int)               - Specifies that the fetch method shall update an existing instance of the requested class, mapping the columns to named properties in the class.
// PDO::FETCH_FUNC (int)               - Allows completely customize the way data is treated on the fly (only valid inside PDOStatement::fetchAll()).
// PDO::FETCH_GROUP (int)              - Group return by values. Usually combined with PDO::FETCH_COLUMN or PDO::FETCH_KEY_PAIR.
// PDO::FETCH_UNIQUE (int)             - Fetch only the unique values.
// PDO::FETCH_KEY_PAIR (int)           - Fetch a two-column result into an array where the first column is a key and the second column is the value.
// PDO::FETCH_CLASSTYPE (int)          - Determine the class name from the value of first column.
// PDO::FETCH_SERIALIZE (int)          - As PDO::FETCH_INTO but object is provided as a serialized string. The class constructor is never called if this flag is set. Deprecated as of PHP 8.1.0.
// PDO::FETCH_PROPS_LATE (int)         - Call the constructor before setting properties.
// PDO::ATTR_AUTOCOMMIT (int)          - If this value is false, PDO attempts to disable autocommit so that the connection begins a transaction.
// PDO::ATTR_PREFETCH (int)            - Setting the prefetch size allows you to balance speed against memory usage for your application. Not all database/driver combinations support setting of the prefetch size. A larger prefetch size results in increased performance at the cost of higher memory usage.
// PDO::ATTR_TIMEOUT (int)             - Sets the timeout value in seconds for communications with the database.
// PDO::ATTR_ERRMODE (int)             - See the Errors and error handling section for more information about this attribute.
// PDO::ATTR_SERVER_VERSION (int)      - This is a read only attribute; it will return information about the version of the database server to which PDO is connected.
// PDO::ATTR_CLIENT_VERSION (int)      - This is a read only attribute; it will return information about the version of the client libraries that the PDO driver is using.
// PDO::ATTR_SERVER_INFO (int)         - This is a read only attribute; it will return some meta information about the database server to which PDO is connected.
// PDO::ATTR_CONNECTION_STATUS (int)   -
// PDO::ATTR_CASE (int)                - Force column names to a specific case specified by the PDO::CASE_* constants.
// PDO::ATTR_CURSOR_NAME (int)         - Get or set the name to use for a cursor. Most useful when using scrollable cursors and positioned updates.
// PDO::ATTR_CURSOR (int)              - Selects the cursor type. PDO currently supports either PDO::CURSOR_FWDONLY and PDO::CURSOR_SCROLL. Stick with PDO::CURSOR_FWDONLY unless you know that you need a scrollable cursor.
// PDO::ATTR_DRIVER_NAME (int)         - Returns the name of the driver.
// [example]
// Example #1 using PDO::ATTR_DRIVER_NAME
// [php]
// if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
//   echo "Running on mysql; doing something mysql specific here\n";
// }
// [/php]
// [/example]
// PDO::ATTR_ORACLE_NULLS (int)        - Convert empty strings to SQL NULL values on data fetches.
// PDO::ATTR_PERSISTENT (int)          - Request a persistent connection, rather than creating a new connection. See Connections and Connection management for more information on this attribute.
// PDO::ATTR_STATEMENT_CLASS (int)     - Sets the class name of which statements are returned as.
// PDO::ATTR_FETCH_CATALOG_NAMES (int) - Prepend the containing catalog name to each column name returned in the result set. The catalog name and column name are separated by a decimal (.) character. Support of this attribute is at the driver level; it may not be supported by your driver.
// PDO::ATTR_FETCH_TABLE_NAMES (int)   - Prepend the containing table name to each column name returned in the result set. The table name and column name are separated by a decimal (.) character. Support of this attribute is at the driver level; it may not be supported by your driver.
// PDO::ATTR_STRINGIFY_FETCHES (int)   - Forces all values fetched to be treated as strings.
// PDO::ATTR_MAX_COLUMN_LEN (int) - Sets the maximum column name length.
// PDO::ATTR_DEFAULT_FETCH_MODE (int)  -
// PDO::ATTR_EMULATE_PREPARES (int)    -
// PDO::ATTR_DEFAULT_STR_PARAM (int)   - Sets the default string parameter type, this can be one of PDO::PARAM_STR_NATL and PDO::PARAM_STR_CHAR. Available since PHP 7.2.0.
// PDO::ERRMODE_SILENT (int)           - Do not raise an error or exception if an error occurs. The developer is expected to explicitly check for errors. This is the default mode. See Errors and error handling for more information about this attribute.
// PDO::ERRMODE_WARNING (int)          - Issue a PHP E_WARNING message if an error occurs. See Errors and error handling for more information about this attribute.
// PDO::ERRMODE_EXCEPTION (int)        - Throw a PDOException if an error occurs. See Errors and error handling for more information about this attribute.
// PDO::CASE_NATURAL (int)             - Leave column names as returned by the database driver.
// PDO::CASE_LOWER (int)               - Force column names to lower case.
// PDO::CASE_UPPER (int)               - Force column names to upper case.
// PDO::NULL_NATURAL (int)             -
// PDO::NULL_EMPTY_STRING (int)        -
// PDO::NULL_TO_STRING (int)           -
// PDO::FETCH_ORI_NEXT (int)           - Fetch the next row in the result set. Valid only for scrollable cursors.
// PDO::FETCH_ORI_PRIOR (int)          - Fetch the previous row in the result set. Valid only for scrollable cursors.
// PDO::FETCH_ORI_FIRST (int)          - Fetch the first row in the result set. Valid only for scrollable cursors.
// PDO::FETCH_ORI_LAST (int)           - Fetch the last row in the result set. Valid only for scrollable cursors.
// PDO::FETCH_ORI_ABS (int)            - Fetch the requested row by row number from the result set. Valid only for scrollable cursors.
// PDO::FETCH_ORI_REL (int)            - Fetch the requested row by relative position from the current position of the cursor in the result set. Valid only for scrollable cursors.
// PDO::CURSOR_FWDONLY (int)           - Create a PDOStatement object with a forward-only cursor. This is the default cursor choice, as it is the fastest and most common data access pattern in PHP.
// PDO::CURSOR_SCROLL (int)            - Create a PDOStatement object with a scrollable cursor. Pass the PDO::FETCH_ORI_* constants to control the rows fetched from the result set.
// PDO::ERR_NONE (string)              - Corresponds to SQLSTATE '00000', meaning that the SQL statement was successfully issued with no errors or warnings. This constant is for your convenience when checking PDO::errorCode() or PDOStatement::errorCode() to determine if an error occurred. You will usually know if this is the case by examining the return code from the method that raised the error condition anyway.
// PDO::PARAM_EVT_ALLOC (int)          - Allocation event
// PDO::PARAM_EVT_FREE (int)           - Deallocation event
// PDO::PARAM_EVT_EXEC_PRE (int)       - Event triggered prior to execution of a prepared statement.
// PDO::PARAM_EVT_EXEC_POST (int)      - Event triggered subsequent to execution of a prepared statement.
// PDO::PARAM_EVT_FETCH_PRE (int)      - Event triggered prior to fetching a result from a resultset.
// PDO::PARAM_EVT_FETCH_POST (int)     - Event triggered subsequent to fetching a result from a resultset.
// PDO::PARAM_EVT_NORMALIZE (int)      - Event triggered during bound parameter registration allowing the driver to normalize the parameter name.
// PDO::SQLITE_DETERMINISTIC (int)     - Specifies that a function created with PDO::sqliteCreateFunction() is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement. (Available as of PHP 7.1.4.)
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.constants.php
// PREDEFINED_CONSTANTS - END
// 
// CONNECTIONS_AND_CONNECTION_MANAGEMENT - BEGIN
// Connections and Connection management
// 
// Connections are established by creating instances of the PDO base class. It doesn't matter which driver you want to use; you always use the PDO class name. The constructor accepts parameters for specifying the database source (known as the DSN) and optionally for the username and password (if any).
// [example]
// Example #1 Connecting to MySQL
// [php]
// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
// [/php]
// If there are any connection errors, a PDOException object will be thrown. You may catch the exception if you want to handle the error condition, or you may opt to leave it for an application global exception handler that you set up via set_exception_handler().
// [/example]
// [example]
// Example #2 Handling connection errors
// [php]
// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
// } catch (PDOException $e) {
//     // attempt to retry the connection after some timeout for example
// }
// [/php]
// Warning: Just like any other exception, PDOException could be caught either explicitly, via a catch statement, or implicitly via set_exception_handler(). Otherwise, the default behaviour of converting an uncaught exception to a E_FATAL_ERROR will occur. The fatal error will contain a backtrace that can leak connection details. As such, the php.ini option display_errors should be set to 0 on a production server.
// Upon successful connection to the database, an instance of the PDO class is returned to your script. The connection remains active for the lifetime of that PDO object. To close the connection, you need to destroy the object by ensuring that all remaining references to it are deleted-you do this by assigning null to the variable that holds the object. If you don't do this explicitly, PHP will automatically close the connection when your script ends.
// Note: If there are still other references to this PDO instance (such as from a PDOStatement instance, or from other variables referencing the same PDO instance), these have to be removed also (for instance, by assigning null to the variable that references the PDOStatement).
// [/example]
// [example]
// Example #3 Closing a connection
// [php]
// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
// // use the connection here
// $sth = $dbh->query('SELECT * FROM foo');
// 
// // and now we're done; close it
// $sth = null;
// $dbh = null;
// [/php]
// [/example]
// Many web applications will benefit from making persistent connections to database servers. Persistent connections are not closed at the end of the script, but are cached and re-used when another script requests a connection using the same credentials. The persistent connection cache allows you to avoid the overhead of establishing a new connection every time a script needs to talk to a database, resulting in a faster web application.
// [example]
// Example #4 Persistent connections
// [php]
// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(
//     PDO::ATTR_PERSISTENT => true
// ));
// [/php]
// The value of the PDO::ATTR_PERSISTENT option is converted to bool (enable/disable persistent connections), unless it is a non-numeric string, in which case it allows to use multiple persistent connection pools. This is useful if different connections use incompatible settings, for instance, different values of PDO::MYSQL_ATTR_USE_BUFFERED_QUERY.
// Note: If you wish to use persistent connections, you must set PDO::ATTR_PERSISTENT in the array of driver options passed to the PDO constructor. If setting this attribute with PDO::setAttribute() after instantiation of the object, the driver will not use persistent connections.
// Note: If you're using the PDO ODBC driver and your ODBC libraries support ODBC Connection Pooling (unixODBC and Windows are two that do; there may be more), then it's recommended that you don't use persistent PDO connections, and instead leave the connection caching to the ODBC Connection Pooling layer. The ODBC Connection Pool is shared with other modules in the process; if PDO is told to cache the connection, then that connection would never be returned to the ODBC connection pool, resulting in additional connections being created to service those other modules.
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.connections.php
// CONNECTIONS_AND_CONNECTION_MANAGEMENT - END
// 
// TRANSACTIONS_AND_AUTO_COMMIT - BEGIN
// Transactions and auto-commit
// 
// Now that you're connected via PDO, you must understand how PDO manages transactions before you start issuing queries. If you've never encountered transactions before, they offer 4 major features: Atomicity, Consistency, Isolation and Durability (ACID). In layman's terms, any work carried out in a transaction, even if it is carried out in stages, is guaranteed to be applied to the database safely, and without interference from other connections, when it is committed. Transactional work can also be automatically undone at your request (provided you haven't already committed it), which makes error handling in your scripts easier.
// Transactions are typically implemented by "saving-up" your batch of changes to be applied all at once; this has the nice side effect of drastically improving the efficiency of those updates. In other words, transactions can make your scripts faster and potentially more robust (you still need to use them correctly to reap that benefit).
// Unfortunately, not every database supports transactions, so PDO needs to run in what is known as "auto-commit" mode when you first open the connection. Auto-commit mode means that every query that you run has its own implicit transaction, if the database supports it, or no transaction if the database doesn't support transactions. If you need a transaction, you must use the PDO::beginTransaction() method to initiate one. If the underlying driver does not support transactions, a PDOException will be thrown (regardless of your error handling settings: this is always a serious error condition). Once you are in a transaction, you may use PDO::commit() or PDO::rollBack() to finish it, depending on the success of the code you run during the transaction.
//  Warning: PDO only checks for transaction capabilities on driver level. If certain runtime conditions mean that transactions are unavailable, PDO::beginTransaction() will still return true without error if the database server accepts the request to start a transaction.
//  An example of this would be trying to use transactions on MyISAM tables on a MySQL database.
// When the script ends or when a connection is about to be closed, if you have an outstanding transaction, PDO will automatically roll it back. This is a safety measure to help avoid inconsistency in the cases where the script terminates unexpectedly--if you didn't explicitly commit the transaction, then it is assumed that something went awry, so the rollback is performed for the safety of your data.
// Warning: The automatic rollback only happens if you initiate the transaction via PDO::beginTransaction(). If you manually issue a query that begins a transaction PDO has no way of knowing about it and thus cannot roll it back if something bad happens.
// [example]
// Example #1 Executing a batch in a transaction
// In the following sample, let's assume that we are creating a set of entries for a new employee, who has been assigned an ID number of 23. In addition to entering the basic data for that person, we also need to record their salary. It's pretty simple to make two separate updates, but by enclosing them within the PDO::beginTransaction() and PDO::commit() calls, we are guaranteeing that no one else will be able to see those changes until they are complete. If something goes wrong, the catch block rolls back all changes made since the transaction was started, and then prints out an error message.
// [php]
// try {
//   $dbh = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2', 
//       array(PDO::ATTR_PERSISTENT => true));
//   echo "Connected\n";
// } catch (Exception $e) {
//   die("Unable to connect: " . $e->getMessage());
// }
// 
// try {  
//   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 
//   $dbh->beginTransaction();
//   $dbh->exec("insert into staff (id, first, last) values (23, 'Joe', 'Bloggs')");
//   $dbh->exec("insert into salarychange (id, amount, changedate) 
//       values (23, 50000, NOW())");
//   $dbh->commit();
//   
// } catch (Exception $e) {
//   $dbh->rollBack();
//   echo "Failed: " . $e->getMessage();
// }
// [/php]
// You're not limited to making updates in a transaction; you can also issue complex queries to extract data, and possibly use that information to build up more updates and queries; while the transaction is active, you are guaranteed that no one else can make changes while you are in the middle of your work. For further reading on transactions, refer to the documentation provided by your database server.
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.transactions.php
// TRANSACTIONS_AND_AUTO_COMMIT - END
// 
// PREPARED_STATEMENTS_AND_STORED_PROCEDURES - BEGIN
// Prepared statements and stored procedures
// 
// Many of the more mature databases support the concept of prepared statements. What are they? They can be thought of as a kind of compiled template for the SQL that an application wants to run, that can be customized using variable parameters. Prepared statements offer two major benefits:
// The query only needs to be parsed (or prepared) once, but can be executed multiple times with the same or different parameters. When the query is prepared, the database will analyze, compile and optimize its plan for executing the query. For complex queries this process can take up enough time that it will noticeably slow down an application if there is a need to repeat the same query many times with different parameters. By using a prepared statement the application avoids repeating the analyze/compile/optimize cycle. This means that prepared statements use fewer resources and thus run faster.
// The parameters to prepared statements don't need to be quoted; the driver automatically handles this. If an application exclusively uses prepared statements, the developer can be sure that no SQL injection will occur (however, if other portions of the query are being built up with unescaped input, SQL injection is still possible).
// Prepared statements are so useful that they are the only feature that PDO will emulate for drivers that don't support them. This ensures that an application will be able to use the same data access paradigm regardless of the capabilities of the database.
// [example]
// Example #1 Repeated inserts using prepared statements
// This example performs an INSERT query by substituting a name and a value for the named placeholders.
// [php]
// $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
// $stmt->bindParam(':name', $name);
// $stmt->bindParam(':value', $value);
// 
// // insert one row
// $name = 'one';
// $value = 1;
// $stmt->execute();
// 
// // insert another row with different values
// $name = 'two';
// $value = 2;
// $stmt->execute();
// [/php]
// [/example]
// [example]
// Example #2 Repeated inserts using prepared statements
// This example performs an INSERT query by substituting a name and a value for the positional ? placeholders.
// [php]
// $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
// $stmt->bindParam(1, $name);
// $stmt->bindParam(2, $value);
// 
// // insert one row
// $name = 'one';
// $value = 1;
// $stmt->execute();
// 
// // insert another row with different values
// $name = 'two';
// $value = 2;
// $stmt->execute();
// [/php]
// [/example]
// [example]
// Example #3 Fetching data using prepared statements
// This example fetches data based on a key value supplied by a form. The user input is automatically quoted, so there is no risk of a SQL injection attack.
// [php]
// $stmt = $dbh->prepare("SELECT * FROM REGISTRY where name = ?");
// $stmt->execute([$_GET['name']]);
// foreach ($stmt as $row) {
//   print_r($row);
// }
// [/php]
// [/example]
// [example]
// Example #4 Calling a stored procedure with an output parameter
// If the database driver supports it, an application may also bind parameters for output as well as input. Output parameters are typically used to retrieve values from stored procedures. Output parameters are slightly more complex to use than input parameters, in that a developer must know how large a given parameter might be when they bind it. If the value turns out to be larger than the size they suggested, an error is raised.
// [php]
// $stmt = $dbh->prepare("CALL sp_returns_string(?)");
// $stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000); 
// 
// // call the stored procedure
// $stmt->execute();
// 
// print "procedure returned $return_value\n";
// [/php]
// [/example]
// [example]
// Example #5 Calling a stored procedure with an input/output parameter
// Developers may also specify parameters that hold values both input and output; the syntax is similar to output parameters. In this next example, the string 'hello' is passed into the stored procedure, and when it returns, hello is replaced with the return value of the procedure.
// [php]
// $stmt = $dbh->prepare("CALL sp_takes_string_returns_string(?)");
// $value = 'hello';
// $stmt->bindParam(1, $value, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 
// 
// // call the stored procedure
// $stmt->execute();
// 
// print "procedure returned $value\n";
// [/php]
// [/example]
// [example]
// Example #6 Invalid use of placeholder
// [php]
// $stmt = $dbh->prepare("SELECT * FROM REGISTRY where name LIKE '%?%'");
// $stmt->execute([$_GET['name']]);
// 
// // placeholder must be used in the place of the whole value
// $stmt = $dbh->prepare("SELECT * FROM REGISTRY where name LIKE ?");
// $stmt->execute(["%$_GET[name]%"]);
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.prepared-statements.php
// PREPARED_STATEMENTS_AND_STORED_PROCEDURES - END
// 
// ERRORS_AND_ERROR_HANDLING - BEGIN
// Errors and error handling
// 
// PDO offers you a choice of 3 different error handling strategies, to fit your style of application development.
// * PDO::ERRMODE_SILENT
//   Prior to PHP 8.0.0, this was the default mode. PDO will simply set the error code for you to inspect using the PDO::errorCode() and PDO::errorInfo() methods on both the statement and database objects; if the error resulted from a call on a statement object, you would invoke the PDOStatement::errorCode() or PDOStatement::errorInfo() method on that object. If the error resulted from a call on the database object, you would invoke those methods on the database object instead.
// * PDO::ERRMODE_WARNING
//   In addition to setting the error code, PDO will emit a traditional E_WARNING message. This setting is useful during debugging/testing, if you just want to see what problems occurred without interrupting the flow of the application.
// * PDO::ERRMODE_EXCEPTION
//   As of PHP 8.0.0, this is the default mode. In addition to setting the error code, PDO will throw a PDOException and set its properties to reflect the error code and error information. This setting is also useful during debugging, as it will effectively "blow up" the script at the point of the error, very quickly pointing a finger at potential problem areas in your code (remember: transactions are automatically rolled back if the exception causes the script to terminate).
//   Exception mode is also useful because you can structure your error handling more clearly than with traditional PHP-style warnings, and with less code/nesting than by running in silent mode and explicitly checking the return value of each database call.
//   See Exceptions for more information about Exceptions in PHP.
// PDO standardizes on using SQL-92 SQLSTATE error code strings; individual PDO drivers are responsible for mapping their native codes to the appropriate SQLSTATE codes. The PDO::errorCode() method returns a single SQLSTATE code. If you need more specific information about an error, PDO also offers an PDO::errorInfo() method which returns an array containing the SQLSTATE code, the driver specific error code and driver specific error string.
// [example]
// Example #1 Create a PDO instance and set the error mode
// [php]
// $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
// $user = 'dbuser';
// $password = 'dbpass';
// 
// $dbh = new PDO($dsn, $user, $password);
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 
// // This will cause PDO to throw a PDOException (when the table doesn't exist)
// $dbh->query("SELECT wrongcolumn FROM wrongtable");
// [/php]
// The above example will output:
// [result]
// Fatal error: Uncaught PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'testdb.wrongtable' doesn't exist in /tmp/pdo_test.php:10
// Stack trace:
// #0 /tmp/pdo_test.php(10): PDO->query('SELECT wrongcol...')
// #1 {main}
//   thrown in /tmp/pdo_test.php on line 10
// [/result]
// Note: PDO::__construct() will always throw a PDOException if the connection fails regardless of which PDO::ATTR_ERRMODE is currently set.
// [/example]
// [example]
// Example #2 Create a PDO instance and set the error mode from the constructor
// [php]
// $dsn = 'mysql:dbname=test;host=127.0.0.1';
// $user = 'googleguy';
// $password = 'googleguy';
// 
// $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
// 
// // This will cause PDO to throw an error of level E_WARNING instead of an exception (when the table doesn't exist)
// $dbh->query("SELECT wrongcolumn FROM wrongtable");
// [/php]
// The above example will output:
// [result]
// Warning: PDO::query(): SQLSTATE[42S02]: Base table or view not found: 1146 Table 'test.wrongtable' doesn't exist in
// /tmp/pdo_test.php on line 9
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.error-handling.php
// ERRORS_AND_ERROR_HANDLING - END
// 
// LARGE_OBJECTS_LOBS - BEGIN
// Large Objects (LOBs)
// 
// At some point in your application, you might find that you need to store "large" data in your database. Large typically means "around 4kb or more", although some databases can happily handle up to 32kb before data becomes "large". Large objects can be either textual or binary in nature. PDO allows you to work with this large data type by using the PDO::PARAM_LOB type code in your PDOStatement::bindParam() or PDOStatement::bindColumn() calls. PDO::PARAM_LOB tells PDO to map the data as a stream, so that you can manipulate it using the PHP Streams API.
// [example]
// Example #1 Displaying an image from a database
// This example binds the LOB into the variable named $lob and then sends it to the browser using fpassthru(). Since the LOB is represented as a stream, functions such as fgets(), fread() and stream_get_contents() can be used on it.
// [php]
// $db = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
// $stmt = $db->prepare("select contenttype, imagedata from images where id=?");
// $stmt->execute(array($_GET['id']));
// $stmt->bindColumn(1, $type, PDO::PARAM_STR, 256);
// $stmt->bindColumn(2, $lob, PDO::PARAM_LOB);
// $stmt->fetch(PDO::FETCH_BOUND);
// 
// header("Content-Type: $type");
// fpassthru($lob);
// [/php]
// [/example]
// [example]
// Example #2 Inserting an image into a database
// This example opens up a file and passes the file handle to PDO to insert it as a LOB. PDO will do its best to get the contents of the file up to the database in the most efficient manner possible.
// [php]
// $db = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
// $stmt = $db->prepare("insert into images (id, contenttype, imagedata) values (?, ?, ?)");
// $id = get_new_id(); // some function to allocate a new ID
// 
// // assume that we are running as part of a file upload form
// // You can find more information in the PHP documentation
// 
// $fp = fopen($_FILES['file']['tmp_name'], 'rb');
// 
// $stmt->bindParam(1, $id);
// $stmt->bindParam(2, $_FILES['file']['type']);
// $stmt->bindParam(3, $fp, PDO::PARAM_LOB);
// 
// $db->beginTransaction();
// $stmt->execute();
// $db->commit();
// [/php]
// [/example]
// [example]
// Example #3 Inserting an image into a database: Oracle
// Oracle requires a slightly different syntax for inserting a lob from a file. It's also essential that you perform the insert under a transaction, otherwise your newly inserted LOB will be committed with a zero-length as part of the implicit commit that happens when the query is executed:
// [php]
// $db = new PDO('oci:', 'scott', 'tiger');
// $stmt = $db->prepare("insert into images (id, contenttype, imagedata) " .
// "VALUES (?, ?, EMPTY_BLOB()) RETURNING imagedata INTO ?");
// $id = get_new_id(); // some function to allocate a new ID
// 
// // assume that we are running as part of a file upload form
// // You can find more information in the PHP documentation
// 
// $fp = fopen($_FILES['file']['tmp_name'], 'rb');
// 
// $stmt->bindParam(1, $id);
// $stmt->bindParam(2, $_FILES['file']['type']);
// $stmt->bindParam(3, $fp, PDO::PARAM_LOB);
// 
// $db->beginTransaction();
// $stmt->execute();
// $db->commit();
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.lobs.php
// LARGE_OBJECTS_LOBS - END
// 
// THE_PDO_CLASS - BEGIN
// The PDO class
// 
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// 
// Introduction
// Represents a connection between PHP and a database server.
// 
// Class synopsis
// [code]
// class PDO {
//    
//    /* Constants */
//    public const int PARAM_NULL;
//    public const int PARAM_BOOL = 5;
//    public const int PARAM_INT = 1;
//    public const int PARAM_STR = 2;
//    public const int PARAM_LOB = 3;
//    public const int PARAM_STMT = 4;
//    public const int PARAM_INPUT_OUTPUT;
//    public const int PARAM_STR_NATL;
//    public const int PARAM_STR_CHAR;
//    public const int PARAM_EVT_ALLOC;
//    public const int PARAM_EVT_FREE;
//    public const int PARAM_EVT_EXEC_PRE;
//    public const int PARAM_EVT_EXEC_POST;
//    public const int PARAM_EVT_FETCH_PRE;
//    public const int PARAM_EVT_FETCH_POST;
//    public const int PARAM_EVT_NORMALIZE;
//    public const int FETCH_DEFAULT;
//    public const int FETCH_LAZY;
//    public const int FETCH_ASSOC;
//    public const int FETCH_NUM;
//    public const int FETCH_BOTH;
//    public const int FETCH_OBJ;
//    public const int FETCH_BOUND;
//    public const int FETCH_COLUMN;
//    public const int FETCH_CLASS;
//    public const int FETCH_INTO;
//    public const int FETCH_FUNC;
//    public const int FETCH_GROUP;
//    public const int FETCH_UNIQUE;
//    public const int FETCH_KEY_PAIR;
//    public const int FETCH_CLASSTYPE;
//    public const int FETCH_SERIALIZE;
//    public const int FETCH_PROPS_LATE;
//    public const int FETCH_NAMED;
//    public const int ATTR_AUTOCOMMIT;
//    public const int ATTR_PREFETCH;
//    public const int ATTR_TIMEOUT;
//    public const int ATTR_ERRMODE;
//    public const int ATTR_SERVER_VERSION;
//    public const int ATTR_CLIENT_VERSION;
//    public const int ATTR_SERVER_INFO;
//    public const int ATTR_CONNECTION_STATUS;
//    public const int ATTR_CASE;
//    public const int ATTR_CURSOR_NAME;
//    public const int ATTR_CURSOR;
//    public const int ATTR_ORACLE_NULLS;
//    public const int ATTR_PERSISTENT;
//    public const int ATTR_STATEMENT_CLASS;
//    public const int ATTR_FETCH_TABLE_NAMES;
//    public const int ATTR_FETCH_CATALOG_NAMES;
//    public const int ATTR_DRIVER_NAME;
//    public const int ATTR_STRINGIFY_FETCHES;
//    public const int ATTR_MAX_COLUMN_LEN;
//    public const int ATTR_EMULATE_PREPARES;
//    public const int ATTR_DEFAULT_FETCH_MODE;
//    public const int ATTR_DEFAULT_STR_PARAM;
//    public const int ERRMODE_SILENT;
//    public const int ERRMODE_WARNING;
//    public const int ERRMODE_EXCEPTION;
//    public const int CASE_NATURAL;
//    public const int CASE_LOWER;
//    public const int CASE_UPPER;
//    public const int NULL_NATURAL;
//    public const int NULL_EMPTY_STRING;
//    public const int NULL_TO_STRING;
//    public const string ERR_NONE;
//    public const int FETCH_ORI_NEXT;
//    public const int FETCH_ORI_PRIOR;
//    public const int FETCH_ORI_FIRST;
//    public const int FETCH_ORI_LAST;
//    public const int FETCH_ORI_ABS;
//    public const int FETCH_ORI_REL;
//    public const int CURSOR_FWDONLY;
//    public const int CURSOR_SCROLL;
//    
//    /* Methods */
//    public __construct(
//        string $dsn,
//        ?string $username = null,
//        ?string $password = null,
//        ?array $options = null
//    )
//    public beginTransaction(): bool
//    public commit(): bool
//    public errorCode(): ?string
//    public errorInfo(): array
//    public exec(string $statement): int|false
//    public getAttribute(int $attribute): mixed
//    public static getAvailableDrivers(): array
//    public inTransaction(): bool
//    public lastInsertId(?string $name = null): string|false
//    public prepare(string $query, array $options = []): PDOStatement|false
//    public query(string $query, ?int $fetchMode = null): PDOStatement|false
//    public query(string $query, ?int $fetchMode = PDO::FETCH_COLUMN, int $colno): PDOStatement|false
//    public query(
//        string $query,
//        ?int $fetchMode = PDO::FETCH_CLASS,
//        string $classname,
//        array $constructorArgs
//    ): PDOStatement|false
//    public query(string $query, ?int $fetchMode = PDO::FETCH_INTO, object $object): PDOStatement|false
//    public quote(string $string, int $type = PDO::PARAM_STR): string|false
//    public rollBack(): bool
//    public setAttribute(int $attribute, mixed $value): bool
// }
// [/code]
// 
// Table of Contents
// * PDO::beginTransaction    - Initiates a transaction
// * PDO::commit              - Commits a transaction
// * PDO::__construct         - Creates a PDO instance representing a connection to a database
// * PDO::errorCode           - Fetch the SQLSTATE associated with the last operation on the database handle
// * PDO::errorInfo           - Fetch extended error information associated with the last operation on the database handle
// * PDO::exec                - Execute an SQL statement and return the number of affected rows
// * PDO::getAttribute        - Retrieve a database connection attribute
// * PDO::getAvailableDrivers - Return an array of available PDO drivers
// * PDO::inTransaction       - Checks if inside a transaction
// * PDO::lastInsertId        - Returns the ID of the last inserted row or sequence value
// * PDO::prepare             - Prepares a statement for execution and returns a statement object
// * PDO::query               - Prepares and executes an SQL statement without placeholders
// * PDO::quote               - Quotes a string for use in a query
// * PDO::rollBack            - Rolls back a transaction
// * PDO::setAttribute        - Set an attribute
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/class.pdo.php
// THE_PDO_CLASS - END
// 
// THE_PDOSTATEMENT_CLASS - BEGIN
// The PDOStatement class
// 
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// 
// Introduction
// Represents a prepared statement and, after the statement is executed, an associated result set.
// 
// Class synopsis
// [code]
// class PDOStatement implements IteratorAggregate {
//    
//    /* Properties */
//    public string $queryString;
//    
//    /* Methods */
//    public bindColumn(
//        string|int $column,
//        mixed &$var,
//        int $type = PDO::PARAM_STR,
//        int $maxLength = 0,
//        mixed $driverOptions = null
//    ): bool
//    public bindParam(
//        string|int $param,
//        mixed &$var,
//        int $type = PDO::PARAM_STR,
//        int $maxLength = 0,
//        mixed $driverOptions = null
//    ): bool
//    public bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool
//    public closeCursor(): bool
//    public columnCount(): int
//    public debugDumpParams(): ?bool
//    public errorCode(): ?string
//    public errorInfo(): array
//    public execute(?array $params = null): bool
//    public fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0): mixed
//    public fetchAll(int $mode = PDO::FETCH_DEFAULT): array
//    public fetchAll(int $mode = PDO::FETCH_COLUMN, int $column): array
//    public fetchAll(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs): array
//    public fetchAll(int $mode = PDO::FETCH_FUNC, callable $callback): array
//    public fetchColumn(int $column = 0): mixed
//    public fetchObject(?string $class = "stdClass", array $constructorArgs = []): object|false
//    public getAttribute(int $name): mixed
//    public getColumnMeta(int $column): array|false
//    public getIterator(): Iterator
//    public nextRowset(): bool
//    public rowCount(): int
//    public setAttribute(int $attribute, mixed $value): bool
//    public setFetchMode(int $mode): bool
//    public setFetchMode(int $mode = PDO::FETCH_COLUMN, int $colno): bool
//    public setFetchMode(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs = null): bool
//    public setFetchMode(int $mode = PDO::FETCH_INTO, object $object): bool
// }
// [/code]
// 
// Properties
// queryString - Used query string.
// 
// Changelog
// Version - Description
// 8.0.0   - PDOStatement implements IteratorAggregate now instead of Traversable.
// 
// Table of Contents
// * PDOStatement::bindColumn      - Bind a column to a PHP variable
// * PDOStatement::bindParam       - Binds a parameter to the specified variable name
// * PDOStatement::bindValue       - Binds a value to a parameter
// * PDOStatement::closeCursor     - Closes the cursor, enabling the statement to be executed again
// * PDOStatement::columnCount     - Returns the number of columns in the result set
// * PDOStatement::debugDumpParams - Dump an SQL prepared command
// * PDOStatement::errorCode       - Fetch the SQLSTATE associated with the last operation on the statement handle
// * PDOStatement::errorInfo       - Fetch extended error information associated with the last operation on the statement handle
// * PDOStatement::execute         - Executes a prepared statement
// * PDOStatement::fetch           - Fetches the next row from a result set
// * PDOStatement::fetchAll        - Fetches the remaining rows from a result set
// * PDOStatement::fetchColumn     - Returns a single column from the next row of a result set
// * PDOStatement::fetchObject     - Fetches the next row and returns it as an object
// * PDOStatement::getAttribute    - Retrieve a statement attribute
// * PDOStatement::getColumnMeta   - Returns metadata for a column in a result set
// * PDOStatement::getIterator     - Gets result set iterator
// * PDOStatement::nextRowset      - Advances to the next rowset in a multi-rowset statement handle
// * PDOStatement::rowCount        - Returns the number of rows affected by the last SQL statement
// * PDOStatement::setAttribute    - Set a statement attribute
// * PDOStatement::setFetchMode    - Set the default fetch mode for this statement
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/class.pdostatement.php
// THE_PDOSTATEMENT_CLASS - END
// 
// THE_PDOROW_CLASS - BEGIN
// The PDORow class
// 
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// 
// Introduction
// Represents a row from a result set returned by PDOStatement::fetch() called with PDO_FETCH_LAZY fetch mode.
// Objects of this class cannot be instantiated and are not serializable.
// The PDORow object allows access to the returned data as if both PDO::FETCH_OBJ and PDO::FETCH_BOTH mode was used. This means that the returned data can be accessed as object properties, and as an array both indexed by the column name and a column offset number.
// Caution: Accessing an undefined property returns null without emitting a warning.
// 
// Class synopsis
// [code]
// final class PDORow {
//    
//    /* Properties */
//    public string $queryString;
// }
// [/code]
// 
// Properties
// queryString - Query string used by the PDOStatement that returned the PDORow object.
// 
// Errors/Exceptions
// Throws an Error when trying to write to or unset() any property.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/class.pdorow.php
// THE_PDOROW_CLASS - END
// 
// THE_PDOEXCEPTION_CLASS - BEGIN
// The PDOException class
// 
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// 
// Introduction
// Represents an error raised by PDO. You should not throw a PDOException from your own code. See Exceptions for more information about Exceptions in PHP.
// 
// Class synopsis
// [code]
// class PDOException extends RuntimeException {
//    
//    /* Properties */
//    protected int|string $code;
//    public ?array $errorInfo = null;
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
// Properties
// errorInfo - Corresponds to PDO::errorInfo() or PDOStatement::errorInfo()
// code      - SQLSTATE error code. Use Exception::getCode() to access it.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/class.pdoexception.php
// THE_PDOEXCEPTION_CLASS - END
// 
// PDO_DRIVERS - BEGIN
// PDO Drivers
// 
// CUBRID_FUNCTIONS_PDO_CUBRID
// MICROSOFT_SQL_SERVER_AND_SYBASE_FUNCTIONS_PDO_DBLIB
// FIREBIRD_FUNCTIONS_PDO_FIREBIRD
// IBM_FUNCTIONS_PDO_IBM
// INFORMIX_FUNCTIONS_PDO_INFORMIX
// MYSQL_FUNCTIONS_PDO_MYSQL
// MICROSOFT_SQL_SERVER_FUNCTIONS_PDO_SQLSRV
// ORACLE_FUNCTIONS_PDO_OCI
// ODBC_AND_DB2_FUNCTIONS_PDO_ODBC
// POSTGRESQL_FUNCTIONS_PDO_PGSQL
// SQLITE_FUNCTIONS_PDO_SQLITE
// 
// Table of Contents
// * CUBRID (PDO)
// * MS SQL Server (PDO)
// * Firebird (PDO)
// * IBM (PDO)
// * Informix (PDO)
// * MySQL (PDO)
// * MS SQL Server (PDO)
// * Oracle (PDO)
// * ODBC and DB2 (PDO)
// * PostgreSQL (PDO)
// * SQLite (PDO)
// 
// The following drivers currently implement the PDO interface:
// Driver name  - Supported databases
// PDO_CUBRID   - Cubrid
// PDO_DBLIB    - FreeTDS / Microsoft SQL Server / Sybase
// PDO_FIREBIRD - Firebird
// PDO_IBM      - IBM DB2
// PDO_INFORMIX - IBM Informix Dynamic Server
// PDO_MYSQL    - MySQL 3.x/4.x/5.x/8.x
// PDO_OCI      - Oracle Call Interface
// PDO_ODBC     - ODBC v3 (IBM DB2, unixODBC and win32 ODBC)
// PDO_PGSQL    - PostgreSQL
// PDO_SQLITE   - SQLite 3 and SQLite 2
// PDO_SQLSRV   - Microsoft SQL Server / SQL Azure
// 
// CUBRID_FUNCTIONS_PDO_CUBRID - BEGIN
// CUBRID Functions (PDO_CUBRID)
// 
// PDO_CUBRID_DSN
// 
// Introduction
// PDO_CUBRID is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to CUBRID databases.
// Note: Current version of PDO_CUBRID doesn't support persistent connection now.
// 
// Installation
// To build the PDO_CUBRID extension, the CUBRID DBMS must be installed on the same system as PHP. PDO_CUBRID is a > PECL extension, so follow the instructions in Installation of PECL extensions to install the PDO_CUBRID extension. Issue the configure command to point to the location of the CUBRID base dir as follows:
// [code]
//    $ ./configure --with-pdo-cubrid=/path/to/CUBRID[,shared]
// [/code]
// The configure command defaults to the value of the CUBRID environment variable.
// A DLL for this PECL extension is currently unavailable. See also the building on Windows section. Detailed information about installation on Linux and Windows manually, please read build-guide.html in PECL package CUBRID for reference.
// 
// Features
// PDO_CUBRID Features
// Feature                         - Description
// Scrollable cursors              - PDO_CUBRID supports scrollable cursors. The default cursor type is forward only, and you can use parameter driver_options in PDO::prepare() to change cursor type.
// Timeout                         - PDO_CUBRID supports sql statement execution timeout setting; You can use PDO::setAttribute() to set timeout value.
// Autocommit_mode and Transaction - PDO_CUBRID supports both autocommit_mode and transaction, and autocommit_mode is enabled by default. You can use PDO::setAttribute() to change its state.
// If you use PDO::beginTransaction() to begin a transaction, it will disable autocommit_mode automatically and restore it after PDO::commit() or PDO::rollBack(). Note that before disabling the autocommit_mode, any pending work is automatically committed.
// Multiple SQL Statements         - PDO_CUBRID supports Multiple SQL statements. Multiple SQL statements are separated by semicolons (;)
// Schema Information              - PDO_CUBRID implements a function PDO::cubrid_schema() to get schema information.
// LOBs                            - PDO_CUBRID supports BLOB/CLOB data type. The LOB in PDO is represented as a stream, so you can insert LOBs by binding a stream, and get LOBs by reading a stream returned by CUBRID PDO. For example:
// [example]
// Example #1 Insert LOBs in CUBRID PDO
// [php]
// $fp = fopen('lob_test.png', 'rb');
// 
// $sql_stmt = "INSERT INTO lob_test(name, content) VALUES('lob_test.png', ?)";
// 
// $stmt = $dbh->prepare($sql_stmt);
// $ret = $stmt->bindParam(1, $fp, PDO::PARAM_LOB);
// $ret = $stmt->execute();
// [/php]
// [/example]
// [example]
// Example #2 Fetch LOBs in CUBRID PDO
// [php]
// $sql_stmt = "SELECT content FROM lob_test WHERE name='lob_test.png'";
// 
// $stmt = $dbh->prepare($sql_stmt);
// $stmt->execute();
// $result = $stmt->fetch(PDO::FETCH_NUM);
// 
// header("Content-Type: image/png");
// fpassthru($result[0]);
// [/php]
// [/example]
// Column meta                     - The PDOStatement::getColumnMeta() in CUBRID PDO will return an associative array containing the following values:
// * type
// * name
// * table
// * def
// * precision
// * scale
// * not_null
// * auto_increment
// * unique_key
// * multiple_key
// * primary_key
// * foreign_key
// * reverse_index
// * reverse_unique
// Collection Data Type            - PDO_CUBRID supports SET/MULTISET/SEQUENCE data type. If you don't specify data type, the default data type is char,for example:
// [example]
// Example #3 Insert set in CUBRID PDO with default data type.
// [php]
// $conn_str ="cubrid:dbname=demodb;host=localhost;port=33000";
// $cubrid_pdo = new PDO($conn_str, 'dba', '');
// 
// $cubrid_pdo->exec("DROP TABLE if exists test_tbl"); 
// $cubrid_pdo->exec("CREATE TABLE test_tbl (col_1 SET(VARCHAR))");
// 
// $sql_stmt_insert = "INSERT INTO test_tbl VALUES (?);";
// $stmt = $cubrid_pdo->prepare($sql_stmt_insert);
// $data = array("abc","def","ghi");
// $ret = $stmt->bindParam(1, $data, PDO::PARAM_NULL);
// $ret = $stmt->execute();
// var_Dump($ret);
// [/php]
// [/example]
// [example]
// Example #4 Specify data type when insert set in CUBRID PDO
// [php]
// $conn_str ="cubrid:dbname=demodb;host=localhost;port=33000";
// $cubrid_pdo = new PDO($conn_str, 'dba', '');
// 
// $cubrid_pdo->exec("DROP TABLE if exists test_tbl"); 
// $cubrid_pdo->exec("CREATE TABLE test_tbl (col_1 SET(int))");
// 
// $sql_stmt_insert = "INSERT INTO test_tbl VALUES (?);";
// $stmt = $cubrid_pdo->prepare($sql_stmt_insert);
// $data = array(1,2,3,4);
// $ret = $stmt->bindParam(1, $data, 0,0,"int");
// $ret = $stmt->execute();
// var_Dump($ret);
// [/php]
// [/example]
// CUBRID Bind Data Types:(The fifth parameter of PDOStatement::bindParam):
// * CHAR
// * STRING
// * NCHAR
// * VARNCHAR
// * BIT
// * VARBIT
// * NUMERIC
// * NUMBER
// * INT
// * SHORT
// * BIGINT
// * MONETARY
// * FLOAT
// * DOUBLE
// * DATE
// * TIME
// * DATETIME
// * TIMESTAMP
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// 
// The following constants can be used when setting the database attribute. They can be passed to PDO::getAttribute() or PDO::setAttribute().
// 
// PDO::CUBRID attribute flags
// Constant                           - Description
// PDO::CUBRID_ATTR_ISOLATION_LEVEL   - Transaction isolation level for the database connection.
// PDO::CUBRID_ATTR_LOCK_TIMEOUT      - Transaction timeout in seconds.
// PDO::CUBRID_ATTR_MAX_STRING_LENGTH - Read only. The maximum string length for bit, varbit, char, varchar, nchar, nchar varying data types when using CUBRID PDO API.
// 
// The following constants can be used when setting the transaction isolation level. They can be passed to PDO::getAttribute() or returned by PDO::setAttribute().
// 
// PDO::CUBRID isolation level flags
// Constant                                 - Description
// PDO::TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE - The lowest isolation level (1). A dirty, non-repeatable or phantom read may occur for the tuple and a non-repeatable read may occur for the table as well.
// PDO::TRAN_COMMIT_CLASS_COMMIT_INSTANCE   - A relatively low isolation level (2). A dirty read does not occur, but non-repeatable or phantom read may occur.
// PDO::TRAN_REP_CLASS_UNCOMMIT_INSTANCE    - The default isolation of CUBRID (3). A dirty, non-repeatable or phantom read may occur for the tuple, but repeatable read is ensured for the table.
// PDO::TRAN_REP_CLASS_COMMIT_INSTANCE      - A relatively low isolation level (4). A dirty read does not occur, but non-repeatable or phantom read may.
// PDO::TRAN_REP_CLASS_REP_INSTANCE         - A relatively high isolation level (5). A dirty or non-repeatable read does not occur, but a phantom read may.
// PDO::TRAN_SERIALIZABLE                   - The highest isolation level (6). Problems concerning concurrency (e.g. dirty read, non-repeatable read, phantom read, etc.) do not occur.
// 
// The following constants can be used when getting schema information. They can be passed to PDO::cubrid_schema().
// 
// PDO::CUBRID schema flags
// Constant                           - Description
// PDO::CUBRID_SCH_TABLE              - Get name and type of table in CUBRID.
// PDO::CUBRID_SCH_VIEW               - Get name and type of view in CUBRID.
// PDO::CUBRID_SCH_QUERY_SPEC         - Get the query definition of view.
// PDO::CUBRID_SCH_ATTRIBUTE          - Get the attributes of table column.
// PDO::CUBRID_SCH_TABLE_ATTRIBUTE    - Get the attributes of table.
// PDO::CUBRID_SCH_METHOD             - Get the instance method. The instance method is a method called by a class instance. It is used more often than the class method because most operations are executed in the instance.
// PDO::CUBRID_SCH_TABLE_METHOD       - Get the class method. The class method is a method called by a class object. It is usually used to create a new class instance or to initialize it. It is also used to access or update class attributes.
// PDO::CUBRID_SCH_METHOD_FILE        - Get the information of the file where the method of the table is defined.
// PDO::CUBRID_SCH_SUPER_TABLE        - Get the name and type of table which table inherites attributes from.
// PDO::CUBRID_SCH_SUB_TABLE          - Get the name and type of table which inherites attributes from this table.
// PDO::CUBRID_SCH_CONSTRAINT         - Get the table constraints.
// PDO::CUBRID_SCH_TRIGGER            - Get the table triggers.
// PDO::CUBRID_SCH_TABLE_PRIVILEGE    - Get the privilege information of table.
// PDO::CUBRID_SCH_COL_PRIVILEGE      - Get the privilege information of column.
// PDO::CUBRID_SCH_DIRECT_SUPER_TABLE - Get the direct super table of table.
// PDO::CUBRID_SCH_PRIMARY_KEY        - Get the table primary key.
// PDO::CUBRID_SCH_IMPORTED_KEYS      - Get imported keys of table.
// PDO::CUBRID_SCH_EXPORTED_KEYS      - Get exported keys of table.
// PDO::CUBRID_SCH_CROSS_REFERENCE    - Get reference relationship of tow tables.
// 
// Table of Contents
// * PDO_CUBRID DSN     - Connecting to CUBRID databases
// * PDO::cubrid_schema - Get the requested schema information
// 
// PDO_CUBRID_DSN - BEGIN
// PDO_CUBRID DSN
// 
// ===== ABOUT
// Connecting to CUBRID databases
// ===== DESCRIPTION
// The PDO_CUBRID Data Source Name (DSN) is composed of the following elements, delimited by semicolons:
// DSN prefix - The DSN prefix is cubrid:.
// host       - The hostname on which the database server resides.
// port       - The port on which the database server is running.
// dbname     - The name of the database.
// ===== SUPPORTED
// PECL_PDO_CUBRID >= PECL_PDO_CUBRID_8_3_0_0001
// ===== SYNTAX
// ===== CODE
// Notes
// Note: When you estalish the connection to CUBRID, you should give username and password except DSN.
// 
// [examples]
// Examples
// [example]
// Example #1 PDO_CUBRID DSN examples
// The following example shows a PDO_CUBRID DSN for connecting to a CUBRID database:
// [code]
// cubrid:host=localhost;port=33000;dbname=demodb
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-cubrid.connection.php
// PDO_CUBRID_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-cubrid.php
// CUBRID_FUNCTIONS_PDO_CUBRID - END
// 
// MICROSOFT_SQL_SERVER_AND_SYBASE_FUNCTIONS_PDO_DBLIB - BEGIN
// Microsoft SQL Server and Sybase Functions (PDO_DBLIB)
// 
// PDO_DBLIB_DSN
// 
// Introduction
// PDO_DBLIB is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to Microsoft SQL Server and Sybase databases through the FreeTDS library.
// This extension is not available anymore on Windows.
// On Windows, you should use SqlSrv, an alternative driver for MS SQL is available from Microsoft: > http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx .
// If it is not possible to use SqlSrv, you can use the PDO_ODBC driver to connect to Microsoft SQL Server and Sybase databases, as the native Windows DB-LIB is ancient, thread un-safe and no longer supported by Microsoft.
// 
// Table of Contents
// * PDO_DBLIB DSN - Connecting to Microsoft SQL Server and Sybase databases
// 
// PDO_DBLIB_DSN - BEGIN
// PDO_DBLIB DSN
// 
// ===== ABOUT
// Connecting to Microsoft SQL Server and Sybase databases
// ===== DESCRIPTION
// The PDO_DBLIB Data Source Name (DSN) is composed of the following elements:
// DSN prefix - The DSN prefix is sybase: if PDO_DBLIB was linked against the Sybase ct-lib libraries, mssql: if PDO_DBLIB was linked against the Microsoft SQL Server libraries, or dblib: if PDO_DBLIB was linked against the FreeTDS libraries.
// host       - The hostname on which the database server resides. Defaults to 127.0.0.1.
// dbname     - The name of the database.
// charset    - The client character set.
// appname    - The application name (used in sysprocesses). Defaults to "PHP Generic DB-lib" or "PHP freetds".
// secure     - Currently unused.
// ===== SUPPORTED
// PECL_PDO_DBLIB >= PECL_PDO_DBLIB_0_9_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_DBLIB DSN examples
// The following examples show a PDO_DBLIB DSN for connecting to Microsoft SQL Server and Sybase databases:
// [code]
// mssql:host=localhost;dbname=testdb
// sybase:host=localhost;dbname=testdb
// dblib:host=localhost;dbname=testdb
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-dblib.connection.php
// PDO_DBLIB_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-dblib.php
// MICROSOFT_SQL_SERVER_AND_SYBASE_FUNCTIONS_PDO_DBLIB - END
// 
// FIREBIRD_FUNCTIONS_PDO_FIREBIRD - BEGIN
// Firebird Functions (PDO_FIREBIRD)
// 
// PDO_FIREBIRD_DSN
// 
// Introduction
// PDO_FIREBIRD is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to Firebird database.
// 
// Installation
// Use --with-pdo-firebird[=DIR] to install the PDO Firebird extension, where the optional [=DIR] is the Firebird base install directory.
// [code]
// $ ./configure --with-pdo-firebird
// [/code]
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// PDO::FB_ATTR_DATE_FORMAT (int)      - Sets the date format.
// PDO::FB_ATTR_TIME_FORMAT (int)      - Sets the time format.
// PDO::FB_ATTR_TIMESTAMP_FORMAT (int) - Sets the timestamp format.
// 
// Table of Contents
// * PDO_FIREBIRD DSN - Connecting to Firebird databases
// 
// PDO_FIREBIRD_DSN - BEGIN
// PDO_FIREBIRD DSN
// 
// ===== ABOUT
// Connecting to Firebird databases
// ===== DESCRIPTION
// The PDO_FIREBIRD Data Source Name (DSN) is composed of the following elements:
// DSN prefix - The DSN prefix is firebird:.
// dbname     - The name of the database.
// charset    - The character set.
// role       - The SQL role name.
// dialect    - The dialect of the database; either 1 or 3. If not specified, the dialect defaults to 3. Available as of PHP 7.4.0.
// ===== SUPPORTED
// PECL_PDO_FIREBIRD >= PECL_PDO_FIREBIRD_0_1_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_FIREBIRD DSN example with path
// The following example shows a PDO_FIREBIRD DSN for connecting to Firebird databases:
// [code]
// firebird:dbname=/path/to/DATABASE.FDB
// [/code]
// [/example]
// [example]
// Example #2 PDO_FIREBIRD DSN example with port and path
// The following example shows a PDO_FIREBIRD DSN for connecting to a Firebird database using hostname port and path:
// [code]
// firebird:dbname=hostname/port:/path/to/DATABASE.FDB
// [/code]
// [/example]
// [example]
// Example #3 PDO_FIREBIRD DSN example with localhost and path to employee.fdb on Debian system
// The following example shows a PDO_FIREBIRD DSN for connecting to a Firebird database employee.fdb using localhost:
// [code]
// firebird:dbname=localhost:/var/lib/firebird/2.5/data/employee.fdb
// [/code]
// [/example]
// [example]
// Example #4 PDO_FIREBIRD DSN to connect to a dialect 1 database
// The following example shows a PDO_FIREBIRD DSN for connecting to a Firebird database test.fdb which has been created using dialect 1. This is only supported as of PHP 7.4.0.
// [code]
// firebird:dbname=localhost:/var/lib/firebird/2.5/data/test.fdb;charset=utf-8;dialect=1
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-firebird.connection.php
// PDO_FIREBIRD_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-firebird.php
// FIREBIRD_FUNCTIONS_PDO_FIREBIRD - END
// 
// IBM_FUNCTIONS_PDO_IBM - BEGIN
// IBM Functions (PDO_IBM)
// 
// PDO_IBM_DSN
// 
// Introduction
// PDO_IBM is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to IBM databases.
// 
// Installation
// To build the PDO_IBM extension, the DB2 Client v9.1 or later must be installed on the same system as PHP. The DB2 Client can be downloaded from the IBM > Application Development Site.
//  Note: Note
//  The DB2 Client v9.1 or later supports direct access to DB2 for Linux, UNIX, and Windows v8 and v9.1 servers.
//  The DB2 Client v9.1 also supports access to DB2 UDB for i5 and DB2 UDB for z/OS servers using the separately purchased > DB2 Connect product.
// PDO_IBM is a > PECL extension, so follow the instructions in Installation of PECL extensions to install the PDO_IBM extension. Issue the configure command to point to the location of the DB2 Client header files and libraries as follows:
// [code]
// bash$ ./configure --with-pdo-ibm=/path/to/sqllib[,shared]
// [/code]
// The configure command defaults to the value of the DB2DIR environment variable.
// 
// Runtime Configuration
// The behaviour of these functions is affected by settings in php.ini.
// 
// PDO_IBM Configuration Options
// Name                      | Default | Changeable | Changelog
// pdo_ibm.i5_dbcs_alloc     | "0"     | INI_SYSTEM | Added in PDO_IBM 1.5.0
// pdo_ibm.i5_override_ccsid | "0"     | INI_SYSTEM | Added in PDO_IBM 1.5.0
// 
// For further details and definitions of the INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// pdo_ibm.i5_dbcs_alloc int     - This options affects the internal buffer allocation strategy on IBM i. By default, this option is 0. When this option is set, buffers are allocated with a much larger size, in case the database is misleading about character size when converting between encodings. This option uses six times as much memory for buffers (to account for the largest possible UTF-8 sequences), but may be needed if truncated data is returned.
// * 0 - Minimum size buffers are allocated.
// * 1 - Larger size buffers are allocated.
// pdo_ibm.i5_override_ccsid int - The ASCII CCSID to use for conversion from EBCDIC on IBM i. Setting this to 1208 will use UTF-8. By default, this is 0, which will select the default ASCII job CCSID.
// To learn more about CCSIDs on IBM i, consult the > IBM documentation.
// 
// Table of Contents
// * PDO_IBM DSN - Connecting to IBM databases
// 
// PDO_IBM_DSN - BEGIN
// PDO_IBM DSN
// 
// ===== ABOUT
// Connecting to IBM databases
// ===== DESCRIPTION
// The PDO_IBM Data Source Name (DSN) is based on the IBM CLI DSN. The major components of the PDO_IBM DSN are:
// DSN prefix - The DSN prefix is ibm:.
// DSN - The DSN can be any of the following:
//  * a) Data source setup using db2cli.ini or odbc.ini
//  * b) Catalogued database name i.e. database alias in the DB2 client catalog
//  * c) Complete connection string in the following format: DRIVER={IBM DB2 ODBC DRIVER};DATABASE=database;HOSTNAME=hostname;PORT=port;PROTOCOL=TCPIP;UID=username;PWD=password; where the parameters represent the following values:
//    database - The name of the database.
//    hostname - The hostname or IP address of the database server.
//    port     - The TCP/IP port on which the database is listening for requests.
//    username - The username with which you are connecting to the database.
//    password - The password with which you are connecting to the database.
// ===== SUPPORTED
// PECL_PDO_IBM >= PECL_PDO_IBM_0_9_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_IBM DSN example using db2cli.ini
// The following example shows a PDO_IBM DSN for connecting to an DB2 database cataloged as DB2_9 in db2cli.ini:
// [code]
// $db = new PDO("ibm:DSN=DB2_9", "", "");
// 
// [DB2_9]
// Database=testdb
// Protocol=tcpip
// Hostname=11.22.33.444
// Servicename=56789
// [/code]
// [/example]
// [example]
// Example #2 PDO_IBM DSN example using a connection string
// The following example shows a PDO_IBM DSN for connecting to an DB2 database named testdb using the DB2 CLI connection string syntax.
// [code]
// $db = new PDO("ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=testdb;" .
//   "HOSTNAME=11.22.33.444;PORT=56789;PROTOCOL=TCPIP;", "testuser", "tespass");
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-ibm.connection.php
// PDO_IBM_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-ibm.php
// IBM_FUNCTIONS_PDO_IBM - END
// 
// INFORMIX_FUNCTIONS_PDO_INFORMIX - BEGIN
// Informix Functions (PDO_INFORMIX)
// 
// PDO_INFORMIX_DSN
// 
// Introduction
// PDO_INFORMIX is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to Informix databases.
// 
// Installation
// To build the PDO_INFORMIX extension, the Informix Client SDK 2.81 UC1 or higher must be installed on the same system as PHP. The Informix Client SDK is available from the > IBM Informix Support Site.
// PDO_INFORMIX is a > PECL extension, so follow the instructions in Installation of PECL extensions to install the PDO_INFORMIX extension. Issue the configure command to point to the location of the Informix Client SDK header files and libraries as follows:
// [code]
//    bash$ ./configure --with-pdo-informix=/path/to/SDK[,shared]
// [/code]
// The configure command defaults to the value of the INFORMIXDIR environment variable.
// 
// Scrollable cursors
// PDO_INFORMIX supports scrollable cursors; however, they are not enabled by default. To enable scrollable cursor support, you must either set ENABLESCROLLABLECURSORS=1 in the corresponding ODBC connection settings in odbc.ini or pass the EnableScrollableCursors=1 clause in the DSN connection string.
// 
// Table of Contents
// * PDO_INFORMIX DSN - Connecting to Informix databases
// 
// PDO_INFORMIX_DSN - BEGIN
// PDO_INFORMIX DSN
// 
// ===== ABOUT
// Connecting to Informix databases
// ===== DESCRIPTION
// The PDO_INFORMIX Data Source Name (DSN) is based on the Informix ODBC DSN string. Details on configuring an Informix ODBC DSN are available from the > Informix Dynamic Server Information Center. The major components of the PDO_INFORMIX DSN are:
// DSN prefix - The DSN prefix is informix:.
// DSN        - The DSN can be either a data source setup using odbc.ini or a complete > connection string.
// ===== SUPPORTED
// PECL_PDO_INFORMIX >= PECL_PDO_INFORMIX_0_1_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_INFORMIX DSN example using odbc.ini
// The following example shows a PDO_INFORMIX DSN for connecting to an Informix database cataloged as Infdrv33 in odbc.ini:
// [code]
// $db = new PDO("informix:DSN=Infdrv33", "", "");
// [ODBC Data Sources]
// Infdrv33=INFORMIX 3.3 32-BIT
// 
// [Infdrv33]
// Driver=/opt/informix/csdk_2.81.UC1G2/lib/cli/iclis09b.so
// Description=INFORMIX 3.3 32-BIT
// Database=common_db
// LogonID=testuser
// pwd=testpass
// Servername=ids_server
// DB_LOCALE=en_US.819
// OPTIMIZEAUTOCOMMIT=1
// ENABLESCROLLABLECURSORS=1
// [/code]
// [/example]
// [example]
// Example #2 PDO_INFORMIX DSN example using a connection string
// The following example shows a PDO_INFORMIX DSN for connecting to an Informix database named common_db using the Informix connection string syntax.
// [code]
// $db = new PDO("informix:host=host.domain.com; service=9800;
//     database=common_db; server=ids_server; protocol=onsoctcp;
//     EnableScrollableCursors=1", "testuser", "tespass");
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-informix.connection.php
// PDO_INFORMIX_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-informix.php
// INFORMIX_FUNCTIONS_PDO_INFORMIX - END
// 
// MYSQL_FUNCTIONS_PDO_MYSQL - BEGIN
// MySQL Functions (PDO_MYSQL)
// 
// PDO_MYSQL_DSN
// 
// Introduction
// PDO_MYSQL is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to MySQL databases.
// PDO_MYSQL uses emulated prepares by default.
// MySQL 8
// When running a PHP version before 7.1.16, or PHP 7.2 before 7.2.4, set MySQL 8 Server's default password plugin to mysql_native_password or else you will see errors similar to The server requested authentication method unknown to the client [caching_sha2_password] even when caching_sha2_password is not used.
// This is because MySQL 8 defaults to caching_sha2_password, a plugin that is not recognized by the older PHP (mysqlnd) releases. Instead, change it by setting default_authentication_plugin=mysql_native_password in my.cnf. The caching_sha2_password plugin is fully supported as of PHP 7.4.4. For older releases, the mysql_xdevapi extension does support it.
// Warning: Beware: Some MySQL table types (storage engines) do not support transactions. When writing transactional database code using a table type that does not support transactions, MySQL will pretend that a transaction was initiated successfully. In addition, any DDL queries issued will implicitly commit any pending transactions.
// Note: The MySQL driver does not properly support PDO::PARAM_INPUT_OUTPUT via PDOStatement::bindParam(); while such parameters can be used, they are not updated (i.e. the actual output is ignored).
// 
// Installation
// The common Unix distributions include binary versions of PHP that can be installed. Although these binary versions are typically built with support for the MySQL extensions, the extension libraries themselves may need to be installed using an additional package. Check the package manager that comes with your chosen distribution for availability.
// For example, on Ubuntu the php5-mysql package installs the ext/mysql, ext/mysqli, and PDO_MYSQL PHP extensions. On CentOS, the php-mysql package also installs these three PHP extensions.
// Alternatively, you can compile this extension yourself. Building PHP from source allows you to specify the MySQL extensions you want to use, as well as your choice of client library for each extension.
// When compiling, use --with-pdo-mysql[=DIR] to install the PDO MySQL extension, where the optional [=DIR] is the MySQL base library. Mysqlnd is the default library. For details about choosing a library, see Choosing a MySQL library.
// Optionally, the --with-mysql-sock[=DIR] sets to location to the MySQL unix socket pointer for all MySQL extensions, including PDO_MYSQL. If unspecified, the default locations are searched.
// Optionally, the --with-zlib-dir[=DIR] is used to set the path to the libz install prefix.
// [code]
// $ ./configure --with-pdo-mysql --with-mysql-sock=/var/mysql/mysql.sock
// [/code]
// SSL support is enabled using the appropriate PDO_MySQL constants, which is equivalent to calling the > MySQL C API function mysql_ssl_set(). Also, SSL cannot be enabled with PDO::setAttribute because the connection already exists. See also the MySQL documentation about > connecting to MySQL with SSL.
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// PDO::MYSQL_ATTR_USE_BUFFERED_QUERY (bool)       - By default all statements are executed in buffered mode. If this attribute is set to false on a PDO object, the MySQL driver will use the unbuffered mode.
// [example]
// Example #1 Setting MySQL unbuffered mode
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
// PDO::MYSQL_ATTR_LOCAL_INFILE (int)              - Enable LOAD LOCAL INFILE.
// Note, this constant can only be used in the driver_options array when constructing a new database handle.
// PDO::MYSQL_ATTR_LOCAL_INFILE_DIRECTORY (string) - Allows restricting LOCAL DATA loading to files located in this designated directory. Available as of PHP 8.1.0.
// Note, this constant can only be used in the driver_options array when constructing a new database handle.
// PDO::MYSQL_ATTR_INIT_COMMAND (string)           - Command to execute when connecting to the MySQL server. Will automatically be re-executed when reconnecting.
// Note, this constant can only be used in the driver_options array when constructing a new database handle.
// PDO::MYSQL_ATTR_READ_DEFAULT_FILE (int)         - Read options from the named option file instead of from my.cnf. This option is not available if mysqlnd is used, because mysqlnd does not read the mysql configuration files.
// PDO::MYSQL_ATTR_READ_DEFAULT_GROUP (int)        - Read options from the named group from my.cnf or the file specified with MYSQL_READ_DEFAULT_FILE. This option is not available if mysqlnd is used, because mysqlnd does not read the mysql configuration files.
// PDO::MYSQL_ATTR_MAX_BUFFER_SIZE (int)           - Maximum buffer size. Defaults to 1 MiB. This constant is not supported when compiled against mysqlnd.
// PDO::MYSQL_ATTR_DIRECT_QUERY (int)              - Perform direct queries, don't use prepared statements.
// PDO::MYSQL_ATTR_FOUND_ROWS (int)                - Return the number of found (matched) rows, not the number of changed rows.
// PDO::MYSQL_ATTR_IGNORE_SPACE (int)              - Permit spaces after function names. Makes all functions names reserved words.
// PDO::MYSQL_ATTR_COMPRESS (int)                  - Enable network communication compression.
// PDO::MYSQL_ATTR_SSL_CA (int)                    - The file path to the SSL certificate authority.
// PDO::MYSQL_ATTR_SSL_CAPATH (int)                - The file path to the directory that contains the trusted SSL CA certificates, which are stored in PEM format.
// PDO::MYSQL_ATTR_SSL_CERT (int)                  - The file path to the SSL certificate.
// PDO::MYSQL_ATTR_SSL_CIPHER (int)                - A list of one or more permissible ciphers to use for SSL encryption, in a format understood by OpenSSL. For example: DHE-RSA-AES256-SHA:AES128-SHA
// PDO::MYSQL_ATTR_SSL_KEY (int)                   - The file path to the SSL key.
// PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT (int)    - Provides a way to disable verification of the server SSL certificate. This option is available only with mysqlnd.
// This exists as of PHP 7.0.18 and PHP 7.1.4.
// PDO::MYSQL_ATTR_MULTI_STATEMENTS (int)          - Disables multi query execution in both PDO::prepare() and PDO::query() when set to false.
// Note, this constant can only be used in the driver_options array when constructing a new database handle.
// 
// Runtime Configuration
// The behaviour of these functions is affected by settings in php.ini.
// 
// PDO_MYSQL Configuration Options
// Name                     | Default           | Changeable
// pdo_mysql.default_socket | "/tmp/mysql.sock" | INI_SYSTEM
// pdo_mysql.debug          | NULL              | INI_SYSTEM
// 
// For further details and definitions of the INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// pdo_mysql.default_socket string - Sets a Unix domain socket. This value can either be set at compile time if a domain socket is found at configure. This ini setting is Unix only.
// pdo_mysql.debug bool            - Enables debugging for PDO_MYSQL. This setting is only available when PDO_MYSQL is compiled against mysqlnd and in PDO debug mode.
// 
// Table of Contents
// * PDO_MYSQL DSN - Connecting to MySQL databases
// 
// PDO_MYSQL_DSN - BEGIN
// PDO_MYSQL DSN
// 
// ===== ABOUT
// Connecting to MySQL databases
// ===== DESCRIPTION
// The PDO_MYSQL Data Source Name (DSN) is composed of the following elements:
// DSN prefix  - The DSN prefix is mysql:.
// host        - The hostname on which the database server resides.
// port        - The port number where the database server is listening.
// dbname      - The name of the database.
// unix_socket - The MySQL Unix socket (shouldn't be used with host or port).
// charset     - The character set. See the character set concepts documentation for more information.
// ===== SUPPORTED
// PECL_PDO_MYSQL >= PECL_PDO_MYSQL_0_1_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_MYSQL DSN examples
// The following example shows a PDO_MYSQL DSN for connecting to MySQL databases:
// [code]
// mysql:host=localhost;dbname=testdb
// More complete examples:
// mysql:host=localhost;port=3307;dbname=testdb
// mysql:unix_socket=/tmp/mysql.sock;dbname=testdb
// [/code]
// [/example]
// [/examples]
// 
// Notes
//  Note: Unix only:
//  When the host name is set to "localhost", then the connection to the server is made through a domain socket. If PDO_MYSQL is compiled against libmysqlclient then the location of the socket file is at libmysqlclient's compiled in location. If PDO_MYSQL is compiled against mysqlnd a default socket can be set through the pdo_mysql.default_socket setting.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-mysql.connection.php
// PDO_MYSQL_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-mysql.php
// MYSQL_FUNCTIONS_PDO_MYSQL - END
// 
// MICROSOFT_SQL_SERVER_FUNCTIONS_PDO_SQLSRV - BEGIN
// Microsoft SQL Server Functions (PDO_SQLSRV)
// 
// PDO_SQLSRV_DSN
// 
// Introduction
// PDO_SQLSRV is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to MS SQL Server (starting with SQL Server 2005) and SQL Azure databases.
// 
// Installation
// The most recent version of the driver is available for download here: > SQLSRV download. The driver sources are hosted in a > public repository.
// For more information about system requirements, see > SQLSRV System Requirements.
// On Windows the PDO_SQLSRV extension is enabled by downloading and adding appropriate DLL files to the PHP extension directory and the corresponding entry to the php.ini file.
// On Linux and macOS, the PDO_SQLSRV extension can be installed using > PECL. See the > installation tutorial for details.
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// PDO::SQLSRV_TXN_READ_UNCOMMITTED (int) - This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. This constant sets the transaction isolation level for the connection to Read Uncommitted.
// PDO::SQLSRV_TXN_READ_COMMITTED (int)   - This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. This constant sets the transaction isolation level for the connection to Read Committed.
// PDO::SQLSRV_TXN_REPEATABLE_READ (int)  - This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. This constant sets the transaction isolation level for the connection to Repeateable Read.
// PDO::SQLSRV_TXN_SNAPSHOT (int)         - This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. This constant sets the transaction isolation level for the connection to Snapshot.
// PDO::SQLSRV_TXN_SERIALIZABLE (int)     - This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. This constant sets the transaction isolation level for the connection to Serializable.
// PDO::SQLSRV_ENCODING_BINARY (int)      - Specifies that data is sent/retrieved as a raw byte stream to/from the server without performing encoding or translation. This constant can be passed to PDOStatement::setAttribute, PDO::prepare, PDOStatement::bindColumn, and PDOStatement::bindParam.
// PDO::SQLSRV_ENCODING_SYSTEM (int)      - Specifies that data is sent/retrieved to/from the server as 8-bit characters as specified in the code page of the Windows locale that is set on the system. Any multi-byte characters or characters that do not map into this code page are substituted with a single byte question mark (?) character. This constant can be passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare, PDOStatement::bindColumn, and PDOStatement::bindParam.
// PDO::SQLSRV_ENCODING_UTF8 (int)        - Specifies that data is sent/retrieved to/from the server in UTF-8 encoding. This is the default encoding. This constant can be passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare, PDOStatement::bindColumn, and PDOStatement::bindParam.
// PDO::SQLSRV_ENCODING_DEFAULT (int)     - Specifies that data is sent/retrieved to/from the server according to PDO::SQLSRV_ENCODING_SYSTEM if specified during connection. The connection's encoding is used if specified in a prepare statement. This constant can be passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare, PDOStatement::bindColumn, and PDOStatement::bindParam.
// PDO::SQLSRV_ATTR_QUERY_TIMEOUT (int)   - A non-negative integer representing the timeout period, in seconds. Zero (0) is the default and means no timeout. This constant can be passed to PDOStatement::setAttribute, PDO::setAttribute, and PDO::prepare.
// PDO::SQLSRV_ATTR_DIRECT_QUERY (int)    - Indicates that a query should be executed directly, without being prepared. This constant can be passed to PDO::setAttribute, and PDO::prepare. For more information, see > Direct and Prepared Statement Execution.
// 
// Table of Contents
// * PDO_SQLSRV DSN - Connecting to MS SQL Server and SQL Azure databases
// 
// PDO_SQLSRV_DSN - BEGIN
// PDO_SQLSRV DSN
// 
// ===== ABOUT
// Connecting to MS SQL Server and SQL Azure databases
// ===== DESCRIPTION
// The PDO_SQLSRV Data Source Name (DSN) is composed of the following elements:
// DSN prefix               - The DSN prefix is sqlsrv:.
// APP                      - The application name used in tracing.
// ConnectionPooling        - Specifies whether the connection is assigned from a connection pool (1 or true) or not (0 or false).
// Database                 - The name of the database.
// Encrypt                  - Specifies whether the communication with SQL Server is encrypted (1 or true) or unencrypted (0 or false).
// Failover_Partner         - Specifies the server and instance of the database's mirror (if enabled and configured) to use when the primary server is unavailable.
// LoginTimeout             - Specifies the number of seconds to wait before failing the connection attempt.
// MultipleActiveResultSets - Disables or explicitly enables support for multiple active Result sets (MARS).
// QuotedId                 - Specifies whether to use SQL-92 rules for quoted identifiers (1 or true) or to use legacy Transact-SQL rules (0 or false).
// Server                   - The name of the database server.
// TraceFile                - Specifies the path for the file used for trace data.
// TraceOn                  - Specifies whether ODBC tracing is enabled (1 or true) or disabled (0 or false) for the connection being established.
// TransactionIsolation     - Specifies the transaction isolation level. The accepted values for this option are PDO::SQLSRV_TXN_READ_UNCOMMITTED, PDO::SQLSRV_TXN_READ_COMMITTED, PDO::SQLSRV_TXN_REPEATABLE_READ, PDO::SQLSRV_TXN_SNAPSHOT, and PDO::SQLSRV_TXN_SERIALIZABLE.
// TrustServerCertificate   - Specifies whether the client should trust (1 or true) or reject (0 or false) a self-signed server certificate.
// WSID                     - Specifies the name of the computer for tracing.
// ===== SUPPORTED
// PECL_pdo_sqlsrv >= PECL_pdo_sqlsrv_2_0_1
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_SQLSRV DSN examples
// The following example shows how to connecto to a specified MS SQL Server database:
// [code]
// $c = new PDO("sqlsrv:Server=localhost;Database=testdb", "UserName", "Password");
// [/code]
// The following example shows how to connect to a MS SQL Server database on a specified port:
// [code]
// $c = new PDO("sqlsrv:Server=localhost,1521;Database=testdb", "UserName", "Password");
// [/code]
// The following example shows how to connecto to a SQL Azure database with server ID 12345abcde. Note that when you connect to SQL Azure with PDO, your username will be UserName@12345abcde (UserName@ServerId).
// [code]
// $c = new PDO("sqlsrv:Server=12345abcde.database.windows.net;Database=testdb", "UserName@12345abcde", "Password");
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-sqlsrv.connection.php
// PDO_SQLSRV_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-sqlsrv.php
// MICROSOFT_SQL_SERVER_FUNCTIONS_PDO_SQLSRV - END
// 
// ORACLE_FUNCTIONS_PDO_OCI - BEGIN
// Oracle Functions (PDO_OCI)
// 
// PDO_OCI_DSN
// 
// Installation
// If the Oracle Database is on the same machine as PHP, the database software already contains the necessary libraries. When PHP is on a different machine, use the free > Oracle Instant Client libraries. For details refer to the OCI8 Requirements section.
// Use --with-pdo-oci[=DIR] to install the PDO Oracle OCI extension, where the optional [=DIR] is the Oracle Home directory. [=DIR] defaults to the $ORACLE_HOME environment variable.
// Use --with-pdo-oci=instantclient,prefix,version for an Oracle Instant Client SDK, where prefix and version are configured.
// [code]
// // Using $ORACLE_HOME
// $ ./configure --with-pdo-oci
// 
// // Using OIC for Linux with 10.2.0.3 RPMs with a /usr prefix
// $ ./configure --with-pdo-oci=instantclient,/usr,10.2.0.3
// [/code]
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// PDO::OCI_ATTR_ACTION (int)            - Provides a way to specify the action on the database session.
// This exists as of PHP 7.2.16 and 7.3.3
// PDO::OCI_ATTR_CLIENT_INFO (int)       - Provides a way to specify the client info on the database session.
// This exists as of PHP 7.2.16 and 7.3.3
// PDO::OCI_ATTR_CLIENT_IDENTIFIER (int) - Provides a way to specify the client identifier on the database session.
// This exists as of PHP 7.2.16 and 7.3.3
// PDO::OCI_ATTR_MODULE (int)            - Provides a way to specify the module on the database session.
// This exists as of PHP 7.2.16 and 7.3.3
// 
// Table of Contents
// * PDO_OCI DSN - Connecting to Oracle databases
// 
// PDO_OCI_DSN - BEGIN
// PDO_OCI DSN
// 
// ===== ABOUT
// Connecting to Oracle databases
// ===== DESCRIPTION
// The PDO_OCI Data Source Name (DSN) is composed of the following elements:
// DSN prefix                     - The DSN prefix is oci:.
// dbname (Oracle Instant Client) - The URI for the Oracle Instant Client connection takes the form of dbname=//hostname:port-number/database. If you are connecting to a database defined in tnsnames.ora, use only the name of the database: dbname=database.
// charset                        - The client-side character set for the current environment handle.
// ===== SUPPORTED
// PECL_PDO_OCI >= PECL_PDO_OCI_0_1_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_OCI DSN examples
// The following examples show a PDO_OCI DSN for connecting to Oracle databases:
// [code]
// // Connect to a database defined in tnsnames.ora
// oci:dbname=mydb
// 
// // Connect using the Oracle Instant Client
// oci:dbname=//localhost:1521/mydb
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-oci.connection.php
// PDO_OCI_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-oci.php
// ORACLE_FUNCTIONS_PDO_OCI - END
// 
// ODBC_AND_DB2_FUNCTIONS_PDO_ODBC - BEGIN
// ODBC and DB2 Functions (PDO_ODBC)
// 
// PDO_ODBC_DSN
// 
// Introduction
// PDO_ODBC is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to databases through ODBC drivers or through the IBM DB2 Call Level Interface (DB2 CLI) library. PDO_ODBC currently supports three different "flavours" of database drivers:
// ibm-db2  - Supports access to IBM DB2 Universal Database, Cloudscape, and Apache Derby servers through the free DB2 express-C client.
// unixODBC - Supports access to database servers through the unixODBC driver manager and the database's own ODBC drivers.
// generic  - Offers a compile option for ODBC driver managers that are not explicitly supported by PDO_ODBC.
// On Windows, php_pdo_odbc.dll has to be enabled as extension in php.ini. It is linked against the Windows ODBC Driver Manager so that PHP can connect to any database cataloged as a System DSN.
// 
// Installation
// PDO_ODBC on UNIX systems
// 1. PDO_ODBC is included in the PHP source. You can compile the PDO_ODBC extension as either a static or shared module using the following configure commands.
//  ibm_db2
//  [code]
//  ./configure --with-pdo-odbc=ibm-db2,/opt/IBM/db2/V8.1/
//  [/code]
//  To build PDO_ODBC with the ibm-db2 flavour, you have to have previously installed the DB2 application development headers on the same machine on which you are compiling PDO_ODBC. The DB2 application development headers are an installable option in the DB2 servers, and are also available as part of the DB2 Application Development Client freely available for download from the IBM developerWorks > website.
//  If you do not supply a location for the DB2 libraries and headers to the configure command, PDO_ODBC defaults to /home/db2inst1/sqllib.
//  unixODBC
//  [code]
//  ./configure --with-pdo-odbc=unixODBC,/usr/local
//  [/code]
//  If you do not supply a location for the unixODBC libraries and headers to the configure command, PDO_ODBC defaults to /usr/local.
//  generic
//  [code]
//  ./configure --with-pdo-odbc=generic,/usr/local,libname,ldflags,cflags
//  [/code]
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// PDO::ODBC_ATTR_USE_CURSOR_LIBRARY (int) - This option controls whether the ODBC cursor library is used. The ODBC cursor library supports some advanced ODBC features (e.g. block scrollable cursors), which may not be implemented by the driver. The following values are supported:
//  * PDO::ODBC_SQL_USE_IF_NEEDED (the default) : use the ODBC cursor library when needed.
//  * PDO::ODBC_SQL_USE_DRIVER                  : never use the ODBC cursor library.
//  * PDO::ODBC_SQL_USE_ODBC                    : always use the ODBC cursor library.
// PDO::ODBC_ATTR_ASSUME_UTF8 (bool)       - Windows only. If true, UTF-16 encoded character data (CHAR, VARCHAR and LONGVARCHAR) is converted to UTF-8 when reading from or writing data to the database. If false (the default), character encoding conversion may be done by the driver.
// 
// Runtime Configuration
// The behaviour of these functions is affected by settings in php.ini.
// 
// PDO_ODBC Configuration Options
// Name                        | Default  | Changeable | Changelog
// pdo_odbc.connection_pooling | "strict" | INI_ALL    |
// pdo_odbc.db2_instance_name  | NULL     | INI_SYSTEM | This deprecated feature will certainly be removed in the future.
// 
// For further details and definitions of the INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// pdo_odbc.connection_pooling string - Whether to pool ODBC connections. Can be one of "strict", "relaxed" or "off" (equals to ""). The parameter describes how strict the connection manager should be when matching connection parameters to existing pooled connections. strict is the recommend default, and will result in the use of cached connections only when all the connection parameters match exactly. relaxed will result in the use of cached connections when similar connection parameters are used. This can result in increased use of the cache, at the risk of bleeding connection information between (for example) virtual hosts.
// This setting can only be changed from the php.ini file, and affects the entire process; any other modules loaded into the process that use the same ODBC libraries will be affected too, including the Unified ODBC extension.
// Warning: relaxed matching should not be used on a shared server, for security reasons.
// Tip: Leave this setting at the default strict setting unless you have good reason to change it.
// pdo_odbc.db2_instance_name string  - If you compile PDO_ODBC using the db2 flavour, this setting sets the value of the DB2INSTANCE environment variable on Linux and UNIX operating systems to the specified name of the DB2 instance. This enables PDO_ODBC to resolve the location of the DB2 libraries and make cataloged connections to DB2 databases.
// This setting can only be changed from the php.ini file, and affects the entire process; any other modules loaded into the process that use the same ODBC libraries will be affected too, including the Unified ODBC extension.
// This setting has no effect on Windows.
// 
// Table of Contents
// * PDO_ODBC DSN - Connecting to ODBC or DB2 databases
// 
// PDO_ODBC_DSN - BEGIN
// PDO_ODBC DSN
// 
// ===== ABOUT
// Connecting to ODBC or DB2 databases
// ===== DESCRIPTION
// The PDO_ODBC Data Source Name (DSN) is composed of the following elements:
// DSN prefix - The DSN prefix is odbc:. If you are connecting to a database cataloged in the ODBC driver manager or the DB2 catalog, you can append the cataloged name of the database to the DSN.
// DSN        - The name of the database as cataloged in the ODBC driver manager or the DB2 catalog. Alternately, you can provide a complete ODBC connection string to connect to a database as described at > http://www.connectionstrings.com/.
// UID        - The name of the user for the connection. If you specify the user name in the DSN, PDO ignores the value of the user name argument in the PDO constructor.
// PWD        - The password of the user for the connection. If you specify the password in the DSN, PDO ignores the value of the password argument in the PDO constructor.
// ===== SUPPORTED
// PECL_PDO_ODBC >= PECL_PDO_ODBC_0_1_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_ODBC DSN example (ODBC driver manager)
// The following example shows a PDO_ODBC DSN for connecting to an ODBC database cataloged as testdb in the ODBC driver manager:
// [code]
// odbc:testdb
// [/code]
// [/example]
// [example]
// Example #2 PDO_ODBC DSN example (IBM DB2 uncataloged connection)
// The following example shows a PDO_ODBC DSN for connecting to an IBM DB2 database named SAMPLE using the full ODBC DSN syntax:
// [code]
// odbc:DRIVER={IBM DB2 ODBC DRIVER};HOSTNAME=localhost;PORT=50000;DATABASE=SAMPLE;PROTOCOL=TCPIP;UID=db2inst1;PWD=ibmdb2;
// [/code]
// [/example]
// [example]
// Example #3 PDO_ODBC DSN example (Microsoft Access uncataloged connection)
// The following example shows a PDO_ODBC DSN for connecting to a Microsoft Access database stored at C:\db.mdb using the full ODBC DSN syntax:
// [code]
// odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=C:\\db.mdb;Uid=Admin
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-odbc.connection.php
// PDO_ODBC_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-odbc.php
// ODBC_AND_DB2_FUNCTIONS_PDO_ODBC - END
// 
// POSTGRESQL_FUNCTIONS_PDO_PGSQL - BEGIN
// PostgreSQL Functions (PDO_PGSQL)
// 
// PDO_PGSQL_DSN
// 
// Introduction
// PDO_PGSQL is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to PostgreSQL databases.
// 
// Resource Types
// This extension defines a stream resource returned by PDO::pgsqlLOBOpen().
// 
// Installation
// Use --with-pdo-pgsql[=DIR] to install the PDO PostgreSQL extension, where the optional [=DIR] is the PostgreSQL base install directory, or the path to pg_config.
// [code]
// $ ./configure --with-pdo-pgsql
// [/code]
// 
// Predefined Constants
// The constants below are defined by this driver, and will only be available when the extension has been either compiled into PHP or dynamically loaded at runtime. In addition, these driver-specific constants should only be used if you are using this driver. Using driver-specific attributes with another driver may result in unexpected behaviour. PDO::getAttribute() may be used to obtain the PDO::ATTR_DRIVER_NAME attribute to check the driver, if your code can run against multiple drivers.
// PDO::PGSQL_ATTR_DISABLE_PREPARES (int) - Send the query and the parameters to the server together in a single call, avoiding the need to create a named prepared statement separately. If the query is only going to be executed once this can reduce latency by avoiding an unnecessary server round-trip.
// 
// General notes
// Note: bytea fields are returned as streams.
// 
// Table of Contents
// * PDO_PGSQL DSN           - Connecting to PostgreSQL databases
// * PDO::pgsqlCopyFromArray - Copy data from PHP array into table
// * PDO::pgsqlCopyFromFile  - Copy data from file into table
// * PDO::pgsqlCopyToArray   - Copy data from database table into PHP array
// * PDO::pgsqlCopyToFile    - Copy data from table into file
// * PDO::pgsqlGetNotify     - Get asynchronous notification
// * PDO::pgsqlGetPid        - Get the server PID
// * PDO::pgsqlLOBCreate     - Creates a new large object
// * PDO::pgsqlLOBOpen       - Opens an existing large object stream
// * PDO::pgsqlLOBUnlink     - Deletes the large object
// 
// PDO_PGSQL_DSN - BEGIN
// PDO_PGSQL DSN
// 
// ===== ABOUT
// Connecting to PostgreSQL databases
// ===== DESCRIPTION
// The PDO_PGSQL Data Source Name (DSN) is composed of the following elements, delimited by spaces or semicolons:
// DSN prefix - The DSN prefix is pgsql:.
// host       - The hostname on which the database server resides.
// port       - The port on which the database server is running.
// dbname     - The name of the database.
// user       - The name of the user for the connection. If you specify the user name in the DSN, PDO ignores the value of the user name argument in the PDO constructor.
// password   - The password of the user for the connection. If you specify the password in the DSN, PDO ignores the value of the password argument in the PDO constructor.
// sslmode    - The SSL mode. Supported values and their meaning are listed in the > PostgreSQL Documentation.
// Note: All semicolons in the DSN string are replaced by spaces, because PostgreSQL expects this format. This implies that semicolons in any of the components (e.g. password or dbname) are not supported.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PECL_PDO_PGSQL >= PECL_PDO_PGSQL_0_1_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_PGSQL DSN examples
// The following example shows a PDO_PGSQL DSN for connecting to a PostgreSQL database:
// [code]
// pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
// [/code]
// The following example shows a PDO_PGSQL DSN for connecting to a PostgreSQL database via unix socket /tmp/.s.PGSQL.5432:
// [code]
// pgsql:host=/tmp;port=5432;dbname=testdb;user=bruce;password=mypass
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-pgsql.connection.php
// PDO_PGSQL_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-pgsql.php
// POSTGRESQL_FUNCTIONS_PDO_PGSQL - END
// 
// SQLITE_FUNCTIONS_PDO_SQLITE - BEGIN
// SQLite Functions (PDO_SQLITE)
// 
// PDO_SQLITE_DSN
// 
// Introduction
// PDO_SQLITE is a driver that implements the PHP Data Objects (PDO) interface to enable access to SQLite 3 databases.
// Note: PDO_SQLITE allows using strings apart from streams together with PDO::PARAM_LOB.
// 
// Installation
// The PDO_SQLITE PDO driver is enabled by default. To disable, --without-pdo-sqlite[=DIR] may be used, where the optional [=DIR] is the sqlite base install directory. As of PHP 7.4.0 > libsqlite ≥ 3.5.0 is required. Formerly, the bundled libsqlite could have been used instead, and was the default, if [=DIR] has been omitted.
//  Note: Additional setup on Windows as of PHP 7.4.0
//  In order for this extension to work, there are DLL files that must be available to the Windows system PATH. For information on how to do this, see the FAQ entitled "How do I add my PHP directory to the PATH on Windows". Although copying DLL files from the PHP folder into the Windows system directory also works (because the system directory is by default in the system's PATH), this is not recommended. This extension requires the following files to be in the PATH: libsqlite3.dll.
// 
// Table of Contents
// * PDO_SQLITE DSN             - Connecting to SQLite databases
// * PDO::sqliteCreateAggregate - Registers an aggregating User Defined Function for use in SQL statements
// * PDO::sqliteCreateCollation - Registers a User Defined Function for use as a collating function in SQL statements
// * PDO::sqliteCreateFunction  - Registers a User Defined Function for use in SQL statements
// 
// PDO_SQLITE_DSN - BEGIN
// PDO_SQLITE DSN
// 
// ===== ABOUT
// Connecting to SQLite databases
// ===== DESCRIPTION
// The PDO_SQLITE Data Source Name (DSN) is composed of the following elements:
// DSN prefix (SQLite 3) - The DSN prefix is sqlite:.
// * To access a database on disk, the absolute path has to be appended to the DSN prefix.
// * To create a database in memory, :memory: has to be appended to the DSN prefix.
// * If the DSN consists of the DSN prefix only, a temporary database is used, which is deleted when the connection is closed.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PECL_PDO_SQLITE >= PECL_PDO_SQLITE_0_2_0
// ===== SYNTAX
// ===== CODE
// [examples]
// Examples
// [example]
// Example #1 PDO_SQLITE DSN examples
// The following examples show PDO_SQLITE DSN for connecting to SQLite databases:
// [code]
// sqlite:/opt/databases/mydb.sq3
// sqlite::memory:
// sqlite:
// [/code]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/ref.pdo-sqlite.connection.php
// PDO_SQLITE_DSN - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/ref.pdo-sqlite.php
// SQLITE_FUNCTIONS_PDO_SQLITE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.drivers.php
// PDO_DRIVERS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/book.pdo.php
// PHP_DATA_OBJECTS - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO 
// ============================== PUBLIC
// PHP_DATABASE_ABSTRACT_PDO_PDO_BEGINTRANSACTION - bool php_database_abstract_pdo_pdo_begintransaction(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_COMMIT - bool php_database_abstract_pdo_pdo_commit(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_CONSTRUCT - PDO php_database_abstract_pdo_pdo_construct(string $dsn, string $username = null, string $password = null, array $options = null)
// PHP_DATABASE_ABSTRACT_PDO_PDO_ERRORCODE - string php_database_abstract_pdo_pdo_errorcode(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_ERRORINFO - array php_database_abstract_pdo_pdo_errorinfo(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_EXEC - int|false php_database_abstract_pdo_pdo_exec(PDO $pdo, string $statement)
// PHP_DATABASE_ABSTRACT_PDO_PDO_GETATTRIBUTE - mixed php_database_abstract_pdo_pdo_getattribute(PDO $pdo, int $attribute)
// PHP_DATABASE_ABSTRACT_PDO_PDO_GETAVAILABLEDRIVERS - array php_database_abstract_pdo_pdo_getavailabledrivers(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_INTRANSACTION - PDO php_database_abstract_pdo_pdo_intransaction(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_LASTINSERTID - string|false php_database_abstract_pdo_pdo_lastinsertid(PDO $pdo, string $name = null)
// PHP_DATABASE_ABSTRACT_PDO_PDO_PREPARE - PDOStatement|false php_database_abstract_pdo_pdo_prepare(PDO $pdo, string $query, array $options = array())
// PHP_DATABASE_ABSTRACT_PDO_PDO_QUERY - PDOStatement|false php_database_abstract_pdo_pdo_query(PDO $pdo, string $query, int $fetchMode = null)
// PHP_DATABASE_ABSTRACT_PDO_PDO_QUOTE - string|false php_database_abstract_pdo_pdo_quote(PDO $pdo, string $string, int $type = PDO::PARAM_STR)
// PHP_DATABASE_ABSTRACT_PDO_PDO_ROLLBACK - bool php_database_abstract_pdo_pdo_rollback(PDO $pdo)
// PHP_DATABASE_ABSTRACT_PDO_PDO_SETATTRIBUTE - bool php_database_abstract_pdo_pdo_setattribute(PDO $pdo, int $attribute, mixed $value)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_1_0_3
// ============================== USING SUBCLASSES (15)
// PDO::beginTransaction() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::commit() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::__construct() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::errorCode() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::errorInfo() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::exec() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::getAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// PDO::getAvailableDrivers() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_3
// PDO::inTransaction() - PHP_5 >= PHP_5_3_3, Bundled pdo_pgsql, PHP_7, PHP_8
// PDO::lastInsertId() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::prepare() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::query() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// PDO::quote() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_1
// PDO::rollBack() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDO::setAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== USING DATA_TYPES (8)
// bool
// PDO - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// string
// array
// int
// false
// mixed
// PDOStatement - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_BEGINTRANSACTION
// ============================== PUBLIC
// ============================== ABOUT
// Initiates a transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::beginTransaction() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_begintransaction($pdo)
{
$return_pdo_begintransaction = false;

// ========== PDO_BEGINTRANSACTION - BEGIN
// ===== ABOUT
// Initiates a transaction
// ===== DESCRIPTION
// Turns off autocommit mode. While autocommit mode is turned off, changes made to the database via the PDO object instance are not committed until you end the transaction by calling PDO::commit(). Calling PDO::rollBack() will roll back all changes to the database and return the connection to autocommit mode.
// Some databases, including MySQL, automatically issue an implicit COMMIT when a database definition language (DDL) statement such as DROP TABLE or CREATE TABLE is issued within a transaction. The implicit COMMIT will prevent you from rolling back any other changes within the transaction boundary.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::beginTransaction(): bool
// ===== CODE
$return_pdo_begintransaction = $pdo->beginTransaction(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws a PDOException if there is already a transaction started or the driver does not support transactions.
// Note: An exception is raised even when the PDO::ATTR_ERRMODE attribute is not PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Roll back a transaction
// The following example begins a transaction and issues two statements that modify the database before rolling back the changes. On MySQL, however, the DROP TABLE statement automatically commits the transaction so that none of the changes in the transaction are rolled back.
// [php]
// /* Begin a transaction, turning off autocommit */
// $dbh->beginTransaction();
// 
// /* Change the database schema and data */
// $sth = $dbh->exec("DROP TABLE fruit");
// $sth = $dbh->exec("UPDATE dessert
//     SET name = 'hamburger'");
// 
// /* Recognize mistake and roll back changes */
// $dbh->rollBack();
// 
// /* Database connection is now back in autocommit mode */
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.begintransaction.php
// ========== PDO_BEGINTRANSACTION - END

// SYNTAX:
// bool PDO::beginTransaction()

return $return_pdo_begintransaction; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_BEGINTRANSACTION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_COMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Commits a transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::commit() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_commit($pdo)
{
$return_pdo_commit = false;

// ========== PDO_COMMIT - BEGIN
// ===== ABOUT
// Commits a transaction
// ===== DESCRIPTION
// Commits a transaction, returning the database connection to autocommit mode until the next call to PDO::beginTransaction() starts a new transaction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::commit(): bool
// ===== CODE
$return_pdo_commit = $pdo->commit(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws a PDOException if there is no active transaction.
// Note: An exception is raised even when the PDO::ATTR_ERRMODE attribute is not PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Committing a basic transaction
// [php]
// /* Begin a transaction, turning off autocommit */
// $dbh->beginTransaction();
// 
// /* Insert multiple records on an all-or-nothing basis */
// $sql = 'INSERT INTO fruit
//     (name, colour, calories)
//     VALUES (?, ?, ?)';
// 
// $sth = $dbh->prepare($sql);
// 
// foreach ($fruits as $fruit) {
//     $sth->execute(array(
//         $fruit->name,
//         $fruit->colour,
//         $fruit->calories,
//     ));
// }
// 
// /* Commit the changes */
// $dbh->commit();
// 
// /* Database connection is now back in autocommit mode */
// [/php]
// [/example]
// [example]
// Example #2 Committing a DDL transaction
// [php]
// /* Begin a transaction, turning off autocommit */
// $dbh->beginTransaction();
// 
// /* Change the database schema */
// $sth = $dbh->exec("DROP TABLE fruit");
// 
// /* Commit the changes */
// $dbh->commit();
// 
// /* Database connection is now back in autocommit mode */
// [/php]
// Note: Not all databases will allow transactions to operate on DDL statements: some will generate errors, whereas others (including MySQL) will automatically commit the transaction after the first DDL statement has been encountered.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.commit.php
// ========== PDO_COMMIT - END

// SYNTAX:
// bool PDO::commit()

return $return_pdo_commit; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_COMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Creates a PDO instance representing a connection to a database.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::__construct() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_construct($dsn, $username = null, $password = null, $options = null)
{
$return_pdo_construct = null;

// ========== PDO_CONSTRUCT - BEGIN
// ===== ABOUT
// Creates a PDO instance representing a connection to a database
// ===== DESCRIPTION
// Creates a PDO instance to represent a connection to the requested database.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::__construct(
//    string $dsn,
//    ?string $username = null,
//    ?string $password = null,
//    ?array $options = null
// )
// ===== CODE
$return_pdo_construct = new PDO(

$dsn, // string dsn - The Data Source Name, or DSN, contains the information required to connect to the database.
// In general, a DSN consists of the PDO driver name, followed by a colon, followed by the PDO driver-specific connection syntax. Further information is available from the PDO driver-specific documentation.
// The dsn parameter supports three different methods of specifying the arguments required to create a database connection:
//  Driver invocation - dsn contains the full DSN.
//  URI invocation - dsn consists of uri: followed by a URI that defines the location of a file containing the DSN string. The URI can specify a local file or a remote URL.
//  uri:file:///path/to/dsnfile
//  Aliasing - dsn consists of a name name that maps to pdo.dsn.name in php.ini defining the DSN string.
//  Note: The alias must be defined in php.ini, and not .htaccess or httpd.conf

$username, // string username - The user name for the DSN string. This parameter is optional for some PDO drivers.

$password, // string password - The password for the DSN string. This parameter is optional for some PDO drivers.

$options // array options - A key=>value array of driver-specific connection options.

); // Return
// PDO
// 
// Errors/Exceptions
// PDO::__construct() throws a PDOException if the attempt to connect to the requested database fails, regardless of which PDO::ATTR_ERRMODE is currently set.
// 
// [examples]
// Examples
// [example]
// Example #1 Create a PDO instance via driver invocation
// [php]
// /* Connect to a MySQL database using driver invocation */
// $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
// $user = 'dbuser';
// $password = 'dbpass';
// 
// $dbh = new PDO($dsn, $user, $password);
// 
// [/php]
// [/example]
// [example]
// Example #2 Create a PDO instance via URI invocation
// The following example assumes that the file /usr/local/dbconnect exists with file permissions that enable PHP to read the file. The file contains the PDO DSN to connect to a DB2 database through the PDO_ODBC driver:
// [code]
// odbc:DSN=SAMPLE;UID=john;PWD=mypass
// [/code]
// The PHP script can then create a database connection by simply passing the uri: parameter and pointing to the file URI:
// [php]
// /* Connect to an ODBC database using driver invocation */
// $dsn = 'uri:file:///usr/local/dbconnect';
// $user = '';
// $password = '';
// 
// $dbh = new PDO($dsn, $user, $password);
// 
// [/php]
// [/example]
// [example]
// Example #3 Create a PDO instance using an alias
// The following example assumes that php.ini contains the following entry to enable a connection to a MySQL database using only the alias mydb:
// [code]
// [PDO]
// pdo.dsn.mydb="mysql:dbname=testdb;host=localhost"
// [/code]
// 
// [php]
// /* Connect to an ODBC database using an alias */
// $dsn = 'mydb';
// $user = '';
// $password = '';
// 
// $dbh = new PDO($dsn, $user, $password);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.construct.php
// ========== PDO_CONSTRUCT - END

// SYNTAX:
// PDO PDO::__construct(string $dsn, string $username = null, string $password = null, array $options = null)

return $return_pdo_construct; // PDO
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_ERRORCODE
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the SQLSTATE associated with the last operation on the database handle.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::errorCode() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_errorcode($pdo)
{
$return_pdo_errorcode = null;

// ========== PDO_ERRORCODE - BEGIN
// ===== ABOUT
// Fetch the SQLSTATE associated with the last operation on the database handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::errorCode(): ?string
// ===== CODE
$return_pdo_errorcode = $pdo->errorCode(

// This function has no parameters.

); // Return Values
// Returns an SQLSTATE, a five characters alphanumeric identifier defined in the ANSI SQL-92 standard. Briefly, an SQLSTATE consists of a two characters class value followed by a three characters subclass value. A class value of 01 indicates a warning and is accompanied by a return code of SQL_SUCCESS_WITH_INFO. Class values other than '01', except for the class 'IM', indicate an error. The class 'IM' is specific to warnings and errors that derive from the implementation of PDO (or perhaps ODBC, if you're using the ODBC driver) itself. The subclass value '000' in any class indicates that there is no subclass for that SQLSTATE.
// PDO::errorCode() only retrieves error codes for operations performed directly on the database handle. If you create a PDOStatement object through PDO::prepare() or PDO::query() and invoke an error on the statement handle, PDO::errorCode() will not reflect that error. You must call PDOStatement::errorCode() to return the error code for an operation performed on a particular statement handle.
// Returns null if no operation has been run on the database handle.
// 
// [examples]
// Examples
// [example]
// Example #1 Retrieving an SQLSTATE code
// [php]
// /* Provoke an error -- the BONES table does not exist */
// $dbh->exec("INSERT INTO bones(skull) VALUES ('lucy')");
// 
// echo "\nPDO::errorCode(): ", $dbh->errorCode();
// [/php]
// The above example will output:
// [result]
// PDO::errorCode(): 42S02
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.errorcode.php
// ========== PDO_ERRORCODE - END

// SYNTAX:
// string PDO::errorCode()

return $return_pdo_errorcode; // string
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_ERRORCODE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_ERRORINFO
// ============================== PUBLIC
// ============================== ABOUT
// Fetch extended error information associated with the last operation on the database handle.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::errorInfo() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_errorinfo($pdo)
{
$return_pdo_errorinfo = null;

// ========== PDO_ERRORINFO - BEGIN
// ===== ABOUT
// Fetch extended error information associated with the last operation on the database handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::errorInfo(): array
// ===== CODE
$return_pdo_errorinfo = $pdo->errorInfo(

// This function has no parameters.

); // Return Values
// PDO::errorInfo() returns an array of error information about the last operation performed by this database handle. The array consists of at least the following fields:
// Element - Information
// 0       - SQLSTATE error code (a five characters alphanumeric identifier defined in the ANSI SQL standard).
// 1       - Driver-specific error code.
// 2       - Driver-specific error message.
// Note: If the SQLSTATE error code is not set or there is no driver-specific error, the elements following element 0 will be set to null.
// PDO::errorInfo() only retrieves error information for operations performed directly on the database handle. If you create a PDOStatement object through PDO::prepare() or PDO::query() and invoke an error on the statement handle, PDO::errorInfo() will not reflect the error from the statement handle. You must call PDOStatement::errorInfo() to return the error information for an operation performed on a particular statement handle.
// 
// [examples]
// Examples
// [example]
// Example #1 Displaying errorInfo() fields for a PDO_ODBC connection to a DB2 database
// [php]
// /* Provoke an error -- bogus SQL syntax */
// $stmt = $dbh->prepare('bogus sql');
// if (!$stmt) {
//     echo "\nPDO::errorInfo():\n";
//     print_r($dbh->errorInfo());
// }
// [/php]
// The above example will output:
// [result]
// PDO::errorInfo():
// Array
// (
//     [0] => HY000
//     [1] => 1
//     [2] => near "bogus": syntax error
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.errorinfo.php
// ========== PDO_ERRORINFO - END

// SYNTAX:
// array PDO::errorInfo()

return $return_pdo_errorinfo; // array
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_ERRORINFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_EXEC
// ============================== PUBLIC
// ============================== ABOUT
// Execute an SQL statement and return the number of affected rows.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::exec() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_exec($pdo, $statement)
{
$return_pdo_exec = false;

// ========== PDO_EXEC - BEGIN
// ===== ABOUT
// Execute an SQL statement and return the number of affected rows
// ===== DESCRIPTION
// PDO::exec() executes an SQL statement in a single function call, returning the number of rows affected by the statement.
// PDO::exec() does not return results from a SELECT statement. For a SELECT statement that you only need to issue once during your program, consider issuing PDO::query(). For a statement that you need to issue multiple times, prepare a PDOStatement object with PDO::prepare() and issue the statement with PDOStatement::execute().
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::exec(string $statement): int|false
// ===== CODE
$return_pdo_exec = $pdo->exec(

$statement // string statement - The SQL statement to prepare and execute.
// Data inside the query should be properly escaped.

); // Return Values
// PDO::exec() returns the number of rows that were modified or deleted by the SQL statement you issued. If no rows were affected, PDO::exec() returns 0.
// Warning: This function may return Boolean false, but may also return a non-Boolean value which evaluates to false. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.
// [example]
// The following example incorrectly relies on the return value of PDO::exec(), wherein a statement that affected 0 rows results in a call to die():
// [php]
// $db->exec() or die(print_r($db->errorInfo(), true)); // incorrect
// [/php]
// [/example]
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Issuing a DELETE statement
// Count the number of rows deleted by a DELETE statement with no WHERE clause.
// [php]
// $dbh = new PDO('odbc:sample', 'db2inst1', 'ibmdb2');
// 
// /* Delete all rows from the FRUIT table */
// $count = $dbh->exec("DELETE FROM fruit");
// 
// /* Return number of rows that were deleted */
// print "Deleted $count rows.\n";
// [/php]
// The above example will output:
// [result]
// Deleted 1 rows.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.exec.php
// ========== PDO_EXEC - END

// SYNTAX:
// int|false PDO::exec(string $statement)

return $return_pdo_exec; // int|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_EXEC
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_GETATTRIBUTE
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve a database connection attribute.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDO::getAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdo_getattribute($pdo, $attribute)
{
$return_pdo_getattribute = null;

// ========== PDO_GETATTRIBUTE - BEGIN
// ===== ABOUT
// Retrieve a database connection attribute
// ===== DESCRIPTION
// This function returns the value of a database connection attribute. To retrieve PDOStatement attributes, refer to PDOStatement::getAttribute().
// Note that some database/driver combinations may not support all of the database connection attributes.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDO::getAttribute(int $attribute): mixed
// ===== CODE
$return_pdo_getattribute = $pdo->getAttribute(

$attribute // int attribute - One of the PDO::ATTR_* constants. The generic attributes that apply to database connections are as follows:
// * PDO::ATTR_AUTOCOMMIT
// * PDO::ATTR_CASE
// * PDO::ATTR_CLIENT_VERSION
// * PDO::ATTR_CONNECTION_STATUS
// * PDO::ATTR_DRIVER_NAME
// * PDO::ATTR_ERRMODE
// * PDO::ATTR_ORACLE_NULLS
// * PDO::ATTR_PERSISTENT
// * PDO::ATTR_PREFETCH
// * PDO::ATTR_SERVER_INFO
// * PDO::ATTR_SERVER_VERSION
// * PDO::ATTR_TIMEOUT
// Some drivers may make use of additional driver specific attributes. Note that driver specific attributes must not be used with other drivers.

); // Return Values
// A successful call returns the value of the requested PDO attribute. An unsuccessful call returns null.
// 
// Errors/Exceptions
// PDO::getAttribute() may throw a PDOException when the underlying driver does not support the requested attribute.
// 
// [examples]
// Examples
// [example]
// Example #1 Retrieving database connection attributes
// [php]
// $conn = new PDO('odbc:sample', 'db2inst1', 'ibmdb2');
// $attributes = array(
//     "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
//     "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
//     "TIMEOUT"
// );
// 
// foreach ($attributes as $val) {
//     echo "PDO::ATTR_$val: ";
//     echo $conn->getAttribute(constant("PDO::ATTR_$val")) . "\n";
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.getattribute.php
// ========== PDO_GETATTRIBUTE - END

// SYNTAX:
// mixed PDO::getAttribute(int $attribute)

return $return_pdo_getattribute; // mixed
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_GETATTRIBUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_GETAVAILABLEDRIVERS
// ============================== PUBLIC
// ============================== ABOUT
// Return an array of available PDO drivers.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_1_0_3
// ============================== USING FUNCTIONS (1)
// PDO::getAvailableDrivers() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_3
// ============================== CODE
function php_database_abstract_pdo_pdo_getavailabledrivers($pdo)
{
$return_pdo_getavailabledrivers = null;

// ========== PDO_GETAVAILABLEDRIVERS - BEGIN
// ===== ABOUT
// Return an array of available PDO drivers
// ===== DESCRIPTION
// This function returns all currently available PDO drivers which can be used in DSN parameter of PDO::__construct().
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_3
// ===== SYNTAX
// public static PDO::getAvailableDrivers(): array
// 
// pdo_drivers(): array
// ===== CODE
$return_pdo_getavailabledrivers = $pdo->getAvailableDrivers(

// This function has no parameters.

); // Return Values
// PDO::getAvailableDrivers() returns an array of PDO driver names. If no drivers are available, it returns an empty array.
// 
// [examples]
// Examples
// [example]
// Example #1 A PDO::getAvailableDrivers() example
// [php]
// print_r(PDO::getAvailableDrivers());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => mysql
//     [1] => sqlite
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.getavailabledrivers.php
// ========== PDO_GETAVAILABLEDRIVERS - END

// SYNTAX:
// array PDO::getAvailableDrivers()

return $return_pdo_getavailabledrivers; // array
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_GETAVAILABLEDRIVERS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_INTRANSACTION
// ============================== PUBLIC
// ============================== ABOUT
// Checks if inside a transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::inTransaction() - PHP_5 >= PHP_5_3_3, Bundled pdo_pgsql, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_pdo_pdo_intransaction($pdo)
{
$return_pdo_intransaction = null;

// ========== PDO_INTRANSACTION - BEGIN
// ===== ABOUT
// Checks if inside a transaction
// ===== DESCRIPTION
// Checks if a transaction is currently active within the driver. This method only works for database drivers that support transactions.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, Bundled pdo_pgsql, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::inTransaction(): bool
// ===== CODE
$return_pdo_intransaction = $pdo->inTransaction(

// This function has no parameters.

); // Return Values
// Returns true if a transaction is currently active, and false if not.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.intransaction.php
// ========== PDO_INTRANSACTION - END

// SYNTAX:
// PDO PDO::inTransaction()

return $return_pdo_intransaction; // PDO
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_INTRANSACTION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_LASTINSERTID
// ============================== PUBLIC
// ============================== ABOUT
// Returns the ID of the last inserted row or sequence value.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::lastInsertId() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_lastinsertid($pdo, $name = null)
{
$return_pdo_lastinsertid = false;

// ========== PDO_LASTINSERTID - BEGIN
// ===== ABOUT
// Returns the ID of the last inserted row or sequence value
// ===== DESCRIPTION
// Returns the ID of the last inserted row, or the last value from a sequence object, depending on the underlying driver. For example, PDO_PGSQL allows the name of any sequence object to be specified for the name parameter.
// Note: This method may not return a meaningful or consistent result across different PDO drivers, because the underlying database may not even support the notion of auto-increment fields or sequences.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::lastInsertId(?string $name = null): string|false
// ===== CODE
$return_pdo_lastinsertid = $pdo->lastInsertId(

$name // string name - Name of the sequence object from which the ID should be returned.

); // Return Values
// If a sequence name was not specified for the name parameter, PDO::lastInsertId() returns a string representing the row ID of the last row that was inserted into the database.
// If a sequence name was specified for the name parameter, PDO::lastInsertId() returns a string representing the last value retrieved from the specified sequence object.
// If the PDO driver does not support this capability, PDO::lastInsertId() triggers an IM001 SQLSTATE.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-14)
// URL: https://www.php.net/manual/en/pdo.lastinsertid.php
// ========== PDO_LASTINSERTID - END

// SYNTAX:
// string|false PDO::lastInsertId(string $name = null)

return $return_pdo_lastinsertid; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_LASTINSERTID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Prepares a statement for execution and returns a statement object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::prepare() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_prepare($pdo, $query, $options = array())
{
$return_pdo_prepare = false;

// ========== PDO_PREPARE - BEGIN
// ===== ABOUT
// Prepares a statement for execution and returns a statement object
// ===== DESCRIPTION
// Prepares an SQL statement to be executed by the PDOStatement::execute() method. The statement template can contain zero or more named (:name) or question mark (?) parameter markers for which real values will be substituted when the statement is executed. Both named and question mark parameter markers cannot be used within the same statement template; only one or the other parameter style. Use these parameters to bind any user-input, do not include the user-input directly in the query.
// You must include a unique parameter marker for each value you wish to pass in to the statement when you call PDOStatement::execute(). You cannot use a named parameter marker of the same name more than once in a prepared statement, unless emulation mode is on.
// Note: Parameter markers can represent a complete data literal only. Neither part of literal, nor keyword, nor identifier, nor whatever arbitrary query part can be bound using parameters. For example, you cannot bind multiple values to a single parameter in the IN() clause of an SQL statement.
// Calling PDO::prepare() and PDOStatement::execute() for statements that will be issued multiple times with different parameter values optimizes the performance of your application by allowing the driver to negotiate client and/or server side caching of the query plan and meta information. Also, calling PDO::prepare() and PDOStatement::execute() helps to prevent SQL injection attacks by eliminating the need to manually quote and escape the parameters.
// PDO will emulate prepared statements/bound parameters for drivers that do not natively support them, and can also rewrite named or question mark style parameter markers to something more appropriate, if the driver supports one style but not the other.
// Note: The parser used for emulated prepared statements and for rewriting named or question mark style parameters supports the non standard backslash escapes for single- and double quotes. That means that terminating quotes immediately preceeded by a backslash are not recognized as such, which may result in wrong detection of parameters causing the prepared statement to fail when it is executed. A work-around is to not use emulated prepares for such SQL queries, and to avoid rewriting of parameters by using a parameter style which is natively supported by the driver.
// As of PHP 7.4.0, question marks can be escaped by doubling them. That means that the ?? string will be translated to ? when sending the query to the database.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::prepare(string $query, array $options = []): PDOStatement|false
// ===== CODE
$return_pdo_prepare = $pdo->prepare(

$query, // string query - This must be a valid SQL statement template for the target database server.

$options // array options - This array holds one or more key=>value pairs to set attribute values for the PDOStatement object that this method returns. You would most commonly use this to set the PDO::ATTR_CURSOR value to PDO::CURSOR_SCROLL to request a scrollable cursor. Some drivers have driver-specific options that may be set at prepare-time.

); // Return Values
// If the database server successfully prepares the statement, PDO::prepare() returns a PDOStatement object. If the database server cannot successfully prepare the statement, PDO::prepare() returns false or emits PDOException (depending on error handling).
// Note: Emulated prepared statements does not communicate with the database server so PDO::prepare() does not check the statement.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 SQL statement template with named parameters
// [php]
// /* Execute a prepared statement by passing an array of values */
// $sql = 'SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour = :colour';
// $sth = $dbh->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
// $sth->execute(['calories' => 150, 'colour' => 'red']);
// $red = $sth->fetchAll();
// /* Array keys can be prefixed with colons ":" too (optional) */
// $sth->execute([':calories' => 175, ':colour' => 'yellow']);
// $yellow = $sth->fetchAll();
// [/php]
// [/example]
// [example]
// Example #2 SQL statement template with question mark parameters
// [php]
// /* Execute a prepared statement by passing an array of values */
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?');
// $sth->execute([150, 'red']);
// $red = $sth->fetchAll();
// $sth->execute([175, 'yellow']);
// $yellow = $sth->fetchAll();
// [/php]
// [/example]
// [example]
// Example #3 SQL statement template with question mark escaped
// [php]
// /* note: this is only valid on PostgreSQL databases */
// $sth = $dbh->prepare('SELECT * FROM issues WHERE tag::jsonb ?? ?');
// $sth->execute(['feature']);
// $featureIssues = $sth->fetchAll();
// $sth->execute(['performance']);
// $performanceIssues = $sth->fetchAll();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdo.prepare.php
// ========== PDO_PREPARE - END

// SYNTAX:
// PDOStatement|false PDO::prepare(string $query, array $options = array())

return $return_pdo_prepare; // PDOStatement|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Prepares and executes an SQL statement without placeholders.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDO::query() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdo_query($pdo, $query, $fetchMode = null)
{
$return_pdo_query = false;

// ========== PDO_QUERY - BEGIN
// ===== ABOUT
// Prepares and executes an SQL statement without placeholders
// ===== DESCRIPTION
// PDO::query() prepares and executes an SQL statement in a single function call, returning the statement as a PDOStatement object.
// For a query that you need to issue multiple times, you will realize better performance if you prepare a PDOStatement object using PDO::prepare() and issue the statement with multiple calls to PDOStatement::execute().
// If you do not fetch all of the data in a result set before issuing your next call to PDO::query(), your call may fail. Call PDOStatement::closeCursor() to release the database resources associated with the PDOStatement object before issuing your next call to PDO::query().
// Note: If the query contains placeholders, the statement must be prepared and executed separately using PDO::prepare() and PDOStatement::execute() methods.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDO::query(string $query, ?int $fetchMode = null): PDOStatement|false
// 
// public PDO::query(string $query, ?int $fetchMode = PDO::FETCH_COLUMN, int $colno): PDOStatement|false
// 
// public PDO::query(
//    string $query,
//    ?int $fetchMode = PDO::FETCH_CLASS,
//    string $classname,
//    array $constructorArgs
// ): PDOStatement|false
// 
// public PDO::query(string $query, ?int $fetchMode = PDO::FETCH_INTO, object $object): PDOStatement|false
// ===== CODE
$return_pdo_query = $pdo->query(

$query, // string query - The SQL statement to prepare and execute.
// If the SQL contains placeholders, PDO::prepare() and PDOStatement::execute() must be used instead. Alternatively, the SQL can be prepared manually before calling PDO::query(), with the data properly formatted using PDO::quote() if the driver supports it.

$fetchMode // int fetchMode - The default fetch mode for the returned PDOStatement. It must be one of the PDO::FETCH_* constants.
// If this argument is passed to the function, the remaining arguments will be treated as though PDOStatement::setFetchMode() was called on the resultant statement object. The subsequent arguments vary depending on the selected fetch mode.

); // Return Values
// Returns a PDOStatement object or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 SQL with no placeholders can be executed using PDO::query()
// [php]
// $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
// foreach ($conn->query($sql) as $row) {
//     print $row['name'] . "\t";
//     print $row['color'] . "\t";
//     print $row['calories'] . "\n";
// }
// [/php]
// The above example will output:
// [result]
// apple   red     150
// banana  yellow  250
// kiwi    brown   75
// lemon   yellow  25
// orange  orange  300
// pear    green   150
// watermelon      pink    90
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdo.query.php
// ========== PDO_QUERY - END

// SYNTAX:
// PDOStatement|false PDO::query(string $query, int $fetchMode = null)

return $return_pdo_query; // PDOStatement|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_QUOTE
// ============================== PUBLIC
// ============================== ABOUT
// Quotes a string for use in a query.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_1
// ============================== USING FUNCTIONS (1)
// PDO::quote() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_1
// ============================== USING CONSTANTS (1)
// PDO::PARAM_STR - PDO::quote()
// ============================== CODE
function php_database_abstract_pdo_pdo_quote($pdo, $string, $type = PDO::PARAM_STR)
{
$return_pdo_quote = false;

// ========== PDO_QUOTE - BEGIN
// ===== ABOUT
// Quotes a string for use in a query
// ===== DESCRIPTION
// PDO::quote() places quotes around the input string (if required) and escapes special characters within the input string, using a quoting style appropriate to the underlying driver.
// If you are using this function to build SQL statements, you are strongly recommended to use PDO::prepare() to prepare SQL statements with bound parameters instead of using PDO::quote() to interpolate user input into an SQL statement. Prepared statements with bound parameters are not only more portable, more convenient, immune to SQL injection, but are often much faster to execute than interpolated queries, as both the server and client side can cache a compiled form of the query.
// Not all PDO drivers implement this method (notably PDO_ODBC). Consider using prepared statements instead.
//  Caution: Security: the default character set
//  The character set must be set either on the server level, or within the database connection itself (depending on the driver) for it to affect PDO::quote(). See the driver-specific documentation for more information.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_1
// ===== SYNTAX
// public PDO::quote(string $string, int $type = PDO::PARAM_STR): string|false
// ===== CODE
$return_pdo_quote = $pdo->quote(

$string, // string string - The string to be quoted.

$type // int type - Provides a hint to the type of data for drivers that have alternate quoting styles. For example PDO_PARAM_LOB will tell the driver to escape binary data.

); // Return Values
// Returns a quoted string that is theoretically safe to pass into an SQL statement. Returns false if the driver does not support quoting in this way.
// 
// [examples]
// Examples
// [example]
// Example #1 Quoting a normal string
// [php]
// $conn = new PDO('sqlite:/home/lynn/music.sql3');
// 
// /* Simple string */
// $string = 'Nice';
// print "Unquoted string: $string\n";
// print "Quoted string: " . $conn->quote($string) . "\n";
// [/php]
// The above example will output:
// [result]
// Unquoted string: Nice
// Quoted string: 'Nice'
// [/result]
// [/example]
// [example]
// Example #2 Quoting a dangerous string
// [php]
// $conn = new PDO('sqlite:/home/lynn/music.sql3');
// 
// /* Dangerous string */
// $string = 'Naughty \' string';
// print "Unquoted string: $string\n";
// print "Quoted string:" . $conn->quote($string) . "\n";
// [/php]
// The above example will output:
// [result]
// Unquoted string: Naughty ' string
// Quoted string: 'Naughty '' string'
// [/result]
// [/example]
// [example]
// Example #3 Quoting a complex string
// [php]
// $conn = new PDO('sqlite:/home/lynn/music.sql3');
// 
// /* Complex string */
// $string = "Co'mpl''ex \"st'\"ring";
// print "Unquoted string: $string\n";
// print "Quoted string: " . $conn->quote($string) . "\n";
// [/php]
// The above example will output:
// [result]
// Unquoted string: Co'mpl''ex "st'"ring
// Quoted string: 'Co''mpl''''ex "st''"ring'
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdo.quote.php
// ========== PDO_QUOTE - END

// SYNTAX:
// string|false PDO::quote(string $string, int $type = PDO::PARAM_STR)

return $return_pdo_quote; // string|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_QUOTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_ROLLBACK
// ============================== PUBLIC
// ============================== ABOUT
// Rolls back a transaction.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::rollBack() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_rollback($pdo)
{
$return_pdo_rollback = false;

// ========== PDO_ROLLBACK - BEGIN
// ===== ABOUT
// Rolls back a transaction
// ===== DESCRIPTION
// Rolls back the current transaction, as initiated by PDO::beginTransaction().
// If the database was set to autocommit mode, this function will restore autocommit mode after it has rolled back the transaction.
// Some databases, including MySQL, automatically issue an implicit COMMIT when a database definition language (DDL) statement such as DROP TABLE or CREATE TABLE is issued within a transaction. The implicit COMMIT will prevent you from rolling back any other changes within the transaction boundary.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::rollBack(): bool
// ===== CODE
$return_pdo_rollback = $pdo->rollBack(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Throws a PDOException if there is no active transaction.
// Note: An exception is raised even when the PDO::ATTR_ERRMODE attribute is not PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Roll back a transaction
// The following example begins a transaction and issues two statements that modify the database before rolling back the changes. On MySQL, however, the DROP TABLE statement automatically commits the transaction so that none of the changes in the transaction are rolled back.
// [php]
// /* Begin a transaction, turning off autocommit */
// $dbh->beginTransaction();
// 
// /* Change the database schema and data */
// $sth = $dbh->exec("DROP TABLE fruit");
// $sth = $dbh->exec("UPDATE dessert
//     SET name = 'hamburger'");
// 
// /* Recognize mistake and roll back changes */
// $dbh->rollBack();
// 
// /* Database connection is now back in autocommit mode */
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdo.rollback.php
// ========== PDO_ROLLBACK - END

// SYNTAX:
// bool PDO::rollBack()

return $return_pdo_rollback; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_ROLLBACK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_SETATTRIBUTE
// ============================== PUBLIC
// ============================== ABOUT
// Set an attribute.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDO::setAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdo_setattribute($pdo, $attribute, $value)
{
$return_pdo_setattribute = false;

// ========== PDO_SETATTRIBUTE - BEGIN
// ===== ABOUT
// Set an attribute
// ===== DESCRIPTION
// Sets an attribute on the database handle. Some available generic attributes are listed below; some drivers may make use of additional driver specific attributes. Note that driver specific attributes must not be used with other drivers.
// PDO::ATTR_CASE                     - Force column names to a specific case. Can take one of the following values:
//  PDO::CASE_LOWER   - Force column names to lower case.
//  PDO::CASE_NATURAL - Leave column names as returned by the database driver.
//  PDO::CASE_UPPER   - Force column names to upper case.
// PDO::ATTR_ERRMODE                  - Error reporting mode of PDO. Can take one of the following values:
//  PDO::ERRMODE_SILENT    - Only sets error codes.
//  PDO::ERRMODE_WARNING   - Raises E_WARNING diagnostics.
//  PDO::ERRMODE_EXCEPTION - Throws PDOExceptions.
// PDO::ATTR_ORACLE_NULLS             -
// Note: This attribute is available with all drivers, not just Oracle.
// Determines if and how null and empty strings should be converted. Can take one of the following values:
//  PDO::NULL_NATURAL      - No conversion takes place.
//  PDO::NULL_EMPTY_STRING - Empty strings get converted to null.
//  PDO::NULL_TO_STRING    - null gets converted to an empty string.
// PDO::ATTR_STRINGIFY_FETCHES        - Whether to convert numeric values to strings when fetching. Takes a value of type bool: true to enable and false to disable.
// PDO::ATTR_STATEMENT_CLASS          - Set user-supplied statement class derived from PDOStatement. Requires array(string classname, array(mixed constructor_args)).
// Caution: Cannot be used with persistent PDO instances.
// PDO::ATTR_TIMEOUT                  - Specifies the timeout duration in seconds. Takes a value of type int.
// Note: Not all drivers support this option, and its meaning may differ from driver to driver. For example, SQLite will wait for up to this time value before giving up on obtaining a writable lock, but other drivers may interpret this as a connection or a read timeout interval.
// PDO::ATTR_AUTOCOMMIT               -
// Note: Only available for the OCI, Firebird, and MySQL drivers.
// Whether to autocommit every single statement. Takes a value of type bool: true to enable and false to disable. By default, true.
// PDO::ATTR_EMULATE_PREPARES         -
// Note: Only available for the OCI, Firebird, and MySQL drivers.
// Whether enable or disable emulation of prepared statements. Some drivers do not support prepared statements natively or have limited support for them. If set to true PDO will always emulate prepared statements, otherwise PDO will attempt to use native prepared statements. In case the driver cannot successfully prepare the current query, PDO will always fall back to emulating the prepared statement.
// PDO::MYSQL_ATTR_USE_BUFFERED_QUERY -
// Note: Only available for the MySQL driver.
// Whether to use buffered queries. Takes a value of type bool: true to enable and false to disable. By default, true.
// PDO::ATTR_DEFAULT_FETCH_MODE       -
// Set the default fetch mode. A description of the modes and how to use them is available in the PDOStatement::fetch() documentation.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDO::setAttribute(int $attribute, mixed $value): bool
// ===== CODE
$return_pdo_setattribute = $pdo->setAttribute(

$attribute, // int attribute - The attribute to modify.

$value // mixed value - The value to set the attribute, might require a specific type depending on the attribute.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdo.setattribute.php
// ========== PDO_SETATTRIBUTE - END

// SYNTAX:
// bool PDO::setAttribute(int $attribute, mixed $value)

return $return_pdo_setattribute; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_SETATTRIBUTE
// ==============================


// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO 
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT
// ============================== PUBLIC
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDCOLUMN - bool php_database_abstract_pdo_pdostatement_bindcolumn(PDOStatement $pdostatement, string|int $column, mixed& $var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDPARAM - bool php_database_abstract_pdo_pdostatement_bindparam(PDOStatement $pdostatement, string|int $param, mixed& $var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDVALUE - bool php_database_abstract_pdo_pdostatement_bindvalue(PDOStatement $pdostatement, string|int $param, mixed $value, int $type = PDO::PARAM_STR)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_CLOSECURSOR - bool php_database_abstract_pdo_pdostatement_closecursor(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_COLUMNCOUNT - int php_database_abstract_pdo_pdostatement_columncount(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_DEBUGDUMPPARAMS - bool php_database_abstract_pdo_pdostatement_debugdumpparams(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ERRORCODE - string php_database_abstract_pdo_pdostatement_errorcode(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ERRORINFO - array php_database_abstract_pdo_pdostatement_errorinfo(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_EXECUTE - bool php_database_abstract_pdo_pdostatement_execute(PDOStatement $pdostatement, array $params = null)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCH - mixed php_database_abstract_pdo_pdostatement_fetch(PDOStatement $pdostatement, int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHALL - array php_database_abstract_pdo_pdostatement_fetchall(PDOStatement $pdostatement, int $mode = PDO::FETCH_COLUMN, int $column)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHCOLUMN - mixed php_database_abstract_pdo_pdostatement_fetchcolumn(PDOStatement $pdostatement, int $column = 0)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHOBJECT - object|false php_database_abstract_pdo_pdostatement_fetchobject(PDOStatement $pdostatement, string $class = "stdClass", array $constructorArgs = array())
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETATTRIBUTE - mixed php_database_abstract_pdo_pdostatement_getattribute(PDOStatement $pdostatement, int $name)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETCOLUMNMETA - array|false php_database_abstract_pdo_pdostatement_getcolumnmeta(PDOStatement $pdostatement, int $column)
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETITERATOR - Iterator php_database_abstract_pdo_pdostatement_getiterator(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_NEXTROWSET - bool php_database_abstract_pdo_pdostatement_nextrowset(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ROWCOUNT - int php_database_abstract_pdo_pdostatement_rowcount(PDOStatement $pdostatement)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_SETATTRIBUTE - bool php_database_abstract_pdo_pdostatement_setattribute(PDOStatement $pdostatement, int $attribute, mixed $value)
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_SETFETCHMODE - bool php_database_abstract_pdo_pdostatement_setfetchmode(PDOStatement $pdostatement, int $mode = PDO::FETCH_COLUMN, int $colno)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_1_0_0
// ============================== USING SUBCLASSES (20)
// PDOStatement::bindColumn() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::bindParam() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::bindValue() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// PDOStatement::closeCursor() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// PDOStatement::columnCount() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// PDOStatement::debugDumpParams() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// PDOStatement::errorCode() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::errorInfo() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::execute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::fetch() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::fetchAll() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::fetchColumn() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// PDOStatement::fetchObject() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_4
// PDOStatement::getAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// PDOStatement::getColumnMeta() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// OFFLINE | PDOStatement::getIterator() - PHP_8
// PDOStatement::nextRowset() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// PDOStatement::rowCount() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// PDOStatement::setAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// PDOStatement::setFetchMode() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== USING DATA_TYPES (9)
// bool
// PDOStatement - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// string
// int
// mixed
// array
// object
// false
// Iterator
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDCOLUMN
// ============================== PUBLIC
// ============================== ABOUT
// Bind a column to a PHP variable.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::bindColumn() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== USING CONSTANTS (1)
// PDO::PARAM_STR - PDOStatement::bindColumn()
// ============================== CODE
function php_database_abstract_pdo_pdostatement_bindcolumn($pdostatement, $column, & $var, $type = PDO::PARAM_STR, $maxLength = 0, $driverOptions = null)
{
$return_pdostatement_bindcolumn = false;

// ========== PDOSTATEMENT_BINDCOLUMN - BEGIN
// ===== ABOUT
// Bind a column to a PHP variable
// ===== DESCRIPTION
// PDOStatement::bindColumn() arranges to have a particular variable bound to a given column in the result-set from a query. Each call to PDOStatement::fetch() or PDOStatement::fetchAll() will update all the variables that are bound to columns.
//  Note: Since information about the columns is not always available to PDO until the statement is executed, portable applications should call this function after PDOStatement::execute().
//  However, to be able to bind a LOB column as a stream when using the PgSQL driver, applications should call this method before calling PDOStatement::execute(), otherwise the large object OID will be returned as an integer.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::bindColumn(
//    string|int $column,
//    mixed &$var,
//    int $type = PDO::PARAM_STR,
//    int $maxLength = 0,
//    mixed $driverOptions = null
// ): bool
// ===== CODE
$return_pdostatement_bindcolumn = $pdostatement->bindColumn(

$column, // string|int column - Number of the column (1-indexed) or name of the column in the result set. If using the column name, be aware that the name should match the case of the column, as returned by the driver.

$var, // mixed& var - Name of the PHP variable to which the column will be bound.

$type, // int type - Data type of the parameter, specified by the PDO::PARAM_* constants.

$maxLength, // int maxLength - A hint for pre-allocation.

$driverOptions // mixed driverOptions - Optional parameter(s) for the driver.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Binding result set output to PHP variables
// Binding columns in the result set to PHP variables is an effective way to make the data contained in each row immediately available to your application. The following example demonstrates how PDO allows you to bind and retrieve columns with a variety of options and with intelligent defaults.
// [php]
// $stmt = $dbh->prepare('SELECT name, colour, calories FROM fruit');
// $stmt->execute();
// 
// /* Bind by column number */
// $stmt->bindColumn(1, $name);
// $stmt->bindColumn(2, $colour);
// 
// /* Bind by column name */
// $stmt->bindColumn('calories', $cals);
// 
// while ($stmt->fetch(PDO::FETCH_BOUND)) {
//     print $name . "\t" . $colour . "\t" . $cals . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// apple   red     150
// banana  yellow  175
// kiwi    green   75
// orange  orange  150
// mango   red     200
// strawberry      red     25
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.bindcolumn.php
// ========== PDOSTATEMENT_BINDCOLUMN - END

// SYNTAX:
// bool PDOStatement::bindColumn(string|int $column, mixed& $var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)

return $return_pdostatement_bindcolumn; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDCOLUMN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDPARAM
// ============================== PUBLIC
// ============================== ABOUT
// Binds a parameter to the specified variable name.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::bindParam() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== USING CONSTANTS (1)
// PDO::PARAM_STR - PDOStatement::bindParam()
// ============================== CODE
function php_database_abstract_pdo_pdostatement_bindparam($pdostatement, $param, & $var, $type = PDO::PARAM_STR, $maxLength = 0, $driverOptions = null)
{
$return_pdostatement_bindparam = false;

// ========== PDOSTATEMENT_BINDPARAM - BEGIN
// ===== ABOUT
// Binds a parameter to the specified variable name
// ===== DESCRIPTION
// Binds a PHP variable to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement. Unlike PDOStatement::bindValue(), the variable is bound as a reference and will only be evaluated at the time that PDOStatement::execute() is called.
// Most parameters are input parameters, that is, parameters that are used in a read-only fashion to build up the query (but may nonetheless be cast according to type). Some drivers support the invocation of stored procedures that return data as output parameters, and some also as input/output parameters that both send in data and are updated to receive it.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::bindParam(
//    string|int $param,
//    mixed &$var,
//    int $type = PDO::PARAM_STR,
//    int $maxLength = 0,
//    mixed $driverOptions = null
// ): bool
// ===== CODE
$return_pdostatement_bindparam = $pdostatement->bindParam(

$param, // string|int param - Parameter identifier. For a prepared statement using named placeholders, this will be a parameter name of the form :name. For a prepared statement using question mark placeholders, this will be the 1-indexed position of the parameter.

$var, // mixed& var - Name of the PHP variable to bind to the SQL statement parameter.

$type, // int type - Explicit data type for the parameter using the PDO::PARAM_* constants. To return an INOUT parameter from a stored procedure, use the bitwise OR operator to set the PDO::PARAM_INPUT_OUTPUT bits for the type parameter.

$maxLength, // int maxLength - Length of the data type. To indicate that a parameter is an OUT parameter from a stored procedure, you must explicitly set the length. Meaningful only when type parameter is PDO::PARAM_INPUT_OUTPUT.

$driverOptions // mixed driverOptions

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Execute a prepared statement with named placeholders
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour = :colour');
// $sth->bindParam('calories', $calories, PDO::PARAM_INT);
// /* Names can be prefixed with colons ":" too (optional) */
// $sth->bindParam(':colour', $colour, PDO::PARAM_STR);
// $sth->execute();
// [/php]
// [/example]
// [example]
// Example #2 Execute a prepared statement with question mark placeholders
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?');
// $sth->bindParam(1, $calories, PDO::PARAM_INT);
// $sth->bindParam(2, $colour, PDO::PARAM_STR);
// $sth->execute();
// [/php]
// [/example]
// [example]
// Example #3 Call a stored procedure with an INOUT parameter
// [php]
// /* Call a stored procedure with an INOUT parameter */
// $colour = 'red';
// $sth = $dbh->prepare('CALL puree_fruit(?)');
// $sth->bindParam(1, $colour, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 12);
// $sth->execute();
// print "After pureeing fruit, the colour is: $colour";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.bindparam.php
// ========== PDOSTATEMENT_BINDPARAM - END

// SYNTAX:
// bool PDOStatement::bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)

return $return_pdostatement_bindparam; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDPARAM
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDVALUE
// ============================== PUBLIC
// ============================== ABOUT
// Binds a value to a parameter.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_1_0_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::bindValue() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// ============================== USING CONSTANTS (1)
// PDO::PARAM_STR - PDOStatement::bindValue()
// ============================== CODE
function php_database_abstract_pdo_pdostatement_bindvalue($pdostatement, $param, $value, $type = PDO::PARAM_STR)
{
$return_pdostatement_bindvalue = false;

// ========== PDOSTATEMENT_BINDVALUE - BEGIN
// ===== ABOUT
// Binds a value to a parameter
// ===== DESCRIPTION
// Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_1_0_0
// ===== SYNTAX
// public PDOStatement::bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool
// ===== CODE
$return_pdostatement_bindvalue = $pdostatement->bindValue(

$param, // string|int param - Parameter identifier. For a prepared statement using named placeholders, this will be a parameter name of the form :name. For a prepared statement using question mark placeholders, this will be the 1-indexed position of the parameter.

$value, // mixed value - The value to bind to the parameter.

$type // int type - Explicit data type for the parameter using the PDO::PARAM_* constants.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Execute a prepared statement with named placeholders
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour = :colour');
// 
// /* Sets a parameter value using its name */
// $sth->bindValue('calories', $calories, PDO::PARAM_INT);
// /* Optionally, parameter names can also be prefixed with colons ":" */
// $sth->bindValue(':colour', $colour, PDO::PARAM_STR);
// $sth->execute();
// [/php]
// [/example]
// [example]
// Example #2 Execute a prepared statement with question mark placeholders
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?');
// $sth->bindValue(1, $calories, PDO::PARAM_INT);
// $sth->bindValue(2, $colour, PDO::PARAM_STR);
// $sth->execute();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.bindvalue.php
// ========== PDOSTATEMENT_BINDVALUE - END

// SYNTAX:
// bool PDOStatement::bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR)

return $return_pdostatement_bindvalue; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_BINDVALUE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_CLOSECURSOR
// ============================== PUBLIC
// ============================== ABOUT
// Closes the cursor, enabling the statement to be executed again.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::closeCursor() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_closecursor($pdostatement)
{
$return_pdostatement_closecursor = false;

// ========== PDOSTATEMENT_CLOSECURSOR - BEGIN
// ===== ABOUT
// Closes the cursor, enabling the statement to be executed again
// ===== DESCRIPTION
// PDOStatement::closeCursor() frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.
// This method is useful for database drivers that do not support executing a PDOStatement object when a previously executed PDOStatement object still has unfetched rows. If your database driver suffers from this limitation, the problem may manifest itself in an out-of-sequence error.
// PDOStatement::closeCursor() is implemented either as an optional driver specific method (allowing for maximum efficiency), or as the generic PDO fallback if no driver specific function is installed. The PDO generic fallback is semantically the same as writing the following code in your PHP script:
// [php]
// do {
//     while ($stmt->fetch())
//         ;
//     if (!$stmt->nextRowset())
//         break;
// } while (true);
// [/php]
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ===== SYNTAX
// public PDOStatement::closeCursor(): bool
// ===== CODE
$return_pdostatement_closecursor = $pdostatement->closeCursor(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 A PDOStatement::closeCursor() example
// In the following example, the $stmt PDOStatement object returns multiple rows but the application fetches only the first row, leaving the PDOStatement object in a state of having unfetched rows. To ensure that the application will work with all database drivers, the author inserts a call to PDOStatement::closeCursor() on $stmt before executing the $otherStmt PDOStatement object.
// [php]
// /* Create a PDOStatement object */
// $stmt = $dbh->prepare('SELECT foo FROM bar');
// 
// /* Create a second PDOStatement object */
// $otherStmt = $dbh->prepare('SELECT foobaz FROM foobar');
// 
// /* Execute the first statement */
// $stmt->execute();
// 
// /* Fetch only the first row from the results */
// $stmt->fetch();
// 
// /* The following call to closeCursor() may be required by some drivers */
// $stmt->closeCursor();
// 
// /* Now we can execute the second statement */
// $otherStmt->execute();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.closecursor.php
// ========== PDOSTATEMENT_CLOSECURSOR - END

// SYNTAX:
// bool PDOStatement::closeCursor()

return $return_pdostatement_closecursor; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_CLOSECURSOR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_COLUMNCOUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of columns in the result set.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::columnCount() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_columncount($pdostatement)
{
$return_pdostatement_columncount = 0;

// ========== PDOSTATEMENT_COLUMNCOUNT - BEGIN
// ===== ABOUT
// Returns the number of columns in the result set
// ===== DESCRIPTION
// Use PDOStatement::columnCount() to return the number of columns in the result set represented by the PDOStatement object.
// If the PDOStatement object was returned from PDO::query(), the column count is immediately available.
// If the PDOStatement object was returned from PDO::prepare(), an accurate column count will not be available until you invoke PDOStatement::execute().
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDOStatement::columnCount(): int
// ===== CODE
$return_pdostatement_columncount = $pdostatement->columnCount(

// This function has no parameters.

); // Return Values
// Returns the number of columns in the result set represented by the PDOStatement object, even if the result set is empty. If there is no result set, PDOStatement::columnCount() returns 0.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Counting columns
// This example demonstrates how PDOStatement::columnCount() operates with and without a result set.
// [php]
// $dbh = new PDO('odbc:sample', 'db2inst1', 'ibmdb2');
// 
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// 
// /* Count the number of columns in the (non-existent) result set */
// $colcount = $sth->columnCount();
// print "Before execute(), result set has $colcount columns (should be 0)\n";
// 
// $sth->execute();
// 
// /* Count the number of columns in the result set */
// $colcount = $sth->columnCount();
// print "After execute(), result set has $colcount columns (should be 2)\n";
// 
// [/php]
// The above example will output:
// [result]
// Before execute(), result set has 0 columns (should be 0)
// After execute(), result set has 2 columns (should be 2)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.columncount.php
// ========== PDOSTATEMENT_COLUMNCOUNT - END

// SYNTAX:
// int PDOStatement::columnCount()

return $return_pdostatement_columncount; // int
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_COLUMNCOUNT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_DEBUGDUMPPARAMS
// ============================== PUBLIC
// ============================== ABOUT
// Dump an SQL prepared command.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_9_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::debugDumpParams() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_debugdumpparams($pdostatement)
{
$return_pdostatement_debugdumpparams = false;

// ========== PDOSTATEMENT_DEBUGDUMPPARAMS - BEGIN
// ===== ABOUT
// Dump an SQL prepared command
// ===== DESCRIPTION
// Dumps the information contained by a prepared statement directly on the output. It will provide the SQL query in use, the number of parameters used (Params), the list of parameters with their key name or position, their name, their position in the query (if this is supported by the PDO driver, otherwise, it will be -1), type (param_type) as an integer, and a boolean value is_param.
// This is a debug function, which dumps the data directly to the normal output.
// Tip: As with anything that outputs its result directly to the browser, the output-control functions can be used to capture the output of this function, and save it in a string (for example).
// This will only dump the parameters in the statement at the moment of the dump. Extra parameters are not stored in the statement, and not displayed.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ===== SYNTAX
// public PDOStatement::debugDumpParams(): ?bool
// ===== CODE
$return_pdostatement_debugdumpparams = $pdostatement->debugDumpParams(

// This function has no parameters.

); // Return Values
// Returns null, or false in case of an error.
// 
// Changelog
// Version - Description
// 7.2.0   - PDOStatement::debugDumpParams() now returns the SQL sent to the database, including the full, raw query (including the replaced placeholders with their bounded values). Note, that this will only be available if emulated prepared statements are turned on.
// 
// [examples]
// Examples
// [example]
// Example #1 PDOStatement::debugDumpParams() example with named parameters
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour = :colour');
// $sth->bindParam(':calories', $calories, PDO::PARAM_INT);
// $sth->bindValue(':colour', $colour, PDO::PARAM_STR, 12);
// $sth->execute();
// 
// $sth->debugDumpParams();
// 
// [/php]
// The above example will output:
// [result]
// SQL: [96] SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour = :colour
// Params:  2
// Key: Name: [9] :calories
// paramno=-1
// name=[9] ":calories"
// is_param=1
// param_type=1
// Key: Name: [7] :colour
// paramno=-1
// name=[7] ":colour"
// is_param=1
// param_type=2
// [/result]
// [/example]
// [example]
// Example #2 PDOStatement::debugDumpParams() example with unnamed parameters
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $name = 'apple';
// 
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?');
// $sth->bindParam(1, $calories, PDO::PARAM_INT);
// $sth->bindValue(2, $colour, PDO::PARAM_STR);
// $sth->execute();
// 
// $sth->debugDumpParams();
// 
// [/php]
// The above example will output:
// [result]
// SQL: [82] SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?
// Params:  2
// Key: Position #0:
// paramno=0
// name=[0] ""
// is_param=1
// param_type=1
// Key: Position #1:
// paramno=1
// name=[0] ""
// is_param=1
// param_type=2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.debugdumpparams.php
// ========== PDOSTATEMENT_DEBUGDUMPPARAMS - END

// SYNTAX:
// bool PDOStatement::debugDumpParams()

return $return_pdostatement_debugdumpparams; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_DEBUGDUMPPARAMS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ERRORCODE
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the SQLSTATE associated with the last operation on the statement handle.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::errorCode() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_errorcode($pdostatement)
{
$return_pdostatement_errorcode = null;

// ========== PDOSTATEMENT_ERRORCODE - BEGIN
// ===== ABOUT
// Fetch the SQLSTATE associated with the last operation on the statement handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::errorCode(): ?string
// ===== CODE
$return_pdostatement_errorcode = $pdostatement->errorCode(

// This function has no parameters.

); // Return Values
// Identical to PDO::errorCode(), except that PDOStatement::errorCode() only retrieves error codes for operations performed with PDOStatement objects.
// 
// [examples]
// Examples
// [example]
// Example #1 Retrieving an SQLSTATE code
// [php]
// /* Provoke an error -- the BONES table does not exist */
// $err = $dbh->prepare('SELECT skull FROM bones');
// $err->execute();
// 
// echo "\nPDOStatement::errorCode(): ";
// print $err->errorCode();
// [/php]
// The above example will output:
// [result]
// PDOStatement::errorCode(): 42S02
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.errorcode.php
// ========== PDOSTATEMENT_ERRORCODE - END

// SYNTAX:
// string PDOStatement::errorCode()

return $return_pdostatement_errorcode; // string
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ERRORCODE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ERRORINFO
// ============================== PUBLIC
// ============================== ABOUT
// Fetch extended error information associated with the last operation on the statement handle.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::errorInfo() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_errorinfo($pdostatement)
{
$return_pdostatement_errorinfo = null;

// ========== PDOSTATEMENT_ERRORINFO - BEGIN
// ===== ABOUT
// Fetch extended error information associated with the last operation on the statement handle
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::errorInfo(): array
// ===== CODE
$return_pdostatement_errorinfo = $pdostatement->errorInfo(

// This function has no parameters.

); // Return Values
// PDOStatement::errorInfo() returns an array of error information about the last operation performed by this statement handle. The array consists of at least the following fields:
// Element - Information
// 0       - SQLSTATE error code (a five characters alphanumeric identifier defined in the ANSI SQL standard).
// 1       - Driver specific error code.
// 2       - Driver specific error message.
// 
// [examples]
// Examples
// [example]
// Example #1 Displaying errorInfo() fields for a PDO_ODBC connection to a DB2 database
// [php]
// /* Provoke an error -- the BONES table does not exist */
// $sth = $dbh->prepare('SELECT skull FROM bones');
// $sth->execute();
// 
// echo "\nPDOStatement::errorInfo():\n";
// $arr = $sth->errorInfo();
// print_r($arr);
// [/php]
// The above example will output:
// [result]
// PDOStatement::errorInfo():
// Array
// (
//     [0] => 42S02
//     [1] => -204
//     [2] => [IBM][CLI Driver][DB2/LINUX] SQL0204N  "DANIELS.BONES" is an undefined name.  SQLSTATE=42704
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.errorinfo.php
// ========== PDOSTATEMENT_ERRORINFO - END

// SYNTAX:
// array PDOStatement::errorInfo()

return $return_pdostatement_errorinfo; // array
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ERRORINFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_EXECUTE
// ============================== PUBLIC
// ============================== ABOUT
// Executes a prepared statement.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::execute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_execute($pdostatement, $params = null)
{
$return_pdostatement_execute = false;

// ========== PDOSTATEMENT_EXECUTE - BEGIN
// ===== ABOUT
// Executes a prepared statement
// ===== DESCRIPTION
// Execute the prepared statement. If the prepared statement included parameter markers, either:
// * PDOStatement::bindParam() and/or PDOStatement::bindValue() has to be called to bind either variables or values (respectively) to the parameter markers. Bound variables pass their value as input and receive the output value, if any, of their associated parameter markers
// * or an array of input-only parameter values has to be passed
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::execute(?array $params = null): bool
// ===== CODE
$return_pdostatement_execute = $pdostatement->execute(

$params // array params - An array of values with as many elements as there are bound parameters in the SQL statement being executed. All values are treated as PDO::PARAM_STR.
// Multiple values cannot be bound to a single parameter; for example, it is not allowed to bind two values to a single named parameter in an IN() clause.
// Binding more values than specified is not possible; if more keys exist in params than in the SQL specified in the PDO::prepare(), then the statement will fail and an error is emitted.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Execute a prepared statement with a bound variable and value
// [php]
// /* Execute a prepared statement by binding a variable and value */
// $calories = 150;
// $colour = 'gre';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour LIKE :colour');
// $sth->bindParam('calories', $calories, PDO::PARAM_INT);
// /* Names can be prefixed with colons ":" too (optional) */
// $sth->bindValue(':colour', "%$colour%");
// $sth->execute();
// [/php]
// [/example]
// [example]
// Example #2 Execute a prepared statement with an array of named values
// [php]
// /* Execute a prepared statement by passing an array of insert values */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < :calories AND colour = :colour');
// $sth->execute(array('calories' => $calories, 'colour' => $colour));
// /* Array keys can be prefixed with colons ":" too (optional) */
// $sth->execute(array(':calories' => $calories, ':colour' => $colour));
// [/php]
// [/example]
// [example]
// Example #3 Execute a prepared statement with an array of positional values
// [php]
// /* Execute a prepared statement by passing an array of insert values */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?');
// $sth->execute(array($calories, $colour));
// [/php]
// [/example]
// [example]
// Example #4 Execute a prepared statement with variables bound to positional placeholders
// [php]
// /* Execute a prepared statement by binding PHP variables */
// $calories = 150;
// $colour = 'red';
// $sth = $dbh->prepare('SELECT name, colour, calories
//     FROM fruit
//     WHERE calories < ? AND colour = ?');
// $sth->bindParam(1, $calories, PDO::PARAM_INT);
// $sth->bindParam(2, $colour, PDO::PARAM_STR, 12);
// $sth->execute();
// [/php]
// [/example]
// [example]
// Example #5 Execute a prepared statement using array for IN clause
// [php]
// /* Execute a prepared statement using an array of values for an IN clause */
// $params = array(1, 21, 63, 171);
// /* Create a string for the parameter placeholders filled to the number of params */
// $place_holders = implode(',', array_fill(0, count($params), '?'));
// 
// /*
//     This prepares the statement with enough unnamed placeholders for every value
//     in our $params array. The values of the $params array are then bound to the
//     placeholders in the prepared statement when the statement is executed.
//     This is not the same thing as using PDOStatement::bindParam() since this
//     requires a reference to the variable. PDOStatement::execute() only binds
//     by value instead.
// */
// $sth = $dbh->prepare("SELECT id, name FROM contacts WHERE id IN ($place_holders)");
// $sth->execute($params);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Some drivers require to close cursor before executing next statement.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.execute.php
// ========== PDOSTATEMENT_EXECUTE - END

// SYNTAX:
// bool PDOStatement::execute(array $params = null)

return $return_pdostatement_execute; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_EXECUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCH
// ============================== PUBLIC
// ============================== ABOUT
// Fetches the next row from a result set.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::fetch() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== USING CONSTANTS (2)
// PDO::FETCH_DEFAULT - PDOStatement::fetch()
// PDO::FETCH_ORI_NEXT - PDOStatement::fetch()
// ============================== CODE
function php_database_abstract_pdo_pdostatement_fetch($pdostatement, $mode = PDO::FETCH_DEFAULT, $cursorOrientation = PDO::FETCH_ORI_NEXT, $cursorOffset = 0)
{
$return_pdostatement_fetch = null;

// ========== PDOSTATEMENT_FETCH - BEGIN
// ===== ABOUT
// Fetches the next row from a result set
// ===== DESCRIPTION
// Fetches a row from a result set associated with a PDOStatement object. The mode parameter determines how PDO returns the row.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0): mixed
// ===== CODE
$return_pdostatement_fetch = $pdostatement->fetch(

$mode, // int mode - Controls how the next row will be returned to the caller. This value must be one of the PDO::FETCH_* constants, defaulting to value of PDO::ATTR_DEFAULT_FETCH_MODE (which defaults to PDO::FETCH_BOTH).
// * PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
// * PDO::FETCH_BOTH (default): returns an array indexed by both column name and 0-indexed column number as returned in your result set
// * PDO::FETCH_BOUND: returns true and assigns the values of the columns in your result set to the PHP variables to which they were bound with the PDOStatement::bindColumn() method
// * PDO::FETCH_CLASS: returns a new instance of the requested class, mapping the columns of the result set to named properties in the class, and calling the constructor afterwards, unless PDO::FETCH_PROPS_LATE is also given. If mode includes PDO::FETCH_CLASSTYPE (e.g. PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE) then the name of the class is determined from a value of the first column.
// * PDO::FETCH_INTO: updates an existing instance of the requested class, mapping the columns of the result set to named properties in the class
// * PDO::FETCH_LAZY: combines PDO::FETCH_BOTH and PDO::FETCH_OBJ, and is returning a PDORow object which is creating the object property names as they are accessed.
// * PDO::FETCH_NAMED: returns an array with the same form as PDO::FETCH_ASSOC, except that if there are multiple columns with the same name, the value referred to by that key will be an array of all the values in the row that had that column name
// * PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0
// * PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set
// * PDO::FETCH_PROPS_LATE: when used with PDO::FETCH_CLASS, the constructor of the class is called before the properties are assigned from the respective column values.

$cursorOrientation, // int cursorOrientation - For a PDOStatement object representing a scrollable cursor, this value determines which row will be returned to the caller. This value must be one of the PDO::FETCH_ORI_* constants, defaulting to PDO::FETCH_ORI_NEXT. To request a scrollable cursor for your PDOStatement object, you must set the PDO::ATTR_CURSOR attribute to PDO::CURSOR_SCROLL when you prepare the SQL statement with PDO::prepare().

$cursorOffset // int cursorOffset - For a PDOStatement object representing a scrollable cursor for which the cursorOrientation parameter is set to PDO::FETCH_ORI_ABS, this value specifies the absolute number of the row in the result set that shall be fetched.
// For a PDOStatement object representing a scrollable cursor for which the cursorOrientation parameter is set to PDO::FETCH_ORI_REL, this value specifies the row to fetch relative to the cursor position before PDOStatement::fetch() was called.

); // Return Values
// The return value of this function on success depends on the fetch type. In all cases, false is returned on failure or if there are no more rows.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Fetching rows using different fetch styles
// [php]
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// /* Exercise PDOStatement::fetch styles */
// print "PDO::FETCH_ASSOC: ";
// print "Return next row as an array indexed by column name\n";
// $result = $sth->fetch(PDO::FETCH_ASSOC);
// print_r($result);
// print "\n";
// 
// print "PDO::FETCH_BOTH: ";
// print "Return next row as an array indexed by both column name and number\n";
// $result = $sth->fetch(PDO::FETCH_BOTH);
// print_r($result);
// print "\n";
// 
// print "PDO::FETCH_LAZY: ";
// print "Return next row as a PDORow object with column names as properties\n";
// $result = $sth->fetch(PDO::FETCH_LAZY);
// print_r($result);
// print "\n";
// 
// print "PDO::FETCH_OBJ: ";
// print "Return next row as an anonymous object with column names as properties\n";
// $result = $sth->fetch(PDO::FETCH_OBJ);
// print $result->name;
// print "\n";
// [/php]
// The above example will output:
// [result]
// PDO::FETCH_ASSOC: Return next row as an array indexed by column name
// Array
// (
//     [name] => apple
//     [colour] => red
// )
// 
// PDO::FETCH_BOTH: Return next row as an array indexed by both column name and number
// Array
// (
//     [name] => banana
//     [0] => banana
//     [colour] => yellow
//     [1] => yellow
// )
// 
// PDO::FETCH_LAZY: Return next row as a PDORow object with column names as properties
// PDORow Object
// (
//     [name] => orange
//     [colour] => orange
// )
// 
// PDO::FETCH_OBJ: Return next row as an anonymous object with column names as properties
// kiwi
// [/result]
// [/example]
// [example]
// Example #2 Fetching rows with a scrollable cursor
// [php]
// function readDataForwards($dbh) {
//     $sql = 'SELECT hand, won, bet FROM mynumbers ORDER BY BET';
//     $stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
//     $stmt->execute();
//     while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
//         $data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
//         print $data;
//     }
// }
// function readDataBackwards($dbh) {
//     $sql = 'SELECT hand, won, bet FROM mynumbers ORDER BY bet';
//     $stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
//     $stmt->execute();
//     $row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
//     do {
//         $data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
//         print $data;
//     } while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
// }
// 
// print "Reading forwards:\n";
// readDataForwards($conn);
// 
// print "Reading backwards:\n";
// readDataBackwards($conn);
// [/php]
// The above example will output:
// [result]
// Reading forwards:
// 21    10    5
// 16    0     5
// 19    20    10
// 
// Reading backwards:
// 19    20    10
// 16    0     5
// 21    10    5
// [/result]
// [/example]
// [example]
// Example #3 Construction order
// When objects are fetched via PDO::FETCH_CLASS the object properties are assigned first, and then the constructor of the class is invoked. If PDO::FETCH_PROPS_LATE is also given, this order is reversed, i.e. first the constructor is called, and afterwards the properties are assigned.
// [php]
// class Person
// {
//     private $name;
// 
//     public function __construct()
//     {
//         $this->tell();
//     }
// 
//     public function tell()
//     {
//         if (isset($this->name)) {
//             echo "I am {$this->name}.\n";
//         } else {
//             echo "I don't have a name yet.\n";
//         }
//     }
// }
// 
// $sth = $dbh->query("SELECT * FROM people");
// $sth->setFetchMode(PDO::FETCH_CLASS, 'Person');
// $person = $sth->fetch();
// $person->tell();
// $sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Person');
// $person = $sth->fetch();
// $person->tell();
// [/php]
// The above example will output something similar to:
// [result]
// I am Alice.
// I am Alice.
// I don't have a name yet.
// I am Bob.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.fetch.php
// ========== PDOSTATEMENT_FETCH - END

// SYNTAX:
// mixed PDOStatement::fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0)

return $return_pdostatement_fetch; // mixed
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCH
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHALL
// ============================== PUBLIC
// ============================== ABOUT
// Fetches the remaining rows from a result set.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::fetchAll() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== USING CONSTANTS (1)
// PDO::FETCH_COLUMN - PDOStatement::fetchAll()
// ============================== CODE
function php_database_abstract_pdo_pdostatement_fetchall($pdostatement, $mode = PDO::FETCH_COLUMN, $column)
{
$return_pdostatement_fetchall = null;

// ========== PDOSTATEMENT_FETCHALL - BEGIN
// ===== ABOUT
// Fetches the remaining rows from a result set
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::fetchAll(int $mode = PDO::FETCH_DEFAULT): array
// 
// public PDOStatement::fetchAll(int $mode = PDO::FETCH_COLUMN, int $column): array
// 
// public PDOStatement::fetchAll(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs): array
// 
// public PDOStatement::fetchAll(int $mode = PDO::FETCH_FUNC, callable $callback): array
// ===== CODE
$return_pdostatement_fetchall = $pdostatement->fetchAll(

$mode, // int mode - Controls the contents of the returned array as documented in PDOStatement::fetch(). Defaults to value of PDO::ATTR_DEFAULT_FETCH_MODE (which defaults to PDO::FETCH_BOTH)
//  To return an array consisting of all values of a single column from the result set, specify PDO::FETCH_COLUMN. You can specify which column you want with the column parameter.
//  To fetch only the unique values of a single column from the result set, bitwise-OR PDO::FETCH_COLUMN with PDO::FETCH_UNIQUE.
//  To return an associative array grouped by the values of a specified column, bitwise-OR PDO::FETCH_COLUMN with PDO::FETCH_GROUP.
// The following are dynamic parameters that are depending on the fetch mode. They can't be used with named parameters.

$column // int column - Used with PDO::FETCH_COLUMN. Returns the indicated 0-indexed column.

// string class - Used with PDO::FETCH_CLASS. Returns instances of the specified class, mapping the columns of each row to named properties in the class.

// array constructorArgs - Arguments of custom class constructor when the mode parameter is PDO::FETCH_CLASS.

// callable callback - Used with PDO::FETCH_FUNC. Returns the results of calling the specified function, using each row's columns as parameters in the call.

); // Return Values
// PDOStatement::fetchAll() returns an array containing all of the remaining rows in the result set. The array represents each row as either an array of column values or an object with properties corresponding to each column name. An empty array is returned if there are zero results to fetch.
// Using this method to fetch large result sets will result in a heavy demand on system and possibly network resources. Rather than retrieving all of the data and manipulating it in PHP, consider using the database server to manipulate the result sets. For example, use the WHERE and ORDER BY clauses in SQL to restrict results before retrieving and processing them with PHP.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// Changelog
// Version - Description
// 8.0.0   - This method always returns an array now, while previously false may have been returned on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Fetch all remaining rows in a result set
// [php]
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// /* Fetch all of the remaining rows in the result set */
// print "Fetch all of the remaining rows in the result set:\n";
// $result = $sth->fetchAll();
// print_r($result);
// [/php]
// The above example will output something similar to:
// [result]
// Fetch all of the remaining rows in the result set:
// Array
// (
//     [0] => Array
//         (
//             [name] => apple
//             [0] => apple
//             [colour] => red
//             [1] => red
//         )
// 
//     [1] => Array
//         (
//             [name] => pear
//             [0] => pear
//             [colour] => green
//             [1] => green
//         )
// 
//     [2] => Array
//         (
//             [name] => watermelon
//             [0] => watermelon
//             [colour] => pink
//             [1] => pink
//         )
// 
// )
// [/result]
// [/example]
// [example]
// Example #2 Fetching all values of a single column from a result set
// The following example demonstrates how to return all of the values of a single column from a result set, even though the SQL statement itself may return multiple columns per row.
// [php]
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// /* Fetch all of the values of the first column */
// $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
// var_dump($result);
// [/php]
// The above example will output something similar to:
// [result]
// Array(3)
// (
//     [0] =>
//     string(5) => apple
//     [1] =>
//     string(4) => pear
//     [2] =>
//     string(10) => watermelon
// )
// [/result]
// [/example]
// [example]
// Example #3 Grouping all values by a single column
// The following example demonstrates how to return an associative array grouped by the values of the specified column in the result set. The array contains three keys: values apple and pear are returned as arrays that contain two different colours, while watermelon is returned as an array that contains only one colour.
// [php]
// $insert = $dbh->prepare("INSERT INTO fruit(name, colour) VALUES (?, ?)");
// $insert->execute(array('apple', 'green'));
// $insert->execute(array('pear', 'yellow'));
// 
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// /* Group values by the first column */
// var_dump($sth->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP));
// [/php]
// The above example will output something similar to:
// [result]
// array(3) {
//   ["apple"]=>
//   array(2) {
//     [0]=>
//     string(5) "green"
//     [1]=>
//     string(3) "red"
//   }
//   ["pear"]=>
//   array(2) {
//     [0]=>
//     string(5) "green"
//     [1]=>
//     string(6) "yellow"
//   }
//   ["watermelon"]=>
//   array(1) {
//     [0]=>
//     string(5) "pink"
//   }
// }
// [/result]
// [/example]
// [example]
// Example #4 Instantiating a class for each result
// The following example demonstrates the behaviour of the PDO::FETCH_CLASS fetch style.
// [php]
// class fruit {
//     public $name;
//     public $colour;
// }
// 
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// $result = $sth->fetchAll(PDO::FETCH_CLASS, "fruit");
// var_dump($result);
// [/php]
// The above example will output something similar to:
// [result]
// array(3) {
//   [0]=>
//   object(fruit)#1 (2) {
//     ["name"]=>
//     string(5) "apple"
//     ["colour"]=>
//     string(5) "green"
//   }
//   [1]=>
//   object(fruit)#2 (2) {
//     ["name"]=>
//     string(4) "pear"
//     ["colour"]=>
//     string(6) "yellow"
//   }
//   [2]=>
//   object(fruit)#3 (2) {
//     ["name"]=>
//     string(10) "watermelon"
//     ["colour"]=>
//     string(4) "pink"
//   }
//   [3]=>
//   object(fruit)#4 (2) {
//     ["name"]=>
//     string(5) "apple"
//     ["colour"]=>
//     string(3) "red"
//   }
//   [4]=>
//   object(fruit)#5 (2) {
//     ["name"]=>
//     string(4) "pear"
//     ["colour"]=>
//     string(5) "green"
//   }
// }
// [/result]
// [/example]
// [example]
// Example #5 Calling a function for each result
// The following example demonstrates the behaviour of the PDO::FETCH_FUNC fetch style.
// [php]
// function fruit($name, $colour) {
//     return "{$name}: {$colour}";
// }
// 
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// $result = $sth->fetchAll(PDO::FETCH_FUNC, "fruit");
// var_dump($result);
// [/php]
// The above example will output something similar to:
// [result]
// array(3) {
//   [0]=>
//   string(12) "apple: green"
//   [1]=>
//   string(12) "pear: yellow"
//   [2]=>
//   string(16) "watermelon: pink"
//   [3]=>
//   string(10) "apple: red"
//   [4]=>
//   string(11) "pear: green"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.fetchall.php
// ========== PDOSTATEMENT_FETCHALL - END

// SYNTAX:
// array PDOStatement::fetchAll(int $mode = PDO::FETCH_COLUMN, int $column)

return $return_pdostatement_fetchall; // array
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHALL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHCOLUMN
// ============================== PUBLIC
// ============================== ABOUT
// Returns a single column from the next row of a result set.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_9_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::fetchColumn() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_fetchcolumn($pdostatement, $column = 0)
{
$return_pdostatement_fetchcolumn = null;

// ========== PDOSTATEMENT_FETCHCOLUMN - BEGIN
// ===== ABOUT
// Returns a single column from the next row of a result set
// ===== DESCRIPTION
// Returns a single column from the next row of a result set or false if there are no more rows.
// Note: PDOStatement::fetchColumn() should not be used to retrieve boolean columns, as it is impossible to distinguish a value of false from there being no more rows to retrieve. Use PDOStatement::fetch() instead.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_9_0
// ===== SYNTAX
// public PDOStatement::fetchColumn(int $column = 0): mixed
// ===== CODE
$return_pdostatement_fetchcolumn = $pdostatement->fetchColumn(

$column // int column - 0-indexed number of the column you wish to retrieve from the row. If no value is supplied, PDOStatement::fetchColumn() fetches the first column.

); // Return Values
// PDOStatement::fetchColumn() returns a single column from the next row of a result set or false if there are no more rows.
// Warning: There is no way to return another column from the same row if you use PDOStatement::fetchColumn() to retrieve data.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Return first column of the next row
// [php]
// $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// $sth->execute();
// 
// print "Fetch the first column from the first row in the result set:\n";
// $result = $sth->fetchColumn();
// print "name = $result\n";
// 
// print "Fetch the second column from the second row in the result set:\n";
// $result = $sth->fetchColumn(1);
// print "colour = $result\n";
// [/php]
// The above example will output:
// [result]
// Fetch the first column from the first row in the result set:
// name = lemon
// Fetch the second column from the second row in the result set:
// colour = red
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-15)
// URL: https://www.php.net/manual/en/pdostatement.fetchcolumn.php
// ========== PDOSTATEMENT_FETCHCOLUMN - END

// SYNTAX:
// mixed PDOStatement::fetchColumn(int $column = 0)

return $return_pdostatement_fetchcolumn; // mixed
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHCOLUMN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHOBJECT
// ============================== PUBLIC
// ============================== ABOUT
// Fetches the next row and returns it as an object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_4
// ============================== USING FUNCTIONS (1)
// PDOStatement::fetchObject() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_4
// ============================== CODE
function php_database_abstract_pdo_pdostatement_fetchobject($pdostatement, $class = "stdClass", $constructorArgs = array())
{
$return_pdostatement_fetchobject = false;

// ========== PDOSTATEMENT_FETCHOBJECT - BEGIN
// ===== ABOUT
// Fetches the next row and returns it as an object
// ===== DESCRIPTION
// Fetches the next row and returns it as an object. This function is an alternative to PDOStatement::fetch() with PDO::FETCH_CLASS or PDO::FETCH_OBJ style.
// When an object is fetched, its properties are assigned from respective column values, and afterwards its constructor is invoked.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_4
// ===== SYNTAX
// public PDOStatement::fetchObject(?string $class = "stdClass", array $constructorArgs = []): object|false
// ===== CODE
$return_pdostatement_fetchobject = $pdostatement->fetchObject(

$class, // string class - Name of the created class.

$constructorArgs // array constructorArgs - Elements of this array are passed to the constructor.

); // Return Values
// Returns an instance of the required class with property names that correspond to the column names or false on failure.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.fetchobject.php
// ========== PDOSTATEMENT_FETCHOBJECT - END

// SYNTAX:
// object|false PDOStatement::fetchObject(string $class = "stdClass", array $constructorArgs = array())

return $return_pdostatement_fetchobject; // object|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_FETCHOBJECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETATTRIBUTE
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve a statement attribute.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::getAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_getattribute($pdostatement, $name)
{
$return_pdostatement_getattribute = null;

// ========== PDOSTATEMENT_GETATTRIBUTE - BEGIN
// ===== ABOUT
// Retrieve a statement attribute
// ===== DESCRIPTION
// Gets an attribute of the statement. Currently, no generic attributes exist but only driver specific:
// * PDO::ATTR_CURSOR_NAME (Firebird and ODBC specific): Get the name of cursor for UPDATE ... WHERE CURRENT OF.
// Note that driver specific attributes must not be used with other drivers.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDOStatement::getAttribute(int $name): mixed
// ===== CODE
$return_pdostatement_getattribute = $pdostatement->getAttribute(

$name // int name - The attribute to query.

); // Return Values
// Returns the attribute value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.getattribute.php
// ========== PDOSTATEMENT_GETATTRIBUTE - END

// SYNTAX:
// mixed PDOStatement::getAttribute(int $name)

return $return_pdostatement_getattribute; // mixed
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETATTRIBUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETCOLUMNMETA
// ============================== PUBLIC
// ============================== ABOUT
// Returns metadata for a column in a result set.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::getColumnMeta() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_getcolumnmeta($pdostatement, $column)
{
$return_pdostatement_getcolumnmeta = false;

// ========== PDOSTATEMENT_GETCOLUMNMETA - BEGIN
// ===== ABOUT
// Returns metadata for a column in a result set
// ===== DESCRIPTION
// Retrieves the metadata for a 0-indexed column in a result set as an associative array.
// Warning: Some drivers may not implement PDOStatement::getColumnMeta(), as it is optional. However, all PDO drivers documented in the manual implement this function.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDOStatement::getColumnMeta(int $column): array|false
// ===== CODE
$return_pdostatement_getcolumnmeta = $pdostatement->getColumnMeta(

$column // int column - The 0-indexed column in the result set.

); // Return Values
// Returns an associative array containing the following values representing the metadata for a single column:
// Column metadata
// Name             - Value
// native_type      - The PHP native type used to represent the column value.
// driver:decl_type - The SQL type used to represent the column value in the database. If the column in the result set is the result of a function, this value is not returned by PDOStatement::getColumnMeta().
// flags            - Any flags set for this column.
// name             - The name of this column as returned by the database.
// table            - The name of this column's table as returned by the database.
// len              - The length of this column. Normally -1 for types other than floating point decimals.
// precision        - The numeric precision of this column. Normally 0 for types other than floating point decimals.
// pdo_type         - The type of this column as represented by the PDO::PARAM_* constants.
// Returns false if the requested column does not exist in the result set, or if no result set exists.
// 
// [examples]
// Examples
// [example]
// Example #1 Retrieving column metadata
// The following example shows the results of retrieving the metadata for a single column generated by a function (COUNT) in a PDO_SQLITE driver.
// [php]
// $select = $DB->query('SELECT COUNT(*) FROM fruit');
// $meta = $select->getColumnMeta(0);
// var_dump($meta);
// [/php]
// The above example will output:
// [result]
// array(6) {
//   ["native_type"]=>
//   string(7) "integer"
//   ["flags"]=>
//   array(0) {
//   }
//   ["name"]=>
//   string(8) "COUNT(*)"
//   ["len"]=>
//   int(-1)
//   ["precision"]=>
//   int(0)
//   ["pdo_type"]=>
//   int(2)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.getcolumnmeta.php
// ========== PDOSTATEMENT_GETCOLUMNMETA - END

// SYNTAX:
// array|false PDOStatement::getColumnMeta(int $column)

return $return_pdostatement_getcolumnmeta; // array|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETCOLUMNMETA
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETITERATOR
// ============================== OFFLINE
// ============================== ABOUT
// Gets result set iterator.
// ============================== SUPPORT
// PHP_8
// ============================== USING FUNCTIONS (1)
// PDOStatement::getIterator() - PHP_8
// ============================== CODE
/*
function php_database_abstract_pdo_pdostatement_getiterator($pdostatement)
{
$return_pdostatement_getiterator = null;

// ========== PDOSTATEMENT_GETITERATOR - BEGIN
// ===== ABOUT
// Gets result set iterator
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public PDOStatement::getIterator(): Iterator
// ===== CODE
$return_pdostatement_getiterator = $pdostatement->getIterator(

// This function has no parameters.

); // Return Values
// Iterator
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.getiterator.php
// ========== PDOSTATEMENT_GETITERATOR - END

// SYNTAX:
// Iterator PDOStatement::getIterator()

return $return_pdostatement_getiterator; // Iterator
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_GETITERATOR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_NEXTROWSET
// ============================== PUBLIC
// ============================== ABOUT
// Advances to the next rowset in a multi-rowset statement handle.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::nextRowset() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_nextrowset($pdostatement)
{
$return_pdostatement_nextrowset = false;

// ========== PDOSTATEMENT_NEXTROWSET - BEGIN
// ===== ABOUT
// Advances to the next rowset in a multi-rowset statement handle
// ===== DESCRIPTION
// Some database servers support stored procedures that return more than one rowset (also known as a result set). PDOStatement::nextRowset() enables you to access the second and subsequent rowsets associated with a PDOStatement object. Each rowset can have a different set of columns from the preceding rowset.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDOStatement::nextRowset(): bool
// ===== CODE
$return_pdostatement_nextrowset = $pdostatement->nextRowset(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Fetching multiple rowsets returned from a stored procedure
// The following example shows how to call a stored procedure, MULTIPLE_ROWSETS, which returns three rowsets. We use a do-while loop to call the PDOStatement::nextRowset() method until it returns false and terminates the loop when no more rowsets are available.
// [php]
// $sql = 'CALL multiple_rowsets()';
// $stmt = $conn->query($sql);
// $i = 1;
// do {
//     $rowset = $stmt->fetchAll(PDO::FETCH_NUM);
//     if ($rowset) {
//         printResultSet($rowset, $i);
//     }
//     $i++;
// } while ($stmt->nextRowset());
// 
// function printResultSet(&$rowset, $i) {
//     print "Result set $i:\n";
//     foreach ($rowset as $row) {
//         foreach ($row as $col) {
//             print $col . "\t";
//         }
//         print "\n";
//     }
//     print "\n";
// }
// [/php]
// The above example will output:
// [result]
// Result set 1:
// apple    red
// banana   yellow
// 
// Result set 2:
// orange   orange    150
// banana   yellow    175
// 
// Result set 3:
// lime     green
// apple    red
// banana   yellow
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.nextrowset.php
// ========== PDOSTATEMENT_NEXTROWSET - END

// SYNTAX:
// bool PDOStatement::nextRowset()

return $return_pdostatement_nextrowset; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_NEXTROWSET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ROWCOUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the number of rows affected by the last SQL statement.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::rowCount() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_rowcount($pdostatement)
{
$return_pdostatement_rowcount = 0;

// ========== PDOSTATEMENT_ROWCOUNT - BEGIN
// ===== ABOUT
// Returns the number of rows affected by the last SQL statement
// ===== DESCRIPTION
// PDOStatement::rowCount() returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement executed by the corresponding PDOStatement object.
// For statements that produce result sets, such as SELECT, the behavior is undefined and can be different for each driver. Some databases may return the number of rows produced by that statement (e.g. MySQL in buffered mode), but this behaviour is not guaranteed for all databases and should not be relied on for portable applications.
// Note: This method returns "0" (zero) with the SQLite driver at all times, and with the PostgreSQL driver only when setting the PDO::ATTR_CURSOR statement attribute to PDO::CURSOR_SCROLL.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// ===== SYNTAX
// public PDOStatement::rowCount(): int
// ===== CODE
$return_pdostatement_rowcount = $pdostatement->rowCount(

// This function has no parameters.

); // Return Values
// Returns the number of rows.
// 
// Errors/Exceptions
// Emits an error with level E_WARNING if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_WARNING.
// Throws a PDOException if the attribute PDO::ATTR_ERRMODE is set to PDO::ERRMODE_EXCEPTION.
// 
// [examples]
// Examples
// [example]
// Example #1 Return the number of deleted rows
// PDOStatement::rowCount() returns the number of rows affected by a DELETE, INSERT, or UPDATE statement.
// [php]
// /* Delete all rows from the FRUIT table */
// $del = $dbh->prepare('DELETE FROM fruit');
// $del->execute();
// 
// /* Return number of rows that were deleted */
// print "Return number of rows that were deleted:\n";
// $count = $del->rowCount();
// print "Deleted $count rows.\n";
// [/php]
// The above example will output something similar to:
// [result]
// Return number of rows that were deleted:
// Deleted 9 rows.
// [/result]
// [/example]
// [example]
// Example #2 Counting rows returned by a SELECT statement
// For most databases, PDOStatement::rowCount() does not return the number of rows affected by a SELECT statement. Instead, use PDO::query() to issue a SELECT COUNT(*) statement with the same predicates as your intended SELECT statement, then use PDOStatement::fetchColumn() to retrieve the number of matching rows.
// [php]
// $sql = "SELECT COUNT(*) FROM fruit WHERE calories > 100";
// $res = $conn->query($sql);
// $count = $res->fetchColumn();
// 
// print "There are " .  $count . " matching records.";
// [/php]
// The above example will output something similar to:
// [result]
// There are 2 matching records.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.rowcount.php
// ========== PDOSTATEMENT_ROWCOUNT - END

// SYNTAX:
// int PDOStatement::rowCount()

return $return_pdostatement_rowcount; // int
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_ROWCOUNT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_SETATTRIBUTE
// ============================== PUBLIC
// ============================== ABOUT
// Set a statement attribute.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::setAttribute() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== CODE
function php_database_abstract_pdo_pdostatement_setattribute($pdostatement, $attribute, $value)
{
$return_pdostatement_setattribute = false;

// ========== PDOSTATEMENT_SETATTRIBUTE - BEGIN
// ===== ABOUT
// Set a statement attribute
// ===== DESCRIPTION
// Sets an attribute on the statement. Currently, no generic attributes are set but only driver specific:
// * PDO::ATTR_CURSOR_NAME (Firebird and ODBC specific): Set the name of cursor for UPDATE ... WHERE CURRENT OF.
// Note that driver specific attributes must not be used with other drivers.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDOStatement::setAttribute(int $attribute, mixed $value): bool
// ===== CODE
$return_pdostatement_setattribute = $pdostatement->setAttribute(

$attribute, // int attribute - The attribute to modify.

$value // mixed value - The value to set the attribute, might require a specific type depending on the attribute.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.setattribute.php
// ========== PDOSTATEMENT_SETATTRIBUTE - END

// SYNTAX:
// bool PDOStatement::setAttribute(int $attribute, mixed $value)

return $return_pdostatement_setattribute; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_SETATTRIBUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_SETFETCHMODE
// ============================== PUBLIC
// ============================== ABOUT
// Set the default fetch mode for this statement.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_2_0
// ============================== USING FUNCTIONS (1)
// PDOStatement::setFetchMode() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ============================== USING CONSTANTS (1)
// PDO::FETCH_COLUMN - PDOStatement::setFetchMode()
// ============================== CODE
function php_database_abstract_pdo_pdostatement_setfetchmode($pdostatement, $mode = PDO::FETCH_COLUMN, $colno)
{
$return_pdostatement_setfetchmode = false;

// ========== PDOSTATEMENT_SETFETCHMODE - BEGIN
// ===== ABOUT
// Set the default fetch mode for this statement
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_2_0
// ===== SYNTAX
// public PDOStatement::setFetchMode(int $mode): bool
// 
// public PDOStatement::setFetchMode(int $mode = PDO::FETCH_COLUMN, int $colno): bool
// 
// public PDOStatement::setFetchMode(int $mode = PDO::FETCH_CLASS, string $class, ?array $constructorArgs = null): bool
// 
// public PDOStatement::setFetchMode(int $mode = PDO::FETCH_INTO, object $object): bool
// ===== CODE
$return_pdostatement_setfetchmode = $pdostatement->setFetchMode(

$mode, // int mode - The fetch mode must be one of the PDO::FETCH_* constants.

$colno // int colno - Column number.

// string class - Class name.

// array constructorArgs - Constructor arguments.

// object object - Object.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Setting the fetch mode
// The following example demonstrates how PDOStatement::setFetchMode() changes the default fetch mode for a PDOStatement object.
// [php]
// $stmt = $dbh->query('SELECT name, colour, calories FROM fruit');
// $stmt->setFetchMode(PDO::FETCH_NUM);
// foreach ($stmt as $row) {
//     print $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// apple   red     150
// banana  yellow  250
// orange  orange  300
// kiwi    brown   75
// lemon   yellow  25
// pear    green   150
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdostatement.setfetchmode.php
// ========== PDOSTATEMENT_SETFETCHMODE - END

// SYNTAX:
// bool PDOStatement::setFetchMode(int $mode = PDO::FETCH_COLUMN, int $colno)

return $return_pdostatement_setfetchmode; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT_SETFETCHMODE
// ==============================


// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDOSTATEMENT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID
// ============================== OFFLINE
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID_PDO_CUBRID_SCHEMA - array php_database_abstract_pdo_pdo_drivers_cubrid_pdo_cubrid_schema(PDO $pdo, int $schema_type, string $table_name, string $col_name)
// ============================== SUPPORT
// PECL_pdo_0_1_0, PECL_PDO_CUBRID_8_3_0_0001
// ============================== USING SUBCLASSES (1)
// OFFLINE | PDO::cubrid_schema() - PECL_PDO_CUBRID >= PECL_PDO_CUBRID_8_3_0_0001
// ============================== USING DATA_TYPES (4)
// array
// PDO - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// int
// string
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID_PDO_CUBRID_SCHEMA
// ============================== OFFLINE
// ============================== ABOUT
// Get the requested schema information.
// ============================== SUPPORT
// PECL_PDO_CUBRID_8_3_0_0001
// ============================== USING FUNCTIONS (1)
// PDO::cubrid_schema() - PECL_PDO_CUBRID >= PECL_PDO_CUBRID_8_3_0_0001
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_cubrid_pdo_cubrid_schema($pdo, $schema_type, $table_name, $col_name)
{
$return_pdo_cubrid_schema = null;

// ========== PDO_CUBRID_SCHEMA - BEGIN
// ===== ABOUT
// Get the requested schema information
// ===== DESCRIPTION
// This function is used to get the requested schema information from database. You have to designate table_name, if you want to get information on certain table, col_name, if you want to get information on certain column (can be used only with PDO::CUBRID_SCH_COL_PRIVILEGE).
// The result of this function is returned as a two-dimensional array (column (associative array) * row (numeric array)). The following tables shows types of schema and the column structure of the result array to be returned based on the schema type.
// Result Composition of Each Type
// Schema                                                ( Column Number , Column Name    ) - Value
// PDO::CUBRID_SCH_TABLE                                 ( 1             , NAME           ) -
//                                                       ( 2             , TYPE           ) - 0:system table 1:view 2:table
// PDO::CUBRID_SCH_VIEW                                  ( 1             , NAME           ) -
//                                                       ( 2             , TYPE           ) - 1:view
// PDO::CUBRID_SCH_QUERY_SPEC                            ( 1             , QUERY_SPEC     ) -
// PDO::CUBRID_SCH_ATTRIBUTE / PDO::CUBRID_SCH_TABLE_ATTRIBUTE ( 1       , ATTR_NAME      ) -
//                                                       ( 2             , DOMAIN         ) -
//                                                       ( 3             , SCALE          ) -
//                                                       ( 4             , PRECISION      ) -
//                                                       ( 5             , INDEXED        ) - 1:indexed
//                                                       ( 6             , NOT NULL       ) - 1:not null
//                                                       ( 7             , SHARED         ) - 1:shared
//                                                       ( 8             , UNIQUE         ) - 1:unique
//                                                       ( 9             , DEFAULT        ) -
//                                                       ( 10            , ATTR_ORDER     ) - base:1
//                                                       ( 11            , CLASS_NAME     ) -
//                                                       ( 12            , SOURCE_CLASS   ) -
//                                                       ( 13            , IS_KEY         ) - 1:key
// PDO::CUBRID_SCH_METHOD / PDO::CUBRID_SCH_TABLE_METHOD ( 1             , NAME           ) -
//                                                       ( 2             , RET_DOMAIN     ) -
//                                                       ( 3             , ARG_DOMAIN     ) -
// PDO::CUBRID_SCH_METHOD_FILE                           ( 1             , METHOD_FILE    ) -
// PDO::CUBRID_SCH_SUPER_TABLE / PDO::CUBRID_SCH_DIRECT_SUPER_TABLE / PDO::CUBRID_SCH_SUB_TABLE ( 1 , CLASS_NAME ) -
//                                                       ( 2             , TYPE           ) - 0:system table 1:view 2:table
// PDO::CUBRID_SCH_CONSTRAINT                            ( 1             , TYPE           ) - 0:unique 1:index 2:reverse unique 3:reverse index
//                                                       ( 2             , NAME           ) -
//                                                       ( 3             , ATTR_NAME      ) -
//                                                       ( 4             , NUM_PAGES      ) -
//                                                       ( 5             , NUM_KEYS       ) -
//                                                       ( 6             , PRIMARY_KEY    ) - 1:primary key
//                                                       ( 7             , KEY_ORDER      ) - base:1
// PDO::CUBRID_SCH_TRIGGER                               ( 1             , NAME           ) -
//                                                       ( 2             , STATUS         ) -
//                                                       ( 3             , EVENT          ) -
//                                                       ( 4             , TARGET_CLASS   ) -
//                                                       ( 5             , TARGET_ATTR    ) -
//                                                       ( 6             , ACTION_TIME    ) -
//                                                       ( 7             , ACTION         ) -
//                                                       ( 8             , PRIORITY       ) -
//                                                       ( 9             , CONDITION_TIME ) -
//                                                       ( 10            , CONDITION      ) -
// PDO::CUBRID_SCH_TABLE_PRIVILEGE / PDO::CUBRID_SCH_COL_PRIVILEGE ( 1   , CLASS_NAME / ATTR_NAME ) -
//                                                       ( 2             , PRIVILEGE      ) -
//                                                       ( 3             , GRANTABLE      ) -
// PDO::CUBRID_SCH_PRIMARY_KEY                           ( 1             , CLASS_NAME     ) -
//                                                       ( 2             , ATTR_NAME      ) -
//                                                       ( 3             , KEY_SEQ        ) - base:1
//                                                       ( 4             , KEY_NAME       ) -
// PDO::CUBRID_SCH_IMPORTED_KEYS / PDO::CUBRID_SCH_EXPORTED_KEYS / PDO::CUBRID_SCH_CROSS_REFERENCE ( 1 , PKTABLE_NAME ) -
//                                                       ( 2             , PKCOLUMN_NAME  ) -
//                                                       ( 3             , FKTABLE_NAME   ) - base:1
//                                                       ( 4             , FKCOLUMN_NAME  ) -
//                                                       ( 5             , KEY_SEQ        ) - base:1
//                                                       ( 6             , UPDATE_ACTION  ) - 0:cascade 1:restrict 2:no action 3:set null
//                                                       ( 7             , DELETE_ACTION  ) - 0:cascade 1:restrict 2:no action 3:set null
//                                                       ( 8             , FK_NAME        ) -
//                                                       ( 9             , PK_NAME        ) -
// ===== SUPPORTED
// PECL_PDO_CUBRID >= PECL_PDO_CUBRID_8_3_0_0001
// ===== SYNTAX
// public PDO::cubrid_schema(int $schema_type, string $table_name = ?, string $col_name = ?): array
// ===== CODE
$return_pdo_cubrid_schema = $pdo->cubrid_schema(

$schema_type, // int schema_type - Schema type that you want to know.

$table_name, // string table_name - Table you want to know the schema of.

$col_name // string col_name - Column you want to know the schema of.

); // Return Values
// Array containing the schema information, when process is successful;
// FALSE, when process is unsuccessful
// 
// [examples]
// Examples
// [example]
// Example #1 A PDO::cubrid_schema() example
// This example shows how to get primary key and foreign keys of table game.
// [php]
// $pk_list = $dbh->cubrid_schema(PDO::CUBRID_SCH_PRIMARY_KEY, "game");
// print_r($pk_list);
// 
// $fk_list = $dbh->cubrid_schema(PDO::CUBRID_SCH_IMPORTED_KEYS, "game");
// print_r($fk_list);
// [/php]
// The above example will output:
// [result]
// Result:
// Array
// (
//     [0] => Array
//         (
//             [CLASS_NAME] => game
//             [ATTR_NAME] => athlete_code
//             [KEY_SEQ] => 3
//             [KEY_NAME] => pk_game_host_year_event_code_athlete_code
//         )
// 
//     [1] => Array
//         (
//             [CLASS_NAME] => game
//             [ATTR_NAME] => event_code
//             [KEY_SEQ] => 2
//             [KEY_NAME] => pk_game_host_year_event_code_athlete_code
//         )
// 
//     [2] => Array
//         (
//             [CLASS_NAME] => game
//             [ATTR_NAME] => host_year
//             [KEY_SEQ] => 1
//             [KEY_NAME] => pk_game_host_year_event_code_athlete_code
//         )
// 
// )
// Array
// (
//     [0] => Array
//         (
//             [PKTABLE_NAME] => athlete
//             [PKCOLUMN_NAME] => code
//             [FKTABLE_NAME] => game
//             [FKCOLUMN_NAME] => athlete_code
//             [KEY_SEQ] => 1
//             [UPDATE_RULE] => 1
//             [DELETE_RULE] => 1
//             [FK_NAME] => fk_game_athlete_code
//             [PK_NAME] => pk_athlete_code
//         )
// 
//     [1] => Array
//         (
//             [PKTABLE_NAME] => event
//             [PKCOLUMN_NAME] => code
//             [FKTABLE_NAME] => game
//             [FKCOLUMN_NAME] => event_code
//             [KEY_SEQ] => 1
//             [UPDATE_RULE] => 1
//             [DELETE_RULE] => 1
//             [FK_NAME] => fk_game_event_code
//             [PK_NAME] => pk_event_code
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.cubrid-schema.php
// ========== PDO_CUBRID_SCHEMA - END

// SYNTAX:
// array PDO::cubrid_schema(int $schema_type, string $table_name, string $col_name)

return $return_pdo_cubrid_schema; // array
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID_PDO_CUBRID_SCHEMA
// ==============================


// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_CUBRID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL
// ============================== PUBLIC
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYFROMARRAY - bool php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopyfromarray(PDO $pdo, string $table_name, array $rows, string $delimiter, string $null_as, string $fields)
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYFROMFILE - bool php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopyfromfile(PDO $pdo, string $table_name, string $filename, string $delimiter, string $null_as, string $fields)
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYTOARRAY - array|false php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopytoarray(PDO $pdo, string $table_name, string $delimiter, string $null_as, string $fields)
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYTOFILE - bool php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopytofile(PDO $pdo, string $table_name, string $filename, string $delimiter, string $null_as, string $fields)
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLGETNOTIFY - array|false php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlgetnotify(PDO $pdo, int $result_type = PDO::FETCH_USE_DEFAULT, int $ms_timeout = 0)
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLGETPID - int php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlgetpid(PDO $pdo)
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBCREATE - string php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqllobcreate(PDO $pdo)
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBOPEN - resource|false php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqllobopen(PDO $pdo, string $oid, string $mode = "rb")
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBUNLINK - bool php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqllobunlink(PDO $pdo, string $oid)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0
// ============================== USING SUBCLASSES (9)
// PDO::pgsqlCopyFromArray() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// PDO::pgsqlCopyFromFile() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// PDO::pgsqlCopyToArray() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// PDO::pgsqlCopyToFile() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// PDO::pgsqlGetNotify() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// PDO::pgsqlGetPid() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | PDO::pgsqlLOBCreate() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// OFFLINE | PDO::pgsqlLOBOpen() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// OFFLINE | PDO::pgsqlLOBUnlink() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ============================== USING DATA_TYPES (7)
// bool
// PDO - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// string
// array
// false
// int
// resource
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYFROMARRAY
// ============================== PUBLIC
// ============================== ABOUT
// Copy data from PHP array into table.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlCopyFromArray() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopyfromarray($pdo, $table_name, $rows, $delimiter, $null_as, $fields)
{
$return_pdo_pgsqlcopyfromarray = false;

// ========== PDO_PGSQLCOPYFROMARRAY - BEGIN
// ===== ABOUT
// Copy data from PHP array into table
// ===== DESCRIPTION
// Copies data from rows array to table table_name using delimiter as fields delimiter and fields list
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::pgsqlCopyFromArray(
//    string $table_name,
//    array $rows,
//    string $delimiter = "\t",
//    string $null_as = "\\\\N",
//    string $fields = ?
// ): bool
// ===== CODE
$return_pdo_pgsqlcopyfromarray = $pdo->pgsqlCopyFromArray(

$table_name, // string table_name - String containing table name

$rows, // array rows - Array of strings with fields separated by delimiter

$delimiter, // string delimiter - Delimiter used in rows array

$null_as, // string null_as - How to interpret null values

$fields // string fields - List of fields to insert

); // Return Values
// Returns true on success, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqlcopyfromarray.php
// ========== PDO_PGSQLCOPYFROMARRAY - END

// SYNTAX:
// bool PDO::pgsqlCopyFromArray(string $table_name, array $rows, string $delimiter, string $null_as, string $fields)

return $return_pdo_pgsqlcopyfromarray; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYFROMARRAY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYFROMFILE
// ============================== PUBLIC
// ============================== ABOUT
// Copy data from file into table.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlCopyFromFile() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopyfromfile($pdo, $table_name, $filename, $delimiter, $null_as, $fields)
{
$return_pdo_pgsqlcopyfromfile = false;

// ========== PDO_PGSQLCOPYFROMFILE - BEGIN
// ===== ABOUT
// Copy data from file into table
// ===== DESCRIPTION
// Copies data from file specified by filename into table table_name using delimiter as fields delimiter and fields list
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::pgsqlCopyFromFile(
//    string $table_name,
//    string $filename,
//    string $delimiter = "\t",
//    string $null_as = "\\\\N",
//    string $fields = ?
// ): bool
// ===== CODE
$return_pdo_pgsqlcopyfromfile = $pdo->pgsqlCopyFromFile(

$table_name, // string table_name - String containing table name

$filename, // string filename - Filename containing data to import

$delimiter, // string delimiter - Delimiter used in file specified by filename

$null_as, // string null_as - How to interpret null values

$fields // string fields - List of fields to insert

); // Return Values
// Returns true on success, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqlcopyfromfile.php
// ========== PDO_PGSQLCOPYFROMFILE - END

// SYNTAX:
// bool PDO::pgsqlCopyFromFile(string $table_name, string $filename, string $delimiter, string $null_as, string $fields)

return $return_pdo_pgsqlcopyfromfile; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYFROMFILE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYTOARRAY
// ============================== PUBLIC
// ============================== ABOUT
// Copy data from database table into PHP array.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlCopyToArray() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopytoarray($pdo, $table_name, $delimiter, $null_as, $fields)
{
$return_pdo_pgsqlcopytoarray = false;

// ========== PDO_PGSQLCOPYTOARRAY - BEGIN
// ===== ABOUT
// Copy data from database table into PHP array
// ===== DESCRIPTION
// Copies data from table into array using delimiter as fields delimiter and fields list
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::pgsqlCopyToArray(
//    string $table_name,
//    string $delimiter = "\t",
//    string $null_as = "\\\\N",
//    string $fields = ?
// ): array|false
// ===== CODE
$return_pdo_pgsqlcopytoarray = $pdo->pgsqlCopyToArray(

$table_name, // string table_name - String containing table name

$delimiter, // string delimiter - Delimiter used in rows

$null_as, // string null_as - How to interpret null values

$fields // string fields - List of fields to export

); // Return Values
// Returns an array of rows, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqlcopytoarray.php
// ========== PDO_PGSQLCOPYTOARRAY - END

// SYNTAX:
// array|false PDO::pgsqlCopyToArray(string $table_name, string $delimiter, string $null_as, string $fields)

return $return_pdo_pgsqlcopytoarray; // array|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYTOARRAY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYTOFILE
// ============================== PUBLIC
// ============================== ABOUT
// Copy data from table into file.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlCopyToFile() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlcopytofile($pdo, $table_name, $filename, $delimiter, $null_as, $fields)
{
$return_pdo_pgsqlcopytofile = false;

// ========== PDO_PGSQLCOPYTOFILE - BEGIN
// ===== ABOUT
// Copy data from table into file
// ===== DESCRIPTION
// Copies data from table into file specified by filename using delimiter as fields delimiter and fields list
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::pgsqlCopyToFile(
//    string $table_name,
//    string $filename,
//    string $delimiter = "\t",
//    string $null_as = "\\\\N",
//    string $fields = ?
// ): bool
// ===== CODE
$return_pdo_pgsqlcopytofile = $pdo->pgsqlCopyToFile(

$table_name, // string table_name - String containing table name

$filename, // string filename - Filename to export data

$delimiter, // string delimiter - Delimiter used in file specified by filename

$null_as, // string null_as - How to interpret null values

$fields // string fields - List of fields to insert

); // Return Values
// Returns true on success, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqlcopytofile.php
// ========== PDO_PGSQLCOPYTOFILE - END

// SYNTAX:
// bool PDO::pgsqlCopyToFile(string $table_name, string $filename, string $delimiter, string $null_as, string $fields)

return $return_pdo_pgsqlcopytofile; // bool
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLCOPYTOFILE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLGETNOTIFY
// ============================== PUBLIC
// ============================== ABOUT
// Get asynchronous notification.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlGetNotify() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// PDO::FETCH_USE_DEFAULT - PDO::pgsqlGetNotify()
// ============================== CODE
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlgetnotify($pdo, $result_type = PDO::FETCH_USE_DEFAULT, $ms_timeout = 0)
{
$return_pdo_pgsqlgetnotify = false;

// ========== PDO_PGSQLGETNOTIFY - BEGIN
// ===== ABOUT
// Get asynchronous notification
// ===== DESCRIPTION
// Returns a result set representing a pending asynchronous notification.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::pgsqlGetNotify(int $result_type = PDO::FETCH_USE_DEFAULT, int $ms_timeout = 0): array|false
// ===== CODE
$return_pdo_pgsqlgetnotify = $pdo->pgsqlGetNotify(

$result_type, // int result_type - The format the result set should be returned as, represented as a PDO::FETCH_* constant.

$ms_timeout // int ms_timeout - The length of time to wait for a response, in milliseconds.

); // Return Values
// If one or more notifications is pending, returns a single row, with fields message and pid, otherwise returns false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqlgetnotify.php
// ========== PDO_PGSQLGETNOTIFY - END

// SYNTAX:
// array|false PDO::pgsqlGetNotify(int $result_type = PDO::FETCH_USE_DEFAULT, int $ms_timeout = 0)

return $return_pdo_pgsqlgetnotify; // array|false
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLGETNOTIFY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLGETPID
// ============================== PUBLIC
// ============================== ABOUT
// Get the server PID.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlGetPid() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqlgetpid($pdo)
{
$return_pdo_pgsqlgetpid = 0;

// ========== PDO_PGSQLGETPID - BEGIN
// ===== ABOUT
// Get the server PID
// ===== DESCRIPTION
// Returns the server's PID.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::pgsqlGetPid(): int
// ===== CODE
$return_pdo_pgsqlgetpid = $pdo->pgsqlGetPid(

// This function has no parameters.

); // Return Values
// The server's PID.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqlgetpid.php
// ========== PDO_PGSQLGETPID - END

// SYNTAX:
// int PDO::pgsqlGetPid()

return $return_pdo_pgsqlgetpid; // int
}
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLGETPID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBCREATE
// ============================== OFFLINE
// ============================== ABOUT
// Creates a new large object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_pgsql_1_0_2
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlLOBCreate() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqllobcreate($pdo)
{
$return_pdo_pgsqllobcreate = null;

// ========== PDO_PGSQLLOBCREATE - BEGIN
// ===== ABOUT
// Creates a new large object
// ===== DESCRIPTION
// PDO::pgsqlLOBCreate() creates a large object and returns the OID of that object. You may then open a stream on the object using PDO::pgsqlLOBOpen() to read or write data to it. The OID can be stored in columns of type OID and be used to reference the large object, without causing the row to grow arbitrarily large. The large object will continue to live in the database until it is removed by calling PDO::pgsqlLOBUnlink().
// Large objects can be up to 2GB in size, but are cumbersome to use; you need to ensure that PDO::pgsqlLOBUnlink() is called prior to deleting the last row that references its OID from your database. In addition, large objects have no access controls. As an alternative, try the bytea column type; recent versions of PostgreSQL allow bytea columns of up to 1GB in size and transparently manage the storage for optimal row size.
// Note: This function must be called within a transaction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ===== SYNTAX
// public PDO::pgsqlLOBCreate(): string
// ===== CODE
$return_pdo_pgsqllobcreate = $pdo->pgsqlLOBCreate(

// PDO::pgsqlLOBCreate() takes no parameters.

); // Return Values
// Returns the OID of the newly created large object on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A PDO::pgsqlLOBCreate() example
// This example creates a new large object and copies the contents of a file into it. The OID is then stored into a table.
// [php]
// $db = new PDO('pgsql:dbname=test host=localhost', $user, $pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->beginTransaction();
// $oid = $db->pgsqlLOBCreate();
// $stream = $db->pgsqlLOBOpen($oid, 'w');
// $local = fopen($filename, 'rb');
// stream_copy_to_stream($local, $stream);
// $local = null;
// $stream = null;
// $stmt = $db->prepare("INSERT INTO BLOBS (ident, oid) VALUES (?, ?)");
// $stmt->execute(array($some_id, $oid));
// $db->commit();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqllobcreate.php
// ========== PDO_PGSQLLOBCREATE - END

// SYNTAX:
// string PDO::pgsqlLOBCreate()

return $return_pdo_pgsqllobcreate; // string
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBCREATE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBOPEN
// ============================== OFFLINE
// ============================== ABOUT
// Opens an existing large object stream.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_pgsql_1_0_2
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlLOBOpen() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqllobopen($pdo, $oid, $mode = "rb")
{
$return_pdo_pgsqllobopen = false;

// ========== PDO_PGSQLLOBOPEN - BEGIN
// ===== ABOUT
// Opens an existing large object stream
// ===== DESCRIPTION
// PDO::pgsqlLOBOpen() opens a stream to access the data referenced by oid. If mode is r, the stream is opened for reading, if mode is w, then the stream will be opened for writing. You can use all the usual filesystem functions, such as fread(), fwrite() and fgets() to manipulate the contents of the stream.
// Note: This function, and all manipulations of the large object, must be called and carried out within a transaction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ===== SYNTAX
// public PDO::pgsqlLOBOpen(string $oid, string $mode = "rb"): resource|false
// ===== CODE
$return_pdo_pgsqllobopen = $pdo->pgsqlLOBOpen(

$oid, // string oid - A large object identifier.

$mode // string mode - If mode is r, open the stream for reading. If mode is w, open the stream for writing.

); // Return Values
// Returns a stream resource on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A PDO::pgsqlLOBOpen() example
// Following on from the PDO::pgsqlLOBCreate() example, this code snippet retrieves the large object from the database and outputs it to the browser.
// [php]
// $db = new PDO('pgsql:dbname=test host=localhost', $user, $pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->beginTransaction();
// $stmt = $db->prepare("select oid from BLOBS where ident = ?");
// $stmt->execute(array($some_id));
// $stmt->bindColumn('oid', $oid, PDO::PARAM_STR);
// $stmt->fetch(PDO::FETCH_BOUND);
// $stream = $db->pgsqlLOBOpen($oid, 'r');
// header("Content-type: application/octet-stream");
// fpassthru($stream);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqllobopen.php
// ========== PDO_PGSQLLOBOPEN - END

// SYNTAX:
// resource|false PDO::pgsqlLOBOpen(string $oid, string $mode = "rb")

return $return_pdo_pgsqllobopen; // resource|false
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBOPEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBUNLINK
// ============================== OFFLINE
// ============================== ABOUT
// Deletes the large object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_pgsql_1_0_2
// ============================== USING FUNCTIONS (1)
// PDO::pgsqlLOBUnlink() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_postgresql_pdo_pgsqllobunlink($pdo, $oid)
{
$return_pdo_pgsqllobunlink = false;

// ========== PDO_PGSQLLOBUNLINK - BEGIN
// ===== ABOUT
// Deletes the large object
// ===== DESCRIPTION
// Deletes a large object from the database identified by OID.
// Note: This function must be called within a transaction.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8, PECL_pdo_pgsql >= PECL_pdo_pgsql_1_0_2
// ===== SYNTAX
// public PDO::pgsqlLOBUnlink(string $oid): bool
// ===== CODE
$return_pdo_pgsqllobunlink = $pdo->pgsqlLOBUnlink(

$oid // string oid - A large object identifier

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A PDO::pgsqlLOBUnlink() example
// This example unlinks a large object from the database prior to deleting the row that references it from the blobs table we've been using in our PDO::pgsqlLOBCreate() and PDO::pgsqlLOBOpen() examples.
// [php]
// $db = new PDO('pgsql:dbname=test host=localhost', $user, $pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->beginTransaction();
// $db->pgsqlLOBUnlink($oid);
// $stmt = $db->prepare("DELETE FROM BLOBS where ident = ?");
// $stmt->execute(array($some_id));
// $db->commit();
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.pgsqllobunlink.php
// ========== PDO_PGSQLLOBUNLINK - END

// SYNTAX:
// bool PDO::pgsqlLOBUnlink(string $oid)

return $return_pdo_pgsqllobunlink; // bool
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL_PDO_PGSQLLOBUNLINK
// ==============================


// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_POSTGRESQL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE
// ============================== OFFLINE
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATEAGGREGATE - bool php_database_abstract_pdo_pdo_drivers_sqlite_pdo_sqlitecreateaggregate(PDO $pdo, string $function_name, callable $step_func, callable $finalize_func, int $num_args)
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATECOLLATION - bool php_database_abstract_pdo_pdo_drivers_sqlite_pdo_sqlitecreatecollation(PDO $pdo, string $name, callable $callback)
// OFFLINE | PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATEFUNCTION - bool php_database_abstract_pdo_pdo_drivers_sqlite_pdo_sqlitecreatefunction(PDO $pdo, string $function_name, callable $callback, int $num_args = -1, int $flags = 0)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_0_1_0, PECL_pdo_sqlite_1_0_0
// ============================== USING SUBCLASSES (3)
// OFFLINE | PDO::sqliteCreateAggregate() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo_sqlite >= PECL_pdo_sqlite_1_0_0
// OFFLINE | PDO::sqliteCreateCollation() - PHP_5 >= PHP_5_3_11, PHP_7, PHP_8
// OFFLINE | PDO::sqliteCreateFunction() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo_sqlite >= PECL_pdo_sqlite_1_0_0
// ============================== USING DATA_TYPES (5)
// bool
// PDO - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo >= PECL_pdo_0_1_0
// string
// callable
// int
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATEAGGREGATE
// ============================== OFFLINE
// ============================== ABOUT
// Registers an aggregating User Defined Function for use in SQL statements.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_sqlite_1_0_0
// ============================== USING FUNCTIONS (1)
// PDO::sqliteCreateAggregate() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo_sqlite >= PECL_pdo_sqlite_1_0_0
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_sqlite_pdo_sqlitecreateaggregate($pdo, $function_name, $step_func, $finalize_func, $num_args)
{
$return_pdo_sqlitecreateaggregate = false;

// ========== PDO_SQLITECREATEAGGREGATE - BEGIN
// ===== ABOUT
// Registers an aggregating User Defined Function for use in SQL statements
// ===== DESCRIPTION
// Warning: This function is EXPERIMENTAL. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.
// This method is similar to PDO::sqliteCreateFunction except that it registers functions that can be used to calculate a result aggregated across all the rows of a query.
// The key difference between this method and PDO::sqliteCreateFunction is that two functions are required to manage the aggregate.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo_sqlite >= PECL_pdo_sqlite_1_0_0
// ===== SYNTAX
// public PDO::sqliteCreateAggregate(
//    string $function_name,
//    callable $step_func,
//    callable $finalize_func,
//    int $num_args = ?
// ): bool
// ===== CODE
$return_pdo_sqlitecreateaggregate = $pdo->sqliteCreateAggregate(

$function_name, // string function_name - The name of the function used in SQL statements.

$step_func, // callable step_func - Callback function called for each row of the result set. Your PHP function should accumulate the result and store it in the aggregation context.
//  This function need to be defined as:
//  step(
//     mixed $context,
//     int $rownumber,
//     mixed $value,
//     mixed ...$values
//  ): mixed
//  context - null for the first row; on subsequent rows it will have the value that was previously returned from the step function; you should use this to maintain the aggregate state.
//  rownumber - The current row number.
//  value - The first argument passed to the aggregate.
//  values - Further arguments passed to the aggregate.
// The return value of this function will be used as the context argument in the next call of the step or finalize functions.

$finalize_func, // callable finalize_func - Callback function to aggregate the "stepped" data from each row. Once all the rows have been processed, this function will be called and it should then take the data from the aggregation context and return the result. This callback function should return a type understood by SQLite (i.e. scalar type).
//  This function need to be defined as:
//  fini(mixed $context, int $rowcount): mixed
//  context - Holds the return value from the very last call to the step function.
//  rowcount - Holds the number of rows over which the aggregate was performed.
// The return value of this function will be used as the return value for the aggregate.

$num_args // int num_args - Hint to the SQLite parser if the callback function accepts a predetermined number of arguments.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 max_length aggregation function example
// [php]
// $data = array(
//    'one',
//    'two',
//    'three',
//    'four',
//    'five',
//    'six',
//    'seven',
//    'eight',
//    'nine',
//    'ten',
//    );
// $db = new PDO('sqlite::memory:');
// $db->exec("CREATE TABLE strings(a)");
// $insert = $db->prepare('INSERT INTO strings VALUES (?)');
// foreach ($data as $str) {
//     $insert->execute(array($str));
// }
// $insert = null;
// 
// function max_len_step($context, $rownumber, $string) 
// {
//     if (strlen($string) > $context) {
//         $context = strlen($string);
//     }
//     return $context;
// }
// 
// function max_len_finalize($context, $rowcount) 
// {
//     return $context === null ? 0 : $context;
// }
// 
// $db->sqliteCreateAggregate('max_len', 'max_len_step', 'max_len_finalize');
// 
// var_dump($db->query('SELECT max_len(a) from strings')->fetchAll());
// 
// [/php]
// In this example, we are creating an aggregating function that will calculate the length of the longest string in one of the columns of the table. For each row, the max_len_step function is called and passed a $context parameter. The context parameter is just like any other PHP variable and be set to hold an array or even an object value. In this example, we are simply using it to hold the maximum length we have seen so far; if the $string has a length longer than the current maximum, we update the context to hold this new maximum length.
// After all of the rows have been processed, SQLite calls the max_len_finalize function to determine the aggregate result. Here, we could perform some kind of calculation based on the data found in the $context. In our simple example though, we have been calculating the result as the query progressed, so we simply need to return the context value.
// Tip: It is NOT recommended for you to store a copy of the values in the context and then process them at the end, as you would cause SQLite to use a lot of memory to process the query - just think of how much memory you would need if a million rows were stored in memory, each containing a string 32 bytes in length.
// Tip: You can use PDO::sqliteCreateFunction and PDO::sqliteCreateAggregate to override SQLite native SQL functions.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.sqlitecreateaggregate.php
// ========== PDO_SQLITECREATEAGGREGATE - END

// SYNTAX:
// bool PDO::sqliteCreateAggregate(string $function_name, callable $step_func, callable $finalize_func, int $num_args)

return $return_pdo_sqlitecreateaggregate; // bool
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATEAGGREGATE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATECOLLATION
// ============================== OFFLINE
// ============================== ABOUT
// Registers a User Defined Function for use as a collating function in SQL statements.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// PDO::sqliteCreateCollation() - PHP_5 >= PHP_5_3_11, PHP_7, PHP_8
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_sqlite_pdo_sqlitecreatecollation($pdo, $name, $callback)
{
$return_pdo_sqlitecreatecollation = false;

// ========== PDO_SQLITECREATECOLLATION - BEGIN
// ===== ABOUT
// Registers a User Defined Function for use as a collating function in SQL statements
// ===== DESCRIPTION
// Warning: This function is EXPERIMENTAL. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_11, PHP_7, PHP_8
// ===== SYNTAX
// public PDO::sqliteCreateCollation(string $name, callable $callback): bool
// ===== CODE
$return_pdo_sqlitecreatecollation = $pdo->sqliteCreateCollation(

$name, // string name - Name of the SQL collating function to be created or redefined.

$callback // callable callback - The name of a PHP function or user-defined function to apply as a callback, defining the behavior of the collation. It should accept two strings and return as strcmp() does, i.e. it should return -1, 1, or 0 if the first string sorts before, sorts after, or is equal to the second.
//  This function need to be defined as:
//  collation(string $string1, string $string2): int

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 PDO::sqliteCreateCollation() example
// [php]
// $db = new PDO('sqlite::memory:');
// $db->exec("CREATE TABLE test (col1 string)");
// $db->exec("INSERT INTO test VALUES ('a1')");
// $db->exec("INSERT INTO test VALUES ('a10')");
// $db->exec("INSERT INTO test VALUES ('a2')");
// 
// $db->sqliteCreateCollation('NATURAL_CMP', 'strnatcmp');
// foreach ($db->query("SELECT col1 FROM test ORDER BY col1") as $row) {
//   echo $row['col1'] . "\n";
// }
// echo "\n";
// foreach ($db->query("SELECT col1 FROM test ORDER BY col1 COLLATE NATURAL_CMP") as $row) {
//   echo $row['col1'] . "\n";
// }
// [/php]
// The above example will output:
// [result]
// a1
// a10
// a2
// 
// a1
// a2
// a10
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.sqlitecreatecollation.php
// ========== PDO_SQLITECREATECOLLATION - END

// SYNTAX:
// bool PDO::sqliteCreateCollation(string $name, callable $callback)

return $return_pdo_sqlitecreatecollation; // bool
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATECOLLATION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATEFUNCTION
// ============================== OFFLINE
// ============================== ABOUT
// Registers a User Defined Function for use in SQL statements.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_pdo_sqlite_1_0_0
// ============================== USING FUNCTIONS (1)
// PDO::sqliteCreateFunction() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo_sqlite >= PECL_pdo_sqlite_1_0_0
// ============================== CODE
/*
function php_database_abstract_pdo_pdo_drivers_sqlite_pdo_sqlitecreatefunction($pdo, $function_name, $callback, $num_args = -1, $flags = 0)
{
$return_pdo_sqlitecreatefunction = false;

// ========== PDO_SQLITECREATEFUNCTION - BEGIN
// ===== ABOUT
// Registers a User Defined Function for use in SQL statements
// ===== DESCRIPTION
// Warning: This function is EXPERIMENTAL. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.
// This method allows you to register a PHP function with SQLite as an UDF (User Defined Function), so that it can be called from within your SQL statements.
// The UDF can be used in any SQL statement that can call functions, such as SELECT and UPDATE statements and also in triggers.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8, PECL_pdo_sqlite >= PECL_pdo_sqlite_1_0_0
// ===== SYNTAX
// public PDO::sqliteCreateFunction(
//    string $function_name,
//    callable $callback,
//    int $num_args = -1,
//    int $flags = 0
// ): bool
// ===== CODE
$return_pdo_sqlitecreatefunction = $pdo->sqliteCreateFunction(

$function_name, // string function_name - The name of the function used in SQL statements.

$callback, // callable callback - Callback function to handle the defined SQL function.
// Note: Callback functions should return a type understood by SQLite (i.e. scalar type).
//  This function need to be defined as:
//  callback(mixed $value, mixed ...$values): mixed
//  value - The first argument passed to the SQL function.
//  values - Further arguments passed to the SQL function.

$num_args, // int num_args - The number of arguments that the SQL function takes. If this parameter is -1, then the SQL function may take any number of arguments.

$flags // int flags - A bitwise conjunction of flags. Currently, only PDO::SQLITE_DETERMINISTIC is supported, which specifies that the function always returns the same result given the same inputs within a single SQL statement.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 7.1.4   - The flags parameter has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 PDO::sqliteCreateFunction() example
// [php]
// function md5_and_reverse($string) 
// {
//     return strrev(md5($string));
// }
// 
// $db = new PDO('sqlite:sqlitedb');
// $db->sqliteCreateFunction('md5rev', 'md5_and_reverse', 1);
// $rows = $db->query('SELECT md5rev(filename) FROM files')->fetchAll();
// [/php]
// In this example, we have a function that calculates the md5 sum of a string, and then reverses it. When the SQL statement executes, it returns the value of the filename transformed by our function. The data returned in $rows contains the processed result.
// The beauty of this technique is that you do not need to process the result using a foreach loop after you have queried for the data.
// Tip: You can use PDO::sqliteCreateFunction and PDO::sqliteCreateAggregate to override SQLite native SQL functions.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/pdo.sqlitecreatefunction.php
// ========== PDO_SQLITECREATEFUNCTION - END

// SYNTAX:
// bool PDO::sqliteCreateFunction(string $function_name, callable $callback, int $num_args = -1, int $flags = 0)

return $return_pdo_sqlitecreatefunction; // bool
}
*/
// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE_PDO_SQLITECREATEFUNCTION
// ==============================


// ============================== END
// PHP_DATABASE_ABSTRACT_PDO_PDO_DRIVERS_SQLITE
// ==============================


// ============================== END
//   PHP_DATABASE_ABSTRACT_PDO   
// ==============================
?>