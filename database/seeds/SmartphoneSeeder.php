<?php

use App\Smartphone;    
use Illuminate\Database\Seeder;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Smartphone::class, 10) -> create();
    }
}
