<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        \App\Model\Usuario::create([
            'login' => 'test',
            'senha' => md5('test'),
            'email' => 'email',
            'active' => true
        ]);
    }
}
