<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MechanicController extends Controller
{
    public function getOwrOfCar(){
        $owner=Mechanic::find(1)->owner;
        // $owner= DB::select('
        //     select * from owners ow1
        //     inner join cars c1
        //     on c1.id= ow1.car_id
        //     where c1.mechanic_id in(select mechanics.id from mechanics)
            
        // ');
        echo"dfsd";
        // dd($owner->toArray());
    }
}
