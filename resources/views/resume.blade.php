@extends('layouts.main')
@section('container')
<div class="container mt-4" align="center">
    <div class="row">
        <div class="col">
            <h1>Resume Pemesanan Tiket
            </h1>
            <hr>
            <table style="width: 40%;" class="table table-stripped">
                <tr>
                    <td>ID Pemesanan</td>
                    <td>:</td>
                    <td><?php echo $data['id_cek']; ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $data['nama']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $data['phone']; ?></td>
                </tr>
                <tr>
                    <td>Waktu Pemesanan</td>
                    <td>:</td>
                    <td><?php echo $data['created_at']; ?></td>
                </tr>
            </table>
            <br>
            <h2>Mohon menunjukkan ID Pmesanan Kepada Petugas <br>Saat Check IN Konser, Trimakasih</h2>
        </div>
    </div>
</div>
@endsection