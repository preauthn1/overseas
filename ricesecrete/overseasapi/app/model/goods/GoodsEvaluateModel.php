<?php


namespace app\model\goods;


use app\model\Base;

class GoodsEvaluateModel extends Base
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'ex_goods_evaluate';

    /**
     * 模型数据表对应的完整数据表名称 sql
     * @var string
     */
    protected $table_create_sql = "CREATE TABLE `ex_goods_evaluate` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '主键，自增ID',
  `goods_id` int DEFAULT '0' COMMENT '商品id',
  `user_id` int DEFAULT '0' COMMENT '评论用户id',
  `order_id` int DEFAULT '0' COMMENT '订单id',
  `score` float DEFAULT '0' COMMENT '评分',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '评论内容',
  `photo` text COLLATE utf8mb4_unicode_ci COMMENT '评论图片',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '更新日期',
  `created_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '创建日期',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `type_id` (`goods_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='商品评价表';";
}