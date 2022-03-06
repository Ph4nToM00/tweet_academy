<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7697b55172.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="bigblock">

        <nav>
            <div class="sticky">
                <img src="../images/twitterA.png" alt="">
                <a href="../index.php?action=home" style="text-decoration: none;"><li>HOME</li></a>
                <a href="../view/profil.php" style="text-decoration: none;"><li>PROFIL</li></a>
                <a href="../index.php?action=messagerie" style="text-decoration: none;"><li>MESSAGERIE</li></a>
                <a href="../index.php?action=disconnect" style="text-decoration: none;"><li div="disco">DECONNECTION</li></a>

            </div>
        </nav>

        <main>
            <div class="profil_block">
                <form>
                    <div id="profil">
                        <img src="../images/main_pic.png" alt="">
                    </div>
                        <div class="form-group">
                            <textarea class="form-control" id="toTweet" name="toTweet" maxlength="140" rows="3" placeholder=""></textarea>
                            <button type="submit" class="btn btn-primary">Tweeter</button>
                        </div>
                </form>
            </div> 
        </main>
        </div>
                    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="../images/profil_pic.png" alt="Image Description">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                            <h5 class="h5 g-color-gray-dark-v1 mb-0">Dylon Carpitos</h5>
                            <span class="g-color-gray-dark-v4 g-font-size-12">Il y a 5 jours</span>
                        </div>
                    
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quo eos beatae repellendus eaque iste accusantium quia! Illo a dolor odit, ex facilis, voluptatibus officia, magnam nemo molestias ut ipsam.</p>
                    
                        <ul class="list-inline d-sm-flex my-0">
                            <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                178
                            </a>
                            </li>
                            <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                34
                            </a>
                            </li>
                            <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                Répondre
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="../images/profil_pic.png" alt="Image Description">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                            <h5 class="h5 g-color-gray-dark-v1 mb-0">Le michmichDu44</h5>
                            <span class="g-color-gray-dark-v4 g-font-size-12">Il y a 8 jours</span>
                        </div>
                    
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga numquam voluptatum magnam velit itaque labore sed et, nobis consectetur animi quod illum ratione debitis ex molestiae voluptatem esse incidunt libero?</p>
                    
                        <ul class="list-inline d-sm-flex my-0">
                            <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                178
                            </a>
                            </li>
                            <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                34
                            </a>
                            </li>
                            <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                Répondre
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</body>
</html>

<?php

?>