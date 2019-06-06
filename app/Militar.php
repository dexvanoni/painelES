<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{
  protected $connection = 'pgsql';
  protected $table = 'militars';
  protected $schema = 'painel';

  protected $fillable = ['p_grad', 'nome', 'secao', 'tipo'];
}
