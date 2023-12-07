<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Post;

class TestController extends Controller
{
    private $columns = ['title', 'content'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (request('trashed') == 'withTrashed') {
            $test = Test::withTrashed()->paginate();
        } elseif (request('trashed') == 'onlyTrashed'){
            $test = Test::onlyTrashed()->paginate();
        }else{
            $test = Test::paginate();
        }
        return view('test/index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'show' => 'required|in:1,0',
            'status' => 'required|in:enable,disable',

        ], [], [
            'title' => 'The title',
            'content' => 'Content',
            'show' => 'show or hide',

        ]);
        Test::create($validated);
        return redirect('test');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = Test::find($id);
        return view('test/show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $test = Test::find($id);
        return view('test/edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'show' => 'required|in:1,0',
            'status' => 'required|in:enable,disable',
        ], [], [
            'title' => 'The Title',
            'content' => 'Content',
            'show' => 'show or hide',
            'status' => 'Status',
        ]);
        Test::where('id', $id)->update($validated);
        return redirect('test');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Test::where('id', $id)->delete();
        return redirect('test');
    }

    /**
     * Force elete the specified data.
     */
    public function forceDelete(string $id)
    {
        Test::where('id', $id)->forcedelete();
        return redirect('test');
    }

    /**
     * Restore the specified data.
     */
    public function restore(string $id)
    {
        Test::where('id', $id)->restore();
        return redirect('test');
    }
}
