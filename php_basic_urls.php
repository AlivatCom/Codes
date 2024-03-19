<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BASIC_URLS - BEGIN
// PHP_BASIC_URLS_BASE64_DECODE - string|false php_basic_urls_base64_decode(string $string, bool $strict = false)
// PHP_BASIC_URLS_BASE64_ENCODE - string php_basic_urls_base64_encode(string $string)
// OFFLINE | PHP_BASIC_URLS_GET_HEADERS - array|false php_basic_urls_get_headers(string $url, bool $associative = false, resource $context = null)
// PHP_BASIC_URLS_GET_META_TAGS - array|false php_basic_urls_get_meta_tags(string $filename, bool $use_include_path = false)
// OFFLINE | PHP_BASIC_URLS_HTTP_BUILD_QUERY - string php_basic_urls_http_build_query(array|object $data, string $numeric_prefix = "", string $arg_separator = null, int $encoding_type = PHP_QUERY_RFC1738)
// PHP_BASIC_URLS_PARSE_URL - int|string|array|null|false php_basic_urls_parse_url(string $url, int $component = -1)
// PHP_BASIC_URLS_RAWURLDECODE - string php_basic_urls_rawurldecode(string $string)
// PHP_BASIC_URLS_RAWURLENCODE - string php_basic_urls_rawurlencode(string $string)
// PHP_BASIC_URLS_URLDECODE - string php_basic_urls_urldecode(string $string)
// PHP_BASIC_URLS_URLENCODE - string php_basic_urls_urlencode(string $string)
// PHP_BASIC_URLS - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (10)
// base64_decode() - PHP_4, PHP_5, PHP_7, PHP_8
// base64_encode() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | get_headers() - PHP_5, PHP_7, PHP_8
// get_meta_tags() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | http_build_query() - PHP_5, PHP_7, PHP_8
// parse_url() - PHP_4, PHP_5, PHP_7, PHP_8
// rawurldecode() - PHP_4, PHP_5, PHP_7, PHP_8
// rawurlencode() - PHP_4, PHP_5, PHP_7, PHP_8
// urldecode() - PHP_4, PHP_5, PHP_7, PHP_8
// urlencode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (8)
// string
// false
// bool
// array
// resource
// object
// int
// null
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//         PHP_BASIC_URLS         
// ============================== ABOUT
// PHP Manual / Function Reference / Other Basic Extensions / URLs
// URL: https://www.php.net/manual/en/book.url.php
// ============================== DESCRIPTION
// URLS
// RFC_2045_MULTIPURPOSE_INTERNET_MAIL_EXTENSIONS_MIME
// RFC_3986_UNIFORM_RESOURCE_IDENTIFIER_URI_GENERIC_SYNTAX
// 
// URLS - BEGIN
// URLs
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// URL_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Dealing with URL strings: encoding, decoding and parsing.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/intro.url.php
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
// URL: https://www.php.net/manual/en/url.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/url.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/url.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/url.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/url.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants 
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// The following constants are meant to be used with parse_url().
// PHP_URL_SCHEME (int)   -
// PHP_URL_HOST (int)     - Outputs the hostname of the URL parsed.
// PHP_URL_PORT (int)     - Outputs the port of the URL parsed.
// PHP_URL_USER (int)     - Outputs the user of the URL parsed.
// PHP_URL_PASS (int)     - Outputs the password of the URL parsed.
// PHP_URL_PATH (int)     - Outputs the path of the URL parsed.
// PHP_URL_QUERY (int)    - Outputs the query string of the URL parsed.
// PHP_URL_FRAGMENT (int) - Outputs the fragment (string after the hashmark #) of the URL parsed.
// 
// The following constants are meant to be used with http_build_query().
// PHP_QUERY_RFC1738 (int) - Encoding is performed per > RFC 1738 and the application/x-www-form-urlencoded media type, which implies that spaces are encoded as plus (+) signs.
// PHP_QUERY_RFC3986 (int) - Encoding is performed according to > RFC 3986, and spaces will be percent encoded (%20).
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/url.constants.php
// PREDEFINED_CONSTANTS - END
// 
// URL_FUNCTIONS - BEGIN
// URL Functions
// 
// Table of Contents
// * base64_decode    - Decodes data encoded with MIME base64
// * base64_encode    - Encodes data with MIME base64
// * get_headers      - Fetches all the headers sent by the server in response to an HTTP request
// * get_meta_tags    - Extracts all meta tag content attributes from a file and returns an array
// * http_build_query - Generate URL-encoded query string
// * parse_url        - Parse a URL and return its components
// * rawurldecode     - Decode URL-encoded strings
// * rawurlencode     - URL-encode according to RFC 3986
// * urldecode        - Decodes URL-encoded string
// * urlencode        - URL-encodes string
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/ref.url.php
// URL_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/book.url.php
// URLS - END
// 
// RFC_2045_MULTIPURPOSE_INTERNET_MAIL_EXTENSIONS_MIME - BEGIN
// RFC 2045 - Multipurpose Internet Mail Extensions (MIME) Part One
// 
// Network Working Group                                          N. Freed
// Request for Comments: 2045                                     Innosoft
// Obsoletes: 1521, 1522, 1590                               N. Borenstein
// Category: Standards Track                                 First Virtual
//                                                           November 1996
// 
//                  Multipurpose Internet Mail Extensions
//                             (MIME) Part One:
//                    Format of Internet Message Bodies
// 
// Status of this Memo
// 
//    This document specifies an Internet standards track protocol for the
//    Internet community, and requests discussion and suggestions for
//    improvements.  Please refer to the current edition of the "Internet
//    Official Protocol Standards" (STD 1) for the standardization state
//    and status of this protocol.  Distribution of this memo is unlimited.
// 
// Abstract
// 
//    STD 11, RFC 822, defines a message representation protocol specifying
//    considerable detail about US-ASCII message headers, and leaves the
//    message content, or message body, as flat US-ASCII text.  This set of
//    documents, collectively called the Multipurpose Internet Mail
//    Extensions, or MIME, redefines the format of messages to allow for
// 
//     (1)   textual message bodies in character sets other than
//           US-ASCII,
// 
//     (2)   an extensible set of different formats for non-textual
//           message bodies,
// 
//     (3)   multi-part message bodies, and
// 
//     (4)   textual header information in character sets other than
//           US-ASCII.
// 
//    These documents are based on earlier work documented in RFC 934, STD
//    11, and RFC 1049, but extends and revises them.  Because RFC 822 said
//    so little about message bodies, these documents are largely
//    orthogonal to (rather than a revision of) RFC 822.
// 
//    This initial document specifies the various headers used to describe
//    the structure of MIME messages. The second document, RFC 2046,
//    defines the general structure of the MIME media typing system and
//    defines an initial set of media types. The third document, RFC 2047,
//    describes extensions to RFC 822 to allow non-US-ASCII text data in
// 
//    Internet mail header fields. The fourth document, RFC 2048, specifies
//    various IANA registration procedures for MIME-related facilities. The
//    fifth and final document, RFC 2049, describes MIME conformance
//    criteria as well as providing some illustrative examples of MIME
//    message formats, acknowledgements, and the bibliography.
// 
//    These documents are revisions of RFCs 1521, 1522, and 1590, which
//    themselves were revisions of RFCs 1341 and 1342.  An appendix in RFC
//    2049 describes differences and changes from previous versions.
// 
// Table of Contents
// 
//    1. Introduction .........................................    3
//    2. Definitions, Conventions, and Generic BNF Grammar ....    5
//    2.1 CRLF ................................................    5
//    2.2 Character Set .......................................    6
//    2.3 Message .............................................    6
//    2.4 Entity ..............................................    6
//    2.5 Body Part ...........................................    7
//    2.6 Body ................................................    7
//    2.7 7bit Data ...........................................    7
//    2.8 8bit Data ...........................................    7
//    2.9 Binary Data .........................................    7
//    2.10 Lines ..............................................    7
//    3. MIME Header Fields ...................................    8
//    4. MIME-Version Header Field ............................    8
//    5. Content-Type Header Field ............................   10
//    5.1 Syntax of the Content-Type Header Field .............   12
//    5.2 Content-Type Defaults ...............................   14
//    6. Content-Transfer-Encoding Header Field ...............   14
//    6.1 Content-Transfer-Encoding Syntax ....................   14
//    6.2 Content-Transfer-Encodings Semantics ................   15
//    6.3 New Content-Transfer-Encodings ......................   16
//    6.4 Interpretation and Use ..............................   16
//    6.5 Translating Encodings ...............................   18
//    6.6 Canonical Encoding Model ............................   19
//    6.7 Quoted-Printable Content-Transfer-Encoding ..........   19
//    6.8 Base64 Content-Transfer-Encoding ....................   24
//    7. Content-ID Header Field ..............................   26
//    8. Content-Description Header Field .....................   27
//    9. Additional MIME Header Fields ........................   27
//    10. Summary .............................................   27
//    11. Security Considerations .............................   27
//    12. Authors' Addresses ..................................   28
//    A. Collected Grammar ....................................   29
// 
//    6.8.  Base64 Content-Transfer-Encoding
// 
//    The Base64 Content-Transfer-Encoding is designed to represent
//    arbitrary sequences of octets in a form that need not be humanly
//    readable.  The encoding and decoding algorithms are simple, but the
//    encoded data are consistently only about 33 percent larger than the
//    unencoded data.  This encoding is virtually identical to the one used
//    in Privacy Enhanced Mail (PEM) applications, as defined in RFC 1421.
// 
//    A 65-character subset of US-ASCII is used, enabling 6 bits to be
//    represented per printable character. (The extra 65th character, "=",
//    is used to signify a special processing function.)
// 
//    NOTE:  This subset has the important property that it is represented
//    identically in all versions of ISO 646, including US-ASCII, and all
//    characters in the subset are also represented identically in all
//    versions of EBCDIC. Other popular encodings, such as the encoding
//    used by the uuencode utility, Macintosh binhex 4.0 [RFC-1741], and
//    the base85 encoding specified as part of Level 2 PostScript, do not
//    share these properties, and thus do not fulfill the portability
//    requirements a binary transport encoding for mail must meet.
// 
//    The encoding process represents 24-bit groups of input bits as output
//    strings of 4 encoded characters.  Proceeding from left to right, a
//    24-bit input group is formed by concatenating 3 8bit input groups.
//    These 24 bits are then treated as 4 concatenated 6-bit groups, each
//    of which is translated into a single digit in the base64 alphabet.
//    When encoding a bit stream via the base64 encoding, the bit stream
//    must be presumed to be ordered with the most-significant-bit first.
//    That is, the first bit in the stream will be the high-order bit in
//    the first 8bit byte, and the eighth bit will be the low-order bit in
//    the first 8bit byte, and so on.
// 
//    Each 6-bit group is used as an index into an array of 64 printable
//    characters.  The character referenced by the index is placed in the
//    output string.  These characters, identified in Table 1, below, are
//    selected so as to be universally representable, and the set excludes
//    characters with particular significance to SMTP (e.g., ".", CR, LF)
//    and to the multipart boundary delimiters defined in RFC 2046 (e.g.,
//    "-").
// 
//                     Table 1: The Base64 Alphabet
// 
//      Value Encoding  Value Encoding  Value Encoding  Value Encoding
//          0 A            17 R            34 i            51 z
//          1 B            18 S            35 j            52 0
//          2 C            19 T            36 k            53 1
//          3 D            20 U            37 l            54 2
//          4 E            21 V            38 m            55 3
//          5 F            22 W            39 n            56 4
//          6 G            23 X            40 o            57 5
//          7 H            24 Y            41 p            58 6
//          8 I            25 Z            42 q            59 7
//          9 J            26 a            43 r            60 8
//         10 K            27 b            44 s            61 9
//         11 L            28 c            45 t            62 +
//         12 M            29 d            46 u            63 /
//         13 N            30 e            47 v
//         14 O            31 f            48 w         (pad) =
//         15 P            32 g            49 x
//         16 Q            33 h            50 y
// 
//    The encoded output stream must be represented in lines of no more
//    than 76 characters each.  All line breaks or other characters not
//    found in Table 1 must be ignored by decoding software.  In base64
//    data, characters other than those in Table 1, line breaks, and other
//    white space probably indicate a transmission error, about which a
//    warning message or even a message rejection might be appropriate
//    under some circumstances.
// 
//    Special processing is performed if fewer than 24 bits are available
//    at the end of the data being encoded.  A full encoding quantum is
//    always completed at the end of a body.  When fewer than 24 input bits
//    are available in an input group, zero bits are added (on the right)
//    to form an integral number of 6-bit groups.  Padding at the end of
//    the data is performed using the "=" character.  Since all base64
//    input is an integral number of octets, only the following cases can
//    arise: (1) the final quantum of encoding input is an integral
//    multiple of 24 bits; here, the final unit of encoded output will be
//    an integral multiple of 4 characters with no "=" padding, (2) the
//    final quantum of encoding input is exactly 8 bits; here, the final
//    unit of encoded output will be two characters followed by two "="
//    padding characters, or (3) the final quantum of encoding input is
//    exactly 16 bits; here, the final unit of encoded output will be three
//    characters followed by one "=" padding character.
// 
//    Because it is used only for padding at the end of the data, the
//    occurrence of any "=" characters may be taken as evidence that the
//    end of the data has been reached (without truncation in transit).  No
// 
//    such assurance is possible, however, when the number of octets
//    transmitted was a multiple of three and no "=" characters are
//    present.
// 
//    Any characters outside of the base64 alphabet are to be ignored in
//    base64-encoded data.
// 
//    Care must be taken to use the proper octets for line breaks if base64
//    encoding is applied directly to text material that has not been
//    converted to canonical form.  In particular, text line breaks must be
//    converted into CRLF sequences prior to base64 encoding.  The
//    important thing to note is that this may be done directly by the
//    encoder rather than in a prior canonicalization step in some
//    implementations.
// 
//    NOTE: There is no need to worry about quoting potential boundary
//    delimiters within base64-encoded bodies within multipart entities
//    because no hyphen characters are used in the base64 encoding.
// 
// LITERATURE_SOURCES
// * RFC (2023-11-06)
// URL: http://www.faqs.org/rfcs/rfc2045.html
// RFC_2045_MULTIPURPOSE_INTERNET_MAIL_EXTENSIONS_MIME - END
// 
// RFC_3986_UNIFORM_RESOURCE_IDENTIFIER_URI_GENERIC_SYNTAX - BEGIN
// RFC 3986 - Uniform Resource Identifier (URI): Generic Syntax
// 
// Network Working Group                                     T. Berners-Lee
// Request for Comments: 3986                                       W3C/MIT
// STD: 66                                                      R. Fielding
// Updates: 1738                                               Day Software
// Obsoletes: 2732, 2396, 1808                                  L. Masinter
// Category: Standards Track                                  Adobe Systems
//                                                             January 2005
// 
//            Uniform Resource Identifier (URI): Generic Syntax
// 
// Status of This Memo
// 
//    This document specifies an Internet standards track protocol for the
//    Internet community, and requests discussion and suggestions for
//    improvements.  Please refer to the current edition of the "Internet
//    Official Protocol Standards" (STD 1) for the standardization state
//    and status of this protocol.  Distribution of this memo is unlimited.
// 
// Copyright Notice
// 
//    Copyright (C) The Internet Society (2005).
// 
// Abstract
// 
//    A Uniform Resource Identifier (URI) is a compact sequence of
//    characters that identifies an abstract or physical resource.  This
//    specification defines the generic URI syntax and a process for
//    resolving URI references that might be in relative form, along with
//    guidelines and security considerations for the use of URIs on the
//    Internet.  The URI syntax defines a grammar that is a superset of all
//    valid URIs, allowing an implementation to parse the common components
//    of a URI reference without knowing the scheme-specific requirements
//    of every possible identifier.  This specification does not define a
//    generative grammar for URIs; that task is performed by the individual
//    specifications of each URI scheme.
// 
// Table of Contents
// 
//    1.  Introduction . . . . . . . . . . . . . . . . . . . . . . . . .  4
//        1.1.  Overview of URIs . . . . . . . . . . . . . . . . . . . .  4
//              1.1.1.  Generic Syntax . . . . . . . . . . . . . . . . .  6
//              1.1.2.  Examples . . . . . . . . . . . . . . . . . . . .  7
//              1.1.3.  URI, URL, and URN  . . . . . . . . . . . . . . .  7
//        1.2.  Design Considerations  . . . . . . . . . . . . . . . . .  8
//              1.2.1.  Transcription  . . . . . . . . . . . . . . . . .  8
//              1.2.2.  Separating Identification from Interaction . . .  9
//              1.2.3.  Hierarchical Identifiers . . . . . . . . . . . . 10
//        1.3.  Syntax Notation  . . . . . . . . . . . . . . . . . . . . 11
//    2.  Characters . . . . . . . . . . . . . . . . . . . . . . . . . . 11
//        2.1.  Percent-Encoding . . . . . . . . . . . . . . . . . . . . 12
//        2.2.  Reserved Characters  . . . . . . . . . . . . . . . . . . 12
//        2.3.  Unreserved Characters  . . . . . . . . . . . . . . . . . 13
//        2.4.  When to Encode or Decode . . . . . . . . . . . . . . . . 14
//        2.5.  Identifying Data . . . . . . . . . . . . . . . . . . . . 14
//    3.  Syntax Components  . . . . . . . . . . . . . . . . . . . . . . 16
//        3.1.  Scheme . . . . . . . . . . . . . . . . . . . . . . . . . 17
//        3.2.  Authority  . . . . . . . . . . . . . . . . . . . . . . . 17
//              3.2.1.  User Information . . . . . . . . . . . . . . . . 18
//              3.2.2.  Host . . . . . . . . . . . . . . . . . . . . . . 18
//              3.2.3.  Port . . . . . . . . . . . . . . . . . . . . . . 22
//        3.3.  Path . . . . . . . . . . . . . . . . . . . . . . . . . . 22
//        3.4.  Query  . . . . . . . . . . . . . . . . . . . . . . . . . 23
//        3.5.  Fragment . . . . . . . . . . . . . . . . . . . . . . . . 24
//    4.  Usage  . . . . . . . . . . . . . . . . . . . . . . . . . . . . 25
//        4.1.  URI Reference  . . . . . . . . . . . . . . . . . . . . . 25
//        4.2.  Relative Reference . . . . . . . . . . . . . . . . . . . 26
//        4.3.  Absolute URI . . . . . . . . . . . . . . . . . . . . . . 27
//        4.4.  Same-Document Reference  . . . . . . . . . . . . . . . . 27
//        4.5.  Suffix Reference . . . . . . . . . . . . . . . . . . . . 27
//    5.  Reference Resolution . . . . . . . . . . . . . . . . . . . . . 28
//        5.1.  Establishing a Base URI  . . . . . . . . . . . . . . . . 28
//              5.1.1.  Base URI Embedded in Content . . . . . . . . . . 29
//              5.1.2.  Base URI from the Encapsulating Entity . . . . . 29
//              5.1.3.  Base URI from the Retrieval URI  . . . . . . . . 30
//              5.1.4.  Default Base URI . . . . . . . . . . . . . . . . 30
//        5.2.  Relative Resolution  . . . . . . . . . . . . . . . . . . 30
//              5.2.1.  Pre-parse the Base URI . . . . . . . . . . . . . 31
//              5.2.2.  Transform References . . . . . . . . . . . . . . 31
//              5.2.3.  Merge Paths  . . . . . . . . . . . . . . . . . . 32
//              5.2.4.  Remove Dot Segments  . . . . . . . . . . . . . . 33
//        5.3.  Component Recomposition  . . . . . . . . . . . . . . . . 35
//        5.4.  Reference Resolution Examples  . . . . . . . . . . . . . 35
//              5.4.1.  Normal Examples  . . . . . . . . . . . . . . . . 36
//              5.4.2.  Abnormal Examples  . . . . . . . . . . . . . . . 36
// 
//    6.  Normalization and Comparison . . . . . . . . . . . . . . . . . 38
//        6.1.  Equivalence  . . . . . . . . . . . . . . . . . . . . . . 38
//        6.2.  Comparison Ladder  . . . . . . . . . . . . . . . . . . . 39
//              6.2.1.  Simple String Comparison . . . . . . . . . . . . 39
//              6.2.2.  Syntax-Based Normalization . . . . . . . . . . . 40
//              6.2.3.  Scheme-Based Normalization . . . . . . . . . . . 41
//              6.2.4.  Protocol-Based Normalization . . . . . . . . . . 42
//    7.  Security Considerations  . . . . . . . . . . . . . . . . . . . 43
//        7.1.  Reliability and Consistency  . . . . . . . . . . . . . . 43
//        7.2.  Malicious Construction . . . . . . . . . . . . . . . . . 43
//        7.3.  Back-End Transcoding . . . . . . . . . . . . . . . . . . 44
//        7.4.  Rare IP Address Formats  . . . . . . . . . . . . . . . . 45
//        7.5.  Sensitive Information  . . . . . . . . . . . . . . . . . 45
//        7.6.  Semantic Attacks . . . . . . . . . . . . . . . . . . . . 45
//    8.  IANA Considerations  . . . . . . . . . . . . . . . . . . . . . 46
//    9.  Acknowledgements . . . . . . . . . . . . . . . . . . . . . . . 46
//    10. References . . . . . . . . . . . . . . . . . . . . . . . . . . 46
//        10.1. Normative References . . . . . . . . . . . . . . . . . . 46
//        10.2. Informative References . . . . . . . . . . . . . . . . . 47
//    A.  Collected ABNF for URI . . . . . . . . . . . . . . . . . . . . 49
//    B.  Parsing a URI Reference with a Regular Expression  . . . . . . 50
//    C.  Delimiting a URI in Context  . . . . . . . . . . . . . . . . . 51
//    D.  Changes from RFC 2396  . . . . . . . . . . . . . . . . . . . . 53
//        D.1.  Additions  . . . . . . . . . . . . . . . . . . . . . . . 53
//        D.2.  Modifications  . . . . . . . . . . . . . . . . . . . . . 53
//    Index  . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 56
//    Authors' Addresses . . . . . . . . . . . . . . . . . . . . . . . . 60
//    Full Copyright Statement . . . . . . . . . . . . . . . . . . . . . 61
// 
// ===== LITERATURE_SOURCES
// * RFC (2023-11-06)
// URL: http://www.faqs.org/rfcs/rfc3986.html
// RFC_3986_UNIFORM_RESOURCE_IDENTIFIER_URI_GENERIC_SYNTAX - END
// ==============================


// ============================== BEGIN
//  PHP_BASIC_URLS_BASE64_DECODE  
// ============================== PUBLIC
// ============================== ABOUT
// Decodes data encoded with MIME base64.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// base64_decode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_base64_decode($string, $strict = false)
{
$return_base64_decode = false;

// ========== BASE64_DECODE - BEGIN
// ===== ABOUT
// Decodes data encoded with MIME base64
// ===== DESCRIPTION
// Decodes a base64 encoded string.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// base64_decode(string $string, bool $strict = false): string|false
// ===== CODE
$return_base64_decode = base64_decode(

$string, // string string - The encoded data.

$strict // bool strict - If the strict parameter is set to true then the base64_decode() function will return false if the input contains character from outside the base64 alphabet. Otherwise invalid characters will be silently discarded.

); // Return Values
// Returns the decoded data or false on failure. The returned data may be binary.
// 
// [examples]
// Examples
// [example]
// Example #1 base64_decode() example
// [php]
// $str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
// echo base64_decode($str);
// [/php]
// The above example will output:
// [result]
// This is an encoded string
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/function.base64-decode.php
// ========== BASE64_DECODE - END

// SYNTAX:
// string|false base64_decode(string $string, bool $strict = false)

return $return_base64_decode; // string|false
}
// ============================== END
//  PHP_BASIC_URLS_BASE64_DECODE  
// ==============================


// ============================== BEGIN
//  PHP_BASIC_URLS_BASE64_ENCODE  
// ============================== PUBLIC
// ============================== ABOUT
// Encodes data with MIME base64.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// base64_encode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_base64_encode($string)
{
$return_base64_encode = null;

// ========== BASE64_ENCODE - BEGIN
// ===== ABOUT
// Encodes data with MIME base64
// ===== DESCRIPTION
// Encodes the given string with base64.
// This encoding is designed to make binary data survive transport through transport layers that are not 8-bit clean, such as mail bodies.
// Base64-encoded data takes about 33% more space than the original data.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// base64_encode(string $string): string
// ===== CODE
$return_base64_encode = base64_encode(

$string // string string - The data to encode.

); // Return Values
// The encoded data, as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 base64_encode() example
// [php]
// $str = 'This is an encoded string';
// echo base64_encode($str);
// [/php]
// The above example will output:
// [result]
// VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/function.base64-encode.php
// ========== BASE64_ENCODE - END

// SYNTAX:
// string base64_encode(string $string)

return $return_base64_encode; // string
}
// ============================== END
//  PHP_BASIC_URLS_BASE64_ENCODE  
// ==============================


// ============================== BEGIN
//   PHP_BASIC_URLS_GET_HEADERS   
// ============================== OFFLINE
// ============================== ABOUT
// Fetches all the headers sent by the server in response to an HTTP request.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_headers() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_urls_get_headers($url, $associative = false, $context = null)
{
$return_get_headers = false;

// ========== GET_HEADERS - BEGIN
// ===== ABOUT
// Fetches all the headers sent by the server in response to an HTTP request
// ===== DESCRIPTION
// get_headers() returns an array with the headers sent by the server in response to a HTTP request.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_headers(string $url, bool $associative = false, ?resource $context = null): array|false
// ===== CODE
$return_get_headers = get_headers(

$url, // string url - The target URL.

$associative, // bool associative - If the optional associative parameter is set to true, get_headers() parses the response and sets the array's keys.

$context // resource context - A valid context resource created with stream_context_create(), or null to use the default context.

); // Return Values
// Returns an indexed or associative array with the headers, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - The associative has been changed from int to bool.
// 7.1.0   - The context parameter was added.
// 
// [examples]
// Examples
// [example]
// Example #1 get_headers() example
// [php]
// $url = 'http://www.example.com';
// 
// print_r(get_headers($url));
// 
// print_r(get_headers($url, true));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => HTTP/1.1 200 OK
//     [1] => Date: Sat, 29 May 2004 12:28:13 GMT
//     [2] => Server: Apache/1.3.27 (Unix)  (Red-Hat/Linux)
//     [3] => Last-Modified: Wed, 08 Jan 2003 23:11:55 GMT
//     [4] => ETag: "3f80f-1b6-3e1cb03b"
//     [5] => Accept-Ranges: bytes
//     [6] => Content-Length: 438
//     [7] => Connection: close
//     [8] => Content-Type: text/html
// )
// 
// Array
// (
//     [0] => HTTP/1.1 200 OK
//     [Date] => Sat, 29 May 2004 12:28:14 GMT
//     [Server] => Apache/1.3.27 (Unix)  (Red-Hat/Linux)
//     [Last-Modified] => Wed, 08 Jan 2003 23:11:55 GMT
//     [ETag] => "3f80f-1b6-3e1cb03b"
//     [Accept-Ranges] => bytes
//     [Content-Length] => 438
//     [Connection] => close
//     [Content-Type] => text/html
// )
// [/result]
// [/example]
// [example]
// Example #2 get_headers() using HEAD example
// [php]
// // By default get_headers uses a GET request to fetch the headers. If you
// // want to send a HEAD request instead, you can do so using a stream context:
// $context = stream_context_create(
//     [
//         'http' => array(
//             'method' => 'HEAD'
//         )
//     ]
// );
// $headers = get_headers('http://example.com', false, $context);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/function.get-headers.php
// ========== GET_HEADERS - END

// SYNTAX:
// array|false get_headers(string $url, bool $associative = false, resource $context = null)

return $return_get_headers; // array|false
}
*/
// ============================== END
//   PHP_BASIC_URLS_GET_HEADERS   
// ==============================


// ============================== BEGIN
//  PHP_BASIC_URLS_GET_META_TAGS  
// ============================== PUBLIC
// ============================== ABOUT
// Extracts all meta tag content attributes from a file and returns an array.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// get_meta_tags() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_get_meta_tags($filename, $use_include_path = false)
{
$return_get_meta_tags = false;

// ========== GET_META_TAGS - BEGIN
// ===== ABOUT
// Extracts all meta tag content attributes from a file and returns an array
// ===== DESCRIPTION
// Opens filename and parses it line by line for <meta> tags in the file. The parsing stops at </head>.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// get_meta_tags(string $filename, bool $use_include_path = false): array|false
// ===== CODE
$return_get_meta_tags = get_meta_tags(

$filename, // string filename - The path to the HTML file, as a string. This can be a local file or an URL.
// [example]
// Example #1 What get_meta_tags() parses
// [code]
// <meta name="author" content="name">
// <meta name="keywords" content="php documentation">
// <meta name="DESCRIPTION" content="a php manual">
// <meta name="geo.position" content="49.33;-86.59">
// </head> <!-- parsing stops here -->
// [/code]
// [/example]

$use_include_path // bool use_include_path - Setting use_include_path to true will result in PHP trying to open the file along the standard include path as per the include_path directive. This is used for local files, not URLs.

); // Return Values
// Returns an array with all the parsed meta tags.
// The value of the name property becomes the key, the value of the content property becomes the value of the returned array, so you can easily use standard array functions to traverse it or access single values. Special characters in the value of the name property are substituted with '_', the rest is converted to lower case. If two meta tags have the same name, only the last one is returned.
// Returns false on failure.
// 
// [examples]
// Examples
// [example]
// Example #2 What get_meta_tags() returns
// [php]
// // Assuming the above tags are at www.example.com
// $tags = get_meta_tags('http://www.example.com/');
// 
// // Notice how the keys are all lowercase now, and
// // how . was replaced by _ in the key.
// echo $tags['author'];       // name
// echo $tags['keywords'];     // php documentation
// echo $tags['description'];  // a php manual
// echo $tags['geo_position']; // 49.33;-86.59
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: Only meta tags with name attributes will be parsed. Quotes are not required.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-06)
// URL: https://www.php.net/manual/en/function.get-meta-tags.php
// ========== GET_META_TAGS - END

// SYNTAX:
// array|false get_meta_tags(string $filename, bool $use_include_path = false)

return $return_get_meta_tags; // array|false
}
// ============================== END
//  PHP_BASIC_URLS_GET_META_TAGS  
// ==============================


// ============================== BEGIN
// PHP_BASIC_URLS_HTTP_BUILD_QUERY
// ============================== OFFLINE
// ============================== ABOUT
// Generate URL-encoded query string.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// http_build_query() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// PHP_QUERY_RFC1738 - http_build_query()
// ============================== CODE
/*
function php_basic_urls_http_build_query($data, $numeric_prefix = "", $arg_separator = null, $encoding_type = PHP_QUERY_RFC1738)
{
$return_http_build_query = null;

// ========== HTTP_BUILD_QUERY - BEGIN
// ===== ABOUT
// Generate URL-encoded query string
// ===== DESCRIPTION
// Generates a URL-encoded query string from the associative (or indexed) array provided.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// http_build_query(
//    array|object $data,
//    string $numeric_prefix = "",
//    ?string $arg_separator = null,
//    int $encoding_type = PHP_QUERY_RFC1738
// ): string
// ===== CODE
$return_http_build_query = http_build_query(

$data, // array|object data - May be an array or object containing properties.
// If data is an array, it may be a simple one-dimensional structure, or an array of arrays (which in turn may contain other arrays).
// If data is an object, then only public properties will be incorporated into the result.

$numeric_prefix, // string numeric_prefix - If numeric indices are used in the base array and this parameter is provided, it will be prepended to the numeric index for elements in the base array only.
// This is meant to allow for legal variable names when the data is decoded by PHP or another CGI application later on.

$arg_separator, // string arg_separator - The argument separator. If not set or null, arg_separator.output is used to separate arguments.

$encoding_type // int encoding_type - By default, PHP_QUERY_RFC1738.
// If encoding_type is PHP_QUERY_RFC1738, then encoding is performed per > RFC 1738 and the application/x-www-form-urlencoded media type, which implies that spaces are encoded as plus (+) signs.
// If encoding_type is PHP_QUERY_RFC3986, then encoding is performed according to > RFC 3986, and spaces will be percent encoded (%20).

); // Return Values
// Returns a URL-encoded string.
// 
// Changelog
// Version - Description
// 8.0.0   - arg_separator is now nullable.
// 
// [examples]
// Examples
// [example]
// Example #1 Simple usage of http_build_query()
// [php]
// $data = array(
//     'foo' => 'bar',
//     'baz' => 'boom',
//     'cow' => 'milk',
//     'null' => null,
//     'php' => 'hypertext processor'
// );
// 
// echo http_build_query($data) . "\n";
// echo http_build_query($data, '', '&amp;');
// 
// [/php]
// The above example will output:
// [result]
// foo=bar&baz=boom&cow=milk&php=hypertext+processor
foo=bar&amp;baz=boom&amp;cow=milk&amp;php=hypertext+processor
// [/result]
// [/example]
// [example]
// Example #2 http_build_query() with numerically index elements.
// [php]
// $data = array('foo', 'bar', 'baz', null, 'boom', 'cow' => 'milk', 'php' => 'hypertext processor');
// 
// echo http_build_query($data) . "\n";
// echo http_build_query($data, 'myvar_');
// [/php]
// The above example will output:
// [result]
// 0=foo&1=bar&2=baz&4=boom&cow=milk&php=hypertext+processor
// myvar_0=foo&myvar_1=bar&myvar_2=baz&myvar_4=boom&cow=milk&php=hypertext+processor
// [/result]
// [/example]
// [example]
// Example #3 http_build_query() with complex arrays
// [php]
// $data = array(
//     'user' => array(
//         'name' => 'Bob Smith',
//         'age'  => 47,
//         'sex'  => 'M',
//         'dob'  => '5/12/1956'
//     ),
//     'pastimes' => array('golf', 'opera', 'poker', 'rap'),
//     'children' => array(
//         'bobby' => array('age'=>12, 'sex'=>'M'),
//         'sally' => array('age'=>8, 'sex'=>'F')
//     ),
//     'CEO'
// );
// 
// echo http_build_query($data, 'flags_');
// [/php]
// The above example will output: (word wrapped for readability)
// [result]
// user%5Bname%5D=Bob+Smith&user%5Bage%5D=47&user%5Bsex%5D=M&
// user%5Bdob%5D=5%2F12%2F1956&pastimes%5B0%5D=golf&pastimes%5B1%5D=opera&
// pastimes%5B2%5D=poker&pastimes%5B3%5D=rap&children%5Bbobby%5D%5Bage%5D=12&
// children%5Bbobby%5D%5Bsex%5D=M&children%5Bsally%5D%5Bage%5D=8&
// children%5Bsally%5D%5Bsex%5D=F&flags_0=CEO
// [/result]
// Note: Only the numerically indexed element in the base array "CEO" received a prefix. The other numeric indices, found under pastimes, do not require a string prefix to be legal variable names.
// [/example]
// [example]
// Example #4 Using http_build_query() with an object
// [php]
// class parentClass {
//     public    $pub      = 'publicParent';
//     protected $prot     = 'protectedParent';
//     private   $priv     = 'privateParent';
//     public    $pub_bar  = null;
//     protected $prot_bar = null;
//     private   $priv_bar = null;
// 
//     public function __construct(){
//         $this->pub_bar  = new childClass();
//         $this->prot_bar = new childClass();
//         $this->priv_bar = new childClass();
//     }
// }
// 
// class childClass {
//     public    $pub  = 'publicChild';
//     protected $prot = 'protectedChild';
//     private   $priv = 'privateChild';
// }
// 
// $parent = new parentClass();
// 
// echo http_build_query($parent);
// [/php]
// The above example will output:
// [result]
// pub=publicParent&pub_bar%5Bpub%5D=publicChild
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/function.http-build-query.php
// ========== HTTP_BUILD_QUERY - END

// SYNTAX:
// string http_build_query(array|object $data, string $numeric_prefix = "", string $arg_separator = null, int $encoding_type = PHP_QUERY_RFC1738)

return $return_http_build_query; // string
}
*/
// ============================== END
// PHP_BASIC_URLS_HTTP_BUILD_QUERY
// ==============================


// ============================== BEGIN
//    PHP_BASIC_URLS_PARSE_URL    
// ============================== PUBLIC
// ============================== ABOUT
// Parse a URL and return its components.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// parse_url() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_parse_url($url, $component = -1)
{
$return_parse_url = false;

// ========== PARSE_URL - BEGIN
// ===== ABOUT
// Parse a URL and return its components
// ===== DESCRIPTION
// This function parses a URL and returns an associative array containing any of the various components of the URL that are present. The values of the array elements are not URL decoded.
// This function is not meant to validate the given URL, it only breaks it up into the parts listed below. Partial and invalid URLs are also accepted, parse_url() tries its best to parse them correctly.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// parse_url(string $url, int $component = -1): int|string|array|null|false
// ===== CODE
$return_parse_url = parse_url(

$url, // string url - The URL to parse.

$component // int component - Specify one of PHP_URL_SCHEME, PHP_URL_HOST, PHP_URL_PORT, PHP_URL_USER, PHP_URL_PASS, PHP_URL_PATH, PHP_URL_QUERY or PHP_URL_FRAGMENT to retrieve just a specific URL component as a string (except when PHP_URL_PORT is given, in which case the return value will be an int).

); // Return Values
// On seriously malformed URLs, parse_url() may return false.
// If the component parameter is omitted, an associative array is returned. At least one element will be present within the array. Potential keys within this array are:
// * scheme - e.g. http
// * host
// * port
// * user
// * pass
// * path
// * query - after the question mark ?
// * fragment - after the hashmark #
// If the component parameter is specified, parse_url() returns a string (or an int, in the case of PHP_URL_PORT) instead of an array. If the requested component doesn't exist within the given URL, null will be returned. As of PHP 8.0.0, parse_url() distinguishes absent and empty queries and fragments:
// [code]
// http://example.com/foo → query = null, fragment = null
// http://example.com/foo? → query = "",   fragment = null
// http://example.com/foo# → query = null, fragment = ""
// http://example.com/foo?# → query = "",   fragment = ""
// [/code]
// Previously all cases resulted in query and fragment being null.
// Note that control characters (cf. ctype_cntrl()) in the components are replaced with underscores (_).
// 
// Changelog
// Version - Description
// 8.0.0   - parse_url() will now distinguish absent and empty queries and fragments.
// 
// [examples]
// Examples
// [example]
// Example #1 A parse_url() example
// [php]
// $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
// 
// var_dump(parse_url($url));
// var_dump(parse_url($url, PHP_URL_SCHEME));
// var_dump(parse_url($url, PHP_URL_USER));
// var_dump(parse_url($url, PHP_URL_PASS));
// var_dump(parse_url($url, PHP_URL_HOST));
// var_dump(parse_url($url, PHP_URL_PORT));
// var_dump(parse_url($url, PHP_URL_PATH));
// var_dump(parse_url($url, PHP_URL_QUERY));
// var_dump(parse_url($url, PHP_URL_FRAGMENT));
// [/php]
// The above example will output:
// [result]
// array(8) {
//   ["scheme"]=>
//   string(4) "http"
//   ["host"]=>
//   string(8) "hostname"
//   ["port"]=>
//   int(9090)
//   ["user"]=>
//   string(8) "username"
//   ["pass"]=>
//   string(8) "password"
//   ["path"]=>
//   string(5) "/path"
//   ["query"]=>
//   string(9) "arg=value"
//   ["fragment"]=>
//   string(6) "anchor"
// }
// string(4) "http"
// string(8) "username"
// string(8) "password"
// string(8) "hostname"
// int(9090)
// string(5) "/path"
// string(9) "arg=value"
// string(6) "anchor"
// [/result]
// [/example]
// [example]
// Example #2 A parse_url() example with missing scheme
// [php]
// $url = '//www.example.com/path?googleguy=googley';
// 
// // Prior to 5.4.7 this would show the path as "//www.example.com/path"
// var_dump(parse_url($url));
// [/php]
// The above example will output:
// [result]
// array(3) {
//   ["host"]=>
//   string(15) "www.example.com"
//   ["path"]=>
//   string(5) "/path"
//   ["query"]=>
//   string(17) "googleguy=googley"
// }
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Caution: This function may not give correct results for relative or invalid URLs, and the results may not even match common behavior of HTTP clients. If URLs from untrusted input need to be parsed, extra validation is required, e.g. by using filter_var() with the FILTER_VALIDATE_URL filter.
// Note: This function is intended specifically for the purpose of parsing URLs and not URIs. However, to comply with PHP's backwards compatibility requirements it makes an exception for the file:// scheme where triple slashes (file:///...) are allowed. For any other scheme this is invalid.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/function.parse-url.php
// ========== PARSE_URL - END

// SYNTAX:
// int|string|array|null|false parse_url(string $url, int $component = -1)

return $return_parse_url; // int|string|array|null|false
}
// ============================== END
//    PHP_BASIC_URLS_PARSE_URL    
// ==============================


// ============================== BEGIN
//  PHP_BASIC_URLS_RAWURLDECODE  
// ============================== PUBLIC
// ============================== ABOUT
// Decode URL-encoded strings.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rawurldecode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_rawurldecode($string)
{
$return_rawurldecode = null;

// ========== RAWURLDECODE - BEGIN
// ===== ABOUT
// Decode URL-encoded strings
// ===== DESCRIPTION
// Returns a string in which the sequences with percent (%) signs followed by two hex digits have been replaced with literal characters.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rawurldecode(string $string): string
// ===== CODE
$return_rawurldecode = rawurldecode(

$string // string string - The URL to be decoded.

); // Return Values
// Returns the decoded URL, as a string.
// 
// [examples]
// Examples
// [example]
// Example #1 rawurldecode() example
// [php]
// 
// echo rawurldecode('foo%20bar%40baz'); // foo bar@baz
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: rawurldecode() does not decode plus symbols ('+') into spaces. urldecode() does.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/function.rawurldecode.php
// ========== RAWURLDECODE - END

// SYNTAX:
// string rawurldecode(string $string)

return $return_rawurldecode; // string
}
// ============================== END
//  PHP_BASIC_URLS_RAWURLDECODE  
// ==============================


// ============================== BEGIN
//  PHP_BASIC_URLS_RAWURLENCODE  
// ============================== PUBLIC
// ============================== ABOUT
// URL-encode according to RFC 3986.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rawurlencode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_rawurlencode($string)
{
$return_rawurlencode = null;

// ========== RAWURLENCODE - BEGIN
// ===== ABOUT
// URL-encode according to RFC 3986
// ===== DESCRIPTION
// Encodes the given string according to > RFC 3986.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rawurlencode(string $string): string
// ===== CODE
$return_rawurlencode = rawurlencode(

$string // string string - The URL to be encoded.

); // Return Values
// Returns a string in which all non-alphanumeric characters except -_.~ have been replaced with a percent (%) sign followed by two hex digits. This is the encoding described in > RFC 3986 for protecting literal characters from being interpreted as special URL delimiters, and for protecting URLs from being mangled by transmission media with character conversions (like some email systems).
// 
// [examples]
// Examples
// [example]
// Example #1 including a password in an FTP URL
// [php]
// echo '<a href="ftp://user:', rawurlencode('foo @+%/'),
//      '@ftp.example.com/x.txt">';
// [/php]
// The above example will output:
// [result]
// <a href="ftp://user:foo%20%40%2B%25%2F@ftp.example.com/x.txt">
// [/result]
// Or, if you pass information in a PATH_INFO component of the URL:
// [/example]
// [example]
// Example #2 rawurlencode() example 2
// [php]
// echo '<a href="http://example.com/department_list_script/',
//     rawurlencode('sales and marketing/Miami'), '">';
// [/php]
// The above example will output:
// [result]
// <a href="http://example.com/department_list_script/sales%20and%20marketing%2FMiami">
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/function.rawurlencode.php
// ========== RAWURLENCODE - END

// SYNTAX:
// string rawurlencode(string $string)

return $return_rawurlencode; // string
}
// ============================== END
//  PHP_BASIC_URLS_RAWURLENCODE  
// ==============================


// ============================== BEGIN
//    PHP_BASIC_URLS_URLDECODE    
// ============================== PUBLIC
// ============================== ABOUT
// Decodes URL-encoded string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// urldecode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_urldecode($string)
{
$return_urldecode = null;

// ========== URLDECODE - BEGIN
// ===== ABOUT
// Decodes URL-encoded string
// ===== DESCRIPTION
// Decodes any %## encoding in the given string. Plus symbols ('+') are decoded to a space character.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// urldecode(string $string): string
// ===== CODE
$return_urldecode = urldecode(

$string // string string - The string to be decoded.

); // Return Values
// Returns the decoded string.
// 
// [examples]
// Examples
// [example]
// Example #1 urldecode() example
// [php]
// $query = "my=apples&are=green+and+red";
// 
// foreach (explode('&', $query) as $chunk) {
//     $param = explode("=", $chunk);
// 
//     if ($param) {
//         printf("Value for parameter \"%s\" is \"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
//     }
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Warning: The superglobals $_GET and $_REQUEST are already decoded. Using urldecode() on an element in $_GET or $_REQUEST could have unexpected and dangerous results.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/function.urldecode.php
// ========== URLDECODE - END

// SYNTAX:
// string urldecode(string $string)

return $return_urldecode; // string
}
// ============================== END
//    PHP_BASIC_URLS_URLDECODE    
// ==============================


// ============================== BEGIN
//    PHP_BASIC_URLS_URLENCODE    
// ============================== PUBLIC
// ============================== ABOUT
// URL-encodes string.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// urlencode() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_urls_urlencode($string)
{
$return_urlencode = null;

// ========== URLENCODE - BEGIN
// ===== ABOUT
// URL-encodes string
// ===== DESCRIPTION
// This function is convenient when encoding a string to be used in a query part of a URL, as a convenient way to pass variables to the next page.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// urlencode(string $string): string
// ===== CODE
$return_urlencode = urlencode(

$string // string string - The string to be encoded.

); // Return Values
// Returns a string in which all non-alphanumeric characters except -_. have been replaced with a percent (%) sign followed by two hex digits and spaces encoded as plus (+) signs. It is encoded the same way that the posted data from a WWW form is encoded, that is the same way as in application/x-www-form-urlencoded media type. This differs from the > RFC 3986 encoding (see rawurlencode()) in that for historical reasons, spaces are encoded as plus (+) signs.
// 
// [examples]
// Examples
// [example]
// Example #1 urlencode() example
// [php]
// $userinput = 'Data123!@-_ +';
// echo "UserInput: $userinput\n";
// echo '<a href="mycgi?foo=', urlencode($userinput), '">';
// [/php]
// The above example will output:
// [result]
// UserInput: Data123!@-_ +
// <a href="mycgi?foo=Data123%21%40-_+%2B">
// [/result]
// [/example]
// [example]
// Example #2 urlencode() and htmlentities() example
// [php]
// $foo = 'Data123!@-_ +';
// $bar = "Not the same content as $foo";
// echo "foo: $foo\n";
// echo "bar: $bar\n";
// $query_string = 'foo=' . urlencode($foo) . '&bar=' . urlencode($bar);
// echo '<a href="mycgi?' . htmlentities($query_string) . '">';
// [/php]
// The above example will output:
// [result]
// foo: Data123!@-_ +
// bar: Not the same content as Data123!@-_ +
// <a href="mycgi?foo=Data123%21%40-_+%2B&amp;bar=Not+the+same+content+as+Data123%21%40-_+%2B">
// [/result]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  Be careful about variables that may match HTML entities. Things like &amp, &copy and &pound are parsed by the browser and the actual entity is used instead of the desired variable name. This is an obvious hassle that the W3C has been telling people about for years. The reference is here: > http://www.w3.org/TR/html4/appendix/notes.html#h-B.2.2.
//  PHP supports changing the argument separator to the W3C-suggested semi-colon through the arg_separator .ini directive. Unfortunately most user agents do not send form data in this semi-colon separated format. A more portable way around this is to use &amp; instead of & as the separator. You don't need to change PHP's arg_separator for this. Leave it as &, but simply encode your URLs using htmlentities() or htmlspecialchars().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-24)
// URL: https://www.php.net/manual/en/function.urlencode.php
// ========== URLENCODE - END

// SYNTAX:
// string urlencode(string $string)

return $return_urlencode; // string
}
// ============================== END
//    PHP_BASIC_URLS_URLENCODE    
// ==============================


// ============================== END
//         PHP_BASIC_URLS         
// ==============================
?>