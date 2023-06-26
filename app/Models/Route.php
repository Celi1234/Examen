<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Route
 *
 * @property $id
 * @property $route_type
 * @property $route_name
 * @property $route_direction
 * @property $map
 * @property $tourist_attraction
 * @property $created_at
 * @property $updated_at
 *
 * @property Campaign[] $campaigns
 * @property Driver[] $drivers
 * @property Offer[] $offers
 * @property Ticket[] $tickets
 * @property Tourguide[] $tourguides
 * @property Transportagency[] $transportagencys
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Route extends Model
{
    
    static $rules = [
		'route_type' => 'required',
		'route_name' => 'required',
		'route_direction' => 'required',
		'map' => 'required',
		'tourist_attraction' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['route_type','route_name','route_direction','map','tourist_attraction'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function campaigns()
    {
        return $this->hasMany('App\Models\Campaign', 'id_routes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function drivers()
    {
        return $this->hasMany('App\Models\Driver', 'id_routes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offers()
    {
        return $this->hasMany('App\Models\Offer', 'id_routes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'id_routes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tourguides()
    {
        return $this->hasMany('App\Models\Tourguide', 'id_routes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transportagencys()
    {
        return $this->hasMany('App\Models\Transportagency', 'id_routes', 'id');
    }
    

}
