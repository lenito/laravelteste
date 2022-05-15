<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/*
extend adiciona todo conteúdo desenvolvido de 
Model para a classe q a cita

Ex:
class Produto extends Model
O conteúdo de Model será adicionado abaixo da Produto
assim não preciso recriar tudo novamente

**classe abstrata é um esqueleto / serve como contrato

*/  

class Produto extends Model
{
    use HasFactory;

    /*o laravel reconhece nome da classe e adiciona S ou IES para o plural e 
    este será o nome da tabela.
    o protected $table não é obrigatório, mas o Laravel em PT-BR pode errar
    */
    protected $table = 'produtos';

    //colunas manipuláveis
    protected $fillable = [
        'nome',
        'preco',
        'descricao', 
    ];


}
