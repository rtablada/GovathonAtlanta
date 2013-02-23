<?php

class Facility extends Eloquent {
	public function updateGeocode()	{
		$geocode = $this->getGeocode($this->address_street);
		$this->latitude = $geocode['lat'];
		$this->longitude = $geocode['lng'];
		return $this->save();
	}

	
}