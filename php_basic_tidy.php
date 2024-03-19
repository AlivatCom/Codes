<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BASIC_TIDY - BEGIN
// PHP_BASIC_TIDY_OB_TIDYHANDLER - string php_basic_tidy_ob_tidyhandler(string $input, int $mode)
// PHP_BASIC_TIDY_TIDY_ACCESS_COUNT - int php_basic_tidy_tidy_access_count(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_CONFIG_COUNT - int php_basic_tidy_tidy_config_count(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_ERROR_COUNT - int php_basic_tidy_tidy_error_count(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_GET_OUTPUT - string php_basic_tidy_tidy_get_output(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_WARNING_COUNT - int php_basic_tidy_tidy_warning_count(tidy $tidy)
// PHP_BASIC_TIDY_TIDY - tidyNode|tidy|bool|string|array|null|int|false _BODY, _CLEANREPAIR, _CONSTRUCT, _DIAGNOSE, _ERRORBUFFER, _GETCONFIG, _GETHTMLVER, _GETOPT, _GETOPTDOC, _GETRELEASE, _GETSTATUS, _HEAD, _HTML, _ISXHTML, _ISXML, _PARSEFILE, _PARSESTRING, _REPAIRFILE, _REPAIRSTRING, _ROOT
// PHP_BASIC_TIDY_TIDYNODE - tidyNode|bool _CONSTRUCT, _GETPARENT, _HASCHILDREN, _HASSIBLINGS, _ISASP, _ISCOMMENT, _ISHTML, _ISJSTE, _ISPHP, _ISTEXT
// PHP_BASIC_TIDY - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_1_0_0
// ============================== INSTALLATION
// BUNDLED (This extension is bundled with PHP, and is installed using the --with-tidy configure option)
// ============================== USING FUNCTIONS (6)
// ob_tidyhandler() - PHP_5, PHP_7, PHP_8
// tidy_access_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy_config_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy_error_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy_get_output() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy_warning_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== USING CLASSES (2)
// PHP_BASIC_TIDY_TIDY - PHP_5 - PHP_8, PECL_tidy_1_0_0
// PHP_BASIC_TIDY_TIDYNODE - PHP_5 - PHP_8
// ============================== USING DATA_TYPES (8)
// string
// int
// tidy - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidyNode - PHP_5, PHP_7, PHP_8
// bool
// array
// null
// false
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//         PHP_BASIC_TIDY         
// ============================== ABOUT
// PHP Manual / Function Reference / Other Basic Extensions / Tidy
// URL: https://www.php.net/manual/en/book.tidy.php
// ============================== DESCRIPTION
// TIDY
// 
// TIDY - BEGIN
// Tidy
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// THE_TIDY_CLASS
// THE_TIDYNODE_CLASS
// TIDY_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Tidy is a binding for the Tidy HTML clean and repair utility which allows you to not only clean and otherwise manipulate HTML, XHTML, and XML documents, but also traverse the document tree, including ones with embedded scripting languages such as PHP or ASP within them using object-oriented constructs.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/intro.tidy.php
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
// To use Tidy, you will need libtidy installed, available on the > tidy homepage. As of PHP 7.1.0, the HTML5 aware successor > libtidy5 can be used alternatively. As of PHP 7.3.0, another option is to use > libtidyp.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This extension is bundled with PHP, and is installed using the --with-tidy configure option.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Tidy Configuration Options
// Name                | Default | Changeable     | Changelog
// tidy.default_config | ""      | PHP_INI_SYSTEM |
// tidy.clean_output   | "0"     | PHP_INI_USER   |
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// tidy.default_config string - Default path for tidy config file.
// tidy.clean_output bool     - Turns on/off the output repairing by Tidy.
// Warning: Do not turn on tidy.clean_output if you are generating non-html content such as dynamic images.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// Each TIDY_TAG_XXX represents a HTML tag. For example, TIDY_TAG_A represents a "<a href="XX">link</a>" tag.
// 
// The following constants are defined:
// tidy tag constants
// Constant            - Notes
// TIDY_TAG_UNKNOWN    -
// TIDY_TAG_A          -
// TIDY_TAG_ABBR       -
// TIDY_TAG_ACRONYM    -
// TIDY_TAG_ALIGN      -
// TIDY_TAG_APPLET     -
// TIDY_TAG_AREA       -
// TIDY_TAG_ARTICLE    - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_ASIDE      - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_AUDIO      - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_B          -
// TIDY_TAG_BASE       -
// TIDY_TAG_BASEFONT   -
// TIDY_TAG_BDI        - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_BDO        -
// TIDY_TAG_BGSOUND    -
// TIDY_TAG_BIG        -
// TIDY_TAG_BLINK      -
// TIDY_TAG_BLOCKQUOTE -
// TIDY_TAG_BODY       -
// TIDY_TAG_BR         -
// TIDY_TAG_BUTTON     -
// TIDY_TAG_CANVAS     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_CAPTION    -
// TIDY_TAG_CENTER     -
// TIDY_TAG_CITE       -
// TIDY_TAG_CODE       -
// TIDY_TAG_COL        -
// TIDY_TAG_COLGROUP   -
// TIDY_TAG_COMMAND    - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_COMMENT    -
// TIDY_TAG_DATALIST   - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_DD         -
// TIDY_TAG_DEL        -
// TIDY_TAG_DETAILS    - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_DFN        -
// TIDY_TAG_DIALOG     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_DIR        -
// TIDY_TAG_DIV        -
// TIDY_TAG_DL         -
// TIDY_TAG_DT         -
// TIDY_TAG_EM         -
// TIDY_TAG_EMBED      -
// TIDY_TAG_FIELDSET   -
// TIDY_TAG_FIGCAPTION - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_FIGURE     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_FONT       -
// TIDY_TAG_FOOTER     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_FORM       -
// TIDY_TAG_FRAME      -
// TIDY_TAG_FRAMESET   -
// TIDY_TAG_H1         -
// TIDY_TAG_H2         -
// TIDY_TAG_H3         -
// TIDY_TAG_H4         -
// TIDY_TAG_H5         -
// TIDY_TAG_H6         -
// TIDY_TAG_HEAD       -
// TIDY_TAG_HEADER     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_HGROUP     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_HR         -
// TIDY_TAG_HTML       -
// TIDY_TAG_I          -
// TIDY_TAG_IFRAME     -
// TIDY_TAG_ILAYER     -
// TIDY_TAG_IMG        -
// TIDY_TAG_INPUT      -
// TIDY_TAG_INS        -
// TIDY_TAG_ISINDEX    -
// TIDY_TAG_KBD        -
// TIDY_TAG_KEYGEN     -
// TIDY_TAG_LABEL      -
// TIDY_TAG_LAYER      -
// TIDY_TAG_LEGEND     -
// TIDY_TAG_LI         -
// TIDY_TAG_LINK       -
// TIDY_TAG_LISTING    -
// TIDY_TAG_MAIN       - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_MAP        -
// TIDY_TAG_MARK       - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_MARQUEE    -
// TIDY_TAG_MENU       -
// TIDY_TAG_MENUITEM   - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_META       -
// TIDY_TAG_METER      - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_MULTICOL   -
// TIDY_TAG_NAV        - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_NOBR       -
// TIDY_TAG_NOEMBED    -
// TIDY_TAG_NOFRAMES   -
// TIDY_TAG_NOLAYER    -
// TIDY_TAG_NOSAVE     -
// TIDY_TAG_NOSCRIPT   -
// TIDY_TAG_OBJECT     -
// TIDY_TAG_OL         -
// TIDY_TAG_OPTGROUP   -
// TIDY_TAG_OPTION     -
// TIDY_TAG_OUTPUT     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_P          -
// TIDY_TAG_PARAM      -
// TIDY_TAG_PLAINTEXT  -
// TIDY_TAG_PRE        -
// TIDY_TAG_PROGRESS   - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_Q          -
// TIDY_TAG_RB         -
// TIDY_TAG_RBC        -
// TIDY_TAG_RP         -
// TIDY_TAG_RT         -
// TIDY_TAG_RTC        -
// TIDY_TAG_RUBY       -
// TIDY_TAG_S          -
// TIDY_TAG_SAMP       -
// TIDY_TAG_SCRIPT     -
// TIDY_TAG_SECTION    - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_SELECT     -
// TIDY_TAG_SERVER     -
// TIDY_TAG_SERVLET    -
// TIDY_TAG_SMALL      -
// TIDY_TAG_SOURCE     - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_SPACER     -
// TIDY_TAG_SPAN       -
// TIDY_TAG_STRIKE     -
// TIDY_TAG_STRONG     -
// TIDY_TAG_STYLE      -
// TIDY_TAG_SUB        -
// TIDY_TAG_SUMMARY    - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_SUP        -
// TIDY_TAG_TABLE      -
// TIDY_TAG_TBODY      -
// TIDY_TAG_TD         -
// TIDY_TAG_TEMPLATE   - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_TEXTAREA   -
// TIDY_TAG_TFOOT      -
// TIDY_TAG_TH         -
// TIDY_TAG_THEAD      -
// TIDY_TAG_TIME       - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_TITLE      -
// TIDY_TAG_TR         -
// TIDY_TAG_TRACK      - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_TT         -
// TIDY_TAG_U          -
// TIDY_TAG_UL         -
// TIDY_TAG_VAR        -
// TIDY_TAG_VIDEO      - Added in libtidy 5.0.0. Available as of PHP 7.4.0.
// TIDY_TAG_WBR        -
// TIDY_TAG_XMP        -
// 
// tidy nodetype constants
// constant               - description
// TIDY_NODETYPE_ROOT     - root node
// TIDY_NODETYPE_DOCTYPE  - doctype
// TIDY_NODETYPE_COMMENT  - HTML comment
// TIDY_NODETYPE_PROCINS  - Processing Instruction
// TIDY_NODETYPE_TEXT     - Text
// TIDY_NODETYPE_START    - start tag
// TIDY_NODETYPE_END      - end tag
// TIDY_NODETYPE_STARTEND - empty tag
// TIDY_NODETYPE_CDATA    - CDATA
// TIDY_NODETYPE_SECTION  - XML section
// TIDY_NODETYPE_ASP      - ASP code
// TIDY_NODETYPE_JSTE     - JSTE code
// TIDY_NODETYPE_PHP      - PHP code
// TIDY_NODETYPE_XMLDECL  - XML declaration
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// TIDY_EXAMPLE
// 
// TIDY_EXAMPLE - BEGIN
// Tidy example
// 
// [example]
// This simple example shows basic Tidy usage.
// Example #1 Basic Tidy usage
// [code]
// [php]
// ob_start();
// [/php]
// <html>a html document</html>
// [php]
// $html = ob_get_clean();
// 
// // Specify configuration
// $config = array(
//            'indent'         => true,
//            'output-xhtml'   => true,
//            'wrap'           => 200);
// 
// // Tidy
// $tidy = new tidy;
// $tidy->parseString($html, $config, 'utf8');
// $tidy->cleanRepair();
// 
// // Output
// echo $tidy;
// [/php]
// [/code]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.examples.basic.php
// TIDY_EXAMPLE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/tidy.examples.php
// EXAMPLES - END
// 
// THE_TIDY_CLASS - BEGIN
// The tidy class
// 
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// 
// Introduction
// An HTML node in an HTML file, as detected by tidy.
// 
// Class synopsis
// [code]
// class tidy {
// 
//    /* Properties */
//    public ?string $errorBuffer = null;
//    public ?string $value = null;
// 
//    /* Methods */
//    public __construct(
//        ?string $filename = null,
//        array|string|null $config = null,
//        ?string $encoding = null,
//        bool $useIncludePath = false
//    )
//    public body(): ?tidyNode
//    public cleanRepair(): bool
//    public diagnose(): bool
//    public getConfig(): array
//    public getHtmlVer(): int
//    public getOpt(string $option): string|int|bool
//    public getOptDoc(string $option): string|false
//    public getRelease(): string
//    public getStatus(): int
//    public head(): ?tidyNode
//    public html(): ?tidyNode
//    public isXhtml(): bool
//    public isXml(): bool
//    public parseFile(
//        string $filename,
//        array|string|null $config = null,
//        ?string $encoding = null,
//        bool $useIncludePath = false
//    ): bool
//    public parseString(string $string, array|string|null $config = null, ?string $encoding = null): bool
//    public static repairFile(
//        string $filename,
//        array|string|null $config = null,
//        ?string $encoding = null,
//        bool $useIncludePath = false
//    ): string|false
//    public static repairString(string $string, array|string|null $config = null, ?string $encoding = null): string|false
//    public root(): ?tidyNode
// }
// [/code]
// 
// Properties
// value - The HTML representation of the node, including the surrounding tags.
// 
// Table of Contents
// * tidy::body         - Returns a tidyNode object starting from the <body> tag of the tidy parse tree
// * tidy::cleanRepair  - Execute configured cleanup and repair operations on parsed markup
// * tidy::__construct  - Constructs a new tidy object
// * tidy::diagnose     - Run configured diagnostics on parsed and repaired markup
// * tidy::$errorBuffer - Return warnings and errors which occurred parsing the specified document
// * tidy::getConfig    - Get current Tidy configuration
// * tidy::getHtmlVer   - Get the Detected HTML version for the specified document
// * tidy::getOpt       - Returns the value of the specified configuration option for the tidy document
// * tidy::getOptDoc    - Returns the documentation for the given option name
// * tidy::getRelease   - Get release date (version) for Tidy library
// * tidy::getStatus    - Get status of specified document
// * tidy::head         - Returns a tidyNode object starting from the <head> tag of the tidy parse tree
// * tidy::html         - Returns a tidyNode object starting from the <html> tag of the tidy parse tree
// * tidy::isXhtml      - Indicates if the document is a XHTML document
// * tidy::isXml        - Indicates if the document is a generic (non HTML/XHTML) XML document
// * tidy::parseFile    - Parse markup in file or URI
// * tidy::parseString  - Parse a document stored in a string
// * tidy::repairFile   - Repair a file and return it as a string
// * tidy::repairString - Repair a string using an optionally provided configuration file
// * tidy::root         - Returns a tidyNode object representing the root of the tidy parse tree
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/class.tidy.php
// THE_TIDY_CLASS - END
// 
// THE_TIDYNODE_CLASS - BEGIN
// The tidyNode class
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// An HTML node in an HTML file, as detected by tidy.
// 
// Class synopsis
// final class tidyNode {
// 
//    /* Properties */
//    public readonly string $value;
//    public readonly string $name;
//    public readonly int $type;
//    public readonly int $line;
//    public readonly int $column;
//    public readonly bool $proprietary;
//    public readonly ?int $id;
//    public readonly ?array $attribute;
//    public readonly ?array $child;
// 
//    /* Methods */
//    private __construct()
//    public getParent(): ?tidyNode
//    public hasChildren(): bool
//    public hasSiblings(): bool
//    public isAsp(): bool
//    public isComment(): bool
//    public isHtml(): bool
//    public isJste(): bool
//    public isPhp(): bool
//    public isText(): bool
// }
// 
// Properties
// value       - The HTML representation of the node, including the surrounding tags.
// name        - The name of the HTML node
// type        - The type of the node (one of the nodetype constants, e.g. TIDY_NODETYPE_PHP)
// line        - The line number at which the tags is located in the file
// column      - The column number at which the tags is located in the file
// proprietary - Indicates if the node is a proprietary tag
// id          - The ID of the node (one of the tag constants, e.g. TIDY_TAG_FRAME)
// attribute   - An array of string, representing the attributes names (as keys) of the current node.
// child       - An array of tidyNode, representing the children of the current node.
// 
// Table of Contents
// * tidyNode::__construct - Private constructor to disallow direct instantiation
// * tidyNode::getParent   - Returns the parent node of the current node
// * tidyNode::hasChildren - Checks if a node has children
// * tidyNode::hasSiblings - Checks if a node has siblings
// * tidyNode::isAsp       - Checks if this node is ASP
// * tidyNode::isComment   - Checks if a node represents a comment
// * tidyNode::isHtml      - Checks if a node is an element node
// * tidyNode::isJste      - Checks if this node is JSTE
// * tidyNode::isPhp       - Checks if a node is PHP
// * tidyNode::isText      - Checks if a node represents text (no markup)
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/class.tidynode.php
// THE_TIDYNODE_CLASS - END
// 
// TIDY_FUNCTIONS - BEGIN
// Tidy Functions
// 
// Table of Contents
// * ob_tidyhandler     - ob_start callback function to repair the buffer
// * tidy_access_count  - Returns the Number of Tidy accessibility warnings encountered for specified document
// * tidy_config_count  - Returns the Number of Tidy configuration errors encountered for specified document
// * tidy_error_count   - Returns the Number of Tidy errors encountered for specified document
// * tidy_get_output    - Return a string representing the parsed tidy markup
// * tidy_warning_count - Returns the Number of Tidy warnings encountered for specified document
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/ref.tidy.php
// TIDY_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/book.tidy.php
// TIDY - END
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_OB_TIDYHANDLER 
// ============================== PUBLIC
// ============================== ABOUT
// ob_start callback function to repair the buffer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_tidyhandler() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_ob_tidyhandler($input, $mode)
{
$return_ob_tidyhandler = null;

// ========== OB_TIDYHANDLER - BEGIN
// ===== ABOUT
// ob_start callback function to repair the buffer
// ===== DESCRIPTION
// Callback function for ob_start() to repair the buffer.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_tidyhandler(string $input, int $mode = ?): string
// ===== CODE
$return_ob_tidyhandler = ob_tidyhandler(

$input, // string input - The buffer.

$mode // int mode - The buffer mode.

); // Return Values
// Returns the modified buffer.
// 
// [examples]
// Examples
// [example]
// Example #1 ob_tidyhandler() example
// [php]
// ob_start('ob_tidyhandler');
// 
// echo '<p>test</i>';
// [/php]
// The above example will output:
// [result]
// <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
// <html>
// <head>
// <title></title>
// </head>
// <body>
// <p>test</p>
// </body>
// </html>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/function.ob-tidyhandler.php
// ========== OB_TIDYHANDLER - END

// SYNTAX:
// string ob_tidyhandler(string $input, int $mode)

return $return_ob_tidyhandler; // string
}
// ============================== END
// PHP_BASIC_TIDY_OB_TIDYHANDLER 
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_ACCESS_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the Number of Tidy accessibility warnings encountered for specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING FUNCTIONS (1)
// tidy_access_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_access_count($tidy)
{
$return_tidy_access_count = 0;

// ========== TIDY_ACCESS_COUNT - BEGIN
// ===== ABOUT
// Returns the Number of Tidy accessibility warnings encountered for specified document
// ===== DESCRIPTION
// tidy_access_count() returns the number of accessibility warnings found for the specified document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// tidy_access_count(tidy $tidy): int
// ===== CODE
$return_tidy_access_count = tidy_access_count(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns the number of warnings.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_access_count() example
// [php]
// 
// $html ='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
// <html><head><title>Title</title></head>
// <body>
// 
// <p><img src="img.png"></p>
// 
// </body></html>';
// 
// 
// // select the accessibility check level: 1, 2 or 3
// $config = array('accessibility-check' => 3);
// 
// $tidy = new tidy();
// $tidy->parseString($html, $config);
// $tidy->cleanRepair();
// 
// /* Never forget to call this! */
// $tidy->diagnose();
// 
// echo tidy_access_count($tidy); //5
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Due to the design of the TidyLib, you must call tidy_diagnose() before tidy_access_count() or it will return always 0. You must also need to enable the accessibility-check option.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/function.tidy-access-count.php
// ========== TIDY_ACCESS_COUNT - END

// SYNTAX:
// int tidy_access_count(tidy $tidy)

return $return_tidy_access_count; // int
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_ACCESS_COUNT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_CONFIG_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the Number of Tidy configuration errors encountered for specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING FUNCTIONS (1)
// tidy_config_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_config_count($tidy)
{
$return_tidy_config_count = 0;

// ========== TIDY_CONFIG_COUNT - BEGIN
// ===== ABOUT
// Returns the Number of Tidy configuration errors encountered for specified document
// ===== DESCRIPTION
// Returns the number of errors encountered in the configuration of the specified tidy tidy.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// tidy_config_count(tidy $tidy): int
// ===== CODE
$return_tidy_config_count = tidy_config_count(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns the number of errors.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_config_count() example
// [php]
// $html = '<p>test</I>';
// 
// $config = array('doctype' => 'bogus');
// 
// $tidy = tidy_parse_string($html, $config);
// 
// // This outputs 1, because 'bogus' isn't a valid doctype
// echo tidy_config_count($tidy);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/function.tidy-config-count.php
// ========== TIDY_CONFIG_COUNT - END

// SYNTAX:
// int tidy_config_count(tidy $tidy)

return $return_tidy_config_count; // int
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_CONFIG_COUNT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_ERROR_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the Number of Tidy errors encountered for specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING FUNCTIONS (1)
// tidy_error_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_error_count($tidy)
{
$return_tidy_error_count = 0;

// ========== TIDY_ERROR_COUNT - BEGIN
// ===== ABOUT
// Returns the Number of Tidy errors encountered for specified document
// ===== DESCRIPTION
// Returns the number of Tidy errors encountered for the specified document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// tidy_error_count(tidy $tidy): int
// ===== CODE
$return_tidy_error_count = tidy_error_count(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns the number of errors.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_error_count() example
// [php]
// $html = '<p>test</i>
// <bogustag>bogus</bogustag>';
// 
// $tidy = tidy_parse_string($html);
// 
// echo tidy_error_count($tidy) . "\n"; //1
// 
// echo $tidy->errorBuffer;
// [/php]
// The above example will output:
// [result]
// 1
// line 1 column 1 - Warning: missing <!DOCTYPE> declaration
// line 1 column 8 - Warning: discarding unexpected </i>
// line 2 column 1 - Error: <bogustag> is not recognized!
// line 2 column 1 - Warning: discarding unexpected <bogustag>
// line 2 column 16 - Warning: discarding unexpected </bogustag>
// line 1 column 1 - Warning: inserting missing 'title' element
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/function.tidy-error-count.php
// ========== TIDY_ERROR_COUNT - END

// SYNTAX:
// int tidy_error_count(tidy $tidy)

return $return_tidy_error_count; // int
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_ERROR_COUNT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_GET_OUTPUT
// ============================== PUBLIC
// ============================== ABOUT
// Return a string representing the parsed tidy markup.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING FUNCTIONS (1)
// tidy_get_output() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_get_output($tidy)
{
$return_tidy_get_output = null;

// ========== TIDY_GET_OUTPUT - BEGIN
// ===== ABOUT
// Return a string representing the parsed tidy markup
// ===== DESCRIPTION
// Gets a string with the repaired html.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// tidy_get_output(tidy $tidy): string
// ===== CODE
$return_tidy_get_output = tidy_get_output(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns the parsed tidy markup.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_get_output() example
// [php]
// 
// $html = '<p>paragraph</i>';
// $tidy = tidy_parse_string($html);
// 
// $tidy->cleanRepair();
// 
// echo tidy_get_output($tidy);
// [/php]
// The above example will output:
// [result]
// <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
// <html>
// <head>
// <title></title>
// </head>
// <body>
// <p>paragraph</p>
// </body>
// </html>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/function.tidy-get-output.php
// ========== TIDY_GET_OUTPUT - END

// SYNTAX:
// string tidy_get_output(tidy $tidy)

return $return_tidy_get_output; // string
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_GET_OUTPUT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_WARNING_COUNT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the Number of Tidy warnings encountered for specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING FUNCTIONS (1)
// tidy_warning_count() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_warning_count($tidy)
{
$return_tidy_warning_count = 0;

// ========== TIDY_WARNING_COUNT - BEGIN
// ===== ABOUT
// Returns the Number of Tidy warnings encountered for specified document
// ===== DESCRIPTION
// Returns the number of Tidy warnings encountered for the specified document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// tidy_warning_count(tidy $tidy): int
// ===== CODE
$return_tidy_warning_count = tidy_warning_count(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns the number of warnings.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_warning_count() example
// [php]
// $html = '<p>test</i>
// <bogustag>bogus</bogustag>';
// 
// $tidy = tidy_parse_string($html);
// 
// echo tidy_error_count($tidy) . "\n"; //1
// echo tidy_warning_count($tidy) . "\n"; //5
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/function.tidy-warning-count.php
// ========== TIDY_WARNING_COUNT - END

// SYNTAX:
// int tidy_warning_count(tidy $tidy)

return $return_tidy_warning_count; // int
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_WARNING_COUNT
// ==============================


// ============================== BEGIN
//      PHP_BASIC_TIDY_TIDY      
// ============================== PUBLIC
// PHP_BASIC_TIDY_TIDY_BODY - tidyNode php_basic_tidy_tidy_body(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_CLEANREPAIR - bool php_basic_tidy_tidy_cleanrepair(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_CONSTRUCT - tidy php_basic_tidy_tidy_construct(tidy $tidy, string $filename = null, array|string|null $config = null, string $encoding = null, bool $useIncludePath = false)
// PHP_BASIC_TIDY_TIDY_DIAGNOSE - bool php_basic_tidy_tidy_diagnose(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_ERRORBUFFER - string php_basic_tidy_tidy_errorbuffer(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_GETCONFIG - array php_basic_tidy_tidy_getconfig(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_GETHTMLVER - int php_basic_tidy_tidy_gethtmlver(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_GETOPT - string|int|bool php_basic_tidy_tidy_getopt(tidy $tidy, string $option)
// PHP_BASIC_TIDY_TIDY_GETOPTDOC - string|false php_basic_tidy_tidy_getoptdoc(tidy $tidy, string $option)
// PHP_BASIC_TIDY_TIDY_GETRELEASE - string php_basic_tidy_tidy_getrelease(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_GETSTATUS - int php_basic_tidy_tidy_getstatus(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_HEAD - tidyNode php_basic_tidy_tidy_head(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_HTML - tidyNode php_basic_tidy_tidy_html(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_ISXHTML - bool php_basic_tidy_tidy_isxhtml(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_ISXML - bool php_basic_tidy_tidy_isxml(tidy $tidy)
// PHP_BASIC_TIDY_TIDY_PARSEFILE - bool php_basic_tidy_tidy_parsefile(tidy $tidy, string $filename, array|string|null $config = null, string $encoding = null, bool $useIncludePath = false)
// PHP_BASIC_TIDY_TIDY_PARSESTRING - bool php_basic_tidy_tidy_parsestring(tidy $tidy, string $string, array|string|null $config = null, string $encoding = null)
// PHP_BASIC_TIDY_TIDY_REPAIRFILE - string|false php_basic_tidy_tidy_repairfile(tidy $tidy, string $filename, array|string|null $config = null, string $encoding = null, bool $useIncludePath = false)
// PHP_BASIC_TIDY_TIDY_REPAIRSTRING - string|false php_basic_tidy_tidy_repairstring(tidy $tidy, string $string, array|string|null $config = null, string $encoding = null)
// PHP_BASIC_TIDY_TIDY_ROOT - tidyNode php_basic_tidy_tidy_root(tidy $tidy)
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_1_0_0
// ============================== USING SUBCLASSES (20)
// tidy::body() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0
// tidy::cleanRepair() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::__construct() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::diagnose() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// $tidy->errorBuffer() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::getConfig() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// tidy::getHtmlVer() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::getOpt() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::getOptDoc() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// tidy::getRelease() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::getStatus() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::head() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// tidy::html() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// tidy::isXhtml() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::isXml() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::parseFile() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::parseString() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// tidy::repairFile() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// tidy::repairString() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// tidy::root() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ============================== USING DATA_TYPES (8)
// tidyNode - PHP_5, PHP_7, PHP_8
// tidy - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// bool
// string
// array
// null
// int
// false
// ==============================


// ============================== BEGIN
//    PHP_BASIC_TIDY_TIDY_BODY    
// ============================== PUBLIC
// ============================== ABOUT
// Returns a tidyNode object starting from the <body> tag of the tidy parse tree.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_1_0
// ============================== USING SUBCLASSES (1)
// tidy::body() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0
// ============================== CODE
function php_basic_tidy_tidy_body($tidy)
{
$return_tidy_body = null;

// ========== TIDY_BODY - BEGIN
// ===== ABOUT
// Returns a tidyNode object starting from the <body> tag of the tidy parse tree
// ===== DESCRIPTION
// Returns a tidyNode object starting from the <body> tag of the tidy parse tree.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0
// ===== SYNTAX
// Object-oriented style
// public tidy::body(): ?tidyNode
// 
// Procedural style
// tidy_get_body(tidy $tidy): ?tidyNode
// ===== CODE
$return_tidy_body = $tidy->body(

); // Return Values
// Returns a tidyNode object starting from the <body> tag of the tidy parse tree.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::getBody() example
// [php]
// $html = '
// <html>
//   <head>
//     <title>test</title>
//   </head>
//   <body>
//     <p>paragraph</p>
//   </body>
// </html>';
// 
// $tidy = tidy_parse_string($html);
// 
// $body = $tidy->Body();
// echo $body->value;
// [/php]
// The above example will output:
// [result]
// <body>
// <p>paragraph</p>
// </body>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.body.php
// ========== TIDY_BODY - END

// SYNTAX:
// tidyNode tidy::body()

return $return_tidy_body; // tidyNode
}
// ============================== END
//    PHP_BASIC_TIDY_TIDY_BODY    
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_CLEANREPAIR
// ============================== PUBLIC
// ============================== ABOUT
// Execute configured cleanup and repair operations on parsed markup.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::cleanRepair() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_cleanrepair($tidy)
{
$return_tidy_cleanrepair = false;

// ========== TIDY_CLEANREPAIR - BEGIN
// ===== ABOUT
// Execute configured cleanup and repair operations on parsed markup
// ===== DESCRIPTION
// This function cleans and repairs the given tidy tidy.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::cleanRepair(): bool
// 
// Procedural style
// tidy_clean_repair(tidy $tidy): bool
// ===== CODE
$return_tidy_cleanrepair = $tidy->cleanRepair(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::cleanrepair() example
// [php]
// $html = '<p>test</I>';
// 
// $tidy = tidy_parse_string($html);
// $tidy->cleanRepair();
// 
// echo $tidy;
// [/php]
// The above example will output:
// [result]
// <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
// <html>
// <head>
// <title></title>
// </head>
// <body>
// <p>test</p>
// </body>
// </html>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.cleanrepair.php
// ========== TIDY_CLEANREPAIR - END

// SYNTAX:
// bool tidy::cleanRepair()

return $return_tidy_cleanrepair; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_CLEANREPAIR
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_CONSTRUCT 
// ============================== PUBLIC
// ============================== ABOUT
// Constructs a new tidy object.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::__construct() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_construct($tidy, $filename = null, $config = null, $encoding = null, $useIncludePath = false)
{
$return_tidy_construct = null;

// ========== TIDY_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new tidy object
// ===== DESCRIPTION
// Constructs a new tidy object.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// public tidy::__construct(
//     ?string $filename = null,
//     array|string|null $config = null,
//     ?string $encoding = null,
//     bool $useIncludePath = false
// )
// ===== CODE
$return_tidy_construct = $tidy->__construct(

$filename, // string filename - If the filename parameter is given, this function will also read that file and initialize the object with the file, acting like tidy_parse_file().

$config, // array|string|null config - The config config can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.
// For an explanation about each option, visit > http://api.html-tidy.org/#quick-reference.

$encoding, // string encoding - The encoding parameter sets the encoding for input/output documents. The possible values for encoding are: ascii, latin0, latin1, raw, utf8, iso2022, mac, win1252, ibm858, utf16, utf16le, utf16be, big5, and shiftjis.

$useIncludePath // bool useIncludePath - Search for the file in the include_path.

); // Return
// tidy
// 
// Changelog
// Version - Description
// 8.0.0   - filename, config, encoding and useIncludePath are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::__construct() example
// [php]
// 
// $html = <<< HTML
// 
// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
// "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
// 
// <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
// <head><title>title</title></head>
// <body>
// <p>paragraph <bt />
// text</p>
// </body></html>
// 
// HTML;
// 
// $tidy = new tidy();
// $tidy->ParseString($html);
// 
// $tidy->cleanRepair();
// 
// if ($tidy->errorBuffer) {
//     echo "The following errors were detected:\n";
//     echo $tidy->errorBuffer;
// }
// 
// [/php]
// The above example will output:
// [result]
// The following errors were detected:
// line 8 column 14 - Error: <bt> is not recognized!
// line 8 column 14 - Warning: discarding unexpected <bt>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.construct.php
// ========== TIDY_CONSTRUCT - END

// SYNTAX:
// tidy tidy::__construct(string $filename = null, array|string|null $config = null, string $encoding = null, bool $useIncludePath = false)

return $return_tidy_construct; // tidy
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_CONSTRUCT 
// ==============================


// ============================== BEGIN
//  PHP_BASIC_TIDY_TIDY_DIAGNOSE  
// ============================== PUBLIC
// ============================== ABOUT
// Run configured diagnostics on parsed and repaired markup.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::diagnose() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_diagnose($tidy)
{
$return_tidy_diagnose = false;

// ========== TIDY_DIAGNOSE - BEGIN
// ===== ABOUT
// Run configured diagnostics on parsed and repaired markup
// ===== DESCRIPTION
// Runs diagnostic tests on the given tidy tidy, adding some more information about the document in the error buffer.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::diagnose(): bool
// 
// Procedural style
// tidy_diagnose(tidy $tidy): bool
// ===== CODE
$return_tidy_diagnose = $tidy->diagnose(

$tidy // tidy tidy - The Tidy object.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::diagnose() example
// [php]
// 
// $html = <<< HTML
// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
// "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
// 
// <p>paragraph</p>
// HTML;
// 
// $tidy = tidy_parse_string($html);
// $tidy->cleanRepair();
// 
// // note the difference between the two outputs
// echo $tidy->errorBuffer . "\n";
// 
// $tidy->diagnose();
// echo $tidy->errorBuffer;
// 
// [/php]
// The above example will output:
// [result]
// line 4 column 1 - Warning: <p> isn't allowed in <head> elements
// line 4 column 1 - Warning: inserting missing 'title' element
// line 4 column 1 - Warning: <p> isn't allowed in <head> elements
// line 4 column 1 - Warning: inserting missing 'title' element
// Info: Doctype given is "-//W3C//DTD XHTML 1.0 Strict//EN"
// Info: Document content looks like XHTML 1.0 Strict
// 2 warnings, 0 errors were found!
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.diagnose.php
// ========== TIDY_DIAGNOSE - END

// SYNTAX:
// bool tidy::diagnose()

return $return_tidy_diagnose; // bool
}
// ============================== END
//  PHP_BASIC_TIDY_TIDY_DIAGNOSE  
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_ERRORBUFFER
// ============================== PUBLIC
// ============================== ABOUT
// Return warnings and errors which occurred parsing the specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// $tidy->errorBuffer() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_errorbuffer($tidy)
{
$return_tidy_errorbuffer = null;

// ========== TIDY_ERRORBUFFER - BEGIN
// ===== ABOUT
// Return warnings and errors which occurred parsing the specified document
// ===== DESCRIPTION
// Returns warnings and errors which occurred parsing the specified document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style (property):
// public string $tidy->errorBuffer;
// 
// Procedural style:
// tidy_get_error_buffer(tidy $tidy): string|false
// ===== CODE
$return_tidy_errorbuffer = $tidy->errorBuffer(

// tidy tidy - The Tidy object.

); // Return Values
// Returns the error buffer as a string, or false if the buffer is empty.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_get_error_buffer() example
// [php]
// $html = '<p>paragraph</p>';
// 
// $tidy = tidy_parse_string($html);
// 
// echo tidy_get_error_buffer($tidy);
// /* or in OO: */
// echo $tidy->errorBuffer;
// [/php]
// The above example will output:
// [result]
// line 1 column 1 - Warning: missing <!DOCTYPE> declaration
// line 1 column 1 - Warning: inserting missing 'title' element
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.props.errorbuffer.php
// ========== TIDY_ERRORBUFFER - END

// SYNTAX:
// string $tidy->errorBuffer;

return $return_tidy_errorbuffer; // string
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_ERRORBUFFER
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_GETCONFIG 
// ============================== PUBLIC
// ============================== ABOUT
// Get current Tidy configuration.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_7_0
// ============================== USING SUBCLASSES (1)
// tidy::getConfig() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// ============================== CODE
function php_basic_tidy_tidy_getconfig($tidy)
{
$return_tidy_getconfig = null;

// ========== TIDY_GETCONFIG - BEGIN
// ===== ABOUT
// Get current Tidy configuration
// ===== DESCRIPTION
// Gets the list of the configuration options in use by the given tidy tidy.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// ===== SYNTAX
// Object-oriented style
// public tidy::getConfig(): array
// 
// Procedural style
// tidy_get_config(tidy $tidy): array
// ===== CODE
$return_tidy_getconfig = $tidy->getConfig(

// tidy tidy - The Tidy object.

); // Return Values
// Returns an array of configuration options.
// For an explanation about each option, visit > http://api.html-tidy.org/#quick-reference.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::getConfig() example
// [php]
// $html = '<p>test</p>';
// $config = array('indent' => TRUE,
//                 'output-xhtml' => TRUE,
//                 'wrap' => 200);
// 
// $tidy = tidy_parse_string($html, $config);
// 
// print_r($tidy->getConfig());
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [indent-spaces] => 2
//     [wrap] => 200
//     [tab-size] => 8
//     [char-encoding] => 1
//     [input-encoding] => 3
//     [output-encoding] => 1
//     [newline] => 1
//     [doctype-mode] => 1
//     [doctype] =>
//     [repeated-attributes] => 1
//     [alt-text] =>
//     [slide-style] =>
//     [error-file] =>
//     [output-file] =>
//     [write-back] =>
//     [markup] => 1
//     [show-warnings] => 1
//     [quiet] =>
//     [indent] => 1
//     [hide-endtags] =>
//     [input-xml] =>
//     [output-xml] => 1
//     [output-xhtml] => 1
//     [output-html] =>
//     [add-xml-decl] =>
//     [uppercase-tags] =>
//     [uppercase-attributes] =>
//     [bare] =>
//     [clean] =>
//     [logical-emphasis] =>
//     [drop-proprietary-attributes] =>
//     [drop-font-tags] =>
//     [drop-empty-paras] => 1
//     [fix-bad-comments] => 1
//     [break-before-br] =>
//     [split] =>
//     [numeric-entities] =>
//     [quote-marks] =>
//     [quote-nbsp] => 1
//     [quote-ampersand] => 1
//     [wrap-attributes] =>
//     [wrap-script-literals] =>
//     [wrap-sections] => 1
//     [wrap-asp] => 1
//     [wrap-jste] => 1
//     [wrap-php] => 1
//     [fix-backslash] => 1
//     [indent-attributes] =>
//     [assume-xml-procins] =>
//     [add-xml-space] =>
//     [enclose-text] =>
//     [enclose-block-text] =>
//     [keep-time] =>
//     [word-2000] =>
//     [tidy-mark] =>
//     [gnu-emacs] =>
//     [gnu-emacs-file] =>
//     [literal-attributes] =>
//     [show-body-only] =>
//     [fix-uri] => 1
//     [lower-literals] => 1
//     [hide-comments] =>
//     [indent-cdata] =>
//     [force-output] => 1
//     [show-errors] => 6
//     [ascii-chars] => 1
//     [join-classes] =>
//     [join-styles] => 1
//     [escape-cdata] =>
//     [language] =>
//     [ncr] => 1
//     [output-bom] => 2
//     [replace-color] =>
//     [css-prefix] =>
//     [new-inline-tags] =>
//     [new-blocklevel-tags] =>
//     [new-empty-tags] =>
//     [new-pre-tags] =>
//     [accessibility-check] => 0
//     [vertical-space] =>
//     [punctuation-wrap] =>
//     [merge-divs] => 1
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.getconfig.php
// ========== TIDY_GETCONFIG - END

// SYNTAX:
// array tidy::getConfig()

return $return_tidy_getconfig; // array
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_GETCONFIG 
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_GETHTMLVER
// ============================== PUBLIC
// ============================== ABOUT
// Get the Detected HTML version for the specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::getHtmlVer() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_gethtmlver($tidy)
{
$return_tidy_gethtmlver = 0;

// ========== TIDY_GETHTMLVER - BEGIN
// ===== ABOUT
// Get the Detected HTML version for the specified document
// ===== DESCRIPTION
// Returns the detected HTML version for the specified tidy tidy.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::getHtmlVer(): int
// 
// Procedural style
// tidy_get_html_ver(tidy $tidy): int
// ===== CODE
$return_tidy_gethtmlver = $tidy->getHtmlVer(

// tidy tidy - The Tidy object.

); // Return Values
// Returns the detected HTML version.
// Warning: This function is not yet implemented in the Tidylib itself, so it always return 0.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.gethtmlver.php
// ========== TIDY_GETHTMLVER - END

// SYNTAX:
// int tidy::getHtmlVer()

return $return_tidy_gethtmlver; // int
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_GETHTMLVER
// ==============================


// ============================== BEGIN
//   PHP_BASIC_TIDY_TIDY_GETOPT   
// ============================== PUBLIC
// ============================== ABOUT
// Returns the value of the specified configuration option for the tidy document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::getOpt() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_getopt($tidy, $option)
{
$return_tidy_getopt = null;

// ========== TIDY_GETOPT - BEGIN
// ===== ABOUT
// Returns the value of the specified configuration option for the tidy document
// ===== DESCRIPTION
// Returns the value of the specified option for the specified tidy tidy.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::getOpt(string $option): string|int|bool
// 
// Procedural style
// tidy_getopt(tidy $tidy, string $option): string|int|bool
// ===== CODE
$return_tidy_getopt = $tidy->getOpt(

// tidy tidy - The Tidy object.

$option // string option - You will find a list with each configuration option and their types at: > http://api.html-tidy.org/#quick-reference.

); // Return Values
// Returns the value of the specified option. The return type depends on the type of the specified one.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy_getopt() example
// [php]
// 
// $html ='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
// <html><head><title>Title</title></head>
// <body>
// 
// <p><img src="img.png"></p>
// 
// </body></html>';
// 
// $config = array('accessibility-check' => 3,
//                 'alt-text' => 'some text');
// 
// $tidy = new tidy();
// $tidy->parseString($html, $config);
// 
// 
// var_dump($tidy->getOpt('accessibility-check')); //integer
// var_dump($tidy->getOpt('lower-literals')); //boolean
// var_dump($tidy->getOpt('alt-text')); //string
// 
// [/php]
// The above example will output:
// [result]
// int(3)
// bool(true)
// string(9) "some text"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.getopt.php
// ========== TIDY_GETOPT - END

// SYNTAX:
// string|int|bool tidy::getOpt(string $option)

return $return_tidy_getopt; // string|int|bool
}
// ============================== END
//   PHP_BASIC_TIDY_TIDY_GETOPT   
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_GETOPTDOC 
// ============================== PUBLIC
// ============================== ABOUT
// Returns the documentation for the given option name.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidy::getOptDoc() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidy_getoptdoc($tidy, $option)
{
$return_tidy_getoptdoc = false;

// ========== TIDY_GETOPTDOC - BEGIN
// ===== ABOUT
// Returns the documentation for the given option name
// ===== DESCRIPTION
// tidy_get_opt_doc() returns the documentation for the given option name.
// Note: You need at least libtidy from 25 April, 2005 for this function be available.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public tidy::getOptDoc(string $option): string|false
// 
// Procedural style
// tidy_get_opt_doc(tidy $tidy, string $option): string|false
// ===== CODE
$return_tidy_getoptdoc = $tidy->getOptDoc(

// tidy tidy - The Tidy object.

$option // string option - The option name

); // Return Values
// Returns a string if the option exists and has documentation available, or false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Print all options along with their documentation and default value
// [php]
// 
// $tidy = new tidy;
// $config = $tidy->getConfig();
// 
// ksort($config);
// 
// foreach ($config as $opt => $val) {
// 
//     if (!$doc = $tidy->getOptDoc($opt))
//         $doc = 'no documentation available!';
// 
//     $val = ($tidy->getOpt($opt) === true)  ? 'true'  : $val;
//     $val = ($tidy->getOpt($opt) === false) ? 'false' : $val;
// 
//     echo "<p><b>$opt</b> (default: '$val')<br />".
//          "$doc</p><hr />\n";
// }
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.getoptdoc.php
// ========== TIDY_GETOPTDOC - END

// SYNTAX:
// string|false tidy::getOptDoc(string $option)

return $return_tidy_getoptdoc; // string|false
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_GETOPTDOC 
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_GETRELEASE
// ============================== PUBLIC
// ============================== ABOUT
// Get release date (version) for Tidy library.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::getRelease() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_getrelease($tidy)
{
$return_tidy_getrelease = null;

// ========== TIDY_GETRELEASE - BEGIN
// ===== ABOUT
// Get release date (version) for Tidy library
// ===== DESCRIPTION
// Gets the release date of the Tidy library.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::getRelease(): string
// 
// Procedural style
// tidy_get_release(): string
// ===== CODE
$return_tidy_getrelease = $tidy->getRelease(

// This function has no parameters.

); // Return Values
// Returns a string with the release date of the Tidy library, which may be 'unknown'.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.getrelease.php
// ========== TIDY_GETRELEASE - END

// SYNTAX:
// string tidy::getRelease()

return $return_tidy_getrelease; // string
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_GETRELEASE
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_GETSTATUS 
// ============================== PUBLIC
// ============================== ABOUT
// Get status of specified document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::getStatus() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_getstatus($tidy)
{
$return_tidy_getstatus = 0;

// ========== TIDY_GETSTATUS - BEGIN
// ===== ABOUT
// Get status of specified document
// ===== DESCRIPTION
// Returns the status for the specified tidy tidy.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::getStatus(): int
// 
// Procedural style
// tidy_get_status(tidy $tidy): int
// ===== CODE
$return_tidy_getstatus = $tidy->getStatus(

// tidy tidy - The Tidy object.

); // Return Values
// Returns 0 if no error/warning was raised, 1 for warnings or accessibility errors, or 2 for errors.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::getStatus() example
// [php]
// $html = '<p>paragraph</i>';
// $tidy = new tidy();
// $tidy->parseString($html);
// 
// $tidy2 = new tidy();
// $html2 = '<bogus>test</bogus>';
// $tidy2->parseString($html2);
// 
// echo $tidy->getStatus(); //1
// 
// echo $tidy2->getStatus(); //2
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.getstatus.php
// ========== TIDY_GETSTATUS - END

// SYNTAX:
// int tidy::getStatus()

return $return_tidy_getstatus; // int
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_GETSTATUS 
// ==============================


// ============================== BEGIN
//    PHP_BASIC_TIDY_TIDY_HEAD    
// ============================== PUBLIC
// ============================== ABOUT
// Returns a tidyNode object starting from the <head> tag of the tidy parse tree.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_1_0_0
// ============================== USING SUBCLASSES (1)
// tidy::head() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ============================== CODE
function php_basic_tidy_tidy_head($tidy)
{
$return_tidy_head = null;

// ========== TIDY_HEAD - BEGIN
// ===== ABOUT
// Returns a tidyNode object starting from the <head> tag of the tidy parse tree
// ===== DESCRIPTION
// Returns a tidyNode object starting from the <head> tag of the tidy parse tree.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ===== SYNTAX
// Object-oriented style
// public tidy::head(): ?tidyNode
// 
// Procedural style
// tidy_get_head(tidy $tidy): ?tidyNode
// ===== CODE
$return_tidy_head = $tidy->head(

// tidy tidy - The Tidy object.

); // Return Values
// Returns the tidyNode object.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::head() example
// [php]
// $html = '
// <html>
//   <head>
//     <title>test</title>
//   </head>
//   <body>
//     <p>paragraph</p>
//   </body>
// </html>';
// 
// $tidy = tidy_parse_string($html);
// 
// $head = $tidy->head();
// echo $head->value;
// [/php]
// The above example will output:
// [result]
// <head>
// <title>test</title>
// </head>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.head.php
// ========== TIDY_HEAD - END

// SYNTAX:
// tidyNode tidy::head()

return $return_tidy_head; // tidyNode
}
// ============================== END
//    PHP_BASIC_TIDY_TIDY_HEAD    
// ==============================


// ============================== BEGIN
//    PHP_BASIC_TIDY_TIDY_HTML    
// ============================== PUBLIC
// ============================== ABOUT
// Returns a tidyNode object starting from the <html> tag of the tidy parse tree.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_1_0_0
// ============================== USING SUBCLASSES (1)
// tidy::html() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ============================== CODE
function php_basic_tidy_tidy_html($tidy)
{
$return_tidy_html = null;

// ========== TIDY_HTML - BEGIN
// ===== ABOUT
// Returns a tidyNode object starting from the <html> tag of the tidy parse tree
// ===== DESCRIPTION
// Returns a tidyNode object starting from the <html> tag of the tidy parse tree.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ===== SYNTAX
// Object-oriented style
// public tidy::html(): ?tidyNode
// 
// Procedural style
// tidy_get_html(tidy $tidy): ?tidyNode
// ===== CODE
$return_tidy_html = $tidy->html(

// tidy tidy - The Tidy object.

); // Return Values
// Returns the tidyNode object.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::html() example
// [php]
// $html = '
// <html>
//   <head>
//     <title>test</title>
//   </head>
//   <body>
//     <p>paragraph</p>
//   </body>
// </html>';
// 
// $tidy = tidy_parse_string($html);
// 
// $html = $tidy->html();
// echo $html->value;
// [/php]
// The above example will output:
// [result]
// <html>
// <head>
// <title>test</title>
// </head>
// <body>
// <p>paragraph</p>
// </body>
// </html>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-22)
// URL: https://www.php.net/manual/en/tidy.html.php
// ========== TIDY_HTML - END

// SYNTAX:
// tidyNode tidy::html()

return $return_tidy_html; // tidyNode
}
// ============================== END
//    PHP_BASIC_TIDY_TIDY_HTML    
// ==============================


// ============================== BEGIN
//  PHP_BASIC_TIDY_TIDY_ISXHTML  
// ============================== PUBLIC
// ============================== ABOUT
// Indicates if the document is a XHTML document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::isXhtml() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_isxhtml($tidy)
{
$return_tidy_isxhtml = false;

// ========== TIDY_ISXHTML - BEGIN
// ===== ABOUT
// Indicates if the document is a XHTML document
// ===== DESCRIPTION
// Tells if the document is a XHTML document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::isXhtml(): bool
// 
// Procedural style
// tidy_is_xhtml(tidy $tidy): bool
// ===== CODE
$return_tidy_isxhtml = $tidy->isXhtml(

// tidy tidy - The Tidy object.

); // Return Values
// This function returns true if the specified tidy tidy is a XHTML document, or false otherwise.
// Warning: This function is not yet implemented in the Tidylib itself, so it always return false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.isxhtml.php
// ========== TIDY_ISXHTML - END

// SYNTAX:
// bool tidy::isXhtml()

return $return_tidy_isxhtml; // bool
}
// ============================== END
//  PHP_BASIC_TIDY_TIDY_ISXHTML  
// ==============================


// ============================== BEGIN
//   PHP_BASIC_TIDY_TIDY_ISXML   
// ============================== PUBLIC
// ============================== ABOUT
// Indicates if the document is a generic (non HTML/XHTML) XML document.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::isXml() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_isxml($tidy)
{
$return_tidy_isxml = false;

// ========== TIDY_ISXML - BEGIN
// ===== ABOUT
// Indicates if the document is a generic (non HTML/XHTML) XML document
// ===== DESCRIPTION
// Tells if the document is a generic (non HTML/XHTML) XML document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::isXml(): bool
// 
// Procedural style
// tidy_is_xml(tidy $tidy): bool
// ===== CODE
$return_tidy_isxml = $tidy->isXml(

// tidy tidy - The Tidy object.

); // Return Values
// This function returns true if the specified tidy tidy is a generic XML document (non HTML/XHTML), or false otherwise.
// Warning: This function is not yet implemented in the Tidylib itself, so it always return false.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.isxml.php
// ========== TIDY_ISXML - END

// SYNTAX:
// bool tidy::isXml()

return $return_tidy_isxml; // bool
}
// ============================== END
//   PHP_BASIC_TIDY_TIDY_ISXML   
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_PARSEFILE 
// ============================== PUBLIC
// ============================== ABOUT
// Parse markup in file or URI.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::parseFile() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_parsefile($tidy, $filename, $config = null, $encoding = null, $useIncludePath = false)
{
$return_tidy_parsefile = false;

// ========== TIDY_PARSEFILE - BEGIN
// ===== ABOUT
// Parse markup in file or URI
// ===== DESCRIPTION
// Parses the given file.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::parseFile(
//     string $filename,
//     array|string|null $config = null,
//     ?string $encoding = null,
//     bool $useIncludePath = false
// ): bool
// 
// Procedural style
// tidy_parse_file(
//     string $filename,
//     array|string|null $config = null,
//     ?string $encoding = null,
//     bool $useIncludePath = false
// ): tidy|false
// ===== CODE
$return_tidy_parsefile = $tidy->parseFile(

$filename, // string filename - If the filename parameter is given, this function will also read that file and initialize the object with the file, acting like tidy_parse_file().

$config, // array|string|null config - The config config can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.
// For an explanation about each option, see > http://api.html-tidy.org/#quick-reference.

$encoding, // string encoding - The encoding parameter sets the encoding for input/output documents. The possible values for encoding are: ascii, latin0, latin1, raw, utf8, iso2022, mac, win1252, ibm858, utf16, utf16le, utf16be, big5, and shiftjis.

$useIncludePath // bool useIncludePath - Search for the file in the include_path.

); // Return Values
// tidy::parseFile() returns true on success. tidy_parse_file() returns a new tidy instance on success. Both, the method and the function return false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - config and encoding are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::parseFile() example
// [php]
// $tidy = new tidy();
// $tidy->parseFile('file.html');
// 
// $tidy->cleanRepair();
// 
// if(!empty($tidy->errorBuffer)) {
//     echo "The following errors or warnings occurred:\n";
//     echo $tidy->errorBuffer;
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.parsefile.php
// ========== TIDY_PARSEFILE - END

// SYNTAX:
// bool tidy::parseFile(string $filename, array|string|null $config = null, string $encoding = null, bool $useIncludePath = false)

return $return_tidy_parsefile; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_PARSEFILE 
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_PARSESTRING
// ============================== PUBLIC
// ============================== ABOUT
// Parse a document stored in a string.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_5_2
// ============================== USING SUBCLASSES (1)
// tidy::parseString() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ============================== CODE
function php_basic_tidy_tidy_parsestring($tidy, $string, $config = null, $encoding = null)
{
$return_tidy_parsestring = false;

// ========== TIDY_PARSESTRING - BEGIN
// ===== ABOUT
// Parse a document stored in a string
// ===== DESCRIPTION
// Parses a document stored in a string.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_5_2
// ===== SYNTAX
// Object-oriented style
// public tidy::parseString(string $string, array|string|null $config = null, ?string $encoding = null): bool
// 
// Procedural style
// tidy_parse_string(string $string, array|string|null $config = null, ?string $encoding = null): tidy|false
// ===== CODE
$return_tidy_parsestring = $tidy->parseString(

$string, // string string - The data to be parsed.

$config, // array|string|null config - The config config can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.
// For an explanation about each option, visit > http://api.html-tidy.org/#quick-reference.

$encoding // string encoding - The encoding parameter sets the encoding for input/output documents. The possible values for encoding are: ascii, latin0, latin1, raw, utf8, iso2022, mac, win1252, ibm858, utf16, utf16le, utf16be, big5, and shiftjis.

); // Return Values
// tidy::parseString() returns true on success. tidy_parse_string() returns a new tidy instance on success. Both, the method and the function return false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - config and encoding are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::parseString() example
// [code]
// [php]
// ob_start();
// [/php]
// 
// <html>
//   <head>
//    <title>test</title>
//   </head>
//   <body>
//    <p>error<br>another line</i>
//   </body>
// </html>
// 
// [php]
// 
// $buffer = ob_get_clean();
// $config = array('indent' => TRUE,
//                 'output-xhtml' => TRUE,
//                 'wrap' => 200);
// 
// $tidy = tidy_parse_string($buffer, $config, 'UTF8');
// 
// $tidy->cleanRepair();
// echo $tidy;
// [/php]
// [/code]
// The above example will output:
// [result]
// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
//     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
// <html xmlns="http://www.w3.org/1999/xhtml">
//   <head>
//     <title>
//       test
//     </title>
//   </head>
//   <body>
//     <p>
//       error<br />
//       another line
//     </p>
//   </body>
// </html>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.parsestring.php
// ========== TIDY_PARSESTRING - END

// SYNTAX:
// bool tidy::parseString(string $string, array|string|null $config = null, string $encoding = null)

return $return_tidy_parsestring; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_PARSESTRING
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_REPAIRFILE
// ============================== PUBLIC
// ============================== ABOUT
// Repair a file and return it as a string.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_7_0
// ============================== USING SUBCLASSES (1)
// tidy::repairFile() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// ============================== CODE
function php_basic_tidy_tidy_repairfile($tidy, $filename, $config = null, $encoding = null, $useIncludePath = false)
{
$return_tidy_repairfile = false;

// ========== TIDY_REPAIRFILE - BEGIN
// ===== ABOUT
// Repair a file and return it as a string
// ===== DESCRIPTION
// Repairs the given file and returns it as a string.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// ===== SYNTAX
// Object-oriented style
// public static tidy::repairFile(
//     string $filename,
//     array|string|null $config = null,
//     ?string $encoding = null,
//     bool $useIncludePath = false
// ): string|false
// 
// Procedural style
// tidy_repair_file(
//     string $filename,
//     array|string|null $config = null,
//     ?string $encoding = null,
//     bool $useIncludePath = false
// ): string|false
// ===== CODE
$return_tidy_repairfile = $tidy->repairFile(

$filename, // string filename - The file to be repaired.

$config, // array|string|null config - The config config can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.
// Check http://tidy.sourceforge.net/docs/quickref.html for an explanation about each option.

$encoding, // string encoding - The encoding parameter sets the encoding for input/output documents. The possible values for encoding are: ascii, latin0, latin1, raw, utf8, iso2022, mac, win1252, ibm858, utf16, utf16le, utf16be, big5, and shiftjis.

$useIncludePath // bool useIncludePath - Search for the file in the include_path.

); // Return Values
// Returns the repaired contents as a string, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - tidy::repairFile() is a static method now.
// 8.0.0   - config and encoding are nullable now.
// 
// [examples]
// Examples
// Example #1 tidy::repairFile() example
// [example]
// [php]
// $file = 'file.html';
// 
// $tidy = new tidy();
// $repaired = $tidy->repairfile($file);
// rename($file, $file . '.bak');
// 
// file_put_contents($file, $repaired);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-21)
// URL: https://www.php.net/manual/en/tidy.repairfile.php
// ========== TIDY_REPAIRFILE - END

// SYNTAX:
// string|false tidy::repairFile(string $filename, array|string|null $config = null, string $encoding = null, bool $useIncludePath = false)

return $return_tidy_repairfile; // string|false
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_REPAIRFILE
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDY_REPAIRSTRING
// ============================== PUBLIC
// ============================== ABOUT
// Repair a string using an optionally provided configuration file.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_0_7_0
// ============================== USING SUBCLASSES (1)
// tidy::repairString() - PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// ============================== CODE
function php_basic_tidy_tidy_repairstring($tidy, $string, $config = null, $encoding = null)
{
$return_tidy_repairstring = false;

// ========== TIDY_REPAIRSTRING - BEGIN
// ===== ABOUT
// Repair a string using an optionally provided configuration file
// ===== DESCRIPTION
// Repairs the given string.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy >= PECL_tidy_0_7_0
// ===== SYNTAX
// Object-oriented style
// public static tidy::repairString(string $string, array|string|null $config = null, ?string $encoding = null): string|false
// 
// Procedural style
// tidy_repair_string(string $string, array|string|null $config = null, ?string $encoding = null): string|false
// ===== CODE
$return_tidy_repairstring = $tidy->repairString(

$string, // string string - The data to be repaired.

$config, // array|string|null config - The config config can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.
// Check > http://api.html-tidy.org/#quick-reference for an explanation about each option.

$encoding // string encoding - The encoding parameter sets the encoding for input/output documents. The possible values for encoding are: ascii, latin0, latin1, raw, utf8, iso2022, mac, win1252, ibm858, utf16, utf16le, utf16be, big5, and shiftjis.

); // Return Values
// Returns the repaired string, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - tidy::repairString() is a static method now.
// 8.0.0   - config and encoding are nullable now.
// 8.0.0   - This function no longer accepts the useIncludePath parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::repairString() example
// [php]
// ob_start();
// [/php]
// 
// <html>
//   <head>
//     <title>test</title>
//   </head>
//   <body>
//     <p>error</i>
//   </body>
// </html>
// 
// [php]
// 
// $buffer = ob_get_clean();
// $tidy = new tidy();
// $clean = $tidy->repairString($buffer);
// 
// echo $clean;
// [/php]
// The above example will output:
// [result]
// <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
// <html>
// <head>
// <title>test</title>
// </head>
// <body>
// <p>error</p>
// </body>
// </html>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidy.repairstring.php
// ========== TIDY_REPAIRSTRING - END

// SYNTAX:
// string|false tidy::repairString(string $string, array|string|null $config = null, string $encoding = null)

return $return_tidy_repairstring; // string|false
}
// ============================== END
// PHP_BASIC_TIDY_TIDY_REPAIRSTRING
// ==============================


// ============================== BEGIN
//    PHP_BASIC_TIDY_TIDY_ROOT    
// ============================== PUBLIC
// ============================== ABOUT
// Returns a tidyNode object representing the root of the tidy parse tree.
// ============================== SUPPORT
// PHP_5 - PHP_8, PECL_tidy_1_0_0
// ============================== USING SUBCLASSES (1)
// tidy::root() - PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ============================== CODE
function php_basic_tidy_tidy_root($tidy)
{
$return_tidy_root = null;

// ========== TIDY_ROOT - BEGIN
// ===== ABOUT
// Returns a tidyNode object representing the root of the tidy parse tree
// ===== DESCRIPTION
// Returns a tidyNode object representing the root of the tidy parse tree.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8, PECL_tidy_0_5_2-PECL_tidy_1_0_0
// ===== SYNTAX
// Object-oriented style
// public tidy::root(): ?tidyNode
// 
// Procedural style
// tidy_get_root(tidy $tidy): ?tidyNode
// ===== CODE
$return_tidy_root = $tidy->root(

// tidy tidy - The Tidy object.

); // Return Values
// Returns the tidyNode object.
// 
// [examples]
// Examples
// [example]
// Example #1 tidy::root() example
// [php]
// 
// $html = <<< HTML
// <html><body>
// 
// <p>paragraph</p>
// <br/>
// 
// </body></html>
// HTML;
// 
// $tidy = tidy_parse_string($html);
// dump_nodes($tidy->root(), 1);
// 
// 
// function dump_nodes($node, $indent) {
// 
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             echo str_repeat('.', $indent*2) . ($child->name ? $child->name : '"'.$child->value.'"'). "\n";
// 
//             dump_nodes($child, $indent+1);
//         }
//     }
// }
// [/php]
// The above example will output:
// [result]
// ..html
// ....head
// ......title
// ....body
// ......p
// ........"paragraph"
// ......br
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidy.root.php
// ========== TIDY_ROOT - END

// SYNTAX:
// tidyNode tidy::root()

return $return_tidy_root; // tidyNode
}
// ============================== END
//    PHP_BASIC_TIDY_TIDY_ROOT    
// ==============================


// ============================== END
//      PHP_BASIC_TIDY_TIDY      
// ==============================


// ============================== BEGIN
//    PHP_BASIC_TIDY_TIDYNODE    
// ============================== PUBLIC
// PHP_BASIC_TIDY_TIDYNODE_CONSTRUCT - tidyNode php_basic_tidy_tidynode_construct()
// PHP_BASIC_TIDY_TIDYNODE_GETPARENT - tidyNode php_basic_tidy_tidynode_getparent(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_HASCHILDREN - bool php_basic_tidy_tidynode_haschildren(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_HASSIBLINGS - bool php_basic_tidy_tidynode_hassiblings(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_ISASP - bool php_basic_tidy_tidynode_isasp(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_ISCOMMENT - bool php_basic_tidy_tidynode_iscomment(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_ISHTML - bool php_basic_tidy_tidynode_ishtml(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_ISJSTE - bool php_basic_tidy_tidynode_isjste(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_ISPHP - bool php_basic_tidy_tidynode_isphp(tidyNode $tidynode)
// PHP_BASIC_TIDY_TIDYNODE_ISTEXT - bool php_basic_tidy_tidynode_istext(tidyNode $tidynode)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (10)
// tidyNode::__construct() - PHP_5, PHP_7, PHP_8
// tidyNode::getParent() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// tidyNode::hasChildren() - PHP_5, PHP_7, PHP_8
// tidyNode::hasSiblings() - PHP_5, PHP_7, PHP_8
// tidyNode::isAsp() - PHP_5, PHP_7, PHP_8
// tidyNode::isComment() - PHP_5, PHP_7, PHP_8
// tidyNode::isHtml() - PHP_5, PHP_7, PHP_8
// tidyNode::isJste() - PHP_5, PHP_7, PHP_8
// tidyNode::isPhp() - PHP_5, PHP_7, PHP_8
// tidyNode::isText() - PHP_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (2)
// tidyNode - PHP_5, PHP_7, PHP_8
// bool
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Private constructor to disallow direct instantiation.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::__construct() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_construct()
{
$return_tidynode_construct = null;

// ========== TIDYNODE_CONSTRUCT - BEGIN
// ===== ABOUT
// Private constructor to disallow direct instantiation
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// private tidyNode::__construct()
// ===== CODE
$return_tidynode_construct = new tidyNode(

// This function has no parameters.

); // Return
// tidyNode
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.construct.php
// ========== TIDYNODE_CONSTRUCT - END

// SYNTAX:
// tidyNode tidyNode::__construct()

return $return_tidynode_construct; // tidyNode
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_GETPARENT
// ============================== PUBLIC
// ============================== ABOUT
// Returns the parent node of the current node.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::getParent() - PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_getparent($tidynode)
{
$return_tidynode_getparent = null;

// ========== TIDYNODE_GETPARENT - BEGIN
// ===== ABOUT
// Returns the parent node of the current node
// ===== DESCRIPTION
// Returns the parent node of the current node.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_2, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::getParent(): ?tidyNode
// ===== CODE
$return_tidynode_getparent = $tidynode->getParent(

// This function has no parameters.

); // Return Values
// Returns a tidyNode if the node has a parent, or null otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 tidyNode::hasChildren() example
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// <# 
//   // JSTE code
//   alert('Hello World'); 
// #>
//  </head>
//  <body>
//  Hello World
//  </body>
// </html>
// 
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// $node = $tidy->html()->child[0]->child[0];
// 
// var_dump($node->getparent()->name);
// [/php]
// The above example will output:
// [result]
// string(4) "head"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.getparent.php
// ========== TIDYNODE_GETPARENT - END

// SYNTAX:
// tidyNode tidyNode::getParent()

return $return_tidynode_getparent; // tidyNode
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_GETPARENT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_HASCHILDREN
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a node has children.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::hasChildren() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_haschildren($tidynode)
{
$return_tidynode_haschildren = false;

// ========== TIDYNODE_HASCHILDREN - BEGIN
// ===== ABOUT
// Checks if a node has children
// ===== DESCRIPTION
// Tells if the node has children.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::hasChildren(): bool
// ===== CODE
$return_tidynode_haschildren = $tidynode->hasChildren(

// This function has no parameters.

); // Return Values
// Returns true if the node has children, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 tidyNode::hasChildren() example
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// // the head tag
// var_dump($tidy->html()->child[0]->hasChildren());
// 
// // the php inside the head tag
// var_dump($tidy->html()->child[0]->child[0]->hasChildren());
// 
// [/php]
// The above example will output:
// [result]
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.haschildren.php
// ========== TIDYNODE_HASCHILDREN - END

// SYNTAX:
// bool tidyNode::hasChildren()

return $return_tidynode_haschildren; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_HASCHILDREN
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_HASSIBLINGS
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a node has siblings.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::hasSiblings() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_hassiblings($tidynode)
{
$return_tidynode_hassiblings = false;

// ========== TIDYNODE_HASSIBLINGS - BEGIN
// ===== ABOUT
// Checks if a node has siblings
// ===== DESCRIPTION
// Tells if the node has siblings.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::hasSiblings(): bool
// ===== CODE
$return_tidynode_hassiblings = $tidynode->hasSiblings(

// This function has no parameters.

); // Return Values
// Returns true if the node has siblings, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 tidyNode::hasSiblings() example
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// // the html tag
// var_dump($tidy->html()->hasSiblings());
// 
// // the head tag
// var_dump($tidy->html()->child[0]->hasSiblings());
// 
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.hassiblings.php
// ========== TIDYNODE_HASSIBLINGS - END

// SYNTAX:
// bool tidyNode::hasSiblings()

return $return_tidynode_hassiblings; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_HASSIBLINGS
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_ISASP 
// ============================== PUBLIC
// ============================== ABOUT
// Checks if this node is ASP.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::isAsp() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_isasp($tidynode)
{
$return_tidynode_isasp = false;

// ========== TIDYNODE_ISASP - BEGIN
// ===== ABOUT
// Checks if this node is ASP
// ===== DESCRIPTION
// Tells whether the current node is ASP.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::isAsp(): bool
// ===== CODE
$return_tidynode_isasp = $tidynode->isAsp(

// This function has no parameters.

); // Return Values
// Returns true if the node is ASP, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract ASP code from a mixed HTML document
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// get_nodes($tidy->html());
// 
// function get_nodes($node) {
// 
//     // check if the current node is of requested type
//     if($node->isAsp()) {
//         echo "\n\n# asp node #" . ++$GLOBALS['num'] . "\n";
//         echo $node->value;
//     }
// 
//     // check if the current node has childrens
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             get_nodes($child);
//         }
//     }
// }
// 
// [/php]
// The above example will output:
// [result]
// # asp node #1
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.isasp.php
// ========== TIDYNODE_ISASP - END

// SYNTAX:
// bool tidyNode::isAsp()

return $return_tidynode_isasp; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_ISASP 
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_ISCOMMENT
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a node represents a comment.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::isComment() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_iscomment($tidynode)
{
$return_tidynode_iscomment = false;

// ========== TIDYNODE_ISCOMMENT - BEGIN
// ===== ABOUT
// Checks if a node represents a comment
// ===== DESCRIPTION
// Tells if the node is a comment.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::isComment(): bool
// ===== CODE
$return_tidynode_iscomment = $tidynode->isComment(

// This function has no parameters.

); // Return Values
// Returns true if the node is a comment, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract comments from a mixed HTML document
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// get_nodes($tidy->html());
// 
// function get_nodes($node) {
// 
//     // check if the current node is of requested type
//     if($node->isComment()) {
//         echo "\n\n# comment node #" . ++$GLOBALS['num'] . "\n";
//         echo $node->value;
//     }
// 
//     // check if the current node has childrens
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             get_nodes($child);
//         }
//     }
// }
// 
// [/php]
// The above example will output:
// [result]
// # comment node #1
// <!-- Comments -->
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.iscomment.php
// ========== TIDYNODE_ISCOMMENT - END

// SYNTAX:
// bool tidyNode::isComment()

return $return_tidynode_iscomment; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_ISCOMMENT
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_ISHTML
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a node is an element node.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::isHtml() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_ishtml($tidynode)
{
$return_tidynode_ishtml = false;

// ========== TIDYNODE_ISHTML - BEGIN
// ===== ABOUT
// Checks if a node is an element node
// ===== DESCRIPTION
// Tells if the node is an element node, but not the root node of the document.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::isHtml(): bool
// ===== CODE
$return_tidynode_ishtml = $tidynode->isHtml(

// This function has no parameters.

); // Return Values
// Returns true if the node is an element node, but not the root node of the document, false otherwise.
// 
// Changelog
// Version        - Description
// 7.3.24, 7.4.12 - This function has been fixed to have reasonable behavior. Previously, almost any node was reported as being an HTML node.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract HTML code from a mixed HTML document
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
//
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// get_nodes($tidy->html());
// 
// function get_nodes($node) {
//     // check if the current node is of requested type
//     if($node->isHtml()) {
//         echo "\n\n# html node #" . ++$GLOBALS['num'] . "\n";
//         echo $node->value;
//     }
// 
//     // check if the current node has childrens
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             get_nodes($child);
//         }
//     }
// }
// 
// [/php]
// The above example will output:
// [result]
// # html node #1
// <html>
// <head>
// [php] echo '<title>title</title>'; [/php][jste]
//   /* JSTE code */
//   alert('Hello World');
// [/jste]
// <title></title>
// </head>
// <body>
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php][asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]<!-- Comments -->
// Hello WorldOutside HTML
// </body>
// </html>
// 
// # html node #2
// <head>
// [php] echo '<title>title</title>'; [/php][jste]
//   /* JSTE code */
//   alert('Hello World');
// [/jste]
// <title></title>
// </head>
// 
// 
// # html node #3
// <title></title>
// 
// 
// # html node #4
// <body>
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php][asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]<!-- Comments -->
// Hello WorldOutside HTML
// </body>
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.ishtml.php
// ========== TIDYNODE_ISHTML - END

// SYNTAX:
// bool tidyNode::isHtml()

return $return_tidynode_ishtml; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_ISHTML
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_ISJSTE
// ============================== PUBLIC
// ============================== ABOUT
// Checks if this node is JSTE.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::isJste() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_isjste($tidynode)
{
$return_tidynode_isjste = false;

// ========== TIDYNODE_ISJSTE - BEGIN
// ===== ABOUT
// Checks if this node is JSTE
// ===== DESCRIPTION
// Tells if the node is JSTE.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::isJste(): bool
// ===== CODE
$return_tidynode_isjste = $tidynode->isJste(

// This function has no parameters.

); // Return Values
// Returns true if the node is JSTE, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract JSTE code from a mixed HTML document
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// get_nodes($tidy->html());
// 
// function get_nodes($node) {
// 
//     // check if the current node is of requested type
//     if($node->isJste()) {
//         echo "\n\n# jste node #" . ++$GLOBALS['num'] . "\n";
//         echo $node->value;
//     }
// 
//     // check if the current node has childrens
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             get_nodes($child);
//         }
//     }
// }
// 
// [/php]
// The above example will output:
// [result]
// # jste node #1
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.isjste.php
// ========== TIDYNODE_ISJSTE - END

// SYNTAX:
// bool tidyNode::isJste()

return $return_tidynode_isjste; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_ISJSTE
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_ISPHP 
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a node is PHP.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::isPhp() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_isphp($tidynode)
{
$return_tidynode_isphp = false;

// ========== TIDYNODE_ISPHP - BEGIN
// ===== ABOUT
// Checks if a node is PHP
// ===== DESCRIPTION
// Tells if the node is PHP.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::isPhp(): bool
// ===== CODE
$return_tidynode_isphp = $tidynode->isPhp(

// This function has no parameters.

); // Return Values
// Returns true if the current node is PHP code, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract PHP code from a mixed HTML document
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// get_nodes($tidy->html());
// 
// function get_nodes($node) {
// 
//     // check if the current node is of requested type
//     if($node->isPhp()) {
//         echo "\n\n# php node #" . ++$GLOBALS['num'] . "\n";
//         echo $node->value;
//     }
// 
//     // check if the current node has childrens
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             get_nodes($child);
//         }
//     }
// }
// 
// [/php]
// The above example will output:
// [result]
// # php node #1
// [php] echo '<title>title</title>'; [/php]
// 
// # php node #2
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.isphp.php
// ========== TIDYNODE_ISPHP - END

// SYNTAX:
// bool tidyNode::isPhp()

return $return_tidynode_isphp; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_ISPHP 
// ==============================


// ============================== BEGIN
// PHP_BASIC_TIDY_TIDYNODE_ISTEXT
// ============================== PUBLIC
// ============================== ABOUT
// Checks if a node represents text (no markup).
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// tidyNode::isText() - PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_tidy_tidynode_istext($tidynode)
{
$return_tidynode_istext = false;

// ========== TIDYNODE_ISTEXT - BEGIN
// ===== ABOUT
// Checks if a node represents text (no markup)
// ===== DESCRIPTION
// Tells if the node represents a text (without any markup).
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// public tidyNode::isText(): bool
// ===== CODE
$return_tidynode_istext = $tidynode->isText(

// This function has no parameters.

); // Return Values
// Returns true if the node represent a text, false otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Extract text from a mixed HTML document
// [php]
// 
// $html = <<< HTML
// <html><head>
// [php] echo '<title>title</title>'; [/php]
// [jste]
//   /* JSTE code */
//   alert('Hello World'); 
// [/jste]
// </head>
// <body>
// 
// [php]
//   // PHP code
//   echo 'hello world!';
// [/php]
// 
// [asp]
//   /* ASP code */
//   response.write("Hello World!")
// [/asp]
// 
// <!-- Comments -->
// Hello World
// </body></html>
// Outside HTML
// HTML;
// 
// 
// $tidy = tidy_parse_string($html);
// $num = 0;
// 
// get_nodes($tidy->html());
// 
// function get_nodes($node) {
// 
//     // check if the current node is of requested type
//     if($node->isText()) {
//         echo "\n\n# text node #" . ++$GLOBALS['num'] . "\n";
//         echo $node->value;
//     }
// 
//     // check if the current node has childrens
//     if($node->hasChildren()) {
//         foreach($node->child as $child) {
//             get_nodes($child);
//         }
//     }
// }
// 
// [/php]
// The above example will output:
// [result]
// # text node #1
// Hello World
// 
// # text node #2
// Outside HTML
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/tidynode.istext.php
// ========== TIDYNODE_ISTEXT - END

// SYNTAX:
// bool tidyNode::isText()

return $return_tidynode_istext; // bool
}
// ============================== END
// PHP_BASIC_TIDY_TIDYNODE_ISTEXT
// ==============================


// ============================== END
//    PHP_BASIC_TIDY_TIDYNODE    
// ==============================


// ============================== END
//         PHP_BASIC_TIDY         
// ==============================
?>