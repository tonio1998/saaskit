<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;
class UserNFCs extends Model implements AuditableContract
{
    use Auditable;
    protected $table = 'user_nfcs';
    protected $fillable = [
        'UserID',
        'nfc_uid'
    ];
}
