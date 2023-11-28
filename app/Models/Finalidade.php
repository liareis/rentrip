<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalidade extends Model
{
    use HasFactory;
    
    protected $table = 'finalidades';

    protected $fillable = ['id','nome'];

    public function imoveis(){
        return $this->hasMany(Imovel::class);
}
    
   
}
