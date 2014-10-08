<?php 
$json = file_get_contents("example.json");
$arr=json_decode($json,true); 
/* $arr['note']['today']=rand(1,5); */
if ($arr['note']['last_update'] != date("m.d.y")) // проверяем последнее обновление и текущую дату, если наступил новый день то сумируем вчеращние данные с общим показателем
{
$arr['note']['all_request']=$arr['note']['all_request'] + $arr['note']['today_request'];
$arr['note']['all_rezume']=$arr['note']['all_rezume'] + $arr['note']['today_rezume'];
$arr['note']['all_questions']=$arr['note']['all_questions'] + $arr['note']['today_questions'];
$arr['note']['today_questions']= '';
$arr['note']['today_request']= '';
$arr['note']['today_rezume']= '';
}
$arr['note']['today_rezume']= $arr['note']['today_rezume']+rand(1,5); // увеличиваем количество сегоднящних резюме рандомно в диапазоне от 1 до 5
$arr['note']['today_questions']= $arr['note']['today_questions']+rand(1,8); // увеличиваем количество сегоднящних вопросов рандомно в диапазоне от 1 до 8
$arr['note']['today_request']= $arr['note']['today_request']+rand(1,5); // увеличиваем количество сегоднящних заявок рандомно в диапазоне от 1 до 5
$arr['note']['last_update']= date("m.d.y");

$f = fopen('example.json', 'w');
fputs($f, json_encode($arr));
fclose($f);
?>

