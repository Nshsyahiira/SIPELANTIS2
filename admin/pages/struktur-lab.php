<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once("{$base_dir}pages{$ds}core{$ds}header.php");

?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- Card with an image on bottom -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Struktur Organisasi Laboratorium</h5>
                        <p class="card-text">Struktur Organisasi Laboratorium SMK Bina Karya 1 Karawang</p>
                    </div>
                    <img src="../assets/img/card.jpg" class="card-img-bottom" alt="...">
                </div><!-- End Card with an image on bottom -->
            </div>
        </div>
        </div>
        </div>
    </section>
    </div>
    </div><!-- End Left side columns -->
    </div>
    </section>

</main><!-- End #main -->

<?php

require_once("{$base_dir}pages{$ds}core{$ds}footer.php");

?>