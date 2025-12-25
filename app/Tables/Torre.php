<?php

namespace App\Tables;

use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Tables\View;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use Ro749\SharedUtils\Tables\Texts\TableTexts;
use App\Enums\UnitsStatus;
use Illuminate\Database\Query\Builder;
use Ro749\FullListingTemplate\Tables\Torre as BaseTable;
class Torre extends BaseTable
{
    public function __construct(){
        parent::__construct();
        $this->getter->columns = [
            'unit'=>new Column(
                display:"Unidad",
            ),
            'price'=>new Column(
                display:"Fracción",
                modifier: Modifier::MONEY,
            ),
            'm2'=> new Column(
                display:"Terreno (m²)",
                modifier: Modifier::METERS
            )
        ];
    }
}