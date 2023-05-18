<?php

$nome= 'Pablo';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio php-badwords</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

</head>
<body>

    <!-- <h1>Ciao Mondo, sono Pablo <?php echo $nome ?> </h1> -->
    <h1>
        Compila il seguente form
    </h1>

    <form action="pagina.php" method="POST">

    <div>
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="input-area">Paragrafo:</label>
            <textarea id="input-area" name="paragrafo" id="" cols="30" rows="5" required>

            </textarea>
        </div>
        
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="bad-word">Parola da censurare:</label>
            <input id="bad-word" class="w-50" type="text" placeholder="Parola che desideri censurare.." name="badWord">
        </div>
        
        <button type="submit" class="d-block mx-auto">Invia Form</button>

    </div>

</form>
    
</body>
</html>