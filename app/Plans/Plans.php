<?php

namespace App\Plans;

use Illuminate\Support\Facades\DB;

use Ro749\ListingUtils\Plans\PlansBase;
use Ro749\ListingUtils\Plans\PersonalizedPlanLine;
use Ro749\SharedUtils\Forms\InputType;
class Plans extends PlansBase
{   
    function get_default_plan($id,$title,$discount,$personal=false){
        $plan = parent::get_default_plan($id,$title,$discount,$personal);
        $new_line = new PersonalizedPlanLine(
            text: 'Fracciones',
            percent: false,
            type: InputType::NUMBER,
        );
        array_unshift($plan->top_lines, $new_line);
        return $plan;
    }

    
}