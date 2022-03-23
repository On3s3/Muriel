<?php 
    $idet=intval($_GET['idet']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<?php require('header.php'); ?>

    
    <div class=" rounded m-2  mb-4 row " role="main" >
               
            <div class="col-sm-3  border-end text-center m-4  ">
                <span class="m-2 text-dark  h-4">Menu</span>
                <ol>
                    <li> <a class="text-warning " href="listeEpreuve.php?idet=<?= $idet;?>">Epreuve</a> </li>
                </ol>
                  
            </div>

            <div class="col-sm-8 m-4 float-sm-left p-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus rem, mollitia consequatur aut soluta itaque tempore iure similique ducimus esse, facere voluptas vero ex non in ipsam doloremque odio at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus recusandae perspiciatis eum similique, autem assumenda possimus dolorum quae porro laborum velit illo veniam ipsa ipsam accusantium ullam deleniti odio in. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit ea, optio debitis ullam eius dicta, vel ex earum facere quia aspernatur quo eos est deleniti nesciunt saepe officiis quod unde.
            </div> 
            
            <div class="container-sm  d-flex justify-content-center">
            
            </div>
            
            <?php require('footer.php'); ?>

     </div>   
</body>
</html>
