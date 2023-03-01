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
                "nama_product" => "Printer-test",
                "image" => "canon.jpg",
                "spesifikasi" => "iniprinter",
                "harga" => "3500000",
                "kuantitas" => "2",
            ],
        ]);
    }
}
