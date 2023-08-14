<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Currency;
use App\Models\EducationType;
use App\Models\VacancyRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ExperienceTypeSeeder::class,
            EducationTypeSeeder::class,
            CurrencySeeder::class,
            JobTypesSeeder::class,
            VacancyCategorySeeder::class,
            VacancyRoleSeeder::class,

        ]);
    }
}
