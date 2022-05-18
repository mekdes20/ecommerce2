<?php

namespace App\Models;
use App\Http\controllers\productscontroller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'unite',
        'price',
        'quantity',
    ];
    public function catagory1()
        {
            return $this->belongsTo(catagory1::class);
        }
    
}
