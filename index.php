<?php
// This is the home page of our application
?>


<!doctype html>
<html>
<<<<<<< HEAD
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "please work better this time";
<<<<<<< HEAD
<<<<<<< HEAD
        echo "hey it's aimi here!";
        echo "hey it's aimi here!";
        echo "hope this works....";
        echo "I'm here!";
        echo "Jenny"
=======
        echo "Boo!";
=======
        echo "Boo!";
        
>>>>>>> master
        
        
>>>>>>> master
      ?>
    </body>
=======
<head><title>Women in Tech Blog</title></head>

<body>

<h1>Women in Tech Blog</h1>

<?= display('user', ['heading' => 'User', 'users' => $users, 'blog' => $blog]); ?>
<?= display('items', ['heading' => 'Blog', 'blog' => $blog]); ?>
<?= display('users', ['heading' => 'All Users', 'users' => $users]); ?>

<?php if($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
	<?= display('newitem');?>
<?php else: ?>

<?php echo display('item', \Blog\App\add_item($blog, $_POST) + ['heading' => 'New Item']); ?>

<?php endif; ?>

</body>
<<<<<<< HEAD
>>>>>>> master
=======

>>>>>>> origin/Jen
</html>


