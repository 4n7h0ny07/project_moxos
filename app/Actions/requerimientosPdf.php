<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class requerimientosPdf extends AbstractAction{

    public function getTitle(){
        return 'Pdf';
    }

    public function getIcon(){
        return 'voyager-file-text';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'target' => '_blank', //
        ];
    }

    public function getDefaultRoute()
    {
        return route('requerimientos.pdf', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'requerimientos'; // Mostrar solo en el apartado de personas
    }

    // public function massAction($ids, $comingFrom)
    // {
    //     return redirect()->back()->with([
    //         'message'    => 'Pdf Creado exitosamente',
    //         'alert-type' => 'success',
    //     ]);
    // }


}
?>