<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignee extends Model implements Authenticatable
{
    use HasFactory;

    public function market()
    {
        return $this->hasMany(Market::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function productReturn()
    {
        return $this->hasMany(ProductReturn::class);
    }
    
    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function getAuthIdentifierName()
    {
        return 'id'; // Return the name of the primary key field
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Return the value of the primary key field
    }

    public function getAuthPassword()
    {
        return $this->password; // Return the hashed password field
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Return the "remember me" token field
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Set the "remember me" token field
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Return the name of the "remember me" token field
    }
}
