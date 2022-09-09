<?php

namespace Repository;

// require_once __DIR__ . "/CommentRepository.php";

use Model\Comments;
use Repository\CommentRepository;

class CommentRepositoryImpl implements CommentRepository
{

    private \PDO $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    function insert(Comments $comment): Comments
    {
        $sql = "INSERT INTO comments(email, comment) VALUES(:email, :comment)";
        $statment = $this->connection->prepare($sql);
        $statment->bindParam("email", $comment->getEmail());
        $statment->bindParam("comment", $comment->getComment());
        $statment->execute();

        $id = $this->connection->LastInsertId();
        $comment->setId($id);

        return $comment;
    }

    function findById(int $id): ?Comments
    {
        $sql = "SELECT * FROM comments WHERE id = :id";
        $statment = $this->connection->prepare($sql);
        $statment->bindParam("id", $id);
        $statment->execute();

        if ($row = $statment->fetch()) {
            return new Comments(
                id: $row['id'],
                email: $row['email'],
                comment: $row['comment']
            );
        } else {
            return null;
        }
    }

    function findAll(): array
    {
        $sql = "SELECT * FROM comments";
        $statment = $this->connection->query($sql);

        $array = [];
        while ($row = $statment->fetch()) {
            $array[] = new Comments(
                id: $row['id'],
                email: $row['email'],
                comment: $row['comment']
            );
        }

        return $array;
    }
}
