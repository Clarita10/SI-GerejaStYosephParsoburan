<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', 'PagesController@home');

Route::get('/login', function () {
    return view('login');
});
Route::post('/PostLogin', 'LoginController@PostLogin');

Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::post('/PostRegistrasi', 'RegistrasiController@PostRegistrasi');

Route::get('/logout', 'LogoutController@logout');

Route::get('/lupa_password', function () {
    return view('lupa_password');
});
// Route::post('/PostLupaPassword', 'LupaPasswordController@PostLupaPassword');
Route::get('forget-password', 'LupaPasswordController@getEmail');
Route::post('forget-password', 'LupaPasswordController@postEmail');

Route::get('/', function () {
    return view('index');
});
Route::get('/', 'IndexController@index');

Route::get('/aula', 'AulaController@aula');

Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/pengumuman', 'PengumumanController@index');
Route::get('/pengumuman','PengumumanController@cari_p');

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/stasi', function () {
    return view('stasi');
});

Route::get('/visi_misi', function () {
    return view('visi_misi');
});

Route::get('/pastor_paroki', 'InformasiController@pastor');

Route::get('/kerasulan', function () {
    return view('kerasulan');
});

Route::get('/dashboard', 'DashboardController@dashboard');

Route::get('/tambah_pengumuman', function () {
    return view('tambah_pengumuman');
});
Route::post('/PostTambahPengumuman', 'PengumumanController@PostTambahPengumuman');
Route::get('/detail_pengumuman/{id}', 'PengumumanController@detail_pengumuman');
Route::get('/daftar_pengumuman', 'PengumumanController@dashboard');
Route::get('/delete_pengumuman/{id}', 'PengumumanController@delete');
Route::get('/daftar_pengumuman','PengumumanController@cari');
Route::get('/edit_pengumuman/{id}', 'PengumumanController@edit_pengumuman');
Route::post('/PostEditPengumuman', 'PengumumanController@PostEditPengumuman');

Route::get('/tambah_jadwal_petugas', function () {
    return view('tambah_jadwal_petugas');
});
Route::post('/PostTambahJadwalPetugas', 'JadwalPetugasController@PostTambahJadwalPetugas');
Route::post('/PostEditJadwalPetugas', 'JadwalPetugasController@PostEditJadwalPetugas');
Route::get('/delete_jadwal_petugas/{id}', 'JadwalPetugasController@delete');
Route::get('/daftar_jadwal_petugas', 'JadwalPetugasController@index');
Route::get('/daftar_jadwal_petugas','JadwalPetugasController@cari');
Route::get('/edit_jadwal_petugas/{id}', 'JadwalPetugasController@edit_jadwal_petugas');


Route::get('/tambah_kalender_liturgi', function () {
    return view('tambah_kalender_liturgi');
});
Route::post('/PostTambahKalenderLiturgi', 'KalenderLiturgiController@PostTambahKalenderLiturgi');
Route::post('/PostEditKalenderLiturgi', 'KalenderLiturgiController@PostEditKalenderLiturgi');
Route::get('/delete_kalender_liturgi/{id}', 'KalenderLiturgiController@delete');
Route::get('/daftar_kalender_liturgi', 'KalenderLiturgiController@index');
Route::get('/daftar_kalender_liturgi','KalenderLiturgiController@cari');
Route::get('/edit_kalender_liturgi/{id}', 'KalenderLiturgiController@edit_kalender_liturgi');

Route::get('/tambah_data_umat', function () {
    return view('tambah_data_umat');
});
Route::get('/tambah_data_umat', 'DataUmatController@TambahDataUmat');
Route::post('/PostTambahDataUmat', 'DataUmatController@PostTambahDataUmat');
Route::get('/daftar_data_umat', 'DataUmatController@index');
Route::get('/daftar_data_umat','DataUmatController@cari');
Route::get('/delete_data_umat/{id}', 'DataUmatController@delete');
Route::get('/edit_data_umat/{id}', 'DataUmatController@edit_data_umat');
Route::post('/PostEditDataUmat', 'DataUmatController@PostEditDataUmat');
Route::get('/daftar_data_umat/export_excel','DataUmatController@data_umat_export_excel');
Route::post('/daftar_data_umat/import_excel', 'DataUmatController@data_umat_import_excel');


Route::get('/tambah_data_baptis', function () {
    return view('tambah_data_baptis');
});
Route::post('/PostTambahDataBaptis', 'BaptisController@PostTambahDataBaptis');
Route::get('/daftar_data_baptis', 'BaptisController@index');
Route::get('/daftar_data_baptis','BaptisController@cari');
Route::get('/delete_data_baptis/{id}', 'BaptisController@delete');
Route::get('/edit_data_baptis/{id}', 'BaptisController@edit_data_baptis');
Route::post('/PostEditDataBaptis', 'BaptisController@PostEditDataBaptis');
Route::get('/data_baptis/surat_permandian/{id}','BaptisController@surat_permandian');
Route::get('/daftar_data_baptis/export_excel','BaptisController@data_baptis_export_excel');

// Route::get('/ajuan_umat', function () {
//     return view('ajuan_umat');
// });
Route::get('/ajuan_umat', 'AjuanUmatController@ajuan_umat');
Route::post('/PostAjuanUmat', 'AjuanUmatController@PostAjuanUmat');
Route::get('/daftar_ajuan', 'AjuanUmatController@index');
Route::get('/daftar_ajuan','AjuanUmatController@cari');
Route::get('/setujui_ajuan/{id}/{username}', 'AjuanUmatController@setujui');
Route::get('/tolak_ajuan/{id}', 'AjuanUmatController@tolak');
Route::get('/alasan_ajuan_ditolak/{id}','AjuanUmatController@alasan_ditolak');
Route::post('/PostAlasanAjuanDitolak', 'AjuanUmatController@PostAlasanDitolak');

Route::get('/pemesanan_aula', function () {
    return view('pemesanan_aula');
});
Route::post('/PostPemesananAula', 'AulaController@PostPemesananAula');
Route::get('/daftar_pemesanan_aula', 'AulaController@index');
Route::get('/daftar_pemesanan_aula','AulaController@cari');
Route::get('/setujui_pesanan/{id}', 'AulaController@setujui');
Route::get('/tolak_pesanan/{id}', 'AulaController@tolak');
Route::get('/pemesanan_aula/transaksi_pemesanan_aula/{id}','AulaController@transaksi_pemesanan_aula');
// Route::get('/pemesanan_aula/transaksi_pemesanan_aula/{id}', function () {
//     return view('transaksi_pemesanan_aula');
// });
Route::get('/bukti_pembayaran/{id}','AulaController@bukti_pembayaran');
Route::post('/PostBuktiPembayaran', 'AulaController@PostBuktiPembayaran');
Route::get('/tanda_tangan_transaksi/{id}','AulaController@tanda_tangan_transaksi');
Route::post('/PostTandaTanganTransaksi', 'AulaController@PostTandaTanganTransaksi');
Route::get('/alasan_ditolak/{id}','AulaController@alasan_ditolak');
Route::post('/PostAlasanDitolak', 'AulaController@PostAlasanDitolak');

Route::get('/edit_aula/1', 'InformasiController@edit_aula');
Route::post('/PostEditAula', 'InformasiController@PostEditAula');

Route::get('/user', 'ProfilUserController@index');
Route::get('/user','ProfilUserController@cari');
Route::get('/detail_user/{id}', 'ProfilUserController@detail_user');
Route::post('/ChangeRole', 'ProfilUserController@ChangeRole');
Route::get('/delete_user/{id}', 'ProfilUserController@delete');

Route::get('/profil/{username}', 'ProfilUserController@detail_profil');
Route::post('/EditProfil', 'ProfilUserController@EditProfil');

Route::get('/daftar_slideshow', 'InformasiController@daftar_slideshow');
Route::get('/edit_slideshow/{id}', 'InformasiController@edit_slideshow');
Route::post('/PostEditSlideshow', 'InformasiController@PostEditSlideshow');
// Route::get('/daftar_pemesanan_aula','AulaController@cari');

Route::get('/tambah_artikel', function () {
    return view('tambah_artikel');
});
Route::get('/daftar_artikel', 'InformasiController@daftar_artikel');
Route::get('/daftar_artikel','InformasiController@cari_artikel');
Route::post('/PostTambahArtikel', 'InformasiController@PostTambahArtikel');
Route::get('/edit_artikel/{id}', 'InformasiController@edit_artikel');
Route::post('/PostEditArtikel', 'InformasiController@PostEditArtikel');
Route::get('/delete_artikel/{id}', 'InformasiController@delete_artikel');


Route::get('/tambah_petugas', function () {
    return view('tambah_petugas');
});
Route::get('/daftar_petugas', 'InformasiController@daftar_petugas');
Route::get('/daftar_petugas','InformasiController@cari_petugas');
Route::post('/PostTambahPetugas', 'InformasiController@PostTambahPetugas');
Route::get('/edit_petugas/{id}', 'InformasiController@edit_petugas');
Route::post('/PostEditPetugas', 'InformasiController@PostEditPetugas');
Route::get('/delete_petugas/{id}', 'InformasiController@delete_petugas');
Route::get('/tampilkan_petugas/{id}', 'InformasiController@tampilkan');
Route::get('/batalkan_tampilan/{id}', 'InformasiController@batalkan');


