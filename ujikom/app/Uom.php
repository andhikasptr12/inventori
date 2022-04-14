<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Uom extends Model
{
    use AutoNumberTrait;

    protected $table = 'uoms';
    protected $guarded = [];

public function getAutoNumberOptions()
    {
        return [
            'kode_satuan' => [
                'format' => function () {
                    return 'STN/' . date('ymd') . '/?';
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
    