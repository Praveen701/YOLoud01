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
        $data->email='accounts@yoloud.com';
        $data->password=Hash::make('accounts@1516');
        $data->type=1;
        $data->profilestatus=0;
        $data->save();
    }
}
