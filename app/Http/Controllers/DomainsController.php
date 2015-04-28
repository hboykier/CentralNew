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
        $domain = new Domain();
        return view('admin.domains.create', compact ('domain'));
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
        return $this->edit($id);
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
        return view('admin.domains.create', compact ('domain'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(DomainRequest $request)
	{
        $domain = Domain::findOrFail($request->id);
        $domain->fill($request->all());
        $domain->save();
        return \Redirect::route('admin.domains.index')->withSuccess('Se actualizó el dominio ' . $domain->code);
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
        return \Redirect::route('admin.domains.index')->withSuccess('Se eliminó el dominio ' . $domain->code);
    }

}
