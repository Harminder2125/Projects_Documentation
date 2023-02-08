<?php
namespace App\Models\Scopes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class GroupScope implements Scope
{
        /**
         * This Global Scope will be implemented on USER Model for following actions
         * 1. The person will not be able to access user of other group or state.
         *
        */
    
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('group_id', '=',Auth::user()->group_id);
    }
}

?>