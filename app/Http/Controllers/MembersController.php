<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\member;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class MembersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$members = Member::all();
	//	return view('members.index')->withMembers($members);
		return $members;

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
				return view('members.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
 
	public function store(Request $request)
	{
		$this->validate($request, [
    		'firstName' => 'required',
			'lastName' => 'required',
			'phoneNumber' =>'required'
			]);
		 $input = $request->all();

    	Member::create($input);
		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
