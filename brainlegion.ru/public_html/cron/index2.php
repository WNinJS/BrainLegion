<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//php /home/vh4u14185/public_html/cron/index.php > /home/vh4u14185/CRON_LOG.txt
require '/home/vh4u14185/domains/brainlegion.ru/public_html/cron/lib/phpmailer/src/Exception.php';
require '/home/vh4u14185/domains/brainlegion.ru/public_html/cron/lib/phpmailer/src/PHPMailer.php';
require '/home/vh4u14185/domains/brainlegion.ru/public_html/cron/lib/phpmailer/src/SMTP.php';

require_once('TwitterAPIExchange.php');
	
$settings = array(
    'oauth_access_token' => "984107680255135744-g3cMGeQrgOLbmUf1RjNuEoH9dBsFmPt",
    'oauth_access_token_secret' => "hcExhGZNurT0QS0JRIiZ0wAIDrUD7XrLaTGuNDfgA6PMv",
    'consumer_key' => "j1bOVRd6zSLKDYhjQa3hQKFRb",
    'consumer_secret' => "Ljaxvku6cbUklwykjKfaB8k6cvkH1vw0JF6jWnF4r9YUDQ5uy0"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = "GET";

$curray[] = array();
$file = fopen('/home/vh4u14185/domains/brainlegion.ru/public_html/cron/settings/currency.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
  $ps = explode(";", $line[0]);
  if (strcasecmp($ps[0], $ps[1]) == 0) {
    array_push($curray, $ps[0]);
	}
	else
	{
		array_push($curray, $ps[0], $ps[1]);
	}
}
fclose($file);

$storay [] = array();
$file = fopen('/home/vh4u14185/domains/brainlegion.ru/public_html/cron/settings/stock_exchanges.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
array_push($storay, $line[0]);
}
fclose($file);

$message = '';
foreach($storay as $se)
{
	//echo 'looking for:' . $se . '<br>';
	if (isset($_GET['user']))  {$user = preg_replace("/[^A-Za-z0-9_]/", '', $_GET['user']);}  else {$user  = "iagdotme";}
	if (isset($_GET['count']) && is_numeric($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
	$getfield = '?f=tweets&src=typd&vertical=default&q='.$se.' will be listed';
	$twitter = new TwitterAPIExchange($settings);
	$json = json_decode($twitter->setGetfield($getfield)
	->buildOauth($url, $requestMethod)
	->performRequest(),$assoc = TRUE);
	$c = false;
	$m1 = '';
	foreach($json['statuses'] as $item) 
	{
		$targetTime = strtotime($item['created_at']); 
		$currentTime = time();
		$difference = $currentTime-$targetTime;
                $b1 = false;
                foreach($curray as $cu)
                {
                       if((strpos($item['text'], $cu) >= 0)) { $b1 = true; }
                }
		if (($difference < 360) && (strpos($item['text'], 'RT') !== 0) && $b1) 
		{
			$m1 .= 'https://twitter.com/'.$item['user']['screen_name'].'/status/' . $item['id_str'] . '<br>' . $item['user']['screen_name'] . ' says: ' . $item['text'];
			$m1 .= '<br>';
			$c = true;
		}
	}
	if ($c){ 
               $message.= '---------------------------<br>';
               $message .= $se; 
               $message.= '<br>---------------------------<br>'; 
               $message.= $m1;}
}
if (strlen($message)>0)
{
$mail = new PHPMailer;
$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
); 


//Enable SMTP debugging. 
$mail->SMTPDebug = 1;
//Set PHPMailer to use SMTP.
//$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "mail.brainlegion.ru";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "info@brainlegion.ru";                 
$mail->Password = "Brainlegion001";                           
//If SMTP requires TLS encryption then set it
//$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "info@brainlegion.ru";
$mail->FromName = "Brain Legion";

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);

$mail->addAddress("cryptoufa@gmail.com");
$mail->isHTML(true);
$mail->Subject = "Cryptotweets from " . date("D M d, Y G:i a");
$mail->Body = $message;
$mail->AltBody = "";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
}
?>

