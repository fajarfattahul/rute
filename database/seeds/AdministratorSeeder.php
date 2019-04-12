<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'          =>  'Admin',
            'name'              =>  'fatur',
            'tgl_lahir'         =>  '1998-08-18',
            'jk'                =>  'L',
            'jabatan'           =>  json_encode(["Admin"]),
            'email'             =>  'fatur@gmail.com',
            'password'          =>  Hash::make('501501501'),
            'remember_token'    =>  str_random(60),
        ]);

        $this->command->info("User Admin berhasil diinsert");
    }
}
