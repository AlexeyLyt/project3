<?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>
    <section class="shopping-cart">
        <h2>ВАША КОРЗИНА</h2>
        <p class="parag">Товары резервируются на ограниченное время</p>
        <!-- <table class="table-cart">
            <tr>
                <th>ФОТО</td>
                <th>НАИМЕНОВАНИЕ</td>
                <th>РАЗМЕР</td>
                <th>КОЛИЧЕСТВО</td>
                <th>СТОИМОСТЬ</td>
                <th>УДАЛИТЬ</td>
            </tr>
            <tr>
                <td></td>
                <td>КУРТКА СИНЯЯ<br>арт. 123415</td>
                <td>39</td>
                <td></td>
                <td>3800 руб.</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>КЕДЫ СЕРЫЕ<br>арт. 234552<br><br></td>
                <td>M</td>
                <td></td>
                <td>5200 руб.</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>ДЖИНСЫ ГОЛУБЫЕ<br>арт. 342565</td>
                <td>S</td>
                <td></td>
                <td>3500 руб.</td>
                <td></td>
            </tr>
        </table> -->
        <div class="box-basket">
            <div class="headers">
                <div class="photo"><span>ФОТО</span></div>
                <div class="name"><span>НАИМЕНОВАНИЕ</span></div>
                <div class="size">РАЗМЕР</div>
                <div class="count">КОЛИЧЕСТВО</div>
                <div class="price">СТОИМОСТЬ</div>
                <div class="remove">УДАЛИТЬ</div>
            </div>
            <div class="item item-1">
                <div class="photo"></div>
                <div class="name"><span><p>КУРТКА СИНЯЯ</p><p>арт. 123545</p></span></div>
                <div class="size">39</div>
                <div class="count">1</div>
                <div class="price">3800 руб.</div>
                <div class="remove">Х</div>
            </div>
            <div class="item item-2">
                <div class="photo"></div>
                <div class="name"><span><p>КЕДЫ СЕРЫЕ</p><p>арт. 153312</p></span></div>
                <div class="size">M</div>
                <div class="count">1</div>
                <div class="price">5200 руб.</div>
                <div class="remove">Х</div>
            </div>
            <div class="item item-3">
                <div class="photo"></div>
                <div class="name"><span><p>ДЖИНСЫ ГОЛУБЫЕ</p><p>арт. 656490</p></span></div>
                <div class="size">S</div>
                <div class="count">2</div>
                <div class="price">3500 руб.</div>
                <div class="remove">Х</div>
            </div>
            <div class="item-price">
                <p class="total-price">12500 руб.</p>
            </div>
        </div>
    </section>
<?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>