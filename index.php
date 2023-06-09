IF
// 1. Напишите программу, которая выводит на экран сообщение в зависимости от возраста пользователя:
//Если возраст меньше 18 лет, выведите "Вы несовершеннолетний"
//Если возраст больше, или равен 18 и меньше, либо равно 65 лет, выведите "Вы взрослый"
//Если возраст больше 65 лет, выведите "Вы пенсионер"

function ageVerification($age) {
    if ($age < 18) {
        return "Вы несовершеннолетний";
    } else if ($age > 65) {
        return "Вы пенсионер";
    } else {
        return "Вы взрослый";
    }
}
//echo ageVerification(80);




// 2. Напишите программу, которая проверяет, является ли введенное пользователем число четным или нечетным, и выводит соответствующее сообщение:
//Если число четное, выведите "Число является четным"
//Если число нечетное, выведите "Число является нечетным"

function isEven($num) {
    if ($num % 2 === 0) {
        $answer = 'чётным';
    } else {
        $answer = 'нечётным';
    }
    return "Число является {$answer}";
}
//echo isEven(79);




SWITCH        
// 3. Напишите программу, которая выводит на экран сообщение в зависимости от значения переменной $dayOfWeek (от 1 до 7), которая содержит номер дня недели:

function defineDay($dayOfWeek) {
    switch ($dayOfWeek) {
        case 1:
            return 'mon';
        case 2:
            return 'tue';
        case 3:
            return 'wed';
        case 4:
            return 'thu';
        case 5:
            return 'fri';
        case 6:
            return 'sat';
        case 7:
            return 'sun';
        default:
            return null;
    }
}
//echo defineDay(4);



        
// 4. Напишите программу, которая определяет количество дней в месяце, в зависимости от значения переменной $month (от 1 до 12), которая содержит номер месяца:
//Если $month равно 2, выведите "В этом месяце 28 дней"
//Если $month равно 4, 6, 9 или 11, выведите "В этом месяце 30 дней"
//Во всех остальных случаях выведите "В этом месяце 31 день"

function defineDayAmount($month) {
    switch ($month) {
        case 2:
            $answer = '28';
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $answer = '30';
            break;
        default:
            $answer = '31';
            break;
    }
    return "В этом месяце {$answer} дней";
}
//echo defineDayAmount(9);



        
MATCH
// 5. Напишите программу, которая принимает на вход строку и определяет, является ли она палиндромом (т.е. читается одинаково в обоих направлениях), используя конструкцию match и функцию strrev:

$string = 'level';
$result = match (true) {
    $string === strrev($string)=> 'палиндром',
    default => 'не палиндром',
};
echo $result;

        

        
// 6. Напишите программу, которая принимает на вход число и определяет, является ли оно четным, кратным 3 или кратным 5, используя конструкцию match:

$number = 15;
$result = match (true) {
    $number % 2 == 0 => 'чётное',
    $number % 3 == 0 => 'кратно трём',
    $number % 5 == 0 => 'кратно пяти',
    default => '***'
};
echo $result;
        
        

        
WHILE        
// 7. Задача на поиск суммы нечетных чисел от 1 до N:

function sumSearch($num) {
    $sum = 0;
    $i = 1;

    while ($i <= $num) {
        if ($i % 2 == 0) {
            $sum = $sum + $i; //sum += i;
        }
        $i++;
    }
    return $sum;
}
sumSearch(10);
                     
                     
                     
                     
// 8. Задача на поиск первого положительного числа, кратного 7:
                     
function numSearch($num) {
    $i = $num;

    while (true) {
        if ($i % 7 == 0) {
            return $i;
        }
        $i++;
    }
}
$num = 23;
$firstFoundNum = numSearch($num);
echo "первое положительное число, кратное 7: $firstFoundNum";                     
                     
                     
        
        
FOR
// 9. Поиск суммы элементов массива:

$numbers = [1, 2, 3, 4, 5];
$sum = 0;
for($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}
echo $sum;        
        
        

        
// 10. Собрать массив четных чисел из входного массива:

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNumbers = [];
for($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        array_push($evenNumbers, $numbers[$i]);
    }
}
print_r($evenNumbers);        
                                 
                                 
                                 
                                 
FOREACH                                 
// 11. Добавить новый элемент в ассоциативный массив и вывести все значения данного массива 
                                 
$array = [
    'fruit' => 'mango',
    'vegetable' => 'potatoe',
    'drink' => 'tea'];
$array['dessert'] = 'ice cream';
foreach ($array as $key => $value) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}                                 
                                 
                                 
                                 
                                 
// 12. Объединение нескольких ассоциативных массивов в один и вывести результат (ключ, значение), через foreach

$arrayFirst = [
    'fruit' => 'mango',
    'vegetable' => 'potatoe',
    'drink' => 'tea'];
$arraySecond = [
    'dessert' => 'ice cream',
    'meat' => 'beef',
    'berry' => 'cherry'];
$arrayMerge = array_merge($arrayFirst, $arraySecond);
foreach ($arrayMerge as $key => $value) {
    echo '<pre>';
    print_r($arrayMerge);
    echo '</pre>';
}
