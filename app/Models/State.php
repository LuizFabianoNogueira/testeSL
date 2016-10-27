<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    #protected $connection = 'connection-name';

    protected $table = 'states';

    protected $fillable = ['code', 'uf', 'name'];
    
    #protected $hidden = [];
    
    protected $guarded = ['id', 'country_id', 'active'];

    public $timestamps = false;


    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function cities()
    {
    	return $this->hasMany('App\Models\City');
    }
}
