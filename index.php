<!DOCTYPE html>
<html>

<head>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

<h1>The title of the movie is called: <?php echo htmlspecialchars($_GET['title']); ?>.</h1>
<p>This movie was released in <?php echo htmlspecialchars($_GET['year']); ?>.</p>
<p>The gross revenue that this movie earned is about <?php echo htmlspecialchars($_GET['gross']); ?> dollars.</p>
<img src = "<?php echo $_GET['url']; ?>">
</body>
</html>