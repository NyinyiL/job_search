<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'Jhon Doe' ,
            'email' => 'jhon@gmail.com' ,
        ]) ;


        Listing::factory(10)->create([
            'user_id' => $user->id 
        ]) ;

        
        // Listing::create([
        //     'title' => "Laravel Senior Developer" ,
        //     'tags' => 'Laravel, JavasScript' ,
        //     'company' => 'Acme Corm' ,
        //     'location' => 'Yangon' ,
        //     'email' => 'acme@gmail.com' ,
        //     'website' => 'https://www.acme.com' ,
        //     'description' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum velit perferendis at. Iure aut ut recusandae perferendis delectus rem nulla soluta odio, autem veniam, id cum debitis, fugiat quidem quae! ' 
        // ]) ;

        // Listing::create([
        //     'title' => 'IOS Developer' ,
        //     'tags' => 'Python , Java' ,
        //     'company' => 'Down Cod' ,
        //     'location' => 'India' ,
        //     'email' => 'downcod@gmail.com' ,
        //     'website' => 'https://www.downcod.com' ,
        //     'description' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum velit perferendis at. Iure aut ut recusandae perferendis delectus rem nulla soluta odio, autem veniam, id cum debitis, fugiat quidem quae! '
        // ]) ;
    }
}
