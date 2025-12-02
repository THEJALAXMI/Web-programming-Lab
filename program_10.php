<?php
$students=array("Thasni","Sneha","Arya","Anjela");

echo "<h2>Arrays before sorting:</h2>";
print_r($students);
echo "<br><br>";

asort($students);
echo "<h2>Arrays before Ascending sorting(asort):</h2>";
print_r($students);
echo "<br><br>";

arsort($students);
echo "<h2>Arrays before Descending sorting(arsort):</h2>";
print_r($students);
?>




