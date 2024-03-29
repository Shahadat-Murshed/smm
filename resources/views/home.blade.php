@include('header')
<main class="content" id="lqd-site-content">
<div id="lqd-contents-wrap">
	<section class="lqd-section banner pt-240" id="banner">
		<div class="background-overlay bg-transparent opacity-30" style="background-image: linear-gradient(180deg, #DBE4FE 0%, #fff 85%);"></div>
		<div class="lqd-particles-bg-wrap lqd-overlay flex pointer-events-none">
			<div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-450">
				<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles":{"number":{"value":4} , "color":{"value": "random"} , "shape":{"type":["circle"]} , "opacity":{"value":1} , "size":{"value":4} , "move":{"enable": true, "direction": "none", "out_mode": "out"}} , "interactivity":[], "retina_detect": true}'></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col col-12 col-md-7 col-xl-6" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"y": "60px", "rotationY":65, "opacity":0, "transformOrigin": "50% 50% 80px"} , "animations":{"y": "0px", "rotationY":0, "opacity":1, "transformOrigin": "50% 50% 0px"}}'>
					<div class="flex flex-wrap module-content mt-5 mr-80">
						<div class="w-auto pr-15 animation-element">
							<a class="btn btn-solid btn-xxs text-11 font-medium tracking-1 rounded-20 uppercase bg-slate-100 text-gray-500 hover:currentColor module-btn-xxs">
								<span class="btn-txt" data-text="NEW">NEW</span>
							</a>
						</div>
						<div class="ld-fancy-heading relative animation-element">
							<p class="ld-fh-element inline-block relative font-normal text-14 m-0">Check out our latest packages, to boost your influence.</p>
						</div>
						<div class="mb-20 w-full ld-fancy-heading relative animation-element">
							<h1 class="ld-fh-element inline-block relative -tracking-1/5 mt-0/5em mb-0">Welcome to</h1>
						</div>
						<div class="-mt-10 mb-20 w-full ld-fancy-heading relative animation-element">
							<h1 class="ld-fh-element inline-block relative ld-gradient-heading text-rotator-activated bg-transparent -tracking-1/5 m-0" data-text-rotator="true" style="background-image: linear-gradient(270deg, #F2AA37 25%, #AEBAE0 55%);">
								<span class="txt-rotate-keywords">
									<span class="txt-rotate-keyword active">Social .</span>
									<span class="txt-rotate-keyword">Social.</span>
									<span class="txt-rotate-keyword">Boost.</span>
								</span>
							</h1>
						</div>
						<div class="ld-fancy-heading relative mb-20 module-text animation-element">
							<p class="ld-fh-element mb-0/5em inline-block relative text-18 font-normal leading-1/4em">The place to truly elevate your social game, check all about us below.</p>
						</div>
						<div class="w-full flex flex-wrap flex-xl-nowrap">
							<div class="w-50percent lg:w-full flex animation-element">
								<a href="#services-section" class="btn btn-solid btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-15 font-medium tracking-0 rounded-6 p-0 w-240 h-55 bg-green-100 text-green-700" data-localscroll="true">
									<span class=" btn-txt" data-text="Limited Time Offer" data-split-text="true" data-split-options='{"type": "chars, words"}'>Check Premium Services</span>
									<span class="btn-icon">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
									</span>
								</a>
							</div>
							<div class="w-50percent lg:w-full flex items-center pb-5 pl-30 module-left animation-element">
								<a href="#contact-modal" class="btn btn-naked btn-hover-txt-liquid-x btn-icon-right text-14 font-medium text-slate-600" data-lity="#contact-modal">
									<span class="btn-txt" data-text="Sign up — It's Free" data-split-text="true" data-split-options='{"type": "chars, words"}'>Sign up — It's Free</span>
									<span class="btn-icon ml-20">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
									</span>
								</a>
							</div>
						</div>
						<div class="flex w-full items-center flex-wrap flex-xl-nowrap lg:pt-20">
							<div class="lqd-imggrp-single block relative w-15percent animation-element">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
									<figure class="w-full relative">
										<img width="48" height="10" src="{{asset('assets/frontend')}}/images/demo/index/shapes-3.svg" alt="banner image">
									</figure>
								</div>
							</div>
							<div class="sm:w-full ld-fancy-heading relative w-85percent animation-element">
								<p class="ld-fh-element inline-block relative text-12 font-normal text-gray-400 m-0">Fancy becoming an affiliate?</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-12 col-md-5 col-xl-6 sm:-mt-485">
					<div class="mb-20"></div>
					<div class="lg:w-full lg:text-end  bg-center bg-contain bg-no-repeat " style="background-image: url('{{asset('assets/frontend')}}/images/demo/index/shape-Blob.svg');">
						<div class="lqd-imggrp-single block relative" data-float="ease-in-out">
							<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
								<figure class="w-full relative">
									<img width="1080" height="763" src="{{asset('assets/frontend')}}/images/demo/index/anim-banner.gif" alt="banner image">
								</figure>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Banner -->
	<!-- Start Pricing -->
	<section class="lqd-section pricing pt-60 pb-360 bg-transparent transition-all" id="pricing" data-section-luminosity="dark" style="background-image: linear-gradient(90deg, #353A5F 0%, #191C33 100%);" data-parallax="true" data-parallax-options='{ "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "120px"}' data-parallax-to='{"y": "0"}'>
		<div class="background-overlay bg-bottom-center bg-no-repeat opacity-100 transition-all" style="background-image: url({{asset('assets/frontend')}}/images/demo/index/bubbles-bg.svg);"></div>
		<div class="lqd-shape lqd-shape-top" data-negative="false">
			<svg class="w-1em h-1em left-50percent -translatex-50percent" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
				<path class="lqd-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z" fill="#fff"></path>
			</svg>
		</div>
		<div class="container">
			<div class="row justify-center">
				<div class="col col-12 col-md-6 col-lg-7 col-xl-6 relative h-full text-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
					<div class="absolute w-auto top-20 module-shape">
						<div class="lqd-imggrp-single block relative">
							<div class="w-50percent lqd-imggrp-img-container inline-flex relative items-center justify-center animation-element">
								<figure class="w-full relative">
									<img width="368" height="374" src="{{asset('assets/frontend')}}/images/demo/index/shape-pricing.png" alt="pricing">
								</figure>
							</div>
						</div>
					</div>
					<div class="mb-20 ld-fancy-heading relative animation-element">
						<h2 class="mt-0/5em mb-0 ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
							<span>A package for </span>
							<mark class="lqd-highlight">
								<span class="lqd-highlight-txt">everyone.</span>
								<span class="lqd-highlight-inner bg-blue-100 left-0 bottom-0"></span>
							</mark>
						</h2>
					</div>
					<div class="ld-fancy-heading relative px-20 xl:px-0 animation-element">
						<p class="mb-2/5em leading-25 ld-fh-element inline-block relative">View our range of packages, and choose your social platform to get started.</p>
					</div>
				</div>
				<div class="col col-12 p-0" data-parallax="true" data-parallax-options='{ "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "-60px"}' data-parallax-to='{"y": "0px"}'>
					<div class="module-pricing -mb-340 pt-15 pb-10 sm:m-0">
						<div class="lqd-tabs lqd-tabs-style-9 lqd-tabs-style-9-alt2 flex flex-col lqd-nav-underline- lqd-tabs-nav-items-not-expanded" data-tabs-options='{"trigger": "click"}'>
							{{-- <section class="lqd-section clients z-9 pt-120">
								<div class="container p-0">
									<div class="flex flex-wrap items-center p-10">
										<div class="w-full mb-20">
											<div class="ld-fancy-heading relative">
												<p class="ld-fh-element inline-block relative text-15 font-semibold m-0 text-gray-500">We offer a range of platforms, see below. </p>
											</div>
										</div>
										<div class="w-20percent sm:w-33percent module-client text-start">
											<div class="lqd-imggrp-single block relative">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Instagram.png" alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div class="w-20percent sm:w-33percent pl-40 module-client right-space text-start lg:text-center">
											<div class="lqd-imggrp-single block relative">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Spotify.png" alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div class="w-20percent sm:w-33percent module-client text-center sm:text-end">
											<div class="lqd-imggrp-single block relative">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Youtube.png" alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div class="w-20percent sm:w-50percent pr-40 module-client left-space text-end lg:text-center">
											<div class="lqd-imggrp-single block relative">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Facebook.png" alt="clients">
													</figure>
												</div>
											</div>
										</div>
										<div class="w-20percent sm:w-50percent module-client sm:p-0 sm:text-center text-end">
											<div class="lqd-imggrp-single block relative">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Snapchat.png" alt="clients">
													</figure>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section> --}}
							<nav class="lqd-tabs-nav-wrap mb-2/5em">
								<ul class="reset-ul lqd-tabs-nav flex items-center flex-wrap justify-center relative" role="tablist">
									@php
										$categories = app('App\Models\Category')->all();
									@endphp
									@foreach($categories as $index => $category)
										@php $category_title = data_get($category,'category_title'); @endphp
										<li data-controls="lqd-tab-pricing-{{$category_title}}" role="presentation">
											<a class="text-13 font-medium tracking-0 block {{$index === 0 ? 'active' : ''}}" href="#lqd-tab-pricing-{{$category_title}}" aria-expanded="false" aria-controls="lqd-tab-pricing-{{$category_title}}" role="tab" data-bs-toggle="tab">
												<span class="lqd-tabs-nav-txt"><i style="font-size: 30px" class="fab {{$category->icon}}"></i></span>
											</a>
										</li>
									@endforeach
								</ul>
							</nav>
							<div class="lqd-tabs-content relative">
								@php
									$packages = app('App\Models\Package')->where('status',true)->get();
									$i = 0;
									$grouped_packages = $packages->groupBy('category_id');
								@endphp
								@foreach($grouped_packages as $category => $grouped_package)
										@php
											$title = app('App\Models\Category')->find($category)?->category_title;
										@endphp
										@if ($title)
											<div id="lqd-tab-pricing-{{$title}}" role="tabpanel" class="lqd-tabs-pane  {{$i === 0 ? 'active show' : ''}}">
												<div class="pt-50 pb-20 px-20 lg:p-0 module-sections">
													<div class="container p-0">
														<div class="row m-0">
															@foreach($grouped_package as $package)
															<div class="co-12 col-md-4 p-0">
																<div class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
																	<div class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
																		<div class="mb-20 ld-fancy-heading relative">
																			<p class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-amber-600 ld-fh-element inline-block relative">{{ data_get($package,'package_name')  }}</p>
																		</div>
																		<div class="ld-fancy-heading relative">
																			<h3 class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">{{
																				data_get($package,'price') }} <small class="font-bold text-13 text-sky-900">/mo</small></h3>
																		</div>
																	</div>
																	<div class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
																		<div class="mb-20 ld-fancy-heading relative lg:text-start">
																			<p class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">{{data_get($package,'description')}}</p>
																		</div>
																		<div class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
																			<div class="iconbox-icon-wrap mr-15">
																				<div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
																					<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
																				</div>
																			</div>
																			<h3 class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
																				{{data_get($package,'point_1')}} </h3>
																		</div>
																		<div class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
																			<div class="iconbox-icon-wrap mr-15">
																				<div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
																					<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
																				</div>
																			</div>
																			<h3 class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">{{data_get($package,'point_2')}} </h3>
																		</div>
																		<div class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
																			<div class="iconbox-icon-wrap mr-15">
																				<div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
																					<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
																				</div>
																			</div>
																			<h3 class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">{{data_get($package,'point_3')}} </h3>
																		</div>
																		<a
																			data-type="package"
																			data-id={{data_get($package,'id')}}
																			href="#contact-modal"
																			data-lity="#contact-modal"
																			class="package-buy btn btn-solid btn-sm btn-block btn-icon-right btn-hover-reveal module-btn-1 text-15 mt-15 rounded-6 font-medium leading-2em bg-red-100 text-amber-600" target="_blank" rel="nofollow">
																			<span class="btn-txt" data-text="Join Simple Plan">Get {{data_get($package,'package_name')}}</span>
																			<span class="btn-icon">
																				<i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward"></i>
																			</span>
																		</a>
																	</div>
																</div>
															</div>
															@endforeach
														</div>
													</div>
												</div>
											</div>
										@endif
								@php $i++; @endphp
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing -->
	<!-- START SERVICES -->
	<div id="services-section" style="display: flex; flex-direction: column; align-items: center;" class="py-100">
		<h2 id="services-section-header">
			Select from our range of services, and get started today.
		</h2>
		<div id="service-table-container" style="" class="shadow-sm">
			<table id="services-table"  style="">
				<thead>
					<tr>
						<th>Service</th>
						<th>Max amount</th>
						<th>Min amount</th>
						<th>Price</th>
						<th class="sorting">Action</th>
					</tr>
				</thead>
					@php
						$services = app('App\Models\AdvancedService')->where('service_status', 1)->get();
					@endphp
				<tbody>
					@foreach ($services as $service)
						<tr>
							<td>
								{{$service->service_title}}
							</td>
							<td>
								{{$service->max_amount}}
							</td>
							<td>
								{{$service->min_amount}}
							</td>
							<td>
								{{$service->price}}
							</td>
							<td>
								<a href="#contact-modal" data-id="{{$service->id}}" data-type="service" class="package-buy btn btn-solid btn-hover-txt-marquee btn-hover-txt-marquee-y btn-icon-right text-14 font-medium rounded-6 leading-30 bg-blue-200 text-blue-900 module-btn-sm px-25" data-lity="#order-modal">
									<span class="btn-txt" data-text="Buy" data-split-text="true" >Buy</span>
									<span class="btn-icon m-0">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-add"></i>
									</span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>

			</table>
		</div>
	</div>
	<!-- END SERVICES -->
	<!-- Start Clients -->
	<section class="lqd-section clients z-9 pt-120">
		<div class="container p-0">
			<div class="flex flex-wrap items-center p-10">
				<div class="w-full mb-20">
					<div class="ld-fancy-heading relative">
						<p class="ld-fh-element inline-block relative text-15 font-semibold m-0 text-gray-500">We offer a range of platforms, see below. </p>
					</div>
				</div>
				<div class="w-20percent sm:w-33percent module-client text-start">
					<div class="lqd-imggrp-single block relative">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
							<figure class="w-full relative">
								<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Instagram.png" alt="clients">
							</figure>
						</div>
					</div>
				</div>
				<div class="w-20percent sm:w-33percent pl-40 module-client right-space text-start lg:text-center">
					<div class="lqd-imggrp-single block relative">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
							<figure class="w-full relative">
								<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Spotify.png" alt="clients">
							</figure>
						</div>
					</div>
				</div>
				<div class="w-20percent sm:w-33percent module-client text-center sm:text-end">
					<div class="lqd-imggrp-single block relative">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
							<figure class="w-full relative">
								<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Youtube.png" alt="clients">
							</figure>
						</div>
					</div>
				</div>
				<div class="w-20percent sm:w-50percent pr-40 module-client left-space text-end lg:text-center">
					<div class="lqd-imggrp-single block relative">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
							<figure class="w-full relative">
								<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Facebook.png" alt="clients">
							</figure>
						</div>
					</div>
				</div>
				<div class="w-20percent sm:w-50percent module-client sm:p-0 sm:text-center text-end">
					<div class="lqd-imggrp-single block relative">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
							<figure class="w-full relative">
								<img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Snapchat.png" alt="clients">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients -->

	<!-- Start BG Shape -->
	<section class="lqd-section bg-shape -mt-120 -mb-200 p-0 lg:hidden">
		<div class="container-fluid p-0">
			<div class="lqd-imggrp-single block relative">
				<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
					<figure class="w-full relative">
						<img width="1256" height="287" src="{{asset('assets/frontend')}}/images/demo/index/shape-decorative-bg.svg" alt="background image shape">
					</figure>
				</div>
			</div>
		</div>
	</section>
	<!-- End BG Shape -->

	<!-- Start About -->
	<section class="lqd-section about pt-120" id="about">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-xl-6">
					<div class="flex flex-wrap mr-80 sm:mr-0">
						<div class="ld-fancy-heading relative mb-20 pt-20">
							<p class="ld-fh-element inline-block relative text-20 font-bold font-title leading-1/4em mb-0/2em">
								<span class="text-primary">RocketSocialBoost differs from others, as we provide organic methods.</span>
								<span>This means, we can naturally help boost your page, and ensure you are satisfied from our services, by driving organic traffic to your page.</span>
							</p>
						</div>
						<div class="w-full flex flex-wrap">
							<div class="w-25percent module-text sm:w-full">
								<div class="ld-fancy-heading relative text-end sm:text-start pr-30 sm:w-full">
									<p class="ld-fh-element inline-block relative text-16 font-medium m-0">RocketSB</p>
								</div>
							</div>
							<div class="w-75percent sm:w-full pr-20percent" data-custom-animations="true" data-ca-options='{"animationTarget": ":scope > .spacer", "startDelay":100, "ease": "power4.out", "initValues":{"x": "-150px", "scaleX":0.1, "opacity":0} , "animations":{"x": "0px", "scaleX":1, "opacity":1}}'>
								<div class="spacer bg-green-500 bg-transparent rounded-20" style="background-image: linear-gradient(90deg, #fff 4%, #00CB99 50%);">
									<div class="w-full h-25"></div>
								</div>
							</div>
						</div>
						<div class="w-full flex flex-wrap pt-10">
							<div class="w-25percent module-text sm:w-full">
								<div class="ld-fancy-heading relative text-end sm:text-start pr-30 sm:w-full">
									<p class="ld-fh-element inline-block relative text-16 font-medium m-0 text-end">Others</p>
								</div>
							</div>
							<div class="w-75percent sm:w-full pr-50percent module-spacer" data-custom-animations="true" data-ca-options='{"animationTarget": ":scope > .spacer", "startDelay":100, "ease": "power4.out", "initValues":{"x": "-150px", "scaleX":0.1, "opacity":0} , "animations":{"x": "0px", "scaleX":1, "opacity":1}}'>
								<div class="spacer bg-gray-500 bg-transparent rounded-20" style="background-image: linear-gradient(90deg, #fff 6%, #B7C0CC 60%);">
									<div class="w-full h-25"></div>
								</div>
							</div>
						</div>
						<div class="w-full sm:text-start text-center">
							<div class="ld-fancy-heading relative">
								<h2 class="ld-fh-element inline-block relative text-13 font-normal italic mt-1em mr-7em sm:mr-0 mb-0 text-gray-300">Based on Gtmetrix Scores.</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-12 col-xl-6 p-0 ">
					<div class="w-full flex flex-wrap module-icon-box " >
						<div class="w-33percent sm:w-50percent">
							<div class="lqd-iconbox-scale transition-all pr-60 mb-30 sm:mb-0 hover:scale-1/1">
								<div class="iconbox flex items-center flex-grow-1 relative flex-col iconbox-default iconbox-circle ">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container  relative z-1  mb-20 w-160 h-100 ">
											<!-- <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="26.257" height="25.495" viewbox="0 0 26.257 25.495">
												<path d="M10.859,14.1l3.122-3.122A2.833,2.833,0,0,0,14.512,7.7l-.177-.354a2.833,2.833,0,0,1,.531-3.271L18.737.207a.708.708,0,0,1,1.134.184l1.564,3.128a6.216,6.216,0,0,1-1.164,7.175l-8.5,8.5A7.688,7.688,0,0,1,3.905,21.05L.485,19.91a.708.708,0,0,1-.277-1.173l3.756-3.756a2.833,2.833,0,0,1,3.271-.531l.354.177A2.833,2.833,0,0,0,10.859,14.1Z" transform="translate(4.165 4.05)" fill="#129b67"></path>
												<path d="M4.564,4.564A15.551,15.551,0,0,1,17.032.067l-.261,2.822A12.748,12.748,0,0,0,2.888,16.756l-2.822.259A15.549,15.549,0,0,1,4.564,4.564ZM8.571,8.572a9.892,9.892,0,0,1,7.965-2.859l-.27,2.82a7.083,7.083,0,0,0-7.735,7.712l-2.822.264A9.9,9.9,0,0,1,8.571,8.572Z" fill="#129b67" opacity="0.3"></path>
											</svg> -->
						<img src="{{asset('assets/frontend')}}/images/demo/index/cloud2.png" class="social-icon-cloud absolute w-200 " alt="background cloud" >
						<img  src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Facebook.png" class="w-75 z-10" alt="foreground social icon">

										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-16 font-bold text-center leading-1em">Facebook </h3>
								</div>
							</div>
						</div>
						<div class="w-33percent sm:w-50percent">
							<div class="lqd-iconbox-scale transition-all mb-30 sm:mb-0 hover:scale-1/1">
								<div class="iconbox flex items-center flex-grow-1 relative flex-col iconbox-default iconbox-circle">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container  relative z-1  mb-20 w-160 h-100 ">
											<!-- <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="26.257" height="25.495" viewbox="0 0 26.257 25.495">
												<path d="M10.859,14.1l3.122-3.122A2.833,2.833,0,0,0,14.512,7.7l-.177-.354a2.833,2.833,0,0,1,.531-3.271L18.737.207a.708.708,0,0,1,1.134.184l1.564,3.128a6.216,6.216,0,0,1-1.164,7.175l-8.5,8.5A7.688,7.688,0,0,1,3.905,21.05L.485,19.91a.708.708,0,0,1-.277-1.173l3.756-3.756a2.833,2.833,0,0,1,3.271-.531l.354.177A2.833,2.833,0,0,0,10.859,14.1Z" transform="translate(4.165 4.05)" fill="#129b67"></path>
												<path d="M4.564,4.564A15.551,15.551,0,0,1,17.032.067l-.261,2.822A12.748,12.748,0,0,0,2.888,16.756l-2.822.259A15.549,15.549,0,0,1,4.564,4.564ZM8.571,8.572a9.892,9.892,0,0,1,7.965-2.859l-.27,2.82a7.083,7.083,0,0,0-7.735,7.712l-2.822.264A9.9,9.9,0,0,1,8.571,8.572Z" fill="#129b67" opacity="0.3"></path>
											</svg> -->
						<img src="{{asset('assets/frontend')}}/images/demo/index/cloud2.png" class="social-icon-cloud absolute w-200" alt="background cloud" >
						<img  src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Whatsapp.png" class="w-75 z-10" alt="foreground social icon">

										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-16 font-bold text-center leading-1em">WhatsApp </h3>
								</div>
							</div>
						</div>
						<div class="w-33percent sm:w-50percent">
							<div class="lqd-iconbox-scale transition-all pl-60 mb-30 sm:mb-0 hover:scale-1/1">
								<div class="iconbox flex items-center flex-grow-1 relative flex-col iconbox-default iconbox-circle">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container  relative z-1  mb-20 w-160 h-100 ">
											<!-- <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="26.257" height="25.495" viewbox="0 0 26.257 25.495">
												<path d="M10.859,14.1l3.122-3.122A2.833,2.833,0,0,0,14.512,7.7l-.177-.354a2.833,2.833,0,0,1,.531-3.271L18.737.207a.708.708,0,0,1,1.134.184l1.564,3.128a6.216,6.216,0,0,1-1.164,7.175l-8.5,8.5A7.688,7.688,0,0,1,3.905,21.05L.485,19.91a.708.708,0,0,1-.277-1.173l3.756-3.756a2.833,2.833,0,0,1,3.271-.531l.354.177A2.833,2.833,0,0,0,10.859,14.1Z" transform="translate(4.165 4.05)" fill="#129b67"></path>
												<path d="M4.564,4.564A15.551,15.551,0,0,1,17.032.067l-.261,2.822A12.748,12.748,0,0,0,2.888,16.756l-2.822.259A15.549,15.549,0,0,1,4.564,4.564ZM8.571,8.572a9.892,9.892,0,0,1,7.965-2.859l-.27,2.82a7.083,7.083,0,0,0-7.735,7.712l-2.822.264A9.9,9.9,0,0,1,8.571,8.572Z" fill="#129b67" opacity="0.3"></path>
											</svg> -->
						<img src="{{asset('assets/frontend')}}/images/demo/index/cloud2.png" class="social-icon-cloud absolute w-200" alt="background cloud" >
						<img  src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Instagram.png" class="w-75 z-10" alt="foreground social icon">

										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-16 font-bold text-center leading-1em">Instagram </h3>
								</div>
							</div>
						</div>
						<div class="w-33percent sm:w-50percent">
							<div class="lqd-iconbox-scale transition-all pr-60 mb-30 sm:mb-0 hover:scale-1/1">
								<div class="iconbox flex items-center flex-grow-1 relative flex-col iconbox-default iconbox-circle">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container  relative z-1  mb-20 w-160 h-100 ">
											<!-- <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="26.257" height="25.495" viewbox="0 0 26.257 25.495">
												<path d="M10.859,14.1l3.122-3.122A2.833,2.833,0,0,0,14.512,7.7l-.177-.354a2.833,2.833,0,0,1,.531-3.271L18.737.207a.708.708,0,0,1,1.134.184l1.564,3.128a6.216,6.216,0,0,1-1.164,7.175l-8.5,8.5A7.688,7.688,0,0,1,3.905,21.05L.485,19.91a.708.708,0,0,1-.277-1.173l3.756-3.756a2.833,2.833,0,0,1,3.271-.531l.354.177A2.833,2.833,0,0,0,10.859,14.1Z" transform="translate(4.165 4.05)" fill="#129b67"></path>
												<path d="M4.564,4.564A15.551,15.551,0,0,1,17.032.067l-.261,2.822A12.748,12.748,0,0,0,2.888,16.756l-2.822.259A15.549,15.549,0,0,1,4.564,4.564ZM8.571,8.572a9.892,9.892,0,0,1,7.965-2.859l-.27,2.82a7.083,7.083,0,0,0-7.735,7.712l-2.822.264A9.9,9.9,0,0,1,8.571,8.572Z" fill="#129b67" opacity="0.3"></path>
											</svg> -->
						<img src="{{asset('assets/frontend')}}/images/demo/index/cloud2.png" class="social-icon-cloud absolute w-200" alt="background cloud" >
						<img  src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Reddit.png" class="w-75 z-10" alt="foreground social icon">

										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-16 font-bold text-center leading-1em">Reddit </h3>
								</div>
							</div>
						</div>
						<div class="w-33percent sm:w-50percent">
							<div class="lqd-iconbox-scale transition-all mb-30 sm:mb-0 hover:scale-1/1">
								<div class="iconbox flex items-center flex-grow-1 relative flex-col iconbox-default iconbox-circle">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container  relative z-1  mb-20 w-160 h-100 ">
											<!-- <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="26.257" height="25.495" viewbox="0 0 26.257 25.495">
												<path d="M10.859,14.1l3.122-3.122A2.833,2.833,0,0,0,14.512,7.7l-.177-.354a2.833,2.833,0,0,1,.531-3.271L18.737.207a.708.708,0,0,1,1.134.184l1.564,3.128a6.216,6.216,0,0,1-1.164,7.175l-8.5,8.5A7.688,7.688,0,0,1,3.905,21.05L.485,19.91a.708.708,0,0,1-.277-1.173l3.756-3.756a2.833,2.833,0,0,1,3.271-.531l.354.177A2.833,2.833,0,0,0,10.859,14.1Z" transform="translate(4.165 4.05)" fill="#129b67"></path>
												<path d="M4.564,4.564A15.551,15.551,0,0,1,17.032.067l-.261,2.822A12.748,12.748,0,0,0,2.888,16.756l-2.822.259A15.549,15.549,0,0,1,4.564,4.564ZM8.571,8.572a9.892,9.892,0,0,1,7.965-2.859l-.27,2.82a7.083,7.083,0,0,0-7.735,7.712l-2.822.264A9.9,9.9,0,0,1,8.571,8.572Z" fill="#129b67" opacity="0.3"></path>
											</svg> -->
						<img src="{{asset('assets/frontend')}}/images/demo/index/cloud2.png" class="social-icon-cloud absolute w-200" alt="background cloud" >
						<img  src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Snapchat.png" class="w-75 z-10" alt="foreground social icon">

										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-16 font-bold text-center leading-1em">Snapchat </h3>
								</div>
							</div>
						</div>
						<div class="w-33percent sm:w-50percent">
							<div class="lqd-iconbox-scale transition-all pl-60 mb-30 sm:mb-0 hover:scale-1/1">
								<div class="iconbox flex items-center flex-grow-1 relative flex-col iconbox-default iconbox-circle">
									<div class="iconbox-icon-wrap">
										<div class="iconbox-icon-container  relative z-1  mb-20 w-160 h-100 ">
											<!-- <svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="26.257" height="25.495" viewbox="0 0 26.257 25.495">
												<path d="M10.859,14.1l3.122-3.122A2.833,2.833,0,0,0,14.512,7.7l-.177-.354a2.833,2.833,0,0,1,.531-3.271L18.737.207a.708.708,0,0,1,1.134.184l1.564,3.128a6.216,6.216,0,0,1-1.164,7.175l-8.5,8.5A7.688,7.688,0,0,1,3.905,21.05L.485,19.91a.708.708,0,0,1-.277-1.173l3.756-3.756a2.833,2.833,0,0,1,3.271-.531l.354.177A2.833,2.833,0,0,0,10.859,14.1Z" transform="translate(4.165 4.05)" fill="#129b67"></path>
												<path d="M4.564,4.564A15.551,15.551,0,0,1,17.032.067l-.261,2.822A12.748,12.748,0,0,0,2.888,16.756l-2.822.259A15.549,15.549,0,0,1,4.564,4.564ZM8.571,8.572a9.892,9.892,0,0,1,7.965-2.859l-.27,2.82a7.083,7.083,0,0,0-7.735,7.712l-2.822.264A9.9,9.9,0,0,1,8.571,8.572Z" fill="#129b67" opacity="0.3"></path>
											</svg> -->
						<img src="{{asset('assets/frontend')}}/images/demo/index/cloud2.png" class="social-icon-cloud absolute w-200" alt="background cloud" >
						<img  src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Twitter.png" class="w-75 z-10" alt="foreground social icon">

										</div>
									</div>
									<h3 class="lqd-iconbox-heading text-16 font-bold text-center leading-1em">Twitter </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About -->

	<!-- Start Features -->
	<section class="lqd-section features pt-80" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"x": "-10px", "y": "5px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="lqd-tabs lqd-tabs-style-14 lqd-tabs-has-nav-arrows lqd-tabs-nav-items-not-expanded flex flex-col mb-30 animation-element" data-tabs-options='{"translateNav": true}'>
						<nav class="lqd-tabs-nav-wrap mb-1em">
							<ul class="lqd-tabs-nav flex items-center mb-2/25em reset-ul relative" role="tablist">
								<li data-controls="lqd-tab-item-1" role="presentation">
									<a class="inline-flex items-center rounded-full active" href="#lqd-tab-item-1" aria-expanded="false" aria-controls="lqd-tab-item-1" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-txt" data-txt="Affordable">
											<span>Affordable</span>
										</span>
									</a>
									<span class="lqd-tabs-nav-ext text-gray-500">Super Affordable Prices.</span>
								</li>
								<li data-controls="lqd-tab-item-2" role="presentation">
									<a class="inline-flex items-center rounded-full" href="#lqd-tab-item-2" aria-expanded="false" aria-controls="lqd-tab-item-2" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-txt" data-txt="Affiliate Opportunity">
											<span>Affiliate Opportunity</span>
										</span>
									</a>
									<span class="lqd-tabs-nav-ext text-gray-500">Become an Affiliate today, start earning.</span>
								</li>
								<li data-controls="lqd-tab-item-3" role="presentation">
									<a class="inline-flex items-center rounded-full" href="#lqd-tab-item-3" aria-expanded="false" aria-controls="lqd-tab-item-3" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-txt" data-txt="Promotional Package">
											<span>Promotional Package</span>
										</span>
									</a>
									<span class="lqd-tabs-nav-ext text-gray-500">Our packages make social media growth easy.</span>
								</li>
								<li data-controls="lqd-tab-item-4" role="presentation">
									<a class="inline-flex items-center rounded-full" href="#lqd-tab-item-4" aria-expanded="false" aria-controls="lqd-tab-item-4" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-txt" data-txt="Trusted Services">
											<span>Trusted Services</span>
										</span>
									</a>
									<span class="lqd-tabs-nav-ext text-gray-500">View what our clients say about us!</span>
								</li>
							</ul>
						</nav>
						<div class="lqd-tabs-content relative">
							<div id="lqd-tab-item-1" role="tabpanel" class="lqd-tabs-pane fade active show">
								<div class="w-full h-full flex justify-center items-center transition-all bg-transparent rounded-20 p-10 module-section" style="background-image: linear-gradient(90deg, #EBEAF5 0%, #fff 100%);">
									<div class="container">
										<div class="row">
											<div class="col col-12 col-md-6 col-xl-5">
												<div class="mb-20 ld-fancy-heading relative">
													<h2 class="text-primary mt-0/75em -mb-0/2em leading-1/2em ld-fh-element inline-block relative">Secure and Affordable.</h2>
												</div>
												<div class="mb-20 ld-fancy-heading relative">
													<p class="text-16 font-medium leading-22 m-0 ld-fh-element inline-block relative">Services de paiement sont disponibles via des applications mobiles et de bureau. </p>
												</div>
												<ul class="mb-40 text-15 font-medium leading-35">
													<li>RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
												</ul>
												<a href="#contact-modal" class="btn btn-solid btn-custom-size btn-icon-right btn-hover-swp btn-has-label text-16 font-medium tracking-0 bg-white text-darkgreen rounded-6 w-210 h-55 p-0" data-lity="#contact-modal">
													<span class="btn-txt" data-text="Build yours">View More</span>
													<span class="btn-icon ml-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
													<span class="btn-icon mr-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
												</a>
											</div>
											<div class="col col-12 col-md-6 offset-xl-1 text-center">
												<div class="lqd-imggrp-single block relative">
													<div class="w-85percent lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
														<figure class="w-full relative">
															<img width="746" height="819" src="{{asset('assets/frontend')}}/images/demo/index/tab-slider-1.png" alt="Secure and Affordable">
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="lqd-tab-item-2" role="tabpanel" class="lqd-tabs-pane fade">
								<div class="w-full h-full flex justify-center items-center transition-all bg-transparent rounded-20 p-10 module-section" style="background-image: linear-gradient(90deg, #EAF5EA 0%, #fff 100%);">
									<div class="container">
										<div class="row">
											<div class="col col-12 col-md-6 col-xl-5">
												<div class="mb-20 ld-fancy-heading relative">
													<h2 class="text-primary mt-0/75em -mb-0/2em leading-1/2em ld-fh-element inline-block relative">Our amazing affiliate opportunity.</h2>
												</div>
												<div class="mb-20 ld-fancy-heading relative">
													<p class="text-16 font-medium leading-22 m-0 ld-fh-element inline-block relative">Services de paiement sont disponibles via des applications mobiles et de bureau. </p>
												</div>
												<ul class="mb-40 text-15 font-medium leading-35">
													<li>RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
												</ul>
												<a href="#contact-modal" class="btn btn-solid btn-custom-size btn-icon-right btn-hover-swp btn-has-label text-16 font-medium tracking-0 bg-white text-darkgreen rounded-6 w-210 h-55 p-0" data-lity="#contact-modal">
													<span class="btn-txt" data-text="Build yours">View More</span>
													<span class="btn-icon ml-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
													<span class="btn-icon mr-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
												</a>
											</div>
											<div class="col col-12 col-md-6 offset-xl-1 text-center">
												<div class="lqd-imggrp-single block relative">
													<div class="w-85percent lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
														<figure class="w-full relative">
															<img width="681" height="669" src="{{asset('assets/frontend')}}/images/demo/index/tab-slider-2.png" alt="Integrated Payroll and Checks">
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="lqd-tab-item-3" role="tabpanel" class="lqd-tabs-pane fade">
								<div class="w-full h-full flex justify-center items-center transition-all bg-transparent rounded-20 p-10 module-section" style="background-image: linear-gradient(90deg, #F5EAF5 0%, #fff 100%);">
									<div class="container">
										<div class="row">
											<div class="col col-12 col-md-6 col-xl-5">
												<div class="mb-20 ld-fancy-heading relative">
													<h2 class="text-primary mt-0/75em -mb-0/2em leading-1/2em ld-fh-element inline-block relative">Check out the Promotional Packages!</h2>
												</div>
												<div class="mb-20 ld-fancy-heading relative">
													<p class="text-16 font-medium leading-22 m-0 ld-fh-element inline-block relative">Services de paiement sont disponibles via des applications mobiles et de bureau. </p>
												</div>
												<ul class="mb-40 text-15 font-medium leading-35">
													<li>RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
												</ul>
												<a href="#contact-modal" class="btn btn-solid btn-custom-size btn-icon-right btn-hover-swp btn-has-label text-16 font-medium tracking-0 bg-white text-darkgreen rounded-6 w-210 h-55 p-0" data-lity="#contact-modal">
													<span class="btn-txt" data-text="Build yours">View More</span>
													<span class="btn-icon ml-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
													<span class="btn-icon mr-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
												</a>
											</div>
											<div class="col col-12 col-md-6 offset-xl-1 text-center">
												<div class="lqd-imggrp-single block relative">
													<div class="w-85percent lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
														<figure class="w-full relative">
															<img width="681" height="669" src="{{asset('assets/frontend')}}/images/demo/index/tab-slider-3.png" alt="The leading AI for risk detection">
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="lqd-tab-item-4" role="tabpanel" class="lqd-tabs-pane fade">
								<div class="w-full h-full flex justify-center items-center transition-all bg-transparent rounded-20 p-10 module-section" style="background-image: linear-gradient(90deg, #F5EAEA 0%, #fff 100%)">
									<div class="container">
										<div class="row">
											<div class="col col-12 col-md-6 col-xl-5">
												<div class="mb-20 ld-fancy-heading relative">
													<h2 class="text-primary mt-0/75em -mb-0/2em leading-1/2em ld-fh-element inline-block relative">Highly Rated, Highly Trusted.</h2>
												</div>
												<div class="mb-20 ld-fancy-heading relative">
													<p class="text-16 font-medium leading-22 m-0 ld-fh-element inline-block relative">Services de paiement sont disponibles via des applications mobiles et de bureau. </p>
												</div>
												<ul class="mb-40 text-15 font-medium leading-35">
													<li>RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
													<li>RocketSocialBoost™ RocketSocialBoost™</li>
												</ul>
												<a href="#contact-modal" class="btn btn-solid btn-custom-size btn-icon-right btn-hover-swp btn-has-label text-16 font-medium tracking-0 bg-white text-darkgreen rounded-6 w-210 h-55 p-0" data-lity="#contact-modal">
													<span class="btn-txt" data-text="Build yours">View More</span>
													<span class="btn-icon ml-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
													<span class="btn-icon mr-40">
														<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
													</span>
												</a>
											</div>
											<div class="col col-12 col-md-6 offset-xl-1 text-center">
												<div class="lqd-imggrp-single block relative">
													<div class="w-85percent lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
														<figure class="w-full relative">
															<img width="1080" height="763" src="{{asset('assets/frontend')}}/images/demo/index/tab-slider-4.png" alt="Real-time credit score analysis">
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="lqd-tabs-nav-arrows">
								<button class="lqd-tabs-nav-arrow lqd-tabs-nav-prev inline-flex items-center justify-center rounded-full absolute">
									<i class="lqd-icn-ess icon-md-arrow-back"></i>
								</button>
								<button class="lqd-tabs-nav-arrow lqd-tabs-nav-next inline-flex items-center justify-center rounded-full absolute">
									<i class="lqd-icn-ess icon-md-arrow-forward"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="flex flex-wrap justify-center items-center">
						<div class="w-auto sm:w-full lg:text-center animation-element">
							<a href="#contact" class="btn btn-solid text-15 rounded-20 text-blue-700 bg-blue-100 module-btn-xs" data-localscroll="true">
								<span class="btn-txt" data-text="Contact">Contact</span>
							</a>
						</div>
						<div class="ld-fancy-heading relative animation-element">
							<p class="text-14 leading-20 mr-0/5em ml-1/5em mb-0 sm:ml-0 text-gray-700 ld-fh-element inline-block relative">Looking for anything else?</p>
						</div>
						<div class="ld-fancy-heading relative animation-element">
							<p class="text-14 underline text-purple-500 m-0 ld-fh-element inline-block relative" data-localscroll="true">
								<a class="text-purple-500" href="#contact">Contact us.</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Features -->

	<!-- Start Text Box Image -->
	<section class="lqd-section text-box-image pt-100" id="features"  >
		<div class="container">
			<div class="row items-center">
				<div class="col col-12 col-md-6">
					<div class="flex flex-wrap mr-120 ml-40 lg:m-0">
						<div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle w-full mb-20">
							<div class="-mb-35 iconbox-icon-wrap">
								<div class="iconbox-icon-container inline-flex relative module-iconbox z-1 rounded-full w-60 h-60 mb-20 text-24 bg-blue-100">
									<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="22" height="34.232" viewbox="0 0 27 34.232">
										<g transform="translate(-6.75 -4.277)">
											<path d="M8,7.542,20.878,5.128a3.375,3.375,0,0,1,1.244,0L35,7.542V23.207a14.362,14.362,0,0,1-6.75,12.179l-5.856,3.66a1.687,1.687,0,0,1-1.789,0l-5.856-3.66A14.362,14.362,0,0,1,8,23.207Z" transform="translate(-1.25 -0.792)" fill="#3750e0" fill-rule="evenodd" opacity="0.3"></path>
											<path d="M21.937,32.562l7.875-11.137H25.875V14L18,25.137h3.937Z" transform="translate(-2.813 -2.188)" fill="#3750e0" fill-rule="evenodd"></path>
										</g>
									</svg>
								</div>
							</div>
						</div>
						<div class="mb-20 ld-fancy-heading relative">
							<h2 class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left mt-0/5em mb-0" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
								<span> We Cover All</span>
								<mark class="lqd-highlight">
									<span class="lqd-highlight-txt">Social Needs.</span>
									<span class="left-0 bottom-0 bg-blue-100 lqd-highlight-inner"></span>
								</mark>
							</h2>
						</div>
						<div class="mb-20 ld-fancy-heading relative">
							<p class="leading-25 ld-fh-element inline-block relative mb-0/5em">Elevate your social presence with RocketSocialBoost, we provide many services and packages, to either get you started, or fully elevate your pages!</p>
						</div>
						<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
							<div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
								<div class="iconbox-icon-wrap">
									<div class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-60">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
									</div>
								</div>
								<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Multiple Social Media Package Coverage </h3>
							</div>
						</div>
						<div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
							<div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
								<div class="iconbox-icon-wrap">
									<div class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
									</div>
								</div>
								<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Real and Organic Services </h3>
							</div>
						</div>
						<div class="w-full lqd-iconbox-scale transition-all hover:scale-1/1">
							<div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
								<div class="iconbox-icon-wrap">
									<div class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-60">
										<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
									</div>
								</div>
								<h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Top Tier Support </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-12 col-md-6 p-0">
					<div class="module-section flex items-center justify-center transition-all p-20 lg:p-0">
						<div class="flex items-center justify-center bg-center bg-no-repeat bg-contain" style="background-image: url('{{asset('assets/frontend')}}/images/demo/index/shape-ellipse.png');">
							<div class="lqd-imggrp-single block relative -mt-70 -mb-90" data-float="ease-in-out">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center ">
									<figure class="w-full relative">
										<img width="1102" height="1040" src="{{asset('assets/frontend')}}/images/demo/index/brand-logos.png" alt="text box image">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start Text Box Image -->

	<!-- Start Tab Items -->
	<section class="lqd-section tab-items pt-80" id="tab-items" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"y": "50px", "opacity":0} , "animations":{"y": "0px", "opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="lqd-tabs lqd-tabs-style-2 lqd-tabs-nav-iconbox flex flex-col-reverse lqd-tabs-nav-items-not-expanded lqd-nav-underline- animation-element" data-tabs-options='{"trigger": "click"}'>
						<nav class="lqd-tabs-nav-wrap">
							<ul class="reset-ul lqd-tabs-nav flex items-center justify-between flex-wrap relative" role="tablist">
								<li data-controls="lqd-tab-item-second-1" role="presentation" class="mt-2rem pb-1/5em">
									<a class="block text-16 active" href="#lqd-tab-item-second-1" aria-expanded="false" aria-controls="lqd-tab-item-second-1" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-icon flex items-center">
											<span class="lqd-tabs-nav-icon-icon inline-flex items-center justify-center mr-2rem rounded-30 bg-orange-100">
												<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="31.408" height="25.866" viewbox="0 0 31.408 25.866">
													<g transform="translate(-5.542 -11.506)">
														<path d="M8.771,14h9.237a2.771,2.771,0,1,1,0,5.542H8.771a2.771,2.771,0,0,1,0-5.542ZM25.4,28.78h9.237a2.771,2.771,0,1,1,0,5.542H25.4a2.771,2.771,0,1,1,0-5.542Z" transform="translate(-0.458 -0.144)" fill="#e87503" fill-rule="evenodd" opacity="0.577"></path>
														<path d="M31.866,21.085a5.543,5.543,0,1,1,5.543-5.543A5.543,5.543,0,0,1,31.866,21.085ZM11.543,35.866a5.543,5.543,0,1,1,5.543-5.543A5.543,5.543,0,0,1,11.543,35.866Z" transform="translate(-0.458 1.506)" fill="#e87503" fill-rule="evenodd"></path>
													</g>
												</svg>
											</span>
											<span class="lqd-tabs-nav-content block">
												<span class="block h3 mt-0 mb-0/5em">Professional Support and Services. </span>
												<span class="lqd-tabs-nav-desc block">
													<small class="text-12 tracking-0/1em text-amber-600">LEARN MORE</small>
												</span>
											</span>
										</span>
										<span class="lqd-tabs-nav-progress">
											<span class="lqd-tabs-nav-progress-inner bg-primary"></span>
										</span>
									</a>
								</li>
								<li data-controls="lqd-tab-item-second-2" role="presentation" class="mt-2rem pb-1/5em">
									<a class="block text-16" href="#lqd-tab-item-second-2" aria-expanded="false" aria-controls="lqd-tab-item-second-2" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-icon flex items-center">
											<span class="lqd-tabs-nav-icon-icon inline-flex items-center justify-center mr-2rem rounded-30 bg-sky-100">
												<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="41.357" height="26.875" viewbox="0 0 41.357 26.875">
													<path d="M20.669,14.659a12.187,12.187,0,0,0-9.409,4.423L7.5,15.964A17.1,17.1,0,0,1,33.869,16L30.1,19.11A12.182,12.182,0,0,0,20.669,14.659Zm0-9.773A21.93,21.93,0,0,0,3.757,12.821L0,9.7a26.876,26.876,0,0,1,41.357.026L37.6,12.842A21.939,21.939,0,0,0,20.669,4.886Z" fill="#0015ff" opacity="0.3"></path>
													<path d="M11.313,2.59,7.587,5.751,5.656,7.33,3.813,5.8,0,2.749A7.33,7.33,0,0,1,11.313,2.59Z" transform="translate(14.947 19.545)" fill="#3d50df"></path>
												</svg>
											</span>
											<span class="lqd-tabs-nav-content block">
												<span class="block h3 mt-0 mb-0/5em">Strong Global Network</span>
												<span class="lqd-tabs-nav-desc block">
													<small class="text-12 tracking-0/1em text-blue-500">LEARN MORE</small>
												</span>
											</span>
										</span>
										<span class="lqd-tabs-nav-progress">
											<span class="lqd-tabs-nav-progress-inner bg-primary"></span>
										</span>
									</a>
								</li>
								<li data-controls="lqd-tab-item-second-3" role="presentation" class="mt-2rem pb-1/5em">
									<a class="block text-16" href="#lqd-tab-item-second-3" aria-expanded="false" aria-controls="lqd-tab-item-second-3" role="tab" data-bs-toggle="tab">
										<span class="lqd-tabs-nav-icon flex items-center">
											<span class="lqd-tabs-nav-icon-icon inline-flex items-center justify-center mr-2rem rounded-30 bg-purple-100">
												<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="40.841" height="34.715" viewbox="0 0 40.841 34.715">
													<g transform="translate(-4.084 -8.168)">
														<path d="M7.063,42.715H41.778a3.063,3.063,0,0,0,3.063-3.063V17.189a3.063,3.063,0,0,0-3.063-3.063H20.336L15.107,8.9A3.063,3.063,0,0,0,12.941,8H7.063A3.063,3.063,0,0,0,4,11.063V39.652A3.063,3.063,0,0,0,7.063,42.715Z" transform="translate(0.084 0.168)" fill="#9a8dff" fill-rule="evenodd"></path>
														<path d="M23.161,24.323a3.161,3.161,0,1,1,3.161-3.161A3.161,3.161,0,0,1,23.161,24.323Z" transform="translate(1.036 2.991)" fill="#dfdeff" fill-rule="evenodd"></path>
														<path d="M14,35.112C14.341,30.4,17.743,28,21.889,28c4.2,0,7.659,2.266,7.916,7.113a.659.659,0,0,1-.66.79H14.639C14.419,35.9,13.982,35.369,14,35.112Z" transform="translate(2.295 0.895)" fill="#dfdeff" fill-rule="evenodd"></path>
													</g>
												</svg>
											</span>
											<span class="lqd-tabs-nav-content block">
												<span class="block h3 mt-0 mb-0/5em">Becoming an Affiliate</span>
												<span class="lqd-tabs-nav-desc block">
													<small class="text-12 tracking-0/1em text-purple-300">LEARN MORE</small>
												</span>
											</span>
										</span>
										<span class="lqd-tabs-nav-progress">
											<span class="lqd-tabs-nav-progress-inner bg-primary"></span>
										</span>
									</a>
								</li>
							</ul>
						</nav>
						<div class="pb-60 lqd-tabs-content relative">
							<div id="lqd-tab-item-second-1" role="tabpanel" class="lqd-tabs-pane fade active show">
								<div class="container">
									<div class="row">
										<div class="col col-12 col-xl-6 sm:hidden">
											<div class="module-img lg:text-end lqd-imggrp-single block relative" data-float="ease-in-out">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="1056" height="726" src="{{asset('assets/frontend')}}/images/demo/index/tab-items-1.png" alt="tab items">
													</figure>
												</div>
											</div>
										</div>
										<div class="col col-12 col-xl-6" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, p, img, .btn .animation-element, .animation-element .split-inner .lqd-chars", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
											<div class="flex flex-col items-start mt-60 mr-80 ml-60 lg:m-0">
												<a href="#tab-items" class="btn btn-solid text-15 rounded-20 py-5 px-10 bg-blue-100 text-primary hover:currentColor module-btn-xs" data-localscroll="true">
													<span class="btn-txt" data-text="Support">Support</span>
												</a>
												<div class="module-title mb-20 ld-fancy-heading relative animation-element">
													<h2 class="ld-fh-element inline-block relative mb-0 mt-0/5em">Professional Support<br> and Services.</h2>
												</div>
												<div class="mb-20 hidden sm:block lqd-imggrp-single relative">
													<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center animation-element">
														<figure class="w-full relative">
															<img width="1056" height="726" src="{{asset('assets/frontend')}}/images/demo/index/tab-items-1.png" alt="tab items">
														</figure>
													</div>
												</div>
												<div class="mb-20 ld-fancy-heading relative animation-element">
													<p class="ld-fh-element mb-0/5em inline-block relative">We provide top tier support. We are here to help with any issues you make, and, ensure you get the service you desire.</p>
												</div>
												<div class="module-content w-full flex shadow-xs py-15 pr-30 pl-10 rounded-12">
													<div class="module-avatar w-20percent text-center lqd-imggrp-single flex items-center justify-center sm:justify-start relative sm:w-25percent" data-shadow-style="custom">
														<div class="flex items-center justify-center">
															<div class="w-auto text-center sm:text-start module-avatar">
																<div class="w-50percent rounded-full lqd-imggrp-img-container inline-flex relative animation-element">
																	<figure class="w-full relative shadow-md rounded-full">
																		<img class="box-shadow-bottom rounded-full" width="96" height="96" src="{{asset('assets/frontend')}}/images/demo/index/package.png" alt="client">
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="module-text w-80percent flex items-center text-start ld-fancy-heading relative sm:w-75percent animation-element">
														<h2 class="m-0 text-15 font-bold leading-1/4em ld-fh-element inline-block relative">
															<span>We have many services you can view</span>
															<span class="text-gray-400">head over to the nav bar, view 'Services'.</span>
														</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="lqd-tab-item-second-2" role="tabpanel" class="lqd-tabs-pane fade">
								<div class="container p-0">
									<div class="row">
										<div class="col col-12 col-xl-6 sm:hidden">
											<div class="module-img lg:text-end lqd-imggrp-single block relative" data-float="ease-in-out">
												<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="1080" height="763" src="{{asset('assets/frontend')}}/images/demo/index/tab-items-2.png" alt="tab items">
													</figure>
												</div>
											</div>
										</div>
										<div class="col col-12 col-xl-6" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, p, img, .btn .animation-element, .animation-element .split-inner .lqd-chars", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
											<div class="flex flex-col items-start mt-60 mr-80 ml-60 lg:m-0">
												<a href="#tab-items" class="btn btn-solid text-15 rounded-20 py-5 px-10 bg-blue-100 text-primary hover:currentColor module-btn-xs" data-localscroll="true">
													<span class="btn-txt" data-text="Support">Support</span>
												</a>
												<div class="module-title mb-20 ld-fancy-heading relative animation-element">
													<h2 class="mb-0 mt-0/5em ld-fh-element inline-block relative">Strong<br> Global Network.</h2>
												</div>
												<div class="mb-20 hidden sm:block lqd-imggrp-single relative">
													<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center animation-element">
														<figure class="w-full relative">
															<img width="1056" height="726" src="{{asset('assets/frontend')}}/images/demo/index/tab-items-2.png" alt="tab items">
														</figure>
													</div>
												</div>
												<div class="mb-20 ld-fancy-heading relative animation-element">
													<p class="ld-fh-element mb-0/5em inline-block relative">We have a strong global network of many celebs, influencers and agencies, to help promote your social media growth organically.</p>
												</div>
												<div class="module-content w-full flex shadow-xs py-15 pr-30 pl-10 rounded-12">
													<div class="module-avatar w-20percent text-center lqd-imggrp-single flex items-center justify-center sm:justify-start relative sm:w-25percent" data-shadow-style="custom">
														<div class="flex items-center justify-center">
															<div class="w-auto text-center sm:text-start module-avatar">
																<div class="w-50percent rounded-full lqd-imggrp-img-container inline-flex relative animation-element">
																	<figure class="w-full relative shadow-md rounded-full">
																		<img class="box-shadow-bottom rounded-full" width="96" height="96" src="{{asset('assets/frontend')}}/images/demo/index/package.png" alt="client">
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="module-text w-80percent flex items-center text-start ld-fancy-heading relative sm:w-75percent animation-element">
														<h2 class="m-0 text-15 font-bold leading-1/4em ld-fh-element inline-block relative">
															<span>We have many services you can view</span>
															<span class="text-gray-400">head over to the nav bar, view 'Services'.</span>
														</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="lqd-tab-item-second-3" role="tabpanel" class="lqd-tabs-pane fade">
								<div class="container p-0">
									<div class="row">
										<div class="col col-12 col-xl-6 sm:hidden">
											<div class="module-img lg:text-end lqd-imggrp-single block relative" data-float="ease-in-out">
												<div class="w-65percent lqd-imggrp-img-container inline-flex relative items-center justify-center">
													<figure class="w-full relative">
														<img width="746" height="819" src="{{asset('assets/frontend')}}/images/demo/index/tab-items-3.png" alt="tab items">
													</figure>
												</div>
											</div>
										</div>
										<div class="col col-12 col-xl-6" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, p, img, .btn .animation-element, .animation-element .split-inner .lqd-chars", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
											<div class="flex flex-col items-start mt-60 mr-80 ml-60 lg:m-0">
												<a href="#tab-items" class="btn btn-solid text-15 rounded-20 py-5 px-10 bg-blue-100 text-primary hover:currentColor module-btn-xs" data-localscroll="true">
													<span class="btn-txt" data-text="Support">Support</span>
												</a>
												<div class="module-title mb-20 ld-fancy-heading relative animation-element">
													<h2 class="mb-0 mt-0/5em ld-fh-element inline-block relative">Becoming an Affiliate..</h2>
												</div>
												<div class="mb-20 hidden sm:block lqd-imggrp-single relative">
													<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center animation-element">
														<figure class="w-full relative">
															<img width="1056" height="726" src="{{asset('assets/frontend')}}/images/demo/index/tab-items-3.png" alt="tab items">
														</figure>
													</div>
												</div>
												<div class="mb-20 ld-fancy-heading relative animation-element">
													<p class="ld-fh-element mb-0/5em inline-block relative">Join the team and become an Affiliate, here you can earn money with us, by helping anyone you may know benefit from out service.</p>
												</div>
												<div class="module-content w-full flex shadow-xs py-15 pr-30 pl-10 rounded-12">
													<div class="module-avatar w-20percent text-center lqd-imggrp-single flex items-center justify-center sm:justify-start relative sm:w-25percent" data-shadow-style="custom">
														<div class="flex items-center justify-center">
															<div class="w-auto text-center sm:text-start module-avatar">
																<div class="w-50percent rounded-full lqd-imggrp-img-container inline-flex relative animation-element">
																	<figure class="w-full relative shadow-md rounded-full">
																		<img class="box-shadow-bottom rounded-full" width="96" height="96" src="{{asset('assets/frontend')}}/images/demo/index/package.png" alt="client">
																	</figure>
																</div>
															</div>
														</div>
													</div>
													<div class="module-text w-80percent flex items-center text-start ld-fancy-heading relative sm:w-75percent animation-element">
														<h2 class="m-0 text-15 font-bold leading-1/4em ld-fh-element inline-block relative">
															<span>We have many services you can view</span>
															<span class="text-gray-400">head over to the nav bar, view 'Services'.</span>
														</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Tab Items -->

	<!-- Start Analysis -->
	<section class="lqd-section analysis pt-60 bg-transparent transition-all" id="analysis" style="background-image: linear-gradient(180deg, #DBE4FE 0%, #fff 15%);">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="module-img mt-0 px-5percent -mb-300">
						<div class="lqd-imggrp-single block relative" data-parallax="false" data-parallax-options='{ "start": "top bottom", "end": "bottom-=150% top"}' data-parallax-from='{"scaleX":0.6, "scaleY":0.6, "opacity":0.2, "transformOrigin": "% % px"}' data-parallax-to='{"scaleX":1, "scaleY":1, "opacity":1, "transformOrigin": "50% 50% 0px"}'>
							<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
								<figure class="w-full relative">
									<img width="1903" height="647" src="{{asset('assets/frontend')}}/images/demo/index/features-bg.png" alt="features">
								</figure>
							</div>
						</div>
					</div>
					<div class="module-content px-10percent">
						<div class="container p-0">
							<div class="row m-0">
								<div class="col col-12 col-md-7 col-xl-5 pt-20 px-0 pb-0 sm:p-0" data-custom-animations="true" data-ca-options='{"animationTarget": ".btn, .animation-element", "startDelay":100, "ease": "power4.out", "initValues":{"y": "63px", "rotationY":60, "opacity":0, "transformOrigin": "50% 50% 120px"} , "animations":{"y": "0px", "rotationY":0, "opacity":1, "transformOrigin": "50% 50% 0px"}}'>
									<a href="#analysis" class="btn btn-solid text-15 font-medium text-green-500 bg-green-200 rounded-20 module-btn-xs" data-localscroll="true">
										<span class="btn-txt" data-text="Features">Features</span>
									</a>
									<div class="mb-20 ld-fancy-heading relative animation-element">
										<h2 class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left tracking-0 mt-0/75em mb-0 sm:m-0 leading-45" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>Real & Organic<mark class="lqd-highlight"><span class="lqd-highlight-txt">Products.</span><span class="lqd-highlight-inner bg-green-200 bottom-0 left-0"></span></mark></h2>
									</div>
									<div class="hidden sm:block lqd-imggrp-single relative">
										<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center animation-element">
											<figure class="w-full relative">
												<img width="681" height="669" src="{{asset('assets/frontend')}}/images/demo/index/features.png" alt="features">
											</figure>
										</div>
									</div>
									<div class="mb-20 ld-fancy-heading relative animation-element">
										<p class="ld-fh-element inline-block relative text-17 leading-22 mb-0/25em">Our services are real and organic, providing you a product, which will help you grow your platform. </p>
									</div>
									<a href="#pricing" class="text-13 font-medium text-emerlad-500 btn btn-naked btn-icon-right btn-hover-swp animation-element" data-localscroll="true">
										<span class="btn-txt" data-text="Start Your Shop">Start Shopping</span>
										<span class="btn-icon">
											<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
										</span>
										<span class="btn-icon mr-10">
											<i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
										</span>
									</a>
								</div>
								<div class="col col-12 col-md-5 col-xl-7 xs:hidden text-end">
									<div class="lqd-imggrp-single block relative">
										<div class="lqd-imggrp-img-container inline-flex relative module-right w-65percent items-center justify-center">
											<figure class="w-full relative">
												<img width="681" height="669" src="{{asset('assets/frontend')}}/images/demo/index/features.png" alt="features">
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Analysis -->

	<!-- Start Process -->
	<section class="lqd-section process pt-60 pb-100" id="process" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="w-full flex flex-col">
						<div class="module-img w-50percent mb-20 sm:hidden">
							<div class="lqd-imggrp-single block relative -mb-130 sm:mb-0">
								<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center w-50percent animation-element">
									<figure class="w-full relative">
										<img width="544" height="384" src="{{asset('assets/frontend')}}/images/demo/index/rocket.png" alt="how it work">
									</figure>
								</div>
							</div>
						</div>
						<div class="mb-20 text-center animation-element">
							<a href="#process" class="btn btn-solid btn-has-label text-15 rounded-20 bg-green-100 text-green-500 module-btn-xs"data-localscroll="true">
								<span class="btn-txt" data-text="How it Works">The Process</span>
							</a>
						</div>
						<div class="mb-20 text-center">
							<div class="ld-fancy-heading relative animation-element">
								<h2 class="mt-0/25em mb-0 ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'> <mark class="lqd-highlight"><span class="lqd-highlight-txt">The process</span><span class="bottom-0 left-0 bg-green-200 lqd-highlight-inner"></span></mark> — Behind the scenes.</h2>
							</div>
						</div>
					</div>
					<div class="w-full pt-80 -mt-60 mb-0 bg-no-repeat bg-center transition-all bg-auto module-icon-box" style="background-image: url('{{asset('assets/frontend')}}/images/demo/index/lines.svg');">
						<div class="container">
							<div class="row items-center -mr-20 -ml-20">
								<div class="col col-6 col-md-3 text-center">
									<div class="shadow-green mb-30 mx-20 sm:mx-0 iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle animation-element">
										<div class="iconbox-icon-wrap">
											<div class="iconbox-icon-container inline-flex relative z-1 rounded-full text-18 mb-15 w-60 h-60 bg-green-500 text-white">
												<i aria-hidden="true" class="lqd-icn-ess icon-num-1"></i>
											</div>
										</div>
										<div class="contents">
											<p class="text-14 leading-20 text-secondary">Make an order, this may be a package deal, or a single service.</p>
										</div>
									</div>
								</div>
								<div class="col col-6 col-md-3 text-center">
									<div class="mb-30 mx-20 sm:mx-0 iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle animation-element">
										<div class="iconbox-icon-wrap">
											<div class="iconbox-icon-container inline-flex relative z-1 rounded-full text-18 bg-white text-blue-500 shadow-sm mb-15 w-45 h-45">
												<i aria-hidden="true" class="lqd-icn-ess icon-num-2"></i>
											</div>
										</div>
										<div class="contents">
											<p class="text-14 leading-20 text-secondary">Create, edit, and customize your order to your liking. </p>
										</div>
									</div>
								</div>
								<div class="col col-6 col-md-3 text-center">
									<div class="mb-30 mx-20 sm:mx-0 iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle animation-element">
										<div class="iconbox-icon-wrap">
											<div class="iconbox-icon-container inline-flex relative z-1 rounded-full text-18 bg-white text-blue-500 shadow-sm mb-15 w-45 h-45">
												<i aria-hidden="true" class="lqd-icn-ess icon-num-3"></i>
											</div>
										</div>
										<div class="contents">
											<p class="text-14 leading-20 text-secondary">We instantly process your order, based on your choice.</p>
										</div>
									</div>
								</div>
								<div class="col col-6 col-md-3 text-center">
									<div class="mb-30 mx-20 sm:mx-0 iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle animation-element">
										<div class="iconbox-icon-wrap">
											<div class="shadow-sm mb-15 w-45 h-45 iconbox-icon-container inline-flex relative z-1 rounded-full text-18 bg-white text-blue-500">
												<i aria-hidden="true" class="lqd-icn-ess icon-num-4"></i>
											</div>
										</div>
										<div class="contents">
											<p class="text-14 leading-20 text-secondary">Watch the results come in, and your platform grow to new levels!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Process -->

	<!-- Start Testimonials -->
	<section class="lqd-section testimonials py-80 transition-all bg-slate-900" data-section-luminosity="dark" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
		<div class="background-overlay opacity-100 bg-no-repeat bg-center transition-all" style="background-image: url('{{asset('assets/frontend')}}/images/demo/index/bg-lines.svg');"></div>
		<div class="lqd-shape lqd-shape-top" data-negative="false">
			<svg class="lqd-custom-shape h-15px -rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 9" preserveAspectRatio="none">
				<path class="lqd-shape-fill" fill="#fff" d="M1379,9.92687204e-05 C1380.76992,9.92687204e-05 1382.53969,0.677111942 1383.8855,2.03074021 L1386.94548,5.11740181 C1389.63201,7.8270408 1394.03086,7.8270408 1396.71693,5.11740181 L1399.77999,2.03074021 C1402.46652,-0.676913405 1406.86276,-0.676913405 1409.54883,2.03074021 L1412.61389,5.11740181 C1415.29842,7.8270408 1419.69712,7.8270408 1422.38334,5.11740181 L1425.44594,2.03074021 C1428.13493,-0.676913405 1432.53179,-0.676913405 1435.21785,2.03074021 L1438.28045,5.11978426 C1440.96991,7.82743787 1445.36599,7.82743787 1448.05221,5.11978426 L1451.11527,2.03074021 C1453.80196,-0.676913405 1458.19758,-0.676913405 1460.88704,2.03074021 L1463.94732,5.11740181 C1466.63324,7.8270408 1471.03225,7.8270408 1473.71862,5.11740181 L1476.78153,2.03074021 C1479.46775,-0.676913405 1483.86445,-0.676913405 1486.55314,2.03074021 L1489.61343,5.11740181 C1492.30227,7.8270408 1496.69866,7.8270408 1499.38488,5.11740181 L1502.44779,2.03074021 C1505.13416,-0.676913405 1509.53025,-0.676913405 1512.21724,2.03074021 L1515.2803,5.11740181 C1517.96667,7.8270408 1522.36291,7.8270408 1525.05175,5.11740181 L1528.11435,2.03074021 C1529.45754,0.675920717 1531.22962,-0.00228318057 1533,9.92687204e-05 L1533,9 L1379,9 L1226,9 L1073,9 L919,9 L766,9 L613,9 L460,9 L307,9 L154,9 L0,9 L0,9.92687204e-05 C1.769922,9.92687204e-05 3.53969,0.677111942 4.885496,2.03074021 L7.945476,5.11740181 C10.632006,7.8270408 15.030862,7.8270408 17.71693,5.11740181 L20.77999,2.03074021 C23.46652,-0.676913405 27.862758,-0.676913405 30.548826,2.03074021 L33.613888,5.11740181 C36.298416,7.8270408 40.697118,7.8270408 43.38334,5.11740181 L46.445938,2.03074021 C49.134932,-0.676913405 53.531786,-0.676913405 56.217854,2.03074021 L59.280452,5.11978426 C61.969908,7.82743787 66.365992,7.82743787 69.052214,5.11978426 L72.115274,2.03074021 C74.801958,-0.676913405 79.19758,-0.676913405 81.887036,2.03074021 L84.947324,5.11740181 C87.633238,7.8270408 92.032248,7.8270408 94.718624,5.11740181 L97.78153,2.03074021 C100.467752,-0.676913405 104.864452,-0.676913405 107.553138,2.03074021 L110.613426,5.11740181 C113.302266,7.8270408 117.698658,7.8270408 120.38488,5.11740181 L123.447786,2.03074021 C126.134162,-0.676913405 130.530246,-0.676913405 133.217238,2.03074021 L136.280298,5.11740181 C138.966674,7.8270408 143.362912,7.8270408 146.051752,5.11740181 L149.11435,2.03074021 C150.203951,0.93170321 151.575786,0.277916034 153,0.0714983408 L153,9.92687204e-05 C153.165404,9.92687204e-05 153.330806,0.00601187356 153.495861,0.0178367592 C153.663677,0.0057866107 153.831846,-0.000127020259 154,9.92687204e-05 L154,0.0725499097 C155.423321,0.279975174 156.793877,0.93277591 157.885496,2.03074021 L160.945476,5.11740181 C163.632006,7.8270408 168.030862,7.8270408 170.71693,5.11740181 L173.77999,2.03074021 C176.46652,-0.676913405 180.862758,-0.676913405 183.548826,2.03074021 L186.613888,5.11740181 C189.298416,7.8270408 193.697118,7.8270408 196.38334,5.11740181 L199.445938,2.03074021 C202.134932,-0.676913405 206.531786,-0.676913405 209.217854,2.03074021 L212.280452,5.11978426 C214.969908,7.82743787 219.365992,7.82743787 222.052214,5.11978426 L225.115274,2.03074021 C227.801958,-0.676913405 232.19758,-0.676913405 234.887036,2.03074021 L237.947324,5.11740181 C240.633238,7.8270408 245.032248,7.8270408 247.718624,5.11740181 L250.78153,2.03074021 C253.467752,-0.676913405 257.864452,-0.676913405 260.553138,2.03074021 L263.613426,5.11740181 C266.302266,7.8270408 270.698658,7.8270408 273.38488,5.11740181 L276.447786,2.03074021 C279.134162,-0.676913405 283.530246,-0.676913405 286.217238,2.03074021 L289.280298,5.11740181 C291.966674,7.8270408 296.362912,7.8270408 299.051752,5.11740181 L302.11435,2.03074021 C303.203951,0.93170321 304.575786,0.277916034 306,0.0714983408 L306,9.92687204e-05 C306.165404,9.92687204e-05 306.330806,0.00601187356 306.495861,0.0178367592 C306.663677,0.0057866107 306.831846,-0.000127020259 307,9.92687204e-05 L307,0.0725499097 C308.423321,0.279975174 309.793877,0.93277591 310.885496,2.03074021 L313.945476,5.11740181 C316.632006,7.8270408 321.030862,7.8270408 323.71693,5.11740181 L326.77999,2.03074021 C329.46652,-0.676913405 333.862758,-0.676913405 336.548826,2.03074021 L339.613888,5.11740181 C342.298416,7.8270408 346.697118,7.8270408 349.38334,5.11740181 L352.445938,2.03074021 C355.134932,-0.676913405 359.531786,-0.676913405 362.217854,2.03074021 L365.280452,5.11978426 C367.969908,7.82743787 372.365992,7.82743787 375.052214,5.11978426 L378.115274,2.03074021 C380.801958,-0.676913405 385.19758,-0.676913405 387.887036,2.03074021 L390.947324,5.11740181 C393.633238,7.8270408 398.032248,7.8270408 400.718624,5.11740181 L403.78153,2.03074021 C406.467752,-0.676913405 410.864452,-0.676913405 413.553138,2.03074021 L416.613426,5.11740181 C419.302266,7.8270408 423.698658,7.8270408 426.38488,5.11740181 L429.447786,2.03074021 C432.134162,-0.676913405 436.530246,-0.676913405 439.217238,2.03074021 L442.280298,5.11740181 C444.966674,7.8270408 449.362912,7.8270408 452.051752,5.11740181 L455.11435,2.03074021 C456.203951,0.93170321 457.575786,0.277916034 459,0.0714983408 L459,9.92687204e-05 C459.165404,9.92687204e-05 459.330806,0.00601187356 459.495861,0.0178367592 C459.663677,0.0057866107 459.831846,-0.000127020259 460,9.92687204e-05 L460,0.0725499097 C461.423321,0.279975174 462.793877,0.93277591 463.885496,2.03074021 L466.945476,5.11740181 C469.632006,7.8270408 474.030862,7.8270408 476.71693,5.11740181 L479.77999,2.03074021 C482.46652,-0.676913405 486.862758,-0.676913405 489.548826,2.03074021 L492.613888,5.11740181 C495.298416,7.8270408 499.697118,7.8270408 502.38334,5.11740181 L505.445938,2.03074021 C508.134932,-0.676913405 512.531786,-0.676913405 515.217854,2.03074021 L518.280452,5.11978426 C520.969908,7.82743787 525.365992,7.82743787 528.052214,5.11978426 L531.115274,2.03074021 C533.801958,-0.676913405 538.19758,-0.676913405 540.887036,2.03074021 L543.947324,5.11740181 C546.633238,7.8270408 551.032248,7.8270408 553.718624,5.11740181 L556.78153,2.03074021 C559.467752,-0.676913405 563.864452,-0.676913405 566.553138,2.03074021 L569.613426,5.11740181 C572.302266,7.8270408 576.698658,7.8270408 579.38488,5.11740181 L582.447786,2.03074021 C585.134162,-0.676913405 589.530246,-0.676913405 592.217238,2.03074021 L595.280298,5.11740181 C597.966674,7.8270408 602.362912,7.8270408 605.051752,5.11740181 L608.11435,2.03074021 C609.203951,0.93170321 610.575786,0.277916034 612,0.0714983408 L612,9.92687204e-05 C612.165404,9.92687204e-05 612.330806,0.00601187356 612.495861,0.0178367592 C612.663677,0.0057866107 612.831846,-0.000127020259 613,9.92687204e-05 L613,0.0725499097 C614.423321,0.279975174 615.793877,0.93277591 616.885496,2.03074021 L619.945476,5.11740181 C622.632006,7.8270408 627.030862,7.8270408 629.71693,5.11740181 L632.77999,2.03074021 C635.46652,-0.676913405 639.862758,-0.676913405 642.548826,2.03074021 L645.613888,5.11740181 C648.298416,7.8270408 652.697118,7.8270408 655.38334,5.11740181 L658.445938,2.03074021 C661.134932,-0.676913405 665.531786,-0.676913405 668.217854,2.03074021 L671.280452,5.11978426 C673.969908,7.82743787 678.365992,7.82743787 681.052214,5.11978426 L684.115274,2.03074021 C686.801958,-0.676913405 691.19758,-0.676913405 693.887036,2.03074021 L696.947324,5.11740181 C699.633238,7.8270408 704.032248,7.8270408 706.718624,5.11740181 L709.78153,2.03074021 C712.467752,-0.676913405 716.864452,-0.676913405 719.553138,2.03074021 L722.613426,5.11740181 C725.302266,7.8270408 729.698658,7.8270408 732.38488,5.11740181 L735.447786,2.03074021 C738.134162,-0.676913405 742.530246,-0.676913405 745.217238,2.03074021 L748.280298,5.11740181 C750.966674,7.8270408 755.362912,7.8270408 758.051752,5.11740181 L761.11435,2.03074021 C762.203951,0.93170321 763.575786,0.277916034 765,0.0714983408 L765,9.92687204e-05 C765.165404,9.92687204e-05 765.330806,0.00601187356 765.495861,0.0178367592 C765.663677,0.0057866107 765.831846,-0.000127020259 766,9.92687204e-05 L766,0.0725499097 C767.423321,0.279975174 768.793877,0.93277591 769.885496,2.03074021 L772.945476,5.11740181 C775.632006,7.8270408 780.030862,7.8270408 782.71693,5.11740181 L785.77999,2.03074021 C788.46652,-0.676913405 792.862758,-0.676913405 795.548826,2.03074021 L798.613888,5.11740181 C801.298416,7.8270408 805.697118,7.8270408 808.38334,5.11740181 L811.445938,2.03074021 C814.134932,-0.676913405 818.531786,-0.676913405 821.217854,2.03074021 L824.280452,5.11978426 C826.969908,7.82743787 831.365992,7.82743787 834.052214,5.11978426 L837.115274,2.03074021 C839.801958,-0.676913405 844.19758,-0.676913405 846.887036,2.03074021 L849.947324,5.11740181 C852.633238,7.8270408 857.032248,7.8270408 859.718624,5.11740181 L862.78153,2.03074021 C865.467752,-0.676913405 869.864452,-0.676913405 872.553138,2.03074021 L875.613426,5.11740181 C878.302266,7.8270408 882.698658,7.8270408 885.38488,5.11740181 L888.447786,2.03074021 C891.134162,-0.676913405 895.530246,-0.676913405 898.217238,2.03074021 L901.280298,5.11740181 C903.966674,7.8270408 908.362912,7.8270408 911.051752,5.11740181 L914.11435,2.03074021 C915.457538,0.675920717 917.229616,-0.00228318057 919,9.92687204e-05 C920.769922,9.92687204e-05 922.53969,0.677111942 923.885496,2.03074021 L926.945476,5.11740181 C929.632006,7.8270408 934.030862,7.8270408 936.71693,5.11740181 L939.77999,2.03074021 C942.46652,-0.676913405 946.862758,-0.676913405 949.548826,2.03074021 L952.613888,5.11740181 C955.298416,7.8270408 959.697118,7.8270408 962.38334,5.11740181 L965.445938,2.03074021 C968.134932,-0.676913405 972.531786,-0.676913405 975.217854,2.03074021 L978.280452,5.11978426 C980.969908,7.82743787 985.365992,7.82743787 988.052214,5.11978426 L991.115274,2.03074021 C993.801958,-0.676913405 998.19758,-0.676913405 1000.88704,2.03074021 L1003.94732,5.11740181 C1006.63324,7.8270408 1011.03225,7.8270408 1013.71862,5.11740181 L1016.78153,2.03074021 C1019.46775,-0.676913405 1023.86445,-0.676913405 1026.55314,2.03074021 L1029.61343,5.11740181 C1032.30227,7.8270408 1036.69866,7.8270408 1039.38488,5.11740181 L1042.44779,2.03074021 C1045.13416,-0.676913405 1049.53025,-0.676913405 1052.21724,2.03074021 L1055.2803,5.11740181 C1057.96667,7.8270408 1062.36291,7.8270408 1065.05175,5.11740181 L1068.11435,2.03074021 C1069.20395,0.93170321 1070.57579,0.277916034 1072,0.0714983408 L1072,9.92687204e-05 C1072.1654,9.92687204e-05 1072.33081,0.00601187356 1072.49586,0.0178367592 C1072.66368,0.0057866107 1072.83185,-0.000127020259 1073,9.92687204e-05 L1073,0.0725499097 C1074.42332,0.279975174 1075.79388,0.93277591 1076.8855,2.03074021 L1079.94548,5.11740181 C1082.63201,7.8270408 1087.03086,7.8270408 1089.71693,5.11740181 L1092.77999,2.03074021 C1095.46652,-0.676913405 1099.86276,-0.676913405 1102.54883,2.03074021 L1105.61389,5.11740181 C1108.29842,7.8270408 1112.69712,7.8270408 1115.38334,5.11740181 L1118.44594,2.03074021 C1121.13493,-0.676913405 1125.53179,-0.676913405 1128.21785,2.03074021 L1131.28045,5.11978426 C1133.96991,7.82743787 1138.36599,7.82743787 1141.05221,5.11978426 L1144.11527,2.03074021 C1146.80196,-0.676913405 1151.19758,-0.676913405 1153.88704,2.03074021 L1156.94732,5.11740181 C1159.63324,7.8270408 1164.03225,7.8270408 1166.71862,5.11740181 L1169.78153,2.03074021 C1172.46775,-0.676913405 1176.86445,-0.676913405 1179.55314,2.03074021 L1182.61343,5.11740181 C1185.30227,7.8270408 1189.69866,7.8270408 1192.38488,5.11740181 L1195.44779,2.03074021 C1198.13416,-0.676913405 1202.53025,-0.676913405 1205.21724,2.03074021 L1208.2803,5.11740181 C1210.96667,7.8270408 1215.36291,7.8270408 1218.05175,5.11740181 L1221.11435,2.03074021 C1222.20395,0.93170321 1223.57579,0.277916034 1225,0.0714983408 L1225,9.92687204e-05 C1225.1654,9.92687204e-05 1225.33081,0.00601187356 1225.49586,0.0178367592 C1225.66368,0.0057866107 1225.83185,-0.000127020259 1226,9.92687204e-05 L1226,0.0725499097 C1227.42332,0.279975174 1228.79388,0.93277591 1229.8855,2.03074021 L1232.94548,5.11740181 C1235.63201,7.8270408 1240.03086,7.8270408 1242.71693,5.11740181 L1245.77999,2.03074021 C1248.46652,-0.676913405 1252.86276,-0.676913405 1255.54883,2.03074021 L1258.61389,5.11740181 C1261.29842,7.8270408 1265.69712,7.8270408 1268.38334,5.11740181 L1271.44594,2.03074021 C1274.13493,-0.676913405 1278.53179,-0.676913405 1281.21785,2.03074021 L1284.28045,5.11978426 C1286.96991,7.82743787 1291.36599,7.82743787 1294.05221,5.11978426 L1297.11527,2.03074021 C1299.80196,-0.676913405 1304.19758,-0.676913405 1306.88704,2.03074021 L1309.94732,5.11740181 C1312.63324,7.8270408 1317.03225,7.8270408 1319.71862,5.11740181 L1322.78153,2.03074021 C1325.46775,-0.676913405 1329.86445,-0.676913405 1332.55314,2.03074021 L1335.61343,5.11740181 C1338.30227,7.8270408 1342.69866,7.8270408 1345.38488,5.11740181 L1348.44779,2.03074021 C1351.13416,-0.676913405 1355.53025,-0.676913405 1358.21724,2.03074021 L1361.2803,5.11740181 C1363.96667,7.8270408 1368.36291,7.8270408 1371.05175,5.11740181 L1374.11435,2.03074021 C1375.45754,0.675920717 1377.22962,-0.00228318057 1379,9.92687204e-05 Z"></path>
			</svg>
		</div>
		<div class="lqd-shape lqd-shape-bottom" data-negative="false">
			<svg class="lqd-custom-shape h-15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 9" preserveAspectRatio="none">
				<path class="lqd-shape-fill" fill="#fff" d="M1379,9.92687204e-05 C1380.76992,9.92687204e-05 1382.53969,0.677111942 1383.8855,2.03074021 L1386.94548,5.11740181 C1389.63201,7.8270408 1394.03086,7.8270408 1396.71693,5.11740181 L1399.77999,2.03074021 C1402.46652,-0.676913405 1406.86276,-0.676913405 1409.54883,2.03074021 L1412.61389,5.11740181 C1415.29842,7.8270408 1419.69712,7.8270408 1422.38334,5.11740181 L1425.44594,2.03074021 C1428.13493,-0.676913405 1432.53179,-0.676913405 1435.21785,2.03074021 L1438.28045,5.11978426 C1440.96991,7.82743787 1445.36599,7.82743787 1448.05221,5.11978426 L1451.11527,2.03074021 C1453.80196,-0.676913405 1458.19758,-0.676913405 1460.88704,2.03074021 L1463.94732,5.11740181 C1466.63324,7.8270408 1471.03225,7.8270408 1473.71862,5.11740181 L1476.78153,2.03074021 C1479.46775,-0.676913405 1483.86445,-0.676913405 1486.55314,2.03074021 L1489.61343,5.11740181 C1492.30227,7.8270408 1496.69866,7.8270408 1499.38488,5.11740181 L1502.44779,2.03074021 C1505.13416,-0.676913405 1509.53025,-0.676913405 1512.21724,2.03074021 L1515.2803,5.11740181 C1517.96667,7.8270408 1522.36291,7.8270408 1525.05175,5.11740181 L1528.11435,2.03074021 C1529.45754,0.675920717 1531.22962,-0.00228318057 1533,9.92687204e-05 L1533,9 L1379,9 L1226,9 L1073,9 L919,9 L766,9 L613,9 L460,9 L307,9 L154,9 L0,9 L0,9.92687204e-05 C1.769922,9.92687204e-05 3.53969,0.677111942 4.885496,2.03074021 L7.945476,5.11740181 C10.632006,7.8270408 15.030862,7.8270408 17.71693,5.11740181 L20.77999,2.03074021 C23.46652,-0.676913405 27.862758,-0.676913405 30.548826,2.03074021 L33.613888,5.11740181 C36.298416,7.8270408 40.697118,7.8270408 43.38334,5.11740181 L46.445938,2.03074021 C49.134932,-0.676913405 53.531786,-0.676913405 56.217854,2.03074021 L59.280452,5.11978426 C61.969908,7.82743787 66.365992,7.82743787 69.052214,5.11978426 L72.115274,2.03074021 C74.801958,-0.676913405 79.19758,-0.676913405 81.887036,2.03074021 L84.947324,5.11740181 C87.633238,7.8270408 92.032248,7.8270408 94.718624,5.11740181 L97.78153,2.03074021 C100.467752,-0.676913405 104.864452,-0.676913405 107.553138,2.03074021 L110.613426,5.11740181 C113.302266,7.8270408 117.698658,7.8270408 120.38488,5.11740181 L123.447786,2.03074021 C126.134162,-0.676913405 130.530246,-0.676913405 133.217238,2.03074021 L136.280298,5.11740181 C138.966674,7.8270408 143.362912,7.8270408 146.051752,5.11740181 L149.11435,2.03074021 C150.203951,0.93170321 151.575786,0.277916034 153,0.0714983408 L153,9.92687204e-05 C153.165404,9.92687204e-05 153.330806,0.00601187356 153.495861,0.0178367592 C153.663677,0.0057866107 153.831846,-0.000127020259 154,9.92687204e-05 L154,0.0725499097 C155.423321,0.279975174 156.793877,0.93277591 157.885496,2.03074021 L160.945476,5.11740181 C163.632006,7.8270408 168.030862,7.8270408 170.71693,5.11740181 L173.77999,2.03074021 C176.46652,-0.676913405 180.862758,-0.676913405 183.548826,2.03074021 L186.613888,5.11740181 C189.298416,7.8270408 193.697118,7.8270408 196.38334,5.11740181 L199.445938,2.03074021 C202.134932,-0.676913405 206.531786,-0.676913405 209.217854,2.03074021 L212.280452,5.11978426 C214.969908,7.82743787 219.365992,7.82743787 222.052214,5.11978426 L225.115274,2.03074021 C227.801958,-0.676913405 232.19758,-0.676913405 234.887036,2.03074021 L237.947324,5.11740181 C240.633238,7.8270408 245.032248,7.8270408 247.718624,5.11740181 L250.78153,2.03074021 C253.467752,-0.676913405 257.864452,-0.676913405 260.553138,2.03074021 L263.613426,5.11740181 C266.302266,7.8270408 270.698658,7.8270408 273.38488,5.11740181 L276.447786,2.03074021 C279.134162,-0.676913405 283.530246,-0.676913405 286.217238,2.03074021 L289.280298,5.11740181 C291.966674,7.8270408 296.362912,7.8270408 299.051752,5.11740181 L302.11435,2.03074021 C303.203951,0.93170321 304.575786,0.277916034 306,0.0714983408 L306,9.92687204e-05 C306.165404,9.92687204e-05 306.330806,0.00601187356 306.495861,0.0178367592 C306.663677,0.0057866107 306.831846,-0.000127020259 307,9.92687204e-05 L307,0.0725499097 C308.423321,0.279975174 309.793877,0.93277591 310.885496,2.03074021 L313.945476,5.11740181 C316.632006,7.8270408 321.030862,7.8270408 323.71693,5.11740181 L326.77999,2.03074021 C329.46652,-0.676913405 333.862758,-0.676913405 336.548826,2.03074021 L339.613888,5.11740181 C342.298416,7.8270408 346.697118,7.8270408 349.38334,5.11740181 L352.445938,2.03074021 C355.134932,-0.676913405 359.531786,-0.676913405 362.217854,2.03074021 L365.280452,5.11978426 C367.969908,7.82743787 372.365992,7.82743787 375.052214,5.11978426 L378.115274,2.03074021 C380.801958,-0.676913405 385.19758,-0.676913405 387.887036,2.03074021 L390.947324,5.11740181 C393.633238,7.8270408 398.032248,7.8270408 400.718624,5.11740181 L403.78153,2.03074021 C406.467752,-0.676913405 410.864452,-0.676913405 413.553138,2.03074021 L416.613426,5.11740181 C419.302266,7.8270408 423.698658,7.8270408 426.38488,5.11740181 L429.447786,2.03074021 C432.134162,-0.676913405 436.530246,-0.676913405 439.217238,2.03074021 L442.280298,5.11740181 C444.966674,7.8270408 449.362912,7.8270408 452.051752,5.11740181 L455.11435,2.03074021 C456.203951,0.93170321 457.575786,0.277916034 459,0.0714983408 L459,9.92687204e-05 C459.165404,9.92687204e-05 459.330806,0.00601187356 459.495861,0.0178367592 C459.663677,0.0057866107 459.831846,-0.000127020259 460,9.92687204e-05 L460,0.0725499097 C461.423321,0.279975174 462.793877,0.93277591 463.885496,2.03074021 L466.945476,5.11740181 C469.632006,7.8270408 474.030862,7.8270408 476.71693,5.11740181 L479.77999,2.03074021 C482.46652,-0.676913405 486.862758,-0.676913405 489.548826,2.03074021 L492.613888,5.11740181 C495.298416,7.8270408 499.697118,7.8270408 502.38334,5.11740181 L505.445938,2.03074021 C508.134932,-0.676913405 512.531786,-0.676913405 515.217854,2.03074021 L518.280452,5.11978426 C520.969908,7.82743787 525.365992,7.82743787 528.052214,5.11978426 L531.115274,2.03074021 C533.801958,-0.676913405 538.19758,-0.676913405 540.887036,2.03074021 L543.947324,5.11740181 C546.633238,7.8270408 551.032248,7.8270408 553.718624,5.11740181 L556.78153,2.03074021 C559.467752,-0.676913405 563.864452,-0.676913405 566.553138,2.03074021 L569.613426,5.11740181 C572.302266,7.8270408 576.698658,7.8270408 579.38488,5.11740181 L582.447786,2.03074021 C585.134162,-0.676913405 589.530246,-0.676913405 592.217238,2.03074021 L595.280298,5.11740181 C597.966674,7.8270408 602.362912,7.8270408 605.051752,5.11740181 L608.11435,2.03074021 C609.203951,0.93170321 610.575786,0.277916034 612,0.0714983408 L612,9.92687204e-05 C612.165404,9.92687204e-05 612.330806,0.00601187356 612.495861,0.0178367592 C612.663677,0.0057866107 612.831846,-0.000127020259 613,9.92687204e-05 L613,0.0725499097 C614.423321,0.279975174 615.793877,0.93277591 616.885496,2.03074021 L619.945476,5.11740181 C622.632006,7.8270408 627.030862,7.8270408 629.71693,5.11740181 L632.77999,2.03074021 C635.46652,-0.676913405 639.862758,-0.676913405 642.548826,2.03074021 L645.613888,5.11740181 C648.298416,7.8270408 652.697118,7.8270408 655.38334,5.11740181 L658.445938,2.03074021 C661.134932,-0.676913405 665.531786,-0.676913405 668.217854,2.03074021 L671.280452,5.11978426 C673.969908,7.82743787 678.365992,7.82743787 681.052214,5.11978426 L684.115274,2.03074021 C686.801958,-0.676913405 691.19758,-0.676913405 693.887036,2.03074021 L696.947324,5.11740181 C699.633238,7.8270408 704.032248,7.8270408 706.718624,5.11740181 L709.78153,2.03074021 C712.467752,-0.676913405 716.864452,-0.676913405 719.553138,2.03074021 L722.613426,5.11740181 C725.302266,7.8270408 729.698658,7.8270408 732.38488,5.11740181 L735.447786,2.03074021 C738.134162,-0.676913405 742.530246,-0.676913405 745.217238,2.03074021 L748.280298,5.11740181 C750.966674,7.8270408 755.362912,7.8270408 758.051752,5.11740181 L761.11435,2.03074021 C762.203951,0.93170321 763.575786,0.277916034 765,0.0714983408 L765,9.92687204e-05 C765.165404,9.92687204e-05 765.330806,0.00601187356 765.495861,0.0178367592 C765.663677,0.0057866107 765.831846,-0.000127020259 766,9.92687204e-05 L766,0.0725499097 C767.423321,0.279975174 768.793877,0.93277591 769.885496,2.03074021 L772.945476,5.11740181 C775.632006,7.8270408 780.030862,7.8270408 782.71693,5.11740181 L785.77999,2.03074021 C788.46652,-0.676913405 792.862758,-0.676913405 795.548826,2.03074021 L798.613888,5.11740181 C801.298416,7.8270408 805.697118,7.8270408 808.38334,5.11740181 L811.445938,2.03074021 C814.134932,-0.676913405 818.531786,-0.676913405 821.217854,2.03074021 L824.280452,5.11978426 C826.969908,7.82743787 831.365992,7.82743787 834.052214,5.11978426 L837.115274,2.03074021 C839.801958,-0.676913405 844.19758,-0.676913405 846.887036,2.03074021 L849.947324,5.11740181 C852.633238,7.8270408 857.032248,7.8270408 859.718624,5.11740181 L862.78153,2.03074021 C865.467752,-0.676913405 869.864452,-0.676913405 872.553138,2.03074021 L875.613426,5.11740181 C878.302266,7.8270408 882.698658,7.8270408 885.38488,5.11740181 L888.447786,2.03074021 C891.134162,-0.676913405 895.530246,-0.676913405 898.217238,2.03074021 L901.280298,5.11740181 C903.966674,7.8270408 908.362912,7.8270408 911.051752,5.11740181 L914.11435,2.03074021 C915.457538,0.675920717 917.229616,-0.00228318057 919,9.92687204e-05 C920.769922,9.92687204e-05 922.53969,0.677111942 923.885496,2.03074021 L926.945476,5.11740181 C929.632006,7.8270408 934.030862,7.8270408 936.71693,5.11740181 L939.77999,2.03074021 C942.46652,-0.676913405 946.862758,-0.676913405 949.548826,2.03074021 L952.613888,5.11740181 C955.298416,7.8270408 959.697118,7.8270408 962.38334,5.11740181 L965.445938,2.03074021 C968.134932,-0.676913405 972.531786,-0.676913405 975.217854,2.03074021 L978.280452,5.11978426 C980.969908,7.82743787 985.365992,7.82743787 988.052214,5.11978426 L991.115274,2.03074021 C993.801958,-0.676913405 998.19758,-0.676913405 1000.88704,2.03074021 L1003.94732,5.11740181 C1006.63324,7.8270408 1011.03225,7.8270408 1013.71862,5.11740181 L1016.78153,2.03074021 C1019.46775,-0.676913405 1023.86445,-0.676913405 1026.55314,2.03074021 L1029.61343,5.11740181 C1032.30227,7.8270408 1036.69866,7.8270408 1039.38488,5.11740181 L1042.44779,2.03074021 C1045.13416,-0.676913405 1049.53025,-0.676913405 1052.21724,2.03074021 L1055.2803,5.11740181 C1057.96667,7.8270408 1062.36291,7.8270408 1065.05175,5.11740181 L1068.11435,2.03074021 C1069.20395,0.93170321 1070.57579,0.277916034 1072,0.0714983408 L1072,9.92687204e-05 C1072.1654,9.92687204e-05 1072.33081,0.00601187356 1072.49586,0.0178367592 C1072.66368,0.0057866107 1072.83185,-0.000127020259 1073,9.92687204e-05 L1073,0.0725499097 C1074.42332,0.279975174 1075.79388,0.93277591 1076.8855,2.03074021 L1079.94548,5.11740181 C1082.63201,7.8270408 1087.03086,7.8270408 1089.71693,5.11740181 L1092.77999,2.03074021 C1095.46652,-0.676913405 1099.86276,-0.676913405 1102.54883,2.03074021 L1105.61389,5.11740181 C1108.29842,7.8270408 1112.69712,7.8270408 1115.38334,5.11740181 L1118.44594,2.03074021 C1121.13493,-0.676913405 1125.53179,-0.676913405 1128.21785,2.03074021 L1131.28045,5.11978426 C1133.96991,7.82743787 1138.36599,7.82743787 1141.05221,5.11978426 L1144.11527,2.03074021 C1146.80196,-0.676913405 1151.19758,-0.676913405 1153.88704,2.03074021 L1156.94732,5.11740181 C1159.63324,7.8270408 1164.03225,7.8270408 1166.71862,5.11740181 L1169.78153,2.03074021 C1172.46775,-0.676913405 1176.86445,-0.676913405 1179.55314,2.03074021 L1182.61343,5.11740181 C1185.30227,7.8270408 1189.69866,7.8270408 1192.38488,5.11740181 L1195.44779,2.03074021 C1198.13416,-0.676913405 1202.53025,-0.676913405 1205.21724,2.03074021 L1208.2803,5.11740181 C1210.96667,7.8270408 1215.36291,7.8270408 1218.05175,5.11740181 L1221.11435,2.03074021 C1222.20395,0.93170321 1223.57579,0.277916034 1225,0.0714983408 L1225,9.92687204e-05 C1225.1654,9.92687204e-05 1225.33081,0.00601187356 1225.49586,0.0178367592 C1225.66368,0.0057866107 1225.83185,-0.000127020259 1226,9.92687204e-05 L1226,0.0725499097 C1227.42332,0.279975174 1228.79388,0.93277591 1229.8855,2.03074021 L1232.94548,5.11740181 C1235.63201,7.8270408 1240.03086,7.8270408 1242.71693,5.11740181 L1245.77999,2.03074021 C1248.46652,-0.676913405 1252.86276,-0.676913405 1255.54883,2.03074021 L1258.61389,5.11740181 C1261.29842,7.8270408 1265.69712,7.8270408 1268.38334,5.11740181 L1271.44594,2.03074021 C1274.13493,-0.676913405 1278.53179,-0.676913405 1281.21785,2.03074021 L1284.28045,5.11978426 C1286.96991,7.82743787 1291.36599,7.82743787 1294.05221,5.11978426 L1297.11527,2.03074021 C1299.80196,-0.676913405 1304.19758,-0.676913405 1306.88704,2.03074021 L1309.94732,5.11740181 C1312.63324,7.8270408 1317.03225,7.8270408 1319.71862,5.11740181 L1322.78153,2.03074021 C1325.46775,-0.676913405 1329.86445,-0.676913405 1332.55314,2.03074021 L1335.61343,5.11740181 C1338.30227,7.8270408 1342.69866,7.8270408 1345.38488,5.11740181 L1348.44779,2.03074021 C1351.13416,-0.676913405 1355.53025,-0.676913405 1358.21724,2.03074021 L1361.2803,5.11740181 C1363.96667,7.8270408 1368.36291,7.8270408 1371.05175,5.11740181 L1374.11435,2.03074021 C1375.45754,0.675920717 1377.22962,-0.00228318057 1379,9.92687204e-05 Z"></path>
			</svg>
		</div>
		<div class="container-fluid p-0 animation-element">
			<div class="w-full block mb-35">
				<div class="w-500 sm:w-full flex flex-col mx-auto text-center p-10">
					<div class="ld-fancy-heading relative mb-20 animation-element">
						<h2 class="ld-fh-element inline-block relative mt-0/5em mb-0 text-white">Testimonials.</h2>
					</div>
					<div class="ld-fancy-heading relative animation-element">
						<p class="ld-fh-element mb-0/5em inline-block relative text-18 font-medium leading-25 text-white-50">Use customer data to build great and solid product experiences that convert.</p>
					</div>
				</div>
			</div>
			<div class="w-full block mb-70 sm:m-0 module-carousels">
				<div class="carousel-container carousel-dots-mobile-outside carousel-dots-mobile-center animation-element">
					<div class="carousel-items relative" data-lqd-flickity='{"cellAlign": "center", "autoPlay": true, "wrapAround": true, "groupCells": false, "pauseAutoPlayOnHover": false, "prevNextButtons": false, "pageDots": false}'>
						<div class="carousel-item flex flex-col justify-center px-15 w-25percent lg:w-50percent">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full">
									<div class="lqd-testi relative lqd-testi-style-19 flex flex-col lqd-testi-card lqd-testi-shadow-sm lqd-testi-details-same lqd-testi-details-inline lqd-testi-quote-18 lqd-testi-avatar-60">
										<div class="lqd-testi-extra mb-1/35em">
											<figure>
												<img src="{{asset('assets/frontend')}}/images/demo/index/client-dark-hulu.svg" alt="Karpz, Web Dev">
											</figure>
										</div>
										<div class="lqd-testi-quote mb-1/5em">
											<blockquote>
												<p>Design quality and optimization are the key points because of which I chose this theme. Thank you to the developers and support team, you are great.</p>
											</blockquote>
										</div>
										<div class="flex mb-0/5em">
											<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-fill">
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
											</ul>
										</div>
										<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
											<div class="lqd-testi-details flex items-center">
												<div class="lqd-testi-np flex items-center">
													<h3 class="text-blue-500">Karpz, Web Dev</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item flex flex-col justify-center px-15 w-25percent lg:w-50percent">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full">
									<div class="lqd-testi relative lqd-testi-style-19 flex flex-col lqd-testi-card lqd-testi-shadow-sm lqd-testi-details-same lqd-testi-details-inline lqd-testi-quote-18 lqd-testi-avatar-60">
										<div class="lqd-testi-extra mb-1/35em">
											<figure>
												<img src="{{asset('assets/frontend')}}/images/demo/index/client-dark-spotify.svg" alt="Karpz, Web Dev">
											</figure>
										</div>
										<div class="lqd-testi-quote mb-1/5em">
											<blockquote>
												<p>This is a random testimonial, you can place anything you like in this test box, just make sure it looks organic, and helps the customers feel safe and that RSB is a trusted service.</p>
											</blockquote>
										</div>
										<div class="flex mb-0/5em">
											<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-fill">
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
											</ul>
										</div>
										<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
											<div class="lqd-testi-details flex items-center">
												<div class="lqd-testi-np flex items-center">
													<h3 class="text-blue-500">Karpz, Web Dev</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item flex flex-col justify-center px-15 w-25percent lg:w-50percent">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full">
									<div class="lqd-testi relative lqd-testi-style-19 flex flex-col lqd-testi-card lqd-testi-shadow-sm lqd-testi-details-same lqd-testi-details-inline lqd-testi-quote-18 lqd-testi-avatar-60">
										<div class="lqd-testi-extra mb-1/35em">
											<figure>
												<img src="{{asset('assets/frontend')}}/images/demo/index/client-dark-hulu.svg" alt="Karpz, Web Dev">
											</figure>
										</div>
										<div class="lqd-testi-quote mb-1/5em">
											<blockquote>
												<p>This is a random testimonial, you can place anything you like in this test box, just make sure it looks organic, and helps the customers feel safe and that RSB is a trusted service.</p>
											</blockquote>
										</div>
										<div class="flex mb-0/5em">
											<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-fill">
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
											</ul>
										</div>
										<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
											<div class="lqd-testi-details flex items-center">
												<div class="lqd-testi-np flex items-center">
													<h3 class="text-blue-500">Karpz, Web Dev</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item flex flex-col justify-center px-15 w-25percent lg:w-50percent">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full">
									<div class="lqd-testi relative lqd-testi-style-19 flex flex-col lqd-testi-card lqd-testi-shadow-sm lqd-testi-details-same lqd-testi-details-inline lqd-testi-quote-18 lqd-testi-avatar-60">
										<div class="lqd-testi-extra mb-1/35em">
											<figure>
												<img src="{{asset('assets/frontend')}}/images/demo/index/client-dark-amd-logo-1-1.svg" alt="Karpz, Web Dev">
											</figure>
										</div>
										<div class="lqd-testi-quote mb-1/5em">
											<blockquote>
												<p>This is a random testimonial, you can place anything you like in this test box, just make sure it looks organic, and helps the customers feel safe and that RSB is a trusted service.</p>
											</blockquote>
										</div>
										<div class="flex mb-0/5em">
											<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-fill">
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
											</ul>
										</div>
										<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
											<div class="lqd-testi-details flex items-center">
												<div class="lqd-testi-np flex items-center">
													<h3 class="text-blue-500">Karpz, Web Dev</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item flex flex-col justify-center px-15 w-25percent lg:w-50percent">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full">
									<div class="lqd-testi relative lqd-testi-style-19 flex flex-col lqd-testi-card lqd-testi-shadow-sm lqd-testi-details-same lqd-testi-details-inline lqd-testi-quote-18 lqd-testi-avatar-60">
										<div class="lqd-testi-extra mb-1/35em">
											<figure>
												<img src="{{asset('assets/frontend')}}/images/demo/index/client-dark-spotify.svg" alt="Karpz, Web Dev">
											</figure>
										</div>
										<div class="lqd-testi-quote mb-1/5em">
											<blockquote>
												<p>This is a random testimonial, you can place anything you like in this test box, just make sure it looks organic, and helps the customers feel safe and that RSB is a trusted service.</p>
											</blockquote>
										</div>
										<div class="flex mb-0/5em">
											<ul class="lqd-star-rating lqd-star-rating-shaped lqd-star-rating-fill">
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
												<li>
													<svg class="active" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" style="width: 1em; height: 1em;">
														<path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
													</svg>
												</li>
											</ul>
										</div>
										<div class="lqd-testi-info flex flex-col flex-wrap justify-between">
											<div class="lqd-testi-details flex items-center">
												<div class="lqd-testi-np flex items-center">
													<h3 class="text-blue-500">Karpz, Web Dev</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w-full block">
				<div class="testimonials-clients">
					<div class="container">
						<div class="row items-center">
							<div class="col col-6 col-md-3 text-white sm:text-center">
								<div class="mb-10 ld-fancy-heading relative animation-element">
									<p class="text-44 font-bold leading-60 tracking-0 -mb-0/3em ld-fh-element inline-block relative">1m+</p>
								</div>
								<div class="mb-15 animation-element">
									<ul class="flex reset-ul icon-list-items inline-items sm:justify-center">
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
									</ul>
								</div>
								<div class="ld-fancy-heading relative animation-element">
									<p class="text-14 font-normal leading-22 -mt-2/5em mb-0 ld-fh-element inline-block relative">Purchases</p>
								</div>
							</div>
							<div class="col col-6 col-md-3 text-white sm:text-center">
								<div class="mb-10 ld-fancy-heading relative animation-element">
									<p class="text-44 font-bold leading-60 tracking-0 -mb-0/3em ld-fh-element inline-block relative">9.87</p>
								</div>
								<div class="mb-15 animation-element">
									<ul class="flex reset-ul icon-list-items inline-items sm:justify-center">
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
										<li class="flex icon-list-item inline-item">
											<span class="text-start icon-list-icon">
												<i aria-hidden="true" class="fas fa-star"></i>
											</span>
											<span class="align-self-center icon-list-text"></span>
										</li>
									</ul>
								</div>
								<div class="ld-fancy-heading relative animation-element">
									<p class="text-14 font-normal leading-22 -mt-2/5em mb-0 ld-fh-element inline-block relative">Our Clients Rated Us</p>
								</div>
							</div>
							<div class="col col-12 col-md-6" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-imggrp-single", "startDelay":1300, "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
								<div class="w-full flex justify-end">
									<div class="lqd-imggrp-single block relative w-33percent text-start lg:text-end sm:text-start">
										<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
											<figure class="w-full relative">
												<img width="101" height="30" src="{{asset('assets/frontend')}}/images/demo/index/client-spotify.svg" alt="testimonials clients">
											</figure>
										</div>
									</div>
									<div class="lqd-imggrp-single block relative w-33percent text-center lg:text-end sm:text-center">
										<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
											<figure class="w-full relative">
												<img width="75" height="17" src="{{asset('assets/frontend')}}/images/demo/index/client-amd-logo.svg" alt="testimonials clients">
											</figure>
										</div>
									</div>
									<div class="lqd-imggrp-single block relative w-33percent text-end sm:text-end">
										<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center sm:w-80percent">
											<figure class="w-full relative">
												<img width="85" height="25" src="{{asset('assets/frontend')}}/images/demo/index/client-logitech.svg" alt="testimonials clients">
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials -->

	<!-- Start Blog -->
	<section class="lqd-section blog pt-80" id="blog" data-custom-animations="true" data-ca-options='{"animationTarget": ".btn, .animation-element", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<div class="w-full flex mb-20 justify-center">
						<a href="#blog" class="btn btn-solid bg-blue-100 text-purple-700 rounded-20 text-15 module-btn-xs" data-localscroll="true">
							<span class="btn-txt" data-text="Office Blog">Our Updates</span>
						</a>
					</div>
					<div class="w-full flex mb-20 justify-center">
						<div class="ld-fancy-heading relative animation-element">
							<h2 class="mb-1em -mt-0/2em ld-fh-element inline-block relative">Latest Posts</h2>
						</div>
					</div>
					<div class="flex flex-wrap -mr-15 -ml-15 animation-element">
						<div class="module-blog w-50percent sm:w-full px-15 mb-0">
							<article class="lqd-lp relative lqd-lp-style-9 flex flex-wrap text-start format-standard has-post-thumbnail hentry category-blog-single">
								<div class="lqd-lp-img w-full">
									<figure class="relative overflow-hidden rounded-8">
										<img width="370" height="470" src="{{asset('assets/frontend')}}/images/demo/index/blog-1.png" alt="blog">
										<div class="lqd-overlay flex items-center justify-center">
											<i class="lqd-icn-ess icon-md-arrow-forward"></i>
										</div>
									</figure>
								</div>
								<div class="lqd-lp-contents w-full">
									<header class="lqd-lp-header">
										<div class="lqd-lp-meta lqd-lp-meta-dot-between lqd-lp-meta-solid rounded-full inline-flex items-center uppercase tracking-0/1em font-bold">
											<span class="screen-reader-text">Tags </span>
											<ul class="lqd-lp-cat lqd-lp-cat-plain reset-ul inline-ul relative z-3">
												<li>
													<a href="#" rel="category">Post One</a>
												</li>
											</ul>
											<time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">1 year ago</time>
										</div>
										<h2 class="entry-title lqd-lp-title mt-0/75em mb-0/85em text-20 font-bold leading-25 font-title text-slate-700">Place here a title for a post</h2>
									</header>
									<div class="lqd-lp-excerpt">
										<p>Here you would add some sort of description that links to the post, make it brief.</p>
									</div>
								</div>
							</article>
						</div>
						<div class="module-blog w-50percent sm:w-full px-15 mb-0">
							<article class="lqd-lp relative lqd-lp-style-9 flex flex-wrap text-start format-standard has-post-thumbnail hentry category-blog-single">
								<div class="lqd-lp-img w-full">
									<figure class="relative overflow-hidden rounded-8">
										<img width="370" height="470" src="{{asset('assets/frontend')}}/images/demo/index/blog-2.png" alt="blog">
										<div class="lqd-overlay flex items-center justify-center">
											<i class="lqd-icn-ess icon-md-arrow-forward"></i>
										</div>
									</figure>
								</div>
								<div class="lqd-lp-contents w-full">
									<header class="lqd-lp-header">
										<div class="lqd-lp-meta lqd-lp-meta-dot-between lqd-lp-meta-solid rounded-full inline-flex items-center uppercase tracking-0/1em font-bold">
											<span class="screen-reader-text">Tags </span>
											<ul class="lqd-lp-cat lqd-lp-cat-plain reset-ul inline-ul relative z-3">
												<li>
													<a href="#" rel="category">Post Two</a>
												</li>
											</ul>
											<time class="lqd-lp-date" datetime="2020-09-24T06:00:29+00:00">2 years ago</time>
										</div>
										<h2 class="entry-title lqd-lp-title mt-0/75em mb-0/85em text-20 font-bold leading-25 font-title text-slate-700">Place here a title for a post</h2>
									</header>
									<div class="lqd-lp-excerpt">
										<p>Here you would add some sort of description that links to the post, make it brief. </p>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog -->

	<!-- Start How It Work -->
	<section class="lqd-section how-it-work pt-80" id="how-it-work">
		<div class="container">
			<div class="row">
				<div class="col col-md-6 p-0" data-custom-animations="true" data-ca-options='{"animationTarget": ".btn, h2", "ease": "power4.out", "initValues":{"x": "-10px", "y": "10px", "opacity":0} , "animations":{"x": "0px", "y": "0px", "opacity":1}}'>
					<div class="module-title flex flex-col h-full relative bg-size bg-no-repeat bg-center-right transition-all pt-10 px-10 mr-50 sm:mr-0" style="background-image: url('{{asset('assets/frontend')}}/images/demo/index/help.png');">
						<div class="w-full mb-20">
							<a href="#how-it-work" class="btn btn-solid rounded-20 text-15 bg-blue-100 text-darkgreen module-btn-xs" data-localscroll="true">
								<span class="btn-txt" data-text="Support">Support</span>
							</a>
						</div>
						<div class="ld-fancy-heading relative w-full">
							<h2 class="ld-fh-element mb-0/2em inline-block relative leading-45 -mt-0/2em text-secondary">Have a question?<br>We're here.</h2>
						</div>
					</div>
				</div>
				<div class="col col-12 col-md-6" data-custom-animations="true" data-ca-options='{"animationTarget": ".accordion", "ease": "power4.out", "initValues":{"y": "-50px", "opacity":0} , "animations":{"y": "0px", "opacity":1}}'>
					<div class="accordion accordion-title-underlined accordion-sm ml-60 xl:ml-0" id="accordion-questions" role="tablist" aria-multiselectable="true">
						<div class="accordion-item panel mb-10">
							<div class="accordion-heading" role="tab" id="heading-question-1">
								<h4 class="accordion-title">
									<a class="collapsed text-17 font-bold" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion-questions" href="#collapse-question-item-1" aria-expanded="false" aria-controls="collapse-question-item-1">
										<span class="accordion-title-txt">How do I become an affiliate</span>
										<span class="accordion-expander text-16 text-blue-700">
											<i class="lqd-icn-ess icon-ion-ios-add"></i>
											<i class="lqd-icn-ess icon-ion-ios-remove"></i>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapse-question-item-1" class="accordion-collapse collapse" data-bs-parent="#accordion-questions" role="tabpanel" aria-labelledby="heading-question-1">
								<div class="accordion-content text-14 leading-20 text-text">
									<p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item panel mb-10">
							<div class="accordion-heading" role="tab" id="heading-question-2">
								<h4 class="accordion-title">
									<a class="collapsed text-17 font-bold" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion-questions" href="#collapse-question-item-2" aria-expanded="false" aria-controls="collapse-question-item-2">
										<span class="accordion-title-txt">Where do I purchase services </span>
										<span class="accordion-expander text-16 text-blue-700">
											<i class="lqd-icn-ess icon-ion-ios-add"></i>
											<i class="lqd-icn-ess icon-ion-ios-remove"></i>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapse-question-item-2" class="accordion-collapse collapse" data-bs-parent="#accordion-questions" role="tabpanel" aria-labelledby="heading-question-2">
								<div class="accordion-content text-14 leading-20 text-text">
									<p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item panel mb-10">
							<div class="accordion-heading" role="tab" id="heading-question-3">
								<h4 class="accordion-title">
									<a class="collapsed text-17 font-bold" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion-questions" href="#collapse-question-item-3" aria-expanded="false" aria-controls="collapse-question-item-3">
										<span class="accordion-title-txt">Difference between services and packages</span>
										<span class="accordion-expander text-16 text-blue-700">
											<i class="lqd-icn-ess icon-ion-ios-add"></i>
											<i class="lqd-icn-ess icon-ion-ios-remove"></i>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapse-question-item-3" class="accordion-collapse collapse" data-bs-parent="#accordion-questions" role="tabpanel" aria-labelledby="heading-question-3">
								<div class="accordion-content text-14 leading-20 text-text">
									<p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item panel">
							<div class="accordion-heading" role="tab" id="heading-question-4">
								<h4 class="accordion-title">
									<a class="collapsed text-17 font-bold" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion-questions" href="#collapse-question-item-4" aria-expanded="false" aria-controls="collapse-question-item-4">
										<span class="accordion-title-txt">How long do you take to fufil a purchase order</span>
										<span class="accordion-expander text-16 text-blue-700">
											<i class="lqd-icn-ess icon-ion-ios-add"></i>
											<i class="lqd-icn-ess icon-ion-ios-remove"></i>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapse-question-item-4" class="accordion-collapse collapse" data-bs-parent="#accordion-questions" role="tabpanel" aria-labelledby="heading-question-4">
								<div class="accordion-content text-14 leading-20 text-text">
									<p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End How It Work -->

	<!-- Start Social Media -->
	<section class="lqd-section social-media pt-80">
		<div class="container">
			<div class="row">
				<div class="col col-6 col-md-3 text-center border-top border-right border-black-10">
					<div class="pt-20 mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
						<div class="iconbox-icon-wrap">
							<div class="iconbox-icon-container inline-flex mb-10 text-76 text-slate-600">
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512" fill="currentColor"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
							</div>
						</div>
						<div class="contents">
							<h3 class="font-title text-15 font-bold leading-20 m-0 text-gray-700 lqd-iconbox-heading">Sache's World </h3>
							<p class="text-14 leading-30 text-gray-400">GitHub Repo</p>
						</div>
						<a href=" #" class="lqd-overlay flex z-2" target="_blank" rel="nofollow"></a>
					</div>
				</div>
				<div class="col col-6 col-md-3 text-center border-top border-right border-black-10">
					<div class="pt-20 mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
						<div class="iconbox-icon-wrap">
							<div class="iconbox-icon-container inline-flex mb-10 text-76 text-slate-600">
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="currentColor"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
							</div>
						</div>
						<div class="contents">
							<h3 class="font-title text-15 font-bold leading-20 m-0 text-gray-700 lqd-iconbox-heading">Follow Us on Twitter </h3>
							<p class="text-14 leading-30 text-slate-400">Latest news and updates</p>
						</div>
						<a href="#" class="lqd-overlay flex z-2" target="_blank" rel="nofollow"></a>
					</div>
				</div>
				<div class="col col-6 col-md-3 text-center border-top border-right border-black-10">
					<div class="pt-20 mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
						<div class="iconbox-icon-wrap">
							<div class="iconbox-icon-container inline-flex mb-10 text-76 text-slate-600">
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="currentColor"><path d="M255.9 120.9l9.1-15.7c5.6-9.8 18.1-13.1 27.9-7.5 9.8 5.6 13.1 18.1 7.5 27.9l-87.5 151.5h63.3c20.5 0 32 24.1 23.1 40.8H113.8c-11.3 0-20.4-9.1-20.4-20.4 0-11.3 9.1-20.4 20.4-20.4h52l66.6-115.4-20.8-36.1c-5.6-9.8-2.3-22.2 7.5-27.9 9.8-5.6 22.2-2.3 27.9 7.5l8.9 15.7zm-78.7 218l-19.6 34c-5.6 9.8-18.1 13.1-27.9 7.5-9.8-5.6-13.1-18.1-7.5-27.9l14.6-25.2c16.4-5.1 29.8-1.2 40.4 11.6zm168.9-61.7h53.1c11.3 0 20.4 9.1 20.4 20.4 0 11.3-9.1 20.4-20.4 20.4h-29.5l19.9 34.5c5.6 9.8 2.3 22.2-7.5 27.9-9.8 5.6-22.2 2.3-27.9-7.5-33.5-58.1-58.7-101.6-75.4-130.6-17.1-29.5-4.9-59.1 7.2-69.1 13.4 23 33.4 57.7 60.1 104zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216z"/></svg>
							</div>
						</div>
						<div class="contents">
							<h3 class="font-title text-15 font-bold leading-20 m-0 text-gray-700 lqd-iconbox-heading">Mobile Compatible </h3>
							<p class="text-14 leading-30 text-slate-400">Order through your phone</p>
						</div>
						<a href="#" class="lqd-overlay flex z-2" target="_blank" rel="nofollow"></a>
					</div>
				</div>
				<div class="col col-6 col-md-3 text-center border-top border-black-10">
					<div class="pt-20 mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
						<div class="iconbox-icon-wrap">
							<div class="iconbox-icon-container inline-flex mb-10 text-76 text-slate-600">
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="currentColor"><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>
							</div>
						</div>
						<div class="contents">
							<h3 class="font-title text-15 font-bold leading-20 m-0 text-gray-700 lqd-iconbox-heading">Telegram Channel </h3>
							<p class="text-14 leading-30 text-slate-400">Make a request!</p>
						</div>
						<a href="#" class="lqd-overlay flex z-2" target="_blank" rel="nofollow"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Social Media -->

	<!-- Start Contact -->
	<section class="lqd-section contact pt-70 pb-40" id="contact" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "duration":1800, "delay":180, "ease": "power4.out", "initValues":{"y": "65px", "scaleX":0.85, "scaleY":0.85, "rotationX":-35, "opacity":0} , "animations":{"y": "0px", "scaleX":1, "scaleY":1, "rotationX":0, "opacity":1}}'>
		<div class="container p-0 animation-element">
			<div class="module-section w-full flex flex-wrap justify-between items-center shadow-md" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, .lqd-imggrp-single, .btn", "duration":1800, "startDelay":200, "ease": "power4.out", "initValues":{"y": "65px", "scaleX":0.85, "scaleY":0.85, "rotationX":-35, "opacity":0} , "animations":{"y": "0px", "scaleX":1, "scaleY":1, "rotationX":0, "opacity":1}}'>
				<div class="w-45percent sm:w-full flex justify-start sm:justify-center sm:text-center">
					<div class="pl-60 ld-fancy-heading relative">
						<h2 class="font-title text-30 font-bold leading-35 m-0 ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'> Become part of the team <br>and sign up to be an <mark class="lqd-highlight"><span class="lqd-highlight-txt">affiliate.</span><span class="lqd-highlight-inner bottom-0 left-0 bg-blue-100"></span></mark></h2>
					</div>
				</div>
				<div class="w-30percent sm:w-full flex justify-center">
					<div class="lqd-imggrp-single block relative w-auto text-center">
						<div class="lqd-imggrp-img-container inline-flex relative items-center justify-center w-60percent py-10 py-30-sm">
							<figure class="w-full relative">
								<img width="438" height="249" src="{{asset('assets/frontend')}}/images/demo/index/subscribe.png" alt="subscribe">
							</figure>
						</div>
					</div>
				</div>
				<div class="w-25percent sm:w-full flex pr-40 sm:pr-0">
					<div class="w-full text-end sm:text-center">
						<a href="#contact-modal" class="btn btn-solid btn-hover-txt-liquid-x btn-icon-right text-15 rounded-6 text-white bg-sky-900 hover:text-white module-btn-md" data-lity="#contact-modal">
							<span class="btn-txt" data-text="Sign up free" data-split-text="true" data-split-options='{"type": "chars, words"}'>Sign up free</span>
							<span class="btn-icon ml-25">
								<i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="w-full relative flex module-lines">
				<div class="w-30percent sm:w-20percent flex transition-all bg-green-500"></div>
				<div class="w-10percent sm:w-20percent flex transition-all bg-orange-500"></div>
				<div class="w-30percent sm:w-20percent flex transition-all bg-purple-400"></div>
				<div class="w-15percent sm:w-20percent flex transition-all bg-yellow-500"></div>
				<div class="w-15percent sm:w-20percent flex transition-all bg-green-500"></div>
			</div>
		</div>
	</section>
	<!-- End Contact -->
	<!-- Start Refund Policy -->
	<section class="lqd-section refund p-70" id="refund">
		<div class="background-overlay bg-transparent opacity-30" style="background-image: linear-gradient(180deg, #DBE4FE 0%, #fff 85%);"></div>
		<div class="lqd-particles-bg-wrap lqd-overlay flex pointer-events-none">
			<div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-450">
				<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles":{"number":{"value":4} , "color":{"value": "random"} , "shape":{"type":["circle"]} , "opacity":{"value":1} , "size":{"value":4} , "move":{"enable": true, "direction": "none", "out_mode": "out"}} , "interactivity":[], "retina_detect": true}'></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"y": "60px", "rotationY":65, "opacity":0, "transformOrigin": "50% 50% 80px"} , "animations":{"y": "0px", "rotationY":0, "opacity":1, "transformOrigin": "50% 50% 0px"}}'>
					<div class="flex flex-wrap module-content mt-5 mr-80">
						<div class="refund-upper"><h4>Refund Policy <span style="color:red">for</span> RocketSocialBoost.</h4>
							<p>
								Thank you <span style="color:red">for</span> choosing RocketSocialBoost <span style="color:red">to</span> boost your social platforms. We are committed <span style="color:red">to</span> providing high-quality services <span style="color:red">to</span> enhance your online presence.
							</p>
						</div>
						<div class="refund-middle">
							<h6 class="mt-5">Refund Eligibility:</h6>
							<p>
								We strive <span style="color:red">for</span> your satisfaction <span style="color:red">with</span> our services. RocketSocialBoost generally does <span style="color:#DAA520">not</span> offer refunds once a product has been purchased. However, exceptions will be considered <span style="color:red">if</span> the service <span style="color:red">is</span> faulty, does <span style="color:red">not</span> work as described, <span style="color:red">or</span> has <span style="color:red">not</span> been received within a reasonable timeframe.
							</p>
						</div>
						<div class="refund-bottom">
							<h6 class="mt-5">Refund Request Process:</h6>
							<p><span style="color:red">To</span> request a refund, please contact our customer support team at <a class="rounded-6 leading-30 text-blue-900" href="mailto: support@rocketsocialboost.com"><span class="btn-txt">support@rocketsocialboost.com</span></a>. within <span style="color:aqua">14</span> days <span style="color:red">of</span> the purchase <span style="color:red">date</span>. Provide detailed information about the issue, <span style="color:#DAA520">and</span> our team will review your request promptly.</p>

							<p>Please note that RocketSocialBoost reserves the right <span style="color:red">to</span> deny refund requests that <span style="color:red">do</span> <span style="color:#DAA520">not</span> meet the eligibility criteria outlined <span style="color:red">in</span> this policy.</p>
							<p>Your understanding <span style="color:#DAA520">is</span> appreciated.</p>
						</div>
						<h6>RocketSocialBoost Team</h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Refund policy -->
	<!-- Start Privacy Policy -->
	<section class="lqd-section privacy p-70" id="privacy">
		<div class="background-overlay bg-transparent opacity-30" style="background-image: linear-gradient(180deg, #DBE4FE 0%, #fff 85%);"></div>
		<div class="lqd-particles-bg-wrap lqd-overlay flex pointer-events-none">
			<div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-450">
				<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles":{"number":{"value":4} , "color":{"value": "random"} , "shape":{"type":["circle"]} , "opacity":{"value":1} , "size":{"value":4} , "move":{"enable": true, "direction": "none", "out_mode": "out"}} , "interactivity":[], "retina_detect": true}'></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"y": "60px", "rotationY":65, "opacity":0, "transformOrigin": "50% 50% 80px"} , "animations":{"y": "0px", "rotationY":0, "opacity":1, "transformOrigin": "50% 50% 0px"}}'>
					<div class="flex flex-wrap module-content mt-5 mr-80">
						<div class="privacy-upper"><h4>Privacy Policy <span style="color:red">for</span> RocketSocialBoost.</h4>
							<p>
								At RocketSocialBoost, we highly value your privacy <span style="color:#DAA520">and</span> are committed <span style="color:red">to</span> safeguarding your personal information. This Privacy Policy outlines how we collect, use, <span style="color:#DAA520">and</span> protect your data <span style="color:red">when</span> you use our social media growth services.
							</p>
						</div>
						<div class="privacy-list">
							<ol>
								<li>
									<h6>Information We Collect:</h6>
									<p>
										We collect necessary personal information, such <span style="color:red">as</span> your name, email address, <span style="color:#DAA520">and</span> social media account details, <span style="color:red">to</span> provide <span style="color:#DAA520">and</span> improve our services.
									</p>
								</li>
								<li>
									<h6>How We Use Your Information:</h6>
									<p>
										RocketSocialBoost uses your information <span style="color:red">to</span> deliver our services, communicate effectively <span style="color:red">with</span> you, <span style="color:#DAA520">and</span> enhance your social media experience. We never sell <span style="color:#DAA520">or</span> share your personal information <span style="color:red">with</span> third parties without your <span style="color:red">explicit</span> consent.
									</p>
								</li>
								<li>
									<h6>Security Measures:</h6>
									<p>
										We employ stringent measures <span style="color:red">to</span> protect your personal information <span style="color:red">from</span> unauthorized access, disclosure, alteration, <span style="color:#DAA520">and</span> destruction.
									</p>
								</li>
							</ol>
						</div>
						<div class="privacy-bottom">
							<p><span style="color:red">For</span> a detailed overview, please review our comprehensive Privacy Policy <a class="rounded-6 leading-30 text-blue-900" href="{{route('privacy')}}"><span class="btn-txt">here</span></a></p>

							<p>If you have any privacy-related questions or concerns, please reach out to us at <a class="rounded-6 leading-30 text-blue-900" href="mailto: privacy@rocketsocialboost.com"><span class="btn-txt">privacy@rocketsocialboost.com</span></a>.</p>
							<h6>RocketSocialBoost Team</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Privacy policy -->
	<!-- Start Terms & Condtion -->
	<section class="lqd-section terms p-70" id="terms">
		<div class="background-overlay bg-transparent opacity-30" style="background-image: linear-gradient(180deg, #DBE4FE 0%, #fff 85%);"></div>
		<div class="lqd-particles-bg-wrap lqd-overlay flex pointer-events-none">
			<div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-450">
				<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles":{"number":{"value":4} , "color":{"value": "random"} , "shape":{"type":["circle"]} , "opacity":{"value":1} , "size":{"value":4} , "move":{"enable": true, "direction": "none", "out_mode": "out"}} , "interactivity":[], "retina_detect": true}'></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues":{"y": "60px", "rotationY":65, "opacity":0, "transformOrigin": "50% 50% 80px"} , "animations":{"y": "0px", "rotationY":0, "opacity":1, "transformOrigin": "50% 50% 0px"}}'>
					<div class="flex flex-wrap module-content mt-5 mr-80">
						<div class="terms-upper"><h4>Terms <span style="color:#DAA520">and</span> Conditions <span style="color:red">for</span> RocketSocialBoost.</h4>
							<p>
								<span style="color:red">By</span> utilizing RocketSocialBoost's services, you agree <span style="color:red">to</span> adhere <span style="color:red">to</span> and be bound by the following terms and conditions:
							</p>
						</div>
						<div class="terms-list">
							<ol>
								<li>
									<h6>Service Usage:</h6>
									<p>
										RocketSocialBoost provides social media growth services <span style="color:red">to</span> enhance your online presence. Your usage <span style="color:red">of</span>  our services <span style="color:#DAA520">is</span> expected <span style="color:red">to</span> be <span style="color:red">in</span> compliance <span style="color:red">woth</span> applicable laws, platform policies, <span style="color:#DAA520">and</span> these terms.
									</p>
								</li>
								<li>
									<h6>Account Information:</h6>
									<p>
										You are responsible <span style="color:red">for</span> providing accurate <span style="color:#DAA520">and</span>  complete information <span style="color:red">when using</span>  RocketSocialBoost's services. We are not liable <span style="color:red">for</span>  any consequences arising <span style="color:red">from</span> inaccurate <span style="color:red">or</span> incomplete information.
									</p>
								</li>
								<li>
									<h6>Prohibited Activities:</h6>
									<p>
										Engaging <span style="color:red">in</span> activities that violate social media platform terms <span style="color:red">of</span> service <span style="color:#DAA520">or</span> applicable laws <span style="color:#DAA520">is</span> strictly prohibited. RocketSocialBoost reserves the right <span style="color:red">to</span> suspend <span style="color:#DAA520">or</span> terminate services <span style="color:red">for</span> users involved <span style="color:red">in</span> prohibited activities.
									</p>
								</li>
								<li>
									<h6>Changes <span style="color:red">to</span> Services:</h6>
									<p>
										RocketSocialBoost may modify <span style="color:#DAA520">or</span> discontinue services at any time without prior notice. We are <span style="color:#DAA520">not</span> liable <span style="color:red">for</span> any consequences resulting <span style="color:red">for</span> service interruptions <span style="color:#DAA520">or</span> changes.
									</p>
								</li>
							</ol>
						</div>
						<div class="terms-bottom">
							<p><span style="color:red">For</span> the full Terms <span style="color:#DAA520">and</span> Conditions, please visit <a href="{{route('terms')}}" class=" rounded-6 leading-30 text-blue-900">
								<span class="btn-txt">here</span>
							</a> </p>
							<p><span style="color:red">For</span> questions <span style="color:#DAA520">or</span> concerns, please contact us at <a class="rounded-6 leading-30 text-blue-900" href="mailto: info@rocketsocialboost.com"><span class="btn-txt">info@rocketsocialboost.com.</span></a></p>
							<h6>RocketSocialBoost Team</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Terms & Condtion -->
	</div>
		</main>
@include('footer')
		<!-- GDPR -->
		<div id="lqd-gdpr" class="lqd-gdpr lqd-gdpr-visible lqd-gdpr-ready">
			<div class="lqd-gdpr-inner flex items-center">
				<div class="lqd-gdpr-left text-14">🍪 This website uses cookies to improve your web experience. </div>
				<div class="lqd-gdpr-right">
					<button class="lqd-gdpr-accept tracking-0/3 uppercase font-bold">Accept </button>
				</div>
			</div>
		</div>
		<!-- /GDPR -->

		<!-- Contact modal -->
		<div id="contact-modal" class="lity-modal lqd-modal lity-hide overflow-hidden" data-modal-type="fullscreen">
			<div class="lqd-modal-inner">
				<div class="lqd-modal-head"></div>
				<section class="lqd-modal-content link-black bg-center bg-cover bg-norepeat " style="background-image: url({{asset('assets/frontend')}}/images/common/modal-bg.jpeg);">
                        <iframe id="cart-frame" src="" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
				</section>
				<div class="lqd-modal-foot"></div>
			</div>
		</div>
		<!-- Contact modal -->


		<!-- Mini Contact Modal -->
		<div id="modal-mini" class="lqd-modal lity-hide" data-modal-type="box">
			<div class="lqd-modal-inner">
				<div class="lqd-modal-head">
					<h2>Contact us</h2>
				</div>
				<div class="lqd-modal-content">
					<div class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-button-block lqd-contact-form-inputs-md">
						<div role="form" lang="en-US">
							<div class="screen-reader-response">
								<p role="status" aria-live="polite" aria-atomic="true"></p>
							</div>
							<form action="{{asset('assets/frontend')}}/php/mailer.php" method="post" class="lqd-cf-form" novalidate="novalidate" data-status="init">
								<p>
									<span class="lqd-form-control-wrap">
										<input class="px-2em border-black-10 text-slate-400" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Name">
									</span>
								</p>
								<p>
									<span class="lqd-form-control-wrap">
										<input class="px-2em border-black-10 text-slate-400" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email Address">
									</span>
								</p>
								<p>
									<span class="lqd-form-control-wrap">
										<textarea class="px-2em border-black-10 text-slate-400" name="message" cols="10" rows="3" aria-invalid="false" placeholder="Message"></textarea>
									</span>
								</p>
								<p>
									<input type="submit" value="Send a message" class="has-spinner bg-primary text-white border-none">
								</p>
							</form>
							<div class="lqd-cf-response-output"></div>
						</div>
					</div>
				</div>
				<div class="lqd-modal-foot"></div>
			</div>
		</div>
		<!-- Mini Contact Modal -->
        <script>
			  window.selectedCategoryId = null;
		</script>
		<script src="{{asset('assets/frontend')}}/vendors/jquery-ui/jquery-ui.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/fastdom/fastdom.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/fresco/js/fresco.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/lity/lity.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/gsap/minified/gsap.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/gsap/utils/CustomEase.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/gsap/minified/ScrollTrigger.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/draw-shape/liquidDrawShape.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/fontfaceobserver.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/tinycolor-min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/gsap/utils/SplitText.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/particles.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/flickity/flickity-fade.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/isotope/isotope.pkgd.min.js"></script>
		<script src="{{asset('assets/frontend')}}/vendors/isotope/packery-mode.pkgd.min.js"></script>
		<script src="{{asset('assets/frontend')}}/js/liquid-gdpr.min.js"></script>
		<script src="{{asset('assets/frontend')}}/js/theme.min.js"></script>
		<script src="{{asset('assets/frontend')}}/js/liquid-ajax-contact-form.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        {{-- <script src="{{asset('assets/frontend')}}/js/ServiceTable.js"></script> --}}
        <script>
            $('.package-buy').click(function(){
               let data = $(this).data();
			   let cart_url = '{{ env('CART_URL') }}';
               $('#cart-frame').attr('src',`${cart_url}?type=${data.type}&id=${data.id}`);
            });
			new DataTable("#services-table");
        </script>
{{--		<script>--}}
{{--			const pagesMenuContainer = document.querySelector('.pages-menu-container');--}}
{{--			const submenu = pagesMenuContainer.querySelector('.submenu');--}}

{{--			pagesMenuContainer.addEventListener('click', () => {--}}
{{-- 			 if (window.innerWidth < 768) {--}}
{{-- 			   submenu.style.display = submenu.style.display === 'none' ? 'block' : 'block';--}}
{{--			  }--}}
{{--			});--}}
{{--		</script>--}}
{{--        <script>--}}
{{--            $.ajax({--}}
{{--                url : '/cart',--}}
{{--                success: function(res){--}}
{{--                    $('.order-section-container').append(res)--}}
{{--                }--}}
{{--            })--}}
{{--        </script>--}}


		<!-- Start custom cursor -->
		<div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
		<div class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none">
			<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
			<div class="lqd-cc-solid-txt flex justify-center text-center relative">
				<div class="lqd-cc-solid-txt-inner">Explide</div>
			</div>
		</div>
		<div class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none">
			<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
			<div class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" style="width: 1em; height: 1em;">
					<path fill="currentColor" d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z"></path>
				</svg>
			</div>
			<div class="lqd-cc-solid-txt flex justify-center text-center relative">
				<div class="lqd-cc-solid-txt-inner">Drag</div>
			</div>
			<div class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" style="width: 1em; height: 1em;">
					<path fill="currentColor" d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z"></path>
				</svg>
			</div>
		</div>
		<div class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none">
			<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z" />
			</svg>
		</div>
		<div class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none">
			<div class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative">
				<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="width: 1em; height: 1em;">
					<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z"></path>
				</svg>
			</div>
		</div>
		<div class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"></div>
		<!-- End custom cursor -->

		<template id="lqd-temp-snickersbar">
			<div class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in" data-item-id>
				<div class="lqd-snickersbar-inner flex flex-wrap items-center">
					<div class="lqd-snickersbar-detail">
						<p class="lqd-snickersbar-addding-temp mt-0mb-0 hidden">Adding itemName to cart</p>
						<p class="lqd-snickersbar-added-temp mt-0mb-0 hidden">Added itemName to cart</p>
						<p class="lqd-snickersbar-msg flex items-center mt-0mb-0"></p>
						<p class="lqd-snickersbar-msg-done flex items-center mt-0mb-0"></p>
					</div>
					<div class="lqd-snickersbar-ext ml-1/5em"></div>
				</div>
			</div>
		</template>
		<template id="lqd-temp-sticky-header-sentinel">
			<div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
		</template>
		<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1" data-modal-type="default" style="display: none;">
			<div class="lity-backdrop"></div>
			<div class="lity-wrap" data-lity-close role="document">
				<div class="lity-loader" aria-hidden="true">Loading...</div>
				<div class="lity-container">
					<div class="lity-content"></div>
				</div>
				<button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button>
			</div>
		</div>
	</body>
</html>
