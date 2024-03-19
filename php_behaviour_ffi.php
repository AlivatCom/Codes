<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_FFI - BEGIN
// PHP_BEHAVIOUR_FFI_FFI - FFI\CData|FFI|int|FFI\CType|array|string|float|bool|null|void _ADDR, _ALIGNOF, _ARRAYTYPE, _CAST, _CDEF, _FREE, _ISNULL, _LOAD, _MEMCMP, _MEMCPY, _MEMSET, _NEW, _SCOPE, _SIZEOF, _STRING, _TYPE, _TYPEOF
// PHP_BEHAVIOUR_FFI_FFICTYPE - int|FFI\CType|string|array _GETNAME
// PHP_BEHAVIOUR_FFI - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== INSTALLATION
// NOT_BUNDLED (This extension requires the > libffi library to be installed.)
// ============================== USING FUNCTIONS (0)
// ============================== USING CLASSES (2)
// PHP_BEHAVIOUR_FFI_FFI - PHP_7 - PHP_8
// PHP_BEHAVIOUR_FFI_FFICTYPE - PHP_7 - PHP_8
// ============================== USING DATA_TYPES (10)
// FFI\CData - PHP_7 >= PHP_7_4_0, PHP_8
// FFI - PHP_7 >= PHP_7_4_0, PHP_8
// int
// FFI\CType - PHP_7 >= PHP_7_4_0, PHP_8
// array
// string
// float
// bool
// null
// void
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//       PHP_BEHAVIOUR_FFI       
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / FFI - Foreign Function Interface
// URL: https://www.php.net/manual/en/book.ffi.php
// ============================== DESCRIPTION
// FOREIGN_FUNCTION_INTERFACE
// 
// FOREIGN_FUNCTION_INTERFACE - BEGIN
// Foreign Function Interface
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// MAIN_INTERFACE_TO_C_CODE_AND_DATA
// C_DATA_HANDLES
// C_TYPE_HANDLES
// FFI_EXCEPTIONS
// FFI_PARSER_EXCEPTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// This extension allows the loading of shared libraries (.DLL or .so), calling of C functions and accessing of C data structures in pure PHP, without having to have deep knowledge of the Zend extension API, and without having to learn a third “intermediate” language. The public API is implemented as a single class FFI with several static methods (some of them may be called dynamically), and overloaded object methods, which perform the actual interaction with C data.
// Caution: FFI is dangerous, since it allows to interface with the system on a very low level. The FFI extension should only be used by developers having a working knowledge of C and the used C APIs. To minimize the risk, the FFI API usage may be restricted with the ffi.enable php.ini directive.
// Note: The FFI extension does not render the classic PHP extension API obsolete; it is merely provided for ad-hoc interfacing with C functions and data structures.
// Tip: Currently, accessing FFI data structures is significantly (about 2 times) slower than accessing native PHP arrays and objects. Therefore, it makes no sense to use the FFI extension for speed; however, it may make sense to use it to reduce memory consumption.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/intro.ffi.php
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
// This extension requires the > libffi library to be installed.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// To enable the FFI extension, PHP has to be configured with --with-ffi.
// Windows users have to include php_ffi.dll into php.ini to enable the FFI extension.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// FFI Configure Options
// Name        | Default   | Changeable     | Changelog
// ffi.enable  | "preload" | PHP_INI_SYSTEM |
// ffi.preload | ""        | PHP_INI_SYSTEM |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// ffi.enable string  - Allows enabling ("true") or disabling ("false") FFI API usage, or restricting it only to the CLI SAPI and preloaded files ("preload").
// The FFI API restrictions only affect the FFI class, but not overloaded functions of FFI\CData objects. This means that it is possible to create some FFI\CData objects in preloaded files, and then to use these directly in PHP scripts.
// ffi.preload string - Allows preloading of FFI bindings during startup, which is not possible with FFI::load() if opcache.preload_user is set. This directive accepts a DIRECTORY_SEPARATOR delimited list of filenames. The preloaded bindings can be accessed by calling FFI::scope().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// This extension has no constants defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// BASIC_FFI_USAGE
// PHP_CALLBACKS
// A_COMPLETE_PHP_FFI_PRELOADING_EXAMPLE
// 
// BASIC_FFI_USAGE - BEGIN
// Basic FFI usage
// 
// Before diving into the details of the FFI API, lets take a look at a few examples demonstrating the simplicity of the FFI API usage for regular tasks.
// Note: Some of these examples require libc.so.6 and as such will not work on systems where it is not available.
// 
// [example]
// Example #1 Calling a function from shared library
// [php]
// // create FFI object, loading libc and exporting function printf()
// $ffi = FFI::cdef(
//     "int printf(const char *format, ...);", // this is a regular C declaration
//     "libc.so.6");
// // call C's printf()
// $ffi->printf("Hello %s!\n", "world");
// [/php]
// The above example will output:
// [result]
// Hello world!
// [/result]
// Note: Note that some C functions need specific calling conventions, e.g. __fastcall, __stdcall or ,__vectorcall.
// [/example]
// [example]
// Example #2 Calling a function, returning a structure through an argument
// [php]
// // create gettimeofday() binding
// $ffi = FFI::cdef("
//     typedef unsigned int time_t;
//     typedef unsigned int suseconds_t;
//  
//     struct timeval {
//         time_t      tv_sec;
//         suseconds_t tv_usec;
//     };
//  
//     struct timezone {
//         int tz_minuteswest;
//         int tz_dsttime;
//     };
//  
//     int gettimeofday(struct timeval *tv, struct timezone *tz);    
// ", "libc.so.6");
// // create C data structures
// $tv = $ffi->new("struct timeval");
// $tz = $ffi->new("struct timezone");
// // call C's gettimeofday()
// var_dump($ffi->gettimeofday(FFI::addr($tv), FFI::addr($tz)));
// // access field of C data structure
// var_dump($tv->tv_sec);
// // print the whole C data structure
// var_dump($tz);
// [/php]
// The above example will output something similar to:
// [result]
// int(0)
// int(1555946835)
// object(FFI\CData:struct timezone)#3 (2) {
//   ["tz_minuteswest"]=>
//   int(0)
//   ["tz_dsttime"]=>
//   int(0)
// }
// [/result]
// [/example]
// [example]
// Example #3 Accessing existing C variables
// [php]
// // create FFI object, loading libc and exporting errno variable
// $ffi = FFI::cdef(
//     "int errno;", // this is a regular C declaration
//     "libc.so.6");
// // print C's errno
// var_dump($ffi->errno);
// [/php]
// The above example will output:
// [result]
// int(0)
// [/result]
// [/example]
// [example]
// Example #4 Creating and Modifying C variables
// [php]
// // create a new C int variable
// $x = FFI::new("int");
// var_dump($x->cdata);
// 
// // simple assignment
// $x->cdata = 5;
// var_dump($x->cdata);
// 
// // compound assignment
// $x->cdata += 2;
// var_dump($x->cdata);
// [/php]
// The above example will output:
// [result]
// int(0)
// int(5)
// int(7)
// [/result]
// [/example]
// [example]
// Example #5 Working with C arrays
// [php]
// // create C data structure
// $a = FFI::new("long[1024]");
// // work with it like with a regular PHP array
// for ($i = 0; $i < count($a); $i++) {
//     $a[$i] = $i;
// }
// var_dump($a[25]);
// $sum = 0;
// foreach ($a as $n) {
//     $sum += $n;
// }
// var_dump($sum);
// var_dump(count($a));
// var_dump(FFI::sizeof($a));
// [/php]
// The above example will output:
// [result]
// int(25)
// int(523776)
// int(1024)
// int(8192)
// [/result]
// [/example]
// [example]
// Example #6 Working with C enums
// [php]
// $a = FFI::cdef('typedef enum _zend_ffi_symbol_kind {
//     ZEND_FFI_SYM_TYPE,
//     ZEND_FFI_SYM_CONST = 2,
//     ZEND_FFI_SYM_VAR,
//     ZEND_FFI_SYM_FUNC
// } zend_ffi_symbol_kind;
// ');
// var_dump($a->ZEND_FFI_SYM_TYPE);
// var_dump($a->ZEND_FFI_SYM_CONST);
// var_dump($a->ZEND_FFI_SYM_VAR);
// [/php]
// The above example will output:
// [result]
// int(0)
// int(2)
// int(3)
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.examples-basic.php
// BASIC_FFI_USAGE - END
// 
// PHP_CALLBACKS - BEGIN
// PHP Callbacks
// 
// [example]
// It is possible to assign a PHP closure to a native variable of function pointer type or to pass it as a function argument:
// [php]
// $zend = FFI::cdef("
//     typedef int (*zend_write_func_t)(const char *str, size_t str_length);
//     extern zend_write_func_t zend_write;
// ");
//  
// echo "Hello World 1!\n";
//  
// $orig_zend_write = clone $zend->zend_write;
// $zend->zend_write = function($str, $len) {
//     global $orig_zend_write;
//     $orig_zend_write("{\n\t", 3);
//     $ret = $orig_zend_write($str, $len);
//     $orig_zend_write("}\n", 2);
//     return $ret;
// };
// echo "Hello World 2!\n";
// $zend->zend_write = $orig_zend_write;
// echo "Hello World 3!\n";
// [/php]
// The above example will output:
// [result]
// Hello World 1!
// {
//         Hello World 2!
// }
// Hello World 3!
// [/result]
// Although this works, this functionality is not supported on all libffi platforms, is not efficient and leaks resources by the end of request.
// Tip: It is therefore recommended to minimize the usage of PHP callbacks.
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.examples-callback.php
// PHP_CALLBACKS - END
// 
// A_COMPLETE_PHP_FFI_PRELOADING_EXAMPLE - BEGIN
// A Complete PHP/FFI/preloading Example
// 
// [example]
// php.ini
// [code]
// ffi.enable=preload
// opcache.preload=preload.php
// [/code]
// [/example]
// [example]
// preload.php
// [php]
// FFI::load(__DIR__ . "/dummy.h");
// opcache_compile_file(__DIR__ . "/dummy.php");
// [/php]
// [/example]
// [example]
// dummy.h
// [code]
// #define FFI_SCOPE "DUMMY"
// #define FFI_LIB "libc.so.6"
//  
// int printf(const char *format, ...);
// [/code]
// [/example]
// [example]
// dummy.php
// [php]
// final class Dummy {
//     private static $ffi = null;
//     function __construct() {
//         if (is_null(self::$ffi)) {
//             self::$ffi = FFI::scope("DUMMY");
//         }
//     }
//     function printf($format, ...$args) {
//        return (int)self::$ffi->printf($format, ...$args);
//     }
// }
// [/php]
// [/example]
// [example]
// test.php
// [php]
// $d = new Dummy();
// $d->printf("Hello %s!\n", "world");
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.examples-complete.php
// A_COMPLETE_PHP_FFI_PRELOADING_EXAMPLE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/ffi.examples.php
// EXAMPLES - END
// 
// MAIN_INTERFACE_TO_C_CODE_AND_DATA - BEGIN
// Main interface to C code and data
// 
// PHP_7 >= PHP_7_4_0, PHP_8
// 
// Introduction
// Objects of this class are created by the factory methods FFI::cdef(), FFI::load() or FFI::scope(). Defined C variables are made available as properties of the FFI instance, and defined C functions are made available as methods of the FFI instance. Declared C types can be used to create new C data structures using FFI::new() and FFI::type().
// FFI definition parsing and shared library loading may take significant time. It is not useful to do it on each HTTP request in a Web environment. However, it is possible to preload FFI definitions and libraries at PHP startup, and to instantiate FFI objects when necessary. Header files may be extended with special FFI_SCOPE defines (e.g. #define FFI_SCOPE "foo"; the default scope is "C") and then loaded by FFI::load() during preloading. This leads to the creation of a persistent binding, that will be available to all the following requests through FFI::scope(). Refer to the complete PHP/FFI/preloading example for details.
// It is possible to preload more than one C header file into the same scope.
// 
// Class synopsis
// [code]
// final class FFI {
// 
//    /* Constants */
//    public const int __BIGGEST_ALIGNMENT__;
// 
//    /* Methods */
//    public static addr(FFI\CData &$ptr): FFI\CData
//    public static alignof(FFI\CData|FFI\CType &$ptr): int
//    public static arrayType(FFI\CType $type, array $dimensions): FFI\CType
//    public static cast(FFI\CType|string $type, FFI\CData|int|float|bool|null &$ptr): ?FFI\CData
//    public cast(FFI\CType|string $type, FFI\CData|int|float|bool|null &$ptr): ?FFI\CData
//    public static cdef(string $code = "", ?string $lib = null): FFI
//    public static free(FFI\CData &$ptr): void
//    public static isNull(FFI\CData &$ptr): bool
//    public static load(string $filename): ?FFI
//    public static memcmp(string|FFI\CData &$ptr1, string|FFI\CData &$ptr2, int $size): int
//    public static memcpy(FFI\CData &$to, FFI\CData|string &$from, int $size): void
//    public static memset(FFI\CData &$ptr, int $value, int $size): void
//    public static new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): ?FFI\CData
//    public new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): ?FFI\CData
//    public static scope(string $name): FFI
//    public static sizeof(FFI\CData|FFI\CType &$ptr): int
//    public static string(FFI\CData &$ptr, ?int $size = null): string
//    public static type(string $type): ?FFI\CType
//    public type(string $type): ?FFI\CType
//    public static typeof(FFI\CData &$ptr): FFI\CType
// }
// [/code]
// 
// Predefined Constants
// FFI::__BIGGEST_ALIGNMENT__
// 
// Table of Contents
// * FFI::addr      - Creates an unmanaged pointer to C data
// * FFI::alignof   - Gets the alignment
// * FFI::arrayType - Dynamically constructs a new C array type
// * FFI::cast      - Performs a C type cast
// * FFI::cdef      - Creates a new FFI object
// * FFI::free      - Releases an unmanaged data structure
// * FFI::isNull    - Checks whether a FFI\CData is a null pointer
// * FFI::load      - Loads C declarations from a C header file
// * FFI::memcmp    - Compares memory areas
// * FFI::memcpy    - Copies one memory area to another
// * FFI::memset    - Fills a memory area
// * FFI::new       - Creates a C data structure
// * FFI::scope     - Instantiates an FFI object with C declarations parsed during preloading
// * FFI::sizeof    - Gets the size of C data or types
// * FFI::string    - Creates a PHP string from a memory area
// * FFI::type      - Creates an FFI\CType object from a C declaration
// * FFI::typeof    - Gets the FFI\CType of FFI\CData
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.ffi.php
// MAIN_INTERFACE_TO_C_CODE_AND_DATA - END
// 
// C_DATA_HANDLES - BEGIN
// C Data Handles
// 
// PHP_7 >= PHP_7_4_0, PHP_8
// 
// Introduction
// FFI\CData objects can be used in a number of ways as a regular PHP data:
// * C data of scalar types can be read and assigned via the $cdata property, e.g. $x = FFI::new('int'); $x->cdata = 42;
// * C struct and union fields can be accessed as regular PHP object property, e.g. $cdata->field
// * C array elements can be accessed as regular PHP array elements, e.g. $cdata[$offset]
// * C arrays can be iterated using foreach statements.
// * C arrays can be used as arguments of count().
// * C pointers can be dereferenced as arrays, e.g. $cdata[0]
// * C pointers can be compared using regular comparison operators (<, <=, ==, !=, >=, >).
// * C pointers can be incremented and decremented using regular +/-/ ++/–- operations, e.g. $cdata += 5
// * C pointers can be subtracted from another using regular - operations.
// * C pointers to functions can be called as a regular PHP closure, e.g. $cdata()
// * Any C data can be duplicated using the clone operator, e.g. $cdata2 = clone $cdata;
// * Any C data can be visualized using var_dump(), print_r(), etc.
// Note: Notable limitations are that FFI\CData instances do not support isset(), empty() and unset(), and that wrapped C structs and unions do not implement Traversable.
// 
// Class synopsis
// [code]
// final class FFI\CData {
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.ffi-cdata.php
// C_DATA_HANDLES - END
// 
// C_TYPE_HANDLES - BEGIN
// C Type Handles
// 
// PHP_7 >= PHP_7_4_0, PHP_8
// 
// Introduction
// 
// Class synopsis
// [code]
// final class FFI\CType {
// 
//    /* Constants */
//    public const int TYPE_VOID;
//    public const int TYPE_FLOAT;
//    public const int TYPE_DOUBLE;
//    public const int TYPE_LONGDOUBLE;
//    public const int TYPE_UINT8;
//    public const int TYPE_SINT8;
//    public const int TYPE_UINT16;
//    public const int TYPE_SINT16;
//    public const int TYPE_UINT32;
//    public const int TYPE_SINT32;
//    public const int TYPE_UINT64;
//    public const int TYPE_SINT64;
//    public const int TYPE_ENUM;
//    public const int TYPE_BOOL;
//    public const int TYPE_CHAR;
//    public const int TYPE_POINTER;
//    public const int TYPE_FUNC;
//    public const int TYPE_ARRAY;
//    public const int TYPE_STRUCT;
//    public const int ATTR_CONST;
//    public const int ATTR_INCOMPLETE_TAG;
//    public const int ATTR_VARIADIC;
//    public const int ATTR_INCOMPLETE_ARRAY;
//    public const int ATTR_VLA;
//    public const int ATTR_UNION;
//    public const int ATTR_PACKED;
//    public const int ATTR_MS_STRUCT;
//    public const int ATTR_GCC_STRUCT;
//    public const int ABI_DEFAULT;
//    public const int ABI_CDECL;
//    public const int ABI_FASTCALL;
//    public const int ABI_THISCALL;
//    public const int ABI_STDCALL;
//    public const int ABI_PASCAL;
//    public const int ABI_REGISTER;
//    public const int ABI_MS;
//    public const int ABI_SYSV;
//    public const int ABI_VECTORCALL;
// 
//    /* Methods */
//    public getAlignment(): int
//    public getArrayElementType(): FFI\CType
//    public getArrayLength(): int
//    public getAttributes(): int
//    public getEnumKind(): int
//    public getFuncABI(): int
//    public getFuncParameterCount(): int
//    public getFuncParameterType(int $index): FFI\CType
//    public getFuncReturnType(): FFI\CType
//    public getKind(): int
//    public getName(): string
//    public getPointerType(): FFI\CType
//    public getSize(): int
//    public getStructFieldNames(): array
//    public getStructFieldOffset(string $name): int
//    public getStructFieldType(string $name): FFI\CType
// }
// [/code]
// 
// Predefined Constants
// FFI\CType::TYPE_VOID
// FFI\CType::TYPE_FLOAT
// FFI\CType::TYPE_DOUBLE
// FFI\CType::TYPE_LONGDOUBLE
// FFI\CType::TYPE_UINT8
// FFI\CType::TYPE_SINT8
// FFI\CType::TYPE_UINT16
// FFI\CType::TYPE_SINT16
// FFI\CType::TYPE_UINT32
// FFI\CType::TYPE_SINT32
// FFI\CType::TYPE_UINT64
// FFI\CType::TYPE_SINT64
// FFI\CType::TYPE_ENUM
// FFI\CType::TYPE_BOOL
// FFI\CType::TYPE_CHAR
// FFI\CType::TYPE_POINTER
// FFI\CType::TYPE_FUNC
// FFI\CType::TYPE_ARRAY
// FFI\CType::TYPE_STRUCT
// FFI\CType::ATTR_CONST
// FFI\CType::ATTR_INCOMPLETE_TAG
// FFI\CType::ATTR_VARIADIC
// FFI\CType::ATTR_INCOMPLETE_ARRAY
// FFI\CType::ATTR_VLA
// FFI\CType::ATTR_UNION
// FFI\CType::ATTR_PACKED
// FFI\CType::ATTR_MS_STRUCT
// FFI\CType::ATTR_GCC_STRUCT
// FFI\CType::ABI_DEFAULT
// FFI\CType::ABI_CDECL
// FFI\CType::ABI_FASTCALL
// FFI\CType::ABI_THISCALL
// FFI\CType::ABI_STDCALL
// FFI\CType::ABI_PASCAL
// FFI\CType::ABI_REGISTER
// FFI\CType::ABI_MS
// FFI\CType::ABI_SYSV
// FFI\CType::ABI_VECTORCALL
// 
// Table of Contents
// * FFI\CType::getAlignment          - Description
// * FFI\CType::getArrayElementType   - Description
// * FFI\CType::getArrayLength        - Description
// * FFI\CType::getAttributes         - Description
// * FFI\CType::getEnumKind           - Description
// * FFI\CType::getFuncABI            - Description
// * FFI\CType::getFuncParameterCount - Description
// * FFI\CType::getFuncParameterType  - Description
// * FFI\CType::getFuncReturnType     - Description
// * FFI\CType::getKind               - Description
// * FFI\CType::getName               - Description
// * FFI\CType::getPointerType        - Description
// * FFI\CType::getSize               - Description
// * FFI\CType::getStructFieldNames   - Description
// * FFI\CType::getStructFieldOffset  - Description
// * FFI\CType::getStructFieldType    - Description
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.ffi-ctype.php
// C_TYPE_HANDLES - END
// 
// FFI_EXCEPTIONS - BEGIN
// FFI Exceptions
// 
// PHP_7 >= PHP_7_4_0, PHP_8
// 
// Introduction
// 
// Class synopsis
// [code]
// class FFI\Exception extends Error {
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
//    public Error::__construct(string $message = "", int $code = 0, ?Throwable $previous = null)
//    final public Error::getMessage(): string
//    final public Error::getPrevious(): ?Throwable
//    final public Error::getCode(): int
//    final public Error::getFile(): string
//    final public Error::getLine(): int
//    final public Error::getTrace(): array
//    final public Error::getTraceAsString(): string
//    public Error::__toString(): string
//    private Error::__clone(): void
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.ffi-exception.php
// FFI_EXCEPTIONS - END
// 
// FFI_PARSER_EXCEPTIONS - BEGIN
// FFI Parser Exceptions
// 
// PHP_7 >= PHP_7_4_0, PHP_8
// 
// Introduction
// 
// Class synopsis
// [code]
// final class FFI\ParserException extends FFI\Exception {
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
//    public Error::__construct(string $message = "", int $code = 0, ?Throwable $previous = null)
//    final public Error::getMessage(): string
//    final public Error::getPrevious(): ?Throwable
//    final public Error::getCode(): int
//    final public Error::getFile(): string
//    final public Error::getLine(): int
//    final public Error::getTrace(): array
//    final public Error::getTraceAsString(): string
//    public Error::__toString(): string
//    private Error::__clone(): void
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.ffi-parserexception.php
// FFI_PARSER_EXCEPTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/book.ffi.php
// FOREIGN_FUNCTION_INTERFACE - END
// ==============================


// ============================== BEGIN
//     PHP_BEHAVIOUR_FFI_FFI     
// ============================== PUBLIC
// PHP_BEHAVIOUR_FFI_FFI_ADDR - FFI\CData php_behaviour_ffi_ffi_addr(FFI $ffi, FFI\CData& $ptr)
// PHP_BEHAVIOUR_FFI_FFI_ALIGNOF - int php_behaviour_ffi_ffi_alignof(FFI $ffi, FFI\CData|FFI\CType& $ptr)
// PHP_BEHAVIOUR_FFI_FFI_ARRAYTYPE - FFI\CType php_behaviour_ffi_ffi_arraytype(FFI $ffi, FFI\CType $type, array $dimensions)
// PHP_BEHAVIOUR_FFI_FFI_CAST - FFI\CData php_behaviour_ffi_ffi_cast(FFI $ffi, FFI\CType|string $type, FFI\CData|int|float|bool|null& $ptr)
// PHP_BEHAVIOUR_FFI_FFI_CDEF - FFI php_behaviour_ffi_ffi_cdef(FFI $ffi, string $code = "", string $lib = null)
// PHP_BEHAVIOUR_FFI_FFI_FREE - void php_behaviour_ffi_ffi_free(FFI $ffi, FFI\CData& $ptr)
// PHP_BEHAVIOUR_FFI_FFI_ISNULL - bool php_behaviour_ffi_ffi_isnull(FFI $ffi, FFI\CData& $ptr)
// PHP_BEHAVIOUR_FFI_FFI_LOAD - FFI php_behaviour_ffi_ffi_load(FFI $ffi, string $filename)
// PHP_BEHAVIOUR_FFI_FFI_MEMCMP - int php_behaviour_ffi_ffi_memcmp(FFI $ffi, string|FFI\CData& $ptr1, string|FFI\CData& $ptr2, int $size)
// PHP_BEHAVIOUR_FFI_FFI_MEMCPY - void php_behaviour_ffi_ffi_memcpy(FFI $ffi, FFI\CData& $to, FFI\CData|string& $from, int $size)
// PHP_BEHAVIOUR_FFI_FFI_MEMSET - void php_behaviour_ffi_ffi_memset(FFI $ffi, FFI\CData& $ptr, int $value, int $size)
// PHP_BEHAVIOUR_FFI_FFI_NEW - FFI\CData php_behaviour_ffi_ffi_new(FFI $ffi, FFI\CType|string $type, bool $owned = true, bool $persistent = false)
// PHP_BEHAVIOUR_FFI_FFI_SCOPE - FFI php_behaviour_ffi_ffi_scope(FFI $ffi, string $name)
// PHP_BEHAVIOUR_FFI_FFI_SIZEOF - int php_behaviour_ffi_ffi_sizeof(FFI $ffi, FFI\CData|FFI\CType& $ptr)
// PHP_BEHAVIOUR_FFI_FFI_STRING - string php_behaviour_ffi_ffi_string(FFI $ffi, FFI\CData& $ptr, int $size)
// PHP_BEHAVIOUR_FFI_FFI_TYPE - FFI\CType php_behaviour_ffi_ffi_type(FFI $ffi, string $type)
// PHP_BEHAVIOUR_FFI_FFI_TYPEOF - FFI\CType php_behaviour_ffi_ffi_typeof(FFI $ffi, FFI\CData& $ptr)
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (17)
// FFI::addr() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::alignof() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::arrayType() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::cast() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::cdef() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::free() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::isNull() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::load() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::memcmp() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::memcpy() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::memset() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::new() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::scope() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::sizeof() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::string() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::type() - PHP_7 >= PHP_7_4_0, PHP_8
// FFI::typeof() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== USING DATA_TYPES (10)
// FFI\CData - PHP_7 >= PHP_7_4_0, PHP_8
// FFI - PHP_7 >= PHP_7_4_0, PHP_8
// int
// FFI\CType - PHP_7 >= PHP_7_4_0, PHP_8
// array
// string
// float
// bool
// null
// void
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_ADDR   
// ============================== PUBLIC
// ============================== ABOUT
// Creates an unmanaged pointer to C data.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::addr() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_addr($ffi, & $ptr)
{
$return_addr_addr = null;

// ========== ADDR_ADDR - BEGIN
// ===== ABOUT
// Creates an unmanaged pointer to C data
// ===== DESCRIPTION
// Creates an unmanaged pointer to the C data represented by the given FFI\CData. The source ptr must survive the resulting pointer. This function is mainly useful to pass arguments to C functions by pointer.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::addr(FFI\CData &$ptr): FFI\CData
// ===== CODE
$return_addr_addr = $ffi->addr(

$ptr // FFI\CData& $ptr

); // Return Values
// Returns the freshly created FFI\CData object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.addr.php
// ========== ADDR_ADDR - END

// SYNTAX:
// FFI\CData FFI::addr(FFI\CData& $ptr)

return $return_addr_addr; // FFI\CData
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_ADDR   
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFI_ALIGNOF 
// ============================== PUBLIC
// ============================== ABOUT
// Gets the alignment.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::alignof() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_alignof($ffi, & $ptr)
{
$return_ffi_alignof = 0;

// ========== FFI_ALIGNOF - BEGIN
// ===== ABOUT
// Gets the alignment
// ===== DESCRIPTION
// public static FFI::alignof(FFI\CData|FFI\CType &$ptr): int
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::alignof(FFI\CData|FFI\CType &$ptr): int
// ===== CODE
$return_ffi_alignof = $ffi->alignof(

$ptr // FFI\CData|FFI\CType& ptr - The handle of the C data or type.

); // Return Values
// Returns the alignment of the given FFI\CData or FFI\CType object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.alignof.php
// ========== FFI_ALIGNOF - END

// SYNTAX:
// int FFI::alignof(FFI\CData|FFI\CType& $ptr)

return $return_ffi_alignof; // int
}
// ============================== END
// PHP_BEHAVIOUR_FFI_FFI_ALIGNOF 
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFI_ARRAYTYPE
// ============================== PUBLIC
// ============================== ABOUT
// Dynamically constructs a new C array type.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::arrayType() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_arraytype($ffi, $type, $dimensions)
{
$return_ffi_arraytype = null;

// ========== FFI_ARRAYTYPE - BEGIN
// ===== ABOUT
// Dynamically constructs a new C array type
// ===== DESCRIPTION
// Dynamically constructs a new C array type with elements of type defined by type, and dimensions specified by dimensions. In the following example $t1 and $t2 are equivalent array types:
// [php]
// $t1 = FFI::type("int[2][3]");
// $t2 = FFI::arrayType(FFI::type("int"), [2, 3]);
// [/php]
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::arrayType(FFI\CType $type, array $dimensions): FFI\CType
// ===== CODE
$return_ffi_arraytype = $ffi->arrayType(

$type, // FFI\CType type - A valid C declaration as string, or an instance of FFI\CType which has already been created.

$dimensions // array dimensions - The dimensions of the type as array.

); // Return Values
// Returns the freshly created FFI\CType object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.arraytype.php
// ========== FFI_ARRAYTYPE - END

// SYNTAX:
// FFI\CType FFI::arrayType(FFI\CType $type, array $dimensions)

return $return_ffi_arraytype; // FFI\CType
}
// ============================== END
// PHP_BEHAVIOUR_FFI_FFI_ARRAYTYPE
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_CAST   
// ============================== PUBLIC
// ============================== ABOUT
// Performs a C type cast.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::cast() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_cast($ffi, $type, & $ptr)
{
$return_ffi_cast = null;

// ========== FFI_CAST - BEGIN
// ===== ABOUT
// Performs a C type cast
// ===== DESCRIPTION
// FFI::cast() creates a new FFI\CData object, that references the same C data structure, but is associated with a different type. The resulting object does not own the C data, and the source ptr must survive the result. The C type may be specified as a string with any valid C type declaration or as FFI\CType object, created before. If this method is called statically, it must only use predefined C type names (e.g. int, char, etc.); if the method is called as instance method, any type declared for the instance is allowed.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::cast(FFI\CType|string $type, FFI\CData|int|float|bool|null &$ptr): ?FFI\CData
// 
// public FFI::cast(FFI\CType|string $type, FFI\CData|int|float|bool|null &$ptr): ?FFI\CData
// ===== CODE
$return_ffi_cast = $ffi->cast(

$type, // FFI\CType|string type - A valid C declaration as string, or an instance of FFI\CType which has already been created.

$ptr // FFI\CData|int|float|bool|null& ptr - The handle of the pointer to a C data structure.

); // Return Values
// Returns the freshly created FFI\CData object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.cast.php
// ========== FFI_CAST - END

// SYNTAX:
// FFI\CData FFI::cast(FFI\CType|string $type, FFI\CData|int|float|bool|null& $ptr)

return $return_ffi_cast; // FFI\CData
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_CAST   
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_CDEF   
// ============================== PUBLIC
// ============================== ABOUT
// Creates a new FFI object.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::cdef() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_cdef($ffi, $code = "", $lib = null)
{
$return_ffi_cdef = null;

// ========== FFI_CDEF - BEGIN
// ===== ABOUT
// Creates a new FFI object
// ===== DESCRIPTION
// Creates a new FFI object.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::cdef(string $code = "", ?string $lib = null): FFI
// ===== CODE
$return_ffi_cdef = $ffi->cdef(

$code, // string code - A string containing a sequence of declarations in regular C language (types, structures, functions, variables, etc). Actually, this string may be copy-pasted from C header files.
// Note: C preprocessor directives are not supported, i.e. #include, #define and CPP macros do not work.

$lib // string lib - The name of a shared library file, to be loaded and linked with the definitions.
// Note: If lib is omitted or null, platforms supporting RTLD_DEFAULT attempt to lookup symbols declared in code in the normal global scope. Other systems will fail to resolve these symbols.

); // Return Values
// Returns the freshly created FFI object.
// 
// Changelog
// Version - Description
// 8.0.0   - lib is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.cdef.php
// ========== FFI_CDEF - END

// SYNTAX:
// FFI FFI::cdef(string $code = "", string $lib = null)

return $return_ffi_cdef; // FFI
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_CDEF   
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_FREE   
// ============================== PUBLIC
// ============================== ABOUT
// Releases an unmanaged data structure.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::free() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_free($ffi, & $ptr)
{

// ========== FFI_FREE - BEGIN
// ===== ABOUT
// Releases an unmanaged data structure
// ===== DESCRIPTION
// Manually releases a previously created unmanaged data structure.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::free(FFI\CData &$ptr): void
// ===== CODE
$ffi->free(

$ptr // FFI\CData& ptr - The handle of the unmanaged pointer to a C data structure.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.free.php
// ========== FFI_FREE - END

// SYNTAX:
// void FFI::free(FFI\CData& $ptr)

// Return: void
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_FREE   
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_ISNULL  
// ============================== PUBLIC
// ============================== ABOUT
// Checks whether a FFI\CData is a null pointer.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::isNull() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_isnull($ffi, & $ptr)
{
$return_ffi_isnull = false;

// ========== FFI_ISNULL - BEGIN
// ===== ABOUT
// Checks whether a FFI\CData is a null pointer
// ===== DESCRIPTION
// Checks whether a FFI\CData is a null pointer.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::isNull(FFI\CData &$ptr): bool
// ===== CODE
$return_ffi_isnull = $ffi->isNull(

$ptr // FFI\CData& ptr - The handle of the pointer to a C data structure.

); // Return Values
// Returns whether a FFI\CData is a null pointer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.isnull.php
// ========== FFI_ISNULL - END

// SYNTAX:
// bool FFI::isNull(FFI\CData& $ptr)

return $return_ffi_isnull; // bool
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_ISNULL  
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_LOAD   
// ============================== PUBLIC
// ============================== ABOUT
// Loads C declarations from a C header file.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::load() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_load($ffi, $filename)
{
$return_ffi_load = null;

// ========== FFI_LOAD - BEGIN
// ===== ABOUT
// Loads C declarations from a C header file
// ===== DESCRIPTION
// Loads C declarations from a C header file. It is possible to specify shared libraries that should be loaded, using special FFI_LIB defines in the loaded C header file.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::load(string $filename): ?FFI
// ===== CODE
$return_ffi_load = $ffi->load(

$filename // string filename - The name of a C header file.
// C preprocessor directives are not supported, i.e. #include, #define and CPP macros do not work, except for special cases listed below.
// The header file should contain a #define statement for the FFI_SCOPE variable, e.g.: #define FFI_SCOPE "MYLIB". Refer to the class introduction for details.
// The header file may contain a #define statement for the FFI_LIB variable to specify the library it exposes. If it is a system library only the file name is required, e.g.: #define FFI_LIB "libc.so.6". If it is a custom library, a relative path is required, e.g.: #define FFI_LIB "./mylib.so".

); // Return Values
// Returns the freshly created FFI object, or null on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.load.php
// ========== FFI_LOAD - END

// SYNTAX:
// FFI FFI::load(string $filename)

return $return_ffi_load; // FFI
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_LOAD   
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_MEMCMP  
// ============================== PUBLIC
// ============================== ABOUT
// Compares memory areas.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::memcmp() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_memcmp($ffi, & $ptr1, & $ptr2, $size)
{
$return_ffi_memcmp = 0;

// ========== FFI_MEMCMP - BEGIN
// ===== ABOUT
// Compares memory areas
// ===== DESCRIPTION
// Compares size bytes from the memory areas ptr1 and ptr2. Both ptr1 and ptr2 can be any native data structures (FFI\CData) or PHP strings.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::memcmp(string|FFI\CData &$ptr1, string|FFI\CData &$ptr2, int $size): int
// ===== CODE
$return_ffi_memcmp = $ffi->memcmp(

$ptr1, // string|FFI\CData& ptr1 - The start of one memory area.

$ptr2, // string|FFI\CData& ptr2 - The start of another memory area.

$size // int size - The number of bytes to compare.

); // Return Values
// Returns a value less than 0 if the contents of the memory area starting at ptr1 are considered less than the contents of the memory area starting at ptr2, a value greater than 0 if the contents of the first memory area are considered greater than the second, and 0 if they are equal.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.memcmp.php
// ========== FFI_MEMCMP - END

// SYNTAX:
// int FFI::memcmp(string|FFI\CData& $ptr1, string|FFI\CData& $ptr2, int $size)

return $return_ffi_memcmp; // int
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_MEMCMP  
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_MEMCPY  
// ============================== PUBLIC
// ============================== ABOUT
// Copies one memory area to another.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::memcpy() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_memcpy($ffi, & $to, & $from, $size)
{

// ========== FFI_MEMCPY - BEGIN
// ===== ABOUT
// Copies one memory area to another
// ===== DESCRIPTION
// Copies size bytes from the memory area from to the memory area to.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::memcpy(FFI\CData &$to, FFI\CData|string &$from, int $size): void
// ===== CODE
$ffi->memcpy(

$to, // FFI\CData& to - The start of the memory area to copy to.

$from, // FFI\CData|string& from - The start of the memory area to copy from.

$size // int size - The number of bytes to copy.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.memcpy.php
// ========== FFI_MEMCPY - END

// SYNTAX:
// void FFI::memcpy(FFI\CData& $to, FFI\CData|string& $from, int $size)

// Return: void
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_MEMCPY  
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_MEMSET  
// ============================== PUBLIC
// ============================== ABOUT
// Fills a memory area.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::memset() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_memset($ffi, & $ptr, $value, $size)
{

// ========== FFI_MEMSET - BEGIN
// ===== ABOUT
// Fills a memory area
// ===== DESCRIPTION
// Fills size bytes of the memory area pointed to by ptr with the given byte value.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::memset(FFI\CData &$ptr, int $value, int $size): void
// ===== CODE
$ffi->memset(

$ptr, // FFI\CData& ptr - The start of the memory area to fill.

$value, // int value - The byte to fill with.

$size // int size - The number of bytes to fill.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.memset.php
// ========== FFI_MEMSET - END

// SYNTAX:
// void FFI::memset(FFI\CData& $ptr, int $value, int $size)

// Return: void
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_MEMSET  
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_NEW   
// ============================== PUBLIC
// ============================== ABOUT
// Creates a C data structure.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::new() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_new($ffi, $type, $owned = true, $persistent = false)
{
$return_ffi_new = null;

// ========== FFI_NEW - BEGIN
// ===== ABOUT
// Creates a C data structure
// ===== DESCRIPTION
// Creates a native data structure of the given C type. If this method is called statically, it must only use predefined C type names (e.g. int, char, etc.); if the method is called as instance method, any type declared for the instance is allowed.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): ?FFI\CData
// 
// public FFI::new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): ?FFI\CData
// ===== CODE
$return_ffi_new = $ffi->new(

$type, // FFI\CType|string type - type is a valid C declaration as string, or an instance of FFI\CType which has already been created.

$owned, // bool owned - Whether to create owned (i.e. managed) or unmanaged data. Managed data lives together with the returned FFI\CData object, and is released when the last reference to that object is released by regular PHP reference counting or GC. Unmanaged data should be released by calling FFI::free(), when no longer needed.

$persistent // bool persistent - Whether to allocate the C data structure permanently on the system heap (using malloc()), or on the PHP request heap (using emalloc()).

); // Return Values
// Returns the freshly created FFI\CData object, or null on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.new.php
// ========== FFI_NEW - END

// SYNTAX:
// FFI\CData FFI::new(FFI\CType|string $type, bool $owned = true, bool $persistent = false)

return $return_ffi_new; // FFI\CData
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_NEW   
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_SCOPE  
// ============================== PUBLIC
// ============================== ABOUT
// Instantiates an FFI object with C declarations parsed during preloading.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::scope() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_scope($ffi, $name)
{
$return_ffi_scope = null;

// ========== FFI_SCOPE - BEGIN
// ===== ABOUT
// Instantiates an FFI object with C declarations parsed during preloading
// ===== DESCRIPTION
// Instantiates an FFI object with C declarations parsed during preloading.
// The FFI::scope() method is safe to call multiple times for the same scope. Multiple references to the same scope may be loaded at the same time.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::scope(string $name): FFI
// ===== CODE
$return_ffi_scope = $ffi->scope(

$name // string name - The scope name defined by a special FFI_SCOPE define.

); // Return Values
// Returns the freshly created FFI object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.scope.php
// ========== FFI_SCOPE - END

// SYNTAX:
// FFI FFI::scope(string $name)

return $return_ffi_scope; // FFI
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_SCOPE  
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_SIZEOF  
// ============================== PUBLIC
// ============================== ABOUT
// Gets the size of C data or types.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::sizeof() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_sizeof($ffi, & $ptr)
{
$return_ffi_sizeof = 0;

// ========== FFI_SIZEOF - BEGIN
// ===== ABOUT
// Gets the size of C data or types
// ===== DESCRIPTION
// Returns the size of the given FFI\CData or FFI\CType object.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::sizeof(FFI\CData|FFI\CType &$ptr): int
// ===== CODE
$return_ffi_sizeof = $ffi->sizeof(

$ptr // FFI\CData|FFI\CType& ptr - The handle of the C data or type.

); // Return Values
// The size of the memory area pointed at by ptr.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.sizeof.php
// ========== FFI_SIZEOF - END

// SYNTAX:
// int FFI::sizeof(FFI\CData|FFI\CType& $ptr)

return $return_ffi_sizeof; // int
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_SIZEOF  
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_STRING  
// ============================== PUBLIC
// ============================== ABOUT
// Creates a PHP string from a memory area.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::string() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_string($ffi, & $ptr, $size)
{
$return_ffi_string = null;

// ========== FFI_STRING - BEGIN
// ===== ABOUT
// Creates a PHP string from a memory area
// ===== DESCRIPTION
// Creates a PHP string from size bytes of the memory area pointed to by ptr.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::string(FFI\CData &$ptr, ?int $size = null): string
// ===== CODE
$return_ffi_string = $ffi->string(

$ptr, // FFI\CData& ptr - The start of the memory area from which to create a string.

$size // int size - The number of bytes to copy to the string. If size is omitted or null, ptr must be a zero terminated array of C char.

); // Return Values
// The freshly created PHP string.
// 
// Changelog
// Version - Description
// 8.0.0   - size is nullable now; previously, its default was 0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.string.php
// ========== FFI_STRING - END

// SYNTAX:
// string FFI::string(FFI\CData& $ptr, int $size)

return $return_ffi_string; // string
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_STRING  
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFI_TYPE   
// ============================== PUBLIC
// ============================== ABOUT
// Creates an FFI\CType object from a C declaration.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::type() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_type($ffi, $type)
{
$return_ffi_type = null;

// ========== FFI_TYPE - BEGIN
// ===== ABOUT
// Creates an FFI\CType object from a C declaration
// ===== DESCRIPTION
// This function creates and returns a FFI\CType object for the given string containing a C type declaration. If this method is called statically, it must only use predefined C type names (e.g. int, char, etc.); if the method is called as instance method, any type declared for the instance is allowed.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::type(string $type): ?FFI\CType
// 
// public FFI::type(string $type): ?FFI\CType
// ===== CODE
$return_ffi_type = $ffi->type(

$type // string type - A valid C declaration as string.

); // Return Values
// Returns the freshly created FFI\CType object, or null on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.type.php
// ========== FFI_TYPE - END

// SYNTAX:
// FFI\CType FFI::type(string $type)

return $return_ffi_type; // FFI\CType
}
// ============================== END
//   PHP_BEHAVIOUR_FFI_FFI_TYPE   
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_FFI_FFI_TYPEOF  
// ============================== PUBLIC
// ============================== ABOUT
// Gets the FFI\CType of FFI\CData.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI::typeof() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffi_typeof($ffi, & $ptr)
{
$return_ffi_typeof = null;

// ========== FFI_TYPEOF - BEGIN
// ===== ABOUT
// Gets the FFI\CType of FFI\CData
// ===== DESCRIPTION
// Gets the FFI\CType object representing the type of the given FFI\CData object.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public static FFI::typeof(FFI\CData &$ptr): FFI\CType
// ===== CODE
$return_ffi_typeof = $ffi->typeof(

$ptr // FFI\CData& ptr - The handle of the pointer to a C data structure.

); // Return Values
// Returns the FFI\CType object representing the type of the given FFI\CData object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi.typeof.php
// ========== FFI_TYPEOF - END

// SYNTAX:
// FFI\CType FFI::typeof(FFI\CData& $ptr)

return $return_ffi_typeof; // FFI\CType
}
// ============================== END
//  PHP_BEHAVIOUR_FFI_FFI_TYPEOF  
// ==============================


// ============================== END
//     PHP_BEHAVIOUR_FFI_FFI     
// ==============================


// ============================== BEGIN
//   PHP_BEHAVIOUR_FFI_FFICTYPE   
// ============================== PUBLIC
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETALIGNMENT - int php_behaviour_ffi_ffictype_getalignment(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETARRAYELEMENTTYPE - FFI\CType php_behaviour_ffi_ffictype_getarrayelementtype(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETARRAYLENGTH - int php_behaviour_ffi_ffictype_getarraylength(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETATTRIBUTES - int php_behaviour_ffi_ffictype_getattributes(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETENUMKIND - int php_behaviour_ffi_ffictype_getenumkind(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCABI - int php_behaviour_ffi_ffictype_getfuncabi(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCPARAMETERCOUNT - int php_behaviour_ffi_ffictype_getfuncparametercount(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCPARAMETERTYPE - FFI\CType php_behaviour_ffi_ffictype_getfuncparametertype(FFI\CType $ffictype, int $index)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCRETURNTYPE - FFI\CType php_behaviour_ffi_ffictype_getfuncreturntype(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETKIND - int php_behaviour_ffi_ffictype_getkind(FFI\CType $ffictype)
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETNAME - string php_behaviour_ffi_ffictype_getname(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETPOINTERTYPE - FFI\CType php_behaviour_ffi_ffictype_getpointertype(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETSIZE - int php_behaviour_ffi_ffictype_getsize(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDNAMES - array php_behaviour_ffi_ffictype_getstructfieldnames(FFI\CType $ffictype)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDOFFSET - int php_behaviour_ffi_ffictype_getstructfieldoffset(FFI\CType $ffictype, string $name)
// OFFLINE | PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDTYPE - FFI\CType php_behaviour_ffi_ffictype_getstructfieldtype(FFI\CType $ffictype, string $name)
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (16)
// OFFLINE | FFI\CType::getAlignment() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getArrayElementType() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getArrayLength() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getAttributes() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getEnumKind() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getFuncABI() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getFuncParameterCount() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getFuncParameterType() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getFuncReturnType() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getKind() - PHP_8 >= PHP_8_1_0
// FFI\CType::getName() - PHP_7 >= PHP_7_4_0, PHP_8
// OFFLINE | FFI\CType::getPointerType() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getSize() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getStructFieldNames() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getStructFieldOffset() - PHP_8 >= PHP_8_1_0
// OFFLINE | FFI\CType::getStructFieldType() - PHP_8 >= PHP_8_1_0
// ============================== USING DATA_TYPES (4)
// int
// FFI\CType - PHP_7 >= PHP_7_4_0, PHP_8
// string
// array
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETALIGNMENT
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getAlignment() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getalignment($ffictype)
{
$return_ffictype_getalignment = 0;

// ========== FFICTYPE_GETALIGNMENT - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getAlignment(): int
// ===== CODE
$return_ffictype_getalignment = $ffictype->getAlignment(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getalignment.php
// ========== FFICTYPE_GETALIGNMENT - END

// SYNTAX:
// int FFI\CType::getAlignment()

return $return_ffictype_getalignment; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETALIGNMENT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETARRAYELEMENTTYPE
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getArrayElementType() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getarrayelementtype($ffictype)
{
$return_ffictype_getarrayelementtype = null;

// ========== FFICTYPE_GETARRAYELEMENTTYPE - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getArrayElementType(): FFI\CType
// ===== CODE
$return_ffictype_getarrayelementtype = $ffictype->getArrayElementType(

// This function has no parameters.

); // Return Values
// FFI\CType
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getarrayelementtype.php
// ========== FFICTYPE_GETARRAYELEMENTTYPE - END

// SYNTAX:
// FFI\CType FFI\CType::getArrayElementType()

return $return_ffictype_getarrayelementtype; // FFI\CType
}
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETARRAYELEMENTTYPE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETARRAYLENGTH
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getArrayLength() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getarraylength($ffictype)
{
$return_ffictype_getarraylength = 0;

// ========== FFICTYPE_GETARRAYLENGTH - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getArrayLength(): int
// ===== CODE
$return_ffictype_getarraylength = $ffictype->getArrayLength(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getarraylength.php
// ========== FFICTYPE_GETARRAYLENGTH - END

// SYNTAX:
// int FFI\CType::getArrayLength()

return $return_ffictype_getarraylength; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETARRAYLENGTH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETATTRIBUTES
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getAttributes() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getattributes($ffictype)
{
$return_ffictype_getattributes = 0;

// ========== FFICTYPE_GETATTRIBUTES - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getAttributes(): int
// ===== CODE
$return_ffictype_getattributes = $ffictype->getAttributes(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getattributes.php
// ========== FFICTYPE_GETATTRIBUTES - END

// SYNTAX:
// int FFI\CType::getAttributes()

return $return_ffictype_getattributes; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETATTRIBUTES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETENUMKIND
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getEnumKind() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getenumkind($ffictype)
{
$return_ffictype_getenumkind = 0;

// ========== FFICTYPE_GETENUMKIND - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getEnumKind(): int
// ===== CODE
$return_ffictype_getenumkind = $ffictype->getEnumKind(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getenumkind.php
// ========== FFICTYPE_GETENUMKIND - END

// SYNTAX:
// int FFI\CType::getEnumKind()

return $return_ffictype_getenumkind; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETENUMKIND
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCABI
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getFuncABI() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getfuncabi($ffictype)
{
$return_ffictype_getfuncabi = 0;

// ========== FFICTYPE_GETFUNCABI - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getFuncABI(): int
// ===== CODE
$return_ffictype_getfuncabi = $ffictype->getFuncABI(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getfuncabi.php
// ========== FFICTYPE_GETFUNCABI - END

// SYNTAX:
// int FFI\CType::getFuncABI()

return $return_ffictype_getfuncabi; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCABI
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCPARAMETERCOUNT
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getFuncParameterCount() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getfuncparametercount($ffictype)
{
$return_ffictype_getfuncparametercount = 0;

// ========== FFICTYPE_GETFUNCPARAMETERCOUNT - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getFuncParameterCount(): int
// ===== CODE
$return_ffictype_getfuncparametercount = $ffictype->getFuncParameterCount(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getfuncparametercount.php
// ========== FFICTYPE_GETFUNCPARAMETERCOUNT - END

// SYNTAX:
// int FFI\CType::getFuncParameterCount()

return $return_ffictype_getfuncparametercount; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCPARAMETERCOUNT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCPARAMETERTYPE
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getFuncParameterType() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getfuncparametertype($ffictype, $index)
{
$return_ffictype_getfuncparametertype = null;

// ========== FFICTYPE_GETFUNCPARAMETERTYPE - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getFuncParameterType(int $index): FFI\CType
// ===== CODE
$return_ffictype_getfuncparametertype = $ffictype->getFuncParameterType(

$index // int $index

); // Return Values
// FFI\CType
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getfuncparametertype.php
// ========== FFICTYPE_GETFUNCPARAMETERTYPE - END

// SYNTAX:
// FFI\CType FFI\CType::getFuncParameterType(int $index)

return $return_ffictype_getfuncparametertype; // FFI\CType
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCPARAMETERTYPE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCRETURNTYPE
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getFuncReturnType() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getfuncreturntype($ffictype)
{
$return_ffictype_getfuncreturntype = null;

// ========== FFICTYPE_GETFUNCRETURNTYPE - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getFuncReturnType(): FFI\CType
// ===== CODE
$return_ffictype_getfuncreturntype = $ffictype->getFuncReturnType(

// This function has no parameters.

); // Return Values
// FFI\CType
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getfuncreturntype.php
// ========== FFICTYPE_GETFUNCRETURNTYPE - END

// SYNTAX:
// FFI\CType FFI\CType::getFuncReturnType()

return $return_ffictype_getfuncreturntype; // FFI\CType
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETFUNCRETURNTYPE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETKIND
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getKind() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getkind($ffictype)
{
$return_ffictype_getkind = 0;

// ========== FFICTYPE_GETKIND - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getKind(): int
// ===== CODE
$return_ffictype_getkind = $ffictype->getKind(

// This function has no parameters.

); // Return Value
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getkind.php
// ========== FFICTYPE_GETKIND - END

// SYNTAX:
// int FFI\CType::getKind()

return $return_ffictype_getkind; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETKIND
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETNAME
// ============================== PUBLIC
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getName() - PHP_7 >= PHP_7_4_0, PHP_8
// ============================== CODE
function php_behaviour_ffi_ffictype_getname($ffictype)
{
$return_ffictype_getname = null;

// ========== FFICTYPE_GETNAME - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_7 >= PHP_7_4_0, PHP_8
// ===== SYNTAX
// public FFI\CType::getName(): string
// ===== CODE
$return_ffictype_getname = $ffictype->getName(

// This function has no parameters.

); // Return Values
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getname.php
// ========== FFICTYPE_GETNAME - END

// SYNTAX:
// string FFI\CType::getName()

return $return_ffictype_getname; // string
}
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETNAME
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETPOINTERTYPE
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getPointerType() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getpointertype($ffictype)
{
$return_ffictype_getpointertype = null;

// ========== FFICTYPE_GETPOINTERTYPE - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getPointerType(): FFI\CType
// ===== CODE
$return_ffictype_getpointertype = $ffictype->getPointerType(

// This function has no parameters.

); // Return Values
// FFI\CType
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getpointertype.php
// ========== FFICTYPE_GETPOINTERTYPE - END

// SYNTAX:
// FFI\CType FFI\CType::getPointerType()

return $return_ffictype_getpointertype; // FFI\CType
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETPOINTERTYPE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSIZE
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getSize() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getsize($ffictype)
{
$return_ffictype_getsize = 0;

// ========== FFICTYPE_GETSIZE - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getSize(): int
// ===== CODE
$return_ffictype_getsize = $ffictype->getSize(

// This function has no parameters.

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getsize.php
// ========== FFICTYPE_GETSIZE - END

// SYNTAX:
// int FFI\CType::getSize()

return $return_ffictype_getsize; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSIZE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDNAMES
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getStructFieldNames() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getstructfieldnames($ffictype)
{
$return_ffictype_getstructfieldnames = null;

// ========== FFICTYPE_GETSTRUCTFIELDNAMES - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getStructFieldNames(): array
// ===== CODE
$return_ffictype_getstructfieldnames = $ffictype->getStructFieldNames(

// This function has no parameters.

); // Return Values
// array
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getstructfieldnames.php
// ========== FFICTYPE_GETSTRUCTFIELDNAMES - END

// SYNTAX:
// array FFI\CType::getStructFieldNames()

return $return_ffictype_getstructfieldnames; // array
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDNAMES
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDOFFSET
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getStructFieldOffset() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getstructfieldoffset($ffictype, $name)
{
$return_ffictype_getstructfieldoffset = 0;

// ========== FFICTYPE_GETSTRUCTFIELDOFFSET - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getStructFieldOffset(string $name): int
// ===== CODE
$return_ffictype_getstructfieldoffset = $ffictype->getStructFieldOffset(

$name // string $name

); // Return Values
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getstructfieldoffset.php
// ========== FFICTYPE_GETSTRUCTFIELDOFFSET - END

// SYNTAX:
// int FFI\CType::getStructFieldOffset(string $name)

return $return_ffictype_getstructfieldoffset; // int
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDOFFSET
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDTYPE
// ============================== OFFLINE
// ============================== ABOUT
// Description.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// FFI\CType::getStructFieldType() - PHP_8 >= PHP_8_1_0
// ============================== CODE
/*
function php_behaviour_ffi_ffictype_getstructfieldtype($ffictype, $name)
{
$return_ffictype_getstructfieldtype = null;

// ========== FFICTYPE_GETSTRUCTFIELDTYPE - BEGIN
// ===== ABOUT
// Description
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_1_0
// ===== SYNTAX
// public FFI\CType::getStructFieldType(string $name): FFI\CType
// ===== CODE
$return_ffictype_getstructfieldtype = $ffictype->getStructFieldType(

$name // string $name

); // Return Values
// FFI\CType
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/ffi-ctype.getstructfieldtype.php
// ========== FFICTYPE_GETSTRUCTFIELDTYPE - END

// SYNTAX:
// FFI\CType FFI\CType::getStructFieldType(string $name)

return $return_ffictype_getstructfieldtype; // FFI\CType
}
*/
// ============================== END
// PHP_BEHAVIOUR_FFI_FFICTYPE_GETSTRUCTFIELDTYPE
// ==============================


// ============================== END
//   PHP_BEHAVIOUR_FFI_FFICTYPE   
// ==============================


// ============================== END
//       PHP_BEHAVIOUR_FFI       
// ==============================
?>