<?php
session_start();
require_once('../model/database.php');
require_once('../model/UserEntity.php');

$db = Database::getInstance();
$user = $db->getUser($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
 
   <title>Twitter profil</title>
</head>


<body>
    <nav>
            <ul>
                <a style="text-decoration:none" href=""><li>HOME</li></a>
                <a style="text-decoration:none" href=""><li>PROFIL</li></a>
            </ul>
    </nav>

<label>
    <input type="checkbox">
    <span class="check"></span>
</label>

    <div class="padding">
    <div class="col-md-8">
        <div class="card"> <img class="card-img-top" src="../images/background_twitter.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="https://i.imgur.com/8RKXAIV.jpg" alt="user"></div>
                <h3 class="m-b-0"><?php echo htmlspecialchars($user->getFirstname() . ' ' . $user->getLastname());  ?></h3>
                <p><?php echo $user->getAbout(); ?></p> <a href="../index.php?action=edit_profil" class="modifier m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Modifier</a>
                <div class="row text-center m-t-20">
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light"><?php echo htmlspecialchars($db->getTotalTweet($user)["tweets"]); ?> </h3><small>Tweets</small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="m-b-0 font-light">
                  
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    <?php echo htmlspecialchars($db->getTotalFollowers($user)["followers"]);  ?>
                    </button> 
                    </h3>

                    <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Followers</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                                $followersList = $db->getFollowersList($user);
                                for($i = 0; $i < count($followersList); $i++)
                                    echo (htmlspecialchars($followersList[$i]['display_name']) . '</br>');
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>

                        </div>
                    </div>
                    </div>          
                        </h3><small>Followers</small>
                    </div>

                    
                    <div class="col-lg-4 col-md-4 m-t-20">
                    <h3 class="m-b-0 font-light">
                  
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                  <?php echo htmlspecialchars($db->getTotalFollowing($user)["following"]);  ?>
                  </button> 
                  </h3>
                   <div class="modal" id="myModal2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Following</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                        <?php
                                $followingList = $db->getFollowingList($user);
                                for($i = 0; $i < count($followingList); $i++)
                                    echo (htmlspecialchars($followingList[$i]['display_name']) . '</br>');
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>

                        </div>
                    </div>
                    </div>          
                        </h3><small>Following</small>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>