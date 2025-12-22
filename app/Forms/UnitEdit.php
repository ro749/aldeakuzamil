<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
use Ro749\FullListingTemplate\Models\Unit;
use Illuminate\Support\Facades\Log;
class UnitEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            model_class: Unit::get_class(),
            submit_text: "",
            fields: [
                'id' => new Field(
                    type: InputType::HIDDEN
                ),
                'price' => new Field(
                    type: InputType::NUMBER,
                ),
                'status' => new Selector(
                    options: OptionsEnum::UnitsStatus
                ),
                'fragments' => new Field(
                    type: InputType::NUMBER,
                ),
            ],
        );
    }
}
