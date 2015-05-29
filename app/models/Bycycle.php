<?php

class Bycycle extends \Eloquent {
	protected $fillable = ['name','series'];
	protected $guarded = ['id'];
}