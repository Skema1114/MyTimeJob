<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="assets/img/favicon.png">

  <title>SEG| Sistema de Estoque da Gastronomia</title>

  <!-- Bootstrap CSS -->
  <?= link_tag('assets/css/bootstrap.min.css')?>
  <!-- bootstrap theme -->
  <?= link_tag('assets/css/bootstrap-theme.css')?>
  <!--external css-->
  <!-- font icon -->
  <?= link_tag('assets/css/elegant-icons-style.css')?>
  <?= link_tag('assets/css/font-awesome.css')?>
  <!-- Custom styles -->
  <?= link_tag('assets/css/style.css')?>
  <?= link_tag('assets/css/style-responsive.css')?>
</head>

<body class="login-img3-body">
  <div class='container'>
    <?php echo $template['body']; ?>
  </div>
  <footer class="pull-left footer" style="position: absolute;bottom: 0px; width: 100%; text-align: center;z-index:-1">
    <p class="col-md-12">

      Copyright &COPY; 2019 <a href="http://www.missoesjr.com.br">Missões Júnior</a>
    </p>
  </footer>
  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-98821359-1', 'auto');
  ga('send', 'pageview');
  </script>
</body>

</html>