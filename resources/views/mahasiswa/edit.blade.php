@extends('layouts.template')
@section('content')
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
    }

    .container {
        width: 350px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        margin: 10px;
        background: #28a745;
        border: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    a{
        text-decoration: none;
        color: white;
    }
    button:hover {
        background: #218838;
    }
    </style>

    <div class="container">
        <h1>Edit Data</h1>
        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="number" name="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection