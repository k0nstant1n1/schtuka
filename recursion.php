<?php
function colorPick($i, $j){
    if(($i + $j) % 2 === 0){
        echo 'background-color: blue'; // Тут можно поменять цвет.
    } else
        {echo 'background-color: yellow';}
}
function pickWidth($j){
    echo "width: " . (sin(deg2rad($j*10))*100+130)/6 . "px";
}
function pickHeight($i){
    echo "height: " . (sin(deg2rad($i*10))*100+130)/6 . "px";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>recursion</title>
        <style type="text/css" rel="stylesheet">
            div {
                float: left;
                border-radius: 30%;   /* Тут можно поменять округлость элементов * /
            }
        </style>
    </head>
    <body style="background-color: yellow;>
            <?php for($i = 25; $i < 66; $i++){
                for($j = 25; $j < 66; $j++){ ?>
                    <div style="<?php colorPick($i,$j) ?>; <?php pickWidth($j) ?>;
                    <?php pickHeight($i) ?>;  <?php if($j == 25){echo "clear: left";} ?>;">
                    </div>
            <?php }  } ?>
    </body>
</html>
