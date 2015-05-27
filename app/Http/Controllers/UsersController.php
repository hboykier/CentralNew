<?php namespace App\Http\Controllers;


use App\Library\Helpers\MyRouteHelper;
use App\Http\Requests\DomainRequest;
use App\Models\User;

class UsersController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(\Config::get('constants.rowsPerPage'));
        return view('admin.users.list', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $domain = new Domain();
        $action = 'create';
        return view('admin.domains.edit', compact ('domain', 'action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DomainRequest $request)
	{
        $domain = new Domain($request->all());
        $domain->save();
        $route=\Input::get('save')!=null ? 'domains.index' : 'domains.create';
        return \Redirect::route($route)->withSuccess('Se creó el dominio ' . $domain->code);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $domain = Domain::findOrFail ($id);
        $action = 'edit';
        return view('admin.domains.edit', compact ('domain', 'action'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(DomainRequest $request, $id)
	{
        $domain = Domain::findOrFail($id);
        $domain->fill($request->all());
        $domain->save();
        return \Redirect::route('domains.index')->withSuccess('Se actualizó el dominio ' . $domain->code);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $domain = Domain::findOrFail($id);
        $domain->delete();
        return \Redirect::route('domains.index')->withSuccess('Se eliminó el dominio ' . $domain->code);
    }

}
