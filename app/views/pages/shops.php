<?php require APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  </head>

  <?php require APPROOT . '/views/inc/navbar.php';?>
  <body>
  <section class="section">
    <div class="container">
  
    
    <?php require APPROOT . '/views/inc/shop_table.php'; ?>

    </div>
  </section>
  </body>
</html>
<?php require APPROOT . '/views/inc/footer.php'; ?>
