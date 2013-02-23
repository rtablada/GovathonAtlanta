<?php

class FacilitiesTableSeeder extends Seeder {

  public function run()
  {
    $Facilities = [
        
    ];

    DB::table('Facilities')->insert($Facilities);
  }

}