<?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>
    <section class="details">
        <div class="product-id-img"></div>
        <h2>КЕДЫ С ПОЛОСКОЙ</h2>
        <p class="vendor">Артикул: 385904</p>
        <p class="price">4500 руб.</p>
        <p class="description">Отличные куды из водонепроницаемого материала. Отлично подходят для любой погоды.<br> Приятно сидят на ноге, стильные и комфортные</p>
        <p class="size">РАЗМЕР</p>
        <form action="form.php" method="GET">
            <label class="size-checkbox">
                <input type="checkbox" name="size" value="38">
                <div class="check"><span>38</span></div>
            </label>
            <label class="size-checkbox">
                <input type="checkbox" name="size" value="39">
                <div class="check"><span>39</span></div>
            </label>
            <label class="size-checkbox">
                <input type="checkbox" name="size" value="40">
                <div class="check"><span>40</span></div>
            </label>
            <label class="size-checkbox">
                <input type="checkbox" name="size" value="41">
                <div class="check"><span>41</span></div>
            </label>
            <label class="size-checkbox">
                <input type="checkbox" name="size" value="42">
                <div class="check"><span>42</span></div>
            </label><br>
            <button class="submit" type="submit">ДОБАВИТЬ В КОРЗИНУ</button>
        </form>
    </section>
<?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>