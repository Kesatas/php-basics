
<?php
    $money = rand(3,50);
    $bokal_cost = 3; //eur
    $kartai = $money / $bokal_cost;
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <div>
            <?php for($i = $money; $i > $bokal_cost; $i -= $bokal_cost): ?>
            <img src="bokalas.jpg" alt="alus" width="100" height="100">
            <?php endfor; ?>
        </div> 
    </body>
</html>





    