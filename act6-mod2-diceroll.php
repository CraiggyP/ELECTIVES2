<!DOCTYPE hmtl>
<html>
 <head>
     <title>
            Dice Rolling
     </title>
 <head>
<body>

<?php
    $FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
    $FaceNamesPlural = array("ones", "twos","threes", "fours", "fives", "sixes");
    $DoublesCount = 0;
    $RollNumber = 1;
    function CheckForDoubles($Die1, $Die2)
    {
        global $FaceNamesSingular;
        global $FaceNamesPlural; 
        $ReturnValue = false;
        
        if ($Die1 == $Die2) // Doubles
        { 
            echo "The roll was double",
                $FaceNamesPlural[$Die1-1], ".<br />";
                $ReturnValue = true;
        }
        else // Not Doubles
        {
            echo "The roll was a ",
        $FaceNamesSingular[$Die1-1], " and a ", $FaceNamesSingular[$Die2-1], ".<br />";
        $ReturnValue = false;
        }
        return $ReturnValue;
    }
   
    function DisplayScoreText($Score, $Doubles)
    {
        switch ($Score)
        {
            case 2:
                echo "You rolled snake eyes! <br />";
                break;
            case 3:
                echo "You rolled a loose deuce!  <br />";
                break;
            case 5:
                echo "You rolled a fever five!  <br />";
                break;
            case 7:
                echo "You rolled a natural!  <br />";
                break;
            case 9:
                echo "You rolled a nina!  <br />";
                break;

                case 11:
                    echo "You rolled a yo! <br />";
                    break;
                case 12:
                    echo "You rolled boxcars! <br />";
                    break;
                default:
                    if ($Score % 2 == 0)
                    {
                        if ($Doubles)
                        {
                            echo "You rolled a hard $Score!<br />";

                        }
                        else 
                        {
                           echo "You rolled an easy $Score!<br />"; 
                        }
                    }
                    break;

        }
       
                  
        }
    
    do {
    $Dice = array();
    $Dice[0] =rand(1,6);
    $Dice[1] =rand(1,6);
    $Score = $Dice[0] +$Dice[1];
    echo "<p>";
    echo "The total score for roll $RollNumber was.<br />";
    $Doubles = CheckforDoubles($Dice[0],$Dice[1]);
    DisplayScoreText($Score,$Doubles);
    echo "</p>";
    if ($Doubles)
            ++$DoublesCount;
            ++$RollNumber;
    } while ($RollNumber <=5); //End Of The Do Loop
   




?>
</body>
</html> 