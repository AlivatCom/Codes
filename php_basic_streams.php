<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BASIC_STREAMS - BEGIN
// OFFLINE | PHP_BASIC_STREAMS_STREAM_BUCKET_APPEND - void php_basic_streams_stream_bucket_append(resource $brigade, object $bucket)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_BUCKET_MAKE_WRITEABLE - object php_basic_streams_stream_bucket_make_writeable(resource $brigade)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_BUCKET_NEW - object php_basic_streams_stream_bucket_new(resource $stream, string $buffer)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_BUCKET_PREPEND - void php_basic_streams_stream_bucket_prepend(resource $brigade, object $bucket)
// PHP_BASIC_STREAMS_STREAM_CONTEXT_CREATE - resource php_basic_streams_stream_context_create(array $options = null, array $params = null)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_DEFAULT - resource php_basic_streams_stream_context_get_default(array $options = null)
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_OPTIONS - array php_basic_streams_stream_context_get_options(resource $stream_or_context)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_PARAMS - array php_basic_streams_stream_context_get_params(resource $context)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_DEFAULT - resource php_basic_streams_stream_context_set_default(array $options)
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_OPTION - bool php_basic_streams_stream_context_set_option(resource $stream_or_context, string $wrapper, string $option, mixed $value)
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_PARAMS - bool php_basic_streams_stream_context_set_params(resource $context, array $params)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_COPY_TO_STREAM - int|false php_basic_streams_stream_copy_to_stream(resource $from, resource $to, int $length = null, int $offset = 0)
// PHP_BASIC_STREAMS_STREAM_FILTER_APPEND - resource php_basic_streams_stream_filter_append(resource $stream, string $filtername, int $read_write, mixed $params)
// PHP_BASIC_STREAMS_STREAM_FILTER_PREPEND - resource php_basic_streams_stream_filter_prepend(resource $stream, string $filtername, int $read_write, mixed $params)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_FILTER_REGISTER - bool php_basic_streams_stream_filter_register(string $filter_name, string $class)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_FILTER_REMOVE - bool php_basic_streams_stream_filter_remove(resource $stream_filter)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_GET_CONTENTS - string|false php_basic_streams_stream_get_contents(resource $stream, int $length = null, int $offset = -1)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_GET_FILTERS - array php_basic_streams_stream_get_filters()
// OFFLINE | PHP_BASIC_STREAMS_STREAM_GET_LINE - string|false php_basic_streams_stream_get_line(resource $stream, int $length, string $ending = "")
// PHP_BASIC_STREAMS_STREAM_GET_META_DATA - array php_basic_streams_stream_get_meta_data(resource $stream)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_GET_TRANSPORTS - array php_basic_streams_stream_get_transports()
// OFFLINE | PHP_BASIC_STREAMS_STREAM_GET_WRAPPERS - array php_basic_streams_stream_get_wrappers()
// OFFLINE | PHP_BASIC_STREAMS_STREAM_IS_LOCAL - bool php_basic_streams_stream_is_local(resource|string $stream)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_ISATTY - bool php_basic_streams_stream_isatty(resource $stream)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_NOTIFICATION_CALLBACK - void php_basic_streams_stream_notification_callback(int $notification_code, int $severity, string $message, int $message_code, int $bytes_transferred, int $bytes_max)
// PHP_BASIC_STREAMS_STREAM_REGISTER_WRAPPER - bool php_basic_streams_stream_register_wrapper(string $protocol, string $class, int $flags = 0)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_RESOLVE_INCLUDE_PATH - string|false php_basic_streams_stream_resolve_include_path(string $filename)
// PHP_BASIC_STREAMS_STREAM_SELECT - int|false php_basic_streams_stream_select(array& $read, array& $write, array& $except, int $seconds, int $microseconds = null)
// PHP_BASIC_STREAMS_STREAM_SET_BLOCKING - bool php_basic_streams_stream_set_blocking(resource $stream, bool $enable)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SET_CHUNK_SIZE - int php_basic_streams_stream_set_chunk_size(resource $stream, int $size)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SET_READ_BUFFER - int php_basic_streams_stream_set_read_buffer(resource $stream, int $size)
// PHP_BASIC_STREAMS_STREAM_SET_TIMEOUT - bool php_basic_streams_stream_set_timeout(resource $stream, int $seconds, int $microseconds = 0)
// PHP_BASIC_STREAMS_STREAM_SET_WRITE_BUFFER - int php_basic_streams_stream_set_write_buffer(resource $stream, int $size)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_ACCEPT - resource|false php_basic_streams_stream_socket_accept(resource $socket, float $timeout, string& $peer_name)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_CLIENT - resource|false php_basic_streams_stream_socket_client(string $address, int& $error_code, string& $error_message, float $timeout, int $flags, resource $context)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_ENABLE_CRYPTO - int|bool php_basic_streams_stream_socket_enable_crypto(resource $stream, bool $enable, int $crypto_method = null, resource $session_stream = null)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_GET_NAME - string|false php_basic_streams_stream_socket_get_name(resource $socket, bool $remote)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_PAIR - array|false php_basic_streams_stream_socket_pair(int $domain, int $type, int $protocol)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_RECVFROM - string|false php_basic_streams_stream_socket_recvfrom(resource $socket, int $length, int $flags, string& $address)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_SENDTO - int|false php_basic_streams_stream_socket_sendto(resource $socket, string $data, int $flags = 0, string $address = "")
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_SERVER - resource|false php_basic_streams_stream_socket_server(string $address, int& $error_code, string& $error_message, int $flags, resource $context)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SOCKET_SHUTDOWN - bool php_basic_streams_stream_socket_shutdown(resource $stream, int $mode)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_SUPPORTS_LOCK - bool php_basic_streams_stream_supports_lock(resource $stream)
// PHP_BASIC_STREAMS_STREAM_WRAPPER_REGISTER - bool php_basic_streams_stream_wrapper_register(string $protocol, string $class, int $flags = 0)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_WRAPPER_RESTORE - bool php_basic_streams_stream_wrapper_restore(string $protocol)
// OFFLINE | PHP_BASIC_STREAMS_STREAM_WRAPPER_UNREGISTER - bool php_basic_streams_stream_wrapper_unregister(string $protocol)
// OFFLINE | PHP_BASIC_STREAMS_PHPUSERFILTER - int|php_user_filter|resource|bool|void _FILTER, _ONCLOSE, _ONCREATE
// PHP_BASIC_STREAMS_STREAMWRAPPER - streamWrapper|void|bool|string|int|resource|mixed|false|array _CONSTRUCT, _DESTRUCT, _DIR_CLOSEDIR, _DIR_OPENDIR, _DIR_READDIR, _DIR_REWINDDIR, _MKDIR, _RENAME, _RMDIR, _STREAM_CAST, _STREAM_CLOSE, _STREAM_EOF, _STREAM_FLUSH, _STREAM_LOCK, _STREAM_METADATA, _STREAM_OPEN, _STREAM_READ, _STREAM_SEEK, _STREAM_SET_OPTION, _STREAM_STAT, _STREAM_TELL, _STREAM_TRUNCATE, _STREAM_WRITE, _UNLINK, _URL_STAT
// PHP_BASIC_STREAMS - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (46)
// OFFLINE | stream_bucket_append() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_bucket_make_writeable() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_bucket_new() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_bucket_prepend() - PHP_5, PHP_7, PHP_8
// stream_context_create() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_context_get_default() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// stream_context_get_options() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_context_get_params() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | stream_context_set_default() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// stream_context_set_option() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// stream_context_set_params() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_copy_to_stream() - PHP_5, PHP_7, PHP_8
// stream_filter_append() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// stream_filter_prepend() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_filter_register() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_filter_remove() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// OFFLINE | stream_get_contents() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_get_filters() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_get_line() - PHP_5, PHP_7, PHP_8
// stream_get_meta_data() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_get_transports() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_get_wrappers() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_is_local() - PHP_5 >= PHP_5_2_4, PHP_7, PHP_8
// OFFLINE | stream_isatty() - PHP_7 >= PHP_7_2_0, PHP_8
// OFFLINE | stream_notification_callback() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// stream_register_wrapper() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_resolve_include_path() - PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// stream_select() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// stream_set_blocking() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_set_chunk_size() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// OFFLINE | stream_set_read_buffer() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// stream_set_timeout() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// stream_set_write_buffer() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_accept() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_client() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_enable_crypto() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// OFFLINE | stream_socket_get_name() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_pair() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// OFFLINE | stream_socket_recvfrom() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_sendto() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_server() - PHP_5, PHP_7, PHP_8
// OFFLINE | stream_socket_shutdown() - PHP_5 >= PHP_5_2_1, PHP_7, PHP_8
// OFFLINE | stream_supports_lock() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// stream_wrapper_register() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// OFFLINE | stream_wrapper_restore() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// OFFLINE | stream_wrapper_unregister() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== USING CLASSES (2)
// OFFLINE | PHP_BASIC_STREAMS_PHPUSERFILTER - PHP_5 - PHP_8
// PHP_BASIC_STREAMS_STREAMWRAPPER - PHP_4 - PHP_8
// ============================== USING DATA_TYPES (12)
// void
// resource
// object
// string
// array
// bool
// mixed
// int
// false
// float
// OFFLINE | php_user_filter - PHP_5, PHP_7, PHP_8
// streamWrapper - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//       PHP_BASIC_STREAMS       
// ============================== ABOUT
// PHP Manual / Function Reference / Other Basic Extensions / Streams
// URL: https://www.php.net/manual/en/book.stream.php
// ============================== DESCRIPTION
// STREAMS
// LANGUAGE_REFERENCE_SUPPORTED_PROTOCOLS_AND_WRAPPERS
// LANGUAGE_REFERENCE_CONTEXT_OPTIONS_AND_PARAMETERS
// 
// STREAMS - BEGIN
// Streams
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// STREAM_FILTERS
// STREAM_CONTEXTS
// STREAM_ERRORS
// EXAMPLES
// THE_PHP_USER_FILTER_CLASS
// THE_STREAMWRAPPER_CLASS
// STREAM_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Streams are the way of generalizing file, network, data compression, and other operations which share a common set of functions and uses. In its simplest definition, a stream is a resource object which exhibits streamable behavior. That is, it can be read from or written to in a linear fashion, and may be able to fseek() to an arbitrary location within the stream.
// A wrapper is additional code which tells the stream how to handle specific protocols/encodings. For example, the http wrapper knows how to translate a URL into an HTTP/1.0 request for a file on a remote server. There are many wrappers built into PHP by default (See Supported Protocols and Wrappers), and additional, custom wrappers may be added either within a PHP script using stream_wrapper_register(), or directly from an extension. Because any variety of wrapper may be added to PHP, there is no set limit on what can be done with them. To access the list of currently registered wrappers, use stream_get_wrappers().
// 
// A stream is referenced as: scheme://target
// * scheme(string) - The name of the wrapper to be used. Examples include: file, http, https, ftp, ftps, compress.zlib, compress.bz2, and php. See Supported Protocols and Wrappers for a list of PHP built-in wrappers. If no wrapper is specified, the function default is used (typically file://).
// * target - Depends on the wrapper used. For filesystem related streams this is typically a path and filename of the desired file. For network related streams this is typically a hostname, often with a path appended. Again, see Supported Protocols and Wrappers for a description of targets for built-in streams.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/intro.stream.php
// INTRODUCTION - END
// 
// INSTALLING_CONFIGURING - BEGIN
// Installing/Configuring
// 
// REQUIREMENTS
// INSTALLATION
// RUNTIME_CONFIGURATION
// STREAM_CLASSES
// 
// REQUIREMENTS - BEGIN
// Requirements
// 
// No external libraries are needed to build this extension.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// STREAM_CLASSES - BEGIN
// Stream Classes
// 
// User designed wrappers can be registered via stream_wrapper_register(), using the class definition shown on that manual page.
// Class php_user_filter is predefined and is an abstract baseclass for use with user defined filters. See the manual page for stream_filter_register() for details on implementing user defined filters.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.resources.php
// STREAM_CLASSES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// Constant                    - Description
// STREAM_FILTER_READ          - Used with stream_filter_append() and stream_filter_prepend() to indicate that the specified filter should only be applied when reading
// STREAM_FILTER_WRITE         - Used with stream_filter_append() and stream_filter_prepend() to indicate that the specified filter should only be applied when writing
// STREAM_FILTER_ALL           - This constant is equivalent to STREAM_FILTER_READ | STREAM_FILTER_WRITE
// PSFS_PASS_ON                - Return Code indicating that the userspace filter returned buckets in $out.
// PSFS_FEED_ME                - Return Code indicating that the userspace filter did not return buckets in $out (i.e. No data available).
// PSFS_ERR_FATAL              - Return Code indicating that the userspace filter encountered an unrecoverable error (i.e. Invalid data received).
// PSFS_FLAG_NORMAL            - Regular read/write.
// PSFS_FLAG_FLUSH_INC         - An incremental flush.
// PSFS_FLAG_FLUSH_CLOSE       - Final flush prior to closing.
// STREAM_USE_PATH             - Flag indicating if the stream used the include path.
// STREAM_REPORT_ERRORS        - Flag indicating if the wrapper is responsible for raising errors using trigger_error() during opening of the stream. If this flag is not set, you should not raise any errors.
// STREAM_CLIENT_ASYNC_CONNECT - Open client socket asynchronously. This option must be used together with the STREAM_CLIENT_CONNECT flag. Used with stream_socket_client().
// STREAM_CLIENT_CONNECT       - Open client socket connection. Client sockets should always include this flag. Used with stream_socket_client().
// STREAM_CLIENT_PERSISTENT    - Client socket opened with stream_socket_client() should remain persistent between page loads.
// STREAM_SERVER_BIND          - Tells a stream created with stream_socket_server() to bind to the specified target. Server sockets should always include this flag.
// STREAM_SERVER_LISTEN        - Tells a stream created with stream_socket_server() and bound using the STREAM_SERVER_BIND flag to start listening on the socket. Connection-orientated transports (such as TCP) must use this flag, otherwise the server socket will not be enabled. Using this flag for connect-less transports (such as UDP) is an error.
// STREAM_NOTIFY_RESOLVE       - A remote address required for this stream has been resolved, or the resolution failed. See severity for an indication of which happened.
// STREAM_NOTIFY_CONNECT       - A connection with an external resource has been established.
// STREAM_NOTIFY_AUTH_REQUIRED - Additional authorization is required to access the specified resource. Typical issued with severity level of STREAM_NOTIFY_SEVERITY_ERR.
// STREAM_NOTIFY_MIME_TYPE_IS  - The mime-type of resource has been identified, refer to message for a description of the discovered type.
// STREAM_NOTIFY_FILE_SIZE_IS  - The size of the resource has been discovered.
// STREAM_NOTIFY_REDIRECTED    - The external resource has redirected the stream to an alternate location. Refer to message.
// STREAM_NOTIFY_PROGRESS      - Indicates current progress of the stream transfer in bytes_transferred and possibly bytes_max as well.
// STREAM_NOTIFY_COMPLETED     - There is no more data available on the stream.
// STREAM_NOTIFY_FAILURE       - A generic error occurred on the stream, consult message and message_code for details.
// STREAM_NOTIFY_AUTH_RESULT   - Authorization has been completed (with or without success).
// STREAM_NOTIFY_SEVERITY_INFO - Normal, non-error related, notification.
// STREAM_NOTIFY_SEVERITY_WARN - Non critical error condition. Processing may continue.
// STREAM_NOTIFY_SEVERITY_ERR  - A critical error occurred. Processing cannot continue.
// STREAM_IPPROTO_ICMP +       - Provides a ICMP socket.
// STREAM_IPPROTO_IP +         - Provides a IP socket.
// STREAM_IPPROTO_RAW +        - Provides a RAW socket.
// STREAM_IPPROTO_TCP +        - Provides a TCP socket.
// STREAM_IPPROTO_UDP +        - Provides a UDP socket.
// STREAM_PF_INET +            - Internet Protocol Version 4 (IPv4).
// STREAM_PF_INET6 +           - Internet Protocol Version 6 (IPv6).
// STREAM_PF_UNIX +            - Unix system internal protocols.
// STREAM_SOCK_DGRAM +         - Provides datagrams, which are connectionless messages (UDP, for example).
// STREAM_SOCK_RAW +           - Provides a raw socket, which provides access to internal network protocols and interfaces. Usually this type of socket is just available to the root user.
// STREAM_SOCK_RDM +           - Provides a RDM (Reliably-delivered messages) socket.
// STREAM_SOCK_SEQPACKET +     - Provides a sequenced packet stream socket.
// STREAM_SOCK_STREAM +        - Provides sequenced, two-way byte streams with a transmission mechanism for out-of-band data (TCP, for example).
// STREAM_SHUT_RD              - Used with stream_socket_shutdown() to disable further receptions.
// STREAM_SHUT_WR              - Used with stream_socket_shutdown() to disable further transmissions.
// STREAM_SHUT_RDWR            - Used with stream_socket_shutdown() to disable further receptions and transmissions.
// STREAM_CAST_FOR_SELECT      - Stream casting, for when stream_select() is calling stream_cast().
// STREAM_CAST_AS_STREAM       - Stream casting, when stream_cast() is called otherwise (see above).
// STREAM_META_TOUCH           - Used with stream_metadata(), to specify touch() call.
// STREAM_META_OWNER           - Used with stream_metadata(), to specify chown() call.
// STREAM_META_OWNER_NAME      - Used with stream_metadata(), to specify chown() call.
// STREAM_META_GROUP           - Used with stream_metadata(), to specify chgrp() call.
// STREAM_META_GROUP_NAME      - Used with stream_metadata(), to specify chgrp() call.
// STREAM_META_ACCESS          - Used with stream_metadata(), to specify chmod() call.
// STREAM_BUFFER_NONE          - No buffering.
// STREAM_BUFFER_LINE          - Line buffering.
// STREAM_BUFFER_FULL          - Full buffering.
// 
// Note: The constants marked with + are meant to be used with stream_socket_pair(). Please note that some of these constants might not be available in your system.
// Note: The STREAM_META_* constants are meant to be used with stream_metadata().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.constants.php
// PREDEFINED_CONSTANTS - END
// 
// STREAM_FILTERS - BEGIN
// Stream Filters
// 
// A filter is a final piece of code which may perform operations on data as it is being read from or written to a stream. Any number of filters may be stacked onto a stream. Custom filters can be defined in a PHP script using stream_filter_register() or in an extension. To access the list of currently registered filters, use stream_get_filters().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.filters.php
// STREAM_FILTERS - END
// 
// STREAM_CONTEXTS - BEGIN
// Stream Contexts
// 
// A context is a set of parameters and wrapper specific options which modify or enhance the behavior of a stream. Contexts are created using stream_context_create() and can be passed to most filesystem related stream creation functions (i.e. fopen(), file(), file_get_contents(), etc...).
// Options can be specified when calling stream_context_create(), or later using stream_context_set_option(). A list of wrapper specific options can be found in the Context options and parameters chapter.
// Parameters can be specified for contexts using the stream_context_set_params() function.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.contexts.php
// STREAM_CONTEXTS - END
// 
// STREAM_ERRORS - BEGIN
// Stream Errors
// 
// As with any file or socket related function, an operation on a stream may fail for a variety of normal reasons (i.e.: Unable to connect to remote host, file not found, etc...). A stream related call may also fail because the desired stream is not registered on the running system. See the array returned by stream_get_wrappers() for a list of streams supported by your installation of PHP. As with most PHP internal functions if a failure occurs an E_WARNING message will be generated describing the nature of the error.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.errors.php
// STREAM_ERRORS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// EXAMPLE_CLASS_REGISTERED_AS_STREAM_WRAPPER
// 
// [examples]
// [example]
// Example #1 Using file_get_contents() to retrieve data from multiple sources
// [php]
// // Read local file from /home/bar
// $localfile = file_get_contents("/home/bar/foo.txt");
// 
// // Identical to above, explicitly naming FILE scheme
// $localfile = file_get_contents("file:///home/bar/foo.txt");
// 
// // Read remote file from www.example.com using HTTP
// $httpfile  = file_get_contents("http://www.example.com/foo.txt");
// 
// // Read remote file from www.example.com using HTTPS
// $httpsfile = file_get_contents("https://www.example.com/foo.txt");
// 
// // Read remote file from ftp.example.com using FTP
// $ftpfile   = file_get_contents("ftp://user:pass@ftp.example.com/foo.txt");
// 
// // Read remote file from ftp.example.com using FTPS
// $ftpsfile  = file_get_contents("ftps://user:pass@ftp.example.com/foo.txt");
// [/php]
// [/example]
// [example]
// Example #2 Making a POST request to an https server
// [php]
// // Send POST request to https://secure.example.com/form_action.php
// // Include form elements named "foo" and "bar" with dummy values
// //
// 
// $sock = fsockopen("ssl://secure.example.com", 443, $errno, $errstr, 30);
// if (!$sock) die("$errstr ($errno)\n");
// 
// $data = "foo=" . urlencode("Value for Foo") . "&bar=" . urlencode("Value for Bar");
// 
// fwrite($sock, "POST /form_action.php HTTP/1.0\r\n");
// fwrite($sock, "Host: secure.example.com\r\n");
// fwrite($sock, "Content-type: application/x-www-form-urlencoded\r\n");
// fwrite($sock, "Content-length: " . strlen($data) . "\r\n");
// fwrite($sock, "Accept: */*\r\n");
// fwrite($sock, "\r\n");
// fwrite($sock, $data);
// 
// $headers = "";
// while ($str = trim(fgets($sock, 4096)))
// $headers .= "$str\n";
// 
// echo "\n";
// 
// $body = "";
// while (!feof($sock))
// $body .= fgets($sock, 4096);
// 
// fclose($sock);
// [/php]
// [/example]
// [example]
// Example #3 Writing data to a compressed file
// [php]
// // Create a compressed file containing an arbitrary string
// // File can be read back using compress.zlib stream or just
// // decompressed from the command line using 'gzip -d foo-bar.txt.gz'
// //
// $fp = fopen("compress.zlib://foo-bar.txt.gz", "wb");
// if (!$fp) die("Unable to create file.");
// 
// fwrite($fp, "This is a test.\n");
// 
// fclose($fp);
// [/php]
// [/example]
// [/examples]
// 
// EXAMPLE_CLASS_REGISTERED_AS_STREAM_WRAPPER - BEGIN
// Example class registered as stream wrapper
// 
// The example below implements a var:// protocol handler that allows read/write access to a named global variable using standard filesystem stream functions such as fread(). The var:// protocol implemented below, given the URL "var://foo" will read/write data to/from $GLOBALS["foo"].
// 
// [example]
// Example #1 A Stream for reading/writing global variables
// [php]
// 
// class VariableStream {
//     var $position;
//     var $varname;
// 
//     function stream_open($path, $mode, $options, &$opened_path)
//     {
//         $url = parse_url($path);
//         $this->varname = $url["host"];
//         $this->position = 0;
//         return true;
//     }
// 
//     function stream_read($count)
//     {
//         $ret = substr($GLOBALS[$this->varname], $this->position, $count);
//         $this->position += strlen($ret);
//         return $ret;
//     }
// 
//     function stream_write($data)
//     {
//         $left = substr($GLOBALS[$this->varname], 0, $this->position);
//         $right = substr($GLOBALS[$this->varname], $this->position + strlen($data));
//         $GLOBALS[$this->varname] = $left . $data . $right;
//         $this->position += strlen($data);
//         return strlen($data);
//     }
// 
//     function stream_tell()
//     {
//         return $this->position;
//     }
// 
//     function stream_eof()
//     {
//         return $this->position >= strlen($GLOBALS[$this->varname]);
//     }
// 
//     function stream_seek($offset, $whence)
//     {
//         switch ($whence) {
//             case SEEK_SET:
//                 if ($offset < strlen($GLOBALS[$this->varname]) && $offset >= 0) {
//                      $this->position = $offset;
//                      return true;
//                 } else {
//                      return false;
//                 }
//                 break;
// 
//             case SEEK_CUR:
//                 if ($offset >= 0) {
//                      $this->position += $offset;
//                      return true;
//                 } else {
//                      return false;
//                 }
//                 break;
// 
//             case SEEK_END:
//                 if (strlen($GLOBALS[$this->varname]) + $offset >= 0) {
//                      $this->position = strlen($GLOBALS[$this->varname]) + $offset;
//                      return true;
//                 } else {
//                      return false;
//                 }
//                 break;
// 
//             default:
//                 return false;
//         }
//     }
// 
//     function stream_metadata($path, $option, $var) 
//     {
//         if($option == STREAM_META_TOUCH) {
//             $url = parse_url($path);
//             $varname = $url["host"];
//             if(!isset($GLOBALS[$varname])) {
//                 $GLOBALS[$varname] = '';
//             }
//             return true;
//         }
//         return false;
//     }
// }
// 
// stream_wrapper_register("var", "VariableStream")
//     or die("Failed to register protocol");
// 
// $myvar = "";
// 
// $fp = fopen("var://myvar", "r+");
// 
// fwrite($fp, "line1\n");
// fwrite($fp, "line2\n");
// fwrite($fp, "line3\n");
// 
// rewind($fp);
// while (!feof($fp)) {
//     echo fgets($fp);
// }
// fclose($fp);
// var_dump($myvar);
// 
// [/php]
// The above example will output:
// [result]
// line1
// line2
// line3
// string(18) "line1
// line2
// line3
// "
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.streamwrapper.example-1.php
// EXAMPLE_CLASS_REGISTERED_AS_STREAM_WRAPPER - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/stream.examples.php
// EXAMPLES - END
// 
// THE_PHP_USER_FILTER_CLASS - BEGIN
// The php_user_filter class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// Children of this class are passed to stream_filter_register(). Note that the __construct method is not called; instead, php_user_filter::onCreate() should be used for initialization.
// 
// Class synopsis
// [code]
// class php_user_filter {
// 
//    /* Properties */
//    public string $filtername = "";
//    public mixed $params = "";
//    public ?resource $stream = null;
// 
//    /* Methods */
//    public filter(
//        resource $in,
//        resource $out,
//        int &$consumed,
//        bool $closing
//    ): int
//    public onClose(): void
//    public onCreate(): bool
// }
// [/code]
// 
// Properties
// filtername - Name of the filter registered by stream_filter_append().
// params     -
// stream     -
// 
// Table of Contents
// * php_user_filter::filter   - Called when applying the filter
// * php_user_filter::onClose  - Called when closing the filter
// * php_user_filter::onCreate - Called when creating the filter
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.php-user-filter.php
// THE_PHP_USER_FILTER_CLASS - END
// 
// THE_STREAMWRAPPER_CLASS - BEGIN
// The streamWrapper class
// 
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// 
// Introduction
// Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as fopen(), fread() etc.).
// Note: This is NOT a real class, only a prototype of how a class defining its own protocol should be.
// Note: Implementing the methods in other ways than described here can lead to undefined behaviour.
// An instance of this class is initialized as soon as a stream function tries to access the protocol it is associated with.
// 
// Class synopsis
// [code]
// class streamWrapper {
// 
//    /* Properties */
//    public resource $context;
// 
//    /* Methods */
//    public __construct()
//    public dir_closedir(): bool
//    public dir_opendir(string $path, int $options): bool
//    public dir_readdir(): string
//    public dir_rewinddir(): bool
//    public mkdir(string $path, int $mode, int $options): bool
//    public rename(string $path_from, string $path_to): bool
//    public rmdir(string $path, int $options): bool
//    public stream_cast(int $cast_as): resource
//    public stream_close(): void
//    public stream_eof(): bool
//    public stream_flush(): bool
//    public stream_lock(int $operation): bool
//    public stream_metadata(string $path, int $option, mixed $value): bool
//    public stream_open(
//        string $path,
//        string $mode,
//        int $options,
//        ?string &$opened_path
//    ): bool
//    public stream_read(int $count): string|false
//    public stream_seek(int $offset, int $whence = SEEK_SET): bool
//    public stream_set_option(int $option, int $arg1, int $arg2): bool
//    public stream_stat(): array|false
//    public stream_tell(): int
//    public stream_truncate(int $new_size): bool
//    public stream_write(string $data): int
//    public unlink(string $path): bool
//    public url_stat(string $path, int $flags): array|false
//    public __destruct()
// }
// [/code]
// 
// Properties
// resource context - The current context, or null if no context was passed to the caller function.
// Use the stream_context_get_options() to parse the context.
// Note: This property must be public so PHP can populate it with the actual context resource.
// 
// Table of Contents
// * streamWrapper::__construct       - Constructs a new stream wrapper
// * streamWrapper::__destruct        - Destructs an existing stream wrapper
// * streamWrapper::dir_closedir      - Close directory handle
// * streamWrapper::dir_opendir       - Open directory handle
// * streamWrapper::dir_readdir       - Read entry from directory handle
// * streamWrapper::dir_rewinddir     - Rewind directory handle
// * streamWrapper::mkdir             - Create a directory
// * streamWrapper::rename            - Renames a file or directory
// * streamWrapper::rmdir             - Removes a directory
// * streamWrapper::stream_cast       - Retrieve the underlaying resource
// * streamWrapper::stream_close      - Close a resource
// * streamWrapper::stream_eof        - Tests for end-of-file on a file pointer
// * streamWrapper::stream_flush      - Flushes the output
// * streamWrapper::stream_lock       - Advisory file locking
// * streamWrapper::stream_metadata   - Change stream metadata
// * streamWrapper::stream_open       - Opens file or URL
// * streamWrapper::stream_read       - Read from stream
// * streamWrapper::stream_seek       - Seeks to specific location in a stream
// * streamWrapper::stream_set_option - Change stream options
// * streamWrapper::stream_stat       - Retrieve information about a file resource
// * streamWrapper::stream_tell       - Retrieve the current position of a stream
// * streamWrapper::stream_truncate   - Truncate stream
// * streamWrapper::stream_write      - Write to stream
// * streamWrapper::unlink            - Delete a file
// * streamWrapper::url_stat          - Retrieve information about a file
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.streamwrapper.php
// THE_STREAMWRAPPER_CLASS - END
// 
// STREAM_FUNCTIONS - BEGIN
// Stream Functions
// 
// Table of Contents
// * stream_bucket_append         - Append bucket to brigade
// * stream_bucket_make_writeable - Returns a bucket object from the brigade to operate on
// * stream_bucket_new            - Create a new bucket for use on the current stream
// * stream_bucket_prepend        - Prepend bucket to brigade
// * stream_context_create        - Creates a stream context
// * stream_context_get_default   - Retrieve the default stream context
// * stream_context_get_options   - Retrieve options for a stream/wrapper/context
// * stream_context_get_params    - Retrieves parameters from a context
// * stream_context_set_default   - Set the default stream context
// * stream_context_set_option    - Sets an option for a stream/wrapper/context
// * stream_context_set_params    - Set parameters for a stream/wrapper/context
// * stream_copy_to_stream        - Copies data from one stream to another
// * stream_filter_append         - Attach a filter to a stream
// * stream_filter_prepend        - Attach a filter to a stream
// * stream_filter_register       - Register a user defined stream filter
// * stream_filter_remove         - Remove a filter from a stream
// * stream_get_contents          - Reads remainder of a stream into a string
// * stream_get_filters           - Retrieve list of registered filters
// * stream_get_line              - Gets line from stream resource up to a given delimiter
// * stream_get_meta_data         - Retrieves header/meta data from streams/file pointers
// * stream_get_transports        - Retrieve list of registered socket transports
// * stream_get_wrappers          - Retrieve list of registered streams
// * stream_is_local              - Checks if a stream is a local stream
// * stream_isatty                - Check if a stream is a TTY
// * stream_notification_callback - A callback function for the notification context parameter
// * stream_register_wrapper      - Alias of stream_wrapper_register
// * stream_resolve_include_path  - Resolve filename against the include path
// * stream_select                - Runs the equivalent of the select() system call on the given arrays of streams with a timeout specified by seconds and microseconds
// * stream_set_blocking          - Set blocking/non-blocking mode on a stream
// * stream_set_chunk_size        - Set the stream chunk size
// * stream_set_read_buffer       - Set read file buffering on the given stream
// * stream_set_timeout           - Set timeout period on a stream
// * stream_set_write_buffer      - Sets write file buffering on the given stream
// * stream_socket_accept         - Accept a connection on a socket created by stream_socket_server
// * stream_socket_client         - Open Internet or Unix domain socket connection
// * stream_socket_enable_crypto  - Turns encryption on/off on an already connected socket
// * stream_socket_get_name       - Retrieve the name of the local or remote sockets
// * stream_socket_pair           - Creates a pair of connected, indistinguishable socket streams
// * stream_socket_recvfrom       - Receives data from a socket, connected or not
// * stream_socket_sendto         - Sends a message to a socket, whether it is connected or not
// * stream_socket_server         - Create an Internet or Unix domain server socket
// * stream_socket_shutdown       - Shutdown a full-duplex connection
// * stream_supports_lock         - Tells whether the stream supports locking
// * stream_wrapper_register      - Register a URL wrapper implemented as a PHP class
// * stream_wrapper_restore       - Restores a previously unregistered built-in wrapper
// * stream_wrapper_unregister    - Unregister a URL wrapper
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/ref.stream.php
// STREAM_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/book.stream.php
// STREAMS - END
// 
// LANGUAGE_REFERENCE_SUPPORTED_PROTOCOLS_AND_WRAPPERS - BEGIN
// Supported Protocols and Wrappers (PHP Manual / Language Reference / Supported Protocols and Wrappers)
// 
// PHP comes with many built-in wrappers for various URL-style protocols for use with the filesystem functions such as fopen(), copy(), file_exists() and filesize(). In addition to these wrappers, it is possible to register custom wrappers using the stream_wrapper_register() function.
// Note: The URL syntax used to describe a wrapper only supports the scheme://... syntax. The scheme:/ and scheme: syntaxes are not supported.
// 
// Table of Contents
// * file://   - Accessing local filesystem
// * http://   - Accessing HTTP(s) URLs
// * ftp://    - Accessing FTP(s) URLs
// * php://    - Accessing various I/O streams
// * zlib://   - Compression Streams
// * data://   - Data (RFC 2397)
// * glob://   - Find pathnames matching pattern
// * phar://   - PHP Archive
// * ssh2://   - Secure Shell 2
// * rar://    - RAR
// * ogg://    - Audio streams
// * expect:// - Process Interaction Streams
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/wrappers.php
// LANGUAGE_REFERENCE_SUPPORTED_PROTOCOLS_AND_WRAPPERS - END
// 
// LANGUAGE_REFERENCE_CONTEXT_OPTIONS_AND_PARAMETERS - BEGIN
// Context options and parameters (PHP Manual / Language Reference / Context options and parameters)
// 
// SOCKET_CONTEXT_OPTIONS
// HTTP_CONTEXT_OPTIONS
// FTP_CONTEXT_OPTIONS
// SSL_CONTEXT_OPTIONS
// PHAR_CONTEXT_OPTIONS
// CONTEXT_PARAMETERS
// ZIP_CONTEXT_OPTIONS
// ZLIB_CONTEXT_OPTIONS
// 
// PHP offers various context options and parameters which can be used with all filesystem and stream wrappers. The context is created with stream_context_create(). Options are set with stream_context_set_option() and parameters with stream_context_set_params().
// 
// Table of Contents
// * Socket context options - Socket context option listing
// * HTTP context options   - HTTP context option listing
// * FTP context options    - FTP context option listing
// * SSL context options    - SSL context option listing
// * Phar context options   - Phar context option listing
// * Context parameters     - Context parameter listing
// * Zip context options    - Zip context option listing
// * Zlib context options   - Zlib context option listing
// 
// SOCKET_CONTEXT_OPTIONS - BEGIN
// Socket context options
// 
// Socket context options - Socket context option listing
// 
// Description
// Socket context options are available for all wrappers that work over sockets, like tcp, http and ftp.
// 
// Options
// bindto       - Used to specify the IP address (either IPv4 or IPv6) and/or the port number that PHP will use to access the network. The syntax is ip:port for IPv4 addresses, and [ip]:port for IPv6 addresses. Setting the IP or the port to 0 will let the system choose the IP and/or port.
// Note: As FTP creates two socket connections during normal operation, the port number cannot be specified using this option.
// backlog      - Used to limit the number of outstanding connections in the socket's listen queue.
// Note: This is only applicable to stream_socket_server().
// ipv6_v6only  - Overrides the OS default regarding mapping IPv4 into IPv6.
// Note: This is important in particular when trying to listen on IPv4 addresses separately while there exists a binding on [::]. This is only applicable to stream_socket_server().
// so_reuseport - Allows multiple bindings to a same ip:port pair, even from separate processes.
// Note: This is only applicable to stream_socket_server().
// so_broadcast - Enables sending and receiving data to/from broadcast addresses.
// Note: This is only applicable to stream_socket_server().
// tcp_nodelay  - Setting this option to true will set SOL_TCP,NO_DELAY=1 appropriately, thus disabling the TCP Nagle algorithm.
// 
// Changelog
// Version - Description
// 7.1.0   - Added tcp_nodelay.
// 7.0.1   - Added ipv6_v6only.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic bindto usage example
// [php]
// // connect to the internet using the '192.168.0.100' IP
// $opts = array(
//     'socket' => array(
//         'bindto' => '192.168.0.100:0',
//     ),
// );
// 
// 
// // connect to the internet using the '192.168.0.100' IP and port '7000'
// $opts = array(
//     'socket' => array(
//         'bindto' => '192.168.0.100:7000',
//     ),
// );
// 
// 
// // connect to the internet using the '2001:db8::1' IPv6 address
// // and port '7000'
// $opts = array(
//     'socket' => array(
//         'bindto' => '[2001:db8::1]:7000',
//     ),
// );
// 
// 
// // connect to the internet using port '7000'
// $opts = array(
//     'socket' => array(
//         'bindto' => '0:7000',
//     ),
// );
// 
// 
// // create the context...
// $context = stream_context_create($opts);
// 
// // ...and use it to fetch the data
// echo file_get_contents('http://www.example.com', false, $context);
// 
// [/php]
// [/example]
// [/examples]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.socket.php
// SOCKET_CONTEXT_OPTIONS - END
// 
// HTTP_CONTEXT_OPTIONS - BEGIN
// HTTP context options
// 
// HTTP context options - HTTP context option listing
// 
// Description
// Context options for http:// and https:// transports.
// 
// Options
// method string          - GET, POST, or any other HTTP method supported by the remote server.
// Defaults to GET.
// header array or string - Additional headers to be sent during request. Values in this option will override other values (such as User-agent:, Host:, and Authentication:), even when following Location: redirects. Thus it is not recommended to set a Host: header, if follow_location is enabled.
// user_agent string      - Value to send with User-Agent: header. This value will only be used if user-agent is not specified in the header context option above.
// By default the user_agent php.ini setting is used.
// content string         - Additional data to be sent after the headers. Typically used with POST or PUT requests.
// proxy string           - URI specifying address of proxy server. (e.g. tcp://proxy.example.com:5100).
// request_fulluri bool   - When set to true, the entire URI will be used when constructing the request. (e.g. GET http://www.example.com/path/to/file.html HTTP/1.0). While this is a non-standard request format, some proxy servers require it.
// Defaults to false.
// follow_location int    - Follow Location header redirects. Set to 0 to disable.
// Defaults to 1.
// max_redirects int      - The max number of redirects to follow. Value 1 or less means that no redirects are followed.
// Defaults to 20.
// protocol_version float - HTTP protocol version.
// Defaults to 1.1 as of PHP 8.0.0; prior to that version the default was 1.0.
// timeout float          - Read timeout in seconds, specified by a float (e.g. 10.5).
// By default the default_socket_timeout php.ini setting is used.
// ignore_errors bool     - Fetch the content even on failure status codes.
// Defaults to false.
// 
// [examples]
// Examples
// [example]
// Example #1 Fetch a page and send POST data
// [php]
// 
// $postdata = http_build_query(
//     array(
//         'var1' => 'some content',
//         'var2' => 'doh'
//     )
// );
// 
// $opts = array('http' =>
//     array(
//         'method'  => 'POST',
//         'header'  => 'Content-type: application/x-www-form-urlencoded',
//         'content' => $postdata
//     )
// );
// 
// $context = stream_context_create($opts);
// 
// $result = file_get_contents('http://example.com/submit.php', false, $context);
// 
// [/php]
// [/example]
// [example]
// Example #2 Ignore redirects but fetch headers and content
// [php]
// 
// $url = "http://www.example.org/header.php";
// 
// $opts = array('http' =>
//     array(
//         'method' => 'GET',
//         'max_redirects' => '0',
//         'ignore_errors' => '1'
//     )
// );
// 
// $context = stream_context_create($opts);
// $stream = fopen($url, 'r', false, $context);
// 
// // header information as well as meta data
// // about the stream
// var_dump(stream_get_meta_data($stream));
// 
// // actual data at $url
// var_dump(stream_get_contents($stream));
// fclose($stream);
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: Underlying socket stream context options
//  Additional context options may be supported by the underlying transport For http:// streams, refer to context options for the tcp:// transport. For https:// streams, refer to context options for the ssl:// transport.
//  Note: HTTP status line
//  When this stream wrapper follows a redirect, the wrapper_data returned by stream_get_meta_data() might not necessarily contain the HTTP status line that actually applies to the content data at index 0.
//  [code]
//  array (
//    'wrapper_data' =>
//    array (
//      0 => 'HTTP/1.0 301 Moved Permanently',
//      1 => 'Cache-Control: no-cache',
//      2 => 'Connection: close',
//      3 => 'Location: http://example.com/foo.jpg',
//      4 => 'HTTP/1.1 200 OK',
//      ...
//  [/code]
//  The first request returned a 301 (permanent redirect), so the stream wrapper automatically followed the redirect to get a 200 response (index = 4).
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.http.php
// HTTP_CONTEXT_OPTIONS - END
// 
// FTP_CONTEXT_OPTIONS - BEGIN
// FTP context options
// 
// FTP context options - FTP context option listing
// 
// Description
// Context options for ftp:// and ftps:// transports.
// 
// Options
// overwrite bool - Allow overwriting of already existing files on remote server. Applies to write mode (uploading) only.
// Defaults to false.
// resume_pos int - File offset at which to begin transfer. Applies to read mode (downloading) only.
// Defaults to 0 (Beginning of File).
// proxy string   - Proxy FTP request via http proxy server. Applies to file read operations only. Ex: tcp://squid.example.com:8000.
// 
// Notes
//  Note: Underlying socket stream context options
//  Additional context options may be supported by the underlying transport For ftp:// streams, refer to context options for the tcp:// transport. For ftps:// streams, refer to context options for the ssl:// transport.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.ftp.php
// FTP_CONTEXT_OPTIONS - END
// 
// SSL_CONTEXT_OPTIONS - BEGIN
// SSL context options
// 
// SSL context options - SSL context option listing
// 
// Description
// Context options for ssl:// and tls:// transports.
// 
// Options
// peer_name string                - Peer name to be used. If this value is not set, then the name is guessed based on the hostname used when opening the stream.
// verify_peer bool                - Require verification of SSL certificate used.
// Defaults to true.
// verify_peer_name bool           - Require verification of peer name.
// Defaults to true.
// allow_self_signed bool          - Allow self-signed certificates. Requires verify_peer.
// Defaults to false
// cafile string                   - Location of Certificate Authority file on local filesystem which should be used with the verify_peer context option to authenticate the identity of the remote peer.
// capath string                   - If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory.
// local_cert string               - Path to local certificate file on filesystem. It must be a PEM encoded file which contains your certificate and private key. It can optionally contain the certificate chain of issuers. The private key also may be contained in a separate file specified by local_pk.
// local_pk string                 - Path to local private key file on filesystem in case of separate files for certificate (local_cert) and private key.
// passphrase string               - Passphrase with which your local_cert file was encoded.
// verify_depth int                - Abort if the certificate chain is too deep.
// Defaults to no verification.
// ciphers string                  - Sets the list of available ciphers. The format of the string is described in > ciphers(1).
// Defaults to DEFAULT.
// capture_peer_cert bool          - If set to true a peer_certificate context option will be created containing the peer certificate.
// capture_peer_cert_chain bool - If set to true a peer_certificate_chain context option will be created containing the certificate chain.
// SNI_enabled bool                - If set to true server name indication will be enabled. Enabling SNI allows multiple certificates on the same IP address.
// disable_compression bool        - If set, disable TLS compression. This can help mitigate the CRIME attack vector.
// peer_fingerprint string | array - Aborts when the remote certificate digest doesn't match the specified hash.
// When a string is used, the length will determine which hashing algorithm is applied, either "md5" (32) or "sha1" (40).
// When an array is used, the keys indicate the hashing algorithm name and each corresponding value is the expected digest.
// security_level int              - Sets the security level. If not specified the library default security level is used. The security levels are described in > SSL_CTX_get_security_level(3).
// Available as of PHP 7.2.0 and OpenSSL 1.1.0.
// 
// Changelog
// Version - Description
// 7.2.0   - Added security_level. Requires OpenSSL >= 1.1.0.
// 
// Notes
// Note: Because ssl:// is the underlying transport for the https:// and ftps:// wrappers, any context options which apply to ssl:// also apply to https:// and ftps://.
// Note: For SNI (Server Name Indication) to be available, then PHP must be compiled with OpenSSL 0.9.8j or greater. Use the OPENSSL_TLSEXT_SERVER_NAME to determine whether SNI is supported.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.ssl.php
// SSL_CONTEXT_OPTIONS - END
// 
// PHAR_CONTEXT_OPTIONS - BEGIN
// Phar context options
// 
// Phar context options - Phar context option listing
// 
// Description
// Context options for phar:// wrapper.
// 
// Options
// compress int   - One of Phar compression constants.
// metadata mixed - Phar metadata. See Phar::setMetadata().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.phar.php
// PHAR_CONTEXT_OPTIONS - END
// 
// CONTEXT_PARAMETERS - BEGIN
// Context parameters
// 
// Context parameters - Context parameter listing
// 
// Description
// These parameters can be set on a context using the stream_context_set_params() function.
// 
// Parameters
// notification callable - A callable to be called when an event occurs on a stream.
// See stream_notification_callback for more details.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.params.php
// CONTEXT_PARAMETERS - END
// 
// ZIP_CONTEXT_OPTIONS - BEGIN
// Zip context options
// 
// Zip context options - Zip context option listing
// 
// Description
// Zip context options are available for zip wrappers.
// 
// Options
// password - Used to specify password used for encrypted archive.
// 
// Changelog
// Version                    - Description
// PHP 7.2.0, PECL zip 1.14.0 - Added password.
// 
// [examples]
// Examples
// [example]
// Example #1 Basic password usage example
// [php]
// // Read encrypted archive
// $opts = array(
//     'zip' => array(
//         'password' => 'secret',
//     ),
// );
// // create the context...
// $context = stream_context_create($opts);
// 
// // ...and use it to fetch the data
// echo file_get_contents('zip://test.zip#test.txt', false, $context);
// 
// [/php]
// [/example]
// [/examples]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.zip.php
// ZIP_CONTEXT_OPTIONS - END
// 
// ZLIB_CONTEXT_OPTIONS - BEGIN
// Zlib context options
// 
// Zlib context options - Zlib context option listing
// 
// Description
// Zlib context options are available for zlib wrappers.
// 
// Options
// level - Used to specify the compression level (0 - 9).
// 
// Changelog
// Version - Description
// 7.3.0   - level has been added.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.zlib.php
// ZLIB_CONTEXT_OPTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/context.php
// LANGUAGE_REFERENCE_CONTEXT_OPTIONS_AND_PARAMETERS - END
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_BUCKET_APPEND
// ============================== OFFLINE
// ============================== ABOUT
// Append bucket to brigade.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_bucket_append() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_bucket_append($brigade, $bucket)
{

// ========== STREAM_BUCKET_APPEND - BEGIN
// ===== ABOUT
// Append bucket to brigade
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_bucket_append(resource $brigade, object $bucket): void
// ===== CODE
stream_bucket_append(

$brigade, // resource $brigade

$bucket // object $bucket

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-04)
// URL: https://www.php.net/manual/en/function.stream-bucket-append.php
// ========== STREAM_BUCKET_APPEND - END

// SYNTAX:
// void stream_bucket_append(resource $brigade, object $bucket)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_BUCKET_APPEND
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_BUCKET_MAKE_WRITEABLE
// ============================== OFFLINE
// ============================== ABOUT
// Returns a bucket object from the brigade to operate on.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_bucket_make_writeable() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_bucket_make_writeable($brigade)
{
$return_stream_bucket_make_writeable = null;

// ========== STREAM_BUCKET_MAKE_WRITEABLE - BEGIN
// ===== ABOUT
// Returns a bucket object from the brigade to operate on
// ===== DESCRIPTION
// This function is called whenever there is the need to access and operate on the content contains in a brigade. It is typically called from php_user_filter::filter().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_bucket_make_writeable(resource $brigade): ?object
// ===== CODE
$return_stream_bucket_make_writeable = stream_bucket_make_writeable(

$brigade // resource brigade - The brigade to return a bucket object from.

); // Return Values
// Returns a bucket object with the properties listed below or null.
// data (string)     - data bucket The current string in the bucket.
// datalen (integer) - datalen bucket The length of the string in the bucket.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-04)
// URL: https://www.php.net/manual/en/function.stream-bucket-make-writeable.php
// ========== STREAM_BUCKET_MAKE_WRITEABLE - END

// SYNTAX:
// object stream_bucket_make_writeable(resource $brigade)

return $return_stream_bucket_make_writeable; // object
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_BUCKET_MAKE_WRITEABLE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_BUCKET_NEW
// ============================== OFFLINE
// ============================== ABOUT
// Create a new bucket for use on the current stream.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_bucket_new() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_bucket_new($stream, $buffer)
{
$return_stream_bucket_new = null;

// ========== STREAM_BUCKET_NEW - BEGIN
// ===== ABOUT
// Create a new bucket for use on the current stream
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_bucket_new(resource $stream, string $buffer): object
// ===== CODE
$return_stream_bucket_new = stream_bucket_new(

$stream, // resource $stream

$buffer // string $buffer

); // Return
// object
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-bucket-new.php
// ========== STREAM_BUCKET_NEW - END

// SYNTAX:
// object stream_bucket_new(resource $stream, string $buffer)

return $return_stream_bucket_new; // object
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_BUCKET_NEW
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_BUCKET_PREPEND
// ============================== OFFLINE
// ============================== ABOUT
// Prepend bucket to brigade.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_bucket_prepend() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_bucket_prepend($brigade, $bucket)
{

// ========== STREAM_BUCKET_PREPEND - BEGIN
// ===== ABOUT
// Prepend bucket to brigade
// ===== DESCRIPTION
// This function can be called to prepend a bucket to a bucket brigade. It is typically called from php_user_filter::filter().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_bucket_prepend(resource $brigade, object $bucket): void
// ===== CODE
stream_bucket_prepend(

$brigade, // resource brigade - brigade is a resource pointing to a bucket brigade which contains one or more bucket objects.

$bucket // object bucket - A bucket object.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_bucket_prepend() examples
// [php]
// 
// class foo extends php_user_filter {
//   protected $calls = 0;
//   public function filter($in, $out, &$consumed, $closing) {
//     while ($bucket = stream_bucket_make_writeable($in)) {
//       $consumed += $bucket->datalen;
//       if ($this->calls++ == 2) {
//         // This bucket will appear again before any other bucket.
//         stream_bucket_prepend($in, $bucket);
//       }
//     }
//     return PSFS_FEED_ME;
//   }
// }
// stream_filter_register('test', 'foo');
// print  file_get_contents('php://filter/read=test/resource=foo');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-bucket-prepend.php
// ========== STREAM_BUCKET_PREPEND - END

// SYNTAX:
// void stream_bucket_prepend(resource $brigade, object $bucket)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_BUCKET_PREPEND
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_CREATE
// ============================== PUBLIC
// ============================== ABOUT
// Creates a stream context.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_create() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_context_create($options = null, $params = null)
{
$return_stream_context_create = null;

// ========== STREAM_CONTEXT_CREATE - BEGIN
// ===== ABOUT
// Creates a stream context
// ===== DESCRIPTION
// Creates and returns a stream context with any options supplied in options preset.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_create(?array $options = null, ?array $params = null): resource
// ===== CODE
$return_stream_context_create = stream_context_create(

$options, // array options - Must be an associative array of associative arrays in the format $arr['wrapper']['option'] = $value, or null. Refer to context options for a list of available wrappers and options.
// Defaults to null.

$params // array params - Must be an associative array in the format $arr['parameter'] = $value, or null. Refer to context parameters for a listing of standard stream parameters.

); // Return Values
// A stream context resource.
// 
// Changelog
// Version - Description
// 8.0.0   - options and params are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 Using stream_context_create()
// [php]
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
// // Sends an http request to www.example.com
// // with additional headers shown above
// $fp = fopen('http://www.example.com', 'r', false, $context);
// fpassthru($fp);
// fclose($fp);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-context-create.php
// ========== STREAM_CONTEXT_CREATE - END

// SYNTAX:
// resource stream_context_create(array $options = null, array $params = null)

return $return_stream_context_create; // resource
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_CREATE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_DEFAULT
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve the default stream context.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_get_default() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_context_get_default($options = null)
{
$return_stream_context_get_default = null;

// ========== STREAM_CONTEXT_GET_DEFAULT - BEGIN
// ===== ABOUT
// Retrieve the default stream context
// ===== DESCRIPTION
// Returns the default stream context which is used whenever file operations (fopen(), file_get_contents(), etc...) are called without a context parameter. Options for the default context can optionally be specified with this function using the same syntax as stream_context_create().
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_get_default(?array $options = null): resource
// ===== CODE
$return_stream_context_get_default = stream_context_get_default(

$options // array options - options must be an associative array of associative arrays in the format $arr['wrapper']['option'] = $value, or null.

); // Return Values
// A stream context resource.
// 
// Changelog
// Version - Description
// 8.0.0   - options is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 Using stream_context_get_default()
// [php]
// $default_opts = array(
//   'http'=>array(
//     'method'=>"GET",
//     'header'=>"Accept-language: en\r\n" .
//               "Cookie: foo=bar",
//     'proxy'=>"tcp://10.54.1.39:8000"
//   )
// );
// 
// 
// $alternate_opts = array(
//   'http'=>array(
//     'method'=>"POST",
//     'header'=>"Content-type: application/x-www-form-urlencoded\r\n" .
//               "Content-length: " . strlen("baz=bomb"),
//     'content'=>"baz=bomb"
//   )
// );
// 
// $default = stream_context_get_default($default_opts);
// $alternate = stream_context_create($alternate_opts);
// 
// // Sends a regular GET request to proxy server at 10.54.1.39
// // For www.example.com using context options specified in $default_opts
//  //
// readfile('http://www.example.com');
// 
// // Sends a POST request directly to www.example.com
// // Using context options specified in $alternate_opts
//  //
// readfile('http://www.example.com', false, $alternate);
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-context-get-default.php
// ========== STREAM_CONTEXT_GET_DEFAULT - END

// SYNTAX:
// resource stream_context_get_default(array $options = null)

return $return_stream_context_get_default; // resource
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_DEFAULT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_OPTIONS
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve options for a stream/wrapper/context.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_get_options() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_context_get_options($stream_or_context)
{
$return_stream_context_get_options = null;

// ========== STREAM_CONTEXT_GET_OPTIONS - BEGIN
// ===== ABOUT
// Retrieve options for a stream/wrapper/context
// ===== DESCRIPTION
// Returns an array of options on the specified stream or context.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_get_options(resource $stream_or_context): array
// ===== CODE
$return_stream_context_get_options = stream_context_get_options(

$stream_or_context // resource stream_or_context - The stream or context to get options from

); // Return Values
// Returns an associative array with the options.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_context_get_options() example
// [php]
// $params = array("method" => "POST");
// 
// stream_context_set_default(array("http" => $params));
// 
// var_dump(stream_context_get_options(stream_context_get_default()));
// 
// [/php]
// The above example will output something similar to:
// [result]
// array(1) {
//   ["http"]=>
//   array(1) {
//     ["method"]=>
//     string(4) "POST"
//   }
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-context-get-options.php
// ========== STREAM_CONTEXT_GET_OPTIONS - END

// SYNTAX:
// array stream_context_get_options(resource $stream_or_context)

return $return_stream_context_get_options; // array
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_OPTIONS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_PARAMS
// ============================== OFFLINE
// ============================== ABOUT
// Retrieves parameters from a context.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_get_params() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_context_get_params($context)
{
$return_stream_context_get_params = null;

// ========== STREAM_CONTEXT_GET_PARAMS - BEGIN
// ===== ABOUT
// Retrieves parameters from a context
// ===== DESCRIPTION
// Retrieves parameter and options information from the stream or context.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_get_params(resource $context): array
// ===== CODE
$return_stream_context_get_params = stream_context_get_params(

$context // resource context - A stream resource or a context resource

); // Return Values
// Returns an associate array containing all context options and parameters.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_context_get_params() example
// Basic usage example
// [php]
// $ctx = stream_context_create();
// $params = array("notification" => "stream_notification_callback");
// stream_context_set_params($ctx, $params);
// 
// var_dump(stream_context_get_params($ctx));
// [/php]
// The above example will output something similar to:
// [result]
// array(2) {
//   ["notification"]=>
//   string(28) "stream_notification_callback"
//   ["options"]=>
//   array(0) {
//   }
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-context-get-params.php
// ========== STREAM_CONTEXT_GET_PARAMS - END

// SYNTAX:
// array stream_context_get_params(resource $context)

return $return_stream_context_get_params; // array
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_GET_PARAMS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_DEFAULT
// ============================== OFFLINE
// ============================== ABOUT
// Set the default stream context.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_set_default() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_context_set_default($options)
{
$return_stream_context_set_default = null;

// ========== STREAM_CONTEXT_SET_DEFAULT - BEGIN
// ===== ABOUT
// Set the default stream context
// ===== DESCRIPTION
// Set the default stream context which will be used whenever file operations (fopen(), file_get_contents(), etc...) are called without a context parameter. Uses the same syntax as stream_context_create().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_set_default(array $options): resource
// ===== CODE
$return_stream_context_set_default = stream_context_set_default(

$options // array options - The options to set for the default context.
// Note: options must be an associative array of associative arrays in the format $arr['wrapper']['option'] = $value.

); // Return Values
// Returns the default stream context.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_context_set_default() example
// [php]
// $default_opts = array(
//   'http'=>array(
//     'method'=>"GET",
//     'header'=>"Accept-language: en\r\n" .
//               "Cookie: foo=bar",
//     'proxy'=>"tcp://10.54.1.39:8000"
//   )
// );
// 
// $default = stream_context_set_default($default_opts);
// 
// // Sends a regular GET request to proxy server at 10.54.1.39
// // For www.example.com using context options specified in $default_opts
//  //
// readfile('http://www.example.com');
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-context-set-default.php
// ========== STREAM_CONTEXT_SET_DEFAULT - END

// SYNTAX:
// resource stream_context_set_default(array $options)

return $return_stream_context_set_default; // resource
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_DEFAULT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_OPTION
// ============================== PUBLIC
// ============================== ABOUT
// Sets an option for a stream/wrapper/context.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_set_option() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_context_set_option($stream_or_context, $wrapper, $option, $value)
{
$return_stream_context_set_option = false;

// ========== STREAM_CONTEXT_SET_OPTION - BEGIN
// ===== ABOUT
// Sets an option for a stream/wrapper/context
// ===== DESCRIPTION
// Sets an option on the specified context. value is set to option for wrapper
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_set_option(
//    resource $stream_or_context,
//    string $wrapper,
//    string $option,
//    mixed $value
// ): bool
// 
// stream_context_set_option(resource $stream_or_context, array $options): bool
// ===== CODE
$return_stream_context_set_option = stream_context_set_option(

$stream_or_context, // resource stream_or_context - The stream or context resource to apply the options to.

$wrapper, // string wrapper - The name of the wrapper (which may be different than the protocol). Refer to context options and parameters for a listing of stream options.

$option, // string option - The name of the option.

$value // mixed value - The value of the option.

// array options - The options to set for stream_or_context.
//  Note:
//  options must be an associative array of associative arrays in the format $arr['wrapper']['option'] = $value.
//  Refer to context options and parameters for a listing of stream options.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-context-set-option.php
// ========== STREAM_CONTEXT_SET_OPTION - END

// SYNTAX:
// bool stream_context_set_option(resource $stream_or_context, string $wrapper, string $option, mixed $value)

return $return_stream_context_set_option; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_OPTION
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_PARAMS
// ============================== PUBLIC
// ============================== ABOUT
// Set parameters for a stream/wrapper/context.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_context_set_params() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_context_set_params($context, $params)
{
$return_stream_context_set_params = false;

// ========== STREAM_CONTEXT_SET_PARAMS - BEGIN
// ===== ABOUT
// Set parameters for a stream/wrapper/context
// ===== DESCRIPTION
// Sets parameters on the specified context.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_context_set_params(resource $context, array $params): bool
// ===== CODE
$return_stream_context_set_params = stream_context_set_params(

$context, // resource context - The stream or context to apply the parameters too.

$params // array params - An associative array of parameters to be set in the following format: $params['paramname'] = "paramvalue";.
// Supported parameters
// Parameter    - Purpose
// notification - Name of user-defined callback function to be called whenever a stream triggers a notification. Only supported for http:// and ftp:// stream wrappers.
// options      - Array of options as in context options and parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-context-set-params.php
// ========== STREAM_CONTEXT_SET_PARAMS - END

// SYNTAX:
// bool stream_context_set_params(resource $context, array $params)

return $return_stream_context_set_params; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_CONTEXT_SET_PARAMS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_COPY_TO_STREAM
// ============================== OFFLINE
// ============================== ABOUT
// Copies data from one stream to another.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_copy_to_stream() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_copy_to_stream($from, $to, $length = null, $offset = 0)
{
$return_stream_copy_to_stream = 0;

// ========== STREAM_COPY_TO_STREAM - BEGIN
// ===== ABOUT
// Copies data from one stream to another
// ===== DESCRIPTION
// Makes a copy of up to length bytes of data from the current position (or from the offset position, if specified) in from to to. If length is null, all remaining content in from will be copied.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_copy_to_stream(
//    resource $from,
//    resource $to,
//    ?int $length = null,
//    int $offset = 0
// ): int|false
// ===== CODE
$return_stream_copy_to_stream = stream_copy_to_stream(

$from, // resource from - The source stream

$to, // resource to - The destination stream

$length, // int length - Maximum bytes to copy. By default all bytes left are copied.

$offset // int offset - The offset where to start to copy data

); // Return Values
// Returns the total count of bytes copied, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - length is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 A stream_copy_to_stream() example
// [php]
// $src = fopen('http://www.example.com', 'r');
// $dest1 = fopen('first1k.txt', 'w');
// $dest2 = fopen('remainder.txt', 'w');
// 
// echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copied to first1k.txt\n";
// echo stream_copy_to_stream($src, $dest2) . " bytes copied to remainder.txt\n";
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-copy-to-stream.php
// ========== STREAM_COPY_TO_STREAM - END

// SYNTAX:
// int|false stream_copy_to_stream(resource $from, resource $to, int $length = null, int $offset = 0)

return $return_stream_copy_to_stream; // int|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_COPY_TO_STREAM
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_FILTER_APPEND
// ============================== PUBLIC
// ============================== ABOUT
// Attach a filter to a stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_filter_append() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_filter_append($stream, $filtername, $read_write, $params)
{
$return_stream_filter_append = null;

// ========== STREAM_FILTER_APPEND - BEGIN
// ===== ABOUT
// Attach a filter to a stream
// ===== DESCRIPTION
// Adds filtername to the list of filters attached to stream.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_filter_append(
//    resource $stream,
//    string $filtername,
//    int $read_write = ?,
//    mixed $params = ?
// ): resource
// ===== CODE
$return_stream_filter_append = stream_filter_append(

$stream, // resource stream - The target stream.

$filtername, // string filtername - The filter name.

$read_write, // int read_write - By default, stream_filter_append() will attach the filter to the read filter chain if the file was opened for reading (i.e. File Mode: r, and/or +). The filter will also be attached to the write filter chain if the file was opened for writing (i.e. File Mode: w, a, and/or +). STREAM_FILTER_READ, STREAM_FILTER_WRITE, and/or STREAM_FILTER_ALL can also be passed to the read_write parameter to override this behavior.

$params // mixed params - This filter will be added with the specified params to the end of the list and will therefore be called last during stream operations. To add a filter to the beginning of the list, use stream_filter_prepend().

); // Return Values
// Returns a resource on success or false on failure. The resource can be used to refer to this filter instance during a call to stream_filter_remove().
// false is returned if stream is not a resource or if filtername cannot be located.
// 
// [examples]
// Examples
// [example]
// Example #1 Controlling where filters are applied
// [php]
// // Open a test file for reading and writing
// $fp = fopen('test.txt', 'w+');
// 
// // Apply the ROT13 filter to the
// // write filter chain, but not the
// // read filter chain
// stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);
// 
// // Write a simple string to the file
// // it will be ROT13 transformed on the
// // way out
// fwrite($fp, "This is a test\n");
// 
// // Back up to the beginning of the file
// rewind($fp);
// 
// // Read the contents of the file back out.
// // Had the filter been applied to the
// // read filter chain as well, we would see
// // the text ROT13ed back to its original state
// fpassthru($fp);
// 
// fclose($fp);
// 
// //  Expected Output
// // ---------------
// // 
// // Guvf vf n grfg
// // 
// // 
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note: When using custom (user) filters
//  stream_filter_register() must be called first in order to register the desired user filter to filtername.
// Note: Stream data is read from resources (both local and remote) in chunks, with any unconsumed data kept in internal buffers. When a new filter is appended to a stream, data in the internal buffers is processed through the new filter at that time. This differs from the behavior of stream_filter_prepend().
// Note: When a filter is added for read and write, two instances of the filter are created. stream_filter_append() must be called twice with STREAM_FILTER_READ and STREAM_FILTER_WRITE to get both filter resources.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-filter-append.php
// ========== STREAM_FILTER_APPEND - END

// SYNTAX:
// resource stream_filter_append(resource $stream, string $filtername, int $read_write, mixed $params)

return $return_stream_filter_append; // resource
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_FILTER_APPEND
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_FILTER_PREPEND
// ============================== PUBLIC
// ============================== ABOUT
// Attach a filter to a stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_filter_prepend() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_filter_prepend($stream, $filtername, $read_write, $params)
{
$return_stream_filter_prepend = null;

// ========== STREAM_FILTER_PREPEND - BEGIN
// ===== ABOUT
// Attach a filter to a stream
// ===== DESCRIPTION
// Adds filtername to the list of filters attached to stream.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_filter_prepend(
//    resource $stream,
//    string $filtername,
//    int $read_write = ?,
//    mixed $params = ?
// ): resource
// ===== CODE
$return_stream_filter_prepend = stream_filter_prepend(

$stream, // resource stream - The target stream.

$filtername, // string filtername - The filter name.

$read_write, // int read_write - By default, stream_filter_prepend() will attach the filter to the read filter chain if the file was opened for reading (i.e. File Mode: r, and/or +). The filter will also be attached to the write filter chain if the file was opened for writing (i.e. File Mode: w, a, and/or +). STREAM_FILTER_READ, STREAM_FILTER_WRITE, and/or STREAM_FILTER_ALL can also be passed to the read_write parameter to override this behavior. See stream_filter_append() for an example of using this parameter.

$params // mixed params - This filter will be added with the specified params to the beginning of the list and will therefore be called first during stream operations. To add a filter to the end of the list, use stream_filter_append().

); // Return Values
// Returns a resource on success or false on failure. The resource can be used to refer to this filter instance during a call to stream_filter_remove().
// false is returned if stream is not a resource or if filtername cannot be located.
// 
// Notes
//  Note: When using custom (user) filters
//  stream_filter_register() must be called first in order to register the desired user filter to filtername.
// Note: Stream data is read from resources (both local and remote) in chunks, with any unconsumed data kept in internal buffers. When a new filter is prepended to a stream, data in the internal buffers, which has already been processed through other filters will not be reprocessed through the new filter at that time. This differs from the behavior of stream_filter_append().
// Note: When a filter is added for read and write, two instances of the filter are created. stream_filter_prepend() must be called twice with STREAM_FILTER_READ and STREAM_FILTER_WRITE to get both filter resources.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-filter-prepend.php
// ========== STREAM_FILTER_PREPEND - END

// SYNTAX:
// resource stream_filter_prepend(resource $stream, string $filtername, int $read_write, mixed $params)

return $return_stream_filter_prepend; // resource
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_FILTER_PREPEND
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_FILTER_REGISTER
// ============================== OFFLINE
// ============================== ABOUT
// Register a user defined stream filter.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_filter_register() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_filter_register($filter_name, $class)
{
$return_stream_filter_register = false;

// ========== STREAM_FILTER_REGISTER - BEGIN
// ===== ABOUT
// Register a user defined stream filter
// ===== DESCRIPTION
// stream_filter_register() allows you to implement your own filter on any registered stream used with all the other filesystem functions (such as fopen(), fread() etc.).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_filter_register(string $filter_name, string $class): bool
// ===== CODE
$return_stream_filter_register = stream_filter_register(

$filter_name, // string filter_name - The filter name to be registered.

$class // string class - To implement a filter, you need to define a class as an extension of php_user_filter with a number of member functions. When performing read/write operations on the stream to which your filter is attached, PHP will pass the data through your filter (and any other filters attached to that stream) so that the data may be modified as desired. You must implement the methods exactly as described in php_user_filter - doing otherwise will lead to undefined behaviour.

); // Return Values
// Returns true on success or false on failure.
// stream_filter_register() will return false if the filter_name is already defined.
// 
// [examples]
// Examples
// [example]
// Example #1 Filter for capitalizing characters on foo-bar.txt stream
// The example below implements a filter named strtoupper on the foo-bar.txt stream which will capitalize all letter characters written to/read from that stream.
// [php]
// 
// // Define our filter class
// class strtoupper_filter extends php_user_filter {
//   function filter($in, $out, &$consumed, $closing)
//   {
//     while ($bucket = stream_bucket_make_writeable($in)) {
//       $bucket->data = strtoupper($bucket->data);
//       $consumed += $bucket->datalen;
//       stream_bucket_append($out, $bucket);
//     }
//     return PSFS_PASS_ON;
//   }
// }
// 
// // Register our filter with PHP
// stream_filter_register("strtoupper", "strtoupper_filter")
//     or die("Failed to register filter");
// 
// $fp = fopen("foo-bar.txt", "w");
// 
// // Attach the registered filter to the stream just opened
// stream_filter_append($fp, "strtoupper");
// 
// fwrite($fp, "Line1\n");
// fwrite($fp, "Word - 2\n");
// fwrite($fp, "Easy As 123\n");
// 
// fclose($fp);
// 
// // Read the contents back out
//  //
// readfile("foo-bar.txt");
// 
// [/php]
// The above example will output:
// [result]
// LINE1
// WORD - 2
// EASY AS 123
// [/result]
// [/example]
// [example]
// Example #2 Registering a generic filter class to match multiple filter names.
// [php]
// 
// // Define our filter class
class string_filter extends php_user_filter {
//   var $mode;
// 
//   function filter($in, $out, &$consumed, $closing)
//   {
//     while ($bucket = stream_bucket_make_writeable($in)) {
//       if ($this->mode == 1) {
//         $bucket->data = strtoupper($bucket->data);
//       } elseif ($this->mode == 0) {
//         $bucket->data = strtolower($bucket->data);
//       }
// 
//       $consumed += $bucket->datalen;
//       stream_bucket_append($out, $bucket);
//     }
//     return PSFS_PASS_ON;
//   }
// 
//   function onCreate()
//   {
//     if ($this->filtername == 'str.toupper') {
//       $this->mode = 1;
//     } elseif ($this->filtername == 'str.tolower') {
//       $this->mode = 0;
//     } else {
//       // Some other str.* filter was asked for,
//       // report failure so that PHP will keep looking
//       return false;
//     }
// 
//     return true;
//   }
// }
// 
// // Register our filter with PHP
// stream_filter_register("str.*", "string_filter")
//     or die("Failed to register filter");
// 
// $fp = fopen("foo-bar.txt", "w");
// 
// // Attach the registered filter to the stream just opened
// // We could alternately bind to str.tolower here
// stream_filter_append($fp, "str.toupper");
// 
// fwrite($fp, "Line1\n");
// fwrite($fp, "Word - 2\n");
// fwrite($fp, "Easy As 123\n");
// 
// fclose($fp);
// 
// // Read the contents back out
//  //
// readfile("foo-bar.txt");
// [/php]
// The above example will output:
// [result]
// LINE1
// WORD - 2
// EASY AS 123
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-filter-register.php
// ========== STREAM_FILTER_REGISTER - END

// SYNTAX:
// bool stream_filter_register(string $filter_name, string $class)

return $return_stream_filter_register; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_FILTER_REGISTER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_FILTER_REMOVE
// ============================== OFFLINE
// ============================== ABOUT
// Remove a filter from a stream.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_filter_remove() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_filter_remove($stream_filter)
{
$return_stream_filter_remove = false;

// ========== STREAM_FILTER_REMOVE - BEGIN
// ===== ABOUT
// Remove a filter from a stream
// ===== DESCRIPTION
// Removes a stream filter previously added to a stream with stream_filter_prepend() or stream_filter_append(). Any data remaining in the filter's internal buffer will be flushed through to the next filter before removing it.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_filter_remove(resource $stream_filter): bool
// ===== CODE
$return_stream_filter_remove = stream_filter_remove(

$stream_filter // resource stream_filter - The stream filter to be removed.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 Dynamically refiltering a stream
// [php]
// // Open a test file for reading and writing
// $fp = fopen("test.txt", "rw");
// 
// $rot13_filter = stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);
// fwrite($fp, "This is ");
// stream_filter_remove($rot13_filter);
// fwrite($fp, "a test\n");
// 
// rewind($fp);
// fpassthru($fp);
// fclose($fp);
// 
// [/php]
// The above example will output:
// [result]
// Guvf vf a test
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-filter-remove.php
// ========== STREAM_FILTER_REMOVE - END

// SYNTAX:
// bool stream_filter_remove(resource $stream_filter)

return $return_stream_filter_remove; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_FILTER_REMOVE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_GET_CONTENTS
// ============================== OFFLINE
// ============================== ABOUT
// Reads remainder of a stream into a string.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_get_contents() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_get_contents($stream, $length = null, $offset = -1)
{
$return_stream_get_contents = false;

// ========== STREAM_GET_CONTENTS - BEGIN
// ===== ABOUT
// Reads remainder of a stream into a string
// ===== DESCRIPTION
// Identical to file_get_contents(), except that stream_get_contents() operates on an already open stream resource and returns the remaining contents in a string, up to length bytes and starting at the specified offset.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_get_contents(resource $stream, ?int $length = null, int $offset = -1): string|false
// ===== CODE
$return_stream_get_contents = stream_get_contents(

$stream, // resource stream (resource) - A stream resource (e.g. returned from fopen())

$length, // int length (int) - The maximum bytes to read. Defaults to null (read all the remaining buffer).

$offset // int offset (int) - Seek to the specified offset before reading. If this number is negative, no seeking will occur and reading will start from the current position.

); // Return Values
// Returns a string or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - length is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_get_contents() example
// [php]
// 
// if ($stream = fopen('http://www.example.com', 'r')) {
//     // print all the page starting at the offset 10
//     echo stream_get_contents($stream, -1, 10);
// 
//     fclose($stream);
// }
// 
// 
// if ($stream = fopen('http://www.example.net', 'r')) {
//     // print the first 5 bytes
//     echo stream_get_contents($stream, 5);
// 
//     fclose($stream);
// }
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is binary-safe.
// Note: When specifying a length value other than null, this function will immediately allocate an internal buffer of that size even if the actual contents are significantly shorter.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-19)
// URL: https://www.php.net/manual/en/function.stream-get-contents.php
// ========== STREAM_GET_CONTENTS - END

// SYNTAX:
// string|false stream_get_contents(resource $stream, int $length = null, int $offset = -1)

return $return_stream_get_contents; // string|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_GET_CONTENTS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_GET_FILTERS
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve list of registered filters.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_get_filters() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_get_filters()
{
$return_stream_get_filters = null;

// ========== STREAM_GET_FILTERS - BEGIN
// ===== ABOUT
// Retrieve list of registered filters
// ===== DESCRIPTION
// Retrieve the list of registered filters on the running system.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_get_filters(): array
// ===== CODE
$return_stream_get_filters = stream_get_filters(

// This function has no parameters.

); // Return Values
// Returns an indexed array containing the name of all stream filters available.
// 
// [examples]
// Examples
// [example]
// Example #1 Using stream_get_filters()
// [php]
// $streamlist = stream_get_filters();
// print_r($streamlist);
// [/php]
// The above example will output something similar to:
// [result]
// Array (
//   [0] => string.rot13
//   [1] => string.toupper
//   [2] => string.tolower
//   [3] => string.base64
//   [4] => string.quoted-printable
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-get-filters.php
// ========== STREAM_GET_FILTERS - END

// SYNTAX:
// array stream_get_filters()

return $return_stream_get_filters; // array
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_GET_FILTERS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_GET_LINE
// ============================== OFFLINE
// ============================== ABOUT
// Gets line from stream resource up to a given delimiter.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_get_line() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_get_line($stream, $length, $ending = "")
{
$return_stream_get_line = false;

// ========== STREAM_GET_LINE - BEGIN
// ===== ABOUT
// Gets line from stream resource up to a given delimiter
// ===== DESCRIPTION
// Gets a line from the given handle.
// Reading ends when length bytes have been read, when the non-empty string specified by ending is found (which is not included in the return value), or on EOF (whichever comes first).
// This function is nearly identical to fgets() except in that it allows end of line delimiters other than the standard \n, \r, and \r\n, and does not return the delimiter itself.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_get_line(resource $stream, int $length, string $ending = ""): string|false
// ===== CODE
$return_stream_get_line = stream_get_line(

$stream, // resource stream - A valid file handle.

$length, // int length - The maximum number of bytes to read from the handle. Negative values are not supported. Zero (0) means the default socket chunk size, i.e. 8192 bytes.

$ending // string ending - An optional string delimiter.

); // Return Values
// Returns a string of up to length bytes read from the file pointed to by stream, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-get-line.php
// ========== STREAM_GET_LINE - END

// SYNTAX:
// string|false stream_get_line(resource $stream, int $length, string $ending = "")

return $return_stream_get_line; // string|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_GET_LINE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_GET_META_DATA
// ============================== PUBLIC
// ============================== ABOUT
// Retrieves header/meta data from streams/file pointers.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_get_meta_data() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_get_meta_data($stream)
{
$return_stream_get_meta_data = null;

// ========== STREAM_GET_META_DATA - BEGIN
// ===== ABOUT
// Retrieves header/meta data from streams/file pointers
// ===== DESCRIPTION
// Returns information about an existing stream.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_get_meta_data(resource $stream): array
// ===== CODE
$return_stream_get_meta_data = stream_get_meta_data(

$stream // resource stream - The stream can be any stream created by fopen(), fsockopen() pfsockopen() and stream_socket_client().

); // Return Values
// The result array contains the following items:
// * timed_out (bool)      - true if the stream timed out while waiting for data on the last call to fread() or fgets().
// * blocked (bool)        - true if the stream is in blocking IO mode. See stream_set_blocking().
// * eof (bool)            - true if the stream has reached end-of-file. Note that for socket streams this member can be true even when unread_bytes is non-zero. To determine if there is more data to be read, use feof() instead of reading this item.
// * unread_bytes (int)    - the number of bytes currently contained in the PHP's own internal buffer.
// Note: You shouldn't use this value in a script.
// * stream_type (string)  - a label describing the underlying implementation of the stream.
// * wrapper_type (string) - a label describing the protocol wrapper implementation layered over the stream. See Supported Protocols and Wrappers for more information about wrappers.
// * wrapper_data (mixed)  - wrapper specific data attached to this stream. See Supported Protocols and Wrappers for more information about wrappers and their wrapper data.
// * mode (string)         - the type of access required for this stream (see Table 1 of the fopen() reference)
// * seekable (bool)       - whether the current stream can be seeked.
// * uri (string)          - the URI/filename associated with this stream.
// * crypto (array)        - the TLS connection metadata for this stream. (Note: Only provided when the resource's stream uses TLS.)
// 
// [examples]
// Examples
// [example]
// Example #1 stream_get_meta_data() example using fopen() with http
// [php]
// $url = 'http://www.example.com/';
// 
// if (!$fp = fopen($url, 'r')) {
//     trigger_error("Unable to open URL ($url)", E_USER_ERROR);
// }
// 
// $meta = stream_get_meta_data($fp);
// 
// var_dump($meta);
// 
// fclose($fp);
// [/php]
// The above example will output something similar to:
// [result]
// array(10) {
//   'timed_out' =>
//   bool(false)
//   'blocked' =>
//   bool(true)
//   'eof' =>
//   bool(false)
//   'wrapper_data' =>
//   array(13) {
//     [0] =>
//     string(15) "HTTP/1.1 200 OK"
//     [1] =>
//     string(11) "Age: 244629"
//     [2] =>
//     string(29) "Cache-Control: max-age=604800"
//     [3] =>
//     string(38) "Content-Type: text/html; charset=UTF-8"
//     [4] =>
//     string(35) "Date: Sat, 20 Nov 2021 18:17:57 GMT"
//     [5] =>
//     string(24) "Etag: "3147526947+ident""
//     [6] =>
//     string(38) "Expires: Sat, 27 Nov 2021 18:17:57 GMT"
//     [7] =>
//     string(44) "Last-Modified: Thu, 17 Oct 2019 07:18:26 GMT"
//     [8] =>
//     string(22) "Server: ECS (chb/0286)"
//     [9] =>
//     string(21) "Vary: Accept-Encoding"
//     [10] =>
//     string(12) "X-Cache: HIT"
//     [11] =>
//     string(20) "Content-Length: 1256"
//     [12] =>
//     string(17) "Connection: close"
//   }
//   'wrapper_type' =>
//   string(4) "http"
//   'stream_type' =>
//   string(14) "tcp_socket/ssl"
//   'mode' =>
//   string(1) "r"
//   'unread_bytes' =>
//   int(1256)
//   'seekable' =>
//   bool(false)
//   'uri' =>
//   string(23) "http://www.example.com/"
// }
// [/result]
// [/example]
// [example]
// Example #2 stream_get_meta_data() example using stream_socket_client() with https
// [php]
// $streamContext = stream_context_create(
//     [
//         'ssl' => [
//             'capture_peer_cert' => true,
//             'capture_peer_cert_chain' => true,
//             'disable_compression' => true,
//         ],
//     ]
// );
// 
// $client = stream_socket_client(
//     'ssl://www.example.com:443',
//     $errorNumber,
//     $errorDescription,
//     40,
//     STREAM_CLIENT_CONNECT,
//     $streamContext
// );
// 
// 
// $meta = stream_get_meta_data($client);
// 
// var_dump($meta);
// [/php]
// The above example will output something similar to:
// [result]
// array(8) {
//   'crypto' =>
//   array(4) {
//     'protocol' =>
//     string(7) "TLSv1.3"
//     'cipher_name' =>
//     string(22) "TLS_AES_256_GCM_SHA384"
//     'cipher_bits' =>
//     int(256)
//     'cipher_version' =>
//     string(7) "TLSv1.3"
//   }
//   'timed_out' =>
//   bool(false)
//   'blocked' =>
//   bool(true)
//   'eof' =>
//   bool(false)
//   'stream_type' =>
//   string(14) "tcp_socket/ssl"
//   'mode' =>
//   string(2) "r+"
//   'unread_bytes' =>
//   int(0)
//   'seekable' =>
//   bool(false)
// }
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function does NOT work on sockets created by the Socket extension.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-get-meta-data.php
// ========== STREAM_GET_META_DATA - END

// SYNTAX:
// array stream_get_meta_data(resource $stream)

return $return_stream_get_meta_data; // array
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_GET_META_DATA
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_GET_TRANSPORTS
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve list of registered socket transports.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_get_transports() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_get_transports()
{
$return_stream_get_transports = null;

// ========== STREAM_GET_TRANSPORTS - BEGIN
// ===== ABOUT
// Retrieve list of registered socket transports
// ===== DESCRIPTION
// Returns an indexed array containing the name of all socket transports available on the running system.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_get_transports(): array
// ===== CODE
$return_stream_get_transports = stream_get_transports(

// This function has no parameters.

); // Return Values
// Returns an indexed array of socket transports names.
// 
// [examples]
// Examples
// [example]
// Example #1 Using stream_get_transports()
// [php]
// $xportlist = stream_get_transports();
// print_r($xportlist);
// [/php]
// The above example will output something similar to:
// [result]
// Array (
//   [0] => tcp
//   [1] => udp
//   [2] => unix
//   [3] => udg
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-get-transports.php
// ========== STREAM_GET_TRANSPORTS - END

// SYNTAX:
// array stream_get_transports()

return $return_stream_get_transports; // array
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_GET_TRANSPORTS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_GET_WRAPPERS
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve list of registered streams.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_get_wrappers() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_get_wrappers()
{
$return_stream_get_wrappers = null;

// ========== STREAM_GET_WRAPPERS - BEGIN
// ===== ABOUT
// Retrieve list of registered streams
// ===== DESCRIPTION
// Retrieve list of registered streams available on the running system.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_get_wrappers(): array
// ===== CODE
$return_stream_get_wrappers = stream_get_wrappers(

// This function has no parameters.

); // Return Values
// Returns an indexed array containing the name of all stream wrappers available on the running system.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_get_wrappers() example
// [php]
// print_r(stream_get_wrappers());
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => php
//     [1] => file
//     [2] => http
//     [3] => ftp
//     [4] => compress.bzip2
//     [5] => compress.zlib
// )
// [/result]
// [/example]
// [example]
// Example #2 Checking for the existence of a stream wrapper
// [php]
// // check for the existence of the bzip2 stream wrapper
// if (in_array('compress.bzip2', stream_get_wrappers())) {
//     echo 'compress.bzip2:// support enabled.';
// } else {
//     echo 'compress.bzip2:// support not enabled.';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-get-wrappers.php
// ========== STREAM_GET_WRAPPERS - END

// SYNTAX:
// array stream_get_wrappers()

return $return_stream_get_wrappers; // array
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_GET_WRAPPERS
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_IS_LOCAL
// ============================== OFFLINE
// ============================== ABOUT
// Checks if a stream is a local stream.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_is_local() - PHP_5 >= PHP_5_2_4, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_is_local($stream)
{
$return_stream_is_local = false;

// ========== STREAM_IS_LOCAL - BEGIN
// ===== ABOUT
// Checks if a stream is a local stream
// ===== DESCRIPTION
// Checks if a stream, or a URL, is a local one or not.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_4, PHP_7, PHP_8
// ===== SYNTAX
// stream_is_local(resource|string $stream): bool
// ===== CODE
$return_stream_is_local = stream_is_local(

$stream // resource|string stream - The stream resource or URL to check.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_is_local() example
// Basic usage example.
// [php]
// var_dump(stream_is_local("http://example.com"));
// var_dump(stream_is_local("/etc"));
// [/php]
// The above example will output something similar to:
// [result]
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-is-local.php
// ========== STREAM_IS_LOCAL - END

// SYNTAX:
// bool stream_is_local(resource|string $stream)

return $return_stream_is_local; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_IS_LOCAL
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_ISATTY
// ============================== OFFLINE
// ============================== ABOUT
// Check if a stream is a TTY.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_isatty() - PHP_7 >= PHP_7_2_0, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_isatty($stream)
{
$return_stream_isatty = false;

// ========== STREAM_ISATTY - BEGIN
// ===== ABOUT
// Check if a stream is a TTY
// ===== DESCRIPTION
// Determines if stream stream refers to a valid terminal type device. This is a more portable version of posix_isatty(), since it works on Windows systems too.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_0, PHP_8
// ===== SYNTAX
// stream_isatty(resource $stream): bool
// ===== CODE
$return_stream_isatty = stream_isatty(

$stream // resource stream

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_isatty() example
// This command can be used to determine if a standard output / standard error stream is redirected to a file.
// [code]
// php -r "var_export(stream_isatty(STDERR));"
// [/code]
// The above example will output something similar to:
// [result]
// true
// [/result]
// [/example]
// [example]
// [code]
php -r "var_export(stream_isatty(STDERR));" 2>output.txt
// [/code]
// [result]
// false
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-isatty.php
// ========== STREAM_ISATTY - END

// SYNTAX:
// bool stream_isatty(resource $stream)

return $return_stream_isatty; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_ISATTY
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_NOTIFICATION_CALLBACK
// ============================== OFFLINE
// ============================== ABOUT
// A callback function for the notification context parameter.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_notification_callback() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max)
{

// ========== STREAM_NOTIFICATION_CALLBACK - BEGIN
// ===== ABOUT
// A callback function for the notification context parameter
// ===== DESCRIPTION
// A callable function, used by the notification context parameter, called during an event.
// Note: This is not a real function, only a prototype of how the function should be.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_notification_callback(
//     int $notification_code,
//     int $severity,
//     ?string $message,
//     int $message_code,
//     int $bytes_transferred,
//     int $bytes_max
// ): void
// ===== CODE
$return_stream_notification_callback = stream_notification_callback(

$notification_code, // int notification_code - One of the STREAM_NOTIFY_* notification constants.

$severity, // int severity - One of the STREAM_NOTIFY_SEVERITY_* notification constants.

$message, // string message - Passed if a descriptive message is available for the event.

$message_code, // int message_code - Passed if a descriptive message code is available for the event.
// The meaning of this value is dependent on the specific wrapper in use.

$bytes_transferred, // int bytes_transferred - If applicable, the bytes_transferred will be populated.

$bytes_max // int bytes_max - If applicable, the bytes_max will be populated.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_notification_callback() example
// [php]
// function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {
// 
//     switch($notification_code) {
//         case STREAM_NOTIFY_RESOLVE:
//         case STREAM_NOTIFY_AUTH_REQUIRED:
//         case STREAM_NOTIFY_COMPLETED:
//         case STREAM_NOTIFY_FAILURE:
//         case STREAM_NOTIFY_AUTH_RESULT:
//             var_dump($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max);
//             // Ignore
//             break;
// 
//         case STREAM_NOTIFY_REDIRECTED:
//             echo "Being redirected to: ", $message;
//             break;
// 
//         case STREAM_NOTIFY_CONNECT:
//             echo "Connected...";
//             break;
// 
//         case STREAM_NOTIFY_FILE_SIZE_IS:
//             echo "Got the filesize: ", $bytes_max;
//             break;
// 
//         case STREAM_NOTIFY_MIME_TYPE_IS:
//             echo "Found the mime-type: ", $message;
//             break;
// 
//         case STREAM_NOTIFY_PROGRESS:
//             echo "Made some progress, downloaded ", $bytes_transferred, " so far";
//             break;
//     }
//     echo "\n";
// }
// 
// $ctx = stream_context_create();
// stream_context_set_params($ctx, array("notification" => "stream_notification_callback"));
// 
// file_get_contents("http://php.net/contact", false, $ctx);
// [/php]
// The above example will output something similar to:
// [result]
// Connected...
// Found the mime-type: text/html; charset=utf-8
// Being redirected to: http://no.php.net/contact
// Connected...
// Got the filesize: 0
// Found the mime-type: text/html; charset=utf-8
// Being redirected to: http://no.php.net/contact.php
// Connected...
// Got the filesize: 4589
// Found the mime-type: text/html;charset=utf-8
// Made some progress, downloaded 0 so far
// Made some progress, downloaded 0 so far
// Made some progress, downloaded 0 so far
// Made some progress, downloaded 1440 so far
// Made some progress, downloaded 2880 so far
// Made some progress, downloaded 4320 so far
// Made some progress, downloaded 5760 so far
// Made some progress, downloaded 6381 so far
// Made some progress, downloaded 7002 so far
// [/result]
// [/example]
// [example]
// Example #2 Simple progressbar for commandline download client
// [php]
// function usage($argv) {
//     echo "Usage:\n";
//     printf("\tphp %s <http://example.com/file> <localfile>\n", $argv[0]);
//     exit(1);
// }
// 
// function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {
//     static $filesize = null;
// 
//     switch($notification_code) {
//     case STREAM_NOTIFY_RESOLVE:
//     case STREAM_NOTIFY_AUTH_REQUIRED:
//     case STREAM_NOTIFY_COMPLETED:
//     case STREAM_NOTIFY_FAILURE:
//     case STREAM_NOTIFY_AUTH_RESULT:
//         // Ignore
//         break;
// 
//     case STREAM_NOTIFY_REDIRECTED:
//         echo "Being redirected to: ", $message, "\n";
//         break;
// 
//     case STREAM_NOTIFY_CONNECT:
//         echo "Connected...\n";
//         break;
// 
//     case STREAM_NOTIFY_FILE_SIZE_IS:
//         $filesize = $bytes_max;
//         echo "Filesize: ", $filesize, "\n";
//         break;
// 
//     case STREAM_NOTIFY_MIME_TYPE_IS:
//         echo "Mime-type: ", $message, "\n";
//         break;
// 
//     case STREAM_NOTIFY_PROGRESS:
//         if ($bytes_transferred > 0) {
//             if (!isset($filesize)) {
//                 printf("\rUnknown filesize.. %2d kb done..", $bytes_transferred/1024);
//             } else {
//                 $length = (int)(($bytes_transferred/$filesize)*100);
//                 printf("\r[%-100s] %d%% (%2d/%2d kb)", str_repeat("=", $length). ">", $length, ($bytes_transferred/1024), $filesize/1024);
//             }
//         }
//         break;
//     }
// }
// 
// isset($argv[1], $argv[2]) or usage($argv);
// 
// $ctx = stream_context_create();
// stream_context_set_params($ctx, array("notification" => "stream_notification_callback"));
// 
// $fp = fopen($argv[1], "r", false, $ctx);
// if (is_resource($fp) && file_put_contents($argv[2], $fp)) {
//     echo "\nDone!\n";
//     exit(0);
// }
// 
// $err = error_get_last();
// echo "\nErrrrrorr..\n", $err["message"], "\n";
// exit(1);
// [/php]
// Executing the example above with: php -n fetch.php http://no2.php.net/get/php-5-LATEST.tar.bz2/from/this/mirror php-latest.tar.bz2 will output something similar too:
// [result]
// Connected...
// Mime-type: text/html; charset=utf-8
// Being redirected to: http://no2.php.net/distributions/php-5.2.5.tar.bz2
// Connected...
// Filesize: 7773024
// Mime-type: application/octet-stream
// [========================================>                                                           ] 40% (3076/7590 kb)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-notification-callback.php
// ========== STREAM_NOTIFICATION_CALLBACK - END

// SYNTAX:
// void stream_notification_callback(int $notification_code, int $severity, string $message, int $message_code, int $bytes_transferred, int $bytes_max)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_NOTIFICATION_CALLBACK
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_REGISTER_WRAPPER
// ============================== PUBLIC
// ============================== ABOUT
// Register a URL wrapper implemented as a PHP class.
// 
// stream_register_wrapper - Alias of stream_wrapper_register().
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_register_wrapper() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_register_wrapper($protocol, $class, $flags = 0)
{
$return_stream_register_wrapper = false;

// ========== STREAM_REGISTER_WRAPPER - BEGIN
// ===== ABOUT
// stream_register_wrapper - Alias of stream_wrapper_register()
// ===== DESCRIPTION
// This function is an alias of: stream_wrapper_register().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_stream_register_wrapper = stream_register_wrapper(

$protocol, // string protocol

$class, // string class

$flags // int flags

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-register-wrapper.php
// ========== STREAM_REGISTER_WRAPPER - END

// ========== STREAM_WRAPPER_REGISTER - BEGIN
// ===== ABOUT
// Register a URL wrapper implemented as a PHP class
// ===== DESCRIPTION
// Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as fopen(), fread() etc.).
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_wrapper_register(string $protocol, string $class, int $flags = 0): bool
// ===== CODE
// $return_stream_wrapper_register = stream_wrapper_register(

// $protocol, // string protocol - The wrapper name to be registered. Valid protocol names must contain alphanumerics, dots (.), plusses (+), or hyphens (-) only.

// $class, // string class - The classname which implements the protocol.

// $flags // int flags - Should be set to STREAM_IS_URL if protocol is a URL protocol. Default is 0, local stream.

// ); // Return Values
// Returns true on success or false on failure.
// stream_wrapper_register() will return false if the protocol already has a handler.
// 
// [examples]
// Examples
// [example]
// Example #1 How to register a stream wrapper
// [php]
// $existed = in_array("var", stream_get_wrappers());
// if ($existed) {
//     stream_wrapper_unregister("var");
// }
// stream_wrapper_register("var", "VariableStream");
// $myvar = "";
// 
// $fp = fopen("var://myvar", "r+");
// 
// fwrite($fp, "line1\n");
// fwrite($fp, "line2\n");
// fwrite($fp, "line3\n");
// 
// rewind($fp);
// while (!feof($fp)) {
//     echo fgets($fp);
// }
// fclose($fp);
// var_dump($myvar);
// 
// if ($existed) {
//     stream_wrapper_restore("var");
// }
// 
// [/php]
// The above example will output:
// [result]
// line1
// line2
// line3
// string(18) "line1
// line2
// line3
// "
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-wrapper-register.php
// ========== STREAM_WRAPPER_REGISTER - END

// SYNTAX:
// bool stream_register_wrapper(string $protocol, string $class, int $flags = 0)

return $return_stream_register_wrapper; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_REGISTER_WRAPPER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_RESOLVE_INCLUDE_PATH
// ============================== OFFLINE
// ============================== ABOUT
// Resolve filename against the include path.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_resolve_include_path() - PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_resolve_include_path($filename)
{
$return_stream_resolve_include_path = false;

// ========== STREAM_RESOLVE_INCLUDE_PATH - BEGIN
// ===== ABOUT
// Resolve filename against the include path
// ===== DESCRIPTION
// Resolve filename against the include path according to the same rules as fopen()/include.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_2, PHP_7, PHP_8
// ===== SYNTAX
// stream_resolve_include_path(string $filename): string|false
// ===== CODE
$return_stream_resolve_include_path = stream_resolve_include_path(

$filename // string filename - The filename to resolve.

); // Return Values
// Returns a string containing the resolved absolute filename, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_resolve_include_path() example
// Basic usage example.
// [php]
// var_dump(stream_resolve_include_path("test.php"));
// [/php]
// The above example will output something similar to:
// [result]
// string(22) "/var/www/html/test.php"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-resolve-include-path.php
// ========== STREAM_RESOLVE_INCLUDE_PATH - END

// SYNTAX:
// string|false stream_resolve_include_path(string $filename)

return $return_stream_resolve_include_path; // string|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_RESOLVE_INCLUDE_PATH
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SELECT
// ============================== PUBLIC
// ============================== ABOUT
// Runs the equivalent of the select() system call on the given arrays of streams with a timeout specified by seconds and microseconds.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_select() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_select(& $read, & $write, & $except, $seconds, $microseconds = null)
{
$return_stream_select = false;

// ========== STREAM_SELECT - BEGIN
// ===== ABOUT
// Runs the equivalent of the select() system call on the given arrays of streams with a timeout specified by seconds and microsecondss
// ===== DESCRIPTION
// The stream_select() function accepts arrays of streams and waits for them to change status. Its operation is equivalent to that of the socket_select() function except in that it acts on streams.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_select(
//     ?array &$read,
//     ?array &$write,
//     ?array &$except,
//     ?int $seconds,
//     ?int $microseconds = null
// ): int|false
// ===== CODE
$return_stream_select = stream_select(

$read, // array& read - The streams listed in the read array will be watched to see if characters become available for reading (more precisely, to see if a read will not block - in particular, a stream resource is also ready on end-of-file, in which case an fread() will return a zero length string).

$write, // array& write - The streams listed in the write array will be watched to see if a write will not block.

$except, // array& except - The streams listed in the except array will be watched for high priority exceptional ("out-of-band") data arriving.
// Note: When stream_select() returns, the arrays read, write and except are modified to indicate which stream resource(s) actually changed status. The original keys of the arrays are preserved.

$seconds, // int seconds - The seconds and microseconds together form the timeout parameter, seconds specifies the number of seconds while microseconds the number of microseconds. The timeout is an upper bound on the amount of time that stream_select() will wait before it returns. If seconds and microseconds are both set to 0, stream_select() will not wait for data - instead it will return immediately, indicating the current status of the streams.
// If seconds is null stream_select() can block indefinitely, returning only when an event on one of the watched streams occurs (or if a signal interrupts the system call).
//  Warning: Using a timeout value of 0 allows you to instantaneously poll the status of the streams, however, it is NOT a good idea to use a 0 timeout value in a loop as it will cause your script to consume too much CPU time.
//  It is much better to specify a timeout value of a few seconds, although if you need to be checking and running other code concurrently, using a timeout value of at least 200000 microseconds will help reduce the CPU usage of your script.
//  Remember that the timeout value is the maximum time that will elapse; stream_select() will return as soon as the requested streams are ready for use.

$microseconds // int microseconds - See seconds description.

); // Return Values
// On success stream_select() returns the number of stream resources contained in the modified arrays, which may be zero if the timeout expires before anything interesting happens. On error false is returned and a warning raised (this can happen if the system call is interrupted by an incoming signal).
// 
// Changelog
// Version - Description
// 8.1.0   - microseconds is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_select() Example
// This example checks to see if data has arrived for reading on either $stream1 or $stream2. Since the timeout value is 0 it will return immediately:
// [php]
// // Prepare the read array
// $read   = array($stream1, $stream2);
// $write  = NULL;
// $except = NULL;
// if (false === ($num_changed_streams = stream_select($read, $write, $except, 0))) {
//     // Error handling
// } elseif ($num_changed_streams > 0) {
//     // At least on one of the streams something interesting happened
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  Due to a limitation in the current Zend Engine it is not possible to pass a constant modifier like null directly as a parameter to a function which expects this parameter to be passed by reference. Instead use a temporary variable or an expression with the leftmost member being a temporary variable:
//  [php]
//  $e = NULL;
//  stream_select($r, $w, $e, 0);
//  [/php]
//  Note:
//  Be sure to use the === operator when checking for an error. Since the stream_select() may return 0 the comparison with == would evaluate to true:
//  [php]
//  $e = NULL;
//  if (false === stream_select($r, $w, $e, 0)) {
//      echo "stream_select() failed\n";
//  }
//  [/php]
// Note: If you read/write to a stream returned in the arrays be aware that they do not necessarily read/write the full amount of data you have requested. Be prepared to even only be able to read/write a single byte.
// Note: Some streams (like zlib) cannot be selected by this function.
//  Note: Windows compatibility
//  Use of stream_select() on file descriptors returned by proc_open() will fail and return false under Windows.
//  STDIN from a console changes status as soon as any input events are available, but reading from the stream may still block.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-select.php
// ========== STREAM_SELECT - END

// SYNTAX:
// int|false stream_select(array& $read, array& $write, array& $except, int $seconds, int $microseconds = null)

return $return_stream_select; // int|false
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SELECT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SET_BLOCKING
// ============================== PUBLIC
// ============================== ABOUT
// Set blocking/non-blocking mode on a stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_set_blocking() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_set_blocking($stream, $enable)
{
$return_stream_set_blocking = false;

// ========== STREAM_SET_BLOCKING - BEGIN
// ===== ABOUT
// Set blocking/non-blocking mode on a stream
// ===== DESCRIPTION
// Sets blocking or non-blocking mode on a stream.
// This function works for any stream that supports non-blocking mode (currently, regular files and socket streams).
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_set_blocking(resource $stream, bool $enable): bool
// ===== CODE
$return_stream_set_blocking = stream_set_blocking(

$stream, // resource stream - The stream.

$enable // bool enable - If enable is false, the given stream will be switched to non-blocking mode, and if true, it will be switched to blocking mode. This affects calls like fgets() and fread() that read from the stream. In non-blocking mode an fgets() call will always return right away while in blocking mode it will wait for data to become available on the stream.

); // Return Values
// Returns true on success or false on failure.
// 
// Notes
// Note: On Windows, this has no affect on local files. Non-blocking IO for local files is not supported on Windows.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-05)
// URL: https://www.php.net/manual/en/function.stream-set-blocking.php
// ========== STREAM_SET_BLOCKING - END

// SYNTAX:
// bool stream_set_blocking(resource $stream, bool $enable)

return $return_stream_set_blocking; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SET_BLOCKING
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SET_CHUNK_SIZE
// ============================== OFFLINE
// ============================== ABOUT
// Set the stream chunk size.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_set_chunk_size() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_set_chunk_size($stream, $size)
{
$return_stream_set_chunk_size = 0;

// ========== STREAM_SET_CHUNK_SIZE - BEGIN
// ===== ABOUT
// Set the stream chunk size
// ===== DESCRIPTION
// Set the stream chunk size.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_set_chunk_size(resource $stream, int $size): int
// ===== CODE
$return_stream_set_chunk_size = stream_set_chunk_size(

$stream, // resource stream - The target stream.

$size // int size - The desired new chunk size.

); // Return Values
// Returns the previous chunk size on success.
// 
// Errors/Exceptions
// A ValueError is thrown if size is less than 1 or greater than PHP_INT_MAX.
// 
// Changelog
// Version - Description
// 8.0.0   - A ValueError is now thrown if size is less than 1 or greater than PHP_INT_MAX. Previously, an E_WARNING level error was emitted and false was returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-set-chunk-size.php
// ========== STREAM_SET_CHUNK_SIZE - END

// SYNTAX:
// int stream_set_chunk_size(resource $stream, int $size)

return $return_stream_set_chunk_size; // int
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SET_CHUNK_SIZE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SET_READ_BUFFER
// ============================== OFFLINE
// ============================== ABOUT
// Set read file buffering on the given stream.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_set_read_buffer() - PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_set_read_buffer($stream, $size)
{
$return_stream_set_read_buffer = 0;

// ========== STREAM_SET_READ_BUFFER - BEGIN
// ===== ABOUT
// Set read file buffering on the given stream
// ===== DESCRIPTION
// Sets the read buffer. It's the equivalent of stream_set_write_buffer(), but for read operations.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_3, PHP_7, PHP_8
// ===== SYNTAX
// stream_set_read_buffer(resource $stream, int $size): int
// ===== CODE
$return_stream_set_read_buffer = stream_set_read_buffer(

$stream, // resource stream - The file pointer.

$size // int size - The number of bytes to buffer. If size is 0 then read operations are unbuffered. This ensures that all reads with fread() are completed before other processes are allowed to read from that input stream.

); // Return Values
// Returns 0 on success, or another value if the request cannot be honored.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-set-read-buffer.php
// ========== STREAM_SET_READ_BUFFER - END

// SYNTAX:
// int stream_set_read_buffer(resource $stream, int $size)

return $return_stream_set_read_buffer; // int
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SET_READ_BUFFER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SET_TIMEOUT
// ============================== PUBLIC
// ============================== ABOUT
// Set timeout period on a stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_set_timeout() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_set_timeout($stream, $seconds, $microseconds = 0)
{
$return_stream_set_timeout = false;

// ========== STREAM_SET_TIMEOUT - BEGIN
// ===== ABOUT
// Set timeout period on a stream
// ===== DESCRIPTION
// Sets the timeout value on stream, expressed in the sum of seconds and microseconds.
// When the stream times out, the 'timed_out' key of the array returned by stream_get_meta_data() is set to true, although no error/warning is generated.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_set_timeout(resource $stream, int $seconds, int $microseconds = 0): bool
// ===== CODE
$return_stream_set_timeout = stream_set_timeout(

$stream, // resource stream - The target stream.

$seconds, // int seconds - The seconds part of the timeout to be set.

$microseconds // int microseconds - The microseconds part of the timeout to be set.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_set_timeout() example
// [php]
// $fp = fsockopen("www.example.com", 80);
// if (!$fp) {
//     echo "Unable to open\n";
// } else {
// 
//     fwrite($fp, "GET / HTTP/1.0\r\n\r\n");
//     stream_set_timeout($fp, 2);
//     $res = fread($fp, 2000);
// 
//     $info = stream_get_meta_data($fp);
//     fclose($fp);
// 
//     if ($info['timed_out']) {
//         echo 'Connection timed out!';
//     } else {
//         echo $res;
//     }
// 
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: This function doesn't work with advanced operations like stream_socket_recvfrom(), use stream_select() with timeout parameter instead.
// This function was previously called as set_socket_timeout() and later socket_set_timeout() but this usage is deprecated.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-set-timeout.php
// ========== STREAM_SET_TIMEOUT - END

// SYNTAX:
// bool stream_set_timeout(resource $stream, int $seconds, int $microseconds = 0)

return $return_stream_set_timeout; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SET_TIMEOUT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SET_WRITE_BUFFER
// ============================== PUBLIC
// ============================== ABOUT
// Sets write file buffering on the given stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_set_write_buffer() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_set_write_buffer($stream, $size)
{
$return_stream_set_write_buffer = 0;

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
$return_stream_set_write_buffer = stream_set_write_buffer(

$stream, // resource stream - The file pointer.

$size // int size - The number of bytes to buffer. If size is 0 then write operations are unbuffered. This ensures that all writes with fwrite() are completed before other processes are allowed to write to that output stream.

); // Return Values
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
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-set-write-buffer.php
// ========== STREAM_SET_WRITE_BUFFER - END

// SYNTAX:
// int stream_set_write_buffer(resource $stream, int $size)

return $return_stream_set_write_buffer; // int
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SET_WRITE_BUFFER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_ACCEPT
// ============================== OFFLINE
// ============================== ABOUT
// Accept a connection on a socket created by stream_socket_server().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_accept() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_accept($socket, $timeout, & $peer_name)
{
$return_stream_socket_accept = false;

// ========== STREAM_SOCKET_ACCEPT - BEGIN
// ===== ABOUT
// Accept a connection on a socket created by stream_socket_server()
// ===== DESCRIPTION
// Accept a connection on a socket previously created by stream_socket_server().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_accept(resource $socket, ?float $timeout = null, string &$peer_name = null): resource|false
// ===== CODE
$return_stream_socket_accept = stream_socket_accept(

$socket, // resource socket - The server socket to accept a connection from.

$timeout, // float timeout - Override the default socket accept timeout. Time should be given in seconds. By default, default_socket_timeout is used.

$peer_name // string& peer_name - Will be set to the name (address) of the client which connected, if included and available from the selected transport.
// Note: Can also be determined later using stream_socket_get_name().

); // Return Values
// Returns a stream to the accepted socket connection or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - timeout is now nullable.
// 
// Notes
// Warning: This function should not be used with UDP server sockets. Instead, use stream_socket_recvfrom() and stream_socket_sendto().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-socket-accept.php
// ========== STREAM_SOCKET_ACCEPT - END

// SYNTAX:
// resource|false stream_socket_accept(resource $socket, float $timeout, string& $peer_name)

return $return_stream_socket_accept; // resource|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_ACCEPT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_CLIENT
// ============================== OFFLINE
// ============================== ABOUT
// Open Internet or Unix domain socket connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_client() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_client($address, & $error_code, & $error_message, $timeout, $flags, $context)
{
$return_stream_socket_client = false;

// ========== STREAM_SOCKET_CLIENT - BEGIN
// ===== ABOUT
// Open Internet or Unix domain socket connection
// ===== DESCRIPTION
// Initiates a stream or datagram connection to the destination specified by address. The type of socket created is determined by the transport specified using standard URL formatting: transport://target. For Internet Domain sockets (AF_INET) such as TCP and UDP, the target portion of the address parameter should consist of a hostname or IP address followed by a colon and a port number. For Unix domain sockets, the target portion should point to the socket file on the filesystem.
// Note: The stream will by default be opened in blocking mode. You can switch it to non-blocking mode by using stream_set_blocking().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_client(
//    string $address,
//    int &$error_code = null,
//    string &$error_message = null,
//    ?float $timeout = null,
//    int $flags = STREAM_CLIENT_CONNECT,
//    ?resource $context = null
// ): resource|falses
// ===== CODE
$return_stream_socket_client = stream_socket_client(

$address, // string address - Address to the socket to connect to.

$error_code, // int& error_code - Will be set to the system level error number if connection fails.

$error_message, // string& error_message - Will be set to the system level error message if the connection fails.

$timeout, // float timeout - Number of seconds until the connect() system call should timeout. By default, default_socket_timeout is used.
// Note: This parameter only applies when not making asynchronous connection attempts.
// Note: To set a timeout for reading/writing data over the socket, use the stream_set_timeout(), as the timeout only applies while making connecting the socket.

$flags, // int flags - Bitmask field which may be set to any combination of connection flags. Currently the select of connection flags is limited to STREAM_CLIENT_CONNECT (default), STREAM_CLIENT_ASYNC_CONNECT and STREAM_CLIENT_PERSISTENT.

$context // resource context - A valid context resource created with stream_context_create().

); // Return Values
// On success a stream resource is returned which may be used together with the other file functions (such as fgets(), fgetss(), fwrite(), fclose(), and feof()), false on failure.
// 
// Errors/Exceptions
// On failure the error_code and error_message arguments will be populated with the actual system level error that occurred in the system-level connect() call. If the value returned in error_code is 0 and the function returned false, it is an indication that the error occurred before the connect() call. This is most likely due to a problem initializing the socket. Note that the error_code and error_message arguments will always be passed by reference.
// 
// Changelog
// Version - Description
// 8.0.0   - timeout and context are now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_socket_client() example
// [php]
// $fp = stream_socket_client("tcp://www.example.com:80", $errno, $errstr, 30);
// if (!$fp) {
//     echo "$errstr ($errno)<br />\n";
// } else {
//     fwrite($fp, "GET / HTTP/1.0\r\nHost: www.example.com\r\nAccept: *\r\n\r\n");
//     while (!feof($fp)) {
//         echo fgets($fp, 1024);
//     }
//     fclose($fp);
// }
// [/php]
// [/example]
// [example]
// Example #2 Using UDP connection
// Retrieving the day and time from the UDP service "daytime" (port 13) on localhost.
// [php]
// $fp = stream_socket_client("udp://127.0.0.1:13", $errno, $errstr);
// if (!$fp) {
//     echo "ERROR: $errno - $errstr<br />\n";
// } else {
//     fwrite($fp, "\n");
//     echo fread($fp, 26);
//     fclose($fp);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: UDP sockets will sometimes appear to have opened without an error, even if the remote host is unreachable. The error will only become apparent when you read or write data to/from the socket. The reason for this is because UDP is a "connectionless" protocol, which means that the operating system does not try to establish a link for the socket until it actually needs to send or receive data.
// Note: When specifying a numerical IPv6 address (e.g. fe80::1), you must enclose the IP in square brackets-for example, tcp://[fe80::1]:80.
// Note: Depending on the environment, the Unix domain or the optional connect timeout may not be available. A list of available transports can be retrieved using stream_get_transports(). See List of Supported Socket Transports for a list of built in transports.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-client.php
// ========== STREAM_SOCKET_CLIENT - END

// SYNTAX:
// resource|false stream_socket_client(string $address, int& $error_code, string& $error_message, float $timeout, int $flags, resource $context)

return $return_stream_socket_client; // resource|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_CLIENT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_ENABLE_CRYPTO
// ============================== OFFLINE
// ============================== ABOUT
// Turns encryption on/off on an already connected socket
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_enable_crypto() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_enable_crypto($stream, $enable, $crypto_method = null, $session_stream = null)
{
$return_stream_socket_enable_crypto = 0;

// ========== STREAM_SOCKET_ENABLE_CRYPTO - BEGIN
// ===== ABOUT
// Turns encryption on/off on an already connected socket
// ===== DESCRIPTION
// Enable or disable encryption on the stream.
// Once the crypto settings are established, cryptography can be turned on and off dynamically by passing true or false in the enable parameter.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_enable_crypto(
//     resource $stream,
//     bool $enable,
//     ?int $crypto_method = null,
//     ?resource $session_stream = null
// ): int|bool
// ===== CODE
$return_stream_socket_enable_crypto = stream_socket_enable_crypto(

$stream, // resource stream - The stream resource.

$enable, // bool enable - Enable/disable cryptography on the stream.

$crypto_method, // int crypto_method - Setup encryption on the stream. Valid methods are
// * STREAM_CRYPTO_METHOD_SSLv2_CLIENT
// * STREAM_CRYPTO_METHOD_SSLv3_CLIENT
// * STREAM_CRYPTO_METHOD_SSLv23_CLIENT
// * STREAM_CRYPTO_METHOD_ANY_CLIENT
// * STREAM_CRYPTO_METHOD_TLS_CLIENT
// * STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT
// * STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT
// * STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT
// * STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT (as of PHP 7.4.0)
// * STREAM_CRYPTO_METHOD_SSLv2_SERVER
// * STREAM_CRYPTO_METHOD_SSLv3_SERVER
// * STREAM_CRYPTO_METHOD_SSLv23_SERVER
// * STREAM_CRYPTO_METHOD_ANY_SERVER
// * STREAM_CRYPTO_METHOD_TLS_SERVER
// * STREAM_CRYPTO_METHOD_TLSv1_0_SERVER
// * STREAM_CRYPTO_METHOD_TLSv1_1_SERVER
// * STREAM_CRYPTO_METHOD_TLSv1_2_SERVER
// * STREAM_CRYPTO_METHOD_TLSv1_3_SERVER (as of PHP 7.4.0)
// If omitted, the crypto_method context option on the stream's SSL context will be used instead.

$session_stream // resource session_stream - Seed the stream with settings from session_stream.

); // Return Values
// Returns true on success, false if negotiation has failed or 0 if there isn't enough data and you should try again (only for non-blocking sockets).
// 
// Changelog
// Version - Description
// 8.0.0   - session_stream is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_socket_enable_crypto() example
// [php]
// $fp = stream_socket_client("tcp://myproto.example.com:31337", $errno, $errstr, 30);
// if (!$fp) {
//     die("Unable to connect: $errstr ($errno)");
// }
// 
// // Turn on encryption for login phase
// stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_SSLv23_CLIENT);
// fwrite($fp, "USER god\r\n");
// fwrite($fp, "PASS secret\r\n");
// 
// // Turn off encryption for the rest
// stream_socket_enable_crypto($fp, false);
// 
// while ($motd = fgets($fp)) {
//     echo $motd;
// }
// 
// fclose($fp);
// [/php]
// The above example will output something similar to:
// [result]
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-enable-crypto.php
// ========== STREAM_SOCKET_ENABLE_CRYPTO - END

// SYNTAX:
// int|bool stream_socket_enable_crypto(resource $stream, bool $enable, int $crypto_method = null, resource $session_stream = null)

return $return_stream_socket_enable_crypto; // int|bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_ENABLE_CRYPTO
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_GET_NAME
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve the name of the local or remote sockets.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_get_name() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_get_name($socket, $remote)
{
$return_stream_socket_get_name = false;

// ========== STREAM_SOCKET_GET_NAME - BEGIN
// ===== ABOUT
// Retrieve the name of the local or remote sockets
// ===== DESCRIPTION
// Returns the local or remote name of a given socket connection.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_get_name(resource $socket, bool $remote): string|false
// ===== CODE
$return_stream_socket_get_name = stream_socket_get_name(

$socket, // resource socket - The socket to get the name of.

$remote // bool remote - If set to true the remote socket name will be returned, if set to false the local socket name will be returned.

); // Return Values
// The name of the socket, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-socket-get-name.php
// ========== STREAM_SOCKET_GET_NAME - END

// SYNTAX:
// string|false stream_socket_get_name(resource $socket, bool $remote)

return $return_stream_socket_get_name; // string|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_GET_NAME
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_PAIR
// ============================== OFFLINE
// ============================== ABOUT
// Creates a pair of connected, indistinguishable socket streams.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_pair() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_pair($domain, $type, $protocol)
{
$return_stream_socket_pair = false;

// ========== STREAM_SOCKET_PAIR - BEGIN
// ===== ABOUT
// Creates a pair of connected, indistinguishable socket streams
// ===== DESCRIPTION
// stream_socket_pair() creates a pair of connected, indistinguishable socket streams. This function is commonly used in IPC (Inter-Process Communication).
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_pair(int $domain, int $type, int $protocol): array|false
// ===== CODE
$return_stream_socket_pair = stream_socket_pair(

$domain, // int domain - The protocol family to be used: STREAM_PF_INET, STREAM_PF_INET6 or STREAM_PF_UNIX

$type, // int type - The type of communication to be used: STREAM_SOCK_DGRAM, STREAM_SOCK_RAW, STREAM_SOCK_RDM, STREAM_SOCK_SEQPACKET or STREAM_SOCK_STREAM

$protocol // int protocol - The protocol to be used: STREAM_IPPROTO_ICMP, STREAM_IPPROTO_IP, STREAM_IPPROTO_RAW, STREAM_IPPROTO_TCP or STREAM_IPPROTO_UDP
// Note: Please consult the Streams constant list for further details on each constant.

); // Return Values
// Returns an array with the two socket resources on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A stream_socket_pair() example
// This example shows the basic usage of stream_socket_pair() in Inter-Process Communication.
// [php]
// 
// $sockets = stream_socket_pair(STREAM_PF_UNIX, STREAM_SOCK_STREAM, STREAM_IPPROTO_IP);
// $pid     = pcntl_fork();
// 
// if ($pid == -1) {
//      die('could not fork');
// 
// } else if ($pid) {
//      // parent
//     fclose($sockets[0]);
// 
//     fwrite($sockets[1], "child PID: $pid\n");
//     echo fgets($sockets[1]);
// 
//     fclose($sockets[1]);
// 
// } else {
//     // child
//     fclose($sockets[1]);
// 
//     fwrite($sockets[0], "message from child\n");
//     echo fgets($sockets[0]);
// 
//     fclose($sockets[0]);
// }
// 
// [/php]
// The above example will output something similar to:
// [result]
// child PID: 1378
// message from child
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-pair.php
// ========== STREAM_SOCKET_PAIR - END

// SYNTAX:
// array|false stream_socket_pair(int $domain, int $type, int $protocol)

return $return_stream_socket_pair; // array|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_PAIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_RECVFROM
// ============================== OFFLINE
// ============================== ABOUT
// Receives data from a socket, connected or not.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_recvfrom() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_recvfrom($socket, $length, $flags, & $address)
{
$return_stream_socket_recvfrom = false;

// ========== STREAM_SOCKET_RECVFROM - BEGIN
// ===== ABOUT
// Receives data from a socket, connected or not
// ===== DESCRIPTION
// stream_socket_recvfrom() accepts data from a remote socket up to length bytes.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_recvfrom(
//     resource $socket,
//     int $length,
//     int $flags = 0,
//     ?string &$address = null
// ): string|false
// ===== CODE
$return_stream_socket_recvfrom = stream_socket_recvfrom(

$socket, // resource socket - The remote socket.

$length, // int length - The number of bytes to receive from the socket.

$flags, // int flags - The value of flags can be any combination of the following:
// Possible values for flags
// STREAM_OOB  - Process OOB (out-of-band) data.
// STREAM_PEEK - Retrieve data from the socket, but do not consume the buffer. Subsequent calls to fread() or stream_socket_recvfrom() will see the same data.

$address // string& address - If address is provided it will be populated with the address of the remote socket.

); // Return Values
// Returns the read data, as a string, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_socket_recvfrom() example
// [php]
// // Open a server socket to port 1234 on localhost
// //
// $server = stream_socket_server('tcp://127.0.0.1:1234');
// 
// // Accept a connection
// $socket = stream_socket_accept($server);
// 
// // Grab a packet (1500 is a typical MTU size) of OOB data
// echo "Received Out-Of-Band: '" . stream_socket_recvfrom($socket, 1500, STREAM_OOB) . "'\n";
// 
// // Take a peek at the normal in-band data, but don't consume it.
// echo "Data: '" . stream_socket_recvfrom($socket, 1500, STREAM_PEEK) . "'\n";
// 
// // Get the exact same packet again, but remove it from the buffer this time.
// echo "Data: '" . stream_socket_recvfrom($socket, 1500) . "'\n";
// 
// // Close it up
// fclose($socket);
// fclose($server);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: If a message received is longer than the length parameter, excess bytes may be discarded depending on the type of socket the message is received from (such as UDP).
// Note: Calls to stream_socket_recvfrom() on socket-based streams, after calls to buffer-based stream functions (like fread() or stream_get_line()) read data directly from the socket and bypass the stream buffer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-recvfrom.php
// ========== STREAM_SOCKET_RECVFROM - END

// SYNTAX:
// string|false stream_socket_recvfrom(resource $socket, int $length, int $flags, string& $address)

return $return_stream_socket_recvfrom; // string|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_RECVFROM
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_SENDTO
// ============================== OFFLINE
// ============================== ABOUT
// Sends a message to a socket, whether it is connected or not.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_sendto() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_sendto($socket, $data, $flags = 0, $address = "")
{
$return_stream_socket_sendto = false;

// ========== STREAM_SOCKET_SENDTO - BEGIN
// ===== ABOUT
// Sends a message to a socket, whether it is connected or not
// ===== DESCRIPTION
// Sends the specified data through the socket.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_sendto(
//     resource $socket,
//     string $data,
//     int $flags = 0,
//     string $address = ""
// ): int|false
// ===== CODE
$return_stream_socket_sendto = stream_socket_sendto(

$socket, // resource socket - The socket to send data to.

$data, // string data - The data to be sent.

$flags, // int flags - The value of flags can be any combination of the following:
// 
// possible values for flags
// STREAM_OOB - Process OOB (out-of-band) data.

$address // string address - The address specified when the socket stream was created will be used unless an alternate address is specified in address.
// If specified, it must be in dotted quad (or [ipv6]) format.

); // Return Values
// Returns a result code, as an integer, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 stream_socket_sendto() Example
// [php]
// // Open a socket to port 1234 on localhost
// $socket = stream_socket_client('tcp://127.0.0.1:1234');
// 
// // Send ordinary data via ordinary channels.
// fwrite($socket, "Normal data transmit.");
// 
// // Send more data out of band.
// stream_socket_sendto($socket, "Out of Band data.", STREAM_OOB);
// 
// // Close it up
// fclose($socket);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-sendto.php
// ========== STREAM_SOCKET_SENDTO - END

// SYNTAX:
// int|false stream_socket_sendto(resource $socket, string $data, int $flags = 0, string $address = "")

return $return_stream_socket_sendto; // int|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_SENDTO
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_SERVER
// ============================== OFFLINE
// ============================== ABOUT
// Create an Internet or Unix domain server socket.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_server() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_server($address, & $error_code, & $error_message, $flags, $context)
{
$return_stream_socket_server = false;

// ========== STREAM_SOCKET_SERVER - BEGIN
// ===== ABOUT
// Create an Internet or Unix domain server socket
// ===== DESCRIPTION
// Creates a stream or datagram socket on the specified address.
// This function only creates a socket, to begin accepting connections use stream_socket_accept().
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_server(
//     string $address,
//     int &$error_code = null,
//     string &$error_message = null,
//     int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN,
//     ?resource $context = null
// ): resource|false
// ===== CODE
$return_stream_socket_server = stream_socket_server(

$address, // string address - The type of socket created is determined by the transport specified using standard URL formatting: transport://target.
// For Internet Domain sockets (AF_INET) such as TCP and UDP, the target portion of the remote_socket parameter should consist of a hostname or IP address followed by a colon and a port number. For Unix domain sockets, the target portion should point to the socket file on the filesystem.
// Depending on the environment, Unix domain sockets may not be available. A list of available transports can be retrieved using stream_get_transports(). See List of Supported Socket Transports for a list of bulitin transports.

$error_code, // int& error_code - If the optional error_code and error_message arguments are present they will be set to indicate the actual system level error that occurred in the system-level socket(), bind(), and listen() calls. If the value returned in error_code is 0 and the function returned false, it is an indication that the error occurred before the bind() call. This is most likely due to a problem initializing the socket. Note that the error_code and error_message arguments will always be passed by reference.

$error_message, // string& error_message - See error_code description.

$flags, // int flags - A bitmask field which may be set to any combination of socket creation flags.
// Note: For UDP sockets, you must use STREAM_SERVER_BIND as the flags parameter.

$context // resource context

); // Return Values
// Returns the created stream, or false on error.
// 
// Changelog
// Version - Description
// 8.0.0   - context is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 Using TCP server sockets
// [php]
// $socket = stream_socket_server("tcp://0.0.0.0:8000", $errno, $errstr);
// if (!$socket) {
//   echo "$errstr ($errno)<br />\n";
// } else {
//   while ($conn = stream_socket_accept($socket)) {
//     fwrite($conn, 'The local time is ' . date('n/j/Y g:i a') . "\n");
//     fclose($conn);
//   }
//   fclose($socket);
// }
// [/php]
// The example below shows how to act as a time server which can respond to time queries as shown in an example on stream_socket_client().
// Note: Most systems require root access to create a server socket on a port below 1024.
// [/example]
// [example]
// Example #2 Using UDP server sockets
// [php]
// $socket = stream_socket_server("udp://127.0.0.1:1113", $errno, $errstr, STREAM_SERVER_BIND);
// if (!$socket) {
//     die("$errstr ($errno)");
// }
// 
// do {
//     $pkt = stream_socket_recvfrom($socket, 1, 0, $peer);
//     echo "$peer\n";
//     stream_socket_sendto($socket, date("D M j H:i:s Y\r\n"), 0, $peer);
// } while ($pkt !== false);
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: When specifying a numerical IPv6 address (e.g. fe80::1), you must enclose the IP in square brackets-for example, tcp://[fe80::1]:80.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-server.php
// ========== STREAM_SOCKET_SERVER - END

// SYNTAX:
// resource|false stream_socket_server(string $address, int& $error_code, string& $error_message, int $flags, resource $context)

return $return_stream_socket_server; // resource|false
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_SERVER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SOCKET_SHUTDOWN
// ============================== OFFLINE
// ============================== ABOUT
// Shutdown a full-duplex connection.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_socket_shutdown() - PHP_5 >= PHP_5_2_1, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_socket_shutdown($stream, $mode)
{
$return_stream_socket_shutdown = false;

// ========== STREAM_SOCKET_SHUTDOWN - BEGIN
// ===== ABOUT
// Shutdown a full-duplex connection
// ===== DESCRIPTION
// Shutdowns (partially or not) a full-duplex connection.
// Note: The associated buffer, or buffers, may or may not be emptied.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_1, PHP_7, PHP_8
// ===== SYNTAX
// stream_socket_shutdown(resource $stream, int $mode): bool
// ===== CODE
$return_stream_socket_shutdown = stream_socket_shutdown(

$stream, // resource stream - An open stream (opened with stream_socket_client(), for example)

$mode // int mode - One of the following constants: STREAM_SHUT_RD (disable further receptions), STREAM_SHUT_WR (disable further transmissions) or STREAM_SHUT_RDWR (disable further receptions and transmissions).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A stream_socket_shutdown() example
// [php]
// 
// $server = stream_socket_server('tcp://127.0.0.1:1337');
// $client = stream_socket_client('tcp://127.0.0.1:1337');
// 
// var_dump(fputs($client, "hello"));
// 
// stream_socket_shutdown($client, STREAM_SHUT_WR);
// var_dump(fputs($client, "hello")); // doesn't work now
// [/php]
// The above example will output something similar to:
// [result]
// int(5)
// 
// Notice: fputs(): send of 5 bytes failed with errno=32 Broken pipe in test.php on line 9
// int(0)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-socket-shutdown.php
// ========== STREAM_SOCKET_SHUTDOWN - END

// SYNTAX:
// bool stream_socket_shutdown(resource $stream, int $mode)

return $return_stream_socket_shutdown; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SOCKET_SHUTDOWN
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_SUPPORTS_LOCK
// ============================== OFFLINE
// ============================== ABOUT
// Tells whether the stream supports locking.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_supports_lock() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_supports_lock($stream)
{
$return_stream_supports_lock = false;

// ========== STREAM_SUPPORTS_LOCK - BEGIN
// ===== ABOUT
// Tells whether the stream supports locking
// ===== DESCRIPTION
// Tells whether the stream supports locking through flock().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_supports_lock(resource $stream): bool
// ===== CODE
$return_stream_supports_lock = stream_supports_lock(

$stream // resource stream - The stream to check.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-supports-lock.php
// ========== STREAM_SUPPORTS_LOCK - END

// SYNTAX:
// bool stream_supports_lock(resource $stream)

return $return_stream_supports_lock; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_SUPPORTS_LOCK
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_WRAPPER_REGISTER
// ============================== PUBLIC
// ============================== ABOUT
// Register a URL wrapper implemented as a PHP class.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_wrapper_register() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_stream_wrapper_register($protocol, $class, $flags = 0)
{
$return_stream_wrapper_register = false;

// ========== STREAM_WRAPPER_REGISTER - BEGIN
// ===== ABOUT
// Register a URL wrapper implemented as a PHP class
// ===== DESCRIPTION
// Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as fopen(), fread() etc.).
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// stream_wrapper_register(string $protocol, string $class, int $flags = 0): bool
// ===== CODE
$return_stream_wrapper_register = stream_wrapper_register(

$protocol, // string protocol - The wrapper name to be registered. Valid protocol names must contain alphanumerics, dots (.), plusses (+), or hyphens (-) only.

$class, // string class - The classname which implements the protocol.

$flags // int flags - Should be set to STREAM_IS_URL if protocol is a URL protocol. Default is 0, local stream.

); // Return Values
// Returns true on success or false on failure.
// stream_wrapper_register() will return false if the protocol already has a handler.
// 
// [examples]
// Examples
// [example]
// Example #1 How to register a stream wrapper
// [php]
// $existed = in_array("var", stream_get_wrappers());
// if ($existed) {
//     stream_wrapper_unregister("var");
// }
// stream_wrapper_register("var", "VariableStream");
// $myvar = "";
// 
// $fp = fopen("var://myvar", "r+");
// 
// fwrite($fp, "line1\n");
// fwrite($fp, "line2\n");
// fwrite($fp, "line3\n");
// 
// rewind($fp);
// while (!feof($fp)) {
//     echo fgets($fp);
// }
// fclose($fp);
// var_dump($myvar);
// 
// if ($existed) {
//     stream_wrapper_restore("var");
// }
// 
// [/php]
// The above example will output:
// [result]
// line1
// line2
// line3
// string(18) "line1
// line2
// line3
// "
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stream-wrapper-register.php
// ========== STREAM_WRAPPER_REGISTER - END

// SYNTAX:
// bool stream_wrapper_register(string $protocol, string $class, int $flags = 0)

return $return_stream_wrapper_register; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAM_WRAPPER_REGISTER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_WRAPPER_RESTORE
// ============================== OFFLINE
// ============================== ABOUT
// Restores a previously unregistered built-in wrapper.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_wrapper_restore() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_wrapper_restore($protocol)
{
$return_stream_wrapper_restore = false;

// ========== STREAM_WRAPPER_RESTORE - BEGIN
// ===== ABOUT
// Restores a previously unregistered built-in wrapper
// ===== DESCRIPTION
// Restores a built-in wrapper previously unregistered with stream_wrapper_unregister().
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_wrapper_restore(string $protocol): bool
// ===== CODE
$return_stream_wrapper_restore = stream_wrapper_restore(

$protocol // string protocol

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-wrapper-restore.php
// ========== STREAM_WRAPPER_RESTORE - END

// SYNTAX:
// bool stream_wrapper_restore(string $protocol)

return $return_stream_wrapper_restore; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_WRAPPER_RESTORE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAM_WRAPPER_UNREGISTER
// ============================== OFFLINE
// ============================== ABOUT
// Unregister a URL wrapper.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// stream_wrapper_unregister() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_stream_wrapper_unregister($protocol)
{
$return_stream_wrapper_unregister = false;

// ========== STREAM_WRAPPER_UNREGISTER - BEGIN
// ===== ABOUT
// Unregister a URL wrapper
// ===== DESCRIPTION
// Allows you to disable an already defined stream wrapper. Once the wrapper has been disabled you may override it with a user-defined wrapper using stream_wrapper_register() or reenable it later on with stream_wrapper_restore().
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// stream_wrapper_unregister(string $protocol): bool
// ===== CODE
$return_stream_wrapper_unregister = stream_wrapper_unregister(

$protocol // string protocol

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.stream-wrapper-unregister.php
// ========== STREAM_WRAPPER_UNREGISTER - END

// SYNTAX:
// bool stream_wrapper_unregister(string $protocol)

return $return_stream_wrapper_unregister; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAM_WRAPPER_UNREGISTER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_PHPUSERFILTER
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_STREAMS_PHPUSERFILTER_FILTER - int php_basic_streams_phpuserfilter_filter(php_user_filter $phpuserfilter, resource $in, resource $out, int& $consumed, bool $closing)
// OFFLINE | PHP_BASIC_STREAMS_PHPUSERFILTER_ONCLOSE - void php_basic_streams_phpuserfilter_onclose(php_user_filter $phpuserfilter)
// OFFLINE | PHP_BASIC_STREAMS_PHPUSERFILTER_ONCREATE - bool php_basic_streams_phpuserfilter_oncreate(php_user_filter $phpuserfilter)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (3)
// OFFLINE | php_user_filter::filter() - PHP_5, PHP_7, PHP_8
// OFFLINE | php_user_filter::onClose() - PHP_5, PHP_7, PHP_8
// OFFLINE | php_user_filter::onCreate() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (5)
// int
// OFFLINE | php_user_filter - PHP_5, PHP_7, PHP_8
// resource
// bool
// void
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_PHPUSERFILTER_FILTER
// ============================== OFFLINE
// ============================== ABOUT
// Called when applying the filter.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// php_user_filter::filter() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_phpuserfilter_filter($phpuserfilter, $in, $out, & $consumed, $closing)
{
$return_phpuserfilter_filter = 0;

// ========== PHPUSERFILTER_FILTER - BEGIN
// ===== ABOUT
// Called when applying the filter
// ===== DESCRIPTION
// This method is called whenever data is read from or written to the attached stream (such as with fread() or fwrite()).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public php_user_filter::filter(
//    resource $in,
//    resource $out,
//    int &$consumed,
//    bool $closing
// ): int
// ===== CODE
$return_phpuserfilter_filter = $phpuserfilter->filter(

$in, // resource in - in is a resource pointing to a bucket brigade which contains one or more bucket objects containing data to be filtered.

$out, // resource out - out is a resource pointing to a second bucket brigade into which your modified buckets should be placed.

$consumed, // int& consumed - consumed, which must always be declared by reference, should be incremented by the length of the data which your filter reads in and alters. In most cases this means you will increment consumed by $bucket->datalen for each $bucket.

$closing // bool closing - If the stream is in the process of closing (and therefore this is the last pass through the filterchain), the closing parameter will be set to true.

); // Return Values
// The filter() method must return one of three values upon completion.
// 
// Return Value             - Meaning
// PSFS_PASS_ON             - Filter processed successfully with data available in the out bucket brigade.
// PSFS_FEED_ME             - Filter processed successfully, however no data was available to return. More data is required from the stream or prior filter.
// PSFS_ERR_FATAL (default) - The filter experienced an unrecoverable error and cannot continue.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/php-user-filter.filter.php
// ========== PHPUSERFILTER_FILTER - END

// SYNTAX:
// int php_user_filter::filter(resource $in, resource $out, int& $consumed, bool $closing)

return $return_phpuserfilter_filter; // int
}
*/
// ============================== END
// PHP_BASIC_STREAMS_PHPUSERFILTER_FILTER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_PHPUSERFILTER_ONCLOSE
// ============================== OFFLINE
// ============================== ABOUT
// Called when closing the filter.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// php_user_filter::onClose() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_phpuserfilter_onclose($phpuserfilter)
{

// ========== PHPUSERFILTER_ONCLOSE - BEGIN
// ===== ABOUT
// Called when closing the filter
// ===== DESCRIPTION
// This method is called upon filter shutdown (typically, this is also during stream shutdown), and is executed after the flush method is called. If any resources were allocated or initialized during onCreate() this would be the time to destroy or dispose of them.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public php_user_filter::onClose(): void
// ===== CODE
$phpuserfilter->onClose(

// This function has no parameters.

); // Return Values
// Return value is ignored.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/php-user-filter.onclose.php
// ========== PHPUSERFILTER_ONCLOSE - END

// SYNTAX:
// void php_user_filter::onClose()

// Return: void
}
*/
// ============================== END
// PHP_BASIC_STREAMS_PHPUSERFILTER_ONCLOSE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_PHPUSERFILTER_ONCREATE
// ============================== OFFLINE
// ============================== ABOUT
// Called when creating the filter.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// php_user_filter::onCreate() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_phpuserfilter_oncreate($phpuserfilter)
{
$return_phpuserfilter_oncreate = false;

// ========== PHPUSERFILTER_ONCREATE - BEGIN
// ===== ABOUT
// Called when creating the filter
// ===== DESCRIPTION
// This method is called during instantiation of the filter class object. If your filter allocates or initializes any other resources (such as a buffer), this is the place to do it.
// When your filter is first instantiated, and yourfilter->onCreate() is called, a number of properties will be available as shown in the table below.
// 
// Property                - Contents
// FilterClass->filtername - A string containing the name the filter was instantiated with. Filters may be registered under multiple names or under wildcards. Use this property to determine which name was used.
// FilterClass->params     - The contents of the params parameter passed to stream_filter_append() or stream_filter_prepend().
// FilterClass->stream     - The stream resource being filtered. Maybe available only during filter() calls when the closing parameter is set to false.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public php_user_filter::onCreate(): bool
// ===== CODE
$return_phpuserfilter_oncreate = $phpuserfilter->onCreate(

// This function has no parameters.

); // Return Values
// Your implementation of this method should return false on failure, or true on success.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/php-user-filter.oncreate.php
// ========== PHPUSERFILTER_ONCREATE - END

// SYNTAX:
// bool php_user_filter::onCreate()

return $return_phpuserfilter_oncreate; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_PHPUSERFILTER_ONCREATE
// ==============================


// ============================== END
// PHP_BASIC_STREAMS_PHPUSERFILTER
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER
// ============================== PUBLIC
// PHP_BASIC_STREAMS_STREAMWRAPPER_CONSTRUCT - streamWrapper php_basic_streams_streamwrapper_construct()
// PHP_BASIC_STREAMS_STREAMWRAPPER_DESTRUCT - void php_basic_streams_streamwrapper_destruct(streamWrapper $streamwrapper)
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_CLOSEDIR - bool php_basic_streams_streamwrapper_dir_closedir(streamWrapper $streamwrapper)
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_OPENDIR - bool php_basic_streams_streamwrapper_dir_opendir(streamWrapper $streamwrapper, string $path, int $options)
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_READDIR - string php_basic_streams_streamwrapper_dir_readdir(streamWrapper $streamwrapper)
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_REWINDDIR - bool php_basic_streams_streamwrapper_dir_rewinddir(streamWrapper $streamwrapper)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_MKDIR - bool php_basic_streams_streamwrapper_mkdir(streamWrapper $streamwrapper, string $path, int $mode, int $options)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_RENAME - bool php_basic_streams_streamwrapper_rename(streamWrapper $streamwrapper, string $path_from, string $path_to)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_RMDIR - bool php_basic_streams_streamwrapper_rmdir(streamWrapper $streamwrapper, string $path, int $options)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_CAST - resource php_basic_streams_streamwrapper_stream_cast(streamWrapper $streamwrapper, int $cast_as)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_CLOSE - void php_basic_streams_streamwrapper_stream_close(streamWrapper $streamwrapper)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_EOF - bool php_basic_streams_streamwrapper_stream_eof(streamWrapper $streamwrapper)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_FLUSH - bool php_basic_streams_streamwrapper_stream_flush(streamWrapper $streamwrapper)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_LOCK - bool php_basic_streams_streamwrapper_stream_lock(streamWrapper $streamwrapper, int $operation)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_METADATA - bool php_basic_streams_streamwrapper_stream_metadata(streamWrapper $streamwrapper, string $path, int $option, mixed $value)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_OPEN - bool php_basic_streams_streamwrapper_stream_open(streamWrapper $streamwrapper, string $path, string $mode, int $options, string& $opened_path)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_READ - string|false php_basic_streams_streamwrapper_stream_read(streamWrapper $streamwrapper, int $count)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_SEEK - bool php_basic_streams_streamwrapper_stream_seek(streamWrapper $streamwrapper, int $offset, int $whence = SEEK_SET)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_SET_OPTION - bool php_basic_streams_streamwrapper_stream_set_option(streamWrapper $streamwrapper, int $option, int $arg1, int $arg2)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_STAT - array|false php_basic_streams_streamwrapper_stream_stat(streamWrapper $streamwrapper)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_TELL - int php_basic_streams_streamwrapper_stream_tell(streamWrapper $streamwrapper)
// OFFLINE | PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_TRUNCATE - bool php_basic_streams_streamwrapper_stream_truncate(streamWrapper $streamwrapper, int $new_size)
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_WRITE - int php_basic_streams_streamwrapper_stream_write(streamWrapper $streamwrapper, string $data)
// PHP_BASIC_STREAMS_STREAMWRAPPER_UNLINK - bool php_basic_streams_streamwrapper_unlink(streamWrapper $streamwrapper, string $path)
// PHP_BASIC_STREAMS_STREAMWRAPPER_URL_STAT - array|false php_basic_streams_streamwrapper_url_stat(string $path, int $flags)
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (25)
// streamWrapper::__construct() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::__destruct() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::dir_closedir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::dir_opendir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::dir_readdir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::dir_rewinddir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::mkdir() - PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::rename() - PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::rmdir() - PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::stream_cast() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// streamWrapper::stream_close() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::stream_eof() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::stream_flush() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::stream_lock() - PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::stream_metadata() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// streamWrapper::stream_open() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::stream_read() - PHP_4 >= PHP_4_3_2, PHP 5, PHP_7, PHP_8
// streamWrapper::stream_seek() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::stream_set_option() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// streamWrapper::stream_stat() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::stream_tell() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// OFFLINE | streamWrapper::stream_truncate() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// streamWrapper::stream_write() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// streamWrapper::unlink() - PHP_5, PHP_7, PHP_8
// streamWrapper::url_stat() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (9)
// streamWrapper - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// void
// bool
// string
// int
// resource
// mixed
// false
// array
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Constructs a new stream wrapper.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::__construct() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_construct()
{
$return_streamwrapper_construct = null;

// ========== STREAMWRAPPER_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new stream wrapper
// ===== DESCRIPTION
// Called when opening the stream wrapper, right before streamWrapper::stream_open().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::__construct()
// ===== CODE
$return_streamwrapper_construct = new streamWrapper(

// This function has no parameters.

); // Return
// streamWrapper
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.construct.php
// ========== STREAMWRAPPER_CONSTRUCT - END

// SYNTAX:
// streamWrapper streamWrapper::__construct()

return $return_streamwrapper_construct; // streamWrapper
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_DESTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Destructs an existing stream wrapper.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::__destruct() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_destruct($streamwrapper)
{

// ========== STREAMWRAPPER_DESTRUCT - BEGIN
// ===== ABOUT
// Destructs an existing stream wrapper
// ===== DESCRIPTION
// Called when closing the stream wrapper, right before streamWrapper::stream_flush().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::__destruct()
// ===== CODE
$streamwrapper->__destruct(

// This function has no parameters.

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.destruct.php
// ========== STREAMWRAPPER_DESTRUCT - END

// SYNTAX:
// void streamWrapper::__destruct()

// Return: void
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_DESTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_CLOSEDIR
// ============================== PUBLIC
// ============================== ABOUT
// Close directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::dir_closedir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_dir_closedir($streamwrapper)
{
$return_streamwrapper_dir_closedir = false;

// ========== STREAMWRAPPER_DIR_CLOSEDIR - BEGIN
// ===== ABOUT
// Close directory handle
// ===== DESCRIPTION
// This method is called in response to closedir().
// Any resources which were locked, or allocated, during opening and use of the directory stream should be released.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::dir_closedir(): bool
// ===== CODE
$return_streamwrapper_dir_closedir = $streamwrapper->dir_closedir(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.dir-closedir.php
// ========== STREAMWRAPPER_DIR_CLOSEDIR - END

// SYNTAX:
// bool streamWrapper::dir_closedir()

return $return_streamwrapper_dir_closedir; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_CLOSEDIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_OPENDIR
// ============================== PUBLIC
// ============================== ABOUT
// Open directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::dir_opendir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_dir_opendir($streamwrapper, $path, $options)
{
$return_streamwrapper_dir_opendir = false;

// ========== STREAMWRAPPER_DIR_OPENDIR - BEGIN
// ===== ABOUT
// Open directory handle
// ===== DESCRIPTION
// This method is called in response to opendir().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::dir_opendir(string $path, int $options): bool
// ===== CODE
$return_streamwrapper_dir_opendir = $streamwrapper->dir_opendir(

$path, // string path - Specifies the URL that was passed to opendir().
// Note: The URL can be broken apart with parse_url().

$options // int options

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.dir-opendir.php
// ========== STREAMWRAPPER_DIR_OPENDIR - END

// SYNTAX:
// bool streamWrapper::dir_opendir(string $path, int $options)

return $return_streamwrapper_dir_opendir; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_OPENDIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_READDIR
// ============================== PUBLIC
// ============================== ABOUT
// Read entry from directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::dir_readdir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_dir_readdir($streamwrapper)
{
$return_streamwrapper_dir_readdir = null;

// ========== STREAMWRAPPER_DIR_READDIR - BEGIN
// ===== ABOUT
// Read entry from directory handle
// ===== DESCRIPTION
// This method is called in response to readdir().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::dir_readdir(): string
// ===== CODE
$return_streamwrapper_dir_readdir = $streamwrapper->dir_readdir(

// This function has no parameters.

); // Return Values
// Should return string representing the next filename, or false if there is no next file.
// Note: The return value will be casted to string.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// [examples]
// Examples
// [example]
// Example #1 Listing files from tar archives
// [php]
// class streamWrapper {
//     protected $fp;
// 
//     public function dir_opendir($path, $options) {
//         $url = parse_url($path);
// 
//         $path = $url["host"] . $url["path"];
// 
//         if (!is_readable($path)) {
//             trigger_error("$path isn't readable for me", E_USER_NOTICE);
//             return false;
//         }
//         if (!is_file($path)) {
//             trigger_error("$path isn't a file", E_USER_NOTICE);
//             return false;
//         }
// 
//         $this->fp = fopen($path, "rb");
//         return true;
//     }
// 
//     public function dir_readdir() {
//         // Extract the header for this entry
//         $header      = fread($this->fp, 512);
//         $data = unpack("a100filename/a8mode/a8uid/a8gid/a12size/a12mtime/a8checksum/a1filetype/a100link/a100linkedfile", $header);
// 
//         // Trim the filename and filesize
//         $filename    = trim($data["filename"]);
// 
//         // No filename? We are the end of the archive
//         if (!$filename) {
//             return false;
//         }
// 
//         $octal_bytes = trim($data["size"]);
//         // Filesize is defined in octects
//         $bytes       = octdec($octal_bytes);
// 
//         // tar rounds up filesizes up to multiple of 512 bytes (zero filled)
//         $rest        = $bytes % 512;
//         if ($rest > 0) {
//             $bytes      += 512 - $rest;
//         }
// 
//         // Seek over the file
//         fseek($this->fp, $bytes, SEEK_CUR);
// 
//         return $filename;
//     }
// 
//     public function dir_closedir() {
//         return fclose($this->fp);
//     }
// 
//     public function dir_rewinddir() {
//         return fseek($this->fp, 0, SEEK_SET);
//     }
// }
// 
// stream_wrapper_register("tar", "streamWrapper");
// $handle = opendir("tar://example.tar");
// while (false !== ($file = readdir($handle))) {
//     var_dump($file);
// }
// 
// echo "Rewinding..\n";
// rewind($handle);
// var_dump(readdir($handle));
// 
// closedir($handle);
// [/php]
// The above example will output something similar to:
// [result]
// string(13) "construct.xml"
// string(16) "dir-closedir.xml"
// string(15) "dir-opendir.xml"
// string(15) "dir-readdir.xml"
// string(17) "dir-rewinddir.xml"
// string(9) "mkdir.xml"
// string(10) "rename.xml"
// string(9) "rmdir.xml"
// string(15) "stream-cast.xml"
// string(16) "stream-close.xml"
// string(14) "stream-eof.xml"
// string(16) "stream-flush.xml"
// string(15) "stream-lock.xml"
// string(15) "stream-open.xml"
// string(15) "stream-read.xml"
// string(15) "stream-seek.xml"
// string(21) "stream-set-option.xml"
// string(15) "stream-stat.xml"
// string(15) "stream-tell.xml"
// string(16) "stream-write.xml"
// string(10) "unlink.xml"
// string(12) "url-stat.xml"
// Rewinding..
// string(13) "construct.xml"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.dir-readdir.php
// ========== STREAMWRAPPER_DIR_READDIR - END

// SYNTAX:
// string streamWrapper::dir_readdir()

return $return_streamwrapper_dir_readdir; // string
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_READDIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_REWINDDIR
// ============================== PUBLIC
// ============================== ABOUT
// Rewind directory handle.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::dir_rewinddir() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_dir_rewinddir($streamwrapper)
{
$return_streamwrapper_dir_rewinddir = false;

// ========== STREAMWRAPPER_DIR_REWINDDIR - BEGIN
// ===== ABOUT
// Rewind directory handle
// ===== DESCRIPTION
// This method is called in response to rewinddir().
// Should reset the output generated by streamWrapper::dir_readdir(). i.e.: The next call to streamWrapper::dir_readdir() should return the first entry in the location returned by streamWrapper::dir_opendir().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::dir_rewinddir(): bool
// ===== CODE
$return_streamwrapper_dir_rewinddir = $streamwrapper->dir_rewinddir(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.dir-rewinddir.php
// ========== STREAMWRAPPER_DIR_REWINDDIR - END

// SYNTAX:
// bool streamWrapper::dir_rewinddir()

return $return_streamwrapper_dir_rewinddir; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_DIR_REWINDDIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_MKDIR
// ============================== OFFLINE
// ============================== ABOUT
// Create a directory.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::mkdir() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_mkdir($streamwrapper, $path, $mode, $options)
{
$return_streamwrapper_mkdir = false;

// ========== STREAMWRAPPER_MKDIR - BEGIN
// ===== ABOUT
// Create a directory
// ===== DESCRIPTION
// This method is called in response to mkdir().
// Note: In order for the appropriate error message to be returned this method should not be defined if the wrapper does not support creating directories.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::mkdir(string $path, int $mode, int $options): bool
// ===== CODE
$return_streamwrapper_mkdir = $streamwrapper->mkdir(

$path, // string path - Directory which should be created.

$mode, // int mode - The value passed to mkdir().

$options // int options - A bitwise mask of values, such as STREAM_MKDIR_RECURSIVE.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// Notes
// Note: The streamWrapper::$context property is updated if a valid context is passed to the caller function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.mkdir.php
// ========== STREAMWRAPPER_MKDIR - END

// SYNTAX:
// bool streamWrapper::mkdir(string $path, int $mode, int $options)

return $return_streamwrapper_mkdir; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_MKDIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_RENAME
// ============================== OFFLINE
// ============================== ABOUT
// Renames a file or directory.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::rename() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_rename($streamwrapper, $path_from, $path_to)
{
$return_streamwrapper_rename = false;

// ========== STREAMWRAPPER_RENAME - BEGIN
// ===== ABOUT
// Renames a file or directory
// ===== DESCRIPTION
// This method is called in response to rename().
// Should attempt to rename path_from to path_to
// Note: In order for the appropriate error message to be returned this method should not be defined if the wrapper does not support renaming files.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::rename(string $path_from, string $path_to): bool
// ===== CODE
$return_streamwrapper_rename = $streamwrapper->rename(

$path_from, // string path_from - The URL to the current file.

$path_to // string path_to - The URL which the path_from should be renamed to.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// Notes
// Note: The streamWrapper::$context property is updated if a valid context is passed to the caller function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.rename.php
// ========== STREAMWRAPPER_RENAME - END

// SYNTAX:
// bool streamWrapper::rename(string $path_from, string $path_to)

return $return_streamwrapper_rename; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_RENAME
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_RMDIR
// ============================== OFFLINE
// ============================== ABOUT
// Removes a directory.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::rmdir() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_rmdir($streamwrapper, $path, $options)
{
$return_streamwrapper_rmdir = false;

// ========== STREAMWRAPPER_RMDIR - BEGIN
// ===== ABOUT
// Removes a directory
// ===== DESCRIPTION
// This method is called in response to rmdir().
// Note: In order for the appropriate error message to be returned this method should not be defined if the wrapper does not support removing directories.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::rmdir(string $path, int $options): bool
// ===== CODE
$return_streamwrapper_rmdir = $streamwrapper->rmdir(

$path, // string path - The directory URL which should be removed.

$options // int options - A bitwise mask of values, such as STREAM_MKDIR_RECURSIVE.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// Notes
// Note: The streamWrapper::$context property is updated if a valid context is passed to the caller function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.rmdir.php
// ========== STREAMWRAPPER_RMDIR - END

// SYNTAX:
// bool streamWrapper::rmdir(string $path, int $options)

return $return_streamwrapper_rmdir; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_RMDIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_CAST
// ============================== OFFLINE
// ============================== ABOUT
// Retrieve the underlaying resource.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_cast() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_stream_cast($streamwrapper, $cast_as)
{
$return_streamwrapper_stream_cast = null;

// ========== STREAMWRAPPER_STREAM_CAST - BEGIN
// ===== ABOUT
// Retrieve the underlaying resource
// ===== DESCRIPTION
// This method is called in response to stream_select().
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_cast(int $cast_as): resource
// ===== CODE
$return_streamwrapper_stream_cast = $streamwrapper->stream_cast(

$cast_as // int cast_as - Can be STREAM_CAST_FOR_SELECT when stream_select() is calling stream_cast() or STREAM_CAST_AS_STREAM when stream_cast() is called for other uses.

); // Return Values
// Should return the underlying stream resource used by the wrapper, or false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-cast.php
// ========== STREAMWRAPPER_STREAM_CAST - END

// SYNTAX:
// resource streamWrapper::stream_cast(int $cast_as)

return $return_streamwrapper_stream_cast; // resource
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_CAST
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close a resource.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_close() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_close($streamwrapper)
{

// ========== STREAMWRAPPER_STREAM_CLOSE - BEGIN
// ===== ABOUT
// Close a resource
// ===== DESCRIPTION
// This method is called in response to fclose().
// All resources that were locked, or allocated, by the wrapper should be released.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_close(): void
// ===== CODE
$streamwrapper->stream_close(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-close.php
// ========== STREAMWRAPPER_STREAM_CLOSE - END

// SYNTAX:
// void streamWrapper::stream_close()

// Return: void
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_CLOSE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_EOF
// ============================== PUBLIC
// ============================== ABOUT
// Tests for end-of-file on a file pointer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_eof() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_eof($streamwrapper)
{
$return_streamwrapper_stream_eof = false;

// ========== STREAMWRAPPER_STREAM_EOF - BEGIN
// ===== ABOUT
// Tests for end-of-file on a file pointer
// ===== DESCRIPTION
// This method is called in response to feof().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_eof(): bool
// ===== CODE
$return_streamwrapper_stream_eof = $streamwrapper->stream_eof(

// This function has no parameters.

); // Return Values
// Should return true if the read/write position is at the end of the stream and if no more data is available to be read, or false otherwise.
// 
// Notes
// Warning: When reading the whole file (for example, with file_get_contents()), PHP will call streamWrapper::stream_read() followed by streamWrapper::stream_eof() in a loop but as long as streamWrapper::stream_read() returns a non-empty string, the return value of streamWrapper::stream_eof() is ignored.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-eof.php
// ========== STREAMWRAPPER_STREAM_EOF - END

// SYNTAX:
// bool streamWrapper::stream_eof()

return $return_streamwrapper_stream_eof; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_EOF
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_FLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Flushes the output.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_flush() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_flush($streamwrapper)
{
$return_streamwrapper_stream_flush = false;

// ========== STREAMWRAPPER_STREAM_FLUSH - BEGIN
// ===== ABOUT
// Flushes the output
// ===== DESCRIPTION
// This method is called in response to fflush() and when the stream is being closed while any unflushed data has been written to it before.
// If you have cached data in your stream but not yet stored it into the underlying storage, you should do so now.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_flush(): bool
// ===== CODE
$return_streamwrapper_stream_flush = $streamwrapper->stream_flush(

// This function has no parameters.

); // Return Values
// Should return true if the cached data was successfully stored (or if there was no data to store), or false if the data could not be stored.
// 
// Notes
// Note: If not implemented, false is assumed as the return value.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-flush.php
// ========== STREAMWRAPPER_STREAM_FLUSH - END

// SYNTAX:
// bool streamWrapper::stream_flush()

return $return_streamwrapper_stream_flush; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_FLUSH
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_LOCK
// ============================== OFFLINE
// ============================== ABOUT
// Advisory file locking.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_lock() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_stream_lock($streamwrapper, $operation)
{
$return_streamwrapper_stream_lock = false;

// ========== STREAMWRAPPER_STREAM_LOCK - BEGIN
// ===== ABOUT
// Advisory file locking
// ===== DESCRIPTION
// This method is called in response to flock(), when file_put_contents() (when flags contains LOCK_EX), stream_set_blocking() and when closing the stream (LOCK_UN).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_lock(int $operation): bool
// ===== CODE
$return_streamwrapper_stream_lock = $streamwrapper->stream_lock(

$operation // int operation - operation is one of the following:
// * LOCK_SH to acquire a shared lock (reader).
// * LOCK_EX to acquire an exclusive lock (writer).
// * LOCK_UN to release a lock (shared or exclusive).
// * LOCK_NB if you don't want flock() to block while locking. (not supported on Windows)

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-lock.php
// ========== STREAMWRAPPER_STREAM_LOCK - END

// SYNTAX:
// bool streamWrapper::stream_lock(int $operation)

return $return_streamwrapper_stream_lock; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_LOCK
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_METADATA
// ============================== OFFLINE
// ============================== ABOUT
// Change stream metadata.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_metadata() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_stream_metadata($streamwrapper, $path, $option, $value)
{
$return_streamwrapper_stream_metadata = false;

// ========== STREAMWRAPPER_STREAM_METADATA - BEGIN
// ===== ABOUT
// Change stream metadata
// ===== DESCRIPTION
// This method is called to set metadata on the stream. It is called when one of the following functions is called on a stream URL:
// * touch()
// * chmod()
// * chown()
// * chgrp()
// Please note that some of these operations may not be available on your system.
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_metadata(string $path, int $option, mixed $value): bool
// ===== CODE
$return_streamwrapper_stream_metadata = $streamwrapper->stream_metadata(

$path, // string path - The file path or URL to set metadata. Note that in the case of a URL, it must be a :// delimited URL. Other URL forms are not supported.

$option, // int option - One of:
// * STREAM_META_TOUCH (The method was called in response to touch())
// * STREAM_META_OWNER_NAME (The method was called in response to chown() with string parameter)
// * STREAM_META_OWNER (The method was called in response to chown())
// * STREAM_META_GROUP_NAME (The method was called in response to chgrp())
// * STREAM_META_GROUP (The method was called in response to chgrp())
// * STREAM_META_ACCESS (The method was called in response to chmod())

$value // mixed value - If option is
// * STREAM_META_TOUCH: Array consisting of two arguments of the touch() function.
// * STREAM_META_OWNER_NAME or STREAM_META_GROUP_NAME: The name of the owner user/group as string.
// * STREAM_META_OWNER or STREAM_META_GROUP: The value owner user/group argument as int.
// * STREAM_META_ACCESS: The argument of the chmod() as int.

); // Return Values
// Returns true on success or false on failure. If option is not implemented, false should be returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-metadata.php
// ========== STREAMWRAPPER_STREAM_METADATA - END

// SYNTAX:
// bool streamWrapper::stream_metadata(string $path, int $option, mixed $value)

return $return_streamwrapper_stream_metadata; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_METADATA
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Opens file or URL.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_open() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_open($streamwrapper, $path, $mode, $options, & $opened_path)
{
$return_streamwrapper_stream_open = false;

// ========== STREAMWRAPPER_STREAM_OPEN - BEGIN
// ===== ABOUT
// Opens file or URL
// ===== DESCRIPTION
// This method is called immediately after the wrapper is initialized (f.e. by fopen() and file_get_contents()).
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_open(
//     string $path,
//     string $mode,
//     int $options,
//     ?string &$opened_path
// ): bool
// ===== CODE
$return_streamwrapper_stream_open = $streamwrapper->stream_open(

$path, // string path - Specifies the URL that was passed to the original function.
// Note: The URL can be broken apart with parse_url(). Note that only URLs delimited by :// are supported. : and :/ while technically valid URLs, are not.

$mode, // string mode - The mode used to open the file, as detailed for fopen().
// Note: Remember to check if the mode is valid for the path requested.

$options, // int options - Holds additional flags set by the streams API. It can hold one or more of the following values OR'd together.
// 
// Flag                 - Description
// STREAM_USE_PATH      - If path is relative, search for the resource using the include_path.
// STREAM_REPORT_ERRORS - If this flag is set, you are responsible for raising errors using trigger_error() during opening of the stream. If this flag is not set, you should not raise any errors.

$opened_path // string& opened_path - If the path is opened successfully, and STREAM_USE_PATH is set in options, opened_path should be set to the full path of the file/resource that was actually opened.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// Notes
// Note: The streamWrapper::$context property is updated if a valid context is passed to the caller function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-open.php
// ========== STREAMWRAPPER_STREAM_OPEN - END

// SYNTAX:
// bool streamWrapper::stream_open(string $path, string $mode, int $options, string& $opened_path)

return $return_streamwrapper_stream_open; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_OPEN
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_READ
// ============================== PUBLIC
// ============================== ABOUT
// Read from stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_read() - PHP_4 >= PHP_4_3_2, PHP 5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_read($streamwrapper, $count)
{
$return_streamwrapper_stream_read = false;

// ========== STREAMWRAPPER_STREAM_READ - BEGIN
// ===== ABOUT
// Read from stream
// ===== DESCRIPTION
// This method is called in response to fread() and fgets().
// Note: Remember to update the read/write position of the stream (by the number of bytes that were successfully read).
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP 5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_read(int $count): string|false
// ===== CODE
$return_streamwrapper_stream_read = $streamwrapper->stream_read(

$count // int count - How many bytes of data from the current position should be returned.

); // Return Values
// If there are less than count bytes available, as many as are available should be returned. If no more data is available, an empty string should be returned. To signal that reading failed, false should be returned.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// Note: If the return value is longer then count an E_WARNING error will be emitted, and excess data will be lost.
// 
// Notes
// Note: streamWrapper::stream_eof() is called directly after calling streamWrapper::stream_read() to check if EOF has been reached. If not implemented, EOF is assumed.
// Warning: When reading the whole file (for example, with file_get_contents()), PHP will call streamWrapper::stream_read() followed by streamWrapper::stream_eof() in a loop but as long as streamWrapper::stream_read() returns a non-empty string, the return value of streamWrapper::stream_eof() is ignored.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-read.php
// ========== STREAMWRAPPER_STREAM_READ - END

// SYNTAX:
// string|false streamWrapper::stream_read(int $count)

return $return_streamwrapper_stream_read; // string|false
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_READ
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Seeks to specific location in a stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_seek() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SEEK_SET - streamWrapper::stream_seek()
// ============================== CODE
function php_basic_streams_streamwrapper_stream_seek($streamwrapper, $offset, $whence = SEEK_SET)
{
$return_streamwrapper_stream_seek = false;

// ========== STREAMWRAPPER_STREAM_SEEK - BEGIN
// ===== ABOUT
// Seeks to specific location in a stream
// ===== DESCRIPTION
// This method is called in response to fseek().
// The read/write position of the stream should be updated according to the offset and whence.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_seek(int $offset, int $whence = SEEK_SET): bool
// ===== CODE
$return_streamwrapper_stream_seek = $streamwrapper->stream_seek(

$offset, // int offset - The stream offset to seek to.

$whence // int whence - Possible values:
// * SEEK_SET - Set position equal to offset bytes.
// * SEEK_CUR - Set position to current location plus offset.
// * SEEK_END - Set position to end-of-file plus offset.
// Note: The current implementation never sets whence to SEEK_CUR; instead such seeks are internally converted to SEEK_SET seeks.

); // Return Values
// Return true if the position was updated, false otherwise.
// 
// Notes
// Note: If not implemented, false is assumed as the return value.
// Note: Upon success, streamWrapper::stream_tell() is called directly after calling streamWrapper::stream_seek(). If streamWrapper::stream_tell() fails, the return value to the caller function will be set to false
// Note: Not all seeks operations on the stream will result in this function being called. PHP streams have read buffering enabled by default (see also stream_set_read_buffer()) and seeking may be done by merely moving the buffer pointer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-seek.php
// ========== STREAMWRAPPER_STREAM_SEEK - END

// SYNTAX:
// bool streamWrapper::stream_seek(int $offset, int $whence = SEEK_SET)

return $return_streamwrapper_stream_seek; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_SEEK
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_SET_OPTION
// ============================== OFFLINE
// ============================== ABOUT
// Change stream options.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_set_option() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_set_option($streamwrapper, $option, $arg1, $arg2)
{
$return_streamwrapper_stream_set_option = false;

// ========== STREAMWRAPPER_STREAM_SET_OPTION - BEGIN
// ===== ABOUT
// Change stream options
// ===== DESCRIPTION
// This method is called to set options on the stream.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_set_option(int $option, int $arg1, int $arg2): bool
// ===== CODE
$return_streamwrapper_stream_set_option = $streamwrapper->stream_set_option(

$option, // int option - One of:
// * STREAM_OPTION_BLOCKING (The method was called in response to stream_set_blocking())
// * STREAM_OPTION_READ_TIMEOUT (The method was called in response to stream_set_timeout())
// * STREAM_OPTION_WRITE_BUFFER (The method was called in response to stream_set_write_buffer())

$arg1, // int arg1 - If option is
// * STREAM_OPTION_BLOCKING: requested blocking mode (1 meaning block 0 not blocking).
// * STREAM_OPTION_READ_TIMEOUT: the timeout in seconds.
// * STREAM_OPTION_WRITE_BUFFER: buffer mode (STREAM_BUFFER_NONE or STREAM_BUFFER_FULL).

$arg2 // int arg2 - If option is
// * STREAM_OPTION_BLOCKING: This option is not set.
// * STREAM_OPTION_READ_TIMEOUT: the timeout in microseconds.
// * STREAM_OPTION_WRITE_BUFFER: the requested buffer size.

); // Return Values
// Returns true on success or false on failure. If option is not implemented, false should be returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-set-option.php
// ========== STREAMWRAPPER_STREAM_SET_OPTION - END

// SYNTAX:
// bool streamWrapper::stream_set_option(int $option, int $arg1, int $arg2)

return $return_streamwrapper_stream_set_option; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_SET_OPTION
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_STAT
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve information about a file resource.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_stat() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_stat($streamwrapper)
{
$return_streamwrapper_stream_stat = false;

// ========== STREAMWRAPPER_STREAM_STAT - BEGIN
// ===== ABOUT
// Retrieve information about a file resource
// ===== DESCRIPTION
// This method is called in response to fstat().
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_stat(): array|false
// ===== CODE
$return_streamwrapper_stream_stat = $streamwrapper->stream_stat(

// This function has no parameters.

); // Return Values
// See stat().
// 
// STAT - BEGIN
// stat
// 
// Return Values
// stat() and fstat() result format
// Numeric | Associative | Description
// 0       | dev         | device number ***
// 1       | ino         | inode number ****
// 2       | mode        | inode protection mode *****
// 3       | nlink       | number of links
// 4       | uid         | userid of owner *
// 5       | gid         | groupid of owner *
// 6       | rdev        | device type, if inode device
// 7       | size        | size in bytes
// 8       | atime       | time of last access (Unix timestamp)
// 9       | mtime       | time of last modification (Unix timestamp)
// 10      | ctime       | time of last inode change (Unix timestamp)
// 11      | blksize     | blocksize of filesystem IO **
// 12      | blocks      | number of 512-byte blocks allocated **
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
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/function.stat.php
// STAT - END
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-stat.php
// ========== STREAMWRAPPER_STREAM_STAT - END

// SYNTAX:
// array|false streamWrapper::stream_stat()

return $return_streamwrapper_stream_stat; // array|false
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_STAT
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_TELL
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve the current position of a stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_tell() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_tell($streamwrapper)
{
$return_streamwrapper_stream_tell = 0;

// ========== STREAMWRAPPER_STREAM_TELL - BEGIN
// ===== ABOUT
// Retrieve the current position of a stream
// ===== DESCRIPTION
// This method is called in response to fseek() to determine the current position.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_tell(): int
// ===== CODE
$return_streamwrapper_stream_tell = $streamwrapper->stream_tell(

// This function has no parameters.

); // Return Values
// Should return the current position of the stream.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-tell.php
// ========== STREAMWRAPPER_STREAM_TELL - END

// SYNTAX:
// int streamWrapper::stream_tell()

return $return_streamwrapper_stream_tell; // int
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_TELL
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_TRUNCATE
// ============================== OFFLINE
// ============================== ABOUT
// Truncate stream.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_truncate() - PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_streams_streamwrapper_stream_truncate($streamwrapper, $new_size)
{
$return_streamwrapper_stream_truncate = false;

// ========== STREAMWRAPPER_STREAM_TRUNCATE - BEGIN
// ===== ABOUT
// Truncate stream
// ===== DESCRIPTION
// Will respond to truncation, e.g., through ftruncate().
// ===== SUPPORTED
// PHP_5 >= PHP_5_4_0, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_truncate(int $new_size): bool
// ===== CODE
$return_streamwrapper_stream_truncate = $streamwrapper->stream_truncate(

$new_size // int new_size - The new size.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-truncate.php
// ========== STREAMWRAPPER_STREAM_TRUNCATE - END

// SYNTAX:
// bool streamWrapper::stream_truncate(int $new_size)

return $return_streamwrapper_stream_truncate; // bool
}
*/
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_TRUNCATE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_WRITE
// ============================== PUBLIC
// ============================== ABOUT
// Write to stream.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING SUBCLASSES (1)
// streamWrapper::stream_write() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_stream_write($streamwrapper, $data)
{
$return_streamwrapper_stream_write = 0;

// ========== STREAMWRAPPER_STREAM_WRITE - BEGIN
// ===== ABOUT
// Write to stream
// ===== DESCRIPTION
// This method is called in response to fwrite().
// Note: Remember to update the current position of the stream by number of bytes that were successfully written.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::stream_write(string $data): int
// ===== CODE
$return_streamwrapper_stream_write = $streamwrapper->stream_write(

$data // string data - Should be stored into the underlying stream.
// Note: If there is not enough room in the underlying stream, store as much as possible.

); // Return Values
// Should return the number of bytes that were successfully stored, or 0 if none could be stored.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// Note: If the return value is greater the length of data, E_WARNING will be emitted and the return value will truncated to its length.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-20)
// URL: https://www.php.net/manual/en/streamwrapper.stream-write.php
// ========== STREAMWRAPPER_STREAM_WRITE - END

// SYNTAX:
// int streamWrapper::stream_write(string $data)

return $return_streamwrapper_stream_write; // int
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_STREAM_WRITE
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_UNLINK
// ============================== PUBLIC
// ============================== ABOUT
// Delete a file.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// streamWrapper::unlink() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_unlink($streamwrapper, $path)
{
$return_streamwrapper_unlink = false;

// ========== STREAMWRAPPER_UNLINK - BEGIN
// ===== ABOUT
// Delete a file
// ===== DESCRIPTION
// This method is called in response to unlink().
// Note: In order for the appropriate error message to be returned this method should not be defined if the wrapper does not support removing files.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::unlink(string $path): bool
// ===== CODE
$return_streamwrapper_unlink = $streamwrapper->unlink(

$path // string path - The file URL which should be deleted.

); // Return Values
// Returns true on success or false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// Notes
// Note: The streamWrapper::$context property is updated if a valid context is passed to the caller function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-15)
// URL: https://www.php.net/manual/en/streamwrapper.unlink.php
// ========== STREAMWRAPPER_UNLINK - END

// SYNTAX:
// bool streamWrapper::unlink(string $path)

return $return_streamwrapper_unlink; // bool
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_UNLINK
// ==============================


// ============================== BEGIN
// PHP_BASIC_STREAMS_STREAMWRAPPER_URL_STAT
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve information about a file.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// streamWrapper::url_stat() - PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_streams_streamwrapper_url_stat($path, $flags)
{
$return_streamwrapper_url_stat = false;

// ========== STREAMWRAPPER_URL_STAT - BEGIN
// ===== ABOUT
// Retrieve information about a file
// ===== DESCRIPTION
// This method is called in response to all stat() related functions, such as:
// * copy()
// * fileperms()
// * fileinode()
// * filesize()
// * fileowner()
// * filegroup()
// * fileatime()
// * filemtime()
// * filectime()
// * filetype()
// * is_writable()
// * is_readable()
// * is_executable()
// * is_file()
// * is_dir()
// * is_link()
// * file_exists()
// * lstat()
// * stat()
// * SplFileInfo::getPerms()
// * SplFileInfo::getInode()
// * SplFileInfo::getSize()
// * SplFileInfo::getOwner()
// * SplFileInfo::getGroup()
// * SplFileInfo::getATime()
// * SplFileInfo::getMTime()
// * SplFileInfo::getCTime()
// * SplFileInfo::getType()
// * SplFileInfo::isWritable()
// * SplFileInfo::isReadable()
// * SplFileInfo::isExecutable()
// * SplFileInfo::isFile()
// * SplFileInfo::isDir()
// * SplFileInfo::isLink()
// * RecursiveDirectoryIterator::hasChildren()
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public streamWrapper::url_stat(string $path, int $flags): array|false
// ===== CODE
$return_streamwrapper_url_stat = $streamwrapper->url_stat(

$path, // string path - The file path or URL to stat. Note that in the case of a URL, it must be a :// delimited URL. Other URL forms are not supported.

$flags // int flags - Holds additional flags set by the streams API. It can hold one or more of the following values OR'd together.
// Flag                  - Description
// STREAM_URL_STAT_LINK  - For resources with the ability to link to other resource (such as an HTTP Location: forward, or a filesystem symlink). This flag specified that only information about the link itself should be returned, not the resource pointed to by the link. This flag is set in response to calls to lstat(), is_link(), or filetype().
// STREAM_URL_STAT_QUIET - If this flag is set, your wrapper should not raise any errors. If this flag is not set, you are responsible for reporting errors using the trigger_error() function during stating of the path.

); // Return Values
// Should return an array with the same elements as stat() does. Unknown or unavailable values should be set to a rational value (usually 0). Special attention should be payed to mode as documented under stat(). Should return false on failure.
// 
// Errors/Exceptions
// Emits E_WARNING if call to this method fails (i.e. not implemented).
// 
// Notes
// Note: The streamWrapper::$context property is updated if a valid context is passed to the caller function.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-15)
// URL: https://www.php.net/manual/en/streamwrapper.url-stat.php
// ========== STREAMWRAPPER_URL_STAT - END

// SYNTAX:
// array|false streamWrapper::url_stat(string $path, int $flags)

return $return_streamwrapper_url_stat; // array|false
}
// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER_URL_STAT
// ==============================


// ============================== END
// PHP_BASIC_STREAMS_STREAMWRAPPER
// ==============================


// ============================== END
//       PHP_BASIC_STREAMS       
// ==============================
?>