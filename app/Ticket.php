<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
        protected $fillable = [
            'user_id', 'category_id', 'ticket_id', 'title', 'priority_id', 'message', 'status_id'
        ];

        public function category()
        {
            return $this->belongsTo(Category::class);
        }

        public function priority()
        {
            return $this->belongsTo(Priority::class);
        }
        
        public function status()
        {
            return $this->belongsTo(Status::class);
        }        

        public function comments()
        {
            return $this->hasMany(Comment::class);
        }  
        
        public function user()
        {
            return $this->belongsTo(User::class);
        } 
}
