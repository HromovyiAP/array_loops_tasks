<h3>Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '­1­2­3­4­5­6­7­8­9­'.</h3>
<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $item ) {
    if ($item == end($arr)){
        break;}
    echo "-{$item}";}
    echo "-{$item}-";
?>

