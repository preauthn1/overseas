<?php


namespace app\model\goods;


use app\model\Base;

class GoodsModel extends Base
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'ex_goods';

    /**
     * 模型数据表对应的完整数据表名称 sql
     * @var string
     */
    protected $table_create_sql = "CREATE TABLE `ex_goods` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '主键，自增ID',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '商品标题',
  `title_en` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '英文标题',
  `type_id` int DEFAULT '0' COMMENT '归属分类',
  `spec` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '规格名称spec json',
  `min_price` decimal(20,2) DEFAULT '0.00' COMMENT '最低售价',
  `min_original_price` decimal(20,2) DEFAULT '0.00' COMMENT '最低原价',
  `min_cost_price` decimal(20,2) DEFAULT NULL COMMENT '最低成本价',
  `store` int DEFAULT '0' COMMENT '总库存',
  `view` int DEFAULT '0' COMMENT '真实浏览量',
  `sales` int DEFAULT '0' COMMENT '真实销量',
  `virtual_view` int DEFAULT '0' COMMENT '虚拟浏览量',
  `virtual_sales` int DEFAULT '0' COMMENT '虚拟销售量',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '封面图片',
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '顶部展示图片 视频',
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '详情富文本',
  `status` tinyint unsigned NOT NULL DEFAULT '1' COMMENT '状态：1上架  2下架',
  `sort` int DEFAULT '0' COMMENT '排序权重越大越靠前',
  `hot` tinyint(1) DEFAULT '1' COMMENT '是否热门 2否 1是',
  `deleted_at` int unsigned DEFAULT '0' COMMENT '删除日期',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '更新日期',
  `created_at` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '创建日期',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `type_id` (`type_id`) USING BTREE,
  KEY `title` (`title`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `sort` (`sort`) USING BTREE,
  KEY `hot` (`hot`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='商品列表';";
}