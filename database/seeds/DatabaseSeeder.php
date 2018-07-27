<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $toTruncate = [
        'users',
        'pages',
        'page_codes',
        'page_contents',
	];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->toTruncate as $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }

        $this->call(UserTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(PageCodeTableSeeder::class);
        $this->call(PageContentTableSeeder::class);
    }
}
