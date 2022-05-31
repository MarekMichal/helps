<!DOCTYPE html>
<html>
<title>Create Article</title>
  <body>
  <?php include('header.php');?>
  <?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
    <main>
      <form action="createArticle_script.php" method="post">
        <div style="text-align: center">
          <h1>Create Article</h1>
          <hr>
          <p><label for="Title"><b>Title</b></label>
            <br><input type="text" name="Title" id="Title" required>

          <p><label for="Autor"><b>Autor</b></label>
            <br><input type="text" name="Autor" id="Autor" required>

          <p><label for="Text"><b>Text</b></label>
            <br><textarea style="width: 1000px" rows="20" name="Text" id="Text"></textarea>

          <p><label for="Cover_image"><b>Cover_image</b></label>
            <br><input type="text" name="Cover_image" id="Cover_image" required>  

          <p><button type="submit" class="btn btn-secondary">Create</button>
          <p class="text-danger"><?php echo $message ?></p>
        </div>
      </form>
    </main>
  </body>
</html>