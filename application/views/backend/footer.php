<?php $version = $this->db->get_where('settings', array('type' => 'version'))->row()->description;?>
<!-- Footer -->
<footer class="main">
	&copy; 2017 <strong>InfiniaSync Hospital Management System</strong>
    <strong class="pull-right"> VERSION <?php echo $version;?></strong>
    Developed by
	<a href="http://infiniasync.com"
    	target="_blank">InfiniaSync</a>
</footer>
