@extends('layouts.main')

@section('container')
@include('components.header')
<div class="container">
    <section class="profile-content">
        <div class="judul">
            <h1 class="text-center">KABINET ABHIRAKI</h1>
        </div>
        <div class="profile-fst d-flex ">
            <div class="about-video">
                <iframe id="youtubePlayer" width="560" height="315"
                    src="https://www.youtube.com/embed/8RQqY6LMc_o?si=AmvYfSjAbIHwAG_p&autoplay=1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="about-text">
                <p>ABHIRAKI, berasal dari Abhiraya dan Meraki, diambil dari bahasa Sanskerta dan
                    Yunani,
                    Abhiraya artinya
                    harapan, sedangkan Meraki artinya Melakukan sesuatu dengan jiwa, kreativitas, dan cinta.
                </p>
                <p class="mt-2">Abhiraki
                    adalah
                    tempat penuh harapan dimana kita bisa menjadi diri kita yang sebenarnya dan untuk selalu berproses
                    dengan jiwa, kreativitas, dan cinta yang sangat mendalam dalam menghasilkan hasil karya.</p>
            </div>
        </div>
    </section>

    <section class="visi-misi">
        <div class="judul">
            <h1>Vision and Mision</h1>
        </div>
        <div class="visi-misi-content grid gap-4 d-flex">
            <div class="visi-text p-4 g-col-6">
                <div class="visi-text-content">
                    <h3 class="text-center d-flex justify-content-center mb-4">What's Our Vision?</h3>
                    <p>FST Abhiraki sebagai rumah perubahan dengan growth mindset dalam menciptakan karya berdaya
                        prestatif
                        pada lingkungan yang seimbang.</p>
                </div>
            </div>
            <div class="misi-text g-col-6 p-4">
                <h3 class="text-center d-flex justify-content-center mb-4">What's Our Mision?</h3>
                <ol>
                    <li>
                        <p>Membentuk kader berdaya unggul yang bersifat growth mindset, prestatif, dan</p>
                    </li>
                    <li>
                        <p>Menjalin kolaborasi konstruktif kaderisasi riset dengan bersinergi seluruh elemen Fakultas
                            Teknik dan Membentuk iklim diskusi ilmiah untuk membentuk kader yang bermutu unggul.</p>
                    </li>
                    <li>
                        <p>Mengoptimalkan lini kewirausahaan untuk meningkatkan minat kewirausahaan mahasiswa Fakultas
                            Teknik dan mewujudkan FST mandiri finansial.</p>
                    </li>
                    <li>
                        <p>Menjalin hubungan baik dan Kerjasama strategis dengan pemangku kepentingan untuk meningkatkan
                            kepedulian sosial mengutamakan kebermanfaatan.</p>
                    </li>
                    <li>
                        <p>Memperkuat eksistensi FST dengan menjalin kerjasama, memberikan informasi serta wawasan
                            secara konstruktif sebagai sarana penyebaran kebermanfaatan FST di muka umum.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section id="values" class="values">
        <div class="judul">
            <h1>What's Our Values?</h1>
        </div>
        <div class="values-content grid gap-4 d-flex">
            <div class="values-card g-col-4 p-4 bg-dark">
                <div class="values-card-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#5EC34D"
                        class="bi bi-bar-chart mb-3" viewBox="0 0 16 16">
                        <path
                            d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z" />
                    </svg>
                    <h3 class="fw-bold">Growth Mindset</h3>
                    <p>Terbuka terhadap suatu perubahan. Memahami setiap sesuatu dari hal yang fundamental dan percaya
                        setiap entitas dapat berubah.</p>
                </div>
            </div>
            <div class="values-card g-col-4 p-4 bg-dark">
                <div class="values-card-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#F347EB"
                        class="bi bi-balance-scale mb-3" viewBox="0 0 16 16">
                        <path
                            d="M10.5 4.5a.5.5 0 0 1 1 0V12h1a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2h1V4.5a.5.5 0 0 1 1 0V12h2V4.5zM2.854 2.146a.5.5 0 1 1 .708-.708l10 10a.5.5 0 0 1-.708.708l-10-10a.5.5 0 0 1 0-.708zM1.5 2a1.5 1.5 0 0 0 0 3 1.5 1.5 0 0 0 0-3zm13 1a1.5 1.5 0 0 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                    <h3 class="fw-bold">Balance</h3>
                    <p>Memiliki keseimbangan dalam berorganisasi, berprestasi, dan bersosial agar dapat berkontribusi
                        secara aktif dan menciptakan lingkungan yang harmonis.</p>
                </div>
            </div>
            <div class="values-card g-col-4 p-4 bg-dark">
                <div class="values-card-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#F94D39"
                        class="bi bi-trophy mb-3" viewBox="0 0 16 16">
                        <path
                            d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z" />
                    </svg>
                    <h3 class="fw-bold">Prestatif</h3>
                    <p>Memiliki komitmen tinggi dan memiliki kemauan untuk selalu ingin lebih maju dan berkembang untuk
                        mencapai sukses-nya dalam segala aspek.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection