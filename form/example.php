<?php $title="资源文件结构"?>
<?php include("../templates/header.php"); ?>  
  <div class="container">
    <div class="row">
      <form id="J_Form" class="form-horizontal span24">
        <div class="row">
          <div class="control-group span8">
            <label class="control-label"><s>*</s>供应商编码：</label>
            <div class="controls">
              <input name="id" type="text" data-rules="{required:true}" class="input-normal control-text">
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label"><s>*</s>供应商类型：</label>
            <div class="controls">
              <select  data-rules="{required:true}"  name="type" class="input-normal"> 
                <option value="">请选择</option>
                <option value="saler">淘宝卖家</option>
                <option value="large">大厂直供</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">所在地：</label>
            <div class="controls bui-form-group-select"  data-type="city">
              <select  class="input-small" name="province" value="山东省">
                <option>请选择省</option>
              </select>
              <select class="input-small"  name="city" value="淄博市"><option>请选择市</option></select>
              <select class="input-small"  name="county" value="淄川区"><option>请选择县/区</option></select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15 ">
            <label class="control-label">起始日期：</label>
            <div id="range" class="controls bui-form-group"  data-rules="{dateRange:true}">
              <input name="start" class="calendar" type="text"><label>&nbsp;-&nbsp;</label><input name="end" class="calendar" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">备注：</label>
            <div class="controls control-row4">
              <textarea name="memo" class="input-large" data-tip="{text:'请填写备注信息！'}" type="text"></textarea>
            </div>
          </div>
        </div>
        <div class="row form-actions actions-bar">
            <div class="span13 offset3 ">
              <button type="submit" class="button button-primary">保存</button>
              <button type="reset" class="button">重置</button>
            </div>
        </div>
      </form>
    </div>
    

  </div>
<?php include("../templates/script.php"); ?> 
<script type="text/javascript">
  BUI.use('bui/form',function (Form) {
    var form = new Form.HForm({
      srcNode : '#J_Form'
    });

    form.render();
  });
</script>
<?php include("../templates/footer.php"); ?> 