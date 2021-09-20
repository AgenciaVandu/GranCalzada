<?php

namespace App\Http\Livewire\Admin\Developments\Miraverde;

use App\Models\Development;
use App\Models\Lot;
use Livewire\Component;
use Livewire\WithPagination;

class Lots extends Component
{
    use WithPagination;

    public $development;
    public $search;
    public $number, $measures, $area, $construction_area, $model_id, $status;
    public $table = true;
    public $lot;
    public $models;

    public function mount(Development $development)
    {
        $this->development = $development;
        $this->models = $development->models;
    }

    public function edit(Lot $lot)
    {
        $this->number = $lot->number;
        $this->measures = $lot->measures;
        $this->area = $lot->area;
        $this->construction_area = $lot->construction_area;
        $this->model_id = $lot->model_id;
        $this->status = $lot->status;
        $this->lot = $lot;
        $this->table = false;
    }

    public function update(Lot $lot)
    {
        $lot->update([
            'measures' => $this->measures,
            'area' => $this->area,
            'construction_area' => $this->construction_area,
            'model_id' => $this->model_id,
            'status' => $this->status,
        ]);

        $this->table = true;
    }

    public function render()
    {
        return view('livewire.admin.developments.miraverde.lots', [
            'lots' => $this->development->lots()->where('number', 'LIKE', '%' . $this->search . '%')->orderBy('number', 'asc')->paginate(10),
        ]);
    }
}
