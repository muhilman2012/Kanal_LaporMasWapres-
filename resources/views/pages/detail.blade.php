@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Alur Pengaduan Tatap Muka</title>
    <meta property="og:title" content="Lapor Mas Wapres! - Alur Pengaduan Tatap Muka">
    <style>
        ol {
            margin-left: 20px;
        }
        ol li {
            margin-bottom: 8px;
            text-indent: -20px;
            padding-left: 20px;
        }
        ul {
            margin-left: 40px;
        }
        ul li {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('pages')
<!-- Content -->
<div class="flex flex-col justify-center items-center gap-y-5">
    <div class="flex flex-col gap-y-1 items-center justify-center text-center sm:mt-10">
        <h2 class="font-bold text-xl sm:text-2xl text-primary">Alur Pengaduan Tatap Muka</h2>
        <p class="font-normal italic text-base text-quote">Panduan Langkah Demi Langkah untuk Pengaduan Tatap Muka</p>
    </div>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:mt-[64px] max-w-[968px]">
        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">1</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Registrasi <i>Online</i></p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor melakukan registrasi <i>online</i> melalui website <i>https://lapormaswapres.id</i> sebelum datang ke lokasi.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">2</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pelapor Datang</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor datang ke lokasi pengaduan di Kantor Sekretariat Wakil Presiden yang beralamat di Jln. Kebon Sirih No. 14, Jakarta Pusat.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">3</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pengecekan Bukti Registrasi <i>Online</i></p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas melakukan pengecekan bukti registrasi <i>online</i> pelapor.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">4</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Penukaran Kartu Identitas</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menukarkan kartu identitas (KTP/SIM) untuk mendapatkan kartu ID Tamu.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">5</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Mengambil Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor mengambil nomor antrian di mesin antrian.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">6</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Meja Registrasi</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menuju meja registrasi untuk verifikasi data.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">7</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menunggu Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menunggu di ruang tunggu hingga nomor antriannya dipanggil.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">8</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Ruang Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor memasuki ke Ruang Pengaduan sesuai nomor panggilan.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">9</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menuju Loket sesuai Nomor Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menuju loket yang sesuai dengan nomor panggilan di layar.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">10</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Proses Pelayanan Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas melakukan layanan pengaduan dan mencatat laporan pada sistem.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">11</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Cetak Bukti Laporan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas memberikan lembar bukti laporan kepada pelapor.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">12</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Meninggalkan Ruang Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor meninggalkan ruang pengaduan dan mengambil kembali kartu identitas dengan menukarkan kartu ID Tamu.</p>
            </div>
        </div>
    </div>

    <a onclick="openModal()" class="w-full bg-gradient-to-r from-primary to-secondary text-white text-center font-semibold text-sm py-3 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom cursor-pointer">
        <p class="font-bold text-lg sm:text-lg text-white text-center">Registrasi <i>Online</i> (klik di sini) <br> (kuota <i>online</i> 50 orang/hari)</p>
    </a>
</div>
<!-- Modal untuk Syarat dan Ketentuan -->
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white p-6 rounded-lg w-full max-w-md max-h-[90vh] overflow-y-auto">
        <h2 class="text-xl font-bold mb-4 text-center">Tata Tertib Pelayanan Program <br> Lapor Mas Wapres!</h2>
        <div class="text-md text-dark-700 mb-4">
            <li><strong>KETENTUAN UMUM</strong>
                <ol>
                    <li>1. Pelayanan program <strong>Lapor Mas Wapres!</strong> diselenggarakan di Kantor Sekretariat Wakil Presiden, Jalan Kebon Sirih No. 14, Jakarta Pusat, pada hari kerja:
                        <ul>
                            <li>a. Senin s.d. Kamis, pukul 08.00 s.d. 14.00 WIB (istirahat, pukul 12.00 s.d. 13.00 WIB)</li>
                            <li>b. Jumat, pukul 08.00 s.d. 14.30 WIB (istirahat, pukul 11.00 s.d. 13.30 WIB)</li>
                        </ul>
                    </li>
                    <li>2. Pelapor memakai pakaian bebas rapi.</li>
                    <li>3. Pelapor wajib membawa kartu identitas (KTP/SIM/Identitas lain yang tercantum NIK).</li>
                    <li>4. Pengaduan yang dilayani berjumlah maksimal 50 orang/hari.</li>
                </ol>
            </li><br>

            <li><strong>KETENTUAN PENGADUAN</strong>
                <ol>
                    <li>1. Pelapor adalah orang yang langsung mengalami kejadian. Apabila pelapor bukan yang mengalami kejadian langsung, maka pelapor harus membawa surat kuasa bermaterai dari pihak yang diwakili.</li>
                    <li>2. Substansi aduan tidak sedang atau telah menjadi objek peradilan.</li>
                    <li>3. Substansi aduan belum pernah disampaikan oleh pelapor kepada Wakil Presiden.</li>
                    <li>4. Pelapor wajib membawa dokumen pendukung pengaduan yang lengkap dan relevan.</li>
                    <li>5. Petugas memverifikasi dokumen pengaduan. Apabila dokumen tidak lengkap, petugas akan meminta pelapor untuk mengirimkan kelengkapan dokumen melalui surel <i>lapormaswapres@set.wapresri.go.id</i> Pelaporan tidak diproses apabila pelapor tidak melengkapi dokumen tersebut dalam kurun waktu 10 hari.</li>
                    <li>6. Pelapor wajib menyampaikan nomor kontak atau surel yang dapat dihubungi.</li>
                </ol>
            </li><br>

            <li><strong>REGISTRASI DAN PROSES PENGADUAN</strong>
                <ol>
                    <li>1. Pelapor melakukan registrasi secara <i>online</i> melalui <a href="https://lapormaswapres.id"><i>https://lapormaswapres.id</i></a></li>
                    <li>2. Pelapor yang telah berhasil melakukan registrasi <i>online</i>, harap hadir sesuai tanggal yang dipilih.</li>
                    <li>3. Pelapor menunggu di ruang tunggu yang telah disediakan.</li>
                    <li>4. Petugas memverifikasi dan memberikan nomor antrian pengaduan.</li>
                    <li>5. Petugas mempersilahkan pelapor ke Ruang Pengaduan berdasarkan nomor antrian.</li>
                </ol>
            </li><br>

            <li><strong>HAL-HAL LAIN</strong>
                <ol>
                    <li>1. Pelapor menghormati tata tertib yang berlaku, menjaga etika dan kesopanan selama berada di lingkungan Sekretariat Wakil Presiden.</li>
                    <li>2. Pelapor dilarang mengambil gambar/video dan membuat konten selama proses pelaporan.</li>
                    <li>3. Pelapor harus menaati seluruh ketentuan dalam Tata Tertib <b>Lapor Mas Wapres!</b> dan ketentuan lain yang ditetapkan di kemudian hari.</li>
                </ol>
            </li>
        </div>

        <!-- Checkbox untuk persetujuan syarat dan ketentuan -->
        <div class="flex items-center mb-4">
            <input type="checkbox" id="agreeCheckbox" class="mr-2" onchange="toggleRegisterButton()">
            <label for="agreeCheckbox" class="text-sm">Setuju, Saya telah membaca seluruh Syarat dan Ketentuan yang berlaku</label>
        </div>

        <!-- Tombol Registrasi Sekarang -->
        <a id="registerButton" href="{{ route('reservasi') }}" class="bg-primary text-white py-2 px-4 rounded-lg text-center w-full block cursor-not-allowed opacity-50 pointer-events-none">
            Registrasi Sekarang
        </a>

        <!-- Tombol Tutup Modal -->
        <button onclick="closeModal()" class="mt-4 text-primary font-semibold text-sm underline w-full text-center">Tutup</button>
    </div>
</div>
@endsection

@section('script')
<script>
    // Fungsi untuk membuka modal
    function openModal() {
        document.getElementById('modal').classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    // Fungsi untuk mengaktifkan/menonaktifkan tombol registrasi
    function toggleRegisterButton() {
        const checkbox = document.getElementById('agreeCheckbox');
        const registerButton = document.getElementById('registerButton');
        
        if (checkbox.checked) {
            registerButton.classList.remove('cursor-not-allowed', 'opacity-50', 'pointer-events-none');
        } else {
            registerButton.classList.add('cursor-not-allowed', 'opacity-50', 'pointer-events-none');
        }
    }
</script>
@endsection