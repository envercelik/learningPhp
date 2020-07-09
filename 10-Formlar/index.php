<form action="sonuc.php" method="post" enctype="multipart/form-data">

    Ad-Soyad :
    <input type="text" name="adsoyad"> <br><br>

    E-mail   :
    <input type="email" name="email"> <br><br>

    Cinsiyet :
    <input type="radio" name="cinsiyet" value="Erkek"> Erkek
    <input type="radio" name="cinsiyet" value="Kadin"> Kadın <br><br>


    Yaş      :
    <select name="yas">

        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>

    </select> <br><br>


    Hobiler  : <br><br>

    <input type="checkbox" name="hobiler[]" value="Alisveris"> Alışveriş  <br>
    <input type="checkbox" name="hobiler[]" value="Seyehat"> Seyahat  <br>
    <input type="checkbox" name="hobiler[]" value="Sinema"> Sinema  <br>
    <input type="checkbox" name="hobiler[]" value="Tiyatro"> Tiyatro  <br><br>


    Resim : <br><br>
    <input type="file" name="resim"> <br><br>



    <input type="submit" value="Gönder">

</form>