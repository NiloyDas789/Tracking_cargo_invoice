<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $fillable=['bill_no', 'byer_name', 'byer_address', 'byer_number', 'date', 'value'];

    public function shippers()
    {
        return $this->belongsTo('App\Models\Shipper');
    }
}
