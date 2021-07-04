
        <nav class="navbar navbar-expand-sm navbar-light ">
            
                <?php
                    $remoteImage = ROUTE_DIR."public/img/logo.png";
                    $type = pathinfo($remoteImage, PATHINFO_EXTENSION);
                    $data = file_get_contents($remoteImage);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
                ?>
                
                <img src="<?=$base64?>" alt="tes">            
                   
                <h3>Le plaisir de jouer</h3> 
            
            
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavId">
                <ul class="nav justify-content-center">
                    
                
        
                    <?php if (est_admin()) :?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=tableau_bord'?>">Tableau de bord</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">Questions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_admin'?>">Administrateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_joueur'?>">Joueurs</a>
                        </li>
                    <?php endif ?>

            
                </ul>

               

                <?php if (est_joueur()) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=admin&views=liste_question'?>">jeu</a>
                    </li>
                <?php endif ?>
                <img class="image" src="<?=WEB_ROUTE."img/avatar.png"?>" alt="avatar">

                <?php if (est_connect()) : ?>
        
                    <div class="dropdown">
                        <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sambata Ndiaye
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Paramétre</a>
                            <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>">Déconnexion</a>
                        </div>
                    </div>
                <?php endif ?>
        
        
            </div>
        </nav>
       
        <style>
            nav{
                background-color: black;
                
            }
            button:after{
                color: white;

                

            }
            .justify-content-center{
                margin-left: 25%;
            }
            .btn:hover{
                color: white;
            }
            link{
                color: white;
            }
           
            a:hover{
                color: white;
                background-color: #212121;
                border-bottom: 5px solid white;
                
                
                
            }
            ul li a {
                text-decoration:none;
                color: #7a7a7a;
                
            }
            
            ul{
                margin-left: 28%;
                color: white;
                
            }
            
            
            img{
                width: 45px;
            }
            h3{
                font-size: 16px;
                margin-top: 2.5%;
                color: white;

            }
            .image{
                margin-left: 14%;
            }
        
        </style>





       