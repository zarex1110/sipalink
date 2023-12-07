<?php

namespace App\Http\Controllers;

use App\Models\Sipalink;
use App\Models\Tag;
use Illuminate\Http\Request;

class DashboardLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'links' => Sipalink::where('created_by', auth()->user()->id)->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create',[
            'links' => Sipalink::orderBy('title')->get(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:Sipalinks',
            'link' => 'required|max:255|unique:Sipalinks',
            'tags_id' => 'required',
            'description' => 'required',
            'image' => 'null'
        ]);

        $validatedData['created_by'] = auth()->user()->id;
        $validatedData['hit_counter'] = 0;
        $validatedData['tags_id'] = implode(", ",array_keys($validatedData['tags_id']));

        Sipalink::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sipalink $sipalink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sipalink $sipalink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sipalink $sipalink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sipalink $sipalink)
    {
        //
    }
}
