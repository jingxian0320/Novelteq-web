<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages-technology.jpg" class="full-width" />
<div class='white-space'></div>

</section><!-- end-full-width -->

<section class="container page-content">
<?php include('technology-sidebar.html'); ?>
<section id="main-content">
	<div class="eleven columns">
	<h2>锁相红外热成像无损检测技术</h2>
	<hr />
	<p>锁相红外热成像检测技术是国际上极为关注的新型无损检测技术，它结合了红外热波技术与数字锁相技术的优势，减少了热激励源的能量，降低了对加热均匀性和表面发射率一致性的要求，提高了信噪比，探测灵敏度和探测能力得到了大大的提高。</p>
<p>锁相红外热成像检测与材料或构件表面的辐射发生率、环境条件及构件结构无关，能获得损伤的更多信息。</p>

    <h4 style="color: #C36"><b>技术原理</b></h4>
		<br/>
		<p>锁相热成像技术有别于脉冲热成像技术,最大的区别是锁相热成像中使用的是周期性热源。锁相热成像本质上通过各种手段对噪声信号进行抑制，提取单频响应信号，噪声信号被抑制后，有用的缺陷响应信号便可以检测出来。锁相的目的就是将微弱信号从众多干扰信号中提取出来。</p>
		<p>对待测物体进行周期加热，若待测物体内部有缺陷，该缺陷对其上方表面温度分布产生周期性的影响，因此有缺陷的地方与无缺陷地方会产生位相差，红外热像仪采集物体表面温度分布。</p>
		<p>疲劳损伤的检测是无损检测界遇到的新难题。通常物体的疲劳处会有应力集中，产生热信号，物体工作在周期的应力下，疲劳处产生的热信号也是周期性变化的。锁相技术的单频信号提取能力，使得锁相技术是疲劳损伤检测的很好选择。实际的检测中，需要让待测物体工作在周期作用力下，或通过拉升，压缩，或施加周期性的扭力，此时疲劳损伤处也会产生周期性的热变化，可以利用锁相技术对该周期性信号进行提取，再加以分析。</p>
		<p>锁相红外热成像无损检测技术既可作为红外热成像无损检测技术的补充，也可发挥其显著的技术优势，对解决待测物体表面及内部缺陷检测、保证产品质量安全提供了保障。</p>


<h4 style="color: #C36"><b>技术优势</b></h4>
<br/>
    <ul>
			<li type="disc">
						适用面广，包括金属、非金属和复合材料等；
				</li>
				<li type="disc">
					面积大；
				</li>
				<li type="disc">
					周期性调制热源；
				</li>
				<li type="disc">
					热激励源能量小；
				</li>
				<li type="disc">
					信噪比高；
				</li>
				<li type="disc">
					探测灵敏度高；
				</li>
				<li type="disc">
					对物体表面发射率均匀性要求低；
				</li>
				<li type="disc">
					检测结果图像显示，直观易懂；
				</li>
				<li type="disc">
					定量测量；
				</li>
				<li type="disc">
					特别适合于分层缺陷、微小缺陷、裂纹和疲劳损伤检测。
				</li>
   </ul>

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
