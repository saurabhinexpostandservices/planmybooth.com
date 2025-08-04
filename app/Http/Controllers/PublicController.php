<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Country;
use App\Models\City;
use App\Models\Standbuilder;
use App\Models\Show;


class PublicController extends Controller
{
    public function fetch_city_for_search(Request $request){
        $pages = Page::where('status', 'published')
        ->where('type', 'city')
        ->select('slug', 'city_id')
        ->with(['city' => function ($query) {
            $query->select('id', 'name');
        }])
        ->get()
        ->sortBy(fn($page) => $page->city?->name)
        ->values()
        ->map(function ($page) {
            return [
                'slug' => $page->slug,
                'city' => $page->city?->name,
            ];
        });

        return $pages;
    }

    public function fetch_country_for_home(Request $request) {
        $pages = Page::where('status', 'published')
        ->where('type', 'country')
        ->select('slug', 'country_id', 'featured_image')
        ->with(['country' => function ($query) {
            $query->select('id', 'name')->orderBy('name');
        }])
        ->get()
        ->sortBy(fn($page) => $page->country?->name)
        ->values()
        ->map(function ($page) {
            return [
                'slug' => $page->slug,
                'country' => $page->country?->name,
                'featured_image' => $page->featured_image
            ];
        });

        return $pages;
    }

    public function home(Request $request){
        $countries = Page::where('status', 'published')
        ->where('type', 'country')
        ->select('slug', 'country_id', 'featured_image')
        ->with(['country' => function ($query) {
            $query->select('id', 'name')->orderBy('name');
        }])
        ->get()
        ->sortBy(fn($page) => $page->country?->name)
        ->values()
        ->map(function ($page) {
            return [
                'slug' => $page->slug,
                'country' => $page->country?->name,
                'featured_image' => $page->featured_image
            ];
        });

        return view('home', compact('countries'));
    }

    public function country($slug)
    {
        /**
         * Goal:
         * - Load the country page
         * - Find all cities in that country
         * - Return standbuilders who provide services in any of those cities
         */

        $page = Page::where('slug', $slug)
            ->where('status', 'published')
            ->where('type', 'country')
            ->first();

        if (!$page) {
            abort(404, 'Page not found');
        }

        $country = Country::find($page->country_id);

        if (!$country) {
            abort(404, 'Country not found');
        }

        // Fetch all city IDs in this country
        $cityIds = City::where('country_id', $country->id)->pluck('id')->toArray();

        // Fetch all standbuilders that provide service in any of these cities
        $standbuilders = Standbuilder::where('status', 'published')
            ->where(function ($query) use ($cityIds) {
            foreach ($cityIds as $cityId) {
                $query->orWhereJsonContains('services_cities', (string)$cityId);
            }
            })
            ->paginate(10);

        return view('country', compact('page', 'standbuilders'));
    }


    public function city($slug){

        $page = Page::where('slug', $slug)
            ->where('status', 'published')
            ->where('type', 'city')
            ->first();

        if (!$page) {
            abort(404, 'Page not found');
        }

        $city = City::find($page->city_id);

        if (!$city) {
            abort(404, 'City not found');
        }

        $standbuilders = Standbuilder::where('status', 'published')
            ->whereJsonContains('services_cities', (string)$city->id)
            ->paginate(10);

        return view('city', compact('page', 'standbuilders'));
    }

    public function get_cities(){
        try {
            $cities = City::select('name', 'id')->distinct()->orderBy('name')->get();
            return $cities;
        } catch (\Throwable $th) {
            //throw $th;
            return [];
        }
    }

    public function get_shows(){
       try {
         $shows = Show::select('title', 'id')->distinct()->orderBy('title')->get();
         return $shows;
       } catch (\Throwable $th) {
        //throw $th;
         return [];
       }
    }

}
