<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nomeOggetto = $_POST["nome"];
        $costoOggetto = $_POST["costo"];
        $quantitaOggetto = $_POST["quantitaOggetto"];

        if(isset($_POST["stato"])){
            $statoOggetto = "Oggetto usato";
        } else {
            $statoOggetto = "Oggetto nuovo";
        }

        $metodoPagamento = $_POST["pagamento"];
            
        echo "<ul>";
            echo "<li>$nomeOggetto</li>";
            echo "<li>$costoOggetto</li>";
            echo "<li>$quantitaOggetto</li>";
            echo "<li>$statoOggetto</li>";
            echo "<li>$metodoPagamento</li>";
        echo "</ul>";

        echo "<p>Costo iniziale: $costoOggetto</p>";
        $costoFinaleOggetto = $costoOggetto;
        if($statoOggetto == "Oggetto usato"){
            $costoFinaleOggetto = $costoFinaleOggetto * 0.8;
        }
        if($metodoPagamento == "carta"){
            $costoFinaleOggetto = $costoFinaleOggetto + 2;
        }
        echo "<p>Costo finale: $costoFinaleOggetto</p>";
    ?>
</body>
</html>