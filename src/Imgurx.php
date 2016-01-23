<?php
namespace Nahid\Imgurx;

/**
 * Created by PhpStorm.
 * User: nahid
 * Date: 1/21/16
 * Time: 8:11 PM
 */
use Imgur\Client;

class Imgurx extends Client
{

    function __construct()
    {
        parent::__construct();
        $this->authImgur();

    }


    protected function authImgur()
    {
        $this->setOption('client_id', config('imgurx.client_id'));
        $this->setOption('client_secret', config('imgurx.client_secret'));

        if (isset($_SESSION['_imgurx_token'])) {
            $this->setAccessToken($_SESSION['_imgurx_token']);
            if ($this->checkAccessTokenExpired()) {
                $this->refreshToken();
            }

            return true;

        } elseif (isset($_GET['code'])) {
            $this->requestAccessToken($_GET['code']);
            $_SESSION['_imgurx_token'] = $this->getAccessToken();

            return true;
        }

        return false;
    }


}