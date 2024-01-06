<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlasanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alasan')->delete();
        
        \DB::table('alasan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1_1704436559.png',
                'title' => 'Solusi Tepat untuk Bisnis Anda',
                'description' => 'Tim ahli kami memiliki dedikasi untuk memberikan hasil terbaik dengan memastikan keamanan data yang tak tertandingi, layanan pemeliharaan berkala, dan dukungan 24/7 untuk menjawab setiap tantangan yang muncul. Kami juga menawarkan analisis data mendalam untuk mendukung pengambilan keputusan strategis yang lebih cerdas. Memilih [Nama Software House] berarti memilih pengalaman, keahlian, dan solusi yang terbukti membawa kesuksesan. Untuk Anda, kami menyediakan tawaran istimewa berupa [diskon khusus/paket lengkap/fitur tambahan] dan konsultasi gratis. Jangan lewatkan peluang untuk memajukan bisnis Anda! Hubungi kami hari ini di [Nomor Telepon/Alamat Email] dan temukan bagaimana [Nama Software House] dapat membawa inovasi ke bisnis Anda.',
                'is_active' => 1,
                'created_at' => '2024-01-05 06:35:59',
                'updated_at' => '2024-01-05 06:36:32',
            ),
        ));
        
        
    }
}