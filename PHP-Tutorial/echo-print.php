<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Echo vs Print</title>
</head>
<body>
    
<?php 
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";



$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt3 = "Learn PHP";
$txt4 = "W3Schools.com";
$z = 5;
$t = 4;

print "<h2>" . $txt3 . "</h2>";
print "Study PHP at " . $txt4 . "<br>";
print $z + $t;
?>
</body>
</html>