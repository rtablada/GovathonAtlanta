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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$facility = Facility::find($id);
		$input = Input::get('')
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
		// var_dump($ret); die();
		return '<pre>' . json_encode($ret) . '</pre>';
	}

    /**
     * Find facilities within a given boundary
     *
     * @return Response
     */
    public function search_square($lat1,$lng1,$lat2,$lng2)
    {
            $facilities = DB::table('facilities')
                    ->where('lat','BETWEEN', DB::raw($lat1.' AND '.$lat2)
                    ->where('lng','BETWEEN', DB::raw($lng1.' AND '.$lng2)
                    ->get()->to;

            var_dump($facilities); die();
            return $facilities;
    }

}