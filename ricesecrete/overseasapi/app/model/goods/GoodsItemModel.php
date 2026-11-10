<?php


namespace app\model\goods;


use app\model\Base;

class GoodsItemModel extends Base
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'ex_goods_item';

    /**
     * 模型数据表对应的完整数据表名称 sql
     * @var string
     */
    protected $table_create_sql = "CREATE TABLE `ex_goods_item` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '主键，自增ID',
  `goods_id` int DEFAULT '0' COMMENT '商品id',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '规格图片 默认是产品封面图',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '规格名称',
  `spec` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '规则json数据',
  `number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品编码',
  `original_price` decimal(20,2) DEFAULT NULL COMMENT '原价',
  `sales` int DEFAULT '0' COMMENT '销售量',
  `price` decimal(20,2) DEFAULT '0.00' COMMENT '售价',
  `cost_price` decimal(20,2) DEFAULT '0.00' COMMENT '成本进价',
  `store` int DEFAULT '0' COMMENT '库存',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `product_id` (`goods_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='商品规格列表';";
}