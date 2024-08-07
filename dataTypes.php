<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes</title>
</head>
<body>
    <?php
    $counter = 0;
    echo "<h2>Different data types in PHP👀  </h2> <hr>";
    echo "<h3>" .  ++$counter . ". Strings </h3>";
    echo "A string is a sequence of characters enclosed in single quotes (') or double quotes (\"). <br>";
    echo "<b>\$character = \"Rakesh\"; </b>";
    echo " 👈 this is how we define a string variable.";

    echo "<h3>" .  ++$counter . ". Integer </h3>";
    echo "An integer is a non-decimal number between -2,147,483,648 and 2,147,483,647. <br>";
    echo "<b>\$age = \"30\"; </b>";
    echo " 👈 this is how we define a number variable.";

    echo "<h3>" .  ++$counter . ".  Float (Double) </h3>";
    echo "A float (floating point number) is a number with a decimal point or a number in exponential form. <br>";
    echo "<b>\$gpa = \"30.0\"; </b>";
    echo " 👈 this is how we define a Floating number variable.";
    echo "<br>There is a big difference between <b>30</b> and <b>30.0</b> in PHP.";

    echo "<h3>" .  ++$counter . ". Boolean </h3>";
    echo "A boolean represents two possible states: true or false. <br>";
    echo "<b>\$isMale  = \"true\"; </b><br>";
    echo "<b>\$isFemale   = \"false\"; </b> <br>";
    echo " 👆 this is how we define a boolean variable.";

    echo "<h3>" .  ++$counter . ". Array </h3>";
    echo "An array stores multiple values in one single variable. <br>";
    echo " <b>\$fruits = array(\"Apple\", \"Banana\", \"Cherry\");</b>";
    echo " 👈 this is how we define an array. <br>";
    echo "<b>echo \$array[0]; </b>" . "// Outputs: Apple";

    echo "<h3>" .  ++$counter . ". Associative Array </h3>";
    echo "An associative array uses named keys that you assign to them.. <br>";
    echo " <b>\$assocArray = array(\"name\" => \"John\", \"age\" => 30); </b>";
    echo " 👈 this is how we define an Associative array. <br>";
    echo "<b>echo \$array[name]; </b> // Outputs: John";

    ?>
</body>
</html>