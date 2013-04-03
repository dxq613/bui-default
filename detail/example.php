<?php $title="详情页"?>
<?php include("../templates/header.php"); ?>      
  <div class="container">
    <div class="detail-page">
      <h2>学生信息</h2>
      <div class="detail-section">  
        <h3>基本信息</h3>
        <div class="row detail-row">
          <div class="span8">
            <label>姓名：</label><span class="detail-text">张三</span>
          </div>
          <div class="span8">
            <label>编号：</label><span class="detail-text">1223</span>
          </div>
           <div class="span8">
            <label>性别：</label><span class="detail-text">男</span>
          </div>
        </div>
        <div class="row detail-row">
          <div class="span8">
            <label>班级：</label><span class="detail-text">一年级一班</span>
          </div>
          <div class="span8">
            <label>年龄：</label><span class="detail-text">21</span>
          </div>
           <div class="span8">
            <label>家庭住址：</label><span class="detail-text">速度发撒旦法师打法是否撒反对撒范德萨发撒旦法倒萨发生</span>
          </div>
        </div>
      </div>
      <div class="detail-section"> 
        <h3>学校信息</h3>
        <div class="row detail-row">
          <div class="span8">
            <label>入学时间：</label><span class="detail-text">2001-10-8</span>
          </div>
          <div class="span8">
            <label>专业：</label><span class="detail-text">信息自动化</span>
          </div>
          <div class="span8">
            <label>班主任：</label><span class="detail-text">王五</span>
          </div>
        </div>
        <div class="row detail-row">
          <div class="span8">
            <label>入学时间：</label><span class="detail-text">2001-10-8</span>
          </div>
          <div class="span8">
            <label>专业：</label><span class="detail-text">信息自动化</span>
          </div>
          <div class="span8">
            <label>班主任：</label><span class="detail-text">王五</span>
          </div>
        </div>
      </div> 
      <div class="detail-section"> 
        <h3>受教育经历</h3>
        <div class="row detail-row">
          <div class="span24">
            <div id="grid"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include("../templates/script.php"); ?> 
<script type="text/javascript">
  BUI.use('bui/grid',function (Grid) {
    var data = [{id:'1112',name:'李四',day:1349622209547,address:'上海市浦东新区杨高北路938号'},{id:'1112',name:'李四',day:1349622209547,address:'上海市浦东新区杨高北路938号'},{id:'1112',name:'李四',day:1349622209547,address:'上海市浦东新区杨高北路938号'},{id:'1112',name:'李四',day:1349622209547,address:'上海市浦东新区杨高北路938号'}],
 
        grid = new Grid.SimpleGrid({
          render : '#grid', //显示Grid到此处
          width : 950,      //设置宽度
          columns : [
            {title:'学生编号',dataIndex:'id',width:80},
            {title:'学生姓名',dataIndex:'name',width:100},
            {title:'入学时间',dataIndex:'day',width:100,renderer:Grid.Format.dateRenderer},
            {title:'学生家庭住址',dataIndex:'address',width:300}
          ]
        });
      grid.render();
      grid.showData(data);
  });
</script>
<?php include("../templates/footer.php"); ?>  
