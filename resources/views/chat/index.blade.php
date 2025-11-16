<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chat Laravel Pusher | Edlin App</title>
    <link rel="icon" href="https://assets.edlin.app/favicon/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JavaScript -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- End JavaScript -->

    <!-- CSS -->
    <link rel="stylesheet" href="/chat.css">
    <!-- End CSS -->

</head>

<body>
  <form>
    <div class="chat">
   
            <!-- Header -->
            <div class="top">
              <img src="https://i.pinimg.com/736x/98/1d/6b/981d6b2e0ccb5e968a0618c8d47671da.jpg" alt="Avatar" style="width: 170px;">

                <div>
                  <input type="text" id="username" name="username" placeholder="Enter username..."
                  autocomplete="off">
                    
                    <small>Online</small>
                </div>
            </div>
            <!-- End Header -->

            <!-- Chat -->
            <div class="messages">
                @include('chat.receive', ['message' => "Hey! What's up!  👋"])
                @include('chat.receive', [
                    'message' => 'Ask a friend to open this link and you can chat with them!',
                ])
            </div>
            <!-- End Chat -->

            <!-- Footer -->
            <div class="bottom">

                <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
              
                <button type="submit"></button>

            </div>
     
        <!-- End Footer -->

    </div>
  </form>
</body>

<script>
    const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
        cluster: 'ap2'
    });
    const channel = pusher.subscribe('public');

    //Receive messages
    channel.bind('chat', function(data) {
        $.post("/receive", {
                _token: '{{ csrf_token() }}',
                message: data.message,
            })
            .done(function(res) {
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
            });
    });

    //Broadcast messages
    $("form").submit(function(event) {
        event.preventDefault();


        $.ajax({
            url: "/broadcast",
            method: 'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data: {
                _token: '{{ csrf_token() }}',
                username: $("form #username").val(), // Send username
                message: $("form #message").val(),
            }
        }).done(function(res) {
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
</script>

</html>
