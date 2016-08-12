<!DOCTYPE html>
<html lang="zh-CN" xml:lang="zh-CN">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> 
  <meta charset="UTF-8" /> 
  <title>我的购物车-小米商城</title> 
  <meta name="viewport" content="width=1226" /> 
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
  <link rel="icon" href="favicon.ico" type="image/x-icon" /> 
  <link rel="stylesheet" type="text/css" href="/homes/CART/index.css" media="all" /> 
 </head> 
 <body> 
  <div class="site-header site-mini-header"> 
   <div class="container"> 
    <div class="header-logo"> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="f4006c1551f77f22" class="logo ir" href="http://www.mi.com/index.html" title="小米官网">小米官网</a> 
    </div> 
    <div class="header-title has-more" id="J_miniHeaderTitle">
     <h2>我的购物车</h2>
     <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
    </div> 
    <div class="topbar-info" id="J_userInfo"> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-bf3aa4c80c0ac789', '//order.mi.com/site/login', 'pcpid']);" data-stat-id="bf3aa4c80c0ac789" class="link" href="http://order.mi.com/site/login?redirectUrl=http://static.mi.com/cart/" data-needlogin="true">登录</a>
     <span class="sep">|</span>
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-749b1369201c13fb', 'https://account.xiaomi.com/pass/register', 'pcpid']);" data-stat-id="749b1369201c13fb" class="link" href="https://account.xiaomi.com/pass/register">注册</a> 
    </div> 
   </div> 
  </div> 
  <div class="page-main"> 
   <div class="container"> 
    <div class="cart-loading loading hide" id="J_cartLoading"> 
     <div class="loader"></div> 
    </div> 
    <div class="cart-empty hide" id="J_cartEmpty"> 
     <h2>您的购物车还是空的！</h2> 
     <p class="login-desc">登录后将显示您之前加入的商品</p> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-7874490dbcbc1e60', '#', 'pcpid']);" data-stat-id="7874490dbcbc1e60" href="#" class="btn btn-primary btn-login" id="J_loginBtn">立即登录</a> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-4658a7dfd89505fc', '//list.mi.com/0', 'pcpid']);" data-stat-id="4658a7dfd89505fc" href="http://list.mi.com/0" class="btn btn-primary btn-shoping J_goShoping">马上去购物</a> 
    </div> 
    <div id="J_cartBox" class=""> 
     <div class="cart-goods-list"> 
      <div class="list-head clearfix"> 
       <div class="col col-check">
        <i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>全选
       </div> 
       <div class="col col-img">
        &nbsp;
       </div> 
       <div class="col col-name">
        商品名称
       </div> 
       <div class="col col-price">
        单价
       </div> 
       <div class="col col-num">
        数量
       </div> 
       <div class="col col-total">
        小计
       </div> 
       <div class="col col-action">
        操作
       </div> 
      </div> 

      @foreach($carts as $k => $v)
      <div class="list-body" id="J_cartListBody"> 
       <div class="item-disable-box"> 
        <div class="item-box"> 
         <div class="item-table"> 
          <div class="item-row clearfix"> 
           <div class="col col-check"> 
            <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2160700026_0_buy" data-isdis="true" data-status="1">√</i> 
           </div> 
           <div class="col col-status">
             失效 
           </div> 
           <div class="col col-img"> 
            <a href="http://item.mi.com/1160700029.html" target="_top"> <img alt="" src="" height="80" width="80" /> </a> 
           </div> 
           <div class="col col-name"> 
            <h3 class="name"> <a href="http://item.mi.com/1160700029.html" target="_top"> </a> </h3> 
            <p class="desc"> <span>适配机型：</span> 小米手机5 </p> 
           </div> 
           <div class="col col-price">
      
           </div> 
           <div class="col col-num">
             1 
           </div> 
           <div class="col col-total">
        
           </div> 
           <div class="col col-links"> 
            <a href="javascript:void(0);" class="J_addFavorite add-favorite" data-gid="1160700029"><i class="iconfont hollow"></i><i class="iconfont solid"></i>喜欢</a> 
           </div> 
           <div class="col col-action"> 
            <a id="2160700026_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont"></i></a> 
           </div> 
          </div> 
         </div> 
        </div>
       </div>
      </div> 
      @endforeach

     </div> 
     <!-- 加价购 --> 
     <div class="raise-buy-box" id="J_raiseBuyBox"> 
     </div> 
     <div class="cart-bar clearfix" id="J_cartBar"> 
      <div class="section-left"> 
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-2e6e02113fe6d236', '//list.mi.com/0', 'pcpid']);" data-stat-id="2e6e02113fe6d236" href="http://list.mi.com/0" class="back-shopping J_goShoping">继续购物</a> 
       <span class="cart-total">共 <i id="J_cartTotalNum">1</i> 件商品，已选择 <i id="J_selTotalNum">1</i> 件</span> 
       <span class="cart-coudan hide" id="J_coudanTip"> ，还需 <i id="J_postFreeBalance"></i> 元即可免邮费 <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-69b06f1a9d2d512c', 'javascript:void(0);', 'pcpid']);" data-stat-id="69b06f1a9d2d512c" href="javascript:void(0);" id="J_showCoudan">立即凑单</a> </span> 
      </div> 
      <span class="activity-money hide"> 活动优惠：减 <i id="J_cartActivityMoney">0</i> 元 </span> 
      <span class="total-price"> 合计（不含运费）：<em id="J_cartTotalPrice">1999.00</em>元 </span> 
      <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-a4887072ccf6c1d5', 'javascript:void(0);', 'pcpid']);" data-stat-id="a4887072ccf6c1d5" href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout">去结算</a> 
      <div class="no-select-tip hide" id="J_noSelectTip">
        请勾选需要结算的商品 
       <i class="arrow arrow-a"></i> 
       <i class="arrow arrow-b"></i> 
      </div> 
     </div> 
    </div> 
    <div class="cart-recommend hide" id="J_historyRecommend"></div> 
    <div class="cart-recommend container" id="J_miRecommendBox">
     <h2 class="xm-recommend-title"><span>买购物车中商品的人还买了</span></h2>
     <div class="xm-recommend">
      <ul class="row" data-carousel-list="true"> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米家小白智能摄像机+stat_购物车.购物车推荐_0_1_1', '//item.mi.com/1154000008.html', 'pcpid']);" data-stat-id="米家小白智能摄像机+stat_购物车.购物车推荐_0_1_1" data-stat-aid="米家小白智能摄像机" data-stat-pid="stat_购物车.购物车推荐_0_1_1" href="http://item.mi.com/1154000008.html" data-stat-method="1_1" data-stat-index="0" data-stat-text="米家小白智能摄像机" target="_top"> <img src="/homes/CART/pms_1468806372.46368911.jpg" srcset="//i1.mifile.cn/a1/pms_1468806372.46368911.jpg?width=280&amp;height=280 2x" alt="米家小白智能摄像机" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米家小白智能摄像机+stat_购物车.购物车推荐_0_1_1', '//item.mi.com/1154000008.html', 'pcpid']);" data-stat-id="米家小白智能摄像机+stat_购物车.购物车推荐_0_1_1" data-stat-aid="米家小白智能摄像机" data-stat-pid="stat_购物车.购物车推荐_0_1_1" href="http://item.mi.com/1154000008.html" data-stat-method="1_1" data-stat-index="0" data-stat-text="米家小白智能摄像机" target="_top"> 米家小白智能摄像机 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          399元
         </dd> 
         <dd class="xm-recommend-tips">
           1077人好评 
          <a style="display: none;" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米家小白智能摄像机+stat_购物车加购.购物车推荐_0_1_1', '//cart.mi.com/cart/add/2154000002-0-1', 'pcpid']);" data-stat-id="米家小白智能摄像机+stat_购物车加购.购物车推荐_0_1_1" data-stat-aid="米家小白智能摄像机" data-stat-pid="stat_购物车加购.购物车推荐_0_1_1" href="http://cart.mi.com/cart/add/2154000002-0-1" data-stat-gid="2154000002" data-stat-method="1_1" data-stat-index="0" data-stat-text="米家小白智能摄像机" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源20000mAh+stat_购物车.购物车推荐_1_1_1', '//item.mi.com/1154400042.html', 'pcpid']);" data-stat-id="小米移动电源20000mAh+stat_购物车.购物车推荐_1_1_1" data-stat-aid="小米移动电源20000mAh" data-stat-pid="stat_购物车.购物车推荐_1_1_1" href="http://item.mi.com/1154400042.html" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米移动电源20000mAh" target="_top"> <img src="/homes/CART/t1zlbvb4xv1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1zLbvB4xv1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="小米移动电源20000mAh" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源20000mAh+stat_购物车.购物车推荐_1_1_1', '//item.mi.com/1154400042.html', 'pcpid']);" data-stat-id="小米移动电源20000mAh+stat_购物车.购物车推荐_1_1_1" data-stat-aid="小米移动电源20000mAh" data-stat-pid="stat_购物车.购物车推荐_1_1_1" href="http://item.mi.com/1154400042.html" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米移动电源20000mAh" target="_top"> 小米移动电源20000mAh </a> 
         </dd> 
         <dd class="xm-recommend-price">
          149元
         </dd> 
         <dd class="xm-recommend-tips">
           4.5万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源20000mAh+stat_购物车加购.购物车推荐_1_1_1', '//cart.mi.com/cart/add/2154400015-0-1', 'pcpid']);" data-stat-id="小米移动电源20000mAh+stat_购物车加购.购物车推荐_1_1_1" data-stat-aid="小米移动电源20000mAh" data-stat-pid="stat_购物车加购.购物车推荐_1_1_1" href="http://cart.mi.com/cart/add/2154400015-0-1" data-stat-gid="2154400015" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米移动电源20000mAh" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源10000mAh+stat_购物车.购物车推荐_2_1_1', '//item.mi.com/1151900011.html', 'pcpid']);" data-stat-id="小米移动电源10000mAh+stat_购物车.购物车推荐_2_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-pid="stat_购物车.购物车推荐_2_1_1" href="http://item.mi.com/1151900011.html" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源10000mAh" target="_top"> <img src="/homes/CART/t12hjvbyev1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T12HJvByEv1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="小米移动电源10000mAh" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源10000mAh+stat_购物车.购物车推荐_2_1_1', '//item.mi.com/1151900011.html', 'pcpid']);" data-stat-id="小米移动电源10000mAh+stat_购物车.购物车推荐_2_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-pid="stat_购物车.购物车推荐_2_1_1" href="http://item.mi.com/1151900011.html" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源10000mAh" target="_top"> 小米移动电源10000mAh </a> 
         </dd> 
         <dd class="xm-recommend-price">
          79元
         </dd> 
         <dd class="xm-recommend-tips">
           18.9万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源10000mAh+stat_购物车加购.购物车推荐_2_1_1', '//cart.mi.com/cart/add/2151900016-0-1', 'pcpid']);" data-stat-id="小米移动电源10000mAh+stat_购物车加购.购物车推荐_2_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-pid="stat_购物车加购.购物车推荐_2_1_1" href="http://cart.mi.com/cart/add/2151900016-0-1" data-stat-gid="2151900016" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源10000mAh" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小蚁智能摄像机夜视版+stat_购物车.购物车推荐_3_1_1', '//item.mi.com/1152300005.html', 'pcpid']);" data-stat-id="小蚁智能摄像机夜视版+stat_购物车.购物车推荐_3_1_1" data-stat-aid="小蚁智能摄像机夜视版" data-stat-pid="stat_购物车.购物车推荐_3_1_1" href="http://item.mi.com/1152300005.html" data-stat-method="1_1" data-stat-index="3" data-stat-text="小蚁智能摄像机 夜视版" target="_top"> <img src="/homes/CART/t1o3z_bket1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1o3Z_BKET1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="小蚁智能摄像机 夜视版" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小蚁智能摄像机夜视版+stat_购物车.购物车推荐_3_1_1', '//item.mi.com/1152300005.html', 'pcpid']);" data-stat-id="小蚁智能摄像机夜视版+stat_购物车.购物车推荐_3_1_1" data-stat-aid="小蚁智能摄像机夜视版" data-stat-pid="stat_购物车.购物车推荐_3_1_1" href="http://item.mi.com/1152300005.html" data-stat-method="1_1" data-stat-index="3" data-stat-text="小蚁智能摄像机 夜视版" target="_top"> 小蚁智能摄像机 夜视版 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          149元
         </dd> 
         <dd class="xm-recommend-tips">
           8.6万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小蚁智能摄像机夜视版+stat_购物车加购.购物车推荐_3_1_1', '//cart.mi.com/cart/add/2152300005-0-1', 'pcpid']);" data-stat-id="小蚁智能摄像机夜视版+stat_购物车加购.购物车推荐_3_1_1" data-stat-aid="小蚁智能摄像机夜视版" data-stat-pid="stat_购物车加购.购物车推荐_3_1_1" href="http://cart.mi.com/cart/add/2152300005-0-1" data-stat-gid="2152300005" data-stat-method="1_1" data-stat-index="3" data-stat-text="小蚁智能摄像机 夜视版" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米兔儿童电话手表+stat_购物车.购物车推荐_4_1_1', '//item.mi.com/1155100006.html', 'pcpid']);" data-stat-id="米兔儿童电话手表+stat_购物车.购物车推荐_4_1_1" data-stat-aid="米兔儿童电话手表" data-stat-pid="stat_购物车.购物车推荐_4_1_1" href="http://item.mi.com/1155100006.html" data-stat-method="1_1" data-stat-index="4" data-stat-text="米兔儿童电话手表" target="_top"> <img src="/homes/CART/t1_tegbmvv1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1_tEgBmVv1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="米兔儿童电话手表" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米兔儿童电话手表+stat_购物车.购物车推荐_4_1_1', '//item.mi.com/1155100006.html', 'pcpid']);" data-stat-id="米兔儿童电话手表+stat_购物车.购物车推荐_4_1_1" data-stat-aid="米兔儿童电话手表" data-stat-pid="stat_购物车.购物车推荐_4_1_1" href="http://item.mi.com/1155100006.html" data-stat-method="1_1" data-stat-index="4" data-stat-text="米兔儿童电话手表" target="_top"> 米兔儿童电话手表 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          299元
         </dd> 
         <dd class="xm-recommend-tips">
           7155人好评 
          <a style="display: none;" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米兔儿童电话手表+stat_购物车加购.购物车推荐_4_1_1', '//cart.mi.com/cart/add/2155100006-0-1', 'pcpid']);" data-stat-id="米兔儿童电话手表+stat_购物车加购.购物车推荐_4_1_1" data-stat-aid="米兔儿童电话手表" data-stat-pid="stat_购物车加购.购物车推荐_4_1_1" href="http://cart.mi.com/cart/add/2155100006-0-1" data-stat-gid="2155100006" data-stat-method="1_1" data-stat-index="4" data-stat-text="米兔儿童电话手表" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-90分旅行箱24寸+stat_购物车.购物车推荐_5_1_1', '//item.mi.com/1155100011.html', 'pcpid']);" data-stat-id="90分旅行箱24寸+stat_购物车.购物车推荐_5_1_1" data-stat-aid="90分旅行箱24寸" data-stat-pid="stat_购物车.购物车推荐_5_1_1" href="http://item.mi.com/1155100011.html" data-stat-method="1_1" data-stat-index="5" data-stat-text="90分旅行箱 24寸" target="_top"> <img src="/homes/CART/t1cdbjbgat1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1CDbjBgAT1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="90分旅行箱 24寸" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-90分旅行箱24寸+stat_购物车.购物车推荐_5_1_1', '//item.mi.com/1155100011.html', 'pcpid']);" data-stat-id="90分旅行箱24寸+stat_购物车.购物车推荐_5_1_1" data-stat-aid="90分旅行箱24寸" data-stat-pid="stat_购物车.购物车推荐_5_1_1" href="http://item.mi.com/1155100011.html" data-stat-method="1_1" data-stat-index="5" data-stat-text="90分旅行箱 24寸" target="_top"> 90分旅行箱 24寸 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          349元
         </dd> 
         <dd class="xm-recommend-tips">
           1万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-90分旅行箱24寸+stat_购物车加购.购物车推荐_5_1_1', '//cart.mi.com/cart/add/2155100008-0-1', 'pcpid']);" data-stat-id="90分旅行箱24寸+stat_购物车加购.购物车推荐_5_1_1" data-stat-aid="90分旅行箱24寸" data-stat-pid="stat_购物车加购.购物车推荐_5_1_1" href="http://cart.mi.com/cart/add/2155100008-0-1" data-stat-gid="2155100008" data-stat-method="1_1" data-stat-index="5" data-stat-text="90分旅行箱 24寸" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米家压力IH电饭煲+stat_购物车.购物车推荐_6_1_1', '//item.mi.com/1161200060.html', 'pcpid']);" data-stat-id="米家压力IH电饭煲+stat_购物车.购物车推荐_6_1_1" data-stat-aid="米家压力IH电饭煲" data-stat-pid="stat_购物车.购物车推荐_6_1_1" href="http://item.mi.com/1161200060.html" data-stat-method="1_1" data-stat-index="6" data-stat-text="米家压力IH电饭煲" target="_top"> <img src="/homes/CART/t1ovc_byy_1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1OVC_ByY_1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="米家压力IH电饭煲" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米家压力IH电饭煲+stat_购物车.购物车推荐_6_1_1', '//item.mi.com/1161200060.html', 'pcpid']);" data-stat-id="米家压力IH电饭煲+stat_购物车.购物车推荐_6_1_1" data-stat-aid="米家压力IH电饭煲" data-stat-pid="stat_购物车.购物车推荐_6_1_1" href="http://item.mi.com/1161200060.html" data-stat-method="1_1" data-stat-index="6" data-stat-text="米家压力IH电饭煲" target="_top"> 米家压力IH电饭煲 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          999元
         </dd> 
         <dd class="xm-recommend-tips">
           2994人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-米家压力IH电饭煲+stat_购物车加购.购物车推荐_6_1_1', '//cart.mi.com/cart/add/2161200066-0-1', 'pcpid']);" data-stat-id="米家压力IH电饭煲+stat_购物车加购.购物车推荐_6_1_1" data-stat-aid="米家压力IH电饭煲" data-stat-pid="stat_购物车加购.购物车推荐_6_1_1" href="http://cart.mi.com/cart/add/2161200066-0-1" data-stat-gid="2161200066" data-stat-method="1_1" data-stat-index="6" data-stat-text="米家压力IH电饭煲" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米圈铁耳机+stat_购物车.购物车推荐_7_1_1', '//item.mi.com/1161200010.html', 'pcpid']);" data-stat-id="小米圈铁耳机+stat_购物车.购物车推荐_7_1_1" data-stat-aid="小米圈铁耳机" data-stat-pid="stat_购物车.购物车推荐_7_1_1" href="http://item.mi.com/1161200010.html" data-stat-method="1_1" data-stat-index="7" data-stat-text="小米圈铁耳机" target="_top"> <img src="/homes/CART/t1yck_bjyv1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1ycK_BjYv1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="小米圈铁耳机" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米圈铁耳机+stat_购物车.购物车推荐_7_1_1', '//item.mi.com/1161200010.html', 'pcpid']);" data-stat-id="小米圈铁耳机+stat_购物车.购物车推荐_7_1_1" data-stat-aid="小米圈铁耳机" data-stat-pid="stat_购物车.购物车推荐_7_1_1" href="http://item.mi.com/1161200010.html" data-stat-method="1_1" data-stat-index="7" data-stat-text="小米圈铁耳机" target="_top"> 小米圈铁耳机 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          99元
         </dd> 
         <dd class="xm-recommend-tips">
           1.2万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米圈铁耳机+stat_购物车加购.购物车推荐_7_1_1', '//cart.mi.com/cart/add/2161200010-0-1', 'pcpid']);" data-stat-id="小米圈铁耳机+stat_购物车加购.购物车推荐_7_1_1" data-stat-aid="小米圈铁耳机" data-stat-pid="stat_购物车加购.购物车推荐_7_1_1" href="http://cart.mi.com/cart/add/2161200010-0-1" data-stat-gid="2161200010" data-stat-method="1_1" data-stat-index="7" data-stat-text="小米圈铁耳机" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源10000mAh高配版+stat_购物车.购物车推荐_8_1_1', '//item.mi.com/1160900029.html', 'pcpid']);" data-stat-id="小米移动电源10000mAh高配版+stat_购物车.购物车推荐_8_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-pid="stat_购物车.购物车推荐_8_1_1" href="http://item.mi.com/1160900029.html" data-stat-method="1_1" data-stat-index="8" data-stat-text="小米移动电源10000mAh 高配版" target="_top"> <img src="/homes/CART/t1eszgbjvt1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1eSZgBjVT1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="小米移动电源10000mAh 高配版" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源10000mAh高配版+stat_购物车.购物车推荐_8_1_1', '//item.mi.com/1160900029.html', 'pcpid']);" data-stat-id="小米移动电源10000mAh高配版+stat_购物车.购物车推荐_8_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-pid="stat_购物车.购物车推荐_8_1_1" href="http://item.mi.com/1160900029.html" data-stat-method="1_1" data-stat-index="8" data-stat-text="小米移动电源10000mAh 高配版" target="_top"> 小米移动电源10000mAh 高配版 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          149元
         </dd> 
         <dd class="xm-recommend-tips">
           1.9万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米移动电源10000mAh高配版+stat_购物车加购.购物车推荐_8_1_1', '//cart.mi.com/cart/add/2160900011-0-1', 'pcpid']);" data-stat-id="小米移动电源10000mAh高配版+stat_购物车加购.购物车推荐_8_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-pid="stat_购物车加购.购物车推荐_8_1_1" href="http://cart.mi.com/cart/add/2160900011-0-1" data-stat-gid="2160900011" data-stat-method="1_1" data-stat-index="8" data-stat-text="小米移动电源10000mAh 高配版" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米体重秤+stat_购物车.购物车推荐_9_1_1', '//item.mi.com/1151100013.html', 'pcpid']);" data-stat-id="小米体重秤+stat_购物车.购物车推荐_9_1_1" data-stat-aid="小米体重秤" data-stat-pid="stat_购物车.购物车推荐_9_1_1" href="http://item.mi.com/1151100013.html" data-stat-method="1_1" data-stat-index="9" data-stat-text="小米体重秤" target="_top"> <img src="/homes/CART/t1swd_b7vt1rxrhcrk.jpg" srcset="//i1.mifile.cn/a1/T1sWd_B7VT1RXrhCrK.jpg?width=280&amp;height=280 2x" alt="小米体重秤" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米体重秤+stat_购物车.购物车推荐_9_1_1', '//item.mi.com/1151100013.html', 'pcpid']);" data-stat-id="小米体重秤+stat_购物车.购物车推荐_9_1_1" data-stat-aid="小米体重秤" data-stat-pid="stat_购物车.购物车推荐_9_1_1" href="http://item.mi.com/1151100013.html" data-stat-method="1_1" data-stat-index="9" data-stat-text="小米体重秤" target="_top"> 小米体重秤 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          99元
         </dd> 
         <dd class="xm-recommend-tips">
           8.7万人好评 
          <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-小米体重秤+stat_购物车加购.购物车推荐_9_1_1', '//cart.mi.com/cart/add/2151100003-0-1', 'pcpid']);" data-stat-id="小米体重秤+stat_购物车加购.购物车推荐_9_1_1" data-stat-aid="小米体重秤" data-stat-pid="stat_购物车加购.购物车推荐_9_1_1" href="http://cart.mi.com/cart/add/2151100003-0-1" data-stat-gid="2151100003" data-stat-method="1_1" data-stat-index="9" data-stat-text="小米体重秤" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li>
      </ul>
     </div>
    </div> 
    <div class="cart-recommend" id="J_miHistoryBox"></div> 
   </div> 
  </div> 
  <!-- 商品列表 模板 --> 
  <!-- 活动商品 --> 
  <!-- 加价购 --> 
  <!-- 凑单 --> 
  <!-- 礼物 --> 
  <!-- 过期、售罄商品 模版 --> 
  <!-- 删除开放购买商品提示 --> 
  <div aria-hidden="true" style="display: none;" class="modal fade modal-hide  modal-alert" id="J_modalAlert"> 
   <div class="modal-bd"> 
    <div class="text"> 
     <h3 id="J_alertMsg"></h3> 
    </div> 
    <div class="actions"> 
     <button class="btn btn-gray" data-dismiss="modal" id="J_alertCancel">取消</button> 
     <button class="btn btn-primary" data-dismiss="modal" id="J_alertOk">确定</button> 
    </div> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-9cce544f88fddc4d', 'javascript:void(0);', 'pcpid']);" data-stat-id="9cce544f88fddc4d" class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a> 
   </div> 
  </div> 
  <!--结算提示 --> 
  <!-- 保险弹窗 --> 
  <!-- 保险弹窗 --> 
  <div class="modal fade in modal-hide modal-baoxian" id="J_baoxian"> 
   <div class="modal-header"> 
    <h3>小米意外保障服务</h3> 
    <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
   </div> 
   <div class="modal-body"> 
    <div class="con-1"> 
     <h4>购买保障服务的设备在意外受损时可获得免费维修</h4> 
     <ul class="icon-list clearfix"> 
      <li> <span class="icon icon-1"></span> 屏幕碎裂免费换新屏 </li> 
      <li> <span class="icon icon-2"></span> 进水、摔落免费修 </li> 
      <li> <span class="icon icon-3"></span> 修好为止 </li> 
     </ul> 
     <dl class="xuzhi"> 
      <dt>
       为保障您的权益，购买前请仔细阅读：
      </dt> 
      <dd>
       &middot; 本保障服务目前仅适用于小米手机/平板用户。
      </dd> 
      <dd>
       &middot; 本保障服务自您收到设备起生效，有效期为一年，若您在收到设备7日内需要取消保障服务，请连同设备一起申请退货。
      </dd> 
      <dd>
       &middot; 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以小米意外保障服务条款为准）。
       <br /> 
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-bbe4cc973798c9b1', '//cart.mi.com/static/insuranceAgreement.php', 'pcpid']);" data-stat-id="bbe4cc973798c9b1" href="http://cart.mi.com/static/insuranceAgreement.php?type=" target="_top" class="J_baoxianMore">了解《小米意外保障服务》详细条款&gt;</a> 
      </dd> 
     </dl> 
    </div> 
   </div> 
   <div class="modal-footer clearfix"> 
    <p> <span class="J_baoxianAgree"><i class="iconfont icon-checkbox">√</i> 我已经阅读并同意</span>《<a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-af8203aaabe128b0', '//cart.mi.com/static/insuranceAgreement.php', 'pcpid']);" data-stat-id="af8203aaabe128b0" href="http://cart.mi.com/static/insuranceAgreement.php?type=" target="_top" class="J_baoxianMore">小米意外保障服务条款</a>》 </p> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-a7880a1d650986e4', '', 'pcpid']);" data-stat-id="a7880a1d650986e4" class="btn btn-primary J_buyBaoxian">确认并购买服务</a> 
   </div> 
  </div> 
  <!-- 电视挂架弹窗 --> 
  <div class="modal fade in modal-hide modal-guajia" id="J_modalGuajia"> 
   <div class="modal-header"> 
    <h3>预约电视挂架安装服务</h3> 
    <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
   </div> 
   <div class="modal-body"> 
    <h4>购买须知：</h4> 
    <ol class="icon-list clearfix"> 
     <li>本服务采用线上预约，安装时工作人员上门收费的服务模式。</li> 
     <li>确认预约之后，工作人员将在商品（小米电视）到货后的3个工作日内，与您取得联系并上门安装。</li> 
     <li>具体安装台数请与小米工作人员沟通。</li> 
     <li>往返距离大于30公里的上门服务属于远程服务，对超出30公里的路程部分收取远程费，收费标准为1元/公里。</li> 
     <li style="color: rgb(255, 103, 0);">为了确保您的权益，请核实为您提供服务的工程师工牌信息，如有疑问现场拨打400-100-5678电话进行确认。</li> 
    </ol> 
    <table> 
     <caption>
       材料费用： 
     </caption> 
     <thead> 
      <tr> 
       <th class="th-1"> 附件名称 </th> 
       <th class="th-2"> 使用说明 </th> 
       <th class="th-3"> 价格 </th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td> 小米电视壁挂架 </td> 
       <td> 用于墙面挂装，由小米授权服务商进行安装 </td> 
       <td> 99元 </td> 
      </tr> 
      <tr> 
       <td> 小米电视主机/条形音响挂架 </td> 
       <td> 用于墙面挂装，由小米授权服务商进行安装 </td> 
       <td> 80元 </td> 
      </tr> 
     </tbody> 
    </table> 
    <!-- <table>
            <caption>
                安装费用：
            </caption>
            <thead>
                <tr>
                    <th class="th-1">
                        安装类型
                    </th>
                    <th class="th-2">
                        服务内容
                    </th>
                    <th class="th-3">
                        人工费
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        主机/音响
                    </td>
                    <td>
                        条形音响+低音炮+座/挂装+连接组合+功能调试
                    </td>
                    <td>
                        50元/台
                    </td>
                </tr>
                <tr>
                    <td>
                        电视
                    </td>
                    <td>
                        电视+音响+座/挂装+连接组合+功能调试
                    </td>
                    <td>
                        100元/台
                    </td>
                </tr>
            </tbody>
        </table> --> 
    <table> 
     <caption>
      小米电视安装服务费标准
     </caption> 
     <thead> 
      <tr> 
       <th rowspan="2" colspan="2" width="50%">机型</th> 
       <th colspan="3">安装类型</th> 
      </tr> 
      <tr> 
       <th>挂装</th> 
       <th>座装</th> 
       <th>移机</th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td rowspan="2">一体电视 / 分体屏幕</td> 
       <td>≤60 吋</td> 
       <td>100元/台</td> 
       <td>100元/台</td> 
       <td>100元/台</td> 
      </tr> 
      <tr> 
       <td>61-70 吋</td> 
       <td>200元/台</td> 
       <td>200元/台</td> 
       <td>200元/台</td> 
      </tr> 
      <tr> 
       <td rowspan="3">附件 / 商品</td> 
       <td>小米电视主机</td> 
       <td>50元/台</td> 
       <td>50元/台</td> 
       <td>50元/台</td> 
      </tr> 
      <tr> 
       <td>小米 soundbar</td> 
       <td>50元/台</td> 
       <td>50元/台</td> 
       <td>50元/台</td> 
      </tr> 
      <tr> 
       <td>小米低音炮</td> 
       <td>－－</td> 
       <td>50元/台</td> 
       <td>50元/台</td> 
      </tr> 
     </tbody> 
    </table> 
    <dl> 
     <dt>
      如何计算费用：
     </dt> 
     <dd>
      如网点到您家里单程22公里，需要安装电视挂装
     </dd> 
     <dd>
      总计费用：手工费（100元）+挂架材料费（99元）+路程补贴 （22*2-30=14元）=213元
     </dd> 
     <dd>
      *网点到家往返超出30公里，需另外收取1元/公里的远程服务费
     </dd> 
    </dl> 
    <p> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-2f2752dd70aa94be', 'http://bbs.xiaomi.cn/thread/index/tid/11435552', 'pcpid']);" data-stat-id="2f2752dd70aa94be" href="http://bbs.xiaomi.cn/thread/index/tid/11435552" target="_top">了解更多细则&gt;</a> </p> 
   </div> 
   <div class="modal-footer clearfix"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f1134d3619b6ab4c', '', 'pcpid']);" data-stat-id="f1134d3619b6ab4c" class="btn btn-primary J_buyGuaJia">确认预约</a> 
   </div> 
  </div> 
  <!-- 净水器或水龙头安装服务 --> 
  <div class="modal fade in modal-hide modal-water-install" id="J_modalWaterInstall"> 
   <div class="modal-header"> 
    <h3>预约小米净水器或水龙头安装服务</h3> 
    <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
   </div> 
   <div class="modal-body"> 
    <h4>购买须知：</h4> 
    <ol class="icon-list clearfix"> 
     <li>本服务采用线上预约，安装时工作人员采取上门收费的服务形式。</li> 
     <li>确认预约之后，工作人员将在商品（小米净水器）出库后（订单可查询）的3个工作日内，与您取得联系并上门安装。</li> 
     <li>同一次上门安装小米净水器和不锈钢无铅水龙头，只收取一次安装人工费用（50元/台）。</li> 
     <li>往返距离大于30公里的上门服务属于远程服务,对超出30公里的路程部分收取远程费,收费标准为1元/公里。</li> 
     <li style="color: rgb(255, 103, 0);">为了确保您的权益，请核实为您提供服务的工程师工牌信息，如有疑问现场拨打400-100-5678电话进行确认。</li> 
    </ol> 
    <p> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-7acb93f147ed4870', 'http://bbs.xiaomi.cn/t-11515570', 'pcpid']);" data-stat-id="7acb93f147ed4870" href="http://bbs.xiaomi.cn/t-11515570" target="_top">了解更多细则 &gt;</a> </p> 
    <table> 
     <caption>
       收费标准： 
     </caption> 
     <thead> 
      <tr> 
       <th> 项目名称 </th> 
       <th> 安装人工费用 </th> 
       <th> 材料费用 </th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td> 安装小米净水器 </td> 
       <td> 50元/台 </td> 
       <td> －－ </td> 
      </tr> 
      <tr> 
       <td> 安装不锈钢无铅水龙头 </td> 
       <td> 50元/台 </td> 
       <td> 240元 </td> 
      </tr> 
     </tbody> 
    </table> 
    <p>温馨提示：如果您无需更换水龙头，自己动手就可以完成净水器安装哦。<a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-684f3996556aafe0', '//www.mi.com/water/gallery/', 'pcpid']);" data-stat-id="684f3996556aafe0" href="http://www.mi.com/water/gallery/?showInstall" target="_top">参考安装演示 &raquo;</a></p> 
   </div> 
   <div class="modal-footer clearfix"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-effd269afea217cb', '', 'pcpid']);" data-stat-id="effd269afea217cb" class="btn btn-primary J_buyWaterInstall">确认预约</a> 
   </div> 
  </div> 
  <div class="site-footer"> 
   <div class="container"> 
    <div class="footer-service"> 
     <ul class="list-service clearfix"> 
      <li><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-da46b3d5586757a4', '//www.mi.com/service/exchange#repaire', 'pcpid']);" data-stat-id="da46b3d5586757a4" rel="nofollow" href="http://www.mi.com/service/exchange#repaire" target="_top"><i class="iconfont"></i>1小时快修服务</a></li> 
      <li><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid']);" data-stat-id="78babcae8a619e26" rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_top"><i class="iconfont"></i>7天无理由退货</a></li> 
      <li><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid']);" data-stat-id="d1745f68f8d2dad7" rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_top"><i class="iconfont"></i>15天免费换货</a></li> 
      <li><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid']);" data-stat-id="f1b5c2451cf73123" rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_top"><i class="iconfont"></i>满150元包邮</a></li> 
      <li><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid']);" data-stat-id="b57397dd7ad77a31" rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_top"><i class="iconfont"></i>520余家售后网点</a></li> 
     </ul> 
    </div> 
    <div class="footer-links clearfix"> 
     <dl class="col-links col-links-first"> 
      <dt>
       帮助中心
      </dt> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid']);" data-stat-id="e5dad0738a41014f" rel="nofollow" href="http://www.mi.com/service/account/register/" target="_top">账户管理</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid']);" data-stat-id="8e128f473e680197" rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_top">购物指南</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid']);" data-stat-id="fd9e3532f60a2f8d" rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_top">订单操作</a>
      </dd> 
     </dl> 
     <dl class="col-links "> 
      <dt>
       服务支持
      </dt> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid']);" data-stat-id="8e282b6f669ba990" rel="nofollow" href="http://www.mi.com/service/exchange" target="_top">售后政策</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid']);" data-stat-id="5f2408ab3c808aa2" rel="nofollow" href="http://fuwu.mi.com/" target="_top">自助服务</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid']);" data-stat-id="18c340c920a278a1" rel="nofollow" href="http://xiazai.mi.com/" target="_top">相关下载</a>
      </dd> 
     </dl> 
     <dl class="col-links "> 
      <dt>
       线下门店
      </dt> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid']);" data-stat-id="b27b566974e4aa67" rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_top">小米之家</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid']);" data-stat-id="6dab396f7a873f15" rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_top">服务网点</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid']);" data-stat-id="9af5efe014c3aea2" rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_top">零售网点</a>
      </dd> 
     </dl> 
     <dl class="col-links "> 
      <dt>
       关于小米
      </dt> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid']);" data-stat-id="f6d386c65b1f4132" rel="nofollow" href="http://www.mi.com/about" target="_top">了解小米</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid']);" data-stat-id="4307a445f5592adb" rel="nofollow" href="http://hr.xiaomi.com/" target="_top">加入小米</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid']);" data-stat-id="6842e821365ee45d" rel="nofollow" href="http://www.mi.com/about/contact" target="_top">联系我们</a>
      </dd> 
     </dl> 
     <dl class="col-links "> 
      <dt>
       关注我们
      </dt> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-464883aa6e799290', 'http://e.weibo.com/xiaomishouji', 'pcpid']);" data-stat-id="464883aa6e799290" rel="nofollow" href="http://e.weibo.com/xiaomishouji" target="_top">新浪微博</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-78fdefa9dee561b5', 'http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat', 'pcpid']);" data-stat-id="78fdefa9dee561b5" rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat" target="_top">小米部落</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-47539f6570f0da90', '#J_modalWeixin', 'pcpid']);" data-stat-id="47539f6570f0da90" rel="nofollow" href="#J_modalWeixin" data-toggle="modal">官方微信</a>
      </dd> 
     </dl> 
     <dl class="col-links "> 
      <dt>
       特色服务
      </dt> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid']);" data-stat-id="fdc16dd51892a164" rel="nofollow" href="http://order.mi.com/queue/f2code" target="_top">F 码通道</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-99876c8aaf8ef0a4', '//www.mi.com/mimobile/', 'pcpid']);" data-stat-id="99876c8aaf8ef0a4" rel="nofollow" href="http://www.mi.com/mimobile/" target="_top">小米移动</a>
      </dd> 
      <dd>
       <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid']);" data-stat-id="b08be6bd51351e1a" rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_top">防伪查询</a>
      </dd> 
     </dl> 
     <div class="col-contact"> 
      <p class="phone">400-100-5678</p> 
      <p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span> <span class="J_serviceTime-holiday" style="display: none;">2月7日至13日服务时间 9:00-18:00</span><br />（仅收市话费）</p> 
      <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid']);" data-stat-id="a7642f0a3475d686" rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_top"><i class="iconfont"></i> 24小时在线客服</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="site-info"> 
   <div class="container"> 
    <div class="logo ir">
     小米官网
    </div> 
    <div class="info-text"> 
     <p class="sites"><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="b9017a4e9e9eefe3" rel="nofollow" href="http://www.mi.com/index.html" target="_top">小米商城</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid']);" data-stat-id="ed2a0e25c8b0ca2f" rel="nofollow" href="http://www.miui.com/" target="_top">MIUI</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid']);" data-stat-id="826b32c1478a98d5" rel="nofollow" href="http://www.miliao.com/" target="_top">米聊</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid']);" data-stat-id="c9d2af1ad828a834" rel="nofollow" href="http://www.duokan.com/" target="_top">多看书城</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid']);" data-stat-id="96f1a8cecc909af2" rel="nofollow" href="http://www.miwifi.com/" target="_top">小米路由器</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid']);" data-stat-id="347f6dd0d8d9fda3" rel="nofollow" href="http://call.mi.com/" target="_top">视频电话</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-4ad42379062eda19', 'http://blog.xiaomi.com/', 'pcpid']);" data-stat-id="4ad42379062eda19" rel="nofollow" href="http://blog.xiaomi.com/" target="_top">小米后院</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid']);" data-stat-id="dfe0fac59cfb15d9" rel="nofollow" href="http://xiaomi.tmall.com/" target="_top">小米天猫店</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid']);" data-stat-id="c2613d0d3b77ddff" rel="nofollow" href="http://shop115048570.taobao.com/" target="_top">小米淘宝直营店</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-2f48f953961c637d', 'http://union.mi.com/', 'pcpid']);" data-stat-id="2f48f953961c637d" rel="nofollow" href="http://union.mi.com/" target="_top">小米网盟</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-6479cd2d041bcf04', '//static.mi.com/feedback/', 'pcpid']);" data-stat-id="6479cd2d041bcf04" rel="nofollow" href="http://static.mi.com/feedback/" target="_top">问题反馈</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid']);" data-stat-id="9db137a8e0d5b3dd" rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a> </p> 
     <p>&copy;<a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid']);" data-stat-id="836cacd9ca5b75dd" href="http://www.mi.com/" target="_top" title="mi.com">mi.com</a> 京ICP证110507号 京ICP备10046444号 <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134', 'pcpid']);" data-stat-id="57efc92272d4336b" rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_top">京公网安备11010802020134号 </a><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-c5f81675b79eb130', '//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid']);" data-stat-id="c5f81675b79eb130" rel="nofollow" href="jingwangwen.jpg" target="_top">京网文[2014]0059-0009号</a> <br /> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p> 
    </div> 
    <div class="info-links"> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-de920be99941f792', '//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid']);" data-stat-id="de920be99941f792" rel="nofollow" href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_top"><img rel="nofollow" src="/homes/CART/seal" alt="TRUSTe Privacy Certification" /></a> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-d44905018f8d7096', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid']);" data-stat-id="d44905018f8d7096" rel="nofollow" href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_top"><img rel="nofollow" src="/homes/CART/v-logo-2.png" alt="诚信网站" /></a> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-3e1533699f264eac', 'https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid']);" data-stat-id="3e1533699f264eac" rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_top"><img rel="nofollow" src="/homes/CART/v-logo-1.png" alt="可信网站" /></a> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-b085e50c7ec83104', 'http://www.315online.com.cn/member/315140007.html', 'pcpid']);" data-stat-id="b085e50c7ec83104" rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_top"><img rel="nofollow" src="/homes/CART/v-logo-3.png" alt="网上交易保障中心" /></a> 
    </div> 
   </div> 
   <div class="slogan ir">
    探索黑科技，小米为发烧而生
   </div> 
  </div> 
  <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520"> 
   <div class="modal-hd"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-cfd3189b8a874ba4', '', 'pcpid']);" data-stat-id="cfd3189b8a874ba4" class="close" data-dismiss="modal"><i class="iconfont"></i></a> 
    <span class="title">小米手机官方微信二维码</span> 
   </div> 
   <div class="modal-bd"> 
    <p style="margin: 0px 0px 10px;">打开微信，点击右上角的“+”，选择“扫一扫”功能，<br />对准下方二维码即可。</p> 
    <img alt="" src="qr.png" height="375" width="375" /> 
   </div> 
  </div> 
  <!-- .modal-weixin END --> 
  <div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue"> 
   <div class="modal-body"> 
    <span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span> 
    <div class="con"> 
     <div class="title">
      正在排队，请稍候喔！
     </div> 
     <div class="queue-tip-box"> 
      <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p> 
      <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p> 
      <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p> 
      <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p> 
      <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p> 
     </div> 
    </div> 
    <div class="queue-posters"> 
     <div class="poster poster-3"></div> 
     <div class="poster poster-2"></div> 
     <div class="poster poster-1"></div> 
     <div class="poster poster-4"></div> 
     <div class="poster poster-5"></div> 
    </div> 
   </div> 
  </div> 
  <!-- .xm-dm-queue END --> 
  <div id="J_bigtapError" class="modal modal-hide modal-bigtap-error"> 
   <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont"></i></span> 
   <div class="modal-body"> 
    <h3>抱歉，网络拥堵无法连接服务器</h3> 
    <p class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p> 
    <p> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-c148a4197491d5bd', '', 'pcpid']);" data-stat-id="c148a4197491d5bd" class="btn btn-primary" id="J_bigtapRetry">重试</a> </p> 
   </div> 
  </div> 
  <div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode"> 
   <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
   <div class="modal-body"> 
    <h3 class="title">为防黄牛，请您输入下面的验证码</h3> 
    <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br /> 所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p> 
    <div class="mode-loading" id="J_bigtapModeLoading"> 
     <img src="/homes/CART/loading.gif" alt="" height="32" width="32" /> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-ce9e5bb5b994ad55', 'javascript:void(0);', 'pcpid']);" data-stat-id="ce9e5bb5b994ad55" id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">网络错误，点击重新获取验证码！</a> 
    </div> 
    <div class="mode-action hide" id="J_bigtapModeAction"> 
     <div class="mode-con" id="J_bigtapModeContent"></div> 
     <input value="" name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text" /> 
     <p class="tip" id="J_bigtapModeTip"></p> 
     <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-7f083d6abed714f8', '', 'pcpid']);" data-stat-id="7f083d6abed714f8" class="btn  btn-gray" id="J_bigtapModeSubmit">确认</a> 
    </div> 
   </div> 
  </div> 
  <div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec"> 
   <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
   <div class="modal-body "> 
    <div class="content clearfix"> 
     <span class="mitu"></span> 
     <p class="title">很抱歉，人真是太多了<br />您晚了一步...</p> 
    </div> 
    <div class="bigtap-recomment-goods"> 
     <div class="hd">
      <span>这些产品也不错，而且有现货哦！</span>
     </div> 
     <ul class="clearfix" id="J_bigtapRecommentList"></ul> 
    </div> 
   </div> 
  </div> 
  <!-- .xm-dm-error END --> 
  <div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640"> 
   <div class="modal-hd"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-d63900908fde14b1', '', 'pcpid']);" data-stat-id="d63900908fde14b1" class="close" data-dismiss="modal"><i class="iconfont"></i></a> 
    <span class="title">Select Region</span> 
   </div> 
   <div class="modal-bd"> 
    <h3>Welcome to Mi.com</h3> 
    <p class="modal-globalSites-tips">Please select your country or region</p> 
    <p class="modal-globalSites-links clearfix"> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-51fe807618ae85f4', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="51fe807618ae85f4" href="http://www.mi.com/index.html">Mainland China</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-d8e4264197de1747', 'http://www.mi.com/hk/', 'pcpid']);" data-stat-id="d8e4264197de1747" href="http://www.mi.com/hk/">Hong Kong</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-8b54359fb6116e28', 'http://www.mi.com/tw/', 'pcpid']);" data-stat-id="8b54359fb6116e28" href="http://www.mi.com/tw/">Taiwan</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-e9c0506f7e4e7161', 'http://www.mi.com/sg/', 'pcpid']);" data-stat-id="e9c0506f7e4e7161" href="http://www.mi.com/sg/">Singapore</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-d6299ad30ec761a8', 'http://www.mi.com/my/', 'pcpid']);" data-stat-id="d6299ad30ec761a8" href="http://www.mi.com/my/">Malaysia</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-22b601cf7b3ada84', 'http://www.mi.com/ph/', 'pcpid']);" data-stat-id="22b601cf7b3ada84" href="http://www.mi.com/ph/">Philippines</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-441d26d4571e10dc', 'http://www.mi.com/in/', 'pcpid']);" data-stat-id="441d26d4571e10dc" href="http://www.mi.com/in/">India</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-88ccf9755c488ec5', 'http://www.mi.com/id/', 'pcpid']);" data-stat-id="88ccf9755c488ec5" href="http://www.mi.com/id/">Indonesia</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-c41d871bf5ddcd95', 'http://br.mi.com/', 'pcpid']);" data-stat-id="c41d871bf5ddcd95" href="http://br.mi.com/">Brasil</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-4426c5dac474df5f', 'http://www.mi.com/en/', 'pcpid']);" data-stat-id="4426c5dac474df5f" href="http://www.mi.com/en/">Global Home</a> <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-261bb8cf155fb56b', 'http://www.mi.com/mena/', 'pcpid']);" data-stat-id="261bb8cf155fb56b" href="http://www.mi.com/mena/"> MENA</a> </p> 
   </div> 
  </div> 
  <!-- .modal-globalSites END --> 
  <div class="modal fade modal-hide modal-choose-pro J_modalRaisebuy J_carouselContainer" id="J_choosePro-2233" data-isadd="true"> 
   <div class="modal-header"> 
    <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
    <h3>选择产品</h3> 
   </div> 
   <div class="modal-body"> 
    <ul class="clearfix list J_chooseProList "> 
     <li class="span4" data-gid="2162800006-0-1-2233" data-num="0" data-maxnum="" data-pid="2162800006" data-actid="2233"> <img disabled="" data-src="//i1.mifile.cn/a1/pms_1468287589.40786199!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">米家随身风扇 蓝色</p> <p class="g-price">12.9元</p> <i class="icon-radio"></i> </li> 
     <li class="span4" data-gid="2162800007-0-1-2233" data-num="0" data-maxnum="" data-pid="2162800007" data-actid="2233"> <img disabled="" data-src="//i1.mifile.cn/a1/pms_1468287611.41694554!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">米家随身风扇 白色</p> <p class="g-price">12.9元</p> <i class="icon-radio"></i> </li> 
    </ul> 
   </div> 
   <div class="modal-footer"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-dfab20da8a5fcf88', 'javascript:void(0);', 'pcpid']);" data-stat-id="dfab20da8a5fcf88" href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn" data-actid="2233" data-type="1">加入购物车</a> 
   </div> 
  </div> 
  <div class="modal fade modal-hide modal-choose-pro J_modalRaisebuy J_carouselContainer" id="J_choosePro-2099" data-isadd="true"> 
   <div class="modal-header"> 
    <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
    <h3>选择产品</h3> 
   </div> 
   <div class="modal-body"> 
    <ul class="clearfix list J_chooseProList "> 
     <li class="span4" data-gid="2154300020-0-1-2099" data-num="0" data-maxnum="" data-pid="2154300020" data-actid="2099"> <img disabled="" data-src="//i1.mifile.cn/a1/T1xxVTBghv1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">彩虹5号电池（10粒装） 标准装</p> <p class="g-price">9.9元</p> <i class="icon-radio"></i> </li> 
     <li class="span4" data-gid="2155000004-0-1-2099" data-num="0" data-maxnum="" data-pid="2155000004" data-actid="2099"> <img disabled="" data-src="//i1.mifile.cn/a1/T178EjBjVT1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">彩虹7号电池（10粒装） 彩色</p> <p class="g-price">9.9元</p> <i class="icon-radio"></i> </li> 
    </ul> 
   </div> 
   <div class="modal-footer"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-dfab20da8a5fcf88', 'javascript:void(0);', 'pcpid']);" data-stat-id="dfab20da8a5fcf88" href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn" data-actid="2099" data-type="1">加入购物车</a> 
   </div> 
  </div> 
  <div class="modal fade modal-hide modal-choose-pro J_modalRaisebuy J_carouselContainer" id="J_choosePro-1981" data-isadd="true"> 
   <div class="modal-header"> 
    <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
    <h3>选择产品</h3> 
   </div> 
   <div class="modal-body"> 
    <ul class="clearfix list J_chooseProList  J_carouselList "> 
     <li class="span4" data-gid="2161200004-0-1-1981" data-num="0" data-maxnum="" data-pid="2161200004" data-actid="1981"> <img disabled="" data-src="//i1.mifile.cn/a1/T1WxYvB_xv1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">小米活塞耳机 基础版 黑色</p> <p class="g-price">29元</p> <i class="icon-radio"></i> </li> 
     <li class="span4" data-gid="2161200005-0-1-1981" data-num="0" data-maxnum="" data-pid="2161200005" data-actid="1981"> <img disabled="" data-src="//i1.mifile.cn/a1/T1Ax_vB_Kv1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">小米活塞耳机 基础版 银色</p> <p class="g-price">29元</p> <i class="icon-radio"></i> </li> 
     <li class="span4" data-gid="2161200006-0-1-1981" data-num="0" data-maxnum="" data-pid="2161200006" data-actid="1981"> <img disabled="" data-src="//i1.mifile.cn/a1/T1obJvBghv1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">小米活塞耳机 基础版 粉色</p> <p class="g-price">29元</p> <i class="icon-radio"></i> </li> 
     <li class="span4" data-gid="2161200007-0-1-1981" data-num="0" data-maxnum="" data-pid="2161200007" data-actid="1981"> <img disabled="" data-src="//i1.mifile.cn/a1/T1crZvBsLv1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">小米活塞耳机 基础版 紫色</p> <p class="g-price">29元</p> <i class="icon-radio"></i> </li> 
     <li class="span4" data-gid="2161200008-0-1-1981" data-num="0" data-maxnum="" data-pid="2161200008" data-actid="1981"> <img disabled="" data-src="//i1.mifile.cn/a1/T1szd_BjVv1RXrhCrK!220x220.jpg" alt="" height="220" width="220" /> <p class="g-name">小米活塞耳机 基础版 蓝色</p> <p class="g-price">29元</p> <i class="icon-radio"></i> </li> 
    </ul> 
   </div> 
   <div class="modal-footer"> 
    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-dfab20da8a5fcf88', 'javascript:void(0);', 'pcpid']);" data-stat-id="dfab20da8a5fcf88" href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn" data-actid="1981" data-type="1">加入购物车</a> 
   </div> 
  </div>   
 </body>
</html>