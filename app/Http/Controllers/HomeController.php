<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Cylinder;
use App\Models\Modeel;
use App\Models\Oilcar;
use App\Models\Time;
use App\Models\User;
use App\Models\Year;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $users = User::all();
        return view('website.index' , compact('users'));
    }

    public function register(){
        return view('website.register');
    }


    public function myCar(){
        $bookings = Booking::where('status' ,'wait');

        return view('website.myCar' , compact('bookings'));
    }

    public function carDetails(){
        // $brands = Brand::all();
        // $modeels = Modeel::all();
        // $years = Year::all();
        // $cylinders = Cylinder::all();
        $cars = Car::all();
        $times = Time::all();
        $bookings = Booking::all();


        return view('website.carDetails',compact('times','cars','bookings'));
    }

    public function calender(){
        return view('website.calender');
    }


    public function time(){
        $times = Time::all();
        return view('website.time' ,  compact('times'));
    }

    public function oil(){
        $oils = Oilcar::all();
        $oilTens = OilCar::all();
        return view('website.oil' ,  compact('oils','oilTens'));
    }

    public function myBooking(){
        $bookings = Booking::where('status' ,'finish');
        return view('website.myBooking' ,  compact('Booking'));
    }

    public function location(){
        $bookings = Booking::all();

        return view('website.location' ,  compact('bookings'));
    }
}