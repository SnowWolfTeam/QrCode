<?php
namespace QrCode;

use PHPQRCode\Constants;
use PHPQRCode\QRcode;
use QrCode\Exception\QrCodeException;

class QrCreate
{
    public static function createQrPic($text, $path = '', $level = Constants::QR_ECLEVEL_L, $size = 3, $margin = 4)
    {
        if (!extension_loaded('gd') && !extension_loaded('gd2'))
            throw new QrCodeException('gd 扩展未安装');
        self::checkParams($text, $path, $level, $size, $margin);
        $result = false;
        if ($path != '' && is_string($path)) {
            QRcode::png($text, $path, $level, $size, $margin);
            if(file_exists($path));
                return true;
        }else{
            $result = NULL;
            ob_start();
            QRcode::png($text, false, $level, $size, $margin);
            $result = ob_get_contents();
            ob_end_clean();
        }
        return $result;
    }

    public static function checkParams($text, &$path, &$level, &$size, &$maragin)
    {
        if ($text !== 0 && $text != false)
            if (empty($text))
                throw new QrCodeException('二维码内容不能为空');
        if ($path != '' && !is_string($path))
            throw new QrCodeException('路径必须为字符串');
        if (!is_int($level) || ($level != 0 && $level != 1 && $level != 2 && $level != 3))
            $level = Constants::QR_ECLEVEL_L;
        if (!is_int($size) || $size < 0)
            $size = 3;
        if (!is_int($maragin) || $maragin < 0)
            $maragin = 4;
    }
}