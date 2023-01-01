<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\FundraiserDetail;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //admin gates
        Gate::define('admin', function(User $user){
            if($user->is_admin === 1){
                return true;
            }
        });
        
        //admin gates
        Gate::define('user', function(User $user){
            if($user->is_admin === 0){
                return true;
            }
        });

        Gate::define('accepted', function(){
            $user = Auth::user();
            $status = $user->detail->status;
            
            if($status === 1){
                return true;
            } 
        });
    }
}
