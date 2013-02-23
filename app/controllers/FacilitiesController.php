<?php

class FacilitiesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return JSON array of facilities
	 */
	public function index()
	{
		$input = Input::all();
		if ( isset($input['zip']) or isset($input['lat1']) or isset($input['lat']) )
			return $this->router($input);
		return Facility::all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$facility = new Facility();
		$input = Input::json();

		$facility->name 			= $input['name'];
		$facility->address_street 	= $input['address_street'];
		$facility->address_zip 		= $input['address_zip'];
		$facility->area 			= $input['area'];
		$facility->cost 			= $input['cost'];
		$facility->description 		= $input['description'];
		$facility->phone 			= $input['phone'];
		$facility->contact_name 	= $input['contact_name'];
		$facility->email 			= $input['email'];
		return $facility->updateGeocode();
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$facility = Facility::find($id);
		if ( $facility )
			return Facility::find($id);
		else
			return Redirect::action('FacilitiesController@index');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$facility = Facility::find($id);
		$input = Input::json();

		$facility->name 			= $input['name'];
		$facility->address_street 	= $input['address_street'];
		$facility->address_zip 		= $input['address_zip'];
		$facility->area 			= $input['area'];
		$facility->cost 			= $input['cost'];
		$facility->description 		= $input['description'];
		$facility->phone 			= $input['phone'];
		$facility->contact_name 	= $input['contact_name'];
		$facility->email 			= $input['email'];
		return $facility->updateGeocode();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function router($input)
	{
		if( isset($input['zip']) ) {
			return $this->search_by_zip($input['zip']);
		}
		else if( isset($input['lat1']) )
			return $this->search_square($input['lat1'], $input['lng1'], $input['lat2'], $input['lng2']);
	}

	public function search_by_zip($zip)
	{
		$ret = array();

		foreach ($facilities = Facility::all() as $indfac)
		{
			if ($indfac->address_zip == $zip)
				$ret[] = $indfac->toArray();
		}

		return json_encode($ret);
	}

    /**
     * Find facilities within a given boundary
     *
     * @return Response
     */
    public function search_square($lat1,$lng1,$lat2,$lng2)
    {
    	$facilities = Facility::all();
    	$ret = array();

    	foreach ($facilities as $facility) {
    		if ( ( $facility->latitude > $lat1 AND $facility->latitude < $lat2 ) OR ( $facility->latitude < $lat1 AND $facility->latitude > $lat2 ) )
    		{
    			if ( ( $facility->longitude > $lng1 AND $facility->longitude < $lng2 ) OR ( $facility->longitude < $lng1 AND $facility->longitude > $lng2 ) )
    			{
    				$ret[] = $facility->toArray();
    			}
    		}
    	}

        return json_encode($ret);
    }

}