<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-danger">
		<div class="card-header">
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					<div class="container" style="">
                        <iframe frameborder="0" scrolling="no" onload="resizeIframe(this)" class="responsive-iframe" src="admin/announcements-main.php" title="announcements" style="width: 100%; height: 100%; background-color: #ebebeb; border-style: solid; border-radius: 5px; border-color: #ebebeb; padding: 5px;"></iframe>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
</style>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
  }
</script>