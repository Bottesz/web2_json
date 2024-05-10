<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //elso beolvasas
    $fajl=readfile("kedvenc2.json");
    echo "$fajl";
    // masodik beolvasas
    $eroforras = fopen("kedvenc2.json","r") or die 
    ("Unable to open file!");
    $fajl = fread($eroforras,filesize("kedvenc2.json"));
    fclose($eroforras);
    echo $fajl;

    //átalakítás tömbbé
    $tomb = json_decode($fajl);
    echo '<pre>'. var_export($tomb, true) . '<pre>';

    //táblázatba kiiratas
    ?>
    <div>
        <table>
            <tr>
                <?php
                foreach ($tomb[0] as $kulcs => $ertek){

                    echo "<th>";
                    echo $kulcs;
                    echo "</th>";
                }

                echo "</tr>";
                for ($elemek=0; $elemek <  count($tomb);
                $elemek++) { 
                echo "<td>";
                if ($kulcs == "kép"){
                    echo "<img src=\kepek/" . $ertek . "\" alt=\"$ertek\">";

                }
                }
                for ($elemek = 0; $elemek< $count < count($tomb); { 
                    echo "<td>";
                        foreach ($tomb[0] as $kulcs => $ertek) {
                        echo "<td>";
                        echo $ertek;
                        echo "</td>";

                    };
                    echo "</td>";
             }
                ?>
        </table>
    </div>
</body>
</html>