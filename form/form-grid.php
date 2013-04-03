<?php $title="表单中的表格"?>
<?php include("../templates/header.php"); ?>  
  <div class="container">
    <form id ="J_Form" class="form-horizontal">
      <!--    -->
      <h3>基本信息</h3>
      <div class="row">
        <div class="control-group span12">
          <label class="control-label"><s>*</s>学生姓名：</label>
          <div class="controls">
            <input name="sname" type="text" class="control-text" data-rules="{required:true}">
          </div>
        </div>
        <div class="control-group span12">
          <label class="control-label"><s>*</s>学生编号：</label>
          <div class="controls">
            <input name="sid" type="text" class="control-text" data-rules="{required:true}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="control-group span12">
          <label class="control-label">性别：</label>
          <div class="controls">
            <select name="sex">
              <option value="0">男</option>
              <option value="1">女</option>
            </select>
          </div>
        </div>
        <div class="control-group12 span12">
          <label class="control-label"><s>*</s>出生日期：</label>
          <div class="controls">
            <input name="birthday" type="text" class="calendar" data-rules="{required:true}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="control-group span12">
          <label class="control-label"><s>*</s>家庭住址：</label>
          <div class="controls">
            <input name="address" type="text" class="span8 span-width control-text"  data-rules="{required:true}">
          </div>
        </div>
      </div>
      <hr/>
      <h3>学校信息</h3>
      <div class="row">
        <div class="control-group span12">
          <label class="control-label"><s>*</s>学校名称：</label>
          <div class="controls">
            <input name="" type="text" class=" control-text  span8 span-width" data-rules="{required:true}">
          </div>
        </div>
        <div class="control-group span12">
          <label class="control-label"><s>*</s>入学日期：</label>
          <div class="controls bui-form-group" data-rules="{dateRange:true}" >
            <input name="start" type="text" class="calendar" data-rules="{required:true}"><span> - </span><input name="end" type="text" class="calendar" data-rules="{required:true}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="control-group span24">
          <label class="control-label"><s>*</s>学校地址：</label>
          <div class="controls">
            <input type="text" class="control-text span8 span-width"  data-rules="{required:true}">
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="control-group span24">
          <label class="control-label">备注：</label>
          <div class="controls control-row4">
            <textarea name="" id="" class="span8 span-width"></textarea>
          </div>
        </div>
      </div>
      <hr/>

      <h3>教育经历</h3>
      <div class="row">
        <div class="span21 offset3 control-row-auto">
          <div id="grid"></div>
        </div>
      </div>
      
      <div class="row">
        <div class="form-actions offset3">
          <button type="submit" class="button button-primary">保存</button>
          <button type="reset" class="button">重置</button>
        </div>
      </div>
    </form>
  </div>
<?php include("../templates/script.php"); ?> 
<script type="text/javascript">
  BUI.use(['bui/grid','bui/data','bui/form'],function (Grid,Data,Form) {

    var columns = [{title : '学校名称',dataIndex :'school',editor : {xtype : 'text',rules:{required:true}}},
            {title : '入学日期',dataIndex :'enter',editor : {xtype : 'date',rules:{required:true}},renderer : Grid.Format.dateRenderer},//使用现有的渲染函数，日期格式化
            {title : '毕业日期',dataIndex :'outter',editor : {xtype : 'date',rules:{required:true},validator : function(value,obj){
              if(obj.enter && value && obj.enter > value){
                return '毕业日期不能晚于入学日期！'
              }
            }},renderer : Grid.Format.dateRenderer},
            {title : '备注',dataIndex :'memo',width:200,editor : {xtype : 'text'}}
            
          ],
      //默认的数据
      data = [{id:'1',school:'武汉第一初级中学',enter:936144000000,outter:993945600000,memo:'表现优异，多次评为三好学生'},
        {id:'2',school:'武汉第一高级中学',enter:999561600000,outter:1057017600000,memo:'表现优异，多次评为三好学生'}],
      store = new Data.Store({
        data:data
      }),
      editing = new Grid.Plugins.CellEditing(),
      grid = new Grid.Grid({
        render : '#grid',
        columns : columns,
        width : 700,
        forceFit : true,
        store : store,
        plugins : [Grid.Plugins.CheckSelection,editing],
        tbar:{
            items : [{
              btnCls : 'button button-small',
              text : '<i class="icon-plus"></i>添加',
              listeners : {
                'click' : addFunction
              }
            },
            {
              btnCls : 'button button-small',
              text : '<i class="icon-remove"></i>删除',
              listeners : {
                'click' : delFunction
              }
            }]
        }

      });
    grid.render();

    function addFunction(){
      var newData = {school :'请输入学校名称'};
      store.add(newData);
      editing.edit(newData,'school'); //添加记录后，直接编辑
    }

    function delFunction(){
      var selections = grid.getSelection();
      store.remove(selections);
    }

    var form = new Form.HForm({
      srcNode : '#J_Form'
    });
    form.render();

    form.on('beforesubmit',function(){
      if(!editing.isValid()){
        return false;
      }
    });


  });
</script>
<?php include("../templates/footer.php"); ?> 