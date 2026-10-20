<?php
$i = 1; // Initialize counter
while ($i < 5 ) { // Check condition
  echo $i; // Execute code
  $i = $i + 1; //$i++; 
}

for ($x = 1; $x <10; $x++) {
  echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

//for  ($i=0; $i<=3; $i++){
    //echo $colors [$i]. "<br>"
//}
?>