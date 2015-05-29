<?php

class BycyclesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /bycycles
	 *
	 * @return Response
	 */
	public function index()
	{
		return Bycycle::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bycycles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bycycles
	 *
	 * @return Response
	 */
	public function store()
	{
		$bycycle = new Bycycle;
        if($bycycle->create(Request::all())) {
          return array('status' => 200);
        } else {
          return array('status' => 500);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /bycycles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if($bycycle = Bycycle::find($id)) {
			return $bycycle;
		} else {
			return ['error' => 'data not found', 'status' => '404'];
   		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /bycycles/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /bycycles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if($bycycle = Bycycle::find($id)) {
        	if($bycycle->update(Request::all())) {
				return array('status' => 200);
			} else{
				return array('status' => 500);
			}
		} else {
			return array('status' => 400);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /bycycles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if($bycycle = Bycycle::find($id)) {
            if($bycycle->delete()) {
                return array('status' => 200);
            } else {
                return array('status' => 500);
            }
        } else {
        	return array('status' => 400);
        }
	}

}