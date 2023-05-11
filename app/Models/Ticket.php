<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = "tickets";

    protected $fillable = [
        'subject',
        'category_id',
        'description',
        'attachment',
        'user_id',
        'user_email',
        'status',
        'flag',
        'file_name',
        'updated_at',
        'created_at',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function reply() {
        return $this->hasMany(Ticket_reply::class, 'ticket_id');
    }

    public function ticket_status() {
        return $this->belongsTo(Ticket_status::class, 'status');
    }
    public function notes() {
        return $this->hasMany(TicketNotes::class, 'ticket_id');
    }
    public function ticketassign()
    {
        return $this->hasMany(TicketAssign::class, 'ticket_id')->with('user:name,email,id');
    }

}
