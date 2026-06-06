<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Recipe::truncate();
        Chef::truncate();
        Schema::enableForeignKeyConstraints();

        Chef::factory(10)->create()->each(function (Chef $chef): void {
            Recipe::factory(3)->create([
                'chef_id' => $chef->id,
            ]);
        });
    }
}
