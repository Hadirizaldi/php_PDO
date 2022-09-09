<?php

require_once __DIR__ . "/Model/Comments.php";
require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Repository/CommentRepository.php";
require_once __DIR__ . "/Repository/CommentRepositoryImpl.php";

use Repository\CommentRepositoryImpl;
use Model\Comments;

$connection = GetConnection::getConnection();
$repositoryImpl = new CommentRepositoryImpl($connection);


// Test for insert
// =========================
// $comment = new Comments(email: "test-2@gmail.com", comment: "Percobaan ke-5");
// $newComment = $repositoryImpl->insert($comment);
// var_dump($newComment->getId());


// Test for find by id
// ==========================
// $comment = $repositoryImpl->findById(5);
// var_dump($comment);


// Test for find all
// ==========================
$comment = $repositoryImpl->findAll();
var_dump($comment);

$connection = null;
