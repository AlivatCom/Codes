<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATE_DATETIME - BEGIN
// PHP_DATE_DATETIME_CHECKDATE - bool php_date_datetime_checkdate(int $month, int $day, int $year)
// OFFLINE | PHP_DATE_DATETIME_DATE_ADD - DateTime php_date_datetime_date_add(DateTime $object, DateInterval $interval)
// OFFLINE | PHP_DATE_DATETIME_DATE_CREATE_FROM_FORMAT - DateTime|false php_date_datetime_date_create_from_format(string $format, string $datetime, DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATE_CREATE_IMMUTABLE_FROM_FORMAT - DateTimeImmutable|false php_date_datetime_date_create_immutable_from_format(string $format, string $datetime, DateTimeZone $timezone = null)
// PHP_DATE_DATETIME_DATE_CREATE_IMMUTABLE - DateTimeImmutable|false php_date_datetime_date_create_immutable(string $datetime = "now", DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATE_CREATE - DateTime|false php_date_datetime_date_create(string $datetime = "now", DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATE_DATE_SET - DateTime php_date_datetime_date_date_set(DateTime $object, int $year, int $month, int $day)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_DATE_DEFAULT_TIMEZONE_GET - string php_date_datetime_timezone_date_default_timezone_get()
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_DATE_DEFAULT_TIMEZONE_SET - bool php_date_datetime_timezone_date_default_timezone_set(string $timezoneId)
// OFFLINE | PHP_DATE_DATETIME_DATE_DIFF - DateInterval php_date_datetime_date_diff(DateTimeInterface $datetime, DateTimeInterface $targetObject, bool $absolute = false)
// OFFLINE | PHP_DATE_DATETIME_DATE_FORMAT - string php_date_datetime_date_format(DateTimeInterface $object, string $format)
// OFFLINE | PHP_DATE_DATETIME_DATE_GET_LAST_ERRORS - array|false php_date_datetime_date_get_last_errors()
// OFFLINE | PHP_DATE_DATETIME_DATE_INTERVAL_CREATE_FROM_DATE_STRING - DateInterval|false php_date_datetime_date_interval_create_from_date_string(string $datetime)
// OFFLINE | PHP_DATE_DATETIME_DATE_INTERVAL_FORMAT - string php_date_datetime_date_interval_format(string $format)
// OFFLINE | PHP_DATE_DATETIME_DATE_ISODATE_SET - DateTime php_date_datetime_date_isodate_set(DateTime $object, int $year, int $week, int $dayOfWeek = 1)
// OFFLINE | PHP_DATE_DATETIME_DATE_MODIFY - DateTime|false php_date_datetime_date_modify(DateTime $object, string $modifier)
// OFFLINE | PHP_DATE_DATETIME_DATE_OFFSET_GET - int php_date_datetime_date_offset_get(DateTimeInterface $object)
// OFFLINE | PHP_DATE_DATETIME_DATE_PARSE_FROM_FORMAT - array php_date_datetime_date_parse_from_format(string $format, string $datetime)
// OFFLINE | PHP_DATE_DATETIME_DATE_PARSE - array php_date_datetime_date_parse(string $datetime)
// OFFLINE | PHP_DATE_DATETIME_DATE_SUB - DateTime php_date_datetime_date_sub(DateTime $object, DateInterval $interval)
// OFFLINE | PHP_DATE_DATETIME_DATE_SUN_INFO - array php_date_datetime_date_sun_info(int $timestamp, float $latitude, float $longitude)
// OFFLINE | PHP_DATE_DATETIME_DATE_SUNRISE - string|int|float|false php_date_datetime_date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $utcOffset = null)
// OFFLINE | PHP_DATE_DATETIME_DATE_SUNSET - string|int|float|false php_date_datetime_date_sunset(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $utcOffset = null)
// OFFLINE | PHP_DATE_DATETIME_DATE_TIME_SET - DateTime php_date_datetime_date_time_set(DateTime $object, int $hour, int $minute, int $second = 0, int $microsecond = 0)
// OFFLINE | PHP_DATE_DATETIME_DATE_TIMESTAMP_GET - int php_date_datetime_date_timestamp_get(DateTimeInterface $object)
// OFFLINE | PHP_DATE_DATETIME_DATE_TIMESTAMP_SET - DateTime php_date_datetime_date_timestamp_set(DateTime $object, int $timestamp)
// OFFLINE | PHP_DATE_DATETIME_DATE_TIMEZONE_GET - DateTimeZone|false php_date_datetime_date_timezone_get(DateTimeInterface $object)
// OFFLINE | PHP_DATE_DATETIME_DATE_TIMEZONE_SET - DateTime php_date_datetime_date_timezone_set(DateTime $object, DateTimeZone $timezone)
// PHP_DATE_DATETIME_DATE - string php_date_datetime_date(string $format, int $timestamp = null)
// PHP_DATE_DATETIME_GETDATE - array php_date_datetime_getdate(int $timestamp = null)
// PHP_DATE_DATETIME_GETTIMEOFDAY - array|float php_date_datetime_gettimeofday(bool $as_float = false)
// PHP_DATE_DATETIME_GMDATE - string php_date_datetime_gmdate(string $format, int $timestamp = null)
// PHP_DATE_DATETIME_GMMKTIME - int|false php_date_datetime_gmmktime(int $hour, int $minute = null, int $second = null, int $month = null, int $day = null, int $year = null)
// OFFLINE | PHP_DATE_DATETIME_GMSTRFTIME - string|false php_date_datetime_gmstrftime(string $format, int $timestamp = null)
// OFFLINE | PHP_DATE_DATETIME_IDATE - int|false php_date_datetime_idate(string $format, int $timestamp = null)
// PHP_DATE_DATETIME_LOCALTIME - array php_date_datetime_localtime(int $timestamp = null, bool $associative = false)
// PHP_DATE_DATETIME_MICROTIME - string|float php_date_datetime_microtime(bool $as_float = false)
// PHP_DATE_DATETIME_MKTIME - int|false php_date_datetime_mktime(int $hour, int $minute = null, int $second = null, int $month = null, int $day = null, int $year = null)
// PHP_DATE_DATETIME_STRFTIME - string|false php_date_datetime_strftime(string $format, int $timestamp = null)
// OFFLINE | PHP_DATE_DATETIME_STRPTIME - array|false php_date_datetime_strptime(string $timestamp, string $format)
// PHP_DATE_DATETIME_STRTOTIME - int|false php_date_datetime_strtotime(string $datetime, int $baseTimestamp = null)
// PHP_DATE_DATETIME_TIME - int php_date_datetime_time()
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_ABBREVIATIONS_LIST - array php_date_datetime_timezone_abbreviations_list()
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_IDENTIFIERS_LIST - array php_date_datetime_timezone_identifiers_list(int $timezoneGroup, string $countryCode = null)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_LOCATION_GET - array|false php_date_datetime_timezone_location_get(DateTimeZone $object)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_NAME_FROM_ABBR - string|false php_date_datetime_timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_NAME_GET - string php_date_datetime_timezone_name_get(DateTimeZone $object)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_OFFSET_GET - int php_date_datetime_timezone_offset_get(DateTimeZone $object, DateTimeInterface $datetime)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_OPEN - DateTimeZone|false php_date_datetime_timezone_open(string $timezone)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_TRANSITIONS_GET - array|false php_date_datetime_timezone_transitions_get(DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX)
// OFFLINE | PHP_DATE_DATETIME_TIMEZONE_VERSION_GET - string php_date_datetime_timezone_version_get()
// OFFLINE | PHP_DATE_DATETIME_DATETIME - DateTime|DateInterval|string|DateTimeZone|false|static|DateTimeImmutable|DateTimeInterface|array|int _ADD, _CONSTRUCT, _CREATEFROMFORMAT, _CREATEFROMIMMUTABLE, _CREATEFROMINTERFACE, _GETLASTERRORS, _MODIFY, _SET_STATE, _SETDATE, _SETISODATE, _SETTIME, _SETTIMESTAMP, _SETTIMEZONE, _SUB
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE - DateTimeImmutable|DateInterval|string|DateTimeZone|false|DateTimeInterface|static|DateTime|array|int _ADD, _CONSTRUCT, _CREATEFROMFORMAT, _CREATEFROMINTERFACE, _CREATEFROMMUTABLE, _GETLASTERRORS, _MODIFY, _SET_STATE, _SETDATE, _SETISODATE, _SETTIME, _SETTIMESTAMP, _SETTIMEZONE, _SUB
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE - DateTimeZone|string|array|false|int|DateTimeInterface _CONSTRUCT, _GETLOCATION, _GETNAME, _GETOFFSET, _GETTRANSITIONS, _LISTABBREVIATIONS, _LISTIDENTIFIERS
// OFFLINE | PHP_DATE_DATETIME_DATEINTERVAL - DateInterval|string|false _CONSTRUCT, _CREATEFROMDATESTRING, _FORMAT
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD - DatePeriod|DateTimeInterface|DateInterval|int|static|string _CONSTRUCT, _CREATEFROMISO8601STRING, _GETDATEINTERVAL, _GETENDDATE, _GETRECURRENCES, _GETSTARTDATE
// PHP_DATE_DATETIME - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// CORE (No installation needed to use these functions; they are part of the PHP core)
// ============================== USING FUNCTIONS (51)
// checkdate() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | date_add() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_create_from_format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_create_immutable_from_format() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// date_create_immutable() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | date_create() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_date_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_default_timezone_get() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// OFFLINE | date_default_timezone_set() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// OFFLINE | date_diff() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_format() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_get_last_errors() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_interval_create_from_date_string() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_interval_format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_isodate_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_modify() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_offset_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_parse_from_format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_parse() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_sub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_sun_info() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8
// OFFLINE | date_sunrise() - PHP_5, PHP_7, PHP_8
// OFFLINE | date_sunset() - PHP_5, PHP_7, PHP_8
// OFFLINE | date_time_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_timestamp_get() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_timestamp_set() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | date_timezone_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | date_timezone_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// date() - PHP_4, PHP_5, PHP_7, PHP_8
// getdate() - PHP_4, PHP_5, PHP_7, PHP_8
// gettimeofday() - PHP_4, PHP_5, PHP_7, PHP_8
// gmdate() - PHP_4, PHP_5, PHP_7, PHP_8
// gmmktime() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | gmstrftime() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | idate() - PHP_5, PHP_7, PHP_8
// localtime() - PHP_4, PHP_5, PHP_7, PHP_8
// microtime() - PHP_4, PHP_5, PHP_7, PHP_8
// mktime() - PHP_4, PHP_5, PHP_7, PHP_8
// strftime() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | strptime() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// strtotime() - PHP_4, PHP_5, PHP_7, PHP_8
// time() - PHP_4, PHP_5, PHP_7, PHP_8
// OFFLINE | timezone_abbreviations_list() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | timezone_identifiers_list() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | timezone_location_get() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | timezone_name_from_abbr() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// OFFLINE | timezone_name_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | timezone_offset_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | timezone_open() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | timezone_transitions_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | timezone_version_get() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== USING CLASSES (5)
// OFFLINE | PHP_DATE_DATETIME_DATETIME - PHP_5 - PHP_8
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE - PHP_5 - PHP_8
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE - PHP_5 - PHP_8
// OFFLINE | PHP_DATE_DATETIME_DATEINTERVAL - PHP_5 - PHP_8
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD - PHP_5 - PHP_8
// ============================== USING DATA_TYPES (13)
// bool
// int
// OFFLINE | DateTime - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateInterval - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// false
// string
// OFFLINE | DateTimeZone - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeInterface - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// array
// float
// static
// OFFLINE | DatePeriod - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//       PHP_DATE_DATETIME       
// ============================== ABOUT
// PHP Manual / Function Reference / Date and Time Related Extensions / Date/Time - Date and Time
// URL: https://www.php.net/manual/en/book.datetime.php
// ============================== DESCRIPTION
// DATE_AND_TIME
// 
// DATE_AND_TIME - BEGIN
// Date and Time
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// THE_DATETIME_CLASS
// THE_DATETIMEIMMUTABLE_CLASS
// THE_DATETIMEINTERFACE_INTERFACE
// THE_DATETIMEZONE_CLASS
// THE_DATEINTERVAL_CLASS
// THE_DATEPERIOD_CLASS
// DATE_TIME_FUNCTIONS
// DATE_TIME_ERRORS_AND_EXCEPTIONS
// SUPPORTED_DATE_AND_TIME_FORMATS
// LIST_OF_SUPPORTED_TIMEZONES
// THE_DATEERROR_CLASS
// THE_DATEOBJECTERROR_CLASS
// THE_DATERANGEERROR_CLASS
// THE_DATEEXCEPTION_CLASS
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The DateTimeImmutable and related classes allow you represent date/time information. The objects can be created by passing in a string presentation of date/time information, or from the current system's time.
// A rich set of methods is supplied to modify and format this information as well, including handling timezones and DST transitions.
// The date/time features in PHP implements the ISO 8601 calendar, which is a > proleptic Gregorian calendar which implements the current leap-day rules from before the Gregorian calendar was in place, and also includes the year 0 as the year number in between -1 BCE and 1 CE. Leap seconds are not supported.
// The date and time information is internally stored as a 64-bit number so all conceivably useful dates (including negative years) are supported. The range is from about 292 billion years in the past to the same in the future.
// Note: The timezones referenced in this section can be found in the List of Supported Timezones.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/intro.datetime.php
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
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// There is no installation needed to use these functions; they are part of the PHP core.
//  Note: Getting the latest timezone database
//  The latest version of the timezone database can be installed via PECL's > timezonedb.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// The behaviour of these functions is affected by settings in php.ini.
// 
// Date/Time Configuration Options
// Name                   | Default     | Changeable  | Changelog
// date.default_latitude  | "31.7667"   | PHP_INI_ALL |
// date.default_longitude | "35.2333"   | PHP_INI_ALL |
// date.sunrise_zenith    | "90.833333" | PHP_INI_ALL | Prior to PHP 8.0.0, the default was "90.583333"
// date.sunset_zenith     | "90.833333" | PHP_INI_ALL | Prior to PHP 8.0.0, the default was "90.583333"
// date.timezone          | "UTC"       | PHP_INI_ALL | From PHP 8.2, a warning is emitted when setting this to an invalid value or an empty string.
// 
// For further details and definitions of the PHP_INI_* modes, see the Where a configuration setting may be set.
// Here's a short explanation of the configuration directives.
// 
// date.default_latitude float  - The default latitude ranging from 0 at the equator, to +90 northward, and -90 southward.
// date.default_longitude float - The default longitude ranging from 0 at the prime meridian to +180 eastward and −180 westward.
// date.sunrise_zenith float    - The default sunrise zenith.
// The default value is 90°50'. The additional 50' is due to two components: the Sun's radius, which is 16', and the atmospheric refraction, which is 34'.
// date.sunset_zenith float     - The default sunset zenith.
// date.timezone string         - The default timezone used by all date/time functions. The precedence order for which timezone is used if none is explicitly mentioned is described in the date_default_timezone_get() page. See List of Supported Timezones for a list of supported timezones.
// Note: The first four configuration options are currently only used by date_sunrise() and date_sunset().
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The DATE_ constants are defined and they offer standard date representations, which can be used along with the date format functions (like date()).
// Following constants specify a format returned by functions date_sunrise() and date_sunset().
// SUNFUNCS_RET_TIMESTAMP (int) - Timestamp
// SUNFUNCS_RET_STRING (int)    - Hours:minutes (example: 08:02)
// SUNFUNCS_RET_DOUBLE (int)    - Hours as floating point number (example 8.75)
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples
// 
// DATE_TIME_ARITHMETIC
// 
// DATE_TIME_ARITHMETIC - BEGIN
// Date/Time Arithmetic
// 
// The following examples show some pitfalls of Date/Time arithmetic with regard to DST transitions and months having different numbers of days.
// [example]
// Example #1 DateTimeImmutable::add/sub add intervals which cover elapsed time
// Adding PT24H over a DST transition will appear to add 23/25 hours (for most timezones).
// [php]
// $dt = new DateTimeImmutable("2015-11-01 00:00:00", new DateTimeZone("America/New_York"));
// echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// $dt = $dt->add(new DateInterval("PT3H"));
// echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// Start: 2015-11-01 00:00:00 -04:00
// End:   2015-11-01 02:00:00 -05:00
// [/result]
// [/example]
// [example]
// Example #2 DateTimeImmutable::modify and strtotime increment or decrement individual component values
// Adding +24 hours over a DST transition will add exactly 24 hours as seen in the date/time string (unless the start or end time is on a transition point).
// [php]
// $dt = new DateTimeImmutable("2015-11-01 00:00:00", new DateTimeZone("America/New_York"));
// echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// $dt = $dt->modify("+24 hours");
// echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// Start: 2015-11-01 00:00:00 -04:00
// End:   2015-11-02 00:00:00 -05:00
// [/result]
// [/example]
// [example]
// Example #3 Adding or subtracting times can over- or underflow dates
// Like where January 31st + 1 month will result in March 2nd (leap year) or 3rd (normal year).
// [php]
// echo "Normal year:\n"; // February has 28 days
// $dt = new DateTimeImmutable("2015-01-31 00:00:00", new DateTimeZone("America/New_York"));
// echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// $dt = $dt->modify("+1 month");
// echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// 
// echo "Leap year:\n"; // February has 29 days
// $dt = new DateTimeImmutable("2016-01-31 00:00:00", new DateTimeZone("America/New_York"));
// echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// $dt = $dt->modify("+1 month");
// echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// Normal year:
// Start: 2015-01-31 00:00:00 -05:00
// End:   2015-03-03 00:00:00 -05:00
// Leap year:
// Start: 2016-01-31 00:00:00 -05:00
// End:   2016-03-02 00:00:00 -05:00
// [/result]
// To get the last day of the next month (i.e. to prevent the overflow), the last day of format is available.
// [php]
// echo "Normal year:\n"; // February has 28 days
// $dt = new DateTimeImmutable("2015-01-31 00:00:00", new DateTimeZone("America/New_York"));
// echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// $dt = $dt->modify("last day of next month");
// echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// 
// echo "Leap year:\n"; // February has 29 days
// $dt = new DateTimeImmutable("2016-01-31 00:00:00", new DateTimeZone("America/New_York"));
// echo "Start: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// $dt = $dt->modify("last day of next month");
// echo "End:   ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// Normal year:
// Start: 2015-01-31 00:00:00 -05:00
// End:   2015-02-28 00:00:00 -05:00
// Leap year:
// Start: 2016-01-31 00:00:00 -05:00
// End:   2016-02-29 00:00:00 -05:00
// [/result]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.examples-arithmetic.php
// DATE_TIME_ARITHMETIC - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.examples.php
// EXAMPLES - END
// 
// THE_DATETIME_CLASS - BEGIN
// The DateTime class
// 
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// 
// Introduction
// Representation of date and time.
// This class behaves the same as DateTimeImmutable, except objects are modified itself when modification methods such as DateTime::modify() are called.
// Warning: Calling methods on objects of the class DateTime will change the information encapsulated in these objects, if you want to prevent that you will have to use clone operator to create a new object. Use DateTimeImmutable instead of DateTime to obtain this recommended behaviour by default.
// 
// Class synopsis
// [code]
// class DateTime implements DateTimeInterface {
// 
//    /* Inherited constants */
//    public const string DateTimeInterface::ATOM = "Y-m-d\\TH:i:sP";
//    public const string DateTimeInterface::COOKIE = "l, d-M-Y H:i:s T";
//    public const string DateTimeInterface::ISO8601 = "Y-m-d\\TH:i:sO";
//    public const string DateTimeInterface::ISO8601_EXPANDED = "X-m-d\\TH:i:sP";
//    public const string DateTimeInterface::RFC822 = "D, d M y H:i:s O";
//    public const string DateTimeInterface::RFC850 = "l, d-M-y H:i:s T";
//    public const string DateTimeInterface::RFC1036 = "D, d M y H:i:s O";
//    public const string DateTimeInterface::RFC1123 = "D, d M Y H:i:s O";
//    public const string DateTimeInterface::RFC7231 = "D, d M Y H:i:s \\G\\M\\T";
//    public const string DateTimeInterface::RFC2822 = "D, d M Y H:i:s O";
//    public const string DateTimeInterface::RFC3339 = "Y-m-d\\TH:i:sP";
//    public const string DateTimeInterface::RFC3339_EXTENDED = "Y-m-d\\TH:i:s.vP";
//    public const string DateTimeInterface::RSS = "D, d M Y H:i:s O";
//    public const string DateTimeInterface::W3C = "Y-m-d\\TH:i:sP";
// 
//    /* Methods */
//    public __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
//    public add(DateInterval $interval): DateTime
//    public static createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false
//    public static createFromImmutable(DateTimeImmutable $object): static
//    public static createFromInterface(DateTimeInterface $object): DateTime
//    public modify(string $modifier): DateTime|false
//    public static __set_state(array $array): DateTime
//    public setDate(int $year, int $month, int $day): DateTime
//    public setISODate(int $year, int $week, int $dayOfWeek = 1): DateTime
//    spublic setTime(
//        int $hour,
//        int $minute,
//        int $second = 0,
//        int $microsecond = 0
//    ): DateTime
//    public setTimestamp(int $timestamp): DateTime
//    public setTimezone(DateTimeZone $timezone): DateTime
//    public sub(DateInterval $interval): DateTime
//    public diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
//    public format(string $format): string
//    public getOffset(): int
//    public getTimestamp(): int
//    public getTimezone(): DateTimeZone|false
//    public __wakeup(): void
// }
// [/code]
// 
// Changelog
// Version - Description
// 7.2.0   - The class constants of DateTime are now defined on DateTimeInterface.
// 7.1.0   - The DateTime constructor now includes the current microseconds in the constructed value. Before this, it would always initialise the microseconds to 0.
// 
// Table of Contents
// * DateTime::add                 - Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds
// * DateTime::__construct         - Returns new DateTime object
// * DateTime::createFromFormat    - Parses a time string according to a specified format
// * DateTime::createFromImmutable - Returns new DateTime instance encapsulating the given DateTimeImmutable object
// * DateTime::createFromInterface - Returns new DateTime object encapsulating the given DateTimeInterface object
// * DateTime::getLastErrors       - Alias of DateTimeImmutable::getLastErrors
// * DateTime::modify              - Alters the timestamp
// * DateTime::__set_state         - The __set_state handler
// * DateTime::setDate             - Sets the date
// * DateTime::setISODate          - Sets the ISO date
// * DateTime::setTime             - Sets the time
// * DateTime::setTimestamp        - Sets the date and time based on an Unix timestamp
// * DateTime::setTimezone         - Sets the time zone for the DateTime object
// * DateTime::sub                 - Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/class.datetime.php
// THE_DATETIME_CLASS - END
// 
// THE_DATETIMEIMMUTABLE_CLASS - BEGIN
// The DateTimeImmutable class
// 
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// 
// Introduction
// Representation of date and time.
// This class behaves the same as DateTime except new objects are returned when modification methods such as DateTime::modify() are called.
// 
// Class synopsis
// [code]
// class DateTimeImmutable implements DateTimeInterface {
// 
//    /* Inherited constants */
//    public const string DateTimeInterface::ATOM = "Y-m-d\\TH:i:sP";
//    public const string DateTimeInterface::COOKIE = "l, d-M-Y H:i:s T";
//    public const string DateTimeInterface::ISO8601 = "Y-m-d\\TH:i:sO";
//    public const string DateTimeInterface::ISO8601_EXPANDED = "X-m-d\\TH:i:sP";
//    public const string DateTimeInterface::RFC822 = "D, d M y H:i:s O";
//    public const string DateTimeInterface::RFC850 = "l, d-M-y H:i:s T";
//    public const string DateTimeInterface::RFC1036 = "D, d M y H:i:s O";
//    public const string DateTimeInterface::RFC1123 = "D, d M Y H:i:s O";
//    public const string DateTimeInterface::RFC7231 = "D, d M Y H:i:s \\G\\M\\T";
//    public const string DateTimeInterface::RFC2822 = "D, d M Y H:i:s O";
//    public const string DateTimeInterface::RFC3339 = "Y-m-d\\TH:i:sP";
//    public const string DateTimeInterface::RFC3339_EXTENDED = "Y-m-d\\TH:i:s.vP";
//    public const string DateTimeInterface::RSS = "D, d M Y H:i:s O";
//    public const string DateTimeInterface::W3C = "Y-m-d\\TH:i:sP";
// 
//    /* Methods */
//    public __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
//    public add(DateInterval $interval): DateTimeImmutable
//    public static createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTimeImmutable|false
//    public static createFromInterface(DateTimeInterface $object): DateTimeImmutable
//    public static createFromMutable(DateTime $object): static
//    public static getLastErrors(): array|false
//    public modify(string $modifier): DateTimeImmutable|false
//    public static __set_state(array $array): DateTimeImmutable
//    public setDate(int $year, int $month, int $day): DateTimeImmutable
//    public setISODate(int $year, int $week, int $dayOfWeek = 1): DateTimeImmutable
//    public setTime(
//        int $hour,
//        int $minute,
//        int $second = 0,
//        int $microsecond = 0
//    ): DateTimeImmutable
//    public setTimestamp(int $timestamp): DateTimeImmutable
//    public setTimezone(DateTimeZone $timezone): DateTimeImmutable
//    public sub(DateInterval $interval): DateTimeImmutable
//    public diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
//    public format(string $format): string
//    public getOffset(): int
//    public getTimestamp(): int
//    public getTimezone(): DateTimeZone|false
//    public __wakeup(): void
// }
// [/code]
// 
// Changelog
// Version - Description
// 7.1.0   - The DateTimeImmutable constructor now includes the current microseconds in the constructed value. Before this, it would always initialise the microseconds to 0.
// 
// Table of Contents
// * DateTimeImmutable::add                 - Returns a new object, with added amount of days, months, years, hours, minutes and seconds
// * DateTimeImmutable::__construct         - Returns new DateTimeImmutable object
// * DateTimeImmutable::createFromFormat    - Parses a time string according to a specified format
// * DateTimeImmutable::createFromInterface - Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object
// * DateTimeImmutable::createFromMutable   - Returns new DateTimeImmutable instance encapsulating the given DateTime object
// * DateTimeImmutable::getLastErrors       - Returns the warnings and errors
// * DateTimeImmutable::modify              - Creates a new object with modified timestamp
// * DateTimeImmutable::__set_state         - The __set_state handler
// * DateTimeImmutable::setDate             - Sets the date
// * DateTimeImmutable::setISODate          - Sets the ISO date
// * DateTimeImmutable::setTime             - Sets the time
// * DateTimeImmutable::setTimestamp        - Sets the date and time based on a Unix timestamp
// * DateTimeImmutable::setTimezone         - Sets the time zone
// * DateTimeImmutable::sub                 - Subtracts an amount of days, months, years, hours, minutes and seconds
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/class.datetimeimmutable.php
// THE_DATETIMEIMMUTABLE_CLASS - END
// 
// THE_DATETIMEINTERFACE_INTERFACE - BEGIN
// The DateTimeInterface interface
// 
// DATETIMEINTERFACE_DIFF
// DATETIMEINTERFACE_FORMAT
// DATETIMEINTERFACE_GETOFFSET
// DATETIMEINTERFACE_GETTIMESTAMP
// DATETIMEINTERFACE_GETTIMEZONE
// DATETIME_WAKEUP
// 
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// 
// Introduction
// DateTimeInterface was created so that parameter, return, or property type declarations may accept either DateTimeImmutable or DateTime as a value. It is not possible to implement this interface with userland classes.
// Common constants that allow for formatting DateTimeImmutable or DateTime objects through DateTimeImmutable::format() and DateTime::format() are also defined on this interface.
// 
// Interface synopsis
// [code]
// interface DateTimeInterface {
// 
//    /* Constants */
//    public const string ATOM = "Y-m-d\\TH:i:sP";
//    public const string COOKIE = "l, d-M-Y H:i:s T";
//    public const string ISO8601 = "Y-m-d\\TH:i:sO";
//    public const string ISO8601_EXPANDED = "X-m-d\\TH:i:sP";
//    public const string RFC822 = "D, d M y H:i:s O";
//    public const string RFC850 = "l, d-M-y H:i:s T";
//    public const string RFC1036 = "D, d M y H:i:s O";
//    public const string RFC1123 = "D, d M Y H:i:s O";
//    public const string RFC7231 = "D, d M Y H:i:s \\G\\M\\T";
//    public const string RFC2822 = "D, d M Y H:i:s O";
//    public const string RFC3339 = "Y-m-d\\TH:i:sP";
//    public const string RFC3339_EXTENDED = "Y-m-d\\TH:i:s.vP";
//    public const string RSS = "D, d M Y H:i:s O";
//    public const string W3C = "Y-m-d\\TH:i:sP";
// 
//    /* Methods */
//    public diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
//    public format(string $format): string
//    public getOffset(): int
//    public getTimestamp(): int
//    public getTimezone(): DateTimeZone|false
//    public __wakeup(): void
// }
// [code]
// 
// Predefined Constants
// DateTimeInterface::ATOM , DATE_ATOM                         - Atom (example: 2005-08-15T15:52:01+00:00)
// DateTimeInterface::COOKIE , DATE_COOKIE                     - HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
// DateTimeInterface::ISO8601 , DATE_ISO8601                   - ISO-8601 (example: 2005-08-15T15:52:01+0000)
// Note: This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons. Use DateTimeInterface::ISO8601_EXPANDED, DateTimeInterface::ATOM for compatibility with ISO-8601 instead. (ref ISO8601:2004 section 4.3.3 clause d)
// DateTimeInterface::ISO8601_EXPANDED , DATE_ISO8601_EXPANDED - ISO-8601 Expanded (example: +10191-07-26T08:59:52+01:00)
// Note: This format allows for year ranges outside of ISO-8601's normal range of 0000-9999 by always including a sign character. It also addresses that that timezone part (+01:00) is compatible with ISO-8601.
// DateTimeInterface::RFC822 , DATE_RFC822                     - RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
// DateTimeInterface::RFC850 , DATE_RFC850                     - RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
// DateTimeInterface::RFC1036 , DATE_RFC1036                   - RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
// DateTimeInterface::RFC1123 , DATE_RFC1123                   - RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
// DateTimeInterface::RFC7231 , DATE_RFC7231                   - RFC 7231 (since PHP 7.0.19 and 7.1.5) (example: Sat, 30 Apr 2016 17:52:13 GMT)
// DateTimeInterface::RFC2822 , DATE_RFC2822                   - RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
// DateTimeInterface::RFC3339 , DATE_RFC3339                   - Same as DATE_ATOM
// DateTimeInterface::RFC3339_EXTENDED , DATE_RFC3339_EXTENDED - RFC 3339 EXTENDED format (example: 2005-08-15T15:52:01.000+00:00)
// DateTimeInterface::RSS , DATE_RSS                           - RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
// DateTimeInterface::W3C , DATE_W3C                           - World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
// 
// Changelog
// Version - Description
// 8.2.0   - The constant DateTimeInterface::ISO8601_EXPANDED was added.
// 7.2.0   - The class constants of DateTime are now defined on DateTimeInterface.
// 
// Table of Contents
// * DateTimeInterface::diff         - Returns the difference between two DateTime objects
// * DateTimeInterface::format       - Returns date formatted according to given format
// * DateTimeInterface::getOffset    - Returns the timezone offset
// * DateTimeInterface::getTimestamp - Gets the Unix timestamp
// * DateTimeInterface::getTimezone  - Return time zone relative to given DateTime
// * DateTime::__wakeup              - The __wakeup handler
// 
// DATETIMEINTERFACE_DIFF - BEGIN
// DateTimeInterface::diff
// DateTimeImmutable::diff
// DateTime::diff
// date_diff
// 
// ===== ABOUT
// Returns the difference between two DateTime objects
// ===== DESCRIPTION
// Returns the difference between two DateTimeInterface objects.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// public DateTimeImmutable::diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// public DateTime::diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// 
// Procedural style
// date_diff(DateTimeInterface $baseObject, DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// ===== CODE
// DateTimeInterface datetime - The date to compare to.

// bool absolute - Should the interval be forced to be positive?

// Return Values
// The DateInterval object represents the difference between the two dates.
// The return value more specifically represents the clock-time interval to apply to the original object ($this or $originObject) to arrive at the $targetObject. This process is not always reversible.
// The method is aware of DST changeovers, and hence can return an interval of 24 hours and 30 minutes, as per one of the examples. If you want to calculate with absolute time, you need to convert both the $this/$baseObject, and $targetObject to UTC first.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::diff() example
// Object-oriented style
// [php]
// $origin = new DateTimeImmutable('2009-10-11');
// $target = new DateTimeImmutable('2009-10-13');
// $interval = $origin->diff($target);
// echo $interval->format('%R%a days');
// [/php]
// Procedural style
// [php]
// $origin = date_create('2009-10-11');
// $target = date_create('2009-10-13');
// $interval = date_diff($origin, $target);
// echo $interval->format('%R%a days');
// [/php]
// The above examples will output:
// [result]
// +2 days
// [/result]
// [/example]
// [example]
// Example #2 DateTimeInterface::diff() during DST changeover
// [php]
// $originalTime = new DateTimeImmutable("2021-10-30 09:00:00 Europe/London");
// $targedTime = new DateTimeImmutable("2021-10-31 08:30:00 Europe/London");
// $interval = $originalTime->diff($targedTime);
// echo $interval->format("%H:%I:%S (Full days: %a)"), "\n";
// [/php]
// The above example will output:
// [result]
// 24:30:00 (Full days: 0)
// [/result]
// [/example]
// [example]
// Example #3 DateTimeInterface::diff() range
// The value that the method returns is the exact amount of time to get from $this to $targetObject. Comparing January 1st to December 31st returns therefore 364, and not 365, days (for non-leap years).
// [php]
// $originalTime = new DateTimeImmutable("2023-01-01 UTC");
// $targedTime = new DateTimeImmutable("2023-12-31 UTC");
// $interval = $originalTime->diff($targedTime);
// echo "Full days: ", $interval->format("%a"), "\n";
// [/php]
// The above example will output:
// [result]
// Full days: 364
// [/result]
// [/example]
// [example]
// Example #4 DateTime object comparison
// Note: DateTimeImmutable and DateTime objects can be compared using comparison operators.
// [php]
// $date1 = new DateTime("now");
// $date2 = new DateTime("tomorrow");
// 
// var_dump($date1 == $date2);
// var_dump($date1 < $date2);
// var_dump($date1 > $date2);
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetime.diff.php
// DATETIMEINTERFACE_DIFF - END
// 
// DATETIMEINTERFACE_FORMAT - BEGIN
// DateTimeInterface::format
// DateTimeImmutable::format
// DateTime::format
// date_format
// 
// ===== ABOUT
// Returns date formatted according to given format
// ===== DESCRIPTION
// Returns date formatted according to given format.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::format(string $format): string
// public DateTimeImmutable::format(string $format): string
// public DateTime::format(string $format): string
// 
// Procedural style
// date_format(DateTimeInterface $object, string $format): string
// ===== CODE
// DateTimeInterface object - Procedural style only: A DateTime object returned by date_create()

// string format - The format of the outputted date string. See the formatting options below. There are also several predefined date constants that may be used instead, so for example DATE_RSS contains the format string 'D, d M Y H:i:s'.
// 
// The following characters are recognized in the format parameter string
// format character  - Description - Example returned values
// Day               - ---                                                               - ---
// d                 - Day of the month, 2 digits with leading zeros                     - 01 to 31
// D                 - A textual representation of a day, three letters                  - Mon through Sun
// j                 - Day of the month without leading zeros                            - 1 to 31
// l (lowercase 'L') - A full textual representation of the day of the week              - Sunday through Saturday
// N                 - ISO 8601 numeric representation of the day of the week            - 1 (for Monday) through 7 (for Sunday)
// S                 - English ordinal suffix for the day of the month, 2 characters     - st, nd, rd or th. Works well with j
// w                 - Numeric representation of the day of the week                     - 0 (for Sunday) through 6 (for Saturday)
// z                 - The day of the year (starting from 0)                             - 0 through 365
// Week              - ---                                                               - ---
// W                 - ISO 8601 week number of year, weeks starting on Monday            - Example: 42 (the 42nd week in the year)
// Month             - ---                                                               - ---
// F                 - A full textual representation of a month, such as January or March - January through December
// m                 - Numeric representation of a month, with leading zeros             - 01 through 12
// M                 - A short textual representation of a month, three letters          - Jan through Dec
// n                 - Numeric representation of a month, without leading zeros          - 1 through 12
// t                 - Number of days in the given month                                 - 28 through 31
// Year              - ---                                                               - ---
// L                 - Whether it's a leap year                                          - 1 if it is a leap year, 0 otherwise.
// o                 - ISO 8601 week-numbering year. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. - Examples: 1999 or 2003
// X                 - An expanded full numeric representation of a year, at least 4 digits, with - for years BCE, and + for years CE. - Examples: -0055, +0787, +1999, +10191
// x                 - An expanded full numeric representation if required, or a standard full numeral representation if possible (like Y). At least four digits. Years BCE are prefixed with a -. Years beyond (and including) 10000 are prefixed by a +. - Examples: -0055, 0787, 1999, +10191
// Y                 - A full numeric representation of a year, at least 4 digits, with - for years BCE. - Examples: -0055, 0787, 1999, 2003, 10191
// y                 - A two digit representation of a year                              - Examples: 99 or 03
// Time              - ---                                                               - ---
// a                 - Lowercase Ante meridiem and Post meridiem                         - am or pm
// A                 - Uppercase Ante meridiem and Post meridiem                         - AM or PM
// B                 - Swatch Internet time                                              - 000 through 999
// g                 - 12-hour format of an hour without leading zeros                   - 1 through 12
// G                 - 24-hour format of an hour without leading zeros                   - 0 through 23
// h                 - 12-hour format of an hour with leading zeros                      - 01 through 12
// H                 - 24-hour format of an hour with leading zeros                      - 00 through 23
// i                 - Minutes with leading zeros                                        - 00 to 59
// s                 - Seconds with leading zeros                                        - 00 through 59
// u                 - Microseconds. Note that date() will always generate 000000 since it takes an int parameter, whereas DateTime::format() does support microseconds if DateTime was created with microseconds. - Example: 654321
// v                 - Milliseconds. Same note applies as for u.                         - Example: 654
// Timezone          - ---                                                               - ---
// e                 - Timezone identifier                                               - Examples: UTC, GMT, Atlantic/Azores
// I (capital i)     - Whether or not the date is in daylight saving time                - 1 if Daylight Saving Time, 0 otherwise.
// O                 - Difference to Greenwich time (GMT) without colon between hours and minutes - Example: +0200
// P                 - Difference to Greenwich time (GMT) with colon between hours and minutes - Example: +02:00
// p                 - The same as P, but returns Z instead of +00:00 (available as of PHP 8.0.0) - Examples: Z or +02:00
// T                 - Timezone abbreviation, if known; otherwise the GMT offset.        - Examples: EST, MDT, +05
// Z                 - Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. - -43200 through 50400
// Full Date/Time    - ---                                                               - ---
// c                 - ISO 8601 date                                                     - 2004-02-12T15:19:21+00:00
// r                 - > RFC 2822/> RFC 5322 formatted date                              - Example: Thu, 21 Dec 2000 16:01:07 +0200
// U                 - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)        - See also time()
// Unrecognized characters in the format string will be printed as-is. The Z format will always return 0 when using gmdate().
// Note: Since this function only accepts int timestamps the u format character is only useful when using the date_format() function with user based timestamps created with date_create().
// 
// Return Values
// Returns the formatted date string on success.
// 
// Changelog
// Version - Description
// 8.2.0   - The format characters X and x have been added.
// 8.0.0   - The format character p has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeInterface::format() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2000-01-01');
// echo $date->format('Y-m-d H:i:s');
// [/php]
// Procedural style
// [php]
// $date = date_create('2000-01-01');
// echo date_format($date, 'Y-m-d H:i:s');
// [/php]
// The above example will output:
// [result]
// 2000-01-01 00:00:00
// [/result]
// [/example]
// [example]
// Example #2 More examples
// [php]
// // set the default timezone to use.
// date_default_timezone_set('UTC');
// 
// // now
// $date = new DateTimeImmutable();
// 
// // Prints something like: Wednesday
// echo $date->format('l'), "\n";
// 
// // Prints something like: Wednesday 19th of October 2022 08:40:48 AM
// echo $date->format('l jS \o\f F Y h:i:s A'), "\n";
// 
// // use the constants in the format parameter
// // prints something like: Wed, 19 Oct 2022 08:40:48 +0000
// echo $date->format(DateTimeInterface::RFC2822), "\n";
// [/php]
// You can prevent a recognized character in the format string from being expanded by escaping it with a preceding backslash. If the character with a backslash is already a special sequence, you may need to also escape the backslash.
// [/example]
// [example]
// Example #3 Escaping characters while formatting
// [php]
// $date = new DateTimeImmutable();
// 
// // prints something like: Wednesday the 19th
// echo $date->format('l \t\h\e jS');
// [/php]
// To format dates in other languages, IntlDateFormatter::format() can be used instead of DateTimeInterface::format().
// [/example]
// [/examples]
// 
// Notes
// This method does not use locales. All output is in English.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetime.format.php
// DATETIMEINTERFACE_FORMAT - END
// 
// DATETIMEINTERFACE_GETOFFSET - BEGIN
// DateTimeInterface::getOffset
// DateTimeImmutable::getOffset
// DateTime::getOffset
// date_offset_get
// 
// ===== ABOUT
// Returns the timezone offset
// ===== DESCRIPTION
// Returns the timezone offset.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::getOffset(): int
// public DateTimeImmutable::getOffset(): int
// public DateTime::getOffset(): int
// 
// Procedural style
// date_offset_get(DateTimeInterface $object): int
// ===== CODE
// DateTimeInterface object - Procedural style only: A DateTime object returned by date_create()
// 
// Return Values
// Returns the timezone offset in seconds from UTC on success.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::getOffset() example
// Object-oriented style
// [php]
// $winter = new DateTimeImmutable('2010-12-21', new DateTimeZone('America/New_York'));
// $summer = new DateTimeImmutable('2008-06-21', new DateTimeZone('America/New_York'));
// 
// echo $winter->getOffset() . "\n";
// echo $summer->getOffset() . "\n";
// [/php]
// Procedural style
// [php]
// $winter = date_create('2010-12-21', timezone_open('America/New_York'));
// $summer = date_create('2008-06-21', timezone_open('America/New_York'));
// 
// echo date_offset_get($winter) . "\n";
// echo date_offset_get($summer) . "\n";
// [/php]
// The above examples will output:
// [result]
// -18000
// -14400
// [/result]
// Note: -18000 = -5 hours, -14400 = -4 hours.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetime.getoffset.php
// DATETIMEINTERFACE_GETOFFSET - END
// 
// DATETIMEINTERFACE_GETTIMESTAMP - BEGIN
// DateTimeInterface::getTimestamp
// DateTimeImmutable::getTimestamp
// DateTime::getTimestamp
// date_timestamp_get
// 
// ===== ABOUT
// Gets the Unix timestamp
// ===== DESCRIPTION
// Gets the Unix timestamp.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::getTimestamp(): int
// public DateTimeImmutable::getTimestamp(): int
// public DateTime::getTimestamp(): int
// 
// Procedural style
// date_timestamp_get(DateTimeInterface $object): int
// ===== CODE
// This function has no parameters.
// 
// Return Values
// Returns the Unix timestamp representing the date.
// 
// Errors/Exceptions
// If the timestamp cannot be represented as int, a DateRangeError is thrown. Prior to PHP 8.3.0, a ValueError is thrown. And, prior to PHP 8.0.0, false was returned in this case. Still, the timestamp can be retrieved as string by using DateTimeInterface::format() with the U format.
// 
// Changelog
// Version - Description
// 8.3.0   - The out-of-range exception is now DateRangeError.
// 8.0.0   - These functions no longer return false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::getTimestamp() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// echo $date->getTimestamp();
// [/php]
// Procedural style
// [php]
// $date = date_create();
// echo date_timestamp_get($date);
// [/php]
// The above examples will output something similar to:
// [result]
// 1272509157
// [/result]
// If you need to retrieve the timestamp with millisecond or microsecond resolution, then you can use the DateTimeInterface::format() function.
// [/example]
// [example]
// Example #2 Retrieving timestamp with milli and microsecond resolution
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// $milli = (int)$date->format('Uv'); // Timestamp in milliseconds
// $micro = (int)$date->format('Uu'); // Timestamp in microseconds
// 
// echo $milli, "\n", $micro, "\n";
// [/php]
// The above examples will output something similar to:
// [result]
// 1674057635586
// 1674057635586918
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetime.gettimestamp.php
// DATETIMEINTERFACE_GETTIMESTAMP - END
// 
// DATETIMEINTERFACE_GETTIMEZONE - BEGIN
// DateTimeInterface::getTimezone
// DateTimeImmutable::getTimezone
// DateTime::getTimezone
// date_timezone_get
// 
// ===== ABOUT
// Return time zone relative to given DateTime
// ===== DESCRIPTION
// Return time zone relative to given DateTime.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::getTimezone(): DateTimeZone|false
// public DateTimeImmutable::getTimezone(): DateTimeZone|false
// public DateTime::getTimezone(): DateTimeZone|false
// 
// Procedural style
// date_timezone_get(DateTimeInterface $object): DateTimeZone|false
// ===== CODE
// DateTimeInterface object - Procedural style only: A DateTime object returned by date_create()
// 
// Return Values
// Returns a DateTimeZone object on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::getTimezone() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable(null, new DateTimeZone('Europe/London'));
// $tz = $date->getTimezone();
// echo $tz->getName();
// [/php]
// Procedural style
// [php]
// $date = date_create(null, timezone_open('Europe/London'));
// $tz = date_timezone_get($date);
// echo timezone_name_get($tz);
// [/php]
// The above examples will output:
// [result]
// Europe/London
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetime.gettimezone.php
// DATETIMEINTERFACE_GETTIMEZONE - END
// 
// DATETIME_WAKEUP - BEGIN
// DateTime::__wakeup
// DateTimeImmutable::__wakeup
// DateTimeInterface::__wakeup
// 
// ===== ABOUT
// The __wakeup handler
// ===== DESCRIPTION
// The __wakeup() handler.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTime::__wakeup(): void
// public DateTimeImmutable::__wakeup(): void
// public DateTimeInterface::__wakeup(): void
// ===== CODE
// This function has no parameters.
// 
// Return Values
// Initializes a DateTime object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetime.wakeup.php
// DATETIME_WAKEUP - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/class.datetimeinterface.php
// THE_DATETIMEINTERFACE_INTERFACE - END
// 
// THE_DATETIMEZONE_CLASS - BEGIN
// The DateTimeZone class
// 
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// 
// Introduction
// Representation of time zone.
// 
// Class synopsis
// [code]
// class DateTimeZone {
// 
//    /* Constants */
//    public const int AFRICA;
//    public const int AMERICA;
//    public const int ANTARCTICA;
//    public const int ARCTIC;
//    public const int ASIA;
//    public const int ATLANTIC;
//    public const int AUSTRALIA;
//    public const int EUROPE;
//    public const int INDIAN;
//    public const int PACIFIC;
//    public const int UTC;
//    public const int ALL;
//    public const int ALL_WITH_BC;
//    public const int PER_COUNTRY;
// 
//    /* Methods */
//    public __construct(string $timezone)
//    public getLocation(): array|false
//    public getName(): string
//    public getOffset(DateTimeInterface $datetime): int
//    public getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false
//    public static listAbbreviations(): array
//    public static listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array
// }
// [/code]
// 
// Predefined Constants
// DateTimeZone::AFRICA      - Africa time zones.
// DateTimeZone::AMERICA     - America time zones.
// DateTimeZone::ANTARCTICA  - Antarctica time zones.
// DateTimeZone::ARCTIC      - Arctic time zones.
// DateTimeZone::ASIA        - Asia time zones.
// DateTimeZone::ATLANTIC    - Atlantic time zones.
// DateTimeZone::AUSTRALIA   - Australia time zones.
// DateTimeZone::EUROPE      - Europe time zones.
// DateTimeZone::INDIAN      - Indian time zones.
// DateTimeZone::PACIFIC     - Pacific time zones.
// DateTimeZone::UTC         - UTC time zones.
// DateTimeZone::ALL         - All time zones.
// DateTimeZone::ALL_WITH_BC - All time zones including backwards compatible.
// DateTimeZone::PER_COUNTRY - Time zones per country.
// 
// Table of Contents
// * DateTimeZone::__construct       - Creates new DateTimeZone object
// * DateTimeZone::getLocation       - Returns location information for a timezone
// * DateTimeZone::getName           - Returns the name of the timezone
// * DateTimeZone::getOffset         - Returns the timezone offset from GMT
// * DateTimeZone::getTransitions    - Returns all transitions for the timezone
// * DateTimeZone::listAbbreviations - Returns associative array containing dst, offset and the timezone name
// * DateTimeZone::listIdentifiers   - Returns a numerically indexed array containing all defined timezone identifiers
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/class.datetimezone.php
// THE_DATETIMEZONE_CLASS - END
// 
// THE_DATEINTERVAL_CLASS - BEGIN
// The DateInterval class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// 
// Introduction
// Represents a date interval.
// A date interval stores either a fixed amount of time (in years, months, days, hours etc) or a relative time string in the format that DateTimeImmutable's and DateTime's constructors support.
// More specifically, the information in an object of the DateInterval class is an instruction to get from one date/time to another date/time. This process is not always reversible.
// A common way to create a DateInterval object is by calculating the difference between two date/time objects through DateTimeInterface::diff().
// Since there is no well defined way to compare date intervals, DateInterval instances are incomparable.
// 
// Class synopsis
// [code]
// class DateInterval {
// 
//    /* Properties */
//    public int $y;
//    public int $m;
//    public int $d;
//    public int $h;
//    public int $i;
//    public int $s;
//    public float $f;
//    public int $invert;
//    public mixed $days;
//    public bool $from_string;
//    public string $date_string;
// 
//    /* Methods */
//    public __construct(string $duration)
//    public static createFromDateString(string $datetime): DateInterval|false
//    public format(string $format): string
// }
// [/code]
// 
// Properties
// Warning: The available properties listed below depend on PHP version, and should be considered as readonly.
// y           - Number of years.
// m           - Number of months.
// d           - Number of days.
// h           - Number of hours.
// i           - Number of minutes.
// s           - Number of seconds.
// f           - Number of microseconds, as a fraction of a second.
// invert      - Is 1 if the interval represents a negative time period and 0 otherwise. See DateInterval::format().
// days        - If the DateInterval object was created by DateTimeImmutable::diff() or DateTime::diff(), then this is the total number of full days between the start and end dates. Otherwise, days will be false.
// from_string - If the DateInterval object was created by DateInterval::createFromDateString(), then this property's value will be true, and the date_string property will be populated. Otherwise, the value will be false, and the y to f, invert, and days properties will be populated.
// date_string - The string used as argument to DateInterval::createFromDateString().
// 
// Changelog
// Version - Description
// 8.2.0   - The from_string and date_string properties were added for DateInterval instances that were created using the DateInterval::createFromDateString() method.
// 8.2.0   - Only the y to f, invert, and days will be visible.
// 7.4.0   - DateInterval instances are incomparable now; previously, all DateInterval instances were considered equal.
// 7.1.0   - The f property was added.
// 
// Table of Contents
// * DateInterval::__construct          - Creates a new DateInterval object
// * DateInterval::createFromDateString - Sets up a DateInterval from the relative parts of the string
// * DateInterval::format               - Formats the interval
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/class.dateinterval.php
// THE_DATEINTERVAL_CLASS - END
// 
// THE_DATEPERIOD_CLASS - BEGIN
// The DatePeriod class
// 
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// 
// Introduction
// Represents a date period.
// A date period allows iteration over a set of dates and times, recurring at regular intervals, over a given period.
// 
// Class synopsis
// [code]
// class DatePeriod implements IteratorAggregate {
// 
//    /* Constants */
//    public const int EXCLUDE_START_DATE;
//    public const int INCLUDE_END_DATE;
// 
//    /* Properties */
//    public readonly ?DateTimeInterface $start;
//    public readonly ?DateTimeInterface $current;
//    public readonly ?DateTimeInterface $end;
//    public readonly ?DateInterval $interval;
//    public readonly int $recurrences;
//    public readonly bool $include_start_date;
//    public readonly bool $include_end_date;
// 
//    /* Methods */
//    public __construct(
//        DateTimeInterface $start,
//        DateInterval $interval,
//        int $recurrences,
//        int $options = 0
//    )
//    public __construct(
//        DateTimeInterface $start,
//        DateInterval $interval,
//        DateTimeInterface $end,
//        int $options = 0
//    )
//    public __construct(string $isostr, int $options = 0)
//    public getDateInterval(): DateInterval
//    public getEndDate(): ?DateTimeInterface
//    public getRecurrences(): ?int
//    public getStartDate(): DateTimeInterface
// }
// [/code]
// 
// Predefined Constants
// DatePeriod::EXCLUDE_START_DATE - Exclude start date, used in DatePeriod::__construct().
// DatePeriod::INCLUDE_END_DATE   - Include end date, used in DatePeriod::__construct().
// 
// Properties
// recurrences        - The minimum amount of instances as retured by the iterator.
//  If the number of recurrences has been explicitly passed through the recurrences parameter in the constructor of the DatePeriod instance, then this property contains this value, plus one if the start date has not been disabled through DatePeriod::EXCLUDE_START_DATE, plus one if the end date has been enabled through DatePeriod::INCLUDE_END_DATE.
//  If the number of recurrences has not been explicitly passed, then this property contains the minimum number of returned instances. This would be 0, plus one if the start date has not been disabled through DatePeriod::EXCLUDE_START_DATE, plus one if the end date has been enabled through DatePeriod::INCLUDE_END_DATE.
//  [php]
//  $start = new DateTime('2018-12-31 00:00:00');
//  $end   = new DateTime('2021-12-31 00:00:00');
//  $interval = new DateInterval('P1M');
//  $recurrences = 5;
//  
//  // recurrences explicitly set through the constructor
//  $period = new DatePeriod($start, $interval, $recurrences, DatePeriod::EXCLUDE_START_DATE);
//  echo $period->recurrences, "\n";
//  
//  $period = new DatePeriod($start, $interval, $recurrences);
//  echo $period->recurrences, "\n";
//  
//  $period = new DatePeriod($start, $interval, $recurrences, DatePeriod::INCLUDE_END_DATE);
//  echo $period->recurrences, "\n";
//  
//  // recurrences not set in the constructor
//  $period = new DatePeriod($start, $interval, $end);
//  echo $period->recurrences, "\n";
//  
//  $period = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);
//  echo $period->recurrences, "\n";
//  [/php]
//  The above example will output:
//  [result]
//  
//  5
//  6
//  7
//  1
//  0
//  [/result]
//  See also DatePeriod::getRecurrences().
// include_end_date   - Whether to include the end date in the set of recurring dates or not.
// include_start_date - Whether to include the start date in the set of recurring dates or not.
// start              - The start date of the period.
// current            - During iteration this will contain the current date within the period.
// end                - The end date of the period.
// interval           - An ISO 8601 repeating interval specification.
// 
// Changelog
// Version - Description
// 8.2.0   - The DatePeriod::INCLUDE_END_DATE constant and include_end_date property have been added.
// 8.0.0   - DatePeriod implements IteratorAggregate now. Previously, Traversable was implemented instead.
// 
// Table of Contents
// * DatePeriod::__construct             - Creates a new DatePeriod object
// * DatePeriod::createFromISO8601String - Creates a new DatePeriod object from an ISO8601 string
// * DatePeriod::getDateInterval         - Gets the interval
// * DatePeriod::getEndDate              - Gets the end date
// * DatePeriod::getRecurrences          - Gets the number of recurrences
// * DatePeriod::getStartDate            - Gets the start date
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/class.dateperiod.php
// THE_DATEPERIOD_CLASS - END
// 
// DATE_TIME_FUNCTIONS - BEGIN
// Date/Time Functions
// 
// Table of Contents
// * checkdate                             - Validate a Gregorian date
// * date_add                              - Alias of DateTime::add
// * date_create_from_format               - Alias of DateTime::createFromFormat
// * date_create_immutable_from_format     - Alias of DateTimeImmutable::createFromFormat
// * date_create_immutable                 - create a new DateTimeImmutable object
// * date_create                           - create a new DateTime object
// * date_date_set                         - Alias of DateTime::setDate
// * date_default_timezone_get             - Gets the default timezone used by all date/time functions in a script
// * date_default_timezone_set             - Sets the default timezone used by all date/time functions in a script
// * date_diff                             - Alias of DateTime::diff
// * date_format                           - Alias of DateTime::format
// * date_get_last_errors                  - Alias of DateTimeImmutable::getLastErrors
// * date_interval_create_from_date_string - Alias of DateInterval::createFromDateString
// * date_interval_format                  - Alias of DateInterval::format
// * date_isodate_set                      - Alias of DateTime::setISODate
// * date_modify                           - Alias of DateTime::modify
// * date_offset_get                       - Alias of DateTime::getOffset
// * date_parse_from_format                - Get info about given date formatted according to the specified format
// * date_parse                            - Returns associative array with detailed info about given date/time
// * date_sub                              - Alias of DateTime::sub
// * date_sun_info                         - Returns an array with information about sunset/sunrise and twilight begin/end
// * date_sunrise                          - Returns time of sunrise for a given day and location
// * date_sunset                           - Returns time of sunset for a given day and location
// * date_time_set                         - Alias of DateTime::setTime
// * date_timestamp_get                    - Alias of DateTime::getTimestamp
// * date_timestamp_set                    - Alias of DateTime::setTimestamp
// * date_timezone_get                     - Alias of DateTime::getTimezone
// * date_timezone_set                     - Alias of DateTime::setTimezone
// * date                                  - Format a Unix timestamp
// * getdate                               - Get date/time information
// * gettimeofday                          - Get current time
// * gmdate                                - Format a GMT/UTC date/time
// * gmmktime                              - Get Unix timestamp for a GMT date
// * gmstrftime                            - Format a GMT/UTC time/date according to locale settings
// * idate                                 - Format a local time/date part as integer
// * localtime                             - Get the local time
// * microtime                             - Return current Unix timestamp with microseconds
// * mktime                                - Get Unix timestamp for a date
// * strftime                              - Format a local time/date according to locale settings
// * strptime                              - Parse a time/date generated with strftime
// * strtotime                             - Parse about any English textual datetime description into a Unix timestamp
// * time                                  - Return current Unix timestamp
// * timezone_abbreviations_list           - Alias of DateTimeZone::listAbbreviations
// * timezone_identifiers_list             - Alias of DateTimeZone::listIdentifiers
// * timezone_location_get                 - Alias of DateTimeZone::getLocation
// * timezone_name_from_abbr               - Returns a timezone name by guessing from abbreviation and UTC offset
// * timezone_name_get                     - Alias of DateTimeZone::getName
// * timezone_offset_get                   - Alias of DateTimeZone::getOffset
// * timezone_open                         - Alias of DateTimeZone::__construct
// * timezone_transitions_get              - Alias of DateTimeZone::getTransitions
// * timezone_version_get                  - Gets the version of the timezonedb
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/ref.datetime.php
// DATE_TIME_FUNCTIONS - END
// 
// DATE_TIME_ERRORS_AND_EXCEPTIONS - BEGIN
// Date/Time Errors and Exceptions
// 
// THE_DATEERROR_CLASS (extends ERROR)
// ERROR
// THE_DATEEXCEPTION_CLASS (extends EXCEPTION)
// EXCEPTION
// 
// * DateError (extends Error)
//  * DateObjectError DateRangeError
// 
// * DateException (extends Exception)
//  ** DateInvalidOperationException
//   * DateInvalidTimezoneException
//   * DateMalformedIntervalStringException
//   * DateMalformedPeriodStringException
//   * DateMalformedStringException
// 
// THE_DATEERROR_CLASS - BEGIN
// The DateError class
// 
// THE_DATEOBJECTERROR_CLASS
// THE_DATERANGEERROR_CLASS
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when the timezone database is not found, or contains invalid data.
// This error should never occur, and is not dependent on code. There are two child-exceptions (DateObjectError and DateRangeError) which are thrown depending on programmer error or range related issues.
// 
// Class synopsis
// [code]
// class DateError extends Error {
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
// THE_DATEOBJECTERROR_CLASS - BEGIN
// The DateObjectError class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when one of the Date/Time classes has not been correctly initialised.
// Because Date/Time classes are not final, these classes can be inherit. When the parent constructor is not called, this error is thrown. This is always a programming error.
// 
// Class synopsis
// [code]
// class DateObjectError extends DateError {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateobjecterror.php
// THE_DATEOBJECTERROR_CLASS - END
// 
// THE_DATERANGEERROR_CLASS - BEGIN
// The DateRangeError class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown by DateTime::getTimestamp(), DateTimeImmutable::getTimestamp(), and date_timestamp_get(), on 32-bit platforms if the date object represents a date outside of the 32-bit signed range.
// 
// Class synopsis
// [code]
// class DateRangeError extends DateError {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.daterangeerror.php
// THE_DATERANGEERROR_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateerror.php
// THE_DATEERROR_CLASS - END
// 
// ERROR - BEGIN
// Error
// 
// PHP_7, PHP_8
// 
// Introduction
// Error is the base class for all internal PHP errors.
// 
// Class synopsis
// [code]
// class Error implements Throwable {
// 
//    /* Properties */
//    protected string $message = "";
//    private string $string = "";
//    protected int $code;
//    protected string $file = "";
//    protected int $line;
//    private array $trace = [];
//    private ?Throwable $previous = null;
// 
//    /* Methods */
//    public __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
//    final public getMessage(): string
//    final public getPrevious(): ?Throwable
//    final public getCode(): int
//    final public getFile(): string
//    final public getLine(): int
//    final public getTrace(): array
//    final public getTraceAsString(): string
//    public __toString(): string
//    private __clone(): void
// }
// [/code]
// 
// Properties
// message  - The error message
// code     - The error code
// file     - The filename where the error happened
// line     - The line where the error happened
// previous - The previously thrown exception
// string   - The string representation of the stack trace
// trace    - The stack trace as an array
// 
// Table of Contents
// * Error::__construct      - Construct the error object
// * Error::getMessage       - Gets the error message
// * Error::getPrevious      - Returns previous Throwable
// * Error::getCode          - Gets the error code
// * Error::getFile          - Gets the file in which the error occurred
// * Error::getLine          - Gets the line in which the error occurred
// * Error::getTrace         - Gets the stack trace
// * Error::getTraceAsString - Gets the stack trace as a string
// * Error::__toString       - String representation of the error
// * Error::__clone          - Clone the error
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.error.php
// ERROR - END
// 
// THE_DATEEXCEPTION_CLASS - BEGIN
// The DateException class
// 
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Parent class of Date/Time exceptions, for issues that come to light due to user input, or free form text arguments that need to be parsed.
// 
// The following child exceptions are thrown by the extension:
// * DateInvalidOperationException
// * DateInvalidTimezoneException
// * DateMalformedIntervalStringException
// * DateMalformedPeriodStringException
// * DateMalformedStringException
// 
// Class synopsis
// [code]
// class DateException extends Exception {
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
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS - BEGIN
// The DateInvalidOperationException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown by DateTimeImmutable::sub() and DateTime::sub() when an unsupported operation is attempted.
// An example of such an unsupported operation is using a DateInterval object representing relative time specifications such as next weekday, as no logical reversed statement can be constructed.
// 
// Class synopsis
// [code]
// class DateInvalidOperationException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateinvalidoperationexception.php
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS - END
// 
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS - BEGIN
// The DateInvalidTimeZoneException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an incorrect value is passed to DateTimeZone::__construct().
// 
// Class synopsis
// [code]
// class DateInvalidTimeZoneException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateinvalidtimezoneexception.php
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedIntervalStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid duration argument is passed to DateInterval::__construct().
// 
// Class synopsis
// [code]
// class DateMalformedIntervalStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedintervalstringexception.php
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedPeriodStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid isostr argument is passed to DatePeriod::__construct().
// 
// Class synopsis
// [code]
// class DateMalformedPeriodStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedperiodstringexception.php
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid Date/Time string is detected.
// This can be as value to DateTimeImmutable::__construct(), DateTimeImmutable::modify(), DateTime::__construct(), or DateTime::modify().
// 
// Class synopsis
// [code]
// class DateMalformedStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedstringexception.php
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateexception.php
// THE_DATEEXCEPTION_CLASS - END
// 
// EXCEPTION - BEGIN
// Exception
// 
// PHP_5, PHP_7, PHP_8
// 
// Introduction
// Exception is the base class for all user exceptions.
// 
// Class synopsis
// [code]
// class Exception implements Throwable {
// 
//    /* Properties */
//    protected string $message = "";
//    private string $string = "";
//    protected int $code;
//    protected string $file = "";
//    protected int $line;
//    private array $trace = [];
//    private ?Throwable $previous = null;
// 
//    /* Methods */
//    public __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
//    final public getMessage(): string
//    final public getPrevious(): ?Throwable
//    final public getCode(): int
//    final public getFile(): string
//    final public getLine(): int
//    final public getTrace(): array
//    final public getTraceAsString(): string
//    public __toString(): string
//    private __clone(): void
// }
// [/code]
// 
// Properties
// message  - The exception message
// code     - The exception code
// file     - The filename where the exception was created
// line     - The line where the exception was created
// previous - The previously thrown exception
// string   - The string representation of the stack trace
// trace    - The stack trace as an array
// 
// Table of Contents
// * Exception::__construct      - Construct the exception
// * Exception::getMessage       - Gets the Exception message
// * Exception::getPrevious      - Returns previous Throwable
// * Exception::getCode          - Gets the Exception code
// * Exception::getFile          - Gets the file in which the exception was created
// * Exception::getLine          - Gets the line in which the exception was created
// * Exception::getTrace         - Gets the stack trace
// * Exception::getTraceAsString - Gets the stack trace as a string
// * Exception::__toString       - String representation of the exception
// * Exception::__clone          - Clone the exception
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.exception.php
// EXCEPTION - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.error.tree.php
// DATE_TIME_ERRORS_AND_EXCEPTIONS - END
// 
// SUPPORTED_DATE_AND_TIME_FORMATS - BEGIN
// Supported Date and Time Formats
// 
// This section describes all the different formats in a BNF-like format, that the DateTimeImmutable, DateTime, date_create_immutable(), date_create(), date_parse(), and strtotime() parser understands. The formats are grouped by section. In most cases formats from different sections, separated by whitespace, comma or dot, can be used in the same date/time string. For each of the supported formats, one or more examples are given, as well as a description for the format. Characters in single quotes in the formats are case-insensitive ('t' could be t or T), characters in double quotes are case-sensitive ("T" is only T).
// To format DateTimeImmutable and DateTime objects, please refer to the documentation of the DateTimeInterface::format() method.
// A general set of rules should be taken into account.
// 1. The parser, allows for each unit (year, month, day, hour, minute, second) the full range of values. For a year that's just 4 digits, for a month that's 0-12, day is 0-31, hour is 0-24, and minute is 0-59.
// 2. 60 is allowed for seconds, as sometimes date strings with that leapsecond do show up. But PHP implements Unix time where "60" is not a valid second number and hence it overflows.
// 3. strtotime() returns false if any number is outside of the ranges, and DateTimeImmutable::__construct() throws an exception.
// 4. If a string contains a date, all time elements are reset to 0.
// 5. All less-significant time elements are reset to 0 if any part of a time is present in the given string.
// 6. The parser is dumb, and doesn't do any checks to make it faster (and more generic).
// 7. Besides rules for individual time elements, the parser also understand more specific compound formats, such as parsing Unix timestamps (@1690388256) and ISO Weekdates (2008-W28-3).
// 8. There is an additional check if an invalid date is provided:
// [php]
// $res = date_parse("2015-09-31");
// var_dump($res["warnings"]);
// [/php]
// The above example will output:
// [result]
// array(1) {
//   [11] =>
//   string(27) "The parsed date was invalid"
// }
// [/result]
// 9. It is already possible to handle the edge cases, but then DateTimeImmutable::createFromFormat() must be used while supplying the correct format.
// [php]
// $res = DateTimeImmutable::createFromFormat("Y-m-d", "2015-09-34");
// var_dump($res);
// [/php]
// The above example will output:
// [result]
// object(DateTimeImmutable)#1 (3) {
//   ["date"]=>
//   string(26) "2015-10-04 17:24:43.000000"
//   ["timezone_type"]=>
//   int(3)
//   ["timezone"]=>
//   string(13) "Europe/London"
// }
// [/result]
// 
// Time Formats
// This page describes the different date/time formats in a BNF-like syntax, that the DateTimeImmutable, DateTime, date_create(), date_create_immutable(), and strtotime() parser understands.
// To format DateTimeImmutable and DateTime objects, please refer to the documentation of the DateTimeInterface::format() method.
// 
// Used Symbols
// Description  | Formats                                                 | Examples
// frac         | . [0-9]+                                                | ".21342", ".85"
// hh           | "0"?[1-9] | "1"[0-2]                                    | "04", "7", "12"
// HH           | [01][0-9] | "2"[0-4]                                    | "04", "07", "19"
// meridian     | [AaPp] .? [Mm] .? [\0\t ]                               | "A.m.", "pM", "am."
// MM           | [0-5][0-9]                                              | "00", "12", "59"
// II           | [0-5][0-9]                                              | "00", "12", "59"
// space        | [ \t]                                                   |
// tz           | "("? [A-Za-z]{1,6} ")"? | [A-Z][a-z]+([_/][A-Z][a-z]+)+ | "CEST", "Europe/Amsterdam", "America/Indiana/Knox"
// tzcorrection | "GMT"? [+-] hh ":"? MM?                                 | "+0400", "GMT-07:00", "-07:00"
// 
// 12 Hour Notation
// Description                                                | Format                                | Examples
// Hour only, with meridian                                   | hh space? meridian                    | "4 am", "5PM"
// Hour and minutes, with meridian                            | hh [.:] MM space? meridian            | "4:08 am", "7:19P.M."
// Hour, minutes and seconds, with meridian                   | hh [.:] MM [.:] II space? meridian    | "4:08:37 am", "7:19:19P.M."
// MS SQL (Hour, minutes, seconds and fraction with meridian) | hh ":" MM ":" II [.:] [0-9]+ meridian | "4:08:39:12313am"
// 
// 24 Hour Notation
// Description                         | Format                                               | Examples
// Hour and minutes                    | 't'? HH [.:] MM                                      | "04:08", "19.19", "T23:43"
// Hour and minutes, no colon          | 't'? HH MM                                           | "0408", "t1919", "T2343"
// Hour, minutes and seconds           | 't'? HH [.:] MM [.:] II                              | "04.08.37", "t19:19:19"
// Hour, minutes and seconds, no colon | 't'? HH MM II                                        | "040837", "T191919"
// Hour, minutes, seconds and timezone | 't'? HH [.:] MM [.:] II space? ( tzcorrection | tz ) | "040837CEST", "T191919-0700"
// Hour, minutes, seconds and fraction | 't'? HH [.:] MM [.:] II frac                         | "04.08.37.81412", "19:19:19.532453"
// Time zone information               | tz | tzcorrection                                    | "CEST", "Europe/Amsterdam", "+0430", "GMT-06:00"
// 
// Date Formats
// This page describes the different date formats in a BNF-like syntax, that the DateTimeImmutable, DateTime, date_create(), date_create_immutable(), and strtotime() parser understands.
// To format DateTimeImmutable and DateTime objects, please refer to the documentation of the DateTimeInterface::format() method.
// 
// Used Symbols
// Description - Format                            ; Examples
// daysuf      - "st" | "nd" | "rd" | "th"         ;
// dd          - ([0-2]?[0-9] | "3"[01]) daysuf?   ; "7th", "22nd", "31"
// DD          - "0" [0-9] | [1-2][0-9] | "3" [01] ; "07", "31"
// m           - 'january' | 'february' | 'march' | 'april' | 'may' | 'june' | 'july' | 'august' | 'september' | 'october' | 'november' | 'december' | 'jan' | 'feb' | 'mar' | 'apr' | 'may' | 'jun' | 'jul' | 'aug' | 'sep' | 'sept' | 'oct' | 'nov' | 'dec' | "I" | "II" | "III" | "IV" | "V" | "VI" | "VII" | "VIII" | "IX" | "X" | "XI" | "XII" ;
// M           - 'jan' | 'feb' | 'mar' | 'apr' | 'may' | 'jun' | 'jul' | 'aug' | 'sep' | 'sept' | 'oct' | 'nov' | 'dec' ;
// mm          - "0"? [0-9] | "1"[0-2]             ; "0", "04", "7", "12"
// MM          - "0" [0-9] | "1"[0-2]              ; "00", "04", "07", "12"
// y           - [0-9]{1,4}                        ; "00", "78", "08", "8", "2008"
// yy          - [0-9]{2}                          ; "00", "08", "78"
// YY          - [0-9]{4}                          ; "2000", "2008", "1978"
// YYY         - [0-9]{5,19}                       ; "81412", "20192"
// 
// Localized Notations
// Description                            - Format                           ; Examples
// American month and day                 - mm "/" dd                        ; "5/12", "10/27"
// American month, day and year           - mm "/" dd "/" y                  ; "12/22/78", "1/17/2006", "1/17/6"
// Four digit year, month and day with slashes - YY "/" mm "/" dd            ; "2008/6/30", "1978/12/22"
// Four digit year and month (GNU)        - YY "-" mm                        ; "2008-6", "2008-06", "1978-12"
// Year, month and day with dashes        - y "-" mm "-" dd                  ; "2008-6-30", "78-12-22", "8-6-21"
// Day, month and four digit year, with dots, tabs or dashes - dd [.\t-] mm [.-] YY ; "30-6-2008", "22.12.1978"
// Day, month and two digit year, with dots or tabs - dd [.\t] mm "." yy     ; "30.6.08", "22\t12.78"
// Day, textual month and year            - dd ([ \t.-])* m ([ \t.-])* y     ; "30-June 2008", "22DEC78", "14 III 1879"
// Textual month and four digit year (Day reset to 1) - m ([ \t.-])* YY      ; "June 2008", "DEC1978", "March 1879"
// Four digit year and textual month (Day reset to 1) - YY ([ \t.-])* m      ; "2008 June", "1978-XII", "1879.MArCH"
// Textual month, day and year            - m ([ .\t-])* dd [,.stndrh\t ]+ y ; "July 1st, 2008", "April 17, 1790", "May.9,78"
// Textual month and day                  - m ([ .\t-])* dd [,.stndrh\t ]*   ; "July 1st,", "Apr 17", "May.9"
// Day and textual month                  - dd ([ .\t-])* m                  ; "1 July", "17 Apr", "9.May"
// Month abbreviation, day and year       - M "-" DD "-" y                   ; "May-09-78", "Apr-17-1790"
// Year, month abbreviation and day       - y "-" M "-" DD                   ; "78-Dec-22", "1814-MAY-17"
// Year (and just the year)               - YY                               ; "1978", "2008"
// Year (expanded, 5-19 digits with sign) - [+-] YYY                         ; "-81120", "+20192"
// Textual month (and just the month)     - m                                ; "March", "jun", "DEC"
// 
// ISO8601 Notations
// Description                                        | Format                 | Examples
// Eight digit year, month and day                    | YY MM DD               | "15810726", "19780417", "18140517"
// Four digit year, month and day with slashes        | YY "/" MM "/" DD       | "2008/06/30", "1978/12/22"
// Two digit year, month and day with dashes          | yy "-" MM "-" DD       | "08-06-30", "78-12-22"
// Four digit year with optional sign, month and day  | [+-]? YY "-" MM "-" DD | "-0002-07-26", "+1978-04-17", "1814-05-17"
// Five+ digit year with required sign, month and day | [+-] YYY "-" MM "-" DD | "-81120-02-26", "+20192-04-17"
// Note: For the y and yy formats, years below 100 are handled in a special way when the y or yy symbol is used. If the year falls in the range 0 (inclusive) to 69 (inclusive), 2000 is added. If the year falls in the range 70 (inclusive) to 99 (inclusive) then 1900 is added. This means that "00-01-01" is interpreted as "2000-01-01".
// Note: The "Day, month and two digit year, with dots or tabs" format (dd [.\t] mm "." yy) only works for the year values 61 (inclusive) to 99 (inclusive) - outside those years the time format "HH [.:] MM [.:] SS" has precedence.
// Note: The "Year (and just the year)" format only works if a time string has already been found -- otherwise this format is recognised as HH MM.
//  Caution:
//  It is possible to over- and underflow the dd and DD format. Day 0 means the last day of previous month, whereas overflows count into the next month. This makes "2008-08-00" equivalent to "2008-07-31" and "2008-06-31" equivalent to "2008-07-01" (June only has 30 days).
//  Note that the day range is restricted to 0-31 as indicated by the regular expression above. Thus "2008-06-32" is not a valid date string, for instance.
//  It is also possible to underflow the mm and MM formats with the value 0. A month value of 0 means December of the previous year. As example "2008-00-22" is equivalent to "2007-12-22".
//  If you combine the previous two facts and underflow both the day and the month, the following happens: "2008-00-00" first gets converted to "2007-12-00" which then gets converted to "2007-11-30". This also happens with the string "0000-00-00", which gets transformed into "-0001-11-30" (the year -1 in the ISO 8601 calendar, which is 2 BC in the proleptic Gregorian calendar).
// 
// Compound Formats
// This page describes the different compound date/time formats in a BNF-like syntax, that the DateTimeImmutable, DateTime, date_create(), date_create_immutable(), and strtotime() parser understands.
// To format DateTimeImmutable and DateTime objects, please refer to the documentation of the DateTimeInterface::format() method.
// 
// Used Symbols
// Description  - Formats                           ; Examples
// DD           - "0" [0-9] | [1-2][0-9] | "3" [01] ; "02", "12", "31"
// doy          - "00"[1-9] | "0"[1-9][0-9] | [1-2][0-9][0-9] | "3"[0-5][0-9] | "36"[0-6] ; "001", "012", "180", "350", "366"
// frac         - . [0-9]+                          ; ".21342", ".85"
// hh           - "0"?[1-9] | "1"[0-2]              ; "04", "7", "12"
// HH           - [01][0-9] | "2"[0-4]              ; "04", "07", "19"
// meridian     - [AaPp] .? [Mm] .? [\0\t ]         ; "A.m.", "pM", "am."
// ii           - [0-5]?[0-9]                       ; "04", "8", "59"
// II           - [0-5][0-9]                        ; "04", "08", "59"
// M            - 'jan' | 'feb' | 'mar' | 'apr' | 'may' | 'jun' | 'jul' | 'aug' | 'sep' | 'sept' | 'oct' | 'nov' | 'dec' ;
// MM           - [0-1][0-9]                        ; "00", "12"
// space        - [ \t]                             ;
// ss           - ([0-5]?[0-9])|60                  ; "04", "8", "59", "60" (leap second)
// SS           - [0-5][0-9]                        ; "04", "08", "59"
// W            - "0"[1-9] | [1-4][0-9] | "5"[0-3]  ; "05", "17", "53"
// tzcorrection - "GMT"? [+-] hh ":"? II?           ; "+0400", "GMT-07:00", "-07:00"
// YY           - [0-9]{4}                          ; "2000", "2008", "1978"
// 
// Standards Formats
// Description - Examples
// ATOM        - "2022-06-02T16:58:35+00:00"
// COOKIE      - "Thursday, 02-Jun-2022 16:58:35 UTC"
// ISO8601     - "2022-06-02T16:58:35+0000"
// > RFC 822   - "Thu, 02 Jun 22 16:58:35 +0000"
// > RFC 850   - "Thursday, 02-Jun-22 16:58:35 UTC"
// > RFC 1036  - "Thu, 02 Jun 22 16:58:35 +0000"
// > RFC 1123  - "Thu, 02 Jun 2022 16:58:35 +0000"
// > RFC 2822  - "Thu, 02 Jun 2022 16:58:35 +0000"
// > RFC 3339  - "2022-06-02T16:58:35+00:00"
// > RFC 3339  - Extended	"2022-06-02T16:58:35.698+00:00"
// > RFC 7231  - "Thu, 02 Jun 2022 16:58:35 GMT"
// RSS         - "Thu, 02 Jun 2022 16:58:35 +0000"
// W3C         - "2022-06-02T16:58:35+00:00"
// 
// Localized Notations
// Description                       - Format                                ; Examples
// Common Log Format                 - dd "/" M "/" YY : HH ":" II ":" SS space tzcorrection ; "10/Oct/2000:13:55:36 -0700"
// EXIF                              - YY ":" MM ":" DD " " HH ":" II ":" SS ; "2008:08:07 18:11:31"
// ISO year with ISO week            - YY "-"? "W" W                         ; "2008W27", "2008-W28"
// ISO year with ISO week and day    - YY "-"? "W" W "-"? [0-7]              ; "2008W273", "2008-W28-3"
// MySQL                             - YY "-" MM "-" DD " " HH ":" II ":" SS ; "2008-08-07 18:11:31"
// PostgreSQL: Year with day-of-year - YY "."? doy                           ; "2008.197", "2008197"
// SOAP                              - YY "-" MM "-" DD "T" HH ":" II ":" SS frac tzcorrection? ; "2008-07-01T22:35:17.02", "2008-07-01T22:35:17.03+08:00"
// Unix Timestamp                    - "@" "-"? [0-9]+                       ; "@1215282385"
// Unix Timestamp with microseconds  - "@" "-"? [0-9]+ "." [0-9]{0,6}        ; "@1607974647.503686"
// XMLRPC                            - YY MM DD "T" hh ":" II ":" SS         ; "20080701T22:38:07", "20080701T9:38:07"
// XMLRPC (Compact)                  - YY MM DD 't' hh II SS                 ; "20080701t223807", "20080701T093807"
// WDDX                              - YY "-" mm "-" dd "T" hh ":" ii ":" ss ; "2008-7-1T9:3:37"
//  Note:
//  The "W" in the "ISO year with ISO week" and "ISO year with ISO week and day" formats is case-sensitive, you can only use the upper case "W".
//  The "T" in the SOAP, XMLRPC and WDDX formats is case-sensitive, you can only use the upper case "T".
//  The "Unix Timestamp" format sets the timezone to UTC.
// 
// Relative Formats
// This page describes the different relative date/time formats in a BNF-like syntax, that the DateTimeImmutable, DateTime, date_create(), date_create_immutable(), and strtotime() parser understands.
// To format DateTimeImmutable and DateTime objects, please refer to the documentation of the DateTimeInterface::format() method.
// 
// Used Symbols
// Description - Format
// dayname     - 'sunday' | 'monday' | 'tuesday' | 'wednesday' | 'thursday' | 'friday' | 'saturday' | 'sun' | 'mon' | 'tue' | 'wed' | 'thu' | 'fri' | 'sat'
// daytext     - 'weekday' | 'weekdays'
// number      - [+-]?[0-9]+
// ordinal     - 'first' | 'second' | 'third' | 'fourth' | 'fifth' | 'sixth' | 'seventh' | 'eighth' | 'ninth' | 'tenth' | 'eleventh' | 'twelfth' | 'next' | 'last' | 'previous' | 'this'
// reltext     - 'next' | 'last' | 'previous' | 'this'
// space       - [ \t]+
// unit        - 'ms' | 'µs' | (( 'msec' | 'millisecond' | 'µsec' | 'microsecond' | 'usec' | 'sec' | 'second' | 'min' | 'minute' | 'hour' | 'day' | 'fortnight' | 'forthnight' | 'month' | 'year') 's'?) | 'weeks' | daytext
// 
// Day-based Notations
// Format                           - Description                                        ; Examples
// 'yesterday'                      - Midnight of yesterday                              ; "yesterday 14:00"
// 'midnight'                       - The time is set to 00:00:00                        ;
// 'today'                          - The time is set to 00:00:00                        ;
// 'now'                            - Now - this is simply ignored                       ;
// 'noon'                           - The time is set to 12:00:00                        ; "yesterday noon"
// 'tomorrow'                       - Midnight of tomorrow                               ;
// 'back of' hour                   - 15 minutes past the specified hour                 ; "back of 7pm", "back of 15"
// 'front of' hour                  - 15 minutes before the specified hour               ; "front of 5am", "front of 23"
// 'first day of'                   - Sets the day of the first of the current month. This phrase is usually best used together with a month name following it as it only effects the current month ; "first day of January 2008"
// 'last day of'                    - Sets the day to the last day of the current month. This phrase is usually best used together with a month name following it as it only effects the current month ; "last day of next month"
// ordinal space dayname space 'of' - Calculates the x-th week day of the current month. ; "first sat of July 2008"
// 'last' space dayname space 'of'  - Calculates the last week day of the current month. ; "last sat of July 2008"
// number space? (unit | 'week')    - Handles relative time items where the value is a number. ; "+5 weeks", "12 day", "-7 weekdays"
// (ordinal | reltext) space unit   - Handles relative time items where the value is text. last and previous are equivalent to -1, this to nothing, and next to +1. ; "fifth day", "second month", "last day", "previous year"
// 'ago'                            - Negates all the values of previously found relative time items. ; "2 days ago", "8 days ago 14:00", "2 months 5 days ago", "2 months ago 5 days", "2 days ago"
// dayname                          - Moves to the next day of this name. (See note)     ; "Monday"
// reltext space 'week'             - Handles the special format "weekday + last/this/next week". ; "Monday next week"
//  Note:
//  Relative statements are always processed after non-relative statements. This makes "+1 week july 2008" and "july 2008 +1 week" equivalent.
//  Exceptions to this rule are: "yesterday", "midnight", "today", "noon" and "tomorrow". Note that "tomorrow 11:00" and "11:00 tomorrow" are different. Considering today's date of "July 23rd, 2008" the first one produces "2008-07-24 11:00" where as the second one produces "2008-07-24 00:00". The reason for this is that those five statements directly influence the current time.
//  Keywords such as "first day of" depend on the context in which the relative format string is used. If used with a static method or function, the referent is the current system timestamp. However, if used in DateTime::modify() or DateTimeImmutable::modify(), the referent is the object on which the modify() method is called.
//  Note:
//  Observe the following remarks when the current day-of-week is the same as the day-of-week used in the date/time string. The current day-of-week could have been (re-)calculated by non-relative parts of the date/time string however.
//  1. "dayname" does not advance to another day. (Example: "Wed July 23rd, 2008" means "2008-07-23").
//  2. "number dayname" does not advance to another day. (Example: "1 wednesday july 23rd, 2008" means "2008-07-23").
//  3. "number week dayname" will first add the number of weeks, but does not advance to another day. In this case "number week" and "dayname" are two distinct blocks. (Example: "+1 week wednesday july 23rd, 2008" means "2008-07-30").
//  4. "ordinal dayname" does advance to another day. (Example "first wednesday july 23rd, 2008" means "2008-07-30").
//  5. "number week ordinal dayname" will first add the number of weeks, and then advances to another day. In this case "number week" and "ordinal dayname" are two distinct blocks. (Example: "+1 week first wednesday july 23rd, 2008" means "2008-08-06").
//  6. "ordinal dayname 'of' " does not advance to another day. (Example: "first wednesday of july 23rd, 2008" means "2008-07-02" because the specific phrase with 'of' resets the day-of-month to '1' and the '23rd' is ignored here).
//  Also observe that the "of" in "ordinal space dayname space 'of' " and "'last' space dayname space 'of' " does something special.
//  1. It sets the day-of-month to 1.
//  2. "ordinal dayname 'of' " does not advance to another day. (Example: "first tuesday of july 2008" means "2008-07-01").
//  3. "ordinal dayname " does advance to another day. (Example: "first tuesday july 2008" means "2008-07-08", see also point 4 in the list above).
//  4. "'last' dayname 'of' " takes the last dayname of the current month. (Example: "last wed of july 2008" means "2008-07-30")
//  5. "'last' dayname" takes the last dayname from the current day. (Example: "last wed july 2008" means "2008-06-25"; "july 2008" first sets the current date to "2008-07-01" and then "last wed" moves to the previous Wednesday which is "2008-06-25").
// Note: Relative month values are calculated based on the length of months that they pass through. An example would be "+2 month 2011-11-30", which would produce "2012-01-30". This is due to November being 30 days in length, and December being 31 days in length, producing a total of 61 days.
// Note: number is an integer number; if a decimal number is given, the dot (or comma) is likely interpreted as delimiter. For instance, '+1.5 hours' is parsed like '+1 5 hours', not as '+1 hour +30 minutes'.
// 
// Changelog
// Version - Description
// 8.2.0   - number no longer accepts multiple signs, e.g. +-2.
// 7.0.8   - Weeks always start on monday. Formerly, sunday would also be considered to start a week.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.formats.php
// SUPPORTED_DATE_AND_TIME_FORMATS - END
// 
// LIST_OF_SUPPORTED_TIMEZONES - BEGIN
// List of Supported Timezones
// 
// AFRICA
// AMERICA
// ANTARCTICA
// ARCTIC
// ASIA
// ATLANTIC
// AUSTRALIA
// EUROPE
// INDIAN
// PACIFIC
// OTHERS
// 
// Here you'll find the complete list of timezones supported by PHP, which are meant to be used with e.g. date_default_timezone_set().
// Caution: The behavior of timezones not listed here is undefined.
// Note: The latest version of the timezone database can be installed via PECL's > timezonedb.
// Note: This list is based upon the timezone database version 2023.3.
// 
// AFRICA - BEGIN
// Africa
// 
// Africa
// Africa/Abidjan      | Africa/Accra         | Africa/Addis_Ababa | Africa/Algiers
// Africa/Asmara       | Africa/Bamako        | Africa/Bangui      | Africa/Banjul
// Africa/Bissau       | Africa/Blantyre      | Africa/Brazzaville | Africa/Bujumbura
// Africa/Cairo        | Africa/Casablanca    | Africa/Ceuta       | Africa/Conakry
// Africa/Dakar        | Africa/Dar_es_Salaam | Africa/Djibouti    | Africa/Douala
// Africa/El_Aaiun     | Africa/Freetown      | Africa/Gaborone    | Africa/Harare
// Africa/Johannesburg | Africa/Juba          | Africa/Kampala     | Africa/Khartoum
// Africa/Kigali       | Africa/Kinshasa      | Africa/Lagos       | Africa/Libreville
// Africa/Lome         | Africa/Luanda        | Africa/Lubumbashi  | Africa/Lusaka
// Africa/Malabo       | Africa/Maputo        | Africa/Maseru      | Africa/Mbabane
// Africa/Mogadishu    | Africa/Monrovia      | Africa/Nairobi     | Africa/Ndjamena
// Africa/Niamey       | Africa/Nouakchott    | Africa/Ouagadougou | Africa/Porto-Novo
// Africa/Sao_Tome     | Africa/Tripoli       | Africa/Tunis       | Africa/Windhoek
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.africa.php
// AFRICA - END
// 
// AMERICA - BEGIN
// America
// 
// America
// America/Adak                 | America/Anchorage              | America/Anguilla            | America/Antigua
// America/Araguaina            | America/Argentina/Buenos_Aires | America/Argentina/Catamarca | America/Argentina/Cordoba
// America/Argentina/Jujuy      | America/Argentina/La_Rioja     | America/Argentina/Mendoza   | America/Argentina/Rio_Gallegos
// America/Argentina/Salta      | America/Argentina/San_Juan     | America/Argentina/San_Luis  | America/Argentina/Tucuman
// America/Argentina/Ushuaia    | America/Aruba                  | America/Asuncion            | America/Atikokan
// America/Bahia                | America/Bahia_Banderas         | America/Barbados            | America/Belem
// America/Belize               | America/Blanc-Sablon           | America/Boa_Vista           | America/Bogota
// America/Boise                | America/Cambridge_Bay          | America/Campo_Grande        | America/Cancun
// America/Caracas              | America/Cayenne                | America/Cayman              | America/Chicago
// America/Chihuahua            | America/Ciudad_Juarez          | America/Costa_Rica          | America/Creston
// America/Cuiaba               | America/Curacao                | America/Danmarkshavn        | America/Dawson
// America/Dawson_Creek         | America/Denver                 | America/Detroit             | America/Dominica
// America/Edmonton             | America/Eirunepe               | America/El_Salvador         | America/Fort_Nelson
// America/Fortaleza            | America/Glace_Bay              | America/Goose_Bay           | America/Grand_Turk
// America/Grenada              | America/Guadeloupe             | America/Guatemala           | America/Guayaquil
// America/Guyana               | America/Halifax                | America/Havana              | America/Hermosillo
// America/Indiana/Indianapolis | America/Indiana/Knox           | America/Indiana/Marengo     | America/Indiana/Petersburg
// America/Indiana/Tell_City    | America/Indiana/Vevay          | America/Indiana/Vincennes   | America/Indiana/Winamac
// America/Inuvik               | America/Iqaluit                | America/Jamaica             | America/Juneau
// America/Kentucky/Louisville  | America/Kentucky/Monticello    | America/Kralendijk          | America/La_Paz
// America/Lima                 | America/Los_Angeles            | America/Lower_Princes       | America/Maceio
// America/Managua              | America/Manaus                 | America/Marigot             | America/Martinique
// America/Matamoros            | America/Mazatlan               | America/Menominee           | America/Merida
// America/Metlakatla           | America/Mexico_City            | America/Miquelon            | America/Moncton
// America/Monterrey            | America/Montevideo             | America/Montserrat          | America/Nassau
// America/New_York             | America/Nome                   | America/Noronha             | America/North_Dakota/Beulah
// America/North_Dakota/Center  | America/North_Dakota/New_Salem | America/Nuuk                | America/Ojinaga
// America/Panama               | America/Paramaribo             | America/Phoenix             | America/Port-au-Prince
// America/Port_of_Spain        | America/Porto_Velho            | America/Puerto_Rico         | America/Punta_Arenas
// America/Rankin_Inlet         | America/Recife                 | America/Regina              | America/Resolute
// America/Rio_Branco           | America/Santarem               | America/Santiago            | America/Santo_Domingo
// America/Sao_Paulo            | America/Scoresbysund           | America/Sitka               | America/St_Barthelemy
// America/St_Johns             | America/St_Kitts               | America/St_Lucia            | America/St_Thomas
// America/St_Vincent           | America/Swift_Current          | America/Tegucigalpa         | America/Thule
// America/Tijuana              | America/Toronto                | America/Tortola             | America/Vancouver
// America/Whitehorse           | America/Winnipeg               | America/Yakutat
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.america.php
// AMERICA - END
// 
// ANTARCTICA - BEGIN
// Antarctica
// 
// Antarctica
// Antarctica/Casey  | Antarctica/Davis   | Antarctica/DumontDUrville | Antarctica/Macquarie
// Antarctica/Mawson | Antarctica/McMurdo | Antarctica/Palmer         | Antarctica/Rothera
// Antarctica/Syowa  | Antarctica/Troll   | Antarctica/Vostok
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.antarctica.php
// ANTARCTICA - END
// 
// ARCTIC - BEGIN
// Arctic
// 
// Arctic
// Arctic/Longyearbyen
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.arctic.php
// ARCTIC - END
// 
// ASIA - BEGIN
// Asia
// 
// Asia
// Asia/Aden        | Asia/Almaty            | Asia/Amman         | Asia/Anadyr
// Asia/Aqtau       | Asia/Aqtobe            | Asia/Ashgabat      | Asia/Atyrau
// Asia/Baghdad     | Asia/Bahrain           | Asia/Baku          | Asia/Bangkok
// Asia/Barnaul     | Asia/Beirut            | Asia/Bishkek       | Asia/Brunei
// Asia/Chita       | Asia/Choibalsan        | Asia/Colombo       | Asia/Damascus
// Asia/Dhaka       | Asia/Dili              | Asia/Dubai         | Asia/Dushanbe
// Asia/Famagusta   | Asia/Gaza              | Asia/Hebron        | Asia/Ho_Chi_Minh
// Asia/Hong_Kong   | Asia/Hovd              | Asia/Irkutsk       | Asia/Jakarta
// Asia/Jayapura    | Asia/Jerusalem         | Asia/Kabul         | Asia/Kamchatka
// Asia/Karachi     | Asia/Kathmandu         | Asia/Khandyga      | Asia/Kolkata
// Asia/Krasnoyarsk | Asia/Kuala_Lumpur      | Asia/Kuching       | Asia/Kuwait
// Asia/Macau       | Asia/Magadan           | Asia/Makassar      | Asia/Manila
// Asia/Muscat      | Asia/Nicosia           | Asia/Novokuznetsk  | Asia/Novosibirsk
// Asia/Omsk        | Asia/Oral              | Asia/Phnom_Penh    | Asia/Pontianak
// Asia/Pyongyang   | Asia/Qatar             | Asia/Qostanay      | Asia/Qyzylorda
// Asia/Riyadh      | Asia/Sakhalin          | Asia/Samarkand     | Asia/Seoul
// Asia/Shanghai    | Asia/Singapore         | Asia/Srednekolymsk | Asia/Taipei
// Asia/Tashkent    | Asia/Tbilisi           | Asia/Tehran        | Asia/Thimphu
// Asia/Tokyo       | Asia/Tomsk             | Asia/Ulaanbaatar   | Asia/Urumqi
// Asia/Ust-Nera    | Asia/Vientiane         | Asia/Vladivostok   | Asia/Yakutsk
// Asia/Yangon      | Asia/Yekaterinburg     | Asia/Yerevan
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.asia.php
// ASIA - END
// 
// ATLANTIC - BEGIN
// Atlantic
// 
// Atlantic
// Atlantic/Azores    | Atlantic/Bermuda | Atlantic/Canary    | Atlantic/Cape_Verde
// Atlantic/Faroe     | Atlantic/Madeira | Atlantic/Reykjavik | Atlantic/South_Georgia
// Atlantic/St_Helena | Atlantic/Stanley
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.atlantic.php
// ATLANTIC - END 
// 
// AUSTRALIA - BEGIN
// Australia
// 
// Australia
// Australia/Adelaide  | Australia/Brisbane | Australia/Broken_Hill | Australia/Darwin
// Australia/Eucla     | Australia/Hobart   | Australia/Lindeman    | Australia/Lord_Howe
// Australia/Melbourne | Australia/Perth    | Australia/Sydney
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.australia.php
// AUSTRALIA - END
// 
// EUROPE - BEGIN
// Europe
// 
// Europe
// Europe/Amsterdam   | Europe/Andorra     | Europe/Astrakhan  | Europe/Athens
// Europe/Belgrade    | Europe/Berlin      | Europe/Bratislava | Europe/Brussels
// Europe/Bucharest   | Europe/Budapest    | Europe/Busingen   | Europe/Chisinau
// Europe/Copenhagen  | Europe/Dublin      | Europe/Gibraltar  | Europe/Guernsey
// Europe/Helsinki    | Europe/Isle_of_Man | Europe/Istanbul   | Europe/Jersey
// Europe/Kaliningrad | Europe/Kirov       | Europe/Kyiv       | Europe/Lisbon
// Europe/Ljubljana   | Europe/London      | Europe/Luxembourg | Europe/Madrid
// Europe/Malta       | Europe/Mariehamn   | Europe/Minsk      | Europe/Monaco
// Europe/Moscow      | Europe/Oslo        | Europe/Paris      | Europe/Podgorica
// Europe/Prague      | Europe/Riga        | Europe/Rome       | Europe/Samara
// Europe/San_Marino  | Europe/Sarajevo    | Europe/Saratov    | Europe/Simferopol
// Europe/Skopje      | Europe/Sofia       | Europe/Stockholm  | Europe/Tallinn
// Europe/Tirane      | Europe/Ulyanovsk   | Europe/Vaduz      | Europe/Vatican
// Europe/Vienna      | Europe/Vilnius     | Europe/Volgograd  | Europe/Warsaw
// Europe/Zagreb      | Europe/Zurich
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.europe.php
// EUROPE - END
// 
// INDIAN - BEGIN
// Indian
// 
// Indian
// Indian/Antananarivo | Indian/Chagos    | Indian/Christmas | Indian/Cocos
// Indian/Comoro       | Indian/Kerguelen | Indian/Mahe      | Indian/Maldives
// Indian/Mauritius    | Indian/Mayotte   | Indian/Reunion
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.indian.php
// INDIAN - END
// 
// PACIFIC - BEGIN
// Pacific
// 
// Pacific
// Pacific/Apia        | Pacific/Auckland | Pacific/Bougainville | Pacific/Chatham
// Pacific/Chuuk       | Pacific/Easter   | Pacific/Efate        | Pacific/Fakaofo
// Pacific/Fiji        | Pacific/Funafuti | Pacific/Galapagos    | Pacific/Gambier
// Pacific/Guadalcanal | Pacific/Guam     | Pacific/Honolulu     | Pacific/Kanton
// Pacific/Kiritimati  | Pacific/Kosrae   | Pacific/Kwajalein    | Pacific/Majuro
// Pacific/Marquesas   | Pacific/Midway   | Pacific/Nauru        | Pacific/Niue
// Pacific/Norfolk     | Pacific/Noumea   | Pacific/Pago_Pago    | Pacific/Palau
// Pacific/Pitcairn    | Pacific/Pohnpei  | Pacific/Port_Moresby | Pacific/Rarotonga
// Pacific/Saipan      | Pacific/Tahiti   | Pacific/Tarawa       | Pacific/Tongatapu
// Pacific/Wake        | Pacific/Wallis
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.pacific.php
// PACIFIC - END
// 
// OTHERS - BEGIN
// Others
// 
// Warning: Please do not use any of the timezones listed here (besides UTC), they only exist for backward compatible reasons, and may expose erroneous behavior. Furthermore, these timezones may be removed from the IANA timezone database at any time.
//  Warning:
//  If you disregard the above warning, please also note that the IANA timezone database that provides PHP's timezone support uses POSIX style signs, which results in the Etc/GMT+n and Etc/GMT-n time zones being reversed from common usage.
//  For example, the time zone 8 hours ahead of GMT that is used in China and Western Australia (among other places) is actually Etc/GMT-8 in this database, not Etc/GMT+8 as you would normally expect.
//  Once again, it is strongly recommended that you use the correct time zone for your location, such as Asia/Shanghai or Australia/Perth for the above examples.
// 
// Others
// Africa/Asmera        | Africa/Timbuktu      | America/Argentina/ComodRivadavia | America/Atka
// America/Buenos_Aires | America/Catamarca    | America/Coral_Harbour            | America/Cordoba
// America/Ensenada     | America/Fort_Wayne   | America/Godthab                  | America/Indianapolis
// America/Jujuy        | America/Knox_IN      | America/Louisville               | America/Mendoza
// America/Montreal     | America/Nipigon      | America/Pangnirtung              | America/Porto_Acre
// America/Rainy_River  | America/Rosario      | America/Santa_Isabel             | America/Shiprock
// America/Thunder_Bay  | America/Virgin       | America/Yellowknife              | Antarctica/South_Pole
// Asia/Ashkhabad       | Asia/Calcutta        | Asia/Chongqing                   | Asia/Chungking
// Asia/Dacca           | Asia/Harbin          | Asia/Istanbul                    | Asia/Kashgar
// Asia/Katmandu        | Asia/Macao           | Asia/Rangoon                     | Asia/Saigon
// Asia/Tel_Aviv        | Asia/Thimbu          | Asia/Ujung_Pandang               | Asia/Ulan_Bator
// Atlantic/Faeroe      | Atlantic/Jan_Mayen   | Australia/ACT                    | Australia/Canberra
// Australia/Currie     | Australia/LHI        | Australia/North                  | Australia/NSW
// Australia/Queensland | Australia/South      | Australia/Tasmania               | Australia/Victoria
// Australia/West       | Australia/Yancowinna | Brazil/Acre                      | Brazil/DeNoronha
// Brazil/East          | Brazil/West          | Canada/Atlantic                  | Canada/Central
// Canada/Eastern       | Canada/Mountain      | Canada/Newfoundland              | Canada/Pacific
// Canada/Saskatchewan  | Canada/Yukon         | CET                              | Chile/Continental
// Chile/EasterIsland   | CST6CDT              | Cuba                             | EET
// Egypt                | Eire                 | EST                              | EST5EDT
// Etc/GMT              | Etc/GMT+0            | Etc/GMT+1                        | Etc/GMT+10
// Etc/GMT+11           | Etc/GMT+12           | Etc/GMT+2                        | Etc/GMT+3
// Etc/GMT+4            | Etc/GMT+5            | Etc/GMT+6                        | Etc/GMT+7
// Etc/GMT+8            | Etc/GMT+9            | Etc/GMT-0                        | Etc/GMT-1
// Etc/GMT-10           | Etc/GMT-11           | Etc/GMT-12                       | Etc/GMT-13
// Etc/GMT-14           | Etc/GMT-2            | Etc/GMT-3                        | Etc/GMT-4
// Etc/GMT-5            | Etc/GMT-6            | Etc/GMT-7                        | Etc/GMT-8
// Etc/GMT-9            | Etc/GMT0             | Etc/Greenwich                    | Etc/UCT
// Etc/Universal        | Etc/UTC              | Etc/Zulu                         | Europe/Belfast
// Europe/Kiev          | Europe/Nicosia       | Europe/Tiraspol                  | Europe/Uzhgorod
// Europe/Zaporozhye    | Factory              | GB                               | GB-Eire
// GMT                  | GMT+0                | GMT-0                            | GMT0
// Greenwich            | Hongkong             | HST                              | Iceland
// Iran                 | Israel               | Jamaica                          | Japan
// Kwajalein            | Libya                | MET                              | Mexico/BajaNorte
// Mexico/BajaSur       | Mexico/General       | MST                              | MST7MDT
// Navajo               | NZ                   | NZ-CHAT                          | Pacific/Enderbury
// Pacific/Johnston     | Pacific/Ponape       | Pacific/Samoa                    | Pacific/Truk
// Pacific/Yap          | Poland               | Portugal                         | PRC
// PST8PDT              | ROC                  | ROK                              | Singapore
// Turkey               | UCT                  | Universal                        | US/Alaska
// US/Aleutian          | US/Arizona           | US/Central                       | US/East-Indiana
// US/Eastern           | US/Hawaii            | US/Indiana-Starke                | US/Michigan
// US/Mountain          | US/Pacific           | US/Samoa                         | UTC
// W-SU                 | WET                  | Zulu
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-07-31)
// URL: https://www.php.net/manual/en/timezones.others.php
// OTHERS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/timezones.php
// LIST_OF_SUPPORTED_TIMEZONES - END
// 
// THE_DATEERROR_CLASS - BEGIN
// The DateError class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when the timezone database is not found, or contains invalid data.
// This error should never occur, and is not dependent on code. There are two child-exceptions (DateObjectError and DateRangeError) which are thrown depending on programmer error or range related issues.
// 
// Class synopsis
// [code]
// class DateError extends Error {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateerror.php
// THE_DATEERROR_CLASS - END
// 
// THE_DATEOBJECTERROR_CLASS - BEGIN
// The DateObjectError class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when one of the Date/Time classes has not been correctly initialised.
// Because Date/Time classes are not final, these classes can be inherit. When the parent constructor is not called, this error is thrown. This is always a programming error.
// 
// Class synopsis
// [code]
// class DateObjectError extends DateError {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateobjecterror.php
// THE_DATEOBJECTERROR_CLASS - END
// 
// THE_DATERANGEERROR_CLASS - BEGIN
// The DateRangeError class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown by DateTime::getTimestamp(), DateTimeImmutable::getTimestamp(), and date_timestamp_get(), on 32-bit platforms if the date object represents a date outside of the 32-bit signed range.
// 
// Class synopsis
// [code]
// class DateRangeError extends DateError {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.daterangeerror.php
// THE_DATERANGEERROR_CLASS - END
// 
// THE_DATEEXCEPTION_CLASS - BEGIN
// The DateException class
// 
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Parent class of Date/Time exceptions, for issues that come to light due to user input, or free form text arguments that need to be parsed.
// 
// The following child exceptions are thrown by the extension:
// * DateInvalidOperationException
// * DateInvalidTimezoneException
// * DateMalformedIntervalStringException
// * DateMalformedPeriodStringException
// * DateMalformedStringException
// 
// Class synopsis
// [code]
// class DateException extends Exception {
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
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS - BEGIN
// The DateInvalidOperationException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown by DateTimeImmutable::sub() and DateTime::sub() when an unsupported operation is attempted.
// An example of such an unsupported operation is using a DateInterval object representing relative time specifications such as next weekday, as no logical reversed statement can be constructed.
// 
// Class synopsis
// [code]
// class DateInvalidOperationException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateinvalidoperationexception.php
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS - END
// 
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS - BEGIN
// The DateInvalidTimeZoneException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an incorrect value is passed to DateTimeZone::__construct().
// 
// Class synopsis
// [code]
// class DateInvalidTimeZoneException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateinvalidtimezoneexception.php
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedIntervalStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid duration argument is passed to DateInterval::__construct().
// 
// Class synopsis
// [code]
// class DateMalformedIntervalStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedintervalstringexception.php
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedPeriodStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid isostr argument is passed to DatePeriod::__construct().
// 
// Class synopsis
// [code]
// class DateMalformedPeriodStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedperiodstringexception.php
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid Date/Time string is detected.
// This can be as value to DateTimeImmutable::__construct(), DateTimeImmutable::modify(), DateTime::__construct(), or DateTime::modify().
// 
// Class synopsis
// [code]
// class DateMalformedStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedstringexception.php
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateexception.php
// THE_DATEEXCEPTION_CLASS - END
// 
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS - BEGIN
// The DateInvalidOperationException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown by DateTimeImmutable::sub() and DateTime::sub() when an unsupported operation is attempted.
// An example of such an unsupported operation is using a DateInterval object representing relative time specifications such as next weekday, as no logical reversed statement can be constructed.
// 
// Class synopsis
// [code]
// class DateInvalidOperationException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateinvalidoperationexception.php
// THE_DATEINVALIDOPERATIONEXCEPTION_CLASS - END
// 
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS - BEGIN
// The DateInvalidTimeZoneException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an incorrect value is passed to DateTimeZone::__construct().
// 
// Class synopsis
// [code]
// class DateInvalidTimeZoneException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.dateinvalidtimezoneexception.php
// THE_DATEINVALIDTIMEZONEEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedIntervalStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid duration argument is passed to DateInterval::__construct().
// 
// Class synopsis
// [code]
// class DateMalformedIntervalStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedintervalstringexception.php
// THE_DATEMALFORMEDINTERVALSTRINGEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedPeriodStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid isostr argument is passed to DatePeriod::__construct().
// 
// Class synopsis
// [code]
// class DateMalformedPeriodStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedperiodstringexception.php
// THE_DATEMALFORMEDPERIODSTRINGEXCEPTION_CLASS - END
// 
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS - BEGIN
// The DateMalformedStringException class
// 
// PHP_8 >= PHP_8_3_0
// 
// Introduction
// Thrown when an invalid Date/Time string is detected.
// This can be as value to DateTimeImmutable::__construct(), DateTimeImmutable::modify(), DateTime::__construct(), or DateTime::modify().
// 
// Class synopsis
// [code]
// class DateMalformedStringException extends DateException {
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
// * PHP_NET (2023-11-10)
// URL: https://www.php.net/manual/en/class.datemalformedstringexception.php
// THE_DATEMALFORMEDSTRINGEXCEPTION_CLASS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/datetime.error.tree.php
// DATE_AND_TIME - END
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_CHECKDATE  
// ============================== PUBLIC
// ============================== ABOUT
// Validate a Gregorian date.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// checkdate() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_checkdate($month, $day, $year)
{
$return_checkdate = false;

// ========== CHECKDATE - BEGIN
// ===== ABOUT
// Validate a Gregorian date
// ===== DESCRIPTION
// Checks the validity of the date formed by the arguments. A date is considered valid if each parameter is properly defined.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// checkdate(int $month, int $day, int $year): bool
// ===== CODE
$return_checkdate = checkdate(

$month, // int month - The month is between 1 and 12 inclusive.

$day, // int day - The day is within the allowed number of days for the given month. Leap years are taken into consideration.

$year // int year - The year is between 1 and 32767 inclusive.

); // Return Values
// Returns true if the date given is valid; otherwise returns false.
// 
// [examples]
// Examples
// [example]
// Example #1 checkdate() example
// [php]
// var_dump(checkdate(12, 31, 2000));
// var_dump(checkdate(2, 29, 2001));
// [/php]
// The above example will output:
// [result]
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.checkdate.php
// ========== CHECKDATE - END

// SYNTAX:
// bool checkdate(int $month, int $day, int $year)

return $return_checkdate; // bool
}
// ============================== END
//  PHP_DATE_DATETIME_CHECKDATE  
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_DATE_ADD   
// ============================== OFFLINE
// ============================== ABOUT
// Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds.
// 
// date_add - Alias of DateTime::add().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_add() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_add($object, $interval)
{
$return_date_add = null;

// ========== DATE_ADD - BEGIN
// ===== ABOUT
// date_add - Alias of DateTime::add()
// ===== DESCRIPTION
// This function is an alias of: DateTime::add()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_add = date_add(

$object, // DateTime object

$interval // DateInterval interval

); // Return Values
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.date-add.php
// ========== DATE_ADD - END

// ========== DATETIME_ADD - BEGIN
// ===== ABOUT
// Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds
// ===== DESCRIPTION
// Adds the specified DateInterval object to the specified DateTime object.
// Like DateTimeImmutable::add() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::add(DateInterval $interval): DateTime
// 
// Procedural style
// date_add(DateTime $object, DateInterval $interval): DateTime
// ===== CODE
// $return_date_add = date_add(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $interval // DateInterval interval - A DateInterval object

// ); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.add.php
// ========== DATETIME_ADD - END

// SYNTAX:
// DateTime date_add(DateTime $object, DateInterval $interval)

return $return_date_add; // DateTime
}
*/
// ============================== END
//   PHP_DATE_DATETIME_DATE_ADD   
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_CREATE_FROM_FORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Parses a time string according to a specified format.
// 
// Alias of DateTime::createFromFormat().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_create_from_format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_create_from_format($format, $datetime, $timezone = null)
{
$return_date_create_from_format = false;

// ========== DATE_CREATE_FROM_FORMAT - BEGIN
// ===== ABOUT
// date_create_from_format - Alias of DateTime::createFromFormat()
// ===== DESCRIPTION
// This function is an alias of: DateTime::createFromFormat()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_create_from_format = date_create_from_format(

$format, // string $format,

$datetime, // string $datetime,

$timezone // DateTimeZone $timezone

); // Return
// DateTime|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.date-create-from-format.php
// ========== DATE_CREATE_FROM_FORMAT - END

// ========== DATETIME_CREATEFROMFORMAT - BEGIN
// ===== ABOUT
// Parses a time string according to a specified format
// ===== DESCRIPTION
// Returns a new DateTime object representing the date and time specified by the datetime string, which was formatted in the given format.
// Like DateTimeImmutable::createFromFormat() and date_create_immutable_from_format(), respectively, but creates a DateTime object.
// This method, including parameters, examples, and considerations are documented on the DateTimeImmutable::createFromFormat page.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTime::createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false
// 
// Procedural style
// date_create_from_format(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false
// ===== CODE
// $return_datetime_createfromformat = date_create_from_format(

// See DateTimeImmutable::createFromFormat.

// DATETIMEIMMUTABLE_CREATEFROMFORMAT - BEGIN
// date_create_immutable_from_format
// 
// Parameters
// string format - The format that the passed in string should be in. See the formatting options below. In most cases, the same letters as for the date() can be used.
// All fields are initialised with the current date/time. In most cases you would want to reset these to "zero" (the Unix epoch, 1970-01-01 00:00:00 UTC). You do that by including the ! character as first character in your format, or | as your last. Please see the documentation for each character below for more information.
// The format is parsed from left to right, which means that in some situations the order in which the format characters are present affects the result. In the case of z (the day of the year), it is required that a year has already been parsed, for example through the Y or y characters.
// Letters that are used for parsing numbers allow a wide range of values, outside of what the logical range would be. For example, the d (day of the month) accepts values in the range from 00 to 99. The only constraint is on the amount of digits. The date/time parser's overflow mechanism is used when out-of-range values are given. The examples below show some of this behaviour.
// This also means that the data parsed for a format letter is greedy, and will read up to the amount of digits its format allows for. That can then also mean that there are no longer enough characters in the datetime string for following format characters. An example on this page also illustrates this issue.
// 
// The following characters are recognized in the format parameter string
// format character - Description                                                        ; Example parsable values
// Day              - ---                                                                ; ---
// d and j          - Day of the month, 2 digits with or without leading zeros           ; 01 to 31 or 1 to 31. (2 digit numbers higher than the number of days in the month are accepted, in which case they will make the month overflow. For example using 33 with January, means February 2nd)
// D and l          - A textual representation of a day                                  ; Mon through Sun or Sunday through Saturday. If the day name given is different then the day name belonging to a parsed (or default) date is different, then an overflow occurs to the next date with the given day name. See the examples below for an explanation.
// S                - English ordinal suffix for the day of the month, 2 characters. It's ignored while processing. ; st, nd, rd or th.
// z                - The day of the year (starting from 0); must be preceded by Y or y. ; 0 through 365. (3 digit numbers higher than the numbers in a year are accepted, in which case they will make the year overflow. For example using 366 with 2022, means January 2nd, 2023)
// Month            - ---                                                                ; ---
// F and M          - A textual representation of a month, such as January or Sept       ; January through December or Jan through Dec
// m and n          - Numeric representation of a month, with or without leading zeros   ; 01 through 12 or 1 through 12. (2 digit numbers higher than 12 are accepted, in which case they will make the year overflow. For example using 13 means January in the next year)
// Year             - ---                                                                ; ---
// X and x          - A full numeric representation of a year, up to 19 digits, optionally prefixed by + or - ; Examples: 0055, 787, 1999, -2003, +10191
// Y                - A full numeric representation of a year, up to 4 digits            ; Examples: 0055, 787, 1999, 2003
// y                - A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive) ; Examples: 99 or 03 (which will be interpreted as 1999 and 2003, respectively)
// Time             - ---                                                                ; ---
// a and A          - Ante meridiem and Post meridiem                                    ; am or pm
// g and h          - 12-hour format of an hour with or without leading zero             ; 1 through 12 or 01 through 12 (2 digit numbers higher than 12 are accepted, in which case they will make the day overflow. For example using 14 means 02 in the next AM/PM period)
// G and H          - 24-hour format of an hour with or without leading zeros            ; 0 through 23 or 00 through 23 (2 digit numbers higher than 24 are accepted, in which case they will make the day overflow. For example using 26 means 02:00 the next day)
// i                - Minutes with leading zeros                                         ; 00 to 59. (2 digit numbers higher than 59 are accepted, in which case they will make the hour overflow. For example using 66 means :06 the next hour)
// s                - Seconds, with leading zeros                                        ; 00 through 59 (2 digit numbers higher than 59 are accepted, in which case they will make the minute overflow. For example using 90 means :30 the next minute)
// v                - Fraction in milliseconds (up to three digits)                      ; Example: 12 (0.12 seconds), 345 (0.345 seconds)
// u                - Fraction in microseconds (up to six digits)                        ; Example: 45 (0.45 seconds), 654321 (0.654321 seconds)
// Timezone         - ---                                                                ; ---
// e, O, P and T    - Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation ; Examples: UTC, GMT, Atlantic/Azores or +0200 or +02:00 or EST, MDT
// Full Date/Time   - ---                                                                ; ---
// U                - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)         ; Example: 1292177455
// Whitespace and Separators - ---                                            ; ---
// (space)                   - Zero or more spaces, tabs, NBSP (U+A0), or NNBSP (U+202F) characters ; Example: "\t", " "
# - One of the following separation symbol: ;, :, /, ., ,, -, ( or ) ; Example: /
// ;, :, /, ., ,, -, ( or )  - The specified character.                       ; Example: -
// ?                         - A random byte                                  ; Example: ^ (Be aware that for UTF-8 characters you might need more than one ?. In this case, using * is probably what you want instead)
// *                         - Random bytes until the next separator or digit ; Example: * in Y-*-d with the string 2009-aWord-08 will match aWord
// !                         - Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values ( 0 for hour, minute, second and fraction, 1 for month and day, 1970 for year and UTC for timezone information) ; Without !, all fields will be set to the current date and time.
// |                         - Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values if they have not been parsed yet ; Y-m-d| will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.
// +                         - If this format specifier is present, trailing data in the string will not cause an error, but a warning instead ; Use DateTimeImmutable::getLastErrors() to find out whether trailing data was present.
// Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with DateTimeImmutable::getLastErrors().
// To include literal characters in format, you have to escape them with a backslash (\).
// If format does not contain the character ! then portions of the generated date/time which are not specified in format will be set to the current system time.
// If format contains the character !, then portions of the generated date/time not provided in format, as well as values to the left-hand side of the !, will be set to corresponding values from the Unix epoch.
// If any time character is parsed, then all other time-related fields are set to "0", unless also parsed.
// The Unix epoch is 1970-01-01 00:00:00 UTC.

// string datetime - String representing the time.

// DateTimeZone timezone - A DateTimeZone object representing the desired time zone.
// If timezone is omitted or null and datetime contains no timezone, the current timezone will be used.
// Note: The timezone parameter and the current timezone are ignored when the datetime parameter either contains a UNIX timestamp (e.g. 946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00).
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetimeimmutable.createfromformat.php
// DATETIMEIMMUTABLE_CREATEFROMFORMAT - END

// $format, // string $format,

// $datetime, // string $datetime,

// $timezone // DateTimeZone $timezone

// ); // Return Values
// Returns a new DateTime instance or false on failure.
// 
// Errors/Exceptions
// This method throws ValueError when the datetime contains NULL-bytes.
// 
// Changelog
// Version              - Description
// 8.0.21, 8.1.8, 8.2.0 - Now throws ValueError when NULL-bytes are passed into datetime, which previously was silently ignored.
// 
// [examples]
// Examples
// For an extensive set of examples, see DateTimeImmutable::createFromFormat.
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/datetime.createfromformat.php
// ========== DATETIME_CREATEFROMFORMAT - END

// SYNTAX:
// DateTime|false date_create_from_format(string $format, string $datetime, DateTimeZone $timezone = null)

return $return_date_create_from_format; // DateTime|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_CREATE_FROM_FORMAT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_CREATE_IMMUTABLE_FROM_FORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Parses a time string according to a specified format.
// 
// Alias of DateTimeImmutable::createFromFormat().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_create_immutable_from_format() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_create_immutable_from_format($format, $datetime, $timezone = null)
{
$return_date_create_immutable_from_format = false;

// ========== DATE_CREATE_IMMUTABLE_FROM_FORMAT - BEGIN
// ===== ABOUT
// date_create_immutable_from_format - Alias of DateTimeImmutable::createFromFormat()
// ===== DESCRIPTION
// This function is an alias of: DateTimeImmutable::createFromFormat()
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_create_immutable_from_format = date_create_immutable_from_format(

$format, // string $format

$datetime, // string $datetime

$timezone // DateTimeZone $timezone

); // Return
// DateTimeImmutable|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.date-create-immutable-from-format.php
// ========== DATE_CREATE_IMMUTABLE_FROM_FORMAT - END

// ========== DATETIMEIMMUTABLE_CREATEFROMFORMAT - BEGIN
// ===== ABOUT
// Parses a time string according to a specified format
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object representing the date and time specified by the datetime string, which was formatted in the given format.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTimeImmutable::createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTimeImmutable|false
// 
// Procedural style
// date_create_immutable_from_format(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTimeImmutable|false
// ===== CODE
// $return_datetimeimmutable_createfromformat = date_create_immutable_from_format(

// $format, // string format - The format that the passed in string should be in. See the formatting options below. In most cases, the same letters as for the date() can be used.
// All fields are initialised with the current date/time. In most cases you would want to reset these to "zero" (the Unix epoch, 1970-01-01 00:00:00 UTC). You do that by including the ! character as first character in your format, or | as your last. Please see the documentation for each character below for more information.
// The format is parsed from left to right, which means that in some situations the order in which the format characters are present affects the result. In the case of z (the day of the year), it is required that a year has already been parsed, for example through the Y or y characters.
// Letters that are used for parsing numbers allow a wide range of values, outside of what the logical range would be. For example, the d (day of the month) accepts values in the range from 00 to 99. The only constraint is on the amount of digits. The date/time parser's overflow mechanism is used when out-of-range values are given. The examples below show some of this behaviour.
// This also means that the data parsed for a format letter is greedy, and will read up to the amount of digits its format allows for. That can then also mean that there are no longer enough characters in the datetime string for following format characters. An example on this page also illustrates this issue.
// 
// The following characters are recognized in the format parameter string
// format character - Description                                                        ; Example parsable values
// Day              - ---                                                                ; ---
// d and j          - Day of the month, 2 digits with or without leading zeros           ; 01 to 31 or 1 to 31. (2 digit numbers higher than the number of days in the month are accepted, in which case they will make the month overflow. For example using 33 with January, means February 2nd)
// D and l          - A textual representation of a day                                  ; Mon through Sun or Sunday through Saturday. If the day name given is different then the day name belonging to a parsed (or default) date is different, then an overflow occurs to the next date with the given day name. See the examples below for an explanation.
// S                - English ordinal suffix for the day of the month, 2 characters. It's ignored while processing. ; st, nd, rd or th.
// z                - The day of the year (starting from 0); must be preceded by Y or y. ; 0 through 365. (3 digit numbers higher than the numbers in a year are accepted, in which case they will make the year overflow. For example using 366 with 2022, means January 2nd, 2023)
// Month            - ---                                                                ; ---
// F and M          - A textual representation of a month, such as January or Sept       ; January through December or Jan through Dec
// m and n          - Numeric representation of a month, with or without leading zeros   ; 01 through 12 or 1 through 12. (2 digit numbers higher than 12 are accepted, in which case they will make the year overflow. For example using 13 means January in the next year)
// Year             - ---                                                                ; ---
// X and x          - A full numeric representation of a year, up to 19 digits, optionally prefixed by + or - ; Examples: 0055, 787, 1999, -2003, +10191
// Y                - A full numeric representation of a year, up to 4 digits            ; Examples: 0055, 787, 1999, 2003
// y                - A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive) ; Examples: 99 or 03 (which will be interpreted as 1999 and 2003, respectively)
// Time             - ---                                                                ; ---
// a and A          - Ante meridiem and Post meridiem                                    ; am or pm
// g and h          - 12-hour format of an hour with or without leading zero             ; 1 through 12 or 01 through 12 (2 digit numbers higher than 12 are accepted, in which case they will make the day overflow. For example using 14 means 02 in the next AM/PM period)
// G and H          - 24-hour format of an hour with or without leading zeros            ; 0 through 23 or 00 through 23 (2 digit numbers higher than 24 are accepted, in which case they will make the day overflow. For example using 26 means 02:00 the next day)
// i                - Minutes with leading zeros                                         ; 00 to 59. (2 digit numbers higher than 59 are accepted, in which case they will make the hour overflow. For example using 66 means :06 the next hour)
// s                - Seconds, with leading zeros                                        ; 00 through 59 (2 digit numbers higher than 59 are accepted, in which case they will make the minute overflow. For example using 90 means :30 the next minute)
// v                - Fraction in milliseconds (up to three digits)                      ; Example: 12 (0.12 seconds), 345 (0.345 seconds)
// u                - Fraction in microseconds (up to six digits)                        ; Example: 45 (0.45 seconds), 654321 (0.654321 seconds)
// Timezone         - ---                                                                ; ---
// e, O, P and T    - Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation ; Examples: UTC, GMT, Atlantic/Azores or +0200 or +02:00 or EST, MDT
// Full Date/Time   - ---                                                                ; ---
// U                - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)         ; Example: 1292177455
// Whitespace and Separators - ---                                            ; ---
// (space)                   - Zero or more spaces, tabs, NBSP (U+A0), or NNBSP (U+202F) characters ; Example: "\t", " "
// #                         - One of the following separation symbol: ;, :, /, ., ,, -, ( or ) ; Example: /
// ;, :, /, ., ,, -, ( or )  - The specified character.                       ; Example: -
// ?                         - A random byte                                  ; Example: ^ (Be aware that for UTF-8 characters you might need more than one ?. In this case, using * is probably what you want instead)
// *                         - Random bytes until the next separator or digit ; Example: * in Y-*-d with the string 2009-aWord-08 will match aWord
// !                         - Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values ( 0 for hour, minute, second and fraction, 1 for month and day, 1970 for year and UTC for timezone information) ; Without !, all fields will be set to the current date and time.
// |                         - Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values if they have not been parsed yet ; Y-m-d| will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.
// +                         - If this format specifier is present, trailing data in the string will not cause an error, but a warning instead ; Use DateTimeImmutable::getLastErrors() to find out whether trailing data was present.
// Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with DateTimeImmutable::getLastErrors().
// To include literal characters in format, you have to escape them with a backslash (\).
// If format does not contain the character ! then portions of the generated date/time which are not specified in format will be set to the current system time.
// If format contains the character !, then portions of the generated date/time not provided in format, as well as values to the left-hand side of the !, will be set to corresponding values from the Unix epoch.
// If any time character is parsed, then all other time-related fields are set to "0", unless also parsed.
// The Unix epoch is 1970-01-01 00:00:00 UTC.

// $datetime, // string datetime - String representing the time.

// $timezone // DateTimeZone timezone - A DateTimeZone object representing the desired time zone.
// If timezone is omitted or null and datetime contains no timezone, the current timezone will be used.
// Note: The timezone parameter and the current timezone are ignored when the datetime parameter either contains a UNIX timestamp (e.g. 946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00).

// ); // Return Values
// Returns a new DateTimeImmutable instance or false on failure.
// 
// Errors/Exceptions
// This method throws ValueError when the datetime contains NULL-bytes.
// 
// Changelog
// Version              - Description
// 8.2.9                - The (space) specifier now also supports NBSP (U+A0) and NNBSP (U+202F) characters.
// 8.2.0                - The X and x format specifiers have been added.
// 8.0.21, 8.1.8, 8.2.0 - Now throws ValueError when NULL-bytes are passed into datetime, which previously was silently ignored.
// 7.3.0                - The v format specifier has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::createFromFormat() example
// Object-oriented style
// [php]
// $date = DateTimeImmutable::createFromFormat('j-M-Y', '15-Feb-2009');
// echo $date->format('Y-m-d');
// [/php]
// [/example]
// [example]
// Example #2 Using predefined format constants with DateTimeImmutable::createFromFormat()
// Object-oriented style
// [php]
// $date = DateTimeImmutable::createFromFormat(DateTimeInterface::ISO8601, '2004-02-12T15:19:21+00:00');
// $date = DateTimeImmutable::createFromFormat(DateTimeInterface::RFC3339_EXTENDED, '2013-10-14T09:00:00.000+02:00');
// [/php]
// The formatting constants as used in this example consist of a string of characters for formatting a DateTimeImmutable object. In most cases, these letters match with the same elements of date/time information as the ones defined in the parameters section above, but they tend to be more lenient.
// [/example]
// [example]
// Example #3 Intricacies of DateTimeImmutable::createFromFormat()
// [php]
// echo 'Current time: ' . date('Y-m-d H:i:s') . "\n";
// 
// $format = 'Y-m-d';
// $date = DateTimeImmutable::createFromFormat($format, '2009-02-15');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = 'Y-m-d H:i:s';
// $date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = 'Y-m-!d H:i:s';
// $date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = '!d';
// $date = DateTimeImmutable::createFromFormat($format, '15');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = 'i';
// $date = DateTimeImmutable::createFromFormat($format, '15');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Current time: 2022-06-02 15:50:46
// Format: Y-m-d; 2009-02-15 15:50:46
// Format: Y-m-d H:i:s; 2009-02-15 15:16:17
// Format: Y-m-!d H:i:s; 1970-01-15 15:16:17
// Format: !d; 1970-01-15 00:00:00
// Format: i; 2022-06-02 00:15:00
// [/result]
// [/example]
// [example]
// Example #4 Format string with literal characters
// [php]
echo DateTimeImmutable::createFromFormat('H\h i\m s\s','23h 15m 03s')->format('H:i:s');
// [/php]
The above example will output something similar to:
// [result]
// 23:15:03
// [/result]
// [/example]
// [example]
// Example #5 Overflow behaviour
// [php]
// echo DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-17-35 16:60:97')->format(DateTimeImmutable::RFC2822);
// [/php]
// The above example will output something similar to:
// [result]
// Sat, 04 Jun 2022 17:01:37 +0000
// [/result]
// Although the result looks odd, it is correct, as the following overflows happen:
// 1. 97 seconds overflows to 1 minute, leaving 37 seconds.
// 2. 61 minutes overflows to 1 hour, leaving 1 minutes.
// 3. 35 days overflows to 1 month, leaving 4 days. The amount of days that are left over depends on the month, as not every month has the same amount of days.
// 4. 18 months overflows to 1 year, leaving 6 months.
// [/example]
// [example]
// Example #6 Overflowing day name behaviour
// [php]
// $d = DateTime::createFromFormat(DateTimeInterface::RFC1123, 'Mon, 3 Aug 2020 25:00:00 +0000');
// echo $d->format(DateTime::RFC1123), "\n";
// [/php]
The above example will output something similar to:
// [/result]
// Mon, 10 Aug 2020 01:00:00 +0000
// [/result]
// Although the result looks odd, it is correct, as the following overflows happen:
// 1. 3 Aug 2020 25:00:00 overflows to (Tue) 4 Aug 2020 01:00.
// 2. Mon gets applied, which advances the date to Mon, 10 Aug 2020 01:00:00. The explanation of relative keywords such as Mon is explained in the section on relative formats.
// In order to detect overflows in dates, you can use DateTimeImmutable::getLastErrors(), which will include a warning if an overflow occured.
// [/example]
// [example]
// Example #7 Detecting overflown dates
// [php]
// $d = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-17-35 16:60:97');
// echo $d->format(DateTimeImmutable::RFC2822), "\n\n";
// 
// var_dump(DateTimeImmutable::GetLastErrors());
// [/php]
// The above example will output something similar to:
// [result]
// Sat, 04 Jun 2022 17:01:37 +0000
// 
// array(4) {
//   'warning_count' =>
//   int(2)
//   'warnings' =>
//   array(1) {
//     [19] =>
//     string(27) "The parsed date was invalid"
//   }
//   'error_count' =>
//   int(0)
//   'errors' =>
//   array(0) {
//   }
// }
// [/result]
// [/example]
// [example]
// Example #8 Greedy parsing behaviour
// [php]
// print_r(date_parse_from_format('Gis', '60101'));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [year] =>
//     [month] =>
//     [day] =>
//     [hour] => 60
//     [minute] => 10
//     [second] => 0
//     [fraction] => 0
//     [warning_count] => 1
//     [warnings] => Array
//         (
//             [5] => The parsed time was invalid
//         )
// 
//     [error_count] => 1
//     [errors] => Array
//         (
//             [4] => A two digit second could not be found
//         )
// 
//     [is_localtime] =>
// )
// [/result]
// The G format is to parse 24 hour clock hours, with or without leading zero. This requires to parse 1 or 2 digits. Because there are two following digits, it greedily reads this as 60.
// The following i and s format characters both require two digits. This means that 10 is passed as minute (i), and that there are then not enough digits left to parse for as second (s).
// The errors array indicates this problem.
// Additionally, an hour of 60 is outside the range 0-24, which causes the warnings array to include a warning that the time is invalid.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/datetimeimmutable.createfromformat.php
// ========== DATETIMEIMMUTABLE_CREATEFROMFORMAT - END

// SYNTAX:
// DateTimeImmutable|false date_create_immutable_from_format(string $format, string $datetime, DateTimeZone $timezone = null)

return $return_date_create_immutable_from_format; // DateTimeImmutable|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_CREATE_IMMUTABLE_FROM_FORMAT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_CREATE_IMMUTABLE
// ============================== PUBLIC
// ============================== ABOUT
// Create a new DateTimeImmutable object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_create_immutable() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_date_create_immutable($datetime = "now", $timezone = null)
{
$return_date_create_immutable = false;

// ========== DATE_CREATE_IMMUTABLE - BEGIN
// ===== ABOUT
// create a new DateTimeImmutable object
// ===== DESCRIPTION
// This is the procedural version of DateTimeImmutable::__construct().
// Unlike the DateTimeImmutable constructor, it will return false instead of an exception if the passed in datetime string is invalid.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// date_create_immutable(string $datetime = "now", ?DateTimeZone $timezone = null): DateTimeImmutable|false
// ===== CODE
$return_date_create_immutable = date_create_immutable(

// See DateTimeImmutable::__construct.

// DATETIMEIMMUTABLE___CONSTRUCT - BEGIN
// DateTimeImmutable::__construct
// 
// Parameters 
// string datetime - A date/time string. Valid formats are explained in Date and Time Formats.
// Enter "now" here to obtain the current time when using the $timezone parameter.
// 
// DateTimeZone timezone - A DateTimeZone object representing the timezone of $datetime.
// If $timezone is omitted or null, the current timezone will be used
// Note: The $timezone parameter and the current timezone are ignored when the $datetime parameter either is a UNIX timestamp (e.g. @946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00, or 2010-07-05T06:00:00Z).
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetimeimmutable.construct.php
// DATETIMEIMMUTABLE___CONSTRUCT - END

$datetime, // string $datetime,

$timezone // DateTimeZone $timezone

); // Return Values
// Returns a new DateTimeImmutable instance or false on failure
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.date-create-immutable.php
// ========== DATE_CREATE_IMMUTABLE - END

// SYNTAX:
// DateTimeImmutable|false date_create_immutable(string $datetime = "now", DateTimeZone $timezone = null)

return $return_date_create_immutable; // DateTimeImmutable|false
}
// ============================== END
// PHP_DATE_DATETIME_DATE_CREATE_IMMUTABLE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_CREATE 
// ============================== OFFLINE
// ============================== ABOUT
// Create a new DateTime object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_create() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_create($datetime = "now", $timezone = null)
{
$return_date_create = false;

// ========== DATE_CREATE - BEGIN
// ===== ABOUT
// create a new DateTime object
// ===== DESCRIPTION
// This is the procedural version of DateTime::__construct().
// Unlike the DateTime constructor, it will return false instead of an exception if the passed in datetime string is invalid.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// date_create(string $datetime = "now", ?DateTimeZone $timezone = null): DateTime|false
// ===== CODE
$return_date_create = date_create(

// See DateTimeImmutable::__construct.

// DATETIMEIMMUTABLE___CONSTRUCT - BEGIN
// DateTimeImmutable::__construct
// 
// Parameters 
// string datetime - A date/time string. Valid formats are explained in Date and Time Formats.
// Enter "now" here to obtain the current time when using the $timezone parameter.
// 
// DateTimeZone timezone - A DateTimeZone object representing the timezone of $datetime.
// If $timezone is omitted or null, the current timezone will be used
// Note: The $timezone parameter and the current timezone are ignored when the $datetime parameter either is a UNIX timestamp (e.g. @946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00, or 2010-07-05T06:00:00Z).
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetimeimmutable.construct.php
// DATETIMEIMMUTABLE___CONSTRUCT - END

$datetime, // string $datetime

$timezone // DateTimeZone $timezone

); // Return Values
// Returns a new DateTime instance or false on failure
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.date-create.php
// ========== DATE_CREATE - END

// SYNTAX:
// DateTime|false date_create(string $datetime = "now", DateTimeZone $timezone = null)

return $return_date_create; // DateTime|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_CREATE 
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_DATE_SET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the date.
// 
// date_date_set - Alias of DateTime::setDate().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_date_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_date_set($object, $year, $month, $day)
{
$return_date_date_set = null;

// ========== DATE_DATE_SET - BEGIN
// ===== ABOUT
// date_date_set - Alias of DateTime::setDate()
// ===== DESCRIPTION
// This function is an alias of: DateTime::setDate()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_date_set = date_date_set(

$object, // DateTime $object

$year, // int $year

$month, // int $month

$day // int $day

); // Return
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.date-date-set.php
// ========== DATE_DATE_SET - END

// ========== DATETIME_SETDATE - BEGIN
// ===== ABOUT
// Sets the date
// ===== DESCRIPTION
// Resets the current date of the DateTime object to a different date.
// Like DateTimeImmutable::setDate() but works with DateTime, and changes the existing object.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setDate(int $year, int $month, int $day): DateTime
// 
// Procedural style
// date_date_set(
//     DateTime $object,
//     int $year,
//     int $month,
//     int $day
// ): DateTime
// ===== CODE
// $return_datetime_setdate = date_date_set(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $year, // int year - Year of the date.

// $month, // int month - Month of the date.

// $day // int day - Day of the date.

// ); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.setdate.php
// ========== DATETIME_SETDATE - END

// SYNTAX:
// DateTime date_date_set(DateTime $object, int $year, int $month, int $day)

return $return_date_date_set; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_DATE_SET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_DATE_DEFAULT_TIMEZONE_GET
// ============================== OFFLINE
// ============================== ABOUT
// Gets the default timezone used by all date/time functions in a script.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_default_timezone_get() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_date_default_timezone_get()
{
$return_date_default_timezone_get = null;

// ========== DATE_DEFAULT_TIMEZONE_GET - BEGIN
// ===== ABOUT
// Gets the default timezone used by all date/time functions in a script
// ===== DESCRIPTION
// In order of preference, this function returns the default timezone by:
// * Reading the timezone set using the date_default_timezone_set() function (if any)
// * Reading the value of the date.timezone ini option (if set)
// If none of the above succeed, date_default_timezone_get() will return a default timezone of UTC.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// date_default_timezone_get(): string
// ===== CODE
$return_date_default_timezone_get = date_default_timezone_get(

// This function has no parameters.

); // Return Values
// Returns a string.
// 
// [examples]
// Examples
// [example]
// Example #1 Getting the default timezone
// [php]
// date_default_timezone_set('Europe/London');
// 
// if (date_default_timezone_get()) {
//     echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
// }
// 
// if (ini_get('date.timezone')) {
//     echo 'date.timezone: ' . ini_get('date.timezone');
// }
// 
// [/php]
// The above example will output something similar to:
// [result]
// date_default_timezone_set: Europe/London
// date.timezone: Europe/London
// [/result]
// [/example]
// [example]
// Example #2 Getting the abbreviation of a timezone
// [php]
// date_default_timezone_set('America/Los_Angeles');
// echo date_default_timezone_get() . ' => ' . date('e') . ' => ' . date('T');
// [/php]
// The above example will output:
// [result]
// America/Los_Angeles => America/Los_Angeles => PST
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.date-default-timezone-get.php
// ========== DATE_DEFAULT_TIMEZONE_GET - END

// SYNTAX:
// string date_default_timezone_get()

return $return_date_default_timezone_get; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_DATE_DEFAULT_TIMEZONE_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_DATE_DEFAULT_TIMEZONE_SET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the default timezone used by all date/time functions in a script.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_default_timezone_set() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_date_default_timezone_set($timezoneId)
{
$return_date_default_timezone_set = false;

// ========== DATE_DEFAULT_TIMEZONE_SET - BEGIN
// ===== ABOUT
// Sets the default timezone used by all date/time functions in a script
// ===== DESCRIPTION
// date_default_timezone_set() sets the default timezone used by all date/time functions.
// Instead of using this function to set the default timezone in your script, you can also use the INI setting date.timezone to set the default timezone.
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// date_default_timezone_set(string $timezoneId): bool
// ===== CODE
$return_date_default_timezone_set = date_default_timezone_set(

$timezoneId // string timezoneId - The timezone identifier, like UTC, Africa/Lagos, Asia/Hong_Kong, or Europe/Lisbon. The list of valid identifiers is available in the List of Supported Timezones.

); // Return Values
// This function returns false if the timezoneId isn't valid, or true otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Getting the default timezone
// [php]
// date_default_timezone_set('America/Los_Angeles');
// 
// $script_tz = date_default_timezone_get();
// 
// if (strcmp($script_tz, ini_get('date.timezone'))){
//     echo 'Script timezone differs from ini-set timezone.';
// } else {
//     echo 'Script timezone and ini-set timezone match.';
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.date-default-timezone-set.php
// ========== DATE_DEFAULT_TIMEZONE_SET - END

// SYNTAX:
// bool date_default_timezone_set(string $timezoneId)

return $return_date_default_timezone_set; // bool
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_DATE_DEFAULT_TIMEZONE_SET
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_DATE_DIFF  
// ============================== OFFLINE
// ============================== ABOUT
// Returns the difference between two DateTime objects.
// 
// date_diff - Alias of DateTime::diff().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_diff() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_diff($datetime, $targetObject, $absolute = false)
{
$return_date_diff = null;

// ========== DATE_DIFF - BEGIN
// ===== ABOUT
// date_diff - Alias of DateTime::diff()
// ===== DESCRIPTION
// This function is an alias of: DateTime::diff()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_diff = date_diff(

$datetime, // DateTimeInterface datetime

$targetObject, // DateTimeInterface $targetObject

$absolute // bool absolute

); // Return Values
// DateInterval
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-diff.php
// ========== DATE_DIFF - END

// ========== DATETIME_DIFF - BEGIN
// ===== ABOUT
// Returns the difference between two DateTime objects
// ===== DESCRIPTION
// Returns the difference between two DateTimeInterface objects.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// public DateTimeImmutable::diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// public DateTime::diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// 
// Procedural style
// date_diff(DateTimeInterface $baseObject, DateTimeInterface $targetObject, bool $absolute = false): DateInterval
// ===== CODE
// $return_datetime_diff = date_diff(

// $datetime, // DateTimeInterface datetime - The date to compare to.

// $targetObject, // DateTimeInterface $targetObject

// $absolute // bool absolute - Should the interval be forced to be positive?

// ); // Return Values
// The DateInterval object represents the difference between the two dates.
// The return value more specifically represents the clock-time interval to apply to the original object ($this or $originObject) to arrive at the $targetObject. This process is not always reversible.
// The method is aware of DST changeovers, and hence can return an interval of 24 hours and 30 minutes, as per one of the examples. If you want to calculate with absolute time, you need to convert both the $this/$baseObject, and $targetObject to UTC first.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::diff() example
// Object-oriented style
// [php]
// $origin = new DateTimeImmutable('2009-10-11');
// $target = new DateTimeImmutable('2009-10-13');
// $interval = $origin->diff($target);
// echo $interval->format('%R%a days');
// [/php]
// Procedural style
// [php]
// $origin = date_create('2009-10-11');
// $target = date_create('2009-10-13');
// $interval = date_diff($origin, $target);
// echo $interval->format('%R%a days');
// [/php]
// The above examples will output:
// [result]
// +2 days
// [/result]
// [/example]
// [example]
// Example #2 DateTimeInterface::diff() during DST changeover
// [php]
// $originalTime = new DateTimeImmutable("2021-10-30 09:00:00 Europe/London");
// $targedTime = new DateTimeImmutable("2021-10-31 08:30:00 Europe/London");
// $interval = $originalTime->diff($targedTime);
echo $interval->format("%H:%I:%S (Full days: %a)"), "\n";
// [/php]
// The above example will output:
// [result]
// 24:30:00 (Full days: 0)
// [/result]
// [/example]
// [example]
// Example #3 DateTimeInterface::diff() range
// The value that the method returns is the exact amount of time to get from $this to $targetObject. Comparing January 1st to December 31st returns therefore 364, and not 365, days (for non-leap years).
// [php]
// $originalTime = new DateTimeImmutable("2023-01-01 UTC");
// $targedTime = new DateTimeImmutable("2023-12-31 UTC");
// $interval = $originalTime->diff($targedTime);
// echo "Full days: ", $interval->format("%a"), "\n";
// [/php]
// The above example will output:
// [result]
// Full days: 364
// [/result]
// [/example]
// [example]
// Example #4 DateTime object comparison
// Note: DateTimeImmutable and DateTime objects can be compared using comparison operators.
// [php]
// $date1 = new DateTime("now");
// $date2 = new DateTime("tomorrow");
// 
// var_dump($date1 == $date2);
// var_dump($date1 < $date2);
// var_dump($date1 > $date2);
// [/php]
// The above example will output:
// [result]
// bool(false)
// bool(true)
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.diff.php
// ========== DATETIME_DIFF - END

// SYNTAX:
// DateInterval date_diff(DateTimeInterface $baseObject, DateTimeInterface $targetObject, bool $absolute = false)

return $return_date_diff; // DateInterval
}
*/
// ============================== END
//  PHP_DATE_DATETIME_DATE_DIFF  
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_FORMAT 
// ============================== OFFLINE
// ============================== ABOUT
// Returns date formatted according to given format.
// 
// date_format - Alias of DateTime::format().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_format() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_format($object, $format)
{
$return_date_format = null;

// ========== DATE_FORMAT - BEGIN
// ===== ABOUT
// date_format - Alias of DateTime::format()
// ===== DESCRIPTION
// This function is an alias of: DateTime::format()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_format = date_format(

$object, // DateTimeInterface object

$format // string format

); // Return
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-format.php
// ========== DATE_FORMAT - END

// ========== DATETIME_FORMAT - BEGIN
// ===== ABOUT
// Returns date formatted according to given format
// ===== DESCRIPTION
// Returns date formatted according to given format.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::format(string $format): string
// public DateTimeImmutable::format(string $format): string
// public DateTime::format(string $format): string
// 
// Procedural style
// date_format(DateTimeInterface $object, string $format): string
// ===== CODE
// $return_datetime_format = date_format(

// $object, // DateTimeInterface object - Procedural style only: A DateTime object returned by date_create()

// $format // string format - The format of the outputted date string. See the formatting options below. There are also several predefined date constants that may be used instead, so for example DATE_RSS contains the format string 'D, d M Y H:i:s'.
// 
// The following characters are recognized in the format parameter string
// format character  - Description                                                       ; Example returned values
// Day               - ---                                                               ; ---
// d                 - Day of the month, 2 digits with leading zeros                     ; 01 to 31
// D                 - A textual representation of a day, three letters                  ; Mon through Sun
// j                 - Day of the month without leading zeros                            ; 1 to 31
// l (lowercase 'L') - A full textual representation of the day of the week              ; Sunday through Saturday
// N                 - ISO 8601 numeric representation of the day of the week            ; 1 (for Monday) through 7 (for Sunday)
// S                 - English ordinal suffix for the day of the month, 2 characters     ; st, nd, rd or th. Works well with j
// w                 - Numeric representation of the day of the week                     ; 0 (for Sunday) through 6 (for Saturday)
// z                 - The day of the year (starting from 0)                             ; 0 through 365
// Week              - ---                                                               ; ---
// W                 - ISO 8601 week number of year, weeks starting on Monday            ; Example: 42 (the 42nd week in the year)
// Month             - ---                                                               ; ---
// F                 - A full textual representation of a month, such as January or March ; January through December
// m                 - Numeric representation of a month, with leading zeros             ; 01 through 12
// M                 - A short textual representation of a month, three letters          ; Jan through Dec
// n                 - Numeric representation of a month, without leading zeros          ; 1 through 12
// t                 - Number of days in the given month                                 ; 28 through 31
// Year              - ---                                                               ; ---
// L                 - Whether it's a leap year                                          ; 1 if it is a leap year, 0 otherwise.
// o                 - ISO 8601 week-numbering year. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. ; Examples: 1999 or 2003
// X                 - An expanded full numeric representation of a year, at least 4 digits, with - for years BCE, and + for years CE. ; Examples: -0055, +0787, +1999, +10191
// x                 - An expanded full numeric representation if required, or a standard full numeral representation if possible (like Y). At least four digits. Years BCE are prefixed with a -. Years beyond (and including) 10000 are prefixed by a +. ; Examples: -0055, 0787, 1999, +10191
// Y                 - A full numeric representation of a year, at least 4 digits, with - for years BCE. ; Examples: -0055, 0787, 1999, 2003, 10191
// y                 - A two digit representation of a year                              ; Examples: 99 or 03
// Time              - ---                                                               ; ---
// a                 - Lowercase Ante meridiem and Post meridiem                         ; am or pm
// A                 - Uppercase Ante meridiem and Post meridiem                         ; AM or PM
// B                 - Swatch Internet time                                              ; 000 through 999
// g                 - 12-hour format of an hour without leading zeros                   ; 1 through 12
// G                 - 24-hour format of an hour without leading zeros                   ; 0 through 23
// h                 - 12-hour format of an hour with leading zeros                      ; 01 through 12
// H                 - 24-hour format of an hour with leading zeros                      ; 00 through 23
// i                 - Minutes with leading zeros                                        ; 00 to 59
// s                 - Seconds with leading zeros                                        ; 00 through 59
// u                 - Microseconds. Note that date() will always generate 000000 since it takes an int parameter, whereas DateTime::format() does support microseconds if DateTime was created with microseconds. ; Example: 654321
// v                 - Milliseconds. Same note applies as for u.                         ; Example: 654
// Timezone          - ---                                                               ; ---
// e                 - Timezone identifier                                               ; Examples: UTC, GMT, Atlantic/Azores
// I (capital i)     - Whether or not the date is in daylight saving time                ; 1 if Daylight Saving Time, 0 otherwise.
// O                 - Difference to Greenwich time (GMT) without colon between hours and minutes ; Example: +0200
// P                 - Difference to Greenwich time (GMT) with colon between hours and minutes ; Example: +02:00
// p                 - The same as P, but returns Z instead of +00:00 (available as of PHP 8.0.0) ; Examples: Z or +02:00
// T                 - Timezone abbreviation, if known; otherwise the GMT offset.        ; Examples: EST, MDT, +05
// Z                 - Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. ; -43200 through 50400
// Full Date/Time    - ---                                                               ; ---
// c                 - ISO 8601 date                                                     ; 2004-02-12T15:19:21+00:00
// r                 - > RFC 2822/> RFC 5322 formatted date                              ; Example: Thu, 21 Dec 2000 16:01:07 +0200
// U                 - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)        ; See also time()
// 
// Unrecognized characters in the format string will be printed as-is. The Z format will always return 0 when using gmdate().
// Note: Since this function only accepts int timestamps the u format character is only useful when using the date_format() function with user based timestamps created with date_create().

// ); // Return Values
// Returns the formatted date string on success.
// 
// Changelog
// Version - Description
// 8.2.0   - The format characters X and x have been added.
// 8.0.0   - The format character p has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeInterface::format() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2000-01-01');
// echo $date->format('Y-m-d H:i:s');
// [/php]
// Procedural style
// [php]
// $date = date_create('2000-01-01');
// echo date_format($date, 'Y-m-d H:i:s');
// [/php]
// The above example will output:
// [result]
// 2000-01-01 00:00:00
// [/result]
// [/example]
// [example]
// Example #2 More examples
// [php]
// // set the default timezone to use.
// date_default_timezone_set('UTC');
// 
// // now
// $date = new DateTimeImmutable();
// 
// // Prints something like: Wednesday
// echo $date->format('l'), "\n";
// 
// // Prints something like: Wednesday 19th of October 2022 08:40:48 AM
// echo $date->format('l jS \o\f F Y h:i:s A'), "\n";
// 
// // use the constants in the format parameter
// // prints something like: Wed, 19 Oct 2022 08:40:48 +0000
// echo $date->format(DateTimeInterface::RFC2822), "\n";
// [/php]
// You can prevent a recognized character in the format string from being expanded by escaping it with a preceding backslash. If the character with a backslash is already a special sequence, you may need to also escape the backslash.
// [/example]
// [example]
// Example #3 Escaping characters while formatting
// [php]
// $date = new DateTimeImmutable();
// 
// // prints something like: Wednesday the 19th
// echo $date->format('l \t\h\e jS');
// [/php]
// To format dates in other languages, IntlDateFormatter::format() can be used instead of DateTimeInterface::format().
// [/example]
// [/examples]
// 
// Notes
// This method does not use locales. All output is in English.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.format.php
// ========== DATETIME_FORMAT - END

// SYNTAX:
// string date_format(DateTimeInterface $object, string $format)

return $return_date_format; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_FORMAT 
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_GET_LAST_ERRORS
// ============================== OFFLINE
// ============================== ABOUT
// Returns the warnings and errors.
// 
// date_get_last_errors - Alias of DateTimeImmutable::getLastErrors().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_get_last_errors() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_get_last_errors()
{
$return_date_get_last_errors = false;

// ========== DATE_GET_LAST_ERRORS - BEGIN
// ===== ABOUT
// date_get_last_errors - Alias of DateTimeImmutable::getLastErrors()
// ===== DESCRIPTION
// This function is an alias of: DateTimeImmutable::getLastErrors()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_get_last_errors = date_get_last_errors(

); // Return
// array|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-get-last-errors.php
// ========== DATE_GET_LAST_ERRORS - END

// ========== DATETIMEIMMUTABLE_GETLASTERRORS - BEGIN
// ===== ABOUT
// Returns the warnings and errors
// ===== DESCRIPTION
// Returns an array of warnings and errors found while parsing a date/time string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public static DateTimeImmutable::getLastErrors(): array|false
// ===== CODE

// This function has no parameters.

// Return Values
// Returns array containing info about warnings and errors, or false if there are neither warnings nor errors.
// 
// Changelog
// Version - Description
// 8.2.0   - Before PHP 8.2.0, this function did not return false when there were no warnings or errors. Instead, it would always return the documented array structure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::getLastErrors() example
// [php]
// try {
//     $date = new DateTimeImmutable('asdfasdf');
// } catch (Exception $e) {
//     // For demonstration purposes only...
//     print_r(DateTimeImmutable::getLastErrors());
// 
//     // The real object-oriented way to do this is
//     // echo $e->getMessage();
// }
// [/php]
// The above examples will output:
// [result]
// Array
// (
//    [warning_count] => 1
//    [warnings] => Array
//        (
//            [6] => Double timezone specification
//        )
// 
//    [error_count] => 1
//    [errors] => Array
//        (
//            [0] => The timezone could not be found in the database
//        )
// 
// )
// [/result]
The indexes 6, and 0 in the example output refer to the character index in the string where the error occurred.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimeimmutable.getlasterrors.php
// ========== DATETIMEIMMUTABLE_GETLASTERRORS - END

// SYNTAX:
// array|false date_get_last_errors()

return $return_date_get_last_errors; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_GET_LAST_ERRORS
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_INTERVAL_CREATE_FROM_DATE_STRING
// ============================== OFFLINE
// ============================== ABOUT
// Sets up a DateInterval from the relative parts of the string.
// 
// date_interval_create_from_date_string - Alias of DateInterval::createFromDateString().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_interval_create_from_date_string() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_interval_create_from_date_string($datetime)
{
$return_date_interval_create_from_date_string = false;

// ========== DATE_INTERVAL_CREATE_FROM_DATE_STRING - BEGIN
// ===== ABOUT
// date_interval_create_from_date_string - Alias of DateInterval::createFromDateString()
// ===== DESCRIPTION
// This function is an alias of: DateInterval::createFromDateString()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_interval_create_from_date_string = date_interval_create_from_date_string(

$datetime // string $datetime

); // Return
// DateInterval|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-interval-create-from-date-string.php
// ========== DATE_INTERVAL_CREATE_FROM_DATE_STRING - END

// ========== DATEINTERVAL_CREATEFROMDATESTRING - BEGIN
// ===== ABOUT
// Sets up a DateInterval from the relative parts of the string
// ===== DESCRIPTION
// Uses the date/time parsers as used in the DateTimeImmutable constructor to create a DateInterval from the relative parts of the parsed string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateInterval::createFromDateString(string $datetime): DateInterval|false
// 
// Procedural style
// date_interval_create_from_date_string(string $datetime): DateInterval|false
// ===== CODE
// $return_dateinterval_createfromdatestring = date_interval_create_from_date_string(

// $datetime // string datetime - A date with relative parts. Specifically, the relative formats supported by the parser used for DateTimeImmutable, DateTime, and strtotime() will be used to construct the DateInterval.
// To use an ISO-8601 format string like P7D, you must use the constructor.

// ); // Return Values
// Returns a new DateInterval instance on success, or false on failure.
// 
// Changelog
// Version - Description
// 8.2.0   - Only the from_string and date_string properties will be visible when a DateInterval is created with this method.
// 
// [examples]
// Examples
// [example]
// Example #1 Parsing valid date intervals
// [php]
// // Each set of intervals is equal.
// $i = new DateInterval('P1D');
// $i = DateInterval::createFromDateString('1 day');
// 
// $i = new DateInterval('P2W');
// $i = DateInterval::createFromDateString('2 weeks');
// 
// $i = new DateInterval('P3M');
// $i = DateInterval::createFromDateString('3 months');
// 
// $i = new DateInterval('P4Y');
// $i = DateInterval::createFromDateString('4 years');
// 
// $i = new DateInterval('P1Y1D');
// $i = DateInterval::createFromDateString('1 year + 1 day');
// 
// $i = new DateInterval('P1DT12H');
// $i = DateInterval::createFromDateString('1 day + 12 hours');
// 
// $i = new DateInterval('PT3600S');
// $i = DateInterval::createFromDateString('3600 seconds');
// [/php]
// [/example]
// [example]
// Example #2 Parsing combinations and negative intervals
// [php]
// $i = DateInterval::createFromDateString('62 weeks + 1 day + 2 weeks + 2 hours + 70 minutes');
// echo $i->format('%d %h %i'), "\n";
// 
// $i = DateInterval::createFromDateString('1 year - 10 days');
// echo $i->format('%y %d'), "\n";
// [/php]
// The above example will output:
// [result]
// 449 2 70
// 1 -10
// [/result]
// [/example]
// [example]
// Example #3 Parsing special relative date intervals
// [php]
// $i = DateInterval::createFromDateString('last day of next month');
// var_dump($i);
// 
// $i = DateInterval::createFromDateString('last weekday');
// var_dump($i);
// [/php]
// Output of the above example in PHP 8.2:
// [result]
// object(DateInterval)#1 (2) {
//   ["from_string"]=>
//   bool(true)
//   ["date_string"]=>
//   string(22) "last day of next month"
// }
// object(DateInterval)#2 (2) {
//   ["from_string"]=>
//   bool(true)
//   ["date_string"]=>
//   string(12) "last weekday"
// }
// [/result]
// Output of the above example in PHP 8 is similar to:
// [result]
// object(DateInterval)#1 (16) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(1)
//   ["d"]=>
//   int(0)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["weekday"]=>
//   int(0)
//   ["weekday_behavior"]=>
//   int(0)
//   ["first_last_day_of"]=>
//   int(2)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["special_type"]=>
//   int(0)
//   ["special_amount"]=>
//   int(0)
//   ["have_weekday_relative"]=>
//   int(0)
//   ["have_special_relative"]=>
//   int(0)
// }
// object(DateInterval)#2 (16) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(0)
//   ["d"]=>
//   int(0)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["weekday"]=>
//   int(0)
//   ["weekday_behavior"]=>
//   int(0)
//   ["first_last_day_of"]=>
//   int(0)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["special_type"]=>
//   int(1)
//   ["special_amount"]=>
//   int(-1)
//   ["have_weekday_relative"]=>
//   int(0)
//   ["have_special_relative"]=>
//   int(1)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/dateinterval.createfromdatestring.php
// ========== DATEINTERVAL_CREATEFROMDATESTRING - END

// SYNTAX:
// DateInterval|false date_interval_create_from_date_string(string $datetime)

return $return_date_interval_create_from_date_string; // DateInterval|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_INTERVAL_CREATE_FROM_DATE_STRING
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_INTERVAL_FORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Formats the interval.
// 
// date_interval_format - Alias of DateInterval::format().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_interval_format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_interval_format($format)
{
$return_date_interval_format = null;

// ========== DATE_INTERVAL_FORMAT - BEGIN
// ===== ABOUT
// date_interval_format - Alias of DateInterval::format()
// ===== DESCRIPTION
// This function is an alias of: DateInterval::format()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_interval_format = date_interval_format(

$format // string format

); // Return
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-interval-format.php
// ========== DATE_INTERVAL_FORMAT - END

// ========== DATEINTERVAL_FORMAT - BEGIN
// ===== ABOUT
// Formats the interval
// ===== DESCRIPTION
// Formats the interval.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateInterval::format(string $format): string
// ===== CODE
// $return_dateinterval_format = DateInterval::format(

// $format // string format - The following characters are recognized in the format parameter string. Each format character must be prefixed by a percent sign (%).
// 
// format character | Description                                                                   | Example values
// %                | Literal %                                                                     | %
// Y                | Years, numeric, at least 2 digits with leading 0                              | 01, 03
// y                | Years, numeric                                                                | 1, 3
// M                | Months, numeric, at least 2 digits with leading 0                             | 01, 03, 12
// m                | Months, numeric                                                               | 1, 3, 12
// D                | Days, numeric, at least 2 digits with leading 0                               | 01, 03, 31
// d                | Days, numeric                                                                 | 1, 3, 31
// a                | Total number of days as a result of a DateTime::diff() or (unknown) otherwise | 4, 18, 8123
// H                | Hours, numeric, at least 2 digits with leading 0                              | 01, 03, 23
// h                | Hours, numeric                                                                | 1, 3, 23
// I                | Minutes, numeric, at least 2 digits with leading 0                            | 01, 03, 59
// i                | Minutes, numeric                                                              | 1, 3, 59
// S                | Seconds, numeric, at least 2 digits with leading 0                            | 01, 03, 57
// s                | Seconds, numeric                                                              | 1, 3, 57
// F                | Microseconds, numeric, at least 6 digits with leading 0                       | 007701, 052738, 428291
// f                | Microseconds, numeric                                                         | 7701, 52738, 428291
// R                | Sign "-" when negative, "+" when positive                                     | -, +
// r                | Sign "-" when negative, empty when positive                                   | -,

// ); // Return Values
// Returns the formatted interval.
// 
// Changelog
// Version - Description
// 7.2.12  - The F and f format will now always be positive.
// 7.1.0   - The F and f format characters were added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateInterval example
// [php]
// 
// $interval = new DateInterval('P2Y4DT6H8M');
// echo $interval->format('%d days');
// 
// [/php]
// The above example will output:
// [result]
// 4 days
// [/result]
// [/example]
// [example]
// Example #2 DateInterval and carry over points
// [php]
// 
// $interval = new DateInterval('P32D');
// echo $interval->format('%d days');
// 
// [/php]
// The above example will output:
// [result]
// 32 days
// [/result]
// [/example]
// [example]
// Example #3 DateInterval and DateTime::diff() with the %a and %d modifiers
// [php]
// 
// $january = new DateTime('2010-01-01');
// $february = new DateTime('2010-02-01');
// $interval = $february->diff($january);
// 
// // %a will output the total number of days.
// echo $interval->format('%a total days')."\n";
// 
// // While %d will only output the number of days not already covered by the
// // month.
// echo $interval->format('%m month, %d days');
// 
// [/php]
// The above example will output:
// [result]
// 31 total days
// 1 month, 0 days
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The DateInterval::format() method does not recalculate carry over points in time strings nor in date segments. This is expected because it is not possible to overflow values like "32 days" which could be interpreted as anything from "1 month and 4 days" to "1 month and 1 day".
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/dateinterval.format.php
// ========== DATEINTERVAL_FORMAT - END

// SYNTAX:
// string date_interval_format(string $format)

return $return_date_interval_format; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_INTERVAL_FORMAT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_ISODATE_SET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the ISO date.
// 
// date_isodate_set - Alias of DateTime::setISODate().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_isodate_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_isodate_set($object, $year, $week, $dayOfWeek = 1)
{
$return_date_isodate_set = null;

// ========== DATE_ISODATE_SET - BEGIN
// ===== ABOUT
// date_isodate_set - Alias of DateTime::setISODate()
// ===== DESCRIPTION
// This function is an alias of: DateTime::setISODate()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_isodate_set = date_isodate_set(

$object, // DateTime object

$year, // int year

$week, // int week

$dayOfWeek // int dayOfWeek

); // Return
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-isodate-set.php
// ========== DATE_ISODATE_SET - END

// ========== DATETIME_SETISODATE - BEGIN
// ===== ABOUT
// Sets the ISO date
// ===== DESCRIPTION
// Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.
// Like DateTimeImmutable::setISODate() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setISODate(int $year, int $week, int $dayOfWeek = 1): DateTime
// 
// Procedural style
// date_isodate_set(
//    DateTime $object,
//    int $year,
//    int $week,
//    int $dayOfWeek = 1
// ): DateTime
// ===== CODE
// $return_datetime_setisodate = date_isodate_set(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $year, // int year - Year of the date.

// $week, // int week - Week of the date.

// $dayOfWeek // int dayOfWeek - Offset from the first day of the week.

// ); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.setisodate.php
// ========== DATETIME_SETISODATE - END

// SYNTAX:
// DateTime date_isodate_set(DateTime $object, int $year, int $week, int $dayOfWeek = 1)

return $return_date_isodate_set; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_ISODATE_SET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_MODIFY 
// ============================== OFFLINE
// ============================== ABOUT
// Alters the timestamp.
// 
// date_modify - Alias of DateTime::modify().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_modify() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_modify($object, $modifier)
{
$return_date_modify = false;

// ========== DATE_MODIFY - BEGIN
// ===== ABOUT
// date_modify - Alias of DateTime::modify()
// ===== DESCRIPTION
// This function is an alias of: DateTime::modify()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_modify = date_modify(

$object, // DateTime object

$modifier // string modifier

); // Return
// DateTime|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-modify.php
// ========== DATE_MODIFY - END

// ========== DATETIME_MODIFY - BEGIN
// ===== ABOUT
// Alters the timestamp
// ===== DESCRIPTION
// Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by DateTimeImmutable::__construct().
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::modify(string $modifier): DateTime|false
// 
// Procedural style
// date_modify(DateTime $object, string $modifier): DateTime|false
// ===== CODE
// $return_datetime_modify = date_modify(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $modifier // string modifier - A date/time string. Valid formats are explained in Date and Time Formats.

// ); // Return Values
// Returns the modified DateTime object for method chaining or false on failure.
// 
// Errors/Exceptions
// Object Orientated API only: If an invalid Date/Time string is passed, DateMalformedStringException is thrown.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws DateMalformedStringException with DateTime::modify() if an invalid string is passed, instead of a warning. date_modify() has not been changed.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::modify() example
// Object-oriented style
// [php]
// $date = new DateTime('2006-12-12');
// $date->modify('+1 day');
// echo $date->format('Y-m-d');
// [/php]
// Procedural style
// [php]
// $date = date_create('2006-12-12');
// date_modify($date, '+1 day');
// echo date_format($date, 'Y-m-d');
// [/php]
// The above examples will output:
// [result]
2006-12-13
// [/result]
// [/example]
// [example]
// Example #2 Beware when adding or subtracting months
// [php]
// $date = new DateTime('2000-12-31');
// 
// $date->modify('+1 month');
// echo $date->format('Y-m-d') . "\n";
// 
// $date->modify('+1 month');
// echo $date->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-01-31
// 2001-03-03
// [/result]
// [/example]
// [example]
// Example #3 All formats of Date and Time are supported
// [php]
// $date = new DateTime('2020-12-31');
// 
// $date->modify('July 1st, 2023');
// echo $date->format('Y-m-d H:i') . "\n";
// 
// $date->modify('Monday next week');
// echo $date->format('Y-m-d H:i') . "\n";
// 
// $date->modify('17:30');
// echo $date->format('Y-m-d H:i') . "\n";
// [/php]
// The above example will output:
// [result]
// 2023-07-01 00:00
// 2023-07-03 00:00
// 2023-07-03 17:30
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.modify.php
// ========== DATETIME_MODIFY - END

// SYNTAX:
// DateTime|false date_modify(DateTime $object, string $modifier)

return $return_date_modify; // DateTime|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_MODIFY 
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_OFFSET_GET
// ============================== OFFLINE
// ============================== ABOUT
// Returns the timezone offset.
// 
// date_offset_get - Alias of DateTime::getOffset().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_offset_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_offset_get($object)
{
$return_date_offset_get = 0;

// ========== DATE_OFFSET_GET - BEGIN
// ===== ABOUT
// date_offset_get - Alias of DateTime::getOffset()
// ===== DESCRIPTION
// This function is an alias of: DateTime::getOffset()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_offset_get = date_offset_get(

$object // DateTimeInterface object

); // Return
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-offset-get.php
// ========== DATE_OFFSET_GET - END

// ========== DATETIME_GETOFFSET - BEGIN
// ===== ABOUT
// Returns the timezone offset
// ===== DESCRIPTION
// Returns the timezone offset.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::getOffset(): int
// public DateTimeImmutable::getOffset(): int
// public DateTime::getOffset(): int
// 
// Procedural style
// date_offset_get(DateTimeInterface $object): int
// ===== CODE
// $return_datetime_getoffset = date_offset_get(

// $object // DateTimeInterface object - Procedural style only: A DateTime object returned by date_create()

// ); // Return Values
// Returns the timezone offset in seconds from UTC on success.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::getOffset() example
// Object-oriented style
// [php]
// $winter = new DateTimeImmutable('2010-12-21', new DateTimeZone('America/New_York'));
// $summer = new DateTimeImmutable('2008-06-21', new DateTimeZone('America/New_York'));
// 
// echo $winter->getOffset() . "\n";
// echo $summer->getOffset() . "\n";
// [/php]
// Procedural style
// [php]
// $winter = date_create('2010-12-21', timezone_open('America/New_York'));
// $summer = date_create('2008-06-21', timezone_open('America/New_York'));
// 
// echo date_offset_get($winter) . "\n";
// echo date_offset_get($summer) . "\n";
// [/php]
// The above examples will output:
// [result]
// -18000
// -14400
// [/result]
// Note: -18000 = -5 hours, -14400 = -4 hours.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.getoffset.php
// ========== DATETIME_GETOFFSET - END

// SYNTAX:
// int date_offset_get(DateTimeInterface $object)

return $return_date_offset_get; // int
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_OFFSET_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_PARSE_FROM_FORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Get info about given date formatted according to the specified format.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_parse_from_format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_parse_from_format($format, $datetime)
{
$return_date_parse_from_format = null;

// ========== DATE_PARSE_FROM_FORMAT - BEGIN
// ===== ABOUT
// Get info about given date formatted according to the specified format
// ===== DESCRIPTION
// Returns associative array with detailed info about given date/time.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// date_parse_from_format(string $format, string $datetime): array
// ===== CODE
$return_date_parse_from_format = date_parse_from_format(

$format, // string format - Documentation on how the format is used, please refer to the documentation of DateTimeImmutable::createFromFormat(). The same rules apply.

$datetime // string datetime - String representing the date/time.

); // Return Values
// Returns associative array with detailed info about given date/time.
// The returned array has keys for year, month, day, hour, minute, second, fraction, and is_localtime.
// If is_localtime is present then zone_type indicates the type of timezone. For type 1 (UTC offset) the zone, is_dst fields are added; for type 2 (abbreviation) the fields tz_abbr, is_dst are added; and for type 3 (timezone identifier) the tz_abbr, tz_id are added.
// The array includes warning_count and warnings fields. The first one indicate how many warnings there were. The keys of elements warnings array indicate the position in the given datetime where the warning occurred, with the string value describing the warning itself. An example below shows such a warning.
// The array also contains error_count and errors fields. The first one indicate how many errors were found. The keys of elements errors array indicate the position in the given datetime where the error occurred, with the string value describing the error itself. An example below shows such an error.
// Warning: The number of array elements in the warnings and errors arrays might be less than warning_count or error_count if they occurred at the same position.
// 
// Errors/Exceptions
// This functions throws ValueError when the datetime contains NULL-bytes.
// 
// Changelog
// Version              - Description
// 8.0.21, 8.1.8, 8.2.0 - Now throws ValueError when NULL-bytes are passed into datetime, which previously was silently ignored.
// 7.2.0                - The zone element of the returned array represents seconds instead of minutes now, and its sign is inverted. For instance -120 is now 7200.
// 
// [examples]
// Examples
// [example]
// Example #1 date_parse_from_format() example
// [php]
// $date = "6.1.2009 13:00+01:00";
// print_r(date_parse_from_format("j.n.Y H:iP", $date));
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [year] => 2009
//     [month] => 1
//     [day] => 6
//     [hour] => 13
//     [minute] => 0
//     [second] => 0
//     [fraction] =>
//     [warning_count] => 0
//     [warnings] => Array
//         (
//         )
// 
//     [error_count] => 0
//     [errors] => Array
//         (
//         )
// 
//     [is_localtime] => 1
//     [zone_type] => 1
//     [zone] => 3600
//     [is_dst] =>
// )
// [/result]
// [/example]
// [example]
// Example #2 date_parse_from_format() with warnings example
// [php]
// $date = "26 August 2022 22:30 pm";
// $parsed = date_parse_from_format("j F Y G:i a", $date);
// 
// echo "Warnings count: ", $parsed['warning_count'], "\n";
// foreach ($parsed['warnings'] as $position => $message) {
//     echo "\tOn position {$position}: {$message}\n";
// }
// [/php]
// The above example will output:
// [result]
// Warnings count: 1
// 	On position 23: The parsed time was invalid
// [/result]
// [/example]
// [example]
// Example #3 date_parse_from_format() with errors example
// [php]
// $date = "26 August 2022 CEST";
// $parsed = date_parse_from_format("j F Y H:i", $date);
// 
// echo "Errors count: ", $parsed['error_count'], "\n";
// foreach ($parsed['errors'] as $position => $message) {
//     echo "\tOn position {$position}: {$message}\n";
// }
// [/php]
// The above example will output:
// [result]
// Errors count: 3
// 	On position 15: A two digit hour could not be found
// 	On position 19: Data missing
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-parse-from-format.php
// ========== DATE_PARSE_FROM_FORMAT - END

// SYNTAX:
// array date_parse_from_format(string $format, string $datetime)

return $return_date_parse_from_format; // array
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_PARSE_FROM_FORMAT
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_DATE_PARSE  
// ============================== OFFLINE
// ============================== ABOUT
// Returns associative array with detailed info about given date/time.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_parse() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_parse($datetime)
{
$return_date_parse = null;

// ========== DATE_PARSE - BEGIN
// ===== ABOUT
// Returns associative array with detailed info about given date/time
// ===== DESCRIPTION
// date_parse() parses the given datetime string according to the same rules as strtotime() and DateTimeImmutable::__construct(). Instead of returning a Unix timestamp (with strtotime()) or a DateTimeImmutable object (with DateTimeImmutable::__construct()), it returns an associative array with the information that it could detect in the given datetime string.
// If no information about a certain group of elements can be found, these array elements will be set to false or are missing. If needed for constructing a timestamp or DateTimeImmutable object from the same datetime string, more fields can be set to a non-false value. See the examples for cases where that happens.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// date_parse(string $datetime): array
// ===== CODE
$return_date_parse = date_parse(

$datetime // string datetime - Date/time in format accepted by DateTimeImmutable::__construct().

); // Return Values
// Returns array with information about the parsed date/time.
// The returned array has keys for year, month, day, hour, minute, second, fraction, and is_localtime.
// If is_localtime is present then zone_type indicates the type of timezone. For type 1 (UTC offset) the zone, is_dst fields are added; for type 2 (abbreviation) the fields tz_abbr, is_dst are added; and for type 3 (timezone identifier) the tz_abbr, tz_id are added.
// If relative time elements are present in the datetime string such as +3 days, the then returned array includes a nested array with the key relative. This array then contains the keys year, month, day, hour, minute, second, and if necessary weekday, and weekdays, depending on the string that was passed in.
// The array includes warning_count and warnings fields. The first one indicate how many warnings there were. The keys of elements warnings array indicate the position in the given datetime where the warning occurred, with the string value describing the warning itself.
// The array also contains error_count and errors fields. The first one indicate how many errors were found. The keys of elements errors array indicate the position in the given datetime where the error occurred, with the string value describing the error itself.
// Warning: The number of array elements in the warnings and errors arrays might be less than warning_count or error_count if they occurred at the same position.
// 
// Errors/Exceptions
// In case the date/time format has an error, the element 'errors' will contain the error messages.
// 
// Changelog
// Version - Description
// 7.2.0   - The zone element of the returned array represents seconds instead of minutes now, and its sign is inverted. For instance -120 is now 7200.
// 
// [examples]
// Examples
// [example]
// Example #1 A date_parse() example with a comprehensive datetime string
// [php]
// var_dump(date_parse("2006-12-12 10:00:00.5"));
// [/php]
// The above example will output:
// [result]
// array(12) {
//   ["year"]=>
//   int(2006)
//   ["month"]=>
//   int(12)
//   ["day"]=>
//   int(12)
//   ["hour"]=>
//   int(10)
//   ["minute"]=>
//   int(0)
//   ["second"]=>
//   int(0)
//   ["fraction"]=>
//   float(0.5)
//   ["warning_count"]=>
//   int(0)
//   ["warnings"]=>
//   array(0) {
//   }
//   ["error_count"]=>
//   int(0)
//   ["errors"]=>
//   array(0) {
//   }
//   ["is_localtime"]=>
//   bool(false)
// }
// [/result]
// The timezone elements only show up if they are included in the given datetime string. In that case there will always be a zone_type element and a few more depending on its value.
// [/example]
// [example]
// Example #2 date_parse() with timezone abbreviation information
// [php]
// var_dump(date_parse("June 2nd, 2022, 10:28:17 BST"));
// [/php]
// The above example will output:
// [result]
// array(16) {
//   ["year"]=>
//   int(2022)
//   ["month"]=>
//   int(6)
//   ["day"]=>
//   int(2)
//   ["hour"]=>
//   int(10)
//   ["minute"]=>
//   int(28)
//   ["second"]=>
//   int(17)
//   ["fraction"]=>
//   float(0)
//   ["warning_count"]=>
//   int(0)
//   ["warnings"]=>
//   array(0) {
//   }
//   ["error_count"]=>
//   int(0)
//   ["errors"]=>
//   array(0) {
//   }
//   ["is_localtime"]=>
//   bool(true)
//   ["zone_type"]=>
//   int(2)
//   ["zone"]=>
//   int(0)
//   ["is_dst"]=>
//   bool(true)
//   ["tz_abbr"]=>
//   string(3) "BST"
// }
// [/result]
// [/example]
// [example]
// Example #3 date_parse() with timezone identifier information
// [php]
// var_dump(date_parse("June 2nd, 2022, 10:28:17 Europe/London"));
// [/php]
// The above example will output:
// [result]
// array(14) {
//   ["year"]=>
//   int(2022)
//   ["month"]=>
//   int(6)
//   ["day"]=>
//   int(2)
//   ["hour"]=>
//   int(10)
//   ["minute"]=>
//   int(28)
//   ["second"]=>
//   int(17)
//   ["fraction"]=>
//   float(0)
//   ["warning_count"]=>
//   int(0)
//   ["warnings"]=>
//   array(0) {
//   }
//   ["error_count"]=>
//   int(0)
//   ["errors"]=>
//   array(0) {
//   }
//   ["is_localtime"]=>
//   bool(true)
//   ["zone_type"]=>
//   int(3)
//   ["tz_id"]=>
//   string(13) "Europe/London"
// }
// [/result]
// If a more minimal datetime string is parsed, less information is available. In this example, all the time parts are returned as false.
// [/example]
// [example]
// Example #4 date_parse() with a minimal string
// [php]
// var_dump(date_parse("June 2nd, 2022"));
// [/php]
// The above example will output:
// [result]
// array(12) {
//   ["year"]=>
//   int(2022)
//   ["month"]=>
//   int(6)
//   ["day"]=>
//   int(2)
//   ["hour"]=>
//   bool(false)
//   ["minute"]=>
//   bool(false)
//   ["second"]=>
//   bool(false)
//   ["fraction"]=>
//   bool(false)
//   ["warning_count"]=>
//   int(0)
//   ["warnings"]=>
//   array(0) {
//   }
//   ["error_count"]=>
//   int(0)
//   ["errors"]=>
//   array(0) {
//   }
//   ["is_localtime"]=>
//   bool(false)
// }
// [/result]
// Relative formats do not influence the values parsed from absolute formats, but are parsed into the "relative" element.
// [/example]
// [example]
// Example #5 date_parse() with relative formats
// [php]
// var_dump(date_parse("2006-12-12 10:00:00.5 +1 week +1 hour"));
// [/php]
// The above example will output:
// [result]
// array(13) {
//   ["year"]=>
//   int(2006)
//   ["month"]=>
//   int(12)
//   ["day"]=>
//   int(12)
//   ["hour"]=>
//   int(10)
//   ["minute"]=>
//   int(0)
//   ["second"]=>
//   int(0)
//   ["fraction"]=>
//   float(0.5)
//   ["warning_count"]=>
//   int(0)
//   ["warnings"]=>
//   array(0) {
//   }
//   ["error_count"]=>
//   int(0)
//   ["errors"]=>
//   array(0) {
//   }
//   ["is_localtime"]=>
//   bool(false)
//   ["relative"]=>
//   array(6) {
//     ["year"]=>
//     int(0)
//     ["month"]=>
//     int(0)
//     ["day"]=>
//     int(7)
//     ["hour"]=>
//     int(1)
//     ["minute"]=>
//     int(0)
//     ["second"]=>
//     int(0)
//   }
// }
// [/result]
// Some stanzas, such as Thursday will set the time portion of the string to 0. If Thursday is passed to DateTimeImmutable::__construct() it would also have resulted in the hour, minute, second, and fraction being set to 0. In the example below, the year element is however left as false.
// [/example]
// [example]
// Example #6 date_parse() with side-effects
// [php]
// var_dump(date_parse("Thursday, June 2nd"));
// [/php]
// The above example will output:
// [result]
// array(13) {
//   ["year"]=>
//   bool(false)
//   ["month"]=>
//   int(6)
//   ["day"]=>
//   int(2)
//   ["hour"]=>
//   int(0)
//   ["minute"]=>
//   int(0)
//   ["second"]=>
//   int(0)
//   ["fraction"]=>
//   float(0)
//   ["warning_count"]=>
//   int(0)
//   ["warnings"]=>
//   array(0) {
//   }
//   ["error_count"]=>
//   int(0)
//   ["errors"]=>
//   array(0) {
//   }
//   ["is_localtime"]=>
//   bool(false)
//   ["relative"]=>
//   array(7) {
//     ["year"]=>
//     int(0)
//     ["month"]=>
//     int(0)
//     ["day"]=>
//     int(0)
//     ["hour"]=>
//     int(0)
//     ["minute"]=>
//     int(0)
//     ["second"]=>
//     int(0)
//     ["weekday"]=>
//     int(4)
//   }
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-parse.php
// ========== DATE_PARSE - END

// SYNTAX:
// array date_parse(string $datetime)

return $return_date_parse; // array
}
*/
// ============================== END
//  PHP_DATE_DATETIME_DATE_PARSE  
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_DATE_SUB   
// ============================== OFFLINE
// ============================== ABOUT
// Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object.
// 
// date_sub - Alias of DateTime::sub().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_sub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_sub($object, $interval)
{
$return_date_sub = null;

// ========== DATE_SUB - BEGIN
// ===== ABOUT
// date_sub - Alias of DateTime::sub()
// ===== DESCRIPTION
// This function is an alias of: DateTime::sub()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_sub = date_sub(

$object, // DateTime object

$interval // DateInterval interval

); // Return
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-sub.php
// ========== DATE_SUB - END

// ========== DATETIME_SUB - BEGIN
// ===== ABOUT
// Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
// ===== DESCRIPTION
// Modifies the specified DateTime object, by subtracting the specified DateInterval object.
// Like DateTimeImmutable::sub() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::sub(DateInterval $interval): DateTime
// 
// Procedural style
// date_sub(DateTime $object, DateInterval $interval): DateTime
// ===== CODE
// $return_datetime_sub = date_sub(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $interval // DateInterval interval - A DateInterval object

// ); // Return Values
// Returns the modified DateTime object for method chaining.
// 
// Errors/Exceptions
// Object Orientated API only: If an unsupported operation is attempted, such as using a DateInterval object representing relative time specifications such as next weekday, a DateInvalidOperationException is thrown.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws a DateInvalidOperationException with DateTime::sub(), instead of a warning when an unsupported operation is attempted. date_sub() has not been changed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.sub.php
// ========== DATETIME_SUB - END

// SYNTAX:
// DateTime date_sub(DateTime $object, DateInterval $interval)

return $return_date_sub; // DateTime
}
*/
// ============================== END
//   PHP_DATE_DATETIME_DATE_SUB   
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_SUN_INFO
// ============================== OFFLINE
// ============================== ABOUT
// Returns an array with information about sunset/sunrise and twilight begin/end.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_sun_info() - PHP_5 >= PHP_5_1_2, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_sun_info($timestamp, $latitude, $longitude)
{
$return_date_sun_info = null;

// ========== DATE_SUN_INFO - BEGIN
// ===== ABOUT
// Returns an array with information about sunset/sunrise and twilight begin/end
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_2, PHP_7, PHP_8
// ===== SYNTAX
// date_sun_info(int $timestamp, float $latitude, float $longitude): array
// ===== CODE
$return_date_sun_info = date_sun_info(

$timestamp, // int timestamp - Unix timestamp.

$latitude, // float latitude - Latitude in degrees.

$longitude // float longitude - Longitude in degrees.

); // Return Values
// Returns array on success or false on failure. The structure of the array is detailed in the following list:
// sunrise                     - The timestamp of the sunrise (zenith angle = 90°35').
// sunset                      - The timestamp of the sunset (zenith angle = 90°35').
// transit                     - The timestamp when the sun is at its zenith, i.e. has reached its topmost point.
// civil_twilight_begin        - The start of the civil dawn (zenith angle = 96°). It ends at sunrise.
// civil_twilight_end          - The end of the civil dusk (zenith angle = 96°). It starts at sunset.
// nautical_twilight_begin     - The start of the nautical dawn (zenith angle = 102°). It ends at civil_twilight_begin.
// nautical_twilight_end       - The end of the nautical dusk (zenith angle = 102°). It starts at civil_twilight_end.
// astronomical_twilight_begin - The start of the astronomical dawn (zenith angle = 108°). It ends at nautical_twilight_begin.
// astronomical_twilight_end   - The end of the astronomical dusk (zenith angle = 108°). It starts at nautical_twilight_end.
// The values of the array elements are either UNIX timestamps, false if the sun is below the respective zenith for the whole day, or true if the sun is above the respective zenith for the whole day.
// 
// Changelog
// Version - Description
// 7.2.0   - The calculation was fixed with regards to local midnight instead of local noon, which changes the results slightly.
// 
// [examples]
// Examples
// [example]
// Example #1 A date_sun_info() example
// [php]
// $sun_info = date_sun_info(strtotime("2006-12-12"), 31.7667, 35.2333);
// foreach ($sun_info as $key => $val) {
//     echo "$key: " . date("H:i:s", $val) . "\n";
// }
// [/php]
// The above example will output:
// [result]
// sunrise: 05:52:11
// sunset: 15:41:21
// transit: 10:46:46
// civil_twilight_begin: 05:24:08
// civil_twilight_end: 16:09:24
// nautical_twilight_begin: 04:52:25
// nautical_twilight_end: 16:41:06
// astronomical_twilight_begin: 04:21:32
// astronomical_twilight_end: 17:12:00
// [/result]
// [/example]
// [example]
// Example #2 Polar night, with some processing
// [php]
// $tz = new \DateTimeZone('America/Anchorage');
// 
// $si = date_sun_info(strtotime("2022-12-21"), 70.21, -148.51);
// foreach ($si as $key => $value) {
//     echo
//         match ($value) {
//             true => 'always',
//             false => 'never',
//             default => date_create("@{$value}")->setTimeZone($tz)->format( 'H:i:s T' ),
//         },
//         ": {$key}",
//         "\n";
// }
// [/php]
// The above example will output:
// [result]
// never: sunrise
// never: sunset
// 12:52:18 AKST: transit
// 10:53:19 AKST: civil_twilight_begin
// 14:51:17 AKST: civil_twilight_end
// 09:01:47 AKST: nautical_twilight_begin
// 16:42:48 AKST: nautical_twilight_end
// 07:40:47 AKST: astronomical_twilight_begin
// 18:03:49 AKST: astronomical_twilight_end
// [/result]
// [/example]
// [example]
// Example #3 Midnight sun (Tromsø, Norway)
// [php]
// $si = date_sun_info(strtotime("2022-06-26"), 69.68, 18.94);
// print_r($si);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [sunrise] => 1
//     [sunset] => 1
//     [transit] => 1656240426
//     [civil_twilight_begin] => 1
//     [civil_twilight_end] => 1
//     [nautical_twilight_begin] => 1
//     [nautical_twilight_end] => 1
//     [astronomical_twilight_begin] => 1
//     [astronomical_twilight_end] => 1
// )
// [/result]
// [/example]
// [example]
// Example #4 Calculating length of day (Kyiv)
// [php]
// $si = date_sun_info(strtotime('2022-08-26'), 50.45, 30.52);
// $diff = $si['sunset'] - $si['sunrise'];
// echo "Length of day: ",
//     floor($diff / 3600), "h ",
//     floor(($diff % 3600) / 60), "s\n";
// [/php]
// The above example will output:
// [result]
// Length of day: 13h 56s
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-sun-info.php
// ========== DATE_SUN_INFO - END

// SYNTAX:
// array date_sun_info(int $timestamp, float $latitude, float $longitude)

return $return_date_sun_info; // array
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_SUN_INFO
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_SUNRISE
// ============================== OFFLINE
// ============================== ABOUT
// Returns time of sunrise for a given day and location.
// 
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged. Use date_sun_info() instead.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_sunrise() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SUNFUNCS_RET_STRING - date_sunrise()
// ============================== CODE
/*
function php_date_datetime_date_sunrise($timestamp, $returnFormat = SUNFUNCS_RET_STRING, $latitude = null, $longitude = null, $zenith = null, $utcOffset = null)
{
$return_date_sunrise = false;

// ========== DATE_SUNRISE - BEGIN
// ===== ABOUT
// Returns time of sunrise for a given day and location
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged. Use date_sun_info() instead.
// ===== DESCRIPTION
// date_sunrise() returns the sunrise time for a given day (specified as a timestamp) and location.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// date_sunrise(
//    int $timestamp,
//    int $returnFormat = SUNFUNCS_RET_STRING,
//    ?float $latitude = null,
//    ?float $longitude = null,
//    ?float $zenith = null,
//    ?float $utcOffset = null
// ): string|int|float|false
// ===== CODE
$return_date_sunrise = date_sunrise(

$timestamp, // int timestamp - The timestamp of the day from which the sunrise time is taken.

$returnFormat, // int returnFormat - returnFormat constants
// 
// constant               | description                           | example
// SUNFUNCS_RET_STRING    | returns the result as string          | 16:46
// SUNFUNCS_RET_DOUBLE    | returns the result as float           | 16.78243132
// SUNFUNCS_RET_TIMESTAMP | returns the result as int (timestamp) | 1095034606

$latitude, // float latitude - Defaults to North, pass in a negative value for South. See also: date.default_latitude

$longitude, // float longitude - Defaults to East, pass in a negative value for West. See also: date.default_longitude

$zenith, // float zenith - zenith is the angle between the center of the sun and a line perpendicular to earth's surface. It defaults to date.sunrise_zenith
// 
// Common zenith angles
// Angle  - Description
// 90°50' - Sunrise: the point where the sun becomes visible.
// 96°    - Civil twilight: conventionally used to signify the start of dawn.
// 102°   - Nautical twilight: the point at which the horizon starts being visible at sea.
// 108°   - Astronomical twilight: the point at which the sun starts being the source of any illumination.

$utcOffset // float utcOffset - Specified in hours. The utcOffset is ignored, if returnFormat is SUNFUNCS_RET_TIMESTAMP.

); // Return Values
// Returns the sunrise time in a specified returnFormat on success or false on failure. One potential reason for failure is that the sun does not rise at all, which happens inside the polar circles for part of the year.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// 
// Changelog
// Version - Description
// 8.1.0   - This function has been deprecated in favor of date_sun_info().
// 8.0.0   - latitude, longitude, zenith and utcOffset are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 date_sunrise() example
// [php]
// 
// // calculate the sunrise time for Lisbon, Portugal
// // Latitude: 38.4 North
// // Longitude: 9 West
// // Zenith ~= 90
// // offset: +1 GMT
// //
// 
// echo date("D M d Y"). ', sunrise time : ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);
// 
// [/php]
// The above example will output something similar to:
// [result]
// Mon Dec 20 2004, sunrise time : 08:54
// [/result]
// [/example]
// [example]
// Example #2 No sunrise
// [php]
// $solstice = strtotime('2017-12-21');
// var_dump(date_sunrise($solstice, SUNFUNCS_RET_STRING, 69.245833, -53.537222));
// [/php]
// The above example will output:
// [result]
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-sunrise.php
// ========== DATE_SUNRISE - END

// SYNTAX:
// string|int|float|false date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $utcOffset = null)

return $return_date_sunrise; // string|int|float|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_SUNRISE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_SUNSET 
// ============================== OFFLINE
// ============================== ABOUT
// Returns time of sunset for a given day and location.
// 
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged. Use date_sun_info() instead.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_sunset() - PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// SUNFUNCS_RET_STRING - date_sunset()
// ============================== CODE
/*
function php_date_datetime_date_sunset($timestamp, $returnFormat = SUNFUNCS_RET_STRING, $latitude = null, $longitude = null, $zenith = null, $utcOffset = null)
{
$return_date_sunset = false;

// ========== DATE_SUNSET - BEGIN
// ===== ABOUT
// Returns time of sunset for a given day and location
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged. Use date_sun_info() instead.
// ===== DESCRIPTION
// date_sunset() returns the sunset time for a given day (specified as a timestamp) and location.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// date_sunset(
//    int $timestamp,
//    int $returnFormat = SUNFUNCS_RET_STRING,
//    ?float $latitude = null,
//    ?float $longitude = null,
//    ?float $zenith = null,
//    ?float $utcOffset = null
// ): string|int|float|false
// ===== CODE
$return_date_sunset = date_sunset(

$timestamp, // int timestamp - The timestamp of the day from which the sunset time is taken.

$returnFormat, // int returnFormat - returnFormat constants
// 
// constant               | description                           | example
// SUNFUNCS_RET_STRING    | returns the result as string          | 16:46
// SUNFUNCS_RET_DOUBLE    | returns the result as float           | 16.78243132
// SUNFUNCS_RET_TIMESTAMP | returns the result as int (timestamp) | 1095034606

$latitude, // float latitude - Defaults to North, pass in a negative value for South. See also: date.default_latitude

$longitude, // float longitude - Defaults to East, pass in a negative value for West. See also: date.default_longitude

$zenith, // float zenith - zenith is the angle between the center of the sun and a line perpendicular to earth's surface. It defaults to date.sunset_zenith
// 
// Common zenith angles
// Angle  - Description
// 90°50' - Sunset: the point where the sun becomes invisible.
// 96°    - Civil twilight: conventionally used to signify the end of dusk.
// 102°   - Nautical twilight: the point at which the horizon ends being visible at sea.
// 108°   - Astronomical twilight: the point at which the sun ends being the source of any illumination.

$utcOffset // float utcOffset - Specified in hours. The utcOffset is ignored, if returnFormat is SUNFUNCS_RET_TIMESTAMP.

); // Return Values
// Returns the sunset time in a specified returnFormat on success or false on failure. One potential reason for failure is that the sun does not set at all, which happens inside the polar circles for part of the year.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// 
// Changelog
// Version - Description
// 8.1.0   - This function has been deprecated in favor of date_sun_info().
// 8.0.0   - latitude, longitude, zenith and utcOffset are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 date_sunset() example
// [php]
// 
// // calculate the sunset time for Lisbon, Portugal
// Latitude: 38.4 North
// Longitude: 9 West
// Zenith ~= 90
// offset: +1 GMT
// // 
// 
// echo date("D M d Y"). ', sunset time : ' .date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);
// 
// [/php]
// The above example will output something similar to:
// [result]
// Mon Dec 20 2004, sunset time : 18:13
// [/result]
// [/example]
// [example]
// Example #2 No sunset
// [php]
// $solstice = strtotime('2017-12-21');
// var_dump(date_sunset($solstice, SUNFUNCS_RET_STRING, 69.245833, -53.537222));
// [/php]
// The above example will output:
// [result]
// bool(false)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-sunset.php
// ========== DATE_SUNSET - END

// SYNTAX:
// string|int|float|false date_sunset(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $utcOffset = null)

return $return_date_sunset; // string|int|float|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_SUNSET 
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_TIME_SET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the time.
// 
// date_time_set - Alias of DateTime::setTime().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_time_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_time_set($object, $hour, $minute, $second = 0, $microsecond = 0)
{
$return_date_time_set = null;

// ========== DATE_TIME_SET - BEGIN
// ===== ABOUT
// date_time_set - Alias of DateTime::setTime()
// ===== DESCRIPTION
// This function is an alias of: DateTime::setTime()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_time_set = date_time_set(

$object, // DateTime object

$hour, // int hour

$minute, // int minute

$second, // int second

$microsecond // int microsecond

); // Return
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-time-set.php
// ========== DATE_TIME_SET - END

// ========== DATETIME_SETTIME - BEGIN
// ===== ABOUT
// Sets the time
// ===== DESCRIPTION
// Resets the current time of the DateTime object to a different time.
// Like DateTimeImmutable::setTime() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setTime(
//    int $hour,
//    int $minute,
//    int $second = 0,
//    int $microsecond = 0
// ): DateTime
// 
// Procedural style
// date_time_set(
//    DateTime $object,
//    int $hour,
//    int $minute,
//    int $second = 0,
//    int $microsecond = 0
// ): DateTime
// ===== CODE
// $return_datetime_settime = date_time_set(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $hour, // int hour - Hour of the time.

// $minute, // int minute - Minute of the time.

// $second, // int second - Second of the time.

// $microsecond // int microsecond - Microsecond of the time.

// ); // Return Values
// Returns the modified DateTime object for method chaining.
// 
// Changelog
// Version - Description
// 8.1.0   - The behaviour with double existing hours (during the fall-back DST transition) changed. Previously PHP would pick the second occurrence (after the DST transition), instead of the first occurrence (before DST transition).
// 7.1.0   - The microsecond parameter was added.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.settime.php
// ========== DATETIME_SETTIME - END

// SYNTAX:
// DateTime date_time_set(DateTime $object, int $hour, int $minute, int $second = 0, int $microsecond = 0)

return $return_date_time_set; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_TIME_SET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_TIMESTAMP_GET
// ============================== OFFLINE
// ============================== ABOUT
// Gets the Unix timestamp.
// 
// date_timestamp_get - Alias of DateTime::getTimestamp().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_timestamp_get() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_timestamp_get($object)
{
$return_date_timestamp_get = 0;

// ========== DATE_TIMESTAMP_GET - BEGIN
// ===== ABOUT
// date_timestamp_get - Alias of DateTime::getTimestamp()
// ===== DESCRIPTION
// This function is an alias of: DateTime::getTimestamp()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_timestamp_get = date_timestamp_get(

$object // DateTimeInterface $object

); // Return
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-timestamp-get.php
// ========== DATE_TIMESTAMP_GET - END

// ========== DATETIME_GETTIMESTAMP - BEGIN
// ===== ABOUT
// Gets the Unix timestamp
// ===== DESCRIPTION
// Gets the Unix timestamp.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeInterface::getTimestamp(): int
// public DateTimeImmutable::getTimestamp(): int
// public DateTime::getTimestamp(): int
// 
// Procedural style
// date_timestamp_get(DateTimeInterface $object): int
// ===== CODE
// $return_datetime_gettimestamp = date_timestamp_get(

// This function has no parameters.

$object // DateTimeInterface $object

// ); // Return Values
// Returns the Unix timestamp representing the date.
// 
// Errors/Exceptions
// If the timestamp cannot be represented as int, a DateRangeError is thrown. Prior to PHP 8.3.0, a ValueError is thrown. And, prior to PHP 8.0.0, false was returned in this case. Still, the timestamp can be retrieved as string by using DateTimeInterface::format() with the U format.
// 
// Changelog
// Version - Description
// 8.3.0   - The out-of-range exception is now DateRangeError.
// 8.0.0   - These functions no longer return false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::getTimestamp() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// echo $date->getTimestamp();
// [/php]
// Procedural style
// [php]
// $date = date_create();
// echo date_timestamp_get($date);
// [/php]
The above examples will output something similar to:
// [result]
// 1272509157
// [/result]
// If you need to retrieve the timestamp with millisecond or microsecond resolution, then you can use the DateTimeInterface::format() function.
// [/example]
// [example]
// Example #2 Retrieving timestamp with milli and microsecond resolution
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// $milli = (int)$date->format('Uv'); // Timestamp in milliseconds
// $micro = (int)$date->format('Uu'); // Timestamp in microseconds
// 
// echo $milli, "\n", $micro, "\n";
// [/php]
The above examples will output something similar to:
// [result]
// 1674057635586
// 1674057635586918
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.gettimestamp.php
// ========== DATETIME_GETTIMESTAMP - END

// SYNTAX:
// int date_timestamp_get(DateTimeInterface $object)

return $return_date_timestamp_get; // int
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_TIMESTAMP_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_TIMESTAMP_SET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the date and time based on an Unix timestamp.
// 
// date_timestamp_set - Alias of DateTime::setTimestamp().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_timestamp_set() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_timestamp_set($object, $timestamp)
{
$return_date_timestamp_set = null;

// ========== DATE_TIMESTAMP_SET - BEGIN
// ===== ABOUT
// date_timestamp_set - Alias of DateTime::setTimestamp()
// ===== DESCRIPTION
// This function is an alias of: DateTime::setTimestamp()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_timestamp_set = date_timestamp_set(

$object, // DateTime object

$timestamp // int timestamp

); // Return
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-timestamp-set.php
// ========== DATE_TIMESTAMP_SET - END

// ========== DATETIME_SETTIMESTAMP - BEGIN
// ===== ABOUT
// Sets the date and time based on an Unix timestamp
// ===== DESCRIPTION
// Sets the date and time based on an Unix timestamp.
// Like DateTimeImmutable::setTimestamp() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setTimestamp(int $timestamp): DateTime
// 
// Procedural style
// date_timestamp_set(DateTime $object, int $timestamp): DateTime
// ===== CODE
// $return_datetime_settimestamp = date_timestamp_set(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $timestamp // int timestamp - Unix timestamp representing the date. Setting timestamps outside the range of int is possible by using DateTimeImmutable::modify() with the @ format.

// ); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.settimestamp.php
// ========== DATETIME_SETTIMESTAMP - END

// SYNTAX:
// DateTime date_timestamp_set(DateTime $object, int $timestamp)

return $return_date_timestamp_set; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_TIMESTAMP_SET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_TIMEZONE_GET
// ============================== OFFLINE
// ============================== ABOUT
// Return time zone relative to given DateTime.
// 
// date_timezone_get - Alias of DateTime::getTimezone().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_timezone_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_timezone_get($object)
{
$return_date_timezone_get = false;

// ========== DATE_TIMEZONE_GET - BEGIN
// ===== ABOUT
// date_timezone_get - Alias of DateTime::getTimezone()
// ===== DESCRIPTION
// This function is an alias of: DateTime::getTimezone()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_timezone_get = date_timezone_get(

$object // DateTimeInterface object

); // Return
// DateTimeZone|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-timezone-get.php
// ========== DATE_TIMEZONE_GET - END

// ========== DATETIME_GETTIMEZONE - BEGIN
// ===== ABOUT
// Return time zone relative to given DateTime
// ===== DESCRIPTION
// Return time zone relative to given DateTime.
// ===== SUPPORTED
// Object-oriented style
// public DateTimeInterface::getTimezone(): DateTimeZone|false
// public DateTimeImmutable::getTimezone(): DateTimeZone|false
// public DateTime::getTimezone(): DateTimeZone|false
// 
// Procedural style
// date_timezone_get(DateTimeInterface $object): DateTimeZone|false
// ===== SYNTAX
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== CODE
// $return_datetime_gettimezone = date_timezone_get(

// $object // DateTimeInterface object - Procedural style only: A DateTime object returned by date_create()

// ); // Return Values
// Returns a DateTimeZone object on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::getTimezone() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable(null, new DateTimeZone('Europe/London'));
// $tz = $date->getTimezone();
// echo $tz->getName();
// [/php]
// Procedural style
// [php]
// $date = date_create(null, timezone_open('Europe/London'));
// $tz = date_timezone_get($date);
// echo timezone_name_get($tz);
// [/php]
// The above examples will output:
// [result]
// Europe/London
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.gettimezone.php
// ========== DATETIME_GETTIMEZONE - END

// SYNTAX:
// DateTimeZone|false date_timezone_get(DateTimeInterface $object)

return $return_date_timezone_get; // DateTimeZone|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_TIMEZONE_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATE_TIMEZONE_SET
// ============================== OFFLINE
// ============================== ABOUT
// Sets the time zone for the DateTime object.
// 
// date_timezone_set - Alias of DateTime::setTimezone().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// date_timezone_set() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_date_timezone_set($object, $timezone)
{
$return_date_timezone_set = null;

// ========== DATE_TIMEZONE_SET - BEGIN
// ===== ABOUT
// date_timezone_set - Alias of DateTime::setTimezone()
// ===== DESCRIPTION
// This function is an alias of: DateTime::setTimezone()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_date_timezone_set = date_timezone_set(

$object, // DateTime object

$timezone // DateTimeZone timezone

); // Return
// DateTime
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date-timezone-set.php
// ========== DATE_TIMEZONE_SET - END

// ========== DATETIME_SETTIMEZONE - BEGIN
// ===== ABOUT
// Sets the time zone for the DateTime object
// ===== DESCRIPTION
// Sets a new timezone for a DateTime object.
// Like DateTimeImmutable::setTimezone() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setTimezone(DateTimeZone $timezone): DateTime
// 
// Procedural style
// date_timezone_set(DateTime $object, DateTimeZone $timezone): DateTime
// ===== CODE
// $return_datetime_settimezone = date_timezone_set(

// $object, // DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

// $timezone // DateTimeZone timezone - A DateTimeZone object representing the desired time zone.

// ); // Return Values
// Returns the DateTime object for method chaining. The underlaying point-in-time is not changed when calling this method.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::setTimeZone() example
// Object-oriented style
// [php]
// $date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// $date->setTimezone(new DateTimeZone('Pacific/Chatham'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// [/php]
// Procedural style
// [php]
// $date = date_create('2000-01-01', timezone_open('Pacific/Nauru'));
// echo date_format($date, 'Y-m-d H:i:sP') . "\n";
// 
// date_timezone_set($date, timezone_open('Pacific/Chatham'));
// echo date_format($date, 'Y-m-d H:i:sP') . "\n";
// [/php]
// The above examples will output:
// [result]
// 2000-01-01 00:00:00+12:00
// 2000-01-01 01:45:00+13:45
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.settimezone.php
// ========== DATETIME_SETTIMEZONE - END

// SYNTAX:
// DateTime date_timezone_set(DateTime $object, DateTimeZone $timezone)

return $return_date_timezone_set; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATE_TIMEZONE_SET
// ==============================


// ============================== BEGIN
//     PHP_DATE_DATETIME_DATE     
// ============================== PUBLIC
// ============================== ABOUT
// Format a Unix timestamp.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// date() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_date($format, $timestamp = null)
{
$return_date = null;

// ========== DATE - BEGIN
// ===== ABOUT
// Format a Unix timestamp
// ===== DESCRIPTION
// Returns a string formatted according to the given format string using the given integer timestamp (Unix timestamp) or the current time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time().
// Warning: Unix timestamps do not handle timezones. Use the DateTimeImmutable class, and its DateTimeInterface::format() formatting method to format date/time information with a timezone attached.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// date(string $format, ?int $timestamp = null): string
// ===== CODE
$return_date = date(

$format, // string format - Format accepted by DateTimeInterface::format().
// Note: date() will always generate 000000 as microseconds since it takes an int parameter, whereas DateTime::format() does support microseconds if DateTime was created with microseconds.

// DATETIMEINTERFACE_FORMAT - BEGIN
// DateTimeInterface::format
// 
// Parameters
// string format - The format of the outputted date string. See the formatting options below. There are also several predefined date constants that may be used instead, so for example DATE_RSS contains the format string 'D, d M Y H:i:s'.
// 
// The following characters are recognized in the format parameter string
// format character  - Description                                                       ; Example returned values
// Day               - ---                                                               ; ---
// d                 - Day of the month, 2 digits with leading zeros                     ; 01 to 31
// D                 - A textual representation of a day, three letters                  ; Mon through Sun
// j                 - Day of the month without leading zeros                            ; 1 to 31
// l (lowercase 'L') - A full textual representation of the day of the week              ; Sunday through Saturday
// N                 - ISO 8601 numeric representation of the day of the week            ; 1 (for Monday) through 7 (for Sunday)
// S                 - English ordinal suffix for the day of the month, 2 characters     ; st, nd, rd or th. Works well with j
// w                 - Numeric representation of the day of the week                     ; 0 (for Sunday) through 6 (for Saturday)
// z                 - The day of the year (starting from 0)                             ; 0 through 365
// Week              - ---                                                               ; ---
// W                 - ISO 8601 week number of year, weeks starting on Monday            ; Example: 42 (the 42nd week in the year)
// Month             - ---                                                               ; ---
// F                 - A full textual representation of a month, such as January or March ; January through December
// m                 - Numeric representation of a month, with leading zeros             ; 01 through 12
// M                 - A short textual representation of a month, three letters          ; Jan through Dec
// n                 - Numeric representation of a month, without leading zeros          ; 1 through 12
// t                 - Number of days in the given month                                 ; 28 through 31
// Year              - ---                                                               ; ---
// L                 - Whether it's a leap year                                          ; 1 if it is a leap year, 0 otherwise.
// o                 - ISO 8601 week-numbering year. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. ; Examples: 1999 or 2003
// X                 - An expanded full numeric representation of a year, at least 4 digits, with - for years BCE, and + for years CE. ; Examples: -0055, +0787, +1999, +10191
// x                 - An expanded full numeric representation if requried, or a standard full numeral representation if possible (like Y). At least four digits. Years BCE are prefixed with a -. Years beyond (and including) 10000 are prefixed by a +. ; Examples: -0055, 0787, 1999, +10191
// Y                 - A full numeric representation of a year, at least 4 digits, with - for years BCE. ; Examples: -0055, 0787, 1999, 2003, 10191
// y                 - A two digit representation of a year                              ; Examples: 99 or 03
// Time              - ---                                                               ; ---
// a                 - Lowercase Ante meridiem and Post meridiem                         ; am or pm
// A                 - Uppercase Ante meridiem and Post meridiem                         ; AM or PM
// B                 - Swatch Internet time                                              ; 000 through 999
// g                 - 12-hour format of an hour without leading zeros                   ; 1 through 12
// G                 - 24-hour format of an hour without leading zeros                   ; 0 through 23
// h                 - 12-hour format of an hour with leading zeros                      ; 01 through 12
// H                 - 24-hour format of an hour with leading zeros                      ; 00 through 23
// i                 - Minutes with leading zeros                                        ; 00 to 59
// s                 - Seconds with leading zeros                                        ; 00 through 59
// u                 - Microseconds. Note that date() will always generate 000000 since it takes an int parameter, whereas DateTime::format() does support microseconds if DateTime was created with microseconds. ; Example: 654321
// v                 - Milliseconds. Same note applies as for u. ; Example: 654
// Timezone          - ---                                                               ; ---
// e                 - Timezone identifier                                               ; Examples: UTC, GMT, Atlantic/Azores
// I (capital i)     - Whether or not the date is in daylight saving time                ; 1 if Daylight Saving Time, 0 otherwise.
// O                 - Difference to Greenwich time (GMT) without colon between hours and minutes ; Example: +0200
// P                 - Difference to Greenwich time (GMT) with colon between hours and minutes ; Example: +02:00
// p                 - The same as P, but returns Z instead of +00:00 (available as of PHP 8.0.0) ; Examples: Z or +02:00
// T                 - Timezone abbreviation, if known; otherwise the GMT offset.        ; Examples: EST, MDT, +05
// Z                 - Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. ; -43200 through 50400
// Full Date/Time    - ---                                                               ; ---
// c                 - ISO 8601 date                                                     ; 2004-02-12T15:19:21+00:00
// r                 - > RFC 2822/> RFC 5322 formatted date                              ; Example: Thu, 21 Dec 2000 16:01:07 +0200
// U                 - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)        ; See also time()
// 
// Unrecognized characters in the format string will be printed as-is. The Z format will always return 0 when using gmdate().
// Note: Since this function only accepts int timestamps the u format character is only useful when using the date_format() function with user based timestamps created with date_create().
// 
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetime.format.php
// DATETIMEINTERFACE_FORMAT - END

$timestamp // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

); // Return Values
// Returns a formatted date string.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 date() examples
// [php]
// // set the default timezone to use.
// date_default_timezone_set('UTC');
// 
// 
// // Prints something like: Monday
// echo date("l");
// 
// // Prints something like: Monday 8th of August 2005 03:12:46 PM
// echo date('l jS \of F Y h:i:s A');
// 
// // Prints: July 1, 2000 is on a Saturday
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
// 
// // use the constants in the format parameter
// // prints something like: Wed, 25 Sep 2013 15:28:57 -0700
// echo date(DATE_RFC2822);
// 
// // prints something like: 2000-07-01T00:00:00+00:00
// echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
// [/php]
// You can prevent a recognized character in the format string from being expanded by escaping it with a preceding backslash. If the character with a backslash is already a special sequence, you may need to also escape the backslash.
// [/example]
// [example]
// Example #2 Escaping characters in date()
// [php]
// // prints something like: Wednesday the 15th
// echo date('l \t\h\e jS');
// [/php]
// It is possible to use date() and mktime() together to find dates in the future or the past.
// [/example]
// [example]
// Example #3 date() and mktime() example
// [php]
// $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
// $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
// $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
// [/php]
// Note: This can be more reliable than simply adding or subtracting the number of seconds in a day or month to a timestamp because of daylight saving time.
// Some examples of date() formatting. Note that you should escape any other characters, as any which currently have a special meaning will produce undesirable results, and other characters may be assigned meaning in future PHP versions. When escaping, be sure to use single quotes to prevent characters like \n from becoming newlines.
// [/example]
// [example]
// Example #4 date() Formatting
// [php]
// // Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// // Mountain Standard Time (MST) Time Zone
// 
// $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                         // 03.10.01
// $today = date("j, n, Y");                       // 10, 3, 2001
// $today = date("Ymd");                           // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// $today = date("H:i:s");                         // 17:16:18
// $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
// [/php]
// To format dates in other languages, IntlDateFormatter::format() can be used instead of date().
// [/example]
// [/examples]
// 
// Notes
// Note: To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL's > UNIX_TIMESTAMP function).
// Tip: Timestamp of the start of the request is available in $_SERVER['REQUEST_TIME'].
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.date.php
// ========== DATE - END

// SYNTAX:
// string date(string $format, int $timestamp = null)

return $return_date; // string
}
// ============================== END
//     PHP_DATE_DATETIME_DATE     
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_GETDATE   
// ============================== PUBLIC
// ============================== ABOUT
// Get date/time information.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// getdate() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_getdate($timestamp = null)
{
$return_getdate = null;

// ========== GETDATE - BEGIN
// ===== ABOUT
// Get date/time information
// ===== DESCRIPTION
// Returns an associative array containing the date information of the timestamp, or the current local time if timestamp is omitted or null.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// getdate(?int $timestamp = null): array
// ===== CODE
$return_getdate = getdate(

$timestamp // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

); // Return Values
// Returns an associative array of information related to the timestamp. Elements from the returned associative array are as follows:
// Key elements of the returned associative array
// Key       - Description                                          ; Example returned values
// "seconds" - Numeric representation of seconds                    ; 0 to 59
// "minutes" - Numeric representation of minutes                    ; 0 to 59
// "hours"   - Numeric representation of hours                      ; 0 to 23
// "mday"    - Numeric representation of the day of the month       ; 1 to 31
// "wday"    - Numeric representation of the day of the week        ; 0 (for Sunday) through 6 (for Saturday)
// "mon"     - Numeric representation of a month                    ; 1 through 12
// "year"    - A full numeric representation of a year, 4 digits    ; Examples: 1999 or 2003
// "yday"    - Numeric representation of the day of the year        ; 0 through 365
// "weekday" - A full textual representation of the day of the week ; Sunday through Saturday
// "month"   - A full textual representation of a month, such as January or March ; January through December
// 0         - Seconds since the Unix Epoch, similar to the values returned by time() and used by date(). ; System Dependent, typically -2147483648 through 2147483647.
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 getdate() example
// [php]
// $today = getdate();
// print_r($today);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [seconds] => 40
//     [minutes] => 58
//     [hours]   => 21
//     [mday]    => 17
//     [wday]    => 2
//     [mon]     => 6
//     [year]    => 2003
//     [yday]    => 167
//     [weekday] => Tuesday
//     [month]   => June
//     [0]       => 1055901520
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.getdate.php
// ========== GETDATE - END

// SYNTAX:
// array getdate(int $timestamp = null)

return $return_getdate; // array
}
// ============================== END
//   PHP_DATE_DATETIME_GETDATE   
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_GETTIMEOFDAY
// ============================== PUBLIC
// ============================== ABOUT
// Get current time.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gettimeofday() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_gettimeofday($as_float = false)
{
$return_gettimeofday = null;

// ========== GETTIMEOFDAY - BEGIN
// ===== ABOUT
// Get current time
// ===== DESCRIPTION
// This is an interface to gettimeofday(2). It returns an associative array containing the data returned from the system call.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gettimeofday(bool $as_float = false): array|float
// ===== CODE
$return_gettimeofday = gettimeofday(

$as_float // bool as_float - When set to true, a float instead of an array is returned.

); // Return Values
// By default an array is returned. If as_float is set, then a float is returned.
// Array keys:
// * "sec"         - seconds since the Unix Epoch
// * "usec"        - microseconds
// * "minuteswest" - minutes west of Greenwich
// * "dsttime"     - type of dst correction
// 
// [examples]
// Examples
// [example]
// Example #1 gettimeofday() example
// [php]
// print_r(gettimeofday());
// 
// echo gettimeofday(true);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [sec] => 1073504408
//     [usec] => 238215
//     [minuteswest] => 0
//     [dsttime] => 1
// )
// 
// 1073504408.23910
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.gettimeofday.php
// ========== GETTIMEOFDAY - END

// SYNTAX:
// array|float gettimeofday(bool $as_float = false)

return $return_gettimeofday; // array|float
}
// ============================== END
// PHP_DATE_DATETIME_GETTIMEOFDAY
// ==============================


// ============================== BEGIN
//    PHP_DATE_DATETIME_GMDATE    
// ============================== PUBLIC
// ============================== ABOUT
// Format a GMT/UTC date/time.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gmdate() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_gmdate($format, $timestamp = null)
{
$return_gmdate = null;

// ========== GMDATE - BEGIN
// ===== ABOUT
// Format a GMT/UTC date/time
// ===== DESCRIPTION
// Identical to the date() function except that the time returned is Greenwich Mean Time (GMT).
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gmdate(string $format, ?int $timestamp = null): string
// ===== CODE
$return_gmdate = gmdate(

$format, // string format - The format of the outputted date string. See the formatting options for the date() function.

$timestamp // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

); // Return Values
// Returns a formatted date string.
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 gmdate() example
// When run in Finland (GMT +0200), the first line below prints "Jan 01 1998 00:00:00", while the second prints "Dec 31 1997 22:00:00".
// [php]
// echo date("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));
// echo gmdate("M d Y H:i:s", mktime(0, 0, 0, 1, 1, 1998));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.gmdate.php
// ========== GMDATE - END

// SYNTAX:
// string gmdate(string $format, int $timestamp = null)

return $return_gmdate; // string
}
// ============================== END
//    PHP_DATE_DATETIME_GMDATE    
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_GMMKTIME   
// ============================== PUBLIC
// ============================== ABOUT
// Get Unix timestamp for a GMT date.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gmmktime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_gmmktime($hour, $minute = null, $second = null, $month = null, $day = null, $year = null)
{
$return_gmmktime = false;

// ========== GMMKTIME - BEGIN
// ===== ABOUT
// Get Unix timestamp for a GMT date
// ===== DESCRIPTION
// Identical to mktime() except the passed parameters represents a GMT date. gmmktime() internally uses mktime() so only times valid in derived local time can be used.
// Like mktime(), optional arguments may be left out in order from right to left, with any omitted arguments being set to the current corresponding GMT value.
// Calling gmmktime() without any arguments is not supported, and will result in an ArgumentCountError. time() can be used to get the current timestamp.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gmmktime(
//    int $hour,
//    ?int $minute = null,
//    ?int $second = null,
//    ?int $month = null,
//    ?int $day = null,
//    ?int $year = null
// ): int|false
// ===== CODE
$return_gmmktime = gmmktime(

$hour, // int hour - The number of the hour relative to the start of the day determined by month, day and year. Negative values reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate hour in the following day(s).

$minute, // int minute - The number of the minute relative to the start of the hour. Negative values reference the minute in the previous hour. Values greater than 59 reference the appropriate minute in the following hour(s).

$second, // int second - The number of seconds relative to the start of the minute. Negative values reference the second in the previous minute. Values greater than 59 reference the appropriate second in the following minute(s).

$month, // int month - The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar months of the year in question. Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the appropriate month in the following year(s).

$day, // int day - The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month. Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).

$year // int year - The year

); // Return Values
// Returns a int Unix timestamp on success, or false if the timestamp doesn't fit in a PHP integer.
// 
// Changelog
// Version - Description
// 8.0.0   - hour is no longer optional. If you need a Unix timestamp, use time().
// 8.0.0   - minute, second, month, day and year are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 gmmktime() basic example
// [php]
// // Prints: July 1, 2000 is on a Saturday
// echo "July 1, 2000 is on a " . date("l", gmmktime(0, 0, 0, 7, 1, 2000));
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.gmmktime.php
// ========== GMMKTIME - END

// SYNTAX:
// int|false gmmktime(int $hour, int $minute = null, int $second = null, int $month = null, int $day = null, int $year = null)

return $return_gmmktime; // int|false
}
// ============================== END
//   PHP_DATE_DATETIME_GMMKTIME   
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_GMSTRFTIME  
// ============================== OFFLINE
// ============================== ABOUT
// Format a GMT/UTC time/date according to locale settings.
// 
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
// Alternatives to this function include:
// * gmdate()
// * IntlDateFormatter::format()
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gmstrftime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_gmstrftime($format, $timestamp = null)
{
$return_gmstrftime = false;

// ========== GMSTRFTIME - BEGIN
// ===== ABOUT
// Format a GMT/UTC time/date according to locale settings
//  Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
//  Alternatives to this function include:
//  * gmdate()
//  * IntlDateFormatter::format()
// ===== DESCRIPTION
// Behaves the same as strftime() except that the time returned is Greenwich Mean Time (GMT). For example, when run in Eastern Standard Time (GMT -0500), the first line below prints "Dec 31 1998 20:00:00", while the second prints "Jan 01 1999 01:00:00".
// Warning: This function depends on operating system locale information, which might be inconsistent with each other, or not available at all. Instead use the IntlDateFormatter::format() method.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gmstrftime(string $format, ?int $timestamp = null): string|false
// ===== CODE
$return_gmstrftime = gmstrftime(

$format, // string format - See description in strftime().

$timestamp // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

); // Return Values
// Returns a string formatted according to the given format string using the given timestamp or the current local time if no timestamp is given. Month and weekday names and other language dependent strings respect the current locale set with setlocale(). On failure, false is returned.
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 gmstrftime() example
// [php]
// setlocale(LC_TIME, 'en_US');
// echo strftime("%b %d %Y %H:%M:%S", mktime(20, 0, 0, 12, 31, 98)) . "\n";
// echo gmstrftime("%b %d %Y %H:%M:%S", mktime(20, 0, 0, 12, 31, 98)) . "\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.gmstrftime.php
// ========== GMSTRFTIME - END

// SYNTAX:
// string|false gmstrftime(string $format, int $timestamp = null)

return $return_gmstrftime; // string|false
}
*/
// ============================== END
//  PHP_DATE_DATETIME_GMSTRFTIME  
// ==============================


// ============================== BEGIN
//    PHP_DATE_DATETIME_IDATE    
// ============================== OFFLINE
// ============================== ABOUT
// Format a local time/date part as integer.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// idate() - PHP_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_idate($format, $timestamp = null)
{
$return_idate = false;

// ========== IDATE - BEGIN
// ===== ABOUT
// Format a local time/date part as integer
// ===== DESCRIPTION
// Returns a number formatted according to the given format string using the given integer timestamp or the current local time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time().
// Unlike the function date(), idate() accepts just one char in the format parameter.
// ===== SUPPORTED
// PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// idate(string $format, ?int $timestamp = null): int|false
// ===== CODE
$return_idate = idate(

$format, // string format - The following characters are recognized in the format parameter string
// 
// format character - Description
// B                - Swatch Beat/Internet Time
// d                - Day of the month
// h                - Hour (12 hour format)
// H                - Hour (24 hour format)
// i                - Minutes
// I (uppercase i)  - returns 1 if DST is activated, 0 otherwise
// L (uppercase l)  - returns 1 for leap year, 0 otherwise
// m                - Month number
// N                - ISO-8601 day of the week (1 for Monday through 7 for Sunday)
// o                - ISO-8601 year (4 digits)
// s                - Seconds
// t                - Days in current month
// U                - Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC - this is the same as time()
// w                - Day of the week (0 on Sunday)
// W                - ISO-8601 week number of year, weeks starting on Monday
// y                - Year (1 or 2 digits - check note below)
// Y                - Year (4 digits)
// z                - Day of the year
// Z                - Timezone offset in seconds

$timestamp // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

); // Return Values
// Returns an int on success, or false on failure.
// As idate() always returns an int and as they can't start with a "0", idate() may return fewer digits than you would expect. See the example below.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// 
// Changelog
// Version - Description
// 8.2.0   - Adds the N (ISO-8601 day of the week) and o (ISO-8601 year) format characters.
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 idate() example
// [php]
// $timestamp = strtotime('1st January 2004'); //1072915200
// 
// // this prints the year in a two digit format
// // however, as this would start with a "0", it
// // only prints "4"
// echo idate('y', $timestamp);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.idate.php
// ========== IDATE - END

// SYNTAX:
// int|false idate(string $format, int $timestamp = null)

return $return_idate; // int|false
}
*/
// ============================== END
//    PHP_DATE_DATETIME_IDATE    
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_LOCALTIME  
// ============================== PUBLIC
// ============================== ABOUT
// Get the local time.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// localtime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_localtime($timestamp = null, $associative = false)
{
$return_localtime = null;

// ========== LOCALTIME - BEGIN
// ===== ABOUT
// Get the local time
// ===== DESCRIPTION
// The localtime() function returns an array identical to that of the structure returned by the C function call.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// localtime(?int $timestamp = null, bool $associative = false): array
// ===== CODE
$return_localtime = localtime(

$timestamp, // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

$associative // bool associative - Determines whether the function should return a regular, numerically indexed array, or an associative one.

); // Return Values
// If associative is set to false or not supplied then the array is returned as a regular, numerically indexed array. If associative is set to true then localtime() returns an associative array containing the elements of the structure returned by the C function call to localtime. The keys of the associative array are as follows:
// * "tm_sec"   - seconds, 0 to 59
// * "tm_min"   - minutes, 0 to 59
// * "tm_hour"  - hours, 0 to 23
// * "tm_mday"  - day of the month, 1 to 31
// * "tm_mon"   - month of the year, 0 (Jan) to 11 (Dec)
// * "tm_year"  - years since 1900
// * "tm_wday"  - day of the week, 0 (Sun) to 6 (Sat)
// * "tm_yday"  - day of the year, 0 to 365
// * "tm_isdst" - is daylight savings time in effect? Positive if yes, 0 if not, negative if unknown.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 localtime() example
// [php]
// $localtime = localtime();
// $localtime_assoc = localtime(time(), true);
// print_r($localtime);
// print_r($localtime_assoc);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => 24
//     [1] => 3
//     [2] => 19
//     [3] => 3
//     [4] => 3
//     [5] => 105
//     [6] => 0
//     [7] => 92
//     [8] => 1
// )
// 
// Array
// (
//     [tm_sec] => 24
//     [tm_min] => 3
//     [tm_hour] => 19
//     [tm_mday] => 3
//     [tm_mon] => 3
//     [tm_year] => 105
//     [tm_wday] => 0
//     [tm_yday] => 92
//     [tm_isdst] => 1
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.localtime.php
// ========== LOCALTIME - END

// SYNTAX:
// array localtime(int $timestamp = null, bool $associative = false)

return $return_localtime; // array
}
// ============================== END
//  PHP_DATE_DATETIME_LOCALTIME  
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_MICROTIME  
// ============================== PUBLIC
// ============================== ABOUT
// Return current Unix timestamp with microseconds.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// microtime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_microtime($as_float = false)
{
$return_microtime = null;

// ========== MICROTIME - BEGIN
// ===== ABOUT
// Return current Unix timestamp with microseconds
// ===== DESCRIPTION
// microtime() returns the current Unix timestamp with microseconds. This function is only available on operating systems that support the gettimeofday() system call.
// For performance measurements, using hrtime() is recommended.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// microtime(bool $as_float = false): string|float
// ===== CODE
$return_microtime = microtime(

$as_float // bool as_float - If used and set to true, microtime() will return a float instead of a string, as described in the return values section below.

); // Return Values
// By default, microtime() returns a string in the form "msec sec", where sec is the number of seconds since the Unix epoch (0:00:00 January 1,1970 GMT), and msec measures microseconds that have elapsed since sec and is also expressed in seconds as a decimal fraction.
// If as_float is set to true, then microtime() returns a float, which represents the current time in seconds since the Unix epoch accurate to the nearest microsecond.
// 
// [examples]
// Examples
// [example]
// Example #1 Timing script execution
// [php]
// $time_start = microtime(true);
// 
// // Sleep for a while
// usleep(100);
// 
// $time_end = microtime(true);
// $time = $time_end - $time_start;
// 
// echo "Did nothing in $time seconds\n";
// [/php]
// [/example]
// [example]
// Example #2 microtime() and REQUEST_TIME_FLOAT
// [php]
// // Randomize sleeping time
// usleep(mt_rand(100, 10000));
// 
// // REQUEST_TIME_FLOAT is available in the $_SERVER superglobal array.
// // It contains the timestamp of the start of the request with microsecond precision.
// $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
// 
// echo "Did nothing in $time seconds\n";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.microtime.php
// ========== MICROTIME - END

// SYNTAX:
// string|float microtime(bool $as_float = false)

return $return_microtime; // string|float
}
// ============================== END
//  PHP_DATE_DATETIME_MICROTIME  
// ==============================


// ============================== BEGIN
//    PHP_DATE_DATETIME_MKTIME    
// ============================== PUBLIC
// ============================== ABOUT
// Get Unix timestamp for a date.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// mktime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_mktime($hour, $minute = null, $second = null, $month = null, $day = null, $year = null)
{
$return_mktime = false;

// ========== MKTIME - BEGIN
// ===== ABOUT
// Get Unix timestamp for a date
// ===== DESCRIPTION
// Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
// Any optional arguments omitted or null will be set to the current value according to the local date and time.
// Warning: Please note that the ordering of arguments is in an odd order: month, day, year, and not in the more reasonable order of year, month, day.
// Calling mktime() without arguments is not supported, and will result in an ArgumentCountError. time() can be used to get the current timestamp.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// mktime(
//    int $hour,
//    ?int $minute = null,
//    ?int $second = null,
//    ?int $month = null,
//    ?int $day = null,
//    ?int $year = null
// ): int|false
// ===== CODE
$return_mktime = mktime(

$hour, // int hour - The number of the hour relative to the start of the day determined by month, day and year. Negative values reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate hour in the following day(s).

$minute, // int minute - The number of the minute relative to the start of the hour. Negative values reference the minute in the previous hour. Values greater than 59 reference the appropriate minute in the following hour(s).

$second, // int second - The number of seconds relative to the start of the minute. Negative values reference the second in the previous minute. Values greater than 59 reference the appropriate second in the following minute(s).

$month, // int month - The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar months of the year in question. Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the appropriate month in the following year(s).

$day, // int day - The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month. Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).

$year // int year - The number of the year, may be a two or four digit value, with values between 0-69 mapping to 2000-2069 and 70-100 to 1970-2000. On systems where time_t is a 32bit signed integer, as most common today, the valid range for year is somewhere between 1901 and 2038.

); // Return Values
// mktime() returns the Unix timestamp of the arguments given, or false if the timestamp doesn't fit in a PHP integer.
// 
// Changelog
// Version - Description
// 8.0.0   - hour is no longer optional. If you need a Unix timestamp, use time().
// 8.0.0   - minute, second, month, day and year are nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 mktime() basic example
// [php]
// // Set the default timezone to use.
// date_default_timezone_set('UTC');
// 
// // Prints: July 1, 2000 is on a Saturday
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
// 
// // Prints something like: 2006-04-05T01:02:03+00:00
// echo date('c', mktime(1, 2, 3, 4, 5, 2006));
// [/php]
// [/example]
// [example]
// Example #2 mktime() example
// mktime() is useful for doing date arithmetic and validation, as it will automatically calculate the correct value for out-of-range input. For example, each of the following lines produces the string "Jan-01-1998".
// [php]
// echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
// echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
// echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
// echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));
// [/php]
// [/example]
// [example]
// Example #3 Last day of a month
// The last day of any given month can be expressed as the "0" day of the next month, not the -1 day. Both of the following examples will produce the string "The last day in Feb 2000 is: 29".
// [php]
// $lastday = mktime(0, 0, 0, 3, 0, 2000);
// echo strftime("Last day in Feb 2000 is: %d", $lastday);
// $lastday = mktime(0, 0, 0, 4, -31, 2000);
// echo strftime("Last day in Feb 2000 is: %d", $lastday);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.mktime.php
// ========== MKTIME - END

// SYNTAX:
// int|false mktime(int $hour, int $minute = null, int $second = null, int $month = null, int $day = null, int $year = null)

return $return_mktime; // int|false
}
// ============================== END
//    PHP_DATE_DATETIME_MKTIME    
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_STRFTIME   
// ============================== PUBLIC
// ============================== ABOUT
// Format a local time/date according to locale settings.
// 
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
// Alternatives to this function include:
// * date()
// * IntlDateFormatter::format()
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// strftime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_strftime($format, $timestamp = null)
{
$return_strftime = false;

// ========== STRFTIME - BEGIN
// ===== ABOUT
// Format a local time/date according to locale settings
//  Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
//  Alternatives to this function include:
//  * date()
//  * IntlDateFormatter::format()
// ===== DESCRIPTION
// Format the time and/or date according to locale settings. Month and weekday names and other language-dependent strings respect the current locale set with setlocale().
// Warning: Not all conversion specifiers may be supported by your C library, in which case they will not be supported by PHP's strftime(). Additionally, not all platforms support negative timestamps, so your date range may be limited to no earlier than the Unix epoch. This means that %e, %T, %R and, %D (and possibly others) - as well as dates prior to Jan 1, 1970 - will not work on Windows, some Linux distributions, and a few other operating systems. For Windows systems, a complete overview of supported conversion specifiers can be found at > MSDN. Instead use the IntlDateFormatter::format() method.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// strftime(string $format, ?int $timestamp = null): string|false
// ===== CODE
$return_strftime = strftime(

$format, // string format - The following characters are recognized in the format parameter string
// 
// format               - Description                                                    ; Example returned values
// Day                  - ---                                                            ; ---
// %a                   - An abbreviated textual representation of the day               ; Sun through Sat
// %A                   - A full textual representation of the day                       ; Sunday through Saturday
// %d                   - Two-digit day of the month (with leading zeros)                ; 01 to 31
// %e                   - Day of the month, with a space preceding single digits. Not implemented as described on Windows. See below for more information. ; 1 to 31
// %j                   - Day of the year, 3 digits with leading zeros                   ; 001 to 366
// %u                   - ISO-8601 numeric representation of the day of the week         ; 1 (for Monday) through 7 (for Sunday)
// %w                   - Numeric representation of the day of the week                  ; 0 (for Sunday) through 6 (for Saturday)
// Week                 - ---                                                            ; ---
// %U                   - Week number of the given year, starting with the first Sunday as the first week ; 13 (for the 13th full week of the year)
// %V                   - ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week ; 01 through 53 (where 53 accounts for an overlapping week)
// %W                   - A numeric representation of the week of the year, starting with the first Monday as the first week ; 46 (for the 46th week of the year beginning with a Monday)
// Month                - ---                                                            ; ---
// %b                   - Abbreviated month name, based on the locale                    ; Jan through Dec
// %B                   - Full month name, based on the locale                           ; January through December
// %h                   - Abbreviated month name, based on the locale (an alias of %b)   ; Jan through Dec
// %m                   - Two digit representation of the month                          ; 01 (for January) through 12 (for December)
// Year                 - ---                                                            ; ---
// %C                   - Two digit representation of the century (year divided by 100, truncated to an integer) ; 19 for the 20th Century
// %g                   - Two digit representation of the year going by ISO-8601:1988 standards (see %V) ; Example: 09 for the week of January 6, 2009
// %G                   - The full four-digit version of %g                              ; Example: 2008 for the week of January 3, 2009
// %y                   - Two digit representation of the year                           ; Example: 09 for 2009, 79 for 1979
// %Y                   - Four digit representation for the year                         ; Example: 2038
// Time                 - ---                                                            ; ---
// %H                   - Two digit representation of the hour in 24-hour format         ; 00 through 23
// %k                   - Hour in 24-hour format, with a space preceding single digits   ; 0 through 23
// %I                   - Two digit representation of the hour in 12-hour format         ; 01 through 12
// %l (lower-case 'L')  - Hour in 12-hour format, with a space preceding single digits   ; 1 through 12
// %M                   - Two digit representation of the minute                         ; 00 through 59
// %p                   - UPPER-CASE 'AM' or 'PM' based on the given time                ; Example: AM for 00:31, PM for 22:23. The exact result depends on the Operating System, and they can also return lower-case variants, or variants with dots (such as a.m.).
// %P                   - lower-case 'am' or 'pm' based on the given time                ; Example: am for 00:31, pm for 22:23. Not supported by all Operating Systems.
// %r                   - Same as "%I:%M:%S %p"                                          ; Example: 09:34:17 PM for 21:34:17
// %R                   - Same as "%H:%M"                                                ; Example: 00:35 for 12:35 AM, 16:44 for 4:44 PM
// %S                   - Two digit representation of the second                         ; 00 through 59
// %T                   - Same as "%H:%M:%S"                                             ; Example: 21:34:17 for 09:34:17 PM
// %X                   - Preferred time representation based on locale, without the date ; Example: 03:59:16 or 15:59:16
// %z                   - The time zone offset. Not implemented as described on Windows. See below for more information. ; Example: -0500 for US Eastern Time
// %Z                   - The time zone abbreviation. Not implemented as described on Windows. See below for more information. ; Example: EST for Eastern Time
// Time and Date Stamps - ---                                                            ; ---
// %c                   - Preferred date and time stamp based on locale                  ; Example: Tue Feb 5 00:45:10 2009 for February 5, 2009 at 12:45:10 AM
// %D                   - Same as "%m/%d/%y"                                             ; Example: 02/05/09 for February 5, 2009
// %F                   - Same as "%Y-%m-%d" (commonly used in database datestamps)      ; Example: 2009-02-05 for February 5, 2009
// %s                   - Unix Epoch Time timestamp (same as the time() function)        ; Example: 305815200 for September 10, 1979 08:40:00 AM
// %x                   - Preferred date representation based on locale, without the time ; Example: 02/05/09 for February 5, 2009
// Miscellaneous        - ---                                                            ; ---
// %n                   - A newline character ("\n")                                     ; ---
// %t                   - A Tab character ("\t")                                         ; ---
// %%                   - A literal percentage character ("%")                           ; ---
// 
// Warning: Contrary to ISO-9899:1999, Sun Solaris starts with Sunday as 1. As a result, %u may not function as described in this manual.
//  Warning: Windows only:
//  The %e modifier is not supported in the Windows implementation of this function. To achieve this value, the %#d modifier can be used instead. The example below illustrates how to write a cross platform compatible function.
//  The %z and %Z modifiers both return the time zone name instead of the offset or abbreviation.
// Warning: macOS and musl only: The %P modifier is not supported in the macOS implementation of this function.

$timestamp // int timestamp - The optional timestamp parameter is an int Unix timestamp that defaults to the current local time if timestamp is omitted or null. In other words, it defaults to the value of time().

); // Return Values
// Returns a string formatted according format using the given timestamp or the current local time if no timestamp is given. Month and weekday names and other language-dependent strings respect the current locale set with setlocale(). The function returns false if format is empty, contains unsupported conversion specifiers, or if the length of the returned string would be greater than 4095.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// As the output is dependent upon the underlying C library, some conversion specifiers are not supported. On Windows, supplying unknown conversion specifiers will result in 5 E_WARNING messages and return false. On other operating systems you may not get any E_WARNING messages and the output may contain the conversion specifiers unconverted.
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// This example will work if you have the respective locales installed in your system.
// Example #1 strftime() locale examples
// [php]
// setlocale(LC_TIME, "C");
// echo strftime("%A");
// setlocale(LC_TIME, "fi_FI");
// echo strftime(" in Finnish is %A,");
// setlocale(LC_TIME, "fr_FR");
// echo strftime(" in French %A and");
// setlocale(LC_TIME, "de_DE");
// echo strftime(" in German %A.\n");
// [/php]
// [/example]
// [example]
// Example #2 ISO 8601:1988 week number example
// [php]
//        December 2002 / January 2003
// ISOWk  M   Tu  W   Thu F   Sa  Su
// ----- ----------------------------
// 51     16  17  18  19  20  21  22
// 52     23  24  25  26  27  28  29
// 1      30  31   1   2   3   4   5
// 2       6   7   8   9  10  11  12
// 3      13  14  15  16  17  18  19   */
// 
// // Outputs: 12/28/2002 - %V,%G,%Y = 52,2002,2002
// echo "12/28/2002 - %V,%G,%Y = " . strftime("%V,%G,%Y", strtotime("12/28/2002")) . "\n";
// 
// // Outputs: 12/30/2002 - %V,%G,%Y = 1,2003,2002
// echo "12/30/2002 - %V,%G,%Y = " . strftime("%V,%G,%Y", strtotime("12/30/2002")) . "\n";
// 
// // Outputs: 1/3/2003 - %V,%G,%Y = 1,2003,2003
// echo "1/3/2003 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/3/2003")) . "\n";
// 
// // Outputs: 1/10/2003 - %V,%G,%Y = 2,2003,2003
// echo "1/10/2003 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/10/2003")) . "\n";
// 
// 
// 
//        December 2004 / January 2005
// ISOWk  M   Tu  W   Thu F   Sa  Su
// ----- ----------------------------
// 51     13  14  15  16  17  18  19
// 52     20  21  22  23  24  25  26
// 53     27  28  29  30  31   1   2
// 1       3   4   5   6   7   8   9
// 2      10  11  12  13  14  15  16   */
// 
// // Outputs: 12/23/2004 - %V,%G,%Y = 52,2004,2004
// echo "12/23/2004 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("12/23/2004")) . "\n";
// 
// // Outputs: 12/31/2004 - %V,%G,%Y = 53,2004,2004
// echo "12/31/2004 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("12/31/2004")) . "\n";
// 
// // Outputs: 1/2/2005 - %V,%G,%Y = 53,2004,2005
// echo "1/2/2005 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/2/2005")) . "\n";
// 
// // Outputs: 1/3/2005 - %V,%G,%Y = 1,2005,2005
// echo "1/3/2005 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/3/2005")) . "\n";
// 
// [/php]
// [/example]
// [example]
// Example #3 Cross platform compatible example using the %e modifier
// [php]
// 
// // Jan 1: results in: '%e%1%' (%%, e, %%, %e, %%)
// $format = '%%e%%%e%%';
// 
// // Check for Windows to find and replace the %e 
// // modifier correctly
// if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
//     $format = preg_replace('#(?<!%)((?:%%)*)%e#', '\1%#d', $format);
// }
// 
// echo strftime($format);
// [/php]
// [/example]
// [example]
// Example #4 Display all known and unknown formats.
// [php]
// // Describe the formats.
// $strftimeFormats = array(
//     'A' => 'A full textual representation of the day',
//     'B' => 'Full month name, based on the locale',
//     'C' => 'Two digit representation of the century (year divided by 100, truncated to an integer)',
//     'D' => 'Same as "%m/%d/%y"',
//     'E' => '',
//     'F' => 'Same as "%Y-%m-%d"',
//     'G' => 'The full four-digit version of %g',
//     'H' => 'Two digit representation of the hour in 24-hour format',
//     'I' => 'Two digit representation of the hour in 12-hour format',
//     'J' => '',
//     'K' => '',
//     'L' => '',
//     'M' => 'Two digit representation of the minute',
//     'N' => '',
//     'O' => '',
//     'P' => 'lower-case "am" or "pm" based on the given time',
//     'Q' => '',
//     'R' => 'Same as "%H:%M"',
//     'S' => 'Two digit representation of the second',
//     'T' => 'Same as "%H:%M:%S"',
//     'U' => 'Week number of the given year, starting with the first Sunday as the first week',
//     'V' => 'ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week',
//     'W' => 'A numeric representation of the week of the year, starting with the first Monday as the first week',
//     'X' => 'Preferred time representation based on locale, without the date',
//     'Y' => 'Four digit representation for the year',
//     'Z' => 'The time zone offset/abbreviation option NOT given by %z (depends on operating system)',
//     'a' => 'An abbreviated textual representation of the day',
//     'b' => 'Abbreviated month name, based on the locale',
//     'c' => 'Preferred date and time stamp based on local',
//     'd' => 'Two-digit day of the month (with leading zeros)',
//     'e' => 'Day of the month, with a space preceding single digits',
//     'f' => '',
//     'g' => 'Two digit representation of the year going by ISO-8601:1988 standards (see %V)',
//     'h' => 'Abbreviated month name, based on the locale (an alias of %b)',
//     'i' => '',
//     'j' => 'Day of the year, 3 digits with leading zeros',
//     'k' => 'Hour in 24-hour format, with a space preceding single digits',
//     'l' => 'Hour in 12-hour format, with a space preceding single digits',
//     'm' => 'Two digit representation of the month',
//     'n' => 'A newline character ("\n")',
//     'o' => '',
//     'p' => 'UPPER-CASE "AM" or "PM" based on the given time',
//     'q' => '',
//     'r' => 'Same as "%I:%M:%S %p"',
//     's' => 'Unix Epoch Time timestamp',
//     't' => 'A Tab character ("\t")',
//     'u' => 'ISO-8601 numeric representation of the day of the week',
//     'v' => '',
//     'w' => 'Numeric representation of the day of the week',
//     'x' => 'Preferred date representation based on locale, without the time',
//     'y' => 'Two digit representation of the year',
//     'z' => 'Either the time zone offset from UTC or the abbreviation (depends on operating system)',
//     '%' => 'A literal percentage character ("%")',
// );
// 
// // Results.
// $strftimeValues = array();
// 
// // Evaluate the formats whilst suppressing any errors.
// foreach($strftimeFormats as $format => $description){
//     if (False !== ($value = @strftime("%{$format}"))){
//         $strftimeValues[$format] = $value;
//     }
// }
// 
// // Find the longest value.
// $maxValueLength = 2 + max(array_map('strlen', $strftimeValues));
// 
// // Report known formats.
// foreach($strftimeValues as $format => $value){
//     echo "Known format   : '{$format}' = ", str_pad("'{$value}'", $maxValueLength), " ( {$strftimeFormats[$format]} )\n";
// }
// 
// // Report unknown formats.
// foreach(array_diff_key($strftimeFormats, $strftimeValues) as $format => $description){
//     echo "Unknown format : '{$format}'   ", str_pad(' ', $maxValueLength), ($description ? " ( {$description} )" : ''), "\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Known format   : 'A' = 'Friday'            ( A full textual representation of the day )
// Known format   : 'B' = 'December'          ( Full month name, based on the locale )
// Known format   : 'H' = '11'                ( Two digit representation of the hour in 24-hour format )
// Known format   : 'I' = '11'                ( Two digit representation of the hour in 12-hour format )
// Known format   : 'M' = '24'                ( Two digit representation of the minute )
// Known format   : 'S' = '44'                ( Two digit representation of the second )
// Known format   : 'U' = '48'                ( Week number of the given year, starting with the first Sunday as the first week )
// Known format   : 'W' = '48'                ( A numeric representation of the week of the year, starting with the first Monday as the first week )
// Known format   : 'X' = '11:24:44'          ( Preferred time representation based on locale, without the date )
// Known format   : 'Y' = '2010'              ( Four digit representation for the year )
// Known format   : 'Z' = 'GMT Standard Time' ( The time zone offset/abbreviation option NOT given by %z (depends on operating system) )
// Known format   : 'a' = 'Fri'               ( An abbreviated textual representation of the day )
// Known format   : 'b' = 'Dec'               ( Abbreviated month name, based on the locale )
// Known format   : 'c' = '12/03/10 11:24:44' ( Preferred date and time stamp based on local )
// Known format   : 'd' = '03'                ( Two-digit day of the month (with leading zeros) )
// Known format   : 'j' = '337'               ( Day of the year, 3 digits with leading zeros )
// Known format   : 'm' = '12'                ( Two digit representation of the month )
// Known format   : 'p' = 'AM'                ( UPPER-CASE "AM" or "PM" based on the given time )
// Known format   : 'w' = '5'                 ( Numeric representation of the day of the week )
// Known format   : 'x' = '12/03/10'          ( Preferred date representation based on locale, without the time )
// Known format   : 'y' = '10'                ( Two digit representation of the year )
// Known format   : 'z' = 'GMT Standard Time' ( Either the time zone offset from UTC or the abbreviation (depends on operating system) )
// Known format   : '%' = '%'                 ( A literal percentage character ("%") )
// Unknown format : 'C'                       ( Two digit representation of the century (year divided by 100, truncated to an integer) )
// Unknown format : 'D'                       ( Same as "%m/%d/%y" )
// Unknown format : 'E'
// Unknown format : 'F'                       ( Same as "%Y-%m-%d" )
// Unknown format : 'G'                       ( The full four-digit version of %g )
// Unknown format : 'J'
// Unknown format : 'K'
// Unknown format : 'L'
// Unknown format : 'N'
// Unknown format : 'O'
// Unknown format : 'P'                       ( lower-case "am" or "pm" based on the given time )
// Unknown format : 'Q'
// Unknown format : 'R'                       ( Same as "%H:%M" )
// Unknown format : 'T'                       ( Same as "%H:%M:%S" )
// Unknown format : 'V'                       ( ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week )
// Unknown format : 'e'                       ( Day of the month, with a space preceding single digits )
// Unknown format : 'f'
// Unknown format : 'g'                       ( Two digit representation of the year going by ISO-8601:1988 standards (see %V) )
// Unknown format : 'h'                       ( Abbreviated month name, based on the locale (an alias of %b) )
// Unknown format : 'i'
// Unknown format : 'k'                       ( Hour in 24-hour format, with a space preceding single digits )
// Unknown format : 'l'                       ( Hour in 12-hour format, with a space preceding single digits )
// Unknown format : 'n'                       ( A newline character ("\n") )
// Unknown format : 'o'
// Unknown format : 'q'
// Unknown format : 'r'                       ( Same as "%I:%M:%S %p" )
// Unknown format : 's'                       ( Unix Epoch Time timestamp )
// Unknown format : 't'                       ( A Tab character ("\t") )
// Unknown format : 'u'                       ( ISO-8601 numeric representation of the day of the week )
// Unknown format : 'v'
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: %G and %V, which are based on ISO 8601:1988 week numbers can give unexpected (albeit correct) results if the numbering system is not thoroughly understood. See %V examples in this manual page.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.strftime.php
// ========== STRFTIME - END

// SYNTAX:
// string|false strftime(string $format, int $timestamp = null)

return $return_strftime; // string|false
}
// ============================== END
//   PHP_DATE_DATETIME_STRFTIME   
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_STRPTIME   
// ============================== OFFLINE
// ============================== ABOUT
// Parse a time/date generated with strftime().
// 
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// strptime() - PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_strptime($timestamp, $format)
{
$return_strptime = false;

// ========== STRPTIME - BEGIN
// ===== ABOUT
// Parse a time/date generated with strftime()
// Warning: This function has been DEPRECATED as of PHP 8.1.0. Relying on this function is highly discouraged.
// ===== DESCRIPTION
// strptime() returns an array with the timestamp parsed, or false on error.
// Month and weekday names and other language dependent strings respect the current locale set with setlocale() (LC_TIME).
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_0, PHP_7, PHP_8
// ===== SYNTAX
// strptime(string $timestamp, string $format): array|false
// ===== CODE
$return_strptime = strptime(

$timestamp, // string timestamp (string) - The string to parse (e.g. returned from strftime()).

$format // string format (string) - The format used in timestamp (e.g. the same as used in strftime()). Note that some of the format options available to strftime() may not have any effect within strptime(); the exact subset that are supported will vary based on the operating system and C library in use.
// For more information about the format options, read the strftime() page.

); // Return Values
// Returns an array or false on failure.
// The following parameters are returned in the array
// parameters - Description
// "tm_sec"   - Seconds after the minute (0-61)
// "tm_min"   - Minutes after the hour (0-59)
// "tm_hour"  - Hour since midnight (0-23)
// "tm_mday"  - Day of the month (1-31)
// "tm_mon"   - Months since January (0-11)
// "tm_year"  - Years since 1900
// "tm_wday"  - Days since Sunday (0-6)
// "tm_yday"  - Days since January 1 (0-365)
// "unparsed" - the timestamp part which was not recognized using the specified format
// 
// Changelog
// Version - Description
// 8.1.0   - This function has been deprecated. Use date_parse_from_format() instead (for locale-independent parsing), or IntlDateFormatter::parse() (for locale-dependent parsing)
// 
// [examples]
// Examples
// [example]
// Example #1 strptime() example
// [php]
// $format = '%d/%m/%Y %H:%M:%S';
// $strf = strftime($format);
// 
// echo "$strf\n";
// 
// print_r(strptime($strf, $format));
// [/php]
// The above example will output something similar to:
// [result]
// 03/10/2004 15:54:19
// 
// Array
// (
//     [tm_sec] => 19
//     [tm_min] => 54
//     [tm_hour] => 15
//     [tm_mday] => 3
//     [tm_mon] => 9
//     [tm_year] => 104
//     [tm_wday] => 0
//     [tm_yday] => 276
//     [unparsed] =>
// )
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: This function is not implemented on Windows platforms.
// Note: Internally, this function calls the strptime() function provided by the system's C library. This function can exhibit noticeably different behaviour across different operating systems. The use of date_parse_from_format(), which does not suffer from these issues, is recommended.
// Note: "tm_sec" includes any leap seconds (currently upto 2 a year). For more information on leap seconds, see the > Wikipedia article on leap seconds.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.strptime.php
// ========== STRPTIME - END

// SYNTAX:
// array|false strptime(string $timestamp, string $format)

return $return_strptime; // array|false
}
*/
// ============================== END
//   PHP_DATE_DATETIME_STRPTIME   
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_STRTOTIME  
// ============================== PUBLIC
// ============================== ABOUT
// Parse about any English textual datetime description into a Unix timestamp.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// strtotime() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_strtotime($datetime, $baseTimestamp = null)
{
$return_strtotime = false;

// ========== STRTOTIME - BEGIN
// ===== ABOUT
// Parse about any English textual datetime description into a Unix timestamp
// ===== DESCRIPTION
// The function expects to be given a string containing an English date format and will try to parse that format into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 UTC), relative to the timestamp given in baseTimestamp, or the current time if baseTimestamp is not supplied. The date string parsing is defined in Date and Time Formats, and has several subtle considerations. Reviewing the full details there is strongly recommended.
// Warning: The Unix timestamp that this function returns does not contain information about time zones. In order to do calculations with date/time information, you should use the more capable DateTimeImmutable.
// Each parameter of this function uses the default time zone unless a time zone is specified in that parameter. Be careful not to use different time zones in each parameter unless that is intended. See date_default_timezone_get() on the various ways to define the default time zone.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// strtotime(string $datetime, ?int $baseTimestamp = null): int|false
// ===== CODE
$return_strtotime = strtotime(

$datetime, // string datetime - A date/time string. Valid formats are explained in Date and Time Formats.

$baseTimestamp // int baseTimestamp - The timestamp which is used as a base for the calculation of relative dates.

); // Return Values
// Returns a timestamp on success, false otherwise.
// 
// Errors/Exceptions
// Every call to a date/time function will generate a E_WARNING if the time zone is not valid. See also date_default_timezone_set()
// 
// Changelog
// Version - Description
// 8.0.0   - baseTimestamp is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A strtotime() example
// [php]
// echo strtotime("now"), "\n";
// echo strtotime("10 September 2000"), "\n";
// echo strtotime("+1 day"), "\n";
// echo strtotime("+1 week"), "\n";
// echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
// echo strtotime("next Thursday"), "\n";
// echo strtotime("last Monday"), "\n";
// [/php]
// [/example]
// [example]
// Example #2 Checking for failure
// [php]
// $str = 'Not Good';
// 
// if (($timestamp = strtotime($str)) === false) {
//     echo "The string ($str) is bogus";
// } else {
//     echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: "Relative" date in this case also means that if a particular component of the date/time stamp is not provided, it will be taken verbatim from the baseTimestamp. That is, strtotime('February'), if run on the 31st of May 2022, will be interpreted as 31 February 2022, which will overflow into a timestamp on 3 March. (In a leap year, it would be 2 March.) Using strtotime('1 February') or strtotime('first day of February') would avoid that problem.
// Note: If the number of the year is specified in a two digit format, the values between 00-69 are mapped to 2000-2069 and 70-99 to 1970-1999. See the notes below for possible differences on 32bit systems (possible dates might end on 2038-01-19 03:14:07).
//  Note:
//  The valid range of a timestamp is typically from Fri, 13 Dec 1901 20:45:54 UTC to Tue, 19 Jan 2038 03:14:07 UTC. (These are the dates that correspond to the minimum and maximum values for a 32-bit signed integer.)
//  For 64-bit versions of PHP, the valid range of a timestamp is effectively infinite, as 64 bits can represent approximately 293 billion years in either direction.
// Note: Using this function for mathematical operations is not advisable. It is better to use DateTime::add() and DateTime::sub().
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.strtotime.php
// ========== STRTOTIME - END

// SYNTAX:
// int|false strtotime(string $datetime, int $baseTimestamp = null)

return $return_strtotime; // int|false
}
// ============================== END
//  PHP_DATE_DATETIME_STRTOTIME  
// ==============================


// ============================== BEGIN
//     PHP_DATE_DATETIME_TIME     
// ============================== PUBLIC
// ============================== ABOUT
// Return current Unix timestamp.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// time() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_datetime_time()
{
$return_time = 0;

// ========== TIME - BEGIN
// ===== ABOUT
// Return current Unix timestamp
// ===== DESCRIPTION
// Returns the current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
// Note: Unix timestamps do not contain any information with regards to any local timezone. It is recommended to use the DateTimeImmutable class for handling date and time information in order to avoid the pitfalls that come with just Unix timestamps.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// time(): int
// ===== CODE
$return_time = time(

// This function has no parameters.

); // Return Values
// Returns the current timestamp.
// 
// [examples]
// Examples
// [example]
// Example #1 time() example
// [php]
// echo 'Now: '. time();
// [/php]
// The above example will output something similar to:
// [result]
// Now: 1660338149
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Tip: Timestamp of the start of the request is available in $_SERVER['REQUEST_TIME'].
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.time.php
// ========== TIME - END

// SYNTAX:
// int time()

return $return_time; // int
}
// ============================== END
//     PHP_DATE_DATETIME_TIME     
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_ABBREVIATIONS_LIST
// ============================== OFFLINE
// ============================== ABOUT
// Returns associative array containing dst, offset and the timezone name.
// 
// timezone_abbreviations_list - Alias of DateTimeZone::listAbbreviations().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_abbreviations_list() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_abbreviations_list()
{
$return_timezone_abbreviations_list = null;

// ========== TIMEZONE_ABBREVIATIONS_LIST - BEGIN
// ===== ABOUT
// timezone_abbreviations_list - Alias of DateTimeZone::listAbbreviations()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::listAbbreviations()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_abbreviations_list = timezone_abbreviations_list(

); // Return
// array
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-abbreviations-list.php
// ========== TIMEZONE_ABBREVIATIONS_LIST - END

// ========== DATETIMEZONE_LISTABBREVIATIONS - BEGIN
// ===== ABOUT
// Returns associative array containing dst, offset and the timezone name
// ===== DESCRIPTION
// The returned list of abbreviations includes all historical use of abbreviations, which can lead to correct, but confusing entries. There are also conflicts, as PST is used both in the US and in the Philippines.
// The list that this function returns is therefore not suitable for building an array with options to present a choice of timezone to users.
// Note: The data for this function are precompiled for performance reasons, and are not updated when using a newer > timezonedb.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTimeZone::listAbbreviations(): array
// 
// Procedural style
// timezone_abbreviations_list(): array
// ===== CODE
// $return_datetimezone_listabbreviations = timezone_abbreviations_list(

// This function has no parameters.

// ); // Return Values
// Returns the array of timezone abbreviations.
// 
// [examples]
// Examples
// [example]
// Example #1 A timezone_abbreviations_list() example
// [php]
// $timezone_abbreviations = DateTimeZone::listAbbreviations();
// print_r($timezone_abbreviations["acst"]);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => America/Porto_Acre
//         )
// 
//     [1] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => America/Eirunepe
//         )
// 
//     [2] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => America/Rio_Branco
//         )
// 
//     [3] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => Brazil/Acre
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimezone.listabbreviations.php
// ========== DATETIMEZONE_LISTABBREVIATIONS - END

// SYNTAX:
// array timezone_abbreviations_list()

return $return_timezone_abbreviations_list; // array
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_ABBREVIATIONS_LIST
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_IDENTIFIERS_LIST
// ============================== OFFLINE
// ============================== ABOUT
// Returns a numerically indexed array containing all defined timezone identifiers.
// 
// timezone_identifiers_list - Alias of DateTimeZone::listIdentifiers().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_identifiers_list() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_identifiers_list($timezoneGroup, $countryCode = null)
{
$return_timezone_identifiers_list = null;

// ========== TIMEZONE_IDENTIFIERS_LIST - BEGIN
// ===== ABOUT
// timezone_identifiers_list - Alias of DateTimeZone::listIdentifiers()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::listIdentifiers()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_identifiers_list = timezone_identifiers_list(

$timezoneGroup, // int timezoneGroup

$countryCode // string countryCode

); // Return
// array
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-identifiers-list.php
// ========== TIMEZONE_IDENTIFIERS_LIST - END

// ========== DATETIMEZONE_LISTIDENTIFIERS - BEGIN
// ===== ABOUT
// Returns a numerically indexed array containing all defined timezone identifiers
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTimeZone::listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array
// 
// Procedural style
// timezone_identifiers_list(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array
// ===== CODE
// $return_datetimezone_listidentifiers = timezone_identifiers_list(

// $timezoneGroup, // int timezoneGroup - One of the DateTimeZone class constants (or a combination).

// $countryCode // string countryCode - A two-letter (uppercase) ISO 3166-1 compatible country code.
// Note: This option is only used when timezoneGroup is set to DateTimeZone::PER_COUNTRY.

// ); // Return Values
// Returns the array of timezone identifiers. Only non-outdated items are returned. To get all, including outdated timezone identifiers, use the DateTimeZone::ALL_WITH_BC as value for timezoneGroup.
// 
// Changelog
// Version - Description
// 8.0.0   - Prior to this version, false was returned on failure.
// 7.1.0   - countryCode is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A DateTimeZone::listIdentifiers() example
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers();
// for ($i=0; $i < 5; $i++) {
//     echo "$timezone_identifiers[$i]\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Africa/Abidjan
// Africa/Accra
// Africa/Addis_Ababa
// Africa/Algiers
// Africa/Asmara
// [/result]
// [/example]
// [example]
// Example #2 Listing identifiers for a specific region
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::ASIA );
// for ($i=0; $i < 5; $i++) {
//     echo "$timezone_identifiers[$i]\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Asia/Aden
// Asia/Almaty
// Asia/Amman
// Asia/Anadyr
// Asia/Aqtau
// [/result]
// [/example]
// [example]
// Example #3 Listing identifiers for multiple regions
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::ASIA | DateTimeZone::PACIFIC );
// echo join( ', ', $timezone_identifiers );
// [/php]
// The above example will output something similar to:
// [result]
// Asia/Aden, Asia/Almaty, Asia/Amman, Asia/Anadyr, Asia/Aqtau, Asia/Aqtobe,
// Asia/Ashgabat, Asia/Atyrau, Asia/Baghdad, Asia/Bahrain, Asia/Baku,
// Asia/Bangkok, Asia/Barnaul, Asia/Beirut, Asia/Bishkek, Asia/Brunei,
// Asia/Chita, Asia/Choibalsan, Asia/Colombo, Asia/Damascus, Asia/Dhaka,
// Asia/Dili, Asia/Dubai, Asia/Dushanbe, Asia/Famagusta, Asia/Gaza, Asia/Hebron,
// Asia/Ho_Chi_Minh, Asia/Hong_Kong, Asia/Hovd, Asia/Irkutsk, Asia/Jakarta,
// Asia/Jayapura, Asia/Jerusalem, Asia/Kabul, Asia/Kamchatka, Asia/Karachi,
// Asia/Kathmandu, Asia/Khandyga, Asia/Kolkata, Asia/Krasnoyarsk,
// Asia/Kuala_Lumpur, Asia/Kuching, Asia/Kuwait, Asia/Macau, Asia/Magadan,
// Asia/Makassar, Asia/Manila, Asia/Muscat, Asia/Nicosia, Asia/Novokuznetsk,
// Asia/Novosibirsk, Asia/Omsk, Asia/Oral, Asia/Phnom_Penh, Asia/Pontianak,
// Asia/Pyongyang, Asia/Qatar, Asia/Qostanay, Asia/Qyzylorda, Asia/Riyadh,
// Asia/Sakhalin, Asia/Samarkand, Asia/Seoul, Asia/Shanghai, Asia/Singapore,
// Asia/Srednekolymsk, Asia/Taipei, Asia/Tashkent, Asia/Tbilisi, Asia/Tehran,
// Asia/Thimphu, Asia/Tokyo, Asia/Tomsk, Asia/Ulaanbaatar, Asia/Urumqi,
// Asia/Ust-Nera, Asia/Vientiane, Asia/Vladivostok, Asia/Yakutsk, Asia/Yangon,
// Asia/Yekaterinburg, Asia/Yerevan, Pacific/Apia, Pacific/Auckland,
// Pacific/Bougainville, Pacific/Chatham, Pacific/Chuuk, Pacific/Easter,
// Pacific/Efate, Pacific/Fakaofo, Pacific/Fiji, Pacific/Funafuti,
// Pacific/Galapagos, Pacific/Gambier, Pacific/Guadalcanal, Pacific/Guam,
// Pacific/Honolulu, Pacific/Kanton, Pacific/Kiritimati, Pacific/Kosrae,
// Pacific/Kwajalein, Pacific/Majuro, Pacific/Marquesas, Pacific/Midway,
// Pacific/Nauru, Pacific/Niue, Pacific/Norfolk, Pacific/Noumea,
// Pacific/Pago_Pago, Pacific/Palau, Pacific/Pitcairn, Pacific/Pohnpei,
// Pacific/Port_Moresby, Pacific/Rarotonga, Pacific/Saipan, Pacific/Tahiti,
// Pacific/Tarawa, Pacific/Tongatapu, Pacific/Wake, Pacific/Wallis
// [/result]
// [/example]
// [example]
// Example #4 Listing identifiers for a single country
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::PER_COUNTRY, "UA" );
// foreach( $timezone_identifiers as $identifier ) {
//     echo "$identifier\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Europe/Kyiv
// Europe/Simferopol
// Europe/Uzhgorod
// Europe/Zaporozhye
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimezone.listidentifiers.php
// ========== DATETIMEZONE_LISTIDENTIFIERS - END

// SYNTAX:
// array timezone_identifiers_list(int $timezoneGroup, string $countryCode = null)

return $return_timezone_identifiers_list; // array
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_IDENTIFIERS_LIST
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_LOCATION_GET
// ============================== OFFLINE
// ============================== ABOUT
// Returns location information for a timezone.
// 
// timezone_location_get - Alias of DateTimeZone::getLocation().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_location_get() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_location_get($object)
{
$return_timezone_location_get = false;

// ========== TIMEZONE_LOCATION_GET - BEGIN
// ===== ABOUT
// timezone_location_get - Alias of DateTimeZone::getLocation()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::getLocation()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_location_get = timezone_location_get(

$object // DateTimeZone object

); // Return
// array|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-location-get.php
// ========== TIMEZONE_LOCATION_GET - END

// ========== DATETIMEZONE_GETLOCATION - BEGIN
// ===== ABOUT
// Returns location information for a timezone
// ===== DESCRIPTION
// Returns location information for a timezone, including country code, latitude/longitude and comments.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getLocation(): array|false
// 
// Procedural style
// timezone_location_get(DateTimeZone $object): array|false
// ===== CODE
// $return_datetimezone_getlocation = timezone_location_get(

// $object // DateTimeZone object - Procedural style only: A DateTimeZone object returned by timezone_open()

// ); // Return Values
// Array containing location information about timezone or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeZone::getLocation() example
// [php]
// $tz = new DateTimeZone("Europe/Prague");
// print_r($tz->getLocation());
// print_r(timezone_location_get($tz));
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [country_code] => CZ
//     [latitude] => 50.08333
//     [longitude] => 14.43333
//     [comments] => 
// )
// Array
// (
//     [country_code] => CZ
//     [latitude] => 50.08333
//     [longitude] => 14.43333
//     [comments] => 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimezone.getlocation.php
// ========== DATETIMEZONE_GETLOCATION - END

// SYNTAX:
// array|false timezone_location_get(DateTimeZone $object)

return $return_timezone_location_get; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_LOCATION_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_NAME_FROM_ABBR
// ============================== OFFLINE
// ============================== ABOUT
// Returns a timezone name by guessing from abbreviation and UTC offset.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_name_from_abbr() - PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_name_from_abbr($abbr, $utcOffset = -1, $isDST = -1)
{
$return_timezone_name_from_abbr = false;

// ========== TIMEZONE_NAME_FROM_ABBR - BEGIN
// ===== ABOUT
// Returns a timezone name by guessing from abbreviation and UTC offset
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_1_3, PHP_7, PHP_8
// ===== SYNTAX
// timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1): string|false
// ===== CODE
$return_timezone_name_from_abbr = timezone_name_from_abbr(

$abbr, // string abbr - Time zone abbreviation.

$utcOffset, // int utcOffset - Offset from GMT in seconds. Defaults to -1 which means that first found time zone corresponding to abbr is returned. Otherwise exact offset is searched and only if not found then the first time zone with any offset is returned.

$isDST // int isDST - Daylight saving time indicator. Defaults to -1, which means that whether the time zone has daylight saving or not is not taken into consideration when searching. If this is set to 1, then the utcOffset is assumed to be an offset with daylight saving in effect; if 0, then utcOffset is assumed to be an offset without daylight saving in effect. If abbr doesn't exist then the time zone is searched solely by the utcOffset and isDST.

); // Return Values
// Returns time zone name on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 A timezone_name_from_abbr() example
// [php]
// echo timezone_name_from_abbr("CET") . "\n";
// echo timezone_name_from_abbr("", 3600, 0) . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Europe/Berlin
// Europe/Paris
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-name-from-abbr.php
// ========== TIMEZONE_NAME_FROM_ABBR - END

// SYNTAX:
// string|false timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1)

return $return_timezone_name_from_abbr; // string|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_NAME_FROM_ABBR
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_NAME_GET
// ============================== OFFLINE
// ============================== ABOUT
// Returns the name of the timezone.
// 
// timezone_name_get - Alias of DateTimeZone::getName().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_name_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_name_get($object)
{
$return_timezone_name_get = null;

// ========== TIMEZONE_NAME_GET - BEGIN
// ===== ABOUT
// timezone_name_get - Alias of DateTimeZone::getName()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::getName()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_name_get = timezone_name_get(

$object // DateTimeZone object

); // Return
// string
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-name-get.php
// ========== TIMEZONE_NAME_GET - END

// ========== DATETIMEZONE_GETNAME - BEGIN
// ===== ABOUT
// Returns the name of the timezone
// ===== DESCRIPTION
// Returns the name of the timezone.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getName(): string
// 
// Procedural style
// timezone_name_get(DateTimeZone $object): string
// ===== CODE
// $return_datetimezone_getname = timezone_name_get(

// $object // DateTimeZone object - The DateTimeZone for which to get a name.

// ); // Return Values
// Depending on zone type, UTC offset (type 1), timezone abbreviation (type 2), and timezone identifiers as published in the IANA timezone database (type 3), the descriptor string to create a new DateTimeZone object with the same offset and/or rules. For example 02:00, CEST, or one of the timezone names in the list of timezones.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/datetimezone.getname.php
// ========== DATETIMEZONE_GETNAME - END

// SYNTAX:
// string timezone_name_get(DateTimeZone $object)

return $return_timezone_name_get; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_NAME_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_OFFSET_GET
// ============================== OFFLINE
// ============================== ABOUT
// Returns the timezone offset from GMT.
// 
// timezone_offset_get - Alias of DateTimeZone::getOffset().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_offset_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_offset_get($object, $datetime)
{
$return_timezone_offset_get = 0;

// ========== TIMEZONE_OFFSET_GET - BEGIN
// ===== ABOUT
// timezone_offset_get - Alias of DateTimeZone::getOffset()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::getOffset()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_offset_get = timezone_offset_get(

$object, // DateTimeZone object

$datetime // DateTimeInterface datetime

); // Return
// int
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-offset-get.php
// ========== TIMEZONE_OFFSET_GET - END

// ========== DATETIMEZONE_GETOFFSET - BEGIN
// ===== ABOUT
// Returns the timezone offset from GMT
// ===== DESCRIPTION
// This function returns the offset to GMT for the date/time specified in the datetime parameter. The GMT offset is calculated with the timezone information contained in the DateTimeZone object being used.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getOffset(DateTimeInterface $datetime): int
// 
// Procedural style
// timezone_offset_get(DateTimeZone $object, DateTimeInterface $datetime): int
// ===== CODE
// $return_datetimezone_getoffset = timezone_offset_get(

// $object, // DateTimeZone object - Procedural style only: A DateTimeZone object returned by timezone_open()

// $datetime // DateTimeInterface datetime - DateTime that contains the date/time to compute the offset from.

// ); // Return Values
// Returns time zone offset in seconds.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeZone::getOffset() examples
// [php]
// // Create two timezone objects, one for Taipei (Taiwan) and one for
// // Tokyo (Japan)
// $dateTimeZoneTaipei = new DateTimeZone("Asia/Taipei");
// $dateTimeZoneJapan = new DateTimeZone("Asia/Tokyo");
// 
// // Create two DateTime objects that will contain the same Unix timestamp, but
// // have different timezones attached to them.
// $dateTimeTaipei = new DateTime("now", $dateTimeZoneTaipei);
// $dateTimeJapan = new DateTime("now", $dateTimeZoneJapan);
// 
// // Calculate the GMT offset for the date/time contained in the $dateTimeTaipei
// // object, but using the timezone rules as defined for Tokyo
// // ($dateTimeZoneJapan).
// $timeOffset = $dateTimeZoneJapan->getOffset($dateTimeTaipei);
// 
// // Should show int(32400) (for dates after Sat Sep 8 01:00:00 1951 JST).
// var_dump($timeOffset);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimezone.getoffset.php
// ========== DATETIMEZONE_GETOFFSET - END

// SYNTAX:
// int timezone_offset_get(DateTimeZone $object, DateTimeInterface $datetime)

return $return_timezone_offset_get; // int
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_OFFSET_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_OPEN
// ============================== OFFLINE
// ============================== ABOUT
// Creates new DateTimeZone object.
// 
// timezone_open - Alias of DateTimeZone::__construct().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_open() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_open($timezone)
{
$return_timezone_open = false;

// ========== TIMEZONE_OPEN - BEGIN
// ===== ABOUT
// timezone_open - Alias of DateTimeZone::__construct()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::__construct()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_open = timezone_open(

$timezone // string timezone

); // Return
// DateTimeZone|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-open.php
// ========== TIMEZONE_OPEN - END

// ========== DATETIMEZONE___CONSTRUCT - BEGIN
// ===== ABOUT
// Creates new DateTimeZone object
// ===== DESCRIPTION
// Creates a new DateTimeZone object.
// A DateTimeZone object provides access to three different types of timezone rules: UTC offset (type 1), timezone abbreviation (type 2), and timezone identifiers as published in the IANA timezone database (type 3).
// The DateTimeZone object can be attached to DateTime and DateTimeImmutable objects to be able to render the timezone encapsulated by these objects in a local timezone.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::__construct(string $timezone)
// 
// Procedural style
// timezone_open(string $timezone): DateTimeZone|false
// ===== CODE
// $return_datetimezone___construct = timezone_open(

// $timezone // string timezone - One of the supported timezone names, an offset value (+0200), or a timezone abbreviation (BST).

// ); // Return Values
// Returns DateTimeZone on success. Procedural style returns false on failure.
// 
// Errors/Exceptions
// This method throws DateInvalidTimeZoneException if the timezone supplied is not recognised as a valid timezone. Prior to PHP 8.3, this was an Exception instead.
// 
// Changelog
// Version - Description
// 8.3.0   - Invalid values now return a DateInvalidTimeZoneException instead of a generic Exception.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating and attaching DateTimeZone to a DateTimeImmutable
// [php]
// $d = new DateTimeImmutable("2022-06-02 15:44:48 UTC");
// 
// $timezones = [ 'Europe/London', 'GMT+04:45', '-06:00', 'CEST' ];
// 
// foreach ($timezones as $tz) {
//     $tzo = new DateTimeZone($tz);
// 
//     $local = $d->setTimezone($tzo);
//     echo $local->format(DateTimeInterface::RFC2822 . ' - e'), "\n";
// }
// [/php]
// The above example will output:
// [result]
// 
// Thu, 02 Jun 2022 16:44:48 +0100 - Europe/London
// Thu, 02 Jun 2022 20:29:48 +0445 - +04:45
// Thu, 02 Jun 2022 09:44:48 -0600 - -06:00
// Thu, 02 Jun 2022 17:44:48 +0200 - CEST
// [/result]
// [/example]
// [example]
// Example #2 Catching errors when instantiating DateTimeZone
// [php]
// // Error handling by catching exceptions
// $timezones = array('Europe/London', 'Mars/Phobos', 'Jupiter/Europa');
// 
// foreach ($timezones as $tz) {
//     try {
//         $mars = new DateTimeZone($tz);
//     } catch(Exception $e) {
//         echo $e->getMessage() . '<br />';
//     }
// }
// [/php]
// The above example will output:
// [result]
// DateTimeZone::__construct() [datetimezone.--construct]: Unknown or bad timezone (Mars/Phobos)
// DateTimeZone::__construct() [datetimezone.--construct]: Unknown or bad timezone (Jupiter/Europa)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimezone.construct.php
// ========== DATETIMEZONE___CONSTRUCT - END

// SYNTAX:
// DateTimeZone|false timezone_open(string $timezone)

return $return_timezone_open; // DateTimeZone|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_OPEN
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_TRANSITIONS_GET
// ============================== OFFLINE
// ============================== ABOUT
// Returns all transitions for the timezone.
// 
// timezone_transitions_get - Alias of DateTimeZone::getTransitions().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_transitions_get() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (2)
// PHP_INT_MIN - timezone_transitions_get()
// PHP_INT_MAX - timezone_transitions_get()
// ============================== CODE
/*
function php_date_datetime_timezone_transitions_get($object, $timestampBegin = PHP_INT_MIN, $timestampEnd = PHP_INT_MAX)
{
$return_timezone_transitions_get = false;

// ========== TIMEZONE_TRANSITIONS_GET - BEGIN
// ===== ABOUT
// timezone_transitions_get - Alias of DateTimeZone::getTransitions()
// ===== DESCRIPTION
// This function is an alias of: DateTimeZone::getTransitions()
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_timezone_transitions_get = timezone_transitions_get(

$object, // DateTimeZone object

$timestampBegin, // int timestampBegin

$timestampEnd // int timestampEnd

); // Return
// array|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-transitions-get.php
// ========== TIMEZONE_TRANSITIONS_GET - END

// ========== DATETIMEZONE_GETTRANSITIONS - BEGIN
// ===== ABOUT
// Returns all transitions for the timezone
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false
// 
// Procedural style
// timezone_transitions_get(DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false
// ===== CODE
// $return_datetimezone_gettransitions = timezone_transitions_get(

// $object, // DateTimeZone object - Procedural style only: A DateTimeZone object returned by timezone_open()

// $timestampBegin, // int timestampBegin - Begin timestamp.

// $timestampEnd // int timestampEnd - End timestamp.

// ); // Return Values
// Returns a numerically indexed array of transition arrays on success, or false on failure. DateTimeZone objects wrapping type 1 (UTC offsets) and type 2 (abbreviations) do not contain any transitions, and calling this method on them will return false.
// If timestampBegin is given, the first entry in the returned array will contain a transition element at the time of timestampBegin.
// 
// Transition Array Structure
// Key    | Type   | Description
// ts     | int    | Unix timestamp
// time   | string | DateTimeInterface::ISO8601_EXPANDED (PHP 8.2 and later), or DateTimeInterface::ISO8601 (PHP 8.1 and lower) time string
// offset | int    | Offset to UTC in seconds
// isdst  | bool   | Whether daylight saving time is active
// abbr   | string | Timezone abbreviation
// 
// [examples]
// Examples
// [example]
// Example #1 A timezone_transitions_get() example
// [php]
// $timezone = new DateTimeZone("Europe/London");
// $transitions = $timezone->getTransitions();
// print_r(array_slice($transitions, 0, 3));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [ts] => -9223372036854775808
//             [time] => -292277022657-01-27T08:29:52+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
//     [1] => Array
//         (
//             [ts] => -1691964000
//             [time] => 1916-05-21T02:00:00+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
//     [2] => Array
//         (
//             [ts] => -1680472800
//             [time] => 1916-10-01T02:00:00+0000
//             [offset] => 0
//             [isdst] => 
//             [abbr] => GMT
//         )
// 
// )
// [/result]
// [/example]
// [example]
// Example #2 A timezone_transitions_get() example with timestampBegin set
// [php]
// $timezone = new DateTimeZone("Europe/London");
// $transitions = $timezone->getTransitions(time());
// print_r(array_slice($transitions, 0, 3));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [ts] => 1654184161
//             [time] => 2022-06-02T15:36:01+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
//     [1] => Array
//         (
//             [ts] => 1667091600
//             [time] => 2022-10-30T01:00:00+0000
//             [offset] => 0
//             [isdst] => 
//             [abbr] => GMT
//         )
// 
//     [2] => Array
//         (
//             [ts] => 1679792400
//             [time] => 2023-03-26T01:00:00+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetimezone.gettransitions.php
// ========== DATETIMEZONE_GETTRANSITIONS - END

// SYNTAX:
// array|false timezone_transitions_get(DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX)

return $return_timezone_transitions_get; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_TRANSITIONS_GET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_TIMEZONE_VERSION_GET
// ============================== OFFLINE
// ============================== ABOUT
// Gets the version of the timezonedb.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING FUNCTIONS (1)
// timezone_version_get() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_timezone_version_get()
{
$return_timezone_version_get = null;

// ========== TIMEZONE_VERSION_GET - BEGIN
// ===== ABOUT
// Gets the version of the timezonedb
// ===== DESCRIPTION
// Returns the current version of the timezonedb.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// timezone_version_get(): string
// ===== CODE
$return_timezone_version_get = timezone_version_get(

// This function has no parameters.

); // Return Values
// Returns a string in the format YYYY.increment, such as 2022.2.
// If you have a timezone database version that is old (for example, it doesn't show the current year), then you can update the timezone information by either upgrading your PHP version, or installing the > timezonedb PECL package.
// Some Linux distributions patch PHP's date/time support to use an alternative source for timezone information. In which case this function will return 0.system. You are encouraged to install the > timezonedb PECL package in that case as well.
// 
// [examples]
// Examples
// [example]
// Example #1 Getting the timezonedb version
// [php]
// echo timezone_version_get();
// [/php]
// The above example will output something similar to:
// [result]
// 2022.2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/function.timezone-version-get.php
// ========== TIMEZONE_VERSION_GET - END

// SYNTAX:
// string timezone_version_get()

return $return_timezone_version_get; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_TIMEZONE_VERSION_GET
// ==============================


// ============================== BEGIN
//   PHP_DATE_DATETIME_DATETIME   
// ============================== OFFLINE
// OFFLINE | PHP_DATE_DATETIME_DATETIME_ADD - DateTime php_date_datetime_datetime_add(DateTime $datetime, DateInterval $interval)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_CONSTRUCT - DateTime php_date_datetime_datetime_construct(string $datetime = "now", DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_CREATEFROMFORMAT - DateTime|false php_date_datetime_datetime_createfromformat(DateTime $datetime, string $format, string $datetime, DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_CREATEFROMIMMUTABLE - static php_date_datetime_datetime_createfromimmutable(DateTime $datetime, DateTimeImmutable $object)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_CREATEFROMINTERFACE - DateTime php_date_datetime_datetime_createfrominterface(DateTime $datetime, DateTimeInterface $object)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_GETLASTERRORS - array|false php_date_datetime_datetime_getlasterrors(DateTime $datetime)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_MODIFY - DateTime|false php_date_datetime_datetime_modify(DateTime $datetime, string $modifier)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SET_STATE - DateTime php_date_datetime_datetime_set_state(DateTime $datetime, array $array)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SETDATE - DateTime php_date_datetime_datetime_setdate(DateTime $datetime, int $year, int $month, int $day)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SETISODATE - DateTime php_date_datetime_datetime_setisodate(DateTime $datetime, int $year, int $week, int $dayOfWeek = 1)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SETTIME - DateTime php_date_datetime_datetime_settime(DateTime $datetime, int $hour, int $minute, int $second = 0, int $microsecond = 0)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SETTIMESTAMP - DateTime php_date_datetime_datetime_settimestamp(DateTime $datetime, int $timestamp)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SETTIMEZONE - DateTime php_date_datetime_datetime_settimezone(DateTime $datetime, DateTimeZone $timezone)
// OFFLINE | PHP_DATE_DATETIME_DATETIME_SUB - DateTime php_date_datetime_datetime_sub(DateTime $datetime, DateInterval $interval)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (14)
// OFFLINE | DateTime::add() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTime::__construct() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTime::createFromFormat() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTime::createFromImmutable() - PHP_7 >= PHP_7_3_0, PHP_8
// OFFLINE | DateTime::createFromInterface() - PHP_8
// OFFLINE | DateTime::getLastErrors() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTime::modify() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTime::__set_state() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTime::setDate() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTime::setISODate() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTime::setTime() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTime::setTimestamp() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTime::setTimezone() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTime::sub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== USING DATA_TYPES (10)
// OFFLINE | DateTime - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateInterval - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// string
// OFFLINE | DateTimeZone - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// false
// static
// OFFLINE | DateTimeImmutable - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeInterface - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// array
// int
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_ADD
// ============================== OFFLINE
// ============================== ABOUT
// Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::add() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_add($datetime, $interval)
{
$return_datetime_add = null;

// ========== DATETIME_ADD - BEGIN
// ===== ABOUT
// Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds
// ===== DESCRIPTION
// Adds the specified DateInterval object to the specified DateTime object.
// Like DateTimeImmutable::add() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::add(DateInterval $interval): DateTime
// 
// Procedural style
// date_add(DateTime $object, DateInterval $interval): DateTime
// ===== CODE
$return_datetime_add = $datetime->add(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$interval // DateInterval interval - A DateInterval object

); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.add.php
// ========== DATETIME_ADD - END

// SYNTAX:
// DateTime DateTime::add(DateInterval $interval)

return $return_datetime_add; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_ADD
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Returns new DateTime object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::__construct() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_construct($datetime = "now", $timezone = null)
{
$return_datetime_construct = null;

// ========== DATETIME_CONSTRUCT - BEGIN
// ===== ABOUT
// Returns new DateTime object
// ===== DESCRIPTION
// Like DateTimeImmutable::__construct() but works with DateTime. Consider using the DateTimeImmutable and features instead.
// Returns a new DateTime object.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTime::__construct(string $datetime = "now", ?DateTimeZone $timezone = null)
// ===== CODE
$return_datetime_construct = new DateTime(

$datetime, // string datetime - A date/time string. Valid formats are explained in Date and Time Formats.
// Enter "now" here to obtain the current time when using the $timezone parameter.

$timezone // DateTimeZone timezone - A DateTimeZone object representing the timezone of $datetime.
// If $timezone is omitted or null, the current timezone will be used.
// Note: The $timezone parameter and the current timezone are ignored when the $datetime parameter either is a UNIX timestamp (e.g. @946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00).

); // Return Values
// Returns a new DateTime instance.
// 
// Errors/Exceptions
// If an invalid Date/Time string is passed, DateMalformedStringException is thrown. Previous to PHP 8.3, this was Exception.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws DateMalformedStringException if an invalid string is passed, instead of Exception.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.construct.php
// ========== DATETIME_CONSTRUCT - END

// SYNTAX:
// DateTime DateTime::__construct(string $datetime = "now", DateTimeZone $timezone = null)

return $return_datetime_construct; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_CREATEFROMFORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Parses a time string according to a specified format.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::createFromFormat() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_createfromformat($datetime, $format, $datetime, $timezone = null)
{
$return_datetime_createfromformat = false;

// ========== DATETIME_CREATEFROMFORMAT - BEGIN
// ===== ABOUT
// Parses a time string according to a specified format
// ===== DESCRIPTION
// Returns a new DateTime object representing the date and time specified by the datetime string, which was formatted in the given format.
// Like DateTimeImmutable::createFromFormat() and date_create_immutable_from_format(), respectively, but creates a DateTime object.
// This method, including parameters, examples, and considerations are documented on the DateTimeImmutable::createFromFormat page.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTime::createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false
// 
// Procedural style
// date_create_from_format(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false
// ===== CODE
$return_datetime_createfromformat = $datetime->createFromFormat(

// See DateTimeImmutable::createFromFormat.

$format, // string $format

$datetime, // string $datetime

$timezone // DateTimeZone $timezone

); // Return Values
// Returns a new DateTime instance or false on failure.
// 
// Errors/Exceptions
// This method throws ValueError when the datetime contains NULL-bytes.
// 
// Changelog
// Version              - Description
// 8.0.21, 8.1.8, 8.2.0 - Now throws ValueError when NULL-bytes are passed into datetime, which previously was silently ignored.
// 
// [examples]
// Examples
// For an extensive set of examples, see DateTimeImmutable::createFromFormat.
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.createfromformat.php
// ========== DATETIME_CREATEFROMFORMAT - END

// SYNTAX:
// DateTime|false DateTime::createFromFormat(string $format, string $datetime, DateTimeZone $timezone = null)

return $return_datetime_createfromformat; // DateTime|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_CREATEFROMFORMAT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_CREATEFROMIMMUTABLE
// ============================== OFFLINE
// ============================== ABOUT
// Returns new DateTime instance encapsulating the given DateTimeImmutable object.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::createFromImmutable() - PHP_7 >= PHP_7_3_0, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_createfromimmutable($datetime, $object)
{
$return_datetime_createfromimmutable = null;

// ========== DATETIME_CREATEFROMIMMUTABLE - BEGIN
// ===== ABOUT
// Returns new DateTime instance encapsulating the given DateTimeImmutable object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_7 >= PHP_7_3_0, PHP_8
// ===== SYNTAX
// public static DateTime::createFromImmutable(DateTimeImmutable $object): static
// ===== CODE
$return_datetime_createfromimmutable = $datetime->createFromImmutable(

$object // DateTimeImmutable object - The immutable DateTimeImmutable object that needs to be converted to a mutable version. This object is not modified, but instead a new DateTime instance is created containing the same date, time, and timezone information.

); // Return Values
// Returns a new DateTime instance.
// 
// Changelog
// Version - Description
// 8.0.0   - The method returns an instance of the currently invoked class now. Previously, it created a new instance of DateTime.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating a mutable date time object
// [php]
// $date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
// 
// $mutable = DateTime::createFromImmutable( $date );
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.createfromimmutable.php
// ========== DATETIME_CREATEFROMIMMUTABLE - END

// SYNTAX:
// static DateTime::createFromImmutable(DateTimeImmutable $object)

return $return_datetime_createfromimmutable; // static
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_CREATEFROMIMMUTABLE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_CREATEFROMINTERFACE
// ============================== OFFLINE
// ============================== ABOUT
// Returns new DateTime object encapsulating the given DateTimeInterface object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::createFromInterface() - PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_createfrominterface($datetime, $object)
{
$return_datetime_createfrominterface = null;

// ========== DATETIME_CREATEFROMINTERFACE - BEGIN
// ===== ABOUT
// Returns new DateTime object encapsulating the given DateTimeInterface object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public static DateTime::createFromInterface(DateTimeInterface $object): DateTime
// ===== CODE
$return_datetime_createfrominterface = $datetime->createFromInterface(

$object // DateTimeInterface object - The DateTimeInterface object that needs to be converted to a mutable version. This object is not modified, but instead a new DateTime object is created containing the same date, time, and timezone information.

); // Return Values
// Returns a new DateTime instance.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating a mutable date time object
// [php]
// $date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
// 
// $mutable = DateTime::createFromInterface($date);
// 
// $date = new DateTime("2014-06-20 11:45 Europe/London");
// $also_mutable = DateTime::createFromInterface($date);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.createfrominterface.php
// ========== DATETIME_CREATEFROMINTERFACE - END

// SYNTAX:
// DateTime DateTime::createFromInterface(DateTimeInterface $object)

return $return_datetime_createfrominterface; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_CREATEFROMINTERFACE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_GETLASTERRORS
// ============================== OFFLINE
// ============================== ABOUT
// Returns the warnings and errors.
// 
// DateTime::getLastErrors - Alias of DateTimeImmutable::getLastErrors().
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::getLastErrors() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_getlasterrors($datetime)
{
$return_datetime_getlasterrors = false;

// ========== DATETIME_GETLASTERRORS - BEGIN
// ===== ABOUT
// DateTime::getLastErrors - Alias of DateTimeImmutable::getLastErrors()
// ===== DESCRIPTION
// This function is an alias of: DateTimeImmutable::getLastErrors()
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// ===== CODE
$return_datetime_getlasterrors = $datetime->getLastErrors(

// This function has no parameters.

); // Return
// array|false
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.getlasterrors.php
// ========== DATETIME_GETLASTERRORS - END

// ========== DATETIMEIMMUTABLE_GETLASTERRORS - BEGIN
// ===== ABOUT
// Returns the warnings and errors
// ===== DESCRIPTION
// Returns an array of warnings and errors found while parsing a date/time string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public static DateTimeImmutable::getLastErrors(): array|false
// ===== CODE
// $datetimeimmutable_getlasterrors = $datetimeimmutable->getLastErrors(

// This function has no parameters.

// ); // Return Values
// Returns array containing info about warnings and errors, or false if there are neither warnings nor errors.
// 
// Changelog
// Version - Description
// 8.2.0   - Before PHP 8.2.0, this function did not return false when there were no warnings or errors. Instead, it would always return the documented array structure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::getLastErrors() example
// [php]
// try {
//     $date = new DateTimeImmutable('asdfasdf');
// } catch (Exception $e) {
//     // For demonstration purposes only...
//     print_r(DateTimeImmutable::getLastErrors());
// 
//     // The real object-oriented way to do this is
//     // echo $e->getMessage();
// }
// [/php]
// The above examples will output:
// [result]
// Array
// (
//    [warning_count] => 1
//    [warnings] => Array
//        (
//            [6] => Double timezone specification
//        )
// 
//    [error_count] => 1
//    [errors] => Array
//        (
//            [0] => The timezone could not be found in the database
//        )
// 
// )
// [/result]
// The indexes 6, and 0 in the example output refer to the character index in the string where the error occurred.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetimeimmutable.getlasterrors.php
// ========== DATETIMEIMMUTABLE_GETLASTERRORS - END

// SYNTAX:
// array|false DateTime::getLastErrors()

return $return_datetime_getlasterrors; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_GETLASTERRORS
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_MODIFY
// ============================== OFFLINE
// ============================== ABOUT
// Alters the timestamp.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::modify() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_modify($datetime, $modifier)
{
$return_datetime_modify = false;

// ========== DATETIME_MODIFY - BEGIN
// ===== ABOUT
// Alters the timestamp
// ===== DESCRIPTION
// Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by DateTimeImmutable::__construct().
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::modify(string $modifier): DateTime|false
// 
// Procedural style
// date_modify(DateTime $object, string $modifier): DateTime|false
// ===== CODE
$return_datetime_modify = $datetime->modify(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$modifier // string modifier - A date/time string. Valid formats are explained in Date and Time Formats.

); // Return Values
// Returns the modified DateTime object for method chaining or false on failure.
// 
// Errors/Exceptions
// Object Orientated API only: If an invalid Date/Time string is passed, DateMalformedStringException is thrown.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws DateMalformedStringException with DateTime::modify() if an invalid string is passed, instead of a warning. date_modify() has not been changed.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::modify() example
// Object-oriented style
// [php]
// $date = new DateTime('2006-12-12');
// $date->modify('+1 day');
// echo $date->format('Y-m-d');
// [/php]
// Procedural style
// [php]
// $date = date_create('2006-12-12');
// date_modify($date, '+1 day');
// echo date_format($date, 'Y-m-d');
// [/php]
// The above examples will output:
// [result]
// 2006-12-13
// [/result]
// [/example]
// [example]
// Example #2 Beware when adding or subtracting months
// [php]
// $date = new DateTime('2000-12-31');
// 
// $date->modify('+1 month');
// echo $date->format('Y-m-d') . "\n";
// 
// $date->modify('+1 month');
// echo $date->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-01-31
// 2001-03-03
// [/result]
// [/example]
// [example]
// Example #3 All formats of Date and Time are supported
// [php]
// $date = new DateTime('2020-12-31');
// 
// $date->modify('July 1st, 2023');
// echo $date->format('Y-m-d H:i') . "\n";
// 
// $date->modify('Monday next week');
// echo $date->format('Y-m-d H:i') . "\n";
// 
// $date->modify('17:30');
// echo $date->format('Y-m-d H:i') . "\n";
// [/php]
// The above example will output:
// [result]
// 2023-07-01 00:00
// 2023-07-03 00:00
// 2023-07-03 17:30
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.modify.php
// ========== DATETIME_MODIFY - END

// SYNTAX:
// DateTime|false DateTime::modify(string $modifier)

return $return_datetime_modify; // DateTime|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_MODIFY
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SET_STATE
// ============================== OFFLINE
// ============================== ABOUT
// The __set_state handler.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::__set_state() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_set_state($datetime, $array)
{
$return_datetime_set_state = null;

// ========== DATETIME_SET_STATE - BEGIN
// ===== ABOUT
// The __set_state handler
// ===== DESCRIPTION
// The __set_state() handler.
// Like DateTimeImmutable::__set_state() but works with DateTime.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public static DateTime::__set_state(array $array): DateTime
// ===== CODE
$return_datetime_set_state = $datetime->__set_state(

$array // array $array - Initialization array.

); // Return Values
// Returns a new instance of a DateTime object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.set-state.php
// ========== DATETIME_SET_STATE - END

// SYNTAX:
// DateTime DateTime::__set_state(array $array)

return $return_datetime_set_state; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SET_STATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SETDATE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the date.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::setDate() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_setdate($datetime, $year, $month, $day)
{
$return_datetime_setdate = null;

// ========== DATETIME_SETDATE - BEGIN
// ===== ABOUT
// Sets the date
// ===== DESCRIPTION
// Resets the current date of the DateTime object to a different date.
// Like DateTimeImmutable::setDate() but works with DateTime, and changes the existing object.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setDate(int $year, int $month, int $day): DateTime
// 
// Procedural style
// date_date_set(
//    DateTime $object,
//    int $year,
//    int $month,
//    int $day
// ): DateTime
// ===== CODE
$return_datetime_setdate = $datetime->setDate(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$year, // int year - Year of the date.

$month, // int month - Month of the date.

$day // int day - Day of the date.

); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-26)
// URL: https://www.php.net/manual/en/datetime.setdate.php
// ========== DATETIME_SETDATE - END

// SYNTAX:
// DateTime DateTime::setDate(int $year, int $month, int $day)

return $return_datetime_setdate; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SETDATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SETISODATE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the ISO date.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::setISODate() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_setisodate($datetime, $year, $week, $dayOfWeek = 1)
{
$return_datetime_setisodate = null;

// ========== DATETIME_SETISODATE - BEGIN
// ===== ABOUT
// Sets the ISO date
// ===== DESCRIPTION
// Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.
// Like DateTimeImmutable::setISODate() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setISODate(int $year, int $week, int $dayOfWeek = 1): DateTime
// 
// Procedural style
// date_isodate_set(
//    DateTime $object,
//    int $year,
//    int $week,
//    int $dayOfWeek = 1
// ): DateTime
// ===== CODE
$return_datetime_setisodate = $datetime->setISODate(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$year, // int year - Year of the date.

$week, // int week - Week of the date.

$dayOfWeek // int dayOfWeek - Offset from the first day of the week.

); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetime.setisodate.php
// ========== DATETIME_SETISODATE - END

// SYNTAX:
// DateTime DateTime::setISODate(int $year, int $week, int $dayOfWeek = 1)

return $return_datetime_setisodate; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SETISODATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SETTIME
// ============================== OFFLINE
// ============================== ABOUT
// Sets the time.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::setTime() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_settime($datetime, $hour, $minute, $second = 0, $microsecond = 0)
{
$return_datetime_settime = null;

// ========== DATETIME_SETTIME - BEGIN
// ===== ABOUT
// Sets the time
// ===== DESCRIPTION
// Resets the current time of the DateTime object to a different time.
// Like DateTimeImmutable::setTime() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setTime(
//    int $hour,
//    int $minute,
//    int $second = 0,
//    int $microsecond = 0
// ): DateTime
// 
// Procedural style
// date_time_set(
//    DateTime $object,
//    int $hour,
//    int $minute,
//    int $second = 0,
//    int $microsecond = 0
// ): DateTime
// ===== CODE
$return_datetime_settime = $datetime->setTime(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$hour, // int hour - Hour of the time.

$minute, // int minute - Minute of the time.

$second, // int second - Second of the time.

$microsecond // int microsecond - Microsecond of the time.

); // Return Values
// Returns the modified DateTime object for method chaining.
// 
// Changelog
// Version - Description
// 8.1.0   - The behaviour with double existing hours (during the fall-back DST transition) changed. Previously PHP would pick the second occurrence (after the DST transition), instead of the first occurrence (before DST transition).
// 7.1.0   - The microsecond parameter was added.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetime.settime.php
// ========== DATETIME_SETTIME - END

// SYNTAX:
// DateTime DateTime::setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)

return $return_datetime_settime; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SETTIME
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SETTIMESTAMP
// ============================== OFFLINE
// ============================== ABOUT
// Sets the date and time based on an Unix timestamp.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::setTimestamp() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_settimestamp($datetime, $timestamp)
{
$return_datetime_settimestamp = null;

// ========== DATETIME_SETTIMESTAMP - BEGIN
// ===== ABOUT
// Sets the date and time based on an Unix timestamp
// ===== DESCRIPTION
// Sets the date and time based on an Unix timestamp.
// Like DateTimeImmutable::setTimestamp() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setTimestamp(int $timestamp): DateTime
// 
// Procedural style
// date_timestamp_set(DateTime $object, int $timestamp): DateTime
// ===== CODE
$return_datetime_settimestamp = $datetime->setTimestamp(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$timestamp // int timestamp - Unix timestamp representing the date. Setting timestamps outside the range of int is possible by using DateTimeImmutable::modify() with the @ format.

); // Return Values
// Returns the modified DateTime object for method chaining.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetime.settimestamp.php
// ========== DATETIME_SETTIMESTAMP - END

// SYNTAX:
// DateTime DateTime::setTimestamp(int $timestamp)

return $return_datetime_settimestamp; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SETTIMESTAMP
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SETTIMEZONE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the time zone for the DateTime object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::setTimezone() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_settimezone($datetime, $timezone)
{
$return_datetime_settimezone = null;

// ========== DATETIME_SETTIMEZONE - BEGIN
// ===== ABOUT
// Sets the time zone for the DateTime object
// ===== DESCRIPTION
// Sets a new timezone for a DateTime object.
// Like DateTimeImmutable::setTimezone() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::setTimezone(DateTimeZone $timezone): DateTime
// 
// Procedural style
// date_timezone_set(DateTime $object, DateTimeZone $timezone): DateTime
// ===== CODE
$return_datetime_settimezone = $datetime->setTimezone(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$timezone // DateTimeZone timezone - A DateTimeZone object representing the desired time zone.

); // Return Values
// Returns the DateTime object for method chaining. The underlaying point-in-time is not changed when calling this method.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTime::setTimeZone() example
// Object-oriented style
// [php]
// $date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// $date->setTimezone(new DateTimeZone('Pacific/Chatham'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// [/php]
// Procedural style
// [php]
// $date = date_create('2000-01-01', timezone_open('Pacific/Nauru'));
// echo date_format($date, 'Y-m-d H:i:sP') . "\n";
// 
// date_timezone_set($date, timezone_open('Pacific/Chatham'));
// echo date_format($date, 'Y-m-d H:i:sP') . "\n";
// [/php]
// The above examples will output:
// [result]
// 2000-01-01 00:00:00+12:00
// 2000-01-01 01:45:00+13:45
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetime.settimezone.php
// ========== DATETIME_SETTIMEZONE - END

// SYNTAX:
// DateTime DateTime::setTimezone(DateTimeZone $timezone)

return $return_datetime_settimezone; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SETTIMEZONE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIME_SUB
// ============================== OFFLINE
// ============================== ABOUT
// Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTime::sub() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetime_sub($datetime, $interval)
{
$return_datetime_sub = null;

// ========== DATETIME_SUB - BEGIN
// ===== ABOUT
// Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
// ===== DESCRIPTION
// Modifies the specified DateTime object, by subtracting the specified DateInterval object.
// Like DateTimeImmutable::sub() but works with DateTime.
// The procedural version takes the DateTime object as its first argument.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTime::sub(DateInterval $interval): DateTime
// 
// Procedural style
// date_sub(DateTime $object, DateInterval $interval): DateTime
// ===== CODE
$return_datetime_sub = $datetime->sub(

// DateTime object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$interval // DateInterval interval - A DateInterval object

); // Return Values
// Returns the modified DateTime object for method chaining.
// 
// Errors/Exceptions
// Object Orientated API only: If an unsupported operation is attempted, such as using a DateInterval object representing relative time specifications such as next weekday, a DateInvalidOperationException is thrown.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws a DateInvalidOperationException with DateTime::sub(), instead of a warning when an unsupported operation is attempted. date_sub() has not been changed.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetime.sub.php
// ========== DATETIME_SUB - END

// SYNTAX:
// DateTime DateTime::sub(DateInterval $interval)

return $return_datetime_sub; // DateTime
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIME_SUB
// ==============================


// ============================== END
//   PHP_DATE_DATETIME_DATETIME   
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE
// ============================== OFFLINE
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_ADD - DateTimeImmutable php_date_datetime_datetimeimmutable_add(DateTimeImmutable $datetimeimmutable, DateInterval $interval)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CONSTRUCT - DateTimeImmutable php_date_datetime_datetimeimmutable_construct(string $datetime = "now", DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMFORMAT - DateTimeImmutable|false php_date_datetime_datetimeimmutable_createfromformat(DateTimeImmutable $datetimeimmutable, string $format, string $datetime, DateTimeZone $timezone = null)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMINTERFACE - DateTimeImmutable php_date_datetime_datetimeimmutable_createfrominterface(DateTimeImmutable $datetimeimmutable, DateTimeInterface $object)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMMUTABLE - static php_date_datetime_datetimeimmutable_createfrommutable(DateTimeImmutable $datetimeimmutable, DateTime $object)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_GETLASTERRORS - array|false php_date_datetime_datetimeimmutable_getlasterrors(DateTimeImmutable $datetimeimmutable)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_MODIFY - DateTimeImmutable|false php_date_datetime_datetimeimmutable_modify(DateTimeImmutable $datetimeimmutable, string $modifier)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SET_STATE - DateTimeImmutable php_date_datetime_datetimeimmutable_set_state(DateTimeImmutable $datetimeimmutable, array $array)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETDATE - DateTimeImmutable php_date_datetime_datetimeimmutable_setdate(DateTimeImmutable $datetimeimmutable, int $year, int $month, int $day)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETISODATE - DateTimeImmutable php_date_datetime_datetimeimmutable_setisodate(DateTimeImmutable $datetimeimmutable, int $year, int $week, int $dayOfWeek = 1)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIME - DateTimeImmutable php_date_datetime_datetimeimmutable_settime(DateTimeImmutable $datetimeimmutable, int $hour, int $minute, int $second = 0, int $microsecond = 0)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIMESTAMP - DateTimeImmutable php_date_datetime_datetimeimmutable_settimestamp(DateTimeImmutable $datetimeimmutable, int $timestamp)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIMEZONE - DateTimeImmutable php_date_datetime_datetimeimmutable_settimezone(DateTimeImmutable $datetimeimmutable, DateTimeZone $timezone)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SUB - DateTimeImmutable php_date_datetime_datetimeimmutable_sub(DateTimeImmutable $datetimeimmutable, DateInterval $interval)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (14)
// OFFLINE | DateTimeImmutable::add() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::__construct() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::createFromFormat() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::createFromInterface() - PHP_8
// OFFLINE | DateTimeImmutable::createFromMutable() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::getLastErrors() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::modify() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::__set_state() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::setDate() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::setISODate() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::setTime() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::setTimestamp() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::setTimezone() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateTimeImmutable::sub() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== USING DATA_TYPES (10)
// OFFLINE | DateTimeImmutable - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateInterval - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// string
// OFFLINE | DateTimeZone - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// false
// OFFLINE | DateTimeInterface - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// static
// OFFLINE | DateTime - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// array
// int
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_ADD
// ============================== OFFLINE
// ============================== ABOUT
// Returns a new object, with added amount of days, months, years, hours, minutes and seconds.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::add() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_add($datetimeimmutable, $interval)
{
$return_datetimeimmutable_add = null;

// ========== DATETIMEIMMUTABLE_ADD - BEGIN
// ===== ABOUT
// Returns a new object, with added amount of days, months, years, hours, minutes and seconds
// ===== DESCRIPTION
// Creates a new DateTimeImmutable object, and adds the specified DateInterval object to this, to represent the new value.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::add(DateInterval $interval): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_add = $datetimeimmutable->add(

$interval // DateInterval interval - A DateInterval object

); // Return Values
// Returns a new DateTimeImmutable object with the modified data.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::add() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2000-01-01');
// $newDate = $date->add(new DateInterval('P10D'));
// echo $newDate->format('Y-m-d') . "\n";
// [/php]
// [/example]
// [example]
// Example #2 Further DateTimeImmutable::add() examples
// [php]
// $date = new DateTimeImmutable('2000-01-01');
// $newDate = $date->add(new DateInterval('PT10H30S'));
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// 
// $date = new DateTimeImmutable('2000-01-01');
// $newDate = $date->add(new DateInterval('P7Y5M4DT4H3M2S'));
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// [/php]
// The above example will output:
// [result]
// 2000-01-01 10:00:30
// 2007-06-05 04:03:02
// [/result]
// [/example]
// [example]
// Example #3 Beware when adding months
// [php]
// $date = new DateTimeImmutable('2000-12-31');
// $interval = new DateInterval('P1M');
// 
// $newDate1 = $date->add($interval);
// echo $newDate1->format('Y-m-d') . "\n";
// 
// $newDate2 = $newDate1->add($interval);
// echo $newDate2->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-01-31
// 2001-03-03
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetimeimmutable.add.php
// ========== DATETIMEIMMUTABLE_ADD - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::add(DateInterval $interval)

return $return_datetimeimmutable_add; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_ADD
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Returns new DateTimeImmutable object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::__construct() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_construct($datetime = "now", $timezone = null)
{
$return_datetimeimmutable_construct = null;

// ========== DATETIMEIMMUTABLE_CONSTRUCT - BEGIN
// ===== ABOUT
// Returns new DateTimeImmutable object
// ===== DESCRIPTION
// Returns new a DateTimeImmutable object.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeImmutable::__construct(string $datetime = "now", ?DateTimeZone $timezone = null)
// 
// Procedural style
// date_create_immutable(string $datetime = "now", ?DateTimeZone $timezone = null): DateTimeImmutable|false
// ===== CODE
$return_datetimeimmutable_construct = new DateTimeImmutable(

$datetime, // string $datetime - A date/time string. Valid formats are explained in Date and Time Formats.
// Enter "now" here to obtain the current time when using the $timezone parameter.

$timezone // DateTimeZone timezone - A DateTimeZone object representing the timezone of $datetime.
// If $timezone is omitted or null, the current timezone will be used.
// Note: The $timezone parameter and the current timezone are ignored when the $datetime parameter either is a UNIX timestamp (e.g. @946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00, or 2010-07-05T06:00:00Z).

); // Return Values
// Returns a new DateTimeImmutable instance.
// 
// Errors/Exceptions
// If an invalid Date/Time string is passed, DateMalformedStringException is thrown. Previous to PHP 8.3, this was Exception.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws DateMalformedStringException if an invalid string is passed, instead of Exception.
// 7.1.0   - From now on microseconds are filled with actual value. Not with '00000'.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::__construct() example
// Object-oriented style
// [php]
// try {
//     $date = new DateTimeImmutable('2000-01-01');
// } catch (Exception $e) {
//     echo $e->getMessage();
//     exit(1);
// }
// 
// echo $date->format('Y-m-d');
// [/php]
// Procedural style
// [php]
// $date = date_create('2000-01-01');
// if (!$date) {
//     $e = date_get_last_errors();
//     foreach ($e['errors'] as $error) {
//         echo "$error\n";
//     }
//     exit(1);
// }
// 
// echo date_format($date, 'Y-m-d');
// [/php]
// The above examples will output:
// [result]
// 2000-01-01
// [/result]
// [/example]
// [example]
// Example #2 Intricacies of DateTimeImmutable::__construct()
// [php]
// // Specified date/time in your computer's time zone.
// $date = new DateTimeImmutable('2000-01-01');
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// // Specified date/time in the specified time zone.
// $date = new DateTimeImmutable('2000-01-01', new DateTimeZone('Pacific/Nauru'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// // Current date/time in your computer's time zone.
// $date = new DateTimeImmutable();
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// // Current date/time in the specified time zone.
// $date = new DateTimeImmutable('now', new DateTimeZone('Pacific/Nauru'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// // Using a UNIX timestamp.  Notice the result is in the UTC time zone.
// $date = new DateTimeImmutable('@946684800');
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// // Non-existent values roll over.
// $date = new DateTimeImmutable('2000-02-30');
// echo $date->format('Y-m-d H:i:sP') . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 2000-01-01 00:00:00-05:00
// 2000-01-01 00:00:00+12:00
// 2010-04-24 10:24:16-04:00
// 2010-04-25 02:24:16+12:00
// 2000-01-01 00:00:00+00:00
// 2000-03-01 00:00:00-05:00
// [/result]
// [/example]
// [example]
// Example #3 Changing the associated timezone
// [php]
// $timeZone = new \DateTimeZone('Asia/Tokyo');
// 
// $time = new \DateTimeImmutable();
// $time = $time->setTimezone($timeZone);
// 
// echo $time->format('Y/m/d H:i:s'), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 2022/08/12 23:49:23
// [/result]
// [/example]
// [example]
// Example #4 Using a relative date/time string
// [php]
// $time = new \DateTimeImmutable("-1 year");
// 
// echo $time->format('Y/m/d H:i:s'), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// 2021/08/12 15:43:51
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-27)
// URL: https://www.php.net/manual/en/datetimeimmutable.construct.php
// ========== DATETIMEIMMUTABLE_CONSTRUCT - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::__construct(string $datetime = "now", DateTimeZone $timezone = null)

return $return_datetimeimmutable_construct; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMFORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Parses a time string according to a specified format.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::createFromFormat() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_createfromformat($datetimeimmutable, $format, $datetime, $timezone = null)
{
$return_datetimeimmutable_createfromformat = false;

// ========== DATETIMEIMMUTABLE_CREATEFROMFORMAT - BEGIN
// ===== ABOUT
// Parses a time string according to a specified format
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object representing the date and time specified by the datetime string, which was formatted in the given format.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTimeImmutable::createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTimeImmutable|false
// 
// Procedural style
// date_create_immutable_from_format(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTimeImmutable|false
// ===== CODE
$return_datetimeimmutable_createfromformat = $datetimeimmutable->createFromFormat(

$format, // string format - The format that the passed in string should be in. See the formatting options below. In most cases, the same letters as for the date() can be used.
// All fields are initialised with the current date/time. In most cases you would want to reset these to "zero" (the Unix epoch, 1970-01-01 00:00:00 UTC). You do that by including the ! character as first character in your format, or | as your last. Please see the documentation for each character below for more information.
// The format is parsed from left to right, which means that in some situations the order in which the format characters are present affects the result. In the case of z (the day of the year), it is required that a year has already been parsed, for example through the Y or y characters.
// Letters that are used for parsing numbers allow a wide range of values, outside of what the logical range would be. For example, the d (day of the month) accepts values in the range from 00 to 99. The only constraint is on the amount of digits. The date/time parser's overflow mechanism is used when out-of-range values are given. The examples below show some of this behaviour.
// This also means that the data parsed for a format letter is greedy, and will read up to the amount of digits its format allows for. That can then also mean that there are no longer enough characters in the datetime string for following format characters. An example on this page also illustrates this issue.
// 
// The following characters are recognized in the format parameter string
// format character          - Description                                               - Example parsable values
// Day                       - ---                                                       - ---
// d and j                   - Day of the month, 2 digits with or without leading zeros  - 01 to 31 or 1 to 31. (2 digit numbers higher than the number of days in the month are accepted, in which case they will make the month overflow. For example using 33 with January, means February 2nd)
// D and l                   - A textual representation of a day                         - Mon through Sun or Sunday through Saturday. If the day name given is different then the day name belonging to a parsed (or default) date is different, then an overflow occurs to the next date with the given day name. See the examples below for an explanation.
// S                         - English ordinal suffix for the day of the month, 2 characters. It's ignored while processing. - st, nd, rd or th.
// z                         - The day of the year (starting from 0); must be preceded by Y or y. - 0 through 365. (3 digit numbers higher than the numbers in a year are accepted, in which case they will make the year overflow. For example using 366 with 2022, means January 2nd, 2023)
// Month                     - ---                                                       - ---
// F and M                   - A textual representation of a month, such as January or Sept - January through December or Jan through Dec
// m and n                   - Numeric representation of a month, with or without leading zeros - 01 through 12 or 1 through 12. (2 digit numbers higher than 12 are accepted, in which case they will make the year overflow. For example using 13 means January in the next year)
// Year                      - ---                                                       - ---
// X and x                   - A full numeric representation of a year, up to 19 digits, optionally prefixed by + or - - Examples: 0055, 787, 1999, -2003, +10191
// Y                         - A full numeric representation of a year, up to 4 digits   - Examples: 0055, 787, 1999, 2003
// y                         - A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive) - Examples: 99 or 03 (which will be interpreted as 1999 and 2003, respectively)
// Time                      - ---                                                       - ---
// a and A                   - Ante meridiem and Post meridiem                           - am or pm
// g and h                   - 12-hour format of an hour with or without leading zero    - 1 through 12 or 01 through 12 (2 digit numbers higher than 12 are accepted, in which case they will make the day overflow. For example using 14 means 02 in the next AM/PM period)
// G and H                   - 24-hour format of an hour with or without leading zeros   - 0 through 23 or 00 through 23 (2 digit numbers higher than 24 are accepted, in which case they will make the day overflow. For example using 26 means 02:00 the next day)
// i                         - Minutes with leading zeros                                - 00 to 59. (2 digit numbers higher than 59 are accepted, in which case they will make the hour overflow. For example using 66 means :06 the next hour)
// s                         - Seconds, with leading zeros                               - 00 through 59 (2 digit numbers higher than 59 are accepted, in which case they will make the minute overflow. For example using 90 means :30 the next minute)
// v                         - Fraction in milliseconds (up to three digits)             - Example: 12 (0.12 seconds), 345 (0.345 seconds)
// u                         - Fraction in microseconds (up to six digits)               - Example: 45 (0.45 seconds), 654321 (0.654321 seconds)
// Timezone                  - ---                                                       - ---
// e, O, P and T             - Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation - Examples: UTC, GMT, Atlantic/Azores or +0200 or +02:00 or EST, MDT
// Full Date/Time            - ---                                                       - ---
// U                         - Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) - Example: 1292177455
// Whitespace and Separators - ---                                                       - ---
// (space)                   - Zero or more spaces, tabs, NBSP (U+A0), or NNBSP (U+202F) characters - Example: "\t", " "
// #                         - One of the following separation symbol: ;, :, /, ., ,, -, ( or ) - Example: /
// ;, :, /, ., ,, -, ( or )  - The specified character.                                  - Example: -
// ?                         - A random byte                                             - Example: ^ (Be aware that for UTF-8 characters you might need more than one ?. In this case, using * is probably what you want instead)
// *                         - Random bytes until the next separator or digit            - Example: * in Y-*-d with the string 2009-aWord-08 will match aWord
// !                         - Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values ( 0 for hour, minute, second and fraction, 1 for month and day, 1970 for year and UTC for timezone information) - Without !, all fields will be set to the current date and time.
// |                         - Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values if they have not been parsed yet - Y-m-d| will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.
// +                         - If this format specifier is present, trailing data in the string will not cause an error, but a warning instead - Use DateTimeImmutable::getLastErrors() to find out whether trailing data was present.
// Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with DateTimeImmutable::getLastErrors().
// To include literal characters in format, you have to escape them with a backslash (\).
// If format does not contain the character ! then portions of the generated date/time which are not specified in format will be set to the current system time.
// If format contains the character !, then portions of the generated date/time not provided in format, as well as values to the left-hand side of the !, will be set to corresponding values from the Unix epoch.
// If any time character is parsed, then all other time-related fields are set to "0", unless also parsed.
// The Unix epoch is 1970-01-01 00:00:00 UTC.

$datetime, // string datetime - String representing the time.

$timezone // DateTimeZone timezone - A DateTimeZone object representing the desired time zone.
// If timezone is omitted or null and datetime contains no timezone, the current timezone will be used.
// Note: The timezone parameter and the current timezone are ignored when the datetime parameter either contains a UNIX timestamp (e.g. 946684800) or specifies a timezone (e.g. 2010-01-28T15:00:00+02:00).

); // Return Values
// Returns a new DateTimeImmutable instance or false on failure.
// 
// Errors/Exceptions
// This method throws ValueError when the datetime contains NULL-bytes.
// 
// Changelog
// Version              - Description
// 8.2.9                - The (space) specifier now also supports NBSP (U+A0) and NNBSP (U+202F) characters.
// 8.2.0                - The X and x format specifiers have been added.
// 8.0.21, 8.1.8, 8.2.0 - Now throws ValueError when NULL-bytes are passed into datetime, which previously was silently ignored.
// 7.3.0                - The v format specifier has been added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::createFromFormat() example
// Object-oriented style
// [php]
// $date = DateTimeImmutable::createFromFormat('j-M-Y', '15-Feb-2009');
// echo $date->format('Y-m-d');
// [/php]
// [/example]
// [example]
// Example #2 Using predefined format constants with DateTimeImmutable::createFromFormat()
// Object-oriented style
// [php]
// $date = DateTimeImmutable::createFromFormat(DateTimeInterface::ISO8601, '2004-02-12T15:19:21+00:00');
// $date = DateTimeImmutable::createFromFormat(DateTimeInterface::RFC3339_EXTENDED, '2013-10-14T09:00:00.000+02:00');
// [/php]
// The formatting constants as used in this example consist of a string of characters for formatting a DateTimeImmutable object. In most cases, these letters match with the same elements of date/time information as the ones defined in the parameters section above, but they tend to be more lenient.
// [/example]
// [example]
// Example #3 Intricacies of DateTimeImmutable::createFromFormat()
// [php]
// echo 'Current time: ' . date('Y-m-d H:i:s') . "\n";
// 
// $format = 'Y-m-d';
// $date = DateTimeImmutable::createFromFormat($format, '2009-02-15');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = 'Y-m-d H:i:s';
// $date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = 'Y-m-!d H:i:s';
// $date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = '!d';
// $date = DateTimeImmutable::createFromFormat($format, '15');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// 
// $format = 'i';
// $date = DateTimeImmutable::createFromFormat($format, '15');
// echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Current time: 2022-06-02 15:50:46
// Format: Y-m-d; 2009-02-15 15:50:46
// Format: Y-m-d H:i:s; 2009-02-15 15:16:17
// Format: Y-m-!d H:i:s; 1970-01-15 15:16:17
// Format: !d; 1970-01-15 00:00:00
// Format: i; 2022-06-02 00:15:00
// [/result]
// [/example]
// [example]
// Example #4 Format string with literal characters
// [php]
// echo DateTimeImmutable::createFromFormat('H\h i\m s\s','23h 15m 03s')->format('H:i:s');
// [/php]
// The above example will output something similar to:
// [result]
// 23:15:03
// [/result]
// [/example]
// [example]
// Example #5 Overflow behaviour
// [php]
// echo DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-17-35 16:60:97')->format(DateTimeImmutable::RFC2822);
// [/php]
// The above example will output something similar to:
// [result]
// Sat, 04 Jun 2022 17:01:37 +0000
// [/result]
// Although the result looks odd, it is correct, as the following overflows happen:
// 1. 97 seconds overflows to 1 minute, leaving 37 seconds.
// 2. 61 minutes overflows to 1 hour, leaving 1 minutes.
// 3. 35 days overflows to 1 month, leaving 4 days. The amount of days that are left over depends on the month, as not every month has the same amount of days.
// 4. 18 months overflows to 1 year, leaving 6 months.
// [/example]
// [example]
// Example #6 Overflowing day name behaviour
// [php]
// $d = DateTime::createFromFormat(DateTimeInterface::RFC1123, 'Mon, 3 Aug 2020 25:00:00 +0000');
// echo $d->format(DateTime::RFC1123), "\n";
// [/php]
// The above example will output something similar to:
// [result]
// Mon, 10 Aug 2020 01:00:00 +0000
// [/result]
// Although the result looks odd, it is correct, as the following overflows happen:
// 1. 3 Aug 2020 25:00:00 overflows to (Tue) 4 Aug 2020 01:00.
// 2. Mon gets applied, which advances the date to Mon, 10 Aug 2020 01:00:00. The explanation of relative keywords such as Mon is explained in the section on relative formats.
// In order to detect overflows in dates, you can use DateTimeImmutable::getLastErrors(), which will include a warning if an overflow occured.
// [/example]
// [example]
// Example #7 Detecting overflown dates
// [php]
// $d = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-17-35 16:60:97');
// echo $d->format(DateTimeImmutable::RFC2822), "\n\n";
// 
// var_dump(DateTimeImmutable::GetLastErrors());
// [/php]
// The above example will output something similar to:
// [result]
// Sat, 04 Jun 2022 17:01:37 +0000
// 
// array(4) {
//   'warning_count' =>
//   int(2)
//   'warnings' =>
//   array(1) {
//     [19] =>
//     string(27) "The parsed date was invalid"
//   }
//   'error_count' =>
//   int(0)
//   'errors' =>
//   array(0) {
//   }
// }
// [/result]
// [/example]
// [example]
// Example #8 Greedy parsing behaviour
// [php]
// print_r(date_parse_from_format('Gis', '60101'));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [year] =>
//     [month] =>
//     [day] =>
//     [hour] => 60
//     [minute] => 10
//     [second] => 0
//     [fraction] => 0
//     [warning_count] => 1
//     [warnings] => Array
//         (
//             [5] => The parsed time was invalid
//         )
// 
//     [error_count] => 1
//     [errors] => Array
//         (
//             [4] => A two digit second could not be found
//         )
// 
//     [is_localtime] =>
// )
// [/result]
// The G format is to parse 24 hour clock hours, with or without leading zero. This requires to parse 1 or 2 digits. Because there are two following digits, it greedily reads this as 60.
// The following i and s format characters both require two digits. This means that 10 is passed as minute (i), and that there are then not enough digits left to parse for as second (s).
// The errors array indicates this problem.
// Additionally, an hour of 60 is outside the range 0-24, which causes the warnings array to include a warning that the time is invalid.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.createfromformat.php
// ========== DATETIMEIMMUTABLE_CREATEFROMFORMAT - END

// SYNTAX:
// DateTimeImmutable|false DateTimeImmutable::createFromFormat(string $format, string $datetime, DateTimeZone $timezone = null)

return $return_datetimeimmutable_createfromformat; // DateTimeImmutable|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMFORMAT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMINTERFACE
// ============================== OFFLINE
// ============================== ABOUT
// Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::createFromInterface() - PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_createfrominterface($datetimeimmutable, $object)
{
$return_datetimeimmutable_createfrominterface = null;

// ========== DATETIMEIMMUTABLE_CREATEFROMINTERFACE - BEGIN
// ===== ABOUT
// Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_8
// ===== SYNTAX
// public static DateTimeImmutable::createFromInterface(DateTimeInterface $object): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_createfrominterface = $datetimeimmutable->createFromInterface(

$object // DateTimeInterface object - The DateTimeInterface object that needs to be converted to an immutable version. This object is not modified, but instead a new DateTimeImmutable object is created containing the same date, time, and timezone information.

); // Return Values
// Returns a new DateTimeImmutable instance.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating an immutable date time object
// [php]
// $date = new DateTime("2014-06-20 11:45 Europe/London");
// 
// $immutable = DateTimeImmutable::createFromInterface($date);
// 
// $date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
// $also_immutable = DateTimeImmutable::createFromInterface($date);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.createfrominterface.php
// ========== DATETIMEIMMUTABLE_CREATEFROMINTERFACE - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::createFromInterface(DateTimeInterface $object)

return $return_datetimeimmutable_createfrominterface; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMINTERFACE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMMUTABLE
// ============================== OFFLINE
// ============================== ABOUT
// Returns new DateTimeImmutable instance encapsulating the given DateTime object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::createFromMutable() - PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_createfrommutable($datetimeimmutable, $object)
{
$return_datetimeimmutable_createfrommutable = null;

// ========== DATETIMEIMMUTABLE_CREATEFROMMUTABLE - BEGIN
// ===== ABOUT
// Returns new DateTimeImmutable instance encapsulating the given DateTime object
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_0, PHP_7, PHP_8
// ===== SYNTAX
// public static DateTimeImmutable::createFromMutable(DateTime $object): static
// ===== CODE
$return_datetimeimmutable_createfrommutable = $datetimeimmutable->createFromMutable(

$object // DateTime object - The mutable DateTime object that you want to convert to an immutable version. This object is not modified, but instead a new DateTimeImmutable instance is created containing the same date time and timezone information.

); // Return Values
// Returns a new DateTimeImmutable instance.
// 
// Changelog
// Version - Description
// 8.0.0   - The method returns an instance of the currently invoked class now. Previously, it created a new instance of DateTimeImmutable.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating an immutable date time object
// [php]
// $date = new DateTime("2014-06-20 11:45 Europe/London");
// 
// $immutable = DateTimeImmutable::createFromMutable( $date );
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.createfrommutable.php
// ========== DATETIMEIMMUTABLE_CREATEFROMMUTABLE - END

// SYNTAX:
// static DateTimeImmutable::createFromMutable(DateTime $object)

return $return_datetimeimmutable_createfrommutable; // static
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_CREATEFROMMUTABLE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_GETLASTERRORS
// ============================== OFFLINE
// ============================== ABOUT
// Returns the warnings and errors.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::getLastErrors() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_getlasterrors($datetimeimmutable)
{
$return_datetimeimmutable_getlasterrors = false;

// ========== DATETIMEIMMUTABLE_GETLASTERRORS - BEGIN
// ===== ABOUT
// Returns the warnings and errors
// ===== DESCRIPTION
// Returns an array of warnings and errors found while parsing a date/time string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public static DateTimeImmutable::getLastErrors(): array|false
// ===== CODE
$return_datetimeimmutable_getlasterrors = $datetimeimmutable->getLastErrors(

// This function has no parameters.

); // Return Values
// Returns array containing info about warnings and errors, or false if there are neither warnings nor errors.
// 
// Changelog
// Version - Description
// 8.2.0   - Before PHP 8.2.0, this function did not return false when there were no warnings or errors. Instead, it would always return the documented array structure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::getLastErrors() example
// [php]
// try {
//     $date = new DateTimeImmutable('asdfasdf');
// } catch (Exception $e) {
//     // For demonstration purposes only...
//     print_r(DateTimeImmutable::getLastErrors());
// 
//     // The real object-oriented way to do this is
//     // echo $e->getMessage();
// }
// [/php]
// The above examples will output:
// [result]
// Array
// (
//    [warning_count] => 1
//    [warnings] => Array
//        (
//            [6] => Double timezone specification
//        )
// 
//    [error_count] => 1
//    [errors] => Array
//        (
//            [0] => The timezone could not be found in the database
//        )
// 
// )
// [/result]
// The indexes 6, and 0 in the example output refer to the character index in the string where the error occurred.
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.getlasterrors.php
// ========== DATETIMEIMMUTABLE_GETLASTERRORS - END

// SYNTAX:
// array|false DateTimeImmutable::getLastErrors()

return $return_datetimeimmutable_getlasterrors; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_GETLASTERRORS
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_MODIFY
// ============================== OFFLINE
// ============================== ABOUT
// Creates a new object with modified timestamp.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::modify() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_modify($datetimeimmutable, $modifier)
{
$return_datetimeimmutable_modify = false;

// ========== DATETIMEIMMUTABLE_MODIFY - BEGIN
// ===== ABOUT
// Creates a new object with modified timestamp
// ===== DESCRIPTION
// Creates a new DateTimeImmutable object with modified timestamp. The original object is not modified.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::modify(string $modifier): DateTimeImmutable|false
// ===== CODE
$return_datetimeimmutable_modify = $datetimeimmutable->modify(

$modifier // string modifier - A date/time string. Valid formats are explained in Date and Time Formats.

); // Return Values
// Returns a new modified DateTimeImmutable object or false on failure.
// 
// Errors/Exceptions
// If an invalid Date/Time string is passed, DateMalformedStringException is thrown. Previous to PHP 8.3, this was a warning.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws DateMalformedStringException if an invalid string is passed, instead of a warning.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::modify() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2006-12-12');
// $newDate = $date->modify('+1 day');
// echo $newDate->format('Y-m-d');
// [/php]
// The above examples will output:
// [result]
// 2006-12-13
// [/result]
// [/example]
// [example]
// Example #2 Beware when adding or subtracting months
// [php]
// $date = new DateTimeImmutable('2000-12-31');
// 
// $newDate1 = $date->modify('+1 month');
// echo $newDate1->format('Y-m-d') . "\n";
// 
// $newDate2 = $newDate1->modify('+1 month');
// echo $newDate2->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-01-31
// 2001-03-03
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.modify.php
// ========== DATETIMEIMMUTABLE_MODIFY - END

// SYNTAX:
// DateTimeImmutable|false DateTimeImmutable::modify(string $modifier)

return $return_datetimeimmutable_modify; // DateTimeImmutable|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_MODIFY
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SET_STATE
// ============================== OFFLINE
// ============================== ABOUT
// The __set_state handler.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::__set_state() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_set_state($datetimeimmutable, $array)
{
$return_datetimeimmutable_set_state = null;

// ========== DATETIMEIMMUTABLE_SET_STATE - BEGIN
// ===== ABOUT
// The __set_state handler
// ===== DESCRIPTION
// The __set_state() handler.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public static DateTimeImmutable::__set_state(array $array): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_set_state = $datetimeimmutable->__set_state(

$array // array $array - Initialization array.

); // Return Values
// Returns a new instance of a DateTimeImmutable object.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.set-state.php
// ========== DATETIMEIMMUTABLE_SET_STATE - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::__set_state(array $array)

return $return_datetimeimmutable_set_state; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SET_STATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETDATE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the date.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::setDate() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_setdate($datetimeimmutable, $year, $month, $day)
{
$return_datetimeimmutable_setdate = null;

// ========== DATETIMEIMMUTABLE_SETDATE - BEGIN
// ===== ABOUT
// Sets the date
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object with the current date of the DateTimeImmutable object set to the given date.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::setDate(int $year, int $month, int $day): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_setdate = $datetimeimmutable->setDate(

// object - Procedural style only: A DateTime object returned by date_create(). The function modifies this object.

$year, // year - Year of the date.

$month, // month - Month of the date.

$day // day - Day of the date.

); // Return Values
// Returns a new DateTimeImmutable object with the modified data.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::setDate() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// $newDate = $date->setDate(2001, 2, 3);
// echo $newDate->format('Y-m-d');
// [/php]
// The above examples will output:
// [result]
// 2001-02-03
// [/result]
// [/example]
// [example]
// Example #2 Values exceeding ranges are added to their parent values
// [php]
// $date = new DateTimeImmutable();
// 
// $newDate = $date->setDate(2001, 2, 28);
// echo $newDate->format('Y-m-d') . "\n";
// 
// $newDate = $date->setDate(2001, 2, 29);
// echo $newDate->format('Y-m-d') . "\n";
// 
// $newDate = $date->setDate(2001, 14, 3);
// echo $newDate->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-02-28
// 2001-03-01
// 2002-02-03
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.setdate.php
// ========== DATETIMEIMMUTABLE_SETDATE - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::setDate(int $year, int $month, int $day)

return $return_datetimeimmutable_setdate; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETDATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETISODATE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the ISO date.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::setISODate() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_setisodate($datetimeimmutable, $year, $week, $dayOfWeek = 1)
{
$return_datetimeimmutable_setisodate = null;

// ========== DATETIMEIMMUTABLE_SETISODATE - BEGIN
// ===== ABOUT
// Sets the ISO date
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object with the date set according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::setISODate(int $year, int $week, int $dayOfWeek = 1): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_setisodate = $datetimeimmutable->setISODate(

$year, // int year - Year of the date.

$week, // int week - Week of the date.

$dayOfWeek // int dayOfWeek - Offset from the first day of the week.

); // Return Values
// Returns a new DateTimeImmutable object with the modified data.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::setISODate() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// 
// $date->setISODate(2008, 2);
// echo $date->format('Y-m-d') . "\n";
// 
// $date->setISODate(2008, 2, 7);
// echo $date->format('Y-m-d') . "\n";
// [/php]
// Procedural style
// [php]
// $date = date_create();
// 
// date_isodate_set($date, 2008, 2);
// echo date_format($date, 'Y-m-d') . "\n";
// 
// date_isodate_set($date, 2008, 2, 7);
// echo date_format($date, 'Y-m-d') . "\n";
// [/php]
// The above examples will output:
// [result]
// 2008-01-07
// 2008-01-13
// [/result]
// [/example]
// [example]
// Example #2 Values exceeding ranges are added to their parent values
// [php]
// $date = new DateTimeImmutable();
// 
// $newDate = $date->setISODate(2008, 2, 7);
// echo $newDate->format('Y-m-d') . "\n";
// 
// $newDate = $date->setISODate(2008, 2, 8);
// echo $newDate->format('Y-m-d') . "\n";
// 
// $newDate = $date->setISODate(2008, 53, 7);
// echo $newDate->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2008-01-13
// 2008-01-14
// 2009-01-04
// [/result]
// [/example]
// [example]
// Example #3 Finding the month a week is in
// [php]
// $date = new DateTimeImmutable();
// $newDate = $date->setISODate(2008, 14);
// echo $newDate->format('n');
// [/php]
// The above examples will output:
// [result]
// 3
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.setisodate.php
// ========== DATETIMEIMMUTABLE_SETISODATE - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::setISODate(int $year, int $week, int $dayOfWeek = 1)

return $return_datetimeimmutable_setisodate; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETISODATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIME
// ============================== OFFLINE
// ============================== ABOUT
// Sets the time.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::setTime() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_settime($datetimeimmutable, $hour, $minute, $second = 0, $microsecond = 0)
{
$return_datetimeimmutable_settime = null;

// ========== DATETIMEIMMUTABLE_SETTIME - BEGIN
// ===== ABOUT
// Sets the time
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object with the time set to the given time.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::setTime(
//    int $hour,
//    int $minute,
//    int $second = 0,
//    int $microsecond = 0
// ): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_settime = $datetimeimmutable->setTime(

$hour, // int hour - Hour of the time.

$minute, // int minute - Minute of the time.

$second, // int second - Second of the time.

$microsecond // int microsecond - Microsecond of the time.

); // Return Values
// Returns a new DateTimeImmutable object with the modified data.
// 
// Changelog
// Version - Description
// 8.1.0   - The behaviour with double existing hours (during the fall-back DST transition) changed. Previously PHP would pick the second occurrence (after the DST transition), instead of the first occurrence (before DST transition).
// 7.1.0   - The microsecond parameter was added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::setTime() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2001-01-01');
// 
// $newDate = $date->setTime(14, 55);
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// 
// $newDate = $date->setTime(14, 55, 24);
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// [/php]
// The above examples will output something similar to:
// [result]
// 2001-01-01 14:55:00
// 2001-01-01 14:55:24
// [/result]
// [/example]
// [example]
// Example #2 Values exceeding ranges are added to their parent values
// [php]
// $date = new DateTimeImmutable('2001-01-01');
// 
// $newDate = $date->setTime(14, 55, 24);
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// 
// $newDate = $date->setTime(14, 55, 65);
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// 
// $newDate = $date->setTime(14, 65, 24);
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// 
// $newDate = $date->setTime(25, 55, 24);
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-01-01 14:55:24
// 2001-01-01 14:56:05
// 2001-01-01 15:05:24
// 2001-01-02 01:55:24
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.settime.php
// ========== DATETIMEIMMUTABLE_SETTIME - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)

return $return_datetimeimmutable_settime; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIME
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIMESTAMP
// ============================== OFFLINE
// ============================== ABOUT
// Sets the date and time based on a Unix timestamp.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::setTimestamp() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_settimestamp($datetimeimmutable, $timestamp)
{
$return_datetimeimmutable_settimestamp = null;

// ========== DATETIMEIMMUTABLE_SETTIMESTAMP - BEGIN
// ===== ABOUT
// Sets the date and time based on a Unix timestamp
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object constructed from the old one, with the date and time set based on an Unix timestamp.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::setTimestamp(int $timestamp): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_settimestamp = $datetimeimmutable->setTimestamp(

$timestamp // int timestamp - Unix timestamp representing the date. Setting timestamps outside the range of int is possible by using DateTimeImmutable::modify() with the @ format.

); // Return Values
// Returns a new DateTimeImmutable object with the modified data.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::setTimestamp() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable();
// echo $date->format('U = Y-m-d H:i:s') . "\n";
// 
// $newDate = $date->setTimestamp(1171502725);
// echo $newDate->format('U = Y-m-d H:i:s') . "\n";
// [/php]
// The above examples will output something similar to:
// [result]
// 1272508903 = 2010-04-28 22:41:43
// 1171502725 = 2007-02-14 20:25:25
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.settimestamp.php
// ========== DATETIMEIMMUTABLE_SETTIMESTAMP - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::setTimestamp(int $timestamp)

return $return_datetimeimmutable_settimestamp; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIMESTAMP
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIMEZONE
// ============================== OFFLINE
// ============================== ABOUT
// Sets the time zone.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::setTimezone() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_settimezone($datetimeimmutable, $timezone)
{
$return_datetimeimmutable_settimezone = null;

// ========== DATETIMEIMMUTABLE_SETTIMEZONE - BEGIN
// ===== ABOUT
// Sets the time zone
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object with a new timezone set.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::setTimezone(DateTimeZone $timezone): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_settimezone = $datetimeimmutable->setTimezone(

$timezone // DateTimeZone timezone - A DateTimeZone object representing the desired time zone.

); // Return Values
// Returns a new modified DateTimeImmutable object for method chaining. The underlaying point-in-time is not changed when calling this method.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::setTimeZone() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2000-01-01', new DateTimeZone('Pacific/Nauru'));
// echo $date->format('Y-m-d H:i:sP') . "\n";
// 
// $newDate = $date->setTimezone(new DateTimeZone('Pacific/Chatham'));
// echo $newDate->format('Y-m-d H:i:sP') . "\n";
// [/php]
// The above examples will output:
// [result]
// 2000-01-01 00:00:00+12:00
// 2000-01-01 01:45:00+13:45
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.settimezone.php
// ========== DATETIMEIMMUTABLE_SETTIMEZONE - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::setTimezone(DateTimeZone $timezone)

return $return_datetimeimmutable_settimezone; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SETTIMEZONE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SUB
// ============================== OFFLINE
// ============================== ABOUT
// Subtracts an amount of days, months, years, hours, minutes and seconds.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeImmutable::sub() - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimeimmutable_sub($datetimeimmutable, $interval)
{
$return_datetimeimmutable_sub = null;

// ========== DATETIMEIMMUTABLE_SUB - BEGIN
// ===== ABOUT
// Subtracts an amount of days, months, years, hours, minutes and seconds
// ===== DESCRIPTION
// Returns a new DateTimeImmutable object, with the specified DateInterval object subtracted from the specified DateTimeImmutable object.
// ===== SUPPORTED
// PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateTimeImmutable::sub(DateInterval $interval): DateTimeImmutable
// ===== CODE
$return_datetimeimmutable_sub = $datetimeimmutable->sub(

$interval // DateInterval interval - A DateInterval object

); // Return Values
// Returns a new DateTimeImmutable object with the modified data.
// 
// Errors/Exceptions
// If an unsupported operation is attempted, such as using a DateInterval object representing relative time specifications such as next weekday, a DateInvalidOperationException is thrown.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws a DateInvalidOperationException instead of a warning when an unsupported operation is attempted.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeImmutable::sub() example
// Object-oriented style
// [php]
// $date = new DateTimeImmutable('2000-01-20');
// $newDate = $date->sub(new DateInterval('P10D'));
// echo $newDate->format('Y-m-d') . "\n";
// [/php]
// The above examples will output:
// [result]
// 2000-01-10
// [/result]
// [/example]
// [example]
// Example #2 Further DateTimeImmutable::sub() examples
// [php]
// $date = new DateTimeImmutable('2000-01-20');
// $newDate = $date->sub(new DateInterval('PT10H30S'));
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// 
// $date = new DateTimeImmutable('2000-01-20');
// $newDate = $date->sub(new DateInterval('P7Y5M4DT4H3M2S'));
// echo $newDate->format('Y-m-d H:i:s') . "\n";
// [/php]
// The above example will output:
// [result]
// 2000-01-19 13:59:30
// 1992-08-15 19:56:58
// [/result]
// [/example]
// [example]
// Example #3 Beware when subtracting months
// [php]
// $date = new DateTimeImmutable('2001-04-30');
// $interval = new DateInterval('P1M');
// 
// $newDate1 = $date->sub($interval);
// echo $newDate1->format('Y-m-d') . "\n";
// 
// $newDate2 = $newDate1->sub($interval);
// echo $newDate2->format('Y-m-d') . "\n";
// [/php]
// The above example will output:
// [result]
// 2001-03-30
// 2001-03-02
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimeimmutable.sub.php
// ========== DATETIMEIMMUTABLE_SUB - END

// SYNTAX:
// DateTimeImmutable DateTimeImmutable::sub(DateInterval $interval)

return $return_datetimeimmutable_sub; // DateTimeImmutable
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE_SUB
// ==============================


// ============================== END
// PHP_DATE_DATETIME_DATETIMEIMMUTABLE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE
// ============================== OFFLINE
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_CONSTRUCT - DateTimeZone php_date_datetime_datetimezone_construct(string $timezone)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_GETLOCATION - array|false php_date_datetime_datetimezone_getlocation(DateTimeZone $datetimezone)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_GETNAME - string php_date_datetime_datetimezone_getname(DateTimeZone $datetimezone)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_GETOFFSET - int php_date_datetime_datetimezone_getoffset(DateTimeZone $datetimezone, DateTimeInterface $datetime)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_GETTRANSITIONS - array|false php_date_datetime_datetimezone_gettransitions(DateTimeZone $datetimezone, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_LISTABBREVIATIONS - array php_date_datetime_datetimezone_listabbreviations(DateTimeZone $datetimezone)
// OFFLINE | PHP_DATE_DATETIME_DATETIMEZONE_LISTIDENTIFIERS - array php_date_datetime_datetimezone_listidentifiers(DateTimeZone $datetimezone, int $timezoneGroup = DateTimeZone::ALL, string $countryCode = null)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (7)
// OFFLINE | DateTimeZone::__construct() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTimeZone::getLocation() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTimeZone::getName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTimeZone::getOffset() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTimeZone::getTransitions() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTimeZone::listAbbreviations() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// OFFLINE | DateTimeZone::listIdentifiers() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== USING DATA_TYPES (6)
// OFFLINE | DateTimeZone - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// string
// array
// false
// int
// OFFLINE | DateTimeInterface - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Creates new DateTimeZone object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::__construct() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimezone_construct($timezone)
{
$return_datetimezone_construct = null;

// ========== DATETIMEZONE_CONSTRUCT - BEGIN
// ===== ABOUT
// Creates new DateTimeZone object
// ===== DESCRIPTION
// Creates a new DateTimeZone object.
// A DateTimeZone object provides access to three different types of timezone rules: UTC offset (type 1), timezone abbreviation (type 2), and timezone identifiers as published in the IANA timezone database (type 3).
// The DateTimeZone object can be attached to DateTime and DateTimeImmutable objects to be able to render the timezone encapsulated by these objects in a local timezone.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::__construct(string $timezone)
// 
// Procedural style
// timezone_open(string $timezone): DateTimeZone|false
// ===== CODE
$return_datetimezone_construct = new DateTimeZone(

$timezone // string timezone - One of the supported timezone names, an offset value (+0200), or a timezone abbreviation (BST).

); // Return Values
// Returns DateTimeZone on success. Procedural style returns false on failure.
// 
// Errors/Exceptions
// This method throws DateInvalidTimeZoneException if the timezone supplied is not recognised as a valid timezone. Prior to PHP 8.3, this was an Exception instead.
// 
// Changelog
// Version - Description
// 8.3.0   - Invalid values now return a DateInvalidTimeZoneException instead of a generic Exception.
// 
// [examples]
// Examples
// [example]
// Example #1 Creating and attaching DateTimeZone to a DateTimeImmutable
// [php]
// $d = new DateTimeImmutable("2022-06-02 15:44:48 UTC");
// 
// $timezones = [ 'Europe/London', 'GMT+04:45', '-06:00', 'CEST' ];
// 
// foreach ($timezones as $tz) {
//     $tzo = new DateTimeZone($tz);
// 
//     $local = $d->setTimezone($tzo);
//     echo $local->format(DateTimeInterface::RFC2822 . ' - e'), "\n";
// }
// [/php]
// The above example will output:
// [result]
// Thu, 02 Jun 2022 16:44:48 +0100 - Europe/London
// Thu, 02 Jun 2022 20:29:48 +0445 - +04:45
// Thu, 02 Jun 2022 09:44:48 -0600 - -06:00
// Thu, 02 Jun 2022 17:44:48 +0200 - CEST
// [/result]
// [/example]
// [example]
// Example #2 Catching errors when instantiating DateTimeZone
// [php]
// // Error handling by catching exceptions
// $timezones = array('Europe/London', 'Mars/Phobos', 'Jupiter/Europa');
// 
// foreach ($timezones as $tz) {
//     try {
//         $mars = new DateTimeZone($tz);
//     } catch(Exception $e) {
//         echo $e->getMessage() . '<br />';
//     }
// }
// [/php]
// The above example will output:
// [result]
// DateTimeZone::__construct() [datetimezone.--construct]: Unknown or bad timezone (Mars/Phobos)
// DateTimeZone::__construct() [datetimezone.--construct]: Unknown or bad timezone (Jupiter/Europa)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.construct.php
// ========== DATETIMEZONE_CONSTRUCT - END

// SYNTAX:
// DateTimeZone DateTimeZone::__construct(string $timezone)

return $return_datetimezone_construct; // DateTimeZone
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_GETLOCATION
// ============================== OFFLINE
// ============================== ABOUT
// Returns location information for a timezone.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::getLocation() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimezone_getlocation($datetimezone)
{
$return_datetimezone_getlocation = false;

// ========== DATETIMEZONE_GETLOCATION - BEGIN
// ===== ABOUT
// Returns location information for a timezone
// ===== DESCRIPTION
// Returns location information for a timezone, including country code, latitude/longitude and comments.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getLocation(): array|false
// 
// Procedural style
// timezone_location_get(DateTimeZone $object): array|false
// ===== CODE
$return_datetimezone_getlocation = $datetimezone->getLocation(

// DateTimeZone object - Procedural style only: A DateTimeZone object returned by timezone_open()

); // Return Values
// Array containing location information about timezone or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeZone::getLocation() example
// [php]
// $tz = new DateTimeZone("Europe/Prague");
// print_r($tz->getLocation());
// print_r(timezone_location_get($tz));
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [country_code] => CZ
//     [latitude] => 50.08333
//     [longitude] => 14.43333
//     [comments] => 
// )
// Array
// (
//     [country_code] => CZ
//     [latitude] => 50.08333
//     [longitude] => 14.43333
//     [comments] => 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.getlocation.php
// ========== DATETIMEZONE_GETLOCATION - END

// SYNTAX:
// array|false DateTimeZone::getLocation()

return $return_datetimezone_getlocation; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_GETLOCATION
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_GETNAME
// ============================== OFFLINE
// ============================== ABOUT
// Returns the name of the timezone.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::getName() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimezone_getname($datetimezone)
{
$return_datetimezone_getname = null;

// ========== DATETIMEZONE_GETNAME - BEGIN
// ===== ABOUT
// Returns the name of the timezone
// ===== DESCRIPTION
// Returns the name of the timezone.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getName(): string
// 
// Procedural style
// timezone_name_get(DateTimeZone $object): string
// ===== CODE
$return_datetimezone_getname = $datetimezone->getName(

// string object - The DateTimeZone for which to get a name.

); // Return Values
// Depending on zone type, UTC offset (type 1), timezone abbreviation (type 2), and timezone identifiers as published in the IANA timezone database (type 3), the descriptor string to create a new DateTimeZone object with the same offset and/or rules. For example 02:00, CEST, or one of the timezone names in the list of timezones.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.getname.php
// ========== DATETIMEZONE_GETNAME - END

// SYNTAX:
// string DateTimeZone::getName()

return $return_datetimezone_getname; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_GETNAME
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_GETOFFSET
// ============================== OFFLINE
// ============================== ABOUT
// Returns the timezone offset from GMT.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::getOffset() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimezone_getoffset($datetimezone, $datetime)
{
$return_datetimezone_getoffset = 0;

// ========== DATETIMEZONE_GETOFFSET - BEGIN
// ===== ABOUT
// Returns the timezone offset from GMT
// ===== DESCRIPTION
// This function returns the offset to GMT for the date/time specified in the datetime parameter. The GMT offset is calculated with the timezone information contained in the DateTimeZone object being used.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getOffset(DateTimeInterface $datetime): int
// 
// Procedural style
// timezone_offset_get(DateTimeZone $object, DateTimeInterface $datetime): int
// ===== CODE
$return_datetimezone_getoffset = $datetimezone->getOffset(

// DateTimeZone object - Procedural style only: A DateTimeZone object returned by timezone_open()

$datetime // DateTimeInterface datetime - DateTime that contains the date/time to compute the offset from.

); // Return Values
// Returns time zone offset in seconds.
// 
// [examples]
// Examples
// [example]
// Example #1 DateTimeZone::getOffset() examples
// [php]
// // Create two timezone objects, one for Taipei (Taiwan) and one for
// // Tokyo (Japan)
// $dateTimeZoneTaipei = new DateTimeZone("Asia/Taipei");
// $dateTimeZoneJapan = new DateTimeZone("Asia/Tokyo");
// 
// // Create two DateTime objects that will contain the same Unix timestamp, but
// // have different timezones attached to them.
// $dateTimeTaipei = new DateTime("now", $dateTimeZoneTaipei);
// $dateTimeJapan = new DateTime("now", $dateTimeZoneJapan);
// 
// // Calculate the GMT offset for the date/time contained in the $dateTimeTaipei
// // object, but using the timezone rules as defined for Tokyo
// // ($dateTimeZoneJapan).
// $timeOffset = $dateTimeZoneJapan->getOffset($dateTimeTaipei);
// 
// // Should show int(32400) (for dates after Sat Sep 8 01:00:00 1951 JST).
// var_dump($timeOffset);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.getoffset.php
// ========== DATETIMEZONE_GETOFFSET - END

// SYNTAX:
// int DateTimeZone::getOffset(DateTimeInterface $datetime)

return $return_datetimezone_getoffset; // int
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_GETOFFSET
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_GETTRANSITIONS
// ============================== OFFLINE
// ============================== ABOUT
// Returns all transitions for the timezone.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::getTransitions() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (2)
// PHP_INT_MIN - DateTimeZone::getTransitions()
// PHP_INT_MAX - DateTimeZone::getTransitions()
// ============================== CODE
/*
function php_date_datetime_datetimezone_gettransitions($datetimezone, $timestampBegin = PHP_INT_MIN, $timestampEnd = PHP_INT_MAX)
{
$return_datetimezone_gettransitions = false;

// ========== DATETIMEZONE_GETTRANSITIONS - BEGIN
// ===== ABOUT
// Returns all transitions for the timezone
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DateTimeZone::getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false
// 
// Procedural style
// timezone_transitions_get(DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false
// ===== CODE
$return_datetimezone_gettransitions = $datetimezone->getTransitions(

// DateTimeZone object - Procedural style only: A DateTimeZone object returned by timezone_open()

$timestampBegin, // int timestampBegin - Begin timestamp.

$timestampEnd // int timestampEnd - End timestamp.

); // Return Values
// Returns a numerically indexed array of transition arrays on success, or false on failure. DateTimeZone objects wrapping type 1 (UTC offsets) and type 2 (abbreviations) do not contain any transitions, and calling this method on them will return false.
// If timestampBegin is given, the first entry in the returned array will contain a transition element at the time of timestampBegin.
// Transition Array Structure
// Key    | Type   | Description
// ts     | int    | Unix timestamp
// time   | string | DateTimeInterface::ISO8601_EXPANDED (PHP 8.2 and later), or DateTimeInterface::ISO8601 (PHP 8.1 and lower) time string
// offset | int    | Offset to UTC in seconds
// isdst  | bool   | Whether daylight saving time is active
// abbr   | string | Timezone abbreviation
// 
// [examples]
// Examples
// [example]
// Example #1 A timezone_transitions_get() example
// [php]
// $timezone = new DateTimeZone("Europe/London");
// $transitions = $timezone->getTransitions();
// print_r(array_slice($transitions, 0, 3));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [ts] => -9223372036854775808
//             [time] => -292277022657-01-27T08:29:52+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
//     [1] => Array
//         (
//             [ts] => -1691964000
//             [time] => 1916-05-21T02:00:00+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
//     [2] => Array
//         (
//             [ts] => -1680472800
//             [time] => 1916-10-01T02:00:00+0000
//             [offset] => 0
//             [isdst] => 
//             [abbr] => GMT
//         )
// 
// )
// [/result]
// [/example]
// [example]
// Example #2 A timezone_transitions_get() example with timestampBegin set
// [php]
// $timezone = new DateTimeZone("Europe/London");
// $transitions = $timezone->getTransitions(time());
// print_r(array_slice($transitions, 0, 3));
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [ts] => 1654184161
//             [time] => 2022-06-02T15:36:01+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
//     [1] => Array
//         (
//             [ts] => 1667091600
//             [time] => 2022-10-30T01:00:00+0000
//             [offset] => 0
//             [isdst] => 
//             [abbr] => GMT
//         )
// 
//     [2] => Array
//         (
//             [ts] => 1679792400
//             [time] => 2023-03-26T01:00:00+0000
//             [offset] => 3600
//             [isdst] => 1
//             [abbr] => BST
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.gettransitions.php
// ========== DATETIMEZONE_GETTRANSITIONS - END

// SYNTAX:
// array|false DateTimeZone::getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX)

return $return_datetimezone_gettransitions; // array|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_GETTRANSITIONS
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_LISTABBREVIATIONS
// ============================== OFFLINE
// ============================== ABOUT
// Returns associative array containing dst, offset and the timezone name.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::listAbbreviations() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_datetimezone_listabbreviations($datetimezone)
{
$return_datetimezone_listabbreviations = null;

// ========== DATETIMEZONE_LISTABBREVIATIONS - BEGIN
// ===== ABOUT
// Returns associative array containing dst, offset and the timezone name
// ===== DESCRIPTION
// The returned list of abbreviations includes all historical use of abbreviations, which can lead to correct, but confusing entries. There are also conflicts, as PST is used both in the US and in the Philippines.
// The list that this function returns is therefore not suitable for building an array with options to present a choice of timezone to users.
// Note: The data for this function are precompiled for performance reasons, and are not updated when using a newer > timezonedb.
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTimeZone::listAbbreviations(): array
// 
// Procedural style
// timezone_abbreviations_list(): array
// ===== CODE
$return_datetimezone_listabbreviations = $datetimezone->listAbbreviations(

// This function has no parameters.

); // Return Values
// Returns the array of timezone abbreviations.
// 
// [examples]
// Examples
// [example]
// Example #1 A timezone_abbreviations_list() example
// [php]
// $timezone_abbreviations = DateTimeZone::listAbbreviations();
// print_r($timezone_abbreviations["acst"]);
// [/php]
// The above example will output something similar to:
// [result]
// Array
// (
//     [0] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => America/Porto_Acre
//         )
// 
//     [1] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => America/Eirunepe
//         )
// 
//     [2] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => America/Rio_Branco
//         )
// 
//     [3] => Array
//         (
//             [dst] => 1
//             [offset] => -14400
//             [timezone_id] => Brazil/Acre
//         )
// 
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.listabbreviations.php
// ========== DATETIMEZONE_LISTABBREVIATIONS - END

// SYNTAX:
// array DateTimeZone::listAbbreviations()

return $return_datetimezone_listabbreviations; // array
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_LISTABBREVIATIONS
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATETIMEZONE_LISTIDENTIFIERS
// ============================== OFFLINE
// ============================== ABOUT
// Returns a numerically indexed array containing all defined timezone identifiers.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateTimeZone::listIdentifiers() - PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// DateTimeZone::ALL - DateTimeZone::listIdentifiers()
// ============================== CODE
/*
function php_date_datetime_datetimezone_listidentifiers($datetimezone, $timezoneGroup = DateTimeZone::ALL, $countryCode = null)
{
$return_datetimezone_listidentifiers = null;

// ========== DATETIMEZONE_LISTIDENTIFIERS - BEGIN
// ===== ABOUT
// Returns a numerically indexed array containing all defined timezone identifiers
// ===== DESCRIPTION
// ===== SUPPORTED
// PHP_5 >= PHP_5_2_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateTimeZone::listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array
// 
// Procedural style
// timezone_identifiers_list(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array
// ===== CODE
$return_datetimezone_listidentifiers = $datetimezone->listIdentifiers(

$timezoneGroup, // int timezoneGroup - One of the DateTimeZone class constants (or a combination).

$countryCode // string countryCode - A two-letter (uppercase) ISO 3166-1 compatible country code.
// Note: This option is only used when timezoneGroup is set to DateTimeZone::PER_COUNTRY.

); // Return Values
// Returns the array of timezone identifiers. Only non-outdated items are returned. To get all, including outdated timezone identifiers, use the DateTimeZone::ALL_WITH_BC as value for timezoneGroup.
// 
// Changelog
// Version - Description
// 8.0.0   - Prior to this version, false was returned on failure.
// 7.1.0   - countryCode is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 A DateTimeZone::listIdentifiers() example
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers();
// for ($i=0; $i < 5; $i++) {
//     echo "$timezone_identifiers[$i]\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Africa/Abidjan
// Africa/Accra
// Africa/Addis_Ababa
// Africa/Algiers
// Africa/Asmara
// [/result]
// [/example]
// [example]
// Example #2 Listing identifiers for a specific region
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::ASIA );
// for ($i=0; $i < 5; $i++) {
//     echo "$timezone_identifiers[$i]\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Asia/Aden
// Asia/Almaty
// Asia/Amman
// Asia/Anadyr
// Asia/Aqtau
// [/result]
// [/example]
// [example]
// Example #3 Listing identifiers for multiple regions
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::ASIA | DateTimeZone::PACIFIC );
// echo join( ', ', $timezone_identifiers );
// [/php]
// The above example will output something similar to:
// [result]
// Asia/Aden, Asia/Almaty, Asia/Amman, Asia/Anadyr, Asia/Aqtau, Asia/Aqtobe,
// Asia/Ashgabat, Asia/Atyrau, Asia/Baghdad, Asia/Bahrain, Asia/Baku,
// Asia/Bangkok, Asia/Barnaul, Asia/Beirut, Asia/Bishkek, Asia/Brunei,
// Asia/Chita, Asia/Choibalsan, Asia/Colombo, Asia/Damascus, Asia/Dhaka,
// Asia/Dili, Asia/Dubai, Asia/Dushanbe, Asia/Famagusta, Asia/Gaza, Asia/Hebron,
// Asia/Ho_Chi_Minh, Asia/Hong_Kong, Asia/Hovd, Asia/Irkutsk, Asia/Jakarta,
// Asia/Jayapura, Asia/Jerusalem, Asia/Kabul, Asia/Kamchatka, Asia/Karachi,
// Asia/Kathmandu, Asia/Khandyga, Asia/Kolkata, Asia/Krasnoyarsk,
// Asia/Kuala_Lumpur, Asia/Kuching, Asia/Kuwait, Asia/Macau, Asia/Magadan,
// Asia/Makassar, Asia/Manila, Asia/Muscat, Asia/Nicosia, Asia/Novokuznetsk,
// Asia/Novosibirsk, Asia/Omsk, Asia/Oral, Asia/Phnom_Penh, Asia/Pontianak,
// Asia/Pyongyang, Asia/Qatar, Asia/Qostanay, Asia/Qyzylorda, Asia/Riyadh,
// Asia/Sakhalin, Asia/Samarkand, Asia/Seoul, Asia/Shanghai, Asia/Singapore,
// Asia/Srednekolymsk, Asia/Taipei, Asia/Tashkent, Asia/Tbilisi, Asia/Tehran,
// Asia/Thimphu, Asia/Tokyo, Asia/Tomsk, Asia/Ulaanbaatar, Asia/Urumqi,
// Asia/Ust-Nera, Asia/Vientiane, Asia/Vladivostok, Asia/Yakutsk, Asia/Yangon,
// Asia/Yekaterinburg, Asia/Yerevan, Pacific/Apia, Pacific/Auckland,
// Pacific/Bougainville, Pacific/Chatham, Pacific/Chuuk, Pacific/Easter,
// Pacific/Efate, Pacific/Fakaofo, Pacific/Fiji, Pacific/Funafuti,
// Pacific/Galapagos, Pacific/Gambier, Pacific/Guadalcanal, Pacific/Guam,
// Pacific/Honolulu, Pacific/Kanton, Pacific/Kiritimati, Pacific/Kosrae,
// Pacific/Kwajalein, Pacific/Majuro, Pacific/Marquesas, Pacific/Midway,
// Pacific/Nauru, Pacific/Niue, Pacific/Norfolk, Pacific/Noumea,
// Pacific/Pago_Pago, Pacific/Palau, Pacific/Pitcairn, Pacific/Pohnpei,
// Pacific/Port_Moresby, Pacific/Rarotonga, Pacific/Saipan, Pacific/Tahiti,
// Pacific/Tarawa, Pacific/Tongatapu, Pacific/Wake, Pacific/Wallis
// [/result]
// [/example]
// [example]
// Example #4 Listing identifiers for a single country
// [php]
// $timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::PER_COUNTRY, "UA" );
// foreach( $timezone_identifiers as $identifier ) {
//     echo "$identifier\n";
// }
// [/php]
// The above example will output something similar to:
// [result]
// Europe/Kyiv
// Europe/Simferopol
// Europe/Uzhgorod
// Europe/Zaporozhye
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/datetimezone.listidentifiers.php
// ========== DATETIMEZONE_LISTIDENTIFIERS - END

// SYNTAX:
// array DateTimeZone::listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, string $countryCode = null)

return $return_datetimezone_listidentifiers; // array
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE_LISTIDENTIFIERS
// ==============================


// ============================== END
// PHP_DATE_DATETIME_DATETIMEZONE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEINTERVAL
// ============================== OFFLINE
// OFFLINE | PHP_DATE_DATETIME_DATEINTERVAL_CONSTRUCT - DateInterval php_date_datetime_dateinterval_construct(string $duration)
// OFFLINE | PHP_DATE_DATETIME_DATEINTERVAL_CREATEFROMDATESTRING - DateInterval|false php_date_datetime_dateinterval_createfromdatestring(DateInterval $dateinterval, string $datetime)
// OFFLINE | PHP_DATE_DATETIME_DATEINTERVAL_FORMAT - string php_date_datetime_dateinterval_format(DateInterval $dateinterval, string $format)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (3)
// OFFLINE | DateInterval::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateInterval::createFromDateString() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateInterval::format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== USING DATA_TYPES (3)
// OFFLINE | DateInterval - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// string
// false
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEINTERVAL_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Creates a new DateInterval object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateInterval::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateinterval_construct($duration)
{
$return_dateinterval_construct = null;

// ========== DATEINTERVAL_CONSTRUCT - BEGIN
// ===== ABOUT
// Creates a new DateInterval object
// ===== DESCRIPTION
// Creates a new DateInterval object.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateInterval::__construct(string $duration)
// ===== CODE
$return_dateinterval_construct = new DateInterval(

$duration // string duration - An interval specification.
// The format starts with the letter P, for period. Each duration period is represented by an integer value followed by a period designator. If the duration contains time elements, that portion of the specification is preceded by the letter T.
// 
// duration Period Designators
// Period Designator - Description
// Y                 - years
// M                 - months
// D                 - days
// W                 - weeks. Converted into days. Prior to PHP 8.0.0, can not be combined with D.
// H                 - hours
// M                 - minutes
// S                 - seconds
// 
// Here are some simple examples. Two days is P2D. Two seconds is PT2S. Six years and five minutes is P6YT5M.
// Note: The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the right. So years before months, months before days, days before minutes, etc. Thus one year and four days must be represented as P1Y4D, not P4D1Y.
// The specification can also be represented as a date time. A sample of one year and four days would be P0001-00-04T00:00:00. But the values in this format can not exceed a given period's roll-over-point (e.g. 25 hours is invalid).
// These formats are based on the > ISO 8601 duration specification.

); // Return
// DateInterval
// 
// Errors/Exceptions
// Throws an DateMalformedIntervalStringException when the duration cannot be parsed as an interval. Prior to PHP 8.3, this was Exception.
// 
// Changelog
// Version - Description
// 8.3.0   - Now throws DateMalformedIntervalStringException instead of Exception.
// 8.2.0   - Only the y to f, invert, and days will be visible, including a new from_string boolean property.
// 8.0.0   - W can be combined with D.
// 
// [examples]
// Examples
// [example]
// Example #1 Constructing and using DateInterval objects
// [php]
// // Create a specific date
// $someDate = \DateTime::createFromFormat("Y-m-d H:i", "2022-08-25 14:18");
// 
// // Create interval
// // $interval = new \DateInterval("P7D");
// 
// // Add interval
// $someDate->add($interval);
// 
// // Convert interval to string
// echo $interval->format("%d");
// [/php]
// The above example will output:
// [result]
// 
// 7
// [/result]
// [/example]
// [example]
// Example #2 DateInterval example
// [php]
// 
// $interval = new DateInterval('P1W2D');
// var_dump($interval);
// 
// [/php]
// Output of the above example in PHP 8.2:
// [result]
// object(DateInterval)#1 (10) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(0)
//   ["d"]=>
//   int(9)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["from_string"]=>
//   bool(false)
// }
// [/result]
// Output of the above example in PHP 8:
// [result]
// object(DateInterval)#1 (16) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(0)
//   ["d"]=>
//   int(9)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["weekday"]=>
//   int(0)
//   ["weekday_behavior"]=>
//   int(0)
//   ["first_last_day_of"]=>
//   int(0)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["special_type"]=>
//   int(0)
//   ["special_amount"]=>
//   int(0)
//   ["have_weekday_relative"]=>
//   int(0)
//   ["have_special_relative"]=>
//   int(0)
// }
// [/result]
// Output of the above example in PHP 7:
// [result]
// object(DateInterval)#1 (16) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(0)
//   ["d"]=>
//   int(2)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["weekday"]=>
//   int(0)
//   ["weekday_behavior"]=>
//   int(0)
//   ["first_last_day_of"]=>
//   int(0)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["special_type"]=>
//   int(0)
//   ["special_amount"]=>
//   int(0)
//   ["have_weekday_relative"]=>
//   int(0)
//   ["have_special_relative"]=>
//   int(0)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateinterval.construct.php
// ========== DATEINTERVAL_CONSTRUCT - END

// SYNTAX:
// DateInterval DateInterval::__construct(string $duration)

return $return_dateinterval_construct; // DateInterval
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEINTERVAL_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEINTERVAL_CREATEFROMDATESTRING
// ============================== OFFLINE
// ============================== ABOUT
// Sets up a DateInterval from the relative parts of the string.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateInterval::createFromDateString() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateinterval_createfromdatestring($dateinterval, $datetime)
{
$return_dateinterval_createfromdatestring = false;

// ========== DATEINTERVAL_CREATEFROMDATESTRING - BEGIN
// ===== ABOUT
// Sets up a DateInterval from the relative parts of the string
// ===== DESCRIPTION
// Uses the date/time parsers as used in the DateTimeImmutable constructor to create a DateInterval from the relative parts of the parsed string.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public static DateInterval::createFromDateString(string $datetime): DateInterval|false
// 
// Procedural style
// date_interval_create_from_date_string(string $datetime): DateInterval|false
// ===== CODE
$return_dateinterval_createfromdatestring = $dateinterval->createFromDateString(

$datetime // string datetime - A date with relative parts. Specifically, the relative formats supported by the parser used for DateTimeImmutable, DateTime, and strtotime() will be used to construct the DateInterval.
// To use an ISO-8601 format string like P7D, you must use the constructor.

); // Return Values
// Returns a new DateInterval instance on success, or false on failure.
// 
// Changelog
// Version - Description
// 8.2.0   - Only the from_string and date_string properties will be visible when a DateInterval is created with this method.
// 
// [examples]
// Examples
// [example]
// Example #1 Parsing valid date intervals
// [php]
// // Each set of intervals is equal.
// $i = new DateInterval('P1D');
// $i = DateInterval::createFromDateString('1 day');
// 
// $i = new DateInterval('P2W');
// $i = DateInterval::createFromDateString('2 weeks');
// 
// $i = new DateInterval('P3M');
// $i = DateInterval::createFromDateString('3 months');
// 
// $i = new DateInterval('P4Y');
// $i = DateInterval::createFromDateString('4 years');
// 
// $i = new DateInterval('P1Y1D');
// $i = DateInterval::createFromDateString('1 year + 1 day');
// 
// $i = new DateInterval('P1DT12H');
// $i = DateInterval::createFromDateString('1 day + 12 hours');
// 
// $i = new DateInterval('PT3600S');
// $i = DateInterval::createFromDateString('3600 seconds');
// [/php]
// [/example]
// [example]
// Example #2 Parsing combinations and negative intervals
// [php]
// $i = DateInterval::createFromDateString('62 weeks + 1 day + 2 weeks + 2 hours + 70 minutes');
// echo $i->format('%d %h %i'), "\n";
// 
// $i = DateInterval::createFromDateString('1 year - 10 days');
// echo $i->format('%y %d'), "\n";
// [/php]
// The above example will output:
// [result]
// 449 2 70
// 1 -10
// [/result]
// [/example]
// [example]
// Example #3 Parsing special relative date intervals
// [php]
// $i = DateInterval::createFromDateString('last day of next month');
// var_dump($i);
// 
// $i = DateInterval::createFromDateString('last weekday');
// var_dump($i);
// [/php]
// Output of the above example in PHP 8.2:
// [result]
// object(DateInterval)#1 (2) {
//   ["from_string"]=>
//   bool(true)
//   ["date_string"]=>
//   string(22) "last day of next month"
// }
// object(DateInterval)#2 (2) {
//   ["from_string"]=>
//   bool(true)
//   ["date_string"]=>
//   string(12) "last weekday"
// }
// [/result]
// Output of the above example in PHP 8 is similar to:
// [result]
// object(DateInterval)#1 (16) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(1)
//   ["d"]=>
//   int(0)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["weekday"]=>
//   int(0)
//   ["weekday_behavior"]=>
//   int(0)
//   ["first_last_day_of"]=>
//   int(2)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["special_type"]=>
//   int(0)
//   ["special_amount"]=>
//   int(0)
//   ["have_weekday_relative"]=>
//   int(0)
//   ["have_special_relative"]=>
//   int(0)
// }
// object(DateInterval)#2 (16) {
//   ["y"]=>
//   int(0)
//   ["m"]=>
//   int(0)
//   ["d"]=>
//   int(0)
//   ["h"]=>
//   int(0)
//   ["i"]=>
//   int(0)
//   ["s"]=>
//   int(0)
//   ["f"]=>
//   float(0)
//   ["weekday"]=>
//   int(0)
//   ["weekday_behavior"]=>
//   int(0)
//   ["first_last_day_of"]=>
//   int(0)
//   ["invert"]=>
//   int(0)
//   ["days"]=>
//   bool(false)
//   ["special_type"]=>
//   int(1)
//   ["special_amount"]=>
//   int(-1)
//   ["have_weekday_relative"]=>
//   int(0)
//   ["have_special_relative"]=>
//   int(1)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateinterval.createfromdatestring.php
// ========== DATEINTERVAL_CREATEFROMDATESTRING - END

// SYNTAX:
// DateInterval|false DateInterval::createFromDateString(string $datetime)

return $return_dateinterval_createfromdatestring; // DateInterval|false
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEINTERVAL_CREATEFROMDATESTRING
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEINTERVAL_FORMAT
// ============================== OFFLINE
// ============================== ABOUT
// Formats the interval.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DateInterval::format() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateinterval_format($dateinterval, $format)
{
$return_dateinterval_format = null;

// ========== DATEINTERVAL_FORMAT - BEGIN
// ===== ABOUT
// Formats the interval
// ===== DESCRIPTION
// Formats the interval.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public DateInterval::format(string $format): string
// ===== CODE
$return_dateinterval_format = $dateinterval->format(

$format // string format - The following characters are recognized in the format parameter string. Each format character must be prefixed by a percent sign (%).
// 
// format character - Description                                                        - Example values
// %                - Literal %                                                          - %
// Y                - Years, numeric, at least 2 digits with leading 0                   - 01, 03
// y                - Years, numeric                                                     - 1, 3
// M                - Months, numeric, at least 2 digits with leading 0                  - 01, 03, 12
// m                - Months, numeric                                                    - 1, 3, 12
// D                - Days, numeric, at least 2 digits with leading 0                    - 01, 03, 31
// d                - Days, numeric                                                      - 1, 3, 31
// a                - Total number of days as a result of a DateTime::diff() or (unknown) otherwise - 4, 18, 8123
// H                - Hours, numeric, at least 2 digits with leading 0                   - 01, 03, 23
// h                - Hours, numeric                                                     - 1, 3, 23
// I                - Minutes, numeric, at least 2 digits with leading 0                 - 01, 03, 59
// i                - Minutes, numeric                                                   - 1, 3, 59
// S                - Seconds, numeric, at least 2 digits with leading 0                 - 01, 03, 57
// s                - Seconds, numeric                                                   - 1, 3, 57
// F                - Microseconds, numeric, at least 6 digits with leading 0            - 007701, 052738, 428291
// f                - Microseconds, numeric                                              - 7701, 52738, 428291
// R                - Sign "-" when negative, "+" when positive                          - -, +
// r                - Sign "-" when negative, empty when positive                        - -,

); // Return Values
// Returns the formatted interval.
// 
// Changelog
// Version - Description
// 7.2.12  - The F and f format will now always be positive.
// 7.1.0   - The F and f format characters were added.
// 
// [examples]
// Examples
// [example]
// Example #1 DateInterval example
// [php]
// 
// $interval = new DateInterval('P2Y4DT6H8M');
// echo $interval->format('%d days');
// 
// [/php]
// The above example will output:
// [result]
// 4 days
// [/result]
// [/example]
// [example]
// Example #2 DateInterval and carry over points
// [php]
// 
// $interval = new DateInterval('P32D');
// echo $interval->format('%d days');
// 
// [/php]
// The above example will output:
// [result]
// 32 days
// [/result]
// [/example]
// [example]
// Example #3 DateInterval and DateTime::diff() with the %a and %d modifiers
// [php]
// 
// $january = new DateTime('2010-01-01');
// $february = new DateTime('2010-02-01');
// $interval = $february->diff($january);
// 
// // %a will output the total number of days.
// echo $interval->format('%a total days')."\n";
// 
// // While %d will only output the number of days not already covered by the
// // month.
// echo $interval->format('%m month, %d days');
// 
// [/php]
// The above example will output:
// [result]
// 31 total days
// 1 month, 0 days
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Note: The DateInterval::format() method does not recalculate carry over points in time strings nor in date segments. This is expected because it is not possible to overflow values like "32 days" which could be interpreted as anything from "1 month and 4 days" to "1 month and 1 day".
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateinterval.format.php
// ========== DATEINTERVAL_FORMAT - END

// SYNTAX:
// string DateInterval::format(string $format)

return $return_dateinterval_format; // string
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEINTERVAL_FORMAT
// ==============================


// ============================== END
// PHP_DATE_DATETIME_DATEINTERVAL
// ==============================


// ============================== BEGIN
//  PHP_DATE_DATETIME_DATEPERIOD  
// ============================== OFFLINE
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD_CONSTRUCT - DatePeriod php_date_datetime_dateperiod_construct(DateTimeInterface $start, DateInterval $interval, DateTimeInterface $end, int $options = 0)
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD_CREATEFROMISO8601STRING - static php_date_datetime_dateperiod_createfromiso8601string(DatePeriod $dateperiod, string $specification, int $options = 0)
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD_GETDATEINTERVAL - DateInterval php_date_datetime_dateperiod_getdateinterval(DatePeriod $dateperiod)
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD_GETENDDATE - DateTimeInterface php_date_datetime_dateperiod_getenddate(DatePeriod $dateperiod)
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD_GETRECURRENCES - int php_date_datetime_dateperiod_getrecurrences(DatePeriod $dateperiod)
// OFFLINE | PHP_DATE_DATETIME_DATEPERIOD_GETSTARTDATE - DateTimeInterface php_date_datetime_dateperiod_getstartdate(DatePeriod $dateperiod)
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (6)
// OFFLINE | DatePeriod::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DatePeriod::createFromISO8601String() - PHP_8 >= PHP_8_3_0
// OFFLINE | DatePeriod::getDateInterval() - PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// OFFLINE | DatePeriod::getEndDate() - PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// OFFLINE | DatePeriod::getRecurrences() - PHP_7 >= PHP_7_2_17/PHP_7_3_4, PHP_8
// OFFLINE | DatePeriod::getStartDate() - PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ============================== USING DATA_TYPES (6)
// OFFLINE | DatePeriod - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// OFFLINE | DateTimeInterface - PHP_5 >= PHP_5_5_0, PHP_7, PHP_8
// OFFLINE | DateInterval - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// int
// static
// string
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEPERIOD_CONSTRUCT
// ============================== OFFLINE
// ============================== ABOUT
// Creates a new DatePeriod object.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DatePeriod::__construct() - PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateperiod_construct($start, $interval, $end, $options = 0)
{
$return_dateperiod_construct = null;

// ========== DATEPERIOD_CONSTRUCT - BEGIN
// ===== ABOUT
// Creates a new DatePeriod object
// ===== DESCRIPTION
// Creates a new DatePeriod object.
// DatePeriod objects can be used as an iterator to generate a number of DateTimeImmutable or DateTime object from a start date, a interval, and an end date or the number of recurrences.
// The class of returned objects is equivalent to the DateTimeImmutable or DateTime ancestor class of the start object.
// ===== SUPPORTED
// PHP_5 >= PHP_5_3_0, PHP_7, PHP_8
// ===== SYNTAX
// public DatePeriod::__construct(
//    DateTimeInterface $start,
//    DateInterval $interval,
//    int $recurrences,
//    int $options = 0
// )
// public DatePeriod::__construct(
//    DateTimeInterface $start,
//    DateInterval $interval,
//    DateTimeInterface $end,
//    int $options = 0
// )
// 
//  Warning:
//  public DatePeriod::__construct(string $isostr, int $options = 0)
//  This variant of the constructor has been deprecated, use DatePeriod::createFromISO8601String() instead.
// ===== CODE
$return_dateperiod_construct = new DatePeriod(

$start, // DateTimeInterface start - The start date of the period. Included by default in the result set.

$interval, // DateInterval interval - The interval between recurrences within the period.

// int recurrences - The number of recurrences. The number of returned results is one higher than this, as the start date is included in the result set by default. Must be greater than 0.

$end, // int end - The end date of the period. Excluded by default from the result set.

// string isostr - A subset of the > ISO 8601 repeating interval specification.
// Examples of some ISO 8601 interval specification features that PHP does not support are:
// 1. zero occurrences (R0/)
// 2. time offsets other than UTC (Z), such as +02:00.

$options // int options - A bit field which can be used to control certain behaviour with start- and end- dates.
// With DatePeriod::EXCLUDE_START_DATE you exclude the start date from the set of recurring dates within the period.
// With DatePeriod::INCLUDE_END_DATE you include the end date in the set of recurring dates within the period.

); // Return
// DatePeriod
// 
// Errors/Exceptions
// Throws an DateMalformedPeriodStringException when the isostr cannot be parsed as a valid ISO 8601 period. Prior to PHP 8.3, this was Exception.
// 
// Changelog
// Version              - Description
// 8.3.0                - Now throws DateMalformedPeriodStringException instead of Exception.
// 8.2.0                - The DatePeriod::INCLUDE_END_DATE constant has been added.
// 7.2.19, 7.3.6, 7.4.0 - recurrences must be greater than 0 now.
// 
// [examples]
// Examples
// [example]
// Example #1 DatePeriod example
// [php]
// $start = new DateTime('2012-07-01');
// $interval = new DateInterval('P7D');
// $end = new DateTime('2012-07-31');
// $recurrences = 4;
// $iso = 'R4/2012-07-01T00:00:00Z/P7D';
// 
// // All of these periods are equivalent.
// $period = new DatePeriod($start, $interval, $recurrences);
// $period = new DatePeriod($start, $interval, $end);
// $period = new DatePeriod($iso);
// 
// // By iterating over the DatePeriod object, all of the
// // recurring dates within that period are printed.
// foreach ($period as $date) {
//     echo $date->format('Y-m-d')."\n";
// }
// [/php]
// The above example will output:
// [result]
// 2012-07-01
// 2012-07-08
// 2012-07-15
// 2012-07-22
// 2012-07-29
// [/result]
// [/example]
// [example]
// Example #2 DatePeriod example with DatePeriod::EXCLUDE_START_DATE
// [php]
// $start = new DateTime('2012-07-01');
// $interval = new DateInterval('P7D');
// $end = new DateTime('2012-07-31');
// 
// $period = new DatePeriod($start, $interval, $end,
//                          DatePeriod::EXCLUDE_START_DATE);
// 
// // By iterating over the DatePeriod object, all of the
// // recurring dates within that period are printed.
// // Note that, in this case, 2012-07-01 is not printed.
// foreach ($period as $date) {
//     echo $date->format('Y-m-d')."\n";
// }
// [/php]
// The above example will output:
// [result]
// 2012-07-08
// 2012-07-15
// 2012-07-22
// 2012-07-29
// [/result]
// [/example]
// [example]
// Example #3 DatePeriod example showing all last Thursdays in a year
// [php]
// $begin = new DateTime('2021-12-31');
// $end = new DateTime('2022-12-31 23:59:59');
// 
// $interval = DateInterval::createFromDateString('last thursday of next month');
// $period = new DatePeriod($begin, $interval, $end, DatePeriod::EXCLUDE_START_DATE);
// 
// foreach ($period as $dt) {
//     echo $dt->format('l Y-m-d'), "\n";
// }
// [/php]
// The above example will output:
// [result]
// Thursday 2022-01-27
// Thursday 2022-02-24
// Thursday 2022-03-31
// Thursday 2022-04-28
// Thursday 2022-05-26
// Thursday 2022-06-30
// Thursday 2022-07-28
// Thursday 2022-08-25
// Thursday 2022-09-29
// Thursday 2022-10-27
// Thursday 2022-11-24
// Thursday 2022-12-29
// [/result]
// [/example]
// [/examples]
// 
// Notes
// Unbound numbers of repetitions as specified by ISO 8601 section 4.5 "Recurring time interval" are not supported, i.e. neither passing "R/..." as isostr nor passing null as end would work.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateperiod.construct.php
// ========== DATEPERIOD_CONSTRUCT - END

// SYNTAX:
// DatePeriod DatePeriod::__construct(DateTimeInterface $start, DateInterval $interval, DateTimeInterface $end, int $options = 0)

return $return_dateperiod_construct; // DatePeriod
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEPERIOD_CONSTRUCT
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEPERIOD_CREATEFROMISO8601STRING
// ============================== OFFLINE
// ============================== ABOUT
// Creates a new DatePeriod object from an ISO8601 string.
// ============================== SUPPORT
// PHP_8
// ============================== USING SUBCLASSES (1)
// DatePeriod::createFromISO8601String() - PHP_8 >= PHP_8_3_0
// ============================== CODE
/*
function php_date_datetime_dateperiod_createfromiso8601string($dateperiod, $specification, $options = 0)
{
$return_dateperiod_createfromiso8601string = null;

// ========== DATEPERIOD_CREATEFROMISO8601STRING - BEGIN
// ===== ABOUT
// Creates a new DatePeriod object from an ISO8601 string
// ===== DESCRIPTION
// Creates a new DatePeriod object from an ISO8601 string, as specified with specification.
// ===== SUPPORTED
// PHP_8 >= PHP_8_3_0
// ===== SYNTAX
// public static DatePeriod::createFromISO8601String(string $specification, int $options = 0): static
// ===== CODE
$return_dateperiod_createfromiso8601string = $dateperiod->createFromISO8601String(

$specification, // string specification - A subset of the > ISO 8601 repeating interval specification.
// An example of an accepted ISO 8601 interval specifications is R5/2008-03-01T13:00:00Z/P1Y2M10DT2H30M, which specifies:
// * 5 iterations (R5/)
// * Starting at 2008-03-01T13:00:00Z.
// * Each iteration is an 1 year, 2 months, 10 days, 2 hours, and 30 minute interval (/P1Y2M10DT2H30M).
// Examples of some ISO 8601 interval specification features that PHP does not support are:
// 1. zero occurrences (R0/)
// 2. time offsets other than UTC (Z), such as +02:00.

$options // int options - A bit field which can be used to control certain behaviour with start- and end- dates.
// With DatePeriod::EXCLUDE_START_DATE you exclude the start date from the set of recurring dates within the period.
// With DatePeriod::INCLUDE_END_DATE you include the end date in the set of recurring dates within the period.

); // Return Values
// Creates a new DatePeriod object.
// DatePeriod objects created with this method can be used as an iterator to generate a number of DateTimeImmutable objects.
// 
// Errors/Exceptions
// Throws an DateMalformedPeriodStringException when the specification cannot be parsed as a valid ISO 8601 period.
// 
// [examples]
// Examples
// [example]
// Example #1 DatePeriod::createFromISO8601String example
// [php]
// $iso = 'R4/2023-07-01T00:00:00Z/P7D';
// 
// $period = DatePeriod::createFromISO8601String($iso);
// 
// // By iterating over the DatePeriod object, all of the
// // recurring dates within that period are printed.
// foreach ($period as $date) {
//     echo $date->format('Y-m-d'), "\n";
// }
// [/php]
// The above example will output:
// [result]
// 2023-07-01
// 2023-07-08
// 2023-07-15
// 2023-07-22
// 2023-07-29
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateperiod.createfromiso8601string.php
// ========== DATEPERIOD_CREATEFROMISO8601STRING - END

// SYNTAX:
// static DatePeriod::createFromISO8601String(string $specification, int $options = 0)

return $return_dateperiod_createfromiso8601string; // static
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEPERIOD_CREATEFROMISO8601STRING
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEPERIOD_GETDATEINTERVAL
// ============================== OFFLINE
// ============================== ABOUT
// Gets the interval.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DatePeriod::getDateInterval() - PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateperiod_getdateinterval($dateperiod)
{
$return_dateperiod_getdateinterval = null;

// ========== DATEPERIOD_GETDATEINTERVAL - BEGIN
// ===== ABOUT
// Gets the interval
// ===== DESCRIPTION
// Gets a DateInterval object representing the interval used for the period.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DatePeriod::getDateInterval(): DateInterval
// ===== CODE
$return_dateperiod_getdateinterval = $dateperiod->getDateInterval(

// This function has no parameters.

); // Return Values
// Returns a DateInterval object
// 
// [examples]
// Examples
// [example]
// Example #1 DatePeriod::getDateInterval() example
// [php]
// $period = new DatePeriod('R7/2016-05-16T00:00:00Z/P1D');
// $interval = $period->getDateInterval();
// echo $interval->format('%d day');
// [/php]
// The above example will output:
// [result]
// 1 day
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateperiod.getdateinterval.php
// ========== DATEPERIOD_GETDATEINTERVAL - END

// SYNTAX:
// DateInterval DatePeriod::getDateInterval()

return $return_dateperiod_getdateinterval; // DateInterval
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEPERIOD_GETDATEINTERVAL
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEPERIOD_GETENDDATE
// ============================== OFFLINE
// ============================== ABOUT
// Gets the end date.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DatePeriod::getEndDate() - PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateperiod_getenddate($dateperiod)
{
$return_dateperiod_getenddate = null;

// ========== DATEPERIOD_GETENDDATE - BEGIN
// ===== ABOUT
// Gets the end date
// ===== DESCRIPTION
// Gets the end date of the period.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DatePeriod::getEndDate(): ?DateTimeInterface
// ===== CODE
$return_dateperiod_getenddate = $dateperiod->getEndDate(

// This function has no parameters.

); // Return Values
// Returns null if the DatePeriod does not have an end date. For example, when initialized with the recurrences parameter, or the isostr parameter without an end date.
// Returns a DateTimeImmutable object when the DatePeriod is initialized with a DateTimeImmutable object as the end parameter.
// Returns a cloned DateTime object representing the end date otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 DatePeriod::getEndDate() example
// [php]
// $period = new DatePeriod(
//     new DateTime('2016-05-16T00:00:00Z'),
//     new DateInterval('P1D'),
//     new DateTime('2016-05-20T00:00:00Z')
// );
// $start = $period->getEndDate();
// echo $start->format(DateTime::ISO8601);
// [/php]
// The above examples will output:
// [result]
// 2016-05-20T00:00:00+0000
// [/result]
// [/example]
// [example]
// Example #2 DatePeriod::getEndDate() without an end date
// [php]
// $period = new DatePeriod(
//     new DateTime('2016-05-16T00:00:00Z'),
//     new DateInterval('P1D'),
//     7
// );
// var_dump($period->getEndDate());
// [/php]
// The above example will output:
// [result]
// NULL
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateperiod.getenddate.php
// ========== DATEPERIOD_GETENDDATE - END

// SYNTAX:
// DateTimeInterface DatePeriod::getEndDate()

return $return_dateperiod_getenddate; // DateTimeInterface
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEPERIOD_GETENDDATE
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEPERIOD_GETRECURRENCES
// ============================== OFFLINE
// ============================== ABOUT
// Gets the number of recurrences.
// ============================== SUPPORT
// PHP_7 - PHP_8
// ============================== USING SUBCLASSES (1)
// DatePeriod::getRecurrences() - PHP_7 >= PHP_7_2_17/PHP_7_3_4, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateperiod_getrecurrences($dateperiod)
{
$return_dateperiod_getrecurrences = 0;

// ========== DATEPERIOD_GETRECURRENCES - BEGIN
// ===== ABOUT
// Gets the number of recurrences
// ===== DESCRIPTION
// Get the number of recurrences.
// ===== SUPPORTED
// PHP_7 >= PHP_7_2_17/PHP_7_3_4, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DatePeriod::getRecurrences(): ?int
// ===== CODE
$return_dateperiod_getrecurrences = $dateperiod->getRecurrences(

// This function has no parameters.

); // Return Values
// The number of recurrences as set by explicitly passing the $recurrences to the contructor of the DatePeriod class, or null otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 Different values for DatePeriod::getRecurrences()
// [php]
// $start = new DateTime('2018-12-31 00:00:00');
// $end   = new DateTime('2021-12-31 00:00:00');
// $interval = new DateInterval('P1M');
// $recurrences = 5;
// 
// // recurrences explicitly set through the constructor
// $period = new DatePeriod($start, $interval, $recurrences, DatePeriod::EXCLUDE_START_DATE);
// echo $period->getRecurrences(), "\n";
// 
// $period = new DatePeriod($start, $interval, $recurrences);
// echo $period->getRecurrences(), "\n";
// 
// $period = new DatePeriod($start, $interval, $recurrences, DatePeriod::INCLUDE_END_DATE);
// echo $period->getRecurrences(), "\n\n";
// 
// // recurrences not set in the constructor
// $period = new DatePeriod($start, $interval, $end);
// var_dump($period->getRecurrences());
// 
// $period = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);
// var_dump($period->getRecurrences());
// [/php]
// The above example will output:
// [result]
// 
// 5
// 5
// 5
// 
// NULL
// NULL
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateperiod.getrecurrences.php
// ========== DATEPERIOD_GETRECURRENCES - END

// SYNTAX:
// int DatePeriod::getRecurrences()

return $return_dateperiod_getrecurrences; // int
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEPERIOD_GETRECURRENCES
// ==============================


// ============================== BEGIN
// PHP_DATE_DATETIME_DATEPERIOD_GETSTARTDATE
// ============================== OFFLINE
// ============================== ABOUT
// Gets the start date.
// ============================== SUPPORT
// PHP_5 - PHP_8
// ============================== USING SUBCLASSES (1)
// DatePeriod::getStartDate() - PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ============================== CODE
/*
function php_date_datetime_dateperiod_getstartdate($dateperiod)
{
$return_dateperiod_getstartdate = null;

// ========== DATEPERIOD_GETSTARTDATE - BEGIN
// ===== ABOUT
// Gets the start date
// ===== DESCRIPTION
// Gets the start date of the period.
// ===== SUPPORTED
// PHP_5 >= PHP_5_6_5, PHP_7, PHP_8
// ===== SYNTAX
// Object-oriented style
// public DatePeriod::getStartDate(): DateTimeInterface
// ===== CODE
$return_dateperiod_getstartdate = $dateperiod->getStartDate(

// This function has no parameters.

); // Return Values
// Returns a DateTimeImmutable object when the DatePeriod is initialized with a DateTimeImmutable object as the start parameter.
// Returns a DateTime object otherwise.
// 
// [examples]
// Examples
// [example]
// Example #1 DatePeriod::getStartDate() example
// [php]
// $period = new DatePeriod('R7/2016-05-16T00:00:00Z/P1D');
// $start = $period->getStartDate();
// echo $start->format(DateTime::ISO8601);
// [/php]
// The above example will output:
// [result]
// 2016-05-16T00:00:00+0000
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-28)
// URL: https://www.php.net/manual/en/dateperiod.getstartdate.php
// ========== DATEPERIOD_GETSTARTDATE - END

// SYNTAX:
// DateTimeInterface DatePeriod::getStartDate()

return $return_dateperiod_getstartdate; // DateTimeInterface
}
*/
// ============================== END
// PHP_DATE_DATETIME_DATEPERIOD_GETSTARTDATE
// ==============================


// ============================== END
//  PHP_DATE_DATETIME_DATEPERIOD  
// ==============================


// ============================== END
//       PHP_DATE_DATETIME       
// ==============================
?>