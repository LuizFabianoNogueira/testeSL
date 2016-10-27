<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    #protected $connection = 'connection-name';

    protected $table = 'persons';

    protected $fillable = ['type_person', 'name', 'last_name', 'cpf_cnpj', 'sex', 'date_of_birth'];
    
    protected $hidden = ['created_at', 'modified_at'];
    
    protected $guarded = ['id', 'active'];

    public $timestamps = true;

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
