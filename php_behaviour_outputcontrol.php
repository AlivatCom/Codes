<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_OUTPUTCONTROL - BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_FLUSH - void php_behaviour_outputcontrol_flush()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_CLEAN - bool php_behaviour_outputcontrol_ob_clean()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_END_CLEAN - bool php_behaviour_outputcontrol_ob_end_clean()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_END_FLUSH - bool php_behaviour_outputcontrol_ob_end_flush()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_FLUSH - bool php_behaviour_outputcontrol_ob_flush()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_CLEAN - string|false php_behaviour_outputcontrol_ob_get_clean()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_CONTENTS - string|false php_behaviour_outputcontrol_ob_get_contents()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_FLUSH - string|false php_behaviour_outputcontrol_ob_get_flush()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_LENGTH - int|false php_behaviour_outputcontrol_ob_get_length()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_LEVEL - int php_behaviour_outputcontrol_ob_get_level()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_STATUS - array php_behaviour_outputcontrol_ob_get_status(bool $full_status = false)
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GZHANDLER - string|false php_behaviour_outputcontrol_ob_gzhandler(string $data, int $flags)
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_IMPLICIT_FLUSH - void php_behaviour_outputcontrol_ob_implicit_flush(bool $enable = true)
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_LIST_HANDLERS - array php_behaviour_outputcontrol_ob_list_handlers()
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_START - bool php_behaviour_outputcontrol_ob_start(callable $callback = null, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS)
// PHP_BEHAVIOUR_OUTPUTCONTROL_OUTPUT_ADD_REWRITE_VAR - bool php_behaviour_outputcontrol_output_add_rewrite_var(string $name, string $value)
// PHP_BEHAVIOUR_OUTPUTCONTROL_OUTPUT_RESET_REWRITE_VARS - bool php_behaviour_outputcontrol_output_reset_rewrite_vars()
// PHP_BEHAVIOUR_OUTPUTCONTROL - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (17)
// flush() - PHP_4, PHP_5, PHP_7, PHP_8
// ob_clean() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ob_end_clean() - PHP_4, PHP_5, PHP_7, PHP_8
// ob_end_flush() - PHP_4, PHP_5, PHP_7, PHP_8
// ob_flush() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ob_get_clean() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ob_get_contents() - PHP_4, PHP_5, PHP_7, PHP_8
// ob_get_flush() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ob_get_length() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ob_get_level() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ob_get_status() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ob_gzhandler() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ob_implicit_flush() - PHP_4, PHP_5, PHP_7, PHP_8
// ob_list_handlers() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ob_start() - PHP_4, PHP_5, PHP_7, PHP_8
// output_add_rewrite_var() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// output_reset_rewrite_vars() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (7)
// void
// bool
// string
// false
// int
// array
// callable
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//  PHP_BEHAVIOUR_OUTPUTCONTROL  
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / Output Control - Output Buffering Control
// URL: https://www.php.net/manual/en/book.outcontrol.php
// ============================== DESCRIPTION
// OUTPUT_BUFFERING_CONTROL
// 
// OUTPUT_BUFFERING_CONTROL - BEGIN
// Output Buffering Control
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// OUTPUT_CONTROL_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The Output Control functions allow you to control when output is sent from the script. This can be useful in several different situations, especially if you need to send headers to the browser after your script has begun outputting data. The Output Control functions do not affect headers sent using header() or setcookie(), only functions such as echo and data between blocks of PHP code.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/intro.outcontrol.php
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
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Output Control configuration options
// Name               | Default                                      | Changeable     | Changelog
// output_buffering   | "0"                                          | PHP_INI_PERDIR |
// output_handler     | NULL                                         | PHP_INI_PERDIR |
// implicit_flush     | "0"                                          | PHP_INI_ALL    |
// url_rewriter.tags  | "a=href,area=href,frame=src,form=,fieldset=" | PHP_INI_ALL    | Before PHP 7.1.0, this was used to set session's trans sid rewrite. From PHP 7.1.0, it is only used by output_add_rewrite_var().
// url_rewriter.hosts | $_SERVER['HTTP_HOST'] is used as default.    | PHP_INI_ALL    | Available as of PHP 7.1.0
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// output_buffering bool/int - You can enable output buffering for all files by setting this directive to 'On'. If you wish to limit the size of the buffer to a certain size - you can use a maximum number of bytes instead of 'On', as a value for this directive (e.g., output_buffering=4096). This directive is always Off in PHP-CLI.
// output_handler string     - You can redirect all of the output of your scripts to a function. For example, if you set output_handler to mb_output_handler(), character encoding will be transparently converted to the specified encoding. Setting any output handler automatically turns on output buffering.
// Note: You cannot use both mb_output_handler() with ob_iconv_handler() and you cannot use both ob_gzhandler() and zlib.output_compression.
// Note: Only built-in functions can be used with this directive. For user defined functions, use ob_start().
// implicit_flush bool       - false by default. Changing this to true tells PHP to tell the output layer to flush itself automatically after every output block. This is equivalent to calling the PHP function flush() after each and every call to print or echo and each and every HTML block.
// When using PHP within an web environment, turning this option on has serious performance implications and is generally recommended for debugging purposes only. This value defaults to true when operating under the CLI SAPI.
// See also ob_implicit_flush().
// url_rewriter.tags string  - url_rewriter.tags specifies which HTML tags are rewritten by output_add_rewrite_var() values. Defaults to a=href,area=href,frame=src,input=src,form= form is special tag. <input hidden="session_id" name="session_name"> is added as form variable.
// Note: Before PHP 7.1.0, url_rewriter.tags was used to specify session.trans_sid_tags. As of PHP 7.1.0, fieldset is no longer considered as special tag.
// url_rewriter.hosts string - url_rewriter.hosts specifies which hosts are rewritten to include output_add_rewrite_var() values. Defaults to $_SERVER['HTTP_HOST']. Multiple hosts can be specified by ",", no space is allowed between hosts. e.g. php.net,wiki.php.net,bugs.php.net
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are always available as part of the PHP core.
// PHP_OUTPUT_HANDLER_START (int)     - Indicates that output buffering has begun.
// PHP_OUTPUT_HANDLER_WRITE (int)     - Indicates that the output buffer is being flushed, and had data to output.
// PHP_OUTPUT_HANDLER_FLUSH (int)     - Indicates that the buffer has been flushed.
// PHP_OUTPUT_HANDLER_CLEAN (int)     - Indicates that the output buffer has been cleaned.
// PHP_OUTPUT_HANDLER_FINAL (int)     - Indicates that this is the final output buffering operation.
// PHP_OUTPUT_HANDLER_CONT (int)      - Indicates that the buffer has been flushed, but output buffering will continue.
// This is an alias for PHP_OUTPUT_HANDLER_WRITE.
// PHP_OUTPUT_HANDLER_END (int)       - Indicates that output buffering has ended.
// This is an alias for PHP_OUTPUT_HANDLER_FINAL.
// PHP_OUTPUT_HANDLER_CLEANABLE (int) - Controls whether an output buffer created by ob_start() can be cleaned.
// PHP_OUTPUT_HANDLER_FLUSHABLE (int) - Controls whether an output buffer created by ob_start() can be flushed.
// PHP_OUTPUT_HANDLER_REMOVABLE (int) - Controls whether an output buffer created by ob_start() can be removed before the end of the script.
// PHP_OUTPUT_HANDLER_STDFLAGS (int)  - The default set of output buffer flags; currently equivalent to PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_FLUSHABLE | PHP_OUTPUT_HANDLER_REMOVABLE.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// BASIC_USAGE
// OUTPUT_REWRITE_USAGE
// 
// BASIC_USAGE - BEGIN
// Basic usage
// 
// Example #1 Output Control example
// [php]
// 
// ob_start();
// echo "Hello\n";
// 
// setcookie("cookiename", "cookiedata");
// 
// ob_end_flush();
// 
// [/php]
// In the above example, the output from echo would be stored in the output buffer until ob_end_flush() was called. In the mean time, the call to setcookie() successfully stored a cookie without causing an error. (Headers cannot normally be sent to the browser after data has already been sent.)
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.examples.basic.php
// BASIC_USAGE - END
// 
// OUTPUT_REWRITE_USAGE - BEGIN
// Output rewrite usage
// 
// Since PHP 7.1.0, output_add_rewrite_var(), output_reset_rewrite_vars() use dedicated output buffer. i.e. It does not use trans sid output buffer.
// 
// Example #1 Output rewrite example
// [code]
// [php]
// // This code works with PHP 7.1.0, 7.0.10, 5.6.25 and up.
// 
// // HTTP_HOST is default target host. Set manually to make sample code works.
// $_SERVER['HTTP_HOST'] = 'php.net';
// 
// // Output rewriter only rewrite form. Add a=href.
// // Tags can be specified tag_name=url_attr, e.g. img=src,iframe=src
// // No space allowed between settings.
// // Form tag is special tag that add hidden input.
// ini_set('url_rewriter.tags','a=href,form=');
// var_dump(ini_get('url_rewriter.tags'));
// 
// // This is added to URL and form
// output_add_rewrite_var('test', 'value');
// [/php]
// <a href="//php.net/index.php?bug=1234">bug1234</a>
// <form action="https://php.net/?bug=1234&edit=1" action="post">
//  <input type="text" name="title" />
// </form>
// [/code]
// The above example will output:
// [result]
// <a href="//php.net/?bug=1234&test=value">bug1234</a>
// <form action="https://php.net/?bug=1234&edit=1" method="post"><input type="hidden" name="test" value="value" />
//  <input type="text" name="title" />
// </form>
// [/result]
// Since PHP 7.1.0, output rewrite functions have it's own INI settings, url_rewriter.tags and url_rewriter.hosts.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.examples.rewrite.php
// OUTPUT_REWRITE_USAGE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/outcontrol.examples.php
// EXAMPLES - END
// 
// OUTPUT_CONTROL_FUNCTIONS - BEGIN
// Output Control Functions
// 
// See Also
// See also header() and setcookie().
// 
// Table of Contents
// * flush                     - Flush system output buffer
// * ob_clean                  - Clean (erase) the output buffer
// * ob_end_clean              - Clean (erase) the output buffer and turn off output buffering
// * ob_end_flush              - Flush (send) the output buffer and turn off output buffering
// * ob_flush                  - Flush (send) the output buffer
// * ob_get_clean              - Get current buffer contents and delete current output buffer
// * ob_get_contents           - Return the contents of the output buffer
// * ob_get_flush              - Flush the output buffer, return it as a string and turn off output buffering
// * ob_get_length             - Return the length of the output buffer
// * ob_get_level              - Return the nesting level of the output buffering mechanism
// * ob_get_status             - Get status of output buffers
// * ob_gzhandler              - ob_start callback function to gzip output buffer
// * ob_implicit_flush         - Turn implicit flush on/off
// * ob_list_handlers          - List all output handlers in use
// * ob_start                  - Turn on output buffering
// * output_add_rewrite_var    - Add URL rewriter values
// * output_reset_rewrite_vars - Reset URL rewriter values
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/ref.outcontrol.php
// OUTPUT_CONTROL_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/book.outcontrol.php
// OUTPUT_BUFFERING_CONTROL - END
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_FLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Flush system output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// flush() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_flush()
{

// ========== FLUSH - BEGIN
// ===== ABOUT
// Flush system output buffer
// ===== DESCRIPTION
// Flushes the system write buffers of PHP and whatever backend PHP is using (CGI, a web server, etc). This attempts to push current output all the way to the browser with a few caveats.
// flush() may not be able to override the buffering scheme of your web server and it has no effect on any client-side buffering in the browser. It also doesn't affect PHP's userspace output buffering mechanism. This means ob_flush() should be called before flush() to flush the output buffers if they are in use.
// Several servers, especially on Win32, will still buffer the output from your script until it terminates before transmitting the results to the browser.
// Server modules for Apache like mod_gzip may do buffering of their own that will cause flush() to not result in data being sent immediately to the client.
// Even the browser may buffer its input before displaying it. Netscape, for example, buffers text until it receives an end-of-line or the beginning of a tag, and it won't render tables until the </table> tag of the outermost table is seen.
// Some versions of Microsoft Internet Explorer will only start to display the page after they have received 256 bytes of output, so you may need to send extra whitespace before flushing to get those browsers to display the page.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// flush(): void
// ===== CODE
flush(

// This function has no parameters.

); // Return Values
// No value is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.flush.php
// ========== FLUSH - END

// SYNTAX:
// void flush()

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_FLUSH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_CLEAN
// ============================== PUBLIC
// ============================== ABOUT
// Clean (erase) the output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_clean() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_clean()
{
$return_ob_clean = false;

// ========== OB_CLEAN - BEGIN
// ===== ABOUT
// Clean (erase) the output buffer
// ===== DESCRIPTION
// This function discards the contents of the output buffer.
// This function does not destroy the output buffer like ob_end_clean() does.
// The output buffer must be started by ob_start() with PHP_OUTPUT_HANDLER_CLEANABLE flag. Otherwise ob_clean() will not work.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_clean(): bool
// ===== CODE
$return_ob_clean = ob_clean(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-clean.php
// ========== OB_CLEAN - END

// SYNTAX:
// bool ob_clean()

return $return_ob_clean; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_CLEAN
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_END_CLEAN
// ============================== PUBLIC
// ============================== ABOUT
// Clean (erase) the output buffer and turn off output buffering.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_end_clean() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_end_clean()
{
$return_ob_end_clean = false;

// ========== OB_END_CLEAN - BEGIN
// ===== ABOUT
// Clean (erase) the output buffer and turn off output buffering
// ===== DESCRIPTION
// This function discards the contents of the topmost output buffer and turns off this output buffering. If you want to further process the buffer's contents you have to call ob_get_contents() before ob_end_clean() as the buffer contents are discarded when ob_end_clean() is called.
// The output buffer must be started by ob_start() with PHP_OUTPUT_HANDLER_CLEANABLE and PHP_OUTPUT_HANDLER_REMOVABLE flags. Otherwise ob_end_clean() will not work.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_end_clean(): bool
// ===== CODE
$return_ob_end_clean = ob_end_clean(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure. Reasons for failure are first that you called the function without an active buffer or that for some reason a buffer could not be deleted (possible for special buffer).
// 
// Errors/Exceptions
// If the function fails it generates an E_NOTICE.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-end-clean.php
// ========== OB_END_CLEAN - END

// SYNTAX:
// bool ob_end_clean()

return $return_ob_end_clean; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_END_CLEAN
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_END_FLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Flush (send) the output buffer and turn off output buffering.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_end_flush() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_end_flush()
{
$return_ob_end_flush = false;

// ========== OB_END_FLUSH - BEGIN
// ===== ABOUT
// Flush (send) the output buffer and turn off output buffering
// ===== DESCRIPTION
// This function will send the contents of the topmost output buffer (if any) and turn this output buffer off. If you want to further process the buffer's contents you have to call ob_get_contents() before ob_end_flush() as the buffer contents are discarded after ob_end_flush() is called.
// The output buffer must be started by ob_start() with PHP_OUTPUT_HANDLER_FLUSHABLE and PHP_OUTPUT_HANDLER_REMOVABLE flags. Otherwise ob_end_flush() will not work.
// Note: This function is similar to ob_get_flush(), except that ob_get_flush() returns the buffer as a string.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_end_flush(): bool
// ===== CODE
$return_ob_end_flush = ob_end_flush(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure. Reasons for failure are first that you called the function without an active buffer or that for some reason a buffer could not be deleted (possible for special buffer).
// 
// Errors/Exceptions
// If the function fails it generates an E_NOTICE.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-end-flush.php
// ========== OB_END_FLUSH - END

// SYNTAX:
// bool ob_end_flush()

return $return_ob_end_flush; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_END_FLUSH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_FLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Flush (send) the output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_flush() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_flush()
{
$return_ob_flush = false;

// ========== OB_FLUSH - BEGIN
// ===== ABOUT
// Flush (send) the output buffer
// ===== DESCRIPTION
// This function will send the contents of the output buffer (if any). If you want to further process the buffer's contents you have to call ob_get_contents() before ob_flush() as the buffer contents are discarded after ob_flush() is called.
// This function does not destroy the output buffer like ob_end_flush() does.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_flush(): bool
// ===== CODE
$return_ob_flush = ob_flush(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-flush.php
// ========== OB_FLUSH - END

// SYNTAX:
// bool ob_flush()

return $return_ob_flush; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_FLUSH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_CLEAN
// ============================== PUBLIC
// ============================== ABOUT
// Get current buffer contents and delete current output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_get_clean() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_get_clean()
{
$return_ob_get_clean = false;

// ========== OB_GET_CLEAN - BEGIN
// ===== ABOUT
// Get current buffer contents and delete current output buffer
// ===== DESCRIPTION
// Gets the current buffer contents and delete current output buffer.
// ob_get_clean() essentially executes both ob_get_contents() and ob_end_clean().
// The output buffer must be started by ob_start() with PHP_OUTPUT_HANDLER_CLEANABLE and PHP_OUTPUT_HANDLER_REMOVABLE flags. Otherwise ob_get_clean() will not work.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_get_clean(): string|false
// ===== CODE
$return_ob_get_clean = ob_get_clean(

// This function has no parameters.

); // Return Values
// Returns the contents of the output buffer and end output buffering. If output buffering isn't active then false is returned.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-get-clean.php
// ========== OB_GET_CLEAN - END

// SYNTAX:
// string|false ob_get_clean()

return $return_ob_get_clean; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_CLEAN
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_CONTENTS
// ============================== PUBLIC
// ============================== ABOUT
// Return the contents of the output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_get_contents() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_get_contents()
{
$return_ob_get_contents = false;

// ========== OB_GET_CONTENTS - BEGIN
// ===== ABOUT
// Return the contents of the output buffer
// ===== DESCRIPTION
// Gets the contents of the output buffer without clearing it.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_get_contents(): string|false
// ===== CODE
$return_ob_get_contents = ob_get_contents(

// This function has no parameters.

); // Return Values
// This will return the contents of the output buffer or false, if output buffering isn't active.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-get-contents.php
// ========== OB_GET_CONTENTS - END

// SYNTAX:
// string|false ob_get_contents()

return $return_ob_get_contents; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_CONTENTS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_FLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Flush the output buffer, return it as a string and turn off output buffering.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_get_flush() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_get_flush()
{
$return_ob_get_flush = false;

// ========== OB_GET_FLUSH - BEGIN
// ===== ABOUT
// Flush the output buffer, return it as a string and turn off output buffering
// ===== DESCRIPTION
// ob_get_flush() flushes the output buffer, return it as a string and turns off output buffering.
// The output buffer must be started by ob_start() with PHP_OUTPUT_HANDLER_FLUSHABLE flag. Otherwise ob_get_flush() will not work.
// Note: This function is similar to ob_end_flush(), except that this function also returns the buffer as a string.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_get_flush(): string|false
// ===== CODE
$return_ob_get_flush = ob_get_flush(

// This function has no parameters.

); // Return Values
// Returns the output buffer or false if no buffering is active.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-get-flush.php
// ========== OB_GET_FLUSH - END

// SYNTAX:
// string|false ob_get_flush()

return $return_ob_get_flush; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_FLUSH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_LENGTH
// ============================== PUBLIC
// ============================== ABOUT
// Return the length of the output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_get_length() - PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_get_length()
{
$return_ob_get_length = false;

// ========== OB_GET_LENGTH - BEGIN
// ===== ABOUT
// Return the length of the output buffer
// ===== DESCRIPTION
// This will return the length of the contents in the output buffer, in bytes.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_2, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_get_length(): int|false
// ===== CODE
$return_ob_get_length = ob_get_length(

// This function has no parameters.

); // Return Values
// Returns the length of the output buffer contents, in bytes, or false if no buffering is active.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-get-length.php
// ========== OB_GET_LENGTH - END

// SYNTAX:
// int|false ob_get_length()

return $return_ob_get_length; // int|false
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_LENGTH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_LEVEL
// ============================== PUBLIC
// ============================== ABOUT
// Return the nesting level of the output buffering mechanism.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_get_level() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_get_level()
{
$return_ob_get_level = 0;

// ========== OB_GET_LEVEL - BEGIN
// ===== ABOUT
// Return the nesting level of the output buffering mechanism
// ===== DESCRIPTION
// Returns the nesting level of the output buffering mechanism.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_get_level(): int
// ===== CODE
$return_ob_get_level = ob_get_level(

// This function has no parameters.

); // Return Values
// Returns the level of nested output buffering handlers or zero if output buffering is not active.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-get-level.php
// ========== OB_GET_LEVEL - END

// SYNTAX:
// int ob_get_level()

return $return_ob_get_level; // int
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_LEVEL
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_STATUS
// ============================== PUBLIC
// ============================== ABOUT
// Get status of output buffers.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_get_status() - PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_get_status($full_status = false)
{
$return_ob_get_status = null;

// ========== OB_GET_STATUS - BEGIN
// ===== ABOUT
// Get status of output buffers
// ===== DESCRIPTION
// ob_get_status() returns status information on either the top level output buffer or all active output buffer levels if full_status is set to true.
// ===== SUPPORTED
// PHP_4 >= PHP_4_2_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_get_status(bool $full_status = false): array
// ===== CODE
$return_ob_get_status = ob_get_status(

$full_status // bool full_status - true to return all active output buffer levels. If false or not set, only the top level output buffer is returned.

); // Return Values
// If called without the full_status parameter or with full_status = false a simple array with the following elements is returned:
// Array
// (
//     [level] => 2
//     [type] => 0
//     [status] => 0
//     [name] => URL-Rewriter
//     [del] => 1
// )
// Simple ob_get_status() results
// Key    - Value
// level  - Output nesting level
// type   - 0 (internal handler) or 1 (user supplied handler)
// status - One of PHP_OUTPUT_HANDLER_START (0), PHP_OUTPUT_HANDLER_CONT (1) or PHP_OUTPUT_HANDLER_END (2)
// name   - Name of active output handler or ' default output handler' if none is set
// del    - Erase-flag as set by ob_start()
// If called with full_status = true an array with one element for each active output buffer level is returned. The output level is used as key of the top level array and each array element itself is another array holding status information on one active output level.
// Array
// (
//     [0] => Array
//         (
//             [chunk_size] => 0
//             [size] => 40960
//             [block_size] => 10240
//             [type] => 1
//             [status] => 0
//             [name] => default output handler
//             [del] => 1
//         )
// 
//     [1] => Array
//         (
//             [chunk_size] => 0
//             [size] => 40960
//             [block_size] => 10240
//             [type] => 0
//             [buffer_size] => 0
//             [status] => 0
//             [name] => URL-Rewriter
//             [del] => 1
//         )
// 
// )
// The full output contains these additional elements:
// Full ob_get_status() results
// Key        - Value
// chunk_size - Chunk size as set by ob_start()
// size       - ...
// blocksize  - ...
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-get-status.php
// ========== OB_GET_STATUS - END

// SYNTAX:
// array ob_get_status(bool $full_status = false)

return $return_ob_get_status; // array
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GET_STATUS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GZHANDLER
// ============================== PUBLIC
// ============================== ABOUT
// ob_start callback function to gzip output buffer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_gzhandler() - PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_gzhandler($data, $flags)
{
$return_ob_gzhandler = false;

// ========== OB_GZHANDLER - BEGIN
// ===== ABOUT
// ob_start callback function to gzip output buffer
// ===== DESCRIPTION
// ob_gzhandler() is intended to be used as a callback function for ob_start() to help facilitate sending gz-encoded data to web browsers that support compressed web pages. Before ob_gzhandler() actually sends compressed data, it determines what type of content encoding the browser will accept ("gzip", "deflate" or none at all) and will return its output accordingly. All browsers are supported since it's up to the browser to send the correct header saying that it accepts compressed web pages. If a browser doesn't support compressed pages this function returns false.
// ===== SUPPORTED
// PHP_4 >= PHP_4_0_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_gzhandler(string $data, int $flags): string|false
// ===== CODE
$return_ob_gzhandler = ob_gzhandler(

$data, // string $data

$flags // int $flags

); // Return Values
// 
// Notes
// Note: ob_gzhandler() requires the zlib extension.
// Note: You cannot use both ob_gzhandler() and zlib.output_compression. Also note that using zlib.output_compression is preferred over ob_gzhandler().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-gzhandler.php
// ========== OB_GZHANDLER - END

// SYNTAX:
// string|false ob_gzhandler(string $data, int $flags)

return $return_ob_gzhandler; // string|false
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_GZHANDLER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_IMPLICIT_FLUSH
// ============================== PUBLIC
// ============================== ABOUT
// Turn implicit flush on/off.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_implicit_flush() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_implicit_flush($enable = true)
{

// ========== OB_IMPLICIT_FLUSH - BEGIN
// ===== ABOUT
// Turn implicit flush on/off
// ===== DESCRIPTION
// ob_implicit_flush() will turn implicit flushing on or off. Implicit flushing will result in a flush operation after every output call, so that explicit calls to flush() will no longer be needed.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_implicit_flush(bool $enable = true): void
// ===== CODE
ob_implicit_flush(

$enable // bool enable - true to turn implicit flushing on, false otherwise.

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - The enable expects a bool value now; previously, an int was expected.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-implicit-flush.php
// ========== OB_IMPLICIT_FLUSH - END

// SYNTAX:
// void ob_implicit_flush(bool $enable = true)

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_IMPLICIT_FLUSH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_LIST_HANDLERS
// ============================== PUBLIC
// ============================== ABOUT
// List all output handlers in use.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_list_handlers() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_ob_list_handlers()
{
$return_ob_list_handlers = null;

// ========== OB_LIST_HANDLERS - BEGIN
// ===== ABOUT
// List all output handlers in use
// ===== DESCRIPTION
// Lists all output handlers in use.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_list_handlers(): array
// ===== CODE
$return_ob_list_handlers = ob_list_handlers(

// This function has no parameters.

); // Return Values
// This will return an array with the output handlers in use (if any). If output_buffering is enabled or an anonymous function was used with ob_start(), ob_list_handlers() will return "default output handler".
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-list-handlers.php
// ========== OB_LIST_HANDLERS - END

// SYNTAX:
// array ob_list_handlers()

return $return_ob_list_handlers; // array
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_LIST_HANDLERS
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_START
// ============================== PUBLIC
// ============================== ABOUT
// Turn on output buffering.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// ob_start() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// PHP_OUTPUT_HANDLER_STDFLAGS - ob_start()
// ============================== CODE
function php_behaviour_outputcontrol_ob_start($callback = null, $chunk_size = 0, $flags = PHP_OUTPUT_HANDLER_STDFLAGS)
{
$return_ob_start = false;

// ========== OB_START - BEGIN
// ===== ABOUT
// Turn on output buffering
// ===== DESCRIPTION
// This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer.
// The contents of this internal buffer may be copied into a string variable using ob_get_contents(). To output what is stored in the internal buffer, use ob_end_flush(). Alternatively, ob_end_clean() will silently discard the buffer contents.
// Warning: Some web servers (e.g. Apache) change the working directory of a script when calling the callback function. You can change it back by e.g. chdir(dirname($_SERVER['SCRIPT_FILENAME'])) in the callback function.
// Output buffers are stackable, that is, you may call ob_start() while another ob_start() is active. Just make sure that you call ob_end_flush() the appropriate number of times. If multiple output callback functions are active, output is being filtered sequentially through each of them in nesting order.
// If output buffering is still active when the script ends, PHP outputs the contents automatically.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// ob_start(callable $callback = null, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS): bool
// ===== CODE
$return_ob_start = ob_start(

$callback, // callable callback - An optional callback function may be specified. This function takes a string as a parameter and should return a string. The function will be called when the output buffer is flushed (sent) or cleaned (with ob_flush(), ob_clean() or similar function) or when the output buffer is flushed to the browser at the end of the request. When callback is called, it will receive the contents of the output buffer as its parameter and is expected to return a new output buffer as a result, which will be sent to the browser. If the callback is not a callable function, this function will return false. This is the callback signature:
// handler(string $buffer, int $phase = ?): string
// buffer - Contents of the output buffer.
// phase  - Bitmask of PHP_OUTPUT_HANDLER_* constants.
// If callback returns false original input is sent to the browser.
// The callback parameter may be bypassed by passing a null value.
// ob_end_clean(), ob_end_flush(), ob_clean(), ob_flush() and ob_start() may not be called from a callback function. If you call them from callback function, the behavior is undefined. If you would like to delete the contents of a buffer, return "" (a null string) from callback function. You can't even call functions using the output buffering functions like print_r($expression, true) or highlight_file($filename, true) from a callback function.
// Note: ob_gzhandler() function exists to facilitate sending gz-encoded data to web browsers that support compressed web pages. ob_gzhandler() determines what type of content encoding the browser will accept and will return its output accordingly.

$chunk_size, // int chunk_size - If the optional parameter chunk_size is passed, the buffer will be flushed after any output call which causes the buffer's length to equal or exceed chunk_size. The default value 0 means that the output function will only be called when the output buffer is closed.

$flags // int flags - The flags parameter is a bitmask that controls the operations that can be performed on the output buffer. The default is to allow output buffers to be cleaned, flushed and removed, which can be set explicitly via PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_FLUSHABLE | PHP_OUTPUT_HANDLER_REMOVABLE, or PHP_OUTPUT_HANDLER_STDFLAGS as shorthand.
// Each flag controls access to a set of functions, as described below:
// Constant                     - Functions
// PHP_OUTPUT_HANDLER_CLEANABLE - ob_clean(), ob_end_clean(), and ob_get_clean().
// PHP_OUTPUT_HANDLER_FLUSHABLE - ob_end_flush(), ob_flush(), and ob_get_flush().
// PHP_OUTPUT_HANDLER_REMOVABLE - ob_end_clean(), ob_end_flush(), and ob_get_flush().

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.ob-start.php
// ========== OB_START - END

// SYNTAX:
// bool ob_start(callable $callback = null, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS)

return $return_ob_start; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OB_START
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OUTPUT_ADD_REWRITE_VAR
// ============================== PUBLIC
// ============================== ABOUT
// Add URL rewriter values.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// output_add_rewrite_var() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_output_add_rewrite_var($name, $value)
{
$return_output_add_rewrite_var = false;

// ========== OUTPUT_ADD_REWRITE_VAR - BEGIN
// ===== ABOUT
// Add URL rewriter values
// ===== DESCRIPTION
// This function adds another name/value pair to the URL rewrite mechanism. The name and value will be added to URLs (as GET parameter) and forms (as hidden input fields) the same way as the session ID when transparent URL rewriting is enabled with session.use_trans_sid.
// This function's behaviour is controlled by the url_rewriter.tags and url_rewriter.hosts php.ini parameters.
// Note that this function can be successfully called at most once per request.
// Note: Calling this function will implicitly start output buffering if it is not active already.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// output_add_rewrite_var(string $name, string $value): bool
// ===== CODE
$return_output_add_rewrite_var = output_add_rewrite_var(

$name, // string name - The variable name.

$value // string value - The variable value.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 7.1.0   - Before PHP 7.1.0, rewrite vars set by output_add_rewrite_var() use the same Session module trans sid output buffer. Since PHP 7.1.0, dedicated output buffer is used, url_rewriter.tags is used solely for output functions, url_rewriter.hosts is added.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.output-add-rewrite-var.php
// ========== OUTPUT_ADD_REWRITE_VAR - END

// SYNTAX:
// bool output_add_rewrite_var(string $name, string $value)

return $return_output_add_rewrite_var; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OUTPUT_ADD_REWRITE_VAR
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_OUTPUTCONTROL_OUTPUT_RESET_REWRITE_VARS
// ============================== PUBLIC
// ============================== ABOUT
// Reset URL rewriter values.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// output_reset_rewrite_vars() - PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_behaviour_outputcontrol_output_reset_rewrite_vars()
{
$return_output_reset_rewrite_vars = false;

// ========== OUTPUT_RESET_REWRITE_VARS - BEGIN
// ===== ABOUT
// Reset URL rewriter values
// ===== DESCRIPTION
// This function resets the URL rewriter and removes all rewrite variables previously set by the output_add_rewrite_var() function.
// ===== SUPPORTED
// PHP_4 >= PHP_4_3_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// output_reset_rewrite_vars(): bool
// ===== CODE
$return_output_reset_rewrite_vars = output_reset_rewrite_vars(

// This function has no parameters.

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 7.1.0   - Before PHP 7.1.0, rewrite vars set by output_add_rewrite_var() use the same Session module trans sid output buffer. Since PHP 7.1.0, dedicated output buffer is used and output_reset_rewrite_vars() only removes rewrite vars defined by output_add_rewrite_var().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-06)
// URL: https://www.php.net/manual/en/function.output-reset-rewrite-vars.php
// ========== OUTPUT_RESET_REWRITE_VARS - END

// SYNTAX:
// bool output_reset_rewrite_vars()

return $return_output_reset_rewrite_vars; // bool
}
// ============================== END
// PHP_BEHAVIOUR_OUTPUTCONTROL_OUTPUT_RESET_REWRITE_VARS
// ==============================


// ============================== END
//  PHP_BEHAVIOUR_OUTPUTCONTROL  
// ==============================
?>