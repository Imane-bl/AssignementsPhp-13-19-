<?php
/*
a loosely typed language, variable types are not explicitly declared, allowing them to be dynamically interpreted during runtime. This means you don't have to specify the type of a variable when declaring it. PHP automatically determines the type based on the value assigned to it.

For example:

php

Copy code
$variable = "Hello";  // $variable is a string
$number = 123;        // $number is an integer
$floatNumber = 3.14;  // $floatNumber is a float

// You can later assign a different type of value to the same variable
$variable = 123;      // Now $variable is an integer?>


In PHP, predefined variables are special variables that are already defined by the language and are accessible in any part of your script. These variables contain information about the server, request, environment, and other aspects of the PHP runtime. Here are some commonly used predefined variables in PHP:

SuperGLOBALS:

$_GET: Associative array containing data sent to the script via URL query parameters.
$_POST: Associative array containing data sent to the script via HTTP POST method.
$_REQUEST: Combines $_GET, $_POST, and $_COOKIE into a single array.
Server Information:

$_SERVER: Associative array containing information about the server and the execution environment.
$_SERVER['HTTP_USER_AGENT']: User agent string of the browser.
$_SERVER['SERVER_NAME']: Name of the server host.
Session Variables:

$_SESSION: Associative array used to store session variables.
Cookies:

$_COOKIE: Associative array containing values sent to the script via HTTP cookies.
File Uploads:

$_FILES: Associative array containing information about file uploads via HTTP POST.
Environment Variables:

$_ENV: Associative array containing environment variables.
Error Handling:

$php_errormsg: Contains the error message from the last error that occurred.
Globals:

$GLOBALS: Associative array containing all global variables.
Input/Output Buffering:

$_GET, $_POST, etc.: Can be used to access input values even if register_globals is turned off.
/****************************************************


Magic Constants:

__LINE__: The current line number of the file.
__FILE__: The full path and filename of the file.
__DIR__: The directory of the file.
Class Constants:

__CLASS__: The class name.
__METHOD__: The class method name.
__NAMESPACE__: The name of the current namespace.
Error Handling:

E_ERROR, E_WARNING, E_PARSE, E_NOTICE: Error levels.
E_ALL: All errors and warnings.
PHP_VERSION: The current PHP version.
PHP_OS: The operating system PHP is running on.
Filesystem Constants:

DIRECTORY_SEPARATOR: Directory separator (slash or backslash).
PATH_SEPARATOR: Path separator in include_path (colon on Unix, semicolon on Windows).
Environment Constants:

PHP_EOL: End of line character.
PHP_INT_MAX: Maximum integer value.
PHP_INT_SIZE: Size of an integer in bytes.
Date and Time Constants:

DATE_ATOM, DATE_COOKIE, DATE_RFC822: Date formats.
TIMEZONE_*: Timezone constants.
HTTP Constants:

PHP_URL_*: URL parsing constants.
PHP_QUERY_*: URL encoding constants.
Miscellaneous:

TRUE, FALSE, NULL: Boolean and null values.
PHP_BINDIR: The PHP binary directory.
PHP_BINARY: The PHP binary path.
Database Constants:

MYSQLI_*: MySQLi extension constants.


for transfer to number int --> (int)$a/(intval($a)/ (-"-$a"))
*/
