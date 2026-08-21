{{-- resources/views/jurusan.blade.php --}}
@extends('layouts.app-layout')

@section('title', 'Jurusan')

@section('content')
<section class="page-hero">
    <h1 class="page-hero-title">Jurusan</h1>
    <p class="page-hero-subtitle">Kompetensi keahlian yang tersedia di sekolah kami</p>
</section>

<section class="profile-content">
    <div class="profile-competencies">
        <h2>Rekayasa Perangkat Lunak (RPL)</h2>

        <div class="competency-grid">

            <div class="competency-card">
                <i class="fas fa-code"></i>
                <h4>Pemrograman Web</h4>
                <p>Siswa belajar membangun aplikasi web menggunakan HTML, CSS, JavaScript, dan framework backend.</p>
            </div>

            <div class="competency-card">
                <i class="fas fa-mobile-alt"></i>
                <h4>Pemrograman Mobile</h4>
                <p>Pengembangan aplikasi Android/iOS menggunakan Flutter dan bahasa pemrograman terkait.</p>
            </div>

            <div class="competency-card">
                <i class="fas fa-database"></i>
                <h4>Basis Data</h4>
                <p>Perancangan dan pengelolaan database untuk mendukung sistem informasi.</p>
            </div>

            <div class="competency-card">
                <i class="fas fa-project-diagram"></i>
                <h4>Rekayasa Perangkat Lunak</h4>
                <p>Analisis, perancangan, dan pengujian sistem/aplikasi perangkat lunak.</p>
            </div>

        </div>
    </div>
</section>
@endsection