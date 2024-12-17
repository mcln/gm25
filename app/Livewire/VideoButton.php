<?php

namespace App\Livewire;

use Livewire\Component;

class VideoButton extends Component
{
    public function openVideo()
    {
        $videolink1 = 'https://www.youtube.com/embed/bxbFciT_smA?autoplay=1';
        $videolink2 = 'https://www.youtube.com/embed/-ogAmFE5vaE?autoplay=1';
        $videolink3 = 'https://www.youtube.com/embed/yQ6jWs9MbnA?autoplay=1';
        $iframe = <<<IFRAME
        <iframe width="100%" height="100%" src=$videolink3 title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; mute" allowfullscreen></iframe>
        IFRAME;

        /* $iframe = <<<IFRAME
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-ogAmFE5vaE?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; mute" allowfullscreen></iframe>
        IFRAME; */

        $this->dispatch('open-video', ['iframe' => $iframe]);
    }

    public function render()
    {
        return view('livewire.video-button');
    }
}
