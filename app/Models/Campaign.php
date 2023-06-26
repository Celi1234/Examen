<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campaign
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $id_travelers
 * @property $id_agents
 * @property $id_routes
 * @property $id_tourguides
 * @property $id_buses
 * @property $id_offers
 * @property $id_marks
 * @property $id_drivers
 * @property $created_at
 * @property $updated_at
 *
 * @property Agent $agent
 * @property Bus $bus
 * @property Driver $driver
 * @property Mark $mark
 * @property Offer $offer
 * @property Route $route
 * @property Tourguide $tourguide
 * @property Traveler $traveler
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Campaign extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'id_travelers' => 'required',
		'id_agents' => 'required',
		'id_routes' => 'required',
		'id_tourguides' => 'required',
		'id_buses' => 'required',
		'id_offers' => 'required',
		'id_marks' => 'required',
		'id_drivers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','id_travelers','id_agents','id_routes','id_tourguides','id_buses','id_offers','id_marks','id_drivers'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agent()
    {
        return $this->hasOne('App\Models\Agent', 'id', 'id_agents');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bus()
    {
        return $this->hasOne('App\Models\Bus', 'id', 'id_buses');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function driver()
    {
        return $this->hasOne('App\Models\Driver', 'id', 'id_drivers');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mark()
    {
        return $this->hasOne('App\Models\Mark', 'id', 'id_marks');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function offer()
    {
        return $this->hasOne('App\Models\Offer', 'id', 'id_offers');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function route()
    {
        return $this->hasOne('App\Models\Route', 'id', 'id_routes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tourguide()
    {
        return $this->hasOne('App\Models\Tourguide', 'id', 'id_tourguides');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function traveler()
    {
        return $this->hasOne('App\Models\Traveler', 'id', 'id_travelers');
    }
    

}
