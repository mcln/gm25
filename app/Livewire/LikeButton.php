<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{
    public $exercise;
    public $isLiked;
    public $showAlert;

    public function mount($exercise)
    {
        $this->exercise = $exercise;
        $this->isLiked = $exercise->exercise_likes()->where('user_id', auth()->id())->exists();
    }

    public function toggleLike()
    {
        if (auth()->guest()) {
            $this->showAlert = true;
            return;
        }
    
        if ($this->isLiked) {
            $this->exercise->exercise_likes()->where('user_id', auth()->id())->delete();
            $this->exercise->load('exercise_likes');
            $this->isLiked = false;
            $this->exercise->decrement('likes');
        } else {
            $this->exercise->exercise_likes()->create(['user_id' => auth()->id()]);
            $this->exercise->load('exercise_likes');
            $this->isLiked = true;
            $this->exercise->increment('likes');
        }
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}