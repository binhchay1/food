<?php get_header(); ?>

<div class="body svelte-qlls6c">
	<div class="recipeNavigationContainer svelte-1czu6m8">
		<div class="recipeNavigationWrapper svelte-1czu6m8">
			<div class="recipeNavigation svelte-1czu6m8">
				<a href="?nav=recipe" class="cta svelte-1czu6m8 disabled" aria-label="Previous Recipe">
					<span class="caretWrapper prev svelte-1czu6m8">
						<svg width="15px" height="15px" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="caret">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.698614 10.3047C0.693421 10.471 0.754288 10.639 0.881253 10.7659L10.2393 20.124C10.4832 20.3679 10.8788 20.3679 11.1227 20.124C11.3666 19.88 11.3666 19.4845 11.1227 19.2405L2.18687 10.3047L11.1237 1.36788C11.3676 1.12394 11.3676 0.728402 11.1237 0.484466C10.8798 0.24053 10.4842 0.24053 10.2403 0.484466L0.881253 9.84349C0.754288 9.97046 0.693421 10.1384 0.698614 10.3047Z" fill="currentColor" stroke="currentColor" stroke-width="0.416667"></path>
						</svg>
					</span>
					<span class="mobile-button svelte-1czu6m8">PREV</span>
					<span class="desktop-button svelte-1czu6m8">PREVIOUS RECIPE</span>
				</a>
				<a href="?nav=recipe" class="cta disabled svelte-1czu6m8" aria-label="Next Recipe">
					<span class="mobile-button svelte-1czu6m8">NEXT</span>
					<span class="desktop-button svelte-1czu6m8">NEXT RECIPE</span>
					<span class="caretWrapper next svelte-1czu6m8">
						<svg width="15px" height="15px" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="caret">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.3068 10.3037C11.3119 10.1374 11.2511 9.96938 11.1241 9.84246L1.76611 0.484447C1.52213 0.240473 1.1266 0.240473 0.882659 0.484447C0.638722 0.728384 0.638722 1.12392 0.882659 1.36786L9.8185 10.3037L0.881683 19.2405C0.637746 19.4845 0.637746 19.88 0.881683 20.1239C1.12562 20.3679 1.52116 20.3679 1.76509 20.1239L11.1241 10.7649C11.2511 10.6379 11.3119 10.47 11.3068 10.3037Z" fill="currentColor" stroke="currentColor" stroke-width="0.416667"></path>
						</svg>
					</span>
				</a>
			</div>
		</div>
	</div>

	<div class="swipe">
		<div class="previous-recipe"></div>
		<div class="current-recipe">
			<main id="recipe" class="recipe layout svelte-1r658j4" aria-hidden="false">
				<div class="layout__item breadcrumbs svelte-1r658j4">
					<nav aria-label="Breadcrumb" class="svelte-18ct9e1">
						<ol typeof="BreadcrumbList" class="svelte-18ct9e1">
							<li property="itemListElement" typeof="ListItem" class="svelte-1xnybjp">
								<meta property="position" content="1" />
								<a data-track property="item" typeof="WebPage" aria-current="location" href="/recipes">
									<span property="name">Recipes </span>
								</a>
							</li>
							<li property="itemListElement" typeof="ListItem" class="svelte-1xnybjp">
								<meta property="position" content="2" />
								<a data-track property="item" typeof="WebPage" aria-current="location" href="https://www.food.com/topic/cheesecake">
									<span property="name">Cheesecake </span>
								</a>
							</li>
						</ol>
					</nav>
				</div>

				<div class="layout__item title svelte-1r658j4">
					<h1 class="svelte-1muv3s8"><?php echo the_title(); ?></h1>
				</div>

				<div class="layout__item rating-badge svelte-1r658j4">
					<div class="rating-batch svelte-1natcrv">
						<div class="rating">
							<a href="#reviews" aria-label="Recipe rated 4.86 stars. 23 ratings">
								<span aria-hidden="true">
									<div class="five-star-rating svelte-1n6w264">
										<svg width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<linearGradient id="filling-116358305" x1="0" x2="100%" y1="0" y2="0">
												<stop offset="100%" stop-color="#9C1F1E"></stop>
												<stop offset="0" stop-opacity="0"></stop>
											</linearGradient>
											<use fill="url('#filling-116358305')" href="#star-body"></use>
											<use href="#star-outline" fill="#9C1F1E"></use>
										</svg>
										<span class="count svelte-1n6w264">23</span>
									</div>
								</span>
							</a>
						</div>

						<div class="badge badge--standard svelte-1qfe6sy">
							<div class="badge__contents button button--outline-ribbon svelte-1qfe6sy">
								<a data-track="Community Pick" href="/recipe/all/popular" class="caption svelte-1qfe6sy">
									<div class="text">
										<div class="label"></div>
										<div class="name svelte-1qfe6sy">
											Community Pick
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="layout__item author-description svelte-1r658j4">
					<div class="author-description svelte-q8300c">
						<div class="author svelte-176rmbi">
							<div class="avatar svelte-176rmbi">
								<a href="https://www.food.com/user/9690" class="svelte-176rmbi">
									<img alt="" width="60" height="60" src="https://img.sndimg.com/food/image/upload/v1/gk-static/gk/img/avatar/pop.png" class="svelte-176rmbi" />
								</a>
							</div>
							<div class="byline svelte-176rmbi">
								Submitted by
								<a href="https://www.food.com/user/9690" class="svelte-176rmbi"><?php echo get_the_author(); ?></a>
							</div>
						</div>
						<div class="recipe-description paragraph">
							<div title="&quot;This is purported to be &quot;the best quick meal&quot; we've ever tasted, as per Yvonne Ruperti in Cook's Illustrated.  There are two other recipes for cacio e pepe (pasta with Pecorino Romano cheese and black pepper) on RecipeZaar, but this one adds at least one more ingredient to keep the cheese from turning into a big clump.  Add cream.  This recipe was reprinted as &quot;recipe of the week&quot; in The Week magazine.&quot;" class="text-truncate svelte-1aswkii">
								<div class="text svelte-1aswkii">
									<?php echo the_content(); ?>
								</div>
								<label class="toggle svelte-1aswkii">
									See More
									<input type="checkbox" class="svelte-1aswkii">
								</label>
							</div>
						</div>
						<button class="edit-action svelte-q8300c">
							<svg width="16" height="16" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>icons / ellipsis / ellipsis-horizontal</title>
								<defs>
									<path d="M12.0000005,10 C10.674517,10 9.60000038,11.0745166 9.60000038,12.4000001 C9.60000038,13.7254835 10.674517,14.8000002 12.0000005,14.8000002 C13.3254839,14.8000002 14.4000006,13.7254835 14.4000006,12.4000001 C14.4000006,11.0745166 13.3254839,10 12.0000005,10 Z M2.4000001,10 C1.07451664,10 8.8817842e-16,11.0745166 0,12.4000001 C0,13.7254835 1.07451664,14.8000002 2.4000001,14.8000002 C3.72548355,14.8000002 4.80000019,13.7254835 4.80000019,12.4000001 C4.80000019,11.0745166 3.72548355,10 2.4000001,10 Z M21.6000009,10 C20.2745174,10 19.2000008,11.0745166 19.2000008,12.4000001 C19.2000008,13.7254835 20.2745174,14.8000002 21.6000009,14.8000002 C22.9254843,14.8000002 24.000001,13.7254835 24.000001,12.4000001 C24.000001,11.0745166 22.9254843,10 21.6000009,10 Z" id="path-ellipsis-horizontal"></path>
								</defs>
								<g id="icons-/-ellipsis-/-ellipsis-horizontal" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<mask id="mask-ellipsis-horizontal" fill="white">
										<use xlink:href="#path-ellipsis-horizontal"></use>
									</mask>
									<use id="Mask" fill="currentColor" xlink:href="#path-ellipsis-horizontal"></use>
									<g id="Group" mask="url(#mask-ellipsis-horizontal)" fill="currentColor">
										<g id="color-/-primary-/-black">
											<rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
										</g>
									</g>
								</g>
							</svg>
						</button>
					</div>
				</div>
				<div class="layout__item actions svelte-1r658j4">
					<div class="action svelte-1r658j4">
						<button class="button button--growing svelte-1cpm2yv" title="Save">
							<svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.0222168 1C0.0222168 0.45999 0.459983 0.0222244 0.999995 0.0222244H17C17.54 0.0222244 17.9778 0.45999 17.9778 1V23C17.9778 23.3537 17.7868 23.6798 17.4783 23.8528C17.1698 24.0258 16.7919 24.0188 16.4901 23.8343L8.99999 19.257L1.50986 23.8343C1.20806 24.0188 0.830192 24.0258 0.521707 23.8528C0.213222 23.6798 0.0222168 23.3537 0.0222168 23V1ZM1.97777 1.97778V21.2566L8.49013 17.2768C8.80313 17.0855 9.19686 17.0855 9.50986 17.2768L16.0222 21.2566V1.97778H1.97777Z" fill="currentColor"></path>
							</svg>
							<span class="button__text">save </span>
						</button>
					</div>
					<a download href="/recipe/pumpkin-marble-cheesecake-12080/as-image" class="action button button--growing svelte-1r658j4" title="Download">
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
							<path d="M1.25 22.9989C1.25 22.446 1.69858 21.9978 2.25193 21.9978H22.3251C22.8785 21.9978 23.327 22.446 23.327 22.9989C23.327 23.5518 22.8785 24 22.3251 24H2.25193C1.69858 24 1.25 23.5518 1.25 22.9989Z" fill="currentColor"></path>
							<path d="M13.2962 1.0011C13.2962 0.448207 12.8476 4.83352e-08 12.2943 0C11.7409 -4.83352e-08 11.2923 0.448207 11.2923 1.0011L11.3021 14.5975L6.98822 10.2873C6.59694 9.89631 5.96255 9.8963 5.57127 10.2873C5.18 10.6782 5.18 11.3121 5.57127 11.703L11.5811 17.7079C11.9724 18.0988 12.6068 18.0988 12.9981 17.7079L19.0073 11.7037C19.3986 11.3127 19.3986 10.6789 19.0073 10.2879C18.616 9.89696 17.9816 9.89696 17.5903 10.2879L13.3059 14.5688L13.2962 1.0011Z" fill="currentColor"></path>
						</svg>
						<span class="button__text" data-svelte-h="svelte-djziju">Download</span>
					</a>
					<button
						class="action button--growing svelte-1r658j4"
						title="Print">
						<svg
							width="21"
							height="24"
							viewBox="0 0 21 24"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
							aria-hidden="true">
							<path
								d="M16.2857 12C16.7591 12 17.1429 11.6162 17.1429 11.1429C17.1429 10.6695 16.7591 10.2857 16.2857 10.2857C15.8123 10.2857 15.4286 10.6695 15.4286 11.1429C15.4286 11.6162 15.8123 12 16.2857 12Z"
								fill="#2F2F2F"></path>
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M3.42857 0.857148V6.85714L0.856926 6.85714C0.383659 6.85714 0 7.24081 0 7.7142V18.0001C0 18.4734 0.383545 18.8571 0.856926 18.8571H3.42857V23.1429C3.42857 23.6162 3.81239 24 4.28581 24H16.2856C16.7591 24 17.1429 23.6165 17.1429 23.1429V18.8571H19.7145C20.1878 18.8571 20.5714 18.4735 20.5714 18.0001V7.7142C20.5714 7.24086 20.1879 6.85714 19.7145 6.85714H15.4286L17.1429 6.85714V0.857148C17.1429 0.383758 16.759 0 16.2856 0H4.28581C3.81237 0 3.42857 0.383549 3.42857 0.857148ZM15.4286 6.85714L5.14286 6.85714V1.71429H15.4286V6.85714ZM3.42857 17.1429V13.7143H17.1429V17.1429H18.8571V8.57143H1.71429V17.1429H3.42857ZM5.14286 22.2857H15.4286V15.4286H5.14286V22.2857Z"
								fill="currentColor"></path>
						</svg>
						<span class="button__text">Print</span>
					</button>
					<button class="action action--share button--growing svelte-1r658j4" title="Share">
						<svg
							width="24"
							height="19"
							viewBox="0 0 24 19"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
							aria-hidden="true">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12.4445 0.344776C12.8064 -0.0724388 13.438 -0.117305 13.8552 0.244566L23.6552 8.74457C23.8742 8.9345 24 9.21012 24 9.5C24 9.78988 23.8742 10.0655 23.6552 10.2554L13.8552 18.7554C13.438 19.1173 12.8064 19.0724 12.4445 18.6552C12.0827 18.238 12.1275 17.6064 12.5448 17.2446L20.3208 10.5H7.93306C5.15674 10.5 3.69296 11.6546 2.899 13.0064C2.06047 14.4341 1.90757 16.1996 2.04366 17.386C2.10661 17.9347 1.71283 18.4305 1.16415 18.4935C0.61546 18.5564 0.119637 18.1627 0.0566949 17.614C-0.113114 16.1337 0.0551888 13.8992 1.17445 11.9936C2.33829 10.012 4.46891 8.5 7.93306 8.5H20.3208L12.5448 1.75543C12.1275 1.39356 12.0827 0.761991 12.4445 0.344776Z" fill="currentColor"></path>
						</svg>
						<span class="button__text">Share</span>
					</button>
				</div>
				<div class="layout__item i-made-this svelte-1r658j4">
					<button class="action action--i-made-this button--primary svelte-1102v48" aria-haspopup="dialog" aria-expanded="false" aria-controls="i-made-this-modal">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17.6 12.4C17.6 9.30721 15.0928 6.8 12 6.8C8.90721 6.8 6.4 9.30721 6.4 12.4C6.4 15.4928 8.90721 18 12 18C15.0928 18 17.6 15.4928 17.6 12.4ZM8 12.4C8 10.1909 9.79086 8.4 12 8.4C14.2091 8.4 16 10.1909 16 12.4C16 14.6091 14.2091 16.4 12 16.4C9.79086 16.4 8 14.6091 8 12.4Z" fill="currentColor"></path>
							<path d="M20 10C20.4418 10 20.8 9.64183 20.8 9.2C20.8 8.75817 20.4418 8.4 20 8.4C19.5582 8.4 19.2 8.75817 19.2 9.2C19.2 9.64183 19.5582 10 20 10Z" fill="currentColor"></path>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17.8667 5.2L17.053 2.75895C16.9138 2.34155 16.44 2 16 2H8C7.56 2 7.08615 2.34155 6.947 2.75895L6.13335 5.2H0.8C0.36 5.2 0 5.56 0 6V20.4C0 20.84 0.36 21.2 0.8 21.2H23.2C23.64 21.2 24 20.84 24 20.4V6C24 5.56 23.64 5.2 23.2 5.2H17.8667ZM22.4 19.6H1.6V6.8H7.28655L8.35325 3.6H15.6468L16.7135 6.8H22.4V19.6Z" fill="currentColor"></path>
						</svg>
						<span class="button__text">I Made This</span>
					</button>
				</div>
				<div class="layout__item media svelte-1r658j4">
					<div class="media svelte-wgcq7z">
						<div class="primary-image svelte-wgcq7z">
							<img style="--aspect-ratio: 5/4"
								srcset="
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_744,ar_5:4/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 744w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_598,ar_5:4/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 598w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_320,ar_5:4/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 320w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_240,ar_5:4/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 240w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_120,ar_5:4/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 120w
                        "
								src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_744,ar_5:4/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg"
								sizes="100vw"
								alt="photo by alenafoodphoto"
								loading="eager"
								class="hide-on-desktop svelte-kb6fq" />
							<img
								style="--aspect-ratio: 3/2"
								srcset="
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_860,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 860w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_744,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 744w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_598,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 598w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_320,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 320w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_240,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 240w,
                          https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_120,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 120w
                        "
								src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_860,ar_3:2/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg"
								sizes="66vw"
								alt="photo by alenafoodphoto"
								loading="eager"
								class="only-desktop svelte-kb6fq" />
							<div class="attribution-gradient svelte-wgcq7z"></div>
							<div class="attribution svelte-wgcq7z">
								photo by alenafoodphoto
								<img
									style="--aspect-ratio: 1/1"
									srcset="
                            https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_48,ar_1:1/v1/food_avatar/978f08c93d804d01afdc287a9e059c8a/XStkHxgNTvyvP2jDdqth_10212586056277006.jpg 48w
                          "
									src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_48,ar_1:1/v1/food_avatar/978f08c93d804d01afdc287a9e059c8a/XStkHxgNTvyvP2jDdqth_10212586056277006.jpg"
									sizes="48px"
									alt=""
									loading="eager"
									class="round svelte-kb6fq" />
							</div>
						</div>
						<div class="other-images svelte-wgcq7z">
							<div
								class="other-image svelte-wgcq7z"
								role="button"
								aria-label="View All Images">
								<img style="--aspect-ratio: 5/4" src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_20,ar_5:4/v1/img/recipes/12/08/0/12080.jpg" sizes="33vw" alt="photo by Food.com" loading="eager" class="hide-on-desktop svelte-kb6fq" />
								<img style="--aspect-ratio: 3/2" src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_200,ar_3:2/v1/img/recipes/12/08/0/12080.jpg" sizes="200px" alt="photo by Food.com" loading="eager" class="only-desktop svelte-kb6fq" />
							</div>
						</div>
					</div>
				</div>
				<div class="layout__item details svelte-1r658j4">
					<div class="facts svelte-1r658j4">
						<dl class="svelte-1r658j4">
							<div class="facts__item svelte-1r658j4">
								<svg
									width="24px"
									height="24px"
									viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg"
									aria-hidden="true">
									<path
										fill="currentColor"
										stroke="currentColor"
										d="M12.0234375,1.546875 C17.8094832,1.546875 22.5,6.2373918 22.5,12.0234375 C22.5,17.8094832 17.8094832,22.5 12.0234375,22.5 C6.2373918,22.5 1.546875,17.8094832 1.546875,12.0234375 C1.546875,6.2373918 6.2373918,1.546875 12.0234375,1.546875 Z M12.0234375,3.046875 C7.06581893,3.046875 3.046875,7.06581893 3.046875,12.0234375 C3.046875,16.9810561 7.06581893,21 12.0234375,21 C16.9810561,21 21,16.9810561 21,12.0234375 C21,7.06581893 16.9810561,3.046875 12.0234375,3.046875 Z M12,6.0234375 C12.4142136,6.0234375 12.75,6.3286979 12.75,6.70525568 L12.75,12 L15.9371628,12 C16.2738975,12 16.546875,12.3357864 16.546875,12.75 C16.546875,13.1642136 16.2738975,13.5 15.9371628,13.5 L12.1956724,13.5 C12.1332918,13.5152846 12.0676932,13.5234375 12,13.5234375 C11.9234911,13.5234375 11.849658,13.5130228 11.7801224,13.4936679 C11.6529527,13.4732746 11.5380974,13.4046785 11.4480706,13.3032728 C11.3250966,13.1818301 11.25,13.0196973 11.25,12.8416193 L11.25,6.70525568 C11.25,6.3286979 11.5857864,6.0234375 12,6.0234375 Z"></path>
								</svg>
								<dt class="facts__label svelte-1r658j4">
									Ready In:
								</dt>
								<dd class="facts__value svelte-1r658j4">1hr 20mins</dd>
							</div>
							<div class="facts__item svelte-1r658j4">
								<svg
									width="23"
									height="22"
									viewBox="0 0 23 22"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
									aria-hidden="true">
									<path
										fill="currentColor"
										d="M17.2764 9.11082C17.52 8.77583 17.4459 8.30677 17.1109 8.06314C16.776 7.81951 16.3069 7.89357 16.0633 8.22856L17.2764 9.11082ZM15.0865 13.1487C15.1129 13.562 15.4694 13.8757 15.8827 13.8494C16.2961 13.823 16.6098 13.4665 16.5834 13.0531L15.0865 13.1487ZM15.72 8.43882C16.0314 8.16567 16.0624 7.69181 15.7892 7.38042C15.5161 7.06903 15.0422 7.03803 14.7308 7.31118L15.72 8.43882ZM11.8107 13.0755C11.8321 13.4891 12.1848 13.8071 12.5984 13.7857C13.0121 13.7643 13.3301 13.4116 13.3087 12.998L11.8107 13.0755ZM1.96044 13.1009L1.96044 12.3509C1.59025 12.3509 1.27543 12.621 1.21915 12.9869L1.96044 13.1009ZM21.0341 13.1009L21.7754 12.9869C21.7191 12.621 21.4043 12.3509 21.0341 12.3509V13.1009ZM16.803 21V21.75C16.9603 21.75 17.1137 21.7005 17.2414 21.6085L16.803 21ZM6.19159 21L5.75319 21.6085C5.88086 21.7005 6.03423 21.75 6.19159 21.75V21ZM7.03646 5.4687L7.37726 6.1368L7.03646 5.4687ZM7.64086 3.60562L6.97276 3.94642V3.94642L7.64086 3.60562ZM1.85646 6.55628L2.52456 6.21548H2.52456L1.85646 6.55628ZM3.71955 7.16068L3.37875 6.49259H3.37875L3.71955 7.16068ZM2.23372 4.24791L1.89292 3.57982L2.23372 4.24791ZM1.62932 6.111L0.961226 6.4518L1.62932 6.111ZM5.55064 2.55593L5.89144 3.22403L5.55064 2.55593ZM7.41372 3.16034L8.08182 2.81954V2.81954L7.41372 3.16034ZM21.8848 5.81653L21.2361 5.44013L21.8848 5.81653ZM21.2944 2.68294L20.8271 3.26959L20.8271 3.26959L21.2944 2.68294ZM17.4597 2.29199L16.9478 1.74391V1.74391L17.4597 2.29199ZM20.646 2.16648L21.1133 1.57983L21.1133 1.57982L20.646 2.16648ZM12.2452 7.13215L12.8319 7.59942L12.8319 7.59942L12.2452 7.13215ZM16.2593 8.33918L16.7266 7.75252L16.2593 8.33918ZM18.3337 11.9816L17.747 11.5143V11.5143L18.3337 11.9816ZM16.0633 8.22856C15.5945 8.8731 14.924 10.6037 15.0865 13.1487L16.5834 13.0531C16.4376 10.7687 17.0601 9.40819 17.2764 9.11082L16.0633 8.22856ZM14.7308 7.31118C14.1655 7.80707 13.3588 8.43292 12.757 9.3181C12.1281 10.243 11.7255 11.4288 11.8107 13.0755L13.3087 12.998C13.2397 11.6648 13.5599 10.8049 13.9974 10.1615C14.4619 9.47837 15.0651 9.01327 15.72 8.43882L14.7308 7.31118ZM20.2928 13.2149C20.5221 14.7053 19.9743 16.1956 19.1075 17.5051C18.2437 18.8101 17.1188 19.8481 16.3646 20.3915L17.2414 21.6085C18.1214 20.9745 19.3808 19.8098 20.3583 18.333C21.3328 16.8607 22.0835 14.9901 21.7754 12.9869L20.2928 13.2149ZM1.21915 12.9869C0.911076 14.9901 1.66172 16.8607 2.63628 18.333C3.6138 19.8098 4.87317 20.9745 5.75319 21.6085L6.62999 20.3915C5.87576 19.8481 4.75091 18.8101 3.88709 17.5051C3.02032 16.1956 2.47251 14.7053 2.70172 13.2149L1.21915 12.9869ZM11.8507 12.7094L7.29103 5.25985L6.01166 6.04291L10.5713 13.4925L11.8507 12.7094ZM3.51431 7.08464L6.0189 13.3782L7.41259 12.8236L4.90801 6.53L3.51431 7.08464ZM5.20983 1.88784L1.89292 3.57982L2.57453 4.91601L5.89144 3.22403L5.20983 1.88784ZM0.961226 6.4518L1.18837 6.89708L2.52456 6.21548L2.29742 5.7702L0.961226 6.4518ZM4.06035 7.82878L7.37726 6.1368L6.69566 4.8006L3.37875 6.49259L4.06035 7.82878ZM8.30896 3.26481L8.08182 2.81954L6.74563 3.50114L6.97276 3.94642L8.30896 3.26481ZM7.37726 6.1368C8.42762 5.601 8.84476 4.31517 8.30896 3.26481L6.97276 3.94642C7.13212 4.25882 7.00806 4.64125 6.69566 4.8006L7.37726 6.1368ZM1.18837 6.89708C1.72416 7.94744 3.00999 8.36458 4.06035 7.82878L3.37875 6.49259C3.06635 6.65194 2.68392 6.52788 2.52456 6.21548L1.18837 6.89708ZM1.89292 3.57982C0.842565 4.11561 0.42543 5.40144 0.961226 6.4518L2.29742 5.7702C2.13806 5.4578 2.26213 5.07537 2.57453 4.91601L1.89292 3.57982ZM5.89144 3.22403C6.20383 3.06467 6.58627 3.18874 6.74563 3.50114L8.08182 2.81954C7.54602 1.76918 6.26019 1.35204 5.20983 1.88784L5.89144 3.22403ZM21.2361 5.44013L17.8114 11.3424L19.1089 12.0952L22.5335 6.19293L21.2361 5.44013ZM17.8114 11.3424L17.78 11.3966L19.0774 12.1494L19.1089 12.0952L17.8114 11.3424ZM20.8271 3.26959C21.4826 3.79171 21.6566 4.71528 21.2361 5.44013L22.5335 6.19293C23.3273 4.82485 22.9989 3.08171 21.7617 2.09629L20.8271 3.26959ZM16.9478 1.74391L11.9611 6.40202L12.985 7.49818L17.9717 2.84006L16.9478 1.74391ZM11.9611 6.40202L11.9153 6.44476L12.9392 7.54092L12.985 7.49818L11.9611 6.40202ZM21.1133 1.57982C19.876 0.594395 18.1036 0.664213 16.9478 1.74391L17.9717 2.84006C18.5841 2.26801 19.5232 2.23101 20.1787 2.75313L21.1133 1.57982ZM12.8319 7.59942C12.8262 7.60658 12.8202 7.61229 12.8152 7.61632C12.8103 7.62023 12.8079 7.62118 12.81 7.62016L12.1361 6.28005C11.9571 6.37004 11.7925 6.4968 11.6586 6.66489L12.8319 7.59942ZM12.81 7.62016C12.8239 7.61317 12.9059 7.5822 13.0987 7.59684C13.2846 7.61095 13.5273 7.66431 13.8182 7.76987C14.3995 7.98084 15.0978 8.37285 15.7921 8.92583L16.7266 7.75252C15.9295 7.11763 15.0908 6.636 14.3299 6.35985C13.9497 6.22185 13.57 6.12829 13.2122 6.10114C12.8613 6.07451 12.4784 6.10794 12.1361 6.28005L12.81 7.62016ZM15.7921 8.92583C16.4863 9.4788 17.0246 10.0717 17.3602 10.5911C17.5282 10.851 17.6345 11.0756 17.6898 11.2537C17.7472 11.4383 17.7354 11.5252 17.7317 11.5403L19.1886 11.8973C19.2798 11.5252 19.2267 11.1444 19.1222 10.8084C19.0158 10.4658 18.8396 10.1167 18.6201 9.77693C18.1807 9.0971 17.5237 8.38741 16.7266 7.75252L15.7921 8.92583ZM17.7317 11.5403C17.7312 11.5425 17.7316 11.54 17.7343 11.5344C17.7371 11.5285 17.7413 11.5215 17.747 11.5143L18.9203 12.4488C19.0542 12.2807 19.1409 12.0918 19.1886 11.8973L17.7317 11.5403ZM13.7614 9.22558C13.3293 8.74171 13.0513 8.29707 12.9227 7.95724C12.7796 7.57933 12.8853 7.5324 12.8319 7.59942L11.6586 6.66489C11.2047 7.23471 11.3192 7.9584 11.5198 8.48833C11.7349 9.05635 12.1355 9.6568 12.6425 10.2247L13.7614 9.22558ZM17.747 11.5143C17.7977 11.4507 17.7862 11.5477 17.4439 11.5137C17.1306 11.4826 16.6911 11.3487 16.1726 11.0873L15.4974 12.4268C16.1143 12.7377 16.7371 12.9509 17.2957 13.0064C17.8254 13.059 18.4956 12.9821 18.9203 12.4488L17.747 11.5143ZM20.1787 2.75312L20.8271 3.26959L21.7617 2.09629L21.1133 1.57983L20.1787 2.75312ZM21.0341 12.3509L1.96044 12.3509L1.96044 13.8509L21.0341 13.8509V12.3509ZM16.803 20.25L6.19159 20.25V21.75L16.803 21.75V20.25Z"></path>
								</svg>
								<dt class="facts__label svelte-1r658j4">
									Ingredients:
								</dt>
								<dd class="facts__value svelte-1r658j4">10</dd>
							</div>
							<div class="facts__item svelte-1r658j4">
								<svg
									width="24"
									height="23"
									viewBox="0 0 24 23"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
									aria-hidden="true">
									<path
										fill="currentColor"
										d="M9.25 3C9.25 3.41421 9.58579 3.75 10 3.75C10.4142 3.75 10.75 3.41421 10.75 3H9.25ZM13.25 3C13.25 3.41421 13.5858 3.75 14 3.75C14.4142 3.75 14.75 3.41421 14.75 3H13.25ZM4.51901 10.2722C4.38172 10.663 4.58723 11.0911 4.97803 11.2283C5.36883 11.3656 5.79693 11.1601 5.93422 10.7693L4.51901 10.2722ZM9.81038 6.69444C10.1939 6.53799 10.378 6.10025 10.2215 5.71672C10.0651 5.33319 9.62735 5.1491 9.24382 5.30555L9.81038 6.69444ZM1.00001 12.0601C0.585797 12.0601 0.250006 12.3958 0.25 12.8101C0.249994 13.2243 0.585775 13.5601 0.999989 13.5601L1.00001 12.0601ZM23 13.5601C23.4142 13.5601 23.75 13.2243 23.75 12.8101C23.75 12.3959 23.4142 12.0601 23 12.0601V13.5601ZM4.26173 17.3764L4.68648 17.9946L4.26173 17.3764ZM7.24887 15.3239L6.82413 14.7057L7.24887 15.3239ZM13.4603 17.4416L13.2691 16.7164L13.4603 17.4416ZM9.58173 17.0512C9.16818 17.0278 8.81396 17.3441 8.79056 17.7576C8.76716 18.1712 9.08344 18.5254 9.49699 18.5488L9.58173 17.0512ZM4.20748 17.9382L4.74267 17.4128H4.74267L4.20748 17.9382ZM6.905 20.6858L6.36981 21.2112L6.36981 21.2113L6.905 20.6858ZM7.11629 20.7925L7.22135 20.0499H7.22135L7.11629 20.7925ZM12.5117 21.5558L12.6168 20.8132L12.5117 21.5558ZM13.7476 21.293L14.1458 21.9286L13.7476 21.293ZM20.073 17.3307L20.4712 17.9663L20.073 17.3307ZM19.2268 15.1608L19.0895 14.4235L19.2268 15.1608ZM20.4956 15.7795L21.161 15.4336L21.161 15.4336L20.4956 15.7795ZM4.43033 18.3803C4.72322 18.0874 4.72322 17.6126 4.43033 17.3197C4.13744 17.0268 3.66256 17.0268 3.36967 17.3197L4.43033 18.3803ZM2.70711 19.0429L3.23744 19.5732H3.23744L2.70711 19.0429ZM5.04451 21.7233L5.43038 22.3664H5.43038L5.04451 21.7233ZM7.13587 21.3431C7.49106 21.13 7.60623 20.6693 7.39312 20.3141C7.18001 19.9589 6.71931 19.8438 6.36413 20.0569L7.13587 21.3431ZM2.70711 20.4571L2.17678 20.9874H2.17678L2.70711 20.4571ZM3.82291 21.5729L4.35324 21.0426H4.35324L3.82291 21.5729ZM3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101V12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C2.70107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C1.95107 12.8101 2.70107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101V12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101H1.95107C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101V12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101C2.70107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 3.45107 12.8101 3.45107 12.8101C3.45107 12.8101 2.70107 12.8101 1.95107 12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101V12.8101C1.95107 12.8101 1.95107 12.8101 1.95107 12.8101H3.45107ZM3.45107 12.8101C3.45108 8.12427 7.27425 4.31782 12 4.31782V2.81782C6.45448 2.81782 1.95108 7.28721 1.95107 12.8101L3.45107 12.8101ZM12 4.31782C16.7258 4.31782 20.549 8.12425 20.549 12.8101L22.049 12.8101C22.049 7.28718 17.5456 2.81782 12 2.81782V4.31782ZM20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101V12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C21.299 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C22.049 12.8101 21.299 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101V12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101H22.049C22.049 12.8101 22.049 12.8101 22.049 12.8101V12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101C21.299 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 20.549 12.8101 20.549 12.8101C20.549 12.8101 21.299 12.8101 22.049 12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101V12.8101C22.049 12.8101 22.049 12.8101 22.049 12.8101H20.549ZM10.75 3C10.75 2.30964 11.3096 1.75 12 1.75V0.25C10.4812 0.25 9.25 1.48122 9.25 3H10.75ZM12 1.75C12.6904 1.75 13.25 2.30964 13.25 3H14.75C14.75 1.48122 13.5188 0.25 12 0.25V1.75ZM5.93422 10.7693C6.5807 8.92904 7.99537 7.43482 9.81038 6.69444L9.24382 5.30555C7.02958 6.20879 5.30711 8.02873 4.51901 10.2722L5.93422 10.7693ZM0.999989 13.5601L2.70106 13.5601L2.70108 12.0601L1.00001 12.0601L0.999989 13.5601ZM2.70107 13.5601L21.299 13.5601L21.299 12.0601L2.70107 12.0601L2.70107 13.5601ZM21.299 13.5601H23V12.0601H21.299V13.5601ZM4.68648 17.9946L7.67361 15.942L6.82413 14.7057L3.83699 16.7583L4.68648 17.9946ZM8.2921 15.75H13.4011V14.25H8.2921V15.75ZM13.2691 16.7164C12.4327 16.9369 11.147 17.1398 9.58173 17.0512L9.49699 18.5488C11.2334 18.6471 12.6769 18.4238 13.6516 18.1668L13.2691 16.7164ZM3.67229 18.4636L6.36981 21.2112L7.44019 20.1604L4.74267 17.4128L3.67229 18.4636ZM7.01124 21.5351L12.4067 22.2984L12.6168 20.8132L7.22135 20.0499L7.01124 21.5351ZM14.1458 21.9286L20.4712 17.9663L19.6749 16.6951L13.3495 20.6574L14.1458 21.9286ZM19.0895 14.4235L14.3138 15.3127L14.5883 16.7873L19.3641 15.8981L19.0895 14.4235ZM21.161 15.4336C20.7681 14.6776 19.9271 14.2675 19.0895 14.4235L19.3641 15.8981C19.5525 15.863 19.7417 15.9553 19.8301 16.1253L21.161 15.4336ZM20.4712 17.9663C21.326 17.4308 21.6262 16.3286 21.161 15.4336L19.8301 16.1253C19.9347 16.3267 19.8672 16.5746 19.6749 16.6951L20.4712 17.9663ZM12.4067 22.2984C13.0118 22.384 13.6278 22.253 14.1458 21.9286L13.3495 20.6574C13.1313 20.7941 12.8717 20.8493 12.6168 20.8132L12.4067 22.2984ZM13.6516 18.1668C14.6648 17.8996 15.2011 16.9622 15.2011 16.05H13.7011C13.7011 16.4215 13.4971 16.6563 13.2691 16.7164L13.6516 18.1668ZM13.4011 15.75C13.5667 15.75 13.7011 15.8843 13.7011 16.05H15.2011C15.2011 15.0559 14.3952 14.25 13.4011 14.25V15.75ZM7.67361 15.942C7.85562 15.8169 8.07127 15.75 8.2921 15.75V14.25C7.76795 14.25 7.25612 14.4089 6.82413 14.7057L7.67361 15.942ZM6.36981 21.2113C6.54218 21.3868 6.76762 21.5006 7.01124 21.5351L7.22135 20.0499C7.30446 20.0617 7.38138 20.1005 7.44019 20.1604L6.36981 21.2113ZM3.83699 16.7583C3.26402 17.152 3.18525 17.9675 3.67229 18.4636L4.74267 17.4128C4.90883 17.582 4.88196 17.8603 4.68648 17.9946L3.83699 16.7583ZM3.36967 17.3197L2.17678 18.5126L3.23744 19.5732L4.43033 18.3803L3.36967 17.3197ZM5.43038 22.3664L7.13587 21.3431L6.36413 20.0569L4.65864 21.0802L5.43038 22.3664ZM4.65864 21.0802C4.56027 21.1392 4.43436 21.1237 4.35324 21.0426L3.29258 22.1032C3.8604 22.6711 4.7418 22.7796 5.43038 22.3664L4.65864 21.0802ZM2.17678 18.5126C1.49336 19.196 1.49336 20.304 2.17678 20.9874L3.23744 19.9268C3.13981 19.8291 3.13981 19.6709 3.23744 19.5732L2.17678 18.5126ZM2.17678 20.9874L3.29258 22.1032L4.35324 21.0426L3.23744 19.9268L2.17678 20.9874Z"></path>
								</svg>
								<dt
									class="facts__label svelte-1r658j4"
									data-svelte-h="svelte-ji471c">
									Serves:
								</dt>
								<dd class="facts__value svelte-1r658j4">
									<div class="adjust svelte-1o10zxc">
										<span
											contenteditable="true"
											inputmode="numeric"
											class="value svelte-1o10zxc">10-12</span>
										<div class="adjust__controls svelte-1o10zxc">
											<button
												aria-label="decrease serving size"
												class="button svelte-1o10zxc">
												<svg
													width="16"
													height="2"
													viewBox="0 0 16 2"
													fill="none"
													xmlns="http://www.w3.org/2000/svg"
													aria-hidden="true">
													<path
														fill="currentColor"
														d="M14.5199 1.72304C14.9193 1.72304 15.243 1.39932 15.243 0.999991C15.243 0.600661 14.9193 0.27694 14.5199 0.27694H1.48008C1.08075 0.27694 0.757026 0.600661 0.757026 0.999991C0.757026 1.39932 1.08075 1.72304 1.48008 1.72304H14.5199Z"></path>
												</svg>
											</button>
											<button
												aria-label="increase serving size"
												class="button svelte-1o10zxc">
												<svg
													width="16"
													height="16"
													viewBox="0 0 16 16"
													fill="none"
													xmlns="http://www.w3.org/2000/svg"
													aria-hidden="true">
													<path
														fill="currentColor"
														d="M8.61457 8.61457V15.3854C8.61457 15.7248 8.33942 16 8 16C7.66058 16 7.38543 15.7248 7.38543 15.3854V8.61457H0.61457C0.275152 8.61457 0 8.33942 0 8C0 7.66058 0.275152 7.38543 0.61457 7.38543H7.38543V0.61457C7.38543 0.275152 7.66058 0 8 0C8.33942 0 8.61457 0.275152 8.61457 0.61457V7.38543H15.3854C15.7248 7.38543 16 7.66058 16 8C16 8.33942 15.7248 8.61457 15.3854 8.61457H8.61457Z"></path>
												</svg>
											</button>
										</div>
									</div>
								</dd>
							</div>
						</dl>
					</div>
					<button data-track class="link facts__nutrition svelte-1r658j4" aria-haspopup="dialog" aria-expanded="false" aria-controls="nutrition-modal">
						Nutrition information
					</button>
				</div>
				<div class="layout__item ad ad-after-details svelte-1r658j4">
					<div id="chicory-aisle-slot" chicory-aisle-type="vertical" chicory-require-ads="true" class="hide-on-desktop"></div>
				</div>
				<section class="layout__item ingredients svelte-1r658j4">
					<div class="heading svelte-1r658j4">
						<h2
							id="ingredients"
							class="ingredients__title svelte-1r658j4">
							ingredients
						</h2>
						<button class="button button--units svelte-1r658j4">
							Units: <span class="value svelte-1r658j4">US</span>
						</button>
					</div>
					<ul class="ingredient-list svelte-1r658j4">
						<li style="display: contents">
							<h4 class="ingredient-heading 0 svelte-1r658j4">CRUST</h4>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								1 <sup>1</sup> &frasl;<sub>2</sub>
							</span>
							<span class="ingredient-text svelte-1r658j4">
								cups gingersnap crumbs (cookies smashed)
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<sup>1</sup>
								&frasl;<sub>2</sub>
							</span>
							<span class="ingredient-text svelte-1r658j4">
								cup finely chopped <a href="/about/pecan-276">pecans</a>
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								<sup>1</sup>
								&frasl;<sub>3</sub>
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								cup <a href="/about/margarine-421">margarine</a>
								, melted
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<h4 class="ingredient-heading 4 svelte-1r658j4">
								FILLING
							</h4>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								2
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								(8 ounce) packages
								<a href="/about/cream-cheese-506">cream cheese</a>
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								<sup>3</sup>
								&frasl;<sub>4</sub>
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								cup <a href="/about/sugar-139">sugar</a>
								, divided
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								1
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								teaspoon <a href="/about/vanilla-350">vanilla</a>
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								3
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								<a href="/about/egg-142">eggs</a>
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								1
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								cup <a href="/about/pumpkin-285">canned pumpkin</a>
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								<sup>3</sup>
								&frasl;<sub>4</sub>
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								teaspoon
								<a href="/about/cinnamon-324">ground cinnamon</a>
								<!-- HTML_TAG_END -->
							</span>
						</li>
						<li style="display: contents">
							<span class="ingredient-quantity svelte-1r658j4">
								<!-- HTML_TAG_START -->
								<sup>1</sup>
								&frasl;<sub>4</sub>
								<!-- HTML_TAG_END -->
							</span>
							<span class="ingredient-text svelte-1r658j4">
								<!-- HTML_TAG_START -->
								teaspoon <a href="/about/nutmeg-333">ground nutmeg</a>
								<!-- HTML_TAG_END -->
							</span>
						</li>
					</ul>
					<div class="chicory-order-ingredients svelte-1yi9gn1"></div>
					<div
						id="chicory_premium_pairings_unit"
						class="svelte-1yi9gn1"></div>
				</section>
				<div
					class="layout__item ad ad-after-ingredients svelte-1r658j4">
					<div class="ad">
						<div
							class="ad__ad ad__ad--banner_mobile"
							data-slot-type="dfp_banner_mobile"></div>
						<div class="ad__label" data-svelte-h="svelte-197t4h7">
							Advertisement
						</div>
					</div>
				</div>
				<section class="layout__item directions svelte-1r658j4">
					<div class="heading svelte-1r658j4">
						<h2
							id="directions"
							class="directions__title svelte-1r658j4">
							directions
						</h2>
					</div>
					<ul class="direction-list svelte-1r658j4">
						<li class="direction svelte-1r658j4">
							Preheat oven to 350°F.
						</li>
						<li class="direction svelte-1r658j4">
							------CRUST-------.
						</li>
						<li class="direction svelte-1r658j4">
							Mix crumbs, pecans and margarine; press onto bottom and
							1-1/2 inches up sides of a 9-inch springform pan. bake
							10-minutes at 350°F.
						</li>
						<li class="direction svelte-1r658j4">
							---------FILLING--------.
						</li>
						<li class="direction svelte-1r658j4">
							Beat cream cheese, 1/2-c sugar and vanilla at medium speed
							until well blended.
						</li>
						<li class="direction svelte-1r658j4">
							Add eggs 1 at a time, mixing well after each.
						</li>
						<li class="direction svelte-1r658j4">
							Reserve 1 cup of batter.
						</li>
						<li class="direction svelte-1r658j4">
							Add remaining sugar, pumpkin and spices to remaining
							batter mixing well.
						</li>
						<li class="direction svelte-1r658j4">
							Spoon pumpkin and cream cheese batters alternately over
							crust.
						</li>
						<li class="direction svelte-1r658j4">
							Cut through batters with a knife multiple times to create
							a marble effect.
						</li>
						<li class="direction svelte-1r658j4">
							bake 55 minutes at 350°F.
						</li>
						<li class="direction svelte-1r658j4">
							loosen cake from edge of pan;cool before removing rim,
							refrigerate.
						</li>
					</ul>
				</section>
				<div class="layout__item printshare svelte-1r658j4">
					<div class="container svelte-szo8tz">
						<a
							data-pin-custom="true"
							data-pin-do="buttonPin"
							role="button"
							aria-label="Share via Pinterest"
							title="Share via Pinterest"
							class="button share share--pinterest svelte-szo8tz"
							href="//www.pinterest.com/pin/create/button/?media=https://img.sndimg.com/food/image/upload/w_555,h_416,c_fit,fl_progressive,q_95/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg&amp;url=https://www.food.com/recipe/pumpkin-marble-cheesecake-12080&amp;description="
							target="_blank">
							<svg
								width="24px"
								height="24px"
								viewBox="0 0 24 24"
								version="1.1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>icons / social / pinterest</title>
								<defs>
									<path
										d="M12.8100678,0 C6.28801028,0 3,4.64441379 3,8.51668966 C3,10.8616552 3.89371116,12.9475862 5.81064482,13.7255172 C6.12529092,13.8525517 6.406729,13.730069 6.49805108,13.3837241 C6.56156145,13.1445517 6.71141269,12.5412414 6.77865896,12.290069 C6.87039614,11.9478621 6.83469751,11.8282759 6.58107116,11.5303448 C6.02815743,10.8823448 5.67490699,10.044 5.67490699,8.85641379 C5.67490699,5.41117241 8.2705298,2.32675862 12.4335717,2.32675862 C16.1196633,2.32675862 18.1449382,4.56413793 18.1449382,7.55131034 C18.1449382,11.4823448 16.3932145,14.7997241 13.7930255,14.7997241 C12.3567782,14.7997241 11.2820832,13.6208276 11.6266165,12.1742069 C12.0392263,10.4470345 12.8382946,8.58289655 12.8382946,7.33613793 C12.8382946,6.22055172 12.2351537,5.28993103 10.9869468,5.28993103 C9.51915181,5.28993103 8.33985157,6.7977931 8.33985157,8.81834483 C8.33985157,10.1052414 8.77736739,10.9758621 8.77736739,10.9758621 C8.77736739,10.9758621 7.27511904,17.2977931 7.01194538,18.4042759 C6.48725847,20.6093793 6.93307631,23.3126897 6.97085044,23.5857931 C6.99285076,23.7471724 7.20247647,23.7856552 7.29711936,23.6631724 C7.43244209,23.4881379 9.18084498,21.3442759 9.77526876,19.202069 C9.94338442,18.5954483 10.7407923,15.4543448 10.7407923,15.4543448 C11.2177427,16.358069 12.6116498,17.1542069 14.0939733,17.1542069 C18.5064906,17.1542069 21.5006098,13.1586207 21.5006098,7.81034483 C21.5006098,3.76634483 18.0515406,0 12.8100678,0"
										id="path-pinterest"></path>
								</defs>
								<g
									id="icons-/-social-/-pinterest"
									stroke="none"
									stroke-width="1"
									fill="none"
									fill-rule="evenodd">
									<mask id="mask-pinterest" fill="white">
										<use xlink:href="#path-pinterest"></use>
									</mask>
									<use
										id="Mask"
										fill="currentColor"
										xlink:href="#path-pinterest"></use>
									<g
										id="Group"
										mask="url(#mask-pinterest)"
										fill="currentColor">
										<g id="color-/-primary-/-black">
											<rect
												id="Rectangle"
												x="0"
												y="0"
												width="24"
												height="24"></rect>
										</g>
									</g>
								</g>
							</svg>
						</a>
						<a
							role="button"
							aria-label="Share via Email"
							title="Share via Email"
							class="button share share--email svelte-szo8tz"
							target="_blank"
							href="mailto:?subject=Pumpkin Marble Cheesecake&amp;body=%0A%0A%0AView%20it%20here%3A%20https%3A%2F%2Fwww.food.com%2Frecipe%2Fpumpkin-marble-cheesecake-12080%3Fnl%3Demail_share%0A">
							<svg
								width="24px"
								height="24px"
								viewBox="0 0 24 24"
								version="1.1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>icons / email</title>
								<defs>
									<path
										d="M23.8611996,3.03733866 C23.771688,2.84149512 23.6536783,2.65400814 23.5114025,2.47487773 C23.3322721,2.3326019 23.1440352,2.21984187 22.9481916,2.13033023 C22.751491,2.04156854 22.527203,2 22.2777918,2 L1.70779208,2 C1.45752375,2 1.23403928,2.04156854 1.03819574,2.13033023 C0.841495118,2.21984187 0.654008141,2.3344232 0.475734811,2.47669903 C0.332601896,2.65582944 0.219466898,2.84240577 0.130705206,3.03824931 C0.0411935671,3.23494993 0,3.45752375 0,3.706935 L0,20.8486014 C0,21.0988697 0.0411935671,21.3223542 0.130705206,21.5181978 C0.219466898,21.7148984 0.334208927,21.9023854 0.477341842,22.0806587 C0.655615173,22.2237916 0.842298633,22.3437297 1.03899926,22.4324914 C1.23484279,22.5220566 1.45752375,22.5699997 1.70779208,22.5699997 L22.2777918,22.5699997 C22.527203,22.5699997 22.7506875,22.5220566 22.9473881,22.4324914 C23.1432317,22.3437297 23.3307186,22.2256129 23.5098491,22.08248 C23.6521249,21.9042067 23.771688,21.715809 23.8611996,21.5191084 C23.9499613,21.3232649 23.998333,21.0988697 23.998333,20.8486014 L23.998333,3.706935 C23.998333,3.45752375 23.9499613,3.23403928 23.8611996,3.03733866 L23.8611996,3.03733866 Z M15.6773931,12.1335639 L22.2841663,5.99920434 L22.2841663,18.5214059 L15.6773931,12.1335639 L15.6773931,12.1335639 Z M22.2841663,3.75643156 L12.0234327,13.2365766 L1.76548451,3.71416664 L22.2841663,3.71416664 L22.2841663,3.75643156 L22.2841663,3.75643156 Z M1.71416664,5.94943994 L8.37225771,12.1343675 L1.71416664,18.5734202 L1.71416664,5.94943994 L1.71416664,5.94943994 Z M11.4035471,14.9561536 C11.617818,15.063289 11.8320888,15.1168567 12.0463596,15.1168567 C12.2606305,15.1168567 12.456474,15.063289 12.6356044,14.9561536 L14.4459787,13.2780916 L22.2759705,20.8558331 L1.70779208,20.8558331 L9.5931729,13.2780916 L11.4035471,14.9561536 L11.4035471,14.9561536 Z"
										id="path-email"></path>
								</defs>
								<g
									id="icons-/-email"
									stroke="none"
									stroke-width="1"
									fill="none"
									fill-rule="evenodd">
									<mask id="mask-email" fill="white">
										<use xlink:href="#path-email"></use>
									</mask>
									<use
										id="Mask"
										fill="currentColor"
										xlink:href="#path-email"></use>
									<g
										id="Group"
										mask="url(#mask-email)"
										fill="currentColor">
										<g id="color-/-primary-/-black">
											<rect
												id="Rectangle"
												x="0"
												y="0"
												width="24"
												height="24"></rect>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>
				<div
					class="layout__item questionFeed conversation svelte-1r658j4"
					id="questions">
					<div class="conversation__question svelte-m2e9og">
						<h2
							class="conversation__question__title svelte-m2e9og"
							data-svelte-h="svelte-f52llz">
							Questions &amp;Replies
						</h2>
						<div class="QuestionInputBlock svelte-m2e9og">
							<div class="user-avatar svelte-m2e9og">
								<img
									style="width: inherit"
									srcset="
                            https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_48,ar_1:1/v1/gk-static/gk/img/avatar/drink.png 48w
                          "
									src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_48,ar_1:1/v1/gk-static/gk/img/avatar/drink.png"
									alt=""
									loading="lazy"
									class="round svelte-kb6fq" />
							</div>
							<input
								placeholder="ask a question"
								class="svelte-m2e9og"
								value="" />
							<button
								class="button not-logged-in svelte-m2e9og"
								data-svelte-h="svelte-1iymu50">
								Sign In
								<div
									class="hide-on-desktop button__shrinking-text svelte-m2e9og">
									to Ask a Question
								</div>
							</button>
						</div>
						<div class="conversation__empty-feed svelte-cpc4nt">
							<span
								class="conversation__empty-feed-icon gradient-bg svelte-cpc4nt">
								<svg
									width="40"
									height="40"
									viewBox="0 0 24 24"
									fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M8 19.2C7.55817 19.2 7.2 19.5582 7.2 20C7.2 20.4418 7.55817 20.8 8 20.8H16C16.4418 20.8 16.8 20.4418 16.8 20C16.8 19.5582 16.4418 19.2 16 19.2H8Z"
										fill="currentColor"></path>
									<path
										d="M10.4 22.4C9.95817 22.4 9.6 22.7582 9.6 23.2C9.6 23.6418 9.95817 24 10.4 24H13.6C14.0418 24 14.4 23.6418 14.4 23.2C14.4 22.7582 14.0418 22.4 13.6 22.4H10.4Z"
										fill="currentColor"></path>
									<path
										fill-rule="evenodd"
										clip-rule="evenodd"
										d="M20 8C20 3.58172 16.4183 0 12 0C7.58172 0 4 3.58172 4 8C4 10.6173 5.25689 12.9411 7.2 14.4006V16.8C7.2 17.2418 7.55809 17.6 7.99992 17.6H16.0001C16.4419 17.6 16.8 17.2422 16.8 16.8V14.4006C18.7431 12.9411 20 10.6173 20 8ZM8.8 13.6013V16H15.2V13.6013L15.8391 13.1213C17.4407 11.9183 18.4 10.0404 18.4 8C18.4 4.46538 15.5346 1.6 12 1.6C8.46538 1.6 5.6 4.46538 5.6 8C5.6 10.0404 6.55935 11.9183 8.16092 13.1213L8.8 13.6013Z"
										fill="currentColor"></path>
								</svg>
							</span>
							<span class="conversation__empty-feed-title svelte-cpc4nt">Got a question?
							</span>
							<span
								class="conversation__empty-feed-text svelte-cpc4nt"
								data-svelte-h="svelte-uufzip">Share it with the community!
							</span>
						</div>
					</div>
				</div>
				<div class="layout__item ad ad-after-reviews svelte-1r658j4">
					<div class="ad">
						<div
							class="ad__ad ad__ad--block_content"
							data-slot-type="dfp_block_content"></div>
						<div class="ad__label" data-svelte-h="svelte-197t4h7">
							Advertisement
						</div>
					</div>
				</div>
				<div class="layout__item newsletter svelte-1r658j4">
					<div id="newsletter" class="svelte-arj5l">
						<div
							class="title svelte-arj5l"
							data-svelte-h="svelte-b0j46l">
							Newsletter Sign-up
						</div>
						<div
							class="description svelte-arj5l"
							data-svelte-h="svelte-10ozb47">
							Get recipes like this one and more by signing up for our
							Recipes, Food Ideas and Videos newsletter! You’ll get the
							best of Food.com right in your inbox!
						</div>
						<div
							class="privacy svelte-arj5l"
							data-svelte-h="svelte-h04zk">
							By entering your email address, you agree to our
							<a
								href="https://corporate.discovery.com/visitor-agreement/"
								class="svelte-arj5l">Terms of Use</a>
							and acknowledge the
							<a
								href="https://www.wbdprivacy.com/policycenter/b2c/"
								class="svelte-arj5l">Privacy Policy</a>
							.
							<a href="https://www.food.com/" class="svelte-arj5l">Food.com</a>
							and
							<a
								href="https://www.wbdprivacy.com/policycenter/affiliates/"
								class="svelte-arj5l">its affiliates</a>
							may use your email address to provide updates, ads, and
							offers.
						</div>
						<form class="form svelte-arj5l" method="POST">
							<div class="input-wrapper svelte-arj5l">
								<input
									name="email"
									placeholder="example@example.com"
									class="svelte-arj5l" />
								<input
									type="hidden"
									name="utmSource"
									value="FOODCOM_PUMPKIN-MARBLE-CHEESECAKE-RECIPE" />
							</div>
							<button
								class="newsletter-submit button button--primary svelte-arj5l"
								type="submit">
								<svg
									width="24"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										fill-rule="evenodd"
										clip-rule="evenodd"
										d="M23.8612 3.03746C23.7717 2.84162 23.6537 2.65413 23.5114 2.475C23.3323 2.33272 23.144 2.21996 22.9482 2.13045C22.7515 2.04169 22.5272 2.00012 22.2778 2.00012H1.70779C1.45752 2.00012 1.23404 2.04169 1.0382 2.13045C0.841495 2.21996 0.654008 2.33455 0.475735 2.47682C0.332602 2.65595 0.219467 2.84253 0.130705 3.03837C0.0411936 3.23507 0 3.45765 0 3.70706V20.8487C0 21.099 0.0411936 21.3225 0.130705 21.5183C0.219467 21.715 0.334209 21.9025 0.477342 22.0808C0.655615 22.2239 0.842299 22.3439 1.039 22.4326C1.23484 22.5222 1.45752 22.5701 1.70779 22.5701H22.2778C22.5272 22.5701 22.7507 22.5222 22.9474 22.4326C23.1432 22.3439 23.3307 22.2257 23.5098 22.0826C23.6521 21.9043 23.7717 21.7159 23.8612 21.5192C23.95 21.3234 23.9983 21.099 23.9983 20.8487V3.70706C23.9983 3.45765 23.95 3.23416 23.8612 3.03746ZM15.6774 12.1337L22.2842 5.99933V18.5215L15.6774 12.1337ZM22.2842 3.75655L12.0234 13.2367L1.76548 3.71429H22.2842V3.75655ZM1.71417 5.94956L8.37226 12.1345L1.71417 18.5735V5.94956ZM11.4035 14.9563C11.6178 15.0634 11.8321 15.117 12.0464 15.117C12.2606 15.117 12.4565 15.0634 12.6356 14.9563L14.446 13.2782L22.276 20.856H1.70779L9.59317 13.2782L11.4035 14.9563Z"
										fill="currentColor"></path>
								</svg>
								<span
									class="button__text"
									data-svelte-h="svelte-17h8ftg">Sign Up</span>
							</button>
						</form>
						<div
							class="privacy svelte-arj5l"
							data-svelte-h="svelte-344d15">
							To withdraw your consent or to learn more about your
							rights, see the
							<a
								href="https://www.wbdprivacy.com/policycenter/b2c/"
								class="svelte-arj5l">Privacy Policy</a>
							.
						</div>
					</div>
				</div>
				<div
					class="layout__item reviewFeed conversation svelte-1r658j4"
					id="reviews">
					<div class="conversation__review svelte-1f82czh">
						<div class="conversation__review-header svelte-1f82czh">
							<h2 class="conversation__review__title svelte-1f82czh">
								Reviews
							</h2>
							<div class="review-buttons-wrapper svelte-1f82czh">
								<div class="conversation__sort svelte-1f82czh">
									<select
										aria-label="Select the order of user reviews"
										data-track="sortOptions"
										class="conversation__sort-list svelte-1f82czh">
										<option
											class="conversation__sort-option"
											value="-like"
											data-svelte-h="svelte-1nvmymk">
											MOST POPULAR
										</option>
										<option
											class="conversation__sort-option"
											value="-time"
											data-svelte-h="svelte-138ma3s">
											MOST RECENT
										</option>
									</select>
								</div>
								<button
									class="write-a-review button--primary svelte-1f82czh"
									aria-haspopup="dialog"
									aria-expanded="false"
									aria-controls="write-a-review">
									<svg
										width="16"
										height="12"
										viewBox="0 0 27 22"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M0.964223 4.23141H14.4614C14.994 4.23141 15.4256 4.66303 15.4256 5.19551C15.4256 5.72806 14.994 6.15961 14.4614 6.15961H0.964223C0.431737 6.15961 0 5.72794 0 5.19551C0 4.66291 0.431677 4.23141 0.964223 4.23141ZM0.964042 8.08782H10.6052C11.1377 8.08782 11.5692 8.51944 11.5692 9.05192C11.5692 9.58447 11.1376 10.016 10.6052 10.016H0.964042C0.431556 10.016 0 9.58435 0 9.05192C0 8.51932 0.431617 8.08782 0.964042 8.08782ZM0.964163 11.9442H6.74866C7.28163 11.9442 7.71282 12.3758 7.71282 12.9083C7.71282 13.4409 7.28114 13.8724 6.74866 13.8724H0.964163C0.431195 13.8724 0 13.4408 0 12.9083C0 12.3757 0.431677 11.9442 0.964163 11.9442ZM0.964103 15.8006H4.21801C4.75025 15.8006 5.18205 16.2323 5.18205 16.7647C5.18205 17.2973 4.75043 17.7288 4.21801 17.7288H0.964103C0.431797 17.7288 0 17.2972 0 16.7647C0 16.2321 0.431617 15.8006 0.964103 15.8006ZM4.82063 0.375H18.3178C18.8504 0.375 19.2821 0.806617 19.2821 1.3391C19.2821 1.87165 18.8504 2.3032 18.3178 2.3032H4.82063C4.28815 2.3032 3.85641 1.87153 3.85641 1.3391C3.85641 0.806496 4.28809 0.375 4.82063 0.375ZM19.9874 7.56558L10.3088 17.2121L9.88205 19.414L12.0625 18.9645L21.7405 9.31862L19.9874 7.56558ZM21.3531 6.20439L23.1062 7.95743L24.6071 6.46138C24.7302 6.33876 24.7926 6.18908 24.7926 6.01657C24.7926 5.84405 24.7303 5.69462 24.6076 5.5723L23.7526 4.72003C23.6296 4.59747 23.4723 4.53269 23.2975 4.53269C23.1227 4.53269 22.9653 4.59747 22.8422 4.72021L21.3531 6.20439ZM8.81569 16.1264C8.85359 16.043 8.90078 15.9546 8.94862 15.8775L9.04708 15.7192L21.7552 3.05322C22.2403 2.5696 22.8854 2.3032 23.5717 2.3032C24.2578 2.3032 24.9027 2.56948 25.3879 3.0531L26.243 3.9053C26.7278 4.3885 26.9949 5.03131 26.9949 5.71522C26.9949 6.39925 26.7276 7.04225 26.2425 7.52581L13.5449 20.1813L13.4043 20.2726C13.3073 20.3357 13.1955 20.3958 13.0894 20.4418L12.9366 20.5082L8.30315 21.4635C7.97711 21.5307 7.76416 21.3204 7.82737 20.9942L8.73748 16.2988L8.81569 16.1264Z"
											fill="currentColor"></path>
									</svg>
									<span
										class="button__text"
										data-svelte-h="svelte-1ba5e26">Write A Review</span>
								</button>
							</div>
						</div>
						<div class="conversation__posts svelte-1f82czh">
							<ol class="conversation__posts-list svelte-1f82czh">
								<li class="conversation__post svelte-1f82czh">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/18391"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/taco.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/taco.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__rating svelte-omstw2">
													<div class="five-star-rating svelte-1n6w264">
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358310"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358310')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358311"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358311')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358312"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358312')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358313"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358313')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358314"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358314')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
													</div>
												</div>
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="Great recipe .. First time I made cheesecake, and it turned out great .. thanks"
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																Great recipe .. First time I made
																cheesecake, and it turned out great ..
																thanks
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="post__menu svelte-omstw2">
												<div class="post__report svelte-omstw2">
													<button
														class="post__report-opener svelte-omstw2">
														<svg
															width="16"
															height="16"
															viewBox="0 0 24 24"
															version="1.1"
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink">
															<title>
																icons / ellipsis / ellipsis-horizontal
															</title>
															<defs>
																<path
																	d="M12.0000005,10 C10.674517,10 9.60000038,11.0745166 9.60000038,12.4000001 C9.60000038,13.7254835 10.674517,14.8000002 12.0000005,14.8000002 C13.3254839,14.8000002 14.4000006,13.7254835 14.4000006,12.4000001 C14.4000006,11.0745166 13.3254839,10 12.0000005,10 Z M2.4000001,10 C1.07451664,10 8.8817842e-16,11.0745166 0,12.4000001 C0,13.7254835 1.07451664,14.8000002 2.4000001,14.8000002 C3.72548355,14.8000002 4.80000019,13.7254835 4.80000019,12.4000001 C4.80000019,11.0745166 3.72548355,10 2.4000001,10 Z M21.6000009,10 C20.2745174,10 19.2000008,11.0745166 19.2000008,12.4000001 C19.2000008,13.7254835 20.2745174,14.8000002 21.6000009,14.8000002 C22.9254843,14.8000002 24.000001,13.7254835 24.000001,12.4000001 C24.000001,11.0745166 22.9254843,10 21.6000009,10 Z"
																	id="path-ellipsis-horizontal"></path>
															</defs>
															<g
																id="icons-/-ellipsis-/-ellipsis-horizontal"
																stroke="none"
																stroke-width="1"
																fill="none"
																fill-rule="evenodd">
																<mask
																	id="mask-ellipsis-horizontal"
																	fill="white">
																	<use
																		xlink:href="#path-ellipsis-horizontal"></use>
																</mask>
																<use
																	id="Mask"
																	fill="currentColor"
																	xlink:href="#path-ellipsis-horizontal"></use>
																<g
																	id="Group"
																	mask="url(#mask-ellipsis-horizontal)"
																	fill="currentColor">
																	<g id="color-/-primary-/-black">
																		<rect
																			id="Rectangle"
																			x="0"
																			y="0"
																			width="24"
																			height="24"></rect>
																	</g>
																</g>
															</g>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/18391"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">najwa
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
														<span
															class="recipe-likes__count caption svelte-omstw2">5
														</span>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
								<li class="conversation__post svelte-1f82czh">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/9690"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/pop.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/pop.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="This went fast at a recipe exchange. This one I enjoyed the most"
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																<!-- HTML_TAG_START -->
																<!-- HTML_TAG_END -->
																This went fast at a recipe exchange.
																This one I enjoyed the most
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="post__menu svelte-omstw2">
												<div class="post__report svelte-omstw2">
													<button
														class="post__report-opener svelte-omstw2">
														<svg
															width="16"
															height="16"
															viewBox="0 0 24 24"
															version="1.1"
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink">
															<title>
																icons / ellipsis / ellipsis-horizontal
															</title>
															<defs>
																<path
																	d="M12.0000005,10 C10.674517,10 9.60000038,11.0745166 9.60000038,12.4000001 C9.60000038,13.7254835 10.674517,14.8000002 12.0000005,14.8000002 C13.3254839,14.8000002 14.4000006,13.7254835 14.4000006,12.4000001 C14.4000006,11.0745166 13.3254839,10 12.0000005,10 Z M2.4000001,10 C1.07451664,10 8.8817842e-16,11.0745166 0,12.4000001 C0,13.7254835 1.07451664,14.8000002 2.4000001,14.8000002 C3.72548355,14.8000002 4.80000019,13.7254835 4.80000019,12.4000001 C4.80000019,11.0745166 3.72548355,10 2.4000001,10 Z M21.6000009,10 C20.2745174,10 19.2000008,11.0745166 19.2000008,12.4000001 C19.2000008,13.7254835 20.2745174,14.8000002 21.6000009,14.8000002 C22.9254843,14.8000002 24.000001,13.7254835 24.000001,12.4000001 C24.000001,11.0745166 22.9254843,10 21.6000009,10 Z"
																	id="path-ellipsis-horizontal"></path>
															</defs>
															<g
																id="icons-/-ellipsis-/-ellipsis-horizontal"
																stroke="none"
																stroke-width="1"
																fill="none"
																fill-rule="evenodd">
																<mask
																	id="mask-ellipsis-horizontal"
																	fill="white">
																	<use
																		xlink:href="#path-ellipsis-horizontal"></use>
																</mask>
																<use
																	id="Mask"
																	fill="currentColor"
																	xlink:href="#path-ellipsis-horizontal"></use>
																<g
																	id="Group"
																	mask="url(#mask-ellipsis-horizontal)"
																	fill="currentColor">
																	<g id="color-/-primary-/-black">
																		<rect
																			id="Rectangle"
																			x="0"
																			y="0"
																			width="24"
																			height="24"></rect>
																	</g>
																</g>
															</g>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/9690"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">Cheryl E
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
														<span
															class="recipe-likes__count caption svelte-omstw2">5
														</span>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
								<li class="conversation__post svelte-1f82czh">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/1803157521"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/drink.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/drink.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__rating svelte-omstw2">
													<div class="five-star-rating svelte-1n6w264">
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358315"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358315')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358316"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358316')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358317"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358317')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358318"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358318')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358319"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358319')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
													</div>
												</div>
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="Love, love, love this recipe.  I make it all the time, especially in the Fall.  I don't know anyone who doesn't love it too.  I add more pumpkin pie spices though..."
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																<!-- HTML_TAG_START -->
																<!-- HTML_TAG_END -->
																Love, love, love this recipe. I make it
																all the time, especially in the Fall. I
																don't know anyone who doesn't love it
																too. I add more pumpkin pie spices
																though...
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="post__menu svelte-omstw2">
												<div class="post__report svelte-omstw2">
													<button
														class="post__report-opener svelte-omstw2">
														<svg
															width="16"
															height="16"
															viewBox="0 0 24 24"
															version="1.1"
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink">
															<title>
																icons / ellipsis / ellipsis-horizontal
															</title>
															<defs>
																<path
																	d="M12.0000005,10 C10.674517,10 9.60000038,11.0745166 9.60000038,12.4000001 C9.60000038,13.7254835 10.674517,14.8000002 12.0000005,14.8000002 C13.3254839,14.8000002 14.4000006,13.7254835 14.4000006,12.4000001 C14.4000006,11.0745166 13.3254839,10 12.0000005,10 Z M2.4000001,10 C1.07451664,10 8.8817842e-16,11.0745166 0,12.4000001 C0,13.7254835 1.07451664,14.8000002 2.4000001,14.8000002 C3.72548355,14.8000002 4.80000019,13.7254835 4.80000019,12.4000001 C4.80000019,11.0745166 3.72548355,10 2.4000001,10 Z M21.6000009,10 C20.2745174,10 19.2000008,11.0745166 19.2000008,12.4000001 C19.2000008,13.7254835 20.2745174,14.8000002 21.6000009,14.8000002 C22.9254843,14.8000002 24.000001,13.7254835 24.000001,12.4000001 C24.000001,11.0745166 22.9254843,10 21.6000009,10 Z"
																	id="path-ellipsis-horizontal"></path>
															</defs>
															<g
																id="icons-/-ellipsis-/-ellipsis-horizontal"
																stroke="none"
																stroke-width="1"
																fill="none"
																fill-rule="evenodd">
																<mask
																	id="mask-ellipsis-horizontal"
																	fill="white">
																	<use
																		xlink:href="#path-ellipsis-horizontal"></use>
																</mask>
																<use
																	id="Mask"
																	fill="currentColor"
																	xlink:href="#path-ellipsis-horizontal"></use>
																<g
																	id="Group"
																	mask="url(#mask-ellipsis-horizontal)"
																	fill="currentColor">
																	<g id="color-/-primary-/-black">
																		<rect
																			id="Rectangle"
																			x="0"
																			y="0"
																			width="24"
																			height="24"></rect>
																	</g>
																</g>
															</g>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/1803157521"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">hmontgomeryapl
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
														<span
															class="recipe-likes__count caption svelte-omstw2">1
														</span>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
								<li class="conversation__post svelte-1f82czh">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/102289"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/drink.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/drink.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__rating svelte-omstw2">
													<div class="five-star-rating svelte-1n6w264">
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358320"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358320')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358321"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358321')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358322"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358322')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358323"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358323')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358324"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358324')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
													</div>
												</div>
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="This cheesecake is the best!!!  It was extremely easy to make and the taste was outstanding.  I had to bake mine for a little over an hour but, otherwise, I followed the recipe exactly.  Thanks so much for posting this-- my husband and I ate half of it in one sitting alone!  : )"
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																<!-- HTML_TAG_START -->
																<!-- HTML_TAG_END -->
																This cheesecake is the best!!! It was
																extremely easy to make and the taste was
																outstanding. I had to bake mine for a
																little over an hour but, otherwise, I
																followed the recipe exactly. Thanks so
																much for posting this-- my husband and I
																ate half of it in one sitting alone! : )
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="post__menu svelte-omstw2">
												<div class="post__report svelte-omstw2">
													<button
														class="post__report-opener svelte-omstw2">
														<svg
															width="16"
															height="16"
															viewBox="0 0 24 24"
															version="1.1"
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink">
															<title>
																icons / ellipsis / ellipsis-horizontal
															</title>
															<defs>
																<path
																	d="M12.0000005,10 C10.674517,10 9.60000038,11.0745166 9.60000038,12.4000001 C9.60000038,13.7254835 10.674517,14.8000002 12.0000005,14.8000002 C13.3254839,14.8000002 14.4000006,13.7254835 14.4000006,12.4000001 C14.4000006,11.0745166 13.3254839,10 12.0000005,10 Z M2.4000001,10 C1.07451664,10 8.8817842e-16,11.0745166 0,12.4000001 C0,13.7254835 1.07451664,14.8000002 2.4000001,14.8000002 C3.72548355,14.8000002 4.80000019,13.7254835 4.80000019,12.4000001 C4.80000019,11.0745166 3.72548355,10 2.4000001,10 Z M21.6000009,10 C20.2745174,10 19.2000008,11.0745166 19.2000008,12.4000001 C19.2000008,13.7254835 20.2745174,14.8000002 21.6000009,14.8000002 C22.9254843,14.8000002 24.000001,13.7254835 24.000001,12.4000001 C24.000001,11.0745166 22.9254843,10 21.6000009,10 Z"
																	id="path-ellipsis-horizontal"></path>
															</defs>
															<g
																id="icons-/-ellipsis-/-ellipsis-horizontal"
																stroke="none"
																stroke-width="1"
																fill="none"
																fill-rule="evenodd">
																<mask
																	id="mask-ellipsis-horizontal"
																	fill="white">
																	<use
																		xlink:href="#path-ellipsis-horizontal"></use>
																</mask>
																<use
																	id="Mask"
																	fill="currentColor"
																	xlink:href="#path-ellipsis-horizontal"></use>
																<g
																	id="Group"
																	mask="url(#mask-ellipsis-horizontal)"
																	fill="currentColor">
																	<g id="color-/-primary-/-black">
																		<rect
																			id="Rectangle"
																			x="0"
																			y="0"
																			width="24"
																			height="24"></rect>
																	</g>
																</g>
															</g>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/102289"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">PattyKate
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
														<span
															class="recipe-likes__count caption svelte-omstw2">1
														</span>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
								<li class="conversation__post svelte-1f82czh">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/33072"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/burger.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/burger.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__rating svelte-omstw2">
													<div class="five-star-rating svelte-1n6w264">
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358325"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358325')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358326"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358326')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358327"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358327')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358328"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358328')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
														<svg
															width="24px"
															height="24px"
															viewBox="0 0 24 24"
															xmlns="http://www.w3.org/2000/svg">
															<linearGradient
																id="filling-116358329"
																x1="0"
																x2="100%"
																y1="0"
																y2="0">
																<stop
																	offset="100%"
																	stop-color="#9C1F1E"></stop>
																<stop
																	offset="0"
																	stop-opacity="0"></stop>
															</linearGradient>
															<use
																fill="url('#filling-116358329')"
																href="#star-body"></use>
															<use
																href="#star-outline"
																fill="#9C1F1E"></use>
														</svg>
														<svg style="display: none">
															<defs>
																<path
																	id="star-outline"
																	d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
																<path
																	id="star-body"
																	d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
															</defs>
														</svg>
													</div>
												</div>
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="This is *the* best!!!  Thanks for posting it!"
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																<!-- HTML_TAG_START -->
																<!-- HTML_TAG_END -->
																This is *the* best!!! Thanks for posting
																it!
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="post__menu svelte-omstw2">
												<div class="post__report svelte-omstw2">
													<button
														class="post__report-opener svelte-omstw2">
														<svg
															width="16"
															height="16"
															viewBox="0 0 24 24"
															version="1.1"
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink">
															<title>
																icons / ellipsis / ellipsis-horizontal
															</title>
															<defs>
																<path
																	d="M12.0000005,10 C10.674517,10 9.60000038,11.0745166 9.60000038,12.4000001 C9.60000038,13.7254835 10.674517,14.8000002 12.0000005,14.8000002 C13.3254839,14.8000002 14.4000006,13.7254835 14.4000006,12.4000001 C14.4000006,11.0745166 13.3254839,10 12.0000005,10 Z M2.4000001,10 C1.07451664,10 8.8817842e-16,11.0745166 0,12.4000001 C0,13.7254835 1.07451664,14.8000002 2.4000001,14.8000002 C3.72548355,14.8000002 4.80000019,13.7254835 4.80000019,12.4000001 C4.80000019,11.0745166 3.72548355,10 2.4000001,10 Z M21.6000009,10 C20.2745174,10 19.2000008,11.0745166 19.2000008,12.4000001 C19.2000008,13.7254835 20.2745174,14.8000002 21.6000009,14.8000002 C22.9254843,14.8000002 24.000001,13.7254835 24.000001,12.4000001 C24.000001,11.0745166 22.9254843,10 21.6000009,10 Z"
																	id="path-ellipsis-horizontal"></path>
															</defs>
															<g
																id="icons-/-ellipsis-/-ellipsis-horizontal"
																stroke="none"
																stroke-width="1"
																fill="none"
																fill-rule="evenodd">
																<mask
																	id="mask-ellipsis-horizontal"
																	fill="white">
																	<use
																		xlink:href="#path-ellipsis-horizontal"></use>
																</mask>
																<use
																	id="Mask"
																	fill="currentColor"
																	xlink:href="#path-ellipsis-horizontal"></use>
																<g
																	id="Group"
																	mask="url(#mask-ellipsis-horizontal)"
																	fill="currentColor">
																	<g id="color-/-primary-/-black">
																		<rect
																			id="Rectangle"
																			x="0"
																			y="0"
																			width="24"
																			height="24"></rect>
																	</g>
																</g>
															</g>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/33072"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">Neaner
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
														<span
															class="recipe-likes__count caption svelte-omstw2">1
														</span>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
							</ol>
							<div class="conversation__show-more link svelte-1f82czh">
								<span
									class="conversation__show-more__text svelte-1f82czh">see 18 more reviews</span>
								<span class="conversation__show-more__icon">
									<svg
										width="12"
										height="12"
										viewBox="0 0 25 24"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M12.0038 18.7296C12.2034 18.7359 12.405 18.6628 12.5573 18.5105L23.7869 7.28085C24.0797 6.98808 24.0797 6.51344 23.7869 6.22071C23.4942 5.92799 23.0196 5.92799 22.7268 6.22071L12.0038 16.9437L1.27963 6.21954C0.986911 5.92682 0.512266 5.92682 0.219543 6.21954C-0.0731809 6.51227 -0.0731809 6.98691 0.219543 7.27963L11.4504 18.5105C11.6027 18.6628 11.8043 18.7359 12.0038 18.7296Z"
											fill="currentColor"></path>
									</svg>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="layout__item ad ad-after-tweaks svelte-1r658j4">
					<div class="ad">
						<div
							class="ad__ad ad__ad--block_content"
							data-slot-type="dfp_block_content"></div>
						<div class="ad__label" data-svelte-h="svelte-197t4h7">
							Advertisement
						</div>
					</div>
				</div>
				<div
					class="layout__item tweakFeed conversation svelte-1r658j4"
					id="tweaks">
					<div class="conversation__review svelte-17p0kzl">
						<div class="conversation__review-header svelte-17p0kzl">
							<h3 data-svelte-h="svelte-11g4uex">Tweaks</h3>
							<div class="review-buttons-wrapper svelte-17p0kzl">
								<div class="conversation__sort svelte-17p0kzl">
									<select
										aria-label="Select the order of user tweaks"
										data-track="sortOptions"
										class="conversation__sort-list svelte-17p0kzl">
										<option
											class="conversation__sort-option"
											value="-like"
											data-svelte-h="svelte-1nvmymk">
											MOST POPULAR
										</option>
										<option
											class="conversation__sort-option"
											value="-time"
											data-svelte-h="svelte-138ma3s">
											MOST RECENT
										</option>
									</select>
								</div>
							</div>
						</div>
						<div class="conversation__posts svelte-17p0kzl">
							<ol class="conversation__posts-list svelte-17p0kzl">
								<li class="conversation__post svelte-17p0kzl">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/1663041"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/drink.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/drink.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="I've been making cheesecakes for years, but this was my first one with pumpkin and it was excellent.  The only change I made was substituting pumpkin pie spice for the cinnamon and nutmeg.  I also used a larger spring-form pan than the one specified so I decreased the baking time by about ten minutes.  I might decrease the amount of butter next time by about two tablespoons since the crumbs were really soaked with butter.  Flavor and texture were five stars!"
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																<!-- HTML_TAG_START -->
																<!-- HTML_TAG_END -->
																I've been making cheesecakes for years,
																but this was my first one with pumpkin
																and it was excellent. The only change I
																made was substituting pumpkin pie spice
																for the cinnamon and nutmeg. I also used
																a larger spring-form pan than the one
																specified so I decreased the baking time
																by about ten minutes. I might decrease
																the amount of butter next time by about
																two tablespoons since the crumbs were
																really soaked with butter. Flavor and
																texture were five stars!
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/1663041"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">Mary Christmas
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
								<li class="conversation__post svelte-17p0kzl">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/340503"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/taco.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/taco.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="I made this for my husbands birthday and he loved! (as did I :) ) I kind of overbaked it so it didn't look very 'marble-like', but it still tasted great! I made it gluten free by substituting GF Cinnamon Snaps for the regular gingersnaps and it worked great. I also used lowfat cream cheese. I think I will be making this for Thanksgiving!"
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																I made this for my husbands birthday and
																he loved! (as did I :) ) I kind of
																overbaked it so it didn't look very
																'marble-like', but it still tasted
																great! I made it gluten free by
																substituting GF Cinnamon Snaps for the
																regular gingersnaps and it worked great.
																I also used lowfat cream cheese. I think
																I will be making this for Thanksgiving!
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/340503"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">Lingering_Dream
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
								<li class="conversation__post svelte-17p0kzl">
									<div class="post svelte-omstw2">
										<div class="post__header svelte-omstw2">
											<div class="post__avatar svelte-omstw2">
												<a
													href="https://www.food.com/user/88717"
													class="user-avatar gradient-bg round-avatar svelte-omstw2"
													aria-label="Redirecting to user profile page">
													<img
														style="--aspect-ratio: 1/1"
														srcset="
                                      https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/pop.png 70w
                                    "
														src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_70,ar_1:1/v1/gk-static/gk/img/avatar/pop.png"
														sizes="70px 100vw"
														alt=""
														loading="lazy"
														width="24"
														height="24"
														class="svelte-kb6fq" />
												</a>
											</div>
											<div class="post__content">
												<div class="post__body">
													<div class="post__text svelte-omstw2">
														<div
															title="I love this cheesecake! I didn't have any gingersnaps, so used graham cracker crumbs instead. I also used the entire 15 oz can of pumpkin and used 1 1/2 t pumpkin pie spice instead of the cinnamon and nutmeg. Thanks for sharing the recipe."
															class="text-truncate svelte-1aswkii">
															<div
																class="text svelte-1aswkii truncated">
																<!-- HTML_TAG_START -->
																<!-- HTML_TAG_END -->
																I love this cheesecake! I didn't have
																any gingersnaps, so used graham cracker
																crumbs instead. I also used the entire
																15 oz can of pumpkin and used 1 1/2 t
																pumpkin pie spice instead of the
																cinnamon and nutmeg. Thanks for sharing
																the recipe.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="post__footer svelte-omstw2">
											<div class="post__meta">
												<div class="post__author caption svelte-omstw2">
													<a
														href="https://www.food.com/user/88717"
														class="post__author-link caption svelte-omstw2"
														aria-label="Redirecting to user profile page">Ms. Cooky
													</a>
												</div>
											</div>
											<div class="post__footer--actions svelte-omstw2">
												<button
													class="post__reply-action svelte-omstw2"
													data-svelte-h="svelte-doli66">
													<div
														class="post__reply-opener-title caption svelte-omstw2">
														Reply
													</div>
												</button>
												<div class="post__likes">
													<button
														class="recipe-likes button button--action svelte-omstw2"
														aria-label="Like this post">
														<svg
															width="16"
															height="14"
															viewBox="0 0 24 21"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
															aria-hidden="true">
															<path
																fill-rule="evenodd"
																clip-rule="evenodd"
																d="M13.1602 1.91602C14.4168 0.637969 15.9417 0 17.7352 0C19.5267 0 21.0617 0.637969 22.3372 1.91602C23.1865 2.76802 23.7134 3.75905 23.9171 4.88808C24.1207 6.01795 23.949 7.24997 23.4041 8.58305C22.8592 9.91594 21.94 11.231 20.6455 12.527L12.3569 20.861C12.2272 20.954 12.1073 21 11.9965 21C11.8478 21 11.7281 20.954 11.6353 20.861L3.34659 12.527C2.05307 11.231 1.13287 9.91594 0.587996 8.58305C0.0430269 7.24997 -0.122629 6.01795 0.0889643 4.88808C0.301542 3.75905 0.832496 2.76802 1.68281 1.91602C2.93934 0.657047 4.46437 0.0279844 6.25781 0.0279844C8.04928 0.0279844 9.57431 0.657047 10.8319 1.91602C11.2929 2.37998 11.6822 2.89805 11.9965 3.47198C12.3099 2.89805 12.6982 2.37998 13.1602 1.91602ZM21.2741 2.97506C20.2837 1.98267 19.1257 1.5 17.7345 1.5C16.3467 1.5 15.2001 1.98009 14.229 2.96766L14.2223 2.9745C13.8611 3.33717 13.5549 3.74639 13.3123 4.19081L11.9978 6.59841L10.6801 4.1925C10.4371 3.74878 10.1302 3.33886 9.76786 2.97412C8.79497 2.00105 7.64653 1.52798 6.25702 1.52798C4.8652 1.52798 3.71597 2.00152 2.74373 2.97563C2.10581 3.61477 1.71938 4.33106 1.5623 5.16558C1.40569 6.00187 1.54467 6.96113 1.97564 8.01544C2.44214 9.15666 3.2603 10.318 4.40747 11.4674L4.40836 11.4683L4.4093 11.4693L11.9953 19.0967L19.5811 11.4693L19.5823 11.4681L19.5834 11.467C20.7296 10.3194 21.5477 9.15816 22.0149 8.01539C22.4482 6.9555 22.5912 5.99278 22.4401 5.15405C22.2905 4.32487 21.9091 3.612 21.2741 2.97506Z"
																fill="currentColor"></path>
														</svg>
													</button>
												</div>
											</div>
										</div>
										<div class="post__replies svelte-omstw2">
											<div class="post__activity svelte-omstw2"></div>
										</div>
									</div>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="layout__item contributor svelte-1r658j4">
					<div class="recipe-contributor svelte-1b9af2d">
						<h2
							class="recipe-contributor__title caption-bold svelte-1b9af2d"
							data-svelte-h="svelte-1axv73l">
							RECIPE SUBMITTED BY
						</h2>
						<div class="recipe-contributor__info svelte-1b9af2d">
							<div class="recipe-contributor__user svelte-1b9af2d">
								<div
									class="recipe-contributor__avatar-follow svelte-1b9af2d">
									<div
										class="recipe-contributor__avatar svelte-1b9af2d">
										<a
											href="https://www.food.com/user/9690"
											class="user-avatar contributor-avatar svelte-1b9af2d">
											<img
												style="--aspect-ratio: 1/1"
												srcset="
                                  https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_112,ar_1:1/v1/gk-static/gk/img/avatar/pop.png 112w
                                "
												src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_112,ar_1:1/v1/gk-static/gk/img/avatar/pop.png"
												sizes="112px 100vw"
												alt=""
												loading="eager"
												class="svelte-kb6fq" />
										</a>
									</div>
									<div class="recipe-contributor__follow">
										<div
											class="recipe-contributor__name--location svelte-1b9af2d">
											<a
												class="recipe-contributor__name link svelte-1b9af2d"
												href="https://www.food.com/user/9690">Cheryl E</a>
											<div
												class="recipe-contributor__location svelte-1b9af2d">
												<span
													class="recipe-contributor__location-icon svelte-1b9af2d">
													<svg
														width="12"
														height="16"
														viewBox="0 0 12 16"
														fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															fill-rule="evenodd"
															clip-rule="evenodd"
															d="M3.41286 12.287C4.69696 15.0181 4.88438 15.4152 4.92814 15.4781C5.15523 15.8045 5.54333 16 5.96097 16C6.41925 16 6.84055 15.7644 7.05289 15.3834C7.55997 14.3648 8.03328 13.327 8.50129 12.287C8.58302 12.1054 8.6646 11.9237 8.74616 11.742C9.32694 10.4483 9.90722 9.15576 10.5418 7.89679C10.7132 7.55666 11.2373 6.4198 11.2373 5.28898C11.2373 2.36796 8.87094 0 5.9519 0C3.03286 0 0.666504 2.36796 0.666504 5.28898C0.666504 6.2153 0.905239 7.10811 1.35269 7.89679C2.03661 9.3579 2.77625 10.933 3.41286 12.287ZM5.96987 1.07865C3.63663 1.07865 1.74516 2.96986 1.74516 5.30279C1.74516 6.11444 2.01468 6.78843 2.35214 7.50694C2.62903 8.09647 2.90558 8.68618 3.18212 9.2759C4.02995 11.0838 4.87779 12.8918 5.73568 14.6949C5.74314 14.7117 5.7501 14.7287 5.75697 14.7454C5.80058 14.8515 5.84044 14.9485 5.97896 14.9485C6.11709 14.9485 6.15903 14.8514 6.20456 14.746C6.21187 14.7291 6.21928 14.7119 6.22719 14.6949L9.57465 7.50694C9.97806 6.84895 10.1946 6.09245 10.1946 5.30279C10.1946 2.96986 8.30312 1.07865 5.96987 1.07865ZM5.98785 3.12809C7.19916 3.12809 8.18111 4.11005 8.18111 5.32135C8.18111 6.53265 7.19916 7.51461 5.98785 7.51461C4.77655 7.51461 3.79459 6.53265 3.79459 5.32135C3.79459 4.11005 4.77655 3.12809 5.98785 3.12809ZM5.96987 4.20674C5.34437 4.20674 4.83729 4.71382 4.83729 5.33933C4.83729 5.96484 5.34437 6.47191 5.96987 6.47191C6.59538 6.47191 7.10246 5.96484 7.10246 5.33933C7.10246 4.71382 6.59538 4.20674 5.96987 4.20674Z"
															fill="currentColor"></path>
													</svg>
												</span>
												Canada
											</div>
										</div>
										<div class="follow-button svelte-lvsy16">
											<button
												class="button button--primary svelte-lvsy16"
												aria-label="Follow Recipe Author">
												<div
													class="follow-button__controls svelte-lvsy16"
													aria-hidden="true">
													<span class="follow-icon svelte-lvsy16">
														<svg
															width="16"
															height="16"
															viewBox="0 0 24 24"
															version="1.1"
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink">
															<title>icons / following</title>
															<defs>
																<path
																	d="M11.0669457,0.0139918167 C14.3531864,0.0139918167 17.0271312,2.75518794 17.0271312,6.12420458 C17.0271312,6.94531819 16.8704658,7.74288571 16.5619424,8.49471945 C16.3578249,8.99054596 16.0909282,9.45609083 15.7684915,9.87997722 C15.4765962,10.263507 14.9291156,10.3370885 14.5462751,10.0455357 C14.1630387,9.75341694 14.0888913,9.20551732 14.381126,8.82176118 C14.6116561,8.51888816 14.8026521,8.18545049 14.9486281,7.83073077 C15.1701654,7.29098172 15.2826591,6.71664935 15.2826591,6.12420458 C15.2826591,3.71763475 13.3914192,1.75979924 11.0669457,1.75979924 C8.74247225,1.75979924 6.85117579,3.71763475 6.85117579,6.12420458 C6.85117579,6.86477469 7.03317914,7.59589239 7.37772992,8.23837261 C7.50594669,8.47756929 7.65684319,8.70538912 7.8260079,8.91543617 C7.84523759,8.93932188 7.85858525,8.96581124 7.87515672,8.99082897 L7.87515672,8.99082897 L9.22887026,10.6393955 L7.2721363,11.7334401 C6.6005677,12.1178189 5.98708406,12.588005 5.43089359,13.1443382 C4.87442033,13.7012375 4.40459379,14.320398 4.02113117,15.0015368 C3.63704641,15.6832417 3.33989116,16.4176989 3.12909984,17.2044555 C2.91774293,17.9917782 2.81277146,18.8076279 2.81277146,19.6520046 C2.81277146,19.9017291 2.98957148,20.1658869 3.34486826,20.4437422 C3.6995429,20.7225031 4.18362204,20.9864345 4.79795404,21.2357628 C5.60362145,21.5430507 6.55752713,21.7827568 7.66091536,21.9556169 C8.76368146,22.1284203 9.91938576,22.2148504 11.1279717,22.2148504 C12.3168189,22.2148504 13.4678855,22.1284203 14.5805492,21.9556169 C15.6929302,21.7827568 16.6523785,21.5430507 17.4579894,21.2357628 C17.7429281,21.1162211 17.9959116,20.9928305 18.2244056,20.8662702 C18.2718011,20.828121 18.3235516,20.793481 18.3802792,20.7650106 C18.8376064,20.5345306 19.3551113,20.1580194 19.4455474,19.9901402 C19.6711569,19.5699895 20.197711,19.397186 20.6209904,19.6177043 C21.0443263,19.8373736 21.2184681,20.3451429 21.0053579,20.7719726 C20.9024791,20.9776613 20.7486416,21.1706148 20.5724637,21.3469276 C20.4651734,21.4661863 20.344196,21.5782567 20.205516,21.6821199 C19.5246153,22.1910213 18.8291227,22.5797017 18.1194907,22.8482744 C17.1989541,23.2128993 16.1343081,23.4866227 14.9259484,23.6687654 C13.7173624,23.8515307 12.4514833,23.942319 11.1279717,23.942319 C9.78506073,23.942319 8.51392174,23.8515307 7.31551622,23.6687654 C6.11648856,23.4866227 5.05670647,23.2128993 4.13622651,22.8482744 C3.40674261,22.5797017 2.70197451,22.1910213 2.02135664,21.6821199 C1.3401732,21.1737845 1.00003393,20.5065696 1.00003393,19.6808146 C1.00003393,18.6828223 1.12446133,17.7084326 1.37388171,16.7581551 C1.62307585,15.8077643 1.99692363,14.9108051 2.49616029,14.0658058 C2.97531889,13.2406169 3.54632753,12.501575 4.20805506,11.8486802 C4.86978258,11.1962947 5.59344102,10.6393955 6.38044432,10.1785486 L6.38044432,10.1785486 L6.49559622,10.1209285 L6.52523256,10.0679498 C6.50634222,10.048196 6.48485022,10.0327439 6.46765661,10.0109524 C6.23073553,9.71679596 6.01966142,9.39818781 5.84054252,9.06384452 C5.36053556,8.16824373 5.10670366,7.15162957 5.10670366,6.12420458 C5.10670366,2.75518794 7.78036567,0.0139918167 11.0669457,0.0139918167 Z M17.9038179,9.86538462 C18.4066191,9.86538462 18.8146717,10.2744716 18.8146717,10.7770981 L18.8146717,10.7770981 L18.8146717,13.2807355 L21.3199719,13.2807355 C21.8224905,13.2807355 22.2307692,13.689766 22.2307692,14.192449 C22.2307692,14.6947929 21.8224905,15.1038799 21.3199719,15.1038799 L21.3199719,15.1038799 L18.8146717,15.1038799 L18.8146717,17.6077998 C18.8146717,18.1101438 18.4066191,18.5192308 17.9038179,18.5192308 C17.4014124,18.5192308 16.9930771,18.1101438 16.9930771,17.6077998 L16.9930771,17.6077998 L16.9930771,15.1038799 L14.4877204,15.1038799 C13.9852583,15.1038799 13.5769231,14.6947929 13.5769231,14.192449 C13.5769231,13.689766 13.9852583,13.2807355 14.4877204,13.2807355 L14.4877204,13.2807355 L16.9930771,13.2807355 L16.9930771,10.7770981 C16.9930771,10.2744716 17.4014124,9.86538462 17.9038179,9.86538462 Z"
																	id="path-following"></path>
															</defs>
															<g
																id="icons-/-following"
																stroke="none"
																stroke-width="1"
																fill="none"
																fill-rule="evenodd">
																<mask id="mask-following" fill="white">
																	<use
																		xlink:href="#path-following"></use>
																</mask>
																<use
																	id="Mask"
																	fill="currentColor"
																	xlink:href="#path-following"></use>
																<g
																	id="Group"
																	mask="url(#mask-following)"
																	fill="currentColor">
																	<g id="color-/-primary-/-black">
																		<rect
																			id="Rectangle"
																			x="0"
																			y="0"
																			width="24"
																			height="24"></rect>
																	</g>
																</g>
															</g>
														</svg>
													</span>
													Follow Me
												</div>
											</button>
										</div>
									</div>
								</div>
								<ul
									class="recipe-contributor__statistics svelte-1b9af2d">
									<li class="svelte-1b9af2d">
										<a
											href="https://www.food.com/user/9690?filter=followers"
											class="link--plain svelte-1b9af2d">
											<span
												class="recipe-contributor__count svelte-1b9af2d">17</span>
											Followers
										</a>
									</li>
									<li class="svelte-1b9af2d">
										<a
											href="https://www.food.com/user/9690?filter=recipes"
											class="link--plain svelte-1b9af2d">
											<span
												class="recipe-contributor__count svelte-1b9af2d">49</span>
											Recipes
										</a>
									</li>
								</ul>
							</div>
							<div class="recipe-contributor__bio svelte-1b9af2d"></div>
						</div>
					</div>
				</div>
				<div class="right-rail svelte-1r658j4">
					<div
						class="layout__item ad ad-after-directions ad-rr-top svelte-1r658j4">
						<div class="ad">
							<div
								class="ad__ad ad__ad--foodcom_inline"
								data-slot-type="dfp_foodcom_inline"></div>
							<div class="ad__label" data-svelte-h="svelte-197t4h7">
								Advertisement
							</div>
						</div>
						<div
							id="chicory-aisle-slot"
							class="hide-on-mobile"
							chicory-aisle-type="vertical"></div>
					</div>
					<div
						class="layout__item ad ad-after-sweeps-promo sticky svelte-1r658j4">
						<div class="ad sticky">
							<div
								class="ad__ad ad__ad--bigbox_adsapalooza"
								data-slot-type="dfp_bigbox_adsapalooza"></div>
							<div class="ad__label" data-svelte-h="svelte-197t4h7">
								Advertisement
							</div>
						</div>
					</div>
				</div>
				<div class="right-rail-bottom svelte-1r658j4">
					<div
						class="layout__item ad ad-after-contributor sticky svelte-1r658j4">
						<div class="ad sticky">
							<div
								class="ad__ad ad__ad--foodcom_inline"
								data-slot-type="dfp_foodcom_inline"></div>
							<div class="ad__label" data-svelte-h="svelte-197t4h7">
								Advertisement
							</div>
						</div>
					</div>
				</div>
				<div class="layout__item relevant svelte-1r658j4">
					<div class="recipe-suggestions svelte-1b8y15n">
						<h2
							class="recipe-suggestions__title svelte-1b8y15n"
							data-svelte-h="svelte-f8i7g6">
							YOU &#39;LL ALSO LOVE
						</h2>
						<div class="recipe-suggestions__cards svelte-1b8y15n">
							<div
								class="recipe-card recipe-suggestions__item svelte-ul9f6a">
								<a
									href="https://www.food.com/ideas/pumpkin-recipes-6733"
									target="_blank"
									class="svelte-ul9f6a">
									<div
										class="recipe-card__img gradient-bg svelte-ul9f6a">
										<img
											style="--aspect-ratio: 4/3"
											srcset="
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 328w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_178,ar_4:3/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg 178w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_80,ar_4:3/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg   80w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_50,ar_4:3/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg   50w
                              "
											src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/12/08/0/n9Pl9UFMQIuMplNpzfBj_DSC05555-2.jpg"
											sizes="(min-width: 768px) 178px,
                            100vw"
											alt="45 Sweet &amp; Savory Pumpkin Recipes t..."
											loading="eager"
											class="svelte-kb6fq" />
									</div>
								</a>
								<div class="recipe-card__description svelte-ul9f6a">
									<div
										class="recipe-card__description-title svelte-ul9f6a">
										<a
											href="https://www.food.com/ideas/pumpkin-recipes-6733"
											target="_blank"
											title="45 Sweet &amp; Savory Pumpkin Recipes t..."
											class="svelte-ul9f6a">45 Sweet &amp;Savory Pumpkin Recipes t...
										</a>
									</div>
									<div
										class="recipe-card__description-meta svelte-ul9f6a">
										<a
											href="https://www.food.com/ideas/pumpkin-recipes-6733"
											target="_blank"
											class="svelte-ul9f6a">46 photos
										</a>
									</div>
								</div>
							</div>
							<div
								class="recipe-card recipe-suggestions__item svelte-ul9f6a">
								<a
									href="https://www.food.com/recipe/low-carb-marble-cheesecake-97477"
									target="_blank"
									class="svelte-ul9f6a">
									<div
										class="recipe-card__img gradient-bg svelte-ul9f6a">
										<img
											style="--aspect-ratio: 4/3"
											srcset="
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/97/47/7/picEQwlV3.jpg 328w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_178,ar_4:3/v1/img/recipes/97/47/7/picEQwlV3.jpg 178w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_80,ar_4:3/v1/img/recipes/97/47/7/picEQwlV3.jpg   80w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_50,ar_4:3/v1/img/recipes/97/47/7/picEQwlV3.jpg   50w
                              "
											src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/97/47/7/picEQwlV3.jpg"
											sizes="(min-width: 768px) 178px,
                            100vw"
											alt="Low Carb Marble Cheesecake"
											loading="eager"
											class="svelte-kb6fq" />
									</div>
								</a>
								<div class="recipe-card__description svelte-ul9f6a">
									<div
										class="recipe-card__description-title svelte-ul9f6a">
										<a
											href="https://www.food.com/recipe/low-carb-marble-cheesecake-97477"
											target="_blank"
											title="Low Carb Marble Cheesecake"
											class="svelte-ul9f6a">Low Carb Marble Cheesecake
										</a>
									</div>
									<div
										class="recipe-card__description-author caption svelte-ul9f6a">
										by
										<a
											href="https://www.food.com/user/145448"
											target="_blank"
											class="caption svelte-ul9f6a">Julie in TX</a>
									</div>
								</div>
								<div class="recipe-card__rating svelte-ul9f6a">
									<a
										href="https://www.food.com/recipe/low-carb-marble-cheesecake-97477"
										target="_blank"
										class="svelte-ul9f6a">
										<div class="five-star-rating svelte-1n6w264">
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358330"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358330')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358331"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358331')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358332"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358332')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358333"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358333')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358334"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop offset="0%" stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358334')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<span class="count svelte-1n6w264">11</span>
										</div>
									</a>
								</div>
							</div>
							<div
								class="recipe-card recipe-suggestions__item svelte-ul9f6a">
								<a
									href="https://www.food.com/recipe/marble-cheesecake-6778"
									target="_blank"
									class="svelte-ul9f6a">
									<div
										class="recipe-card__img gradient-bg svelte-ul9f6a">
										<img
											style="--aspect-ratio: 4/3"
											srcset="
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/67/78/picmqyRrA.jpg 328w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_178,ar_4:3/v1/img/recipes/67/78/picmqyRrA.jpg 178w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_80,ar_4:3/v1/img/recipes/67/78/picmqyRrA.jpg   80w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_50,ar_4:3/v1/img/recipes/67/78/picmqyRrA.jpg   50w
                              "
											src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/67/78/picmqyRrA.jpg"
											sizes="(min-width: 768px) 178px,
                            100vw"
											alt="Marble Cheesecake"
											loading="eager"
											class="svelte-kb6fq" />
									</div>
								</a>
								<div class="recipe-card__description svelte-ul9f6a">
									<div
										class="recipe-card__description-title svelte-ul9f6a">
										<a
											href="https://www.food.com/recipe/marble-cheesecake-6778"
											target="_blank"
											title="Marble Cheesecake"
											class="svelte-ul9f6a">Marble Cheesecake
										</a>
									</div>
									<div
										class="recipe-card__description-author caption svelte-ul9f6a">
										by
										<a
											href="https://www.food.com/user/34879"
											target="_blank"
											class="caption svelte-ul9f6a">Barefoot Beachcomber</a>
									</div>
								</div>
								<div class="recipe-card__rating svelte-ul9f6a">
									<a
										href="https://www.food.com/recipe/marble-cheesecake-6778"
										target="_blank"
										class="svelte-ul9f6a">
										<div class="five-star-rating svelte-1n6w264">
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358335"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358335')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358336"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358336')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358337"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358337')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358338"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358338')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358339"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358339')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<span class="count svelte-1n6w264">5</span>
										</div>
									</a>
								</div>
							</div>
							<div
								class="recipe-card recipe-suggestions__item svelte-ul9f6a">
								<a
									href="https://www.food.com/recipe/new-york-style-marble-cheesecake-with-chocolate-crust-65010"
									target="_blank"
									class="svelte-ul9f6a">
									<div
										class="recipe-card__img gradient-bg svelte-ul9f6a">
										<img
											style="--aspect-ratio: 4/3"
											srcset="
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/65/01/0/pic4Y82aD.jpg 328w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_178,ar_4:3/v1/img/recipes/65/01/0/pic4Y82aD.jpg 178w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_80,ar_4:3/v1/img/recipes/65/01/0/pic4Y82aD.jpg   80w,
                                https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_50,ar_4:3/v1/img/recipes/65/01/0/pic4Y82aD.jpg   50w
                              "
											src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_55,w_328,ar_4:3/v1/img/recipes/65/01/0/pic4Y82aD.jpg"
											sizes="(min-width: 768px) 178px,
                            100vw"
											alt="New York  Style Marble Cheesecake With Chocolate Crust"
											loading="eager"
											class="svelte-kb6fq" />
									</div>
								</a>
								<div class="recipe-card__description svelte-ul9f6a">
									<div
										class="recipe-card__description-title svelte-ul9f6a">
										<a
											href="https://www.food.com/recipe/new-york-style-marble-cheesecake-with-chocolate-crust-65010"
											target="_blank"
											title="New York  Style Marble Cheesecake With Chocolate Crust"
											class="svelte-ul9f6a">New York Style Marble Cheesecake With Chocolate
											Crust
										</a>
									</div>
									<div
										class="recipe-card__description-author caption svelte-ul9f6a">
										by
										<a
											href="https://www.food.com/user/89881"
											target="_blank"
											class="caption svelte-ul9f6a">Monica in PA</a>
									</div>
								</div>
								<div class="recipe-card__rating svelte-ul9f6a">
									<a
										href="https://www.food.com/recipe/new-york-style-marble-cheesecake-with-chocolate-crust-65010"
										target="_blank"
										class="svelte-ul9f6a">
										<div class="five-star-rating svelte-1n6w264">
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358340"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358340')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358341"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358341')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358342"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358342')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358343"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358343')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<svg
												width="18px"
												height="18px"
												viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<linearGradient
													id="filling-116358344"
													x1="0"
													x2="100%"
													y1="0"
													y2="0">
													<stop
														offset="100%"
														stop-color="#9C1F1E"></stop>
													<stop offset="0" stop-opacity="0"></stop>
												</linearGradient>
												<use
													fill="url('#filling-116358344')"
													href="#star-body"></use>
												<use href="#star-outline" fill="#9C1F1E"></use>
											</svg>
											<svg style="display: none">
												<defs>
													<path
														id="star-outline"
														d="M19.1139718,23.7837042 C18.8750743,23.9209492 18.6074766,23.9870625 18.3306016,23.9870625 C17.9991016,23.9870625 17.6801172,23.8914844 17.4643985,23.7310781 L17.4643985,23.7310781 L11.9999922,20.203125 L6.56999223,23.7078281 C6.01161723,24.0974062 5.32536723,24.0974062 4.76699223,23.7078281 L4.803,23.731 L4.792,23.724 L4.787,23.72 L4.70308708,23.6641796 C4.25873309,23.3379793 4.03332071,22.8306275 4.07839248,22.2611407 L4.09742973,22.104375 L5.34374223,15.703125 L0.463632855,10.8645938 C0.0157891051,10.4128125 -0.10735152,9.79026562 0.0930859801,9.19260937 C0.105507855,9.15548438 0.119851605,9.1190625 0.13602348,9.0834375 C0.403726605,8.49384375 0.95042973,8.15625 1.59772661,8.15625 L1.59772661,8.15625 L7.73436723,8.15625 C7.73436723,8.15625 8.39690813,6.45665898 9.07597855,4.7147222 L9.27954955,4.19252804 C9.92166995,2.54538623 10.5204057,1.00959375 10.5218829,1.00603125 C10.7771641,0.3885 11.3267266,0 11.9992422,0 C12.6708204,0 13.2189297,0.385828125 13.4882735,1.02923437 L13.4882735,1.02923437 L16.2656172,8.13871875 L22.4007579,8.13871875 C23.0470235,8.13871875 23.592086,8.49126563 23.8623204,9.07776562 C23.8803204,9.11709375 23.896211,9.15735937 23.909711,9.19846875 C24.1067266,9.7965 23.9815235,10.4180156 23.5311485,10.86825 L23.5311485,10.86825 L18.7031172,15.65625 C18.7031172,15.65625 19.9039141,22.1200781 19.9052735,22.1277656 C20.0161797,22.7852344 19.7434141,23.4020156 19.1699922,23.7485625 L19.253711,23.6927813 L19.253711,23.6927813 L19.1699922,23.7485625 L19.23,23.707 Z M11.9943051,1.62711864 C11.668678,2.4620339 9.26994915,8.61559322 9.24411864,8.68174576 L9.24411864,8.68174576 L8.84018644,9.71786441 L1.6779661,9.71786441 L7.10084746,15.094678 L5.70594915,22.2594407 L11.9938475,18.2009492 L18.2807797,22.2598983 C18.1308814,21.4527966 17.1081864,15.9475932 17.0971017,15.8879492 L17.0971017,15.8879492 L16.9398814,15.0415932 L22.3257966,9.70032203 L15.1481186,9.70032203 Z"></path>
													<path
														id="star-body"
														d="M23.909711,9.19846875 C23.896211,9.15735938 23.8803204,9.11709375 23.8623204,9.07776563 C23.592086,8.49126563 23.0470235,8.13871875 22.4007579,8.13871875 L16.2656172,8.13871875 L13.4882735,1.02923437 C13.2189297,0.385828125 12.6708204,0 11.9992422,0 C11.3267266,0 10.7771641,0.3885 10.5218829,1.00603125 C10.5186954,1.01371875 7.73436723,8.15625 7.73436723,8.15625 L1.59772661,8.15625 C0.95042973,8.15625 0.403726605,8.49384375 0.13602348,9.0834375 C0.119851605,9.1190625 0.105507855,9.15548438 0.0930859801,9.19260937 C-0.10735152,9.79026563 0.0157891051,10.4128125 0.463632855,10.8645938 L5.34374223,15.703125 L4.09742973,22.104375 C3.98553911,22.7895938 4.25797661,23.4031406 4.82966411,23.7485625 L4.76699223,23.7078281 C5.32536723,24.0974063 6.01161723,24.0974063 6.56999223,23.7078281 L11.9999922,20.203125 L17.4643985,23.7310781 C17.6801172,23.8914844 17.9991016,23.9870625 18.3306016,23.9870625 C18.6628516,23.9870625 18.9817422,23.8918594 19.253711,23.6927813 L19.1699922,23.7485625 C19.7434141,23.4020156 20.0161797,22.7852344 19.9052735,22.1277656 C19.9039141,22.1200781 18.7031172,15.65625 18.7031172,15.65625 L23.5311485,10.86825 C23.9815235,10.4180156 24.1067266,9.7965 23.909711,9.19846875 Z"></path>
												</defs>
											</svg>
											<span class="count svelte-1n6w264">2</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<a
							href="/recipe"
							target="_blank"
							class="recipe-suggestions__recipes-link svelte-1b8y15n"
							data-svelte-h="svelte-18r3oam">View All Recipes
						</a>
					</div>
				</div>
			</main>
			<div class="container svelte-i21x07">
				<aside class="suggested-links svelte-i21x07">
					<h2 class="title svelte-i21x07" data-svelte-h="svelte-cvp2xi">
						Related Pages
					</h2>
					<ul class="links svelte-i21x07">
						<li class="svelte-i21x07">
							<a href="https://www.food.com/recipe/marble-cheesecake-6778" class="link link--plain svelte-i21x07">Marble Cheesecake</a>
						</li>
					</ul>
				</aside>
			</div>
		</div>
		<div class="next-recipe"></div>
	</div>
</div>

<?php get_footer(); ?>