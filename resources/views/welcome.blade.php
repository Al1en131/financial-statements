<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="relative bg-[#202239] text-white font-sans">
    <header class="fixed top-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center p-4 bg-white/10 rounded-[50px] mt-3 md:px-8">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <span class="text-orange-400">fin</span>Track
            </div>

            <!-- Hamburger Menu Icon -->
            <button id="menu-btn" class="md:hidden focus:outline-none" onclick="toggleMenu()">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>

            <!-- Navigation Menu and Buttons for Desktop -->
            <div id="menu"
                class="hidden h-1/2 fixed inset-20 bg-black bg-opacity-80 md:bg-opacity-0 md:relative md:flex md:inset-auto md:bg-transparent flex-col md:flex-row md:items-center md:space-x-6 p-8 md:p-0">
                <nav class="flex flex-col md:flex-row md:items-center md:space-x-6 space-y-4 md:space-y-0 text-center">
                    <a href="#home" class="text-white hover:text-blue-300">Home</a>
                    <a href="#about" class="text-white hover:text-blue-300">About</a>
                    <a href="#howitworks" class="text-white hover:text-blue-300">How it works</a>
                    <a href="#team" class="text-white hover:text-blue-300">Our team</a>
                </nav>

                <!-- Buttons (will also be in the dropdown on mobile) -->
                <div
                    class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 mt-4 md:mt-0 text-center max-lg:w-full">
                    <button
                        class="w-[130px] h-[45.25px] bg-[#d9d9d9]/0 rounded-[35px] border-2 border-[#5a98e8] max-lg:w-full">Login</button>
                    <button
                        class="w-[130px] h-[45.25px] bg-[#5a98e8] rounded-[59px] border border-[#202239] max-lg:w-full"">Register</button>
                </div>
            </div>
        </div>

    </header>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }
    </script>




    <!-- Hero Section -->
    <section class="px-8 max-lg:px-6 pt-12 max-lg:pt-20" id="home">
        <div class="m-6 max-lg:m-0 container mx-auto flex justify-center items-center">
            <h1
                class="text-[12px] md:text-3xl font-semibold mb-4 flex items-center mt-12 max-lg:mt-4 text-center space-x-2">
                <span>Atur keuangan organisasimu dengan</span>
                <span class="text-orange-400">fin</span>Track
            </h1>

        </div>
        <div
            class=" md:h-[450px] max-lg:py-8 bg-white bg-opacity-10 rounded-[20px] container mx-auto flex justify-between items-center px-7 max-lg:px-4 ">
            <div class="md:w-1/2 max-lg:space-y-4 max-lg:w-full">
                <p class="text-[#ffae4d] text-xl max-lg:text-sm font-semibold">
                    Semua jadi mudah hanya dengan,
                </p>
                <h1 class="text-[90px] font-bold font-['Poppins'] max-lg:text-5xl leading-[132.06px] ">
                    <span class="text-orange-400">fin</span>Track
                </h1>
                <p class="text-lg mb-6 max-lg:text-sm text-balance">finTrack memudahkan organisasi dalam mencatat
                    transaksi, mengelola anggaran, dan membuat laporan keuangan terperinci dengan antarmuka yang ramah
                    pengguna dan efisien</p>
                <button
                    class="w-[420px] max-lg:w-44 h-14 max-lg:h-10 max-lg:textsm bg-[#d9d9d9]/0 rounded-[35px] border-2 border-[#5a98e8] hover:bg-blue-500 hover:text-white">Get
                    Started</button>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex max-lg:hidden justify-center">
                <img src="{{ asset('images/home-character.png') }}" alt="Illustration">
            </div>
        </div>

    </section>

    <!-- About Section -->
    <section class="py-20 max-lg:py-10 px-8 max-lg:px-6" id="about">
        <div class="container mx-auto md:px-6">
            <div class="relative md:inline-flex md:flex-col items-center max-lg:text-center  mb-4">
                <h2 class="text-2xl font-bold ">
                    About <span class="text-orange-400">fin</span>Track?
                </h2>
                <div class="w-full mt-1 h-2 bg-white rounded-full"></div>
            </div>
            <div
                class=" md:h-[305px] max-lg:py-8 bg-white/10 rounded-[20px] container mx-auto flex justify-between items-center px-7 ">
                <div class="md:w-1/2 mt-10 max-lg:hidden md:mt-0 flex justify-center">
                    <img src="{{ asset('images/Team-pana.png') }}" alt="Illustration">
                    <!-- Ganti URL gambar dengan URL gambar yang sesuai -->
                </div>
                <div>

                    <p class="md:w-[667px] text-left max-lg:text-justify text-xl max-lg:text-sm font-medium space-x-1 ">
                        <span>Fintrack adalah platform praktis
                            buat bantuin</span><span class="text-[#EC8305]">komunitas</span><span
                            style="text-white text-2xl font-semibold font-['Poppins']"> atau </span><span
                            class="text-[#EC8305]">komunitas</span><span> dalam mencatat dan memantau transaksi keuangan
                            dengan mudah dan teratur. Fintrack juga bantu catat semua jenis laporan keuangan lengkap
                            dengan bukti transaksi fisik biar semuanya transparan dan gampang dilacak.</span>
                    </p>
                </div>
            </div>

            <div
                class="flex max-lg:flex-col max-lg:mt-10 items-center justify-between max-lg:justify-center space-y-6 md:space-y-0  text-white md:ml-20 font-semibold">
                <!-- Kolom Kiri: Daftar Fitur -->
                <div class="space-y-6 md:w-1/2 max-lg:w-full">
                    <!-- Fitur 1 -->
                    <div class="flex items-start">
                        <div
                            class="bg-gradient-to-r from-[#2c506699] to-[#d4d4d499] p-4 flex items-center md:w-[600px] w-full h-[102px] rounded-[17px] shadow-lg  md:mr-12">
                            <img src="{{ asset('images/Graph square.svg') }}"alt="Icon 1"
                                class="md:w-[59px] h-[59px]  mr-3">
                            <p class="text-white  max-lg:text-sm">Rekapitulasi pendapatan, pengeluaran, dan saldo
                                otomatis.</p>
                        </div>
                        <div class="text-4xl font-bold text-gray-300 opacity-50 pt-8 ml-10 max-lg:hidden">1</div>
                    </div>

                    <!-- Fitur 2 -->
                    <div class="flex items-start">
                        <div class="text-4xl font-bold text-gray-300 opacity-50 pt-8 mr-10 max-lg:hidden">2</div>
                        <div
                            class="bg-gradient-to-r from-[#2c506699] to-[#d4d4d499] p-4 flex items-center md:w-[600px] h-[102px] rounded-[17px] shadow-lg md:ml-12">
                            <img src="{{ asset('images/Report.svg') }}" alt="Icon 2" class=" mr-3 w-[59px] h-[59px] ">
                            <p class="text-white max-lg:text-sm">Laporan kas mingguan dengan status pembayaran tiap
                                anggota.</p>
                        </div>
                    </div>

                    <!-- Fitur 3 -->
                    <div class="flex items-start">
                        <div
                            class="bg-gradient-to-r from-[#2c506699] to-[#d4d4d499] p-4 flex items-center md:w-[600px] w-full h-[102px] rounded-[17px] shadow-lg md:mr-12">
                            <img src="{{ asset('images/Fi Br Time Check.svg') }}" alt="Icon 3"
                                class="w-[59px] h-[59px]  mr-3">
                            <p class="text-white max-lg:text-sm ">Akses kapan saja untuk laporan keuangan yang rapi dan
                                terorganisir.
                            </p>
                        </div>
                        <div class="text-4xl font-bold text-gray-300 opacity-50 pt-8 ml-10 max-lg:hidden">3</div>
                    </div>
                </div>

                <!-- Kolom Kanan: Ilustrasi Besar -->
                <div class="flex justify-end md:w-1/2 max-lg:hidden w-full items-center">
                    <div class="block">
                        <div class="flex justify-end relative top-20 right-16">
                            <div class="">
                                <h2 class="text-2xl font-bold ">
                                    Fitur <span class="text-orange-400">fin</span>Track?
                                </h2>
                                <div class=" text-right justify-items-end mt-1 h-2 bg-white rounded-full"></div>
                            </div>
                        </div>
                        <img src="{{ asset('images/features.png') }}" class="" alt="Illustration">
                    </div>
                </div>
            </div>
    </section>

    <!--how section -->
    <section class="py-20 pr-8 max-lg:pr-6 max-lg:py-10 max-lg:px-6" id="howitworks">
        <div class="min-h-screen text-white max-lg:text-center">
            <!-- Header -->
            <div class="text-center mb-8 flex  justify-center items-center">
                <div class="relative inline-flex flex-col items-center mb-4 ">
                    <h1 class="text-2xl font-bold">How <span class="text-[#f6a935]">fin</span>Track works</h1>
                    <div class="w-full mt-1 h-2 bg-white rounded-full"></div>
                </div>
            </div>


            <!-- Konten Utama -->
            <div class="flex gap-4 max-md:block max-md:space-y-8">
                <!-- Sisi Kiri: Ilustrasi Dashboard -->
                <div class="w-full md:w-2/3 flex justify-center">
                    <img src="{{ asset('images/mockup how.png') }}" alt="Dashboard Illustration" class=" mr-48px">
                </div>

                <!-- Sisi Kanan: Deskripsi Fitur -->
                <div class="w-full md:w-3/4 space-y-12 mr-12">
                    <!-- Bagian Laporan Keuangan -->
                    <div class="max-lg:flex-col">
                        <div
                            class="relative inline-flex flex-col items-center md:ml-72 mb-4 max-lg:text-center max-lg:flex-col">
                            <h2 class="text-xl font-semibold text-gray-300 ">Laporan keuangan</h2>
                            <div class="w-full mt-0 h-2 bg-orange-400 rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-br-none shadow-md text-right max-lg:flex-col max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Akses Menu Laporan Keuangan</h3>
                                <p class="text-xs text-gray-200">Pilih menu Laporan Keuangan di sidebar untuk diarahkan
                                    ke halaman laporan keuangan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-bl-none shadow-md max-lg:flex-col max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Menambah Nama Laporan Keuangan</h3>
                                <p class="text-xs text-gray-200">Di halaman ini, Anda bisa menambah banyak nama laporan
                                    keuangan sesuai kebutuhan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tr-none shadow-md text-right max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Mengakses Detail Laporan Keuangan</h3>
                                <p class="text-xs text-gray-200">Klik card laporan keuangan yang sudah dibuat untuk
                                    masuk ke detail laporan keuangan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tl-none shadow-md max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Ringkasan Pemasukan, Pengeluaran, dan Saldo</h3>
                                <p class="text-xs text-gray-200">Anda dapat melihat ringkasan data pemasukan,
                                    pengeluaran, serta sisa saldo.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Uang Kas -->
                    <div>
                        <div class="relative inline-flex flex-col items-center md:ml-80 mb-4 ">
                            <h2 class="text-xl font-semibold text-gray-300 ">Uang Kas</h2>
                            <div class="w-full mt-0 h-2 bg-orange-400 rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-br-none shadow-md text-right max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2 text-11px">Akses Menu Uang Kas</h3>
                                <p class="text-xs text-gray-200">Pilih menu Uang Kas di sidebar. Ini akan membawa Anda
                                    ke halaman yang serupa dengan menu laporan keuangan, khusus untuk laporan keuangan
                                    kas.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-bl-none shadow-md max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Menambah Laporan Keuangan Kas</h3>
                                <p class="text-xs text-gray-200">Anda dapat menambahkan beberapa nama laporan keuangan
                                    kas beserta jumlah uang kas mingguan.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tr-none shadow-md text-right max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Mengakses Detail Laporan Kas</h3>
                                <p class="text-xs text-gray-200">Setelah berhasil menambahkan laporan, akan muncul card
                                    dengan nama yang telah dibuat. Klik card ini untuk masuk ke halaman data keuangan
                                    kas.</p>
                            </div>
                            <div
                                class="bg-[#3c4a60] bg-opacity-90 p-4 rounded-lg rounded-tl-none shadow-md text justify max-lg:text-center max-lg:rounded-lg">
                                <h3 class="font-semibold mb-2">Status Pembayaran</h3>
                                <p class="text-xs text-gray-200">Jika checkbox di minggu ke-4 sudah ditandai, status
                                    pembayaran otomatis berubah menjadi Lunas. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Team Section -->
    <section class="py-20 px-8 max-lg:px-6" id="team">
        <div class="">
            <!-- Konten Utama -->
            <div class="w-full">
                <!-- Judul Bagian -->
                <div class="text-center mb-12">
                    <div class="relative inline-flex flex-col items-center ml-8 mb-4">
                        <h2 class="text-2xl font-bold max-lg:text-center">
                            Meet the <span class="text-orange-400">Team</span>
                        </h2>
                        <div class="w-full mt-1 h-2 bg-white rounded-full"></div>
                    </div>

                </div>

                <!-- Konten Utama: Card Tim -->
                <div
                    class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-8 ">
                    <!-- Card Tim 1 -->
                    <div class="bg-[#3c4a60] p-6 rounded-xl  flex items-center space-x-4 shadow-lg max-lg:flex-col ">
                        <div class="md:w-1/2 mt-10 md:mt-0  w-248 h-231 max-lg:mb-2">
                            <img src="{{ asset('images/alif eca.png') }}" alt="Illustration"
                                class="w-[195px] h-[231px] rounded-xl">
                        </div>
                        <div class="text-left max-lg:pt-2 max-lg:text-center">
                            <h3 class="text-lg font-semibold text-white">Alif Essa Nurcahyani</h3>
                            <p class="text-sm text-blue-300">alifessanurcahyani@gmail.com</p>
                            <p class="text-sm text-gray-300">Front-End Developer</p>
                            <p class="text-sm text-gray-300">S1 Informatika</p>
                        </div>
                    </div>

                    <!-- Card Tim 2 -->
                    <div class="bg-[#3c4a60] p-6 rounded-xl  flex items-center space-x-4 shadow-lg max-lg:flex-col">
                        <div class="md:w-1/2 mt-10 md:mt-0  w-248 h-231">
                            <img src="{{ asset('images/bila.jpg') }}" alt="Illustration"
                                class="w-[190px] h-[231px] rounded-xl">
                        </div>
                        <div class="text-left max-lg:pt-2 max-lg:text-center">
                            <h3 class="text-lg font-semibold text-white">Fathiya Salsabila</h3>
                            <p class="text-sm text-blue-300">salsabilafathiya7@gmail.com</p>
                            <p class="text-sm text-gray-300">Mobile development enthusiast</p>
                            <p class="text-sm text-gray-300">S1 Informatika</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
    <section>
        <!-- Kotak Footer dengan Copyright -->
        <div class="bg-[#3c4a60] w-full  text-center p-10 mt-12 mb-0 ">
            <p class="text-xl font-semibold text-gray-400 max-lg:text-sm">
                © Copyright powered by <span class="text-orange-400">fin</span>Track
            </p>
        </div>
    </section>

</body>

</html>
