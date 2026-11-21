<?php

class ArticlesController
{
    private $view;
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__);
        $this->db = new Db();
    }

    public function show(int $articleId)
    {
        $result = $this->db->query(
            'SELECT * FROM articles WHERE id = :id;',
            [':id' => $articleId]
        );

        if (empty($result)) {
            $this->view->renderHtml('404.php', [], 404);
            return;
        }

        $article = $result;

        // Запрос на получение автора статьи из таблицы users
        $authorResult = $this->db->query(
            'SELECT * FROM users WHERE id = :id;',
            [':id' => $article['author_id']]
        );
        $author = !empty($authorResult) ? $authorResult : null;

        $this->view->renderHtml('show.php', [
            'title'   => $article['name'],
            'article' => $article,
            'author'  => $author
        ]);
    }
}
