<?php

namespace SwimDB\Uploader;

interface ReaderInterface
{
  public function get_title();
  public function get_start_date();
  public function get_end_date();
  public function get_pool_size();
  public function get_events();
}
