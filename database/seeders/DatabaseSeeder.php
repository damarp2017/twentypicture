<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::create([
            'name' => 'Damar Permadany',
            'email' => 'damarp2017@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Keribo',
            'email' => 'keribo@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        Contact::create([
            'whatsapp' => '6282329919955',
            'instagram' => 'twenty.picture',
            'email' => 'twentyicture@gmail.com',
            'address' => 'JL Sultan Hasanudin, RT 03 RW 02, Cabawan, Margadana, Cabawan, Tegal, Kota Tegal, Jawa Tengah 52147',
            'map_url' => 'https://www.google.com/maps/place/Twenty+picture/@-6.8812713,109.0913649,19z/data=!4m19!1m13!4m12!1m3!2m2!1d109.0914787!2d-6.881067!1m6!1m2!1s0x2e6fbb30910362a9:0x6cfba4551de1a2be!2sTwenty+picture,+Jl.+Brigjen.+Slamet+Riaydi+No.78,+Cabawan,+Kec.+Margadana,+Kota+Tegal,+Jawa+Tengah+52147!2m2!1d109.091482!2d-6.88104!3e2!3m4!1s0x2e6fbb30910362a9:0x6cfba4551de1a2be!8m2!3d-6.88104!4d109.091482?hl=en',
        ]);
    }
}
