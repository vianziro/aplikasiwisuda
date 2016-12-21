<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplikasi Pemanggilan Wisuda Otomatis</title>



        <!-- Styles -->
        <style>
            #header{
                height: 240px;
                width: 100%;
                padding: 0 auto;
                background:url(../images/Modern-Wallpaper-3BD.jpg); 
                position: relative;
                background-position: center;
            }
            .nama{
                font-family: raleway; 
                color: white; 
                position: absolute; 
                left: 120px; 
                top: 190px;
                font-size: 35px;

            }
            .nim{
                font-family: raleway; 
                color: white; 
                position: absolute; 
                right: 170px; 
                top: 190px;
                font-size: 35px;
            }
            .judul{
                position: relative;
                font-family: AmarilloUSAF;
                text-align: center;
                font-size: 30px;
                color: white;
                top: 10px;
            }
            #foto{
                position: absolute;
                left: 50%;
            }
            .bulat{
                position: relative;
                left: -50%;
                margin-top: -50%;
                border-radius: 50%;
                background-size: contain;
                width: 200px;
                height: 200px;
                overflow: hidden;
                justify-content: center;
                box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -webkit-box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -moz-box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -webkit-transition: all ease-in .2s;
                -moz-transition: all ease-in .2s;
                -o-transition: all ease-in .2s;
                -ms-transition: all ease-in .2s;


            }
            .bulat img{
                width: 100%;
                height: auto;

            }
            .data{
                position: absolute;
                font-family: raleway;
                color: #2c2d33;
                left: 90px;
                font-size:22px;
            }
            /*.menu
            {
                position: absolute;
                top: 330px;
                width: 10px;
                background-color: #80D3EE;
                height: 280px;
                right: 49.55%;
            }*/
            #tengah{
                position: absolute;
                left: 450px;
            }
            .icon img{
                width: 100%;
                height: auto;

            }
            .icon{
                position: relative;
                left: -50%;
                border-radius: 50%;
                width: 55px;
                height: 55px;
                overflow: hidden;
                justify-content: center;
                box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -webkit-box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -moz-box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -webkit-transition: all ease-in .2s;
                -moz-transition: all ease-in .2s;
                -o-transition: all ease-in .2s;
                -ms-transition: all ease-in .2s;

            }
            .fakultas{
                margin-top: 110px;
            }
            .prodi{
                margin-top: 70px;
            }
            .ipk{
                margin-top: 70px;
            }
            .skripsi img{
                width: 100%;
                height: auto;

            }
            .skripsi{
                position: absolute;
                margin-top:160px;
                left: 40%;
                border-radius: 50%;
                width: 120px;
                height: 120px;
                overflow: hidden;
                justify-content: center;
                box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -webkit-box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -moz-box-shadow: 0 0 0px 10px rgba(0, 167, 221, 0.5);
                -webkit-transition: all ease-in .2s;
                -moz-transition: all ease-in .2s;
                -o-transition: all ease-in .2s;
                -ms-transition: all ease-in .2s;

            }
        </style>
        <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css"> 
        <link rel="stylesheet" type="text/css" href="../js/Semantic-UI-CSS-master/semantic.css"> 
        <script src="../js/Semantic-UI-CSS-master/semantic.js"></script>
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
                <center><img src="images/untan.png" width="70px;"></br></center>
                Wisudawan Universitas Tanjungpura Periode 2016/2017
            </div>
        </div>
        <div id="foto">
            <div class ="bulat">
                    <img  src="images/IdFC_gal_13092013_114803.jpg">
            </div>
        </div>
        
            <div class="menu"></div>
            
        <div id="tengah">
            <div class ="icon fakultas">
                <img  src="images/fakultas.png">
            </div>
            <div class ="icon prodi">
                <img  src="images/prodi.png">
            </div>
            <div class ="icon ipk">
                <img  src="images/ipk.png">
            </div>
        </div>
        <div class ="skripsi">
                <img  src="images/skripsi.png">
        </div>
        <div id="content">
        
            <div class="nama">
                Bagus Jati Kuncoro
            </div>
            <div class="nim">
                H1051131061
            </div>
            <div class="ui big label">
               Cumlaude
            </div>
            <div style="width: 340px;height: auto; position: absolute; left: 55px; top: 293px;" class="ui teal inverted piled raised segment">
              <h5 class="ui header">Fakultas</h5>
              <p style="font-size: 16px">Matematika dan <b>Ilmu Pengetahuan Alam</b></p>
            </div>
            <div style="width: 280px;height: auto; position: absolute; left: 115px; top: 420px;" class="ui green inverted piled raised segment">
              <h5 class="ui header">Prodi dan Angkatan</h5>
              <p style="font-size: 16px">Sistem Komputer <b>2013</b></p>
            </div>
            <div style="width: 200px;height: 75px; position: absolute; left: 193px; top: 547px;" class="ui blue inverted piled raised segment">
              <h4 class="ui header">IPK</h4>
              <p style="font-size: 20px">7. <b>86</b></p>
            </div>
            <div style="width: 600px;height: auto; position: absolute; right: 50px; top: 380px;" class="ui red tetriary piled raised segment">
              <h3 class="ui header">Skripsi</h3>
              <p style="font-size: 16px">"Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque."</p>
            </div>
            <!-- <div class="data">
                <ul>
                    <li>Fakultas Ilmu Komputer</li></br>
                    <li>Prodi Sistem Komputer</li></br>
                    <li>Angkatan 2013</li>
                    <li>judul : <i>asfasfwsfdfgfdsgdfgsfgsdgesgfsd</i></li>
                </ul>
                <strong style="left:40px;font-size: 50px;position: absolute; ">IPK : 4.00 </strong>   <pre>cumlaud</pre>        
            </div> -->
            
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
