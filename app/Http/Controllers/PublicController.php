<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

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

    public function home(Request $request) {
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
}
