<?php

namespace image;

trait image
{
    public function photo($img, $url)
    {
        $photo = time() . $img['name'] ;
        $this->photo = $photo;
        move_uploaded_file($img['tmp_name'], $url . $photo);
    }
}