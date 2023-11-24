<?php

namespace App\Http\Controllers;

use App\Item;

class SearchController extends Controller
{
    // ... (no changes to the existing code)

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        // Use the Item model to search for items in the database
        $results = Item::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('search', ['results' => $results]);
    }

    public function details($id)
    {
        // Use the Item model to retrieve details from the database
        $details = Item::where('name', $id)->first();

        return view('details', ['details' => $details]);
    }
}


