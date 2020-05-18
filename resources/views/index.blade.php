
@extends('layouts.master')
@section('title', 'Главная')
@section('content')
<div class="content">
    <div class="row no-gutters">
        <div class="left col-lg-3">
            <nav class="nav flex-column">
                @foreach($products as $product)
                    <div class="card_product container m-0 p-0">
                                        <div class="card">
                                            <div class="container-fluid mt-3"><img class="image_card_product img-fluid card-img-top" src="{{ $product->image  }}" alt="Card image cap"></div>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">{{ $product->price }} руб.</h4>
                                                <p class="card-text text-center ml-1 mr-1">{{ $product->name }}</p>
                                                <div class="row justify-content-center text-center"><a href="{{ route('getProduct', [$product->id]) }}" class="card_button p-2 pr-3 pl-3">Подробнее</a></div>
                                            </div>
                                        </div>
                                    </div>
                    @endforeach
            </nav>
            <div class="row justify-content-center"></div>
        </div>
        <div class="right col-12 col-lg-9 mt-3 align-items-center no-gutters">
            <div class="container-fluid mr-0 pr-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active no-gutters">
                            <img class="d-block w-100 img-fluid" src="https://static.tildacdn.com/tild6239-3062-4461-b130-303933666364/AZHUR_1912.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
                        </div>
                        <div class="carousel-item no-gutters">
                            <img class="d-block w-100 img-fluid" src="https://www.cleanroom-industries.com/media/tz_portfolio/article/cache/industrial-cleanroom-biological-cleanroom-184_L.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="description-block container mt-3 ml-3">
                <div class="row justify-content-center">
                    <div class="content_description p-5 mt-5">
                        <h3 class="mt-5">Производство комплектующих элементов для чистых помещений.</h3>
                        <p>Скругляющие элементы для чистых помещений (элементы обрамления) необходимы для стыковки стеновых панелей, напольного покрытия и потолков. Они облегчают монтаж, герметизируют соединения, обеспечивают плавные переходы между отдельными конструктивными составляющими, минимизируют острые и выступающие углы, упрощают процесс уборки и дезинфекции.</p>
                        <h4>Разновидности скругляющих элементов для чистых помещений</h4>
                        <p>Современные скругляющие элементы для чистых помещений выполнены в виде профилей специальной формы. Они сочетаются со всеми типами облицовок, включая подвесные потолки. Элементы обрамления изготавливаются из алюминиевого сплава, окрашенного порошковой краской. Доступная цветовая гамма включает более 1600 оттенков по картам RAL, NCS, BS и Monicolor. При необходимости, выполняется антибактериальное покрытие.</p>
                        <h5>Различают следующие типы скругляющих элементов для чистых помещений:</h5>
                        <ul class="ml-5">
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
        </div>
    </div>
</div>
<div class="our_advantage mt-5">
    <div class="row mt-5 text-center">
            <div class="adv_item col">
                <img src="http://ksp-cleanroom.ru/images/preim1.png" alt="Отечественное производство">
                <p>Собственное отечественное производство</p>
            </div>
            <div class="adv_item col">
                <img src="http://ksp-cleanroom.ru/images/preim2.png" alt="Минимизация затрат на всех этапах производства продукции">
                <p>Честная цена</p>
            </div>
            <div class="adv_item col">
                <img src="http://ksp-cleanroom.ru/images/preim3.png" alt="Гарантийные обязательства">
                <p>Гарантийные обязательства</p>
            </div>
            <div class="adv_item col">
                <img src="http://ksp-cleanroom.ru/images/preim4.png" alt="Соблюдение заявленных сроков производства">
                <p>Соблюдение заявленных сроков производства</p>
            </div>
            <div class="adv_item col">
                <img src="http://ksp-cleanroom.ru/images/preim5.png" alt="Гибкая финансовая политика">
                <p>Гибкая финансовая политика</p>
            </div>
    </div>
</div>

<div class="description_production container mt-5 no-gutters">
    <div class="row text-left mt-5">
        <div class="col-12  col-lg-5  order-lg-last">
            <img class="d-flex img-fluid" src="https://chelyabinsk.pkf-dist.ru/image/catalog/videoblocks-melting-of-the-metal-at-the-factory-the-liquid-metal-is-poured-into-molds-blast-furnace-which-melts-metal-ore-splashes-of-molten-metal-at-the-plant-melting-iron-in-the-foundry_s-ulxvqal_thumbnail-full05.png" alt="Generic placeholder image">
        </div>
        <div class="col-12 col-lg-7 order-lg-first mt-3">
            <h5 class="mt-0 mb-1">Свое литейное производство</h5>
                <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
    </div>
    <div class="row">
        <div class="row text-left mt-5">
            <div class="col-12  col-lg-5  order-lg-last">
                <img class="d-flex img-fluid"
                     src="http://szstk.ru/sites/default/files/%D0%A2%D0%BE%D0%BA%D0%B0%D1%80%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%204_0.jpg"
                     alt="Generic placeholder image">
            </div>
            <div class="col-12 col-lg-7 order-lg-first mt-3">
                <h5 class="mt-0 mb-1">Своя механическая обработка на высокоточных станках с ЧПУ</h5>
                <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row text-left mt-5">
            <div class="col-12  col-lg-5  order-lg-last">
                <img class="d-flex img-fluid" src="https://alterainvest.ru/upload/iblock/8fa/8faf9734abe0cc6ee8596d18f592040a.jpg" alt="Generic placeholder image">
            </div>
            <div class="col-12 col-lg-7 order-lg-first mt-3">
                <h5 class="mt-0 mb-1">Порошковая покраска</h5><p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>
</div>
@endsection

