<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $table = 'schedules';
    protected $primarykey = 'id';
    protected $fillable = ['name','time','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
