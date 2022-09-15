<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"OPAC or Online Pharmacy And Consultancy is an online platform where users can buy different pharmacy stuffs and Post there issues as well. Doctors are assigned by the admin who are always active to provide prescription to the users according to their issues.",
            'short_des'=>"This is a short Description",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"Bolbo na",
            'email'=>"opac2022@gmail.com",
            'phone'=>"+8801620839***",
        );
        DB::table('settings')->insert($data);
    }
}
