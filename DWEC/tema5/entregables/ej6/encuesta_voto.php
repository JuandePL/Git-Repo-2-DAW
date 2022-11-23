<?php
// Se abre el fichero deonde están almacenados los datos
$fichero = "resultados.txt";
$contenido = file($fichero);

// Colocamos el contenido en un array
// y lo almacenamos en seis variables por equipos
$array = explode("||", $contenido[0]);

print_r($array);

$real = $array[0];
$bar = $array[1];
$atl = $array[2];
$sev = $array[3];
$rso = $array[4];
$rbb = $array[5];

// Actualizamos votos añadiendo el recibido a los anteriores
echo "Voto: " . $_GET['voto'];
switch ($_GET['voto']) {
    case 0:
        $real += 1;
        break;
    case 1:
        $bar += 1;
        break;
    case 2:
        $atl += 1;
        break;
    case 3:
        $sev += 1;
        break;
    case 4:
        $rso += 1;
        break;
    case 5:
        $rbb += 1;
        break;
}

// Creamos la cadena que se va a insertar en el fichero
$insertvoto = $real . "||" . $bar . "||" . $atl . "||" . $sev . "||" . $rso . "||" . $rbb;

// Se abre el fichero como escritura y se escriben los votos actualizados
$fPointer = fopen($fichero, "w");
fputs($fPointer, $insertvoto);
fclose($fPointer);

// se calcula el % del voto de cada uno de los equipos
$denominador = (int)$real + (int)$bar + (int)$atl + (int)$sev;

$tantoMadrid = 0;
$tantoBarcelona = 0;
$tantoAtletico = 0;
$tantoSevilla = 0;
$tantoReal = 0;
$tantoBetis = 0;
try {
    $tantoMadrid = 100 * round($real / $denominador, 2);
    $tantoBarcelona = 100 * round($bar / $denominador, 2);
    $tantoAtletico = 100 * round($atl / $denominador, 2);
    $tantoSevilla = 100 * round($sev / $denominador, 2);
    $tantoReal = 100 * round($rso / $denominador, 2);
    $tantoBetis = 100 * round($rbb / $denominador, 2);
} catch (DivisionByZeroError $th) {
    //throw $th;
}
?>

<style>
    .porcentaje {
        background-color: lightskyblue;
    }
</style>

<h2>Resultado:</h2>
<table>
    <tr>
        <td>Real Madrid:</td>
        <td>
            <div class="porcentaje" style="width: <?php echo $tantoMadrid ?>%;">
                <?php echo $tantoMadrid ?>%
        </td>
        </div>
    </tr>
    <tr>
        <td>Barcelona:</td>
        <td>
            <div class="porcentaje" style="width: <?php echo $tantoBarcelona ?>%;">
                <?php echo $tantoBarcelona ?>%
        </td>
        </div>
    </tr>
    <tr>
        <td>Atlético de Madrid:</td>
        <td>
            <div class="porcentaje" style="width: <?php echo $tantoAtletico ?>%;">
            </div>
            <?php echo $tantoAtletico ?>%
        </td>
    </tr>
    <tr>
        <td>Sevilla:</td>
        <td>
            <div class="porcentaje" style="width: <?php echo $tantoSevilla ?>%;">
                <?php echo $tantoSevilla ?>%
            </div>
        </td>
    </tr>
    <tr>
        <td>Real Sociedad:</td>
        <td>
            <div class="porcentaje" style="width: <?php echo $tantoReal ?>%;">
                <?php echo $tantoReal ?>%
            </div>
        </td>
    </tr>
    <tr>
        <td>Real Betis:</td>
        <td>
            <div class="porcentaje" style="width: <?php echo $tantoBetis ?>%;">
                <?php echo $tantoBetis ?>%
            </div>
        </td>
    </tr>
</table>