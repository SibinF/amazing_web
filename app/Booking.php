<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: SibinF
 * Date: 10/26/2017
 * Time: 1:21 AM
 */
class Booking extends Model
{
    public $timestamps = true;
    protected $fillable = ['package_id', 'customer_name', 'contact_number', 'email_id', 'travel_date', 'adult', 'children','booking_reference','status'];
}