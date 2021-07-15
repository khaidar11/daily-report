<?php
include 'asset/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://localhost/projekweb/asset/jquery.js"></script>
    <script src="http://localhost/projekweb/asset/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://localhost/projekweb/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/projekweb/asset/fontawesome/css/all.min.css">    
    <title>Daily Report</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md">
        <div class="card">
        <div class="card-header">
        <h2 class="card-title"> DATA DAILY REPORT</h2>
        <a href="customer/tambahcustomer.php" class="badge badge-info">TAMBAH CUSTOMER</a>
    </div>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>No. Hp</th>
                <th>Rencana</th>
                <th>Tanggal Report</th>
                <th>Temporary Status</th>
                <th>Plan DM</th>
                <th>---</th>
            </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from customer");
            while($d = mysqli_fetch_array($data)){
        ?>
    
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td><?php echo $d['rencana']; ?></td>
            <td><?php echo $d['tanggal_report']; ?></td>
            <td><?php echo $d['tempstatus']; ?></td>
            <td><?php echo $d['plan_dm']; ?></td>
            <td>
                <a href="customer/editcustomer.php?id_customer=<?php echo $d['id_customer'] ?>" class="badge badge-success" >EDIT</a>&nbsp;
                <a href="customer/hapuscustomer.php?id_customer=<?php echo $d['id_customer'] ?>" class="badge badge-danger"  >HAPUS</a>
            </td>
        </tr>
        <?php  
            }
        ?>
        </table>    

</body>
<?php
include 'asset/footer.php';
?>
</html>