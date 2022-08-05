<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Laravel\Jetstream\Jetstream;
use App\Util\Lexer\RestrictedNames;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // Username rules
        $usernameRules = [
			'required',
			'min:2',
			'max:15',
			'unique:users',
			function ($attribute, $value, $fail) {
				$dash = substr_count($value, '-');
				$underscore = substr_count($value, '_');
				$period = substr_count($value, '.');

				if(($dash + $underscore + $period) > 1) {
					return $fail('Username is invalid. Can only contain one dash (-), period (.) or underscore (_).');
				}

				if (!ctype_alnum($value[0])) {
					return $fail('Username is invalid. Must start with a letter or number.');
				}

				if (!ctype_alnum($value[strlen($value) - 1])) {
					return $fail('Username is invalid. Must end with a letter or number.');
				}

				$val = str_replace(['_', '.', '-'], '', $value);
				if(!ctype_alnum($val)) {
					return $fail('Username is invalid. Username must be alpha-numeric and may contain dashes (-), periods (.) and underscores (_).');
				}

				$restricted = RestrictedNames::get();
				if (in_array(strtolower($value), array_map('strtolower', $restricted))) {
					return $fail('Username cannot be used.');
				}
			},
		];
        // Email rules
        $emailRules = [
			'required',
			'string',
			'email',
			'max:255',
			'unique:users',
		];
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => $usernameRules,
            'email' => $emailRules,
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
