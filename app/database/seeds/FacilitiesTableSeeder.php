<?php

class FacilitiesTableSeeder extends Seeder {

  public function run()
  {
    $Facilities = [
        [ 
        	'name'				=> 'City Hall',
        	'address_street'	=> '55 Trinity Street',
        	'address_zip'		=> '30303',
        	'area'				=> '15000',
        	'cost'				=> '200',
        	'description'		=> 'This is the city hall of Atlanta',
        	'phone'				=> '5555555555',
        	'contact_name'		=> 'John Doe',
        	'email'				=> 'john@doe.com'
        ]
    ];

    DB::table('Facilities')->insert($Facilities);
  }

}