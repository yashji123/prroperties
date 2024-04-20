@extends('saas.frontend.layouts.app')

@section('content')
<section class="homec-contact-form homec-bg-cover pd-top-80 pd-btm-80 mg-top-100" style="background-image: url('{{ asset('frontend/assets/img/contact.png') }}');">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="homec-property-ag homec-bg-cover homec-agent-side-cover">
							<h3 class="homec-property-ag__title">Contact Now</h3>
							<!-- End Property Profile -->
							<form method="POST" action="https://formcarry.com/s/y8gxwFK7kr" class="homec-property-ag__form">
								<input type="hidden" name="_token" value="45ldQExBJTHk47TlprsweY21vXcS9i5Zx5R4diBa">                            <div class="form-group">
									<input type="text" name="name" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" name="phone" placeholder="Phone">
								</div>
								<!-- <div class="form-group">
									<input type="text" name="subject" placeholder="Subject">
								</div> -->
								<div class="form-group">
									<textarea name="message" placeholder="Type here"></textarea>
								</div>
	
                                <!-- <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LcVO6cbAAAAAOzIEwPlU66nL1rxD4VAS38tjpBX"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-sfew3sjikr5x" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcVO6cbAAAAAOzIEwPlU66nL1rxD4VAS38tjpBX&amp;co=aHR0cDovL2xvY2FsaG9zdDo4ODg4&amp;hl=en&amp;v=vm_YDiq1BiI3a8zfbIPZjtF2&amp;size=normal&amp;cb=b9iewi3lf017"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                </div> -->
								
								<button type="submit" class="homec-btn homec-btn__second homec-property-ag__button"><span>Send Message</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact pd-top-100">
			<div class="container">
				<div class="row">
					<h2 class="homec-section__title text-center mg-btm-40">Our Offices</h2>

					<div class="d-flex justify-content-between">
						<div class="w-30 off-add">
							<h2 class="homec-section__title">United States</h2>
							<p class="mg-top-10">555 West 5th Street. <br/>Los Angeles Ca. 90013 </p>
							<p class="mg-top-10">514 N. California Ave. <br/>Beaumont Ca. 92223 </p>
							<p class="mg-top-10">78 SW 7th Street <br/>Miami Fl. 33130 </p>
						</div>

						<div class="w-30 off-add">
							<h2 class="homec-section__title">India</h2>
							<p class="mg-top-10">B206, Lodha Supremus, Rd Number 22, Wagle Industrial Estate. Maharashtra 400604 </p>
							
							<p class="mg-top-10">Udyog Bhavan No-2 F5 A Wing, <br/>Anand Nagar Midc Ambernath (East) Maharastra 421501 </p>
							
							<p class="mg-top-10">Goregaon, 20th Floor, Oberoi Commerz II, International Business Park, Oberoi Garden City, Goregaon East (D2), Mumbai, MH 400063</p>
						</div>

						<div class="w-30 off-add">
							<h2 class="homec-section__title">United States</h2>
							<p class="mg-top-10">555 West 5th Street. <br/>Los Angeles Ca. 90013 </p>
							<p class="mg-top-10">514 N. California Ave. <br/>Beaumont Ca. 92223 </p>
							<p class="mg-top-10">78 SW 7th Street <br/>Miami Fl. 33130 </p>
						</div>
					</div>

					<div class="d-flex justify-content-between mg-top-40">
						<div class="w-30 off-add">
							<h2 class="homec-section__title">Netherlands</h2>
							<p class="mg-top-10">Weesperstraat 61, 1018 VN Amsterdam, Netherlands</p>
						</div>

						<div class="w-30 off-add">
							<h2 class="homec-section__title">Lima</h2>
							<p class="mg-top-10">Av. Mariscal La Mar 638 (Soho II Building), of. 604, Miraflores </p>
						</div>

						<div class="w-30 off-add">
							<h2 class="homec-section__title">Portugal</h2>
							<p class="mg-top-10">Rua Saraiva de Carvalho 1C, Lisbon, Portugal </p>
						</div>
					</div>

				</div>
			</div>
		</section>


		<section class="contact pd-top-70 pd-btm-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Single Contact -->
						<div class="homec-contact__single mg-top-30">
							<div class="homec-contact__icon">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M27.6356 21.6814C26.919 20.9354 26.0548 20.5365 25.1388 20.5365C24.2302 20.5365 23.3585 20.928 22.6124 21.6741L20.2781 24.001C20.0861 23.8975 19.894 23.8015 19.7093 23.7055C19.4434 23.5725 19.1923 23.4469 18.978 23.314C16.7915 21.9252 14.8044 20.1154 12.8985 17.7737C11.9752 16.6066 11.3547 15.6241 10.904 14.6269C11.5098 14.0728 12.0712 13.4967 12.6178 12.9426C12.8247 12.7358 13.0315 12.5216 13.2383 12.3147C14.7896 10.7635 14.7896 8.75421 13.2383 7.20294L11.2217 5.18629C10.9927 4.95729 10.7563 4.72091 10.5347 4.48453C10.0915 4.02653 9.6261 3.55377 9.14594 3.11055C8.42941 2.40139 7.57252 2.02466 6.6713 2.02466C5.77009 2.02466 4.89842 2.40139 4.15973 3.11055C4.15234 3.11793 4.15234 3.11793 4.14495 3.12532L1.63337 5.65906C0.687839 6.60459 0.148588 7.75697 0.0303964 9.09401C-0.146891 11.251 0.48839 13.2603 0.975931 14.5752C2.17262 17.8033 3.96028 20.795 6.62698 24.001C9.86248 27.8644 13.7554 30.9152 18.2024 33.0648C19.9014 33.87 22.1692 34.8229 24.703 34.9854C24.8581 34.9928 25.0206 35.0002 25.1683 35.0002C26.8747 35.0002 28.3078 34.3871 29.4306 33.1682C29.438 33.1534 29.4528 33.1461 29.4602 33.1313C29.8443 32.6659 30.2875 32.2448 30.7529 31.7942C31.0705 31.4914 31.3956 31.1737 31.7132 30.8413C32.4445 30.0805 32.8286 29.194 32.8286 28.2854C32.8286 27.3694 32.4371 26.4904 31.691 25.7517L27.6356 21.6814ZM30.2801 29.4599C30.2727 29.4599 30.2727 29.4673 30.2801 29.4599C29.992 29.7702 29.6966 30.0509 29.3789 30.3612C28.8988 30.8192 28.4112 31.2993 27.9532 31.8386C27.2071 32.6364 26.3281 33.0131 25.1757 33.0131C25.0649 33.0131 24.9467 33.0131 24.8359 33.0057C22.642 32.8654 20.6032 32.0085 19.0741 31.2771C14.893 29.2531 11.2217 26.3796 8.17086 22.7378C5.6519 19.7017 3.96766 16.8947 2.85223 13.8808C2.16524 12.0414 1.91408 10.6083 2.02488 9.25652C2.09875 8.39225 2.43117 7.67571 3.04429 7.06259L5.56325 4.54362C5.92522 4.20382 6.30934 4.01915 6.68608 4.01915C7.15146 4.01915 7.52819 4.29985 7.76458 4.53624C7.77196 4.54362 7.77935 4.55101 7.78674 4.5584C8.23734 4.97946 8.66579 5.41529 9.1164 5.88067C9.34539 6.11705 9.58178 6.35344 9.81816 6.59721L11.8348 8.61386C12.6178 9.39688 12.6178 10.1208 11.8348 10.9038C11.6206 11.118 11.4138 11.3323 11.1995 11.5391C10.579 12.1744 9.98806 12.7653 9.34539 13.3415C9.33062 13.3563 9.31585 13.3637 9.30846 13.3785C8.67318 14.0137 8.79137 14.6343 8.92433 15.0553C8.93172 15.0775 8.93911 15.0996 8.9465 15.1218C9.47097 16.3924 10.2097 17.5891 11.3325 19.0147L11.3399 19.0221C13.3787 21.5337 15.5283 23.4913 17.8995 24.9908C18.2024 25.1829 18.5126 25.338 18.8081 25.4857C19.0741 25.6187 19.3252 25.7443 19.5394 25.8773C19.569 25.892 19.5985 25.9142 19.6281 25.929C19.8792 26.0545 20.1156 26.1136 20.3594 26.1136C20.9725 26.1136 21.3566 25.7295 21.4822 25.6039L24.0086 23.0776C24.2597 22.8264 24.6586 22.5236 25.124 22.5236C25.582 22.5236 25.9587 22.8117 26.1877 23.0628C26.1951 23.0702 26.1951 23.0702 26.2025 23.0776L30.2727 27.1478C31.0336 27.9013 31.0336 28.6769 30.2801 29.4599Z"></path>
									<path d="M18.8912 8.3257C20.8266 8.65073 22.5847 9.56672 23.9882 10.9702C25.3917 12.3738 26.3003 14.1319 26.6327 16.0673C26.714 16.5548 27.1351 16.8946 27.6152 16.8946C27.6743 16.8946 27.726 16.8872 27.7851 16.8798C28.3317 16.7912 28.6937 16.2741 28.6051 15.7275C28.2062 13.3858 27.0981 11.251 25.4065 9.55933C23.7149 7.86771 21.58 6.75966 19.2384 6.36076C18.6917 6.27212 18.182 6.63408 18.086 7.17333C17.99 7.71258 18.3445 8.23706 18.8912 8.3257Z"></path>
									<path d="M34.9339 15.4392C34.2765 11.5832 32.4593 8.07441 29.667 5.28213C26.8747 2.48985 23.3659 0.672646 19.5099 0.0152035C18.9706 -0.0808274 18.4609 0.288522 18.3649 0.827773C18.2763 1.37441 18.6382 1.88411 19.1849 1.98014C22.6272 2.56372 25.7667 4.19624 28.2635 6.68566C30.7603 9.18246 32.3854 12.3219 32.969 15.7643C33.0502 16.2518 33.4713 16.5916 33.9515 16.5916C34.0106 16.5916 34.0623 16.5842 34.1214 16.5768C34.6606 16.4956 35.03 15.9785 34.9339 15.4392Z"></path>
								</svg>
							</div>
							<div class="homec-contact__content">
								<p class="homec-contact__label">Phone</p>
								<h3 class="homec-contact__title">+1 (415) 873-1161</h3>
							</div>
						</div>
						<!-- End Single Contact -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Single Contact -->
						<div class="homec-contact__single mg-top-30">
							<div class="homec-contact__icon">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M27.6356 21.6814C26.919 20.9354 26.0548 20.5365 25.1388 20.5365C24.2302 20.5365 23.3585 20.928 22.6124 21.6741L20.2781 24.001C20.0861 23.8975 19.894 23.8015 19.7093 23.7055C19.4434 23.5725 19.1923 23.4469 18.978 23.314C16.7915 21.9252 14.8044 20.1154 12.8985 17.7737C11.9752 16.6066 11.3547 15.6241 10.904 14.6269C11.5098 14.0728 12.0712 13.4967 12.6178 12.9426C12.8247 12.7358 13.0315 12.5216 13.2383 12.3147C14.7896 10.7635 14.7896 8.75421 13.2383 7.20294L11.2217 5.18629C10.9927 4.95729 10.7563 4.72091 10.5347 4.48453C10.0915 4.02653 9.6261 3.55377 9.14594 3.11055C8.42941 2.40139 7.57252 2.02466 6.6713 2.02466C5.77009 2.02466 4.89842 2.40139 4.15973 3.11055C4.15234 3.11793 4.15234 3.11793 4.14495 3.12532L1.63337 5.65906C0.687839 6.60459 0.148588 7.75697 0.0303964 9.09401C-0.146891 11.251 0.48839 13.2603 0.975931 14.5752C2.17262 17.8033 3.96028 20.795 6.62698 24.001C9.86248 27.8644 13.7554 30.9152 18.2024 33.0648C19.9014 33.87 22.1692 34.8229 24.703 34.9854C24.8581 34.9928 25.0206 35.0002 25.1683 35.0002C26.8747 35.0002 28.3078 34.3871 29.4306 33.1682C29.438 33.1534 29.4528 33.1461 29.4602 33.1313C29.8443 32.6659 30.2875 32.2448 30.7529 31.7942C31.0705 31.4914 31.3956 31.1737 31.7132 30.8413C32.4445 30.0805 32.8286 29.194 32.8286 28.2854C32.8286 27.3694 32.4371 26.4904 31.691 25.7517L27.6356 21.6814ZM30.2801 29.4599C30.2727 29.4599 30.2727 29.4673 30.2801 29.4599C29.992 29.7702 29.6966 30.0509 29.3789 30.3612C28.8988 30.8192 28.4112 31.2993 27.9532 31.8386C27.2071 32.6364 26.3281 33.0131 25.1757 33.0131C25.0649 33.0131 24.9467 33.0131 24.8359 33.0057C22.642 32.8654 20.6032 32.0085 19.0741 31.2771C14.893 29.2531 11.2217 26.3796 8.17086 22.7378C5.6519 19.7017 3.96766 16.8947 2.85223 13.8808C2.16524 12.0414 1.91408 10.6083 2.02488 9.25652C2.09875 8.39225 2.43117 7.67571 3.04429 7.06259L5.56325 4.54362C5.92522 4.20382 6.30934 4.01915 6.68608 4.01915C7.15146 4.01915 7.52819 4.29985 7.76458 4.53624C7.77196 4.54362 7.77935 4.55101 7.78674 4.5584C8.23734 4.97946 8.66579 5.41529 9.1164 5.88067C9.34539 6.11705 9.58178 6.35344 9.81816 6.59721L11.8348 8.61386C12.6178 9.39688 12.6178 10.1208 11.8348 10.9038C11.6206 11.118 11.4138 11.3323 11.1995 11.5391C10.579 12.1744 9.98806 12.7653 9.34539 13.3415C9.33062 13.3563 9.31585 13.3637 9.30846 13.3785C8.67318 14.0137 8.79137 14.6343 8.92433 15.0553C8.93172 15.0775 8.93911 15.0996 8.9465 15.1218C9.47097 16.3924 10.2097 17.5891 11.3325 19.0147L11.3399 19.0221C13.3787 21.5337 15.5283 23.4913 17.8995 24.9908C18.2024 25.1829 18.5126 25.338 18.8081 25.4857C19.0741 25.6187 19.3252 25.7443 19.5394 25.8773C19.569 25.892 19.5985 25.9142 19.6281 25.929C19.8792 26.0545 20.1156 26.1136 20.3594 26.1136C20.9725 26.1136 21.3566 25.7295 21.4822 25.6039L24.0086 23.0776C24.2597 22.8264 24.6586 22.5236 25.124 22.5236C25.582 22.5236 25.9587 22.8117 26.1877 23.0628C26.1951 23.0702 26.1951 23.0702 26.2025 23.0776L30.2727 27.1478C31.0336 27.9013 31.0336 28.6769 30.2801 29.4599Z"/>
									<path d="M18.8912 8.3257C20.8266 8.65073 22.5847 9.56672 23.9882 10.9702C25.3917 12.3738 26.3003 14.1319 26.6327 16.0673C26.714 16.5548 27.1351 16.8946 27.6152 16.8946C27.6743 16.8946 27.726 16.8872 27.7851 16.8798C28.3317 16.7912 28.6937 16.2741 28.6051 15.7275C28.2062 13.3858 27.0981 11.251 25.4065 9.55933C23.7149 7.86771 21.58 6.75966 19.2384 6.36076C18.6917 6.27212 18.182 6.63408 18.086 7.17333C17.99 7.71258 18.3445 8.23706 18.8912 8.3257Z"/>
									<path d="M34.9339 15.4392C34.2765 11.5832 32.4593 8.07441 29.667 5.28213C26.8747 2.48985 23.3659 0.672646 19.5099 0.0152035C18.9706 -0.0808274 18.4609 0.288522 18.3649 0.827773C18.2763 1.37441 18.6382 1.88411 19.1849 1.98014C22.6272 2.56372 25.7667 4.19624 28.2635 6.68566C30.7603 9.18246 32.3854 12.3219 32.969 15.7643C33.0502 16.2518 33.4713 16.5916 33.9515 16.5916C34.0106 16.5916 34.0623 16.5842 34.1214 16.5768C34.6606 16.4956 35.03 15.9785 34.9339 15.4392Z"/>
								</svg>
							</div>
							<div class="homec-contact__content">
								<p class="homec-contact__label">Location</p>
								<h3 class="homec-contact__title">555 West 5th Street. Los Angeles Ca. 90013</h3>
							</div>
						</div>
						<!-- End Single Contact -->
					</div>
					<div class="col-lg-4 col-12">
					   <!-- Single Contact -->
						<div class="homec-contact__single mg-top-30">
							<div class="homec-contact__icon">
								<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17 0C7.63944 0 0 7.63997 0 17C0 26.3606 7.63997 34 17 34C26.3606 34 34 26.36 34 17C34 7.63944 26.36 0 17 0ZM17 32.0078C8.72465 32.0078 1.99219 25.2753 1.99219 17C1.99219 8.72465 8.72465 1.99219 17 1.99219C25.2753 1.99219 32.0078 8.72465 32.0078 17C32.0078 25.2753 25.2753 32.0078 17 32.0078Z"></path>
									<path d="M8.54687 26.4482C9.097 26.4482 9.54297 26.0023 9.54297 25.4521C9.54297 24.902 9.097 24.4561 8.54687 24.4561C7.99675 24.4561 7.55078 24.902 7.55078 25.4521C7.55078 26.0023 7.99675 26.4482 8.54687 26.4482Z"></path>
									<path d="M25.4531 9.54395C26.0033 9.54395 26.4492 9.09798 26.4492 8.54785C26.4492 7.99772 26.0033 7.55176 25.4531 7.55176C24.903 7.55176 24.457 7.99772 24.457 8.54785C24.457 9.09798 24.903 9.54395 25.4531 9.54395Z"></path>
									<path d="M7.84254 7.84351C7.45353 8.23252 7.45353 8.86318 7.84254 9.25219C8.23154 9.6412 8.8622 9.6412 9.25121 9.25219C9.64022 8.86318 9.64022 8.23252 9.25121 7.84351C8.86227 7.45451 8.23154 7.45451 7.84254 7.84351Z"></path>
									<path d="M24.7488 24.7478C24.3598 25.1368 24.3598 25.7675 24.7488 26.1565C25.1378 26.5455 25.7685 26.5455 26.1575 26.1565C26.5465 25.7675 26.5465 25.1368 26.1575 24.7478C25.7685 24.3588 25.1377 24.3588 24.7488 24.7478Z"></path>
									<path d="M17 8.03516C17.5501 8.03516 17.9961 7.58917 17.9961 7.03906V5.04688C17.9961 4.49677 17.5501 4.05078 17 4.05078C16.4499 4.05078 16.0039 4.49677 16.0039 5.04688V7.03906C16.0039 7.58917 16.4499 8.03516 17 8.03516Z"></path>
									<path d="M17 25.9648C16.4499 25.9648 16.0039 26.4108 16.0039 26.9609V28.9531C16.0039 29.5032 16.4499 29.9492 17 29.9492C17.5501 29.9492 17.9961 29.5032 17.9961 28.9531V26.9609C17.9961 26.4108 17.5501 25.9648 17 25.9648Z"></path>
									<path d="M8.03516 17C8.03516 16.4499 7.58917 16.0039 7.03906 16.0039H5.04688C4.49677 16.0039 4.05078 16.4499 4.05078 17C4.05078 17.5501 4.49677 17.9961 5.04688 17.9961H7.03906C7.58917 17.9961 8.03516 17.5501 8.03516 17Z"></path>
									<path d="M25.9648 17C25.9648 17.5501 26.4108 17.9961 26.9609 17.9961H28.9531C29.5032 17.9961 29.9492 17.5501 29.9492 17C29.9492 16.4499 29.5032 16.0039 28.9531 16.0039H26.9609C26.4108 16.0039 25.9648 16.4499 25.9648 17Z"></path>
									<path d="M17.9961 16.5879V11.0239C17.9961 10.4738 17.5501 10.0278 17 10.0278C16.4499 10.0278 16.0039 10.4738 16.0039 11.0239V17.0005C16.0039 17.2647 16.1089 17.518 16.2957 17.7049L22.2723 23.6814C22.6612 24.0704 23.2919 24.0704 23.6809 23.6814C24.0699 23.2924 24.0699 22.6618 23.6809 22.2727L17.9961 16.5879Z"></path>
								</svg>
							</div>
							<div class="homec-contact__content">
								<p class="homec-contact__label">Email</p>
								<h3 class="homec-contact__title">Support@prroperties.com</h3>
							</div>
						</div>
						<!-- End Single Contact -->
					</div>
				</div>
				<div class="row mg-top-60">
					<div class="col-12">
						<div class="homec-gmap-canvas">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.763822410071!2d-118.2555300890287!3d34.04992897304589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c7b4a8255fd9%3A0x5439b8821210cf52!2s555%20W%205th%20St%2C%20Los%20Angeles%2C%20CA%2090013%2C%20USA!5e0!3m2!1sen!2sin!4v1699515698728!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection