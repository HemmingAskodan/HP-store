<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryToType extends Model
{
    use HasFactory;

    protected $fillable = ["category_id","type_id"];
}
