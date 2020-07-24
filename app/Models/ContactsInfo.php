<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactsInfo extends Model
{
    protected $table = 'contacts_info';
    protected $id = 'id';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'inquiry',
        'message'
    ];
}
