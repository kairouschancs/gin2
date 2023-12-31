<?php

namespace App\Models\Roles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'class',
        'role',
        'role_summary',
    ];

    //users_management
    public function users()
    {
        //return $this->hasMany('App\Models\User');
        return $this->hasMany(User::class);
    }
}
