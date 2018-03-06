<?php

use Illuminate\Database\Seeder;

class PageTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('truncate table pages');
        factory(App\Page::class,20000)->create();
    }
}
