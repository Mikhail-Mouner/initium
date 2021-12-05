<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index($slug)
    {
        $hotel = Hotel::whereHotelSlug($slug)->with('branches')->first();
        return view('hotel_branches')->with(['hotel'=>$hotel]);
    }


    public function rooms($slug,$id)
    {
        $branch = Branch::whereId($id)->with('rooms')->first();
        return view('hotel_branch_rooms')->with(['branch'=>$branch]);
    }

}
