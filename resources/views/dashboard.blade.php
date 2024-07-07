@extends('layouts.app')
@section('contents')
        <div class="text-center font-italic font-weight-bold">
        <h3>METODE TOPSIS DALAM SPK MENENTUKAN LOKASI USAHA</h3>
        </div>     
        <style>
        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .card {
            background-color: #3C415C;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .list-group-item {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
        }

        h2.display-4 {
            font-size: 2.5rem;
            font-weight: 300;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .text-center {
            text-align: center;
        }

        .font-italic {
            font-style: italic;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .list-group-item:nth-child(odd) {
            background-color: #50727B;
        }

        .list-group-item:nth-child(even) {
            background-color: #344955;
        }
    </style>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2 class="display-4">TOPSIS</h2>
                <p class="lead">Technique for Order of Preference by Similarity to Ideal Solution</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            TOPSIS adalah salah satu metode dalam Sistem Pendukung Keputusan (SPK) yang digunakan untuk menentukan pilihan terbaik di antara sejumlah alternatif berdasarkan beberapa kriteria. Metode ini bekerja dengan cara membandingkan setiap alternatif terhadap solusi ideal positif (alternatif terbaik) dan solusi ideal negatif (alternatif terburuk).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4 text-center">Langkah-langkah Metode TOPSIS</h3>
                <ul class="list-group">
                    <li class="list-group-item">Membangun Matriks Keputusan</li>
                    <li class="list-group-item">Normalisasi Matriks Keputusan</li>
                    <li class="list-group-item">Membangun Matriks Keputusan Ternormalisasi Terbobot</li>
                    <li class="list-group-item">Menentukan Solusi Ideal Positif dan Negatif</li>
                    <li class="list-group-item">Menghitung Jarak ke Solusi Ideal Positif dan Negatif</li>
                    <li class="list-group-item">Menghitung Nilai Preferensi Relatif</li>
                </ul>
            </div>
        </div>

        <!-- <div class="row mt-5">
            <div class="col-12 text-center">
                <h4>Visualisasi Matriks Keputusan</h4>
                <img src="path_to_your_image.png" alt="Heatmap Matriks Keputusan" class="img-fluid mt-3">
            </div>
        </div> -->

        <!-- <div class="row mt-5">
            <div class="col-12 text-center">
                <h4>Ranking Lokasi Usaha</h4>
                <img src="path_to_your_chart_image.png" alt="Ranking Lokasi Usaha" class="img-fluid mt-3">
            </div> -->
        </div>
    </div>
@endsection
