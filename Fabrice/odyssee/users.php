<?php
$title = 'Odyssée :: Utilisateurs';
$currentPage = 'users';
include_once 'header.php';
include 'listUsers.php'; // La "base de donné" des utilisateurs est simulée par un tableau PHP qui se trouve dans listUsers.php -->
?>

<!-- DEBUT SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->
    <section>
        <div class="container">
            <h2 class="fs-5 fw-medium text-body-secondary mb-4"><i class="bi bi-people-fill"></i> Utilisateurs</h2>
            <nav class="navbar bg-body-secondary mb-4">
                <div class="container-fluid">
                    <button type="button" class="btn btn btn-primary ">Ajouter un Utilisateur</button>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

<!-- --------------DEBUT TABLEAU UTILISATEURS---------------------------------------------- -->

            <table class="table table-striped table-light rounded overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Statut</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                    // source pour la pagination :
                    // https://antoine-herault.developpez.com/tutoriels/php/pagination-automatique-en-php/

                    $messagesParPage=10; //Nous allons afficher 10 utilisateurs par page.
                    $total=count($users); //On récupère le total d'utilisateurs dans le tableau $users[] pour le placer dans la variable $total.
                    
                    //Nous allons maintenant compter le nombre de pages.
                    $nombreDePages=ceil($total/$messagesParPage);
                    if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
                    {
                        $pageActuelle=intval($_GET['page']);
                        if($pageActuelle>$nombreDePages){ // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
                            $pageActuelle=$nombreDePages;
                        }
                    }
                    else{
                        $pageActuelle=1; // La page actuelle est la n°1    
                    }
                    
                    $premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcule la première entrée à lire
                    
                    for ($i=0 ; $i<$messagesParPage ; $i++){  
                        if($premiereEntree < $total){
                        $retour_messages = $users[$premiereEntree];?>
                    <tr>
                        <th scope="row"><?=($premiereEntree+1)?></th>
                        <td><?=$users[$premiereEntree]['lastname']?></td>
                        <td><?=$users[$premiereEntree]['name']?></td>
                        <td><?=$users[$premiereEntree]['pseudo']?></td>
                        <td><?=$users[$premiereEntree]['email']?></td>
                        <td><?=$users[$premiereEntree]['status']?></td>
                        <td class="d-flex gap-3 justify-content-end">
                            <i class="bi bi-search"></i>
                            <i class="bi bi-pencil-fill"></i>
                            <i class="bi bi-trash3-fill"></i>
                        </td>
                    </tr>
                            <?php $premiereEntree++;
                        }
                    }
                ?>
                </tbody>
            </table>
            <p align="center">Page :  <!-- //Pour l'affichage, on centre la liste des pages -->
            <?php    
            for($i=1; $i<=$nombreDePages; $i++){ //On fait notre boucle
                    //On va faire notre condition
                    if($i==$pageActuelle) //S'il s'agit de la page actuelle...
                {
                    echo ' [ '.$i.' ] '; 
                }    
                    else //Sinon...
                {
                    ?><a href="users.php?page=<?=$i?>"><?=" ".$i?></a><?php
                }
            }
            ?>
            </p>
        </div>
    </section>

<!-- FIN SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->

</body>
</html>
