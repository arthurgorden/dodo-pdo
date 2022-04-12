<?php
require 'layouts/header.php';
require '../connec.php';
require '../Model/ArticleModel.php';

$article = null;
// Récupérer l'article en GET le param id de l'article 
// puis récupérer ses infos grâce à la méthode selectOneArticle($id)  
// TIPS : s'inspirer de la même logique que pour l'action deletee);

if(isset($_GET['id']) && !empty($_GET['id'])){
    // intval pour s'assurer que la valeur soit bien convertie en INTEGER
    $id = intval($_GET['id']);
    $articles = getOneArticle($id);
    foreach($articles as $article){
}
?>
<div class="container">
    <div class="row">
        <!-- AFFICHER LES DÉTAILS DE L'ARTICLE (title, img, content)-->

        <div class="col-12">
            <div class="media">
                <img src="<?= $article['img']?>" class="mr-3" alt="IMAGE">
                <div class="media-body">
                    <h5 class="mt-0"><?= $article['title']?></h5>
                    <p><?= $article['content']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } require 'layouts/footer.php'; ?>