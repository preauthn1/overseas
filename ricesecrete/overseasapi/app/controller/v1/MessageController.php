<?php

namespace app\controller\v1;

use app\common\BaseController;
use plugin\admin\app\services\MessageServices;
use support\Request;

class MessageController extends BaseController
{
    /**
     * 获取消息列表
     * @param Request $request
     * @return \support\Response
     */
    public function get_list(Request $request)
    {
        $message_type = $request->input('message_type', 0);
        $type = $request->input('type', 0);
        $limit = $request->input('limit', 10);
        $lang = locale();
        $data = MessageServices::getMessageList($this->getUserId(), $message_type, $type, $limit, $lang);
        $out_data = [
            'code' => 0,
            'data' => $data
        ];
        return self::returnMsg($out_data);
    }

    /**
     * 获取消息详情
     * @param Request $request
     * @return \support\Response
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function get_message_info(Request $request)
    {
        $id = $request->input('id');
        $message_type = $request->input('message_type', 0);
        if (empty($id)) {
            $out_data = [
                'code' => 1,
                'msg' => '参数错误'
            ];
            return self::returnMsg($out_data);
        }
        $data = MessageServices::getMessage($id, $message_type, $this->getUserId());
        $out_data = [
            'code' => 0,
            'data' => $data
        ];
        MessageServices::readMessage($id, $message_type, $this->getUserId());
        MessageServices::sendUnread($this->getUserId());
        return self::returnMsg($out_data);
    }

    /**
     * 已读消息
     * @param Request $request
     * @return \support\Response
     */
    public function read(Request $request)
    {
        $id = $request->input('id');
        $message_type = $request->input('message_type', 0);
        MessageServices::readMessage($id, $message_type, $this->getUserId());
        MessageServices::sendUnread($this->getUserId());
        $out_data = [
            'code' => 0
        ];
        return self::returnMsg($out_data);
    }
}
