<?php
include "./entity/blogs.php";
include "./service/BlogService.php";

$blogService = new BlogServiceImpl();

$blog1 = new Blog("title1 updated", "desc1 updated");

// $blogService->create($blog1);
// $blogService->getById(1);
$blogService->delete(1);
