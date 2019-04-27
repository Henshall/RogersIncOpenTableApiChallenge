<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Users;
use App\Classes\OpenTable;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function register_with_jobs()
    {
        return view('register');
    }

    public function contact()
    {
        return view('contact');
    }

    public function demo(Request $request)
    {
      $data = $request->all();

      if (empty($data)) {
        // if there is no data (get request)

        return view('demo');
      } else {
        // if there is data (post request)
        $restaurants = OpenTable::getCityRestaurants($data["searchText"]);
        // dd($restaurants);
        return view('demo', ["data" => $restaurants, "city" => $data["searchText"]]);
      }

    }

    public function get_restaurants(Request $request)
    {
      $data = $request->all();
      return OpenTable::getCityRestaurants($data["city"]);
    }

    public function faq()
    {
        return view('faq');
    }
}
