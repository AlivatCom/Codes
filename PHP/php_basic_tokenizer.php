<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BASIC_TOKENIZER - BEGIN
// PHP_BASIC_TOKENIZER_TOKEN_GET_ALL - array php_basic_tokenizer_token_get_all(string $code, int $flags = 0)
// PHP_BASIC_TOKENIZER_TOKEN_NAME - string php_basic_tokenizer_token_name(int $id)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN - PhpToken|int|string|bool|array _CONSTRUCT, _GETTOKENNAME, _IS, _ISIGNORABLE, _TOSTRING, _TOKENIZE
// PHP_BASIC_TOKENIZER - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// BUNDLED (This extension is enabled by default. It may be disabled by using the following option at compile time: --disable-tokenizer. The Windows version of PHP has built-in support for this extension. You do not need to load any additional extensions in order to use these functions.)
// ============================== USING FUNCTIONS (2)
// token_get_all() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// token_name() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (1)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN - PHP_8
// ============================== USING DATA_TYPES (5)
// array
// string
// int
// OFFLINE | PhpToken - PHP_8
// bool
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//      PHP_BASIC_TOKENIZER      
// ============================== ABOUT
// PHP Manual / Function Reference / Other Basic Extensions / Tokenizer
// URL: https://www.php.net/manual/en/book.tokenizer.php
// ============================== DESCRIPTION
// TOKENIZER
// APPENDICES_LIST_OF_PARSER_TOKENS
// 
// TOKENIZER - BEGIN
// Tokenizer
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// THE_PHPTOKEN_CLASS
// TOKENIZER_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The tokenizer functions provide an interface to the PHP tokenizer embedded in the Zend Engine. Using these functions you may write your own PHP source analyzing or modification tools without having to deal with the language specification at the lexical level.
// See also the appendix about tokens.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/intro.tokenizer.php
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
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This extension is enabled by default. It may be disabled by using the following option at compile time: --disable-tokenizer
// The Windows version of PHP has built-in support for this extension. You do not need to load any additional extensions in order to use these functions.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// When the extension has either been compiled into PHP or dynamically loaded at runtime, the tokens listed in List of Parser Tokens are defined as constants.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// Here is a simple example PHP script using the tokenizer that will read in a PHP file, strip all comments from the source and print the pure code only.
// 
// [example]
// Example #1 Strip comments with the tokenizer
// [php]
// $source = file_get_contents('example.php');
// $tokens = token_get_all($source);
// 
// foreach ($tokens as $token) {
//    if (is_string($token)) {
//        // simple 1-character token
//        echo $token;
//    } else {
//        // token array
//        list($id, $text) = $token;
// 
//        switch ($id) { 
//            case T_COMMENT: 
//            case T_DOC_COMMENT:
//                // no action on comments
//                break;
// 
//            default:
//                // anything else -> output "as is"
//                echo $text;
//                break;
//        }
//    }
// }
// [/php]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokenizer.examples.php
// EXAMPLES - END
// 
// THE_PHPTOKEN_CLASS - BEGIN
// The PhpToken class
// 
// PHP_8
// 
// Introduction
// This class provides an alternative to token_get_all(). While the function returns tokens either as a single-character string, or an array with a token ID, token text and line number, PhpToken::tokenize() normalizes all tokens into PhpToken objects, which makes code operating on tokens more memory efficient and readable.
// 
// Class synopsis
// [code]
// class PhpToken implements Stringable {
// 
//    /* Properties */
//    public int $id;
//    public string $text;
//    public int $line;
//    public int $pos;
// 
//    /* Methods */
//    final public __construct(
//        int $id,
//        string $text,
//        int $line = -1,
//        int $pos = -1
//    )
//    public getTokenName(): ?string
//    public is(int|string|array $kind): bool
//    public isIgnorable(): bool
//    public __toString(): string
//    public static tokenize(string $code, int $flags = 0): array
// }
// [/code]
// 
// Properties
// id   - One of the T_* constants, or an ASCII codepoint representing a single-char token.
// text - The textual content of the token.
// line - The starting line number (1-based) of the token.
// pos  - The starting position (0-based) in the tokenized string (the number of bytes).
// 
// Table of Contents
// * PhpToken::__construct  - Returns a new PhpToken object
// * PhpToken::getTokenName - Returns the name of the token.
// * PhpToken::is           - Tells whether the token is of given kind.
// * PhpToken::isIgnorable  - Tells whether the token would be ignored by the PHP parser.
// * PhpToken::__toString   - Returns the textual content of the token.
// * PhpToken::tokenize     - Splits given source into PHP tokens, represented by PhpToken objects.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/class.phptoken.php
// THE_PHPTOKEN_CLASS - END
// 
// TOKENIZER_FUNCTIONS - BEGIN
// Tokenizer Functions
// 
// Table of Contents
// * token_get_all - Split given source into PHP tokens
// * token_name    - Get the symbolic name of a given PHP token
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/ref.tokenizer.php
// TOKENIZER_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/book.tokenizer.php
// TOKENIZER - END
// 
// APPENDICES_LIST_OF_PARSER_TOKENS - BEGIN
// List of Parser Tokens (PHP Manual / Appendices / List of Parser Tokens)
// 
// Various parts of the PHP language are represented internally by tokens. A code snippet that contains an invalid sequence of tokens may lead to errors like Parse error: syntax error, unexpected token "==", expecting "(" in script.php on line 10." where token == is internally represented by T_IS_EQUAL
// The following table lists all tokens. They are also available as PHP constants.
//  Note: Usage of T_* constants
//  T_* constants values are automatically generated based on PHP's underlying parser infrastructure. This means that the concrete value of a token may change between two PHP versions. This means that your code should never rely directly on the original T_* values taken from PHP version X.Y.Z, to provide some compatibility across multiple PHP versions.
//  To make use of T_* constants across multiple PHP versions, undefined constants may be defined by the user (using big numbers like 10000) with an appropriate strategy that will work with both PHP versions and T_* values.
//  [php]
//  // Prior to PHP 7.4.0, T_FN is not defined.
//  defined('T_FN') || define('T_FN', 10001);
//  [/php]
// Tokens
// Token                                     | Syntax                      | Reference
// T_ABSTRACT                                | abstract                    | Class Abstraction
// T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG     | &                           | Type declarations (available as of PHP 8.1.0)
// T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG | &                           | Type declarations (available as of PHP 8.1.0)
// T_AND_EQUAL                               | &=                          | assignment operators
// T_ARRAY                                   | array()                     | array(), array syntax
// T_ARRAY_CAST                              | (array)                     | type-casting
// T_AS                                      | as                          | foreach
// T_ATTRIBUTE                               | #[                          | attributes (available as of PHP 8.0.0)
// T_BAD_CHARACTER                           |                             | anything below ASCII 32 except \t (0x09), \n (0x0a) and \r (0x0d) (available as of PHP 7.4.0)
// T_BOOLEAN_AND                             | &&                          | logical operators
// T_BOOLEAN_OR                              | ||                          | logical operators
// T_BOOL_CAST                               | (bool) or (boolean)         | type-casting
// T_BREAK                                   | break                       | break
// T_CALLABLE                                | callable                    | callable
// T_CASE                                    | case                        | switch
// T_CATCH                                   | catch                       | Exceptions
// T_CLASS                                   | class                       | classes and objects
// T_CLASS_C                                 | __CLASS__                   | magic constants
// T_CLONE                                   | clone                       | classes and objects
// T_CLOSE_TAG                               | or                          | escaping from HTML
// T_COALESCE                                | ??                          | comparison operators
// T_COALESCE_EQUAL                          | ??=                         | assignment operators (available as of PHP 7.4.0)
// T_COMMENT                                 | // or #, and /* */          | comments
// T_CONCAT_EQUAL                            | .=                          | assignment operators
// T_CONST                                   | const                       | class constants
// T_CONSTANT_ENCAPSED_STRING                | "foo" or 'bar'              | string syntax
// T_CONTINUE                                | continue                    | continue
// T_CURLY_OPEN                              | {$                          | complex variable parsed syntax
// T_DEC                                     | --                          | incrementing/decrementing operators
// T_DECLARE                                 | declare                     | declare
// T_DEFAULT                                 | default                     | switch
// T_DIR                                     | __DIR__                     | magic constants
// T_DIV_EQUAL                               | /=                          | assignment operators
// T_DNUMBER                                 | 0.12, etc.                  | floating point numbers
// T_DO                                      | do                          | do..while
// T_DOC_COMMENT                             | /** */                      | PHPDoc style comments
// T_DOLLAR_OPEN_CURLY_BRACES                | ${                          | complex variable parsed syntax
// T_DOUBLE_ARROW                            | =>                          | array syntax
// T_DOUBLE_CAST                             | (real), (double) or (float) | type-casting
// T_DOUBLE_COLON                            | ::                          | see T_PAAMAYIM_NEKUDOTAYIM below
// T_ECHO                                    | echo                        | echo
// T_ELLIPSIS                                | ...                         | function arguments
// T_ELSE                                    | else                        | else
// T_ELSEIF                                  | elseif                      | elseif
// T_EMPTY                                   | empty                       | empty()
// T_ENCAPSED_AND_WHITESPACE                 | " $a"                       | constant part of string with variables
// T_ENDDECLARE                              | enddeclare                  | declare, alternative syntax
// T_ENDFOR                                  | endfor                      | for, alternative syntax
// T_ENDFOREACH                              | endforeach                  | foreach, alternative syntax
// T_ENDIF                                   | endif                       | if, alternative syntax
// T_ENDSWITCH                               | endswitch                   | switch, alternative syntax
// T_ENDWHILE                                | endwhile                    | while, alternative syntax
// T_ENUM                                    | enum                        | Enumerations (available as of PHP 8.1.0)
// T_END_HEREDOC                             |                             | heredoc syntax
// T_EVAL                                    | eval()                      | eval()
// T_EXIT                                    | exit or die                 | exit(), die()
// T_EXTENDS                                 | extends                     | extends, classes and objects
// T_FILE                                    | __FILE__                    | magic constants
// T_FINAL                                   | final                       | Final Keyword
// T_FINALLY                                 | finally                     | Exceptions
// T_FN                                      | fn                          | arrow functions (available as of PHP 7.4.0)
// T_FOR                                     | for                         | for
// T_FOREACH                                 | foreach                     | foreach
// T_FUNCTION                                | function                    | functions
// T_FUNC_C                                  | __FUNCTION__                | magic constants
// T_GLOBAL                                  | global                      | variable scope
// T_GOTO                                    | goto                        | goto
// T_HALT_COMPILER                           | __halt_compiler()           | __halt_compiler
// T_IF                                      | if                          | if
// T_IMPLEMENTS                              | implements                  | Object Interfaces
// T_INC                                     | ++                          | incrementing/decrementing operators
// T_INCLUDE                                 | include()                   | include
// T_INCLUDE_ONCE                            | include_once()              | include_once
// T_INLINE_HTML                             |                             | text outside PHP
// T_INSTANCEOF                              | instanceof                  | type operators
// T_INSTEADOF                               | insteadof                   | Traits
// T_INTERFACE                               | interface                   | Object Interfaces
// T_INT_CAST                                | (int) or (integer)          | type-casting
// T_ISSET                                   | isset()                     | isset()
// T_IS_EQUAL                                | ==                          | comparison operators
// T_IS_GREATER_OR_EQUAL                     | >=                          | comparison operators
// T_IS_IDENTICAL                            | ===                         | comparison operators
// T_IS_NOT_EQUAL                            | != or <>                    | comparison operators
// T_IS_NOT_IDENTICAL                        | !==                         | comparison operators
// T_IS_SMALLER_OR_EQUAL                     | <=                          | comparison operators
// T_LINE                                    | __LINE__                    | magic constants
// T_LIST                                    | list()                      | list()
// T_LNUMBER                                 | 123, 012, 0x1ac, etc.       | integers
// T_LOGICAL_AND                             | and                         | logical operators
// T_LOGICAL_OR                              | or                          | logical operators
// T_LOGICAL_XOR                             | xor                         | logical operators
// T_MATCH                                   | match                       | match (available as of PHP 8.0.0)
// T_METHOD_C                                | __METHOD__                  | magic constants
// T_MINUS_EQUAL                             | -=                          | assignment operators
// T_MOD_EQUAL                               | %=                          | assignment operators
// T_MUL_EQUAL                               | *=                          | assignment operators
// T_NAMESPACE                               | namespace                   | namespaces
// T_NAME_FULLY_QUALIFIED                    | \App\Namespace              | namespaces (available as of PHP 8.0.0)
// T_NAME_QUALIFIED                          | App\Namespace               | namespaces (available as of PHP 8.0.0)
// T_NAME_RELATIVE                           | namespace\Namespace         | namespaces (available as of PHP 8.0.0)
// T_NEW                                     | new                         | classes and objects
// T_NS_C                                    | __NAMESPACE__               | namespaces
// T_NS_SEPARATOR                            | \                           | namespaces
// T_NUM_STRING                              | "$a[0]"                     | numeric array index inside string
// T_OBJECT_CAST                             | (object)                    | type-casting
// T_OBJECT_OPERATOR                         | ->                          | classes and objects
// T_NULLSAFE_OBJECT_OPERATOR                | ?->                         | classes and objects
// T_OPEN_TAG                                | ,  or <%                    | escaping from HTML
// T_OPEN_TAG_WITH_ECHO                      | = or <%=                    | escaping from HTML
// T_OR_EQUAL                                | |=                          | assignment operators
// T_PAAMAYIM_NEKUDOTAYIM                    | ::                          | ::. Also defined as T_DOUBLE_COLON.
// T_PLUS_EQUAL                              | +=                          | assignment operators
// T_POW                                     | **                          | arithmetic operators
// T_POW_EQUAL                               | **=                         | assignment operators
// T_PRINT                                   | print()                     | print
// T_PRIVATE                                 | private                     | classes and objects
// T_PROTECTED                               | protected                   | classes and objects
// T_PUBLIC                                  | public                      | classes and objects
// T_READONLY                                | readonly                    | classes and objects (available as of PHP 8.1.0)
// T_REQUIRE                                 | require()                   | require
// T_REQUIRE_ONCE                            | require_once()              | require_once
// T_RETURN                                  | return                      | returning values
// T_SL                                      | <<                          | bitwise operators
// T_SL_EQUAL                                | <<=                         | assignment operators
// T_SPACESHIP                               | <=>                         | comparison operators
// T_SR                                      | >>                          | bitwise operators
// T_SR_EQUAL                                | >>=                         | assignment operators
// T_START_HEREDOC                           | <<<                         | heredoc syntax
// T_STATIC                                  | static                      | variable scope
// T_STRING                                  | parent, self, etc.          | identifiers, e.g. keywords like parent and self, function names, class names and more are matched. See also T_CONSTANT_ENCAPSED_STRING.
// T_STRING_CAST                             | (string)                    | type-casting
// T_STRING_VARNAME                          | "${a                        | complex variable parsed syntax
// T_SWITCH                                  | switch                      | switch
// T_THROW                                   | throw                       | Exceptions
// T_TRAIT                                   | trait                       | Traits
// T_TRAIT_C                                 | __TRAIT__                   | __TRAIT__
// T_TRY                                     | try                         | Exceptions
// T_UNSET                                   | unset()                     | unset()
// T_UNSET_CAST                              | (unset)                     | type-casting
// T_USE                                     | use                         | namespaces
// T_VAR                                     | var                         | classes and objects
// T_VARIABLE                                | $foo                        | variables
// T_WHILE                                   | while                       | while, do..while
// T_WHITESPACE                              | \t \r\n                     |
// T_XOR_EQUAL                               | ^=                          | assignment operators
// T_YIELD                                   | yield                       | generators
// T_YIELD_FROM                              | yield from                  | generators
// See also token_name().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tokens.php
// APPENDICES_LIST_OF_PARSER_TOKENS - END
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_TOKEN_GET_ALL
// ============================== PUBLIC
// ============================== ABOUT
// Split given source into PHP tokens.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// token_get_all() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tokenizer_token_get_all($code, $flags = 0)
{
$return_token_get_all = null;

// ========== TOKEN_GET_ALL - BEGIN
// ===== ABOUT
// Split given source into PHP tokens
// ===== DESCRIPTION
// token_get_all() parses the given code string into PHP language tokens using the Zend engine's lexical scanner.
// For a list of parser tokens, see List of Parser Tokens, or use token_name() to translate a token value into its string representation.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// token_get_all(string $code, int $flags = 0): array
// ===== CODE
$return_token_get_all = token_get_all(

$code, // string code - The PHP source to parse.

$flags // int flags - Valid flags:
// * TOKEN_PARSE - Recognises the ability to use reserved words in specific contexts.

); // Return Values
// An array of token identifiers. Each individual token identifier is either a single character (i.e.: ;, ., >, !, etc...), or a three element array containing the token index in element 0, the string content of the original token in element 1 and the line number in element 2.
// 
// [examples]
// Examples
// [example]
// Example #1 token_get_all() example
// [php]
// $tokens = token_get_all('[php] echo; [/php]');
// 
// foreach ($tokens as $token) {
//     if (is_array($token)) {
//         echo "Line {$token[2]}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
//     }
// }
// [/php]
// The above example will output something similar to:
// [result]
// Line 1: T_OPEN_TAG ('[php] ')
// Line 1: T_ECHO ('echo')
// Line 1: T_WHITESPACE (' ')
// Line 1: T_CLOSE_TAG ('[/php]')
// [/result]
// [/example]
// [example]
// Example #2 token_get_all() incorrect usage example
// [php]
// $tokens = token_get_all('/* comment */');
// 
// foreach ($tokens as $token) {
//     if (is_array($token)) {
//         echo "Line {$token[2]}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
//     }
// }
// [/php]
// The above example will output something similar to:
// [result]
// Line 1: T_INLINE_HTML ('/* comment */')
// [/result]
// Note in the previous example that the string is parsed as T_INLINE_HTML rather than the expected T_COMMENT. This is because no open tag was used in the code provided. This would be equivalent to putting a comment outside of the PHP tags in a normal file.
// [/example]
// [example]
// Example #3 token_get_all() on a class using a reserved word example
// [php]
// 
// $source = <<<'code'
// <?php
// 
// class A
// {
//     const PUBLIC = 1;
// }
// code;
// 
// $tokens = token_get_all($source, TOKEN_PARSE);
// 
// foreach ($tokens as $token) {
//     if (is_array($token)) {
//         echo token_name($token[0]) , PHP_EOL;
//     }
// }
// [/php]
// The above example will output something similar to:
// [result]
// T_OPEN_TAG
// T_WHITESPACE
// T_CLASS
// T_WHITESPACE
// T_STRING
// T_CONST
// T_WHITESPACE
// T_STRING
// T_LNUMBER
// [/result]
// Without the TOKEN_PARSE flag, the penultimate token (T_STRING) would have been T_PUBLIC.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/function.token-get-all.php
// ========== TOKEN_GET_ALL - END

// SYNTAX:
// array token_get_all(string $code, int $flags = 0)

return $return_token_get_all; // array
}
// ============================== END
// PHP_BASIC_TOKENIZER_TOKEN_GET_ALL
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_TOKEN_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Get the symbolic name of a given PHP token.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// token_name() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tokenizer_token_name($id)
{
$return_token_name = null;

// ========== TOKEN_NAME - BEGIN
// ===== ABOUT
// Get the symbolic name of a given PHP token
// ===== DESCRIPTION
// token_name() gets the symbolic name for a PHP id value.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// token_name(int $id): string
// ===== CODE
$return_token_name = token_name(

$id // int id - The token value.

); // Return Values
// The symbolic name of the given id.
// 
// [examples]
// Examples
// [example]
// Example #1 token_name() example
// [php]
// // 260 is the token value for the T_EVAL token
// echo token_name(260);        // -> "T_EVAL"
// 
// // a token constant maps to its own name
// echo token_name(T_FUNCTION); // -> "T_FUNCTION"
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/function.token-name.php
// ========== TOKEN_NAME - END

// SYNTAX:
// string token_name(int $id)

return $return_token_name; // string
}
// ============================== END
// PHP_BASIC_TOKENIZER_TOKEN_NAME
// ==============================


// ============================== BEGIN
//  PHP_BASIC_TOKENIZER_PHPTOKEN  
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN_CONSTRUCT - PhpToken php_basic_tokenizer_phptoken_construct(int $id, string $text, int $line = -1, int $pos = -1)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN_GETTOKENNAME - string php_basic_tokenizer_phptoken_gettokenname(PhpToken $phptoken)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN_IS - bool php_basic_tokenizer_phptoken_is(PhpToken $phptoken, int|string|array $kind)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN_ISIGNORABLE - bool php_basic_tokenizer_phptoken_isignorable(PhpToken $phptoken)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN_TOSTRING - string php_basic_tokenizer_phptoken_tostring(PhpToken $phptoken)
// OFFLINE | PHP_BASIC_TOKENIZER_PHPTOKEN_TOKENIZE - array php_basic_tokenizer_phptoken_tokenize(PhpToken $phptoken, string $code, int $flags = 0)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (6)
// OFFLINE | PhpToken::__construct() - PHP_8
// OFFLINE | PhpToken::getTokenName() - PHP_8
// OFFLINE | PhpToken::is() - PHP_8
// OFFLINE | PhpToken::isIgnorable() - PHP_8
// OFFLINE | PhpToken::__toString() - PHP_8
// OFFLINE | PhpToken::tokenize() - PHP_8
// ============================== USING DATA_TYPES (5)
// OFFLINE | PhpToken - PHP_8
// int
// string
// bool
// array
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_PHPTOKEN_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Returns a new PhpToken object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// PhpToken::__construct() - PHP_8
// ============================== CODE
/*
function php_basic_tokenizer_phptoken_construct($id, $text, $line = -1, $pos = -1)
{
$return_phptoken_construct = null;

// ========== PHPTOKEN_CONSTRUCT - BEGIN
// ===== ABOUT
// Returns a new PhpToken object
// ===== DESCRIPTION
// Returns a new PhpToken object
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// final public PhpToken::__construct(
//    int $id,
//    string $text,
//    int $line = -1,
//    int $pos = -1
// )
// ===== CODE
$return_phptoken_construct = new PhpToken(

$id, // int id - One of the T_* constants (see List of Parser Tokens), or an ASCII codepoint representing a single-char token.

$text, // string text - The textual content of the token.

$line, // int line - The starting line number (1-based) of the token.

$pos // int pos - The starting position (0-based) in the tokenized string (the number of bytes).

); // Return
// PhpToken
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/phptoken.construct.php
// ========== PHPTOKEN_CONSTRUCT - END

// SYNTAX:
// PhpToken PhpToken::__construct(int $id, string $text, int $line = -1, int $pos = -1)

return $return_phptoken_construct; // PhpToken
}
*/
// ============================== END
// PHP_BASIC_TOKENIZER_PHPTOKEN_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_PHPTOKEN_GETTOKENNAME
// ============================== OFFLINE
// ============================== ABOUT
// Returns the name of the token.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// PhpToken::getTokenName() - PHP_8
// ============================== CODE
/*
function php_basic_tokenizer_phptoken_gettokenname($phptoken)
{
$return_phptoken_gettokenname = null;

// ========== PHPTOKEN_GETTOKENNAME - BEGIN
// ===== ABOUT
// Returns the name of the token.
// ===== DESCRIPTION
// Returns the name of the token.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public PhpToken::getTokenName(): ?string
// ===== CODE
$return_phptoken_gettokenname = $phptoken->getTokenName(

// This function has no parameters.

); // Return Values
// An ASCII character for single-char tokens, or one of T_* constant names for known tokens (see List of Parser Tokens), or null for unknown tokens.
// 
// [examples]
// Examples
// Example #1 PhpToken::getTokenName() example
// [example]
// // known token
// $token = new PhpToken(T_ECHO, 'echo');
// var_dump($token->getTokenName());   // -> string(6) "T_ECHO"
// 
// // single-char token
// $token = new PhpToken(ord(';'), ';');
// var_dump($token->getTokenName());   // -> string(1) ";"
// 
// // unknown token
// $token = new PhpToken(10000 , "\0");
// var_dump($token->getTokenName());   // -> NULL
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/phptoken.gettokenname.php
// ========== PHPTOKEN_GETTOKENNAME - END

// SYNTAX:
// string PhpToken::getTokenName()

return $return_phptoken_gettokenname; // string
}
*/
// ============================== END
// PHP_BASIC_TOKENIZER_PHPTOKEN_GETTOKENNAME
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_PHPTOKEN_IS
// ============================== OFFLINE
// ============================== ABOUT
// Tells whether the token is of given kind.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// PhpToken::is() - PHP_8
// ============================== CODE
/*
function php_basic_tokenizer_phptoken_is($phptoken, $kind)
{
$return_phptoken_is = false;

// ========== PHPTOKEN_IS - BEGIN
// ===== ABOUT
// Tells whether the token is of given kind.
// ===== DESCRIPTION
// Tells whether the token is of given kind.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public PhpToken::is(int|string|array $kind): bool
// ===== CODE
$return_phptoken_is = $phptoken->is(

$kind // int|string|array kind - Either a single value to match the token's id or textual content, or an array thereof.

); // Return Values
// A boolean value whether the token is of given kind.
// 
// [examples]
// Examples
// [example]
// Example #1 PhpToken::is() example
// [php]
// $token = new PhpToken(T_ECHO, 'echo');
// var_dump($token->is(T_ECHO));        // -> bool(true)
// var_dump($token->is('echo'));        // -> bool(true)
// var_dump($token->is(T_FOREACH));     // -> bool(false)
// var_dump($token->is('foreach'));     // -> bool(false)
// [/php]
// [/example]
// [example]
// Example #2 Usage with array
// [php]
// function isClassType(PhpToken $token): bool {
//     return $token->is([T_CLASS, T_INTERFACE, T_TRAIT]);
// }
// 
// $interface = new PhpToken(T_INTERFACE, 'interface');
// var_dump(isClassType($interface));   // -> bool(true)
// 
// $function = new PhpToken(T_FUNCTION, 'function');
// var_dump(isClassType($function));    // -> bool(false)
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/phptoken.is.php
// ========== PHPTOKEN_IS - END

// SYNTAX:
// bool PhpToken::is(int|string|array $kind)

return $return_phptoken_is; // bool
}
*/
// ============================== END
// PHP_BASIC_TOKENIZER_PHPTOKEN_IS
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_PHPTOKEN_ISIGNORABLE
// ============================== OFFLINE
// ============================== ABOUT
// Tells whether the token would be ignored by the PHP parser.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// PhpToken::isIgnorable() - PHP_8
// ============================== CODE
/*
function php_basic_tokenizer_phptoken_isignorable($phptoken)
{
$return_phptoken_isignorable = false;

// ========== PHPTOKEN_ISIGNORABLE - BEGIN
// ===== ABOUT
// Tells whether the token would be ignored by the PHP parser.
// ===== DESCRIPTION
// Tells whether the token would be ignored by the PHP parser.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public PhpToken::isIgnorable(): bool
// ===== CODE
$return_phptoken_isignorable = $phptoken->isIgnorable(

// This function has no parameters.

); // Return Values
// A boolean value whether the token would be ignored by the PHP parser (such as whitespace or comments).
// 
// [examples]
// Examples
// Example #1 PhpToken::isIgnorable() example
// [example]
// $echo = new PhpToken(T_ECHO, 'echo');
// var_dump($echo->isIgnorable());   // -> bool(false)
// 
// $space = new PhpToken(T_WHITESPACE, ' ');
// var_dump($space->isIgnorable());  // -> bool(true)
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/phptoken.isignorable.php
// ========== PHPTOKEN_ISIGNORABLE - END

// SYNTAX:
// bool PhpToken::isIgnorable()

return $return_phptoken_isignorable; // bool
}
*/
// ============================== END
// PHP_BASIC_TOKENIZER_PHPTOKEN_ISIGNORABLE
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_PHPTOKEN_TOSTRING
// ============================== OFFLINE
// ============================== ABOUT
// Returns the textual content of the token.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// PhpToken::__toString() - PHP_8
// ============================== CODE
/*
function php_basic_tokenizer_phptoken_tostring($phptoken)
{
$return_phptoken_tostring = null;

// ========== PHPTOKEN_TOSTRING - BEGIN
// ===== ABOUT
// Returns the textual content of the token.
// ===== DESCRIPTION
// Returns the textual content of the token.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public PhpToken::__toString(): string
// ===== CODE
$return_phptoken_tostring = $phptoken->__toString(

// This function has no parameters.

); // Return Values
// A textual content of the token.
// 
// [examples]
// Examples
// [example]
// Example #1 PhpToken::__toString() example
// [php]
// $token = new PhpToken(T_ECHO, 'echo');
// echo $token;
// [/php]
// The above examples will output:
// [result]
// echo
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/phptoken.tostring.php
// ========== PHPTOKEN_TOSTRING - END

// SYNTAX:
// string PhpToken::__toString()

return $return_phptoken_tostring; // string
}
*/
// ============================== END
// PHP_BASIC_TOKENIZER_PHPTOKEN_TOSTRING
// ==============================


// ============================== BEGIN
// PHP_BASIC_TOKENIZER_PHPTOKEN_TOKENIZE
// ============================== OFFLINE
// ============================== ABOUT
// Splits given source into PHP tokens, represented by PhpToken objects.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// PhpToken::tokenize() - PHP_8
// ============================== CODE
/*
function php_basic_tokenizer_phptoken_tokenize($phptoken, $code, $flags = 0)
{
$return_phptoken_tokenize = null;

// ========== PHPTOKEN_TOKENIZE - BEGIN
// ===== ABOUT
// Splits given source into PHP tokens, represented by PhpToken objects.
// ===== DESCRIPTION
// Returns an array of PhpToken objects representing given code.
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public static PhpToken::tokenize(string $code, int $flags = 0): array
// ===== CODE
$return_phptoken_tokenize = $phptoken->tokenize(

$code, // string code - The PHP source to parse.

$flags // int flags - Valid flags:
// * TOKEN_PARSE - Recognises the ability to use reserved words in specific contexts.

); // Return Values
// An array of PHP tokens represented by instances of PhpToken or its descendants. This method returns static[] so that PhpToken can be seamlessly extended.
// 
// [examples]
// Examples
// [example]
// Example #1 PhpToken::tokenize() example
// [php]
// $tokens = PhpToken::tokenize('[php] echo; [/php]');
// 
// foreach ($tokens as $token) {
//     echo "Line {$token->line}: {$token->getTokenName()} ('{$token->text}')", PHP_EOL;
// }
// [/php]
// The above examples will output:
// [result]
// Line 1: T_OPEN_TAG ('[php] ')
// Line 1: T_ECHO ('echo')
// Line 1: ; (';')
// Line 1: T_WHITESPACE (' ')
// Line 1: T_CLOSE_TAG ('[/php]')
// [/result]
// [/example]
// [example]
// Example #2 Extending PhpToken
// [php]
// 
// class MyPhpToken extends PhpToken {
//     public function getUpperText() {
//         return strtoupper($this->text);
//     }
// }
// 
// $tokens = MyPhpToken::tokenize('[php] echo; [/php]');
// echo "'{$tokens[0]->getUpperText()}'";
// [/php]
// The above examples will output:
// [result]
// '[php] '
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/phptoken.tokenize.php
// ========== PHPTOKEN_TOKENIZE - END

// SYNTAX:
// array PhpToken::tokenize(string $code, int $flags = 0)

return $return_phptoken_tokenize; // array
}
*/
// ============================== END
// PHP_BASIC_TOKENIZER_PHPTOKEN_TOKENIZE
// ==============================


// ============================== END
//  PHP_BASIC_TOKENIZER_PHPTOKEN  
// ==============================


// ============================== END
//      PHP_BASIC_TOKENIZER      
// ==============================
?>