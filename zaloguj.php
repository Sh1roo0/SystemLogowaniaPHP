<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zaloguj.css">
    <title>Document</title>
</head>

<body>

    <header>
        <a href="index.php">Wyloguj</a>
        <a href="dodaj.php">Dodaj artykuł</a>
    </header>

    <main>
        <div class="ariticles">
            <?php

$servername = "localhost";
$username = "root";
$password = "";
$baza = "projektphp";


$conn = new mysqli($servername, $username, $password, $baza);

$sql = "SELECT artykuly.tytul, artykuly.opis FROM artykuly;";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
        echo "
        <article>
            <h1>{$row['tytul']}</h1>
            <p>{$row['opis']}</p>
            
            <button>edytuj</button>
            <button>usun</button>

        </article>
            ";
        
    }
} else {
    echo "Brak rekordów";
    }
            ?>
        </div>
    </main>
</body>

</html>