<!DOCTYPE HTML>
<html>
 <head>
  <title> BUI 管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
        <span class="lp-title-port">BUI</span><span class="dl-title-text">前端框架</span>
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">**.**@alibaba-inc.com</span><a href="###" title="退出系统" class="dl-log-quit">[退出]</a><a href="http://http://www.builive.com/" title="文档库" class="dl-log-quit">文档库</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">首页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">表单页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">搜索页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-supplier">详情页</div></li>
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bui-min.js"></script>
  <script type="text/javascript" src="./assets/js/config.js"></script>
  <script>
    BUI.use('common/main',function(){
      var config = [{
          id:'menu',
          menu:[{
              text:'首页内容',
              items:[
                {id:'code',text:'首页代码',href:'main/code.php'},
                {id:'main-menu',text:'顶部导航',href:'main/menu.php'},
                {id:'second-menu',text:'右边菜单',href:'main/second-menu.php'}
              ]
            },{
              text:'页面操作',
              items:[
                {id:'operation',text:'页面常见操作',href:'main/operation.php'},
                {id:'quick',text:'页面操作快捷方式',href:'main/quick.php'}  
              ]
            },{
              text:'文件结构',
              items:[
                {id:'resource',text:'资源文件结构',href:'main/resource.php'},
                {id:'loader',text:'引入JS方式',href:'main/loader.php'}  
              ]
            }]
          },{
            id:'form',
            menu:[{
                text:'表单页面',
                items:[
                  {id:'example',text:'表单示例',href:'form/example.php'},
                  {id:'introduce',text:'表单简介',href:'form/introduce.php'},
                  {id:'valid',text:'表单基本验证',href:'form/basicValid.php'},
                  {id:'advalid',text:'表单复杂验证',href:'form/advalid.php'},
                  {id:'remote',text:'远程调用',href:'form/remote.php'},
                  {id:'group',text:'表单分组',href:'form/group.php'},
                  {id:'depends',text:'表单联动',href:'form/depends.php'}
                ]
              },{
                text:'成功失败页面',
                items:[
                  {id:'success',text:'成功页面',href:'form/success.php'},
                  {id:'fail',text:'失败页面',href:'form/fail.php'}
                
                ]
              },{
                text:'可编辑表格',
                items:[
                  {id:'grid',text:'可编辑表格',href:'form/grid.php'},
                  {id:'form-grid',text:'表单中的可编辑表格',href:'form/form-grid.php'},
                  {id:'dialog-grid',text:'使用弹出框',href:'form/dialog-grid.php'},
                  {id:'form-dialog-grid',text:'表单中使用弹出框',href:'form/form-dialog-grid.php'}
                ]
              }]
          },{
            id:'search',
            menu:[{
                text:'搜索页面',
                items:[
                  {id:'example',text:'搜索页面示例',href:'search/example.php'},
                  {id:'introduce',text:'搜索页面简介',href:'search/introduce.php'}, 
                  {id:'config',text:'搜索配置',href:'search/config.php'}/*,
                  {id:'autoFit',text:'页面宽高自适应',href:'search/autoFit.php'},
                  {id:'edit',text:'数据增删改',href:'search/edit.php'}*/
                ]
              }]
          },{
            id:'detail',
            menu:[{
                text:'详情页面',
                items:[
                  {id:'example',text:'详情页面示例',href:'detail/example.php'},
                  {id:'introduce',text:'详情页面简介',href:'detail/introduce.php'}
                ]
              }]
          }];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>
