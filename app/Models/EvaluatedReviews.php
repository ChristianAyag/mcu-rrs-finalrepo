<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluatedReviews extends Model
    {
        use HasFactory;

        protected $table = 'tbl_evaluated_reviews';

        protected $fillable = [
            'protocol_ID',
            'reviewer_ID',
            'status',
            'completed_at',
        ];

        public function reviewer()
        {
            return $this->belongsTo(User::class, 'reviewer_ID', 'user_ID');
        }

        public function protocol()
        {
            return $this->belongsTo(Protocol::class, 'protocol_ID', 'protocol_ID');
        }
    }

