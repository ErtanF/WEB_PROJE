
function KontrolForm () {
    var isim = document.forms["iletisimForm"]["İsim"].value;
    var soyisim = document.forms["iletisimForm"]["Soyisim"].value;
    var Email = document.forms["iletisimForm"]["Email"].value;
    var Konu = document.forms["iletisimForm"]["Konu"].value;
    var Mesaj = document.forms["iletisimForm"]["Mesaj"].value;

     if(isim=="" || soyisim=="" || Email=="" || Konu=="" || Mesaj=="")
    {
        alert("Boş Kutu Bırakamazsınız");
    }
} 

