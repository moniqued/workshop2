<?php 
$search_term = (isset($_POST['search-term']))? $_POST['search-term'] : 'socialmedia';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Looking at tweets on the topic off <?=$search_term?></title>
<link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div id="frame">
<<<<<<< HEAD
  <div class="title">Hi Monique</div>
=======
  <div class="title">Hi monique</div>
>>>>>>> 511dbbd7074e28f6600ab3462d4b05e73f69b819
  <form action="/" method="post">
    Search for a term on twitter and see the results!<br><br>
    <input type="text" name="search-term" value="<?=$search_term?>">
    <input type="submit" value="Search">
  </form>
  <div class="twitter">
    <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
    <script>
    new TWTR.Widget({
      version: 2,
      type: 'search',
      search: '<?=$search_term?>',
      interval: 30000,
      title: '<?=ucfirst($search_term);?> conversations',
      subject: 'Who\'s talking about <?=ucfirst($search_term);?>',
      width: 'auto',
      height: 220,
      theme: {
        shell: {
          background: '#0f75bc',
          color: '#ffffff'
        },
        tweets: {
          background: '#ffffff',
          color: '#000000',
          links: '#4750ff'
        }
      },
      features: {
        scrollbar: true,
        loop: false,
        live: false,
        behavior: 'all'
      }
    }).render().start();
    </script>
  </div>
</div>
</body>
</html>
