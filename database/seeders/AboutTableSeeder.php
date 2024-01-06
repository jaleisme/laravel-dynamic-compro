<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about')->delete();
        
        \DB::table('about')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1_1704467813.png',
                'description' => '<div>CV Jauzza adalah sebuah startup yang berfokus pada pengembangan solusi teknologi inovatif untuk mempermudah dan meningkatkan efisiensi dalam berbagai aspek kehidupan sehari-hari. Dengan kombinasi keahlian dalam teknologi dan kreativitas, CV Jauzza berkomitmen untuk menciptakan produk dan layanan yang memberikan nilai tambah bagi penggunanya.</div>',
                'visi' => '<div>Visi CV Jauzza adalah menjadi pemimpin dalam memberikan solusi teknologi terdepan yang mendorong transformasi positif dalam berbagai sektor. Kami bercita-cita untuk menciptakan dunia yang lebih terkoneksi, efisien, dan inovatif melalui produk-produk unggulan kami.</div>',
                'misi' => '<ol><li><strong>Inovasi Berkelanjutan:</strong> Terus mendorong inovasi dalam pengembangan teknologi untuk menciptakan produk-produk yang relevan dan berdaya saing.</li><li><strong>Pemecahan Masalah:</strong> Menyediakan solusi praktis dan efektif untuk mengatasi tantangan nyata yang dihadapi oleh masyarakat dan bisnis.</li><li><strong>Kepuasan Pelanggan:</strong> Memastikan kepuasan pelanggan dengan menyediakan produk dan layanan yang berkualitas tinggi, handal, dan mudah digunakan.</li><li><strong>Keberlanjutan Lingkungan:</strong> Bertanggung jawab terhadap lingkungan dengan mengintegrasikan praktik bisnis yang ramah lingkungan dalam setiap aspek operasional.</li><li><strong>Kemitraan Strategis:</strong> Membangun kemitraan yang kuat dengan pelanggan, mitra bisnis, dan komunitas untuk mencapai pertumbuhan bersama.</li><li><strong>Pengembangan Sumber Daya Manusia:</strong> Memberdayakan tim dengan pengembangan keterampilan terus-menerus dan menciptakan lingkungan kerja yang mendukung inovasi dan kolaborasi.</li></ol><div><br></div>',
                'created_at' => NULL,
                'updated_at' => '2024-01-05 16:54:41',
            ),
        ));
        
        
    }
}