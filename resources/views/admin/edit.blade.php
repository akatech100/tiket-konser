@extends('layouts.main')
@section('container')
<div class="container mt-4" align="center">
    <div class="row">
        <div class="col">
            <h1>Edit Pemesanan Tiket
            </h1>
            <hr>
            <form method="post" action="/editdatapemesanan">
                @csrf
                <table style="width: 40%;" class="table table-stripped">
                    <tr>
                        <td>ID Pemesanan</td>
                        <td>:</td>
                        <td><?php echo $penonton[0]['id_cek']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $penonton[0]['id']; ?>">
                            <input class="form-control" type="text" name="nama"
                                value="<?php echo $penonton[0]['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input class="form-control" type="text" name="jenis_kelamin"
                                value="<?php echo $penonton[0]['jenis_kelamin']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><input class="form-control" type="text" name="phone"
                                value="<?php echo $penonton[0]['phone']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Waktu Pemesanan</td>
                        <td>:</td>
                        <td><input class="form-control" type="text" name="created_at"
                                value="<?php echo $penonton[0]['created_at']; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Edit Pemesanan" class="btn btn-success"></td>
                    </tr>
                </table>
            </form>

            <br>
            <h2>Mohon menunjukkan ID Pmesanan Kepada Petugas <br>Saat Check IN Konser, Trimakasih</h2>
        </div>
    </div>
</div>
@endsection