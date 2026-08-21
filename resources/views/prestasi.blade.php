{{-- resources/views/presentasi.blade.php --}}
@extends('layouts.app-layout')

@section('title', 'Presentasi')

@section('content')
<section class="hero">
    <h1 class="hero-title">Presentasi</h1>
    <p class="hero-subtitle">Mengenal lebih dekat sekolah kami melalui gambaran umum, visi, dan pencapaian</p>
</section>

<section class="profile-content">
    <div class="profile-about">
        <h2>Tentang Kami</h2>
        <p>Sekolah kami berkomitmen mencetak lulusan yang kompeten, berkarakter, dan siap bersaing di dunia kerja maupun industri. Melalui pembelajaran berbasis praktik dan kerja sama dengan dunia usaha/industri, siswa dibekali kemampuan teknis sekaligus soft skill yang relevan dengan kebutuhan zaman.</p>
    </div>

    <div class="profile-vision-mission">
        <div class="vm-card">
            <h3><i class="fas fa-eye"></i>Visi</h3>
            <p>Menjadi sekolah unggul yang menghasilkan lulusan kompeten, berdaya saing, dan berakhlak mulia.</p>
        </div>
        <div class="vm-card">
            <h3><i class="fas fa-bullseye"></i>Misi</h3>
            <ul>
                <li>Menyelenggarakan pembelajaran berbasis kompetensi</li>
                <li>Menjalin kerja sama dengan dunia industri</li>
                <li>Mengembangkan karakter dan kedisiplinan siswa</li>
                <li>Meningkatkan kualitas sarana dan prasarana</li>
            </ul>
        </div>
    </div>

    <div class="profile-competencies">
        <h2>Keunggulan Kami</h2>
        <div class="competency-grid">

            <div class="competency-card">
                <i class="fas fa-chalkboard-teacher"></i>
                <h4>Tenaga Pengajar Kompeten</h4>
                <p>Diampu oleh guru dan instruktur berpengalaman di bidangnya.</p>
            </div>

            <div class="competency-card">
                <i class="fas fa-briefcase"></i>
                <h4>Kerja Sama Industri</h4>
                <p>Program magang (PKL) bekerja sama dengan berbagai perusahaan.</p>
            </div>

            <div class="competency-card">
                <i class="fas fa-award"></i>
                <h4>Berbagai Prestasi</h4>
                <p>Aktif meraih prestasi di tingkat sekolah, daerah, hingga nasional.</p>
            </div>

        </div>
    </div>
</section>
@endsection