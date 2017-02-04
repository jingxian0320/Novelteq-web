<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
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
	<h2>LaScan-T200 </h2>
	<hr />

	<div class="three columns">
	<br />
	<img src="../images/products/lascan-t200.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<p><b>LaScan-T200</b> 采用<b>独家专利技术</b>，以大功率激光器进行线扫描，实现短脉冲、高功率密度的热激励。再根据试件的特性控制热像仪与激光束扫描之间的时序，既可以实现快速热波成像，也可以实现长热激励时间的热波无损检测，具有广泛的适用性。检测对象包括各种金属、非金属及复合材料，特别是热响应速度快的样品。</p>
		<p>由于激光扫描的独特性，LaScan-T200还可以检测试件的近表面裂纹，以及有效的检测薄涂层的厚度与附着均匀性。</p>
		<p>采用<b>分体便携式</b>设计，手持探测单元结构紧凑、易于操作，可以选配多种热像仪。分离的控制系统功能齐全、触摸操作、图像处理能力强。系统即适合于在线、在役检测应用，也适合于实验室开展热波无损检测技术的研究。
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
	  		<img src="../images/products/las1.png">
			</div>
	      <ul>
	        <li>
          	<p>非接触式，对样品表面无要求；</p>
          </li>
          <li>
          	<p>功率稳定，使用寿命长；</p>
          </li>
          <li>
          	<p>热激励的面积与工作距离可以随需要改变。</p>
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
<class class="nine columns">

<div class="three columns">
	<img src="../images/products/air10.png">
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
<class class="nine columns">

<div class="three columns">
	<img src="../images/products/air8.png">
</div>

	<ul>
		<li>
				<p>可根据需要灵活选配多种热像仪，包括高分辨非制冷型和高灵敏度制冷型；</p>
			</li>
			<li>
				<p>可以选配多种样机测试台。</p>
			</li>
	</ul>
</class>
</div>


	<div id="parameters" class="tabcontent">
	  <img src="../images/products/table_lascan2.png" />
	</div>

	<div id="applications" class="tabcontent">
		<!-- <br/> -->
	 <p>
		下图所示的试件为人工制作的六个长度相同、厚度不同的薄膜样件，膜厚从左至右分别为：300μm、250μm、200μm、150μm、100μm和50μm，将不同厚度的薄膜样件贴在一铝板上。由于铝对激光反射率高，发射率低，因此需要在覆膜表面喷上一层黑漆。采用激光扫描加热后，可以清楚的检测出这些薄膜的厚度。
</p>
		<div class="four columns">
			<img src="../images/products/app_film1.png" />
		</div>
		<div class="four columns">
			<img src="../images/products/app_film2.png" />
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
document.getElementById("thermpulse").style.display = "none";
document.getElementById("irscan").style.display = "none";
document.getElementById("airscan").style.display = "none";
document.getElementById("XXXscan").style.display = "none";
document.getElementById("thermsonic").style.display = "none";
}
</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
