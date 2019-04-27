<?php

namespace App\Classes;


use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\BrowserKit\CookieJar;

class FileCookieJarSymphony extends CookieJar
{
    protected $filename;

    public function __construct($cookieFile = '')
    {
        $this->filename = $cookieFile;
        if (file_exists($cookieFile)) {
            $this->load($cookieFile);
        }
    }

    function __destruct()
    {
        $this->save($this->filename);
    }

    public function load($filename)
    {
        $json = file_get_contents($filename);
        if (false === $json) {
            throw new \RuntimeException("Unable to load file {$filename}");
        } elseif ($json === '') {
            return;
        }

        $strCookies = $this->json_decode($json, true);
        if (is_array($strCookies)) {
            foreach ($strCookies as $strCookie) {
                $this->set(Cookie::fromString($strCookie));
            }
        } elseif (strlen($strCookies)) {
            throw new \RuntimeException("Invalid cookie file: {$filename}");
        }
    }

    /**
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    protected function json_decode($json, $assoc = false, $depth = 512, $options = 0)
    {
        $data = \json_decode($json, $assoc, $depth, $options);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new \InvalidArgumentException(
                'json_decode error: ' . json_last_error_msg());
        }

        return $data;
    }

    /**
     * @param $value
     * @param int $options
     * @param int $depth
     * @return string
     */
    protected function json_encode($value, $options = 0, $depth = 512)
    {
        $json = \json_encode($value, $options, $depth);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new \InvalidArgumentException(
                'json_encode error: ' . json_last_error_msg());
        }

        return $json;
    }


    /**
     * Saves the cookies to a file.
     *
     * @param string $filename File to save
     * @throws \RuntimeException if the file cannot be found or created
     */
    public function save($filename)
    {
        $strCookies = [];
        foreach ($this->all() as $cookie) {
            $strCookies[] = (string)$cookie;
        }
        $jsonStr = $this->json_encode($strCookies);
        if (false === file_put_contents($filename, $jsonStr)) {
            throw new \RuntimeException("Unable to save file {$filename}");
        }
    }
}
