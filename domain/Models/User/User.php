<?php

namespace MVC\Models\User;

use MVC\Base\MVCModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class User extends MVCModel implements AuthenticatableContract, AuthorizableContract {

    use Authenticatable, Authorizable, HasApiTokens, HasFactory, HasUuid;

    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $fillable   = ['name', 'email', 'password'];
    protected $hidden     = ['password', 'remember_token'];
    protected $casts      = ['email_verified_at' => 'datetime'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->password = Hash::make($model->password);
        });
    }

    public function filter($query, array $params = [])
    {
        $uuid      = (string)($params['uuid'] ?? '');
        $name_user = (string)($params['name_user'] ?? '');
        $email     = (string)($params['email'] ?? '');

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        if ($name_user) {
            $query->where('name', 'LIKE', "%$name_user%");
        }

        if ($email) {
            $query->where('email', 'LIKE', "%$email%");
        }

        return $query;
    }
}
