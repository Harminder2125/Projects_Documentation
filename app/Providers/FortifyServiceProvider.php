<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use App\Models\Privileges;
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ProjectRoles;
use App\Models\Division;
use Session;


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
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();
     
            if ($user && Hash::check($request->password, $user->password)) {
                 
                $pp=array();
                $perm=Privileges::get(['name']);
                
                foreach($perm as $y)
                {
                    $pp[$y->name]=0;
                }
                $p=$user->role_privilege_mapping;
                
                foreach($p as $x)
                {

                    $pp[$x->privileges->name]=1;
                }

                // dd($pp);
                
                

               $pr=array();
               $proles=ProjectRoles::get();
               foreach($proles as $y)
               {
                   $pr[$y->id]=array("value"=>0,"name"=>$y->name);
               }
               $p2=$user->ProjectTeamMembers;
               foreach($p2 as $x2)
               {
                $temp=$x2->ProjectRoles;
                if($temp!=null)
                {
                   
                    $pr[$temp->id]=array("value"=>1,"name"=>$temp->name);
                }
                   
               }
      
            
           
               
        
                Session::put('permissions',$pp);
                
                Session::put('projectroles',$pr);

            //    dd( Session::get('projectroles'));
                
                // Session::put('role_id',$user->role_id);
                // Session::put('role',$user->role->name);
                // Session::put('group_id',$user->group_id);
                // Session::put('group',$user->group->name);
                return $user;
            }
        });
        
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
    }
}
