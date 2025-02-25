<?php
require "connect.php";

$harga = 100000;
$biaya = 432;
$harga_total = $biaya + $harga;

$id = $_POST["id"];
$jumlah = $_POST['jumlah'];
$nominal = $_POST["nominal"];
$pembayaran = $_POST["pembayaran"];
$start = 0;

// Query untuk menghitung jumlah data dalam mobile_legend
$sql = "SELECT * FROM free_fire";
$hasil = mysqli_query($conn, $sql);

$resi = "SS221" . 83880; // Inisialisasi
while ($data = mysqli_fetch_array($hasil)) {
    $resi++;
}

if($nominal == 10){
    $harga = 5176;
}

elseif($nominal == 20){
    $harga = 8098;
}

elseif($nominal == 50){
    $harga = 18563;
}

elseif($nominal == 100){
    $harga = 48987;
}

elseif($nominal == 150){
    $harga = 55420;
}

if($pembayaran != "Transfer Bank"){
    $biaya = 413;
}
if($pembayaran == "Transfer Bank"){
    $biaya = 6413;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Pembayaran</title>
    <link rel="icon" type="image/x-icon"
        href="images/logoss.webp">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <ul class="nav_link" style="list-style-type: none;">
                <li><img src="images/logoss.webp" alt="logo" width="62px" height="62px"></li>
                <li class="name">Simpank Store</li>
                <li class="li"><a href="../mainmenu/mainmenu.html">Home</a></li>
                <li class="li"><a href="../mainmenu/cekTransaksi/cektransaksi.php">Cek Transaksi</a></li>

            </ul>

        </div>
        <div class="header">
            <center>

                <img src="images/Screenshot 2025-02-23 175915.png" width="10%" height="10%">
                <h2>Menunggu pembayaran</h2>
                <h3>Ayo Segera Bayar Pesananmu Agar segera Kami Proses</h3>

            </center>
        </div>

        <div class="content">

            <div class="card">

                <div class="card-informasi-akun">
                    <div class="img-informasi-akun">
                        <img src="images/Screenshot 2025-02-23 183355.png" width="100px" height="140px">
                    </div>


                    <table>
                        <tr>
                            <td>Informasi Akun</td>
                        </tr>

                        <tr>
                            <td>Nickname</td>
                            <td>:</td>
                            <td><?php echo "Anonymous" ?></td>

                        </tr>

                        <tr>
                            <td>Id</td>
                            <td>:</td>
                            <td><?php echo $id ?></td>

                        </tr>


                    </table>
                </div>

                <div class="card-metode-pembayaran">
                    <table>
                        <tr>
                            <td>Metode Pembayaran</td>
                        </tr>

                        <tr>

                            <td><?php echo $pembayaran ?></td>

                        </tr>

                        <tr>
                            <td>Nomor Invoice</td>
                            <td></td>
                            <td> <?php echo $resi ?> </td>

                        </tr>
                        <tr>
                            <td>Status Pembayaran</td>
                            <td></td>
                            <td> <button class="btn-unpaid">Unpaid</button></td>

                        </tr>


                        <tr>
                            <td>Status Transaksi</td>
                            <td></td>
                            <td> <button class="btn-pending">Pending</button></td>

                        </tr>
                        <tr>
                            <td>Pesan</td>
                            <td></td>
                            <td> Silahkan Melakukan Pembayaran Sesuai Dengan Metode Yang Kamu Pilih Tadi </td>

                        </tr>

                    </table>


                </div>

                <div class="card-rincian-pembayaran">
                    <div class="rincian-header">

                        <h3>Rincian Pembayaran</h3>

                    </div>

                    <div class="rincian-content">
                        <table class="rincian-table">

                            <tr>
                                <td>Harga</td>
                                <td></td>
                                <td><?php echo "RP." . $harga ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td></td>
                                <td><?php echo $jumlah . " x" ?></td>
                            </tr>
                            <tr>
                                <td>Nominal</td>
                                <td></td>
                                <td><?php echo $nominal . " Diamond" ?></td>
                            </tr>


                            <tr>



                                <td>_____________________________________</td>
                                <td>_</td>
                                <td>_____________</td>

                            </tr>
                            <tr>

                                <td>Sub Total</td>
                                <td></td>
                                <td><?php echo "RP." . $harga * $jumlah; ?></td>

                            </tr>
                            <tr>

                                <td>Biaya</td>
                                <td></td>
                                <td><?php echo "Rp." . $biaya; ?></td>

                            </tr>

                        </table>
                    </div>

                </div>

                <div class="card-total-pembayaran">
                    <div class="total-content">

                        <h3>Total Pembayaran</h3>
                        <h3><?php echo "Rp." . $harga_total = ($jumlah * $harga) + $biaya ?></h3>
                    </div>

                </div>
                <?php

                

                if ($pembayaran == "Qris") {
                    ?>

                    <div class="card-qris">
                        <div class="qris-content">

                        </div>
                        <img src="images/Screenshot 2025-02-24 163735.png" width="10%" height="10%">
                        <a href="topupff.html"><button name=<?php $start?> value=1> <p>Konfirmasi Pembayaran</p></button></a>

                </div>

                        <?php
                } 
                elseif($pembayaran == "Gopay" or $pembayaran == "Ovo" or $pembayaran == "Dana")  {
                    ?>
                        <div class="button-konfirmasi-pemesanan">
                      
                        <a href="topupff.html"><button name=<?php $start?> value=1> <p>Klik Disini Untuk Melakukan Pembayaran</p></button></a>
                        


                        </div>
                        <?php
                }

                elseif($pembayaran == "TransferBank")  {
                    ?>
                        
                        
                    <table class = "table-transfer-bank">
                        <tr>

                            <td>Nama Rekening</td>
                            <td>:</td>
                            <td>Rizky Galih Saputra</td>

                        </tr>

                        <tr>
                            <td>Nomor Rekening</td>
                            <td>:</td>
                            <td> 6712761376 </td>

                        </tr>
                        
                    </table>
                    <div class="button-konfirmasi-pemesanann">
                   <a href="topupff.html"><button name="button-tb" value=1> <p>Klik Disini Untuk Konfirmasi Pemesanan</p></button></a>


                       


                    </div>
                        <?php
                }
                ?>
                

            </div>

            <style>
                * {
                    margin: 0px;
                    padding: 0px;

                }

                body {
                    background-color: rgb(31, 31, 31);
                    overflow-x: hidden;
                }

                .navbar {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    background-color: rgb(21, 21, 21);
                    color: rgb(213, 212, 212);
                    height: 70px;
                    z-index: 1;
                    /* Sesuaikan dengan tinggi logo */

                    position: sticky;
                    top: 0px;
                    opacity: 0.8;
                }

                .nav_link {
                    display: flex;
                    font-size: 18px;
                    list-style-type: none;
                    align-items: center;
                    /* Supaya teks sejajar dengan logo */
                }

                .nav_link li {
                    margin: 15px;
                    /* Kurangi margin supaya lebih padat */
                }

                .nav_link img {
                    width: 62px;
                    /* Sesuai dengan ukuran logo */
                    height: 62px;
                }

                .nav_link a {
                    color: rgb(213, 212, 212);
                    text-decoration: none;
                    transition: 0.3s;
                }

                .nav_link a:hover {
                    color: white;
                    text-decoration: underline;
                }

                .header {
                    background-color: rgb(253, 224, 71);
                    color: rgb(255, 255, 255);
                    position: relative;

                }

                .card-informasi-akun {
                    margin-top: 60px;
                    margin-left: 100px;
                    display: flex;
                    background-color: rgb(50, 50, 50);
                    color: rgb(213, 212, 212);
                    width: 30.6%;
                    height: 150px;
                    border-radius: 10px;
                }

                .img-informasi-akun {

                    margin-top: 5px;
                    margin-left: 8px;
                    margin-right: 6px;

                }

                .card-metode-pembayaran {
                    margin-top: 28px;
                    position: relative;
                    bottom: 180px;
                    left: 720px;
                    font-size: 19px;
                    color: rgb(213, 212, 212);
                }


                .btn-unpaid {
                    background-color: rgb(222, 113, 93);
                    color: rgb(139, 5, 5);
                }

                .btn-pending {
                    background-color: rgb(225, 209, 89);
                    color: rgb(141, 105, 0);
                }

                .card-rincian-pembayaran {
                    position: relative;
                    bottom: 130px;
                    left: 110px;
                }

                .rincian-header {
                    background-color: rgb(16, 16, 16);
                    width: 30%;
                    height: 40px;
                    border-radius: 5px;
                    margin-bottom: 10px;
                    color: rgb(213, 212, 212);

                }

                .rincian-header h3 {
                    margin-left: 10px;

                }

                .rincian-content {
                    background-color: rgb(26, 26, 26);
                    width: 30%;
                    border-radius: 10px;
                    color: rgb(213, 212, 212);
                }

                .rincian-table {
                    margin-left: 20px;
                }

                .card-total-pembayaran {
                    background-color: rgb(16, 16, 16);
                    width: 30%;
                    height: 40px;
                    position: relative;
                    bottom: 125px;
                    left: 110px;
                    margin-top: 10px;
                    border-radius: 5px;
                }

                .total-content {
                    color: rgb(212, 212, 212);
                    display: flex;
                    justify-content: space-between;
                    margin-left: 10px;
                    margin-right: 10px;

                }

                .total-content h3 {
                    margin-top: 10px;

                }

                .card-qris img{
                    position: relative;
                    bottom: 325px ;
                    left:47%;
                    
                }

                .card-qris button{
                    position: relative;
                    bottom: 300px;
                    left: 36.7%;
                    width: 10.07%;
                    background-color: rgb(22, 209, 56);
                    color: rgb(6, 105, 24);
                }
                .button-konfirmasi-pemesanan button{
                    position: relative;
                    bottom: 350px;
                    left:47.5%;
                    width: 10.07%;
                    background-color: rgb(22, 209, 56);
                    color: rgb(6, 105, 24);
                    font-size: 15px;
                    width: 35%;
                    height: 30px;

                }
                .table-transfer-bank{
                    position: relative;
                    bottom: 330px;
                    left: 720px;
                    color: rgb(212, 212, 212);
                }
                .button-konfirmasi-pemesanann button{
                    position: relative;
                    bottom: 320px;
                    left:47.5%;
                    width: 10.07%;
                    background-color: rgb(22, 209, 56);
                    color: rgb(6, 105, 24);
                    font-size: 15px;
                    width: 35%;
                    height: 30px;

                }
            </style>
</body>

</html>





<?php

if (isset($start)) {
    $query_sql = "INSERT INTO honorofkings (id,  nominal, pembayaran, resi, jumlah, totalHarga)
                  VALUES ('$id',  '$nominal', '$pembayaran', '$resi', '$jumlah', '$harga_total')";

    if (mysqli_query($conn, $query_sql)) {
        
        exit(); // Tambahkan exit untuk menghentikan eksekusi setelah redirect
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>