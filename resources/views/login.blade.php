@extends('layouts.main')
@section('container')

<div class="container mt-4" align="center">
    <div class="row">
        <div class="col">
            <h1>Halaman Logn
            </h1>
            <hr>
            <form method="post" action="/login">
                @csrf
                <input type="text" class="form-control mb-1" name="username" style="width:30%" placeholder="Input Usrname">
                <input type="password" class="form-control mb-1" name="password" style="width:30%" placeholder="Input Password">
                <input type="submit" class="btn btn-success">

            </form>
        </div>
    </div>
</div>

@endsection