<div id="sidebar-wrapper" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
<div class="sidebar-container">
<div class="sidebar section" id="sidebar"><div class="widget PageList" data-version="2" id="PageList1">
<div class="widget-title">
<h3 class="title">
Catatan Toko
</h3>
</div>
<div class="widget-content">
<ul style="color:crimson;">
    site note
</ul>
</div>
</div><div class="widget Label" data-version="2" id="Label2">
<div class="widget-title">
<h3 class="title">
Kategori Produk
</h3>
</div>
<div class="widget-content list-label">
<ul>
</ul>
</div>
</div></div>
<div class="sidebar-sticky section" id="sidebar-sticky"><div class="widget HTML" data-version="2" id="HTML5">
<div class="widget-title">
<h3 class="title">
Dukungan Pengiriman
</h3>
</div>
<div class="widget-content">
<b:if cond="data:blog.pageType == &quot;item&quot;">
<div class="rvm-shipping-support">
<div class="rvm-shipping-support-img">
<img class="lazyload" src="https://1.bp.blogspot.com/-42PkdIi_4ZM/XTkVhI4pJnI/AAAAAAAADYg/AIOezFVd_RUy94NSjhZ5MSMmqfqio0DkwCPcBGAYYCw/s1600/kurir-jne.png" alt="JNE" title="JNE" />
</div>
<div class="rvm-shipping-support-title">
<ul class="rvm-shipping-options">
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">Reguler</span></li>
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">OKE</span></li>
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">YES</span></li>
</ul>
</div>
</div>
<div class="rvm-shipping-support">
<div class="rvm-shipping-support-img">
<img class="lazyload" src="https://1.bp.blogspot.com/-aO1lo244Sno/XTkVlXjeMtI/AAAAAAAADYk/nb5TYXo1sMIiXFRTGM67uhM_Qpmm72vpACPcBGAYYCw/s1600/kurir-tiki.png" alt="TIKI" title="TIKI" />
</div>
<div class="rvm-shipping-support-title">
<ul class="rvm-shipping-options">
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">Reguler</span></li>
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">Over Night Service</span></li>
</ul>
</div>
</div>
<div class="rvm-shipping-support">
<div class="rvm-shipping-support-img">
<img class="lazyload" src="https://1.bp.blogspot.com/-sLHUWTceKL8/XTkVpu2oW-I/AAAAAAAADYs/RD5TNrxyxQwZ_vA4mVqPLtRtmgCjQJoXwCPcBGAYYCw/s1600/kurir-grab.png" alt="Grab" title="Grab" />
</div>
<div class="rvm-shipping-support-title">
<ul class="rvm-shipping-options">
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">Instant Courier</span></li>
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">Same Day</span></li>
</ul>
</div>
</div>
<div class="rvm-shipping-support">
<div class="rvm-shipping-support-img">
<img class="lazyload" src="https://1.bp.blogspot.com/-LZmYGvdCfkI/XTkVrRCdsvI/AAAAAAAADYw/7qfe9IZkRvggCVGpDbBs1sqLx67tVLIwgCPcBGAYYCw/s1600/kurir-jnt.png" alt="J&amp;T" title="J&amp;T" />
</div>
<div class="rvm-shipping-support-title">
<ul class="rvm-shipping-options">
<li><i class="svg_icon__tick_grey"></i><span class="inline-block va-middle">Reguler</span></li>
</ul>
</div>
</div>
</b:if>
</div>
</div><div class="widget PopularPosts" data-version="2" id="PopularPosts1">
<div class="widget-title">
<h3 class="title">
Produk Terlaris
</h3>
</div>
    {% for item in site.data.featured %}
<div class="widget-content" style="margin-top: 10px;">
<div class="post post-shop-info" data-id="{{ item.id }}">
<div class="post-content">
<a class="post-image-link" href="{{site.url}}{{ item.url }}">
<img alt="Produk Contoh kesatu" class="post-thumb lazyload" src="{{ item.image }}"/>
</a>
<div class="product-info">
<h2 class="post-title">
<a href="{{site.url}}{{ item.url }}">{{ item.title }}</a>
</h2>
<span class="item_price" style="font-size: 14px;!important;">Rp. {{item.price}}</span>
</div>
</div>
</div>
</div>
          {% endfor %}
</div>
</div>
</div>
</div>

