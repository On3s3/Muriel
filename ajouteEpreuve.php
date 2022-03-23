
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>

<?php
require('connexion_bd.php');

?>
 
    <div class="container mt-3 w-25 " >
        <form class="border border-success p-3 " action="" method="post" enctype="multipart/form-data">
            <span class="text-center h5 m-3">Nouveau</span>
            <div class="mt-4 mb-2" aria-required="true">
                <label for="niveau">Choisir le niveau :</label>
                <select name="niveau" class="form-control " required>
                    <!-- <option value="">Niveau</option> -->
                    <option value="1ere">Annee I</option>
                    <option value="2eme">Annee II</option>
                    <option value="examen">Examen </option>
                </select>
            </div> 

            <div class="mt-4 mb-2">
                <label for="periode">Choisir la periode:</label>
                <select name="periode" class="form-control" required>
                    <option value="">Periode</option>
                    <option value="td">Travaux dirigés </option>
                    <option value="devoir1">devoir I</option>
                    <option value="partiel1">Partiel 1</option>
                    <option value="devoir2">Devoir II</option>
                    <option value="partiel2"></option>
                </select>
            </div>

            <div class="mt-2 mb-2">
                <label for="epreuve">Ajouter le fichier :</label>
                <input type="file" required class="form-control"  name="fichier">
            </div>
            <div class="row">
               <div class="col-3"><button name="valider" type="submit" class="btn btn-dark mt-2 p-2">ENVOYER</button></div>
               <div class="col-1"></div> <button name="Annuler" type="reset" class="btn btn-warning mt-2 p-2">ANNULER</button></div>
            </div>
        </form>
    </div>

    <?php  

        require('connexion_bd.php');
    
        if (isset($_POST['valider'])) {
            
               // $design = htmlspecialchars($_POST['epreuve']);
                $niveau = htmlspecialchars($_POST['niveau']);
                $periode = htmlspecialchars($_POST['periode']);
                
                
                $document=[
                    'fichier_src'=> 'fichiers/'.$_FILES['fichier']['name'],
                    'fichier_file'=> $_FILES['fichier']['tmp_name']
                ];

                $mondocument=[

                    'fichier_src'=>$document['fichier_src'],
                ];

                move_uploaded_file($document['fichier_file'], $document['fichier_src']); 
            


                $insert_inscrit = $connexion_bd -> prepare("INSERT INTO epreuve( periode, niveau, fichiers) VALUES (?,?,?)");
                $insert_inscrit -> execute(array( $periode,$niveau, $document['fichier_src']));
                
            } 
    ?>
    
</body>
</html>