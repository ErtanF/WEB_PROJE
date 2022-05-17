<?php

if(isset($_POST['Gonder']))
{
    $v1 = $_POST['İsim'];
    echo "İsim : " , $v1."<br>" ;
    
    $v2 = $_POST['Soyisim'];
    echo "Soyisim : " , $v2."<br>" ;

    $v3 = $_POST['Email'];
    echo "Email : " , $v3."<br>" ;

    $v4 = $_POST['Konu'];
    echo "Konu : " , $v4."<br>" ;

    $v5 = $_POST['Mesaj'];
    echo "Mesaj : " , $v5."<br>" ;

}
if($v1 and $v2 and $v3 and $v4 and $v5){
 
} else {
header("location:iletisim.html");
}
echo "<p> <a href='iletisim.html'>&lt;GERİ DÖN&gt;</a></p> ";

?>