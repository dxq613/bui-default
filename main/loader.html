<!DOCTYPE HTML>
<html>
 <head>
  <title> 动态引入js</title>
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
        <h2>简介</h2>
        <p>这个框架，我使用了动态加载JS的方式：</p>
        <ul>
          <li>优点：
            <ol>
              <li>页面清洁，资源易于管理。</li>
              <li>易于扩展，模块复用性强。</li>
            </ol>
          </li>
          <li>
            缺点：
            <ol>
              <li>需要理解加载方式。</li>
              <li>需要配置加载路径。</li>
            </ol>
          </li>
        </ul>
        <p>在这个页面中，我会对框架对JS代码的加载方式做一下说明。</p>
      </div>
      <div class="span16">
        <h2>代码示例</h2>
        <p>下面是使用控件模块的示例：</p>
        <pre class="prettyprint linenums">
//引入 menu模块和tab模块
BUI.use(['bui/menu','bui/tab'],function(Menu,Tab){
  //TODO
});
        </pre>
        <pre class="prettyprint linenums">
//引入框架页首页代码
BUI.use('common/main',function(){
  
});
//如果不需要在当前页面调用模块中的方法，则不需要回调函数
BUI.use('common/page');
        </pre>
        <p>此处的loader使用的是seajs的加载器，感兴趣的可以去查找<a href="https://github.com/seajs/seajs/issues/260">更多内容</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>本框架中的模块</h2>
        <p>框架中使用的模块主要包括：</p>
        <ol>
          <li><a href="http://http://www.builive.com//start/web-start.php"> bui控件库模块 </a></li>
          <li>框架模块:common，参考<a class="page-action" data-id="resource" href="#">资源文件结构</a></li>
          <li>业务代码模块:module，参考<a class="page-action" data-id="resource" href="#">资源文件结构</a></li>
        </ol>
        <p>框架模块和业务代码模块的文件配置在 config.js中完成,文件路径在：assets/js/config-min.js</p>
      </div>
      <div class="span16">
        <h2>config.js</h2>
        <p>config.js配置了框架模块和业务模块的配置，参看代码：</p>
        <pre class="prettyprint linenums">

var baseUrl = '',         //网站的根目录地址，发布到线上时使用
  jsBase = '/assets/js';

function getBaseUrl(){    //根据config.js的路径取baseUrl
  var scripts = $('script'),
    rst = '';
  $.each(scripts,function(index,script){
    var src = script.src,
      lastIndex = src.indexOf(jsBase + '/config');
    if(lastIndex !== -1){
      rst = src.substring(0,lastIndex);
      return false;
    }
  });
  return rst;
}

if(!baseUrl){//如果未指定项目路径，进行匹配。
  baseUrl = getBaseUrl();
}

BUI.config({
  alias : {
    'common' : baseUrl + jsBase + '/common',
    'module' : baseUrl + jsBase + '/module'
  },
  map : [ //调试环境下使用'*.js'，如果发布上线前，使用*-min.js去掉下面的map
    [/common\/(.*)-min.js/,'common/$1.js'],
    [/module\/(.*)-min.js/,'module/$1.js']
  ]
});
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span16">
        <h2 class="label label-info">几点说明</h2>
        <p>config文件非常重要，由于本地环境和开发环境有差异，所以这个文件需要进行切换修改。</p>
        <ol>
          <li><code>baseUrl</code>: 这是最重要的参数，这个地址是项目的根目录地址，加载文件的起点。为了避免计算上线前应该切换成线上的地址。</li>
          <li>压缩JS文件：loader默认加载的是压缩的以<code>-min</code>为后缀的文件，但是在调试时非常不方便，所以我给加了map映射，上线前压缩所有文件后，请注释掉对应的map.</li>
        </ol>
        <p>这个文件带来不少麻烦，但是是现在我能想到的最好方式了，接下来我还会进行优化，达到不需要修改这个文件的目的。</p>
        <h2 class="label label-info">最佳实践</h2>
        <p>我们做过很多项目，这个文件到没有带来很大问题，我们的方案是：</p>
        <ol>
          <li>config文件的引入地址，直接写成线上地址。</li>
          <li><code>baseUrl</code>写成线上地址</li>
          <li>去除map</li>
          <li>使用ucool代理调试开发JS，对ucool感兴趣的可以联系：张挺（旺旺号）</li>
        </ol>
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