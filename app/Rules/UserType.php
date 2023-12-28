<?php

namespace App\Rules;

use Closure;
use Spatie\Permission\Models\Role;
use Illuminate\Contracts\Validation\ValidationRule;

class UserType implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!Role::where('name', $value)->exists()) {
            $fail('Invalid user type.');
        }
    }
}
