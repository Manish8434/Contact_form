<?php

$n = 12345;
$c = 0;
$sum = 0;

for($i = 0; $i <= strlen($n); $i++){

$c = $n % 10;
$sum = $sum + $c;

$n = $n / 10;


}
echo "Sum of Digit : " . $sum;


?>

<?php

$s = 1234567;
$c = 0;
$revNum = 0;

while($s != 0){

$c = $s % 10;
$revNum = ($revNum*10) + $c;

$s = (int)($s / 10);


}
echo "Reverse num : " . $revNum;


?>