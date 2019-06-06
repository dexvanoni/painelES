<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Painel extends Model
{
  protected $connection = 'pgsql';
  protected $table = 'painels';
  protected $schema = 'painel';
}
