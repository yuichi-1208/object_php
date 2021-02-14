<?php

$posts = [];
$posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[1] = ['text' => 'hello again', 'likes' => 0];

// print_r($posts);

function show($post)
{
  printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
}

show($posts[0]);
show($posts[1]);