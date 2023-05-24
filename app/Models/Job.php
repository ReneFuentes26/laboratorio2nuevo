<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Job
 *
 * @property $id
 * @property $job_name
 * @property $description
 * @property $started_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Job extends Model
{
    
    static $rules = [
		'job_name' => 'required',
		'description' => 'required',
		'started_at' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['job_name','description','started_at'];



}
