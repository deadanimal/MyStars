<?php

namespace App\Actions\Fortify;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            //'terms' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();        

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        if($input['user_type'] == 'brand') {
            $profile_type = 'brand';
            $user
                ->createAsStripeCustomer();
            $user
                ->newSubscription( 'prod_NjXrWAw7kwZ08Z', 'price_1My4mCDkcEnPJtip3d9lxCc8')
                ->trialDays(14)
                ->create();               
        } else {
            $profile_type = 'creator';
        }
        

        Profile::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'profile_type' => $profile_type
        ]);
        
        return $user;
    }
}
