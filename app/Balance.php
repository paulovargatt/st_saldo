<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Balance extends Model
{

    public function deposit($value){
        $this->amount += number_format($value, 2, '.','');
        $deposit = $this->save();

        if($deposit)
            return ['success' => true,
                    'message' => 'Sucessp'];

    }

}
