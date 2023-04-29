<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Time;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $times = Time::all();

        $bookings = Booking::orderBy('id' , 'asc')->paginate(5);
        return response()->view('cms.booking.index' , compact('bookings', 'times'));
    }

    public function indexToday()
    {
        $bookings = Booking::where('date' , '=' , Carbon::today());

        return view('bookings.index', compact('bookings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function indexArticle($id)
    //  {
    //      //
    //      $users = User::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);
    //      return response()->view('cms.article.index', compact('articles','id'));
    //  }
    // public function createBooking($id)
    // {
    //     $users = User::all();
    //     $cars = Car::all();

    //     return response()->view('cms.booking.create' , compact('users','id','cars'));
    // }





    public function create()
    {
        $users = User::all();
        $cars = Car::all();
        $times = Time::all();

        return response()->view('website.carDetails' , compact('users','cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function showAvailableTimes($date, $location)
     {
         // First, get all the times available for the given date and location
         $times = Time::where('period', 'am')
             ->orWhere('period', 'pm')
             ->get();

         // Then, loop through each time to count the number of bookings made for it
         foreach ($times as $time) {
             $bookingsCount = Booking::where('time_id', $time->id)
                 ->where('date', $date)
                 ->where('location', $location)
                 ->count();
             $time->bookingsCount = $bookingsCount;
         }

         return view('bookings.availability', [
             'date' => $date,
             'location' => $location,
             'times' => $times,
         ]);
     }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'time_id' => 'required|exists:times,id',
            'date' => 'required|',
            'location' => 'required',
        ]);

        // Check if the selected time is still available
        $bookingsCount = Booking::where('time_id', $validatedData['time_id'])
            ->where('date', $validatedData['date'])
            ->where('location', $validatedData['location'])
            ->count();
        if ($bookingsCount >= 2) {
            return redirect()->back()->with('error', 'Selected time is no longer available.');
        }


            $bookings = new Booking();
            // $bookings->brand = $request->get('brand');
            // $bookings->modeel = $request->get('modeel');
            // $bookings->year = $request->get('year');
            // $bookings->cylinder = $request->get('cylinder');

            $bookings->date = $request->get('date');
            // $bookings->time = $request->get('time');
            $bookings->location = $request->get('location');
            $bookings->user_id = auth()->user()->id;;

            $bookings->car_id = $request->get('car_id');
            $bookings->status = $request->get('status');
            $bookings->time_id = $request->get('time_id');



            $isSaved = $bookings->save();
            // return ['redirect' => route('website.oil')];

            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => "Created is Successfully"] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => "Created is Failed"] , 400);
            }

    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings = Booking::findOrFail($id);
        return response()->view('cms.booking.edit' , compact('bookings'));
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
        $validator = Validator($request->all() , [

        ]);

        if(! $validator->fails()){

            $bookings =  Booking::findOrFail($id);

            $bookings->status = $request->get('status');



            $isUpdated = $bookings->save();
            return ['redirect' => route('bookings.index')];

            if($isUpdated){
                return response()->json(['icon' => 'success' , 'title' => "Created is Successfully"] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => "Created is Failed"] , 400);
            }
        }
        else{
            return response()->json(['icon'=>'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = Booking::destroy($id);

    }
}