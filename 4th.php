<?php
//Вариант 1. Три числа подряд считаются за две пары.
$x = 0;
$arr = [1, 1, 2, 3, 4, -51, 12, 12, 12, 12, -51, -51, -51];

for($i = 0, $size = count($arr); $i < $size-1; $i++) {
    if($arr[$i] == $arr[$i+1]) {
        $x++;
    };
};
echo "Кол-во пар в массиве: <br/>".implode(', ',$arr)."<br/> равно: ".$x."<br/>";
?>

<?php
//Вариант 2. Только 4 числа подряд считаются за 2 пары. Пятое число, соответсвенно, не будет относиться ни к какой паре.
$x = 0;
$arr = [1, 1, 2, 3, 4, -51, 12, 12, 12, 12, -51, -51, -51];

for($i = 0, $size = count($arr); $i < $size-1; $i++) {
    if($arr[$i] == $arr[$i+1]) {
        $x++;
        if($arr[$i] == $arr[$i+2]){
            $i++;
        }
    };
};
echo "Кол-во пар в массиве: <br/>".implode(', ',$arr)."<br/> равно: ".$x;
?>