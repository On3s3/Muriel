<div class="m-4 pt-4 pb-4 row">

      <?php
      $liste = $bd->query("SELECT *
                                    FROM help, utilisateur
                                    WHERE help.idutil=utilisateur.idutil");
      while ($afficher = $liste->fetch()) { ?>
            <div class="col-3 shadow">
                  <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                              <span class="my-0 fw-normal">
                                    <img src="<?= $afficher['imghelp'] ?>" alt="image" class="" width="100%" height="150px">
                              </span>
                        </div>
                        <div class="card-body text-dark">
                              <span class="pricing-card-title mt-3">Demandeur :<?= $afficher['nomutil'] ?></span><br>
                              <span class="pricing-card-title mt-3">Beneficaire :<?= $afficher['beneficiaire'] ?></span>
                              <h5 class="card-title pricing-card-title mt-4"><?= $afficher['titre'] ?></h5>
                              <small class="fw-light mt-4 mb-4 text-center">
                                    <?= $afficher['description'] ?>
                              </small>
                              <div class=" row mt-4 ">
                                    <div class="col-6 text-success">Montant total : <?= $afficher['montant'] ?> $</div>
                                    <div class="col-6 text-danger">Montant actuel : <?= $som = 0;  ?>$</div>
                              </div>
                              <div class="mt-4">
                                    <a href="logindonateur.php" class="w-100 btn btn-lg btn-outline-danger">Participer</a>
                              </div>
                        </div>
                  </div>
            </div>
      <?php }
      ?>
</div>
