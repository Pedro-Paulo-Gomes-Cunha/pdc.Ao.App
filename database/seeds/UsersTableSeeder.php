<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 'admin',
            'email'      => 'pedrogomesskeell@gmail.com',
            'type'       => 'admin',
            'password'   => Hash::make('123456'),
            'api_token'  => Str::random(80),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Dra. Adriana Galvão',
            'email'      => 'pedrogomesskeell3@gmail.com',
            'type'       => 'doctor',
            'image'      => '1.jpg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Dr. Manoel Corte Real',
            'email'      => 'pedrogomesskeell33@gmail.com',
            'type'       => 'doctor',
            'image'      => '2.jpg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Dra. Cecília Nascimento',
            'email'      => 'cecilianascimento@teste.com',
            'type'       => 'doctor',
            'image'      => '2.jpg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Dr. José Junqueira',
            'email'      => 'pedrogomesskeell2@gmail.com',
            'type'       => 'doctor',
            'image'      => '2.jpg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Dra. Maria Conceição',
            'email'      => 'mariaconceicao@teste.com',
            'type'       => 'doctor',
            'image'      => '1.jpg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Dr. Francisco Benício Cardoso',
            'email'      => 'franciscocardoso@teste.com',
            'type'       => 'doctor',
            'image'      => '2.jpg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name'       => 'Eduardo Nascimento',
            'email'      => 'pedrogomesskeell22@gmail.com',
            'type'       => 'patient',
            'image'      => 'F6fMQY.jpeg',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
