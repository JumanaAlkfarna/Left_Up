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
        return view('website.langEn.index' , compact('users'));
    }

    public function register(){
        return view('website.register');
    }


    public function myCar(){
        $bookings = Booking::where('status' ,'wait');

        return view('website.langEn.myCar' , compact('bookings'));
    }

    public function carDetails(){
        // $brands = Brand::all();
        // $modeels = Modeel::all();
        // $years = Year::all();
        // $cylinders = Cylinder::all();
        $cars = Car::all();
        $times = Time::all();
        $bookings = Booking::all();


        return view('website.langEn.carDetails',compact('times','cars','bookings'));
    }




    public function oil(){
        $oils = Oilcar::all();
        $oilTens = OilCar::all();
        return view('website.langEn.oil' ,  compact('oils','oilTens'));
    }

    public function myBooking(){
        $bookings = Booking::where('status' ,'finish');
        return view('website.langEn.myBooking' ,  compact('Booking'));
    }

}