@extends('layouts.main')
@section('container')

<div class="container mt-4" align="center">
    <div class=" row">
        <div class="col">
            <h1>Halaman Dashboard</h1>
            <hr>
            <table class="table table-striped">
                <tr>
                    <td>NO</td>
                    <td>ID Pemesanan</td>
                    <td>Nama Penonton</td>
                    <td>Phone</td>
                    <td>Sts Cek</td>
                    <td>Date Trans</td>
                    <td align="center">Action</td>
                </tr>
                <?php foreach ($transaksi as $key => $val) { ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $val['id_penonton']; ?></td>
                    <td><?php echo $val['nama']; ?></td>
                    <td><?php echo $val['phone']; ?></td>
                    <td><?php echo $val['sts_cek']; ?></td>
                    <td><?php echo $val['created']; ?></td>
                    <td align="center">
                        <a href="/editpemesanan/<?php echo $val['id_penonton']; ?>">
                            <span class="btn btn-warning">Edit</span>
                        </a>
                        <form method="post" action="/destory">
                            @csrf
                            <input type="hidden" name="id_trans" value="<?php echo $val['id_trans']; ?>">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

@endsection