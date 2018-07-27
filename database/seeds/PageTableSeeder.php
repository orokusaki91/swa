<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new Page;
        $page->name = 'Home';
        $page->slug = 'home';
        $page->has_nav = 1;
        $page->save();

        $page = new Page;
        $page->name = 'Über uns';
        $page->slug = 'about_us';
        $page->has_nav = 1;
        $page->save();

        $page = new Page;
        $page->name = 'Dienstleistungen';
        $page->slug = 'services';
        $page->has_nav = 1;
        $page->save();

        $page = new Page;
        $page->name = 'Bewachung';
        $page->slug = 'guarding';
        $page->save();

        $page = new Page;
        $page->name = 'Ordnung';
        $page->slug = 'order';
        $page->save();

        $page = new Page;
        $page->name = 'Schutz';
        $page->slug = 'protection';
        $page->save();

        $page = new Page;
        $page->name = 'Anlass';
        $page->slug = 'ocassion';
        $page->save();

        $page = new Page;
        $page->name = 'Verkehr';
        $page->slug = 'traffic';
        $page->save();

        $page = new Page;
        $page->name = 'Referenzen';
        $page->slug = 'references';
        $page->has_nav = 1;
        $page->save();

        $page = new Page;
        $page->name = 'Partner';
        $page->slug = 'partner';
        $page->has_nav = 1;
        $page->save();

        $page = new Page;
        $page->name = 'Jobs';
        $page->slug = 'jobs';
        $page->has_nav = 1;
        $page->save();

        $page = new Page;
        $page->name = 'Contact';
        $page->slug = 'contact';
        $page->has_nav = 1;
        $page->save();
    }
}
