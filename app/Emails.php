<?php

namespace App;
use Carbon\Carbon;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
     protected $table = 'Emails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];

  

   


}