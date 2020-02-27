<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Soundboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
        <div class="title">
            <div class="text-center">
                <h1>Soundboard</h1>
            </div>
        </div>

    <div class="container">


        <div class="row">
            <div class="col-md-3 col-xs-6">
                <audio preload="auto" id="sound1">
                    <source src="/sounds/incrivel.mp3" type="audio/mp3">
                </audio>
                <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound1').play()">INCRÍVEL!</button>
            </div>
            <div class="col-md-3 col-xs-6">
                <audio preload="auto" id="sound2">
                    <source src="/sounds/last_one.mp3" type="audio/mp3">
                </audio>
                <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound2').play()">LAST ONE</button>
            </div>
            <div class="col-md-3 col-xs-6">
                <audio preload="auto" id="sound3">
                    <source src="/sounds/sim.mp3" type="audio/mp3">
                </audio>
                <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound3').play()">SIM</button>
            </div>
            <div class="col-md-3 col-xs-6">
                <audio preload="auto" id="sound4">
                    <source src="/sounds/passo.mp3" type="audio/mp3">
                </audio>
                <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound4').play()">PASSO...</button>
            </div>
            <div class="col-md-3 col-xs-6">
                <audio preload="auto" id="sound5">
                    <source src="/sounds/sem_condicoes.mp3" type="audio/mp3">
                </audio>
                <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound5').play()">NÃO HÁ CONDIÇÕES!</button>
            </div>
            <div class="col-md-3 col-xs-6">
                <audio preload="auto" id="sound6">
                    <source src="/sounds/nocao.mp3" type="audio/mp3">
                </audio>
                <button type="button" class="btn btn-lg btn-block" onclick="document.getElementById('sound6').play()">NOÇÃO?</button>
            </div>
        </div>

    </div>

    <footer>
        <div class="col-md-offset-9 col-xs-offset-9">
            <p class="text">Marco Brito™</p>
        </div>
    </footer>
</body>

</html>

<style>
/* settings for tags */
html {
  position: relative;
  min-height: 100%; }

body {
  background-color: #000000;
  margin-bottom: 60px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; }

footer {
  position: absolute;
  bottom: 0;
  height: 60px;
  width: 100%;
  background-color: #000000;
  border-top: 1px solid;
  border-color: red; }

h1 {
  color: red;
  border-color: #d35400;
  font-size: 4em;
  margin-bottom: 1em; }

.btn {
  background-color: #000000;
  color: red;
  border-color: red;
  border: 1px solid; 
  outline: none}
  .btn:hover {
    background-color: red;
    border-color: red;
    color: #000000; }

.col-xs-6 {
  margin-bottom: 1em; }

.text {
  color: red; }
  .text a {
    color: red;
    text-decoration: underline; }

footer .text{
    margin-left: 40px;
    margin-top: 10px;
}

    .container{
        margin: auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    height: max-content;

    }

    .title{
        text-align: center;
        margin-top: 20px;
    }

    .container .row{
        justify-content: center;
    }

    .btn{
        min-width: min-content;
        outline: 0!important;
    }

    @media all and (max-width: 758px){
        .container{
            height: calc( 100% - 250px );
            overflow: auto;
        }
    }
</style>