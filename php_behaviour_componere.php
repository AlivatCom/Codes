<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_BEHAVIOUR_COMPONERE - BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONERE_CAST - Type php_behaviour_componere_componere_cast(Type $type, object $object)
// PHP_BEHAVIOUR_COMPONERE_COMPONERE_CAST_BY_REF - Type php_behaviour_componere_componere_cast_by_ref(Type $type, object $object)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION - Definition|Componere\Abstract\Definition|string|Componere\Method|ReflectionClass _ADDINTERFACE, _ADDMETHOD, _ADDTRAIT, _GETREFLECTOR
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION - Componere\Definition|string|array|Componere\Value|Definition|void|bool|Closure _CONSTRUCT, _ADDCONSTANT, _ADDPROPERTY, _REGISTER, _ISREGISTERED, _GETCLOSURE, _GETCLOSURES
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH - Componere\Patch|object|array|void|bool|Patch|Closure|string _CONSTRUCT, _APPLY, _REVERT, _ISAPPLIED, _DERIVE, _GETCLOSURE, _GETCLOSURES
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD - Componere\Method|Closure|Method|ReflectionMethod _CONSTRUCT, _SETPRIVATE, _SETPROTECTED, _SETSTATIC, _GETREFLECTOR
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE - Componere\Value|Value|bool _CONSTRUCT, _SETPRIVATE, _SETPROTECTED, _SETSTATIC, _ISPRIVATE, _ISPROTECTED, _ISSTATIC, _HASDEFAULT
// PHP_BEHAVIOUR_COMPONERE - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// Componere_2_1_2
// ============================== INSTALLATION
// NOT_BUNDLED (Componere source and releases are available on > github)
// ============================== USING FUNCTIONS (2)
// Componere\cast() - Componere_2 >= Componere_2_1_2
// Componere\cast_by_ref() - Componere_2 >= Componere_2_1_2
// ============================== USING CLASSES (5)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION - Componere_2
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION - Componere_2
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH - Componere_2
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD - Componere_2
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE - Componere_2
// ============================== USING DATA_TYPES (18)
// Type
// object
// Componere\Abstract\Definition - Componere_2 >= Componere_2_1_0
// ReflectionClass - Componere\Abstract\Definition
// Componere\Definition - Componere_2 >= Componere_2_1_0
// string
// array
// Componere\Value - Componere_2 >= Componere_2_1_0
// Definition - Componere\Definition
// void
// bool
// Closure - Componere\Definition
// Componere\Patch - Componere_2 >= Componere_2_1_0
// Patch - Componere\Patch
// Componere\Method - Componere_2 >= Componere_2_1_0
// Method - Componere\Method
// ReflectionMethod - Componere\Method
// Value - Componere\Value
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//    PHP_BEHAVIOUR_COMPONERE    
// ============================== ABOUT
// PHP Manual / Function Reference / Affecting PHP's Behaviour / Componere
// URL: https://www.php.net/manual/en/book.componere.php
// ============================== DESCRIPTION
// COMPONERE
// 
// COMPONERE - BEGIN
// Componere
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// THE_COMPONERE_ABSTRACT_DEFINITION_CLASS
// THE_COMPONERE_DEFINITION_CLASS
// THE_COMPONERE_PATCH_CLASS
// THE_COMPONERE_METHOD_CLASS
// THE_COMPONERE_VALUE_CLASS
// COMPONERE_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// Componere (latin, English: compose) targets production environments and provides an API for composition of classes, monkey patching, and casting.
// 
// Composition:
// Componere\Definition is used to define (or redefine) a class at runtime; The class can then be registered, and in the case of redefinition it replaces the original class for as long as the Componere\Definition exists.
// [code]
// public Componere\Definition::__construct(string $name)
// public Componere\Definition::__construct(string $name, string $parent)
// public Componere\Definition::__construct(string $name, array $interfaces)
// public Componere\Definition::__construct(string $name, string $parent, array $interfaces)
// [/code]
// 
// Patching:
// Componere\Patch is used to change the class of a specific instance of an object at runtime; Upon application the patch will remain applied for as long as the Componere\Patch exists, and can be reverted explicitly.
// [code]
// public Componere\Patch::__construct(object $instance)
// public Componere\Patch::__construct(object $instance, array $interfaces)
// [/code]
// 
// Casting:
// Componere\ casting functions can cast among user defined compatible types; Where compatible means Type is sub or super to the type of object.
// [code]
// Componere\cast(Type $type, $object): Type
// Componere\cast_by_ref(Type $type, $object): Type
// [/code]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/intro.componere.php
// INTRODUCTION - END
// 
// INSTALLING_CONFIGURING - BEGIN
// Installing/Configuring
// 
// REQUIREMENTS
// INSTALLATION
// 
// REQUIREMENTS - BEGIN
// Requirements 
// 
// Reflection is required
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/componere.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Componere source and releases are available on > github
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/componere.installation.php
// INSTALLATION - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/componere.setup.php
// INSTALLING_CONFIGURING - END
// 
// THE_COMPONERE_ABSTRACT_DEFINITION_CLASS - BEGIN
// The Componere\Abstract\Definition class
// 
// Componere_2 >= Componere_2_1_0
// 
// Introduction
// This final abstract represents a class entry, and should not be used by the programmer.
// 
// Class synopsis
// [code]
// final abstract class Componere\Abstract\Definition {
// 
//    /* Methods */
//    public addInterface(string $interface): Definition
//    public addMethod(string $name, Componere\Method $method): Definition
//    public addTrait(string $trait): Definition
//    public getReflector(): ReflectionClass
// }
// [/code]
// 
// Table of Contents
// * Componere\Abstract\Definition::addInterface - Add Interface
// * Componere\Abstract\Definition::addMethod    - Add Method
// * Componere\Abstract\Definition::addTrait     - Add Trait
// * Componere\Abstract\Definition::getReflector - Reflection
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.componere-abstract-definition.php
// THE_COMPONERE_ABSTRACT_DEFINITION_CLASS - END
// 
// THE_COMPONERE_DEFINITION_CLASS - BEGIN
// The Componere\Definition class
// 
// Componere_2 >= Componere_2_1_0
// 
// Introduction
// The Definition class allows the programmer to build and register a type at runtime.
// Should a Definition replace an existing class, the existing class will be restored when the Definition is destroyed.
// 
// Class synopsis
// [code]
// final class Componere\Definition extends Componere\Abstract\Definition {
// 
//    /* Constructors */
//    public __construct(string $name)
//    public __construct(string $name, string $parent)
//    public __construct(string $name, array $interfaces)
//    public __construct(string $name, string $parent, array $interfaces)
// 
//    /* Methods */
//    public addConstant(string $name, Componere\Value $value): Definition
//    public addProperty(string $name, Componere\Value $value): Definition
//    public register(): void
//    public isRegistered(): bool
//    public getClosure(string $name): Closure
//    public getClosures(): array
// 
//    /* Inherited methods */
//    public Componere\Abstract\Definition::addInterface(string $interface): Definition
//    public Componere\Abstract\Definition::addMethod(string $name, Componere\Method $method): Definition
//    public Componere\Abstract\Definition::addTrait(string $trait): Definition
//    public Componere\Abstract\Definition::getReflector(): ReflectionClass
// }
// [/code]
// 
// Table of Contents
// * Componere\Definition::__construct  - Definition Construction
// * Componere\Definition::addConstant  - Add Constant
// * Componere\Definition::addProperty  - Add Property
// * Componere\Definition::register     - Registration
// * Componere\Definition::isRegistered - State Detection
// * Componere\Definition::getClosure   - Get Closure
// * Componere\Definition::getClosures  - Get Closures
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.componere-definition.php
// THE_COMPONERE_DEFINITION_CLASS - END
// 
// THE_COMPONERE_PATCH_CLASS - BEGIN
// The Componere\Patch class
// 
// Componere_2 >= Componere_2_1_0
// 
// Introduction
// The Patch class allows the programmer to change the type of an instance at runtime without registering a new Definition
// When a Patch is destroyed it is reverted, so that instances that were patched during the lifetime of the Patch are restored to their formal type.
// 
// Class synopsis
// [code]
// final class Componere\Patch extends Componere\Abstract\Definition {
// 
//    /* Constructors */
//    public __construct(object $instance)
//    public __construct(object $instance, array $interfaces)
// 
//    /* Methods */
//    public apply(): void
//    public revert(): void
//    public isApplied(): bool
//    public derive(object $instance): Patch
//    public getClosure(string $name): Closure
//    public getClosures(): array
// 
//    /* Inherited methods */
//    public Componere\Abstract\Definition::addInterface(string $interface): Definition
//    public Componere\Abstract\Definition::addMethod(string $name, Componere\Method $method): Definition
//    public Componere\Abstract\Definition::addTrait(string $trait): Definition
//    public Componere\Abstract\Definition::getReflector(): ReflectionClass
// }
// [/code]
// 
// Table of Contents
// * Componere\Patch::__construct - Patch Construction
// * Componere\Patch::apply       - Application
// * Componere\Patch::revert      - Reversal
// * Componere\Patch::isApplied   - State Detection
// * Componere\Patch::derive      - Patch Derivation
// * Componere\Patch::getClosure  - Get Closure
// * Componere\Patch::getClosures - Get Closures
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.componere-patch.php
// THE_COMPONERE_PATCH_CLASS - END
// 
// THE_COMPONERE_METHOD_CLASS - BEGIN
// The Componere\Method class
// 
// Componere_2 >= Componere_2_1_0
// 
// Introduction
// A Method represents a function with modifiable accessibility flags
// 
// Class synopsis
// [code]
// final class Componere\Method {
// 
//    /* Constructor */
//    public __construct(Closure $closure)
// 
//    /* Methods */
//    public setPrivate(): Method
//    public setProtected(): Method
//    public setStatic(): Method
//    public getReflector(): ReflectionMethod
// }
// [/code]
// 
// Table of Contents
// * Componere\Method::__construct  - Method Construction
// * Componere\Method::setPrivate   - Accessibility Modification
// * Componere\Method::setProtected - Accessibility Modification
// * Componere\Method::setStatic    - Accessibility Modification
// * Componere\Method::getReflector - Reflection
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.componere-method.php
// THE_COMPONERE_METHOD_CLASS - END
// 
// THE_COMPONERE_VALUE_CLASS - BEGIN
// The Componere\Value class
// 
// Componere_2 >= Componere_2_1_0
// 
// Introduction
// A Value represents a PHP variable of all types, including undefined
// 
// Class synopsis
// [code]
// final class Componere\Value {
// 
//    /* Constructor */
//    public __construct( $default = ?)
// 
//    /* Methods */
//    public setPrivate(): Value
//    public setProtected(): Value
//    public setStatic(): Value
//    public isPrivate(): bool
//    public isProtected(): bool
//    public isStatic(): bool
//    public hasDefault(): bool
// }
// [/code]
// 
// Table of Contents
// * Componere\Value::__construct  - Value Construction
// * Componere\Value::setPrivate   - Accessibility Modification
// * Componere\Value::setProtected - Accessibility Modification
// * Componere\Value::setStatic    - Accessibility Modification
// * Componere\Value::isPrivate    - Accessibility Detection
// * Componere\Value::isProtected  - Accessibility Detection
// * Componere\Value::isStatic     - Accessibility Detection
// * Componere\Value::hasDefault   - Value Interaction
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/class.componere-value.php
// THE_COMPONERE_VALUE_CLASS - END
// 
// COMPONERE_FUNCTIONS - BEGIN
// Componere Functions
// 
// Table of Contents
// * Componere\cast        - Casting
// * Componere\cast_by_ref - Casting
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/reference.componere.php
// COMPONERE_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/book.componere.php
// COMPONERE - END
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONERE_CAST
// ============================== PUBLIC
// ============================== ABOUT
// Casting.
// ============================== SUPPORT
// Componere_2
// ============================== USING FUNCTIONS (1)
// Componere\cast() - Componere_2 >= Componere_2_1_2
// ============================== CODE
function php_behaviour_componere_componere_cast($type, $object)
{
$return_componere_cast = null;

// ========== COMPONERE_CAST - BEGIN
// ===== ABOUT
// Casting
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_2
// ===== SYNTAX
// Componere\cast(Type $type, $object): Type
// ===== CODE
$return_componere_cast = Componere\cast(

$type, // Type type - A user defined type

$object // object - An object with a user defined type compatible with Type

); // Return Values
// An object of type Type, cast from object
// 
// Errors/Exceptions
// Warning: Shall throw InvalidArgumentException if the type of object is or is derived from an internal class
// Warning: Shall throw InvalidArgumentException if Type is an interface
// Warning: Shall throw InvalidArgumentException if Type is a trait
// Warning: Shall throw InvalidArgumentException if Type is an abstract
// Warning: Shall throw InvalidArgumentException if Type is not compatible with the type of object
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/componere.cast.php
// ========== COMPONERE_CAST - END

// SYNTAX:
// Type Componere\cast(Type $type, object $object)

return $return_componere_cast; // Type
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONERE_CAST
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONERE_CAST_BY_REF
// ============================== PUBLIC
// ============================== ABOUT
// Casting.
// ============================== SUPPORT
// Componere_2
// ============================== USING FUNCTIONS (1)
// Componere\cast_by_ref() - Componere_2 >= Componere_2_1_2
// ============================== CODE
function php_behaviour_componere_componere_cast_by_ref($type, $object)
{
$return_componere_cast_by_ref = null;

// ========== COMPONERE_CAST_BY_REF - BEGIN
// ===== ABOUT
// Casting
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_2
// ===== SYNTAX
// Componere\cast_by_ref(Type $type, $object): Type
// ===== CODE
$return_componere_cast_by_ref = Componere\cast_by_ref(

$type, // Type type - A user defined type

$object // object - An object with a user defined type compatible with Type

); // Return Values
// An object of type Type, cast from object, where members are references to object members
// 
// Errors/Exceptions
// Warning: Shall throw InvalidArgumentException if the type of object is or is derived from an internal class
// Warning: Shall throw InvalidArgumentException if Type is an interface
// Warning: Shall throw InvalidArgumentException if Type is a trait
// Warning: Shall throw InvalidArgumentException if Type is an abstract
// Warning: Shall throw InvalidArgumentException if Type is not compatible with the type of object
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-14)
// URL: https://www.php.net/manual/en/componere.cast_by_ref.php
// ========== COMPONERE_CAST_BY_REF - END

// SYNTAX:
// Type Componere\cast_by_ref(Type $type, object $object)

return $return_componere_cast_by_ref; // Type
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONERE_CAST_BY_REF
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION
// ============================== PUBLIC
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDINTERFACE - Definition php_behaviour_componere_componereabstractdefinition_addinterface(Componere\Abstract\Definition $componereabstractdefinition, string $interface)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDMETHOD - Definition php_behaviour_componere_componereabstractdefinition_addmethod(Componere\Abstract\Definition $componereabstractdefinition, string $name, Componere\Method $method)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDTRAIT - Definition php_behaviour_componere_componereabstractdefinition_addtrait(Componere\Abstract\Definition $componereabstractdefinition, string $trait)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_GETREFLECTOR - ReflectionClass php_behaviour_componere_componereabstractdefinition_getreflector(Componere\Abstract\Definition $componereabstractdefinition)
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (4)
// Componere\Abstract\Definition::addInterface() - Componere_2 >= Componere_2_1_0
// Componere\Abstract\Definition::addMethod() - Componere_2 >= Componere_2_1_0
// Componere\Abstract\Definition::addTrait() - Componere_2 >= Componere_2_1_0
// Componere\Abstract\Definition::getReflector() - Componere_2 >= Componere_2_1_0
// ============================== USING DATA_TYPES (5)
// Definition - Componere\Abstract\Definition
// Componere\Abstract\Definition - Componere_2 >= Componere_2_1_0
// string
// Componere\Method - Componere_2 >= Componere_2_1_0
// ReflectionClass - Componere\Abstract\Definition
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDINTERFACE
// ============================== PUBLIC
// ============================== ABOUT
// Add Interface.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Abstract\Definition::addInterface() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componereabstractdefinition_addinterface($componereabstractdefinition, $interface)
{
$return_componereabstractdefinition_addinterface = null;

// ========== COMPONEREABSTRACTDEFINITION_ADDINTERFACE - BEGIN
// ===== ABOUT
// Add Interface
// ===== DESCRIPTION
// Shall implement the given interface on the current definition
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Abstract\Definition::addInterface(string $interface): Definition
// ===== CODE
$return_componereabstractdefinition_addinterface = $componereabstractdefinition->addInterface(

$interface // string interface - The case insensitive name of an interface

); // Return Values
// The current Definition
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-abstract-definition.addinterface.php
// ========== COMPONEREABSTRACTDEFINITION_ADDINTERFACE - END

// SYNTAX:
// Definition Componere\Abstract\Definition::addInterface(string $interface)

return $return_componereabstractdefinition_addinterface; // Definition
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDINTERFACE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDMETHOD
// ============================== PUBLIC
// ============================== ABOUT
// Add Method.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Abstract\Definition::addMethod() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componereabstractdefinition_addmethod($componereabstractdefinition, $name, $method)
{
$return_componereabstractdefinition_addmethod = null;

// ========== COMPONEREABSTRACTDEFINITION_ADDMETHOD - BEGIN
// ===== ABOUT
// Add Method
// ===== DESCRIPTION
// Shall create or override a method on the current definition.
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Abstract\Definition::addMethod(string $name, Componere\Method $method): Definition
// ===== CODE
$return_componereabstractdefinition_addmethod = $componereabstractdefinition->addMethod(

$name, // string name - The case insensitive name for method

$method // Componere\Method method - Componere\Method not previously added to another Definition

); // Return Values
// The current Definition
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// Warning: Shall throw RuntimeException if Method was added to another Definition
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-abstract-definition.addmethod.php
// ========== COMPONEREABSTRACTDEFINITION_ADDMETHOD - END

// SYNTAX:
// Definition Componere\Abstract\Definition::addMethod(string $name, Componere\Method $method)

return $return_componereabstractdefinition_addmethod; // Definition
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDMETHOD
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDTRAIT
// ============================== PUBLIC
// ============================== ABOUT
// Add Trait.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Abstract\Definition::addTrait() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componereabstractdefinition_addtrait($componereabstractdefinition, $trait)
{
$return_componereabstractdefinition_addtrait = null;

// ========== COMPONEREABSTRACTDEFINITION_ADDTRAIT - BEGIN
// ===== ABOUT
// Add Trait
// ===== DESCRIPTION
// Shall use the given trait for the current definition
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Abstract\Definition::addTrait(string $trait): Definition
// ===== CODE
$return_componereabstractdefinition_addtrait = $componereabstractdefinition->addTrait(

$trait // string trait - The case insensitive name of a trait

); // Return Values
// The current Definition
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-abstract-definition.addtrait.php
// ========== COMPONEREABSTRACTDEFINITION_ADDTRAIT - END

// SYNTAX:
// Definition Componere\Abstract\Definition::addTrait(string $trait)

return $return_componereabstractdefinition_addtrait; // Definition
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_ADDTRAIT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_GETREFLECTOR
// ============================== PUBLIC
// ============================== ABOUT
// Reflection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Abstract\Definition::getReflector() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componereabstractdefinition_getreflector($componereabstractdefinition)
{
$return_componereabstractdefinition_getreflector = null;

// ========== COMPONEREABSTRACTDEFINITION_GETREFLECTOR - BEGIN
// ===== ABOUT
// Reflection
// ===== DESCRIPTION
// Shall create or return a ReflectionClass
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Abstract\Definition::getReflector(): ReflectionClass
// ===== CODE
$return_componereabstractdefinition_getreflector = $componereabstractdefinition->getReflector(

); // Return Values
// A ReflectionClass for the current definition (cached)
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-abstract-definition.getreflector.php
// ========== COMPONEREABSTRACTDEFINITION_GETREFLECTOR - END

// SYNTAX:
// ReflectionClass Componere\Abstract\Definition::getReflector()

return $return_componereabstractdefinition_getreflector; // ReflectionClass
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION_GETREFLECTOR
// ==============================


// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREABSTRACTDEFINITION
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION
// ============================== PUBLIC
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_CONSTRUCT - Componere\Definition php_behaviour_componere_componeredefinition_construct(string $name, string $parent, array $interfaces)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ADDCONSTANT - Definition php_behaviour_componere_componeredefinition_addconstant(Componere\Definition $componeredefinition, string $name, Componere\Value $value)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ADDPROPERTY - Definition php_behaviour_componere_componeredefinition_addproperty(Componere\Definition $componeredefinition, string $name, Componere\Value $value)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_REGISTER - void php_behaviour_componere_componeredefinition_register(Componere\Definition $componeredefinition)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ISREGISTERED - bool php_behaviour_componere_componeredefinition_isregistered(Componere\Definition $componeredefinition)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_GETCLOSURE - Closure php_behaviour_componere_componeredefinition_getclosure(Componere\Definition $componeredefinition, string $name)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_GETCLOSURES - array php_behaviour_componere_componeredefinition_getclosures(Componere\Definition $componeredefinition)
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (7)
// Componere\Definition::__construct() - Componere_2 >= Componere_2_1_0
// Componere\Definition::addConstant() - Componere_2 >= Componere_2_1_0
// Componere\Definition::addProperty() - Componere_2 >= Componere_2_1_0
// Componere\Definition::register() - Componere_2 >= Componere_2_1_0
// Componere\Definition::isRegistered() - Componere_2 >= Componere_2_1_0
// Componere\Definition::getClosure() - Componere_2 >= Componere_2_1_0
// Componere\Definition::getClosures() - Componere_2 >= Componere_2_1_0
// ============================== USING DATA_TYPES (8)
// Componere\Definition - Componere_2 >= Componere_2_1_0
// string
// array
// Componere\Value - Componere_2 >= Componere_2_1_0
// Definition - Componere\Definition
// void
// bool
// Closure - Componere\Definition
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Definition Construction.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::__construct() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_construct($name, $parent, $interfaces)
{
$return_componeredefinition_construct = null;

// ========== COMPONEREDEFINITION_CONSTRUCT - BEGIN
// ===== ABOUT
// Definition Construction
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::__construct(string $name)
// 
// public Componere\Definition::__construct(string $name, string $parent)
// 
// public Componere\Definition::__construct(string $name, array $interfaces)
// 
// public Componere\Definition::__construct(string $name, string $parent, array $interfaces)
// ===== CODE
$return_componeredefinition_construct = new Componere\Definition(

$name, // string name - A case insensitive class name

$parent, // string parent - A case insensitive class name

$interfaces // array interfaces - An array of case insensitive class names

); // Return
// Componere\Definition
// 
// Exceptions
// Warning: Shall throw InvalidArgumentException if an attempt is made to replace an internal class
// Warning: Shall throw InvalidArgumentException if an attempt is made to replace an interface
// Warning: Shall throw InvalidArgumentException if an attempt is made to replace a trait
// Warning: Shall throw RuntimeException if a class in interfaces cannot be found
// Warning: Shall throw RuntimeException if an class in interfaces is not an interface
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.construct.php
// ========== COMPONEREDEFINITION_CONSTRUCT - END

// SYNTAX:
// Componere\Definition Componere\Definition::__construct(string $name, string $parent, array $interfaces)

return $return_componeredefinition_construct; // Componere\Definition
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ADDCONSTANT
// ============================== PUBLIC
// ============================== ABOUT
// Add Constant.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::addConstant() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_addconstant($componeredefinition, $name, $value)
{
$return_componeredefinition_addconstant = null;

// ========== COMPONEREDEFINITION_ADDCONSTANT - BEGIN
// ===== ABOUT
// Add Constant
// ===== DESCRIPTION
// Shall declare a class constant on the current Definition
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::addConstant(string $name, Componere\Value $value): Definition
// ===== CODE
$return_componeredefinition_addconstant = $componeredefinition->addConstant(

$name, // string name - The case sensitive name for the constant

$value // Componere\Value value - The Value for the constant, must not be undefined or static

); // Return Values
// The current Definition
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// Warning: Shall throw RuntimeException if name is already declared as a constant
// Warning: Shall throw RuntimeException if value is static
// Warning: Shall throw RuntimeException if value is undefined
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.addconstant.php
// ========== COMPONEREDEFINITION_ADDCONSTANT - END

// SYNTAX:
// Definition Componere\Definition::addConstant(string $name, Componere\Value $value)

return $return_componeredefinition_addconstant; // Definition
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ADDCONSTANT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ADDPROPERTY
// ============================== PUBLIC
// ============================== ABOUT
// Add Property.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::addProperty() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_addproperty($componeredefinition, $name, $value)
{
$return_componeredefinition_addproperty = null;

// ========== COMPONEREDEFINITION_ADDPROPERTY - BEGIN
// ===== ABOUT
// Add Property
// ===== DESCRIPTION
// Shall declare a class property on the current Definition
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::addProperty(string $name, Componere\Value $value): Definition
// ===== CODE
$return_componeredefinition_addproperty = $componeredefinition->addProperty(

$name, // string name - The case sensitive name for the property

$value // Componere\Value value - The default Value for the property

); // Return Values
// The current Definition
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// Warning: Shall throw RuntimeException if name is already declared as a property
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.addproperty.php
// ========== COMPONEREDEFINITION_ADDPROPERTY - END

// SYNTAX:
// Definition Componere\Definition::addProperty(string $name, Componere\Value $value)

return $return_componeredefinition_addproperty; // Definition
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ADDPROPERTY
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_REGISTER
// ============================== PUBLIC
// ============================== ABOUT
// Registration.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::register() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_register($componeredefinition)
{

// ========== COMPONEREDEFINITION_REGISTER - BEGIN
// ===== ABOUT
// Registration
// ===== DESCRIPTION
// Shall register the current Definition
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::register(): void
// ===== CODE
$componeredefinition->register(

); // Return
// Componere\Definition
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.register.php
// ========== COMPONEREDEFINITION_REGISTER - END

// SYNTAX:
// void Componere\Definition::register()

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_REGISTER
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ISREGISTERED
// ============================== PUBLIC
// ============================== ABOUT
// State Detection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::isRegistered() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_isregistered($componeredefinition)
{
$return_componeredefinition_isregistered = false;

// ========== COMPONEREDEFINITION_ISREGISTERED - BEGIN
// ===== ABOUT
// State Detection
// ===== DESCRIPTION
// Shall detect the registration state of this Definition
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::isRegistered(): bool
// ===== CODE
$return_componeredefinition_isregistered = $componeredefinition->isRegistered(

// Shall return true if this Definition is registered

); // Return Values
// Componere\Definition
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.isregistered.php
// ========== COMPONEREDEFINITION_ISREGISTERED - END

// SYNTAX:
// bool Componere\Definition::isRegistered()

return $return_componeredefinition_isregistered; // bool
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_ISREGISTERED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_GETCLOSURE
// ============================== PUBLIC
// ============================== ABOUT
// Get Closure.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::getClosure() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_getclosure($componeredefinition, $name)
{
$return_componeredefinition_getclosure = null;

// ========== COMPONEREDEFINITION_GETCLOSURE - BEGIN
// ===== ABOUT
// Get Closure
// ===== DESCRIPTION
// Shall return a Closure for the method specified by name
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::getClosure(string $name): Closure
// ===== CODE
$return_componeredefinition_getclosure = $componeredefinition->getClosure(

$name // string name - The case insensitive name of the method

); // Return Values
// A Closure bound to the correct scope
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// Warning: Shall throw RuntimeException if name could not be found
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.getclosure.php
// ========== COMPONEREDEFINITION_GETCLOSURE - END

// SYNTAX:
// Closure Componere\Definition::getClosure(string $name)

return $return_componeredefinition_getclosure; // Closure
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_GETCLOSURE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_GETCLOSURES
// ============================== PUBLIC
// ============================== ABOUT
// Get Closures.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Definition::getClosures() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeredefinition_getclosures($componeredefinition)
{
$return_componeredefinition_getclosures = null;

// ========== COMPONEREDEFINITION_GETCLOSURES - BEGIN
// ===== ABOUT
// Get Closures
// ===== DESCRIPTION
// Shall return an array of Closures
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Definition::getClosures(): array
// ===== CODE
$return_componeredefinition_getclosures = $componeredefinition->getClosures(

); // Return Values
// Shall return all methods as an array of Closure objects bound to the correct scope
// 
// Exceptions
// Warning: Shall throw RuntimeException if Definition was registered
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-definition.getclosures.php
// ========== COMPONEREDEFINITION_GETCLOSURES - END

// SYNTAX:
// array Componere\Definition::getClosures()

return $return_componeredefinition_getclosures; // array
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION_GETCLOSURES
// ==============================


// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREDEFINITION
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH
// ============================== PUBLIC
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_CONSTRUCT - Componere\Patch php_behaviour_componere_componerepatch_construct(Componere\Patch $componeredefinition, object $instance, array $interfaces)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_APPLY - void php_behaviour_componere_componerepatch_apply(Componere\Patch $componeredefinition)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_REVERT - void php_behaviour_componere_componerepatch_revert(Componere\Patch $componeredefinition)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_ISAPPLIED - bool php_behaviour_componere_componerepatch_isapplied(Componere\Patch $componeredefinition)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_DERIVE - Patch php_behaviour_componere_componerepatch_derive(Componere\Patch $componeredefinition, object $instance)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_GETCLOSURE - Closure php_behaviour_componere_componerepatch_getclosure(Componere\Patch $componeredefinition, string $name)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_GETCLOSURES - array php_behaviour_componere_componerepatch_getclosures(Componere\Patch $componeredefinition)
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (7)
// Componere\Patch::__construct() - Componere_2 >= Componere_2_1_0
// Componere\Patch::apply() - Componere_2 >= Componere_2_1_0
// Componere\Patch::revert() - Componere_2 >= Componere_2_1_0
// Componere\Patch::isApplied() - Componere_2 >= Componere_2_1_0
// Componere\Patch::derive() - Componere_2 >= Componere_2_1_1
// Componere\Patch::getClosure() - Componere_2 >= Componere_2_1_0
// Componere\Patch::getClosures() - Componere_2 >= Componere_2_1_0
// ============================== USING DATA_TYPES (8)
// Componere\Patch - Componere_2 >= Componere_2_1_0
// object
// array
// void
// bool
// Patch - Componere\Patch
// Closure - Componere\Patch
// string
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Patch Construction.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::__construct() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerepatch_construct($componeredefinition, $instance, $interfaces)
{
$return_componerepatch_construct = null;

// ========== COMPONEREPATCH_CONSTRUCT - BEGIN
// ===== ABOUT
// Patch Construction
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Patch::__construct(object $instance)
// 
// public Componere\Patch::__construct(object $instance, array $interfaces)
// ===== CODE
$return_componerepatch_construct = $componeredefinition->__construct(

$instance, // object instance - The target for this Patch

$interfaces // array interfaces - A case insensitive array of class names

); // Return
// Componere\Patch
// 
// Exceptions
// Warning: Shall throw RuntimeException if a class in interfaces cannot be found
// Warning: Shall throw RuntimeException if an class in interfaces is not an interface
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.construct.php
// ========== COMPONEREPATCH_CONSTRUCT - END

// SYNTAX:
// Componere\Patch Componere\Patch::__construct(object $instance, array $interfaces)

return $return_componerepatch_construct; // Componere\Patch
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_APPLY
// ============================== PUBLIC
// ============================== ABOUT
// Application.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::apply() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerepatch_apply($componeredefinition)
{

// ========== COMPONEREPATCH_APPLY - BEGIN
// ===== ABOUT
// Application
// ===== DESCRIPTION
// Shall apply the current patch
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Patch::apply(): void
// ===== CODE
$componeredefinition->apply(

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.apply.php
// ========== COMPONEREPATCH_APPLY - END

// SYNTAX:
// void Componere\Patch::apply()

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_APPLY
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_REVERT
// ============================== PUBLIC
// ============================== ABOUT
// Reversal.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::revert() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerepatch_revert($componeredefinition)
{

// ========== COMPONEREPATCH_REVERT - BEGIN
// ===== ABOUT
// Reversal
// ===== DESCRIPTION
// Shall revert the current patch
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Patch::revert(): void
// ===== CODE
$componeredefinition->revert(

); // Return
// void
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.revert.php
// ========== COMPONEREPATCH_REVERT - END

// SYNTAX:
// void Componere\Patch::revert()

// Return: void
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_REVERT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_ISAPPLIED
// ============================== PUBLIC
// ============================== ABOUT
// State Detection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::isApplied() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerepatch_isapplied($componeredefinition)
{
$return_componerepatch_isapplied = false;

// ========== COMPONEREPATCH_ISAPPLIED - BEGIN
// ===== ABOUT
// State Detection
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Patch::isApplied(): bool
// ===== CODE
$return_componerepatch_isapplied = $componeredefinition->isApplied(

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.isapplied.php
// ========== COMPONEREPATCH_ISAPPLIED - END

// SYNTAX:
// bool Componere\Patch::isApplied()

return $return_componerepatch_isapplied; // bool
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_ISAPPLIED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_DERIVE
// ============================== PUBLIC
// ============================== ABOUT
// Patch Derivation.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::derive() - Componere_2 >= Componere_2_1_1
// ============================== CODE
function php_behaviour_componere_componerepatch_derive($componeredefinition, $instance)
{
$return_componerepatch_derive = null;

// ========== COMPONEREPATCH_DERIVE - BEGIN
// ===== ABOUT
// Patch Derivation
// ===== DESCRIPTION
// Shall derive a Patch for the given instance
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_1
// ===== SYNTAX
// public Componere\Patch::derive(object $instance): Patch
// ===== CODE
$return_componerepatch_derive = $componeredefinition->derive(

$instance // object instance - The target for the derived Patch

); // Return Values
// Patch for instance derived from the current Patch
// 
// Exceptions
// Warning: Shall throw InvalidArgumentException if instance is not compatible
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.derive.php
// ========== COMPONEREPATCH_DERIVE - END

// SYNTAX:
// Patch Componere\Patch::derive(object $instance)

return $return_componerepatch_derive; // Patch
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_DERIVE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_GETCLOSURE
// ============================== PUBLIC
// ============================== ABOUT
// Get Closure.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::getClosure() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerepatch_getclosure($componeredefinition, $name)
{
$return_componerepatch_getclosure = null;

// ========== COMPONEREPATCH_GETCLOSURE - BEGIN
// ===== ABOUT
// Get Closure
// ===== DESCRIPTION
// Shall return a Closure for the method specified by name
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Patch::getClosure(string $name): Closure
// ===== CODE
$return_componerepatch_getclosure = $componeredefinition->getClosure(

$name // string name - The case insensitive name of the method

); // Return Values
// A Closure bound to the correct scope and object
// 
// Exceptions
// Warning: Shall throw RuntimeException if name could not be found
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.getclosure.php
// ========== COMPONEREPATCH_GETCLOSURE - END

// SYNTAX:
// Closure Componere\Patch::getClosure(string $name)

return $return_componerepatch_getclosure; // Closure
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_GETCLOSURE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_GETCLOSURES
// ============================== PUBLIC
// ============================== ABOUT
// Get Closures.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Patch::getClosures() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerepatch_getclosures($componeredefinition)
{
$return_componerepatch_getclosures = null;

// ========== COMPONEREPATCH_GETCLOSURES - BEGIN
// ===== ABOUT
// Get Closures
// ===== DESCRIPTION
// Shall return an array of Closures
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Patch::getClosures(): array
// ===== CODE
$return_componerepatch_getclosures = $componeredefinition->getClosures(

); // Return Values
// Shall return all methods as an array of Closure objects bound to the correct scope and object
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-patch.getclosures.php
// ========== COMPONEREPATCH_GETCLOSURES - END

// SYNTAX:
// array Componere\Patch::getClosures()

return $return_componerepatch_getclosures; // array
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH_GETCLOSURES
// ==============================


// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREPATCH
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD
// ============================== PUBLIC
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_CONSTRUCT - Componere\Method php_behaviour_componere_componeremethod_construct(Closure $closure)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETPRIVATE - Method php_behaviour_componere_componeremethod_setprivate(Componere\Method $componeremethod)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETPROTECTED - Method php_behaviour_componere_componeremethod_setprotected(Componere\Method $componeremethod)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETSTATIC - Method php_behaviour_componere_componeremethod_setstatic(Componere\Method $componeremethod)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_GETREFLECTOR - ReflectionMethod php_behaviour_componere_componeremethod_getreflector(Componere\Method $componeremethod)
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (5)
// Componere\Method::__construct() - Componere_2 >= Componere_2_1_0
// Componere\Method::setPrivate() - Componere_2 >= Componere_2_1_0
// Componere\Method::setProtected() - Componere_2 >= Componere_2_1_0
// Componere\Method::setStatic() - Componere_2 >= Componere_2_1_0
// Componere\Method::getReflector() - Componere_2 >= Componere_2_1_0
// ============================== USING DATA_TYPES (4)
// Componere\Method - Componere_2 >= Componere_2_1_0
// Closure - Componere\Method
// Method - Componere\Method
// ReflectionMethod - Componere\Method
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Method Construction.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Method::__construct() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeremethod_construct($closure)
{
$return_componeremethod_construct = null;

// ========== COMPONEREMETHOD_CONSTRUCT - BEGIN
// ===== ABOUT
// Method Construction
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Method::__construct(Closure $closure)
// ===== CODE
$return_componeremethod_construct = new Componere\Method(

$closure // Closure closure

); // Return
// Componere\Method
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-method.construct.php
// ========== COMPONEREMETHOD_CONSTRUCT - END

// SYNTAX:
// Componere\Method Componere\Method::__construct(Closure $closure)

return $return_componeremethod_construct; // Componere\Method
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETPRIVATE
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Modification.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Method::setPrivate() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeremethod_setprivate($componeremethod)
{
$return_componeremethod_setprivate = null;

// ========== COMPONEREMETHOD_SETPRIVATE - BEGIN
// ===== ABOUT
// Accessibility Modification
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Method::setPrivate(): Method
// ===== CODE
$return_componeremethod_setprivate = $componeremethod->setPrivate(

); // Return Values
// The current Method
// 
// Exceptions
// Warning: Shall throw RuntimeException if access level was previously set
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-method.setprivate.php
// ========== COMPONEREMETHOD_SETPRIVATE - END

// SYNTAX:
// Method Componere\Method::setPrivate()

return $return_componeremethod_setprivate; // Method
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETPRIVATE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETPROTECTED
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Modification.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Method::setProtected() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeremethod_setprotected($componeremethod)
{
$return_componeremethod_setprotected = null;

// ========== COMPONEREMETHOD_SETPROTECTED - BEGIN
// ===== ABOUT
// Accessibility Modification
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Method::setProtected(): Method
// ===== CODE
$return_componeremethod_setprotected = $componeremethod->setProtected(

); // Return Values
// The current Method
// 
// Exceptions
// Warning: Shall throw RuntimeException if access level was previously set
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-method.setprotected.php
// ========== COMPONEREMETHOD_SETPROTECTED - END

// SYNTAX:
// Method Componere\Method::setProtected()

return $return_componeremethod_setprotected; // Method
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETPROTECTED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETSTATIC
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Modification.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Method::setStatic() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeremethod_setstatic($componeremethod)
{
$return_componeremethod_setstatic = null;

// ========== COMPONEREMETHOD_SETSTATIC - BEGIN
// ===== ABOUT
// Accessibility Modification
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Method::setStatic(): Method
// ===== CODE
$return_componeremethod_setstatic = $componeremethod->setStatic(

); // Return Values
// The current Method
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-method.setstatic.php
// ========== COMPONEREMETHOD_SETSTATIC - END

// SYNTAX:
// Method Componere\Method::setStatic()

return $return_componeremethod_setstatic; // Method
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_SETSTATIC
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_GETREFLECTOR
// ============================== PUBLIC
// ============================== ABOUT
// Reflection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Method::getReflector() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componeremethod_getreflector($componeremethod)
{
$return_componeremethod_getreflector = null;

// ========== COMPONEREMETHOD_GETREFLECTOR - BEGIN
// ===== ABOUT
// Reflection
// ===== DESCRIPTION
// Shall create or return a ReflectionMethod
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Method::getReflector(): ReflectionMethod
// ===== CODE
$return_componeremethod_getreflector = $componeremethod->getReflector(

); // Return Values
// A ReflectionMethod for the current method (cached)
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-method.getreflector.php
// ========== COMPONEREMETHOD_GETREFLECTOR - END

// SYNTAX:
// ReflectionMethod Componere\Method::getReflector()

return $return_componeremethod_getreflector; // ReflectionMethod
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD_GETREFLECTOR
// ==============================


// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREMETHOD
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE
// ============================== PUBLIC
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_CONSTRUCT - Componere\Value php_behaviour_componere_componerevalue_construct()
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETPRIVATE - Value php_behaviour_componere_componerevalue_setprivate(Componere\Value $componerevalue)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETPROTECTED - Value php_behaviour_componere_componerevalue_setprotected(Componere\Value $componerevalue)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETSTATIC - Value php_behaviour_componere_componerevalue_setstatic(Componere\Value $componerevalue)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISPRIVATE - bool php_behaviour_componere_componerevalue_isprivate(Componere\Value $componerevalue)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISPROTECTED - bool php_behaviour_componere_componerevalue_isprotected(Componere\Value $componerevalue)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISSTATIC - bool php_behaviour_componere_componerevalue_isstatic(Componere\Value $componerevalue)
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_HASDEFAULT - bool php_behaviour_componere_componerevalue_hasdefault(Componere\Value $componerevalue)
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (8)
// Componere\Value::__construct() - Componere_2 >= Componere_2_1_0
// Componere\Value::setPrivate() - Componere_2 >= Componere_2_1_0
// Componere\Value::setProtected() - Componere_2 >= Componere_2_1_0
// Componere\Value::setStatic() - Componere_2 >= Componere_2_1_0
// Componere\Value::isPrivate() - Componere_2 >= Componere_2_1_0
// Componere\Value::isProtected() - Componere_2 >= Componere_2_1_0
// Componere\Value::isStatic() - Componere_2 >= Componere_2_1_0
// Componere\Value::hasDefault() - Componere_2 >= Componere_2_1_0
// ============================== USING DATA_TYPES (3)
// Componere\Value - Componere_2 >= Componere_2_1_0
// Value - Componere\Value
// bool
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_CONSTRUCT
// ============================== PUBLIC
// ============================== ABOUT
// Value Construction.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::__construct() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_construct()
{
$return_componerevalue_construct = null;

// ========== COMPONEREVALUE_CONSTRUCT - BEGIN
// ===== ABOUT
// Value Construction
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::__construct( $default = ?)
// ===== CODE
$return_componerevalue_construct = new Componere\Value(

// default

); // Return
// Componere\Value
// 
// Exceptions
// Warning: Shall throw InvalidArgumentException if default does not have a suitable value
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.construct.php
// ========== COMPONEREVALUE_CONSTRUCT - END

// SYNTAX:
// Componere\Value Componere\Value::__construct()

return $return_componerevalue_construct; // Componere\Value
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETPRIVATE
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Modification.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::setPrivate() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_setprivate($componerevalue)
{
$return_componerevalue_setprivate = null;

// ========== COMPONEREVALUE_SETPRIVATE - BEGIN
// ===== ABOUT
// Accessibility Modification
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::setPrivate(): Value
// ===== CODE
$return_componerevalue_setprivate = $componerevalue->setPrivate(

); // Return Values
// The current Value
// 
// Exceptions
// Warning: Shall throw RuntimeException if access level was previously set
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.setprivate.php
// ========== COMPONEREVALUE_SETPRIVATE - END

// SYNTAX:
// Value Componere\Value::setPrivate()

return $return_componerevalue_setprivate; // Value
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETPRIVATE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETPROTECTED
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Modification.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::setProtected() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_setprotected($componerevalue)
{
$return_componerevalue_setprotected = null;

// ========== COMPONEREVALUE_SETPROTECTED - BEGIN
// ===== ABOUT
// Accessibility Modification
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::setProtected(): Value
// ===== CODE
$return_componerevalue_setprotected = $componerevalue->setProtected(

); // Return Values
// The current Value
// 
// Exceptions
// Warning: Shall throw RuntimeException if access level was previously set
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.setprotected.php
// ========== COMPONEREVALUE_SETPROTECTED - END

// SYNTAX:
// Value Componere\Value::setProtected()

return $return_componerevalue_setprotected; // Value
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETPROTECTED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETSTATIC
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Modification.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::setStatic() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_setstatic($componerevalue)
{
$return_componerevalue_setstatic = null;

// ========== COMPONEREVALUE_SETSTATIC - BEGIN
// ===== ABOUT
// Accessibility Modification
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::setStatic(): Value
// ===== CODE
$return_componerevalue_setstatic = $componerevalue->setStatic(

); // Return Values
// The current Value
// ===== LITERATURE_SOURCESs
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.setstatic.php
// ========== COMPONEREVALUE_SETSTATIC - END

// SYNTAX:
// Value Componere\Value::setStatic()

return $return_componerevalue_setstatic; // Value
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_SETSTATIC
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISPRIVATE
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Detection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::isPrivate() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_isprivate($componerevalue)
{
$return_componerevalue_isprivate = false;

// ========== COMPONEREVALUE_ISPRIVATE - BEGIN
// ===== ABOUT
// Accessibility Detection
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::isPrivate(): bool
// ===== CODE
$return_componerevalue_isprivate = $componerevalue->isPrivate(

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.isprivate.php
// ========== COMPONEREVALUE_ISPRIVATE - END

// SYNTAX:
// bool Componere\Value::isPrivate()

return $return_componerevalue_isprivate; // bool
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISPRIVATE
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISPROTECTED
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Detection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::isProtected() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_isprotected($componerevalue)
{
$return_componerevalue_isprotected = false;

// ========== COMPONEREVALUE_ISPROTECTED - BEGIN
// ===== ABOUT
// Accessibility Detection
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::isProtected(): bool
// ===== CODE
$return_componerevalue_isprotected = $componerevalue->isProtected(

); // Return
// Componere\Value
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.isprotected.php
// ========== COMPONEREVALUE_ISPROTECTED - END

// SYNTAX:
// bool Componere\Value::isProtected()

return $return_componerevalue_isprotected; // bool
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISPROTECTED
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISSTATIC
// ============================== PUBLIC
// ============================== ABOUT
// Accessibility Detection.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::isStatic() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_isstatic($componerevalue)
{
$return_componerevalue_isstatic = false;

// ========== COMPONEREVALUE_ISSTATIC - BEGIN
// ===== ABOUT
// Accessibility Detection
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::isStatic(): bool
// ===== CODE
$return_componerevalue_isstatic = $componerevalue->isStatic(

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.isstatic.php
// ========== COMPONEREVALUE_ISSTATIC - END

// SYNTAX:
// bool Componere\Value::isStatic()

return $return_componerevalue_isstatic; // bool
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_ISSTATIC
// ==============================


// ============================== BEGIN
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_HASDEFAULT
// ============================== PUBLIC
// ============================== ABOUT
// Value Interaction.
// ============================== SUPPORT
// Componere_2
// ============================== USING SUBCLASSES (1)
// Componere\Value::hasDefault() - Componere_2 >= Componere_2_1_0
// ============================== CODE
function php_behaviour_componere_componerevalue_hasdefault($componerevalue)
{
$return_componerevalue_hasdefault = false;

// ========== COMPONEREVALUE_HASDEFAULT - BEGIN
// ===== ABOUT
// Value Interaction
// ===== DESCRIPTION
// ===== SUPPORTED
// Componere_2 >= Componere_2_1_0
// ===== SYNTAX
// public Componere\Value::hasDefault(): bool
// ===== CODE
$return_componerevalue_hasdefault = $componerevalue->hasDefault(

); // Return
// bool
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-11-23)
// URL: https://www.php.net/manual/en/componere-value.hasdefault.php
// ========== COMPONEREVALUE_HASDEFAULT - END

// SYNTAX:
// bool Componere\Value::hasDefault()

return $return_componerevalue_hasdefault; // bool
}
// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE_HASDEFAULT
// ==============================


// ============================== END
// PHP_BEHAVIOUR_COMPONERE_COMPONEREVALUE
// ==============================


// ============================== END
//    PHP_BEHAVIOUR_COMPONERE    
// ==============================
?>