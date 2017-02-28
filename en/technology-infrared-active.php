<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages-technology.jpg" class="full-width" />
<div class='white-space'></div>

</section><!-- end-full-width -->

<section class="container page-content">
<?php include('technology-sidebar.html'); ?>
<section id="main-content">
	<div class="eleven columns">
	<h2>主动式红外无损检测技术</h2>
	<hr />
	<p>主动式热波成像检测技术采用热激励源对被测物体表面进行热激励，并形成向被测物体内部传播的热波，被测物体的缺陷，如脱粘、裂纹、锈蚀、损伤等，会影响热波的扩散，从而引起被测物体表面温度场的变化，这种温度变化由高分辨率红外热像仪记录存储，并通过对红外热图序列分析处理实现对缺陷检测和评估。因此，它结合了红外检测、调制激励、信号测测与图像处理等多方面的技术。</p>
		<p>目前，主动式热波成像检测技术采用热激励源主要有：激光、闪光灯、红外灯、热风、超声、电磁。其中，激光、闪光灯、红外灯、热风激励通过照射被测物体表面，向被测物体表面注入热量，属于外部激励；超声和电磁激励可实现从表面到内部的立体加热，属于内部激励。</p>

    <h4 style="color: #C36"><b>技术原理</b></h4>
		<br/>
		<p>热波是随时间变化的温度场，与任何波动一样，热波在材料中有特定的传输规律并在其传输过程中会与材料发生相互作用。</p>
		<p>大多情况下，局部缺陷使得热波非均匀传播，热波将会发生散射和反射等，以某种方式在材料表面的温度场变化上反映出来。图中所示，虚线代表材料表面的温度分布，材料内部的缺陷或损伤的热扩散系数不同，热波传输差异得到的表面温度场不同。</p>
		<p>当热波在传输过程中遇到隔热性缺陷，即缺陷的热扩散系数小于本体材料的热扩散系数时，热量将会在缺陷上方材料表面发生积聚，使该处温度高于周围区域；反之，当热波在传输过程中遇到导热性缺陷时，即缺陷的热扩散系数大于本体材料的热扩散系数时，缺陷上方材料表面热量向下扩散更容易，使该处温度低于周围区域。</p>
		<p>通过控制热激励方法和记录材料表面的温场变化，将可以获取材料的均匀性信息及其表面下的结构信息，于是达到无损检测的目的。

<h4 style="color: #C36"><b>技术优势</b></h4>
<br/>
    <ul>
			<li type="disc">
						非接触；
				</li>
				<li type="disc">
						适用范围广，包括金属、非金属和复合材料等；
				</li>
				<li type="disc">
					速度快；
				</li>
				<li type="disc">
					面积大；
				</li>
				<li type="disc">
					操作简单；
				</li>
				<li type="disc">
					检测结果图像显示，直观易懂；
				</li>
				<li type="disc">
					定量测量；
				</li>
				<li type="disc">
					在线在役。
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
