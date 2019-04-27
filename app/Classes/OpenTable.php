<?php

namespace App\Classes;


class OpenTable
{

  public static function getRawCityData($city){
    $city = urlencode($city);
    $city_url =  "http://opentable.herokuapp.com/api/restaurants?city=" . $city;
    return file_get_contents($city_url);
  }

  public static function getAllCityData($city){
    $city = urlencode($city);
    $city_url =  "http://opentable.herokuapp.com/api/restaurants?city=" . $city;
    return json_decode(file_get_contents($city_url));
  }

  public static function getCityRestaurants($city){
    $city = urlencode($city);
    $city_url =  "http://opentable.herokuapp.com/api/restaurants?city=" . $city;
    return json_decode(file_get_contents($city_url))->restaurants;
  }




}
















?>
