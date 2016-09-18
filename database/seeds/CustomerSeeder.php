<?php

use Illuminate\Database\Seeder;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name'=>'jie huang',
            'phoneNo'=>'042267635',
            'address'=>'4 dalvenn',
            'creditCard'=>'044444444444'
        ]);
    }
}
