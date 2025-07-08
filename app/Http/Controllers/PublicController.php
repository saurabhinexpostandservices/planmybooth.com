<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Country;
use App\Models\Standbuilder;

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

    public function country($slug){
        /**
         * first fetch the country page data
         * second fetch the continent id from country data
         * third find the standbuilder which provides the services in that continents
         * @return $page, $standbuiders data
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

        $standbuilders = Standbuilder::whereJsonContains('services_continents', [(string)$country->continent_id])->paginate(10);
        
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

        $country = Country::find($page->country_id);

        if (!$country) {
            abort(404, 'Country not found');
        }

        $standbuilders = Standbuilder::whereJsonContains('services_continents', [(string)$country->continent_id])->paginate(10);
        
        return view('city', compact('page', 'standbuilders'));
    }

}
