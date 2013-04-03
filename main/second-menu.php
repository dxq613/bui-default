<?php include("../templates/header.php"); ?>  
    <div class="container">
      <div class="row">
        <div class="span8">
          <h2>简介</h2>
          <p>左侧菜单包含二级菜单：（右图所示）</p>
          <ol>
            <li>用于分类的二级菜单</li>
            <li>用于打开页面的三级菜单</li>
          </ol>
          <p>菜单的配置项比较简单，每个对象代表一个左侧菜单，一个模块有一个左侧菜单包含以下字段：</p>
          <ol>
            <li>id:模块的编号，用于定位模块</li>
            <li>homePage:模块默认显示的主页，使用页面的id</li>
            <li>collapse:左侧菜单是否默认收缩,默认false</li>
            <li>menu：菜单的集合，是一个数组，其中每个对象代表一个二级菜单</li>
          </ol>
          <p>二级菜单的配置项：<p>
          <ol>
            <li>text:文本</li>
            <li>collapsed：是否收缩，默认false</li>
            <li>items：三级菜单集合</li>
          </ol>
          <p>三级菜单的配置项</p>
          <ol>
            <li> id: 页面id,用于避免重复打开页面</li>
            <li>text:标题，同时是打开tab的标题</li>
            <li>href:页面URL</li>
          </ol>
        </div>
        <div class="span16">
          <h2>图示</h2>
          <img src="../assets/img/menu.jpg" alt="">
          <h3>示例</h3>
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
        <div class="span8"></div>
        <div class="span16"></div>
      </div>
    </div>
<?php include("../templates/script.php"); ?>  
<?php include("../templates/footer.php"); ?>  