<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bus
 *
 * @property $id
 * @property $bus_name
 * @property $brand
 * @property $plate
 * @property $created_at
 * @property $updated_at
 *
 * @property Campaign[] $campaigns
 * @property Driver[] $drivers
 * @property Ticket[] $tickets
 * @property Transportagency[] $transportagencys
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bus extends Model
{
    
    static $rules = [
		'bus_name' => 'required',
		'brand' => 'required',
		'plate' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bus_name','brand','plate'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function campaigns()
    {
        return $this->hasMany('App\Models\Campaign', 'id_buses', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function drivers()
    {
        return $this->hasMany('App\Models\Driver', 'id_buses', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'id_buses', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transportagencys()
    {
        return $this->hasMany('App\Models\Transportagency', 'id_buses', 'id');
    }
    

}
