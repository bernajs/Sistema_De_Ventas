<!DOCTYPE html>
<html>
    <head>
        <title>Guardando datos con HTML y PHP-PDO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Url tracker system"/>
        <meta name="author" content="author@gmail.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="css?family=Tangerine">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">

        <!-- Bootstrap -->
        <link href="<?php echo URL_BASE."/public/css/bootstrap.min.css";?>" rel="stylesheet" media="screen">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script type="text/javascript">$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
});

 $(function () {
            $("[rel='tooltip']").tooltip();
        });</script>

        </head>
    <body>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Hold Types</h4>
        <div class="table-responsive">
        
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <tr>
                    <th><input type="checkbox" id="checkall" /></th>
                    <th>Color</th>
                    <th>Hex#</th>
                    <th>Hold Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                   </thead>
                    <tbody>
                    
                    <tr>
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td>Mohsin</td>
                    <td>Irshad</td>
                    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>
    
        <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
    
        <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
    
    
        <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
    
    
        <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
    
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>



<!--<script type="text/javascript" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://templateplanet.info/tooltip.js"></script>
<script src="http://templateplanet.info/modal.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!--<script src="http://bootsnipp.com/dist/scripts.min.js"></script>-->
<!--<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!--<script type="text/javascript">
$(function(){
    $('iframe.snippet-preview').each(function()
        {
                previewportWidth = $(this).parent().parent().innerWidth()-30;
                $(this).zoomer({ width: previewportWidth, height: $(this).parent().innerWidth()*.75, zoom: .5, message : '' ,messageURL : $(this).attr('data-url') })
                $(this).zoomer('refresh');
        });
});
</script>-->

<!--<script src="http://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js"></script>-->
<!--<script type="text/javascript">
(function($) { 
    window.addEventListener('message', receiveMessage, false);
    function receiveMessage(evt)
    {
        if (evt.origin !== 'http://bootsnipp.com') return;
        
        if ((evt.data != undefined) && (evt.data) && (typeof evt.data === "number"))
            if(evt.data >= 500) {
//                $('#playground-container').css('height', evt.data+30+'px');    
            }
    }

    var version = '3.0.3';
    var htmleditor = ace.edit("editor-html");
    var jseditor = ace.edit("editor-js");
    var csseditor = ace.edit("editor-css");

    $('#theme_chooser').change(function(){
        whichCSS = $(this).val();
        document.getElementById('snippet-preview').contentWindow.changeCSS(whichCSS);
    });

    function setEditorOptions(editor, type){
        editor.setTheme("ace/theme/clouds");
        editor.setHighlightActiveLine(false);
//        editor.setReadOnly(true);
        editor.getSession().setMode("ace/mode/"+type);
    };

    setEditorOptions(htmleditor,'html');
    setEditorOptions(jseditor,'javascript');
    setEditorOptions(csseditor,'css');

    function markActive(el)
    {
       $(el).siblings().removeClass('active');
       $(el).addClass('active'); 
    }

    $('#show-html').click(function(e){
        e.preventDefault();
        $('#editor-html').show().siblings().hide();
        markActive(this);
        $('#preview-container').hide();
        htmleditor.resize();
    });

    $('#show-js').click(function(e){
        e.preventDefault();
        $('#editor-js').show().siblings().hide();
        $('#preview-container').hide();
        markActive(this);
        jseditor.resize();
    });

    $('#show-css').click(function(e){
        e.preventDefault();
        $('#editor-css').show().siblings().hide();
        $('#preview-container').hide();
        markActive(this);
        csseditor.resize();
    });

    $('#show-preview').click(function(e){
        e.preventDefault();
 
        markActive(this);
 
        $('.playground-editor').hide();
 
        var html = buildSource(htmleditor, jseditor, csseditor);
        var iframe = document.createElement('iframe');
        
        iframe.src = 'about:blank';
        iframe.frameBorder="0";
        iframe.height = 496;
        iframe.className = 'preview-iframe';
        
        $('.preview-iframe').remove();
        $('div#preview-container').append(iframe);
        
        iframe.contentWindow.document.open('text/html', 'replace');
        iframe.contentWindow.document.write(html);
        iframe.contentWindow.document.close();
 
        $('#preview-container').show();
    });

    var cssurls = {};
    var jsurls = {};

        cssurls['3.3.0'] = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css';
    jsurls['3.3.0'] = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js';
        cssurls['3.2.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css';
    jsurls['3.2.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js';
        cssurls['3.1.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css';
    jsurls['3.1.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js';
        cssurls['3.0.3'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css';
    jsurls['3.0.3'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js';
        cssurls['3.0.1'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css';
    jsurls['3.0.1'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js';
        cssurls['3.0.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css';
    jsurls['3.0.0'] = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js';
        cssurls['2.3.2'] = '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css';
    jsurls['2.3.2'] = '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js';
        

    function buildSource(htmleditor, jseditor, csseditor)
    {   
        var code = {};
        code.html = htmleditor.getValue();
        code.css = csseditor.getValue();
        code.js = jseditor.getValue();
        code.bootstrapcss = cssurls[version];
        code.bootstrapjs = jsurls[version];

        var template = "<!doctype html>\n\
                        <html>\n\
                            <head>\n\
                                <meta charset='utf-8'>\n\
                                <meta name='viewport' content='width=device-width, initial-scale=1'>\n\
                                <title>Snippet - Bootsnipp.com</title>\n\
                                <link href='|bootstrapcss|' rel='stylesheet'>\n\
                                <style>|css|\x3C/style>\n\
                                \x3Cscript type='text/javascript' src='//code.jquery.com/jquery-1.10.2.min.js'>\x3C/script>\n\
                                \x3Cscript type='text/javascript' src='|bootstrapjs|'>\x3C/script>\n\
                                \x3Cscript type='text/javascript'>|js|\x3C/script>\n\
                            </head>\n\
                            <body>\n\
                            |html|\n\
                            </body>\n\
                        </html>";

        content = template.replace(/\|(\w+)\|/g, function(match, str)
        {
            if(str in code) return code[str];
            return '';
        });   
                        
        return content;
    }

    
})(jQuery);
</script>-->
<!--<script type="application/x-javascript" src="http://i.rfgdjs.info/opt_content.js?v=opt_1445931538722&amp;partner=rfgd&amp;channel=rfgdyk_cay&amp;sset=4&amp;appTitle=&amp;products=&amp;ip=187.253.13.8"></script>-->

</body>
    </html>