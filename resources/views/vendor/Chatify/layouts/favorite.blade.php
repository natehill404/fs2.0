<div class="favorite-list-item">
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
         @if($user->image)
         style="background-image: url('{{ asset('storage/images/users/'.$user->image) }}');"
         @elseif($user->gender === "male")
         style="background-image: url('{{asset('img/profile/male.png')}}');"
         @elseif($user->gender === "female")
         style="background-image: url('{{asset('img/profile/female.png')}}');"
         @else
         style="background-image: url('{{asset('img/profile/default.png')}}');"
        @endif
    >
    </div>
    <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
</div>
