<?php include('header.html'); ?>
<section id="full-width">
<img src="../images/hero-pages2.jpg" class="full-width" />
<div class="page-subtitle">
<h3>公司技术</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
</div>

</section><!-- end-full-width -->

<section class="container page-content">
<?php include('technology-sidebar.html'); ?>
<section id="main-content">
	<div class="eleven columns">
	<h2>红外热成像无损检测技术</h2>
	<hr />
    <p>无损检测（Non-Destructive Testing, NDT）是指在不影响被测对象使用性能的条件下，利用材料或构件中缺陷引起的电、磁、声、光、热等特性变化，对材料健康状态，服役状况，如均匀性、裂纹、腐蚀、强度、应力集中、疲劳状态等进行检测评估的一种技术。无损检测技术可在现场对构件状况进行准确的评估，从而为设备维护提供必要的参考依据。</p>
	<p>作为现代工业的基础技术之一，无损检测在保证产品和质量上发挥着越来越重要的作用，其“质量卫士”的美誉已得到工业界的普遍认可。</p>
    <p>随着现代科学与工业技术的发展，产品更新换代的速度不断加快，对产品质量及安全的要求也越来越高，检测产品的技术也越来越受到重视，新的检测方法不断出现并逐步发展和完善。</p>
    <p>红外热成像无损检测技术是是随着热成像技术的发展而出现的一种新型无损检测技术，利用红外热像仪将物体不可见的红外辐射信息转换成可见热图像。该技术具有检测速度快、非接触、非破坏、检测面积大、便于在线在役检测、结果直观易懂等优点，可对金属、非金属、复合材料中存在的脱粘、裂纹、锈蚀、疲劳、损伤等缺陷进行检测，已日益成为保证产品质量和安全运行的重要手段，具有广阔发展前景。</p>
    <p>红外热成像无损检测技术与射线检测、超声检测、磁粉检测、渗透检测、涡流检测等传统无损检测技术相比，具有快速、高效、大面积及可远距离检测等优点，是国际上积极发展的新型数字化无损检测技术，并不断地被人们所接受而广泛应用。</p>
    <p>随着现代计算机技术以及数字信号处理技术的迅猛发展，为研究红外热成像无损检测技术提供了良好的手段。</p>

    <h4 style="color: #C36"><b>主要检测方法</b></h4>
		<br/>
		<br/>
    <p align="center"><img src="../images/products/active.png"/></p><br/>

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
   <h4 style="color: #C36"><b>基于以上特点，该技术可应用于：</b></h4>
	 <br/>
   <ul>
    	<li type="disc">
            <p>航空/航天器铝蒙皮加强筋开裂与锈蚀的检测，机身蜂窝结构材料、碳纤维和玻璃纤维增强多层复合材料缺陷的检测、损伤判别与评估；</p>
        </li>
        <li type="disc">
            <p>火箭液体燃料发动机和固体燃料发动机的喷口绝热层附着检测，涡轮发动机和喷气发动机叶片的检测；</p>
        </li>
        <li type="disc">
        	<p>新材料（特别是新型复合结构材料）的研究，对其从原材料到工艺制造、在役使用的整个过程中进行无损检测与评估；</p>
        </li>
        <li type="disc">
        	<p>多层结构和复合材料结构中脱粘、分层、开裂等损伤的检测与评估；</p>
        </li>
        <li type="disc">
        	<p>各种压力容器、承载装置表面及表面下疲劳裂纹的检测；</p>
        </li>
        <li type="disc">
        	<p>各种粘接、焊接质量检测，涂层检测，各种镀膜、夹层的探伤；</p>
        </li>
        <li type="disc">
        	<p>材料厚度和各种涂层、夹层厚度的检测；</p>
        </li>
        <li type="disc">
        	<p>表面下材料和结构特征的识别；</p>
        </li>
        <li type="disc">
        	<p>运转设备的在线、在役监测。</p>
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
