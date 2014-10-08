<?php 
$json_file = "lp_example.json";


$json = file_get_contents($json_file);
$arr=json_decode($json,true); 
//echo "<pre>";print_r($arr['note']);
/* $arr['note']['today']=rand(1,5); */
if ($arr['note']['last_update'] != date("m.d.y")) // проверяем последнее обновление и текущую дату, если наступил новый день то обнуляем суточные счетчики
{
//  обнуляем счетчики на начало дня
$arr['note']['today_questions']= 1;
$arr['note']['today_request']= 2;
$arr['note']['today_rezume']= 1;
}
 

function RandValue($rating, $interval)
{
//$rating - количество срабатываний в сутки
//$interval - промежуток запуска скрипта в секундах

$iNumRepeat = round(24*60*60/($interval*$rating));

$rand = rand(1,$iNumRepeat);

if ($rand == 1) return 1;

return 0;

}

/* проверка работы генератора случайных чисел
$num = 0;
for($i=0;$i<17280;$i++)
{
	$num += RandValue(121,5);
}
print ("Количество: [".$num." ]");
*/

$new_rezume = RandValue(50,20); // увеличиваем количество сегоднящних резюме рандомно в диапазоне от 1 до 5
$new_questions = RandValue(80, 20); // увеличиваем количество сегоднящних вопросов рандомно в диапазоне от 1 до 8
$new_request = RandValue(90, 20); // увеличиваем количество сегоднящних заявок рандомно в диапазоне от 1 до 5

// суммируем дневные счетчики
$arr['note']['today_rezume']    = $arr['note']['today_rezume'] + $new_rezume; 
$arr['note']['today_questions'] = $arr['note']['today_questions'] + $new_questions; 
$arr['note']['today_request']   = $arr['note']['today_request'] + $new_request; 
$arr['note']['last_update']     = date("m.d.y");
$arr['note']['online']          = rand(1,8); //  пользователей онлайн всегда от 1 до 8

// суммируем абсолютные счетчики
$arr['note']['all_request']   = $arr['note']['all_request'] + $new_request;
$arr['note']['all_rezume']    = $arr['note']['all_rezume'] + $new_rezume;
$arr['note']['all_questions'] = $arr['note']['all_questions'] + $new_questions;

$f = fopen($json_file, 'w');
fputs($f, json_encode($arr));
fclose($f);

//print_r($arr['note']);
//echo "</pre>";
?>
