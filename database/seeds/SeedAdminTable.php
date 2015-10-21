<?php

use App\Admin;
use Illuminate\Database\Seeder;

class SeedAdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->delete();

        $admins = [
            [
               'adminid'=>123456,
               'adminlname'=>'Badar',
               'adminfname'=>'Jonadene',
               'adminmname'=>'Alde',
               'adminemail'=>'nadenebadar@yahoo.com',
               'adminpass'=>'40bd001563085fc35165329ea1ff5c5ecbdbbeef',
               'adminaddress'=>'Cebu City',
               'admingender'=>'Female',
               'adminnumber'=>'09469147354'
            ]
        ];

        Admin::insert($admins);
    }
}
