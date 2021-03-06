<div class="box-header with-border">
    <h3 class="box-title"> View menu [{!!$menu->name or 'New menu'!!}]</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" id="btn-close"><i class="fa fa-times-circle"></i> Close</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Menu</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('edit-menu')
        ->method('PUT')
        ->action(URL::to('admin/menu/menu/'. $menu['id']))!!}
        {!!Former::token()!!}
        {!!Former::hidden('upload_folder')!!}
        <div class="tab-content">
            @include('menu::admin.partial.menu')
        </div>
        {!!Former::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
(function ($) {
    $('#btn-close').click(function(){
        $('#menu-entry').load('{!!URL::to('admin/menu/menu')!!}/{!!$menu->id!!}');
    });
    $('#btn-save').click(function(){
        $('#edit-menu').submit();
    });
    $('#edit-menu')
    .submit( function( e ) {
        var url  = $(this).attr('action');
        $.ajax( {
            url: url,
            type: 'POST',
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success:function (data, textStatus, jqXHR)
            {
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>