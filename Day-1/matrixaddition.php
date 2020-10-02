<?php
    $x=array(array(22,12),array(18,14));
    $y=array(array(17,16),array(28,18));

    echo "Matrix Addition <br>";

    for($i=0;$i<=1;$i++)
    {
        for($j=0;$j<=1;$j++)
        {
            echo $x[$i][$j]+$y[$i][$j]." ";
        }
        echo "<br>";
    }
		/*Answer
		Matrix Addition
		39 28
		46 32
		*/
?>
