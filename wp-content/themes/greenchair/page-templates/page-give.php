<?php
/*
Template Name: Give Page
 */
get_header(); ?>

<div id="main-content" class="give-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $backgroundimage = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>   
	<div class="jumbotron" style="background-image: url(<?php echo $backgroundimage ?>);">
		<div class="container ">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 py-5">
					<div class="content-container d-flex flex-column justify-content-center align-items-center">
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 ">
					<div class="inner-band d-flex flex-column justify-content-center align-items-center">
						<h2><?php the_field('green_bar_heading'); ?></h2>
						<p><?php the_field('green_bar_subhead'); ?></p>
						<a class="btn btn-white" href="<?php the_field('green_bar_cta_url'); ?>"><?php the_field('green_bar_cta_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container give-stat-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 pt-5">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 stat-container">
								<h2><?php the_field('stat_1_dollar_amount'); ?></h2>
								<svg id="Kitchen_Essentials" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.1 71.56"><defs><style>.cls-1,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6{fill:#fff;stroke:#8ec242;stroke-miterlimit:10;}.cls-2{stroke-width:0.5px;}.cls-3{stroke-width:0.97px;}.cls-4{stroke-width:1.04px;}.cls-5{stroke-width:0.87px;}.cls-6{stroke-width:0.9px;}</style></defs><title>8675_Donate_Icon_$25_KitchenEssentials</title><g id="Pot"><ellipse id="UpperLiP" class="cls-1" cx="66.81" cy="4.68" rx="20.66" ry="4.18"/><path id="BottomPot" class="cls-1" d="M6404.24,6994.84V7018a1.88,1.88,0,0,0,1.88,1.88h37.56a1.89,1.89,0,0,0,1.88-1.88v-23.11" transform="translate(-6358.09 -6990.06)"/><path id="HandleRight" class="cls-1" d="M87.47,8.55h2.08a2.08,2.08,0,0,1,2.08,2.08v0a2.08,2.08,0,0,1-2.08,2.08H87.47a0,0,0,0,1,0,0V8.55A0,0,0,0,1,87.47,8.55Z"/><path id="HandleLeft" class="cls-1" d="M6400.08,6998.62h2.08a2.08,2.08,0,0,1,2.08,2.08v0a2.08,2.08,0,0,1-2.08,2.08h-2.08a0,0,0,0,1,0,0v-4.16A0,0,0,0,1,6400.08,6998.62Z" transform="translate(6446.23 7011.33) rotate(180)"/><path id="Dip" class="cls-1" d="M6445.56,6994.84c0,2.31-9.36,4.18-20.66,4.18s-20.66-1.87-20.66-4.18" transform="translate(-6358.09 -6990.06)"/></g><g id="Spatula"><path id="Handle" class="cls-1" d="M6418,7048.51l-3-2.42,7.94-9.71a1.54,1.54,0,0,1,2.17-.22l.28.24.29.23a1.54,1.54,0,0,1,.22,2.17Z" transform="translate(-6358.09 -6990.06)"/><line id="Stem" class="cls-1" x1="78.65" y1="32.45" x2="67.19" y2="46.46"/><path id="Spatula-2" data-name="Spatula" class="cls-1" d="M6437.1,7009H6446a2.56,2.56,0,0,1,2.56,2.56v7a5.69,5.69,0,0,1-5.69,5.69h-2.64a5.69,5.69,0,0,1-5.69-5.69v-7a2.56,2.56,0,0,1,2.56-2.56Z" transform="translate(-462.25 -9482.85) rotate(39.27)"/><rect id="Left" class="cls-2" x="6437.88" y="7009.48" width="2.31" height="9.24" rx="1.16" transform="translate(-464.42 -9481.82) rotate(39.27)"/><rect id="Middle" class="cls-2" x="6440.62" y="7011.72" width="2.31" height="9.24" rx="1.16" transform="translate(-462.38 -9483.05) rotate(39.27)"/><rect id="Right" class="cls-2" x="6443.43" y="7014.02" width="2.31" height="9.24" rx="1.16" transform="translate(-460.3 -9484.31) rotate(39.27)"/></g><g id="Spoon"><ellipse id="Spoon-2" data-name="Spoon" class="cls-1" cx="6454.88" cy="7024.99" rx="8.83" ry="7.08" transform="translate(-9419.28 713.39) rotate(-51.5)"/><path id="Handle-2" data-name="Handle" class="cls-1" d="M6430.74,7058.37l-3-2.4,7.84-9.78a1.55,1.55,0,0,1,2.17-.24l.29.23.28.23a1.53,1.53,0,0,1,.24,2.17Z" transform="translate(-6358.09 -6990.06)"/><line id="Stem-2" data-name="Stem" class="cls-1" x1="91.36" y1="41.97" x2="80.03" y2="56.09"/><rect id="Left-2" data-name="Left" class="cls-2" x="6451.32" y="7018.18" width="2.03" height="9.46" rx="1.01" transform="translate(-548.05 -9482.48) rotate(38.71)"/><rect id="Middle-2" data-name="Middle" class="cls-2" x="6453.75" y="7020.13" width="2.03" height="9.46" rx="1.01" transform="translate(-546.31 -9483.57) rotate(38.71)"/><rect id="Right-2" data-name="Right" class="cls-2" x="6456.24" y="7022.12" width="2.03" height="9.46" rx="1.01" transform="translate(-544.51 -9484.68) rotate(38.71)"/></g><g id="CanOpener"><circle class="cls-3" cx="28.37" cy="43.19" r="27.89"/><circle class="cls-4" cx="28.37" cy="43.19" r="20.69"/></g><g id="Fork"><path class="cls-5" d="M6381,7045.31v-15.43a.87.87,0,0,0-.89-.86c-1.27,0-2-1-1.78-7.5" transform="translate(-6358.09 -6990.06)"/><line class="cls-5" x1="22.9" y1="31.46" x2="22.9" y2="38.15"/><path class="cls-5" d="M6383.67,7021.52c0,1.49.6,8-1.9,8" transform="translate(-6358.09 -6990.06)"/></g><g id="Spoon-3" data-name="Spoon"><line class="cls-5" x1="33.31" y1="38.98" x2="33.31" y2="55.25"/><ellipse class="cls-6" cx="33.31" cy="35.49" rx="3.21" ry="4.36"/></g></svg>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 gift-description">
								<p><?php the_field('stat_1_text'); ?>.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 stat-container">
								<h2><?php the_field('stat_2_dollar_amount'); ?></h2>
								<svg id="Kitchen_Table_Chairs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 598.34 311.18"><defs><style>.cls-1{fill:none;stroke:#8ec242;stroke-miterlimit:10;stroke-width:4px;}</style></defs><title>8675_Donate_Icon_$50_TableChairs</title><g id="Dining_Chair_02"><path id="RightLeg" class="cls-1" d="M7067.66,7239.36l18.26,105.56a9.69,9.69,0,0,1-19.09,3.31L7048,7239.36Z" transform="translate(-6898.63 -7047.08)"/><path id="LeftLeg" class="cls-1" d="M6923.09,7344.92l18.26-105.56H6961l-18.84,108.87a9.69,9.69,0,0,1-19.09-3.31Z" transform="translate(-6898.63 -7047.08)"/><rect id="Seat" class="cls-1" x="6927.64" y="7225.94" width="174.69" height="13.43" transform="translate(7131.34 7418.22) rotate(-180)"/><polygon id="Back" class="cls-1" points="2.33 3.22 29 178.23 44.43 178.23 17.82 3.22 2.33 3.22"/><polygon id="Midbase" class="cls-1" points="53.09 245.99 158.65 245.99 156.33 232.57 55.41 232.57 53.09 245.99"/><path id="Cushion" class="cls-1" d="M6949.56,7223.94h128.93a7.6,7.6,0,0,0,7.58-7.58h0a7.6,7.6,0,0,0-7.58-7.58l-131.13-.64a3.93,3.93,0,0,0-3.93,4.3c.1.94.16,1.5.57,4.11l.54,4.3C6944.78,7221.75,6945.39,7223.94,6949.56,7223.94Z" transform="translate(-6898.63 -7047.08)"/></g><g id="Dining_Chair_01"><path id="LeftLeg-2" data-name="LeftLeg" class="cls-1" d="M7328,7238.14l-18.26,105.56a9.69,9.69,0,0,0,19.09,3.31l18.84-108.87Z" transform="translate(-6898.63 -7047.08)"/><path id="RightLeg-2" data-name="RightLeg" class="cls-1" d="M7472.52,7343.7l-18.26-105.56h-19.67L7453.43,7347a9.69,9.69,0,0,0,19.09-3.31Z" transform="translate(-6898.63 -7047.08)"/><rect id="Seat-2" data-name="Seat" class="cls-1" x="394.64" y="177.64" width="174.69" height="13.43"/><polygon id="Back-2" data-name="Back" class="cls-1" points="596.01 2 569.34 177.01 553.91 177.01 580.52 2 596.01 2"/><polygon id="MidBase-2" data-name="MidBase" class="cls-1" points="545.25 244.77 439.69 244.77 442.01 231.35 542.93 231.35 545.25 244.77"/><path id="Cushion-2" data-name="Cushion" class="cls-1" d="M7446.05,7222.72H7317.12a7.6,7.6,0,0,1-7.58-7.58h0a7.6,7.6,0,0,1,7.58-7.58l131.13-.64a3.91,3.91,0,0,1,3.92,4.3c-.09.94-.15,1.5-.56,4.11l-.54,4.3C7450.83,7220.53,7450.22,7222.72,7446.05,7222.72Z" transform="translate(-6898.63 -7047.08)"/></g><g id="Dining_Table"><path id="LeftLeg-3" data-name="LeftLeg" class="cls-1" d="M7189.66,7289.94h-16.8a23.09,23.09,0,0,0-21.54,14.74l-7.93,20.4a17.47,17.47,0,0,1-16.29,11.14h0a10.69,10.69,0,0,0-10.68,10.69v5h37.46s-.84-13.66,18.73-14.41c9.36-.36,13.77-13.66,15.77-21a36.88,36.88,0,0,0,1.28-9.64h0Z" transform="translate(-6898.63 -7047.08)"/><path id="RightLeg-3" data-name="RightLeg" class="cls-1" d="M7208,7289.94h16.79a23.12,23.12,0,0,1,21.55,14.74l7.92,20.4a17.47,17.47,0,0,0,16.29,11.14h0a10.7,10.7,0,0,1,10.69,10.69v5h-37.47s.85-13.66-18.73-14.41c-9.35-.36-13.77-13.66-15.77-21a36.87,36.87,0,0,1-1.27-9.64h0Z" transform="translate(-6898.63 -7047.08)"/><path id="Bottombase" class="cls-1" d="M7189.66,7289.94v21c3,.18,6,0,9.15,0s5.13.08,9.16,0v-21Z" transform="translate(-6898.63 -7047.08)"/><path id="Pole" class="cls-1" d="M7208,7289.94V7182.52c-3,.14-6,.21-9.16.21s-6.17-.07-9.15-.21v107.42Z" transform="translate(-6898.63 -7047.08)"/><path id="TopBase" class="cls-1" d="M7246.94,7157.47h-96.25c-4.47,2.48-7,5.35-7,8.41,0,9.51,24.69,17.22,55.15,17.22s55.16-7.71,55.16-17.22C7254,7162.82,7251.41,7160,7246.94,7157.47Z" transform="translate(-6898.63 -7047.08)"/><rect id="BottomTable" class="cls-1" x="116.1" y="96.62" width="367.39" height="13.43"/><rect id="TopTable" class="cls-1" x="88.03" y="69.77" width="422.31" height="26.85" rx="12"/></g></svg>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 gift-description">
								<p><?php the_field('stat_2_text'); ?>.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 stat-container">
								<h2><?php the_field('stat_3_dollar_amount'); ?></h2>
								<svg id="Family_Room_Seating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 658.67 295.06"><defs><style>.cls-1{fill:none;stroke:#8ec242;stroke-miterlimit:10;stroke-width:4px;}</style></defs><title>8675_Donate_Icon_$100_FamilySeating</title><path id="LeftArm" class="cls-1" d="M14,88.61H58a12,12,0,0,1,12,12V272.17a0,0,0,0,1,0,0H14a12,12,0,0,1-12-12V100.61a12,12,0,0,1,12-12Z"/><path id="RightArm" class="cls-1" d="M600.67,88.61h44a12,12,0,0,1,12,12V260.17a12,12,0,0,1-12,12h-56a0,0,0,0,1,0,0V100.61A12,12,0,0,1,600.67,88.61Z"/><rect id="Base" class="cls-1" x="70" y="209.06" width="518.67" height="63.11"/><rect class="cls-1" x="61.33" y="272.17" width="17.33" height="20.89"/><rect class="cls-1" x="580" y="272.17" width="17.33" height="20.89"/><path id="LeftCushion" class="cls-1" d="M7091.69,7063.4h0a225.91,225.91,0,0,0-129.16,0h0a30.61,30.61,0,0,0-21.86,29.34V7217h.81c2.45-3.53,10.36-6.44,21.05-7.51h0a662,662,0,0,1,129.16,0h0c10.69,1.07,21.87,3.67,21.87,7.51h0V7092.74A30.62,30.62,0,0,0,7091.69,7063.4Z" transform="translate(-6870.67 -7051.97)"/><path id="MiddleCushion" class="cls-1" d="M7264.58,7063.4h0a225.91,225.91,0,0,0-129.16,0h0a30.61,30.61,0,0,0-21.86,29.34V7217h0c0-4.17,11.17-6.44,21.86-7.51h0a662,662,0,0,1,129.16,0h0c10.69,1.07,21.86,3.47,21.86,7.51h0V7092.74A30.61,30.61,0,0,0,7264.58,7063.4Z" transform="translate(-6870.67 -7051.97)"/><path id="RightCushion" class="cls-1" d="M7437.47,7063.4h0a225.91,225.91,0,0,0-129.16,0h0a30.62,30.62,0,0,0-21.87,29.34V7217h0c0-4.25,11.18-6.44,21.87-7.51h0a662,662,0,0,1,129.16,0h0c10.69,1.07,18.6,4,21.05,7.51h.81V7092.74A30.61,30.61,0,0,0,7437.47,7063.4Z" transform="translate(-6870.67 -7051.97)"/><line id="Divide01" class="cls-1" x1="242.89" y1="154.39" x2="242.89" y2="209.06"/><line id="Divide_02" class="cls-1" x1="415.78" y1="154.39" x2="415.78" y2="209.06"/></svg>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 gift-description">
								<p><?php the_field('stat_3_text'); ?>.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 stat-container">
								<h2><?php the_field('stat_4_dollar_amount'); ?></h2>
								<svg id="New_Twin_BedSet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576.99 336.38"><defs><style>.cls-1{fill:none;stroke:#8ec242;stroke-miterlimit:10;stroke-width:4px;}</style></defs><title>8675_Donate_Icon_$250_TwinBed</title><rect id="Mattress" class="cls-1" x="41.96" y="167.25" width="494.61" height="91.85"/><rect id="Base" class="cls-1" x="41.96" y="259.09" width="494.61" height="19.57"/><path id="Blanket" class="cls-1" d="M6950.7,7237.33l93.21-19.24a214.17,214.17,0,0,1,97.54,2.57l6.11,1.6a214.26,214.26,0,0,0,114.7-1.73h0a214.18,214.18,0,0,1,116.5-1.24l66.54,18" transform="translate(-6910.74 -7003.83)"/><path id="Pillow" class="cls-1" d="M7437.91,7085.26h-13c-10.22,0-19.64,7.2-24.59,18.79l-11.94,49.4c-2.11,8.74,2.93,17.63,10,17.63h48.89v-73.65C7447.3,7090.71,7443.1,7085.26,7437.91,7085.26Z" transform="translate(-6910.74 -7003.83)"/><g id="Pillar_02"><circle class="cls-1" cx="23.51" cy="78.47" r="21.51"/><rect class="cls-1" x="3.53" y="99.98" width="39.96" height="11.93" rx="5.97"/><rect id="Pillar_02-2" data-name="Pillar_02" class="cls-1" x="5.07" y="112.29" width="36.89" height="222.08"/></g><g id="Pillar_01"><rect class="cls-1" x="535.03" y="45.03" width="39.96" height="11.93" rx="5.97"/><circle class="cls-1" cx="554.24" cy="22.75" r="20.75"/><rect id="Pillar_01-2" data-name="Pillar_01" class="cls-1" x="536.57" y="56.96" width="36.89" height="277.42"/></g></svg>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 gift-description">
								<p><?php the_field('stat_4_text'); ?>.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 stat-container">
								<h2><?php the_field('stat_5_dollar_amount'); ?></h2>
								<svg id="_2New_Twin_BedSets" data-name="2New_Twin_BedSets" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 666.12 442.11"><defs><style>.cls-1{fill:none;stroke:#8ec242;stroke-miterlimit:10;stroke-width:4px;}</style></defs><title>8675_Donate_Icon_$500_TwoTwinBeds</title><g id="Twin_01"><rect id="Mattress" class="cls-1" x="30.8" y="121.11" width="356.5" height="66.2"/><rect id="Base" class="cls-1" x="30.8" y="187.31" width="356.5" height="14.11"/><path id="Blanket" class="cls-1" d="M6895.8,7142.13l67.19-13.86a154.34,154.34,0,0,1,70.3,1.85l4.41,1.15a154.41,154.41,0,0,0,82.67-1.24h0a154.45,154.45,0,0,1,84-.9l48,13" transform="translate(-6866.44 -6973.28)"/><path id="Pillow" class="cls-1" d="M7247,7032.52h-9.34c-7.37,0-14.16,5.19-17.73,13.55l-8.6,35.61c-1.52,6.3,2.11,12.7,7.21,12.7h35.23V7041.3C7253.74,7036.45,7250.71,7032.52,7247,7032.52Z" transform="translate(-6866.44 -6973.28)"/><circle class="cls-1" cx="17.51" cy="57.12" r="15.51"/><rect class="cls-1" x="3.11" y="72.63" width="28.8" height="8.6" rx="4.3"/><rect id="Pillar_02" class="cls-1" x="4.21" y="81.5" width="26.59" height="160.07"/><rect class="cls-1" x="386.2" y="33.01" width="28.8" height="8.6" rx="4.3"/><circle class="cls-1" cx="400.05" cy="16.95" r="14.95"/><rect id="Pillar_01" class="cls-1" x="387.3" y="41.61" width="26.59" height="199.96"/></g><g id="Twin_02"><rect id="Mattress-2" data-name="Mattress" class="cls-1" x="279.92" y="319.65" width="356.5" height="66.2"/><rect id="Base-2" data-name="Base" class="cls-1" x="279.92" y="385.85" width="356.5" height="14.11"/><path id="Blanket-2" data-name="Blanket" class="cls-1" d="M7144.92,7340.67l67.19-13.86a154.47,154.47,0,0,1,70.3,1.84l4.41,1.16a154.41,154.41,0,0,0,82.67-1.24h0a154.45,154.45,0,0,1,84-.9l48,13" transform="translate(-6866.44 -6973.28)"/><path id="Pillow-2" data-name="Pillow" class="cls-1" d="M7496.09,7231.06h-9.34c-7.37,0-14.16,5.19-17.73,13.55l-8.6,35.61c-1.52,6.3,2.11,12.7,7.21,12.7h35.24v-53.09C7502.87,7235,7499.83,7231.06,7496.09,7231.06Z" transform="translate(-6866.44 -6973.28)"/><circle class="cls-1" cx="266.63" cy="255.66" r="15.51"/><rect class="cls-1" x="252.23" y="271.16" width="28.8" height="8.6" rx="4.3"/><rect id="Pillar_02-2" data-name="Pillar_02" class="cls-1" x="253.33" y="280.03" width="26.59" height="160.07"/><rect class="cls-1" x="635.32" y="231.55" width="28.8" height="8.6" rx="4.3"/><circle class="cls-1" cx="649.17" cy="215.49" r="14.95"/><rect id="Pillar_01-2" data-name="Pillar_01" class="cls-1" x="636.43" y="240.15" width="26.59" height="199.96"/></g></svg>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 gift-description">
								<p><?php the_field('stat_5_text'); ?>.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 stat-container">
								<h2><?php the_field('stat_6_dollar_amount'); ?></h2>
								<svg id="Complete_Furnishing" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 684.64 466.57"><defs><style>.cls-1{fill:#fff;stroke:#8ec242;stroke-miterlimit:10;stroke-width:4px;}</style></defs><title>8675_Donate_Icon_$1150_CompleteFurnishing</title><g id="Chair"><g id="White_Backing"><rect class="cls-1" x="408.08" y="127.21" width="240.61" height="105"/></g><path id="LeftArm" class="cls-1" d="M386.14,88.47H430a12,12,0,0,1,12,12V271.73a0,0,0,0,1,0,0H386.14a12,12,0,0,1-12-12V100.47A12,12,0,0,1,386.14,88.47Z"/><path id="RightArm" class="cls-1" d="M626.75,88.47h43.89a12,12,0,0,1,12,12V259.73a12,12,0,0,1-12,12H614.75a0,0,0,0,1,0,0V100.47A12,12,0,0,1,626.75,88.47Z"/><rect id="Base" class="cls-1" x="442.03" y="208.72" width="172.61" height="63.01"/><rect id="Leftleg" class="cls-1" x="433.37" y="271.73" width="17.31" height="20.86"/><rect id="Rightleg" class="cls-1" x="605.98" y="271.73" width="17.31" height="20.86"/><path id="Cushion" class="cls-1" d="M7448,6978.7h0a225.53,225.53,0,0,0-128.95,0h0a30.56,30.56,0,0,0-21.83,29.29v124.09h.81c2.45-3.52,10.35-6.42,21-7.49h0a659.86,659.86,0,0,1,128.95,0h0c10.68,1.07,21.83,3.67,21.83,7.49h0V7008A30.56,30.56,0,0,0,7448,6978.7Z" transform="translate(-6855.2 -6967.29)"/></g><g id="Dresser"><rect id="Dresser-2" data-name="Dresser" class="cls-1" x="223.5" y="132.16" width="264.68" height="212.97"/><rect id="BottomDrawer" class="cls-1" x="237.44" y="215.81" width="236.81" height="97.63"/><rect id="LeftDrawer" class="cls-1" x="237.44" y="152.52" width="113.32" height="53.56"/><rect id="Right_Drawer" class="cls-1" x="360.92" y="152.52" width="113.32" height="53.56"/><rect id="MidHandle" class="cls-1" x="330.61" y="262.02" width="50.02" height="5.2" rx="2.6"/><rect id="LeftHandle" class="cls-1" x="268.87" y="176.69" width="50.02" height="5.2" rx="2.6"/><rect id="RightHandle" class="cls-1" x="392.35" y="176.69" width="50.02" height="5.2" rx="2.6"/><rect id="LeftLeg-2" data-name="LeftLeg" class="cls-1" x="237.44" y="345.13" width="20.14" height="28.25"/><rect id="RightLeg-2" data-name="RightLeg" class="cls-1" x="454.1" y="345.13" width="20.14" height="28.25"/></g><g id="Dining_Table"><path id="LeftLeg-3" data-name="LeftLeg" class="cls-1" d="M7045,7374.55h-15.54a21.38,21.38,0,0,0-19.94,13.64l-7.33,18.87a16.17,16.17,0,0,1-15.07,10.32h0a9.89,9.89,0,0,0-9.89,9.89v4.59h34.66s-.78-12.63,17.34-13.33c8.65-.33,12.74-12.63,14.59-19.46a34,34,0,0,0,1.18-8.92h0Z" transform="translate(-6855.2 -6967.29)"/><path id="RightLeg-3" data-name="RightLeg" class="cls-1" d="M7062,7374.55h15.55a21.37,21.37,0,0,1,19.93,13.64l7.33,18.87a16.19,16.19,0,0,0,15.08,10.32h0a9.88,9.88,0,0,1,9.88,9.89v4.59h-34.66s.78-12.63-17.34-13.33c-8.65-.33-12.73-12.63-14.59-19.46a34.46,34.46,0,0,1-1.18-8.92h0Z" transform="translate(-6855.2 -6967.29)"/><path id="BottomBase" class="cls-1" d="M7045,7374.55v19.77c2.92.06,5.57-.07,8.47-.07s4.22.09,8.47,0v-19.7Z" transform="translate(-6855.2 -6967.29)"/><path id="Pole" class="cls-1" d="M7062,7374.55v-99.4c-2.75.13-5.58.2-8.47.2s-5.71-.07-8.47-.2v99.4Z" transform="translate(-6855.2 -6967.29)"/><path id="TopBase" class="cls-1" d="M7098,7252H7009c-4.14,2.3-6.5,4.95-6.5,7.78,0,8.8,22.85,15.94,51,15.94s51-7.14,51-15.94C7104.54,7256.92,7102.17,7254.27,7098,7252Z" transform="translate(-6855.2 -6967.29)"/><rect id="BottomTable" class="cls-1" x="27.98" y="271.94" width="339.95" height="12.42"/><rect id="TopTable" class="cls-1" x="2" y="247.1" width="390.78" height="24.85" rx="12"/></g></svg>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 gift-description">
								<p><?php the_field('stat_6_text'); ?>.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="mt-5">
							<?php the_field('donate_form_copy'); ?>
						</div>
						<?php the_field('donation_form_code'); ?>
						
						<div class="mt-5">
							<?php the_field('donate_text_beneath_form'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>

</div><!-- #main-content -->
<?php get_footer();
