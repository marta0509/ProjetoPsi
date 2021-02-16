<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $primaryKey="id_produto";

    protected $table="produtos";

    protected $fillable=[
    	'designacao',
    	'stock',
    	'preco',
    	'observacoes',
        'imagem'
    ];

    public function encomendaProduto()
    {
    	return $this->hasMany('App\Models\EncomendaProduto','id_produto');
    }
}
