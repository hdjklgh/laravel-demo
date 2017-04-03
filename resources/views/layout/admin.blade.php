@yield('content')
<script type="text/javascript" src="{{asset('/plugins/layui/layui.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/part/common.js')}}"></script>
<script>
    // todo 改写F5的刷新，当使用刷新的时候，刷新当前的iframe
    layui.use(['jquery'], function() {
        var $ = layui.jquery;
        // todo 改写F5的刷新，当使用刷新的时候，刷新当前的iframe
        $(document).bind("keydown",function(e){
            return $.common.f5Reload(window);
        });
        // todo 禁止右键菜单
        $("body").bind("contextmenu", function() {
            return false;
        });
    });
</script>
@yield('js')