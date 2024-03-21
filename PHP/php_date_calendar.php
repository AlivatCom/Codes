<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATE_CALENDAR - BEGIN
// PHP_DATE_CALENDAR_CAL_DAYS_IN_MONTH - int php_date_calendar_cal_days_in_month(int $calendar, int $month, int $year)
// PHP_DATE_CALENDAR_CAL_FROM_JD - array php_date_calendar_cal_from_jd(int $julian_day, int $calendar)
// PHP_DATE_CALENDAR_CAL_INFO - array php_date_calendar_cal_info(int $calendar = -1)
// PHP_DATE_CALENDAR_CAL_TO_JD - int php_date_calendar_cal_to_jd(int $calendar, int $month, int $day, int $year)
// PHP_DATE_CALENDAR_EASTER_DATE - int php_date_calendar_easter_date(int $year = null, int $mode = CAL_EASTER_DEFAULT)
// PHP_DATE_CALENDAR_EASTER_DAYS - int php_date_calendar_easter_days(int $year = null, int $mode = CAL_EASTER_DEFAULT)
// PHP_DATE_CALENDAR_FRENCHTOJD - int php_date_calendar_frenchtojd(int $month, int $day, int $year)
// PHP_DATE_CALENDAR_GREGORIANTOJD - int php_date_calendar_gregoriantojd(int $month, int $day, int $year)
// PHP_DATE_CALENDAR_JDDAYOFWEEK - int|string php_date_calendar_jddayofweek(int $julian_day, int $mode = CAL_DOW_DAYNO)
// PHP_DATE_CALENDAR_JDMONTHNAME - string php_date_calendar_jdmonthname(int $julian_day, int $mode)
// PHP_DATE_CALENDAR_JDTOFRENCH - string php_date_calendar_jdtofrench(int $julian_day)
// PHP_DATE_CALENDAR_JDTOGREGORIAN - string php_date_calendar_jdtogregorian(int $julian_day)
// PHP_DATE_CALENDAR_JDTOJEWISH - string php_date_calendar_jdtojewish(int $julian_day, bool $hebrew = false, int $flags = 0)
// PHP_DATE_CALENDAR_JDTOJULIAN - string php_date_calendar_jdtojulian(int $julian_day)
// PHP_DATE_CALENDAR_JDTOUNIX - int php_date_calendar_jdtounix(int $julian_day)
// PHP_DATE_CALENDAR_JEWISHTOJD - int php_date_calendar_jewishtojd(int $month, int $day, int $year)
// PHP_DATE_CALENDAR_JULIANTOJD - int php_date_calendar_juliantojd(int $month, int $day, int $year)
// PHP_DATE_CALENDAR_UNIXTOJD - int|false php_date_calendar_unixtojd(int $timestamp = null)
// PHP_DATE_CALENDAR - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== INSTALLATION
// BUNDLED (No external libraries are needed to build this extension. To get these functions to work, you have to compile PHP with --enable-calendar.)
// ============================== USING FUNCTIONS (18)
// cal_days_in_month() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// cal_from_jd() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// cal_info() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// cal_to_jd() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// easter_date() - PHP_4, PHP_5, PHP_7, PHP_8
// easter_days() - PHP_4, PHP_5, PHP_7, PHP_8
// frenchtojd() - PHP_4, PHP_5, PHP_7, PHP_8
// gregoriantojd() - PHP_4, PHP_5, PHP_7, PHP_8
// jddayofweek() - PHP_4, PHP_5, PHP_7, PHP_8
// jdmonthname() - PHP_4, PHP_5, PHP_7, PHP_8
// jdtofrench() - PHP_4, PHP_5, PHP_7, PHP_8
// jdtogregorian() - PHP_4, PHP_5, PHP_7, PHP_8
// jdtojewish() - PHP_4, PHP_5, PHP_7, PHP_8
// jdtojulian() - PHP_4, PHP_5, PHP_7, PHP_8
// jdtounix() - PHP_4, PHP_5, PHP_7, PHP_8
// jewishtojd() - PHP_4, PHP_5, PHP_7, PHP_8
// juliantojd() - PHP_4, PHP_5, PHP_7, PHP_8
// unixtojd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (5)
// int
// array
// string
// bool
// false
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//       PHP_DATE_CALENDAR       
// ============================== ABOUT
// PHP Manual / Function Reference / Date and Time Related Extensions / Calendar
// URL: https://www.php.net/manual/en/book.calendar.php
// ============================== DESCRIPTION
// CALENDAR
// 
// CALENDAR - BEGIN
// Calendar
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// CALENDAR_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// The calendar extension presents a series of functions to simplify converting between different calendar formats. The intermediary or standard it is based on is the Julian Day Count. The Julian Day Count is a count of days starting from January 1st, 4713 B.C. To convert between calendar systems, you must first convert to Julian Day Count, then to the calendar system of your choice. Julian Day Count is very different from the Julian Calendar! For more information on Julian Day Count, visit > http://www.hermetic.ch/cal_stud/jdn.htm. For more information on calendar systems visit > http://www.fourmilab.ch/documents/calendar/. Excerpts from this page are included in these instructions, and are in quotes.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/intro.calendar.php
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
// URL: https://www.php.net/manual/en/calendar.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// To get these functions to work, you have to compile PHP with --enable-calendar.
// The Windows version of PHP has built-in support for this extension. You do not need to load any additional extensions in order to use these functions.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/calendar.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// This extension has no configuration directives defined in php.ini.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/calendar.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// This extension has no resource types defined.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/calendar.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/calendar.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// CAL_EASTER_DEFAULT           (int) - For easter_days(): calculate Easter for years before 1753 according to the Julian calendar, and for later years according to the Gregorian calendar.
// CAL_EASTER_ROMAN             (int) - For easter_days(): calculate Easter for years before 1583 according to the Julian calendar, and for later years according to the Gregorian calendar.
// CAL_EASTER_ALWAYS_GREGORIAN  (int) - For easter_days(): calculate Easter according to the proleptic Gregorian calendar.
// CAL_EASTER_ALWAYS_JULIAN     (int) - For easter_days(): calculate Easter according to the Julian calendar.
// CAL_GREGORIAN                (int) - For cal_days_in_month(), cal_from_jd(), cal_info() and cal_to_jd(): use the proleptic Gregorian calendar.
// CAL_JULIAN                   (int) - For cal_days_in_month(), cal_from_jd(), cal_info() and cal_to_jd(): use the Julian calendar.
// CAL_JEWISH                   (int) - For cal_days_in_month(), cal_from_jd(), cal_info() and cal_to_jd(): use the Jewish calendar.
// CAL_FRENCH                   (int) - For cal_days_in_month(), cal_from_jd(), cal_info() and cal_to_jd(): use the French Repuclican calendar.
// CAL_NUM_CALS                 (int) - The number of available calendars.
// CAL_JEWISH_ADD_ALAFIM_GERESH (int) - For jdtojewish(): adds a geresh symbol (which resembles a single-quote mark) as thousands separator to the year number.
// CAL_JEWISH_ADD_ALAFIM        (int) - For jdtojewish(): adds the word alafim as thousands separator to the year number.
// CAL_JEWISH_ADD_GERESHAYIM    (int) - For jdtojewish(): add a gershayim symbol (which resembles a double-quote mark) before the final letter of the day and year numbers.
// CAL_DOW_DAYNO                (int) - For jddayofweek(): the day of the week as int, where 0 means Sunday and 6 means Saturday.
// CAL_DOW_SHORT                (int) - For jddayofweek(): the abbreviated English name of the day of the week.
// CAL_DOW_LONG                 (int) - For jddayofweek(): the English name of the day of the week.
// CAL_MONTH_GREGORIAN_SHORT    (int) - For jdmonthname(): the abbreviated Gregorian month name.
// CAL_MONTH_GREGORIAN_LONG     (int) - For jdmonthname(): the Gregorian month name.
// CAL_MONTH_JULIAN_SHORT       (int) - For jdmonthname(): the abbreviated Julian month name.
// CAL_MONTH_JULIAN_LONG        (int) - For jdmonthname(): the Julian month name.
// CAL_MONTH_JEWISH             (int) - For jdmonthname(): the Jewish month name.
// CAL_MONTH_FRENCH             (int) - For jdmonthname(): the French Republican month name.
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/calendar.constants.php
// PREDEFINED_CONSTANTS - END
// 
// CALENDAR_FUNCTIONS - BEGIN
// Calendar Functions
// 
// Table of Contents
// * cal_days_in_month - Return the number of days in a month for a given year and calendar
// * cal_from_jd       - Converts from Julian Day Count to a supported calendar
// * cal_info          - Returns information about a particular calendar
// * cal_to_jd         - Converts from a supported calendar to Julian Day Count
// * easter_date       - Get Unix timestamp for midnight on Easter of a given year
// * easter_days       - Get number of days after March 21 on which Easter falls for a given year
// * frenchtojd        - Converts a date from the French Republican Calendar to a Julian Day Count
// * gregoriantojd     - Converts a Gregorian date to Julian Day Count
// * jddayofweek       - Returns the day of the week
// * jdmonthname       - Returns a month name
// * jdtofrench        - Converts a Julian Day Count to the French Republican Calendar
// * jdtogregorian     - Converts Julian Day Count to Gregorian date
// * jdtojewish        - Converts a Julian day count to a Jewish calendar date
// * jdtojulian        - Converts a Julian Day Count to a Julian Calendar Date
// * jdtounix          - Convert Julian Day to Unix timestamp
// * jewishtojd        - Converts a date in the Jewish Calendar to Julian Day Count
// * juliantojd        - Converts a Julian Calendar date to Julian Day Count
// * unixtojd          - Convert Unix timestamp to Julian Day
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/ref.calendar.php
// CALENDAR_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2023-10-08)
// URL: https://www.php.net/manual/en/book.calendar.php
// CALENDAR - END
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_CAL_DAYS_IN_MONTH
// ============================== PUBLIC
// ============================== ABOUT
// Return the number of days in a month for a given year and calendar.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// cal_days_in_month() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_cal_days_in_month($calendar, $month, $year)
{
$return_cal_days_in_month = 0;

// ========== CAL_DAYS_IN_MONTH - BEGIN
// ===== ABOUT
// Return the number of days in a month for a given year and calendar
// ===== DESCRIPTION
// This function will return the number of days in the month of year for the specified calendar.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// cal_days_in_month(int $calendar, int $month, int $year): int
// ===== CODE
$return_cal_days_in_month = cal_days_in_month(

$calendar, // int calendar - Calendar to use for calculation

$month, // int month - Month in the selected calendar

$year // int year - Year in the selected calendar

); // Return Values
// The length in days of the selected month in the given calendar
// 
// [examples]
// Examples
// [example]
// Example #1 cal_days_in_month() example
// [php]
// $number = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
// echo "There were {$number} days in August 2003";
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.cal-days-in-month.php
// ========== CAL_DAYS_IN_MONTH - END

// SYNTAX:
// int cal_days_in_month(int $calendar, int $month, int $year)

return $return_cal_days_in_month; // int
}
// ============================== END
// PHP_DATE_CALENDAR_CAL_DAYS_IN_MONTH
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_CAL_FROM_JD 
// ============================== PUBLIC
// ============================== ABOUT
// Converts from Julian Day Count to a supported calendar.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// cal_from_jd() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_cal_from_jd($julian_day, $calendar)
{
$return_cal_from_jd = null;

// ========== CAL_FROM_JD - BEGIN
// ===== ABOUT
// Converts from Julian Day Count to a supported calendar
// ===== DESCRIPTION
// cal_from_jd() converts the Julian day given in julian_day into a date of the specified calendar. Supported calendar values are CAL_GREGORIAN, CAL_JULIAN, CAL_JEWISH and CAL_FRENCH.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// cal_from_jd(int $julian_day, int $calendar): array
// ===== CODE
$return_cal_from_jd = cal_from_jd(

$julian_day, // int julian_day - Julian day as integer

$calendar // int calendar - Calendar to convert to

); // Return Values
// Returns an array containing calendar information like month, day, year, day of week (dow), abbreviated and full names of weekday and month and the date in string form "month/day/year". The day of week ranges from 0 (Sunday) to 6 (Saturday).
// 
// [examples]
// Examples
// [example]
// Example #1 cal_from_jd() example
// [php]
// $today = unixtojd(mktime(0, 0, 0, 8, 16, 2003));
// print_r(cal_from_jd($today, CAL_GREGORIAN));
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [date] => 8/16/2003
//     [month] => 8
//     [day] => 16
//     [year] => 2003
//     [dow] => 6
//     [abbrevdayname] => Sat
//     [dayname] => Saturday
//     [abbrevmonth] => Aug
//     [monthname] => August
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.cal-from-jd.php
// ========== CAL_FROM_JD - END

// SYNTAX:
// array cal_from_jd(int $julian_day, int $calendar)

return $return_cal_from_jd; // array
}
// ============================== END
// PHP_DATE_CALENDAR_CAL_FROM_JD 
// ==============================


// ============================== BEGIN
//   PHP_DATE_CALENDAR_CAL_INFO   
// ============================== PUBLIC
// ============================== ABOUT
// Returns information about a particular calendar.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// cal_info() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_cal_info($calendar = -1)
{
$return_cal_info = null;

// ========== CAL_INFO - BEGIN
// ===== ABOUT
// Returns information about a particular calendar
// ===== DESCRIPTION
// cal_info() returns information on the specified calendar.
// Calendar information is returned as an array containing the elements calname, calsymbol, month, abbrevmonth and maxdaysinmonth. The names of the different calendars which can be used as calendar are as follows:
// * 0 or CAL_GREGORIAN - Gregorian Calendar
// * 1 or CAL_JULIAN    - Julian Calendar
// * 2 or CAL_JEWISH    - Jewish Calendar
// * 3 or CAL_FRENCH    - French Revolutionary Calendar
// If no calendar is specified information on all supported calendars is returned as an array.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// cal_info(int $calendar = -1): array
// ===== CODE
$return_cal_info = cal_info(

$calendar // int calendar - Calendar to return information for. If no calendar is specified information about all calendars is returned.

); // Return Values
// array
// 
// [examples]
// Examples
// [example]
// Example #1 cal_info() example
// [php]
// $info = cal_info(0);
// print_r($info);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [months] => Array
//         (
//             [1] => January
//             [2] => February
//             [3] => March
//             [4] => April
//             [5] => May
//             [6] => June
//             [7] => July
//             [8] => August
//             [9] => September
//             [10] => October
//             [11] => November
//             [12] => December
//         )
// 
//     [abbrevmonths] => Array
//         (
//             [1] => Jan
//             [2] => Feb
//             [3] => Mar
//             [4] => Apr
//             [5] => May
//             [6] => Jun
//             [7] => Jul
//             [8] => Aug
//             [9] => Sep
//             [10] => Oct
//             [11] => Nov
//             [12] => Dec
//         )
// 
//     [maxdaysinmonth] => 31
//     [calname] => Gregorian
//     [calsymbol] => CAL_GREGORIAN
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.cal-info.php
// ========== CAL_INFO - END

// SYNTAX:
// array cal_info(int $calendar = -1)

return $return_cal_info; // array
}
// ============================== END
//   PHP_DATE_CALENDAR_CAL_INFO   
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_CAL_TO_JD  
// ============================== PUBLIC
// ============================== ABOUT
// Converts from a supported calendar to Julian Day Count
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// cal_to_jd() - PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_cal_to_jd($calendar, $month, $day, $year)
{
$return_cal_to_jd = 0;

// ========== CAL_TO_JD - BEGIN
// ===== ABOUT
// Converts from a supported calendar to Julian Day Count
// ===== DESCRIPTION
// cal_to_jd() calculates the Julian day count for a date in the specified calendar. Supported calendars are CAL_GREGORIAN, CAL_JULIAN, CAL_JEWISH and CAL_FRENCH.
// ===== SUPPORTED
// PHP_4 >= PHP_4_1_0, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// cal_to_jd(
//    int $calendar,
//    int $month,
//    int $day,
//    int $year
// ): int
// ===== CODE
$return_cal_to_jd = cal_to_jd(

$calendar, // int calendar - Calendar to convert from, one of CAL_GREGORIAN, CAL_JULIAN, CAL_JEWISH or CAL_FRENCH.

$month, // int month - The month as a number, the valid range depends on the calendar

$day, // int day - The day as a number, the valid range depends on the calendar

$year // int year - The year as a number, the valid range depends on the calendar

); // Return Values
// A Julian Day number.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.cal-to-jd.php
// ========== CAL_TO_JD - END

// SYNTAX:
// int cal_to_jd(int $calendar, int $month, int $day, int $year)

return $return_cal_to_jd; // int
}
// ============================== END
//  PHP_DATE_CALENDAR_CAL_TO_JD  
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_EASTER_DATE 
// ============================== PUBLIC
// ============================== ABOUT
// Get Unix timestamp for midnight on Easter of a given year.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// easter_date() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// CAL_EASTER_DEFAULT - easter_date()
// ============================== CODE
function php_date_calendar_easter_date($year = null, $mode = CAL_EASTER_DEFAULT)
{
$return_easter_date = 0;

// ========== EASTER_DATE - BEGIN
// ===== ABOUT
// Get Unix timestamp for midnight on Easter of a given year
// ===== DESCRIPTION
// Returns the Unix timestamp corresponding to midnight on Easter of the given year.
// The date of Easter Day was defined by the Council of Nicaea in AD325 as the Sunday after the first full moon which falls on or after the Spring Equinox. The Equinox is assumed to always fall on 21st March, so the calculation reduces to determining the date of the full moon and the date of the following Sunday. The algorithm used here was introduced around the year 532 by Dionysius Exiguus. Under the Julian Calendar (for years before 1753) a simple 19-year cycle is used to track the phases of the Moon. Under the Gregorian Calendar (for years after 1753 - devised by Clavius and Lilius, and introduced by Pope Gregory XIII in October 1582, and into Britain and its then colonies in September 1752) two correction factors are added to make the cycle more accurate.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// easter_date(?int $year = null, int $mode = CAL_EASTER_DEFAULT): int
// ===== CODE
$return_easter_date = easter_date(

$year, // int year - The year must be a number between 1970 and 2037 for 32-bit systems, or between 1970 and 2,000,000,000 for 64-bit systems. If omitted or null, defaults to the current year according to the local time.

$mode // int mode - Allows Easter dates to be calculated based on the Julian calendar when set to CAL_EASTER_ALWAYS_JULIAN. See also calendar constants.

); // Return Values
// The easter date as a unix timestamp.
// 
// Errors/Exceptions
// A ValueError is thrown if the year is earlier than 1970 or later than 2037 when running on a 32-bit system, or later than 2,000,000,000 on a 64-bit system.
// 
// Changelog
// Version - Description
// 8.3.0   - On 64-bit systems, the year parameter now accepts values within the range of 1970 to 2,000,000,000.
// 8.0.0   - year is nullable now.
// 8.0.0   - A ValueError is now thrown when year is outside the allowed range. Previously, an E_WARNING was raised and the function returned false.
// 
// [examples]
// Examples
// [example]
// Example #1 easter_date() example
// [php]
// 
// echo date("M-d-Y", easter_date(1999));        // Apr-04-1999
// echo date("M-d-Y", easter_date(2000));        // Apr-23-2000
// echo date("M-d-Y", easter_date(2001));        // Apr-15-2001
// 
// [/php]
// [/example]
// [example]
// Example #2 Using easter_date() with DateTime
// [php]
// 
// $timestamp = easter_date(2023);
// 
// $datetime = new \DateTime();
// $datetime->setTimestamp($timestamp);
// 
// echo $datetime->format('M-d-Y'); // Apr-09-2023
// 
// [/php]
// [/example]
// [/examples]
// 
// Notes
//  Note:
//  easter_date() relies on your system's C library time functions, rather than using PHP's internal date and time functions. As a consequence, easter_date() uses the TZ environment variable to determine the time zone it should operate in, rather than using PHP's default time zone, which may result in unexpected behaviour when using this function in conjunction with other date functions in PHP.
//  As a workaround, you can use the easter_days() with DateTime and DateInterval to calculate the start of Easter in your PHP time zone as follows:
//  [php]
//  function get_easter_datetime($year) {
//      $base = new DateTime("$year-03-21");
//      $days = easter_days($year);
//  
//      return $base->add(new DateInterval("P{$days}D"));
//  }
//  
//  foreach (range(2012, 2015) as $year) {
//      printf("Easter in %d is on %s\n",
//             $year,
//             get_easter_datetime($year)->format('F j'));
//  }
//  [/php]
//  The above example will output:
//  [result]
//  Easter in 2012 is on April 8
//  Easter in 2013 is on March 31
//  Easter in 2014 is on April 20
//  Easter in 2015 is on April 5
//  [/result]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.easter-date.php
// ========== EASTER_DATE - END

// SYNTAX:
// int easter_date(int $year = null, int $mode = CAL_EASTER_DEFAULT)

return $return_easter_date; // int
}
// ============================== END
// PHP_DATE_CALENDAR_EASTER_DATE 
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_EASTER_DAYS 
// ============================== PUBLIC
// ============================== ABOUT
// Get number of days after March 21 on which Easter falls for a given year.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// easter_days() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// CAL_EASTER_DEFAULT - easter_days()
// ============================== CODE
function php_date_calendar_easter_days($year = null, $mode = CAL_EASTER_DEFAULT)
{
$return_easter_days = 0;

// ========== EASTER_DAYS - BEGIN
// ===== ABOUT
// Get number of days after March 21 on which Easter falls for a given year
// ===== DESCRIPTION
// Returns the number of days after March 21 on which Easter falls for a given year. If no year is specified, the current year is assumed.
// This function can be used instead of easter_date() to calculate Easter for years which fall outside the range of Unix timestamps (i.e. before 1970 or after 2037).
// The date of Easter Day was defined by the Council of Nicaea in AD325 as the Sunday after the first full moon which falls on or after the Spring Equinox. The Equinox is assumed to always fall on 21st March, so the calculation reduces to determining the date of the full moon and the date of the following Sunday. The algorithm used here was introduced around the year 532 by Dionysius Exiguus. Under the Julian Calendar (for years before 1753) a simple 19-year cycle is used to track the phases of the Moon. Under the Gregorian Calendar (for years after 1753 - devised by Clavius and Lilius, and introduced by Pope Gregory XIII in October 1582, and into Britain and its then colonies in September 1752) two correction factors are added to make the cycle more accurate.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// easter_days(?int $year = null, int $mode = CAL_EASTER_DEFAULT): int
// ===== CODE
$return_easter_days = easter_days(

$year, // int year - The year as a positive number. If omitted or null, defaults to the current year according to the local time.

$mode // int mode - Allows Easter dates to be calculated based on the Gregorian calendar during the years 1582 - 1752 when set to CAL_EASTER_ROMAN. See the calendar constants for more valid constants.

); // Return Values
// The number of days after March 21st that the Easter Sunday is in the given year.
// 
// Changelog
// Version - Description
// 8.0.0   - year is nullable now.
// 
// [examples]
// Examples
// [example]
// Example #1 easter_days() example
// [php]
// 
// echo easter_days(1999);        // 14, i.e. April 4
// echo easter_days(1492);        // 32, i.e. April 22
// echo easter_days(1913);        //  2, i.e. March 23
// 
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.easter-days.php
// ========== EASTER_DAYS - END

// SYNTAX:
// int easter_days(int $year = null, int $mode = CAL_EASTER_DEFAULT)

return $return_easter_days; // int
}
// ============================== END
// PHP_DATE_CALENDAR_EASTER_DAYS 
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_FRENCHTOJD  
// ============================== PUBLIC
// ============================== ABOUT
// Converts a date from the French Republican Calendar to a Julian Day Count.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// frenchtojd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_frenchtojd($month, $day, $year)
{
$return_frenchtojd = 0;

// ========== FRENCHTOJD - BEGIN
// ===== ABOUT
// Converts a date from the French Republican Calendar to a Julian Day Count
// ===== DESCRIPTION
// Converts a date from the French Republican Calendar to a Julian Day Count.
// These routines only convert dates in years 1 through 14 (Gregorian dates 22 September 1792 through 22 September 1806). This more than covers the period when the calendar was in use.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// frenchtojd(int $month, int $day, int $year): int
// ===== CODE
$return_frenchtojd = frenchtojd(

$month, // int month - The month as a number from 1 (for Vendémiaire) to 13 (for the period of 5-6 days at the end of each year)

$day, // int day - The day as a number from 1 to 30

$year // int year - The year as a number between 1 and 14

); // Return Values
// The julian day for the given french revolution date as an integer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.frenchtojd.php
// ========== FRENCHTOJD - END

// SYNTAX:
// int frenchtojd(int $month, int $day, int $year)

return $return_frenchtojd; // int
}
// ============================== END
//  PHP_DATE_CALENDAR_FRENCHTOJD  
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_GREGORIANTOJD
// ============================== PUBLIC
// ============================== ABOUT
// Converts a Gregorian date to Julian Day Count.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// gregoriantojd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_gregoriantojd($month, $day, $year)
{
$return_gregoriantojd = 0;

// ========== GREGORIANTOJD - BEGIN
// ===== ABOUT
// Converts a Gregorian date to Julian Day Count
// ===== DESCRIPTION
// The valid range for the Gregorian calendar is from November 25, 4714 B.C. to at least December 31, 9999 A.D.
// Although this function can handle dates all the way back to 4714 B.C., such use may not be meaningful. The Gregorian calendar was not instituted until October 15, 1582 (or October 5, 1582 in the Julian calendar). Some countries did not accept it until much later. For example, Britain converted in 1752, The USSR in 1918 and Greece in 1923. Most European countries used the Julian calendar prior to the Gregorian.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// gregoriantojd(int $month, int $day, int $year): int
// ===== CODE
$return_gregoriantojd = gregoriantojd(

$month, // int month - The month as a number from 1 (for January) to 12 (for December)

$day, // int day - The day as a number from 1 to 31. If the month has less days then given, overflow occurs; see the example below.

$year // int year - The year as a number between -4714 and 9999. Negative numbers mean years B.C., positive numbers mean years A.D. Note that there is no year 0; December 31, 1 B.C. is immediately followed by January 1, 1 A.D.

); // Return Values
// The julian day for the given gregorian date as an integer. Dates outside the valid range return 0.
// 
// [examples]
// Examples
// [example]
// Example #1 Calendar functions
// [php]
// $jd = gregoriantojd(10, 11, 1970);
// echo "$jd\n";
// $gregorian = jdtogregorian($jd);
// echo "$gregorian\n";
// [/php]
// The above example will output:
// [result]
// 2440871
// 10/11/1970
// [/result]
// [/example]
// [example]
// Example #2 Overflow behavior
// [php]
// echo gregoriantojd(2, 31, 2018), PHP_EOL,
//      gregoriantojd(3,  3, 2018), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// 2458181
// 2458181
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.gregoriantojd.php
// ========== GREGORIANTOJD - END

// SYNTAX:
// int gregoriantojd(int $month, int $day, int $year)

return $return_gregoriantojd; // int
}
// ============================== END
// PHP_DATE_CALENDAR_GREGORIANTOJD
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_JDDAYOFWEEK 
// ============================== PUBLIC
// ============================== ABOUT
// Returns the day of the week.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jddayofweek() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== USING CONSTANTS (1)
// CAL_DOW_DAYNO - jddayofweek()
// ============================== CODE
function php_date_calendar_jddayofweek($julian_day, $mode = CAL_DOW_DAYNO)
{
$return_jddayofweek = 0;

// ========== JDDAYOFWEEK - BEGIN
// ===== ABOUT
// Returns the day of the week
// ===== DESCRIPTION
// Returns the day of the week. Can return a string or an integer depending on the mode.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jddayofweek(int $julian_day, int $mode = CAL_DOW_DAYNO): int|string
// ===== CODE
$return_jddayofweek = jddayofweek(

$julian_day, // int julian_day - A julian day number as integer

$mode // int mode - Calendar week modes
// Mode        - Meaning
// 0 (Default) - Return the day number as an int (0=Sunday, 1=Monday, etc)
// 1           - Returns string containing the day of week (English-Gregorian)
// 2           - Return a string containing the abbreviated day of week (English-Gregorian)

); // Return Values
// The gregorian weekday as either an integer or string.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jddayofweek.php
// ========== JDDAYOFWEEK - END

// SYNTAX:
// int|string jddayofweek(int $julian_day, int $mode = CAL_DOW_DAYNO)

return $return_jddayofweek; // int|string
}
// ============================== END
// PHP_DATE_CALENDAR_JDDAYOFWEEK 
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_JDMONTHNAME 
// ============================== PUBLIC
// ============================== ABOUT
// Returns a month name.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jdmonthname() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jdmonthname($julian_day, $mode)
{
$return_jdmonthname = null;

// ========== JDMONTHNAME - BEGIN
// ===== ABOUT
// Returns a month name
// ===== DESCRIPTION
// Returns a string containing a month name. mode tells this function which calendar to convert the Julian Day Count to, and what type of month names are to be returned.
// Calendar modes
// Mode                      - Meaning                 ; Values
// CAL_MONTH_GREGORIAN_SHORT - Gregorian - abbreviated ; Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec
// CAL_MONTH_GREGORIAN_LONG  - Gregorian               ; January, February, March, April, May, June, July, August, September, October, November, December
// CAL_MONTH_JULIAN_SHORT    - Julian - abbreviated    ; Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec
// CAL_MONTH_JULIAN_LONG     - Julian                  ; January, February, March, April, May, June, July, August, September, October, November, December
// CAL_MONTH_JEWISH          - Jewish                  ; Tishri, Heshvan, Kislev, Tevet, Shevat, Adar, Adar I, Adar II, Nisan, Iyyar, Sivan, Tammuz, Av, Elul
// CAL_MONTH_FRENCH          - French Republican       ; Vendemiaire, Brumaire, Frimaire, Nivose, Pluviose, Ventose, Germinal, Floreal, Prairial, Messidor, Thermidor, Fructidor, Extra
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jdmonthname(int $julian_day, int $mode): string
// ===== CODE
$return_jdmonthname = jdmonthname(

$julian_day, // int jday - The Julian Day to operate on

$mode // int mode - The calendar mode (see table above).

); // Return Values
// The month name for the given Julian Day and mode.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jdmonthname.php
// ========== JDMONTHNAME - END

// SYNTAX:
// string jdmonthname(int $julian_day, int $mode)

return $return_jdmonthname; // string
}
// ============================== END
// PHP_DATE_CALENDAR_JDMONTHNAME 
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_JDTOFRENCH  
// ============================== PUBLIC
// ============================== ABOUT
// Converts a Julian Day Count to the French Republican Calendar.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jdtofrench() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jdtofrench($julian_day)
{
$return_jdtofrench = null;

// ========== JDTOFRENCH - BEGIN
// ===== ABOUT
// Converts a Julian Day Count to the French Republican Calendar
// ===== DESCRIPTION
// Converts a Julian Day Count to the French Republican Calendar.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jdtofrench(int $julian_day): string
// ===== CODE
$return_jdtofrench = jdtofrench(

$julian_day // int julian_day - A julian day number as integer

); // Return Values
// The french revolution date as a string in the form "month/day/year"
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jdtofrench.php
// ========== JDTOFRENCH - END

// SYNTAX:
// string jdtofrench(int $julian_day)

return $return_jdtofrench; // string
}
// ============================== END
//  PHP_DATE_CALENDAR_JDTOFRENCH  
// ==============================


// ============================== BEGIN
// PHP_DATE_CALENDAR_JDTOGREGORIAN
// ============================== PUBLIC
// ============================== ABOUT
// Converts Julian Day Count to Gregorian date.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jdtogregorian() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jdtogregorian($julian_day)
{
$return_jdtogregorian = null;

// ========== JDTOGREGORIAN - BEGIN
// ===== ABOUT
// Converts Julian Day Count to Gregorian date
// ===== DESCRIPTION
// Converts Julian Day Count to a string containing the Gregorian date in the format of "month/day/year".
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jdtogregorian(int $julian_day): string
// ===== CODE
$return_jdtogregorian = jdtogregorian(

$julian_day // int julian_day - A julian day number as integer

); // Return Values
// The gregorian date as a string in the form "month/day/year"
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jdtogregorian.php
// ========== JDTOGREGORIAN - END

// SYNTAX:
// string jdtogregorian(int $julian_day)

return $return_jdtogregorian; // string
}
// ============================== END
// PHP_DATE_CALENDAR_JDTOGREGORIAN
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_JDTOJEWISH  
// ============================== PUBLIC
// ============================== ABOUT
// Converts a Julian day count to a Jewish calendar date.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jdtojewish() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jdtojewish($julian_day, $hebrew = false, $flags = 0)
{
$return_jdtojewish = null;

// ========== JDTOJEWISH - BEGIN
// ===== ABOUT
// Converts a Julian day count to a Jewish calendar date
// ===== DESCRIPTION
// Converts a Julian Day Count to the Jewish Calendar.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jdtojewish(int $julian_day, bool $hebrew = false, int $flags = 0): string
// ===== CODE
$return_jdtojewish = jdtojewish(

$julian_day, // int julian_day - A julian day number as integer

$hebrew, // bool hebrew - If the hebrew parameter is set to true, the flags parameter is used for Hebrew, ISO-8859-8 encoded string based, output format.

$flags // int flags - A bitmask which may consist of CAL_JEWISH_ADD_ALAFIM_GERESH, CAL_JEWISH_ADD_ALAFIM and CAL_JEWISH_ADD_GERESHAYIM.

); // Return Values
// The Jewish date as a string in the form "month/day/year", or an ISO-8859-8 encoded Hebrew date string, according to the hebrew parameter.
// 
// [examples]
// Examples
// [example]
// Example #1 jdtojewish() Example
// [php]
// $jd = gregoriantojd(10, 8, 2002);
// echo jdtojewish($jd, true), PHP_EOL,
//      jdtojewish($jd, true, CAL_JEWISH_ADD_GERESHAYIM), PHP_EOL,
//      jdtojewish($jd, true, CAL_JEWISH_ADD_ALAFIM), PHP_EOL,
//      jdtojewish($jd, true,CAL_JEWISH_ADD_ALAFIM_GERESH), PHP_EOL;
// [/php]
// The above example will output:
// [result]
// ב חשון התשסג
// ב' חשון התשס"ג
// ב חשון ה אלפים תשסג
// ב חשון ה'תשסג
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-12-25)
// URL: https://www.php.net/manual/en/function.jdtojewish.php
// ========== JDTOJEWISH - END

// SYNTAX:
// string jdtojewish(int $julian_day, bool $hebrew = false, int $flags = 0)

return $return_jdtojewish; // string
}
// ============================== END
//  PHP_DATE_CALENDAR_JDTOJEWISH  
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_JDTOJULIAN  
// ============================== PUBLIC
// ============================== ABOUT
// Converts a Julian Day Count to a Julian Calendar Date.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jdtojulian() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jdtojulian($julian_day)
{
$return_jdtojulian = null;

// ========== JDTOJULIAN - BEGIN
// ===== ABOUT
// Converts a Julian Day Count to a Julian Calendar Date
// ===== DESCRIPTION
// Converts Julian Day Count to a string containing the Julian Calendar Date in the format of "month/day/year".
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jdtojulian(int $julian_day): string
// ===== CODE
$return_jdtojulian = jdtojulian(

$julian_day // int julian_day - A julian day number as integer

); // Return Values
// The julian date as a string in the form "month/day/year"
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jdtojulian.php
// ========== JDTOJULIAN - END

// SYNTAX:
// string jdtojulian(int $julian_day)

return $return_jdtojulian; // string
}
// ============================== END
//  PHP_DATE_CALENDAR_JDTOJULIAN  
// ==============================


// ============================== BEGIN
//   PHP_DATE_CALENDAR_JDTOUNIX   
// ============================== PUBLIC
// ============================== ABOUT
// Convert Julian Day to Unix timestamp.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jdtounix() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jdtounix($julian_day)
{
$return_jdtounix = 0;

// ========== JDTOUNIX - BEGIN
// ===== ABOUT
// Convert Julian Day to Unix timestamp
// ===== DESCRIPTION
// This function will return a Unix timestamp corresponding to the Julian Day given in julian_day. The time returned is UTC.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jdtounix(int $julian_day): int
// ===== CODE
$return_jdtounix = jdtounix(

$julian_day // int julian_day - A julian day number between 2440588 and 106751993607888 on 64bit systems, or between 2440588 and 2465443 on 32bit systems.

); // Return Values
// The unix timestamp for the start (midnight, not noon) of the given Julian day
// 
// Errors/Exceptions
// If julian_day is outside of the allowed range, a ValueError is thrown.
// 
// Changelog
// Version        - Description
// 8.0.0          - This function no longer returns false on failure, but raises a ValueError instead.
// 7.3.24, 7.4.12 - The upper limit of julian_day has been extended. Previously, it was 2465342 regardless of the architecture.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jdtounix.php
// ========== JDTOUNIX - END

// SYNTAX:
// int jdtounix(int $julian_day)

return $return_jdtounix; // int
}
// ============================== END
//   PHP_DATE_CALENDAR_JDTOUNIX   
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_JEWISHTOJD  
// ============================== PUBLIC
// ============================== ABOUT
// Converts a date in the Jewish Calendar to Julian Day Count.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// jewishtojd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_jewishtojd($month, $day, $year)
{
$return_jewishtojd = 0;

// ========== JEWISHTOJD - BEGIN
// ===== ABOUT
// Converts a date in the Jewish Calendar to Julian Day Count
// ===== DESCRIPTION
// Although this function can handle dates all the way back to the year 1 (3761 B.C.), such use may not be meaningful. The Jewish calendar has been in use for several thousand years, but in the early days there was no formula to determine the start of a month. A new month was started when the new moon was first observed.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// jewishtojd(int $month, int $day, int $year): int
// ===== CODE
$return_jewishtojd = jewishtojd(

$month, // int month - The month as a number from 1 to 13, where 1 means Tishri, 13 means Elul, and 6 and 7 mean Adar in regular years, but Adar I and Adar II, respectively, in leap years.

$day, // int day - The day as a number from 1 to 30. If the month has only 29 days, the first day of the following month is assumed.

$year // int year - The year as a number between 1 and 9999

); // Return Values
// The julian day for the given jewish date as an integer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.jewishtojd.php
// ========== JEWISHTOJD - END

// SYNTAX:
// int jewishtojd(int $month, int $day, int $year)

return $return_jewishtojd; // int
}
// ============================== END
//  PHP_DATE_CALENDAR_JEWISHTOJD  
// ==============================


// ============================== BEGIN
//  PHP_DATE_CALENDAR_JULIANTOJD  
// ============================== PUBLIC
// ============================== ABOUT
// Converts a Julian Calendar date to Julian Day Count.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// juliantojd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_juliantojd($month, $day, $year)
{
$return_juliantojd = 0;

// ========== JULIANTOJD - BEGIN
// ===== ABOUT
// Converts a Julian Calendar date to Julian Day Count
// ===== DESCRIPTION
// Valid Range for Julian Calendar 4713 B.C. to 9999 A.D.
// Although this function can handle dates all the way back to 4713 B.C., such use may not be meaningful. The calendar was created in 46 B.C., but the details did not stabilize until at least 8 A.D., and perhaps as late at the 4th century. Also, the beginning of a year varied from one culture to another - not all accepted January as the first month.
// Caution: Remember, the current calendar system being used worldwide is the Gregorian calendar. gregoriantojd() can be used to convert such dates to their Julian Day count.
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// juliantojd(int $month, int $day, int $year): int
// ===== CODE
$return_juliantojd = juliantojd(

$month, // int month - The month as a number from 1 (for January) to 12 (for December)

$day, // int day - The day as a number from 1 to 31

$year // int year - The year as a number between -4713 and 9999

); // Return Values
// The julian day for the given julian date as an integer.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.juliantojd.php
// ========== JULIANTOJD - END

// SYNTAX:
// int juliantojd(int $month, int $day, int $year)

return $return_juliantojd; // int
}
// ============================== END
//  PHP_DATE_CALENDAR_JULIANTOJD  
// ==============================


// ============================== BEGIN
//   PHP_DATE_CALENDAR_UNIXTOJD   
// ============================== PUBLIC
// ============================== ABOUT
// Convert Unix timestamp to Julian Day.
// ============================== SUPPORT
// PHP_4 - PHP_8
// ============================== USING FUNCTIONS (1)
// unixtojd() - PHP_4, PHP_5, PHP_7, PHP_8
// ============================== CODE
function php_date_calendar_unixtojd($timestamp = null)
{
$return_unixtojd = 0;

// ========== UNIXTOJD - BEGIN
// ===== ABOUT
// Convert Unix timestamp to Julian Day
// ===== DESCRIPTION
// Return the Julian Day for a Unix timestamp (seconds since 1.1.1970), or for the current day if no timestamp is given. Either way, the time is regarded as local time (not UTC).
// ===== SUPPORTED
// PHP_4, PHP_5, PHP_7, PHP_8
// ===== SYNTAX
// unixtojd(?int $timestamp = null): int|false
// ===== CODE
$return_unixtojd = unixtojd(

$timestamp // int timestamp - A unix timestamp to convert.

); // Return Values
// A julian day number as integer, or false on failure.
// 
// Changelog
// Version - Description
// 8.0.0   - timestamp is nullable now.
// ===== LITERATURE_SOURCES
// * PHP_NET (2023-10-01)
// URL: https://www.php.net/manual/en/function.unixtojd.php
// ========== UNIXTOJD - END

// SYNTAX:
// int|false unixtojd(int $timestamp = null)

return $return_unixtojd; // int|false
}
// ============================== END
//   PHP_DATE_CALENDAR_UNIXTOJD   
// ==============================


// ============================== END
//       PHP_DATE_CALENDAR       
// ==============================
?>