<?php
namespace App\Models;
use App\Http\controllers\Catagory1Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory1 extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
     
        'name'
    ];
    public function products()
    {
        return $this->hasMany(products::class);
    }
}
