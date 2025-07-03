<footer class="bg-light text-dark pt-5 pb-4 border-top mt-5">
    <div class="container">
        <div class="row gy-4">

            {{-- Logo dan Alamat --}}
            <div class="col-md-4">
                <img src="/images/logo-klinik.png" alt="Logo Klinik Cipanas" width="160" class="mb-3">
                <p class="mb-2">
                    Jl. Cipanas No.7 Panday, Ds. Langensari<br>
                    Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151
                </p>
                <a href="#"><i class="bi bi-facebook fs-5 me-3"></i></a>
                <a href="#"><i class="bi bi-instagram fs-5"></i></a>
            </div>

            {{-- Informasi --}}
            <div class="col-md-2">
                <h6 class="fw-bold">Informasi</h6>
                <ul class="list-unstyled">
                    <li><a href="/pasien/tentang_kami" class="text-decoration-none text-dark">› Tentang Kami</a></li>
                    <li><a href="/pasien/pelayanan" class="text-decoration-none text-dark">› Fasilitas & Pelayanan</a></li>
                    <li><a href="/pasien/jadwal_dokter" class="text-decoration-none text-dark">› Jadwal dan Dokter</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">› Berita dan Kegiatan</a></li>
                    <li><a href="/pasien/hubungi_kami" class="text-decoration-none text-dark">› Hubungi Kami</a></li>
                </ul>
            </div>

            {{-- Jam Operasional --}}
            <div class="col-md-3">
                <h6 class="fw-bold">Jam Operasional</h6>
                <ul class="list-unstyled">
                    <li><strong>Jumat:</strong> 07.00–11.00, 13.00–20.00</li>
                    <li><strong>Sabtu - Kamis:</strong> 07.00–12.00, 15.00–20.00</li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div class="col-md-3">
                <h6 class="fw-bold">Kontak Kami</h6>
                <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> 0853-1518-1800</p>
                <p class="mb-0"><i class="bi bi-envelope-fill me-2"></i> info@klinikcipanas.com</p>
            </div>

        </div>
    </div>

    <div class="text-center bg-primary text-white mt-4 py-3">
        © {{ date('Y') }} Klinik Cipanas
    </div>
</footer>
