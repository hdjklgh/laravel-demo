@yield('content')
<script type="text/javascript" src="{{asset('/plugins/layui/layui.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/part/common.js')}}"></script>
<script>
    // todo ��дF5��ˢ�£���ʹ��ˢ�µ�ʱ��ˢ�µ�ǰ��iframe
    layui.use(['jquery'], function() {
        var $ = layui.jquery;
        // todo ��дF5��ˢ�£���ʹ��ˢ�µ�ʱ��ˢ�µ�ǰ��iframe
        $(document).bind("keydown",function(e){
            return $.common.f5Reload(window);
        });
        // todo ��ֹ�Ҽ��˵�
        $("body").bind("contextmenu", function() {
            return false;
        });
    });
</script>
@yield('js')