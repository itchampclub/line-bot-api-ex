<?php


$access_token = 'OGQmM70UyBouqcPvHkkMROOSSMw+PUmFHmOs782sOozvah49r85WnwCPL1D075fiTv8NtDsPUaE2mzUVQYuwtO31WMCgk7VS8U32JGF8wIz99zm/nC9znoBfnrIu/jt14s6VHFbsLsJWHElUaFtsQgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
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
				case 'หวัดดี' :
					$messages = [
						'type' => 'text',
						'text' => 'ดีจ้า'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
					
				case 'สบายดีมั้ย' :
					$messages = [
						'type' => 'text',
						'text' => 'สบายดี'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
									
				case 'วันนี้' :
					$messages = [
						'type' => 'text',
						'text' => 'วันดีปีใหม่'
					];
					$mess = [
						'type' => 'text',
						'text' => 'อย่าลืมไปลอยกระทงนะ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess]
					];
					break;
									
				case 'อากาศดี' :
					$messages = [
						'type' => 'text',
						'text' => 'เหมาะแก่การนอนมากๆเลย ~'
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
						'text' => 'โดยพิมพ์คำว่า ร้านอาหาร ดูนะ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess]					
					];
					break;
				
				case 'น่ารัก' :
					$messages = [
						'type' => 'text',
						'text' => 'ขอบคุณที่ชมค้าบบบ'
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
						'text' => 'ถ้าไม่มีลองหาที่ซื้อร่ม โดยพิมพ์คำว่า ห้างสรรพสินค้า ดูสิ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess, $me]
					];
					break;
				
				case 'บอทชื่ออะไร' :
					$messages = [
						'type' => 'text',
						'text' => 'เราชื่อ บอทเวย์'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages]
					];
					break;
				
				case 'แนะนำเพลงหน่อย' :
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
				
				case 'ทำอะไรดี' :
					$messages = [
						'type' => 'text',
						'text' => 'ไปไหว้พระกันมั้ย'
					];
					$mess = [
						'type' => 'text',
						'text' => 'ลองค้นหาวัดใกล้ๆ'
					];
					$me = [
						'type' => 'text',
						'text' => 'โดยพิมพ์คำว่า วัด ดูสิ'
					];
					// Make a POST Request to Messaging API to reply to sender
					$url = 'https://api.line.me/v2/bot/message/reply';
					$data = [
						'replyToken' => $replyToken,
						'messages' => [$messages, $mess, $me]
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
						$number = $object['result']['formatted_phone_number'];
						$address = $object['result']['formatted_address'];
						$addname .= "->>".$name."\n".$number."\n".$address."\n\n";
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
						$number = $object['result']['formatted_phone_number'];
						$address = $object['result']['formatted_address'];
						$addname .= "->>".$name."\n".$number."\n".$address."\n\n";
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
		error_log(json_encode($data));
		$post = json_encode($data);
		$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			
		$result = curl_exec($ch);
		curl_close($ch);
		url_close($ch);
		error_log($result);
		echo $result . "\r\n";		
	}
}
echo "OK";
