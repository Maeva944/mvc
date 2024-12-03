<?php
class ArticleController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function listArticles() {
        $articles = $this->model->getAllArticles();
        require 'views/articles.php';
    }

    public function showArticle($id) {
        $article = $this->model->getArticleById($id);
        require 'views/article.php';
    }

    public function createArticle($title, $content) {
        $this->model->addArticle($title, $content);
        header('Location: index.php');
    }
}
