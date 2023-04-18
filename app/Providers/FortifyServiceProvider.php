<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            return view('authentication.login');
        });

        Fortify::registerView(function (Request $request) {
            if ($request->has('user_type')) {
                if ($request->get('user_type') == 'brand') {
                    $user_type = 'brand';    
                } else {
                    $user_type = 'creator';    
                }
            } else {
                $user_type = 'none';
            }
            return view('authentication.register', compact('user_type'));
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('authentication.forgot-password');
        });
        
        Fortify::resetPasswordView(function ($request) {
            return view('authentication.reset-password', ['request' => $request]);
        });   
        
        Fortify::confirmPasswordView(function () {
            return view('authentication.confirm-password');
        });
        
    }
}
