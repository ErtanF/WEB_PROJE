<?php

if (isset($_POST['Gonder'])) {
    $İsim = $_POST['İsim'];
    echo $İsim;    
    $Sisim = $_POST['Soyisim'];
    echo $Sisim;    
    $mail = $_POST['Email'];
    echo $mail;    
    $k = $_POST['Konu'];
    echo $k;    
    $area = $_POST['Mesaj'];
    echo $area;    
}
?>