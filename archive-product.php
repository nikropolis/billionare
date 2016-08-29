<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<div class="layout-header store-header">
	<a href="" class="language-toggle gold-l">ENG</a>
	<div class="container">
		<ul>
			<li class="menu-item active"><a href="/store.html" class="menu-link">online-store</a></li>
			<li class="menu-item"><a href="#news" class="menu-link">новости</a></li>
			<li class="menu-item logo-item">
				<a href="/index.html" class="menu-link main-logo">
                    <span class="big-logo">
                        <svg version="1.1" id="logo-big" x="0px" y="0px"
							 viewBox="30.1 344.1 535.5 155.7" enable-background="new 30.1 344.1 535.5 155.7" xml:space="preserve">
                            <g>
								<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="505.6802" y1="452.0621" x2="53.6802" y2="454.0621">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_1_)" d="M117.2,431.7v-1.7h20.7v1.7h-1c-2.2,0-3.6,0.2-4.3,0.6c-0.7,0.4-1.1,1.1-1.4,2.1
                                    c-0.2,1-0.3,3.5-0.3,7.4V465c0,3.7,0.1,6.1,0.2,7.3c0.2,1.2,0.6,2,1.3,2.6c0.7,0.6,2.1,0.8,4.1,0.8h1.3v1.7h-20.7v-1.7h1.3
                                    c1.9,0,3.2-0.3,4-0.8c0.7-0.5,1.2-1.3,1.4-2.4c0.2-1.1,0.3-3.6,0.3-7.5v-23.2c0-3.8-0.1-6.2-0.3-7.3c-0.2-1.1-0.6-1.8-1.3-2.3
                                    c-0.7-0.4-2.2-0.6-4.4-0.6H117.2L117.2,431.7z"/>
								<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="505.681" y1="452.244" x2="53.681" y2="454.244">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_2_)" d="M188.3,463.5l-0.3,13.9h-38.6v-1.7h1.3c1.9,0,3.2-0.3,4-0.8c0.7-0.5,1.2-1.3,1.4-2.4
                                    c0.2-1.1,0.3-3.6,0.3-7.5v-23.2c0-3.8-0.1-6.2-0.3-7.3c-0.2-1.1-0.7-1.8-1.3-2.3c-0.7-0.4-2.1-0.6-4.4-0.6h-1v-1.7h21.8v1.7h-2
                                    c-2.2,0-3.7,0.2-4.4,0.6c-0.7,0.4-1.2,1.1-1.4,2.1c-0.2,1-0.4,3.5-0.4,7.4v24.7c0,3.4,0.1,5.5,0.3,6.4c0.2,0.9,0.7,1.5,1.5,2
                                    c0.8,0.5,2.5,0.7,5.1,0.7h3.5c2.8,0,4.8-0.3,6.2-0.8c1.3-0.5,2.6-1.6,3.8-3.3c1.2-1.7,2.3-4.4,3.3-8.2H188.3L188.3,463.5z"/>
								<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="505.6819" y1="452.4513" x2="53.6819" y2="454.4513">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_3_)" d="M235.2,463.5l-0.3,13.9h-38.6v-1.7h1.3c1.9,0,3.2-0.3,4-0.8c0.7-0.5,1.2-1.3,1.4-2.4
                                    c0.2-1.1,0.3-3.6,0.3-7.5v-23.2c0-3.8-0.1-6.2-0.3-7.3c-0.2-1.1-0.6-1.8-1.3-2.3c-0.7-0.4-2.1-0.6-4.4-0.6h-1v-1.7H218v1.7h-2
                                    c-2.2,0-3.7,0.2-4.4,0.6c-0.7,0.4-1.2,1.1-1.4,2.1c-0.2,1-0.4,3.5-0.4,7.4v24.7c0,3.4,0.1,5.5,0.3,6.4c0.2,0.9,0.7,1.5,1.5,2
                                    c0.8,0.5,2.5,0.7,5.1,0.7h3.4c2.8,0,4.9-0.3,6.2-0.8c1.4-0.5,2.6-1.6,3.9-3.3c1.2-1.7,2.3-4.4,3.3-8.2H235.2L235.2,463.5z"/>
								<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="505.6827" y1="452.6179" x2="53.6827" y2="454.6179">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_4_)" d="M242.8,431.7v-1.7h20.7v1.7h-1c-2.2,0-3.7,0.2-4.3,0.6c-0.7,0.4-1.1,1.1-1.4,2.1
                                    c-0.2,1-0.3,3.5-0.3,7.4V465c0,3.7,0.1,6.1,0.2,7.3c0.2,1.2,0.6,2,1.3,2.6c0.7,0.6,2.1,0.8,4.1,0.8h1.3v1.7h-20.7v-1.7h1.3
                                    c1.9,0,3.3-0.3,4-0.8c0.7-0.5,1.2-1.3,1.4-2.4c0.2-1.1,0.3-3.6,0.3-7.5v-23.2c0-3.8-0.1-6.2-0.3-7.3c-0.2-1.1-0.6-1.8-1.3-2.3
                                    c-0.7-0.4-2.2-0.6-4.4-0.6H242.8L242.8,431.7z"/>
								<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="505.6836" y1="452.8201" x2="53.6836" y2="454.8201">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_5_)" d="M274.2,453.4c0-7.3,2.4-13.2,7.1-17.6c4.7-4.4,10.6-6.6,17.6-6.6c7.1,0,13,2.2,17.8,6.6
                                    c4.8,4.4,7.1,10.3,7.1,17.9c0,7.3-2.3,13.3-6.8,17.8c-4.6,4.5-10.6,6.8-18,6.8c-7.3,0-13.2-2.3-17.8-6.8
                                    C276.5,466.9,274.2,460.9,274.2,453.4L274.2,453.4z M281.9,453.7c0,7.6,1.5,13.4,4.4,17.2c2.9,3.8,7.3,5.7,13.1,5.7
                                    c5.1,0,9.2-1.9,12.2-5.7c3-3.8,4.5-9.5,4.5-17.1c0-7.4-1.5-13-4.4-17c-2.9-3.9-7.2-5.9-12.8-5.9c-5.5,0-9.7,1.9-12.6,5.8
                                    C283.4,440.5,281.9,446.1,281.9,453.7L281.9,453.7z"/>
								<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="505.6872" y1="453.6426" x2="53.6872" y2="455.6426">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_6_)" d="M375.3,478.5l-32.7-44.4v32.8c0,2.7,0.1,4.5,0.4,5.4c0.3,0.9,1,1.6,2.2,2.4c1.2,0.7,3,1.1,5.4,1.1
                                    v1.7h-17v-1.7c2.2-0.2,3.9-0.6,5-1.2c1.1-0.7,1.8-1.4,2-2.1c0.2-0.8,0.3-2.6,0.3-5.4v-25c0-3.6-0.2-6-0.5-7.3
                                    c-0.3-1.2-0.8-2-1.6-2.4c-0.7-0.3-2.3-0.5-4.7-0.5v-1.7h13.4l27.2,37v-28.3c0-2.1-0.2-3.6-0.6-4.4c-0.4-0.8-1.3-1.5-2.5-2
                                    c-1.3-0.5-2.8-0.7-4.6-0.7v-1.7h16.4v1.7c-1.9,0.2-3.4,0.6-4.5,1.2c-1.1,0.6-1.8,1.3-2.1,2.2c-0.3,0.8-0.4,2.3-0.4,4.3v39.2H375.3
                                    L375.3,478.5z"/>
								<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="505.6846" y1="453.0493" x2="53.6846" y2="455.0493">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_7_)" d="M417.4,459.9H400l-1.2,3c-1.7,4.3-2.6,7.2-2.6,8.5c0,1.4,0.5,2.5,1.4,3.2c0.9,0.7,2.2,1.1,3.7,1.1
                                    v1.7h-13.8v-1.7c2-0.3,3.5-1.1,4.5-2.2c1-1.1,2.2-3.6,3.6-7.2c0.1-0.3,0.7-1.7,1.7-4.1l13.3-32.8h1.3l15.2,37.6l2.1,5
                                    c0.5,1.1,1.1,2,1.9,2.6c0.8,0.6,2,1,3.6,1.2v1.7h-18v-1.7c2.2,0,3.7-0.2,4.5-0.5c0.8-0.3,1.2-1,1.2-2c0-0.5-0.5-2-1.6-4.5
                                    L417.4,459.9L417.4,459.9z M416.7,458.3l-8-20.1l-8,20.1H416.7L416.7,458.3z"/>
								<linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="505.6866" y1="453.4962" x2="53.6866" y2="455.4962">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_8_)" d="M441.3,431.7v-1.7H462v1.7h-1c-2.2,0-3.7,0.2-4.3,0.6c-0.7,0.4-1.1,1.1-1.4,2.1
                                    c-0.2,1-0.3,3.5-0.3,7.4V465c0,3.7,0.1,6.1,0.3,7.3c0.2,1.2,0.6,2,1.3,2.6c0.7,0.6,2.1,0.8,4.1,0.8h1.3v1.7h-20.7v-1.7h1.3
                                    c1.9,0,3.2-0.3,4-0.8c0.7-0.5,1.2-1.3,1.4-2.4c0.2-1.1,0.3-3.6,0.3-7.5v-23.2c0-3.8-0.1-6.2-0.3-7.3c-0.2-1.1-0.6-1.8-1.3-2.3
                                    c-0.7-0.4-2.2-0.6-4.4-0.6H441.3L441.3,431.7z"/>
								<linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="505.6862" y1="453.4068" x2="53.6862" y2="455.4068">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_9_)" d="M519.1,477.4h-12.2c-2.2-1.6-5.5-5.8-9.9-12.4c-1.4-2.1-2.9-4.2-4.4-6.1c-1.5-2-2.6-3.2-3.2-3.6
                                    c-0.6-0.4-1.5-0.6-2.7-0.6h-1.8V465c0,3.7,0.1,6.1,0.3,7.3c0.2,1.2,0.6,2,1.4,2.6c0.7,0.6,2.1,0.8,4.2,0.8h2.2v1.7h-21.9v-1.7h1.5
                                    c2,0,3.3-0.3,4.1-0.8c0.8-0.5,1.2-1.3,1.4-2.4c0.2-1.1,0.3-3.6,0.3-7.5v-23.2c0-3.8-0.1-6.2-0.3-7.3c-0.2-1.1-0.7-1.8-1.4-2.3
                                    c-0.7-0.4-2.2-0.6-4.6-0.6h-0.8v-1.7l6.5-0.3c4.3-0.2,7.8-0.3,10.3-0.3c4.3,0,7.9,0.4,10.6,1.3c2.7,0.8,4.9,2.2,6.6,4.1
                                    c1.7,1.9,2.5,4.2,2.5,6.8c0,3.1-1.1,5.7-3.3,7.9c-2.2,2.2-5.4,3.5-9.6,4.1c2,0.9,5,4.3,9.2,10.3c3.4,4.8,6.1,7.9,8,9.4
                                    c2,1.5,4.3,2.3,6.9,2.4V477.4L519.1,477.4z M484.9,452.9c1.7,0,3.4-0.1,5.1-0.2c1.8-0.1,3.3-0.4,4.6-0.8c1.3-0.4,2.4-1,3.2-1.8
                                    c0.8-0.8,1.4-1.9,1.9-3.2c0.5-1.3,0.7-2.9,0.7-4.8c0-3.3-0.8-6-2.4-8c-1.6-2-5-3-10.3-3c-0.8,0-1.8,0-2.8,0.1V452.9L484.9,452.9z"
								/>
								<linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="505.6908" y1="454.4612" x2="53.6908" y2="456.4612">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_10_)" d="M564,463.8h1.6l-1,14.7l-37.8-1.1v-1.7h1c2.3,0,3.8-0.3,4.4-0.9c0.7-0.6,1.1-1.4,1.3-2.4
                                    c0.2-1,0.3-3.4,0.3-7.4v-23.2c0-3.6-0.1-6-0.3-7.1c-0.2-1.1-0.6-1.9-1.3-2.4c-0.7-0.4-2.1-0.7-4.3-0.7v-1.7h32.5l1.1,11.7h-1.6
                                    c-0.7-3.3-1.6-5.6-2.6-6.9c-1-1.4-2.3-2.2-3.7-2.6c-1.4-0.4-3.7-0.5-6.9-0.5h-6.3v19.8h4.8c2.2,0,3.7-0.2,4.6-0.6
                                    c0.9-0.4,1.5-1,1.7-1.8c0.3-0.8,0.4-2.4,0.4-4.7h1.6v16.2h-1.6c0-2.6-0.2-4.4-0.6-5.3c-0.4-0.9-1-1.5-1.9-1.7
                                    c-0.8-0.3-2.2-0.4-4.1-0.4h-5v11.2c0,5.6,0.3,8.9,1,9.9c0.7,1,2.6,1.5,5.6,1.5h3.4c2.4,0,4.4-0.3,5.9-0.9c1.6-0.6,3-1.9,4.4-3.9
                                    C562.1,469,563.2,467.3,564,463.8L564,463.8z"/>
								<linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="505.5389" y1="420.1194" x2="53.5389" y2="422.1194">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_11_)" d="M85.7,344.1c8.9,8,14.7,20,14.7,31c0.1,9-6.2,28.4-22.1,33.3c20.7,5.3,28.1,27.5,28.3,46.2
                                    c0.1,17.9-4.7,34-12.5,45.2l-16.5,0c8.2-9.2,13.6-23.9,13.5-41.2c-0.2-34.6-5.5-46.3-26.4-46.2l-10.6,0.2l-0.1-9.1l5.1-0.1
                                    c16.9-0.1,24.4-11.9,24.3-25.8c-0.1-14.1-4.8-29-16.2-33.5 M51.9,344.3c-11.6,4.3-18.8,18.1-19.1,33.1l-2.6,0c0,0,0-26.3,0-28.8
                                    c0.8-3.6,3.1-4.2,7.3-4.3"/>
							</g>
                        </svg>
                    </span>
                    <span class="small-logo">
                        <svg version="1.1" baseProfile="basic" id="small-logo"
							 x="0px" y="0px" viewBox="0 0 258.5 235.5"
							 xml:space="preserve">
                            <g>
								<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="263.0319" y1="118.6416" x2="-9.9681" y2="116.6416">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_1_)" d="M86.8,0.4c13.8,12.1,22.5,30.3,22.5,46.8c0,13.6-9.9,42.5-34.8,49.7c32.1,8.2,43.4,41.7,43.3,69.7
                                    c-0.1,26.9-7.8,50.9-20,67.7l-25.6-0.2c12.8-13.8,21.5-35.6,21.5-61.7c0.1-52-7.9-69.7-40.4-69.7l-16.5,0.1l-0.1-13.7l7.9,0
                                    c26.3,0,38-17.6,38.1-38.4c0-21.2-7.1-43.6-24.7-50.5 M34.3,0.2C16.2,6.6,4.7,27.2,4.1,49.7l-4.1,0c0,0,0.3-39.5,0.4-43.3
                                    C1.7,1,5.2,0,11.8,0"/>
								<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="263.0309" y1="118.7817" x2="-9.9691" y2="116.7817">
									<stop  offset="0" style="stop-color:#8C5E30"/>
									<stop  offset="1" style="stop-color:#CC9A51"/>
								</linearGradient>
								<path fill="url(#SVGID_2_)" d="M171.7,235c-13.8-12.1-22.5-30.3-22.5-46.8c0-13.6,9.9-42.5,34.8-49.7
                                    c-32.1-8.2-43.4-41.7-43.3-69.7c0.1-26.9,7.8-50.9,20-67.7l25.6,0.2c-12.8,13.8-21.5,35.6-21.5,61.7c-0.1,52,7.9,69.7,40.4,69.7
                                    l16.5-0.1l0.1,13.7l-7.9,0c-26.3,0-38,17.6-38.1,38.4c0,21.2,7.1,43.6,24.7,50.5 M224.2,235.2c18.1-6.3,29.5-26.9,30.2-49.5l4.1,0
                                    c0,0-0.3,39.5-0.4,43.3c-1.2,5.4-4.8,6.3-11.4,6.4"/>
							</g>
                        </svg>
                    </span>
				</a>
			</li>
			<li class="menu-item"><a href="#brand" class="menu-link">бренд</a></li>
			<li class="menu-item"><a href="#contacts" class="menu-link">контакты</a></li>
		</ul>
	</div>
	<div class="menu-icon"><div class="hamb"></div></div>
	<div class="social-links">
		<a href="https://www.instagram.com" class="gold-l"><span class="icon-insta"></span></a>
		<a href="https://www.facebook.com" class="gold-l"><span class="icon-facebook"></span></a>
	</div>
</div>
<div class="store-menu-wrap">
	<h2 class="main-h">Online-store</h2>
	<ul class="sm-ul">
		<li class="sm-li">
			<a href="" data-subtrigger="sale" class="store-i active">sale</a>
			<div data-submenu="sale" class="sub-menu">
				<ul>
                    <span class="rsm">
                        <li><a href="">шарфы</a></li>
                        <li><a href="">запонки</a></li>
                        <li><a href="">портмоне</a></li>
                    </span>
                    <span class="rsm">
                        <li><a href="">галстуки</a></li>
                        <li><a href="">очки</a></li>
                    </span>
				</ul>
			</div>
		</li>
		<li class="sm-li">
			<a href="" data-subtrigger="clothes" class="store-i">одежда</a>
			<div data-submenu="clothes" class="sub-menu">
				<ul>
                    <span class="rsm">
                        <li><a href="">верхняя одежда</a></li>
                        <li><a href="">пиджаки</a></li>
                        <li><a href="">сорочки</a></li>
                    </span>
                    <span class="rsm">
                        <li><a href="">джинсы</a></li>
                        <li><a href="">брюки</a></li>
                        <li><a href="">шорты</a></li>
                    </span>
                    <span class="rsm">
                        <li><a href="">трикотаж</a></li>
                        <li><a href="">футболки</a></li>
                        <li><a href="">спортивные костюмы</a></li>
                    </span>
				</ul>
			</div>
		</li>
		<li class="sm-li">
			<a href="" data-subtrigger="shoes" class="store-i">обувь</a>
			<div data-submenu="shoes" class="sub-menu">
				<ul>
                    <span class="rsm">
                        <li><a href="">слиперы</a></li>
                        <li><a href="">туфли</a></li>
                        <li><a href="">ботинки</a></li>
                    </span>
                    <span class="rsm">
                        <li><a href="">спортивная обувь</a></li>
                        <li><a href="">открытая обувь</a></li>
                    </span>
				</ul>
			</div>
		</li>
		<li class="sm-li">
			<a href="" data-subtrigger="bags" class="store-i">сумки</a>
			<div data-submenu="bags" class="sub-menu">
				<ul>
                    <span class="rsm">
                        <li><a href="">шарфы</a></li>
                        <li><a href="">запонки</a></li>
                        <li><a href="">портмоне</a></li>
                    </span>
                    <span class="rsm">
                        <li><a href="">галстуки</a></li>
                        <li><a href="">очки</a></li>
                    </span>
				</ul>
			</div>
		</li>
		<li class="sm-li">
			<a href="" data-subtrigger="accessories" class="store-i">аксесуары</a>
			<div data-submenu="accessories" class="sub-menu">
				<ul>
                    <span class="rsm">
                        <li><a href="">шарфы</a></li>
                        <li><a href="">запонки</a></li>
                        <li><a href="">портмоне</a></li>
                    </span>
                    <span class="rsm">
                        <li><a href="">галстуки</a></li>
                        <li><a href="">очки</a></li>
                    </span>
				</ul>
			</div>
		</li>
	</ul>
</div>

<div class="layout-content store-content">
	<div class="store-section">
		<div class="gallery-slider-b">
			<?php if ( have_posts() ) : ?>



				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>



			<?php endif; ?>
		</div>
	</div>
</div>
<?php if ( have_posts() ) : ?>



	<?php while ( have_posts() ) : the_post(); ?>
		<? global $product; ?>

		<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
		<?
			$p_vrtn = $product -> get_available_variations(); //массив вариация
			$p_attr = woocommerce_get_product_terms($product->id, 'pa_color', 'names'); //список цветов

			$p_arr = array(); //массив ( [цвет] => массив рамеров )
 			$p_col_arr = array(); // массив всех цветов EN
 			$p_col_lang = array(  
 				'red' => 'красный',
 				'green' => 'зеленый',
 				'black' => 'черный'
 				);

			foreach ( $p_attr as $color ) {
				$p_col_arr[] = strtolower($color);
			}

			foreach ( $p_vrtn as $el ) {
				$color = $el['attributes']['attribute_pa_color'];
				$size = $el['attributes']['attribute_pa_size'];
				$p_arr[$color][] = $size;
			}

			// var_dump(get_class_methods($product));
			// var_dump($p_col_arr);	
			// var_dump($p_arr);
		?>
		<style> 
			.color>span{
				color:red;
			}
			.color a{
				color: #b8b8b8;
			}
			.color a:hover,
			.color a:focus{
			    color: #c6a261;
			}
		</style>
		<script> //Ajax 
			$('.color-btn').on("click", function(e){
            	e.preventDefault();
            	
            	var id = <?=$product->id?>;
            	var path = 'path/p_ajax.php';
        		var color = e.attr( "data-color");


		        $.get( path, 
	        		{prod_id : id, color : color}, 
	        		function (data) {
	            		$('div.size').append(data);
        			}
	        	);
			});
		</script>
		<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

		<div class="modal store-modal fade" tabindex="-1" id="store-m1" role="dialog" aria-labelledby="store-m1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="icon-krest"></div>
					<div class="row">
						<div class="col-sm-5">
							<img src="images/store1.jpg" alt="store1">
						</div>
						<div class="col-sm-1"></div>
						<div class="col-sm-6">
							<div class="modal-store-text">
								<div class="title"><? echo $product -> get_title() ?></div>
								<div class="collection">ss16</div>
								<div class="product-description">
									<div class="size">
										Размеры: 
										<span>
										<?
											$i = 0;
											$len = count($p_arr[$p_col_arr[0]]);
											foreach($p_arr[$p_col_arr[0]] as $var){ //выведем размеры первого обьекта(цвета)
												echo $var;
												if( $i < $len-1 ){ echo ','; }
												$i++;
											}
										?>		
										</span>
									</div>
									<div class="composition">Cостав: <span>100% хлопок</span></div>
									<div class="color">
										Цвет: 
										<?
											$i2 = 0;
											$len2 = count($p_col_arr);
											foreach($p_col_arr as $color):
										?>
										<span>
										<?
												if($i2 == 0){ //выведем первый обьект(цвет) как уже выбраный
													echo $p_col_lang[$color];
												}else{ //а остальные цвета выводим обвернутыми тегом <a>
										?>
										
													<a class='color-btn' href='#' data-color='<?=$color?>'>
														<?=$p_col_lang[$color]?>
													</a>

											<? } if ($i2 < $len2-1){ echo ','; } ?> 
										</span>
										<?
											$i2++;
											endforeach;
										?>
									</div>
									<div class="product-id">ID: <span>62118</span></div>
								</div>
								<div class="buy-block">
									<div class="price">10 000 грн</div>
									<div class="btn btn-store btn-buy">купить</div>
								</div>
								<div class="look-b">
									<div class="look-title">Дополнят лук:</div>
									<a href="" class="look-i">
										<img src="images/store1.jpg" alt="">
									</a>
									<a href="" class="look-i">
										<img src="images/store2.jpg" alt="">
									</a>
									<a href="" class="look-i">
										<img src="images/store3.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>



<?php endif; ?>


<?php get_footer(); ?>


