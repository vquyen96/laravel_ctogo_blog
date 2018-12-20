<?php

function cut_string($text, $length)
{
    if(strlen($text) > $length) {
        $text = substr($text, 0, strpos($text, ' ', $length)).'...';
    }
    return $text;
}


/**
     * Save all images in request and resized copies of them.
     *
     * @return implode(',' , 'all images with new names');
     */
function saveImage($input,$resized_size,$path){
    $imgArr = [];
    $max_size = $resized_size;
    foreach ($input as $image) {
        $filename = 'blog_'.date("Y-m-d").'_'.round( microtime(true) ).'.'.$image->extension();
        $image->storeAs($path,$filename);
        $imgArr[] = $filename;

        $image_info = getimagesize($image);
        $width_orig  = $image_info[0];
        $height_orig = $image_info[1];

        $ratio = $width_orig/$height_orig;
        if($ratio>=1){
            $width=$max_size;
            $height=$width/$ratio;
        }else{
            $height=$max_size;
            $width=$height*$ratio;
        }
        $destination_image = imagecreatetruecolor($width, $height);

        $type_org = $image->extension();
        switch ($type_org) {
            case 'jpeg':
            $orig_image = imagecreatefromjpeg($image);
            imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagejpeg($destination_image, 'storage/app/'.$path.'/resized-'.$filename);
            break;

            case 'jpg':
            $orig_image = imagecreatefromjpeg($image);
            imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagejpeg($destination_image, 'storage/app/'.$path.'/resized-'.$filename);
            break;

            case 'png':
            $orig_image = imagecreatefrompng($image);
            imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagepng($destination_image, 'storage/app/'.$path.'/resized-'.$filename);
            break;

            case 'gif':
            $orig_image = imagecreatefromgif($image);
            imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagegif($destination_image, 'storage/app/'.$path.'/resized-'.$filename);
            break;
        }
    }
    return implode(',',$imgArr);
}