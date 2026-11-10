<?php

namespace app\command;

use app\services\UserServices;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('test', 'test')]
class Test extends Command
{
    /**
     * @return void
     */
    protected function configure()
    {
//        $this->addArgument('name', InputArgument::OPTIONAL, 'Name description');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $tree = '/100017/100058/';
        $item = [];
        //去除数组中的空元素
        $tree_arr = array_filter(explode('/', $tree));
        //去掉最后一个元素
        array_pop($tree_arr);
        //重新生成数组
        $tree_arr = array_values($tree_arr);
        for ($i = 0; $i <= 9; $i++) {
            $item['leader' . $i . '_user'] = "-/-";
        }
        if (!empty($tree_arr)) {
            print_r($tree_arr);
            $tree_arr = array_reverse($tree_arr);
            //获取第一个元素不要删除元素
            $first_element = $tree_arr[0];
            $item['leader_user'] = UserServices::getInvUser($first_element);

            for ($i = 0; $i <= 9; $i++) {
                if (isset($tree_arr[$i])) {
                    $item['leader' . $i . '_user'] = UserServices::getInvUser($tree_arr[$i]);
                }
            }
        }
        print_r($item);
        return Command::SUCCESS;
    }

}
