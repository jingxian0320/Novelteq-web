<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages-product.jpg" class="full-width" />
<!-- <div class="page-subtitle">
<h3>公司产品</h3>
<p>采用先进技术，满足您的多元需求</p>
</div> -->
<div class='white-space'></div>
</section><!-- end-full-width -->


<section class="container page-content">
<?php include('product-sidebar.php'); ?>

<section id="main-content">
<div class="eleven columns">
	<h2>锁相系统 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/thermlockin-160.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>ThermLock-in 160锁相系统为分体式热波成像无损检测系统，利用调制装置对被测物表面施加交变的热源，材料内部结构对入射热波的扰动所产生的反射将在物体表面生成一个可被红外热像仪记录的变化波形。根据交变的热源类型及相应的物理模型对采集到的数据信号进行处理，以图像形式显示。热波锁相成像无损检测技术有别于脉冲热波成像技术，最大的区别是锁相技术使用的是周期性热源，通过相关技术对噪声信号进行抑制，提取单频响应信号，可以减少单位面积热激励的强度，降低了对加热均匀性和表面发射率一致性的要求，提高了信噪比，使探测灵敏度和探测能力得到了很大的提高。既适合于在线、在役检测应用，也可满足实验室研发需求。

</p>




	</div>
	<div class="ten columns">
	<ul class="tab">
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'characterics')" id="defaultOpen">产品特点</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'parameters')">技术参数</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'applications')">典型应用</a></li>
	</ul>

	<div id="characterics" class="tabcontent">
		<br/>
		<class class="nine columns" >
			<div class="three columns">
	  		<img src="../images/products/ts1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，内部激励；</p>
          </li>
          <li>
          	<p>不受待测物表面状态影响；</p>
          </li>
          <li>
          	<p>可检测复杂结构件较深处缺陷。</p>
          </li>
      </ul>
  </class>

<hr/>
<class class="nine columns">

<div class="three columns">
	<img src="../images/products/air4.png">
</div>

	<ul>
		<li>
				<p>控制系统功能齐全，柜式工作站易于移动，操作简便；</p>
			</li>
			<li>
				<p>触摸屏角度可随舒适度任意调整；</p>
			</li>
			<li>
				<p>空间充足，可选配多种测试技术。</p>
			</li>
	</ul>
</class>

<hr/>

<class class="nine columns">

	<div class="three columns">
		<img src="../images/products/thl1.png">
	</div>

		<ul>
			<li>
					<p>功能完整的热波图像处理能力，使缺陷更易于显现；</p>
				</li>
				<li>
					<p>界面清新，简单易用；触摸控制，操作方便；</p>
				</li>
				<li>
					<p>Windows操作系统，稳定可靠。</p>
				</li>
		</ul>
</class>

</div>


	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_thermlockin1.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		该检测技术适用范围比较广泛，包括金属、非金属及复合材料，对试件表面涂层的裂纹、脱粘等损伤及复合材料内部缺陷都有很好的检测能力。可以通过增加检测时间提高检测结果的信噪比，大大提高了检测能力。下图为铝蜂窝试件。
</p>
		<div class="three columns">
			<img src="../images/products/app_thl1.png" />
		</div>
		<div class="three columns">
    	<img src="../images/products/app_thl2.png" />
		</div>
		<div class="three columns">
    	<img src="../images/products/app_thl3.png" />
		</div>
	</div>
</div>
</div>
</section>
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
document.getElementById("lascan").style.display = "none";
document.getElementById("thermpulse").style.display = "none";
document.getElementById("irscan").style.display = "none";
document.getElementById("airscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
