<?php

use Faker\Generator as Faker;

$factory->define(App\Subscription::class, function (Faker $faker) {
    return [
        'url' => 'http://adventurezone.libsyn.com/rss',
    ];
});
