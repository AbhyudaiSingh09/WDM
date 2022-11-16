<html>
<head>
  <title>Message Board</title>
  <style>
    body{
      background-color: pink;
    }
  </style>
</head>

<body>
  <form method= "POST" action="board.php">
    <input type= "text" name="newpost"/>
    <input type= "submit" name="submit" value= "New Post"/>
  </form>
  <form method= "GET" action="board.php">
    <input type= "submit" name="logout" value= "Logout"/>
  </form>
<?php 
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors','On');

try {
  $conn = new PDO("mysql:host=127.0.0.1:3306;dbname=board","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  print_r($conn);
  if(isset($_GET['logout'])){
    session_destroy();
    header('location: homepage.php');
    exit();
  }
  if(isset($_POST['username']) && isset($_POST['password'])){
    $check='SELECT username,password from users where username="'.$_POST['username'].'"';
    $get_user_details=$conn->query($check,PDO::FETCH_ASSOC);
    $get_user_details = $get_user_details->fetchall();
    if($get_user_details[0]['password']==($_POST['password'])){
      $_SESSION['postedby']= $get_user_details[0]['username'];
    }
    else{
      header('location: homepage.php');
    exit(); 
    }

  }
  if(isset($_SESSION['postedby'])){
    if(isset($_POST['newpost'])){
      $post_insert= 'INSERT INTO POSTS VALUES(:id,:replyto,:postedby,now(),:message)';
      $stmt= $conn-> prepare($post_insert,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
      $stmt->execute(array(':id'=>uniqid(),':replyto'=>null,':postedby'=>$_SESSION['postedby'],':message'=>$_POST['newpost']));
    }
    if(isset($_GET["replyto"])){
      $unquid = uniqid();
      $insert_reply= 'INSERT INTO POSTS VALUES(:id,:replyto,:postedby,now(),:message)';
      $stmt= $conn-> prepare($insert_reply,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
      $stmt->execute(array(':id'=>$unquid,':replyto'=>null,':postedby'=>$_SESSION['postedby'],':message'=>$_GET['reply']));
      $update='UPDATE posts SET replyto=:replyid where id=:uid';
      $stmt= $conn-> prepare($update,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
      $stmt-> execute(array(':replyid'=>$_GET['replyto'],':uid'=>$unquid));
    }
    $allpost='SELECT * FROM posts inner join users where posts.postedby=users.username order by datetime desc';

    print"<pre>";
    foreach($conn->query($allpost) as $row){
      echo '<form>';
      echo '<input type=hidden name="replyto" value="'.$row['id'].'"/>';
      print'<b>Message Id: </b>'.$row['id']."\n";
      if($row['replyto']!=null)
        print'<b>Replied to message with message id:</b>'.$row['replyto']."\n";
      print'<b> Username:</b>'.$row['username']."\n".'<b>Full Name:</b>'.$row['fullname']."\n";
      print'<b>Date & Time:</b>'.$row['datetime']."\n";
      print'<b>Message: </b>'.$row['message']."\n"; 
      echo'<input type="text" id="reply" name="reply"/>';
      echo'<input type="submit" formaction="board.php">Reply</button></form>';
      print"\n\n\n\n\n\n\n\n";
    }
    print"</pre>";
  }
  else{
    header('location: homepage.php');
      exit();
  }
  }
  catch (PDOException $e){
    print "Error!:".$e->getMessage()."<br/>";
    die();
  }
?>
</body>
</html>
