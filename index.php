<!DOCTYPE html>
<html lang="pt-BR">

	<!-- head -->	
	<?php include('includes/head.php'); ?>

	<!-- body -->
	<body class="home bg-[#f3f2f1] text-slate-500">
		<div class="overflow-hidden">

			<!-- menus -->
			<?php include('includes/fixed-menu.php'); ?>

			<!-- banner -->
			<section id="banner" class="relative w-full h-screen overflow-hidden md:px-20 xl:px-32">

				<img src="assets/img/bg-01.jpg" alt="Mountains" class="absolute right-0 z-0 -translate-y-1/2 top-[62%] sm:top-1/2 max-w-full md:max-w-[85%] opacity-60 rellax" data-rellax-percentage="0" data-rellax-speed="4" />

				<div class="relative flex items-center justify-center h-full container-wrapper z-2">

					<a href="#infos" class="absolute sliding-link z-3 bottom-5 md:bottom-[5vh] left-6 lg:left-20 xl:left-32 2xl:left-52 w-16 sm:w-20 h-16 sm:h-20 cursor-pointer block group scroll-down">
					
						<div class="relative z-0 w-full h-full transition-colors duration-300 border rounded-full border-slate-300 group-hover:border-slate-400"></div>
						
						<div class="absolute w-auto h-20 transition-colors duration-300 -translate-x-1/2 text-slate-700 z-2 sm:h-28 bottom-1/3 left-1/2 group-hover:text-mauve">
							<?php include('assets/svg/arrow-down.php') ?>
						</div>
	
					</a>

					<a href="./" class="max-h-[80%] max-w-[60%] sm:max-h-[50%] block -translate-y-5">
						<?php include('assets/svg/logo-complete.php'); ?>
					</a>

				</div>

			</section>

			<!-- infos -->
			<section id="infos" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-36 lg:pt-44 xl:pt-52">
				<div class="container-wrapper">
					<div class="lg:pl-20 xl:pl-32 2xl:pl-52 lg:flex">

						<div class="block lg:w-[40%]">

							<p class="text-medium sub">
								A Data
							</p>

							<h1 class="title-big text-mauve">
								Sábado <br />
								01 Outubro <br />
								2022
							</h1>

						</div>

						<div class="block lg:w-[60%] pt-16 lg:pt-44">

							<p class="text-medium sub">
								O Convite
							</p>

							<p class="block mb-10 text-medium 2xl:pr-20">
								Aqui vamos contar à vocês, queridos amigos e familiares, os momentos mais marcantes da nossa história de amor. A contagem regressiva começa, o frio na barriga e toda a ansiedade do dia mais esperado de nossas vidas nos enche de alegria em tê-los ao nosso lado. Vamos juntos nesse grande sonho, o dia em que uniremos nossas almas e corpos para sempre, o dia do nosso casamento.
							</p>

							<a href="#rsvp" class="font-bold uppercase text-medium sliding-link text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
								Confirme sua presença
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
									<img src="assets/img/photo-01.jpg" alt="Irlanda / Howth / 2020" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Irlanda <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Howth / 2020</span>
								</p>

							</div>

							<div class="absolute -top-[15%] md:-top-[20%] -right-10 md:right-auto md:-left-10 z-3 md:z-0 w-[40%] h-auto text-slate-300">
								<?php include('assets/svg/01.php') ?>
							</div>

						</div>

						<div class="block w-[90%] md:w-[50%] float-right z-1 mt-10 md:-mt-[20%] relative md:pr-10 xl:pr-20">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".1" data-rellax-speed="-1">
							
								<div class="relative h-0 pb-[110%] w-full overflow-hidden">
									<img src="assets/img/photo-02.jpg" alt="Irlanda / Dublin / 2019" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Irlanda <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Dublin / 2019</span>
								</p>

							</div>

							<div class="absolute bottom-[15%] md:bottom-auto md:-top-[30%] -left-[15%] md:left-auto md:right-0 z-3 md:z-0 w-[65%] md:w-[75%] h-auto text-slate-300">
								<?php include('assets/svg/out.php') ?>
							</div>

						</div>

						<div class="cf"></div>

					</div>

					<div class="relative mt-10 md:mt-32 lg:mt-40 xl:mt-52">

						<div class="block w-[95%] md:w-[55%] relative z-1">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".1" data-rellax-speed="-2">

								<div class="relative h-0 pb-[110%] w-full overflow-hidden">
									<img src="assets/img/photo-03.jpg" alt="Brasil / Florianópolis / 2017" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Brasil <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Florianópolis / 2017</span>
								</p>

							</div>

						</div>

						<div class="block w-[95%] md:w-[60%] float-right z-2 mt-10 md:-mt-[20%] relative">

							<div class="relative w-full rellax z-2" data-rellax-percentage=".1" data-rellax-speed="3">
							
								<div class="relative h-0 pb-[100%] w-full overflow-hidden">
									<img src="assets/img/photo-04.jpg" alt="Brasil / Curitiba / 2013" class="absolute top-0 left-0 object-cover w-full h-full">
								</div>

								<p class="block mt-3 font-bold md:mt-6 text-medium text-slate-800">
									Brasil <span class="inline-block pl-4 font-normal align-top md:pl-5 lg:pl-10 text-slate-500">Curitiba / 2013</span>
								</p>

							</div>

							<div class="absolute bottom-[15%] md:bottom-auto md:-top-[33%] -left-[8%] md:left-auto md:right-[10%] z-3 md:z-0 w-[50%] h-auto text-slate-300 rellax" data-rellax-percentage=".5" data-rellax-speed="4">
								<?php include('assets/svg/22.php') ?>
							</div>

						</div>

						<div class="cf"></div>

					</div>

				</div>
			</section>

			<!-- the ceremony -->
			<section id="the-ceremony" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-52">

				<img src="assets/img/bg-02.jpg" alt="City" class="hidden md:block absolute bottom-0 right-0 z-0 w-auto h-[120%] max-w-[60%] opacity-50 lg:opacity-80 rellax object-contain" data-rellax-percentage="1.5" data-rellax-speed="2" />

				<div class="relative container-wrapper z-2">

					<div class="relative pl-20 pt-14 md:pt-24 sm:pt-0 sm:pl-48 md:pl-52 lg:pl-60 2xl:pl-64">

						<div class="absolute top-0 left-0 z-0 w-auto h-[75%] md:h-[85%] sm:h-full text-slate-300">
							<?php include('assets/svg/17h00.php') ?>
						</div>

						<div class="relative z-2">

							<p class="text-medium sub">
								A Cerimônia
							</p>

							<h1 class="title-big text-mauve">
								Igreja <br />
								Senhor <br />
								Bom Jesus <br />
								do Cabral
							</h1>

							<p class="block my-5 md:my-10 text-medium">
								Rua Bom Jesus, 159 - Juvevê <br />
								Curitiba - PR
							</p>

							<a href="https://goo.gl/maps/oF9DQAgeb2UvzD2y7" target="_blank" class="font-bold uppercase text-medium text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
								Como chegar
							</a>

						</div>

					</div>

				</div>
			</section>

			<!-- the party -->
			<section id="the-party" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-52 lg:pt-72 xl:pt-96">

				<img src="assets/img/bg-03.jpg" alt="Mountains" class="hidden md:block absolute top-0 left-0 z-0 w-auto h-full max-w-[45%] lg:max-w-[55%] opacity-50 lg:opacity-80 rellax object-contain" data-rellax-percentage="1.8" data-rellax-speed="2" />

				<div class="relative container-wrapper z-2">

					<div class="relative inline-block float-right pl-20 pt-14 md:pt-24 w-fit sm:pt-0 sm:pl-48 md:pl-52 lg:pl-60 2xl:pl-64">

						<div class="absolute top-0 left-0 z-0 w-auto h-[75%] md:h-[85%] sm:h-full text-slate-300">
							<?php include('assets/svg/19h00.php') ?>
						</div>

						<div class="relative z-2">

							<p class="text-medium sub">
								A Festa
							</p>

							<h1 class="title-big text-mauve">
								Bom <br />
								Parma <br />
								Trattoria
							</h1>

							<p class="block my-5 md:my-10 text-medium">
								Rua Comendador Araújo, 598 - Batel <br />
								Curitiba - PR
							</p>

							<a href="https://g.page/domparma" target="_blank" class="font-bold uppercase text-medium text-mauve hvr-underline-from-left before:h-[1px] before:bg-mauve">
								Como chegar
							</a>

						</div>

					</div>

					<div class="cf"></div>

				</div>
			</section>

			<!-- registry -->
			<section id="registry" class="relative w-full pt-20 md:pl-20 xl:px-32 sm:pt-28 md:pt-52 lg:pt-72 xl:pt-96">
				<div class="container-wrapper">
					
				</div>
			</section>

			<!-- rsvp -->
			<section id="rsvp" class="relative w-full md:pl-20 xl:px-32">
				
			</section>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>

			<footer>
				<script src="assets/js/framework.js"></script>
			</footer>

		</div>
	</body>
	
</html>