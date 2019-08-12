<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name', 'label'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
}
