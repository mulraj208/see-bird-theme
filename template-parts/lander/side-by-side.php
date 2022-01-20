<?php

$data = [
  [
    "title" => "Industry 1",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi laborum molestiae quibusdam! Dolorem, impedit ipsam ipsum magni reprehenderit voluptatem voluptatum. Debitis doloribus eum exercitationem id impedit nemo perferendis quibusdam?",
    "url" => "#",
  ],
  [
    "title" => "Industry 2",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi laborum molestiae quibusdam! Dolorem, impedit ipsam ipsum magni reprehenderit voluptatem voluptatum. Debitis doloribus eum exercitationem id impedit nemo perferendis quibusdam?",
    "url" => "#",
  ],
  [
    "title" => "Industry 3",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi laborum molestiae quibusdam! Dolorem, impedit ipsam ipsum magni reprehenderit voluptatem voluptatum. Debitis doloribus eum exercitationem id impedit nemo perferendis quibusdam?",
    "url" => "#",
  ],
];

?>

<div class="container mx-auto py-8 px-3 2xl:px-0">
  <div class="prose lg:prose-lg max-w-full mb-12">
    <h2 class="text-4xl lg:text-5xl font-extrabold text-center">Solutions Across Industries</h2>
  </div>

  <?php foreach ( $data as $key => $item ): ?>
    <div class="grid md:grid-cols-2 gap-6 md:gap-10 place-items-center md:place-items-stretch <?php echo $key === (count($data) - 1) ? '' : 'mb-12'; ?>">
      <div class="flex flex-col justify-center items-center md:items-start <?php echo $key % 2 === 1 ? 'order-2' : 'order-2 md:order-none' ?>">
        <div class="text-3xl lg:text-5xl font-bold mb-3 lg:mb-5"><?php echo $item['title']; ?></div>
        <p class="text-center md:text-left lg:text-lg text-gray-500 leading-normal lg:leading-relaxed mb-4 line-clamp-4 lg:line-clamp-5">
          <?php echo $item['description']; ?>
        </p>
        <a
          href="<?php echo $item['url']; ?>"
          class="bg-primary hover:bg-secondary py-3 lg:py-4 px-8 text-white lg:text-lg rounded inline-block self-start uppercase tracking-wider mx-auto md:mx-0"
        >
          Learn More
        </a>
      </div>
      <img
        src="https://picsum.photos/536/354?<?php echo $key; ?>"
        alt="<?php echo $item['title']; ?>"
        class="h-60 md:h-49 lg:h-auto object-cover rounded-lg <?php echo $key % 2 === 1 ? 'order-1' : 'order-1 md:order-none' ?>"
      >
    </div>
  <?php endforeach; ?>
</div>
