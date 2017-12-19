<?php

namespace App\Models;

use Image;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $fillable = [
        'name',
        'path',
        'type',
        'thumbnail_path'
    ];

    protected $baseDir = 'images/flyers';
    protected $PhotoDir;


    public function flyer()
    {
        return $this->belongsTo(Flyer::class);
    }

    public static function named($name)
    {
        return (new static)->saveAs($name);
    }

    protected function saveAs($name)
    {
        $photoName = explode('-', $name);
        $this->PhotoDir = $this->baseDir.'/'.$photoName[0];
        $this->name = sprintf("%s-%s", time(), $photoName[1]);
        $this->path = sprintf("%s/%s", $this->PhotoDir, $this->name);
        $this->type = substr($this->PhotoDir, 14);
        $this->thumbnail_path = sprintf("%s/tn-%s", $this->PhotoDir, $this->name);

        return $this;
    }

    public function move(UploadedFile $file)
    {
        $file->move($this->PhotoDir, $this->name);

        $this->makeThumbnail();

        return $this;
    }

    protected function makeThumbnail()
    {
        Image::make($this->path)
            ->fit(200)
            ->save($this->thumbnail_path);
    }
}
