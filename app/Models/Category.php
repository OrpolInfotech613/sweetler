<?php

namespace App\Models;

use App\Traits\HasDynamicTable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasDynamicTable;
    protected $table = 'categories';
    protected $fillable = ['name','image'];
}
