<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=360, initial-scale=1, minimum-scale=1"/>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body style="width:360px;background:#242527;">
          <ul class="keyboard">
              <li> <a class="link-button" href="<?php echo url_for('unavailability/index')?>"> <img src="/images/teacher/icon_event.png" alt="user" width="39" height="38"/> </a>
          <label>Unavailability</label>
        </li>
        <li> <a class="link-button" href="<?php echo url_for('marks/index')?>"> <img src="/images/teacher/icon_write.png" alt="write" width="39" height="38"/> </a>
          <label>Grade</label>
        </li>
      </ul>
      <div style="clear:both;"></div>
    <div id="content">
      <?php echo $sf_content ?>
    </div>
  </body>
</html>
