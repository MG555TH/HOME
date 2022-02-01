<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>MG555TH สมัครสมาชิก</title>
    <link rel="apple-touch-icon" href="assets/images/T-LOgoMG555TH.png" />

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h1 class="title">สมัครสมาชิก MG555th</h1>
                    <form action="sendinfo.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="ชื่อ นามสกุล" name="fullname">
                        </div>
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="ไลน์ไอดี" name="lineid">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bank">
                                    <option>เลือกธนาคารของท่าน คลิ๊ก</option>
                  <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์ จำกัด (มหาชน)</option>
<option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ จำกัด (มหาชน)</option>
<option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย จำกัด (มหาชน)</option>
<option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย จำกัด (มหาชน)</option>
<option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
<option value="ธนาคารทหารไทยธนชาต">ธนาคารทหารไทยธนชาต จำกัด (มหาชน)</option>
<option value="ธนาคาร ซีไอเอ็มบี ไทย">ธนาคาร ซีไอเอ็มบี ไทย จำกัด (มหาชน)</option>
<option value="ธนาคารยูโอบี">ธนาคารยูโอบี จำกัด (มหาชน)</option>
<option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)</option>
<option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
<option value="ธนาคารแลนด์ แอนด์ เฮ้าส์">ธนาคารแลนด์ แอนด์ เฮ้าส์ จำกัด (มหาชน)</option>
<option value="ธนาคารทิสโก้">ธนาคารทิสโก้ จำกัด (มหาชน)</option>
<option value="ธนาคารเกียรตินาคิน">ธนาคารเกียรตินาคิน จำกัด (มหาชน)</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="เลขที่บัญชี" name="idbank">
                        </div>
                         <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="know">
                                    <option>รู้จักเราจากที่ไหน คลิ๊กเลือก</option>
                  <option value="FB">Facebook</option>
<option value="Line">Line</option>
<option value="Google">Google</option>
<option value="Yt">Youtube</option>
<option value="Friend">เพื่อนแนะนำ ระบุบ ไอดีเพื่อน</option>
</select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="ระบุบไอดีเพื่อน" name="friend">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="เบอร์โทรศัพท์" name="phone">
                        </div>
                        <div class="form-submit">
<input type="submit" value="สมัครสมาชิก" class="btn btn--pill btn--green" id="submit" name="submit" />

</div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->