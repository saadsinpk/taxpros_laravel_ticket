<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketAssign extends Model
{
    use HasFactory;

    protected $table = "ticket_assign";

    protected $fillable = [
        'ticket_id',
        'user_id'
    ];

    public function ticket() {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
