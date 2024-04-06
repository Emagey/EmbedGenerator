<?php
if(isset($_GET['author'])){
  $author = $_GET['author'];
} else {
  $author = '';
}

if(isset($_GET['title'])){
  $title = htmlspecialchars($_GET['title']);
} else {
  $title = '';
}

if(isset($_GET['description'])){
  $description = htmlspecialchars($_GET['description']);
} else {
  $description = '';
}

if(isset($_GET['redirect'])){
  $redirect = htmlspecialchars($_GET['redirect']);
} else {
  $redirect = '';
}

if(isset($_GET['image'])){
  $image = htmlspecialchars($_GET['image']);
} else {
  $image = '';
}

if(isset($_GET['color'])){
  $color = htmlspecialchars($_GET['color']);
} else {
  $color = '5865f2';
}
?>
<meta content="<?php echo $title; ?>" property="og:title" />
<meta content="<?php echo $description; ?>" property="og:description" />
<meta content="<?php echo $redirect; ?>" property="og:url" />
<meta content="<?php echo $image; ?>" property="og:image" />
<meta content="<?php echo $author; ?>" property="og:site_name" />
<meta content="#<?php echo $color; ?>" data-react-helmet="true" name="theme-color" />
<?php
if(isset($_POST['gen'])){
  if(isset($_POST['author'])){
    $author = htmlspecialchars($_POST['author']);
  } else {
    $author = '';
  }

if(isset($_POST['title'])){
    $title = htmlspecialchars($_POST['title']);
  } else {
    $title = '';
  }

if(isset($_POST['description'])){
    $description = htmlspecialchars($_POST['description']);
  } else {
    $description = '';
  }

if(isset($_POST['image'])){
    $image = htmlspecialchars($_POST['image']);
  } else {
    $image = '';
  }

if(isset($_POST['color'])){
    $color = htmlspecialchars($_POST['color']);
  } else {
    $color = '5865f2';
  }

if(isset($_POST['redirect'])){
    $redirect = htmlspecialchars($_POST['redirect']);
  } else {
    $redirect = 'syss.eu.org';
  }

echo '<p>generated url is [.](https://syss.eu.org/embed/?author='.$author.'&title='.$title.'&description='.$description.'&image='.$image.'&color='.$color.'&redirect='.$redirect.')</p>';
}
?>
<h2>If u dont want one of the fields, just leave it blank</h2>
<form method="POST">
<input name="author" placeholder="author "/><br>
<input name="title" placeholder="title "/><br>
<input name="description" placeholder="description"/><br>
<input name="image" placeholder="image" /><br>
<input name="color" placeholder="color"/><br>
<input name="redirect" placeholder="redirect"/><br>
<button type="submit" name="gen">generate</button>
</form>
