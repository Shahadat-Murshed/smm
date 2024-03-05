@extends('v2.layouts.master')
@section('content')
	<div id="wrap">
		<main class="content bg-repeat bg-center" id="lqd-site-content" style="background-image: url({{asset('assets/frontend/v2')}}/images/demo/saas/bg/bg-pattern.svg);">
			<div id="lqd-contents-wrap">
				<!-- Start Banner -->
				<section class="lqd-section banner flex items-center justify-center pt-35 pb-50" id="banner">
					<div class="container-fluid">
						<div class="row">
							<div class="col col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
								<div class="module-title flex flex-wrap justify-center px-15percent" data-custom-animations="true" data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 35, "rotationX" : 10, "rotationY" : 25, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "rotationX" : 0, "rotationY" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'>
									<div class="ld-fancy-heading max-w-full">
										<h1 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-split-lines Tracking-0 font-semibold leading-1em text-70" data-split-text="true" data-split-options='{"type": "lines"}'>
											Our<br> 
											<span class="gradient-word" style="background-image: linear-gradient(to right, #3D9BFC, #7B40E4, #F53A8B, #EE704A, #2DDD4F);">
												Refund Policy.
											</span>
										</h1>
									</div>
									<div class="ld-fancy-heading max-w-full">
										<p class="ld-fh-element lqd-split-lines text-18 leading-30 text-slate-700" data-split-text="true" data-split-options='{"type": "lines"}'>
											<div class="refund-upper">												
												<p class="text-18">
													Thank you for choosing RocketSocialBoost to boost your social platforms. We are committed to providing high-quality services to enhance your online presence.
												</p>
											</div>
											<div class="refund-middle">
												<h6 class="text-16 font-semibold mb-0">Refund Eligibility:</h6>
												<p>
													We strive for your satisfaction with our services. RocketSocialBoost generally does not offer refunds once a product has been purchased. However, exceptions will be considered if the service is faulty, does not work as described, or has not been received within a reasonable timeframe.
												</p>
											</div>
											<div class="refund-bottom">
												<h6 class="text-16 font-semibold mb-0">Refund Request Process:</h6>
												<p class="mb-10">To request a refund, please contact our customer support team at <a class="rounded-6 leading-30 text-blue-900" href="mailto: support@rocketsocialboostcom">support@rocketsocialboost.com</a>. within 14 days of the purchase date Provide detailed information about the issue, and our team will review your request promptly.</p>
												<p class="mb-0">Please note that RocketSocialBoost reserves the right to deny refund requests that do not meet the eligibility criteria outlined in this policy.</p>
												<p>Your understanding is appreciated.</p>
											</div>
											<h6 class="text-16">RocketSocialBoost Team</h6>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</section>
			</div>	
		</main>
	</div>
	<!-- End Banner -->

	<!-- Contact modal -->
	@include('v2.layouts.contact')
	<!-- Contact modal -->

	<!-- Mini Contact Modal -->
	@include('v2.layouts.mini-contacts')
	<!-- Mini Contact Modal -->
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

	<template id="lqd-temp-sticky-header-sentinel">
		<div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
	</template>
	<template id="lqd-snickersbar">
		<div class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in" data-item-id>
			<div class="lqd-snickersbar-inner flex flex-wrap items-center">
				<div class="lqd-snickersbar-detail">
					<p class="hidden lqd-snickersbar-addding-temp my-0">Adding {{--itemName--}} to cart</p>
					<p class="hidden lqd-snickersbar-added-temp my-0">Added {{--itemName--}} to cart</p>
					<p class="my-0 lqd-snickersbar-msg flex items-center"></p>
					<p class="my-0 lqd-snickersbar-msg-done flex items-center"></p>
				</div>
				<div class="lqd-snickersbar-ext ml-4"></div>
			</div>
		</div>
	</template>
	<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1" data-modal-type="default">
		<div class="lity-wrap" data-lity-close role="document">
			<div class="lity-loader" aria-hidden="true">Loading...</div>
			<div class="lity-container">
				<div class="lity-content"></div>
			</div>
			<button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button>
		</div>
	</div>
@endsection