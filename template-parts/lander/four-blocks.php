<?php $data = [ 'Hardware', 'Software', 'SME Support', 'Training' ]; ?>

<div class="container mx-auto py-8 px-3 2xl:px-0">
  <div class="relative xl:px-6 xl:py-8">
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4 relative z-10">
      <?php foreach ( $data as $item ): ?>
        <div class="rounded bg-gradient-to-r from-secondary to-black text-white py-6 px-4">
          <h4 class="uppercase tracking-wider font-bold mb-6"><?php echo $item; ?></h4>
          <p class="text-lg mb-14 leading-relaxed font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ad, aspernatur culpa
            inventore iure maiores inventore iure maiores inventore iure maiores?</p>
          <a href="#" class="flex items-center hover:underline">
            <span class="mr-8 uppercase tracking-wider text-sm">Learn More</span>
            <span class="inline-block h-10 w-10 bg-primary rounded-full flex justify-center items-center">
            <svg class="h-4 w-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right"
                 role="img"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                 class="svg-inline--fa fa-arrow-right fa-w-14 fa-3x"><path
                fill="currentColor"
                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                class=""></path>
            </svg>
          </span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="hidden xl:block rounded-t-lg absolute top-0 left-0 h-1/2 w-full bg-gray-200 z-0"></div>
    <div class="hidden xl:block rounded-b-lg absolute bottom-0 left-0 h-1/2 w-full bg-cyan-600 z-0"></div>
  </div>
</div>


