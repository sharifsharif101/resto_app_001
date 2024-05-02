<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Table;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $tables= Table::where('status',TableStatus::Available)->get();
        return view('admin.reservations.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    // الهدف من هذا الفنكشن انو يسجل البيانات في الداتا بيز
    {
        // المطلوب شنو ؟ ان تكون هناك بيانات مرسلة الى هذا الفنكشن وهذا الذي حصل فعلا

        $table= Table::findOrFail($request->table_id);
        // هنا يقوم هذا المبرمج بتخزين بيانات الطاولة او ياتو طاولة تم اختيارها 

        // فتش عله الطاولة في المودل او الجدول وخزن هذه الطاولة وكل معلوماتها عندك
        // اذا يبقى السؤال متى انا بستخدم الحاجة دي ...
        // انت عندك جدول وداير تجيب منو صف معين ....
        // يعني داير تفتش جوا الجدول... تمام هل معك 
        dd($table);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning',' please choose the table based on guests.');
        }
        $request_date = Carbon::parse($request->res_date);


        foreach($table->reservations as $res){
            if($res->res_date->format('Y-m-d')== $request_date->format('Y-m-d')){
                return back()->with('warning',' this table is reserved for this date ');
            }   
        }

        Reservation::create($request->validated());
        return to_route('admin.reservations.index')->with('success','Reservation created Successfully');;

       
    }
 
    public function show($id)
    {
        //
    }

   
    public function edit(Reservation $reservation)
    {
        $tables = Table :: where ('status',TableStatus::Available)->get();
        return view ('admin.reservations.edit',compact('reservation','tables'));
    }


    
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table= Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning',' please choose the table based on guests.');
        }
        $request_date = Carbon::parse($request->res_date);
        $reservations= $table->reservations->where('id','!=',$reservation->id)->get();
        foreach($reservations as $res){
            if($res->res_date->format('Y-m-d')== $request_date->format('Y-m-d')){
                return back()->with('warning',' this table is reserved for this date ');
            }   
        }

        $reservation->update($request->validated());
        return to_route('admin.reservations.index')->with('success','Reservation updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('admin.reservations.index')->with('warning','  Reservation deleted Successfully');
    }
}
