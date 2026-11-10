<?php

namespace plugin\admin\app\controller;

use app\model\user\UserLevelModel;
use app\services\UserServices;
use plugin\admin\app\model\User;
use support\exception\BusinessException;
use support\Request;
use support\Response;
use Throwable;

/**
 * 用户等级管理
 */
class UserLevelController extends Crud
{

    /**
     * @var UserLevelModel
     */
    protected $model = null;

    /**
     * 构造函数
     * @return void
     */
    public function __construct()
    {
        $this->model = new UserLevelModel();
    }

    /**
     * 查询
     * @param Request $request
     * @return Response
     * @throws BusinessException
     */
    public function select(Request $request): Response
    {
        [$where, $format, $limit, $field, $order] = $this->selectInput($request);
        if ($request->input('type') != 'G0') {
            $where['number'] = ['>', 0];
        }
        $query = $this->doSelect($where, $field, $order);
        return $this->doFormat($query, $format, $limit);
    }

    /**
     * 浏览
     * @return Response
     * @throws Throwable
     */
    public function index(): Response
    {
        return raw_view('userlevel/index');
    }

    /**
     * 插入
     * @param Request $request
     * @return Response
     * @throws BusinessException|Throwable
     */
    public function insert(Request $request): Response
    {
        if ($request->method() === 'POST') {
            $data = parent::insert($request);
            UserServices::levelList(false);
            return $data;
        }
        return raw_view('userlevel/insert');
    }

    /**
     * 更新
     * @param Request $request
     * @return Response
     * @throws BusinessException|Throwable
     */
    public function update(Request $request): Response
    {
        if ($request->method() === 'POST') {
            $data = parent::update($request);
            UserServices::levelList(false);
            return $data;
        }
        return raw_view('userlevel/update');
    }

}
