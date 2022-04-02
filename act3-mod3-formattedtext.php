<!DOCTYPE html>
<html>
    <head>
        <title>
            Title Information
        </title>
    </head>
<body>
    <?php
        $Books = array("The Adventures of Huckleberry Finn",
        "Nineteen Eighty-Four",
        "Alice's Adventures in Wonderland",
        "The Cat in the Hat");

        for ($i = 0; $i < count($Books); ++$i)
        echo "<p>The title \"{$Books[$i]}\" contains " .
         strlen($Books[$i]) . " characters and " .
         str_word_count($Books[$i]) . " words.</p>";
    ?>
</body>
</html>