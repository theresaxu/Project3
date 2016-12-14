<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Phonebook Entry</title>
      <link rel="stylesheet" href="css/long-scrolly.css">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/fonts.css">
  <style>
      @import 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i';
      @import url('https://fonts.googleapis.com/css?family=Nunito+Sans');
  </style>

</head>

<body>

<?php include "inc/nav.inc" 
?>



<section id = "first">
    <div class="container">
      <div class="content">
     
            <div id = "contact-form">
            <h1> Contact Form </h1>
            <form name ="contactForm" action ="database-write.php" method = "post" onsubmit = "return (validate());">
            	<div>
            	 Name: 
            	<input type="text" name="name">
              	<br>
              	</div>
              	<div>
              Email:
              	<input type="text" name="email">
                <br>
            	 </div>
            	
              <div> 
              	Phone:
              	<input type="text" name="phone">
                <br>
              </div>
              	
              <div>
                Message: 
                <textarea id = "msg" name = "message"></textarea>
                <br>
              </div>
                <input type = "submit" value = "Submit" class ="submit">
             </form>
            </div>
            </div>
            </div>
</section>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>

<script type = "text/javascript">

function validate() {
  if(document.contactForm.name.value == "") {
    alert("Enter a first name");
    document.contacForm.firstname.focus();
    return false;
  }
  var x = document.contactForm.email.value; 
  atpos = x.indexOf("@");
  dotpos = x.lastIndexOf(".");

  if (atpos < 1 || ( dotpos - atpos < 2 )) {
    alert("Email not valid");
    document.contactForm.email.focus();
    return false;
 }
  if(document.contactForm.phone.value == "") {
    alert("Enter a phone number");
    document.contacForm.phone.focus();
    return false;
  }

return true;
}

</script>
</body>
</html>