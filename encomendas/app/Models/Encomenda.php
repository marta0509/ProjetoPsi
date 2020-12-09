<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    use HasFactory;

    protected $primaryKey="id_encomenda";

    protected $table="encomendas";

    public function cliente()
    {
    	return $this->belongsTo('App\Models\Cliente','id_cliente');
    }

    public function vendedor()
    {
    	return $this->belongsTo('App\Models\Vendedor','id_vendedor');
    }

    public function encomendaProduto()
    {
        return $this->hasMany('App\Models\EncomendaProduto','id_encomenda');
    }
}
