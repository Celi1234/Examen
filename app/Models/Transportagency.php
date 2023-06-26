<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transportagency
 *
 * @property $id
 * @property $name
 * @property $direction
 * @property $type_of_transport
 * @property $id_agents
 * @property $id_buses
 * @property $id_drivers
 * @property $id_ticketagents
 * @property $id_routes
 * @property $created_at
 * @property $updated_at
 *
 * @property Agent $agent
 * @property Bus $bus
 * @property Driver $driver
 * @property Route $route
 * @property Ticketagent $ticketagent
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transportagency extends Model
{
    
    static $rules = [
		'name' => 'required',
		'direction' => 'required',
		'type_of_transport' => 'required',
		'id_agents' => 'required',
		'id_buses' => 'required',
		'id_drivers' => 'required',
		'id_ticketagents' => 'required',
		'id_routes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','direction','type_of_transport','id_agents','id_buses','id_drivers','id_ticketagents','id_routes'];


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
    public function route()
    {
        return $this->hasOne('App\Models\Route', 'id', 'id_routes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ticketagent()
    {
        return $this->hasOne('App\Models\Ticketagent', 'id', 'id_ticketagents');
    }
    

}
