<?

// array for hw_1

$array = [];
for ($i = 0; $i < 15; $i++) {
    $array[$i] = rand(-100, 100);
};
echo "массив: ";
print_r($array);





//task 1

$pos_array = array_filter($array, function ($el) {
    return $el > 0;
});

echo "<br><br> массив положительных: ";
print_r($pos_array);


//task 2

$avg = array_sum($array) / count($array);
$answ_task_2 = [];

foreach ($array as $key => $el) {
    if ($el > $avg) {
        $answ_task_2[] = $key;
    }
}

echo "<br><br> среднее : $avg <br> массив индексов чисел, которые больше среднего: ";
print_r($answ_task_2);


//task 3

$answ_task_3 = [];

for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $array[$i - 1]) {
        $answ_task_3[] = $array[$i];
    }
}

echo "<br><br> массив элементов, которе больше предыдущего: ";
print_r($answ_task_3);


// task 4

$answ_task_4 = "НЕТ";
$count_values = array_count_values($array);

foreach ($count_values as $el) {
    if ($el > 1) {
        $answ_task_4 = "ДА";
    }
}

echo "<br><br>есть ли повторяющиеся элементы: $answ_task_4 <br>";


// task 5

$answ_task_5 = $array;

foreach ($array as $key => $el) {
    $counter = 0;
    foreach ($array as $el2) {
        if ($el == $el2) {
            $counter++;
        }
    }
    if ($counter > 2) {
        unset($answ_task_5[$key]);
    }
}

$array = array_values($answ_task_5);

echo "<br>массив после удаления элементов, которых больше чем два: ";
print_r($array);


//task 6 

$answ_task_6 = "НЕТ";

foreach ($array as $el) {
    if (is_array($el)) {
        $answ_task_6 = "ДА";
    }
}

echo "<br><br> является ли массив двумерным: $answ_task_6"

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplicatoin</title>
</head>

<body>
    <hr>
    <hr>
    <hr>
    <div style="display: flex; gap: 5%; flex-wrap:wrap; margin-left: 30px;">
        <? for ($i = 1; $i <= 10; $i++) : ?>
            <div style="width: 15%; margin-bottom: 50px; background: #e5e5e5; border-radius: 30px; text-align:center">
                <? for ($j = 1; $j <= 10; $j++) : ?>
                    <span><?= "$i x $j = " . $i * $j . "<br>" ?></span>
                <? endfor ?>
            </div>
        <? endfor ?>
    </div>
</body>

</html>