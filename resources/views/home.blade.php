@extends('layout.layout')

<style>
    .polaroid {
        width: 322px !important;
        transform: rotate(-4.9deg);
        flex-shrink: 0;
    }
</style>

@section('content')

    <!-- HOME SECTION -->
    <section id="home" class="home-section" style="padding-top: 150px;">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="home-img text-center">
                        <img class="polaroid" src="{{ asset('images/aku.png') }}" alt="saya">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-intro text-center text-lg-start">
                        <h6>Hallo, nama saya Widy.</h6>
                        <h1>Saya adalah seorang<span class="siswa"> pelajar</span></h1>
                        <p>di SMKN 1 PURWOSARI.</p>
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 mt-1">
                            <a href="{{url('/about')}}" class="colored-btn shadow-lg">Tentang Saya</a>
                            <a href="https://www.instagram.com/strllele" target="_blank" class="text-black" style="margin-top: 4px;">
                                <i class="bi bi-instagram fs-3"></i>
                            </a>
                            <a href="https://github.com/strlele" target="_blank" class="text-black" style="margin-top: 4px;">
                                <i class="bi bi-github fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="about-section" style="padding-top: 50px;">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #5a378c; background-color: #e6dbff; display: inline-block; padding: 10px 25px; border-radius: 30px;">
                Tentang Saya
            </h2>
            <p class="mt-3" style="max-width: 700px; margin: auto; font-size: 1.1rem; color: #555;">
                Saya adalah seorang pelajar di SMKN 1 Purwosari, jurusan Rekayasa Perangkat Lunak. Saya
                memiliki ketertarikan dalam bidang desain dan pemrograman. Saya suka belajar hal-hal baru
                untuk terus mengeksplorasi dan mengembangkan diri.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-0 rounded-4" style="background-color: #e6dbff;">
                    <div class="card-header bg-transparent text-center fw-bold" style="color: #5a378c;">Personal Information</div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li><strong>Nama:</strong> Widya Ayu Puspita Sari</li>
                            <li><strong>Usia:</strong> 16</li>
                            <li><strong>Tanggal Lahir:</strong> 19 Mei 2008</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-2 rounded-4" style="border-color: #5a378c;">
                    <div class="card-header text-center fw-bold" style="color: #5a378c;">Hobby</div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 text-center">
                            <li>Menonton Film</li>
                            <li>Mendengarkan Musik</li>
                            <li>Memasak</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="skills-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: #5a378c; background-color: #e6dbff; display: inline-block; padding: 10px 25px; border-radius: 30px;">
                    Skills
                </h2>
                <p class="mt-3" style="max-width: 700px; margin: auto; font-size: 1.1rem; color: #555;">
                    Berikut adalah beberapa keahlian yang saya pelajari dan kuasai selama ini.
                </p>
            </div>

            <div class="row text-center g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="p-4 shadow rounded-4" style="background-color: #ffffff;">
                        <i class="bi bi-code-slash fs-1 mb-3" style="color: #5a378c;"></i>
                        <h5 class="fw-bold">HTML & CSS</h5>
                        <p class="text-muted">Membuat struktur dan tampilan halaman web.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 shadow rounded-4" style="background-color: #ffffff;">
                        <i class="bi bi-brush fs-1 mb-3" style="color: #5a378c;"></i>
                        <h5 class="fw-bold">UI/UX Design</h5>
                        <p class="text-muted">Mendesain antarmuka pengguna.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 shadow rounded-4" style="background-color: #ffffff;">
                        <i class="bi bi-terminal fs-1 mb-3" style="color: #5a378c;"></i>
                        <h5 class="fw-bold">Laravel</h5>
                        <p class="text-muted">Menggunakan framework Laravel berbasis PHP.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 shadow rounded-4" style="background-color: #ffffff;">
                        <i class="bi bi-filetype-php fs-1 mb-3" style="color: #5a378c;"></i>
                        <h5 class="fw-bold">PHP</h5>
                        <p class="text-muted">Mengembangkan fungsi dinamis pada halaman web.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 shadow rounded-4" style="background-color: #ffffff;">
                        <i class="bi bi-database fs-1 mb-3" style="color: #5a378c;"></i>
                        <h5 class="fw-bold">MySQL</h5>
                        <p class="text-muted">Database untuk aplikasi web menggunakan MySQL.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-4 shadow rounded-4" style="background-color: #ffffff;">
                        <i class="bi bi-cpu fs-1 mb-3" style="color: #5a378c;"></i>
                        <h5 class="fw-bold">C++</h5>
                        <p class="text-muted">Membuat program dasar menggunakan bahasa C++.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="projects-section py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #5a378c; background-color: #e6dbff; display: inline-block; padding: 10px 25px; border-radius: 30px;">
                Projects
            </h2>
            <p class="mt-3" style="max-width: 700px; margin: auto; font-size: 1.1rem; color: #555;">
                Berikut adalah beberapa project yang telah saya kerjakan.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card shadow-sm border-0 rounded-4 w-100 d-flex flex-column" style="background-color: #fff; padding: 20px;">
                    <img src="{{ asset('images/ccjoy.png') }}" class="img-fluid rounded-3 mb-3" alt="Laravel Project">
                    <h5 class="fw-bold mb-1" style="color: #5a378c;">Website Toko Coklat (Laravel)</h5>
                    <p class="text-muted mb-1" style="font-size: 0.9rem;">Tugas Praktikum | Desember 2024</p>
                    <p class="text-muted" style="font-size: 0.95rem;">
                        Website CRUD menggunakan Laravel dan Blade Template.
                    </p>
                    <div class="mt-auto">
                        <a href="https://github.com/strlele/web-toko-coklat-crud" target="_blank" class="btn btn-sm mt-2" style="background-color: #5a378c; color: white; border-radius: 20px;">
                            Lihat detail project
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card shadow-sm border-0 rounded-4 w-100 d-flex flex-column" style="background-color: #fff; padding: 20px;">
                    <img src="{{ asset('images/kebaya.png') }}" class="img-fluid rounded-3 mb-3" alt="PHP MySQL Project">
                    <h5 class="fw-bold mb-1" style="color: #5a378c;">Kebaya Ecommerce</h5>
                    <p class="text-muted mb-1" style="font-size: 0.9rem;">Tugas Praktikum | Mei 2024</p>
                    <p class="text-muted" style="font-size: 0.95rem;">
                        Website e-commerce sederhana dengan HTML dan CSS, menampilkan katalog kebaya.
                    </p>
                    <div class="mt-auto">
                        <a href="https://github.com/strlele/kebaya-ecommerce" target="_blank" class="btn btn-sm mt-2" style="background-color: #5a378c; color: white; border-radius: 20px;">
                            Lihat detail project
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card shadow-sm border-0 rounded-4 w-100 d-flex flex-column" style="background-color: #fff; padding: 20px;">
                    <img src="{{ asset('images/kasir.png') }}" class="img-fluid rounded-3 mb-3" alt="C++ Project">
                    <h5 class="fw-bold mb-1" style="color: #5a378c;">Program Kasir C++</h5>
                    <p class="text-muted mb-1" style="font-size: 0.9rem;">Tugas Praktikum | Juni 2023</p>
                    <p class="text-muted" style="font-size: 0.95rem;">
                        Program berbasis C++ untuk menghitung total belanja dan kembalian.
                    </p>
                    <div class="mt-auto">
                        <a href="https://github.com/strlele/Program-Kasir" target="_blank" class="btn btn-sm mt-2" style="background-color: #5a378c; color: white; border-radius: 20px;">
                            Lihat detail project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
