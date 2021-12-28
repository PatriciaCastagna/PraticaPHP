<!doctype html>
<html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
           
          <!-- Bootstrap CSS -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">

           

          <title>Edit</title>
          
        </head>
        <body>

          <?php  

          if(isset($_POST['busca'])){
            $pesquisa = $_POST['busca'];

          }else{

            $pesquisa = '';


          }

          //include "conexao.php";

          //$sql = "SELECT * FROM Product WHERE name LIKE '%pesquisa%'";

          //$dados = mysqli_query($conn, $sql);

          //while (mysqli_fetch_assoc($dados)){
            //foreach($linha as key =>value){
                  //echo "key: $value";<br>
          //}


          //}


          ?>

          <div class="container">
            <div class="row">
              <div class="col">


              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" action="pesquisa.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Name" aria-label="Search" name="busca">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
              </nav>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">ID</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Product</th>
                            <td>1</td>
                            <td><a href="#" class="bnt bnt-sucess">Edit Product </a></td>
                            <td><a href="#" class="bnt bnt-danger">Delete Product</a></td>
                            
                           
                          </tr>
                          
                        </tbody>
                      </table>

             <a href="index.php" class="bnt bnt-info">voltar para inicio </a>
           </div>  
         </div>
       </div>    
                

          
     </body>
</html>