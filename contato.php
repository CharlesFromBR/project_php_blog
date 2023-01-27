<?php 
include_once("template/header.php")

?>


<?php 
include_once("template/footer.php")

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>

<body>
     <div class="parent-container">
     <div class ="content-title-contato"><h1>Entre em contato</h1>
     <p>Preencha o formulário abaixo para entrar em contato conosco.</p>
    </div>

    <div class="form-container">
    <form>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="message">Message:</label>
  <textarea id="message" name="message"></textarea>

  <input type="submit" value="Submit">
</form>
    </div>
     </div>



</body>
</html>
