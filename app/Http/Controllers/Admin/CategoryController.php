<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory =  Catagory::simplePaginate(5);

        return view('admin.category.manage', compact('catagory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required|string|unique:catagories',
            'status' => 'required|string',

        ]);

        try {
//            $category   =new Catagory();
//            $category->user_id = auth()->id();
//            $category->name = $request->name;
//            $category->slug = strtolower(str_replace(' ','-',$request->name));
//            $category->status = $request->status;
//            $category->save();
            Catagory::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'status' => $request->status
            ]);
            session()->flash('type','success');
            session()->flash('message','Category save successfully.');
        }catch (\Exception $e){
            session()->flash('type','danger');
            session()->flash('message', $e->getMessage());
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $singleCategory =  Catagory::select('name','slug','status')->find($id);
        return view('admin.category.view', compact('singleCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singleCategory =  Catagory::find($id);

        if ($singleCategory)
            return view('admin.category.edit', compact('singleCategory'));
        else
            return redirect()->back();


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:catagories,id,'.$id,
            'status' => 'required|string',
        ]);

        try {
            $category = Catagory::find($id);
            $category->user_id = auth()->id();
            $category->name = $request->name;
            $category->slug = strtolower(str_replace(' ','-',$request->name));
            $category->status = $request->status;
            $category->update();
            session()->flash('type','success');
            session()->flash('message','Category save successfully.');
        }catch (\Exception $e){
            session()->flash('type','danger');
            session()->flash('message', $e->getMessage());

        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $cattopic = Catagory::find($id);
            $cattopic->delete();
            session()->flash('type','success');
            session()->flash('message','Category delete successfully.');
        }catch (\Exception $e){
            session()->flash('type','danger');
            session()->flash('message','Failed');
        }


        return redirect()->back();
    }
}
