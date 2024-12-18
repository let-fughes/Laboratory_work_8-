<?php get_header(); ?>

<div id="bg">
    <div class="slider">
        <div class="slide active">
            <img src="<?php echo get_template_directory_uri(); ?>/photo/image1.jpg" alt="Изображение 1">
        </div>
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/photo/image2.jpg" alt="Изображение 2">
        </div>
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/photo/image3.jpg" alt="Изображение 3">
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/slider-script.js"></script>
<section id="title1">
    <h3>Gothic Architecture</h3>
</section>
<br class="da">
<br class="da">

<main>
    <div id="photo-1">
        <img src="<?php echo get_template_directory_uri(); ?>/photo/Gothic-Architecture-1-1024x782.jpg" alt="gothic-arch-1">
    </div>
    <div id="text-1">
        <p>
            In the 12th–13th century, feats of engineering permitted increasingly gigantic buildings. The rib vault, flying buttress, and pointed (Gothic) arch were used as solutions to the problem of building a very tall structure while preserving as much natural light as possible. Stained-glass window panels rendered startling sun-dappled interior effects. One of the earliest buildings to combine these elements into a coherent style was the abbey of Saint-Denis, Paris (c. 1135–44). The High Gothic years (c. 1250–1300), heralded by Chartres Cathedral, were dominated by France, especially with the development of the Rayonnant style. Britain, Germany, and Spain produced variations of this style, while Italian Gothic stood apart in its use of brick and marble rather than stone. Late Gothic (15th-century) architecture reached its height in Germany’s vaulted hall churches. Other late Gothic styles include the British Perpendicular style and the French and Spanish Flamboyant style.
        </p>
    </div>
    <div>
        <p id="text-2">
            Cathedral, in Christian churches that have an episcopal form of church government, the church in which a residential bishop has his official seat or throne, the cathedra. Cathedral churches are of different degrees of dignity. There are cathedral churches of simple diocesan bishops, of archbishops or metropolitans, of primates, patriarchs, and, in the Roman Catholic Church, of the pope. A cathedral church is not necessarily large and magnificent, although most cathedrals have become so. Since the territorial organization of the early church followed that of the Roman Empire, cathedrals from the first were established wherever possible in towns, not in villages. In the early European Middle Ages, the town in which a cathedral church was situated became known as the cathedral city.
        </p>
    </div>
    <div>
        <img id="photo-2" src="<?php echo get_template_directory_uri(); ?>/photo/Pasted image.png" alt="gothic-arch-2">
    </div>
</main> 
<h3>Other Links</h3>
<section>
    <div>
        <div>
            <p id="more-1" class="inline"><img src="<?php echo get_template_directory_uri(); ?>/photo/k-mitch-hodge-o1DfuCuHuTk-unsplash.jpg" style="margin: 10px; width: 93%; height: 350px;"><a href="https://www.britannica.com/art/Gothic-art" class="link" target="_blank">Gothic Architecture like art...</a></p>
        </div>
        <div>
            <p id="more-2" class="inline"><img src="<?php echo get_template_directory_uri(); ?>/photo/lucas-carl-2mqqvfGVK8A-unsplash.jpg" style="margin: 10px; width: 93%; height: 350px;"><a href="list.html" class="link" target="_self">Top 10 gothic buildings...</a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
