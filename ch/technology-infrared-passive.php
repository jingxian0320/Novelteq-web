<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司技术</h3>
<p>专注前沿科技发展，立足创新</p>
</div>

</section><!-- end-full-width -->

<section class="container page-content">
<?php include('technology-sidebar.html'); ?>
<section id="main-content">
	<div class="eleven columns">
	<h2>被动式红外无损检测技术</h2>
	<hr />
	<p>被动式红外无损检测技术，基于自然界中一切温度高于绝对零度(-273°)的原理，在检测时不对被测目标加热，仅仅利用被测物体本身热辐射造成的温度差异进行检测，在被测物体和周围环境的热交换过程中显示出工件内部的缺陷，多用于运行中设备的质量控制。</p>


</div>
</div>
</section><!-- main-content -->
  </section><!-- container -->


<?php include('footer.html'); ?>

</div><!-- end-wrap -->
<!-- End Document
================================================== -->

	<script>
	document.getElementById("defaultOpen").click();
		function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
