<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function SearchHistory(Request $request)
    {
        $text = $request->text;
        $pet = $request->pet;
        $category = $request->category;
        $city = $request->city;
        $result = Post::query();

        if (!empty($text)) {
            $result = $result->where('text', 'like', '%' . $text . '%');
        }

        if (!empty($pet)) {
            $result = $result->where('pet', $pet);
        }

        if (!empty($category)) {
            $result = $result->where('category', $category);
        }

        if (!empty($city)) {
            $result = $result->where('city', 'like', '%' . $city . '%');
        }

        $result = $result->get();
    }
}
