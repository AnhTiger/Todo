<?php

namespace Modules\Admin\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\database\factories\LogActionFactory;

class LogAction extends Model {
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 */
	protected $table = 'log_action';
	public $timestamps = true;

	protected $fillable = ['action', 'menu',  'status', 'created_at', 'updated_at', 'user_updated', 'user_created', 'reason'];

	protected static function newFactory(): LogActionFactory {
		//return SettingWebsiteFactory::new();
	}
}