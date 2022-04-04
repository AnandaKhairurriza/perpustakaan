@extends('welcome')
@section('konten')
<div class="grid grid-cols-1 md:grid-cols-2">
    <h2>Pinjam Buku</h2>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><b>- {{ $error }}</b></li>
                @endforeach
            </ul>
        </div>
    @endif

    <br>

    <form action="{{route('input-pinjam')}}" method="POST">
    @csrf
        <div class="form-group">
            <label>
                Daftar buku
            </label>
            <div>
                <select style="width:100%" name="nama_buku" required>
                        @foreach ($buku as $bk)
                        <option value="{{$bk ->id}}">{{$bk ->nama_buku}}</option>
                        @endforeach
                </select>
                <label>Nama</label>
                <input type="text" name="nama_peminjam" class="form-control" required>

                <label>No HP</label>
                <input type="text" name="hp_peminjam" class="form-control" required>

                <label>Email</label>
                <input type="email" name="email_peminjam" class="form-control" required>

                <label>Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control" required>

                <button class="btn btn-success" type="submit">PINJAM!</button>
                <button class="btn btn-danger" type="reset">HAPUS!</button>
            </div>
        </div>

    </form>
</div>
@endsection