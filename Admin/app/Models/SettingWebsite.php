<?php

namespace Modules\Admin\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\database\factories\SettingWebsiteFactory;

class SettingWebsite extends Model {
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 */
	protected $table = 'settings';
	public $timestamps = true;

	protected $fillable = ['group', 'key', 'locale', 'value'];

	protected static function newFactory(): SettingWebsiteFactory {
		//return SettingWebsiteFactory::new();
	}
}