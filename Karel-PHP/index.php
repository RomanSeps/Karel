<?php
session_start();
ResetField();

function ResetField(){
    $_SESSION['Charles'] = ['x' => 0, 'y' => 0, 'd' => 0];
    $_SESSION['Field'] = array_fill(0, 10, array_fill(0, 10, ' '));
}

function Render(){
    $field = $_SESSION['Field'];
    foreach($field as $y => $row){
        foreach($row as $x => $collumn){
            $idk = ($collumn === 'K') ? 'K' : '';
            echo '<div class="cube"></div>';
        }
    }
}

function Refresh(){
    
}

function Move(){
    $Charles = $_SESSION['Charles'];
    $size = 10;

    switch ($karel['d']) {
        case 0:
            if ($karel['x'] < $size - 1)
            $karel['x']++;
            break;

        case 1:
            if ($karel['y'] < $size - 1)
            $karel['y']++;
            break;

        case 2:
            if ($karel['x'] > 0)
            $karel['x']--;            
            break;

        case 3:
            if ($karel['y'] > 0)
            $karel['y']--;            
            break;
    }
}

function Place(){
}

function Commands($command){
    $explode = explode(' ', $command);
    $tfIcare = strtoupper($explode);
    $LosinIt = isset($explode[1]) ? intval($explode[1]) : 1;

    switch($tfIcare){
        case "KROK":
            for($i = 1; $i <= $LosinIt; $i++){
                Move();
            }
            break;

        case "VLEVOBOK":
            break;

        case "POLOZ":
            Place();
            break;

        case "RESET":
            ResetField();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>KAREL</h1>
    <div class="grid">
        <?php Render() ?>
    </div>
    <form method="post">
        <input type="text">
        <button>Submit</button>
    </form>
</body>
</html>