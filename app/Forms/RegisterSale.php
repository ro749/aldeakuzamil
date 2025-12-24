<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
use Ro749\FullListingTemplate\Models\Unit;
use App\Models\Sale;
use Illuminate\Support\Facades\Log;
use Ro749\SharedUtils\Rules\Sufficient;
class RegisterSale extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            model_class: Sale::get_class(),
            submit_text: "Registrar Venta",
            success_msg: "Venta registrada exitosamente",
            reload: true,
            fields: [
                'unit'=>Selector::fromDB(
                    id:"unit",
                    label:"Unidad",
                    table: 'units',
                    label_column: 'unit',
                    query_modifier: function ($query) {
                        return $query->where('fragments', '>', 0)->where('status', '!=', 3);
                    },
                    required: true,
                ),
                'fragments'=>new Field(
                    type: InputType::NUMBER,
                    label:"Fragmentos",
                    required: true,
                    rules: [
                        new Sufficient(
                            model_class: Unit::get_class(), 
                            column:'fragments', 
                            id:'unit'
                        )
                    ],
                ),
                'final_price'=>new Field(
                    label:"Precio Final",
                    type: InputType::MONEY,
                    required: true,
                ),
                'sale_date'=>new Field(
                    label:"Fecha de venta",
                    type: InputType::DATE,
                    required: true,
                ),
                'asesor'=>Selector::fromDB(
                    id:"asesor",
                    label: "Asesor",
                    table: 'asesors',
                    label_column: 'name',
                    required: true,
                ),
                'client'=>Selector::fromDB(
                    id:"client",
                    label: "Cliente",
                    table: 'clients',
                    label_column: 'name',
                    hot_reload: route('clients-asesor'),
                    required: true,
                )
            ],
        );
    }
}
