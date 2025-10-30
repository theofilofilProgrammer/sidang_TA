<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MonitoringLaporanController, MahasiswaController, HomeController, DosenController, MataKuliahController, KegiatanController, PengumumanController, JaringanKerjasamaController, PrestasiPenghargaanController, BidangUnggulanController, JenisJurnalProsidingController, PublikasiController, SaranController, DashboardController};

// use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    // * Halaman homepage Admin * //

    // filepath: routes/web.php
    Route::get('/home-admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    // ** DATA MAHASISWA ** //

    // Route ini sudah mencakup semua kebutuhan CRUD (Create, Read, Update, Delete)
    // GET /mahasiswa -> index
    // GET /mahasiswa/create -> create
    // POST /mahasiswa -> store
    // GET /mahasiswa/{id} -> show
    // GET /mahasiswa/{id}/edit -> edit
    // PUT/PATCH /mahasiswa/{id} -> update
    // DELETE /mahasiswa/{id} -> destroy
    Route::resource('data-mahasiswa', MahasiswaController::class)->names('mahasiswa');

    // ** DATA DOSEN ** //
    // Ganti semua route manual dengan satu resource controller.
    // Anda perlu membuat DosenController dengan method (index, create, store, show, edit, update, destroy)
    Route::resource('data-dosen', DosenController::class)->names('dosen');


    // ** PENGELOLAAN DATA MATA KULIAH ** //
    // Route resource CRUD Mata Kuliah
    Route::resource('data-matkul', MataKuliahController::class)->names('matakuliah');


    // ** PENGELOLAAN DATA KEGIATAN ** //
    // * Route resource CRUD Kegiatan * //
    Route::resource('data-kegiatan', KegiatanController::class)->names('kegiatan');


    // ** PENGELOLAAN DATA PENGUMUMAN ** //
    // * Route resource CRUD untuk Halaman Data Pengumuman * //
    Route::resource('data-pengumuman', PengumumanController::class) ->names('pengumuman');

    // ** PENGELOLAAN DATA JARINGAN KERJASAMA & KEMITRAAN ** //
    // * Route resource CRUD untuk Halaman Data Kerjasama Kemitraan * //
    Route::resource('data-kerjasama', JaringanKerjasamaController::class)->names('jaringan-kerjasama');


    // ** PENGELOLAAN DATA AKREDITASI & PRESTASI PENGHARGAAN ** //
    // * Route resource CRUD untuk Halaman Data Akreditasi & Prestasi Penghargaan * //
    Route::resource('data-prestasi-penghargaan', PrestasiPenghargaanController::class)->names('prestasi');


    // ** PENGELOLAAN DATA BIDANG UNGGULAN ** //
    // * Route resource CRUD untuk Halaman Data Bidang Unggulan * //
    Route::resource('data-bidang-unggulan', BidangUnggulanController::class)->names('bidang-unggulan');

    // ** PENGELOLAAN DATA JENIS JURNAL & PUBLIKASI ** //
    // * Route resource CRUD untuk Halaman Data Jenis Jurnal & prosiding * //
    Route::resource('data-jurnal-prosiding', JenisJurnalProsidingController::class)->names('jurnal');


    // ** PENGELOLAAN DATA PUBLIKASI ** //
    // * Route resource CRUD untuk Halaman Data Publikasi * //
    Route::resource('data-publikasi', PublikasiController::class)->parameters(['data-publikasi' => 'publikasi'])->names('publikasi');


    // ** PENGELOLAAN DATA SARAN ** //
    // * Route resource CRUD untuk Halaman Data Saran * //
    Route::resource('saran-by-admin', SaranController::class)->except(['create'])->parameters(['saran-by-admin' => 'saran'])->names('saran');


    // * Halaman Monitoring Laporan - Admin * //
    Route::get('/monitoring-laporan', [MonitoringLaporanController::class, 'index'])->name('monitoring-laporan');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// ----------------- Halaman : USER ----------------- //
// Rute untuk halaman publik (frontend)
Route::post('/saran', [SaranController::class, 'store'])->name('saran.store');
Route::get('/saran', function () {
    return view('pages.frontend.saran');
})->name('saran.form');


Route::get('/Mengenal-Prodi', function () {
    return view('deskripsi_utama/index');
});

// Menu 2 : Profil Prodi
Route::get('/profil-prodi', function () {
    return view('pages.frontend.profil_prodi');
});

// Jenis Profil Prodi
// Sambutan Kaprodi
Route::get('/sambutan-kaprodi', [DosenController::class, 'sambutanKaprodi'])->name('frontend.kaprodi.sambutan');

// // Sejarah Lengkap
Route::get('/Sejarah-Lengkap', function () {
    return view('jenis_profilprodi/sejarahLengkap-profillulusan/sejarah-lengkap');
});

// Profil Umum & Deskripsi
Route::get('/Profil-umum-deskripsi', function () {
    return view('pages.frontend.profil_prodi.isi_profil_UmumDesc');
});

// Dosen & Staff
Route::get('/dosen-staff', [DosenController::class, 'frontendIndex'])->name('frontend.dosen.index');

// // Profil Dosen Lengkap berupa deskripsi profil dosen // //
Route::get('/deskripsi-dosen/{id}', [DosenController::class, 'frontendShow'])->name('frontend.dosen.show');

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'frontendIndex'])->name('frontend.mahasiswa.index');

// // Profil Mahasiswa Lengkap berupa deskripsi profil Mahasiswa // //
Route::get('/deskripsi-mahasiswa/{id}', [MahasiswaController::class, 'frontendShow'])->name('frontend.mahasiswa.show');


Route::get('/struktur-kurikulum', [MataKuliahController::class, 'strukturKurikulum'])->name('frontend.strukturkurikulum');

Route::get('/kegiatan', [KegiatanController::class, 'kegiatanIndex'])->name('frontend.kegiatan');
Route::get('/kegiatan/{id}', [KegiatanController::class, 'showKegiatan'])->name('frontend.kegiatan.show');

// Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'pengumumanIndex'])->name('frontend.pengumuman');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'showPengumuman'])->name('frontend.pengumuman.show');

// Jaringan Kerjasama & Kemitraan
Route::get('/jaringan-kerjasama-kemitraan', [JaringanKerjasamaController::class, 'frontendIndex'])->name('frontend.kerjasama.index');
Route::get('/desc-kerjasama/{id}', [JaringanKerjasamaController::class, 'frontendShow'])->name('frontend.kerjasama.show');

// Akreditasi & Prestasi Penghargaan
Route::get('/akreditasi-prestasi', [PrestasiPenghargaanController::class, 'frontendIndex'])->name('prestasi.frontend.index');
Route::get('/desc-prestasi/{id}', [PrestasiPenghargaanController::class, 'frontendShow'])->name('prestasi.frontend.show');

// Menu 3 : Akademik
Route::get('/akademik', function () {
    return view('pages.frontend.akademik');
});

// Jenis Akademik
Route::get('/program-reguler', [MataKuliahController::class, 'programReguler'])->name('frontend.programReguler');

Route::get('/profil-lulusanProdi', function () {
    return view('pages.frontend.akademik.isi_profil-lulusanProdi');
});

Route::get('/laboratorium', function () {
    return view('pages.frontend.akademik.isi_laboratorium');
});

// Profil Lulusan
Route::get('/Profil-Lulusan', function () {
    return view('pages.frontend.akademik.isi_profil-lulusan');
});

// Kalender akademik
Route::get('/Kalender-Akademik', function () {
    return view('akademik/deskripsi_akademik/kalender-akademik');
});

// Menu 4 : Risetf
Route::get('/riset', function () {
    return view('pages.frontend.riset');
});

// Jenis Riset & Publikasi
// Kelompok Keahlian
Route::get('/kelompok-keahlian', [BidangUnggulanController::class, 'frontendIndex'])->name('frontend.kelompokkeahlian.index');

// // Deskripsi Bidang unggulan
Route::get('/deskripsi-bidangUnggulan/{id}', [BidangUnggulanController::class, 'frontendShow'])->name('frontend.bidangunggulan.show');

// // Halaman Jurnal & Publikasi
Route::get('/jurnal-&-publikasi', [PublikasiController::class, 'frontendJurnalPublikasi'])->name('jurnal-publikasi.index');

// Route untuk detail publikasi individual
Route::get('/publikasi/{id}', [PublikasiController::class, 'showPublication'])->name('desc.jurnalPublikasi');

// Route untuk menampilkan semua publikasi
Route::get('/semua-publikasi', [PublikasiController::class, 'allPublications'])->name('semua.publikasi');

// Kekayaan Intelektual (HKI & Paten)
Route::get('/Kekayaan-intelektual', function () {
    return view('pages.frontend.riset.isi_kekayaan-intelektual');
});


Route::get('/saran', function () {
    return view('pages.frontend.saran');
});

// // DESKRIPSI KEGIATAN
Route::get('/deskripsi-kegiatan', function () {
    return view('deskripsi_kegiatan-pengumuman/desc_kegiatan');
});

// // DESKRIPSI PENGUMUMAN
Route::get('/deskripsi-pengumuman', function () {
    return view('deskripsi_kegiatan-pengumuman/desc_pengumuman');
});


Route::get('/kontak', function () {
    return view('pages.frontend.kontak');
});

// ----------------- (END) Halaman : USER ----------------- //

require __DIR__.'/auth.php';
