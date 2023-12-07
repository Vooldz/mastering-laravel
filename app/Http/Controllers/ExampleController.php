<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;

class ExampleController extends Controller
{
    // private $columns = ['name', 'content'];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('trashed') == 'withTrashed') {
            $example = Example::withTrashed()->paginate();
        } elseif (request('trashed') == 'onlyTrashed'){
            $example = Example::onlyTrashed()->paginate();
        }else{
            $example = Example::paginate();
        }
        return view('example/index', compact('example'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('example/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'show' => 'required|in:0,1',
            'status' => 'required|in:enable,disable',
        ], [], [
            'title' => 'Title',
            'content' => 'Content',
            'show' => 'Show',
            'status' => 'Status',
        ]);
        Example::create($validated);
        return redirect('example');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $example = Example::find($id);
        return view('example/show', compact('example'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $example = Example::find($id);
        return view('example/edit', compact('example'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'show' => 'required|in:0,1',
            'status' => 'required|in:enable,disable',
        ], [], [
            'title' => 'Title',
            'content' => 'Content',
            'show' => 'Show',
            'status' => 'Status',
        ]);
        Example::where('id', $id)->update($validated);
        return redirect('example');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Example::where('id', $id)->delete();
        return redirect('example');
    }

    /**
     * Restore the specified data
     */
    public function restore(string $id)
    {
        Example::where('id', $id)->restore();
        return redirect('example');
    }

    /**
     * Force delete the specified data
     */
    public function forceDelete(string $id)
    {
        Example::where('id', $id)->forceDelete();
        return redirect('example');
    }

}
