<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(AssetsStatusSeed::class);
        $this->call(PersonnelDuBngrcSeed::class);
        $this->call(RoleSeed::class);
        $this->call(TaskStatusSeed::class);
        $this->call(UserSeed::class);
        $this->call(UserActionSeed::class);

    }
}
