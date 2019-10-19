@extends('user.layout.main')

@section('content')
<main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <div class="shape shape-style-1 shape-primary alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="card card-profile shadow mt--400">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{ asset(config('asset.avatar')) }}" class="rounded-circle" alt="image">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-4 mt-lg-0">
                  <a href="#" class="btn btn-sm btn-info mr-4">
                        Kết nối
                        <span class="online"></span>
                    </a>
                  <a href="#" class="btn btn-sm btn-default float-right">Trò chuyện</a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                    <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                            <span class="heading">22</span>
                            <span class="description">Số giờ đã dạy</span>
                        </div>
                        <div>
                            <span class="heading">8.8/10</span>
                            <span class="description">Điểm</span>
                        </div>
                    </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <div class="text-center mt-5">
                        <h3>Nguyễn Danh Lợi<span class="font-weight-light">, 23</span></h3>
                        <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i>
                            Hà Nội
                        </div>
                        <div class="h6 mt-4">
                            <div class="star-list">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span>(15)</span>
                        </div>
                        <div class="h6">
                            <i class="ni business_briefcase-24 mr-2"></i>
                            THPT Chuyên Hà Nội
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>
                            Toán
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-icon-only rounded-circle">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">

                </div>
            </div>
            <div class="mt-5 pt-2 border-top text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-12 mb-4">
                        <select class="form-control form-control-sm">
                            <option>Toán</option>
                            <option>Văn</option>
                            <option>Sử</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="list-date-time">
                            <div class="date-time">
                                <div class="date btn btn-info">
                                    <span class="date-free bg-outline-success">19/10/2019</span>
                                </div>
                                <div class="time time-ouline-info">
                                    15:00 - 19:00
                                </div>
                                <div class="time time-ouline-info">
                                    19:00 - 20:00
                                </div>
                                <div class="time time-ouline-info">
                                    20:00 - 21:00
                                </div>
                                <div class="time time-ouline-info">
                                    19:00 - 20:00
                                </div>
                                <div class="time time-ouline-info">
                                    20:00 - 21:00
                                </div>
                            </div>
                            <div class="date-time">
                                <div class="date btn btn-info">
                                    <span class="date-free bg-outline-success">20/10/2019</span>
                                </div>
                                <div class="time time-ouline-info">
                                    15:00 - 19:00
                                </div>
                                <div class="time time-ouline-info">
                                    19:00 - 20:00
                                </div>
                                <div class="time time-ouline-info">
                                    19:00 - 20:00
                                </div>
                                <div class="time time-ouline-info">
                                    20:00 - 21:00
                                </div>
                            </div>
                            <div class="date-time">
                                <div class="date btn btn-info">
                                    <span class="date-free bg-outline-success">21/10/2019</span>
                                </div>
                                <div class="time time-ouline-info">
                                    15:00 - 19:00
                                </div>
                                <div class="time time-ouline-info">
                                    19:00 - 20:00
                                </div>
                                <div class="time time-ouline-info">
                                    20:00 - 21:00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-2 pt-2 border-top text-center">
                <div class="btn-group">
                    <p>Bạn có thể chọn một thời gian thích hợp với bạn!</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- modal --}}
    <div class="row">
        <div class="col-md-4">
            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                        <form action="">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Book giáo viên</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <input type="hidden" name="teacher" value="">
                            <input type="hidden" name="date">
                            <input type="hidden" name="time">
                            <div class="modal-body">
                                Bạn có chấp nhận giáo viên: Nguyen Danh Loi với giá ... ?
                                Với số tiền ...?
                            </div>
                
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Chấp nhận</button>
                                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Hủy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection