<!DOCTYPE html>
<html>
    <head>
       <title>Arrays</title>  
    </head>
    <body>
        <header>
        <li><a href="https://quiztrial.000webhostapp.com/arrays_code.txt">Source Code</a></li>
        </header>
    <?php
        echo"1.Create an array that associates student names with their heights. Print the array using foreach
        loop. Also print the results after each of the following sorting<br/>";
        $students= array("Kumar"=>"5.4 Feet", "Ankil"=>"6 Feet", "Zeref"=>"5.2 Feet");
        print_r($students);
        echo "<br/>";
                foreach($students as $x=>$y)
                echo "$x=>$y<br>";
                echo "a)ascending order by student name<br>";
                ksort($students);
                foreach($students as $x=>$y)
                echo "$x=>$y<br>";
                echo "b)ascending order by height<br>";
                asort($students);
                foreach($students as $x=>$y)
                echo "$x=>$y<br>";
                echo "c)descending order by student name<br>";
                krsort($students);
                foreach($students as $x=>$y)
                echo "$x=>$y<br>";
                echo "d)descending order by height<br>";
                arsort($students);
                foreach($students as $x=>$y)
                echo "$x=>$y<br>";
                
        echo"2. Reverse an array.";        
        echo "<br/>";
         $fruits=array("Gauvava","Coconut","Grapes","Banana","Apple","Orange");
         print_r($fruits);
            echo "<br>";
            print_r(array_reverse($fruits));
            echo "<br>";
        echo"3. Add an element to the end of an array, and delete the last element from an array.";
            echo "<br>";
            echo "After inserting at end<br>";
            array_push($fruits,"Date");
            print_r($fruits);
            echo "<br>";
            echo "After Deletion at end<br>";
            array_pop($fruits);
            print_r($fruits);
            echo "<br>";
        echo"4. Add an element at the beginning of an array, and delete the first element from an array.";
            echo "<br>";
            echo "After inserting at Beginning<br>";
            array_unshift($fruits,"Mango");
            print_r($fruits);
            echo "<br>";
            echo "After Deletion at Beginning<br>";
            array_shift($fruits);
            print_r($fruits);
            echo "<br>";
        echo("5. Insert a new element in an array in any specified position.");
            echo "<br>";
            echo "Before Insertion";
            echo "<br>";
            print_r($fruits);
            echo"<br>";
            $value="Pineapple";
            $pos=3;
            array_splice( $fruits, $pos, 0, $value ); 
            echo "After insertion ";
            echo "<br>";
            print_r($fruits);
            echo "<br>";
        echo("6. Count the total number of times a specific value appears in an array.");
            echo "<br>";
            $tocount=array("1","4","6","1","-3","6","4");
            echo"Example Array:";
            echo "<br>";
            print_r($tocount);
            echo "<br>";
            print_r(array_count_values($tocount));
            echo "<br>";
        echo("7. Remove duplicate values from an array.");
            echo "Array before removal of duplicate values:";
            print_r($tocount);
            echo "<br>";
            echo "After removal of duplicate values:";
            $uniquearray = array_unique($tocount);
            print_r($uniquearray);
            echo "<br>";
        echo("8. Remove specific elements from an array.");
            echo "<br>";
            echo "Array before removal of specific element:";
            print_r($tocount);
            echo "<br>";
            $val = -3;
            if (($key = array_search($val, $tocount)) !== false) {
            unset($tocount[$key]);
            }
            print("Array after removal of specific element:");
            print_r($tocount);
            echo "<br>";
        echo("9. Convert the contents of an array to a string.");
            echo"<br>";
            $arrtostrng = array("This", "is", "me");
            echo "Elements of array before coversion:- ";
            print_r($arrtostrng);
            echo "<br>";
            print("The string version of the array is: ");
            echo implode(" ", $arrtostrng);
            echo "<br>";
        echo("10. Convert a string so that the individual words in the string become array elements.");
            echo "<br>";
            $strng = 'This is me';
            $strngtoarr = explode(" ", $strng);
            echo "The converted array is: <br>";
            print_r($strngtoarr);
            echo "<br>";
        echo("11. Write a function to check whether a variable is numeric or not, and if it is numeric, then whether it is
                integer or not.");
            echo "<br>";
            function check_numeric($val)
            {
                if (is_numeric($val)) {
                    if (is_int($val)) {
                        echo $val . " is integer<br>";
                    }
                } else {
                    echo $val . " is not numeric<br>";
                }
            }
            $val1 = 53;
            $val2 = "Satish";
            check_numeric($val1);
            check_numeric($val2);
        echo("12. Write a function sumDigit() that returns the sum of the digits of an integer.");
            echo "<br>";
            function sum_of_digits($num)
                {
                    $sum = 0;
                        while ($num != 0) {
                    $sum = $sum + $num % 10;
                    $num = $num / 10;
                }
                return $sum;
                }
    
                $num = 123;
                echo ("The result is = " . sum_of_digits($num));
                echo "<br>";
        echo "13. Write a function named gcd() that accepts two integers as parameters and returns the greatest
                  common divisor (GCD) of the two numbers.";
                echo "<br>";
                function gcd($num1, $num2)
                {
                    for ($i = 1; $i <= $num1 && $i <= $num2; ++$i) {
                            if ($num1 % $i == 0 && $num2 % $i == 0)
                            $res = $i;
                     }
                    return $res;
                }
                $num1 = 81;
                $num2 = 153;
                echo ("The gcd of the two numbers is = " . gcd($num1, $num2));
        


        

   ?>
   </body>
</html>