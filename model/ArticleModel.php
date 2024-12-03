<?php
class ArticleModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllArticles() {
        $stmt = $this->db->query("SELECT * FROM articles");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id) {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addArticle($title, $content) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content) VALUES (:title, :content)");
        $stmt->execute(['title' => $title, 'content' => $content]);
    }
}
