<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaksi extends Model
{
    protected $table = 'transactions';
   protected $guarded = [];

   public function barang()
   {
       return $this->belongsTo(Barang::class, 'barang_id');
   }

   public function kategori()
   {
       return $this->belongsTo(Kategori::class,'kategori_id');
   }

   public function brand()
   {
       return $this->belongsTo(Brand::class,'brand_id');
   }

   public function uom()
   {
       return $this->belongsTo(UOM::class);
   }

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function req()
    {
        return $this->belongsTo(REQ::class,'request_id');
    }
}
