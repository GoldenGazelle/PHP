<?php
//function transLit($text){
//    $alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'ye', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l','м'=>'m', 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh','щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya');
//    foreach ($alfavit as $key => $value) {
//        for ($i = 0; $i < strlen($text); $i++) {
//            if (mb_substr($text, $i, 1) == $key) {
//                $text["$i"] = $value;
//            }
//        }
//    }
//    return $text;
//}
//echo transLit("кот</br>");
//?>
<!---->
<!---->
<!---->
<?php
//$string = "Валера-Валера забрал банан у сына мэра";
//$translit = array("а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "zh",  "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "kh", "ц" => "c", "ч" => "ch",  "ш" => "sh",  "щ" => "sch", "ь" => "",  "ы" => "y", "ъ" => "", "э" => "e", "ю" => "yu", "я" => "ya", "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ё" => "E", "Ж" => "Zh",  "З" => "Z", "И" => "I", "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "KH", "Ц" => "C", "Ч" => "Ch",  "Ш" => "Sh",  "Щ" => "Sch", "Ь" => "",  "Ы" => "Y", "Ъ" => "", "Э" => "E", "Ю" => "Yu",  "Я" => "Ya");
//echo $string."<br />";
//echo strtr($string, $translit);
//?>
<?php
function translate ($text) {
$letters = array(
"а"=>"a",
"б"=>"b",
"в"=>"v",
"г"=>"g",
"д"=>"d",
"е"=>"e",
"ё"=>"e",
"ж"=>"zh",
"з"=>"z",
"и"=>"i",
"й"=>"i",
"к"=>"k",
"л"=>"l",
"м"=>"m",
"н"=>"n",
"о"=>"o",
"п"=>"p",
"р"=>"r",
"с"=>"s",
"т"=>"t",
"у"=>"u",
"ф"=>"f",
"х"=>"kh",
"ц"=>"tc",
"ч"=>"ch",
"ш"=>"sh",
"щ"=>"shch",
"ы"=>"y",
"э"=>"e",
"ю"=>"iu",
"я"=>"ia",
);
return strtr($text, $letters);
}
echo translate ("Тестовый текст");
?>