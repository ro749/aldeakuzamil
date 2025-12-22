<?php

namespace App\ImageMapPro;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Ro749\ListingUtils\ImageMapPro\SingleImageMapPro as ImageMapProBase;

class SingleImageMapPro extends ImageMapProBase
{
    public function get_map(){
        $path = storage_path($this->file);
        $map = json_decode(file_get_contents($path),true);
        $data = (config('overrides.models.Unit'))::select('id',$this->label_column,$this->data_column,'fragments')->get();
        $dispo = [];
        foreach($data as $d){
            $dispo[$d->{$this->label_column}] = $d->fragments == 0 ? 1 : $d->{$this->data_column};
        }
        $ans['map'] = $this->re_color($map, $dispo);
        $ans['selected_color'] = $this->selected_color;
        return $ans;
    }

    function get_unit(Request $data){
        $unit = (config('overrides.models.Unit'))::get($this->label_column, $data->input("unit"));
        if($unit->{$this->data_column} != 0 || $unit->fragments == 0){
            return null;
        }
        return $unit;
    }
}