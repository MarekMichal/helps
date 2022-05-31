<?php
require_once('conn.php');
include('header.php');
?>
<main class="container">
  <h1 class="m-4 text-uppercase" style="text-align: center">Articles</h1>

  <?php
  $page = isset($_GET["page"]) ? $_GET["page"] : "";
  if ($page < 1) {
    $page = 1;
  }

  for ($i = 0; $i < $page; $i++) {
    $a = 0 + 12 * $i;
    $b = 11 + 12 * $i;
  }

  $last = $conn->query("SELECT MAX(id) AS newest FROM articles");
  while ($newest = $last->fetch_assoc()) {
    $c = $newest["newest"] - $a;
    $i = $newest["newest"] - $b;
    $query1 = $conn->query("SELECT * FROM articles WHERE id BETWEEN '$i' AND '$c' ORDER BY Create_time DESC");
  }
  ?>
  <div class="container">
    <div class="row align-items-center">
      <?php
      while ($first_row = $query1->fetch_assoc()) {
      ?>
        <div class="col-md-4 col-sm-5 col-xs-7" style="text-align: center">
          <img src="images/<?php echo $first_row["Cover_image"] ?>" alt="<?php echo $first_row["Title"] ?>" style="width: 200px">
          <p><span style="font-size: 20px; font-weight: bold;">Title:</span> <?php echo $first_row["Title"] ?>
          <p><span style="font-size: 20px; font-weight: bold;">Autor:</span> <?php echo $first_row["Autor"] ?>
          <p><?php echo $first_row["Text"] ?>
        </div> 
      <?php
      }
      ?>
    </div>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="index.php<?php echo "?page=" . $page - 1; ?>" aria-label="Previous Page">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="index.php<?php echo "?page=" . $page + 1; ?>" aria-label="Next Page">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</main>