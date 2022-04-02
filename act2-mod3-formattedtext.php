<!DOCTYPE html>
<html>
    <head>
        <title>
            Formatted  Text
        </title>
    </head>
<body>
    
    <?php
        $Books = array("The Adventures of Huckleberry Finn",
        "Nineteen Eighty-Four",
        "Alice's Adventures in Wonderland",
        "The Cat in the Hat");

        $Authors = array("Mark Twain",
        "George Orwell",
        "Lewis Carroll",
        "Dr. Seuss");

        $RealNames = array("Samuel Clemens",
        "Eric Blair",
        "Charles Dodson",
        "Theodor Geisel");

        for ($i = 0; $i < count($Books); ++$i)
        echo "<p>The real name of {$Authors[$i]}, ".
        "the author of \"{$Books[$i]}\", ".
        "is {$RealNames[$i]}.</p>";
    ?>


</body>
</html>