<!DOCTYPE html>
<html>
    <head>
        <title>
            Formatted Text
        </title>
    </head>
<body>
    <?php

    $DisplayValue = 9.876;
    
    echo "<pre>\n";
    echo "Unformatted text line 1.";
    echo "Unformatted text line 2.";
    echo "$DisplayValue = $DisplayValue";
    echo "</pre>\n";
   
   
    echo "<pre>\n";
    echo "Formatted text line 1. \r\n";
    echo "\tFormatted text line 2. \r\n";
    echo "$DisplayValue=$DisplayValue";
    echo "</pre>\n";
   
    ?>
    </body>
</html>
