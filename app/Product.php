<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Cashier\Billable;

class Product extends Model
{
    // use Billable;
    protected $primaryKey = 'uuid';
    protected static function boot(){
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function getIncrementing(){
        return false;
    }

    public function getKeyType(){
        return 'string';
    }
}
