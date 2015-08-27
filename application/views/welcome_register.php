<div class="web_con">
    <div class="head_con padd10">

        <div class="wap980 padd10">
            <h1 class="text-center padd10">欢迎注册欢乐购 — 网购就上欢乐购</h1>

            <h3 class="text-center ">大学校园最火爆的网上购物渠道</h3>

            <h3 class="text-center ">现在注册立即可获得现金券100元！！</h3>


        </div>
    </div>
    <div class="body_con clearfix">
        <form role="form" method="post"  id="register_form" class="form-horizontal"
              novalidate="novalidate" style="display: block;">
            <div class="form-group">
                <label for="username_txt" class="col-md-4 control-label">用户名</label>

                <div class="col-md-4">
                    <input type="email" id="username_txt" class="form-control " name="username_txt" placeholder="用户名">
                    </div>
            </div>
            <div class="form-group">
                <label for="password_txt" class="col-md-4 control-label">密码</label>

                <div class="col-md-4">
                    <input type="text" id="password_txt" class="form-control " name="password_txt"
                            maxlength="10" placeholder="密码">

                    </div>
            </div>
            <div class="form-group">
                <label for="password_confirm_txt" class="col-md-4 control-label">确认密码</label>

                <div class="col-md-4">
                    <input type="text" id="password_confirm_txt" class="form-control " name="password_confirm_txt"
                           maxlength="10" placeholder="确认密码">

                    </div>
            </div>
            <div class="form-group">
                <div class="form_btn_con col-md-3 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn_register">注册</button>
                </div>
            </div>

        </form>

    </div>
    <div class="footer_con">

    </div>
</div>
<script>
    $(function(){
        $("#register_form").validate({
            debug:true,
            rules:{
                    username_txt:{
                        required:true,
                        minlength:5
                    },
                    password_txt:{
                                required:true,
                                minlength:5
                              },
                    username_txt:{
                        required:true,
                        minlength:5
                    },
                    password_confirm_txt:{
                        required:true,
                        minlength:5
                    }
            }


        });

        $('.btn_register').click(function(){
            console.log("hello world");
            //$("#register_form").submit();
        });
    });

</script>


