<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
    <h1>Plus 1 more!</h1>
        <?php
        $name = $_REQUEST['txtName'];
        $age = $_REQUEST['txtAge'];
        echo "<p>Your name is $name</p>";
        echo "<p>Your age is $age</p>";
        $ageNextYear = $age + 1;
        echo "<p>Next year, <B>you will be $ageNextYear</B>.</p>";
        ?>
    </body>
</html>
