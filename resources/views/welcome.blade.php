<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YOLoud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
     
        <link rel="manifest" href="/manifest.json">
        {{-- <script src="{{asset('js/service-worker.js')}}"></script> --}}
        <!-- Styles -->


    <style>
        a:hover{
            text-decoration: none
        }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', bold;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .add-to {
			background-color: #E02D44; 
			width: 30%;
            position:fixed;
            top:auto;
            right:auto;
            left:auto;
            bottom:0;
		} 
		.add-to-btn {
		
			border: none; 
			outline:none; 
			font-weight: bold; 
			width: 100%; 
			height: 50px; 
		} 
        

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    YoLoud
                </div>
            </div>
            <div class="add-to">
                <button class="add-to-btn" style="color: black">Add to home screen</button>

            </div>
         
           

         
        </div>
    </body>
    <script type="text/javascript">
        if ('serviceWorker' in navigator) {
          window.addEventListener('load', function() {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
              // Registration was successful
              console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
              // registration failed :(
              console.log('ServiceWorker registration failed: ', err);
            });
          });
        }
    
        let deferredPrompt;
        var div = document.querySelector('.add-to');
        var button = document.querySelector('.add-to-btn');
        div.style.display = 'none';
    
        window.addEventListener('beforeinstallprompt', (e) => {
          // Prevent Chrome 67 and earlier from automatically showing the prompt
          e.preventDefault();
          // Stash the event so it can be triggered later.
          deferredPrompt = e;
          div.style.display = 'block';
    
          button.addEventListener('click', (e) => {
          // hide our user interface that shows our A2HS button
          div.style.display = 'none';
          // Show the prompt
          deferredPrompt.prompt();
          // Wait for the user to respond to the prompt
          deferredPrompt.userChoice
            .then((choiceResult) => {
              if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
              } else {
                console.log('User dismissed the A2HS prompt');
              }
              deferredPrompt = null;
            });
        });
        });
    
    </script>
      
      
</html>
