<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
use Ro749\FullListingTemplate\Tables\TorreAdmin as BaseTable;
use Illuminate\Support\Facades\Log;
class TorreAdmin extends BaseTable
{
    public function __construct(){
        parent::__construct();
        
        $this->getter->columns['fragments'] = new Column(
            display:"Fragmentos"
        );
        $this->getter->columns['m2'] = new Column(
            display:"Terreno (m²)",
            modifier: Modifier::METERS
        );
    }
}