<!DOCTYPE HTML>
<html>
 <head>
  <title> 动态生成菜单</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link href="../assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/page-min.css" rel="stylesheet" type="text/css" />   <!-- 下面的样式，仅是为了显示代码，而不应该在项目中使用-->
   <link href="../assets/css/prettify.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
    code {
      padding: 0px 4px;
      color: #d14;
      background-color: #f7f7f9;
      border: 1px solid #e1e1e8;
    }
   </style>
 </head>
 <body>
  
  <div class="container">
    <div class="row">
      <div class="span8">
        <h2>动态生成菜单</h2>
        <p>在项目中，因为权限等原因，我们往往需要动态生成菜单，这里我们以php作为示范，提供几种动态生成菜单的方式：</p>
        <ol>
          <li>根据用户权限，在页面上输出不同的json</li>
          <li>根据用户权限，在页面上限制不同的json</li>
          <li>异步请求json</li>
        </ol>
        <p>菜单配置信息参看<a class="page-action" href="#" data-id="second-menu">右边菜单配置</a></p>
      </div>
      <div class="span16">
        <h2>菜单配置项</h2>
        <p>一般的菜单配置如下：</p>
        <pre class="prettyprint linenums">
var config = [{   //模块菜单
  id:'menu',      //模块编号
  collapsed:true, //默认左侧菜单收缩
  homePage:'code', //默认打开的主页
  menu:[{         //二级菜单
      text:'首页内容',
      items:[   //三级菜单
        {id:'code',text:'首页代码',href:'main/code.html'},
        {id:'c',text:'标签页',href:'test.html'},
        {id:'d',text:'窗口变化',href:'test.html'},
        {id:'e',text:'首页资源文件',href:'test.html'},
        {id:'g',text:'其他',href:'test.html'}
      ]
    },{
      //二级菜单
      
    },{
      //二级菜单
  }]
},{
  
  //模块菜单
}];
//初始化主页菜单
new PageUtil.MainPage({
  modulesConfig : config
});            
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>php 输出json</h2>
        <p>可以根据权限在页面上输出不同的json</p>
      </div>
      <div class="span16">
        <h3>示例</h3>
        <p>生成菜单的函数实现在<code>menu_create.php</code>中</p>
        <pre class="prettyprint linenums">
&lt;?php 
  include('menu_create.php'); //引入 php 文件
?&gt;
&lt;script&gt;
    BUI.use('common/main',function(){

      var config =&lt;?php  createMenu($user); ?&gt;; // 根据权限生成菜单

      new PageUtil.MainPage({
        modulesConfig : config
      });
    });

&lt;/script&gt;

        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>限制输出json</h2>
        <p>针对比较简单的权限设置，可以用过限制输出Json的方式来完成</p>
      </div>
      <div class="span16">
        <h3>示例</h3>
        <p>通过php 的<code> if</code>、<code>else</code>，限制输出json</p>
        <pre class="prettyprint linenums">

&lt;script&gt;
    BUI.use('common/main',function(){

      var config = [{   //模块菜单
        id:'menu',      //模块编号
        collapsed:true, //默认左侧菜单收缩
        homePage:'code', //默认打开的主页
        menu:[{         //二级菜单
            text:'首页内容',
            items:[   //三级菜单
              {id:'code',text:'首页代码',href:'main/code.html'},
              {id:'c',text:'标签页',href:'test.html'}
            &lt;?php if($userLevel == 0){ ?&gt;  ,
              {id:'d',text:'窗口变化',href:'test.html'}
            &lt;?php }?&gt;  ,
              {id:'e',text:'首页资源文件',href:'test.html'},
              {id:'g',text:'其他',href:'test.html'}
            ]
          }
        &lt;?php if($userLevel == 0){ ?&gt;  
          ,{
            //二级菜单
            
          }
        &lt;?php }?&gt;  
          ,{
            //二级菜单
        }]
      },{
        
        //模块菜单
      }];

      new PageUtil.MainPage({
        modulesConfig : config
      });
    });

&lt;/script&gt;          
        </pre>
        <p><span class="label label-warning">注意：</span> 逗号的使用，请勿丢失或者增加逗号，在ie6,7下会报错</p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>使用ajax请求</h2>
        <p>对于前端来说，使用异步请求更为自然一些</p>
      </div>
      <div class="span16">
        <h3>示例</h3>
        <p>使用ajax请求，直接获取json</p>
        <pre class="prettyprint linenums">
BUI.use('common/main',function(){
  //获取json
  $.getJSON('menu.php',function(config){

    new PageUtil.MainPage({
        modulesConfig : config
    });

  });
});          
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span16">
        <h2>三种方式对比</h2>
        <p>以上3种方式各有利弊，请慎重考虑</p>
        <ol>
          <li>使用php输出json，这是一种很典型的方式，在类似的asp,jsp页面上都适用，但是静态html不支持。</li>
          <li>使用php限制菜单的输出，跟方法一 类似，在菜单简单或者权限简单的情形下很合适，复杂情况不要使用。</li>
          <li>使用ajax请求的方式，适用面最广，但是有加载问题，菜单需要等异步加载完成后生成。</li>
        </ol>
        <p>还有更多的方式，总之，只要能把配置项加载到页面，并初始化生成菜单，就可以了。</p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="../assets/js/bui-min.js"></script>

  <script type="text/javascript" src="../assets/js/config-min.js"></script>
  <script type="text/javascript">
    BUI.use('common/page');
  </script>
  <!-- 仅仅为了显示代码使用，不要在项目中引入使用-->
  <script type="text/javascript" src="../assets/js/prettify.js"></script>
  <script type="text/javascript">
    $(function () {
      prettyPrint();
    });
  </script>  

<body>
</html>  