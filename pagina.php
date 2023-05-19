<?php
    $paragrafo= $_POST['inputParagrafo'];
    $badWord= $_POST['inputParola'];
    $paragrafoCensurato = str_replace($badWord, '***', $paragrafo);

    echo str_replace( $badword, '***', $paragrafo);

    var_dump (str_replace( $parola, '***', $paragrafo));
    var_dump($badWord);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina php</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

    <hr>

    <div class="bg-secondary p-4 text-light">
        <div>
            <span class="text-uppercase">paragrafo originale:</span>  
            <?php echo $paragrafo ?>
        </div>

        <div>
            <span>Lunghezza paragrafo:</span>  
            <?php echo strlen($paragrafo) ?>
        </div>
        <br>
        <div>Parola da bannare: <?php echo $badWord ?></div>
    </div>

    <hr>

    <div class="bg-success p-3 text-light">
        <span class="text-uppercase">paragrafo censurato:</span>
        <?php echo $paragrafoCensurato  ?>

        <div>
            <span>Lunghezza paragrafo censurato:</span>  
            <?php echo strlen($paragrafoCensurato) ?>
        </div>
    </div>

</body>
</html>