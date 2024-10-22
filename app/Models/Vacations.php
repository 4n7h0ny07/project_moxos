<?php

namespace App\Models;

use App\Actions\VacationPdf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacations extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'vacations';


    public function personas()
    {
        return $this->belongsTo(Personas::class, 'personas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getActionsAttribute()
    {
        return [
            VacationPdf::class,
        ];
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($vacations) {
            // Obtiene el ID del usuario logueado y lo asigna a la persona
            $vacations->user_id = auth()->id();

            // Genera un número autoincremental con ceros delante
        $lastNumber = DB::table('vacations')->max('id'); // Suponiendo que 'id' es el campo autoincremental
        $vacations->number = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);
        });

    }
}
