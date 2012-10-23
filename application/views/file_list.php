<div id="yingxiao_main">
	<?php $this->load->view('job_top');?>
    <div class="urhear">当前位置：<a href="<?php echo base_url();?>">首页</a>>>文档下载
	</div>
    <div class="left">
   		<?php $this->load->view('left_3');?> 
    </div>
    <div class="right">
		<div class="info">
			<h2>文档下载</h2>
			<?php foreach($file['admin'] as $list):?>
			<div class="file_list">
				<a href="<?php echo base_url($list->file);?>" title="点击下载"><?php echo $list->name;?></a>
				<div class="file_info">
					<?php echo $list->content;?>
				</div>
			</div>
			<p class="file_bottom">大小：<span><?php echo sizecount($list->file)?></span> 作者：<span><?php echo $list->author;?></span> 授权：<span>东方盛思营销顾问</span>上传日期：<span><?php echo date('Y-m-d',$list->addtime);?></span>推荐：<img src="images/blank.gif" title="<?php echo $list->star;?>分" class="star level<?php echo $list->star;?>" /></p>
			<?php endforeach;?>
			
			<div class="ly_fy">
			 共&nbsp;<?php echo $file['total']; ?>&nbsp;条&nbsp;第&nbsp;<?php echo ($file['start']/$file['size']+1).'/'.ceil($file['total']/$file['size']);?>&nbsp;页&nbsp;&nbsp;<?php echo $file['fy']; ?>
            </div>
		</div>
       
		
		<?php $this->load->view('peixun_box');?>   
    </div>
</div>
<?php
function sizecount($filesize) {
$filesize = filesize($filesize);
if($filesize >= 1073741824) {
  $filesize = round($filesize / 1073741824 * 100) / 100 . ' GB';
} elseif($filesize >= 1048576) {
  $filesize = round($filesize / 1048576 * 100) / 100 . ' MB';
} elseif($filesize >= 1024) {
  $filesize = round($filesize / 1024 * 100) / 100 . ' KB';
} 
return $filesize;
}
?>