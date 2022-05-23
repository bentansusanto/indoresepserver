<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reseps = Resep::all();
        return view('resep', compact('reseps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createresep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|max:1024'
        ]);
        $resep = Resep::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('produk', $request->file('image')->getClientOriginalName());
            $resep->image = $request->file('image')->getClientOriginalName();
            $resep->save();
        }
        return redirect('/reseps')->with(['success','Data telah ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function show(Resep $resep)
    {
        return view('showresep', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function edit(Resep $resep)
    {
        return view('editresep', compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resep $resep)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|max:1024'
        ]);
            Resep::where('id', $resep->id)
                  ->update(['name' => $request->name,
                            'desc' => $request->desc,
                            'image' => $request->image,
                        ]);

                 if($request->hasFile('image')){
                        $request->file('image')->move('produk', $request->file('image')->getClientOriginalName());
                        $resep->image = $request->file('image')->getClientOriginalName();
                        $resep->save();
                     }
                     
            return redirect('/reseps')->with(['success','Data telah ditambahkan']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resep $resep)
    {
        Resep::destroy($resep->id);
        return redirect('/reseps')->with(['success','Data telah ditambahkan']);

    }
}
