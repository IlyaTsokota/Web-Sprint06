<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normal time</title>
</head>

<body>
    <?
   function calculate_time() {
    $date_now = date_create("NOW");
    $date_old = date_create("01.01.1939");
    return  date_diff($date_now,$date_old);
}
    $time = calculate_time();
    echo "<p>In real life you were absent for " . $time->format("%Y") . " years, " .
    $time->format("%m") . " months, " . $time->format("%d") . " days</p>";
    ?>
</body>

</html>
