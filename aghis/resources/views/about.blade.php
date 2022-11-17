@extends('layouts.main')

@section('container')


<!-- <h1>Form Biodata Diri</h1>

<h3>{{ $name }}</h3>
<img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
<p>{{ $email }}</p>
<h5>{{ $alamat }}</h5> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <section>
                <img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
            </section>
            <section>
                <h3>Kontak</h3>
                <div>
                    <h6>Telepon: <span class="text-secondary">085204871254</span></h6>
                    <h6>Email : <span class="text-secondary">a3sagis123@gmail.com</span></h6>
                    <h6>Tempat tanggal lahir : <span class="text-secondary">5 Agustus 2001</span></h6>
                    <h6>Alamat : <span class="text-secondary">JL.Tegalsari bulak asri 1 No.10, Genteng</span></h6>
                    <h6>Hobi : <span class="text-secondary">Renang</span></h6>
                    <h6>Agama : <span class="text-secondary">Islam</span></h6>

                </div>
            </section>
            <section>
            <h3>Keahlian</h3>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Word</h6>
                        <h6 class="font-weight-bold">78%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">excel</h6>
                        <h6 class="font-weight-bold">95%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-8">
            <section>
                <h1>AGHISNI ZUHRUFFI</h1>
            </section>
            <section>
                <h3>Tentang Saya</h3>
                <p>Saya seorang mahasiswa dari POLITEKNIK NEGRI BANYUWANGI, Program Studi D-4 TRPL .Saya memilih jurusan ini karena ingin menambah wawasan tentang bidang, progamming, dll .Dan untuk kedepannya saya berkeinginan atau cita-cita sebagai pengusaha yang sukses atau juga ingin bekerja di perkantoran</p>
            </section>
            <section>
            <h3>Pendidikan</h3>
                <div>
                <h6>2015-2017</h6>
                    <h6>SMPN 1 GENTENG</h6>
                    <p>Banyuwangi</p>
                </div>
                <div>
                    <h6>2017-2020</h6>
                    <h6>SMA MUHAMMADIYAH 2 GENTENG</h6>
                    <p>Ilmu Pengetahuan Alam</p>
                </div>
                <div>
                    <h6>2021-2022</h6>
                    <h6>Politeknik Negeri Banyuwangi</h6>
                    <p>D-IV Teknologi Rekayasa Perangkat Lunak</p>
                </div>
            </section>
            <section>
@endsection