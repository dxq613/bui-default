<?php $title="资源文件结构"?>
<?php include("../templates/header.php"); ?>  
  <div class="container">
    <div class="row">
      <div class="span10">
        <h2>简介</h2>
        <p>整个站点的资源文件结构如右图所示：</p>
        <ol>
          <li><code>css</code>:包括使用到的所有的CSS文件，包括控件库和基础CSS文件，页面使用到的CSS文件。</li>
          <li><code>img</code>:站点用到的图片文件，控件库的图片文件不在此处。</li>
          <li><code>js</code>：目录下包含了一下文件：
            <ol>
              <li><code>jquery-1.8.1.min.js</code>：jquery文件</li>
              <li><code>bui-min.js</code>:控件库文件</code></li>
              <li><code>config.js</code>: <a href="">动态加载项目JS</a>的配置文件</li>
            </ol>
            还包含了2个文件夹：
            <ol>
              <li><code>common</code>:放置框架层次的JS文件和业务组件的JS文件。</li>
              <li><code>module</code>:项目各个模块的JS文件</li>
            </ol>
          </li>
        </ol>
        <p>js目录下还包含了一个<code>prettify.js</code>,用于格式化代码，跟项目无关。</p>
      </div>
      <div class="span14">
        <h3>示例图</h3>
        <img src="../assets/img/resource.jpg" alt="文件结构">
      </div>
    </div>
  </div>
<?php include("../templates/script.php"); ?> 
<?php include("../templates/footer.php"); ?>  