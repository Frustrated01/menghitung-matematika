<html>
<head>
    <title>Tutorial membuat script PHP menghitung luas persegi panjang</title>
</head>
<body>
    <h2>From hitung luas persegi panjang dengan PHP</h2>
    <h3>isi data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>panjang</td>
            <td>:<td>
            <td><input type="text" name="panjang"required></td>
        </tr>
        <tr>
            <td>Lebar</td>
            <td>:</td>
            <td><input type="text" name="lebar" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="hitung"></td>
        </tr>                
    </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $panjang    =$_POST['panjang'];
        $lebar  =$_POST['lebar'];

        //menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang * $lebar;

        //menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2*($panjang*$lebar);

        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br/>";
        echo "Diketahui;<br/>";
        echo "panjang = $panjang<br/>";
        echo "lebar = $lebar<br/>";
        echo "maka luas persegi panjang = [$panjang x $lebar] = $luas_persegi_panjang<br/>";
        echo "maka keliling persegi panjang = [2*($panjang + $lebar)] = $keliling_persegi_panjang";
    }
    ?>   
</body>
</html>