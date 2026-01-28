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
        array("User" => "Login1" , "Password" => "Haslo1"),
        array("User" => "Login2" , "Password" => "Haslo2"),
        array("User" => "Login3" , "Password" => "Haslo3"),
        array("User" => "Login4" , "Password" => "Haslo4"),
        array("User" => "Login5" , "Password" => "Haslo5")
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