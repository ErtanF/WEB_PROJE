<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>
        <span> GÜNCEL DÖVİZ KURLARI APİ SAYFASINA HOŞ GELDİNİZ </span> <br>
    <ul>        
        <li>
            <span>USD</span>
            <span>Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['USD']['degisim']; ?></span>
        </li>
        <li>
            <span>EUR</span>
            <span>Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['EUR']['degisim']; ?></span>
        </li>
        <li>
            <span>GBP</span>
            <span>Fiyat: <?php echo $JSON['GBP']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['GBP']['degisim']; ?></span>
        </li>
        <li>
            <span>CHF</span>
            <span>Fiyat: <?php echo $JSON['CHF']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['CHF']['degisim']; ?></span>
        </li>
        <li>
            <span>CAD</span>
            <span>Fiyat: <?php echo $JSON['CAD']['satis']; ?></span>
            <span>Değişim: <?php echo $JSON['CAD']['degisim']; ?></span>
        </li>
    </ul>
    <?php
          echo "<p> <a href='İlgiAlanlarim.html'>&lt;GERİ GİTMEK İÇİN TIKLAYINIZ&gt;</a></p> ";
    ?>