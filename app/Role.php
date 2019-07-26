<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Permission;

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
