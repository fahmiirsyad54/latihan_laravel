<?php

use Illuminate\Support\Facades\Route;
use App\Models\Inventory;
use App\Http\Controllers\InventoryController;

// Route::get("/", function () {
//     return view('welcome');
// });

Route::get("/home", function () { //jalur ke halaman home
    return view('home', [         // mengambil file (home) dari view
        "title" => "Home"         // Mengirim judul ke view
    ]);
});

Route::get('/profile', function () { // jalur ke halaman profile
    return view('profile', [         // mengambil file (profile) dari view
        "title" => "Profile"         // Mengirim judul ke view
    ]);
});

// Route::get('/inventory', [InventoryController::class, 'index']);

// Route::get('/inventory/{link}', [InventoryController::class, 'show']);

Route::resource('/inventory', InventoryController::class);



