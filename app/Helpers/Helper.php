<?php

/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 07.01.2017
 * Time: 20:10
 */

namespace App\Helpers;

class Helper
{
    public static function createEmbedTemplate($iframeLink = null, $modus = 'mini') {

        if ($iframeLink === null) {
            return false;
        }

        $style = [
            'mini'          => '%2F&hide_cover=1&mini=1&light=1',
            'classic'       => '%2F&hide_cover=1&light=1',
            'picture'       => '%2F&light=1'
        ];

        return "<iframe class='music mixcloud' width='100%' height='60' frameborder='0' src='https://www.mixcloud.com/widget/iframe/?feed="
        . $iframeLink . $style[$modus]
        ."'></iframe>";
    }
}