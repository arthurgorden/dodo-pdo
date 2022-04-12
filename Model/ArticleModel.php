<?php
// CRUD FOR ARTICLE
// -----------------------------------------------------------------------------------------------------------------------

// READ ALL
function getAllArticles()
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $querySql = "SELECT * FROM article";
    try {
        $sendRequest = $pdo->query($querySql);
        $articles = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        return $error;
    }
}

// -----------------------------------------------------------------------------------------------------------------------
// READ ONE
function getOneArticle(int $id) : array
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    try {
        // CODE ICI
        $sendRequest = $pdo->prepare("SELECT * FROM article WHERE id=:id");
        $sendRequest->bindValue('id', $id, PDO::PARAM_INT);
        $sendRequest->execute();
        $article = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
        return $article;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        return $error;
    }
}

// -----------------------------------------------------------------------------------------------------------------------
// CREATE
function createArticle(array $data)
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    try {
        // CODE ICI
        $query = 'INSERT INTO article (title, img, content) VALUES (:title, :img, :content)';
        $sendRequest = $pdo->prepare($query);
        $sendRequest->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
        $sendRequest->bindValue(':img', $_POST['img'], PDO::PARAM_STR);
        $sendRequest->bindValue(':content', $_POST['content'], PDO::PARAM_STR);
        $sendRequest->execute();
        
    
        
        // After action redirect to index
        header('Location: http://localhost:8000/index.php');
    } catch (PDOException $e) {
        $error = $e->getMessage();
        return $error;
    }
}

// -----------------------------------------------------------------------------------------------------------------------
// UPDATE
function updateArticle(array $data)
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    try {
        // CODE ICI
        $query = 'UPDATE article SET title=:title, img=:img, content=:content WHERE id=:id';
        $sendRequest = $pdo->prepare($query);
        $sendRequest->bindValue(':id', $_POST['id']);
        $sendRequest->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
        $sendRequest->bindValue(':img', $_POST['img'], PDO::PARAM_STR);
        $sendRequest->bindValue(':content', $_POST['content'], PDO::PARAM_STR);
        $sendRequest->execute();
        
        // After action redirect to index
        header('Location: http://localhost:8000/index.php');
    } catch (PDOException $e) {
        $error = $e->getMessage();
        return $error;
    }
}

// -----------------------------------------------------------------------------------------------------------------------
// DELETE
function deleteArticle(int $id)
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    try {
        // CODE ICI
        $deleteArticle = $pdo->prepare('DELETE FROM article WHERE id=:id');
        $deleteArticle->execute(['id' => $id]);
        // After action redirect to index
        header('Location: http://localhost:8000/index.php');
    } catch (PDOException $e) {
        $error = $e->getMessage();
        return $error;
    }
}

// BONUS-----------------------------------------------------------------------------------------------------------------
// SEARCH
function search(string $term)
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    try {
        // CODE ICI
        $sendRequest = $pdo->prepare("SELECT * FROM article WHERE :title  LIKE :term%");
        $sendRequest->bindValue(':title', $term, PDO::PARAM_STR);
        $sendRequest->bindvalue(':term', $term, PDO::PARAM_STR);
        $sendRequest->execute();
        $article = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
        return $article;
       
        return ;
    } catch (PDOException $e) {
        $error = $e->getMessage();
        return $error;
    }
}