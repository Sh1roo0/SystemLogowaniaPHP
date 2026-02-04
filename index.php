<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Logowania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Logowanie</h1>
        <form action="index.php" method="post">
            <label for="login">LOGIN</label>
            <input type="text" id="login" name="login" placeholder="Login">
            <label for="haslo">HASLO</label>
            <input type="password"id="haslo" name="haslo" placeholder="Haslo">
            <label for="verify">Veryfikacja</label>
            <input type="checkbox" name="verify" id="verify">
            <input type="submit" value="Zaloguj" id="button">
        </form>
        
    </div>

 <?php
    $users =  array(
        array("User" => "login1" , "Password" => "1234"),
        array("User" => "login2" , "Password" => "1234"),
        array("User" => "login3" , "Password" => "1234"),
        array("User" => "login4" , "Password" => "1234"),
        array("User" => "login5" , "Password" => "1234")
    );

    $login = isset($_POST['login']);
    $haslo = isset($_POST['haslo']);

   
   
    


    

    $islogged = false;  

    
     foreach($users as $u){
    if($login == $u["User"] && $haslo == $u["Password"] && isset($_POST['verify'])){
        $islogged = true;
        break;
    }
        
    }
    if($islogged ==true){
        header("Location: zaloguj.php");
    }
    

   
    ?> 
</body>
</html>