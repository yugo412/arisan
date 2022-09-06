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
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
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

        Fortify::registerView(fn () => view('auth.register', ['title' => __('Register')]));
        Fortify::loginView(fn () => view('auth.login', ['title' => __('Log In')]));
        
        Fortify::requestPasswordResetLinkView(fn () => view('auth.password.request', ['title' => __('Request Password')]));
        Fortify::resetPasswordView(fn (Request $request) => view('auth.password.reset', [
            'title' => __('Reset Password'),
            'request' => $request,
        ]));
        Fortify::confirmPasswordView(fn () => view('auth.password.confirm', ['title' => __('Password Confirmation')]));
        
        Fortify::verifyEmailView(fn () => view('auth.verify'));
    }
}
