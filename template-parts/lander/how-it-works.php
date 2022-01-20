<?php

$data = [
  [
    "title" => "Absolutely free service",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eveniet ex harum",
    "img" => "https://reinsurancehubpro.akamaized.net/__media__/pics/8001/00/162/Tax_credit.png",
  ],
  [
    "title" => "Hassle-free process",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi consequuntur deleniti dolore esse et, fuga",
    "img" => "https://reinsurancehubpro.akamaized.net/__media__/pics/8001/00/162/Doing_your_taxes.png",
  ],
  [
    "title" => "Best Providers",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eveniet ex harum",
    "img" => "https://reinsurancehubpro.akamaized.net/__media__/pics/8001/00/162/On-demand_insurance.png",
  ],
];

?>

<div class="container mx-auto py-8 px-3 2xl:px-0">
  <div class="prose lg:prose-lg max-w-full mb-12">
    <h2 class="text-4xl lg:text-5xl font-extrabold text-center">How it works</h2>
  </div>

  <div class="max-w-4xl mx-auto">
    <?php foreach ( $data as $key => $item ): ?>
      <div class="grid md:grid-cols-2 gap-10 place-items-center mb-16">
        <img
          src="<?php echo $item['img']; ?>"
          alt="<?php echo $item['title']; ?>"
          class="h-60 md:h-auto object-cover <?php echo $key % 2 === 1 ? 'md:order-2' : '' ?>"
        >
        <div class="flex flex-col justify-center items-center md:items-start <?php echo $key % 2 === 1 ? 'md:order-1' : '' ?>">
          <div class="text-2xl lg:text-3xl font-bold mb-2"><?php echo $item['title']; ?></div>
          <p class="text-center md:text-left text-lg text-gray-500 leading-relaxed">
            <?php echo $item['description']; ?>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
