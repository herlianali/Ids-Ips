<?php

define('TOKEN', '1116081772:AAFW3mmjUVv9twIHIg5vMqnZzLRCiMtHAmg');
define('CHAT_ID', '739413365');

function kirimPesan($pesan)
{
	$pesan = json_encode($pesan);
	$API   = "http://api.telegram.org/bot".TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

kirimPesan("jaranguda.com tutorial membuat bot sederhana");