<?php
/*
Template Name: Donate Page
 */
get_header(); ?>

<div id="main-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="donate-intro-banner">
            <div class="text-center intro-main">Furnishing Lives With Hope and Dignity</div>
            <div class="rule"></div>
            <div class="text-center intro-sub">Your donations help provide the essentials of home for more than<br /> 500 families each year</div>
          </div>
          <div class="donate-selection-wrap">
            <div class="donate-icon-wrapper">
              <div class="donate-icon-container text-center">
                <div class="icon">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" height="140px" width="140px" xml:space="preserve">
                  <g>
                  	<g>
                  		<path d="M116,451.984h-6.833V174c0-5.522-4.478-10-10-10c-5.522,0-10,4.478-10,10v277.984H80c-27.57,0-50,22.43-50,50
                  			c0,5.522,4.478,10,10,10h116c5.522,0,10-4.478,10-10C166,474.414,143.57,451.984,116,451.984z M51.714,491.984
                  			c4.127-11.641,15.249-20,28.286-20h36c13.037,0,24.159,8.359,28.286,20H51.714z" fill="#16a79e"/>
                  	</g>
                  </g>
                  <g>
                  	<g>
                  		<path d="M197.666,129.455l-47.333-123c-1.486-3.86-5.196-6.408-9.333-6.408H57.333c-4.137,0-7.847,2.548-9.333,6.408l-47.333,123
                  			c-1.184,3.075-0.775,6.536,1.09,9.253c1.864,2.716,4.948,4.339,8.243,4.339h25v44.804c0,5.522,4.478,10,10,10s10-4.478,10-10
                  			v-44.804h133.333c3.295,0,6.379-1.623,8.243-4.339C198.441,135.991,198.849,132.53,197.666,129.455z M24.564,123.047l39.635-103
                  			h69.935l39.636,103H24.564z" fill="#16a79e"/>
                  	</g>
                  </g>
                  <g>
                  	<g>
                  		<path d="M475.496,286.398v-11.173c0-25.81-20.998-46.808-46.809-46.808H361c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10
                  			h67.688c14.782,0,26.809,12.025,26.809,26.808v11.173c-19.853,4.369-34.982,21.454-36.386,42.251
                  			c-2.909-0.977-6.019-1.515-9.253-1.515H232.143c-3.234,0-6.344,0.538-9.253,1.515c-1.403-20.797-16.533-37.882-36.386-42.251
                  			v-11.173c0-14.782,12.026-26.808,26.809-26.808H279c5.522,0,10-4.478,10-10c0-5.522-4.478-10-10-10h-65.688
                  			c-25.811,0-46.809,20.998-46.809,46.808v11.173c-20.851,4.589-36.504,23.2-36.504,45.409v106.166c0,5.522,4.478,10,10,10h362
                  			c5.522,0,10-4.478,10-10V331.808C512,309.598,496.347,290.987,475.496,286.398z M203.009,356.269v20.865v50.84H150v-96.166
                  			c0-14.614,11.89-26.504,26.504-26.504c14.615,0,26.505,11.89,26.505,26.504V356.269z M418.991,427.974H223.009v-40.84h195.982
                  			V427.974z M418.992,367.134H223.009v-10.865c0-5.037,4.098-9.135,9.134-9.135h177.715c5.036,0,9.134,4.098,9.134,9.135V367.134z
                  			 M492,427.974h-53.009v-50.84v-20.865v-24.461c0-14.614,11.89-26.504,26.505-26.504c14.614,0,26.504,11.89,26.504,26.504V427.974z
                  			" fill="#8cc342"/>
                  	</g>
                  </g>
                  <g>
                  	<g>
                  		<path d="M328.069,231.35c-1.859-1.87-4.439-2.93-7.069-2.93s-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.431-2.93,7.07
                  			c0,2.63,1.069,5.21,2.93,7.07c1.86,1.859,4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07
                  			C331,235.78,329.93,233.21,328.069,231.35z" fill="#8cc342"/>
                  	</g>
                  </g>
                  <g>
                  	<g>
                  		<path d="M482,0.016H276c-16.542,0-30,13.458-30,30v106c0,16.542,13.458,30,30,30h206c16.542,0,30-13.458,30-30v-106
                  			C512,13.474,498.542,0.016,482,0.016z M492,136.016c0,5.513-4.486,10-10,10h-66.013c-0.279-0.371-0.578-0.733-0.916-1.071
                  			l-86.75-86.75c-3.906-3.904-10.236-3.904-14.143,0l-28.992,28.992c-3.905,3.905-3.905,10.237,0,14.143
                  			c3.906,3.904,10.236,3.904,14.143,0l21.921-21.921l66.607,66.607H276c-5.514,0-10-4.486-10-10v-106c0-5.514,4.486-10,10-10h206
                  			c5.514,0,10,4.486,10,10v51.857l-40.429-40.429c-3.906-3.904-10.236-3.904-14.143,0L400.56,78.312
                  			c-3.905,3.905-3.905,10.237,0,14.143c3.906,3.904,10.236,3.904,14.143,0L444.5,62.658l45.429,45.429
                  			c0.632,0.632,1.333,1.151,2.071,1.578V136.016z" fill="#16a79e"/>
                  	</g>
                  </g>

                  </svg>
                  <div class="icon-shade icon-shade-donate">Donate gently used<br /> houseware and furnishings</div>
                </div>
                <div>Your furnishings provide others<br />warmth and the comforts of home</div>
                <button type="button" class="btn donate-btn">Donate</button>
              </div>
              <div class="donate-icon-container text-center">
                <div class="icon">
                  <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" height="110px" width="110px" xml:space="preserve">
                  <g>
                  	<path d="M175.646,94.483c-10.696,0-20.353,4.561-27.145,11.849c-6.792-7.288-16.449-11.849-27.147-11.849
                  		c-20.515,0-37.205,16.77-37.205,37.383c0,33.754,53.222,65.746,59.29,69.283c1.564,0.912,3.313,1.367,5.063,1.367
                  		s3.498-0.455,5.064-1.367c6.067-3.538,59.283-35.53,59.283-69.283C212.85,111.253,196.16,94.483,175.646,94.483z M148.516,180.672
                  		c-17.097-10.996-44.257-32.973-44.257-48.806c0-9.525,7.67-17.275,17.097-17.275c9.426,0,17.094,7.75,17.094,17.275
                  		c0,5.552,4.501,10.054,10.054,10.054c5.552,0,10.054-4.502,10.054-10.054c0-9.525,7.666-17.275,17.09-17.275
                  		c9.426,0,17.095,7.75,17.095,17.275C192.741,147.266,167.424,168.619,148.516,180.672z" fill="#8cc342"/>
                  	<path d="M286.946,63.392H10.054C4.502,63.392,0,67.893,0,73.445v150.11c0,5.552,4.502,10.053,10.054,10.053h276.893
                  		c5.552,0,10.054-4.501,10.054-10.053V73.445C297,67.893,292.498,63.392,286.946,63.392z M67.11,213.501l-47.003-49.747v-30.508
                  		L67.11,83.499H229.89l47.003,49.747v30.508l-47.003,49.747H67.11z M276.893,103.967l-19.34-20.468h19.34V103.967z M39.447,83.499
                  		l-19.34,20.468V83.499H39.447z M20.107,193.033l19.34,20.468h-19.34V193.033z M257.553,213.501l19.34-20.468v20.468H257.553z" fill="#16a79e"/>
                  </g>
                  </svg>
                  <div class="icon-shade icon-shade-fund"><span>Fund our vision<br /> of hope and<br /> community</span></div>
                </div>
                <div>You make our programs possible<br /> & your support provides hope to others</div>
                <button type="button" class="btn donate-btn">Fund</button>
              </div>
              <div class="donate-icon-container text-center">
                <div class="icon">
                  <svg version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 viewBox="0 0 416 416" style="enable-background:new 0 0 416 416;" height="120px" width="120px" xml:space="preserve">
                  <g>
                  	<g>
                  		<path d="M297.776,47.561C276.72,27.721,240.64,23.193,208,55.833c-32.592-32.608-68.72-28.112-89.776-8.288
                  			c-24.528,23.088-24.96,61.712-1.312,85.36L208,224.009l91.088-91.088C322.736,109.273,322.304,70.649,297.776,47.561z
                  			 M287.776,121.593L208,201.385l-79.776-79.776c-17.312-17.328-16.976-45.504,0.976-62.4c7.648-7.232,17.888-11.2,28.832-11.2
                  			c22.912,0,33.216,13.696,49.968,30.448c16.304-16.304,26.8-30.448,49.968-30.448c10.944,0,21.184,3.968,28.848,11.184
                  			C304.72,76.057,305.136,104.233,287.776,121.593z" fill="#8cc342"/>
                  	</g>
                  </g>
                  <g>
                  	<g>
                  		<path d="M388.656,48.009c-14.096,0-25.792,10.56-27.2,24.576l-10.128,100.016c-4.88,1.04-9.36,3.408-12.832,6.88l-80.816,75.232
                  			c-11.12,10.128-17.568,24.576-17.68,39.68v89.616h96v-42.176c0-6.512,2.736-12.848,7.696-17.552l60.72-61.28
                  			c7.472-7.552,11.584-17.552,11.584-28.16V75.353C416,60.281,403.728,48.009,388.656,48.009z M400,234.841
                  			c0,6.368-2.464,12.368-6.96,16.912l-60.528,61.088c-7.952,7.52-12.512,18.08-12.512,28.992v26.176h-64v-73.52
                  			c0.08-10.608,4.608-20.768,12.528-27.968l81.072-75.504c2.176-2.176,5.152-3.248,8.304-2.928c1.744,0.16,4.256,0.784,6.4,2.928
                  			c1.968,1.968,3.056,4.592,3.056,7.36c0,2.768-1.104,5.392-2.784,7.088l-62.416,56.608l10.752,11.84l62.704-56.88
                  			c4.992-4.992,7.744-11.616,7.744-18.672c0-7.056-2.736-13.68-7.728-18.656c-2.432-2.464-5.264-4.352-8.368-5.648l10.096-99.84
                  			c0.592-5.824,5.456-10.208,11.296-10.208c6.256,0,11.344,5.088,11.344,11.344V234.841z" fill="#16a79e"/>
                  	</g>
                  </g>
                  <g>
                  	<g>
                  		<path d="M158.32,254.713l-80.816-75.232c-3.472-3.472-7.952-5.856-12.832-6.88L54.544,72.585
                  			c-1.408-14.016-13.104-24.576-27.2-24.576C12.272,48.009,0,60.281,0,75.353v159.488c0,10.608,4.112,20.608,11.584,28.144
                  			l60.72,61.28c4.96,4.704,7.696,11.056,7.696,17.568v42.176h96v-89.616C175.904,279.289,169.44,264.857,158.32,254.713z
                  			 M160,368.009H96v-26.176c0-10.896-4.56-21.472-12.512-28.992L22.96,251.753c-4.496-4.544-6.96-10.544-6.96-16.912V75.353
                  			c0-6.256,5.088-11.344,11.344-11.344c5.84,0,10.704,4.384,11.296,10.176l10.096,99.84c-3.104,1.312-5.936,3.2-8.368,5.648
                  			c-4.976,4.976-7.728,11.6-7.728,18.656c0,7.056,2.752,13.68,7.744,18.672l62.704,56.88l10.752-11.84l-62.416-56.608
                  			c-1.696-1.696-2.784-4.304-2.784-7.088s1.088-5.392,3.056-7.36c2.128-2.144,4.656-2.768,6.4-2.928
                  			c3.168-0.304,6.128,0.752,8.304,2.928l81.072,75.504c7.92,7.2,12.448,17.36,12.528,27.968V368.009z" fill="#16a79e"/>
                  	</g>
                  </g>
                  <g>
                  </svg>
                  <div class="icon-shade icon-shade-volunteer"><span>Join our amazing<br /> team of volunteers</span></div>
                </div>
                <div>It takes many hands and hearts<br /> to make The Green Chair Project work</div>
                <button type="button" class="btn donate-btn">Volunteer</button>
              </div>
            </div>
          </div>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div><!-- #main-content -->

<?php get_footer();
