<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer_quality_of_work',
        'answer_quality_of_handover',
        'answer_communicating_well',
        'answer_being_a_good_listener',
        'answer_following_though',
        'answer_enjoying_indie',
        'answer_overseeing_work',
        'answer_being_a_mentor',
        'answer_engaging_in_learning',
        'answer_sharing_knowledge',
        'comment_quality_of_work',
        'comment_quality_of_handover',
        'comment_communicating_well',
        'comment_being_a_good_listener',
        'comment_following_though',
        'comment_enjoying_indie',
        'comment_overseeing_work',
        'comment_being_a_mentor',
        'comment_engaging_in_learning',
        'comment_sharing_knowledge',
        'answered_for',
        'for_user_id',
        'from_user_id',
    ];

    protected $casts = [
        'answered_for' => 'datetime',
    ];

    public function from()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'id');
    }
}
