<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sipalink;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Zaky Imadudin Salam',
            'username' => 'zakyimad',
            'email' => 'zakyimad@bps.go.id',
            'nip' => '199910112023021001',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'fullname' => 'Easbi Ikhsan',
            'username' => 'easbi',
            'email' => 'easbi@bps.go.id',
            'nip' => '199610112023021002',
            'password' => bcrypt('admin')
        ]);

        Tag::create([
            'title' => 'BPS',
            'slug' => 'bps',
            'description' => 'Berisi tentang link yang digunakan oleh IPDS BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Bagian Umum',
            'slug' => 'bagian-umum',
            'description' => 'Berisi tentang link yang digunakan oleh Bagian Umum BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Pengolahan',
            'slug' => 'pengolahan',
            'description' => 'Berisi tentang link yang digunakan oleh IPDS BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Sosial',
            'slug' => 'sosial',
            'description' => 'Berisi tentang link yang digunakan oleh IPDS BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Produksi',
            'slug' => 'produksi',
            'description' => 'Berisi tentang link yang digunakan oleh Produksi BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Nerwilis',
            'slug' => 'nerwilis',
            'description' => 'Berisi tentang link yang digunakan oleh Nerwilis BPS Kota Padang Panjang',
        ]);

        Tag::create([
            'title' => 'Distribusi',
            'slug' => 'distribusi',
            'description' => 'Berisi tentang link yang digunakan oleh Distribusi BPS Kota Padang Panjang',
        ]);

        Sipalink::create([
            'title' => 'KipApp',
            'description' => 'Aplikasi penilaian Kinerja Pegawai',
            'link' => 'https://webapps.bps.go.id/kipapp/',
            'tags_id' => '1',
            'created_by' => '1',
            'hit_counter' => 120,
            'vpn' => true
        ]);

        Sipalink::create([
            'title' => 'Simpeg BPS',
            'description' => 'Aplikasi penilaian Kepegawaian',
            'link' => 'https://simpeg.bps.go.id/',
            'tags_id' => '1',
            'created_by' => '1',
            'hit_counter' => 100,
            'vpn' => true
        ]);

        Sipalink::factory(50)->create();
    }
}
