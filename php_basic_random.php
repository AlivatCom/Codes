<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BASIC_RANDOM - BEGIN
// PHP_BASIC_RANDOM_GETRANDMAX - int php_basic_random_getrandmax()
// PHP_BASIC_RANDOM_LCG_VALUE - float php_basic_random_lcg_value()
// PHP_BASIC_RANDOM_MT_GETRANDMAX - int php_basic_random_mt_getrandmax()
// PHP_BASIC_RANDOM_MT_RAND - int php_basic_random_mt_rand(int $min, int $max)
// PHP_BASIC_RANDOM_MT_SRAND - void php_basic_random_mt_srand(int $seed = 0, int $mode = MT_RAND_MT19937)
// PHP_BASIC_RANDOM_RAND - int php_basic_random_rand(int $min, int $max)
// OFFLINE | PHP_BASIC_RANDOM_RANDOM_BYTES - string php_basic_random_random_bytes(int $length)
// OFFLINE | PHP_BASIC_RANDOM_RANDOM_INT - int php_basic_random_random_int(int $min, int $max)
// PHP_BASIC_RANDOM_SRAND - void php_basic_random_srand(int $seed = 0, int $mode = MT_RAND_MT19937)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER - Random\Randomizer|Random\Engine|string|int|float|Random\IntervalBoundary|array|void _CONSTRUCT, _GETBYTES, _GETBYTESFROMSTRING, _GETFLOAT, _GETINT, _NEXTFLOAT, _NEXTINT, _PICKARRAYKEYS, _SERIALIZE, _SHUFFLEARRAY, _SHUFFLEBYTES, _UNSERIALIZE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINESECURE - string|Random\Engine\Secure _GENERATE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937 - Random\Engine\Mt19937|int|array|string|void _CONSTRUCT, _DEBUGINFO, _GENERATE, _SERIALIZE, _UNSERIALIZE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64 - Random\Engine\PcgOneseq128XslRr64|string|int|null|array|void _CONSTRUCT, _DEBUGINFO, _GENERATE, _JUMP, _SERIALIZE, _UNSERIALIZE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR - Random\Engine\Xoshiro256StarStar|string|int|null|array|void _CONSTRUCT, _DEBUGINFO, _GENERATE, _JUMP, _JUMPLONG, _SERIALIZE, _UNSERIALIZE
// PHP_BASIC_RANDOM - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (9)
// getrandmax() - PHP_4, PHP_5, PHP_7, PHP_8
// lcg_value() - PHP_4, PHP_5, PHP_7, PHP_8
// mt_getrandmax() - PHP_4, PHP_5, PHP_7, PHP_8
// mt_rand() - PHP_4, PHP_5, PHP_7, PHP_8
// mt_srand() - PHP_4, PHP_5, PHP_7, PHP_8
// rand() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | random_bytes() - PHP_7, PHP_8
// OFFLINE | random_int() - PHP_7, PHP_8
// srand() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (5)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER - PHP_8
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINESECURE - PHP_8
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937 - PHP_8
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64 - PHP_8
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR - PHP_8
// ============================== USING DATA_TYPES (13)
// int
// float
// void
// string
// OFFLINE | Random\Randomizer - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\IntervalBoundary - Random\Randomizer
// array
// OFFLINE | Random\Engine\Secure - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Mt19937 - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\PcgOneseq128XslRr64 - PHP_8 >= PHP_8_2_0
// null
// OFFLINE | Random\Engine\Xoshiro256StarStar - PHP_8 >= PHP_8_2_0
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//        PHP_BASIC_RANDOM        
// ============================== ABOUT
// PHP Manual / Function Reference / Other Basic Extensions / Random - Random Number Generators and Functions Related to Randomness
// URL: https://www.php.net/manual/en/book.random.php
// ============================== DESCRIPTION
// RANDOM_NUMBER_GENERATORS_AND_FUNCTIONS_RELATED_TO_RANDOMNESS
// 
// RANDOM_NUMBER_GENERATORS_AND_FUNCTIONS_RELATED_TO_RANDOMNESS - BEGIN
// Random Number Generators and Functions Related to Randomness
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// RANDOM_FUNCTIONS
// THE_RANDOM_RANDOMIZER_CLASS
// THE_RANDOM_ENGINE_INTERFACE
// THE_RANDOM_CRYPTOSAFEENGINE_INTERFACE
// THE_RANDOM_ENGINE_SECURE_CLASS
// THE_RANDOM_ENGINE_MT19937_CLASS
// THE_RANDOM_ENGINE_PCGONESEQ128XSLRR64_CLASS
// THE_RANDOM_ENGINE_XOSHIRO256STARSTAR_CLASS
// THE_RANDOM_RANDOMERROR_CLASS
// THE_RANDOM_BROKENRANDOMENGINEERROR_CLASS
// THE_RANDOM_RANDOMEXCEPTION_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/intro.random.php
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
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are always available as part of the PHP core.
// 
// MT_RAND_MT19937 (int) - Indicates that the correct > Mt19937 (Mersenne Twister) implementation will be used by the algorithm, when creating a Random\Engine\Mt19937 instance using Random\Engine\Mt19937::__construct() or seeding the global Mersenne Twister with mt_srand().
// MT_RAND_PHP (int)     - Indicates that an incorrect Mersenne Twister implementation will be used by the algorithm, when creating a Random\Engine\Mt19937 instance using Random\Engine\Mt19937::__construct() or seeding the global Mersenne Twister with mt_srand(). The incorrect implementation is available for backwards compatibility with mt_srand() prior to PHP 7.1.0.
// Warning: This feature has been DEPRECATED as of PHP 8.3.0. Relying on this feature is highly discouraged.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// [example]
// Example #1 Random Example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/random.examples.php
// EXAMPLES - END
// 
// RANDOM_FUNCTIONS - BEGIN
// Random Functions
// 
// Table of Contents
// * getrandmax    - Show largest possible random value
// * lcg_value     - Combined linear congruential generator
// * mt_getrandmax - Show largest possible random value
// * mt_rand       - Generate a random value via the Mersenne Twister Random Number Generator
// * mt_srand      - Seeds the Mersenne Twister Random Number Generator
// * rand          - Generate a random integer
// * random_bytes  - Get cryptographically secure random bytes
// * random_int    - Get a cryptographically secure, uniformly selected integer
// * srand         - Seed the random number generator
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/ref.random.php
// RANDOM_FUNCTIONS - END
// 
// THE_RANDOM_RANDOMIZER_CLASS - BEGIN
// The Random\Randomizer class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// Provides a high-level API to the randomness provided by an Random\Engine.
// 
// Class synopsis
// [code]
//   final class Random\Randomizer {
//
//   /* Properties */
//    public readonly Random\Engine $engine;
//
//    /* Methods */
//    public __construct(?Random\Engine $engine = null)
//    public getBytes(int $length): string
//    public getBytesFromString(string $string, int $length): string
//    public getFloat(float $min, float $max, Random\IntervalBoundary $boundary = Random\IntervalBoundary::ClosedOpen): float
//    public getInt(int $min, int $max): int
//    public nextFloat(): float
//    public nextInt(): int
//    public pickArrayKeys(array $array, int $num): array
//    public __serialize(): array
//    public shuffleArray(array $array): array
//    public shuffleBytes(string $bytes): string
//    public __unserialize(array $data): void
// }
// [/code]
// 
// Properties
// engine - The low-level source of randomness for the Random\Randomizer’s methods.
// 
// Table of Contents
// * Random\Randomizer::__construct        - Constructs a new Randomizer
// * Random\Randomizer::getBytes           - Get random bytes
// * Random\Randomizer::getBytesFromString - Get random bytes from a source string
// * Random\Randomizer::getFloat           - Get a uniformly selected float
// * Random\Randomizer::getInt             - Get a uniformly selected integer
// * Random\Randomizer::nextFloat          - Get a float between 0 and 1
// * Random\Randomizer::nextInt            - Get a positive integer
// * Random\Randomizer::pickArrayKeys      - Select random array keys
// * Random\Randomizer::__serialize        - Serializes the Randomizer object
// * Random\Randomizer::shuffleArray       - Get a permutation of an array
// * Random\Randomizer::shuffleBytes       - Get a byte-wise permutation of a string
// * Random\Randomizer::__unserialize      - Deserializes the data parameter into a Randomizer object
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-randomizer.php
// THE_RANDOM_RANDOMIZER_CLASS - END
// 
// THE_RANDOM_ENGINE_INTERFACE - BEGIN
// The Random\Engine interface
// 
// RANDOM_ENGINE_GENERATE
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// A Random\Engine provides a low-level source of randomness by returning random bytes that are consumed by high-level APIs to perform their operations. The Random\Engine interface allows swapping out the algorithm used to generate randomness, because each algorithm makes different tradeoffs to fit specific use-cases. Some algorithms are very fast, but generate lower-quality randomness, whereas other algorithms are slower, but generate better randomness, up to cryptographically secure randomness as provided by the Random\Engine\Secure engine.
// PHP provides several Random\Engines out of the box to accomodate different use-cases. The Random\Engine\Secure engine that is backed by a CSPRNG is the recommended safe default choice, unless the application requires either reproducible sequences or very high performance.
// 
// Interface synopsis
// [code]
// interface Random\Engine {
//
//    /* Methods */
//    public generate(): string
// }
// [/code]
// 
// Table of Contents
// * Random\Engine::generate - Generates randomness
// 
// RANDOM_ENGINE_GENERATE - BEGIN
// Random\Engine::generate
// 
// ===== ABOUT
// Generates randomness
// ===== DESCRIPTION
// Returns randomness and advances the algorithm’s state by one step.
// The randomness is represented by a binary string containing random bytes. This representation allows to unambiguously interpret the random bits generated by the algorithm, for example to accomodate different output sizes used by different algorithms.
// Algorithms that natively operate on integer values should return the integer in little-endian byte order, for example by leveraging the pack() function with the P format code. The high-level interface provided by the Random\Randomizer will interpret the returned random bytes as unsigned little-endian integers if a numeric representation is required.
// It is strongly recommended that each bit of the returned string is uniformly and independently selected, as some applications require randomness based on the bit-level to work correctly. For example linear congruential generators often generate lower-quality randomness for the less significant bits of the return integer value and thus would not be appropriate for applications that require bit-level randomness.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine::generate(): string
// ===== CODE
// Parameters
// This function has no parameters.
// 
// Return Values
// A non-empty string containing random bytes.
// Note: The Random\Randomizer works with unsigned 64 bit integers internally. If the returned string contains more than 64 bit (8 byte) of randomness the exceeding bytes will be ignored. Other applications may be able to process more than 64 bit at once.
// 
// Errors/Exceptions
// * If generating randomness fails, a Random\RandomException should be thrown. Any other Exception thrown during generation should be caught and wrapped into a Random\RandomException.
// * If the returned string is empty, a Random\BrokenRandomEngineError will be thrown by the Random\Randomizer.
// * If the implemented algorithm is severely biased, a Random\BrokenRandomEngineError may be thrown by the Random\Randomizer to prevent infinite loops if rejection sampling is required to return unbiased results.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine::generate() example
// [php]
// //
// // Implements a Linear Congruential Generator with modulus 65536,
// // multiplier 61 and increment 17 returning an 8 Bit integer.
// //
// // Note: This engine is suitable for demonstration purposes only.
// //       Linear Congruential Generators generally generate low
// //       quality randomness and this specific implementation has
// //       a very short 16 Bit period that is unsuitable for
// //       almost any real-world use case.
// //
// final class LinearCongruentialGenerator implements \Random\Engine
// {
//     private int $state;
// 
//     public function __construct(?int $seed = null)
//     {
//         if ($seed === null) {
//             $seed = random_int(0, 0xffff);
//         }
// 
//         $this->state = $seed & 0xffff;
//     }
// 
//     public function generate(): string
//     {
//         $this->state = (61 * $this->state + 17) & 0xffff;
// 
//         return pack('C', $this->state >> 8);
//     }
// }
// 
// $r = new \Random\Randomizer(
//     new LinearCongruentialGenerator(seed: 1)
// );
// 
// echo "Lucky Number: ", $r->getInt(0, 99), "\n";
// [/php]
// The above example will output:
// [result]
// Lucky Number: 4
// [/result]
// [/example]
// [/examples]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine.generate.php
// RANDOM_ENGINE_GENERATE - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-engine.php
// THE_RANDOM_ENGINE_INTERFACE - END
// 
// THE_RANDOM_CRYPTOSAFEENGINE_INTERFACE - BEGIN
// The Random\CryptoSafeEngine interface
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// A marker interface indicating that the Random\Engine returns cryptographically secure randomness.
// 
// Interface synopsis
// [code]
// interface Random\CryptoSafeEngine extends Random\Engine {
//
//    /* Inherited methods */
//    public Random\Engine::generate(): string
// }
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-cryptosafeengine.php
// THE_RANDOM_CRYPTOSAFEENGINE_INTERFACE - END
// 
// THE_RANDOM_ENGINE_SECURE_CLASS - BEGIN
// The Random\Engine\Secure class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// Generates cryptographically secure randomness using the operating system’s CSPRNG.
// The randomness generated by this Random\Engine is suitable for all applications, including the generation of long-term secrets, such as encryption keys.
// The Random\Engine\Secure engine is the recommended safe default choice, unless the application requires either reproducible sequences or very high performance.
// 
// Class synopsis
// [code]
// final class Random\Engine\Secure implements Random\CryptoSafeEngine {
//
//    /* Methods */
//    public generate(): string
// }
// [/code]
// 
// Table of Contents
// * Random\Engine\Secure::generate - Generate cryptographically secure randomness
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-engine-secure.php
// THE_RANDOM_ENGINE_SECURE_CLASS - END
// 
// THE_RANDOM_ENGINE_MT19937_CLASS - BEGIN
// The Random\Engine\Mt19937 class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// Implements the > Mt19937 (“Mersenne Twister”) algorithm.
// 
// Class synopsis
// [code]
// final class Random\Engine\Mt19937 implements Random\Engine {
//
//    /* Methods */
//    public __construct(?int $seed = null, int $mode = MT_RAND_MT19937)
//    public __debugInfo(): array
//    public generate(): string
//    public __serialize(): array
//    public __unserialize(array $data): void
// }
// [/code]
// 
// Table of Contents
// * Random\Engine\Mt19937::__construct   - Constructs a new Mt19937 engine
// * Random\Engine\Mt19937::__debugInfo   - Returns the internal state of the engine
// * Random\Engine\Mt19937::generate      - Generate 32 bits of randomness
// * Random\Engine\Mt19937::__serialize   - Serializes the Mt19937 object
// * Random\Engine\Mt19937::__unserialize - Deserializes the data parameter into a Mt19937 object
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-engine-mt19937.php
// THE_RANDOM_ENGINE_MT19937_CLASS - END
// 
// THE_RANDOM_ENGINE_PCGONESEQ128XSLRR64_CLASS - BEGIN
// The Random\Engine\PcgOneseq128XslRr64 class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// Implements a > Permuted congruential generator (PCG) with 128 bits of state, XSL and RR output transformations, and 64 bits of output.
// 
// Class synopsis
// [code]
// final class Random\Engine\PcgOneseq128XslRr64 implements Random\Engine {
//
//    /* Methods */
//    public __construct(string|int|null $seed = null)
//    public __debugInfo(): array
//    public generate(): string
//    public jump(int $advance): void
//    public __serialize(): array
//    public __unserialize(array $data): void
// }
// [/code]
// 
// Table of Contents
// * Random\Engine\PcgOneseq128XslRr64::__construct   - Constructs a new PCG Oneseq 128 XSL RR 64 engine
// * Random\Engine\PcgOneseq128XslRr64::__debugInfo   - Returns the internal state of the engine
// * Random\Engine\PcgOneseq128XslRr64::generate      - Generate 64 bits of randomness
// * Random\Engine\PcgOneseq128XslRr64::jump          - Efficiently move the engine ahead multiple steps
// * Random\Engine\PcgOneseq128XslRr64::__serialize   - Serializes the PcgOneseq128XslRr64 object
// * Random\Engine\PcgOneseq128XslRr64::__unserialize - Deserializes the data parameter into a PcgOneseq128XslRr64 object
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-engine-pcgoneseq128xslrr64.php
// THE_RANDOM_ENGINE_PCGONESEQ128XSLRR64_CLASS - END
// 
// THE_RANDOM_ENGINE_XOSHIRO256STARSTAR_CLASS - BEGIN
// The Random\Engine\Xoshiro256StarStar class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// Implements the > xoshiro256** algorithm.
// 
// Class synopsis
// [code]
// final class Random\Engine\Xoshiro256StarStar implements Random\Engine {
//
//    /* Methods */
//    public __construct(string|int|null $seed = null)
//    public __debugInfo(): array
//    public generate(): string
//    public jump(): void
//    public jumpLong(): void
//    public __serialize(): array
//    public __unserialize(array $data): void
// }
// [/code]
// 
// Table of Contents
// * Random\Engine\Xoshiro256StarStar::__construct   - Constructs a new xoshiro256** engine
// * Random\Engine\Xoshiro256StarStar::__debugInfo   - Returns the internal state of the engine
// * Random\Engine\Xoshiro256StarStar::generate      - Generate 64 bits of randomness
// * Random\Engine\Xoshiro256StarStar::jump          - Efficiently move the engine ahead by 2^128 steps
// * Random\Engine\Xoshiro256StarStar::jumpLong      - Efficiently move the engine ahead by 2^192 steps
// * Random\Engine\Xoshiro256StarStar::__serialize   - Serializes the Xoshiro256StarStar object
// * Random\Engine\Xoshiro256StarStar::__unserialize - Deserializes the data parameter into a Xoshiro256StarStar object
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-engine-xoshiro256starstar.php
// THE_RANDOM_ENGINE_XOSHIRO256STARSTAR_CLASS - END
// 
// THE_RANDOM_RANDOMERROR_CLASS - BEGIN
// The Random\RandomError class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// The base class for Errors that occur during generation or use of randomness.
// 
// Class synopsis
// [code]
// class Random\RandomError extends Error {
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
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-randomerror.php
// THE_RANDOM_RANDOMERROR_CLASS - END
// 
// THE_RANDOM_BROKENRANDOMENGINEERROR_CLASS - BEGIN
// The Random\BrokenRandomEngineError class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// Indicates that the used Random\Engine is broken, e.g. because it is severely biased.
// 
// Class synopsis
// [code]
// class Random\BrokenRandomEngineError extends Random\RandomError {
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
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-brokenrandomengineerror.php
// THE_RANDOM_BROKENRANDOMENGINEERROR_CLASS - END
// 
// THE_RANDOM_RANDOMEXCEPTION_CLASS - BEGIN
// The Random\RandomException class
// 
// PHP_8 >= PHP_8_2_0
// 
// Introduction
// The base class for Exceptions that occur during generation or use of randomness.
// 
// Class synopsis
// [code]
// class Random\RandomException extends Exception {
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
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/class.random-randomexception.php
// THE_RANDOM_RANDOMEXCEPTION_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-21)
// URL: https://www.php.net/manual/en/book.random.php
// RANDOM_NUMBER_GENERATORS_AND_FUNCTIONS_RELATED_TO_RANDOMNESS - END
// ==============================


// ============================== BEGIN
//  PHP_BASIC_RANDOM_GETRANDMAX  
// ============================== PUBLIC
// ============================== ABOUT
// Show largest possible random value.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getrandmax() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_random_getrandmax()
{
$return_getrandmax = 0;

// ========== GETRANDMAX - BEGIN
// ===== ABOUT
// Show largest possible random value
// ===== DESCRIPTION
// Returns the maximum value that can be returned by a call to rand().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getrandmax(): int
// ===== CODE
$return_getrandmax = getrandmax(

// This function has no parameters.

); // Return Values
// The largest possible random value returned by rand()
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.getrandmax.php
// ========== GETRANDMAX - END

// SYNTAX:
// int getrandmax()

return $return_getrandmax; // int
}
// ============================== END
//  PHP_BASIC_RANDOM_GETRANDMAX  
// ==============================


// ============================== BEGIN
//   PHP_BASIC_RANDOM_LCG_VALUE   
// ============================== PUBLIC
// ============================== ABOUT
// Combined linear congruential generator.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// lcg_value() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_random_lcg_value()
{
$return_lcg_value = 0;

// ========== LCG_VALUE - BEGIN
// ===== ABOUT
// Combined linear congruential generator
// ===== DESCRIPTION
// lcg_value() returns a pseudo random number in the range of (0, 1). The function combines two CGs with periods of 2^31 - 85 and 2^31 - 249. The period of this function is equal to the product of both primes.
//  Caution: This function does not generate cryptographically secure values, and must not be used for cryptographic purposes, or purposes that require returned values to be unguessable.
//  If cryptographically secure randomness is required, the Random\Randomizer may be used with the Random\Engine\Secure engine. For simple use cases, the random_int() and random_bytes() functions provide a convenient and secure API that is backed by the operating system’s CSPRNG.
//  Caution: Scaling the return value to a different interval using multiplication or addition (a so-called affine transformation) might result in a bias in the resulting value as floats are not equally dense across the number line. As not all values can be exactly represented by a float, the result of the affine transformation might also result in values outside of the requested interval.
//  Use Random\Randomizer::getFloat() to generate a random float within an arbitrary interval. Use Random\Randomizer::getInt() to generate a random integer within an arbitrary interval.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// lcg_value(): float
// ===== CODE
$return_lcg_value = lcg_value(

// This function has no parameters.

); // Return Values
// A pseudo random float value between 0.0 and 1.0, inclusive.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.lcg-value.php
// ========== LCG_VALUE - END

// SYNTAX:
// float lcg_value()

return $return_lcg_value; // float
}
// ============================== END
//   PHP_BASIC_RANDOM_LCG_VALUE   
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_MT_GETRANDMAX
// ============================== PUBLIC
// ============================== ABOUT
// Show largest possible random value.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// mt_getrandmax() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_random_mt_getrandmax()
{
$return_mt_getrandmax = 0;

// ========== MT_GETRANDMAX - BEGIN
// ===== ABOUT
// Show largest possible random value
// ===== DESCRIPTION
// Returns the maximum value that can be returned by a call to mt_rand().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// mt_getrandmax(): int
// ===== CODE
$return_mt_getrandmax = mt_getrandmax(

// This function has no parameters.

); // Return Values
// Returns the maximum random value returned by a call to mt_rand() without arguments, which is the maximum value that can be used for its max parameter without the result being scaled up (and therefore less random).
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mt-getrandmax.php
// ========== MT_GETRANDMAX - END

// SYNTAX:
// int mt_getrandmax()

return $return_mt_getrandmax; // int
}
// ============================== END
// PHP_BASIC_RANDOM_MT_GETRANDMAX
// ==============================


// ============================== BEGIN
//    PHP_BASIC_RANDOM_MT_RAND    
// ============================== PUBLIC
// ============================== ABOUT
// Generate a random value via the Mersenne Twister Random Number Generator.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// mt_rand() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_random_mt_rand($min, $max)
{
$return_mt_rand = 0;

// ========== MT_RAND - BEGIN
// ===== ABOUT
// Generate a random value via the Mersenne Twister Random Number Generator
// ===== DESCRIPTION
// Many random number generators of older libcs have dubious or unknown characteristics and are slow. The mt_rand() function is a drop-in replacement for the older rand(). It uses a random number generator with known characteristics using the > Mersenne Twister, which will produce random numbers four times faster than what the average libc rand() provides.
// If called without the optional min, max arguments mt_rand() returns a pseudo-random value between 0 and mt_getrandmax(). If you want a random number between 5 and 15 (inclusive), for example, use mt_rand(5, 15).
//  Caution: This function does not generate cryptographically secure values, and must not be used for cryptographic purposes, or purposes that require returned values to be unguessable.
//  If cryptographically secure randomness is required, the Random\Randomizer may be used with the Random\Engine\Secure engine. For simple use cases, the random_int() and random_bytes() functions provide a convenient and secure API that is backed by the operating system’s CSPRNG.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// mt_rand(): int
// mt_rand(int $min, int $max): int
// ===== CODE
$return_mt_rand = mt_rand(

$min, // int min - Optional lowest value to be returned (default: 0)

$max // int max - Optional highest value to be returned (default: mt_getrandmax())

); // Return Values
// A random integer value between min (or 0) and max (or mt_getrandmax(), inclusive), or false if max is less than min.
// 
// Changelog
// Version - Description
// 7.2.0   - mt_rand() has received a bug fix for a modulo bias bug. This means that sequences generated with a specific seed may differ from PHP 7.1 on 64-bit machines.
// 7.1.0   - rand() has been made an alias of mt_rand().
// 7.1.0   - mt_rand() has been updated to use the fixed, correct, version of the Mersenne Twister algorithm. To fall back to the old behaviour, use mt_srand() with MT_RAND_PHP as the second parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 mt_rand() example
// [php]
// echo mt_rand(), "\n";
// echo mt_rand(), "\n";
// 
// echo mt_rand(5, 15), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 1604716014
// 1478613278
// 6
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Warning: min max range must be within the range mt_getrandmax(). i.e. (max - min) <= mt_getrandmax() Otherwise, mt_rand() may return poorer random numbers than it should.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.mt-rand.php
// ========== MT_RAND - END

// SYNTAX:
// int mt_rand(int $min, int $max)

return $return_mt_rand; // int
}
// ============================== END
//    PHP_BASIC_RANDOM_MT_RAND    
// ==============================


// ============================== BEGIN
//   PHP_BASIC_RANDOM_MT_SRAND   
// ============================== PUBLIC
// ============================== ABOUT
// Seeds the Mersenne Twister Random Number Generator.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// mt_srand() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// MT_RAND_MT19937 - mt_srand()
// ============================== CODE
function php_basic_random_mt_srand($seed = 0, $mode = MT_RAND_MT19937)
{

// ========== MT_SRAND - BEGIN
// ===== ABOUT
// Seeds the Mersenne Twister Random Number Generator
// ===== DESCRIPTION
// Seeds the random number generator with seed or with a random value if no seed is given.
// Note: There is no need to seed the random number generator with srand() or mt_srand() as this is done automatically.
//  Caution:
//  Because the Mt19937 (“Mersenne Twister”) engine accepts only a single 32 bit integer as the seed, the number of possible random sequences is limited to just 232 (i.e. 4,294,967,296), despite Mt19937’s huge period of 219937-1.
//  When relying on either implicit or explicit random seeding, duplications will appear much earlier. Duplicated seeds are expected with 50% probability after less than 80,000 randomly generated seeds according to the birthday problem. A 10% probability of a duplicated seed happens after randomly generating roughly 30,000 seeds.
//  This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with more than a negligible probability. If reproducible seeding is required, both the Random\Engine\Xoshiro256StarStar and Random\Engine\PcgOneseq128XslRr64 engines support much larger seeds that are unlikely to collide randomly. If reproducibility is not required, the Random\Engine\Secure engine provides cryptographically secure randomness.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// mt_srand(int $seed = 0, int $mode = MT_RAND_MT19937): void
// ===== CODE
mt_srand(

$seed, // int seed - An arbitrary int seed value.

$mode // int mode - Use one of the following constants to specify the implementation of the algorithm to use.
// * MT_RAND_MT19937 - The correct Mt19937 implementation, available as of PHP 7.1.0.
// * MT_RAND_PHP     - Uses an incorrect Mersenne Twister implementation which was used as the default up till PHP 7.1.0. This mode is available for backward compatibility.
// Warning: This feature has been DEPRECATED as of PHP 8.3.0. Relying on this feature is highly discouraged.

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 7.1.0   - srand() has been made an alias of mt_srand().
// 7.1.0   - mt_rand() has been updated to use the fixed, correct, version of the Mersenne Twister algorithm. To fall back to the old behaviour, use mt_srand() with MT_RAND_PHP as the second parameter.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.mt-srand.php
// ========== MT_SRAND - END

// SYNTAX:
// void mt_srand(int $seed = 0, int $mode = MT_RAND_MT19937)

// Return: void
}
// ============================== END
//   PHP_BASIC_RANDOM_MT_SRAND   
// ==============================


// ============================== BEGIN
//     PHP_BASIC_RANDOM_RAND     
// ============================== PUBLIC
// ============================== ABOUT
// Generate a random integer.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// rand() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_basic_random_rand($min, $max)
{
$return_rand = 0;

// ========== RAND - BEGIN
// ===== ABOUT
// Generate a random integer
// ===== DESCRIPTION
// If called without the optional min, max arguments rand() returns a pseudo-random integer between 0 and getrandmax(). If you want a random number between 5 and 15 (inclusive), for example, use rand(5, 15).
//  Caution: This function does not generate cryptographically secure values, and must not be used for cryptographic purposes, or purposes that require returned values to be unguessable.
//  If cryptographically secure randomness is required, the Random\Randomizer may be used with the Random\Engine\Secure engine. For simple use cases, the random_int() and random_bytes() functions provide a convenient and secure API that is backed by the operating system’s CSPRNG.
// Note: On some platforms (such as Windows), getrandmax() is only 32767. If you require a range larger than 32767, specifying min and max will allow you to create a range larger than this, or consider using mt_rand() instead.
// Note: As of PHP 7.1.0, rand() uses the same random number generator as mt_rand(). To preserve backwards compatibility rand() allows max to be smaller than min as opposed to returning false as mt_rand().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// rand(): int
// rand(int $min, int $max): int
// ===== CODE
$return_rand = rand(

$min, // int min - The lowest value to return (default: 0)

$max // int max - The highest value to return (default: getrandmax())

); // Return Values
// A pseudo random value between min (or 0) and max (or getrandmax(), inclusive).
// 
// Changelog
// Version - Description
// 7.2.0   - rand() has received a bug fix for a modulo bias bug. This means that sequences generated with a specific seed may differ from PHP 7.1 on 64-bit machines.
// 7.1.0   - rand() has been made an alias of mt_rand().
// 
// [examples]
// Examples
// [example]
// Example #1 rand() example
// [php]
// echo rand(), "\n";
// echo rand(), "\n";
// 
// echo rand(5, 15), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 7771
// 22264
// 11
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Warning: min max range must be within the range getrandmax(). i.e. (max - min) <= getrandmax() Otherwise, rand() may return poor-quality random numbers.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.rand.php
// ========== RAND - END

// SYNTAX:
// int rand(int $min, int $max)

return $return_rand; // int
}
// ============================== END
//     PHP_BASIC_RANDOM_RAND     
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOM_BYTES 
// ============================== OFFLINE
// ============================== ABOUT
// Get cryptographically secure random bytes.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// random_bytes() - PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_random_random_bytes($length)
{
$return_random_bytes = null;

// ========== RANDOM_BYTES - BEGIN
// ===== ABOUT
// Get cryptographically secure random bytes
// ===== DESCRIPTION
// Generates a string containing uniformly selected random bytes with the requested length.
// As the returned bytes are selected completely randomly, the resulting string is likely to contain unprintable characters or invalid UTF-8 sequences. It may be necessary to encode it before transmission or display.
// The randomness generated by this function is suitable for all applications, including the generation of long-term secrets, such as encryption keys.
// The sources of randomness in the order of priority are as follows:
// * Linux: > getrandom(), /dev/urandom
// * FreeBSD >= 12 (PHP >= 7.3): > getrandom(), /dev/urandom
// * Windows (PHP >= 7.2): > CNG-API
// Windows: > CryptGenRandom
// * macOS (PHP >= 8.2; >= 8.1.9; >= 8.0.22 if
// CCRandomGenerateBytes is available at compile time): CCRandomGenerateBytes()
// macOS (PHP >= 8.1; >= 8.0.2): arc4random_buf(), /dev/urandom
// * NetBSD >= 7 (PHP >= 7.1; >= 7.0.1): arc4random_buf(), /dev/urandom
// * OpenBSD >= 5.5 (PHP >= 7.1; >= 7.0.1): arc4random_buf(), /dev/urandom
// * DragonflyBSD (PHP >= 8.1): > getrandom(), /dev/urandom
// * Solaris (PHP >= 8.1): > getrandom(), /dev/urandom
// * Any combination of operating system and PHP version not previously mentioned: /dev/urandom
// * If none of the sources are available or they all fail to generate randomness, then a Random\RandomException will be thrown.
// Note: Although this function was added to PHP in PHP 7.0, a > userland implementation is available for PHP 5.2 to 5.6, inclusive.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// random_bytes(int $length): string
// ===== CODE
$return_random_bytes = random_bytes(

$length // int length - The length of the random string that should be returned in bytes; must be 1 or greater.

); // Return Values
// A string containing the requested number of cryptographically secure random bytes.
// 
// Errors/Exceptions
// * If an appropriate source of randomness cannot be found, a Random\RandomException will be thrown.
// * If the value of length is less than 1, a ValueError will be thrown.
// 
// Changelog
// Version - Description
// 8.2.0   - In case of a CSPRNG failure, this function will now throw a Random\RandomException. Previously a plain Exception was thrown.
// 
// [examples]
// Examples
// [example]
// Example #1 random_bytes() example
// [php]
// $bytes = random_bytes(5);
// var_dump(bin2hex($bytes));
// [/php]
// The above example will output something similar to:
// [result]
// string(10) "385e33f741"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.random-bytes.php
// ========== RANDOM_BYTES - END

// SYNTAX:
// string random_bytes(int $length)

return $return_random_bytes; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOM_BYTES 
// ==============================


// ============================== BEGIN
//  PHP_BASIC_RANDOM_RANDOM_INT  
// ============================== OFFLINE
// ============================== ABOUT
// Get a cryptographically secure, uniformly selected integer.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING FUNCTIONS (1)
// random_int() - PHP_7, PHP_8
// ============================== CODE
/*
function php_basic_random_random_int($min, $max)
{
$return_random_int = 0;

// ========== RANDOM_INT - BEGIN
// ===== ABOUT
// Get a cryptographically secure, uniformly selected integer
// ===== DESCRIPTION
// Generates a uniformly selected integer between the given minimum and maximum.
// The randomness generated by this function is suitable for all applications, including the generation of long-term secrets, such as encryption keys.
// The sources of randomness in the order of priority are as follows:
// * Linux: > getrandom(), /dev/urandom
// * FreeBSD >= 12 (PHP >= 7.3): > getrandom(), /dev/urandom
// * Windows (PHP >= 7.2): > CNG-API
// Windows: > CryptGenRandom
// * macOS (PHP >= 8.2; >= 8.1.9; >= 8.0.22 if
// CCRandomGenerateBytes is available at compile time): CCRandomGenerateBytes()
// macOS (PHP >= 8.1; >= 8.0.2): arc4random_buf(), /dev/urandom
// * NetBSD >= 7 (PHP >= 7.1; >= 7.0.1): arc4random_buf(), /dev/urandom
// * OpenBSD >= 5.5 (PHP >= 7.1; >= 7.0.1): arc4random_buf(), /dev/urandom
// * DragonflyBSD (PHP >= 8.1): > getrandom(), /dev/urandom
// * Solaris (PHP >= 8.1): > getrandom(), /dev/urandom
// * Any combination of operating system and PHP version not previously mentioned: /dev/urandom
// * If none of the sources are available or they all fail to generate randomness, then a Random\RandomException will be thrown.
// Note: Although this function was added to PHP in PHP 7.0, a > userland implementation is available for PHP 5.2 to 5.6, inclusive.
// ===== SUPPORTED
// PHP_7, PHP_8
// ===== SYNTAX
// random_int(int $min, int $max): int
// ===== CODE
$return_random_int = random_int(

$min, // int min - The lowest value to be returned.

$max // int max - The highest value to be returned.

); // Return Values
// A cryptographically secure, uniformly selected integer from the closed interval [min, max]. Both min and max are possible return values.
// 
// Errors/Exceptions
// * If an appropriate source of randomness cannot be found, a Random\RandomException will be thrown.
// * If max is less than min, a ValueError will be thrown.
// 
// Changelog
// Version - Description
// 8.2.0   - In case of a CSPRNG failure, this function will now throw a Random\RandomException. Previously a plain Exception was thrown.
// 
// [examples]
// Examples
// [example]
// Example #1 random_int() example
// [php]
// var_dump(random_int(100, 999));
// var_dump(random_int(-1000, 0));
// [/php]
// The above example will output something similar to:
// [result]
// int(248)
// int(-898)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/function.random-int.php
// ========== RANDOM_INT - END

// SYNTAX:
// int random_int(int $min, int $max)

return $return_random_int; // int
}
*/
// ============================== END
//  PHP_BASIC_RANDOM_RANDOM_INT  
// ==============================


// ============================== BEGIN
//     PHP_BASIC_RANDOM_SRAND     
// ============================== PUBLIC
// ============================== ABOUT
// Seed the random number generator.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// srand() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// MT_RAND_MT19937 - srand()
// ============================== CODE
function php_basic_random_srand($seed = 0, $mode = MT_RAND_MT19937)
{

// ========== SRAND - BEGIN
// ===== ABOUT
// Seed the random number generator
// ===== DESCRIPTION
// Seeds the random number generator with seed or with a random value if seed is 0.
// Note: There is no need to seed the random number generator with srand() or mt_srand() as this is done automatically.
//  Caution:
//  Because the Mt19937 (“Mersenne Twister”) engine accepts only a single 32 bit integer as the seed, the number of possible random sequences is limited to just 232 (i.e. 4,294,967,296), despite Mt19937’s huge period of 219937-1.
//  When relying on either implicit or explicit random seeding, duplications will appear much earlier. Duplicated seeds are expected with 50% probability after less than 80,000 randomly generated seeds according to the birthday problem. A 10% probability of a duplicated seed happens after randomly generating roughly 30,000 seeds.
//  This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with more than a negligible probability. If reproducible seeding is required, both the Random\Engine\Xoshiro256StarStar and Random\Engine\PcgOneseq128XslRr64 engines support much larger seeds that are unlikely to collide randomly. If reproducibility is not required, the Random\Engine\Secure engine provides cryptographically secure randomness.
// Note: As of PHP 7.1.0, srand() has been made an alias of mt_srand().
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// srand(int $seed = 0, int $mode = MT_RAND_MT19937): void
// ===== CODE
srand(

$seed, // int seed - An arbitrary int seed value.

$mode // int $mode

); // Return Values
// No value is returned.
// 
// Changelog
// Version - Description
// 7.1.0   - srand() has been made an alias of mt_srand().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.srand.php
// ========== SRAND - END

// SYNTAX:
// void srand(int $seed = 0, int $mode = MT_RAND_MT19937)

// Return: void
}
// ============================== END
//     PHP_BASIC_RANDOM_SRAND     
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_CONSTRUCT - Random\Randomizer php_basic_random_randomrandomizer_construct(Random\Engine $engine = null)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETBYTES - string php_basic_random_randomrandomizer_getbytes(Random\Randomizer $randomrandomizer, int $length)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETBYTESFROMSTRING - string php_basic_random_randomrandomizer_getbytesfromstring(Random\Randomizer $randomrandomizer, string $string, int $length)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETFLOAT - float php_basic_random_randomrandomizer_getfloat(Random\Randomizer $randomrandomizer, float $min, float $max, Random\IntervalBoundary $boundary = Random\IntervalBoundary::ClosedOpen)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETINT - int php_basic_random_randomrandomizer_getint(Random\Randomizer $randomrandomizer, int $min, int $max)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_NEXTFLOAT - float php_basic_random_randomrandomizer_nextfloat(Random\Randomizer $randomrandomizer)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_NEXTINT - int php_basic_random_randomrandomizer_nextint(Random\Randomizer $randomrandomizer)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_PICKARRAYKEYS - array php_basic_random_randomrandomizer_pickarraykeys(Random\Randomizer $randomrandomizer, array $array, int $num)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SERIALIZE - array php_basic_random_randomrandomizer_serialize(Random\Randomizer $randomrandomizer)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SHUFFLEARRAY - array php_basic_random_randomrandomizer_shufflearray(Random\Randomizer $randomrandomizer, array $array)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SHUFFLEBYTES - string php_basic_random_randomrandomizer_shufflebytes(Random\Randomizer $randomrandomizer, string $bytes)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMRANDOMIZER_UNSERIALIZE - void php_basic_random_randomrandomizer_unserialize(Random\Randomizer $randomrandomizer, array $data)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (12)
// OFFLINE | Random\Randomizer::__construct() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::getBytes() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::getBytesFromString() - PHP_8 >= PHP_8_3_0
// OFFLINE | Random\Randomizer::getFloat() - PHP_8 >= PHP_8_3_0
// OFFLINE | Random\Randomizer::getInt() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::nextFloat() - PHP_8 >= PHP_8_3_0
// OFFLINE | Random\Randomizer::nextInt() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::pickArrayKeys() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::__serialize() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::shuffleArray() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::shuffleBytes() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Randomizer::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== USING DATA_TYPES (8)
// OFFLINE | Random\Randomizer - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine - PHP_8 >= PHP_8_2_0
// string
// int
// float
// OFFLINE | Random\IntervalBoundary - Random\Randomizer
// array
// void
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Constructs a new Randomizer.
// ============================== SUPPORT
// PHP_8 >= PHP_8_2_0
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::__construct() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_construct($engine = null)
{
$return_randomrandomizer_construct = null;

// ========== RANDOMRANDOMIZER_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new Randomizer
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::__construct(?Random\Engine $engine = null)
// ===== CODE
$return_randomrandomizer_construct = new \Random\Randomizer(

$engine // Random\Engine engine - The Random\Engine to use to generate randomness.
// If engine is omitted or null, a new Random\Engine\Secure object will be used.

); // Return
// Random\Randomizer
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::__construct() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.construct.php
// ========== RANDOMRANDOMIZER_CONSTRUCT - END

// SYNTAX:
// Random\Randomizer Random\Randomizer::__construct(Random\Engine $engine = null)

return $return_randomrandomizer_construct; // Random\Randomizer
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETBYTES
// ============================== OFFLINE
// ============================== ABOUT
// Get random bytes.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::getBytes() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_getbytes($randomrandomizer, $length)
{
$return_randomrandomizer_getbytes = null;

// ========== RANDOMRANDOMIZER_GETBYTES - BEGIN
// ===== ABOUT
// Get random bytes
// ===== DESCRIPTION
// Generates a string containing uniformly selected random bytes with the requested length.
// As the returned bytes are selected completely randomly, the resulting string is likely to contain unprintable characters or invalid UTF-8 sequences. It may be necessary to encode it before transmission or display.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::getBytes(int $length): string
// ===== CODE
$return_randomrandomizer_getbytes = $randomrandomizer->getBytes(

$length // int $length - The length of the random string that should be returned in bytes; must be 1 or greater.

); // Return Values
// A string containing the requested number of random bytes.
// 
// Errors/Exceptions
// * If the value of length is less than 1, a ValueError will be thrown.
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::getBytes() example
// [php]
// $r = new \Random\Randomizer();
// 
// echo bin2hex($r->getBytes(8)), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// ebdbe93cd56682c2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.getbytes.php
// ========== RANDOMRANDOMIZER_GETBYTES - END

// SYNTAX:
// string Random\Randomizer::getBytes(int $length)

return $return_randomrandomizer_getbytes; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETBYTES
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETBYTESFROMSTRING
// ============================== OFFLINE
// ============================== ABOUT
// Get random bytes from a source string.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::getBytesFromString() - PHP_8 >= PHP_8_3_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_getbytesfromstring($randomrandomizer, $string, $length)
{
$return_randomrandomizer_getbytesfromstring = null;

// ========== RANDOMRANDOMIZER_GETBYTESFROMSTRING - BEGIN
// ===== ABOUT
// Get random bytes from a source string
// ===== DESCRIPTION
// Generates a string containing uniformly selected random bytes from the input string with the requested length.
// The chance for a byte to be selected is proportional to its share of the input string. If each byte occurs the same amount of times, each byte is equally likely to be selected.
// ===== SUPPORTED
// PHP_8 >= PHP_8_3_0
// ===== SYNTAX
// public Random\Randomizer::getBytesFromString(string $string, int $length): string
// ===== CODE
$return_randomrandomizer_getbytesfromstring = $randomrandomizer->getBytesFromString(

$string, // string string - The string from which the returned bytes are selected.

$length // int length - The length of the random string that should be returned in bytes; must be 1 or greater.

); // Return Values
// A string containing the requested number of random bytes taken from the input string.
// 
// Errors/Exceptions
// * If string is empty, a ValueError will be thrown.
// * If the value of length is less than 1, a ValueError will be thrown.
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::getBytesFromString() example
// [php]
// $randomizer = new \Random\Randomizer();
// 
// printf(
//     "%s.example.com",
//     $randomizer->getBytesFromString('abcdefghijklmnopqrstuvwxyz0123456789', 16)
// );
// [/php]
// The above example will output something similar to:
// [result]
// 3zsw04eiubcf82jd.example.com
// [/result]
// [/example]
// [example]
// Example #2 Generate a random code for multi-factor authentication
// [php]
// // The Secure engine is the default, but we make it explicit, because
// // multi-factor codes are security sensitive.
// $randomizer = new \Random\Randomizer(new \Random\Engine\Secure());
// 
// echo implode('-', str_split($randomizer->getBytesFromString('0123456789', 20), 5));
// [/php]
// The above example will output something similar to:
// [result]
// 11551-80418-27047-42075
// [/result]
// [/example]
// [example]
// Example #3 Select from a string with a non-uniform distribution
// [php]
// $randomizer = new \Random\Randomizer();
// 
// echo $randomizer->getBytesFromString('aaaaabcdef', 20);
// [/php]
// The above example will output something similar to:
// [result]
// fddacbeaaeaaacaaaaca
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.getbytesfromstring.php
// ========== RANDOMRANDOMIZER_GETBYTESFROMSTRING - END

// SYNTAX:
// string Random\Randomizer::getBytesFromString(string $string, int $length)

return $return_randomrandomizer_getbytesfromstring; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETBYTESFROMSTRING
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETFLOAT
// ============================== OFFLINE
// ============================== ABOUT
// Get a uniformly selected float.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::getFloat() - PHP_8 >= PHP_8_3_0
// ============================== USING CONSTANTS (1)
// Random\IntervalBoundary::ClosedOpen - Random\IntervalBoundary
// ============================== CODE
/*
function php_basic_random_randomrandomizer_getfloat($randomrandomizer, $min, $max, $boundary = Random\IntervalBoundary::ClosedOpen)
{
$return_randomrandomizer_getfloat = false;

// ========== RANDOMRANDOMIZER_GETFLOAT - BEGIN
// ===== ABOUT
// Get a uniformly selected float
// ===== DESCRIPTION
// Returns a uniformly selected, equidistributed float from a requested interval.
// Due to the limited precision, not all real numbers can be exactly represented as a floating point number. If a number cannot be represented exactly, it is rounded to the nearest representable exact value. Furthermore, floats are not equally dense across the whole number line. Because floats use a binary exponent, the distance between two neighboring floats doubles at each power of two. In other words: There are the same number of representable floats between 1.0 and 2.0 as they are between 2.0 and 4.0, 4.0 and 8.0, 8.0 and 16.0, and so on.
// Randomly sampling an arbitrary number within the requested interval, for example by dividing two integers, might result in a biased distribution for this reason. The necessary rounding will cause some floats to be returned more often than others, especially around powers of two when the density of floats changes.
// Random\Randomizer::getFloat() implements an algorithm that will return a uniformly selected float from the largest possible set of exactly representable and equidistributed floats within the requested interval. The distance between the selectable floats (“step size”) matches the distance between the floats with the lowest density, i.e. the distance between floats at interval boundary with the larger absolute value. This means that not all representable floats within a given interval may be returned if the interval crosses one or more powers of two. Stepping will start from the interval boundary with the larger absolute value to ensure the steps align with the exactly representable floats.
// Closed interval boundaries will always be included in the set of selectable floats. Thus, if the size of the interval is not an exact multiple of the step size and the boundary with the smaller absolute value is a closed boundary, the distance between that boundary and its nearest selectable float will be smaller than the step size.
// Caution: Post-processing the returned floats is likely going to break the uniform equidistribution, because the intermediate floats within a mathematical operation are experiencing implicit rounding. The requested interval should match the desired interval as closely as possible and rounding should only be performed as an explicit operation right before displaying the selected number to a user.
// 
// Explanation of the Algorithm Using Example Values
// To give an example of how the algorithm works, consider a floating point representation that uses a 3-bit mantissa. This representation is capable of representing 8 different floating point values between consecutive powers of two. This means that between 1.0 and 2.0 all steps of size 0.125 are exactly representable and between 2.0 and 4.0 all steps of size 0.25 are exactly representable. In reality PHP’s floats use a 52-bit mantissa and can represent 252 different values between each power of two. This means that
// * 1.0
// * 1.125
// * 1.25
// * 1.375
// * 1.5
// * 1.625
// * 1.75
// * 1.875
// * 2.0
// * 2.25
// * 2.5
// * 2.75
// * 3.0
// * 3.25
// * 3.5
// * 3.75
// * 4.0
// are the exactly representable floats between 1.0 and 4.0.
// Now consider that $randomizer->getFloat(1.625, 2.5, IntervalBoundary::ClosedOpen) is called, i.e. a random float starting at 1.625 until, but not including, 2.5 is requested. The algorithm first determines the step size at the boundary with the larger absolute value (2.5). The step size at that boundary is 0.25.
// Note that the size of the requested interval is 0.875, which is not an exact multiple of 0.25. If the algorithm would start stepping at the lower bound 1.625, it would encounter 2.125, which is not exactly representable and would experience implicit rounding. Thus the algorithm starts stepping at the upper boundary 2.5. The selectable values are:
// * 2.25
// * 2.0
// * 1.75
// * 1.625
// 2.5 is not included, because the upper boundary of the requested interval is an open boundary. 1.625 is included, even though its distance to the nearest value 1.75 is 0.125, which is smaller than the previously determined step size of 0.25. The reason for that is that the requested interval is closed at the lower boundary (1.625) and closed boundaries are always included.
// Finally the algorithm uniformly selects one of the four selectable values at random and returns it.
// 
// Why Dividing Two Integers Does Not Work
// In the previous example, there are eight representable floating point numbers between each sub-interval delimited by a power of two. To give an example why dividing two integers would not work well to generate a random float, consider that there are 16 equidistributed floating point numbers in the right-open interval from 0.0 until, but not including, 1.0. Half of them are the eight exactly representable values between 0.5 and 1.0, the other half are the values between 0.0 and 1.0 that the step size of 0.0625. These can easily be generated by dividing a random integer between 0 and 15 by 16 to obtain one of:
// * 0.0
// * 0.0625
// * 0.125
// * 0.1875
// * 0.25
// * 0.3125
// * 0.375
// * 0.4375
// * 0.5
// * 0.5625
// * 0.625
// * 0.6875
// * 0.75
// * 0.8125
// * 0.875
// * 0.9375
// This random float could be scaled to right-open interval from 1.625 until, but not including, 2.75 by multiplying it with the size of the interval (0.875) and adding the minimum 1.625. This so-called affine transformation would result in the values:
// * 1.625 rounded to 1.625
// * 1.679 rounded to 1.625
// * 1.734 rounded to 1.75
// * 1.789 rounded to 1.75
// * 1.843 rounded to 1.875
// * 1.898 rounded to 1.875
// * 1.953 rounded to 2.0
// * 2.007 rounded to 2.0
// * 2.062 rounded to 2.0
// * 2.117 rounded to 2.0
// * 2.171 rounded to 2.25
// * 2.226 rounded to 2.25
// * 2.281 rounded to 2.25
// * 2.335 rounded to 2.25
// * 2.390 rounded to 2.5
// * 2.445 rounded to 2.5
// Note how the upper boundary of 2.5 would be returned, despite being an open boundary and thus being excluded. Also note how 2.0 and 2.25 are twice as likely to be returned compared to the other values.
// ===== SUPPORTED
// PHP_8 >= PHP_8_3_0
// ===== SYNTAX
// public Random\Randomizer::getFloat(float $min, float $max, Random\IntervalBoundary $boundary = Random\IntervalBoundary::ClosedOpen): float
// ===== CODE
$return_randomrandomizer_getfloat = $randomrandomizer->getFloat(

$min, // float min - The lower bound of the interval.

$max, // float max - The upper bound of the interval.

$boundary // Random\IntervalBoundary boundary - Specifies whether the interval boundaries are possible return values.

); // Return Values
// A uniformly selected, equidistributed float from the interval specified by min, max, and boundary. Whether min and max are possible return values depends on the value of boundary.
// 
// Errors/Exceptions
// * If the value of $min is not finite (is_finite()), a ValueError will be thrown.
// * If the value of $max is not finite (is_finite()), a ValueError will be thrown.
// * If the requested interval does not contain any values, a ValueError will be thrown.
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::getFloat() example
// [php]
// $randomizer = new \Random\Randomizer();
// 
// // Note that the latitude granularity is double the
// // longitude’s granularity.
// //
// // For the latitude the value may be both -90 and 90.
// // For the longitude the value may be 180, but not -180, because
// // -180 and 180 refer to the same longitude.
// printf(
//     "Lat: %+.6f Lng: %+.6f",
//     $randomizer->getFloat(-90, 90, \Random\IntervalBoundary::ClosedClosed),
//     $randomizer->getFloat(-180, 180, \Random\IntervalBoundary::OpenClosed),
// );
// [/php]
// The above example will output something similar to:
// [result]
// Lat: +69.244304 Lng: -53.548951
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This method implements the γ-section algorithm as published in >  Drawing Random Floating-Point Numbers from an Interval. Frédéric Goualard, ACM Trans. Model. Comput. Simul., 32:3, 2022 to obtain the desired behavioral properties.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.getfloat.php
// ========== RANDOMRANDOMIZER_GETFLOAT - END

// SYNTAX:
// float Random\Randomizer::getFloat(float $min, float $max, Random\IntervalBoundary $boundary = Random\IntervalBoundary::ClosedOpen)

return $return_randomrandomizer_getfloat; // float
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETFLOAT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETINT
// ============================== OFFLINE
// ============================== ABOUT
// Get a uniformly selected integer.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::getInt() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_getint($randomrandomizer, $min, $max)
{
$return_randomrandomizer_getint = 0;

// ========== RANDOMRANDOMIZER_GETINT - BEGIN
// ===== ABOUT
// Get a uniformly selected integer
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::getInt(int $min, int $max): int
// ===== CODE
$return_randomrandomizer_getint = $randomrandomizer->getInt(

$min, // int min - The lowest value to be returned.

$max // int max - The highest value to be returned.

); // Return Values
// A uniformly selected integer from the closed interval [min, max]. Both min and max are possible return values.
// 
// Errors/Exceptions
// * If max is less than min, a ValueError will be thrown.
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::getInt() example
// [php]
// $r = new \Random\Randomizer();
// 
// // Random integer in range:
// echo $r->getInt(1, 100), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 42
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.getint.php
// ========== RANDOMRANDOMIZER_GETINT - END

// SYNTAX:
// int Random\Randomizer::getInt(int $min, int $max)

return $return_randomrandomizer_getint; // int
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_GETINT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_NEXTFLOAT
// ============================== OFFLINE
// ============================== ABOUT
// Get a float from the right-open interval [0.0, 1.0).
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::nextFloat() - PHP_8 >= PHP_8_3_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_nextfloat($randomrandomizer)
{
$return_randomrandomizer_nextfloat = 0;

// ========== RANDOMRANDOMIZER_NEXTFLOAT - BEGIN
// ===== ABOUT
// Get a float from the right-open interval [0.0, 1.0)
// ===== DESCRIPTION
// Returns a uniformly selected, equidistributed float from the right-open interval from 0.0 until, but not including, 1.0.
// The chance for returned float to be within a given right-open sub-interval is proportial to the size of the sub-interval. This means that the chance for a float to be less than 0.5 is 50 %, which is equal to the chance for a float to be at least 0.5. Likewise the chance for a float to be within the right-open interval from 0.2 until, but not including, 0.25 is exactly 5 %.
// This property makes it easy to leverage Random\Randomizer::nextFloat() to generate a random boolean with a given chance by checking if the returned float is less than a given chance.
//  Note:
//  The domain of the returnable floats of Random\Randomizer::nextFloat() is identical to that of Randomizer::getFloat(0.0, 1.0, IntervalBoundary::ClosedOpen).
//  The internal implementation of Random\Randomizer::nextFloat() is more efficient.
//  Caution:
//  Scaling the return value to a different interval using multiplication or addition (a so-called affine transformation) might result in a bias in the resulting value as floats are not equally dense across the number line. As not all values can be exactly represented by a float, the result of the affine transformation might also result in values outside of the requested interval due to implicit rounding. An in-depth explanation of the problems with the affine transformation is given in the documentation for Random\Randomizer::getFloat().
//  Use Random\Randomizer::getFloat() to generate a random float within an arbitrary interval. Use Random\Randomizer::getInt() to generate a random integer within an arbitrary interval.
// ===== SUPPORTED
// PHP_8 >= PHP_8_3_0
// ===== SYNTAX
// public Random\Randomizer::nextFloat(): float
// ===== CODE
$return_randomrandomizer_nextfloat = $randomrandomizer->nextFloat(

// This function has no parameters.

); // Return Values
// A uniformly selected, equidistributed float from the right-open (IntervalBoundary::ClosedOpen) interval [0.0, 1.0). 0.0 is a possible return value, 1.0 is not.
// 
// Errors/Exceptions
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::nextFloat() example
// [php]
// $r = new \Random\Randomizer();
// 
// // The resulting bool will be true with the given chance.
// $chance = 0.5;
// 
// $bool = $r->nextFloat() < $chance;
// 
// echo ($bool ? "You won" : "You lost"), "\n";
// [/php]
// [result]
// You won
// [/result]
// [/example]
// [example]
// Example #2 Incorrect scaling using an affine transformation
// [php]
// final class MaxEngine implements Random\Engine {
//     public function generate(): string {
//         return "\xff";
//     }
// }
// 
// $randomizer = new \Random\Randomizer(new MaxEngine);
// 
// $min = 3.5;
// $max = 4.5;
// 
// // DO NOT DO THIS:
// //
// // This will output 4.5, despite nextFloat() sampling from
// // a right-open interval, which will never return 1.
// printf("Wrong scaling: %.17g", $randomizer->nextFloat() * ($max - $min) + $min);
// 
// // Correct:
// // $randomizer->getFloat($min, $max, \Random\IntervalBoundary::ClosedOpen);
// [/php]
// The above example will output:
// [result]
// float(4.5)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.nextfloat.php
// ========== RANDOMRANDOMIZER_NEXTFLOAT - END

// SYNTAX:
// float Random\Randomizer::nextFloat()

return $return_randomrandomizer_nextfloat; // float
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_NEXTFLOAT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_NEXTINT
// ============================== OFFLINE
// ============================== ABOUT
// Get a positive integer.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::nextInt() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_nextint($randomrandomizer)
{
$return_randomrandomizer_nextint = 0;

// ========== RANDOMRANDOMIZER_NEXTINT - BEGIN
// ===== ABOUT
// Get a positive integer
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::nextInt(): int
// ===== CODE
$return_randomrandomizer_nextint = $randomrandomizer->nextInt(

// This function has no parameters.

); // Return Values
// A positive integer between 0 and a maximum value depending on the number of bytes returned from Random\Engine::generate(). The exact maximum can be calculated as 2$engine_bytes * 8 - 1 - 1.
// 
// Errors/Exceptions
// * To avoid inconsistencies, 32 bit PHP will throw Random\RandomException if the output size of Random\Engine::generate() exceeds 32 bits, as the selected integer cannot be returned losslessly. This affects the native 64 bit engines Random\Engine\PcgOneseq128XslRr64 and Random\Engine\Xoshiro256StarStar. Any userland engine returning more than 4 bytes of randomness is also affected.
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::nextInt() example
// [php]
// $r = new \Random\Randomizer();
// 
// // Random "next" integer:
// echo $r->nextInt(), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 8041689838856078718
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.nextint.php
// ========== RANDOMRANDOMIZER_NEXTINT - END

// SYNTAX:
// int Random\Randomizer::nextInt()

return $return_randomrandomizer_nextint; // int
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_NEXTINT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_PICKARRAYKEYS
// ============================== OFFLINE
// ============================== ABOUT
// Select random array keys.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::pickArrayKeys() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_pickarraykeys($randomrandomizer, $array, $num)
{
$return_randomrandomizer_pickarraykeys = null;

// ========== RANDOMRANDOMIZER_PICKARRAYKEYS - BEGIN
// ===== ABOUT
// Select random array keys
// ===== DESCRIPTION
// Uniformly selects num distinct array keys of the input array.
// Each key of the input array is equally likely to be returned.
// Caution: The selection of the array keys depends on the internal structure of the input array. The returned array keys might be different for two equal input arrays and two Random\Engines with identical state, depending on how the input arrays have been created.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::pickArrayKeys(array $array, int $num): array
// ===== CODE
$return_randomrandomizer_pickarraykeys = $randomrandomizer->pickArrayKeys(

$array, // array array - The array whose array keys are selected.

$num // int num - The number of array keys to return; must be between 1 and the number of elements in array.

); // Return Values
// An array containing num distinct array keys of array.
// The returned array will be a list (array_is_list()). It will be a subset of the array returned by array_keys().
// 
// Errors/Exceptions
// * If num is less than 1 or greater than the number of elements in array, a ValueError will be thrown.
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::pickArrayKeys() example
// [php]
// $r = new \Random\Randomizer();
// 
// $fruits = [ 'red' => '🍎', 'green' => '🥝', 'yellow' => '🍌', 'pink' => '🍑', 'purple' => '🍇' ];
// 
// // Pick 2 random array keys:
// echo "Keys: ", implode(', ', $r->pickArrayKeys($fruits, 2)), "\n";
// 
// // Pick another 3:
// echo "Keys: ", implode(', ', $r->pickArrayKeys($fruits, 3)), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Keys: yellow, purple
// Keys: red, green, yellow
// [/result]
// [/example]
// [example]
// Example #2 Picking random values
// [php]
// $r = new \Random\Randomizer();
// 
// $fruits = [ 'red' => '🍎', 'green' => '🥝', 'yellow' => '🍌', 'pink' => '🍑', 'purple' => '🍇' ];
// 
// $keys = $r->pickArrayKeys($fruits, 2);
// // Look up the values for the picked keys.
// $selection = array_map(
//     static fn ($key) => $fruits[$key],
//     $keys
// );
// 
// echo "Values: ", implode(', ', $selection), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Values: 🍎, 🍇
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.pickarraykeys.php
// ========== RANDOMRANDOMIZER_PICKARRAYKEYS - END

// SYNTAX:
// array Random\Randomizer::pickArrayKeys(array $array, int $num)

return $return_randomrandomizer_pickarraykeys; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_PICKARRAYKEYS
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Serializes the Randomizer object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::__serialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_serialize($randomrandomizer)
{
$return_randomrandomizer_serialize = null;

// ========== RANDOMRANDOMIZER_SERIALIZE - BEGIN
// ===== ABOUT
// Serializes the Randomizer object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::__serialize(): array
// ===== CODE
$return_randomrandomizer_serialize = $randomrandomizer->__serialize(

// This function has no parameters.

); // Return Values
// array
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::__serialize() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.serialize.php
// ========== RANDOMRANDOMIZER_SERIALIZE - END

// SYNTAX:
// array Random\Randomizer::__serialize()

return $return_randomrandomizer_serialize; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SERIALIZE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SHUFFLEARRAY
// ============================== OFFLINE
// ============================== ABOUT
// Get a permutation of an array.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::shuffleArray() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_shufflearray($randomrandomizer, $array)
{
$return_randomrandomizer_shufflearray = null;

// ========== RANDOMRANDOMIZER_SHUFFLEARRAY - BEGIN
// ===== ABOUT
// Get a permutation of an array
// ===== DESCRIPTION
// Returns a uniformly selected permutation of the input array.
// Each possible permutation of the input array is equally likely to be returned.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::shuffleArray(array $array): array
// ===== CODE
$return_randomrandomizer_shufflearray = $randomrandomizer->shuffleArray(

$array // array array - The array whose values are shuffled.
// The input array will not be modified.

); // Return Values
// A permutation of the values of array.
// Array keys of the input array will not be preserved; the returned array will be a list (array_is_list()).
// 
// Errors/Exceptions
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::shuffleArray() example
// [php]
// $r = new \Random\Randomizer();
// 
// $fruits = [ 'red' => '🍎', 'green' => '🥝', 'yellow' => '🍌', 'pink' => '🍑', 'purple' => '🍇' ];
// 
// // Shuffle array:
// echo "Salad: ", implode(', ', $r->shuffleArray($fruits)), "\n";
// 
// // Shuffle again:
// echo "Another Salad: ", implode(', ', $r->shuffleArray($fruits)), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Salad: 🍎, 🥝, 🍇, 🍌, 🍑
// Another Salad: 🍑, 🍇, 🥝, 🍎, 🍌
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.shufflearray.php
// ========== RANDOMRANDOMIZER_SHUFFLEARRAY - END

// SYNTAX:
// array Random\Randomizer::shuffleArray(array $array)

return $return_randomrandomizer_shufflearray; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SHUFFLEARRAY
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SHUFFLEBYTES
// ============================== OFFLINE
// ============================== ABOUT
// Get a byte-wise permutation of a string.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::shuffleBytes() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_shufflebytes($randomrandomizer, $bytes)
{
$return_randomrandomizer_shufflebytes = null;

// ========== RANDOMRANDOMIZER_SHUFFLEBYTES - BEGIN
// ===== ABOUT
// Get a byte-wise permutation of a string
// ===== DESCRIPTION
// Returns a uniformly selected permutation of the input bytes.
// Each possible permutation of the input bytes is equally likely to be returned.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::shuffleBytes(string $bytes): string
// ===== CODE
$return_randomrandomizer_shufflebytes = $randomrandomizer->shuffleBytes(

$bytes // string bytes - The string whose bytes are shuffled.
// The input string will not be modified.

); // Return Values
// A permutation of the bytes of bytes.
// 
// Errors/Exceptions
// * Any Throwables thrown by the Random\Engine::generate() method of the underlying Random\Randomizer::$engine.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::shuffleBytes() example
// [php]
// $r = new \Random\Randomizer();
// 
// // Shuffle bytes in a string:
// echo "«", $r->shuffleBytes("PHP is great!"), ">\n";
// [/php]
// The above example will output something similar to:
// [result]
// « ga rHs!PPiet>
// [/result]
// [/example]
// [example]
// Example #2 Byte-wise shuffling breaks Unicode characters
// [php]
// $r = new \Random\Randomizer();
// 
// $unicode = "🍎, 🥝, 🍌, 🍑, 🍇";
// $shuffled = $r->shuffleBytes( $unicode );
// 
// // Byte-wise shuffling of non-ASCII characters destroys them,
// // resulting in invalid sequences (indicated by the Unicode
// // replacement character) or even entirely different characters
// // appearing in the output.
// echo "Original: ", $unicode, "\n";
// echo "Shuffled: «", $shuffled, ">\n";
// echo "Shuffled Bytes: ", bin2hex($shuffled), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Original: 🍎, 🥝, 🍌, 🍑, 🍇
// Shuffled: «� ��,�����🍟,� �� �, �,��>
// Shuffled Bytes: 87208e912c8d9fa5f0f0f09f8d9f2cf09f208c9d20f02c209f2c8d8d
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.shufflebytes.php
// ========== RANDOMRANDOMIZER_SHUFFLEBYTES - END

// SYNTAX:
// string Random\Randomizer::shuffleBytes(string $bytes)

return $return_randomrandomizer_shufflebytes; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_SHUFFLEBYTES
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_UNSERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Deserializes the data parameter into a Randomizer object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Randomizer::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomrandomizer_unserialize($randomrandomizer, $data)
{

// ========== RANDOMRANDOMIZER_UNSERIALIZE - BEGIN
// ===== ABOUT
// Deserializes the data parameter into a Randomizer object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Randomizer::__unserialize(array $data): void
// ===== CODE
$randomrandomizer->__unserialize(

$data // array $data

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Randomizer::__unserialize() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-randomizer.unserialize.php
// ========== RANDOMRANDOMIZER_UNSERIALIZE - END

// SYNTAX:
// void Random\Randomizer::__unserialize(array $data)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER_UNSERIALIZE
// ==============================


// ============================== END
// PHP_BASIC_RANDOM_RANDOMRANDOMIZER
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINESECURE
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINESECURE_GENERATE - string php_basic_random_randomenginesecure_generate(Random\Engine\Secure $ffi)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// OFFLINE | Random\Engine\Secure::generate() - PHP_8 >= PHP_8_2_0
// ============================== USING DATA_TYPES (2)
// string
// OFFLINE | Random\Engine\Secure - PHP_8 >= PHP_8_2_0
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINESECURE_GENERATE
// ============================== OFFLINE
// ============================== ABOUT
// Generate cryptographically secure randomness.
// ============================== SUPPORT
// PHP_8 - PHP_8_2_0
// ============================== USING SUBCLASSES (1)
// Random\Engine\Secure::generate() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginesecure_generate($ffi)
{
$return_randomenginesecure_generate = null;

// ========== RANDOMENGINESECURE_GENERATE - BEGIN
// ===== ABOUT
// Generate cryptographically secure randomness
// ===== DESCRIPTION
// Returns cryptographically secure randomness.
// The sources of randomness in the order of priority are as follows:
// * Linux: > getrandom(), /dev/urandom
// * FreeBSD >= 12 (PHP >= 7.3)            : > getrandom(), /dev/urandom
// * Windows (PHP >= 7.2)                  : > CNG-API
// Windows                                 : > CryptGenRandom
// * macOS (PHP >= 8.2; >= 8.1.9; >= 8.0.22 if CCRandomGenerateBytes is available at compile time): CCRandomGenerateBytes()
// macOS (PHP >= 8.1; >= 8.0.2)            : arc4random_buf(), /dev/urandom
// * NetBSD >= 7 (PHP >= 7.1; >= 7.0.1)    : arc4random_buf(), /dev/urandom
// * OpenBSD >= 5.5 (PHP >= 7.1; >= 7.0.1) : arc4random_buf(), /dev/urandom
// * DragonflyBSD (PHP >= 8.1)             : > getrandom(), /dev/urandom
// * Solaris (PHP >= 8.1)                  : > getrandom(), /dev/urandom
// * Any combination of operating system and PHP version not previously mentioned: /dev/urandom
// * If none of the sources are available or they all fail to generate randomness, then a Random\RandomException will be thrown.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Secure::generate(): string
// ===== CODE
$return_randomenginesecure_generate = $ffi->generate(

// This function has no parameters.

); // Return Values
// A string containing PHP_INT_SIZE cryptographically secure random bytes.
// 
// Errors/Exceptions
// * If an appropriate source of randomness cannot be found, a Random\RandomException will be thrown.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/random-engine-secure.generate.php
// ========== RANDOMENGINESECURE_GENERATE - END

// SYNTAX:
// string Random\Engine\Secure::generate()

return $return_randomenginesecure_generate; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINESECURE_GENERATE
// ==============================


// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINESECURE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937_CONSTRUCT - Random\Engine\Mt19937 php_basic_random_randomenginemt19937_construct(int $seed = null, int $mode = MT_RAND_MT19937)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937_DEBUGINFO - array php_basic_random_randomenginemt19937_debuginfo(Random\Engine\Mt19937 $randomenginemt19937)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937_GENERATE - string php_basic_random_randomenginemt19937_generate(Random\Engine\Mt19937 $randomenginemt19937)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937_SERIALIZE - array php_basic_random_randomenginemt19937_serialize(Random\Engine\Mt19937 $randomenginemt19937)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEMT19937_UNSERIALIZE - void php_basic_random_randomenginemt19937_unserialize(Random\Engine\Mt19937 $randomenginemt19937, array $data)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (5)
// OFFLINE | Random\Engine\Mt19937::__construct() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Mt19937::__debugInfo() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Mt19937::generate() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Mt19937::__serialize() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Mt19937::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== USING DATA_TYPES (5)
// OFFLINE | Random\Engine\Mt19937 - PHP_8 >= PHP_8_2_0
// int
// array
// string
// void
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Constructs a new Mt19937 engine.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Mt19937::__construct() - PHP_8 >= PHP_8_2_0
// ============================== USING CONSTANTS (1)
// MT_RAND_MT19937 - Random\Engine\Mt19937::__construct()
// ============================== CODE
/*
function php_basic_random_randomenginemt19937_construct($seed = null, $mode = MT_RAND_MT19937)
{
$return_randomenginemt19937_construct = null;

// ========== RANDOMENGINEMT19937_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new Mt19937 engine
// ===== DESCRIPTION
//  Caution:
//  Because the Mt19937 (“Mersenne Twister”) engine accepts only a single 32 bit integer as the seed, the number of possible random sequences is limited to just 232 (i.e. 4,294,967,296), despite Mt19937’s huge period of 219937-1.
//  When relying on either implicit or explicit random seeding, duplications will appear much earlier. Duplicated seeds are expected with 50% probability after less than 80,000 randomly generated seeds according to the birthday problem. A 10% probability of a duplicated seed happens after randomly generating roughly 30,000 seeds.
//  This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with more than a negligible probability. If reproducible seeding is required, both the Random\Engine\Xoshiro256StarStar and Random\Engine\PcgOneseq128XslRr64 engines support much larger seeds that are unlikely to collide randomly. If reproducibility is not required, the Random\Engine\Secure engine provides cryptographically secure randomness.
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Mt19937::__construct(?int $seed = null, int $mode = MT_RAND_MT19937)
// ===== CODE
$return_randomenginemt19937_construct = new \Random\Engine\Mt19937(

$seed, // int seed - Fills the state with values generated with a linear congruential generator that was seeded with seed interpreted as an unsigned 32 bit integer.
// If seed is omitted or null, a random unsigned 32 bit integer will be used.

$mode // int mode - Use one of the following constants to specify the implementation of the algorithm to use.
// * MT_RAND_MT19937: The correct Mt19937 implementation.
// * MT_RAND_PHP: An incorrect implementation for backwards compatibility with mt_srand() prior to PHP 7.1.0.
// Warning: This feature has been DEPRECATED as of PHP 8.3.0. Relying on this feature is highly discouraged.

); // Return
// Random\Engine\Mt19937
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Mt19937::__construct() example
// [php]
// Uses a random 32 Bit seed.
// $e = new \Random\Engine\Mt19937();
// 
// $r = new \Random\Randomizer($e);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-mt19937.construct.php
// ========== RANDOMENGINEMT19937_CONSTRUCT - END

// SYNTAX:
// Random\Engine\Mt19937 Random\Engine\Mt19937::__construct(int $seed = null, int $mode = MT_RAND_MT19937)

return $return_randomenginemt19937_construct; // Random\Engine\Mt19937
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_DEBUGINFO
// ============================== OFFLINE
// ============================== ABOUT
// Returns the internal state of the engine.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Mt19937::__debugInfo() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginemt19937_debuginfo(Random\Engine\Mt19937 $randomenginemt19937)
{
$return_randomenginemt19937_debuginfo = null;

// ========== RANDOMENGINEMT19937_DEBUGINFO - BEGIN
// ===== ABOUT
// Returns the internal state of the engine
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Mt19937::__debugInfo(): array
// ===== CODE
$return_randomenginemt19937_debuginfo = $randomenginemt19937->__debugInfo(

// This function has no parameters.

); // Return Values
// array
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Mt19937::__debugInfo() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-mt19937.debuginfo.php
// ========== RANDOMENGINEMT19937_DEBUGINFO - END

// SYNTAX:
// array Random\Engine\Mt19937::__debugInfo()

return $return_randomenginemt19937_debuginfo; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_DEBUGINFO
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_GENERATE
// ============================== OFFLINE
// ============================== ABOUT
// Generate 32 bits of randomness.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Mt19937::generate() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginemt19937_generate($randomenginemt19937)
{
$return_randomenginemt19937_generate = null;

// ========== RANDOMENGINEMT19937_GENERATE - BEGIN
// ===== ABOUT
// Generate 32 bits of randomness
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Mt19937::generate(): string
// ===== CODE
$return_randomenginemt19937_generate = $randomenginemt19937->generate(

// This function has no parameters.

); // Return Values
// A string representing an unsigned 32 bit integer in little-endian order.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-mt19937.generate.php
// ========== RANDOMENGINEMT19937_GENERATE - END

// SYNTAX:
// string Random\Engine\Mt19937::generate()

return $return_randomenginemt19937_generate; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_GENERATE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_SERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Serializes the Mt19937 object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Mt19937::__serialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginemt19937_serialize($randomenginemt19937)
{
$return_randomenginemt19937_serialize = null;

// ========== RANDOMENGINEMT19937_SERIALIZE - BEGIN
// ===== ABOUT
// Serializes the Mt19937 object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Mt19937::__serialize(): array
// ===== CODE
$return_randomenginemt19937_serialize = $randomenginemt19937->__serialize(

// This function has no parameters.

); // Return Values
// array
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Mt19937::__serialize() example
// [php]
// 
// ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-mt19937.serialize.php
// ========== RANDOMENGINEMT19937_SERIALIZE - END

// SYNTAX:
// array Random\Engine\Mt19937::__serialize()

return $return_randomenginemt19937_serialize; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_SERIALIZE 
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_UNSERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Deserializes the data parameter into a Mt19937 object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Mt19937::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginemt19937_unserialize($randomenginemt19937, $data)
{

// ========== RANDOMENGINEMT19937_UNSERIALIZE - BEGIN
// ===== ABOUT
// Deserializes the data parameter into a Mt19937 object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Mt19937::__unserialize(array $data): void
// ===== CODE
$randomenginemt19937->__unserialize(

$data // array $data

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Mt19937::__unserialize() example
// [php]
// 
// ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-mt19937.unserialize.php
// ========== RANDOMENGINEMT19937_UNSERIALIZE - END

// SYNTAX:
// void Random\Engine\Mt19937::__unserialize(array $data)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937_UNSERIALIZE
// ==============================


// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEMT19937
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_CONSTRUCT - Random\Engine\PcgOneseq128XslRr64 php_basic_random_randomenginepcgoneseq128xslrr64_construct(string|int|null $seed = null)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_DEBUGINFO - array php_basic_random_randomenginepcgoneseq128xslrr64_debuginfo(Random\Engine\PcgOneseq128XslRr64 $randomenginepcgoneseq128xslrr64)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_GENERATE - string php_basic_random_randomenginepcgoneseq128xslrr64_generate(Random\Engine\PcgOneseq128XslRr64 $randomenginepcgoneseq128xslrr64)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_JUMP - void php_basic_random_randomenginepcgoneseq128xslrr64_jump(Random\Engine\PcgOneseq128XslRr64 $randomenginepcgoneseq128xslrr64, int $advance)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_SERIALIZE - array php_basic_random_randomenginepcgoneseq128xslrr64_serialize(Random\Engine\PcgOneseq128XslRr64 $randomenginepcgoneseq128xslrr64)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_UNSERIALIZE - void php_basic_random_randomenginepcgoneseq128xslrr64_unserialize(Random\Engine\PcgOneseq128XslRr64 $randomenginepcgoneseq128xslrr64, array $data)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (6)
// OFFLINE | Random\Engine\PcgOneseq128XslRr64::__construct() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\PcgOneseq128XslRr64::__debugInfo() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\PcgOneseq128XslRr64::generate() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\PcgOneseq128XslRr64::jump() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\PcgOneseq128XslRr64::__serialize() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\PcgOneseq128XslRr64::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== USING DATA_TYPES (6)
// OFFLINE | Random\Engine\PcgOneseq128XslRr64 - PHP_8 >= PHP_8_2_0
// string
// int
// null
// array
// void
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Constructs a new PCG Oneseq 128 XSL RR 64 engine.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\PcgOneseq128XslRr64::__construct() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginepcgoneseq128xslrr64_construct($seed = null)
{
$return_randomenginepcgoneseq128xslrr64_construct = null;

// ========== RANDOMENGINEPCGONESEQ128XSLRR64_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new PCG Oneseq 128 XSL RR 64 engine
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\PcgOneseq128XslRr64::__construct(string|int|null $seed = null)
// ===== CODE
$return_randomenginepcgoneseq128xslrr64_construct = new \Random\Engine\PcgOneseq128XslRr64(

$seed // string|int|null seed - How the internal 128 bit (16 byte) state consisting of one unsigned 128 bit integer is seeded depends on the type used as the seed.
// 
// Type   - Description
// null   - Fills the state with 16 random bytes generated using the CSPRNG.
// int    - Fills the state by setting the state to 0, advancing the engine one step, adding the value of seed interpreted as an unsigned 64 bit integer, and advancing the engine another step.
// string - Fills the state by interpreting a 16 byte string as a little-endian unsigned 128 bit integer.

); // Return
// Random\Engine\PcgOneseq128XslRr64
// 
// Errors/Exceptions
// * If the length of a string seed is not 16 bytes, a ValueError will be thrown.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\PcgOneseq128XslRr64::__construct() example
// [php]
// // Uses a random 128 Bit seed.
// $e = new \Random\Engine\PcgOneseq128XslRr64();
// 
// $r = new \Random\Randomizer($e);
// [/php]
// [/example]
// [example]
// Example #2 Deriving a seed from a string
// [php]
// $string = "My string seed";
// 
// // Hash the string with truncated SHA-256 using binary output
// // to turn the $string into a 128 Bit seed. Using the same
// // string will result in the same sequence of randomness.
// $e = new \Random\Engine\PcgOneseq128XslRr64(
//     substr(hash('sha256', $string, binary: true), 0, 16)
// );
// 
// echo bin2hex($e->generate()), "\n";
// [/php]
// The above example will output:
// [result]
// 8333ef59315b16d8
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-pcgoneseq128xslrr64.construct.php
// ========== RANDOMENGINEPCGONESEQ128XSLRR64_CONSTRUCT - END

// SYNTAX:
// Random\Engine\PcgOneseq128XslRr64 Random\Engine\PcgOneseq128XslRr64::__construct(string|int|null $seed = null)

return $return_randomenginepcgoneseq128xslrr64_construct; // Random\Engine\PcgOneseq128XslRr64
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_DEBUGINFO
// ============================== OFFLINE
// ============================== ABOUT
// Returns the internal state of the engine.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\PcgOneseq128XslRr64::__debugInfo() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginepcgoneseq128xslrr64_debuginfo($randomenginepcgoneseq128xslrr64)
{
$return_randomenginepcgoneseq128xslrr64_debuginfo = null;

// ========== RANDOMENGINEPCGONESEQ128XSLRR64_DEBUGINFO - BEGIN
// ===== ABOUT
// Returns the internal state of the engine
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\PcgOneseq128XslRr64::__debugInfo(): array
// ===== CODE
$return_randomenginepcgoneseq128xslrr64_debuginfo = $randomenginepcgoneseq128xslrr64->__debugInfo(

// This function has no parameters.

); // Return Values
// Random\Engine\PcgOneseq128XslRr64
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\PcgOneseq128XslRr64::__debugInfo() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-pcgoneseq128xslrr64.debuginfo.php
// ========== RANDOMENGINEPCGONESEQ128XSLRR64_DEBUGINFO - END

// SYNTAX:
// array Random\Engine\PcgOneseq128XslRr64::__debugInfo()

return $return_randomenginepcgoneseq128xslrr64_debuginfo; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_DEBUGINFO
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_GENERATE
// ============================== OFFLINE
// ============================== ABOUT
// Generate 64 bits of randomness.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\PcgOneseq128XslRr64::generate() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginepcgoneseq128xslrr64_generate(Random\Engine\PcgOneseq128XslRr64 $randomenginepcgoneseq128xslrr64)
{
$return_randomenginepcgoneseq128xslrr64_generate = null;

// ========== RANDOMENGINEPCGONESEQ128XSLRR64_GENERATE - BEGIN
// ===== ABOUT
// Generate 64 bits of randomness
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\PcgOneseq128XslRr64::generate(): string
// ===== CODE
$return_randomenginepcgoneseq128xslrr64_generate = $randomenginepcgoneseq128xslrr64->generate(

// This function has no parameters.

); // Return Values
// A string representing an unsigned 64 bit integer in little-endian order.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-pcgoneseq128xslrr64.generate.php
// ========== RANDOMENGINEPCGONESEQ128XSLRR64_GENERATE - END

// SYNTAX:
// string Random\Engine\PcgOneseq128XslRr64::generate()

return $return_randomenginepcgoneseq128xslrr64_generate; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_GENERATE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_JUMP
// ============================== OFFLINE
// ============================== ABOUT
// Efficiently move the engine ahead multiple steps.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\PcgOneseq128XslRr64::jump() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginepcgoneseq128xslrr64_jump($randomenginepcgoneseq128xslrr64, $advance)
{

// ========== RANDOMENGINEPCGONESEQ128XSLRR64_JUMP - BEGIN
// ===== ABOUT
// Efficiently move the engine ahead multiple steps
// ===== DESCRIPTION
// Moves the algorithm’s state ahead by the number of steps given by advance, as if Random\Engine\PcgOneseq128XslRr64::generate() was called that many times.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\PcgOneseq128XslRr64::jump(int $advance): void
// ===== CODE
$randomenginepcgoneseq128xslrr64->jump(

$advance // int advance - The number of steps to move ahead; must be 0 or greater.

); // Return Values
// No value is returned.
// 
// Errors/Exceptions
// * If advance is less than 0, a ValueError will be thrown.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\PcgOneseq128XslRr64::jump() example
// [php]
// $a = new \Random\Engine\PcgOneseq128XslRr64(0);
// $b = clone $a;
// 
// for ($i = 0; $i < 1_000; $i++) {
//     $a->generate();
// }
// $b->jump(1_000);
// 
// echo "A: ", bin2hex($a->generate()), "\n";
// echo "B: ", bin2hex($b->generate()), "\n";
// [/php]
// The above example will output:
// [result]
// A: e6d0d5813913a424
// B: e6d0d5813913a424
// [/result]
// [/example]
// [example]
// Example #2 Randomizer methods may call the engine more than once
// [php]
// $a = new \Random\Randomizer(new \Random\Engine\PcgOneseq128XslRr64(42659));
// $b = new \Random\Randomizer(clone $a->engine);
// 
// $a->getInt(1, 1572864); // Performs two calls to generate().
// $a->getInt(1, 1572864);
// 
// $b->engine->jump(2);
// 
// // Because the first call to ->getInt() called ->generate() twice
// // the engines do not match up after performing a ->jump(2).
// echo "A: ", bin2hex($a->engine->generate()), "\n";
// echo "B: ", bin2hex($b->engine->generate()), "\n";
// 
// // Now the B engine matches the A engine.
// echo "B: ", bin2hex($b->engine->generate()), "\n";
// [/php]
// The above example will output:
// [result]
// A: 1e9f3107d56653d0
// B: a156c0086dd79d44
// B: 1e9f3107d56653d0
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-pcgoneseq128xslrr64.jump.php
// ========== RANDOMENGINEPCGONESEQ128XSLRR64_JUMP - END

// SYNTAX:
// void Random\Engine\PcgOneseq128XslRr64::jump(int $advance)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_JUMP 
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_SERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Serializes the PcgOneseq128XslRr64 object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\PcgOneseq128XslRr64::__serialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginepcgoneseq128xslrr64_serialize($randomenginepcgoneseq128xslrr64)
{
$return_randomenginepcgoneseq128xslrr64_serialize = null;

// ========== RANDOMENGINEPCGONESEQ128XSLRR64_SERIALIZE - BEGIN
// ===== ABOUT
// Serializes the PcgOneseq128XslRr64 object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\PcgOneseq128XslRr64::__serialize(): array
// ===== CODE
$return_randomenginepcgoneseq128xslrr64_serialize = $randomenginepcgoneseq128xslrr64->__serialize(

// This function has no parameters.

); // Return Values
// Random\Engine\PcgOneseq128XslRr64
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\PcgOneseq128XslRr64::__serialize() example
// [php]
// 
// ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-pcgoneseq128xslrr64.serialize.php
// ========== RANDOMENGINEPCGONESEQ128XSLRR64_SERIALIZE - END

// SYNTAX:
// array Random\Engine\PcgOneseq128XslRr64::__serialize()

return $return_randomenginepcgoneseq128xslrr64_serialize; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_SERIALIZE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_UNSERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Deserializes the data parameter into a PcgOneseq128XslRr64 object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\PcgOneseq128XslRr64::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginepcgoneseq128xslrr64_unserialize($randomenginepcgoneseq128xslrr64, $data)
{

// ========== RANDOMENGINEPCGONESEQ128XSLRR64_UNSERIALIZE - BEGIN
// ===== ABOUT
// Deserializes the data parameter into a PcgOneseq128XslRr64 object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\PcgOneseq128XslRr64::__unserialize(array $data): void
// ===== CODE
$randomenginepcgoneseq128xslrr64->__unserialize(

$data // array $data

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\PcgOneseq128XslRr64::__unserialize() example
// [php]
// 
// ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-pcgoneseq128xslrr64.unserialize.php
// ========== RANDOMENGINEPCGONESEQ128XSLRR64_UNSERIALIZE - END

// SYNTAX:
// void Random\Engine\PcgOneseq128XslRr64::__unserialize(array $data)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64_UNSERIALIZE
// ==============================


// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEPCGONESEQ128XSLRR64
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR
// ============================== OFFLINE
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_CONSTRUCT - Random\Engine\Xoshiro256StarStar php_basic_random_randomenginexoshiro256starstar_construct(string|int|null $seed = null)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_DEBUGINFO - array php_basic_random_randomenginexoshiro256starstar_debuginfo(Random\Engine\Xoshiro256StarStar $randomenginexoshiro256starstar)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_GENERATE - string php_basic_random_randomenginexoshiro256starstar_generate(Random\Engine\Xoshiro256StarStar $randomenginexoshiro256starstar)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_JUMP - void php_basic_random_randomenginexoshiro256starstar_jump(Random\Engine\Xoshiro256StarStar $randomenginexoshiro256starstar)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_JUMPLONG - void php_basic_random_randomenginexoshiro256starstar_jumplong(Random\Engine\Xoshiro256StarStar $randomenginexoshiro256starstar)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_SERIALIZE - array php_basic_random_randomenginexoshiro256starstar_serialize(Random\Engine\Xoshiro256StarStar $randomenginexoshiro256starstar)
// OFFLINE | PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_UNSERIALIZE - void php_basic_random_randomenginexoshiro256starstar_unserialize(Random\Engine\Xoshiro256StarStar $randomenginexoshiro256starstar, array $data)
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (7)
// OFFLINE | Random\Engine\Xoshiro256StarStar::__construct() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Xoshiro256StarStar::__debugInfo() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Xoshiro256StarStar::generate() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Xoshiro256StarStar::jump() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Xoshiro256StarStar::jumpLong() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Xoshiro256StarStar::__serialize() - PHP_8 >= PHP_8_2_0
// OFFLINE | Random\Engine\Xoshiro256StarStar::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== USING DATA_TYPES (6)
// OFFLINE | Random\Engine\Xoshiro256StarStar - PHP_8 >= PHP_8_2_0
// string
// int
// null
// array
// void
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Constructs a new xoshiro256** engine.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::__construct() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_construct($seed = null)
{
$return_randomenginexoshiro256starstar_construct = null;

// ========== RANDOMENGINEXOSHIRO256STARSTAR_CONSTRUCT - BEGIN
// ===== ABOUT
// Constructs a new xoshiro256** engine
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::__construct(string|int|null $seed = null)
// ===== CODE
$return_randomenginexoshiro256starstar_construct = new \Random\Engine\Xoshiro256StarStar(

$seed // string|int|null seed - How the internal 256 bit (32 byte) state consisting of four unsigned 64 bit integers is seeded depends on the type used as the seed.
// 
// Type   - Description
// null   - Fills the state with 32 random bytes generated using the CSPRNG.
// int    - Fills the state with four consecutive values generated with the SplitMix64 algorithm that was seeded with seed interpreted as an unsigned 64 bit integer.
// string - Fills the state by interpreting a 32 byte string as four little-endian unsigned 64 bit integers.

); // Return
// Random\Engine\Xoshiro256StarStar
// 
// Errors/Exceptions
// * If the length of a string seed is not 32 bytes, a ValueError will be thrown.
// * If a string seed consists of 32 NUL bytes ("\x00"), a ValueError will be thrown.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Xoshiro256StarStar::__construct() example
// [php]
// // Uses a random 256 Bit seed.
// $e = new \Random\Engine\Xoshiro256StarStar();
// 
// $r = new \Random\Randomizer($e);
// [/php]
// [/example]
// [example]
// Example #2 Deriving a seed from a string
// [php]
// $string = "My string seed";
// 
// // Hash the string with SHA-256 using binary output to turn the
// // $string into a 256 Bit seed. Using the same string will result
// // in the same sequence of randomness.
// $e = new \Random\Engine\Xoshiro256StarStar(
//     hash('sha256', $string, binary: true)
// );
// 
// echo bin2hex($e->generate()), "\n";
// [/php]
// The above example will output:
// [result]
// 6e013453678388c2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.construct.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_CONSTRUCT - END

// SYNTAX:
// Random\Engine\Xoshiro256StarStar Random\Engine\Xoshiro256StarStar::__construct(string|int|null $seed = null)

return $return_randomenginexoshiro256starstar_construct; // Random\Engine\Xoshiro256StarStar
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_DEBUGINFO
// ============================== OFFLINE
// ============================== ABOUT
// Returns the internal state of the engine.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::__debugInfo() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_debuginfo($randomenginexoshiro256starstar)
{
$return_randomenginexoshiro256starstar_debuginfo = null;

// ========== RANDOMENGINEXOSHIRO256STARSTAR_DEBUGINFO - BEGIN
// ===== ABOUT
// Returns the internal state of the engine
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::__debugInfo(): array
// ===== CODE
$return_randomenginexoshiro256starstar_debuginfo = $randomenginexoshiro256starstar->__debugInfo(

// This function has no parameters.

); // Return Values
// Random\Engine\Xoshiro256StarStar
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Xoshiro256StarStar::__debugInfo() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.debuginfo.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_DEBUGINFO - END

// SYNTAX:
// array Random\Engine\Xoshiro256StarStar::__debugInfo()

return $return_randomenginexoshiro256starstar_debuginfo; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_DEBUGINFO
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_GENERATE
// ============================== OFFLINE
// ============================== ABOUT
// Generate 64 bits of randomness.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::generate() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_generate($randomenginexoshiro256starstar)
{
$return_randomenginexoshiro256starstar_generate = null;

// ========== RANDOMENGINEXOSHIRO256STARSTAR_GENERATE - BEGIN
// ===== ABOUT
// Generate 64 bits of randomness
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::generate(): string
// ===== CODE
$return_randomenginexoshiro256starstar_generate = $randomenginexoshiro256starstar->generate(

// This function has no parameters.

); // Return Values
// A string representing an unsigned 64 bit integer in little-endian order.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.generate.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_GENERATE - END

// SYNTAX:
// string Random\Engine\Xoshiro256StarStar::generate()

return $return_randomenginexoshiro256starstar_generate; // string
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_GENERATE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_JUMP
// ============================== OFFLINE
// ============================== ABOUT
// Efficiently move the engine ahead by 2^128 steps.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::jump() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_jump($randomenginexoshiro256starstar)
{

// ========== RANDOMENGINEXOSHIRO256STARSTAR_JUMP - BEGIN
// ===== ABOUT
// Efficiently move the engine ahead by 2^128 steps
// ===== DESCRIPTION
// Moves the algorithm’s state ahead by 2128 steps, as if Random\Engine\Xoshiro256StarStar::generate() was called 2128 times.
// The purpose of a jump is to facilitate the creation of a new Random\Engine\Xoshiro256StarStar engine from an existing seeded Random\Engine\Xoshiro256StarStar engine. The seeded engine acts as a blueprint, which can be cloned and repeatedly jumped to create 2128 non-overlapping sequences with 2128 values each.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::jump(): void
// ===== CODE
$randomenginexoshiro256starstar->jump(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Xoshiro256StarStar::jump() example
// [php]
// use Random\Engine\Xoshiro256StarStar;
// use Random\Randomizer;
// 
// $blueprintRng = new Xoshiro256StarStar(0);
// 
// $fibers = [];
// for ($i = 0; $i < 8; $i++) {
//     $fiberRng = clone $blueprintRng;
//     $blueprintRng->jump();
// 
//     $fiber = new Fiber(static function () use ($fiberRng, $i): void {
//         $randomizer = new Randomizer($fiberRng);
// 
//         while (true) {
//             Fiber::suspend();
// 
//             echo "{$i}: ", $randomizer->getInt(0, 100), "\n";
//         }
//     });
//     $fiber->start();
// 
//     $fibers[] = $fiber;
// }
// 
// // Even though the fibers execute in a random order, they will print the same value
// // each time, because each has its own unique instance of the RNG.
// $randomizer = new Randomizer();
// 
// $fibers = $randomizer->shuffleArray($fibers);
// foreach ($fibers as $fiber) {
//     $fiber->resume();
// }
// 
// $fibers = $randomizer->shuffleArray($fibers);
// foreach ($fibers as $fiber) {
//     $fiber->resume();
// }
// [/php]
// The above example will output something similar to:
// [result]
// 4: 89
// 3: 10
// 2: 63
// 1: 75
// 6: 41
// 5: 56
// 0: 16
// 7: 60
// 7: 34
// 6: 58
// 1: 74
// 4: 63
// 3: 3
// 5: 42
// 2: 45
// 0: 86
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-15)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.jump.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_JUMP - END

// SYNTAX:
// void Random\Engine\Xoshiro256StarStar::jump()

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_JUMP
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_JUMPLONG
// ============================== OFFLINE
// ============================== ABOUT
// Efficiently move the engine ahead by 2^192 steps.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::jumpLong() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_jumplong($randomenginexoshiro256starstar)
{

// ========== RANDOMENGINEXOSHIRO256STARSTAR_JUMPLONG - BEGIN
// ===== ABOUT
// Efficiently move the engine ahead by 2^192 steps
// ===== DESCRIPTION
// Moves the algorithm’s state ahead by 2192 steps, as if Random\Engine\Xoshiro256StarStar::generate() was called 2192 times.
// The purpose of a long jump is to facilitate the creation of a new Random\Engine\Xoshiro256StarStar engine from an existing seeded Random\Engine\Xoshiro256StarStar engine. The seeded engine acts as a blueprint, which can be cloned and repeatedly jumped to create 264 non-overlapping sequences with 2192 values each.
// Long jumping may be combined with Random\Engine\Xoshiro256StarStar::jump()ing to further split each of the 264 sequences generated by long jumping, into 264 sequences of 2128 values each.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::jumpLong(): void
// ===== CODE
$randomenginexoshiro256starstar->jumpLong(

// This function has no parameters.

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Xoshiro256StarStar::jumpLong() example
// [php]
// $blueprintRng = new \Random\Engine\Xoshiro256StarStar(0);
// 
// // Each parent engine will have its own chunk of 2**192 values.
// $parent1 = clone $blueprintRng;
// $blueprintRng->jumpLong();
// 
// $parent2 = clone $blueprintRng;
// $blueprintRng->jumpLong();
// 
// // Each of the child engines will have its own chunk of 2**128 values
// // taken from their parent engine’s chunk of 2**192 values.
// $child1a = clone $parent1;
// $parent1->jump();
// $child1b = clone $parent1;
// $parent1->jump();
// 
// $child2a = clone $parent2;
// $parent2->jump();
// $child2b = clone $parent2;
// $parent2->jump();
// 
// echo "Child 1A: ", bin2hex($child1a->generate()), "\n";
// echo "Child 1B: ", bin2hex($child1b->generate()), "\n";
// echo "Child 2A: ", bin2hex($child2a->generate()), "\n";
// echo "Child 2B: ", bin2hex($child2b->generate()), "\n";
// [/php]
// The above example will output:
// [result]
// Child 1A: b4f275cb365fec99
// Child 1B: 2cd646c8ed156237
// Child 2A: eb3729a722a504e7
// Child 2B: d4208dc85bdd6dc3
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.jumplong.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_JUMPLONG - END

// SYNTAX:
// void Random\Engine\Xoshiro256StarStar::jumpLong()

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_JUMPLONG
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_SERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Serializes the Xoshiro256StarStar object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::__serialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_serialize($randomenginexoshiro256starstar)
{
$return_randomenginexoshiro256starstar_serialize = null;

// ========== RANDOMENGINEXOSHIRO256STARSTAR_SERIALIZE - BEGIN
// ===== ABOUT
// Serializes the Xoshiro256StarStar object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::__serialize(): array
// ===== CODE
$return_randomenginexoshiro256starstar_serialize = $randomenginexoshiro256starstar->__serialize(

// This function has no parameters.

); // Return Values
// array
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Xoshiro256StarStar::__serialize() example
// [php]
// 
// ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.serialize.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_SERIALIZE - END

// SYNTAX:
// array Random\Engine\Xoshiro256StarStar::__serialize()

return $return_randomenginexoshiro256starstar_serialize; // array
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_SERIALIZE
// ==============================


// ============================== BEGIN
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_UNSERIALIZE
// ============================== OFFLINE
// ============================== ABOUT
// Deserializes the data parameter into a Xoshiro256StarStar object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// Random\Engine\Xoshiro256StarStar::__unserialize() - PHP_8 >= PHP_8_2_0
// ============================== CODE
/*
function php_basic_random_randomenginexoshiro256starstar_unserialize($randomenginexoshiro256starstar, $data)
{

// ========== RANDOMENGINEXOSHIRO256STARSTAR_UNSERIALIZE - BEGIN
// ===== ABOUT
// Deserializes the data parameter into a Xoshiro256StarStar object
// ===== DESCRIPTION
// Warning: This function is currently not documented; only its argument list is available.
// ===== SUPPORTED
// PHP_8 >= PHP_8_2_0
// ===== SYNTAX
// public Random\Engine\Xoshiro256StarStar::__unserialize(array $data): void
// ===== CODE
$randomenginexoshiro256starstar->__unserialize(

$data // array $data

); // Return Values
// No value is returned.
// 
// [examples]
// Examples
// [example]
// Example #1 Random\Engine\Xoshiro256StarStar::__unserialize() example
// [php]
// 
// // ...
// 
// [/php]
// The above example will output something similar to:
// [result]
// ...
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-16)
// URL: https://www.php.net/manual/en/random-engine-xoshiro256starstar.unserialize.php
// ========== RANDOMENGINEXOSHIRO256STARSTAR_UNSERIALIZE - END

// SYNTAX:
// void Random\Engine\Xoshiro256StarStar::__unserialize(array $data)

// Return: void
}
*/
// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR_UNSERIALIZE
// ==============================


// ============================== END
// PHP_BASIC_RANDOM_RANDOMENGINEXOSHIRO256STARSTAR
// ==============================


// ============================== END
//        PHP_BASIC_RANDOM        
// ==============================
?>