$(function () {
    $.ajax({
        url: "/speedbuy/index.php/my/query",
        dataType: "json",
        success: function (res) {
            let str = `<div class="left">
		                    	<div>
		                    		<img src="${res[0].thumb}" alt="">
		                    	</div>
		                    </div>
		                    <div class="right">
		                    	<h1>
		                    		<span>昵称：</span>
		                    		<span>${res[0].nickname}</span>
		                    	</h1>
		                    	<div class="icon">
		                    		<div>
		                    			<span>
		                    			<i class="iconfont icon-pingjiaxingxing"></i>
		                    		    <i class="iconfont icon-pingjiaxingxing"></i>
		                    			<i class="iconfont icon-pingjiaxingxing"></i>
		                    		    <i class="iconfont icon-pingjiaxingxing"></i>
		                    	    	</span>
		                    		    <span>VIP</span>
		                    		</div>
		                    		<i class="iconfont icon-you"></i>
		                    	</div>
		                    	<p  class="phone">
		                    		<i class="iconfont icon-shouji"></i>
		                    		<span>${res[0].phone}</span>
		                    	</p>
		                    </div>`;
            $(".name").html(str);
        }
    })



})