<html>
  <head>
  <head>

</head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Defective Login Page</title>
  </head>
  <body>


   <form action="index.php" class="login" method="get">
    <input type="text" placeholder="email" class="emaila" name="email">
    <input type="password" placeholder="password" class="password" name="password">
    <input type="submit">
   </form>
   

    <?php 
    
    $email = $_GET['email'];
    $password = $_GET['password'];


  if ($password == "12345"){
      print "<h1>Hello!</h1";
      print "<h2>$email</h2>";
    }

    
    
    ?> 



  <style>

   body{
     background-color: grey;
   }
  

      
  </style>

  </body>
</html>
