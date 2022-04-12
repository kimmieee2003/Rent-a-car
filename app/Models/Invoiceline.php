<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoiceline extends Model
{
    use HasFactory;

    protected $table = 'invoice_lines';

    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
