
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body{
            background-color: #3333;
            margin: 0;
            font-family: Arial;
        }
        .header{
            width: 100%;
        }
        .header_image{
            width: 100%;
            height: 152px;
            background-image: url(https://nchmf.gov.vn/Kttvsite//images/banner-hd-vi.jpg);
            background-repeat: no-repeat;
            background-size: contain;
            padding-top: 2px;
        }
        .navbar_list{
            list-style: none;
            display: flex;
            justify-content: space-around;
            padding: 5px 70px;
            margin: 0;
            background-color: rgb(61, 182, 235);
            color: white;
            font-size: 15px;
        }



        .content{
            background-color: white;
            width: 1400px;
            height: 2000px;
            margin: 5px auto;
        }
        .location{
            padding: 10px 15px;
        }
        .fist_location{
            color: #797979;
        }
        .name{
            color:dodgerblue;
            font-size: 23px;
            margin: 5px 20px;
        }
        .navbar-separate {
            width: 1350px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.15);;
            padding-top: 20px;
        }


        .content_first{
            display: flex;
        }
        .image_table{
            background-color:rgb(235, 235, 235);
        }
        .image_table img{
            padding: 0 30px;
        }
        th{
            padding-top: 20px;
        }
        .update_weather{
            padding-bottom: 20px;
            color:#797979;
        }
        td{
            padding: 10px 20px;
            border-bottom: 1px solid #ececec;
        }



        .name_content{
            color: white;
            background-color: dodgerblue;
            text-align: center;
            padding: 7px;
            border-radius: 10px;
            margin-top: 10px;
        }




        .noidung{
            display: flex;
            justify-content: center;
        }
        .card{
            width: 130px;
            text-align: center;
            padding: 10px 0;
            border-left: 1px solid #cfcdcd;
            border-right: 1px solid #cfcdcd;
        }
        .card > img{
            padding: 15px 0;
        }
        .card span{
            font-size: 17px;
            margin-bottom: 5px;
        }
        .card span b{
            font-size: 27px;
        }
        .lg img{
            width: 40px;
            height: 40px;
        }
        .small img{
            width: 20px;
            height: 20px;
        }



        .content_last-cart{
            display: flex;
            border: 1px solid #a5a4a4;
            border-radius: 20px;
        }
        .content_last-cart img{
            height: 50px;
            margin: 55px 40px;
        }
        .infor, .nd{
            font-size: 15px;
        }
    </style>
</head>
<body>
<?php 
error_reporting(0);
// $file = 'C:\xampp\htdocs\baitapPHP\midtermPHP\file2.csv';
// if (($open = fopen($file,"r")) !== FALSE){
//     while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
//           $array[] = $data;
// }
// fclose($open);
// }
?>
    <div class="container">
        <div class="header">
            <div class="header_image"></div>
            <div class="navbar">
                <ul class="navbar_list">
                    <li class="navbar_item">GIỚI THIỆU <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">THỜI TIẾT <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">KHÍ HẬU <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">THỦY VĂN <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">HẢI VĂN <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">PHÂN VÙNG RỦI RO THIÊN TAI <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">KHOA HỌC & CÔNG NGHỆ <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">KIẾN THỨC KTTV <i class="fa-solid fa-caret-down"></i></li>
                    <li class="navbar_item">DỊCH VỤ KTTV <i class="fa-solid fa-caret-down"></i></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="location">
                <span class="fist_location"><i class="fa-solid fa-folder"></i> Thời tiết <i class="fa-solid fa-chevron-right"></i></span>
                <span> Thời tiết 10 ngày tới </span>
            </div>
            <div class="name">
                <b>THỜI TIẾT KHU VỰC MIỀN TRUNG</b>
                <div class="navbar-separate"></div>
            </div>


            <div class="content_first">
                <table>
                    <tr>
                        <td rowspan="7" class="image_table">
                            <img src="./image/may.png" class="img-fluid rounded-top" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">THỜI TIẾT HIỆN TẠI</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="update_weather">Cập nhật lúc: ....</td>
                    </tr>
                    <tr>
                        <td>Nhiệt độ</td>
                        <td>: 37c</td>
                    </tr>
                    <tr>
                        <td>Thời tiết</td>
                        <td>: Nhieu may, khong mua</td>
                    </tr>
                    <tr>
                        <td>Dộ ẩm</td>
                        <td>: 53%</td>
                    </tr>
                    <tr>
                        <td>Hướng gió</td>
                        <td>: Gio tay bac-toc do: 2m/s</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td rowspan="7" class="image_table">
                            <img src="./image/nang.png.crdownload" class="img-fluid rounded-top" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">DỰ BÁO THỜI TIẾT NGÀY HÔM NAY</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="update_weather">cap nhat luc: ....</td>
                    </tr>
                    <tr>
                        <td>Nhiet do</td>
                        <td>: 37c</td>
                    </tr>
                    <tr>
                        <td>Thoi tiet</td>
                        <td>: Nhieu may, khong mua</td>
                    </tr>
                    <tr>
                        <td>Do am</td>
                        <td>: 53%</td>
                    </tr>
                    <tr>
                        <td>Huong gio</td>
                        <td>: Gio tay bac-toc do: 2m/s</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td rowspan="7" class="image_table">
                            <img src="./image/nang.png.crdownload" class="img-fluid rounded-top" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">DỰ BÁO THỜI TIẾT ĐÊM HÔM NAY</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="update_weather">cap nhat luc: ....</td>
                    </tr>
                    <tr>
                        <td>Nhiet do</td>
                        <td>: 37c</td>
                    </tr>
                    <tr>
                        <td>Thoi tiet</td>
                        <td>: Nhieu may, khong mua</td>
                    </tr>
                    <tr>
                        <td>Do am</td>
                        <td>: 53%</td>
                    </tr>
                    <tr>
                        <td>Huong gio</td>
                        <td>: Gio tay bac-toc do: 2m/s</td>
                    </tr>
                </table>
            </div>


            <div class="content_second">
                <div class="name_content"><b>DỰ BÁO THỜI TIẾT 10 NGÀY TỚI</b></div>
                <div class="noidung">
                    <!-- <div class="card">
                        <b>Thứ hai</b>
                        <p>14/08/2023</p>
                        <img src="./image/image_card.png" class="img-fluid rounded-top" alt=""><br>
                        <span class="lg"><img src="./image/hot.png" alt=""><b>34C</b></span><br>
                        <span class="lg"><img src="./image/cool.png" alt=""> 30C </span><br><br><br>
                        <span class="small"><img src="./image/mua.png" alt=""> 0% </span><br>
                        <span class="small"><img src="./image/huonggio.jpg" alt=""> 5m/s</span>
                        <p>Có mây, có mưa rào và dông</p>
                    </div> -->
                    <?php
                    $file = 'C:\xampp\htdocs\baitapPHP\midtermPHP\file2.csv';
                    if (($open = fopen($file,"r")) !== FALSE){
                        $count = 0;
                        while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
                            if ($count === 0) {
                                $count++;
                                continue;
                            }
                            else{
                                echo '<div class="card">
                                <b>'.$data[0].'</b><br>
                                <img src="./image/image_card.png" alt=""><br>
                                <span class="lg"><img src="./image/hot.png" alt=""><b>'.$data[1].'</b></span><br>
                                <span class="lg"><img src="./image/cool.png" alt="">'.$data[2].'</span><br><br><br>
                                <span class="small"><img src="./image/mua.png" alt="">'.$data[3].'</span><br>
                                <span class="small"><img src="./image/huonggio.jpg" alt="">'.$data[4].'</span>
                                <p>'.$data[5].'</p>
                            </div>';
                                    }
                    }
                    fclose($open);
                    }


                    // foreach($array as $sub){
                    //     echo '<div class="card">
                    //     <b>'.$sub[0].'</b>
                    //     <img src="./image/image_card.png" class="img-fluid rounded-top" alt=""><br>
                    //     <span class="lg"><img src="./image/hot.png" alt=""><b>'.$sub[1].'</b></span><br>
                    //     <span class="lg"><img src="./image/cool.png" alt="">'.$sub[2].'</span><br><br><br>
                    //     <span class="small"><img src="./image/mua.png" alt="">'.$sub[3].'</span><br>
                    //     <span class="small"><img src="./image/huonggio.jpg" alt="">'.$sub[4].'</span>
                    //     <p>'.$sub[5].'</p>
                    // </div>';
                        
                    // }
                    ?>
                </div>
            </div>

            <div class="content_last">
                <div class="name_content"><b>THỜI TIẾT ĐẤT LIỀN 24H</b></div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>HÀ NỘI</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ </p>
                    </div>
                </div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>PHÍA TÂY BẮC BỘ</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ </p>
                    </div>
                </div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>PHÍA ĐÔNG BẮC BỘ</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ </p>
                    </div>
                </div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>THANH HÓA - THỪA THIÊN HUẾ</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ, có nơi trên 37 độ </p>
                    </div>
                </div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>ĐÀ NẴNG - BÌNH THUẬN</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ, có nơi trên 38 độ </p>
                    </div>
                </div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>TÂY NGUYÊN</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ, có nơi trên 31 độ </p>
                    </div>
                </div>
                <div class="content_last-cart">
                    <img src="./image/content_last.png" class="img-fluid rounded-top" alt="">
                    <div>
                        <h3>NAM BỘ</h3>
                    <p class="infor">Có mây, ngày nắng gián đoạn, chiều và đêm có lúc mưa rào và dông.Gió nhẹ. Trong mưa dông có khả năng xảy ra lốc, sét và gió giật mạnh</p>
                    <p class="nd">Nhiệt độ thấp nhất từ: 25-27 độ </p>
                    <p class="nd">Nhiệt độ cao nhất từ: 33-35 độ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>