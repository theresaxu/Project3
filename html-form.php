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
            <form action ="database-write.php" method = "post">
            	<div>
            	 First Name: 
            	<input type="text" name="firstname">
              	<br>
              	</div>
              	<div>
              Last name:
              	<input type="text" name="lastname">
                <br>
            	 </div>
            	
              <div> 
              	Telephone:
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
</body>
</html>