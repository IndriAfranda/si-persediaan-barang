

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Riwayat Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode </label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Kode">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama_customer" class="col-sm-3 control-label">Nama Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_customer" class="form-control" id="inputEmail3" placeholder="Nama Customer">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_pesan" class="col-sm-3 control-label">Tanggal Pesan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesan" class="form-control" id="inputEmail3" placeholder="Tanggal Pesan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pengemasan" class="col-sm-3 control-label">Tanggal Pengemasan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pengemasan" class="form-control" id="inputEmail3" placeholder="Tanggal Pengemasan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dikirim" class="col-sm-3 control-label">Dikirim</label>
                            <div class="col-sm-3">
                                <input type="text" name="dikirim" class="form-control" id="inputEmail3" placeholder="Dikirim">
                            </div>
                        </div>

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Riwayat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=riwayat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Riwayat Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kode=$_POST['kode'];
	$nama_customer=$_POST['nama_customer'];
	$tgl_pesan=$_POST['tgl_pesan'];
    $tgl_pengemasan=$_POST['tgl_pengemasan'];
    $dikirim=$_POST['dikirim'];
    //buat sql
    $sql="INSERT INTO riwayat VALUES ('','$kode','$nama_customer','$tgl_pesan','$tgl_pengemasan','$dikirim')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=riwayat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
