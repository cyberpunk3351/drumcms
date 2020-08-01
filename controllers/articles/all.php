<?php
$articles = articlesAll();
$userAuth = true;

$pageTitle = 'All Articles';
$pageContent = template('articles/v_index', [
  'articles' => $articles
]);