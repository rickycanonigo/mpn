<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $connection = 'acs';
    protected $table = 'payments';
}