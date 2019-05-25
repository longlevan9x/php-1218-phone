<?php

use Illuminate\Database\Seeder;

class KindPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\Models\KindPhone;
        $model->name = "IOS";
        $model->active = 1;
        $model->save();

        $model = new \App\Models\KindPhone;
        $model->name = "Android";
        $model->active = 1;
        $model->save();
    }
}
