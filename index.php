<?php 
    $toBeOrNot = "Essere, o non essere, questo è il dilemma:
    se sia più nobile nella mente soffrire
    colpi di fionda e dardi d'oltraggiosa fortuna
    o prender armi contro un mare d'affanni
    e, opponendosi, por loro fine? Morire, dormire…
    nient'altro, e con un sonno dire che poniamo fine
    al dolore del cuore e ai mille tumulti naturali
    di cui è erede la carne: è una conclusione
    da desiderarsi devotamente. Morire, dormire.";
    $toBeLength = strlen($toBeOrNot);
    $toCensorWord = $_GET["censor"];
    $censoredWord = "***"; 

    $toBeOrNot = str_replace($toCensorWord, $censoredWord, strtolower($toBeOrNot));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To be or not to be</title>
</head>
<body>
    <div><?php echo $toBeOrNot; ?></div>
    <div>Lunghezza stringa: <?php echo $toBeLength; ?> caratteri</div>
</body>
</html>