<?php
/**
 * Created by PhpStorm.
 * User: ioulai2017
 * Date: 17/07/2018
 * Time: 12:04
 */

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    /**
     * @param UploadedFile $file
     * @return string
     */
    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->getTargetDirectory(), $fileName);

        return $fileName;
    }

    /**
     * @return mixed
     */
    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}