<?php


namespace app\model;


use app\model\Base;

class BannerModel extends Base
{
    const BANNER_TYPE_IMG = 1; //图片类型
    const BANNER_TYPE_VIDEO = 2;//视频类型

    const BANNER_POSITION_HOME = 1; //首页广告位
    const BANNER_POSITION_OTHER = 2;//其他地方的广告位
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'ex_banner';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';
    /**
     * 模型数据表对应的完整数据表名称 sql
     * @var string
     */
    protected $table_create_sql = "
        CREATE TABLE `ex_banner` (
          `id` int NOT NULL AUTO_INCREMENT,
          `created_at` datetime DEFAULT NULL,
          `updated_at` datetime DEFAULT NULL,
          `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型1图片，2视频',
          `target_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '' COMMENT '目标地址',
          `thumb_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT '缩略图地址',
          `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT '标题',
          `status` tinyint(1) DEFAULT NULL COMMENT '状态',
          `position` tinyint DEFAULT NULL COMMENT '位置1首页，其他递增',
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    ";
}