<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ["judul", "link", "deskripsi"];

    public function getRouteKeyName()
    {
        return "link";
    }
}
