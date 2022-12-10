<?php

namespace Database\Seeders;

use App\Models\DataDosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_dosen')->insert([
            'nama' => 'Syafiq',
            'nip' => '1234567890',
            'nidn'=> '1234567890',
            'tempat_lahir' => 'Jonggol',
            'tanggal_lahir' => '1999-12-12',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status' => 'Aktif',
            'alamat' => 'Jonggol',
            'email' => 'syafiq@gmail.com',
            'no_hp' => '081234567890',
        ]);
    }
}
