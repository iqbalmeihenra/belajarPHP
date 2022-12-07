<!DOCTYPE html>
<html>
    <head>
        <title>pengulangan dan percabangan</title>
    </head>
    <body>

        <form method="POST" action="action.php">
            Nama :
            <input type="text" name="nama">
            <br>
            Tanggal beli :
            <select name="tanggal">
                <option>--Tanggal--</option>
                <?php
        for ($i=1; $i <=31 ; $i++) { 
            echo "<option>$i</option>";
        }
        ?>
            </select>
            <br><br>
            Tujuan (contoh :
            jakarta-bandung/jakarta-semarang/semarang-surabaya/semarang-yogyakarta) :
            <br>
            :
            <input type="text" name="tujuan">
            <br><br>
            Jumlah Pembelian
            <input type="text" name="jumlah"><br>

            <button type="submit" name="proses">Proses</button>
        </form><br>

    </body>
</html>