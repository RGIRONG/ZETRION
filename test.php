<!DOCTYPE html>
<html lang="es-MX">

<head>
    <title>ZETRION</title>
    <!-- Tus metaetiquetas, enlaces a CSS, etc. -->
</head>

<body>
    <!-- Tu código HTML aquí -->

    <?php include 'search.php'; ?>
    
    <!-- Mostrar los resultados de la búsqueda -->
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <div class="world-catagory-area mt-50">
                            <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                <li class="title">ZETRION</li>
                            </ul>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <?php if ($coincidencias): ?>
                                            <?php foreach ($resultados as $resultado): ?>
                                                <?php $info = explode(",", $resultado); ?>
                                                <div class='single-blog-post wow fadeInUpBig' data-wow-delay='0.2s'>
                                                    <div class='post-thumbnail'>
                                                        <?php if (!empty($info['URL'])): ?>
                                                            <img src='<?= $info['URL'] ?>' alt='Portada del libro' width='300' height='300'>
                                                        <?php endif; ?>
                                                        <div class='post-cta'><a href='lib.php?id=<?= $info['Id'] ?>'><?= $info['TITULO'] ?></a></div>
                                                    </div>
                                                    <div class='post-content'>
                                                        <h1 ><a class='a-phptitle'><?= $info['TITULO'] ?></a></h1>
                                                        <h5>Encontrado por : <?= $columna ?></h5>
                                                        <p class='ptxt'>
                                                            <?php foreach ($info as $col => $value): ?>
                                                                <?php if ($col != 'URL' && $col != 'Id'): ?>
                                                                    <div>
                                                                        <ul class='list-group'>
                                                                            <a href='lib.php?id=<?= $info['Id'] ?>' class='btn'><li class='list-group-item list-group-item-action list-group-item-primary' style='display: block; width: 300; white-space: normal;'><strong><?= $col ?>:</strong><?= $value ?></li></a>
                                                                        </ul>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </p>
                                                        <p class='ptxt'><strong>¡Excelente!</strong></p>
                                                        <div class=post-meta>
                                                            <p><a href='#' class='card-link'>ZETRION</a> en <a href='#' class='card-text'>2023</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <p>No se encontraron resultados.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Más código HTML aquí -->

</body>

</html>
