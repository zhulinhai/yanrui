<div id="submitDialog" class="submitDialog" style="display: none">
    <form method="get" class="content" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p class="title">预约主播</p>
        <div class="item"><label>姓名：</label><input name="realname" id="realname" type="text" class="text" value="" /></div>
        <div class="item"><label>手机：</label><input name="mobile" id="mobile" type="text" class="text" value="" /></div>
        <div class="item"><label>预约内容：</label><textarea name="guide" id="guide" type="text" class="text" value="" ></textarea></div>
        <div class="btnFrame"><a href="javascript:cancel();"><div class="btnCancel">取消</div></a><a href="javascript:submitInfo();"><div class="submitInfo">确定</div></a></div>
    </form>
</div>
<script src="<?php echo get_bloginfo('template_url') ?>/js/cookie.js"></script>
<script type="text/javascript">
    function dateGirl() {
        $('#submitDialog').show();
    }
    function cancel() {
        $('#submitDialog').fadeOut(300);
    }
    function submitInfo () {
        var name, mobile, guide, flag;
        name=trim($("input[name='realname']").val());
        mobile=trim($("input[name='mobile']").val());
        flag= 'yanrui';
        guide = trim($("#guide").val());
        if(isNullOrEmpty(name)) {
            alert("请填写姓名!");
            return 0;
        } else if(!checkIsMobile(mobile)){
            alert("请输入正确的手机号!");
            return 0;
        } else if(isNullOrEmpty(guide)){
            alert("请输入留言内容");
            return 0;
        }

        var host = 'http://api.bobo119.com/api';
        var url = host + '/acca/submitInfo?flag=' + flag +'&name='+ name +'&mobile=' + mobile + '&guide='+ guide;
        $.ajax({
            type: "POST",
            url: url,
            dataType: "json",
            success: function(data){
                var response = eval('(data)');
                console.log(response);
                if (response.success) {
                    alert("留资成功");
                } else {
                    alert(response.message);
                }
            },
            error: function(data){
                alert("加载超时,请检查网络连接");
            }
        });
    }
</script>
