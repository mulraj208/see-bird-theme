<?php

$data = [
  'Lorem ipsum dolor sit amet, consectetur adipisicing elit?',
  'Ab at doloremque, explicabo molestiae nesciunt tempore?',
  'Onsectetur adipisicing elit molestiae nesciunt tempore?',
];

?>

<div class="container mx-auto py-8 px-3 2xl:px-0">
  <div class="prose lg:prose-lg max-w-full mb-12">
    <h2 class="text-4xl lg:text-5xl font-extrabold text-center">Recent Articles</h2>
  </div>

  <div class="">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10">
      <?php foreach ( $data as $key => $item ): ?>
        <a
          href="#"
          class="block rounded-lg text-black bg-gray-100 cursor-pointer hover:shadow-xl <?php echo $key === (count($data) - 1) ? 'md:hidden lg:block' : ''; ?>"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <img
            src="https://picsum.photos/536/354?<?php echo $key . 'md'; ?>"
            alt=""
            class="h-52 lg:h-60 w-full object-cover rounded-t-lg mb-5"
          >
          <div class="pb-6 px-4">
            <h4 class="tracking-wider text-xl md:text-2xl font-extrabold mb-4 line-clamp-3">
              <?php echo $item; ?>
            </h4>
            <p class="text-lg mb-6 text-gray-400 leading-relaxed font-light line-clamp-4">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ad, aspernatur culpa
              inventore iure maiores inventore iure maiores inventore iure maiores?</p>
            <span class="bg-primary hover:bg-secondary py-3 px-6 text-white text-base rounded inline-block self-start uppercase tracking-wider mx-auto md:mx-0">
              Read More
            </span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
