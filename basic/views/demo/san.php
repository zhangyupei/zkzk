<meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}

.top{ width: 100%; text-align: center;}
.top h2{ margin-top: 50px;}

form{ width: 450px; margin: 0 auto; margin-top: 50px;}
form input{
    width: 300px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 5px;
    font-size: 14px;
}

form p{
    margin-top: 20px;
    width: 100%;
}

form span{
    width: 100px;
    text-align: right;
    display: inline-block;
}

.check_label{
    width: 600px;
    margin: 0 auto;
    margin-top: 50px;
}

.check_label p{
    width: 550px;
    margin: 0 auto;
    margin-top: 30px;
}

.check_label .intrest_label a{
    padding: 5px;
    border: 1px solid rgba(0, 150, 0, 0.55);
    border-radius: 3px;
    white-space:nowrap;
    display: inline-block;
    margin-top: 10px;
    margin-left: 10px;
    color: #666;
}

.check_label .a_selected{
    
}

.check_label .a_button{
    width: 150px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: green;
    color: #fff;
    display: inline-block;
    border: 1px solid green;
    border-radius: 5px;
    margin: 0 auto;
}

.handler-button{
    text-align: center;
}
</style>

<div class="top">
    <h2>欢迎注册</h2>
</div>

<div class="main">
    <div class="check_label">
        <h4>请选择您的兴趣标签</h4>
        <p class="intrest_label">
            <a href="javascript:;" class="dian">乒乓球</a>
            <a href="javascript:;" class="dian">电影</a>
            <a href="javascript:;" class="dian">爬树</a>
            <a href="javascript:;" class="dian">打篮球</a>
            <a href="javascript:;" class="dian">旅游</a>
            
        </p>

        <p class="handler-button">
            <a class="a_button" href="http://localhost/week9/basic/web/index.php?r=demo/er">上一步</a>
            <a class="a_button" href="javascript:;" id="wan">完成</a>
            <input type="hidden" value="乒乓球" class="ppq">
        </p>
    </div>
</div>
<script src="http://localhost/week9/basic/views/site/jquery.1.12.js"></script>
<script>

    $("#wan").on("click",function(){
    // var obj = $(this);

   // var b =  $(".dian").attr("background","rgba(0, 150, 0, 0.55)");
   // alert(b)intrest_label  var a = $(this).css("background","rgba(0, 150, 0, 0.55");
      // alert(a)


    // $(".intrest_label").each(function(k,i){
         
    // });
   // $(".dian").each(function(){
   //        alert($(this).css("background","rgba(0, 150, 0, 0.55"))
   //  });

   // $.ajax({
   //     type:"post",
   //     url:"http://localhost/week9/basic/web/index.php?r=demo/zong",
      
   //     success:function(r){
   //      alert(r)
   //     }
   // })
   var ppq = $(".ppq").val();

    $.ajax({
        type:"post",
        url:"http://localhost/week9/basic/web/index.php?r=demo/zong",
        data:{ppq:ppq},
        success:function(r){
            // alert(r)
            if(r==1){
                    alert("添加成功");

                }else{
                    alert("添加失败");
                }
        }
    })


})

$('.dian').on("click",function(){
    var obj = $(this);
    
      obj.css("background","rgba(0, 150, 0, 0.55)");  

    
})

</script>
