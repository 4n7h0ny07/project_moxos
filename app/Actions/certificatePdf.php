<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class certificatePdf extends AbstractAction{

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
        return route('certificate.pdf', $this->data->{$this->data->getKeyName()});
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'personas'; // Mostrar solo en el apartado de personas
    }

    public function shouldActionDisplayOnRow($row)
    {
        // Mostrar el botón solo si el usuario tiene permiso
        return auth()->user()->hasPermission('certificate_pdf');
    }

    //public function massAction($ids, $comingFrom)
    //{
    //    return redirect()->back()->with([
    //        'message'    => 'Pdf Creado exitosamente',
    //        'alert-type' => 'success',
    //    ]);
    //}


}
?>