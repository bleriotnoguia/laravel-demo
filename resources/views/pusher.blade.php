<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('05cb64d8022e9d4227b9', {
      cluster: 'mt1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {
      alert(JSON.stringify(data));
    });
    // channel.bind('new-event', function(data){
    //   alert('Mr. '+data.name+' : '+data.message);
    // });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>form-submitted</code>.
  </p>
</body>
