<?php
namespace Modules\Admin\app\Libs\Enums;

/**
 * @method static BaseStatusEnum DRAFT()
 * @method static BaseStatusEnum PUBLISHED()
 * @method static BaseStatusEnum PENDING()
 */
class BaseStatusEnum {
	public const ACTIVED = 'actived';
	public const DRAFT = 'draft';
	public const PENDING = 'pending';

	public static function get($status) {
		$arr = self::getAll();
		/*if (isset($arr[$status])) {
			            return $arr[$status];
			        }
		*/
	}

	public static function getAll() {
		return array(
			self::PUBLISHED => __('Published'),
			self::DRAFT => __('Draft'),
			self::PENDING => __('Pending'),
		);
	}
}
