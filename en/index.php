<!DOCTYPE html>
<html lang="en-US">

	<!-- head -->	
	<?php include('includes/head.php'); ?>

	<!-- body -->
	<body class="home bg-[#f3f2f1] text-slate-500">
		<div class="overflow-hidden">

			<!-- menus -->
			<?php include('includes/fixed-menu.php'); ?>

			<!-- banner -->
			<section id="banner" class="relative w-full min-h-[600px] h-screen overflow-hidden md:px-20 xl:px-32">

				<img src="../assets/img/bg-01.jpg" alt="Mountains" class="absolute -right-[110%] sm:right-0 z-0 -translate-y-1/2 top-1/2 max-w-[250%] sm:max-w-full md:max-w-[85%] opacity-70 rellax" data-rellax-percentage="0" data-rellax-speed="4" />

				<div class="relative flex items-center justify-center h-full container-wrapper z-2">

					<a href="#infos" class="absolute sliding-link z-3 bottom-5 md:bottom-[5vh] left-6 lg:left-20 xl:left-32 2xl:left-52 w-16 sm:w-20 h-16 sm:h-20 cursor-pointer block group scroll-down">
					
						<div class="relative z-0 w-full h-full transition-colors duration-300 border rounded-full border-slate-300 group-hover:border-slate-400"></div>
						
						<div class="absolute w-auto h-20 transition-colors duration-300 -translate-x-1/2 text-slate-700 z-2 sm:h-28 bottom-1/3 left-1/2 group-hover:text-mauve">
							<?php include('../assets/svg/arrow-down.php') ?>
						</div>
	
					</a>

					<a href="./" class="max-h-full max-w-[60%] sm:max-h-[50%] block -translate-y-5">
						<?php include('../assets/svg/logo-complete-en.php'); ?>
					</a>

				</div>

				<a href="#infos" class="absolute inline-block uppercase transition-colors duration-300 z-9 text-small sliding-link bottom-5 right-5 hover:text-mauve scroll-down">
					Scroll down
				</a>

			</section>

			<!-- infos -->
			<section id="infos" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-36 lg:pt-44 xl:pt-52">
				<div class="container-wrapper">
					<div class="lg:pl-20 xl:pl-32 2xl:pl-52 lg:flex">

						<div class="block lg:w-[40%]">

							<p class="text-medium sub">
								The Date
							</p>

							<h1 class="title-big text-mauve">
								Saturday <br />
								October 1st <br />
								2022
							</h1>

						</div>

						<div class="block lg:w-[60%] pt-16 lg:pt-44">

							<p class="text-medium sub">
								The invitation
							</p>

							<p class="block max-w-md mb-10 text-medium">
								<i>"Speak friend and enter."</i><br /><br />
								
								It is with great pleasure that we invite you to our wedding! We'll be waiting for you there!
							</p>

							<a href="#rsvp" class="font-bold uppercase text-medium sliding-link text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
								Confirm if you're going
							</a>

						</div>

					</div>
				</div>
			</section>

			<!-- photos -->
			<section id="photos" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-52 lg:pt-72 xl:pt-96">
				<div class="container-wrapper">
					
					<div class="relative">

						<div class="block w-[95%] md:w-[65%] relative z-2">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".5" data-rellax-speed="2">
							
								<div class="relative h-0 pb-[100%] w-full overflow-hidden">
									<img src="../assets/img/photo-01.jpg" alt="Ireland / Howth / 2020" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Ireland <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Howth / 2020</span>
								</p>

							</div>

							<div class="absolute -top-[15%] md:-top-[20%] -right-10 md:right-auto md:-left-10 z-3 md:z-0 w-[40%] h-auto text-slate-300">
								<?php include('../assets/svg/01.php') ?>
							</div>

						</div>

						<div class="block w-[90%] md:w-[50%] float-right z-1 mt-10 md:-mt-[20%] relative md:pr-10 xl:pr-20">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".1" data-rellax-speed="-1">
							
								<div class="relative h-0 pb-[110%] w-full overflow-hidden">
									<img src="../assets/img/photo-02.jpg" alt="Ireland / Dublin / 2019" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Ireland <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Dublin / 2019</span>
								</p>

							</div>

							<div class="absolute bottom-[15%] md:bottom-auto md:-top-[30%] -left-[15%] md:left-auto md:right-0 z-3 md:z-0 w-[65%] md:w-[75%] h-auto text-slate-300">
								<?php include('../assets/svg/oct.php') ?>
							</div>

						</div>

						<div class="cf"></div>

					</div>

					<div class="relative mt-10 md:mt-32 lg:mt-40 xl:mt-52">

						<div class="block w-[95%] md:w-[55%] relative z-1">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".1" data-rellax-speed="-2">

								<div class="relative h-0 pb-[110%] w-full overflow-hidden">
									<img src="../assets/img/photo-03.jpg" alt="Brazil / Florianópolis / 2017" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Brazil <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Florianópolis / 2017</span>
								</p>

							</div>

						</div>

						<div class="block w-[95%] md:w-[60%] float-right z-2 mt-10 md:-mt-[20%] relative">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".1" data-rellax-speed="3">
							
								<div class="relative h-0 pb-[100%] w-full overflow-hidden">
									<img src="../assets/img/photo-04.jpg" alt="Brazil / Curitiba / 2013" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Brazil <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Curitiba / 2013</span>
								</p>

							</div>

							<div class="absolute bottom-[15%] md:bottom-auto md:-top-[33%] -left-[8%] md:left-auto md:right-[10%] z-3 md:z-0 w-[50%] h-auto text-slate-300 rellax" data-rellax-percentage=".5" data-rellax-speed="4">
								<?php include('../assets/svg/22.php') ?>
							</div>

						</div>

						<div class="cf"></div>

					</div>

				</div>
			</section>

			<!-- the ceremony -->
			<section id="the-ceremony" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-52">

				<img src="../assets/img/bg-02.jpg" alt="Lord of the Rings City" class="hidden md:block absolute top-0 left-0 z-0 w-auto h-full max-w-[65%] lg:max-w-[70%] opacity-80 lg:opacity-100 rellax object-contain" data-rellax-percentage="1.8" data-rellax-speed=".5" />

				<div class="relative container-wrapper z-2">

					<div class="relative inline-block pl-20 md:float-right pt-14 md:pt-24 sm:pt-0 sm:pl-48 md:pl-52 lg:pl-60 2xl:pl-64 md:pr-20 2xl:pr-32">

						<div class="absolute top-0 left-0 z-0 w-auto h-[75%] md:h-[85%] sm:h-full text-slate-400 opacity-60">
							<?php include('../assets/svg/17h00.php') ?>
						</div>

						<div class="relative z-2">

							<p class="text-medium sub">
								The Ceremony
							</p>

							<h1 class="title-big text-mauve">
								Church <br />
								Senhor <br />
								Bom Jesus <br />
								do Cabral
							</h1>

							<p class="block my-5 md:my-10 text-medium">
								St. Bom Jesus, 159 - Juvevê <br />
								Curitiba - PR
							</p>

							<a href="https://goo.gl/maps/oF9DQAgeb2UvzD2y7" target="_blank" class="font-bold uppercase text-medium text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
								Get directions
							</a>

						</div>

					</div>

					<div class="cf"></div>

				</div>
			</section>

			<!-- the party -->
			<section id="the-party" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-52 lg:pt-72 xl:pt-96">

				<img src="../assets/img/bg-03.jpg" alt="Casa do Hobbit" class="hidden md:block absolute bottom-0 right-0 z-0 w-auto h-[120%] max-w-[60%] opacity-80 lg:opacity-100 rellax object-contain" data-rellax-percentage="1.5" data-rellax-speed="2" />

				<div class="relative container-wrapper z-2">

					<div class="relative pl-20 pt-14 md:pt-24 sm:pt-0 sm:pl-48 md:pl-52 lg:pl-60 2xl:pl-64">

						<div class="absolute top-0 left-0 z-0 w-auto h-[75%] md:h-[85%] sm:h-full text-slate-400 opacity-60">
							<?php include('../assets/svg/19h00.php') ?>
						</div>

						<div class="relative z-2">

							<p class="text-medium sub">
								The Party
							</p>

							<h1 class="title-big text-mauve">
								Dom <br />
								Parma <br />
								Trattoria
							</h1>

							<p class="block my-5 md:my-10 text-medium">
								St. Comendador Araújo, 598 - Batel <br />
								Curitiba - PR
							</p>

							<a href="https://g.page/domparma" target="_blank" class="font-bold uppercase text-medium text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
								Get directions
							</a>

						</div>

					</div>

				</div>
			</section>

			<!-- registry -->
			<section id="registry" class="relative w-full pt-32 overflow-hidden md:pl-20 xl:px-32 sm:pt-28 md:pt-28 md:mt-24 lg:pt-32 lg:mt-40 xl:pt-36 xl:mt-60">

				<img src="../assets/img/bg-04.jpg" alt="Cabana do Hagrid" class="absolute -bottom-20 md:bottom-0 left-0 z-0 w-auto max-w-[140%] md:max-w-[65%] opacity-80" />

				<div class="relative container-wrapper z-2">
					<div class="pb-[80vw] pl-20 sm:pl-48 md:float-right 2xl:pr-52 md:pb-32 lg:pb-44 xl:pb-52">

						<p class="text-medium sub">
							Registry
						</p>

						<h1 class="title-big text-mauve">
							Wedding <br />
							Registry
						</h1>

						<p class="block my-5 md:my-10 text-medium max-w-[80%] md:max-w-md">
							You can access it by clicking on the link below.
						</p>

						<a href="https://sites.icasei.com.br/flavioeflavia2022/" target="_blank" class="font-bold uppercase text-medium text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
							View registry
						</a>

					</div>

					<div class="cf"></div>
					
				</div>
			</section>

			<!-- rsvp -->
			<section id="rsvp" class="relative w-full md:pl-20 xl:px-32 bg-[#ecebea] py-16 sm:py-20 md:py-28 lg:py-32">

				<img src="../assets/img/bg-05.jpg" alt="Witcher" class="hidden md:block absolute -right-10 lg:right-0 z-0 -translate-y-1/2 top-1/2 max-w-[75%] lg:max-w-[55%] opacity-60 lg:opacity-100 rellax" data-rellax-percentage="-1.1" data-rellax-speed="2" />

				<div class="relative container-wrapper z-2">
					<div class="md:max-w-[50%] lg:max-w-[40%]">

						<p class="text-medium sub">
							RSVP
						</p>

						<h1 class="title-big text-mauve">
							Will you be <br />
							joining us?
						</h1>

						<form id="contact-form" action="https://formsubmit.co/f04b3085abd50de30e945bf7a1ca7e81" method="POST" class="mt-10 sm:mt-12">

							<input type="hidden" name="_next" value="https://flavioeflavia.com.br/#form-success">
							<input type="text" name="_honey" style="display:none">
							<input type="hidden" name="_captcha" value="false">
							<input type="hidden" name="_template" value="box">
							<input type="hidden" name="_subject" value="Confirmação de presença">
							
							<div class="relative mb-5 sm:mb-8 md:mb-10 form-line">
								
								<label for="name" class="text-small absolute z-2 -top-3 left-2 sm:left-5 inline-block leading-none py-1 px-2 sm:px-4 bg-[#eeece9]">
									Name
								</label>

								<input type="text" id="name" name="Nome" class="relative block w-full px-4 py-5 bg-transparent border rounded-md shadow-none sm:px-8 text-medium z-1 border-slate-400" required placeholder="Type here">

							</div>

							<div class="relative flex items-center justify-between mb-8 md:mb-10 form-line">

								<label for="size" class="block mr-5 text-medium">
									Will you be wearing high heels? What size (BR) do you wear?
								</label>

								<div class="relative block px-4 border rounded-md w-28 sm:w-40 border-slate-400">

									<select name="Calçado" id="size" class="px-0 py-5 bg-transparent border-none shadow-none text-medium appearance-none cursor-pointer indent-[1px] w-full block" style="text-overflow: '';">
										<option value="Não" selected>No</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
									</select>

									<div class="absolute flex w-5 h-5 -translate-y-1/2 pointer-events-none top-1/2 right-3 z-2">
										<?php include('../assets/svg/arrow-down-small.php') ?>
									</div>

								</div>

							</div>

							<button type="submit" name="Confirm" class="text-medium text-mauve uppercase cursor-pointer hvr-underline-from-left before:h-[1px] before:bg-mauve float-right">
								Confirm
							</button>

							<div class="cf"></div>

						</form>

					</div>
				</div>

			</section>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>
			<?php include('includes/popups.php'); ?>

			<footer>
				<script src="../assets/js/framework.js"></script>
			</footer>

		</div>
	</body>
	
</html>