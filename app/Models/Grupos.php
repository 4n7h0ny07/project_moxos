<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupos extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'grupos';

    public function personas()
    {
        return $this->belongsTo(Personas::class, 'personas_id');
    }

    public function cobradores()
    {
        return $this->belongsTo(Cobradores::class, 'cobrador_id');
    }

    public function promotores()
    {
        return $this->belongsTo(Promotores::class, 'promotor_id');
    }

    

}
