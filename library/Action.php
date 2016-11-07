<?php

class Action {

    protected $article_storage;
    protected $template_name;

    public function __construct($template, $db) {
        $this->template_name = $template;
        $this->article_storage = new Blog($db);
    }
    
    protected function redirect(){
        header("Location:".$_SERVER['PHP_SELF']);
    }

    public function showArticles() {
        $title = "Список статей";
        $layout_name = "layout/articles.php";
        $articles = $this->article_storage->getArticles();
        include_once $this->template_name;
    }

    public function editform() {
        $id = filter_input(INPUT_POST, 'id');
        if ($id) {
            $title = "Редактировать статью";
            $layout_name = "layout/edit.php";
            $article = $this->article_storage->getArticlesById($id);
            include_once $this->template_name;
        } else {
            $this->redirect();
        }
    }

    public function save() {
        $id = filter_input(INPUT_POST, 'id');
        $title = filter_input(INPUT_POST, 'title');
        $article = filter_input(INPUT_POST, 'article');
        $image_url = filter_input(INPUT_POST, 'image_url');
        if (!empty($id) && !empty($title) && !empty($article)) {
            $this->article_storage->saveArticle($id, $title, $article, $image_url);
        }
        $this->redirect();
    }

    public function createform() {
        $title = "Добавление новой статьи";
        $layout_name = "layout/create.php";
        include_once $this->template_name;
    }

    public function create() {
        $title = filter_input(INPUT_POST, 'title');
        $article = filter_input(INPUT_POST, 'article');
        $author = filter_input(INPUT_POST, 'author');
        if (!empty($title) && !empty($article)) {
            $this->article_storage->create($title, $article, $author);
        }
        $this->redirect();
    }

    public function delete() {
        $id = filter_input(INPUT_POST, 'id');
        if ($id) {
            $this->article_storage->deleteArticleById($id);
        }
        $this->redirect();
    }

}


