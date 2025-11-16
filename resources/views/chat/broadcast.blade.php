@php
    if (!isset($username) || !$username) {
        $username = 'unknown';
    }

    if (!isset($message)) {
        $message = '';
    }
@endphp

<div class="right message">
    <p>{{$message}}</p> 


    {{-- <p>{{$user_name}}</p> --}}
    <img src="https://i.pinimg.com/736x/98/1d/6b/981d6b2e0ccb5e968a0618c8d47671da.jpg" alt="Avatar"> <br>
    @if($username)
    <small class="username" style="margin-left: 67px; color: #B2B2B2;">{{$username}}</small>
@endif
  </div>
