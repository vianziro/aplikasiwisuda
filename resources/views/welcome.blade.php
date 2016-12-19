<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



        <!-- Styles -->
        <style>
            #header{
                height: 300px;
                width: auto; 
                background-color:#151c4b; 
                position: relative;
            }
            .nama{
                font-family: raleway; 
                color: white; 
                position: absolute; 
                left: 120px; 
                top: 230px;
                font-size: 50px;

            }
            .judul{
                position: relative;
                font-family: AmarilloUSAF;
                text-align: center;
                font-size: 40px;
                color: white;
                top: 10px;
            }
            .foto{
                position: absolute;
                right: 200px;
                top: 200px;
            }
            .data{
                position: absolute;
                font-family: raleway;
                color: #2c2d33;
                left: 90px;
                font-size:22px;
            }

        </style>
    </head>
    <body>
  <!--       <div class="flex-center position-ref full-height">
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
 -->


        <!-- <p style="border: solid 0px #eceff5; background: #29447E; padding: 10px; margin: 0; text-align: justify; line-height: 23px; color: white; font-size: 18px"></p> -->

        <div id="header">
            <div class="judul">
                <img src="images/untan.png" width="90px;"></br>
                Wisudawan Universitas Tanjungpura Periode 2016/2017
            </div>
            <div class="foto">
                <img src="images/IdFC_gal_13092013_114803.jpg" width="300" height="auto">
                <button>next</button>
            </div>
            <div class="nama">
                <b>Bagus Jati Kuncoro</b>
            </div>
        </div>
        <div id="content">
            <div class="data">
                <ul>
                    <li>H1051131061</li><br>
                    <li>Fakultas Ilmu Komputer</li></br>
                    <li>Prodi Sistem Komputer</li></br>
                    <li>Angkatan 2013</li>
                    <li>judul : <i>asfasfwsfdfgfdsgdfgsfgsdgesgfsd</i></li>
                </ul>
                <strong style="left:40px;font-size: 50px;position: absolute; ">IPK : 4.00 </strong>           
            </div>
            <pre>cumlaud</pre>
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
