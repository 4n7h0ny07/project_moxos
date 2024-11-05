<?php 

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\Route;

class ToggleConnectionAction extends AbstractAction
{
    public function getTitle()
    {
        return $this->data->is_connected ?  'On': 'Off';
    }

    public function getIcon()
    {
        return $this->data->is_connected ? 'voyager-power' : 'voyager-power';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm ' . ($this->data->is_connected ? 'btn-success' : 'btn-danger') . ' toggle-connection',
            'data-id' => $this->data->id,
        ];
    }

    public function getDefaultRoute()
    {
        return route('zktecodevices.toggle', $this->data->id);
    }

    public function shouldActionDisplayOnRow($row)
    {
        return $this->dataType->slug == 'zktecodevices'; // Mostrar solo en el apartado de personas // Mostrar el botón en cada fila
    }
}
