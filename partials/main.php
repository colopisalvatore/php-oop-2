<main>
    <div class="container">
        <div class="row d-flex justify-content-center align-content-center">
            <h2 class="text-center mb-3">Articoli per Cani</h2>
            
            <div class="col-3">
                <div class="card" style="height: 620px;">
                    <img src="./img/<?php echo $foodDog->getImage()?>" class="card-img-top" alt="<?php echo $foodDog->getImage()?>">
                    <!-- <div class="icon">
                        <img src="./img/<?php echo $foodDog->category->getIconCategory()?>" alt="<?php echo $foodDog->category->getIconCategory()?>" class="icon">
                    </div> -->
                    <div class="card-body">
                        <div class="">
                            <h4 class="card-title"><?php echo $foodDog->getTitle()?></h4>                            
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $foodDog->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Peso: <strong><?php echo $foodDog->getWeight() ?> Kg</strong></p>
                        <p class="card-text">Ingredienti: <strong><?php foreach($foodDog->getIngredients() as $ingredients) echo $ingredients ?></strong></p>
                        <p class="card-text">Data scadenza: <strong><?php echo $foodDog->getExpirationDate() ?></strong></p>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Agginugi al Carrello
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 620px;">
                    <img src="./img/<?php echo $toyDog->getImage()?>" class="card-img-top" alt="<?php echo $foodDog->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $toyDog->getTitle()?></h4>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $toyDog->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $toyDog->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($toyDog->getMaterials() as $materials) echo $materials ?></strong></p>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Agginugi al Carrello
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 620px;">
                    <img src="./img/<?php echo $accessoryDog->getImage()?>" class="card-img-top" alt="<?php echo $accessoryDog->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $accessoryDog->getTitle()?></h4>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $accessoryDog->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Tipo: <strong><?php echo $accessoryDog->getWhere() ?></strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $accessoryDog->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($accessoryDog->getMaterials() as $materials) echo $materials ?></strong></p>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Agginugi al Carrello
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center align-content-center">
            <h2 class="text-center mb-4">Articoli per Gatti</h2>

            <div class="col-3">
                <div class="card" style="height: 620px;">
                    <img src="./img/<?php echo $foodCat->getImage()?>" class="card-img-top" alt="<?php echo $foodCat->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $foodCat->getTitle()?></h4>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $foodCat->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Peso: <strong><?php echo $foodCat->getWeight() ?> Kg</strong></p>
                        <p class="card-text">Ingredienti: <strong><?php foreach($foodCat->getIngredients() as $ingredients) echo $ingredients ?></strong></p>
                        <p class="card-text">Data scadenza: <strong><?php echo $foodCat->getExpirationDate() ?></strong></p>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Agginugi al Carrello
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 620px;">
                    <img src="./img/<?php echo $toyCat->getImage()?>" class="card-img-top" alt="<?php echo $toyCat->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $toyCat->getTitle()?></h4>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $toyCat->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $toyCat->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($toyCat->getMaterials() as $materials) echo $materials ?></strong></p>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Agginugi al Carrello
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 620px;">
                    <img src="./img/<?php echo $accessoryCat->getImage()?>" class="card-img-top" alt="<?php echo $accessoryCat->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $accessoryCat->getTitle()?></h4>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $accessoryCat->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Tipo: <strong><?php echo $accessoryCat->getWhere() ?></strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $accessoryCat->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($accessoryCat->getMaterials() as $materials) echo $materials ?></strong></p>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">
                            <?php
                                if($foodDog->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Agginugi al Carrello
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>