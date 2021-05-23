<?php
  $resultado=mysqli_query($conectar,"SELECT * FROM post ORDER BY id desc");
  $linhas=mysqli_num_rows($resultado);

  while ($linhas = mysqli_fetch_array($resultado)) {
  echo "<section id='call-to-action' class='wow fadeIn'>";
  echo "<div class='container'>";
  echo"<h3 class='fa fa-fa-globe'></h3>";
  echo"</section><br>"
  echo"<div class='noticias-header'>";
  echo"<div class='container'>";
  echo"<header class='section-header wow fadeInUp'>";
  echo"<h3></h3>";
  echo"<p></p>";
  echo"</header>";
  echo"</div>";
  echo"</div>";
  echo"<section id='noticias'>";
  echo"<div class='col-sm-8 blog-main'>";
  echo"<div class='noticias-post'>";
  echo"<h2 class='noticias-post-title'><a href='#'>".$linhas['titulo']."</a></h2>";
  echo"<img class='img-thumbnail' alt='Responsive image' src='img/".$linhas['imagem']."'>";
  echo"<p class='noticiais-post-meta'><i class='fa fa-edit'></i>".$linhas['publicado']"</p>";
  echo"<footer class='entry-meta'>";
  echo"<span class='entry-author'><i class='fa fa-pencil'></i> " . $linhas['autor'] ."</span>";
  echo"<span class='entry-category'><i class='fa fa-folder-o'></i> " .$linhas['categoria']. "</span>";
  echo"</footer>";
  echo"<p> Postado em ".date('d-m-Y', strtotime($linhas['data']))."</p>";
#  echo "<a class='btn btn-primary' href='#'>Saiba mais</a>";
  echo"</div>";
  echo"</header><br>";
  echo"<div class='entry-content'>";
  echo"<p>".$linhas['conteudo_completo']."</p>";
  echo"</div><br>";
  echo"</div>";
  echo"</div>";
}

?>

