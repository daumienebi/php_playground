<!DOCTYPE html>
<html>
  <head>
    <style>
        h1{
            color : green
        }

        h3{
            color : brown
            
        }

        .highlight{

        }
    </style>
  </head>
  <body>
    <h1> Date and time stuffs</h1>
    <h3>Date and time</h3>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l"). "<br>";
        echo date('l, F j, Y');
          
    ?>
    <p>Automatic copyright year update :</p>
    &copy; 2016-<?php echo date("Y");?>
    
    <p>Using different timezones :</p>
    <?php
        date_default_timezone_set("America/New_York");
        echo "The current date and time with America / New York time zone is  " . date("Y-m-d H:i:s");

        date_default_timezone_set("utc");
        echo "<br>The current date and time with Nigeria time zone is  " . date("Y-m-d H:i:s");
        echo("<br><i>We use utc + 1 but i think i cant put that correctly here, skill issue at its finest level</i>");

        echo("<br><br> The current timestamp : ");
        // Get the current Unix timestamp
        $ts = time();

        // Format timestamp
        $curDate = date('Y-m-d H:i:s', $ts); 

        echo $curDate;

        echo("<br><br><b> PHP has this interesting strtotime function thats pretty good in converting string to date and time</b>");
        $d = strtotime("10:30pm November 15 2025");
        echo("<br>Input : \"10:30pm November 15 2025\"<br>");
        echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

        $d = strtotime("now");
        echo("<br>Input : \"now\"<br>");
        echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

        $d = strtotime("+5 days");
        echo("<br>Input : \"+5 days\"<br>");
        echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

        $d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
        echo("<br>Input : \"+2 weeks 4 days 2 hours 20 seconds\"<br>");
        echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

        $d = strtotime("last Sunday");
        echo("<br>\"Input : last Sunday\"<br>");
        echo "Date is " . date("Y-m-d H:i:s", $d);
    ?>
</body>
</html>
