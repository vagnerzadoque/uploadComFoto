<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<body>
    

        <div class="container">

                <div class="row">

                    <div class="col"></div>


                    <div class="col ">
                    <div class="formDiv">
                        <div class="hid">.</div>
                    <form method="post" id="formu" >

                        <div class="imgDiv">
                            <img style="width:99px; height: 99px;" src="" alt="">
                        </div> 

                                <div class="form-group">
                                   <input hidden="true" name="foto" type="file" class="form-control-file" id="uplo">
                                </div>

                            <div class="form-group">
                                <div class="progress">
                                    <div id="prog" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">70%</div>
                                </div>
                            </div>

                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
                         </div>


                        <div class="form-group">
                           <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>

                        <div class="form-group">
                           <input type="password" name="senha" class="form-control" id="exampleInputPassword2" placeholder="senha">
                        </div>
                        

                        <button id="sub" type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>

                    </div>
                    
                    </div> <!-- col form -->



                    <div class="col"></div>

                </div> <!-- row -->



        </div> <!-- container -->







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script src="js/JQform.js"></script>
    <script src="js/js.js"></script>
</body>
</html>