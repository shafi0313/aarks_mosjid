<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting(['app_name'=> 'Al Khalim Mosjid Malaga'])->save();
        Setting(['app_favicon'=> 'uploads/images/icon/favicon.png'])->save();
        Setting(['app_logo'=> 'uploads/images/icon/logo.jpg'])->save();
        Setting(['app_url'=> ''])->save();
        Setting(['app_description'=> ''])->save();
        Setting(['app_keyword'=> 'Al Khalim Mosjid Malaga'])->save();

        Setting(['banner_text'=> 'Al Khalim Mosjid Malaga'])->save();
        Setting(['banner_image'=> 'Al Khalim Mosjid Malaga'])->save();

        Setting(['about_text'=> 'Al Khalim Mosjid Malaga'])->save();
        Setting(['about_image'=> 'Al Khalim Mosjid Malaga'])->save();
    }
}
