@extends('layouts.layout')

<?php

class product
{
    public $bookName;
    public $tacGia;
    public $NXB;
    public $taiBan;
    public $giaBan;

    /**
     * @param $bookName
     * @param $tacGia
     * @param $NXB
     * @param $taiBan
     * @param $giaBan
     */
    public function __construct($bookName, $tacGia, $NXB, $taiBan, $giaBan)
    {
        $this->bookName = $bookName;
        $this->tacGia = $tacGia;
        $this->NXB = $NXB;
        $this->taiBan = $taiBan;
        $this->giaBan = $giaBan;
    }


}

$products = array();
array_push($products, new product('1 con chim nhạn', 'Nam Cao', 'Nhi đồng', '16', '180000'));
array_push($products, new product('2 con chim nhạn', 'Nam Cao', 'Nhi đồng', '15', '180000'));
array_push($products, new product('3 con chim nhạn', 'Nam Cao', 'Nhi đồng', '14', '180000'));
array_push($products, new product('4 con chim nhạn', 'Nam Cao', 'Nhi đồng', '13', '180000'));
array_push($products, new product('5 con chim nhạn', 'Nam Cao', 'Nhi đồng', '12', '180000'));
array_push($products, new product('6 con chim nhạn', 'Nam Cao', 'Nhi đồng', '11', '180000'));
array_push($products, new product('7 con chim nhạn', 'Nam Cao', 'Nhi đồng', '10', '180000'));

$category = array();
array_push($category, 'Kinh dị');
array_push($category, 'Tình yêu');
array_push($category, 'Viễn tưởng');
array_push($category, 'Khoa học');
array_push($category, 'Trinh thám');

?>

@section('product')
    <h1 class="category_name">Category name</h1>
    <div class="row">
        @foreach($products as $item)
            <div class="col-lg-4 col-sm-4">
                <div class="box_main">
                    <h4 class="shirt_text">{{$item->bookName}}</h4>
                    <p class="price_text">{{__('Giá')}} <span
                            style="color: #262626;">{{number_format($item->giaBan).'VNĐ'}}</span>
                    </p>
                    <div class="tshirt_img"><img src="{{asset('public/assets/frontend/images/img.jpg')}}">
                    </div>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">{{__('Mua ngay')}}</a></div>
                        <div class="seemore_bt"><a href="#">{{__('Xem chi tiết')}}</a></div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
