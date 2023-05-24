<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Study
 *
 * @property $id
 * @property $subject_name
 * @property $difficulty
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Study extends Model
{
    
    static $rules = [
		'subject_name' => 'required',
		'difficulty' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subject_name','difficulty'];



}
