<?php
/**
 * Created by PhpStorm.
 * User: hieuna
 * Date: 05/15/2022
 * Time: 10:08 PM
 */

namespace Modules\Admin\app\Libs\Menus;

class Common {
	static function convertDate($date) {
		$ex = explode('/', $date);
		$ex2 = explode('-', $date);
		if (!empty($date) && !empty($ex) && count($ex) > 1) {
			return $ex[2] . '-' . $ex[1] . '-' . $ex[0];
		} else if (!empty($date) && !empty($ex2) && count($ex2) > 1) {
			return $ex2[2] . '-' . $ex2[1] . '-' . $ex2[0];
		}
		return null;
	}

	static function getStartTimeAndEndTimeFormat($startTime, $endTime) {
		if (!empty($startTime)) {
			$startTime = self::convertDate($startTime) . ' 00:00:00';
			return $startTime;
		}
		if (!empty($endTime)) {
			$endTime = self::convertDate($endTime) . ' 23:59:59';
			return $endTime;
		}
	}

	static function checkHasPermissionFixMenu($userInfo) {
		$userPermission = $userInfo->getPermissionsViaRoles()->pluck('name')->toArray();
		return $userPermission;
	}

	static function arrCompareFixMenu($arr, $arrCompare) {
		foreach ($arr as $item) {
			if (in_array($item, $arrCompare)) {
				return true;
			}
		}
		return false;
	}

	public static function getProtocol() {
		return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
	}
}