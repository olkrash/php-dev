<?php
declare(strict_types=1);
//Цель задачи - сформировать html-код списка
//• Сформируйте массив (10 элементов) со строками вида:
//Кнопка 10
//Кнопка 9
//Кнопка 8
//...
//Кнопка 1
//• Отсортируйте массив в обратном порядке любым способом. Получить такой результат:
//Кнопка 1
//Кнопка 2
//...
//Кнопка 10
// • При помощи echo, операторов склеивания и цикла foreach получить и вывести на экран такой html-код:
//<ul>
//    <li><a href="#">Кнопка 1</a></li>
//    <li><a href="#">Кнопка 2</a></li>
//    <li><a href="#">Кнопка 3</a></li>
//    ...
//    <li><a href="#">Кнопка 10</a></li>
//</ul>

$button = [
    "Кнопка 10",
    "Кнопка 9",
    "Кнопка 8",
    "Кнопка 7",
    "Кнопка 6",
    "Кнопка 5",
    "Кнопка 4",
    "Кнопка 3",
    "Кнопка 2",
    "Кнопка 1",];
natsort($button);
echo "<ul>";
foreach ($button as $val) {
    echo "<li><a>$val</a>.</li>";
}
echo "</ul>";

//Удаление отрицательных элементов из массива
//Есть массив с элементами (отрицательными и положительными). Нужно написать такую функцию deleteNegtives(), которая
// будет принимать массив, удалять из него элементы меньше 0 и возвращать этот массив.
//Подсказки:
//Можно использовать цикл foreach для обхода элементов массива.
//Пример:
// Сейчас $digits содержит отрицательные и положительные числа $digits = array(2,10, -2, 4, -5, 1, -6, 200, 1.6, 95);
//$digits = deleteNegtives($digits);
// Теперь $digits содержит только положительные числа

//$digits = [2, 10, -2, 4, -5, 1, -6, 200, 1.6, 95];
//function deleteNegatives(array $arr): array
//{
//    $result = [];
//    foreach ($arr as $digit) {
//        if ($digit >= 0) {
//            array_push($result, $digit);
//        }
//    }
//    return $result;
//}
//
//print_r(deleteNegatives($digits));

//Квадратное уравнение
//Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента (коефициенты).
//Возвращает:
//• Массив с двумя корнями х1, х2, если D > 0
//• Один корень х, если D = 0
//• false, если D < 0 Подсказки:
function quadraticEquation($a = 0, $b = 0,$c = 0 ){

}


// Работа с массивами
/*
count - Подсчитывает количество элементов массива или чего-либо в объекте
array_diff — Вычислить расхождение массивов
array_intersect — Вычисляет схождение массивов
array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
array_keys — Возвращает все или некоторое подмножество ключей массива
array_values — Выбирает все значения массива
array_merge — Сливает один или большее количество массивов
array_rand — Выбирает один или несколько случайных ключей из массива
array_reverse — Возвращает массив с элементами в обратном порядке
compact — Создаёт массив, содержащий названия переменных и их значения
extract — Импортирует переменные из массива в текущую таблицу символов
arsort — Сортирует массив в обратном порядке, сохраняя ключи
asort — Сортирует массив, сохраняя ключи
sort — Сортирует массив
rsort — Сортирует массив в обратном порядке
array_combine — Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений
array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
array_shift — Извлекает первый элемент массива
array_unique — Убирает повторяющиеся значения из массива
array_unshift — Добавляет один или несколько элементов в начало массива
array_flip — Меняет местами ключи с их значениями в массиве
array_pop — Извлекает последний элемент массива
array_push — Добавляет один или несколько элементов в конец массива
in_array — Проверяет, присутствует ли в массиве значение
РАБОТА СО СТРОКАМИ
/*
http://php.net/manual/ru/ref.strings.php Функции для работы со строками ¶
http://php.net/manual/ru/ref.mbstring.php Функции для работы с многобайтовыми строками
array explode ( string $delimiter , string $string [, int $limit ] ) — Разбивает строку с помощью разделителя
string implode ( string $glue , array $pieces ) || join() implode — Объединяет элементы массива в строку
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] ) trim — Удаляет пробелы (или другие символы) из
начала и конца строки
string rtrim ( string $str [, string $character_mask ] ) rtrim — Удаляет пробелы (или другие символы) из конца строки
string ltrim ( string $str [, string $character_mask ] ) ltrim — Удаляет пробелы (или другие символы) из начала строки
string md5 ( string $str [, bool $raw_output = false ] ) Вычисляет MD5-хеш строки string, используя » алгоритм MD5 RSA
Data Security, Inc. и возвращает этот хеш. Не рекомендуется использовать эту функцию для обеспечения безопасности хранения
паролей ввиду высокой скорости работы данного алгоритма.
string sha1 ( string $str [, bool $raw_output = false ] ) Возвращает SHA1-хеш строки string, вычисленный по алгоритму »
US Secure Hash Algorithm 1. Не рекомендуется использовать эту функцию для обеспечения безопасности хранения
паролей ввиду высокой скорости работы данного алгоритма.
string nl2br ( string $string [, bool $is_xhtml = true ] ) Возвращает строку string, в которой перед каждым переводом
строки (\r\n, \n\r, \n и \r) вставлен <br/> или <br>.
mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] ) Эта функция возвращает строку или
массив, в котором все вхождения search в subject заменены на replace.Если не нужны сложные правила поиска/замены
(например, регулярные выражения), использование этой функции предпочтительнее preg_replace().
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] ) Эта функция возвращает строку
или массив, в котором все вхождения search в subject заменены на replace (без учёта регистра символов). Если не нужны
сложные правила поиска/замены, использование этой функции предпочтительнее preg_replace() с модификатором i.
string strip_tags ( string $str [, string $allowable_tags ] )Функция пытается возвратить строку, из которой удалены все
NULL-байты, HTML- и PHP-теги из заданной строки (string). Для удаления тегов используется тот же механизм, что и в
функции fgetss().
int strlen ( string $string ) Возвращает длину строки string.
mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] ) Получает длину строки
int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
Поиск позиции первого вхождения одной строки в другую
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] ) Приведение строки к нижнему регистру
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] ) Приведение строки к верхнему регистру
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
Возвращает часть строки
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401
[, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] ) Преобразует специальные символы в
HTML-сущности
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] ) Преобразует специальные
HTML-сущности обратно в соответствующие символы
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding =
ini_get("default_charset") [, bool $double_encode = true ]]] ) Преобразует все возможные символы в соответствующие HTML-сущности
*/
/*$str = 'Иванов Иван Иванович';
$data = explode(' ', $str);
print_r($data); разделяет строки*/
/*$data = ['Иванов', 'Иван', 'Иванович'];
echo $str = implode(' ', $data); Соединяет строки*/
/*$str = "\t<p>Hello</p>\n";
$str .= "\n<p>world!</p>\t";
// echo $str;
echo trim($str, "\t");*/
/*$str = '..... test,';
echo rtrim($str, ','); удаляет запятую*/
/*$str = 'password';
echo md5(md5($str));*/
/*РАБОТА С ДАТОЙ
http://php.net/manual/ru/ref.datetime.php Функции даты и времени
string date ( string $format [, int $timestamp = time() ] ) Форматирует вывод системной даты/времени
int time ( void ) Возвращает текущую метку системного времени Unix
string date_default_timezone_get ( void ) Возвращает временную зону, используемой по умолчанию всеми функциями
даты/времени в скрипте
bool date_default_timezone_set ( string $timezone_identifier ) Устанавливает временную зону по умолчанию для всех
функций даты/времени в скрипте
array getdate ([ int $timestamp = time() ] ) Возвращает информацию о дате/времени
int strtotime ( string $time [, int $now = time() ] ) Преобразует текстовое представление даты на английском языке в
метку времени Unix
int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n")
[, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] ) Возвращает метку времени Unix для
заданной даты
DateTime date_create ([ string $time = "now" [, DateTimeZone $timezone = NULL ]] ) Псевдоним DateTime::__construct()
DateTime::__construct -- date_create — Конструктор класса DateTime
DateTime date_add ( DateTime $object , DateInterval $interval ) Эта функция является псевдонимом: DateTime::add()
DateTime::add -- date_add — Добавляет заданное количество дней, месяцев, лет, часов, минут и секунд к объекту DateTime
string date_format ( DateTimeInterface $object , string $format ) Псевдоним DateTime::format()
DateTime::format -- DateTimeImmutable::format -- DateTimeInterface::format -- date_format — Возвращает дату,
отформатированную согласно переданному формату
date_interval_create_from_date_string() Псевдоним DateInterval::createFromDateString()
Разбирает строку, содержащую временной интервал в обычном (удобочитаемом) виде и создаёт на его основе объект класса DateInterval.
DateInterval date_diff ( DateTimeInterface $datetime1 , DateTimeInterface $datetime2 [, bool $absolute = false ] )
Псевдоним DateTime::diff() DateTime::diff -- DateTimeImmutable::diff -- DateTimeInterface::diff -- date_diff
— Возвращает разницу между двумя объектами DateTime
*/
/*echo date_default_timezone_get();
echo '<br>';
date_default_timezone_set('Australia/Adelaide');
echo date_default_timezone_get();
echo '<br>';
date_default_timezone_set('GMT');
// echo date('Y-m-d H:i:s', time() - 60*60*24*10);
// echo time();
// echo '2010 - ' . date('Y');
// phpinfo();
*/
/*$date = getdate();
print_r($date);
echo $date['year'];*/
/*echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y-m-d H:i:s', strtotime("+1 day 2 hours"));*/
/*echo time();
echo '<br>';
echo mktime( date("H"), date("i")+1, date("s")+1, date("m"), date("d"), date("Y") );
//$t = mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")-1 );
//echo date('Y-m-d H:i:s', $t);*/