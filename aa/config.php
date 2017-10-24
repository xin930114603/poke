<?php
	$last_access_time = date("YmdH");
	$blur = " onfocus = 'this.blur()'";
	$str_bixu = "<font style='color:#e1300b;margn-right:3px;display:inline-block;'>*</font>";
	$str_bixu_white = "<font style='color:#fff;margn-right:3px;display:inline-block;'>*</font>";
	$str_bixu_white = "";
	$hand = " style='cursor:pointer' ";	
	
	$today_all = date("Y-m-d");
	$thismonth_all = date("Y-m");
	$this_dir = str_replace("/","",dirname($_SERVER[PHP_SELF]));
	$this_page = str_replace("/","",basename($_SERVER[PHP_SELF]));
	$today_yoil = date("w");
	
	$today_counter = date("Y-m-d H:i");	
	

	$han = " style='ime-mode:active' ";
	$eng = " style='ime-mode:inactive' ";
	$enc = " enctype='multipart/form-data' ";

	$str_charset = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	$str_css = "<link href='/css/style.css' rel='stylesheet' type='text/css'>";
	$str_script = "<script src=/inc/functions.js></script>";
	$daum_blue = "#4E59E9";
	$naver_green = "#06BF22";
	$ez_pink = "#F24056";
	$daum_pink = "#F44566";
	$daum_orange = "#FF604A";
	$e_purple = "#9048C8";
	$miz_red = "#B7032B";
	$e_6 = "#666666";
	$e_9 = "#999999";
	
	$dir_info = "/upfiles/info/";
	$path_info = $_SERVER[DOCUMENT_ROOT].$dir_info;
	$dir_logo = "/upfiles/logo/";
	$path_logo = $_SERVER[DOCUMENT_ROOT].$dir_logo;
	$dir_huodong = "/upfiles/huodong/";
	$path_huodong = $_SERVER[DOCUMENT_ROOT].$dir_huodong;
	$dir_renwu = "/upfiles/renwu/";
	$path_renwu = $_SERVER[DOCUMENT_ROOT].$dir_renwu;
	$dir_pingtai = "/upfiles/pingtai/";
	$path_pingtai = $_SERVER[DOCUMENT_ROOT].$dir_pingtai;
	$dir_member = "/upfiles/member/";
	$path_member = $_SERVER[DOCUMENT_ROOT].$dir_member;
	$dir_jiekou = "/upfiles/jiekou/";
	$path_jiekou = $_SERVER[DOCUMENT_ROOT].$dir_jiekou;

	$arr_level = array("30"=>"管理员","99"=>"ADMIN");
	$arr_part = array("10"=>"直播入口","20"=>"赛事视频录像","30"=>"赛事/新闻","40"=>"赛事/图集","50"=>"赛事/媒体");
	$arr_result = array("10"=>"胜","20"=>"平","30"=>"负");
	$arr_baoming = array("20"=>"赛事活动","30"=>"电竞活动");
	$arr_baoming_stat = array("10"=>"申请中","20"=>"审核通过","30"=>"拒绝");
	$arr_baoming_stat_color = array("10"=>"#222","20"=>"blue","30"=>"red");
	$arr_games = array("10"=>"FIFA","20"=>"LOL");
	$arr_region_fifa = array("10"=>"华北网通","20"=>"华东电信","30"=>"华南电信","40"=>"西南电信");
	$arr_region_lol = array();
	$arr_view = array("y"=>"是","n"=>"否");
	$arr_view_color = array("y"=>"#000","n"=>"#ccc");
	$arr_remen = array("y"=>"是","n"=>"否");
	$arr_remen_color = array("y"=>"red","n"=>"#ccc");
	$arr_tuijian = array("y"=>"是","n"=>"否");
	$arr_tuijian_color = array("y"=>"red","n"=>"#ccc");
	
	$arr_huodong_xian = array("10"=>"待上线","20"=>"上线","30"=>"下线");
	$arr_huodong_jinxing = array("10"=>"未开始","20"=>"进行中","30"=>"已结束");
	$arr_huodong_jinxing_color = array("10"=>"#222","20"=>"red","30"=>"#aaa");

	$arr_huodong_leixing = array("10"=>"平台活动","20"=>"赛事活动","30"=>"电竞活动");
	
	$arr_fei = array("10"=>"免费","20"=>"收费");
	$arr_fei_color = array("10"=>"#222","20"=>"red");
	$arr_use = array("10"=>"启用","20"=>"停用");
	$arr_use_color = array("10"=>"#000","20"=>"#ccc");
	$arr_xian = array("20"=>"上线","30"=>"下线");
	$arr_xian_color = array("20"=>"red","30"=>"#ccc");
	$arr_renwu = array("10"=>"新手注册","20"=>"登陆","30"=>"首充","40"=>"首投","50"=>"连投");
	$arr_renwu_color = array("10"=>"#222","20"=>"#222","30"=>"#222","40"=>"#222","50"=>"#222");
	$arr_banner = array("10"=>"竞猜","20"=>"活动");
	$arr_banner_color = array("10"=>"#222","20"=>"#222");
	$arr_guanggao = array("10"=>"启动页");
	$arr_guanggao_color = array("10"=>"#222");
    $arr_zhifu_status = array("10"=>"成功","20"=>"失败","30"=>"未支付");
    $arr_what_pay = array("10"=>"钻石充值","20"=>"活动报名");
    $arr_order_type = array("20"=>"支付宝","10"=>"微信");
	$arr_use_jiekou = array("y"=>"启用","n"=>"停用");
	$arr_use_jiekou_color = array("y"=>"#000","n"=>"#ccc");
    $arr_type = array("10"=>"活动报名","20"=>"购买钻石");

	$arr_ok = array("10"=>"申请中","20"=>"通过","30"=>"拒绝");
	$arr_ok_color = array("10"=>"#222","20"=>"blue","30"=>"red");

	$arr_view_odds = array("y"=>"开","n"=>"关");
	$arr_view_odds_color = array("y"=>"red","n"=>"#aaa");

	$arr_paomadeng = array("10"=>"公告","20"=>"受动添加中奖","30"=>"自动获取中奖");
	
	$arr_update = array("5"=>"tournament","10"=>"match","20"=>"odds","30"=>"eventinfo");
	$arr_active = array("y"=>"正常","n"=>"冻结");
    $arr_active_kb = array("y"=>"正常","n"=>"冻结");
	$arr_active_color = array("y"=>"green","n"=>"gold");
	$arr_login_type = array("10"=>"weixin","20"=>"qq","30"=>"tel");
	$arr_success = array("y"=>"成功","n"=>"失败");
	$arr_sex = array("1"=>"男","2"=>"女");

	$arr_churu_type	= array("10"=>"收入","20"=>"消费");
	$arr_zuanshi		= array("10"=>"分销","20"=>"充值","30"=>"增加","40"=>"兑换","50"=>"奖励");
	$arr_Kbi				= array("10"=>"兑换","20"=>"任务","30"=>"投注","40"=>"增加","50"=>"重置","60"=>"兑吧","70"=>"投注中奖","80"=>"投注退款");
	$arr_xianjin			= array("10"=>"充值");


	$arr_fenxiao = array("10"=>"首次登陆","20"=>"充值");
	$arr_fenxiao_type = array("10"=>"百分比","20"=>"金额");
	$arr_fenxiao_type_str = array("10"=>"%","20"=>"钻石");

	$arr_config = array("10"=>"返奖率","20"=>"投注总额","30"=>"K币预警");
	$arr_config_str = array("10"=>"返奖率","20"=>"投注总额","30"=>"K币总额");
	$arr_config_title = array("10"=>"返奖率","20"=>"投注限制","30"=>"K币预警");
	$arr_config_ment = array("10"=>"系统获取到的赔率乘以本系数","20"=>"每个账户每天投注总额限制","30"=>"用户K币≥预警值，系统会自动预警");


	$arr_menu = array("pingtai"=>"平台管理","huodong"=>"活动管理","saishi"=>"赛事管理","fenxiao"=>"分销管理","yonghu"=>"用户管理","caiwu"=>"财务管理","xitong"=>"系统管理");
	$arr_menu_pingtai = array("index"=>"任务","guanggao"=>"广告","zixun"=>"跑马灯","duiba"=>"兑吧","xunibi"=>"虚拟币");
	$arr_menu_huodong = array("index"=>"活动列表","dingdan"=>"活动订单","baoming"=>"报名统计");
	$arr_menu_saishi = array("index"=>"赛事管理","locations"=>"联赛","jingcai"=>"竞猜","rili"=>"赛事日历");
	$arr_menu_fenxiao = array("index"=>"分销配置","liebiao"=>"分销列表","jianli"=>"奖励发放");
	$arr_menu_yonghu = array("index"=>"用户列表","zichan"=>"用户资产","chongzhi"=>"充值记录","fankui"=>"用户反馈");
	$arr_menu_caiwu = array("index"=>"财务结算","fenxiao"=>"分销结算");
	$arr_menu_xitong = array("index"=>"版本管理","juese"=>"角色管理","yuan"=>"管理员","gaoji"=>"高级设置","jiekou"=>"接口文档");
	
	$arr_status				= array("0"=>"未开始","1"=>"上半场","2"=>"中场","3"=>"下半场","4"=>"完场","5"=>"中断","6"=>"取消","7"=>"加时","8"=>"加时","9"=>"加时","10"=>"完场","11"=>"点球大战","12"=>"全场结束","13"=>"延期","14"=>"腰斩","15"=>"待定","16"=>"金球","17"=>"未开始");
	$arr_status_color		= array("1"=>"#aaa","1"=>"green","2"=>"#888","3"=>"green","4"=>"red","5"=>"#ccc","6"=>"#ccc","7"=>"blue","8"=>"blue","9"=>"blue","10"=>"red","11"=>"green","12"=>"red","13"=>"#ccc","14"=>"#ccc","15"=>"#ccc","16"=>"red","17"=>"#aaa");
	$arr_goaldata = array("0"=>"进球","1"=>"点球","2"=>"乌龙球","3"=>"黄牌","4"=>"红牌","5"=>"两黄变一红","7"=>"换人","8"=>"点球射失");

	$arr_pos = array("0"=>"守门员","1"=>"后卫","2"=>"中场","3"=>"前锋");
	$arr_player_status = array("0"=>"后备球员","1"=>"停赛球员","2"=>"伤病球员","3"=>"首发球员","4"=>"其它原因缺阵球员");


	$arr_money_touzhu = array("100"=>"100K币","1000"=>"1000 K币","5000"=>"5000 K币","10000"=>"10000 K币");
	$arr_zhifu_type = array("10"=>"微信","20"=>"支付宝");
	$arr_prize = array("10"=>"申请中","20"=>"已通过","30"=>"拒绝");
	
	$arr_touzhu_type = array("693"=>"全场胜平负","10"=>"大小球","20"=>"让球");
	$arr_touzhu_result = array("10"=>"胜","20"=>"负");
	$arr_touzhu_status = array("10"=>"待开奖","20"=>"全赢","30"=>"赢半","40"=>"输半","50"=>"走盘","60"=>"全输","70"=>"竞猜取消");
	$arr_bi = array("10"=>"钻石","20"=>"K币");
	$arr_caozuo_adm = array("10"=>"冻结资产","20"=>"解冻资产","30"=>"重置K币","40"=>"冻结用户","50"=>"增加钻石","60"=>"增加K币");
	$arr_xinxi = array("10"=>"系统","20"=>"订单");
	$arr_suan = array("10"=>"待结算","20"=>"自动结算","30"=>"手动结算");
	$arr_suan_color = array("10"=>"#aaa","20"=>"green","30"=>"blue");

	$arr_match_tongji  = array("角球次数","角球次数(加时)","黄牌数","黄牌数(加时)","红牌数","红牌数(加时)","射门次数","射正球门次数","犯规次数","救球","控球率","成功抢断","助攻","越位次数","越位次数(加时)");
	
	$arr_canshu_type = array("10"=>"String","20"=>"Int","30"=>"Array");
	$arr_item_type = array("10"=>"文字","20"=>"选择");
	
	$arr_app = array("10"=>"Adroid","20"=>"ISO");
	$arr_odds_status = array("10"=>"即时","20"=>"走地");
	
	////////////////////////////////   彩票 开始

	$arr_caipiao = array("10"=>"双色球","20"=>"大乐透","30"=>"福彩3D","40"=>"排列3","50"=>"排列5","60"=>"七星彩","70"=>"七乐彩");
	$arr_caipiao_30 = array("10"=>"单式","15"=>"组选3","20"=>"组选6","25"=>"1D","30"=>"猜1D","35"=>"2D","40"=>"猜2D","45"=>"通选","50"=>"和数","55"=>"包选","60"=>"猜大小","65"=>"猜三同","70"=>"拖拉机","75"=>"猜奇偶");

	////////////////////////////////   彩票 

	$config_rate_zuanshi = "1";
	$config_rate_Kbi = "100";
	$config_max_touzhu = "100000";
	$config_odds_limit = "0.75";	

		
	$arr_image = array("jpg","png","gif");

	$accesskey = "LTAIDlXKsQqqOdbh";
	$secret = "sw7BXRWuvnMaBTGssdiI15AQNDdLkO";


	$android = "http://f2.market.xiaomi.com/download/AppStore/0a6de0599691948f31d17f5968def6497111f59a3/com.kdbf.apk";

	
	
?>