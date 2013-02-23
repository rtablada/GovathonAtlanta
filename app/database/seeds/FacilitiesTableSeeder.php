<?php

class FacilitiesTableSeeder extends Seeder {

  public function run()
  {
    $Facilities = [
        [ 
            'name'              => 'City Hall',
            'address_street'    => '55 Trinity Street',
            'address_zip'       => '30303',
            'area'              => '15000',
            'cost'              => '200',
            'description'       => 'This is the city hall of Atlanta',
            'phone'             => '5555555555',
            'contact_name'      => 'John Doe',
            'email'             => 'john@doe.com',
            'latitude'               => '33.74895280',
            'longitude'               => '-84.39049340'
        ],
        [ 
            'name'              => 'Trinity Church',
            'address_street'    => '265 Washington Street',
            'address_zip'       => '30303',
            'area'              => '5000',
            'cost'              => '520',
            'description'       => 'This is Trinity United Methodist Church',
            'phone'             => '3333333333',
            'contact_name'      => 'Jim Smith',
            'email'             => 'jim@smith.com',
            'latitude'               => '33.74253220',
            'lng'               => '-84.39047680'
        ],
        [ 
            'name'              => 'Hypepotamus',
            'address_street'    => '817 W Peachtree Street NW',
            'address_zip'       => '30308',
            'area'              => '200',
            'cost'              => '20000',
            'description'       => 'This is Hypepotamus',
            'phone'             => '1111111111',
            'contact_name'      => 'Sue Jones',
            'email'             => 'sue@jones.com',
            'latitude'               => '33.77829538029150',
            'lng'               => '-84.38579221970851'
        ],
        [ 
            'name'              => 'The Tabernacle',
            'address_street'    => '152 Luckie Street NW',
            'address_zip'       => '30303',
            'area'              => '150000',
            'cost'              => '10',
            'description'       => 'This is the Tabernacle',
            'phone'             => '4444444444',
            'contact_name'      => 'Bill Washington',
            'email'             => 'bill@washington.com',
            'latitude'               => '33.75892730',
            'lng'               => '-84.39144250'           
        ],
        [ 
            'name'              => 'Starbucks',
            'address_street'    => '21 14th Sreet NE',
            'address_zip'       => '30309',
            'area'              => '1700',
            'cost'              => '2200',
            'description'       => 'This is the coffee place',
            'phone'             => '8888888888',
            'contact_name'      => 'John Coffee',
            'email'             => 'joe@coffee.com',
            'latitude'               => '33.78802163029150',
            'lng'               => '-84.38610101970849'
        ]
    ];

    DB::table('facilities')->insert($Facilities);
  }

}