<?php

namespace Modules\Admin\app\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MatchOldPasswordRule implements ValidationRule {

	/**
	 * Run the validation rule.
	 */
	public function validate(string $attribute, mixed $value, Closure $fail): void {
		$result = Hash::check($value, Auth::guard('admin')->user()->password);
		if (!$result) {
			$fail('setting.The current password is incorrect.');
		}
	}
}
