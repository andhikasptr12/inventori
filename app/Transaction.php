<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function getAutoNumberOptions()

    {
         return ['kode_transaksi'=>['format'=>function(){
         return 'TRANS/'.date('Ymd').'?';},'length'=>5]

         ];
    }
}
