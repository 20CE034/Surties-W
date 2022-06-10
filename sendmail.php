<?php
$user = $_POST["name"];
$email = $_POST["email"];
$mess = $_POST["message"];
$number = $_POST["Contact"];
$subject = $_POST["subject"];
$message = "<html>
<body>
<style>
tr {
    font-size: x-large;
}
</style>
  
  <table>
		<tr>
			<td><h4><strong>Name</strong></h4></td>
			<td>&nbsp;$user</td>
		</tr>
		<tr>
			<td><h4><strong>Email</strong></h4></td>
			<td>&nbsp;$email</td>
		</tr>
		<tr>
			<td><h4><strong>Phone Number</strong></h4></td>
			<td>&nbsp;$number</td>
		</tr>
		<tr>
			<td><h4><strong>Subject</strong></h4></td>
			<td>&nbsp;$subject</td>
		</tr>
		<tr>
			<td><h4><strong>Message</strong></h4></td>
			<td>&nbsp;$mess</td>
		</tr>
		<tr>
			<td><h4><strong>Design And Developed by</strong></h4></td>
			<td><strong>&nbsp;ATNO SOLUTIONS</strong></td>
		</tr>
</table>
  
</body>
</html>";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

if ($_POST["message"]) {
    mail(
        "data@surties.com",
        "New Request From $user",
        $message,
        implode("\r\n", $headers)
    );
}
header("Location: https://surties.com/");
?>