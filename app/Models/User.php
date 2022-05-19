<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'password',
    ];

    protected $with = ['role'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function lastActivity()
    {
        return $this->belongsTo(Activity::class, 'last_activity_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function hasRole(String $role)
    {
        return $this->role->name === $role;
    }

    public function hasRoles(array $roles)
    {
        return in_array($this->role->name, $roles);
    }
}
