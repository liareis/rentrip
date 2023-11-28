<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';

    protected $fillable = ['id','nome'];

    public function imoveis(){
        return $this->hasMany(Imovel::class);
}
}
