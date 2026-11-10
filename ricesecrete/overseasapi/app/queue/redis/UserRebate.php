<?php


namespace app\queue\redis;


use app\model\user\UserModel;
use app\services\PledgeLongServices;
use Webman\RedisQueue\Consumer;

/**
 * 返佣逻辑处理
 * Class Rebate
 * @package app\queue\redis
 */
class UserRebate implements Consumer
{

    // $queue = 'user_rebate';
    //        // 数据，可以直接传数组，无需序列化
    //        $data = ['user_id' => '1', 'money' => 200,'order_id'=>10,'type'=>1];
    //        // 投递消息
    //        Webman\RedisQueue\Redis::send($queue, $data);
    // 要消费的队列名
    public $queue = 'user_rebate';

    // 连接名，对应 plugin/webman/redis-queue/redis.php 里的连接`
    public $connection = 'default';

    public function consume($data)
    {
        //处理队列数据
        print_r($data);
//        if ($data['type'] == 1) {
//            //理财返佣
//            PledgeLongServices::updateUserRebate($data['user_id'], $data['money'], $data['order_id']);
//        }

        return true;
    }

    public function onConsumeFailure(\Throwable $e, $package)
    {
        echo "consume failure\n";
        echo $e->getMessage() . "\n";
        // 无需反序列化
        print_r($package);
    }
}