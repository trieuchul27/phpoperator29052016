<html>
    <body bgcolor="pink">
        <h2>Data UAS </h2>
        <form method="post" action="tugas.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">nama</td>
            <td><input name="nama" type="text" id="nama" placeholder="Nama Anda"></td>
        </tr>
        <tr>
            <td width="120">npm</td>
            <td><input name="npm" type="text" id="npm" placeholder="NPM Anda"></td>
        </tr>
        <tr>
            <td width="100">Kelas</td>
            <td><input name="kelas" type="text" id="kelas" placeholder="Kelas Anda"></td>
        </tr>
        <tr>
            <td width="150">jurusan</td>
            <td><input name="jurusan" type="text" id="jurusan" placeholder="Jurusan Anda"></td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td> </td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
            
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $data_uas = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $data_uas )
            {
              die('Gagal Koneksi: ' . mysql_error());
            }
             
            if(! get_magic_quotes_gpc() )
            {
               $nama = addslashes ($_POST['nama']);
               $npm = addslashes ($_POST['npm']);
               $kelas = addslashes($_POST['kelas']);
               $jurusan = addslashes($_POST['jurusan']);
            }
            else
            {
               $nama = $_POST ['nama'];
               $npm = $_POST['npm'];
               $kelas = $_POST['kelas'];
               $jurusan = $_POST['jurusan'];
            }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO data_uas ".
                   "(nama,npm,kelas,jurusan) ".
                   "VALUES('$nama','$npm','$kelas','$jurusan')";
            mysql_select_db('data_uas');
            $tambahdata = mysql_query( $sql, $data_uas );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT nama,npm,kelas,jurusan FROM data_uas";
            mysql_select_db('data_uas');
            $hasil = mysql_query($sql);
            
            // Hasil Inputan
            while ( $row = mysql_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "Nama: " . $row["nama"]. " - NPM: " . $row["npm"].  " - Kelas: " . $row["kelas"]. " - Jurusan: " . $row["jurusan"]."<br>";
            }
            mysql_close($data_uas);
            }
            else
            {
            }
        ?>
    </form>
            </body>
</html>
