<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'created_at'=>now(),
            'text' => 'All of the JavaScript dependencies required by your application can be found in the package.json file in the project\'s root directory. This file is similar to a composer.json file except it specifies JavaScript dependencies instead of PHP dependencies.'
        ]);
        DB::table('records')->insert([
            'created_at'=>now(),
            'text' => 'By default, the Laravel package.json file includes a few packages such as lodash and axios to help you get started building your JavaScript application. Feel free to add or remove from the package.json file as needed for your own application.'
        ]);
        DB::table('records')->insert([
            'created_at'=>now(),
            'text' => 'The app.js file will load the resources/js/bootstrap.js file which bootstraps and configures Vue, Axios, jQuery, and all other JavaScript dependencies. If you have additional JavaScript dependencies to configure, you may do so in this file.'
        ]);
    }
}
