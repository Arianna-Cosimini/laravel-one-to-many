<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name","description","code","link","thumb"
    ] ;

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
