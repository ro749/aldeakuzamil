<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\FullListingTemplate\Models\Unit;
use App\Models\Sale;
use Illuminate\Support\Facades\Log;
use Ro749\SharedUtils\Rules\Sufficient;
class VentaEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            model_class: Sale::get_class(),
            submit_text: "Registrar Venta",
            fields: [
                'unit'=>new Field(
                    type: InputType::HIDDEN
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
