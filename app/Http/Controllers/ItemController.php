<?php
// app/Http/Controllers/ItemController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $searchResults = Item::where('name', 'LIKE', "%{$query}%")->get();

        return view('hry', compact('searchResults'));
    }

    public function create()
    {
        return view('create_item');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Item::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('items.create')->with('success', 'Item created successfully.');
    }
}
?>