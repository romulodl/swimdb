<?php

namespace SwimDB\Uploader;

class Reader implements \Iterator
{
   private $file_content;
   private $position;

   public function __construct($file = array())
   {
      if($file !== array()){
         $this->read($file);
      }
      else{
         $this->file_content = array();
      }

      $this->position = 0;
   }

   public function read($file)
   {
      $this->file_content = file($file);
   }

   public function __toString()
   {
      return var_dump($this->file_content);
   }

   public function current()
   {
      return $this->file_content[$this->position];
   }

   public function key()
   {
      return $this->position;
   }

   public function next()
   {
      ++$this->position;
   }

   public function rewind()
   {
      $this->position = 0;
   }

   public function valid()
   {
      return isset($this->file_content[$this->position]);
   }

   public function convert_pdf_to_txt($filename)
   {
      $file = escapeshellarg($filename);
      return ("" === exec("pdftotext -layout {$file}"));
   }

}
