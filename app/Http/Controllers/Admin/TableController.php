<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\TableStoreRequest;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables= Table::all();
        return view ('admin.tables.index',compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tables.create');
    }

 
    public function store(TableStoreRequest $request)
    {
        Table::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
        ]);
        return to_route('admin.tables.index')->with('success','Table created Successfully');;
    }
 
    public function show($id)
    {
        //
    }

 
    public function edit(Table $table)
    {
        return view('admin.tables.edit',compact('table'));
    }

 
    public function update(TableStoreRequest $request, Table $table)
    {
       $table->update($request->validated());
       return to_route('admin.tables.index')->with('success','Table Updated Successfully');
    }

     
    public function destroy(Table $table)
    {
        $table->delete();
        $table->reservations()->delete();
        return to_route('admin.tables.index')->with('danger','Table Deleted Successfully');;
    }

 
    public function deleteAll(Request $request){
           $ids = $request->ids;
           Table::whereIn('id',$ids)->delete();
           return response()->json(["success"=>"Table have been deleted"])->with('asd', 'You cannot delete this data. Goals exists!');;     
    }
}
