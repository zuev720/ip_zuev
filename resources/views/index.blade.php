@extends('layouts.master')
@section('title', 'Главная')
@section('content')
<main class="description_block">
        <nav class="products_block">
                @foreach($products as $product)
                    <div class="card_product">
                        <div class="card_main">
                            <div class="wrapper_image_card"><img class="image_card_product" src="{{ $product->image  }}" alt="Card image cap"></div>
                            <div class="card_product_body">
                                <h4 class="card_product_title">{{ $product->price }} ₽</h4>
                                <div class="card_text_wrapper">
                                    <h4 class="card_product_text">{{ $product->name }}</h4>
                                    <span class="card_product_radius">{{ $product->size }}</span>
                                </div>
                                <a href="{{ route('getProduct', [$product->id]) }}" class="card_button">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </nav>
        <div class="description_company_block">
            <div  class="banner_project" data-ride="carousel">
                 <img class="banner_image" src="https://proflineco.ru/bitrix/templates/profline/img/catalog.png" data-src="holder.js/900x400?theme=social" alt="First slide">
            </div>
            <div class="main_description_block">
                    <div class="content_description">
                        <h3 class="">Производство комплектующих элементов для чистых помещений.</h3>
                        <p>Скругляющие элементы для чистых помещений (элементы обрамления) необходимы для стыковки стеновых панелей, напольного покрытия и потолков. Они облегчают монтаж, герметизируют соединения, обеспечивают плавные переходы между отдельными конструктивными составляющими, минимизируют острые и выступающие углы, упрощают процесс уборки и дезинфекции.</p>
                        <h4>Разновидности скругляющих элементов для чистых помещений</h4>
                        <p>Современные скругляющие элементы для чистых помещений выполнены в виде профилей специальной формы. Они сочетаются со всеми типами облицовок, включая подвесные потолки. Элементы обрамления изготавливаются из алюминиевого сплава, окрашенного порошковой краской. Доступная цветовая гамма включает более 1600 оттенков по картам RAL, NCS, BS и Monicolor. При необходимости, выполняется антибактериальное покрытие.</p>
                        <h5>Различают следующие типы скругляющих элементов для чистых помещений:</h5>
                        <ul class="">
                            <li>Плинтус (потолочный, напольный, вертикальный (внутренний и наружный), подставочный, для завода линолеума, для HPL толщиной 8 и 6мм).</li>
                            <li>Крепление вертикального внутреннего плинтуса, крепление плинтуса с пуклевкой.</li>
                            <li>Соединительные угловые элементы разной формы (внутренние, наружные, для плинтуса).</li>
                            <li>Торцевые заглушки (левая, правая).</li>
                        </ul>
                        <p>Каждый из элементов выполняет определенные функции. Так, монтаж чистых помещений с использованием плинтуса напольного для завода линолеума герметизирует место соединения стеновой сендвич-панели и напольного покрытия. Такой прием препятствует проникновению загрязнений и воды в случае затопления помещения, облегчает процесс уборки.</p>
                        <p>В нашей компании вы найдете — большой выбор качественных скругляющих элементов для чистых помещений различной формы и типоразмеров.</p>
                    </div>
            </div>
        </div>
</main>
<section class="our_advantage">
     <div class="adv_item">
         <img src="http://ksp-cleanroom.ru/images/preim1.png" alt="Отечественное производство">
         <p>Собственное производство</p>
     </div>
     <div class="adv_item">
        <img src="http://ksp-cleanroom.ru/images/preim2.png" alt="Минимизация затрат на всех этапах производства продукции">
        <p>Честная цена</p>
     </div>
     <div class="adv_item">
        <img src="http://ksp-cleanroom.ru/images/preim3.png" alt="Гарантийные обязательства">
        <p>Гарантийные обязательства</p>
     </div>
     <div class="adv_item">
        <img src="http://ksp-cleanroom.ru/images/preim4.png" alt="Соблюдение заявленных сроков производства">
        <p>Соблюдение заявленных сроков производства</p>
     </div>
     <div class="adv_item">
        <img src="http://ksp-cleanroom.ru/images/preim5.png" alt="Гибкая финансовая политика">
        <p>Гибкая финансовая политика</p>
     </div>
</section>

<section class="description_production">
    <div class="description_production_wrapper-block">
        <img class="description_production_image" src="https://chelyabinsk.pkf-dist.ru/image/catalog/videoblocks-melting-of-the-metal-at-the-factory-the-liquid-metal-is-poured-into-molds-blast-furnace-which-melts-metal-ore-splashes-of-molten-metal-at-the-plant-melting-iron-in-the-foundry_s-ulxvqal_thumbnail-full05.png" alt="Generic placeholder image">
        <div class="description_production_text_block">
            <h5 class="">Свое литейное производство</h5>
             <p class="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </div>
    <div class="description_production_wrapper-block">
        <img class="description_production_image" src="http://szstk.ru/sites/default/files/%D0%A2%D0%BE%D0%BA%D0%B0%D1%80%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%204_0.jpg" alt="Generic placeholder image">
        <div class="description_production_text_block">
            <h5 class="">Своя механическая обработка на высокоточных станках с ЧПУ</h5>
            <p class="">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </div>
    <div class="description_production_wrapper-block">
        <img class="description_production_image" src="https://alterainvest.ru/upload/iblock/8fa/8faf9734abe0cc6ee8596d18f592040a.jpg" alt="Generic placeholder image">
        <div class="description_production_text_block">
            <h5 class="mt-0 mb-1">Порошковая покраска</h5>
            <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </div>
</section>
@endsection

