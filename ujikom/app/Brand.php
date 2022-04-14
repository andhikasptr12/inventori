<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Brand extends Model
{
    use AutoNumberTrait;

    protected $table = 'brands';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_brand' => [
                'format' => function() {
                    return 'BRN/'.date('Ymd').'/?';
                },
                 'length' => 5
            ]
        ];
    }

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
