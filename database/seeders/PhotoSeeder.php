<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            [
                'title' => 'Hamparan Kebun Teh',
                'location' => 'Jawa Barat, Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project1.jpg',
                'category' => 'Perkebunan',
                'description' => 'Hamparan kebun teh hijau yang membentang di perbukitan dengan latar pegunungan dan cahaya matahari pagi.',
            ],
            [
                'title' => 'Danau di Kaki Pegunungan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project2.jpg',
                'category' => 'Danau',
                'description' => 'Danau yang jernih memantulkan pemandangan pegunungan dan langit senja yang indah.',
            ],
            [
                'title' => 'Cahaya Menembus Hutan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project3.jpg',
                'category' => 'Hutan',
                'description' => 'Sinar matahari menembus pepohonan tinggi, menerangi jalur hutan yang dipenuhi tumbuhan hijau.',
            ],
            [
                'title' => 'Gunung Berselimut Kabut',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project4.jpg',
                'category' => 'Pegunungan',
                'description' => 'Pemandangan gunung yang menjulang dengan kabut tipis dan cahaya matahari keemasan.',
            ],
            [
                'title' => 'Pantai Tropis saat Senja',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project5.jpg',
                'category' => 'Pantai',
                'description' => 'Pantai berpasir putih dengan air laut biru kehijauan dan langit senja yang hangat.',
            ],
            [
                'title' => 'Teluk Biru yang Memukau',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project6.jpg',
                'category' => 'Teluk',
                'description' => 'Teluk berair biru dengan tebing berbatu dan pepohonan hijau yang menghiasi pesisir.',
            ],
            [
                'title' => 'Tebing di Tepi Samudra',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project7.jpg',
                'category' => 'Tebing',
                'description' => 'Tebing hijau yang berbatasan dengan samudra luas, dihiasi ombak dan cahaya matahari senja.',
            ],
            [
                'title' => 'Sungai Jernih di Tengah Hutan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project8.jpg',
                'category' => 'Sungai',
                'description' => 'Aliran sungai jernih di antara bebatuan dan pepohonan yang menciptakan suasana alami.',
            ],
            [
                'title' => 'Lembah Hijau Berkabut',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project9.jpg',
                'category' => 'Lembah',
                'description' => 'Lembah luas dengan perbukitan hijau, aliran sungai, dan kabut tipis di kejauhan.',
            ],
            [
                'title' => 'Pesisir Karang saat Senja',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project10.jpg',
                'category' => 'Pantai',
                'description' => 'Bentang pesisir berbatu dengan ombak laut yang bergulung di bawah langit senja.',
            ],
            [
                'title' => 'Senja di Lembah Pegunungan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project11.jpg',
                'category' => 'Pegunungan',
                'description' => 'Cahaya senja menyinari deretan pegunungan dan lembah yang dipenuhi vegetasi alami.',
            ],
            [
                'title' => 'Air Terjun di Hutan Tropis',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project12.jpg',
                'category' => 'Air Terjun',
                'description' => 'Air terjun bertingkat yang mengalir ke kolam berwarna hijau toska, dikelilingi pepohonan rimbun.',
            ],
        ];

        foreach ($photos as $index => $data) {
            Photo::updateOrCreate(
                ['id' => $index + 1],
                $data
            );
        }
    }
}
