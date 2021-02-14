<?php

// $posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
// $posts[1] = ['text' => 'hello again', 'likes' => 0];

// // print_r($posts);

// function show($post)
// {
//   printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);

// クラス
class Post
{
  // プロパティ
  public $text;
  public $likes;

  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];

// インスタンス
$posts[0] = new Post();
$posts[0]->text = 'hello';
$posts[0]->likes = 0;

$posts[1] = new Post();
$posts[1]->text = 'hello again';
$posts[1]->likes = 0;

$posts[0]->show();
$posts[1]->show();