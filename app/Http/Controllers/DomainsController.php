<?php namespace App\Http\Controllers;


use App\Http\Requests\DomainRequest;
use App\Models\Domain;

class DomainsController extends Controller {

    /**
     * @var Request
     */
/*
    protected $request;

    function __construct(DomainRequest $req)

    {
        $this->request = $req;
    }
*/
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$domains = Domain::paginate(\Config::get('constants.rowsPerPage'));
        return view('admin.domains.index', compact('domains'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.domains.create');
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
        return \Redirect::route($route);
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
