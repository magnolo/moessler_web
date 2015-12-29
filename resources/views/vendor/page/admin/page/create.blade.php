<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.new') }} {{ trans('page::page.name') }} </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" id="btn-save"><i class="fa fa-floppy-o"></i> {{ trans('cms.save') }}</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" id="btn-cancel"><i class="fa fa-times-circle"></i> {{ trans('cms.cancel') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">{{ trans('page::page.tab.page') }}</a></li>
            <li><a href="#metatags" data-toggle="tab">{{ trans('page::page.tab.meta') }}</a></li>
            <li><a href="#settings" data-toggle="tab">{{ trans('page::page.tab.setting') }}</a></li>
            <li><a href="#images" data-toggle="tab">{{ trans('page::page.tab.image') }}</a></li>
        </ul>
        {!!Former::vertical_open()
        ->id('create-page')
        ->method('POST')
        ->files('true')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/page/page'))!!}
        {!!Former::token()!!}
        <div class="tab-content">
            <div class="tab-pane active" id="details">
                {!! Former::hidden('upload_folder')!!}
                {!! Former::text('name')
                -> label(trans(trans('page::page.label.name')))
                -> placeholder(trans(trans('page::page.placeholder.name')))!!}

                {!! Former::textarea('content')
                -> label(trans('page::page.label.content'))
                -> value(e($page['content']))
                -> dataUpload(URL::to($page->getUploadURL('content')))
                -> addClass('html-editor')
                -> placeholder(trans('page::page.placeholder.content'))!!}

            </div>

            <div class="tab-pane" id="metatags">
                {!! Former::textarea('keyword')
                -> label(trans('page::page.label.keyword'))
                -> rows(4)
                -> placeholder(trans('page::page.placeholder.keyword'))!!}

                {!! Former::textarea('description')
                -> label(trans('page::page.label.description'))
                -> rows(4)
                -> placeholder(trans('page::page.placeholder.description'))!!}
            </div>
            <div class="tab-pane" id="settings">
                <div class="row">
                    <div class="col-md-6 ">
                        {!! Former::range('order')
                        -> label(trans('page::page.label.order'))
                        -> placeholder(trans('page::page.placeholder.order'))!!}
                        {!! Former::text('slug')
                        -> label(trans('page::page.label.slug'))
                        -> append('.html')
                        -> placeholder(trans('page::page.placeholder.slug'))!!}

                        {!! Former::select('view')
                        -> options(trans('page::page.options.view'))
                        -> label(trans('page::page.label.view'))
                        -> placeholder(trans('page::page.placeholder.view'))!!}
                    </div>
                    <div class='col-md-6'>
                        {!! Former::select('compiler')
                        -> options(trans('page::page.options.compiler'))
                        -> label(trans('page::page.label.compiler'))
                        -> placeholder(trans('page::page.placeholder.compiler'))!!}
                        {!! Former::select('category_id')
                        -> options([])
                        -> label(trans('page::page.label.category'))
                        -> placeholder(trans('page::page.placeholder.category'))!!}
                        {!! Former::hidden('status')
                        -> forceValue('0')!!}
                        {!! Former::checkbox('status')
                        -> label(trans('page::page.label.status'))
                        ->inline()!!}
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="images">
                <div class="row">
                    <div class='col-md-3'>
                    <label for="order" class="control-label">Banner Image</label>
                       {!! Filer::uploader('banner', $page->getUploadURL('banner'), 1) !!}
                    </div>
                    <div class='col-md-9'>
                        {!! Filer::editor('banner', $page['banner'], 1) !!}
                    </div>
                </div>
                <div class="row">
                    <div class='col-md-3'>
                    <label for="order" class="control-label">Gallery Images</label>
                        {!! Filer::uploader('images', $page->getUploadURL('images')) !!}
                    </div>
                    <div class='col-md-9'>
                        {!! Filer::editor('images', $page['images']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!!Former::close()!!}
</div>
<div class="box-footer" >
&nbsp;
</div>
<script type="text/javascript">
(function ($) {
    $('#btn-save').click(function(){
        $('#create-page').submit();
    });

    $('#btn-cancel').click(function(){
        $('#entry-page').load('{{URL::to('admin/page/page/0')}}');
    });

    $('#create-page')
    .submit( function( e ) {
        if($('#create-page').valid() == false) {
            toastr.warming('{!!trans('messages.unprocessable')!!}', '{!!trans('messages.type.error')!!}');
            return false;
        }
        console.log(FormData);

        var url  = $(this).attr('action');
        var formData = new FormData( this );
        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                formData.append('content', $("#content").code());
            },
            success:function(data, textStatus, jqXHR)
            {
                $('#main-list').DataTable().ajax.reload( null, false );
                $('#entry-page').load('{{URL::to('admin/page/page')}}/' + data.id);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>