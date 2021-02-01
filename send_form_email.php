<?php
if(isset($_POST['email'])) {
 
    $email_to = "insurancecontact@foringtech.xyz";
    $email_subject = "Your email subject line";
 
    function died($error) {
        
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Sorry!Form wasnt submitted');       
    }
 
     
 
    
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address is Invalid!. <br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name is Invalid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The message is too big!<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Contact details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 


  <h1>Thank you for contacting us!</h1>
</div>

<br>
<br>
<button onclick="window.location.href = 'index.php';" > Return back to your profile!</button>
 
 
<?php
 
}
?>