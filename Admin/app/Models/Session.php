<?php

namespace Modules\Admin\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\database\factories\SettingWebsiteFactory;
class Session extends Authenticatable {

	protected $table = 'sessions';
	public $timestamps = true;
    protected $primaryKey = 'id';
    // protected $connection = "mysql_second";
    protected $fillable = [
        'user_id',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity',  
    ];
}
