<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Hamparan Kebun Teh puncak',
                'location' => 'Jawa Barat, Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project1.jpg',
                'category' => 'Perkebunan',
                'description' => 'Hamparan kebun teh hijau yang membentang di perbukitan dengan latar pegunungan dan cahaya matahari pagi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Danau di Kaki Pegunungan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project2.jpg',
                'category' => 'Danau',
                'description' => 'Danau yang jernih memantulkan pemandangan pegunungan dan langit senja yang indah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cahaya Menembus Hutan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project3.jpg',
                'category' => 'Hutan',
                'description' => 'Sinar matahari menembus pepohonan tinggi, menerangi jalur hutan yang dipenuhi tumbuhan hijau.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gunung Berselimut Kabut',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project4.jpg',
                'category' => 'Pegunungan',
                'description' => 'Pemandangan gunung yang menjulang dengan kabut tipis dan cahaya matahari keemasan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pantai Tropis saat Senja',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project5.jpg',
                'category' => 'Pantai',
                'description' => 'Pantai berpasir putih dengan air laut biru kehijauan dan langit senja yang hangat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Teluk Biru yang Memukau',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project6.jpg',
                'category' => 'Teluk',
                'description' => 'Teluk berair biru dengan tebing berbatu dan pepohonan hijau yang menghiasi pesisir.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tebing di Tepi Samudra',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project7.jpg',
                'category' => 'Tebing',
                'description' => 'Tebing hijau yang berbatasan dengan samudra luas, dihiasi ombak dan cahaya matahari senja.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sungai Jernih di Tengah Hutan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project8.jpg',
                'category' => 'Sungai',
                'description' => 'Aliran sungai jernih di antara bebatuan dan pepohonan yang menciptakan suasana alami.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lembah Hijau Berkabut',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project9.jpg',
                'category' => 'Lembah',
                'description' => 'Lembah luas dengan perbukitan hijau, aliran sungai, dan kabut tipis di kejauhan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pesisir Karang saat Senja',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project10.jpg',
                'category' => 'Pantai',
                'description' => 'Bentang pesisir berbatu dengan ombak laut yang bergulung di bawah langit senja.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Senja di Lembah Pegunungan',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project11.jpg',
                'category' => 'Pegunungan',
                'description' => 'Cahaya senja menyinari deretan pegunungan dan lembah yang dipenuhi vegetasi alami.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Air Terjun di Hutan Tropis',
                'location' => 'Indonesia',
                'photographer' => 'Reyy Gallery',
                'image' => 'project12.jpg',
                'category' => 'Air Terjun',
                'description' => 'Air terjun bertingkat yang mengalir ke kolam berwarna hijau toska, dikelilingi pepohonan rimbun.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}