<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="container">
		<p id="indexVisual">
			<img src="/html/images/img_index_00.jpg" alt="enPiT BizApp" width="345" /><br />
			<img src="/html/images/img_index_01.jpg" alt="産業技術大学院大学" width="345" /><br />
			<img src="/html/images/img_index_02.gif" alt="ビジネスの課題に、新たな解決策を。最先端アプリケーション技術を実践的に学ぶ、新プログラム、始動。" width="389" />
		</p>
		<div class="ofHidden mb30">
			<div class="fLeft w445">
				<p class="mtb20 sp90CenterImg"><img src="/html/images/img_index_03.gif" alt="全国15大学の連携プログラム「enPiT」に参画。本学は、ビジネスアプリケーション分野の実学を展開。" width="445" /></p>
				<ul class="discList">
					<li>enPiTは日本国内の15大学が連携して実践的な人材育成を推進する教育ネットワークです。情報技術分野の中から4分野に焦点を絞り、複数の大学が連携して教育を行います。
					<li>産業技術大学院大学は、筑波大学、はこだて未来大学とともに、ビジネスアプリケーション分野を担当します。
					<li>本学では社会人が学ぶ専門職大学院としての特徴を生かしたカリキュラムを展開。進化を続ける先端情報技術や情報インフラを有機的に活用し、潜在的なビジネスニーズや社会ニーズに対する実践的問題解決ができる人材の育成を目指します。
				</ul>
			</div>
			<ul id="enpit">
				<li><a href="http://www.cs.tsukuba.ac.jp/enPiT/" target="_blank"><img src="/html/images/btn_tsukuba_off.gif" alt="筑波大学" width="140" /></a></li>
				<li><a href="http://www.fun.ac.jp/enpit/" target="_blank"><img src="/html/images/btn_hakodate_off.gif" alt="はこだて未来大学" width="140" /></a></li>
				<li><a href="http://aiit.ac.jp/?utm_source=enpit&utm_medium=web&utm_campaign=campaign"><img src="/html/images/btn_sangyogijutsu_off.gif" alt="産業技術大学院大学" width="140" /></a></li>
			</ul>
		</div>
		<div class="indexH2 mb15">
			<h2><img src="/html/images/tt_index_01.gif" alt="NEWS" width="100" /></h2>
			<a href="<?php echo get_category_link( 1 ); ?>">一覧を見る</a>
		</div>
		<table summary="NEWS" class="transparentTab mb30">

<?php
	$the_query = new WP_Query( 'cat=1' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
			<tr>
				<th><?php the_time( get_option( 'date_format' ) ); ?></th>
				<td>
					<!-- <a href="#" class="hGrayLink">リンク</a> -->
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</td>
			</tr>
<?php
	endwhile;
	wp_reset_postdata();
?>

		</table>
		<div class="indexH2 mb15">
			<h2><img src="/html/images/tt_index_02.gif" alt="enPiTの概要" width="100" /></h2>
		</div>
		<div class="ofHidden mb30">
			<p class="fLeft w400 mb15sp sp95PCenter">
				本事業は、多数の大学、企業、団体などが密接に連携し、全国的な「分野・地域を越えた実践的教育協働ネットワーク（通称：enPiT エンピット）」を形成することにより、実践的な教育を実施・普及することを目的としています。 大阪大学を中心とした全国の15大学はこの構想に基づき、2013年4月より、情報技術を活用して社会の 具体的な課題を解決できる人材を育成するネットワークを構築。クラウドコンピューティング技術、 セキュリティ技術、組込みシステム技術、ビジネスアプリケーション開発の4分野において、 プロジェクト型学習（PBL）を中心とした実践的な情報教育を開始しました。なお、本事業は、文部科学省「情報技術人材育成のための実践教育ネットワーク形成事業」の一環として行われます。
			</p>
			<div class="fRight w418 sp90CenterImg"><img src="/html/images/img_index_05.jpg" alt="enPiTの概要" width="418" /></div>
		</div>
	</div>

<?php get_footer(); ?>
