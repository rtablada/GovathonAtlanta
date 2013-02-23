<?php

class AmenitiesTableSeeder extends Seeder {

  public function run()
  {
    $Amenities = [
        
    ];

    DB::table('Amenities')->insert($Amenities);
  }

}