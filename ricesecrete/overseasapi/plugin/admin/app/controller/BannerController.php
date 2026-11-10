<?php

namespace plugin\admin\app\controller;

use app\model\BannerModel;
use support\exception\BusinessException;
use support\Request;
use support\Response;
use Throwable;

/**
 * 视频管理
 */
class BannerController extends Crud
{

    /**
     * @var BannerModel
     */
    protected $model = null;

    /**
     * 构造函数
     * @return void
     */
    public function __construct()
    {
        $this->model = new BannerModel();
    }

    /**
     * 浏览
     * @return Response
     * @throws Throwable
     */
    public function index(): Response
    {

        return raw_view('banner/index');
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
            $data = $this->insertInput($request);
            $id = $this->doInsert($data);
            return $this->json(0, 'ok', ['id' => $id]);
        }
        return raw_view('banner/insert');
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
            return parent::update($request);
        }
        return raw_view('banner/update');
    }

}
