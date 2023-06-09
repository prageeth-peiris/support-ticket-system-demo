<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name','email','phone','problem','ref_no'];

    public function reply(){
        return $this->hasOne(Reply::class,'ticket_id');
    }


}
