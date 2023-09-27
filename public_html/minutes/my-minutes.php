<html>
<head>
    <title>PHP date function</title>
</head>
<body>
<?php
    // learn more at https://www.php.net/manual/en/function.date

    // print the current day of the week with the date function (e.g., Monday, Tuesday, etc.)
    echo date("l") . "<br>";

    // print the current date with the date function in the format: day of the week, day of the month, month, year, time, and whether it is AM or PM
    echo date("l jS \of F Y h:i:s A") . "<br>";

    // print the array from getdate() which contains the date and time information of the current date/time.
    print "<em>";
    print_r(getdate());
    print "</em>" ."<br>";

    // print the array from gettimeofday() which contains the current time information.
    print "<em>";
    print_r(gettimeofday());
    print "</em>" ."<br>";

    echo "<hr>";

    //print the timezone using the function date_default_timezone_get
    echo date_default_timezone_get();

    echo "<hr>";

    //set the timezone to Australia/Sydney
    date_default_timezone_set("Australia/Sydney");

    //print the timezone again
    echo date_default_timezone_get();

    echo "<hr>";

    // unix timestamp
    /*
        The time() function returns the current time in the number of seconds since the Unix Epoch
        (January 1 1970 00:00:00 GMT).
    */
    $t=time();
    echo($t . "<br>");

    // print the current Unix timestamp as a date in the "YYYY-MM-DD" format.
    echo(date("Y-m-d",$t));

    echo "<hr>";

    // declare two dates using the strtotime() function which parses an English language description of a date into a Unix timestamp
    // strtotime : https://www.php.net/manual/en/function.strtotime.php
    $start_date = strtotime("2023-03-20");
    $end_date = strtotime("2023-09-22");

    /* get the difference in seconds
    and divide that by 60/60/24 to get the
    total number of days
    */
    echo "Difference between two dates: " . ($end_date - $start_date)/60/60/24 ." days". "<br>";

    echo "<hr>";

    // prints the day of a specific date using the mktime function which is useful when you need to specify a date/time other than the current one.
    // mktime : https://www.php.net/manual/en/function.mktime.php
    echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));
?>
</body>
</html>