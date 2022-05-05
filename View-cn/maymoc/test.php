<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style type="text/css">
       /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: #644bff;
            padding: 0 20px;
        }
        .wrapper{
            max-width: 450px;
            margin: 150px auto;
        }*/
        .search-input{
            max-width: 450px;
            position: relative;
            background: #fff;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .search-input input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }
        .search-input .icon{
            height: 55px;
            width: 55px;
            line-height: 55px;
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            font-size: 20px;
            color: #644bff;
            cursor: pointer;
        }
        .search-input .autocom-box{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
        }
        .autocom-box li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .autocom-box li:hover{
            background: #efefef;
        }
        .search-input.active .autocom-box{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-input.active .autocom-box li{
            display: block;
        }


        .search-line{
            max-width: 450px;
            position: relative;
            background: #fff;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .search-line input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }
        .search-line .icon{
            height: 55px;
            width: 55px;
            line-height: 55px;
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            font-size: 20px;
            color: #644bff;
            cursor: pointer;
        }
        .search-line .autocom-line{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
        }
        .autocom-line li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .autocom-line li:hover{
            background: #efefef;
        }
        .search-line.active .autocom-line{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-line.active .autocom-line li{
            display: block;
        }
    </style>
</head>
<body>
   <!-- <div class="wrapper"> -->
    <div class="search-input" id="">
           <input type="text" placeholder="Tim Kiem...">
           <div class="autocom-box" style="">
               <li>login form in html</li>
           </div>
           <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>

       </div>

       <div class="search-line">
           <input type="text" placeholder="Tim Kiem..." id="inputtext">
           <div class="autocom-line">
               <li>login form in html</li>
           </div>
           <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>

       </div>
   <!-- </div> -->

  <script type="text/javascript">
       const searchWrapper = document.querySelector(".search-input")
       const inputBox = document.querySelector("input")
       const suggBox = document.querySelector(".autocom-box")
       
       inputBox.onkeyup = (e) => {
         let userData = e.target.value;
         let emptyArray = [];
         if(userData){
            emptyArray = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
         emptyArray =  emptyArray.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper.classList.add("active")
            showSuggettions(emptyArray);
            let allList = suggBox.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select(this)")
            }
         }else{
            searchWrapper.classList.remove("active")
         }
       }

       function select(element){
        let selectUserData = element.textContent;
        inputBox.value = selectUserData;
       }

       function showSuggettions(list){
        let listData;
        if(!list.length){
             userValue = inputBox.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox.innerHTML = listData;
       }
   </script>
   

 <script type="text/javascript">
       const searchWrapperr = document.querySelector(".search-line")
       const inputBoxx = document.getElementById("inputtext")
       const suggBoxx = document.querySelector(".autocom-line")
       
       inputBoxx.onkeyup = (e) => {
         let userData = e.target.value;
         let emptyArray = [];
         if(userData){
            emptyArray = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
         emptyArray =  emptyArray.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapperr.classList.add("active")
            showSuggettions(emptyArray);
            let allList = suggBoxx.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select(this)")
            }
         }else{
            searchWrapperr.classList.remove("active")
         }
       }

       function select(element){
        let selectUserData = element.textContent;
        inputBoxx.value = selectUserData;
       }

       function showSuggettions(list){
        let listData;
        if(!list.length){
             userValue = inputBoxx.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBoxx.innerHTML = listData;
       }
   </script>



   <script type="text/javascript">
       let suggettion = [
"V3001894-Văn Huy",
"V0255059-Nguyễn Thị Khánh Hà",
"V0255086-Nguyễn Thành Công",
"V0259315-Dương Minh Thảo",
"V0255507-Nguyễn Thị Thu Hà",
"V0255535-Lê Ngọc Điệp",
"V0256155-Hoàng Thị Hải",
"V0256158-Lê Thiện Chung",
"V0258993-Nguyễn Thị Thanh Hoài",
"V0257423-Nguyễn Đức Thành",
"V0255257-Hoàng Tuấn Anh",
"V0259421-Ngô Đình Hiến",
"V0259433-Quàng Văn Lái",
"V0250180-Bùi Trung Văn",
"V0259509-Vi Văn Vương",
"V0259529-Nguyễn Văn Vượng",
"V0259548-Vũ Văn Lương",
"V0259587-Nguyễn Huy Liệu",
"V0259724-Phạm Quang Mạnh",
"V0259888-Trần Văn Nguyên",
"V0260063-Nguyễn Văn Lực",
"V0263379-Nguyễn Văn Bắc",
"V0263387-Nguyễn Văn Dung",
"V0263388-Nguyễn Văn Nguyên",
"V0263389-Triệu Văn Hai",
"V0263390-Lưu Văn Long",
"V0263439-Nguyễn Văn Khôi",
"V0263435-Nguyễn Gia Huy",
"V0263444-Hoàng Thanh Định",
"V0263521-Nguyễn Văn Định",
"V0263573-Trương Văn Vĩnh",
"V0263577-Dương Văn Ba",
"V0263671-Nguyễn Văn Tiến",
"V0264155-Nguyễn Ngọc Hải",
"V3032700-Vi Hải Nam",
"V0255522-Trần văn ngọc",
"V0255719-Nguyễn Đình Lực",
"V0256556-Vi Văn Mạnh",
"V3032691-Nguyễn Văn Sơn",
"V0256551-Lê Văn Trung",
"V0258682-Triệu Văn Khoa",
"V0256549-Bùi Văn Hiệp",
"V0256550-Hà Văn Cường",
"V3032703-Hoàng Văn Trần",
"V0263371-Hà Văn Chính",
"V0263373-Nguyễn Văn Quân",
"V0263374-Nguyễn Đình Thu",
"V0263375-Đỗ Văn Thương",
"V0263376-Lý Văn Lâm",
"V0263377-Lê Huy Hải",
"V0263392-Đỗ Đình Sáng",
"V0263391-Hoàng Công Ninh",
"V0263382-Nguyễn Văn Vịnh",
"V0263383-Nguyễn Văn Tùng",
"V0263384-Nguyễn Hoàng Linh",
"V0263385-Đỗ Văn Dương",
"V0263433-Dương Ngô Khánh",
"V3032270-Chu Anh Tuấn",
"V3049023-Trần Văn Quang",
"V3031355-Nguyễn Huy Hồng",
"V0231422-Nguyễn Văn Thạo",
"V0205682-Nguyễn Văn Thường",
"V0205690-Ngô  Văn Kiên",
"V3049354-Nguyễn Quốc Tiến",
"V0232115-Vũ Đình Thắng",
"V0236226-Đoàn Văn Mừng",
"V0220302-Nguyễn Anh Lượng",
"V0230192-Lưu Đức Cường",
"V0236121-Nguyễn Văn Diên",
"V3003500-Hoàng Văn Thắng",
"V3005020-Nguyễn Văn Tuyên",
"V0248304-Trịnh Văn Tài",
"V0253208-Đỗ Thị Oanh",
"V0254203-Nguyễn Tiến Đức",
"V0255087-Nguyễn Thị Lệ Thủy",
"V0255256-Nguyễn Ngọc Quí",
"V0255258-Đồng Văn Nam",
"V0255275-Nguyễn Quang Lâm",
"V0255450-Phạm Lê Tùng",
"V0256578-Hoàng Văn Ngọc",
"V0236170-Nguyễn Văn Quý",
"V0258220-Vũ Quang Anh",
"V0259429-Phạm Văn Đông",
"V0259523-Trần Văn Mạnh",
"V0259525-Ngô Văn Thái",
"V0263380-Nguyễn Ngọc Tùng",
"V0263386-Hoàng Kim Chính",
"V0263437-Nguyễn Thanh Sơn",
"V0263442-Vũ Văn Bình",
"V0263467-Hoàng Công An",
"V0263523-Hồ Thị Huệ",
"V0263524-Vũ Trường Giang",
"V0263572-Lê Ngọc Mạnh",
"V3032126-Trần Thị Hồng",
"V0264157-Nguyễn Văn Thắng",
"V0264235-Trương Đức Dũng",
"V0264236-Thân Văn Nam",
"V3076400-Nguyễn Tuấn Anh",
"V0221050-Đinh Văn Hải",
"V0248234-Nguyễn Đình Thắng",
"V0252443-Nguyễn Thị Ba",
"V0205617-Dương văn Trường",
"V0236711-Nguyễn Ngọc Hoàn",
"V0238581-Nguyễn ăn Nguyên",
"V0253114-Vũ Thị Quỳnh",
"V0253203-Nguyễn Văn Hoạt",
"V0253204-Trần Xuân Huy",
"V0253206-Trần Văn Minh",
"V0253209-Đông Hồng Sơn",
"V0259477-Thân Văn Tuấn",
"V0259591-Nguyễn Văn Dũng",
"V0259801-Nguyễn Duy Lực",
"V0262351-Phùng Văn Nghĩa",
"V0262353-Triệu Văn Thực",
"V0260158-Đoàn Văn Dũng",
"V0263369-Trịnh Văn Cương",
"V0263446-Nguyễn Văn Cường",
"V0263525-Nguyễn Hữu Nam",
"V0263526-Trần Văn Quyền",
"V0263627-Nguyễn Mạnh Hùng",
"V0263629-Đồng Minh Quang",
"V0263661-Ngô Đức Trọng",
"V0263662-Hoàng Ngọc Duy",
"V0263663-Nguyễn Đăng Huy",
"V0263664-Nguyễn Văn Dương",
"V0263672-Nguyễn Quang Minh",
"V0263673-Nguyễn Văn Thịnh",
"V0263674-Nguyễn Trung Thành",
"V0236223-Nguyễn Việt Dũng",
"V0236026-Lê Văn Quân",
"V0230216-Lê Văn Xuân",
"V3005023-Lương n Khanh",
"V0264163-Nguyễn Tú Linh",
"V3075238-Trịnh Văn Quang",
"V3076410-Nguyễn Ngọc Duy",
"V3000220-Trần xuân Hải",
"V0256166-Nguyễn Đình Trường",
"V0256172-Nguyễn Văn Đoàn",
"V0255717-Nguyễn Duy Phương",
"V0259480-Đồng Văn Tân",
"V0259502-Phó Ngọc Anh",
"V0259521-Vũ Văn Hiếu",
"V0259592-Vũ Đình Công",
"V0260515-Phạm Minh Sang",
"V0260722-Đinh Văn Hà",
"V0262099-Nguyễn Văn Nguyên",
"V0262100-Lương Hữu Trường",
"V0262360-Nguyễn Đức Tuấn",
"V0262361-Nguyễn Công Minh",
"V0263529-Đặng Duy Hậu",
"V0263633-Nguyễn Đình Tứ",
"V0263665-Lê Trung Sơn",
"V0264158-La Liêm",
"V0264159-Nguyễn Anh Tuấn",
"V0264160-Trần Văn Khương",
"V0264162-Đặng Văn Nghĩa",
"V3073889-Dương Văn Ảnh",
"V0264161-Chu Văn Hải",
"V3072925-Nguyễn Minh Đức",

       ];
   </script>


</body>
</html>