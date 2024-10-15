<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>


<body>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis maiores, maxime id
                debitis beatae incidunt? Reiciendis hic facere dolor? Perferendis sequi sunt mollitia molestias dolor
                possimus maiores inventore veritatis quis.
                Nostrum nemo tempore deleniti perferendis quos obcaecati culpa vitae praesentium libero facilis corporis
                esse quisquam quis consequatur, quas minus animi alias molestiae quibusdam modi quam. Esse reiciendis
                perspiciatis mollitia maxime!
                Veniam, repellat. Obcaecati dolorum, ea nam fugit atque quae in perferendis deleniti culpa, laboriosam
                adipisci! Sed reiciendis, ipsa repudiandae architecto est, aperiam optio earum quia blanditiis, harum
                neque esse! Accusamus?
                Ex fugit cumque provident modi autem porro, minus, ducimus aperiam velit quo ad sunt quos. Nostrum
                officiis illo recusandae sint eos beatae suscipit eius quam eligendi, quas fugit nihil exercitationem.
                Velit maxime vero voluptatum repellat reprehenderit illo. Quia deserunt voluptate beatae ex quae enim
                eveniet provident, ipsa et velit molestiae totam quod sed natus odio dolorum delectus nostrum doloremque
                culpa!</p>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis maiores, maxime id
                debitis beatae incidunt? Reiciendis hic facere dolor? Perferendis sequi sunt mollitia molestias dolor
                possimus maiores inventore veritatis quis.
                Nostrum nemo tempore deleniti perferendis quos obcaecati culpa vitae praesentium libero facilis corporis
                esse quisquam quis consequatur, quas minus animi alias molestiae quibusdam modi quam. Esse reiciendis
                perspiciatis mollitia maxime!
                Veniam, repellat. Obcaecati dolorum, ea nam fugit atque quae in perferendis deleniti culpa, laboriosam
                adipisci! Sed reiciendis, ipsa repudiandae architecto est, aperiam optio earum quia blanditiis, harum
                neque esse! Accusamus?
                Ex fugit cumque provident modi autem porro, minus, ducimus aperiam velit quo ad sunt quos. Nostrum
                officiis illo recusandae sint eos beatae suscipit eius quam eligendi, quas fugit nihil exercitationem.
                Velit maxime vero voluptatum repellat reprehenderit illo. Quia deserunt voluptate beatae ex quae enim
                eveniet provident, ipsa et velit molestiae totam quod sed natus odio dolorum delectus nostrum doloremque
                culpa!</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach ($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
    <?php
    include_once("templates/footer.php")
        ?>