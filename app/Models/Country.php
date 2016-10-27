<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    #protected $connection = 'connection-name';

    protected $table = 'countries';

    protected $fillable = ['code', 'name', 'iso'];
    
    #protected $hidden = [];
    
    protected $guarded = ['id', 'active'];

    public $timestamps = false;

    public function states()
    {
    	return $this->hasMany('App\Models\State');
    }

}
