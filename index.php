<?
require($_SERVER["DOCUMENT_ROOT"]."/includes/includes.php");
$word = '2344dggs4afjsifkaslfaslfsafsafafs';
//ну тут не важно из формы или через гет запрос получать данные,
//я просто константой задал
//результаты валидирования отдаются ниже
p(AuthValidator::Validate($word));