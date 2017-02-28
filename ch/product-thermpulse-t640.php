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
	<h2>ThermPulse-T640 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/thermpulse-t640.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p>ThermPulse-T640 采用大功率闪光灯进行热激励，具有脉冲时间短、瞬间加热功率高、试件表面同时加热等优点。适用于各种金属、非金属及复合材料，特别是热响应速度快的样品，如高热导率的金属材料或较浅层的缺陷。
采用一体化便携式设计，集热激励、图像采集和信号处理于一身，重量轻、易操作、功能全，十分适合在线、在役的无损检测应用。

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
	  		<img src="../images/products/pulse1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，对样品表面平整度要求低；</p>
          </li>
          <li>
          	<p>脉冲时间短，峰值功率高，适合于热响应速度快的样品；</p>
          </li>
          <li>
          	<p>大面积同时加热，热激励均匀。</p>
          </li>
      </ul>
  </class>
	<hr/>
	<class class="nine columns" >
		<div class="three columns">
			<img src="../images/products/air9.png">
		</div>
			<ul>
				<li>
					<p>控制系统紧凑便携，易于操作；</p>
				</li>
				<li>
					<p>触摸屏角度可随舒适度任意调整；</p>
				</li>
				<li>
					<p>坚固美观的仪器箱，保护系统免受使用环境的冲击。</p>
				</li>
		</ul>
</class>
<hr/>

<class class="nine columns">

	<div class="three columns">
		<img src="../images/products/air5.png">
	</div>

		<ul>
			<li>
					<p>界面清新，简单易用；</p>
				</li>
				<li>
					<p>触摸控制，操作方便；</p>
				</li>
				<li>
					<p>Windows操作系统，稳定可靠。</p>
				</li>
		</ul>
</class>

<hr/>

  <class class="nine columns" >
		<div class="three columns">
  		<img src="../images/products/pulse4.png">
		</div>
      <ul>
      	<li>
          	<p>分离式测试单元，设计紧凑，重量轻，操作方便；</p>
          </li>
          <li>
          	<p>探测单元具有独立显示器，可以观察试件及设备状态；</p>
          </li>
          <li>
          	<p>多种触发方式，操作更方便。</p>
          </li>
      </ul>
  </class>
	<hr/>

	  <class class="nine columns" >
			<div class="three columns">
	  		<img src="../images/products/air8.png">
			</div>
	      <ul>
	      	<li>
	          	<p>可根据需要灵活选配多种热像仪，包括高分辨非制冷型和高灵敏度制冷型；；</p>
	          </li>
	          <li>
	          	<p>可以选配多种样机测试台。</p>
	          </li>
	      </ul>
	  </class>
</div>


	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_thermpulse2.png" />
	</div>

	<div id="applications" class="tabcontent">
	  <p>
		下图所示试件为碳纤维板，分别受过不同的重力冲击，形成一些表面不可见的内部断裂缺陷。采用闪光灯热激励可以清楚的检测出这些内部缺陷。

</p>
		<div class="four columns">
			<img src="../images/products/app_cfiber1.png" />
		</div>
		<div class="four columns">
    	<img src="../images/products/app_cfiber2.png" />
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
document.getElementById("irscan").style.display = "none";
document.getElementById("airscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
