<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl"/>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php echo $description?>" />
    <link type="image/x-icon" href="/media/img/favicon.ico" rel="shortcut icon" />
    <title><?php echo 'Kohana - '.$title ?></title>
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>

  </head>
  <body>
      <div id="top">
          <div class="w1000 ofh">
              <h1><a href="/" title="Title">Title</a></h1>
          </div>
      </div>
      <div class="w100 bg-white">
          <div class="w1000 ofh mh600">
              <div class="w30 fll mh600 bg-dadada">
                  <h2>Menu:</h2>
                  <a href="/">Home</a><br />
                  <a href="/article">Articles</a><br />
              </div>
              <div class="w70 fll mh600 bg-f1f1f1">
                  <?php include Kohana::find_file('views', $content);?>
              </div>
          </div>
      </div>
      <div class="w1000 ofh">
          <div id="footer">Footer &copy; 2011 </div>
      </div>
  </body>
</html>