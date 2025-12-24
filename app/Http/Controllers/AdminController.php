<?php

namespace App\Http\Controllers;

use Ro749\FullListingTemplate\Tables\Ventas;
use Ro749\FullListingTemplate\Controllers\AdminController as BaseAdminController;
use App\Forms\RegisterSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends BaseAdminController
{
    public function ventas() {
        $table = Ventas::instance();
        $form = RegisterSale::instanciate();
        return view(config('overrides.views.sales-table'), [
            'table'=>$table,
            'form'=>$form,
        ]);
    }

    public function get_clients(Request $request){
        if($request->has('asesor')){
            return DB::table('clients')->where('asesor', $request->input('asesor'))->get();
        }
        $sale = DB::table('sales')->where('id', $request->input('id'))->first();
        return DB::table('clients')
        ->select('id', 'name as value')
        ->where('asesor', $sale->asesor)->get();
    }
}
