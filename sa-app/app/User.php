<?php

namespace App;

use \App\Role;
use \App\Product;
use \App\Shop;
use App\Shipping;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function favorites(){
        return $this->belongsToMany(Product::class,'favorites');
    }

    public function roles(){
        return  $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }

    public function shop(){
        return $this->hasOne(Shop::class,'owner_id','id');
    }
    public function shipping(){
        return $this->hasOne(Shipping::class,'user_id','id');
    }
     public function scopeHasRole($query,$name)
    {
        $type_id = Role::where('name',$name)->first()->id;
        return $query->where('product_type_id', $type_id);
    }
    
}
