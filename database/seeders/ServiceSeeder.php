<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['title' => 'Steam Ironing', 'description' => 'Crisp and wrinkle-free finishing for your daily wear.', 'icon' => 'iron'],
            ['title' => 'Blanket Washing', 'description' => 'Deep cleaning for heavy blankets and comforters.', 'icon' => 'blanket'],
            ['title' => 'Shoe Cleaning', 'description' => 'Premium care for your sneakers, leather shoes, and more.', 'icon' => 'shoe'],
            ['title' => 'Bag & Toys Cleaning', 'description' => 'Safe and effective cleaning for bags and stuffed toys.', 'icon' => 'bag'],
            ['title' => 'Curtain Cleaning', 'description' => 'Dust and stain removal to refresh your home interiors.', 'icon' => 'curtain'],
            ['title' => 'Carpet Cleaning', 'description' => 'Deep extraction cleaning for carpets and rugs.', 'icon' => 'carpet'],
            ['title' => 'Suits & Blazers', 'description' => 'Professional dry cleaning to maintain fabric quality and fit.', 'icon' => 'suit'],
            ['title' => 'Costumes & Sarees', 'description' => 'Delicate care for expensive and intricate fabrics.', 'icon' => 'saree'],
            ['title' => 'Stain Removing', 'description' => 'Expert stain removal techniques for stubborn marks.', 'icon' => 'stain'],
        ];

        DB::table('services')->insert($services);
    }
}
