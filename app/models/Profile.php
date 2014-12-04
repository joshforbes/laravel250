<?php


class Profile extends Eloquent {

    protected $fillable = ['user_id', 'name', 'email', 'url', 'company', 'location'];


    public function user()
   {
       return $this->belongsTo('User', 'user_id');
   }
} 