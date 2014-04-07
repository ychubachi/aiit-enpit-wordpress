	<div id="gNavArea">
		<ul id="gNavList" class="hsp">
			<li><!--
			--><a href="/"><!--
<?php if ( is_home() || is_front_page() ) : ?>
				--><img src="/html/images/btn_gnav_01_on.gif" alt="HOME" width="233" class="hspI" /><!--
<?php else : ?>
				--><img src="/html/images/btn_gnav_01_off.gif" alt="HOME" width="233" class="hspI" /><!--
<?php endif; ?>
				--><span class="hpc">HOME</span><!--
			--></a><!--
	 --></li><!--
	 --><li><!--
			--><a href="/program"><!--
<?php if ( preg_match( '/\/program/', $_SERVER['REQUEST_URI']) ) : ?>
				--><img src="/html/images/btn_gnav_02_on.gif" alt="プログラム概要" width="230" class="hspI" /><!--
<?php else : ?>
				--><img src="/html/images/btn_gnav_02_off.gif" alt="プログラム概要" width="230" class="hspI" /><!--
<?php endif; ?>
				--><span class="hpc">プログラム概要</span><!--
			--></a><!--
	 --></li><!--
	 --><li><!--
			--><a href="/curriculum"><!--
<?php if ( preg_match( '/\/curriculum/', $_SERVER['REQUEST_URI']) ) : ?>
				--><img src="/html/images/btn_gnav_03_on.gif" alt="カリキュラム" width="230" class="hspI" /><!--
<?php else : ?>
				--><img src="/html/images/btn_gnav_03_off.gif" alt="カリキュラム" width="230" class="hspI" /><!--
<?php endif; ?>
				--><span class="hpc">カリキュラム</span><!--
			--></a><!--
	 --></li><!--
	 --><li><!--
			--><a href="/application"><!--
<?php if ( preg_match( '/\/application/', $_SERVER['REQUEST_URI']) ) : ?>
				--><img src="/html/images/btn_gnav_04_on.gif" alt="出願・選考" width="230" class="hspI" /><!--
<?php else : ?>
				--><img src="/html/images/btn_gnav_04_off.gif" alt="出願・選考" width="230" class="hspI" /><!--
<?php endif; ?>
				--><span class="hpc">出願・選考</span><!--
			--></a><!--
	 --></li>
		</ul>
    <a href="/"><img src="/html/images/sp_home.png" width="87" height="28" alt="Home" class="hpc sphome" /></a>
	</div>
