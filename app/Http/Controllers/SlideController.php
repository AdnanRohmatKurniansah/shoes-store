<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.slides.index', [
            'slides' => Slide::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'imageName' => 'required|max:255',
        ]);  
     
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('slide-images');
        } // jika tdk ada maka gunakan image lama

        Slide::create($validatedData);
        
        return redirect('/dashboard/slides')->with('success', 'New slide has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('dashboard.slides.edit', [
            'slide' => $slide
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        $validatedData = $request->validate([
            'imageName' => 'required|max:255'
        ]);
        
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('slide-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('slide-images');
        } 

        Slide::where('id', $slide->id)
             ->update($validatedData);
        
        return redirect('/dashboard/slides')->with('success', 'Slide has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        if ($slide->image) {
            Storage::delete($slide->image);
        }
        
        Slide::destroy($slide->id);
        return redirect('/dashboard/slides')->with('success', 'Slide has been deleted!');
    }
}