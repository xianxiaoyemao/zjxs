<?php /*a:4:{s:61:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\small\advs\edit.html";i:1611642614;s:60:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\layout\default.html";i:1607568254;s:57:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\common\meta.html";i:1607568254;s:59:"D:\phpstudy_pro\WWW\zjxsh\app\admin\view\common\script.html";i:1607568254;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo htmlentities($config['language']); ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico"/>
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo app('request')->env('app_debug')?'':'.min'; ?>.css?v=<?php echo htmlentities(config('site.version')); ?>"
      rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
<script src="/assets/js/html5shiv.js"></script>
<script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>

                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">

                                </ol>
                            </div>
                            <!-- END RIBBON -->

                            <div class="content">
                                <form id="edit-form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
    <input type="hidden"  id="id" name="row[id]" value="<?php echo htmlentities($row['id']); ?>">
    <div class="form-group">
        <label  class="control-label col-xs-12 col-sm-2">广告位位置:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_select('row[pid]', $advgroup, $row['pid'], ['class'=>'form-control', 'required'=>'']); ?>
        </div>
    </div>
    <div class="form-group">
        <label  class="control-label col-xs-12 col-sm-2">广告标题:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="title" name="row[title]" value="<?php echo htmlentities($row['title']); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">广告图片:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-advurl" data-rule="" class="form-control" size="50" name="row[advurl]" type="text" value="<?php echo htmlentities($row['advurl']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span>
                        <button type="button" id="plupload-advurl" class="btn btn-danger plupload" data-input-id="c-advurl"
                                data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-advurl">
                        <i class="fa fa-upload"></i> 上传
                        </button>
                    </span>
                </div>
                <span class="msg-box n-right" ></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-advurl"></ul>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">排序:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="sort" name="row[sort]" value="<?php echo htmlentities($row['sort']); ?>"  />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">状态:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[status]', ['1'=>__('Normal'), '2'=>__('Hidden')], $row['status']); ?>
        </div>
    </div>
    <div class="form-group hidden layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled">确定</button>
            <button type="reset" class="btn btn-default btn-embossed">重置</button>
        </div>
    </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo app('request')->env('app_debug')?'':'.min'; ?>.js"
        data-main="/assets/js/require-backend<?php echo app('request')->env('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>

    </body>
</html>