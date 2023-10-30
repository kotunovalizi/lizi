<?php
$ages = array(null, 51, 28, 60, 33, 19);
$index = 1;
$summa = 0; 
while($index <= 5){
$summa = $summa + $ages[$index];
$index = $index + 1;
}
$average = $summa / 5;
echo 'Средний возраст жильцов подъезда: ' . $average . ' лет';
?>