<?php

namespace Modules\Showtime\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Repositories\Repository;
use Modules\Showtime\Models\Showtime;

class ShowtimeController extends Controller
{
    protected $model;

    public function __construct(Showtime $showtime)
    {
        // return $this->model = new Repository($showtime);
        return $this->model = new Repository($showtime);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('showtime::index');
        $shows = $this->model->with(['cinema', 'movie'])->get();
        return view('showtime::index', compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('showtime::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('showtime::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('showtime::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
