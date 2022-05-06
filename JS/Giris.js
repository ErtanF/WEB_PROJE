function KontrolForm () {
    var kAdı = document.forms["GirisForm"]["kAdı"].value;
    var Şifre = document.forms["GirisForm"]["Şifre"].value;

     if(kAdı=="" || Şifre=="" )
    {
        alert("Boş Kutu Bırakamazsınız");
    }
} 

