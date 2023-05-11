<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketNotes extends Model
{
    use HasFactory;

    
    protected $table = "ticket_notes";

    protected $primaryKey = 'id';

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
