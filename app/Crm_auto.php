<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crm_auto extends Model
{
    protected $fillable = ['mark_id','model_id','number','color','year','city','comment','brand'];
}
