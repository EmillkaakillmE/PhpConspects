<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Черновичок</title>
</head>
<body>
<h3>Константы</h3>
<p>
    Константа для версии PHP <? echo PHP_VERSION;?>
</p>

<p>
    Создание константы: <pre>define("ИМЯ_КОНСТАНТЫ", Значение_константы)</pre>
    Имя константы капсом
    <?define("PI", 3.14159);?>
</p>

<p>
    Выведение константы: <?echo PI;?>
</p>

<p>
    Проверка на существование константы: <pre>defined("ИМЯ_КОНСТАНТЫ")</pre>
Если константа есть, то выдаст true или 1. Если нет - false или пустую строку <br>
<? echo defined("PISKA");?>
<? echo defined("PI");?>

</p>

<h3>Область видимости переменных</h3>
<p>
    $x - глобальная переменная, которую видно везде <br>
    <?$x = 10;
    echo "Переменная x =" . $x . "<br>";
    $x = 12;
    echo "Переменная x =" . $x . "<br>";

    ?>
    Теперь создадим функцию, в которой переназначим нашу переменную и выведем.

    <pre>function test () {
        $x = 7;
    }</pre>
    <?
    function test () {
        $x = 7;
    }
    test();
    echo "Переменная x =" . $x . "<br>";
    ?>

Не переназначилась. Потому что переменные в функции не глобальные, а локальные
</p>

<p>
    Делаем переменную глобальной даже в функции:

    <?
    $x = 0;
        function test1 () {
            global $x;
            $x = 220;
        }
        test1();
        $x++;
        echo $x;
//        phpinfo();
    ?>


    <?
    function pre ($data) {
        echo '<pre>' . print_r($data, 1) . '</pre>';
    }
    ?>
</p>


    <h3>Задачки</h3>
    <h4>Growth of a Population</h4>
    <p>
        В маленьком городе население p0=1000 человек. Население каждый год растёт на 2 процента и 50 человек ещё приходит. Сколько лет нужно, чтобы население стало больше или равно p=1200 человек
        <br>

        В конце первого года будет: <br>
        1000 + 1000 * 0.02 + 50 => 1070 жителей <br>
        <br>
        В конце второго года будет: <br>
        1070 + 1070 * 0.02 + 50 => 1141 жителей (Количество жителей - целочисленное число) <br>
        <br>
        В конце третьего года будет: <br>
        1141 + 1141 * 0.02 + 50 => 1213 <br>
        <br>
        Потребуется три года чтобы жителей стало больше или равно 1200 человек. <br>
    </p>

    <p>
        Основные параметры: $p0 - изначальное количество жителей. $percent - процент прибывших (целое положительное число или нуль), $aug - количество прибывших в год (целое число), $p - конечно количество жителей, докуда считать. Функция должны выдавать $n - количество лет, требующих это всё.
        <br>


        <?
        $n = 0;
        function nbYear($p0, $percent, $aug, $p) {
            $percent = $percent/100;
            global $n;
            while ($p0 < $p) {
                $p0 += $p0 * $percent + $aug;
                $n++;
            }
            return $n;
}

        nbYear(53220, 13, -600, 200000);
        echo "При заданных параметрах понадобится $n лет чтобы количество жителей было больше или равно указанному";
        ?>
    </p>
    <h4>Shortest Word</h4>

    <p>
        Данна строка из нескольких слов. Нужно вернуть длинну наименьшего слова. <br>
        Строка никогда не пустая, и не нужно проверять её на тип данных. <br>

        <?
        //Моё решение:
        $pizza = "bitcoin take over the world maybe who knows perhaps";
        $maximum = strlen($pizza);
        echo "Длинна фразы $maximum";
        $pieces = explode(" ", $pizza);

            foreach ($pieces as $v) {
                if (strlen($v) < $maximum){
                    $maximum = strlen($v);
                }
            }
            echo "Длинна наименьшего слова - $maximum <br>";
            echo '<br> <br>';

//            Умнейшее решение!
            $minimum = min(array_map('strlen', (explode(' ', $pizza))));
            echo "Длинна наименьшего слова - $minimum <br>";
        ?>
    </p>

    <h4>By 3, or not by 3? That is the question . . .</h4>

    <p>
        Дана строка из цифр, таких как "123" или "9876543211234567890009". Установить, может ли число в этой строке делиться на три.
        <br>

        <?
        //Моё решение
        function divisibleByThree($str) {
            $arr = str_split($str);
            $max = count($arr);             //Вот столько цифр в нашей строке
            while ($max > 1) {              //Добиваюсь того, чтобы в итоге сумма всех цифр числа была записана одной цифрой
                $arr = array_sum($arr);
                $arr = str_split($arr);
                $max = count($arr);
            }
            if ($arr[0] % 3 == 0){          //Проверка необходимого условия из задачи
                return true;
            } else{
                return false;
            }

            ($arr[0] % 3 == 0) ? true : false;      //Проверка необходимого условия из задачи короткой записью
        }

        divisibleByThree('9876543211234567890009');

        //Решение нормального человека:
        function divisibleByThreeNormal($str): bool {
            return !(array_sum(str_split($str)) % 3);
        }
        ?>
    </p>

<br>
    <h4>Nth power rules them all!</h4>


    <p>
        You are provided with array of positive non-zero ints and int n representing n-th power (n >= 2). <br>

        For the given array, calculate the sum of each value to the n-th power. Then subtract the sum of the original array.
        <br>

        Example 1: Input: {1, 2, 3}, 3 --> (1 ^ 3 + 2 ^ 3 + 3 ^ 3 ) - (1 + 2 + 3) --> 36 - 6 --> Output: 30 <br>

        Example 2: Input: {1, 2}, 5 --> (1 ^ 5 + 2 ^ 5) - (1 + 2) --> 33 - 3 --> Output: 30 <br>


    </p>

    <p>
        <?
        function modified_sum(array $a, int $n): int {
            $ar_sum = array_sum($a);
            foreach ($a as $k => $v) {
                $a[$k] = pow($v, $n);
            }
            $big_ar_sum = array_sum($a);
            return $big_ar_sum - $ar_sum;
        }

        echo modified_sum([1, 2, 3], 3);
        ?>
    </p>
<hr>
    <h3>ООП тест</h3>
    <?
    class Message  {
        //Создаём поле, со строковой переменной
        public $message = 'Привет, меня зовут ';

        //Создаём функцию которая будет соединять нашу строковую переменную и имя. Имя здесь в качестве параметра указываемого вне класса.
        public function introduce($name) {
            return $this -> message . $name;
        }
    }

    // Создаем объект на основе класса
    $my_message = New Message();
    echo $my_message->introduce('Эмиль');
    ?>
    <hr>
    <h4>Return the first M multiples of N</h4>
    
    <p>
        Implement a function, multiples(m, n), which returns an array of the first m multiples of the real number n. Assume that m is a positive integer.
    </p>
    
    <p>
        EX: <br>
        multiples(3, 5.0) --> [5.0, 10.0, 15.0]
    </p>
    
    <?
/**
 * [multiplesMY функция которая возвращает массив с количеством элементов $m.]
 * @param  int    $m [Количество элементов]
 * @param  float  $n [Множитель]
 * @param  int  $j [Был создан, чтобы результирующий массив забивался с 0го ключа и при этом 0-ое значение не было равно нулю]
 * @return [type]    [Собственно массив]
 * [comments Собственно не самое умное решение.]
 * 
 */
        function multiplesMY(int $m, float $n): array {
            $arr = array();
            $i = 0;
            $j = 1;
            $m--;
            while ($i <= $m) {
                $arr[$i] = $n * $j;
                $j++;
                $i++;
            }
            return $arr;
        }
        
         /**
         * [multiples функция которая возвращает массив с количеством элементов $m]
         * @param  int    $m [Количество элементов]
         * @param  float  $n [Множитель]
         * @return [type]    [description]
         * [comments Решение нормального человека. Только не совсем понимаю, как это всё работает? Что такое use??.]
         */
        
        function multiples(int $m, float $n): array {
            return array_map(function($c) use ($n){return $c*$n;},range(1, $m));
        }
        
        print_r(multiples(3, 5.0));
    ?>
    
    <br>
    <br>
    <br><br>
    
    
    <?
        $foo = 'Боб';              // Присваивает $foo значение 'Боб'
        $bar = &$foo;              // Ссылка на $foo через $bar.
        $bar = 'Меня зовут ' . $bar;
        echo "<br>";
        echo $foo;                 // меняет и $foo.
    ?>
</body>
</html>