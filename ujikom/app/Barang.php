<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Barang extends Model
{
    use AutoNumberTrait;

    protected $table = 'barangs';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode' => [
                'format' => function () {
                    return 'BRG/' . date('Ymd') . '/?'; 
                },
                'length' => 5 
            ],
            
               
      ];
        
    
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id');
    }
    public function uom()
    {
        return $this->belongsTo(UOM::class,'uom_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
   
    public function request()
    {
        return $this->belongsTo(REQ::class);
    }
    public function suplier()
    {
        return $this->hasMany(Suplier::class);
    }
}