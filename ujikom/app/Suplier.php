<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Suplier extends Model
{
    use AutoNumberTrait;

    protected $table = 'supliers';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode' => [
                'format' => function () {
                    return 'SUP/' . date('Ymd') . '/?'; 
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
