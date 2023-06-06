@extends('layouts.main')
@section('container')



<div class="container mt-4" align="center">
    <div class=" row">
        <div class="col">
            <h1>Form Pemesanan Tiket</h1>
            <hr>
            <form method="post" action="/penonton">
                @csrf

                <table style="width: 40%;" class="table table-stripped">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="form-control" id="inputName" placeholder="Masukkan Nama Lengkap">
                            <input type="hidden" name="id_cek" class="form-control" value="<?php echo uniqid(); ?>">
                            <input type="hidden" name="created_at" class="form-control" value="<?php echo date("Y-m-d H:i:s"); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki - Laki">Laki -
                            Laki <input style="margin-left:10px;" class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                            <span style="margin-left:30px;">Perempuan</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Masukkan Nomor Handphone">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> <button type="submit" class="btn btn-primary">Submit</button></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</div>

@endsection