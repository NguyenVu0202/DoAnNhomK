<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop Điện thoại</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('home/login.css') }}" rel="stylesheet">

</head>

<body>

  <nav id="header" class="navbar navbar-default" role="navigation"></nav>
  <section class="login_section container">
    <div class="row">
      <article class="contain_left col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h3 class="lag"><b>ĐĂNG NHẬP</b></h3>
        
        <p>
          <i><u><a href="#" style="color: black; font-size: 15px">Quên mật khẩu?</a></u></i>
        </p>
        <form method="POST" action="{{route('user.login')}}" >
          @csrf
          <h4 class="errorTK text-danger"></h4>
          <div class="before-email">
            <span>Email</span>
            <input id="email" class="text-Email-name" name ="email" type="email" required autofocus/>
            <p class="error text-danger" id="demo"></p>
          </div>
          @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
          <span class="showPass"><i class="fa fa-eye" aria-hidden="true"></i> hiện</span>
          <div class="before-password">
            <span >Mật khẩu</span>
            <input class="text-password-name" id="password" name ="password" type="password" required />
          </div>
          <p class="lg-pasword-error" id="demo2"></p>
          <div class="after-input"></div>
          @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
         <h4 class="errorTK text-danger">{{ isset($message) ? $message : '' }}</h4>                  
        <div class="lg-submit">
          <button class="btn-submit button-lg btn btn-dark">
            <span>Đăng nhập
              <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
        </button>
        
        </div>
        </form>
        <div class="jum"><b>ĐĂNG NHẬP NHANH</b></div>
        <div class="lg-submit-fast">
          <div class="lg-submit-fast-f">
            <button type="submit" class="button-sm">
              <span>FACEBOOK</span>
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </button>
          </div>
          <div class="lg-submit-fast-g">
            <button type="submit" class="button-sm">
              <span>GOOGLE</span>
              <i class="fa fa-google" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </article>
      <article class="contain_right col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h3 class="lag">TẠO TÀI KHOẢN</h3>
        <p class="create-title" style="font-family: monospace; font-size: 15px">
          Tạo tài khoản dễ dàng. Nhập địa chỉ Email và điền đầy đủ thông tin
          theo mẫu.
        </p>
        <ul class="create-title-ul">
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Tổng quan thông tin
            cá nhân của bạn
          </li>
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Thanh thoán nhanh
            chóng
          </li>
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Sử dụng các tính
            năng với một lần đăng nhập
          </li>
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Nhiều ưu đãi,
            khuyến mãi hấp dẫn
          </li>
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Sản phẩm mới nhất
          </li>
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Bộ sưu tập không
            giới hạn, độc quyền
          </li>
          <li class="title-ul-li">
            <i class="fa fa-check" aria-hidden="true"></i> Sự kiệp sắp diễn ra
          </li>
        </ul>
        <div class="lg-submit">
          <button  type="submit" class="button-lg btn btn-dark">
            <span>Đăng ký
              <i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
</button>
        </div>
      </article>
    </div>
  </section>
  <aside>
    <div class="offer-aside">
      <p class="offer"><b>ĐĂNG KÝ & NHẬN ƯU ĐÃI ĐỘC QUYỀN</b></p>
    </div>
    <div class="lg-submit offer-secon">
      <a type="submit" class="button-lg btn btn-dark" style="width: 220px">
        <span>Đăng ký thành viên mới
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
      </a>
    </div>
  </aside>

  <footer id="footer">

  </footer>
</body>

</html>