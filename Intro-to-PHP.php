<?php

/*******w******** 
    
    Name: Pravleen Kaur
    Date:
    Description:

****************/

$config = [

    'gallery_name' => 'My_Gallery',
 
    'unsplash_categories' => ['nature','travel','luxury','fashion','food','people'],
 
    'local_images' => [
        [
            'filename' => 'morning.jpg',
            'photographer' => 'Carmen Roman',
            'url' => 'https://unsplash.com/@ccroman'
        ],
        [
            'filename' => 'tower.jpg',
            'photographer' => 'Sander Traa',
            'url' => 'https://unsplash.com/@sandertraa'
        ],
        [
            'filename' => 'pool.jpg',
            'photographer' => 'Maximilien TScharner',
            'url' => 'https://unsplash.com/@maxtscha'
        ],
        [
            'filename' => 'pearls.jpg',
            'photographer' => 'MohammadReza BaBaei',
            'url' => 'https://unsplash.com/@mohammadrezababaei'
        ],
         [
            'filename' => 'toast.jpg',
            'photographer' => 'Gaby Yerden',
            'url' => 'https://unsplash.com/@gbyz13'
        ]
    ]
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
   <h1><?php echo htmlspecialchars($config['gallery_name']); ?></h1>

    <?php foreach ($config['unsplash_categories'] as $category): ?>
        <h2><?php echo ucfirst($category); ?></h2>
        <img src="https://source.unsplash.com/300x200/?<?php echo urlencode($category); ?>" alt="<?php echo ucfirst($category); ?> image">
    <?php endforeach; ?>

    <h1><?php echo count($config['local_images']); ?> Large Images</h1>
    
    <?php foreach ($config['local_images'] as $image): ?>
        <div class="image">
            <a href="images/<?php echo htmlspecialchars($image['filename']); ?>" data-lightbox="gallery">
                <img src="images/<?php echo htmlspecialchars($image['filename']); ?>" alt="Local image">
            </a>
            <p>
                Photo by 
                <a href="<?php echo htmlspecialchars($image['url']); ?>" target="_blank">
                    <?php echo htmlspecialchars($image['photographer']); ?>
                </a>
            </p>
        </div>
    <?php endforeach; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>
</body>
</html>