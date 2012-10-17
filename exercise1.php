<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<b>Exercise 1.1</b><br/>";
        echo date("r");                                 

        echo "<br/><br/><b>Exercise 1.2</b><br/>";
        echo date("l jS F Y");                          

        echo "<br/><br/><b>Exercise 1.3</b><br/>";
        $todayTime = date("G");                         
        if ($todayTime >= 5 && $todayTime < 12)
            {
            echo "It is Morning";
            }
        elseif ($todayTime >= 12 && $todayTime < 17)
            {
            echo "It is Afternoon";
            }
        elseif ($todayTime >= 17 && $todayTime < 21)
            {
            echo "It is Evening";
            }

        echo "<br/><br/><b>Exercise 1.4</b><br/>";
        for ($count = 1; $count <= 10; ++$count)        
            { 
            echo $count . "= Hello" . "<br/>";
            }

        echo "<br/><b>Exercise 1.5</b><br/>";
        for ($n = 1; $n <= 10; ++$n)
            {
            echo $n . " Square= " . $n * $n . "<br/>";
            }
        ?>
        <p><b>Exercise 1.6</b></p>
        <table align="left" border="1" width="100">
            <tr>
                <th>Base</th>
                <th>Square</th>
            </tr>
                <?php
                for ($n = 1; $n <= 10; ++$n)
                    {
                    echo "<tr>";
                    echo "<td>" . $n . "</td>\n";
                    echo "<td>" . $n * $n . "</td>\n";
                    echo "</tr>";
                    }
                ?>
        </table>
    </body>
</html>
