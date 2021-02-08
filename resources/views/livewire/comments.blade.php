<div style="text-align:center">
    <h2>Comments</h2>
    <!-- <div>
        <input 
            type="text" name="search" id="" placeholder="What's in your mind." 
            style="width:47%; padding:10px; border-radius:4px; border: 1px solid #ccc;"
            wire:model.lazy="newComment"
        >
        <button 
            style="padding-inline:15px; padding-block:8px; background-color:blue; color:white;border-radius:4px"
            wire:click="addComment"
            >
            Add
        </button>    
    </div> -->

    <form wire:submit.prevent="addComment">
        <input 
            type="text" name="search" id="" placeholder="What's in your mind." 
            style="width:47%; padding:10px; border-radius:4px; border: 1px solid #ccc;"
            wire:model.lazy="newComment"
        >
        <button 
            style="padding-inline:15px; padding-block:8px; background-color:blue; color:white;border-radius:4px"
            type="submit"
            >
            Add
        </button>    
    </form>
    @foreach($comments as $comment)
    <div style="border-radius:4px; border: 1px solid #ccc; text-align:left; width:800px; margin-inline:auto; margin-top:20px;">
        <div style="padding-inline:20px;">
            <h4>{{$comment['author']}} <small style="padding-inline:20px;">{{$comment['created_at']}}</small></h4>
            <p>
            {{$comment['body']}}
            </p>
        </div>
    </div>
    @endforeach
</div>
