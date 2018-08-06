 <?php
  

function send_LINE($msg){
 $access_token = '1zfgwlu7kG10ICC2zchFoPqCCE25XEzL9hCdEGNXwv10MGFCyRhpXYnBD8/iDavbkK3kXtk09lC3y6+EgVrWpWUetJFHXvqqELj9ZB6oGSNYSbrJV/hlCiycGC2XCXhKNZIVkO8COslLjVDQ20mdQwdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'eO5eKj8BGvGAWNhS7so5Kzs4lyF8oDvArMHD0BIXW4o',
        'messages' => [$messages],
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

      echo $result . "\r\n"; 
}

?>
