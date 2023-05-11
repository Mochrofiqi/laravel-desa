<?php

namespace Database\Seeders;

use App\Models\Bantuan;
use App\Models\Dusun;
use App\Models\JenisBantuan;
use App\Models\Ktp;
use App\Models\Penduduk;
use App\Models\Perangkat;
use App\Models\Saran;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'level' => 'Admin',
            'nama' => 'Moch. Rofiqi',
            'jeniskelamin' => 'Laki-laki',
            'telepon' => '082345678901',
            'username' => 'mochrofiqi',
            'email' => 'mochrofiqi@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'level' => 'User',
            'nama' => 'Zaka Firmansyah',
            'jeniskelamin' => 'Laki-laki',
            'telepon' => '082357246356',
            'username' => 'zaka',
            'email' => 'zaka@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Mochammad Rafly',
            'nik_penduduk' => '3152137289134',
            'ttl_penduduk' => '2001-06-13',
            'jk_penduduk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Mayangan no.12 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 1
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Muhammad Abdiel',
            'nik_penduduk' => '3157142452523',
            'ttl_penduduk' => '2001-09-1',
            'jk_penduduk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Mayangan no.25 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 1
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Siti Nurhaliza',
            'nik_penduduk' => '3151512435353',
            'ttl_penduduk' => '2001-10-24',
            'jk_penduduk' => 'Perempuan',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Balingan no.5 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 2
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Zaka Firmansyah',
            'nik_penduduk' => '3158124246352',
            'ttl_penduduk' => '2001-01-29',
            'jk_penduduk' => 'Laki-laki',
            'agama' => 'Kristen',
            'alamat_penduduk' => 'Dsn Mayangan no.19 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 1
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Rizky Pramita',
            'nik_penduduk' => '3154512348903',
            'ttl_penduduk' => '2001-12-1',
            'jk_penduduk' => 'Perempuan',
            'agama' => 'Hindu',
            'alamat_penduduk' => 'Dsn Balingan no.2 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 2
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Rasya Kusuma',
            'nik_penduduk' => '3152461352561',
            'ttl_penduduk' => '2001-11-21',
            'jk_penduduk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Balingan no.27 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 2
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Devanis Aleandra',
            'nik_penduduk' => '3151253262426',
            'ttl_penduduk' => '2001-04-23',
            'jk_penduduk' => 'Perempuan',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Mayangan no.47 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 1
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Vivin Aldiana',
            'nik_penduduk' => '3156284134234',
            'ttl_penduduk' => '2001-02-14',
            'jk_penduduk' => 'Perempuan',
            'agama' => 'Hindu',
            'alamat_penduduk' => 'Dsn Mayangan no.64 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 1
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Naki Suhanto',
            'nik_penduduk' => '3151255742452',
            'ttl_penduduk' => '2001-05-08',
            'jk_penduduk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Balingan no.14 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 2
        ]);
        Penduduk::create([
            'nama_penduduk' => 'Hasan Ferdian',
            'nik_penduduk' => '3152146363232',
            'ttl_penduduk' => '2001-11-19',
            'jk_penduduk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat_penduduk' => 'Dsn Balingan no.69 Desa Panglipuran Bali',
            'ket_penduduk' => 'Hidup',
            'dusun_id' => 2
        ]);
        Dusun::create([
            'nama_dusun' => 'Mayangan',
            'rt' => 1,
            'rw' => 2,
            'kepala_dusun' => 'Vivin Aldiana',
            'kepala_rt' => 'Muhammad Abdiel',
            'kepala_rw' => 'Zaka Firmansyah',
            'jumlah_warga' => 305
        ]);
        Dusun::create([
            'nama_dusun' => 'Balingan',
            'rt' => 2,
            'rw' => 2,
            'kepala_dusun' => 'Siti Nurhaliza',
            'kepala_rt' => 'Rizky Pramita',
            'kepala_rw' => 'Hasan Ferdian',
            'jumlah_warga' => 503
        ]);
        JenisBantuan::create([
            'nama_bansos' => 'Program Keluarga Harapan',
            'periode_bansos' => '2021-2022',
            'penerima_bansos' => 'Keluarga miskin',
            'kategori_bansos' => 'Biaya Hidup, Pelayanan Kesehatan, dan Kesejahteraan Sosial ',
            'barang_bansos' => 'Rp. 2.400.000 /tahun'
        ]);
        JenisBantuan::create([
            'nama_bansos' => 'BLT Dana Desa',
            'periode_bansos' => '2021-2022',
            'penerima_bansos' => 'Warga tidak Mampu',
            'kategori_bansos' => 'Biaya Hidup',
            'barang_bansos' => 'Rp. 600.000 /3 bulan'
        ]);
        JenisBantuan::create([
            'nama_bansos' => 'Jaminan Sosial Usia Lanjut',
            'periode_bansos' => '2021-2022',
            'penerima_bansos' => 'Warga usia 60th keatas',
            'kategori_bansos' => 'Biaya Hidup',
            'barang_bansos' => 'Rp. 300.000 /bulan'
        ]);
        Bantuan::create([
            'penduduk_id' => 7,
            'jenis_bantuan_id' => 1,
            'ket_bansos' => 'Belum Diterima'
        ]);
        Bantuan::create([
            'penduduk_id' => 4,
            'jenis_bantuan_id' => 2,
            'ket_bansos' => 'Belum Diterima'
        ]);
        Bantuan::create([
            'penduduk_id' => 2,
            'jenis_bantuan_id' => 3,
            'ket_bansos' => 'Belum Diterima'
        ]);
        Perangkat::create([
            'penduduk_id' => 6,
            'jabatan' => 'Kepala Desa',
            'study' => 'S2 Sistem Informasi',
        ]);
        Perangkat::create([
            'penduduk_id' => 9,
            'jabatan' => 'Wakil Kepala Desa',
            'study' => 'S1 Teknologi Informasi',
        ]);
        Perangkat::create([
            'penduduk_id' => 7,
            'jabatan' => 'Sekretaris Desa',
            'study' => 'S1 Managemen',
        ]);
        Perangkat::create([
            'penduduk_id' => 8,
            'jabatan' => 'Bendahara Desa',
            'study' => 'S1 Akuntansi',
        ]);
    }
}
