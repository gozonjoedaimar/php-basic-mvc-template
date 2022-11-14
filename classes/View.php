<?php

class View {
  
  private $view_dir = '/views/';
  private $data = [];
  private $title;

  public function __construct() {
    $this->title = TITLE;
  }

  function render($path) {
    include getcwd() . $this->view_dir . 'parts/top.phtml';
    include getcwd() . $this->view_dir . $path . '.phtml';
    include getcwd() . $this->view_dir . 'parts/end.phtml';
  }

  function set($name, $value) {
    $this->data[$name] = $value;
    return $this;
  }

  function get($name) {
    return $this->data[$name];
  }

  function title($title) {
    $this->title = $title . ' - ' . TITLE;
    return $this;
  }

  function get_title() {
    return $this->title;
  }
}