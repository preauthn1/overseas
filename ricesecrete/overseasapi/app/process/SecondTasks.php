<?php


namespace app\process;


use app\services\TransactionsLogServices;
use Workerman\Crontab\Crontab;

/**
 * 秒钟任务
 * Class PledgeCurrent
 * @package app\process
 */
class SecondTasks
{
    public function onWorkerStart()
    {
//        执行逻辑会阻塞进程
        // 每30秒执行一次
        new Crontab('*/30 * * * * *', function () {
//            var_dump('每30秒执行一次');
        });
    }
}