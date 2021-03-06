<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  Implementasi Aplikasi Wisuda

                  <div id="container">

                        <input type="text" name="text" id="namawisudawan" >

                        <button id="gspeech" class="say">Say It</button>
                        <audio id="player1" src="" class="speech" hidden></audio>
                  </div>

                </div>
                <form method="get" action="ambildatawisuda" id="formdatawisuda">
                    <input type="text" name="no" id="next" value="{{$data->no}}">
              <button type="submit" >Next </button>
              </form>
                <div class="links">
                    <a href="https://laravel.com/docs" >Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js" ></script>
        <script type="text/javascript" src="js/responsivevoice.js"></script>
        <script>
        $('#formdatawisuda').on('submit',function(e){
          e.preventDefault();

       $.ajax({
         type: $(this).attr('method'),
         url: $(this).attr('action'),
         data: $('#formdatawisuda').serialize(),

         success:function(data){
           var nomor = "Nomor ";
           var spasi = " ";
           var  nama = data.nama;
           var  no = data.no;
           var judul = data.judul;
           var namano = nomor+no+spasi+nama+spasi+judul;
           if (data.nama == null){
             $('#namawisudawan').val('Terima Kasih Andrea Christian dan Bagus Jati Kuncoro');
           }else {
                $('#namawisudawan').val(namano);
           }

           $('#next').val(data.no);
           var text = $('input[name="text"]').val();
           responsiveVoice.speak("" + text +"","Indonesian Female");
           console.log(data);
         },error:function(data){

         }
       });
   });

        </script>


        <script>
        $(document).ready(function(){
          $('#gspeech').on('click', function(){
          var text = $('input[name="text"]').val();
          responsiveVoice.speak("" + text +"","Indonesian Female");
          });
          });
        </script>
    </body>
</html>
