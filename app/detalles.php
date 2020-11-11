<?php 


function letramas(){
    $abecedario  =   ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l',' m', 'n', '๑', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $letra = count_chars($_REQUEST['comentario'],0);
    $letra[ord($abecedario)];
    echo "la letra mas repetida es " + $letra;
}
?>

<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario'],) ?></td></tr>
<tr><td>Nยบ de palabras:    </td><td><?= str_word_count($_REQUEST['comentario']) ?></td></tr>
<tr><td>Letra + repetida:  </td><td><?= letrasmas()?></td></tr>
<tr><td>Palabra + repetida:</td><td><?=substr_count($_REQUEST['comentario'], ) ?></td></tr>
</table>
</div>

