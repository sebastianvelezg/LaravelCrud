<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;

class SneakerController extends Controller
{
    public function index()
    {
        $sneakers = Sneaker::all();
        return view ('sneakers.index')->with('sneakers', $sneakers);
    }

    public function create()
    {
        return view('sneakers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'colorway' => 'required|max:255',
            'brand' => 'required|max:255',
            'description' => 'required:max:6000',
            'releasedate' => 'required|max:255',
            'retailprice' => 'required',
            'price' => 'required',

        ]);
        $show = Sneaker::create($validatedData);
        return redirect('sneakers')->with('flash_message', 'Sneaker Addedd!'); 
    }

    public function show($id)
    {
        $sneaker = Sneaker::find($id);
        return view('sneakers.show')->with('sneakers', $sneaker);
    }

    public function edit($id)
    {
        $sneaker = Sneaker::find($id);
        return view('sneakers.edit')->with('sneakers', $sneaker);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'colorway' => 'required|max:255',
            'brand' => 'required|max:255',
            'description' => 'required:max:6000',
            'releasedate' => 'required|max:255',
            'retailprice' => 'required',
            'price' => 'required',
        ]);
        Sneaker::whereId($id)->update($validatedData);
        return redirect('sneakers')->with('flash_message', 'student Updated!');  
    }

    public function destroy($id)
    {
        Sneaker::destroy($id);
        return redirect('sneakers')->with('flash_message', 'Sneaker deleted!');  
    }
}
