<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function($user) {
            $user->subscriptions()->save(factory(App\Subscription::class)->make());
        });
    }
}
