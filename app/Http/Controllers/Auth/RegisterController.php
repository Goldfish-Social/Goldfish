<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Util\Lexer\RestrictedNames;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/email/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
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

				if(ends_with($value, ['.php', '.js', '.css'])) {
					return $fail('Username is invalid.');
				}

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
        // Token rules
		$rt = [
			'required',
			function ($attribute, $value, $fail) {
				if($value !== $this->getRegisterToken()) {
					return $fail('Something went wrong');
				}
			}
		];
        return Validator::make($data, [
            'terms' => 'required|accepted',
            'name' => ['required', 'string', 'max:255'],
            'username' => $usernameRules,
            'email' => $emailRules,
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
