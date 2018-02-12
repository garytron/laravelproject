<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//Configuration table name.
    protected $table = "products";
    //By default, Eloquent will maintain the created_at and updated_at columns on your database table automatically. Simply add these timestamp columns to your table and Eloquent will take care of the rest. If you do not wish for Eloquent to maintain these columns, add the following property to your model.
    public $timestamps = false;

    //[Create] This is used for Code 2 in Controller, not necesary for Code 1.
    protected $fillable = ['name', 'price'];

    //We specific what is primary key. By default is 'id'.
    protected $primaryKey = 'idProduct';
}
