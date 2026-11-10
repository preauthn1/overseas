<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Webman\Route;

// 禁用默认路由
Route::disableDefaultRoute();

Route::group('/fakeorders/v1', function () {
    // 获取语言包
    Route::get('/lang_list', [app\controller\v1\IndexController::class, 'lang_list']);
    // 翻译
    Route::get('/translate', [app\controller\v1\IndexController::class, 'translate']);
    //获取恒生指数K线数据
    Route::get('/hsi_list', [app\controller\v1\IndexController::class, 'hsi_list']);
    // 添加未翻译的语言条目
    Route::get('/add_lang', [app\controller\v1\IndexController::class, 'add_lang']);
    // 获取配置
    Route::get('/config', [app\controller\v1\IndexController::class, 'config']);
    // 测试
    Route::any('/test', [app\controller\v1\IndexController::class, 'test']);
    // 首页
    Route::any('/index', [app\controller\v1\IndexController::class, 'index']);
    Route::any('/index_data', [app\controller\v1\IndexController::class, 'index_data']);//APP首页数据
    Route::any('/get_banners', [app\controller\v1\IndexController::class, 'get_banners']);//获取banner配置
    // 上传文件
    Route::any('/upload', [app\controller\v1\IndexController::class, 'upload']);
    // 获取内容（公告 文章 ）
    Route::any('/content', [app\controller\v1\IndexController::class, 'content']);
    // 获取内容详情
    Route::any('/get_content', [app\controller\v1\IndexController::class, 'get_content']);
    Route::group('/payment', function () {
        // 充值回调接口
        Route::any('/pay_notify', [app\controller\v1\PaymentController::class, 'pay_notify']);
        // 提现回调接口
        Route::any('/withdraw_notify', [app\controller\v1\PaymentController::class, 'withdraw_notify']);
    });
    Route::group('/payment', function () {
        //申请提现
        Route::post('/add_withdraw', [app\controller\v1\PaymentController::class, 'add_withdraw']);
        //充值订单
        Route::post('/add_recharge', [app\controller\v1\PaymentController::class, 'add_recharge']);
        //获取提现地址
        Route::get('/withdraw_address', [app\controller\v1\PaymentController::class, 'withdraw_address']);
        //获取提现记录
        Route::get('/withdraw_record', [app\controller\v1\PaymentController::class, 'withdraw_record']);
        //充值记录
        Route::get('/recharge_record', [app\controller\v1\PaymentController::class, 'recharge_record']);
    })->middleware([
        \app\middleware\TokenMiddleware::class
    ]);;
    // 用户接口
    Route::group('/user', function () {
        // 登录
        Route::post('/login', [app\controller\v1\UserController::class, 'login']);
        // 注册
        Route::post('/register', [app\controller\v1\UserController::class, 'register']);
        // 登出登录
        Route::post('/logout', [app\controller\v1\UserController::class, 'logout']);
        // 发送邮箱验证码
        Route::post('/send_email', [app\controller\v1\UserController::class, 'send_email']);
        //校验邮箱验证码
        Route::post('/verify_email_code', [app\controller\v1\UserController::class, 'verify_email_code']);
        //重置密码
        Route::post('/reset_password', [app\controller\v1\UserController::class, 'reset_password']);
    });
    // 用户接口
    Route::group('/user', function () {
        // 用户信息
        Route::get('/info', [app\controller\v1\UserController::class, 'info']);
        // 修改用户信息
        Route::post('/upinfo', [app\controller\v1\UserController::class, 'upinfo']);
        // 修改密码
        Route::post('/mod_password', [app\controller\v1\UserController::class, 'mod_password']);
        // 修改安全密码
        Route::post('/mod_security_code', [app\controller\v1\UserController::class, 'mod_security_code']);
        // 设置语言
        Route::post('/set_lang', [app\controller\v1\UserController::class, 'set_lang']);
        // 获取KYC
        Route::get('/get_kyc', [app\controller\v1\UserController::class, 'get_kyc']);
        // 上传KYC
        Route::post('/upload_kyc', [app\controller\v1\UserController::class, 'upload_kyc']);
        // 绑定钱包
        Route::post('/bind_wallet', [app\controller\v1\UserController::class, 'bind_wallet']);
        // 用户钱包列表
        Route::get('/wallet_list', [app\controller\v1\UserController::class, 'wallet_list']);
        // 获取账单
        Route::get('/bill_list', [app\controller\v1\UserController::class, 'bill_list']);
        // 获取团队列表
        Route::get('/team_list', [app\controller\v1\UserController::class, 'team_list']);
    })->middleware([
        \app\middleware\TokenMiddleware::class
    ]);
    // 消息接口
    Route::group('/message', function () {
        // 获取用户消息
        Route::get('/get_list', [app\controller\v1\MessageController::class, 'get_list']);
        // 获取消息
        Route::get('/get_message_info', [app\controller\v1\MessageController::class, 'get_message_info']);
        //已读消息
        Route::get('/read', [app\controller\v1\MessageController::class, 'read']);
    })->middleware([\app\middleware\TokenMiddleware::class]);
})->middleware([\app\middleware\LanguageMiddleware::class]);

