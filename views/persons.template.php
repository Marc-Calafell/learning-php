<?php require 'partials/header.php' ?>


      <?php require 'menu.php' ?>

      <ul>
          <?php foreach ($persons as $person) : ?>
              <li>
                  <?= $person->LastName ?>
              </li>
          <?php endforeach;?>
      </ul>

<?php require 'partials/footer.php' ?>