<?php
if( !isset( $_GET['key'] ) && $_GET['key'] !== '229855ec0888c71470118de952020509828f05bc' ) {
exit("Error 400");
}
$file_pointer = "nik-logs.log";
if (!file_put_contents($file_pointer, 'Inicio')) {
    echo ("$file_pointer no pudo ser limpiado");
}
else {
    echo ("$file_pointer a sido limpiado");
}
?>