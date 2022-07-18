<html>
    <head>
        <title>Tugas6_AnaQonitahMunawwaroh</title>
        <link rel="stylesheet" type="text/css" href="kalkulator.css">
    </head>
    <body>
       <?php 
            if(isset($_POST['kalkulator'])){
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operasi = $_POST['operasi'];
                switch ($operasi) {
                    case 'penjumlahan':
                        $hasil = $angka1+$angka2;
                    break;
                    case 'pengurangan':
                        $hasil = $angka1-$angka2;
                    break;
                    case 'perkalian':
                        $hasil = $angka1*$angka2;
                    break;
                    case 'pembagian':
                        $hasil = $angka1/$angka2;
                    break;			
                }
            }
        ?>
        <div class="kalkulator">
            <h2 class="judul">Implementasi User Interface Kalkulator<br>
            ===========================<br></h2>
            <form method="post" action="Tugas6_AnaQonitahMunawwaroh.php">			
                <input type="number" name="angka1" class="bil" autocomplete="off" placeholder="Input Angka Pertama">
                <input type="number" name="angka2" class="bil" autocomplete="off" placeholder="Input Angka Kedua"><br>
                <select class="opt" name="operasi">
                    <option value="penjumlahan">Penjumlahan (+)</option>
                    <option value="pengurangan">Pengurangan (-)</option>
                    <option value="perkalian">Perkalian (x)</option>
                    <option value="pembagian">Pembagian (/)</option>
                </select>
                <input type="submit" name="kalkulator" value="Klik Hitung" class="tombol">											
            </form>
            <?php 
                if(isset($_POST['kalkulator'])){ 
            ?><input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php 
                }else{ 
            ?><input type="text" value="Hasil Hitung" class="bil">
            <?php 
                } ?>			
        </div>
    </body>
</html>