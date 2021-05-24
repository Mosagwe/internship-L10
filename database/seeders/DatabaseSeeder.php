<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            QualificationSeeder::class,
            StationSeeder::class,
            DepartmentSeeder::class,
            UnitSeeder::class,
            BankSeeder::class,
            EmployeeSeeder::class,
            ContractSeeder::class,
        ]);
    }
}