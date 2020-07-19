<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'          => 'John Doe',
            'email'         => 'john@hey.com',
            'affiliate_tag' => 'john',
        ]);

        factory(User::class, 10)->create();
    }
}
