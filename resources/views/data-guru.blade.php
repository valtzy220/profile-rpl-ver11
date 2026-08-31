@extends('layouts.app-layout')

@section('title', 'Data Guru')

@section('content')
<section class="page-hero">
    <div class="page-hero-container">
        <h1 class="page-hero-title">Data Guru</h1>
        <p class="page-hero-subtitle">Daftar guru dan tenaga pengajar dijurusan RPL</p>
    </div>
</section>

<section class="data-content">
    <div class="data-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($guru as $index => $g)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $g['nama'] }}</td>
        <td>{{ $g['mata_pelajaran'] }}</td>
    </tr>
@endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection