<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tacs extends Model
{
    use HasFactory, CrudTrait;
    protected $table ="tacs";
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'year',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }

    public function spami()
    {
        return $this->hasMany(\App\Models\Spami::class);
    }
}
