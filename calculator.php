<!DOCTYPE html>
<head><title>Calculation Result</title></head>
<body>
<?php
$firstnum = (int) $_POST['firstnum'];
$secondnum = (int) $_POST['secondnum'];
$operation = (string) $_POST['operation'];
$numresult = 0;
switch ($operation){

case "plus":
$numresult = $firstnum + $secondnum;
break;
case "minus":
$numresult = $firstnum - $secondnum;
break;
case "multiply":
$numresult = $firstnum * $secondnum;
break;
case "divide":
$numresult = $firstnum / $secondnum;
break;

}
echo "The result of " . $firstnum . " and " . $secondnum . " is " . $numresult . ".";

?>
</body>
</html>
