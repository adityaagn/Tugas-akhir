<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['id'=>'1','name'=>'Aditya Gunawan','email'=>'aditya@gmail.com','password'=>'$2y$10$VA41YcPrfRCgyveJslxuD.XiF/HWAjBRj16XGyqTSc1T7GGyF61g.','country_id'=>NULL,'gender'=>NULL,'address'=>NULL,'website'=>NULL,'phone'=>NULL,'photo'=>NULL,'user_type'=>'admin','active_status'=>'1','remember_token'=>'j097uqZdP1eC9yvRwI8XJJ4TqYvesCuwXxVTr1GSayHJCLuoAti6MXMDVoyP','created_at'=>'2018-04-24 12:23:01','updated_at'=>'2018-04-24 12:23:02'],
        ]);
        	
    }
}
