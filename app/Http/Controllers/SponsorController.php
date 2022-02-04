<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination  = 5;
        // $sponsors    = Sponsor::when($request->search, function ($query) use ($request) {
        //     $query
        //     ->where('name', 'jenis','kategori', "%{$request->search}%");
        // })->orderBy('created_at', 'desc')->paginate($pagination);

        // $sponsors->appends($request->only('search'));

        $data['sponsors'] = DB::table('sponsors')
            ->where(DB::raw('lower(name)'), 'like', '%' . strtolower(request()->search) . '%')
            ->OrWhere(DB::raw('lower(jenis)'), 'like', '%' . strtolower(request()->search) . '%')
            ->OrWhere(DB::raw('lower(kategori)'), 'like', '%' . strtolower(request()->search) . '%')
            ->orderBy('id', 'ASC')
            ->paginate(10);
        return view('sponsors.index', $data);

        // return view('sponsors.index', [
        //     'title'    => 'Sponsor',
        //     'sponsors' => $sponsors,
        // ])->with('i', ($request->input('page', 1) - 1) * $pagination);
        // $sponsors = Sponsor::latest()->paginate(5);
    
        // return view('sponsors.index',compact('sponsors'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sponsors.create');
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
            'jenis' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        // $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'sponsor/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Sponsor::create([
            'name' => $request->name,
            'jenis' => $request->jenis,
            'kategori' => $request->kategori,
        ]);
     
        return redirect()->route('sponsors.index')
                        ->with('success','Sponsor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        return view('sponsors.show',compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        return view('sponsors.edit',compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $request->validate([
            'name' => 'required',
            'jenis' => 'required',
            'kategori' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('sponsor')) {
            $destinationPath = 'sponsor/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['sponsor'] = "$profileImage";
        }else{
            unset($input['sponsor']);
        }
        
        // $sponsor = Sponsor::findOrFail($id);
        $sponsor->update($input);
    
        return redirect()->route('sponsors.index')
                        ->with('success','Sponsor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();
     
        return redirect()->route('sponsors.index')
                        ->with('success','sponsor deleted successfully');
    }
}
