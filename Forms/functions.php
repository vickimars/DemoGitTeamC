<?php
/*
 * Application functions: create, read, update, delete
 * get_post_list, get_user_list, get_user, get_user_id
 * add_user, add_post (includes update)
 * delete_post, delete_user
 */

function get_post_list() {
include 'connection.php';
  
    try {
    return $db->query('SELECT post_id, title, post, author, username, date FROM posts');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return array();
    }
}

function get_user_list() {
    //include 'connection.php';
    
    try {
    return $db->query('SELECT id, username, pword, email, user_date, user_level FROM users');
    //userdate to add to db?
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return array();
    }
}



//updated Get functions (AE) not working yet
function get_user($username) {
include 'Forms/connection.php';
    
    try {
    $results = $pdo->prepare("SELECT email, username, password FROM users WHERE username = ?");
    $results->bindParam(1, $username, PDO::PARAM_STR);
    


    $results->execute();
    
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
   $stmt = $results->fetch(PDO::FETCH_ASSOC);
    return $stmt;
}

    //$results->bindParam(':username', $username);
//where userName = '$_POST[user]' AND pass = '$_POST[pass]


function get_all_users() {
include 'Forms/connection.php';
    
    try {
    $results = $pdo->prepare("SELECT * FROM users");
    $results->execute();
    
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
   
    return $results->fetchAll();
}

//This function has been tested and works!
function add_post($pdo,$post){
include 'Forms/connection.php';
    /*if ($id) {
        $sql = 'UPDATE posts SET title = ?, post = ?, author = ?, username = ?, date = ? WHERE id = ?';
    } else {
    $sql = 'INSERT INTO posts(title, post, author, username, date) VALUES(?, ?, ?, ?, ?)';
    }*/

$sql = 'INSERT INTO BlogPosts(Title, Post, username, phptag, mojitotag, funnytag, journeytag) VALUES(?, ?, ?, ?, ?, ? ,?)';
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $post['Title'], PDO::PARAM_STR);
        $results->bindValue(2, $post['Post'], PDO::PARAM_STR);
		$results->bindValue(3, $post['Username'], PDO::PARAM_STR);
                $results->bindValue(4, $post['phptag'], PDO::PARAM_STR);
                $results->bindValue(5, $post['mojitotag'], PDO::PARAM_STR);
                $results->bindValue(6, $post['funnytag'], PDO::PARAM_STR);
                $results->bindValue(7, $post['journeytag'], PDO::PARAM_STR);

        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

//updating a post
//This function has been tested and works!
function update_post($pdo, $post){
    $id = $_POST['id'];
    $title = $_POST['Title'];
    $content = $_POST['Post'];
    
 $sql = 'UPDATE BlogPosts SET title = ?, post = ? WHERE id = ?';
try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $title, PDO::PARAM_STR);
        $results->bindValue(2, $content, PDO::PARAM_STR);
	$results->bindValue(3, $id, PDO::PARAM_STR);
        //array(':title' => $title, ':content' => $content, ':id' => $id
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}


//This function has been tested and works!
function add_user($pdo, $user){
include 'Forms/connection.php'; 
 //userdate to include in db?   
     if ($id) {
        $sql = 'UPDATE users SET username = ?, password = ?, email = ? about_me = ?'; 
    } else {
    $sql = 'INSERT INTO users(username, password, email, about_me) VALUES(?, ?, ?, ?)';
    }
     
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $user['username'], PDO::PARAM_STR);
		$results->bindValue(2, password_hash($user['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
		$results->bindValue(3, $user['email'], PDO::PARAM_STR);
		$results->bindValue(4, $user['bio'], PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}


//Delete functions
function delete_post($id) {
    //include 'connection.php';
    $sql = 'DELETE FROM posts WHERE id = ?';
  
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return false;
    }
    return true;
}

function delete_user($id) {
    //include 'connection.php';
    $sql = 'DELETE FROM users WHERE id = ?';
  
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return false;
    }
    return true;
}