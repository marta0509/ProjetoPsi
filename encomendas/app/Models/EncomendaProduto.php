<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncomendaProduto extends Model
{
    use HasFactory;

    protected $primaryKey="id_enc_prod";

    protected $table="encomendas_produtos";

    public function encomenda()
    {
    	return $this->belongsTo('App\Models\Encomenda','id_encomenda');
    }

    public function produto()
    {
    	return $this->belongsTo('App\Models\Produto','id_produto');
    }
}
