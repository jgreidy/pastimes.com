{% raw %}
<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];
$subj = $_POST['subj'];


if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$subj = $subj ;
$subject = $subj;

$notes = stripcslashes($notes);

$message = " $todayis [EST] \n
Subject: $subj \n
Message: $notes \n
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("mail@pastimes.com", $subject, $message, $from);

?>


		<div id="navigation">
			<div id="link_home"> <a id="home" href="index.php" ></a></div>
			<div id="link_buy_sell"> <a id="buy_sell" href="buy_sell.php"></a></div>
			<div id="ink_contact_us"> <a id="contact_us" href="contact_us.php"></a></div>
		</div>

		<div class="content">

			<p>
			Date: <?php echo $todayis ?>
			<br />
			Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> )
			<br />

			Subject: <?php echo $subj ?>
			<br />
			Message:<br />
			<?php $notesout = str_replace("\r", "<br/>", $notes);
			echo $notesout; ?>
			<br />
			<?php echo $ip ?>

			<br /><br />
			Thank you for contacting us!
			</p>

		</div>

<?php

require 'footer.php'
?>