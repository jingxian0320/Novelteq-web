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
	<h2>附件</h2>
	<hr />

	<div class="three columns" align="center">
	<h4>三维测试台</h4>
	<img src="../images/products/addon1.png" class="full-width" />

	</div>
	<div class="seven columns column">
		<ul class="tab">
		  <li><a href="javascript:void(0)" class="tablinks1" onclick="openTab1(event, 'characterics1')" id="defaultOpen1">产品特点</a></li>
		  <li><a href="javascript:void(0)" class="tablinks1" onclick="openTab1(event, 'parameters1')">技术参数</a></li>
		</ul>
		<div id="characterics1" class="tabcontent1">
			<br/>
			<p>TB1000为三维测试台， XY二维为手动、Z方向为电动，有利于测试时进行对焦。具有操作简单、使用方便的特点。与其它热波无损检测系统集成，可对大型部件进行分区域检测，实现图像拼接。
</p>
<p>
测试台台面为磁性不锈钢板，有利于固定试件。可与本公司多种分离式测试单元配合使用，控制系统需选用柜式工作站。
</p>
<p>
为了适应各种应用场合的需求，我们可根据用户的实际需要，对工作台的尺寸进行特别定制。
</p>


	</div>
	<div id="parameters1" class="tabcontent1">
	  <img src="../images/products/table_addon1.png" />
	</div>
</div>

<div class="three columns" align="center">
<h4>电动三维测试台</h4>
<img src="../images/products/addon1.png" class="full-width" />

</div>
<div class="seven columns column">
	<ul class="tab">
	  <li><a href="javascript:void(0)" class="tablinks2" onclick="openTab2(event, 'characterics2')" id="defaultOpen2">产品特点</a></li>
	  <li><a href="javascript:void(0)" class="tablinks2" onclick="openTab2(event, 'parameters2')">技术参数</a></li>
	</ul>
	<div id="characterics2" class="tabcontent2">
		<br/>
		<p>TB2000为XYZ三维自动测试台，具有行程大、移动精确的特点，与热波无损检测系统集成一体，由控制系统全面控制，可对大型部件进行分区域检测，图像自动拼接。

</p>
<p>
	测试台构造坚固，台面为磁性不锈钢板。可与本公司各种分离式测试单元配合使用，控制系统需选用柜式工作站。

</p>
<p>
	为了适应各种应用场合的需求，我们可根据用户的实际需要，对工作台的尺寸进行特别定制。

</p>


</div>
<div id="parameters2" class="tabcontent2">
  <img src="../images/products/table_addon2.png" />
</div>
</div>

</section>
  </section><!-- container -->


<?php include('footer.html'); ?>

</div><!-- end-wrap -->
<!-- End Document
================================================== -->

	<script>
	document.getElementById("defaultOpen1").click();
	document.getElementById("defaultOpen2").click();
		function openTab1(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks1");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
function openTab2(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent2");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("lascan").style.display = "none";
document.getElementById("irscan").style.display = "none";
document.getElementById("thermpulse").style.display = "none";
document.getElementById("airscan").style.display = "none";
document.getElementById("magnetherm").style.display = "none";
document.getElementById("thermsonic").style.display = "none";

</script>
		<script type="text/javascript" src="../js/latest-twitt.js"></script>


</body>
</html>
