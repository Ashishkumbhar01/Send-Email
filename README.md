# Send-Email
Simple mail sending by PHPMailer and Create your local system.
## How to setup phpmailer
- First one go to your XAMMP, WAMP, LAMP and MAMP htdocs folder.
- Create your project folder.
- Install PHPMailer in your system by composer (CLI) and another way download from to github
phpmailer zip folder.
- PHPMailer zip Extract your system.
- Copy to PHPMailer all files and folder your Project folder paste here.
## Working in your index.php
- First one create your UI design.
- Second one is Basic knowledge of SMTP.
## Working on sendmail.php
- First one is check your PHPMailer Path.
- Import your PHPMailer.php, SMTP.php and last one is Exception.php .
- Write your logic.
- Code running good after MailDebug value your change. Like 0.
## Gmail SMTPS
- $mail->SMTPSecure = 'ssl';
- $mail->Host = 'ssl://smtp.gmail.com';
- $mail-Port = 465;
## Gmail STARTSMTP
- $mail->Host = 'tls://smtp.gmail.com';
- $mail->Port = 587;
- $mail->SMTPSecure = 'tls';
# Mail sending failed.
## Problem Solve
- Can you used your gmail account in your project so you change your gmail accent setting.
- Make sure first one disabled two steps Authentication.
- Second one is Enable to your IMAP.
- Last one is less secure access on (Enable).

* You make a responsive UI so you used Bootstrap css framework.
<code>Happy Coding.</code>

