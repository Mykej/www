<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title></title>
    </head>
    <body>

        <?php 
        //echo statement
            echo("<h1>Hello World!</h1>");
            echo('<hr>');
            echo('<p>This is my site</p>');
        ?>

        <br>
        <br>

        <?php
        //variables
            echo "<br>";
            $name = "Mike";
            $age = 30;
            echo"there once was a man named $name <br>";
            echo"He was $age years old <br>";
            $name = "Tom";
            echo"He really liked the name $name <br>";
            echo"But didn't like being $age <br>";
        ?>

        <br>
        <br>
        <?php
        //variables with different values
            echo "<br>";
            $phrase = "To be or not to be";
            $int = -23;
            $float = 23.43;
            $isMale = false;
            $arr = [1,2,3,4];
            null;
            echo ($phrase);
        ?>

        <br>
        <br>
        <?php
        //indexing variables
            echo "<br>";
            echo "Giraffe Academy <br>";
            $phrase = "Giraffe Acedemy";
            $phrase[0] = "B";
            echo $phrase[0];
            echo "<br>";
            echo $phrase[13];
        ?>
        <br>
        <br>
        <?php
            //strings
            echo "<br>";
            $phrase = "Giraffe Academy";
            echo str_replace("Giraffe", "Panda", $phrase);
        ?>

        <?php
            echo "<br>";
            $phrase = "Giraffe Academy";
            echo substr($phrase, 8, 4);
        ?>

        <br>
        <br>

        <?php
        //working with numbers
        echo "<br>";
        echo 5 + 9;
        echo "<br>";
        echo 5 - 9;
        echo "<br>";
        echo 5 / 9;
        echo "<br>";
        echo 5.7 * 9;
        echo "<br>";
        echo 10 % 3;
        echo "<br>";
        echo 4 + 5 * 10;
        echo "<br>";
        echo (4 + 5) * 10;
        echo "<br>";
        $num = 10;
        echo $num;
        echo "<br>";
        $num = 10;
        $num++; // --
        echo $num;
        echo "<br>";

        // Math functions
        echo "<br>";
        echo abs(-100);
        echo "<br>";
        echo pow(2, 4);
        echo "<br>";
        echo sqrt(144);
        echo "<br>";
        echo max(2, 10);
        echo "<br>";
        echo min(2, 10);
        echo "<br>";
        echo round(3.2);
        echo "<br>";
        echo ceil(3.3); //always round the number up.
        echo "<br>";
        echo floor(3.3); //always round the number down.
        echo "<br>";
        echo "<br>";
        ?>

        <?php //Getting user input | Forms ?>

        <form action = "site.php" method = "get">
            Name: <br> <input type = "text" name = "name">
            <br>
            Age: <br> <input type = "text" name = "age">
            <br>
            <input type = "submit" />
        </form>
        <br>

        Your name is <?php echo $_GET["name"]?>
        <br>
        Your age is <?php echo $_GET["age"] ?>


        <?php //Building a calculator(simple) ?>
        <form action = "site.php" method = "get">
            <input type = "number" name = "num1">
            <br>
            <input type = "number" name = "num2">
            <br>
            <input type = "submit"/>
        </form>

        Answer: <?php echo $_GET["num1"] + $_GET["num2"] 
        //Changing the values of the numbers in the url will also change the answer or value. *information that is submitted
        ?>

        <!-- Building a better calculator -->
        <br>
        <br>
        <form action = "site.php" method = "post">
            First Num: <input type = "number" step = "0.001" name = "num1"/> 
            <!-- We can use the 'step' attribute to include floating numbers in the calculator. -->
            <br>
            OP: <input type = "text" name = "op"/> <br>
            Second Num: <input type = "number" name = "num2"/> <br>
            <input type = "submit"/>
        </form>

        <?php 
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if($op == "+"){
                echo $num1 + $num2;
            } elseif($op == "-") {
                echo $num1 - $num2;
            } elseif($op == "*") {
                echo $num1 * $num2;
            } else if($op == "/") {
                echo $num1 / $num2;
            } else {
                echo "Invalid Operator";
            }

        ?>
        <br>
        <br>

        <?php //Building a mad libs game ?>

        <form action = "site.php" method = "get">
            <input type = "text"  name ="color" value = "Enter a Color">
            <input type = "text" name ="pluralNoun" value = "Enter a Plural Noun">
            <input type = "text" name ="celebrity" value = "Enter a Celebrity">
            <input type = "submit">
        </form>
        <br><br>

        <?php 
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];
            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?>
        <br><br>

        <?php //URL Parameters and the ability to modify data within the app from the URL?>
        <form action = "site.php" method = "get">
            Name: <input type = "text" name = "name"> <br>
            <input type = "submit">
        </form>
        <br><br>
        <?php
            echo $_GET["name"];
        ?>

        <?php //Post vs Get | Get will display the information in the URL parameter = not secure | Post does not allow user data to be passed to URL = more secure | method must be match line 188.?>
        <form action = "site.php" method = "get">
            Password: <input type = "password" name = "password"> <br>
            <input type = "submit">
        </form>
        <br><br>

        <?php 
            echo $_GET["password"];
        ?>

        <?php //Arrays ?>
        <?php 
            $friends = array("Kevin", 1, true, "Karen", "Oscar", "Jim");
            echo $friends;
            echo "<br>";
            echo $friends[2];
            echo "<br>";
            echo $friends[4];
            echo "<br>";
            $friends[5] = "Angela";
            echo $friends[4] = "Angela";
            echo "<br>";
            echo count($friends);
            echo "<br>";
            echo "<br>";
        ?>

        <?php //Using Checkboxes ?>

        <form action = "site.php" method = "post">
            Apples: <input type = "checkbox" name = "fruits[]" value = "apples"><br>
            Oranges: <input type = "checkbox" name = "fruits[]" value = "oranges"><br>
            Pears: <input type = "checkbox" name = "fruits[]" value = "pears"><br>
            <input type = "submit"/>
        </form>
        <?php 
            $fruits = $_POST["fruits"];
            echo $fruits[1];
            echo "<br>";
            echo "<br>";
        ?>

        <?php //Associative Arrays ?>
        <form action = "site.php" method = "post">
            <input type = "text" name = "student">
            <input type = "submit">
        </form>

        <?php 
            $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+"); //Key value pairs are mapped with "=>".
            $grades["Jim"] = "F <br>"; //modifying value in associative arrays
            echo $grades["Jim"];
            echo count($grades); //counts the number of key-value pairs in an array
            echo "<br>";
            echo $grades[$_POST["student"]]; //lines 224-227, use php to access array values using forms
            echo "<br>";
            echo "<br>";
        ?>

        <!--Functions |
            use the word 'function' to create a function then give the name of the function 'sayHi'. use parenthesis followed by open and closed brackets. functions are reusable code. -->
        <?php
            function sayHi($name, $age){
                echo "Hello $name, you are $age. <br>";
            }

            sayHi("Tim", 40); // call the function from line 243.
        ?>

        <!-- Return Statements |  -->
        <?php 
            function cube($num){
                return $num * $num * $num; //return breaks out of function, will be the last line of code to be executed
                echo "hello"; //doesn't get executed because of line 253.
            }
            $cubeResult = cube(4);
            echo $cubeResult;
            // echo cube(5); //shorthand of line 255-256
            echo "<br>";
            echo "<br>";
        ?>

        <!--If Statements | -->
        <?php 
            $isMale = true;
            $isTall - true;
            if ($isMale && $isTall){
                echo "You are a tall male";
            } elseif ($isMale && !$isTall) {
                echo "You are male and short.";
            } elseif (!$isMale && $isTall) {
                echo "you are not male but are tall";
            } else {
                echo "you are not male and not tall.";
            }
        
        ?>
        <!--If Statements con't | Comparisons Operators -->
        <?php
            echo "<br>";
            echo "<br>";
            function getMax($num1, $num2, $num3){
                if($num1 >= $num2 && $num1 >= $num3) {
                    return $num1;
                } elseif($num2 >= $num1 && $num2 >= $num3) {
                    return $num2;
                } else {
                    return $num3;
                }
            }
            echo getMax(3000, 1500, 900);
        ?>

        <br>
        <br>

        <!-- Switch Statements -->
        <form action = "site.php" method = "post">
            What was your grade?
            <input type = "text" name = "grade">
            <input type = "submit">
        </form>

        <?php //switch is a programming structure where the 'break' will break you out of the strucure when cases meet the criteria.
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break; //
            case "B":
                echo "You did pretty good.";
                break;
            case "C":
                echo "You can do better.";
                break;
            case "D":
                echo "You did poorly.";
                break;
            case "F":
                echo "You Failed!";
                break;
            default:
                echo "Invalid Grade";
        }
        ?>
        <br>
        <br>

        <!--While loops | Loop over a block of code while a certain condition is met | Keep repeating something as long as something is true -->
        <?php 
            $index = 1;
            while($index <= 5) {//loop body
                echo "$index <br>";
                $index++; 
            }
        ?>
        <br>
        <br>

        <!--Do While Loop -->
        <?php 
            $index = 6;
            do {
                echo "$index <br>";
                $index++; 
            } while($index <= 5);
        ?>
        <br>
        <br>

        <!-- For Loops -->
        <?php
            $luckyNumbers = array(4, 8, 14, 16, 23, 42);
            for($i = 0; $i < count($luckyNumbers); $i++) { //use the 'for' loop to loop through every number in the array.
                echo "$luckyNumbers[$i] <br>";
            }
        ?>
        <br>
        <br>

        <!-- Including HTML -->
        <!-- <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset = "utf-8/>
                        <title></title>
                    </head>
                    <body> -->
                        <!-- Allows us to include another file inside out php file -->

                        <?php
                            include"header.html"
                        ?>
                    <!--</body>
                </html> -->

    </body>
</html>