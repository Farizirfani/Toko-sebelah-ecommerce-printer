<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                "nama_product" => "cihuyyPrinter",
                "image" => "",
                "spesifikasi" => "iniprinter",
                "harga" => "5000000000",
                "kuantitas" => "2",
            ],
            [
                "nama_product" => "cihuyyPrinter",
                "image" => "foto.jpg",
                "spesifikasi" => "iniprinter",
                "harga" => "5000000000",
                "kuantitas" => "2",
            ],
        ]);
    }
}
