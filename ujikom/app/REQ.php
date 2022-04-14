<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class REQ extends Model
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

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
