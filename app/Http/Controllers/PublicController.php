<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PublicController extends Controller
{
    public function fetch_city_for_search(Request $request){
        $pages = Page::with(['city:id,name'])
        ->where('status', 'published')
        ->select('slug', 'city_id')
        ->get()
        ->map(function ($page) {
            return [
                'slug' => $page->slug,
                'city' => $page->city?->name,
            ];
        });


        return $pages;
    }
}
