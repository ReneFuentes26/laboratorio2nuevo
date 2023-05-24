<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organization
 *
 * @property $id
 * @property $jobs_id
 * @property $organization_name
 * @property $Order_Day
 * @property $created_at
 * @property $updated_at
 *
 * @property Job $job
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Organization extends Model
{
    
    static $rules = [
		'jobs_id' => 'required',
		'organization_name' => 'required',
		'Order_Day' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jobs_id','organization_name','Order_Day'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function job()
    {
        return $this->hasOne('App\Models\Job', 'id', 'jobs_id');
    }
    

}
