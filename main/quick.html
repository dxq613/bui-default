<!DOCTYPE HTML>
<html>
 <head>
  <title> 页面操作快捷方式</title>
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
        <p>在前面的页面里讲了页面的常见操作，但是存在一些不方便的地方：</p>
        <ol>
          <li>需要直接调用框架页的接口，繁琐，重复工作量大</li>
          <li>框架页不存在时，链接会失效</li>
          <li>对框架使用者不友好</li>
        </ol>
        <p>为了解决上面的问题，我对页面的常见操作进行了封装，支持一下功能：</p>
        <ol>
          <li>打开页面</li>
          <li>关闭页面</li>
          <li>刷新页面</li>
          <li>更新标题</li>
        </ol>
        <p>
          <span class="label label-warning">注意</span>：仅支持模块内部操作，跨模块的操作，请自己调用对应的API接口
        </p>
      </div>
      <div class="span16">
        <h2>需要引入的js</h2>
        <p>为了实现这些快捷操作，需要引入对应的JS</p>
        <pre class="prettyprint linenums">
&lt;script type="text/javascript" src="../assets/js/jquery-1.8.1.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="../assets/js/bui-min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="../assets/js/config-min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;
  BUI.use('common/page');
&lt;/script&gt;
        </pre>
        <p>其中<code>config.js</code> 和 use的模块<code>common/page</code>请参看<a class="page-action" data-id="loader" href="#">引入js方式</a></p>
        <h2>实现方式</h2>
        <p>可以采用在html元素上配置 class 和 属性值来对应的操作：</p>
        <ol>
          <li>使用样式 <code>page-action</code> 表示一个操作。</li>
          <li>使用伪类：<code>data-type</code>表示操作类型。默认是打开页面(open),有以下类型：
            <ol>
              <li>open: 打开或者跳转到页面,如果未指<code>data-action</code>的值（默认类型）</li>
              <li>close：关闭页面。</li>
              <li>reload：刷新页面</li>
              <li>setTitle：设置title</li>
            </ol>
          </li>
          <li>使用的属性：具体的信息参考<a class="page-action" data-id="operation" href="#">框架页API接口</a>
            <ol>
             <li><code>data-id</code>:页面的id</li>
             <li><code>title</code>:页面的title</li>
             <li><code>data-href</code>:打开的链接</li>
             <li><code>data-mid</code>:打开的模块编号</li>
             <li><code>data-close</code>:（如果打开新页面时)是否关闭此页</li>
            </ol>
          </li>
        </ol>
        <p>上面的这些实现，都是基于<a class="page-action" data-id="operation" href="#">框架页API接口</a>，只是提供了一种简单的实现方式。操作类型和，使用的变量想组合灵活使用。</p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>打开页面</h2>
        <p>打开页面的<a  class="page-action" data-id="operation" href="#">参数</a>比较多，所以需要熟悉各个参数的含义。右边提供几个常用的示例。</p>
      </div>
      <div class="span16">
        <h3>打开左侧菜单页面：</h3>
        <p>
          <a class="page-action" href="#" data-id="main-menu">顶部导航</a>
          <a class="page-action" href="#" data-close="true" data-id="second-menu">二级菜单(关闭本页)</a>
        </p>
        <pre class="prettyprint linenums">
&lt;a class="page-action" href="#" data-id="main-menu"&gt;顶部导航&lt;/a&gt;
&lt;a class="page-action" href="#" data-close="true" data-id="second-menu"&gt;二级菜单&lt;/a&gt;
        </pre>
        <h3>打开任意页面:</h3>
        <p>
          <a class="page-action" href="test.html" data-href="main/test.html" title="测试页面" data-id="test">测试页面</a>
          <a class="page-action" href="#" data-href="http://www.baidu.com" title="百度页面" data-id="baidu">百度页面</a>
        </p>
        <pre class="prettyprint linenums">
 &lt;a class="page-action" href="#" data-href="main/test.html" title="测试页面" data-id="test"&gt;测试页面&lt;/a&gt;
 &lt;a class="page-action" href="#" data-href="http://www.baidu.com" title="百度页面" data-id="baidu"&gt;百度页面&lt;/a&gt;          
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>刷新和关闭页面</h2>
        <p>刷新页面和关闭页面的写法都很简单，也非常类似，只需要：</p>
        <ol>
          <li>声明样式<code>page-action</code></li>
          <li>指定类型<code>close</code>或者<code>reload</code></li>
        </ol>
          
      </div>
      <div class="span16">
        <h3>刷新页面</h3>
        <p>刷新页面的实现方式非常简单</p>
        <p>  
          <a class="page-action" data-type="reload" href="#">刷新本页</a>
        </p>
        <pre class="prettyprint linenums">
&lt;a class="page-action" data-type="reload" href="#"&gt;刷新本页&lt;/a&gt;
        </pre>
        <h3>关闭页面</h3>
        <p>关闭页面的实现方式跟刷新页面非常类似</p>
        <p>
          <a class="page-action" data-type="close" href="#">关闭本页</a>
        </p>
        <pre class="prettyprint linenums">
&lt;a class="page-action" data-type="close" href="#"&gt;关闭本页&lt;/a&gt;
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>更改页面（tab)标题</h2>
        <p>
          当页面直接跳转时，需要更改tab页的标题，需要：
        </p>
        <ol>
          <li>声明样式<code>page-action</code></li>
          <li>指定类型<code>setTitle</code></li>
          <li>指定<code>title</code></li>
        </ol>
      </div>
      <div class="span16">
        <h3>本页跳转并修改标题</h3>
        <p>
          <a class="page-action" data-type="setTitle" title="测试页面" href="test.html">测试页面</a>
        </p>
        <pre class="prettyprint linenums">
&lt;a class="page-action" data-type="setTitle" title="测试页面" href="test.html"&gt;测试页面&lt;/a&gt;
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span16">
        <h2 class="label label-warning">注意：</h2>
        <ol>
          <li>页面操作通过样式<code>page-action</code>来识别。</li>
          <li>操作类型通过<code>data-type</code>来识别，如果未定义，默认为打开页面。</li>
          <li>刷新页面和关闭页面，也可以操作其他页面，指定<code>data-id</code>即可</li>
          <li>重设页面标题，一般用于本页跳转，此时使用链接本身的 <code>href</code>，在跳转前修改页面标题。</li>
          <li>更加复杂的操作，请使用<a class="page-action" data-id="operation" href="#">框架页API接口</a>直接操作页面</li>
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