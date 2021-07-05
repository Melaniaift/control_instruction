<?php
    print "<table border=\"l\">";
    for($y=1;$y<=12;$y++){
        print "<tr>";
        for($x=1;$x<=12;$x++){
            print "<td>";
            print ($x*$y);
            print "</td>";
        }
        print "</tr>";
    }
print "</table>";
?>

<br/><br/>
<a href="index.php">Index</a>