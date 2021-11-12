<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventory.index', [         // mengambil file (inventory) dari view
            "title"     => "Inventory",
            "inventory" => Inventory::all()
        ]);
    }

    public function show(Inventory $inventory)
    {
        return view('inventory.detail',[
            "title" => "Single Post",
            "post"  => $inventory
        ]);
    }

    public function create()
    {
        return view('inventory.create', [
            "title" => "Create New Data"
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul'     => 'required|max:255',
            'link'      => 'required|unique:inventories',
            'deskripsi' => 'required'
        ]);

        Inventory::create($validateData);
        return redirect('/inventory')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy(Inventory $inventory)
    {
        Inventory::destroy($inventory->id);
        return redirect('/inventory')->with('success', 'Data berhasil dihapus'); 
    }
}
