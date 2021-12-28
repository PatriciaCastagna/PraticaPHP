<!doctype html>
<html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
           
          <!-- Bootstrap CSS -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">

           

          <title>Product Registration</title>

        </head>
        <body>
                

          <header class="cabecalho">
            <img class="cabecalho-img" src="img/icon.svg" alt="logo imagem compras">
            <nav class="cabecalho-menu">
              <a href="product.php" class="cabecalho-menu-item">Product</a>
              <a href="promotions.php" class="cabecalho-menu-item">Promotions</a>
              <a href="pesquisa.php" class="cabecalho-menu-item">Search</a>
              
            </nav>
          </header>

          <main class="conteudo">
          <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
              <h1 class="conteudo-principal-escrito-titulo">Vegan and Vegetarian Products</h1>
              <h2 class="conteudo-principal-escrito-subtitulo">Register your products and have control of your store</h2>
           
            </div>
            <img class="conteudo-principal-imagem" src="img/vegan4.jpg" alt="logo imagem veg">

          </section>
          </main>
      



          <div class="container">
            <div class="row">
              
                <h1 class="formulario-title">Registration</h1>
                <form action="cadastro_script.php" method="POST">
                  <div class="col-md-6">
                      <label for="nome" class="form-label">ID Product</label>
                      <input type="number" class="form-control" name="id">
                     
                    </div>
                    <div class="col-md-6">
                      <label for="produto" class="form-label">Name Product</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="">
                      <button type="button" class="btn btn-outline-secondary">Click Here</button>

                    </div>
                  </form>
                </div>
            </div>
          </div>




          

          <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
          -->


          <footer class="rodape">

          </footer>
        </body>
</html>