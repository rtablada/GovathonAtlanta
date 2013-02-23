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
            'email'             => 'john@doe.com'
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
            'email'             => 'jim@smith.com'
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
            'email'             => 'sue@jones.com'
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
            'email'             => 'bill@washington.com'
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
            'email'             => 'joe@coffee.com'
        ]

    ];

    DB::table('facilities')->insert($Facilities);
  }

}