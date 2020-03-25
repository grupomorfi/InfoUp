<?php
if (isset($_POST['subir'])){
    $nombre=$_FILES['archivo']['name'];
    $tipo=$_FILES['archivo']['type'];
    $tama=$_FILES['archivo']['size'];
    $temporal=$_FILES['archivo']['tmp_name'];
    $aDonde="imagenes/".$nombre;
    $subir=move_uploaded_file($temporal, $aDonde);
    if($subir){
        echo "huy triplehijueputa hermano";
    }else{
        echo "paila";
    }
}
?>