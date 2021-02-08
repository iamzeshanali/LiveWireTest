<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
class Comments extends Component
{
    public $newComment;
    public $comments = [
        [
            'body' => 'Amet in amet laboris labore consectetur aliquip non voluptate. Laborum cupidatat deserunt in id veniam et sint id et aliquip est. Occaecat incididunt duis dolor minim ex aliqua sit. Id proident laboris nisi labore labore deserunt sint voluptate. Duis deserunt deserunt magna ut ullamco velit.
             Aliqua aliqua elit Lorem irure laboris incididunt. Ea nisi laboris sit in labore.
            Amet consequat anim et laboris cillum duis ullamco. Irure est voluptate nisi sint incididunt esse ut consectetur ex mollit voluptate minim. Excepteur est anim sint veniam incididunt adipisicing ut reprehenderit et. Labore laboris culpa culpa adipisicing et. Sit sunt voluptate consectetur magna id dolor est cillum ex.',
            'created_at' => '3 min ago',
            'author' => 'Zeeshan Ali'
        ]
    ];
    public function render()
    {
        return view('livewire.comments');
    }
    public function addComment(){
        if($this->newComment !== ""){
            array_unshift($this->comments, [
                'body' => $this->newComment,
                'created_at' => Carbon::now()->diffForHumans(),
                'author' => 'Junaid'
            ]);
            $this->newComment = "";
        }
        
    }
}
