<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cek Transaksi Top up</title>
    <link rel="stylesheet" href="cektransaksi.css">
    <link rel="icon" type="image/x-icon"
        href="assetimg/logoss.webp">

</head>

<body>

    <div class="container">

        <div class="navbar">
            <ul class="nav_link" style="list-style-type: none;">
                <li><img src="assetimg/logoss.png" alt="logo" width="62px" height="62px"></li>
                <li class="name">Simpank Store</li>
                <li class="li"><a href="../mainmenu.html">Home</a></li>


            </ul>


        </div>
        <div class="container-content">

            <div class="main-text">

                <h1 class="main-h1">Cek Invoice Kamu Disini Dengan Cepat Dan Mudah</h1>
                <h4 class="main-h3">Lihat Detail Pembelianmu Dengan Kode Invoice</h4>

            </div>

            <div class="main-content">
                <form action="cektransaksi.php" method="post">
                    <label for="resi" class="label-invoice">Masukkan Nomor Invoice Mu Disini</label> <br>
                    <input type="text" class="input-invoice" name="resi"> <br>
                    <label for="resi" class="label-invoice">Masukkan Nama Game Yang Kamu Top Up Disini</label> <br>
                    <select name="game" class = "input-invoice">
                        <option value="mobile legend"> Mobile Legend</option>
                        <option value="free fire"> Free Fire</option>
                        <option value="honor of king"> Honor Of Kings</option>
                    </select>
                    <button type="submit" class="submit-invoice">Cari Invoice mu</button>

                </form>
                
            </div>
            <div class="container-title">

                <div class = "title-card">
    
                    <h3 class = "title-content" >Ini Resi Kamu</h3>
                </div>
            </div>
            
        </div>

        <?php
        require "connect.php";

        
        if (isset($_POST['game'])) {
            $game = $_POST['game'];
            $resi = $_POST['resi'];


            if ($game == "mobile legend") {

                // Query untuk mengambil semua data dari tabel "users"
                // Baris 15: Menyimpan perintah SQL untuk mengambil semua kolom dari tabel "users".
                $sql = "SELECT * FROM mobilelegend where resi = $resi"; // Pastikan nama tabel sesuai dengan struktur database Anda.
        
                // Baris 16: Menjalankan query menggunakan method query() dan menyimpan hasilnya di variabel $result.
                $result = $conn->query($sql);

                // Menampilkan data jika ada
                // Baris 18-25: Mengecek apakah query mengembalikan setidaknya satu baris data.
                if ($result->num_rows > 0) {
                    // Baris 19: Melakukan perulangan untuk setiap baris data yang dikembalikan.
                    while ($row = $result->fetch_assoc()) {
                        // Baris 21: Menampilkan data. Misalnya, jika tabel "users" memiliki kolom "id", "nama", dan "email".
                        // Data ditampilkan dengan format "ID: [id] - Nama: [nama] - Email: [email]".
                        ?>
                        <div class='card-content'>
                            <table class='heading'>



                                <tr class="table">
                                    <td class ="data"> Resi</td>
                                    <td> :</td>
                                    <td> <?php echo $row['resi'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td class ="data"> ID</td>
                                    <td> :</td>
                                    <td> <?php echo $row['id'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td class ="data"> ID Server</td>
                                    <td> :</td>
                                    <td> <?php echo $row['id_server'] ?></td>
                                </tr>

                                <tr class="table">
                                    <td class ="data"> Nominal </td>
                                    <td> :</td>
                                    <td> <?php echo $row['nominal'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td class ="data">Pembayaran</td>
                                    <td> :</td>
                                    <td> <?php echo $row['pembayaran'] ?> </td>
                                </tr>



                            </table>

                            <?php
                    }
                } else {
                    // Baris 24: Jika tidak ada data yang ditemukan, menampilkan pesan "Tidak ada data".
                    echo "Tidak ada data";
                }

                // Baris 27: Menutup koneksi ke database setelah semua operasi selesai.
                $conn->close();
            }

            if ($game == "free fire") {

                // Query untuk mengambil semua data dari tabel "users"
                // Baris 15: Menyimpan perintah SQL untuk mengambil semua kolom dari tabel "users".
                $sql = "SELECT * FROM free_fire where resi = $resi"; // Pastikan nama tabel sesuai dengan struktur database Anda.
        
                // Baris 16: Menjalankan query menggunakan method query() dan menyimpan hasilnya di variabel $result.
                $result = $conn->query($sql);

                // Menampilkan data jika ada
                // Baris 18-25: Mengecek apakah query mengembalikan setidaknya satu baris data.
                if ($result->num_rows > 0) {
                    // Baris 19: Melakukan perulangan untuk setiap baris data yang dikembalikan.
                    while ($row = $result->fetch_assoc()) {
                        // Baris 21: Menampilkan data. Misalnya, jika tabel "users" memiliki kolom "id", "nama", dan "email".
                        // Data ditampilkan dengan format "ID: [id] - Nama: [nama] - Email: [email]".
        
                        ?>
                        <div class='card-content'>

                           
                            <table class='heading'>



                                <tr class="table">
                                    <td> Resi</td>
                                    <td> :</td>
                                    <td> <?php echo $row['resi'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td> ID</td>
                                    <td> :</td>
                                    <td> <?php echo $row['id'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td> Nominal</td>
                                    <td> :</td>
                                    <td> <?php echo $row['nominal'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td> Pembayaran</td>
                                    <td> :</td>
                                    <td> <?php echo $row['pembayaran'] ?> </td>
                                </tr>



                            </table>

                            <?php
                    }
                } else {
                    // Baris 24: Jika tidak ada data yang ditemukan, menampilkan pesan "Tidak ada data".
                    echo "Tidak ada data";
                }

                // Baris 27: Menutup koneksi ke database setelah semua operasi selesai.
                $conn->close();
            }
            if ($game == "honor of king ") {

                // Query untuk mengambil semua data dari tabel "users"
                // Baris 15: Menyimpan perintah SQL untuk mengambil semua kolom dari tabel "users".
                $sql = "SELECT * FROM honor_of_king where resi = $resi"; // Pastikan nama tabel sesuai dengan struktur database Anda.
        
                // Baris 16: Menjalankan query menggunakan method query() dan menyimpan hasilnya di variabel $result.
                $result = $conn->query($sql);

                // Menampilkan data jika ada
                // Baris 18-25: Mengecek apakah query mengembalikan setidaknya satu baris data.
                if ($result->num_rows > 0) {
                    // Baris 19: Melakukan perulangan untuk setiap baris data yang dikembalikan.
                    while ($row = $result->fetch_assoc()) {
                        // Baris 21: Menampilkan data. Misalnya, jika tabel "users" memiliki kolom "id", "nama", dan "email".
                        // Data ditampilkan dengan format "ID: [id] - Nama: [nama] - Email: [email]".
        
                        ?>
                        <div class='card-content'>
                            <table class='heading'>



                                <tr class="table">
                                    <td> Resi</td>
                                    <td> :</td>
                                    <td> <?php echo $row['resi'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td> ID</td>
                                    <td> :</td>
                                    <td> <?php echo $row['id'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td> Nominal</td>
                                    <td> :</td>
                                    <td> <?php echo $row['nominal'] ?> </td>
                                </tr>

                                <tr class="table">
                                    <td> Pembayaran</td>
                                    <td> :</td>
                                    <td> <?php echo $row['pembayaran'] ?> </td>
                                </tr>



                            </table>

                            <?php
                    }
                } else {
                    // Baris 24: Jika tidak ada data yang ditemukan, menampilkan pesan "Tidak ada data".
                    echo "Tidak ada data";
                }

                // Baris 27: Menutup koneksi ke database setelah semua operasi selesai.
                $conn->close();
            }

        }
        ?>

            <style>
                body {
                    background-color: rgb(31, 31, 31);
                }

                .container-title{

                  
                    width: 100px;
                }
                .title-card{
                    /* position: absolute;
                    left: 640px;
                    bottom: 240px;
                    background-color: rgb(31, 31, 31);
                    color: rgb(200, 200, 200);
                    border-radius: 10px;
                    width: 250px; */

                    position: relative;
                    left: 640px;
                    top: 240px;
                    margin-top: 10px;
                    background-color: rgb(31, 31, 31);
                    color: rgb(200, 200, 200);
                    border-radius: 10px;
                    width: 250px;
                }

                .title-content{
                    margin-left: 60px;
                }
                

                table {

                    background-color: rgb(31, 31, 31) ;
                    width: 300px;
                    border-radius: 10px;
                    position: relative;
                    left: 620px;
                    bottom: -300px;
                    margin-top: -40px;

                }
                .table{
                    background-color: rgb(31, 31, 31) ;
                    color: rgb(180,180,190);
                    
                }

               
            </style>
</body>

</html>