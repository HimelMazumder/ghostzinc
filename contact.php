<?php
/* Set e-mail recipient */
$to = "ghostzinc@outlook.com";
$subjectm = "Message from www.ghostzinc.com";

/* Check all form inputs using check_input function */
$name = $_REQUEST['author'] ;
$email = $_REQUEST['E-mail'] ;
$subject = $_REQUEST['subject'] ;
$message = $_REQUEST['text'] ;
/* If e-mail is not valid show error message */

/* Let's prepare the message for the e-mail */
$messagem = "

Name: $name
E-mail: $email
Mail sub: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($to, $subjectm, $messagem);

/* Redirect visitor to the thank you page */
header('Location: thankyou.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>