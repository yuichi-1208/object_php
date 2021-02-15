<?php

// namespace Dotinstall\MyPHPApp;
// クラス
class Post extends BasePost implements LikeInterface //親クラス Superクラス
{
  // メソッド
  // overrideしてほしくない時は final をつける
  // final public function show()
  // {
  //   printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  // }

  use LikeTrait;

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }


  public static function showInfo()
  {
    // printf('Count: %d' . PHP_EOL, self::$count);
    printf('Version: %.1f' . PHP_EOL, self::VERSION);
  }
}

// class Post
// {
//   private $text;

//   function __construct($text)
//   {
//     $this->text = $text;
//   }

//   function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }