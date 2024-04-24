<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;
use App\Models\Type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        
        Brand::create(['nome' => '--']);
        Brand::create(['nome' => 'Acura']);
        Brand::create(['nome' => 'Alfa Romeo']);
        Brand::create(['nome' => 'AM General']);
        Brand::create(['nome' => 'American Motors Corporation']);
        Brand::create(['nome' => 'ASC Incorporated']);
        Brand::create(['nome' => 'Aston Martin']);
  

        Type::create(['brand_id' => 2, 'nome' => 'RDX']);
        Type::create(['brand_id' => 2, 'nome' => 'ILX']);
        Type::create(['brand_id' => 2, 'nome' => 'TL']);
        Type::create(['brand_id' => 2, 'nome' => 'TSX']);
        Type::create(['brand_id' => 2, 'nome' => 'NSX']);
        Type::create(['brand_id' => 2, 'nome' => 'TLX']);
        Type::create(['brand_id' => 2, 'nome' => 'Integra']);
        Type::create(['brand_id' => 2, 'nome' => 'Legend']);
        Type::create(['brand_id' => 2, 'nome' => 'RLX']);
        Type::create(['brand_id' => 2, 'nome' => 'MDX']);
        Type::create(['brand_id' => 2, 'nome' => 'CL']);
        Type::create(['brand_id' => 2, 'nome' => 'Vigor']);
        Type::create(['brand_id' => 2, 'nome' => 'ZDX']);
        Type::create(['brand_id' => 2, 'nome' => 'RL']);
        Type::create(['brand_id' => 2, 'nome' => 'SLX']);
        Type::create(['brand_id' => 2, 'nome' => 'RSX']);
        Type::create(['brand_id' => 3, 'nome' => 'Stelvio']);
    }
}
