<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Request extends Model
{
    use AutoNumberTrait;

    protected $table = 'requests';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode' => [
                'format' => function () {
                    return 'REQ/' . date('Ymd') . '/?'; 
                },
                'length' => 5 
           
        ]
        
    ];
    }
}
