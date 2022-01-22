<div class="container mx-auto py-8 px-3 2xl:px-0">
  <div class="prose lg:prose-lg max-w-full mb-12">
    <h2 class="text-4xl lg:text-5xl font-extrabold text-center">Testimonials</h2>
  </div>

  <div class="max-w-4xl mx-auto">
    <div class="swiper testimonial-swiper">
      <div class="swiper-wrapper">
        <?php foreach ( array_fill( 0, 4, null ) as $item ): ?>
          <div
            class="swiper-slide px-6 py-10 lg:px-12 lg:py-14 border border-gray-300 bg-teal-50 grid md:grid-cols-3 gap-8 lg:gap-16 place-items-center rounded-lg">
            <img
              src="https://randomuser.me/api/portraits/men/27.jpg"
              alt="John Doe"
              class="h-40 w-40 lg:h-48 lg:w-48 rounded-full"
            >
            <div class="md:col-span-2">
              <h4 class="font-extrabold text-2xl lg:text-3xl mb-4 text-black text-center md:text-left">Our Impact</h4>
              <p class="mb-6 text-gray-400 line-clamp-4 italic text-center md:text-left">
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut autem consequatur, cum earum
                eligendi
                fugiat fugit maiores necessitatibus odio, pariatur perspiciatis placeat praesentium quasi qui sint tempore
                tenetur voluptate!"
              </p>
              <div class="text-center md:text-left">
                <span class="font-bold text-base block">John Doe</span>
                <span class="text-xs text-gray-400 block">Investment Banker</span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</div>
