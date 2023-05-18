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

        <!-- input text-area -->
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="input-paragrafo">Paragrafo:</label>
            <input class="w-50" type="text" name="inputParagrafo" id="input-paragrafo" required maxlength="40">
            
        </div>
        
        <!-- input text -->
        <div class="d-flex flex-column align-items-center mb-3">
            <label for="bad-word">Parola da censurare:</label>
            <input id="bad-word" type="text" placeholder="Parola che desideri censurare.." name="inputParola" required>
        </div>
        
        <button type="submit" class="d-block mx-auto">
            Invia Form
        </button>

    </form>
    
</body>
</html>