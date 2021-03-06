<?php
/**
 * 微商城推荐商品分类模型
 *
 *
 *
 * * @运维舫 (c) 2015-2018 ywf Inc. (http://www.shopnc.club)
 * @license    http://www.sho p.club
 * @link       唯一论坛：www.shopnc.club
 * @since      运维舫提供技术支持 授权请购买shopnc授权
 */
defined('ShopNC_CLUB') or exit('Access Invalid!');
class micro_goods_classModel extends Model{

    public function __construct(){

        parent::__construct('micro_goods_class');

    }

    /**
     * 读取列表
     * @param array $condition
     *
     */
    public function getList($condition,$page=null,$order='',$field='*'){

        $result = $this->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;

    }

    /**
     * 读取单条记录
     * @param array $condition
     *
     */
    public function getOne($condition,$order=''){

        $result = $this->where($condition)->order($order)->find();
        return $result;

    }

    /*
     *  判断是否存在
     *  @param array $condition
     *
     */
    public function isExist($condition) {

        $result = $this->getOne($condition);
        if(empty($result)) {
            return FALSE;
        }
        else {
            return TRUE;
        }
    }

    /*
     * 增加
     * @param array $param
     * @return bool
     */
    public function save($param){

        return $this->insert($param);

    }

    /*
     * 更新
     * @param array $update
     * @param array $condition
     * @return bool
     */
    public function modify($update, $condition){

        return $this->where($condition)->update($update);

    }

    /*
     * 删除
     * @param array $condition
     * @return bool
     */
    public function drop($condition){

        return $this->where($condition)->delete();

    }

}
