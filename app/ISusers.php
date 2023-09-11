<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ISusers extends Model
{
    protected $table = 'jhay.IS_user';
    protected $primaryKey ='id';
    public $timestamps = false ;

    protected $fillable = [
        'employeeid', 'role_id', 'created_at'
    ];

}
