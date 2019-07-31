<?php

namespace App;



class Reply extends Model
{
    //

    public function user(){

        return $this->belongsTo(User::class);
    }
    public function discussion(){

        return $this->belongsTo(Discussion::class);
    }
}
