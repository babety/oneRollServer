<?php
/**
 * Created by PhpStorm.
 * User: zhipeng
 * Date: 16/8/2
 * Time: 下午4:16
 */

namespace err;


class err_dbs_mall
{

}

class err_dbs_mall_manger_buy
{
    /**
     * 商品不存在
     */
    const GOODS_NOT_EXISTS = 1;
    /**
     * 商品数量不足
     */
    const GOODS_NOT_ENOUGH = 2;
    /**
     * 钻石不足
     */
    const DIAMOND_NOT_ENOUGH = 3;
    /**
     * 货物不在销售中
     */
    const GOODS_IS_NOT_SELLING = 4;
}