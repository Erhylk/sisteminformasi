
<?php 
$info = $this->session->flashdata('info');
if (!empty($info))
{
	echo $info;
}
?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/table/simpan" 
	onsubmit="return cekform();">

	<div class="control-group">		
		<label class="control-label">id lagu</label>
		<div class="controls">
			<input type="text" name="id_lagu" id="id_lagu" placeholder="id_lagu" class="span1" value="<?php echo $id_lagu;?>">
		</div>
	</div>

	<div class="control-group">		
		<label class="control-label">penyanyi</label>
		<div class="controls">
			<input type="text" name="penyanyi" id="penyanyi" placeholder="penyanyi" class="span3" value="<?php echo $penyanyi;?>">
		</div>
	</div>

	<div class="control-group">		
		<label class="control-label">judul</label>
		<div class="controls">
			<input type="text" name="judul" id="judul" placeholder="judul" class="span1" value="<?php echo $judul;?>">
		</div>
	</div>

	<div class="control-group">		
		<label class="control-label">genre</label>
		<div class="controls">
			<input type="text" name="genre" id="genre" placeholder="genre" class="span1" value="<?php echo $genre;?>">
		</div>
	</div>
	<br>
	<div>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit"  class="btn btn-primary btn-small">simpan</button>
	</div>



</form>
