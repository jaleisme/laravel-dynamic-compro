<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog')->delete();
        
        \DB::table('blog')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => '1_1704494847.png',
                'title' => 'Pentingnya Quality Assurance dalam Pengembangan Perangkat Lunak',
            'description' => '<div>Pengembangan perangkat lunak adalah proses kompleks yang melibatkan berbagai tahap, mulai dari perencanaan hingga peluncuran produk akhir. Dalam setiap tahap tersebut, kualitas perangkat lunak menjadi faktor krusial yang mempengaruhi keberhasilan proyek. Di sinilah Quality Assurance (QA) memainkan peran pentingnya. QA bukan hanya sekadar langkah terakhir sebelum peluncuran, melainkan suatu pendekatan sistematis untuk memastikan bahwa setiap tahap pengembangan memenuhi standar kualitas tertentu. Berikut adalah beberapa alasan mengapa QA sangat penting dalam pengembangan perangkat lunak:</div><div><strong><br>1. Meningkatkan Kepuasan Pelanggan</strong></div><div>Kualitas perangkat lunak yang tinggi akan membawa dampak positif pada kepuasan pelanggan. Produk yang berfungsi dengan baik, bebas dari bug, dan responsif terhadap kebutuhan pengguna akan meningkatkan citra perusahaan dan membangun kepercayaan pelanggan.</div><div><strong><br>2. Mengurangi Biaya Perbaikan</strong></div><div>Jika bug atau masalah ditemukan setelah peluncuran produk, biaya untuk perbaikan dan pemeliharaan dapat meningkat secara signifikan. QA membantu mengidentifikasi dan memperbaiki masalah sejak awal, mengurangi risiko bug muncul di tahap lanjutan, dan pada akhirnya, menghemat biaya perbaikan.</div><div><strong><br>3. Menjamin Keamanan Sistem</strong></div><div>Keamanan perangkat lunak menjadi perhatian utama, terutama di tengah meningkatnya ancaman siber. QA memastikan bahwa sistem memiliki tingkat keamanan yang tinggi dengan melakukan uji penetrasi dan analisis keamanan secara menyeluruh.</div><div><strong><br>4. Meningkatkan Produktivitas Tim Pengembang</strong></div><div>QA membantu mengidentifikasi dan meminimalkan hambatan serta kendala selama proses pengembangan. Dengan demikian, tim pengembang dapat fokus pada peningkatan fitur dan fungsionalitas tanpa terganggu oleh bug atau masalah teknis lainnya.</div><div><strong><br>5. Menjaga Reputasi Perusahaan</strong></div><div>Ketika perangkat lunak yang diluncurkan memiliki kualitas yang buruk, reputasi perusahaan bisa tercoreng. QA membantu menjaga reputasi perusahaan dengan memastikan bahwa produk yang dihasilkan memiliki kualitas terbaik dan memenuhi ekspektasi pengguna.</div><div><strong><br>6. Memenuhi Standar dan Regulasi</strong></div><div>Berbagai industri memiliki standar dan regulasi tertentu yang harus dipenuhi. QA membantu memastikan bahwa perangkat lunak mematuhi semua standar dan regulasi yang berlaku, sehingga perusahaan tidak terkena sanksi atau masalah hukum.<br><br></div><div><strong><br>Kesimpulan</strong></div><div>Dengan adanya Quality Assurance, pengembangan perangkat lunak dapat dilakukan dengan lebih terstruktur dan terkontrol. Investasi dalam QA membawa manfaat jangka panjang, tidak hanya dalam hal kualitas produk, tetapi juga dalam meningkatkan kepercayaan pelanggan dan reputasi perusahaan. Oleh karena itu, memasukkan QA sebagai bagian integral dari siklus pengembangan perangkat lunak sangatlah penting.</div>',
                'created_at' => '2024-01-05 22:47:27',
                'updated_at' => '2024-01-05 22:47:27',
                'category_id' => 2,
            ),
        ));
        
        
    }
}