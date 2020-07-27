<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MinecraftCMS | Admin</title>
    <link rel="stylesheet" href="<?=base_url()?>css/admin.css">

   <script language="JavaScript">
        function fixie() {
            if (browserName=navigator.appName=="Microsoft Internet Explorer"){
                document.body.style.background = '#80B5FE';
                }
        }

        function NewBox() {
            document.getElementById('NewBox').style.display='block';
        }

        function NoNewBox() {
            document.getElementById('NewBox').style.display='none';
        }
   </script>

</head>
<body>

<header class="black-gradient">
  <a href="<?=base_url()?>admin">
    <img src="<?=base_url()?>images/admin/playercraft-logo.png" style="margin-left: 7px; float: left;"/>
  </a>
  <nav>
    <ul>
      <li>
        <a href="<?=base_url()?>admin">Страницы</a>
       </li>
      <li>
        <a href="<?=base_url()?>admin/widgets">Виджеты</a>
      </li>
      <li>
        <a href="<?=base_url()?>admin/misc">Другое</a>
      </li>
    </ul>
  </nav>
</header>
