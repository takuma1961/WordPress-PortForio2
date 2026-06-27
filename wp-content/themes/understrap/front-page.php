<?php get_header(); ?>

<!-- Hero -->
<section class="scroll-slide" style="background:#222; color:#fff; text-align:center; padding:100px 20px;">
	<h1 style="font-size:2.5rem; margin-bottom:16px;">Takuma Katsumata</h1>
	<p style="font-size:1.1rem; color:#aaa; margin-bottom:32px;">WordPress / システムエンジニア</p>
	<a href="#contact" style="background:#fff; color:#222; padding:12px 32px; border-radius:4px; text-decoration:none; font-weight:bold;">お問い合わせ</a>
</section>

<!-- About -->
<section id="about" class="scroll-slide" style="padding:80px 20px; max-width:800px; margin:0 auto;">
	<h2 style="font-size:1.8rem; margin-bottom:24px;">About</h2>
	<p>本業ではシステムエンジニア、副業としてWordPressサイトの制作を行っています。</p>
	<a href="http://word-press.local/carrer/" style="color:#888;">詳しい経歴はこちら→</a>
	<br>
	<a href="http://word-press.local/self-introduction/" style="color:#888;">自己紹介はこちら→</a>
</section>

<!-- Skills -->
<section id="skills" class="scroll-slide" style="background:#f9f9f9; padding:80px 20px;">
	<div style="max-width:1000px; margin:0 auto;">
		<h2 style="font-size:1.8rem; margin-bottom:8px;">Skills</h2>
		<p style="font-size:0.9rem; color:#888; margin-bottom:32px;">
			<a href="http://word-press.local/works/" style="color:#888;">詳しいスキル一覧はこちら →</a>
		</p>
		<div style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px;">
			<div class="scroll-slide" style="background:#fff; border:1px solid #eee; border-radius:8px; padding:20px;">
				<h3 style="font-size:1rem; margin-bottom:8px;">Java</h3>
				<p style="color:#f5a623; margin:0 0 8px;">★★★</p>
				<p style="font-size:0.85rem; color:#666;">Spring Boot / MySQL / React を利用したサイトの運用保守・障害対応</p>
			</div>
			<div class="scroll-slide" style="background:#fff; border:1px solid #eee; border-radius:8px; padding:20px;">
				<h3 style="font-size:1rem; margin-bottom:8px;">Premiere Pro</h3>
				<p style="color:#f5a623; margin:0 0 8px;">★★</p>
				<p style="font-size:0.85rem; color:#666;">テロップ・カット・トランジション・エフェクト利用可能</p>
			</div>
			<div class="scroll-slide" style="background:#fff; border:1px solid #eee; border-radius:8px; padding:20px;">
				<h3 style="font-size:1rem; margin-bottom:8px;">WordPress</h3>
				<p style="color:#f5a623; margin:0 0 8px;">★★★</p>
				<p style="font-size:0.85rem; color:#666;">基本操作・プラグイン・テーマ編集</p>
			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact" class="scroll-slide" style="padding:80px 20px; max-width:800px; margin:0 auto;">
	<h2 style="font-size:1.8rem; margin-bottom:24px;">Contact</h2>
	<?php echo do_shortcode('[contact-form-7 id="550b6ad" title="コンタクトフォーム 1"]'); ?>
</section>

<!-- SNS Icons -->
<div class="scroll-slide" style="background:#222; padding:30px 20px; text-align:center;">
	<div style="display:flex; justify-content:center; gap:16px;">
		<a href="https://x.com/あなたのID" target="_blank" style="display:flex; align-items:center; justify-content:center; width:44px; height:44px; background:#000; border-radius:50%; text-decoration:none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white">
				<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
			</svg>
		</a>
		<a href="https://instagram.com/あなたのID" target="_blank" style="display:flex; align-items:center; justify-content:center; width:44px; height:44px; background:#000; border-radius:50%; text-decoration:none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white">
				<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
			</svg>
		</a>
		<a href="https://facebook.com/あなたのID" target="_blank" style="display:flex; align-items:center; justify-content:center; width:44px; height:44px; background:#000; border-radius:50%; text-decoration:none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white">
				<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
			</svg>
		</a>
		<a href="https://line.me/あなたのID" target="_blank" style="display:flex; align-items:center; justify-content:center; width:44px; height:44px; background:#000; border-radius:50%; text-decoration:none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white">
				<path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.630 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.349 0 .631.285.631.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.070 9.436-6.975C23.176 14.393 24 12.443 24 10.314" />
			</svg>
		</a>
	</div>
</div>

<style>
.scroll-slide {
	opacity: 0;
	transform: translateX(-60px);
	transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}
.scroll-slide.is-visible {
	opacity: 1;
	transform: translateX(0);
}
/* スマホ等、動きを抑えたい設定を尊重 */
@media (prefers-reduced-motion: reduce) {
	.scroll-slide {
		opacity: 1;
		transform: none;
		transition: none;
	}
}
</style>

<script>
(function () {
	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var MIN_DISPLAY_MS = reduceMotion ? 0 : 1200;
	var startTime = Date.now();

	function hideLoader() {
		var loader = document.getElementById('site-loader');
		if (loader) {
			loader.classList.add('is-loaded');
		}
		document.documentElement.classList.remove('is-loading');
	}

	window.addEventListener('load', function () {
		var elapsed = Date.now() - startTime;
		var remaining = MIN_DISPLAY_MS - elapsed;
		if (remaining > 0) {
			setTimeout(hideLoader, remaining);
		} else {
			hideLoader();
		}
	});
})();

document.addEventListener('DOMContentLoaded', function () {
	var targets = document.querySelectorAll('.scroll-slide');

	if (!('IntersectionObserver' in window)) {
		// 非対応ブラウザはアニメーションなしで即表示
		targets.forEach(function (el) {
			el.classList.add('is-visible');
		});
		return;
	}

	var observer = new IntersectionObserver(function (entries, obs) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting) {
				entry.target.classList.add('is-visible');
				obs.unobserve(entry.target); // 一度表示したら監視終了(再度隠れても消えない)
			}
		});
	}, {
		root: null,
		rootMargin: '0px 0px -10% 0px', // 画面下から少し入ったタイミングで発火
		threshold: 0.15
	});

	targets.forEach(function (el) {
		observer.observe(el);
	});
});
</script>

<?php get_footer(); ?>
