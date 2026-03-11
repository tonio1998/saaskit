<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodes extends Model
{
    protected $table = 'qr_codes';

    protected $fillable = [
        'prefix',
        'UserID',
        'last_number',
    ];
}
