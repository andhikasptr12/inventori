<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class kategori extends Model
{
    use AutoNumberTrait;

    protected $table = 'kategoris';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
    return [
        'kode_kategori' => [
            'format' => function () {
                return 'KTG/' . date('ymd') . '/?';
            },
            'lenght' => 5
            ]
        ];
    }
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
