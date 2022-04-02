<!DOCTYPE html>
<html>
    <head>
        <title>
            Formatted  Text
        </title>
    </head>
<body>
    <?php
        $StartingText = "mAdAm, i'M aDaM.";
        $UppercaseText = strtoupper($StartingText);
        $LowercaseText = strtolower($StartingText);
        echo "<p>$UppercaseText</p>\n";
        echo "<p>$LowercaseText</p>\n";

        echo "<p>" . ucfirst($LowercaseText) . "</p>\n";
        echo "<p>" . lcfirst($UppercaseText) . "</p>\n";
        $WorkingText = ucwords($LowercaseText);
        echo "<p>$WorkingText</p>\n";

        echo "<p>" . md5($WorkingText) . "</p>\n";
        echo "<p>" . substr($WorkingText,0,6) . "</p>\n";
        echo "<p>" . substr($WorkingText,7) . "</p>\n";
        echo "<p>" . strrev($WorkingText) . "</p>\n";
        echo "<p>" . str_shuffle($WorkingText) . "</p>\n";
    ?>

</body>
</html>