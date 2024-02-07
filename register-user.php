<?php
include "./entity/users.php";
include "./service/UserService.php";

$userService = new UserServiceImpl();

$user1 = new User("100", "Ratana", "Male", "ratana", "123");

// $userService->register($user1);
$userService->login("Ratana", "123");
