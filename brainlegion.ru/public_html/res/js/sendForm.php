<?php
header('Access-Control-Allow-Origin: *');
if (isset ($_POST['email'])) {
  $to = "brainlegionufa@gmail.com"; // поменять на свой электронный адрес
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  // $subject = "Subject";
  $message = "Имя: ".$_POST['name']."\nEmail: ".$from."\nТелефон: ".$_POST['phone']."\nСообщение: ".$_POST['text'];
  $boundary = md5(date('r', time()));
  $filesize  = '';
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $from . "\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  $message="
Content-Type: multipart/mixed; boundary=\"$boundary\"

--$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message";
  for($i=0;$i<count($_FILES['file']['name']);$i++) {
     if(is_uploaded_file($_FILES['file']['tmp_name'][$i])) {
         $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'][$i])));
         $filename = $_FILES['file']['name'][$i];
         $filetype = $_FILES['file']['type'][$i];
         $filesize += $_FILES['file']['size'][$i];
         $message.="

--$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=\"$filename\"

$attachment";
     }
   }
   $message.="
--$boundary--";
  echo $message;
  mail($to, $subject, $message, $headers);
$output = '<script>alert("Ваше сообщение получено, спасибо!");</script>';
} else{
  $to = "brainlegionufa@gmail.com"; // поменять на свой электронный адрес
  $from = "noreply";
  $subject = "Заказ на обратный звонок";
  $message = "Имя: ".$_POST['name']."\nТелефон: ".$_POST['phone'];
  $headers = "From: " . $from;
  mail($to, $subject, $message, $headers);
}
?>
