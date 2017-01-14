<?php
    include 'Partials/header.php';
if(isset($_SESSION["admin"])){

$connection = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=halloffamedb', 'root', '');  $connection -> exec("set names utf8");
  $query = $connection -> query("select * from celeb where id = ".$_GET["id"]);
  foreach ($query as $i) {
    $edit = $i;
  }
    if(!isset($edit)) echo("<script>alert('No celeb with that id!');
        window.location.href='index.php';
        </script>");
?>
<div class = "container">
            <div class = "row">
                <div class = "heading"><?php echo($edit["name"]);?></div>
            </div>
            <div class = "mainCel">
                <img style="width:180px; height:180px; display:block; float:left;" alt="noImage" src='img/<?php echo($edit["file"]);?>'/>
                <p>
                    <?php echo($edit["description"]);?>
                <p>
            </div>
        </div>
        <div class = "row">
        <div class = "contact_form">
          <form action='Partials/addComment.php?celeb_id=<?php echo($_GET['id']);?>' method='post' enctype="multipart/form-data">
            <input type='text' name = "comment_name" id = "comment_name" placeholder="Name" required>
            <textarea name = "comment_text" id = "comment_text"  required>Comment</textarea>
            <button type="submit">Comment</button>
          </form>
        </div>
      </div>
        <div class = "row" style="text-align:center">
          <h3>COMMENTS</h3>
          <?php
              $comments = $connection -> query("select name, comment from comment where celeb_id =".$_GET["id"]);
              foreach ($comments as $i) {
                echo("Name = ".$i["name"]."<br>Comment = ".$i["comment"]."<br><br>");
              }
           ?>
        </div>
<?php
}else{
    echo("Access denied!");
}
    include 'Partials/footer.php';
?>
