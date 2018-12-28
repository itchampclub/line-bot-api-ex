<?php


$access_token = '8LSoXWYVTlV7oV82tKW6Rw9YdFLm/kcM4FzC2LACY+zpCP00zb012tMeG/NakCYCDP/y9aYS5nyZpW9vmFqihBSlQu0wn+fM9Z86qz9atTM6+KFcIZgPglsuGOfMGRaSGZ+Ur9r1DipRHh31MvR/3wdB04t89/1O/w1cDnyilFU=';


$content = file_get_contents('php://input');
$jsonString = file_get_contents('php://input');
error_log($jsonString);

$events = json_decode($content, true);


if (!is_null($events['events'])) {
	foreach ($events['events'] as $event) {
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			$text = $event['message']['text'];
			$replyToken = $event['replyToken'];
			switch ($text) {
					
				case 'Hello' :
					$messages = [
						'type' => 'text',
						'text' => 'Hello, I am BotWay.'
					];
					$mess = [
						'type' => 'text',
						'text' => 'I can help you find places around you.'
					];
					$me = [
						'type' => 'text',
						'text' => 'You can try typing Help.'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess , $me]
					];
					break;
			}
		}
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);	
	}
}
					$messages = [
						'type' => 'text',
						'text' => '่ส่งจากบอท'
					            ];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/push';
	                                $id = 'Ub3ea97c513612d6e3401302f051f81dc';
					$data = [
						'to' => $id,
						'messages' => [$messages]
					        ];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

echo "OK";
