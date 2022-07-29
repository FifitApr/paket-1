<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formpemesanan extends Model
{
    protected $fillable = [
        'namapemesan','email','notelp','namatamu','tipekamar','tglcekin','tglcekout','jmlkamar',
    ];
}
