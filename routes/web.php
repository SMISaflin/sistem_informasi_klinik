<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegPasienController;
use App\Http\Controllers\Dokter\JadwalController;
use App\Http\Controllers\{
    ProfileController,
    DokterController,
    PasienController,
    PoliController,
    ObatController,
    JadwalDokterController,
    RiwayatPemeriksaanController,
    UserApprovalController,
    UserDokterController,
    DashboardController,
    ApotekerDashboardController,
    ApotekerObatController,
    ResepController
};


// AUTH Routes
require __DIR__ . '/auth.php';

// Logout Route (tetap di luar middleware)
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


// Route::get('/', function () {
//     return view('pasien.dashboard'); // atau view landing pasien non-login
// });
// Semua route yang butuh login dikelompokkan di sini
Route::middleware(['auth'])->group(function () {

    // ================= ADMIN =================
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('dokter', DokterController::class);
        Route::resource('pasien', PasienController::class);
        Route::resource('poli', PoliController::class);
        Route::resource('jadwal_dokter', JadwalDokterController::class);
        Route::resource('riwayat_pemeriksaan', RiwayatPemeriksaanController::class);
        Route::get('/user-approval', [UserApprovalController::class, 'index'])->name('user.approval');
        Route::post('/user-approval/{id}/approve', [UserApprovalController::class, 'approve'])->name('user.approve');
        Route::post('/user-approval/{id}/reject', [UserApprovalController::class, 'reject'])->name('user.reject');
    });

    // ================= APOTEKER =================
    Route::middleware(['role:apoteker'])->prefix('apoteker')->name('apoteker.')->group(function () {
        Route::get('/dashboard', [ApotekerDashboardController::class, 'index'])->name('dashboard');
        Route::resource('obat', ApotekerObatController::class);
        Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');
        Route::get('/resep/{id}', [ResepController::class, 'show'])->name('resep.show');
        Route::post('/resep/{id}/proses', [ResepController::class, 'proses'])->name('resep.proses');
    });

    // ================= DOKTER =================
    Route::middleware(['role:dokter'])->prefix('dokter')->name('dokter.')->group(function () {
        Route::view('/dashboard', 'dokter.dashboard')->name('dashboard');
        Route::get('/pasien', [App\Http\Controllers\Dokter\PasienController::class, 'index'])->name('pasien.index');
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::post('/resep/store', [App\Http\Controllers\Dokter\ResepController::class, 'store'])->name('resep.store');
    });


    // ================= PASIEN =================
    Route::middleware(['role:pasien'])->prefix('pasien')->name('pasien.')->group(function () {
         Route::get('/dashboard', [UserDokterController::class, 'tampilUntukPasien'])->name('dashboard');
       Route::get('/jadwal_dokter', [UserDokterController::class, 'tampiljadwalDokter'])->name('jadwalDokter');
        Route::view('/tentang_kami', 'pasien.tentang_kami')->name('tentang_kami');
        Route::view('/pelayanan', 'pasien.pelayanan')->name('pelayanan');
        Route::view('/hubungi_kami', 'pasien.hubungi_kami')->name('hubungi_kami');
         Route::post('/regpasien', [RegPasienController::class, 'store'])->name('regpasien.store');
    });
});
