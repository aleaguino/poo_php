<?php
require_once 'Cliente.php';
$c1 = new Cliente("Pablo Cepeda");
$c2 = new CLiente("Manuel Gomez");

?>
<ol>
<li><?= $c1 -> getNombre()?></li>
</ol>