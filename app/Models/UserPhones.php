<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;
class UserPhones extends Model implements AuditableContract
{
    use Auditable;
    protected $table = 'user_phones';
    protected $fillable = [
        'id',
        'UserID',
        'phone_number',
    ];
}
