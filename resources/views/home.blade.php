@extends('welcome')
@section('konten')
<div class="grid grid-cols-1 md:grid-cols-2">
    <h5>Daftar buku</h5>
    <br>
    <table class="table table-responsive table-bordered table-striped table-primary">
        <thead >
            <tr>
                <th>Nama buku</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $bk)
            <tr>
                <td>{{$bk->nama_buku}}</td>
                <td>{{$bk->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{route('pinjam-buku')}}" class="btn btn-primary">Pinjam buku!</a>
</div>
@endsection