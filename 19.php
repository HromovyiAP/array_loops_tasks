<h3> Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</h3>

<?php
$day = 'Понеділок';
$arr = array ('Понеділок', 'Вівторок', 'Середа', 'Четвер', 'Пятниця', 'Субота', 'Неділя');
foreach ($arr as $item) {
    if ($item === $day) {
        echo "<i> $item </i>";
    }
    else {
        echo $item;
    }
}