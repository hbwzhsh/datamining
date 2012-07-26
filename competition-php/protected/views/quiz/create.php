<h1>创建一个竞赛题目</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quiz-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<textarea name="content" style="width:auto;height:300px;visibility:hidden;"><?php echo $model->content?></textarea>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_data'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(  
	        'model'=>$model,  
	        'attribute'=>'end_data',  
	        'options' => array(  
	            'dateFormat'=>'yy-mm-dd',  
	        ),  
	        'htmlOptions'=>array(  
	            'readonly'=>'readonly',  
	            'style'=>'width:130px;',  
	        )  
	    	));
		?>
		(如果不写则无限期)
	</div>
	
	<div class="row">
		上传训练集数据:<br/>
		<input type="file" name="train"/>
	</div>
	
	<div class="row">
		上传测试集数据：<br/>
		<input type="file" name="test"/>
	</div>
	
	<input type="hidden" name="uid" value="2"/>

	<div class="row buttons">
		<?php echo CHtml::submitButton('创建'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<script src="/js/lib/kindeditor/kindeditor-min.js"></script>
<script src="/js/lib/kindeditor/zh_CN.js"></script>
<script type="text/javascript">
var editor_content;
var editor_desc;
KindEditor.ready(function(K) {
	editor_content = K.create('textarea[name="content"]', {
		//uploadJson : '/blog/upload',
		//fileManagerJson : 'manager',
		//allowFileManager : false
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		items : [
			'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', 'link']
	});
});
</script>