<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }


    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        try {
            $file->move($this->getTargetDirectory(), $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileName;
    }

    public function uploadPhoto(UploadedFile $filePhoto)
    {
        $fileNamePhoto = md5(uniqid()).'.'.$filePhoto->guessExtension();

        try {
            $filePhoto->move($this->getTargetDirectory(), $fileNamePhoto);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileNamePhoto;
    }

    public function uploadCv(UploadedFile $fileCv)
    {
        $fileNameCv = md5(uniqid()).'.'.$fileCv->guessExtension();

        try {
            $fileCv->move($this->getTargetDirectory(), $fileNameCv);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileNameCv;
    }
    

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}