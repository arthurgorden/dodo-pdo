<?php
require 'layouts/header.php';
require '../connec.php';
require '../Model/ArticleModel.php';

$article = $id = $title = $img = $content = null;
// Récupérer les infos de l'article à updater si il y en a un
// S'inspirer de la logique pour le delete



// Récupérer les données du formulaire et les traiter en fonction de si 
// le form est en create ou en update 
// Traiter les erreurs => tous les champs doivent être remplis

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['img'];
    $author = $_POST['content'];
    if(isset($_POST['create'])){
        $data = array_map('trim',$_POST);
        createArticle($data);
    }
    if(isset($_POST['update'])){
        $data = array_map('trim',$_POST);
        updateArticle($data);
    }  
}
if($_GET){
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $articles = getOneArticle($_GET['id']); 
        //var_dump($articles);
        foreach($articles as $article){
            $id = $article['id'];
            $title = $article['title'];
            $img = $article['img'];
            $content = $article['content'];
        }
    }
}
 
?>
<div class="container">
    <div class="row">
        <!-- FORMULAIRE CREATE & UPDATE -->
        <div class="col-12">
             <!-- CONDITION D'AFFICHAGE ERREUR FORM -->
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>

            <form method="POST">
                <div class="form-group">
                    <label for="title">Titre *</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $title; ?>">
                </div>
                <div class="form-group">
                    <label for="img">IMAGE</label>
                    <input type="text" class="form-control" id="img" name="img" value="<?= $img?>">
                </div>
                <div class="form-group">
                    <label for="content">CONTENT</label>
                    <textarea 
                    class="form-control" 
                    id="content" 
                    name="content" 
                    value=""><?= $content; ?></textarea>
                </div>
                <div class="form-group">
                    <small>Tous les champs sont obligatoires *</small>
                </div>
                <input type="text" class="d-none" id="id" name="id" value="<?= $id?>">
                <div class="text-center mt-5">
                    <!-- CONDITION D'AFFICHAGE DES BOUTONS DU FORM -->
                    <!-- ici, afficher le bouton create si en create OU le bouton update si en update -->
                    <?php if(!isset($_GET['id'])): ?>                        
                        <button type="submit" class="btn btn-primary" name="create">Create</button>
                    <?php else : ?>                 
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
require 'layouts/footer.php'; ?>