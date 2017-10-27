<?php
/**
 * Created by PhpStorm.
 * User: SibinF
 * Date: 8/13/2017
 * Time: 11:08 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use  App\Package;
use  App\TripCategory;
use  App\TripSubCategory;
use  App\TripItineraries;
use  App\PlacesToVisit;
use  App\TravelType;
use  App\TripActivity;
use Krlove\EloquentModelGenerator\Model\EloquentModel;
use App\Booking;

class HomepageController extends Controller
{

    public function index()
    {

        return view('homepage.home', ['trip_category' => $this->getThemes(), 'packages' => $this->getPopularPackages()]);
    }


    public function categoryDetailed($id = null)
    {
        if (!empty($id)) {

            if($id=='All')
            {
                $packages = Package::with(['travelType', 'tripItineraries', 'tripItineraries.tripActivities', 'placesToVisits', 'tags', 'tripSubCategory', 'tripCategory'])
                    ->get();
                if (!empty($packages)) {
                    return view('homepage.category_detailed', ['packages' => $packages,'header'=>"Explore amazing packages "]);
                } else {
                    return view('homepage.category_detailed', ['packages' => null]);
                }

            }else
            {
                $category = TripCategory::where('id', $id)->first();
                if (!empty($category)) {

                    $packages = Package::with(['travelType', 'tripItineraries', 'tripItineraries.tripActivities', 'placesToVisits', 'tags', 'tripSubCategory', 'tripCategory'])
                        ->where('trip_category_id', $id)
                        ->get();
                    if (!empty($packages)) {
                        return view('homepage.category_detailed', ['packages' => $packages,'header'=>"Popular packages for ".$category->name]);
                    } else {
                        return view('homepage.category_detailed', ['packages' => null]);
                    }

                } else {
                    return redirect('homepage');
                }
            }


        }else {
            return redirect('homepage');
        }
    }

public function bookingRequest($id=null)
{
    $packages = Package::where('id', $id) ->first();

    if(!empty($packages))
    {
        return view('homepage.booking', ['packages' => $packages]);
    }
    else
    {
        return redirect('homepage');
    }
}

public function packageDetailed($id=null)
{

    if(!empty($id))
    {
        $package = Package::where('id',$id)
            ->with(['travelType', 'tripItineraries', 'tripItineraries.tripActivities', 'placesToVisits', 'tags', 'tripSubCategory', 'tripCategory'])
            ->first();


        if(count($package)>0)
        {
            $tripItinerary=$package->tripItineraries;
            $placesToVisits=$package->placesToVisits;
            return view('homepage.package_detailed',compact('tripItinerary','placesToVisits','package'));


        }else
        {
            return redirect('homepage');
        }



    }

}

public function processBooking(Request $request)
{


    $randum_string="TXN_".substr(str_shuffle(str_repeat($x='123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(5/strlen($x)) )),1,5);


        if(!empty($request->all()))
        {
            $booking= new Booking();
            ['package_id', 'customer_name', 'contact_number', 'email_id', 'travel_date', 'adult', 'children','booking_reference'];

            $booking->package_id=$request->package_id;
            $booking->customer_name=$request->customer_name;
            $booking->contact_number=$request->contact_number;
            $booking->email_id=$request->email_id;
            $booking->travel_date=$request->travel_date;
            $booking->adult=$request->adult;
            $booking->children=$request->children;
            $booking->booking_reference=$randum_string;
            if($booking->save())
            {
                $data=array('booking_id'=>$randum_string,'heading'=>'Thank you for booking !','message'=>" Your booking has been confirmed, please use the booking ID for the future reference");
                return view('homepage.booking_confirm',compact('data'));
            }else
            {
                $data=['booking_id'=>null,'heading'=>'Booking Failed ','message'=>" Your booking has beend cancelled please ook again"];
                return view('homepage.booking_confirm',compact('data'));
            }



        }
        return redirect('homepage');



}


    public function packageDetails($id=null)
    {

    }


    public function getThemes()
    {
        $trip_category = TripCategory::all();
        return $trip_category;
    }

    public function getPopularPackages()
    {
        $package = Package::with(['travelType', 'placesToVisits'])->inRandomOrder()->get();
        return $package;
    }

    public function getPackage()
    {
        $package = Package::with(['travelType', 'tripItineraries', 'tripItineraries.tripActivities', 'placesToVisits', 'tags', 'tripSubCategory', 'tripCategory'])->get();;
        Log::info($package);
        dd($package);
        die();
    }

}