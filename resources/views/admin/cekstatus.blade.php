@extends('layouts.main')
@section('container')

<div class="container mt-4" align="center">
    <div class=" row">
        <div class="col">
            <h1>Halaman Cek Validasi Tiket</h1>
            <hr>
            <form method="get" action="/cekstatus">
                @csrf
                <input style="width:40%" class="mb-2 form-control" type="text" name="cek" placeholder="Masukkan ID Pemesanan !">
                <input type="submit" class="btn btn-success" value="Cek Sekarang">
            </form>
            <hr>
            <?php
            if (isset($data[0]) && $data[0]['sts_cek'] == 0) { ?>
                <table style="width: 40%;" class="table table-stripped">
                    <tr>
                        <td>ID Pemesanan</td>
                        <td>:</td>
                        <td><?php echo $data[0]['id_cek']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                            <input class="form-control" disabled type="text" name="nama" value="<?php echo $data[0]['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input class="form-control" disabled type="text" name="jenis_kelamin" value="<?php echo $data[0]['jenis_kelamin']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><input class="form-control" disabled type="text" name="phone" value="<?php echo $data[0]['phone']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Waktu Pemesanan</td>
                        <td>:</td>
                        <td><input class="form-control" disabled type="text" name="created_at" value="<?php echo $data[0]['created_at']; ?>"></td>
                    </tr>
                </table>
            <?php } else if (isset($data[0]) && $data[0]['sts_cek'] == 1) {
                echo "tiket hanya sekali";
            } else {
                echo "tidak ada";
            } ?>
        </div>
    </div>
</div>

@endsection