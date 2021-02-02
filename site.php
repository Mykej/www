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
        ?>
    </body>
</html>