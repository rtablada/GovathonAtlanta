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
		//
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
		$
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
			return $this->search_by_zip( );
		}
		else if( isset($input['lat1']) )
			return $this->search_square($input['lat1'], $input['lng1'], $input['lat2'], $input['lng2']);
	}

}