<?php

class CaptureController
{
    public function index()
    {
       Pokemon::capturePoke($_POST['id']);
       header("Location: /");
    }
}
