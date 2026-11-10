<?php


namespace app\model\goods;


use app\model\Base;

class GoodsTypeModel extends Base
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'ex_goods_type';

    /**
     * 模型数据表对应的完整数据表名称 sql
     * @var string
     */
    protected $table_create_sql = "CREATE TABLE `ex_goods_type` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '主键，自增ID',
  `pid` int DEFAULT '0' COMMENT '父级id',
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '分类名称',
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '分类英文名称',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '图标',
  `sort` int DEFAULT '0' COMMENT '权重排序 越大越靠前',
  `status` tinyint DEFAULT '1' COMMENT '状态 1启用 2禁用',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '更新日期',
  `created_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '创建日期',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `type_id` (`pid`) USING BTREE,
  KEY `title` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='商品分类';";
}