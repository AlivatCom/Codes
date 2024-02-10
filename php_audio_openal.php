<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_AUDIO_OPENAL - BEGIN
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_CREATE - resource php_audio_openal_openal_buffer_create()
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_DATA - bool php_audio_openal_openal_buffer_data(resource $buffer, int $format, string $data, int $freq)
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_DESTROY - bool php_audio_openal_openal_buffer_destroy(resource $buffer)
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_GET - int|false php_audio_openal_openal_buffer_get(resource $buffer, int $property)
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_LOADWAV - bool php_audio_openal_openal_buffer_loadwav(resource $buffer, string $wavfile)
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_CREATE - resource php_audio_openal_openal_context_create(resource $device)
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_CURRENT - bool php_audio_openal_openal_context_current(resource $context)
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_DESTROY - bool php_audio_openal_openal_context_destroy(resource $context)
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_PROCESS - bool php_audio_openal_openal_context_process(resource $context)
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_SUSPEND - bool php_audio_openal_openal_context_suspend(resource $context)
// PHP_AUDIO_OPENAL_OPENAL_DEVICE_CLOSE - bool php_audio_openal_openal_device_close(resource $device)
// PHP_AUDIO_OPENAL_OPENAL_DEVICE_OPEN - resource php_audio_openal_openal_device_open(string $device_desc)
// PHP_AUDIO_OPENAL_OPENAL_LISTENER_GET - mixed php_audio_openal_openal_listener_get(int $property)
// PHP_AUDIO_OPENAL_OPENAL_LISTENER_SET - bool php_audio_openal_openal_listener_set(int $property, mixed $setting)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_CREATE - resource php_audio_openal_openal_source_create()
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_DESTROY - bool php_audio_openal_openal_source_destroy(resource $source)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_GET - mixed php_audio_openal_openal_source_get(resource $source, int $property)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_PAUSE - bool php_audio_openal_openal_source_pause(resource $source)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_PLAY - bool php_audio_openal_openal_source_play(resource $source)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_REWIND - bool php_audio_openal_openal_source_rewind(resource $source)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_SET - bool php_audio_openal_openal_source_set(resource $source, int $property, mixed $setting)
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_STOP - bool php_audio_openal_openal_source_stop(resource $source)
// PHP_AUDIO_OPENAL_OPENAL_STREAM - resource|false php_audio_openal_openal_stream(resource $source, int $format, int $rate)
// PHP_AUDIO_OPENAL - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (23)
// openal_buffer_create() - PECL_openal >= PECL_openal_0_1_0
// openal_buffer_data() - PECL_openal >= PECL_openal_0_1_0
// openal_buffer_destroy() - PECL_openal >= PECL_openal_0_1_0
// openal_buffer_get() - PECL_openal >= PECL_openal_0_1_0
// openal_buffer_loadwav() - PECL_openal >= PECL_openal_0_1_0
// openal_context_create() - PECL_openal >= PECL_openal_0_1_0
// openal_context_current() - PECL_openal >= PECL_openal_0_1_0
// openal_context_destroy() - PECL_openal >= PECL_openal_0_1_0
// openal_context_process() - PECL_openal >= PECL_openal_0_1_0
// openal_context_suspend() - PECL_openal >= PECL_openal_0_1_0
// openal_device_close() - PECL_openal >= PECL_openal_0_1_0
// openal_device_open() - PECL_openal >= PECL_openal_0_1_0
// openal_listener_get() - PECL_openal >= PECL_openal_0_1_0
// openal_listener_set() - PECL_openal >= PECL_openal_0_1_0
// openal_source_create() - PECL_openal >= PECL_openal_0_1_0
// openal_source_destroy() - PECL_openal >= PECL_openal_0_1_0
// openal_source_get() - PECL_openal >= PECL_openal_0_1_0
// openal_source_pause() - PECL_openal >= PECL_openal_0_1_0
// openal_source_play() - PECL_openal >= PECL_openal_0_1_0
// openal_source_rewind() - PECL_openal >= PECL_openal_0_1_0
// openal_source_set() - PECL_openal >= PECL_openal_0_1_0
// openal_source_stop() - PECL_openal >= PECL_openal_0_1_0
// openal_stream() - PECL_openal >= PECL_openal_0_1_0
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (6)
// resource
// bool
// int
// string
// false
// mixed
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//        PHP_AUDIO_OPENAL        
// ============================== ABOUT
// PHP Manual / Function Reference / Audio Formats Manipulation / OpenAL - OpenAL Audio Bindings
// URL: https://www.php.net/manual/en/book.openal.php
// ============================== DESCRIPTION
// OPENAL_AUDIO_BINDINGS
// 
// OPENAL_AUDIO_BINDINGS - BEGIN
// OpenAL Audio Bindings
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// OPENAL_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Platform independent audio bindings. Requires the > OpenAL library.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/intro.openal.php
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
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/openal.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// This > PECL extension is not bundled with PHP.
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/openal.
// A DLL for this PECL extension is currently unavailable. See also the building on Windows section.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/openal.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/openal.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension defines four resource types: Open AL(Device) - Returned by openal_device_open(), Open AL(Context) - Returned by openal_context_create(), Open AL(Buffer) - Returned by openal_buffer_create(), and Open AL(Source) - Returned by openal_source_create().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/openal.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/openal.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// ALC_FREQUENCY (int)         - Context Attribute
// ALC_REFRESH (int)           - Context Attribute
// ALC_SYNC (int)              - Context Attribute
// AL_FREQUENCY (int)          - Buffer Setting
// AL_BITS (int)               - Buffer Setting
// AL_CHANNELS (int)           - Buffer Setting
// AL_SIZE (int)               - Buffer Setting
// AL_BUFFER (int)             - Source/Listener Setting (Integer)
// AL_SOURCE_RELATIVE (int)    - Source/Listener Setting (Integer)
// AL_SOURCE_STATE (int)       - Source/Listener Setting (Integer)
// AL_PITCH (int)              - Source/Listener Setting (Float)
// AL_GAIN (int)               - Source/Listener Setting (Float)
// AL_MIN_GAIN (int)           - Source/Listener Setting (Float)
// AL_MAX_GAIN (int)           - Source/Listener Setting (Float)
// AL_MAX_DISTANCE (int)       - Source/Listener Setting (Float)
// AL_ROLLOFF_FACTOR (int)     - Source/Listener Setting (Float)
// AL_CONE_OUTER_GAIN (int)    - Source/Listener Setting (Float)
// AL_CONE_INNER_ANGLE (int)   - Source/Listener Setting (Float)
// AL_CONE_OUTER_ANGLE (int)   - Source/Listener Setting (Float)
// AL_REFERENCE_DISTANCE (int) - Source/Listener Setting (Float)
// AL_POSITION (int)           - Source/Listener Setting (Float Vector)
// AL_VELOCITY (int)           - Source/Listener Setting (Float Vector)
// AL_DIRECTION (int)          - Source/Listener Setting (Float Vector)
// AL_ORIENTATION (int)        - Source/Listener Setting (Float Vector)
// AL_FORMAT_MONO8 (int)       - PCM Format
// AL_FORMAT_MONO16 (int)      - PCM Format
// AL_FORMAT_STEREO8 (int)     - PCM Format
// AL_FORMAT_STEREO16 (int)    - PCM Format
// AL_INITIAL (int)            - Source State
// AL_PLAYING (int)            - Source State
// AL_PAUSED (int)             - Source State
// AL_STOPPED (int)            - Source State
// AL_LOOPING (int)            - Source State
// AL_TRUE (int)               - Boolean value recognized by OpenAL
// AL_FALSE (int)              - Boolean value recognized by OpenAL
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/openal.constants.php
// PREDEFINED_CONSTANTS - END
// 
// OPENAL_FUNCTIONS - BEGIN
// OpenAL Functions
// 
// Table of Contents
// * openal_buffer_create   - Generate OpenAL buffer
// * openal_buffer_data     - Load a buffer with data
// * openal_buffer_destroy  - Destroys an OpenAL buffer
// * openal_buffer_get      - Retrieve an OpenAL buffer property
// * openal_buffer_loadwav  - Load a .wav file into a buffer
// * openal_context_create  - Create an audio processing context
// * openal_context_current - Make the specified context current
// * openal_context_destroy - Destroys a context
// * openal_context_process - Process the specified context
// * openal_context_suspend - Suspend the specified context
// * openal_device_close    - Close an OpenAL device
// * openal_device_open     - Initialize the OpenAL audio layer
// * openal_listener_get    - Retrieve a listener property
// * openal_listener_set    - Set a listener property
// * openal_source_create   - Generate a source resource
// * openal_source_destroy  - Destroy a source resource
// * openal_source_get      - Retrieve an OpenAL source property
// * openal_source_pause    - Pause the source
// * openal_source_play     - Start playing the source
// * openal_source_rewind   - Rewind the source
// * openal_source_set      - Set source property
// * openal_source_stop     - Stop playing the source
// * openal_stream          - Begin streaming on a source
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/ref.openal.php
// OPENAL_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/book.openal.php
// OPENAL_AUDIO_BINDINGS - END
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_CREATE
// ============================== PUBLIC
// ============================== ABOUT
// Generate OpenAL buffer.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_buffer_create() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_buffer_create()
{
$return_openal_buffer_create = null;

// ========== OPENAL_BUFFER_CREATE - BEGIN
// ===== ABOUT
// Generate OpenAL buffer
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_buffer_create(): resource
// ===== CODE
$return_openal_buffer_create = openal_buffer_create(

// This function has no parameters.

); // Return Values
// Returns an Open AL(Buffer) resource on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-buffer-create.php
// ========== OPENAL_BUFFER_CREATE - END

// SYNTAX:
// resource openal_buffer_create()

return $return_openal_buffer_create; // resource
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_CREATE
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_DATA
// ============================== PUBLIC
// ============================== ABOUT
// Load a buffer with data.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_buffer_data() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_buffer_data($buffer, $format, $data, $freq)
{
$return_openal_buffer_data = false;

// ========== OPENAL_BUFFER_DATA - BEGIN
// ===== ABOUT
// Load a buffer with data
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_buffer_data(
//    resource $buffer,
//    int $format,
//    string $data,
//    int $freq
// ): bool
// ===== CODE
$return_openal_buffer_data = openal_buffer_data(

$buffer, // resource buffer - An Open AL(Buffer) resource (previously created by openal_buffer_create()).

$format, // int format - Format of data, one of: AL_FORMAT_MONO8, AL_FORMAT_MONO16, AL_FORMAT_STEREO8 and AL_FORMAT_STEREO16

$data, // string data - Block of binary audio data in the format and freq specified.

$freq // int freq - Frequency of data given in Hz.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-buffer-data.php
// ========== OPENAL_BUFFER_DATA - END

// SYNTAX:
// bool openal_buffer_data(resource $buffer, int $format, string $data, int $freq)

return $return_openal_buffer_data; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_DATA
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_DESTROY
// ============================== PUBLIC
// ============================== ABOUT
// Destroys an OpenAL buffer.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_buffer_destroy() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_buffer_destroy($buffer)
{
$return_openal_buffer_destroy = false;

// ========== OPENAL_BUFFER_DESTROY - BEGIN
// ===== ABOUT
// Destroys an OpenAL buffer
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_buffer_destroy(resource $buffer): bool
// ===== CODE
$return_openal_buffer_destroy = openal_buffer_destroy(

$buffer // resource buffer - An Open AL(Buffer) resource (previously created by openal_buffer_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-buffer-destroy.php
// ========== OPENAL_BUFFER_DESTROY - END

// SYNTAX:
// bool openal_buffer_destroy(resource $buffer)

return $return_openal_buffer_destroy; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_DESTROY
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_GET
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve an OpenAL buffer property.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_buffer_get() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_buffer_get($buffer, $property)
{
$return_openal_buffer_get = false;

// ========== OPENAL_BUFFER_GET - BEGIN
// ===== ABOUT
// Retrieve an OpenAL buffer property
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_buffer_get(resource $buffer, int $property): int|false
// ===== CODE
$return_openal_buffer_get = openal_buffer_get(

$buffer, // resource buffer - An Open AL(Buffer) resource (previously created by openal_buffer_create()).

$property // int property - Specific property, one of: AL_FREQUENCY, AL_BITS, AL_CHANNELS and AL_SIZE.

); // Return Values
// Returns an integer value appropriate to the property requested or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-buffer-get.php
// ========== OPENAL_BUFFER_GET - END

// SYNTAX:
// int|false openal_buffer_get(resource $buffer, int $property)

return $return_openal_buffer_get; // int|false
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_GET
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_LOADWAV
// ============================== PUBLIC
// ============================== ABOUT
// Load a .wav file into a buffer.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_buffer_loadwav() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_buffer_loadwav($buffer, $wavfile)
{
$return_openal_buffer_loadwav = false;

// ========== OPENAL_BUFFER_LOADWAV - BEGIN
// ===== ABOUT
// Load a .wav file into a buffer
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_buffer_loadwav(resource $buffer, string $wavfile): bool
// ===== CODE
$return_openal_buffer_loadwav = openal_buffer_loadwav(

$buffer, // resource buffer - An Open AL(Buffer) resource (previously created by openal_buffer_create()).

$wavfile // string wavfile - Path to .wav file on local file system.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-buffer-loadwav.php
// ========== OPENAL_BUFFER_LOADWAV - END

// SYNTAX:
// bool openal_buffer_loadwav(resource $buffer, string $wavfile)

return $return_openal_buffer_loadwav; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_BUFFER_LOADWAV
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_CREATE
// ============================== PUBLIC
// ============================== ABOUT
// Create an audio processing context.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_context_create() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_context_create($device)
{
$return_openal_context_create = null;

// ========== OPENAL_CONTEXT_CREATE - BEGIN
// ===== ABOUT
// Create an audio processing context
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_context_create(resource $device): resource
// ===== CODE
$return_openal_context_create = openal_context_create(

$device // resource device - An Open AL(Device) resource (previously created by openal_device_open()).

); // Return Values
// Returns an Open AL(Context) resource on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-context-create.php
// ========== OPENAL_CONTEXT_CREATE - END

// SYNTAX:
// resource openal_context_create(resource $device)

return $return_openal_context_create; // resource
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_CREATE
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_CURRENT
// ============================== PUBLIC
// ============================== ABOUT
// Make the specified context current.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_context_current() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_context_current($context)
{
$return_openal_context_current = false;

// ========== OPENAL_CONTEXT_CURRENT - BEGIN
// ===== ABOUT
// Make the specified context current
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_context_current(resource $context): bool
// ===== CODE
$return_openal_context_current = openal_context_current(

$context // resource $context

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-context-current.php
// ========== OPENAL_CONTEXT_CURRENT - END

// SYNTAX:
// bool openal_context_current(resource $context)

return $return_openal_context_current; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_CURRENT
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_DESTROY
// ============================== PUBLIC
// ============================== ABOUT
// Destroys a context.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_context_destroy() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_context_destroy($context)
{
$return_openal_context_destroy = false;

// ========== OPENAL_CONTEXT_DESTROY - BEGIN
// ===== ABOUT
// Destroys a context
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_context_destroy(resource $context): bool
// ===== CODE
$return_openal_context_destroy = openal_context_destroy(

$context // resource context - An Open AL(Context) resource (previously created by openal_context_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-context-destroy.php
// ========== OPENAL_CONTEXT_DESTROY - END

// SYNTAX:
// bool openal_context_destroy(resource $context)

return $return_openal_context_destroy; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_DESTROY
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_PROCESS
// ============================== PUBLIC
// ============================== ABOUT
// Process the specified context.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_context_process() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_context_process($context)
{
$return_openal_context_process = false;

// ========== OPENAL_CONTEXT_PROCESS - BEGIN
// ===== ABOUT
// Process the specified context
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_context_process(resource $context): bool
// ===== CODE
$return_openal_context_process = openal_context_process(

$context // resource context - An Open AL(Context) resource (previously created by openal_context_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-context-process.php
// ========== OPENAL_CONTEXT_PROCESS - END

// SYNTAX:
// bool openal_context_process(resource $context)

return $return_openal_context_process; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_PROCESS
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_SUSPEND
// ============================== PUBLIC
// ============================== ABOUT
// Suspend the specified context.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_context_suspend() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_context_suspend($context)
{
$return_openal_context_suspend = false;

// ========== OPENAL_CONTEXT_SUSPEND - BEGIN
// ===== ABOUT
// Suspend the specified context
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_context_suspend(resource $context): bool
// ===== CODE
$return_openal_context_suspend = openal_context_suspend(

$context // resource context - An Open AL(Context) resource (previously created by openal_context_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-context-suspend.php
// ========== OPENAL_CONTEXT_SUSPEND - END

// SYNTAX:
// bool openal_context_suspend(resource $context)

return $return_openal_context_suspend; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_CONTEXT_SUSPEND
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_DEVICE_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close an OpenAL device
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_device_close() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_device_close($device)
{
$return_openal_device_close = false;

// ========== OPENAL_DEVICE_CLOSE - BEGIN
// ===== ABOUT
// Close an OpenAL device
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_device_close(resource $device): bool
// ===== CODE
$return_openal_device_close = openal_device_close(

$device // resource device - An Open AL(Device) resource (previously created by openal_device_open()) to be closed.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-device-close.php
// ========== OPENAL_DEVICE_CLOSE - END

// SYNTAX:
// bool openal_device_close(resource $device)

return $return_openal_device_close; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_DEVICE_CLOSE
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_DEVICE_OPEN
// ============================== PUBLIC
// ============================== ABOUT
// Initialize the OpenAL audio layer.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_device_open() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_device_open($device_desc)
{
$return_openal_device_open = null;

// ========== OPENAL_DEVICE_OPEN - BEGIN
// ===== ABOUT
// Initialize the OpenAL audio layer
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_device_open(string $device_desc = ?): resource
// ===== CODE
$return_openal_device_open = openal_device_open(

$device_desc // string device_desc - Open an audio device optionally specified by device_desc. If device_desc is not specified the first available audio device will be used.

); // Return Values
// Returns an Open AL(Device) resource on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-device-open.php
// ========== OPENAL_DEVICE_OPEN - END

// SYNTAX:
// resource openal_device_open(string $device_desc)

return $return_openal_device_open; // resource
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_DEVICE_OPEN
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_LISTENER_GET
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve a listener property.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_listener_get() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_listener_get($property)
{
$return_openal_listener_get = null;

// ========== OPENAL_LISTENER_GET - BEGIN
// ===== ABOUT
// Retrieve a listener property
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_listener_get(int $property): mixed
// ===== CODE
$return_openal_listener_get = openal_listener_get(

$property // int property - Property to retrieve, one of: AL_GAIN (float), AL_POSITION (array(float,float,float)), AL_VELOCITY (array(float,float,float)) and AL_ORIENTATION (array(float,float,float)).

); // Return Values
// Returns a float or array of floats (as appropriate) or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-listener-get.php
// ========== OPENAL_LISTENER_GET - END

// SYNTAX:
// mixed openal_listener_get(int $property)

return $return_openal_listener_get; // mixed
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_LISTENER_GET
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_LISTENER_SET
// ============================== PUBLIC
// ============================== ABOUT
// Set a listener property.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_listener_set() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_listener_set($property, $setting)
{
$return_openal_listener_set = false;

// ========== OPENAL_LISTENER_SET - BEGIN
// ===== ABOUT
// Set a listener property
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_listener_set(int $property, mixed $setting): bool
// ===== CODE
$return_openal_listener_set = openal_listener_set(

$property, // int property - Property to set, one of: AL_GAIN (float), AL_POSITION (array(float,float,float)), AL_VELOCITY (array(float,float,float)) and AL_ORIENTATION (array(float,float,float)).

$setting // mixed setting - Value to set, either float, or an array of floats as appropriate.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-listener-set.php
// ========== OPENAL_LISTENER_SET - END

// SYNTAX:
// bool openal_listener_set(int $property, mixed $setting)

return $return_openal_listener_set; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_LISTENER_SET
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_CREATE
// ============================== PUBLIC
// ============================== ABOUT
// Generate a source resource.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_create() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_create()
{
$return_openal_source_create = null;

// ========== OPENAL_SOURCE_CREATE - BEGIN
// ===== ABOUT
// Generate a source resource
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_create(): resource
// ===== CODE
$return_openal_source_create = openal_source_create(

// This function has no parameters.

); // Return Values
// Returns an Open AL(Source) resource on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-create.php
// ========== OPENAL_SOURCE_CREATE - END

// SYNTAX:
// resource openal_source_create()

return $return_openal_source_create; // resource
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_CREATE
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_DESTROY
// ============================== PUBLIC
// ============================== ABOUT
// Destroy a source resource.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_destroy() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_destroy($source)
{
$return_openal_source_destroy = false;

// ========== OPENAL_SOURCE_DESTROY - BEGIN
// ===== ABOUT
// Destroy a source resource
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_destroy(resource $source): bool
// ===== CODE
$return_openal_source_destroy = openal_source_destroy(

$source // bool source - An Open AL(Source) resource (previously created by openal_source_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.abs.php
// ========== OPENAL_SOURCE_DESTROY - END

// SYNTAX:
// bool openal_source_destroy(resource $source)

return $return_openal_source_destroy; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_DESTROY
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_GET
// ============================== PUBLIC
// ============================== ABOUT
// Retrieve an OpenAL source property.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_get() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_get($source, $property)
{
$return_openal_source_get = null;

// ========== OPENAL_SOURCE_GET - BEGIN
// ===== ABOUT
// Retrieve an OpenAL source property
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_get(resource $source, int $property): mixed
// ===== CODE
$return_openal_source_get = openal_source_get(

$source, // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

$property // int property - Property to get, one of: AL_SOURCE_RELATIVE (int), AL_SOURCE_STATE (int), AL_PITCH (float), AL_GAIN (float), AL_MIN_GAIN (float), AL_MAX_GAIN (float), AL_MAX_DISTANCE (float), AL_ROLLOFF_FACTOR (float), AL_CONE_OUTER_GAIN (float), AL_CONE_INNER_ANGLE (float), AL_CONE_OUTER_ANGLE (float), AL_REFERENCE_DISTANCE (float), AL_POSITION (array(float,float,float)), AL_VELOCITY (array(float,float,float)), AL_DIRECTION (array(float,float,float)).

); // Return Values
// Returns the type associated with the property being retrieved or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-get.php
// ========== OPENAL_SOURCE_GET - END

// SYNTAX:
// mixed openal_source_get(resource $source, int $property)

return $return_openal_source_get; // mixed
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_GET
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_PAUSE
// ============================== PUBLIC
// ============================== ABOUT
// Pause the source.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_pause() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_pause($source)
{
$return_openal_source_pause = false;

// ========== OPENAL_SOURCE_PAUSE - BEGIN
// ===== ABOUT
// Pause the source
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_pause(resource $source): bool
// ===== CODE
$return_openal_source_pause = openal_source_pause(

$source // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-pause.php
// ========== OPENAL_SOURCE_PAUSE - END

// SYNTAX:
// bool openal_source_pause(resource $source)

return $return_openal_source_pause; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_PAUSE
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_PLAY
// ============================== PUBLIC
// ============================== ABOUT
// Start playing the source.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_play() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_play($source)
{
$return_openal_source_play = false;

// ========== OPENAL_SOURCE_PLAY - BEGIN
// ===== ABOUT
// Start playing the source
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_play(resource $source): bool
// ===== CODE
$return_openal_source_play = openal_source_play(

$source // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-play.php
// ========== OPENAL_SOURCE_PLAY - END

// SYNTAX:
// bool openal_source_play(resource $source)

return $return_openal_source_play; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_PLAY
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_REWIND
// ============================== PUBLIC
// ============================== ABOUT
// Rewind the source.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_rewind() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_rewind($source)
{
$return_openal_source_rewind = false;

// ========== OPENAL_SOURCE_REWIND - BEGIN
// ===== ABOUT
// Rewind the source
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_rewind(resource $source): bool
// ===== CODE
$return_openal_source_rewind = openal_source_rewind(

$source // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-rewind.php
// ========== OPENAL_SOURCE_REWIND - END

// SYNTAX:
// bool openal_source_rewind(resource $source)

return $return_openal_source_rewind; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_REWIND
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_SET
// ============================== PUBLIC
// ============================== ABOUT
// Set source property.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_set() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_set($source, $property, $setting)
{
$return_openal_source_set = false;

// ========== OPENAL_SOURCE_SET - BEGIN
// ===== ABOUT
// Set source property
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_set(resource $source, int $property, mixed $setting): bool
// ===== CODE
$return_openal_source_set = openal_source_set(

$source, // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

$property, // int property - Property to set, one of: AL_BUFFER (OpenAL(Source)), AL_LOOPING (bool), AL_SOURCE_RELATIVE (int), AL_SOURCE_STATE (int), AL_PITCH (float), AL_GAIN (float), AL_MIN_GAIN (float), AL_MAX_GAIN (float), AL_MAX_DISTANCE (float), AL_ROLLOFF_FACTOR (float), AL_CONE_OUTER_GAIN (float), AL_CONE_INNER_ANGLE (float), AL_CONE_OUTER_ANGLE (float), AL_REFERENCE_DISTANCE (float), AL_POSITION (array(float,float,float)), AL_VELOCITY (array(float,float,float)), AL_DIRECTION (array(float,float,float)).

$setting // mixed setting - Value to assign to specified property. Refer to the description of property for a description of the value(s) expected.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-set.php
// ========== OPENAL_SOURCE_SET - END

// SYNTAX:
// bool openal_source_set(resource $source, int $property, mixed $setting)

return $return_openal_source_set; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_SET
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_STOP
// ============================== PUBLIC
// ============================== ABOUT
// Stop playing the source.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_source_stop() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_source_stop($source)
{
$return_openal_source_stop = false;

// ========== OPENAL_SOURCE_STOP - BEGIN
// ===== ABOUT
// Stop playing the source
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_source_stop(resource $source): bool
// ===== CODE
$return_openal_source_stop = openal_source_stop(

$source // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-source-stop.php
// ========== OPENAL_SOURCE_STOP - END

// SYNTAX:
// bool openal_source_stop(resource $source)

return $return_openal_source_stop; // bool
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_SOURCE_STOP
// ==============================


// ============================== BEGIN
// PHP_AUDIO_OPENAL_OPENAL_STREAM
// ============================== PUBLIC
// ============================== ABOUT
// Begin streaming on a source.
// ============================== SUPPORT
// PECL_openal_0_1_0
// ============================== USING FUNCTIONS (1)
// openal_stream() - PECL_openal >= PECL_openal_0_1_0
// ============================== CODE
function php_audio_openal_openal_stream($source, $format, $rate)
{
$return_openal_stream = false;

// ========== OPENAL_STREAM - BEGIN
// ===== ABOUT
// Begin streaming on a source
// ===== DESCRIPTION
// ===== SUPPORTED
// PECL_openal >= PECL_openal_0_1_0
// ===== SYNTAX
// openal_stream(resource $source, int $format, int $rate): resource|false
// ===== CODE
$return_openal_stream = openal_stream(

$source, // resource source - An Open AL(Source) resource (previously created by openal_source_create()).

$format, // int format - Format of data, one of: AL_FORMAT_MONO8, AL_FORMAT_MONO16, AL_FORMAT_STEREO8 and AL_FORMAT_STEREO16

$rate // int rate - Frequency of data to stream given in Hz.

); // Return Values
// Returns a stream resource on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-09-18)
// URL: https://www.php.net/manual/en/function.openal-stream.php
// ========== OPENAL_STREAM - END

// SYNTAX:
// resource|false openal_stream(resource $source, int $format, int $rate)

return $return_openal_stream; // resource|false
}
// ============================== END
// PHP_AUDIO_OPENAL_OPENAL_STREAM
// ==============================


// ============================== END
//        PHP_AUDIO_OPENAL        
// ==============================
?>