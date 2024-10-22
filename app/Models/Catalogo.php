<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Catalogo extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['catalogo'];

    public function actions()
    {
        return [
            \App\Actions\ImportExcelCatalogo::class,
        ];
    }
}
