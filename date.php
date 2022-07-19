<!DOCTYPE html>
<html>
    <head>
       <title>Arrays</title>  
    </head>
    <body>
        <header>
        <li><a href="https://quiztrial.000webhostapp.com/date_code.txt">Source Code</a></li>
        </header>
<?php
 echo date('Y')."<br>";
 echo "<hr>";
 
echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("d/m/Y") . "<br>";
echo "<hr>";

$date1=date_create("2021-03-15");
$date2=date_create("2020-10-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<hr>";

echo "<br>";
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<br>";
echo "<hr>";

$date = "2021-10-11";
echo "Displaying date...";
echo "<br>";
echo "Date = $date";
echo "<br>";
$month_name = date("F", mktime(0, 0, 0, 10, 10));
echo "\nMonth = ".$month_name."\n";
echo "<br>";
echo "<hr>";

echo "Yesterday date: ".date('d.m.Y',strtotime("-1 days"));
echo "<br>";
echo "<hr>";

$dt='2021-11-14';
        $dt1 = strtotime($dt);
        $dt2 = date("l", $dt1);
        $dt3 = strtolower($dt2);
    if(($dt3 == "saturday" )|| ($dt3 == "sunday"))
        {
            echo $dt3.' is weekend'."\n";
        } 
    else
        {
            echo $dt3.' is not weekend'."\n";
        }
        
echo "<hr>";        
$dt='2021-11-11';
echo 'Original date : '.$dt."\n";
echo "<br>";
$no_days = 30;
$bdate = strtotime("-".$no_days." days", strtotime($dt));
$adate = strtotime("+".$no_days." days", strtotime($dt));
echo 'Before 30 days : '.date("Y-m-d", $bdate)."\n";
echo "<br>";
echo 'After  30 days : '.date("Y-m-d", $adate)."\n";
echo "<br>";
echo "<hr>";

$dob='1999-05-17';
echo "Date of Birth: ".$dob;
echo "<br>";
$diff = (date('Y') - date('Y',strtotime($dob)));
echo "Age: ".$diff;

?>
   </body>
</html>