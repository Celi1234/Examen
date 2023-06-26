<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Traveler
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $age
 * @property $gender
 * @property $identification
 * @property $created_at
 * @property $updated_at
 *
 * @property Background[] $backgrounds
 * @property Campaign[] $campaigns
 * @property Ticket[] $tickets
 * @property Tourguide[] $tourguides
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Traveler extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'identification' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','age','gender','identification'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function backgrounds()
    {
        return $this->hasMany('App\Models\Background', 'id_travelers', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function campaigns()
    {
        return $this->hasMany('App\Models\Campaign', 'id_travelers', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'id_travelers', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tourguides()
    {
        return $this->hasMany('App\Models\Tourguide', 'id_travelers', 'id');
    }
    

}
