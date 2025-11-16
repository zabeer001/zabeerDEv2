@php
    if (!isset($username) || !$username) {
        $username = 'unknown';
    }

    if (!isset($message)) {
        $message = '';
    }
@endphp

<div class="left message">
    <img src="https://i.pinimg.com/736x/98/1d/6b/981d6b2e0ccb5e968a0618c8d47671da.jpg" alt="Avatar">
    <p>{{ $message }} </p> <br>
    <small class="username" style="margin-left: 67px; color: #B2B2B2;">{{$username}}</small>
    
</div>
