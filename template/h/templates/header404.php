<!DOCTYPE html>
<!--[if IE 9]><!--> <html class="no-js ie9"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <script>
        document.onload = function () {
            document.body.className = document.body.className.replace('loading', '');
        };
    </script>
    <style>
        /*! normalize.css v6.0.0 | MIT License | github.com/necolas/normalize.css */
        button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}

        html {
            min-height: 100%;
            height: 100%;
            font-size: 62.5%;
        }

        body {
            min-height: 100vh;
            font-size: 1.6rem;
            line-height: 2.4rem;
            /*color: #595959;*/
            color: #262626;
        }

        body.show-fs-modal {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            overflow: hidden;
        }

        .wrapper {
            width: 121.6rem;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
        }

        .wrapper--footer {
            padding-left: 7.2rem;
            padding-right: 8rem;
        }

    </style>
</head>
<body data-page="<?=$page?>" class="<?=$page?>">
<div id="app">
    <div class="global-page">
        <div class="global-page-content">
            <header class="site-header">
                <a href="/" class="site-header__logo"><img src="/static/img/logo.svg" alt="Логотип"></a>
            </header>
