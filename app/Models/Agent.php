<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agent
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $phone_number
 * @property $age
 * @property $gender
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Campaign[] $campaigns
 * @property Transportagency[] $transportagencys
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agent extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'phone_number' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','phone_number','age','gender','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function campaigns()
    {
        return $this->hasMany('App\Models\Campaign', 'id_agents', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transportagencys()
    {
        return $this->hasMany('App\Models\Transportagency', 'id_agents', 'id');
    }
    

}
