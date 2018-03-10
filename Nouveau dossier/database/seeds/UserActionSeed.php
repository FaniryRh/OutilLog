<?php

use Illuminate\Database\Seeder;

class UserActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'assets_statuses', 'action_id' => 1,],
            ['id' => 2, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'assets_statuses', 'action_id' => 2,],
            ['id' => 3, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'assets_statuses', 'action_id' => 3,],
            ['id' => 4, 'user_id' => 1, 'action' => 'updated', 'action_model' => 'assets_statuses', 'action_id' => 4,],
            ['id' => 5, 'user_id' => 1, 'action' => 'created', 'action_model' => 'assets_categories', 'action_id' => 1,],
            ['id' => 6, 'user_id' => 1, 'action' => 'created', 'action_model' => 'assets_locations', 'action_id' => 1,],
            ['id' => 7, 'user_id' => 1, 'action' => 'created', 'action_model' => 'personnel_du_bngrcs', 'action_id' => 1,],
            ['id' => 8, 'user_id' => 1, 'action' => 'created', 'action_model' => 'assets', 'action_id' => 1,],
            ['id' => 9, 'user_id' => 1, 'action' => 'created', 'action_model' => 'roles', 'action_id' => 4,],
            ['id' => 10, 'user_id' => 1, 'action' => 'created', 'action_model' => 'users', 'action_id' => 2,],

        ];

        foreach ($items as $item) {
            \App\UserAction::create($item);
        }
    }
}
