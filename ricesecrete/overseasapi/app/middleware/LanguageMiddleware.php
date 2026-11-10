<?php

namespace app\middleware;

use Webman\Http\Request;
use Webman\Http\Response;

class LanguageMiddleware
{
    public function process(Request $request, callable $handler): Response
    {
        // 在每次请求时设置语言
        $lang = $request->input('lang', '');
        if (empty($lang)) {
            $langStr = $request->header('Accept-Language');
            if (!empty($langStr)) {
                $langArr = explode(',', $langStr);
                $lang = isset($langArr[0]) ? trim($langArr[0]) : 'en';
            } else {
                $lang = 'en';
            }
        }
        locale($lang);
        return $handler($request);
    }
}
