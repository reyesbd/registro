<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
       <div class="row">
       <div class="col">
            <h2>Registro de talleres</h2>
            <form action="<?php echo site_url('home/alta'); ?>" method="POST"> 
                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="ntrol">No. Control</label>
                            <input type="text" class="form-control" id="ntrol"  name="ntrol">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="sem">Semestre</label>
                            <input type="text" class="form-control" id="sem" name="sem">
                        </div>

                        <div class="form-group col-md-5">
                            <label for="carrera">Carrera</label>
                            <select id="carrera" name="carrera"class="form-control">
                                <option value="0">Selecciona una carrera</option>
                                <option value="1">Ing. en Sistemas Computacionales</option>
                                <option value="2">Ing. Informática</option>
                                <option value="3">Ing. Bioquímica</option>
                            </select>
                        </div>                        
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="taller">Taller</label>
                            <select id="taller" class="form-control">
                                <option value="0">Selecciona un taller..</option>
                                <option value="1">Boostrap</option>
                                <option value="2">Jquery</option>
                                <option value="3">Laravel</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Correo Electrónico</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>       
       </div>
          
       </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>