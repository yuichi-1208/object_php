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

declare(strict_types=1);

// クラス
class Post //親クラス Superクラス
{
  // プロパティ
  // 継承先でもプロパティを使いたい時はprivateではなくprotected
  // publicはどこでもアクセス可能
  // privateは定義したクラスのみアクセス可能
  // protectedは定義したクラスと継承したクラスでのみアクセス可能
  protected $text;
  private static $count = 0;
  public const VERSION = 0.1;
  private $likes = 0;

  // public function __construct($textFromNew, $likesFromNew)
  // {
  //   $this->text = $textFromNew;
  //   $this->likes = $likesFromNew;
  // }
  public function __construct($text)
  {
    $this->text = $text;
    self::$count++;
  }

  // メソッド
  // overrideしてほしくない時は final をつける
  final public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

  public function like()
  {
    $this->likes++;

    if ($this->likes > 100) {
      $this->likes = 100;
    }
  }

  public static function showInfo()
  {
    printf('Count: %d' . PHP_EOL, self::$count);
    printf('Version: %.1f' . PHP_EOL, self::VERSION);
  }
}

class SponsoredPost extends Post // 子クラス Subクラス
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }

  public function showSponsor()
  {
    printf('%s' . PHP_EOL, $this->sponsor);
  }

  // override
  // public function show()
  // {
  //   printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  // }
}



$posts = [];

// インスタンス
$posts[0] = new Post('hello');
// $posts[0] = new Post(4);
// $posts[0]->text = 'hello';
// $posts[0]->likes = 0;

$posts[1] = new Post('hello again');
// $posts[1]->text = 'hello again';
// $posts[1]->likes = 0;

// $posts[0]->likes++;
// $posts[0]->likes = -100;

$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

function processPost(Post $post)
{
  $post->show();
}

$posts[0]->like();

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
foreach ($posts as $post) {
  processPost($post);
}
$posts[2]->showSponsor();

Post::showInfo();

echo Post::VERSION . PHP_EOL;