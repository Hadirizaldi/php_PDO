<?php

namespace Repository;

use Model\Comments;

interface CommentRepository
{
    function insert(Comments $comment): Comments;

    function findById(int $id): ?Comments;

    function findAll(): array;
}
