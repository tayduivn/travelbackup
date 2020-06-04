@extends('admin.layout-master')
@section('content')
        <div class="row danhsachtour-tour " style="padding: 29px;margin-top: 67px">
            <h2 class="text-center text-primary"><b>Danh Sách Tour</b></h2>
            <div class="span5">
                @if(Session::has('msg'))
                    <p style="color: green;">{{Session::get('msg')}}</p>
                @endif
                <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th class="none-manage-tour">ID</th>
                        <th>Tên tour</th>
                        <th class="none-manage-tour">Giá cũ</th>
                        <th class="none-manage-tour">Giá mới</th>
                        <th>Lịch trình</th>
                        <th class="none-manage-tour">Số ngày</th>
                        <th class="none-manage-tour">Ngày khởi hành</th>
                        <th class="none-manage-tour">Nơi khởi hành</th>
                        <th class="none-manage-tour">Số chỗ</th>
                        <th class="none-manage-tour">Số chỗ đã đặt</th>
                        <th class="none-manage-tour">Lưu ý</th>
                        <th class="none-manage-tour">Chi tiết</th>
                        <th class="none-manage-tour">Avatar</th>
                        <th class="none-manage-tour">ID điểm đến</th>
                        <th class="none-manage-tour">ID miền</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listtour as  $tour)
                            <td style="font-size: 80% !important" class="none-manage-tour">{{$tour->id}}</td>
                            <td>
                                <a target="_blank" style="font-size: 80% !important" href="{{route('chitiettour',$tour->id)}}">{{$tour->name}}</a></td>
                            <td class="none-manage-tour">
                                <span style="text-decoration: line-through;">
                                    <strong>{{number_format($tour->gia)}}</strong>đ
                                </span>
                            </td>
                            </td class="none-manage-tour">
                            <td class="none-manage-tour">
                                <span style="color: red"><strong>{{number_format($tour->giamoi)}}đ</strong></span>
                            </td>
                            <td >
                                <button style="font-size: 50% !important" type="button" data-idsp="{{$tour->lichtrinh}}" class="btn btn-small btn-primary lt" data-toggle="modal" data-target="#lichtrinh">
                                    Lịch trình
                                </button>
                            </td>
                            <td class="none-manage-tour">{{$tour->songay}}</td>
                            <td class="none-manage-tour">{{$tour->ngaykhoihanh}}</td>
                            <td class="none-manage-tour">{{$tour->noikhoihanh}}</td>
                            <td class="none-manage-tour">{{$tour->socho}}</td>
                            <td class="none-manage-tour">{{$tour->sochodadat}}</td>
                            <td class="none-manage-tour">
                                <button style="font-size: 50% !important" type="button" data-idsp="{{$tour->luuy}}" class="btn btn-small btn-primary ly" data-toggle="modal" data-target="#luuy">
                                    Lưu ý
                                </button>
                            </td>
                            <td class="none-manage-tour">
                                <button style="font-size: 50% !important" type="button" data-idsp="{{$tour->chitiet}}" class="btn btn-small btn-primary ct" data-toggle="modal" data-target="#chitiet">
                                    Chi tiết
                                </button>
                            </td>
                            <td><img style="width: 100%" src="../../img/tour/{{$tour->avatar}}"></td>
                            <td class="none-manage-tour">{{$tour->list_slug}}</td>
                            <td class="none-manage-tour">{{$tour->id_mien}}</td>


                            <td>
                            {{--              Popup                      --}}
                                <button style="font-size: 50% !important" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <a href="{{route('getchange',$params = ['id'=> $tour->id])}}">Sửa</a>
                                </button>
                            </td>
                            <td>
                                <button style="font-size: 50% !important" type="button" data-idsp="{{$tour->id}}" data-linkdel="{{route('deletetour',$tour->id)}}" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chú ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="delete-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Không</button>

                                <a class="btn btn-danger" id="link-del" href="#">Có</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal" id="lichtrinh">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Lịch trình</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="lichtrinh-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="luuy">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Lưu ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="luuy-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="chitiet">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chi tiết</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="chitiet-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- footer -->
    <!-- //footer -->
<script>

    $(document).on("click", ".del", function () {
        var TourId = $(this).data('idsp');
        $("#delete-body").html( "Bạn có chắc muốn xóa tour này? " + TourId);
        var Link = $(this).data('linkdel');
        $("#link-del").attr( "href" , Link);
        // As pointed out in comments,
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
    $(document).on("click", ".lt", function () {
        var lichtrinh = $(this).data('idsp');
        $("#lichtrinh-body").html(lichtrinh);
    });
    $(document).on("click", ".ly", function () {
        var luuy = $(this).data('idsp');
        $("#luuy-body").html(luuy);
    });
    $(document).on("click", ".ct", function () {
        var chitiet = $(this).data('idsp');
        $("#chitiet-body").html(chitiet);
    });
</script>
@endsection
