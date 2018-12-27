<?php


$access_token = '8LSoXWYVTlV7oV82tKW6Rw9YdFLm/kcM4FzC2LACY+zpCP00zb012tMeG/NakCYCDP/y9aYS5nyZpW9vmFqihBSlQu0wn+fM9Z86qz9atTM6+KFcIZgPglsuGOfMGRaSGZ+Ur9r1DipRHh31MvR/3wdB04t89/1O/w1cDnyilFU=';


		$content = file_get_contents('php://input');
$jsonString = file_get_contents('php://input');
error_log($jsonString);
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back
			switch ($text) {
				case 'สวัสดี' :
					$messages_1 = [
						'type' => 'text',
						'text' => 'สวัสดี เราชื่อ บอทเวย์'
					];
					$messages_2 = [
						'type' => 'text',
						'text' => 'เราช่วยคุณค้นหาสถานที่รอบตัวคุณได้นะ'
					];
					$messages_3 = [
						'type' => 'text',
						'text' => 'ลองพิมพ์คำว่า ช่วยเหลือ ดูสิ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages_1 , $messages_2 , $messages_3]
					];
					break;
					
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
									
				case 'อากาศดี' :
					$messages = [
						'type' => 'text',
						'text' => 'เหมาะแก่การไปท่องเที่ยวจริงๆเลย'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
					
				case 'หิวข้าว' :
					$messages = [
						'type' => 'text',
						'text' => 'ลองค้นหาร้านอร่อยๆดูสิ'
					];
					$mess = [
						'type' => 'text',
						'text' => 'โดยพิมพ์คำว่า ร้านอาหาร หรือกดที่ รูปร้านอาหาร ก็ได้นะ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess]					
					];
					break;
					
				case 'Hungry' :
					$messages = [
						'type' => 'text',
						'text' => 'Try to find a nice restaurant.'
					];
					$mess = [
						'type' => 'text',
						'text' => 'By typing the word ร้านอาหาร or clicking the restaurant icon.'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess]					
					];
					break;
				
				case 'ไม่สบาย' :
					$messages = [
						'type' => 'text',
						'text' => 'ค้นหาโรงพยาบาลใกล้ๆดูสิ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
					
				case 'Sick' :
					$messages = [
						'type' => 'text',
						'text' => 'Find a hospital near you.'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
				
				case 'ฝนจะตกมั้ย' :
					$messages = [
						'type' => 'text',
						'text' => 'ลองมองไปที่ท้องฟ้าสิ'
					];
					$mess = [
						'type' => 'text',
						'text' => 'แต่มีร่มสำรองหรือเปล่า'
					];
					$me = [
						'type' => 'text',
						'text' => 'ถ้าไม่มีลองหาที่ซื้อร่ม โดยค้นหา ร้านค้า ดูสิ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess, $me]
					];
					break;
					
				case 'ช่วยเหลือ' :
					$messages = [
						'type' => 'text',
						'text' => 'คุณสามารถค้นหาสถานที่ต่างๆ โดยกดที่เมนู ค้นหาสถานที่ ที่แถบด้านล่าง'
					];
					$mess = [
						'type' => 'text',
						'text' => 'เป็นการค้นหาสถานที่ต่างๆรอบตัวคุณ แค่นี้ก็หมดปัญหาหลงทางหรือไม่คุ้นเคยกับสถานที่ได้แล้ว'
					];
					$me = [
						'type' => 'text',
						'text' => 'คุณสามารถสนทนากับบอทโดยคำพูดดังต่อไปนี้'
					];
					$me_1 = [
						'type' => 'text',
						'text' => 'สวัสดี , อากาศดี , หิวข้าว , ไม่สบาย , ฝนจะตกมั้ย , แนะนำเพลง , เงินหมด'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess, $me , $me_1]
					];
					break;
					
				case 'Help' :
					$messages = [
						'type' => 'text',
						'text' => 'You can search for places by clicking on the search menu at the bottom bar.'
					];
					$mess = [
						'type' => 'text',
						'text' => 'You can chat with the bot by typing the following.'
					];
					$me = [
						'type' => 'text',
						'text' => 'Hello , Hungry , Sick'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess, $me]
					];
					break;
				
				case 'แนะนำเพลง' :
					$messages = [
						'type' => 'text',
						'text' => 'ฉันแพ้ทางคนอย่างเธอ ~'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
				
				case 'เงินหมด' :
					$mess = [
						'type' => 'text',
						'text' => 'ลองค้นหาตู้ATMใกล้ๆ'
					];
					$me = [
						'type' => 'text',
						'text' => 'โดยพิมพ์ค้นหา ATM ดูสิ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$mess, $me]
					];
					break;
					
				case 'ร้านอาหาร': 
					$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.825699,100.516154&radius=500&type=restaurant&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
					$curl_handle = curl_init();
					curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt( $curl_handle, CURLOPT_URL, $url );
					curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
					$text = curl_exec( $curl_handle );
					curl_close( $curl_handle ); 
					$obj = json_decode($text, TRUE);
					$name = array();
					$number = array();
					$address = array();
					$urll = array();
					for ($x = 0; $x <= 5; $x++) {
						$mes = $obj['results'][$x]['place_id']; 
						$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
						$curl_handle = curl_init();
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt( $curl_handle, CURLOPT_URL, $url );
						curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
						$text = curl_exec( $curl_handle );
						curl_close( $curl_handle ); 
						$object = json_decode($text, TRUE);
						array_push($name, $object['result']['name']);
						array_push($number, $object['result']['formatted_phone_number']);
						array_push($address, $object['result']['vicinity']);
						array_push($urll, $object['result']['url']);
						//$addname .= "->>".$name."\n".$number."\n".$address."\n\n";
					}           
					$messages = [
						'type' => 'template',
						'altText' => 'carousel',
						'template' => [
							'type' => 'carousel',
							'columns' => [
								[
									'title' => "$name[0]",
									'text' => "$address[0]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[0]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[0]"
										]
									]
                    						],[
                        						'title' => "$name[1]",
                        						'text' => "$address[1]",
                        						'actions' => [
                            							[
											'type' => 'postback',
											'label' => 'ไม่มีเบอร์ติดต่อ',
											'data' => 'เบอร์โทร'
										],[
                                							'type' => 'uri',
                                							'label' => 'Google Map',
                                							'uri' => "$urll[1]"
										]
									]
								],[
									'title' => "$name[2]",
									'text' => "$address[2]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[2]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[2]"
										]
									]
                    						],[
									'title' => "$name[3]",
									'text' => "$address[3]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => 'ไม่มีเบอร์ติดต่อ',
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[3]"
										]
									]
                    						],[
									'title' => "$name[4]",
									'text' => "$address[4]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[4]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[4]"
										]
									]
                    						]
							]
						]
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
				    	];
					break;
				
				case 'ร้านค้า': 
					$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.825699,100.516154&radius=1500&type=grocery_or_supermarket&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
					$curl_handle = curl_init();
					curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt( $curl_handle, CURLOPT_URL, $url );
					curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
					$text = curl_exec( $curl_handle );
					curl_close( $curl_handle ); 
					$obj = json_decode($text, TRUE);
					$name = array();
					$number = array();
					$address = array();
					$urll = array();
					for ($x = 0; $x <= 6; $x++) {
						$mes = $obj['results'][$x]['place_id']; 
						$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
						$curl_handle = curl_init();
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt( $curl_handle, CURLOPT_URL, $url );
						curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
						$text = curl_exec( $curl_handle );
						curl_close( $curl_handle ); 
						$object = json_decode($text, TRUE);
						array_push($name, $object['result']['name']);
						array_push($number, $object['result']['formatted_phone_number']);
						array_push($address, $object['result']['vicinity']);
						array_push($urll, $object['result']['url']);
						$addname .= "->>".$name."\n".$number."\n".$address."\n\n";
					}           
					$messages = [
						'type' => 'template',
						'altText' => 'carousel',
						'template' => [
							'type' => 'carousel',
							'columns' => [
								[
									'title' => "$name[0]",
									'text' => "$address[0]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[0]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[0]"
										]
									]
                    						],[
                        						'title' => "$name[2]",
                        						'text' => "$address[2]",
                        						'actions' => [
                            							[
											'type' => 'postback',
											'label' => 'ไม่มีเบอร์โทร',
											'data' => 'เบอร์โทร'
										],[
                                							'type' => 'uri',
                                							'label' => 'Google Map',
                                							'uri' => "$urll[2]"
										]
									]
								],[
									'title' => "$name[4]",
									'text' => "$address[4]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[4]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[4]"
										]
									]
                    						],[
									'title' => "$name[5]",
									'text' => "$address[5]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[5]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[5]"
										]
									]
                    						],[
									'title' => "$name[6]",
									'text' => "$address[6]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[6]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[6]"
										]
									]
                    						]
							]
						]
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
				    	];	   
					break;
					
				case 'โรงพยาบาล': 
					$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.825699,100.516154&radius=2000&type=hospital&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
					$curl_handle = curl_init();
					curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt( $curl_handle, CURLOPT_URL, $url );
					curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
					$text = curl_exec( $curl_handle );
					curl_close( $curl_handle ); 
					$obj = json_decode($text, TRUE);
					$name = array();
					$number = array();
					$address = array();
					$urll = array();
					for ($x = 0; $x <= 5; $x++) {
						$mes = $obj['results'][$x]['place_id']; 
						$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
						$curl_handle = curl_init();
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt( $curl_handle, CURLOPT_URL, $url );
						curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
						$text = curl_exec( $curl_handle );
						curl_close( $curl_handle ); 
						$object = json_decode($text, TRUE);
						array_push($name, $object['result']['name']);
						array_push($number, $object['result']['formatted_phone_number']);
						array_push($address, $object['result']['vicinity']);
						array_push($urll, $object['result']['url']);
						$addname .= "->>".$name."\n".$number."\n".$address."\n\n";
					}           
					$messages = [
						'type' => 'template',
						'altText' => 'carousel',
						'template' => [
							'type' => 'carousel',
							'columns' => [
								[
									'title' => "$name[0]",
									'text' => "$address[0]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[0]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[0]"
										]
									]
                    						],[
                        						'title' => "$name[1]",
                        						'text' => "$address[1]",
                        						'actions' => [
                            							[
											'type' => 'postback',
											'label' => "$number[1]",
											'data' => 'เบอร์โทร'
										],[
                                							'type' => 'uri',
                                							'label' => 'Google Map',
                                							'uri' => "$urll[1]"
										]
									]
								],[
									'title' => "$name[2]",
									'text' => "$address[2]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[2]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[2]"
										]
									]
                    						],[
									'title' => "$name[3]",
									'text' => "$address[3]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[3]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[3]"
										]
									]
                    						],[
									'title' => "$name[4]",
									'text' => "$address[4]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => 'ไม่มีเบอร์ติดต่อ',
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[4]"
										]
									]
                    						]
							]
						]
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
				    	];	   
					break;
					
				case 'ที่พัก': 
					$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.825699,100.516154&radius=500&type=lodging&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
					$curl_handle = curl_init();
					curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt( $curl_handle, CURLOPT_URL, $url );
					curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
					$text = curl_exec( $curl_handle );
					curl_close( $curl_handle ); 
					$obj = json_decode($text, TRUE);
					$name = array();
					$number = array();
					$address = array();
					$urll = array();
					for ($x = 0; $x <= 8; $x++) {
						$mes = $obj['results'][$x]['place_id']; 
						$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
						$curl_handle = curl_init();
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt( $curl_handle, CURLOPT_URL, $url );
						curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
						$text = curl_exec( $curl_handle );
						curl_close( $curl_handle ); 
						$object = json_decode($text, TRUE);
						array_push($name, $object['result']['name']);
						array_push($number, $object['result']['formatted_phone_number']);
						array_push($address, $object['result']['vicinity']);
						array_push($urll, $object['result']['url']);
						$addname .= "->>".$name."\n".$number."\n".$address."\n\n";
					}           
					$messages = [
						'type' => 'template',
						'altText' => 'carousel',
						'template' => [
							'type' => 'carousel',
							'columns' => [
								[
									'title' => "$name[1]",
									'text' => "$address[1]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[1]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[1]"
										]
									]
                    						],[
                        						'title' => "$name[2]",
                        						'text' => "$address[2]",
                        						'actions' => [
                            							[
											'type' => 'postback',
											'label' => 'ไม่มีเบอร์ติดต่อ',
											'data' => 'เบอร์โทร'
										],[
                                							'type' => 'uri',
                                							'label' => 'Google Map',
                                							'uri' => "$urll[2]"
										]
									]
								],[
									'title' => "$name[3]",
									'text' => "$address[3]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[3]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[3]"
										]
									]
                    						],[
									'title' => "$name[4]",
									'text' => "$address[4]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => 'ไม่มีเบอร์ติดต่อ',
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[4]"
										]
									]
                    						],[
									'title' => "$name[8]",
									'text' => "$address[8]",
									'actions' => [
										[
											'type' => 'postback',
											'label' => "$number[8]",
											'data' => 'เบอร์โทร'
										],[
											'type' => 'uri',
											'label' => 'Google Map',
                                							'uri' => "$urll[8]"
										]
									]
                    						]
							]
						]
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
				    	];	   
					break;	
					
				case 'ปั๊มน้ำมัน': 
					$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.825699,100.516154&radius=2000&type=gas_station&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
					$curl_handle = curl_init();
					curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt( $curl_handle, CURLOPT_URL, $url );
					curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
					$text = curl_exec( $curl_handle );
					curl_close( $curl_handle ); 
					$obj = json_decode($text, TRUE);
					for ($x = 0; $x < 5; $x++) {
						$mes = $obj['results'][$x]['place_id']; 
						$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
						$curl_handle = curl_init();
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt( $curl_handle, CURLOPT_URL, $url );
						curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
						$text = curl_exec( $curl_handle );
						curl_close( $curl_handle ); 
						$object = json_decode($text, TRUE);
						$name = $object['result']['name']; 
						$urll = $object['result']['url'];
						$address = $object['result']['vicinity'];
						$addname .= "->>".$name."\n".$address."\n".$urll."\n\n";
					}            
				    // Build message to reply back
					$messages = [
						'type' => 'text',
						'text' => "$addname"
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
				    	];	   
					break;
					
				case 'ATM': 
					$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.825699,100.516154&radius=500&type=atm&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
					$curl_handle = curl_init();
					curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt( $curl_handle, CURLOPT_URL, $url );
					curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
					$text = curl_exec( $curl_handle );
					curl_close( $curl_handle ); 
					$obj = json_decode($text, TRUE);
					for ($x = 0; $x < 5; $x++) {
						$mes = $obj['results'][$x]['place_id']; 
						$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
						$curl_handle = curl_init();
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt( $curl_handle, CURLOPT_URL, $url );
						curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
						$text = curl_exec( $curl_handle );
						curl_close( $curl_handle ); 
						$object = json_decode($text, TRUE);
						$name = $object['result']['name']; 
						$urll = $object['result']['url'];
						$address = $object['result']['vicinity'];
						$addname .= "->>".$name."\n".$address."\n".$urll."\n\n";
					}            
				    // Build message to reply back
					$messages = [
						'type' => 'text',
						'text' => "$addname"
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
				    	];	   
					break;
				
				default :
					$messages = [
						'type' => 'text',
						'text' => 'กรุณาสอนบอท'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;					
			}
		}
		if ($event['type'] == 'message' && $event['message']['type'] == 'sticker'){
			// Get text sent
			$text = $event['message']['sticker'];
			// Get replyToken
	       		$replyToken = $event['replyToken'];
			$random = rand(407,430);
			$messages = [
				'type' => 'sticker',
                         	'packageId' => '1',
                         	'stickerId' => $random
			];
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages]
			];
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
echo "OK";
