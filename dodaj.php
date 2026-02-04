<?php
$servername = "localhost";
$username = "root";
$password = "";
$baza = "projektphp";


$conn = new mysqli($servername, $username, $password, $baza);


$title = $_POST['title'];
$opis = $_POST['opis'];

$query = "INSERT INTO artykuly( tytul, opis) VALUES ('$title', '$opis')";
$conn->query($query);

// if($conn->query($query) === TRUE){
//     echo"dziala";
    
// }else{
//     echo"error";
// }







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie artykulu</title>
    <link rel="stylesheet" href="dodaj.css">
    
</head>
<body>
    <div class="box">
        
        <div class="box-head">
            <h1>Dodaj artykuł</h1>
        </div>
        
        <div class="box-mid">
            <form method="post">
            <label for="title">Podaj Tytuł:</label>
            <input type="text" name="title" id="title" required>

            <label for="opis">Podaj opis:</label>
            <input type="text" name="opis" id="opis" required>

            <button type="submit">Dodaj Artykuł</button>
            <button><a href="zaloguj.php">Pokaz zartykuly</a></button>
            
        </form>
        </div>

        

    </div>
    
</body>
</html>