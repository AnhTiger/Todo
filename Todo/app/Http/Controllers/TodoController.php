<?php

namespace Modules\Todo\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function __construct() {
		$this->middleware('auth.admin');
		$this->middleware('permission:todo-index',  ['only' => ['index']]);
		$this->middleware('permission:todo-create', ['only' => ['create', 'store']]);
		$this->middleware('permission:todo-update', ['only' => ['edit', 'update']]);
		$this->middleware('permission:todo-delete', ['only' => ['destroy']]);
		$this->middleware('permission:todo-export', ['only' => ['index','export']]);
		$this->middleware('permission:todo-import', ['only' => ['index','import']]);
		$this->middleware('permission:todo-detail', ['only' => ['detail']]);
		$this->middleware('permission:todo-action', ['only' => ['action']]);
		$this->middleware('permission:todo-chart',  ['only' => ['chart']]);
	}
	public function index() {

		return view('todo::todo.index');
	}
	public function chart() {
		return view('todo::todo.chart');
	}
	/**
	 * Show the form for creating a new resource.
	 */
	public function create() {
		return view('todo::todo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request): RedirectResponse {
		//
	}

	/**
	 * Show the specified resource.
	 */
	public function show($id) {
		return view('todo::todo.show', compact('id'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id) {
		return view('todo::todo.edit', compact('id'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, $id): RedirectResponse {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id) {
		//
	}
}
