<?php

class Path {

  const ROOT_PATH = "MSVT";

  const PUBLIC_PATH = "";


  static public function getAssetPath(): string {
    // Remove all /!
    $publicPath = rtrim(self::PUBLIC_PATH, '/');
    if (strpos(self::PUBLIC_PATH, 'http') === FALSE) {
      $publicPath = "";
    }
    return '/' . $publicPath . trim(self::ROOT_PATH, '/'). '/assets';
  }

  static public function getFile($uri): string {
    return Path::getAssetPath() . '/' . trim($uri, '/');
  }


  static public function getUrl($uri): string {
    return "/" . trim(self::ROOT_PATH, '/') . '/' . trim($uri, '/');
  }

}