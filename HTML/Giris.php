<?php

if(isset($_POST['Gonder']))
{
    $v1 = $_POST['kAdı'];
    $v2 = $_POST['Şifre'];

    if($v1 != "b211210063@sakarya.edu.tr" || $v2 != "b211210063" )
    {
        header("location:Giris.html");

    }
    else
    {
        echo " HOŞ GELDİN B211210063 GİRİŞ İŞLEMİNİ BAŞARIYLA TAMAMLADIN DİLERSEN AŞAĞIDAKİ LİNKTEN ANA SAYFAYA GİDEBİLİRSİN "."<br>";
        echo "<p> <a href='Hakkında.html'>&lt;ANA SAYFA&gt;</a></p> ";
    }
}

if($v1 and $v2){
 
} else {
header("location:Giris.html");
}
?>

