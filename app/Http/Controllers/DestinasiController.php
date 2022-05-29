<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinasis = Destinasi::all();
        return view('destinasi.destinasi', compact('destinasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinasi.create');
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
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|file|max:1024'
        ]);
        if($request->hasFile('image')){
            $validatedData['image'] = $request->file('image')->store('destinasi');
        }
        $validatedData['desc'] = Str::limit(strip_tags($request->desc),100);

        Destinasi::create($validatedData);
        return redirect('/destinasis')->with(['success','Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function show(Destinasi $destinasi)
    {
        return view('destinasi.show', compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinasi $destinasi)
    {
        return view('destinasi.edit', compact('destinasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|file|max:1024'
        ]);
            if($request->hasFile('image')){
                $validatedData['image'] = $request->file('image')->store('destinasi');
            }

            $validatedData['desc'] = Str::limit(strip_tags($request->desc),100);

            Destinasi::where('id', $destinasi->id)->update($validatedData);

            return redirect('/destinasis')->with(['success','Data berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinasi $destinasi)
    {
        Destinasi::destroy($destinasi->id);
        return redirect('/destinasis')->with(['success','Data telah dihapus']);
    }
}
