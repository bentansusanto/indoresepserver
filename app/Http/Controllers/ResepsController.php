<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        // $request->validate([
        //     'name' => 'required',
        //     'desc' => 'required',
        //     'image' => 'required|max:1024'
        // ]);
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|file|max:1024'
        ]);
        if($request->hasFile('image')){
            $validatedData['image'] = $request->file('image')->store('produk');
        }
        // $validatedData['desc'] = Str::limit(($request->desc),100);

        Resep::create($validatedData);
        return redirect('/reseps')->with(['berhasil','Data berhasil ditambahkan']);
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
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|file|max:1024'
        ]);
            if($request->hasFile('image')){
                $validatedData['image'] = $request->file('image')->store('produk');
            }

            // $validatedData['desc'] = Str::limit(($request->desc),100);

            Resep::where('id', $resep->id)->update($validatedData);

            return redirect('/reseps')->with(['berhasil','Data berhasil diupdate']);
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
        return redirect('/reseps')->with(['berhasil','Data telah dihapus']);

    }
}
