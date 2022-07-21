<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'nama_perusahaan' => 'Heymart',
            'alamat' => 'Jl. Pataruman Jelat, Banjar',
            'telepon' => '081223171795',
            'logo' => 'logo.png',
            'kartu_member' => 'card.png',
            'diskon_member' => 10,
            'tipe_nota' => 0,
        ]);
    }
}
