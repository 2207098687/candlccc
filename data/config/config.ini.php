<?php
/**
 * 运维舫 - shopnc.club 运营版
 */
$config = array();
$config['base_site_url'] 		= 'http://www.coolandless.cc';
$config['shop_site_url']        = 'http://www.coolandless.cc/shop';
$config['cms_site_url']         = 'http://www.coolandless.cc/cms';
$config['microshop_site_url']   = 'http://www.coolandless.cc/microshop';
$config['circle_site_url']      = 'http://www.coolandless.cc/circle';
$config['admin_site_url']       = 'http://www.coolandless.cc/admin';
$config['mobile_site_url']      = 'http://www.coolandless.cc/mobile';
$config['wap_site_url']         = 'http://www.coolandless.cc/wap';
$config['chat_site_url']        = 'http://www.coolandless.cc/chat';
$config['wechat_site_url']      = 'http://www.coolandless.cc/wechat/ems/';
$config['node_site_url'] 		= 'http://www.coolandless.cc:33'; //如果要启用IM，把 localhost/s7test 修改为您的服务器IP
$config['delivery_site_url']    = 'http://www.coolandless.cc/delivery';
$config['chain_site_url']       = 'http://www.coolandless.cc/chain';
$config['member_site_url']      = 'http://www.coolandless.cc/member';
$config['upload_site_url']      = 'http://www.coolandless.cc/data/upload';
$config['resource_site_url']    = 'http://www.coolandless.cc/data/resource';
$config['cms_modules_url']      = 'http://www.coolandless.cc/admin/modules/cms';
$config['microshop_modules_url']= 'http://www.coolandless.cc/admin/modules/microshop';
$config['circle_modules_url']   = 'http://www.coolandless.cc/admin/modules/circle';
$config['admin_modules_url']    = 'http://www.coolandless.cc/admin/modules/shop';
$config['mobile_modules_url']   = 'http://www.coolandless.cc/admin/modules/mobile';
$config['version']              = '20161215';
$config['setup_date']           = '2017-03-21 11:34:09';
$config['gip']                  = 0;
$config['dbdriver']             = 'mysqli';
$config['tablepre']             = 'club_';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'root';
$config['db']['1']['dbpwd']        = '123qwe';
$config['db']['1']['dbname']       = 'candlcccc';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']             = $config['db']['master'];
$config['session_expire']   = 3600;
$config['lang_type']        = 'zh_cn';
$config['cookie_pre']       = '178F_';
$config['cache_open'] = false;
//$config['redis']['prefix']        = 'hao_';
//$config['redis']['master']['port']        = 6379;
//$config['redis']['master']['host']        = '127.0.0.1';
//$config['redis']['master']['pconnect']    = 0;
//$config['redis']['slave']             = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'club';
$config['debug']            = false;
$config['url_model'] = false; //如果要启用伪静态，把false修改为true
$config['subdomain_suffix'] = '';//如果要启用店铺二级域名，请填写不带www的域名，比如shopnc.club
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = false;//如果要启用IM，把false修改为true
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
//$config['oss']['open'] = false;
//$config['oss']['img_url'] = '';
//$config['oss']['api_url'] = '';
//$config['oss']['bucket'] = '';
//$config['oss']['access_id'] = '';
//$config['oss']['access_key'] = '';
$config['https'] = false;
return $config;