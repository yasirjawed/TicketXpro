<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable=[
        'ticket_id',
        'subject',
        'description',
        'status',
        'response',
        'created_by'
        ];
        public function user(){
            return $this->belongsTo(User::class,'created_by','id');
        }
}
