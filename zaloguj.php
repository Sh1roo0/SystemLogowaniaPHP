<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
body html{
width: 100%;
height: 100vh;
}
body{
    background-color: rgba(89, 131, 252, 1);
background-image: linear-gradient(360deg, rgba(89, 131, 252, 1) 0%, rgba(209, 222, 255, 1) 100%);
background-repeat: no-repeat;
display: flex;
align-items: center;
flex-direction: column;
margin: 200px 0;
}
.box{
    width: 30%;
    height: 400px;
    background-color: aliceblue;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
a{
    width: 100%;
    display:flex;
    justify-content:center;
    text-decoration:none;
}
button{
    width: 55%;
    height: 40px;
    background-color: rgb(56, 153, 243);
    font-size: 23px;
    color: white;
}

    </style>
</head>
<body>
    <div class="box">
        <h1>Pomyslnie zalogowano</h1>
        <a href="index.php"><button>Wyloguj</button></a>
    </div>
    

    
</body>
</html>