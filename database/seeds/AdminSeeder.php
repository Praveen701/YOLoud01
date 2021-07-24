<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= new User;
        $data->name='Admin';
        $data->email='admin@admin.com';
        $data->password=Hash::make('7890poiu');
        $data->type=1;
        $data->status=1;
        $data->save();
    }
}
