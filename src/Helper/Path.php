<?php

class Path {

  const ROOT_PATH = "SiteMSVT_git";

  const PUBLIC_PATH = "";


  static public function getAssetPath(): string {
    // Remove all /!
    $publicPath = rtrim(self::PUBLIC_PATH, '/');
    if (strpos(self::PUBLIC_PATH, 'http') === FALSE) {
      $publicPath = "";
    }

    $path = trim($publicPath . self::ROOT_PATH, '/');
    if(!empty($path)) {
      $path = '/' .$path;
    }
    return $path. '/assets/';
  }

  static public function getFile($uri): string {
    return Path::getAssetPath() . trim($uri, '/');
  }


  static public function getUrl($uri): string {
    if (empty(self::ROOT_PATH)) {
      return '/' . trim($uri, '/');
    }
    return "/" . trim(self::ROOT_PATH, '/') . '/' . trim($uri, '/');
  }

}