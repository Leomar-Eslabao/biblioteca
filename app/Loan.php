<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //

    protected $fillable = [
        'book_id',
      	'user_id',
      	'dt_prev_entrega',
      	'dt_emprestimo',
      	'dt_devolucao',
	];
}
